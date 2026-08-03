<?php
/**
 * Proprietary Software - All Rights Reserved
 *
 * This file is part of the Memberium plugin, which is proprietary software developed by Web Power and Light.
 * Unauthorized copying, distribution, or modification of this file, via any medium, is strictly prohibited.
 *
 * Copyright (c) 2012-2024 David J Bullock
 * Web Power and Light
 *
 * For licensing information, please contact Web Power and Light.
 */


class_exists( 'm4is_6y9612z4hjd6fzpap4r5n853641m1jc' ) || die();


final class m4is_xzw82zta23vanf8pzajwyvkv4 {
private static $m4is_132xe588j;
private static $m4is_6bq57vkpyj;

static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_6bq57vkpyj = '';
}

static function m4is_a6e0x2swh7tn3( $m4is_0hc12sdazjewq = false ) {
ob_start();
self::m4is_ffk9p408tpqaqgzgre9080( 'Starting network activation: ' . date( 'Y-m-d h:i:s' ),
 false );

self::m4is_w8vwxae663qt3hmcbv49q95xmfsyw( false );

if ( function_exists( 'is_multisite' ) && is_multisite() ) {
global $wpdb;


if ( $m4is_0hc12sdazjewq ) {
$m4is_4drzk1bxm171t5q3pbxe4e5exje = get_current_blog_id(); 
$m4is_2kvwgfgv4x = get_sites();
if ( is_array( $m4is_2kvwgfgv4x ) ) {
foreach ( $m4is_2kvwgfgv4x as $m4is_vbew83xhsqmwkq ) {
switch_to_blog( $m4is_vbew83xhsqmwkq );

self::m4is_w8vwxae663qt3hmcbv49q95xmfsyw( true );
}

switch_to_blog( $m4is_4drzk1bxm171t5q3pbxe4e5exje );
}
}
}
$m4is_61sq69vrb2mq = ob_get_contents();

ob_end_clean();
if ( ! empty( $m4is_61sq69vrb2mq ) ) {
self::m4is_ffk9p408tpqaqgzgre9080( 'Unexpected output during network activation: ' . $m4is_61sq69vrb2mq,
 true );
}
self::m4is_ffk9p408tpqaqgzgre9080( 'Ending network activation: ' . date( 'Y-m-d h:i:s' ), false );
}

static function m4is_w8vwxae663qt3hmcbv49q95xmfsyw( bool $m4is_svkmf6f5meezra5qm7gkgwps80tt9m = false ) {
global $wpdb;


require_once ABSPATH . 'wp-admin/includes/upgrade.php';
$m4is_map8tdmsvarsn03f1fhfytx61b4a = time();

add_option( 'memberium/activation_timestamp',
 $m4is_map8tdmsvarsn03f1fhfytx61b4a, false );

update_option( 'memberium/system/config/timestamp', microtime( true ), true );

self::m4is_jnmem2dyx4mk59br5h7sxhcj();


self::m4is_548j45jp9esk();

$m4is_dmhydt6d2gv1na7516p1dv37qpmd = get_option('i2sdk');

self::m4is_dbdrx9wb1svp822hft5jk50t8zx5a3sp();


self::m4is_pzh7r869993bq69kvnhsxpzj34();

self::m4is_a54zepj2pn0qdv78vzxvqvqacsqyv();

self::m4is_d7495371b0qhs8yk27wxxnaby7weyt();


self::m4is_dschha3xzm();

m4is_azvwve90eh41048xqbzgye9vff::m4is_7x0nr6fqhfss4m8whjhhs();

self::m4is_ekqr27tj7b();

self::m4is_kb7bk3e421q0743yyg4();


m4is_s5vhbv6kzrqbaesnfd8w1pvjycp7w::m4is_3mhewknes0q();

if ( ! defined( 'I2SDK_HOME' ) ) {
require_once self::$m4is_132xe588j->m4is_hscsx4pb3zt() . 'vendor/i2sdkng/i2sdk.php';

wpal_i2sdk_activate();
}

if (! $m4is_svkmf6f5meezra5qm7gkgwps80tt9m) {


if (defined('MEMBERIUM_DEFER_ACTIVATION_SYNC') ) {
return;

}

if (function_exists('wpal_i2sdk_activate') && function_exists('wp_generate_password')) {

if (! function_exists('wp_generate_password')) {
include ABSPATH . 'wp-includes/pluggable.php';

}

m4is_zrrt34b1nqxbv::m4is_5qw71m3dzesr1mczt4k( true );
}


if (! method_exists( self::$m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j(),
 'isVerified') ) {
return;
}
}

$m4is_jhvqyp7500 = get_option('memberium_extensions', [] );
$m4is_hybtydg4zdv9ezjkq398btnjs2tqpk = glob( self::$m4is_132xe588j->m4is_t0brxwak7n05mx6anqhyrgmr( '*/init.php' ) );

$expensive_extensions = [
'page-tracking',
];

if (! empty($m4is_hybtydg4zdv9ezjkq398btnjs2tqpk) ) {
foreach ($m4is_hybtydg4zdv9ezjkq398btnjs2tqpk as $extension) {
$m4is_6k84v5caq4k = basename( dirname( $extension ) );


if (! isset($m4is_hybtydg4zdv9ezjkq398btnjs2tqpk[$m4is_6k84v5caq4k]) ) {

if (in_array($m4is_6k84v5caq4k, $expensive_extensions) ) {
$m4is_jhvqyp7500[$m4is_6k84v5caq4k] = 0;

}
else {

$m4is_jhvqyp7500[$m4is_6k84v5caq4k] = 1;
}
}
}
}

update_option( 'memberium_extensions', $m4is_jhvqyp7500, true );

if ( ! isset( $m4is_dmhydt6d2gv1na7516p1dv37qpmd['server_verified']) || $m4is_dmhydt6d2gv1na7516p1dv37qpmd['server_verified'] <> 1 ) {
return;

}
}

static function m4is_2ss46p6m0wxn01qjgt441tktzr20() {

$m4is_1xxrf32201y4yx6tdw931ek42psjghv = get_option( 'memberium_cron' );


if ( $m4is_1xxrf32201y4yx6tdw931ek42psjghv > 0 ) {
wp_unschedule_event( $m4is_1xxrf32201y4yx6tdw931ek42psjghv, 'memberium_scanmakepass',
 0 );
wp_unschedule_event( $m4is_1xxrf32201y4yx6tdw931ek42psjghv, 'memberium/contacts/makepass_scan', 0 );
wp_unschedule_event( $m4is_1xxrf32201y4yx6tdw931ek42psjghv,
 'memberium_maintenance', 0 );
wp_unschedule_event( $m4is_1xxrf32201y4yx6tdw931ek42psjghv, 'memberium_licensecheck', 0 );
}

delete_option( 'memberium_cron' );


$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = get_option( 'memberium' );

if ( ! empty( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['delete_configuration'] ) ) {
delete_option( 'memberium' );

}
}

static function m4is_ypw4rshk8c8z4gdxvv9() {

self::m4is_jys6jrpp();

self::m4is_n7s75xnskpm3z1rgy6();
}




static function m4is_ffk9p408tpqaqgzgre9080( string $m4is_5tmqg45z37r82cfb67prh,
 bool $m4is_66vfp3wv6 = false ) : void {
self::$m4is_6bq57vkpyj .= $m4is_5tmqg45z37r82cfb67prh . "\n";
update_option( 'memberium/activation_log',
 self::$m4is_6bq57vkpyj, false );
if ( $m4is_66vfp3wv6 ) {
error_log( 'Memberium: [info] ' . $m4is_5tmqg45z37r82cfb67prh );
}
}

static private function m4is_pzh7r869993bq69kvnhsxpzj34() : string {
global $wpdb;

$m4is_xprnx2cagfcmq0k38g = 'memberium_site_id';
$m4is_6f3ett063whdffvcwqpr2 = get_option( $m4is_xprnx2cagfcmq0k38g, false );
if ( ! $m4is_6f3ett063whdffvcwqpr2 ) {
$m4is_rswhe2hp2x1se3rmn3 = $wpdb->dbname . '|' . $wpdb->prefix . '|' . ABSPATH . '|' . site_url();

$m4is_6f3ett063whdffvcwqpr2 = hash_hmac( 'sha256', $m4is_rswhe2hp2x1se3rmn3, wp_salt( 'nonce' ) );
update_option( $m4is_xprnx2cagfcmq0k38g,
 $m4is_6f3ett063whdffvcwqpr2, 'yes');
}
return $m4is_6f3ett063whdffvcwqpr2;
}




static private function m4is_vtahs93fz() {
static $m4is_djvaptt7;

if ( is_null( $m4is_djvaptt7 ) ) {
global $wpdb;
$m4is_djvaptt7 = method_exists( $wpdb, 'get_charset_collate' ) ? $wpdb->get_charset_collate() : '';

}
return $m4is_djvaptt7;
}

static private function m4is_yxaykmb1de30cyqppd6v9a8k3echsb7() {
global $wpdb;

$m4is_hrtpth3knv43044ym8f = [
'memberium_appname',

];
foreach( $m4is_hrtpth3knv43044ym8f as $m4is_k7p8pmxsbkqrje3y20 ) {
$wpdb->query( $wpdb->prepare( "DROP TABLE IF EXISTS %i ", $m4is_k7p8pmxsbkqrje3y20 ) );

error_log( 'Memberium: [info] Dropping orphaned table ' . $m4is_k7p8pmxsbkqrje3y20 );
self::m4is_ffk9p408tpqaqgzgre9080( 'Memberium: Dropping orphaned table ' . $m4is_k7p8pmxsbkqrje3y20,
 true );
}
}

static private function m4is_dea9knrzx7ry4afa() {

}

static private function m4is_a54zepj2pn0qdv78vzxvqvqacsqyv() {
global $wpdb;

self::m4is_dea9knrzx7ry4afa();
require_once ABSPATH . 'wp-admin/includes/upgrade.php';
$m4is_djvaptt7 = self::m4is_vtahs93fz();
$m4is_syxsyjbk2dr6qm6 = [];

$m4is_z06ynyfsewet69mf98 = [];



$m4is_hrtpth3knv43044ym8f = [
['m4is_w3pp5rsxdc03bns3', 'm4is_hhyvbjw8v2g1c10jddw0ys'],
['m4is_amz58dmg8j7e898bj8r8b1',
 'm4is_hgn6bcvvpdh30'],
['m4is_amz58dmg8j7e898bj8r8b1', 'm4is_yzsnkrbhcdp02zhc4rvts3gk0gnnyk'],
['m4is_rw8p2dfy073ez', 'm4is_h9717tqbb0nxa4ctq3e5bv3tb4483'],

['m4is_rw8p2dfy073ez', 'm4is_5xfaa0qww3c0qdrnvfk60c'],
['m4is_q28s00aabb2yd3d', 'm4is_52tn34tmh6z5tw3'],
['m4is_bbwjksaqsay3yt68xq9afn',
 'm4is_0adhhh60gv'],
['m4is_bbwjksaqsay3yt68xq9afn', 'm4is_dergk737ax54ft9bpgm4h1dx'],
['m4is_sgvby6tzxdj27z0k9vsngxtx', 'm4is_4sf9pk2qrfssq78rjea6'],

['m4is_c2ry5jv8yz446k40191', 'm4is_sec419san'],
['m4is_9kyahnxyzzazbe0qnby5s1qsx', 'm4is_yff9250h34wb'],
['m4is_j439z8p9rf94j2j2gmvmjwmkkk55t67',
 'm4is_n1y1vyn3dd41cdwm'],
['m4is_6xn1pjnrksg2r2y58e54cqsedvtka8', 'm4is_gm4095j5zc8k7mq6ptwwx25k0bpm4k35'],
['m4is_0ddg4zyk7dn8eg0283',
 'm4is_mwsbph5cgzhk0vb10d'],
['m4is_0ddg4zyk7dn8eg0283', 'm4is_4zfagtxt5g4m9sxfxyexv5xj4'],
['m4is_6y9612z4hjd6fzpap4r5n853641m1jc',
 'm4is_vtvx58egj02hxs9je03p7rwfeqr7gyc'],
['m4is_6y9612z4hjd6fzpap4r5n853641m1jc', 'm4is_v97h7m8r1hs1bf280c'],
['m4is_eknm14gbx0wvrnh6',
 'm4is_259fhrvdqr5da8eeyrxc2agz'],
['m4is_an0pxqdph6ax26586c', 'm4is_kz34tqr3qczcrzr7z0et7cxa6j2m'],
['m4is_8ykqh469', 'm4is_ym50zy1m'],

['m4is_bj0mt04ye7axtp644x64m', 'm4is_ec8apdfffjapp7t75d2ypkrk9dpct'],
['m4is_bj0mt04ye7axtp644x64m', 'm4is_ghbnt18fk'],
['m4is_s5vhbv6kzrqbaesnfd8w1pvjycp7w',
 'm4is_1qssa9611n0q10tfdmh16qt'],
];
foreach( $m4is_hrtpth3knv43044ym8f as $m4is_k7p8pmxsbkqrje3y20 ) {
$m4is_gssvwxxgrwva73tm0eskq827dhzybx6 = call_user_func( $m4is_k7p8pmxsbkqrje3y20 );

$m4is_syxsyjbk2dr6qm6[] = $m4is_gssvwxxgrwva73tm0eskq827dhzybx6['table'];
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT COUNT(*) FROM %i",
 $m4is_gssvwxxgrwva73tm0eskq827dhzybx6['table'] );
$m4is_x6ktf52x8 = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
if ( $m4is_x6ktf52x8 == 0 ) {
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "DROP TABLE IF EXISTS %i",
 $m4is_gssvwxxgrwva73tm0eskq827dhzybx6['table'] );
$wpdb->query( "DROP TABLE IF EXISTS `{$m4is_gssvwxxgrwva73tm0eskq827dhzybx6['table']}`" );

self::m4is_ffk9p408tpqaqgzgre9080( 'Dropping Empty table ' . $m4is_gssvwxxgrwva73tm0eskq827dhzybx6['table'], true );
}
$m4is_63w37qx5t5w = dbDelta( $m4is_gssvwxxgrwva73tm0eskq827dhzybx6['sql'] );

if ( empty( $m4is_63w37qx5t5w ) ) {
self::m4is_ffk9p408tpqaqgzgre9080( 'No changes to table ' . $m4is_gssvwxxgrwva73tm0eskq827dhzybx6['table'],
 true );
}
else {
self::m4is_ffk9p408tpqaqgzgre9080( 'Updating table ' . $m4is_gssvwxxgrwva73tm0eskq827dhzybx6['table'], true );
foreach ($m4is_63w37qx5t5w as $m4is_xbg48ncxrhw6ff1hh1cpa7gzh ) {
self::m4is_ffk9p408tpqaqgzgre9080( 'Database Changelog: ' . $m4is_xbg48ncxrhw6ff1hh1cpa7gzh,
 true );
}
}
}
self::m4is_9han8xwbz4vh1a21xhz59a();
self::m4is_yxaykmb1de30cyqppd6v9a8k3echsb7();

update_option( 'memberium_tables',
 $m4is_syxsyjbk2dr6qm6, false );
}




private static function m4is_9han8xwbz4vh1a21xhz59a() : void {
global $wpdb;
$m4is_e3t7grpztrg7ak4r = 'i2sdk_dataformfields';

$m4is_v5yvkx82f8qn8 = m4is_q28s00aabb2yd3d::m4is_ga03vpgz();

$m4is_9gx1c7wxjhp8rnw2zym7z5a13mb4sve = (int) $wpdb->get_var( "SELECT COUNT(`id`) FROM `{$m4is_e3t7grpztrg7ak4r}`" );

$m4is_dhefcd9y521phz8kekzk = (int) $wpdb->get_var( "SELECT COUNT(`id`) FROM `{$m4is_v5yvkx82f8qn8}`" );
if ( $m4is_dhefcd9y521phz8kekzk == 0 && $m4is_9gx1c7wxjhp8rnw2zym7z5a13mb4sve > 0 ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO `{$m4is_v5yvkx82f8qn8}` SELECT * FROM `{$m4is_e3t7grpztrg7ak4r}`";

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
error_log( sprintf( "Memberium: [info] Migrating %d Keap custom fields from '%s' to '%s'.",
 $m4is_9gx1c7wxjhp8rnw2zym7z5a13mb4sve, $m4is_e3t7grpztrg7ak4r, $m4is_v5yvkx82f8qn8 ) );
}
m4is_q28s00aabb2yd3d::m4is_rc7cpymf5b7xy32xqb50085d4m();

}

static private function m4is_548j45jp9esk() : void {
if (! defined('MEMBERIUM_DEV') ) {
$m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = dirname(MEMBERIUM_HOME) . '/lib/ext-dev/';

if (file_exists($m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1) ) {
self::m4is_qk9ves27e99r99q94e9ee8qas9dg($m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1);

}
$m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = dirname(MEMBERIUM_HOME) . '/lib7/ext-dev/';
if (file_exists($m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1) ) {
self::m4is_qk9ves27e99r99q94e9ee8qas9dg($m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1);

}
}
}

static private function m4is_jnmem2dyx4mk59br5h7sxhcj() : void {
$m4is_8xzgr9f9mgpqefybjrc15963xer = [
'memberium2-installer/memberium2-installer.php',

'memberium-install-wizard/memberium-install-wizard.php',
];
foreach($m4is_8xzgr9f9mgpqefybjrc15963xer as $m4is_pcnj242mpvmw3) {
if (is_plugin_active($m4is_pcnj242mpvmw3) ) {
deactivate_plugins($m4is_pcnj242mpvmw3);

}
}
}

static private function m4is_jys6jrpp() {
$m4is_pe0qmemqt = get_role('administrator');
$m4is_pe0qmemqt->remove_cap('memberium_view_user_info');

$m4is_pe0qmemqt->remove_cap('memberium_edit_user_info');
$m4is_pe0qmemqt->remove_cap('memberium_view_private_comments');
}

static private function m4is_n7s75xnskpm3z1rgy6() : void {
$m4is_1xxrf32201y4yx6tdw931ek42psjghv = get_option('memberium_cron');

if ($m4is_1xxrf32201y4yx6tdw931ek42psjghv > 0) {
$m4is_d6qts4k3czfkn = [
'memberium_scanmakepass',
'memberium_license_check',
'memberium_maintenance',

'memberium_maintenance12',
'memberium/contacts/makepass_scan',
];
foreach($m4is_d6qts4k3czfkn as $m4is_j6mp1xp1bf6) {
wp_clear_scheduled_hook($m4is_j6mp1xp1bf6);

}
}
delete_option('memberium_cron');
}

static private function m4is_dbdrx9wb1svp822hft5jk50t8zx5a3sp() : array {
$m4is_ra7dnjjzebn9h3t6k7a2p36 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b();

$m4is_dtx76emk0wbymt515wkbk0eac3bp0c = trim(get_plugin_data(MEMBERIUM_HOME, false, false)['Version']);
$m4is_dtx76emk0wbymt515wkbk0eac3bp0c = function_exists('get_plugin_data') ? trim(get_plugin_data(MEMBERIUM_HOME,
 false, false)['Version']) : false;
if (empty($m4is_ra7dnjjzebn9h3t6k7a2p36['settings']) || ! is_array($m4is_ra7dnjjzebn9h3t6k7a2p36['settings']) ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36['settings'] = [];

}



$m4is_sxvgt8668fm = [
'max_record_age',
'paypal_api_password',
'paypal_api_signature',
'paypal_api_username',
'paypal_api_verified',

'stripe_live',
'stripe_public_key',
'stripe_secret_key',
'stripe_verified',
'username_field',
];
foreach ($m4is_sxvgt8668fm as $m4is_j8j55t8dz79m7) {
unset($m4is_ra7dnjjzebn9h3t6k7a2p36['settings'][$m4is_j8j55t8dz79m7]);

}
$m4is_ra7dnjjzebn9h3t6k7a2p36['settings']['autologin_authkeys'] = empty($m4is_ra7dnjjzebn9h3t6k7a2p36['settings']['autologin_authkeys']) ? self::m4is_ynedb3hzsh04ms70042znxdw5hy26haj(12) : $m4is_ra7dnjjzebn9h3t6k7a2p36['settings']['autologin_authkeys'];

$m4is_ra7dnjjzebn9h3t6k7a2p36['settings']['random_seed'] = empty($m4is_ra7dnjjzebn9h3t6k7a2p36['settings']['random_seed']) ? self::m4is_ynedb3hzsh04ms70042znxdw5hy26haj(16) : $m4is_ra7dnjjzebn9h3t6k7a2p36['settings']['random_seed'];


$m4is_8h17f6nawraj8ea6cj5h = [


];
foreach ($m4is_8h17f6nawraj8ea6cj5h as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
if ( ! isset($m4is_ra7dnjjzebn9h3t6k7a2p36['settings'][$m4is_j8j55t8dz79m7]) ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36['settings'][$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
}
if (empty($m4is_ra7dnjjzebn9h3t6k7a2p36['infusionsoft']) ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36['infusionsoft'] = [];
}

$m4is_sxvgt8668fm = [
];

foreach ($m4is_sxvgt8668fm as $m4is_j8j55t8dz79m7) {
unset($m4is_ra7dnjjzebn9h3t6k7a2p36['infusionsoft'][$m4is_j8j55t8dz79m7]);
}
$m4is_8h17f6nawraj8ea6cj5h = [
];

foreach ($m4is_8h17f6nawraj8ea6cj5h as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
if (empty($m4is_ra7dnjjzebn9h3t6k7a2p36['infusionsoft'][$m4is_j8j55t8dz79m7]) ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36['infusionsoft'][$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
}
$m4is_ra7dnjjzebn9h3t6k7a2p36 = self::m4is_ajctwvxvv($m4is_ra7dnjjzebn9h3t6k7a2p36);
$m4is_ra7dnjjzebn9h3t6k7a2p36 = self::m4is_6c990z0r17zsa3h57pkt($m4is_ra7dnjjzebn9h3t6k7a2p36);

$m4is_ra7dnjjzebn9h3t6k7a2p36['settings']['version'] = trim(get_plugin_data(MEMBERIUM_HOME, false, false)['Version']);
add_option('memberium',
 $m4is_ra7dnjjzebn9h3t6k7a2p36, '', 'yes');
update_option('memberium', $m4is_ra7dnjjzebn9h3t6k7a2p36, 'yes');
self::$m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej($m4is_ra7dnjjzebn9h3t6k7a2p36);

return $m4is_ra7dnjjzebn9h3t6k7a2p36;
}

static private function m4is_ajctwvxvv( array $m4is_ra7dnjjzebn9h3t6k7a2p36 = [] ) : array {
$m4is_sxvgt8668fm = [];

$m4is_8h17f6nawraj8ea6cj5h = [];
foreach ($m4is_sxvgt8668fm as $m4is_j8j55t8dz79m7) {
unset($m4is_ra7dnjjzebn9h3t6k7a2p36['sync'][$m4is_j8j55t8dz79m7]);

}
if (empty($m4is_ra7dnjjzebn9h3t6k7a2p36['sync']) ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36['sync'] = [];
}
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = [
'Email',

'FirstName',
'Groups',
'Id',
'LastName',
'LastUpdated'
];
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n('Contact');

$m4is_gqsc4mq3nmh1sr5dknx6119v7 = array_diff($m4is_7b2yfzk0054, $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb);
$m4is_8h17f6nawraj8ea6cj5h['required_fields']['Contact'] = implode(',',
 $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb);
$m4is_8h17f6nawraj8ea6cj5h['ignored_sync_fields']['Contact'] = implode(',', $m4is_gqsc4mq3nmh1sr5dknx6119v7);


foreach ($m4is_8h17f6nawraj8ea6cj5h as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
if (empty($m4is_ra7dnjjzebn9h3t6k7a2p36['sync'][$m4is_j8j55t8dz79m7]) ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36['sync'][$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
}
return $m4is_ra7dnjjzebn9h3t6k7a2p36;
}

static private function m4is_6c990z0r17zsa3h57pkt(array $m4is_ra7dnjjzebn9h3t6k7a2p36 = []) : array {
if (is_array($m4is_ra7dnjjzebn9h3t6k7a2p36['memberships']) ) {
foreach ($m4is_ra7dnjjzebn9h3t6k7a2p36['memberships'] as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
if (! isset($m4is_ra7dnjjzebn9h3t6k7a2p36['memberships'][$m4is_j8j55t8dz79m7]['main_id']) ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36['memberships'][$m4is_j8j55t8dz79m7]['main_id'] = $m4is_j8j55t8dz79m7;

}
$m4is_w855v7fcvq5s1phhtj779a25x3zd1p = 'Memberium ' . $m4is_rqxytszfq5v6syth1csqqxvy5['name'];
$m4is_dq9dscqh5yhsz5aevbt6qx = sanitize_key('memberium_' . $m4is_rqxytszfq5v6syth1csqqxvy5['name']);

$m4is_pe0qmemqt = get_role($m4is_dq9dscqh5yhsz5aevbt6qx);
if (! $m4is_pe0qmemqt) {
$m4is_pe0qmemqt = add_role($m4is_dq9dscqh5yhsz5aevbt6qx,
 $m4is_w855v7fcvq5s1phhtj779a25x3zd1p);
}
$m4is_pe0qmemqt->add_cap('read');
}
}

if (is_array($m4is_ra7dnjjzebn9h3t6k7a2p36['memberships']) ) {
foreach ($m4is_ra7dnjjzebn9h3t6k7a2p36['memberships'] as $m4is_j8j55t8dz79m7 =>
 $m4is_pzeqetyttg644ahb8fb) {
$m4is_pzeqetyttg644ahb8fb['main_id'] = isset($m4is_pzeqetyttg644ahb8fb['main_id']) ? $m4is_pzeqetyttg644ahb8fb['main_id'] : $m4is_j8j55t8dz79m7;

$m4is_pzeqetyttg644ahb8fb['cancel_id'] = isset($m4is_pzeqetyttg644ahb8fb['cancel_id']) ? $m4is_pzeqetyttg644ahb8fb['cancel_id'] : 0;

$m4is_pzeqetyttg644ahb8fb['level'] = isset($m4is_pzeqetyttg644ahb8fb['level']) ? $m4is_pzeqetyttg644ahb8fb['level'] : 0;
$m4is_pzeqetyttg644ahb8fb['login_page'] = isset($m4is_pzeqetyttg644ahb8fb['login_page']) ? $m4is_pzeqetyttg644ahb8fb['login_page'] : 0;

$m4is_pzeqetyttg644ahb8fb['first_login_page'] = isset($m4is_pzeqetyttg644ahb8fb['first_login_page']) ? $m4is_pzeqetyttg644ahb8fb['first_login_page'] : 0;

$m4is_pzeqetyttg644ahb8fb['logout_page'] = isset($m4is_pzeqetyttg644ahb8fb['logout_page']) ? $m4is_pzeqetyttg644ahb8fb['logout_page'] : 0;

$m4is_pzeqetyttg644ahb8fb['payf_id'] = isset($m4is_pzeqetyttg644ahb8fb['payf_id']) ? $m4is_pzeqetyttg644ahb8fb['payf_id'] : 0;
$m4is_pzeqetyttg644ahb8fb['roles'] = is_array($m4is_pzeqetyttg644ahb8fb['roles']) ? $m4is_pzeqetyttg644ahb8fb['roles'] : [];

$m4is_pzeqetyttg644ahb8fb['suspend_id'] = isset($m4is_pzeqetyttg644ahb8fb['suspend_id']) ? $m4is_pzeqetyttg644ahb8fb['suspend_id'] : 0;

$m4is_pzeqetyttg644ahb8fb['theme'] = isset($m4is_pzeqetyttg644ahb8fb['theme']) ? $m4is_pzeqetyttg644ahb8fb['theme'] : '';
$m4is_pzeqetyttg644ahb8fb['login_redirect_priority'] = isset($m4is_pzeqetyttg644ahb8fb['login_redirect_priority']) ? $m4is_pzeqetyttg644ahb8fb['login_redirect_priority'] : $m4is_pzeqetyttg644ahb8fb['level'];

$m4is_pzeqetyttg644ahb8fb['payf_homepage'] = isset($m4is_pzeqetyttg644ahb8fb['payf_homepage']) ? $m4is_pzeqetyttg644ahb8fb['payf_homepage'] : 0;

$m4is_pzeqetyttg644ahb8fb['susp_homepage'] = isset($m4is_pzeqetyttg644ahb8fb['susp_homepage']) ? $m4is_pzeqetyttg644ahb8fb['susp_homepage'] : 0;

$m4is_pzeqetyttg644ahb8fb['canc_homepage'] = isset($m4is_pzeqetyttg644ahb8fb['canc_homepage']) ? $m4is_pzeqetyttg644ahb8fb['canc_homepage'] : 0;

$m4is_pzeqetyttg644ahb8fb['dynamic_menus'] = isset($m4is_pzeqetyttg644ahb8fb['dynamic_menus']) ? $m4is_pzeqetyttg644ahb8fb['dynamic_menus'] : 0;

$m4is_ra7dnjjzebn9h3t6k7a2p36['memberships'][$m4is_j8j55t8dz79m7] = $m4is_pzeqetyttg644ahb8fb;
}
}
return $m4is_ra7dnjjzebn9h3t6k7a2p36;

}

static private function m4is_qk9ves27e99r99q94e9ee8qas9dg( $m4is_h4bme6g30z3je9phn ) : void {
if ( is_dir( $m4is_h4bme6g30z3je9phn ) ) {
$m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw = glob( $m4is_h4bme6g30z3je9phn . '*',
 GLOB_MARK );
foreach( $m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw as $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 ) {
self::m4is_qk9ves27e99r99q94e9ee8qas9dg( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 );

}
rmdir( $m4is_h4bme6g30z3je9phn );
}
elseif( is_file( $m4is_h4bme6g30z3je9phn ) ) {
unlink( $m4is_h4bme6g30z3je9phn );
}
}

static private function m4is_d7495371b0qhs8yk27wxxnaby7weyt() {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT SUBSTRING(`option_name`, 12) as `transient` FROM `{$wpdb->options}` WHERE `option_name` like '%_transient_memberium%';";

$m4is_tbdh9qb6r6z = $wpdb->get_col($m4is_5rbenkpt1v7xby2cknbs7);
foreach($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
delete_transient($m4is_bamv772v);

}
}

static private function m4is_dschha3xzm() {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = 'DELETE FROM `' . $wpdb->options . '` WHERE `option_name` LIKE "%telemetry%" ';

$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}

static private function m4is_ekqr27tj7b() {
}

static private function m4is_kb7bk3e421q0743yyg4() {
$m4is_pe0qmemqt = get_role('administrator');

if ($m4is_pe0qmemqt) {
$m4is_pe0qmemqt->add_cap('memberium_view_user_info');
$m4is_pe0qmemqt->add_cap('memberium_edit_user_info');

$m4is_pe0qmemqt->add_cap('memberium_view_private_comments');
}
}

static private function m4is_ynedb3hzsh04ms70042znxdw5hy26haj( $m4is_kw23kqxbesd8dvhkn = 8 ) {
if ( function_exists( 'wp_generate_password' ) ) {
return wp_generate_password( $m4is_kw23kqxbesd8dvhkn,
 false, false );
}
else {
return substr( md5( wp_salt( 'auth' ) . wp_salt( 'logged_in' ) . wp_salt( 'secure_auth' ) . microtime() . mt_rand( 0,
 999999999 ) ), 0, $m4is_kw23kqxbesd8dvhkn );
}
}

private static function m4is_d5cyv87aftzcf8aqsr4e7w5k0q9cmp() : array {
global $wpdb;

$m4is_rd6mpmx08 = $wpdb->get_col( $wpdb->prepare( "SELECT blog_id FROM %i", $wpdb->blogs ) );
return $m4is_rd6mpmx08;
}

}