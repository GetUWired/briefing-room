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

m4is_bbwjksaqsay3yt68xq9afn::m4is_z6c3r724qhd();
final class m4is_bbwjksaqsay3yt68xq9afn {
private static object $m4is_132xe588j;
private static string $m4is_v4beyw7zqhr3;

private static string $m4is_qfmwhpwvvxybc4w03sbq6h;
private static object $m4is_wsme5a297xh0v6d5y;
private static object $m4is_t8vjc2ec06gfv1gfwtfq5ch3;


static function m4is_z6c3r724qhd() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();

self::$m4is_qfmwhpwvvxybc4w03sbq6h = 'memberium_products';
self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3 = self::$m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->m4is_dzjdf8h0p8gzs37xpyhh4krbgavss4();

}




static function m4is_syjrxw7rw3s() : string {
return 'memberium_invoices';
}

static function m4is_13pkw2zwx02() : string {
return self::$m4is_qfmwhpwvvxybc4w03sbq6h;

}
static function m4is_0adhhh60gv() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_syjrxw7rw3s();

$m4is_5rbenkpt1v7xby2cknbs7 = "CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(11) NOT NULL, \n" .
"appname varchar(32), \n" .
"affiliateid int(11) NOT NULL, \n" .
"contactid int(11) NOT NULL, \n" .
"creditstatus int(11) NOT NULL, \n" .
"datecreated datetime NOT NULL, \n" .
"description varchar(255) NOT NULL, \n" .
"invoicetotal double NOT NULL, \n" .
"invoicetype varchar(32) NOT NULL, \n" .
"jobid int(11) NOT NULL, \n" .
"lastupdated datetime NOT NULL, \n" .
"leadaffiliateid int(11) NOT NULL, \n" .
"payplanstatus int(11) NOT NULL, \n" .
"paystatus int(11) NOT NULL, \n" .
"productsold varchar(255) NOT NULL, \n" .
"promocode varchar(32) NOT NULL, \n" .
"refundstatus int(11) NOT NULL, \n" .
"totaldue double NOT NULL, \n" .
"totalpaid double NOT NULL, \n" .
"KEY job_id (jobid), \n" .
"KEY contactid (contactid), \n" .
"KEY affiliateid (affiliateid), \n" .
"KEY datecreated (datecreated), \n" .
"PRIMARY KEY  (id,appname) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}
static function m4is_dergk737ax54ft9bpgm4h1dx() : array {
global $wpdb;

$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_13pkw2zwx02();
$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(20) NOT NULL, \n" .
"appname varchar(32) NOT NULL, \n" .
"fieldname varchar(64) NOT NULL default '', \n" .
"value longtext, \n" .
"KEY id (id), \n" .
"PRIMARY KEY  (id,appname,fieldname) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}



public static function m4is_zxv55m2ynfvf5txfpxe38gt50f() {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_n7ce1ph3h1kzmt249y3b30y( 1,
 'merchants' );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = self::$m4is_t8vjc2ec06gfv1gfwtfq5ch3->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

return (array) $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}




private static function m4is_cp599ydkdetvzdys72svcscttcm5vns( int $m4is_0906y1a1fyz3wa ) : string {
return sprintf( 'memberium/%s/payplans/%d',
 self::$m4is_v4beyw7zqhr3, $m4is_0906y1a1fyz3wa );
}

private static function m4is_kvnwv2y5ex5xmmccwphrxn( int $m4is_xnz2kndjgr447 ) : string {
return sprintf( 'memberium/%s/payplanitems/%d',
 self::$m4is_v4beyw7zqhr3, $m4is_xnz2kndjgr447 );
}
private static function m4is_93jz2y39n4y9hq1eh0b9htk63() : int {
return MINUTE_IN_SECONDS * 30;

}

static function m4is_tq8kw1jp8fpak68cv8nzg72wy9( int $m4is_0906y1a1fyz3wa ) {
$m4is_5accw6aga5vzz4 = false;
$m4is_5p1kv9r3f9ermvn3k = self::m4is_93jz2y39n4y9hq1eh0b9htk63();

if ($m4is_0906y1a1fyz3wa) {
$m4is_r2d01p7w70wh2g5 = self::m4is_cp599ydkdetvzdys72svcscttcm5vns( $m4is_0906y1a1fyz3wa );
$m4is_5accw6aga5vzz4 = get_transient( $m4is_r2d01p7w70wh2g5 );

if ( $m4is_5accw6aga5vzz4 === false ) {
$m4is_k7p8pmxsbkqrje3y20 = 'PayPlan';
$m4is_j34bmw9dcjexfj1qpz = [
'InvoiceId' => $m4is_0906y1a1fyz3wa
];

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( $m4is_k7p8pmxsbkqrje3y20 );
$m4is_5accw6aga5vzz4 = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2( $m4is_k7p8pmxsbkqrje3y20,
 1, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
}
if ( is_array( $m4is_5accw6aga5vzz4 ) && ! empty( $m4is_5accw6aga5vzz4 ) ) {
set_transient( $m4is_r2d01p7w70wh2g5,
 $m4is_5accw6aga5vzz4[0], $m4is_5p1kv9r3f9ermvn3k );
$m4is_5accw6aga5vzz4 = $m4is_5accw6aga5vzz4[0];
}
}
return $m4is_5accw6aga5vzz4;

}




static function m4is_j23fdm6vzgnavqfxn1ada( int $m4is_xnz2kndjgr447 ) {
$m4is_xj0z2tm29x = false;
if ($m4is_xnz2kndjgr447) {
$m4is_r2d01p7w70wh2g5 = self::m4is_kvnwv2y5ex5xmmccwphrxn( $m4is_xnz2kndjgr447 );

$m4is_xj0z2tm29x = get_transient( $m4is_r2d01p7w70wh2g5 );
if ($m4is_xj0z2tm29x === false) {
$m4is_k7p8pmxsbkqrje3y20 = 'PayPlanItem';

$m4is_j34bmw9dcjexfj1qpz = [
'PayPlanId' => $m4is_xnz2kndjgr447
];
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( $m4is_k7p8pmxsbkqrje3y20 );

$m4is_xj0z2tm29x = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj( $m4is_k7p8pmxsbkqrje3y20, 1000, 0, $m4is_j34bmw9dcjexfj1qpz,
 $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'DateDue', true );
if ( is_array( $m4is_xj0z2tm29x ) && count( $m4is_xj0z2tm29x ) > 0 ) {
set_transient( $m4is_r2d01p7w70wh2g5,
 $m4is_xj0z2tm29x, 1800 );
}
}
}
return $m4is_xj0z2tm29x;
}




private static function m4is_e2m1bcfjv3swt4e( array $m4is_6xj2zq4143f49mqz9p79f7brf3mv ) {
global $wpdb;

$m4is_k7p8pmxsbkqrje3y20 = self::m4is_13pkw2zwx02();
$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3;
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'product' );

$m4is_9n99a0wfjv3p = [];
$m4is_934a95jn = [];
$m4is_fycpkje9sqts1230ewq = [];
$m4is_19x1c17et728k945 = [];
foreach($m4is_6xj2zq4143f49mqz9p79f7brf3mv as $m4is_m3h9r6vhs5rt8w41pn284phf) {
$m4is_934a95jn[] = $m4is_m3h9r6vhs5rt8w41pn284phf['Id'];

}
if (! empty($m4is_934a95jn)) {
$m4is_b4tj8bz7gag2n7w4a3ych8s4hw86 = implode(',', $m4is_934a95jn);
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `id` NOT IN ({$m4is_b4tj8bz7gag2n7w4a3ych8s4hw86})";

$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}
foreach($m4is_6xj2zq4143f49mqz9p79f7brf3mv as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_m3h9r6vhs5rt8w41pn284phf) {
$m4is_q7z89q009z6tys7s33e7kp2 = self::m4is_ng73r4m89y2pw0z88( (int) $m4is_m3h9r6vhs5rt8w41pn284phf['Id']);


foreach($m4is_q7z89q009z6tys7s33e7kp2 as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
if (! array_key_exists($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6,
 $m4is_m3h9r6vhs5rt8w41pn284phf) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `appname` = '{$m4is_v4beyw7zqhr3}' AND `id` = {$m4is_m3h9r6vhs5rt8w41pn284phf['Id']} AND `fieldname` = '{$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6}' ";

$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}
}

foreach($m4is_m3h9r6vhs5rt8w41pn284phf as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp) {
if (! in_array($m4is_bqhtspcavhb01spmfd3x,
 $m4is_9n99a0wfjv3p) ) {
if ( (! isset($m4is_q7z89q009z6tys7s33e7kp2[$m4is_bqhtspcavhb01spmfd3x]) || ($m4is_q7z89q009z6tys7s33e7kp2[$m4is_bqhtspcavhb01spmfd3x] <> $m4is_29gzevpx8rbkp) ) ) {
$m4is_fycpkje9sqts1230ewq[] = $wpdb->prepare('(%d, %s, %s, %s)',
 $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_v4beyw7zqhr3, $m4is_bqhtspcavhb01spmfd3x, $m4is_29gzevpx8rbkp);
$m4is_19x1c17et728k945[] .= $wpdb->prepare("%s",
 $m4is_bqhtspcavhb01spmfd3x);
}
}
}
if (! empty($m4is_fycpkje9sqts1230ewq) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO {$m4is_k7p8pmxsbkqrje3y20} (id, appname, fieldname, value) VALUES " . implode(',',
 $m4is_fycpkje9sqts1230ewq) . " ON DUPLICATE KEY UPDATE id=VALUES(id), appname=VALUES(appname), fieldname=VALUES(fieldname), value=VALUES(value);";

$m4is_hartbe843crydzh = $wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}
}
}

static function m4is_garkc0cjkwp8mttetq() : int {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(DISTINCT `id`) FROM %i WHERE `appname` = %s";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 self::$m4is_qfmwhpwvvxybc4w03sbq6h, self::$m4is_v4beyw7zqhr3 );
return (int) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
}
static function m4is_vatx0jm7() {
global $wpdb;

$m4is_yqbs57707b9pgq = 3 * HOUR_IN_SECONDS;
$m4is_jrqdhydea8tfkwz4n4g07t6ee = get_option( 'memberium_tables_updated', [] );
$m4is_rkmcn1zd3r3k149h20vfr8z = defined( 'MEMBERIUM_PRODUCT_LIMIT') ? constant( 'MEMBERIUM_PRODUCT_LIMIT' ) : 1000;

$m4is_k7p8pmxsbkqrje3y20 = 'Product';
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_eepkb4x5k = 'Id';
$m4is_e4c15spmbs53rwm0c = '%';
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( $m4is_k7p8pmxsbkqrje3y20,
 false, ['LargeImage']);
$m4is_kyw6mwey3 = 0;
$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3;
$m4is_r2d01p7w70wh2g5 = "Memberium_{$m4is_v4beyw7zqhr3}_Product";

$m4is_j34bmw9dcjexfj1qpz = ['Id' => $m4is_e4c15spmbs53rwm0c];
$m4is_6xj2zq4143f49mqz9p79f7brf3mv = [];
$m4is_wsme5a297xh0v6d5y = self::$m4is_wsme5a297xh0v6d5y;

$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = 'all';
$m4is_kgdwxx4f = 'memberium2/products';
do {
$m4is_tbdh9qb6r6z = $m4is_wsme5a297xh0v6d5y->dsQuery( $m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
if ( ! is_array( $m4is_tbdh9qb6r6z ) ) {
error_log( sprintf( 'Memberium: [error] Product Sync API Error:  Limit = %d,  Error = "%s"',
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_tbdh9qb6r6z ) );
return;
}
$m4is_ek8adjz9yz7wvga34bby56++;
if ( is_array($m4is_tbdh9qb6r6z) ) {
foreach ($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
$m4is_6xj2zq4143f49mqz9p79f7brf3mv[$m4is_bamv772v['Id']] = $m4is_bamv772v;

}
}
} while ( is_array( $m4is_tbdh9qb6r6z ) && count( $m4is_tbdh9qb6r6z ) == $m4is_rkmcn1zd3r3k149h20vfr8z );
unset($m4is_tbdh9qb6r6z,
 $m4is_bamv772v);
if (is_array($m4is_6xj2zq4143f49mqz9p79f7brf3mv) ) {
set_transient( $m4is_r2d01p7w70wh2g5, $m4is_6xj2zq4143f49mqz9p79f7brf3mv,
 $m4is_yqbs57707b9pgq );
set_transient( 'memberium_products_updated', time() );
self::m4is_e2m1bcfjv3swt4e($m4is_6xj2zq4143f49mqz9p79f7brf3mv);

}
else {
$m4is_6xj2zq4143f49mqz9p79f7brf3mv = false;
}
$m4is_jrqdhydea8tfkwz4n4g07t6ee['products'] = time();
update_option( 'memberium_tables_updated',
 $m4is_jrqdhydea8tfkwz4n4g07t6ee, false );
return $m4is_6xj2zq4143f49mqz9p79f7brf3mv;
}
static function m4is_ng73r4m89y2pw0z88( int $m4is_nctf6sc4v5npxn5der7ve5gs ) {
global $wpdb;

$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3;
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_13pkw2zwx02();
$m4is_m3h9r6vhs5rt8w41pn284phf = [];

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `fieldname`, `value` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `appname` = '{$m4is_v4beyw7zqhr3}' AND `id` = {$m4is_nctf6sc4v5npxn5der7ve5gs}";

$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A);
if (is_array($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m)) {
foreach($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m as $m4is_hartbe843crydzh) {
$m4is_m3h9r6vhs5rt8w41pn284phf[$m4is_hartbe843crydzh['fieldname']] = $m4is_hartbe843crydzh['value'];

}
}
return $m4is_m3h9r6vhs5rt8w41pn284phf;
}
static function m4is_haq6awv5zvemdwf5cnhd9g4c() {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id`, `fieldname`, `value` FROM %i WHERE `appname` = %s";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_qfmwhpwvvxybc4w03sbq6h, self::$m4is_v4beyw7zqhr3 );

$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
$m4is_6xj2zq4143f49mqz9p79f7brf3mv = [];
foreach($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
$m4is_6xj2zq4143f49mqz9p79f7brf3mv[$m4is_bamv772v['id']][$m4is_bamv772v['fieldname']] = $m4is_bamv772v['value'];

}
return $m4is_6xj2zq4143f49mqz9p79f7brf3mv;
}

static function m4is_tyze2y8y8kr62pn3hny9( int $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 bool $m4is_w0xr8g2rt6mdac98dewm7q = false ) {
global $wpdb;
$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;

$m4is_kgdwxx4f = 'memberium2/product';
$m4is_yqbs57707b9pgq = 900;
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
$m4is_m3h9r6vhs5rt8w41pn284phf = wp_cache_get( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z,
 $m4is_kgdwxx4f, false, $m4is_6p2tyvq6paj43svrn7zqaykxzy );
if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy === false ) {
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_13pkw2zwx02();

$m4is_v4beyw7zqhr3 = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_pdgd084n380vnszr3r('appname');

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `fieldname`, `value` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `appname` = '{$m4is_v4beyw7zqhr3}' AND `id` = {$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}";

$m4is_tbdh9qb6r6z = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A);
$m4is_m3h9r6vhs5rt8w41pn284phf = [];
if (is_array($m4is_tbdh9qb6r6z)) {
foreach($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_w0xr8g2rt6mdac98dewm7q ? strtolower($m4is_bamv772v['fieldname']) : $m4is_bamv772v['fieldname'];

$m4is_m3h9r6vhs5rt8w41pn284phf[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = $m4is_bamv772v['value'];
}
}
if (! empty($m4is_m3h9r6vhs5rt8w41pn284phf)) {
wp_cache_set($m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z,
 $m4is_m3h9r6vhs5rt8w41pn284phf, $m4is_kgdwxx4f, $m4is_yqbs57707b9pgq);
}
}
return $m4is_m3h9r6vhs5rt8w41pn284phf;
}

static function m4is_gh12fb5596s29bycerd7thz1x9dspt( $m4is_w0xr8g2rt6mdac98dewm7q = false ) {
global $wpdb;

$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = 'all';
$m4is_kgdwxx4f = 'memberium2/products';
$m4is_yqbs57707b9pgq = 900;
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;

$m4is_6xj2zq4143f49mqz9p79f7brf3mv = wp_cache_get( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_kgdwxx4f, false, $m4is_6p2tyvq6paj43svrn7zqaykxzy );

if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy === false ) {
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_13pkw2zwx02();
$m4is_v4beyw7zqhr3 = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_pdgd084n380vnszr3r( 'appname' );

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id`, `fieldname`, `value` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `appname` = '{$m4is_v4beyw7zqhr3}'";

$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
$m4is_6xj2zq4143f49mqz9p79f7brf3mv = [];
foreach( $m4is_tbdh9qb6r6z as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_bamv772v ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_w0xr8g2rt6mdac98dewm7q ? strtolower( $m4is_bamv772v['fieldname'] ) : $m4is_bamv772v['fieldname'];

$m4is_6xj2zq4143f49mqz9p79f7brf3mv[$m4is_bamv772v['id']][$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = $m4is_bamv772v['value'];
unset( $m4is_tbdh9qb6r6z[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] );

}
if (! empty( $m4is_6xj2zq4143f49mqz9p79f7brf3mv ) ) {
wp_cache_set( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_6xj2zq4143f49mqz9p79f7brf3mv,
 $m4is_kgdwxx4f, $m4is_yqbs57707b9pgq );
}
}
return $m4is_6xj2zq4143f49mqz9p79f7brf3mv;
}



private static function m4is_vpayffj749pmtgdb8hxct4m5m92de() : string {
return 'memberium/ecommerce/subscriptionplans';

}
private static function m4is_veb12m6c8wc6dxgehxrgb7k8rgd() : int {
return HOUR_IN_SECONDS * 12;
}

static function m4is_vgzt7cz68yj8() {
$m4is_r2d01p7w70wh2g5 = self::m4is_vpayffj749pmtgdb8hxct4m5m92de();

$m4is_y8932443qmxht76g140xsenedgc = self::m4is_veb12m6c8wc6dxgehxrgb7k8rgd();
$m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x = get_transient( $m4is_r2d01p7w70wh2g5 );

if ( $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x === false ) {
$m4is_k7p8pmxsbkqrje3y20 = 'SubscriptionPlan';
$m4is_ak30nyyk0g6ax1qeac6fy38tk7 = 1000;

$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x = [];
$m4is_j34bmw9dcjexfj1qpz = [
'Id' => '%'
];
do {
$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2( $m4is_k7p8pmxsbkqrje3y20,
 $m4is_ak30nyyk0g6ax1qeac6fy38tk7, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz );
$m4is_x6ktf52x8 = is_array( $m4is_tbdh9qb6r6z ) ? count( $m4is_tbdh9qb6r6z ) : 0;

$m4is_ek8adjz9yz7wvga34bby56 = $m4is_ek8adjz9yz7wvga34bby56 + 1;
if ( $m4is_x6ktf52x8 ) {
foreach ( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_bamv772v['Id'];

$m4is_t9apj310jvzjwbj79m4ysmrqaav = (int) $m4is_bamv772v['Cycle'];
$m4is_vker2jakq51b = (int) $m4is_bamv772v['Frequency'];
$m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_bamv772v;

if ( $m4is_t9apj310jvzjwbj79m4ysmrqaav == 6 ) {
$m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['FrequencyWord'] = ( $m4is_vker2jakq51b == 1 ) ? 'Day' : $m4is_vker2jakq51b . ' Days';

}
elseif ( $m4is_t9apj310jvzjwbj79m4ysmrqaav == 3 ) {
$m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['FrequencyWord'] = ( $m4is_vker2jakq51b == 1 ) ? 'Week' : $m4is_vker2jakq51b . ' Weeks';

}
elseif ( $m4is_t9apj310jvzjwbj79m4ysmrqaav == 2 ) {
$m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['FrequencyWord'] = ( $m4is_vker2jakq51b == 1 ) ? 'Month' : $m4is_vker2jakq51b . ' Months';

}
elseif ( $m4is_t9apj310jvzjwbj79m4ysmrqaav == 1 ) {
$m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['FrequencyWord'] = ( $m4is_vker2jakq51b == 1 ) ? 'Year' : $m4is_vker2jakq51b . ' Years';

}
}
}
} while ( $m4is_x6ktf52x8 === $m4is_ak30nyyk0g6ax1qeac6fy38tk7 );
if ( is_array( $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x ) ) {
set_transient( $m4is_r2d01p7w70wh2g5,
 $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x, $m4is_y8932443qmxht76g140xsenedgc);
$m4is_jrqdhydea8tfkwz4n4g07t6ee = get_option( 'memberium_tables_updated',
 [] );
$m4is_jrqdhydea8tfkwz4n4g07t6ee['subscriptionplans'] = time();
update_option( 'memberium_tables_updated', $m4is_jrqdhydea8tfkwz4n4g07t6ee,
 false );
}
}
return $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x;
}




public static function m4is_05djdppw() : int {
global $wpdb;
if ( ! self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'sync_ecommerce', false ) ) {
return 0;
}
$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
$m4is_fn871wsn6qbb = get_option( 'memberium_tables_updated',
 [] );
$m4is_7yaq0kttm = self::m4is_syjrxw7rw3s();

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT MAX(`lastupdated`) FROM `{$m4is_7yaq0kttm}` WHERE `appname` = '{$m4is_v4beyw7zqhr3}';";

$m4is_mhr5r8dya7new0rmymjx6p2bbbsaqj = $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
if ( ! $m4is_mhr5r8dya7new0rmymjx6p2bbbsaqj ) {
$m4is_mhr5r8dya7new0rmymjx6p2bbbsaqj = '1969-01-20T00:00:00';

}

$m4is_k7p8pmxsbkqrje3y20 = 'Invoice';
$m4is_rkmcn1zd3r3k149h20vfr8z = 400;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_kyw6mwey3 = 0;

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n($m4is_k7p8pmxsbkqrje3y20, false);
$m4is_j34bmw9dcjexfj1qpz = [
'LastUpdated' =>
 "~>=~ {$m4is_mhr5r8dya7new0rmymjx6p2bbbsaqj}"
];
$m4is_83artrg1g1h = [
'CreditStatus' => 0,
'Description' => '',
'InvoiceTotal' =>
 0,
'InvoiceType' => '',
'JobId' => 0,
'LeadAffiliateId' => 0,
'PayPlanStatus' => 0,
'PayStatus' => 0,
'ProductSold' => '',
'PromoCode' =>
 '',
'RefundStatus' => 0,
'Synced' => 0,
'TotalDue' => 0,
'TotalPaid' => 0,
];
$m4is_g3mtt8bwg4bqfq1verwx663sn3p = [
'appname' => '%s',

'contactid' => '%d',
'creditstatus' => '%s',
'datecreated' => '%s',
'description' => '%s',
'id' => '%d',
'invoicetotal' => '%d',
'invoicetype' =>
 '%s',
'jobid' => '%d',
'lastupdated' => '%s',
'leadaffiliateid' => '%s',
'payplanstatus' => '%s',
'paystatus' => '%s',
'productsold' =>
 '%s',
'promocode' => '%s',
'refundstatus' => '%s',
'totaldue' => '%s',
'totalpaid' => '%s',
];
$m4is_41vawek97jzqyw2fzbfxnancfb08 = '`' . implode( '`, `',
 array_keys( $m4is_g3mtt8bwg4bqfq1verwx663sn3p )) . '`';
$m4is_td2hchfe4p3zevd13v9q = "'" . implode( "', '", $m4is_g3mtt8bwg4bqfq1verwx663sn3p ) . "'";

$m4is_m02p5bdar = "INSERT INTO `{$m4is_7yaq0kttm}` ( {$m4is_41vawek97jzqyw2fzbfxnancfb08} ) VALUES ( {$m4is_td2hchfe4p3zevd13v9q} )";

$m4is_hawz6s19vcsggrmsphtr9nm = "DELETE FROM %i WHERE `appname` = %s AND `id` = %d";
do {
$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj($m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'LastUpdated',
 true);
$m4is_x6ktf52x8 = is_array( $m4is_tbdh9qb6r6z) ? count( $m4is_tbdh9qb6r6z ) : 0;
if ( $m4is_x6ktf52x8 ) {
foreach ($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
$m4is_bamv772v = array_merge( $m4is_83artrg1g1h,
 $m4is_bamv772v );
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) $m4is_bamv772v['Id'];
$m4is_ad0f7cwcvtgmr9qjdc30 = isset( $m4is_bamv772v['LastUpdated'] ) ? $m4is_bamv772v['LastUpdated'] : $m4is_bamv772v['DateCreated'];

$m4is_qn8zrcajgyj3mcwf8wcz06qfmm0g61z = [
'appname' => $m4is_v4beyw7zqhr3,
'contactid' => $m4is_bamv772v['ContactId'],
'creditstatus' =>
 $m4is_bamv772v['CreditStatus'],
'datecreated' => date('Y-m-d h:i:s', strtotime($m4is_bamv772v['DateCreated']) ),
'description' => $m4is_bamv772v['Description'],

'id' => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'invoicetotal' => $m4is_bamv772v['InvoiceTotal'],
'invoicetype' => $m4is_bamv772v['InvoiceType'],

'jobid' => $m4is_bamv772v['JobId'],
'lastupdated' => date('Y-m-d h:i:s', strtotime($m4is_ad0f7cwcvtgmr9qjdc30) ),
'leadaffiliateid' =>
 $m4is_bamv772v['LeadAffiliateId'],
'payplanstatus' => $m4is_bamv772v['PayPlanStatus'],
'paystatus' => $m4is_bamv772v['PayStatus'],

'productsold' => $m4is_bamv772v['ProductSold'],
'promocode' => isset($m4is_bamv772v['PromoCode']) ? $m4is_bamv772v['PromoCode'] : '',

'refundstatus' => $m4is_bamv772v['RefundStatus'],
'totaldue' => $m4is_bamv772v['TotalDue'],
'totalpaid' => $m4is_bamv772v['TotalPaid'],

];
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_hawz6s19vcsggrmsphtr9nm, $m4is_7yaq0kttm, $m4is_v4beyw7zqhr3, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_m02p5bdar, $m4is_qn8zrcajgyj3mcwf8wcz06qfmm0g61z );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
}
$m4is_ek8adjz9yz7wvga34bby56++;
$m4is_kyw6mwey3 = $m4is_kyw6mwey3 + $m4is_x6ktf52x8;

} while ( $m4is_x6ktf52x8 == $m4is_rkmcn1zd3r3k149h20vfr8z);
$m4is_fn871wsn6qbb['invoices'] = time();
update_option('memberium_tables_updated',
 $m4is_fn871wsn6qbb, false);
return (int) $m4is_kyw6mwey3;
}



public static function m4is_bh0t5n9vbqap5vhzh5rg7k3rpj62e( int $m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y ) {
if (! empty($m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y) ) {
$m4is_j34bmw9dcjexfj1qpz = [
'OriginatingOrderId' =>
 $m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y
];
$m4is_7b2yfzk0054 = [
'Id'
];
$m4is_yggq5j195mnp46m3zfr = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2('RecurringOrder',
 998, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_7b2yfzk0054);

if (is_array($m4is_yggq5j195mnp46m3zfr) ) {
foreach($m4is_yggq5j195mnp46m3zfr as $m4is_ch8hrhh6sba02hkj735k3) {
$m4is_hartbe843crydzh = self::$m4is_132xe588j->dsDelete('RecurringOrder',
 (int) $m4is_ch8hrhh6sba02hkj735k3['Id']);
}
}
}
}

public static function m4is_g83b7qrjh48vnn6aqzrvk9jkz() {
$m4is_rkmcn1zd3r3k149h20vfr8z = 999;

$m4is_k7p8pmxsbkqrje3y20 = 'RecurringOrder';
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_eepkb4x5k = 'Id';
$m4is_e4c15spmbs53rwm0c = '%';

$m4is_kyw6mwey3 = 0;
$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3;
$m4is_htz6jhd987mvxr5j6w = [];
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'ContactId',

'EndDate',
'Id',
'ReasonStopped',
'Status',
];
$m4is_j34bmw9dcjexfj1qpz = [
'Status' => 'Active',
'EndDate' => '~<=~' . date('Y-m-d'),

];
do {
$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2($m4is_k7p8pmxsbkqrje3y20, $m4is_rkmcn1zd3r3k149h20vfr8z,
 $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5);
if (! empty($m4is_tbdh9qb6r6z) ) {
foreach ($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
$m4is_bamv772v['EndDate'] = (isset($m4is_bamv772v['EndDate']) ) ? $m4is_bamv772v['EndDate'] : '';

$m4is_bamv772v['ReasonStopped'] = (isset($m4is_bamv772v['ReasonStopped']) ) ? trim($m4is_bamv772v['ReasonStopped']) : '';
if ($m4is_bamv772v['EndDate'] > '' && $m4is_bamv772v['EndDate'] < date('Ymd\T00:00:00') ) {
$m4is_6g5tw04a9 = [];

if ($m4is_bamv772v['ReasonStopped'] == '') {
$m4is_6g5tw04a9['ReasonStopped'] = "End Date Passed.\nAutoEnded by Memberium";
}
$m4is_6g5tw04a9['EndDate'] = date('Ymd\Th:i:s');

$m4is_6g5tw04a9['Status'] = 'Inactive';
m4is_xm67qjyegqdeb9wqcm::m4is_5smzakqeahg0vdxh35zwmhx7kj01s8('RecurringOrder', (int) $m4is_bamv772v['Id'],
 $m4is_6g5tw04a9);
}
}
}
$m4is_ek8adjz9yz7wvga34bby56++;
} while (count($m4is_tbdh9qb6r6z) == $m4is_rkmcn1zd3r3k149h20vfr8z);
unset($m4is_tbdh9qb6r6z,
 $m4is_bamv772v);
return $m4is_htz6jhd987mvxr5j6w;
}
}