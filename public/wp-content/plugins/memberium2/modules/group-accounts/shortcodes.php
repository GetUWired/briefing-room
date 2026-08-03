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


final class m4is_h792nnyev6mbw6bxgrxawh48e {
private static $m4is_132xe588j;
private static $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;

private static $m4is_fv9p5zzz6;
private static $m4is_mhqzty3k54fv;

private function __construct() {

}

public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::NAMESPACE;

self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_mhqzty3k54fv = m4is_p2r78mkk9tdtwpmc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_fv9p5zzz6 = self::$m4is_mhqzty3k54fv->m4is_se0apr3xwyzdk8zcatzz('parent_tags');
}

public static function m4is_6h910tf7fe5ph8y( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
$m4is_n7x0afpz = [
'text' => '<p>%d of %d</p>',

];
if ( $m4is_wre4d0n1c4m7pcy7j305awh = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_4e5d7rvr89anekvg3v6( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_n7x0afpz ) ) {
return $m4is_wre4d0n1c4m7pcy7j305awh;
};
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();


if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return '[Admin] No Child Accounts';
}
if ( ! m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'umbrella', 'is_parent', 0 ) ) {
return '';
}
$m4is_ma90yykszqq4nbpvmwqcdw5nep5 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'umbrella', 'max_children', 0 );
$m4is_ddcxn3s885wta5k3b9fat5wnfvspp = self::$m4is_mhqzty3k54fv->m4is_aehydx19f( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_gb01jqxh9ek2m = sprintf( _x( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['text'], self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ), $m4is_ddcxn3s885wta5k3b9fat5wnfvspp,
 $m4is_ma90yykszqq4nbpvmwqcdw5nep5 );
$m4is_gb01jqxh9ek2m = apply_filters( 'memberium/shortcodes/' . $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 $m4is_gb01jqxh9ek2m );

return $m4is_gb01jqxh9ek2m;
}

public static function m4is_xw8817th66j( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

global $memb_messages;

$m4is_n7x0afpz = [
'button_text' =>
 'Add Account', 
'form_id' => '', 
'overwrite' => false,
];
if ( $m4is_wre4d0n1c4m7pcy7j305awh = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_4e5d7rvr89anekvg3v6( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_n7x0afpz ) ) {
return $m4is_wre4d0n1c4m7pcy7j305awh;
};

foreach( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp ) {


if ( ! array_key_exists( $m4is_bqhtspcavhb01spmfd3x, $m4is_n7x0afpz ) ) {
$m4is_n7x0afpz[$m4is_bqhtspcavhb01spmfd3x] = $m4is_29gzevpx8rbkp;

}
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['overwrite'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['overwrite'],
 false );

if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return '<p>[Admin] Cannot enroll child accounts</p>';
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

if ( ! m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'umbrella', 'is_parent', 0 ) ) {
return '';

}
$m4is_gb01jqxh9ek2m = '';
$m4is_ma90yykszqq4nbpvmwqcdw5nep5 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'umbrella', 'max_children', 0 );
$m4is_ddcxn3s885wta5k3b9fat5wnfvspp = self::$m4is_mhqzty3k54fv->m4is_aehydx19f( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );



if ( $m4is_ddcxn3s885wta5k3b9fat5wnfvspp >= $m4is_ma90yykszqq4nbpvmwqcdw5nep5 ) {
return sprintf( '<p style="subacct_maxed">%s</p>',
 _x( 'All child seats are assigned.', 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
}
$m4is_m0vrgvfczwzajnwf0e = [];

$m4is_45a857vx58aez0 = '<select name="actions">';
$m4is_gh7agjsse = [];

if ( is_array( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j ) ) {
foreach( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( substr( $m4is_j8j55t8dz79m7, 0, 1 ) <> 'a' ) {
continue;
}
$m4is_j8j55t8dz79m7 = intval( substr( $m4is_j8j55t8dz79m7,
 1 ) );
if ( $m4is_j8j55t8dz79m7 > 0 ) {
$m4is_45a857vx58aez0 .= sprintf( '<option value="%s">%s</option>', $m4is_j8j55t8dz79m7, $m4is_rqxytszfq5v6syth1csqqxvy5 );

$m4is_gh7agjsse[] = $m4is_j8j55t8dz79m7;
}
elseif ( $m4is_j8j55t8dz79m7 === 0 ) {
$m4is_45a857vx58aez0 .= sprintf( '<option value="">%s</option>',
 $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
}
}

$m4is_45a857vx58aez0 .= '</select>';

$m4is_m0vrgvfczwzajnwf0e = is_array( $m4is_gh7agjsse ) ? implode( ',',
 $m4is_gh7agjsse ) : '';

if ( empty( $m4is_gh7agjsse ) ) {
$m4is_45a857vx58aez0 .= '';
}

if ( ! empty( $m4is_bsamg3fezf ) ) {
$m4is_bsamg3fezf = str_ireplace( '%%action.dropdown%%',
 $m4is_45a857vx58aez0, $m4is_bsamg3fezf );
}

$m4is_gv7vjyv2c6g3nepw6 = base64_encode( serialize( [
'allowed_actions' => $m4is_m0vrgvfczwzajnwf0e,

'custom' => ! empty( $m4is_bsamg3fezf ),
'overwrite' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['overwrite'],
'contact_id' => self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v(),

]) );

$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf( $m4is_gv7vjyv2c6g3nepw6 );

if (! empty( $memb_messages['flash']['create_child_result'] ) ) {
$m4is_gb01jqxh9ek2m .= $memb_messages['flash']['create_child_result'];

}

$m4is_gb01jqxh9ek2m .= '<form method="POST" action="" id="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'] . '">';

$m4is_gb01jqxh9ek2m .= '<input type="hidden" name="formtype" value="childenroll">';

$m4is_gb01jqxh9ek2m .= "<input type=\"hidden\" name=\"params\" value=\"{$m4is_gv7vjyv2c6g3nepw6}\">";
$m4is_gb01jqxh9ek2m .= "<input type=\"hidden\" name=\"digital_signature\" value=\"{$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn}\">";


$m4is_gb01jqxh9ek2m .= wp_nonce_field( 'memb_childenroll', '_wpnonce', true, false );

if ( empty( $m4is_bsamg3fezf ) ) {
$m4is_gb01jqxh9ek2m .= sprintf( '<label>%s</label><input name="FirstName" type="text" value="" required="required"> *<br />',
 _x( 'First Name:', 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
$m4is_gb01jqxh9ek2m .= sprintf( '<label>%s</label><input name="LastName" type="text" value="" required="required"> *<br />',
 _x( 'Last Name:', 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
$m4is_gb01jqxh9ek2m .= sprintf( '<label>%s</label><input type="email" value="" name="Email" required="required"> *<br />',
 _x( 'Email Address:', 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
$m4is_gb01jqxh9ek2m .= sprintf( '<label>%s</label><input type="tel" value="" name="Phone3"><br />',
 _x( 'Mobile Number:', 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
}

else {
$m4is_gb01jqxh9ek2m .= do_shortcode( $m4is_bsamg3fezf );

}

$m4is_gb01jqxh9ek2m .= sprintf( '<label></label><input type="submit" value="%s" name=""><br />', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text'] );


$m4is_gb01jqxh9ek2m .= '</form>';

$memb_messages['flash']['create_child_result'] = '';

return $m4is_gb01jqxh9ek2m;
}






public static function m4is_bavgenfzsh05vq4xe1( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( ! class_exists( 'SFWD_LMS' ) || ! method_exists( 'SFWD_LMS',
 'get_course_info' ) ) {
if ( current_user_can( 'manage_options' ) ) {
return '<p>LearnDash SFWD_LMS::get_course_info() method is missing.</p>';

}
return '<p>Course information is not available.</p>';
}
$m4is_jrevmgznpp3pd48gsq5 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
if ( ! $m4is_jrevmgznpp3pd48gsq5 ) {
return '';

}
$m4is_n7x0afpz = [
'user_id' => isset( $_GET['user_id'] ) ? (int) $_GET['user_id'] : 0,
'contact_id' => isset( $_GET['contact_id'] ) ? (int) $_GET['contact_id'] : 0,

];
if ( $m4is_wre4d0n1c4m7pcy7j305awh = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_4e5d7rvr89anekvg3v6( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_n7x0afpz ) ) {
return $m4is_wre4d0n1c4m7pcy7j305awh;
};

if ( ! $m4is_jrevmgznpp3pd48gsq5 ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_mdk7rfndjat954rt2n0 = get_current_user_id();

$m4is_hrpd1pwhn = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['user_id'] ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['user_id'] : m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] );

if ( ! $m4is_hrpd1pwhn ) {
return '<p>No valid user to display.</p>';
}
$m4is_rbnywdz4e4wwpj414vtge = self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp();

$m4is_rbnywdz4e4wwpj414vtge = $m4is_rbnywdz4e4wwpj414vtge || self::$m4is_mhqzty3k54fv->m4is_gf782dws76yc9p03( $m4is_mdk7rfndjat954rt2n0,
 $m4is_hrpd1pwhn );

if ( ! $m4is_rbnywdz4e4wwpj414vtge ) {
$m4is_khxvebq01f = self::$m4is_mhqzty3k54fv->m4is_g8j3ahbg0y001ryr();
$m4is_rbnywdz4e4wwpj414vtge = in_array( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'],
 $m4is_khxvebq01f );
}

if ( ! $m4is_rbnywdz4e4wwpj414vtge ) {
$m4is_rbnywdz4e4wwpj414vtge = ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] == m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_jrevmgznpp3pd48gsq5,
 'memb_user', 'crm_id', 0 ) );
}

if ( $m4is_rbnywdz4e4wwpj414vtge ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] );


if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [
'registered_show_thumbnail' => 'false',
'user_id' =>
 $m4is_wk4dh1rnd3wmwvsggq51nhn87
];
return SFWD_LMS::get_course_info( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j );

}
else {
$m4is_rbnywdz4e4wwpj414vtge = false;
}
}

if ( ! $m4is_rbnywdz4e4wwpj414vtge ) {
return "<p>Access not permitted to this user's course records</p>";

}
return '';
}

public static function m4is_ve987s57w02a39vpfw299n3m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

$m4is_n7x0afpz = [
'limit' => isset( $_GET['limit'] ) ? (int) $_GET['limit'] : 0,
 
'page' => isset( $_GET['pg'] ) ? (int) $_GET['pg'] : 1, 
'parent_id' => self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v(), 
];

if ( $m4is_wre4d0n1c4m7pcy7j305awh = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_4e5d7rvr89anekvg3v6( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_n7x0afpz ) ) {
return $m4is_wre4d0n1c4m7pcy7j305awh;
};

if ( ! self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( self::$m4is_fv9p5zzz6 ) ) {
return '';

}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );


if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['limit'] == 0 ) {
return '';
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['count'] = self::$m4is_mhqzty3k54fv->m4is_mp12at0vj16fhw9bf97jq6bkq0pjy();


$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] < 1 ? 1 : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'];


$m4is_3g7faa0zhw70 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['count'] > 0 ? (int) ceil( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['count'] / $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['limit'] ) : 1;


if ( $m4is_3g7faa0zhw70 < 2 ) {
return '';
}

$m4is_pbmd8pt8qaem0bv4wk92mwjjt323yedp = add_query_arg( 'pg', ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] - 1) );

$m4is_dda9w5sd4p2eavt7 = add_query_arg( 'pg', ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] + 1 ) );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] = ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] < 1 ) ? 1 : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'];


$m4is_gb01jqxh9ek2m = '<div class="memberium_umbrella_nav" style="width:100%;">';

if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] > 1 ) {
$m4is_gb01jqxh9ek2m .= '<span class="memberium_umbrella_nav_previous" style="margin-left:30px;margin-right:30px;"><a href="' . $m4is_pbmd8pt8qaem0bv4wk92mwjjt323yedp . '">&lt;Previous&gt;</a></span>';

}

$m4is_gb01jqxh9ek2m .= '<span class="">Page ' . ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] ) . ' of ' . ( $m4is_3g7faa0zhw70 ) . '</span>';


if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] < $m4is_3g7faa0zhw70 ) {
$m4is_gb01jqxh9ek2m .= '<span class="memberium_umbrella_nav_next" style="margin-left:30px;margin-right:30px;"><a href="' . $m4is_dda9w5sd4p2eavt7 . '">&lt;Next&gt;</a></span>';

}

$m4is_gb01jqxh9ek2m .= '</div>';

return $m4is_gb01jqxh9ek2m;
}

public static function m4is_aqc5ns43mcjkeymjyhphwbgpg( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

$m4is_n7x0afpz = [
'can_disconnect' =>
 'y', 
'limit' => isset( $_GET['limit'] ) ? (int) $_GET['limit'] : 0, 
'page' => isset( $_GET['pg'] ) ? (int) $_GET['pg'] : 1, 
'parent_id' =>
 self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v(), 
];
if ( $m4is_wre4d0n1c4m7pcy7j305awh = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_4e5d7rvr89anekvg3v6( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_n7x0afpz ) ) {
return $m4is_wre4d0n1c4m7pcy7j305awh;
};

if ( ! self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( self::$m4is_fv9p5zzz6 ) ) {
return '';

}

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['can_disconnect'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['can_disconnect'],
 true );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] > 0 ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] : 1;

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] < 1 ? 1 : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['parent_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['parent_id'];
$m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq = ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page'] - 1 ) * $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['limit'];

$m4is_gb01jqxh9ek2m = '';
$m4is_5ygx9ywzd4gfc1dwqb = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['parent_id'] );

if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['parent_id'] ) ) {
return '';
}
m4is_bj0mt04ye7axtp644x64m::m4is_4vw3pgzrq9ng4ndvq( $m4is_5ygx9ywzd4gfc1dwqb );


if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['limit'] ) {

$m4is_g61yzqs7ecta0xztr70d7v = [
'contact_id' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['parent_id'],
 
'limit' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['limit'], 
'offset' => $m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq 
];

$m4is_3qwaf6xd03657aas = self::$m4is_mhqzty3k54fv->m4is_g8j3ahbg0y001ryr( $m4is_g61yzqs7ecta0xztr70d7v );

}
else {

$m4is_3qwaf6xd03657aas = self::$m4is_mhqzty3k54fv->m4is_g8j3ahbg0y001ryr();
}

if ( ! empty( $m4is_bsamg3fezf ) ) {

foreach( $m4is_3qwaf6xd03657aas as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {

$m4is_r2g10s87x43pdk8y5cq9hw801g = $m4is_bsamg3fezf;


$m4is_pj8bzm0kkp18wkd2jzde64ksz7kwefyw = '<form method="post">';
$m4is_pj8bzm0kkp18wkd2jzde64ksz7kwefyw .= '<input type="hidden" name="formtype" value="childdisconnect">';
 
$m4is_pj8bzm0kkp18wkd2jzde64ksz7kwefyw .= '<input type="hidden" name="contact_id" value="' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp . '">';
 
$m4is_pj8bzm0kkp18wkd2jzde64ksz7kwefyw .= '<input type="hidden" name="signature" value="' . md5( wp_salt( 'nonce' ) . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) . '">';
 
$m4is_pj8bzm0kkp18wkd2jzde64ksz7kwefyw .= '<input type="submit" value="Disconnect">'; 
$m4is_pj8bzm0kkp18wkd2jzde64ksz7kwefyw .= '</form>';


$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%contact.id%%', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_r2g10s87x43pdk8y5cq9hw801g );


$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '{{contact.id}}', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_r2g10s87x43pdk8y5cq9hw801g );


$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%disconnect.button%%', $m4is_pj8bzm0kkp18wkd2jzde64ksz7kwefyw, $m4is_r2g10s87x43pdk8y5cq9hw801g );


$m4is_gb01jqxh9ek2m .= $m4is_r2g10s87x43pdk8y5cq9hw801g;
}

$m4is_gb01jqxh9ek2m = do_shortcode( $m4is_gb01jqxh9ek2m );
}

else {

$m4is_gb01jqxh9ek2m = "<table style='width:100%;'>";

$m4is_gb01jqxh9ek2m .= "<tr>";

$m4is_gb01jqxh9ek2m .= '<td>First Name</td>';
$m4is_gb01jqxh9ek2m .= '<td>Last Name</td>';
$m4is_gb01jqxh9ek2m .= '<td>Email</td>';

$m4is_gb01jqxh9ek2m .= '<td>Mobile Phone</td>';
$m4is_gb01jqxh9ek2m .= '<td></td>'; 
$m4is_gb01jqxh9ek2m .= "</tr>";

if ( count( $m4is_3qwaf6xd03657aas ) ) {

foreach( $m4is_3qwaf6xd03657aas as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {

$m4is_cyg7rcfhzagmm5v = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );


$m4is_gb01jqxh9ek2m .= '<tr>';

$m4is_gb01jqxh9ek2m .= sprintf( '<td>%s</td>', $m4is_cyg7rcfhzagmm5v['FirstName'] ?? '' );
$m4is_gb01jqxh9ek2m .= sprintf( '<td>%s</td>',
 $m4is_cyg7rcfhzagmm5v['LastName'] ?? '' );
$m4is_gb01jqxh9ek2m .= sprintf( '<td><a href="mailto:%s">%s</a></td>', $m4is_cyg7rcfhzagmm5v['Email'],
 $m4is_cyg7rcfhzagmm5v['Email'] );
$m4is_gb01jqxh9ek2m .= sprintf( '<td>%s</td>', $m4is_cyg7rcfhzagmm5v['Phone3'] ?? '' );
$m4is_gb01jqxh9ek2m .= '<td>';


if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['can_disconnect'] ) {

$m4is_gb01jqxh9ek2m .= '<form method="post">';
$m4is_gb01jqxh9ek2m .= '<input type="hidden" name="formtype" value="childdisconnect">';
 
$m4is_gb01jqxh9ek2m .= '<input type="hidden" name="contact_id" value="' . $m4is_cyg7rcfhzagmm5v['Id'] . '">'; 
$m4is_gb01jqxh9ek2m .= '<input type="hidden" name="signature" value="' . md5( wp_salt( 'nonce' ) . $m4is_cyg7rcfhzagmm5v['Id'] ) . '">';
 
$m4is_gb01jqxh9ek2m .= '<input type="submit" value="Disconnect">'; 
$m4is_gb01jqxh9ek2m .= '</form>';
}

$m4is_gb01jqxh9ek2m .= '</td>';

$m4is_gb01jqxh9ek2m .= '</tr>';
}
}

$m4is_gb01jqxh9ek2m .= "</table>";
}

return $m4is_gb01jqxh9ek2m;
}

public static function m4is_md5q7gwpw3cnsj6tcc700yc01cj9hr9( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();


$m4is_n7x0afpz = [
'course_class' => 'umbrella_lms_dashboard_course', 
'course_style' => 'margin-bottom:6px;padding:20px 10px 20px 10px;background-color:#eee;',
 
'date_format' => 'F j, Y', 
'template' => $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, 
'user_class' => 'umbrella_lms_dashboard_user', 
'user_style' =>
 'margin-bottom:12px;padding:20px 10px 20px 10px;background-color:#eee;', 
];
if ( $m4is_wre4d0n1c4m7pcy7j305awh = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_4e5d7rvr89anekvg3v6( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_n7x0afpz ) ) {
return $m4is_wre4d0n1c4m7pcy7j305awh;
};

if ( ! self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( self::$m4is_fv9p5zzz6 ) ) {
return '';

}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_ey8h8t3xkngm1a3e2yg87sv6gm = []; 
$m4is_mzjfbdah8s6 = []; 
$m4is_khxvebq01f = self::$m4is_mhqzty3k54fv->m4is_p2n2ray33y(); 

if ( count( $m4is_khxvebq01f ) ) {

$m4is_g61yzqs7ecta0xztr70d7v = [
'fields' =>
 [
'ID', 
'display_name', 
'user_email' 
],
'include' => $m4is_khxvebq01f, 
'order' => 'ASC', 
'orderby' => 'display_name', 
];

$m4is_5kqbkry4bkq = new WP_User_Query( $m4is_g61yzqs7ecta0xztr70d7v );


$m4is_ey8h8t3xkngm1a3e2yg87sv6gm = $m4is_5kqbkry4bkq->results;
}

foreach( $m4is_ey8h8t3xkngm1a3e2yg87sv6gm as $m4is_j8j55t8dz79m7 =>
 $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) {

$m4is_95dnkbqxkxsryj4 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;

if ( function_exists( 'learndash_user_get_enrolled_courses' ) ) {

$m4is_f3h8rhfbxpa34gfeyv2hr4b2aq = learndash_user_get_enrolled_courses( $m4is_95dnkbqxkxsryj4 );


sort( $m4is_f3h8rhfbxpa34gfeyv2hr4b2aq );

$m4is_d728k3twcey071cb555xrg7pzx = get_user_meta( $m4is_95dnkbqxkxsryj4, '_sfwd-course_progress',
 true );

$m4is_ey8h8t3xkngm1a3e2yg87sv6gm[$m4is_j8j55t8dz79m7]->courses = [];

foreach( $m4is_f3h8rhfbxpa34gfeyv2hr4b2aq as $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew ) {

if ( get_post_status( $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew ) == 'publish' && get_post_type( $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew ) == 'sfwd-courses' ) {

$m4is_z4ts5pa39jf1yhjb4 = get_post( $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew );


$m4is_tx8g45kxszkqze2mehw = learndash_get_course_steps_count( $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew );

$m4is_bc22jcyc533jba8v35qj3zb7ceva44 = isset( $m4is_d728k3twcey071cb555xrg7pzx[$m4is_7an5k696qe2d7a3a0kb9mydmapnnzew]['last_id'] ) ? $m4is_d728k3twcey071cb555xrg7pzx[$m4is_7an5k696qe2d7a3a0kb9mydmapnnzew]['last_id'] : 0;


$m4is_8z43g3tnsks9288y3rkngmt0dffr = learndash_course_get_completed_steps( $m4is_95dnkbqxkxsryj4, $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew );


$m4is_k2xk6kdvkj5j1x = empty( $m4is_tx8g45kxszkqze2mehw ) ? 0 : (int) ( $m4is_8z43g3tnsks9288y3rkngmt0dffr / $m4is_tx8g45kxszkqze2mehw * 100 );


$m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta = function_exists( 'learndash_user_get_course_completed_date' ) ? (int) learndash_user_get_course_completed_date( $m4is_95dnkbqxkxsryj4,
 $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew ) : 0;

$m4is_wy6f9r7enp = empty( $m4is_bc22jcyc533jba8v35qj3zb7ceva44 ) ? 'None' : get_the_title( $m4is_bc22jcyc533jba8v35qj3zb7ceva44 );


$m4is_1ax4afangfjjakv11z5p = new stdclass;
$m4is_1ax4afangfjjakv11z5p->course_title = $m4is_z4ts5pa39jf1yhjb4->post_title;
$m4is_1ax4afangfjjakv11z5p->completed_timestamp = $m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta;

$m4is_1ax4afangfjjakv11z5p->course_steps = $m4is_tx8g45kxszkqze2mehw;
$m4is_1ax4afangfjjakv11z5p->completed_steps = $m4is_8z43g3tnsks9288y3rkngmt0dffr;

$m4is_1ax4afangfjjakv11z5p->step_title = $m4is_wy6f9r7enp;
$m4is_1ax4afangfjjakv11z5p->percentage = $m4is_k2xk6kdvkj5j1x;
$m4is_1ax4afangfjjakv11z5p->access_expired = (int) ld_course_access_expired( $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew,
 $m4is_95dnkbqxkxsryj4 );
$m4is_1ax4afangfjjakv11z5p->expiration_timestamp = (int) ld_course_access_expires_on( $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew,
 $m4is_95dnkbqxkxsryj4 );

$m4is_ey8h8t3xkngm1a3e2yg87sv6gm[$m4is_j8j55t8dz79m7]->courses[$m4is_7an5k696qe2d7a3a0kb9mydmapnnzew] = $m4is_1ax4afangfjjakv11z5p;

}
}
} 
} 

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_vbq3wn8s( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_ey8h8t3xkngm1a3e2yg87sv6gm );
}

public static function m4is_1n0ja24wbt49xm8q25( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();


$m4is_n7x0afpz = [
'button_class' => '',
'button_text' => 'Transfer Points',
'field' => '',
'max' => 0,
'min' => 1,
'redirect' =>
 '',
];
if ( $m4is_wre4d0n1c4m7pcy7j305awh = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_4e5d7rvr89anekvg3v6( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_n7x0afpz ) ) {
return $m4is_wre4d0n1c4m7pcy7j305awh;
};
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();


if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp == 0 ) {
return '';
}
if ( ! self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( self::$m4is_fv9p5zzz6 ) ) {
return '';

}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] ) );

if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] ) ) {
return '';

}

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_dwpnfs7m20z4fqd3s3y0da96j16dk = (float) m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'contact', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'], 0 );
$child_ids = self::$m4is_mhqzty3k54fv->m4is_p2n2ray33y(); 
$m4is_1ft5zc00mb8v41g44x1s = [];

$params = [
'field' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'],
'max_points' => $m4is_dwpnfs7m20z4fqd3s3y0da96j16dk,
'pcid' =>
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'redirect' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['redirect'],
];

if ( count( $child_ids ) ) {
$m4is_g61yzqs7ecta0xztr70d7v = [
'fields' =>
 [
'ID',
'display_name',
'user_email'
],
'include' => $child_ids,
'order' => 'ASC',
'orderby' => 'display_name',
];
$m4is_5kqbkry4bkq = new WP_User_Query( $m4is_g61yzqs7ecta0xztr70d7v );

$m4is_1ft5zc00mb8v41g44x1s = $m4is_5kqbkry4bkq->results;
}

$m4is_d60kn1d3yvprp62rs332 = new stdclass;
$m4is_d60kn1d3yvprp62rs332->params = base64_encode( serialize( $params ) );

$m4is_d60kn1d3yvprp62rs332->users = $m4is_1ft5zc00mb8v41g44x1s;
$m4is_d60kn1d3yvprp62rs332->points = $m4is_dwpnfs7m20z4fqd3s3y0da96j16dk;

$m4is_d60kn1d3yvprp62rs332->headers = wp_nonce_field( $m4is_d60kn1d3yvprp62rs332->params, 'umbrella_transfer_points_wpnonce', true,
 false );
$m4is_d60kn1d3yvprp62rs332->headers .= "<input type='hidden' name='signature' value='{$m4is_d60kn1d3yvprp62rs332->params}'>";

$m4is_d60kn1d3yvprp62rs332->headers .= "<input type='hidden' name='formtype' value='umbrella_points_transfer'>";
$m4is_d60kn1d3yvprp62rs332->redirect = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['redirect'];


return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_vbq3wn8s( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_d60kn1d3yvprp62rs332 );
}




public static function m4is_40sh0deb1c0htpnp2rgryhe( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();


$m4is_n7x0afpz = [
'button_text' => 'Download CSV',
'button_class' => '',
'filter_name' => '',
];
if ( $m4is_wre4d0n1c4m7pcy7j305awh = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_4e5d7rvr89anekvg3v6( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_n7x0afpz ) ) {
return $m4is_wre4d0n1c4m7pcy7j305awh;
};

if ( ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v() ) == 0) {
return '';

}

if ( ! self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( self::$m4is_fv9p5zzz6 ) ) {
return '';
}

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_gv7vjyv2c6g3nepw6 = [
'filter_name' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['filter_name'],

];

$m4is_gv7vjyv2c6g3nepw6 = base64_encode( serialize( $m4is_gv7vjyv2c6g3nepw6 ) );

$m4is_gb01jqxh9ek2m = '';

$m4is_gb01jqxh9ek2m .= '<form method=post>';


$m4is_gb01jqxh9ek2m .= wp_nonce_field( -1, 'umbrella_download_csv_wpnonce', true, false );

$m4is_gb01jqxh9ek2m .= "<input type=hidden name='params' value='{$m4is_gv7vjyv2c6g3nepw6}'>";

$m4is_gb01jqxh9ek2m .= "<input type=hidden name='formtype' value='umbrella_csv_download'>";

$m4is_gb01jqxh9ek2m .= "<input type=submit class='' name='' value='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text']}'>";


$m4is_gb01jqxh9ek2m .= '</form>';

return $m4is_gb01jqxh9ek2m;
}




public static function m4is_n2pnxkg3fz9( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
static $m4is_7g8ybeqga = false;
$m4is_n7x0afpz = [
'team_id' =>
 '',
];
if ( $m4is_wre4d0n1c4m7pcy7j305awh = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_4e5d7rvr89anekvg3v6( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_n7x0afpz ) ) {
return $m4is_wre4d0n1c4m7pcy7j305awh;
};
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_erycayg8y6z0xw4 = array_filter( array_map( 'trim',
 explode( ',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['team_id'] ) ) );
$m4is_k1eftjy4k5430qzqhjdtxyn7j = get_current_user_id();
if ( ! self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( self::$m4is_fv9p5zzz6 ) ) {
return '';

}
$m4is_3zxvtq54zz = m4is_wv1rppa066tww11snkg8g06rv922xj::m4is_97ggpd2xpwwhhsr54w8722085zq( $m4is_k1eftjy4k5430qzqhjdtxyn7j );
if ( ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['team_id'] ) ) {
$m4is_3zxvtq54zz = array_intersect( $m4is_3zxvtq54zz,
 $m4is_erycayg8y6z0xw4 );
}
if ( empty( $m4is_3zxvtq54zz ) ) {
return '<p>No matching teams.</p>';
}
$m4is_1yzmh3jsg57 = self::$m4is_mhqzty3k54fv->m4is_dr8ff7hwsd6h5y( $m4is_k1eftjy4k5430qzqhjdtxyn7j );

foreach( $m4is_3zxvtq54zz as $m4is_erycayg8y6z0xw4 ) {
$m4is_z1k7nkdn = m4is_wv1rppa066tww11snkg8g06rv922xj::m4is_2v2jnc5z0e7s1gr7p3x9x( $m4is_erycayg8y6z0xw4 );

$m4is_ma90yykszqq4nbpvmwqcdw5nep5 = m4is_wv1rppa066tww11snkg8g06rv922xj::m4is_grgyrg30y1mhrqrk5h570gz2pc2xyw8( $m4is_erycayg8y6z0xw4 );

$m4is_ddcxn3s885wta5k3b9fat5wnfvspp = m4is_wv1rppa066tww11snkg8g06rv922xj::m4is_jwdqr8yhqfhfxe994wvwkegp3( $m4is_erycayg8y6z0xw4 );

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();
$m4is_dz8pgf53e = get_the_title( $m4is_erycayg8y6z0xw4 );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = sha1( wp_salt( 'nonce' ) . $m4is_erycayg8y6z0xw4 );

echo <<<HTMLBLOCK

				<form method="post">
					<input type="hidden" name="formtype" value="memberium/group-accounts/team/member/update">
					<input type="hidden" name="team_id" value="{$m4is_erycayg8y6z0xw4}">
					<input type="hidden" name="user_id" value="{$m4is_wk4dh1rnd3wmwvsggq51nhn87}">
					<input type="hidden" name="signature" value="{$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn}">
					<div>
						<p>
							Team {$m4is_dz8pgf53e} ({$m4is_ddcxn3s885wta5k3b9fat5wnfvspp}/{$m4is_ma90yykszqq4nbpvmwqcdw5nep5})
						</p>
							<select name="child_uids[]" class="js-example-basic-single" multiple="multiple" style="width:90%;">
			HTMLBLOCK;

if ( ! empty( $m4is_1yzmh3jsg57 ) ) {
foreach( $m4is_1yzmh3jsg57 as $m4is_yan573ys3brnv39zsernk3xs ) {
$m4is_fe42r2djxgf1h7pt = in_array( $m4is_yan573ys3brnv39zsernk3xs,
 $m4is_z1k7nkdn ) ? ' selected="selected" ' : '';
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_userdata( $m4is_yan573ys3brnv39zsernk3xs );

$m4is_hce1y1a4qd65zhnwsj = sprintf( '%s %s (%s)', get_user_meta( $m4is_yan573ys3brnv39zsernk3xs, 'first_name', true ), get_user_meta( $m4is_yan573ys3brnv39zsernk3xs,
 'last_name', true ), $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email );
printf( '<option value="%d" %s > %s </option>', $m4is_yan573ys3brnv39zsernk3xs,
 $m4is_fe42r2djxgf1h7pt, $m4is_hce1y1a4qd65zhnwsj );
}
}
echo <<<HTMLBLOCK


							</select>
						<p>
						<input type="submit" style="margin-top:12px;" value="Save">
					</div>
				</form>
			HTMLBLOCK;

}
echo <<<HTMLBLOCK

			<script>
				jQuery(document).ready(function() {
					jQuery('.js-example-basic-single').select2();
				});
			</script>


		HTMLBLOCK;

if ( ! $m4is_7g8ybeqga ) {
echo <<<HTMLBLOCK

				<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
				<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
			HTMLBLOCK;

}
return '';
}
private static function m4is_fkgf54n4emv() {
}
}
