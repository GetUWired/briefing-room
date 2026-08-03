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

final class m4is_bj0mt04ye7axtp644x64m {
private static object $m4is_4fbz2e9k7gaabgs0fe5eyw;
private static object $m4is_132xe588j;

private static string $m4is_v4beyw7zqhr3;
private const USER_META_SOURCE_KEY = 'memberium/groups/source';
private function __construct() {

}
public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_4fbz2e9k7gaabgs0fe5eyw = m4is_p2r78mkk9tdtwpmc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );

}




static function m4is_8dnas9z9md577n9p1bher() : string {
global $wpdb;
return $wpdb->prefix . 'memberium_group_account';
}

static function m4is_ec8apdfffjapp7t75d2ypkrk9dpct() : array {
global $wpdb;

$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_8dnas9z9md577n9p1bher();
$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(11) NOT NULL AUTO_INCREMENT, \n" .
"parent_uid bigint(20) NOT NULL, \n" .
"child_uid bigint(20) NOT NULL, \n" .
"active tinyint(1) NOT NULL, \n" .
"sync tinyint(1) NOT NULL, \n" .
"KEY parent_uid (parent_uid), \n" .
"KEY child_uid (child_uid), \n" .
"UNIQUE KEY uids (parent_uid,child_uid), \n" .
"PRIMARY KEY  (id) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}
static function m4is_nnxwqmy0fvta4ktrh1eda() : string {
global $wpdb;

return $wpdb->prefix . 'memberium_team_membership';
}
static function m4is_ghbnt18fk() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();

$m4is_k7p8pmxsbkqrje3y20 = self::m4is_nnxwqmy0fvta4ktrh1eda();
$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(11) NOT NULL AUTO_INCREMENT, \n" .
"team_id bigint(20) NOT NULL, \n" .
"parent_uid bigint(20) NOT NULL, \n" .
"child_uid bigint(20) NOT NULL, \n" .
"active tinyint(1) NOT NULL, \n" .
"KEY team_id (team_id), \n" .
"KEY child_uid (child_uid), \n" .
"UNIQUE KEY uids (team_id,child_uid), \n" .
"PRIMARY KEY  (id) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}



private static function m4is_e67mmddqd6mqbckvwryy() : array {
global $wpdb;

$m4is_m8x3z0ehyggbsd = self::$m4is_4fbz2e9k7gaabgs0fe5eyw->m4is_se0apr3xwyzdk8zcatzz( 'parent_field' );
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id` as 'contact_id', `value` as 'code' FROM %i WHERE `appname` = %s AND `fieldname` = %s AND `value` LIKE 'prnt-%' ORDER BY `id` ASC";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3(),
 self::$m4is_v4beyw7zqhr3, $m4is_m8x3z0ehyggbsd );
$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K );

return (array) $m4is_tbdh9qb6r6z;
}
public static function m4is_4vw3pgzrq9ng4ndvq( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : void {
global $wpdb;

if ( ! self::$m4is_4fbz2e9k7gaabgs0fe5eyw->m4is_0nf7egh7gg4p1m5t0ea( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return;
}
$m4is_m8x3z0ehyggbsd = self::$m4is_4fbz2e9k7gaabgs0fe5eyw->m4is_jvjswjxb6h();

$m4is_w71yntd8xcdtsx4hnr9qfc0 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'contact', $m4is_m8x3z0ehyggbsd, '' );
$m4is_w71yntd8xcdtsx4hnr9qfc0 = substr( $m4is_w71yntd8xcdtsx4hnr9qfc0, 5 );
if ( empty( $m4is_w71yntd8xcdtsx4hnr9qfc0 ) ) {
return;

}
$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = 'chld-' . $m4is_w71yntd8xcdtsx4hnr9qfc0 ;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id` as 'contact_id', `value` as 'code' FROM %i WHERE `appname` = %s AND `fieldname` = %s AND `value` LIKE %s ORDER BY `id` ASC";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3(),
 self::$m4is_v4beyw7zqhr3, $m4is_m8x3z0ehyggbsd, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 );
$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7,
 OBJECT_K );
if ( empty( $m4is_tbdh9qb6r6z ) ) {
return;
}
$m4is_1yzmh3jsg57 = self::$m4is_4fbz2e9k7gaabgs0fe5eyw->m4is_dr8ff7hwsd6h5y( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

foreach ( $m4is_tbdh9qb6r6z as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp => $m4is_cyg7rcfhzagmm5v ) {
$m4is_hrpd1pwhn = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( $m4is_hrpd1pwhn && ! in_array( $m4is_hrpd1pwhn, $m4is_1yzmh3jsg57 ) ) {
self::$m4is_4fbz2e9k7gaabgs0fe5eyw->m4is_210qcdmxy4335k6sm7ed2rxmx5hq( $m4is_hrpd1pwhn,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
}
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE (`parent_uid` = 0 OR `child_uid` = 0) AND `sync` = 1";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_8dnas9z9md577n9p1bher() );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

}

public static function m4is_9n1zfbptywae0f1eb() : void {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) FROM %i WHERE 1=1";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_8dnas9z9md577n9p1bher() );
$m4is_7g9y793jjckyb = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

if ( $m4is_7g9y793jjckyb ) {
return;
}
$m4is_m8x3z0ehyggbsd = self::$m4is_4fbz2e9k7gaabgs0fe5eyw->m4is_jvjswjxb6h();
$m4is_yh7hpndk78zwdfh0mz = [];

$m4is_1ft5zc00mb8v41g44x1s = [];
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id` as 'contact_id', `value` as 'code' FROM %i WHERE `appname` = %s AND `fieldname` = %s AND `value` LIKE 'prnt-%' ORDER BY `id` ASC";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3(),
 self::$m4is_v4beyw7zqhr3, $m4is_m8x3z0ehyggbsd );
$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K );

foreach ( $m4is_tbdh9qb6r6z as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp => $m4is_cyg7rcfhzagmm5v ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_yh7hpndk78zwdfh0mz[$m4is_wk4dh1rnd3wmwvsggq51nhn87] = substr( $m4is_cyg7rcfhzagmm5v->code, 5 );
}
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id` as 'contact_id', `value` as 'code' FROM %i WHERE `appname` = %s AND `fieldname` = %s AND `value` LIKE 'chld-%' ORDER BY `id` ASC";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3(),
 self::$m4is_v4beyw7zqhr3, $m4is_m8x3z0ehyggbsd );
$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K );

foreach ( $m4is_tbdh9qb6r6z as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp => $m4is_cyg7rcfhzagmm5v ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_1ft5zc00mb8v41g44x1s[$m4is_wk4dh1rnd3wmwvsggq51nhn87] = substr( $m4is_cyg7rcfhzagmm5v->code, 5 );
}
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `child_uid` FROM %i WHERE 1=1";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_8dnas9z9md577n9p1bher() );
$m4is_0eagpk5be6n4 = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );

$m4is_yh7hpndk78zwdfh0mz = array_flip( $m4is_yh7hpndk78zwdfh0mz );
$m4is_1ft5zc00mb8v41g44x1s = array_filter( $m4is_1ft5zc00mb8v41g44x1s,
 function ( $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_j8j55t8dz79m7) use ( $m4is_0eagpk5be6n4 ) {
return ! in_array( $m4is_j8j55t8dz79m7,
 $m4is_0eagpk5be6n4);
}, ARRAY_FILTER_USE_BOTH );
foreach( $m4is_1ft5zc00mb8v41g44x1s as $m4is_95dnkbqxkxsryj4 => $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 ) {
$m4is_5ygx9ywzd4gfc1dwqb = $m4is_yh7hpndk78zwdfh0mz[$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4] ?? 0;

if ( ! $m4is_5ygx9ywzd4gfc1dwqb ) {
continue;
}
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO %i (`parent_uid`, `child_uid`, `active` ) VALUES ( %d, %d, 1 )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_8dnas9z9md577n9p1bher(), $m4is_5ygx9ywzd4gfc1dwqb,
 $m4is_95dnkbqxkxsryj4 );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
}




public static function m4is_tx3rs4mb6ecxsjzkk7ax8078w9fte( int $m4is_yan573ys3brnv39zsernk3xs,
 int $m4is_5ygx9ywzd4gfc1dwqb, bool $m4is_t7fmxhrcpakr5d5fj ) : void {
global $wpdb;
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_8dnas9z9md577n9p1bher();

$m4is_t7fmxhrcpakr5d5fj = (int) $m4is_t7fmxhrcpakr5d5fj;
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO %i (`parent_uid`, `child_uid`, `active`, `sync` ) VALUES (%d, %d, %d, 0 ) ON DUPLICATE KEY UPDATE `active` = %d, `sync` = 0";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_5ygx9ywzd4gfc1dwqb, $m4is_yan573ys3brnv39zsernk3xs,
 $m4is_t7fmxhrcpakr5d5fj, $m4is_t7fmxhrcpakr5d5fj );
update_user_meta( $m4is_yan573ys3brnv39zsernk3xs, self::USER_META_SOURCE_KEY, 'relationship_table' );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}

}
