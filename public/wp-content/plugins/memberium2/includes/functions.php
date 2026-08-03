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

if (! function_exists('wp_new_user_notification') ) {

function wp_new_user_notification( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_ah3cmsbxtfdd992pvjag12a8we36jftf = '' ) {
$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$m4is_bmwby7040es2nnspt1hsam1m4ac6vw = 0;
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0;
$m4is_ra7dnjjzebn9h3t6k7a2p36 = $m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b();

$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_userdata( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_6ky94hj316q14f6fj0p7kny78f41 = (bool) $m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'sync_new_wp_users' );
$m4is_wte2qk9hdk1zj7 = (string) $m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'password_field' );

$m4is_akd4cjvbhtckz56 = (bool) $m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'local_auth_only', false );
$m4is_378nbgfmpk0ek = (int) $m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'new_user_registration_tag', 0 );
$m4is_01eq1bzcg10a6d = (int) $m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_reset_tag', 0 );
$m4is_cyg7rcfhzagmm5v = [
'Email' => $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email,
$m4is_wte2qk9hdk1zj7 =>
 $m4is_ah3cmsbxtfdd992pvjag12a8we36jftf,
];
if ( $m4is_akd4cjvbhtckz56 ) {
unset( $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] );
}
if ( ! empty( $m4is_6ky94hj316q14f6fj0p7kny78f41 ) ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_fcp8rjzp5vm( $m4is_cyg7rcfhzagmm5v );

if ( $m4is_378nbgfmpk0ek ) {
$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->grpAssign( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_378nbgfmpk0ek );
}
}


$m4is_z6apktrkcq7cc = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );
$m4is_5tmqg45z37r82cfb67prh = sprintf( __( 'New user registration on your site %s:' ),
 $m4is_z6apktrkcq7cc ) . "\r\n\r\n";
$m4is_5tmqg45z37r82cfb67prh .= sprintf( __( 'Username: %s'), $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login ) . "\r\n\r\n";

$m4is_5tmqg45z37r82cfb67prh .= sprintf( __( 'E-mail: %s'), $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email ) . "\r\n";
@wp_mail( get_option( 'admin_email' ),
 sprintf( __( '[%s] New User Registration' ), $m4is_z6apktrkcq7cc ), $m4is_5tmqg45z37r82cfb67prh );
if ( empty( $m4is_ah3cmsbxtfdd992pvjag12a8we36jftf ) ) {
return;

}
$m4is_5tmqg45z37r82cfb67prh = sprintf( __( 'Username: %s' ), $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login ) . "\r\n";
$m4is_5tmqg45z37r82cfb67prh .= sprintf( __( 'Password: %s' ),
 $m4is_ah3cmsbxtfdd992pvjag12a8we36jftf ) . "\r\n";
$m4is_5tmqg45z37r82cfb67prh .= wp_login_url() . "\r\n";
wp_mail( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email,
 sprintf( __( '[%s] Your username and password' ), $m4is_z6apktrkcq7cc ), $m4is_5tmqg45z37r82cfb67prh );
}
}