<?php
/**
 * Proprietary Software - All Rights Reserved
 *
 * This file is part of the Memberium plugin, which is proprietary software developed by Web Power and Light.
 * Unauthorized copying, distribution, or modification of this file, via any medium, is strictly prohibited.
 *
 * Copyright (c) 2012-2026 David J Bullock
 * Web Power and Light
 *
 * For licensing information, please contact Web Power and Light.
 */


class_exists( 'm4is_6y9612z4hjd6fzpap4r5n853641m1jc' ) || die();

final class m4is_vazfzbe3bst3rrc5 {
private static string $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;
public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ntqtf6bzbshxjenctjt4zp1();

}

public static function m4is_a6zhb2rch4cda9ewj6nqh8cecdr() : void {
self::m4is_5ny0e4ahkew8sgztq();
self::m4is_gtqg2q18cmns66zb9jphwqhyc();

add_filter( 'et_builder_post_types', ['m4is_vazfzbe3bst3rrc5', 'm4is_jrr5tez3jtq9ke1mqg1'] );
}
private static function m4is_ks535hwnwexc4kc( bool $m4is_r7mxjxrgcx,
 string $m4is_yhdk2h7srcr7n5mzjnw7m6b ) : bool {
$m4is_r7mxjxrgcx = (bool) apply_filters( 'memberium/cpt/is_public', $m4is_r7mxjxrgcx,
 $m4is_yhdk2h7srcr7n5mzjnw7m6b );
return $m4is_r7mxjxrgcx;
}

private static function m4is_5ny0e4ahkew8sgztq() {
$m4is_5ypbz942n9b1cjyr = self::m4is_ks535hwnwexc4kc( false,
 'memb_shortcodeblocks' );
$m4is_t2hesz8vr8xa004s2my73gx708dqv4d8 = [
'name' => _x( 'Custom Shortcodes', 'post type general name', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

'singular_name' => _x( 'Custom Shortcode', 'post type singular name', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'menu_name' =>
 _x( 'Custom Shortcodes', 'admin menu', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'name_admin_bar' => _x( 'Custom Shortcode', 'add new on admin bar',
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'add_new' => _x( 'Add New', 'book', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'add_new_item' =>
 __( 'Add New Custom Shortcode', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'new_item' => __( 'New Custom Shortcode', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

'edit_item' => __( 'Edit Custom Shortcode', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'view_item' => __( 'View Custom Shortcode',
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'all_items' => __( 'All Custom Shortcodes', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

'search_items' => __( 'Search Custom Shortcodes', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'parent_item_colon' => __( 'Parent Custom Shortcodes:',
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'not_found' => __( 'No custom shortcodes found.', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

'not_found_in_trash' => __( 'No custom shortcodes found in Trash.', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
];
$m4is_8q6v6gfsdv7htksgqed1d1zeaphnwq = [
'title',

'editor',
];
$m4is_bzfzm0g7yp88rct2 = [
'category',
];
$m4is_g61yzqs7ecta0xztr70d7v = [
'can_export' => true,
'capability_type' =>
 'post',
'description' => 'Custom Shortcodes',
'exclude_from_search' => true,
'labels' => $m4is_t2hesz8vr8xa004s2my73gx708dqv4d8,
'menu_position' =>
 21,
'public' => $m4is_5ypbz942n9b1cjyr,
'show_in_admin_bar' => false,
'show_in_menu' => false,
'show_in_nav_menus' => false,
'show_ui' =>
 true,
'supports' => $m4is_8q6v6gfsdv7htksgqed1d1zeaphnwq,
'taxonomies' => $m4is_bzfzm0g7yp88rct2,
];
register_post_type( 'memb_shortcodeblocks',
 $m4is_g61yzqs7ecta0xztr70d7v );
}

private static function m4is_gtqg2q18cmns66zb9jphwqhyc() {
$m4is_5ypbz942n9b1cjyr = self::m4is_ks535hwnwexc4kc( false,
 'partials' );
$m4is_t2hesz8vr8xa004s2my73gx708dqv4d8 = [
'name' => _x( 'Partials', 'post type general name', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

'singular_name' => _x( 'Partial', 'post type singular name', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'menu_name' => _x( 'Partials',
 'admin menu', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'name_admin_bar' => _x( 'Partial', 'add new on admin bar', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

'add_new' => _x( 'Add New', 'book', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'add_new_item' => __( 'Add New Partial', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

'new_item' => __( 'New Partial', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'edit_item' => __( 'Edit Partial', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

'view_item' => __( 'View Partial', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'all_items' => __( 'All Partials', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

'search_items' => __( 'Search Partials', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'parent_item_colon' => __( 'Parent Partials:',
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
'not_found' => __( 'No partials found.', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

'not_found_in_trash' => __( 'No partials found in Trash.', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
];
$m4is_8q6v6gfsdv7htksgqed1d1zeaphnwq = [
'title',

'editor',
'revisions',
'excerpt',
];
$m4is_g61yzqs7ecta0xztr70d7v = [
'can_export' => true,
'capability_type' => 'post',
'description' =>
 'Content Snippets for Memberium Membership System',
'exclude_from_search' => true,
'labels' => $m4is_t2hesz8vr8xa004s2my73gx708dqv4d8,

'menu_position' => 20,
'public' => $m4is_5ypbz942n9b1cjyr,
'show_in_admin_bar' => false,
'show_in_menu' => false,
'show_in_nav_menus' =>
 false,
'show_ui' => true,
'supports' => $m4is_8q6v6gfsdv7htksgqed1d1zeaphnwq,
];
register_post_type( 'partials', $m4is_g61yzqs7ecta0xztr70d7v );

}

static function m4is_jrr5tez3jtq9ke1mqg1( $m4is_zpbgfgfkqf2c4ast12shxs8gthy ) {
$m4is_aknpr9v3vh6aq = [
'partials',
'memb_shortcodeblocks',

];
$m4is_zpbgfgfkqf2c4ast12shxs8gthy = array_merge( $m4is_zpbgfgfkqf2c4ast12shxs8gthy, $m4is_aknpr9v3vh6aq );
return $m4is_zpbgfgfkqf2c4ast12shxs8gthy;

}
}