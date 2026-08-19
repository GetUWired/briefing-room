<?php

/**
 * Plugin Name: Officer Training Log
 * Description: This creates the Breifing Room Training Log, database and reporting
 * Version: 2.5.43
 */

include plugin_dir_path(__FILE__) . '/vendor/autoload.php';

//wp_register_script('example-script', plugin_dir_url(__FILE__) . 'build/index.js', [], false);
//wp_register_style('example-style', plugin_dir_url(__FILE__) . 'build/style-index.css', ['wp-components'], false);

add_action( 'plugins_loaded', function() {
    \StellarWP\DB\DB::init();
}, 0 );

add_action('init', function() {
    include plugin_dir_path(__FILE__) . '/includes/shortcodes.php';
    include plugin_dir_path(__FILE__) . '/includes/functions.php';
    include plugin_dir_path(__FILE__) . '/includes/post-types.php';
});

add_action('admin_init', function() {
    include plugin_dir_path(__FILE__) . '/includes/user-profile.php';
    include plugin_dir_path(__FILE__) . '/includes/admin-post-actions.php';
});

add_action('rest_api_init', function() {
    (new \BTN\BriefingRoom\API\GetOfficers())->registerRoute();
    (new \BTN\BriefingRoom\API\GetStations())->registerRoute();
    (new \BTN\BriefingRoom\API\CreateAgency())->registerRoute();
    (new \BTN\BriefingRoom\API\CreateRecordForContact())->registerRoute();
    (new \BTN\BriefingRoom\API\AssignManagerToAgency())->registerRoute();
    (new \BTN\BriefingRoom\API\SearchStudents())->registerRoute();
});

add_action( 'admin_menu', function () {
    include plugin_dir_path(__FILE__) . '/includes/menus.php';
} );

register_activation_hook( __FILE__, function() {
    include plugin_dir_path(__FILE__) . '/includes/migrations.php';
    include plugin_dir_path(__FILE__) . '/includes/roles.php';
    include plugin_dir_path(__FILE__) . '/includes/capabilities.php';
} );

add_action( 'wp_ajax_btn_search_officers', function() {
    check_ajax_referer('btn_search_officers');
    wp_send_json(
        ($search = wp_unslash( $_REQUEST['search'] ))
            ? \BTN\BriefingRoom\Officer::search($search)->models
            : []
    );
});

add_action( 'wp_ajax_btn_search_managers', function() {
    check_ajax_referer('btn_search_managers');

    $search = wp_unslash( $_REQUEST['search'] ?? '' );
    $agencyId = absint( $_REQUEST['agency'] ?? 0 );

    if (!$search || !$agencyId) {
        wp_send_json([]);
    }

    $managers = \BTN\BriefingRoom\Manager::query()
        ->where('organizationId', $agencyId)
        ->where(function($q) use ($search) {
            $q->whereLike('firstName', $search)
                ->orWhereLike('lastName', $search);
        })
        ->getAll();

    wp_send_json(array_map(function($manager) {
        return [
            'id' => $manager->id,
            'userId' => $manager->userId,
            'firstName' => $manager->firstName,
            'lastName' => $manager->lastName,
        ];
    }, $managers));
});

add_action( 'wp_login', function( $user_login, \WP_User $user ) {

    global $wpdb;

    $recent = $wpdb->get_var($wpdb->prepare(
        "SELECT 1 FROM {$wpdb->prefix}btn_user_login
         WHERE userId = %d AND loginAt > NOW() - INTERVAL 90 SECOND LIMIT 1",
        $user->ID
    ));
    if ($recent) return;

    // if ( ! empty($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'wp-login.php') === false ) {
    //     return; // ignore non-standard login flows
    // }
    
    $targetRoles = [
        \BTN\BriefingRoom\Manager::ROLE,
        \BTN\BriefingRoom\Sergeant::ROLE,
        \BTN\BriefingRoom\Officer::ROLE,
    ];

    if ( array_intersect($targetRoles, (array) $user->roles) ) {
        \BTN\BriefingRoom\UserLogin::create([
            'userId' => $user->ID,
            'loginAt' => current_time('mysql'),
        ]);
    }
}, 10, 2 );

if(class_exists('WP_CLI')) {
    include plugin_dir_path(__FILE__) . '/includes/cli.php';
}

if(!function_exists('ray')) {
    function ray(...$args) {
        // This function is only for development purposes
    }
}

//add_action('admin_init', function() {
//    if(is_admin() && current_user_can('manage_options') && isset($_GET['reset']) && $_GET['reset'] === 'true') {
//        global $wpdb;
//        $wpdb->query("DROP TABLE {$wpdb->prefix}btn_agencies;");
//        $wpdb->query("DROP TABLE {$wpdb->prefix}btn_stations;");
//        $wpdb->query("DROP TABLE {$wpdb->prefix}btn_sergeants;");
//        $wpdb->query("DROP TABLE {$wpdb->prefix}btn_officers;");
//        $wpdb->query("DROP TABLE {$wpdb->prefix}btn_training_sessions;");
//        $wpdb->query("DROP TABLE {$wpdb->prefix}btn_training_records;");
//        $wpdb->query("DROP TABLE {$wpdb->prefix}btn_sergeant_logins;");
//        include plugin_dir_path(__FILE__) . '/migrations.php';
//    }
//});

// CSV REPORTS ------------

add_action('init', function() {

    if(empty($_REQUEST['btn_download_report'])) return;

    /** @var \BTN\BriefingRoom\Reports\Contract\Report $report */
    switch($_REQUEST['btn_download_report']) {
        case 'station' && !empty($_REQUEST['station_id']):
            $station = \BTN\BriefingRoom\Station::find(absint($_REQUEST['station_id']));
            $report = new \BTN\BriefingRoom\Reports\StationReport($station);
            break;
        case 'manager' && !empty($_REQUEST['manager_id']):
            $manager = \BTN\BriefingRoom\Manager::find(absint($_REQUEST['manager_id']));
            $report = new \BTN\BriefingRoom\Reports\ManagerFacilitatorReport($manager);
            break;
        case 'facilitator' && !empty($_REQUEST['facilitator_id']):
            $facilitator = \BTN\BriefingRoom\Sergeant::find(absint($_REQUEST['facilitator_id']));
            $report = new \BTN\BriefingRoom\Reports\FacilitatorReport($facilitator);
            break;
        case 'student' && !empty($_REQUEST['student_id']):
            $officer = \BTN\BriefingRoom\Officer::find(absint($_REQUEST['student_id']));
            $report = new \BTN\BriefingRoom\Reports\StudentReport($officer);
            break;
        case 'sergeant_student' && !empty($_REQUEST['sergeant_student_id']):
            $officer = \BTN\BriefingRoom\Sergeant::find(absint($_REQUEST['sergeant_student_id']));
            $report = new \BTN\BriefingRoom\Reports\StudentReport($officer);
            break;
        case 'session' && !empty($_REQUEST['session_id']):
          
            $report = new \BTN\BriefingRoom\Reports\SessionReport();
            break;
        default:
            return; // No matching report found.
    }

    if(!empty($_REQUEST['startDate'])) {
        $report->setStartDate(sanitize_text_field($_REQUEST['startDate']));
    }

    if(!empty($_REQUEST['endDate'])) {
        $report->setEndDate(sanitize_text_field($_REQUEST['endDate']));
    }

    ob_clean();
    switch($_REQUEST['format']) {
        case 'html':
            echo $report->html();
            break;
        case 'csv':
        default:
            header('Content-Type: text/csv; charset=UTF-8');
            header('Content-Description: File Transfer');
            header("Content-Disposition: attachment; filename={$report->getFileName()}.csv");
            echo $report->csv();
    }
    exit;
});

/**
 * Register URL rewrites to handle SSO hyperlinks.
 */
add_filter('query_vars', fn($vars) => [...$vars, 'btn_sso']);
add_action('init', fn() => add_rewrite_rule('^sso/([^/]+)/?$', 'index.php?btn_sso=$matches[1]', 'top'));
add_action('template_redirect', function() {
    switch(get_query_var('btn_sso')) {
        case 'vcso':
            wp_redirect(add_query_arg('option', 'saml_user_login', site_url()), 301);
            exit;
    }
});
/** -- */

/**
 * Adds a query string to clear cookies via hyperlink
 */
add_action('init', function() {
   if(isset($_GET['btn-clear-cookies'])) {
       /** Fork of https://plugins.svn.wordpress.org/logout-clear-cookies */
       array_map(fn ($k) => setcookie($k, FALSE, time()-YEAR_IN_SECONDS, '', COOKIE_DOMAIN), array_keys($_COOKIE));
       error_log('[BTN] Cookies cleared by request.');
       header('Location: '.get_option('siteurl')) && exit();
   }
});

// Extend auth cookie expiration to avoid possible issue with cache and expired cookies
if(defined('YEAR_IN_SECONDS')){
    add_filter( 'auth_cookie_expiration', fn() => 30 * DAY_IN_SECONDS );
}

//if(defined('KINSTA_DEV_ENV') && KINSTA_DEV_ENV ) {
//    add_filter( 'auth_cookie_expiration', fn() => 5 * MINUTE_IN_SECONDS );
//}


define('WP_INACTIVITY_TIMEOUT', 3600); // 1 hour

/**
 * Flag login process early (before auth completes)
 */
function flag_login_request() {
    if (!empty($_POST['log']) || !empty($_POST['pwd'])) {
        // Standard WP login fields OR most custom shortcode forms
        $GLOBALS['doing_custom_login'] = true;
    }
}
add_action('init', 'flag_login_request', 0);


/**
 * Auto Log out user if inactive
 */

function logout_user_if_inactive() {

    // Only for logged-in users
    if (!is_user_logged_in()) {
        return;
    }

    // Skip during login request, AJAX, REST, cron
    if (
        !empty($GLOBALS['doing_custom_login']) ||
        (defined('DOING_AJAX') && DOING_AJAX) ||
        (defined('REST_REQUEST') && REST_REQUEST) ||
        (defined('DOING_CRON') && DOING_CRON)
    ) {
        return;
    }

    $user_id = get_current_user_id();
    $last_activity = get_user_meta($user_id, 'last_activity', true);

    // Initialize if missing
    if (empty($last_activity)) {
        update_user_meta($user_id, 'last_activity', time());
        return;
    }

    // Check inactivity BEFORE updating timestamp
    if ((time() - (int) $last_activity) > WP_INACTIVITY_TIMEOUT) {

        // Destroy session safely
        wp_destroy_current_session();
        wp_clear_auth_cookie();
        wp_logout();

        // Redirect to your shortcode login page
        wp_safe_redirect(home_url('/login/?session_expired=1'));
        exit;
    }
}
add_action('init', 'logout_user_if_inactive', 1);


/**
 * Update last activity timestamp (normal browsing only)
 */
function update_last_activity() {

    if (!is_user_logged_in()) {
        return;
    }

    // Do NOT update during login submission request
    if (!empty($GLOBALS['doing_custom_login'])) {
        return;
    }

    update_user_meta(get_current_user_id(), 'last_activity', time());
}
add_action('init', 'update_last_activity', 20);


/**
 * CRITICAL: Reset activity immediately after successful login
 * This completely prevents stale last_activity blocking login
 */
function reset_last_activity_on_login($user_login, $user) {

    // Set fresh activity timestamp the moment auth succeeds
    update_user_meta($user->ID, 'last_activity', time());

    // Also mark this request so inactivity check is skipped
    $GLOBALS['doing_custom_login'] = true;
}
add_action('wp_login', 'reset_last_activity_on_login', 10, 2);

function reset_last_activity_on_auth_cookie($auth_cookie, $expire, $expiration, $user_id, $scheme) {

    // Fresh session = fresh activity
    update_user_meta($user_id, 'last_activity', time());

    // Prevent logout check during the same request
    $GLOBALS['doing_custom_login'] = true;

}
add_action('set_auth_cookie', 'reset_last_activity_on_auth_cookie', 10, 5);