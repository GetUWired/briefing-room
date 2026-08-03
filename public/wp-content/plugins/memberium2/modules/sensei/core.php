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

final class m4is_64dpg5d5g2h87ra0fsbb6d {
private $m4is_132xe588j;
private $m4is_ws4hy1akns77jyz44jgwh1 = [];

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();


$this->m4is_5eragr7sh2yyj356m();
if ( ! is_admin() ) {
return;
}

require_once __DIR__ . '/admin.php';

m4is_8yphrwtx8jtggt7z1965hkcp1j1kj::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}

private function m4is_5eragr7sh2yyj356m() {
add_action('memberium/session/updated', [$this, 'm4is_y7m90dx9cvkzh5aav5gkva'], 10,
 2);
add_action('init', [$this, 'm4is_xaxng3zm5cj8dbv7zbym7v33yfxjyg'], PHP_INT_MAX);
add_action('sensei_user_lesson_end', [$this, 'm4is_55jv9z593zqegm3gbmw'],
 10, 2);
add_action('sensei_user_course_end', [$this, 'm4is_07192x96fkz6dw'], 10, 2);
add_action('sensei_user_quiz_grade', [$this, 'm4is_vj2q8zfz0rtb'],
 100, 5);
add_filter('memberium/lms/name', [$this, 'm4is_2xj965hgg0crp4kyxkfvwg7n1g3p2adx']);
add_filter('memberium/lms/module_post_types',
 [$this, 'm4is_wn6jwf2ctp1e0']);
add_filter('memberium/lms/course_type', [$this, 'm4is_he385j8t91fkknaxec0qk']);
add_filter('memberium/lms/course_category',
 [$this, 'm4is_qhtcah9rdt69ka003dz830y7ysnjf0h']);
add_filter('memberium/lms/course_tag', [$this, 'm4is_hqkxp627k782j2f']);
add_filter('memberium/lms/user/course/progress',
 [$this, 'm4is_1p0j5q6f66ehn7p1ret2bbsa9s5tf'], 100, 2);
add_filter('memberium/lms/course/item/data', [$this, 'm4is_8kee4a68n7jjxczh'],
 10, 2);
add_filter('memberium/modules/active/names', function($m4is_jq2e3019hp45103bhm95sxmccqd8) {
return array_merge($m4is_jq2e3019hp45103bhm95sxmccqd8,
 ['WooSensei for Memberium']);
});
}




public function m4is_2xj965hgg0crp4kyxkfvwg7n1g3p2adx( $m4is_hce1y1a4qd65zhnwsj ) : string {
return 'Sensei';

}

function m4is_he385j8t91fkknaxec0qk( $m4is_yhdk2h7srcr7n5mzjnw7m6b ) : string {
return 'course';
}

function m4is_qhtcah9rdt69ka003dz830y7ysnjf0h( $m4is_rwvhr14tkxcjnhnsrhab1n706cbq ) : string {
return 'course-category';

}

public function m4is_hqkxp627k782j2f( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) : string {

return 'module';
}

public function m4is_wn6jwf2ctp1e0( $m4is_zpbgfgfkqf2c4ast12shxs8gthy = [] ) {

return array_merge( $m4is_zpbgfgfkqf2c4ast12shxs8gthy,
 [
'course',
'lesson',
]);
}




private function m4is_fe87jwebf7hfzrb( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_86gkmtwpcpp ) {
global $wpdb;


$m4is_86gkmtwpcpp = (int) $m4is_86gkmtwpcpp;
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `comment_ID` FROM `{$wpdb->comments}` WHERE `comment_post_ID` = {$m4is_86gkmtwpcpp} AND `user_id` = {$m4is_wk4dh1rnd3wmwvsggq51nhn87} AND `comment_approved` = 'passed' AND `comment_type` = 'sensei_lesson_status';";


$m4is_6e9sxsc51qr2b62n28ywxb9w = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

if ( $m4is_6e9sxsc51qr2b62n28ywxb9w ) {
$m4is_prqgkvs359 = get_comment_meta( $m4is_6e9sxsc51qr2b62n28ywxb9w );

}

else {
$m4is_prqgkvs359 = [];
}

return $m4is_prqgkvs359;
}

private function m4is_1p0j5q6f66ehn7p1ret2bbsa9s5tf( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_fgq4xtdb8 ) {

global $wpdb;

$m4is_fgq4xtdb8 = (int) $m4is_fgq4xtdb8;
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87;


$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `comment_ID` FROM `{$wpdb->comments}` WHERE `comment_post_ID` = {$m4is_fgq4xtdb8} AND `user_id` = {$m4is_wk4dh1rnd3wmwvsggq51nhn87} AND `comment_approved` = 'complete' AND `comment_type` = 'sensei_course_status';";

$m4is_6e9sxsc51qr2b62n28ywxb9w = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

if ( $m4is_6e9sxsc51qr2b62n28ywxb9w ) {
$m4is_prqgkvs359 = get_comment_meta( $m4is_6e9sxsc51qr2b62n28ywxb9w );

}

else {
$m4is_prqgkvs359 = [];
}

return $m4is_prqgkvs359;
}

private function m4is_hdc4mc0tjw5b9yrx2tx7w7zaf9n( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_h7zwy5f0w3y9gx3wm, $m4is_83c6n7vrn ) {

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );


if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}

if ($m4is_h7zwy5f0w3y9gx3wm == 'course') {
$m4is_cw5we5ssm0zqq7b80 = $this->m4is_1p0j5q6f66ehn7p1ret2bbsa9s5tf($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_83c6n7vrn);
}
elseif ($m4is_h7zwy5f0w3y9gx3wm == 'lesson') {
$m4is_cw5we5ssm0zqq7b80 = $this->m4is_fe87jwebf7hfzrb($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_83c6n7vrn);
}
else {

return;
}

$m4is_0kdm2zprhs5b1 = get_post_meta($m4is_83c6n7vrn);

if (! empty($m4is_0kdm2zprhs5b1['_is4wp_lms_start_date'][0]) ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = isset($m4is_0kdm2zprhs5b1['_is4wp_lms_start_date'][0]) ? $m4is_0kdm2zprhs5b1['_is4wp_lms_start_date'][0] : '';

$m4is_r07bbq1vrfssxzw491ey1y7rm = isset($m4is_cw5we5ssm0zqq7b80['start'][0]) ? $m4is_cw5we5ssm0zqq7b80['start'][0] : '';
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_79fehqxa1c0nagpvcjk($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, $m4is_r07bbq1vrfssxzw491ey1y7rm);
}

if (! empty($m4is_0kdm2zprhs5b1['_is4wp_lms_complete_percent'][0]) ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = isset($m4is_0kdm2zprhs5b1['_is4wp_lms_complete_percent'][0]) ? $m4is_0kdm2zprhs5b1['_is4wp_lms_complete_percent'][0] : '';

$m4is_r07bbq1vrfssxzw491ey1y7rm = isset($m4is_cw5we5ssm0zqq7b80['percent'][0]) ? $m4is_cw5we5ssm0zqq7b80['percent'][0] : '';
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_79fehqxa1c0nagpvcjk($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, $m4is_r07bbq1vrfssxzw491ey1y7rm);
}

if ( ! empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_goals'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_5qyk7ea4p2nw8ph( $m4is_0kdm2zprhs5b1['_is4wp_learndash_goals'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}

if ( ! empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_tags'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $m4is_0kdm2zprhs5b1['_is4wp_learndash_tags'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}

if ( ! empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_actions'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_x5k6c7dm38wwaxnhnzse( $m4is_0kdm2zprhs5b1['_is4wp_learndash_actions'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}

do_action('memberium/lms/completion', $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_83c6n7vrn);

}

private function m4is_k281qyz9x43afej3bbkeg() {

global $wpdb;

$m4is_2s1dd0bv1cax3 = '_is4wp_learndash_autoenroll';

$m4is_yw71yps02fm17cve1ej7187r13we2g3 = $wpdb->posts;

$m4is_ave8cgyd7rb48 = $wpdb->postmeta;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `ID`, `meta_value` FROM `{$m4is_yw71yps02fm17cve1ej7187r13we2g3}`, `{$m4is_ave8cgyd7rb48}` WHERE post_status = 'publish' AND post_type = 'course' AND  post_id = ID AND meta_key = '{$m4is_2s1dd0bv1cax3}' AND meta_value > '' ";


$m4is_pbe6ph2dd0rk = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );

return $m4is_pbe6ph2dd0rk;
}

private function m4is_1ssagxab() {

return (int) sensei()->version;

}

private function m4is_xcs5jfm7gnk84ndjw( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_fgq4xtdb8 ) {

$m4is_t9svq56t4ysv1rsgy1g61g = $this->m4is_1ssagxab();


if ( $m4is_t9svq56t4ysv1rsgy1g61g == 2 ) {
Sensei_Utils::user_start_course( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_fgq4xtdb8 ); 
}

else {
try {
$m4is_zfjrkv8xw98dnn01yxk = new Sensei_Frontend;

$m4is_zfjrkv8xw98dnn01yxk->manually_enrol_learner( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_fgq4xtdb8 );
}

catch ( exception $m4is_8fgvg3tehnezha5jsc1ea807 ) {
$this->m4is_ws4hy1akns77jyz44jgwh1[] = [
'action' =>
 'add',
'user_id' => $m4is_wk4dh1rnd3wmwvsggq51nhn87,
'course_id' => $m4is_fgq4xtdb8,
];
}
}
}

private function m4is_71zj0qvv7hy9d413ttqra5q0w($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_fgq4xtdb8) {

$m4is_t9svq56t4ysv1rsgy1g61g = $this->m4is_1ssagxab();

if ($m4is_t9svq56t4ysv1rsgy1g61g == 2) {
sensei_utils::sensei_remove_user_from_course($m4is_fgq4xtdb8,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87);
}

else {
try {

$m4is_zfjrkv8xw98dnn01yxk = new Sensei_Frontend;
$m4is_ka0smvjc50f52v0n9fxtp2575 = Sensei_Course_Manual_Enrolment_Provider::instance();


sensei_utils::sensei_remove_user_from_course($m4is_fgq4xtdb8, $m4is_wk4dh1rnd3wmwvsggq51nhn87);
$m4is_ka0smvjc50f52v0n9fxtp2575->withdraw_learner( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_fgq4xtdb8);
}

catch (Exception $m4is_8fgvg3tehnezha5jsc1ea807) {
$this->m4is_ws4hy1akns77jyz44jgwh1[] = [
'action' => 'remove',

'user_id' => $m4is_wk4dh1rnd3wmwvsggq51nhn87,
'course_id' => $m4is_fgq4xtdb8,
];
}
}
}

public function m4is_xaxng3zm5cj8dbv7zbym7v33yfxjyg() {

if ( empty( $this->m4is_ws4hy1akns77jyz44jgwh1 ) ) {
return;
 
}

foreach( $this->m4is_ws4hy1akns77jyz44jgwh1 as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {

if ( $m4is_rqxytszfq5v6syth1csqqxvy5['action'] == 'add' ) {
$this->m4is_xcs5jfm7gnk84ndjw( $m4is_rqxytszfq5v6syth1csqqxvy5['user_id'],
 $m4is_rqxytszfq5v6syth1csqqxvy5['course_id'] );
unset( $this->m4is_ws4hy1akns77jyz44jgwh1[$m4is_j8j55t8dz79m7] ); 
}

if ( $m4is_rqxytszfq5v6syth1csqqxvy5['action'] == 'remove' ) {
$this->m4is_71zj0qvv7hy9d413ttqra5q0w( $m4is_rqxytszfq5v6syth1csqqxvy5['user_id'],
 $m4is_rqxytszfq5v6syth1csqqxvy5['course_id'] );
unset( $this->m4is_ws4hy1akns77jyz44jgwh1[$m4is_j8j55t8dz79m7] ); 
}
}
}

public function m4is_y7m90dx9cvkzh5aav5gkva( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_6mctr922hbmncpwfrp0x2k ) {

if (user_can($m4is_wk4dh1rnd3wmwvsggq51nhn87, 'manage_options')) {
return; 
}

$m4is_pbe6ph2dd0rk = $this->m4is_k281qyz9x43afej3bbkeg();


if (empty($m4is_pbe6ph2dd0rk) || ! is_array($m4is_pbe6ph2dd0rk)) {
return; 
}

$m4is_bpxq4mxc9brf1 = $this->m4is_1ssagxab();
$m4is_eb74p0wje7yw151 = empty($m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups']) ? '' : $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'];


foreach ($m4is_pbe6ph2dd0rk as $m4is_z4ts5pa39jf1yhjb4) {

$m4is_2ctw2g136v4t7z5ay = $m4is_z4ts5pa39jf1yhjb4['meta_value'];
$m4is_fgq4xtdb8 = $m4is_z4ts5pa39jf1yhjb4['ID'];


$m4is_drm2nks193manac79kjka197c4rs9m = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_dy9qsc49he4($m4is_2ctw2g136v4t7z5ay,
 $m4is_eb74p0wje7yw151);
$m4is_bn4ws7z7vk = sensei_utils::has_started_course($m4is_fgq4xtdb8, $m4is_wk4dh1rnd3wmwvsggq51nhn87);

if ($m4is_bn4ws7z7vk !== $m4is_drm2nks193manac79kjka197c4rs9m) {
if ($m4is_drm2nks193manac79kjka197c4rs9m) {

$this->m4is_xcs5jfm7gnk84ndjw($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_fgq4xtdb8);
}
else {

$this->m4is_71zj0qvv7hy9d413ttqra5q0w($m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_fgq4xtdb8);
}
}
}
}

public function m4is_vj2q8zfz0rtb($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_ge9dqmhegbghxx0fp44tezh5sefx, $m4is_y20wdekh6re020fn7y7kv1gmb1351, $m4is_d6g4w7tyc3kqy7n, $m4is_2n242xmc7x2vrmjyhrhcv) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_yzq91kmwfs3nay59kbefgrh = wp_get_post_parent_id( $m4is_ge9dqmhegbghxx0fp44tezh5sefx );

$m4is_h7zwy5f0w3y9gx3wm = get_post_type( $m4is_yzq91kmwfs3nay59kbefgrh );
$m4is_0kdm2zprhs5b1 = get_post_meta($m4is_ge9dqmhegbghxx0fp44tezh5sefx);


if (!empty($m4is_0kdm2zprhs5b1['_is4wp_lms_grade'][0])) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = isset($m4is_0kdm2zprhs5b1['_is4wp_lms_grade'][0]) ? $m4is_0kdm2zprhs5b1['_is4wp_lms_grade'][0] : '';

$m4is_r07bbq1vrfssxzw491ey1y7rm = $m4is_y20wdekh6re020fn7y7kv1gmb1351;
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_79fehqxa1c0nagpvcjk($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, "{$m4is_r07bbq1vrfssxzw491ey1y7rm}");
}

if (!empty($m4is_0kdm2zprhs5b1['_is4wp_lms_completed'][0])) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = isset($m4is_0kdm2zprhs5b1['_is4wp_lms_completed'][0]) ? $m4is_0kdm2zprhs5b1['_is4wp_lms_completed'][0] : '';

$m4is_r07bbq1vrfssxzw491ey1y7rm = (int) ($m4is_y20wdekh6re020fn7y7kv1gmb1351 >= $m4is_d6g4w7tyc3kqy7n);
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_79fehqxa1c0nagpvcjk($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, $m4is_r07bbq1vrfssxzw491ey1y7rm);
}

do_action('memberium/lms/completion', $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_ge9dqmhegbghxx0fp44tezh5sefx );
}

public function m4is_55jv9z593zqegm3gbmw( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_86gkmtwpcpp ) {

$this->m4is_hdc4mc0tjw5b9yrx2tx7w7zaf9n( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'lesson', $m4is_86gkmtwpcpp );
}

public function m4is_07192x96fkz6dw( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_fgq4xtdb8 ) {

$this->m4is_hdc4mc0tjw5b9yrx2tx7w7zaf9n($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'course', $m4is_fgq4xtdb8);
}

public function m4is_8kee4a68n7jjxczh( array $m4is_d60kn1d3yvprp62rs332, int $m4is_tz1rt7sbq40fade6e6rx ) {
if ( get_post_type( $m4is_tz1rt7sbq40fade6e6rx ) !== 'course') {
return $m4is_d60kn1d3yvprp62rs332;

}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_d60kn1d3yvprp62rs332['access'] = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_krs2avqy019m3mx($m4is_tz1rt7sbq40fade6e6rx,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87);

if( ! $m4is_d60kn1d3yvprp62rs332['access'] ){
$m4is_d60kn1d3yvprp62rs332['status'] = 'locked';
return $m4is_d60kn1d3yvprp62rs332;

}

$m4is_d60kn1d3yvprp62rs332['access'] = Sensei()->course->is_user_enrolled( $m4is_tz1rt7sbq40fade6e6rx, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );


if( ! $m4is_d60kn1d3yvprp62rs332['access'] ){
if( ! Sensei()->course->can_current_user_manually_enrol($m4is_tz1rt7sbq40fade6e6rx) ){
$m4is_d60kn1d3yvprp62rs332['status'] = 'locked';

return $m4is_d60kn1d3yvprp62rs332;
}

else{
$m4is_d60kn1d3yvprp62rs332['access'] = 1;
$m4is_d60kn1d3yvprp62rs332['status'] = 'not_enrolled';

}
}

if( ! Sensei()->course->is_prerequisite_complete($m4is_tz1rt7sbq40fade6e6rx) ){

$m4is_d60kn1d3yvprp62rs332['access'] = 0;
$m4is_d60kn1d3yvprp62rs332['status'] = 'locked';

return $m4is_d60kn1d3yvprp62rs332;
}

$m4is_d60kn1d3yvprp62rs332['progress'] = Sensei()->course->get_completion_percentage( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

return $m4is_d60kn1d3yvprp62rs332;
}

}