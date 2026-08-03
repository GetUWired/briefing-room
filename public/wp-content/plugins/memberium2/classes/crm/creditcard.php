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

m4is_kkk64g440mhf2xhxafr::m4is_z6c3r724qhd();
final class m4is_kkk64g440mhf2xhxafr {
private static $m4is_132xe588j;
private static $m4is_v4beyw7zqhr3;

private static $m4is_wsme5a297xh0v6d5y;
private const CREDITCARD_CACHE_TTL = 900;
private const PAYMENT_SESSION_TTL = ( 45 * MINUTE_IN_SECONDS );

private const PAYMENT_TOKEN_KEY = 'memberium/payment/token';

static function m4is_z6c3r724qhd() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();

}

static function m4is_apt7yd3e52jec90qacr( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return sprintf( 'memberium/creditcards/%s/%d',
 self::$m4is_v4beyw7zqhr3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}

public static function m4is_tkz54xmd9vkw5j8rt1w0a( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : bool {
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_r2d01p7w70wh2g5 = self::m4is_apt7yd3e52jec90qacr( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

delete_transient( $m4is_r2d01p7w70wh2g5 );
return true;
}
return false;
}

public static function m4is_s7ym6t350bwzqesq3cmwmntrn7( array $m4is_yfwwtft0q94j35s0f4a7acqhb ) {
if ( empty( $m4is_yfwwtft0q94j35s0f4a7acqhb ) ) {
return [];

}
return end( $m4is_yfwwtft0q94j35s0f4a7acqhb );
}

public static function m4is_3b38bp8fj87vnckt9cjnb378cjy( int $m4is_xnr85v7h4qmw ) : string {
$m4is_cvmvsj84amka140xnjgkm5rrrfqch = [
0 =>
 'Unknown', 
1 => 'Error', 
2 => 'Deleted', 
3 => 'OK', 
4 => 'Inactive', 
];
return key_exists( $m4is_xnr85v7h4qmw, $m4is_cvmvsj84amka140xnjgkm5rrrfqch ) ? $m4is_cvmvsj84amka140xnjgkm5rrrfqch[$m4is_xnr85v7h4qmw] : 'Unknown';

}

public static function m4is_crk55yxpgg3rab77w8a( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, int $m4is_yrsthh0s4s62mfk9 = 3 ) : array {
$m4is_yfwwtft0q94j35s0f4a7acqhb = [];

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return $m4is_yfwwtft0q94j35s0f4a7acqhb;
}
$m4is_r2d01p7w70wh2g5 = self::m4is_apt7yd3e52jec90qacr( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_yfwwtft0q94j35s0f4a7acqhb = get_transient( $m4is_r2d01p7w70wh2g5 );
$m4is_v9txc27f0cfyb34req = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

if ( $m4is_yfwwtft0q94j35s0f4a7acqhb === false ) {
$m4is_yfwwtft0q94j35s0f4a7acqhb = self::m4is_y7mprhvnc2n81f5y03ejk1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
if ( $m4is_yrsthh0s4s62mfk9 >= 0 ) {
foreach( $m4is_yfwwtft0q94j35s0f4a7acqhb as $m4is_j8j55t8dz79m7 => $m4is_sns6r4z7z662q6ct9aqvw81ch29 ) {
$m4is_gkx3en0qmpkr67 = (int) $m4is_sns6r4z7z662q6ct9aqvw81ch29['Status'];

if ( $m4is_gkx3en0qmpkr67 <> $m4is_yrsthh0s4s62mfk9 ) {
unset( $m4is_yfwwtft0q94j35s0f4a7acqhb[$m4is_j8j55t8dz79m7] );
}
}
}
return $m4is_yfwwtft0q94j35s0f4a7acqhb;

}

public static function m4is_y7mprhvnc2n81f5y03ejk1( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_r2d01p7w70wh2g5 = self::m4is_apt7yd3e52jec90qacr( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_y8932443qmxht76g140xsenedgc = 300;
$m4is_yfwwtft0q94j35s0f4a7acqhb = get_transient( $m4is_r2d01p7w70wh2g5 );
if ( $m4is_yfwwtft0q94j35s0f4a7acqhb === false ) {
$m4is_yfwwtft0q94j35s0f4a7acqhb = [];

$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_kyw6mwey3 = 0;
$m4is_k7p8pmxsbkqrje3y20 = 'CreditCard';

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( $m4is_k7p8pmxsbkqrje3y20, false );
$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' =>
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,

];
do {
$m4is_tbdh9qb6r6z = self::$m4is_wsme5a297xh0v6d5y->dsQueryOrderBy( $m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', true );

if ( is_string( $m4is_tbdh9qb6r6z ) ) {
error_log( 'Memberium: [error] Credit Card Sync API Error - ' . $m4is_tbdh9qb6r6z );
break;

}
$m4is_7g9y793jjckyb = is_array( $m4is_tbdh9qb6r6z ) ? count( $m4is_tbdh9qb6r6z ) : 0;
if ( is_array( $m4is_tbdh9qb6r6z ) ) {
foreach ( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_yfwwtft0q94j35s0f4a7acqhb[$m4is_bamv772v['Id']] = $m4is_bamv772v;

}
$m4is_ek8adjz9yz7wvga34bby56++;
$m4is_kyw6mwey3 = $m4is_kyw6mwey3 + $m4is_7g9y793jjckyb;
}
} while ( $m4is_7g9y793jjckyb == $m4is_rkmcn1zd3r3k149h20vfr8z );

if ( is_array( $m4is_yfwwtft0q94j35s0f4a7acqhb ) ) {
set_transient( $m4is_r2d01p7w70wh2g5, $m4is_yfwwtft0q94j35s0f4a7acqhb, self::CREDITCARD_CACHE_TTL );

}
}
return $m4is_yfwwtft0q94j35s0f4a7acqhb;
}
private static function m4is_7tbccnpva01kd( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : string {
$m4is_kt7d4nyqvdzvsq7t = self::$m4is_132xe588j->m4is_7chmqqcbkgf4jft8p56sbp6ss();

$m4is_zq1jb1kf = $m4is_kt7d4nyqvdzvsq7t->m4is_7tbccnpva01kd( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
return (string ) $m4is_zq1jb1kf;

}
private static function m4is_9t7z1eg521jb5y88s09aya07( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, string $m4is_s0hfpx2zktwa0hangkfqn3 ) : void {
if ( empty( $m4is_s0hfpx2zktwa0hangkfqn3 ) || empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return;

}
$m4is_v9nr6g7p5c4k6m52yeapt76y98qxnb = [
'expiration' => time() + self::PAYMENT_SESSION_TTL,
'token' => $m4is_s0hfpx2zktwa0hangkfqn3
];

update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, self::PAYMENT_TOKEN_KEY, $m4is_v9nr6g7p5c4k6m52yeapt76y98qxnb );
}

public static function m4is_p98shwjcpf( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : string {
if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return '';

}
$m4is_bgbv0pvy1y0ybpq0ycrs1bx7s = get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, self::PAYMENT_TOKEN_KEY, true );
$m4is_s0hfpx2zktwa0hangkfqn3 = '';

if ( is_array( $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s ) ) {
$m4is_rpa6825s4fhmzmjjxpap05q92nf198x = $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s['expiration'] ?? 0;

if ( $m4is_rpa6825s4fhmzmjjxpap05q92nf198x > time() ) {
$m4is_s0hfpx2zktwa0hangkfqn3 = $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s['token'] ?? '';

}
}
if ( empty( $m4is_s0hfpx2zktwa0hangkfqn3 ) ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_s0hfpx2zktwa0hangkfqn3 = self::m4is_7tbccnpva01kd( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::m4is_9t7z1eg521jb5y88s09aya07( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_s0hfpx2zktwa0hangkfqn3 );
}
return (string ) $m4is_s0hfpx2zktwa0hangkfqn3;
}

public static function m4is_5p5x4mr03a6kjtd9sbtjkctk6bg130dh( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 int $m4is_22txjjt01m3he21xzz ) : int {
if ( empty( $m4is_22txjjt01m3he21xzz ) || empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return 0;

}
$m4is_kt7d4nyqvdzvsq7t = self::$m4is_132xe588j->m4is_7chmqqcbkgf4jft8p56sbp6ss();
$m4is_yfwwtft0q94j35s0f4a7acqhb = $m4is_kt7d4nyqvdzvsq7t->m4is_znd8myfxtp0y5jrhxttf4jrpb9y( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( ! is_array( $m4is_yfwwtft0q94j35s0f4a7acqhb ) || empty( $m4is_yfwwtft0q94j35s0f4a7acqhb ) ) {
return 0;
}
foreach ( $m4is_yfwwtft0q94j35s0f4a7acqhb as $m4is_sns6r4z7z662q6ct9aqvw81ch29 ) {
if ( ( $m4is_sns6r4z7z662q6ct9aqvw81ch29->payment_method_id ?? 0 ) == $m4is_22txjjt01m3he21xzz ) {
return (int) $m4is_sns6r4z7z662q6ct9aqvw81ch29->id ?? 0;

}
}
return 0;
}
}
