<?php

//Display errors for debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Records Dashboard – shortcode [records_dashboard] and its REST endpoint.
 *
 * Mirrors the layout of template.php while using live data from the
 * btn-officer-training-log plugin via the guw-chartcss helper functions.
 */

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;

// ═══════════════════════════════════════════════════════════════════════════════
// REST ENDPOINT  –  filtered stats + chart datasets
// ═══════════════════════════════════════════════════════════════════════════════

add_action('rest_api_init', function () {
    register_rest_route('briefingroom/v1', '/records_dashboard_rest', [
        'methods'             => 'POST',
        'callback'            => 'records_dashboard_rest_callback',
        'permission_callback' => fn () => current_user_can('read'),
    ]);
});

function records_dashboard_format_user_rows(array $rows, string $role_label): array {
    return array_map(function ($row) use ($role_label) {
        return [
            'first_name' => (string) ($row->firstName ?? ''),
            'last_name'  => (string) ($row->lastName ?? ''),
            'email'      => (string) ($row->emailAddress ?? ''),
            'user_id'    => (string) ($row->userId ?? ''),
            'role'       => $role_label,
            'station'    => (string) ($row->station ?? ''),
        ];
    }, $rows);
}

function records_dashboard_build_table(array $columns, array $rows): array {
    return [
        'columns' => $columns,
        'rows'    => $rows,
    ];
}

function records_dashboard_rest_callback(WP_REST_Request $request) {
    $start_date = !empty($request->get_param('start_date'))
        ? sanitize_text_field($request->get_param('start_date')) : null;
    $end_date   = !empty($request->get_param('end_date'))
        ? sanitize_text_field($request->get_param('end_date'))   : null;
    $station_id = !empty($request->get_param('station'))
        ? (int) $request->get_param('station')                   : null;
    $user_role  = !empty($request->get_param('user_role'))
        ? sanitize_text_field($request->get_param('user_role'))  : null;

    $weeks = 12; // default to 12 weeks if no valid date range provided
    if ($start_date && $end_date) {
        $start_ts = strtotime($start_date);
        $end_ts = strtotime($end_date);
        if ($end_ts > $start_ts) {
            $days = ($end_ts - $start_ts) / 86400;
            $weeks = ceil($days / 7);
        }
    }

    $agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id() ?? 0;

    // if (empty($agency_id) && current_user_can('administrator')) {
    //     $agency_id = 33;
    // }

    if( empty($agency_id)) {
        return rest_ensure_response([
            'error' => 'No agency found for current user.',
        ]);
    }


    $filters = [
        'start_date' => $start_date,
        'end_date'   => $end_date,
        'station_id' => $station_id,
        'user_role'  => $user_role,
    ];

    // ── Users ──────────────────────────────────────────────────────────────
    $managers  = Manager::query()->where('organizationId', $agency_id, '=')->getAll();
    $sergeants = Sergeant::query()
        ->select('sergeant.*', 'station.name as station')
        ->leftJoin('btn_stations', 'sergeant.stationId', 'station.id', 'station')
        ->where('station.agencyId', $agency_id)
        ->getAll();
    $officers  = Officer::query()
        ->select('officer.*', 'station.name as station')
        ->leftJoin('btn_stations', 'officer.stationId', 'station.id', 'station')
        ->where('station.agencyId', $agency_id)
        ->getAll();

    // Build the agency-wide lookup BEFORE narrowing by station/role so that
    // login and session records can always be annotated with name/email/role
    // even when a user's current roster entry is at a different station.
    $user_lookup = [];
    foreach (array_merge(
        records_dashboard_format_user_rows($managers, 'Manager'),
        records_dashboard_format_user_rows($sergeants, 'Facilitator'),
        records_dashboard_format_user_rows($officers, 'Student')
    ) as $row) {
        $user_lookup[(string) $row['user_id']] = $row;
    }

    // Narrow by station when a station filter is active
    if ($station_id) {
        $sergeants = array_values(array_filter(
            $sergeants, fn ($s) => (int) ($s->stationId ?? 0) === $station_id
        ));
        $officers  = array_values(array_filter(
            $officers, fn ($o) => (int) ($o->stationId ?? 0) === $station_id
        ));
    }

    if ($user_role === 'manager') {
        $sergeants = [];
        $officers  = [];
    } elseif ($user_role === 'facilitator') {
        $managers = [];
        $officers = [];
    } elseif ($user_role === 'student') {
        $managers  = [];
        $sergeants = [];
    }

    $m_count = count($managers);
    $s_count = count($sergeants);
    $o_count = count($officers);
    $user_total = $m_count + $s_count + $o_count;

    $user_rows = array_map(function ($r) { unset($r['user_id']); return $r; }, array_merge(
        records_dashboard_format_user_rows($managers, 'Manager'),
        records_dashboard_format_user_rows($sergeants, 'Facilitator'),
        records_dashboard_format_user_rows($officers, 'Student')
    ));

    // ── Logins ──────────────────────────────────────────────────────────────
    // user_role is applied at SQL level inside btn_get_user_logins via ul.role.
    $login_rows  = btn_get_user_logins($filters) ?? [];

    $login_total = count($login_rows);

    $login_by_user = [];
    foreach ($login_rows as $row) {
        $user_meta = $user_lookup[(string) ($row['userId'] ?? '')] ?? [];
        $name = trim(($user_meta['first_name'] ?? '') . ' ' . ($user_meta['last_name'] ?? ''));
        if ($name === '') $name = 'Unknown';
        $login_by_user[$name] = ($login_by_user[$name] ?? 0) + 1;
    }
    arsort($login_by_user);
    $login_by_user = array_filter($login_by_user, function ($count) {
        return $count >= 1;
    });

    // ── Sessions ────────────────────────────────────────────────────────────
    $session_rows  = btn_get_training_sessions($filters);

    if ($user_role) {
        $role_map     = ['manager' => 'Manager', 'facilitator' => 'Facilitator', 'student' => 'Student'];
        $display_role = $role_map[$user_role] ?? $user_role;
        $session_rows = array_values(array_filter($session_rows, function ($row) use ($user_lookup, $display_role) {
            $meta = $user_lookup[(string) ($row['userId'] ?? '')] ?? null;
            return $meta && ($meta['role'] ?? '') === $display_role;
        }));
    }

    $session_total = array_sum(array_map(fn ($row) => (int) ($row['officer_count'] ?? 0), $session_rows));
    $session_count = count($session_rows);

    $sessions_by_user = [];
    foreach ($session_rows as $row) {
        $user_meta = $user_lookup[(string) ($row['userId'] ?? '')] ?? [];
        $name = trim($user_meta['first_name'] . ' ' . $user_meta['last_name']);
        if (empty($name)) $name = 'Unknown';
        $sessions_by_user[$name] = ($sessions_by_user[$name] ?? 0) + 1;
    }
    arsort($sessions_by_user);
    $sessions_by_user = array_filter($sessions_by_user, function ($count) {
        return $count >= 1;
    });

    // ── Training time (one attendance record per officer per session) ───────
    $sessions_by_id = [];
    foreach ($session_rows as $row) {
        $sessions_by_id[(int) ($row['id'] ?? 0)] = $row;
    }
    $session_ids = array_values(array_filter(array_keys($sessions_by_id)));

    $attendee_rows = [];
    if (!empty($session_ids)) {
        global $wpdb;
        $placeholders  = implode(',', array_fill(0, count($session_ids), '%d'));
        $attendee_rows = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT sessionId, userId FROM wp_btn_training_records WHERE sessionId IN ($placeholders)",
                $session_ids
            ),
            ARRAY_A
        );
    }

    // Most recently completed session's attendees first, matching the session query's own ordering.
    usort($attendee_rows, function ($a, $b) use ($sessions_by_id) {
        $ta = strtotime($sessions_by_id[(int) ($a['sessionId'] ?? 0)]['completedAt'] ?? '') ?: 0;
        $tb = strtotime($sessions_by_id[(int) ($b['sessionId'] ?? 0)]['completedAt'] ?? '') ?: 0;
        return $tb <=> $ta;
    });

    $total_mins       = 0;
    $training_by_week = [];
    foreach ($attendee_rows as $attendee) {
        $session = $sessions_by_id[(int) ($attendee['sessionId'] ?? 0)] ?? null;
        if (!$session) continue;

        $mins        = (int) ($session['duration'] ?? 0);
        $total_mins += $mins;

        if (!empty($session['completedAt'])) {
            $ts  = strtotime($session['completedAt']);
            $dow = (int) date('N', $ts);
            $wk  = date('Y-m-d', $ts - (($dow - 1) * 86400));
            $training_by_week[$wk] = round(($training_by_week[$wk] ?? 0) + $mins / 60, 2);
        }
    }
    ksort($training_by_week);
    $total_hrs = round($total_mins / 60, 1);

    $login_table_rows = array_map(function ($row) use ($user_lookup) {
        $user_meta = $user_lookup[(string) ($row['userId'] ?? '')] ?? [];

        return [
            'first_name' => (string) ($user_meta['first_name'] ?? ''),
            'last_name'  => (string) ($user_meta['last_name'] ?? ''),
            'email'      => (string) ($user_meta['email'] ?? ''),
            'role'       => (string) ($user_meta['role'] ?? ''),
            'login_at'   => !empty($row['loginAt']) ? date('M j, Y g:i A', strtotime($row['loginAt'])) : '',
        ];
    }, $login_rows);

    $session_table_rows = array_map(function ($row) use ($user_lookup) {
        $user_meta = $user_lookup[(string) ($row['userId'] ?? '')] ?? [];

        return [
            'completed_at'  => !empty($row['completedAt']) ? date('m/d/Y', strtotime($row['completedAt'])) : '',
            'training'      => (string) ($row['post_title'] ?? ''),
            'name'          => trim((string) ($user_meta['first_name'] ?? '') . ' ' . (string) ($user_meta['last_name'] ?? '')),
            'station'       => (string) ($user_meta['station'] ?? ''),
            'duration_min'  => (int) ($row['duration'] ?? 0),
            'officer_count' => (int) ($row['officer_count'] ?? 0),
        ];
    }, $session_rows);

    $training_table_rows = array_map(function ($attendee) use ($sessions_by_id, $user_lookup) {
        $session   = $sessions_by_id[(int) ($attendee['sessionId'] ?? 0)] ?? [];
        $user_meta = $user_lookup[(string) ($attendee['userId'] ?? '')] ?? [];
        $minutes   = (int) ($session['duration'] ?? 0);

        return [
            'completed_at' => !empty($session['completedAt']) ? date('m/d/Y', strtotime($session['completedAt'])) : '',
            'training'     => (string) ($session['post_title'] ?? ''),
            'name'         => trim((string) ($user_meta['first_name'] ?? '') . ' ' . (string) ($user_meta['last_name'] ?? '')),
            'email'        => (string) ($user_meta['email'] ?? ''),
            'hours'        => round($minutes / 60, 2),
        ];
    }, $attendee_rows);

    return rest_ensure_response([
        'stats' => [
            'users'         => [
                'total'     => $user_total,
                'managers'  => $m_count,
                'sergeants' => $s_count,
                'officers'  => $o_count,
            ],
            'logins'        => $login_total,
            'sessions'      => $session_total,
            'sessions_count' => $session_count,
            'training_time' => $total_hrs,
            'avg_logins'    => ($s_count) > 0 ? round($login_total / $s_count, 1) : 0,
            // 'avg_logins' => ($s_count) > 0 ? round($login_total / $s_count * 100, 1) : 0,
            'avg_sessions'  => $weeks > 0 ? round($session_total / $weeks, 1) : 0,
            'avg_training'  => $weeks > 0 ? round($total_hrs / $weeks, 1) : 0,
        ],
        'charts' => [
            'users' => [
                'labels'   => ['Managers', 'Facilitators', 'Students'],
                'datasets' => [[
                    'data'            => [$m_count, $s_count, $o_count],
                    'backgroundColor' => ['#1a73e8', '#34a853', '#fbbc04'],
                    'borderColor'     => '#fff',
                    'borderWidth'     => 2,
                ]],
            ],
            'logins' => [
                'labels'   => array_keys($login_by_user),
                'datasets' => [[
                    'label'           => 'Logins',
                    'data'            => array_values($login_by_user),
                    'backgroundColor' => '#1a73e8',
                    'borderRadius'    => 4,
                ]],
            ],
            'sessions' => [
                'labels'   => array_keys($sessions_by_user),
                'datasets' => [[
                    'label'           => 'Sessions',
                    'data'            => array_values($sessions_by_user),
                    'backgroundColor' => '#34a853',
                    'borderRadius'    => 4,
                ]],
            ],
            'training' => [
                'labels'   => array_map(fn($k) => date('M j', strtotime($k)), array_keys($training_by_week)),
                'datasets' => [[
                    'label'           => 'Hours',
                    'data'            => array_values($training_by_week),
                    'borderColor'     => '#9b72cb',
                    'backgroundColor' => 'rgba(155,114,203,0.1)',
                    'fill'            => true,
                    'tension'         => 0.35,
                ]],
            ],
        ],
        'tables' => [
            'users' => records_dashboard_build_table([
                ['key' => 'first_name', 'label' => 'First Name'],
                ['key' => 'last_name', 'label' => 'Last Name'],
                ['key' => 'email', 'label' => 'Email Address'],
                ['key' => 'role', 'label' => 'Role'],
                ['key' => 'station', 'label' => 'Station'],
            ], $user_rows),
            'logins' => records_dashboard_build_table([
                ['key' => 'first_name', 'label' => 'First Name'],
                ['key' => 'last_name', 'label' => 'Last Name'],
                ['key' => 'email', 'label' => 'Email Address'],
                ['key' => 'role', 'label' => 'Role'],
                ['key' => 'login_at', 'label' => 'Login At'],
            ], $login_table_rows),
            'sessions' => records_dashboard_build_table([
                ['key' => 'completed_at', 'label' => 'Completed At'],
                ['key' => 'training', 'label' => 'Training'],
                ['key' => 'name', 'label' => 'Name'],
                ['key' => 'station', 'label' => 'Station'],
                ['key' => 'officer_count', 'label' => 'Officers'],
                ['key' => 'duration_min', 'label' => 'Duration (Min)'],
            ], $session_table_rows),
            'training' => records_dashboard_build_table([
                ['key' => 'completed_at', 'label' => 'Completed At'],
                ['key' => 'training', 'label' => 'Training'],
                ['key' => 'name', 'label' => 'Name'],
                ['key' => 'email', 'label' => 'Email Address'],
                ['key' => 'hours', 'label' => 'Hours'],
            ], $training_table_rows),
        ],
    ]);
}

// ═══════════════════════════════════════════════════════════════════════════════
// SHORTCODE  –  [records_dashboard]
// ═══════════════════════════════════════════════════════════════════════════════

add_shortcode('records_dashboard', function () {

    // Enqueue Chart.js (deferred; renders after page JS)
    wp_enqueue_script(
        'chartjs',
        'https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js',
        [],
        null,
        true
    );

    $agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id() ?? 0;
    // if (empty($agency_id) && current_user_can('administrator')) {
    //     $agency_id = 33;
    // }

    if( empty($agency_id)) {
        return '<p>No agency found for current user.</p>';
    }  


    // ── Agency-wide stats (full scope, no date/station filter) ─────────────
    $agency      = Agency::find($agency_id);
    $agency_name = $agency->name ?? 'Your Agency';

    $all_managers  = Manager::query()->where('organizationId', $agency_id, '=')->getAll();
    $all_sergeants = Sergeant::query()
        ->select('sergeant.*', 'station.name as station')
        ->leftJoin('btn_stations', 'sergeant.stationId', 'station.id', 'station')
        ->where('station.agencyId', $agency_id)
        ->getAll();
    $all_officers  = Officer::query()
        ->select('officer.*', 'station.name as station')
        ->leftJoin('btn_stations', 'officer.stationId', 'station.id', 'station')
        ->where('station.agencyId', $agency_id)
        ->getAll();

    $total_mgr   = count($all_managers);
    $total_sgt   = count($all_sergeants);
    $total_ofc   = count($all_officers);
    $total_users = $total_mgr + $total_sgt + $total_ofc;

    // $logins_data  = get_login_counts($agency_id);
    // Unify and use btn_get_user_logins with no filters for the total login count
    $logins_data = btn_get_user_logins(['start_date' => '1970-01-01', 'end_date' => date('Y-m-d')], true);
    $total_logins = is_array($logins_data) ? count($logins_data) : 0;

    $all_sessions      = btn_get_training_sessions([]);
    $total_sessions    = array_sum(array_map(fn ($row) => (int) ($row['officer_count'] ?? 0), $all_sessions));
    $total_session_count = count($all_sessions);

    $earliest_session_ts = null;
    foreach ($all_sessions as $session) {
        $completed_at = !empty($session['completedAt']) ? strtotime($session['completedAt']) : null;
        if ($completed_at && (!$earliest_session_ts || $completed_at < $earliest_session_ts)) {
            $earliest_session_ts = $completed_at;
        }
    }

    $weeks = 1;
    if ($earliest_session_ts) {
        $days = max(1, (time() - $earliest_session_ts) / 86400);
        $weeks = max(1, ceil($days / 7));
    }

    $total_mins = get_total_training_time($agency_id);
    $total_hrs  = round($total_mins / 60, 1);

    $avg_logins_all_time   = ($total_sgt) > 0 ? round($total_logins / $total_sgt, 1) : 0;
    // $avg_logins_all_time   = ($total_sgt) > 0 ? round($total_logins / $total_sgt * 100, 1) : 0;

    $avg_sessions_all_time = round($total_sessions / $weeks, 1);
    $avg_training_all_time = round($total_hrs / $weeks, 1);

    $stations  = get_user_station_by_agency($agency_id);
    $nonce     = wp_create_nonce('wp_rest');
    $rest_root = esc_url_raw(rest_url());

    ob_start();
    ?>
<style>
#btn-records-dashboard {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    color: #202124;
    background: #f8f9fa;
    padding: 1.5rem;
    box-sizing: border-box;
}
#btn-records-dashboard * { box-sizing: border-box; }

/* ── Header ── */
#btn-records-dashboard .brd-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1.5rem;
}
#btn-records-dashboard .brd-header h1 {
    font-size: 1.5rem;
    font-weight: 500;
    margin: 0;
    color: #202124;
}
#btn-records-dashboard .brd-header p {
    font-size: 0.875rem;
    color: #5f6368;
    margin: 0.25rem 0 0;
}
#btn-records-dashboard .brd-header-actions { display: flex; gap: 0.5rem; }

/* ── Buttons ── */
#btn-records-dashboard .brd-btn-outline {
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    color: #1a73e8;
    border: 1px solid #dadce0;
    border-radius: 4px;
    background: #fff;
    cursor: pointer;
}
#btn-records-dashboard .brd-btn-outline:hover { background: #f1f3f4; }
#btn-records-dashboard .brd-btn-primary {
    padding: 0.75rem 1rem;
    font-size: 0.875rem;
    color: #fff;
    background: #1a73e8;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
#btn-records-dashboard .brd-btn-primary:hover { background: #1765cc; }

/* ── Section headings ── */
#btn-records-dashboard .brd-section-row {
    display: flex;
    align-items: baseline;
    justify-content: space-between;
    margin-bottom: 0.75rem;
}
#btn-records-dashboard .brd-section-heading {
    font-size: 0.75rem;
    font-weight: 500;
    color: #5f6368;
    text-transform: uppercase;
    letter-spacing: 0.04em;
}
#btn-records-dashboard .brd-section-sub {
    font-size: 0.875rem;
    font-weight: 500;
    color: #202124;
}

/* ── Grid layouts ── */
#btn-records-dashboard .brd-grid-4 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
    margin-bottom: 1.5rem;
}

/* ── Cards ── */
#btn-records-dashboard .brd-card {
    background: #fff;
    border: 1px solid #dadce0;
    border-radius: 8px;
    padding: 1rem;
    position: relative;
}
section.brd-agency-wide {
    margin: 0 0 3rem;
    border-bottom: 1px solid #cccccc;
    padding: 0 0 1rem;
}
#btn-records-dashboard .brd-agency-wide .brd-card {
    background: linear-gradient(220deg, #5695e9 0%, #00449d 100%);
}
#btn-records-dashboard .brd-card-label {
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    color: #5f6368;
    margin-bottom: 0.5rem;
}
#btn-records-dashboard .brd-agency-wide .brd-card-label {
    color: rgba(255,255,255,0.9);
}
#btn-records-dashboard .brd-agency-wide .brd-card-value {
    color: #fff;
}
#btn-records-dashboard .brd-agency-wide .brd-breakdown-row {
    color: rgba(255,255,255,0.9);
}
#btn-records-dashboard .brd-agency-wide .brd-breakdown-row strong {
    color: #fff;
    font-weight: 600;
}
#btn-records-dashboard .brd-agency-wide .brd-card-value sup {
    color: rgba(255,255,255,0.9);
}
#btn-records-dashboard .brd-card-value {
    font-size: 1.875rem;
    font-weight: 600;
    color: #202124;
    line-height: 1.1;
    margin-bottom: 0.75rem;
}
#btn-records-dashboard .brd-card-value sup {
    font-size: 1rem;
    font-weight: 400;
    color: #5f6368;
    vertical-align: middle;
    margin-left: 2px;
}
#btn-records-dashboard .brd-breakdown-row {
    display: flex;
    justify-content: space-between;
    font-size: 0.75rem;
    color: #5f6368;
    padding: 2px 0;
}
#btn-records-dashboard .brd-breakdown-row strong { color: #202124; font-weight: 500; }

/* ── Filter bar ── */
#btn-records-dashboard .brd-filter-bar {
    background: #fff;
    border: 1px solid #dadce0;
    border-radius: 8px;
    padding: 1rem;
    margin-bottom: 1.5rem;
}
#btn-records-dashboard .brd-filter-form {
    display: grid;
    grid-template-columns: 3fr 5fr 2fr 2fr;
    gap: 1rem;
    align-items: end;
}
#btn-records-dashboard .brd-form-group label {
    display: block;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    color: #5f6368;
    margin-bottom: 0.25rem;
}
#btn-records-dashboard .brd-form-group select,
#btn-records-dashboard .brd-form-group input[type="date"] {
    width: 100%;
    border: 1px solid #dadce0;
    border-radius: 4px;
    padding: 0.5rem 0.75rem;
    font-size: 0.875rem;
    background: #fff;
    color: #202124;
}

/* ── Clickable widgets ── */
#btn-records-dashboard .brd-widget {
    cursor: pointer;
    transition: box-shadow 0.15s ease, transform 0.15s ease;
}
#btn-records-dashboard .brd-widget:hover {
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transform: translateY(-1px);
}
#btn-records-dashboard .brd-widget.active {
    box-shadow: 0 0 0 2px #1a73e8, 0 4px 12px rgba(26,115,232,0.2);
}
#btn-records-dashboard .brd-widget.active .brd-card-label { color: #1a73e8; }
#btn-records-dashboard .brd-widgets-hint { font-size: 0.75rem; color: #5f6368; }

/* ── Chart area ── */
#btn-records-dashboard .brd-chart-area {
    background: #fff;
    border: 1px solid #dadce0;
    border-radius: 8px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
}
#btn-records-dashboard .brd-chart-header {
    display: flex;
    align-items: baseline;
    justify-content: space-between;
    margin-bottom: 1rem;
}
#btn-records-dashboard .brd-chart-title {
    font-size: 1.125rem;
    font-weight: 500;
    color: #202124;
    margin: 0;
}
#btn-records-dashboard .brd-chart-subtitle {
    font-size: 0.875rem;
    color: #5f6368;
    margin: 0.25rem 0 0;
}
#btn-records-dashboard .brd-chart-canvas-wrap {
    position: relative;
    height: 360px;
    overflow-x: auto;
    overflow-y: hidden;
}
#btn-records-dashboard .brd-chart-canvas-wrap.table-view {
    height: auto;
    min-height: 0;
    overflow-x: visible;
    overflow-y: visible;
}
#btn-records-dashboard .brd-chart-canvas-inner {
    position: relative;
    height: 100%;
    width: 100%;
}
#btn-records-dashboard .brd-chart-scroll-wrap {
    position: relative;
}
#btn-records-dashboard .brd-scroll-hint {
    position: absolute;
    top: 50%;
    right: 4px;
    transform: translateY(-50%);
    width: 35px;
    height: 90%;
    background: rgba(255, 255, 255, 0.5);
    border: 1px solid #dadce0;
    border-radius: 4px;
    box-shadow: -2px 0 8px rgba(0,0,0,0.06);
    color: #9aa0a6;
    font-size: 3.5rem;
    line-height: 1;
    cursor: pointer;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 0;
    z-index: 2;
}
#btn-records-dashboard .brd-scroll-hint.visible {
    display: flex;
}
#btn-records-dashboard .brd-scroll-hint:hover {
    background: #fff;
    color: #1a73e8;
}
#btn-records-dashboard .brd-chart-loading {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    color: #5f6368;
    font-size: 0.875rem;
}

/* ── Date-range inputs ── */
#btn-records-dashboard .brd-date-range-inputs {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
#btn-records-dashboard .brd-date-range-inputs input[type="date"] {
    flex: 1;
    min-width: 0;
}
#btn-records-dashboard .brd-date-sep {
    color: #5f6368;
    flex-shrink: 0;
}

/* ── Chart footer (toggle + export) ── */
#btn-records-dashboard .brd-chart-nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 0.875rem 0;
    padding-top: 0.75rem;
    border-top: 1px solid #f1f3f4;
}
#btn-records-dashboard .brd-view-toggle {
    display: flex;
    border: 1px solid #dadce0;
    border-radius: 4px;
    overflow: hidden;
}
#btn-records-dashboard .brd-toggle-btn {
    padding: 0.375rem 0.875rem;
    font-size: 0.875rem;
    background: #fff;
    border: none;
    border-right: 1px solid #dadce0;
    cursor: pointer;
    color: #5f6368;
    line-height: 1.4;
}
#btn-records-dashboard .brd-toggle-btn:last-child { border-right: none; }
#btn-records-dashboard .brd-export-actions { display: flex; gap: 0.5rem; }
#btn-records-dashboard .brd-toggle-btn.active {
    background: #e8f0fe;
    color: #1a73e8;
    font-weight: 500;
}

/* ── Chart data table ── */
#btn-records-dashboard .brd-data-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.875rem;
    table-layout: fixed;
}
#btn-records-dashboard .brd-data-table th {
    text-align: left;
    padding: 0.5rem 0.75rem;
    background: #f8f9fa;
    border-bottom: 2px solid #dadce0;
    font-weight: 500;
    color: #5f6368;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.04em;
}
#btn-records-dashboard .brd-data-table td {
    padding: 0.5rem 0.75rem;
    border-bottom: 1px solid #f1f3f4;
    color: #202124;
}
#btn-records-dashboard .brd-data-table tr:last-child td { border-bottom: none; }

/* ── Sortable table headers ── */
#btn-records-dashboard .brd-data-table th.brd-sortable { cursor: pointer; user-select: none; white-space: nowrap; }
#btn-records-dashboard .brd-data-table th.brd-sortable:hover { background: #e8f0fe; color: #1a73e8; }
#btn-records-dashboard .brd-data-table th.brd-sortable.sort-active { color: #1a73e8; }
#btn-records-dashboard .brd-sort-arrow { display: inline-block; margin-left: 4px; font-size: 0.7em; opacity: 0.5; vertical-align: middle; }
#btn-records-dashboard .brd-data-table th.sort-active .brd-sort-arrow { opacity: 1; }

/* ── Table toolbar (search + row count) ── */
#btn-records-dashboard .brd-table-toolbar { display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; }
#btn-records-dashboard .brd-table-search { flex: 0 0 260px; padding: 0.4rem 0.75rem; border: 1px solid #dadce0; border-radius: 4px; font-size: 0.875rem; color: #202124; background: #fff; }
#btn-records-dashboard .brd-table-search:focus { outline: none; border-color: #1a73e8; box-shadow: 0 0 0 2px rgba(26,115,232,0.2); }
#btn-records-dashboard .brd-table-count { font-size: 0.75rem; color: #5f6368; }
#btn-records-dashboard .brd-no-match { text-align: center; color: #5f6368; padding: 1.5rem 0; font-style: italic; }

#btn-records-dashboard .brd-agency-wide .brd-card-note {
    color: #fff;
}
.brd-card-note {
    font-size: .75rem;
    position: absolute;
    bottom: 1rem;
}

/* ── Responsive ── */
@media (max-width: 960px) {
    #btn-records-dashboard .brd-grid-4 { grid-template-columns: repeat(2, 1fr); }
    #btn-records-dashboard .brd-filter-form { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
    #btn-records-dashboard .brd-grid-4 { grid-template-columns: 1fr 1fr; }
    #btn-records-dashboard .brd-filter-form { grid-template-columns: 1fr; }
}
</style>

<div id="btn-records-dashboard">

    <!-- ── Header ── -->
    <header class="brd-header">
        <div>
            <h1>Records Dashboard</h1>
            <p>Usage analytics for your agency</p>
        </div>
    </header>

    <!-- ── Agency-Wide Fixed Stats ── -->
    <section class="brd-agency-wide">
        <div class="brd-section-row">
            <span class="brd-section-heading">Agency-Wide Stats</span>
            <span class="brd-section-sub">
                <?php 
                // remove backslashes in agency name
                $agency_name = str_replace('\\', '', $agency_name);
                echo esc_html($agency_name);
                ?>
            </span>
        </div>
        <div class="brd-grid-4">
            <div class="brd-card">
                <div class="brd-card-label">Total Personnel</div>
                <div class="brd-card-value"><?php echo esc_html(number_format($total_users)); ?></div>
                <div>
                    <div class="brd-breakdown-row"><span>Managers</span><strong><?php echo esc_html($total_mgr); ?></strong></div>
                    <div class="brd-breakdown-row"><span>Facilitators</span><strong><?php echo esc_html($total_sgt); ?></strong></div>
                    <div class="brd-breakdown-row"><span>Students</span><strong><?php echo esc_html($total_ofc); ?></strong></div>
                </div>
            </div>
            <div class="brd-card">
                <div class="brd-card-label">Logins By Users With Access</div>
                <div class="brd-card-value"><?php echo esc_html(number_format($total_logins)); ?></div>
                <div class="brd-card-note">*Data available as of Feb 1, 2026</div>
                <!-- <div class="brd-breakdown-row"><span>Avg <strong><?php echo esc_html(number_format($avg_logins_all_time, 1)); ?></strong> logins/facilitator</span></div> -->
            </div>
            <div class="brd-card">
                <div class="brd-card-label">Officers In Attendance</div>
                <div class="brd-card-value"><?php echo esc_html(number_format($total_sessions)); ?></div>
                <div class="brd-card-note">*As reported by your facilitators</div>
                <div class="brd-breakdown-row"><span>Sessions Recorded</span><strong><?php echo esc_html(number_format($total_session_count)); ?></strong></div>
            </div>
            <div class="brd-card">
                <div class="brd-card-label">Total Training Time</div>
                <div class="brd-card-value"><?php echo esc_html(number_format($total_hrs, 1)); ?><sup>hrs</sup></div>
                <div class="brd-card-note">*As reported by your facilitators</div>
                <!-- <div class="brd-breakdown-row"><span>Avg <strong><?php echo esc_html(number_format($avg_training_all_time, 1)); ?></strong> hrs/week</span></div> -->
            </div>
        </div>
    </section>
    <!-- ── Filter Bar ── -->
    <section class="brd-filter-bar">
        <form id="brd-filter-form" class="brd-filter-form">
            <!-- <div class="brd-form-group">
                <label for="brd-division">Division</label>
                <select id="brd-division" name="division">
                    <option value="">All</option>
                </select>
            </div> -->
            <div class="brd-form-group">
                <label for="brd-station">Station / Facility</label>
                <select id="brd-station" name="station">
                    <option value="">All</option>
                    <?php foreach ($stations as $st): ?>
                        <option value="<?php echo esc_attr($st->id); ?>"><?php echo esc_html($st->name); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="brd-form-group brd-date-range-group">
                <label>Date Range</label>
                <div class="brd-date-range-inputs">
                    <input type="date" id="brd-start-date" name="start_date" value="<?php echo esc_attr(date('Y-m-d', strtotime('today -90 days'))); ?>" aria-label="Start date">
                    <span class="brd-date-sep">&ndash;</span>
                    <input type="date" id="brd-end-date" name="end_date" value="<?php echo esc_attr(date('Y-m-d')); ?>" aria-label="End date">
                </div>
            </div>
            <div class="brd-form-group">
                <label for="brd-user-role">User Role</label>
                <select id="brd-user-role" name="user_role">
                    <option value="">All Roles</option>
                    <option value="manager">Manager</option>
                    <option value="facilitator">Facilitator</option>
                    <option value="student">Student</option>
                </select>
            </div>
            <div class="brd-form-group">
                <label>&nbsp;</label>
                <button type="submit" class="brd-btn-primary" style="width:100%;">Apply</button>
            </div>
        </form>
    </section>

    <!-- ── Filtered Stats Widgets ── -->
    <section class="brd-filtered-widgets">
        <div class="brd-section-row">
            <span class="brd-section-heading">Filtered Stats</span>
            <span class="brd-widgets-hint">Click a widget to update the chart</span>
        </div>
        <div class="brd-grid-4">

            <div id="brd-w-users" class="brd-card brd-widget active" data-chart="users">
                <div class="brd-card-label">Total Personnel</div>
                <div class="brd-card-value brd-stat-users">–</div>
                <div>
                    <div class="brd-breakdown-row"><span>Managers</span><strong class="brd-stat-managers">–</strong></div>
                    <div class="brd-breakdown-row"><span>Facilitators</span><strong class="brd-stat-sergeants">–</strong></div>
                    <div class="brd-breakdown-row"><span>Students</span><strong class="brd-stat-officers">–</strong></div>
                </div>
            </div>

            <div id="brd-w-logins" class="brd-card brd-widget" data-chart="logins">
                <div class="brd-card-label">Logins By Users With Access</div>
                <div class="brd-card-value brd-stat-logins">–</div>
                <div class="brd-card-note">*Data available as of Feb 1, 2026</div>
                <!-- <div class="brd-breakdown-row"><span>Avg <strong class="brd-stat-logins-avg">–</strong> logins/facilitator</span></div> -->
            </div>

            <div id="brd-w-sessions" class="brd-card brd-widget" data-chart="sessions">
                <div class="brd-card-label">Officers In Attendance</div>
                <div class="brd-card-value brd-stat-sessions">–</div>
                <div class="brd-card-note">*As reported by your facilitators</div>
                <div class="brd-breakdown-row"><span>Sessions Recorded</span><strong class="brd-stat-sessions-count">–</strong></div>
            </div>

            <div id="brd-w-training" class="brd-card brd-widget" data-chart="training">
                <div class="brd-card-label">Total Training Time</div>
                <div class="brd-card-value brd-stat-training">– <sup>hrs</sup></div>
                <div class="brd-card-note">*As reported by your facilitators</div>
                <!-- <div class="brd-breakdown-row"><span>Avg <strong class="brd-stat-training-avg">–</strong> hrs/week</span></div> -->
            </div>

        </div>
    </section>

    <!-- ── Chart Area ── -->
    <section class="brd-chart-area">
        <div class="brd-chart-header">
            <div>
                <p id="brd-chart-title" class="brd-chart-title">User breakdown</p>
                <p id="brd-chart-subtitle" class="brd-chart-subtitle">Distribution of users by role</p>
            </div>
        </div>
        <div class="brd-chart-nav">
            <div class="brd-view-toggle">
                <button class="brd-view-graph brd-toggle-btn active" type="button">Graph</button>
                <button class="brd-view-table brd-toggle-btn" type="button">Table</button>
            </div>
            <div class="brd-export-actions">
                <button class="brd-export-png brd-btn-outline brd-png-btn" type="button">Export PNG</button>
                <button class="brd-export-csv brd-btn-outline brd-export-btn" type="button" style="display:none;">Export CSV</button>
            </div>
        </div>
        <div class="brd-chart-scroll-wrap">
            <div class="brd-chart-canvas-wrap">
                <div class="brd-chart-loading" id="brd-chart-loading">Loading…</div>
                <div class="brd-chart-canvas-inner" id="brd-chart-canvas-inner">
                    <canvas id="brd-main-chart" style="display:none;"></canvas>
                </div>
                <div id="brd-chart-table-wrap" style="display:none; overflow-x:auto;"></div>
            </div>
            <button type="button" class="brd-scroll-hint brd-scroll-hint-right" id="brd-scroll-hint-right" aria-label="Scroll right for more">›</button>
        </div>
        <div class="brd-chart-nav">
            <div class="brd-view-toggle">
                <button class="brd-view-graph brd-toggle-btn active" type="button">Graph</button>
                <button class="brd-view-table brd-toggle-btn" type="button">Table</button>
            </div>
            <div class="brd-export-actions">
                <button class="brd-export-png brd-btn-outline brd-png-btn" type="button">Export PNG</button>
                <button class="brd-export-csv brd-btn-outline brd-export-btn" type="button" style="display:none;">Export CSV</button>
            </div>
        </div>
    </section>

</div><!-- #btn-records-dashboard -->

<script>
(function ($) {
    var REST_ROOT  = <?php echo wp_json_encode($rest_root); ?>;
    var REST_NONCE = <?php echo wp_json_encode($nonce); ?>;

    var _chartData = null;
    var _activeKey = 'users';
    var _chartInst = null;
    var _viewMode  = 'graph'; // 'graph' | 'table'

    var _tableState = {
        users:    { sortCol: null, sortDir: 0, search: '' },
        logins:   { sortCol: null, sortDir: 0, search: '' },
        sessions: { sortCol: null, sortDir: 0, search: '' },
        training: { sortCol: null, sortDir: 0, search: '' },
    };

    // Inline Chart.js plugin that draws "<count>" / "(<pct>%)" on each pie slice.
    var pieLabelsPlugin = {
        id: 'pieLabels',
        afterDatasetsDraw: function (chart) {
            var type = chart.config.type;
            if (type !== 'pie' && type !== 'doughnut') { return; }
            var ctx   = chart.ctx;
            var meta  = chart.getDatasetMeta(0);
            var data  = chart.data.datasets[0].data || [];
            var total = data.reduce(function (a, b) { return a + (Number(b) || 0); }, 0);
            if (!total) { return; }

            ctx.save();
            ctx.font         = 'bold 18px Roboto, Arial, sans-serif';
            ctx.textAlign    = 'center';
            ctx.textBaseline = 'middle';
            ctx.lineWidth    = 4;
            ctx.strokeStyle  = 'rgba(0,0,0,0.6)';
            ctx.fillStyle    = '#ffffff';

            var lineHeight = 22;

            meta.data.forEach(function (arc, i) {
                var value = Number(data[i]) || 0;
                if (!value) { return; }
                var pct = (value / total) * 100;
                if (pct < 3) { return; } // skip slivers
                var midAngle = (arc.startAngle + arc.endAngle) / 2;
                var radius   = arc.outerRadius * 0.7;
                var x        = arc.x + Math.cos(midAngle) * radius;
                var y        = arc.y + Math.sin(midAngle) * radius;
                var line1    = value.toLocaleString();
                var line2    = '(' + pct.toFixed(1) + '%)';
                var y1       = y - lineHeight / 2;
                var y2       = y + lineHeight / 2;
                ctx.strokeText(line1, x, y1);
                ctx.fillText(line1, x, y1);
                ctx.strokeText(line2, x, y2);
                ctx.fillText(line2, x, y2);
            });
            ctx.restore();
        }
    };

    // Chart.js configuration per widget type
    var chartMeta = {
        users: {
            title:    'User Breakdown',
            subtitle: 'Distribution of filtered users by role',
            type:     'pie',
            plugins:  [pieLabelsPlugin],
            options: {
                responsive: true,
                maintainAspectRatio: false,
                layout: { padding: { left: 160 } },
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            font: { size: 13 },
                            padding: 12,
                            boxWidth: 14,
                            boxHeight: 14,
                            generateLabels: function (chart) {
                                var data    = chart.data;
                                var dataset = data.datasets[0] || {};
                                var values  = dataset.data || [];
                                var bg      = dataset.backgroundColor || [];
                                var total   = values.reduce(function (a, b) { return a + (Number(b) || 0); }, 0);
                                return (data.labels || []).map(function (label, i) {
                                    var value = Number(values[i]) || 0;
                                    var pct   = total ? (value / total) * 100 : 0;
                                    return {
                                        text:        label + ': ' + value.toLocaleString() + ' (' + pct.toFixed(1) + '%)',
                                        fillStyle:   bg[i],
                                        strokeStyle: bg[i],
                                        lineWidth:   0,
                                        hidden:      false,
                                        index:       i,
                                    };
                                });
                            },
                        },
                    },
                },
            },
        },
        logins: {
            title:    'Total Logins By User',
            subtitle: 'Top users by login count within the selected period',
            type:     'bar',
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: true, grid: { color: '#f1f3f4' } },
                    x: {
                        grid: { display: false },
                        ticks: {
                            autoSkip: true,
                            // maxTicksLimit: 50,
                            maxRotation: 45,
                            minRotation: 45,
                        },
                    },
                },
            },
        },
        sessions: {
            title:    'Sessions Recorded By User',
            subtitle: 'Top users by session count within the selected period',
            type:     'bar',
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: true, grid: { color: '#f1f3f4' } },
                    x: {
                        grid: { display: false },
                        ticks: {
                            autoSkip: true,
                            // maxTicksLimit: 50,
                            maxRotation: 45,
                            minRotation: 45,
                        },
                    },
                },
            },
        },
        training: {
            title:    'Total Training Time Over Time',
            subtitle: 'Training hours by week within the selected period',
            type:     'line',
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { color: '#f1f3f4' },
                        ticks: { callback: function (v) { return v + ' hr'; } },
                    },
                    x: { grid: { display: false } },
                },
            },
        },
    };

    function escapeHtml(value) {
        return String(value == null ? '' : value)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#39;');
    }

    var _searchCols = {
        users:    ['first_name', 'last_name', 'email', 'role', 'station'],
        logins:   ['first_name', 'last_name', 'email', 'role'],
        sessions: ['training', 'name', 'station'],
        training: ['training', 'name', 'email'],
    };

    var _searchPlaceholders = {
        users:    'Search by name, email, role, or station…',
        logins:   'Search by name, email, or role…',
        sessions: 'Search by training or facilitator name…',
        training: 'Search by training or officer name…',
    };

    function getVisibleRows(key) {
        var table = _chartData && _chartData.tables && _chartData.tables[key];
        if (!table || !Array.isArray(table.rows)) { return []; }

        var state = _tableState[key];
        var cols  = _searchCols[key] || [];
        var term  = (state.search || '').trim().toLowerCase();
        var rows  = table.rows;

        if (term) {
            rows = rows.filter(function (row) {
                return cols.some(function (c) {
                    return String(row[c] == null ? '' : row[c]).toLowerCase().indexOf(term) !== -1;
                });
            });
        }

        if (state.sortCol && state.sortDir !== 0) {
            var col = state.sortCol;
            var dir = state.sortDir;
            rows = rows.slice().sort(function (a, b) {
                var av = a[col] == null ? '' : a[col];
                var bv = b[col] == null ? '' : b[col];
                var an = parseFloat(av), bn = parseFloat(bv);
                var numeric = !isNaN(an) && isFinite(an) && !isNaN(bn) && isFinite(bn)
                              && String(av).trim() !== '' && String(bv).trim() !== '';
                var result = numeric
                    ? (an - bn)
                    : String(av).toLowerCase().localeCompare(String(bv).toLowerCase());
                return result * dir;
            });
        }

        return rows;
    }

    // Build an HTML table from the current raw table payload for the given widget key
    function buildTable(key) {
        if (!_chartData) { return ''; }

        var table = _chartData.tables && _chartData.tables[key];
        if (!table || !Array.isArray(table.columns)) { return ''; }

        var state       = _tableState[key];
        var placeholder = _searchPlaceholders[key] || 'Search…';
        var html        = '<div class="brd-table-toolbar">'
            + '<input type="text" class="brd-table-search" placeholder="' + escapeHtml(placeholder) + '" value="' + escapeHtml(state.search) + '" aria-label="Search table">'
            + '<span class="brd-table-count"></span>'
            + '</div>';

        if (!Array.isArray(table.rows) || table.rows.length === 0) {
            html += '<div class="brd-chart-loading" style="height:auto; padding:2rem 0;">No records found for this view.</div>';
            return html;
        }

        var head = table.columns.map(function (column) {
            var isActive  = state.sortCol === column.key && state.sortDir !== 0;
            var arrow     = isActive ? (state.sortDir === 1 ? '↑' : '↓') : '↕';
            var cls       = 'brd-sortable' + (isActive ? ' sort-active' : '');
            return '<th class="' + cls + '" data-col="' + escapeHtml(column.key) + '">'
                + escapeHtml(column.label)
                + ' <span class="brd-sort-arrow" aria-hidden="true">' + arrow + '</span>'
                + '</th>';
        }).join('');

        var rows = getVisibleRows(key);
        var body;
        if (rows.length === 0) {
            body = '<tr><td colspan="' + table.columns.length + '" class="brd-no-match">No matching records.</td></tr>';
        } else {
            body = rows.map(function (row) {
                var cells = table.columns.map(function (column) {
                    return '<td>' + escapeHtml(row[column.key]) + '</td>';
                }).join('');
                return '<tr>' + cells + '</tr>';
            }).join('');
        }

        html += '<table class="brd-data-table"><thead><tr>' + head + '</tr></thead><tbody>' + body + '</tbody></table>';
        return html;
    }

    function attachTableListeners(key) {
        var tableWrap = document.getElementById('brd-chart-table-wrap');
        if (!tableWrap) { return; }

        // Update row count badge
        var countEl = tableWrap.querySelector('.brd-table-count');
        if (countEl) {
            var rawRows = ((_chartData.tables[key] || {}).rows || []).length;
            var visible = getVisibleRows(key).length;
            countEl.textContent = visible + ' of ' + rawRows + ' rows';
        }

        // Sort: click on any sortable header
        tableWrap.querySelectorAll('th.brd-sortable').forEach(function (th) {
            th.addEventListener('click', function () {
                var col   = th.dataset.col;
                var state = _tableState[key];
                if (state.sortCol !== col) {
                    state.sortCol = col;
                    state.sortDir = 1;
                } else {
                    if (state.sortDir === 1)       { state.sortDir = -1; }
                    else if (state.sortDir === -1) { state.sortDir = 0; state.sortCol = null; }
                    else                           { state.sortDir = 1; state.sortCol = col; }
                }
                tableWrap.innerHTML = buildTable(key);
                attachTableListeners(key);
            });
        });

        // Search: live filtering on input
        var searchInput = tableWrap.querySelector('.brd-table-search');
        if (searchInput) {
            searchInput.addEventListener('input', function () {
                _tableState[key].search = searchInput.value;
                tableWrap.innerHTML = buildTable(key);
                attachTableListeners(key);
                var newInput = tableWrap.querySelector('.brd-table-search');
                if (newInput) {
                    newInput.focus();
                    var len = newInput.value.length;
                    newInput.setSelectionRange(len, len);
                }
            });
        }
    }

    // Render (or re-render) the Chart.js chart for the given widget key
    function renderChart(key) {
        if (!_chartData) { return; }

        _activeKey = key;

        var meta      = chartMeta[key];
        var dataset   = _chartData.charts[key];
        var canvas    = document.getElementById('brd-main-chart');
        var tableWrap = document.getElementById('brd-chart-table-wrap');
        var loading   = document.getElementById('brd-chart-loading');

        document.getElementById('brd-chart-title').textContent    = meta.title;
        document.getElementById('brd-chart-subtitle').textContent = meta.subtitle;

        loading.style.display = 'none';

        var inner = document.getElementById('brd-chart-canvas-inner');

        if (_viewMode === 'table') {
            inner.style.display     = 'none';
            canvas.style.display    = 'none';
            tableWrap.style.display = 'block';
            tableWrap.innerHTML     = buildTable(key);
            attachTableListeners(key);
        } else {
            tableWrap.style.display = 'none';
            inner.style.display     = 'block';
            canvas.style.display    = 'block';
            canvas.style.width      = '100%';
            canvas.style.height     = '100%';
            canvas.style.maxWidth   = 'none';
            // For bar charts with many labels, widen the inner container so each
            // bar gets ~40px and the outer wrap scrolls horizontally.
            if (meta.type === 'bar' && Array.isArray(dataset.labels) && dataset.labels.length > 10) {
                var width = Math.max(640, dataset.labels.length * 40);
                inner.style.width = width + 'px';
            } else {
                inner.style.width = '100%';
            }
            var wrap = document.querySelector('.brd-chart-canvas-wrap');
            wrap.offsetHeight; // force reflow
            if (_chartInst) { _chartInst.destroy(); }
            // Delay chart creation to ensure container dimensions are updated
            setTimeout(function() {
                _chartInst = new Chart(canvas.getContext('2d'), {
                    type:    meta.type,
                    data:    { labels: dataset.labels, datasets: dataset.datasets },
                    options: meta.options,
                    plugins: meta.plugins || [],
                });
                _chartInst.update();
                updateScrollHint();
            }, 10);
        }

        // Highlight the active widget
        document.querySelectorAll('#btn-records-dashboard .brd-widget').forEach(function (w) {
            w.classList.toggle('active', w.dataset.chart === key);
        });

        updateScrollHint();
    }

    // Show/hide the right-side scroll chevron based on whether more chart
    // content is available to the right of the visible area.
    function updateScrollHint() {
        var wrap = document.querySelector('#btn-records-dashboard .brd-chart-canvas-wrap');
        var hint = document.getElementById('brd-scroll-hint-right');
        if (!wrap || !hint) { return; }
        var canScrollRight = (wrap.scrollWidth - wrap.scrollLeft - wrap.clientWidth) > 1;
        hint.classList.toggle('visible', canScrollRight && _viewMode === 'graph');
    }

    // Switch between graph and table views
    function setViewMode(mode) {
        _viewMode = mode;
        // document.getElementById('brd-view-graph').classList.toggle('active', mode === 'graph');
        // document.getElementById('brd-view-table').classList.toggle('active', mode === 'table');
        document.querySelectorAll('.brd-toggle-btn').forEach(function (btn) {
            btn.classList.toggle('active', btn.classList.contains('brd-view-' + mode));
        });

        // document.getElementById('brd-export-csv').style.display = (mode === 'table') ? 'inline-block' : 'none';
        document.querySelectorAll('.brd-export-btn').forEach(function (btn) {
            btn.style.display = (mode === 'table') ? 'inline-block' : 'none';
        });
        document.querySelectorAll('.brd-png-btn').forEach(function (btn) {
            btn.style.display = (mode === 'graph') ? 'inline-block' : 'none';
        });

        var wrap = document.querySelector('.brd-chart-canvas-wrap');
        wrap.classList.toggle('table-view', mode === 'table');
        wrap.offsetHeight; // force reflow
        // Delay to ensure layout update
        setTimeout(function() {
            renderChart(_activeKey);
        }, 10);
    }

    // Populate the filtered-stats widget values from the REST response
    function updateStats(stats) {
        document.querySelector('.brd-stat-users').textContent     = stats.users.total.toLocaleString();
        document.querySelector('.brd-stat-managers').textContent  = stats.users.managers.toLocaleString();
        document.querySelector('.brd-stat-sergeants').textContent = stats.users.sergeants.toLocaleString();
        document.querySelector('.brd-stat-officers').textContent  = stats.users.officers.toLocaleString();
        document.querySelector('.brd-stat-logins').textContent    = stats.logins.toLocaleString();
        document.querySelector('.brd-stat-sessions').textContent  = stats.sessions.toLocaleString();
        document.querySelector('.brd-stat-sessions-count').textContent = stats.sessions_count.toLocaleString();

        var trainingEl = document.querySelector('.brd-stat-training');
        trainingEl.innerHTML = stats.training_time + ' <sup>hrs</sup>';

        // document.querySelector('.brd-stat-logins-avg').textContent   = stats.avg_logins;
        // document.querySelector('.brd-stat-sessions-avg').textContent = stats.avg_sessions;
        // var trainingAvgEl = document.querySelector('.brd-stat-training-avg');
        // trainingAvgEl.innerHTML = stats.avg_training;
    }

    // Fetch filtered data from the REST endpoint and refresh the dashboard
    function loadDashboard() {
        var filters = {};
        document.querySelectorAll('#brd-filter-form [name]').forEach(function (el) {
            filters[el.name] = el.value;
        });

        // Show loading state
        var canvas  = document.getElementById('brd-main-chart');
        var loading = document.getElementById('brd-chart-loading');
        canvas.style.display  = 'none';
        loading.style.display = 'flex';
        loading.textContent   = 'Loading…';

        $.ajax({
            url: REST_ROOT + 'briefingroom/v1/records_dashboard_rest',
            method: 'POST',
            beforeSend: function (xhr) { xhr.setRequestHeader('X-WP-Nonce', REST_NONCE); },
            data: filters,
            success: function (response) {
                _chartData = response;
                Object.keys(_tableState).forEach(function (k) {
                    _tableState[k].sortCol = null;
                    _tableState[k].sortDir = 0;
                    _tableState[k].search  = '';
                });
                updateStats(response.stats);
                renderChart(_activeKey);
            },
            error: function () {
                loading.textContent = 'Error loading dashboard data.';
            },
        });
    }

    // Widget click → switch chart (no new AJAX request needed)
    document.querySelectorAll('#btn-records-dashboard .brd-widget').forEach(function (w) {
        w.addEventListener('click', function () {
            renderChart(w.dataset.chart);
        });
    });

    // Scroll-hint chevron: update on scroll/resize, click to scroll right
    (function () {
        var canvasWrap = document.querySelector('#btn-records-dashboard .brd-chart-canvas-wrap');
        var hintBtn    = document.getElementById('brd-scroll-hint-right');
        if (canvasWrap) { canvasWrap.addEventListener('scroll', updateScrollHint); }
        window.addEventListener('resize', updateScrollHint);
        if (hintBtn && canvasWrap) {
            hintBtn.addEventListener('click', function () {
                canvasWrap.scrollBy({ left: canvasWrap.clientWidth * 0.8, behavior: 'smooth' });
            });
        }
    })();

    // Build a "filters used" line for the PNG export, e.g.
    //   "Station / Facility: All - Date Range 1/30/2026 - 4/30/2026 - Manager Role"
    function buildFilterSubtitle() {
        function selectedText(id) {
            var sel = document.getElementById(id);
            if (!sel) { return ''; }
            var opt = sel.options[sel.selectedIndex];
            return opt ? opt.text : '';
        }
        function fmtDate(iso) {
            if (!iso) { return ''; }
            var p = iso.split('-');
            return Number(p[1]) + '/' + Number(p[2]) + '/' + p[0];
        }

        var stationText = selectedText('brd-station') || 'All';
        var startVal    = (document.getElementById('brd-start-date') || {}).value || '';
        var endVal      = (document.getElementById('brd-end-date')   || {}).value || '';

        var roleSel  = document.getElementById('brd-user-role');
        var roleVal  = roleSel ? roleSel.value : '';
        var roleText = selectedText('brd-user-role');
        var roleStr  = roleVal ? (roleText + ' Role') : roleText;

        var parts = ['Station / Facility: ' + stationText];
        if (startVal && endVal) {
            parts.push('Date Range ' + fmtDate(startVal) + ' - ' + fmtDate(endVal));
        }
        if (roleStr) { parts.push(roleStr); }
        return parts.join(' - ');
    }

    // Filter form submission
    document.getElementById('brd-filter-form').addEventListener('submit', function (e) {
        e.preventDefault();
        loadDashboard();
    });

    // Graph ↔ Table toggle
    // document.getElementById('brd-view-graph').addEventListener('click', function () { setViewMode('graph'); });
    document.querySelectorAll('.brd-view-graph').forEach(function (btn) {
        btn.addEventListener('click', function () { setViewMode('graph'); });
    });
    // document.getElementById('brd-view-table').addEventListener('click', function () { setViewMode('table'); });
    document.querySelectorAll('.brd-view-table').forEach(function (btn) {
        btn.addEventListener('click', function () { setViewMode('table'); });
    });

    // Export CSV
    // document.getElementById('brd-export-csv').addEventListener('click', function () {
    document.querySelectorAll('.brd-export-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            if (!_chartData) { return; }
            var table = _chartData.tables && _chartData.tables[_activeKey];
            var rows  = [];

            if (table && Array.isArray(table.columns)) {
                rows.push(table.columns.map(function (column) {
                    return '"' + String(column.label).replace(/"/g, '""') + '"';
                }).join(','));

                getVisibleRows(_activeKey).forEach(function (row) {
                    rows.push(table.columns.map(function (column) {
                        return '"' + String(row[column.key] == null ? '' : row[column.key]).replace(/"/g, '""') + '"';
                    }).join(','));
                });
            }

            var csv  = rows.join('\r\n');
            var blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
            var url  = URL.createObjectURL(blob);
            var a    = document.createElement('a');
            a.href     = url;
            a.download = _activeKey + '_data.csv';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        });
    });

    // Export PNG (with chart title + filter subtitle + white background + extra padding)
    document.querySelectorAll('.brd-png-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var canvas = document.getElementById('brd-main-chart');
            if (!canvas || !_chartInst) { return; }

            var dpr      = window.devicePixelRatio || 1;
            var padTop   = 24 * dpr;
            var titleSz  = 22 * dpr;
            var titleGap = 10 * dpr;
            var subSz    = 14 * dpr;
            var subGap   = 22 * dpr;
            var padBot   = 30 * dpr;
            var headerH  = padTop + titleSz + titleGap + subSz + subGap;

            var meta     = chartMeta[_activeKey] || {};
            var title    = meta.title    || '';
            var subtitle = buildFilterSubtitle();

            // Pie chart uses options.layout.padding.left to push the chart toward
            // the legend; in the export, that becomes a wide empty gutter on the
            // left. Crop it.
            var layoutPad  = ((meta.options || {}).layout || {}).padding;
            var leftPadCss = 0;
            if (typeof layoutPad === 'number') {
                leftPadCss = layoutPad;
            } else if (layoutPad && typeof layoutPad === 'object') {
                leftPadCss = layoutPad.left || 0;
            }
            var leftCrop = leftPadCss * dpr;

            var tmp = document.createElement('canvas');
            tmp.width  = canvas.width - leftCrop;
            tmp.height = canvas.height + headerH + padBot;
            var ctx = tmp.getContext('2d');

            ctx.fillStyle = '#ffffff';
            ctx.fillRect(0, 0, tmp.width, tmp.height);

            ctx.fillStyle    = '#202124';
            ctx.textAlign    = 'center';
            ctx.textBaseline = 'top';
            ctx.font         = 'bold ' + titleSz + 'px Roboto, Arial, sans-serif';
            ctx.fillText(title, tmp.width / 2, padTop);

            ctx.fillStyle = '#5f6368';
            ctx.font      = subSz + 'px Roboto, Arial, sans-serif';
            ctx.fillText(subtitle, tmp.width / 2, padTop + titleSz + titleGap);

            ctx.drawImage(canvas, -leftCrop, headerH);

            var url = tmp.toDataURL('image/png');
            var a   = document.createElement('a');
            a.href     = url;
            a.download = _activeKey + '_chart.png';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });
    });

    // Initial load – wait for Chart.js to be available before rendering
    function waitForChartJs(cb) {
        if (typeof Chart !== 'undefined') {
            cb();
        } else {
            setTimeout(function () { waitForChartJs(cb); }, 100);
        }
    }

    waitForChartJs(loadDashboard);

}(jQuery));
</script>
    <?php
    return ob_get_clean();
});
