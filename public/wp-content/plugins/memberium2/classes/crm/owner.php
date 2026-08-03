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


final class m4is_9kyahnxyzzazbe0qnby5s1qsx {
private static $m4is_132xe588j;
private static $m4is_v4beyw7zqhr3;
private static $m4is_wsme5a297xh0v6d5y;

private static $m4is_k7p8pmxsbkqrje3y20;
private static $m4is_ak30nyyk0g6ax1qeac6fy38tk7;
static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64(): void {
global $wpdb;

self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );

self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();
self::$m4is_k7p8pmxsbkqrje3y20 = $wpdb->prefix . 'memberium_owners';

self::$m4is_ak30nyyk0g6ax1qeac6fy38tk7 = 1000;
}



static function m4is_dbnzkwz1anz1kmaah4hs8fbt() : string {
return self::$m4is_k7p8pmxsbkqrje3y20;

}
static function m4is_yff9250h34wb() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::$m4is_k7p8pmxsbkqrje3y20;

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



public static function m4is_m9ptbksxgn1dpy4ep0mnbgy1enkw5( int $m4is_z46a6mm75fsc,
 bool $m4is_59hdvf05xsxzhb8556d18jz = false ) : array {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `fieldname`, `value` FROM %i WHERE `appname` = %s AND `id` = %d",
 self::$m4is_k7p8pmxsbkqrje3y20, self::$m4is_v4beyw7zqhr3, $m4is_z46a6mm75fsc );
$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7,
 ARRAY_A );
$m4is_04ya4eddwe9sdc = m4is_xm67qjyegqdeb9wqcm::m4is_trk7gf2qcbqyzy0xb8gsrsfbgypkc( $m4is_tbdh9qb6r6z );
if ( $m4is_59hdvf05xsxzhb8556d18jz ) {
$m4is_04ya4eddwe9sdc = array_change_key_case( $m4is_04ya4eddwe9sdc,
 CASE_LOWER );
}
return $m4is_04ya4eddwe9sdc;
}
public static function m4is_csxgnnnh25zm78( array $m4is_04ya4eddwe9sdc ) : bool {
global $wpdb;

$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_04ya4eddwe9sdc['Id'];
$m4is_j5kd5andr815cy6wgaxn7e = [];
foreach ( $m4is_04ya4eddwe9sdc as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp ) {
$m4is_j5kd5andr815cy6wgaxn7e[] = $wpdb->prepare( '(%d, %s, %s, %s)', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 self::$m4is_v4beyw7zqhr3, $m4is_bqhtspcavhb01spmfd3x, $m4is_29gzevpx8rbkp );
}
if ( empty( $m4is_j5kd5andr815cy6wgaxn7e ) ) {
return false;

}
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO " . self::$m4is_k7p8pmxsbkqrje3y20 . " ( `id`, `appname`, `fieldname`, `value` ) VALUES " . implode( ', ',
 $m4is_j5kd5andr815cy6wgaxn7e ) . " ON DUPLICATE KEY UPDATE `value` = VALUES(`value`)";
return $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 ) !== false;

}

public static function m4is_ya6dm679h47p23g73pk0() {
$m4is_d9p9xbzxwta76zezp7trk = self::m4is_hef0gwybg8();
foreach ($m4is_d9p9xbzxwta76zezp7trk as $m4is_04ya4eddwe9sdc ) {
self::m4is_csxgnnnh25zm78( $m4is_04ya4eddwe9sdc );

}
}




public static function m4is_hef0gwybg8() : array {
$m4is_k7p8pmxsbkqrje3y20 = 'User';
$m4is_d9p9xbzxwta76zezp7trk = [];
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'User',
 false );
$m4is_j34bmw9dcjexfj1qpz = [
'Id' => '%'
];
$m4is_2eg5afjxq8 = self::$m4is_wsme5a297xh0v6d5y->dsQuery( 'User', self::$m4is_ak30nyyk0g6ax1qeac6fy38tk7,
 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
if ( is_string( $m4is_2eg5afjxq8 ) ) {
error_log( 'Memberium: [error] Keap User Sync API Error - ' . $m4is_2eg5afjxq8 );

return [];
}
$m4is_2eg5afjxq8 = is_array( $m4is_2eg5afjxq8 ) ? $m4is_2eg5afjxq8 : [];
return $m4is_2eg5afjxq8;
}
}
