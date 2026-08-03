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


class_exists('m4is_6y9612z4hjd6fzpap4r5n853641m1jc') || die();

m4is_v5ev659gsvnwc4::m4is_z6c3r724qhd();
final class m4is_v5ev659gsvnwc4 {
private static $m4is_132xe588j;
private static $m4is_80shtdcs36k;

private static $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;
static function m4is_z6c3r724qhd() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_80shtdcs36k = m4is_ceb204yxgttkb1dvyrsjh2ww7qvw3::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'memberium';

}
static function m4is_s067f8mmzfm1jt1( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
static $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s = [];

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'amount' => false,
'css_id' => '',
'except' => '',
'id' =>
 0,
'limit' => 0,
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] ) ) {
return self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ? '<p style="font-weight:bold">Leaderboard ID Missing</p>' : '';

}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['amount'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['amount'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except'] = array_filter( explode( ',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except'] ),
 'trim' );
$m4is_gb01jqxh9ek2m = '';
$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = md5( serialize( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j ) );

$m4is_fh91430wnqcvjs3 = self::$m4is_80shtdcs36k->m4is_vbxst07x3wyhm7ja($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id']);
if ( empty( $m4is_fh91430wnqcvjs3 ) || empty( $m4is_fh91430wnqcvjs3['cache'] ) ) {
return '';

}
$m4is_9mn1y9evr0g40fpt = $m4is_fh91430wnqcvjs3['cache'];
foreach( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except'] as $m4is_j8j55t8dz79m7 ) {
unset( $m4is_9mn1y9evr0g40fpt[$m4is_j8j55t8dz79m7] );

}
$m4is_7g9y793jjckyb = 0;
$m4is_gb01jqxh9ek2m .= '<div class="memberium-leaderboard">';
foreach( $m4is_9mn1y9evr0g40fpt as $m4is_jyajwz6rgkak =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_xbr1ae5hmx11ees = m4is_amz58dmg8j7e898bj8r8b1::m4is_gd369qw27ejjewd18ymbp36( $m4is_jyajwz6rgkak );

$m4is_gb01jqxh9ek2m .= '<div class="leaderboard-row">';
$m4is_gb01jqxh9ek2m .= '<span class="leaderboard-order">' . ( 1 + $m4is_7g9y793jjckyb ) . '</span>';

$m4is_gb01jqxh9ek2m .= '<span class="leaderboard-name">' . $m4is_xbr1ae5hmx11ees['AffName'];
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
$m4is_gb01jqxh9ek2m .= " ({$m4is_jyajwz6rgkak})";

}
$m4is_gb01jqxh9ek2m .= '</span>';
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['amount'] ) {
$m4is_gb01jqxh9ek2m .= '<span class="leaderboard-value">' . $m4is_rqxytszfq5v6syth1csqqxvy5 . '</span>';

}
$m4is_gb01jqxh9ek2m .= '</div>';
$m4is_7g9y793jjckyb++;
if ( $m4is_7g9y793jjckyb == $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['limit'] ) {
break;

}
}
$m4is_gb01jqxh9ek2m .= '</div>';
return $m4is_gb01jqxh9ek2m;
}
}