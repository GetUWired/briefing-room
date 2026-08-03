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


class_exists('m4is_6y9612z4hjd6fzpap4r5n853641m1jc') || die();

final class m4is_cqpzkyh9 {
function process_path_protect_rules() {
$m4is_kgz7b1yn53xvqjpb5s2svv0fx6j = $_SERVER['REQUEST_URI'];
$m4is_knxbec8fr3be1s2tkx0ydee0z = '';

$m4is_pqecxfec342ksq5fzv1mg = get_site_url();
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_dht4qgn64s6fwggb();
$m4is_dn21cv5ncdqnrgyzdaeggbx = function_exists( 'is_user_logged_in' ) ? is_user_logged_in() : false;

if (! empty($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['rules']) && is_array($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['rules'])) {
foreach ( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['rules'] as $m4is_9eye7n6xxcymd1tt ) {
$m4is_9eye7n6xxcymd1tt['urls'] = isset( $m4is_9eye7n6xxcymd1tt['urls'] ) ? $m4is_9eye7n6xxcymd1tt['urls'] : '';

$m4is_c3b9b3we7yh8pe = array_filter( array_map( 'trim', array_filter( explode( "\n", $m4is_9eye7n6xxcymd1tt['urls'] ) ) ) );
if ( is_array($m4is_c3b9b3we7yh8pe) ) {
foreach( $m4is_c3b9b3we7yh8pe as $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) {
if ( strpos( $m4is_kgz7b1yn53xvqjpb5s2svv0fx6j,
 $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) === 0 ) {
$m4is_3qe05aw2156cp0kmn2ppj0cj = true;
if ( $m4is_9eye7n6xxcymd1tt['logged_in'] == 1 && ! $m4is_dn21cv5ncdqnrgyzdaeggbx ) {
$m4is_3qe05aw2156cp0kmn2ppj0cj = false;

}
if ( $m4is_9eye7n6xxcymd1tt['anonymous_only'] == 1 && $m4is_dn21cv5ncdqnrgyzdaeggbx ) {
$m4is_3qe05aw2156cp0kmn2ppj0cj = false;
}
if ( ! $m4is_3qe05aw2156cp0kmn2ppj0cj ) {
$m4is_knxbec8fr3be1s2tkx0ydee0z = $m4is_9eye7n6xxcymd1tt['prohibited_action'];

$m4is_pqecxfec342ksq5fzv1mg = $m4is_9eye7n6xxcymd1tt['redirect_url'];
break;
}
}
}
}
}
}
if ( $m4is_knxbec8fr3be1s2tkx0ydee0z == 'hide' ) {
include( get_query_template( '404' ) );

exit;
}
elseif ( $m4is_knxbec8fr3be1s2tkx0ydee0z == 'redirect' ) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
nocache_headers();

wp_redirect($m4is_pqecxfec342ksq5fzv1mg);
exit;
}
}
private function m4is_dht4qgn64s6fwggb() {
$m4is_j8j55t8dz79m7 = 'WPAL/pathprotect/settings';

$m4is_f6tbys3ed3c1k2nwhfm1ayega9bpz4 = 'MemberiumPathProtect';
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = get_option($m4is_j8j55t8dz79m7,
 false);
if ($m4is_8ew58cpxmftgpw93gdffm4s9bbwy === false) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = get_option($m4is_f6tbys3ed3c1k2nwhfm1ayega9bpz4,
 '');
if (is_array($m4is_8ew58cpxmftgpw93gdffm4s9bbwy) ) {
update_option($m4is_j8j55t8dz79m7, $m4is_8ew58cpxmftgpw93gdffm4s9bbwy);
}
}
if (! is_array($m4is_8ew58cpxmftgpw93gdffm4s9bbwy) ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = [];

}
return $m4is_8ew58cpxmftgpw93gdffm4s9bbwy;
}
function __construct() {
global $pagenow;
if ( ! in_array($pagenow, ['wp-login.php',
 'wp-register.php']) ) {
add_action( 'init', [$this, 'process_path_protect_rules'] );
}
}
}