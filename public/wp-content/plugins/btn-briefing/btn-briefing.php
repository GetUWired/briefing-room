<?php
/*
Plugin Name: BTN Briefing
Plugin URI: https://businesstechninjas.com/
Description: Custom Post type For Briefing
Version: 1.0.3
Author: Business Tech Ninjas
Author URI: https://businesstechninjas.com/
License: Copyright (c) Business Tech Ninjas
Text Domain: btn-briefing
*/

// If this file is called directly, abort.
if (! defined('ABSPATH')) {
	header('HTTP/1.0 403 Forbidden');
	die();
}

define('BTN_BRIEFING_VERSION', '1.95.2');
define('BTN_BRIEFING_PLUGIN', __FILE__);
define('BTN_BRIEFING_DIR', __DIR__ . '/');
define('BTN_BRIEFING_CLASS_DIR', BTN_BRIEFING_DIR . 'classes/');
define('BTN_BRIEFING_TMPL_DIR', BTN_BRIEFING_DIR . 'templates/');
$btn_briefing = plugins_url('', __FILE__);
define('BTN_BRIEFING_URL', $btn_briefing . '/');
define('BTN_BRIEFING_ASSETS_URL', BTN_BRIEFING_URL . 'assets/');


// Define path and URL to the ACF plugin.
define( 'BTN_BRIEFING_ACF_PATH', BTN_BRIEFING_DIR . 'includes/acf/' );
define( 'BTN_BRIEFING_ACF_URL', BTN_BRIEFING_DIR . 'includes/acf/' );

// Include Autoloader
include_once BTN_BRIEFING_CLASS_DIR . 'autoloader.php';
// Include the ACF plugin.
include_once( BTN_BRIEFING_ACF_PATH . 'acf.php' );

// Include the ACF Fields.
include_once( BTN_BRIEFING_TMPL_DIR . '/acf/acf.php' );

// Init Plugin
add_action('plugins_loaded',function(){
	btn_briefing()->init();
}, 1 );

//Plugin Activatication
btn_briefing()->register_activation_hooks();

// Gets the instance of the `btn_default` class
function btn_briefing(){
    return btn_briefing::get_instance();
}

add_action('template_redirect', function () {

    // Only protect frontend singular posts
    if (is_admin() || !is_singular()) {
        return;
    }

    $post_id = get_queried_object_id();
    if (!$post_id) {
        return;
    }

    $taxonomies = get_object_taxonomies(get_post_type($post_id));
    if (empty($taxonomies)) {
        return;
    }

    foreach ($taxonomies as $taxonomy) {

        $terms = get_the_terms($post_id, $taxonomy);
        if (empty($terms) || is_wp_error($terms)) {
            continue;
        }

        foreach ($terms as $term) {
            if (!memb_hasTermAccess($term->term_id, $taxonomy)) {

                // HARD STOP — Elementor never runs
                wp_safe_redirect(home_url('/no-access'));
                exit;
            }
        }
    }

});

function memb_hasPostTermAccess($post_id){
    
    $taxonomies = get_object_taxonomies(get_post_type($post_id));
    
    if (!empty($taxonomies)) {
        foreach ($taxonomies as $taxonomy) {
            $terms = get_the_terms($post_id, $taxonomy);

            if (empty($terms) || is_wp_error($terms)) {
                continue;
            }

            foreach ($terms as $term) {
                if (memb_hasTermAccess($term->term_id, $taxonomy)) {
                    return true;
                }
            }
        }
        return false;
    }
    
    return true;
}

add_action('wp_ajax_btn_briefing_hide_action', 'btn_briefing_hide_action_callback');
add_action('wp_ajax_nopriv_btn_briefing_hide_action', 'btn_briefing_hide_action_callback');

function btn_briefing_hide_action_callback() {
    $dataAction          = isset($_POST['dataAction']) ? sanitize_text_field($_POST['dataAction']) : '';
    $type                = isset($_POST['type']) ? sanitize_text_field($_POST['type']) : 'post';
    $value               = isset($_POST['value']) ? intval($_POST['value']) : 0;
    $agency_id           = isset($_POST['agencyID']) ? intval($_POST['agencyID']) : 0;
    $user_id             = get_current_user_id();
    $now                 = current_time('mysql');

    if ($dataAction === 'hide') {
        // Mandatory, but no minimum length — attribution is the goal, not prose.
        $reason = isset($_POST['reason']) ? trim(wp_kses_post(wp_unslash($_POST['reason']))) : '';
        if ($reason === '') {
            wp_send_json_error(['message' => 'A reason is required.']);
        }

        // Submitter is derived from the logged-in user server-side — never trust client input for identity.
        $person_hiding = btn_briefing()->hidebriefing()->get_person_display($user_id);

        // Authorizer must be re-validated as an actual Manager/Facilitator of this agency.
        $authorizer_user_id = isset($_POST['authorizer_user_id']) ? intval($_POST['authorizer_user_id']) : 0;
        $person_authorizing  = btn_briefing()->hidebriefing()->get_valid_authorizer_label($agency_id, $authorizer_user_id);
        if (!$person_authorizing) {
            wp_send_json_error(['message' => 'Select a valid authorizer from your agency.']);
        }
    } else {
        $reason              = isset($_POST['reason']) ? wp_kses_post($_POST['reason']) : '';
        $person_hiding       = isset($_POST['person_hiding']) ? sanitize_text_field($_POST['person_hiding']) : '';
        $person_authorizing  = isset($_POST['person_authorizing']) ? sanitize_text_field($_POST['person_authorizing']) : '';
    }

    // Resolve the correct ID column and display label based on type
    if ($type === 'term') {
        $post_id = 0;
        $term_id = $value;
        $term    = get_term($term_id);
        $label   = (!is_wp_error($term) && $term) ? $term->name : "Term #{$term_id}";
    } else {
        $post_id = $value;
        $term_id = 0;
        $label   = !empty($_POST['video_title'])
            ? sanitize_text_field($_POST['video_title'])
            : get_the_title($post_id);
    }

    global $wpdb;
    $table = $wpdb->prefix . 'btn_briefing_hide_log';

    $log_row = [
        'post_id'            => $post_id,
        'term_id'            => $term_id,
        'agency_id'          => $agency_id,
        'video_title'        => $label,
        'action_type'        => $dataAction,
        'reason'             => $reason,
        'person_hiding'      => $person_hiding,
        'person_authorizing' => $person_authorizing,
        'user_id'            => $user_id,
        'created_at'         => $now,
    ];
    $log_formats = ['%d', '%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%s'];

    if ($dataAction === 'hide') {
        $wpdb->insert($table, $log_row, $log_formats);

        // Persist the actual hide/unhide state — this is what record_exists()
        // reads to decide whether the button shows "Hide" or "Unhide".
        btn_briefing()->hidebriefing()->insert_briefing($agency_id, $type, $value);

        $item_label = $type === 'term' ? 'Training Category' : 'Video';
        $id_line    = $type === 'term'
            ? "Term ID: {$term_id}\nCategory: {$label}"
            : "Post ID: {$post_id}\nVideo Title: {$label}";

        $to      = 'jason@thebriefingroom.com';
        $subject = "{$item_label} Hidden - Legal Training";
        $message = "A legal training {$item_label} has been hidden.\n\n" .
                   "Agency ID: {$agency_id}\n" .
                   "{$id_line}\n" .
                   "Person Hiding: {$person_hiding}\n" .
                   "Person Authorizing: {$person_authorizing}\n" .
                   "Reason: {$reason}\n" .
                   "Timestamp: {$now}\n";
        $headers = [
            'Content-Type: text/plain; charset=UTF-8',
            'Cc: dwainjeworski@gmail.com',
        ];

        wp_mail($to, $subject, $message, $headers);

    } elseif ($dataAction === 'unhide') {
        $wpdb->insert($table, $log_row, $log_formats);

        // Persist the actual hide/unhide state — see note above.
        btn_briefing()->hidebriefing()->delete_briefing($agency_id, $type, $value);
    }

    wp_send_json_success(['message' => 'OK']);
}