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

m4is_avrk98nvt32hmze4nejzcna11wh::m4is_z6c3r724qhd();
final class m4is_avrk98nvt32hmze4nejzcna11wh {
static private $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;

static private $m4is_132xe588j;
static function m4is_z6c3r724qhd() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'memberium';
}
static function m4is_15wfh83jxkpzg4k43fsx7f4m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
$m4is_1we1qc8rdsrfq = current_user_can( 'manage_options' );

$m4is_n7x0afpz = [
'capture' => '',
'not' => false,
'txtfmt' => '',
'type' => '',
];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['type'] = strtolower( trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['type'] ) );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] = ! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not']);

if ($m4is_wk4dh1rnd3wmwvsggq51nhn87) {
if (! $m4is_1we1qc8rdsrfq) {
if ( function_exists( 'bp_get_member_type') ) {
$m4is_rt3es2vtmvhpp355f8a0 = '';

$m4is_63jp3myxhpk1eyb606fb = bp_get_member_type( $m4is_wk4dh1rnd3wmwvsggq51nhn87, false );
if ( in_array( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['type'],
 $m4is_63jp3myxhpk1eyb606fb ) ) {
$m4is_1we1qc8rdsrfq = true;
};
}
}
}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] == true ) {
$m4is_1we1qc8rdsrfq = ! $m4is_1we1qc8rdsrfq;

}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, TRUE,
 $m4is_1we1qc8rdsrfq );
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_bsamg3fezf, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
}
static function m4is_pr3w8st48n3($m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = null,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
$m4is_n7x0afpz = [
'img_size' => '120',
];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_g61yzqs7ecta0xztr70d7v = [
'type' => 'alphabetical',

'per_page' => 999
];
$m4is_sghxjdjdxnp4gch1x7 = $m4is_n79rn4yv31hrq9g7a88yr91f = BP_Groups_Group::get( $m4is_g61yzqs7ecta0xztr70d7v );

echo '<pre>', print_r( $m4is_sghxjdjdxnp4gch1x7, true ), '</pre>';
}
}