<?php
/**
 * Plugin Name: Chart Css
 * Version: 1.0.0
 * Plugin URI: http://getuwired.com/
 * Description: Sets up the css chart table generator
 * Author: GetUwired
 * Author URI: http://www./getuwired.com/
 *
 * Text Domain: briefingroom
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author GetUwired
 * @since 1.0.0
 */


require_once('functions.php');
require_once('chartcss.php');
require_once('chart-data.php');
require_once('includes/sessions-charts.php');
require_once('includes/userstats-charts.php');
require_once('includes/records-dashboard.php');

// chartscss
 function chartcss_custom_scripts() {
    
    // chartscss	
	wp_enqueue_style( 'chartcss', plugin_dir_url( __FILE__ ) . 'charts.css', array(), '1.0.0' );
	
	wp_enqueue_style( 'custom-chartcss', plugin_dir_url( __FILE__ ) . 'chartcss-custom-styles.css', array('chartcss'), time() );

	wp_enqueue_script( 'chartcssjs', plugin_dir_url( __FILE__ ) . 'chartcss.js', array('jquery'), time(), true );

}
add_action( 'wp_enqueue_scripts', 'chartcss_custom_scripts' );




// CSV EXPORT FUNCTIONS

function return_csv_download($array_data, $filename){

	header('Content-Type: text/csv'); // you can change this based on the file type
	header('Content-Disposition: attachment; filename="' . $filename . '"');

	$out = fopen('php://output', 'w');
	foreach($array_data as $row){
		fputcsv($out, $row);
	}
	fclose($out);
}
  
function process_csv_post_data( $post_data, $post_meta_fields = array() ){


	// $post_meta_fields = array(
	// );
	

	$out = array();

	// @TODO - use data structure which combines titles and the functions to generate
	//       - the data for the column.
	$titles = array('title', 'date', 'modified_date', 'content');

	foreach($post_meta_fields as $key => $value) {
		$titles[] = $key;
	}

	$taxonomies = array();

	// foreach($taxonomies as $taxonomy) {
	// 	$titles[] = $taxonomy;
	// }

	array_push($out, $titles);

	foreach($post_data as $post_id) {

		$single_post = get_post( $post_id );

		$single_post_meta = get_post_meta( $post_id );

		$row = array(
			$single_post->post_title,
			$single_post->post_date,
			$single_post->post_modified,
			$single_post->post_content,
		);

		foreach ($post_meta_fields as $key => $value) {	
			$row[] = $single_post_meta[$key][0];
		}

		foreach ($taxonomies as $taxonomy) {

			$post_terms = wp_get_post_terms($post_id, $taxonomy);

			// Extract the name from each object
			$names = array_map(function($term) {
				return $term->name;
			}, $post_terms);

			// Convert to comma-separated string
			$nameString = implode(', ', $names);

			$row[] = $nameString;
		}


		array_push($out, $row);
	}

	return_csv_download($out, "posts.csv");

	// echo 'out<pre>';
	// print_r( $out );
	// echo '</pre>';

}

function get_user_station_by_agency($agency_id) {
	global $wpdb;

	//REMOVE AFTER TESTING - TEMPORARY FIX TO ALLOW ADMIN TO SEE STATIONS
	// if( empty($agency_id) && current_user_can('administrator')) {
    //     $agency_id = 33;
    // }
	if( empty($agency_id)) {
		return [];
	}

	$stations_table = $wpdb->prefix . 'btn_stations';
	if ($agency_id) {
		$results = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT id, `name` FROM $stations_table WHERE agencyId = %d",
				$agency_id
			)
		);
		return $results;
	}

	return [];
}