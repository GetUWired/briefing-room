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

final class m4is_c7665dztd9tk {
private $m4is_132xe588j;
function __construct() {
$this->m4is_z6c3r724qhd();
$this->m4is_9neh4mnqf20jm04rs977();

}
private function m4is_z6c3r724qhd() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
private function m4is_9neh4mnqf20jm04rs977() {
$this->m4is_q59kb9e32();
add_action( 'memberium/shortcodes/add', [$this, 'm4is_q59kb9e32'],
 10, 0 );
add_action( 'memberium/shortcodes/remove', [$this, 'm4is_rhdtc1p88r38p7yr99g'], 10, 0 );
if ( ! empty( $_POST['memb_form_type'] ) ) {
add_action( 'template_redirect',
 [$this, 'm4is_f8t6jcztcpa06z9g9zpvypbteer'], 1 );
}
}
private function m4is_rgmrg00m8mpfjmfb(): array {
$m4is_8hphzjz7d['standard'] = [
'memb_spiffy_login' =>
 'm4is_7qx3bvqg3tnabtpkp',
'memb_spiffy_debug' => 'm4is_7gsxavgpwk591cmbt68epm0',
];
return $m4is_8hphzjz7d;
}
public function m4is_f8t6jcztcpa06z9g9zpvypbteer(): void {
$m4is_z8grj8fx = strtolower( $_POST['memb_form_type'] );

$m4is_ww51hxmadk9fa1 = ['memberium/spiffy_login_button' => 'm4is_v0gjw9wmxjyew'];
if ( array_key_exists( $m4is_z8grj8fx, $m4is_ww51hxmadk9fa1 ) ) {
$m4is_9v6kezmcxaq169mv6g4naqkfwg2 = $m4is_ww51hxmadk9fa1[$m4is_z8grj8fx];

$this->$m4is_9v6kezmcxaq169mv6g4naqkfwg2();
}
}
function m4is_q59kb9e32() {
$m4is_06c8s5xs94f91335gnaey25 = $this->m4is_rgmrg00m8mpfjmfb();


if ( isset( $m4is_06c8s5xs94f91335gnaey25['standard'] ) && is_array( $m4is_06c8s5xs94f91335gnaey25['standard'] ) ) {
foreach( $m4is_06c8s5xs94f91335gnaey25['standard'] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab ) {
add_shortcode( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, [$this, $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab] );

}
}
}
function m4is_rhdtc1p88r38p7yr99g() {
$m4is_06c8s5xs94f91335gnaey25 = $this->m4is_rgmrg00m8mpfjmfb();
if ( isset( $m4is_06c8s5xs94f91335gnaey25['standard'] ) && is_array( $m4is_06c8s5xs94f91335gnaey25['standard'] ) ) {
foreach( $m4is_06c8s5xs94f91335gnaey25['standard'] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab ) {
remove_shortcode( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 );
}
}
}



function m4is_7qx3bvqg3tnabtpkp( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if ( ! is_user_logged_in() ) {
return '';
}
$m4is_hr4rvayydtq8tfaq4f = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'spiffy_subdomain' );
$m4is_n7x0afpz = [
'button_text' => 'Get Spiffy Login',
'button_url' => '',
'css_button_class' => 'memb_spiffy_login_button',

'css_button_id' => 'memb_spiffy_login_button',
'css_button_name' => 'memb_spiffy_login_button',
'css_button_style' => '',
'css_class' =>
 'memb_spiffy_login_form',
'css_id' => 'memb_spiffy_login_form',
'css_message_class' => 'memb_spiffy_login_message',
'css_message_id' =>
 'memb_spiffy_login_message',
'css_message_style' => '',
'css_name' => 'memb_spiffy_login_form',
'css_style' => '',
'email' => wp_get_current_user()->user_email,

'message' => 'Please check your email for your Spiffy login link.',
'style' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
if ( empty( $m4is_hr4rvayydtq8tfaq4f ) && $this->m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return "<strong style='color:red;'>Admin Notice:  The [{$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4}] shortcode has been disabled due to missing configuration.</strong>";

}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium' );
$m4is_r53562w9befcb2kh7rm4p7n5 = [
'email' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['email'],
'message' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['message'],
];
$m4is_r53562w9befcb2kh7rm4p7n5 = base64_encode( serialize( $m4is_r53562w9befcb2kh7rm4p7n5 ) );

$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = $this->m4is_132xe588j->m4is_h7gapv9fzmbf( $m4is_r53562w9befcb2kh7rm4p7n5 );
$m4is_vmhtx2ecrnzjpy = wp_nonce_field( 'memb_spiffy_login_' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_id'],
 '_wpnonce', true, false );
$m4is_qc36n7jdf = '';
$m4is_5tmqg45z37r82cfb67prh = $this->m4is_132xe588j->m4is_dmfr81331w27fa3bzjyvhkbh5a( 'memb_spiffy_login' );

if ( ! empty( $m4is_5tmqg45z37r82cfb67prh ) ) {
$m4is_qc36n7jdf .= "<div id='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_message_id']}' class='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_message_class']}' style='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_message_style']}'>{$m4is_5tmqg45z37r82cfb67prh}</div>";

}
else {
$m4is_qc36n7jdf .= "<form name='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_name']}' id='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_id']}' method='post' action=''>";

$m4is_qc36n7jdf .= "<input type='hidden' name='memb_form_type' value='memberium/spiffy_login_button'>";
$m4is_qc36n7jdf .= "<input type='hidden' name='form_id' value='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_id']}'>";

$m4is_qc36n7jdf .= "<input type='hidden' name='parameters' value='{$m4is_r53562w9befcb2kh7rm4p7n5}'>";
$m4is_qc36n7jdf .= "<input type='hidden' name='signature' value='{$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn}'>";

$m4is_qc36n7jdf .= $m4is_vmhtx2ecrnzjpy;
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_url'] ) ) {
$m4is_qc36n7jdf .= "<input type='submit' style='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_button_style']}' id='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_button_id']}' value='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text']}'>";

}
else {
$m4is_qc36n7jdf .= "<input type='image' src='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_url']}' class='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_class']}' id='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_button_id']}' >";

}
$m4is_qc36n7jdf .= "</form>";
}
return $m4is_qc36n7jdf;
}
function m4is_7gsxavgpwk591cmbt68epm0( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_hr4rvayydtq8tfaq4f = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'spiffy_subdomain' );
$m4is_fkezw5dxxeeapf = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'spiffy_api_key' );

if ( current_user_can( 'manage_options' ) ) {
}

return '';
}



function m4is_v0gjw9wmxjyew() {
if (! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if (! wp_verify_nonce($_POST['_wpnonce'], "memb_spiffy_login_{$_POST['form_id']}") ) {
wp_die(_x('Security Check Failed - Nonce Validation Error',
 'memb_spiffy_login', 'memberium') );
exit;
}
if (! $this->m4is_132xe588j->m4is_43td8pwqhr6wcp55($_POST['signature'], $_POST['parameters']) ) {
wp_die(_x('Security Check Failed - Signature Validation Error',
 'memb_spiffy_login', 'memberium') );
exit;
}
$m4is_3xe2q0ghc7t1p0f123s = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'spiffy_subdomain');
$m4is_r53562w9befcb2kh7rm4p7n5 = unserialize(base64_decode($_POST['parameters']));

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = 'https://api.spiffy.co/customer-portal/auth';

$m4is_g61yzqs7ecta0xztr70d7v = [
'headers' => [
'x-subdomain' => $m4is_3xe2q0ghc7t1p0f123s,
],
'body' => [
'email' => $m4is_r53562w9befcb2kh7rm4p7n5['email'],

],
'sslverify' => false,
];
$m4is_hartbe843crydzh = wp_remote_post($m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, $m4is_g61yzqs7ecta0xztr70d7v);

$this->m4is_132xe588j->m4is_y62rh9h80sg34je11vxmmn08b0('memb_spiffy_login', $m4is_r53562w9befcb2kh7rm4p7n5['message'] );
}
}
