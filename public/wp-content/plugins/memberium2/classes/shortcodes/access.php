<?php
/**
 * Proprietary Software - All Rights Reserved
 *
 * This file is part of the Memberium plugin, which is proprietary software developed by Web Power and Light.
 * Unauthorized copying, distribution, or modification of this file, via any medium, is strictly prohibited.
 *
 * Copyright (c) 2017-2024 David J Bullock
 * Web Power and Light
 *
 * For licensing information, please contact Web Power and Light.
 */


class_exists( 'm4is_6y9612z4hjd6fzpap4r5n853641m1jc' ) || die();


final class m4is_2k67em2mm {
private static $m4is_132xe588j;
private static $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;
private static $m4is_zz74kb50;

private static $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;
private function __construct() {}

static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_zz74kb50 = ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y();

self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'memberium';
}

static function m4is_52efqk48mxv9e9w943vz( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'except_memberships' => '',
'not' => '',
'output' => '',
'membership' => '',
'memberships' =>
 '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_p13xsqg91stqhvzsrpk0w94q96aqk = ! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not']);

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_c53wahcevdpdv4fc8seb00dwfa9fc600 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['membership'] . ',' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['memberships'];

$m4is_c53wahcevdpdv4fc8seb00dwfa9fc600 = array_filter( explode( ',', strtolower( trim( $m4is_c53wahcevdpdv4fc8seb00dwfa9fc600 ) ) ) );

$m4is_3p79knfjwxczh7041qn1t = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user',
 'membership_names', '' );
$m4is_848p1grtgdwnpcmcm12mx29 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'membership_tags', '' );
$m4is_ska5e8j5ha4r3pn82wmpgkgkxwpthsa = array_filter( explode( ',', strtolower( $m4is_848p1grtgdwnpcmcm12mx29 . ',' . $m4is_3p79knfjwxczh7041qn1t ) ) );

if ( empty( $m4is_c53wahcevdpdv4fc8seb00dwfa9fc600 ) ) {
$m4is_1we1qc8rdsrfq = false;
}
elseif ( ! is_user_logged_in() ) {
$m4is_1we1qc8rdsrfq = false;

}
elseif ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
$m4is_1we1qc8rdsrfq = true;
}
else {
$m4is_1we1qc8rdsrfq = (bool) count( array_intersect( $m4is_ska5e8j5ha4r3pn82wmpgkgkxwpthsa,
 $m4is_c53wahcevdpdv4fc8seb00dwfa9fc600 ) );
}
$m4is_1we1qc8rdsrfq = $m4is_p13xsqg91stqhvzsrpk0w94q96aqk ? ! $m4is_1we1qc8rdsrfq : $m4is_1we1qc8rdsrfq;

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_1we1qc8rdsrfq );

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_h4p426h5p( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return 'n/a';

}
$m4is_2hbz903tzgvnen2k0wa = ! is_feed();
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 true, $m4is_2hbz903tzgvnen2k0wa );
}

static function m4is_12vye89qx98vjjfqs01663s( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_n7x0afpz = [
'capture' =>
 '',
'not' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_p13xsqg91stqhvzsrpk0w94q96aqk = ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] );

$m4is_p13xsqg91stqhvzsrpk0w94q96aqk = $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 == 'memb_is_not_admin' ? true : $m4is_p13xsqg91stqhvzsrpk0w94q96aqk;

$m4is_6n4xfsrcre7 = self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp();
$m4is_6n4xfsrcre7 = $m4is_p13xsqg91stqhvzsrpk0w94q96aqk ? ! $m4is_6n4xfsrcre7 : $m4is_6n4xfsrcre7;

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_6n4xfsrcre7 );

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], '', '', '' );
return $m4is_bsamg3fezf;
}

static function m4is_fn7r7vmfakyd44( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_1we1qc8rdsrfq = is_single();
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_1we1qc8rdsrfq );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;

}

static function m4is_nw2r88pen30485vvqwgwmh5knepn( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'fields' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_1we1qc8rdsrfq = false;
$m4is_7b2yfzk0054 = array_filter( explode( ',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] ) );

if ( empty( $m4is_7b2yfzk0054 ) ) {
return false;
}
foreach ( $m4is_7b2yfzk0054 as $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
if ( isset( $_GET[$m4is_bbsta3mvjhhvh1x97vfpm9e] ) ) {
$m4is_1we1qc8rdsrfq = true;

break;
}
}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 true, $m4is_1we1qc8rdsrfq );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_5xq3gm479jtt67vt7gzh49d1hhrzqns3( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';
 
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'capture' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_bsamg3fezf = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_21x1a42kdhb9vkcx2xjprxnbap( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_ay89fse45xv7040nd2m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'not' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_hartbe843crydzh = is_user_logged_in();
$m4is_p13xsqg91stqhvzsrpk0w94q96aqk = ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] );

$m4is_hartbe843crydzh = $m4is_p13xsqg91stqhvzsrpk0w94q96aqk ? ! $m4is_hartbe843crydzh : $m4is_hartbe843crydzh;
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_hartbe843crydzh );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], '', '', '' );
return $m4is_bsamg3fezf;

}

static function m4is_1027346y2yas( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'debug' => false,
'not' => '',
'txtfmt' => '',
'user_id' => 0,
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['user_id'] ) ? self::$m4is_132xe588j->m4is_vd3qpw0vkdm() : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['user_id'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'] );

if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return '';
}
$m4is_p13xsqg91stqhvzsrpk0w94q96aqk = ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] );

$m4is_ps46agx1v8d1xg57m = (int) get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'login_count', true);
$m4is_t3ec9x2neczpv7f = 2 > $m4is_ps46agx1v8d1xg57m;

$m4is_t3ec9x2neczpv7f = $m4is_p13xsqg91stqhvzsrpk0w94q96aqk ? ! $m4is_t3ec9x2neczpv7f : $m4is_t3ec9x2neczpv7f;
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'] ) {
echo 'Login Count: ' . $m4is_ps46agx1v8d1xg57m . '<br>';

return '';
}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 true, $m4is_t3ec9x2neczpv7f );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_yn3xs7t6qmd9rhb( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
global $post;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_knxbec8fr3be1s2tkx0ydee0z = (bool) $post->excerpt_only == 1;
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_knxbec8fr3be1s2tkx0ydee0z );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
return $m4is_bsamg3fezf;

}

static function m4is_p9qddzhge8wfa2z40jw0zrwjmgn( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'htmlattr' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$languages = m4is_eknm14gbx0wvrnh6::m4is_jhjmwpc72xsn();
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_j1cappz00y2v9xkw9s21( $m4is_bsamg3fezf,
 $languages, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( true, $m4is_bsamg3fezf,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'] );

return $m4is_bsamg3fezf;
}

static function m4is_atscv0qj7vte( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_n7x0afpz = [
'after' =>
 '',
'before' => '',
'capture' => '',
'htmlattr' => '',
'txtfmt' => '',
'until' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['until'] ) ) {
return do_shortcode( $m4is_bsamg3fezf );

}
if ( strtotime( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['until'] ) > time() ) {
$m4is_bsamg3fezf = do_shortcode($m4is_bsamg3fezf);
}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );
return $m4is_bsamg3fezf;
}

static function m4is_6yse12awdehr0zx4h98bvm9( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
static $m4is_9yw8e8h1m49k2m1g64g = 0;
$m4is_9yw8e8h1m49k2m1g64g++;
$m4is_n7x0afpz = [
'class' => '',
'delayhide_function' => '',

'delayhide' => 0,
'delayshow_function' => '',
'delayshow' => 0,
'fadehide' => 0,
'fadeout_function' => '',
'fadeout' => 0,
'fadeshow' =>
 0,
'id' => 'memberium_fader_' . $m4is_9yw8e8h1m49k2m1g64g,
'style' => '',
'target_class' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_qc36n7jdf = '';
$m4is_vwkzc6fv1n9ndmn5 = '';
$m4is_mtcehewkf = '';
$m4is_h4bme6g30z3je9phn = '#' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'];

$m4is_bsamg3fezf = do_shortcode( $m4is_bsamg3fezf );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayshow'] = (int) ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayshow'] * 1000 );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayhide'] = (int) ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayhide'] * 1000 );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadeout'] = (int) ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadeout'] * 1000 );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadeshow'] = (int) ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadeshow'] * 1000 );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadehide'] = (int) ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadehide'] * 1000 );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayhide_function'] = ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayhide_function'] ) ? ', ' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayhide_function'] : '';

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayshow_function'] = ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayshow_function'] ) ? ', ' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayshow_function'] : '';

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadeout_function'] = ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadeout_function'] ) ? ', ' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadeout_function'] : '';

if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadeout'] < 1 ) {
$m4is_mtcehewkf = 'display:none;';
}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['style'] > '' ) {
$m4is_mtcehewkf .= $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['style'];

}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['target_class'] > '' ) {
$m4is_h4bme6g30z3je9phn = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['target_class'];

}
if ( trim( $m4is_bsamg3fezf ) > '' ) {
$m4is_qc36n7jdf = sprintf( '<div id="%s" class="%s" style="%s">%s</div>', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['class'], $m4is_mtcehewkf, $m4is_bsamg3fezf );

}
$m4is_vwkzc6fv1n9ndmn5 .= '<script type="text/javascript">';

$m4is_vwkzc6fv1n9ndmn5 .= 'jQuery(document).ready(function() { ';
$m4is_vwkzc6fv1n9ndmn5 .= '   jQuery("' . $m4is_h4bme6g30z3je9phn . '")';

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadeout'] > 0) {
$m4is_vwkzc6fv1n9ndmn5 .= '.delay(' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadeout'] .')';

$m4is_vwkzc6fv1n9ndmn5 .= '.fadeOut(' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadehide'] . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadeout_function'] . ')';

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayshow'] > 0) {
$m4is_vwkzc6fv1n9ndmn5 .= '.delay(' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayshow'] . ')';

$m4is_vwkzc6fv1n9ndmn5 .= '.fadeIn(' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadeshow'] . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayshow_function'] . ')' ;

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayhide'] > 0) {
$m4is_vwkzc6fv1n9ndmn5 .= '.delay(' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayhide'] . ')';

$m4is_vwkzc6fv1n9ndmn5 .= '.fadeOut(' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fadehide'] . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delayhide_function'] . ')' ;

}
$m4is_vwkzc6fv1n9ndmn5 .= ";\n";
$m4is_vwkzc6fv1n9ndmn5 .= '});';
$m4is_vwkzc6fv1n9ndmn5 .= '</script>';

return $m4is_vwkzc6fv1n9ndmn5 . $m4is_qc36n7jdf;

}

static function m4is_tt0xp5jj2jkf5sg0ptxg97xd( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return 'n/a';

}
return '';
}

static function m4is_vz0q2jqz409yw( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return 'n/a';

}
$m4is_74sga49c17 = empty( $_COOKIE['memberium_autologin_session'] ) ? false : (bool) $_COOKIE['memberium_autologin_session'];
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_74sga49c17 );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf );
return $m4is_bsamg3fezf;
}

static function m4is_637f8v0c0byvzp30br1f2x792yte9( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'txtfmt' => '',
'types' => '',
'not' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_tz1rt7sbq40fade6e6rx = get_the_id();
$m4is_zhzetp13gk15ngyxh6tva = array_filter( explode( ',',
 strtolower( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['types'] ) ) );
$m4is_yhdk2h7srcr7n5mzjnw7m6b = strtolower( get_post_type( $m4is_tz1rt7sbq40fade6e6rx ) );

if ( empty( $m4is_zhzetp13gk15ngyxh6tva ) ) {
return $m4is_yhdk2h7srcr7n5mzjnw7m6b;
}
$m4is_hartbe843crydzh = in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b,
 $m4is_zhzetp13gk15ngyxh6tva );
$m4is_hartbe843crydzh = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] ) ? $m4is_hartbe843crydzh : ! $m4is_hartbe843crydzh;

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_hartbe843crydzh );

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], '', '', '' );
return $m4is_bsamg3fezf;
}

static function m4is_0a5vvftkv5x4nvhm1cwcecwa28tax7xb( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'htmlattr' => '',
'not' => '',
'post_id' => 0,
'postid' => 0,

'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_gx2r3gmw1j15fqckjg3y1f0vf8sh4d = false;
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['post_id'] > 0 ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['postid'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['post_id'];

}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['postid'] = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['postid'] ) ? (int) get_the_ID() : (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['postid'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] = ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] );
if ( stripos( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 '_not_' ) ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] = true;
}
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
$m4is_gx2r3gmw1j15fqckjg3y1f0vf8sh4d = true;

}
else {
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['postid'] ) {
$m4is_gx2r3gmw1j15fqckjg3y1f0vf8sh4d = apply_filters( 'memberium_has_post_access',
 null, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['postid'] );
}
}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] ) {
$m4is_gx2r3gmw1j15fqckjg3y1f0vf8sh4d = ! $m4is_gx2r3gmw1j15fqckjg3y1f0vf8sh4d;

}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true,
 $m4is_gx2r3gmw1j15fqckjg3y1f0vf8sh4d );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( true, $m4is_bsamg3fezf,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );
return $m4is_bsamg3fezf;
}

static function m4is_c3p5eb11p47xghz634p( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'contact_id' => 0,
'days' => '',
'debug' => false,
'hours' =>
 '',
'htmlattr' => '',
'interval' => '',
'months' => '',
'tag_id' => '',
'txtfmt' => '',
'weeks' => '',
'years' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_h1hgagd3k3hzgj8vjv01r3de57y = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'sync_tag_details' );
if ( empty( $m4is_h1hgagd3k3hzgj8vjv01r3de57y ) ) {
return '';
}
global $wpdb;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_1we1qc8rdsrfq = false;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['hours'] ) ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] . " {$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['hours']} hours ";

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['days'] ) ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] . " {$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['days']} days ";

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['weeks'] ) ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] . " {$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['weeks']} weeks ";

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['months'] ) ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] . " {$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['months']} months ";

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['years'] ) ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] . " {$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['years']} years ";

if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] ) || empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id'] ) ||empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] ) ) {
return '';

}

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] ) ? (int) self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v() : (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'];

$m4is_map8tdmsvarsn03f1fhfytx61b4a = time();
$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
$m4is_5rbenkpt1v7xby2cknbs7 = 'SELECT `created` FROM %s WHERE `appname` = %s AND `contactid` = %d AND `tagid` = %d ;';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, m4is_0ddg4zyk7dn8eg0283::m4is_nm686mgj6zffggzes4k(), $m4is_v4beyw7zqhr3,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id'] );
$m4is_0advwqb230srbh3ff4esxf = strtotime( $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 ) . ' + ' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['interval'] );

if ( empty( $m4is_0advwqb230srbh3ff4esxf ) ) {
return '';
}
$m4is_1we1qc8rdsrfq = $m4is_map8tdmsvarsn03f1fhfytx61b4a >= $m4is_0advwqb230srbh3ff4esxf;

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_1we1qc8rdsrfq );

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( true, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );
return $m4is_bsamg3fezf;
}

static function m4is_a39nxeh3vd1bnj8qd( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'except_roles' => '',
'not' => '',
'roles' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] = ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] );

if ( stripos( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, '_not_' ) ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] = true;
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_roles'] = array_filter( explode( ',',
 strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_roles'] ) ) ) );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] = array_filter( explode( ',',
 strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] ) ) ) );
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_userdata( self::$m4is_132xe588j->m4is_vd3qpw0vkdm() );

$m4is_2bsqqc49624dcnkr66e356ktggnm = is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_User' ) ? $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->roles : [];

$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] ) && empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_roles'] ) ) {
return '';

}
if ( is_user_logged_in() ) {
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = true;

}
else {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = (boolean) ( count( array_intersect( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'], $m4is_2bsqqc49624dcnkr66e356ktggnm ) ) == count( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] ) );

if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = ! (boolean) ( count( array_intersect( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_roles'],
 $m4is_2bsqqc49624dcnkr66e356ktggnm ) ) > 0 );
}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = ! $m4is_6p2tyvq6paj43svrn7zqaykxzy;

}
}
}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true,
 $m4is_6p2tyvq6paj43svrn7zqaykxzy );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_rfq6aa768jppmfc1( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'except_roles' => '',
'not' => '',
'roles' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] = ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] = stripos($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, '_not_') ? true : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_roles'] = array_filter( explode( ',', strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_roles'] ) ) ) );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] = array_filter( explode( ',', strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] ) ) ) );

$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = wp_get_current_user();
$m4is_2bsqqc49624dcnkr66e356ktggnm = ( is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'WP_User' ) ) ? $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->roles : [];
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'] ) && empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_roles'] ) ) {
return '';

}
if ( is_user_logged_in() ) {
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = true;

}
else {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = (boolean) ( count( array_intersect( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['roles'], $m4is_2bsqqc49624dcnkr66e356ktggnm ) ) > 0 );

if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = ! (boolean) ( count( array_intersect( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_roles'],
 $m4is_2bsqqc49624dcnkr66e356ktggnm ) ) > 0 );
}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = ! $m4is_6p2tyvq6paj43svrn7zqaykxzy;

}
}
}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true,
 $m4is_6p2tyvq6paj43svrn7zqaykxzy );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_cxa305nps7grdtx10c434cecd( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'contact_id' => 0,
'except_contact_ids' => '',
'not' => '',
'output' => '',
'tagid' => '',
'tagids' =>
 '',
'tag_ids' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] ) ? self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v() : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'];

$m4is_06c8s5xs94f91335gnaey25 = array_filter( explode( ',', trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagid'] . ',' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagids'] . ',' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_ids'],
 ',' ) ) );
$m4is_p13xsqg91stqhvzsrpk0w94q96aqk = ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] );
$m4is_p13xsqg91stqhvzsrpk0w94q96aqk = stripos( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 '_not_' ) ? ! $m4is_p13xsqg91stqhvzsrpk0w94q96aqk : $m4is_p13xsqg91stqhvzsrpk0w94q96aqk;
$m4is_r5xxp26ngvy8grpa5w8qpt48z = array_filter( explode( ',',
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_contact_ids'] ) );
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
$m4is_6n4xfsrcre7 = self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp();

if ( ! $m4is_6n4xfsrcre7 ) {
if ( ! count( $m4is_06c8s5xs94f91335gnaey25 ) ) {
return '';
}
if ( ! in_array( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_r5xxp26ngvy8grpa5w8qpt48z ) ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0 ? self::$m4is_132xe588j->m4is_n9nmkb32xctdmyy9d0s0trys3zj5y( $m4is_06c8s5xs94f91335gnaey25,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : false;
}
}
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_6n4xfsrcre7 ? true : $m4is_6p2tyvq6paj43svrn7zqaykxzy;

$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_p13xsqg91stqhvzsrpk0w94q96aqk ? ! $m4is_6p2tyvq6paj43svrn7zqaykxzy : $m4is_6p2tyvq6paj43svrn7zqaykxzy;

$m4is_bsamg3fezf = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['output'] ) ? $m4is_bsamg3fezf : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['output'];

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_6p2tyvq6paj43svrn7zqaykxzy );

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_xkz266385x85( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'category_id' => '',
'contact_id' => self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v(),
'debug' =>
 false,
'except_contact_ids' => '',
'except_contactid' => '',
'except_tag_ids' => '',
'except_tagid' => '',
'min' => 1,
'not' => '',

'output' => '',
'tag_id' => '',
'tag_ids' => '',
'tagid' => '',
'tagids' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_6n4xfsrcre7 = self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp();
$m4is_r0k5agzeh2z = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_p13xsqg91stqhvzsrpk0w94q96aqk = ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] );
$m4is_p13xsqg91stqhvzsrpk0w94q96aqk = stripos( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 '_not_' ) ? ! $m4is_p13xsqg91stqhvzsrpk0w94q96aqk : $m4is_p13xsqg91stqhvzsrpk0w94q96aqk;
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = trim( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id'] . ',' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_ids'] . ',' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagid'] . ',' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagids'],
 ',' ) );
$m4is_paccvtcm = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_tagid'] . ',' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_tag_ids'] );

$m4is_r5xxp26ngvy8grpa5w8qpt48z = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_contactid'] . ',' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_contact_ids'] );

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] ) ? $m4is_r0k5agzeh2z : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'];

$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_6n4xfsrcre7;
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_yfq3jqvfk8j = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'tags', '' );
if ( ! $m4is_6n4xfsrcre7 ) {
$m4is_feqbf2n6cc7e7e0d6ass58zecv5n = true;
$m4is_ddmz88dqshrn8sjfpfqse2m7svwrg0 = true;

$m4is_7xyy79cfm2v = true;
$m4is_1tpv2zzx2nmvfqers4wk = true;
if ( ! empty( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) ) {
$m4is_feqbf2n6cc7e7e0d6ass58zecv5n = self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj,
 $m4is_6mctr922hbmncpwfrp0x2k );
}
if ( ! empty( $m4is_paccvtcm ) ) {
$m4is_ddmz88dqshrn8sjfpfqse2m7svwrg0 = ! self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_paccvtcm,
 $m4is_6mctr922hbmncpwfrp0x2k );
}
if ( ! empty( $m4is_r5xxp26ngvy8grpa5w8qpt48z ) ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_contactids'] = array_filter( explode( ',',
 $m4is_r5xxp26ngvy8grpa5w8qpt48z) );
if ( count( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_contactids'] ) && in_array( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_contactids'] ) ) {
$m4is_7xyy79cfm2v = false;
}
}
if ( ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['category_id'] ) ) {
$m4is_1tpv2zzx2nmvfqers4wk = self::$m4is_132xe588j->m4is_kqtdb02qf7440( (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['category_id'],
 $m4is_6mctr922hbmncpwfrp0x2k );
}
$m4is_6p2tyvq6paj43svrn7zqaykxzy = ( $m4is_feqbf2n6cc7e7e0d6ass58zecv5n === true ) && ( $m4is_ddmz88dqshrn8sjfpfqse2m7svwrg0 === true ) && ( $m4is_7xyy79cfm2v === true ) && ( $m4is_1tpv2zzx2nmvfqers4wk === true );

if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['min'] > 1 ) {
$m4is_fyrzrnz0yzggdj2b8p5wx = array_filter( explode( ',',
 $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) );
$m4is_xz6n46p7p = array_filter( explode( ',', $m4is_yfq3jqvfk8j ) );
$m4is_gvtq0ybyq7 = 0;

foreach( $m4is_xz6n46p7p as $m4is_bxs3va6mr0xm1zae09xxw3e ) {
if ( in_array( $m4is_bxs3va6mr0xm1zae09xxw3e, $m4is_fyrzrnz0yzggdj2b8p5wx ) ) {
$m4is_gvtq0ybyq7++;

}
}
if ( $m4is_gvtq0ybyq7 < $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['min'] ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
}
}
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_p13xsqg91stqhvzsrpk0w94q96aqk ? ! $m4is_6p2tyvq6paj43svrn7zqaykxzy : $m4is_6p2tyvq6paj43svrn7zqaykxzy;

}
$m4is_bsamg3fezf = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['output'] ) ? $m4is_bsamg3fezf : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['output'];

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_6p2tyvq6paj43svrn7zqaykxzy );

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_5fhxt348s91( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'caseinsensitive' => 'yes',
'not' => '',
'test' => '=',
'output' => '',
'txtfmt' => '',
'value1' =>
 '',
'value2' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_p13xsqg91stqhvzsrpk0w94q96aqk = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'],
 false );
$m4is_6n4xfsrcre7 = self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp();
$m4is_xcb9hm65 = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['caseinsensitive'],
 true );
$m4is_bsamg3fezf = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['output'] ) ? $m4is_bsamg3fezf : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['output'];

$m4is_1we1qc8rdsrfq = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_xa6fsr0pb2yemz613( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value1'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['test'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value2'], $m4is_xcb9hm65 );
$m4is_1we1qc8rdsrfq = $m4is_6n4xfsrcre7 ? true : $m4is_1we1qc8rdsrfq;

$m4is_1we1qc8rdsrfq = $m4is_p13xsqg91stqhvzsrpk0w94q96aqk ? ! $m4is_1we1qc8rdsrfq : $m4is_1we1qc8rdsrfq;
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_1we1qc8rdsrfq );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( true,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;

}

static function m4is_2rghwx0by9( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'not' => '',
'output' => '',
'tokens' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_p13xsqg91stqhvzsrpk0w94q96aqk = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'],
 false );
$m4is_9z1bwd0x = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tokens'], ',' );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_6n4xfsrcre7 = self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp();
$m4is_p13xsqg91stqhvzsrpk0w94q96aqk = stripos( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 '_not_' ) ? ! $m4is_p13xsqg91stqhvzsrpk0w94q96aqk : $m4is_p13xsqg91stqhvzsrpk0w94q96aqk;
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;

if ( $m4is_6n4xfsrcre7 ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = true;
}
elseif ($m4is_wk4dh1rnd3wmwvsggq51nhn87 < 1) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;

}
elseif ( empty( $m4is_9z1bwd0x ) ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
}
else {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = self::$m4is_132xe588j->m4is_q5xk3krkg4vpabvqmn( $m4is_9z1bwd0x,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_p13xsqg91stqhvzsrpk0w94q96aqk ? ! $m4is_6p2tyvq6paj43svrn7zqaykxzy : $m4is_6p2tyvq6paj43svrn7zqaykxzy;

$m4is_bsamg3fezf = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['output'] ) ? $m4is_bsamg3fezf : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['output'];

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_6p2tyvq6paj43svrn7zqaykxzy );

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_kcjdj5s2v93m2d1tqv36rhsev4( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'levels' => '',
'strict' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
$m4is_v65njznyzw30p = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['strict'],
 false );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();
$m4is_6n4xfsrcre7 = self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp();

if ( $m4is_6n4xfsrcre7 ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = true;
}
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_87q8rj3y0ftsvcr8dgsxjr( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['strict'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['levels'] );
}
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_6n4xfsrcre7 ? true : $m4is_6p2tyvq6paj43svrn7zqaykxzy;

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_6p2tyvq6paj43svrn7zqaykxzy );

$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_0k4q3ej68p4fenz2dfq2njahnad9x3n( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'except_contact_ids' => '',
'except_contactid' => '',
'except_tag_ids' => '',
'except_tagid' =>
 '',
'tagid' => '',
'tag_ids' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_6n4xfsrcre7 = self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp();
$m4is_paccvtcm = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_tagid'] = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_tagid'] . ',' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_tag_ids'],
 ', ' );
$m4is_r5xxp26ngvy8grpa5w8qpt48z = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_contactid'] = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_contactid'] . ',' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except_contact_ids'],
 ', ' );
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagid'] = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagid'] . ',' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_ids'],
 ', ' );
if ( empty( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) ) {
return '';
}
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ? self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) : false;

if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
$m4is_r5xxp26ngvy8grpa5w8qpt48z = array_filter( explode( ',', $m4is_r5xxp26ngvy8grpa5w8qpt48z ) );

if ( count( $m4is_r5xxp26ngvy8grpa5w8qpt48z ) && in_array( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_r5xxp26ngvy8grpa5w8qpt48z ) ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;

}
}
if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
if ( $m4is_paccvtcm > '' && self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_paccvtcm ) ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;

}
}
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_6n4xfsrcre7 ? true : $m4is_6p2tyvq6paj43svrn7zqaykxzy;
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, ! $m4is_6p2tyvq6paj43svrn7zqaykxzy );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;

}

static function m4is_as1bkvwezg9z8jvyg6r66e0tt8m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'caseinsensitive' => true,
'key' => '',
'test' => '=',
'txtfmt' => '',
'value' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_xcb9hm65 = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['caseinsensitive'],
 false );
$m4is_j8j55t8dz79m7 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['key'] );
$m4is_garkwrr8cykdaftyj = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['test'] );

$m4is_rqxytszfq5v6syth1csqqxvy5 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'] );
if ( empty( $m4is_j8j55t8dz79m7 ) ) {
return '';

}
if ( empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['test'] == '=' ) {
$m4is_1we1qc8rdsrfq = isset( $_COOKIE[$m4is_j8j55t8dz79m7] );

}
else {
$m4is_40ry1n1jbp68tz79na256vw53eph = isset( $_COOKIE[$m4is_j8j55t8dz79m7] ) ? trim( $_COOKIE[$m4is_j8j55t8dz79m7] ) : '';

$m4is_1we1qc8rdsrfq = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_xa6fsr0pb2yemz613( $m4is_40ry1n1jbp68tz79na256vw53eph, $m4is_garkwrr8cykdaftyj,
 $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_xcb9hm65 );
}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_1we1qc8rdsrfq );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;

}

static function m4is_xh23r53h2v4v( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'caseinsensitive' => true,
'key' => '',
'test' => '=',
'txtfmt' => '',
'value' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_xcb9hm65 = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['caseinsensitive'],
 false );
$m4is_j8j55t8dz79m7 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['key'] );
$m4is_garkwrr8cykdaftyj = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['test'] );

$m4is_rqxytszfq5v6syth1csqqxvy5 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'] );
if ( empty( $m4is_j8j55t8dz79m7 ) ) {
return '';

}
if ( empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) && $m4is_garkwrr8cykdaftyj == '=') {
$m4is_1we1qc8rdsrfq = isset( $_GET[$m4is_j8j55t8dz79m7] );

}
else {
$m4is_g823mgf1pefpgnmdab4sd = isset( $_GET[$m4is_j8j55t8dz79m7] ) ? trim( $_GET[$m4is_j8j55t8dz79m7] ) : '';
$m4is_1we1qc8rdsrfq = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_xa6fsr0pb2yemz613( $m4is_g823mgf1pefpgnmdab4sd,
 $m4is_garkwrr8cykdaftyj, $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_xcb9hm65 );
}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, TRUE, $m4is_1we1qc8rdsrfq );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;

}

static function m4is_mwnscyehcec6ae9evzce0f1pn5h1h6( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'caseinsensitive' => true,
'key' => '',
'test' => '=',
'txtfmt' => '',
'value' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_xcb9hm65 = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['caseinsensitive'],
 false );
$m4is_j8j55t8dz79m7 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['key'] );
$m4is_garkwrr8cykdaftyj = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['test'] );

$m4is_rqxytszfq5v6syth1csqqxvy5 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'] );
if ( empty( $m4is_j8j55t8dz79m7 ) ) {
return '';

}
if ( empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) && $m4is_garkwrr8cykdaftyj == '=' ) {
$m4is_1we1qc8rdsrfq = isset( $_POST[$m4is_j8j55t8dz79m7] );

}
else {
$m4is_36027fqh404v89bqz4g = isset( $_POST[$m4is_j8j55t8dz79m7] ) ? trim( $_POST[$m4is_j8j55t8dz79m7] ) : '';
$m4is_1we1qc8rdsrfq = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_xa6fsr0pb2yemz613( $m4is_36027fqh404v89bqz4g,
 $m4is_garkwrr8cykdaftyj, $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_xcb9hm65 );
}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, TRUE, $m4is_1we1qc8rdsrfq );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;

}

static function m4is_j0xkyksxfs68gp29ds08w1ze( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'caseinsensitive' => true,
'key' => '',
'test' => '=',
'txtfmt' => '',
'value' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_xcb9hm65 = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['caseinsensitive'],
 false );
$m4is_j8j55t8dz79m7 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['key'] );
$m4is_garkwrr8cykdaftyj = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['test'] );

$m4is_rqxytszfq5v6syth1csqqxvy5 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'] );
if ( empty( $m4is_j8j55t8dz79m7 ) ) {
return '';

}
if ( empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) && $m4is_garkwrr8cykdaftyj == '=' ) {
$m4is_1we1qc8rdsrfq = isset( $_REQUEST[$m4is_j8j55t8dz79m7] );

}
else {
$m4is_j2mqr0f6pex0 = isset( $_REQUEST[$m4is_j8j55t8dz79m7] ) ? $_REQUEST[$m4is_j8j55t8dz79m7] : '';
$m4is_1we1qc8rdsrfq = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_xa6fsr0pb2yemz613( $m4is_j2mqr0f6pex0,
 $m4is_garkwrr8cykdaftyj, $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_xcb9hm65 );
}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, TRUE, $m4is_1we1qc8rdsrfq );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;

}

static function m4is_pqd86eag8ee8xz5myf4x08dc( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'name' => '',
'test' => 'show',
'txtfmt' => '',
'val' => 0,
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return '';

}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_hce1y1a4qd65zhnwsj = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name'] ) );
$m4is_garkwrr8cykdaftyj = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['test'] ) );

$m4is_rqxytszfq5v6syth1csqqxvy5 = (float) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['val'];
$m4is_kr9qf0fw8n555erpba0ydc0mdgxgy = (float) self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_6w88fagm04r76erxncm12aww8gh( $m4is_hce1y1a4qd65zhnwsj );

$m4is_1we1qc8rdsrfq = FALSE;
if ( in_array( $m4is_garkwrr8cykdaftyj, ['eq', '=', '==', '==='] ) ) {
$m4is_1we1qc8rdsrfq = ( $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy === $m4is_rqxytszfq5v6syth1csqqxvy5 );

}
elseif ( $m4is_garkwrr8cykdaftyj == 'gt' ) {
$m4is_1we1qc8rdsrfq = $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy > $m4is_rqxytszfq5v6syth1csqqxvy5;

}
elseif ($m4is_garkwrr8cykdaftyj == 'lt') {
$m4is_1we1qc8rdsrfq = $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy < $m4is_rqxytszfq5v6syth1csqqxvy5;

}
elseif ($m4is_garkwrr8cykdaftyj == 'le') {
$m4is_1we1qc8rdsrfq = $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy <= $m4is_rqxytszfq5v6syth1csqqxvy5;

}
elseif ($m4is_garkwrr8cykdaftyj == 'ge') {
$m4is_1we1qc8rdsrfq = $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy >= $m4is_rqxytszfq5v6syth1csqqxvy5;

}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, TRUE,
 $m4is_1we1qc8rdsrfq );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_5djjxs8r( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'browser' => '',
'capture' => '',
'os' => '',
'txtfmt' => '',
'type' => '',
'user' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_2hbz903tzgvnen2k0wa = true;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_gdh573rvrrd8ywqxv = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_pwjn3jb8zfr3xpxem( $_SERVER['HTTP_USER_AGENT'] );

$m4is_zwgzgc4pm0xa107c642av57h7 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['browser'] = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['browser'] ) );

$m4is_q0751t4tp64n0gtf2c = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['os'] = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['os'] ) );

$m4is_h7zwy5f0w3y9gx3wm = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['type'] = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['type'] ) );

$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['user'] = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['user'] ) );

if ( ! empty( $m4is_zwgzgc4pm0xa107c642av57h7 ) && $m4is_zwgzgc4pm0xa107c642av57h7 !== $m4is_gdh573rvrrd8ywqxv['browser'] ) {
$m4is_2hbz903tzgvnen2k0wa = false;

}
if ( ! empty( $m4is_q0751t4tp64n0gtf2c ) && $m4is_q0751t4tp64n0gtf2c !== $m4is_gdh573rvrrd8ywqxv['os' ]) {
$m4is_2hbz903tzgvnen2k0wa = false;

}
if ( ! empty( $m4is_h7zwy5f0w3y9gx3wm ) && $m4is_h7zwy5f0w3y9gx3wm != $m4is_gdh573rvrrd8ywqxv['type'] ) {
$m4is_2hbz903tzgvnen2k0wa = false;

}
if ( ! empty( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['user'] != $m4is_gdh573rvrrd8ywqxv['user']) {
$m4is_2hbz903tzgvnen2k0wa = false;

}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true,
 $m4is_2hbz903tzgvnen2k0wa );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_rxv0farb6gnp1xmztyff0tvpm1a( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
if ( self::$m4is_zz74kb50 ) {
return;
}
$m4is_n7x0afpz = [
'capture' =>
 '',
'date_format' => 'F jS, Y',
'date' => '',
'days' => 0,
'months' => 0,
'tagids' => '',
'txtfmt' => '',
'weeks' => 0,
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_1we1qc8rdsrfq = false;
$m4is_6n4xfsrcre7 = self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp();

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_06c8s5xs94f91335gnaey25 = array_filter( explode( ',', trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagids'] ) ) );
$m4is_j51c05d5xpexybh7dgm8twm7nr7rks = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date'];

$m4is_tk817g6s424rams3865p2c2 = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['days'];
$m4is_prkz4zsx4k4t51w = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['weeks'];

$m4is_3ws9r9gskp3cv7ahpr = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['months'];
$m4is_tk817g6s424rams3865p2c2 = $m4is_tk817g6s424rams3865p2c2 + ( $m4is_prkz4zsx4k4t51w * 7 ) + ( $m4is_3ws9r9gskp3cv7ahpr * 30 );

if ( $m4is_tk817g6s424rams3865p2c2 < 1 && empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date'] ) ) {
return;
}
if ( $m4is_6n4xfsrcre7 ) {
$m4is_1we1qc8rdsrfq = true;

}
else {
if ( empty( $m4is_j51c05d5xpexybh7dgm8twm7nr7rks ) ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_j51c05d5xpexybh7dgm8twm7nr7rks = get_userdata( $m4is_wk4dh1rnd3wmwvsggq51nhn87 )->user_registered;
}
if ( $m4is_tk817g6s424rams3865p2c2 ) {
$m4is_v29hfdyj9h70vkb2tk = strtotime( sprintf( '%s + %s days',
 $m4is_j51c05d5xpexybh7dgm8twm7nr7rks, $m4is_tk817g6s424rams3865p2c2 ) );
}
else {
$m4is_v29hfdyj9h70vkb2tk = strtotime( $m4is_j51c05d5xpexybh7dgm8twm7nr7rks );

}
if ( $m4is_v29hfdyj9h70vkb2tk < time() ) {
$m4is_1we1qc8rdsrfq = true;
if ( ! empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
if ( ! self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_06c8s5xs94f91335gnaey25 ) ) {
$m4is_1we1qc8rdsrfq = false;

}
}
}
else {
$m4is_1we1qc8rdsrfq = false;
}
}
if ( $m4is_1we1qc8rdsrfq ) {
$m4is_bsamg3fezf = str_ireplace( '{{:date:}}', date( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'],
 $m4is_v29hfdyj9h70vkb2tk ), $m4is_bsamg3fezf );
$m4is_6zzny9y28xz0yc347xedqaecqymz9dcg = (int) ( ($m4is_v29hfdyj9h70vkb2tk - time() ) / 86400 );

$m4is_6zzny9y28xz0yc347xedqaecqymz9dcg .= $m4is_6zzny9y28xz0yc347xedqaecqymz9dcg > 1 ? ' days' : ' day';
$m4is_bsamg3fezf = str_ireplace( '{{:days:}}',
 $m4is_6zzny9y28xz0yc347xedqaecqymz9dcg, $m4is_bsamg3fezf );
$m4is_xa6skcz0x7je = (int) ( ($m4is_v29hfdyj9h70vkb2tk - time() ) / ( 7 * 86400 ) );

$m4is_xa6skcz0x7je .= $m4is_xa6skcz0x7je > 1 ? ' weeks' : ' week';
$m4is_bsamg3fezf = str_ireplace( '{{:weeks:}}', $m4is_xa6skcz0x7je,
 $m4is_bsamg3fezf );
$m4is_qjyyyr2xvbs036hns22r77abz9xynkyx = (int) ( ($m4is_v29hfdyj9h70vkb2tk - time() ) / ( 30 * 86400 ) );
$m4is_qjyyyr2xvbs036hns22r77abz9xynkyx .= $m4is_qjyyyr2xvbs036hns22r77abz9xynkyx > 1 ? ' months' : ' month';

$m4is_bsamg3fezf = str_ireplace( '{{:months:}}', $m4is_qjyyyr2xvbs036hns22r77abz9xynkyx, $m4is_bsamg3fezf );
$m4is_6zzny9y28xz0yc347xedqaecqymz9dcg = intval( ( $m4is_v29hfdyj9h70vkb2tk - time() - ( 7 * 86400 * $m4is_xa6skcz0x7je ) ) / 86400 );

$m4is_6zzny9y28xz0yc347xedqaecqymz9dcg .= $m4is_6zzny9y28xz0yc347xedqaecqymz9dcg > 1 ? ' days' : ' day';
$m4is_bsamg3fezf = str_ireplace('{{:compoundtime:}}',
 $m4is_xa6skcz0x7je . ' and ' . $m4is_6zzny9y28xz0yc347xedqaecqymz9dcg, $m4is_bsamg3fezf);
}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, TRUE, $m4is_1we1qc8rdsrfq );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;

}

static function m4is_cwrs6mk3ykqabx6s( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'date_format' => 'F jS, Y',
'end' => '',
'start' => '',
'tagids' => '',
'txtfmt' => '',
'tz' =>
 get_option( 'timezone_string' ),
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_7m5t5wdmky4xv3cz2tvha = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['start'];
$m4is_hbwgfxph5q4n0patvc = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['end'];

$m4is_06c8s5xs94f91335gnaey25 = array_filter( explode( ',', trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagids'] ) ) );
$m4is_s6d7x7p0m4pcjcawtt21hx8yxktrnnm = in_array( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tz'],
 timezone_identifiers_list() ) ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tz'] : get_option( 'timezone_string' );
$m4is_njfj5v2x27yz267xq7gdw7jbb = date_default_timezone_get();

$m4is_map8tdmsvarsn03f1fhfytx61b4a = time();
$m4is_1we1qc8rdsrfq = false;
if ( ! empty( $m4is_s6d7x7p0m4pcjcawtt21hx8yxktrnnm ) ) {
date_default_timezone_set( $m4is_s6d7x7p0m4pcjcawtt21hx8yxktrnnm );

}
$m4is_sa1qas12q1g = (int) strtotime( $m4is_7m5t5wdmky4xv3cz2tvha );
$m4is_jbh7cqbtwm37dw98gkpzkkvthwjbm8p0 = strtotime( $m4is_hbwgfxph5q4n0patvc ) ? (int) strtotime( $m4is_hbwgfxph5q4n0patvc ) : $m4is_map8tdmsvarsn03f1fhfytx61b4a + 1;

date_default_timezone_set( $m4is_njfj5v2x27yz267xq7gdw7jbb );
$m4is_1we1qc8rdsrfq = ( $m4is_map8tdmsvarsn03f1fhfytx61b4a > $m4is_sa1qas12q1g && $m4is_map8tdmsvarsn03f1fhfytx61b4a < $m4is_jbh7cqbtwm37dw98gkpzkkvthwjbm8p0 );


if ( ! empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
$m4is_1we1qc8rdsrfq = $m4is_1we1qc8rdsrfq && self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_06c8s5xs94f91335gnaey25 );

}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, TRUE,
 $m4is_1we1qc8rdsrfq );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}

static function m4is_fyq9gf6qndp67hqvqbdg4b98( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'date_format' => 'F jS, Y',
'date' => '',
'days' => 0,
'months' => 0,
'tagids' => '',
'txtfmt' =>
 '',
'weeks' => 0,
'years' => 0,
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_1we1qc8rdsrfq = false;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_j51c05d5xpexybh7dgm8twm7nr7rks = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date'] );

$m4is_06c8s5xs94f91335gnaey25 = array_filter( explode( ',', trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tagids'] ) ) );
$m4is_tk817g6s424rams3865p2c2 = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['days'];

$m4is_3ws9r9gskp3cv7ahpr = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['months'];
$m4is_prkz4zsx4k4t51w = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['weeks'];

$m4is_kv5zqr0h3tz59sj4vz0qhn7r03fzv = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['years'];
$m4is_tk817g6s424rams3865p2c2 = $m4is_tk817g6s424rams3865p2c2 + ( $m4is_prkz4zsx4k4t51w * 7 ) + ( $m4is_3ws9r9gskp3cv7ahpr * 30) + ( $m4is_kv5zqr0h3tz59sj4vz0qhn7r03fzv * 365 );

if ( empty( $m4is_j51c05d5xpexybh7dgm8twm7nr7rks ) ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_j51c05d5xpexybh7dgm8twm7nr7rks = get_userdata( $m4is_wk4dh1rnd3wmwvsggq51nhn87 )->user_registered;
$m4is_v29hfdyj9h70vkb2tk = strtotime( sprintf( '% + %s days',
 $m4is_j51c05d5xpexybh7dgm8twm7nr7rks, $m4is_tk817g6s424rams3865p2c2 ) );
}
else {
$m4is_v29hfdyj9h70vkb2tk = strtotime( $m4is_j51c05d5xpexybh7dgm8twm7nr7rks );

}
$m4is_1we1qc8rdsrfq = ( $m4is_v29hfdyj9h70vkb2tk > time() );
if (! empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
$m4is_1we1qc8rdsrfq = $m4is_1we1qc8rdsrfq && self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_06c8s5xs94f91335gnaey25 );

}
if ( $m4is_1we1qc8rdsrfq ) {
$m4is_bsamg3fezf = str_ireplace( '{{:date:}}', date( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'],
 $m4is_v29hfdyj9h70vkb2tk ), $m4is_bsamg3fezf );
$m4is_6zzny9y28xz0yc347xedqaecqymz9dcg = (int) ( ( $m4is_v29hfdyj9h70vkb2tk - time() ) / DAY_IN_SECONDS );

$m4is_6zzny9y28xz0yc347xedqaecqymz9dcg .= $m4is_6zzny9y28xz0yc347xedqaecqymz9dcg > 1 ? ' days' : ' day';
$m4is_bsamg3fezf = str_ireplace( '{{:days:}}',
 $m4is_6zzny9y28xz0yc347xedqaecqymz9dcg, $m4is_bsamg3fezf );
$m4is_xa6skcz0x7je = (int) ( ( $m4is_v29hfdyj9h70vkb2tk - time() ) / ( WEEK_IN_SECONDS ) );

$m4is_xa6skcz0x7je .= $m4is_xa6skcz0x7je > 1 ? ' weeks' : ' week';
$m4is_bsamg3fezf = str_ireplace( '{{:weeks:}}', $m4is_xa6skcz0x7je,
 $m4is_bsamg3fezf );
$m4is_qjyyyr2xvbs036hns22r77abz9xynkyx = (int) ( ( $m4is_v29hfdyj9h70vkb2tk - time() ) / ( 30 * DAY_IN_SECONDS ) );

$m4is_qjyyyr2xvbs036hns22r77abz9xynkyx .= $m4is_qjyyyr2xvbs036hns22r77abz9xynkyx > 1 ? ' months' : ' month';
$m4is_bsamg3fezf = str_ireplace('{{:months:}}',
 $m4is_qjyyyr2xvbs036hns22r77abz9xynkyx, $m4is_bsamg3fezf);
$m4is_xa6skcz0x7je = intval( ( $m4is_v29hfdyj9h70vkb2tk - time() - (7 * DAY_IN_SECONDS * $m4is_xa6skcz0x7je) ) / 86400 );

$m4is_xa6skcz0x7je .= $m4is_xa6skcz0x7je > 1 ? ' days' : ' day';
$m4is_bsamg3fezf = str_ireplace( '{{:compoundtime:}}', $m4is_xa6skcz0x7je . ' and ' . $m4is_6zzny9y28xz0yc347xedqaecqymz9dcg,
 $m4is_bsamg3fezf );
}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 true, $m4is_1we1qc8rdsrfq );
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
return $m4is_bsamg3fezf;
}
}
