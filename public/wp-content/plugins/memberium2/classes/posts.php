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

final class m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4 {

function __construct() {
}

private static function m4is_jb30nkrbzfq3() : array {
$m4is_xq8a8kwspkheej40jh0sthk9zn2s = defined( 'MEMBERIUM_SKU' ) ? constant( 'MEMBERIUM_SKU' ) : '';

if ( $m4is_xq8a8kwspkheej40jh0sthk9zn2s == 'm4is' ) {
$m4is_sv4jqr1nqajr3a = [
'access_tags' => '_is4wp_access_tags',
'access_tags2' =>
 '_is4wp_access_tags2',
'anonymous_only' => '_is4wp_anonymous_only',
'any_loggedin_user' => '_is4wp_any_loggedin_user',
'any_membership' =>
 '_is4wp_any_membership',
'can_comment' => '_is4wp_can_comment',
'commenter_action' => '_is4wp_commenter_action',
'commenter_goal' =>
 '_is4wp_commenter_goal',
'commenter_tag' => '_is4wp_commenter_tag',
'contact_ids' => '_is4wp_contact_ids',
'custom_code' => '_iswp_custom_code',

'discourage_cache' => '_is4wp_discourage_cache',
'facebook_crawler' => '_is4wp_facebook_crawler',
'force_public' => '_is4wp_force_public',

'google_1st_click' => '_is4wp_google_1stclick',
'hide_from_menu' => '_is4wp_hide_from_menu',
'memberships' => '_is4wp_membership_levels',

'private_comments' => '_is4wp_private_comments',
'prohibited_action' => '_is4wp_prohibited_action',
'redirect_url' => '_is4wp_redirect_url',

];
}
elseif ( $m4is_xq8a8kwspkheej40jh0sthk9zn2s == 'm4ac' ) {
$m4is_sv4jqr1nqajr3a = [];
}
return $m4is_sv4jqr1nqajr3a;
}
static function m4is_snv9yqj539vh88gtr( int $m4is_tz1rt7sbq40fade6e6rx ) : array {
$m4is_sv4jqr1nqajr3a = self::m4is_jb30nkrbzfq3();

$m4is_0kdm2zprhs5b1 = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx );
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = false;
if ( is_array( $m4is_0kdm2zprhs5b1 ) && ! empty( $m4is_0kdm2zprhs5b1 ) ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = [];

foreach ( $m4is_sv4jqr1nqajr3a as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp ) {
if ( isset( $m4is_0kdm2zprhs5b1[$m4is_29gzevpx8rbkp][0] ) ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_bqhtspcavhb01spmfd3x] = $m4is_0kdm2zprhs5b1[$m4is_29gzevpx8rbkp][0];

}
}
}
return $m4is_8ew58cpxmftgpw93gdffm4s9bbwy;
}
static function m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt( int $m4is_tz1rt7sbq40fade6e6rx = 0,
 $m4is_nab4fbybdg04ebj55s6 = [], $m4is_rqxytszfq5v6syth1csqqxvy5 = null ) {
if ( empty( $m4is_nab4fbybdg04ebj55s6 ) || empty( $m4is_tz1rt7sbq40fade6e6rx ) ) {
return false;

}
if ( ! current_user_can( 'edit_post', $m4is_tz1rt7sbq40fade6e6rx ) ) {
return false;
}
if ( is_string( $m4is_nab4fbybdg04ebj55s6 ) ) {
$m4is_nab4fbybdg04ebj55s6 = [
$m4is_nab4fbybdg04ebj55s6 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5,
];
}
$m4is_g1cawg78m514094hr10zbgyv = [
'any_loggedin_user',
'any_membership',
'facebook_crawler',

'google_1st_click',
'hide_completely',
'hide_from_menu',
'private_comments',
];
$m4is_sv4jqr1nqajr3a = self::m4is_jb30nkrbzfq3();

foreach( $m4is_nab4fbybdg04ebj55s6 as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( array_key_exists( $m4is_j8j55t8dz79m7, $m4is_sv4jqr1nqajr3a ) ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = array_key_exists( $m4is_j8j55t8dz79m7,
 $m4is_g1cawg78m514094hr10zbgyv ) ? (int) (bool) trim( $m4is_rqxytszfq5v6syth1csqqxvy5 ) : $m4is_rqxytszfq5v6syth1csqqxvy5;
$m4is_rqxytszfq5v6syth1csqqxvy5 = is_string( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ? trim( $m4is_rqxytszfq5v6syth1csqqxvy5 ) : $m4is_rqxytszfq5v6syth1csqqxvy5;

add_post_meta( $m4is_tz1rt7sbq40fade6e6rx, $m4is_sv4jqr1nqajr3a[$m4is_j8j55t8dz79m7], $m4is_rqxytszfq5v6syth1csqqxvy5, true ) or update_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_sv4jqr1nqajr3a[$m4is_j8j55t8dz79m7], $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
else {

}
}
}

}