<?php
if (! defined('ABSPATH')) {
	header('HTTP/1.0 403 Forbidden');
	die();
}

/**
 * Shortcode Class
 *
 * @since      1.0.0
 * @package    btn-briefing
 * @subpackage btn-briefing/classes
 * @author     Augustus Villanueva <augustus@businesstechninjas.com>
 */
final class btn_briefing_shortcodes {
	static function have_a_question($atts, $content, $tag){
		$atts = shortcode_atts([
			'form_id' => 5,
			
		], $atts, 'form_id');
		$form_id = $atts['form_id'];
		$form = do_shortcode('[gravityform id="'.$form_id.'"]');
		$html .='<div class="modal micromodal-slide" id="modal-question" aria-hidden="true">
						 <div class="modal__overlay" tabindex="-1" data-micromodal-close>
						   <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
							 <header class="modal__header">
							   <button class="modal__close" aria-label="Close modal" data-micromodal-close style="background-image:url('.BTN_BRIEFING_ASSETS_URL .'images/close.svg) !important"></button>
							 </header>
							 <div class="modal__content" id="modal-1-content">
							 '.$form.'
							 </div>
					   </div>
				   </div>
				  </div>';
		return $html;
	}
	
	static function audio($atts, $content, $tag){
		$atts = shortcode_atts([
			'post_id' => get_the_ID(),
			'field'   => 'audio_url',
			'class'   => 'acf-audio-player',
		], $atts, 'acf_audio');

		$post_id = $atts['post_id'];
		$field   = $atts['field'];
		$class   = esc_attr($atts['class']);

		// Get the S3 or local file URL from the ACF field (your format filter will handle the override)
		$audio_url = get_field($field, $post_id);
		$field_name = 'field_685ea972dd105'; // your ACF field name
		$attachment_id = get_field($field_name, $post_id, false); // get the ID, not the URL
	
		if (!$audio_url) {
			return '';
		}
		$audio_url = get_post_meta($post_id, 'briefing_file_s3_url', true);
		if(empty($audio_url)){
			 $audio_url = get_post_meta($attachment_id, 's3_url', true);
		}
		
		// Output the HTML5 audio player
		$return .="<h4 class=\"audio-title\">Click to listen to the audio only</h4>";
		$return .= sprintf(
				'<audio class="%s" controls><source src="%s" type="audio/mpeg">Your browser does not support the audio element.</audio>',
				$class,
				esc_url($audio_url)
			);
		return $return;
		
	}
	static function activity_feed($atts, $content, $tag){
		$user_id   = get_current_user_id();
		$agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_manager($user_id);

		global $wpdb;
		$popular = btn_briefing()->frontend()->get_popular_training($agency_id);
		$login= btn_briefing()->frontend()->get_login_count($agency_id);
		$top_users= btn_briefing()->frontend()->get_top_user($agency_id);
		$total_sessions = btn_briefing()->frontend()->total_sessions($agency_id);
		$total_minutes = btn_briefing()->frontend()->total_minutes($agency_id);
		$total_students = btn_briefing()->frontend()->get_total_students($agency_id);
		$total_facilitator = btn_briefing()->frontend()->total_facilitator($agency_id);
		
		if($popular){
			$html .= $popular;
		}
		if($login){
			$html .= $login;
		}
		if($top_users){
			$html .= $top_users;
		}
		if($total_sessions){
			$html .= $total_sessions;
		}
		if($total_minutes){
			$html .= $total_minutes;
		}
		if($total_students){
			$html .= $total_students;
		}
		if($total_facilitator){
			$html .= $total_facilitator;
		}
		/*
		$query = $wpdb->prepare("
			SELECT
				ts.*,
				u.ID as user_id,
				fn.meta_value AS first_name,
				ln.meta_value AS last_name
			FROM {$wpdb->prefix}btn_training_sessions ts
			JOIN {$wpdb->prefix}usermeta um ON um.user_id = ts.userId
			JOIN {$wpdb->prefix}btn_officers o ON o.userId = ts.userId
			JOIN {$wpdb->prefix}btn_stations s ON s.id = o.stationId
			JOIN {$wpdb->prefix}users u ON u.ID = ts.userId
			LEFT JOIN {$wpdb->prefix}usermeta fn ON fn.user_id = u.ID AND fn.meta_key = 'first_name'
			LEFT JOIN {$wpdb->prefix}usermeta ln ON ln.user_id = u.ID AND ln.meta_key = 'last_name'
			WHERE um.meta_key = 'wp_capabilities'
			  AND um.meta_value LIKE %s
			  AND s.agencyId = %d
			ORDER BY ts.completedAt DESC
			LIMIT 10
		", '%btn_briefing_room_officer%', $agency_id );

		$sessions = $wpdb->get_results( $query );

		if ( ! empty( $sessions ) ) {
			$html .= '<ul class="btn-training-sessions">';
			foreach ( $sessions as $session ) {
				$training_id = $session->trainingId;
				$training_title = get_the_title($training_id);
				$permalink = get_permalink($training_id);
				$date = date("F j, Y", strtotime($session->completedAt));
				$name = "<b style='font-weight:500;'>{$session->first_name} {$session->last_name}</b>";
				$html .= '<li><span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-user-circle" viewBox="0 0 496 512" xmlns="http://www.w3.org/2000/svg"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg></span>
							<span class="elementor-icon-list-text">'.$name.' completed the training block: <a href="'.$permalink.'" target="_blank">"'.$training_title.'</a>"<div class="date-activity-feed">'.$date.'</div></span>';
				// Add more fields as needed, e.g. $session->category, $session->status etc.
				$html .= '</li>';
			}
			$html .= '</ul>';
		}
		else{
			$html .= "No recent Activity Found";
		}*/
		return $html;

	}

	static function agency_policy_end_user($atts, $content, $tag){
		$user_id = get_current_user_id();
		$user_role =  btn_briefing()->hidebriefing()->user_has_specified_role(true);
		$user_role_facilitator =  btn_briefing()->hidebriefing()->user_has_specified_role_facilitator();
		if(!$user_role){
			$agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_manager($user_id);
			
		}
		else{
			if(!$user_role_facilitator){
				$agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_facilitator($user_id);
			}
			else{
				$agency_id = btn_briefing()->frontend()->get_agency_id_officer($user_id);
			}
			
		}
		$link = btn_briefing()->frontend()->get_agency_policy_info_by_agency_id($agency_id);
		$html ="";
		$ns = "btn-briefing";
			if($link){
				 $timestamp = strtotime($link['last_updated']);
				 //$date =  date('F j, Y', $timestamp);
				 //$html .="<label><b>Last Updated</b>: {$date}</labe>";
				 //$html .="<a href=\"{$link['link']}\"  target=\"_blank\">Agency Policy</a>";
				 $html .="<ul class=\"{$ns}-file-wrapper\">";
					$count = "policy-1";
					$policy_url = $link['link'];
					$filename = basename(parse_url($policy_url, PHP_URL_PATH));
					$filename = str_replace('-', ' ', $filename);
					// Step 2: Remove special characters (only allow letters, numbers, dashes, underscores, and dots)
					$clean_filename = preg_replace('/[^A-Za-z0-9_\.]/', '', $filename);
					$html .="<li><span class=\"btn-title-inline\">{$filename}</span> <div class=\"btn-wrapper\"><a data-id=\"modal-{$count}\" data-url=\"{$policy_url}\" class=\"btn-popup\"><i class=\"fa fas fa-file-pdf-o\"></i><span>View</span></a><a href=\"{$policy_url}\" target=\"_blank\" download><i class=\"fa fas fa-download\"></i><span>Download</span></a>
					</div></li>";
					// End loop.
					//
					//
				$html .='<div class="modal micromodal-slide" id="modal-'.$count.'" aria-hidden="true">
						 <div class="modal__overlay" tabindex="-1" data-micromodal-close>
						   <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
							 <header class="modal__header">
							   <button class="modal__close" aria-label="Close modal" data-micromodal-close style="background-image:url('.BTN_BRIEFING_ASSETS_URL .'images/close.svg) !important"></button>
							 </header>
							 <div class="modal__content" id="modal-1-content">
								 <div class="iframe-policy-wrapper">';
								 $html .= "<iframe class=\"wrapper-policy-iframe\" src=\"{$policy_url}#toolbar=0\"></iframe>";
					$html .=' </div> </div>
					   </div>
				   </div>
				  </div>';
				$html .=' </ul>';
			}
			else{
				//$html .="<div class=\"no-agency-policy\">Not uploaded by your agency</div>";
				/*$html .="<script>
					jQuery(function($) {
					// Find the target form
					$('.wrapper-form-agency-policy-end-user').each(function() {
						var wrapper = $(this);

						// Find the closest .elementor-tab-content ancestor
						var tabContent = wrapper.closest('.elementor-tab-content');

						if (tabContent.length) {
							// Get the aria-labelledby ID
							var labelledbyId = tabContent.attr('aria-labelledby');

							if (labelledbyId) {
								// Find and remove the element with that ID
								$('#' + labelledbyId).remove();

								// Optional: You might also remove the tab-content itself if needed
								tabContent.remove();
							}
						}
					});
				});

				</script>";*/
			}


		$user_role =  btn_briefing()->hidebriefing()->user_has_specified_role(true);
		$data = ["agency_policy"=>true];
		btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $data);
		return $html;

	}
	static function get_agency_id($atts, $content, $tag){
		$user_id = get_current_user_id();
		$agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_manager($user_id);
		return $agency_id;
	}

	static function get_agency_gform_entries_manager_user($atts, $content, $tag){
		$args = shortcode_atts( [
			'form_id' => '7',
			'agency_field_id' => '9',
		], $atts );
		$form_id = $args['form_id'];
		$agency_field_id =$args['agency_field_id'];
      	$user_id = get_current_user_id();
		$agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_manager($user_id);
		return btn_briefing()->frontend()->agency_gform_entries($agency_id, $user_id,$form_id,$agency_field_id,true);

	}



	static function get_agency_gform_entries_end_user($atts, $content, $tag){
		$args = shortcode_atts( [
			'form_id' => '7',
			'agency_field_id' => '9',
		], $atts );
		$form_id = $args['form_id'];
		$agency_field_id =$args['agency_field_id'];
      	$user_id = get_current_user_id();
		
		$user_role =  btn_briefing()->hidebriefing()->user_has_specified_role(true);
		$user_role_facilitator =  btn_briefing()->hidebriefing()->user_has_specified_role_facilitator();
		if(!$user_role){
			$agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_manager($user_id);
			
		}
		else{
			if(!$user_role_facilitator){
				$agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_facilitator($user_id);
			}
			else{
				$agency_id = btn_briefing()->frontend()->get_agency_id_officer($user_id);
			}
			
		}
		return btn_briefing()->frontend()->agency_gform_entries($agency_id, $user_id,$form_id,$agency_field_id);
	}
	static function agency_policy_end_user_admin($atts, $content, $tag){
		$ns = "btn-briefing";
		$user_id = get_current_user_id();
		$agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_manager($user_id);
		$link = btn_briefing()->frontend()->get_agency_policy_info_by_agency_id($agency_id);
		$html ="";
			if($link){
				 $timestamp = strtotime($link['last_updated']);
				  $html .="<ul class=\"{$ns}-file-wrapper\" id=\"{$ns}-file-wrapper-admin\">";
					$count = "policy-1";
					$policy_url = $link['link'];
					$filename = basename(parse_url($policy_url, PHP_URL_PATH));
					$filename = str_replace('-', ' ', $filename);
					// Step 2: Remove special characters (only allow letters, numbers, dashes, underscores, and dots)
					$clean_filename = preg_replace('/[^A-Za-z0-9_\.]/', '', $filename);
					$html .="<li id=\"{$ns}-file-wrapper-{$count}\"><span class=\"btn-title-inline\">{$filename}</span> <div class=\"btn-wrapper\"><a data-id=\"modal-{$count}\" data-url=\"{$policy_url}\" class=\"btn-popup\"><i class=\"fa fas fa-file-pdf-o\"></i><span>View</span></a><a href=\"{$policy_url}\" target=\"_blank\" download><i class=\"fa fas fa-download\"></i><span>Download</span></a>
					<a class=\"btn-delete-entry-form\" data-id=\"{$ns}-file-wrapper-{$count}\"><i class=\"fa fas fa-trash\"></i><span>Delete</span></a>
					</div></li>";
					// End loop.
					//
					//
				$html .='<div class="modal micromodal-slide" id="modal-'.$count.'" aria-hidden="true">
						 <div class="modal__overlay" tabindex="-1" data-micromodal-close>
						   <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
							 <header class="modal__header">
							   <button class="modal__close" aria-label="Close modal" data-micromodal-close style="background-image:url('.BTN_BRIEFING_ASSETS_URL .'images/close.svg) !important"></button>
							 </header>
							 <div class="modal__content" id="modal-1-content">
								 <div class="iframe-policy-wrapper">';
								 $html .= "<iframe class=\"wrapper-policy-iframe\" src=\"{$policy_url}#toolbar=0\"></iframe>";
					$html .=' </div> </div>
					   </div>
				   </div>
				  </div>';
				$html .=' </ul>';
			}

		btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $user_id);
		return $html;

	}

	static function agency_policy_form($atts, $content, $tag){
		$user_id = get_current_user_id();
		$agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_manager($user_id);
		$link = btn_briefing()->frontend()->get_agency_policy_info_by_agency_id($agency_id);
		$link = ($link)? $link['link'] : "";
		$html ="";
		$html .="<form class=\"wrapper-form-agency-policy\">";
			 $html .='<label for="link">Policy Link (URL):</label><br>
             <input type="url" name="link" value="'.$link.'" id="link" required>
			 <button type="submit">Save Policy</button>';
		$html .="</form>";
		$user_role =  btn_briefing()->hidebriefing()->user_has_specified_role(true);
		$data = ["agency_policy"=>true];
		btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $data);
		if(!$user_role){
			return $html;
		}

	}
	static function posts($atts, $content, $tag) {
				$args = shortcode_atts( [
					'category_id' => '',
					'posts_per_page' => -1,
					'completed' => 0,
					'favorite' => 0,
					'pagination' => 1,
					'new' => 0,
				], $atts );
				$ns = "btn-briefing";
				$html = '';
				$type = '';
				$category_id = '';
				$completed = $args['completed'];
				$favorite = $args['favorite'];
				$new = $args['new'];
				$post_type =   btn_briefing()->post()->get_post_slug();
				$id = get_the_ID();
				$term_taxonomy = '';
				$pagination = ($args['pagination'] == 1);
				$posts_per_page = $args['posts_per_page'];
				$page_url = get_permalink();
				$template_file = 'posts.php';
				$template = btn_briefing()->template_part_path($template_file);
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args_post = [
					'post_type' => $post_type,
					'posts_per_page'=> $posts_per_page,
					'paged' 		=> $paged,
					'page_url' =>$page_url,
					'post_status' => 'publish',
				];

				if($new == 1){
					$args_post['date_query'] = [
					[
						'after'     => '42 days ago',
						'inclusive' => true,
					]

					];
				}
				$user_id = get_current_user_id();
				if($completed){
					$complete_data = get_user_meta($user_id, 'btn-briefing-completed', true);
					if($complete_data){
						$args_post['post__in'] = $complete_data;
					}
					else{
						$args_post['post__in'] = [0];
					}

				}
				if($favorite){
					$favorite_data = get_user_meta($user_id, 'btn-briefing-favorite', true);

					if($favorite_data){

						$args_post['post__in'] = $favorite_data;
					}
					else{
						$args_post['post__in'] = [0];
					}
				}

				if(isset($_GET['s'])){
					$search = $_GET['s'];
					$args_post['s'] = $search;
				}

				$loop = new WP_Query( $args_post );
				$html .="<div class=\"btn-briefing-container\">";
					include $template;
				$html .="</div>";
			$args_posts  = $args_post;
		    $args_posts['newStatus'] = $new;
			$args_posts['pagination'] = $args['pagination'];
			btn_briefing()->frontend()->set_json('btn_briefing_shortcode_post', $args_posts);
		    btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $args_posts);
			return $html;
	}

	static function second_look($atts, $content, $tag) {
				$args = shortcode_atts( [
					'posts_per_page' => 12,
					'category_id'    => '',
				], $atts );

				$ns             = "btn-briefing";
				$posts_per_page = (int) $args['posts_per_page'];
				$category_id    = $args['category_id'];
				$post_type      = btn_briefing()->post()->get_post_slug();
				$term_taxonomy  = btn_briefing()->post()->get_taxonomy_slug();
				$page_url       = get_permalink();
				$pagination     = false; // fixed daily set, no pagination
				$paged          = 1;
				$template_file  = 'posts.php';
				$template       = btn_briefing()->template_part_path($template_file);

				$cache_key = 'btn_briefing_second_look_' . date('Y-m-d') . '_' . ($category_id ?: 'all');
				$post_ids  = get_transient($cache_key);

				if ($post_ids === false) {
					$pool_args = [
						'post_type'      => $post_type,
						'post_status'    => 'publish',
						'posts_per_page' => 200, // capped random pool, not unbounded
						'orderby'        => 'rand',
						'fields'         => 'ids',
					];
					if ($category_id) {
						$pool_args['tax_query'] = [
							[
								'taxonomy' => $term_taxonomy,
								'field'    => 'term_id',
								'terms'    => $category_id,
							]
						];
					}
					$post_ids = get_posts($pool_args);
					set_transient($cache_key, $post_ids, DAY_IN_SECONDS);
				}

				$args_post = [
					'post_type'      => $post_type,
					'post__in'       => !empty($post_ids) ? $post_ids : [0],
					'orderby'        => 'post__in',
					'posts_per_page' => $posts_per_page,
					'page_url'       => $page_url,
					'post_status'    => 'publish',
				];

				$agency_id    = btn_briefing()->hidebriefing()->get_agency_id_by_user_id();
				$excluded_ids = btn_briefing()->hidebriefing()->get_records_by_agency_and_term($agency_id, 'post');
				if (!empty($excluded_ids)) {
					$args_post['post__not_in'] = $excluded_ids;
				}

				$loop = new WP_Query( $args_post );
				$html = "<div class=\"{$ns}-container-second-look\">";
					include $template;
				$html .= "</div>";

				btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $args_post);
				return $html;
	}

	static function assigned_training_category_selector($atts, $content, $tag) {
				$args = shortcode_atts( [
					'category_id' => '',
					'posts_per_page' => -1,
					'pagination' => 1,
				], $atts );
				$ns = "btn-briefing";
				$html = '';
				$type = '';
				$category_id = '';
				$post_type =   btn_briefing()->post()->get_post_slug();
				$id = get_the_ID();
				$term_taxonomy = btn_briefing()->post()->get_taxonomy_slug();
				$pagination = ($args['pagination'] == 1);
				$posts_per_page = $args['posts_per_page'];
				$page_url = get_permalink();
				$template_file = 'assigned-training.php';
				$template = btn_briefing()->template_part_path($template_file);
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args_post = [
					'post_type' => $post_type,
					'posts_per_page'=> $posts_per_page,
					'paged' 		=> $paged,
					'page_url' =>$page_url,
					'post_status' => 'publish',
				];
				$user_id = get_current_user_id();
				$user_role =  btn_briefing()->hidebriefing()->user_has_specified_role();

				$category_block = btn_briefing()->assigned_training()->get_user_assignments($user_id,'category');
				if(!$user_role){
					$loop = new WP_Query( $args_post );
					$html .="<div class=\"btn-briefing-container-assigned\">";
						include $template;
					$html .="</div>";

				}
				btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $args_post);

			return $html;
	}

	static function get_progress($atts, $content, $tag) {
		$user_id = get_current_user_id();
		$briefing_ids = btn_briefing()->assigned_training()->get_user_assignments($user_id,'block');
		$user_completed = btn_briefing()->assigned_training()->get_user_completion_count($user_id);
		$count_completed = ($user_completed) ? $user_completed : 0;
		if(!empty($briefing_ids)){
			$total = count($briefing_ids);
			$completed_training =(int)$count_completed;
			$percentage = ($count_completed > 0)? ($count_completed/$total) * 100:0;
			$percentage = round($percentage,0);

			$html .="<div class=\"btn-training-complete-wrapper\">";
			$html .="<div class=\"btn-training-complete-item btn-training-complete-item-left\">";
				$html .="<div class=\"btn-training-progress-container\">
	        				<div class=\"btn-training-progress-bar\" style=\"width: {$percentage}%;\" id=\"btn-training-progress-bar\"></div>
							<div class=\"btn-percentage-text\">{$percentage}%</div>
	    				</div>";
				$html .="</div>";
				$html .="<div class=\"btn-training-complete-item\">";
					$html .="{$completed_training} OF {$total} TRAINING BLOCKS COMPLETED";
				$html .="</div>";
			$html .="</div>";
		}
		return $html;

	}

	static function assigned_training_assigned_end_user($atts, $content, $tag) {
				$args = shortcode_atts( [
					'category_id' => '',
					'posts_per_page' => 12,
					'pagination' => 1,
					'completed' => 0,
				], $atts );
				$ns = "btn-briefing";
				$html = '';
				$type = '';
				$category_id = '';
				$post_type =   btn_briefing()->post()->get_post_slug();
				$id = get_the_ID();
				$term_taxonomy = btn_briefing()->post()->get_taxonomy_slug();
				$pagination = ($args['pagination'] == 1);
				$completed = $args['completed'];
				$posts_per_page = $args['posts_per_page'];
				$page_url = get_permalink();
				$template_file = 'assigned-training-display.php';
				$template = btn_briefing()->template_part_path($template_file);
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$post_type =   btn_briefing()->post()->get_post_slug();
				$args_post = [
					'post_type' => $post_type,
					'posts_per_page'=> $posts_per_page,
					'paged' 		=> $paged,
					'page_url' =>$page_url,
					'post_status' => 'publish',
				];

				$new = 0;
				$args_posts['newStatus'] = $new;
				$html .="<div class=\"btn-briefing-container\">";
					include $template;
				$html .="</div>";
			$args_posts['assignment'] = 1;
			btn_briefing()->frontend()->set_json('btn_briefing_shortcode_post_assignment', $args_posts);
			btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $args_post);
			return $html;
	}

	static function assigned_training_carousel($atts, $content, $tag) {
				$args = shortcode_atts( [
					'posts_per_page' => 30,
				], $atts );
				$ns             = "btn-briefing";
				$posts_per_page = (int) $args['posts_per_page'];
				$post_type      = btn_briefing()->post()->get_post_slug();
				$template_file  = 'assigned-training-carousel.php';
				$template       = btn_briefing()->template_part_path($template_file);

				$user_id       = get_current_user_id();
				$assigned_ids  = btn_briefing()->assigned_training()->get_user_assignments($user_id, 'block');
				$complete_data = get_user_meta($user_id, 'btn-briefing-completed', true);
				$pending_ids   = is_array($complete_data) ? array_values(array_diff($assigned_ids, $complete_data)) : $assigned_ids;

				$args_post = [
					'post_type'      => $post_type,
					'post__in'       => !empty($pending_ids) ? $pending_ids : [0],
					'orderby'        => 'post__in',
					'posts_per_page' => $posts_per_page,
					'post_status'    => 'publish',
				];

				$agency_id    = btn_briefing()->hidebriefing()->get_agency_id_by_user_id();
				$excluded_ids = btn_briefing()->hidebriefing()->get_records_by_agency_and_term($agency_id, 'post');
				if (!empty($excluded_ids)) {
					$args_post['post__not_in'] = $excluded_ids;
				}

				$loop = new WP_Query( $args_post );
				$html = "<div class=\"{$ns}-container-carousel\">";
					include $template;
				$html .= "</div>";

				// Required so frontend.js:31 initializes on pages where this is the only btn_briefing shortcode.
				btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $args_post);
				return $html;
	}

		static function assigned_training_assigned_admin($atts, $content, $tag) {
				$args = shortcode_atts( [
					'category_id' => '',
					'posts_per_page' => -1,
					'pagination' => 1,
					'completed' => 0,
				], $atts );
				$ns = "btn-briefing";
				$html = '';
				$type = '';
				$category_id = '';
				$post_type =   btn_briefing()->post()->get_post_slug();
				$id = get_the_ID();
				$term_taxonomy = btn_briefing()->post()->get_taxonomy_slug();
				$pagination = ($args['pagination'] == 1);
				$completed = $args['completed'];
				$posts_per_page = $args['posts_per_page'];
				$page_url = get_permalink();
				$template_file = 'assigned-training-admin.php';
				$template = btn_briefing()->template_part_path($template_file);
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$post_type =   btn_briefing()->post()->get_post_slug();
				$user_id = get_current_user_id();
				$user_role =  btn_briefing()->hidebriefing()->user_has_specified_role();

				if(!$user_role){
					$post_ids = btn_briefing()->assigned_training()->get_admin_assignments($user_id,'block');
					$html .="<div class=\"{$ns}-hide-post-title\">";
					$html .="Assigned Training Blocks List";
					$html .="</div>";
					$html .='<div class="wrapper-search-filter" style="margin-top:30px;">';
						$html .="<select name=\"{$ns}-assigned-blocks\" class=\"{$ns}-assigned-search {$ns}-assigned-search-block\">";
							$html .="<option value=\"\" disabled selected>Search Training Blocks...</option>";
							if(!empty($post_ids)){
							  foreach ( $post_ids as $post ) {
									  $id = $post['id'];
									  $post_id = $post['training_id'];
									  $title = get_the_title($post_id);
									  $html .="<option data-type=\"block\" value=\"{$id}\">{$title}</option>";
								}
							}
							$html .="</select>";
						$html .="<select class=\"{$ns}-wrapper-admin-status\">";
							$html .="<option value=\"all\">All Assigned Training</option>";
							$html .="<option value=\"active\">Active Training</option>";
							$html .="<option value=\"inactive\">Inactive Training</option>";
						$html .="</select>";
						$html .="<div class=\"{$ns}-wrapper-admin-header-item btn-submit-item\">";
							$html .="<button class=\"btn-submit-assigned-admin\">Filter</button>";
						$html .="</div>";
					$html .="</div>";
					$html .="<div class=\"btn-briefing-container\">";
						include $template;
					$html .="</div>";
				}
		    $args_post['admin'] = 1;
			btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $args_post);
			return $html;
	}

	static function single_category_post($atts, $content, $tag) {
				$args = shortcode_atts( [
					'category_id' => '',
					'posts_per_page' => -1,
					'pagination' => 1,
				], $atts );
				$ns = "btn-briefing";
				$html = '';
				$type = '';
				$category_id = '';
				$post_type =   btn_briefing()->post()->get_post_slug();
				$id = get_the_ID();
				$term_taxonomy = '';
				$pagination = ($args['pagination'] == 1);
				$posts_per_page = $args['posts_per_page'];
				$page_url = get_permalink();
				$template_file = 'single-category.php';
				$template = btn_briefing()->template_part_path($template_file);
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args_post = [
					'post_type' => $post_type,
					'posts_per_page'=> $posts_per_page,
					'paged' 		=> $paged,
					'page_url' =>$page_url,
					'post_status' => 'publish',
				];

				$current_term = get_queried_object();
				if ( $current_term instanceof WP_Term ) {
					$term_id = $current_term->term_id;
					$taxonomy = $current_term->taxonomy;
					$args_post['tax_query'] =  [
    					 [
    						 'taxonomy' => $taxonomy,
    						 'field' => 'term_id',
    						 'terms'  => $term_id,
    					 ]
    				 ];
				}

				$agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id();
				$excluded_ids = btn_briefing()->hidebriefing()->get_records_by_agency_and_term($agency_id,'post');
				$user_role =  btn_briefing()->hidebriefing()->user_has_specified_role();

				if($user_role){
				   if (!empty($excluded_ids)) {
					   $args_post['post__not_in'] = $excluded_ids; // Add post IDs you want to hide
					}
				}

				$user_id = get_current_user_id();
				$loop = new WP_Query( $args_post );
				$html .="<div class=\"btn-briefing-container-categories\">";
					include $template;
				$html .="</div>";
			btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $args_post);
			return $html;
	}

	static function training_progress($atts, $content, $tag) {
				$args = shortcode_atts( [
					'category_id' => '',
					'show_count' => 0,
				], $atts );
				$ns = "btn-briefing";
				$html = '';
				$type = '';
				$show_count = $args['show_count'];

				$post_type =   btn_briefing()->post()->get_post_slug();
				$user_id = get_current_user_id();
				$complete_data = get_user_meta($user_id, 'btn-briefing-completed', true);
				$current_term = get_queried_object();
				if ( $current_term instanceof WP_Term ) {
					$agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id();
					$excluded_ids = btn_briefing()->hidebriefing()->get_records_by_agency_and_term($agency_id,'post');
					$user_role =  btn_briefing()->hidebriefing()->user_has_specified_role();
					$term_id = $current_term->term_id;
    				$taxonomy = $current_term->taxonomy;
					$args = array(
						   'tax_query' => array(
							   array(
								   'taxonomy' => $taxonomy,
								   'terms' => $term_id,
								   'field' => 'term_id',
							   ),
						   ),
						   'posts_per_page' => -1, // Get all posts
						   'fields' => 'ids' ,
						   'post_status' => 'publish',
						   'post_type' => $post_type,
					   );
				   if($user_role){
					  if (!empty($excluded_ids)) {
						  $args['post__not_in'] = $excluded_ids; // Add post IDs you want to hide
					   }
				   }
					$query = new WP_Query($args);


				    $post_count = $query->found_posts;
			   }
			$percentage = 0;
			if(!empty($query->posts)){

				$count = 0;
				if(!empty($complete_data)){
					$completed = array_intersect($query->posts,$complete_data);
					$count = count($completed);
				}
				$total = count($query->posts);
				$completed_training =(int)$count;
				$percentage = ($count > 0)? ($count/$total) * 100:0;
				$percentage = round($percentage,0);

				if($show_count > 0){
					return $total;
				}
			}
			$html .="<div class=\"btn-training-complete-wrapper\">";
			$html .="<div class=\"btn-training-complete-item btn-training-complete-item-left\">";
				$html .="<div class=\"btn-training-progress-container\">
	        				<div class=\"btn-training-progress-bar\" style=\"width: {$percentage}%;\" id=\"btn-training-progress-bar\"></div>
							<div class=\"btn-percentage-text\">{$percentage}%</div>
	    				</div>";
				$html .="</div>";
				$html .="<div class=\"btn-training-complete-item\">";
					$html .="{$count} OF {$total} TRAINING BLOCKS COMPLETED";
				$html .="</div>";
			$html .="</div>";
			btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $post_count);
			return $html;
	}


		static function posts_categories($atts, $content, $tag) {
				$args = shortcode_atts( [
					'category_id' => '',
				], $atts );
				$ns = "btn-briefing";
				$html = '';
				$type = '';
				$category_id = '';
				$term_taxonomy = btn_briefing()->post()->get_taxonomy_slug();
				$template_heading = btn_briefing()->template_part_path('post-category.php');
				$html .="<div class=\"btn-briefing-categories\">";
					include $template_heading;
				$html .="</div>";
			    btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $term_taxonomy);

			return $html;
		}
		static function hide_briefing_button($atts, $content, $tag) {
			$args = shortcode_atts( [
				'tag_id' => '794',
			], $atts );

			$user_role = btn_briefing()->hidebriefing()->user_has_specified_role();
			if ( ! $user_role ) {
				$ns        = "btn-briefing";
				$agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id();
				$post_id   = get_the_ID();
				$title     = get_the_title($post_id);

				$action_check = btn_briefing()->hidebriefing()->record_exists($agency_id, 'post', $post_id);

				$data_action      = ($action_check) ? "unhide" : "hide";
				$data_action_text = ($action_check) ? "Unhide Video" : "Hide Video";

				$html  = "";
				$html .= "<div class=\"{$ns}-hide-item-list-page\">";
				$html .= "<button 
					class=\"{$ns}-hide-action-page btn-{$data_action}\" 
					data-action=\"{$data_action}\" 
					data-type=\"post\" 
					data-value=\"{$post_id}\" 
					data-agency-id=\"{$agency_id}\"
					data-video-title=\"" . esc_attr($title) . "\">
					{$data_action_text}
				</button>";
				$html .= "</div>";

				btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $post_id);

				// Output modal container once per page (you can guard this with a static flag if needed)
				$html .= self::hide_briefing_modal_html();

				return $html;
			}
		}

		static function hide_briefing_modal_html() {
			$current_person = btn_briefing()->hidebriefing()->get_person_display();
			$agency_id      = btn_briefing()->hidebriefing()->get_agency_id_by_user_id();
			$authorizers    = btn_briefing()->hidebriefing()->get_agency_authorizers($agency_id);
			ob_start();
			?>
			<div id="btn-briefing-hide-modal" class="btn-briefing-modal" style="display:none;">
				<div class="btn-briefing-modal-content">
					<h3>Hide Video - Legal Warning</h3>
					<p>
						Warning: This feature is intended only for agencies whose internal policies are more restrictive than current law, who reside outside of the jurisdiction of a court ruling, or as a temporary measure while the agency evaluates how a new legal development may affect existing policy. Please understand that published court decisions become effective law immediately upon issuance by the court, regardless of whether your officers have been trained on that decision. Permanently hiding or restricting access to legal training may create significant civil liability, administrative liability, and potential constitutional compliance issues for you, your officers, and your agency. By proceeding, you acknowledge that you have consulted with your agency's administration and legal counsel, understand the potential risks and consequences of limiting access to this training, and still choose to hide this video."
					</p>

					<form id="btn-briefing-hide-form">
						<div class="field">
							<label>
								<input type="checkbox" id="bb_acknowledge" required>
								I acknowledge and wish to proceed with hiding this video.
							</label>
						</div>

						<div class="field">
							<label for="bb_reason">Reason for hiding this video</label>
							<textarea id="bb_reason" name="reason" required></textarea>
						</div>

						<div class="field">
							<label>Person hiding this video: Rank / Name</label>
							<div class="btn-briefing-readonly-value"><?php echo esc_html($current_person ?: 'Unknown'); ?></div>
							<input type="hidden" id="bb_person_hiding" name="person_hiding" value="<?php echo esc_attr($current_person); ?>">
						</div>
						<div class="field">
							<label for="bb_person_authorizing">Person authorizing hiding this video: Rank / Name</label>
							<select id="bb_person_authorizing" name="authorizer_user_id" class="btn-briefing-assigned-search" required>
								<option value=""></option>
								<?php foreach ($authorizers as $authorizer) : ?>
									<option value="<?php echo esc_attr($authorizer['user_id']); ?>"><?php echo esc_html($authorizer['label']); ?></option>
								<?php endforeach; ?>
							</select>
							<?php if (empty($authorizers)) : ?>
								<p class="btn-briefing-field-note">No Managers or Facilitators were found for your agency. Contact your administrator before hiding this video.</p>
							<?php endif; ?>
						</div>

						<input type="hidden" id="bb_action" name="dataAction" value="">
						<input type="hidden" id="bb_type" name="type" value="">
						<input type="hidden" id="bb_value" name="value" value="">
						<input type="hidden" id="bb_agency_id" name="agencyID" value="">
						<input type="hidden" id="bb_video_title" name="video_title" value="">

						<div class="actions">
							<button type="button" id="bb_cancel">Cancel</button>
							<button type="submit" id="bb_confirm">Confirm Hide</button>
						</div>
					</form>
				</div>
			</div>
			<?php
			return ob_get_clean();
		}

		
		static function hide_categories($atts, $content, $tag) {
				$args = shortcode_atts( [
					'category_id' => '',
				], $atts );
				$ns = "btn-briefing";
				$html = '';
				$type = '';
				$category_id = '';
				$term_taxonomy = btn_briefing()->post()->get_taxonomy_slug();
				$template_heading = btn_briefing()->template_part_path('hide-category.php');
				$agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id();
				$html .="<div class=\"btn-briefing-categories\">";
					include $template_heading;
				$html .="</div>";
				$html .= self::hide_briefing_modal_html();
				
				btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $term_taxonomy);
				$user_role =  btn_briefing()->hidebriefing()->user_has_specified_role();
				if(!$user_role){
					return $html;
				}
				else{
					return "You do not have access to this page.";
				}

		}

		static function video($atts, $content, $tag) {
			$html = "";
			$ns = "btn-briefing";
			$id = get_the_ID();
			$user_id = get_current_user_id();
			$image_url = get_the_post_thumbnail_url( $id, 'full' );
			if(empty($image_url)){
				$image_url = btn_briefing()->frontend()->default_image();
			}
			$video_url = get_field("video_url");
			$complete = get_user_meta($user_id, 'btn-briefing-completed', true);
			$completed_video = '';
			// if(!empty($complete)){
			// 	$completed_video = in_array($id, $complete)? "completed-video" : "";
			// }
			if($video_url){
				if(empty($image_url)){
					$image_url = "/wp-content/uploads/2024/06/The-Crew.jpg";
				}
				$html .='<div class="video-container">';
				$html .="<video id=\"my-video\" class=\"video-js vjs-default-skin {$completed_video}\" controls preload=\"auto\"
				  data-setup='{}'   poster=\"{$image_url}\">
				  <source src=\"{$video_url}\" type=\"application/x-mpegURL\">

				</video> </div>";
				/*$html .="<div class=\"{$ns}-wrapper-video\">";
					$video_url = str_replace("play","embed",$video_url);
					$html .="<iframe class=\"{$ns}-iframe\" src=\"{$video_url}?responsive=true&autoplay=0\" loading=\"lazy\" style=\"border:0;position:absolute;top:0;height:100%;width:100%;\" allow=\"accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;\" allowfullscreen=\"true\"></iframe>";
				$html .="</div>";*/
			}
			return $html;
		}


		static function files($atts, $content, $tag) {
			$html = "";
			$ns = "btn-briefing";
			// Check rows exists.
			if( have_rows('pdf_downloads') ):
			    // Loop through rows.
				$html .="<div class=\"{$ns}-file-wrapper-outside\">";
				//$html .="<h4 class=\"title-resources\">Additional Resources</h4>";
				$html .="<ul class=\"{$ns}-file-wrapper\">";
				$count = 0;
			    while( have_rows('pdf_downloads') ) : the_row();
			        // Load sub field value.
			        $title = get_sub_field('title');
					$url = get_sub_field('url');
					$html .="<div class=\"btn-wrapper-pdf-viewer\" id=\"btn-wrapper-pdf-viewer-{$count}\">";


					$html .="</div>";
					$html .="<li><span class=\"btn-title-inline\">{$title}</span> <div class=\"btn-wrapper\"><a data-id=\"modal-{$count}\" data-url=\"{$url}\" class=\"btn-popup\"><i class=\"fa fas fa-file-pdf-o\"></i><span>View</span></a><a href=\"{$url}\" target=\"_blank\" download><i class=\"fa fas fa-download\"></i><span>Download</span></a></div></li>";
			    // End loop.
			    //
			    //
			    $html .='<div class="modal micromodal-slide" id="modal-'.$count.'" aria-hidden="true">
	             <div class="modal__overlay" tabindex="-1" data-micromodal-close>
	               <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
	                 <header class="modal__header">
	                   <button class="modal__close" aria-label="Close modal" data-micromodal-close style="background-image:url('.BTN_BRIEFING_ASSETS_URL .'images/close.svg) !important"></button>
	                 </header>
	                 <div class="modal__content" id="modal-1-content">';
					$html .= do_shortcode('[pdf-embedder url="'.$url.'"]');

	 $html .=' </div>
	           </div>
	          </div>
	       </div>';
			    $count++;
			    endwhile;
				$html .="</ul>";
				$html .="</div>";

			// No value.
			else :
			    // Do something...
			endif;
			return $html;
		}

		static function author($atts, $content, $tag) {
			$html = "";
			$ns = "btn-briefing";
			$author_briefing_id = get_field("author");
			if($author_briefing_id){
				$title = get_the_title($author_briefing_id);
				$post = get_post($author_briefing_id);
			    if ($post) {
			        // Apply filters to the post content
			        $content = apply_filters('the_content', $post->post_content);
			    }
				$image_url = get_the_post_thumbnail_url( $author_briefing_id, 'full' );
				if(empty($image_url)){
					$image_url = btn_briefing()->frontend()->default_image();
				}
				$html .="<div class=\"{$ns}-wrapper-author\">";
				$html .="<h4 class='title-wrapper'>Briefing Author</h4>";
				$html .="<div class=\"{$ns}-wrapper-author-item\">";
					$html .="<div class=\"wrapper-author-img\">";
						$html .="<img src=\"{$image_url}\">";
					$html .="</div>";
					$html .="<div class=\"wrapper-author-content\">";
						$html .="<h5>{$title}</h5>";
						$html .="<div class=\"wrapper-content-text\">";
							$html .= $content;
						$html .="</div>";
					$html .="</div>";
				$html .="</div>";
				$html .="</div>";
			}

			return $html;
		}



		static function playlist($atts, $content, $tag) {
					$args = shortcode_atts( [
						'category_id' => '',
						'posts_per_page' => 10,
						'recent' => 0,
						'related' => 0,
						'pagination' => 1,
					], $atts );
					$ns = "btn-briefing";
					$html = '';
					$type = '';
					$category_id = '';
					$recent = $args['recent'];
					$post_type =   btn_briefing()->post()->get_post_slug();
					$term =  btn_briefing()->post()->get_taxonomy_slug();
					$id = get_the_ID();
					$term_taxonomy = '';
					$pagination = ($args['pagination'] == 1);
					$posts_per_page = $args['posts_per_page'];
					$page_url = get_permalink();
					$template_file = 'playlist.php';
					$template = btn_briefing()->template_part_path($template_file);
					$term_taxonomy = btn_briefing()->post()->get_taxonomy_slug();
					$args_post = [
						'post_type' => $post_type,
						'posts_per_page'=> $posts_per_page,
						'page_url' =>$page_url,
						'post_status' => 'publish',
						'orderby'        => 'date',
						'order'          => 'DESC'
					];
					$terms = get_the_terms($id, $term_taxonomy);
					if ($terms && !is_wp_error($terms)) {
			            // Assuming you want the first term's ID
			            $category_id = $terms[0]->term_id;
			        }
					if($category_id){
						$args_post['tax_query']=  [
							 [
								 'taxonomy' => $term_taxonomy,
								 'field' => 'term_id',
								 'terms'  => $category_id,
							 ]
						 ];
					}

					$loop = new WP_Query( $args_post );
					$html .="<div class=\"btn-briefing-container-playlist\">";
						include $template;
					$html .="</div>";
				btn_briefing()->frontend()->set_json('btn_briefing_shortcode', $args_post);
				return $html;
			}


			static function favorite($atts, $content, $tag){

				$user_id = get_current_user_id();
				$ns = "btn-briefing";
				$favorite = get_user_meta($user_id, 'btn-briefing-favorite', true);
				$complete = get_user_meta($user_id, 'btn-briefing-completed', true);
				$id = get_the_ID();

				//Favorites
				if(!empty($favorite)){
					$check_remove_text_favorite = in_array($id, $favorite)? "Remove from Favorites" : "Add to Favorites";
					$check_remove_class_favorite = in_array($id, $favorite)? "{$ns}-remove-to-favorite" : "{$ns}-add-to-favorite";
				}else{
					$check_remove_text_favorite = "Add to Favorites";
					$check_remove_class_favorite = "{$ns}-add-to-favorite";
				}


				//Complete
				if(!empty($complete)){
					$check_remove_text_complete = in_array($id, $complete)? "You have completed this training block" : "Mark as Complete";
					$check_remove_class_complete = in_array($id, $complete)? "{$ns}-completed" : "{$ns}-add-to-complete";
				}else{
					$check_remove_text_complete = "Mark as Complete";
					$check_remove_class_complete = "{$ns}-add-to-complete";
				}

				$html ="";
				$html .="<div class=\"{$ns}-button-bottom {$ns}-button-bottom-single\">";
				//if ( current_user_can( 'btn_briefing_room_sergeant' ) || current_user_can( 'administrator' ) ) {
					$html .="<a data-id=\"{$id}\" class=\"{$check_remove_class_complete}\">{$check_remove_text_complete}</a>";
				//}

				$html .="<a data-id=\"{$id}\" class=\"{$check_remove_class_favorite}\">{$check_remove_text_favorite}</a>";
				$html .="</div>";
				return $html;
			}

			static function assigned_completed_training_report($atts, $content, $tag){
				$html = "";
				$template_file = "assigned-training-report.php";
				$template = btn_briefing()->template_part_path($template_file);
				$user_id   = get_current_user_id();
				$agency_id = btn_briefing()->frontend()->get_agency_id_by_user_id_manager($user_id);
				$status = "all";
				$start_date = "";
				$end_date ="";
				$ns = "btn-briefing";
				$html .="<div class=\"{$ns}-wrapper-reporting-assign-training\">";
					$html .="<div class=\"{$ns}-wrapper-reporting-header\">";
						$html .="<div class=\"{$ns}-wrapper-reporting-header-item\">";

							$html .="<select class=\"{$ns}-wrapper-reporting-status\">";
								$html .="<option value=\"\" selected disabled>Select Assigned Training Status</option>";
								$html .="<option value=\"completed\">All Trainings Completed</option>";
								$html .="<option value=\"some\">Some Trainings Completed</option>";
								$html .="<option value=\"none\">No Trainings Completed</option>";
								$html .="<option value=\"timeframe\">Completed Within Timeframe</option>";
								$html .="<option value=\"active\">Active Training</option>";
								$html .="<option value=\"inactive\">Inactive Training</option>";
							$html .="</select>";
						$html .="</div>";
						$html .="<div class=\"{$ns}-wrapper-reporting-header-item time-frame\">";

							$html .="<input type=\"date\" class=\"reporting-start-date\" placeholder=\"Start Date\">";
						$html .="</div>";
						$html .="<div class=\"{$ns}-wrapper-reporting-header-item time-frame\">";

							$html .="<input type=\"date\" class=\"reporting-end-date\" placeholder=\"End Date\">";
						$html .="</div>";
						$html .="<div class=\"{$ns}-wrapper-reporting-header-item btn-submit-item\">";
							$html .="<button class=\"btn-submit-assigned-report\">Filter</button>";
						$html .="</div>";
					$html .="</div>"; // End of {$ns}-wrapper-reporting-header div

					$html .="<div class=\"{$ns}-wrapper-reporting-content\">";
						include $template;
					$html .="</div>"; // End of {$ns}-wrapper-reporting-content div
				$html .="</div>"; // End of {$ns}-wrapper-reporting-assign-training div
				return $html;
			}
function __construct(){}



}

