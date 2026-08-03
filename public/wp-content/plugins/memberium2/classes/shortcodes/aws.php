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

final class m4is_z1481399d2k4jsb31vhdgs5ymeg3ve {
private static int $m4is_64xrte3mqxspqvhe;
private static object $m4is_132xe588j;

private static $m4is_63jp3myxhpk1eyb606fb;

static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_64xrte3mqxspqvhe = 4;
m4is_9d8n6yra072mpxd0pczne9::m4is_67nqhgcsb0p43k96hkt933aagr1c7c6();
}



public static function m4is_xp1pztywg0ngp0( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if (! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return '';

}

$m4is_f4mmnpxsen0k08kp6sc40vj = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile'] = isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile']) ? strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile'])) : 'us-east-1';

$m4is_a10vy3632y5ycmcwstc277 = self::m4is_gqhw9a41xcxd6qhdp($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile']);

if ($m4is_a10vy3632y5ycmcwstc277) {
$m4is_fh91430wnqcvjs3 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile'];

$m4is_hsxytnwdp65nhbaq818n4 = $m4is_a10vy3632y5ycmcwstc277['bucket'];
$m4is_xwkk6vq4ebb4x9 = (int) $m4is_a10vy3632y5ycmcwstc277['expiration'];

$m4is_ef2x3c9292j = $m4is_a10vy3632y5ycmcwstc277['host'];
$m4is_b93c29gg01cqnkz68jxk = empty($m4is_a10vy3632y5ycmcwstc277['region']) ? '' : $m4is_a10vy3632y5ycmcwstc277['region'];

$m4is_y9na9td0k65kkg2ejdrzf4v0 = $m4is_a10vy3632y5ycmcwstc277['access_key'];
$m4is_pvdf63hb87pq7s4x9hq8kb5jn = $m4is_a10vy3632y5ycmcwstc277['secret_key'];

}
else {
$m4is_fh91430wnqcvjs3 = '';
$m4is_hsxytnwdp65nhbaq818n4 = '';
$m4is_xwkk6vq4ebb4x9 = 5;
$m4is_b93c29gg01cqnkz68jxk = 'us-east-1';

$m4is_ef2x3c9292j = '';
$m4is_y9na9td0k65kkg2ejdrzf4v0 = '';
$m4is_pvdf63hb87pq7s4x9hq8kb5jn = '';
}
$m4is_n7x0afpz = [
'action_ids' =>
 '', 
'after' => '',
'before' => '',
'bucket' => $m4is_hsxytnwdp65nhbaq818n4,
'debug' => 0,
'direct_link' => 'no', 
'expiring' => $m4is_xwkk6vq4ebb4x9,

'fus_ids' => '', 
'goals' => '',
'htmlattr' => '',
'object' => '',
'profile' => $m4is_fh91430wnqcvjs3,
'protocol' => 'https',
'region' =>
 $m4is_b93c29gg01cqnkz68jxk,
'require_login' => 'no', 
'tag_ids' => '',
'tokens' => '',
'version' => self::$m4is_64xrte3mqxspqvhe,

'class' =>
 '',
'download' => '',
'id' => '',
'rel' => '',
'style' => '',
'target' => '',
'type' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_gb01jqxh9ek2m = '';

if ( strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['direct_link']) ) == 'no' ) {
$m4is_3r7zk3f78acankjcj7q8b8t = empty($_SERVER['REQUEST_URI']) ? '' : $_SERVER['REQUEST_URI'];

$m4is_knxbec8fr3be1s2tkx0ydee0z = [];
$m4is_knxbec8fr3be1s2tkx0ydee0z['actionset'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['action_ids'];

$m4is_knxbec8fr3be1s2tkx0ydee0z['debug'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'];
$m4is_knxbec8fr3be1s2tkx0ydee0z['expiring'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiring'];

$m4is_knxbec8fr3be1s2tkx0ydee0z['fus'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fus_ids'];
$m4is_knxbec8fr3be1s2tkx0ydee0z['goals'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['goals'];

$m4is_knxbec8fr3be1s2tkx0ydee0z['object'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['object'];
$m4is_knxbec8fr3be1s2tkx0ydee0z['profile'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile'];

$m4is_knxbec8fr3be1s2tkx0ydee0z['protocol'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['protocol'];
$m4is_knxbec8fr3be1s2tkx0ydee0z['region'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['region'];

$m4is_knxbec8fr3be1s2tkx0ydee0z['require_login'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['require_login'];
$m4is_knxbec8fr3be1s2tkx0ydee0z['tags'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_ids'];

$m4is_knxbec8fr3be1s2tkx0ydee0z['tokens'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tokens'];
$m4is_knxbec8fr3be1s2tkx0ydee0z['version'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['version'];

if (strpos($m4is_3r7zk3f78acankjcj7q8b8t, '?') === false) {
$m4is_3r7zk3f78acankjcj7q8b8t .= '?';
}
else {
$m4is_3r7zk3f78acankjcj7q8b8t .= '&';

}
$m4is_r53562w9befcb2kh7rm4p7n5 = base64_encode( serialize( $m4is_knxbec8fr3be1s2tkx0ydee0z ) );
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = 'memb_s3link=' . $m4is_r53562w9befcb2kh7rm4p7n5;


$m4is_hce1y1a4qd65zhnwsj = 'verification';
$m4is_knxbec8fr3be1s2tkx0ydee0z = $m4is_r53562w9befcb2kh7rm4p7n5;
$action_url = wp_nonce_url($m4is_pp334hs6rfvw2vqjd400r3cmsn2kq,
 $m4is_knxbec8fr3be1s2tkx0ydee0z, $m4is_hce1y1a4qd65zhnwsj);


$m4is_65aka8xf2h8j = $m4is_3r7zk3f78acankjcj7q8b8t . $action_url;
}
else {
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['version'] == 3) {
$m4is_65aka8xf2h8j = self::m4is_jw85yc326r0dk5($m4is_y9na9td0k65kkg2ejdrzf4v0,
 $m4is_pvdf63hb87pq7s4x9hq8kb5jn, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['protocol'], $m4is_ef2x3c9292j, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['bucket'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['object'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiring']);
}
elseif ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['version'] == 4) {

$m4is_65aka8xf2h8j = self::m4is_9n2gmtgsjcg04h58cd($m4is_y9na9td0k65kkg2ejdrzf4v0,
 $m4is_pvdf63hb87pq7s4x9hq8kb5jn, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['bucket'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['object'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiring'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['region']);
}
}
if (strtolower($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr']) == 'all') {
$m4is_3vrj8nqkjjj6 = [
'action_ids',

'after',
'before',
'bucket',
'debug',
'direct_link',
'expiring',
'fus_ids',
'goals',
'htmlattr',
'object',
'profile',
'protocol',
'require_login',

'tag_ids',
'tokens',
];
$m4is_gb01jqxh9ek2m = '<a href="' . $m4is_65aka8xf2h8j . '"';
foreach($m4is_f4mmnpxsen0k08kp6sc40vj as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp) {
if (! empty($m4is_f4mmnpxsen0k08kp6sc40vj[$m4is_bqhtspcavhb01spmfd3x]) && ! in_array($m4is_bqhtspcavhb01spmfd3x,
 $m4is_3vrj8nqkjjj6) ) {
$m4is_gb01jqxh9ek2m .= ' ' . $m4is_bqhtspcavhb01spmfd3x . '="' . $m4is_29gzevpx8rbkp . '" ';
}
}
$m4is_gb01jqxh9ek2m .= '>' . $m4is_bsamg3fezf . '</a>';

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'] = '';
}
else {
$m4is_gb01jqxh9ek2m = $m4is_65aka8xf2h8j;
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_gb01jqxh9ek2m, '', '', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );

}
public static function m4is_1ppv3f4ese( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if ( is_feed() ) {
return '';
}
$m4is_f4mmnpxsen0k08kp6sc40vj = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j;

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile'] = isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile']) ? strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile'])) : 'us-east-1';

$m4is_a10vy3632y5ycmcwstc277 = self::m4is_gqhw9a41xcxd6qhdp($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile']);

if ($m4is_a10vy3632y5ycmcwstc277) {
$m4is_fh91430wnqcvjs3 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile'];

$m4is_hsxytnwdp65nhbaq818n4 = $m4is_a10vy3632y5ycmcwstc277['bucket'];
$m4is_xwkk6vq4ebb4x9 = (int) $m4is_a10vy3632y5ycmcwstc277['expiration'];

$m4is_ef2x3c9292j = $m4is_a10vy3632y5ycmcwstc277['host'];
$m4is_b93c29gg01cqnkz68jxk = $m4is_a10vy3632y5ycmcwstc277['region'];
$m4is_y9na9td0k65kkg2ejdrzf4v0 = $m4is_a10vy3632y5ycmcwstc277['access_key'];

$m4is_pvdf63hb87pq7s4x9hq8kb5jn = $m4is_a10vy3632y5ycmcwstc277['secret_key'];
}
else {
$m4is_fh91430wnqcvjs3 = '';
$m4is_hsxytnwdp65nhbaq818n4 = '';

$m4is_xwkk6vq4ebb4x9 = 5;
$m4is_b93c29gg01cqnkz68jxk = 'us-east-1';
$m4is_ef2x3c9292j = '';
$m4is_y9na9td0k65kkg2ejdrzf4v0 = '';
$m4is_pvdf63hb87pq7s4x9hq8kb5jn = '';

}
static $m4is_9yw8e8h1m49k2m1g64g = 0;
$m4is_9yw8e8h1m49k2m1g64g++;
$m4is_n7x0afpz = [
'autoplay' => '',
'bucket' => $m4is_hsxytnwdp65nhbaq818n4,

'controls' => '',
'direct_link' => 'no', 
'download' => 0,
'expiring' => $m4is_xwkk6vq4ebb4x9,
'height' => 0,
'loop' => '',
'muted' =>
 '',
'object' => '',
'poster' => '',
'preload' => '',
'profile' => $m4is_fh91430wnqcvjs3,
'protocol' => 'https',
'region' => $m4is_b93c29gg01cqnkz68jxk,

'require_login' => 'no', 
'version' => 3, 
'src' => '',
'width' => 0,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_7wfxn2e73 = '';
$m4is_qc36n7jdf = '';
$m4is_yq9n3v1p51evv3bddw24fsjkv12w7 = [];
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['version'] == 3) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = self::m4is_jw85yc326r0dk5( $m4is_y9na9td0k65kkg2ejdrzf4v0,
 $m4is_pvdf63hb87pq7s4x9hq8kb5jn, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['protocol'], $m4is_ef2x3c9292j, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['bucket'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['object'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiring']);
}
elseif ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['version'] == 4) {

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = self::m4is_9n2gmtgsjcg04h58cd( $m4is_y9na9td0k65kkg2ejdrzf4v0,
 $m4is_pvdf63hb87pq7s4x9hq8kb5jn, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['bucket'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['object'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expires'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['region'], $m4is_yq9n3v1p51evv3bddw24fsjkv12w7 );
}
$m4is_wa9w0728e08dpm5r30 = ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] > 0) ? ' style="width:' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] . 'px;" ': '';

$m4is_qc36n7jdf .= '<div '. $m4is_wa9w0728e08dpm5r30 .' class="wp-video">';
$m4is_qc36n7jdf .= '<audio class="wp-audio-shortcode" id="secureaudio-' . $m4is_9yw8e8h1m49k2m1g64g . '" ';

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] > 0) {
$m4is_qc36n7jdf .= ' width="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] . '" ';

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['height'] > 0) {
$m4is_qc36n7jdf .= ' height="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['height'] . '" ';

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['preload'] > '') {
$m4is_qc36n7jdf .= ' autobuffer="autobuffer" preload="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['preload'] . '" ';

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['controls'] > '') {
$m4is_qc36n7jdf .= ' controls="controls" ';
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autoplay'] > '') {
$m4is_qc36n7jdf .= ' autoplay="autoplay" ';

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['muted'] > '') {
$m4is_qc36n7jdf .= ' muted="muted" ';
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['poster'] > '') {
$m4is_qc36n7jdf .= ' poster="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['poster'] . '" ';

}
if (! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['loop']) ) {
$m4is_qc36n7jdf .= ' loop="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['loop'] . '" ';

}
if (! $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['download']) {
$m4is_qc36n7jdf .= ' controlsList="nodownload" ';
}
$m4is_qc36n7jdf .= '>';

$m4is_qc36n7jdf .= '<source src="' . $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq .'" />';
$m4is_qc36n7jdf .= '</audio></div>';
return $m4is_qc36n7jdf;

}
public static function m4is_a12838kjr8c7nax8dchq94($m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if (! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return '';

}
if (is_feed() ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
static $m4is_9yw8e8h1m49k2m1g64g = 0;
$m4is_9yw8e8h1m49k2m1g64g++;

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile'] = isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile']) ? strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile'])) : 'us-east-1';

$m4is_a10vy3632y5ycmcwstc277 = self::m4is_gqhw9a41xcxd6qhdp($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile']);
$m4is_wa9w0728e08dpm5r30 = '';

if ($m4is_a10vy3632y5ycmcwstc277) {
$m4is_fh91430wnqcvjs3 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['profile'];
$m4is_hsxytnwdp65nhbaq818n4 = $m4is_a10vy3632y5ycmcwstc277['bucket'];

$m4is_xwkk6vq4ebb4x9 = (int) $m4is_a10vy3632y5ycmcwstc277['expiration'];
$m4is_ef2x3c9292j = $m4is_a10vy3632y5ycmcwstc277['host'];

$m4is_b93c29gg01cqnkz68jxk = $m4is_a10vy3632y5ycmcwstc277['region'];
$m4is_y9na9td0k65kkg2ejdrzf4v0 = $m4is_a10vy3632y5ycmcwstc277['access_key'];

$m4is_pvdf63hb87pq7s4x9hq8kb5jn = $m4is_a10vy3632y5ycmcwstc277['secret_key'];
}
else {
$m4is_fh91430wnqcvjs3 = '';
$m4is_hsxytnwdp65nhbaq818n4 = '';

$m4is_xwkk6vq4ebb4x9 = 5;
$m4is_b93c29gg01cqnkz68jxk = 'us-east-1';
$m4is_ef2x3c9292j = '';
$m4is_y9na9td0k65kkg2ejdrzf4v0 = '';
$m4is_pvdf63hb87pq7s4x9hq8kb5jn = '';

}
$m4is_n7x0afpz = [
'autoplay' => '',
'bucket' => $m4is_hsxytnwdp65nhbaq818n4,
'controls' => '',
'direct_link' => 'no', 
'expiring' =>
 $m4is_xwkk6vq4ebb4x9,
'height' => 0,
'loop' => '',
'muted' => '',
'object' => '',
'poster' => '',
'preload' => '',
'profile' => $m4is_fh91430wnqcvjs3,

'protocol' => 'https',
'require_login' => 'no', 
'src' => '',
'version' => 3, 
'width' => 0,
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');

$m4is_7wfxn2e73 = '';
$m4is_qc36n7jdf = '';

$m4is_yq9n3v1p51evv3bddw24fsjkv12w7 = [];

if (false && strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['direct_link']) ) == 'no') {

}
else {
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['version'] == 3) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = self::m4is_jw85yc326r0dk5($m4is_y9na9td0k65kkg2ejdrzf4v0,
 $m4is_pvdf63hb87pq7s4x9hq8kb5jn, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['protocol'], $m4is_ef2x3c9292j, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['bucket'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['object'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiring'] );
}
elseif ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['version'] == 4) {

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = self::m4is_9n2gmtgsjcg04h58cd($m4is_y9na9td0k65kkg2ejdrzf4v0,
 $m4is_pvdf63hb87pq7s4x9hq8kb5jn, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['bucket'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['object'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiring'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['region'], $m4is_yq9n3v1p51evv3bddw24fsjkv12w7 );
}
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] > 0) {
$m4is_wa9w0728e08dpm5r30 = ' style="width:' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] . 'px;" ';

}
$m4is_qc36n7jdf .= '<div '. $m4is_wa9w0728e08dpm5r30 .' class="wp-video">';
$m4is_qc36n7jdf .= '<video class="wp-video-shortcode" id="securevideo-' . $m4is_9yw8e8h1m49k2m1g64g . '" ';

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] > 0) {
$m4is_qc36n7jdf .= ' width="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] . '" ';

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['height'] > 0) {
$m4is_qc36n7jdf .= ' height="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['height'] . '" ';

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['preload'] > '') {
$m4is_qc36n7jdf .= ' autobuffer="autobuffer" preload="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['preload'] . '" ';

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['controls'] > '') {
$m4is_qc36n7jdf .= ' controls="controls" ';
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autoplay'] > '') {
$m4is_qc36n7jdf .= ' autoplay="autoplay" ';

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['muted'] > '') {
$m4is_qc36n7jdf .= ' muted="muted" ';
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['poster'] > '') {
$m4is_qc36n7jdf .= ' poster="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['poster'] . '" ';

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['loop'] > '') {
$m4is_qc36n7jdf .= ' loop="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['loop'] . '" ';

}
$m4is_qc36n7jdf .= '>';
$m4is_qc36n7jdf .= '<source src="' . $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq .'" />';
$m4is_qc36n7jdf .= '</video></div>';

return $m4is_qc36n7jdf;
}



public static function m4is_2s8hr436brbwe2q348ehzn442hgqf() : void {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

if ( ! wp_verify_nonce( $_GET['verification'], $_GET['memb_s3link'] ) ) {
return;
}
if ( is_feed() ) {
return;
}
$m4is_dn21cv5ncdqnrgyzdaeggbx = function_exists( 'is_user_logged_in' ) && is_user_logged_in();

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_dn21cv5ncdqnrgyzdaeggbx ? self::$m4is_132xe588j->m4is_vd3qpw0vkdm() : 0;
$m4is_knxbec8fr3be1s2tkx0ydee0z = unserialize( base64_decode( $_GET['memb_s3link'] ) );

$m4is_csx0y36xw = (boolean) $m4is_knxbec8fr3be1s2tkx0ydee0z['debug'] == 1;
if ( $m4is_csx0y36xw ) {
self::m4is_3bkgynxjx5hpe( $m4is_knxbec8fr3be1s2tkx0ydee0z );

}
if ( $m4is_knxbec8fr3be1s2tkx0ydee0z['require_login'] == 'yes' && ! $m4is_dn21cv5ncdqnrgyzdaeggbx ) {
if ( $m4is_csx0y36xw ) {
echo __LINE__,
 " - Login Required, returning to referring page";
echo '<a href="', $_SERVER['HTTP_REFERER'], '">Continue</a>';
exit;
}
wp_redirect( $_SERVER['HTTP_REFERER'] );

exit;
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_knxbec8fr3be1s2tkx0ydee0z['actionset'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_132xe588j->m4is_v6e1tsfbgfjk062m8xcq( $m4is_knxbec8fr3be1s2tkx0ydee0z['fus'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

self::$m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_knxbec8fr3be1s2tkx0ydee0z['goals'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_knxbec8fr3be1s2tkx0ydee0z['tags'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_132xe588j->m4is_g3gsedmkn2e( $m4is_knxbec8fr3be1s2tkx0ydee0z['tokens'] );
}
$m4is_g0avr5zbevkkjf0t0k = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'remote_files' );

$m4is_fh91430wnqcvjs3 = strtolower( trim( $m4is_knxbec8fr3be1s2tkx0ydee0z['profile'] ) );
if ( isset( $m4is_g0avr5zbevkkjf0t0k[$m4is_fh91430wnqcvjs3] ) ) {
$m4is_hsxytnwdp65nhbaq818n4 = $m4is_g0avr5zbevkkjf0t0k[$m4is_fh91430wnqcvjs3]['bucket'];

$m4is_ef2x3c9292j = $m4is_g0avr5zbevkkjf0t0k[$m4is_fh91430wnqcvjs3]['host'];
$m4is_y9na9td0k65kkg2ejdrzf4v0 = $m4is_g0avr5zbevkkjf0t0k[$m4is_fh91430wnqcvjs3]['access_key'];

$m4is_pvdf63hb87pq7s4x9hq8kb5jn = $m4is_g0avr5zbevkkjf0t0k[$m4is_fh91430wnqcvjs3]['secret_key'];
if ($m4is_csx0y36xw) {
echo __LINE__,
 ' - Host: ', $m4is_ef2x3c9292j, '<br />';
echo __LINE__, ' - Bucket: ', $m4is_hsxytnwdp65nhbaq818n4, '<br />';
}
}
$m4is_xwkk6vq4ebb4x9 = $m4is_knxbec8fr3be1s2tkx0ydee0z['expiring'];

$m4is_5wzrh3jm = $m4is_knxbec8fr3be1s2tkx0ydee0z['protocol'];
$m4is_rcaa921tgxwvr37dc97d2 = $m4is_knxbec8fr3be1s2tkx0ydee0z['object'];

$m4is_b93c29gg01cqnkz68jxk = $m4is_knxbec8fr3be1s2tkx0ydee0z['region'];
if ( $m4is_knxbec8fr3be1s2tkx0ydee0z['version'] == 3 ) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = self::m4is_jw85yc326r0dk5( $m4is_y9na9td0k65kkg2ejdrzf4v0,
 $m4is_pvdf63hb87pq7s4x9hq8kb5jn, $m4is_5wzrh3jm, $m4is_ef2x3c9292j, $m4is_hsxytnwdp65nhbaq818n4, $m4is_rcaa921tgxwvr37dc97d2, $m4is_xwkk6vq4ebb4x9 );

}
elseif ($m4is_knxbec8fr3be1s2tkx0ydee0z['version'] == 4) {

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = self::m4is_9n2gmtgsjcg04h58cd( $m4is_y9na9td0k65kkg2ejdrzf4v0,
 $m4is_pvdf63hb87pq7s4x9hq8kb5jn, $m4is_hsxytnwdp65nhbaq818n4, $m4is_rcaa921tgxwvr37dc97d2, $m4is_xwkk6vq4ebb4x9, $m4is_b93c29gg01cqnkz68jxk );

}
do_action( 'memberium/s3/link/viewed', $m4is_hsxytnwdp65nhbaq818n4, $m4is_rcaa921tgxwvr37dc97d2, $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
if ($m4is_csx0y36xw) {
echo __LINE__, ' - URL: <a href="', $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq,
 '">', $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, '</a><br />';
exit;
}
else {
wp_redirect( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, 302, 'Memberium Secure S3 Link' );

exit;
}
}




private static function m4is_3bkgynxjx5hpe( array $m4is_knxbec8fr3be1s2tkx0ydee0z ) : void {
echo __LINE__, ' - Region:                 ',
 $m4is_knxbec8fr3be1s2tkx0ydee0z['region'], '<br />';
echo __LINE__, ' - Version:                ', $m4is_knxbec8fr3be1s2tkx0ydee0z['version'],
 '<br />';
echo __LINE__, ' - Protocol:               ', $m4is_knxbec8fr3be1s2tkx0ydee0z['protocol'], '<br />';
echo __LINE__, ' - Require Login?:         ',
 $m4is_knxbec8fr3be1s2tkx0ydee0z['require_login'], '<br />';
echo __LINE__, ' - Set Actionset:          ', $m4is_knxbec8fr3be1s2tkx0ydee0z['actionset'],
 '<br />';
echo __LINE__, ' - Set Debug:              ', $m4is_knxbec8fr3be1s2tkx0ydee0z['debug'], '<br />';
echo __LINE__, ' - Set Expiration:         ',
 $m4is_knxbec8fr3be1s2tkx0ydee0z['expiring'], ' seconds<br />';
echo __LINE__, ' - Set Follow Up Sequence: ', $m4is_knxbec8fr3be1s2tkx0ydee0z['fus'],
 '<br />';
echo __LINE__, ' - Set Goals:              ', $m4is_knxbec8fr3be1s2tkx0ydee0z['goals'], '<br />';
echo __LINE__, ' - Set Object:             ',
 $m4is_knxbec8fr3be1s2tkx0ydee0z['object'], '<br />';
echo __LINE__, ' - Set Profile:            ', $m4is_knxbec8fr3be1s2tkx0ydee0z['profile'],
 '<br />';
echo __LINE__, ' - Set Tags:               ', $m4is_knxbec8fr3be1s2tkx0ydee0z['tags'], '<br />';
echo __LINE__, ' - Tokens:                 ',
 $m4is_knxbec8fr3be1s2tkx0ydee0z['tokens'], '<br />';
}

private static function m4is_gqhw9a41xcxd6qhdp( string $m4is_hce1y1a4qd65zhnwsj ) {
$m4is_63jp3myxhpk1eyb606fb = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'remote_files' );

return isset( $m4is_63jp3myxhpk1eyb606fb[$m4is_hce1y1a4qd65zhnwsj] ) ? $m4is_63jp3myxhpk1eyb606fb[$m4is_hce1y1a4qd65zhnwsj] : false;

}

private static function m4is_kgzfjhjvd3acax3b( $m4is_j8j55t8dz79m7, $m4is_d60kn1d3yvprp62rs332, $m4is_5dk3805twb = 64 ) {
if (strlen($m4is_j8j55t8dz79m7) > $m4is_5dk3805twb) {
$m4is_j8j55t8dz79m7 = pack('H*',
 sha1($m4is_j8j55t8dz79m7) );
}
$m4is_j8j55t8dz79m7 = str_pad($m4is_j8j55t8dz79m7, $m4is_5dk3805twb, chr(0x00) );
$m4is_7j88b4pzbngg5zf2fcyzx72g571 = str_repeat(chr(0x36),
 $m4is_5dk3805twb);
$m4is_23416n2tbpws3kn1xkn = str_repeat(chr(0x5c), $m4is_5dk3805twb);
$m4is_0cgam8c1yz2nk4jk8r = pack('H*', sha1( ($m4is_j8j55t8dz79m7 ^ $m4is_23416n2tbpws3kn1xkn) . pack('H*',
 sha1( ($m4is_j8j55t8dz79m7 ^ $m4is_7j88b4pzbngg5zf2fcyzx72g571) . $m4is_d60kn1d3yvprp62rs332) ) ) );
return base64_encode($m4is_0cgam8c1yz2nk4jk8r);

}

private static function m4is_jw85yc326r0dk5( $m4is_y9na9td0k65kkg2ejdrzf4v0, $m4is_pvdf63hb87pq7s4x9hq8kb5jn, $m4is_5wzrh3jm, $m4is_ef2x3c9292j,
 $m4is_hsxytnwdp65nhbaq818n4, $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1, $m4is_rpa6825s4fhmzmjjxpap05q92nf198x = 30 ) {
$m4is_8w3ygxp1q3me60e6c28evsjyv = time() + (int) $m4is_rpa6825s4fhmzmjjxpap05q92nf198x;

$m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = str_replace('%2F', '/', rawurlencode($m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = ltrim($m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1,
 '/') ) );
$m4is_3dmpkft31rpwk5cmq7y4s1 = '/'. $m4is_hsxytnwdp65nhbaq818n4 .'/'. $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1;
$m4is_zn7rpy174k2097rebwdrz15yzwxxywx7 = implode("\n",
 $pieces = ['GET', null, null, $m4is_8w3ygxp1q3me60e6c28evsjyv, $m4is_3dmpkft31rpwk5cmq7y4s1]);
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::m4is_kgzfjhjvd3acax3b( $m4is_pvdf63hb87pq7s4x9hq8kb5jn,
 $m4is_zn7rpy174k2097rebwdrz15yzwxxywx7 );

$url = sprintf('%s://%s.%s/%s', $m4is_5wzrh3jm, $m4is_hsxytnwdp65nhbaq818n4, $m4is_ef2x3c9292j,
 $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1);
$qs = http_build_query($pieces = ['AWSAccessKeyId' => $m4is_y9na9td0k65kkg2ejdrzf4v0, 'Expires' =>
 $m4is_8w3ygxp1q3me60e6c28evsjyv, 'Signature' => $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn,]);
return $url . '?' . $qs;
}

private static function m4is_m27ajj6qhxwne0ysdwh5yc0( string $m4is_hsxytnwdp65nhbaq818n4 ) {
$m4is_63jp3myxhpk1eyb606fb = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'remote_files' );

$m4is_b93c29gg01cqnkz68jxk = '';
$m4is_ef2x3c9292j = '';
foreach($m4is_63jp3myxhpk1eyb606fb as $m4is_fh91430wnqcvjs3) {
if ($m4is_fh91430wnqcvjs3['bucket'] == $m4is_hsxytnwdp65nhbaq818n4) {
$m4is_b93c29gg01cqnkz68jxk = empty($m4is_fh91430wnqcvjs3['region']) ? '' : $m4is_fh91430wnqcvjs3['region'];

$m4is_ef2x3c9292j = empty($m4is_fh91430wnqcvjs3['host']) ? '' : $m4is_fh91430wnqcvjs3['host'];
if ($m4is_ef2x3c9292j == 's3.amazonaws.com' && empty($m4is_b93c29gg01cqnkz68jxk) ) {
$m4is_b93c29gg01cqnkz68jxk = 'us-east-1';

}
break;
}
}
if (empty($m4is_b93c29gg01cqnkz68jxk) ) {
if (substr($m4is_ef2x3c9292j, 0, 3) === 's3-') {
$m4is_b93c29gg01cqnkz68jxk = substr($m4is_ef2x3c9292j,
 3, strpos($m4is_ef2x3c9292j, '.', 3) - 3);
}
if (empty($m4is_b93c29gg01cqnkz68jxk)) {
$m4is_b93c29gg01cqnkz68jxk = 'us-east-1';
}
}
return $m4is_b93c29gg01cqnkz68jxk;

}

private static function m4is_9n2gmtgsjcg04h58cd( $m4is_y9na9td0k65kkg2ejdrzf4v0, $m4is_pvdf63hb87pq7s4x9hq8kb5jn, $m4is_hsxytnwdp65nhbaq818n4,
 $m4is_r4djz5rm18mmv3y54, $m4is_8w3ygxp1q3me60e6c28evsjyv = 0, $m4is_b93c29gg01cqnkz68jxk = 'us-east-1', $m4is_yq9n3v1p51evv3bddw24fsjkv12w7 = [] ) {
if ( substr( $m4is_r4djz5rm18mmv3y54,
 0, 1 ) !== '/' ) {
$m4is_r4djz5rm18mmv3y54 = '/' . $m4is_r4djz5rm18mmv3y54;
}
if ( empty( $m4is_b93c29gg01cqnkz68jxk) ) {
$m4is_b93c29gg01cqnkz68jxk = self::m4is_m27ajj6qhxwne0ysdwh5yc0( $m4is_hsxytnwdp65nhbaq818n4 );

}
$m4is_bsf10nsh66f94w6fya0vv14191rstyp5 = str_replace( '%2F', '/', rawurlencode( $m4is_r4djz5rm18mmv3y54 ) );
$m4is_dg9es8sgvekcgr4skt4ze8sb89sy0 = [];

foreach ( $m4is_yq9n3v1p51evv3bddw24fsjkv12w7 as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_j8j55t8dz79m7 = strtolower( $m4is_j8j55t8dz79m7 );

$m4is_dg9es8sgvekcgr4skt4ze8sb89sy0[$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;
}
if ( ! array_key_exists( 'host', $m4is_dg9es8sgvekcgr4skt4ze8sb89sy0 ) ) {
$m4is_b93c29gg01cqnkz68jxk = empty($m4is_b93c29gg01cqnkz68jxk) ? '' : $m4is_b93c29gg01cqnkz68jxk;

$m4is_dg9es8sgvekcgr4skt4ze8sb89sy0['host'] = ($m4is_b93c29gg01cqnkz68jxk == 'us-east-1') ? "{$m4is_hsxytnwdp65nhbaq818n4}.s3.amazonaws.com" : "{$m4is_hsxytnwdp65nhbaq818n4}.s3-{$m4is_b93c29gg01cqnkz68jxk}.amazonaws.com";

}
ksort($m4is_dg9es8sgvekcgr4skt4ze8sb89sy0);
$m4is_m3vc8bgzr2dykb6h6y6kgp1vnd6wy = '';
foreach ($m4is_dg9es8sgvekcgr4skt4ze8sb89sy0 as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_m3vc8bgzr2dykb6h6y6kgp1vnd6wy .= $m4is_j8j55t8dz79m7 . ':' . trim($m4is_rqxytszfq5v6syth1csqqxvy5) . "\n";

}
$m4is_76fhysy1kaeadx0a26h6tqt1y6v = implode(';', array_keys($m4is_dg9es8sgvekcgr4skt4ze8sb89sy0) );
$m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta = time();

$m4is_z5hsjjwm8fchsp6jdmxvp = gmdate('Ymd', $m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta);
$m4is_137bkre9n4bfj = $m4is_z5hsjjwm8fchsp6jdmxvp . 'T000000Z';

$m4is_137bkre9n4bfj = $m4is_z5hsjjwm8fchsp6jdmxvp . 'T' . gmdate('His', $m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta) . 'Z';
$m4is_e9nrep2zsseb2g1mmb63hxjh = 'AWS4-HMAC-SHA256';

$m4is_fyqt41j3hewwq2gfmc9ftaz25rgd = "$m4is_z5hsjjwm8fchsp6jdmxvp/$m4is_b93c29gg01cqnkz68jxk/s3/aws4_request";
$m4is_9d8ah5g6911y1nyncsc2x3b = [
'X-Amz-Algorithm' =>
 $m4is_e9nrep2zsseb2g1mmb63hxjh,
'X-Amz-Credential' => $m4is_y9na9td0k65kkg2ejdrzf4v0 . '/' . $m4is_fyqt41j3hewwq2gfmc9ftaz25rgd,
'X-Amz-Date' =>
 $m4is_137bkre9n4bfj,
'X-Amz-SignedHeaders' => $m4is_76fhysy1kaeadx0a26h6tqt1y6v
];
if ($m4is_8w3ygxp1q3me60e6c28evsjyv > 0) {
$m4is_9d8ah5g6911y1nyncsc2x3b['X-Amz-Expires'] = $m4is_8w3ygxp1q3me60e6c28evsjyv;

}
ksort($m4is_9d8ah5g6911y1nyncsc2x3b);
$m4is_jadccgbj1n9k2v = [];
foreach ($m4is_9d8ah5g6911y1nyncsc2x3b as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_jadccgbj1n9k2v[] = rawurlencode($m4is_j8j55t8dz79m7) . '=' . rawurlencode($m4is_rqxytszfq5v6syth1csqqxvy5);

}
$m4is_ww42s7wr8j8p = implode('&', $m4is_jadccgbj1n9k2v);
$m4is_d1ta294r5y = "GET\n$m4is_bsf10nsh66f94w6fya0vv14191rstyp5\n$m4is_ww42s7wr8j8p\n$m4is_m3vc8bgzr2dykb6h6y6kgp1vnd6wy\n$m4is_76fhysy1kaeadx0a26h6tqt1y6v\nUNSIGNED-PAYLOAD";

$m4is_v6s37hzecatn5 = "$m4is_e9nrep2zsseb2g1mmb63hxjh\n$m4is_137bkre9n4bfj\n$m4is_fyqt41j3hewwq2gfmc9ftaz25rgd\n" . hash('sha256',
 $m4is_d1ta294r5y, false);
$m4is_d56bjyzjhje3g = hash_hmac('sha256', 'aws4_request', hash_hmac('sha256', 's3', hash_hmac('sha256', $m4is_b93c29gg01cqnkz68jxk,
 hash_hmac('sha256', $m4is_z5hsjjwm8fchsp6jdmxvp, 'AWS4' . $m4is_pvdf63hb87pq7s4x9hq8kb5jn, true), true), true), true);
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = hash_hmac('sha256',
 $m4is_v6s37hzecatn5, $m4is_d56bjyzjhje3g);
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = 'https://' . $m4is_dg9es8sgvekcgr4skt4ze8sb89sy0['host'] . $m4is_bsf10nsh66f94w6fya0vv14191rstyp5 . '?' . $m4is_ww42s7wr8j8p . '&X-Amz-Signature=' . $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn;

return $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq;
}
}
