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

final class m4is_c2ry5jv8yz446k40191 {
private static $m4is_132xe588j;
private static $m4is_peh3bgmj;
static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_peh3bgmj = 'memberium/log_count';
}




static function m4is_2j5zjm5s0() : string {
return defined( 'MEMBERIUM_DB_HTTPPOST' ) ? constant( 'MEMBERIUM_DB_HTTPPOST' ) : 'memberium_httppost';

}
static function m4is_sec419san() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_2j5zjm5s0();

$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(11) NOT NULL AUTO_INCREMENT, \n" .
"time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, \n" .
"appname varchar(16) NOT NULL, \n" .
"contactid int(11) NOT NULL, \n" .
"ipaddress varchar(45) NOT NULL, \n" .
"type varchar(16) NOT NULL, \n" .
"log longtext NOT NULL, \n" .
"KEY appname (appname), \n" .
"KEY contactid (contactid), \n" .
"KEY type (type), \n" .
"KEY ipaddress (ipaddress), \n" .
"PRIMARY KEY  (id) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}




static function m4is_nx69e5png6y6v( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 string $m4is_h7zwy5f0w3y9gx3wm = 'event', string $m4is_cwv4aa9zak1r37 = '', string $m4is_xd32d4bk2zxy98sj79ddcg4m = '', bool $m4is_bafcwrfqad69dekc = false ) : int {
if ( $m4is_h7zwy5f0w3y9gx3wm == 'httppost' ) {
$m4is_11bjs9729 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'httppost_log' );
if ( $m4is_bafcwrfqad69dekc === false && empty( $m4is_11bjs9729 ) ) {
return false;
}
}
global $wpdb;
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_2j5zjm5s0();

$m4is_d60kn1d3yvprp62rs332 = [
'contactid' => (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'type' => trim( $m4is_h7zwy5f0w3y9gx3wm ),

'appname' => self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' ),
'ipaddress' => $m4is_xd32d4bk2zxy98sj79ddcg4m,
'log' => trim($m4is_cwv4aa9zak1r37) . "\n",

];
$m4is_06ga5y7jaf75 = [
'%d',
'%s',
'%s',
'%s',
'%s',
];
$wpdb->insert($m4is_k7p8pmxsbkqrje3y20, $m4is_d60kn1d3yvprp62rs332, $m4is_06ga5y7jaf75);

$m4is_cddz42dndq0yjaqpa0 = (int) $wpdb->insert_id;
delete_transient( self::$m4is_peh3bgmj );
return $m4is_cddz42dndq0yjaqpa0;
}

static function m4is_7zqnbebmdnh9njhs69f( int $m4is_cddz42dndq0yjaqpa0,
 string $m4is_cwv4aa9zak1r37 ) : bool {
if ( $m4is_cddz42dndq0yjaqpa0 ) {
global $wpdb;
$m4is_cddz42dndq0yjaqpa0 = (int) $m4is_cddz42dndq0yjaqpa0;

$m4is_cwv4aa9zak1r37 = trim($m4is_cwv4aa9zak1r37);
if (! empty($m4is_cwv4aa9zak1r37) && ! empty($m4is_cddz42dndq0yjaqpa0) ) {
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_2j5zjm5s0();

$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE `{$m4is_k7p8pmxsbkqrje3y20}` SET `log` = CONCAT( IFNULL( `log`, '' ), %s ) WHERE `id` = %d;";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_cwv4aa9zak1r37 . "\n", $m4is_cddz42dndq0yjaqpa0);
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);

delete_transient( self::$m4is_peh3bgmj );
return true;
}
}
return false;
}




static function m4is_epy4q4ttk() {
global $wpdb;
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_2j5zjm5s0();

$m4is_tk817g6s424rams3865p2c2 = defined( 'HTTPPOST_LOG_DAYS' ) ? (int) constant( 'HTTPPOST_LOG_DAYS' ) : 7;
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `time` < NOW() - INTERVAL {$m4is_tk817g6s424rams3865p2c2} DAY ";

$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
delete_transient( self::$m4is_peh3bgmj );
}




public static function m4is_b12jw3z3kqhfpxmype() : void {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `type` = 'loginfail'";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 self::m4is_2j5zjm5s0() );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
delete_transient( self::$m4is_peh3bgmj );
}

public static function m4is_ryqghdeab2t5y() : void {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `type` = 'autologin'";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 self::m4is_2j5zjm5s0() );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}

public static function m4is_9hac43mphqpkrh() : void {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `type` = 'httppost'";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 self::m4is_2j5zjm5s0() );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}

}
