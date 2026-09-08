<?php
/**
 * Build a CSS chart from aggregated data.
 */
function btn_build_css_chart_widget($data, $title, $x_label, $y_label, $table_id, $type = 'bar', $height = '400px', $more_info_endpoint = '') {
    ob_start();

    $chart = new CssChart($type, $height);
    // if($type === 'column'){
    //     $chart->setSpacing('5');
    // }
    
    $chart->buildChartWidget($data, $title, $x_label, $y_label, $table_id, $more_info_endpoint);

    return ob_get_clean();
}

function btn_build_css_chart($data, $title, $x_label, $y_label, $table_id, $type = 'bar', $height = '400px', $more_info_endpoint = '') {
    if (empty($data)) {
        return '<div class="chart-wrap"><div class="chart-loading">No data available.</div></div>';
    }

    ob_start();

    $chart = new CssChart($type, $height);
    $chart->buildChartTable($data, $title, $x_label, $y_label, $table_id, $more_info_endpoint);

    return ob_get_clean();
}

function btn_build_stat_card($title, $value, $icon = '', $color = 'blue', $loadchart = '') {
    ob_start();
    ?>
    <div <?= $loadchart ? 'data-loadchart="' . esc_attr($loadchart) . '"' : '' ?>>
        <div class="" style="border-top: 4px solid <?= esc_attr($color) ?>;">
            <?php if ($icon): ?>
                <div class="stat-card-icon">
                    <i class="<?= esc_attr($icon) ?>"></i>
                </div>
            <?php endif; ?>
            <div class="stat-card-content">
                <div class="stat-card-title"><?= esc_html($title) ?></div>
                <?php if(is_array($value)) { 
                    foreach($value as $key => $val) {
                        ?>
                        <div class="stat-card-value"><?= esc_html("$key: $val") ?></div>
                        <?php
                    }
                ?>
                <?php } else { ?>
                    <div class="stat-card-value"><?= esc_html($value) ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}


function get_login_counts($agency_id, $start_date = null, $end_date = null) {
    global $wpdb;

    //
    // Build date filter SQL + params
    //
    $date_sql = "";
    $date_params = [];

    if ($start_date) {
        $date_sql .= " AND ul.login_time >= %s";
        $date_params[] = $start_date . " 00:00:00";
    }
    if ($end_date) {
        $date_sql .= " AND ul.login_time <= %s";
        $date_params[] = $end_date . " 23:59:59";
    }

    //
    // Officers
    //
    $officer_sql = "
        SELECT COUNT(*)
        FROM {$wpdb->prefix}btn_user_login ul
        INNER JOIN {$wpdb->prefix}btn_officers o
            ON o.userId = ul.userId
        INNER JOIN {$wpdb->prefix}btn_stations s
            ON s.id = o.stationId
        WHERE s.agencyId = %d
        $date_sql
    ";

    $officer_logins = (int) $wpdb->get_var(
        $wpdb->prepare(
            $officer_sql,
            array_merge([$agency_id], $date_params)
        )
    );

    //
    // Sergeants
    //
    $sergeant_sql = "
        SELECT COUNT(*)
        FROM {$wpdb->prefix}btn_user_login ul
        INNER JOIN {$wpdb->prefix}btn_sergeants sg
            ON sg.userId = ul.userId
        WHERE sg.organizationId = %d
        $date_sql
    ";

    $sergeant_logins = (int) $wpdb->get_var(
        $wpdb->prepare(
            $sergeant_sql,
            array_merge([$agency_id], $date_params)
        )
    );

    //
    // Managers
    //
    $manager_sql = "
        SELECT COUNT(*)
        FROM {$wpdb->prefix}btn_user_login ul
        INNER JOIN {$wpdb->prefix}btn_managers m
            ON m.userId = ul.userId
        WHERE m.organizationId = %d
        $date_sql
    ";

    $manager_logins = (int) $wpdb->get_var(
        $wpdb->prepare(
            $manager_sql,
            array_merge([$agency_id], $date_params)
        )
    );

    //
    // Total (UNION of all agency users)
    //
    $total_sql = "
        SELECT COUNT(*)
        FROM {$wpdb->prefix}btn_user_login ul
        INNER JOIN (
            SELECT userId
            FROM {$wpdb->prefix}btn_managers
            WHERE organizationId = %d

            UNION

            SELECT sg.userId
            FROM {$wpdb->prefix}btn_sergeants sg
            JOIN {$wpdb->prefix}btn_stations st ON sg.stationId = st.id
            WHERE st.agencyId = %d

            UNION

            SELECT o.userId
            FROM {$wpdb->prefix}btn_officers o
            JOIN {$wpdb->prefix}btn_stations st2 ON o.stationId = st2.id
            WHERE st2.agencyId = %d
        ) users ON users.userId = ul.userId
        $date_sql
    ";

    $total_logins = (int) $wpdb->get_var(
        $wpdb->prepare(
            $total_sql,
            array_merge([$agency_id, $agency_id, $agency_id], $date_params)
        )
    );

    return [
        'total'     => $total_logins,
        'officers'  => $officer_logins,
        'sergeants' => $sergeant_logins,
        'managers'  => $manager_logins,
    ];
}



function get_total_training_time($agency_id){
    global $wpdb;

    // Scoped via the session's own stationId (captured when it was recorded), not the
    // recording user's current station, so a later reassignment doesn't move a
    // session's training time between agencies. Note: sessions with no stationId
    // (recorded by a Manager, who has no station) are excluded here, matching this
    // function's pre-existing behavior.
    $sql = "
        SELECT SUM(ts.duration * COALESCE(record_counts.officer_count, 0)) AS total_minutes
        FROM {$wpdb->prefix}btn_training_sessions ts
        INNER JOIN {$wpdb->prefix}btn_stations s ON s.id = ts.stationId
        LEFT JOIN (
            SELECT sessionId, COUNT(*) AS officer_count
            FROM {$wpdb->prefix}btn_training_records
            GROUP BY sessionId
        ) AS record_counts ON record_counts.sessionId = ts.id
        WHERE s.agencyId = %d
    ";

    $query = $wpdb->prepare($sql, $agency_id);
    $total_minutes = (int) $wpdb->get_var($query);

    return $total_minutes ?: 0;
}

