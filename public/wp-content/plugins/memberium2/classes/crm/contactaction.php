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

m4is_f0a4epk1xtn9bzme958::m4is_cmdwra5kyw39gn1ptag2c7f2();
final class m4is_f0a4epk1xtn9bzme958 {
private static $m4is_132xe588j;
private static $m4is_v4beyw7zqhr3;

private static $m4is_wsme5a297xh0v6d5y;
private static $m4is_ac9teep56p;
private static $m4is_csnk3yn47;
public const NOTE_TYPE = -1;

public const TASK_TYPE = -2;
public const APPOINTMENT_TYPE = -3;
public const ACCEPTED = 1;
public const DECLINED = 0;

static function m4is_cmdwra5kyw39gn1ptag2c7f2() {
global $wpdb;

self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
self::$m4is_csnk3yn47 = $wpdb->prefix . 'memberium_contactactions';

self::$m4is_ac9teep56p = 1000;
}
private function __construct() {}



static function m4is_vmq84n9fht9sekkkxdp7() : string {
return self::$m4is_csnk3yn47;
 
}
static function m4is_2qe5xpe7jfxqxxjtvapz1j3vvjw6() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_vmq84n9fht9sekkkxdp7();

$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(20) NOT NULL, \n" .
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



}
