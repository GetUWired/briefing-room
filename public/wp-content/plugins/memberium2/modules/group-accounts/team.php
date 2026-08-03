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


class_exists('m4is_6y9612z4hjd6fzpap4r5n853641m1jc') || die();


final class m4is_wv1rppa066tww11snkg8g06rv922xj {
private static object $m4is_rh5tsdng84n;
private static object $m4is_132xe588j;

private static array $m4is_8ew58cpxmftgpw93gdffm4s9bbwy;
private const M4IS_03KCEXQBC0JR99HASJC5G3XGVMDHMRB = 'memberium/teams';
private const M4IS_W0S9DJC37G97078AWWNJ3Y = '_memberium/user/max_count';

private const M4IS_RF557AJN18CH2AR6Q9 = '_memberium/user/field_name';
private function __construct() {

}

public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_rh5tsdng84n = m4is_p2r78mkk9tdtwpmc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = self::$m4is_rh5tsdng84n->m4is_nj54edhem2n65zh8981a9c0hhp5adr6();

}




public static function m4is_665tcbhdfpeqk3tepjq8( int $m4is_erycayg8y6z0xw4, WP_Post $m4is_7m8xpn4ftkw78pwyjeqtbb0m ) : void {
if ( wp_is_post_revision( $m4is_erycayg8y6z0xw4 ) ) {
return;

}
$m4is_8k4t0j50ztbgybq1nm5257drg = $m4is_7m8xpn4ftkw78pwyjeqtbb0m->post_author;
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = get_post_meta( $m4is_erycayg8y6z0xw4,
 self::M4IS_RF557AJN18CH2AR6Q9, true );
$m4is_wxqe8cmcxn32devmczn9ge15 = get_user_meta( $m4is_8k4t0j50ztbgybq1nm5257drg, self::M4IS_03KCEXQBC0JR99HASJC5G3XGVMDHMRB,
 true );
$m4is_wxqe8cmcxn32devmczn9ge15 = is_array( $m4is_wxqe8cmcxn32devmczn9ge15 ) ? $m4is_wxqe8cmcxn32devmczn9ge15 : [];
unset( $m4is_wxqe8cmcxn32devmczn9ge15[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] );

update_user_meta( $m4is_8k4t0j50ztbgybq1nm5257drg, self::M4IS_03KCEXQBC0JR99HASJC5G3XGVMDHMRB, $m4is_wxqe8cmcxn32devmczn9ge15 );
global $wpdb;

$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_nnxwqmy0fvta4ktrh1eda();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT child_uid FROM %i WHERE `team_id` = %d";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_erycayg8y6z0xw4 );
$m4is_1ft5zc00mb8v41g44x1s = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );

foreach( $m4is_1ft5zc00mb8v41g44x1s as $m4is_xcg4je0en ) {
self::m4is_jt6v0sx696epnpqb2g3ng2tqv4ea9( $m4is_xcg4je0en, $m4is_erycayg8y6z0xw4 );

}
}

public static function m4is_th40h21mk6qkny74wjr4zhb( string $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) : void {
$m4is_g61yzqs7ecta0xztr70d7v = [
'post_type' =>
 'memb_team',
'meta_key' => self::M4IS_RF557AJN18CH2AR6Q9,
'meta_value' => $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6,
'posts_per_page' => -1,

];
$m4is_j34bmw9dcjexfj1qpz = new WP_Query( $m4is_g61yzqs7ecta0xztr70d7v );
if ( ! $m4is_j34bmw9dcjexfj1qpz->have_posts() ) {
return;

}
while( $m4is_j34bmw9dcjexfj1qpz->have_posts() ) {
$m4is_j34bmw9dcjexfj1qpz->the_post();
$m4is_erycayg8y6z0xw4 = get_the_ID();
$m4is_ym1wtqn9tqkttfk5aj5 = get_post_field( 'post_author',
 $m4is_erycayg8y6z0xw4 );
wp_delete_post( $m4is_erycayg8y6z0xw4, true );
}
}

private static function m4is_qze1a8dyyz( array $m4is_bp6tas9hn38v5x6yeyqmn24dzz7xt,
 int $m4is_wk4dh1rnd3wmwvsggq51nhn87, array $m4is_6mctr922hbmncpwfrp0x2k ) : array {
$m4is_shp82v1j47cjzqe0yjbegjyh2bh19 = false;
$m4is_sz0p1eg043s9tk33zhzr = self::m4is_97ggpd2xpwwhhsr54w8722085zq( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

foreach( $m4is_sz0p1eg043s9tk33zhzr as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 => $m4is_erycayg8y6z0xw4 ) {
if ( get_post_status( $m4is_erycayg8y6z0xw4 ) == 'publish' ) {
continue;

}
else {
unset( $m4is_sz0p1eg043s9tk33zhzr[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] );
}
}
foreach( $m4is_bp6tas9hn38v5x6yeyqmn24dzz7xt as $m4is_bbsta3mvjhhvh1x97vfpm9e =>
 $m4is_7m8xpn4ftkw78pwyjeqtbb0m ) {
if ( array_key_exists( $m4is_bbsta3mvjhhvh1x97vfpm9e, $m4is_sz0p1eg043s9tk33zhzr ) ) {
if ( get_post_status( $m4is_sz0p1eg043s9tk33zhzr[$m4is_bbsta3mvjhhvh1x97vfpm9e] ) ) {
continue;

}
else {
unset( $m4is_sz0p1eg043s9tk33zhzr[$m4is_bbsta3mvjhhvh1x97vfpm9e] );
}
}
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower( $m4is_bbsta3mvjhhvh1x97vfpm9e );

$m4is_snrka8rzen7q = empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact'][$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] ) ? 0 : (int) $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact'][$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6];

$m4is_dz8pgf53e = apply_filters( 'memberium/teams/team/name', $m4is_7m8xpn4ftkw78pwyjeqtbb0m['team_name'], $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_6mctr922hbmncpwfrp0x2k );
$m4is_tz1rt7sbq40fade6e6rx = wp_insert_post([
'post_title' => $m4is_dz8pgf53e,
'post_content' => '',

'post_status' => 'publish',
'post_author' => $m4is_wk4dh1rnd3wmwvsggq51nhn87,
'post_type' => 'memb_team',
'meta_input' => [
self::M4IS_RF557AJN18CH2AR6Q9 =>
 $m4is_7m8xpn4ftkw78pwyjeqtbb0m['field_name'],
self::M4IS_W0S9DJC37G97078AWWNJ3Y => $m4is_snrka8rzen7q,
]
]);
if ( $m4is_tz1rt7sbq40fade6e6rx ) {
$m4is_sz0p1eg043s9tk33zhzr[$m4is_bbsta3mvjhhvh1x97vfpm9e] = $m4is_tz1rt7sbq40fade6e6rx;

$m4is_shp82v1j47cjzqe0yjbegjyh2bh19 = true;
}
}
if ( $m4is_shp82v1j47cjzqe0yjbegjyh2bh19 ) {
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 self::M4IS_03KCEXQBC0JR99HASJC5G3XGVMDHMRB, $m4is_sz0p1eg043s9tk33zhzr );
}
return $m4is_sz0p1eg043s9tk33zhzr;
}






public static function m4is_grgyrg30y1mhrqrk5h570gz2pc2xyw8( int $m4is_erycayg8y6z0xw4 ) : int {
return (int) get_post_meta( $m4is_erycayg8y6z0xw4,
 self::M4IS_W0S9DJC37G97078AWWNJ3Y, true );
}

public static function m4is_m695vntep229s4zs38g3yj( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 array $m4is_6mctr922hbmncpwfrp0x2k ) : void {
if ( empty( $m4is_6mctr922hbmncpwfrp0x2k['umbrella']['is_parent'] ) ) {
return;
}
$m4is_bp6tas9hn38v5x6yeyqmn24dzz7xt = self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['teams'] ?? [];

if ( empty( $m4is_bp6tas9hn38v5x6yeyqmn24dzz7xt ) ) {
return;
}
$m4is_bxzwtgtn3eq2 = self::m4is_qze1a8dyyz( $m4is_bp6tas9hn38v5x6yeyqmn24dzz7xt,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_6mctr922hbmncpwfrp0x2k );
$m4is_bxzwtgtn3eq2 = is_array( $m4is_bxzwtgtn3eq2 ) ? $m4is_bxzwtgtn3eq2 : [];

self::m4is_t89h3aqbk2tn( $m4is_bxzwtgtn3eq2, $m4is_6mctr922hbmncpwfrp0x2k );
}

private static function m4is_t89h3aqbk2tn( array $m4is_bxzwtgtn3eq2,
 $m4is_6mctr922hbmncpwfrp0x2k ) {
if ( ! is_array( $m4is_bxzwtgtn3eq2 ) ) {
return;
}
foreach( $m4is_bxzwtgtn3eq2 as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 =>
 $m4is_tz1rt7sbq40fade6e6rx ) {
$m4is_j8j55t8dz79m7 = strtolower( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 );
$m4is_snrka8rzen7q = empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact'][$m4is_j8j55t8dz79m7] ) ? 0 : (int) $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact'][$m4is_j8j55t8dz79m7];

$m4is_da5zp69r9c0tn7vad58 = self::m4is_grgyrg30y1mhrqrk5h570gz2pc2xyw8( $m4is_tz1rt7sbq40fade6e6rx );
if ( $m4is_da5zp69r9c0tn7vad58 <> $m4is_snrka8rzen7q ) {
update_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 self::M4IS_W0S9DJC37G97078AWWNJ3Y, $m4is_snrka8rzen7q );
}
self::m4is_v9ts8qmv74fmgxg4w0te0n( $m4is_tz1rt7sbq40fade6e6rx );
}
}






public static function m4is_97ggpd2xpwwhhsr54w8722085zq( int $m4is_k1eftjy4k5430qzqhjdtxyn7j ) : array {
$m4is_bp6tas9hn38v5x6yeyqmn24dzz7xt = get_user_meta( $m4is_k1eftjy4k5430qzqhjdtxyn7j,
 self::M4IS_03KCEXQBC0JR99HASJC5G3XGVMDHMRB, true );
$m4is_bp6tas9hn38v5x6yeyqmn24dzz7xt = is_array( $m4is_bp6tas9hn38v5x6yeyqmn24dzz7xt ) ? $m4is_bp6tas9hn38v5x6yeyqmn24dzz7xt : [];

return $m4is_bp6tas9hn38v5x6yeyqmn24dzz7xt;
}

public static function m4is_jwdqr8yhqfhfxe994wvwkegp3( int $m4is_erycayg8y6z0xw4 ) : int {
global $wpdb;

$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_nnxwqmy0fvta4ktrh1eda();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) FROM %i WHERE `team_id` = %d AND `active` = 1";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_erycayg8y6z0xw4 );
$m4is_7g9y793jjckyb = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

return (int) $m4is_7g9y793jjckyb;
}

public static function m4is_2v2jnc5z0e7s1gr7p3x9x( int $m4is_erycayg8y6z0xw4 ) : array {
global $wpdb;

$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_nnxwqmy0fvta4ktrh1eda();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `child_uid` FROM %i WHERE `team_id` = %d AND `active` = 1";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_erycayg8y6z0xw4 );
$m4is_hartbe843crydzh = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );

return is_array( $m4is_hartbe843crydzh ) ? array_filter( $m4is_hartbe843crydzh ) : [];
}

public static function m4is_jss3wwd2mex7ppfr05jzy( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : array {
global $wpdb;

$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_nnxwqmy0fvta4ktrh1eda();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `team_id` FROM %i WHERE `child_uid` = %d AND `active` = 1";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_hartbe843crydzh = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
return is_array( $m4is_hartbe843crydzh ) ? $m4is_hartbe843crydzh : [];

}




public static function m4is_q411yccq( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, int $m4is_erycayg8y6z0xw4 ) : void {
global $wpdb;

$m4is_ma90yykszqq4nbpvmwqcdw5nep5 = self::m4is_grgyrg30y1mhrqrk5h570gz2pc2xyw8( $m4is_erycayg8y6z0xw4 );
$m4is_z4t813pw9 = self::m4is_jwdqr8yhqfhfxe994wvwkegp3( $m4is_erycayg8y6z0xw4 );

if ( $m4is_z4t813pw9 >= $m4is_ma90yykszqq4nbpvmwqcdw5nep5 ) {
return;
}
$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_nnxwqmy0fvta4ktrh1eda();

$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO %i (`team_id`, `child_uid`, `active` ) VALUES (%d, %d, 1 )";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 $m4is_k7p8pmxsbkqrje3y20, $m4is_erycayg8y6z0xw4, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_hartbe843crydzh = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_hr936s717w4jdp9fjkjap( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}

public static function m4is_9kaafnwch0brfqx1fbcdk4dayrh( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : void {
global $wpdb;

$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_nnxwqmy0fvta4ktrh1eda();
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `child_uid` = %d";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_hartbe843crydzh = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}

public static function m4is_jt6v0sx696epnpqb2g3ng2tqv4ea9( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 int $m4is_erycayg8y6z0xw4 ) : void {
global $wpdb;
$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_nnxwqmy0fvta4ktrh1eda();

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `team_id` = %d AND `child_uid` = %d";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 $m4is_k7p8pmxsbkqrje3y20, $m4is_erycayg8y6z0xw4, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_hartbe843crydzh = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_hr936s717w4jdp9fjkjap( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}

public static function m4is_v9ts8qmv74fmgxg4w0te0n( int $m4is_erycayg8y6z0xw4 ) : void {
global $wpdb;

$m4is_ma90yykszqq4nbpvmwqcdw5nep5 = self::m4is_grgyrg30y1mhrqrk5h570gz2pc2xyw8( $m4is_erycayg8y6z0xw4 );
$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_nnxwqmy0fvta4ktrh1eda();

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `child_uid` FROM %i WHERE `team_id` = %d AND `active` = 1";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 $m4is_k7p8pmxsbkqrje3y20, $m4is_erycayg8y6z0xw4 );
$m4is_ey8h8t3xkngm1a3e2yg87sv6gm = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );

if ( count( $m4is_ey8h8t3xkngm1a3e2yg87sv6gm ) <= $m4is_ma90yykszqq4nbpvmwqcdw5nep5 ) {
return;
}
$m4is_20knw42ksh3kk8tw9rbs = array_slice( $m4is_ey8h8t3xkngm1a3e2yg87sv6gm,
 $m4is_ma90yykszqq4nbpvmwqcdw5nep5 );
$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE %i SET `active` = 0 WHERE `team_id` = %d AND `child_uid` NOT IN ( " . implode( ',',
 $m4is_20knw42ksh3kk8tw9rbs ) . " )";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20,
 $m4is_erycayg8y6z0xw4 );
$m4is_hartbe843crydzh = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
foreach( $m4is_20knw42ksh3kk8tw9rbs as $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_hr936s717w4jdp9fjkjap( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

}
}

public static function m4is_rc89zwy4e2nedj( int $m4is_tz1rt7sbq40fade6e6rx ) : array {
if ( empty( self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['teams'] ) ) {
return [];

}
$m4is_bbsta3mvjhhvh1x97vfpm9e = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx, self::M4IS_RF557AJN18CH2AR6Q9, true );
if ( empty( $m4is_bbsta3mvjhhvh1x97vfpm9e ) || ! array_key_exists( $m4is_bbsta3mvjhhvh1x97vfpm9e,
 self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['teams'] ) ) {
return [];
}
$m4is_06c8s5xs94f91335gnaey25 = array_filter( explode( ',', self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['teams'][$m4is_bbsta3mvjhhvh1x97vfpm9e]['tags'] ) );

return $m4is_06c8s5xs94f91335gnaey25;
}



}


