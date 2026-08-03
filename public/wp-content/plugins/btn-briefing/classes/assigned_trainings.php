<?php
if (! defined('ABSPATH')) {
	header('HTTP/1.0 403 Forbidden');
	die();
}

/**
 * Assigned Training Class
 *
 * @since      1.0.0
 * @package    btn-briefing
 * @subpackage btn-briefing/classes
 */

 final class btn_briefing_assigned_trainings {

 	private $items_table = "assigned_training_items";
 	private $status_table = "assigned_training_status";

 	function __construct() {}

	function get_station_id_by_user_id() {
		$user_id = get_current_user_id();
		global $wpdb;
	    // Define the table name
	    $table_name = $wpdb->prefix . 'btn_officers';
	    // Prepare the query to get the agency_id based on user_id
	    $station_id = $wpdb->get_var(
	        $wpdb->prepare(
	            "SELECT stationId FROM {$table_name} WHERE userId = %d",
	            $user_id
	        )
	    );
	    return $station_id;
	}

	 function active_training_assignment($assignment_id) {
		 global $wpdb;

		 $items_table  = $wpdb->prefix . 'assigned_training_items';
		 // Update the main assignment record
		 $wpdb->update(
			 $items_table,
			 ['status' => ''],
			 ['id' => $assignment_id],
			 ['%s'],
			 ['%d']
		 );
	 }
	 
	function delete_training_assignment($assignment_id) {
		global $wpdb;

		$items_table  = $wpdb->prefix . 'assigned_training_items';
		$status_table = $wpdb->prefix . 'assigned_training_status';

		// Delete related status records first
		/*$wpdb->delete(
			$status_table,
			['assignment_id' => $assignment_id],
			['%d']
		);
	*/
		// Update the main assignment record
		$wpdb->update(
			$items_table,
			['status' => 'inactive'],
			['id' => $assignment_id],
			['%s'],
			['%d']
		);
	}
	/**
	 * Get the total number of completed training assignments for a given user
	 */
	function get_user_completion_count($user_id) {
	    global $wpdb;
	    $status_table = $wpdb->prefix . $this->status_table;

	    $count = $wpdb->get_var(
	        $wpdb->prepare(
	            "SELECT COUNT(*) FROM {$status_table}
	             WHERE user_id = %d AND status = 'complete'",
	            $user_id
	        )
	    );

	    return (int) $count;
	}

	function get_assign_to($user_id, $training_type = null) {
		global $wpdb;

		$items_table = $wpdb->prefix . $this->items_table;

		// Build base query to get only distinct assigned_to + assigned_type
		$query = "
			SELECT DISTINCT
				i.assigned_to,
				i.assigned_type
			FROM {$items_table} i
			WHERE i.assigned_by = %d
		";

		$params = [$user_id];

		// Optionally filter by training_type
		if (!empty($training_type)) {
			$query .= " AND i.training_type = %s";
			$params[] = $training_type;
		}

		$query .= " ORDER BY i.assigned_to ASC, i.assigned_type ASC";

		$results = $wpdb->get_results($wpdb->prepare($query, ...$params), ARRAY_A);

		return $results;
	}
	 
	function get_admin_assignments_ajax($user_id, $training_type = null,$training_id, $status) {
		global $wpdb;

		$items_table    = $wpdb->prefix . $this->items_table;
		$stations_table = $wpdb->prefix . 'btn_stations';
		$agencies_table = $wpdb->prefix . 'btn_agencies';

		// Base query
		$query = "
			SELECT DISTINCT i.id, i.training_id, i.training_type, i.assigned_to, i.assigned_type,i.status,
				CASE
					WHEN i.assigned_type = 'station' THEN s.name
					WHEN i.assigned_type = 'agency' THEN a.name
					ELSE NULL
				END AS assigned_name
			FROM {$items_table} i
			LEFT JOIN {$stations_table} s ON i.assigned_type = 'station' AND i.assigned_to = s.id
			LEFT JOIN {$agencies_table} a ON i.assigned_type = 'agency' AND i.assigned_to = a.id
			WHERE i.assigned_by = %d 
		";

		$params = [$user_id];

		// Optional training type filter
		if (!empty($training_type)) {
			$query .= " AND i.training_type = %s";
			$params[] = $training_type;
		}
		if (!empty($training_id)) {
			$query .= " AND i.id = %d";
			$params[] = $training_id;
		}
		if (!empty($status) && $status !='all') {
			$query .= " AND i.status = %s";
			if($status == 'active'){
				$params[] = '';
			}
			else if($status == 'inactive'){
				$params[] = 'inactive';
			}
			
		}
		$query .= " ORDER BY  (i.status IS NULL OR i.status = '') DESC, i.id DESC, i.status ASC";

		// Execute query
		$assignments = $wpdb->get_results($wpdb->prepare($query, ...$params), ARRAY_A);

		// Build output array
		$block_ids = [];

		foreach ($assignments as $row) {
			if($row['assigned_type'] == 'user'){
				$user = get_userdata($row['assigned_to']);
				$first_name = get_user_meta($user->ID, 'first_name', true);
				$last_name  = get_user_meta($user->ID, 'last_name', true);
				$email  = $user->user_email;
				$full_name  = trim("{$first_name} {$last_name}");
				$row['assigned_name'] = $full_name;
			}
			$block_ids[] = [
				'id'            => (int) $row['id'],
				'training_id'   => (int) $row['training_id'],
				'training_type' => $row['training_type'],
				'assigned_to'   => $row['assigned_to'],
				'assigned_type' => $row['assigned_type'],
				'assigned_name' => $row['assigned_name'],
				'status' => $row['status'],
			
			];
		}
		return $block_ids;
	}
	 
	function get_admin_assignments($user_id, $training_type = null) {
		global $wpdb;

		$items_table    = $wpdb->prefix . $this->items_table;
		$stations_table = $wpdb->prefix . 'btn_stations';
		$agencies_table = $wpdb->prefix . 'btn_agencies';
		

		// Base query
		$query = "
			SELECT DISTINCT i.id, i.training_id, i.training_type, i.assigned_to, i.assigned_type,i.status,
				CASE
					WHEN i.assigned_type = 'station' THEN s.name
					WHEN i.assigned_type = 'agency' THEN a.name
					ELSE NULL
				END AS assigned_name
			FROM {$items_table} i
			LEFT JOIN {$stations_table} s ON i.assigned_type = 'station' AND i.assigned_to = s.id
			LEFT JOIN {$agencies_table} a ON i.assigned_type = 'agency' AND i.assigned_to = a.id
			WHERE i.assigned_by = %d 
		";

		$params = [$user_id];

		// Optional training type filter
		if (!empty($training_type)) {
			$query .= " AND i.training_type = %s";
			$params[] = $training_type;
		}

		$query .= " ORDER BY  (i.status IS NULL OR i.status = '') DESC, i.id DESC, i.status ASC";

		// Execute query
		$assignments = $wpdb->get_results($wpdb->prepare($query, ...$params), ARRAY_A);

		// Build output array
		$block_ids = [];

		foreach ($assignments as $row) {
			if($row['assigned_type'] == 'user'){
				$user = get_userdata($row['assigned_to']);
				$first_name = get_user_meta($user->ID, 'first_name', true);
				$last_name  = get_user_meta($user->ID, 'last_name', true);
				$email  = $user->user_email;
				$full_name  = trim("{$first_name} {$last_name}");
				$row['assigned_name'] = $full_name;
			}
			$block_ids[] = [
				'id'            => (int) $row['id'],
				'training_id'   => (int) $row['training_id'],
				'training_type' => $row['training_type'],
				'assigned_to'   => $row['assigned_to'],
				'assigned_type' => $row['assigned_type'],
				'assigned_name' => $row['assigned_name'],
				'status' => $row['status'],
			
			];
		}

		return $block_ids;
	}



	 /**
	  * Get all training IDs assigned to a user (via user, station, or agency), optionally filtered by training_type
	  */

	  function get_user_assignments($user_id, $training_type = null) {
	      global $wpdb;

	      $items_table = $wpdb->prefix . $this->items_table;
	      $status_table = $wpdb->prefix . $this->status_table;
	      $officers_table = $wpdb->prefix . 'btn_officers';
		  $stations_table = $wpdb->prefix . 'btn_stations';

	      // Get user's station and agency — check officers first, fall back to sergeants
	      $officer = $wpdb->get_row(
	          $wpdb->prepare("SELECT stationId, agencyId FROM {$officers_table} WHERE userId = %d", $user_id),
	          ARRAY_A
	      );

	      if ($officer) {
		      $station_id = $officer['stationId'];
		      $agency_id  = $officer['agencyId'];
	      } else {
		      $station_id = 0;
		      $sergeants_table = $wpdb->prefix . 'btn_sergeants';
		      $agency_id = $wpdb->get_var(
		          $wpdb->prepare("SELECT organizationId FROM {$sergeants_table} WHERE userId = %d", $user_id)
		      );
		      if (!$agency_id) return [];
	      }

	   $query = "
			SELECT DISTINCT i.id, i.training_id, i.training_type, i.status
			FROM {$items_table} i
			WHERE
				(
					(i.assigned_type = 'station' AND i.assigned_to = %s) 
					AND (i.status != 'inactive' OR i.status IS NULL OR i.status = '')
				)
				OR
				(
					(i.assigned_type = 'agency' AND i.assigned_to = %s) 
					AND (i.status != 'inactive' OR i.status IS NULL OR i.status = '')
				)
				OR
				(
					(i.assigned_type = 'user' AND i.assigned_to = %s) 
					AND (i.status != 'inactive' OR i.status IS NULL OR i.status = '')
				)
			ORDER BY i.id DESC
		";


		$params = [$station_id, $agency_id, $user_id];

	      // Get raw assignments (category + block IDs)
	      $assignments = $wpdb->get_results($wpdb->prepare($query, ...$params), ARRAY_A);
	      $block_ids = [];

	      foreach ($assignments as $row) {
	          if ($row['training_type'] === 'block') {
	              $block_ids[] = (int) $row['training_id'];
	          }
	      }

	      return array_unique($block_ids);
	  }

 	/**
 	 * Assign a training block/category to a group or user
 	 */
	 function assign_training($training_id, $training_type, $assigned_type, $assigned_to, $assigned_by) {
	     global $wpdb;
	     $table = $wpdb->prefix . $this->items_table;

	     // Prevent duplicate assignment for the current item
	     $exists = $wpdb->get_var($wpdb->prepare(
	         "SELECT COUNT(*) FROM {$table} WHERE training_id = %d AND training_type = %s AND assigned_type = %s AND assigned_to = %s",
	         $training_id, $training_type, $assigned_type, $assigned_to
	     ));

	     if ($exists > 0) {
			$updated = $wpdb->update(
			$table,
			[
				'status'      => '',
				'assigned_by' => $assigned_by,
			],
			[
				'training_id'   => $training_id,
				'training_type' => $training_type,
				'assigned_type' => $assigned_type,
				'assigned_to'   => $assigned_to,
			],
			[ '%s', '%d' ],
			// where formats (match the where array)
			[ '%d', '%s', '%s', '%s' ]
		);

			do_action('btn_briefing_training_assigned', $training_id, $training_type, $assigned_type, $assigned_to, $assigned_by);

			return;
		 }




	     // If it's a category, assign all blocks (custom posts) under it
	     if ($training_type === 'category') {
			 $post_type =   btn_briefing()->post()->get_post_slug();
		   	 $taxonomy =  btn_briefing()->post()->get_taxonomy_slug();

	         $posts = get_posts([
	             'post_type'      => $post_type,
	             'posts_per_page' => -1,
	             'fields'         => 'ids',
	             'tax_query'      => [
	                 [
	                     'taxonomy' => $taxonomy,
	                     'field'    => 'term_id',
	                     'terms'    => $training_id,
	                 ]
	             ]
	         ]);

	         foreach ($posts as $block_id) {
	             // Avoid duplicate assignment for each block
	             $block_exists = $wpdb->get_var($wpdb->prepare(
	                 "SELECT COUNT(*) FROM {$table} WHERE training_id = %d AND training_type = 'block' AND assigned_type = %s AND assigned_to = %s",
	                 $block_id, $assigned_type, $assigned_to
	             ));

	             if (!$block_exists) {
	                 $wpdb->insert(
	                     $table,
	                     [
	                         'training_id'   => $block_id,
	                         'training_type' => 'block',
	                         'assigned_type' => $assigned_type,
	                         'assigned_to'   => $assigned_to,
	                         'assigned_by'   => $assigned_by,
	                         'status'        => '',
	                     ],
	                     ['%d', '%s', '%s', '%s', '%d', '%s']
	                 );
	             }
	         }
	     }
		 else{
			 // Insert the main assignment
			 $wpdb->insert(
				 $table,
				 [
					 'training_id'   => $training_id,
					 'training_type' => $training_type,
					 'assigned_type' => $assigned_type,
					 'assigned_to'   => $assigned_to,
					 'assigned_by'   => $assigned_by,
					 'status'        => '',
				 ],
				 ['%d', '%s', '%s', '%s', '%d', '%s']
			 );
		 }

		 do_action('btn_briefing_training_assigned', $training_id, $training_type, $assigned_type, $assigned_to, $assigned_by);
	 }


 	/**
 	 * Mark a training assignment as complete for a user
 	 */
 	function mark_complete($assignment_id, $user_id) {
 	    global $wpdb;
 	    $table = $wpdb->prefix . $this->status_table;

 	    return $wpdb->replace(
 	        $table,
 	        [
 	            'assignment_id' => $assignment_id,
 	            'user_id'       => $user_id,
 	            'status'        => 'complete',
 	            'completed_at'  => current_time('mysql')
 	        ],
 	        ['%d', '%d', '%s', '%s']
 	    );
 	}


	function get_assignment_id_by_post_or_term($post_id, $training_taxonomies) {
	    global $wpdb;
	    $items_table = $wpdb->prefix . 'assigned_training_items';

	    // Step 1: Check if there's a direct assignment using the post ID
	    $assignment_id = $wpdb->get_var(
	        $wpdb->prepare(
	            "SELECT id FROM {$items_table}
	             WHERE training_id = %d
	             AND training_type IN ('block', 'category')
	             LIMIT 1",
	            $post_id
	        )
	    );

	    if ($assignment_id) {
	        return (int) $assignment_id;
	    }

	    // Step 2: Get terms of the post and check for matching assignments
	        $terms = get_the_terms($post_id, $training_taxonomies);

	        if (!empty($terms) && !is_wp_error($terms)) {
	            foreach ($terms as $term) {
			                $fallback_assignment_id = $wpdb->get_var(
			                    $wpdb->prepare(
			                        "SELECT id FROM {$items_table}
			                         WHERE training_id = %d
			                         AND training_type = %s
			                         LIMIT 1",
			                        $term->term_id,
			                        $training_taxonomies === 'training_block' ? 'block' : 'category'
			                    )
			                );
			                if ($fallback_assignment_id) {
			                    return (int) $fallback_assignment_id;
			                }

			    }
			}

	    return false; // Nothing found
	}

 	/**
 	 * Get how many users completed a training item
 	 */
 	function get_completion_count($assignment_id) {
 	    global $wpdb;
 	    $table = $wpdb->prefix . $this->status_table;

 	    return (int) $wpdb->get_var($wpdb->prepare(
 	        "SELECT COUNT(*) FROM {$table} WHERE assignment_id = %d AND status = 'complete'",
 	        $assignment_id
 	    ));
 	}

 	/**
 	 * Get global summary of completions by type
 	 */
 	function get_overall_completion_summary() {
 	    global $wpdb;
 	    $items = $wpdb->prefix . $this->items_table;
 	    $status = $wpdb->prefix . $this->status_table;

 	    $rows = $wpdb->get_results("
 	        SELECT i.training_type, s.status, COUNT(*) as count
 	        FROM {$items} i
 	        LEFT JOIN {$status} s ON i.id = s.assignment_id
 	        GROUP BY i.training_type, s.status
 	    ", ARRAY_A);

 	    $summary = [];
 	    foreach ($rows as $row) {
 	        $type = $row['training_type'] ?? 'unknown';
 	        $status = $row['status'] ?? 'unstarted';
 	        $summary[$type][$status] = (int) $row['count'];
 	    }

 	    return $summary;
 	}

	function get_user_agency() {
	    global $wpdb;
	    $user_id = get_current_user_id();

	    // Admins get all agencies
	    if (current_user_can('administrator')) {
	        return $wpdb->get_results(
	            "SELECT id, name FROM {$wpdb->prefix}btn_agencies ORDER BY name ASC",
	            ARRAY_A
	        );
	    }

	    // 1. Try wp_btn_managers.organizationId → direct agency ID
	    $agency = $wpdb->get_row(
	        $wpdb->prepare(
	            "SELECT a.id, a.name
	             FROM {$wpdb->prefix}btn_managers m
	             INNER JOIN {$wpdb->prefix}btn_agencies a ON m.organizationId = a.id
	             WHERE m.userId = %d",
	            $user_id
	        ),
	        ARRAY_A
	    );

	    if ($agency) {
	        return [$agency];
	    }

	    // 2. Fallback: wp_btn_sergeants.stationId → wp_btn_stations.agencyId → agency
	    $agency = $wpdb->get_row(
	        $wpdb->prepare(
	            "SELECT a.id, a.name
	             FROM {$wpdb->prefix}btn_sergeants s
	             INNER JOIN {$wpdb->prefix}btn_stations st ON s.stationId = st.id
	             INNER JOIN {$wpdb->prefix}btn_agencies a ON st.agencyId = a.id
	             WHERE s.userId = %d",
	            $user_id
	        ),
	        ARRAY_A
	    );

	    if ($agency) {
	        return [$agency];
	    }

	    // No match
	    return [];
	}

	function get_user_station($agency_id = '') {
		global $wpdb;
		$user_id = get_current_user_id();

		// 1. Admins see all stations
		if (current_user_can('administrator')) {
			return $wpdb->get_results(
				"SELECT id, name FROM {$wpdb->prefix}btn_stations ORDER BY name ASC",
				ARRAY_A
			);
		}

		// 2. Sergeants: one specific station
		$station = $wpdb->get_row(
			$wpdb->prepare(
				"SELECT id, name
				 FROM {$wpdb->prefix}btn_stations
				 WHERE id = (
					 SELECT stationId
					 FROM {$wpdb->prefix}btn_sergeants
					 WHERE userId = %d
					 LIMIT 1
				 )",
				$user_id
			),
			ARRAY_A
		);

		if ($station) {
			return [$station];
		}

		// 3. Managers: all stations under their organization (agency)
		$stations = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT s.id, s.name
				 FROM {$wpdb->prefix}btn_stations s
				 INNER JOIN {$wpdb->prefix}btn_managers m ON s.agencyId = m.organizationId
				 WHERE m.userId = %d
				 ORDER BY s.name ASC",
				$user_id
			),
			ARRAY_A
		);

		if (!empty($stations)) {
			return $stations;
		}

		// 4. Officers fallback: all stations under their agencyId
		$officer = $wpdb->get_row(
			$wpdb->prepare(
				"SELECT agencyId
				 FROM {$wpdb->prefix}btn_officers
				 WHERE userId = %d",
				$user_id
			),
			ARRAY_A
		);

		if ($officer && !empty($officer['agencyId'])) {
			return $wpdb->get_results(
				$wpdb->prepare(
					"SELECT id, name
					 FROM {$wpdb->prefix}btn_stations
					 WHERE agencyId = %s
					 ORDER BY name ASC",
					$officer['agencyId']
				),
				ARRAY_A
			);
		}

		// If all else fails
		return [];
	}

	function get_officers_by_agency($agency_id, $station_id, $users = false, $user_ids = false, $user_exclude_ids = false, $exclude_user = false,$assigned_type = '',$user_id = '') {
	global $wpdb;

	$agency_id = (int) $agency_id;
	$stations_table = $wpdb->prefix . 'btn_stations';
	$officers_table = $wpdb->prefix . 'btn_officers';

	// Step 1: Get station IDs under the agency
	$station_ids = [];
	if ($agency_id) {
		$station_ids = $wpdb->get_col(
			$wpdb->prepare(
				"SELECT id FROM {$stations_table} WHERE agencyId = %d",
				$agency_id
			)
		);
	}	

	// Ensure $station_id is always included
	if (empty($station_ids)) {
		$station_ids = [$station_id];
		
	} else {
		if (!in_array($station_id, $station_ids)) {
			if(!empty($station_id)){
				$station_ids[] = $station_id;
			}
			
		}
	}
		
	$placeholders = implode(',', array_fill(0, count($station_ids), '%d'));

	
	// Handle return of only user IDs
	if ($user_ids) {
		$query = "
				SELECT DISTINCT o.userId
				FROM {$officers_table} o
				WHERE o.stationId IN ($placeholders)
				  AND o.userId IS NOT NULL
			";
		
		$prepared_query = $wpdb->prepare($query, ...$station_ids);
		$user_ids = $wpdb->get_col($prepared_query);
		return array_map('intval', $user_ids);
		
	}

	// Handle user exclusion
	if ($exclude_user && !empty($user_exclude_ids)) {
		
		$excluded_placeholders = implode(',', array_fill(0, count($user_exclude_ids), '%d'));
		$args = array_merge($station_ids, $user_exclude_ids);
		$query = "
			SELECT o.*, s.name AS station_name
			FROM {$officers_table} o
			LEFT JOIN {$stations_table} s ON o.stationId = s.id
			WHERE o.stationId IN ($placeholders)
			  AND o.userId NOT IN ($excluded_placeholders)
		";
		$prepared_query = $wpdb->prepare($query, ...$args);
		$officers = $wpdb->get_results($prepared_query, ARRAY_A);
		return $officers;
	}

	// Main SELECT
	if ($users) {
		if(!empty($assigned_type)){
			
			$query = "
			SELECT o.*, s.name AS station_name
			FROM {$officers_table} o
			LEFT JOIN {$stations_table} s ON o.stationId = s.id
			WHERE o.userId = {$user_id}";
			}
			else{
				$query = "
			SELECT o.*, s.name AS station_name
			FROM {$officers_table} o
			LEFT JOIN {$stations_table} s ON o.stationId = s.id
			WHERE o.stationId IN ($placeholders)
		";
			}
		
		$prepared_query = $wpdb->prepare($query, ...$station_ids);
		return $wpdb->get_results($prepared_query, ARRAY_A);
	} else {
		if(!empty($assigned_type)){
			$query = "
			SELECT COUNT(*)
			FROM {$officers_table}
			WHERE userId = {$user_id}";
			
		}
		else{
			$query = "
			SELECT COUNT(*)
			FROM {$officers_table}
			WHERE stationId IN ($placeholders)
		";
		}
		
		$prepared_query = $wpdb->prepare($query, ...$station_ids);
	
		return (int) $wpdb->get_var($prepared_query);
	}
}

	function get_post_ids_by_term_ids(array $term_ids, $taxonomy, $post_type) {
	    $post_ids = [];

	    foreach ($term_ids as $term_id) {
	        $posts = get_posts([
	            'post_type'      => $post_type,
	            'posts_per_page' => -1,
	            'fields'         => 'ids',
	            'tax_query'      => [
	                [
	                    'taxonomy' => $taxonomy,
	                    'field'    => 'term_id',
	                    'terms'    => [$term_id],
	                ]
	            ]
	        ]);

	        $post_ids = array_merge($post_ids, $posts);
	    }

	    // Remove duplicates just in case
	    return array_unique($post_ids);
	}



	function get_total_assigned_training($station_id, $agency_id,$training_item = false) {
		global $wpdb;

		$table = $wpdb->prefix . 'assigned_training_items';

		// Query to count total items where assigned_to matches and assigned_type is correct
		$query = "
			SELECT COUNT(*) as total
			FROM {$table}
			WHERE
				(assigned_type = 'station' AND assigned_to = %d)
				OR
				(assigned_type = 'agency' AND assigned_to = %d)
		";

		// Execute the prepared query
		$total = $wpdb->get_var($wpdb->prepare($query, $station_id, $agency_id));

		if($training_item){
			$query = "
				SELECT DISTINCT training_id
				FROM {$table}
				WHERE
					(assigned_type = 'station' AND assigned_to = %d)
					OR
					(assigned_type = 'agency' AND assigned_to = %d)
			";
			$training_ids = $wpdb->get_col($wpdb->prepare($query, $station_id, $agency_id));
			return array_map('intval', $training_ids);
		}
		else{
			return (int) $total;
		}

	}

	function get_total_completed_trainings($training_id, $start_date = null, $end_date = null, $users = false, $user_ids = [],$assigned_type = '', $user_id = '') {
		global $wpdb;
		$training_ids = [(int) $training_id];
		$training_placeholders = implode(',', array_fill(0, count($training_ids), '%d'));

		$sessions_table = $wpdb->prefix . 'btn_training_sessions';
		$officers_table = $wpdb->prefix . 'btn_officers';
		$stations_table = $wpdb->prefix . 'btn_stations';

		// Base SELECT clause
		if ($users) {
			$select_clause = "SELECT ts.*, o.stationId, s.name AS station_name";
		} else {
			$select_clause = "SELECT COUNT(*)";
		}
		
		if(!empty($assigned_type)){
			$query = "
				{$select_clause}
				FROM {$sessions_table} ts
				LEFT JOIN {$officers_table} o ON ts.userId = o.userId
				LEFT JOIN {$stations_table} s ON o.stationId = s.id
				WHERE ts.userId = {$user_id} AND ts.trainingId = {$training_id}
			";
			
		}
		else{
			$query = "
				{$select_clause}
				FROM {$sessions_table} ts
				LEFT JOIN {$officers_table} o ON ts.userId = o.userId
				LEFT JOIN {$stations_table} s ON o.stationId = s.id
				WHERE ts.trainingId IN ($training_placeholders)
			";
		}
		

		$params = $training_ids;

		// Filter by user IDs if provided
		if (!empty($user_ids) && is_array($user_ids)) {
			$user_ids = array_map('intval', $user_ids);
			$user_placeholders = implode(',', array_fill(0, count($user_ids), '%d'));
			$query .= " AND ts.userId IN ($user_placeholders)";
			$params = array_merge($params, $user_ids);
		} else {
			$query .= " AND ts.userId > 0";
		}

		// Filter by date range if both dates are provided
		if (!empty($start_date) && !empty($end_date)) {
			$start_datetime = $start_date . " 00:00:00";
			$end_datetime   = $end_date . " 23:59:59";
			$query .= " AND ts.completedAt BETWEEN %s AND %s";
			$params[] = $start_datetime;
			$params[] = $end_datetime;
		}

		// Prepare and execute the query
		$prepared_query = $wpdb->prepare($query, ...$params);

		if ($users) {
		
			if ($user_ids) {
				// Return array of user IDs
				$results = $wpdb->get_results($prepared_query, ARRAY_A);
				return array_map('intval', array_column($results, 'userId'));
			} else {
				// Return all matched sessions with officer station data
				return $wpdb->get_results($prepared_query, ARRAY_A);
			}
		} else {
			
			// Return count only
			return (int) $wpdb->get_var($prepared_query);
		}
	}



	function get_user_list($user_id,$start_date, $end_date){
		global $wpdb;

		$assignments = btn_briefing()->assigned_training()->get_assign_to($user_id);
		$station_ids = [];
		$agency_ids = [];

		// Step 1: Collect assigned station and agency IDs
		if (!empty($assignments)) {
		    foreach ($assignments as $assignment) {
		        $assigned_to = $assignment['assigned_to'];
		        $assigned_type = $assignment['assigned_type'];

		        if ($assigned_type === "station") {
		            $station_ids[] = (int) $assigned_to;
		        }

		        if ($assigned_type === "agency") {
		            $agency_ids[] = (int) $assigned_to;
		        }
		    }
		}

		// Step 2: Query wp_btn_stations for stations assigned by agency
		$stations_from_agencies = [];

		if (!empty($agency_ids)) {
		    $placeholders = implode(',', array_fill(0, count($agency_ids), '%d'));
		    $stations_table = $wpdb->prefix . 'btn_stations';

		    $query = "
		        SELECT id
		        FROM {$stations_table}
		        WHERE agencyId IN ($placeholders)
		    ";

		    $station_rows = $wpdb->get_results($wpdb->prepare($query, ...$agency_ids), ARRAY_A);

		    // Extract station IDs from result
		    foreach ($station_rows as $station) {
		        $stations_from_agencies[] = (int) $station['id'];
		    }
		}

		// Step 3: Merge and remove duplicates
		$all_station_ids = array_unique(array_merge($station_ids, $stations_from_agencies));

		$officers = [];

		$user_ids = $this->get_users_completed_within_range($start_date,$end_date);
		if(!empty($user_ids)){

			if (!empty($all_station_ids) && !empty($user_ids)) {
			    // Prepare placeholders
			    $station_placeholders = implode(',', array_fill(0, count($all_station_ids), '%d'));
			    $user_placeholders    = implode(',', array_fill(0, count($user_ids), '%d'));

			    $officers_table = $wpdb->prefix . 'btn_officers';

			    $query = "
			        SELECT *
			        FROM {$officers_table}
			        WHERE stationId IN ($station_placeholders)
			        AND userId IN ($user_placeholders)
			    ";

			    // Merge station and user ID parameters
			    $params = array_merge($all_station_ids, $user_ids);

			    // Fetch filtered officers
			    $officers = $wpdb->get_results($wpdb->prepare($query, ...$params), ARRAY_A);

			    return $officers;
			}
		}
		else{
			if (!empty($all_station_ids)) {
				// Prepare placeholders for safe query
				$placeholders = implode(',', array_fill(0, count($all_station_ids), '%d'));
				$officers_table = $wpdb->prefix . 'btn_officers';

				$query = "
					SELECT *
					FROM {$officers_table}
					WHERE stationId IN ($placeholders)
				";
				// Fetch officers
				$officers = $wpdb->get_results($wpdb->prepare($query, ...$all_station_ids), ARRAY_A);
				return $officers;
			}
		}

	}

	function get_users_completed_within_range($start_date, $end_date) {
		global $wpdb;

		$table = $wpdb->prefix . 'btn_training_sessions';
		// Format full-day date range
		$start_datetime = $start_date . " 00:00:00";
		$end_datetime   = $end_date . " 23:59:59";

		$query = "
			SELECT DISTINCT userId
			FROM {$table}
			WHERE DATE(completedAt) BETWEEN %s AND %s
		";
		$prepared = $wpdb->prepare($query, $start_datetime, $end_datetime);
		$user_ids = $wpdb->get_col($prepared);
		return array_map('intval', $user_ids);
	}

	function get_current_user_role() {
	    if (is_user_logged_in()) {
	        $user = wp_get_current_user();
	        return !empty($user->roles) ? $user->roles[0] : null;
	    }
	    return null;
	}
}


