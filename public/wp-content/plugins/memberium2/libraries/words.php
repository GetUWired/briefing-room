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

final class m4is_s5vhbv6kzrqbaesnfd8w1pvjycp7w {
private static $m4is_csnk3yn47;
private static $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq;

private static $m4is_y2a20yzf56100;
static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
global $wpdb;
self::$m4is_csnk3yn47 = $wpdb->prefix . 'memberium_words';

self::$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = 'https://membership-system-downloads.webpowerandlight.com/data/eff_large_wordlist.txt';

self::$m4is_y2a20yzf56100 = 'memberium/database/words';
}
private function __construct() {}





public static function m4is_0sje4ak2() : string {
return self::$m4is_csnk3yn47;

}

public static function m4is_1qssa9611n0q10tfdmh16qt() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::$m4is_csnk3yn47;

$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(10) unsigned NOT NULL AUTO_INCREMENT, \n" .
"word varchar(10) NOT NULL, \n" .
"PRIMARY KEY (id) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}

public static function m4is_3mhewknes0q() {
global $wpdb;

$m4is_3zc27e3pcg991c901dnh1zk = self::m4is_8658ghbdpap474rmxfsn();
if ( $m4is_3zc27e3pcg991c901dnh1zk > 7700 ) {
return;
}
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = wp_remote_get( self::$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq );

if ( is_a( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz, 'WP_Error' ) ) {
return;
}
$m4is_jm3x4nend6zh98f6 = 0;
$m4is_81xq22zphx = array_filter( explode( "\n",
 wp_remote_retrieve_body( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) );
$m4is_81xq22zphx = array_map( function( string $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
return trim( substr( $m4is_rqxytszfq5v6syth1csqqxvy5,
 6, 9 ) );
}, $m4is_81xq22zphx );
if ( ! empty( $m4is_81xq22zphx ) ) {
foreach( $m4is_81xq22zphx as $m4is_8yaw2dxke5mybzkhqx57 ) {
$wpdb->insert( self::$m4is_csnk3yn47,
 ['word' => $m4is_8yaw2dxke5mybzkhqx57] );
}
}
self::m4is_zypy1dqc();
}



private static function m4is_zypy1dqc() {
global $wpdb;
$m4is_jm3x4nend6zh98f6 = $wpdb->get_var( $wpdb->prepare( "SELECT max(`id`) FROM %i WHERE 1",
 self::$m4is_csnk3yn47 ) );
update_option( self::$m4is_y2a20yzf56100, $m4is_jm3x4nend6zh98f6 );
}

private static function m4is_8658ghbdpap474rmxfsn() : int {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT count(`id`) FROM %i WHERE 1", self::$m4is_csnk3yn47 );
$m4is_7g9y793jjckyb = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

return $m4is_7g9y793jjckyb;
}
}
