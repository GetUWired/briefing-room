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


final class m4is_q28s00aabb2yd3d {
private static $m4is_132xe588j;
private static $m4is_v4beyw7zqhr3;
private static $m4is_wsme5a297xh0v6d5y;

private static $m4is_ac9teep56p;
private static $m4is_csnk3yn47;
private static $m4is_t8vjc2ec06gfv1gfwtfq5ch3;
public const CONTACT_FIELDS = -1;

public const AFFILIATE_FIELDS = -3;
public const OPPORTUNITY_FIELDS = -4;
public const COMPANY_FIELDS = -6;
public const TASK_FIELDS = -5;

public const ORDER_FIELDS = -9;
public const SUBSCRIPTION_FIELDS = -10;
public const PHONE_TYPE = 1;
public const SSN_TYPE = 2;
public const CURRENCY_TYPE = 3;

public const PERCENT_TYPE = 4;
public const STATE_TYPE = 5;
public const YESNO_TYPE = 6;
public const YEAR_TYPE = 7;
public const MONTH_TYPE = 8;

public const DOW_TYPE = 9;
public const NAME_TYPE = 10;
public const DECIMAL_TYPE = 11;
public const WHOLE_TYPE = 12;
public const DATE_TYPE = 13;

public const DATETIME_TYPE = 14;
public const TEXT_TYPE = 15;
public const TEXTAREA_TYPE = 16;
public const LISTBOX_TYPE = 17;
public const WEBSITE_TYPE = 18;

public const EMAIL_TYPE = 19;
public const RADIO_TYPE = 20;
public const DROPDOWN_TYPE = 21;
public const USER_TYPE = 22;
public const DRILLDOWN_TYPE = 23;


public static function m4is_cmdwra5kyw39gn1ptag2c7f2() {
global $wpdb;
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();
self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );

self::$m4is_csnk3yn47 = $wpdb->prefix . 'memberium_customfields';
self::$m4is_ac9teep56p = 1000;
self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3 = self::$m4is_132xe588j->m4is_7chmqqcbkgf4jft8p56sbp6ss();

}
private function __construct() {

}






public static function m4is_ga03vpgz() : string {
return self::$m4is_csnk3yn47; 
}

public static function m4is_52tn34tmh6z5tw3() : array {
global $wpdb;

$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_ga03vpgz();
$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(11) NOT NULL, \n" .
"appname varchar(32) NOT NULL, \n" .
"name varchar(64) NOT NULL, \n" .
"label varchar(64) NOT NULL, \n" .
"datatype smallint(6) NOT NULL, \n" .
"formid smallint(6) NOT NULL, \n" .
"PRIMARY KEY  (id,appname) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}






public static function m4is_rmnwvg97aafthwt( string $m4is_k7p8pmxsbkqrje3y20 ) : array {
global $wpdb;

static $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s = [];
$m4is_4s4mmcg520b0y0tbbgnade = [
'contact' => self::CONTACT_FIELDS,
'affiliate' => self::AFFILIATE_FIELDS,

'opportunity' => self::OPPORTUNITY_FIELDS,
'company' => self::COMPANY_FIELDS,
'task' => self::TASK_FIELDS,
'job' => self::ORDER_FIELDS,

'recurringorder' => self::SUBSCRIPTION_FIELDS,
];
$m4is_h7zwy5f0w3y9gx3wm = $m4is_4s4mmcg520b0y0tbbgnade[$m4is_k7p8pmxsbkqrje3y20] ?? 0;

if ( ! $m4is_h7zwy5f0w3y9gx3wm ) {
return [];
}
if ( array_key_exists( $m4is_h7zwy5f0w3y9gx3wm, $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s ) ) {
return $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_h7zwy5f0w3y9gx3wm];

}
if ( $m4is_h7zwy5f0w3y9gx3wm ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id`, `name`, `label`, `datatype` FROM %i WHERE `appname` = %s AND `formid` = %d";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_ga03vpgz(), self::$m4is_v4beyw7zqhr3, $m4is_h7zwy5f0w3y9gx3wm );

$m4is_7b2yfzk0054 = (array) $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K );
}
$m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_h7zwy5f0w3y9gx3wm] = $m4is_7b2yfzk0054;

return $m4is_7b2yfzk0054;
}






private static function m4is_recr36b6zb4() : array {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `id` FROM %i WHERE `appname` = %s",
 self::m4is_ga03vpgz(), self::$m4is_v4beyw7zqhr3 );
$m4is_934a95jn = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
return $m4is_934a95jn;

}

public static function m4is_k47rqs4tnrwgp1d34dgxbj( int $m4is_pae00hv11 = 0, int $m4is_wze5zd345372p7g1s9gz2a8 = 0 ) : int {
global $wpdb;

$m4is_ahgg9a9dptkjsnxd9df = $m4is_pae00hv11 < 0 ? $wpdb->prepare( "AND `formid` = %d ", $m4is_pae00hv11 ) : '';
$m4is_ahgg9a9dptkjsnxd9df .= $m4is_wze5zd345372p7g1s9gz2a8 > 0 ? $wpdb->prepare( "AND `datatype` = %d ",
 $m4is_wze5zd345372p7g1s9gz2a8 ) : '';
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT COUNT(`id`) FROM %i WHERE `appname` = %s {$m4is_ahgg9a9dptkjsnxd9df}",
 self::m4is_ga03vpgz(), self::$m4is_v4beyw7zqhr3 );
$m4is_7g9y793jjckyb = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
return (int) $m4is_7g9y793jjckyb;

}

public static function m4is_d2ce9k4j3( int $m4is_pae00hv11 = 0, int $m4is_wze5zd345372p7g1s9gz2a8 = 0 ) : array {
global $wpdb;

static $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s = [];
$m4is_ahgg9a9dptkjsnxd9df = $m4is_pae00hv11 < 0 ? $wpdb->prepare( "AND `formid` = %d ",
 $m4is_pae00hv11 ) : '';
$m4is_ahgg9a9dptkjsnxd9df .= $m4is_wze5zd345372p7g1s9gz2a8 > 0 ? $wpdb->prepare( "AND `datatype` = %d ", $m4is_wze5zd345372p7g1s9gz2a8 ) : '';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT concat('_', `name`) FROM %i WHERE `appname` = %s {$m4is_ahgg9a9dptkjsnxd9df}",
 self::m4is_ga03vpgz(), self::$m4is_v4beyw7zqhr3 );
$m4is_gvt2hckttpbz8zr7m1a5abrr = sha1( $m4is_5rbenkpt1v7xby2cknbs7 );
if ( isset( $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_gvt2hckttpbz8zr7m1a5abrr] ) ) {
return $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_gvt2hckttpbz8zr7m1a5abrr];

}
$m4is_6b2g43j9xb5ye = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_gvt2hckttpbz8zr7m1a5abrr] = $m4is_6b2g43j9xb5ye;

return $m4is_6b2g43j9xb5ye;
}

public static function m4is_fw7tt6xgzywgt1cps9jnyavg0eq( int $m4is_pae00hv11 = 0, int $m4is_wze5zd345372p7g1s9gz2a8 = 0 ) : array {
global $wpdb;

$m4is_ahgg9a9dptkjsnxd9df = $m4is_pae00hv11 < 0 ? $wpdb->prepare( "AND `formid` = %d ", $m4is_pae00hv11 ) : '';
$m4is_ahgg9a9dptkjsnxd9df .= $m4is_wze5zd345372p7g1s9gz2a8 > 0 ? $wpdb->prepare( "AND `datatype` = %d ",
 $m4is_wze5zd345372p7g1s9gz2a8 ) : '';
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT * FROM %i WHERE `appname` = %s {$m4is_ahgg9a9dptkjsnxd9df}",
 self::m4is_ga03vpgz(), self::$m4is_v4beyw7zqhr3 );
$m4is_7b2yfzk0054 = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );

return $m4is_7b2yfzk0054;
}






public static function m4is_rc7cpymf5b7xy32xqb50085d4m() : int {
$m4is_tbdh9qb6r6z = (int) self::m4is_3ap38cr48tbbx86rq6asxk9w7qqvdbd();

$m4is_k7p8pmxsbkqrje3y20 = 'DataFormField';

do_action( 'memberium/custom_fields/sync' );
set_transient( 'i2sdk_customfields_updated',
 time() );
$m4is_jrqdhydea8tfkwz4n4g07t6ee = get_option( 'memberium_tables_updated', [] );
$m4is_jrqdhydea8tfkwz4n4g07t6ee['i2sdk_customfields'] = time();

update_option( 'memberium_tables_updated', $m4is_jrqdhydea8tfkwz4n4g07t6ee, false );
wp_cache_delete( $m4is_k7p8pmxsbkqrje3y20, 'i2sdk/tables' );

return $m4is_tbdh9qb6r6z;

}

public static function m4is_3ap38cr48tbbx86rq6asxk9w7qqvdbd() : int {
$m4is_9r7h8wfy = 0;

$m4is_9r7h8wfy += self::m4is_qw2frxaa8f1es2();

$m4is_9r7h8wfy += self::m4is_yjt8ch9dm2tw9v7v96();
$m4is_9r7h8wfy += self::m4is_hege48tzgsgg9j();
$m4is_9r7h8wfy += self::m4is_70z3007pgx1k577j3ped();


$m4is_9r7h8wfy += self::m4is_nkyrcvcpnjrw8pfn();
$m4is_9r7h8wfy += self::m4is_dk1m4p93rr();
$m4is_9r7h8wfy += self::m4is_nyy487rgxzq2pa4c();

$m4is_9r7h8wfy += self::m4is_swszn4tq85xc1h();

return $m4is_9r7h8wfy;
}

private static function m4is_yjt8ch9dm2tw9v7v96() : int {
$m4is_9r7h8wfy = 0;

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_x39py13bx4as5hn();
if ( ! is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
$m4is_9r7h8wfy += self::m4is_07qx4ezsm9r( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

}
m4is_amz58dmg8j7e898bj8r8b1::m4is_emjyh64vj5zgk0gea4gem3nmmx70();
return $m4is_9r7h8wfy;
}

private static function m4is_nyy487rgxzq2pa4c() : int {
$m4is_9r7h8wfy = 0;

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_bwb2xrfsx4m4168wt6f7yt();
if ( ! is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
$m4is_9r7h8wfy += self::m4is_07qx4ezsm9r( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

}
return $m4is_9r7h8wfy;
}

private static function m4is_qw2frxaa8f1es2() : int {
$m4is_9r7h8wfy = 0;
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_ghfxqyyd48vc24567hdzegd();

if ( ! is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
$m4is_9r7h8wfy += self::m4is_07qx4ezsm9r( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

}
m4is_rw8p2dfy073ez::m4is_emjyh64vj5zgk0gea4gem3nmmx70();
return $m4is_9r7h8wfy;
}

private static function m4is_dk1m4p93rr() : int {
$m4is_9r7h8wfy = 0;

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_2rr1pgyrgmv();
if ( ! is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
$m4is_9r7h8wfy += self::m4is_07qx4ezsm9r( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

}
return $m4is_9r7h8wfy;
}

private static function m4is_nkyrcvcpnjrw8pfn() : int {
$m4is_9r7h8wfy = 0;
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_0byhe8ay6();

if ( ! is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
$m4is_9r7h8wfy += self::m4is_07qx4ezsm9r( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

}
return $m4is_9r7h8wfy;
}

private static function m4is_swszn4tq85xc1h() : int {
$m4is_9r7h8wfy = 0;
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_9dbxwdfr1v2bpvr6twfr29q0s23p();

if ( ! is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
$m4is_9r7h8wfy += self::m4is_07qx4ezsm9r( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

}
return $m4is_9r7h8wfy;
}

private static function m4is_hege48tzgsgg9j() : int {
$m4is_9r7h8wfy = 0;
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_3fjbrhvf();

if ( ! is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
$m4is_9r7h8wfy += self::m4is_07qx4ezsm9r( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

}
return $m4is_9r7h8wfy;
}

private static function m4is_70z3007pgx1k577j3ped() : int {
$m4is_9r7h8wfy = 0;
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_pr200kqmgd2e32fs29hb99j();

if ( ! is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
$m4is_9r7h8wfy += self::m4is_07qx4ezsm9r( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

}
return $m4is_9r7h8wfy;
}






public static function m4is_98d5yxdrgwntv69xzte( string $m4is_k7p8pmxsbkqrje3y20, string $m4is_jrbbv650tt4nt9f6fz,
 string $m4is_6m8raeet14zjyazcjb931mry2a55jfy, int $m4is_rcqbv7ahfzbappzy4t1ysys4y19 ) {
$m4is_jrbbv650tt4nt9f6fz = trim( $m4is_jrbbv650tt4nt9f6fz );

return self::$m4is_wsme5a297xh0v6d5y->addCustomField( $m4is_k7p8pmxsbkqrje3y20, $m4is_jrbbv650tt4nt9f6fz, $m4is_6m8raeet14zjyazcjb931mry2a55jfy,
 $m4is_rcqbv7ahfzbappzy4t1ysys4y19 );
}

public static function m4is_rab5hjvfjdhdgbnf552qj5c3bpc94pd( string $m4is_jrbbv650tt4nt9f6fz,
 string $m4is_6m8raeet14zjyazcjb931mry2a55jfy = 'Text', int $m4is_rcqbv7ahfzbappzy4t1ysys4y19 = 0 ) {
if ( empty( $m4is_jrbbv650tt4nt9f6fz ) ) {
return;

}
$m4is_jrbbv650tt4nt9f6fz = trim( $m4is_jrbbv650tt4nt9f6fz );
$m4is_6m8raeet14zjyazcjb931mry2a55jfy = trim( $m4is_6m8raeet14zjyazcjb931mry2a55jfy );

$m4is_rcqbv7ahfzbappzy4t1ysys4y19 = (int) $m4is_rcqbv7ahfzbappzy4t1ysys4y19;
if ($m4is_rcqbv7ahfzbappzy4t1ysys4y19 == 0) {
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',
 'Name'
];
$m4is_j34bmw9dcjexfj1qpz = [
'Id' => '%'
];
$m4is_g1pfvjpjwcbctyrdrn9qd2mk3 = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2( 'DataFormGroup',
 self::$m4is_ac9teep56p, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
$m4is_rcqbv7ahfzbappzy4t1ysys4y19 = (int) $m4is_g1pfvjpjwcbctyrdrn9qd2mk3[0]['Id'];

}
if ( $m4is_rcqbv7ahfzbappzy4t1ysys4y19 > 0 ) {
m4is_q28s00aabb2yd3d::m4is_98d5yxdrgwntv69xzte( 'Contact', $_POST['new_crm_field'],
 $m4is_6m8raeet14zjyazcjb931mry2a55jfy, $m4is_rcqbv7ahfzbappzy4t1ysys4y19 );
m4is_q28s00aabb2yd3d::m4is_qw2frxaa8f1es2();
}
else {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Unable to add new custom field.  Please create a custom tab and custom group in Keap first.' );

return;
}
}






private static function m4is_07qx4ezsm9r( object $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) : int {
global $wpdb;
$m4is_7b2yfzk0054 = $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ?? [];

$m4is_934a95jn = [];
$m4is_fycpkje9sqts1230ewq = [];
$m4is_5rbenkpt1v7xby2cknbs7 = '';
foreach( $m4is_7b2yfzk0054 as $m4is_j8j55t8dz79m7 =>
 $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
$m4is_fw6q9n56tk8v8kd3q97rsgvd1vxa2w = (int) ( $m4is_bbsta3mvjhhvh1x97vfpm9e->id ?? 0 );
$m4is_31wr7c65sbkt4qmdq5gsj324c = $m4is_bbsta3mvjhhvh1x97vfpm9e->label ?? '';

$m4is_7fxt9x66htv4bmas5xb2x095ste = $m4is_bbsta3mvjhhvh1x97vfpm9e->field_name ?? '';
$m4is_1y9wf8c82cn92k3v = self::m4is_v422kdpqfqb54czzfy1pg9( $m4is_bbsta3mvjhhvh1x97vfpm9e->record_type ?? '' );

$m4is_bh5p7a832881hb2tamn5adpw2xpdd = self::m4is_s9t539dcce8q9sdtth2zk0aqktg( $m4is_bbsta3mvjhhvh1x97vfpm9e->field_type ?? '' );
$m4is_934a95jn[] = $m4is_fw6q9n56tk8v8kd3q97rsgvd1vxa2w;

$m4is_fycpkje9sqts1230ewq[] = $wpdb->prepare(
" ( %d, %s, %s, %s, %d, %d ) ",
$m4is_fw6q9n56tk8v8kd3q97rsgvd1vxa2w,
self::$m4is_v4beyw7zqhr3,

$m4is_7fxt9x66htv4bmas5xb2x095ste,
$m4is_31wr7c65sbkt4qmdq5gsj324c,
$m4is_bh5p7a832881hb2tamn5adpw2xpdd,
$m4is_1y9wf8c82cn92k3v
);

}

if ( ! empty( $m4is_fycpkje9sqts1230ewq ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO %i ( `id`, `appname`, `name`, `label`, `datatype`, `formid` ) VALUES " . implode( ",\n",
 $m4is_fycpkje9sqts1230ewq ) . " ON DUPLICATE KEY UPDATE `name` = VALUES(`name`), `label` = VALUES(`label`), `datatype` = VALUES(`datatype`), `formid` = VALUES(`formid`)";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_ga03vpgz() );
$m4is_tbdh9qb6r6z = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

}

if ( ! empty( $m4is_934a95jn ) ) {
$m4is_tz7kjbh9vh78cd6yw4q = implode( ',', $m4is_934a95jn );
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `appname` = %s AND `formid` = %d AND `id` NOT IN ( {$m4is_tz7kjbh9vh78cd6yw4q} )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::m4is_ga03vpgz(), self::$m4is_v4beyw7zqhr3, $m4is_1y9wf8c82cn92k3v );

$m4is_hartbe843crydzh = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
return count( $m4is_934a95jn );
}

private static function m4is_v422kdpqfqb54czzfy1pg9( string $m4is_k7p8pmxsbkqrje3y20 ) : int {
static $m4is_4s4mmcg520b0y0tbbgnade = [
'company' =>
 self::COMPANY_FIELDS,
'contact' => self::CONTACT_FIELDS,
'opportunity' => self::OPPORTUNITY_FIELDS,
'order' => self::ORDER_FIELDS,

'referral_partner' => self::AFFILIATE_FIELDS,
'subscription' => self::SUBSCRIPTION_FIELDS,
'task_note_appointment' => self::TASK_FIELDS,

];
$m4is_k7p8pmxsbkqrje3y20 = strtolower( $m4is_k7p8pmxsbkqrje3y20 );
if ( array_key_exists( $m4is_k7p8pmxsbkqrje3y20, $m4is_4s4mmcg520b0y0tbbgnade ) ) {
return $m4is_4s4mmcg520b0y0tbbgnade[$m4is_k7p8pmxsbkqrje3y20];

}
error_log( 'Memberium: [error] Custom Field Table ID not found for table: ' . $m4is_k7p8pmxsbkqrje3y20 );
return -9999;
}

private static function m4is_s9t539dcce8q9sdtth2zk0aqktg( string $m4is_6m8raeet14zjyazcjb931mry2a55jfy ) : int {
static $m4is_4s4mmcg520b0y0tbbgnade = [
'currency' =>
 self::CURRENCY_TYPE,
'date' => self::DATE_TYPE,
'datetime' => self::DATETIME_TYPE,
'decimal' => self::DECIMAL_TYPE,
'dow' => self::DOW_TYPE,

'drilldown' => self::DRILLDOWN_TYPE,
'dropdown' => self::DROPDOWN_TYPE,
'email' => self::EMAIL_TYPE,
'listbox' => self::LISTBOX_TYPE,

'month' => self::MONTH_TYPE,
'name' => self::NAME_TYPE,
'percent' => self::PERCENT_TYPE,
'phone' => self::PHONE_TYPE,
'radio' => self::RADIO_TYPE,

'ssn' => self::SSN_TYPE,
'state' => self::STATE_TYPE,
'text' => self::TEXT_TYPE,
'textarea' => self::TEXTAREA_TYPE,
'user' => self::USER_TYPE,

'website' => self::WEBSITE_TYPE,
'wholenumber' => self::WHOLE_TYPE,
'year' => self::YEAR_TYPE,
'yesno' => self::YESNO_TYPE,
];
$m4is_6m8raeet14zjyazcjb931mry2a55jfy = strtolower( $m4is_6m8raeet14zjyazcjb931mry2a55jfy );

if ( ! array_key_exists( $m4is_6m8raeet14zjyazcjb931mry2a55jfy, $m4is_4s4mmcg520b0y0tbbgnade ) ) {
error_log( 'Memberium: [error] Custom Field Type ID not found for type: ' . $m4is_6m8raeet14zjyazcjb931mry2a55jfy );

return 0;
}
return array_key_exists( $m4is_6m8raeet14zjyazcjb931mry2a55jfy, $m4is_4s4mmcg520b0y0tbbgnade ) ? $m4is_4s4mmcg520b0y0tbbgnade[$m4is_6m8raeet14zjyazcjb931mry2a55jfy] : 0;

}

}
m4is_q28s00aabb2yd3d::m4is_cmdwra5kyw39gn1ptag2c7f2();
