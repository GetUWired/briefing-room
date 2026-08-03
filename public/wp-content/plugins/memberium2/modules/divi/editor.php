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

/**
 * Divi Editor Integration Class
 *
 * Provides access control functionality within the Divi visual builder interface. This class
 * extends Divi's module system by adding Memberium access controls to the advanced settings
 * tab of all Divi modules and layout settings. It handles the conversion of common control
 * configurations to Divi-compatible field formats and enqueues the necessary JavaScript
 * and CSS assets for the editor interface.
 *
 * @author     Curtis Krauter <curtis@businesstechninjas.com>
 * @copyright  2012-2026 David J Bullock
 * @license    Proprietary
 */


class m4is_hcv65y6pqrn {
public array $I18n = [];

public array $omitted_blocks = [];
public array $to_json = [];
public string $ns = '';
public string $prefix = '';
public string $script_version = '1.0.7';

public string $slug = 'divi';
public m4is_9db7hheseencedjdjv $access_class;

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->access_class = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->prefix = $this->access_class::PREFIX;
$this->ns = $this->access_class::NS;
}

function m4is_z6c3r724qhd() {
add_filter( "{$this->ns}/{$this->slug}/control/config",
 [$this, 'm4is_ar4kcg9e9ym0k5s42je3tfw'], 10, 1 );
$m4is_sxkqx58tdkdvaf = $this->access_class->m4is_dpptpvjk3pcrhemcq1();
$this->I18n = $m4is_sxkqx58tdkdvaf->m4is_fv5jycjd9tg1tsskv( false,
 $this->slug );
$this->to_json['WPAL_BLOCKS_SETTINGS_TITLE'] = $this->I18n['settings_title'];
$this->to_json['WPAL_BLOCKS_PREFIX'] = $this->prefix;

$this->to_json['WPAL_BLOCKS_KEYS_REMOVED_TEXT'] = $this->I18n['keys_removed_text'];
$this->to_json['tags'] = $m4is_sxkqx58tdkdvaf->m4is_x73n0p7w();

$this->to_json['controls'] = $m4is_sxkqx58tdkdvaf->m4is_1yvkk2dkcyz1rpt9pw( $this->slug );
$this->omitted_blocks = apply_filters( "{$this->ns}/{$this->slug}/settings/omitted_blocks",
 ['et_pb_column', 'et_pb_column_inner'] );
add_action('et_builder_ready', [$this, 'm4is_xpjhk9n22j0n5nkem'], 9999 );
add_action(is_admin() ? 'admin_enqueue_scripts' : 'wp_enqueue_scripts',
 [$this, 'm4is_xg7s6eadttpkv6f'], 9999);
}

function m4is_xpjhk9n22j0n5nkem(){
global $shortcode_tags;
$m4is_09egfvkpajy7 = [];
foreach ( $shortcode_tags as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_v6as5nsk6bzsgevdgk252erbytv0g ) {
if ( is_array( $m4is_v6as5nsk6bzsgevdgk252erbytv0g ) ) {
if ( $m4is_v6as5nsk6bzsgevdgk252erbytv0g[0] instanceof ET_Builder_Element || $m4is_v6as5nsk6bzsgevdgk252erbytv0g[0] instanceof ET_Builder_Module ) {
$m4is_09egfvkpajy7[$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0] = $m4is_v6as5nsk6bzsgevdgk252erbytv0g;

remove_shortcode($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_v6as5nsk6bzsgevdgk252erbytv0g);
}
}
}
if ( !empty($m4is_09egfvkpajy7) ){
foreach ( $m4is_09egfvkpajy7 as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_v6as5nsk6bzsgevdgk252erbytv0g ) {
$m4is_jz7ah0j3n2vk0qx9a4q95bt2dsgjec = $m4is_v6as5nsk6bzsgevdgk252erbytv0g[0];
$m4is_s37re1yymj = $m4is_v6as5nsk6bzsgevdgk252erbytv0g[1];

$m4is_jz7ah0j3n2vk0qx9a4q95bt2dsgjec->settings_modal_toggles['custom_css']['toggles']['wpal-blocks'] = ['title' => $this->I18n['settings_title'],
 'priority' => 100];
if ( !isset($m4is_jz7ah0j3n2vk0qx9a4q95bt2dsgjec->fields_unprocessed["{$this->prefix}_anymembership"] ) ){
$m4is_pztznh2p8caeq8gk6pd8mmkmdn5jzr2 = in_array($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 $this->omitted_blocks) ? [] : $this->to_json['controls'];
if ( is_array($m4is_pztznh2p8caeq8gk6pd8mmkmdn5jzr2) && !empty($m4is_pztznh2p8caeq8gk6pd8mmkmdn5jzr2) ){
$m4is_jz7ah0j3n2vk0qx9a4q95bt2dsgjec->fields_unprocessed = array_merge($m4is_jz7ah0j3n2vk0qx9a4q95bt2dsgjec->fields_unprocessed,
 $m4is_pztznh2p8caeq8gk6pd8mmkmdn5jzr2);
}
}
add_shortcode( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, function($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf, $m4is_g0y9c4fkx0yzgdqa390ht) use ($m4is_jz7ah0j3n2vk0qx9a4q95bt2dsgjec, $m4is_s37re1yymj) {
return $m4is_jz7ah0j3n2vk0qx9a4q95bt2dsgjec->$m4is_s37re1yymj( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf, $m4is_g0y9c4fkx0yzgdqa390ht );
});
}
}
}

function m4is_ar4kcg9e9ym0k5s42je3tfw( array $m4is_kyrqdd9qn08s3tbxx9ahv ) : array {
$m4is_n7c5mh4kcp626a20ffadrtxjk = [];

if ( is_array($m4is_kyrqdd9qn08s3tbxx9ahv) && !empty($m4is_kyrqdd9qn08s3tbxx9ahv) ){
foreach( $m4is_kyrqdd9qn08s3tbxx9ahv as $m4is_2y5t59g3f0yqenxx =>
 $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
$m4is_h7zwy5f0w3y9gx3wm = !empty($m4is_bbsta3mvjhhvh1x97vfpm9e['type']) ? $m4is_bbsta3mvjhhvh1x97vfpm9e['type'] : false;

$m4is_hce1y1a4qd65zhnwsj = !empty($m4is_bbsta3mvjhhvh1x97vfpm9e['name']) ? $m4is_bbsta3mvjhhvh1x97vfpm9e['name'] : false;
$m4is_7bp91a5h3jnw2g64q1gs0wy7q4x032q = !empty($m4is_bbsta3mvjhhvh1x97vfpm9e['description']) ? $m4is_bbsta3mvjhhvh1x97vfpm9e['description'] : false;

$m4is_13van2p1m1kk6h6h1 = !empty($m4is_bbsta3mvjhhvh1x97vfpm9e['sanitize']) ? $m4is_bbsta3mvjhhvh1x97vfpm9e['sanitize'] : false;
if ( $m4is_h7zwy5f0w3y9gx3wm && $m4is_hce1y1a4qd65zhnwsj ){
switch ($m4is_h7zwy5f0w3y9gx3wm) {
case 'checkbox':
$m4is_n7c5mh4kcp626a20ffadrtxjk[$m4is_hce1y1a4qd65zhnwsj] = [
'wpald' =>
 'toggle',
'wpald_level' => empty( $m4is_bbsta3mvjhhvh1x97vfpm9e['level'] ) ? '' : $m4is_bbsta3mvjhhvh1x97vfpm9e['level'],
'wpald_toggles' =>
 isset( $m4is_bbsta3mvjhhvh1x97vfpm9e['toggles'] ) && is_array( $m4is_bbsta3mvjhhvh1x97vfpm9e['toggles'] ) ? $m4is_bbsta3mvjhhvh1x97vfpm9e['toggles'] : false,

'type' => 'yes_no_button',
'label' => $m4is_bbsta3mvjhhvh1x97vfpm9e['label'],
'default' => isset( $m4is_bbsta3mvjhhvh1x97vfpm9e['default'] ) && (int) $m4is_bbsta3mvjhhvh1x97vfpm9e['default'] > 0 ? 'on' : 'off',

'options' => [
'off' => empty( $m4is_bbsta3mvjhhvh1x97vfpm9e['label_off']) ? _x( 'Off', 'divi', $this->ns ) : $m4is_bbsta3mvjhhvh1x97vfpm9e['label_off'],

'on' => empty( $m4is_bbsta3mvjhhvh1x97vfpm9e['label_on'] ) ? _x('On', 'divi', $this->ns ) : $m4is_bbsta3mvjhhvh1x97vfpm9e['label_on'],

],
];
break;
case 'textarea':
$m4is_n7c5mh4kcp626a20ffadrtxjk[$m4is_hce1y1a4qd65zhnwsj] = [
'wpald' => 'textarea',
'type' => 'text',

'label' => $m4is_bbsta3mvjhhvh1x97vfpm9e['label'],
'default' => ''
];
break;
case 'text':
$m4is_n7c5mh4kcp626a20ffadrtxjk[$m4is_hce1y1a4qd65zhnwsj] = [
'wpald' =>
 'text',
'type' => 'text',
'label' => $m4is_bbsta3mvjhhvh1x97vfpm9e['label'],
'default' => ''
];
break;
case 'SELECT2':
$m4is_n7c5mh4kcp626a20ffadrtxjk[$m4is_hce1y1a4qd65zhnwsj] = [
'wpald' =>
 'select2',
'type' => 'text',
'label' => $m4is_bbsta3mvjhhvh1x97vfpm9e['label']
];
break;
default:
break;
}
if ( $m4is_7bp91a5h3jnw2g64q1gs0wy7q4x032q ){
$m4is_n7c5mh4kcp626a20ffadrtxjk[$m4is_hce1y1a4qd65zhnwsj]['description'] = $m4is_7bp91a5h3jnw2g64q1gs0wy7q4x032q;

}
if ( $m4is_13van2p1m1kk6h6h1 ){
$m4is_n7c5mh4kcp626a20ffadrtxjk[$m4is_hce1y1a4qd65zhnwsj]['sanitize'] = $m4is_13van2p1m1kk6h6h1;

}
$m4is_n7c5mh4kcp626a20ffadrtxjk[$m4is_hce1y1a4qd65zhnwsj]['additional_att'] = empty($m4is_bbsta3mvjhhvh1x97vfpm9e['additional_att']) ? $m4is_hce1y1a4qd65zhnwsj : $m4is_bbsta3mvjhhvh1x97vfpm9e['additional_att'];

$m4is_n7c5mh4kcp626a20ffadrtxjk[$m4is_hce1y1a4qd65zhnwsj]['option_category'] = empty($m4is_bbsta3mvjhhvh1x97vfpm9e['option_category']) ? 'configuration' : $m4is_bbsta3mvjhhvh1x97vfpm9e['option_category'];

$m4is_n7c5mh4kcp626a20ffadrtxjk[$m4is_hce1y1a4qd65zhnwsj]['tab_slug'] = empty($m4is_bbsta3mvjhhvh1x97vfpm9e['tab_slug']) ? 'custom_css' : $m4is_bbsta3mvjhhvh1x97vfpm9e['tab_slug'] ;

$m4is_n7c5mh4kcp626a20ffadrtxjk[$m4is_hce1y1a4qd65zhnwsj]['toggle_slug'] = empty($m4is_bbsta3mvjhhvh1x97vfpm9e['toggle_slug']) ? 'wpal-blocks' : $m4is_bbsta3mvjhhvh1x97vfpm9e['toggle_slug'] ;

}
}
}
return $m4is_n7c5mh4kcp626a20ffadrtxjk;
}

function m4is_xg7s6eadttpkv6f(){
$m4is_jf3dhdme = 'wpal-blocks-divi-editor';
$m4is_4ecpv9dz12f2hzqks4z0jhtvtnaw = plugin_dir_url( __FILE__ );

$m4is_ff0jkqydt8xf1vq0v = $m4is_jf3dhdme . '_main';
$m4is_r53jejrsyqeh27cxvb = 'select2css_divi';
$this->access_class->m4is_dpptpvjk3pcrhemcq1()->m4is_cc12s8k89( false,
 $m4is_jf3dhdme );
wp_register_style( $m4is_r53jejrsyqeh27cxvb, $m4is_4ecpv9dz12f2hzqks4z0jhtvtnaw . 'select2_divi.css', false, $this->script_version,
 'all' );
wp_register_script( $m4is_ff0jkqydt8xf1vq0v, $m4is_4ecpv9dz12f2hzqks4z0jhtvtnaw . 'editor.js', ['jquery'], $this->script_version,
 true) ;
wp_enqueue_style( $m4is_r53jejrsyqeh27cxvb );
wp_enqueue_script( "{$m4is_jf3dhdme}_s2js" );
wp_enqueue_script( $m4is_ff0jkqydt8xf1vq0v );

wp_localize_script( $m4is_ff0jkqydt8xf1vq0v, 'wpald_params', $this->to_json );
}
}