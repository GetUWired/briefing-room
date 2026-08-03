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

final class m4is_w3pp5rsxdc03bns3 {
private static $m4is_132xe588j;
private static $m4is_v4beyw7zqhr3;
private static $m4is_wsme5a297xh0v6d5y;

private static $m4is_ac9teep56p;
private static $m4is_csnk3yn47;

static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();
self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );

self::$m4is_ac9teep56p = 1000;
self::$m4is_csnk3yn47 = 'memberium_actionsets';
}
private function __construct() {

}





public static function m4is_rnc8btxy6negjq25() : string {
return self::$m4is_csnk3yn47;

}
public static function m4is_hhyvbjw8v2g1c10jddw0ys() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_rnc8btxy6negjq25();

$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(11) NOT NULL, \n" .
"appname varchar(32) NOT NULL, \n" .
"name varchar(64) NOT NULL, \n" .
"KEY appname (appname), \n" .
"KEY id (id), \n" .
"PRIMARY KEY  (appname,id) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}




public static function m4is_fsammgw6kagh() : int {
global $wpdb;

static $m4is_7g9y793jjckyb;
if ( isset( $m4is_7g9y793jjckyb ) ) {
return $m4is_7g9y793jjckyb;
}
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT count(`id`) from %i WHERE `appname` = %s",
 self::m4is_rnc8btxy6negjq25(), self::$m4is_v4beyw7zqhr3 );
$m4is_7g9y793jjckyb = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

return $m4is_7g9y793jjckyb;
}

public static function m4is_59edrhs7e6mck9vqc1thacxeypy42vqm() : array {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `id`, `name` FROM %i WHERE `appname` = %s AND `name` > '' ORDER BY `name` ASC",
 self::m4is_rnc8btxy6negjq25(), self::$m4is_v4beyw7zqhr3 );
$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );

return $m4is_tbdh9qb6r6z;
}

public static function m4is_jzv3mdxqzxth481vapvxqkn5k8h() : string {
static $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p;

if ( isset( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p ) ) {
return $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p;
}
$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = self::m4is_59edrhs7e6mck9vqc1thacxeypy42vqm();

foreach ( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p as $m4is_j8j55t8dz79m7 => $m4is_bamv772v ) {
$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p[$m4is_j8j55t8dz79m7]['text'] = $m4is_bamv772v['name'];

unset( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p[$m4is_j8j55t8dz79m7]['name'] );
}
$m4is_cpqhe2hses9gee0sghk6tzr0a = [
'id' => 0,
'text' =>
 '(No Action)'
];
$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = array_merge( [ $m4is_cpqhe2hses9gee0sghk6tzr0a ], $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p );

$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = json_encode( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p );
return $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p;

}

public static function m4is_gtce9f2cwfsscrw8tk81y5m() : array {
$m4is_tbdh9qb6r6z = self::m4is_59edrhs7e6mck9vqc1thacxeypy42vqm();

$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = [];
foreach ( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_bamv772v['id'];

$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_bamv772v['name'];
}
return $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p;

}

public static function m4is_07fbvb4g75( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, int $m4is_21cxfvnv9x394r98y6nareq1g1, bool $m4is_h1hgagd3k3hzgj8vjv01r3de57y = false ) {
$m4is_hartbe843crydzh = self::$m4is_wsme5a297xh0v6d5y->runAS( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_21cxfvnv9x394r98y6nareq1g1 );
if ( $m4is_h1hgagd3k3hzgj8vjv01r3de57y ) {
self::$m4is_132xe588j->m4is_km2vptq0bwg( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
return $m4is_hartbe843crydzh;
}
private static function m4is_rwfq6cqcg0kn7e2gg83qdvkf() : array {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `id` FROM %i WHERE `appname` = %s",
 self::m4is_rnc8btxy6negjq25(), self::$m4is_v4beyw7zqhr3 );
$m4is_934a95jn = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
return $m4is_934a95jn;

}

static function m4is_7h358pwxvm3t8() {
global $wpdb;
$m4is_jrqdhydea8tfkwz4n4g07t6ee = get_option( 'memberium_tables_updated', [] );

$m4is_jrqdhydea8tfkwz4n4g07t6ee['actionsets'] = isset( $m4is_jrqdhydea8tfkwz4n4g07t6ee['actionsets'] ) ? $m4is_jrqdhydea8tfkwz4n4g07t6ee['actionsets'] : 0;

$m4is_ax7f8babctvmfvx1ct = self::m4is_rwfq6cqcg0kn7e2gg83qdvkf();
$m4is_k7p8pmxsbkqrje3y20 = 'ActionSequence';
$m4is_ek8adjz9yz7wvga34bby56 = 0;

$m4is_eepkb4x5k = 'Id';
$m4is_e4c15spmbs53rwm0c = '%';
$m4is_csnk3yn47 = self::m4is_rnc8btxy6negjq25();
$m4is_kyw6mwey3 = 0;
$m4is_ey8ygvcc7qasvcz6rpv = [];

$m4is_jp3w20mar1dt8qfh = false;
$m4is_6g2gajt5zs = 0;
$m4is_j34bmw9dcjexfj1qpz = [
'Id' => '%',
'TemplateName' => '%',

];
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',

'TemplateName',
'VisibleToTheseUsers'
];

do {
$m4is_tbdh9qb6r6z = self::$m4is_wsme5a297xh0v6d5y->dsQuery( $m4is_k7p8pmxsbkqrje3y20,
 self::$m4is_ac9teep56p, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', true );
if ( is_string( $m4is_tbdh9qb6r6z ) ) {
error_log( 'Memberium: [error] Actionset Sync API Error - ' . $m4is_tbdh9qb6r6z );

$m4is_jp3w20mar1dt8qfh = true;
break;
}
$m4is_cmg1a8e2pyr8pwdwwya = is_array( $m4is_tbdh9qb6r6z ) ? count( $m4is_tbdh9qb6r6z ) : 0;

if ( $m4is_cmg1a8e2pyr8pwdwwya) {
$m4is_cdwvby01kz27tm5gp0g8n = reset( $m4is_tbdh9qb6r6z )['Id'];
$m4is_6g2gajt5zs = end( $m4is_tbdh9qb6r6z )['Id'];

$m4is_fycpkje9sqts1230ewq = [];
$m4is_19x1c17et728k945 = [];
foreach ($m4is_tbdh9qb6r6z as $k => $m4is_bamv772v) {
$m4is_8pt5h8h13kqkt4bx21d8x6h4cbn8h = substr( $m4is_bamv772v['TemplateName'] ?? '',
 0, 63 );
$m4is_cddz42dndq0yjaqpa0 = intval( $m4is_bamv772v['Id'] ?? 0 );
$m4is_hce1y1a4qd65zhnwsj = substr( $m4is_8pt5h8h13kqkt4bx21d8x6h4cbn8h,
 0, 63 );
$m4is_fycpkje9sqts1230ewq[] = $wpdb->prepare(" ( %d, %s, %s ) ", $m4is_cddz42dndq0yjaqpa0, self::$m4is_v4beyw7zqhr3, $m4is_hce1y1a4qd65zhnwsj );

$m4is_19x1c17et728k945[] = $m4is_bamv772v['Id'];
$m4is_ey8ygvcc7qasvcz6rpv[] = $m4is_bamv772v['Id'];
}
if ( ! empty( $m4is_fycpkje9sqts1230ewq ) ) {
$m4is_cegjvya4jj68mdszk = implode( ', ',
 $m4is_fycpkje9sqts1230ewq );
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "INSERT INTO %i (id, appname, name) VALUES {$m4is_cegjvya4jj68mdszk} ON DUPLICATE KEY UPDATE id=VALUES(id), appname=VALUES(appname), name=VALUES(name)",
 self::m4is_rnc8btxy6negjq25() );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
}
$m4is_ek8adjz9yz7wvga34bby56++;
$m4is_kyw6mwey3 = $m4is_kyw6mwey3 + $m4is_cmg1a8e2pyr8pwdwwya;

}
while ( $m4is_cmg1a8e2pyr8pwdwwya == self::$m4is_ac9teep56p );
$m4is_v362e2msbbp8bz1ety9jge25fxeeqqa = array_diff( $m4is_ax7f8babctvmfvx1ct,
 $m4is_ey8ygvcc7qasvcz6rpv );
if ( $m4is_kyw6mwey3 > 0 && ! empty( $m4is_v362e2msbbp8bz1ety9jge25fxeeqqa ) ) {
$m4is_tz7kjbh9vh78cd6yw4q = implode( ',',
 $m4is_v362e2msbbp8bz1ety9jge25fxeeqqa );
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `appname` = %s AND `id` IN ( {$m4is_tz7kjbh9vh78cd6yw4q} )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_rnc8btxy6negjq25(), self::$m4is_v4beyw7zqhr3 );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
$m4is_jrqdhydea8tfkwz4n4g07t6ee['actionsets'] = time();
update_option( 'memberium_tables_updated',
 $m4is_jrqdhydea8tfkwz4n4g07t6ee, false );
wp_cache_delete( 'actionsets', 'memberium2/keap' );
return $m4is_kyw6mwey3;
}

}
