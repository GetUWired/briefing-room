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


class_exists( 'm4is_5f4j9e1q39p6vht95a8xheen' ) || die();

final class m4is_9krdjk4ngkkt70wy5cnhhby39xtt6 {
private $m4is_132xe588j;
private $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;
private static $m4is_qwd40ee9xzr6mnv = [];

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}
private function __construct() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$this->m4is_5eragr7sh2yyj356m();

}

private function m4is_5eragr7sh2yyj356m() {
add_filter( 'learndash_shortcode_atts', [$this, 'm4is_aba07exnam0216fycabxnr'], 10,
 2 );
add_action( 'memberium/shortcodes/add', [$this, 'm4is_b54vhq6wx87hv1afswawcgr0r30p8'] );
add_action( 'memberium/shortcodes/remove',
 [$this, 'm4is_bbddhq8ernj9ejg9vsbp1xt'] );
add_filter( 'learndash_get_lesson_list_args', [$this, 'm4is_2rwx011m6a2q'], 10, 3 );
add_filter( 'learndash_course_completion_url',
 [$this, 'm4is_rzsrhsfs5zvfd22vce7290756aq'], 5, 2 );
add_filter( 'memberium/lms/course/item/data', [$this, 'm4is_8kee4a68n7jjxczh'],
 10, 2 );
add_filter( 'memberium/registration_fields/custom', [$this, 'm4is_67pnpa7bqqarbkzngxxyrg24vcpka'], 10, 1 );
add_filter( 'ld_lesson_access_from',
 [$this, 'm4is_fkk1e0eh4tnmqcf826sf88'], PHP_INT_MAX, 3);
add_filter( 'sfwd_lms_has_access', [$this, 'm4is_45stkddgdk'], PHP_INT_MAX,
 3 );
add_filter( 'learndash_can_user_read_step', [$this, 'm4is_spt575mxcg8gf4d'], 10, 3 );
add_filter( 'learndash_content_access',
 [$this, 'm4is_q05x2qpj2pg4vghmshj0t'], 5, 2 );
add_action( 'init', [$this, 'm4is_3t1ks5hhzx'] );
$this->m4is_b54vhq6wx87hv1afswawcgr0r30p8();

}

function m4is_3t1ks5hhzx() : void {
if ( empty( $_POST['memb_form_type'] ) ) {
return;
}
$m4is_ebtwc57h1eyb1qbh = [
'memberium/learndash/delete_history' =>
 ['m4is_465bq4tc9zr7fwj6f5171reej', 'm4is_f8kyp1k5endaedfe6w2t7s8y30exq'],
];
if ( ! array_key_exists( $_POST['memb_form_type'], $m4is_ebtwc57h1eyb1qbh ) ) {
return;

}
call_user_func( $m4is_ebtwc57h1eyb1qbh[ $_POST['memb_form_type'] ] );
}

public function m4is_rzsrhsfs5zvfd22vce7290756aq( $m4is_65aka8xf2h8j,
 $m4is_tz1rt7sbq40fade6e6rx ) {
$m4is_pqecxfec342ksq5fzv1mg = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx, '_is4wp_learndash_redirect',
 TRUE );
if ( $m4is_pqecxfec342ksq5fzv1mg ) {
return do_shortcode( $m4is_pqecxfec342ksq5fzv1mg );
}
else {
return $m4is_65aka8xf2h8j;

}
}

public function m4is_45stkddgdk( $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_tz1rt7sbq40fade6e6rx, $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$m4is_tz1rt7sbq40fade6e6rx = (int) $m4is_tz1rt7sbq40fade6e6rx;

$m4is_rqxytszfq5v6syth1csqqxvy5 = (bool) $m4is_rqxytszfq5v6syth1csqqxvy5;

if ( ! $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
return $m4is_rqxytszfq5v6syth1csqqxvy5;

}

if ( get_post_type( $m4is_tz1rt7sbq40fade6e6rx ) !== 'sfwd-courses' ) {
return $m4is_rqxytszfq5v6syth1csqqxvy5;
}

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_wk4dh1rnd3wmwvsggq51nhn87 ? $m4is_wk4dh1rnd3wmwvsggq51nhn87 : $this->m4is_132xe588j->m4is_vd3qpw0vkdm();


if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'edit_others_posts' ) || user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'edit_post', $m4is_tz1rt7sbq40fade6e6rx ) ) {
return true;
}
}
return $this->m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_krs2avqy019m3mx( (int) $m4is_tz1rt7sbq40fade6e6rx,
 (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}

public function m4is_aba07exnam0216fycabxnr( $m4is_j3afa3thyq8jqpe73x4h7q, $m4is_6k84v5caq4k ) {
if ( empty( $m4is_j3afa3thyq8jqpe73x4h7q['post__in'] ) ) {
return $m4is_j3afa3thyq8jqpe73x4h7q;

}
if ( ! is_array( $m4is_j3afa3thyq8jqpe73x4h7q['post__in'] ) ) {
return $m4is_j3afa3thyq8jqpe73x4h7q;
}
foreach( $m4is_j3afa3thyq8jqpe73x4h7q['post__in'] as $m4is_j8j55t8dz79m7 =>
 $m4is_tz1rt7sbq40fade6e6rx ) {
if ( ! $this->m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_krs2avqy019m3mx( $m4is_tz1rt7sbq40fade6e6rx ) ) {
unset( $m4is_j3afa3thyq8jqpe73x4h7q['post__in'][$m4is_j8j55t8dz79m7] );

}
}
return $m4is_j3afa3thyq8jqpe73x4h7q;
}

public function m4is_2rwx011m6a2q( $m4is_g61yzqs7ecta0xztr70d7v, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_fgq4xtdb8 ) {
if ( empty( $m4is_g61yzqs7ecta0xztr70d7v['post__in'] ) || ! is_array( $m4is_g61yzqs7ecta0xztr70d7v['post__in'] ) ) {
return $m4is_g61yzqs7ecta0xztr70d7v;

}
foreach( $m4is_g61yzqs7ecta0xztr70d7v['post__in'] as $m4is_j8j55t8dz79m7 => $m4is_tz1rt7sbq40fade6e6rx ) {
if ( ! $this->m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_krs2avqy019m3mx( $m4is_tz1rt7sbq40fade6e6rx ) ) {
unset( $m4is_g61yzqs7ecta0xztr70d7v['post__in'][$m4is_j8j55t8dz79m7] );

}
}
return $m4is_g61yzqs7ecta0xztr70d7v;
}

public function m4is_67pnpa7bqqarbkzngxxyrg24vcpka( $m4is_b73qrd73yttyc75 ) {
$m4is_tfaznhz3ag9tv51w6nqzf91 = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,
 15);
foreach($m4is_tfaznhz3ag9tv51w6nqzf91 as $m4is_pyw8qn0cxt32) {
if ($m4is_pyw8qn0cxt32['function'] == 'learndash_login_shortcode') {
return true;

}
}
return $m4is_b73qrd73yttyc75;
}


public function m4is_8kee4a68n7jjxczh( array $m4is_d60kn1d3yvprp62rs332, int $m4is_tz1rt7sbq40fade6e6rx ) {
if (get_post_type($m4is_tz1rt7sbq40fade6e6rx) !== 'sfwd-courses') {
return $m4is_d60kn1d3yvprp62rs332;

}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_pk98f5nk = get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_sfwd-courses', true);
$m4is_d60kn1d3yvprp62rs332['access'] = sfwd_lms_has_access($m4is_tz1rt7sbq40fade6e6rx, $m4is_wk4dh1rnd3wmwvsggq51nhn87);



if( ! $m4is_d60kn1d3yvprp62rs332['access'] ){
$m4is_d60kn1d3yvprp62rs332['status'] = 'locked';
return $m4is_d60kn1d3yvprp62rs332;

}

$m4is_d728k3twcey071cb555xrg7pzx = learndash_course_progress([
'course_id' => $m4is_tz1rt7sbq40fade6e6rx,
'user_id' => $m4is_wk4dh1rnd3wmwvsggq51nhn87,

'array' => true,
]);
$m4is_d60kn1d3yvprp62rs332['progress'] = ( $m4is_d728k3twcey071cb555xrg7pzx && !empty($m4is_d728k3twcey071cb555xrg7pzx['percentage']) ) ? $m4is_d728k3twcey071cb555xrg7pzx['percentage'] : 0;

$m4is_d60kn1d3yvprp62rs332['status'] = 'locked'; 
$m4is_nz8t6tzp84wgejyhkvt = isset($m4is_pk98f5nk['sfwd-courses_course_price_type']) ? $m4is_pk98f5nk['sfwd-courses_course_price_type'] : 'open';

if( in_array($m4is_nz8t6tzp84wgejyhkvt, ['open', 'free']) ){
$m4is_d60kn1d3yvprp62rs332['status'] = 'unlocked';
}
else if ( in_array($m4is_nz8t6tzp84wgejyhkvt,
 ['paynow', 'closed', 'subscribe']) ){
if( $m4is_d60kn1d3yvprp62rs332['access'] ) {
$m4is_d60kn1d3yvprp62rs332['status'] = 'unlocked';

}
}
if( $m4is_d60kn1d3yvprp62rs332['status'] !== 'locked' ){
if( ! learndash_is_course_prerequities_completed( $m4is_tz1rt7sbq40fade6e6rx ) ) {
$m4is_d60kn1d3yvprp62rs332['status'] = 'locked';
 
}
}
return $m4is_d60kn1d3yvprp62rs332;
}

public function m4is_spt575mxcg8gf4d( $m4is_r7mxjxrgcx, $m4is_b2c5zy06, $m4is_fgq4xtdb8 ) {
if ( $m4is_r7mxjxrgcx ) {
$m4is_r7mxjxrgcx = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_krs2avqy019m3mx( $m4is_b2c5zy06 );

}
return $m4is_r7mxjxrgcx;
}

public function m4is_q05x2qpj2pg4vghmshj0t( $m4is_d1pparkqzk1wvcb8n2xq3tqj, $m4is_z4ts5pa39jf1yhjb4 ) {
if ( method_exists( m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef(),
 'm4is_krs2avqy019m3mx') ) {
$m4is_1we1qc8rdsrfq = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_krs2avqy019m3mx( $m4is_z4ts5pa39jf1yhjb4->ID );

if ( ! $m4is_1we1qc8rdsrfq ) {
return $m4is_z4ts5pa39jf1yhjb4->excerpt;
}
}
return null;
}

public function m4is_b54vhq6wx87hv1afswawcgr0r30p8() : void {
$m4is_ffyb8d4kv3mgyr5etg = 'm4is_syka57kayfck40f6hyzscy919';

add_shortcode( 'memb_learndash_is_completed', [$m4is_ffyb8d4kv3mgyr5etg, 'm4is_jd1x893846rdgc1m149wwtrjtjqxt']);
add_shortcode( 'memb_learndash_is_enrolled',
 [$m4is_ffyb8d4kv3mgyr5etg, 'm4is_67a38vjc8pc']);
add_shortcode( 'memb_learndash_course_enroll', [$m4is_ffyb8d4kv3mgyr5etg, 'm4is_jrp495h386x1ta0c']);

add_shortcode( 'memb_learndash_course_unenroll', [$m4is_ffyb8d4kv3mgyr5etg, 'm4is_jrp495h386x1ta0c']);
add_shortcode( 'memb_learndash_course_reset',
 [$m4is_ffyb8d4kv3mgyr5etg, 'm4is_8hhk2q2v3j3']);
}

public function m4is_bbddhq8ernj9ejg9vsbp1xt() : void {
remove_shortcode( 'memb_learndash_course_enroll' );

remove_shortcode( 'memb_learndash_course_unenroll' );
remove_shortcode( 'memb_learndash_is_completed' );
remove_shortcode( 'memb_learndash_is_enrolled' );

}

public function m4is_fkk1e0eh4tnmqcf826sf88( $m4is_30jfejvnsd2fv7p, $m4is_86gkmtwpcpp, $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$m4is_ekyj9n5rb0 = time();

if ( $m4is_30jfejvnsd2fv7p < $m4is_ekyj9n5rb0 ) {
return $m4is_30jfejvnsd2fv7p;
}
static $m4is_d60kn1d3yvprp62rs332 = [];
$m4is_fgq4xtdb8 = learndash_get_course_id( $m4is_86gkmtwpcpp );


if( ! isset( $m4is_d60kn1d3yvprp62rs332[$m4is_fgq4xtdb8] ) ) {
$m4is_d60kn1d3yvprp62rs332[$m4is_fgq4xtdb8] = [
'tags' => get_post_meta( $m4is_fgq4xtdb8,
 '_is4wp_learndash_drip_feed_override', true ),
'users' => []
];
}

if( empty($m4is_d60kn1d3yvprp62rs332[$m4is_fgq4xtdb8]['users'][$m4is_wk4dh1rnd3wmwvsggq51nhn87]) ){
if( !empty($m4is_d60kn1d3yvprp62rs332[$m4is_fgq4xtdb8]['tags']) ){
$m4is_d60kn1d3yvprp62rs332[$m4is_fgq4xtdb8]['users'][$m4is_wk4dh1rnd3wmwvsggq51nhn87] = $this->m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_7sg9f2ayr7phwk21e754en2t805d( false,
 [
'tags1' => $m4is_d60kn1d3yvprp62rs332[$m4is_fgq4xtdb8]['tags']
]);
}
else{
$m4is_d60kn1d3yvprp62rs332[$m4is_fgq4xtdb8]['users'][$m4is_wk4dh1rnd3wmwvsggq51nhn87] = false;

}
}
return $m4is_d60kn1d3yvprp62rs332[$m4is_fgq4xtdb8]['users'][$m4is_wk4dh1rnd3wmwvsggq51nhn87] ? null : $m4is_30jfejvnsd2fv7p;
}
}