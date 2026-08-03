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


final class m4is_25550fsqsnd4pn7txw2vh7x6 {

private static $m4is_132xe588j;

private static $m4is_d2r5sg4cgrwhqcpa;

static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}




private static function m4is_h8n8119jypvhc() : array {
return [
'abs',
'addslashes',
'bin2hex',
'ceil',
'convert_uudecode',
'convert_uuencode',

'crc32',
'crypt',
'floor',
'html_entity_decode',
'htmlentities',
'htmlspecialchars_decode',
'htmlspecialchars',
'intval',
'lcfirst',

'ltrim',
'md5',
'nl2br',
'rawurlencode',
'remove_accents',
'rtrim',
'sha1',
'str_rot13',
'strip_tags',
'stripslashes',
'strlen',
'strrev',

'strtolower',
'strtoupper',
'trim',
'ucfirst',
'ucwords',
'wptexturize',
];
}

public static function m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_rqxytszfq5v6syth1csqqxvy5,
 $m4is_syqymyz40rx4xgtqp8475ffwzw = false ) : bool {
$m4is_rqxytszfq5v6syth1csqqxvy5 = strtolower( trim( $m4is_rqxytszfq5v6syth1csqqxvy5 ) );

if ( $m4is_rqxytszfq5v6syth1csqqxvy5 == 'on' ) {
return true;
}
elseif ( $m4is_rqxytszfq5v6syth1csqqxvy5 == 'off' ) {
return false;

}
$m4is_rqxytszfq5v6syth1csqqxvy5 = substr( $m4is_rqxytszfq5v6syth1csqqxvy5, 0, 1 );
switch($m4is_rqxytszfq5v6syth1csqqxvy5) {
case 'y':
case 't':
case '1':
return true;

break;
case 'n':
case 'f':
case '0':
return false;
break;
}
return (binary) $m4is_syqymyz40rx4xgtqp8475ffwzw;
}

public static function m4is_xa6fsr0pb2yemz613( $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4,
 $m4is_garkwrr8cykdaftyj, $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7, $m4is_wz9rftas98zkrdtwd3rvbscwxp = true ) {
$m4is_garkwrr8cykdaftyj = strtolower( trim( $m4is_garkwrr8cykdaftyj ) );

if ( self::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_wz9rftas98zkrdtwd3rvbscwxp, true ) ) {
$m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 = strtolower( trim( $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 ) );

$m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 = strtolower( trim( $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 ) );
}
$m4is_1we1qc8rdsrfq = false;

if ( in_array( $m4is_garkwrr8cykdaftyj, [ '=', '==', '===', 'eq' ] ) ) {
$m4is_1we1qc8rdsrfq = ($m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 == $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7);

}
elseif ( in_array( $m4is_garkwrr8cykdaftyj, [ 'gt', '>' ] ) ) {
$m4is_1we1qc8rdsrfq = ($m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 > $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7);

}
elseif ( in_array( $m4is_garkwrr8cykdaftyj, [ 'lt', '<' ] ) ) {
$m4is_1we1qc8rdsrfq = ($m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 < $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7);

}
elseif ( in_array( $m4is_garkwrr8cykdaftyj, [ 'le', '<=' ] ) ) {
$m4is_1we1qc8rdsrfq = ($m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 <= $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7);

}
elseif ( in_array( $m4is_garkwrr8cykdaftyj, [ 'ge', '>=', '=>' ] ) ) {
$m4is_1we1qc8rdsrfq = ($m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 >= $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7);

}
elseif ( in_array( $m4is_garkwrr8cykdaftyj, [ 'ne', '!=', '!==' ] ) ) {
$m4is_1we1qc8rdsrfq = ($m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 <> $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7);

}
elseif ( in_array( $m4is_garkwrr8cykdaftyj, [ 'bw', '~=' ] ) ) { 
$m4is_1we1qc8rdsrfq = ( strpos( $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4,
 $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 ) === 0 );
}
elseif ( in_array( $m4is_garkwrr8cykdaftyj, [ 'ew', '=~' ] ) ) { 
if ($m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 == $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7) {
$m4is_1we1qc8rdsrfq = true;

}
else {
if ( strlen( $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 ) > strlen( $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 ) ) {
$m4is_1we1qc8rdsrfq = @substr_compare( $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4,
 $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7, -strlen( $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 ), strlen( $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 ) ) === 0;

}
else {
$m4is_1we1qc8rdsrfq = false;
}
}
}
elseif ( in_array( $m4is_garkwrr8cykdaftyj, [ 'contains', '~~' ] ) ) {
$m4is_1we1qc8rdsrfq = strpos( $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4,
 $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 ) !== false;
}
elseif ( $m4is_garkwrr8cykdaftyj == 'in' ) {
$m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 = array_filter( array_map( 'trim',
 explode( ',', $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 ) ) );
$m4is_1we1qc8rdsrfq = in_array( $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4, $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 );

}
elseif ( $m4is_garkwrr8cykdaftyj == '!in' ) {
$m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 = array_filter( array_map( 'trim', explode( ',',
 $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 ) ) );
$m4is_1we1qc8rdsrfq = ! in_array( $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4, $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 );

}
elseif ( $m4is_garkwrr8cykdaftyj == 'range' ) {
$m4is_3wgnzrx6b352y9z78d1h1j = explode( ',', $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 );

$m4is_1we1qc8rdsrfq = $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 >= $m4is_3wgnzrx6b352y9z78d1h1j[0] && $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 <= $m4is_3wgnzrx6b352y9z78d1h1j[1];

}
elseif ( $m4is_garkwrr8cykdaftyj == '!range' ) {
$m4is_3wgnzrx6b352y9z78d1h1j = explode( ',', $m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 );

$m4is_1we1qc8rdsrfq = $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 < $m4is_3wgnzrx6b352y9z78d1h1j[0] || $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4 > $m4is_3wgnzrx6b352y9z78d1h1j[1];

}
elseif ( $m4is_garkwrr8cykdaftyj == 'datebefore' ) {
$m4is_n7f1h90k542pjj95 = (int) strtotime($m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 . ' - ' . $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4);

$m4is_8jfeb1gak2j64szae = (int) strtotime($m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7);
$m4is_1we1qc8rdsrfq = ( time() >= $m4is_n7f1h90k542pjj95 && time() <= $m4is_8jfeb1gak2j64szae );

}
elseif ( $m4is_garkwrr8cykdaftyj == 'dateafter' ) {
$m4is_0y0x1ybzydygfpgpv00 = strtotime($m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7 . ' + ' . $m4is_qdrv39rrw62s3ax80ahjmthg9pvb4);

$m4is_8jfeb1gak2j64szae = strtotime($m4is_e11q7katg47y1kbmpmd007xqdtf1nvx7);
$m4is_1we1qc8rdsrfq = (time() <= $m4is_0y0x1ybzydygfpgpv00 && time() >= $m4is_8jfeb1gak2j64szae);

}
return (bool) $m4is_1we1qc8rdsrfq;
}

public static function m4is_r85ch2nyjadv4rt71w7ns( string $m4is_pt7z3n28xwxf1m8ffs2tsz5pythtx1,
 string $m4is_6ea35z05gk3zexp8 ) : string {
static $m4is_m86f500fkqr = [];
$m4is_m86f500fkqr = empty( $m4is_m86f500fkqr) ? self::m4is_h8n8119jypvhc() : $m4is_m86f500fkqr;

$m4is_mwtcpvh97sm = array_filter( explode( ',', $m4is_6ea35z05gk3zexp8 ) );
foreach ( $m4is_mwtcpvh97sm as $m4is_6ea35z05gk3zexp8 ) {
if ( in_array( strtolower( $m4is_6ea35z05gk3zexp8 ),
 $m4is_m86f500fkqr ) ) {
$m4is_pt7z3n28xwxf1m8ffs2tsz5pythtx1 = $m4is_6ea35z05gk3zexp8($m4is_pt7z3n28xwxf1m8ffs2tsz5pythtx1);
}
else {
if ( $m4is_6ea35z05gk3zexp8 == 'sanitize_title' ) {
$m4is_pt7z3n28xwxf1m8ffs2tsz5pythtx1 = sanitize_title( $m4is_pt7z3n28xwxf1m8ffs2tsz5pythtx1,
 $m4is_pt7z3n28xwxf1m8ffs2tsz5pythtx1 );
}
}
}
return (string) $m4is_pt7z3n28xwxf1m8ffs2tsz5pythtx1;
}

public static function m4is_r631mq3vpgnpxhcrsqr414rtx1x( $m4is_bsamg3fezf,
 $m4is_pmytep5t5 = '' ) : string {
$m4is_cfxz2qf0mfpbab = false;
if ( $m4is_pmytep5t5 == '' ) {
$m4is_pmytep5t5 = 'display';
}
if ( ! is_array( $m4is_pmytep5t5 ) ) {
$m4is_pmytep5t5 = explode(',',
 $m4is_pmytep5t5);
}
$contact_update = [];
if ( is_array( $m4is_pmytep5t5 ) ) {
foreach ( $m4is_pmytep5t5 as $m4is_gb01jqxh9ek2m ) {
$m4is_gb01jqxh9ek2m = strtolower( trim( $m4is_gb01jqxh9ek2m ) );

if ( $m4is_gb01jqxh9ek2m == 'display' ) {
$m4is_cfxz2qf0mfpbab = true;
}
if ( strtolower( substr( $m4is_gb01jqxh9ek2m, 0, 6 ) ) == 'field:' ) {
$m4is_jrbbv650tt4nt9f6fz = substr( $m4is_gb01jqxh9ek2m,
 6 );
if ( ! is_user_logged_in() ) {
self::$m4is_d2r5sg4cgrwhqcpa[$m4is_jrbbv650tt4nt9f6fz] = $m4is_bsamg3fezf;
}
else {
self::$m4is_132xe588j->m4is_fkwjzzpbkcrc3nhe2yvnfvrv32yq( $m4is_jrbbv650tt4nt9f6fz,
 $m4is_bsamg3fezf );
}
}
if ( substr( $m4is_gb01jqxh9ek2m, 0, 4 ) == 'var:' ) {
$m4is_n2tm6nxpnej1h2 = substr( $m4is_gb01jqxh9ek2m,
 4 );
}

}
}

if ( $m4is_cfxz2qf0mfpbab ) {
return $m4is_bsamg3fezf;
}
return '';
}

public static function m4is_c032srz89d0v(string $m4is_bsamg3fezf = '',
 string $m4is_s0hfpx2zktwa0hangkfqn3 = '', bool $m4is_ftcg1mnxcx8qvj180wwj = true, bool $m4is_1we1qc8rdsrfq = false ): string {
if ( $m4is_bsamg3fezf == '' ) {
if ( $m4is_1we1qc8rdsrfq ) {
return __( 'Yes',
 'memberium' );
}
else {
return __( 'No', 'memberium' );
}
}
$m4is_bq58f86707c = strtolower( '[else_' . $m4is_s0hfpx2zktwa0hangkfqn3 . ']' );

$m4is_jmw3d2w217643t9ph = strtolower( '[else_' . substr( $m4is_s0hfpx2zktwa0hangkfqn3, 5 ) . ']' );
$m4is_bsamg3fezf = (string) str_ireplace( $m4is_jmw3d2w217643t9ph,
 $m4is_bq58f86707c, $m4is_bsamg3fezf );
$m4is_1sgb7xebv9m5z9v = false;
if ( stripos( $m4is_bsamg3fezf, $m4is_bq58f86707c ) !== false ) {
$m4is_1sgb7xebv9m5z9v = true;

}
if ( $m4is_1sgb7xebv9m5z9v === false ) {
$m4is_1k7tg1rv9npnm64x8fawf4 = [
'success' => $m4is_bsamg3fezf,
'failure' => ''
];
}
else {
$m4is_bq58f86707c = str_replace( ['[',
 ']'], ['\[', '\]'], $m4is_bq58f86707c );
$m4is_hartbe843crydzh = preg_split( '/' . $m4is_bq58f86707c . '/i', $m4is_bsamg3fezf );
$m4is_1k7tg1rv9npnm64x8fawf4 = [
'success' =>
 $m4is_hartbe843crydzh[0],
'failure' => $m4is_hartbe843crydzh[1]
];
}
if ( $m4is_ftcg1mnxcx8qvj180wwj ) {
if ($m4is_1we1qc8rdsrfq == true) {
return do_shortcode( $m4is_1k7tg1rv9npnm64x8fawf4['success'] );

}
else {
return do_shortcode( $m4is_1k7tg1rv9npnm64x8fawf4['failure'] );
}
}
return ''; 
}

public static function m4is_a4w7stzgwh6v96qa( $m4is_71enpc2z3 = true,
 $m4is_bsamg3fezf = '', $m4is_brgegcjqya5nc1nb6 = '', $m4is_m1w2rydpynnp3 = '', $m4is_r2zcbr6qbteafvg16ec8tcp12dmmz = '', $m4is_qwc776cp5xqt36msxzkg42p = '',
 $m4is_vdwjaba1ajghqmss = '' ) : string {
if ( $m4is_71enpc2z3 ) {
$m4is_bsamg3fezf = do_shortcode( $m4is_bsamg3fezf );
}
if ( ! empty( $m4is_brgegcjqya5nc1nb6 ) ) {
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_r85ch2nyjadv4rt71w7ns($m4is_bsamg3fezf,
 $m4is_brgegcjqya5nc1nb6);
}
$m4is_bsamg3fezf = $m4is_qwc776cp5xqt36msxzkg42p . $m4is_bsamg3fezf . $m4is_vdwjaba1ajghqmss;
if ( ! empty( $m4is_m1w2rydpynnp3 ) ) {
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_r631mq3vpgnpxhcrsqr414rtx1x( $m4is_bsamg3fezf,
 $m4is_m1w2rydpynnp3 );
}
if (! empty( $m4is_r2zcbr6qbteafvg16ec8tcp12dmmz ) ) {
$m4is_bsamg3fezf = $m4is_r2zcbr6qbteafvg16ec8tcp12dmmz . '="' . $m4is_bsamg3fezf . '"';

}
return $m4is_bsamg3fezf;
}

public static function m4is_j1cappz00y2v9xkw9s21( string $m4is_bsamg3fezf = '', $m4is_y1qf2vysasyv4bw69ddd0520txb4w = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( empty( $m4is_bsamg3fezf ) ) {
return '';
}
$m4is_84xa00tb1z7j377pjagd = [];

$m4is_cfxz2qf0mfpbab = false;
$m4is_a65amc5ynkazjney8rtmsgph0 = false;
$m4is_v53cff8s0dm = 'default';
$m4is_gb01jqxh9ek2m = '';
$m4is_fsedke71q5qj768dkg6rqmhr = '/(\[lang.*\])/U';

$m4is_y1qf2vysasyv4bw69ddd0520txb4w = array_filter( explode( ',', $m4is_y1qf2vysasyv4bw69ddd0520txb4w ) );
$m4is_r66789ak32zd2wzr7k0 = (array) preg_split( $m4is_fsedke71q5qj768dkg6rqmhr,
 $m4is_bsamg3fezf, 0, PREG_SPLIT_DELIM_CAPTURE );

foreach($m4is_r66789ak32zd2wzr7k0 as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = trim($m4is_rqxytszfq5v6syth1csqqxvy5);

if (substr($m4is_rqxytszfq5v6syth1csqqxvy5, 0, 1) == '[') {
$m4is_gv7vjyv2c6g3nepw6 = shortcode_parse_atts(substr($m4is_rqxytszfq5v6syth1csqqxvy5,
 1, -1) );
if (isset($m4is_gv7vjyv2c6g3nepw6['lang']) ) {
$m4is_v53cff8s0dm = $m4is_gv7vjyv2c6g3nepw6['lang'];
}
}
else {
$m4is_84xa00tb1z7j377pjagd[$m4is_v53cff8s0dm] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
}
unset($m4is_r66789ak32zd2wzr7k0, $m4is_j8j55t8dz79m7, $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_gv7vjyv2c6g3nepw6);

$m4is_47g75yr8vh31xxgw6yt454x24kh = 0;

if (isset($m4is_84xa00tb1z7j377pjagd['default']) ) {
$m4is_bsamg3fezf = $m4is_84xa00tb1z7j377pjagd['default'];
}
else {
$m4is_bsamg3fezf = reset($m4is_84xa00tb1z7j377pjagd);

}
foreach( $m4is_y1qf2vysasyv4bw69ddd0520txb4w as $m4is_rckjt7j1pfr4x77x => $m4is_kaa5pga5jjz8asejzk ) {
if (isset($m4is_84xa00tb1z7j377pjagd[$m4is_rckjt7j1pfr4x77x]) && $m4is_kaa5pga5jjz8asejzk > $m4is_47g75yr8vh31xxgw6yt454x24kh) {
$m4is_bsamg3fezf = $m4is_84xa00tb1z7j377pjagd[$m4is_rckjt7j1pfr4x77x];

$m4is_47g75yr8vh31xxgw6yt454x24kh = $m4is_kaa5pga5jjz8asejzk;
}
}
return $m4is_bsamg3fezf;
}

private static function m4is_v24w1c1r1wcwv9dg4($m4is_7v0x9pp1ss3ypzz0typyctrwx9syy,
 $m4is_r66789ak32zd2wzr7k0, $m4is_syqymyz40rx4xgtqp8475ffwzw = '') {

$m4is_r66789ak32zd2wzr7k0 = explode(',', $m4is_r66789ak32zd2wzr7k0);

foreach ($m4is_r66789ak32zd2wzr7k0 as $m4is_6gxy7dwq7mfa3vt3yxkz7de) {
if (isset($m4is_7v0x9pp1ss3ypzz0typyctrwx9syy[$m4is_6gxy7dwq7mfa3vt3yxkz7de]) ) {
$m4is_7v0x9pp1ss3ypzz0typyctrwx9syy = $m4is_7v0x9pp1ss3ypzz0typyctrwx9syy[$m4is_6gxy7dwq7mfa3vt3yxkz7de];

}
else {
$m4is_7v0x9pp1ss3ypzz0typyctrwx9syy = $m4is_syqymyz40rx4xgtqp8475ffwzw;
break;
}
}
return $m4is_7v0x9pp1ss3ypzz0typyctrwx9syy;

}

public static function m4is_7kz4jd4p10wdj( $m4is_hce1y1a4qd65zhnwsj, $m4is_gyph5966twyqf2d00p = 'shortcodes' ) {
$m4is_1tmn06hdxq507z6kd29n5wf9dbr = get_stylesheet_directory();

$m4is_ga29mcmc6xagge6z6gxpkszayg = '/' . $m4is_gyph5966twyqf2d00p . '/' . $m4is_hce1y1a4qd65zhnwsj . '.php';
$m4is_qf38kjh4s9px5xhceshmex5ya8h8z2 = [

$m4is_1tmn06hdxq507z6kd29n5wf9dbr . '/memberium' . $m4is_ga29mcmc6xagge6z6gxpkszayg,

self::$m4is_132xe588j->m4is_hscsx4pb3zt() . '/templates' . $m4is_ga29mcmc6xagge6z6gxpkszayg,
];
$m4is_qf38kjh4s9px5xhceshmex5ya8h8z2 = apply_filters( 'memberium/shortcodes/template-paths',
 $m4is_qf38kjh4s9px5xhceshmex5ya8h8z2 );
foreach( $m4is_qf38kjh4s9px5xhceshmex5ya8h8z2 as $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 ) {
if ( file_exists( $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 ) ) {
return $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1;

}
}
error_log( "Memberium: [error] Shortcode template for {$m4is_hce1y1a4qd65zhnwsj} not found." );
return false;
}

static function m4is_vbq3wn8s( string $name,
 array $atts = [], string $content = '', string $code = '', object $data ) : string {
$m4is_1kw2mmrfv674n7a8zjfce2520ypc1 = self::m4is_7kz4jd4p10wdj( $name );

ob_start();
if ( $m4is_1kw2mmrfv674n7a8zjfce2520ypc1 ) {
include $m4is_1kw2mmrfv674n7a8zjfce2520ypc1;
}
else {
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
echo "<P>Template Missing {$name}</P>";


}
}
$m4is_gb01jqxh9ek2m = (string) preg_replace( '/\s+/', ' ', ob_get_clean() );

return $m4is_gb01jqxh9ek2m;
}

public static function m4is_q8dbdhqpz373mgzjcny29pte6mth7jz( string $m4is_bsamg3fezf ) : string {
if ( ! empty( $m4is_bsamg3fezf ) ) {
$m4is_h3hcd46tpss4jb2xjq52pe = mb_substr( base64_encode( (string) mb_convert_encoding( $m4is_bsamg3fezf,
 'UTF-8', 'auto' ) ), 0, -2 );
$m4is_bsamg3fezf = '<script type="text/javascript"> document.write(atob("' . $m4is_h3hcd46tpss4jb2xjq52pe . '" + "==") ); </script>';

}
return $m4is_bsamg3fezf;
}

public static function m4is_7pct4g598y46( array $m4is_ne6pfqrw74y135s9chxyerje8bgm0j ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = ( is_array( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j ) ) ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j : (array) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j;

foreach ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j as $m4is_j8j55t8dz79m7 => $m4is_b63xa5v2f ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j[$m4is_j8j55t8dz79m7] = self::m4is_m85qr6zg( $m4is_b63xa5v2f );

}
return $m4is_ne6pfqrw74y135s9chxyerje8bgm0j;
}

public static function m4is_m85qr6zg( $m4is_w5b6e917z17132qzejex4kx8 = '' ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

if (stripos($m4is_w5b6e917z17132qzejex4kx8, '{{') !== false) {

$m4is_w5b6e917z17132qzejex4kx8 = str_ireplace('{{ip_address}}', m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z(),
 $m4is_w5b6e917z17132qzejex4kx8);
$m4is_w5b6e917z17132qzejex4kx8 = str_ireplace('{{system_link.home}}', get_home_url(), $m4is_w5b6e917z17132qzejex4kx8);

$m4is_w5b6e917z17132qzejex4kx8 = str_ireplace('{{system_link.site}}', get_site_url(), $m4is_w5b6e917z17132qzejex4kx8);
$m4is_w5b6e917z17132qzejex4kx8 = str_ireplace('{{current.url}}',
 $_SERVER['REQUEST_URI'], $m4is_w5b6e917z17132qzejex4kx8);
$m4is_w5b6e917z17132qzejex4kx8 = str_ireplace('{{contact_id}}', m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'crm_id', 0 ) , $m4is_w5b6e917z17132qzejex4kx8);
$m4is_w5b6e917z17132qzejex4kx8 = str_ireplace('{{post_id}}', get_the_ID(),
 $m4is_w5b6e917z17132qzejex4kx8);
$m4is_w5b6e917z17132qzejex4kx8 = (string) str_ireplace('{{author_contact_id}}', m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( (int) get_the_author_meta('ID' ) ),
 $m4is_w5b6e917z17132qzejex4kx8); 


if ( stripos( $m4is_w5b6e917z17132qzejex4kx8, '{{registration_date}}') !== FALSE ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = wp_get_current_user();

if ( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) {
$m4is_w5b6e917z17132qzejex4kx8 = str_replace('{{registration_date}}', $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_registered,
 $m4is_w5b6e917z17132qzejex4kx8);
}
else {
$m4is_w5b6e917z17132qzejex4kx8 = str_replace('{{registration_date}}', 'Not Registered', $m4is_w5b6e917z17132qzejex4kx8);

}
}
if (stripos($m4is_w5b6e917z17132qzejex4kx8, '{{member.homepage}}') !== FALSE) {
$m4is_k2err6rjpaex2dctjk86xtb8ap = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'login_page', 0 );
$m4is_fxg5q0wq0bg4tkd = $m4is_k2err6rjpaex2dctjk86xtb8ap ? get_permalink( $m4is_k2err6rjpaex2dctjk86xtb8ap ) : site_url();

$m4is_w5b6e917z17132qzejex4kx8 = (string) str_ireplace('{{member.homepage}}', get_permalink( $m4is_k2err6rjpaex2dctjk86xtb8ap ), $m4is_w5b6e917z17132qzejex4kx8);

}
if (stripos($m4is_w5b6e917z17132qzejex4kx8, '{{system_link.') !== FALSE) {
$m4is_w5b6e917z17132qzejex4kx8 = (string) preg_replace_callback('|({{system_link\.(.*)}})|U',

function($m4is_e200zw8mj7k8m1hbx3m) {
$m4is_3g7faa0zhw70 = get_option('memberium_pages');
$m4is_e200zw8mj7k8m1hbx3m[2] = isset($m4is_e200zw8mj7k8m1hbx3m[2]) ? strtolower($m4is_e200zw8mj7k8m1hbx3m[2]) : 'none';

if (isset($m4is_3g7faa0zhw70[$m4is_e200zw8mj7k8m1hbx3m[2]]) ) {
return get_permalink($m4is_3g7faa0zhw70[$m4is_e200zw8mj7k8m1hbx3m[2]]);

}
return;
}, $m4is_w5b6e917z17132qzejex4kx8);
}
$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_g048ev6en3x62756jgwpk43jh1zy( $m4is_w5b6e917z17132qzejex4kx8 );

$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_d0v9s0pb7ewj57g6ezgtgxsset0( $m4is_w5b6e917z17132qzejex4kx8 );
$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_m54setcj( $m4is_w5b6e917z17132qzejex4kx8 );

$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_gtwxc1qh4s8dzbgms4ttpsxrvp( $m4is_w5b6e917z17132qzejex4kx8 );
$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_3ths6prazp4vggcj3447aemt9k( $m4is_w5b6e917z17132qzejex4kx8 );

$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_j33epa60hb9wykhjw6jb7npebysph( $m4is_w5b6e917z17132qzejex4kx8 );
$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_qcmjmn7zdya4qxatz232g8yy7hb( $m4is_w5b6e917z17132qzejex4kx8 );

$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_sy9tvng4sqg23tejfg( $m4is_w5b6e917z17132qzejex4kx8 );
$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_zx0rb77gsbt8an4gws( $m4is_w5b6e917z17132qzejex4kx8 );

$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_yhvyetfatdd91ety2jn( $m4is_w5b6e917z17132qzejex4kx8 );
$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_kbkh08zpsnkrtw( $m4is_w5b6e917z17132qzejex4kx8 );

$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_5jb9s3b31sbhjhepfz9hm95nwthvn9s7( $m4is_w5b6e917z17132qzejex4kx8 );

}
$m4is_w5b6e917z17132qzejex4kx8 = self::m4is_q27vbctn8a0t69kynzzt( $m4is_w5b6e917z17132qzejex4kx8 );

return $m4is_w5b6e917z17132qzejex4kx8;
}


private static function m4is_g1ghh8emdazjzpwdeey0yasckh24h( string $m4is_gb01jqxh9ek2m ) : void {
if ( strtolower( substr( $m4is_gb01jqxh9ek2m,
 0, 6 ) ) === 'field:' ) {
$m4is_jrbbv650tt4nt9f6fz = substr( $m4is_gb01jqxh9ek2m, 6 );
if ( is_user_logged_in() ) {
self::$m4is_132xe588j->m4is_fkwjzzpbkcrc3nhe2yvnfvrv32yq( $m4is_jrbbv650tt4nt9f6fz,
 $m4is_gb01jqxh9ek2m );
}
else {
self::$m4is_d2r5sg4cgrwhqcpa[$m4is_jrbbv650tt4nt9f6fz] = $m4is_gb01jqxh9ek2m;
}
}
}




private static function m4is_g048ev6en3x62756jgwpk43jh1zy(string $m4is_s1v3zsxws2tvv): string {
if ( stripos( $m4is_s1v3zsxws2tvv,
 '{{author_contact_id}}' ) === false ) {
return $m4is_s1v3zsxws2tvv;
}
global $authordata;
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = isset( $authordata->ID ) ? $authordata->ID : 0;

$m4is_7an5k696qe2d7a3a0kb9mydmapnnzew = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_s1v3zsxws2tvv = (string) str_ireplace( '{{author_contact_id}}', $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew, $m4is_s1v3zsxws2tvv );
 
return $m4is_s1v3zsxws2tvv;
}

private static function m4is_d0v9s0pb7ewj57g6ezgtgxsset0( string $m4is_s1v3zsxws2tvv ) : string {
if ( stripos( $m4is_s1v3zsxws2tvv,
 '{{permalink.' ) === false ) {
return $m4is_s1v3zsxws2tvv;
}
$m4is_s1v3zsxws2tvv = (string) preg_replace_callback(
'|({{permalink\.(.*)}})|U',

function( $m4is_e200zw8mj7k8m1hbx3m ) {
return get_permalink( $m4is_e200zw8mj7k8m1hbx3m[2] );
},
$m4is_s1v3zsxws2tvv
);
return $m4is_s1v3zsxws2tvv;

}


private static function m4is_m54setcj( string $m4is_s1v3zsxws2tvv ) : string {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

if ( stripos( $m4is_s1v3zsxws2tvv, '{{affiliate.' ) === false ) {
return $m4is_s1v3zsxws2tvv;
}
$m4is_s1v3zsxws2tvv = (string) preg_replace_callback(
'|({{affiliate\.(.*)}})|U',

function( $m4is_e200zw8mj7k8m1hbx3m ) {
$m4is_j8j55t8dz79m7 = $m4is_e200zw8mj7k8m1hbx3m[2];
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();

$m4is_hartbe843crydzh = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'affiliate',
 $m4is_j8j55t8dz79m7, '' );
return $m4is_hartbe843crydzh;
},
$m4is_s1v3zsxws2tvv
);
return $m4is_s1v3zsxws2tvv;
}

private static function m4is_gtwxc1qh4s8dzbgms4ttpsxrvp( string $m4is_s1v3zsxws2tvv ) : string {
if ( stripos( $m4is_s1v3zsxws2tvv,
 '{{contact.' ) === false ) {
return $m4is_s1v3zsxws2tvv;
}
$m4is_s1v3zsxws2tvv = (string) preg_replace_callback( '|({{contact\.(.*)}})|U',

function( $m4is_e200zw8mj7k8m1hbx3m ) {
$m4is_j8j55t8dz79m7 = $m4is_e200zw8mj7k8m1hbx3m[2];
$m4is_hartbe843crydzh = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', $m4is_j8j55t8dz79m7, '' );
return $m4is_hartbe843crydzh;
}, $m4is_s1v3zsxws2tvv );
return $m4is_s1v3zsxws2tvv;
}

private static function m4is_j33epa60hb9wykhjw6jb7npebysph( string $m4is_s1v3zsxws2tvv ) : string {
if ( stripos( $m4is_s1v3zsxws2tvv,
 '{{cookie.' ) === false ) {
return $m4is_s1v3zsxws2tvv;
}
$m4is_s1v3zsxws2tvv = (string) preg_replace_callback( '|({{cookie\.(.*)}})|U',

function( $m4is_e200zw8mj7k8m1hbx3m ) {
$m4is_j8j55t8dz79m7 = $m4is_e200zw8mj7k8m1hbx3m[2];
$m4is_hartbe843crydzh = self::m4is_v24w1c1r1wcwv9dg4( $_COOKIE,
 $m4is_j8j55t8dz79m7 );
return $m4is_hartbe843crydzh;
}, $m4is_s1v3zsxws2tvv );
return $m4is_s1v3zsxws2tvv;
}

private static function m4is_sy9tvng4sqg23tejfg( string $m4is_s1v3zsxws2tvv ) : string {
if ( stripos( $m4is_s1v3zsxws2tvv,
 '{{date.' ) === false ) {
return $m4is_s1v3zsxws2tvv;
}
$m4is_s1v3zsxws2tvv = (string) preg_replace_callback( '|({{date\.(.*)}})|U',

function( $m4is_e200zw8mj7k8m1hbx3m ) {
$date_format = $m4is_e200zw8mj7k8m1hbx3m[2];
return date( $date_format );
}, $m4is_s1v3zsxws2tvv );

return $m4is_s1v3zsxws2tvv;
}

private static function m4is_zx0rb77gsbt8an4gws( string $m4is_s1v3zsxws2tvv ) : string {
if ( stripos( $m4is_s1v3zsxws2tvv,
 '{{get.') === false ) {
return $m4is_s1v3zsxws2tvv;
}
$m4is_s1v3zsxws2tvv = (string) preg_replace_callback( '|({{get\.(.*)}})|U',
function( $m4is_e200zw8mj7k8m1hbx3m ) {
$m4is_j8j55t8dz79m7 = $m4is_e200zw8mj7k8m1hbx3m[2];

$m4is_hartbe843crydzh = self::m4is_v24w1c1r1wcwv9dg4( $_GET, $m4is_j8j55t8dz79m7 );
return $m4is_hartbe843crydzh;
}, $m4is_s1v3zsxws2tvv
);

return $m4is_s1v3zsxws2tvv;
}

private static function m4is_yhvyetfatdd91ety2jn( string $m4is_s1v3zsxws2tvv ) : string {
if ( stripos( $m4is_s1v3zsxws2tvv,
 '{{post.') === false ) {
return $m4is_s1v3zsxws2tvv;
}
$m4is_s1v3zsxws2tvv = (string) preg_replace_callback( '|({{post\.(.*)}})|U',

function( $m4is_e200zw8mj7k8m1hbx3m ) {
$m4is_j8j55t8dz79m7 = $m4is_e200zw8mj7k8m1hbx3m[2];
$m4is_hartbe843crydzh = self::m4is_v24w1c1r1wcwv9dg4( $_POST,
 $m4is_j8j55t8dz79m7 );
return $m4is_hartbe843crydzh;
}, $m4is_s1v3zsxws2tvv );
return $m4is_s1v3zsxws2tvv;
}

private static function m4is_q27vbctn8a0t69kynzzt( string $m4is_w5b6e917z17132qzejex4kx8 ) : string {
$m4is_fbgrk67bjbfx23tv0cy = ['{{::',
 '::}}', '<:', ':>'];
$m4is_2e1t7s0xvak60q615g6ebgsctkgg24yv = ['[', ']', '[', ']'];
$m4is_w5b6e917z17132qzejex4kx8 = str_replace( $m4is_fbgrk67bjbfx23tv0cy,
 $m4is_2e1t7s0xvak60q615g6ebgsctkgg24yv, $m4is_w5b6e917z17132qzejex4kx8 );

return $m4is_w5b6e917z17132qzejex4kx8;
}

private static function m4is_y0pdn3mn3n8vepbb3hp3sxjvr( string $m4is_w5b6e917z17132qzejex4kx8 ) : string {
return (string) str_ireplace( '{{ip_address}}',
 m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z(), $m4is_w5b6e917z17132qzejex4kx8 );
}

private static function m4is_kbkh08zpsnkrtw( string $m4is_s1v3zsxws2tvv ) : string {
if ( stripos( $m4is_s1v3zsxws2tvv,
 '{{random.') === false ) {
return $m4is_s1v3zsxws2tvv;
}
$m4is_s1v3zsxws2tvv = (string) preg_replace_callback( '|({{random\.(.*)}})|U',

function( $m4is_e200zw8mj7k8m1hbx3m ) {
$m4is_3wgnzrx6b352y9z78d1h1j = explode( ',', $m4is_e200zw8mj7k8m1hbx3m[2] );
return mt_rand( (int) $m4is_3wgnzrx6b352y9z78d1h1j[0],
 (int) $m4is_3wgnzrx6b352y9z78d1h1j[1] );
}, $m4is_s1v3zsxws2tvv );
return $m4is_s1v3zsxws2tvv;
}

private static function m4is_qcmjmn7zdya4qxatz232g8yy7hb( string $m4is_s1v3zsxws2tvv ) : string {
if ( stripos( $m4is_s1v3zsxws2tvv,
 '{{field.') === false ) {
return $m4is_s1v3zsxws2tvv;
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_s1v3zsxws2tvv = (string) preg_replace_callback('|({{field\.(.*)}})|U',
function( $m4is_e200zw8mj7k8m1hbx3m ) use ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$m4is_j8j55t8dz79m7 = $m4is_e200zw8mj7k8m1hbx3m[2];

if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return htmlspecialchars( self::$m4is_132xe588j->m4is_1gdsc4zrspe39f5q04xwnetj6466( $m4is_j8j55t8dz79m7 ) );

}
return empty( self::$m4is_d2r5sg4cgrwhqcpa[$m4is_j8j55t8dz79m7] ) ? '' : self::$m4is_d2r5sg4cgrwhqcpa[$m4is_j8j55t8dz79m7];
}, $m4is_s1v3zsxws2tvv );

return $m4is_s1v3zsxws2tvv;
}

private static function m4is_3ths6prazp4vggcj3447aemt9k( string $m4is_s1v3zsxws2tvv ) : string {
if ( stripos( $m4is_s1v3zsxws2tvv,
 '{{usermeta.') === false ) {
return $m4is_s1v3zsxws2tvv;
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_s1v3zsxws2tvv = (string) preg_replace_callback('|({{usermeta\.(.*)}})|U',
function( $m4is_e200zw8mj7k8m1hbx3m ) {
$m4is_m8tpd1x1wr2av4et3r6p46yd = ! empty( $m4is_e200zw8mj7k8m1hbx3m[2] ) ? strtolower( $m4is_e200zw8mj7k8m1hbx3m[2] ) : '';

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();
if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 > 0 && $m4is_m8tpd1x1wr2av4et3r6p46yd > '' ) {
return empty( $m4is_m8tpd1x1wr2av4et3r6p46yd ) ? '' : get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_m8tpd1x1wr2av4et3r6p46yd, true );
}
else {
return '';
}
}, $m4is_s1v3zsxws2tvv );
return $m4is_s1v3zsxws2tvv;
}

private static function m4is_5jb9s3b31sbhjhepfz9hm95nwthvn9s7( string $m4is_s1v3zsxws2tvv ) : string {
if ( stripos( $m4is_s1v3zsxws2tvv,
 '{{session.') === false ) {
return $m4is_s1v3zsxws2tvv;
}
$m4is_s1v3zsxws2tvv = (string) preg_replace_callback('|({{session\.(.*)}})|U',

function( $m4is_e200zw8mj7k8m1hbx3m ) {
$m4is_j8j55t8dz79m7 = $m4is_e200zw8mj7k8m1hbx3m[2];
$m4is_hartbe843crydzh = self::m4is_v24w1c1r1wcwv9dg4( $_SESSION,
 $m4is_j8j55t8dz79m7 );
return $m4is_hartbe843crydzh;
}, $m4is_s1v3zsxws2tvv );
return $m4is_s1v3zsxws2tvv;
}

public static function m4is_0jnpsn6b( $m4is_n7x0afpz = [],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_smc3egbkqnmmpxddej27tx = '' ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = array_merge( (array) $m4is_n7x0afpz,
 (array) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j );
$m4is_wfv34z8p = empty( $m4is_smc3egbkqnmmpxddej27tx ) ? 'shortcode_atts' : "shortcode_atts_{$m4is_smc3egbkqnmmpxddej27tx}";

return apply_filters( $m4is_wfv34z8p, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_n7x0afpz, $m4is_smc3egbkqnmmpxddej27tx );

}

public static function m4is_4e5d7rvr89anekvg3v6( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], array $m4is_n7x0afpz = [] ) {
$m4is_gb01jqxh9ek2m = '';

if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) || $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] !== 'showatts' ) {
return false;
}
if ( empty( $m4is_n7x0afpz ) ) {
$m4is_gb01jqxh9ek2m = 'N/A';

}
else {
$m4is_gb01jqxh9ek2m = implode( ',', array_keys( $m4is_n7x0afpz ) );
}
return $m4is_gb01jqxh9ek2m;
}
}