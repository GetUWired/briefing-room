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

final class m4is_95wwwbse2er949xa6svafa6 {
private object $m4is_132xe588j;
private bool $shortcodes_registered = false;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_jp0rgxf2ytap1chmfg();

$this->m4is_5eragr7sh2yyj356m();
}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}

public function m4is_730q2jkq66wp5may42a351zez9() {
}

function m4is_5eragr7sh2yyj356m() {
add_action( 'init', [$this, 'm4is_730q2jkq66wp5may42a351zez9'] );

add_action( 'memberium/shortcodes/add', [$this, 'm4is_jp0rgxf2ytap1chmfg'] );
add_action( 'memberium/shortcodes/remove', [$this, 'm4is_qk0wmhnm'] );

if ( ! empty( $_POST['memb_form_type'] ) ) {
add_action( 'template_redirect', [$this, 'm4is_f8t6jcztcpa06z9g9zpvypbteer'], 1 );
}
if ( isset( $_GET['memb_actionlink'] ) && isset($_GET['verification'] ) ) {
add_action( 'init',
 [$this, 'm4is_r3vvv7s8k2kyad9r9'] );
}
}



function m4is_rgmrg00m8mpfjmfb() : array {
$m4is_06c8s5xs94f91335gnaey25 = [];
$m4is_06c8s5xs94f91335gnaey25['nested'] = [
];

$m4is_06c8s5xs94f91335gnaey25['standard'] = [
'memb_spiffy_checkout' => 'm4is_8dxyecax5c13x4pbm',
'memb_video_progress' => 'm4is_r0kadje1nz6km',


];
return $m4is_06c8s5xs94f91335gnaey25;
}
function m4is_jp0rgxf2ytap1chmfg() {
$m4is_06c8s5xs94f91335gnaey25 = $this->m4is_rgmrg00m8mpfjmfb();


foreach ($m4is_06c8s5xs94f91335gnaey25['standard'] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 => $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab) {
if (is_array($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab)) {
add_shortcode($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab);
}
else {
add_shortcode($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, [$this, $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab]);

}
}

foreach ($m4is_06c8s5xs94f91335gnaey25['nested'] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 => $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab) {
$m4is_sjjed77r6tc8e = $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[1];

add_shortcode($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, [$this, $m4is_sjjed77r6tc8e] );
for ($m4is_5vcwef7pymrfb3zawe = 1; $m4is_5vcwef7pymrfb3zawe < (int) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[0];
 $m4is_5vcwef7pymrfb3zawe++) {
add_shortcode("{$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0}{$m4is_5vcwef7pymrfb3zawe}", [$this, $m4is_sjjed77r6tc8e]);

}
}
}
function m4is_qk0wmhnm() {
$m4is_06c8s5xs94f91335gnaey25 = $this->m4is_rgmrg00m8mpfjmfb();
if (isset($m4is_06c8s5xs94f91335gnaey25['standard']) && is_array($m4is_06c8s5xs94f91335gnaey25['standard']) ) {
foreach ($m4is_06c8s5xs94f91335gnaey25['standard'] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab) {
remove_shortcode($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0);
}
}
if (isset($m4is_06c8s5xs94f91335gnaey25['nested']) && is_array($m4is_06c8s5xs94f91335gnaey25['nested']) ) {
foreach ($m4is_06c8s5xs94f91335gnaey25['nested'] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab) {
remove_shortcode($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0);
for ($m4is_5vcwef7pymrfb3zawe = 1; $m4is_5vcwef7pymrfb3zawe < (int) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[0];
 $m4is_5vcwef7pymrfb3zawe++) {
remove_shortcode($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 . $m4is_5vcwef7pymrfb3zawe);
}
}
}
}




function m4is_8dxyecax5c13x4pbm( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if (! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return '';

}
if (is_feed() ) {
return '';
}
$m4is_n7x0afpz = [
'url' => '', 
'omit_js' => false,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_hr4rvayydtq8tfaq4f = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'spiffy_subdomain');
if ( empty( $m4is_hr4rvayydtq8tfaq4f ) ) {
if ( $this->m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return '<p style="color:red;font-weight:bold;">Spiffy Subdomain not defined.</p>';

}
return '';
}
if ( $this->m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return '<p style="color:red;font-weight:bold;">Spiffy Checkout not supported when logged in as Admin.</p>';

}
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = wp_get_current_user();
$m4is_zxwt8y3szyy1aenkh = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ? $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email : '';

$m4is_n7x0afpz = [
'url' => '', 
'omit_js' => false,
];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
if ($m4is_zxwt8y3szyy1aenkh) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'] . '?email=' . urlencode($m4is_zxwt8y3szyy1aenkh);

}
if (! $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['omit_js']) {
add_action('wp_footer', [$this, 'm4is_ey52fd2394arwn']);
}
return '<spiffy-checkout url="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'] . '"></spiffy-checkout>';



}
function m4is_ey52fd2394arwn() {
$m4is_hr4rvayydtq8tfaq4f = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'spiffy_subdomain');
if ( empty( $m4is_hr4rvayydtq8tfaq4f )) {
return '';
}
echo '<script>
		"use strict";!function(t,e){var i=e.spiffy=e.spiffy||[];if(!i.init){
			if(i.invoked)return void(e.console&&console.error&&console.warn("Spiffy Elements included twice."))
			;i.invoked=!0,i.methods=["identify","config","reset","debug","off","on"],i.factory=function(t){
			return function(){var e=Array.prototype.slice.call(arguments);return e.unshift(t),i.push(e),i}},
			i.methods.forEach(function(t){spiffy[t]=i.factory(t)}),i.load=function(e){if(!spiffy.ACCOUNT){
			spiffy.ACCOUNT=e;var i=t.createElement("script");i.type="text/javascript",i.async=!0,
			i.crossorigin="anonymous",i.src="https://js.static.spiffy.co/spiffy.js?a="+e
			;var n=t.getElementsByTagName("script")[0];n.parentNode.insertBefore(i,n)}}}}(document,window),
			spiffy.SNIPPET_VERSION="1.0.2";

			spiffy.load("',
 $m4is_hr4rvayydtq8tfaq4f, '");
		</script>';
}
function m4is_r0kadje1nz6km( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if (! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return '';

}
if (is_feed() ) {
return '';
}
$m4is_n7x0afpz = [
'src' => '',
'time_tags' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if (! function_exists('m4is_0nagc31yxq68fqaa9x') ){
require_once $this->m4is_132xe588j->m4is_54b9bwwsx7sym() . '/shortcodes/video-progress/video-progress.php';

}

if (current_user_can('manage_options') || !is_user_logged_in() ) {
return '';
}
m4is_2813a7g88a8sfyxpff9tfp()->m4is_2xkdrr1weebvryk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4);
return '';
}



function m4is_f8t6jcztcpa06z9g9zpvypbteer() {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_z8grj8fx = strtolower($_POST['memb_form_type']);
$m4is_ww51hxmadk9fa1 = [
'memb_reset_password' => 'm4is_q5jgmywr',
];
if ( array_key_exists( $m4is_z8grj8fx,
 $m4is_ww51hxmadk9fa1 ) ) {
$m4is_9v6kezmcxaq169mv6g4naqkfwg2 = $m4is_ww51hxmadk9fa1[$m4is_z8grj8fx];
$this->$m4is_9v6kezmcxaq169mv6g4naqkfwg2();

}
}
function m4is_r3vvv7s8k2kyad9r9() {
if (! wp_verify_nonce($_GET['verification'], $_GET['memb_actionlink']) ) {
return;
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_knxbec8fr3be1s2tkx0ydee0z = unserialize( base64_decode( $_GET['memb_actionlink'] ) );
$m4is_csx0y36xw = $m4is_knxbec8fr3be1s2tkx0ydee0z['debug'];

if ( $m4is_csx0y36xw ) {
echo '<pre>';
echo __LINE__, " - Set ActionSet = {$m4is_knxbec8fr3be1s2tkx0ydee0z['actionset']}<br />";
echo __LINE__,
 " - Set ContactId = {$m4is_knxbec8fr3be1s2tkx0ydee0z['contact_id']}<br />";
echo __LINE__, " - Set FUS       = {$m4is_knxbec8fr3be1s2tkx0ydee0z['fus']}<br />";

echo __LINE__, " - Set Goals     = {$m4is_knxbec8fr3be1s2tkx0ydee0z['goals']}<br />";
echo __LINE__, " - Set Tags      = {$m4is_knxbec8fr3be1s2tkx0ydee0z['tags']}<br />";

echo __LINE__, " - Set Tokens    = {$m4is_knxbec8fr3be1s2tkx0ydee0z['tokens']}<br />";
echo __LINE__, " - Set Redirect  = {$m4is_knxbec8fr3be1s2tkx0ydee0z['redirect']}<br />";

}
if ($m4is_knxbec8fr3be1s2tkx0ydee0z['contact_id']) {
if (! empty($m4is_knxbec8fr3be1s2tkx0ydee0z['actionset']) ) {
$this->m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse($m4is_knxbec8fr3be1s2tkx0ydee0z['actionset'],
 $m4is_knxbec8fr3be1s2tkx0ydee0z['contact_id']);
}
if (! empty($m4is_knxbec8fr3be1s2tkx0ydee0z['fus']) ) {
$this->m4is_132xe588j->m4is_v6e1tsfbgfjk062m8xcq($m4is_knxbec8fr3be1s2tkx0ydee0z['fus'],
 $m4is_knxbec8fr3be1s2tkx0ydee0z['contact_id']);
}
if (! empty($m4is_knxbec8fr3be1s2tkx0ydee0z['goals']) ) {
$this->m4is_132xe588j->m4is_5qyk7ea4p2nw8ph($m4is_knxbec8fr3be1s2tkx0ydee0z['goals'],
 $m4is_knxbec8fr3be1s2tkx0ydee0z['contact_id']);
}
if (! empty($m4is_knxbec8fr3be1s2tkx0ydee0z['tags']) ) {
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx($m4is_knxbec8fr3be1s2tkx0ydee0z['tags'],
 $m4is_knxbec8fr3be1s2tkx0ydee0z['contact_id']);
}
}
if (! empty($m4is_knxbec8fr3be1s2tkx0ydee0z['tokens']) ) {
$this->m4is_132xe588j->m4is_g3gsedmkn2e($m4is_knxbec8fr3be1s2tkx0ydee0z['tokens']);

}
$this->m4is_132xe588j->m4is_km2vptq0bwg($m4is_knxbec8fr3be1s2tkx0ydee0z['contact_id']);
$this->m4is_132xe588j->m4is_mz8ypkzzr4fxz8e42njma37v6ge02($m4is_knxbec8fr3be1s2tkx0ydee0z['contact_id']);

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( get_current_user_id() );
if ($m4is_csx0y36xw) {
$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'keap', 'contact', [] );
echo print_r( $m4is_6mctr922hbmncpwfrp0x2k, true);
echo '<a href="', $m4is_knxbec8fr3be1s2tkx0ydee0z['redirect'],
 '">', _x('Continue...', 'memb_action_link', 'memberium'), '</a>';
echo '</pre>';
exit;
}
if ($m4is_knxbec8fr3be1s2tkx0ydee0z['redirect'] > '') {
m4is_9d8n6yra072mpxd0pczne9::m4is_67nqhgcsb0p43k96hkt933aagr1c7c6();

wp_redirect($m4is_knxbec8fr3be1s2tkx0ydee0z['redirect']);
exit;
}
}
function m4is_q5jgmywr() {
if (! wp_verify_nonce($_POST['_wpnonce'],
 'memb_reset_password_' . $_POST['form_id'] . $_POST['parameters']) ) {
wp_die(_x('Security Check Failed - Nonce Validation Error',
 'memb_change_password', 'memberium') );
exit;
}
if (is_user_logged_in() ) {
return;
}
if (! wp_verify_nonce($_POST['_wpnonce'], 'memb_reset_password_' . $_POST['form_id']) ) {
wp_die(_x('Invalid Password Reset Request',
 'memb_reset_password', 'memberium') );
exit;
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
global $wpdb;
$m4is_gv7vjyv2c6g3nepw6 = unserialize(base64_decode($_POST['params']) );

if (! empty($_POST['email']) ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email', $_POST['email']);
if ($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
global $wp;

$m4is_j8j55t8dz79m7 = get_password_reset_key($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65);
$m4is_v0btf7mv632851tp3bp = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->data->user_login;

$m4is_g61yzqs7ecta0xztr70d7v = [
'action' => 'rp',
'key' => $m4is_j8j55t8dz79m7,
'login' => $m4is_v0btf7mv632851tp3bp,
];
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = home_url(add_query_arg($m4is_g61yzqs7ecta0xztr70d7v,
 $wp->request) );
if ($m4is_gv7vjyv2c6g3nepw6['template_id']) {
$m4is_rxzkwz4yaa36bggaadkmmr694amp6x = $this->m4is_132xe588j->m4is_yma580fd058zsj8bvdpxvqq($m4is_gv7vjyv2c6g3nepw6['template_id']);

$m4is_rxzkwz4yaa36bggaadkmmr694amp6x['textBody'] = str_ireplace('~Memberium.ResetURL~', $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, $m4is_rxzkwz4yaa36bggaadkmmr694amp6x['textBody']);

$m4is_rxzkwz4yaa36bggaadkmmr694amp6x['htmlBody'] = str_ireplace('~Memberium.ResetURL~', $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, $m4is_rxzkwz4yaa36bggaadkmmr694amp6x['htmlBody']);

$m4is_3qwaf6xd03657aas = [m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID)];
$this->m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->sendEmail($m4is_3qwaf6xd03657aas,
 $m4is_rxzkwz4yaa36bggaadkmmr694amp6x['fromAddress'], $m4is_rxzkwz4yaa36bggaadkmmr694amp6x['toAddress'], '', '', $m4is_rxzkwz4yaa36bggaadkmmr694amp6x['contentType'],
 $m4is_rxzkwz4yaa36bggaadkmmr694amp6x['subject'], $m4is_rxzkwz4yaa36bggaadkmmr694amp6x['htmlBody'], $m4is_rxzkwz4yaa36bggaadkmmr694amp6x['txtBody']);

}
else {
$m4is_v2qv6j0d = apply_filters('memberium_password_reset_to_email', $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->data->user_email);

$m4is_x215pkzdncmyfasv7 = apply_filters('memberium_password_reset_subject', 'Password Reset Email');
$m4is_5tmqg45z37r82cfb67prh = "Dear ~Contact.FirstName~,\n\nHere is your requested Password Reset Link:\n\n~Memberium.ResetURL~\n\n";

$m4is_5tmqg45z37r82cfb67prh = apply_filters('memberium_password_reset_wpmail_body', $m4is_5tmqg45z37r82cfb67prh);
$m4is_5tmqg45z37r82cfb67prh = str_ireplace('~Memberium.ResetURL~',
 $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, $m4is_5tmqg45z37r82cfb67prh);
$m4is_5tmqg45z37r82cfb67prh = str_ireplace('~Contact.FirstName~',
 $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->first_name, $m4is_5tmqg45z37r82cfb67prh);
wp_mail($m4is_v2qv6j0d, $m4is_x215pkzdncmyfasv7, $m4is_5tmqg45z37r82cfb67prh);

}
}
else {

}
}
elseif ($_POST['password2'] == $_POST['password1']) {
$m4is_0864dacae86e26c2nevtsd8y1 = true;
if (empty($_POST['password1']) || empty($_POST['password2']) ) {
$m4is_0864dacae86e26c2nevtsd8y1 = false;

}
if (strlen($_POST['password1']) < $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'min_password_length') ) {
$m4is_0864dacae86e26c2nevtsd8y1 = false;

}
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = check_password_reset_key( $_POST['key'], $_POST['login'] );
if ( 'WP_User' == get_class( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID);

$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = $_POST['password1'];
$m4is_kekgrkcv3q1fd6gkktzd = wp_hash_password( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g );

$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE %i SET `user_pass` = %s WHERE `ID` = %d";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 $wpdb->users, $m4is_kekgrkcv3q1fd6gkktzd, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {

$m4is_akd4cjvbhtckz56 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'local_auth_only');
if (empty($m4is_akd4cjvbhtckz56) ) {
$m4is_wte2qk9hdk1zj7 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'password_field');
$m4is_46mk286a9b51zt4aweshvcbzah0m = [
$m4is_wte2qk9hdk1zj7 => $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g,
];
m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_46mk286a9b51zt4aweshvcbzah0m); 

$m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');
$m4is_csnk3yn47 = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();

$m4is_wte2qk9hdk1zj7 = $m4is_wte2qk9hdk1zj7;
$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE {$m4is_csnk3yn47} SET `value` = '%s' WHERE id = %d AND `appname` = '%s' AND `fieldname` = '%s'; ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_v4beyw7zqhr3, $m4is_wte2qk9hdk1zj7 );
$m4is_hartbe843crydzh = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
}

get_password_reset_key($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65);

}
else {

}
}
}
}