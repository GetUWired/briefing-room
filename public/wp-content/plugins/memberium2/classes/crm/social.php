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

m4is_j439z8p9rf94j2j2gmvmjwmkkk55t67::m4is_z6c3r724qhd();

final class m4is_j439z8p9rf94j2j2gmvmjwmkkk55t67 {
private static $m4is_132xe588j;

private static $m4is_v4beyw7zqhr3;
private static $m4is_kw193k52gqp8vsnss7sy;
private static $m4is_ak30nyyk0g6ax1qeac6fy38tk7;

public static function m4is_z6c3r724qhd() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
self::$m4is_kw193k52gqp8vsnss7sy = 'SocialAccount';

self::$m4is_ak30nyyk0g6ax1qeac6fy38tk7 = 1000;
}

private function __construct() {
}




public static function m4is_tz9gjkezq6zzg633tkq() : string {
global $wpdb;

return $wpdb->prefix . 'memberium_socialaccount';
}

public static function m4is_n1y1vyn3dd41cdwm() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();

$m4is_k7p8pmxsbkqrje3y20 = self::m4is_tz9gjkezq6zzg633tkq();
$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(20) NOT NULL, \n" .
"contactid int(20) NOT NULL, \n" .
"fieldname varchar(64) default '', \n" .
"fieldvalue varchar(20) default '', \n" .
"KEY id (id), \n" .
"KEY contactid (contactid), \n" .
"KEY fieldname (fieldname), \n" .
"PRIMARY KEY  (id,contactid,fieldname) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}




public static function m4is_3eywhrcdsfv8qthp( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 bool $m4is_59hdvf05xsxzhb8556d18jz = false ) : array {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `id`, `fieldname`, `fieldvalue` FROM %i WHERE `appname` = %s AND `contactid` = %d",
 self::m4is_tz9gjkezq6zzg633tkq(), self::$m4is_v4beyw7zqhr3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7,
 ARRAY_A );
$m4is_rr1ka92w7mhc6vd610sj2q80jaj12t = [];
foreach( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_bamv772v['id'];

$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_59hdvf05xsxzhb8556d18jz ? strtolower( $m4is_bamv772v['fieldname'] ) : $m4is_bamv772v['fieldname'];

$m4is_rr1ka92w7mhc6vd610sj2q80jaj12t[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh][$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = $m4is_bamv772v['fieldvalue'];

}
if ( $m4is_59hdvf05xsxzhb8556d18jz ) {
$m4is_rr1ka92w7mhc6vd610sj2q80jaj12t = array_change_key_case( $m4is_rr1ka92w7mhc6vd610sj2q80jaj12t,
 CASE_LOWER );
}
return $m4is_rr1ka92w7mhc6vd610sj2q80jaj12t;
}

public static function m4is_0ey8wg5fj4b5mda2zre12nj1aa049( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : array {
$m4is_ak30nyyk0g6ax1qeac6fy38tk7 = 1000;

$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp
];
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_rcwnyrjsh7eh89 = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2( self::$m4is_kw193k52gqp8vsnss7sy,
 $m4is_ak30nyyk0g6ax1qeac6fy38tk7, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz );
if ( ! is_array( $m4is_rcwnyrjsh7eh89 ) ) {
error_log( sprintf( "Memberium: [error] Failed to retrieve social accounts for contact '%d'.  Query returned '%s'",
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, (string) $m4is_rcwnyrjsh7eh89 ) );
}
$m4is_rcwnyrjsh7eh89 = is_array( $m4is_rcwnyrjsh7eh89 ) ? $m4is_rcwnyrjsh7eh89 : [];

return $m4is_rcwnyrjsh7eh89;
}

public static function m4is_zy3wqq36b64vypmyppza1c5hj( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : void {
$m4is_h520e3y8ab = self::m4is_0ey8wg5fj4b5mda2zre12nj1aa049( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( ! empty( $m4is_h520e3y8ab ) ) {
foreach ( $m4is_h520e3y8ab as $m4is_x40mc6rqn2239mbs5ctr ) {
self::m4is_bwat1a8cwbq56byag06aa38207w( $m4is_x40mc6rqn2239mbs5ctr );

}
}
}

public static function m4is_bwat1a8cwbq56byag06aa38207w( array $m4is_x40mc6rqn2239mbs5ctr ) : void {
global $wpdb;
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_x40mc6rqn2239mbs5ctr['Id'];

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $m4is_x40mc6rqn2239mbs5ctr['ContactId'];
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "DELETE FROM %i WHERE `id` = %d",
 self::m4is_tz9gjkezq6zzg633tkq(), $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
if ( empty( $m4is_x40mc6rqn2239mbs5ctr['AccountName'] ) ) {
return;

}
$m4is_j5kd5andr815cy6wgaxn7e = [];
foreach ( $m4is_x40mc6rqn2239mbs5ctr as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_j5kd5andr815cy6wgaxn7e[] = $wpdb->prepare( '(%d, %s, %d, %s, %s)',
 $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, self::$m4is_v4beyw7zqhr3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6,
 $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
$m4is_cegjvya4jj68mdszk = implode( ', ', $m4is_j5kd5andr815cy6wgaxn7e );
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "INSERT INTO %i ( `id`, `appname`, `contactid`, `fieldname`, `fieldvalue` ) VALUES {$m4is_cegjvya4jj68mdszk}",
 self::m4is_tz9gjkezq6zzg633tkq() );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}

public static function m4is_8tajbct3x1sjd7x0tqpnxnhhahpar2b9() : bool {
$m4is_ga4m5q55y33x6ext1s = 'memberium/keap/sync/social/highwatermark';

$m4is_hfk64wpnmxzg = get_option( $m4is_ga4m5q55y33x6ext1s, '20000101T01:01:01' );
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_j34bmw9dcjexfj1qpz = [
'AccountType' =>
 '%',
'LastUpdated' => "~>=~ {$m4is_hfk64wpnmxzg}"
];
$m4is_rcwnyrjsh7eh89 = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj( self::$m4is_kw193k52gqp8vsnss7sy,
 self::$m4is_ak30nyyk0g6ax1qeac6fy38tk7, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, [], 'LastUpdated', true );
if ( ! is_array( $m4is_rcwnyrjsh7eh89 ) ) {
error_log( sprintf( "Memberium: [error] Failed to sync updated social accounts.  Query returned '%s'",
 (string) $m4is_rcwnyrjsh7eh89 ) );
return false;
}
foreach ( $m4is_rcwnyrjsh7eh89 as $m4is_gt2eqyzr384zzrecjzx ) {
$m4is_hfk64wpnmxzg = $m4is_gt2eqyzr384zzrecjzx['LastUpdated'] > $m4is_hfk64wpnmxzg ? $m4is_gt2eqyzr384zzrecjzx['LastUpdated'] : $m4is_hfk64wpnmxzg;

self::m4is_bwat1a8cwbq56byag06aa38207w( $m4is_gt2eqyzr384zzrecjzx );
}
update_option( $m4is_ga4m5q55y33x6ext1s, $m4is_hfk64wpnmxzg,
 false );
return true;
}

public static function m4is_e9h3cs7etgmc8s4ayvjcefqaym( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : void {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "DELETE FROM %i WHERE `appname` = %s AND `contactid` = %d", self::m4is_tz9gjkezq6zzg633tkq(),
 self::$m4is_v4beyw7zqhr3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}




private static function m4is_pbe19yz151bg8q8ja24gxggtfmcmje( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 array $m4is_h520e3y8ab ) : void {
if ( empty( $m4is_h520e3y8ab ) ) {
m4is_j439z8p9rf94j2j2gmvmjwmkkk55t67::m4is_e9h3cs7etgmc8s4ayvjcefqaym( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

return;
}
}
}