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


final class m4is_905gs7jtwy8pyf98mfy6n {
private const MAX_URL_LENGTH = 100;
private static m4is_6y9612z4hjd6fzpap4r5n853641m1jc $m4is_132xe588j;

public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
private function __construct() {
}

public static function m4is_0j6h58zb6wwvm8pnb( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, array $m4is_avgtbn3dgps2ea6xnvvnq9 = [] ) {
global $wpdb;

if ( self::$m4is_132xe588j->m4is_bryfhmxgee45drazs67enzk92pw8f2kn() ) {
return;
}
if ( isset( $_POST['createaccount'] ) && empty( $_POST['createaccount'] ) ) {
return;

}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['memberium_add_contact'] ) && is_admin() ) {
if ( $_POST['memberium_add_contact'] <> 'on' ) {
return;

}
}
if ( empty( self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'sync_new_wp_users' ) ) ) {
return;
}

if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'edit_others_posts' ) ) {
return;
}
$m4is_th384m7gvm775j7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'username_field' );
$m4is_wte2qk9hdk1zj7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'password_field' );

$m4is_akd4cjvbhtckz56 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'local_auth_only' );
$m4is_tekkt6zhv3zq8w = (int) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'new_user_registration_tag' );
$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_userdata( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_0kdm2zprhs5b1 = get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_4dkthbt29gftb2w4028rgje12m7vz = isset( $_POST['action'] ) && ( $_POST['action'] == 'createuser' ) && isset( $_POST['createuser'] );

$m4is_cyg7rcfhzagmm5v = [];
$m4is_bmwby7040es2nnspt1hsam1m4ac6vw = 0;
$m4is_qg2yw00j71q090r = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();

$m4is_sv4jqr1nqajr3a = [
'first_name' => 'FirstName',
'last_name' => 'LastName',
'user_email' => 'Email',
'user_pass' => $m4is_wte2qk9hdk1zj7,

'user_url' => 'Website',
];
foreach( $m4is_sv4jqr1nqajr3a as $m4is_akd802vd4sz => $m4is_eq030837an ) {
if ( ! empty( $m4is_avgtbn3dgps2ea6xnvvnq9[$m4is_akd802vd4sz]) ) {
$m4is_cyg7rcfhzagmm5v[$m4is_eq030837an] = $m4is_avgtbn3dgps2ea6xnvvnq9[$m4is_akd802vd4sz];

}
}
if ( empty( $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] ) ) {
$m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] = self::$m4is_132xe588j->m4is_8wp21bf6g6b2gn();

}

if ( isset( $_POST['wp-submit'] ) && $_POST['wp-submit'] == 'Register' ) {
$m4is_cyg7rcfhzagmm5v['FirstName'] = isset( $_POST['firstname'] ) ? trim( $_POST['firstname'] ) : $m4is_cyg7rcfhzagmm5v['FirstName'];

$m4is_cyg7rcfhzagmm5v['LastName'] = isset( $_POST['lastname'] ) ? trim( $_POST['lastname'] ) : $m4is_cyg7rcfhzagmm5v['LastName'];
}
$m4is_bjcpvd4bgypxhevnjdjsk6fg = apply_filters( 'memberium_registration_field_map',
 [] );
foreach( $m4is_bjcpvd4bgypxhevnjdjsk6fg as $m4is_m8tpd1x1wr2av4et3r6p46yd => $m4is_wyd3x4fawsydszy6vpwqgbdwyx318w ) {
if ( isset( $m4is_0kdm2zprhs5b1[$m4is_m8tpd1x1wr2av4et3r6p46yd][0]) ) {
$m4is_cyg7rcfhzagmm5v[$m4is_wyd3x4fawsydszy6vpwqgbdwyx318w] = trim( $m4is_0kdm2zprhs5b1[$m4is_m8tpd1x1wr2av4et3r6p46yd][0] );

}
}
foreach( $m4is_bjcpvd4bgypxhevnjdjsk6fg as $m4is_d9hw6v8m => $m4is_35h40p733yt0sp9zypy2 ) {
if ( isset( $_POST[$m4is_d9hw6v8m] ) ) {
$m4is_cyg7rcfhzagmm5v[$m4is_35h40p733yt0sp9zypy2] = $_POST[$m4is_d9hw6v8m];

}
}
if ( ! empty( $m4is_bmwby7040es2nnspt1hsam1m4ac6vw ) ) {
$m4is_cyg7rcfhzagmm5v['LeadSourceId'] = $m4is_bmwby7040es2nnspt1hsam1m4ac6vw;

}
$m4is_cyg7rcfhzagmm5v = apply_filters( 'memberium/user/register/fields', $m4is_cyg7rcfhzagmm5v, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );

$m4is_cyg7rcfhzagmm5v = array_filter( $m4is_cyg7rcfhzagmm5v );
if ( $m4is_akd4cjvbhtckz56 ) {
unset( $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] );

}
if ( empty( $m4is_cyg7rcfhzagmm5v['Email'] ) ) {
return;
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_fcp8rjzp5vm( $m4is_cyg7rcfhzagmm5v );

if ( empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return;
}
$m4is_1sn6y8kx008xc6020hb1qavz = m4is_rw8p2dfy073ez::m4is_xgawpe34q( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

m4is_rw8p2dfy073ez::m4is_rxf2xq5wvdkk7jhkx8( $m4is_cyg7rcfhzagmm5v['Email'], 'Membership Site Registration' );
self::$m4is_132xe588j->m4is_bpzt4p8q92db7( $m4is_1sn6y8kx008xc6020hb1qavz );

if ( $m4is_tekkt6zhv3zq8w ) {
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( [$m4is_tekkt6zhv3zq8w], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {

self::$m4is_132xe588j->m4is_5vtbryfazyjf979ttdx0kp( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
if ( get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 '_fb_is_sync', true ) != 1) {
delete_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, '_fb_is_sync' );
add_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 '_fb_is_sync', 1 );
}
}

public static function m4is_z7vp93qgzbew2tn( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_mhk0kbf553fp71macb9r2chd,
 $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
m4is_rw8p2dfy073ez::m4is_2v54qg8a8519szs6gv2vqw7( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
m4is_rw8p2dfy073ez::m4is_xya69tv8k8( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}

public static function m4is_24rwpms8bnc7vw( string $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) : string {
return mb_substr( (string) $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq,
 0, self::MAX_URL_LENGTH );
}



public static function m4is_ewjnbb51tv497da7r0( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, ?string $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = null ) : void {
}
public static function m4is_09kzzc1taxbrz22wb6e3psyzrr8g( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : void {
}
}
