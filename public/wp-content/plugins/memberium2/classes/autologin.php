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

final class m4is_nx5pgw27fjja2gmg2fb3a17cd3dq6 {



static private $m4is_132xe588j;
static private $m4is_8fgy70e9xfm = false;
static private $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;

static private $m4is_562x78yvcsqa2qz69njxhhm8c21 = 0;
static private $m4is_z8686b3evxk2t1 = 0;
public static function m4is_pa3zn90hch396jcxr0v070j() {
if ( ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return;

}
global $wpdb, $wp_rewrite;
self::$m4is_z8686b3evxk2t1 = microtime( true );
if ( empty( $wp_rewrite ) ) {
$wp_rewrite = new WP_Rewrite();

}
$m4is_wte2qk9hdk1zj7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'password_field' );
$m4is_akd4cjvbhtckz56 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'local_auth_only', false );
$m4is_afasb9qqmh8d8p54060yanpm57q4p59 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'site_ban_tag' );
$m4is_rb8k61qek9k5dv1pr2zv4basehpwj6af = empty( $_GET['auth_key'] ) ? '' : trim( $_GET['auth_key'] );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty( $_GET['Id'] ) ? 0 : (int) $_GET['Id'];

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty( $_GET['contactId'] ) ? $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp : (int) trim( $_GET['contactId'] );

$m4is_z331qzpscyepmkg = empty( $_GET['orderId'] ) ? 0 : (int) $_GET['orderId'];
$m4is_aczehtt06z8n2h = empty( $_GET['Email'] ) ? '' :$_GET['Email'];

$m4is_aczehtt06z8n2h = empty( $_GET['Contact0Email'] ) ? $m4is_aczehtt06z8n2h : $_GET['Contact0Email'];
$m4is_aczehtt06z8n2h = empty( $_GET['inf_field_Email'] ) ? $m4is_aczehtt06z8n2h : $_GET['inf_field_Email'];

$m4is_aczehtt06z8n2h = strtolower( trim( strtr( $m4is_aczehtt06z8n2h, ' ', '+' ) ) );
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = empty( $_GET['tag_ids']) ? '' : trim( $_GET['tag_ids'] );

$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = false;
$m4is_f70ygqq1v2z1wx509d59 = false;
$m4is_nb7syvv7x87w52espk = ! empty($_GET['inf_field_BrowserLanguage']);

$m4is_3b6q77wj8ea5n8arnksr = false;
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = self::m4is_xp87fm3h4kkkhv1adqs9y9hpfk8d0($_GET);
self::m4is_54qw0qa2yxqyknxbk7d( 'Starting Request at ' . self::$m4is_z8686b3evxk2t1 );


if (! empty( $m4is_tfecza742dzhrkkbv781dnbvf40m6 ) ) {
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_2zc273hkf5r( $m4is_tfecza742dzhrkkbv781dnbvf40m6 );

}

self::m4is_54qw0qa2yxqyknxbk7d( 'Starting Order Check at ' . microtime( true ) . ' / ' . ( microtime( true ) - self::$m4is_z8686b3evxk2t1 ) );

if ( empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) && ! empty( $m4is_z331qzpscyepmkg ) ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::m4is_s5dtem83fk3ym0nc6tazt( $m4is_z331qzpscyepmkg );

}
self::m4is_54qw0qa2yxqyknxbk7d( 'Completing Order Check at ' . microtime( true ) . ' / ' . ( microtime( true ) - self::$m4is_z8686b3evxk2t1 ) );

self::$m4is_562x78yvcsqa2qz69njxhhm8c21 = m4is_c2ry5jv8yz446k40191::m4is_nx69e5png6y6v( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, 'autologin',
 'Autologin' );
$m4is_r53562w9befcb2kh7rm4p7n5 = empty( $_SERVER['REQUEST_URI'] ) ? serialize( $_GET ) : $_SERVER['REQUEST_URI'];
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 'Parameters ' . $m4is_r53562w9befcb2kh7rm4p7n5 );
self::m4is_54qw0qa2yxqyknxbk7d(__LINE__ . ' - NOTICE:  Email = ' . $m4is_aczehtt06z8n2h);

self::m4is_54qw0qa2yxqyknxbk7d(__LINE__ . ' - NOTICE:  Contact ID = ' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
self::m4is_54qw0qa2yxqyknxbk7d(__LINE__ . ' - NOTICE:  Order ID = ' . $m4is_z331qzpscyepmkg);

self::m4is_54qw0qa2yxqyknxbk7d(__LINE__ . ' - NOTICE:  Redirect URL set to ' . $m4is_tfecza742dzhrkkbv781dnbvf40m6);
self::m4is_f4x2jw0eqatq( $m4is_rb8k61qek9k5dv1pr2zv4basehpwj6af );

self::m4is_k7nrwsjhgfj78xk065nr81( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::m4is_zns9vtmcjjetpfm4553k7rcqe3p( $m4is_aczehtt06z8n2h );

$m4is_cyg7rcfhzagmm5v = self::m4is_8qc1hxvw48q26vvygcn5ak7wbzqcy( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::m4is_e10d6x442pwgnarxaz8gq94v0ev02v( $m4is_cyg7rcfhzagmm5v );

$m4is_cyg7rcfhzagmm5v = self::m4is_y91sw7dxa5580r3fe95hzhxqc9chy( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_aczehtt06z8n2h, $m4is_cyg7rcfhzagmm5v );

self::m4is_pc042cqspkannm2e5qy9chd2($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_aczehtt06z8n2h, $m4is_cyg7rcfhzagmm5v);
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email',
 $m4is_aczehtt06z8n2h );
self::m4is_b4hz4b898ak1($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65);
self::m4is_54qw0qa2yxqyknxbk7d('Starting WP User Update at ' . microtime( true ) . ' / ' . ( microtime( true ) - self::$m4is_z8686b3evxk2t1) );

self::$m4is_132xe588j->m4is_f54f6mxb3zka1m( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email',
 $m4is_aczehtt06z8n2h );
self::m4is_54qw0qa2yxqyknxbk7d( 'Completing WP User Update at ' . microtime( true ) . ' / ' . ( microtime( true ) - self::$m4is_z8686b3evxk2t1 ) );

self::m4is_5v9v596pk02tawwjywsg52c1ye( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ); 
self::m4is_y2e5gtjkepch202asqsq66pnzfr30( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );

self::m4is_bmme2kfwt33m1an0gt8fjd16dczatv( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_tfecza742dzhrkkbv781dnbvf40m6 );
self::m4is_54qw0qa2yxqyknxbk7d( 'Starting Login at ' . microtime( true ) . ' / ' . ( microtime( true ) - self::$m4is_z8686b3evxk2t1 ) );

self::m4is_j1twj1esrv1pdphhjrp( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;

$_POST['pwd'] = $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] ?? '';
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = m4is_an0pxqdph6ax26586c::m4is_kknrpk8c5pbp9dd($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65);
if ( is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'WP_User' ) ) {
m4is_an0pxqdph6ax26586c::m4is_rf7gc6dzkjjgmdb( $m4is_aczehtt06z8n2h );
wp_set_current_user($m4is_wk4dh1rnd3wmwvsggq51nhn87);

$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = apply_filters('wp_authenticate_user', $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, '');
self::$m4is_132xe588j->m4is_h9t0p5fc1('do_autologin');

}
self::m4is_54qw0qa2yxqyknxbk7d('Completing Login at ' . microtime( true ) . ' / ' . ( microtime( true ) - self::$m4is_z8686b3evxk2t1 ) );

self::m4is_njymqjxm7aaw8egnx8drsqpczpf($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65);
setcookie( 'memberium_autologin_session', 1, 0, COOKIEPATH,
 COOKIE_DOMAIN, false, true );
wp_set_auth_cookie( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_ecwz13c1nvvm($m4is_cyg7rcfhzagmm5v,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87);
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = self::m4is_3344mevhv9gcsjnygw114a35c( $m4is_tfecza742dzhrkkbv781dnbvf40m6,
 $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );
if (self::$m4is_8fgy70e9xfm) {
echo 'Completing Successful Login at ', microtime( true ),
 ' / ', microtime( true ) - self::$m4is_z8686b3evxk2t1 ,'<br />';
echo '<pre>', print_r( m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ),
 true), '</pre>';
die();
}
do_action( 'wp_login', $m4is_aczehtt06z8n2h, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );
wp_redirect( $m4is_tfecza742dzhrkkbv781dnbvf40m6,
 302, 'Memberium Autologin' );
exit;
}

public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_8fgy70e9xfm = ! empty( $_GET['debug'] );

m4is_9d8n6yra072mpxd0pczne9::m4is_67nqhgcsb0p43k96hkt933aagr1c7c6();
}
static private function m4is_54qw0qa2yxqyknxbk7d( $m4is_5tmqg45z37r82cfb67prh ) {
if (self::$m4is_8fgy70e9xfm) {
echo $m4is_5tmqg45z37r82cfb67prh,
 '<br>';
}
}
static private function m4is_s5dtem83fk3ym0nc6tazt( $m4is_z331qzpscyepmkg = 0 ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0;

$m4is_7b2yfzk0054 = ['ContactId'];
$m4is_skkxj37nc8saew3r5abp3ptqy = m4is_xm67qjyegqdeb9wqcm::m4is_vph6cx02rq( 'Job', $m4is_z331qzpscyepmkg,
 $m4is_7b2yfzk0054 );
if ( is_array( $m4is_skkxj37nc8saew3r5abp3ptqy ) ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_skkxj37nc8saew3r5abp3ptqy['ContactId'];

}
else {
sleep( 1 );
$m4is_skkxj37nc8saew3r5abp3ptqy = m4is_xm67qjyegqdeb9wqcm::m4is_vph6cx02rq('Job', $m4is_z331qzpscyepmkg, $m4is_7b2yfzk0054);

if ( is_array( $m4is_skkxj37nc8saew3r5abp3ptqy ) ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_skkxj37nc8saew3r5abp3ptqy['ContactId'];

}
}
return $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
}
static private function m4is_xrj2qcjk5amra0nh2hf( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) {

$m4is_2bpgbderkkrtr9zf3cgeep3023e058 = false;

if (is_a($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_User')) {
$m4is_z3gyk6n5mkmat231n5kvfr900k42 = [
'manage_options',
'edit_plugins',

'edit_themes',
'edit_users',
'create_users',
'delete_users',
'delete_others_pages',
'delete_others_posts',
'edit_others_pages',
'edit_others_posts',

];
foreach($m4is_z3gyk6n5mkmat231n5kvfr900k42 as $m4is_h57f3gcgvjpvxfrymxxpdyr6r5) {
if (user_can($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 $m4is_h57f3gcgvjpvxfrymxxpdyr6r5) ) {
$m4is_2bpgbderkkrtr9zf3cgeep3023e058 = true;
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f(self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 'User is a non-subscriber:  ' . $m4is_h57f3gcgvjpvxfrymxxpdyr6r5);
if (self::$m4is_8fgy70e9xfm) echo __LINE__, ' - Blocked Capability:  ' . $m4is_h57f3gcgvjpvxfrymxxpdyr6r5 . '<br />';

break;
}
}
}
return $m4is_2bpgbderkkrtr9zf3cgeep3023e058;
}

static private function m4is_xp87fm3h4kkkhv1adqs9y9hpfk8d0( $m4is_h0n0e21dan1zcw2g33p27097pbmq6v ) {
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = empty( $m4is_h0n0e21dan1zcw2g33p27097pbmq6v['redir'] ) ? '' : $m4is_h0n0e21dan1zcw2g33p27097pbmq6v['redir'];

$m4is_gv7vjyv2c6g3nepw6 = self::m4is_79ydwx7wx1rcbdp( $m4is_h0n0e21dan1zcw2g33p27097pbmq6v );
$m4is_93ayqh90z = apply_filters('memberium/autologin/redirect/parameters',
 $m4is_gv7vjyv2c6g3nepw6, $m4is_h0n0e21dan1zcw2g33p27097pbmq6v);
foreach($m4is_93ayqh90z as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_93ayqh90z[$m4is_j8j55t8dz79m7] = rawurlencode($m4is_rqxytszfq5v6syth1csqqxvy5);

}
return add_query_arg($m4is_93ayqh90z, $m4is_tfecza742dzhrkkbv781dnbvf40m6);
}

static private function m4is_79ydwx7wx1rcbdp( $m4is_h0n0e21dan1zcw2g33p27097pbmq6v = [] ) {
$m4is_19x1c17et728k945 = [
'affiliate',

'utm_campaign',
'utm_content',
'utm_medium',
'utm_source',
'utm_term',
];
$m4is_19x1c17et728k945 = apply_filters('memberium/autologin/redirect/whitelised_params',
 $m4is_19x1c17et728k945);
$m4is_gv7vjyv2c6g3nepw6 = [];
foreach( $m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
if ( isset($m4is_h0n0e21dan1zcw2g33p27097pbmq6v[$m4is_j8j55t8dz79m7] ) ) {
$m4is_gv7vjyv2c6g3nepw6[$m4is_j8j55t8dz79m7] = $m4is_h0n0e21dan1zcw2g33p27097pbmq6v[$m4is_j8j55t8dz79m7];

}
}
return $m4is_gv7vjyv2c6g3nepw6;
}

static private function m4is_f4x2jw0eqatq( $m4is_rb8k61qek9k5dv1pr2zv4basehpwj6af = '' ) {
$m4is_my3xmw3az393mvsqbgm307c = array_filter( explode( ',',
 self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'autologin_authkeys' ) ) );
if (empty($m4is_rb8k61qek9k5dv1pr2zv4basehpwj6af) || ! in_array($m4is_rb8k61qek9k5dv1pr2zv4basehpwj6af,
 $m4is_my3xmw3az393mvsqbgm307c) ) {
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f(self::$m4is_562x78yvcsqa2qz69njxhhm8c21, 'Failure - Auth Key Mismatch');

self::m4is_54qw0qa2yxqyknxbk7d(__LINE__ . ' - FAILURE:  Auth Key mismatch');
if (! self::$m4is_8fgy70e9xfm) {
wp_redirect(get_bloginfo('wpurl'),
 302, 'Memberium Autologin Failure');
}
exit;
}
}
static private function m4is_k7nrwsjhgfj78xk065nr81( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0 ) {
if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f(self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 'Failure - No Contact Id');
self::m4is_54qw0qa2yxqyknxbk7d(__LINE__ . ' - FAILURE:  Invalid Contact ID');
if (! self::$m4is_8fgy70e9xfm) {
wp_redirect(get_bloginfo('wpurl'),
 302, 'Memberium Autologin Failure');
}
exit;
}
}
static private function m4is_zns9vtmcjjetpfm4553k7rcqe3p( $m4is_aczehtt06z8n2h ) {
if (empty($m4is_aczehtt06z8n2h) ) {
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f(self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 'Failure - Email address not populated');
self::m4is_54qw0qa2yxqyknxbk7d(__LINE__ . ' - FAILURE:  Email address not populated');
if (! self::$m4is_8fgy70e9xfm) {
wp_redirect(get_bloginfo('wpurl'),
 302, 'Memberium Autologin Failure');
}
exit;
}
}
static private function m4is_e10d6x442pwgnarxaz8gq94v0ev02v( $m4is_cyg7rcfhzagmm5v ) {
if (empty($m4is_cyg7rcfhzagmm5v) ) {
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f(self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 'Failure - No contact data found');
self::m4is_54qw0qa2yxqyknxbk7d(__LINE__ . ' - FAILURE:  Empty Contact Record');
if (! self::$m4is_8fgy70e9xfm) {
wp_redirect(get_bloginfo('wpurl'),
 302, 'Memberium Autologin Failure');
}
exit;
}
}

static private function m4is_5v9v596pk02tawwjywsg52c1ye($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
if (! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f(self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 'Failure - User not found');
self::m4is_54qw0qa2yxqyknxbk7d(__LINE__ . ' - FAILURE:  User not found');
if (! self::$m4is_8fgy70e9xfm) {
wp_redirect(get_bloginfo('wpurl'),
 302, 'Memberium Autologin Failure');
}
exit;
}
}

static private function m4is_y2e5gtjkepch202asqsq66pnzfr30($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
$m4is_2bpgbderkkrtr9zf3cgeep3023e058 = self::m4is_xrj2qcjk5amra0nh2hf($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65);

if ($m4is_2bpgbderkkrtr9zf3cgeep3023e058) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = 'FAILURE:  Auto-Login attempt by non-subscriber';

self::m4is_54qw0qa2yxqyknxbk7d($m4is_bbjejhszczf2b3wrxm849kpfyzb5);
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f(self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 $m4is_bbjejhszczf2b3wrxm849kpfyzb5);
wp_redirect(get_bloginfo('wpurl'), 302, 'Memberium Autologin Failure');
exit;
}
self::m4is_54qw0qa2yxqyknxbk7d('Role Check Complete');

}

static private function m4is_8qc1hxvw48q26vvygcn5ak7wbzqcy( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_22254npgr19 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'max_contact_age', 0 );
$m4is_cyg7rcfhzagmm5v = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 false, true );
$m4is_3b6q77wj8ea5n8arnksr = empty( $m4is_cyg7rcfhzagmm5v );
$m4is_3b6q77wj8ea5n8arnksr = $m4is_3b6q77wj8ea5n8arnksr || empty( $m4is_cyg7rcfhzagmm5v['!LastUpdated'] );

$m4is_3b6q77wj8ea5n8arnksr = $m4is_3b6q77wj8ea5n8arnksr || ( time() - $m4is_cyg7rcfhzagmm5v['!LastUpdated'] > $m4is_22254npgr19 );

if ( $m4is_3b6q77wj8ea5n8arnksr ) {
self::m4is_54qw0qa2yxqyknxbk7d( 'Starting Contact Sync at ' . microtime( true ) . ' / ' . ( microtime( true ) - self::$m4is_z8686b3evxk2t1 ) );

self::$m4is_132xe588j->m4is_km2vptq0bwg( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$m4is_cyg7rcfhzagmm5v = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

self::m4is_54qw0qa2yxqyknxbk7d( 'Completing Contact Sync at ' . microtime( true ) . ' / ' . ( microtime( true ) - self::$m4is_z8686b3evxk2t1 ) );

}
return $m4is_cyg7rcfhzagmm5v;
}

static private function m4is_pc042cqspkannm2e5qy9chd2( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_aczehtt06z8n2h,
 $m4is_cyg7rcfhzagmm5v ) {
$m4is_fw6q9n56tk8v8kd3q97rsgvd1vxa2w = empty($m4is_cyg7rcfhzagmm5v['Id']) ? 0 : (int) $m4is_cyg7rcfhzagmm5v['Id'];

$m4is_t4ykansmy25ka925yn8 = empty($m4is_cyg7rcfhzagmm5v['Email']) ? 0 : strtolower(trim($m4is_cyg7rcfhzagmm5v['Email']) );
if ($m4is_fw6q9n56tk8v8kd3q97rsgvd1vxa2w <> $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp || $m4is_aczehtt06z8n2h <> $m4is_t4ykansmy25ka925yn8) {
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f(self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 'Failure - Autologin does not match CRM');
self::m4is_54qw0qa2yxqyknxbk7d('Autologin contact does not match CRM contact');
if (! self::$m4is_8fgy70e9xfm) {
wp_redirect(get_bloginfo('wpurl'),
 302, 'Memberium Autologin Failure');
}
exit;
}
}

static private function m4is_y91sw7dxa5580r3fe95hzhxqc9chy($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_aczehtt06z8n2h, $m4is_cyg7rcfhzagmm5v) {
$m4is_trp1jbbgvc5g9fb6r8fg6gfq4chch = empty($_GET['forcelogin']) ? '' : $_GET['forcelogin'];

if ($m4is_trp1jbbgvc5g9fb6r8fg6gfq4chch) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email', $m4is_aczehtt06z8n2h);
$m4is_wte2qk9hdk1zj7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'password_field');
if (empty($m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7]) ) {
$m4is_1farjt7yk7tdb = self::$m4is_132xe588j->m4is_d4hrfy3cjzb3y58yrjedq69fqd958dp();

$m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] = $m4is_1farjt7yk7tdb;
self::$m4is_132xe588j->m4is_nnhs86m2dtet7n7m8je($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 [$m4is_wte2qk9hdk1zj7 => $m4is_1farjt7yk7tdb], true);
self::$m4is_132xe588j->m4is_bpzt4p8q92db7($m4is_cyg7rcfhzagmm5v);
}
if (! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
self::$m4is_132xe588j->m4is_f54f6mxb3zka1m($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

}
self::m4is_54qw0qa2yxqyknxbk7d('Force Login at ' . microtime( true ) . ' / ' . ( microtime( true ) - self::$m4is_z8686b3evxk2t1) );

}
return $m4is_cyg7rcfhzagmm5v;
}

static private function m4is_b4hz4b898ak1($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
$m4is_9d9xqba7q91zqv = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'known_logins_only', false);
if ($m4is_9d9xqba7q91zqv) {
if (! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
self::m4is_54qw0qa2yxqyknxbk7d(__LINE__ . ' - FAILURE:  No matching WP User, known logins only');

m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f(self::$m4is_562x78yvcsqa2qz69njxhhm8c21, 'Known Login Check Failed.');
if (! self::$m4is_8fgy70e9xfm) {
wp_redirect(get_bloginfo('wpurl'),
 302, 'Memberium Autologin Failure');
}
exit;
}
}
}

static private function m4is_njymqjxm7aaw8egnx8drsqpczpf($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
if (! is_a($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'WP_User')) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = is_a($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_Error') ? strip_tags($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->get_error_message() ) : 'Authentication / Login Error';

wp_set_current_user(0);
self::m4is_54qw0qa2yxqyknxbk7d('FAILURE:  ' . $m4is_bbjejhszczf2b3wrxm849kpfyzb5);
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f(self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 $m4is_bbjejhszczf2b3wrxm849kpfyzb5);
if (! self::$m4is_8fgy70e9xfm) {
wp_redirect(get_bloginfo('wpurl'), 302, 'Memberium Autologin Failure');

}
exit;
}
}

static private function m4is_bmme2kfwt33m1an0gt8fjd16dczatv( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_tfecza742dzhrkkbv781dnbvf40m6 ) {
if ( is_user_logged_in() ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = 'Login Session Exists, Logging Out';
$m4is_ntrhtsym58b2jm = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'crm_id', 0 );
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f(self::$m4is_562x78yvcsqa2qz69njxhhm8c21, 'Already Logged In, Redirecting');

self::m4is_54qw0qa2yxqyknxbk7d($m4is_bbjejhszczf2b3wrxm849kpfyzb5);
if ( $m4is_ntrhtsym58b2jm === $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$m4is_k2err6rjpaex2dctjk86xtb8ap = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'login_page', 0 );
if ( empty( $m4is_tfecza742dzhrkkbv781dnbvf40m6 ) ) {
if (! empty( $m4is_k2err6rjpaex2dctjk86xtb8ap ) ) {
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = get_permalink( $m4is_k2err6rjpaex2dctjk86xtb8ap );

}
}
if (empty($m4is_tfecza742dzhrkkbv781dnbvf40m6) ) {
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = get_site_url();
}
wp_redirect($m4is_tfecza742dzhrkkbv781dnbvf40m6,
 302, 'Memberium Autologin - User Logged In');
exit;
}
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f(self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 $m4is_bbjejhszczf2b3wrxm849kpfyzb5);
wp_destroy_current_session();
wp_clear_auth_cookie();
self::$m4is_132xe588j->m4is_m9bcx7dqv78();

}
}

static private function m4is_3344mevhv9gcsjnygw114a35c( $m4is_tfecza742dzhrkkbv781dnbvf40m6, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;

if ( ! empty( $m4is_tfecza742dzhrkkbv781dnbvf40m6 ) ) {
return $m4is_tfecza742dzhrkkbv781dnbvf40m6;
}
$m4is_tz1rt7sbq40fade6e6rx = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'login_page', 0 );
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = get_permalink( $m4is_tz1rt7sbq40fade6e6rx );
if ( ! empty( $m4is_tfecza742dzhrkkbv781dnbvf40m6 ) ) {
return $m4is_tfecza742dzhrkkbv781dnbvf40m6;

}
return get_home_url();
}

static private function m4is_j1twj1esrv1pdphhjrp( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
if ( ! empty( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) ) {
self::m4is_54qw0qa2yxqyknxbk7d( 'Starting Adding Tags at ' . microtime( true ) . ' / ' . ( microtime( true ) - self::$m4is_z8686b3evxk2t1) );

self::m4is_54qw0qa2yxqyknxbk7d( 'Setting Tags: ' . $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj);
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 'Setting Tags', $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj );
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::m4is_54qw0qa2yxqyknxbk7d( 'Completing Adding Tags at ' . microtime( true ) . ' / ' . ( microtime( true ) - self::$m4is_z8686b3evxk2t1 ) );

}
}

}
