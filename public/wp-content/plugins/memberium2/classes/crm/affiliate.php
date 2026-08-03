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

m4is_amz58dmg8j7e898bj8r8b1::m4is_z6c3r724qhd();
final class m4is_amz58dmg8j7e898bj8r8b1 {
static private $m4is_wvd37182eskd91fja3;

static private $m4is_cf108hdy25kza38h7mz;
static private $m4is_132xe588j;
static private $m4is_v4beyw7zqhr3;
static private $m4is_wsme5a297xh0v6d5y;

static private $m4is_j2eev5mw;
static private $m4is_t8vjc2ec06gfv1gfwtfq5ch3;

static function m4is_z6c3r724qhd() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();

self::$m4is_wvd37182eskd91fja3 = 'memberium_affiliates';
self::$m4is_cf108hdy25kza38h7mz = 'memberium_affiliates_totals';
self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3 = self::$m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->m4is_dzjdf8h0p8gzs37xpyhh4krbgavss4();

}




static function m4is_rr7ynbdyf6mev98x20sv1n1d0kkxt() : string {
return self::$m4is_wvd37182eskd91fja3;
}
static function m4is_yghe64gqr11f4qfxgc40t9k23yfmtjwh() : string {
return self::$m4is_cf108hdy25kza38h7mz;

}
static function m4is_hgn6bcvvpdh30() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_rr7ynbdyf6mev98x20sv1n1d0kkxt();

$m4is_5rbenkpt1v7xby2cknbs7 = "CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(20) NOT NULL, \n" .
"appname varchar(32) NOT NULL, \n" .
"fieldname varchar(64) NOT NULL DEFAULT '', \n" .
"value longtext, \n" .
"KEY id (id), \n" .
"KEY appname (appname), \n" .
"KEY fieldname (fieldname), \n" .
"KEY value (value(64) ), \n" .
"PRIMARY KEY  (id,appname,fieldname) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}
static function m4is_yzsnkrbhcdp02zhc4rvts3gk0gnnyk() : array {
global $wpdb;

$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_yghe64gqr11f4qfxgc40t9k23yfmtjwh();
$m4is_5rbenkpt1v7xby2cknbs7 = "CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(20) NOT NULL, \n" .
"appname varchar(32) NOT NULL, \n" .
"time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, \n" .
"amount_earned double NOT NULL DEFAULT 0, \n" .
"payments double NOT NULL DEFAULT 0, \n" .
"clawbacks double NOT NULL DEFAULT 0, \n" .
"running_balance double NOT NULL DEFAULT 0, \n" .
"KEY id (id), \n" .
"KEY appname (appname), \n" .
"PRIMARY KEY  (id,appname) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}




static function m4is_ntqv1h4y5na() {

self::$m4is_j2eev5mw = is_null( self::$m4is_j2eev5mw )


? self::$m4is_j2eev5mw = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'max_affiliate_age', 0 )

: self::$m4is_j2eev5mw;

return (int) self::$m4is_j2eev5mw;
}

static function m4is_ywpvbq4c429ce3915axvx70vhs( int $m4is_5p1kv9r3f9ermvn3k ) {

$m4is_5p1kv9r3f9ermvn3k = $m4is_5p1kv9r3f9ermvn3k < 0 ? 0 : $m4is_5p1kv9r3f9ermvn3k;


self::$m4is_j2eev5mw = $m4is_5p1kv9r3f9ermvn3k;

return $m4is_5p1kv9r3f9ermvn3k;
}

static function m4is_sk3aqw0kgpr5n3wwe9v61gzsh7msm2() {

static $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k;


if ( ! isset( $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k ) ) {

$m4is_mqngqwpvn9gebshs3qkf54653qfdh9k = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->dsGetSetting( 'Affiliate',
 'chooseaffiliate' );
}

return $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k;
}

static function m4is_6n074mvsq2axr3k7sjc6y4() : int {

global $wpdb;



$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT COUNT(*) FROM `" . self::$m4is_wvd37182eskd91fja3 . "` WHERE `appname` = %s AND `fieldname` = 'Status' AND `value` = 1;";


$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_v4beyw7zqhr3 );

return (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

}

static function m4is_mn2eebt9a0kc2mtd8( int $m4is_ak30nyyk0g6ax1qeac6fy38tk7 = 0, int $m4is_ek8adjz9yz7wvga34bby56 = 0, string $m4is_yrsthh0s4s62mfk9 = '' ) : array {
global $wpdb;
 

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT distinct `id` FROM `" . self::$m4is_wvd37182eskd91fja3 . "` WHERE `appname` = %s AND `fieldname` = 'Status' ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_v4beyw7zqhr3 ); 

if ( ! empty( $m4is_yrsthh0s4s62mfk9 ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 .= " AND `value` = {$m4is_yrsthh0s4s62mfk9} ";
 
}

$m4is_5rbenkpt1v7xby2cknbs7 .= "ORDER BY `id` ASC "; 

if ( $m4is_ak30nyyk0g6ax1qeac6fy38tk7 > 0 ) {
$m4is_5rbenkpt1v7xby2cknbs7 .= " LIMIT {$m4is_ak30nyyk0g6ax1qeac6fy38tk7} OFFSET " . ( $m4is_ek8adjz9yz7wvga34bby56 * $m4is_ak30nyyk0g6ax1qeac6fy38tk7 );
 
}

$m4is_934a95jn = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7, 0 ); 

return $m4is_934a95jn; 
}

static function m4is_vs9m42n6dh5q7( int $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 ) : array {
global $wpdb;

$m4is_j8j55t8dz79m7 = 'memberium/sync/running_totals/last_update';
$m4is_dapdcej2nee7kcp6t1jh5gqmcvycqg = time() - (int) get_option( $m4is_j8j55t8dz79m7,
 0 );
$m4is_5p1kv9r3f9ermvn3k = HOUR_IN_SECONDS;
if ( $m4is_dapdcej2nee7kcp6t1jh5gqmcvycqg > $m4is_5p1kv9r3f9ermvn3k ) {
self::m4is_8ng45gp4ynvwkpcawtjd();

}
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `amount_earned`, `payments`, `clawbacks`, `running_balance`, `time` FROM %i WHERE `appname` = %s AND `id` = %d";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_yghe64gqr11f4qfxgc40t9k23yfmtjwh(), self::$m4is_v4beyw7zqhr3,
 $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 );
$m4is_hartbe843crydzh = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A);
$m4is_hartbe843crydzh = is_array( $m4is_hartbe843crydzh[0] ) ? $m4is_hartbe843crydzh[0] : [];

$m4is_qm78qahrsjrp9v9vf2phj31x = empty( $m4is_hartbe843crydzh['time'] ) ? 0 : strtotime( $m4is_hartbe843crydzh['time'] );

return $m4is_hartbe843crydzh;

}

static function m4is_8ng45gp4ynvwkpcawtjd() {
global $wpdb;
if ( ! self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'sync_affiliate', 0 ) ) {
return;
}
$m4is_j8j55t8dz79m7 = 'memberium/sync/running_totals/updated';
$m4is_by61g0fcs4882hagy80j = (int) get_transient( $m4is_j8j55t8dz79m7 );

if ( ( time() - $m4is_by61g0fcs4882hagy80j ) < 43200 ) {
return;
}
$m4is_k7p8pmxsbkqrje3y20 = self::$m4is_wvd37182eskd91fja3;
$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3;

$m4is_ak30nyyk0g6ax1qeac6fy38tk7 = 500;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
do {

$m4is_m4vez4pehykpde = self::m4is_mn2eebt9a0kc2mtd8( $m4is_ak30nyyk0g6ax1qeac6fy38tk7,
 $m4is_ek8adjz9yz7wvga34bby56, 1 );
if ( ! empty( $m4is_m4vez4pehykpde ) ) {
$m4is_9hj1j5q11d8rje19r0v8kd2 = self::$m4is_wsme5a297xh0v6d5y->affRunningTotals( $m4is_m4vez4pehykpde );

if (! empty($m4is_9hj1j5q11d8rje19r0v8kd2) && is_array($m4is_9hj1j5q11d8rje19r0v8kd2)) {

foreach($m4is_9hj1j5q11d8rje19r0v8kd2 as $m4is_xgwhm7wbhkdpd9ekq6z89bb) {
if (is_array($m4is_xgwhm7wbhkdpd9ekq6z89bb)) {

$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO %i (`id`, `appname`, `amount_earned`, `payments`, `clawbacks`, `running_balance`) ";

$m4is_5rbenkpt1v7xby2cknbs7 .= "VALUES ( %f, %s, %f, %f, %f, %f ) ";
$m4is_5rbenkpt1v7xby2cknbs7 .= "ON DUPLICATE KEY UPDATE `id` = %f, `appname` = %s, `amount_earned` = %f, `payments` = %f, `clawbacks` = %f, `running_balance` = %f;";


$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
self::m4is_yghe64gqr11f4qfxgc40t9k23yfmtjwh(),
$m4is_xgwhm7wbhkdpd9ekq6z89bb['AffiliateId'],

self::$m4is_v4beyw7zqhr3,
$m4is_xgwhm7wbhkdpd9ekq6z89bb['AmountEarned'],
$m4is_xgwhm7wbhkdpd9ekq6z89bb['Payments'],
$m4is_xgwhm7wbhkdpd9ekq6z89bb['Clawbacks'],

$m4is_xgwhm7wbhkdpd9ekq6z89bb['RunningBalance'],
$m4is_xgwhm7wbhkdpd9ekq6z89bb['AffiliateId'],
self::$m4is_v4beyw7zqhr3,
$m4is_xgwhm7wbhkdpd9ekq6z89bb['AmountEarned'],

$m4is_xgwhm7wbhkdpd9ekq6z89bb['Payments'],
$m4is_xgwhm7wbhkdpd9ekq6z89bb['Clawbacks'],
$m4is_xgwhm7wbhkdpd9ekq6z89bb['RunningBalance']
);


$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}
}
}

$m4is_ek8adjz9yz7wvga34bby56++;
}
} while ( count( $m4is_m4vez4pehykpde ) == $m4is_ak30nyyk0g6ax1qeac6fy38tk7 );
 
set_transient( $m4is_j8j55t8dz79m7, time(), 3600 );
}

static function m4is_f3vmc1zj78h8wfeh224g( array $m4is_xbr1ae5hmx11ees, array $m4is_hsp30vfv = [] ) {
global $wpdb;

if ( empty( $m4is_xbr1ae5hmx11ees['Id'] ) ) {
return [];
}

$m4is_k7p8pmxsbkqrje3y20 = 'Affiliate';
$m4is_csnk3yn47 = self::$m4is_wvd37182eskd91fja3;

$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$m4is_xbr1ae5hmx11ees = self::$m4is_132xe588j->m4is_b8qskfdkeh13w255r( $m4is_xbr1ae5hmx11ees );


$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = (int) $m4is_xbr1ae5hmx11ees['Id'];
$m4is_xbr1ae5hmx11ees['!LastUpdated'] = time();

$m4is_hsp30vfv = empty( $m4is_hsp30vfv ) ? self::m4is_3vsan6nwgjm2t46p5gd4bearpn( $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 ) : $m4is_hsp30vfv;


$m4is_p61dzq00qhk9vnp8na1hbpd = self::$m4is_132xe588j->m4is_zzgj0be3ndn9hgp512rff7kzxa2( $m4is_hsp30vfv, $m4is_xbr1ae5hmx11ees );

$m4is_gxcpr2msbncq4 = self::$m4is_132xe588j->m4is_b6mct5xjjy1( $m4is_hsp30vfv, $m4is_xbr1ae5hmx11ees );
$m4is_98v896rgf1y2kzyx38 = self::$m4is_132xe588j->m4is_8gbnhdkvkhrpxybgg9bsevbqyf80m( $m4is_hsp30vfv,
 $m4is_xbr1ae5hmx11ees );
$m4is_ja8naqje4 = self::$m4is_132xe588j->m4is_ebda5kept1b7z3s06fr1hwqn1fheww( $m4is_p61dzq00qhk9vnp8na1hbpd,
 $m4is_98v896rgf1y2kzyx38 );

self::m4is_f0qc9csjqzxvk2sy8ezxg5yyp( $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9, $m4is_98v896rgf1y2kzyx38 );


if (! empty( $m4is_p61dzq00qhk9vnp8na1hbpd ) ) {
foreach ( $m4is_p61dzq00qhk9vnp8na1hbpd as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {

$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE `" . self::$m4is_wvd37182eskd91fja3 . "` SET `value` = %s WHERE `id` = %d AND `fieldname` = %s AND `appname` = %s";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9,
 $m4is_j8j55t8dz79m7, self::$m4is_v4beyw7zqhr3 );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
}

if ( ! empty( $m4is_gxcpr2msbncq4 ) ) {
$m4is_fycpkje9sqts1230ewq = [];

foreach ( $m4is_gxcpr2msbncq4 as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {

$m4is_fycpkje9sqts1230ewq[] = $wpdb->prepare( ' (%d, %s, %s, %s) ',
 $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9, self::$m4is_v4beyw7zqhr3, $m4is_j8j55t8dz79m7, $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
if ( ! empty( $m4is_fycpkje9sqts1230ewq ) ) {

$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO `" . self::$m4is_wvd37182eskd91fja3 . "` (`id`, `appname`, `fieldname`, `value`) VALUES " . implode( ',',
 $m4is_fycpkje9sqts1230ewq );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
}


return $m4is_xbr1ae5hmx11ees;
}

static function m4is_mtd57wxcs1eqm26r0bw14f7dagje() {
global $wpdb;


$m4is_rkmcn1zd3r3k149h20vfr8z = 1000; 
$m4is_k7p8pmxsbkqrje3y20 = 'Affiliate'; 
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( $m4is_k7p8pmxsbkqrje3y20,
 true ); 
$m4is_qs1t1355f7thkczxsbcmh659ebz = 'memberium/batchsync/affiliates/page'; 
$m4is_1d8y478mmgerj = 'memberium/batchsync/affiliates/timestamp';
 
$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3; 
$m4is_j34bmw9dcjexfj1qpz = ['Id' => '%']; 
$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();
 
$m4is_ek8adjz9yz7wvga34bby56 = 0; 
$m4is_19x1c17et728k945 = []; 
do {

$m4is_xt22w6z8rm06wx6 = $m4is_wsme5a297xh0v6d5y->dsQueryOrderBy( $m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', true );

$m4is_7g9y793jjckyb = is_array( $m4is_xt22w6z8rm06wx6 ) ? count( $m4is_xt22w6z8rm06wx6 ) : 0;
if ( ! is_array( $m4is_xt22w6z8rm06wx6 ) ) {
error_log( 'Memberium: [error] Batch Sync Affiliates API Error - ' . $m4is_xt22w6z8rm06wx6 );

break;
}
if ( is_array( $m4is_xt22w6z8rm06wx6 ) ) {

foreach($m4is_xt22w6z8rm06wx6 as $m4is_f5pq560taxn4v67xk7v982nwn0) {
$m4is_vgk6mp1a6dfx3jegwq8p6b42[$m4is_f5pq560taxn4v67xk7v982nwn0['Id']] = $m4is_f5pq560taxn4v67xk7v982nwn0;

}
unset($m4is_xt22w6z8rm06wx6);

$m4is_m4vez4pehykpde = [];
foreach($m4is_vgk6mp1a6dfx3jegwq8p6b42 as $m4is_xbr1ae5hmx11ees) {
$m4is_m4vez4pehykpde[] = $m4is_xbr1ae5hmx11ees['Id'];

}

$m4is_9x4r1w8t5xdytxtmyyq95xf5r3xn4d49 = implode(',', $m4is_m4vez4pehykpde);
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id`, `fieldname`, `value` FROM `" . self::$m4is_wvd37182eskd91fja3 . "` WHERE `appname` = '{$m4is_v4beyw7zqhr3}' AND `id` IN ({$m4is_9x4r1w8t5xdytxtmyyq95xf5r3xn4d49}) AND `fieldname` <> '!LastUpdated';";

$m4is_xt22w6z8rm06wx6 = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A);
$m4is_701qkbprr6 = [];

if (is_array($m4is_xt22w6z8rm06wx6)) {
foreach($m4is_xt22w6z8rm06wx6 as $m4is_j8j55t8dz79m7 =>
 $m4is_f5pq560taxn4v67xk7v982nwn0) {
$m4is_701qkbprr6[$m4is_f5pq560taxn4v67xk7v982nwn0['id']][$m4is_f5pq560taxn4v67xk7v982nwn0['fieldname']] = $m4is_f5pq560taxn4v67xk7v982nwn0['value'];

}
}
unset($m4is_xt22w6z8rm06wx6);

foreach( $m4is_vgk6mp1a6dfx3jegwq8p6b42 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_xbr1ae5hmx11ees ) {
if ( ! array_key_exists( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_701qkbprr6 ) ) {
self::m4is_f3vmc1zj78h8wfeh224g( $m4is_xbr1ae5hmx11ees );
unset( $m4is_vgk6mp1a6dfx3jegwq8p6b42[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] );

}
}

$m4is_0q57s54p8pmsar = [];
$m4is_fycpkje9sqts1230ewq = [];
$m4is_934a95jn = [];
$m4is_qm78qahrsjrp9v9vf2phj31x = time();

foreach($m4is_vgk6mp1a6dfx3jegwq8p6b42 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_xbr1ae5hmx11ees) {
$m4is_6zmaqhn88e8b = array_diff($m4is_xbr1ae5hmx11ees, $m4is_701qkbprr6[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]);

if (! empty($m4is_6zmaqhn88e8b)) {
$m4is_0q57s54p8pmsar[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_6zmaqhn88e8b;
$m4is_934a95jn[] = $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;

}
}

foreach($m4is_0q57s54p8pmsar as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_bamv772v) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = key($m4is_bamv772v);

$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_bamv772v[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6];
$m4is_fycpkje9sqts1230ewq[] = $wpdb->prepare('(%d, %s, %s, %s)',
 $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_v4beyw7zqhr3, $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, $m4is_rqxytszfq5v6syth1csqqxvy5);
}

foreach($m4is_934a95jn as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh) {
$m4is_fycpkje9sqts1230ewq[] = $wpdb->prepare('(%d, %s, %s, %s)',
 $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_v4beyw7zqhr3, '!LastUpdated', $m4is_qm78qahrsjrp9v9vf2phj31x);
}

if (! empty($m4is_fycpkje9sqts1230ewq)) {
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO `" . self::$m4is_wvd37182eskd91fja3 . "` (`id`, `appname`, `fieldname`, `value`) VALUES " . implode( ',',
 $m4is_fycpkje9sqts1230ewq ) . " ON DUPLICATE KEY UPDATE `id`=VALUES(`id`), `appname`=VALUES(`appname`), `fieldname`=VALUES(`fieldname`), `value`=VALUES(`value`);";

$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}

$m4is_ek8adjz9yz7wvga34bby56++;
}

usleep( 250000 );
} while ($m4is_7g9y793jjckyb == $m4is_rkmcn1zd3r3k149h20vfr8z);
 
}

static function m4is_gd369qw27ejjewd18ymbp36( int $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) : array {
global $wpdb; 

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `fieldname`, `value` FROM `" . self::$m4is_wvd37182eskd91fja3 . "` WHERE `appname` = %s AND `id` = %d ";


$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_v4beyw7zqhr3, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh );


$m4is_vgk6mp1a6dfx3jegwq8p6b42 = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );

if ( empty( $m4is_vgk6mp1a6dfx3jegwq8p6b42 ) ) {

$m4is_xbr1ae5hmx11ees = self::m4is_zned8gqakjczr80rp48hz8fty385w( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh );


$m4is_xbr1ae5hmx11ees['!source'] = 'Remote';
}
else {

$m4is_xbr1ae5hmx11ees = [];

foreach ( $m4is_vgk6mp1a6dfx3jegwq8p6b42 as $m4is_bamv772v ) {

$m4is_xbr1ae5hmx11ees[$m4is_bamv772v['fieldname']] = $m4is_bamv772v['value'];

}

$m4is_xbr1ae5hmx11ees['!source'] = 'Local';
}

return $m4is_xbr1ae5hmx11ees;
}

static function m4is_3vsan6nwgjm2t46p5gd4bearpn( int $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 ) : array {

global $wpdb;

$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `fieldname`, `value` FROM `" . self::$m4is_wvd37182eskd91fja3 . "` WHERE `appname` = %s AND `id` = %d ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_v4beyw7zqhr3, $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 );


$m4is_vgk6mp1a6dfx3jegwq8p6b42 = (array) $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );

if ( ! empty( $m4is_vgk6mp1a6dfx3jegwq8p6b42 ) ) {
$m4is_vgk6mp1a6dfx3jegwq8p6b42 = self::$m4is_132xe588j->m4is_da2zqbyx62mn02mesb( $m4is_vgk6mp1a6dfx3jegwq8p6b42,
 'fieldname', 'value' );
$m4is_vgk6mp1a6dfx3jegwq8p6b42['!source'] = 'Local';
}

return $m4is_vgk6mp1a6dfx3jegwq8p6b42;
}

static function m4is_jqr2zptdexzejs6avs2cqg64( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : array {

global $wpdb;


$m4is_csnk3yn47 = self::$m4is_wvd37182eskd91fja3;
$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3;

$m4is_5rbenkpt1v7xby2cknbs7 = <<<SQLBLOCK

			SELECT
				`{$m4is_csnk3yn47}_2`.`fieldname`,
				`{$m4is_csnk3yn47}_2`.`value`
			FROM
				`{$m4is_csnk3yn47}`,
				`{$m4is_csnk3yn47}` AS `{$m4is_csnk3yn47}_2`
			WHERE   `{$m4is_csnk3yn47}`.`appname`  = %s
			AND     `{$m4is_csnk3yn47}`.`fieldname` = 'ContactId'
			AND     `{$m4is_csnk3yn47}`.`value`     = %d
			AND     `{$m4is_csnk3yn47}_2`.`id`      = {$m4is_csnk3yn47}.id
			AND     `{$m4is_csnk3yn47}_2`.`appname` = %s;
		SQLBLOCK;


$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_v4beyw7zqhr3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 self::$m4is_v4beyw7zqhr3 );

$m4is_xbr1ae5hmx11ees = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_N );

$m4is_xbr1ae5hmx11ees = self::$m4is_132xe588j->m4is_da2zqbyx62mn02mesb( $m4is_xbr1ae5hmx11ees,
 0, 1 );

$m4is_xbr1ae5hmx11ees = apply_filters('memberium/affiliate/load', $m4is_xbr1ae5hmx11ees );

return $m4is_xbr1ae5hmx11ees;

}

static function m4is_p03b0kyyq8xaeg6t( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : array {

$m4is_rkmcn1zd3r3k149h20vfr8z = 1;


$m4is_k7p8pmxsbkqrje3y20 = 'Affiliate';

$m4is_ek8adjz9yz7wvga34bby56 = 0;

$m4is_j34bmw9dcjexfj1qpz = [ 'ContactId' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ];


$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( $m4is_k7p8pmxsbkqrje3y20, true );

$m4is_xbr1ae5hmx11ees = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj( $m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', true );


if (! is_array( $m4is_xbr1ae5hmx11ees ) ) {

}

$m4is_xbr1ae5hmx11ees = isset( $m4is_xbr1ae5hmx11ees[0] ) ? $m4is_xbr1ae5hmx11ees[0] : [];


$m4is_xbr1ae5hmx11ees = is_array( $m4is_xbr1ae5hmx11ees ) ? self::$m4is_132xe588j->m4is_b8qskfdkeh13w255r( $m4is_xbr1ae5hmx11ees ) : $m4is_xbr1ae5hmx11ees;


return $m4is_xbr1ae5hmx11ees;
}

static function m4is_k7y6q1s9zwb1vfvqgg3hwtr11( int $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 ) : array {
$m4is_xbr1ae5hmx11ees = m4is_xm67qjyegqdeb9wqcm::m4is_vph6cx02rq( 'Affiliate',
 $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 );
return (array) $m4is_xbr1ae5hmx11ees;
}

static function m4is_nr5q1e4hyw0cdgw33cp7yn( int $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 ) {

global $wpdb;



$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `" . self::$m4is_wvd37182eskd91fja3 . "` WHERE `id` = %d AND `appname` = %s ";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9, self::$m4is_v4beyw7zqhr3 );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}

private static function m4is_f0qc9csjqzxvk2sy8ezxg5yyp( int $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9,
 array $m4is_7b2yfzk0054 ) {

if ( count( $m4is_7b2yfzk0054 ) ) {

global $wpdb;

$m4is_qt5fy700akk3n9pb4spc46vcsx = implode( "','",
 $m4is_7b2yfzk0054 );

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `". self::$m4is_wvd37182eskd91fja3 . "` WHERE `id` = %d AND `appname` = %s AND `fieldname` IN ( '{$m4is_qt5fy700akk3n9pb4spc46vcsx}' )";


$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9, self::$m4is_v4beyw7zqhr3 );


$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
}

static function m4is_zned8gqakjczr80rp48hz8fty385w( int $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 ) : array {

$m4is_kw193k52gqp8vsnss7sy = 'Affiliate';


$m4is_xbr1ae5hmx11ees = (array) m4is_xm67qjyegqdeb9wqcm::m4is_vph6cx02rq( $m4is_kw193k52gqp8vsnss7sy, $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 );


if ( is_array( $m4is_xbr1ae5hmx11ees ) && ! empty( $m4is_xbr1ae5hmx11ees ) ) {

self::m4is_f3vmc1zj78h8wfeh224g( $m4is_xbr1ae5hmx11ees );


return $m4is_xbr1ae5hmx11ees;
}

elseif ( m4is_xm67qjyegqdeb9wqcm::m4is_a4zvfxdh5w4hf8g1d( $m4is_xbr1ae5hmx11ees ) ) {

self::m4is_nr5q1e4hyw0cdgw33cp7yn( $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 );

}

else {

error_log('Memberium: [error]  Affiliate #' . $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 . ' - ' . $m4is_xbr1ae5hmx11ees);
}

return [];

}

static function m4is_syr6yfpj87( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : array {
$m4is_xbr1ae5hmx11ees = self::m4is_p03b0kyyq8xaeg6t( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( is_array( $m4is_xbr1ae5hmx11ees ) && ! empty( $m4is_xbr1ae5hmx11ees ) ) {
self::m4is_f3vmc1zj78h8wfeh224g( $m4is_xbr1ae5hmx11ees );

return $m4is_xbr1ae5hmx11ees;
}
elseif ( m4is_xm67qjyegqdeb9wqcm::m4is_a4zvfxdh5w4hf8g1d( $m4is_xbr1ae5hmx11ees ) ) {


error_log( sprintf( 'Memberium: [error] Affiliate for Contact # %d - %s deleted.',
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_xbr1ae5hmx11ees ) );
}

else {

error_log( sprintf( 'Memberium: [error] Affiliate for Contact ID # %d - %s',
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_xbr1ae5hmx11ees ) );
}

return [];
}

static function m4is_kxjxpjk9g6( int $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9,
 int $m4is_5p1kv9r3f9ermvn3k = -1 ) : bool {
global $wpdb;

$m4is_5p1kv9r3f9ermvn3k = $m4is_5p1kv9r3f9ermvn3k < 10 ? self::m4is_ntqv1h4y5na() : 10;


$m4is_x0vrpbk6861vmwx9maq08ra9 = true;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `value` as `age` FROM `" . self::$m4is_wvd37182eskd91fja3 . "` WHERE `appname` = %s AND `id` = %d AND `fieldname` = '!LastUpdated' ";


$m4is_dapdcej2nee7kcp6t1jh5gqmcvycqg = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_v4beyw7zqhr3, $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 );


return ( $m4is_dapdcej2nee7kcp6t1jh5gqmcvycqg + $m4is_5p1kv9r3f9ermvn3k ) > time();
}

static function m4is_qk9eqwy5wj( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : int {
global $wpdb;
 
static $m4is_eaf3hjskfx6b3a30wrj9g6hd2c = []; 
if ( array_key_exists( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_eaf3hjskfx6b3a30wrj9g6hd2c ) ) {
return $m4is_eaf3hjskfx6b3a30wrj9g6hd2c[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp];

}
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id` FROM %i WHERE `appname` = %s AND `fieldname` = 'ContactId' AND `value` = '%d'";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 self::m4is_rr7ynbdyf6mev98x20sv1n1d0kkxt(), self::$m4is_v4beyw7zqhr3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

if (! empty( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) ) {
$m4is_eaf3hjskfx6b3a30wrj9g6hd2c[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp] = $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;

}

if ( empty( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh )) {
error_log( sprintf( "Memberium: [info] No affiliate ID found for contact ID: %d",
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) );
}
return $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;
}




static function m4is_emjyh64vj5zgk0gea4gem3nmmx70() : void {
$m4is_xc0wh8hch3 = 'ignore_affiliate_fields';

$m4is_h7zwy5f0w3y9gx3wm = 'Affiliate';
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

}
