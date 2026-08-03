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
new m4is_ggjyt6j2cd();

final class m4is_ggjyt6j2cd {
private $m4is_132xe588j;
private $m4is_p0sb67z3bm9mw6r2g4zkhs;
private $m4is_rjmk9nzcsr0;
private $m4is_8ew58cpxmftgpw93gdffm4s9bbwy;

private $m4is_kgdw36kdpg5wt2t33r;
private $m4is_6pk378gh86a65b4by230jn8v6;
private $m4is_k8g9y37tenmrpzc;
private $m4is_0vej1bxvwjynz8psk42zkw8fqn9;

function __construct() {
$this->m4is_z6c3r724qhd();
$this->m4is_ranr89c2gngyncmfbwyag76f1rq();
}
private function m4is_z6c3r724qhd() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy = 'settings';
$this->m4is_0vej1bxvwjynz8psk42zkw8fqn9 = m4is_zrrt34b1nqxbv::m4is_yb1kyacqc84h1zq0m17py( ['unlimited'] );

$this->m4is_6pk378gh86a65b4by230jn8v6 = m4is_zrrt34b1nqxbv::m4is_yb1kyacqc84h1zq0m17py( ['trial'] );
$this->m4is_p0sb67z3bm9mw6r2g4zkhs = m4is_zrrt34b1nqxbv::m4is_yb1kyacqc84h1zq0m17py( ['domain',
 'unlimited', 'icc', 'qatest'] );
$this->m4is_kgdw36kdpg5wt2t33r = [
'style' => 'text-align:right;width:80px;'
];
$this->m4is_rjmk9nzcsr0 = [
'min' =>
 0
];
$this->m4is_k8g9y37tenmrpzc = [
'units' => 'seconds'
];
}
private function m4is_ranr89c2gngyncmfbwyag76f1rq() {
echo '<form method="POST" action="">';

wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(), 'memberium_options_nonce' );
$this->m4is_h47k2xhx9a13ve2m7180qfhqd3p0m8();

$this->m4is_16jtmhnpgy9xcx7yz();
$this->m4is_mr9g6r6ypmz0ne2j02r06vvp0hrjnqfd();
$this->m4is_cndkzx4d();
$this->m4is_zxnn16kd3bz0en7fj4q9smq1vpad();

echo '</ul>';
echo '<p><input type="submit" value="Update" class="button-primary"></p>';
echo '</form>';
}
private function m4is_h47k2xhx9a13ve2m7180qfhqd3p0m8() {
$m4is_vjvdekjyb3v8f9a90x = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'disable_login_sync', 0 );
$m4is_22254npgr19 = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'max_contact_age', 0 );
$m4is_j2eev5mw = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'max_affiliate_age', 0 );
$m4is_bcaegjyg = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'session_timeout', 0 );
echo '<ul>';
echo '<h3>Cache Tuning</h3>';
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Disable Login Sync/Actions',
 'disable_login_sync', 0, $m4is_vjvdekjyb3v8f9a90x );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww(
'Persistent Login',
'persistent_login',
 0000,
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'persistent_login', 0)
);
m4is_dv250ra9xbtaf::m4is_1nj1ys2vvgakb6bgcgt6g(
'Maximum Contact Cache Age',
'max_contact_age',
$m4is_22254npgr19,

[
'help_id' => 1189,
$this->m4is_rjmk9nzcsr0,
$this->m4is_kgdw36kdpg5wt2t33r,
$this->m4is_k8g9y37tenmrpzc
]
);
m4is_dv250ra9xbtaf::m4is_1nj1ys2vvgakb6bgcgt6g(
'Maximum Affiliate Cache Age',

'max_affiliate_age',
$m4is_j2eev5mw,
[
'help_id' => 21913,
$this->m4is_rjmk9nzcsr0,
$this->m4is_kgdw36kdpg5wt2t33r,
$this->m4is_k8g9y37tenmrpzc,

]
);

echo '<hr>';
}
private function m4is_16jtmhnpgy9xcx7yz() {
$m4is_arn1z487w2h1 = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'async_limit', 0 );
$m4is_r8e5z217z4avbjjb0hp46msb39z = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'async_tag', 0 );
echo '<h3>Background Contact Sync</h3>';
$m4is_g61yzqs7ecta0xztr70d7v = [
'min' => 0,
'max' => 1000,
'help_id' =>
 0,
'disabled' => (int) ! $this->m4is_0vej1bxvwjynz8psk42zkw8fqn9,
$this->m4is_kgdw36kdpg5wt2t33r,
$this->m4is_k8g9y37tenmrpzc
];
m4is_dv250ra9xbtaf::m4is_1nj1ys2vvgakb6bgcgt6g( 'Sync Size',
 'async_limit', $m4is_arn1z487w2h1, $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_g61yzqs7ecta0xztr70d7v = [
'help_id' => 0,

];
m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep( 'Sync Tag',
 'async_tag', $m4is_r8e5z217z4avbjjb0hp46msb39z, 'taglistdropdown', $m4is_g61yzqs7ecta0xztr70d7v );
echo '<hr>';
}
private function m4is_mr9g6r6ypmz0ne2j02r06vvp0hrjnqfd() {
$m4is_aza9cntdb1d54fyt6trqzxvqfnp7g = defined( 'I2SDK_VERSION' ) && ( I2SDK_VERSION < 4 );

$m4is_y5xx728yn2rnbjdfj3e = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'fast_user_list', 0 );
$m4is_zr9hpmge9038qsd6jj5t5zwfxfkg5yw = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'plaintext_db', 0 );

$m4is_33rq52x9yptpwkbchd = true;
echo '<h3>Misc Settings</h3>';
if ( $this->m4is_0vej1bxvwjynz8psk42zkw8fqn9 ) {
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Fast User List (Pro+)',
 'fast_user_list', 22093, $m4is_y5xx728yn2rnbjdfj3e );
}
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Remove Accented Characters',
 'plaintext_db', 13296, $m4is_zr9hpmge9038qsd6jj5t5zwfxfkg5yw );

echo '<hr>';
}
private function m4is_cndkzx4d() {
$m4is_7dmh957r0xy8413hzt1taz9t = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'sync_affiliate', 0 );
$m4is_8n279n6zgqp16k = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'sync_tag_details',
 0 );
$m4is_eb2paydh7h5zha0c9n = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'sync_ecommerce',
 0 );
$m4is_he9e04dd5xy65yey11rvdb5mp1 = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'sync_meta_updates',
 0 );
echo '<h3>Login-Time Synchronization</h3>';
echo '<p>Please review the online documentation, or contact support <em>before</em> activating these features.</p>';

m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Synchronize Affiliate Records', 'sync_affiliate', 2686, $m4is_7dmh957r0xy8413hzt1taz9t );

m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Synchronize Tag Dates', 'sync_tag_details', 4038, $m4is_8n279n6zgqp16k );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Synchronize eCommerce Records',
 'sync_ecommerce', 2689, $m4is_eb2paydh7h5zha0c9n );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Sync Meta Updates', 'sync_meta_updates',
 19152, $m4is_he9e04dd5xy65yey11rvdb5mp1 );
echo '<hr>';
}
private function m4is_zxnn16kd3bz0en7fj4q9smq1vpad() {
$m4is_jt3s6y3hdtchmmg6ze3yvw4r = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'microcache_compat_session', 0 );
$m4is_e84w9fhh = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'db_sessions', 0 );

echo '<hr>';
}
}
