<?php
/**
 * Proprietary Software - All Rights Reserved
 *
 * This file is part of the Memberium plugin, which is proprietary software developed by Web Power and Light.
 * Unauthorized copying, distribution, or modification of this file, via any medium, is strictly prohibited.
 *
 * Copyright (c) 2015-2024 David J Bullock
 * Web Power and Light
 *
 * For licensing information, please contact Web Power and Light.
 */


class_exists( 'm4is_6y9612z4hjd6fzpap4r5n853641m1jc' ) || die();

final class m4is_9db7hheseencedjdjv {
const NS = 'memberium';
const PREFIX = 'is4wp';
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef(){
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {}
function m4is_c7vzza0dseqrv8k98vz4() {

add_filter( 'rest_pre_dispatch',
 [$this, 'm4is_vbjrwmade3pffrnkqvpz3gc4dz3j'], 10, 3 );
add_action( 'wpal/block/access/init', [$this, 'm4is_jw375md2knh3721d9rxezd2r'],
 1 );
do_action( 'wpal/block/access/init' ); 

if ( version_compare( get_bloginfo( 'version' ), '5.4', '>=' ) ) {
$this->m4is_v6s5y5xpde5ftx8gd6sfg();

}
$this->m4is_3894nkd5ht0z5m9wyyj2fpgch(); 
$this->m4is_pphwry54(); 
}



function m4is_jw375md2knh3721d9rxezd2r() {
if ( is_admin() ) {
add_action( 'enqueue_block_editor_assets',
 [ $this->m4is_dpptpvjk3pcrhemcq1(), 'm4is_5en09w94a' ], 1 ); 
}
else{

add_filter( 'render_block', [ $this->m4is_xpe0t3cfrjmnm2tyt7sve0dk(),
 'm4is_v6y0x50vjphsr9y7n6q1h5' ], PHP_INT_MAX, 2 );
}
}

function m4is_vbjrwmade3pffrnkqvpz3gc4dz3j( $m4is_hartbe843crydzh, $m4is_4wxc01rda,
 $m4is_6hxv330csw89pyf97j9 ) {
if ( strpos( $m4is_6hxv330csw89pyf97j9->get_route(), '/wp/v2/block-renderer' ) !== false) {
if ( isset( $m4is_6hxv330csw89pyf97j9['attributes'] ) ){
$m4is_3vrj8nqkjjj6 = $m4is_6hxv330csw89pyf97j9['attributes'];

if( is_array( $m4is_3vrj8nqkjjj6 ) && ! empty( $m4is_3vrj8nqkjjj6 ) ) {
foreach ($m4is_3vrj8nqkjjj6 as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp) {
if ( strpos( $m4is_bqhtspcavhb01spmfd3x, self::PREFIX ) === 0 ) {
unset( $m4is_3vrj8nqkjjj6[$m4is_bqhtspcavhb01spmfd3x] );

}
}
$m4is_6hxv330csw89pyf97j9['attributes'] = $m4is_3vrj8nqkjjj6;
}
}
}
return $m4is_hartbe843crydzh;
}



function m4is_v6s5y5xpde5ftx8gd6sfg(){
$m4is_knxbec8fr3be1s2tkx0ydee0z = false;

if ( wp_doing_ajax() ) {
$m4is_knxbec8fr3be1s2tkx0ydee0z = isset($_POST['action']) ? $_POST['action'] : false;
}
if ( is_admin() || $m4is_knxbec8fr3be1s2tkx0ydee0z === 'add-menu-item' ) {
add_action('load-nav-menus.php',
 ['m4is_4801pvycyx2vfyx', 'm4is_5eragr7sh2yyj356m'], 1); 

if ($m4is_knxbec8fr3be1s2tkx0ydee0z === 'add-menu-item' ) {
m4is_4801pvycyx2vfyx::m4is_5eragr7sh2yyj356m();

}
}
else if ( ! is_admin() || $m4is_knxbec8fr3be1s2tkx0ydee0z ) {
add_filter('wp_get_nav_menu_items', [$this->m4is_xpe0t3cfrjmnm2tyt7sve0dk(),
 'm4is_7f5z1pzhe7'], 1, 3);
}
}
function m4is_92pp067995jqck( $m4is_86p36xtmcsb7bh6kvc6nr5eg0 ) {
$m4is_pk98f5nk = get_post_meta( $m4is_86p36xtmcsb7bh6kvc6nr5eg0,
 '_wpal/menu/access', true );
return ( ! $m4is_pk98f5nk || ! is_array($m4is_pk98f5nk) || empty($m4is_pk98f5nk) ) ? [] : $m4is_pk98f5nk;

}




public function m4is_3894nkd5ht0z5m9wyyj2fpgch() : void {
$m4is_gjqb2gz74b = 'm4is_hc8af2j3geb67rsaxth6zmvcpnmee4g';
add_action( 'in_widget_form',
 [ $m4is_gjqb2gz74b, 'm4is_s4mjgqgb'], 10, 3 ); 
add_filter( 'widget_update_callback', [ $m4is_gjqb2gz74b, 'm4is_er6y2a605v2h7fgeh'],
 10, 2 ); 
if( is_admin() ){
add_action( 'load-widgets.php', [ $m4is_gjqb2gz74b, 'm4is_xz2vh1pzpdqd9fjz2jtr8kacjr'], 1 ); 
}
else {
add_filter('sidebars_widgets',
 [ $this->m4is_xpe0t3cfrjmnm2tyt7sve0dk(), 'm4is_4b4varay718w50kr'], 10 ); 
add_filter('widget_display_callback', [ $this->m4is_xpe0t3cfrjmnm2tyt7sve0dk(),
 'm4is_fd9mf3cas'], 10, 3 ); 
}
}



function m4is_pphwry54(){
if ( is_admin() && ! wp_doing_ajax() ) {
add_action( 'load-term.php',
 ['m4is_bpxwq3b3pzcb4e217scq729fsqm', 'm4is_qevssvf28e1z46mev9g5qhbvjdwq8'], 1); 

$m4is_vmhtx2ecrnzjpy = 'memberium/taxonomy/access';

$m4is_3b17gcck1gn556v0 = isset($_POST["_{$m4is_vmhtx2ecrnzjpy}_name"]) ? $_POST["_{$m4is_vmhtx2ecrnzjpy}_name"] : false;
if ( $m4is_3b17gcck1gn556v0 && wp_verify_nonce($_POST["_{$m4is_vmhtx2ecrnzjpy}_name"],
 $m4is_vmhtx2ecrnzjpy) ){
m4is_bpxwq3b3pzcb4e217scq729fsqm::m4is_qevssvf28e1z46mev9g5qhbvjdwq8();
}
}
else {
if (! m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_mdj300zr1jk5av2y9cp() ) {
add_action('pre_get_posts',
 [$this->m4is_xpe0t3cfrjmnm2tyt7sve0dk(), 'm4is_k5mtq3t6vek5']);
add_filter('get_terms', [$this->m4is_xpe0t3cfrjmnm2tyt7sve0dk(), 'm4is_5ze962cg65sn4f8hwk031rgry9a6n1fb'],
 -1, 4);
}
}
}

function m4is_dy768y1p8q20bhaaw4nnhyhncpxfpwmy(){
static $m4is_hz1zmc8hg57h2ypm15hnpzkpx;
if ( is_null($m4is_hz1zmc8hg57h2ypm15hnpzkpx) ) {
$m4is_g61yzqs7ecta0xztr70d7v = [
'public' =>
 true,
'show_ui' => true,
];
$m4is_bzfzm0g7yp88rct2 = get_taxonomies($m4is_g61yzqs7ecta0xztr70d7v, 'names');
foreach($m4is_bzfzm0g7yp88rct2 as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
if (substr($m4is_j8j55t8dz79m7, -4, 4) == '_tag') {
unset($m4is_bzfzm0g7yp88rct2[$m4is_j8j55t8dz79m7]);

}
}
$m4is_bzfzm0g7yp88rct2 = apply_filters('memberium/controlled/access/taxonomies', $m4is_bzfzm0g7yp88rct2); 
$m4is_hz1zmc8hg57h2ypm15hnpzkpx = is_array($m4is_bzfzm0g7yp88rct2) ? $m4is_bzfzm0g7yp88rct2 : [];

}
return $m4is_hz1zmc8hg57h2ypm15hnpzkpx;
}
function m4is_tzj9w1g36574r9qq( $m4is_qx43kpyr0vp913tw7n1ya3v1wh ){
$m4is_pk98f5nk = get_term_meta($m4is_qx43kpyr0vp913tw7n1ya3v1wh,
 '_wpal/taxonomy/access', true);
return ( ! $m4is_pk98f5nk || ! is_array($m4is_pk98f5nk) || empty($m4is_pk98f5nk) ) ? [] : $m4is_pk98f5nk;

}



function m4is_dpptpvjk3pcrhemcq1() : m4is_pt9as1ejs6xfpy7cnx0yxk709 {
static $m4is_1090xawqcx3q9p;
return isset( $m4is_1090xawqcx3q9p ) ? $m4is_1090xawqcx3q9p : $m4is_1090xawqcx3q9p = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
function m4is_xpe0t3cfrjmnm2tyt7sve0dk() : m4is_htwcx7s7vsfkt7 {
static $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;
return isset( $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w ) ? $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w : $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_htwcx7s7vsfkt7::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
