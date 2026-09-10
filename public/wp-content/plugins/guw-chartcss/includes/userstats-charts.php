<?php

function btn_get_user_logins($filters = []) {
    global $wpdb;

    $defaults = [
        'start_date' => null,
        'end_date'   => null,
        'station_id' => null,
        'user_role'  => null, // 'manager' | 'facilitator' | 'student'
    ];
    $filters = wp_parse_args($filters, $defaults);

    $agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id() ?? 0;
    if (empty($agency_id)) {
        return [];
    }

    $start_date = !empty($filters['start_date'])
        ? $filters['start_date']
        : date('Y-m-d', strtotime('-1 year'));
    $end_date = !empty($filters['end_date'])
        ? $filters['end_date']
        : date('Y-m-d 23:59:59');

    // Build the agency-scoped user subquery based on current roster, not the
    // stale agencyId snapshot stored on the login record itself. Filtering by
    // ul.agencyId caused blank names when users changed roles or were removed
    // from their role table after their login records were created.
    $role_filter = !empty($filters['user_role']) ? $filters['user_role'] : null;

    if ($role_filter === 'manager') {
        $agency_users_sql = "
            SELECT userId FROM {$wpdb->prefix}btn_managers
            WHERE organizationId = %d
        ";
        $agency_params = [$agency_id];
    } elseif ($role_filter === 'facilitator') {
        $agency_users_sql = "
            SELECT sg.userId
            FROM {$wpdb->prefix}btn_sergeants sg
            JOIN {$wpdb->prefix}btn_stations st ON sg.stationId = st.id
            WHERE st.agencyId = %d
        ";
        $agency_params = [$agency_id];
    } elseif ($role_filter === 'student') {
        $agency_users_sql = "
            SELECT o.userId
            FROM {$wpdb->prefix}btn_officers o
            JOIN {$wpdb->prefix}btn_stations st ON o.stationId = st.id
            WHERE st.agencyId = %d
        ";
        $agency_params = [$agency_id];
    } else {
        $agency_users_sql = "
            SELECT userId FROM {$wpdb->prefix}btn_managers WHERE organizationId = %d
            UNION
            SELECT sg.userId
            FROM {$wpdb->prefix}btn_sergeants sg
            JOIN {$wpdb->prefix}btn_stations st ON sg.stationId = st.id
            WHERE st.agencyId = %d
            UNION
            SELECT o.userId
            FROM {$wpdb->prefix}btn_officers o
            JOIN {$wpdb->prefix}btn_stations st ON o.stationId = st.id
            WHERE st.agencyId = %d
        ";
        $agency_params = [$agency_id, $agency_id, $agency_id];
    }

    $where  = ["ul.userId IN ($agency_users_sql)", 'ul.loginAt BETWEEN %s AND %s'];
    $params = array_merge($agency_params, [$start_date, $end_date]);

    // Normalise a bare 'Y-m-d' end date to end-of-day. Without this, BETWEEN
    // stops at 00:00:00 and silently drops the final day of the range.
    if (strlen(trim($end_date)) === 10) {
        $end_date = trim($end_date) . ' 23:59:59';
        $params[count($agency_params) + 1] = $end_date;
    }

    if (!empty($filters['station_id'])) {
        // Resolve station from the CURRENT roster, the same way the session
        // widget does. EXISTS avoids row multiplication: ~192 users hold both a
        // sergeant and an officer record, so a JOIN would double-count them.
        $where[] = "(
            EXISTS (SELECT 1 FROM {$wpdb->prefix}btn_sergeants sg
                     WHERE sg.userId = ul.userId AND sg.stationId = %d)
            OR EXISTS (SELECT 1 FROM {$wpdb->prefix}btn_officers o
                     WHERE o.userId = ul.userId AND o.stationId = %d)
        )";
        $params[] = (int) $filters['station_id'];
        $params[] = (int) $filters['station_id'];
    }

    $sql = "SELECT ul.*
              FROM {$wpdb->prefix}btn_user_login ul
             WHERE " . implode(' AND ', $where);
    $sql .= " ORDER BY ul.loginAt DESC";

    return $wpdb->get_results($wpdb->prepare($sql, $params), ARRAY_A);
}

function user_logins_chart($atts) {
    // Allow shortcode attributes
    $atts = shortcode_atts([
        'type'   => 'line',
        'height' => '400px'
    ], $atts);

    $type   = sanitize_text_field($atts['type']);
    $height = sanitize_text_field($atts['height']);

    // $results = btn_get_user_logins();

    // echo '<pre>';
    // print_r($results);
    // echo '</pre>';

    // $data = [];
    // foreach ($results as $row) {
    //     $fac = $row['facilitator'] ?: 'Unknown';
    //     $data[$fac] = ($data[$fac] ?? 0) + (int) $row['duration'];
    // }

    // return btn_build_css_chart_widget(
    //     $data,
    //     'Facilitator Total Duration',
    //     'Facilitator',
    //     'Duration (minutes)',
    //     'sessions_chart_rest',
    //     $type,
    //     $height
    // );
}
add_shortcode('user_logins_chart', 'user_logins_chart');