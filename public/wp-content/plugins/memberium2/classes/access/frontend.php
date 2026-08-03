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

final class m4is_htwcx7s7vsfkt7 {
private $m4is_nk7m522gtdvjxst4bz74bh0hj24av64 = []; 
private $m4is_exbfhymk12j = []; 
private $m4is_2mhc449shbstw8dhy = [];
 
private $m4is_891d70ycdknhrp2bgk9t5y0a0bdjp = []; 
private $m4is_d5zacwxmp = [
'any_membership',
'contact_ids',
'eval',
'invert_results',

'logged_in_only',
'logged_out_only',
'memberships',
'tags1',
'tags2'
];
private $m4is_djk0n7knpjphgz = [
'any_membership' => 0,
'asset_id' =>
 '',
'contact_ids' => '',
'eval' => '',
'invert_results' => 0,
'logged_in_only' => 0,
'logged_out_only' => 0,
'memberships' => '',
'tags1' =>
 '',
'tags2' => ''
];
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef(){
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}

private function __construct() {
}

public function m4is_5wz355nv6hgn5e9pt4gcezrrt2stqx9( array $m4is_44vca1rpez0e68fha3bm910f3ne2z,
 string $m4is_h7zwy5f0w3y9gx3wm ) : bool {

static $m4is_mtjbb6sywmpnaz3125h6ycckx = [];
$m4is_n7x0afpz = [
'any_membership' => 0,
'asset_id' =>
 '',
'contact_ids' => '',
'eval' => '',
'invert_results' => 0,
'logged_in_only' => 0,
'logged_out_only' => 0,
'memberships' => '',
'tags1' =>
 '',
'tags2' => ''
];
$m4is_7at6ht5xya03bc = wp_parse_args( $m4is_44vca1rpez0e68fha3bm910f3ne2z, $m4is_n7x0afpz );
if ( ! empty( $m4is_7at6ht5xya03bc['contact_ids'] ) ) {
$m4is_7at6ht5xya03bc['contact_ids'] = $this->m4is_cywg9x28qk( (string) $m4is_7at6ht5xya03bc['contact_ids'] );

}
if ( ! empty($m4is_7at6ht5xya03bc['asset_id']) ){
$m4is_7at6ht5xya03bc['asset_id'] = $this->m4is_cywg9x28qk( (string) $m4is_7at6ht5xya03bc['asset_id'] );

}

$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = md5( serialize( $m4is_7at6ht5xya03bc ) );
if ( ! array_key_exists( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z,
 $m4is_mtjbb6sywmpnaz3125h6ycckx ) ) {
$m4is_mtjbb6sywmpnaz3125h6ycckx[$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z] = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_7sg9f2ayr7phwk21e754en2t805d( true,
 $m4is_7at6ht5xya03bc, $m4is_h7zwy5f0w3y9gx3wm, $m4is_7at6ht5xya03bc['asset_id'] );
}
return $m4is_mtjbb6sywmpnaz3125h6ycckx[$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z];

}
function m4is_cywg9x28qk( string $m4is_934a95jn ) : string {
return trim( str_replace( [" ", "-", "\n", "\r", "\t"], '', $m4is_934a95jn ),
 ',' );
}




function m4is_v6y0x50vjphsr9y7n6q1h5( $m4is_xy1p2xem97n78, $m4is_cnhqbxwramcfrsmrqvmq3z08nzhb1pqt ) {
if( empty( $m4is_xy1p2xem97n78 ) ) {
return $m4is_xy1p2xem97n78;
 
}
$m4is_44vca1rpez0e68fha3bm910f3ne2z = $m4is_cnhqbxwramcfrsmrqvmq3z08nzhb1pqt['attrs'];

if ( empty( $m4is_44vca1rpez0e68fha3bm910f3ne2z ) ) {

if ( empty( $m4is_cnhqbxwramcfrsmrqvmq3z08nzhb1pqt['blockName'] ) ) {

$m4is_8hphzjz7d = $this->m4is_et332kgg( $m4is_xy1p2xem97n78 );

if ($m4is_8hphzjz7d){
foreach ($m4is_8hphzjz7d as $m4is_7wfxn2e73) {
$m4is_xy1p2xem97n78 = str_replace($m4is_7wfxn2e73, '', $m4is_xy1p2xem97n78);

}
return $m4is_xy1p2xem97n78;
}

else {
return $m4is_xy1p2xem97n78;
}
}

else {
return $m4is_xy1p2xem97n78;
}
}

else {
$m4is_37mvhcx3j = $this->m4is_1ragdr4m1mrmqgwc( $m4is_44vca1rpez0e68fha3bm910f3ne2z );

return $m4is_37mvhcx3j ? $m4is_xy1p2xem97n78 : '';
}
}

function m4is_et332kgg( $m4is_xy1p2xem97n78 ){
$m4is_8hphzjz7d = [];
preg_match_all( '/' . get_shortcode_regex() . '/',
 $m4is_xy1p2xem97n78, $m4is_e200zw8mj7k8m1hbx3m, PREG_SET_ORDER );
foreach ( $m4is_e200zw8mj7k8m1hbx3m as $m4is_7wfxn2e73 ) {
$m4is_44vca1rpez0e68fha3bm910f3ne2z = empty( $m4is_7wfxn2e73[3] ) ? false : shortcode_parse_atts( $m4is_7wfxn2e73[3] );

if ( $m4is_44vca1rpez0e68fha3bm910f3ne2z ) {

$m4is_9yv17e4jj4xy4927jsej5 = $this->m4is_1ragdr4m1mrmqgwc( $m4is_44vca1rpez0e68fha3bm910f3ne2z );


if (! $m4is_9yv17e4jj4xy4927jsej5) {
$m4is_8hphzjz7d[] = $m4is_7wfxn2e73[0];
}
}
}
return empty( $m4is_8hphzjz7d ) ? false : $m4is_8hphzjz7d;

}

function m4is_1ragdr4m1mrmqgwc( array $m4is_44vca1rpez0e68fha3bm910f3ne2z ) : bool {
$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab = m4is_9db7hheseencedjdjv::PREFIX;

$m4is_gv7vjyv2c6g3nepw6 = [
'memberships' => empty( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_memberships"] ) ? '' : $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_memberships"],

'any_membership' => isset( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anymembership"] ) && $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anymembership"] === 'on' ? 1 : 0,

'logged_in_only' => isset( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_loggedin"] ) && $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_loggedin"] === 'on' ? 1 : 0,

'logged_out_only' => isset( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anonymous_only"] ) && $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anonymous_only"] === 'on' ? 1 : 0,

'invert_results' => isset( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_invert_results"] ) && $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_invert_results"] === 'on' ? 1 : 0,

'contact_ids' => empty( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_contact_ids"] ) ? '' : sanitize_text_field( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_contact_ids"] ),

'tags1' => empty( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags"] ) ? '' : $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags"],

'tags2' => empty( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags2"] ) ? '' : $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags2"],

'eval' => empty( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_eval"] ) ? '' : trim( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_eval"] ),

'asset_id' => empty( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_asset_id"] ) ? '' : sanitize_text_field( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_asset_id"] ),

];
return $this->m4is_5wz355nv6hgn5e9pt4gcezrrt2stqx9( $m4is_gv7vjyv2c6g3nepw6, 'gutenberg' );
}




function m4is_7f5z1pzhe7( $m4is_3h2p59t1q80qzpcs,
 $m4is_ej77qcz39xjz, $m4is_g61yzqs7ecta0xztr70d7v ) {
$m4is_7cnqmq393r5943bakytp1sjm428qk1 = [];
$m4is_w0y3c6pa7wp01b = is_object( $m4is_ej77qcz39xjz ) && isset( $m4is_ej77qcz39xjz->slug ) ? $m4is_ej77qcz39xjz->slug : 'default';

if ( is_array( $m4is_3h2p59t1q80qzpcs ) && ! empty( $m4is_3h2p59t1q80qzpcs ) ) {
foreach ( $m4is_3h2p59t1q80qzpcs as $m4is_5vcwef7pymrfb3zawe =>
 $m4is_s8cs5mdq57e5bgpqzd ) {
if ( $this->m4is_xtt3pfy78dahny7($m4is_s8cs5mdq57e5bgpqzd, $m4is_3h2p59t1q80qzpcs, $m4is_w0y3c6pa7wp01b) ) {
$m4is_7cnqmq393r5943bakytp1sjm428qk1[] = $m4is_s8cs5mdq57e5bgpqzd;

}
}
$m4is_3h2p59t1q80qzpcs = $m4is_7cnqmq393r5943bakytp1sjm428qk1;
}
return $m4is_3h2p59t1q80qzpcs;
}

function m4is_xtt3pfy78dahny7( $m4is_s8cs5mdq57e5bgpqzd,
 $m4is_3h2p59t1q80qzpcs, $m4is_w0y3c6pa7wp01b ) {
$m4is_w0y3c6pa7wp01b = empty( $m4is_w0y3c6pa7wp01b ) ? 'default' : $m4is_w0y3c6pa7wp01b;

$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_s8cs5mdq57e5bgpqzd->ID;
$m4is_k1eftjy4k5430qzqhjdtxyn7j = $m4is_s8cs5mdq57e5bgpqzd->menu_item_parent;

if ( ! isset( $this->m4is_exbfhymk12j[$m4is_w0y3c6pa7wp01b] ) ) {
$this->m4is_exbfhymk12j[$m4is_w0y3c6pa7wp01b] = [];
}
$m4is_exbfhymk12j = $this->m4is_exbfhymk12j[$m4is_w0y3c6pa7wp01b];


if ( isset( $m4is_exbfhymk12j[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] ) ) {
return $m4is_exbfhymk12j[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh];

}

$m4is_pk98f5nk = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_92pp067995jqck( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh );


if (empty($m4is_pk98f5nk) ) {
$m4is_exbfhymk12j = $this->m4is_5erd7arc388jd8gtnthfa3189jtfv94($m4is_s8cs5mdq57e5bgpqzd, $m4is_3h2p59t1q80qzpcs,
 $m4is_w0y3c6pa7wp01b);
return $m4is_exbfhymk12j[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh];
}
$m4is_yagwx4avb4zsgzp81wt0tdanwew5 = apply_filters("wpal/menu/{$m4is_w0y3c6pa7wp01b}/item/visibility",
 $m4is_pk98f5nk, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh);
$m4is_7at6ht5xya03bc = wp_parse_args( $m4is_yagwx4avb4zsgzp81wt0tdanwew5, $this->m4is_djk0n7knpjphgz );

if (m4is_9d8n6yra072mpxd0pczne9::m4is_e7casgxk1m07jenspeks11v() ) {
$m4is_19x1c17et728k945 = $this->m4is_d5zacwxmp;
foreach($this->m4is_d5zacwxmp as $m4is_j8j55t8dz79m7) {
if (! empty($m4is_7at6ht5xya03bc[$m4is_j8j55t8dz79m7]) ) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

break;
}
}
}
$m4is_4cmnqx4j = $this->m4is_5wz355nv6hgn5e9pt4gcezrrt2stqx9( $m4is_7at6ht5xya03bc, $m4is_w0y3c6pa7wp01b );
if ($m4is_4cmnqx4j ) {

$m4is_exbfhymk12j = $this->m4is_5erd7arc388jd8gtnthfa3189jtfv94($m4is_s8cs5mdq57e5bgpqzd,
 $m4is_3h2p59t1q80qzpcs, $m4is_w0y3c6pa7wp01b);
$m4is_4cmnqx4j = $m4is_exbfhymk12j[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh];
}
return $m4is_4cmnqx4j;

}

function m4is_5erd7arc388jd8gtnthfa3189jtfv94( $m4is_s8cs5mdq57e5bgpqzd, $m4is_3h2p59t1q80qzpcs, $m4is_w0y3c6pa7wp01b ) {

$m4is_k1eftjy4k5430qzqhjdtxyn7j = $m4is_s8cs5mdq57e5bgpqzd->menu_item_parent;

$m4is_exbfhymk12j = $this->m4is_exbfhymk12j[$m4is_w0y3c6pa7wp01b];
$m4is_86p36xtmcsb7bh6kvc6nr5eg0 = $m4is_s8cs5mdq57e5bgpqzd->ID;

$m4is_exbfhymk12j[$m4is_86p36xtmcsb7bh6kvc6nr5eg0] = true;
if ($m4is_k1eftjy4k5430qzqhjdtxyn7j > 0 ) {

if ( ! isset($m4is_exbfhymk12j[$m4is_k1eftjy4k5430qzqhjdtxyn7j]) ) {
$m4is_5qr45zdkesq5nq = $this->m4is_qv0sd02p($m4is_s8cs5mdq57e5bgpqzd,
 $m4is_3h2p59t1q80qzpcs);
$m4is_exbfhymk12j[$m4is_k1eftjy4k5430qzqhjdtxyn7j] = $this->m4is_xtt3pfy78dahny7($m4is_5qr45zdkesq5nq, $m4is_3h2p59t1q80qzpcs,
 $m4is_w0y3c6pa7wp01b);
}
$m4is_exbfhymk12j[$m4is_86p36xtmcsb7bh6kvc6nr5eg0] = $m4is_exbfhymk12j[$m4is_k1eftjy4k5430qzqhjdtxyn7j];
}

$this->m4is_exbfhymk12j[$m4is_w0y3c6pa7wp01b] = $m4is_exbfhymk12j;

return $m4is_exbfhymk12j;
}

function m4is_qv0sd02p($m4is_s8cs5mdq57e5bgpqzd, $m4is_3h2p59t1q80qzpcs) {
$m4is_5qr45zdkesq5nq = false;

$m4is_k1eftjy4k5430qzqhjdtxyn7j = $m4is_s8cs5mdq57e5bgpqzd->menu_item_parent;
if ($m4is_k1eftjy4k5430qzqhjdtxyn7j > 0) {
$m4is_e0nz8gptw9s = array_search( $m4is_k1eftjy4k5430qzqhjdtxyn7j,
 array_column($m4is_3h2p59t1q80qzpcs, 'ID') );
if ($m4is_e0nz8gptw9s !== false ) {
$m4is_5qr45zdkesq5nq = $m4is_3h2p59t1q80qzpcs[$m4is_e0nz8gptw9s];

}
}
return $m4is_5qr45zdkesq5nq;
}



function m4is_4b4varay718w50kr($m4is_2tjspzbt67xd96dnv){
if ( is_customize_preview() ){
return $m4is_2tjspzbt67xd96dnv;

}
global $wp_registered_widgets;
if( empty($wp_registered_widgets) ){
return $m4is_2tjspzbt67xd96dnv;
}
foreach($m4is_2tjspzbt67xd96dnv as $m4is_v5tp685rp4ymhdk970 =>
 $m4is_nk7m522gtdvjxst4bz74bh0hj24av64){
if ($m4is_v5tp685rp4ymhdk970 == 'wp_inactive_widgets' || empty($m4is_nk7m522gtdvjxst4bz74bh0hj24av64)){
continue;

}
foreach($m4is_nk7m522gtdvjxst4bz74bh0hj24av64 as $m4is_5vcwef7pymrfb3zawe => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh){
$m4is_4cmnqx4j = $this->m4is_akmtnesdhytncf1zavnbs9rmrgk5n3($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_v5tp685rp4ymhdk970);
if (is_null($m4is_4cmnqx4j) ) {
$m4is_6fdcfh260c7q5 = isset($wp_registered_widgets[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['callback'][0]->option_name) ? $wp_registered_widgets[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['callback'][0]->option_name : '';

$m4is_j8j55t8dz79m7 = isset($wp_registered_widgets[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['params'][0]['number']) ? $wp_registered_widgets[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['params'][0]['number'] : '';

$m4is_zwbnp5z1a76pe8pk7w = get_option($m4is_6fdcfh260c7q5);
$m4is_zwbnp5z1a76pe8pk7w = is_array($m4is_zwbnp5z1a76pe8pk7w) && isset($m4is_zwbnp5z1a76pe8pk7w[$m4is_j8j55t8dz79m7]) ? $m4is_zwbnp5z1a76pe8pk7w[$m4is_j8j55t8dz79m7] : null;

if (is_array($m4is_zwbnp5z1a76pe8pk7w) && ! empty($m4is_zwbnp5z1a76pe8pk7w['content']) ){
$m4is_cnhqbxwramcfrsmrqvmq3z08nzhb1pqt = parse_blocks($m4is_zwbnp5z1a76pe8pk7w['content']);

$m4is_44vca1rpez0e68fha3bm910f3ne2z = isset($m4is_cnhqbxwramcfrsmrqvmq3z08nzhb1pqt[0]) ? $m4is_cnhqbxwramcfrsmrqvmq3z08nzhb1pqt[0]['attrs'] : [];

$m4is_4cmnqx4j = $this->m4is_jtt80dvt1pm2wbq9($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_44vca1rpez0e68fha3bm910f3ne2z, $m4is_v5tp685rp4ymhdk970);

}
else{
$m4is_4cmnqx4j = $this->m4is_4kv78wag1mqrnxs($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_v5tp685rp4ymhdk970);
}
}
$this->m4is_nk7m522gtdvjxst4bz74bh0hj24av64[$m4is_v5tp685rp4ymhdk970][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_4cmnqx4j;

if( ! $m4is_4cmnqx4j ){
unset($m4is_2tjspzbt67xd96dnv[$m4is_v5tp685rp4ymhdk970][$m4is_5vcwef7pymrfb3zawe]);
}
}
}
return $m4is_2tjspzbt67xd96dnv;

}

function m4is_fd9mf3cas($m4is_x83y9shwv134vk9r8c85, $m4is_sdah424gxbbc9c04tjehc790cr2n, $m4is_g61yzqs7ecta0xztr70d7v){
$m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr = empty($m4is_g61yzqs7ecta0xztr70d7v['id']) ? 'custom' : $m4is_g61yzqs7ecta0xztr70d7v['id'];

$m4is_4cmnqx4j = $this->m4is_akmtnesdhytncf1zavnbs9rmrgk5n3($m4is_sdah424gxbbc9c04tjehc790cr2n->id, $m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr);

if( is_null($m4is_4cmnqx4j) ){

if (is_a($m4is_sdah424gxbbc9c04tjehc790cr2n, 'WP_Widget_Block')) {
$m4is_cnhqbxwramcfrsmrqvmq3z08nzhb1pqt = empty($m4is_x83y9shwv134vk9r8c85['content']) ? [] : parse_blocks($m4is_x83y9shwv134vk9r8c85['content']);

$m4is_44vca1rpez0e68fha3bm910f3ne2z = isset($m4is_cnhqbxwramcfrsmrqvmq3z08nzhb1pqt[0]) ? $m4is_cnhqbxwramcfrsmrqvmq3z08nzhb1pqt[0]['attrs'] : [];

$m4is_4cmnqx4j = $this->m4is_jtt80dvt1pm2wbq9($m4is_sdah424gxbbc9c04tjehc790cr2n->id, $m4is_44vca1rpez0e68fha3bm910f3ne2z, $m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr);

}
else{
$m4is_4cmnqx4j = $this->m4is_4kv78wag1mqrnxs($m4is_sdah424gxbbc9c04tjehc790cr2n->id, $m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr);

}
}
return $m4is_4cmnqx4j ? $m4is_x83y9shwv134vk9r8c85 : false;
}
function m4is_jtt80dvt1pm2wbq9( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_44vca1rpez0e68fha3bm910f3ne2z, $m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr ){
$m4is_44vca1rpez0e68fha3bm910f3ne2z = empty($m4is_44vca1rpez0e68fha3bm910f3ne2z) ? $m4is_44vca1rpez0e68fha3bm910f3ne2z : $this->m4is_1ragdr4m1mrmqgwc($m4is_44vca1rpez0e68fha3bm910f3ne2z);

$this->m4is_nk7m522gtdvjxst4bz74bh0hj24av64[$m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $this->m4is_azx0fmq5q6zcwramk4mxmyk0wtjj4r4( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_44vca1rpez0e68fha3bm910f3ne2z, $m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr );
return $this->m4is_nk7m522gtdvjxst4bz74bh0hj24av64[$m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh];

}

function m4is_4kv78wag1mqrnxs($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr){
$m4is_4cmnqx4j = $this->m4is_akmtnesdhytncf1zavnbs9rmrgk5n3($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr);
if( is_null($m4is_4cmnqx4j) ){
if (preg_match('/^(.+)-(\d+)$/', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_hhe08taea8) ){
$m4is_j2epbkj6df0h31aymz = $m4is_hhe08taea8[1];
$m4is_5vcwef7pymrfb3zawe = $m4is_hhe08taea8[2];
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = get_option("widget_{$m4is_j2epbkj6df0h31aymz}");

$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = empty($m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_5vcwef7pymrfb3zawe]) ? [] : $m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_5vcwef7pymrfb3zawe];

$m4is_4cmnqx4j = $this->m4is_azx0fmq5q6zcwramk4mxmyk0wtjj4r4( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 $m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr );
$this->m4is_nk7m522gtdvjxst4bz74bh0hj24av64[$m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_4cmnqx4j;

}
else{
$this->m4is_nk7m522gtdvjxst4bz74bh0hj24av64[$m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = true;

}
}
return $this->m4is_nk7m522gtdvjxst4bz74bh0hj24av64[$m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh];

}
function m4is_akmtnesdhytncf1zavnbs9rmrgk5n3( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr ){
if( ! isset($this->m4is_nk7m522gtdvjxst4bz74bh0hj24av64[$m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr]) ){
$this->m4is_nk7m522gtdvjxst4bz74bh0hj24av64[$m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr] = [];

}
return isset($this->m4is_nk7m522gtdvjxst4bz74bh0hj24av64[$m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]) ? $this->m4is_nk7m522gtdvjxst4bz74bh0hj24av64[$m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] : null;

}
function m4is_azx0fmq5q6zcwramk4mxmyk0wtjj4r4( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_8ew58cpxmftgpw93gdffm4s9bbwy, $m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr ){
$m4is_7cnqmq393r5943bakytp1sjm428qk1 = apply_filters("memberium/widget/visibility",
 $m4is_8ew58cpxmftgpw93gdffm4s9bbwy, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_k02m2ny7pnjnrzzc9ew4264grqcmj4jr);
$m4is_7at6ht5xya03bc = wp_parse_args( $m4is_7cnqmq393r5943bakytp1sjm428qk1,
 $this->m4is_djk0n7knpjphgz );
if (m4is_9d8n6yra072mpxd0pczne9::m4is_e7casgxk1m07jenspeks11v() ) {
foreach ($this->m4is_d5zacwxmp as $m4is_j8j55t8dz79m7) {
if (! empty($m4is_7at6ht5xya03bc[$m4is_j8j55t8dz79m7]) ) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

break;
}
}
}
return $this->m4is_5wz355nv6hgn5e9pt4gcezrrt2stqx9( $m4is_7at6ht5xya03bc, 'widget-area' );
}




function m4is_k5mtq3t6vek5($m4is_j34bmw9dcjexfj1qpz) {
if (! is_admin() && $m4is_j34bmw9dcjexfj1qpz->is_main_query() ) {

if (is_archive() ) {
$m4is_bzfzm0g7yp88rct2 = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_dy768y1p8q20bhaaw4nnhyhncpxfpwmy();

$m4is_g4p0gf91cgmqx = get_queried_object();
$m4is_x1tgnd49gp3e3jm = isset($m4is_g4p0gf91cgmqx->taxonomy) ? $m4is_g4p0gf91cgmqx->taxonomy : false;

if( $m4is_x1tgnd49gp3e3jm && in_array($m4is_x1tgnd49gp3e3jm, $m4is_bzfzm0g7yp88rct2) ){
$this->m4is_74sdggymretce0tfsek($m4is_j34bmw9dcjexfj1qpz);

}
}
}
}

function m4is_5ze962cg65sn4f8hwk031rgry9a6n1fb($m4is_sv4bnsx5cf, $m4is_x1tgnd49gp3e3jm, $m4is_nrrnyac2e2rdh1w2vyvb0kejxsw5g1sj,
 $m4is_hwmqckmn3cbtzkypz5) {
foreach($m4is_sv4bnsx5cf as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_cgfc75ndjfc08) {
if ( is_a($m4is_cgfc75ndjfc08,
 'WP_Term') && $m4is_cgfc75ndjfc08->taxonomy == 'category' ) {
if (! $this->m4is_zj3vtv77dnee81e0x9wxfb6ed1esc22( $m4is_cgfc75ndjfc08->term_id,
 $m4is_cgfc75ndjfc08->taxonomy ) ) {
unset($m4is_sv4bnsx5cf[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]);
}
}
}
return $m4is_sv4bnsx5cf;

}
function m4is_74sdggymretce0tfsek( $m4is_j34bmw9dcjexfj1qpz ){
$m4is_49f3c51tycscr8ppmkskj4g4mpzg404r = isset($m4is_j34bmw9dcjexfj1qpz->queried_object) ? $m4is_j34bmw9dcjexfj1qpz->queried_object : false;

if( ! $m4is_49f3c51tycscr8ppmkskj4g4mpzg404r ){
return;
}

$m4is_x1tgnd49gp3e3jm = $m4is_49f3c51tycscr8ppmkskj4g4mpzg404r->taxonomy;

$m4is_qx43kpyr0vp913tw7n1ya3v1wh = $m4is_49f3c51tycscr8ppmkskj4g4mpzg404r->term_taxonomy_id;
$m4is_4cmnqx4j = $this->m4is_zj3vtv77dnee81e0x9wxfb6ed1esc22($m4is_qx43kpyr0vp913tw7n1ya3v1wh,
 $m4is_x1tgnd49gp3e3jm);

if( $m4is_4cmnqx4j ){
$m4is_bs7nfb4q1 = $this->m4is_r5mncb73d4eq959z99($m4is_qx43kpyr0vp913tw7n1ya3v1wh, $m4is_x1tgnd49gp3e3jm);

if ( (int) $m4is_bs7nfb4q1 > 0 ){
$m4is_4cmnqx4j = false;
}
}

if ( ! $m4is_4cmnqx4j ){
$m4is_sa1zwmzw = 'hide';
$m4is_891d70ycdknhrp2bgk9t5y0a0bdjp = $this->m4is_891d70ycdknhrp2bgk9t5y0a0bdjp[$m4is_qx43kpyr0vp913tw7n1ya3v1wh];

$m4is_sa1zwmzw = isset($m4is_891d70ycdknhrp2bgk9t5y0a0bdjp['prohibited_action']) ? (int)$m4is_891d70ycdknhrp2bgk9t5y0a0bdjp['prohibited_action'] : 0;


if( $m4is_sa1zwmzw === 1 ){
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = isset($m4is_891d70ycdknhrp2bgk9t5y0a0bdjp['redirect_url']) ? $m4is_891d70ycdknhrp2bgk9t5y0a0bdjp['redirect_url'] : false;

if( $m4is_tfecza742dzhrkkbv781dnbvf40m6 ){
wp_safe_redirect( $m4is_tfecza742dzhrkkbv781dnbvf40m6 );
exit;
}
else {
$m4is_sa1zwmzw = 0;

}
}

if( $m4is_sa1zwmzw === 0 ){
if( method_exists( $m4is_j34bmw9dcjexfj1qpz, 'set_404') ){
$m4is_j34bmw9dcjexfj1qpz->set_404();
}
}
}
}

function m4is_zj3vtv77dnee81e0x9wxfb6ed1esc22( $m4is_qx43kpyr0vp913tw7n1ya3v1wh,
 $m4is_x1tgnd49gp3e3jm ) : bool {

if( isset($this->m4is_2mhc449shbstw8dhy[$m4is_qx43kpyr0vp913tw7n1ya3v1wh]) ){
return $this->m4is_2mhc449shbstw8dhy[$m4is_qx43kpyr0vp913tw7n1ya3v1wh];

}

$m4is_pk98f5nk = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_tzj9w1g36574r9qq($m4is_qx43kpyr0vp913tw7n1ya3v1wh);


if( empty($m4is_pk98f5nk) ){
$this->m4is_891d70ycdknhrp2bgk9t5y0a0bdjp[$m4is_qx43kpyr0vp913tw7n1ya3v1wh] = [];
return true;
}
$this->m4is_891d70ycdknhrp2bgk9t5y0a0bdjp[$m4is_qx43kpyr0vp913tw7n1ya3v1wh] = $m4is_pk98f5nk;

$m4is_yagwx4avb4zsgzp81wt0tdanwew5 = apply_filters('wpal/taxonomy/access/visibility/settings', $m4is_pk98f5nk, $m4is_qx43kpyr0vp913tw7n1ya3v1wh);

$m4is_7at6ht5xya03bc = wp_parse_args($m4is_yagwx4avb4zsgzp81wt0tdanwew5, $this->m4is_djk0n7knpjphgz);
if (m4is_9d8n6yra072mpxd0pczne9::m4is_e7casgxk1m07jenspeks11v() ) {
$m4is_19x1c17et728k945 = $this->m4is_d5zacwxmp;

foreach($this->m4is_d5zacwxmp as $m4is_j8j55t8dz79m7) {
if (! empty($m4is_7at6ht5xya03bc[$m4is_j8j55t8dz79m7]) ) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

break;
}
}
}
return $this->m4is_5wz355nv6hgn5e9pt4gcezrrt2stqx9( $m4is_7at6ht5xya03bc, $m4is_x1tgnd49gp3e3jm );
}

function m4is_r5mncb73d4eq959z99( $m4is_qx43kpyr0vp913tw7n1ya3v1wh,
 $m4is_x1tgnd49gp3e3jm ){
$m4is_3bt34b2tgskdc7w1tf5pj6npwz0m0 = get_ancestors($m4is_qx43kpyr0vp913tw7n1ya3v1wh, $m4is_x1tgnd49gp3e3jm,
 'taxonomy');
if( is_array($m4is_3bt34b2tgskdc7w1tf5pj6npwz0m0) && ! empty($m4is_3bt34b2tgskdc7w1tf5pj6npwz0m0) ){
foreach ($m4is_3bt34b2tgskdc7w1tf5pj6npwz0m0 as $m4is_bs7nfb4q1) {

if( ! $this->m4is_zj3vtv77dnee81e0x9wxfb6ed1esc22($m4is_bs7nfb4q1,
 $m4is_x1tgnd49gp3e3jm) ){
return $m4is_bs7nfb4q1;
}
}
}
return false;
}
}
