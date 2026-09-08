<?php

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Reports\StudentReport;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\TrainingSession;
use BTN\BriefingRoom\TrainingRecord;
use League\Csv\Reader;
use League\Csv\Writer;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use StellarWP\DB\QueryBuilder\QueryBuilder;

function btn_get_training_sessions($filters = []) {
    global $wpdb;

    $defaults = [
        'search'     => null,
        'start_date' => null,
        'end_date'   => null,
        'station_id' => null,
        'user_id'    => null,
        'training_id'=> null,
    ];

    $filters = wp_parse_args($filters, $defaults);

    $agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id() ?? 0;

    // TEMP ADMIN FIX
    if (empty($agency_id) && current_user_can('administrator')) {
        $agency_id = 33;
    }

    /*
     * -------------------------
     * BASE QUERY
     * -------------------------
     */
    $sql = "
        SELECT
            ts.*,
            training.post_title AS post_title,
            facilitator.firstName AS facilitator_fname,
            facilitator.lastName AS facilitator_lname,
            manager.firstName AS manager_fname,
            manager.lastName AS manager_lname,
            student.firstName AS student_fname,
            student.lastName AS student_lname,
            COALESCE(
                NULLIF(CONCAT_WS(' ', facilitator.firstName, facilitator.lastName), ''),
                NULLIF(CONCAT_WS(' ', manager.firstName, manager.lastName), ''),
                NULLIF(CONCAT_WS(' ', student.firstName, student.lastName), '')
            ) AS facilitator,
            (
                SELECT COUNT(*)
                FROM wp_btn_training_records tr
                WHERE tr.sessionId = ts.id
            ) AS officer_count
        FROM wp_btn_training_sessions AS ts
        LEFT JOIN wp_posts training ON ts.trainingId = training.ID
        LEFT JOIN wp_btn_sergeants facilitator ON facilitator.userId = ts.userId
        LEFT JOIN wp_btn_managers manager ON manager.userId = ts.userId
        LEFT JOIN wp_btn_officers student ON student.userId = ts.userId
        LEFT JOIN wp_btn_stations session_station ON session_station.id = ts.stationId
    ";

    $params = [$agency_id, $agency_id];
    $where  = [];

    // Scope to the agency via the session's own stationId (captured when it was
    // recorded), not the recording user's current station, so a later reassignment
    // doesn't move a session's credit between agencies/stations. Managers have no
    // station (agency-level only), so their sessions (stationId IS NULL) fall back
    // to their current agency membership.
    $where[] = "(
        session_station.agencyId = %d
        OR (
            ts.stationId IS NULL
            AND EXISTS (
                SELECT 1
                FROM wp_btn_managers m
                WHERE m.userId = ts.userId
                  AND m.organizationId = %d
            )
        )
    )";

    /*
     * -------------------------
     * DATE FILTER
     * -------------------------
     */
    $start_date = !empty($filters['start_date'])
        ? $filters['start_date']
        : date('Y-m-d', strtotime('-1 year'));

    $end_date = !empty($filters['end_date'])
        ? $filters['end_date']
        : date('Y-m-d');

    $where[] = "ts.completedAt BETWEEN %s AND %s";
    $params[] = $start_date . ' 00:00:00';
    $params[] = $end_date . ' 23:59:59';

    /*
     * -------------------------
     * STATION FILTER
     * -------------------------
     */
    if (!empty($filters['station_id'])) {
        $where[]  = "ts.stationId = %d";
        $params[] = (int) $filters['station_id'];
    }

    /*
     * -------------------------
     * USER FILTER
     * -------------------------
     */
    if (!empty($filters['user_id'])) {
        $where[]  = "ts.userId = %d";
        $params[] = (int) $filters['user_id'];
    }

    /*
     * -------------------------
     * TRAINING FILTER
     * -------------------------
     */
    if (!empty($filters['training_id'])) {
        $where[]  = "ts.trainingId = %d";
        $params[] = (int) $filters['training_id'];
    }

    /*
     * -------------------------
     * SEARCH FILTER
     * -------------------------
     */
    if (!empty($filters['search'])) {
        $search_term = '%' . $wpdb->esc_like($filters['search']) . '%';

        $where[] = "(
            training.post_title LIKE %s
            OR facilitator.firstName LIKE %s
            OR facilitator.lastName LIKE %s
            OR manager.firstName LIKE %s
            OR manager.lastName LIKE %s
            OR student.firstName LIKE %s
            OR student.lastName LIKE %s
        )";

        for ($i = 0; $i < 7; $i++) {
            $params[] = $search_term;
        }
    }

    /*
     * -------------------------
     * FINALIZE QUERY
     * -------------------------
     */
    if (!empty($where)) {
        $sql .= " WHERE " . implode(' AND ', $where);
    }

    $sql .= "
        ORDER BY ts.completedAt DESC, ts.id ASC
    ";

    return $wpdb->get_results(
        $wpdb->prepare($sql, $params),
        ARRAY_A
    );
}

// function sessions_chart($atts) {
//     // Allow shortcode attributes
//     $atts = shortcode_atts([
//         'type'   => 'column',
//         'height' => '400px'
//     ], $atts);

//     $type   = sanitize_text_field($atts['type']);
//     $height = sanitize_text_field($atts['height']);

//     $results = btn_get_training_sessions();

//     $data = [];
//     foreach ($results as $row) {
//         $fac = $row['facilitator'] ?: 'Unknown';
//         $data[$fac] = ($data[$fac] ?? 0) + (int) $row['duration'];
//     }
// }
// add_shortcode('sessions_chart', 'sessions_chart');

// function training_duration_chart($atts) {

//     $atts = shortcode_atts([
//         'type'   => 'column',
//         'height' => '400px'
//     ], $atts);

//     $type   = sanitize_text_field($atts['type']);
//     $height = sanitize_text_field($atts['height']);

//     $results = btn_get_training_sessions();

//     $data = [];
//     foreach ($results as $row) {
//         $title = $row['post_title'] ?: 'Untitled';
//         $data[''.$title] = ($data[''.$title] ?? 0) + (int) $row['duration'];
//     }

//     return btn_build_css_chart_widget(
//         $data,
//         'Total Duration Per Training Title',
//         'Training Title',
//         'Duration (minutes)',
//         'training_duration_chart_rest',
//         $type,
//         $height
//     );
// }
// add_shortcode('training_duration_chart', 'training_duration_chart');

// function facilitator_session_count_chart($atts) {
//     $atts = shortcode_atts([
//         'type'   => 'column',
//         'height' => '400px'
//     ], $atts);

//     $type   = sanitize_text_field($atts['type']);
//     $height = sanitize_text_field($atts['height']);

//     $results = btn_get_training_sessions();

//     $data = [];
//     foreach ($results as $row) {
//         $fac = $row['facilitator'] ?: 'Unknown';
//         $data[''.$fac] = ($data[''.$fac] ?? 0) + 1;
//     }

//     return btn_build_css_chart_widget(
//         $data,
//         'Session Count Per Facilitator',
//         'Facilitator',
//         'Sessions',
//         'facilitator_session_count_chart_rest',
//         $type,
//         $height
//     );
// }
// add_shortcode('facilitator_session_count_chart', 'facilitator_session_count_chart');

// function student_session_count_chart($atts) {
//     $atts = shortcode_atts([
//         'type'   => 'column',
//         'height' => '400px'
//     ], $atts);

//     $type   = sanitize_text_field($atts['type']);
//     $height = sanitize_text_field($atts['height']);

//     $results = btn_get_training_sessions();

//     $data = [];
//     foreach ($results as $row) {
//         $student = trim(($row['student_fname'] ?? '') . ' ' . ($row['student_lname'] ?? '')) ?: null;
//         $manager = trim(($row['manager_fname'] ?? '') . ' ' . ($row['manager_lname'] ?? '')) ?: null;
//         $facilitator = trim(($row['facilitator_fname'] ?? '') . ' ' . ($row['facilitator_lname'] ?? '')) ?: null;
//         $name = $student ?? $manager ?? $facilitator ?? 'Unknown';
//         $data[''.$name] = ($data[''.$name] ?? 0) + 1;
//     }

//     return btn_build_css_chart_widget(
//         $data,
//         'Session Count Per Student',
//         'Student',
//         'Sessions',
//         'student_session_count_chart_rest',
//         $type,
//         $height
//     );
// }
// add_shortcode('student_session_count_chart', 'student_session_count_chart');


add_action('rest_api_init', function () {

    register_rest_route('briefingroom/v1', '/sessions_chart_rest', array(
        'methods'  => 'POST',
        'callback' => 'sessions_chart_rest',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    register_rest_route('briefingroom/v1', '/training_duration_chart_rest', array(
        'methods'  => 'POST',
        'callback' => 'training_duration_chart_rest',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    register_rest_route('briefingroom/v1', '/facilitator_session_count_chart_rest', array(
        'methods'  => 'POST',
        'callback' => 'facilitator_session_count_chart_rest',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    register_rest_route('briefingroom/v1', '/student_session_count_chart_rest', array(
        'methods'  => 'POST',
        'callback' => 'student_session_count_chart_rest',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    register_rest_route('briefingroom/v1', '/total_sessions_stat_card_rest', array(
        'methods'  => 'POST',
        'callback' => 'total_sessions_stat_card_rest',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    register_rest_route('briefingroom/v1', '/total_users_stat_card_rest', array(
        'methods'  => 'POST',
        'callback' => 'total_users_stat_card_rest',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    register_rest_route('briefingroom/v1', '/total_manager_stat_card_rest', array(
        'methods'  => 'POST',
        'callback' => 'total_manager_stat_card_rest',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    register_rest_route('briefingroom/v1', '/total_facilitator_stat_card_rest', array(
        'methods'  => 'POST',
        'callback' => 'total_facilitator_stat_card_rest',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    register_rest_route('briefingroom/v1', '/total_officer_stat_card_rest', array(
        'methods'  => 'POST',
        'callback' => 'total_officer_stat_card_rest',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    register_rest_route('briefingroom/v1', '/total_logins_stat_card_rest', array(
        'methods'  => 'POST',
        'callback' => 'total_logins_stat_card_rest',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));

    register_rest_route('briefingroom/v1', '/total_training_time_stat_card_rest', array(
        'methods'  => 'POST',
        'callback' => 'total_training_time_stat_card_rest',
        'permission_callback' => function () {
            return current_user_can( 'read' ); // User has to be logged in to use the endpoint
        },
    ));


    

});

function sessions_chart_rest( WP_REST_Request $request ) {

    // $search    = (!empty($request->get_param('search'))) ? sanitize_text_field( $request->get_param('search') ) : null;
    $start_date = (!empty($request->get_param('start_date'))) ? sanitize_text_field( $request->get_param('start_date') ) : null;
    $end_date   = (!empty($request->get_param('end_date'))) ? sanitize_text_field( $request->get_param('end_date') ) : null;
    $station_id = (!empty($request->get_param('station'))) ? sanitize_text_field( $request->get_param('station') ) : null;
    $type       = (!empty($request->get_param('type'))) ? sanitize_text_field( $request->get_param('type') ) : 'column';
    $height     = (!empty($request->get_param('height'))) ? sanitize_text_field( $request->get_param('height') ) : '400px';

    // Fetch filtered results
    $results = btn_get_training_sessions([
            // 'search' => $search,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'station_id' => $station_id
        ]
    );

    // Build the same data structure as the shortcode
    $data = [];
    foreach ($results as $row) {
        $fac = $row['facilitator'] ?: 'Unknown';
        $data[$fac] = ($data[$fac] ?? 0) + (int) $row['duration'];
    }

    // Build the HTML chart
    $html = btn_build_css_chart(
        $data,
        'Session Total Duration',
        'Facilitator',
        'Duration (minutes)',
        'sessions_chart_rest',
        $type,
        $height
    );

    $status = empty($html) ? 'failed' : 'success';

    return rest_ensure_response([
        'html' => $html,
        'status' => $status,
    ]);
}

function training_duration_chart_rest( WP_REST_Request $request ) {

    // $search    = (!empty($request->get_param('search'))) ? sanitize_text_field( $request->get_param('search') ) : null;
    $start_date = (!empty($request->get_param('start_date'))) ? sanitize_text_field( $request->get_param('start_date') ) : null;
    $end_date   = (!empty($request->get_param('end_date'))) ? sanitize_text_field( $request->get_param('end_date') ) : null;
    $station_id = (!empty($request->get_param('station'))) ? sanitize_text_field( $request->get_param('station') ) : null;
    $type       = (!empty($request->get_param('type'))) ? sanitize_text_field( $request->get_param('type') ) : 'bar';
    $height     = (!empty($request->get_param('height'))) ? sanitize_text_field( $request->get_param('height') ) : '400px';

    // Fetch filtered results
    $results = btn_get_training_sessions([
            // 'search' => $search,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'station_id' => $station_id
        ]
    );

    // Build the same data structure as the shortcode
    $data = [];
    foreach ($results as $row) {
        $title = $row['post_title'] ?: 'Untitled';
        $data[''.$title] = ($data[''.$title] ?? 0) + (int) $row['duration'];
    }

    // Build the HTML chart
    $html = btn_build_css_chart(
        $data,
        'Total Duration Per Training Title',
        'Training Title',
        'Duration (minutes)',
        'training_duration_chart_rest',
        $type,
        $height
    );

    $status = empty($html) ? 'failed' : 'success';

    return rest_ensure_response([
        'html' => $html,
        'status' => $status,
    ]);
}

function facilitator_session_count_chart_rest( WP_REST_Request $request ) {

    // $search    = (!empty($request->get_param('search'))) ? sanitize_text_field( $request->get_param('search') ) : null;
    $start_date = (!empty($request->get_param('start_date'))) ? sanitize_text_field( $request->get_param('start_date') ) : null;
    $end_date   = (!empty($request->get_param('end_date'))) ? sanitize_text_field( $request->get_param('end_date') ) : null;
    $station_id = (!empty($request->get_param('station'))) ? sanitize_text_field( $request->get_param('station') ) : null;
    $type       = (!empty($request->get_param('type'))) ? sanitize_text_field( $request->get_param('type') ) : 'column';
    $height     = (!empty($request->get_param('height'))) ? sanitize_text_field( $request->get_param('height') ) : '400px';

    // Fetch filtered results
    $results = btn_get_training_sessions([
            // 'search' => $search,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'station_id' => $station_id
        ]
    );

    // Build the same data structure as the shortcode
    $data = [];
    foreach ($results as $row) {
        $fac = $row['facilitator'] ?: 'Unknown';
        $data[''.$fac] = ($data[''.$fac] ?? 0) + 1;
    }

    // Build the HTML chart
    $html = btn_build_css_chart(
        $data,
        'Session Count Per Facilitator',
        'Facilitator',
        'Sessions',
        'facilitator_session_count_chart_rest',
        $type,
        $height
    );

    $status = empty($html) ? 'failed' : 'success';

    return rest_ensure_response([
        'html' => $html,
        'status' => $status,
    ]);
}

function student_session_count_chart_rest( WP_REST_Request $request ) {

    // $search    = (!empty($request->get_param('search'))) ? sanitize_text_field( $request->get_param('search') ) : null;
    $start_date = (!empty($request->get_param('start_date'))) ? sanitize_text_field( $request->get_param('start_date') ) : null;
    $end_date   = (!empty($request->get_param('end_date'))) ? sanitize_text_field( $request->get_param('end_date') ) : null;
    $station_id = (!empty($request->get_param('station'))) ? sanitize_text_field( $request->get_param('station') ) : null;
    $type       = (!empty($request->get_param('type'))) ? sanitize_text_field( $request->get_param('type') ) : 'column';
    $height     = (!empty($request->get_param('height'))) ? sanitize_text_field( $request->get_param('height') ) : '400px';

    // Fetch filtered results
    $results = btn_get_training_sessions([
            // 'search' => $search,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'station_id' => $station_id
        ]
    );

    // Build the same data structure as the shortcode
    $data = [];
    foreach ($results as $row) {
        $student = trim(($row['student_fname'] ?? '') . ' ' . ($row['student_lname'] ?? '')) ?: null;
        $manager = trim(($row['manager_fname'] ?? '') . ' ' . ($row['manager_lname'] ?? '')) ?: null;
        $facilitator = trim(($row['facilitator_fname'] ?? '') . ' ' . ($row['facilitator_lname'] ?? '')) ?: null;
        $name = $student ?? $manager ?? $facilitator ?? 'Unknown';
        $data[''.$name] = ($data[''.$name] ?? 0) + 1;
    }

    // Build the HTML chart
    $html = btn_build_css_chart(
        $data,
        'Session Count Per Student',
        'Student',
        'Sessions',
        'student_session_count_chart_rest',
        $type,
        $height
     );

     // Determine status based on whether HTML was generated
     $status = empty($html) ? 'failed' : 'success';

     return rest_ensure_response([
         'html' => $html,
         'status' => $status,
     ]);
}

function total_sessions_stat_card_rest( WP_REST_Request $request ) {

    // $search    = (!empty($request->get_param('search'))) ? sanitize_text_field( $request->get_param('search') ) : null;
    $start_date = (!empty($request->get_param('start_date'))) ? sanitize_text_field( $request->get_param('start_date') ) : null;
    $end_date   = (!empty($request->get_param('end_date'))) ? sanitize_text_field( $request->get_param('end_date') ) : null;
    $station_id = (!empty($request->get_param('station'))) ? sanitize_text_field( $request->get_param('station') ) : null;

    // Fetch filtered results
    $results = btn_get_training_sessions([
            'start_date' => $start_date,
            'end_date' => $end_date,
            'station_id' => $station_id
        ]
    );  

    $sessions = get_session_report_data();

    $total_sessions = $sessions['total'];

    $html = btn_build_stat_card('Total Sessions', $total_sessions, 'fas fa-users', 'blue', 'sessions_chart_rest');
    $status = empty($html) ? 'failed' : 'success';

    return rest_ensure_response([
         'html' => $html,
         'status' => $status,
     ]);
    
}

function total_users_stat_card_rest( WP_REST_Request $request ) {

    $agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id() ?? 0;

    $managers = Manager::query()->where('organizationId', $agency_id, '=')->getAll();
    
    $sergeants = Sergeant::query()
            ->select('sergeant.*', 'station.name as station')
            ->leftJoin('btn_stations', 'sergeant.stationId', 'station.id', 'station')
            ->where('station.agencyId', $agency_id)->getAll();

    $officers = Officer::query()->select('officer.*', 'station.name as station')
            ->leftJoin('btn_stations', 'officer.stationId', 'station.id', 'station')
            ->where('station.agencyId', $agency_id)->getAll();
    
    $total_users = count($managers) + count($sergeants) + count($officers);

    $users = [
        'total' => $total_users,
        'managers' => count($managers),
        'sergeants' => count($sergeants),
        'officers' => count($officers),
    ];


    $html = btn_build_stat_card('Users', $users, 'fas fa-users', 'blue');
    $status = empty($html) ? 'failed' : 'success';

    return rest_ensure_response([
         'html' => $html,
         'status' => $status,
     ]);
}

// function total_manager_stat_card_rest( WP_REST_Request $request ) {


//     $agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id() ?? 0;

//     $managers = Manager::query()->where('organizationId', $agency_id, '=')->getAll();

//     $total_managers = count($managers);

//     $html = btn_build_stat_card('Total Managers', $total_managers, 'fas fa-users', 'blue');
//     $status = empty($html) ? 'failed' : 'success';

//     return rest_ensure_response([
//          'html' => $html,
//          'status' => $status,
//      ]);
// }

// function total_facilitator_stat_card_rest( WP_REST_Request $request ) {
//         $agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id() ?? 0;

//     $managers = Manager::query()->where('organizationId', $agency_id, '=')->getAll();
    
//     $sergeants = Sergeant::query()
//             ->select('sergeant.*', 'station.name as station')
//             ->leftJoin('btn_stations', 'sergeant.stationId', 'station.id', 'station')
//             ->where('station.agencyId', $agency_id)->getAll();

//     $total_users = count($managers) + count($sergeants);

//     $html = btn_build_stat_card('Total Users', $total_users, 'fas fa-users', 'blue');
//     $status = empty($html) ? 'failed' : 'success';

//     return rest_ensure_response([
//          'html' => $html,
//          'status' => $status,
//      ]);
// } 

// function total_officer_stat_card_rest( WP_REST_Request $request ) {
//     $agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id() ?? 0;

//     $officers = Officer::query()->select('officer.*', 'station.name as station')
//             ->leftJoin('btn_stations', 'officer.stationId', 'station.id', 'station')
//             ->where('station.agencyId', $agency_id)->getAll();

//     $total_users = count($officers);

//     $html = btn_build_stat_card('Total Officers', $total_users, 'fas fa-users', 'blue');
//     $status = empty($html) ? 'failed' : 'success';

//     return rest_ensure_response([
//          'html' => $html,
//          'status' => $status,
//     ]);
// } 

function total_logins_stat_card_rest( WP_REST_Request $request ) {

    $agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id() ?? 0;
    $logins = get_login_counts($agency_id);

    $html = btn_build_stat_card('Total Logins', $logins, 'fas fa-sign-in-alt', 'green');
    $status = empty($html) ? 'failed' : 'success';

    return rest_ensure_response([
         'html' => $html,
         'status' => $status,
     ]);
}

function total_training_time_stat_card_rest( WP_REST_Request $request ) {


    $agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id() ?? 0;
    $total_time = get_total_training_time($agency_id);

    $html = btn_build_stat_card('Total Training Time', $total_time, 'fas fa-clock', 'orange', 'training_duration_chart_rest');
    $status = empty($html) ? 'failed' : 'success';

    return rest_ensure_response([
         'html' => $html,
         'status' => $status,
     ]);
}


add_shortcode('briefing_dashboard', function () {

    $stations = get_user_station_by_agency(
        btn_briefing()->hidebriefing()->get_agency_id_by_user_id()
    );

    ob_start();
?>
<div id="btn-dashboard">

    <form id="btn-filter-form" class="flex-form">
        <!-- <input type="text" name="search" placeholder="Search..."> -->
        <input type="date" name="start_date">
        <input type="date" name="end_date">

        <select name="station">
            <option value="">All Stations</option>
            <?php foreach ($stations as $station): ?>
                <option value="<?= $station->id ?>"><?= $station->name ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Apply Filters</button>
    </form>
    <div class="stat-cards">
        <div class="btn-chart-block stat-card" data-endpoint="total_users_stat_card_rest">
            <div class="chart-loading">Loading…</div>
        </div>
        <div class="btn-chart-block stat-card" data-endpoint="total_logins_stat_card_rest">
            <div class="chart-loading">Loading…</div>
        </div>
        <div class="btn-chart-block stat-card" data-endpoint="total_sessions_stat_card_rest">
            <div class="chart-loading">Loading…</div>
        </div>
         <div class="btn-chart-block stat-card" data-endpoint="total_training_time_stat_card_rest">
            <div class="chart-loading">Loading…</div>
        </div>
        <!-- <div class="btn-chart-block stat-card" data-endpoint="total_manager_stat_card_rest">
            <div class="chart-loading">Loading…</div>
        </div>
        <div class="btn-chart-block stat-card" data-endpoint="total_facilitator_stat_card_rest">
            <div class="chart-loading">Loading…</div>
        </div>
        <div class="btn-chart-block stat-card" data-endpoint="total_officer_stat_card_rest">
            <div class="chart-loading">Loading…</div>
        </div> -->
    </div>
    <div id="btn-charts">
        <!-- <div class="btn-chart-block" data-endpoint="sessions_chart_rest">
            <div class="chart-loading">Loading…</div>
        </div> -->

        <!-- <div class="btn-chart-block" data-endpoint="training_duration_chart_rest">
            <div class="chart-loading">Loading…</div>
        </div>

        <div class="btn-chart-block" data-endpoint="facilitator_session_count_chart_rest">
            <div class="chart-loading">Loading…</div>
        </div>

        <div class="btn-chart-block" data-endpoint="student_session_count_chart_rest">
            <div class="chart-loading">Loading…</div>
        </div> -->
    </div>

</div>
<?php
    return ob_get_clean();
});
