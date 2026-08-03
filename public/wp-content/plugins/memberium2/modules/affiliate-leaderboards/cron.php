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


class_exists( 'm4is_ceb204yxgttkb1dvyrsjh2ww7qvw3' ) || die();

final class m4is_0jwc22e11j9k0y54c5 {
private static m4is_6y9612z4hjd6fzpap4r5n853641m1jc $m4is_132xe588j;
private static m4is_ceb204yxgttkb1dvyrsjh2ww7qvw3 $m4is_80shtdcs36k;

private static string $m4is_v4beyw7zqhr3;
private static string $m4is_egm0frk4dhxzgq5rzry34q5v79t2;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
}
static function m4is_rxm0fnk9thg7j() {
self::$m4is_egm0frk4dhxzgq5rzry34q5v79t2 = date( 'Y-m-d' );

self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');

self::$m4is_80shtdcs36k = m4is_ceb204yxgttkb1dvyrsjh2ww7qvw3::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$m4is_63jp3myxhpk1eyb606fb = self::$m4is_80shtdcs36k->m4is_eb4a3nfe63889q1ndrs();

foreach( $m4is_63jp3myxhpk1eyb606fb as $m4is_j8j55t8dz79m7 => $m4is_fh91430wnqcvjs3 ) {
$m4is_9mn1y9evr0g40fpt = [];
if ( empty( $m4is_fh91430wnqcvjs3['cache'] ) || ( $m4is_fh91430wnqcvjs3['start_date'] <= self::$m4is_egm0frk4dhxzgq5rzry34q5v79t2 && $m4is_fh91430wnqcvjs3['end_date'] >= self::$m4is_egm0frk4dhxzgq5rzry34q5v79t2 ) ) {
$m4is_63jp3myxhpk1eyb606fb[$m4is_j8j55t8dz79m7] = self::m4is_czd2m951nzcbhcdmw78g7z5qz( $m4is_fh91430wnqcvjs3 );

}
}
self::$m4is_80shtdcs36k->m4is_9eb007p5xr35apr5dw1wex6t7tbdg1a( $m4is_63jp3myxhpk1eyb606fb );
}
static function m4is_xhh3rj6q6q7d3n7v8cvxfvnbpby() {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = 'SELECT `id` FROM %i WHERE (`appname` = %s AND `fieldname` = "AffName" ) AND ( `value` LIKE "!%%" ) OR ( `value` LIKE "(INTERNAL)%%" );';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, m4is_amz58dmg8j7e898bj8r8b1::m4is_rr7ynbdyf6mev98x20sv1n1d0kkxt(),
 self::$m4is_v4beyw7zqhr3 );
$m4is_vgk6mp1a6dfx3jegwq8p6b42 = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
return is_array($m4is_vgk6mp1a6dfx3jegwq8p6b42) ? $m4is_vgk6mp1a6dfx3jegwq8p6b42 : [];

}
static function m4is_czd2m951nzcbhcdmw78g7z5qz( $m4is_fh91430wnqcvjs3 ) {
$m4is_9mn1y9evr0g40fpt = [];
if ( $m4is_fh91430wnqcvjs3['type'] == 'leads' ) {
$m4is_9mn1y9evr0g40fpt = self::m4is_p1cex6j7xacr7xfferyaqjqdsvc57gd( $m4is_fh91430wnqcvjs3 );

}
elseif ( in_array( $m4is_fh91430wnqcvjs3['type'], ['dollars', 'invoices'] ) ) {
$m4is_9mn1y9evr0g40fpt = self::m4is_g1544eda6v4sxv( $m4is_fh91430wnqcvjs3 );

}
$m4is_fh91430wnqcvjs3['cache'] = $m4is_9mn1y9evr0g40fpt;
$m4is_fh91430wnqcvjs3['last_updated'] = time();
return $m4is_fh91430wnqcvjs3;

}
static function m4is_p1cex6j7xacr7xfferyaqjqdsvc57gd( $m4is_fh91430wnqcvjs3 ) {
$m4is_nya56enr3pxvxvd5qf = self::m4is_xhh3rj6q6q7d3n7v8cvxfvnbpby();


$m4is_rx7sp5gnbh043vnyj = date( 'Ymd\T23:59:59', strtotime( $m4is_fh91430wnqcvjs3['end_date'] ) );
$m4is_9mn1y9evr0g40fpt = [];
$m4is_k7p8pmxsbkqrje3y20 = 'Referral';

$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_kyw6mwey3 = 0;
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'AffiliateId',

'ContactId',
'DateSet',
];
$m4is_j34bmw9dcjexfj1qpz = [
'DateSet' => '~>=~ ' . $m4is_fh91430wnqcvjs3['start_date'],
];
do {
$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj( $m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'DateSet',
 true );
$m4is_tbdh9qb6r6z = is_array( $m4is_tbdh9qb6r6z ) ? $m4is_tbdh9qb6r6z : [];
$m4is_x6ktf52x8 = count( $m4is_tbdh9qb6r6z );
foreach( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
if ( $m4is_bamv772v['DateSet'] <= $m4is_rx7sp5gnbh043vnyj ) {
if ( ! in_array( $m4is_bamv772v['AffiliateId'],
 $m4is_nya56enr3pxvxvd5qf ) ) {
$m4is_9mn1y9evr0g40fpt[$m4is_bamv772v['AffiliateId']] = isset( $m4is_9mn1y9evr0g40fpt[$m4is_bamv772v['AffiliateId']] ) ? $m4is_9mn1y9evr0g40fpt[$m4is_bamv772v['AffiliateId']]++ : 1;

}
}
}
$m4is_ek8adjz9yz7wvga34bby56++;
$m4is_kyw6mwey3 = $m4is_kyw6mwey3 + $m4is_x6ktf52x8;
} while ( $m4is_x6ktf52x8 == $m4is_rkmcn1zd3r3k149h20vfr8z );

arsort( $m4is_9mn1y9evr0g40fpt );
unset( $m4is_9mn1y9evr0g40fpt[0] );
return array_slice( $m4is_9mn1y9evr0g40fpt, 0, $m4is_fh91430wnqcvjs3['slots'],
 true );
}
static function m4is_g1544eda6v4sxv( $m4is_fh91430wnqcvjs3 ) {

$m4is_nya56enr3pxvxvd5qf = self::m4is_xhh3rj6q6q7d3n7v8cvxfvnbpby();

$m4is_rx7sp5gnbh043vnyj = date( 'Ymd\T23:59:59', strtotime( $m4is_fh91430wnqcvjs3['end_date'] ) );
$m4is_9mn1y9evr0g40fpt = [];
$m4is_sm2bbv9e1qax7vn1s7d793mrb9tr8 = [];

$m4is_k7p8pmxsbkqrje3y20 = 'Invoice';
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_3zs9zsdpj06cn7gqcywpbn = array_filter( explode( ',',
 $m4is_fh91430wnqcvjs3['products'] ) );
$m4is_kyw6mwey3 = 0;
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'AffiliateId',
'LeadAffiliateId',
'DateCreated',

'InvoiceTotal',
'ProductSold',
];
$m4is_j34bmw9dcjexfj1qpz = [
'DateCreated' => '~>=~ ' . date( 'Ymd\This', strtotime( $m4is_fh91430wnqcvjs3['start_date'] ) ),

'PayStatus' => 1,
'RefundStatus' => 0,
];
do {
$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj( $m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'DateCreated',
 true );
$m4is_tbdh9qb6r6z = is_array( $m4is_tbdh9qb6r6z ) ? $m4is_tbdh9qb6r6z : [];
$m4is_x6ktf52x8 = count( $m4is_tbdh9qb6r6z );
foreach( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_f2ezg8j5bqae2wnx2w2 = array_filter( explode( ',',
 $m4is_bamv772v['ProductSold'] ) );
$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = (int) $m4is_bamv772v['AffiliateId'];
$m4is_ab16kbzy14jeh = (int) $m4is_bamv772v['LeadAffiliateId'];

$m4is_0864dacae86e26c2nevtsd8y1 = (bool) ( $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 > 0 || $m4is_ab16kbzy14jeh > 0 );
$m4is_0864dacae86e26c2nevtsd8y1 = $m4is_0864dacae86e26c2nevtsd8y1 && ( $m4is_bamv772v['DateCreated'] < $m4is_rx7sp5gnbh043vnyj );

$m4is_0864dacae86e26c2nevtsd8y1 = $m4is_0864dacae86e26c2nevtsd8y1 && ( ! in_array( $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9, $m4is_nya56enr3pxvxvd5qf ) );

if ( $m4is_0864dacae86e26c2nevtsd8y1 && ! empty( $m4is_3zs9zsdpj06cn7gqcywpbn ) ) {
$m4is_8nfshp2akm3wxv7 = array_intersect( $m4is_3zs9zsdpj06cn7gqcywpbn,
 $m4is_f2ezg8j5bqae2wnx2w2 );
$m4is_0864dacae86e26c2nevtsd8y1 = ! empty( $m4is_8nfshp2akm3wxv7 );
}
if ( $m4is_0864dacae86e26c2nevtsd8y1 ) {
if ( $m4is_fh91430wnqcvjs3['type'] == 'dollars' ) {
$m4is_9mn1y9evr0g40fpt[$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9] += (double) $m4is_bamv772v['InvoiceTotal'];

}
elseif ( $m4is_fh91430wnqcvjs3['type'] == 'invoices' ) {
$m4is_9mn1y9evr0g40fpt[$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9]++;
}
}
}
$m4is_ek8adjz9yz7wvga34bby56++;

$m4is_kyw6mwey3 = $m4is_kyw6mwey3 + $m4is_x6ktf52x8;
} while ( $m4is_x6ktf52x8 == $m4is_rkmcn1zd3r3k149h20vfr8z);
unset( $m4is_9mn1y9evr0g40fpt[0],
 $m4is_sm2bbv9e1qax7vn1s7d793mrb9tr8[0] );
arsort( $m4is_9mn1y9evr0g40fpt );
return array_slice( $m4is_9mn1y9evr0g40fpt, 0, $m4is_fh91430wnqcvjs3['slots'],
 true );
}

}