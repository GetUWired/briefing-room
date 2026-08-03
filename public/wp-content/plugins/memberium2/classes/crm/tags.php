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


final class m4is_0ddg4zyk7dn8eg0283 {
private static int $m4is_ac9teep56p;
private static object $m4is_wsme5a297xh0v6d5y;
private static string $m4is_v4beyw7zqhr3;

private static string $m4is_kw193k52gqp8vsnss7sy;
private static string $m4is_2vm6530a;
private static string $m4is_9snzkxky0f7zxhyyb64;

private static object $m4is_132xe588j;
private static object $m4is_t8vjc2ec06gfv1gfwtfq5ch3;
private const TAG_CACHE_GROUP = 'memberium/keap/tags';


public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();

self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3 = self::$m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->m4is_dzjdf8h0p8gzs37xpyhh4krbgavss4();

self::$m4is_9snzkxky0f7zxhyyb64 = 'memberium_tags'; 
self::$m4is_kw193k52gqp8vsnss7sy = 'ContactGroup'; 
self::$m4is_ac9teep56p = 1000;

self::$m4is_2vm6530a = 'memberium_contacttags';
}

private function __construct() {}






private static function m4is_pr242hxfk7gndr6() : string {
return self::$m4is_9snzkxky0f7zxhyyb64;

}

public static function m4is_nm686mgj6zffggzes4k() : string {
return self::$m4is_2vm6530a;
}

public static function m4is_4zfagtxt5g4m9sxfxyexv5xj4() : array {
global $wpdb;

$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::$m4is_9snzkxky0f7zxhyyb64;
$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(20) NOT NULL, \n" .
"appname varchar(32) NOT NULL, \n" .
"name varchar(255) default NULL, \n" .
"category int(20) default NULL, \n" .
"KEY id (id), \n" .
"PRIMARY KEY  (appname,id) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}

public static function m4is_mwsbph5cgzhk0vb10d() : array {
global $wpdb;

$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_nm686mgj6zffggzes4k();
$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(20) NOT NULL AUTO_INCREMENT, \n" .
"appname varchar(32) NOT NULL, \n" .
"contactid int(20) NOT NULL, \n" .
"tagid int(20) NOT NULL, \n" .
"created timestamp, \n" .
"KEY id (id), \n" .
"KEY appname (appname), \n" .
"KEY contactid (contactid), \n" .
"KEY tagid (tagid), \n" .
"PRIMARY KEY  (id,appname) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}





public static function m4is_f8pw8qpvkmkfkb43w3dvg7h9y( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : void {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `contactid` = %d AND `appname` = %s";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 self::m4is_nm686mgj6zffggzes4k(), $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, self::$m4is_v4beyw7zqhr3 );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

self::$m4is_132xe588j->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}






public static function m4is_10dc7370y8z0fj7bx1v2vy7xh3ntzgqm( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 array $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) : array {
if ( empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) || empty( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) ) {
return [];

}
$m4is_fgzz0mqzfcx70d = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_erpb4s7wam( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj );
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = [
'SUCCESS' =>
 [],
'FAILURE' => []
];
foreach( $m4is_fgzz0mqzfcx70d as $m4is_06c8s5xs94f91335gnaey25 ) {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_m3e7cxx64vz3( 1,
 "contacts/{$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}/tags", ['tagIds' => $m4is_06c8s5xs94f91335gnaey25] );
if ( is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) || ! is_object( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) || ! empty( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->message ) ) {
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m['FAILURE'] = array_merge( $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m['FAILURE'],
 $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj );
}
else{
foreach ( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz as $tag_id => $m4is_hartbe843crydzh ) {
$m4is_hartbe843crydzh = $m4is_hartbe843crydzh !== 'SUCCESS' ? 'FAILURE' : 'SUCCESS';

$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m[$m4is_hartbe843crydzh][] = $tag_id;
}
}
}
return $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m;
}

public static function m4is_dh3sdfjkt45wpj8k( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 array $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) : array {
if ( empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) || empty( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) ) {
return [];

}
$m4is_fgzz0mqzfcx70d = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_erpb4s7wam( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj );
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = [
'SUCCESS' =>
 [],
'FAILURE' => []
];
foreach ( $m4is_fgzz0mqzfcx70d as $m4is_06c8s5xs94f91335gnaey25 ) {
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = implode( ',',
 $m4is_06c8s5xs94f91335gnaey25 );
$m4is_qp8kpjt19m994mw = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_n0fnsxjtsy1cjbc8jtmwb8ftwn( 1,
 "contacts/{$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}/tags?ids={$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj}" );
$result = is_wp_error( $m4is_qp8kpjt19m994mw ) ? 'FAILURE' : 'SUCCESS';

foreach ($m4is_06c8s5xs94f91335gnaey25 as $m4is_hf6ctsm2pnexk) {
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m[$result][] = $m4is_hf6ctsm2pnexk;

}
}
return $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m;
}

public static function m4is_2xhz9qx1gtyyn7app() : int {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT count(`id`) from %i WHERE `appname` = %s",
 self::$m4is_9snzkxky0f7zxhyyb64, self::$m4is_v4beyw7zqhr3 );
$m4is_7g9y793jjckyb = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
return (int) $m4is_7g9y793jjckyb;

}

public static function m4is_9dg3g1ypj6c2tb764cere8() : int {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(`id`) from %i WHERE `appname` = %s";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_9snzkxky0f7zxhyyb64, self::$m4is_v4beyw7zqhr3 );

$m4is_7g9y793jjckyb = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
return (int) $m4is_7g9y793jjckyb;
}

public static function m4is_x5rqgxjevt( array $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) : array {
global $wpdb;

$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = array_filter( array_map( 'intval', $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) );
if ( empty( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) ) {
return [];

}
$m4is_rrafcgdgfscsvdyyhcrzk05ypnnntyje = implode( ',', $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj );
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT DISTINCT(`category`) FROM %i WHERE `appname` = %s AND `id` IN ( {$m4is_rrafcgdgfscsvdyyhcrzk05ypnnntyje} )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_9snzkxky0f7zxhyyb64, self::$m4is_v4beyw7zqhr3 );

$m4is_vyfr8fxnj998rgpv0 = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
return $m4is_vyfr8fxnj998rgpv0;
}

public static function m4is_9bbkcv7vn6spvqcjs( string $m4is_6pyx9m8dy9tm3j7aq36p,
 int $m4is_g1q8vsgh8yz3c3y2 = 0, ?string $m4is_a6btn376p23vccn8a = null ) : int {
global $wpdb;
$m4is_6pyx9m8dy9tm3j7aq36p = trim( $m4is_6pyx9m8dy9tm3j7aq36p );

if ( empty( $m4is_6pyx9m8dy9tm3j7aq36p ) ) {
return 0;
}
$m4is_mxbr2sh6fszbfjha = m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_j4da8vwvgrkyjqjjjhy0();

if ( ! in_array( $m4is_g1q8vsgh8yz3c3y2, $m4is_mxbr2sh6fszbfjha ) ) {
return 0;
}
if ( is_null( $m4is_a6btn376p23vccn8a ) ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = wp_get_current_user();

$m4is_mr4hnyh6fa0p9sm0m8wfs1 = is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_User' ) ? $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login : 'System';

$m4is_a6btn376p23vccn8a = sprintf( "Created by %s using Memberium on %s", $m4is_mr4hnyh6fa0p9sm0m8wfs1, date( 'Y-m-d h:i:s' ) );
}
$m4is_fynv690rv3kb1xp9e79s9adsa60x = [
'GroupCategoryId' =>
 $m4is_g1q8vsgh8yz3c3y2,
'GroupDescription' => $m4is_a6btn376p23vccn8a,
'GroupName' => $m4is_6pyx9m8dy9tm3j7aq36p
];
$m4is_hf6ctsm2pnexk = m4is_xm67qjyegqdeb9wqcm::m4is_pqqt3t5np2bwsv9022ghw8hcxr5kj( self::$m4is_kw193k52gqp8vsnss7sy,
 $m4is_fynv690rv3kb1xp9e79s9adsa60x );
if ( $m4is_hf6ctsm2pnexk > 0 ) {
$m4is_5rbenkpt1v7xby2cknbs7 = 'INSERT INTO %i (`id`, `appname`, `name`, `category`) VALUES (%d, %s, %s, %s);';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_9snzkxky0f7zxhyyb64, $m4is_hf6ctsm2pnexk, self::$m4is_v4beyw7zqhr3,
 $m4is_6pyx9m8dy9tm3j7aq36p, $m4is_g1q8vsgh8yz3c3y2 );
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
if ( wp_cache_supports( 'flush_group' ) ) {
wp_cache_flush_group( self::TAG_CACHE_GROUP );

}
return $m4is_hf6ctsm2pnexk;
}
return 0;
}

public static function m4is_efv80414zggm01p039yaz3ettdd7( ?string $m4is_dr4qwcqmrv13r6nes32pap215w4j = '' ) : array {
global $wpdb;

$m4is_dbsg65sy53gz = "%{$m4is_dr4qwcqmrv13r6nes32pap215w4j}%" ;
$m4is_ahgg9a9dptkjsnxd9df = $m4is_dr4qwcqmrv13r6nes32pap215w4j ? $wpdb->prepare( " AND ( `name` LIKE %s OR `id` LIKE %s ) ",
 $m4is_dbsg65sy53gz, $m4is_dbsg65sy53gz ) : '';
$m4is_5rbenkpt1v7xby2cknbs7 = sprintf( "SELECT `id`, `name` FROM `%s` WHERE `appname` = '%s' %s ORDER BY `name` ASC ",
 self::$m4is_9snzkxky0f7zxhyyb64, self::$m4is_v4beyw7zqhr3, $m4is_ahgg9a9dptkjsnxd9df );
$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7,
 OBJECT_K );
return (array) $m4is_tbdh9qb6r6z;
}

public static function m4is_ttjvws3e6cfgrjntj5x( array $m4is_mfna3h7b9re17mzagz84kprkr ) : array {
global $wpdb;

static $m4is_6cya9ss5ka6swrx0pqz3y = [];
$m4is_mfna3h7b9re17mzagz84kprkr = array_unique( array_filter( $m4is_mfna3h7b9re17mzagz84kprkr ) );

if ( empty( $m4is_mfna3h7b9re17mzagz84kprkr ) ) {
return [];
}
$m4is_934a95jn = [];
$m4is_4k9wmep5cwdefjrxc59bv28n = [];
foreach( $m4is_mfna3h7b9re17mzagz84kprkr as $m4is_6pyx9m8dy9tm3j7aq36p ) {
if ( is_numeric( $m4is_6pyx9m8dy9tm3j7aq36p ) ) {
$m4is_934a95jn[] = (int) $m4is_6pyx9m8dy9tm3j7aq36p;

}
else {
$m4is_4k9wmep5cwdefjrxc59bv28n[] = strtolower( trim( $m4is_6pyx9m8dy9tm3j7aq36p ) );
}
}
if ( empty( $m4is_4k9wmep5cwdefjrxc59bv28n ) ) {
return array_filter( $m4is_934a95jn );

}
$m4is_6d6sf84g6h487jcfrsbs = [];
$m4is_n7rgzjff = [];
foreach( $m4is_4k9wmep5cwdefjrxc59bv28n as $m4is_d0eqrhbrrf ) {
if ( substr( $m4is_d0eqrhbrrf,
 0, 1 ) === '-' ) {
$m4is_n7rgzjff[] = substr( $m4is_d0eqrhbrrf, 1 );
}
else {
$m4is_6d6sf84g6h487jcfrsbs[] = $m4is_d0eqrhbrrf;
}
}
foreach( $m4is_6d6sf84g6h487jcfrsbs as $m4is_j8j55t8dz79m7 =>
 $m4is_6pyx9m8dy9tm3j7aq36p ) {
if ( array_key_exists( $m4is_6pyx9m8dy9tm3j7aq36p, $m4is_6cya9ss5ka6swrx0pqz3y ) ) {
$m4is_934a95jn[] = (int) $m4is_6cya9ss5ka6swrx0pqz3y[$m4is_6pyx9m8dy9tm3j7aq36p];

unset( $m4is_6d6sf84g6h487jcfrsbs[$m4is_j8j55t8dz79m7] );
}
}
foreach( $m4is_n7rgzjff as $m4is_j8j55t8dz79m7 => $m4is_6pyx9m8dy9tm3j7aq36p ) {
if ( array_key_exists( $m4is_6pyx9m8dy9tm3j7aq36p,
 $m4is_6cya9ss5ka6swrx0pqz3y ) ) {
$m4is_934a95jn[] = ( 0 - (int) $m4is_6cya9ss5ka6swrx0pqz3y[$m4is_6pyx9m8dy9tm3j7aq36p] );
unset( $m4is_n7rgzjff[$m4is_j8j55t8dz79m7] );

}
}
if ( empty( $m4is_6d6sf84g6h487jcfrsbs ) && empty( $m4is_n7rgzjff ) ) {
return array_filter( $m4is_934a95jn );
}
$m4is_zg1xzyf2wvny0pvzja = array_unique( array_merge( $m4is_6d6sf84g6h487jcfrsbs,
 $m4is_n7rgzjff ) );
$m4is_j5kd5andr815cy6wgaxn7e = implode( ', ', array_fill( 0, count( $m4is_zg1xzyf2wvny0pvzja ), '%s' ) );
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT LOWER(`name`) as `name`, `id` FROM %i WHERE `appname` = %s AND `name` IN ( {$m4is_j5kd5andr815cy6wgaxn7e} )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_pr242hxfk7gndr6(), self::$m4is_v4beyw7zqhr3,
 ...$m4is_zg1xzyf2wvny0pvzja );
$m4is_06c8s5xs94f91335gnaey25 = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K );
foreach( $m4is_06c8s5xs94f91335gnaey25 as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_6cya9ss5ka6swrx0pqz3y[$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0->name] = $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0->id;

}
foreach( $m4is_6d6sf84g6h487jcfrsbs as $m4is_j8j55t8dz79m7 => $m4is_6pyx9m8dy9tm3j7aq36p ) {
if ( array_key_exists( $m4is_6pyx9m8dy9tm3j7aq36p,
 $m4is_6cya9ss5ka6swrx0pqz3y ) ) {
$m4is_934a95jn[] = (int) $m4is_6cya9ss5ka6swrx0pqz3y[$m4is_6pyx9m8dy9tm3j7aq36p];
unset( $m4is_6d6sf84g6h487jcfrsbs[$m4is_j8j55t8dz79m7] );

}
}
foreach( $m4is_n7rgzjff as $m4is_j8j55t8dz79m7 => $m4is_6pyx9m8dy9tm3j7aq36p ) {
if ( array_key_exists( $m4is_6pyx9m8dy9tm3j7aq36p,
 $m4is_6cya9ss5ka6swrx0pqz3y ) ) {
$m4is_934a95jn[] = ( 0 - (int) $m4is_6cya9ss5ka6swrx0pqz3y[$m4is_6pyx9m8dy9tm3j7aq36p] );
unset( $m4is_n7rgzjff[$m4is_j8j55t8dz79m7] );

}
}
return array_filter( $m4is_934a95jn );
}

public static function m4is_p2hqsh5b9r262wb4gyvj2a0p85ngnc0f( array $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj,
 bool $m4is_934a95jn = false ) : array {
global $wpdb;
static $m4is_6f82s7z5kahd = [];
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = array_unique( array_filter( array_map( 'intval',
 $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) ) );
if ( empty( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) ) {
return [];
}
$m4is_t7t90vcashj2xnz9b032sh8gaatea = [];

foreach( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj as $m4is_hf6ctsm2pnexk ) {
if ( $m4is_hf6ctsm2pnexk < 0 ) {
$m4is_6f82s7z5kahd[0 - $m4is_hf6ctsm2pnexk] = true;

}
else {
$m4is_t7t90vcashj2xnz9b032sh8gaatea[] = $m4is_hf6ctsm2pnexk;
}
}
if ( empty( $m4is_t7t90vcashj2xnz9b032sh8gaatea ) ) {
return [];

}
$m4is_j5kd5andr815cy6wgaxn7e = implode( ', ', array_fill( 0, count( $m4is_t7t90vcashj2xnz9b032sh8gaatea ), '%d' ) );
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id`, `name` FROM %i WHERE `appname` = %s AND `id` IN ( {$m4is_j5kd5andr815cy6wgaxn7e} )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_pr242hxfk7gndr6(), self::$m4is_v4beyw7zqhr3,
 ...$m4is_t7t90vcashj2xnz9b032sh8gaatea );
$m4is_06c8s5xs94f91335gnaey25 = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K );

$m4is_mfna3h7b9re17mzagz84kprkr = [];
foreach( $m4is_06c8s5xs94f91335gnaey25 as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
if ( $m4is_934a95jn ) {
$m4is_mfna3h7b9re17mzagz84kprkr[$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0->id] = $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0->name . ' (' . $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0->id . ')';

}
else {
$m4is_mfna3h7b9re17mzagz84kprkr[$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0->id] = $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0->name;
}
}
return $m4is_mfna3h7b9re17mzagz84kprkr;

}

public static function m4is_havkghb9w( string $m4is_hce1y1a4qd65zhnwsj ) : bool {
global $wpdb;
$m4is_hce1y1a4qd65zhnwsj = trim( $m4is_hce1y1a4qd65zhnwsj );

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT count(*) FROM %i WHERE appname = %s AND name = %s", self::$m4is_9snzkxky0f7zxhyyb64,
 self::$m4is_v4beyw7zqhr3, $m4is_hce1y1a4qd65zhnwsj );
$m4is_7g9y793jjckyb = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
return (bool) $m4is_7g9y793jjckyb;

}

public static function m4is_xbjknamjn1xbdwcxsq74pdqcd6dhg( bool $m4is_hzp5xp7072fvw3cxqwxk77v63fqg8pj6 = false ) : array {
global $wpdb;


$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `name`, `id` FROM %i WHERE `appname` = %s ORDER BY `name`", self::$m4is_9snzkxky0f7zxhyyb64,
 self::$m4is_v4beyw7zqhr3 );
$m4is_06c8s5xs94f91335gnaey25 = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
$m4is_kpcg6nzdp3rpsyj8vvz = [];

if ( is_array( $m4is_06c8s5xs94f91335gnaey25 ) ) {
foreach($m4is_06c8s5xs94f91335gnaey25 as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) {
$m4is_kpcg6nzdp3rpsyj8vvz[] = sprintf( "(%d) %s",
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['id'], $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['name'] );
if ($m4is_hzp5xp7072fvw3cxqwxk77v63fqg8pj6) {
$m4is_kpcg6nzdp3rpsyj8vvz[] = sprintf( "(-%d) %s",
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['id'], $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['name'] );
}
}
}
return $m4is_kpcg6nzdp3rpsyj8vvz;
}

public static function m4is_2ew8j6drj16( string $m4is_6pyx9m8dy9tm3j7aq36p ) : int {
global $wpdb;

static $m4is_t8hdmkajkn68mdfj9eyjbatmjpd = [];
$m4is_6pyx9m8dy9tm3j7aq36p = strtolower( trim( $m4is_6pyx9m8dy9tm3j7aq36p ) );
if ( empty ( $m4is_6pyx9m8dy9tm3j7aq36p ) ) {
return 0;

}
if ( is_numeric( $m4is_6pyx9m8dy9tm3j7aq36p ) ) {
return (int) $m4is_6pyx9m8dy9tm3j7aq36p;
}
if ( array_key_exists( $m4is_6pyx9m8dy9tm3j7aq36p,
 $m4is_t8hdmkajkn68mdfj9eyjbatmjpd ) ) {
return (int) $m4is_t8hdmkajkn68mdfj9eyjbatmjpd[$m4is_6pyx9m8dy9tm3j7aq36p];
}
$m4is_5rbenkpt1v7xby2cknbs7 = 'SELECT `id` FROM %i WHERE `appname` = %s AND `name` = %s ORDER BY `id` LIMIT 1';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_pr242hxfk7gndr6(), self::$m4is_v4beyw7zqhr3,
 $m4is_6pyx9m8dy9tm3j7aq36p );
$m4is_hf6ctsm2pnexk = (int) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
if ( $m4is_hf6ctsm2pnexk ) {
$m4is_t8hdmkajkn68mdfj9eyjbatmjpd[$m4is_6pyx9m8dy9tm3j7aq36p] = $m4is_hf6ctsm2pnexk;

}
return $m4is_hf6ctsm2pnexk;
}

public static function m4is_x73n0p7w( $m4is_wfv34z8p = false, $m4is_m8h0sfmsjb = false ) {
global $wpdb;

$m4is_yqbs57707b9pgq = is_admin() ? 1 : 900;
$m4is_ape2tj7p7kchvesrhj6wq7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'ignore_tag_categories' );
$m4is_hartbe843crydzh = [];
$m4is_hartbe843crydzh['lc'] = [];
$m4is_hartbe843crydzh['mc'] = [];

if ( $m4is_wfv34z8p == true && $m4is_ape2tj7p7kchvesrhj6wq7 > '' ) {
$m4is_n6xstzw6d = sprintf( " AND category NOT IN ( %s ) ",
 $m4is_ape2tj7p7kchvesrhj6wq7 );
}
else {
$m4is_n6xstzw6d = '';
}
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `id`, `name` FROM %i WHERE `appname` = %s ",
 self::$m4is_9snzkxky0f7zxhyyb64, self::$m4is_v4beyw7zqhr3 ) . " {$m4is_n6xstzw6d} ORDER BY `category`, `name`";
$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = sha1( $m4is_5rbenkpt1v7xby2cknbs7 );

$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = [];
$m4is_06c8s5xs94f91335gnaey25 = [];
if ( ! is_admin() ) {
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = wp_cache_get( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z,
 self::TAG_CACHE_GROUP, false, $m4is_6p2tyvq6paj43svrn7zqaykxzy );
}
if ( ! $m4is_6p2tyvq6paj43svrn7zqaykxzy || ! is_array( $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m ) ) {
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7,
 ARRAY_A );
wp_cache_set( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m, self::TAG_CACHE_GROUP, $m4is_yqbs57707b9pgq );

}
foreach ( $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_06c8s5xs94f91335gnaey25['mc'][$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['id']] = $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['name'];

$m4is_06c8s5xs94f91335gnaey25['lc'][$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['id']] = strtolower( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['name'] );

}
unset( $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m );

if ( $m4is_m8h0sfmsjb ) {
if ( ! empty($m4is_06c8s5xs94f91335gnaey25['mc']) && is_array($m4is_06c8s5xs94f91335gnaey25['mc']) ){
$m4is_06c8s5xs94f91335gnaey25['hn'] = [];

$m4is_pkxxneatfsdg7 = __('Does Not Have', 'memberium');
foreach ( $m4is_06c8s5xs94f91335gnaey25['mc'] as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_06c8s5xs94f91335gnaey25['hn'][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0;

$m4is_06c8s5xs94f91335gnaey25['hn'][ '-' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_pkxxneatfsdg7 . ' ' . $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0;

}
}
}
return (array) $m4is_06c8s5xs94f91335gnaey25;
}

public static function m4is_6aqw2cq1ybep7vgra5hh7zr( $m4is_syqymyz40rx4xgtqp8475ffwzw,
 $m4is_tdr04w7fk3b7k2at1vz9jpr1sd2 ) : array {
$m4is_hn5gx2w6k = [];
$m4is_hzp5xp7072fvw3cxqwxk77v63fqg8pj6 = $m4is_tdr04w7fk3b7k2at1vz9jpr1sd2 === 'oxygen' ? false : true;

$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true, $m4is_hzp5xp7072fvw3cxqwxk77v63fqg8pj6 );
$i = $m4is_hzp5xp7072fvw3cxqwxk77v63fqg8pj6 ? 'hn' : 'mc';

$m4is_06c8s5xs94f91335gnaey25 = isset( $m4is_06c8s5xs94f91335gnaey25[$i] ) ? $m4is_06c8s5xs94f91335gnaey25[$i] : false;
if ( $m4is_06c8s5xs94f91335gnaey25 ) {
foreach ( $m4is_06c8s5xs94f91335gnaey25 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_hn5gx2w6k[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 . ' (' . str_replace( '-',
 '', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) . ')';
}
}
return $m4is_hn5gx2w6k;
}






public static function m4is_r929khbv823hsxjc0498q() {
global $wpdb;

if ( wp_cache_supports( 'flush_group' ) ) {
wp_cache_flush_group( self::TAG_CACHE_GROUP );
}
$m4is_vbpm0vr31ww5x3egf06t = m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_vwnpg6405pkz320gaykg9k9xp();

$m4is_4j79jx2ze = m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_j4da8vwvgrkyjqjjjhy0( true, true );
$m4is_f439e0vcqmwcp7fyarcbzm5e1zmn = count( $m4is_4j79jx2ze );

$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_csnk3yn47 = m4is_0ddg4zyk7dn8eg0283::m4is_pr242hxfk7gndr6();
$m4is_wg6962ce7vp0 = 0;
$m4is_19x1c17et728k945 = [];

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',
'GroupName',
'GroupCategoryId'
];
$m4is_j34bmw9dcjexfj1qpz = [
'Id' => '%',
];
if ( $m4is_f439e0vcqmwcp7fyarcbzm5e1zmn == 1) {
$m4is_j34bmw9dcjexfj1qpz = [
'GroupCategoryId' =>
 $m4is_4j79jx2ze[0],
];
}

do {
$m4is_06c8s5xs94f91335gnaey25 = self::$m4is_wsme5a297xh0v6d5y->dsQueryOrderBy( self::$m4is_kw193k52gqp8vsnss7sy,
 self::$m4is_ac9teep56p, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', true );
$m4is_gqmmzp9nw4 = is_array( $m4is_06c8s5xs94f91335gnaey25 ) ? count( $m4is_06c8s5xs94f91335gnaey25 ) : 0;

if ( ! is_array( $m4is_06c8s5xs94f91335gnaey25 ) ) {
error_log( sprintf( "Memberium: [error] Failed to retrieve tags from the CRM system.  Query returned '%s'",
 (string) $m4is_06c8s5xs94f91335gnaey25 ) );
}
if ( $m4is_gqmmzp9nw4 ) {
$m4is_fycpkje9sqts1230ewq = [];
foreach ( $m4is_06c8s5xs94f91335gnaey25 as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['GroupName'] = isset( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['GroupName'] ) ? $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['GroupName'] : '';

if ( $m4is_f439e0vcqmwcp7fyarcbzm5e1zmn == 1 || ( in_array( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['GroupCategoryId'], $m4is_4j79jx2ze ) ) ) {
$m4is_fycpkje9sqts1230ewq[] = $wpdb->prepare( '( %d, %s, %s, %d )',
 (int) $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['Id'], self::$m4is_v4beyw7zqhr3, $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['GroupName'], (int) $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['GroupCategoryId'] );

$m4is_19x1c17et728k945[] = (int) $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['Id'];
}
}
if ( count( $m4is_fycpkje9sqts1230ewq ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO `{$m4is_csnk3yn47}` (id, appname, name, category ) VALUES " . implode( ', ',
 $m4is_fycpkje9sqts1230ewq ) . " ON DUPLICATE KEY UPDATE id=VALUES(id), appname=VALUES(appname), name=VALUES(name), category=VALUES(category)";

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
$m4is_ek8adjz9yz7wvga34bby56++;
}
}
while ( $m4is_gqmmzp9nw4 == self::$m4is_ac9teep56p );

if ( count( $m4is_19x1c17et728k945 ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM {$m4is_csnk3yn47} WHERE `appname` = %s AND `id` NOT IN ( " . implode( ', ',
 $m4is_19x1c17et728k945) . " )";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_v4beyw7zqhr3 );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
$m4is_jrqdhydea8tfkwz4n4g07t6ee = get_option( 'memberium_tables_updated', [] );
$m4is_jrqdhydea8tfkwz4n4g07t6ee['tags'] = isset( $m4is_jrqdhydea8tfkwz4n4g07t6ee['tags'] ) ? $m4is_jrqdhydea8tfkwz4n4g07t6ee['tags'] : 0;

$m4is_jrqdhydea8tfkwz4n4g07t6ee['tags'] = time();
if ( wp_cache_supports( 'flush_group' ) ) {
wp_cache_flush_group( self::TAG_CACHE_GROUP );

}
set_transient( 'memberium_tags_updated', time() );
update_option( 'memberium_tables_updated', $m4is_jrqdhydea8tfkwz4n4g07t6ee, false );

return $m4is_wg6962ce7vp0;
}

public static function m4is_6f5e3xv5588cwxrrxb8wq5bp7pxg( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : void {
global $wpdb;

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_7yaq0kttm = self::m4is_nm686mgj6zffggzes4k();
$m4is_rkmcn1zd3r3k149h20vfr8z = self::$m4is_ac9teep56p;

$m4is_kw193k52gqp8vsnss7sy = 'ContactGroupAssign';
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_kyw6mwey3 = 0;
$m4is_eepkb4x5k = 'ContactId';

$m4is_e4c15spmbs53rwm0c = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'GroupId',
'DateCreated'
];
$wpdb->delete( $m4is_7yaq0kttm,
 [
'contactid' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'appname' => self::$m4is_v4beyw7zqhr3
] );
do {
$m4is_tbdh9qb6r6z = self::$m4is_wsme5a297xh0v6d5y->dsfind( $m4is_kw193k52gqp8vsnss7sy,
 (int) $m4is_rkmcn1zd3r3k149h20vfr8z, (int) $m4is_ek8adjz9yz7wvga34bby56, $m4is_eepkb4x5k, (string) $m4is_e4c15spmbs53rwm0c, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );

$m4is_7g9y793jjckyb = is_array( $m4is_tbdh9qb6r6z ) ? count( $m4is_tbdh9qb6r6z ) : 0;
if ( $m4is_7g9y793jjckyb ) {
$m4is_cegjvya4jj68mdszk = [];

$m4is_j5kd5andr815cy6wgaxn7e = [];

foreach ($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
$m4is_sv30ta9xmr42kad11 = (int) strtotime( $m4is_bamv772v['DateCreated'] );

$m4is_cegjvya4jj68mdszk[] = self::$m4is_v4beyw7zqhr3;
$m4is_cegjvya4jj68mdszk[] = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
$m4is_cegjvya4jj68mdszk[] = (int) $m4is_bamv772v['GroupId'];

$m4is_cegjvya4jj68mdszk[] = date( 'Y-m-d H:i:s', $m4is_sv30ta9xmr42kad11 );

$m4is_j5kd5andr815cy6wgaxn7e[] = "( %s, %d, %d, %s ) ";

}

$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO `{$m4is_7yaq0kttm}` (appname, contactid, tagid, created) VALUES " . implode(', ', $m4is_j5kd5andr815cy6wgaxn7e );


$wpdb->query( $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, ...$m4is_cegjvya4jj68mdszk ) );
}
}
while ( $m4is_7g9y793jjckyb == $m4is_rkmcn1zd3r3k149h20vfr8z );

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

}






private static function m4is_ejhz4w84n( bool $m4is_pxqqyhvpv8x9tskp6p79ktbd = false ) : void {
$m4is_prj33ewz63h68yj8jyd = 'memberium/keap/tags/next_sync';

if ( ! $m4is_pxqqyhvpv8x9tskp6p79ktbd ) {
$m4is_a1nvrcf9p11mc5ca45vyxt64e6bp32hx = get_option( $m4is_prj33ewz63h68yj8jyd, 0 );
if ( $m4is_a1nvrcf9p11mc5ca45vyxt64e6bp32hx > time() ) {
return;

}
}
$m4is_np4yda89vqymdrrcp34qpc197nyb1bt7 = 'memberium/keap/tags/highest_sync_id';
$m4is_7zeg9z53qm6kan = 6 * HOUR_IN_SECONDS;
$m4is_mmh8b2v39h9w6jzn167fzn4d7v4k8 = 5 * MINUTE_IN_SECONDS;

$m4is_eq6qgxyfx = (int) get_option( $m4is_np4yda89vqymdrrcp34qpc197nyb1bt7, 0 );
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( self::$m4is_kw193k52gqp8vsnss7sy,
 true );
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_j34bmw9dcjexfj1qpz = [
'Id' => "~>~ {$m4is_eq6qgxyfx}",
];
$m4is_06c8s5xs94f91335gnaey25 = self::$m4is_wsme5a297xh0v6d5y->dsQueryOrderBy( self::$m4is_kw193k52gqp8vsnss7sy,
 self::$m4is_ac9teep56p, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', true);
if ( is_string( $m4is_06c8s5xs94f91335gnaey25 ) ) {
error_log( sprintf( "Memberium: [error] Failed to retrieve tags from the CRM system.  Query returned '%s'",
 $m4is_06c8s5xs94f91335gnaey25 ) );
return;
}
if ( ! is_array( $m4is_06c8s5xs94f91335gnaey25 ) ) {
return;
}
else {
$m4is_gqmmzp9nw4 = count( $m4is_06c8s5xs94f91335gnaey25 );

$m4is_eytb9ssj7 = end( $m4is_06c8s5xs94f91335gnaey25 );
$m4is_9dkxv88d74mw45rtprbw9mn3457z0j = (int) end( $m4is_06c8s5xs94f91335gnaey25 )['Id'];

$m4is_4w1t3tk8mg = self::m4is_pv18gsza( $m4is_eq6qgxyfx, $m4is_9dkxv88d74mw45rtprbw9mn3457z0j );
$m4is_4ref7vcec = self::m4is_vpppj0ctvexj( $m4is_06c8s5xs94f91335gnaey25 );

$m4is_3vd6q50h4nm3jfs456379h1h07503dq5 = array_diff( $m4is_4w1t3tk8mg, $m4is_4ref7vcec );
if ( $m4is_gqmmzp9nw4 < self::$m4is_ac9teep56p ) {
$m4is_9dkxv88d74mw45rtprbw9mn3457z0j = 0;

$m4is_g9w1zz24n = $m4is_7zeg9z53qm6kan;
}
else {
$m4is_g9w1zz24n = $m4is_mmh8b2v39h9w6jzn167fzn4d7v4k8;
}
self::m4is_j5x587x62npsmd0m7g5ez5fd8n( $m4is_eq6qgxyfx,
 $m4is_9dkxv88d74mw45rtprbw9mn3457z0j, $m4is_3vd6q50h4nm3jfs456379h1h07503dq5 );
update_option( $m4is_np4yda89vqymdrrcp34qpc197nyb1bt7,
 $m4is_9dkxv88d74mw45rtprbw9mn3457z0j, false );
update_option( $m4is_prj33ewz63h68yj8jyd, time() + $m4is_g9w1zz24n, false );
if ( wp_cache_supports( 'flush_group' ) ) {
wp_cache_flush_group( self::TAG_CACHE_GROUP );

}
}
}

private static function m4is_vpppj0ctvexj( array $m4is_06c8s5xs94f91335gnaey25 ) : array {
global $wpdb;
$m4is_fycpkje9sqts1230ewq = [];

$m4is_fdb68w29avrc1tsbx67zd = [];
foreach ( $m4is_06c8s5xs94f91335gnaey25 as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['GroupName'] = isset( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['GroupName'] ) ? $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['GroupName'] : '';

$m4is_fycpkje9sqts1230ewq[] = $wpdb->prepare( '( %d, %s, %s, %d )', (int) $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['Id'], self::$m4is_v4beyw7zqhr3,
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['GroupName'], (int) $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['GroupCategoryId'] );
$m4is_fdb68w29avrc1tsbx67zd[] = (int) $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0['Id'];

}
if ( ! empty( $m4is_fycpkje9sqts1230ewq ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "INSERT INTO %i (id, appname, name, category ) VALUES ",
 self::$m4is_9snzkxky0f7zxhyyb64 ) . implode( ', ', $m4is_fycpkje9sqts1230ewq ) . " ON DUPLICATE KEY UPDATE id=VALUES(id), appname=VALUES(appname), name=VALUES(name), category=VALUES(category)";

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
return $m4is_fdb68w29avrc1tsbx67zd;
}

private static function m4is_pv18gsza( int $m4is_rjmk9nzcsr0,
 int $m4is_jm3x4nend6zh98f6 ) : array {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `id` FROM %i WHERE `appname` = %s AND `id` BETWEEN %d AND %d",
 self::$m4is_9snzkxky0f7zxhyyb64, self::$m4is_v4beyw7zqhr3, $m4is_rjmk9nzcsr0, $m4is_jm3x4nend6zh98f6 );
$m4is_934a95jn = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );

return $m4is_934a95jn;
}

private static function m4is_j5x587x62npsmd0m7g5ez5fd8n( int $m4is_rjmk9nzcsr0, int $m4is_jm3x4nend6zh98f6,
 array $m4is_3vd6q50h4nm3jfs456379h1h07503dq5 ) : void {
global $wpdb;
if ( empty( $m4is_3vd6q50h4nm3jfs456379h1h07503dq5 ) ) {
return;

}
$m4is_b4tj8bz7gag2n7w4a3ych8s4hw86 = implode( ', ', $m4is_3vd6q50h4nm3jfs456379h1h07503dq5 );
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `appname` = %s AND `id` IN ( {$m4is_b4tj8bz7gag2n7w4a3ych8s4hw86} )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_9snzkxky0f7zxhyyb64, self::$m4is_v4beyw7zqhr3,
 $m4is_rjmk9nzcsr0, $m4is_jm3x4nend6zh98f6 );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
echo '<p>', $m4is_5rbenkpt1v7xby2cknbs7,
 '</p>';
}
}

