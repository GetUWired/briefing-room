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

m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_z6c3r724qhd();

final class m4is_6xn1pjnrksg2r2y58e54cqsedvtka8 {
private static object $m4is_132xe588j;

private static object $m4is_wsme5a297xh0v6d5y;
private static string $m4is_v4beyw7zqhr3;
private static string $m4is_mk7mf5ey2jajtzqyk0;

private const PAGE_SIZE = 1000;

static function m4is_z6c3r724qhd() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();

self::$m4is_mk7mf5ey2jajtzqyk0 = 'memberium_contactgroupcategories';
}

private function __construct() {

}




private static function m4is_jkk4w6ba0bz6vw5v533n68x12() : string {
return self::$m4is_mk7mf5ey2jajtzqyk0;

}

public static function m4is_gm4095j5zc8k7mq6ptwwx25k0bpm4k35() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();

$m4is_k7p8pmxsbkqrje3y20 = self::m4is_jkk4w6ba0bz6vw5v533n68x12();
$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(11) NOT NULL, \n" .
"appname varchar(32) NOT NULL, \n" .
"name varchar(64) NOT NULL, \n" .
"KEY id (id), \n" .
"PRIMARY KEY  (appname,id) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}




public static function m4is_aekc9p2t46yq3v() : int {
global $wpdb;

$m4is_csnk3yn47 = self::m4is_jkk4w6ba0bz6vw5v533n68x12();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(`id`) from %i WHERE `appname` = %s";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_csnk3yn47, self::$m4is_v4beyw7zqhr3 );
$m4is_vyfr8fxnj998rgpv0 = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

return (int) $m4is_vyfr8fxnj998rgpv0;
}

private static function m4is_ppq5tw2raweee2xm059( string $m4is_hce1y1a4qd65zhnwsj ) : bool {
global $wpdb;

$m4is_hce1y1a4qd65zhnwsj = trim( $m4is_hce1y1a4qd65zhnwsj );
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) FROM %i WHERE appname = %s AND name = %s";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_jkk4w6ba0bz6vw5v533n68x12(), self::$m4is_v4beyw7zqhr3,
 $m4is_hce1y1a4qd65zhnwsj );
$m4is_7g9y793jjckyb = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
return (bool) $m4is_7g9y793jjckyb;

}

public static function m4is_vwnpg6405pkz320gaykg9k9xp() : array {
$m4is_bfjt3d1ej5 = array_filter( explode( ',', self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'ignore_tag_categories', '' ) ), 'is_numeric' );
return $m4is_bfjt3d1ej5;
}

public static function m4is_j4da8vwvgrkyjqjjjhy0( bool $m4is_7cnqmq393r5943bakytp1sjm428qk1 = true,
 bool $m4is_b2pkmzqyez7a = true ) : array {
global $wpdb;
$m4is_bfjt3d1ej5 = [];
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id` FROM %i WHERE appname = %s ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_jkk4w6ba0bz6vw5v533n68x12(), self::$m4is_v4beyw7zqhr3 );

if ( $m4is_7cnqmq393r5943bakytp1sjm428qk1 ) {
$m4is_bfjt3d1ej5 = self::m4is_vwnpg6405pkz320gaykg9k9xp();
if ( ! empty( $m4is_bfjt3d1ej5 ) ) {
$m4is_my5astb7cmt6k8d2ter5dbt8m60902 = implode( ',',
 $m4is_bfjt3d1ej5 );
$m4is_5rbenkpt1v7xby2cknbs7 .= " AND `id` NOT IN ( {$m4is_my5astb7cmt6k8d2ter5dbt8m60902} ) ";
}
}
$m4is_5rbenkpt1v7xby2cknbs7 .= " ORDER BY `id` ASC";

$m4is_vyfr8fxnj998rgpv0 = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
if ( $m4is_b2pkmzqyez7a && ! in_array( 0, $m4is_bfjt3d1ej5 ) ) {
$m4is_vyfr8fxnj998rgpv0 = array_merge( [0],
 $m4is_vyfr8fxnj998rgpv0 );
}
return $m4is_vyfr8fxnj998rgpv0;
}

public static function m4is_t13d80yjczb01vd0wejdnnjskxb9q( bool $m4is_7cnqmq393r5943bakytp1sjm428qk1 = true,
 bool $m4is_b2pkmzqyez7a = true ) : array {
global $wpdb;
$m4is_bfjt3d1ej5 = [];
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `id`, `name` FROM %i WHERE appname = %s ",
 self::$m4is_mk7mf5ey2jajtzqyk0, self::$m4is_v4beyw7zqhr3 );
if ( $m4is_7cnqmq393r5943bakytp1sjm428qk1 ) {
$m4is_bfjt3d1ej5 = self::m4is_vwnpg6405pkz320gaykg9k9xp();

if ( ! empty( $m4is_bfjt3d1ej5 ) ) {
$m4is_my5astb7cmt6k8d2ter5dbt8m60902 = implode( ',', $m4is_bfjt3d1ej5 );
$m4is_5rbenkpt1v7xby2cknbs7 .= " AND `id` NOT IN ( {$m4is_my5astb7cmt6k8d2ter5dbt8m60902} ) ";

}
}
$m4is_5rbenkpt1v7xby2cknbs7 .= " ORDER BY `name` ASC";
$m4is_vyfr8fxnj998rgpv0 = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7,
 ARRAY_A );
if ( $m4is_b2pkmzqyez7a && ! in_array( 0, $m4is_bfjt3d1ej5 ) ) {
$m4is_vyfr8fxnj998rgpv0 = array_merge( [ ['id' => 0, 'name' =>
 '(Uncategorized)'] ], $m4is_vyfr8fxnj998rgpv0 );
}
return $m4is_vyfr8fxnj998rgpv0;
}

public static function m4is_erjfehtz389a6pbsrw() : int {
global $wpdb;

$m4is_jrqdhydea8tfkwz4n4g07t6ee = get_option( 'memberium_tables_updated', [] );
$m4is_jrqdhydea8tfkwz4n4g07t6ee['tagcategories'] = isset( $m4is_jrqdhydea8tfkwz4n4g07t6ee['tagcategories']) ? $m4is_jrqdhydea8tfkwz4n4g07t6ee['tagcategories'] : 0;

$m4is_s25y1e2cxa = '';
$m4is_rkmcn1zd3r3k149h20vfr8z = self::PAGE_SIZE;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_kyw6mwey3 = 0;
$m4is_k7p8pmxsbkqrje3y20 = 'ContactGroupCategory';

$m4is_csnk3yn47 = self::$m4is_mk7mf5ey2jajtzqyk0;
$m4is_j34bmw9dcjexfj1qpz = [
'CategoryName' => '%'
];
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',

'CategoryName'
];
$m4is_tbdh9qb6r6z = self::$m4is_wsme5a297xh0v6d5y->dsQueryOrderBy( $m4is_k7p8pmxsbkqrje3y20, $m4is_rkmcn1zd3r3k149h20vfr8z,
 $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', true );
if ( is_string( $m4is_tbdh9qb6r6z ) ) {
error_log( 'Memberium: [error] Tag Category Sync API Error - ' . $m4is_tbdh9qb6r6z );

}
if ( is_array( $m4is_tbdh9qb6r6z ) ) {
$m4is_fycpkje9sqts1230ewq = [];
if ( is_array( $m4is_tbdh9qb6r6z ) && ! empty( $m4is_tbdh9qb6r6z ) ) {
foreach ( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_fycpkje9sqts1230ewq[] = $wpdb->prepare( "(%d, %s, %s)",
 intval($m4is_bamv772v['Id']), self::$m4is_v4beyw7zqhr3, $m4is_bamv772v['CategoryName'] );
$m4is_s25y1e2cxa .= $m4is_bamv772v['Id'] . ',';

}
}
if ( ! empty( $m4is_fycpkje9sqts1230ewq ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO {$m4is_csnk3yn47} (id, appname, name) VALUES " . implode( ', ',
 $m4is_fycpkje9sqts1230ewq) . " ON DUPLICATE KEY UPDATE id=VALUES(id), appname=VALUES(appname), name=VALUES(name);";
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);

}
if (! empty( $m4is_s25y1e2cxa ) ) {
$m4is_s25y1e2cxa = trim( $m4is_s25y1e2cxa, ',' );
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM {$m4is_csnk3yn47} WHERE `appname` = %s AND `id` NOT IN ({$m4is_s25y1e2cxa}) ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_v4beyw7zqhr3 );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

}
set_transient( 'memberium_tagcategories_updated', time() );
}
$m4is_jrqdhydea8tfkwz4n4g07t6ee['tagcategories'] = time();
update_option( 'memberium_tables_updated',
 $m4is_jrqdhydea8tfkwz4n4g07t6ee, false );
return $m4is_kyw6mwey3;
}

public static function m4is_7xzfx9wekf0sbbeyvb8e( string $m4is_9n01hkp9mdr ) : int {
$m4is_9n01hkp9mdr = trim( $m4is_9n01hkp9mdr );

if ( empty( $m4is_9n01hkp9mdr ) ) {
return 0;
}
if ( self::m4is_ppq5tw2raweee2xm059( $m4is_9n01hkp9mdr ) ) {
return 0;
}
$m4is_bamv772v = [
'CategoryName' =>
 $m4is_9n01hkp9mdr
];
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) m4is_xm67qjyegqdeb9wqcm::m4is_pqqt3t5np2bwsv9022ghw8hcxr5kj( 'ContactGroupCategory',
 $m4is_bamv772v );
self::m4is_erjfehtz389a6pbsrw();
return $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;
}
}