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


final class m4is_rw8p2dfy073ez {
private static $m4is_132xe588j;
private static $m4is_v4beyw7zqhr3;
private static $m4is_qg2yw00j71q090r;

private static $m4is_3g0kczs64fcqhyxapj5pj;
private static $m4is_wsme5a297xh0v6d5y;
private static object $m4is_t8vjc2ec06gfv1gfwtfq5ch3;


public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
global $wpdb;
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();
self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );

self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3 = self::$m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->m4is_dzjdf8h0p8gzs37xpyhh4krbgavss4();

self::$m4is_qg2yw00j71q090r = 'memberium_contacts';
self::$m4is_3g0kczs64fcqhyxapj5pj = $wpdb->prefix . 'memberium_uidcid';
}
private function __construct() {

}






public static function m4is_kzjgr0n81gjjnd989vxkyea8cv3() : string {
return self::$m4is_qg2yw00j71q090r;

}

public static function m4is_h9717tqbb0nxa4ctq3e5bv3tb4483() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();

$m4is_k7p8pmxsbkqrje3y20 = self::m4is_kzjgr0n81gjjnd989vxkyea8cv3();
$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(20) NOT NULL, \n" .
"appname varchar(32) NOT NULL, \n" .
"fieldname varchar(64) NOT NULL DEFAULT '', \n" .
"value longtext, \n" .
"KEY id (id), \n" .
"KEY fieldname (fieldname), \n" .
"KEY appname (appname), \n" .
"KEY value (value(64) ), \n" .
"PRIMARY KEY  (appname,id,fieldname) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}

public static function m4is_q3dsmg0n0pyy0ecveq1jgyy8qnn2dknd() : string {
return self::$m4is_3g0kczs64fcqhyxapj5pj;

}

public static function m4is_5xfaa0qww3c0qdrnvfk60c() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_q3dsmg0n0pyy0ecveq1jgyy8qnn2dknd();

$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(20) unsigned NOT NULL AUTO_INCREMENT, \n" .
"uid bigint(20) NOT NULL, \n" .
"cid bigint(20) NOT NULL, \n" .
"UNIQUE KEY relationship (uid,cid), \n" .
"PRIMARY KEY  (id) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}






public static function m4is_ssvhsmr1h4a1czmyqpxfgm0ztjce1y() : void {
global $wpdb;


$m4is_8ysqtcvttv = $wpdb->users;
$m4is_xsqgxrrp9bhqt9zkjv2m3c2 = self::m4is_q3dsmg0n0pyy0ecveq1jgyy8qnn2dknd();
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE NOT EXISTS ( SELECT 1 FROM %i WHERE %i.`uid` = %i.`ID` )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_xsqgxrrp9bhqt9zkjv2m3c2, $m4is_8ysqtcvttv, $m4is_xsqgxrrp9bhqt9zkjv2m3c2,
 $m4is_8ysqtcvttv );
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `appname` = %s AND ( `value` = '' OR `value` IS NULL )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_qg2yw00j71q090r, self::$m4is_v4beyw7zqhr3 );

$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

$m4is_gqsc4mq3nmh1sr5dknx6119v7 = array_filter( explode( ',',
 self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'ignore_contact_fields', '' ) ) );
if ( ! empty( $m4is_gqsc4mq3nmh1sr5dknx6119v7 ) ) {
$m4is_b4tj8bz7gag2n7w4a3ych8s4hw86 = implode( "','",
 $m4is_gqsc4mq3nmh1sr5dknx6119v7 );
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `appname` = %s AND `fieldname` IN ( '{$m4is_b4tj8bz7gag2n7w4a3ych8s4hw86}' )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_qg2yw00j71q090r, self::$m4is_v4beyw7zqhr3 );

$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
}

public static function m4is_jbqjtz0djt9d3qtjk5cept4() : void {
global $wpdb;

$m4is_gqsc4mq3nmh1sr5dknx6119v7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'ignore_contact_fields' );

if ( empty( $m4is_gqsc4mq3nmh1sr5dknx6119v7 ) ) {
return;
}
$m4is_gqsc4mq3nmh1sr5dknx6119v7 = array_filter( explode( ',', $m4is_gqsc4mq3nmh1sr5dknx6119v7 ) );

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `appname` = %s AND `fieldname` IN ('" . implode( "','", $m4is_gqsc4mq3nmh1sr5dknx6119v7 ) . "')";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_qg2yw00j71q090r, self::$m4is_v4beyw7zqhr3 );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}






public static function m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : int {
static $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s = [];

if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return 0;
}
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'manage_options' ) ) {
return 0;

}
if ( array_key_exists( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s ) ) {
return $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_wk4dh1rnd3wmwvsggq51nhn87];

}
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `cid` FROM %i WHERE `uid` = %d ORDER BY `id` ASC LIMIT 1";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 self::m4is_q3dsmg0n0pyy0ecveq1jgyy8qnn2dknd(), $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_wk4dh1rnd3wmwvsggq51nhn87] = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

$m4is_wpb15gxcs70qmj89kjvygfj8c4011 = false;
}
else {
$m4is_wpb15gxcs70qmj89kjvygfj8c4011 = true;
}

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'infusionsoft_user_id', true );
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_wk4dh1rnd3wmwvsggq51nhn87] = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

}
}

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'id', $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_User' ) ) {
$m4is_zxwt8y3szyy1aenkh = (string) $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email;

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_7zpq79bb4j0( $m4is_zxwt8y3szyy1aenkh );
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_wk4dh1rnd3wmwvsggq51nhn87] = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

}
}
}
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0 && true == $m4is_wpb15gxcs70qmj89kjvygfj8c4011 ) {
self::m4is_w2rgz1xtp( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
return (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
}

public static function m4is_qwwvyvgzftm9yzzcjhs25e( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : int{
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return 0;

}
global $wpdb;
static $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s = [];

$m4is_erz06wv5ekvc5qshxgtwy0p = false;
if ( array_key_exists( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s ) ) {
return $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp];
}

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `u`.`uid` FROM %i `u` INNER JOIN %i `w` ON `u`.`uid` = `w`.`ID` WHERE `u`.`cid` = %d ORDER BY `u`.`id` ASC LIMIT 1";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_q3dsmg0n0pyy0ecveq1jgyy8qnn2dknd(), $wpdb->users,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp] = $m4is_wk4dh1rnd3wmwvsggq51nhn87;

return $m4is_wk4dh1rnd3wmwvsggq51nhn87;
}

$m4is_sve114svyeqt2x3dh54bq3t = 'memberium/contact_id/' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `user_id` FROM `{$wpdb->usermeta}` WHERE `meta_key` = %s ORDER BY `umeta_id` DESC";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 $m4is_sve114svyeqt2x3dh54bq3t );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );


if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'manage_options' ) ) {
return 0;
}
if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 == 0 ) {
return 0;
}
$m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp] = $m4is_wk4dh1rnd3wmwvsggq51nhn87;

if ( $m4is_erz06wv5ekvc5qshxgtwy0p) {
m4is_rw8p2dfy073ez::m4is_w2rgz1xtp( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
return $m4is_wk4dh1rnd3wmwvsggq51nhn87;
}

public static function m4is_7zpq79bb4j0( string $m4is_zxwt8y3szyy1aenkh ) : int {
global $wpdb;

$m4is_kgdwxx4f = 'memberium2/contacts/queries/crm_id';
$m4is_yqbs57707b9pgq = 300;
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
$m4is_zxwt8y3szyy1aenkh = strtolower( trim( $m4is_zxwt8y3szyy1aenkh ) );

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id` FROM %i WHERE `appname` = %s AND `fieldname` = 'Email' AND `value` = %s ORDER BY `id` ASC LIMIT 1;";

$m4is_5rbenkpt1v7xby2cknbs7 = (string) $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_qg2yw00j71q090r, self::$m4is_v4beyw7zqhr3,
 $m4is_zxwt8y3szyy1aenkh );
$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = md5( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = wp_cache_get( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z,
 $m4is_kgdwxx4f, false, $m4is_6p2tyvq6paj43svrn7zqaykxzy );
if ( ! $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

if ( ! empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
wp_cache_set( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_kgdwxx4f, $m4is_yqbs57707b9pgq );
}
}
return $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
}

public static function m4is_w2rgz1xtp( int $m4is_95dnkbqxkxsryj4,
 int $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew ) : void {
global $wpdb;
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_q3dsmg0n0pyy0ecveq1jgyy8qnn2dknd();

$m4is_5rbenkpt1v7xby2cknbs7 = 'SELECT count(`id`) FROM %i WHERE ( `uid` <> %d AND `cid` = %d ) OR ( `uid` = %d AND `cid` <> %d )  LIMIT 1';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_95dnkbqxkxsryj4, $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew,
 $m4is_95dnkbqxkxsryj4, $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew );
$m4is_hartbe843crydzh = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

if ( $m4is_hartbe843crydzh > 0 ) {
$m4is_5rbenkpt1v7xby2cknbs7 = 'DELETE FROM %i WHERE (`uid` != %d AND `cid` = %d ) OR (`uid` = %d AND `cid` <> %d ) -- TEST';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_95dnkbqxkxsryj4, $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew,
 $m4is_95dnkbqxkxsryj4, $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew );
$m4is_hartbe843crydzh = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

}
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO %i (`uid`, `cid`) VALUES (%d, %d) ON DUPLICATE KEY UPDATE `uid` = VALUES(`uid`), `cid` = VALUES(`cid`)";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_95dnkbqxkxsryj4, $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew );

$m4is_hartbe843crydzh = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
delete_user_meta( $m4is_95dnkbqxkxsryj4, 'infusionsoft_user_id' );

delete_user_meta( $m4is_95dnkbqxkxsryj4, "memberium/contact_id/{$m4is_7an5k696qe2d7a3a0kb9mydmapnnzew}" );
}

public static function m4is_xya69tv8k8( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : void {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `uid` = %d";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 self::m4is_q3dsmg0n0pyy0ecveq1jgyy8qnn2dknd(), $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_tbdh9qb6r6z = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

}

public static function m4is_aschqmg4jvgew() : void {
global $wpdb;
$m4is_rkmcn1zd3r3k149h20vfr8z = 25;
$m4is_3g0kczs64fcqhyxapj5pj = self::m4is_q3dsmg0n0pyy0ecveq1jgyy8qnn2dknd();

$m4is_0eaxb24esc6hyf61 = $wpdb->usermeta;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `um`.`user_id`, `um`.`meta_value` FROM %i `um` LEFT JOIN %i `uidcid` ON `um`.`user_id` = `uidcid`.`uid` WHERE `um`.`meta_key` = 'infusionsoft_user_id' AND `um`.`meta_value` > 0 AND `uidcid`.`uid` IS NULL LIMIT %d ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_0eaxb24esc6hyf61, $m4is_3g0kczs64fcqhyxapj5pj, $m4is_rkmcn1zd3r3k149h20vfr8z );

$m4is_ey8h8t3xkngm1a3e2yg87sv6gm = (array) $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K );

foreach ( $m4is_ey8h8t3xkngm1a3e2yg87sv6gm as $m4is_wk4dh1rnd3wmwvsggq51nhn87 =>
 $m4is_a5q4jkmn24k0m4 ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_a5q4jkmn24k0m4->meta_value;
self::m4is_w2rgz1xtp( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}






public static function m4is_t35vgq4em8n6dfh4xat() {
global $wpdb;
if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;

}
$m4is_gvav0mtf3n7hd6v8ht5c6rwcasbhzg6 = 'memberium/contact/async/locked';
$m4is_tmahyj23zha0gh6zybznn93y1 = 'memberium/contact/async/last_update';

$m4is_rkmcn1zd3r3k149h20vfr8z = (int) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'async_limit', 0 );

$m4is_r8e5z217z4avbjjb0hp46msb39z = (int) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'async_tag', 0 );

$m4is_vjvdekjyb3v8f9a90x = (int) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'disable_login_sync', 0 );

$m4is_22254npgr19 = (int) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'max_contact_age', 0 );
if ( empty( $m4is_rkmcn1zd3r3k149h20vfr8z ) && empty( $m4is_r8e5z217z4avbjjb0hp46msb39z ) ) {
return;

}
if ( empty( $m4is_rkmcn1zd3r3k149h20vfr8z ) ) {
m4is_c2ry5jv8yz446k40191::m4is_nx69e5png6y6v( 0, 'cron', 'Background Contact Update Skipped.  No limit set.' ) ;

return;
}
if ( empty( $m4is_r8e5z217z4avbjjb0hp46msb39z ) ) {
m4is_c2ry5jv8yz446k40191::m4is_nx69e5png6y6v( 0, 'cron', 'Background Contact Update Skipped.  No sync tag set.' ) ;

return;
}
if ( empty( $m4is_vjvdekjyb3v8f9a90x ) ) {
m4is_c2ry5jv8yz446k40191::m4is_nx69e5png6y6v( 0, 'cron', 'Background Contact Update Skipped.  Login sync not disabled.' ) ;

return;
}
if ( empty( $m4is_22254npgr19 ) ) {
m4is_c2ry5jv8yz446k40191::m4is_nx69e5png6y6v( 0, 'cron', 'Background Contact Update Skipped.  Max Contact Age not set.' ) ;

return;
}
if ( ! update_option( $m4is_gvav0mtf3n7hd6v8ht5c6rwcasbhzg6, 1, true ) ) {
m4is_c2ry5jv8yz446k40191::m4is_nx69e5png6y6v( 0,
 'cron', 'Background Contact Update Locked.  Bulk Sync Skipped' ) ;
return;
}
update_option( $m4is_gvav0mtf3n7hd6v8ht5c6rwcasbhzg6,
 1 );
$m4is_sa1qas12q1g = time();
$m4is_er73m18j35gqvx95t7d34y7 = [];
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_k7p8pmxsbkqrje3y20 = 'Contact';

$m4is_7g9y793jjckyb = 0;
$m4is_934a95jn = [];
$m4is_k5sac49cmxp = get_option( $m4is_tmahyj23zha0gh6zybznn93y1, '' );
$m4is_k5sac49cmxp = empty( $m4is_k5sac49cmxp ) ? '2000-01-01 00:00:00' : $m4is_k5sac49cmxp;

$m4is_wsme5a297xh0v6d5y = self::$m4is_wsme5a297xh0v6d5y;
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( $m4is_k7p8pmxsbkqrje3y20,
 true );
$m4is_j34bmw9dcjexfj1qpz = [
'LastUpdated' => "~>=~ {$m4is_k5sac49cmxp}",
'Groups' => $m4is_r8e5z217z4avbjjb0hp46msb39z,
];

$m4is_er73m18j35gqvx95t7d34y7 = self::$m4is_wsme5a297xh0v6d5y->dsQueryOrderBy( $m4is_k7p8pmxsbkqrje3y20, $m4is_rkmcn1zd3r3k149h20vfr8z,
 $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'LastUpdated', true );
$m4is_er73m18j35gqvx95t7d34y7 = is_array( $m4is_er73m18j35gqvx95t7d34y7 ) ? array_filter( $m4is_er73m18j35gqvx95t7d34y7 ) : $m4is_er73m18j35gqvx95t7d34y7;

$m4is_7g9y793jjckyb = is_array( $m4is_er73m18j35gqvx95t7d34y7 ) ? count( $m4is_er73m18j35gqvx95t7d34y7 ) : 0;
if ( is_string( $m4is_er73m18j35gqvx95t7d34y7 ) ) {
error_log( 'Memberium: [error] Contact Sync API Error - ' . $m4is_er73m18j35gqvx95t7d34y7 );

}
if ( $m4is_7g9y793jjckyb ) {
foreach ( $m4is_er73m18j35gqvx95t7d34y7 as $m4is_cyg7rcfhzagmm5v ) {
$m4is_934a95jn[] = $m4is_cyg7rcfhzagmm5v['Id'];

}
$m4is_tz7kjbh9vh78cd6yw4q = implode( ',', $m4is_934a95jn );
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id`, `value` FROM %i WHERE `id` IN ({$m4is_tz7kjbh9vh78cd6yw4q}) AND `appname` = %s AND `fieldname` = 'LastUpdated' ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_qg2yw00j71q090r, self::$m4is_v4beyw7zqhr3 );

$m4is_0q57s54p8pmsar = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K );
foreach( $m4is_er73m18j35gqvx95t7d34y7 as $m4is_j8j55t8dz79m7 =>
 $m4is_cyg7rcfhzagmm5v ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $m4is_cyg7rcfhzagmm5v['Id'];
$m4is_5nq51hsqj3mk6k211bfss5 = $m4is_cyg7rcfhzagmm5v['LastUpdated'];

$m4is_ecm69x8tr9yxf3ph7j0s9876rwwzdr = $m4is_0q57s54p8pmsar[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp]->value;
if ( $m4is_ecm69x8tr9yxf3ph7j0s9876rwwzdr >= $m4is_5nq51hsqj3mk6k211bfss5 ) {
unset( $m4is_er73m18j35gqvx95t7d34y7[$m4is_j8j55t8dz79m7] );

}
}
foreach( $m4is_er73m18j35gqvx95t7d34y7 as $m4is_cyg7rcfhzagmm5v ) {
self::$m4is_132xe588j->m4is_bpzt4p8q92db7( $m4is_cyg7rcfhzagmm5v );

if ( ! empty( $m4is_cyg7rcfhzagmm5v['LastUpdated'] ) ) {
$m4is_askkd9ra4ag4avh9qvvp2 = date( 'Y-m-d H:i:s', strtotime( $m4is_cyg7rcfhzagmm5v['LastUpdated'] ) );

}
}
}
if ( $m4is_7g9y793jjckyb < $m4is_rkmcn1zd3r3k149h20vfr8z ) {
$m4is_askkd9ra4ag4avh9qvvp2 = '2000-01-01 00:00:00';
}
update_option( $m4is_tmahyj23zha0gh6zybznn93y1,
 $m4is_askkd9ra4ag4avh9qvvp2, true );
$m4is_9wmg876seta9xt8e2hfp017k77mcxnxa = sprintf( 'Background Contact Sync Ran: %d contacts synced from %s.',
 $m4is_7g9y793jjckyb, $m4is_k5sac49cmxp );
m4is_c2ry5jv8yz446k40191::m4is_nx69e5png6y6v( 0, 'cron', $m4is_9wmg876seta9xt8e2hfp017k77mcxnxa ) ;

update_option( $m4is_gvav0mtf3n7hd6v8ht5c6rwcasbhzg6, 0, true );
}

public static function m4is_q9jtbmp64yk13jzd( string $m4is_zxwt8y3szyy1aenkh ) : int {
$m4is_zxwt8y3szyy1aenkh = strtolower( trim( $m4is_zxwt8y3szyy1aenkh ) );

if ( empty( $m4is_zxwt8y3szyy1aenkh ) ) {
return 0;
}
$m4is_3xd06ffr9gek9kwwk3peahb27a0vmpv = (bool) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'sync_tag_details' );
$m4is_k7p8pmxsbkqrje3y20 = 'Contact';
$m4is_rkmcn1zd3r3k149h20vfr8z = 1;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( $m4is_k7p8pmxsbkqrje3y20,
 true );
$m4is_csnk3yn47 = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();
$m4is_kyw6mwey3 = 0;
$contact_count = 0;
$contact_ids = [];

$contacts = [];
$m4is_j34bmw9dcjexfj1qpz = [
'Email' => $m4is_zxwt8y3szyy1aenkh
];
$m4is_er73m18j35gqvx95t7d34y7 = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj( $m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', true );

$m4is_cyg7rcfhzagmm5v = empty( $m4is_er73m18j35gqvx95t7d34y7[0] ) ? [] : $m4is_er73m18j35gqvx95t7d34y7[0];
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty( $m4is_cyg7rcfhzagmm5v['Id'] ) ? 0 : (int) $m4is_cyg7rcfhzagmm5v['Id'];

if ( empty( $m4is_cyg7rcfhzagmm5v ) || empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return 0;
}
self::$m4is_132xe588j->m4is_bpzt4p8q92db7( $m4is_cyg7rcfhzagmm5v );

return $m4is_cyg7rcfhzagmm5v['Id'];
}






public static function m4is_t6vaxcre5s2r6c( ?string $m4is_zxwt8y3szyy1aenkh ) : int {
global $wpdb;

$m4is_th384m7gvm775j7 = 'Email'; 
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT COUNT( `id` ) FROM %i WHERE `appname` = %s AND `fieldname` = %s AND `value` = %s ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_qg2yw00j71q090r, self::$m4is_v4beyw7zqhr3, $m4is_th384m7gvm775j7,
 $m4is_zxwt8y3szyy1aenkh );
$m4is_hartbe843crydzh = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
return $m4is_hartbe843crydzh;

}

public static function m4is_bjp3vwwa9wfhkmbcb7( ?array $m4is_3qwaf6xd03657aas = [] ): array {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id`, `value` FROM %i WHERE `appname` = %s AND `fieldname` = 'Groups'";

if ( ! empty( $m4is_3qwaf6xd03657aas ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 .= " AND `id` IN ('%s')";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 self::$m4is_qg2yw00j71q090r, self::$m4is_v4beyw7zqhr3, implode( ',', $m4is_3qwaf6xd03657aas ) );
}
else {
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 self::$m4is_qg2yw00j71q090r, self::$m4is_v4beyw7zqhr3 );
}
return (array) $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K );

}

public static function m4is_s81gdxef1q69p7spmwj6h( string $m4is_zxwt8y3szyy1aenkh ) : array {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id` FROM %i WHERE `fieldname` == 'Email' = %s AND `appname` = %s ORDER BY `id` ASC";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_kzjgr0n81gjjnd989vxkyea8cv3(), $m4is_zxwt8y3szyy1aenkh,
 self::$m4is_v4beyw7zqhr3 );
$m4is_cyg7rcfhzagmm5v = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
return (array) $m4is_cyg7rcfhzagmm5v;

}

public static function m4is_2v54qg8a8519szs6gv2vqw7( ?int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, ?bool $m4is_dk8h9fzq3h5eh3y6rzhgk9e = false ) {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `id` = %d AND `appname` = %s";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 self::$m4is_qg2yw00j71q090r, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, self::$m4is_v4beyw7zqhr3 );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
self::$m4is_132xe588j->m4is_mz8ypkzzr4fxz8e42njma37v6ge02( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( $m4is_dk8h9fzq3h5eh3y6rzhgk9e ) {
$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = m4is_amz58dmg8j7e898bj8r8b1::m4is_qk9eqwy5wj( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

m4is_amz58dmg8j7e898bj8r8b1::m4is_nr5q1e4hyw0cdgw33cp7yn( $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 );
m4is_0ddg4zyk7dn8eg0283::m4is_f8pw8qpvkmkfkb43w3dvg7h9y( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
}
self::$m4is_132xe588j->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}

static function m4is_jzr210pwxwvnhzp3q6g8a9yx6( ?int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 ?array $m4is_7b2yfzk0054 = [], ?bool $m4is_snvxfgsq8gnjngjkbsxgdte1 = false ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
self::$m4is_wsme5a297xh0v6d5y->updatecon( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_7b2yfzk0054 );

if ( $m4is_snvxfgsq8gnjngjkbsxgdte1 ) {
self::$m4is_132xe588j->m4is_km2vptq0bwg( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}
self::$m4is_132xe588j->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

return $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
}

static function m4is_rxf2xq5wvdkk7jhkx8( ?string $m4is_zxwt8y3szyy1aenkh = '', ?string $m4is_k9bxa399ebag2fr7vjh534wavtcp = 'Memberium') {
if ( ! empty( $m4is_zxwt8y3szyy1aenkh ) ) {
self::$m4is_wsme5a297xh0v6d5y->optin($m4is_zxwt8y3szyy1aenkh,
 $m4is_k9bxa399ebag2fr7vjh534wavtcp);
}
}

static function m4is_fcp8rjzp5vm( ?array $m4is_cyg7rcfhzagmm5v, ?string $m4is_2hbz903tzgvnen2k0wa = 'Email' ) : int {
return (int) self::$m4is_wsme5a297xh0v6d5y->addWithDupCheck( $m4is_cyg7rcfhzagmm5v,
 $m4is_2hbz903tzgvnen2k0wa );
}

static function m4is_xgawpe34q( ?int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, ?array $m4is_7b2yfzk0054 = [] ) {
if ( empty( $m4is_7b2yfzk0054 )) {
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact',
 true );
}
return self::$m4is_wsme5a297xh0v6d5y->loadCon( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_7b2yfzk0054 );
}

static function m4is_845rdsrwy4s57mgxwm6b8jhm( ?string $m4is_zxwt8y3szyy1aenkh = '',
 ?array $m4is_7b2yfzk0054 = [] ) {
if ( empty ($m4is_7b2yfzk0054 ) ) {
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact',
 true );
}
return self::$m4is_wsme5a297xh0v6d5y->findByEmail( $m4is_zxwt8y3szyy1aenkh, $m4is_7b2yfzk0054 );
}

static function m4is_km2vptq0bwg( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_cyg7rcfhzagmm5v = self::m4is_xgawpe34q( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( is_array( $m4is_cyg7rcfhzagmm5v ) ) {
self::$m4is_132xe588j->m4is_bpzt4p8q92db7( $m4is_cyg7rcfhzagmm5v );
}
return $m4is_cyg7rcfhzagmm5v;

}






static function m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( ?int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, ?bool $m4is_59hdvf05xsxzhb8556d18jz = false,
 $m4is_rbk7yygqqz = false ) : array {
global $wpdb;
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_59hdvf05xsxzhb8556d18jz ? 'LOWER(`fieldname`) as `fieldname`' : '`fieldname`';

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT {$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6}, `value` FROM %i WHERE `id` = %d AND `appname` = %s";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 self::$m4is_qg2yw00j71q090r, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, self::$m4is_v4beyw7zqhr3 );
$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7,
 ARRAY_A );
$m4is_cyg7rcfhzagmm5v = [];
if ( is_array( $m4is_tbdh9qb6r6z ) ) {
foreach ( $m4is_tbdh9qb6r6z as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_bamv772v ) {
$m4is_cyg7rcfhzagmm5v[$m4is_bamv772v['fieldname']] = $m4is_bamv772v['value'];
}
}
if ( ! $m4is_rbk7yygqqz ) {
$m4is_cyg7rcfhzagmm5v = apply_filters( 'memberium_contact_load',
 $m4is_cyg7rcfhzagmm5v );
}
return $m4is_cyg7rcfhzagmm5v;
}

public static function m4is_emjyh64vj5zgk0gea4gem3nmmx70() {
$m4is_xc0wh8hch3 = 'ignore_contact_fields';

$m4is_h7zwy5f0w3y9gx3wm = 'Contact';
$m4is_1ct38192h8t = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( $m4is_h7zwy5f0w3y9gx3wm,
 false );
$m4is_9n99a0wfjv3p = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', $m4is_xc0wh8hch3, '' );
$m4is_9n99a0wfjv3p = is_string( $m4is_9n99a0wfjv3p ) ? $m4is_9n99a0wfjv3p : '';

$m4is_9n99a0wfjv3p = array_filter( explode( ',', $m4is_9n99a0wfjv3p ) );
$m4is_9n99a0wfjv3p = array_intersect( $m4is_1ct38192h8t, $m4is_9n99a0wfjv3p );

$m4is_9n99a0wfjv3p = implode( ',', $m4is_9n99a0wfjv3p );
self::$m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_9n99a0wfjv3p, 'settings',
 $m4is_xc0wh8hch3 );
}






public static function m4is_gx88e9qayf( string $m4is_zxwt8y3szyy1aenkh ) : stdClass {
$m4is_cyg7rcfhzagmm5v = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_6p8s185mxtvw9b1b53kq( ['email' =>
 $m4is_zxwt8y3szyy1aenkh] );
if ( isset( $m4is_cyg7rcfhzagmm5v->code ) && $m4is_cyg7rcfhzagmm5v->code == 404 ) {
$m4is_3qwaf6xd03657aas = (array) self::m4is_s81gdxef1q69p7spmwj6h( $m4is_zxwt8y3szyy1aenkh );

foreach( $m4is_3qwaf6xd03657aas as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
self::m4is_2v54qg8a8519szs6gv2vqw7( (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 true );
}
}
return $m4is_cyg7rcfhzagmm5v;
}

public static function m4is_exz3cpbs8w6yqe876( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : stdClass {
if ( empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return new stdclass();

}
$m4is_cyg7rcfhzagmm5v = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_bzewcp63vf5ybafbqe01ehg9ebp( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( isset( $m4is_cyg7rcfhzagmm5v->code ) && $m4is_cyg7rcfhzagmm5v->code == 404 ) {
self::m4is_2v54qg8a8519szs6gv2vqw7( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 true );
}
return $m4is_cyg7rcfhzagmm5v;
}

public static function m4is_50jrq8ytz( stdClass $m4is_cyg7rcfhzagmm5v ) : array {
static $m4is_ng5wy5q306c7yg9crn6;

if ( isset( $m4is_cyg7rcfhzagmm5v->code ) && $m4is_cyg7rcfhzagmm5v->code == 404 ) {
return [];
}
$m4is_619n4j6mvpc9xh65aw07e = [];

$m4is_xnb14phvj5w = [
'anniversary_date' => 'Anniversary',
'birth_date' => 'BirthDay',
'contact_type' => 'ContactType',
'create_time' =>
 'DateCreated',
'family_name' => 'LastName',
'given_name' => 'FirstName',
'id' => 'Id',
'job_title' => 'JobTitle',
'leadsource_id' =>
 'LeadSourceId',
'middle_name' => 'MiddleName',
'notes' => 'ContactNotes',
'owner_id' => 'OwnerID',
'preferred_locale' => 'Language',

'preferred_name' => 'Nickname',
'referral_code' => 'ReferralCode',
'spouse_name' => 'SpouseName',
'suffix' => 'Suffix',
'time_zone' =>
 'TimeZone',
'update_time' => 'LastUpdated',
'website' => 'Website',
];
foreach( $m4is_xnb14phvj5w as $m4is_3eag64b8 => $m4is_kr6q26vkyx4r6gjx1k3qzwhxfv5v ) {
if ( isset( $m4is_cyg7rcfhzagmm5v->$m4is_3eag64b8 ) ) {
$m4is_619n4j6mvpc9xh65aw07e['contact'][$m4is_kr6q26vkyx4r6gjx1k3qzwhxfv5v] = $m4is_cyg7rcfhzagmm5v->$m4is_3eag64b8;

}
}

if ( ! empty( $m4is_cyg7rcfhzagmm5v->tag_ids ) ) {
$m4is_619n4j6mvpc9xh65aw07e['contact']['Groups'] = implode( ',', $m4is_cyg7rcfhzagmm5v->tag_ids );

}

if ( ! empty( $m4is_cyg7rcfhzagmm5v->email_addresses ) ) {
$m4is_3qkv34fjzsac82x9zh = [
'EMAIL1' => 'Email',
'EMAIL2' => 'EmailAddress2',

'EMAIL3' => 'EmailAddress3',
];
foreach ( $m4is_cyg7rcfhzagmm5v->email_addresses as $m4is_83sfqv6725mpxtpmyqw ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_3qkv34fjzsac82x9zh[$m4is_83sfqv6725mpxtpmyqw->field];

$m4is_619n4j6mvpc9xh65aw07e['contact'][$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = $m4is_83sfqv6725mpxtpmyqw->email;
}
}

if ( ! empty( $m4is_cyg7rcfhzagmm5v->custom_fields ) ) {
$m4is_ng5wy5q306c7yg9crn6 ??= m4is_q28s00aabb2yd3d::m4is_rmnwvg97aafthwt( 'contact' );

foreach( $m4is_cyg7rcfhzagmm5v->custom_fields as $m4is_c7ygmnefqgt0zwbwkcy ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = '_' . $m4is_ng5wy5q306c7yg9crn6[$m4is_c7ygmnefqgt0zwbwkcy->id]->name ?? '';

if ( ! empty( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) ) {
$m4is_619n4j6mvpc9xh65aw07e['contact'][$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = $m4is_c7ygmnefqgt0zwbwkcy->content;

}
}
}





return $m4is_619n4j6mvpc9xh65aw07e;
}
}