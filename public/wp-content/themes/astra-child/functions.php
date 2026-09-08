<?php

/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.4');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

    wp_enqueue_style('astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all');
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);


/** Temporary redirection for logout */
add_action('template_redirect', function () {
    // Get the current request path
    $current_path = isset($_SERVER['REQUEST_URI']) ? wp_parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '';

    // Check if the current request matches /logout/
    if ($current_path === '/logout/') {
        // Redirect to the home page
        wp_redirect(home_url());
        exit;
    }
});

add_filter('register_post_type_args', 'update_briefing_post_type_labels', 10, 2);

function update_briefing_post_type_labels($args, $post_type)
{
    if ($post_type === 'briefing') {
        $args['labels']['name'] = 'Video Library';
        $args['labels']['all_items'] = 'View Briefing library';
        $args['labels']['add_new_item'] = 'Add new briefing';
        $args['labels']['edit_item'] = 'Edit Video Library';
        $args['labels']['view_item'] = 'View Video Library';
        $args['labels']['search_items'] = 'Search Video Library';
        $args['labels']['not_found'] = 'No Video Library found';
        $args['labels']['not_found_in_trash'] = 'No Video Library found in Trash';
    }
    return $args;
}


/*
function add_disclaimer_checkbox() {
    ?>
    <p class="disclaimer-checkbox">
        <label for="disclaimer">
            <input type="checkbox" name="disclaimer" id="disclaimer" value="1" /> I agree to the terms and conditions.
        </label>
    </p>
    <style>
        .disclaimer-checkbox {
            margin-bottom: 10px;
        }
    </style>
    <?php
}
add_action('login_form', 'add_disclaimer_checkbox');


function custom_login_failed_redirect($redirect_to, $requested_redirect_to, $user) {
    // Check if there is an error and it is related to the disclaimer
    if (isset($user->errors['disclaimer_not_checked'])) {
        $redirect_to = add_query_arg('login', 'disclaimer_not_checked', wp_login_url());
    }
    return $redirect_to;
}
add_filter('login_redirect', 'custom_login_failed_redirect', 10, 3);

function validate_disclaimer_checkbox($user, $username, $password) {
    if (isset($_POST['log']) && isset($_POST['pwd']) && !isset($_POST['disclaimer'])) {
        return new WP_Error('disclaimer_not_checked', __('ERROR: Please accept the terms of use.'));
    }
    return $user;
}
add_filter('authenticate', 'validate_disclaimer_checkbox', 30, 3);
*/



/** Test code
function apply_sergeant_tag_on_user_creation($user_id) {
    // Get the user's roles
    $user = get_userdata($user_id);
    $roles = $user->roles;

    // Check if the user has the 'sergeant' role
    if (in_array('sergeant', $roles)) {
        // Define the tag ID for 'Sergeant Welcome and Nurture: START'
        $sergeant_tag_id = 164;

        // Check if the memb_setTags function exists
        if (function_exists('memb_setTags')) {
            // Get the contact ID for the user (required by Memberium)
            $contact_id = get_user_meta($user_id, 'memb_contact_id', true);

            if (!empty($contact_id)) {
                // Apply the tag to the user
                memb_setTags($sergeant_tag_id, $contact_id);
            }
        }
    }
}
add_action('user_register', 'apply_sergeant_tag_on_user_creation');*/

function login_failed_message_shortcode()
{
    ob_start();
?>
    <div id="error-wrapper"></div>
    <script>
        jQuery(document).ready(function($) {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('login') === 'failed') {
                $('#error-wrapper').html('<div class="error-message">Invalid username or password.</div>');
            }
        });
    </script>
<?php
    return ob_get_clean();
}
add_shortcode('login_error_message', 'login_failed_message_shortcode');


// 🔒 Inactive function: Not currently hooked anywhere.
// Function kept for reference in case redirect behavior is needed again.
function redirect_non_admin_to_welcome()
{
    if (is_user_logged_in()) {
        $welcome_slug = 'welcome';
        $has_welcome_tag = false;
        if (function_exists('memb_hasAnyTags')) {
            $tag = "560,878";
            if (memb_hasAnyTags($tag)) {
                $has_welcome_tag =  true;
            }
        }
        if (!is_page($welcome_slug) && !current_user_can('administrator') && !$has_welcome_tag) {
            wp_redirect(home_url('/' . $welcome_slug));
            exit;
        }
    }
}


add_action('admin_footer-post-new.php', 'set_default_author_dropdown');
function set_default_author_dropdown()
{
    global $post_type;

    // Change 'post' to your desired post type (e.g. 'briefing')
    if ($post_type !== 'briefing') return;

    $default_author_id = 3; // Replace with the user ID of the default author

?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#post_author_override').val('<?php echo esc_js($default_author_id); ?>');
        });
    </script>
<?php
}


//quick debug on roles and capabilities
function list_all_capabilities()
{
    global $wp_roles;

    if ($_GET['show_capabilities'] && current_user_can( 'manage_options' )) {

        if ($wp_roles && property_exists($wp_roles, 'roles')) {
            echo '<pre>';
            array_walk($wp_roles->get_names(), function ($value, $key) {
                echo "<h2>Capabilities for the $value:</h2>";
                print_r(get_role($key)->capabilities);
            });
            echo '</pre>';
        }

        exit;
    }
}


// Register a shutdown function
//register_shutdown_function('shutdown_handler');

function shutdown_handler() {
    $last_error = error_get_last();

    // Check if an error occurred
    if ($last_error !== null) {
        echo "<h2>A fatal error occurred:</h2>";
        echo "<pre>";
        print_r($last_error);
        echo "</pre>";
    }
}