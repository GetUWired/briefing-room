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


declare( strict_types=1 );

class_exists( 'm4is_6y9612z4hjd6fzpap4r5n853641m1jc') || die();

final class m4is_dzcm5j3wt9k {

public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_z6c3r724qhd();
}

public function m4is_z6c3r724qhd() : void {
if ( $this->m4is_pk2w6sramn6hqp5vnpj6gefjwzmrvkc() ) {
add_filter( 'fusion_builder_all_elements',
 [$this, 'm4is_fqtnbfdctqehavjddrym3expz2kngze'], 0, 1 );
add_action( 'admin_enqueue_scripts', [$this, 'm4is_zxxaz7f6qp3qgyg05qq'],
 10, 0 );
}
else {
add_filter( 'do_shortcode_tag', [$this, 'm4is_11ae37f895qpxw4v9nb4emcv'], 10, 4 );
}
}

private function m4is_pk2w6sramn6hqp5vnpj6gefjwzmrvkc() : bool {
if ( isset( $_GET['post'] ) && $_GET['post'] > 0 && isset( $_GET['action'] ) && $_GET['action'] === 'edit' && is_admin() ) {
return true;

}
if ( isset( $_GET['fb-edit'] ) && $_GET['fb-edit'] === 1 && current_user_can( 'edit_posts' ) && is_admin() === false ) {
return true;

}
return false;
}

public function m4is_11ae37f895qpxw4v9nb4emcv( string $m4is_gb01jqxh9ek2m, string $m4is_7wfxn2e73, $m4is_j3afa3thyq8jqpe73x4h7q,
 $regex_match ) : string {
if ( substr( $m4is_7wfxn2e73, 0, 7 ) !== 'fusion_' ) {
return $m4is_gb01jqxh9ek2m; 
}
static $m4is_81hwacka9f51x;

static $m4is_wk4dh1rnd3wmwvsggq51nhn87;
static $m4is_5ergmqt9;
static $m4is_yfq3jqvfk8j;
$m4is_wk4dh1rnd3wmwvsggq51nhn87 ??= get_current_user_id();

$m4is_81hwacka9f51x ??= $m4is_wk4dh1rnd3wmwvsggq51nhn87 && current_user_can( 'administrator' );
if ( ! isset ( $m4is_j3afa3thyq8jqpe73x4h7q[self::M4IS_APDY5V1DV66A5256HV7N] ) ) {
return $m4is_gb01jqxh9ek2m;

}
if ( $m4is_81hwacka9f51x ) {
return $m4is_gb01jqxh9ek2m;
}
if ( ! empty( $m4is_j3afa3thyq8jqpe73x4h7q[self::M4IS_APDY5V1DV66A5256HV7N] ) ) {
if ( $m4is_j3afa3thyq8jqpe73x4h7q[self::M4IS_APDY5V1DV66A5256HV7N] === 'anonymous' && $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return '';
 
}
elseif ( $m4is_j3afa3thyq8jqpe73x4h7q[self::M4IS_APDY5V1DV66A5256HV7N] === 'logged-in' && ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return '';
 
}
}
if ( ! empty( $m4is_j3afa3thyq8jqpe73x4h7q[self::M4IS_39FCHWBFFCXJPYTCSG2EAMCC] ) ) {
$m4is_5ergmqt9 ??= $m4is_wk4dh1rnd3wmwvsggq51nhn87 ? explode( ',',
 m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user', 'membership_id', '' ) ) : [];

if ( empty( $m4is_5ergmqt9 ) ) {
return '';
}
}
else {
if ( ! empty( $m4is_j3afa3thyq8jqpe73x4h7q[self::M4IS_JZR9RK1H5] ) ) {
$m4is_5ergmqt9 ??= $m4is_wk4dh1rnd3wmwvsggq51nhn87 ? explode( ',',
 (string) m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user', 'membership_tags',
 '' ) ) : [];
$m4is_ahynfxztk = array_filter( array_map( 'intval', explode( ',', (string) $m4is_j3afa3thyq8jqpe73x4h7q[self::M4IS_JZR9RK1H5] ) ) );

if ( empty( array_intersect( $m4is_ahynfxztk, $m4is_5ergmqt9 ) ) ) {
return '';
}
}
}
if ( ! empty( $m4is_j3afa3thyq8jqpe73x4h7q[self::M4IS_YWGN3E8XV] ) ) {
$m4is_yfq3jqvfk8j ??= $m4is_wk4dh1rnd3wmwvsggq51nhn87 ? explode( ',',
 (string) m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user', 'tags', '' ) ) : [];

$m4is_0pnztzw49c1qn2qe7297dkqjaqvbek = array_filter( array_map( 'intval', explode( ',', (string) $m4is_j3afa3thyq8jqpe73x4h7q[self::M4IS_YWGN3E8XV] ) ) );

if ( empty( array_intersect( $m4is_0pnztzw49c1qn2qe7297dkqjaqvbek, $m4is_yfq3jqvfk8j ) ) ) {
return '';
}
}
return $m4is_gb01jqxh9ek2m;

}

public function m4is_zxxaz7f6qp3qgyg05qq() : void {
wp_enqueue_script( 'select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
 ['jquery'], null, true );
wp_enqueue_style( 'select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css' );

wp_enqueue_script( 'memberium-avada-select2', plugin_dir_url( __FILE__ ) . '/js/select2_injection.js', ['jquery', 'select2'], null,
 true );
wp_enqueue_style( 'memberium-avada-select2', plugin_dir_url( __FILE__ ) . '/css/select2_css.css' );
wp_localize_script( 'memberium-avada-select2',
 'MEMBERIUM_MEMBERSHIPS', $this->m4is_nd8j0cvdtzrh() );
wp_localize_script( 'memberium-avada-select2', 'MEMBERIUM_TAGS', $this->m4is_4afcx6cpqfds() );

}

public function m4is_fqtnbfdctqehavjddrym3expz2kngze( array $m4is_fh92qqfpba2b796nrpt5 ) : array {
foreach( $m4is_fh92qqfpba2b796nrpt5 as $shortcode_name =>
 $element ) {
$m4is_fh92qqfpba2b796nrpt5[$shortcode_name]['params'][] = [
'default' => 'any',
'description' => 'Show or hide this element depending on whether the current visitor is logged in or not.',

'group' => 'Extras', 
'heading' => 'Viewer Login Status',
'param_name' => self::M4IS_APDY5V1DV66A5256HV7N,
'type' => 'radio_button_set',

'value' => [
'anonymous' => 'Logged-out Only',
'any' => 'Any Visitor',
'logged-in' => 'Logged-in Only',
],
];
$m4is_fh92qqfpba2b796nrpt5[$shortcode_name]['params'][] = [
'default' =>
 '',
'description' => 'Use this option to restrict this element to a user who has any active memberships.  Users without an active membership will not be able to view this element..',

'group' => 'Extras', 
'heading' => 'Visible to any Membership',
'param_name' => self::M4IS_39FCHWBFFCXJPYTCSG2EAMCC,
'type' => 'radio_button_set',

'value' => [
'any' => 'Must Have Any Active Membership',
'' => 'Show to Everyone',
],
];
$m4is_fh92qqfpba2b796nrpt5[$shortcode_name]['params'][] = [
'type' =>
 'textfield',
'heading' => 'Required Memberships',
'group' => 'Extras', 
'param_name' => self::M4IS_JZR9RK1H5,
'default' => '',
'options' =>
 $this->m4is_nd8j0cvdtzrh(),
'description' => 'The user must have one of the selected memberships to view this element. This option is only used if "Visible to any Membership" is set to "Show to Everyone".',

];
$m4is_fh92qqfpba2b796nrpt5[$shortcode_name]['params'][] = [
'type' => 'textfield',
'heading' => 'Required Tags',
'group' => 'Extras',
 
'param_name' => self::M4IS_YWGN3E8XV,
'default' => '',
'description' => 'The user must have one of the selected tags to view this element.".',

];
}
return $m4is_fh92qqfpba2b796nrpt5;
}






private function m4is_nd8j0cvdtzrh() : array {
$m4is_83t7b62c8fzashshf9dr = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$m4is_y7084n6v67jme9va8yz = $m4is_83t7b62c8fzashshf9dr->m4is_jk5y1teg2qwwnbb5nkkvq06();
return $m4is_y7084n6v67jme9va8yz;
}

private function m4is_4afcx6cpqfds() : array {
$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true );

$m4is_06c8s5xs94f91335gnaey25 = $m4is_06c8s5xs94f91335gnaey25['mc'];
$m4is_xyfzj0fnmp5g4 = [];
$m4is_xyfzj0fnmp5g4[] = [
'id' => 0,

'text' => '(None)'
];
foreach ( (array) $m4is_06c8s5xs94f91335gnaey25 as $m4is_fds3y6na7va66dwa3pj7p74c => $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) {
$m4is_xyfzj0fnmp5g4[] = [
'id' =>
 $m4is_fds3y6na7va66dwa3pj7p74c,
'text' => "{$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0} ({$m4is_fds3y6na7va66dwa3pj7p74c})"
];
}
return $m4is_xyfzj0fnmp5g4;

}
private const M4IS_39FCHWBFFCXJPYTCSG2EAMCC = 'memberium-any-membership';
private const M4IS_APDY5V1DV66A5256HV7N = 'memberium-logged-in-status';

private const M4IS_JZR9RK1H5 = 'memberium-memberships';
private const M4IS_YWGN3E8XV = 'memberium-tags';
}