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
new m4is_rdz51rwdvycm8mz4njn9j1();

final class m4is_rdz51rwdvycm8mz4njn9j1 {
private
$m4is_132xe588j,
$m4is_v4beyw7zqhr3,
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy;
function __construct() {
$this->m4is_z6c3r724qhd();

$this->m4is_ranr89c2gngyncmfbwyag76f1rq();
}
private function m4is_z6c3r724qhd() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy = 'settings';

}

private function m4is_fx5w3e75z4m() : void {
$m4is_7b2yfzk0054 = $this->m4is_s6avnpg5gwzd9();
$m4is_45a857vx58aez0 = '';
$m4is_dqyxb425nmspntpa7cmbfknwhjr857 = 'Password';

$m4is_wte2qk9hdk1zj7 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy, 'password_field',
 $m4is_dqyxb425nmspntpa7cmbfknwhjr857 ); 
$m4is_9n99a0wfjv3p = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'ignore_contact_fields' );
$m4is_9n99a0wfjv3p = is_string( $m4is_9n99a0wfjv3p ) ? array_filter( explode( ',', $m4is_9n99a0wfjv3p ) ) : [];

if ( ! empty( $m4is_9n99a0wfjv3p ) ) {
foreach ( $m4is_7b2yfzk0054 as $m4is_j8j55t8dz79m7 => $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
if ( in_array( $m4is_bbsta3mvjhhvh1x97vfpm9e,
 $m4is_9n99a0wfjv3p ) ) {
unset( $m4is_7b2yfzk0054[$m4is_j8j55t8dz79m7] );
}
}
}

foreach ( $m4is_7b2yfzk0054 as $m4is_bamv772v ) {
$m4is_fe42r2djxgf1h7pt = $m4is_bamv772v == $m4is_wte2qk9hdk1zj7 ? 'selected="selected"' : '';

$m4is_45a857vx58aez0 = $m4is_45a857vx58aez0 . sprintf( '<option value="%s" %s >%s</option>', $m4is_bamv772v, $m4is_fe42r2djxgf1h7pt,
 $m4is_bamv772v );
}
echo '<li><label>CRM Password Field</label>';
echo '<select id="password_field" name="password_field" class="basic-single" style="width:250px;">';

echo $m4is_45a857vx58aez0;
echo '</select>', m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 1171 );
echo '</li>';
if ( $m4is_dqyxb425nmspntpa7cmbfknwhjr857 == $m4is_wte2qk9hdk1zj7 ) {
echo '<li><label>Create New Password Field</label>';

echo '<input type="text" autocomplete="off" name="new_crm_field" size="20" value="" />';
echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 5733 ),
 '</li>';
}
}
private function m4is_ranr89c2gngyncmfbwyag76f1rq() {
echo '<form method="POST" action="">';
wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(),
 'memberium_options_nonce' );
$this->m4is_e9539cwe25zcyse5nn7t();
$this->m4is_tfsezbfcnj53dn9w98cem();
$this->m4is_zzrgn4akvwq5sarvf16r2z58t029myej();

$this->m4is_c5wr58v39r();
$this->m4is_bpqhapb0ew20w();
$this->m4is_seejaktz18w();
echo '<p><input type="submit" value="Update" class="button-primary"></p>';

echo '</form>';
}
private function m4is_e9539cwe25zcyse5nn7t() {
$m4is_sq8aqwzjv0d01x74ajfna9snvznbsyd = $this->m4is_67dre8n4();
$m4is_2dt8x6786tfgy703c = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'min_password_length', 6 );
$m4is_sch85z2tsmzm6kx4hx = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'password_strength', 0 );
$m4is_01eq1bzcg10a6d = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'password_reset_tag', 0 );
$m4is_akd4cjvbhtckz56 = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'local_auth_only', 0 );
$m4is_99v75yh2d28m7p2r61fbyxyzwasdetbg = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'disable_password_reset', 0 );
$m4is_ngk8zsjp8jngcep0kv = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'disable_lost_password', 0 );
echo '<h3>Password Settings</h3>';
echo '<ul>';
$this->m4is_g81m0gd3jpj19();
$this->m4is_qxvvm3gp66c();

$this->m4is_fx5w3e75z4m();
$m4is_g61yzqs7ecta0xztr70d7v = [
'help_id' => 1185,
'min' => 6,
'max' => 64,
'size' => 6
];
m4is_dv250ra9xbtaf::m4is_1nj1ys2vvgakb6bgcgt6g( 'Minimum Password Length',
 'min_password_length', $m4is_2dt8x6786tfgy703c, $m4is_g61yzqs7ecta0xztr70d7v );
m4is_dv250ra9xbtaf::m4is_jt0y34knx7ws34fc4xjmj90gq( 'Password Strength',
 'password_strength', $m4is_sch85z2tsmzm6kx4hx, $m4is_sq8aqwzjv0d01x74ajfna9snvznbsyd, ['style' => 'width:250px;', 'help_id' => 21852] );

m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Secure Passwords / Local Auth Only', 'local_auth_only', 6818, $m4is_akd4cjvbhtckz56 );

m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Disable Lost Password', 'disable_lost_password', 4422, $m4is_ngk8zsjp8jngcep0kv );

m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Disable WordPress Password Reset', 'disable_password_reset', 4421, $m4is_99v75yh2d28m7p2r61fbyxyzwasdetbg );

m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep( 'Password Reset Tag', 'password_reset_tag', $m4is_01eq1bzcg10a6d, 'taglistdropdown',
 [ 'help_id' => 1183 ] );
echo '</ul>';
}
private function m4is_tfsezbfcnj53dn9w98cem() {
$m4is_afasb9qqmh8d8p54060yanpm57q4p59 = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'site_ban_tag', 0 );
$m4is_n1sgm8ss6dzwyw5wxgv = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'maximum_login_ips', 0 );
$m4is_24xkg07e16tsxbfy0mgty33kz38ej6s = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'maximum_login_timeframe', 0 );
$m4is_mmm9n6w8echr = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'bruteforce_check', 0 );
$m4is_1p52hx92 = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'require_membership', 0 );
$m4is_9d9xqba7q91zqv = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'known_logins_only', 0 );
$m4is_g37fdh8mfsba1p8qh74tn = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'allow_local_logins', 0 );
$m4is_0ehh8me48krz2a = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'simultaneous_logins', 0 );
echo '<h3>Login Restrictions</h3>';
echo '<ul>';
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Require Membership',
 'require_membership', 1202, $m4is_1p52hx92 );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Known Logins Only', 'known_logins_only',
 6773, $m4is_9d9xqba7q91zqv );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Allow Local Logins', 'allow_local_logins', 6367, $m4is_g37fdh8mfsba1p8qh74tn );

m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Prevent Simultaneous Logins', 'simultaneous_logins', 1197, $m4is_0ehh8me48krz2a );

m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep( 'Site Ban Tag', 'site_ban_tag', $m4is_afasb9qqmh8d8p54060yanpm57q4p59, 'taglistdropdown',

[ 'help_id' => 1195 ]
);
m4is_dv250ra9xbtaf::m4is_1nj1ys2vvgakb6bgcgt6g( 'Maximum Login IPs', 'maximum_login_ips', $m4is_n1sgm8ss6dzwyw5wxgv,

['min' => 0, 'max' => 100, 'help_id' => 1204]
);
m4is_dv250ra9xbtaf::m4is_1nj1ys2vvgakb6bgcgt6g( 'Maximum Login Window (Hours)', 'maximum_login_timeframe',
 $m4is_24xkg07e16tsxbfy0mgty33kz38ej6s,
['min' => 0, 'max' => 672, 'help_id' => 1204]
);
m4is_dv250ra9xbtaf::m4is_jt0y34knx7ws34fc4xjmj90gq( 'Bot Login Protection',
 'bruteforce_check', $m4is_mmm9n6w8echr, $this->m4is_s5b49zbg31fnz9b(),
[
'style' => 'width:250px;',
'help_id' => 0
]
);
echo '</ul>';

}

private function m4is_zzrgn4akvwq5sarvf16r2z58t029myej() {
$m4is_j1z069hsw72g89j4ryzzk69nrfmm = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'login_log', 0 );
$m4is_dpg5gwchb4rpn82y7qrvxg4t0640j = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'login_log_length', 0 );
$m4is_mc1pfgba5cm8nj7z = (string) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'last_login_field', '' );
$m4is_v1b5gnta3q76krxczza781gh4789rxb = $this->m4is_wwesz1ewb5eqyvv9sejth0();
echo <<<HTMLBLOCK

			<hr>
			<h3>Login Logging</h3>
			<ul>
		HTMLBLOCK;

m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Login Log', 'login_log', 1187, $m4is_j1z069hsw72g89j4ryzzk69nrfmm );
m4is_dv250ra9xbtaf::m4is_1nj1ys2vvgakb6bgcgt6g( 'Login Log Retention (Days)',
 'login_log_length', $m4is_dpg5gwchb4rpn82y7qrvxg4t0640j, ['help_id' => 0000] );
m4is_dv250ra9xbtaf::m4is_jt0y34knx7ws34fc4xjmj90gq( 'Last Login Date Field',
 'last_login_field', $m4is_mc1pfgba5cm8nj7z, $m4is_v1b5gnta3q76krxczza781gh4789rxb, [ 'help_id' => 1173 ] );
echo <<<HTMLBLOCK

			</ul>
		HTMLBLOCK;

}

private function m4is_c5wr58v39r() {
$m4is_r9470v24tca = m4is_w3pp5rsxdc03bns3::m4is_fsammgw6kagh();
$m4is_fxg5q0wq0bg4tkd = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'login_url', 0 );
$m4is_ctt90r11tf1fxbxvd93z7vabj3xffwy8 = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'login_actionset', 0 );
$m4is_3pqeb0a15m9690he5be7efazx71e441d = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'login_tag', 0 );
$m4is_nk5sgx51k4cnbgpzbdn8 = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'disable_displayname_update', 0 );
$m4is_6n0va5ctmbdz6rfm94mzk = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'enable_slug_update', 0 );
$m4is_tapt3eh709a02w7vt = (string) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'displayname_format', '' );
$m4is_vjvdekjyb3v8f9a90x = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'disable_login_sync', 0 );
echo '<hr>';
echo '<h3>Login Actions</h3>';
echo '<ul>';
m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep( 'Login Page <strong style="color:red;">(Caution)</strong>',
 'login_url', $m4is_fxg5q0wq0bg4tkd, 'pagelistdropdown', [ 'help_id' => 1208 ] );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Disable Display Name Update',
 'disable_displayname_update', 9634, $m4is_nk5sgx51k4cnbgpzbdn8 );
m4is_dv250ra9xbtaf::m4is_f8vws9aeenhp( 'Display Name Format', 'displayname_format',
 $m4is_tapt3eh709a02w7vt, ['help_id' => 5731] );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Enable User URL Slug Update', 'enable_slug_update',
 21857, $m4is_6n0va5ctmbdz6rfm94mzk ); 
m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep( 'Login Tag', 'login_tag', $m4is_3pqeb0a15m9690he5be7efazx71e441d,
 'taglistdropdown',
[ 'help_id' => 000 ]
);
if ( $m4is_r9470v24tca ) {
m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep( 'Login Actionset',
 'login_actionset', $m4is_ctt90r11tf1fxbxvd93z7vabj3xffwy8, 'actionsetdropdown', [ 'help_id' => 1175 ] );
}
if ( true ) {
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Disable Login Sync/Actions',
 'disable_login_sync', 0, $m4is_vjvdekjyb3v8f9a90x );
}
echo '</ul>';
}

private function m4is_bpqhapb0ew20w() {
$m4is_r9470v24tca = m4is_w3pp5rsxdc03bns3::m4is_fsammgw6kagh();

$m4is_v5n984r1t48n2gq8rzsv = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'autologout_time', 0 );
$m4is_6v83jpcacc5t0q8fxk6p52prs = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'logout_actionset', 0 );
echo '<hr>';
echo '<h3>Logout Actions</h3>';
echo '<ul>';
m4is_dv250ra9xbtaf::m4is_1nj1ys2vvgakb6bgcgt6g( 'Autologout/Inactivity Timer (Seconds)',
 'autologout_time', $m4is_v5n984r1t48n2gq8rzsv,
[
'help_id' => 7688,
'max' => 86400,
'min' => 0,
'size' => 3,
'style' => 'text-align:right;width:80px;',

]
);
if ( $m4is_r9470v24tca ) {
m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep( 'Logout Actionset', 'logout_actionset', $m4is_6v83jpcacc5t0q8fxk6p52prs,
 'actionsetdropdown', ['help_id' => 1178] );
}
echo '</ul>';
echo '<hr>';
}

private function m4is_seejaktz18w() {

$m4is_99rep91sjnf1mr = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'allow_autologin', 0 );
$m4is_f38cnrd2kwdprqn0bwaee6tn5 = (string) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'autologin_authkeys', '' );
echo '<h3>Auto-Login Settings</h3>';
echo '<ul>';
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Allow Autologin',
 'allow_autologin', 4398, $m4is_99rep91sjnf1mr );
if ( ! $m4is_99rep91sjnf1mr ) {
return;
}

m4is_dv250ra9xbtaf::m4is_f8vws9aeenhp( 'Autologin Auth Keys',
 'autologin_authkeys', $m4is_f38cnrd2kwdprqn0bwaee6tn5, [ 'help_id' => 2571, 'style' => 'text-align:left;width:350px;' ] );
echo '<hr>';

echo '</ul>';
}

private function m4is_wwesz1ewb5eqyvv9sejth0() {
$m4is_m18zac37c = m4is_q28s00aabb2yd3d::m4is_d2ce9k4j3( m4is_q28s00aabb2yd3d::CONTACT_FIELDS,
 m4is_q28s00aabb2yd3d::DATE_TYPE );
$m4is_r2pmgcm72k0c96h8nq3 = m4is_q28s00aabb2yd3d::m4is_d2ce9k4j3( m4is_q28s00aabb2yd3d::CONTACT_FIELDS,
 m4is_q28s00aabb2yd3d::DATETIME_TYPE );
$m4is_tbdh9qb6r6z = array_merge( $m4is_m18zac37c, $m4is_r2pmgcm72k0c96h8nq3 );
$m4is_ra7dnjjzebn9h3t6k7a2p36 = [];

$m4is_ra7dnjjzebn9h3t6k7a2p36[''] = '(None)';
foreach( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36[$m4is_bamv772v] = $m4is_bamv772v;

}
return $m4is_ra7dnjjzebn9h3t6k7a2p36;
}

private function m4is_s5b49zbg31fnz9b() {
return [
'0' => 'Disabled',
'1' => 'Basic (Cache Friendly)',

'2' => 'Maximum'
];
}

private function m4is_g81m0gd3jpj19() {
$m4is_akd4cjvbhtckz56 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'min_password_length', 6 );
$m4is_wte2qk9hdk1zj7 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'password_field', 'Password' );
if ( ! $m4is_akd4cjvbhtckz56 ) {
echo '<p"><strong style="color:darkred;">RECOMMENDATION:</strong> Passwords are stored insecurely in Keap.  Turn on "Secure Passwords" below to only use encrypted passwords.</p>';

}
if ( $m4is_wte2qk9hdk1zj7 == 'Password') {
echo '<p"><strong style="color:darkred;">RECOMMENDATION:</strong>  Using the default "Password" field may increase your API requirements.  We recommend using a custom field instead.</p>';

echo '<p"><strong style="color:darkred;">WARNING:</strong>  Passwords are limited to 20 characters due to using the built-in "Password" field.</p>';

}
}

private function m4is_qxvvm3gp66c() {
$m4is_th384m7gvm775j7 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'username_field', 'Email' );
$m4is_9kt0g0gw6hchnx9qfr = '';
$m4is_94ekh14mfh8qmm1sns1zd83vgcw4s1wy = 1;
$m4is_05bqq563kkbcq2yk2 = [
'Email',

];
if ( $m4is_th384m7gvm775j7 <> 'Email' ) {
$m4is_05bqq563kkbcq2yk2[] = $m4is_th384m7gvm775j7;
}
foreach( $m4is_05bqq563kkbcq2yk2 as $m4is_29gzevpx8rbkp ) {
$m4is_9kt0g0gw6hchnx9qfr .= "<option value='{$m4is_29gzevpx8rbkp}' " . ( ($m4is_29gzevpx8rbkp == $m4is_th384m7gvm775j7 ) ? ' selected="selected" ' : '' ) . ">{$m4is_29gzevpx8rbkp}</option>";

}
$m4is_94ekh14mfh8qmm1sns1zd83vgcw4s1wy = count($m4is_05bqq563kkbcq2yk2);
if ( $m4is_94ekh14mfh8qmm1sns1zd83vgcw4s1wy > 1 ) {
echo '<li><label>Keap Username Field</label>';

echo '<select id="username_field" name="username_field" class="basic-single" style="width:250px;">';
echo $m4is_9kt0g0gw6hchnx9qfr;

echo '</select>', m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(1169 ), '</li>';
}
}

private function m4is_s6avnpg5gwzd9() : array {
$m4is_7b2yfzk0054 = m4is_q28s00aabb2yd3d::m4is_d2ce9k4j3( m4is_q28s00aabb2yd3d::CONTACT_FIELDS,
 m4is_q28s00aabb2yd3d::TEXT_TYPE );
$m4is_7b2yfzk0054[] = 'MiddleName';
$m4is_7b2yfzk0054[] = 'SpouseName';
if ( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'password_field', '' ) == 'Password' ) {
$m4is_7b2yfzk0054[] = 'Password';
};
return $m4is_7b2yfzk0054;
}

private function m4is_67dre8n4() {
$m4is_ra7dnjjzebn9h3t6k7a2p36 = [
0 =>
 'Simple Lowercase (Level 0)',
1 => '+ Uppercase Consonants (Level 1)',
2 => '+ Uppercase Vowels (Level 2)',
3 => '+ Numbers (Level 3)',

4 => '+ Symbols (Level 4)',
];
if ( m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' ) !== 'Password' ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36[5] = '4 Word Passphrase';
$m4is_ra7dnjjzebn9h3t6k7a2p36[6] = '5 Word Passphrase';

}
return $m4is_ra7dnjjzebn9h3t6k7a2p36;
}
}


