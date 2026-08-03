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

final class m4is_55b162xby {
static $m4is_26y2cz6p9gf = false;
public static function reset_app() {
self::m4is_j6w7fe2cd208();
self::m4is_k1jsqg70waj54bxa5dtqs5etwpzewmy();

self::m4is_hzp1vn0892();
self::m4is_ndynywykwq9qaze59h7jw1187z7j541f();
self::m4is_rgs8xkvqphgqr9zrqrm3h0s();
}

private static function m4is_j6w7fe2cd208() {
echo '<strong>Clearing i2SDK</strong><br />';

if ( self::$m4is_26y2cz6p9gf ) {
self::m4is_2817aks3gykbkqws61z2zrdz( 'i2sdk' );
}
else {
echo 'Deleting i2sdk<br />';
}
}



private static function m4is_k1jsqg70waj54bxa5dtqs5etwpzewmy() {
echo '<strong>Clearing User Meta</strong><br />';

$m4is_1m6k5zj4yv598ftpkvvtcde2 = [
'infusionsoft_user_id',
'm4is/%',
'memb\_%',
'memberium%',
];
foreach ( $m4is_1m6k5zj4yv598ftpkvvtcde2 as $m4is_fsedke71q5qj768dkg6rqmhr ) {
$m4is_0kdm2zprhs5b1 = self::m4is_e1znm9jnnwd7m( $m4is_fsedke71q5qj768dkg6rqmhr );

foreach( $m4is_0kdm2zprhs5b1 as $m4is_pk98f5nk ) {
if ( self::$m4is_26y2cz6p9gf ) {
delete_user_meta( $m4is_pk98f5nk['user_id'], $m4is_pk98f5nk['meta_key'] );

}
else {
printf( 'User Meta - %d = %s<br />', $m4is_pk98f5nk['user_id'], $m4is_pk98f5nk['meta_key'] );
}
}
}
}
private static function m4is_e1znm9jnnwd7m( $m4is_fsedke71q5qj768dkg6rqmhr ) : array {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( 'SELECT `user_id`, `meta_key` FROM %i WHERE `meta_key` LIKE %s', $wpdb->usermeta, $m4is_fsedke71q5qj768dkg6rqmhr );

$m4is_0kdm2zprhs5b1 = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
return $m4is_0kdm2zprhs5b1;
}



private static function m4is_hzp1vn0892() {
echo '<strong>Clearing Postmeta</strong><br />';

$m4is_1m6k5zj4yv598ftpkvvtcde2 = [
'_is4wp_%',
'_memberium_%',
];
foreach ( $m4is_1m6k5zj4yv598ftpkvvtcde2 as $m4is_fsedke71q5qj768dkg6rqmhr ) {
$m4is_0kdm2zprhs5b1 = self::m4is_syffsa3mk98dsyya0zvec3q2xq8( $m4is_fsedke71q5qj768dkg6rqmhr );

foreach( $m4is_0kdm2zprhs5b1 as $m4is_pk98f5nk ) {
if ( self::$m4is_26y2cz6p9gf ) {
delete_post_meta( $m4is_pk98f5nk['post_id'], $m4is_pk98f5nk['meta_key'] );

}
else {
printf( 'Post Meta - %d = %s<br />', $m4is_pk98f5nk['post_id'], $m4is_pk98f5nk['meta_key'] );
}
}
}
}
private static function m4is_syffsa3mk98dsyya0zvec3q2xq8( $m4is_fsedke71q5qj768dkg6rqmhr ) : array {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( 'SELECT `post_id`, `meta_key` FROM %i WHERE `meta_key` LIKE %s', $wpdb->postmeta, $m4is_fsedke71q5qj768dkg6rqmhr );

$m4is_0kdm2zprhs5b1 = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
return $m4is_0kdm2zprhs5b1;
}




private static function m4is_ndynywykwq9qaze59h7jw1187z7j541f() {
echo '<strong>Clearing Options</strong><br />';

$m4is_1m6k5zj4yv598ftpkvvtcde2 = [
'i2sdk',
'memberium%',
];
foreach ( $m4is_1m6k5zj4yv598ftpkvvtcde2 as $m4is_fsedke71q5qj768dkg6rqmhr ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36 = self::m4is_rgqg6k8km25kxrfajs3n1rh8vhwzdy( $m4is_fsedke71q5qj768dkg6rqmhr );

foreach( $m4is_ra7dnjjzebn9h3t6k7a2p36 as $m4is_xc0wh8hch3 ) {
if ( self::$m4is_26y2cz6p9gf ) {
self::m4is_2817aks3gykbkqws61z2zrdz( $m4is_xc0wh8hch3 );

}
else {
printf( 'Deleting Option - %s<br />', $m4is_xc0wh8hch3 );
}
}
}
}
private static function m4is_rgqg6k8km25kxrfajs3n1rh8vhwzdy( $m4is_fsedke71q5qj768dkg6rqmhr ) : array {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( 'SELECT `option_name` FROM %i WHERE `option_name` LIKE %s', $wpdb->options, $m4is_fsedke71q5qj768dkg6rqmhr );

$m4is_ra7dnjjzebn9h3t6k7a2p36 = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
return $m4is_ra7dnjjzebn9h3t6k7a2p36;
}
private static function m4is_2817aks3gykbkqws61z2zrdz( $m4is_6fdcfh260c7q5 ) {
update_option( $m4is_6fdcfh260c7q5,
 '', false );
delete_option( $m4is_6fdcfh260c7q5 );
}

private static function m4is_ebqp7vkv6n5w() : array {
$m4is_zwfcrtzjzg = get_option( 'memberium_tables',
 [] );
$m4is_zwfcrtzjzg = is_array( $m4is_zwfcrtzjzg ) ? $m4is_zwfcrtzjzg : [];
return $m4is_zwfcrtzjzg;
}




private static function m4is_rgs8xkvqphgqr9zrqrm3h0s() {
global $wpdb;

$m4is_zwfcrtzjzg = self::m4is_ebqp7vkv6n5w();
foreach( $m4is_zwfcrtzjzg as $m4is_csnk3yn47 ) {
if ( self::$m4is_26y2cz6p9gf ) {
$wpdb->query( $wpdb->prepare( "DROP TABLE IF EXISTS %i",
 $m4is_csnk3yn47 ) );
}
else {
printf( 'Dropping Table - %s<p>', $m4is_csnk3yn47 );
}
}
}
}