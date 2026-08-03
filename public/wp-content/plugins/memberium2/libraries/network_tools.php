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


final class m4is_0gqs7crsrzdbgfzptjws94s {

public static function m4is_996gr4907jjg639ag4b7v0z() : string {
static $m4is_4r0wf35dvwpb4bt76exr98gt6;

if (! is_null($m4is_4r0wf35dvwpb4bt76exr98gt6)) {
return $m4is_4r0wf35dvwpb4bt76exr98gt6;
}
if ( php_sapi_name() === 'cli' ) {
return $m4is_4r0wf35dvwpb4bt76exr98gt6 = '0.0.0.0';

}
$m4is_4r0wf35dvwpb4bt76exr98gt6 = $_SERVER['REMOTE_ADDR'] ?? '';
$m4is_9xnatw48kpj3edm0ya7ph2g8dh4x = [
'HTTP_CLIENT_IP',
'HTTP_X_FORWARDED_FOR',

'HTTP_X_FORWARDED',
'HTTP_X_CLUSTER_CLIENT_IP',
'HTTP_FORWARDED_FOR',
'HTTP_FORWARDED',
'HTTP_X_SUCURI_CLIENTIP',
'HTTP_X_REAL_IP',

];
foreach ( $m4is_9xnatw48kpj3edm0ya7ph2g8dh4x as $m4is_j8j55t8dz79m7 ) {
if (array_key_exists($m4is_j8j55t8dz79m7, $_SERVER) === true) {
foreach (explode(',',
 (string) $_SERVER[$m4is_j8j55t8dz79m7]) as $m4is_vmn8bp85fdtp4fqyh4rkwnhkxz) {
$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz = trim($m4is_vmn8bp85fdtp4fqyh4rkwnhkxz);

if (self::m4is_85p86peydsh4b8m8caw4wyes($m4is_vmn8bp85fdtp4fqyh4rkwnhkxz) ) {
$m4is_4r0wf35dvwpb4bt76exr98gt6 = $m4is_vmn8bp85fdtp4fqyh4rkwnhkxz;

}
}
}
}
return (string) $m4is_4r0wf35dvwpb4bt76exr98gt6;
}

private static function m4is_85p86peydsh4b8m8caw4wyes(string $m4is_vmn8bp85fdtp4fqyh4rkwnhkxz): bool {
if (filter_var($m4is_vmn8bp85fdtp4fqyh4rkwnhkxz,
 FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
return false;

}
return true;
}

public static function m4is_5qammca8yf8pswy3(string $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = '', bool $m4is_x9ps6zme = false,
 array $m4is_g61yzqs7ecta0xztr70d7v = []) : string {
$m4is_n7x0afpz = [
'timeout' => 10,
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args( $m4is_g61yzqs7ecta0xztr70d7v,
 $m4is_n7x0afpz );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = wp_remote_get( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, $m4is_g61yzqs7ecta0xztr70d7v );

if ( is_array( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
if ( empty( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['body'] ) ) {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['body'] = '';

}
if ( ! $m4is_x9ps6zme ) {
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['body'];
}
}
elseif ( is_string( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;

}
return '';
}

public static function m4is_97p3kd50vnx4jwtt8wvgrcxn0( string $m4is_vmn8bp85fdtp4fqyh4rkwnhkxz, string $m4is_5c0xdyth ) : bool {
$m4is_njdvqhcn2efgpbveej2 = explode( '/',
 $m4is_5c0xdyth, 2 );
if ( count( $m4is_njdvqhcn2efgpbveej2 ) !== 2 ) {
return false;
}
$m4is_x8fc7rsakpdrpmcd66seg4m = $m4is_njdvqhcn2efgpbveej2[0];

$m4is_qd4h8bb5wmr2zkjf76w = (int) $m4is_njdvqhcn2efgpbveej2[1];
if ( $m4is_qd4h8bb5wmr2zkjf76w < 0 || $m4is_qd4h8bb5wmr2zkjf76w > 32 ) {
return false;

}
if ( ( ip2long( $m4is_vmn8bp85fdtp4fqyh4rkwnhkxz ) & ~( ( 1 << ( 32 - $m4is_qd4h8bb5wmr2zkjf76w ) ) - 1 ) ) == ip2long( $m4is_x8fc7rsakpdrpmcd66seg4m ) ) {
return true;

}
return false;
}

public static function m4is_pdwjcayq6rwe60k8pdne157cz() : array {
$m4is_r2d01p7w70wh2g5 = 'memberium/aws_subnets';

$m4is_v2mqr4setarray10h87e94q66f0zy7 = get_transient( $m4is_r2d01p7w70wh2g5 );
if ( $m4is_v2mqr4setarray10h87e94q66f0zy7 === false ) {

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = wp_remote_get('https://ip-ranges.amazonaws.com/ip-ranges.json');
 
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = json_decode($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['body']);
$m4is_v2mqr4setarray10h87e94q66f0zy7 = $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->prefixes;

set_transient($m4is_r2d01p7w70wh2g5, $m4is_v2mqr4setarray10h87e94q66f0zy7, 24 * HOUR_IN_SECONDS);
unset($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz);

}
return $m4is_v2mqr4setarray10h87e94q66f0zy7;
}

public static function m4is_yy9b2902mtv0() : array {
$m4is_v2mqr4setarray10h87e94q66f0zy7 = m4is_0gqs7crsrzdbgfzptjws94s::m4is_pdwjcayq6rwe60k8pdne157cz();

$m4is_bt047g87sp1xz8522wjps = [];
foreach( $m4is_v2mqr4setarray10h87e94q66f0zy7 as $m4is_x8fc7rsakpdrpmcd66seg4m ) {
if ( 'S3' == $m4is_x8fc7rsakpdrpmcd66seg4m->service ) {
$m4is_bt047g87sp1xz8522wjps[ $m4is_x8fc7rsakpdrpmcd66seg4m->region ] = $m4is_x8fc7rsakpdrpmcd66seg4m->region;

}
}
ksort( $m4is_bt047g87sp1xz8522wjps );
return $m4is_bt047g87sp1xz8522wjps;
}

public static function m4is_a8jbhgftw25vw3n3r2xwmckd9k3rr( ?string $m4is_w5pdyy84880056m = null ) : bool {
$m4is_wq1gmbsysewbvb6g1m5s71xa86f8xhfr = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'debug_ip', '' );
if ( empty( $m4is_wq1gmbsysewbvb6g1m5s71xa86f8xhfr ) ) {
return false;
}
$m4is_wq1gmbsysewbvb6g1m5s71xa86f8xhfr = array_map( 'trim',
 array_filter( explode( ',', $m4is_wq1gmbsysewbvb6g1m5s71xa86f8xhfr ) ) );
if ( empty( $m4is_wq1gmbsysewbvb6g1m5s71xa86f8xhfr ) ) {
return false;

}
$m4is_w5pdyy84880056m = $m4is_w5pdyy84880056m ?? m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z();
if ( in_array( $m4is_w5pdyy84880056m,
 $m4is_wq1gmbsysewbvb6g1m5s71xa86f8xhfr ) ) {
return true;
}
return false;
}
}
