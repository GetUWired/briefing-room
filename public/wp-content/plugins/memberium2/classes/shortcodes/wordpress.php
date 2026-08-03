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

final class m4is_xfgyxrmgr0te9bj4ywb8w05cjq3fjyh8 {
private static $m4is_132xe588j;
private static $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

private static $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;
private static $m4is_zz74kb50;
private static $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;


static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();
self::$m4is_zz74kb50 = ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y();

self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'memberium';

}

static function m4is_z62ac22dzmkvj55zqewssc( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';

}

$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'htmlattr' => '',
'leavename' => 0,
'post_id' => 0,
'txtfmt' =>
 '',
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] === 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_049phh2k17367hdfjqqpdzpxb69dg = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['leavename'],
 false );
$m4is_tz1rt7sbq40fade6e6rx = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['post_id'];
$m4is_bsamg3fezf = $m4is_tz1rt7sbq40fade6e6rx == 0 ? get_permalink( NULL,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['leavename'] ) : get_permalink( $m4is_tz1rt7sbq40fade6e6rx, $m4is_049phh2k17367hdfjqqpdzpxb69dg );


if ( $m4is_bsamg3fezf === false ) {
error_log( sprintf( 'Memberium:  [error] %s failed to retrieve permalink for post ID %d', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 $m4is_tz1rt7sbq40fade6e6rx ) );
return 'Error: Failed to retrieve the permalink.';
}

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );
}

static function m4is_9smx6q5snfv0xddp4ge9vh1wnmg9rp9r( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( is_feed() ) {
return '';
}
$m4is_mww4drswykx6122hptknj86rrky = (int) m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'persistent_login', 0 );

$m4is_n7x0afpz = [
'redirect' => isset( $_GET['redirect_to'] ) ? $_GET['redirect_to'] : get_admin_url(),

'button_label' => 'Log In',
'form_id' => 'loginform',
'password_label' => 'Password:',
'remember_label' => 'Remember Me',
'username_label' =>
 'Username:',
'remember_value' => 'forever', 
'remember' => false, 
'secure' => false,
'show' => false,
'error_message' => _x( 'Login Failed',
 'memberium_loginform', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['redirect'];

$m4is_pae00hv11 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'];
$m4is_yemcm0dhcvsvd7r34nmq7dhb1wx = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_label'];

$m4is_j5twd3mtr2dxrsw4nwz = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['password_label'];
$m4is_aw0znm0ekvb6k = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['remember_label'];

$m4is_gm48w2dksbzwjys0d8eyrgs0wd2y6 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['username_label'];
$m4is_7w9sx3x9v81jpa1n8mvrpcffnq = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['error_message'] );

$m4is_fmjjpbcx45de4jq = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['secure'],
 false );
$m4is_hbhwj5tpp5r5hes05cj5 = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['remember'],
 false );
$m4is_1k4mege9s3abx55t = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['remember_value'],
 false );
$m4is_bz2r32mdacnk4gnk7 = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['show'],
 false );
$m4is_j7kb823987ht9y5ve2k45re53gtd = function_exists( 'stopbadbots_addfieldlogin' );
$m4is_hartbe843crydzh = '';

if ( is_user_logged_in() && ! $m4is_bz2r32mdacnk4gnk7 ) {
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return '<p>' . esc_html( _x( 'Logged in as Admin',
 'memb_loginform', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) ) . '</p>';
}
return '';
}

if ( ! empty( $_GET['login'] ) && $_GET['login'] == 'failed' ) {
$m4is_6pd7224t7bbkremk3ezyk = isset( $_COOKIE['login_error'] ) ? __( $_COOKIE['login_error'] ) : __( 'Login Failed',
 'memb_loginform' );
$m4is_6pd7224t7bbkremk3ezyk = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['error_message'] ) ? $m4is_6pd7224t7bbkremk3ezyk : $m4is_7w9sx3x9v81jpa1n8mvrpcffnq;

$m4is_6pd7224t7bbkremk3ezyk = apply_filters( 'login_errors', $m4is_6pd7224t7bbkremk3ezyk );
if ( ! empty ($m4is_6pd7224t7bbkremk3ezyk ) ) {
$m4is_hartbe843crydzh .= '<p class="memberium-login-error">' . esc_html( $m4is_6pd7224t7bbkremk3ezyk ) . '</pre>';

}
}

$m4is_g61yzqs7ecta0xztr70d7v = [
'echo' => false,
'form_id' => $m4is_pae00hv11,
'label_log_in' => $m4is_yemcm0dhcvsvd7r34nmq7dhb1wx,

'label_password' => $m4is_j5twd3mtr2dxrsw4nwz,
'label_remember' => $m4is_aw0znm0ekvb6k,
'label_username' => $m4is_gm48w2dksbzwjys0d8eyrgs0wd2y6,

'redirect' => $m4is_tfecza742dzhrkkbv781dnbvf40m6,
'remember' => $m4is_hbhwj5tpp5r5hes05cj5,
'value_remember' => $m4is_1k4mege9s3abx55t,

];

$m4is_hartbe843crydzh .= "\n\n<!-- Memberium-WordPress Login Form -->\n";

if ( $m4is_j7kb823987ht9y5ve2k45re53gtd ) {
add_filter( 'login_form_middle',
 function( $m4is_bsamg3fezf, $m4is_g61yzqs7ecta0xztr70d7v ) { return '<input name=stopbadbots_key type=hidden value=1 />'; }, 10, 2);

}

$m4is_hartbe843crydzh .= wp_login_form( $m4is_g61yzqs7ecta0xztr70d7v );

$m4is_hartbe843crydzh = do_shortcode( $m4is_hartbe843crydzh );


if ( $m4is_j7kb823987ht9y5ve2k45re53gtd ) {
remove_filter( 'login_form_middle', 'stopbadbots_addfieldlogin' );
}

if ( $m4is_fmjjpbcx45de4jq ) {
$m4is_hartbe843crydzh = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_q8dbdhqpz373mgzjcny29pte6mth7jz( $m4is_hartbe843crydzh );

}

return $m4is_hartbe843crydzh;
}

static function m4is_2gqbxcp7yepvpfx5csv8z5a43h( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';
}

$m4is_n7x0afpz = [
'after' =>
 '',
'before' => '',
'capture' => '',
'date_format' => '',
'default' => '',
'fields' => '',
'htmlattr' => '',
'post_id' => 0,
'separator' =>
 ' ',
'txtfmt' => '',
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_tz1rt7sbq40fade6e6rx = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['post_id'] ) ? get_the_ID() : (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['post_id'];


$m4is_7b2yfzk0054 = array_filter( explode( ',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] ) );

$m4is_s67jk5ynxsd7f431hw4q2qpec6msg = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'];


$m4is_syqymyz40rx4xgtqp8475ffwzw = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'];

$m4is_txw5cpax2gpn3mr3m1p1g2tr4g9sw = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator'];


if ( empty( $m4is_tz1rt7sbq40fade6e6rx ) || empty( $m4is_7b2yfzk0054 ) ) {
return '';
}

$m4is_sb1cff4xx6ax7c = count( $m4is_7b2yfzk0054 );


$m4is_z4ts5pa39jf1yhjb4 = get_post( $m4is_tz1rt7sbq40fade6e6rx );

$m4is_gb01jqxh9ek2m = '';

foreach ( $m4is_7b2yfzk0054 as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) {

$m4is_jt0nkw41skt8r3vvprszr = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, true );

if ( ! empty( $m4is_jt0nkw41skt8r3vvprszr ) ) {

$m4is_map8tdmsvarsn03f1fhfytx61b4a = strtotime( $m4is_jt0nkw41skt8r3vvprszr );



if ( empty( $m4is_s67jk5ynxsd7f431hw4q2qpec6msg ) || empty( $m4is_map8tdmsvarsn03f1fhfytx61b4a ) ) {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = $m4is_jt0nkw41skt8r3vvprszr;

}
else {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = date( $m4is_s67jk5ynxsd7f431hw4q2qpec6msg, $m4is_map8tdmsvarsn03f1fhfytx61b4a );
}
}

elseif ( ! empty( $m4is_z4ts5pa39jf1yhjb4->$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) ) {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = $m4is_z4ts5pa39jf1yhjb4->$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6;

}

else {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = $m4is_syqymyz40rx4xgtqp8475ffwzw;
}

$m4is_gb01jqxh9ek2m .= $m4is_xgtgw8c7w25hk72ec5z99vqy7a;


if ( --$m4is_sb1cff4xx6ax7c > 0 ) {
$m4is_gb01jqxh9ek2m .= $m4is_txw5cpax2gpn3mr3m1p1g2tr4g9sw;
}
}

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );
}

static function m4is_n8ysp1j3s4rspx2gvmhkc7727tbw58d( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';

}

$m4is_n7x0afpz = [
'after' => '', 
'before' => '', 
'htmlattr' => '', 
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_fxg5q0wq0bg4tkd = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'login_url' );

$m4is_bsamg3fezf = $m4is_fxg5q0wq0bg4tkd < 1 ? wp_login_url() : get_permalink( $m4is_fxg5q0wq0bg4tkd );

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, '', '', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );

}

static function m4is_6t99ggt4zhmhqffd3yha( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
global $wp_embed;

if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_n7x0afpz = [
'bypass_permissions' => 0,
'capture' => '',
'field' => 'post_content',

'id' => 0,
'length' => 0,
'tagid' => '',
'txtfmt' => '',
'type' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = array_filter( explode( ',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagid'] ) );

$m4is_yhdk2h7srcr7n5mzjnw7m6b = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['type'] ) );
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] );

$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = empty( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) ? 'post_content' : $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6;

$m4is_tz1rt7sbq40fade6e6rx = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'];
if ( empty( $m4is_tz1rt7sbq40fade6e6rx ) ) {
return '';

}
if ( ! empty( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) ) {
if ( ! self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) ) {
return '';

}
}
if ( empty( $m4is_yhdk2h7srcr7n5mzjnw7m6b ) ) {
switch ( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 ) {
case 'memb_include_partial':
$m4is_yhdk2h7srcr7n5mzjnw7m6b = 'partials';

break;
case 'memb_include_page':
$m4is_yhdk2h7srcr7n5mzjnw7m6b = 'page';
break;
default:
$m4is_yhdk2h7srcr7n5mzjnw7m6b = 'post';
break;

}
}

if ( is_int( $m4is_tz1rt7sbq40fade6e6rx ) ) {
$m4is_1jnt49gjspz02zgxdj = get_post( $m4is_tz1rt7sbq40fade6e6rx, ARRAY_A );
$m4is_tz1rt7sbq40fade6e6rx = $m4is_1jnt49gjspz02zgxdj['ID'];

}
elseif ( $m4is_tz1rt7sbq40fade6e6rx == 0 ) {
$m4is_1jnt49gjspz02zgxdj = get_page_by_path( $m4is_tz1rt7sbq40fade6e6rx, ARRAY_A, $m4is_yhdk2h7srcr7n5mzjnw7m6b );

$m4is_tz1rt7sbq40fade6e6rx = empty( $m4is_1jnt49gjspz02zgxdj['ID'] ) ? 0 : $m4is_1jnt49gjspz02zgxdj['ID'];
}
elseif ( $m4is_tz1rt7sbq40fade6e6rx == 0 ) {
$m4is_1jnt49gjspz02zgxdj = get_page_by_title( $m4is_tz1rt7sbq40fade6e6rx,
 ARRAY_A, $m4is_yhdk2h7srcr7n5mzjnw7m6b );
}

if ( self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_krs2avqy019m3mx( (int) $m4is_1jnt49gjspz02zgxdj['ID'] ) ) {
$m4is_gb01jqxh9ek2m = do_shortcode( $wp_embed->run_shortcode( $m4is_1jnt49gjspz02zgxdj[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] ) );

}
else {
$m4is_gb01jqxh9ek2m = do_shortcode( $wp_embed->run_shortcode( $m4is_1jnt49gjspz02zgxdj['post_excerpt'] ) );
}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['length'] ) {
$m4is_gb01jqxh9ek2m = substr( $m4is_gb01jqxh9ek2m,
 0, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['length'] );
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_gb01jqxh9ek2m,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
}
static function m4is_c9qtd45znsyja68regf( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'logintext' => 'Login',
'logouttext' => 'Logout',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
return is_user_logged_in() ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['logouttext'] : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['logintext'];

}
static function m4is_46j21fbp07m4962eas4exxpt2tk35jse( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'htmlattr' => '',
'linktext' => 'Logout',
'url' => ''
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'] );

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = empty( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) ? self::$m4is_132xe588j->m4is_e6neacb8dq() : $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq;

$m4is_rhz6htkn237vwza0 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'] );
$m4is_zhf4dv1f7qn2 = wp_logout_url( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq );

$m4is_c4jh9b2nh69755q9wq6na94 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['linktext'] );
if ( empty( $m4is_rhz6htkn237vwza0 ) ) {
$m4is_xb743p99gg = _x('Logout',
 'memb_logout_link', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_bsamg3fezf = sprintf( '<a href="%s" title="%s" class="memb_logout_link">%s</a>',
 $m4is_zhf4dv1f7qn2, $m4is_xb743p99gg, $m4is_c4jh9b2nh69755q9wq6na94 );
}
else {
$m4is_bsamg3fezf = $m4is_zhf4dv1f7qn2;
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, '', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );
}

public static function m4is_x07xc9q6pptjda5b9hpwq8hh5g4zpp( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return 'n/a';

}
if ( ! is_singular() ) {
return '';
}
self::$m4is_132xe588j->m4is_m9bcx7dqv78();
wp_destroy_current_session();
wp_clear_auth_cookie();

wp_logout();
return '';
}

static function m4is_6hffch540btnkc7tdwm5( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';
}

if ( is_feed() || self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return '';

}

$m4is_n7x0afpz = [
'automatic' => true,
'delay' => 0,
'forcejs' => true,
'target' => '_self',
'url' => '',
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'] );

$m4is_tz1rt7sbq40fade6e6rx = get_the_id();
$m4is_zsw262nvvw3tt9hng = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delay'] * 1000;
$m4is_wfqyw85b963khn80f4gwmxdqrf2szz = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['automatic'],
 true );
$m4is_b92ncz9arp4 = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['forcejs'],
 true );
$m4is_h4bme6g30z3je9phn = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['target'] ) );
$m4is_rfagz4ec629ybmn = ! headers_sent();

$m4is_rfagz4ec629ybmn = $m4is_rfagz4ec629ybmn && empty( $m4is_zsw262nvvw3tt9hng );
$m4is_rfagz4ec629ybmn = $m4is_rfagz4ec629ybmn && ( is_single( $m4is_tz1rt7sbq40fade6e6rx ) || is_page( $m4is_tz1rt7sbq40fade6e6rx ) );

$m4is_rfagz4ec629ybmn = $m4is_rfagz4ec629ybmn && $m4is_wfqyw85b963khn80f4gwmxdqrf2szz;
$m4is_rfagz4ec629ybmn = $m4is_rfagz4ec629ybmn && ! $m4is_b92ncz9arp4;


if ( $m4is_rfagz4ec629ybmn ) {
wp_redirect( html_entity_decode( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) );
exit;
}

$m4is_mtc44th1rmmadyst7q = $m4is_h4bme6g30z3je9phn == '_self' || empty( $m4is_h4bme6g30z3je9phn ) ? sprintf( 'window.location  = ("%s");',
 $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) : sprintf( 'window.open( "%s", "%s" );', $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, $m4is_h4bme6g30z3je9phn );


if ( $m4is_zsw262nvvw3tt9hng ) {
$m4is_qer22t5xjy6ha7jv4a8m0kaz = <<<JAVASCRIPTBLOCK

				'<script>
					jQuery(document).ready(function() {
						setTimeout(function() {
							{$m4is_mtc44th1rmmadyst7q}
						}, {$m4is_zsw262nvvw3tt9hng} );
					});
				</script>
			JAVASCRIPTBLOCK;

}
else {
$m4is_qer22t5xjy6ha7jv4a8m0kaz = "<script> {$m4is_mtc44th1rmmadyst7q} </script>";
}

return html_entity_decode( $m4is_qer22t5xjy6ha7jv4a8m0kaz );

}

static function m4is_0m3gxcsp4kppd7n43txvvt5( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';

}

$m4is_n7x0afpz = [
'capture' => '',
'txtfmt' => '',
'filename' => '',
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}

$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = strtolower( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

if ( substr( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['filename'],
 0, 1 ) !== '/' && substr( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['filename'], 0, 1 ) !== '\\' ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['filename'] = ABSPATH . '/' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['filename'];

}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['filename'] .= '.php';

if ( ! file_exists( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['filename'] ) ) {
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return _x( 'Not Found.',
 'memb_php_include', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
}
else {
return '';
}
}

ob_start();

if ( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 == 'memb_phpinclude_once' ) {
include_once $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['filename'];

}
else {
include $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['filename'];
}

$m4is_gb01jqxh9ek2m = ob_get_clean();

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
}

static function m4is_9yentc9h97tme4rr( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';

}

$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'default' => '',
'htmlattr' => '',
'name' => '',
'txtfmt' =>
 '',
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}

$m4is_sv4jqr1nqajr3a = [
'memb_cookie' => $_COOKIE,
'memb_get' => $_GET,
'memb_post' => $_POST,

'memb_request' => $_REQUEST,
'memb_server' => $_SERVER,
'memb_session' => isset( $_SESSION ) ? $_SESSION : [],
];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_gb01jqxh9ek2m = '';
$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = strtolower( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 );


$m4is_dsarkj123htxkgtm4ds86 = array_key_exists( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_sv4jqr1nqajr3a ) ? $m4is_sv4jqr1nqajr3a[ $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 ] : false;


$m4is_crt3n3n5msht7j6my5ahft = array_filter( explode( ',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name'] ) );

if ( ! $m4is_dsarkj123htxkgtm4ds86 ) {
return '';

}

foreach ( $m4is_crt3n3n5msht7j6my5ahft as $m4is_dpjeyyj7c259yxqtcmvm6 ) {
if ( ! empty( $m4is_dsarkj123htxkgtm4ds86[$m4is_dpjeyyj7c259yxqtcmvm6] ) ) {
$m4is_dsarkj123htxkgtm4ds86 = $m4is_dsarkj123htxkgtm4ds86[$m4is_dpjeyyj7c259yxqtcmvm6];

}
else {
$m4is_dsarkj123htxkgtm4ds86 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'];
break;
}
}

$m4is_gb01jqxh9ek2m = is_array( $m4is_dsarkj123htxkgtm4ds86 ) ? htmlspecialchars( print_r( $m4is_dsarkj123htxkgtm4ds86,
 true ) ) : htmlspecialchars( $m4is_dsarkj123htxkgtm4ds86 );

return (string) m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );
}

static function m4is_b24xkyhzkj( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';

}

$m4is_n7x0afpz = [
'capture' => '',
'shortcodes' => false,
'txtfmt' => '',
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_bsamg3fezf = preg_replace( '#</p>\s*<p>#', '', $m4is_bsamg3fezf );

$m4is_8hphzjz7d = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['shortcodes'],
 false );

$m4is_bsamg3fezf = $m4is_8hphzjz7d ? do_shortcode( $m4is_bsamg3fezf ) : $m4is_bsamg3fezf;

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
}

static function m4is_rd3rm2s0ct2wv00dvtj5( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';

}

if ( is_feed() ) {
return '';
}

$m4is_v8fccp9xt9zy49bbf4vymrktbd = [
'__utma',
'__utmc',
'__utmz',
'NREUM',
'PHPSESSID',
'wordpress_test_cookie',

'wp-settings-1',
'wp-settings-time-1',
];

$m4is_n7x0afpz = [
'domain' => $_SERVER['HTTP_HOST'],
'expiration' => 'forever',
'httponly' =>
 false,
'name' => '',
'path' => '/',
'secure' => false,
'value' => '',
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_zd1mnpszkt4f = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name'] );
if ( empty( $m4is_zd1mnpszkt4f ) || in_array( $m4is_zd1mnpszkt4f,
 $m4is_v8fccp9xt9zy49bbf4vymrktbd ) ) {
return '';
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'] = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'] ) );

if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'] === 'forever' ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'] = '2038-01-19 00:00:00';

} elseif ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'] == '' || $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'] == 'session' ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'] = 0;

} elseif ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'] === (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'] ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'] += time();

} else {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'] = strtotime( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'] );
}

$_COOKIE[ $m4is_zd1mnpszkt4f ] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name'];


m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_80q7y7n7( $m4is_zd1mnpszkt4f, [
'name' => $m4is_zd1mnpszkt4f,

'value' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'],
'expiration' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['expiration'],
'path' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['path'],
'domain' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['domain'],
'secure' => m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['secure'],
 false ),
'httponly' => m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['httponly'],
 false ),
] );
return '';
}

static function m4is_ghg692ysyj( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'date' =>
 'now',
'format' => 'l, F dS, Y, g:sA e',
'host_timezone' => get_option( 'timezone_string' ),
'htmlattr' => '',
'modifier' => '',
'txtfmt' =>
 '',
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_gb01jqxh9ek2m = '';
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_7rpkngkcnsdte3xm46a7js4q3ftk5v = timezone_identifiers_list();


$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['host_timezone'] = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['host_timezone']) ? 'UTC' : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['host_timezone'];


if (! in_array( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['host_timezone'], $m4is_7rpkngkcnsdte3xm46a7js4q3ftk5v ) ) {
$m4is_e7hgn67mnmq8hvf4p8sxe7c = array_search( strtolower( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['host_timezone'] ),
 array_map( 'strtolower', $m4is_7rpkngkcnsdte3xm46a7js4q3ftk5v ) );
if ( $m4is_e7hgn67mnmq8hvf4p8sxe7c !== false ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['host_timezone'] = $m4is_7rpkngkcnsdte3xm46a7js4q3ftk5v[ $m4is_e7hgn67mnmq8hvf4p8sxe7c ];

}
}

if ( in_array( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['host_timezone'], $m4is_7rpkngkcnsdte3xm46a7js4q3ftk5v ) ) {
$m4is_ps89m7hba111j4zzj = date_default_timezone_get();

date_default_timezone_set( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['host_timezone'] );
$m4is_gb01jqxh9ek2m = date( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['format'],
 strtotime( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date'] . ' ' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['modifier'] ) );
date_default_timezone_set( $m4is_ps89m7hba111j4zzj );

}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );
}

static function m4is_eeebh4zya7( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_bsamg3fezf = null,
 $tag = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';
}

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_n7x0afpz = [
'capture' =>
 '',
'txtfmt' => '',
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}

$m4is_gb01jqxh9ek2m = '';

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_mgh9afqafjbhhdvmsprw = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'global_excerpt' );

if (! empty( $m4is_mgh9afqafjbhhdvmsprw ) ) {
$m4is_gb01jqxh9ek2m = do_shortcode( $m4is_mgh9afqafjbhhdvmsprw );

}

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
}

static function m4is_pee35qkzabhk1nckw026vb0( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';
}

$m4is_n7x0afpz = [
'after' =>
 '',
'before' => '',
'capture' => '',
'date_format' => 'F jS, Y',
'htmlattr' => '',
'txtfmt' => '',
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}

if ( ! is_user_logged_in() ) {
return '';
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_gb01jqxh9ek2m = date( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'],
 strtotime( get_userdata( self::$m4is_132xe588j->m4is_vd3qpw0vkdm() )->user_registered ) );

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );
}

static function m4is_gzpd3h5nw8afykqh7za($m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {

if (self::$m4is_zz74kb50) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();


if (!m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y()) {
return wp_login_url();
}

$m4is_n7x0afpz = [
'after' => '',
'before' =>
 '',
'capture' => '',
'htmlattr' => '',
'txtfmt' => '',
];

if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz));
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858);

$m4is_tz1rt7sbq40fade6e6rx = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'registration_url');
$m4is_3mp0nd4jv65b708ytkc3 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'login_url');


if (!$m4is_tz1rt7sbq40fade6e6rx && $m4is_3mp0nd4jv65b708ytkc3 > 0) {
$m4is_tz1rt7sbq40fade6e6rx = $m4is_3mp0nd4jv65b708ytkc3;
}

$m4is_gb01jqxh9ek2m = $m4is_tz1rt7sbq40fade6e6rx ? get_permalink($m4is_tz1rt7sbq40fade6e6rx) : get_site_url();


return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}

static function m4is_tzfnwpq6g691db2n1vmg2khpp9( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';
}

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();


$m4is_n7x0afpz = [
'authkey' => '',
'cachetime' => 3600,
'capture' => '',
'field' => 'post_content',
'id' => 0,
'txtfmt' => '',
'url' =>
 '',
];

if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858);

if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id']) || empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url']) || empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['authkey']) || empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field']) ) {
return '';

}

$m4is_n9myfcs3vk7wv = [
'user-agent' => 'Memberium',
'body' => ['contactId' => self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ],
];


$m4is_pyqp181sqt1jav4kh4c6wgft3aj = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'] . '?operation=get-post&auth_key=' . urlencode(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['authkey']) ) . '&post_id=' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] . '&field=' . urlencode(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field']) );


$response = wp_remote_post($m4is_pyqp181sqt1jav4kh4c6wgft3aj, $m4is_n9myfcs3vk7wv);

$m4is_gb01jqxh9ek2m = do_shortcode($response['body']);


return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}

static function m4is_nwjeg5r8q9881wkstshnp( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';
}

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();


$m4is_n7x0afpz = [
'type' => 'lostpassword',
'htmlattr' => '',
'redirect' => '',
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_h7zwy5f0w3y9gx3wm = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['type'] ) );


$m4is_3g7faa0zhw70 = get_option( 'memberium_pages' );



$m4is_gb01jqxh9ek2m = $m4is_h7zwy5f0w3y9gx3wm == 'lostpassword' ? wp_lostpassword_url( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['redirect'] ) : ( array_key_exists( $m4is_h7zwy5f0w3y9gx3wm,
 $m4is_3g7faa0zhw70 ) ? get_permalink( $m4is_3g7faa0zhw70[ $m4is_h7zwy5f0w3y9gx3wm ] ) : '' );

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_gb01jqxh9ek2m, '', '', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'] );
}

static function m4is_jxf21dvmctvme5rrb5syxhn( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

if ( self::$m4is_zz74kb50 ) {
return '';
}

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();


$m4is_n7x0afpz = [
'action' => 'default',
];

if ( array_key_exists(0, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] === 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_cvmvsj84amka140xnjgkm5rrrfqch = [
'default',
'excerpt',
'hide',
'redirect',
'show',

];

$m4is_knxbec8fr3be1s2tkx0ydee0z = in_array( strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['action'])), $m4is_cvmvsj84amka140xnjgkm5rrrfqch ) ? strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['action'])) : 'default';


m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_yvw2gz9jprtk6kkkbygfs3sf5rc( $m4is_knxbec8fr3be1s2tkx0ydee0z );


return '';
}

}
