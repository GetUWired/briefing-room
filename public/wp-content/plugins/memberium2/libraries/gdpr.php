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

final class m4is_4s5smeaz895h0 {
private static m4is_6y9612z4hjd6fzpap4r5n853641m1jc $m4is_132xe588j;
private static string $m4is_v4beyw7zqhr3;


private function __construct() {

}

public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
}




public static function m4is_phah0g9pc7yy06n1cks3wdhc6vd( array $m4is_7wq23pkf02cv6jy517x52qban0egf ) : array {
$m4is_7wq23pkf02cv6jy517x52qban0egf['memberium2'] = [
'exporter_friendly_name' =>
 'Memberium',
'callback' => ['m4is_4s5smeaz895h0', 'm4is_0xwrmv05afhqv'],
];
return $m4is_7wq23pkf02cv6jy517x52qban0egf;
}

public static function m4is_0emjgmtgfv2( array $m4is_rq9zg5kykxvgqq0r9820j0b92ty7ak ) : array {
$m4is_rq9zg5kykxvgqq0r9820j0b92ty7ak['memberium2'] = [
'eraser_friendly_name' =>
 'Memberium',
'callback' => ['m4is_4s5smeaz895h0', 'm4is_4yfq87cn5rw3dy67nepb0kxa4'],
];
return $m4is_rq9zg5kykxvgqq0r9820j0b92ty7ak;

}

public static function m4is_0xwrmv05afhqv( string $m4is_zxwt8y3szyy1aenkh, int $m4is_ek8adjz9yz7wvga34bby56 = 1 ): array {
global $wpdb;

$m4is_zxwt8y3szyy1aenkh = strtolower(trim ($m4is_zxwt8y3szyy1aenkh) );
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email',
 $m4is_zxwt8y3szyy1aenkh);
if (! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 instanceof WP_User) {
return [
'data' => [],
'done' => true,

];
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_wk4dh1rnd3wmwvsggq51nhn87);

$m4is_ek8adjz9yz7wvga34bby56 = (int) $m4is_ek8adjz9yz7wvga34bby56;
$m4is_11bteyqawp58gb0h7a9k0qad1c3p = [];
$m4is_d60kn1d3yvprp62rs332 = [];


$m4is_0kdm2zprhs5b1 = [
'login_ip_address' => 'Login IP Address',
'last_login_time' => 'Last Login Time',
'login_count' => 'Login Count',

];
foreach( (array) $m4is_0kdm2zprhs5b1 as $m4is_pk98f5nk => $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0) {
$m4is_29gzevpx8rbkp = get_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_pk98f5nk, true);
if (! empty($m4is_29gzevpx8rbkp) ) {
$m4is_d60kn1d3yvprp62rs332[] = [
'name' => $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0,

'value' => $m4is_29gzevpx8rbkp,
];
}
}

if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$m4is_cyg7rcfhzagmm5v = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

if (! empty($m4is_cyg7rcfhzagmm5v) ) {
foreach($m4is_cyg7rcfhzagmm5v as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp) {
if (! empty($m4is_29gzevpx8rbkp) ) {
$m4is_d60kn1d3yvprp62rs332[] = [
'name' =>
 $m4is_bqhtspcavhb01spmfd3x,
'value' => $m4is_29gzevpx8rbkp,
];
}
}
}
}
$m4is_4dd6m7vsabfbpdkyh783ct657ecx = 'memberium';
$m4is_8has47db6ncrj7tw8kvqz8g = 'Memberium';

$m4is_86p36xtmcsb7bh6kvc6nr5eg0 = "memberium-user";
$m4is_11bteyqawp58gb0h7a9k0qad1c3p[] = [
'group_id' => $m4is_4dd6m7vsabfbpdkyh783ct657ecx,

'group_label' => $m4is_8has47db6ncrj7tw8kvqz8g,
'item_id' => $m4is_86p36xtmcsb7bh6kvc6nr5eg0,
'data' => $m4is_d60kn1d3yvprp62rs332,

];
$m4is_d60kn1d3yvprp62rs332 = [];
$m4is_5rbenkpt1v7xby2cknbs7 = 'SELECT DISTINCT `ipaddress` FROM `' . m4is_an0pxqdph6ax26586c::m4is_0sbrs1vk06py44g() . '` WHERE `username` = %s ';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_zxwt8y3szyy1aenkh);
$m4is_tbdh9qb6r6z = $wpdb->get_col($m4is_5rbenkpt1v7xby2cknbs7);

if (is_array($m4is_tbdh9qb6r6z) && ! empty($m4is_tbdh9qb6r6z) ) {
foreach($m4is_tbdh9qb6r6z as $row) {
$m4is_d60kn1d3yvprp62rs332[] = [
'name' =>
 'IP Address',
'value' => $row
];
}
$m4is_4dd6m7vsabfbpdkyh783ct657ecx = 'memberium-ip-history';
$m4is_8has47db6ncrj7tw8kvqz8g = 'Memberium IP History';

$m4is_86p36xtmcsb7bh6kvc6nr5eg0 = "memberium-ip-history";
$m4is_11bteyqawp58gb0h7a9k0qad1c3p[] = [
'group_id' => $m4is_4dd6m7vsabfbpdkyh783ct657ecx,

'group_label' => $m4is_8has47db6ncrj7tw8kvqz8g,
'item_id' => $m4is_86p36xtmcsb7bh6kvc6nr5eg0,
'data' => $m4is_d60kn1d3yvprp62rs332,

];
}
$m4is_w1fhbpeqez6r9nv7bj366wa3esavqkwe = true;
return [
'data' => $m4is_11bteyqawp58gb0h7a9k0qad1c3p,
'done' => $m4is_w1fhbpeqez6r9nv7bj366wa3esavqkwe,

];
}

static function m4is_4yfq87cn5rw3dy67nepb0kxa4( string $m4is_zxwt8y3szyy1aenkh, int $m4is_ek8adjz9yz7wvga34bby56 = 1 ): array {
global $wpdb;

$m4is_zxwt8y3szyy1aenkh = strtolower( trim( $m4is_zxwt8y3szyy1aenkh ) );
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email',
 $m4is_zxwt8y3szyy1aenkh );
if (! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 instanceof WP_User) {
return [
'done' => true,
'items_removed' =>
 0,
'items_retained' => false,
'messages' => ['User not found.'],
];
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;

$m4is_87srny2zb1jbe9mq1fv920 = false;
$m4is_ek8adjz9yz7wvga34bby56 = (int) $m4is_ek8adjz9yz7wvga34bby56;
$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = m4is_amz58dmg8j7e898bj8r8b1::m4is_qk9eqwy5wj( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
self::m4is_sp4tbas9mxzfsa12w7p0gw( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_5rbenkpt1v7xby2cknbs7 = 'DELETE FROM %i WHERE `appname` = %s AND `id` = %d ';
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3(), self::$m4is_v4beyw7zqhr3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$m4is_87srny2zb1jbe9mq1fv920 += $wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);


$m4is_5rbenkpt1v7xby2cknbs7 = 'DELETE FROM %i WHERE `appname` = %s AND `contactid` = %d ';
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7,
 m4is_0ddg4zyk7dn8eg0283::m4is_nm686mgj6zffggzes4k(), self::$m4is_v4beyw7zqhr3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
$m4is_87srny2zb1jbe9mq1fv920 += $wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);



if ( $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 ) {
$m4is_5rbenkpt1v7xby2cknbs7 = 'DELETE FROM %i WHERE `appname` = %s AND `id` = %d ';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, m4is_amz58dmg8j7e898bj8r8b1::m4is_rr7ynbdyf6mev98x20sv1n1d0kkxt(),
 self::$m4is_v4beyw7zqhr3, $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9);
$m4is_87srny2zb1jbe9mq1fv920 += $wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);

}
}
if ($m4is_wk4dh1rnd3wmwvsggq51nhn87) {
$m4is_5rbenkpt1v7xby2cknbs7 = 'DELETE FROM %i WHERE `userid` = %d ';
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 constant( 'MEMBERIUM_DB_PAGETRACKING' ), $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_87srny2zb1jbe9mq1fv920 += $wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);

}

$m4is_5rbenkpt1v7xby2cknbs7 = 'DELETE FROM %i WHERE `appname` = %s AND `username` = %s';
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7,
 m4is_an0pxqdph6ax26586c::m4is_0sbrs1vk06py44g(), $m4is_v4beyw7zqhr3, $m4is_zxwt8y3szyy1aenkh);
$m4is_87srny2zb1jbe9mq1fv920 += $wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);


return [
'done' => true,
'items_removed' => $m4is_87srny2zb1jbe9mq1fv920,
'items_retained' => false,
'messages' => [],
];
}

private static function m4is_sp4tbas9mxzfsa12w7p0gw( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : bool {
$m4is_hf6ctsm2pnexk = (int) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'gdpr_deleted_tag', 0 );
if ( $m4is_hf6ctsm2pnexk ) {
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_hf6ctsm2pnexk, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
return true;
}

}
