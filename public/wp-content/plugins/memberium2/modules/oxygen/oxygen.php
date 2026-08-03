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

class m4is_r3t0yzn9d4c {
private $conditions;

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {

if ( is_admin() ) {

add_filter( 'memberium/modules/active/names',
 [$this, 'm4is_y89x3aj8tzzpeak2z80p'], 10, 1 );
}
else {

$this->m4is_5eragr7sh2yyj356m();
}

if ( function_exists( 'oxygen_vsb_register_condition' ) ) {

$this->m4is_t7ng6ny6xdkgzgrbnjqqw();

}
}

private function m4is_5eragr7sh2yyj356m() {
add_action( 'wp', [$this, 'm4is_2g64w0wfq1c1b4h5zgbhm7t4w1'], 20 );
add_filter( 'do_shortcode_tag',
 [$this, 'm4is_3kv9cvf22kfj6'], PHP_INT_MAX, 4 );
add_filter( 'memberium/modules/active/names', [$this, 'm4is_y89x3aj8tzzpeak2z80p'],
 10, 1 );
}

function m4is_y89x3aj8tzzpeak2z80p( array $m4is_jq2e3019hp45103bhm95sxmccqd8 = []) {

return array_merge( $m4is_jq2e3019hp45103bhm95sxmccqd8,
 ['Oxygen Block Builder for Memberium'] );
}
function m4is_2g64w0wfq1c1b4h5zgbhm7t4w1() {
$this->safe_tags = apply_filters( 'memberium/oxygen/tags',
 $this->safe_tags );
}
function m4is_3kv9cvf22kfj6( $m4is_gb01jqxh9ek2m, $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_j3afa3thyq8jqpe73x4h7q,
 $m4is_hhe08taea8 ) {
$m4is_5v8t21bj2dber3tq02mr9c6bcr = ( strpos( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, 'ct_section' ) === 0 );
if ( ! $m4is_5v8t21bj2dber3tq02mr9c6bcr && in_array( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 $this->safe_tags ) ) {
$m4is_5v8t21bj2dber3tq02mr9c6bcr = true;
}
return $m4is_5v8t21bj2dber3tq02mr9c6bcr ? do_shortcode( $m4is_gb01jqxh9ek2m ) : $m4is_gb01jqxh9ek2m;

}
function m4is_t7ng6ny6xdkgzgrbnjqqw(){
$m4is_6k84v5caq4k = 'oxygen';
$m4is_axy0v6gyefw = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$m4is_zxa05fq9f81p8g = $m4is_axy0v6gyefw::PREFIX;
$m4is_9ybr7472pbag66e = $m4is_axy0v6gyefw->m4is_dpptpvjk3pcrhemcq1()->m4is_fv5jycjd9tg1tsskv( false,
 $m4is_6k84v5caq4k );
$m4is_af7jcqj9e7w = $m4is_axy0v6gyefw->m4is_dpptpvjk3pcrhemcq1()->m4is_nkg09esvr78whcksc4s0sq6na( $m4is_6k84v5caq4k );

$m4is_rwvhr14tkxcjnhnsrhab1n706cbq = $m4is_9ybr7472pbag66e[ 'settings_title' ];
$m4is_6vwjpwm9 = [ 'includes', "doesn't include", '==',
'!=' ];
$m4is_tm4863e571hyqnc38m3pea0b = [ 'includes' ];

if( ! array_key_exists( 'memberships', $m4is_af7jcqj9e7w ) ) {
$m4is_y7084n6v67jme9va8yz = $m4is_axy0v6gyefw->m4is_dpptpvjk3pcrhemcq1()->m4is_yezqm9gncdx();

$m4is_y7084n6v67jme9va8yz = isset( $m4is_y7084n6v67jme9va8yz ) && is_array( $m4is_y7084n6v67jme9va8yz ) ? $m4is_y7084n6v67jme9va8yz : false;

if ( $m4is_y7084n6v67jme9va8yz ) {
$this->any_membership_text = sprintf( __( "Any %s" ), $m4is_9ybr7472pbag66e['membership_levels'],
 'memberium' );
$m4is_rqxytszfq5v6syth1csqqxvy5 = [ 'options' => [$this->any_membership_text] ];
foreach ( $m4is_y7084n6v67jme9va8yz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_h9g6e5cga ) {
$m4is_rqxytszfq5v6syth1csqqxvy5['options'][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = stripslashes( $m4is_h9g6e5cga['name'] ) . "({$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh})";

}
$m4is_hce1y1a4qd65zhnwsj = $m4is_9ybr7472pbag66e['membership_levels'];
$m4is_wh2a0cbkrfq5abs = 'm4is_1atwqhr5ejr1regnn5vmbh';
oxygen_vsb_register_condition( $m4is_hce1y1a4qd65zhnwsj,
 $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_tm4863e571hyqnc38m3pea0b, $m4is_wh2a0cbkrfq5abs, $m4is_rwvhr14tkxcjnhnsrhab1n706cbq );
}
}

if( ! array_key_exists( 'tags1',
 $m4is_af7jcqj9e7w ) ){
$m4is_16z029335qr = m4is_0ddg4zyk7dn8eg0283::m4is_6aqw2cq1ybep7vgra5hh7zr( [], $m4is_6k84v5caq4k );
if( ! empty( $m4is_16z029335qr ) ){
$m4is_hce1y1a4qd65zhnwsj = sprintf( __( "Require %s",
 'memberium' ), $m4is_9ybr7472pbag66e['key_name'] );
$m4is_rqxytszfq5v6syth1csqqxvy5 = [ 'options' => $m4is_16z029335qr ];
$m4is_wh2a0cbkrfq5abs = 'm4is_zmz8ynvez';

oxygen_vsb_register_condition( $m4is_hce1y1a4qd65zhnwsj, $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_6vwjpwm9, $m4is_wh2a0cbkrfq5abs, $m4is_rwvhr14tkxcjnhnsrhab1n706cbq );

}
}

if( ! array_key_exists( 'asset_id', $m4is_af7jcqj9e7w ) ){
$m4is_hce1y1a4qd65zhnwsj = $m4is_9ybr7472pbag66e['asset_id'];
$m4is_wh2a0cbkrfq5abs = 'm4is_6wxfzsgn2g6dhpnagev';

$this->conditions[$m4is_hce1y1a4qd65zhnwsj] = "{$m4is_zxa05fq9f81p8g}_asset_id";
$m4is_rqxytszfq5v6syth1csqqxvy5 = ['custom' => true];

oxygen_vsb_register_condition($m4is_hce1y1a4qd65zhnwsj, $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_tm4863e571hyqnc38m3pea0b, $m4is_wh2a0cbkrfq5abs,
 $m4is_rwvhr14tkxcjnhnsrhab1n706cbq);
}
}

function m4is_7sg9f2ayr7phwk21e754en2t805d( $m4is_cegjvya4jj68mdszk ) {
$m4is_n7x0afpz = [
'any_membership' =>
 0,
'asset_id' => '',
'contact_ids' => '',
'eval' => '',
'invert_results' => 0,
'logged_in_only' => 0,
'logged_out_only' => 0,
'memberships' =>
 '',
'tags1' => '',
'tags2' => ''
];
$m4is_7at6ht5xya03bc = wp_parse_args( $m4is_cegjvya4jj68mdszk, $m4is_n7x0afpz );
return m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_xpe0t3cfrjmnm2tyt7sve0dk()->m4is_5wz355nv6hgn5e9pt4gcezrrt2stqx9( $m4is_7at6ht5xya03bc,
 'oxygen' );
}

function m4is_mz24486h6fkwy8snt3t3k5vy8r( $m4is_rqxytszfq5v6syth1csqqxvy5 ){
$m4is_cegjvya4jj68mdszk = array_filter( explode( '(',
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) );
return (int) end( $m4is_cegjvya4jj68mdszk );
}
private $safe_tags = [
'ct_code_block',
'ct_headlines',

'ct_link_button',
'ct_link',
'ct_text_block',
'oxy_rich_text',
];
public $any_membership_text; 
}




function m4is_1atwqhr5ejr1regnn5vmbh($m4is_rqxytszfq5v6syth1csqqxvy5,
 $m4is_tm4863e571hyqnc38m3pea0b){
$m4is_d8xg8661hr7nc = m4is_r3t0yzn9d4c::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = [];

$m4is_zqcgxj76rd1tys27j0a0m = $m4is_d8xg8661hr7nc->any_membership_text;
if( $m4is_rqxytszfq5v6syth1csqqxvy5 === $m4is_zqcgxj76rd1tys27j0a0m ){
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['any_membership'] = 1;

}
else {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberships'] = $m4is_d8xg8661hr7nc->m4is_mz24486h6fkwy8snt3t3k5vy8r($m4is_rqxytszfq5v6syth1csqqxvy5);

}
return $m4is_d8xg8661hr7nc->m4is_7sg9f2ayr7phwk21e754en2t805d($m4is_8ew58cpxmftgpw93gdffm4s9bbwy);
}

function m4is_zmz8ynvez($m4is_rqxytszfq5v6syth1csqqxvy5,
 $m4is_tm4863e571hyqnc38m3pea0b) {
$m4is_d8xg8661hr7nc = m4is_r3t0yzn9d4c::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$m4is_22ttk43zkz6twcz8 = in_array($m4is_tm4863e571hyqnc38m3pea0b,
 ['!=', "doesn't include"]) ? '-' : '';
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_d8xg8661hr7nc->m4is_mz24486h6fkwy8snt3t3k5vy8r($m4is_rqxytszfq5v6syth1csqqxvy5);

$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = ['tags1' => $m4is_22ttk43zkz6twcz8 . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh];
return $m4is_d8xg8661hr7nc->m4is_7sg9f2ayr7phwk21e754en2t805d($m4is_8ew58cpxmftgpw93gdffm4s9bbwy);

}

function m4is_6wxfzsgn2g6dhpnagev($m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_tm4863e571hyqnc38m3pea0b) {

if( ! empty($m4is_rqxytszfq5v6syth1csqqxvy5) ){
$m4is_rqxytszfq5v6syth1csqqxvy5 = str_replace([" ",
 "-", "\n", "\r", "\t"], '', $m4is_rqxytszfq5v6syth1csqqxvy5);
}

if( ! empty($m4is_rqxytszfq5v6syth1csqqxvy5) ){
$settings = ['asset_id' =>
 $m4is_rqxytszfq5v6syth1csqqxvy5];
return m4is_r3t0yzn9d4c::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_7sg9f2ayr7phwk21e754en2t805d($settings);

}
else {
return true;
}
}