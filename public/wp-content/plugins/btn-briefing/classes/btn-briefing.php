<?php
if (! defined('ABSPATH')) {
	header('HTTP/1.0 403 Forbidden');
	die();
}

/**
 * Main Plugin Class
 *
 * @since      1.0.0
 * @package    btn-dr
 * @subpackage btn-dr/classes
 * @author     Augustus Villanueva <augustus@businesstechninjas.com>
 */
final class btn_briefing {

	function init(){
			// Text Domain / Localization
			$this->load_text_domain();
			// Init Hooks
			add_action('init',[$this,'init_hooks']);

    }

    // Init
    function init_hooks(){

			$this->post()->register();

			add_action('pre_get_posts', [$this,'add_custom_post_types']);
			$active_plugins = apply_filters('active_plugins', get_option('active_plugins'));
			// Detect Memberium

			$this->acf = ( class_exists( 'ACF' ) ) ? true : false;
			$this->get_field = ( function_exists( 'get_field' ) ) ? true : false;

			if (!is_admin()) {
				$this->frontend()->add_wp_hooks();
			}


			//ACF
			//add_filter('acf/settings/url', [$this,'acf_settings_url']);
			//add_filter('acf/settings/show_admin', [$this,'acf_settings_show_admin']);


			// AJAX Hooks
			if ( wp_doing_ajax() ) {
				$this->ajax()->add_wp_hooks();
			}


}


	// Customize the url setting to fix incorrect asset URLs.
	function acf_settings_url( $url ) {
	    return BTN_BRIEFING_ACF_URL;
	}

	// (Optional) Hide the ACF admin menu item.
	function acf_settings_show_admin($show_admin ) {
	    return false;
	}


	function ajax(){
		static $ajax = null;
				if( is_null($ajax) ){
						$ajax = new btn_briefing_ajax;
				}
				return $ajax;
		}
	// Get Edition Class
  function post(){
	static $post = null;
      if( is_null($post) ){
          $post = new btn_briefing_post;
      }
      return $post;
  }


	// Get Admin Class
	function frontend(){
	static $frontend = null;
			if( is_null($frontend) ){
				$frontend = new btn_briefing_frontend;
			}
			return $frontend;
	}

	// Get Hidebriefing Class
	function hidebriefing(){
	static $hidebriefing = null;
			if( is_null($hidebriefing) ){
				$hidebriefing = new btn_briefing_hidebriefing;
			}
			return $hidebriefing;
	}

	// Get Hidebriefing Class
	function assigned_training(){
	static $assigned_training = null;
			if( is_null($assigned_training) ){
				$assigned_training = new btn_briefing_assigned_trainings;
			}
			return $assigned_training;
	}



	function add_custom_post_types($query) {
			if ( is_home() && $query->is_main_query() ) {
				  $post_slug = $this->post()->get_post_slug();
					$query->set( 'post_type', [$post_slug] );
			}
			return $query;
	}


	/**
	 * Return templates path checks child theme first
	 *
	 * @param string $filename
	 * @return string template path admin error or false
	*/
	function template_part_path( $filename, $directory_name = '' ){

		$not_found = [];
		$directory_name = $directory_name > '' ? trailingslashit($directory_name) : '';
		$theme_template = "{$directory_name}{$filename}";

		// Locate Template in Themes
		$template = locate_template($theme_template, false);
		// Get Plugin Defaults
		if( ! is_file($template) ){
			$not_found['theme'] = $theme_template;
			$template = BTN_BRIEFING_DIR . 'templates/' . $filename;
			if( ! is_file($template) ){
				$not_found['extension'] = $template;
				$template = false;
			}
		}

		$template = apply_filters('btn/post/template/path', $template, $filename, $directory_name);
		if ( ! is_file($template) )	{
			if ( is_admin() ) {
				$notice = __('File not found in any of the following locations :', 'btn-dr');
				$notice .= '<ul>';
				foreach ($not_found as $path) {
					$notice .= "<li>{$path}</li>";
				}
				$notice .= '</ul>';
				return $this->admin_error_msg($notice);
			}
			else{
				return false;
			}
		}
		else{
			return $template;
		}
	}

	// Text Domain
	function load_text_domain(){
		load_plugin_textdomain('btn-dr', false, BTN_BRIEFING_DIR . '/languages' );
	}

  // Write Log
  function write_log( $log, $print = false ){
      $error_log = ( is_array( $log ) || is_object( $log ) ) ? print_r( $log, true ) : $log;
      if($print){
          return '<pre>'.$error_log.'</pre>';
      }
      else{
          error_log($error_log);
      }
  }

  /**
	 * Get acf custom field
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function get_field($field, $id, $default = ''){
	    if($this->acf){
	        if($this->get_field){
	            return get_field($field, $id);
	        }
	    }
	    else {
	        return  get_metadata('post', $id , $field, true);
	    }
	 }

	 /**
	  * Get acf Repeater
	  * @param string $repeater
	  * @param int $return = repeater count
	  */
	 public function get_repeater($repeater = ''){
	     $return = false;
	     if($this->acf){
	         $repeater = esc_attr($repeater);
	         if( $repeater > '' ){
	             $rows = get_field($repeater);
	             if( is_array($rows) || is_object($rows) ){
	                 if( count($rows) > 0 ){
	                     $return = $rows;
	                 }
	             }
	         }
	     }
	     return $return;
	 }


	 //Plugin Activation
	  function register_activation_hooks(){
		  register_activation_hook(BTN_BRIEFING_PLUGIN,  [$this, 'plugin_activated']);
	  }

	 public static function plugin_activated(){
		 self::create_database_tables();

	 }


	 /**
 	 * Create DB Tables
 	*/
 	private static function create_database_tables() {
  		global $wpdb;

 		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
         // License
         $table_name = $wpdb->prefix . 'hidden_briefings_list';
		 $sql = "CREATE TABLE {$table_name} (
		        id INT(11) NOT NULL AUTO_INCREMENT,
		        agency_id INT(11) NOT NULL,
		        type VARCHAR(32) NOT NULL,
		        value INT(11) NOT NULL,
		        PRIMARY KEY (id)
		    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
         dbDelta( $sql );


		 $table_items = $wpdb->prefix . 'assigned_training_items';
		$sql_items = "CREATE TABLE {$table_items} (
		    id INT(11) NOT NULL AUTO_INCREMENT,
		    training_id INT(11) NOT NULL,                  -- post ID of block/category
		    training_type VARCHAR(20) NOT NULL,            -- 'block' or 'category'
		    assigned_to INT(11) NOT NULL,
		    assigned_type VARCHAR(20) NOT NULL,            -- 'station', 'agency', or 'user'
		    assigned_by INT(11) NOT NULL,
		    assigned_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
			status VARCHAR(20) NOT NULL,
		    PRIMARY KEY (id),
		    KEY training_id (training_id),
		    KEY assigned_to (assigned_to),
		    KEY training_type (training_type)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
		dbDelta($sql_items);

		$table_status = $wpdb->prefix . 'assigned_training_status';
		$sql_status = "CREATE TABLE {$table_status} (
		    id INT(11) NOT NULL AUTO_INCREMENT,
		    assignment_id INT(11) NOT NULL,             -- FK to assigned_training_items.id
		    user_id INT(11) NOT NULL,
		    status VARCHAR(20) NOT NULL DEFAULT 'incomplete',  -- or 'complete'
		    completed_at DATETIME DEFAULT NULL,
		    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
		    PRIMARY KEY (id),
		    UNIQUE KEY user_assignment (assignment_id, user_id),
		    KEY status (status),
		    KEY user_id (user_id)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
		dbDelta($sql_status);
		
		$table_policy = $wpdb->prefix . 'agency_policy';
		$sql_policy = "CREATE TABLE {$table_policy} (
			id INT(11) NOT NULL AUTO_INCREMENT,
			agency_id INT(11) NOT NULL,       -- FK to agencies.id
			link VARCHAR(255) NOT NULL,       -- URL or link to the policy document
			last_updated DATETIME NOT NULL,   -- Timestamp for the last update
			updated_by INT(11) NOT NULL,      -- User ID of the person who updated
			PRIMARY KEY (id),
			KEY agency_id (agency_id),
			KEY updated_by (updated_by),
			KEY last_updated (last_updated)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
		dbDelta($sql_policy);
 	}


    // Singleton Instance
  private function __construct(){}
	public static function get_instance() {
        static $instance = null;
        if ( is_null( $instance ) ) {
            $instance = new self;
        }
        return $instance;
    }

}
