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

current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
class m4is_mdqps8gqhv9qrpr2pesf4vtctspm2 {
private static $m4is_1090xawqcx3q9p;

private static $m4is_132xe588j;
private static $m4is_ga7k41nm95cn0s4wkjqanw7;
static function m4is_de8n8qy4mmtnkq33p() {
self::m4is_z6c3r724qhd();

self::m4is_bg4pa0ctfcgv01dp55ygjn();
self::$m4is_132xe588j->m4is_h9t0p5fc1( 'view_options' );
}
private static function m4is_z6c3r724qhd() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_1090xawqcx3q9p = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_ga7k41nm95cn0s4wkjqanw7 = isset( $_GET['tab'] ) ? $_GET['tab'] : 'login';

}
private static function m4is_bg4pa0ctfcgv01dp55ygjn() {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;
}
if ( empty( $_POST['memberium_options_nonce'] ) ) {
return;

}
if ( ! wp_verify_nonce( $_POST['memberium_options_nonce'], self::$m4is_132xe588j->m4is_54b9bwwsx7sym() ) ) {
wp_die( 'nonce error' );

return;
}
self::m4is_yqabedse2();
self::m4is_d3f762982gbmvf8w16bskx7e9c0yfjz();
self::m4is_rb8a65ya5n81scayg4fsa9v();
self::m4is_gwqyy01pkrp2z();

self::m4is_fw57r7s66yff2wna();
}
private static function m4is_yqabedse2() {
if ( isset( $_POST['pages'] ) && is_array( $_POST['pages'] ) ) {
$m4is_watb1h5vhg6brv6b0f4max0dm5b = (array) get_option( 'memberium_pages',
 [] );
foreach ( $_POST['pages'] as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_watb1h5vhg6brv6b0f4max0dm5b[$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
update_option( 'memberium_pages', $m4is_watb1h5vhg6brv6b0f4max0dm5b, true );
}
}
private static function m4is_d3f762982gbmvf8w16bskx7e9c0yfjz() {
if ( ! isset( $_POST['extensions'] ) ) {
return;

}
$m4is_hybtydg4zdv9ezjkq398btnjs2tqpk = get_option( 'memberium_extensions', [] );
foreach($_POST['extensions'] as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_hybtydg4zdv9ezjkq398btnjs2tqpk[$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;
}
update_option('memberium_extensions',
 $m4is_hybtydg4zdv9ezjkq398btnjs2tqpk, true );
}
private static function m4is_rb8a65ya5n81scayg4fsa9v() {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings' );


$m4is_19x1c17et728k945 = [
'allow_autologin',
'allow_local_logins',
'allow_wpadmin',
'attachment_pages',
'autogenerate_excerpts',

'autoupdate',
'beta_update_check',

'cache_bust',
'cache_flush',
'db_sessions',
'disable_displayname_update',
'disable_login_sync',

'disable_lost_password',
'disable_password_reset',
'disable_xframe',
'dynamic_menus',
'enable_slug_update',
'extended_reg_fields',

'fast_user_list',
'force_learndash_inheritance',
'httppost_log',
'known_logins_only',
'local_auth_only',
'login_log',
'microcache_compat_session',

'multi_language',
'page_inheritance',
'persistent_login',
'plaintext_db',
'preview_mode',
'protect_feeds',
'recaptcha_v2',
'require_membership',

'show_advanced_options',
'show_post_columns',
'simultaneous_logins',
'site_lock_enabled',
'sync_affiliate',
'sync_ecommerce',
'sync_meta_updates',

'sync_new_wp_users',
'sync_tag_details',
'telemetry',
'two_pass_shortcode_filter',
];
foreach($m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7] = isset( $_POST[$m4is_j8j55t8dz79m7] ) ? (int) (bool) trim( $_POST[$m4is_j8j55t8dz79m7] ) : $m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7];

}

$m4is_19x1c17et728k945 = [
'allow_wpadmin_dashboard',
'allow_wpadmin_role',
'allow_wpadmin_titlebar',
'debug_ip',
'default_page_redirect',

'default_prohibited_action',
'default_reglink_tag',
'displayname_format',
'facebook_app_id',
'global_excerpt',
'include_default_excerpt',

'last_login_field',
'password_field',
'recaptcha_v2_secret_key',
'recaptcha_v2_site_key',
'registration_url',
'spiffy_api_key',
'spiffy_subdomain',

'username_field',
];
foreach($m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7] = isset( $_POST[$m4is_j8j55t8dz79m7] ) ? stripslashes( trim( $_POST[$m4is_j8j55t8dz79m7] ) ) : $m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7];

}

$m4is_19x1c17et728k945 = [
'async_limit',
'async_tag',
'autologout_time',
'bruteforce_check',
'excerpt_length',

'login_actionset',

'login_log_length',
'login_tag',
'login_url',
'logout_actionset',
'logout_tag',
'max_affiliate_age',
'max_contact_age',
'maximum_login_ips',

'maximum_login_timeframe',
'min_password_length',
'new_user_registration_tag',
'password_reset_tag',
'password_strength',
'session_timeout',

'site_ban_tag',
'wp_autop',

];
foreach($m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7] = isset( $_POST[$m4is_j8j55t8dz79m7] ) ? (int) trim($_POST[$m4is_j8j55t8dz79m7] ) : $m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7];

}

if ( isset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['login_log_length'] ) && isset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['maximum_login_timeframe'] ) && $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['login_log_length'] > 0 ) {
if ( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['login_log_length'] < ( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['maximum_login_timeframe'] / 24 ) ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['login_log_length'] = ceil( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['maximum_login_timeframe'] / 24 );

}
}
self::$m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy, 'settings' );
}
private static function m4is_gwqyy01pkrp2z() {
if ( ! isset( $_POST['autologin_authkeys'] ) ) {
return;

}
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings' );
$m4is_f38cnrd2kwdprqn0bwaee6tn5 = array_filter( explode( ',',
 $_POST['autologin_authkeys'] ) );
$m4is_we48g8tp2r67r7sa76zag30y = array_filter( explode( ',', self::$m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->getConfigurationOption( 'http_post_key' ) ) );

$m4is_4nacr1gec1g0b8q = false;
foreach ( $m4is_f38cnrd2kwdprqn0bwaee6tn5 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_j8j55t8dz79m7 ) {
$m4is_j8j55t8dz79m7 = trim( $m4is_j8j55t8dz79m7 );

foreach ( $m4is_we48g8tp2r67r7sa76zag30y as $m4is_35h40p733yt0sp9zypy2 ) {
if ( strtolower( trim( $m4is_35h40p733yt0sp9zypy2 ) == strtolower( trim( $m4is_j8j55t8dz79m7 ) ) ) ) {
$m4is_4nacr1gec1g0b8q = true;

unset( $m4is_f38cnrd2kwdprqn0bwaee6tn5[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] );
}
}
}
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['autologin_authkeys'] = trim( implode( ',',
 array_filter( $m4is_f38cnrd2kwdprqn0bwaee6tn5 ) ), ',' );
self::$m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'settings' );
}
private static function m4is_tmj40dd8s4x33zz548946() {
if ( ! isset( $_POST['page_load'] ) ) {
return;
}
if ( $_POST['page_load'] == 'Load All Templates' ) {
$m4is_jgrm8x7qe3m7 = self::$m4is_1090xawqcx3q9p->m4is_h4xcw8dg053f1bbf29n320q20hv8tbf();

foreach($m4is_jgrm8x7qe3m7 as $template_id => $template ) {
self::$m4is_1090xawqcx3q9p->m4is_8drgtc2v4faemwts5( 0, $template_id );

}
}
elseif ( $_POST['page_load'] == 'Load Single Template' ) {
$m4is_j2hx89j0kceph71hx8zetf3dp = (int) $_POST['target_post_id'];
$m4is_zq984c7s17ees36ba = (int) $_POST['template_id'] - 1;

self::$m4is_1090xawqcx3q9p->m4is_8drgtc2v4faemwts5( $m4is_j2hx89j0kceph71hx8zetf3dp, $m4is_zq984c7s17ees36ba );
}
elseif ( $_POST['page_load'] == 'Install Email Templates' ) {
$m4is_hemy1cj38vj = self::$m4is_1090xawqcx3q9p->m4is_exqtba6sefcy();

}
}
private static function m4is_fw57r7s66yff2wna() {
if ( ! isset( $_POST['new_crm_field'] ) ) {
return;
}
$_POST['new_crm_field'] = trim( $_POST['new_crm_field'] );

m4is_q28s00aabb2yd3d::m4is_rab5hjvfjdhdgbnf552qj5c3bpc94pd($_POST['new_crm_field'] );
}
}
m4is_mdqps8gqhv9qrpr2pesf4vtctspm2::m4is_de8n8qy4mmtnkq33p();

global $wpdb;
m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_0ev16xnbdp();
$_GET['tab'] = isset($_GET['tab'] ) ? $_GET['tab'] : 'login';

$m4is_dmhydt6d2gv1na7516p1dv37qpmd = stripslashes_deep( m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->get_i2sdk_options() );

$m4is_watb1h5vhg6brv6b0f4max0dm5b = get_option( 'memberium_pages', [] );
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings' );

$m4is_sa02kf8ageg = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'infusionsoft' );


if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
if ( empty( $_POST['memberium_options_nonce'] ) ) {
return;
}
if (! wp_verify_nonce( $_POST['memberium_options_nonce'],
 m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_54b9bwwsx7sym() ) ) {
wp_die( 'nonce error' );
return;

}
if (isset($_GET['tab'] ) ) {
if ($_GET['tab'] == 'general' ) {
$m4is_51addd34g1m0tcc2qg059mn = explode(',', $m4is_sa02kf8ageg['ignore_contact_fields'] );

$m4is_51addd34g1m0tcc2qg059mn = array_flip($m4is_51addd34g1m0tcc2qg059mn );
unset($m4is_51addd34g1m0tcc2qg059mn[$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['password_field']] );

unset($m4is_51addd34g1m0tcc2qg059mn[$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['username_field']] );
$m4is_51addd34g1m0tcc2qg059mn = array_flip($m4is_51addd34g1m0tcc2qg059mn );

$m4is_sa02kf8ageg['ignore_contact_fields'] = implode(',', $m4is_51addd34g1m0tcc2qg059mn );
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('General Options Updated' );

}
elseif ($_GET['tab'] == 'extensions' ) {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Updates Options Updated' );
}
elseif ($_GET['tab'] == 'http-post' ) {
$_POST['autologin_authkeys'] = trim(implode(',',
 $m4is_f38cnrd2kwdprqn0bwaee6tn5 ), ',' );
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Options Updated' );
if ($m4is_4nacr1gec1g0b8q ) {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('You cannot re-use I2SDK Keys as Autologin Keys for security reasons' . m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(363 ) );

}
else {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['autologin_authkeys'] = $_POST['autologin_authkeys'];
}
unset($m4is_j8j55t8dz79m7, $m4is_35h40p733yt0sp9zypy2,
 $m4is_4nacr1gec1g0b8q, $m4is_we48g8tp2r67r7sa76zag30y, $m4is_f38cnrd2kwdprqn0bwaee6tn5 );
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('HTTP POST Options Updated' );

}
}
global $wp_rewrite;
$wp_rewrite->flush_rules();
}
$m4is_kezq8tet = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_bsh7jwwmtdhvd238q8dz9ebn0qcm9();



$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true );
$m4is_06c8s5xs94f91335gnaey25 = $m4is_06c8s5xs94f91335gnaey25['mc'];

$m4is_xyfzj0fnmp5g4 = [];
$m4is_xyfzj0fnmp5g4[] = [
'id' => 0,
'text' => '(None)'
];
foreach ( (array) $m4is_06c8s5xs94f91335gnaey25 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_xyfzj0fnmp5g4[] = [
'id' => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' => $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 . ' (' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ')'
];

}
$m4is_xyfzj0fnmp5g4 = json_encode($m4is_xyfzj0fnmp5g4 );
unset($m4is_06c8s5xs94f91335gnaey25, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 );
echo '<script>';
echo 'var pagelist      = ', $m4is_kezq8tet, ';';
echo 'var actionsetlist = ',
 m4is_w3pp5rsxdc03bns3::m4is_jzv3mdxqzxth481vapvxqkn5k8h(), ';';
echo 'var taglist       = ', $m4is_xyfzj0fnmp5g4, ';';
echo '</script>';

unset($m4is_xyfzj0fnmp5g4, $m4is_kezq8tet, $json_actionsets );
