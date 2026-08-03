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

    $where  = ['ul.agencyId = %d', 'ul.loginAt BETWEEN %s AND %s'];
    $params = [$agency_id, $start_date, $end_date];

    if (!empty($filters['user_role'])) {
        $where[]  = 'ul.role = %s';
        $params[] = $filters['user_role'];
    }

    if (!empty($filters['station_id'])) {
        $where[]  = 'ul.stationId = %d';
        $params[] = (int) $filters['station_id'];
    }

    $sql = "SELECT ul.*
              FROM {$wpdb->prefix}btn_user_login ul
             WHERE " . implode(' AND ', $where)
         . " ORDER BY ul.loginAt DESC";

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