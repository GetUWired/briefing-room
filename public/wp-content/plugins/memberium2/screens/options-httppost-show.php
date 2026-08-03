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
class m4is_6djm4vjec2c9thyxekdjjr324q0s937f {
static function m4is_0jeajqd0vb99fh() {
$m4is_mn9wpxhh8n7e3 = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'default_reglink_tag');
echo '<hr>';
echo '<h3>Registration Link</h3>';
m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep('Default Registration Link Tag',
 'default_reglink_tag', $m4is_mn9wpxhh8n7e3, 'taglistdropdown', ['help_id' => 9289]);
}
static function m4is_8v6sg55dne5v1tpz0c1qvmnfhhv() {
$m4is_dmhydt6d2gv1na7516p1dv37qpmd = stripslashes_deep( m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->get_i2sdk_options() );

$m4is_mn9wpxhh8n7e3 = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'httppost_log');
$m4is_we48g8tp2r67r7sa76zag30y = empty($m4is_dmhydt6d2gv1na7516p1dv37qpmd['http_post_key']) ? '' : $m4is_dmhydt6d2gv1na7516p1dv37qpmd['http_post_key'];

$m4is_fxvd2vpkk79h1vn2bcsa6c7 = array_filter(explode(',', $m4is_we48g8tp2r67r7sa76zag30y) );
$m4is_044ym7b86w = count($m4is_fxvd2vpkk79h1vn2bcsa6c7);

$m4is_8q9r1gsg4bmzcqdq9c9sqjc = $m4is_fxvd2vpkk79h1vn2bcsa6c7[mt_rand(0, $m4is_044ym7b86w -1)];
$m4is_4kscayje0x = get_site_url();

echo '<hr>';
echo '<h3>HTTP POST URLs</h3>';
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww('HTTP POST Log', 'httppost_log', 21923,
 $m4is_mn9wpxhh8n7e3);
m4is_dv250ra9xbtaf::m4is_f8vws9aeenhp('HTTP POST Auth Keys', 'http_post_key', $m4is_we48g8tp2r67r7sa76zag30y,
 ['help_id' => 3699, 'disabled' => true, 'style' => 'text-align:left;width:350px;']);
echo '<p style="margin-left:25px;">For all provided links below, please verify the http/https in your links match the actual URL of your site.</p>';

if ($m4is_044ym7b86w > 0) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = $m4is_4kscayje0x . '/?operation=contact-update&auth_key=' . urlencode($m4is_8q9r1gsg4bmzcqdq9c9sqjc );

echo '<p style="margin-left:25px;"><b>Update Contact Example:</b> <input type="text" value="' . $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq . '" size="100">';

echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(0617);
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = $m4is_4kscayje0x . '/?operation=makepass&auth_key=' . urlencode($m4is_8q9r1gsg4bmzcqdq9c9sqjc );

echo '<p style="margin-left:25px;"><b>Password Generator Example:</b> <input type="text" value="' . $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq . '" size="100">';

echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(0613);
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = $m4is_4kscayje0x . '/?operation=contact-delete&auth_key=' . urlencode($m4is_8q9r1gsg4bmzcqdq9c9sqjc );

echo '<p style="margin-left:25px;"><b style="color:red;">Delete User Example:</b> <input type="text" value="' . $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq . '" size="100">';

}
else {
echo '<p><b>Please create your Auth key in the i2SDK to enable functionality.</b></p>';
}
}
static function m4is_agmwkg4h9j0dhw9pz0n2bg() {
$m4is_99rep91sjnf1mr = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'allow_autologin');
$m4is_th384m7gvm775j7 = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'username_field');
echo '<hr>',
'<h3>Autologin URLs</h3>',
'<div style="margin-left:25px">';
if ($m4is_99rep91sjnf1mr) {
$m4is_fxvd2vpkk79h1vn2bcsa6c7 = array_filter(explode(',',
 m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'autologin_authkeys') ) );

$m4is_044ym7b86w = count($m4is_fxvd2vpkk79h1vn2bcsa6c7);
if ($m4is_044ym7b86w) {
$m4is_7vdc65w311rh47hp6jgrm3jwk5v6kvsc = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(363);

$m4is_4kscayje0x = get_site_url();
$m4is_8q9r1gsg4bmzcqdq9c9sqjc = urlencode($m4is_fxvd2vpkk79h1vn2bcsa6c7[mt_rand(0, $m4is_044ym7b86w - 1)]);

$m4is_07sgyda5y9dq77ecbr50g7ev5 = "{$m4is_4kscayje0x}/?memb_autologin=yes&auth_key={$m4is_8q9r1gsg4bmzcqdq9c9sqjc}&Id=~Contact.Id~&{$m4is_th384m7gvm775j7}=~Contact.Email~&redir=/your-page/";

$m4is_8z10s9becc3qrhbbt80svsmyepd = "{$m4is_4kscayje0x}/?memb_autologin=yes&auth_key={$m4is_8q9r1gsg4bmzcqdq9c9sqjc}&forcelogin=1&redir=/your-page/";

echo "<p>For all provided links below, please verify the http/https in your links match the actual URL of your site. {$m4is_7vdc65w311rh47hp6jgrm3jwk5v6kvsc}</p>";

echo '<p><b>Email Autologin Example:</b> <input type="text" value="' . $m4is_07sgyda5y9dq77ecbr50g7ev5 . '" size="80"></p>';
echo '<p><b>Order Form Autologin Example:</b> <input type="text" value="' . $m4is_8z10s9becc3qrhbbt80svsmyepd . '" size="80"></p>';

}
else {
echo '<p><b>Please create your Auth keys to enable functionality.</b></p>';
}
}
else {
echo '<p>Autologin Disabled</p>';
}
echo '</div>';

}
static function m4is_k6vwewea2day0gbhq() {
$m4is_fxvd2vpkk79h1vn2bcsa6c7 = array_filter(explode(',', m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'autologin_authkeys') ) );
$m4is_4kscayje0x = get_site_url();
$m4is_7vdc65w311rh47hp6jgrm3jwk5v6kvsc = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(16681,
 $m4is_cwv4aa9zak1r37 = 'What\'s this?');
echo '<hr />';
echo '<h3>New User Confirmation Links</h3>';
echo '<p style="margin-left:25px;">For all provided links below, please verify the http/https in your links match the actual URL of your site. ',
 $m4is_7vdc65w311rh47hp6jgrm3jwk5v6kvsc, '</p>';
foreach ($m4is_fxvd2vpkk79h1vn2bcsa6c7 as $m4is_8q9r1gsg4bmzcqdq9c9sqjc ) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = "{$m4is_4kscayje0x}/?action=confirmregistration&authkey={$m4is_8q9r1gsg4bmzcqdq9c9sqjc}&email=~Contact.Email~&cid=~Contact.Id~";

echo '<div style="margin-left:25px">';
echo '<p><strong>Confirmation Link Example:</strong> <input type="text" value="' . $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq . '" size="80"></p>';

echo '</div>';
}
}
static function m4is_dqv76j5kfy7zdb2() {
$m4is_wte2qk9hdk1zj7 = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'password_field');
$m4is_cwv4aa9zak1r37 = "Password:  <input id='Contact0{$m4is_wte2qk9hdk1zj7}' name='Contact0{$m4is_wte2qk9hdk1zj7}' type='password' class='regula-validation' data-constraints='@Required(label=&quot;Your Password&quot;, groups=[customer])' /><br /><br />";

$m4is_7vdc65w311rh47hp6jgrm3jwk5v6kvsc = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(21931);
if ($m4is_wte2qk9hdk1zj7 <> 'Password' ) {
echo '<hr />';

echo '<h3>Order Form Password HTML</h3>',
'<div style="margin-left:25px">',
$m4is_7vdc65w311rh47hp6jgrm3jwk5v6kvsc,
'<p><strong>Order Form Password Field:</strong>',

'<input type="text" name="" id="" size="80" value="', htmlentities($m4is_cwv4aa9zak1r37 ), '"></p>',
'</div>';
}
}
static function m4is_ranr89c2gngyncmfbwyag76f1rq() {
echo '<ul>';

echo '<form method="POST" action="">';
wp_nonce_field( m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_54b9bwwsx7sym(),
 'memberium_options_nonce' );
m4is_6djm4vjec2c9thyxekdjjr324q0s937f::m4is_0jeajqd0vb99fh();
m4is_6djm4vjec2c9thyxekdjjr324q0s937f::m4is_8v6sg55dne5v1tpz0c1qvmnfhhv();

m4is_6djm4vjec2c9thyxekdjjr324q0s937f::m4is_agmwkg4h9j0dhw9pz0n2bg();
m4is_6djm4vjec2c9thyxekdjjr324q0s937f::m4is_k6vwewea2day0gbhq();

m4is_6djm4vjec2c9thyxekdjjr324q0s937f::m4is_dqv76j5kfy7zdb2();
echo '</ul>';
echo '<p><input type="submit" value="Update" class="button-primary"></p>';

echo '</form>';
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_h9t0p5fc1('view_http_post' );
}
private function __construct() {}
}
m4is_6djm4vjec2c9thyxekdjjr324q0s937f::m4is_ranr89c2gngyncmfbwyag76f1rq();

