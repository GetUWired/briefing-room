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



final class m4is_v4rapmyrqjxsakynt80fj69rp8 {
private static $m4is_132xe588j;
private static $m4is_cyg7rcfhzagmm5v;
private static $m4is_csx0y36xw;

private static $m4is_41dg194jqye;
private static $m4is_562x78yvcsqa2qz69njxhhm8c21;
private static $m4is_fh91430wnqcvjs3;
private static $m4is_pqecxfec342ksq5fzv1mg;

private static $m4is_1we1qc8rdsrfq;



public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_csx0y36xw = self::m4is_qwfrfk6c3ra();
self::$m4is_41dg194jqye = isset( $_GET['fail_url'] ) ? $_GET['fail_url'] : site_url('/');

self::$m4is_fh91430wnqcvjs3 = [];
self::$m4is_pqecxfec342ksq5fzv1mg = site_url( '/' );
self::$m4is_1we1qc8rdsrfq = true;
self::$m4is_562x78yvcsqa2qz69njxhhm8c21 = 0;

}
public static function m4is_7qpg3a9rm1() : void {
global $wpdb;
if ( self::$m4is_csx0y36xw ) {
printf( "%d :: Debug Mode Enabled<br>",
 __LINE__ );
ini_set( 'display_errors', 1 );
}
else {
ini_set( 'display_errors', 0 );
}
$m4is_wte2qk9hdk1zj7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' );
$m4is_tekkt6zhv3zq8w = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'default_reglink_tag' );

$m4is_knxbec8fr3be1s2tkx0ydee0z = isset( $_GET['action'] ) ? strtolower( trim( $_GET['action'] ) ) : '';
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = isset( $_GET['cid'] ) ? (int) trim( $_GET['cid'] ) : 0;

$m4is_zxwt8y3szyy1aenkh = isset( $_GET['email'] ) ? strtolower( trim( $_GET['email'] ) ) : '';
$m4is_yhk2ms73gdy0zt = isset( $_GET['pid'] ) ? strtolower( trim( $_GET['pid'] ) ) : '';

$m4is_pqecxfec342ksq5fzv1mg = isset( $_GET['redir']) ? $_GET['redir'] : site_url('/');
$m4is_pqecxfec342ksq5fzv1mg = isset( $_GET['redirect'] ) ? $_GET['redirect'] : $m4is_pqecxfec342ksq5fzv1mg;

self::$m4is_562x78yvcsqa2qz69njxhhm8c21 = m4is_c2ry5jv8yz446k40191::m4is_nx69e5png6y6v( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, 'autologin',
 sprintf( 'Confirmation Link for user %s', $m4is_zxwt8y3szyy1aenkh ) );
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 'Redirecting to ' . $m4is_pqecxfec342ksq5fzv1mg );
self::m4is_xp4hgh9pa7tm65x7qk6w3sz2();
if ( self::$m4is_csx0y36xw ) {
printf( '%d - Email = %s<br>',
 __LINE__, $m4is_zxwt8y3szyy1aenkh );
printf( '%d - Contact ID = %d<br>', __LINE__, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
printf( '%d - Profile ID = %d<br>',
 __LINE__, $m4is_yhk2ms73gdy0zt );
}
if ( empty( $m4is_wte2qk9hdk1zj7 ) ) {
$m4is_7w9sx3x9v81jpa1n8mvrpcffnq = self::$m4is_csx0y36xw ? 'Password field not defined.' : 'Memberium';

if ( self::$m4is_csx0y36xw ) {
printf( '%d :: %s<br />', __LINE__, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
}
else {
wp_safe_redirect( self::$m4is_41dg194jqye,
 302, 'Memberium' );
}
die();
}
self::$m4is_fh91430wnqcvjs3 = self::m4is_574e2tv34pqzv5qster55mgqpyqsyyph( $m4is_yhk2ms73gdy0zt );
self::m4is_s6wvm9qrkand( $m4is_zxwt8y3szyy1aenkh );

self::m4is_4z27n7hpx9k();
self::m4is_z80qf9fpxrkfw6baa8( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_zxwt8y3szyy1aenkh );
self::m4is_3ajv053gpd( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_zxwt8y3szyy1aenkh );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::m4is_ewjnbb51tv497da7r0( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
if ( self::$m4is_csx0y36xw ) {
printf( '%d :: %s<br />', __LINE__, 'Failed to create user.' );

printf( '%d :: Redirect to %s<br>', __LINE__, self::$m4is_41dg194jqye );
}
else {
wp_redirect( self::$m4is_41dg194jqye );
}
exit;
}
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( self::$m4is_fh91430wnqcvjs3['tag'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) ; 
self::m4is_jy98wk5ye9hy8( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
if ( self::$m4is_csx0y36xw ) {
echo __LINE__,
 ' Success Redirect<br>';
echo __LINE__, ' :: Redirect to ', $m4is_pqecxfec342ksq5fzv1mg, '<br>';
printf( '<p><a href="%s">Click here to continue as the user</a></p>',
 $m4is_pqecxfec342ksq5fzv1mg );
die();
}
wp_redirect( $m4is_pqecxfec342ksq5fzv1mg );
exit;
}




static function m4is_qwfrfk6c3ra() : bool {
if ( ! empty( $_GET['debug'] ) ) {
return m4is_0gqs7crsrzdbgfzptjws94s::m4is_a8jbhgftw25vw3n3r2xwmckd9k3rr();

}
return false;
}

private static function m4is_xp4hgh9pa7tm65x7qk6w3sz2() : void {
$m4is_3sznqas38j4s9v0 = array_filter( explode( ',',
 self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'autologin_authkeys' ) ) );
$m4is_rb8k61qek9k5dv1pr2zv4basehpwj6af = isset( $_GET['authkey'] ) ? trim( $_GET['authkey'] ) : '';

if ( ! in_array( $m4is_rb8k61qek9k5dv1pr2zv4basehpwj6af, $m4is_3sznqas38j4s9v0 ) ) {
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 'Invalid Auth Key ' . $_GET['authkey'] );
if ( self::$m4is_csx0y36xw ) {
echo __LINE__, ' :: Auth Key = ', $m4is_rb8k61qek9k5dv1pr2zv4basehpwj6af,
 '<br>';
echo __LINE__, ' :: Invalid Authentication Key<br>';
}
else {
wp_safe_redirect( self::$m4is_41dg194jqye, 302, 'Memberium' );

}
die();
}
else {
if ( self::$m4is_csx0y36xw ) {
echo __LINE__, ' :: Auth Key Validated<br>';
}
}
}
private static function m4is_574e2tv34pqzv5qster55mgqpyqsyyph( $m4is_yhk2ms73gdy0zt ) {

$m4is_fh91430wnqcvjs3 = [];

$m4is_fh91430wnqcvjs3['tag'] = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'default_reglink_tag' , '' );

$m4is_fh91430wnqcvjs3['goal'] = '';
$m4is_fh91430wnqcvjs3['login_post_id'] = 0;
if ( ! empty( $m4is_yhk2ms73gdy0zt ) ) {
$m4is_63jp3myxhpk1eyb606fb = get_option( 'memberium_registration_profiles' );

$m4is_63jp3myxhpk1eyb606fb[$m4is_yhk2ms73gdy0zt] = [
'goal' => '',
'login_post_id' => 0,
'tag' => '',
];
if ( isset( $m4is_63jp3myxhpk1eyb606fb[$m4is_yhk2ms73gdy0zt] ) && is_array( $m4is_63jp3myxhpk1eyb606fb[$m4is_yhk2ms73gdy0zt] ) ) {
$m4is_fh91430wnqcvjs3 = $m4is_63jp3myxhpk1eyb606fb[$m4is_yhk2ms73gdy0zt];

}
else {
if ( self::$m4is_csx0y36xw ) {
echo __LINE__, ' :: Invalid Profile Id<br>';
die();
}
else {
wp_safe_redirect( self::$m4is_41dg194jqye,
 302, 'Memberium' );
}
self::$m4is_1we1qc8rdsrfq = false;
}
}
if ( self::$m4is_csx0y36xw ) {
echo __LINE__, ' :: Profile Goal = ', $m4is_fh91430wnqcvjs3['goal'],
 '<br>';
echo __LINE__, ' :: Profile Tag = ', $m4is_fh91430wnqcvjs3['tag'], '<br>';
echo __LINE__, ' :: Login Post ID = ', $m4is_fh91430wnqcvjs3['login_post_id'],
 '<br>';
}
return $m4is_fh91430wnqcvjs3;
}

private static function m4is_s6wvm9qrkand( string $m4is_zxwt8y3szyy1aenkh ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_user_by( 'email',
 $m4is_zxwt8y3szyy1aenkh );
if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return;
}
$m4is_7w9sx3x9v81jpa1n8mvrpcffnq = self::$m4is_csx0y36xw ? 'Confirmation Link: User already exists.' : 'Memberium';

m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( self::$m4is_562x78yvcsqa2qz69njxhhm8c21, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
if ( self::$m4is_csx0y36xw ) {
printf( '%d :: User with email address already "%s" Exists<br />',
 __LINE__, $m4is_zxwt8y3szyy1aenkh );
printf( '%d :: Redirect to %s<br>', __LINE__, self::$m4is_41dg194jqye );
}
else {
wp_safe_redirect( self::$m4is_41dg194jqye,
 302, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
}
die();
}

private static function m4is_4z27n7hpx9k() {
if ( ! is_user_logged_in() ) {
return;

}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_mkwdwpnbxwejs1bt = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'login_page', 0 );
$m4is_pqecxfec342ksq5fzv1mg = $m4is_mkwdwpnbxwejs1bt ? get_permalink( $m4is_mkwdwpnbxwejs1bt ) : self::$m4is_pqecxfec342ksq5fzv1mg;

$m4is_7w9sx3x9v81jpa1n8mvrpcffnq = self::$m4is_csx0y36xw ? 'Confirmation Link: User Logged In' : 'Memberium';
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
if ( self::$m4is_csx0y36xw ) {
echo __LINE__, ' :: User Logged In<br>';
echo __LINE__, ' :: Redirecting to ',
 $m4is_pqecxfec342ksq5fzv1mg, '<br>';
echo '<pre>Session = ', print_r( m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ),
 true), '</pre>';
}
else {
wp_safe_redirect( $m4is_pqecxfec342ksq5fzv1mg, 302, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
}
exit;
}

private static function m4is_z80qf9fpxrkfw6baa8( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 string $m4is_zxwt8y3szyy1aenkh ) {
self::$m4is_132xe588j->m4is_km2vptq0bwg( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, false );
self::$m4is_cyg7rcfhzagmm5v = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 false );
$m4is_wte2qk9hdk1zj7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'password_field' );
if ( empty( $m4is_wte2qk9hdk1zj7 ) ) {
if ( self::$m4is_csx0y36xw ) {
echo __LINE__,
 ' :: Password Field Not Defined<br>';
}
else {
wp_safe_redirect( self::$m4is_41dg194jqye, 302, 'Memberium' );
}
die();
}

if ( empty( self::$m4is_cyg7rcfhzagmm5v ) || ! is_array( self::$m4is_cyg7rcfhzagmm5v ) ) {
$m4is_7w9sx3x9v81jpa1n8mvrpcffnq = self::$m4is_csx0y36xw ? 'Confirmation Link: Missing contact data' : 'Memberium';

m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( self::$m4is_562x78yvcsqa2qz69njxhhm8c21, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
if ( self::$m4is_csx0y36xw ) {
printf( '%d :: %s<br>',
 __LINE__, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
}
else {
wp_safe_redirect( self::$m4is_41dg194jqye, 302, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );

}
exit;
}

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp <> self::$m4is_cyg7rcfhzagmm5v['Id'] ) {
$m4is_7w9sx3x9v81jpa1n8mvrpcffnq = self::$m4is_csx0y36xw ? 'Confirmation Link: Contact ID mismatch' : 'Memberium';

m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( self::$m4is_562x78yvcsqa2qz69njxhhm8c21, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
if ( self::$m4is_csx0y36xw ) {
printf( '%d :: %s<br>',
 __LINE__, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
}
else {
wp_safe_redirect( self::$m4is_41dg194jqye, 302, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );

}
exit;
}

if ( $m4is_zxwt8y3szyy1aenkh <> self::$m4is_cyg7rcfhzagmm5v['Email'] ) {
$m4is_7w9sx3x9v81jpa1n8mvrpcffnq = self::$m4is_csx0y36xw ? 'Confirmation Link: Email address mismatch' : 'Memberium';

m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( self::$m4is_562x78yvcsqa2qz69njxhhm8c21, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
if ( self::$m4is_csx0y36xw ) {
printf( '%d :: %s<br>',
 __LINE__, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
}
else {
wp_safe_redirect( self::$m4is_41dg194jqye, 302, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );

}
exit;
}

if ( empty( self::$m4is_cyg7rcfhzagmm5v['FirstName'] ) ) {
$m4is_7w9sx3x9v81jpa1n8mvrpcffnq = self::$m4is_csx0y36xw ? 'Confirmation Link: First Name missing' : 'Memberium';

m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( self::$m4is_562x78yvcsqa2qz69njxhhm8c21, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
if ( self::$m4is_csx0y36xw ) {
printf( '%d :: %s<br>',
 __LINE__, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
}
else {
wp_safe_redirect( self::$m4is_41dg194jqye, 302, $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );

}
exit;
}
}

private static function m4is_3ajv053gpd( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, string $m4is_zxwt8y3szyy1aenkh ) {
$m4is_wte2qk9hdk1zj7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' );
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = isset( self::$m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] ) ? trim( self::$m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] ) : '';

if ( empty( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g ) ) {
self::$m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] = self::$m4is_132xe588j->m4is_d4hrfy3cjzb3y58yrjedq69fqd958dp();

$m4is_46mk286a9b51zt4aweshvcbzah0m = [
$m4is_wte2qk9hdk1zj7 => self::$m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7],
];
$m4is_hartbe843crydzh = m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_46mk286a9b51zt4aweshvcbzah0m );
self::$m4is_132xe588j->m4is_bpzt4p8q92db7( self::$m4is_cyg7rcfhzagmm5v );
if ( self::$m4is_csx0y36xw ) {
printf( "%d :: Password '%s' generated and saved.<br />",
 __LINE__, self::$m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] );
}
}
else {
if ( self::$m4is_csx0y36xw ) echo __LINE__, ' Password Already Exists<br>';

}
}

private static function m4is_ewjnbb51tv497da7r0( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : int {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_f54f6mxb3zka1m( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_5tmqg45z37r82cfb67prh = sprintf( 'Created User ID %d', $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( self::$m4is_562x78yvcsqa2qz69njxhhm8c21,
 $m4is_5tmqg45z37r82cfb67prh );
if ( self::$m4is_csx0y36xw ) {
printf( '%d :: %s<br />', __LINE__, $m4is_5tmqg45z37r82cfb67prh );
}
return (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87;

}

private static function m4is_jy98wk5ye9hy8( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : void {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_userdata( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_aczehtt06z8n2h = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login;
wp_set_auth_cookie( $m4is_wk4dh1rnd3wmwvsggq51nhn87);
wp_set_current_user( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

m4is_an0pxqdph6ax26586c::m4is_rf7gc6dzkjjgmdb( $m4is_aczehtt06z8n2h );
do_action( 'wp_login', $m4is_aczehtt06z8n2h, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87);
}

}
