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
final class btn_briefing_hidebriefing {

	function get_agency_id_by_user_id() {
		$user_id = get_current_user_id();
		$agency_id = function_exists('memb_getContactField') ? memb_getContactField( '_AgencyID', false ) : 0;
		if($agency_id == 0){
			global $wpdb;
		    // Define the table name
		    $table_name = $wpdb->prefix . 'btn_officers';
		    // Prepare the query to get the agency_id based on user_id
		    $agency_id = $wpdb->get_var(
		        $wpdb->prepare(
		            "SELECT agencyId FROM {$table_name} WHERE userId = %d",
		            $user_id
		        )
		    );
		}
	    // Return the agency_id (or null if no result is found)
	    return $agency_id;
	}
	
	/**
	 * Resolve a "Rank First Last" display string for a user, checking the
	 * Facilitator (sergeant), Officer, then Manager records in turn. Falls
	 * back to the WP profile name if the user has no record in any table.
	 *
	 * @param int $user_id Defaults to the current user.
	 * @return string
	 */
	function get_person_display($user_id = 0) {
		global $wpdb;
		$user_id = $user_id ? (int) $user_id : get_current_user_id();

		$row = $wpdb->get_row(
			$wpdb->prepare(
				"SELECT firstName, lastName, `rank` FROM {$wpdb->prefix}btn_sergeants WHERE userId = %d LIMIT 1",
				$user_id
			)
		);
		if (!$row) {
			$row = $wpdb->get_row(
				$wpdb->prepare(
					"SELECT firstName, lastName, `rank` FROM {$wpdb->prefix}btn_officers WHERE userId = %d LIMIT 1",
					$user_id
				)
			);
		}
		if ($row) {
			$rank = $row->rank ? ucwords(str_replace(['_', '-'], ' ', $row->rank)) : '';
			return trim("{$rank} {$row->firstName} {$row->lastName}");
		}

		$manager = $wpdb->get_row(
			$wpdb->prepare(
				"SELECT firstName, lastName FROM {$wpdb->prefix}btn_managers WHERE userId = %d LIMIT 1",
				$user_id
			)
		);
		if ($manager) {
			return trim("Manager {$manager->firstName} {$manager->lastName}");
		}

		$user = get_userdata($user_id);
		if (!$user) {
			return '';
		}
		$name = trim("{$user->first_name} {$user->last_name}");
		return $name ?: $user->display_name;
	}

	/**
	 * Managers + Facilitators (Sergeants) belonging to the given agency — the
	 * only roles eligible to authorize hiding a video. Officers/students are
	 * excluded on purpose.
	 *
	 * @param int $agency_id
	 * @return array<int, array{user_id:int, label:string}>
	 */
	function get_agency_authorizers($agency_id) {
		global $wpdb;
		$agency_id = (int) $agency_id;
		if (!$agency_id) {
			return [];
		}

		$managers = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT userId, firstName, lastName
				 FROM {$wpdb->prefix}btn_managers
				 WHERE organizationId = %d AND userId IS NOT NULL",
				$agency_id
			)
		);

		$facilitators = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT s.userId, s.firstName, s.lastName, s.`rank`
				 FROM {$wpdb->prefix}btn_sergeants s
				 LEFT JOIN {$wpdb->prefix}btn_stations st ON s.stationId = st.id
				 WHERE s.userId IS NOT NULL AND (s.organizationId = %d OR st.agencyId = %d)",
				$agency_id, $agency_id
			)
		);

		$authorizers = [];
		foreach ($managers as $m) {
			$authorizers[(int) $m->userId] = trim("Manager {$m->firstName} {$m->lastName}");
		}
		foreach ($facilitators as $f) {
			$rank = $f->rank ? ucwords(str_replace(['_', '-'], ' ', $f->rank)) : 'Facilitator';
			$authorizers[(int) $f->userId] = trim("{$rank} {$f->firstName} {$f->lastName}") . ' (Facilitator)';
		}

		$result = [];
		foreach ($authorizers as $user_id => $label) {
			$result[] = ['user_id' => $user_id, 'label' => $label];
		}
		usort($result, function ($a, $b) {
			return strcasecmp($a['label'], $b['label']);
		});

		return $result;
	}

	/**
	 * Server-side re-check that $user_id is actually a Manager/Facilitator of
	 * $agency_id — never trust the client's dropdown selection alone.
	 *
	 * @return string|false The authorizer's display label, or false if invalid.
	 */
	function get_valid_authorizer_label($agency_id, $user_id) {
		$user_id = (int) $user_id;
		if (!$user_id) {
			return false;
		}
		foreach ($this->get_agency_authorizers($agency_id) as $authorizer) {
			if ($authorizer['user_id'] === $user_id) {
				return $authorizer['label'];
			}
		}
		return false;
	}

	/**
	 * Check if a record exists in the table based on agency_id, value, and type
	 *
	 * @param int $agency_id
	 * @param int $value
	 * @param string $type
	 * @return bool True if the record exists, false otherwise
	 */
	function record_exists($agency_id, $type, $value) {
	    global $wpdb;

	    $table_name = $wpdb->prefix . $this->table;

	    // Query to check for the existence of a matching record
	    $exists = $wpdb->get_var(
	        $wpdb->prepare(
	            "SELECT COUNT(*) FROM {$table_name} WHERE agency_id = %d AND value = %d AND type = %s",
	            $agency_id, $value, $type
	        )
	    );

	    return $exists > 0; // Return true if one or more records exist, false otherwise
	}

	function get_records_by_agency_and_term($agency_id, $type) {
	    global $wpdb;

	    $table_name = $wpdb->prefix . $this->table;

	    // Query to fetch all matching records based on agency_id and type
	    $results = $wpdb->get_results(
	        $wpdb->prepare(
	            "SELECT * FROM {$table_name} WHERE agency_id = %d AND type = %s",
	            $agency_id, $type
	        )
	    );

		// Extract the 'value' field from each result and return as an array
	   $values = array_map(function($record) {
		   return $record->value;
	   }, $results);

	    return $values; // Return an array of results (empty array if no records found)
	}
	/**
	 * Check if the current user has any of the specified roles
	 *
	 * @return bool True if the user has one of the roles, false otherwise
	 */
	 function user_has_specified_role($manager = false) {
		
	    // Array of roles to exclude
	    if(!$manager){
			 $excluded_roles = [
				'administrator',
				'memberium_agencymanager',
				 'memberium_stationadmin'
			];
		}
		 else{
			  $excluded_roles = [
				'administrator',
				'memberium_agencymanager',
				 'memberium_stationadmin'
			];
		 }
	   

	    // Get the current user
	    $current_user = wp_get_current_user();

	    // Exclude users with specified roles
	    foreach ($excluded_roles as $excluded_role) {

	        if (in_array($excluded_role, $current_user->roles, true)) {
	            return false; // User has an excluded role
	        }
	    }

	    // If no excluded roles, return true
	    return true;
	}
	
    	/**
	 * Check if the current user has any of the specified roles
	 *
	 * @return bool True if the user has one of the roles, false otherwise
	 */
	 function user_has_specified_role_facilitator() {
		
	    $excluded_roles = [
				'memberium_sergeant',
		];
	   

	    // Get the current user
	    $current_user = wp_get_current_user();

	    // Exclude users with specified roles
	    foreach ($excluded_roles as $excluded_role) {

	        if (in_array($excluded_role, $current_user->roles, true)) {
	            return false; // User has an excluded role
	        }
	    }

	    // If no excluded roles, return true
	    return true;
	}
	
	
	function insert_briefing($agency_id, $type, $value) {
	    global $wpdb;

	    $table_name = $wpdb->prefix . $this->table;
		if($agency_id > 0){
			$result = $wpdb->insert(
		        $table_name,
		        [
		            'agency_id' => $agency_id,
		            'type'      => $type,
		            'value'     => $value,
		        ],
		        ['%d', '%s', '%d']
		    );

		    if ($result !== false) {
		        return $wpdb->insert_id; // Return the ID of the newly inserted row
		    }
		}


	    return false; // Insert failed
	}

	function delete_briefing($agency_id,$type, $value) {
	    global $wpdb;

	    $table_name = $wpdb->prefix . $this->table;
		if($agency_id > 0){
			$result = $wpdb->delete(
				$table_name,
				[
					'agency_id' => $agency_id,
					'value'     => $value,
					'type'      => $type,
				],
				['%d', '%d', '%s'] // Data types for each parameter
			);
		}

	    return $result !== false; // Return true if successful, false otherwise
	}
	function __construct(){}

	// JSON Data for JS
	// Current User Data
	private $table = "hidden_briefings_list";
}
