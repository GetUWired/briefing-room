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


final class m4is_k7wrtrpby9szxfesw2 {
public $slug = 'elementor';
public $version = '1.1.0'; 
public $to_json = []; 
public $omitted_blocks = [];
 
public $ns = ''; 
public $prefix = ''; 
public $I18n = ''; 
public $access_class; 
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();

}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->slug = 'elementor';
$this->version = '1.1.0'; 
$this->to_json = [];
 
$this->omitted_blocks = []; 
$this->ns = ''; 
$this->prefix = ''; 
$this->I18n = ''; 
}
public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

if ( is_null( $m4is_x83y9shwv134vk9r8c85 ) ) {
$m4is_x83y9shwv134vk9r8c85 = new self;
$m4is_x83y9shwv134vk9r8c85->access_class = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$m4is_x83y9shwv134vk9r8c85->prefix = $m4is_x83y9shwv134vk9r8c85->access_class::PREFIX;
$m4is_x83y9shwv134vk9r8c85->ns = $m4is_x83y9shwv134vk9r8c85->access_class::NS;

$m4is_x83y9shwv134vk9r8c85->m4is_z6c3r724qhd();
}
return $m4is_x83y9shwv134vk9r8c85;
}
public function m4is_z6c3r724qhd() {
$this->m4is_bc4npp4d87sptssbk4s596();

$m4is_sxkqx58tdkdvaf = $this->access_class->m4is_dpptpvjk3pcrhemcq1();
$this->I18n = $m4is_sxkqx58tdkdvaf->m4is_fv5jycjd9tg1tsskv( false,
 $this->slug );
$this->to_json['WPAL_BLOCKS_PREFIX'] = $this->prefix;
$this->to_json['WPAL_BLOCKS_KEYS_REMOVED_TEXT'] = $this->I18n['keys_removed_text'];

$this->to_json['controls'] = $m4is_sxkqx58tdkdvaf->m4is_1yvkk2dkcyz1rpt9pw( $this->slug ); 
$this->to_json['tags'] = $m4is_sxkqx58tdkdvaf->m4is_x73n0p7w();
 
$this->omitted_blocks = apply_filters( 'memberium/elementor/settings/omitted_blocks', ['column'] );
}
private function m4is_bc4npp4d87sptssbk4s596() {
add_filter( 'memberium/elementor/editor/control/args',
 [$this, 'm4is_v745r97eq63a7zvsh199vvm3'], 10, 5 ); 
add_action( 'elementor/element/container/section_effects/after_section_end', [$this,
 'm4is_e92g3z1sssht1s'] , 10, 2 );
add_action( 'elementor/element/column/section_effects/after_section_end', [$this, 'm4is_e92g3z1sssht1s'] ,
 10, 2 );
}

public function m4is_yvapnth69qrm5r69xze3cm9rdg3n919() {
$m4is_33we84v139 = plugin_dir_url( __FILE__ );
wp_enqueue_style( 'wpal-blocks-elementor-editor',
 "{$m4is_33we84v139}/editor.css", [], $this->version, 'all');
wp_enqueue_script( 'wpal-blocks-elementor-editor', "{$m4is_33we84v139}/editor.js",
 ['jquery'], $this->version, true);
wp_localize_script( 'wpal-blocks-elementor-editor', 'wpale_params', $this->to_json);
}

public function m4is_e9zx04v243yw1x794x3qc34dt1( $m4is_ze4gc5gdxe0vk8nf0zg7,
 $m4is_hfynswyf7h124tzpvgeex ){
if( in_array($m4is_ze4gc5gdxe0vk8nf0zg7->get_type(), $this->omitted_blocks) ){
return;
}
$m4is_pztznh2p8caeq8gk6pd8mmkmdn5jzr2 = $this->to_json['controls'];

if ( ! $m4is_pztznh2p8caeq8gk6pd8mmkmdn5jzr2 || empty($m4is_pztznh2p8caeq8gk6pd8mmkmdn5jzr2) ) {
return;
}

$m4is_ze4gc5gdxe0vk8nf0zg7->start_controls_section( 'wpal-blocks',
 [
'label' => $this->I18n['settings_title'],
'tab' => \Elementor\Controls_Manager::TAB_ADVANCED
] );
foreach ( $m4is_pztznh2p8caeq8gk6pd8mmkmdn5jzr2 as $m4is_cwt5wqpkhj9w9bt415ek4m7m0cj =>
 $m4is_w6kafq9crg3v838wee5px994ej6e ) {
$m4is_h7zwy5f0w3y9gx3wm = isset($m4is_w6kafq9crg3v838wee5px994ej6e['type']) ? $this->m4is_q86kjthh8s9azgnqk0yv3e1( $m4is_w6kafq9crg3v838wee5px994ej6e['type'] ) : false;

$m4is_hce1y1a4qd65zhnwsj = isset($m4is_w6kafq9crg3v838wee5px994ej6e['name']) ? $m4is_w6kafq9crg3v838wee5px994ej6e['name'] : false;

if ( $m4is_hce1y1a4qd65zhnwsj && $m4is_h7zwy5f0w3y9gx3wm ){
$m4is_tw94s62nx22 = [
'label' => isset($m4is_w6kafq9crg3v838wee5px994ej6e['label']) ? $m4is_w6kafq9crg3v838wee5px994ej6e['label'] : false,

'type' => $m4is_h7zwy5f0w3y9gx3wm
];

$m4is_fc6wb84nm5e8 = ['default', 'description', 'options', 'label_on', 'label_off', 'return_value',
 'multiple', 'rows', 'separator', 'placeholder'];
foreach ($m4is_fc6wb84nm5e8 as $m4is_sm90k5yazxdw76sh3kenqkk1ew => $m4is_c9nryf13e43y9jensddce) {
if ( isset($m4is_w6kafq9crg3v838wee5px994ej6e[$m4is_c9nryf13e43y9jensddce]) ){
$m4is_tw94s62nx22[$m4is_c9nryf13e43y9jensddce] = $m4is_w6kafq9crg3v838wee5px994ej6e[$m4is_c9nryf13e43y9jensddce];

}
}
$m4is_tw94s62nx22 = apply_filters( 'memberium/elementor/editor/control/args', $m4is_tw94s62nx22, $m4is_hce1y1a4qd65zhnwsj, $m4is_ze4gc5gdxe0vk8nf0zg7,
 $m4is_hfynswyf7h124tzpvgeex );
$m4is_ze4gc5gdxe0vk8nf0zg7->add_control( $m4is_hce1y1a4qd65zhnwsj, $m4is_tw94s62nx22 );
}
}

$m4is_ze4gc5gdxe0vk8nf0zg7->end_controls_section();

}


private function m4is_q86kjthh8s9azgnqk0yv3e1( string $m4is_h7zwy5f0w3y9gx3wm = '' ){
$m4is_h7zwy5f0w3y9gx3wm = !empty($m4is_h7zwy5f0w3y9gx3wm) ? strtolower( $m4is_h7zwy5f0w3y9gx3wm ) : $m4is_h7zwy5f0w3y9gx3wm;

if ( $m4is_h7zwy5f0w3y9gx3wm === 'checkbox' ) {
return \Elementor\Controls_Manager::SWITCHER;
}
elseif ( $m4is_h7zwy5f0w3y9gx3wm === 'select2' || $m4is_h7zwy5f0w3y9gx3wm === 'text' ) {
return \Elementor\Controls_Manager::TEXT;

}
elseif ( $m4is_h7zwy5f0w3y9gx3wm === 'textarea' ) {
return \Elementor\Controls_Manager::TEXTAREA;
}
return false;
}

public function m4is_v745r97eq63a7zvsh199vvm3( $m4is_tw94s62nx22,
 $m4is_hce1y1a4qd65zhnwsj, $m4is_ze4gc5gdxe0vk8nf0zg7, $m4is_hfynswyf7h124tzpvgeex ) {
if ( $m4is_hce1y1a4qd65zhnwsj === "{$this->prefix}_loggedin" ){
$m4is_tw94s62nx22['separator'] = 'before';

}
if ( $m4is_hce1y1a4qd65zhnwsj === "{$this->prefix}_access_tags" ){
$m4is_tw94s62nx22['separator'] = 'before';
}
if ( $m4is_hce1y1a4qd65zhnwsj === "{$this->prefix}_access_tags" || $m4is_hce1y1a4qd65zhnwsj === "{$this->prefix}_access_tags2" ){
$m4is_tw94s62nx22['label_block'] = true;

$m4is_tw94s62nx22['default'] = '';
}
if ( $m4is_hce1y1a4qd65zhnwsj === "{$this->prefix}_invert_results" ){
$m4is_tw94s62nx22['separator'] = 'before';

}
return $m4is_tw94s62nx22;
}

public function m4is_e92g3z1sssht1s( $m4is_ze4gc5gdxe0vk8nf0zg7, $m4is_g61yzqs7ecta0xztr70d7v ) {
$m4is_ze4gc5gdxe0vk8nf0zg7->start_controls_section( 'memberium-section-visibility',
 [
'label' => __( 'Memberium' ),
'tab' => \Elementor\Controls_Manager::TAB_ADVANCED
] );



$m4is_ze4gc5gdxe0vk8nf0zg7->add_control( 'memberium_login_status',
 [
'label' => __( 'Logged In Visibility' ),
'type' => \Elementor\Controls_Manager::SELECT,
'label_block' => false,
'options' => [
'loggedin' =>
 'Logged-In Only',
'anonymous' => 'Logged-Out Only',
'both' => 'Both',
],
'description' => __( '' )
] );



$m4is_ze4gc5gdxe0vk8nf0zg7->add_control( 'hr',
 [
'type' => \Elementor\Controls_Manager::DIVIDER,
'condition' => [
'memberium_login_status' => 'loggedin',
],
] );



$m4is_ze4gc5gdxe0vk8nf0zg7->add_control( 'memberium_any_membership',
 [
'label' => __( 'Any Membership' ),
'type' => \Elementor\Controls_Manager::SWITCHER,
'label_block' => false,
'label_on' => 'Yes',

'label_off' => 'No',
'description' => __( '' ),
'condition' => [
'memberium_login_status' => 'loggedin',
],
] );



$m4is_ze4gc5gdxe0vk8nf0zg7->add_control( 'hr2',
 [
'type' => \Elementor\Controls_Manager::DIVIDER,
'condition' => [
'memberium_login_status' => 'loggedin',
],
] );



$m4is_y7084n6v67jme9va8yz = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_1aaba0kvhy20tdwgbwaahhn8nx8r9j( [],
 'elementor' );
foreach ( $m4is_y7084n6v67jme9va8yz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_h9g6e5cga ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_h9g6e5cga['name'];

}
$m4is_ze4gc5gdxe0vk8nf0zg7->add_control( 'memberium_memberships_section', [
'label' => __( 'Require Membership' ),
'type' => \Elementor\Controls_Manager::SELECT2,

'label_block' => true,
'multiple' => true,
'options' => $m4is_ra7dnjjzebn9h3t6k7a2p36,
'description' => __( 'The member must have one or more of the selected memberships.' ),

'condition' => [
'memberium_login_status' => 'loggedin',
'memberium_any_membership' => '',
]
] );



$m4is_ze4gc5gdxe0vk8nf0zg7->add_control( 'hr2',
 [
'type' => \Elementor\Controls_Manager::DIVIDER,
'condition' => [
'memberium_login_status' => 'loggedin',
],
] );
$m4is_ze4gc5gdxe0vk8nf0zg7->add_control( 'memberium_tags1_section',
 [
'label' => __( 'Require Any Tag ID' ),
'type' => \Elementor\Controls_Manager::SELECT2,
'label_block' => true,
'multiple' => true,

'options' => m4is_0ddg4zyk7dn8eg0283::m4is_6aqw2cq1ybep7vgra5hh7zr( [], 'elementor' ), 
'description' => __( 'The member must have one or more of the selected tags.' ),

'condition' => [
'memberium_login_status' => 'loggedin',
]
] );

$m4is_ze4gc5gdxe0vk8nf0zg7->add_control( 'memberium_all_tags_section',
 [
'label' => __( 'Require All Tags' ),
'type' => \Elementor\Controls_Manager::SELECT2,
'label_block' => true,
'multiple' => true,
'options' =>
 m4is_0ddg4zyk7dn8eg0283::m4is_6aqw2cq1ybep7vgra5hh7zr( [], 'elementor' ), 
'description' => __( 'The member must have all the selected tags.' ),

'condition' => [
'memberium_login_status' => 'loggedin',
]
] );
$m4is_ze4gc5gdxe0vk8nf0zg7->end_controls_section();
}
}
