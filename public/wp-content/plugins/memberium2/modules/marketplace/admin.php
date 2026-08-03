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

final class m4is_8hhdgtw61ts9cwpcgfk {
private $marketplace_version = '1.0.0';
protected $marketplace_feed_url = 'https://licenseserver.webpowerandlight.com/memberium-is/marketplace.php';

private $marketplace_admin_slug = 'memberium-marketplace';
private $marketplace_opt_key = 'memberium/marketplace';
private $marketplace_cached_time = 60 * 5;

function __construct() {

add_action('admin_menu', [$this, 'm4is_s4jjrdysfc1n5y8rrrw34hc6b81wb'], PHP_INT_MAX);
add_action('admin_enqueue_scripts',
 [$this, 'm4is_g1k2z4wgdszp84td94']);
}
function m4is_s4jjrdysfc1n5y8rrrw34hc6b81wb(){
$m4is_ep6rjata = 'manage_options';
if (! current_user_can($m4is_ep6rjata) ) {
return;

}
$m4is_w0y3c6pa7wp01b = 'memberium';
$m4is_nab4fbybdg04ebj55s6 = $m4is_ep6rjata;
add_submenu_page($m4is_w0y3c6pa7wp01b, 'Marketplace',
 'Marketplace', $m4is_nab4fbybdg04ebj55s6, $this->marketplace_admin_slug, [$this, 'm4is_n68v5ge56q30fm6zpf8f5fmvjjzx28k2']);
}
function m4is_g1k2z4wgdszp84td94($m4is_sr96vk8tz2fjh0371e0hb8dc9z80) {
if ( 'memberium_page_memberium-marketplace' != $m4is_sr96vk8tz2fjh0371e0hb8dc9z80 ) {
return;

}
wp_register_style('m4is-marketplace-css',
plugin_dir_url(__FILE__).'assets/css/styles.css',
[],
$this->marketplace_version,
'all'
);

wp_enqueue_style('m4is-marketplace-css');
}
function m4is_n68v5ge56q30fm6zpf8f5fmvjjzx28k2() {
$m4is_zxrm1q7avhrma93354pkej44j = $this->m4is_dxf1fbxbjsrjkfw0883bx();

if( ! $m4is_zxrm1q7avhrma93354pkej44j ){
echo __('No Listings Found');
}
else{
$m4is_m2v15rtvdgct80e = ($m4is_zxrm1q7avhrma93354pkej44j) ? count($m4is_zxrm1q7avhrma93354pkej44j) : 0;

$m4is_zexj6fxa8z4k14byndq1vmx = admin_url( "admin.php?page=" . $this->marketplace_admin_slug );
$m4is_7taqn5khadgmds8dhb3xbtmpc = ( isset($_GET['tab']) ) ? $_GET['tab'] : false;

if( ! $m4is_7taqn5khadgmds8dhb3xbtmpc ){
$m4is_6k84v5caq4k = array_column($m4is_zxrm1q7avhrma93354pkej44j['content'],'slug');
$m4is_7taqn5khadgmds8dhb3xbtmpc = $m4is_6k84v5caq4k[0];

}
$m4is_kgdw36kdpg5wt2t33r = ( isset($m4is_zxrm1q7avhrma93354pkej44j['style']) ) ? $m4is_zxrm1q7avhrma93354pkej44j['style'] : false;

$m4is_kgdw36kdpg5wt2t33r = ( $m4is_kgdw36kdpg5wt2t33r > '' ) ? $m4is_kgdw36kdpg5wt2t33r : false;
$m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp = ( isset($m4is_zxrm1q7avhrma93354pkej44j['header']) ) ? $m4is_zxrm1q7avhrma93354pkej44j['header'] : false;

$m4is_v0bq50g2mpbf46px5ze4gmc1htwp = ( isset($m4is_zxrm1q7avhrma93354pkej44j['content']) ) ? $m4is_zxrm1q7avhrma93354pkej44j['content'] : false;

$m4is_c0tp21wz8gjz0504xz33r = ( isset($m4is_zxrm1q7avhrma93354pkej44j['footer']) ) ? $m4is_zxrm1q7avhrma93354pkej44j['footer'] : false;

require_once __DIR__ . '/marketplace.php';
}
}
function m4is_dxf1fbxbjsrjkfw0883bx(){
$m4is_d60kn1d3yvprp62rs332 = get_option($this->marketplace_opt_key,
 false);
$m4is_953gn49zbaw8hr2yjsp2tm8 = ( $m4is_d60kn1d3yvprp62rs332 ) ? false : true;
if( $m4is_d60kn1d3yvprp62rs332 ){
if ( ( time() - $m4is_d60kn1d3yvprp62rs332['timestamp'] ) > $this->marketplace_cached_time ) {
$m4is_953gn49zbaw8hr2yjsp2tm8 = true;

}
}
if( $m4is_953gn49zbaw8hr2yjsp2tm8 ){
$m4is_d60kn1d3yvprp62rs332 = $this->m4is_7ew09xbdssa3qcqvs1();
}
return $m4is_d60kn1d3yvprp62rs332 ? $m4is_d60kn1d3yvprp62rs332['data'] : false;

}
function m4is_7ew09xbdssa3qcqvs1() {
$m4is_g61yzqs7ecta0xztr70d7v = [
'user-agent' => 'm4is',
];
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = wp_remote_get( $this->marketplace_feed_url,
 $m4is_g61yzqs7ecta0xztr70d7v );
if( ! is_wp_error($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz) ){
$m4is_d60kn1d3yvprp62rs332 = json_decode( wp_remote_retrieve_body( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ),
 true );
$m4is_d60kn1d3yvprp62rs332 = is_array($m4is_d60kn1d3yvprp62rs332) ? $m4is_d60kn1d3yvprp62rs332 : false;
if( $m4is_d60kn1d3yvprp62rs332 ){
$m4is_v8rtmjp1yheax65zps35hedbm3d6ebta = [
'timestamp' =>
 time(),
'data' => $m4is_d60kn1d3yvprp62rs332
];
update_option($this->marketplace_opt_key, $m4is_v8rtmjp1yheax65zps35hedbm3d6ebta);

return $m4is_v8rtmjp1yheax65zps35hedbm3d6ebta;
}
else {
return false;
}
}
else {
return false;
}
}
}