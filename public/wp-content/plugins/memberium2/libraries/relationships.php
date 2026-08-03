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

final class m4is_8ykqh469 {
private static $m4is_k7p8pmxsbkqrje3y20;
private static $m4is_ckv7wdt0xwj1zj0bwwe49;

static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
global $wpdb;

self::$m4is_k7p8pmxsbkqrje3y20 = "{$wpdb->prefix}memberium_relationships";
self::$m4is_ckv7wdt0xwj1zj0bwwe49 = constant( 'MEMBERIUM_DB_RELATIONSHIP_TYPES' );

}




static function m4is_qhx4gdf9w2w8nrvvashrwp5n7jc() : string {
return self::$m4is_k7p8pmxsbkqrje3y20;
}
static function m4is_ym50zy1m() : array {
global $wpdb;

$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_qhx4gdf9w2w8nrvvashrwp5n7jc();
$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(11) NOT NULL AUTO_INCREMENT, \n" .
"user_id int(11) NOT NULL, \n" .
"type_id int(11) NOT NULL, \n" .
"rel_id int(11) NOT NULL, \n" .
"created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, \n" .
"UNIQUE KEY relationship (user_id,rel_id,type_id), \n" .
"PRIMARY KEY  (id) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}

static function m4is_1qedjejgk9dma3fc424zy9() : string {
return self::$m4is_ckv7wdt0xwj1zj0bwwe49;

}
static function m4is_my7mq31w() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_1qedjejgk9dma3fc424zy9();

$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";
return [
'table' =>
 $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}




static function m4is_32q2qq1rez1jed1( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 int $m4is_wze5zd345372p7g1s9gz2a8 ): array {


global $wpdb;


if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 || ! $m4is_wze5zd345372p7g1s9gz2a8) {
return [];

}

$m4is_k7p8pmxsbkqrje3y20 = self::m4is_qhx4gdf9w2w8nrvvashrwp5n7jc();


$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `rel_id` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `user_id` = %d AND `rel_type_id` = %d;";


$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wze5zd345372p7g1s9gz2a8 );



$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );

return $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m;

}

static function m4is_n1rw43wcwtn9523gdwjt6tg( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, int $m4is_wze5zd345372p7g1s9gz2a8 ): int {


global $wpdb;


$m4is_k7p8pmxsbkqrje3y20 = self::m4is_qhx4gdf9w2w8nrvvashrwp5n7jc();


$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `user_id` = %d AND `rel_type_id` = %d;";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wze5zd345372p7g1s9gz2a8 );



$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

return $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m;

}

static function m4is_y7nhehexf7rrnhy0n( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, int $m4is_wze5zd345372p7g1s9gz2a8, int $m4is_j4yx9377zz16rt17hv3 ): bool {


global $wpdb;


$m4is_k7p8pmxsbkqrje3y20 = self::m4is_qhx4gdf9w2w8nrvvashrwp5n7jc();



$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `rel_id` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `user_id` = %d AND `rel_type_id` = %d AND `rel_id` = %d LIMIT 1";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wze5zd345372p7g1s9gz2a8,
 $m4is_j4yx9377zz16rt17hv3 );

$m4is_hartbe843crydzh = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );



return (bool) $m4is_hartbe843crydzh;

}

static function m4is_vvb5zwfsn( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, int $m4is_wze5zd345372p7g1s9gz2a8, array $m4is_dja41hcwf0jy9m52vem70 ) {


global $wpdb;


$m4is_dja41hcwf0jy9m52vem70 = array_filter( $m4is_dja41hcwf0jy9m52vem70, function( $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
return is_int( $m4is_rqxytszfq5v6syth1csqqxvy5 ) && $m4is_rqxytszfq5v6syth1csqqxvy5 > 0;

});

$m4is_k7p8pmxsbkqrje3y20 = self::m4is_qhx4gdf9w2w8nrvvashrwp5n7jc();

$m4is_99mzx6n1ap87a83qd3698 = self::m4is_32q2qq1rez1jed1( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_wze5zd345372p7g1s9gz2a8 );

$m4is_k0fbmngffkq31z0 = array_diff( $m4is_99mzx6n1ap87a83qd3698, $m4is_dja41hcwf0jy9m52vem70 );
$m4is_fy09e846rzkkcbgtrhc = array_diff( $m4is_dja41hcwf0jy9m52vem70,
 $m4is_99mzx6n1ap87a83qd3698 );

if ( ! empty ($m4is_k0fbmngffkq31z0 ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `user_id` = %d AND `rel_type_id` = %d AND `rel_id` IN (%s)";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wze5zd345372p7g1s9gz2a8,
 implode(',', $m4is_k0fbmngffkq31z0));
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}

if ( ! empty( $m4is_fy09e846rzkkcbgtrhc) ) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = "INSERT INTO `{$m4is_k7p8pmxsbkqrje3y20}` (`user_id`, `rel_type_id`, `rel_id`) VALUES (%s, %s, %s)";

foreach ($m4is_fy09e846rzkkcbgtrhc as $m4is_bykadhctgvptxc2ehqfhv2b4zc) {
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_r2g10s87x43pdk8y5cq9hw801g,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wze5zd345372p7g1s9gz2a8, $m4is_bykadhctgvptxc2ehqfhv2b4zc);
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);

}
}
}

static function m4is_0gkjctxg4kt( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, int $m4is_wze5zd345372p7g1s9gz2a8, int $m4is_j4yx9377zz16rt17hv3 ) {


global $wpdb;


if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 || ! $m4is_wze5zd345372p7g1s9gz2a8 || ! $m4is_j4yx9377zz16rt17hv3 ) {
return;
}

$m4is_k7p8pmxsbkqrje3y20 = self::m4is_qhx4gdf9w2w8nrvvashrwp5n7jc();



$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO `{$m4is_k7p8pmxsbkqrje3y20}` (`user_id`, `rel_type_id`, `rel_id`) VALUES (%d, %d, %d);";



$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wze5zd345372p7g1s9gz2a8,
 $m4is_j4yx9377zz16rt17hv3 );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}

static function m4is_1xvt2ne8bn0mfb1px9vs7hjf8dbzww27 ( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 int $m4is_wze5zd345372p7g1s9gz2a8, int $m4is_j4yx9377zz16rt17hv3 = 0 ) {


global $wpdb;

$m4is_k7p8pmxsbkqrje3y20 = self::m4is_qhx4gdf9w2w8nrvvashrwp5n7jc();


if ( $m4is_j4yx9377zz16rt17hv3 ) {


$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `user_id` = %d AND `rel_type_id` = %d AND `rel_id` = %d ;";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wze5zd345372p7g1s9gz2a8,
 $m4is_j4yx9377zz16rt17hv3 );
}
else {


$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `user_id` = %d AND `rel_type_id` = %d ;";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wze5zd345372p7g1s9gz2a8 );

}

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}

static function m4is_gmze4tvjv2bxah( int $m4is_wze5zd345372p7g1s9gz2a8 ) : bool {

global $wpdb;






$m4is_k7p8pmxsbkqrje3y20 = self::m4is_qhx4gdf9w2w8nrvvashrwp5n7jc();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `rel_type_id` = %d;";

$m4is_7sk22th2gcb4x36h4c2jh4epz11fd = $wpdb->get_var( $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_wze5zd345372p7g1s9gz2a8 ) );



return (bool) $m4is_7sk22th2gcb4x36h4c2jh4epz11fd;
}

static function m4is_mf26ydmfs6n7tt6 ( string $m4is_hce1y1a4qd65zhnwsj ) : int {


global $wpdb;


$m4is_k7p8pmxsbkqrje3y20 = self::m4is_1qedjejgk9dma3fc424zy9();


$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO `{$m4is_k7p8pmxsbkqrje3y20}` (`name`) VALUES (%s);";



$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_hce1y1a4qd65zhnwsj );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );


$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $wpdb->insert_id;


return (int) $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;
}

static function m4is_r89c9eyd5h7c4fjcmc( string $m4is_hce1y1a4qd65zhnwsj ) : int {


global $wpdb;


$m4is_k7p8pmxsbkqrje3y20 = self::m4is_1qedjejgk9dma3fc424zy9();

$m4is_hce1y1a4qd65zhnwsj = strtolower( trim( $m4is_hce1y1a4qd65zhnwsj ) );



$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `rel_type_id` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `name` = %s LIMIT 1;";


$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 $m4is_hce1y1a4qd65zhnwsj );


$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

return $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;

}

static function m4is_q1k48abqvesh8pz1yfv0( string $m4is_hce1y1a4qd65zhnwsj ) : int {

global $wpdb;

$m4is_hce1y1a4qd65zhnwsj = strtolower( trim( $m4is_hce1y1a4qd65zhnwsj ) );


if ( empty( $m4is_hce1y1a4qd65zhnwsj ) ) {
return 0;
}

$m4is_wze5zd345372p7g1s9gz2a8 = self::m4is_r89c9eyd5h7c4fjcmc( $m4is_hce1y1a4qd65zhnwsj );


if ( ! $m4is_wze5zd345372p7g1s9gz2a8 ) {
return 0;
}

if ( ! self::m4is_gmze4tvjv2bxah( $m4is_wze5zd345372p7g1s9gz2a8 ) ) {
return 0;

}

$m4is_k7p8pmxsbkqrje3y20 = self::m4is_1qedjejgk9dma3fc424zy9();

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `type_id` = %d ";


$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_wze5zd345372p7g1s9gz2a8 );

$m4is_tbdh9qb6r6z = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );


return (int) $m4is_tbdh9qb6r6z;
}

}
