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


class m4is_rw6961ens4ystt385wbswb2vfaa {
const VERSION = '1.0.0';
const OPTION_SLUG = 'wpal/zoom/settings';
private $config = [];

private $options = null;
private $connected = false;

function init($m4is_kyrqdd9qn08s3tbxx9ahv) {

define('WPAL_ZOOM_HOME_DIR', dirname(__DIR__) . '/');

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = trailingslashit(plugins_url('', dirname(__FILE__) ) );
define('WPAL_ZOOM_URL', $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq);

$m4is_n7x0afpz = [
'parent_slug' => 'options-general.php',
'menu_slug' => 'wpal-zoom',
'shortcode_prefix' => 'wpal',
'I18n' => [
'page_title' =>
 __('Zoom Settings', 'wpal_ecomm'),
'menu_title' => __('Zoom', 'wpal_ecomm'),
]
];
$this->config = wp_parse_args($m4is_kyrqdd9qn08s3tbxx9ahv,
 $m4is_n7x0afpz);
$this->register_wp_hooks();
}

function register_wp_hooks(){
if( is_admin() ) {

add_action("admin_menu", function(){
$m4is_kyrqdd9qn08s3tbxx9ahv = $this->get_config();

$m4is_9ybr7472pbag66e = $m4is_kyrqdd9qn08s3tbxx9ahv['I18n'];
add_submenu_page(
$m4is_kyrqdd9qn08s3tbxx9ahv['parent_slug'],
$m4is_9ybr7472pbag66e['page_title'],

$m4is_9ybr7472pbag66e['menu_title'],
'manage_options',
$m4is_kyrqdd9qn08s3tbxx9ahv['menu_slug'],
[$this, 'zoom_settings_page']
);
},
 PHP_INT_MAX );
}
else {

$m4is_zxa05fq9f81p8g = $this->config['shortcode_prefix'];
add_shortcode("{$m4is_zxa05fq9f81p8g}_zoom_event",
 function( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf, $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = $this->frontend();

$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->frontend_scripts();
return $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->zoom_event_func( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf, $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 );
} );
}
}

function zoom_settings_page(){
$this->admin()->m4is_3vvw8srjmsmzrn3c( $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b(),
 $this->get_config() );
}

function frontend() {
static $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;
if( is_null($m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w) ){
require_once __DIR__ . '/frontend.php';

$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = new m4is_6hp7k6kfq8pqa4prwe03prv94cxj2( self::VERSION );
}
return $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;

}

function admin(){
static $m4is_1090xawqcx3q9p;
if( is_null($m4is_1090xawqcx3q9p) ){
require_once __DIR__ . '/admin.php';
$m4is_1090xawqcx3q9p = new m4is_a2dwxe7nr5m5b93q5d67zvpwnbn( self::OPTION_SLUG,
 self::VERSION );
}
return $m4is_1090xawqcx3q9p;
}

function api(){
static $m4is_12w1n67twbgwzj5c = false;
if(! $m4is_12w1n67twbgwzj5c){
require_once __DIR__ . '/api.php';

$m4is_j8j55t8dz79m7 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('api_key');
$m4is_rx2cjhd9 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('api_secret');

$m4is_12w1n67twbgwzj5c = new m4is_z8qpvce7g2ybca($m4is_j8j55t8dz79m7, $m4is_rx2cjhd9);
}
return $m4is_12w1n67twbgwzj5c;
}

function get_config( $m4is_j8j55t8dz79m7 = false ){
if( $m4is_j8j55t8dz79m7 ){
if( isset( $this->config[$m4is_j8j55t8dz79m7] ) ){
return $this->config[$m4is_j8j55t8dz79m7];

}
else {
return false;
}
}
else {
return $this->config;
}
}

function m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $m4is_j8j55t8dz79m7 = false ){
if( is_null( $this->options ) ){
$this->options = get_option( self::OPTION_SLUG,
 [
'default_email' => get_bloginfo('admin_email'),
'api_key' => '',
'api_secret' => '',
'connected' => false
] );
}
if( $m4is_j8j55t8dz79m7 ){
if( isset( $this->options[$m4is_j8j55t8dz79m7] ) ){
return $this->options[$m4is_j8j55t8dz79m7];

}
else {
return false;
}
}
else {
return $this->options;
}
}

private function __construct() {
}
static function get_wpal_zoom_instance() {
static $m4is_r2fx4spk3js8ed70 = false;

if (! $m4is_r2fx4spk3js8ed70 ) {
$m4is_r2fx4spk3js8ed70 = new self;
}
return $m4is_r2fx4spk3js8ed70;
}
}

function m4is_rw6961ens4ystt385wbswb2vfaa(){
return m4is_rw6961ens4ystt385wbswb2vfaa::get_wpal_zoom_instance();

}