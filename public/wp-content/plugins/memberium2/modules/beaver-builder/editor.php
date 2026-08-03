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


final class m4is_bh35sg6ssp6mhk0qchw7qtndt5g7 {
protected $ext_ver = '1.0.5';
public $slug = 'beaver_builder';
public $to_json = [];
 
public $omitted_blocks = []; 
public $ns = ''; 
public $prefix = ''; 
public $I18n = []; 
public $access_class; 
public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->access_class = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->prefix = $this->access_class::PREFIX;
$this->ns = $this->access_class::NS;
$this->m4is_z6c3r724qhd();
}
private function m4is_z6c3r724qhd() : void {

add_filter( "{$this->ns}/{$this->slug}/control/config",
 [$this, 'm4is_8qp378er7yxcgwxxy84c533c6fw4k'], 10, 1 );
$m4is_sxkqx58tdkdvaf = $this->access_class->m4is_dpptpvjk3pcrhemcq1();
$this->I18n = $m4is_sxkqx58tdkdvaf->m4is_fv5jycjd9tg1tsskv( false,
 $this->slug );
$this->to_json['WPAL_BLOCKS_PREFIX'] = $this->prefix;
$this->to_json['WPAL_BLOCKS_KEYS_REMOVED_TEXT'] = $this->I18n['keys_removed_text'];

$this->to_json['controls'] = $m4is_sxkqx58tdkdvaf->m4is_1yvkk2dkcyz1rpt9pw( $this->slug );
$this->to_json['tags'] = $m4is_sxkqx58tdkdvaf->m4is_x73n0p7w();


$this->omitted_blocks = apply_filters( "{$this->ns}/{$this->slug}/settings/omitted_blocks", ['col'] );
add_filter( 'fl_builder_register_settings_form',
 [$this, 'm4is_h2czhxvpn'], PHP_INT_MAX, 2 ); 
add_filter( 'fl_builder_custom_fields', [$this, 'm4is_ayv5mgy2hkswyjw5t72ym47j56'] );
 
add_action( 'wp_enqueue_scripts', [$this, 'm4is_xg7s6eadttpkv6f'], PHP_INT_MAX ); 
}

public function m4is_8qp378er7yxcgwxxy84c533c6fw4k( array $m4is_kyrqdd9qn08s3tbxx9ahv ) : array {
foreach ( $m4is_kyrqdd9qn08s3tbxx9ahv as $m4is_cwt5wqpkhj9w9bt415ek4m7m0cj =>
 $m4is_w6kafq9crg3v838wee5px994ej6e ) {
if ( $m4is_w6kafq9crg3v838wee5px994ej6e['type'] === 'checkbox' ) {
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_cwt5wqpkhj9w9bt415ek4m7m0cj]['type'] = 'wpal_blocks_toggle';

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_cwt5wqpkhj9w9bt415ek4m7m0cj]['description'] = '';
}
elseif ( $m4is_w6kafq9crg3v838wee5px994ej6e['type'] === 'SELECT2' ) {
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_cwt5wqpkhj9w9bt415ek4m7m0cj]['type'] = 'text';

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_cwt5wqpkhj9w9bt415ek4m7m0cj]['class'] = 'bb-wpal-blocks-select2';
}
}
return $m4is_kyrqdd9qn08s3tbxx9ahv;

}

function m4is_ayv5mgy2hkswyjw5t72ym47j56( array $m4is_7b2yfzk0054 ) {
$m4is_7b2yfzk0054['wpal_blocks_toggle'] = trailingslashit( __DIR__ ) . 'toggle.php';

return $m4is_7b2yfzk0054;
}

function m4is_h2czhxvpn( array $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv, string $m4is_6k84v5caq4k ) : array {
$m4is_vj7kkyhcxq31h5pb73r0k = ($m4is_6k84v5caq4k === 'row' || $m4is_6k84v5caq4k === 'col');
 
if ($m4is_vj7kkyhcxq31h5pb73r0k) {
$m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['tabs'] = isset( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['tabs'] ) ? $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['tabs'] : [];

$m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['tabs']['advanced'] = isset( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['tabs']['advanced'] ) ? $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['tabs']['advanced'] : [
'title' =>
 __( 'Advanced', $this->ns )
];
$m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['tabs']['advanced']['sections'] = isset( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['tabs']['advanced']['sections'] ) ? $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['tabs']['advanced']['sections'] : [];

$m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['tabs']['advanced']['sections'] = $this->m4is_kxswedsss( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['tabs']['advanced']['sections'],
 $m4is_6k84v5caq4k ); 
}
else {

if ($m4is_6k84v5caq4k === 'module_advanced') {
$m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['sections'] = isset( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['sections'] ) ? $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['sections'] : [];

$m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['sections'] = $this->m4is_kxswedsss( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['sections'], $m4is_6k84v5caq4k );

}
}
return $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv;
}

function m4is_kxswedsss( array $m4is_54h31a3mmqxcse0kbx7, string $m4is_6k84v5caq4k) : array {
$m4is_2nwa7fwycr7vsdsv9ea7df = [];

$m4is_j8j55t8dz79m7 = 'visibility';
if ( array_key_exists( $m4is_j8j55t8dz79m7, $m4is_54h31a3mmqxcse0kbx7 ) ) {
foreach ( $m4is_54h31a3mmqxcse0kbx7 as $m4is_sm90k5yazxdw76sh3kenqkk1ew =>
 $m4is_ze4gc5gdxe0vk8nf0zg7 ) {
$m4is_2nwa7fwycr7vsdsv9ea7df[$m4is_sm90k5yazxdw76sh3kenqkk1ew] = $m4is_ze4gc5gdxe0vk8nf0zg7;
if ( $m4is_sm90k5yazxdw76sh3kenqkk1ew === $m4is_j8j55t8dz79m7 ) {
$m4is_7b2yfzk0054 = $this->m4is_xwxer5wn( $m4is_6k84v5caq4k );

if ( $m4is_7b2yfzk0054 ){
$m4is_2nwa7fwycr7vsdsv9ea7df['wpal-blocks'] = $m4is_7b2yfzk0054;
}
}
}
}
else {
$m4is_2nwa7fwycr7vsdsv9ea7df = $m4is_54h31a3mmqxcse0kbx7;

$m4is_7b2yfzk0054 = $this->m4is_xwxer5wn( $m4is_6k84v5caq4k );
if ( $m4is_7b2yfzk0054 ) {
$m4is_2nwa7fwycr7vsdsv9ea7df['wpal-blocks'] = $m4is_7b2yfzk0054;

}
}
return $m4is_2nwa7fwycr7vsdsv9ea7df;
}

function m4is_xwxer5wn( string $m4is_6k84v5caq4k ) {
$m4is_pztznh2p8caeq8gk6pd8mmkmdn5jzr2 = in_array( $m4is_6k84v5caq4k,
 $this->omitted_blocks ) ? false : $this->to_json['controls']; 
if ( ! $m4is_pztznh2p8caeq8gk6pd8mmkmdn5jzr2 || empty( $m4is_pztznh2p8caeq8gk6pd8mmkmdn5jzr2 ) ){
return;

}
$m4is_hn5gx2w6k = [
'title' => $this->I18n['settings_title'],
'fields' => []
];
foreach ( $m4is_pztznh2p8caeq8gk6pd8mmkmdn5jzr2 as $m4is_cwt5wqpkhj9w9bt415ek4m7m0cj =>
 $m4is_w6kafq9crg3v838wee5px994ej6e ) {
$m4is_h7zwy5f0w3y9gx3wm = isset( $m4is_w6kafq9crg3v838wee5px994ej6e['type'] ) ? $m4is_w6kafq9crg3v838wee5px994ej6e['type'] : false;

$m4is_hce1y1a4qd65zhnwsj = isset( $m4is_w6kafq9crg3v838wee5px994ej6e['name'] ) ? $m4is_w6kafq9crg3v838wee5px994ej6e['name'] : false;

if ( $m4is_h7zwy5f0w3y9gx3wm && $m4is_hce1y1a4qd65zhnwsj ) {
$m4is_tw94s62nx22 = [
'type' => $m4is_h7zwy5f0w3y9gx3wm,
'label' => $m4is_w6kafq9crg3v838wee5px994ej6e['label']
];

$conditional_settings = [
'class',
'default',
'description',
'help',
'multi-select',
'options',
'placeholder',
'rows',
];
foreach ( $conditional_settings as $m4is_sm90k5yazxdw76sh3kenqkk1ew =>
 $m4is_c9nryf13e43y9jensddce ) {
if ( isset( $m4is_w6kafq9crg3v838wee5px994ej6e[$m4is_c9nryf13e43y9jensddce] ) ) {
$m4is_tw94s62nx22[$m4is_c9nryf13e43y9jensddce] = $m4is_w6kafq9crg3v838wee5px994ej6e[$m4is_c9nryf13e43y9jensddce];

}
}
$m4is_tw94s62nx22 = apply_filters("{$this->ns}/{$this->slug}/editor/control/args", $m4is_tw94s62nx22, $m4is_hce1y1a4qd65zhnwsj,
 $m4is_h7zwy5f0w3y9gx3wm, $m4is_6k84v5caq4k );
$m4is_hn5gx2w6k['fields'][$m4is_hce1y1a4qd65zhnwsj] = $m4is_tw94s62nx22;
}
}
return $m4is_hn5gx2w6k;

}

function m4is_xg7s6eadttpkv6f() {
if ( ! FLBuilderModel::is_builder_active() ) {
return;
}
$m4is_jf3dhdme = 'wpal-blocks-bb';
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = plugin_dir_url( __FILE__ );

$m4is_3egytx7nw = ['jquery', "{$m4is_jf3dhdme}_s2js"];
$m4is_k459rez56azzjnenhyvgk70yr1ndgxkr = $m4is_jf3dhdme . '-editor-js';
$m4is_6ex7fne1bdf24c6zh1f29mq = $m4is_jf3dhdme . '-editor-css';

$this->access_class->m4is_dpptpvjk3pcrhemcq1()->m4is_cc12s8k89( false, $m4is_jf3dhdme );
wp_enqueue_style( "{$m4is_jf3dhdme}_s2css");

wp_enqueue_script( "{$m4is_jf3dhdme}_s2js");
wp_register_script( $m4is_k459rez56azzjnenhyvgk70yr1ndgxkr, "{$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq}editor.js",
 $m4is_3egytx7nw, $this->ext_ver, true );
wp_register_style( $m4is_6ex7fne1bdf24c6zh1f29mq, "{$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq}editor.css",
 false, $this->ext_ver, 'all' );
wp_enqueue_script( $m4is_k459rez56azzjnenhyvgk70yr1ndgxkr );
wp_enqueue_style( $m4is_6ex7fne1bdf24c6zh1f29mq );

wp_localize_script( $m4is_k459rez56azzjnenhyvgk70yr1ndgxkr, 'wpalbb_params', $this->to_json );
}
}