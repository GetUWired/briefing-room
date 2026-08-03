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

m4is_70ymtzyq0gag122n7ja46kpx8ng::m4is_z6c3r724qhd();
final class m4is_70ymtzyq0gag122n7ja46kpx8ng {
static private $m4is_132xe588j;

static private $m4is_v4beyw7zqhr3;
static private $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
static private $m4is_zz74kb50;

static function m4is_z6c3r724qhd() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');
self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

self::$m4is_zz74kb50 = ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y();
}

static function m4is_hcwd359v( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
static $m4is_kfwa7376qsm9jz44v5nsba236fkg0 = 0;

if ( self::$m4is_zz74kb50 ) {
return '';
}
if ( is_feed() || ! is_singular() ) {
return '';
}
$m4is_kfwa7376qsm9jz44v5nsba236fkg0++;

$m4is_n7x0afpz = [
'class' => '',
'label' => 'Open Affiliate Dashboard',
'style' => '',
];
if ( isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
if ( empty( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return '';

}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = m4is_amz58dmg8j7e898bj8r8b1::m4is_qk9eqwy5wj( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_xbr1ae5hmx11ees = m4is_amz58dmg8j7e898bj8r8b1::m4is_gd369qw27ejjewd18ymbp36($m4is_tx246pq7vpq2ax5k03cf8dkex76fj9);
$m4is_b7tzyfwfn4ytv64ea4me7pva = isset($m4is_xbr1ae5hmx11ees['Status']) ? $m4is_xbr1ae5hmx11ees['Status'] : 0;

$m4is_y7q5sff2xx1aykq9s912xfckj = isset($m4is_xbr1ae5hmx11ees['AffCode']) ? $m4is_xbr1ae5hmx11ees['AffCode'] : '';
$m4is_s16p2dede5ek6tr3yjb = isset($m4is_xbr1ae5hmx11ees['Password']) ? $m4is_xbr1ae5hmx11ees['Password'] : '';

if (empty($m4is_b7tzyfwfn4ytv64ea4me7pva) || empty($m4is_y7q5sff2xx1aykq9s912xfckj) || empty($m4is_s16p2dede5ek6tr3yjb) ) {
return '';

}
$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3;
$m4is_d60kn1d3yvprp62rs332 = new stdClass;
$m4is_d60kn1d3yvprp62rs332->form_name = "memb_affiliate_login_{$m4is_kfwa7376qsm9jz44v5nsba236fkg0}";

$m4is_d60kn1d3yvprp62rs332->appname = self::$m4is_v4beyw7zqhr3;
$m4is_d60kn1d3yvprp62rs332->action = sprintf( 'https://%s.infusionsoft.com/j_spring_security_check',
 self::$m4is_v4beyw7zqhr3 );
$m4is_d60kn1d3yvprp62rs332->affiliate_code = $m4is_y7q5sff2xx1aykq9s912xfckj;
$m4is_d60kn1d3yvprp62rs332->affiliate_password = $m4is_s16p2dede5ek6tr3yjb;

$m4is_d60kn1d3yvprp62rs332->button_label = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['label'];
$m4is_d60kn1d3yvprp62rs332->button_style = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['style'];

$m4is_d60kn1d3yvprp62rs332->button_class = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['class'];
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_vbq3wn8s($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_d60kn1d3yvprp62rs332);
}

static function m4is_wfnqh4tspfy6xrjygatmk067wkrwz($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'fields' =>
 '',
'htmlattr' => '',
'separator' => ' ',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields']) ) {
return '';
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

if (empty( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return '';
}
if (! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return '';

}
$m4is_gb01jqxh9ek2m = '';
$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = m4is_amz58dmg8j7e898bj8r8b1::m4is_qk9eqwy5wj($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

if ($m4is_tx246pq7vpq2ax5k03cf8dkex76fj9) {
$m4is_xbr1ae5hmx11ees = array_change_key_case(m4is_amz58dmg8j7e898bj8r8b1::m4is_gd369qw27ejjewd18ymbp36($m4is_tx246pq7vpq2ax5k03cf8dkex76fj9));

if (! empty($m4is_xbr1ae5hmx11ees) ) {
$m4is_51addd34g1m0tcc2qg059mn = array_filter(explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields']));

foreach ($m4is_51addd34g1m0tcc2qg059mn as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower(trim($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) );

$m4is_xgtgw8c7w25hk72ec5z99vqy7a = !empty($m4is_xbr1ae5hmx11ees[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ? $m4is_xbr1ae5hmx11ees[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] : '';

$m4is_gb01jqxh9ek2m .= $m4is_xgtgw8c7w25hk72ec5z99vqy7a;
if ( count( $m4is_51addd34g1m0tcc2qg059mn ) > 1) {
$m4is_gb01jqxh9ek2m .= $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator'];

}
}
}
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}

static function m4is_y5zphzkzkne9q1h5pxez9txtxsbmy($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
static $m4is_f5pq560taxn4v67xk7v982nwn0 = [];
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();





$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'affiliate', 'id', 0 );

$m4is_n7x0afpz = [
'affiliate_id' => $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9,
'after' => '',
'before' => '',

'capture' => '',
'default' => '0.00',
'fields' => 'running_balance',
'format' => 'USD',
'htmlattr' => '',
'separator' => '',
'txtfmt' =>
 '',

];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['affiliate_id'] ) ) {
return '';
}
$m4is_m4vez4pehykpde = [$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['affiliate_id']];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] = array_filter( explode( ',', strtolower( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] ) ) );

$m4is_gb01jqxh9ek2m = '';
$m4is_sv4jqr1nqajr3a = [
'amountearned' => 'amount_earned',
'runningbalance' => 'running_balance',
];
foreach( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( array_key_exists( $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_sv4jqr1nqajr3a ) ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'][$m4is_j8j55t8dz79m7] = $m4is_sv4jqr1nqajr3a[$m4is_rqxytszfq5v6syth1csqqxvy5];

}
}
$m4is_9hj1j5q11d8rje19r0v8kd2 = m4is_amz58dmg8j7e898bj8r8b1::m4is_vs9m42n6dh5q7( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['affiliate_id']) ;

$m4is_9hj1j5q11d8rje19r0v8kd2 = array_change_key_case($m4is_9hj1j5q11d8rje19r0v8kd2, CASE_LOWER);
$m4is_f5pq560taxn4v67xk7v982nwn0[ $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['affiliate_id'] ] = $m4is_9hj1j5q11d8rje19r0v8kd2;

if ( empty( $m4is_f5pq560taxn4v67xk7v982nwn0[ $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['affiliate_id'] ] ) ) {
if ( ! is_array( $m4is_9hj1j5q11d8rje19r0v8kd2 ) ) {
return '';

}
}
else {
$m4is_9hj1j5q11d8rje19r0v8kd2 = $m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['affiliate_id']];

}
if ( class_exists( 'NumberFormatter' ) ) {
$m4is_vr9tgqy1wq53rrf9m3a36t = new NumberFormatter('en_US', NumberFormatter::CURRENCY);

}
if (is_array($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'])) {
foreach($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] as $field) {
if (class_exists('NumberFormatter')) {
$m4is_7s7xsd1vvg = $m4is_vr9tgqy1wq53rrf9m3a36t->formatCurrency($m4is_9hj1j5q11d8rje19r0v8kd2[$field],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['format']);
}
else {
$m4is_7s7xsd1vvg = $m4is_9hj1j5q11d8rje19r0v8kd2[$field];
}
$m4is_gb01jqxh9ek2m .= (isset($m4is_9hj1j5q11d8rje19r0v8kd2[$field]) ? $m4is_7s7xsd1vvg : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default']) . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator'];

}
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}

static function m4is_6ea8hyd1edb4c9g3gbyc6cgt6($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'txtfmt' => '',
'not' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_yrsthh0s4s62mfk9 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'affiliate', 'status', '' );
if (! empty($m4is_yrsthh0s4s62mfk9) ) {
$m4is_hartbe843crydzh = (boolean) $m4is_yrsthh0s4s62mfk9 || self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp();

}
else {
$m4is_hartbe843crydzh = 0;
}
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v($m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 TRUE, $m4is_hartbe843crydzh);
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}

static function m4is_gqc2bsjhjgxtztdphxjt3c89e($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if ( is_feed() ) {
return '';
}
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return 'n/a';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
self::$m4is_132xe588j->m4is_hmtxjadxnedft();
return '';
}

static function m4is_jwb9617z1y6kcz4ym6c1c15jcjysz12($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'capture' => '',
'affiliate_id' => false,
'not' => '',

'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] = ! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not']);
$m4is_zrj0c6v1c4tt3fqaehaqb4 = empty( $_COOKIE['affiliate_id'] ) ? 0 : (int) $_COOKIE['affiliate_id'];

$m4is_zrj0c6v1c4tt3fqaehaqb4 or $m4is_zrj0c6v1c4tt3fqaehaqb4 = (int) get_user_meta( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(), 'memberium/keap/affiliate/id',
 true );
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = true;
}
else {
if (stripos($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 '_not_') ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] = true;
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['affiliate_id'] && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['affiliate_id'] == $m4is_zrj0c6v1c4tt3fqaehaqb4) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = true;

}
else {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
}
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not']) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = ! $m4is_6p2tyvq6paj43svrn7zqaykxzy;

}
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v($m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true,
 $m4is_6p2tyvq6paj43svrn7zqaykxzy);
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}

static function m4is_81d6q7xyy01t8eqd061ekdd62c( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'date_format' =>
 '',
'default' => '',
'fields' => '',
'htmlattr' => '',
'separator' => ' ',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );

if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] ) ) {
return '';
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();
 
$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = self::$m4is_132xe588j->m4is_qg9294a34f1821qmbf1c5a( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 ) {
$m4is_c2k8jt5cnb = m4is_amz58dmg8j7e898bj8r8b1::m4is_gd369qw27ejjewd18ymbp36( $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 );

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = isset( $m4is_c2k8jt5cnb['ContactId']) ? (int) $m4is_c2k8jt5cnb['ContactId'] : 0;
}
else {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0;

}
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return '';
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_f5pq560taxn4v67xk7v982nwn0 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'keap',
 'contact' );
$m4is_51addd34g1m0tcc2qg059mn = explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields']);
$m4is_sb1cff4xx6ax7c = count($m4is_51addd34g1m0tcc2qg059mn);

$m4is_dpjeyyj7c259yxqtcmvm6 = 0;

$m4is_gb01jqxh9ek2m = '';
foreach ($m4is_51addd34g1m0tcc2qg059mn as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower(trim($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) );

if (isset($m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ) {
$m4is_map8tdmsvarsn03f1fhfytx61b4a = strtotime($m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]);

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'] == '' || $m4is_map8tdmsvarsn03f1fhfytx61b4a == 0) {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = isset($m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ? $m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] : '';

}
else {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = date($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'], strtotime($m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) );

}
}
else {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'];
}
$m4is_gb01jqxh9ek2m .= $m4is_xgtgw8c7w25hk72ec5z99vqy7a;

if ($m4is_sb1cff4xx6ax7c > 1) {
$m4is_gb01jqxh9ek2m .= $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator'];
}
}
if ($m4is_sb1cff4xx6ax7c > 1 && strlen($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator']) > 0) {
$m4is_gb01jqxh9ek2m = substr($m4is_gb01jqxh9ek2m,
 0, -strlen($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator']) );
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}
}