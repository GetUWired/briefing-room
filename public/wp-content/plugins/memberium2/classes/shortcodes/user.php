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

final class m4is_8wgwe2paj3vpec {
private static bool $m4is_zz74kb50;
private static int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
private static object $m4is_132xe588j;

private static object $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;
private static string $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;

static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_zz74kb50 = ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y();

self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();
self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'memberium';

}

static function m4is_q3tpgqwr0axegwjn7jv2mh( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'fields' => '',
'htmlattr' => '',
'separator' => ' ',
'txtfmt' =>
 '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_51addd34g1m0tcc2qg059mn = array_filter( explode( ',', trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] ) ) );

$m4is_gb01jqxh9ek2m = '';
if ( empty( $m4is_51addd34g1m0tcc2qg059mn ) ) {
return '';
}
foreach ( $m4is_51addd34g1m0tcc2qg059mn as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower( trim( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) );

$m4is_gb01jqxh9ek2m .= htmlspecialchars( self::$m4is_132xe588j->m4is_1gdsc4zrspe39f5q04xwnetj6466( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) );

if ( count( $m4is_51addd34g1m0tcc2qg059mn ) > 1 ) {
$m4is_gb01jqxh9ek2m .= $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator'];
}
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );
}

static function m4is_03jqeraqx3k3cdebzxrh50mps7e( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'includepassword' => false,
'name' => 'membsession',
'omit' => '', 
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_bk15qbe57t16abbc4ssedpqmf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['includepassword'],
 false );
$m4is_gqsc4mq3nmh1sr5dknx6119v7 = array_filter( explode( ',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['omit'] ) );
$session = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( self::$m4is_132xe588j->m4is_vd3qpw0vkdm() );

if ( ! $m4is_bk15qbe57t16abbc4ssedpqmf ) {
$m4is_wte2qk9hdk1zj7 = strtolower( self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' ) );
unset( $session['keap']['contact'][$m4is_wte2qk9hdk1zj7] );
}
foreach ( $m4is_gqsc4mq3nmh1sr5dknx6119v7 as $m4is_m25d6xy8dq8eke) {
unset(
$session['memb_user'][$m4is_m25d6xy8dq8eke],

$session['keap']['contact'][$m4is_m25d6xy8dq8eke],
$session['keap']['affiliate'][$m4is_m25d6xy8dq8eke]
);
}
$m4is_gb01jqxh9ek2m = '<script type="text/javascript">' . "\n";

$m4is_gb01jqxh9ek2m .= 'var ' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name'] . ' = ' . json_encode( $session, JSON_PRETTY_PRINT) . ";\n";

$m4is_gb01jqxh9ek2m .= '</script>' . "\n";
return $m4is_gb01jqxh9ek2m;
}

static function m4is_j96jpbrgq6mr9spgg80( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
static $m4is_7w9sx3x9v81jpa1n8mvrpcffnq = '';
static $m4is_pae00hv11 = 0;
$m4is_pae00hv11++;
$m4is_n7x0afpz = [
'actionset_id' =>
 0,
'buttontext' => 'Change Email',
'email1label' => 'Email Address:',
'email2label' => 'Repeat Email Address:',
'failure_url' => '',

'form_name' => 'change_email_' . $m4is_pae00hv11,
'goal' => '',
'success_url' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_zxwt8y3szyy1aenkh = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'contact', 'email', '' );
if ( empty( $m4is_zxwt8y3szyy1aenkh ) || empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) || empty( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return '';

}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium' );
$m4is_8g6s0cfbcx2pn0c469mk1wqff5 = 'memb_email_change_' . $m4is_pae00hv11;

$m4is_1m1z0pzxt74xnn7w9j5mgmf7 = '';
$m4is_r53562w9befcb2kh7rm4p7n5 = base64_encode( serialize( [
'actionset_id' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['actionset_id'],

'goal' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['goal'],
'failure_url' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_url'],
'success_url' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_url'],
]) );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf( $m4is_r53562w9befcb2kh7rm4p7n5 );

$m4is_1m1z0pzxt74xnn7w9j5mgmf7 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_ggfhwhr9nd6zvxtntm5x('memb_flash', 'email_change_message');

$m4is_d60kn1d3yvprp62rs332 = new stdClass;
$m4is_d60kn1d3yvprp62rs332->form_name = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_name'];

$m4is_d60kn1d3yvprp62rs332->nonce = wp_nonce_field( 'memb_email_change_' . $m4is_pae00hv11, '_wpnonce', true, false );
$m4is_d60kn1d3yvprp62rs332->signature = self::$m4is_132xe588j->m4is_h7gapv9fzmbf( $m4is_r53562w9befcb2kh7rm4p7n5 );

$m4is_d60kn1d3yvprp62rs332->parameters = $m4is_r53562w9befcb2kh7rm4p7n5;
$m4is_d60kn1d3yvprp62rs332->form_id = $m4is_pae00hv11;
$m4is_d60kn1d3yvprp62rs332->email = $m4is_zxwt8y3szyy1aenkh;

$m4is_d60kn1d3yvprp62rs332->email1_label = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['email1label'];
$m4is_d60kn1d3yvprp62rs332->email2_label = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['email2label'];

$m4is_d60kn1d3yvprp62rs332->button_text = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['buttontext'];
$m4is_d60kn1d3yvprp62rs332->message = $m4is_1m1z0pzxt74xnn7w9j5mgmf7;

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_vbq3wn8s( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_d60kn1d3yvprp62rs332 );
}

static function m4is_3a0jnedwz1h14ybzgnm3v9twvc2es( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
static $m4is_pae00hv11 = 0;
$m4is_pae00hv11++;
$m4is_wte2qk9hdk1zj7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'password_field');
$m4is_da1mymdvdctzrpbbmae9mv9stvpdyg = ($m4is_wte2qk9hdk1zj7 == 'Password') ? 20 : 256;
$m4is_n7x0afpz = [
'actionset_id' =>
 0,
'buttontext' => 'Change Password',
'confirm_template_id' => 0,
'goal' => '',
'maxlength' => $m4is_da1mymdvdctzrpbbmae9mv9stvpdyg,

'password1label' => 'New Password:',
'password2label' => 'Repeat Password:',
'redirect_url' => '', 
'success_message' => _x('Password Changed Successfully.',
 'memb_change_password', 'memberium'),
'success_url' => '',
'tagids' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() || is_archive() || is_feed() || is_search() ) {
return '';

}
if (! self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['maxlength'] = abs( intval( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['maxlength'] ) );

$m4is_r53562w9befcb2kh7rm4p7n5 = base64_encode(serialize([
'confirm_template_id' => (int) trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['confirm_template_id']),

'goal' => trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['goal']),
'actionset_id' => trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['actionset_id']),

'redirect_url' => trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['redirect_url']),
'tagids' => trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagids']),

'successurl' => trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_url']),
'contact_id' => self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,

] ) );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_r53562w9befcb2kh7rm4p7n5);
$m4is_7znqjnkvvbzyjs = 'memb_password_change-' . $m4is_pae00hv11;

$m4is_g8kjnx0f2 = 'password_change_' . $m4is_pae00hv11;
$m4is_qc36n7jdf = '';
$m4is_nkz26acytmdk5a8r93d4y4qkmct4gn = remove_query_arg(['passwordchange'],
 $_SERVER['REQUEST_URI']);
$m4is_2c32h6tka34z0 = self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_24j1128ak8ghjk();
$m4is_d60kn1d3yvprp62rs332 = new stdClass;

$m4is_d60kn1d3yvprp62rs332->form_name = $m4is_7znqjnkvvbzyjs;
$m4is_d60kn1d3yvprp62rs332->form_action = $m4is_nkz26acytmdk5a8r93d4y4qkmct4gn;

$m4is_d60kn1d3yvprp62rs332->form_id = $m4is_pae00hv11;
$m4is_d60kn1d3yvprp62rs332->nonce = wp_nonce_field($m4is_g8kjnx0f2. $m4is_r53562w9befcb2kh7rm4p7n5,
 '_wpnonce', true, false);;
$m4is_d60kn1d3yvprp62rs332->parameters = $m4is_r53562w9befcb2kh7rm4p7n5;
$m4is_d60kn1d3yvprp62rs332->signature = $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn;

$m4is_d60kn1d3yvprp62rs332->max_length = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['maxlength'];
$m4is_d60kn1d3yvprp62rs332->min_length = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'min_password_length');
$m4is_d60kn1d3yvprp62rs332->password1_label = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['password1label'];
$m4is_d60kn1d3yvprp62rs332->password2_label = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['password2label'];

$m4is_d60kn1d3yvprp62rs332->button_text = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['buttontext'];
$m4is_d60kn1d3yvprp62rs332->messages = '';

if (! empty($m4is_2c32h6tka34z0) ) {
$m4is_d60kn1d3yvprp62rs332->messages = $m4is_2c32h6tka34z0;
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z('');

}
else {
if (! empty($_GET['passwordchange']) && $_GET['passwordchange'] == 'success' ) {
$m4is_d60kn1d3yvprp62rs332->messages = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_message'];

unset($_GET['passwordchange']);
}
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_vbq3wn8s($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_d60kn1d3yvprp62rs332);
}

static function m4is_m25tv6k3f0ahf6x9( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
static $m4is_pae00hv11 = 1;
$m4is_n7x0afpz = [
'buttontext' => 'Send Password',
'emailtext' => 'Email Address',
'successurl' => '',
 
'failureurl' => '', 
'template_id' => 0,
'tag_id' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if (! empty( self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'local_auth_only') ) ) {
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return '<p style="color:red;font-weight:bold;">Send Password Form disabled by secure password storage.</p>';

}
return '';
}
if ( is_user_logged_in() ){
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return '<p style="color:red;font-weight:bold;">Send Password Form not visible to logged in users.</p>';

}
return '';
}
if ( is_feed() ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_7znqjnkvvbzyjs = 'memb_password_send-' . $m4is_pae00hv11;
$m4is_qc36n7jdf = '';

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['template_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['template_id'];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id'] = abs( intval( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id'] ) );

$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['template_id'] . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id']);

if (! empty( self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_24j1128ak8ghjk() ) ) {
$m4is_qc36n7jdf .= '<div class="password_send_message">' . self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_24j1128ak8ghjk() . '</div>';

}
$m4is_qc36n7jdf .= "<form name=\"{$m4is_7znqjnkvvbzyjs}\" id=\"{$m4is_7znqjnkvvbzyjs}\" method=\"post\">";
$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"form_id\" value=\"{$m4is_pae00hv11}\">";

$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"template_id\" value=\"{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['template_id']}\">";

$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"signature\" value=\"{$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn}\">";
$m4is_qc36n7jdf .= '<input type="hidden" name="successurl" value="' . base64_encode($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['successurl']) . '">';

$m4is_qc36n7jdf .= '<input type="hidden" name="failureurl" value="' . base64_encode($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failureurl']) . '">';

$m4is_qc36n7jdf .= '<input type="hidden" name="tag_id" value="' . base64_encode($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id']) . '">';

$m4is_qc36n7jdf .= '<input type="hidden" name="memb_form_type" value="memb_send_password">';
$m4is_qc36n7jdf .= '<div id="' . $m4is_7znqjnkvvbzyjs . '-block1">';

$m4is_qc36n7jdf .= '<label id="' . $m4is_7znqjnkvvbzyjs . '-email-label">' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['emailtext'] . ':</label>';

$m4is_qc36n7jdf .= '<input id="' . $m4is_7znqjnkvvbzyjs . '-email-input" name="email" type="email" required value="">';
$m4is_qc36n7jdf .= '</div>';

$m4is_qc36n7jdf .= '<div id="' . $m4is_7znqjnkvvbzyjs . '-block2">';
$m4is_qc36n7jdf .= '<input type="submit" value="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['buttontext'] . '" name="submit">';

$m4is_qc36n7jdf .= '</div>';
$m4is_qc36n7jdf .= "</form>";
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z('');

$m4is_pae00hv11++;
return $m4is_qc36n7jdf;
}

static function m4is_pasf3qbvd88( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
static $m4is_gjscjmy5v39a7k4tbr7kbbywd3696x = 1;

$m4is_n7x0afpz = [
'date_fields' => '',
'failure_url' => '',
'form_id' => 'registration_form_' . $m4is_gjscjmy5v39a7k4tbr7kbbywd3696x,

'goal' => '',
'pass_fields' => true,
'pass_password' => false,
'remove_accents' => 'y',
'required_fields' => '',
'success_url' => '',

'tagids' => '',

];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if (empty( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();








$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_kbx4rbb3g1fcr9ntqcfs05nrw93 = base64_encode(serialize([
'contact_id' =>
 self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'date_fields' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_fields'],
'failure_url' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_url'],
'form_id' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'],
'goal' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['goal'],

'pass_fields' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['pass_fields'],
'pass_password' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['pass_password'],

'remove_accents' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['remove_accents'],
'required_fields' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['required_fields'],

'success_url' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_url'],
'tagids' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagids'],

]) );

$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_kbx4rbb3g1fcr9ntqcfs05nrw93);
$m4is_qc36n7jdf = '';

$m4is_s6156qxet7jrhqxjj70v = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_5pj24bj9pdmwnkb4s91kvj('error_message');
foreach ($m4is_s6156qxet7jrhqxjj70v as $m4is_7w9sx3x9v81jpa1n8mvrpcffnq) {
$m4is_qc36n7jdf .= '<p class="memb_registration_error"> ' . $m4is_7w9sx3x9v81jpa1n8mvrpcffnq . '</p>';

}
$m4is_qc36n7jdf .= '<form method="post" action="" id="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'] . '" name="">';
$m4is_qc36n7jdf .= wp_nonce_field($m4is_kbx4rbb3g1fcr9ntqcfs05nrw93,
 '_wpnonce', true, false);
$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"memb_form_type\" value=\"memb_update_contact_form\">";

$m4is_qc36n7jdf .= '<input type="hidden" name="params" value="' . $m4is_kbx4rbb3g1fcr9ntqcfs05nrw93 . '">';
$m4is_qc36n7jdf .= '<input type="hidden" name="signature" value="' . $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn . '">';

$m4is_qc36n7jdf .= do_shortcode($m4is_bsamg3fezf);
$m4is_qc36n7jdf .= '</form>';
$m4is_gjscjmy5v39a7k4tbr7kbbywd3696x++;
return $m4is_qc36n7jdf;

}

static function m4is_qfpgr6ce1bv78zkv0g( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'cache' => HOUR_IN_SECONDS,

'capture' => '',
'mode' => 'text',
'htmlattr' => '',
'txtfmt' => '',
];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_gb01jqxh9ek2m = '';
$m4is_zxwt8y3szyy1aenkh = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'memb_user', 'email', '' );
if ( ! empty( $m4is_zxwt8y3szyy1aenkh ) ) {
$m4is_yrsthh0s4s62mfk9 = self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_7fz7f6ggkn8ay2jys1188( $m4is_zxwt8y3szyy1aenkh );

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['mode'] == 'text') {
switch ($m4is_yrsthh0s4s62mfk9) {
case 1:
$m4is_gb01jqxh9ek2m = _x('Single Opted In',
 'memb_optin_status', 'memberium');
break;
case 2:
$m4is_gb01jqxh9ek2m = _x('Double Opted In', 'memb_optin_status', 'memberium');
break;

default:
$m4is_gb01jqxh9ek2m = _x('Not Opted In', 'memb_optin_status', 'memberium');
break;
}
}
else {
$m4is_gb01jqxh9ek2m = $m4is_yrsthh0s4s62mfk9;

}
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}
static function m4is_y3q9fe7ez32s8sjf8( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'capture' => '',
'contact_id' => self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,

'date_format' => '',
'default' => '',
'fields' => '',
'htmlattr' => '',
'owner_id' => 0,
'separator' => ' ',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] = trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields']);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] = array_filter(explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields']) );
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields']) ) {
return '';

}

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['owner_id'] > 0) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['owner_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['owner_id'];

}
else {
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] <> self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_f5pq560taxn4v67xk7v982nwn0 = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'],
 true);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['owner_id'] = (int) $m4is_f5pq560taxn4v67xk7v982nwn0['ownerid'];
unset($m4is_f5pq560taxn4v67xk7v982nwn0);

}
else {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['owner_id'] = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'ownerid', 0 );
}
}
$m4is_04ya4eddwe9sdc = m4is_9kyahnxyzzazbe0qnby5s1qsx::m4is_m9ptbksxgn1dpy4ep0mnbgy1enkw5( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['owner_id'],
 true );
$m4is_51addd34g1m0tcc2qg059mn = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'];
$m4is_sb1cff4xx6ax7c = count($m4is_51addd34g1m0tcc2qg059mn);

$m4is_dpjeyyj7c259yxqtcmvm6 = 0;
$m4is_kr9qf0fw8n555erpba0ydc0mdgxgy = 0;
$m4is_gb01jqxh9ek2m = '';
foreach($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) {
$m4is_kr9qf0fw8n555erpba0ydc0mdgxgy++;

$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower(trim($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) );
if (isset($m4is_04ya4eddwe9sdc[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ) {
$m4is_map8tdmsvarsn03f1fhfytx61b4a = strtotime($m4is_04ya4eddwe9sdc[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]);

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'] == '' || $m4is_map8tdmsvarsn03f1fhfytx61b4a == 0) {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = $m4is_04ya4eddwe9sdc[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6];

}
else {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = date($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'], strtotime($m4is_04ya4eddwe9sdc[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) );

}
}
else {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'];
}
$m4is_gb01jqxh9ek2m .= $m4is_xgtgw8c7w25hk72ec5z99vqy7a;

if ($m4is_kr9qf0fw8n555erpba0ydc0mdgxgy < $m4is_sb1cff4xx6ax7c) {
$m4is_gb01jqxh9ek2m .= $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator'];

}
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr']);
}
static function m4is_4fykmhs05bwhsjjk5wr4mhbt84( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if ( is_feed() ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'actionset_id' => '',

'contact_id' => self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'date_format' => '',
'fields' => '',
'goal' => '',
'tag_id' => '',
'txtfmt' =>
 '',
'value' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] = array_filter( explode( ',',
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] ) );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_r85ch2nyjadv4rt71w7ns( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'] );
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] ) ) {
return '';
}
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] ) ) {
return '';

}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'] > '' ) {
if ( strcasecmp( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'] ,
 'infusionsoft' ) == 0 ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'] = 'Ymd\Th:i:s';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'] = date( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'],
 strtotime( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'] ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'] = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'] );

$m4is_n5bx9prx9xqpwkgs7em6kcpja1rpg72 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact' );
$m4is_8xrv2ywj6 = [
'CreatedBy',

'DateCreated',
'Groups',
'Id',
'LastUpdated',
'LastUpdatedBy',
'Validated',
];

if ( is_array( $m4is_n5bx9prx9xqpwkgs7em6kcpja1rpg72 ) ) {
foreach ( $m4is_n5bx9prx9xqpwkgs7em6kcpja1rpg72 as $valid_field ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] = str_ireplace( $valid_field,
 $valid_field, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] );
}
}
foreach ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] as $m4is_j8j55t8dz79m7 =>
 $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
if (! in_array($m4is_bbsta3mvjhhvh1x97vfpm9e, $m4is_n5bx9prx9xqpwkgs7em6kcpja1rpg72) || in_array($m4is_bbsta3mvjhhvh1x97vfpm9e,
 $m4is_8xrv2ywj6) ) {
unset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'][$m4is_j8j55t8dz79m7]);
}
else {
self::$m4is_132xe588j->m4is_8sqkcc4ebfed07z6qzkv9edmnxzjh($m4is_bbsta3mvjhhvh1x97vfpm9e,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id']);
}
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] == self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( self::$m4is_132xe588j->m4is_vd3qpw0vkdm() );

}
return '';
}
static function m4is_z0a5tw5nz( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
static $m4is_gjscjmy5v39a7k4tbr7kbbywd3696x = 1;
if ( is_feed() ) {
return '';
}
$m4is_n7x0afpz = [
'action_id' => '',
'autologin' =>
 false,
'date_fields' => '',
'encoded' => true,
'failure_url' => '',
'form_id' => '',
'goal' => '',
'inf_fields' => false,
'membership_tags' =>
 '', 
'pass_fields' => false,
'pass_password' => false,
'recaptcha' => false,
'remove_accents' => 'n',
'required_fields' => 'FirstName,Email',

'secure' => true,
'success_url' => '',
'tagids' => '',
'unfriendly' => false,
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
if ( is_user_logged_in() ) {
if ( current_user_can( 'manage_options' ) ) {
if ( empty( $m4is_bsamg3fezf ) ) {
return '<p style="color:red;"><strong>ERROR:</strong> No Form Specified</pre>';

}
if ( stripos( $m4is_bsamg3fezf, '<input' ) === false || stripos( $m4is_bsamg3fezf, 'FirstName' ) === false || stripos( $m4is_bsamg3fezf,
 'Email' ) === false ) {
return '<p style="color:red;"><strong>ERROR:</strong>  Your form must include both the <strong>FirstName</strong>, and <strong>Email</strong> input fields in order to register a new contact.</p>';

}
return '<p style="color:red;"><strong>NOTE:</strong>  The registration form is only displayed when not logged in.</p>';
}
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();




$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autologin'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autologin'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['encoded'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['encoded'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['inf_fields'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['inf_fields'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['pass_fields'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['pass_fields'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['pass_password'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['pass_password'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['secure'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['secure'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['unfriendly'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['unfriendly'],
 false );

if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha'] ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha_v2_secret_key'] = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'recaptcha_v2_secret_key', '' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha_v2_site_key'] = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'recaptcha_v2_site_key', '' );
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha_v2_secret_key'] ) || empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha_v2_site_key'] ) ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha'] = false;

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha_v2_secret_key'] = '';
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha_v2_site_key'] = '';

}
}
if ( empty( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'] ) ) ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'] = 'registration_form_' . $m4is_gjscjmy5v39a7k4tbr7kbbywd3696x;

}
$m4is_kbx4rbb3g1fcr9ntqcfs05nrw93 = base64_encode( serialize( [
'action_id' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['action_id'],

'autologin' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autologin'],
'date_fields' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_fields'],

'failure_url' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_url'],
'form_id' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'],

'goal' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['goal'],
'membership_tags' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['membership_tags'],

'pass_fields' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['pass_fields'],
'pass_password' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['pass_password'],

'recaptcha' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha'],
'remove_accents' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['remove_accents'],

'required_fields' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['required_fields'],
'success_url' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_url'],

'tagids' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagids'],
'unfriendly' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['unfriendly'],
] ) );

$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf( $m4is_kbx4rbb3g1fcr9ntqcfs05nrw93 );
$m4is_qc36n7jdf = '';

$m4is_s6156qxet7jrhqxjj70v = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_bnseg5p8e7bedy9220a9kpw6nshyw9( $_GET['memb_msg'] ?? '', 'error_message' );

if ( ! empty( $m4is_s6156qxet7jrhqxjj70v ) ) {
foreach ( $m4is_s6156qxet7jrhqxjj70v as $m4is_7w9sx3x9v81jpa1n8mvrpcffnq ) {
$m4is_qc36n7jdf .= '<p class="memb_registration_error"> ' . $m4is_7w9sx3x9v81jpa1n8mvrpcffnq . '</p>';

}
}
$m4is_d60kn1d3yvprp62rs332 = new stdClass;
$m4is_d60kn1d3yvprp62rs332->recaptcha_html = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha'] ? '<div class="g-recaptcha" data-sitekey="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha_v2_site_key'] . '"></div>' : '';

if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['recaptcha'] ) {
wp_enqueue_script( 'google-recaptcha', 'https://www.google.com/recaptcha/api.js',
 [], null, true );
}
$m4is_qc36n7jdf .= '<form method="post" action="" id="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'] . '" name="">' . "\n";

$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"memb_form_type\" value=\"memb_registration\">" . "\n";
$m4is_qc36n7jdf .= wp_nonce_field( $m4is_kbx4rbb3g1fcr9ntqcfs05nrw93,
 '_wpnonce', true, false ) . "\n";
$m4is_qc36n7jdf .= '<input type="hidden" name="params" value="' . $m4is_kbx4rbb3g1fcr9ntqcfs05nrw93 . '">' . "\n";

$m4is_qc36n7jdf .= '<input type="hidden" name="signature" value="' . $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn . '">' . "\n";
$m4is_qc36n7jdf .= $m4is_d60kn1d3yvprp62rs332->recaptcha_html . "\n";

$m4is_qc36n7jdf .= do_shortcode( $m4is_bsamg3fezf ) . "\n";
$m4is_qc36n7jdf .= '</form>' . "\n\n";
$m4is_qc36n7jdf = do_shortcode( $m4is_qc36n7jdf );

if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['encoded'] || $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['secure'] ) {
$m4is_qc36n7jdf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_q8dbdhqpz373mgzjcny29pte6mth7jz( $m4is_qc36n7jdf );

}
$m4is_gjscjmy5v39a7k4tbr7kbbywd3696x++;
return $m4is_qc36n7jdf;
}
static function m4is_mg0pr5bbyz77($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = NULL, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'default' => '',
'fieldname' => '',
'htmlattr' => '',
'txtfmt' =>
 '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fieldname']) ) {
return '';
}
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = wp_get_current_user();

$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fieldname'];
$m4is_gb01jqxh9ek2m = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6;

$m4is_gb01jqxh9ek2m = empty($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'] : $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6;

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}
static function m4is_5866h555cdyjsyzkfak8zps7tawc2($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = NULL, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
static $m4is_pae00hv11 = 0;

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'send_button_text' => 'Reset Password',
'template_id' =>
 0,
'update_button_text' => 'Update Password',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}


if (is_user_logged_in() ) {
return '';
}
if (is_feed() ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['template_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['template_id'];

$m4is_pae00hv11 = $m4is_pae00hv11 + 1;
$m4is_qc36n7jdf = '';
if (isset($_GET['action']) && isset($_GET['key']) && isset($_GET['login']) ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = check_password_reset_key($_GET['key'],
 $_GET['login']);
if ('WP_User' == get_class($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) ) {
$m4is_qc36n7jdf .= '<form method="post" action="./">';

$m4is_qc36n7jdf .= wp_nonce_field('memb_reset_password_' . $m4is_pae00hv11, '_wpnonce', true, false);
$m4is_qc36n7jdf .= '<input type="hidden" name="form_id" value="' . $m4is_pae00hv11 . '">';

$m4is_qc36n7jdf .= '<input type="hidden" name="memb_form_type" value="memb_reset_password">';
$m4is_qc36n7jdf .= '<input type="hidden" name="key" value="' . $_GET['key'] . '">';

$m4is_qc36n7jdf .= '<input type="hidden" name="login" value="' . $_GET['login'] . '">';
$m4is_qc36n7jdf .= '<label>Enter Your New Password:</label><input type="password" name="password1" placeholder="New Password" size="30"><br />';

$m4is_qc36n7jdf .= '<label>Confirm Your New Password:</label><input type="password" name="password2" placeholder="New Password" size="30"><br />';

$m4is_qc36n7jdf .= '<input type="submit" value="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['update_button_text'] . '">';
$m4is_qc36n7jdf .= '</form>';

}
else {
$m4is_qc36n7jdf .= '<p>Invalid / Expired Link</p>';
}
}
else {
$m4is_gv7vjyv2c6g3nepw6 = base64_encode(serialize(['template_id' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['template_id'] ]) );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_gv7vjyv2c6g3nepw6);

$m4is_qc36n7jdf .= '<form method="post">';
$m4is_qc36n7jdf .= wp_nonce_field('memb_reset_password_' . $m4is_pae00hv11, '_wpnonce',
 true, false);
$m4is_qc36n7jdf .= '<input type="hidden" name="form_id" value="' . $m4is_pae00hv11 . '">';
$m4is_qc36n7jdf .= '<input type="hidden" name="memb_form_type" value="memb_reset_password">';

$m4is_qc36n7jdf .= '<input type="hidden" name="params" value="' . $m4is_gv7vjyv2c6g3nepw6 . '">';
$m4is_qc36n7jdf .= '<input type="hidden" name="signature" value="' . $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn . '">';

$m4is_qc36n7jdf .= '<label>Your Login Email:</label><input type="email" name="email" placeholder="Your Email Address" size="30"><br />';

$m4is_qc36n7jdf .= '<input type="submit" value="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['send_button_text'] . '">';
$m4is_qc36n7jdf .= '</form>';

}
return $m4is_qc36n7jdf;
}
static function m4is_dk07hdev4a2mykk7d4psv6kzcdd0f1($m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = null,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_n7x0afpz = [
'alt' => '',
'capture' => '',
'class' => 'memberium-gravatar',
'default' => '',
'email' => m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'email', '' ),
'rating' => 'g',
'size' => 32,
'title' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'] = ( (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'] < 1) ? 32 : (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'];

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'] > 2048) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'] = 2048;
}
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['email']) && is_user_logged_in() ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = wp_get_current_user();

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['email'] = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email;
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['email'] = strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['email']) );

$m4is_ae7x3g2a5xh89stm8828w9zfwh1w1 = '//www.gravatar.com/avatar/' . md5($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['email']) . '.jpg?s=' . (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'];

$m4is_ae7x3g2a5xh89stm8828w9zfwh1w1 .= ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'] > '') ? '&d=' . urlencode($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default']) : '';

$m4is_ae7x3g2a5xh89stm8828w9zfwh1w1 .= ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['rating'] > '') ? '&r=' . urlencode($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['rating']) : '';

$m4is_bsamg3fezf = '<img src="' . $m4is_ae7x3g2a5xh89stm8828w9zfwh1w1 . '" border="0" alt="' . esc_attr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['alt']) . '" title="' . esc_attr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['title']). '" height="' . esc_attr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size']) . '" width="' . esc_attr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size']) . '" class="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['class'] . '"/>';

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_bsamg3fezf, '', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'],
 '', '', '');
}
static function m4is_0w58sy4yfgpm620jc0gyt6qtz1($m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = NULL, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'htmlattr' =>
 '',
'name' => false,
'op' => 'show',
'txtfmt' => '',
'val' => 0,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name'] = strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name']) );
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name']) ) {
return '';

}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
if (! $m4is_wk4dh1rnd3wmwvsggq51nhn87) {
return '';

}

$m4is_gb01jqxh9ek2m = '';
$m4is_kr9qf0fw8n555erpba0ydc0mdgxgy = (int) self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_6w88fagm04r76erxncm12aww8gh($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name']);

switch (strtolower($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['op']) ) {
case 'decr':
if ( (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['val'] == 0) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['val'] = 1;

}
$m4is_kr9qf0fw8n555erpba0ydc0mdgxgy = $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy - (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['val'];
break;

case 'incr':
if ( (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['val'] == 0) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['val'] = 1;
}
$m4is_kr9qf0fw8n555erpba0ydc0mdgxgy = $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy + (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['val'];

break;
case 'set':
$m4is_kr9qf0fw8n555erpba0ydc0mdgxgy = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['val'];
break;
case 'show':
case 'get':
$m4is_gb01jqxh9ek2m = $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy;

break;
}
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_k7s0azvt1qkdy91q9v23xaar65mz($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name'],
 $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy);
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}
static function m4is_cc8ehpgg8kydp4c1ss1z2vzf4bvg952($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_n7x0afpz = [
'after' => '',
'alt' => 'No membership levels found.',
'before' => '',
'capture' => '',
'format' => '<li>%%membershipname%% (%%tagid%%)</li>',

'htmlattr' => '',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( self::$m4is_132xe588j->m4is_vd3qpw0vkdm() );

if (! empty($m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_tags']) ) {
$m4is_22vwsyqyex8hrzbbn5adm1mz = explode(',', $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_tags']);

$m4is_gb01jqxh9ek2m = '';
$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w();
$m4is_y7084n6v67jme9va8yz = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' );

foreach ($m4is_22vwsyqyex8hrzbbn5adm1mz as $m4is_71b63jffvzdnghpsdnmqqmspz9ak2e9k) {
$m4is_gb01jqxh9ek2m .= str_ireplace('%%tagid%%',
 $m4is_71b63jffvzdnghpsdnmqqmspz9ak2e9k, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['format']);
$m4is_gb01jqxh9ek2m = str_ireplace('%%tagname%%',
 $m4is_06c8s5xs94f91335gnaey25['mc'][$m4is_71b63jffvzdnghpsdnmqqmspz9ak2e9k], $m4is_gb01jqxh9ek2m);
$m4is_gb01jqxh9ek2m = str_ireplace('%%membershiplevel%%',
 $m4is_y7084n6v67jme9va8yz[$m4is_71b63jffvzdnghpsdnmqqmspz9ak2e9k]['level'], $m4is_gb01jqxh9ek2m);
$m4is_gb01jqxh9ek2m = str_ireplace('%%membershipname%%',
 $m4is_y7084n6v67jme9va8yz[$m4is_71b63jffvzdnghpsdnmqqmspz9ak2e9k]['name'], $m4is_gb01jqxh9ek2m);
}
}
else {
$m4is_gb01jqxh9ek2m = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['alt'];

}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}
static function m4is_jmz0s8cb( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_bsamg3fezf = '',
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_n7x0afpz = [
'mode' => 'plain',
'style' => 'color:#000;',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_j9bvtm2229gdvmv3xxyv4g56 = m4is_8cw98mp72zyj4wx2kqhny4bcv90::m4is_c4v0rz2xnh9fbnkgy82x32( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( $m4is_j9bvtm2229gdvmv3xxyv4g56 ) {
$m4is_tmbp6qg93jf1hy3emw12sh9masmwac2k = add_query_arg( 'rss_user', $m4is_j9bvtm2229gdvmv3xxyv4g56,
 get_feed_link() );
}
else {
$m4is_tmbp6qg93jf1hy3emw12sh9masmwac2k = get_feed_link();
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['mode'] == 'input') {
$m4is_5vcwef7pymrfb3zawe = strlen($m4is_tmbp6qg93jf1hy3emw12sh9masmwac2k);

$m4is_tmbp6qg93jf1hy3emw12sh9masmwac2k = '<input class="memberium_feed_url" style="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['style'] . '" value="' . $m4is_tmbp6qg93jf1hy3emw12sh9masmwac2k . '" disabled="disabled" size="' . $m4is_5vcwef7pymrfb3zawe * 0.9 . '">';

}
elseif ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['mode'] == 'key') {
$m4is_tmbp6qg93jf1hy3emw12sh9masmwac2k = $m4is_j9bvtm2229gdvmv3xxyv4g56;

}
return $m4is_tmbp6qg93jf1hy3emw12sh9masmwac2k;
}
static function m4is_r35k07naaz9w85absf($m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = null,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
if (is_feed() ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

static $m4is_pae00hv11 = 0;
$m4is_n7x0afpz = [
'css_class' => '',
'style' => '',
'button_text' => 'Get New RSS URL',
'button_url' =>
 '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_pae00hv11++;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_7znqjnkvvbzyjs = 'memb_resetfeedurl_button-' . $m4is_pae00hv11;
$m4is_d07drbz79j6ytbbf = 'memb_resetfeedurl_button_' . $m4is_pae00hv11;

$m4is_qc36n7jdf = '<form method="post" action="">';
$m4is_qc36n7jdf .= "<input type='hidden' name='memb_form_type' value='memb_resetfeedurl_button'>";

$m4is_qc36n7jdf .= "<input type='hidden' name='form_id' value='{$m4is_pae00hv11}'>";
$m4is_qc36n7jdf .= wp_nonce_field("memb_resetfeedurl_{$m4is_pae00hv11}",
 '_wpnonce', true, false);
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_url']) ) {
$m4is_qc36n7jdf .= "<input type=\"submit\" class=\"{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_class']}\" id=\"{$m4is_d07drbz79j6ytbbf}\" value=\"{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text']}\">";

} else {
$m4is_qc36n7jdf .= "<input type=\"image\" src=\"{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_url']}\" class=\"{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_class']}\" id=\"{$m4is_d07drbz79j6ytbbf}\" >";

}
$m4is_qc36n7jdf .= '</form>';
return $m4is_qc36n7jdf;
}
static function m4is_gc52xebj3gm1bvf8xe5qvrdbs( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}

$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'contact_id' => self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'date_format' =>
 '',
'default' => '',
'fields' => '',
'field_filter' => '',
'htmlattr' => '',
'separator' => ' ',
'txtfmt' => '',
];

if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'];

if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] ) ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp <> self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_f5pq560taxn4v67xk7v982nwn0 = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 true );
}
else {
$m4is_f5pq560taxn4v67xk7v982nwn0 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'keap', 'contact', [] );
}
$m4is_51addd34g1m0tcc2qg059mn = array_filter( explode( ',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] ) );

$m4is_sb1cff4xx6ax7c = count( $m4is_51addd34g1m0tcc2qg059mn );
$m4is_dpjeyyj7c259yxqtcmvm6 = 0;
$m4is_gb01jqxh9ek2m = '';
$m4is_6n4xfsrcre7 = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ? false : current_user_can( 'manage_options' );


foreach ( $m4is_51addd34g1m0tcc2qg059mn as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) {
if ( $m4is_6n4xfsrcre7 ) {
$m4is_v7gcgdwwqe = 'Admin';

}
else {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower( trim( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) );
if ( isset( $m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] ) ) {
$m4is_map8tdmsvarsn03f1fhfytx61b4a = strtotime( $m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] );

if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'] == '' || $m4is_map8tdmsvarsn03f1fhfytx61b4a == 0 ) {
$m4is_v7gcgdwwqe = isset( $m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] ) ? htmlspecialchars( $m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] ) : '';

}
else {
$m4is_v7gcgdwwqe = date( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'], $m4is_map8tdmsvarsn03f1fhfytx61b4a );
}
}
else {
$m4is_v7gcgdwwqe = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'];

}
}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field_filter'] ) {
$m4is_v7gcgdwwqe = apply_filters( "memberium/shortcodes/memb_contact/{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field_filter']}",
 $m4is_v7gcgdwwqe, $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 );
}
$m4is_gb01jqxh9ek2m .= $m4is_v7gcgdwwqe;
if ($m4is_sb1cff4xx6ax7c > 1) {
$m4is_gb01jqxh9ek2m .= $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator'];

}
}
if ( $m4is_sb1cff4xx6ax7c > 1 && strlen( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator'] ) > 0 ) {
$m4is_gb01jqxh9ek2m = substr( $m4is_gb01jqxh9ek2m,
 0, -strlen( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator'] ) );
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}
static function m4is_dah5j1cr2c2c3hajaj( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
global $wpdb;

$m4is_n7x0afpz = [
'count' => 10,
'date_format' => 'F d, Y',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if (! is_user_logged_in() ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['count'] = empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['count']) ? 10 : (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['count'];

$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = wp_get_current_user();
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login;

$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');
$m4is_gb01jqxh9ek2m = '';
if (empty($m4is_bsamg3fezf) ) {
$m4is_bsamg3fezf = '%%logintime%% - %%ipaddress%%<br />';

}
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `logintime`, `ipaddress` FROM `" . m4is_an0pxqdph6ax26586c::m4is_0sbrs1vk06py44g() . "` WHERE `username` = '{$m4is_mr4hnyh6fa0p9sm0m8wfs1}' AND `appname` = '{$m4is_v4beyw7zqhr3}' ORDER BY `logintime` DESC ";

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['count']) {
$m4is_5rbenkpt1v7xby2cknbs7 .= ' LIMIT '. $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['count'];

}
$m4is_tbdh9qb6r6z = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A);
if (is_array($m4is_tbdh9qb6r6z) ) {
foreach($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
$m4is_1e44v06vtqjzg21vcnyxt6zeykry = $m4is_bsamg3fezf;

$m4is_1e44v06vtqjzg21vcnyxt6zeykry = str_ireplace('%%logintime%%', date($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'], $m4is_bamv772v['logintime']),
 $m4is_1e44v06vtqjzg21vcnyxt6zeykry);
$m4is_1e44v06vtqjzg21vcnyxt6zeykry = str_ireplace('%%ipaddress%%', $m4is_bamv772v['ipaddress'],
 $m4is_1e44v06vtqjzg21vcnyxt6zeykry);
$m4is_gb01jqxh9ek2m .= $m4is_1e44v06vtqjzg21vcnyxt6zeykry;
}
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

return $m4is_gb01jqxh9ek2m;
}

public static function m4is_4bgbt8p4f0( ?array $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], ?string $m4is_bsamg3fezf = '',
 ?string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
if ( is_feed() ) {
return '';

}

$m4is_n7x0afpz = [
'count' => 10,
'id' => '',
'offset' => 0,

'order_by' => 'display_name',
'order' => 'ASC',
'roles' => 'subscriber',

'tag_id' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_gb01jqxh9ek2m = '';
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order'] = strtoupper( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order'] ) );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_by'] = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_by'] ) );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] ) ? 0 : m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] );
if ( empty( $m4is_bsamg3fezf ) ) {
}
if ( ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] ) ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] = explode( ',',
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] = array_map( 'trim', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] = array_map( 'strtolower', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] = array_filter( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] );

}
else {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] = [];
}
$m4is_06c8s5xs94f91335gnaey25 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id'] );

if ( ! empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
$m4is_06c8s5xs94f91335gnaey25 = explode( ',', $m4is_06c8s5xs94f91335gnaey25 );
$m4is_06c8s5xs94f91335gnaey25 = array_map( 'trim',
 $m4is_06c8s5xs94f91335gnaey25 );
$m4is_06c8s5xs94f91335gnaey25 = array_map( 'strtolower', $m4is_06c8s5xs94f91335gnaey25 );
$m4is_06c8s5xs94f91335gnaey25 = array_filter( $m4is_06c8s5xs94f91335gnaey25 );

$m4is_nswf2an00mxj0rpknh4taq237wrg4m = implode( '|', $m4is_06c8s5xs94f91335gnaey25 );
}
else {
$m4is_nswf2an00mxj0rpknh4taq237wrg4m = '';

}
$m4is_g61yzqs7ecta0xztr70d7v = [
'fields' => 'all',
'number' => (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['count'],
'offset' =>
 (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['offset'],

'orderby' => 'meta_value',
'order' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order'],



];

$m4is_f8xpmnv38b56f = [ 'user_login', 'user_nicename', 'user_email', 'user_url', 'user_registered', 'display_name', 'id' ];
if ( in_array( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_by'],
 $m4is_f8xpmnv38b56f, true ) ) {
$m4is_g61yzqs7ecta0xztr70d7v['orderby'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_by'];
} else {
$m4is_g61yzqs7ecta0xztr70d7v['meta_key'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_by'];

$m4is_g61yzqs7ecta0xztr70d7v['orderby'] = 'meta_value';
}


if ( ! empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
$m4is_g61yzqs7ecta0xztr70d7v['meta_query'][] =
[
'key' =>
 'memb_Groups',
'compare' => 'REGEXP',
'value' => '(^|,)' . $m4is_nswf2an00mxj0rpknh4taq237wrg4m . '(,|$)', 


];
}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] ) {
$m4is_g61yzqs7ecta0xztr70d7v['search'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'];

$m4is_g61yzqs7ecta0xztr70d7v['search_columns'] = [ 'ID' ];
}
if ( ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] ) ) {
$m4is_g61yzqs7ecta0xztr70d7v['role__in'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'];

}
$m4is_ey8h8t3xkngm1a3e2yg87sv6gm = get_users( $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_m6mmqej6 = count( $m4is_ey8h8t3xkngm1a3e2yg87sv6gm );

$m4is_n224p3qwvfwqjsk8hr68nwny5y5sk = [];
foreach($m4is_ey8h8t3xkngm1a3e2yg87sv6gm as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->data->ID;

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->data->ID );

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_n224p3qwvfwqjsk8hr68nwny5y5sk[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65;

$m4is_n224p3qwvfwqjsk8hr68nwny5y5sk[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]->contact_id = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

}
}
$m4is_ey8h8t3xkngm1a3e2yg87sv6gm = $m4is_n224p3qwvfwqjsk8hr68nwny5y5sk;

$m4is_wq0v0by78fkc = false !== stripos( $m4is_bsamg3fezf, '%%contact.' );
$m4is_m8g41t1g9gchpapa = false !== stripos( $m4is_bsamg3fezf,
 '%%role.' );
$m4is_n6b9c9t5v7g = false !== stripos( $m4is_bsamg3fezf, '%%user.' );
$m4is_cc00yecths = false !== stripos( $m4is_bsamg3fezf,
 '%%meta.' );
$m4is_e8gyh6dg8pmza1284d80xv2zw4tk = false !== stripos( $m4is_bsamg3fezf, '%%capability.' );
$m4is_q0wjwbe9me0318z4wb05g0 = [
'ID',

'user_nicename',
'user_url',
'user_registered',
'user_status',
'display_name'
];
if ( isset( $m4is_ey8h8t3xkngm1a3e2yg87sv6gm[0]->data->contact_fields[$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_by']] ) ) {
usort($m4is_ey8h8t3xkngm1a3e2yg87sv6gm,
 function($u1, $u2) use ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j) {
$v1 = $u1->data->contact_fields[$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_by']];

$v2 = $u2->data->contact_fields[$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_by']];
return ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order'] == 'ASC') ? strnatcasecmp( $v1,
 $v2 ) : strnatcasecmp( $v2, $v1 );
});
}
if ( is_array( $m4is_ey8h8t3xkngm1a3e2yg87sv6gm ) ) {
$m4is_5sbqr2xek9r45b6t8v1z = 0;
foreach( $m4is_ey8h8t3xkngm1a3e2yg87sv6gm as $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = $m4is_bsamg3fezf;

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->contact_id;
$m4is_cyg7rcfhzagmm5v = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( ! empty( $m4is_cyg7rcfhzagmm5v['Email'] ) ) {
$m4is_5sbqr2xek9r45b6t8v1z++;
if ( $m4is_wq0v0by78fkc ) {
foreach( $m4is_cyg7rcfhzagmm5v as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%contact.' . $m4is_j8j55t8dz79m7 . '%%', $m4is_rqxytszfq5v6syth1csqqxvy5,
 $m4is_r2g10s87x43pdk8y5cq9hw801g );
}
}
if ( $m4is_m8g41t1g9gchpapa ) {
foreach( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->roles as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%role.' . $m4is_j8j55t8dz79m7 . '%%', $m4is_rqxytszfq5v6syth1csqqxvy5,
 $m4is_r2g10s87x43pdk8y5cq9hw801g );
}
}
if ( $m4is_cc00yecths ) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%meta.ipaddress%%',
 $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->login_ip_address, $m4is_r2g10s87x43pdk8y5cq9hw801g );
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%meta.login_count%%',
 (int) $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->login_count, $m4is_r2g10s87x43pdk8y5cq9hw801g );
}
if ( $m4is_n6b9c9t5v7g ) {
foreach( $m4is_q0wjwbe9me0318z4wb05g0 as $m4is_j8j55t8dz79m7 ) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%user.' . $m4is_j8j55t8dz79m7 . '%%',
 $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->data->$m4is_j8j55t8dz79m7, $m4is_r2g10s87x43pdk8y5cq9hw801g );
}
}
$m4is_gb01jqxh9ek2m = preg_replace( '/(%%\S+%%)/',
 '', $m4is_gb01jqxh9ek2m );
$m4is_gb01jqxh9ek2m .= $m4is_r2g10s87x43pdk8y5cq9hw801g;
}
}
}

$m4is_gb01jqxh9ek2m = do_shortcode($m4is_gb01jqxh9ek2m);

return $m4is_gb01jqxh9ek2m;
}

static function m4is_cq0mwxktb87b( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if (is_feed() ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'tokens' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$user_id = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
if (! $user_id) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
self::$m4is_132xe588j->m4is_g3gsedmkn2e( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tokens'] );

return '';
}
static function m4is_f2bxmx2jdrr0z3k( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
static $m4is_pae00hv11 = 0;
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'actionset' => '',
'button_text' =>
 'Get New Password',
'email_label' => 'Username or Email',
'form_name' => 'lostpasswordform',
'goal' => '',
'redirect' => '',
'redirect' =>
 '',
'tag_id' => 0,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if ( self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'disable_lost_password') ) {
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return '<p><strong style="color:red;">Admin Notice:</strong>  Lost password feature disabled in Site Security settings.</p>';

}
return '';
}
if (is_user_logged_in() ) {
if ( current_user_can( 'manage_options' ) ) {
return '<p><strong style="color:red;">Admin Notice:</strong>  You are already logged in.</p>';

}
return '';
}
if (is_feed() ) {
return '';
}
$m4is_pae00hv11++;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_name'] = '_' . $m4is_pae00hv11;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['redirect'] = empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['redirect']) ? get_site_url() : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['redirect'];

$m4is_d60kn1d3yvprp62rs332 = [
'actionset' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['actionset'],
'goal' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['goal'],

'redirect' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['redirect'],
'tag_id' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id'],
];
$m4is_r53562w9befcb2kh7rm4p7n5 = base64_encode(serialize($m4is_d60kn1d3yvprp62rs332) );

$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_r53562w9befcb2kh7rm4p7n5);
$m4is_qc36n7jdf = '';

$m4is_d60kn1d3yvprp62rs332 = new stdclass;
$m4is_d60kn1d3yvprp62rs332->goal = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['goal'];
$m4is_d60kn1d3yvprp62rs332->actionset = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['actionset'];

$m4is_d60kn1d3yvprp62rs332->button_text = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text'];
$m4is_d60kn1d3yvprp62rs332->email_label = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['email_label'];

$m4is_d60kn1d3yvprp62rs332->form_id = $m4is_pae00hv11;
$m4is_d60kn1d3yvprp62rs332->form_name = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_name'];

$m4is_d60kn1d3yvprp62rs332->message = '';
$m4is_d60kn1d3yvprp62rs332->parameters = $m4is_r53562w9befcb2kh7rm4p7n5;
$m4is_d60kn1d3yvprp62rs332->redirect = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['redirect'];

$m4is_d60kn1d3yvprp62rs332->signature = $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn;
$m4is_d60kn1d3yvprp62rs332->tag_id = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id'];

$m4is_d60kn1d3yvprp62rs332->message = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_ggfhwhr9nd6zvxtntm5x('flash', 'lost_password_message');

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_vbq3wn8s($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_d60kn1d3yvprp62rs332);
}
static function m4is_e59z7jpr3xvkbtfvkdwnehmnckwzp1s( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
static $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = '';

$m4is_n7x0afpz = [
'length' => self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'min_password_length'),
'strength' =>
 self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'password_strength'),
'repeat' => true,
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['repeat'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['repeat'],
 true);
if ( empty($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g) || $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['repeat'] === false ) {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = self::$m4is_132xe588j->m4is_d4hrfy3cjzb3y58yrjedq69fqd958dp( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['length'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['strength'] );
}
return $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g;
}




static function m4is_qavj0enkg2xp9c9w8v1wf0p4xwp7( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( self::$m4is_132xe588j->m4is_vd3qpw0vkdm() );

return '';
}
static function m4is_mr6bm5h7fa9jphv0( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_19x1c17et728k945 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['keys'] ?? '';
$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( self::$m4is_132xe588j->m4is_vd3qpw0vkdm() );

ksort( $m4is_6mctr922hbmncpwfrp0x2k );
return '<pre>' . print_r( $m4is_6mctr922hbmncpwfrp0x2k, true ) . '</pre>';
}
static function m4is_z41sr1p7nxxbe7x3( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_n7x0afpz = [
'contact_id' =>
 self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v(),
'tag_ids' => '',
];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_ids'] = array_map( 'trim',
 array_filter( explode( ',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_ids'] ) ) );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] );

if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) || empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_ids'] ) ) {
return '';
}
$m4is_zg1xzyf2wvny0pvzja = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( false,
 false );
$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_yfq3jqvfk8j = empty( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] ) ? [] : array_filter( explode( ',',
 $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] ) );
$m4is_fg97j87e69203z608tpw8rx4 = array_intersect( $m4is_yfq3jqvfk8j, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_ids'] );

$m4is_gb01jqxh9ek2m = '';
if ( empty( $m4is_bsamg3fezf ) ) {
foreach ( $m4is_fg97j87e69203z608tpw8rx4 as $m4is_hf6ctsm2pnexk ) {
if ( array_key_exists( $m4is_hf6ctsm2pnexk,
 $m4is_zg1xzyf2wvny0pvzja['mc'] ) ) {
$m4is_gb01jqxh9ek2m .= sprintf( '<p class="tag_list_%d">%s</p>', $m4is_hf6ctsm2pnexk, $m4is_zg1xzyf2wvny0pvzja['mc'][$m4is_hf6ctsm2pnexk] );

}
}
}
else {
foreach ( $m4is_fg97j87e69203z608tpw8rx4 as $m4is_hf6ctsm2pnexk ) {
if ( array_key_exists( $m4is_hf6ctsm2pnexk, $m4is_zg1xzyf2wvny0pvzja['mc'] ) ) {
$m4is_1e44v06vtqjzg21vcnyxt6zeykry = $m4is_bsamg3fezf;

$m4is_1e44v06vtqjzg21vcnyxt6zeykry = str_ireplace( '{{tag_id}}', $m4is_hf6ctsm2pnexk, $m4is_1e44v06vtqjzg21vcnyxt6zeykry );
$m4is_1e44v06vtqjzg21vcnyxt6zeykry = str_ireplace( '{{tag_name}}',
 $m4is_zg1xzyf2wvny0pvzja['mc'][$m4is_hf6ctsm2pnexk], $m4is_bsamg3fezf );
$m4is_gb01jqxh9ek2m .= $m4is_1e44v06vtqjzg21vcnyxt6zeykry;

}
}
}
return $m4is_gb01jqxh9ek2m;
}
}