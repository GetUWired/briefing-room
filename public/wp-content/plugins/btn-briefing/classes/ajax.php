<?php

if (!defined('ABSPATH')) {
    header('HTTP/1.0 403 Forbidden');
    exit();
}

/**
 * Frontend Ajax Functions
 *
 * @since      1.0.0
 *
 * @author     Augustus Villanueva <augustus@businesstechninjas.com>
 */
final class btn_briefing_ajax
{
    // Wordpress Hooks ( Actions & Filters )
    public function add_wp_hooks()
    {
        add_action('wp_ajax_btn_briefing_action', [$this, 'btn_briefing_action']);
        add_action('wp_ajax_nopriv_btn_briefing_action', [$this, 'btn_briefing_action']);

        add_action('wp_ajax_btn_briefing_add_to_favorite_action', [$this, 'btn_briefing_add_to_favorite_action']);
        add_action('wp_ajax_nopriv_btn_briefing_add_to_favorite_action', [$this, 'btn_briefing_add_to_favorite_action']);

        add_action('wp_ajax_btn_briefing_remove_to_favorite_action', [$this, 'btn_briefing_remove_to_favorite_action']);
        add_action('wp_ajax_nopriv_btn_briefing_remove_to_favorite_action', [$this, 'btn_briefing_remove_to_favorite_action']);

        add_action('wp_ajax_btn_briefing_complete_action', [$this, 'btn_briefing_complete_action']);
        add_action('wp_ajax_nopriv_btn_briefing_complete_action', [$this, 'btn_briefing_complete_action']);

        add_action('wp_ajax_btn_briefing_hide_action', [$this, 'btn_briefing_hide_action']);
        add_action('wp_ajax_nopriv_btn_briefing_hide_action', [$this, 'btn_briefing_hide_action']);

        add_action('wp_ajax_btn_briefing_assigned_training_action', [$this, 'btn_briefing_assigned_training_action']);

        add_action('wp_ajax_btn_get_briefing_assigned_options_action', [$this, 'btn_get_briefing_assigned_options_action']);

        add_action('wp_ajax_btn_briefing_assigned_training_delete_action', [$this, 'btn_briefing_assigned_training_delete_action']);

        add_action('wp_ajax_btn_briefing_agency_policy_action', [$this, 'btn_briefing_agency_policy_action']);
        add_action('wp_ajax_nopriv_btn_briefing_agency_policy_action', [$this, 'btn_briefing_agency_policy_action']);

        add_action('wp_ajax_btn_briefing_assigned_training_report_action', [$this, 'btn_briefing_assigned_training_report_action']);
        add_action('wp_ajax_nopriv_btn_briefing_assigned_training_report_action', [$this, 'btn_briefing_assigned_training_report_action']);

        add_action('wp_ajax_btn_briefing_policy_delete_action', [$this, 'btn_briefing_policy_delete_action']);
        add_action('wp_ajax_nopriv_btn_briefing_policy_delete_action', [$this, 'btn_briefing_policy_delete_action']);

        add_action('wp_ajax_btn_briefing_policy_delete_gform_action', [$this, 'btn_briefing_policy_delete_gform_action']);
        add_action('wp_ajax_nopriv_btn_briefing_policy_delete_action', [$this, 'btn_briefing_policy_delete_gform_action']);

        add_action('wp_ajax_btn_briefing_assigned_training_report_popup_action', [$this, 'btn_briefing_assigned_training_report_popup_action']);
        add_action('wp_ajax_nopriv_btn_briefing_assigned_training_report_popup_action', [$this, 'btn_briefing_assigned_training_report_popup_action']);

        add_action('wp_ajax_btn_briefing_assigned_training_active_action', [$this, 'btn_briefing_assigned_training_active_action']);

        add_action('wp_ajax_btn_briefing_assigned_training_admin_action', [$this, 'btn_briefing_assigned_training_admin_action']);

        // === ADDED FOR tbr-sso-manager INTEGRATION ===
        add_action('wp_ajax_btn_briefing_agency_extension', [$this, 'btn_briefing_agency_extension_action']);
        // === END ADDITION ===

    }

    // === ADDED FOR tbr-sso-manager INTEGRATION ===
    /**
     * Handle AJAX requests from plugin extensions
     *
     * @since btn-briefing 1.0.3
     */
    public function btn_briefing_agency_extension_action()
    {
        $user_id = get_current_user_id();
        $agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_manager($user_id);
        $extension = sanitize_text_field($_POST['extension'] ?? '');
        $action_type = sanitize_text_field($_POST['action_type'] ?? '');
        $data = $_POST['data'] ?? [];
        // Verify user is agency manager (returns false if user IS a manager)
        $user_role = btn_briefing()->hidebriefing()->user_has_specified_role(true);
        if ($user_role) {
            wp_send_json_error(['message' => 'Unauthorized access']);

            return;
        }
        if (empty($agency_id)) {
            wp_send_json_error(['message' => 'No agency found for user']);

            return;
        }
        // Add agency_id to data for extensions
        $data['agency_id'] = $agency_id;
        // Allow extensions to handle their own AJAX
        $response = apply_filters(
            'btn_briefing_agency_extension_ajax',
            null,
            $extension,
            $action_type,
            $data,
            $agency_id,
            $user_id
        );
        if ($response !== null) {
            if (isset($response['error'])) {
                wp_send_json_error($response);
            } else {
                wp_send_json_success($response);
            }
        } else {
            wp_send_json_error(['message' => 'Unknown extension or action']);
        }
    }

    // === END ADDITION ===
    public function btn_briefing_assigned_training_admin_action()
    {
        check_ajax_referer('btn-briefing-ajax', 'nonce');
        if (!current_user_can('manage_options')) {
            wp_send_json_error(['message' => 'Unauthorized'], 403);
        }
        $ns = 'btn-briefing';
        $training_id = (!empty($_POST['training_id'])) ? $_POST['training_id'] : false;
        $status = (!empty($_POST['status'])) ? $_POST['status'] : false;
        $user_id = get_current_user_id();
        $post_ids = btn_briefing()->assigned_training()->get_admin_assignments_ajax($user_id, 'block', $training_id, $status);
        $template_file = 'assigned-training-admin.php';
        $template = btn_briefing()->template_part_path($template_file);
        $html = '<div class="btn-briefing-container">';
        include $template;
        $html .= '</div>';
        $data = [
            'html' => $html,
        ];
        wp_send_json_success($data);

    }

    public function btn_briefing_assigned_training_report_popup_action()
    {
        $data_action = (!empty($_POST['data_action'])) ? $_POST['data_action'] : false;
        $training_id = (!empty($_POST['training_id'])) ? $_POST['training_id'] : false;
        $agency_id = (!empty($_POST['agency_id'])) ? $_POST['agency_id'] : '';
        $station_id = (!empty($_POST['station_id'])) ? $_POST['station_id'] : '';
        $assigned_type = (!empty($_POST['assigned_type'])) ? $_POST['assigned_type'] : '';
        $assigned_to = (!empty($_POST['assigned_to'])) ? $_POST['assigned_to'] : '';
        $title = get_the_title($training_id);
        $html = '';
        if ($data_action == 'completed') {
            $html .= "<h3 class=\"btn-briefing-modal-title\">Students Who Completed '{$title}' Training</h3>";
            $user_lists = btn_briefing()->assigned_training()->get_total_completed_trainings($training_id, '', '', true);
            if (!empty($user_lists)) {
                $html .= '<table class="btn-briefing-users-list">';
                $html .= ' <thead style="background-color: #f0f4f8;">
							  <tr>
								<th>Name</th>
								<th>Email</th>
								<th>Completed on</th>
								<th>Station</th>
							  </tr>
							</thead>';
                foreach ($user_lists as $user_list) {
                    $date = $user_list['completedAt'];
                    $formatted_date = date('F j, Y', strtotime($date));
                    $user_id = $user_list['userId'];
                    if (!empty($user_id)) {
                        $html .= '<tr>';
                        $user = get_userdata($user_id);
                        $first_name = get_user_meta($user->ID, 'first_name', true);
                        $last_name = get_user_meta($user->ID, 'last_name', true);
                        $email = $user->user_email;
                        $full_name = trim("{$first_name} {$last_name}");
                        $html .= "<td class=\"btn-briefing-users-list\">{$full_name}</td>";
                        $html .= "<td class=\"btn-briefing-users-list\">{$email}</td>";
                        $html .= "<td class=\"btn-briefing-users-date\">{$formatted_date}</td>";
                        $html .= "<td class=\"btn-briefing-users-date\">{$user_list['station_name']}</td>";
                        $html .= '</tr>';
                    }

                }
                $html .= '</table>';
            } else {
                $html .= "<p class='no-result-found'>No Result Found</p>";
            }

        } elseif ($data_action == 'not-completed') {
            $html .= "<h3 class=\"btn-briefing-modal-title\">Students Who Didn't Complete '{$title}' Training</h3>";

            $user_exclude_ids_raw = btn_briefing()->assigned_training()->get_total_completed_trainings($training_id, '', '', true);
            $user_exclude_ids = array_map('intval', array_column($user_exclude_ids_raw, 'userId'));
            if ($assigned_type != 'user') {
                $user_lists = btn_briefing()->assigned_training()->get_officers_by_agency($agency_id, $station_id, true, false, $user_exclude_ids, true);
            } else {
                $user_lists = btn_briefing()->assigned_training()->get_officers_by_agency($agency_id, $station_id, true, false, $user_exclude_ids, true, $assigned_type, $assigned_to);
            }

            if (!empty($user_lists)) {
                $html .= '<table class="btn-briefing-users-list">';
                $html .= ' <thead style="background-color: #f0f4f8;">
							  <tr>
								<th>Name</th>
								<th>Email</th>
								<th>Station</th>
							  </tr>
							</thead>';
                foreach ($user_lists as $user_list) {

                    $user_id = $user_list['userId'];
                    if (!empty($user_id)) {
                        $html .= '<tr>';
                        $user = get_userdata($user_id);
                        $email = $user->user_email;
                        $first_name = get_user_meta($user->ID, 'first_name', true);
                        $last_name = get_user_meta($user->ID, 'last_name', true);
                        $full_name = trim("{$first_name} {$last_name}");
                        $html .= "<td class=\"btn-briefing-users-list\">{$full_name}</td>";
                        $html .= "<td class=\"btn-briefing-users-list\">{$email}</td>";
                        $html .= "<td class=\"btn-briefing-users-date\">{$user_list['station_name']}</td>";

                        $html .= '</tr>';
                    }

                }
                $html .= '</table>';
            } else {
                $html .= "<p class='no-result-found'>No Result Found</p>";
            }

        }
        $data = [
            'html' => $html,
            '$agency_id' => $agency_id,
            "$station_id" => $station_id,
        ];
        wp_send_json_success($data);
    }

    public function btn_briefing_policy_delete_gform_action()
    {
        $entry_id = (!empty($_POST['id'])) ? $_POST['id'] : false;

        if ($entry_id) {
            $result = GFAPI::delete_entry($entry_id);

            if (is_wp_error($result)) {
                $return = 'Error deleting entry: '.$result->get_error_message();
            } else {
                $return = 'Entry deleted successfully.';
            }
        }

        wp_send_json_success($return);
    }

    public function btn_briefing_policy_delete_action()
    {
        global $wpdb;
        $table = $wpdb->prefix.'agency_policy';
        $user_id = get_current_user_id();
        $agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_manager($user_id);

        if (!empty($agency_id)) {
            // Check if a record with this agency_id already exists
            $existing_id = $wpdb->get_var(
                $wpdb->prepare("SELECT id FROM {$table} WHERE agency_id = %d LIMIT 1", $agency_id)
            );

            if ($existing_id) {
                // Delete the existing record
                $deleted = $wpdb->delete(
                    $table,
                    ['id' => $existing_id],
                    ['%d']
                );

                if ($deleted !== false) {
                    $return = 'Policy deleted successfully.';
                } else {
                    $return = 'Failed to delete policy.';
                }
            } else {
                $return = 'No existing policy found to delete.';
            }
        } else {
            $return = 'Missing required agency ID.';
        }

        wp_send_json_success($return);
    }

    public function btn_briefing_agency_policy_action()
    {
        global $wpdb;
        $user_id = get_current_user_id();
        $agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_manager($user_id);
        $url = (!empty($_POST['url'])) ? $_POST['url'] : false;
        $link = esc_url_raw($url);
        $updated_by = $user_id;
        $last_updated = current_time('mysql');
        $table = $wpdb->prefix.'agency_policy';

        $return = '';

        if (!empty($link) && !empty($agency_id)) {
            // Check if a record with this agency_id already exists
            $existing_id = $wpdb->get_var(
                $wpdb->prepare("SELECT id FROM {$table} WHERE agency_id = %d LIMIT 1", $agency_id)
            );

            if ($existing_id) {
                // Update the existing record
                $updated = $wpdb->update(
                    $table,
                    [
                        'link' => $link,
                        'last_updated' => $last_updated,
                        'updated_by' => $updated_by,
                    ],
                    [
                        'id' => $existing_id,
                    ],
                    [
                        '%s', '%s', '%d',
                    ],
                    [
                        '%d',
                    ]
                );

                if ($updated !== false) {
                    $return = 'Policy updated successfully.';
                } else {
                    $return = 'No changes made, or update failed.';
                }

            } else {
                // Insert a new record
                $inserted = $wpdb->insert(
                    $table,
                    [
                        'agency_id' => $agency_id,
                        'link' => $link,
                        'last_updated' => $last_updated,
                        'updated_by' => $updated_by,
                    ],
                    [
                        '%d', '%s', '%s', '%d',
                    ]
                );

                if ($inserted) {
                    $return = 'Policy saved successfully.';
                } else {
                    $return = 'Failed to save policy. Please check the data.';
                }
            }
        } else {
            $return = 'Missing required data.';
        }

        wp_send_json_success($return);
    }

    public function btn_briefing_assigned_training_delete_action()
    {
        check_ajax_referer('btn-briefing-ajax', 'nonce');
        if (!current_user_can('manage_options')) {
            wp_send_json_error(['message' => 'Unauthorized'], 403);
        }
        $id = (!empty($_POST['id'])) ? $_POST['id'] : false;
        if ($id) {
            btn_briefing()->assigned_training()->delete_training_assignment($id);
        }
        wp_send_json_success($id);
    }

    public function btn_briefing_assigned_training_active_action()
    {
        check_ajax_referer('btn-briefing-ajax', 'nonce');
        if (!current_user_can('manage_options')) {
            wp_send_json_error(['message' => 'Unauthorized'], 403);
        }
        $id = (!empty($_POST['id'])) ? $_POST['id'] : false;
        if ($id) {
            btn_briefing()->assigned_training()->active_training_assignment($id);
        }
        wp_send_json_success($id);
    }

    public function btn_get_briefing_assigned_options_action()
    {
        check_ajax_referer('btn-briefing-ajax', 'nonce');
        if (!current_user_can('manage_options')) {
            wp_send_json_error(['message' => 'Unauthorized'], 403);
        }
        $category_id = sanitize_text_field($_POST['category_id']);
        $results = [];
        // Group 1: Select All
        $select_all_group = [
            'text' => 'Select All (all videos in the selected category)',
            'children' => [
                [
                    'id' => 'select_all',
                    'text' => 'All Blocks',
                ],
            ],
        ];
        $individual_group = [
            'text' => 'Select one individual video from the category',
            'children' => [],
        ];
        $post_type = btn_briefing()->post()->get_post_slug();
        $term_taxonomy = btn_briefing()->post()->get_taxonomy_slug();
        $args_post = [
            'post_type' => $post_type,
            'posts_per_page' => -1,
            'post_status' => 'publish',
        ];

        if ($category_id) {
            $args_post['tax_query'] = [
                [
                    'taxonomy' => $term_taxonomy,
                    'field' => 'term_id',
                    'terms' => $category_id,
                ],
            ];
        }
        $loop = new WP_Query($args_post);
        // Format post results
        if ($loop->have_posts()) {
            while ($loop->have_posts()) {
                $loop->the_post();
                $individual_group['children'][] = [
                    'id' => get_the_ID(),
                    'text' => get_the_title(),
                ];
            }
            wp_reset_postdata();
        }

        $results = [$select_all_group, $individual_group];
        wp_send_json_success($results);
    }

    public function btn_briefing_assigned_training_action()
    {
        check_ajax_referer('btn-briefing-ajax', 'nonce');
        if (!current_user_can('manage_options')) {
            wp_send_json_error(['message' => 'Unauthorized'], 403);
        }

        $category_id = (!empty($_POST['category_id'])) ? $_POST['category_id'] : false;
        $block_id = (!empty($_POST['block_id'])) ? $_POST['block_id'] : false;
        $assigned_to = (!empty($_POST['assigned_to'])) ? $_POST['assigned_to'] : false;
        $assigned_type = (!empty($_POST['assigned_type'])) ? $_POST['assigned_type'] : false;
        $assigned_by = get_current_user_id();

        if ($block_id == 'select_all') {
            $training_type = 'category';
            $training_id = $category_id;
        } else {
            $training_type = 'block';
            $training_id = $block_id;
        }

        if ($training_id && $training_type && $assigned_to && $assigned_type && $assigned_by) {
            btn_briefing()->assigned_training()->assign_training($training_id, $training_type, $assigned_type, $assigned_to, $assigned_by);
            wp_send_json_success();
        } else {
            wp_send_json_error(['message' => 'Missing required fields']);
        }
    }

    public function btn_briefing_hide_action()
    {
        $action = (!empty($_POST['dataAction'])) ? $_POST['dataAction'] : false;
        $agency_id = (!empty($_POST['agencyID'])) ? $_POST['agencyID'] : false;
        $type = (!empty($_POST['type'])) ? $_POST['type'] : false;
        $value = (!empty($_POST['value'])) ? $_POST['value'] : false;

        if ($action == 'unhide') {
            btn_briefing()->hidebriefing()->delete_briefing($agency_id, $type, $value);
        } else {
            btn_briefing()->hidebriefing()->insert_briefing($agency_id, $type, $value);
        }
        wp_send_json_success($action);
    }

    public function btn_briefing_complete_action()
    {
        check_ajax_referer('btn-briefing-ajax', 'nonce');
        $user_id = get_current_user_id();
        $post_id = (!empty($_POST['post_id'])) ? $_POST['post_id'] : false;
        $completed = get_user_meta($user_id, 'btn-briefing-completed', true);
        $current_date = current_time('mysql');
        $start_date = (!empty($_POST['start_date'])) ? $_POST['start_date'] : $current_date;
        if (empty($completed)) {
            $completed = [];
            array_push($completed, $post_id);
        } else {
            array_push($completed, $post_id);
        }
        if (!empty($completed)) {
            $completed = array_unique($completed);
        }

        $term_taxonomy = btn_briefing()->post()->get_taxonomy_slug();
        $assignment_id = btn_briefing()->assigned_training()->get_assignment_id_by_post_or_term($post_id, $term_taxonomy);

        update_user_meta($user_id, 'btn-briefing-completed', $completed);
        if (!empty($assignment_id)) {
            btn_briefing()->assigned_training()->mark_complete($assignment_id, $user_id);
        }

        $hours = (int) get_field('video_duration_hours', $post_id);
        $minutes = (int) get_field('video_duration_mins', $post_id);

        global $wpdb;
        $records_table = $wpdb->prefix.'btn_training_records';
        $sessions_table_check = $wpdb->prefix.'btn_training_sessions';
        $already_logged_today = $wpdb->get_var($wpdb->prepare(
            "SELECT tr.id FROM {$records_table} tr
				 INNER JOIN {$sessions_table_check} ts ON ts.id = tr.sessionId
				 WHERE ts.trainingId = %d AND tr.userId = %d AND DATE(ts.completedAt) = %s
				 LIMIT 1",
            $post_id, $user_id, current_time('Y-m-d')
        ));

        if (($hours || $minutes) && !$already_logged_today) {
            $duration = ($hours * 60) + $minutes;

            $table = $wpdb->prefix.'btn_training_sessions';
            $officers_table = $wpdb->prefix.'btn_officers';

            // Get user's officer ID, station, and agency
            $officer = $wpdb->get_row(
                $wpdb->prepare(
                    "SELECT id AS officer_id, stationId, agencyId FROM {$officers_table} WHERE userId = %d",
                    $user_id
                ),
                ARRAY_A
            );
            // Access individual values like this:
            $officer_id = $officer['officer_id'] ? $officer['officer_id'] : '';

            $wpdb->insert(
                $table,
                [
                    'trainingId' => $post_id,
                    'duration' => $duration,
                    'completedAt' => $current_date,
                    'userId' => $user_id,
                    'officerId' => $officer_id,
                ],
                ['%d', '%s', '%s', '%d', '%s']
            );
            // Get the inserted row ID
            $inserted_id = $wpdb->insert_id;

            if ($inserted_id) {
                $table = $wpdb->prefix.'btn_training_records';
                $wpdb->insert(
                    $table,
                    [
                        'sessionId' => $inserted_id,
                        'userId' => $user_id,
                    ],
                    ['%d', '%s', '%s', '%d']
                );
            }
        }

        wp_send_json_success($completed);
    }

    public function btn_briefing_remove_to_favorite_action()
    {
        $user_id = get_current_user_id();
        $post_id = (!empty($_POST['post_id'])) ? $_POST['post_id'] : false;
        $personalize = get_user_meta($user_id, 'btn-briefing-favorite', true);

        if (($key = array_search($post_id, $personalize)) !== false) {
            unset($personalize[$key]);
        }
        update_user_meta($user_id, 'btn-briefing-favorite', $personalize);
        wp_send_json_success($personalize);
    }

    public function btn_briefing_add_to_favorite_action()
    {
        $user_id = get_current_user_id();
        $post_id = (!empty($_POST['post_id'])) ? $_POST['post_id'] : false;
        $personalize = get_user_meta($user_id, 'btn-briefing-favorite', true);
        if (empty($personalize)) {
            $personalize = [];
            array_push($personalize, $post_id);
        } else {
            array_push($personalize, $post_id);
        }
        if (!empty($personalize)) {
            $personalize = array_unique($personalize);
        }
        update_user_meta($user_id, 'btn-briefing-favorite', $personalize);
        wp_send_json_success($personalize);
    }

    public function btn_briefing_action()
    {
        $ns = 'btn-briefing';
        $html = '';
        $posts_per_page = (!empty($_POST['posts_per_page'])) ? $_POST['posts_per_page'] : false;
        $search = (!empty($_POST['search'])) ? $_POST['search'] : false;
        $template = btn_briefing()->template_part_path('posts.php');
        $paged = (!empty($_POST['paged'])) ? $_POST['paged'] : false;
        $pagination = (!empty($_POST['pagination'])) ? $_POST['pagination'] : false;
        $category_id = (!empty($_POST['category_id'])) ? $_POST['category_id'] : false;
        $assignment = (!empty($_POST['assignment'])) ? $_POST['assignment'] : false;
        $post_type = btn_briefing()->post()->get_post_slug();
        $new = (!empty($_POST['new'])) ? $_POST['new'] : false;
        $term_taxonomy = btn_briefing()->post()->get_taxonomy_slug();

        $args_post = [
            'post_type' => $post_type,
            'posts_per_page' => $posts_per_page,
            'paged' => $paged,
            'post_status' => 'publish',
        ];
        if ($new == 1) {
            $args_post['date_query'] = [
                [
                    'after' => '42 days ago',
                    'inclusive' => true,
                ],

            ];
        }
        if ($search) {
            $args_post['s'] = $search;
        }
        if ($paged) {
            $args_post['paged'] = $paged;
        }
        if ($category_id && $category_id != 'all') {
            $args_post['tax_query'] = [
                [
                    'taxonomy' => $term_taxonomy,
                    'field' => 'term_id',
                    'terms' => $category_id,
                ],
            ];
        }
        if ($assignment) {
            $template = btn_briefing()->template_part_path('assigned-training-display.php');
        } else {
            $loop = new WP_Query($args_post);
        }

        if ($template) {
            include $template;
        }

        $data = [
            'html' => $html,
            'search' => $search,
            'paged' => $paged,
            '$assignment' => $assignment,
        ];
        wp_send_json_success($data);

    }

    public function btn_briefing_assigned_training_report_action()
    {
        $end_date = (!empty($_POST['end_date'])) ? $_POST['end_date'] : false;
        $start_date = (!empty($_POST['start_date'])) ? $_POST['start_date'] : false;
        $status = (!empty($_POST['status'])) ? $_POST['status'] : false;

        if ($status != 'timeframe') {
            $start_date = '';
            $end_date = '';
        }
        $template_file = 'assigned-training-report.php';
        $template = btn_briefing()->template_part_path($template_file);
        $user_id = get_current_user_id();
        $agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_manager($user_id);
        $ns = 'btn-briefing';

        if ($template) {
            include $template;
        }
        $data = [
            'html' => $html,
            'status' => $status,
            '$end_date' => $end_date,
            '$start_date' => $start_date,
        ];
        wp_send_json_success($data);

    }

    public function __construct() {}
}
