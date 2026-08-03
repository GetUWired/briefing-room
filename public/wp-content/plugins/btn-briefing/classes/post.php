<?php
if (! defined('ABSPATH')) {
	header('HTTP/1.0 403 Forbidden');
	die();
}

/**
 * CPT Class
 *
 * @since      1.0.0
 * @package    btn-briefing
 * @subpackage btn-briefing/classes
 * @author     Augustus Villanueva <augustus@businesstechninjas.com>
 */
final class btn_briefing_post {

		function register() {
		//Taxonomy
	    $taxonomy_args = [
	        'labels'            	=>  [
	            'name'          =>  __( 'Categories', 'btn-briefing' ),
	            'singular_name' =>  __( 'Category', 'btn-briefing' ),
						'add_new' 				=> _x( 'Add New', 'Category', 'btn-briefing' ),
		    			'add_new_item' 			=> __( 'Add New Category ', 'btn-briefing' ),
		    			'edit_item' 			=> __( 'Edit Category ', 'btn-briefing' ),
		    			'new_item' 				=> __( 'New Category  ', 'btn-briefing' ),
		    			'view_item' 			=> __( 'View Category ', 'btn-briefing' ),
		    			'search_items' 			=> __( 'Search Category ', 'btn-briefing' ),
		    			'not_found' 			=> __( 'Nothing found', 'btn-briefing' ),
		    			'not_found_in_trash'	=> __( 'Nothing found in Trash', 'btn-briefing' ),
	        ],
				'hierarchical' => true,
			    'show_ui' => true,
			    'show_admin_column' => true,
			    'query_var' => true,
			    'rewrite' => [
						'slug' => 'briefing-category',
				],
	    ];
		  register_taxonomy( self::TAX_SLUG, self::POST_SLUG, $taxonomy_args );
		   // post Post Type
		  $post_args = [
				'labels' 				=> [
						'name'								=> _x( 'Briefing','Essential Oils  general name', 'btn-briefing' ),
						'singular_name' 			=> _x( 'Briefing', 'Essential Oils singular name', 'btn-briefing' ),
						'add_new' 						=> _x( 'Add New', 'Briefing ', 'btn-briefing' ),
						'add_new_item' 				=> __( 'Add Briefing', 'btn-briefing' ),
						'edit_item' 					=> __( 'Edit Briefing ', 'btn-briefing' ),
						'new_item' 						=> __( 'New Briefing', 'btn-briefing' ),
						'view_item' 					=> __( 'View Briefing', 'btn-briefing' ),
						'search_items' 				=> __( 'Search Briefing', 'btn-briefing' ),
						'not_found' 					=> __( 'Nothing found', 'btn-briefing' ),
						'not_found_in_trash'	=> __( 'Nothing found in Trash', 'btn-briefing' ),
					],
				'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'show_in_nav_menus'   => true,
         'show_in_admin_bar'   => true,
         'menu_position'       => 5,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
		 'rest_base' => 'tag',
         'publicly_queryable'  => true,
			  'rewrite' => [
				  'slug' => 'briefing',
			  ],
         'capability_type'     => 'post',
				'menu_icon'					=> 'dashicons-format-video',
				'supports'          => ['title', 'excerpt', 'author', 'thumbnail', 'editor','comments', 'revisions' ],
			];

			register_post_type( self::POST_SLUG, $post_args );

			// post Post Type
		   $author_args = [
				 'labels' 				=> [
						 'name'								=> _x( 'Briefing Author','Essential Oils  general name', 'btn-briefing' ),
						 'singular_name' 			=> _x( 'Briefing Author', 'Essential Oils singular name', 'btn-briefing' ),
						 'add_new' 						=> _x( 'Add New', 'Briefing  Author ', 'btn-briefing' ),
						 'add_new_item' 				=> __( 'Add Briefing  Author', 'btn-briefing' ),
						 'edit_item' 					=> __( 'Edit Briefing  Author ', 'btn-briefing' ),
						 'new_item' 						=> __( 'New Briefing  Author', 'btn-briefing' ),
						 'view_item' 					=> __( 'View Briefing  Author', 'btn-briefing' ),
						 'search_items' 				=> __( 'Search Briefing  Author', 'btn-briefing' ),
						 'not_found' 					=> __( 'Nothing found', 'btn-briefing' ),
						 'not_found_in_trash'	=> __( 'Nothing found in Trash', 'btn-briefing' ),
					 ],
				 'hierarchical'        => false,
		  'public'              => true,
		  'show_ui'             => true,
		  'show_in_menu'        => true,
		  'show_in_nav_menus'   => true,
		  'show_in_admin_bar'   => true,
		  'menu_position'       => 5,
		  'can_export'          => true,
		  'has_archive'         => true,
		  'exclude_from_search' => false,
		  'rest_base' => 'tag',
		  'publicly_queryable'  => true,
			   'rewrite' => [
				   'slug' => 'briefing-author',
			   ],
		  'capability_type'     => 'post',
				 'menu_icon'					=> 'dashicons-admin-users',
				 'supports'          => ['title', 'excerpt', 'author', 'thumbnail', 'editor','comments', 'revisions' ],
			 ];

			// register_post_type( self::AUTHOR_SLUG, $author_args );



	 }

  function get_post_slug(){
      return self::POST_SLUG;
  }
  function get_taxonomy_slug(){
			return self::TAX_SLUG;
  }


	// Check for custom single page template in theme or load default
	static function single_template( $template, $type, $templates ){
		$slug = self::POST_SLUG;
		if( is_singular( $slug ) ) {
			$file = "single-{$slug}.php";
			// Theme does not have Single Post Template
			if( basename($template) != $file ){
				$template_file = btn_briefing()->template_part_path($file);
				if( $template_file ){
					if( basename($template_file) === $file ){
						$template = $template_file;
					}
				}
			}
		}
		return $template;
	}
	function __construct(){}

    const POST_SLUG = 'briefing';
	const AUTHOR_SLUG = 'briefing-author';
    const TAX_SLUG =  'briefing-category';


}


function memb_get_restricted_term_ids_for_user() {
    static $cache;
    
	if (isset($cache)) {
        return $cache;
    }

    $restricted = [];


	$taxonomy = 'briefing-category';

    $terms = get_terms([
        'taxonomy'   => $taxonomy,
        'hide_empty' => false,
        'meta_query' => [
            [
                'key'     => '_wpal/taxonomy/access',
                'compare' => 'EXISTS',
            ],
        ],
    ]);

    foreach ($terms as $term) {

        $access = get_term_meta($term->term_id, '_wpal/taxonomy/access', true);


        if (empty($access) || !is_array($access)) {
            continue;
        }

        // Skip unprotected terms
        if (empty($access['status']) || $access['status'] !== '1') {
            continue;
        }

        // If user DOES NOT meet term requirements → restrict it
        if (!memb_hasTermAccess($term->term_id, $taxonomy)) {
            $restricted[] = $term->term_id;
        }
    }

    return $cache = array_unique($restricted);
}



add_action('pre_get_posts', function (\WP_Query $query) {

    if (is_admin()) {
        return;
    }

    $restricted_terms = memb_get_restricted_term_ids_for_user();
    
    if (empty($restricted_terms)) {
        return;
    }

    $tax_query = (array) $query->get('tax_query');
    $post_type = $query->get('post_type') ?: 'post';

    foreach (get_object_taxonomies($post_type) as $taxonomy) {
        $tax_query[] = [
            'taxonomy' => $taxonomy,
            'field'    => 'term_id',
            'terms'    => $restricted_terms,
            'operator' => 'NOT IN',
        ];
    }

    $query->set('tax_query', $tax_query);

});