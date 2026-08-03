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

m4is_cjv9qx6sd7amfgkqnn::m4is_cmdwra5kyw39gn1ptag2c7f2();
final class m4is_cjv9qx6sd7amfgkqnn {
private static $m4is_wsme5a297xh0v6d5y;

private static $m4is_132xe588j;
private static $m4is_v4beyw7zqhr3;
private static $m4is_csnk3yn47;
public const TAG = 1;
public const ACTIONSET = 2;

public const CAMPAIGN_GOAL = 3;
public const CONTACT_FIELD_UPDATE = 4;
public static function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
global $wpdb;

self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );

self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();
self::$m4is_csnk3yn47 = $wpdb->prefix . 'memberium_api_queue';

}
public static function m4is_bhrqvj7fna() : string {
return self::$m4is_csnk3yn47;
}
static function m4is_2qe5xpe7jfxqxxjtvapz1j3vvjw6() : array {
global $wpdb;

$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_bhrqvj7fna();
$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(20) NOT NULL, \n" .
"appname varchar(32) NOT NULL, \n" .
"contact_id int(20) NOT NULL, \n" .
"action int NOT NULL, \n" .
"action_date datetime NOT NULL, \n" .
"value longtext, \n" .
"KEY id (id), \n" .
"KEY appname (appname), \n" .
"KEY fieldname (fieldname), \n" .
"KEY value (value(64) ), \n" .
"PRIMARY KEY  (appname,id,fieldname) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}
}