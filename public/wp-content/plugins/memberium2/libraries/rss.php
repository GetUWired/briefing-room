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

final class m4is_8cw98mp72zyj4wx2kqhny4bcv90 {
private static $m4is_k0wtakbfewa844hzqexh1hv13fsw71r;
private static $m4is_132xe588j;




public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64(): void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_k0wtakbfewa844hzqexh1hv13fsw71r = 'memberium/rss_user_id';
}
private function __construct() {}




public static function m4is_wns62xcz9jrsegbsf67(int $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0): void {
global $wpdb;

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_wk4dh1rnd3wmwvsggq51nhn87 ? $m4is_wk4dh1rnd3wmwvsggq51nhn87 : self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

if (! $m4is_wk4dh1rnd3wmwvsggq51nhn87) {
return;
}
$m4is_1we1qc8rdsrfq = false;
do {
$m4is_z95y0pbt3mvn5efby69e8g1dzcqk = wp_generate_password(18,
 false, false);
if (! self::m4is_4wpvr2syq62d76tx9ye($m4is_z95y0pbt3mvn5efby69e8g1dzcqk) ) {

$m4is_zxa05fq9f81p8g = self::$m4is_k0wtakbfewa844hzqexh1hv13fsw71r;

$m4is_j8j55t8dz79m7 = self::$m4is_k0wtakbfewa844hzqexh1hv13fsw71r . '/' . $m4is_z95y0pbt3mvn5efby69e8g1dzcqk;
update_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_j8j55t8dz79m7, $m4is_z95y0pbt3mvn5efby69e8g1dzcqk);
update_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87, self::$m4is_k0wtakbfewa844hzqexh1hv13fsw71r,
 $m4is_z95y0pbt3mvn5efby69e8g1dzcqk);
$m4is_1we1qc8rdsrfq = true;
}
}
while ( $m4is_1we1qc8rdsrfq == false );

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `{$wpdb->usermeta}` WHERE `user_id` = %d AND `meta_key` <> %s AND ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_j8j55t8dz79m7);
$m4is_5rbenkpt1v7xby2cknbs7 .= " `meta_key` LIKE '{$m4is_zxa05fq9f81p8g}%' ";

$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
do_action('memberium/rssid/set', $m4is_wk4dh1rnd3wmwvsggq51nhn87);
}

public static function m4is_wqy1ddbpgk5qf6z8xk2bddwnqgc(): void {
add_action('do_feed_atom_comments',
 [__CLASS__, 'm4is_yg06va0zwnh6m0bs5327q'], 1);
add_action('do_feed_atom', [__CLASS__, 'm4is_yg06va0zwnh6m0bs5327q'], 1);
add_action('do_feed_rdf',
 [__CLASS__, 'm4is_yg06va0zwnh6m0bs5327q'], 1);
add_action('do_feed_rss', [__CLASS__, 'm4is_yg06va0zwnh6m0bs5327q'], 1);
add_action('do_feed_rss2_comments',
 [__CLASS__, 'm4is_yg06va0zwnh6m0bs5327q'], 1);
add_action('do_feed_rss2', [__CLASS__, 'm4is_yg06va0zwnh6m0bs5327q'], 1);
add_action('do_feed',
 [__CLASS__, 'm4is_yg06va0zwnh6m0bs5327q'], 1);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links',
 2);
remove_action('wp', 'bp_activity_action_favorites_feed', 3);
remove_action('wp', 'bp_activity_action_friends_feed', 3);
remove_action('wp',
 'bp_activity_action_mentions_feed', 3);
remove_action('wp', 'bp_activity_action_my_groups_feed', 3);
remove_action('wp', 'bp_activity_action_personal_feed',
 3);
remove_action('wp', 'bp_activity_action_sitewide_feed', 3);
remove_action('wp', 'groups_action_group_feed', 3);
}

public static function m4is_9q3xqeftztec1ydnvgdcem78r73crj31(array $m4is_pbe6ph2dd0rk,
 WP_Query $m4is_j34bmw9dcjexfj1qpz ): array {
if ( ! is_feed() ) {
return $m4is_pbe6ph2dd0rk;
}
$m4is_0w6vea3fv8rarynr5dc = isset( $_GET['rss_user'] ) ? $_GET['rss_user'] : '';

if ( ! $m4is_0w6vea3fv8rarynr5dc ) {
return $m4is_pbe6ph2dd0rk;
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) self::m4is_4wpvr2syq62d76tx9ye( $m4is_0w6vea3fv8rarynr5dc );

if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return $m4is_pbe6ph2dd0rk;
}
if ( wp_set_current_user( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {

do_action( 'memberium/rssid/rsslogin/',
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
return $m4is_pbe6ph2dd0rk;
}

public static function m4is_c4v0rz2xnh9fbnkgy82x32( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_wk4dh1rnd3wmwvsggq51nhn87 ? $m4is_wk4dh1rnd3wmwvsggq51nhn87 : self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

if ($m4is_wk4dh1rnd3wmwvsggq51nhn87) {
$m4is_z95y0pbt3mvn5efby69e8g1dzcqk = get_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87, self::$m4is_k0wtakbfewa844hzqexh1hv13fsw71r,
 true);
global $wpdb;
$m4is_zxa05fq9f81p8g = self::$m4is_k0wtakbfewa844hzqexh1hv13fsw71r;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `meta_value` FROM `{$wpdb->usermeta}` WHERE `user_id` = %d AND ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_wk4dh1rnd3wmwvsggq51nhn87);
$m4is_5rbenkpt1v7xby2cknbs7 .= " `meta_key` LIKE '{$m4is_zxa05fq9f81p8g}/%' ORDER BY `umeta_id` ASC LIMIT 1";

$m4is_j9bvtm2229gdvmv3xxyv4g56 = $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
if (empty($m4is_j9bvtm2229gdvmv3xxyv4g56) ) {
$m4is_j9bvtm2229gdvmv3xxyv4g56 = self::m4is_wns62xcz9jrsegbsf67($m4is_wk4dh1rnd3wmwvsggq51nhn87);

}
}
if ($m4is_j9bvtm2229gdvmv3xxyv4g56) {
return $m4is_j9bvtm2229gdvmv3xxyv4g56;
}
return false;
}
public static function m4is_80eypgtsm2yyps($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = null) {
global $wpdb;

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (is_object($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) && get_class($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) == 'WP_User') ? $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID : (int) $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65;

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = ($m4is_wk4dh1rnd3wmwvsggq51nhn87) ? $m4is_wk4dh1rnd3wmwvsggq51nhn87 : self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return false;
}
$m4is_zxa05fq9f81p8g = self::$m4is_k0wtakbfewa844hzqexh1hv13fsw71r;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "DELETE FROM %i WHERE `user_id` = %d AND ",
 $wpdb->usermeta, $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) . " `meta_key` LIKE '{$m4is_zxa05fq9f81p8g}/%' ";
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);

do_action( 'memberium/rssid/reset/', $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
return true;
}
private static function m4is_4wpvr2syq62d76tx9ye($m4is_0w6vea3fv8rarynr5dc = '') {
global $wpdb;

$m4is_0w6vea3fv8rarynr5dc = sanitize_text_field($m4is_0w6vea3fv8rarynr5dc);
$m4is_j8j55t8dz79m7 = self::$m4is_k0wtakbfewa844hzqexh1hv13fsw71r . '/' . $m4is_0w6vea3fv8rarynr5dc;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `user_id` FROM `{$wpdb->usermeta}` WHERE `meta_key` = %s AND `meta_value` = %s ORDER BY `user_id` ASC LIMIT 1";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_j8j55t8dz79m7, $m4is_0w6vea3fv8rarynr5dc);
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);

return $m4is_wk4dh1rnd3wmwvsggq51nhn87;
}
public static function m4is_yg06va0zwnh6m0bs5327q() {
$m4is_g61yzqs7ecta0xztr70d7v = [
'response' =>
 403,
'code' => __('Public RSS Feed Unavailable'),
'exit' => true,
];
wp_die( __('No feed available, please visit our homepage.'), __('Access Denied'),
 $m4is_g61yzqs7ecta0xztr70d7v );
}
}
