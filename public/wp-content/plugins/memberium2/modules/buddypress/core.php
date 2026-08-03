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


final class m4is_ckv379vnjr0dx37 {
private $m4is_jbay7tk10g7ajn7na32d180dz3erdyn = [];
private $m4is_132xe588j;

public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_5eragr7sh2yyj356m();
if ( is_admin() ) {
require_once __DIR__ . '/admin.php';
m4is_xjap5emdxf7e30t89kgrm05ev0ben0::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
else {
require_once __DIR__ . '/frontend.php';
m4is_mnrnn1v4d9zgwdk7r4s319q4::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
}

private function m4is_5eragr7sh2yyj356m() : void {

$this->m4is_zpm60172931symr9m();

add_action( 'bp_init', [$this, 'm4is_zhnjm60a8bdpx7mdr'] );
add_action( 'bp_init', [$this, 'm4is_tvb3abh18'] );
add_action( 'xprofile_updated_profile',
 [$this, 'm4is_5p8epd0dnmn9vkryt6nw10nb2w8e5zhm'], 0, 5 );
add_action( 'memberium/session/updated', [$this, 'm4is_qnz24xdtfws6htc31hvt3d5e578g'],
 11, 2 );
add_action( 'memberium/session/updated', [$this, 'm4is_sqpv41bh58zax7'], 10, 2 );
add_action( 'after_setup_theme', [$this,
 'm4is_njsecaj4ejjej'] );

add_filter( 'memberium/modules/active/names', [$this, 'm4is_v9eeymdh30mk'], 10, 1 );
add_filter( 'memberium/user/register/fields',
 [$this, 'm4is_ymeag4efbk5ftg3a5'], 10, 2 );
add_filter( 'memberium/wpuser/nickname', [$this, 'm4is_ppyram0gtqrhr'], PHP_INT_MAX, 2 );

add_filter( 'send_email_change_email', [$this, 'm4is_nhw5n3y9'], 1, 3 );
if ( true || ! empty( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' ) ) ) {
remove_filter( 'bp_login_redirect',
 'bb_login_redirect', PHP_INT_MAX );
remove_filter( 'login_redirect', 'bp_login_redirect', PHP_INT_MAX );
remove_filter( 'logout_redirect',
 'bb_logout_redirect', PHP_INT_MAX );
}
}

public function m4is_zhnjm60a8bdpx7mdr() : void {
if ( bp_is_active( 'settings' ) ) {
add_filter( 'send_password_change_email',
 [$this, 'm4is_v29qrtjdfvrc4qw2tv2a'], 1, 3 );
}
}

private function m4is_zpm60172931symr9m() : void {
if ( bp_is_active( 'groups' ) ) {
require_once __DIR__ . '/groups.php';

m4is_ecph5pfad09cf24t6yp9nd2skvzgrp::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
}

public function m4is_sqpv41bh58zax7( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 array $m4is_6mctr922hbmncpwfrp0x2k ) : void {
$this->m4is_jbay7tk10g7ajn7na32d180dz3erdyn[ $m4is_wk4dh1rnd3wmwvsggq51nhn87 ] = $m4is_6mctr922hbmncpwfrp0x2k;

if ( ! did_action( 'bp_init' ) ) {
add_action( 'bp_init', [$this, 'm4is_tvb3abh18'] );
}
else {
$this->m4is_tvb3abh18();
}
}

public function m4is_v29qrtjdfvrc4qw2tv2a( bool $m4is_2zmapnxt8swpdhnhydps,
 array $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, array $m4is_0pvw1nn4s9phbzmkvf6fre7wxd93zzen ) {
if ( empty( $_POST['submit'] ) || empty( $_POST['pass1'] ) || empty( $_POST['pass2'] ) ) {
return $m4is_2zmapnxt8swpdhnhydps;

}
if ( ! bp_is_active( 'settings' ) || ! bp_is_settings_component() || ! bp_is_current_action( 'general' ) ) {
return $m4is_2zmapnxt8swpdhnhydps;

}
$m4is_akd4cjvbhtckz56 = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'local_auth_only', false );

if ( $m4is_akd4cjvbhtckz56 ) {
return $m4is_2zmapnxt8swpdhnhydps;
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65['ID'] );

if ( empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return $m4is_2zmapnxt8swpdhnhydps;
}
$m4is_bbsta3mvjhhvh1x97vfpm9e = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field', '' );
if ( empty( $m4is_bbsta3mvjhhvh1x97vfpm9e ) ) {
return $m4is_2zmapnxt8swpdhnhydps;
}
$m4is_cyg7rcfhzagmm5v = [];

$m4is_cyg7rcfhzagmm5v[$m4is_bbsta3mvjhhvh1x97vfpm9e] = $_POST['pass1'];
m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_cyg7rcfhzagmm5v );
return $m4is_2zmapnxt8swpdhnhydps;
}

public function m4is_tvb3abh18() : void {

$this->m4is_zpm60172931symr9m();

foreach( $this->m4is_jbay7tk10g7ajn7na32d180dz3erdyn as $m4is_wk4dh1rnd3wmwvsggq51nhn87 => $m4is_6mctr922hbmncpwfrp0x2k ) {
if ( ! empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact'] ) ) {
$this->m4is_xkd5tezhgh98abhsb76xz2jnr4z6sf( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact'],
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
}
}

public function m4is_ppyram0gtqrhr( string $m4is_qbt1ykj2w2hezrt5w = '', array $m4is_cyg7rcfhzagmm5v = [] ) {
$m4is_qbt1ykj2w2hezrt5w = sanitize_title_with_dashes( $m4is_qbt1ykj2w2hezrt5w,
 null, 'save' );
return $m4is_qbt1ykj2w2hezrt5w;
}

public function m4is_ymeag4efbk5ftg3a5( array $m4is_cyg7rcfhzagmm5v, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) : array {
if ( ! is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'WP_User' ) ) {
return $m4is_cyg7rcfhzagmm5v;
}
if ( ! function_exists( 'bp_xprofile_firstname_field_id' ) || ! function_exists( 'bp_xprofile_lastname_field_id' ) ) {
return $m4is_cyg7rcfhzagmm5v;

}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;
$m4is_wte2qk9hdk1zj7 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' ); 
$m4is_pw463s8vrkdcans = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'local_auth_only' );

$m4is_mqjazyc7q6vrt2cd783f2522fdhcfbf3 = bp_xprofile_firstname_field_id();
$m4is_k9dg52yt9361jge = bp_xprofile_lastname_field_id();

$m4is_qg3h24yksnnc9fh70z51rr7gyfs = bp_xprofile_nickname_field_id();
$m4is_33jww6tmv6j0nm83z = empty( $_POST["field_{$m4is_mqjazyc7q6vrt2cd783f2522fdhcfbf3}"] ) ? '' : $_POST["field_{$m4is_mqjazyc7q6vrt2cd783f2522fdhcfbf3}"];

$m4is_0e0k81q8npxekdhac6288bvcx50bxe72 = empty( $_POST["field_{$m4is_k9dg52yt9361jge}"] ) ? '' : $_POST["field_{$m4is_k9dg52yt9361jge}"];

$m4is_qbt1ykj2w2hezrt5w = empty( $_POST["field_{$m4is_qg3h24yksnnc9fh70z51rr7gyfs}"] ) ? '' : $_POST["field_{$m4is_qg3h24yksnnc9fh70z51rr7gyfs}"];

$m4is_cyg7rcfhzagmm5v['FirstName'] = empty( $m4is_cyg7rcfhzagmm5v['FirstName'] ) ? $m4is_33jww6tmv6j0nm83z : $m4is_cyg7rcfhzagmm5v['FirstName'];

$m4is_cyg7rcfhzagmm5v['LastName'] = empty( $m4is_cyg7rcfhzagmm5v['LastName'] ) ? $m4is_0e0k81q8npxekdhac6288bvcx50bxe72 : $m4is_cyg7rcfhzagmm5v['LastName'];

$m4is_cyg7rcfhzagmm5v['Nickname'] = empty( $m4is_cyg7rcfhzagmm5v['Nickname'] ) ? $m4is_qbt1ykj2w2hezrt5w : $m4is_cyg7rcfhzagmm5v['Nickname'];

if ( ! $m4is_pw463s8vrkdcans ) {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = empty( $_POST['signup_password'] ) ? '' : trim( $_POST['signup_password'] );

$m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] = empty( $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] ) ? $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g : $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7];

}
return $m4is_cyg7rcfhzagmm5v;
}

public function m4is_njsecaj4ejjej() : void {
remove_filter( 'login_redirect', 'buddyboss_redirect_previous_page',
 10 , 3 );
}

public function m4is_v9eeymdh30mk( array $m4is_jq2e3019hp45103bhm95sxmccqd8 ) : array {
global $buddyboss_platform_plugin_file;

if (! empty( $buddyboss_platform_plugin_file ) ) {
$m4is_hce1y1a4qd65zhnwsj = 'BuddyBoss Platform Support';
}
else {
$m4is_hce1y1a4qd65zhnwsj = 'BuddyPress Support';

}
return array_merge( $m4is_jq2e3019hp45103bhm95sxmccqd8, [
$m4is_hce1y1a4qd65zhnwsj,
] );
}

public function m4is_qnz24xdtfws6htc31hvt3d5e578g( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 array $m4is_6mctr922hbmncpwfrp0x2k ) : void {
if ( ! function_exists( 'bp_set_member_type' ) || ! function_exists( 'bp_get_member_type' ) ) {
return;

}
$m4is_1b9h7td3nqy9scpx = $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_id'] ??= 0;
if ( ! $m4is_1b9h7td3nqy9scpx ) {
return;

}
$m4is_h9g6e5cga = (array) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' )[$m4is_1b9h7td3nqy9scpx];

if ( empty( $m4is_h9g6e5cga['buddypress_profile_type'] ) ) {
return;
}
$m4is_1agsdgpqnz2k7 = bp_get_member_type( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_82rex33mnmpavejw26d5c6fqyymjva = $m4is_h9g6e5cga['buddypress_profile_type'];
if ( $m4is_82rex33mnmpavejw26d5c6fqyymjva == $m4is_1agsdgpqnz2k7 ) {
return;

}
bp_set_member_type( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_82rex33mnmpavejw26d5c6fqyymjva );
}

public function m4is_5p8epd0dnmn9vkryt6nw10nb2w8e5zhm( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_s91wteb12nd, $m4is_s6156qxet7jrhqxjj70v, $m4is_e1e56xm6nmm, $m4is_ywzpv90tsrzma ) {
if ( ! class_exists( 'BP_XProfile_Field' ) ) {
return;

}
$m4is_xnb14phvj5w = get_option( 'memberium_xprofile_map', [] );
$m4is_xnp7kwvwaqarv0rfb86fap7b = m4is_xm67qjyegqdeb9wqcm::m4is_xgteqem3f5qjq5ev0hjxskwr4();

foreach ( $m4is_xnb14phvj5w as $m4is_wpjgye1m3rc82zjbjrqyv554xac7e6s6 => $m4is_g576xw711bbeeccc96xsnz2td1 ) {
if ( empty( $m4is_g576xw711bbeeccc96xsnz2td1 ) || empty( $m4is_ywzpv90tsrzma[$m4is_g576xw711bbeeccc96xsnz2td1] ) ) {
continue;

}
$m4is_6m8raeet14zjyazcjb931mry2a55jfy = empty( $m4is_xnp7kwvwaqarv0rfb86fap7b[$m4is_wpjgye1m3rc82zjbjrqyv554xac7e6s6] ) ? 15 : $m4is_xnp7kwvwaqarv0rfb86fap7b[$m4is_wpjgye1m3rc82zjbjrqyv554xac7e6s6];

$m4is_v7gcgdwwqe = empty( $m4is_ywzpv90tsrzma[$m4is_g576xw711bbeeccc96xsnz2td1]['value'] ) ? '' : $m4is_ywzpv90tsrzma[$m4is_g576xw711bbeeccc96xsnz2td1]['value'];

$m4is_m8tpd1x1wr2av4et3r6p46yd = 'memb_' . $m4is_wpjgye1m3rc82zjbjrqyv554xac7e6s6;
if ( $m4is_6m8raeet14zjyazcjb931mry2a55jfy == 13 || $m4is_6m8raeet14zjyazcjb931mry2a55jfy == 14 ) {
if ( ! empty( $m4is_v7gcgdwwqe ) ) {
$m4is_v7gcgdwwqe = date( 'Y-m-d\TH:i:s',
 strtotime( $m4is_v7gcgdwwqe ) );
}
}
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_m8tpd1x1wr2av4et3r6p46yd, $m4is_v7gcgdwwqe );

}
}

public function m4is_xkd5tezhgh98abhsb76xz2jnr4z6sf( array $m4is_cyg7rcfhzagmm5v, int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : void {
if ( ! function_exists( 'xprofile_set_field_data' ) ) {
return;

}
if ( empty( $m4is_cyg7rcfhzagmm5v ) ) {
return;
}
$m4is_xnb14phvj5w = get_option( 'memberium_xprofile_map', [] );
$m4is_xnp7kwvwaqarv0rfb86fap7b = m4is_xm67qjyegqdeb9wqcm::m4is_xgteqem3f5qjq5ev0hjxskwr4();

if ( empty( $m4is_xnb14phvj5w ) || empty( $m4is_xnp7kwvwaqarv0rfb86fap7b ) || ! is_array( $m4is_xnp7kwvwaqarv0rfb86fap7b ) || ! is_array( $m4is_xnb14phvj5w ) ) {
return;

}
$m4is_xnb14phvj5w = array_change_key_case( $m4is_xnb14phvj5w, CASE_LOWER );
$m4is_xnp7kwvwaqarv0rfb86fap7b = array_change_key_case( $m4is_xnp7kwvwaqarv0rfb86fap7b,
 CASE_LOWER );
foreach ( $m4is_xnb14phvj5w as $m4is_wpjgye1m3rc82zjbjrqyv554xac7e6s6 => $m4is_g576xw711bbeeccc96xsnz2td1 ) {
if ( $m4is_g576xw711bbeeccc96xsnz2td1 ) {
$m4is_6m8raeet14zjyazcjb931mry2a55jfy = empty( $m4is_xnp7kwvwaqarv0rfb86fap7b[ $m4is_wpjgye1m3rc82zjbjrqyv554xac7e6s6 ] ) ? 15 : $m4is_xnp7kwvwaqarv0rfb86fap7b[ $m4is_wpjgye1m3rc82zjbjrqyv554xac7e6s6 ];

$m4is_rqxytszfq5v6syth1csqqxvy5 = empty( $m4is_cyg7rcfhzagmm5v[$m4is_wpjgye1m3rc82zjbjrqyv554xac7e6s6] ) ? '' : $m4is_cyg7rcfhzagmm5v[ $m4is_wpjgye1m3rc82zjbjrqyv554xac7e6s6 ];

if ( in_array( $m4is_6m8raeet14zjyazcjb931mry2a55jfy, [ 13, 14 ] ) ) {
if ( ! empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = date( 'Y-m-d H:i:s',
 strtotime( $m4is_rqxytszfq5v6syth1csqqxvy5 ) );
}
}
$m4is_hartbe843crydzh = xprofile_set_field_data( $m4is_g576xw711bbeeccc96xsnz2td1,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
}
}

public function m4is_nhw5n3y9( bool $m4is_2zmapnxt8swpdhnhydps ,
 array $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, array $m4is_5tefgs6sgx14cj ) : bool {
$m4is_k3ctzgvqn = [
'bp_is_active',
'bp_is_settings_component',

'bp_is_current_action'
];
foreach ( $m4is_k3ctzgvqn as $m4is_95jcy59jv50devc8s3bd ) {
if ( ! function_exists( $m4is_95jcy59jv50devc8s3bd ) ) {
return $m4is_2zmapnxt8swpdhnhydps;

}
}
if ( ! bp_is_active( 'settings' ) || ! bp_is_settings_component() || ! bp_is_current_action( 'general' ) ) {
return $m4is_2zmapnxt8swpdhnhydps;

}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65['ID'];
$m4is_qrv3xp6b9111jy13v0y9e4j9rekrc = $m4is_5tefgs6sgx14cj['user_email'];

if ( empty( $m4is_qrv3xp6b9111jy13v0y9e4j9rekrc ) ) {
return $m4is_2zmapnxt8swpdhnhydps;
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return $m4is_2zmapnxt8swpdhnhydps;
}
$this->m4is_132xe588j->m4is_eqvbvnvjx( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_qrv3xp6b9111jy13v0y9e4j9rekrc );
return $m4is_2zmapnxt8swpdhnhydps;
}


public function m4is_syqes83rq3pb8d1sb3qtmgz( $user_id ) {
}

public function m4is_whsnk3abczpjf613d4fst( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : void {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'id',
 $m4is_wk4dh1rnd3wmwvsggq51nhn87);
if ( ! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) {
return;
}
$m4is_v0btf7mv632851tp3bp = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login;

$m4is_vs80b4c3sh9jvjz29g9v7z29gff72 = new BP_Signup;
$m4is_d60kn1d3yvprp62rs332 = $m4is_vs80b4c3sh9jvjz29g9v7z29gff72->get( ['user_login' =>
 $m4is_v0btf7mv632851tp3bp] );
$m4is_k1h8d2qg = isset( $m4is_d60kn1d3yvprp62rs332['signups'][0]->signup_id ) ? $m4is_d60kn1d3yvprp62rs332['signups'][0]->signup_id : 0;

if ( ! $m4is_k1h8d2qg ) {
return;
}
$m4is_vs80b4c3sh9jvjz29g9v7z29gff72->activate([$m4is_k1h8d2qg]);
}
}
