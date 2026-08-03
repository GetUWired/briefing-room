<?php
if (! defined('ABSPATH')) {
	header('HTTP/1.0 403 Forbidden');
	die();
}

/**
 * Frontend Class
 *
 * @since      1.0.0
 * @package    btn-briefing
 * @subpackage btn-briefing/classes
 * @author    Augustus Villanueva <augustus@businesstechninjas.com>
 */
final class btn_briefing_frontend {

    // Wordpress Hooks ( Actions & Filters )
    function add_wp_hooks() {

		    add_action('wp_enqueue_scripts',[$this,'enqueue']);
        	add_action('wp_footer', [$this,'frontend_print_scripts']);

			add_filter('single_template', ['btn_briefing_post', 'single_template'], 9999, 3);

			add_action( 'terms_clauses', [$this,'exclude_categories'],10,3);
			add_action( 'pre_get_posts', [$this,'hide_post_ids_from_display'],10,1);
    		// Shortcodes
    		$this->register_shortcodes();
    }


	function hide_post_ids_from_display( $query ) {
		$agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id();
		$user_role =  btn_briefing()->hidebriefing()->user_has_specified_role();
		if($user_role){
			if ( !is_admin() && $query->is_main_query() ) {
		        // Modify the query to exclude post IDs
				$excluded_ids = btn_briefing()->hidebriefing()->get_records_by_agency_and_term($agency_id,'post');
			   // Add exclusion clause to the WHERE part of the query
			    if (!empty($excluded_ids)) {
				   $query->set('post__not_in', $excluded_ids); // Add post IDs you want to hide
			    }

		    }
		}

	}
	function get_agency_id_officer($user_id){
		global $wpdb;
		$officers_table = $wpdb->prefix . 'btn_officers';
		$stations_table = $wpdb->prefix . 'btn_stations';
		// Get user's station and agency
		$officer = $wpdb->get_row(
			$wpdb->prepare("SELECT stationId, agencyId FROM {$officers_table} WHERE userId = %d", $user_id),
			ARRAY_A
		);

		if (!$officer) return [];
		$station_id = $officer['stationId'];

		// Get agency ID based on station ID
		$agency_id = $wpdb->get_var(
			$wpdb->prepare("SELECT agencyId FROM {$stations_table} WHERE id = %d", $station_id)
		);
		return $agency_id;
	}
	function get_agency_policy_info_by_agency_id($agency_id) {
		global $wpdb;
		$table = $wpdb->prefix . 'agency_policy';

		if (empty($agency_id) || !is_numeric($agency_id)) {
			return null; // Invalid input
		}

		// Query to get link and last_updated
		$result = $wpdb->get_row(
			$wpdb->prepare(
				"SELECT link, last_updated FROM {$table} WHERE agency_id = %d LIMIT 1",
				$agency_id
			),
			ARRAY_A // Return as associative array
		);

		if ($result) {
			// Escape the link for safety
			$result['link'] = esc_url($result['link']);
		}

		return $result ?: null; // Return array or null if not found
	}

	function agency_gform_entries($agency_id,$user_id,$form_id,$agency_field_id,$manager=false){
		$search_criteria = array(
			'status'        => 'active',
			'field_filters' => array(
				'mode' => 'any',
				array(
					'key'   => $agency_field_id,
					'value' => $agency_id
				),
			)
		);
		$sorting = array(
			'key' => 'id', // Replace with the field key you want to sort by
			'direction' => 'ASC'
		);
		// Getting the entries
		$result = GFAPI::get_entries( $form_id, $search_criteria,$sorting );
		$html = "";
		$ns = "btn-briefing";
		if($result){
			$html .='<div class="btn-agency-policy-wrapper-container">';
		if($manager){
			$manager_class = "{$ns}-file-wrapper-admin";
		}
			else{
				$manager_class = "";
			}
		
		
		$html .="<ul class=\"{$ns}-file-wrapper\" id=\"{$manager_class}\">";
		$count = 0;
		foreach($result as $entry){
			$policy_name = $entry['7'];
			$policy_url = $entry['6'];
			$entry_id = $entry['id'];
			$count++;
			$html .="<li><span class=\"btn-title-inline\">{$policy_name}</span> <div class=\"btn-wrapper\"><a data-id=\"modal-gform-entry-{$count}\" data-url=\"{$policy_url}#toolbar=0\" class=\"btn-popup\"><i class=\"fa fas fa-file-pdf-o\"></i><span>View</span></a><a href=\"{$policy_url}\" target=\"_blank\" download><i class=\"fa fas fa-download\"></i><span>Download</span></a>";
			if($manager){
				$html .="<a class=\"btn-delete-entry-gform\" data-id=\"{$entry_id}\"><i class=\"fa fas fa-trash\"></i><span>Delete</span></a>";
			}	
			$html .="</div></li>";		
			// End loop.
			//
			//
			$html .='<div class="modal micromodal-slide" id="modal-gform-entry-'.$count.'" aria-hidden="true">
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

		}
		$html .=' </ul>
	           </div>';
		}
		else{
			$link = btn_briefing()->frontend()->get_agency_policy_info_by_agency_id($agency_id);
			if(empty($link)){
				$html .="<div class=\"no-agency-policy\">Not uploaded by your agency</div>";
			}
			
			
		}
		

		return $html;
	}

	function get_agency_id_by_user_id_manager($user_id) {
		global $wpdb;

		// Prepare table name
		$table = $wpdb->prefix . 'btn_managers';  // Adjust this if your table is different

		// Query the organization ID (agency_id) based on user ID
		$organization_id = $wpdb->get_var(
			$wpdb->prepare(
				"SELECT organizationId FROM {$table} WHERE userId = %d LIMIT 1",
				$user_id
			)
		);

		// Return the result
		return $organization_id ? intval($organization_id) : null;
	}
	
	function get_agency_id_by_user_id_facilitator($user_id) {
		global $wpdb;

		// Prepare table name
		$table = $wpdb->prefix . 'btn_sergeants';  // Adjust this if your table is different

		// Query the organization ID (agency_id) based on user ID
		$organization_id = $wpdb->get_var(
			$wpdb->prepare(
				"SELECT organizationId FROM {$table} WHERE userId = %d LIMIT 1",
				$user_id
			)
		);

		// Return the result
		return $organization_id ? intval($organization_id) : null;
	}
	
	function exclude_categories( $clauses, $taxonomy, $args ) {
		$agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id();
		$user_role =  btn_briefing()->hidebriefing()->user_has_specified_role();
		if($user_role){
			global $wpdb;
		    // IDs to exclude
			$excluded_ids = btn_briefing()->hidebriefing()->get_records_by_agency_and_term($agency_id,'term');
		   // Add exclusion clause to the WHERE part of the query
		    if (!empty($excluded_ids)) {
			   $ids_string = implode(',', array_map('intval', $excluded_ids));
			   $clauses['where'] .= " AND t.term_id NOT IN ({$ids_string})";
		    }
		}
		return $clauses;
	}

	function default_image() {
		return "/wp-content/uploads/2025/03/default.png";;
	}

	// Register Shortcodes
	function register_shortcodes(){

		$prefix = "btn_briefing_";
		$this->shortcode_map = [
			"{$prefix}posts"	=> "{$prefix}shortcodes",
			"{$prefix}video"	=> "{$prefix}shortcodes",
			"{$prefix}playlist"	=> "{$prefix}shortcodes",
			"{$prefix}category_count"	=> "{$prefix}shortcodes",
			"{$prefix}files"	=> "{$prefix}shortcodes",
			"{$prefix}author"	=> "{$prefix}shortcodes",
			"{$prefix}posts_categories"	=> "{$prefix}shortcodes",
			"{$prefix}favorite"	=> "{$prefix}shortcodes",
			"{$prefix}training_progress"	=> "{$prefix}shortcodes",
			"{$prefix}single_category_post"	=> "{$prefix}shortcodes",
			"{$prefix}hide_categories"	=> "{$prefix}shortcodes",
			"{$prefix}hide_briefing_button"	=> "{$prefix}shortcodes",
			"{$prefix}assigned_training_category_selector"	=> "{$prefix}shortcodes",
			"{$prefix}assigned_training_assigned_end_user"	=> "{$prefix}shortcodes",
			"{$prefix}get_progress"	=> "{$prefix}shortcodes",
			"{$prefix}assigned_training_assigned_admin"	=> "{$prefix}shortcodes",
			"{$prefix}agency_policy_form"	=> "{$prefix}shortcodes",
			"{$prefix}agency_policy_end_user"	=> "{$prefix}shortcodes",
			"{$prefix}get_agency_id"	=> "{$prefix}shortcodes",
			"{$prefix}get_agency_gform_entries_end_user"	=> "{$prefix}shortcodes",
			"{$prefix}agency_policy_end_user_admin"	=> "{$prefix}shortcodes",
			"{$prefix}get_agency_gform_entries_manager_user"	=> "{$prefix}shortcodes",
			"{$prefix}activity_feed"	=> "{$prefix}shortcodes",
			"{$prefix}assigned_completed_training_report"	=> "{$prefix}shortcodes",
			"{$prefix}audio"	=> "{$prefix}shortcodes",
			"{$prefix}have_a_question"	=> "{$prefix}shortcodes",
			








		];
		foreach ($this->shortcode_map as $tag => $class) {
			add_shortcode($tag, [$this, "shortcode_mapping"]);
		}
	}

	// Shortcode Mapping Function
	// Only includes suporting classes as needed
	function shortcode_mapping( $atts, $content, $tag ){
		$html = '';
		if( isset($this->shortcode_map[$tag]) ){
			$class = $this->shortcode_map[$tag];
			if( class_exists($class) ){
				$prefix = "btn_briefing_";
				$func = str_replace($prefix, '', $tag);
				if( method_exists($class, $func) ){
					$html = call_user_func([$class, $func], $atts, $content, $tag);
				}
				else {
					error_log("Function {$class} does not exist");
				}
			}
			else {
				error_log("Class {$class} does not exist");
			}
		}
		return $html;
	}

	// Enqueue Scripts
 function enqueue(){
		$url = BTN_BRIEFING_ASSETS_URL;
		$v = BTN_BRIEFING_VERSION;

		wp_register_style('btn-briefing-frontend-css', "{$url}css/frontend.css", [], $v, 'all');

		if (!wp_style_is( 'elementor-icons-shared-0-css', 'enqueued' )) {
		    wp_register_style( 'btn-briefing-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", false, $v );
		    wp_enqueue_style( 'btn-briefing-fontawesome' );
		}

	 	wp_register_style( 'btn-briefing-video-css', "https://vjs.zencdn.net/8.12.0/video-js.css", false, $v );

	 	 wp_enqueue_style('btn-briefing-frontend-css');
		 wp_register_script('btn-briefing-frontend-js', "{$url}js/frontend.js", ['jquery', 'jquery-ui-tabs'], $v, 'all');
	 	 wp_register_script('btn-briefing-frontend-video-js', "https://vjs.zencdn.net/8.12.0/video.min.js", [], $v, 'all');

		 wp_register_style('btn-briefing-select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', [], '4.1.0');
 		 wp_register_script('btn-briefing-select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', ['jquery'], '4.1.0', true);
	 	
	 	wp_register_style('btn-briefing-table-css-sorter', 'https://cdn.jsdelivr.net/npm/tablesorter@2.31.3/dist/css/theme.default.min.css', [], '');
	 	
	 	wp_register_script('btn-briefing-table-sorter', 'https://cdn.jsdelivr.net/npm/tablesorter@2.31.3/dist/js/jquery.tablesorter.min.js', [], '', true);
	    wp_register_script('btn-briefing-table-sorter-widget', 'https://cdn.jsdelivr.net/npm/tablesorter@2.31.3/dist/js/jquery.tablesorter.widgets.min.js', [], '', true);
	 	wp_register_script('btn-briefing-table-pager', 'https://cdn.jsdelivr.net/npm/tablesorter@2.31.3/dist/js/extras/jquery.tablesorter.pager.min.js', [], '', true);
	 
	

	}

  // Footer Scripts
function frontend_print_scripts(){
  $to_json = $this->get_json();
    // Nothing Doing
  if ( empty($to_json) ){
        return;
  } else {
	 $to_json['post_id'] = 0;
	if(is_singular( 'briefing' )){
		$to_json['post_id'] = get_the_ID();
	}


	$to_json['ajax_url'] = admin_url( 'admin-ajax.php' );
	wp_localize_script( 'btn-briefing-frontend-js', 'btn_briefing_data', $to_json );
	
    wp_enqueue_style('btn-briefing-frontend-css');
	wp_enqueue_script('btn-briefing-frontend-video-js');
    //wp_enqueue_script('btn-briefing-frontend-video-js-bunney');
	wp_enqueue_style('btn-briefing-video-css');
	wp_enqueue_style('btn-briefing-select2');
	wp_enqueue_script('btn-briefing-select2');
	//wp_enqueue_style('btn-briefing-table-css-sorter'); 	
	
	wp_enqueue_script('btn-briefing-table-sorter');
	wp_enqueue_script('btn-briefing-table-sorter-widget');
	wp_enqueue_script('btn-briefing-table-pager');
	wp_enqueue_script('btn-briefing-frontend-js');
	


  }
}
	
function get_popular_training($agency_id) {
	global $wpdb;
	$html = '';

	$sql = "
		SELECT trainingId, COUNT(*) as count
		FROM {$wpdb->prefix}btn_training_sessions
		GROUP BY trainingId
		ORDER BY count DESC
		LIMIT 5
	";

	$results = $wpdb->get_results($sql, ARRAY_A);

	if (!empty($results)) {
		$html .= "<div class=\"btn-briefing-widget\">";
		$html .= "<h3>Top 5 Most Popular Trainings</h3>";
		$html .= "<ul>";
		
		foreach ($results as $index => $row) {
			$training_id = $row['trainingId'];
			$count = (int) $row['count'];
			$title = get_the_title($training_id);
			$permalink = get_permalink($training_id);
			$index_count = $index + 1;
			$html .= "<li>{$index_count}. <a href=\"{$permalink}\">" . esc_html($title) . "</a> with <b>{$count}</b> completions</li>";
		}

		$html .= "</ul>";
		$html .= "</div>";
	}

	return $html;
}
	function get_login_count($agency_id){

		//
		// global $wpdb;

		// $total_logins = 0;
		// $officer_logins = 0;
		// $sergeant_logins = 0;

		// //
		// // ===== 1. Get Officer logins =====
		// //

		// // Step 1a: Get station IDs for the agency
		// $station_ids_sql = "
		// 	SELECT id 
		// 	FROM {$wpdb->prefix}btn_stations 
		// 	WHERE agencyId = %d
		// ";
		// $station_ids = $wpdb->get_col(
		// 	$wpdb->prepare($station_ids_sql, $agency_id)
		// );

		// // Step 1b: Get user IDs from btn_officers linked to those stations
		// $officer_user_ids = [];
		// if (!empty($station_ids)) {
		// 	$placeholders = implode(',', array_fill(0, count($station_ids), '%d'));
		// 	$officer_sql = "
		// 		SELECT userId
		// 		FROM {$wpdb->prefix}btn_officers
		// 		WHERE stationId IN ($placeholders)
		// 	";
		// 	$officer_user_ids = $wpdb->get_col(
		// 		$wpdb->prepare($officer_sql, ...$station_ids)
		// 	);
		// }

		// // Step 1c: Get login_count values for officers
		// if (!empty($officer_user_ids)) {
		// 	$placeholders = implode(',', array_fill(0, count($officer_user_ids), '%d'));
		// 	$meta_sql = "
		// 		SELECT meta_value
		// 		FROM {$wpdb->prefix}usermeta
		// 		WHERE user_id IN ($placeholders)
		// 		AND meta_key = 'login_count'
		// 	";
		// 	$login_counts = $wpdb->get_col(
		// 		$wpdb->prepare($meta_sql, ...$officer_user_ids)
		// 	);
		// 	$officer_logins = array_sum(array_map('intval', $login_counts));
		// 	$total_logins += $officer_logins;
		// }

		// //
		// // ===== 2. Get Sergeant logins =====
		// //

		// // Step 2a: Get user IDs from btn_sergeants where organizationId = agencyId
		// $sergeant_sql = "
		// 	SELECT userId
		// 	FROM {$wpdb->prefix}btn_sergeants
		// 	WHERE organizationId = %d
		// ";
		// $sergeant_user_ids = $wpdb->get_col(
		// 	$wpdb->prepare($sergeant_sql, $agency_id)
		// );

		// // Step 2b: Get login_count values for sergeants
		// if (!empty($sergeant_user_ids)) {
		// 	$placeholders = implode(',', array_fill(0, count($sergeant_user_ids), '%d'));
		// 	$meta_sql = "
		// 		SELECT meta_value
		// 		FROM {$wpdb->prefix}usermeta
		// 		WHERE user_id IN ($placeholders)
		// 		AND meta_key = 'login_count'
		// 	";
		// 	$login_counts = $wpdb->get_col(
		// 		$wpdb->prepare($meta_sql, ...$sergeant_user_ids)
		// 	);
		// 	$sergeant_logins = array_sum(array_map('intval', $login_counts));
		// 	$total_logins += $sergeant_logins;
		// }

		// Get login counts from actual login records
		$login_data = get_login_counts($agency_id);

		$total_logins = $login_data['total'];
		$officer_logins = $login_data['officers'];
		$sergeant_logins = $login_data['sergeants'];

		//
		// ===== Output Summary =====
		//
		if($total_logins > 0){
			$html .="<div class=\"btn-briefing-widget\">";
				$html .="<h3>Login Summary for your Agency</h3>";
				$html .= '<p>students logins: ' . esc_html($officer_logins) . '</p>';
				$html .= '<p>facilitators logins: ' . esc_html($sergeant_logins) . '</p>';
				$html .= '<p><strong>Total logins: ' . esc_html($total_logins) . '</strong></p>';
				$html .="</div>";
			return $html;
	
		}

	}
	
	function get_top_user($agency_id){
		global $wpdb;
		//
		// Step 1a: Get station IDs for the agency
		//
		$station_ids_sql = "
			SELECT id 
			FROM {$wpdb->prefix}btn_stations 
			WHERE agencyId = %d
		";
		$station_ids = $wpdb->get_col(
			$wpdb->prepare($station_ids_sql, $agency_id)
		);

		//
		// Step 1b: Get officer user IDs from those stations
		//
		$officer_user_ids = [];

		if (!empty($station_ids)) {
			$placeholders = implode(',', array_fill(0, count($station_ids), '%d'));
			$officer_sql = "
				SELECT userId
				FROM {$wpdb->prefix}btn_officers
				WHERE stationId IN ($placeholders)
			";
			$officer_user_ids = $wpdb->get_col(
				$wpdb->prepare($officer_sql, ...$station_ids)
			);
		}

		//
		// Step 2: Get top 5 officers with most training session completions
		//
		if (!empty($officer_user_ids)) {
			$placeholders = implode(',', array_fill(0, count($officer_user_ids), '%d'));

			$top_users_sql = "
				SELECT userId, COUNT(*) as completions
				FROM {$wpdb->prefix}btn_training_sessions
				WHERE userId IN ($placeholders)
				GROUP BY userId
				ORDER BY completions DESC
				LIMIT 5
			";

			$top_users = $wpdb->get_results(
				$wpdb->prepare($top_users_sql, ...$officer_user_ids),
				ARRAY_A
			);

			//
			// Step 3: Output the results
			//
			if (!empty($top_users)) {
				$html .="<div class=\"btn-briefing-widget\">";
				$html .="<h3>Top 5 Students by Training Completions</h3>";
				$html .="<ul>";
				foreach ($top_users as $index => $user) {
					$user_name = get_user_meta($user['userId'],'first_name',true) ." ". get_user_meta($user['userId'],'last_name',true);
					$html .= "<li>".($index + 1) . '. ' . esc_html($user_name) . ' — ' . esc_html($user['completions']) . ' session(s)</li>';
				}
				$html .="</ul>";
				$html .="</div>";
				return $html;
				
			}
		} 
	}
	
	function total_sessions($agency_id){
		global $wpdb;

		
		// Step 1: Get station IDs for the agency
		$station_ids_sql = "
			SELECT id 
			FROM {$wpdb->prefix}btn_stations 
			WHERE agencyId = %d
		";
		$station_ids = $wpdb->get_col(
			$wpdb->prepare($station_ids_sql, $agency_id)
		);

		// Step 2: Get officer user IDs based on station IDs
		$officer_user_ids = [];

		if (!empty($station_ids)) {
			$placeholders = implode(',', array_fill(0, count($station_ids), '%d'));
			$officer_sql = "
				SELECT userId
				FROM {$wpdb->prefix}btn_officers
				WHERE stationId IN ($placeholders)
			";
			$officer_user_ids = $wpdb->get_col(
				$wpdb->prepare($officer_sql, ...$station_ids)
			);
		}

		// Step 3: Count training sessions in the last 30 days for those officers
		if (!empty($officer_user_ids)) {
			$placeholders = implode(',', array_fill(0, count($officer_user_ids), '%d'));

			// Build the query
			$sessions_sql = "
				SELECT COUNT(*) 
				FROM {$wpdb->prefix}btn_training_sessions
				WHERE userId IN ($placeholders)
				AND created_at >= %s
			";

			// Prepare all parameters in one array
			$params = array_merge($officer_user_ids, [date('Y-m-d H:i:s', strtotime('-30 days'))]);

			// Run the query
			$query = $wpdb->prepare($sessions_sql, ...$params);
			$session_count = $wpdb->get_var($query);
			if($session_count){
				$html .="<div class=\"btn-briefing-widget\">";
				$html .="<h3>Number of training sessions taught in the last 30 days</h3>";
				$html .= "<p>". esc_html($session_count)." sessions</p>";
				$html .="</div>";
				return $html;
			}
		}
	}
	
	
	
	function total_minutes($agency_id){
		global $wpdb;

		// Step 1: Get station IDs for the agency
		$station_ids_sql = "
			SELECT id 
			FROM {$wpdb->prefix}btn_stations 
			WHERE agencyId = %d
		";
		$station_ids = $wpdb->get_col(
			$wpdb->prepare($station_ids_sql, $agency_id)
		);

		// Step 2: Get officer user IDs from those stations
		$officer_user_ids = [];

		if (!empty($station_ids)) {
			$placeholders = implode(',', array_fill(0, count($station_ids), '%d'));
			$officer_sql = "
				SELECT userId
				FROM {$wpdb->prefix}btn_officers
				WHERE stationId IN ($placeholders)
			";
			$officer_user_ids = $wpdb->get_col(
				$wpdb->prepare($officer_sql, ...$station_ids)
			);
		}

		// Step 3: Sum the `duration` of their training sessions
		if (!empty($officer_user_ids)) {
			$placeholders = implode(',', array_fill(0, count($officer_user_ids), '%d'));

			$sql = "
				SELECT SUM(duration) 
				FROM {$wpdb->prefix}btn_training_sessions
				WHERE userId IN ($placeholders)
			";

			$params = $officer_user_ids;
			$query = $wpdb->prepare($sql, ...$params);
			$total_minutes = (int) $wpdb->get_var($query);
			if($total_minutes){
				$html .="<div class=\"btn-briefing-widget\">";
				$html .="<h3>Total minutes spent in training</h3>";
				$html .= "<p>". esc_html($total_minutes)." minutes</p>";
				$html .="</div>";
				return $html;
			}
		} 

	}
	
	function get_total_students($agency_id){
		global $wpdb;

	
		// Step 1: Get station IDs for the agency
		$station_ids_sql = "
			SELECT id 
			FROM {$wpdb->prefix}btn_stations 
			WHERE agencyId = %d
		";
		$station_ids = $wpdb->get_col(
			$wpdb->prepare($station_ids_sql, $agency_id)
		);

		// Step 2: Count officers assigned to those stations
		if (!empty($station_ids)) {
			$placeholders = implode(',', array_fill(0, count($station_ids), '%d'));

			$officer_count_sql = "
				SELECT COUNT(*) 
				FROM {$wpdb->prefix}btn_officers
				WHERE stationId IN ($placeholders)
			";

			$officer_count = (int) $wpdb->get_var(
				$wpdb->prepare($officer_count_sql, ...$station_ids)
			);

			if($officer_count){
				$html .="<div class=\"btn-briefing-widget\">";
				$html .="<h3>Total number of students</h3>";
				$html .= "<p>". esc_html($officer_count)." students</p>";
				$html .="</div>";
				return $html;
			}
		}
	}
	
	function total_facilitator($agency_id){
		global $wpdb;

	

		// Query to count sergeants where organizationId matches agency ID
		$sergeant_sql = "
			SELECT COUNT(*) 
			FROM {$wpdb->prefix}btn_sergeants 
			WHERE organizationId = %d
		";

		$sergeant_count = (int) $wpdb->get_var(
			$wpdb->prepare($sergeant_sql, $agency_id)
		);
		if($sergeant_count){
			$html .="<div class=\"btn-briefing-widget\">";
			$html .="<h3>Total number of facilitators</h3>";
			$html .= "<p>". esc_html($sergeant_count)." facilitators</p>";
			$html .="</div>";
			return $html;
		}
	}
	
	// Set JSON Data
    function set_json($key, $value = false) {
		if ($value) {
			$this->to_json[$key] = $value;
		}
		else {
			unset($this->to_json[$key]);
		}
	}

    // Get JSON Data
	function get_json($key = false) {
		if ($key) {
			return (isset($this->to_json[$key])) ? $this->to_json[$key] : null;
		}
		else {
			return $this->to_json;
		}
	}

	function __construct(){}

	// JSON Data for JS
	private $to_json = [];
	private $enqueue_css = false;
	// Shortcode Mapping
	private $shortcode_map;
	// Current User Data
	private $user = null;
}
