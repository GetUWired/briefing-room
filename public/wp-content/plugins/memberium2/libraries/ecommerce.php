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


final class m4is_rn5kybmh4hvmhaxg1x {

private static function m4is_0n6zr1zx11kza7() : array {
return [
'American Express' => ['34',
 '37'],
'China UnionPay' => ['62', '88'],
'Diners Club Carte Blanche' => ['300', '305'],
'Diners Club International' => ['300', '305',
 '309', '36', '38,39'],
'Diners Club' => ['54', '55'],
'Discover Card' => ['6011', '622126', '622925', '644,649', '65'],
'JCB' => ['3528',
 '3589'],
'Laser' => ['6304', '6706', '6771', '6709'],
'Maestro' => ['5018', '5020', '5038', '5612', '5893', '6304', '6759', '6761',
 '6762', '6763', '0604', '6390'],
'Dankort' => ['5019'],
'MasterCard' => ['50', '55'],
'Visa' => ['4'],
'Visa Electron' => ['4026',
 '417500', '4405', '4508', '4844', '4913', '4917'],
];
}

public static function m4is_6d3qf121ngd3z( string $m4is_r2qw9hg065hrwf890zx6rr3tg2zbrft ) : string {
$m4is_02ym4252c4qm3s2mtxr0jbt = 'Unknown';

$m4is_9gt0rbss7d = self::m4is_0n6zr1zx11kza7();
foreach( $m4is_9gt0rbss7d as $m4is_hce1y1a4qd65zhnwsj => $m4is_h3dw1vgmvt5 ) {
foreach( $m4is_h3dw1vgmvt5 as $m4is_zxa05fq9f81p8g ) {
if ( strpos( $m4is_zxa05fq9f81p8g,
 ',' ) ) {
$m4is_x7awrt198 = array_filter( explode( ',', $m4is_zxa05fq9f81p8g ) );
$m4is_nntg8125pa78n = substr( $m4is_r2qw9hg065hrwf890zx6rr3tg2zbrft,
 0, strlen( $m4is_x7awrt198[0] ) );
if ( $m4is_nntg8125pa78n >= $m4is_x7awrt198[0] && $m4is_nntg8125pa78n <= $m4is_x7awrt198[1] ) {
$m4is_02ym4252c4qm3s2mtxr0jbt = $m4is_hce1y1a4qd65zhnwsj;

}
}
else {

if ( strncmp( $m4is_r2qw9hg065hrwf890zx6rr3tg2zbrft, $m4is_zxa05fq9f81p8g, strlen( $m4is_zxa05fq9f81p8g ) ) === 0 ) {
$m4is_02ym4252c4qm3s2mtxr0jbt = $m4is_hce1y1a4qd65zhnwsj;

}
}
}
}
return $m4is_02ym4252c4qm3s2mtxr0jbt;
}

public static function m4is_h8kx0xsv8jft14jc( string $m4is_nntg8125pa78n ) : bool {
$m4is_nntg8125pa78n = preg_replace( '/\D/',
 '', $m4is_nntg8125pa78n );

if ( empty( $m4is_nntg8125pa78n ) ) {
return false;
}
$m4is_fzamhjt0agyxc0mhefjs9a1sj8g = strlen( $m4is_nntg8125pa78n );

$m4is_yjveyrxmy9mk = $m4is_fzamhjt0agyxc0mhefjs9a1sj8g % 2;
$m4is_0gc8ph0aqh6nsn6 = 0;
for ( $m4is_5vcwef7pymrfb3zawe = 0; $m4is_5vcwef7pymrfb3zawe < $m4is_fzamhjt0agyxc0mhefjs9a1sj8g;
 $m4is_5vcwef7pymrfb3zawe++ ) {
$m4is_emhmfr1ngews255574nw8bycaq = (int) $m4is_nntg8125pa78n[$m4is_5vcwef7pymrfb3zawe];

if ( $m4is_5vcwef7pymrfb3zawe % 2 == $m4is_yjveyrxmy9mk ) {
$m4is_emhmfr1ngews255574nw8bycaq *= 2;


if ( $m4is_emhmfr1ngews255574nw8bycaq > 9 ) {
$m4is_emhmfr1ngews255574nw8bycaq -= 9;
}
}

$m4is_0gc8ph0aqh6nsn6 += $m4is_emhmfr1ngews255574nw8bycaq;

}

return ( $m4is_0gc8ph0aqh6nsn6 % 10 == 0 );
}
}
