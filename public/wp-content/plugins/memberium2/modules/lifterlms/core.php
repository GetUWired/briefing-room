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

final class m4is_bqq2md6vc8pv {
private $m4is_132xe588j;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_5eragr7sh2yyj356m();
$this->m4is_r8emp2zcmhv1twqx3qx8mv();
}
private function m4is_r8emp2zcmhv1twqx3qx8mv() : void {
if ( is_admin() ) {
include __DIR__ . '/admin.php';

m4is_c4447857jk3ha3::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
}
private function m4is_5eragr7sh2yyj356m() : void {
add_action( 'lifterlms_course_completed',
 [$this, 'm4is_24301gshrv5qd04j'], 5, 2 );
add_action( 'lifterlms_quiz_completed', [$this, 'm4is_t5kgy5vvxa10rc7hy6ak1w'], 5, 2 );
add_action( 'llms_trigger_lesson_completion',
 [$this, 'm4is_90zwfg7zjzq3sc54h83kkgn'], 5, 2 );
add_action( 'llms_user_added_to_membership_level', [$this, 'm4is_72wfm7yp'], 5, 2 );

add_action( 'llms_user_removed_from_membership_level', [$this, 'm4is_neae00d6bpyymbwc'], 5, 2 );
add_action( 'memberium/session/updated',
 [$this, 'm4is_tad2xqwr2dkj0b8jnqjhg'], 10, 2);
add_filter( 'memberium/lms/course_category', [$this, 'm4is_qhtcah9rdt69ka003dz830y7ysnjf0h']);

add_filter( 'memberium/lms/course_tag', [$this, 'm4is_hqkxp627k782j2f']);
add_filter( 'memberium/lms/course_type', [$this, 'm4is_he385j8t91fkknaxec0qk']);

add_filter( 'memberium/lms/course/item/data', [$this, 'm4is_8kee4a68n7jjxczh'], 10, 2);
}

function m4is_72wfm7yp( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_nctf6sc4v5npxn5der7ve5gs ) : void {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_pk98f5nk = get_post_meta( $m4is_nctf6sc4v5npxn5der7ve5gs );
}
}

function m4is_neae00d6bpyymbwc( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_nctf6sc4v5npxn5der7ve5gs ) : void {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_pk98f5nk = get_post_meta( $m4is_nctf6sc4v5npxn5der7ve5gs );
}
}
function m4is_24301gshrv5qd04j($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_fgq4xtdb8) {
$m4is_pk98f5nk = get_post_meta( $m4is_fgq4xtdb8 );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_goals'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_5qyk7ea4p2nw8ph( $m4is_pk98f5nk['_is4wp_learndash_goals'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_tags'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $m4is_pk98f5nk['_is4wp_learndash_tags'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_actions'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_x5k6c7dm38wwaxnhnzse( $m4is_pk98f5nk['_is4wp_learndash_actions'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_shortcodes'][0] ) ) {
$m4is_hartbe843crydzh = do_shortcode( $m4is_pk98f5nk['_is4wp_learndash_shortcodes'][0] );

}
}
do_action('memberium/lms/completion', $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_fgq4xtdb8);
}
function m4is_90zwfg7zjzq3sc54h83kkgn( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_86gkmtwpcpp ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_prza54wgz4hdwh9zhf5sr9z4h9s632 = get_post_meta($m4is_86gkmtwpcpp);
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
if ( ! empty( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_goals'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_5qyk7ea4p2nw8ph( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_goals'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_tags'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_tags'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_actions'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_x5k6c7dm38wwaxnhnzse( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_actions'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_shortcodes'][0] ) ) {
do_shortcode( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_shortcodes'][0] );

}
}
do_action('memberium/lms/completion', $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_86gkmtwpcpp);
}
function m4is_t5kgy5vvxa10rc7hy6ak1w( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_mmejnhqg ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_ge9dqmhegbghxx0fp44tezh5sefx = $m4is_mmejnhqg['id'];
$m4is_prza54wgz4hdwh9zhf5sr9z4h9s632 = get_post_meta( $m4is_ge9dqmhegbghxx0fp44tezh5sefx );

if (! $m4is_mmejnhqg['passed']) {
return;
}
if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
if ( ! empty( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_goals'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_5qyk7ea4p2nw8ph( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_goals'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_tags'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_tags'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_actions'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_x5k6c7dm38wwaxnhnzse( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_actions'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_shortcodes'][0] ) ) {
$result = do_shortcode( $m4is_prza54wgz4hdwh9zhf5sr9z4h9s632['_is4wp_learndash_shortcodes'][0] );

}
}
do_action('memberium/lms/completion', $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_ge9dqmhegbghxx0fp44tezh5sefx);
}
function m4is_tad2xqwr2dkj0b8jnqjhg($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_6mctr922hbmncpwfrp0x2k) {
global $wpdb;

$m4is_yw71yps02fm17cve1ej7187r13we2g3 = $wpdb->posts;
$m4is_ave8cgyd7rb48 = $wpdb->postmeta;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT ID, meta_value FROM {$m4is_yw71yps02fm17cve1ej7187r13we2g3}, {$m4is_ave8cgyd7rb48} WHERE post_status = 'publish' AND post_type = 'course' AND  post_id = ID AND meta_key = '_is4wp_learndash_autoenroll' AND meta_value > '' ";

$m4is_pbe6ph2dd0rk = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
if ( is_array( $m4is_pbe6ph2dd0rk ) && ! empty( $m4is_pbe6ph2dd0rk ) ) {
$m4is_y31cve5152xf530f = new LLMS_Student( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

foreach ( $m4is_pbe6ph2dd0rk as $m4is_z4ts5pa39jf1yhjb4 ) {
$m4is_bn4ws7z7vk = llms_is_user_enrolled( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_z4ts5pa39jf1yhjb4['ID'] );
$m4is_drm2nks193manac79kjka197c4rs9m = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_z4ts5pa39jf1yhjb4['meta_value'],
 $m4is_6mctr922hbmncpwfrp0x2k );
if ( $m4is_bn4ws7z7vk ) {
if ( ! $m4is_drm2nks193manac79kjka197c4rs9m ) {
$m4is_y31cve5152xf530f->unenroll( $m4is_z4ts5pa39jf1yhjb4['ID'] );

}
}
else {
if ( $m4is_drm2nks193manac79kjka197c4rs9m ) {
$m4is_y31cve5152xf530f->enroll( $m4is_z4ts5pa39jf1yhjb4['ID'] );
}
}
}
}
}

function m4is_8kee4a68n7jjxczh(array $m4is_d60kn1d3yvprp62rs332,
 int $m4is_tz1rt7sbq40fade6e6rx){
if (get_post_type($m4is_tz1rt7sbq40fade6e6rx) !== 'course') {
return $m4is_d60kn1d3yvprp62rs332;
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();


$m4is_d60kn1d3yvprp62rs332['access'] = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_krs2avqy019m3mx($m4is_tz1rt7sbq40fade6e6rx,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87);
if( ! $m4is_d60kn1d3yvprp62rs332['access'] ){
$m4is_d60kn1d3yvprp62rs332['status'] = 'locked';
return $m4is_d60kn1d3yvprp62rs332;

}
$m4is_dbkkvm60vrfe6dvcc56g3s = new LLMS_Course( $m4is_tz1rt7sbq40fade6e6rx );

$m4is_bn4ws7z7vk = llms_is_user_enrolled( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_tz1rt7sbq40fade6e6rx );
if( ! $m4is_bn4ws7z7vk ){
if( ! $m4is_dbkkvm60vrfe6dvcc56g3s->is_enrollment_open() || ! $m4is_dbkkvm60vrfe6dvcc56g3s->has_capacity() ){
$m4is_d60kn1d3yvprp62rs332['access'] = 0;

$m4is_d60kn1d3yvprp62rs332['status'] = 'locked';
return $m4is_d60kn1d3yvprp62rs332;
}
else{
$m4is_d60kn1d3yvprp62rs332['status'] = 'not_enrolled';

}
$m4is_d60kn1d3yvprp62rs332['url'] = $m4is_dbkkvm60vrfe6dvcc56g3s->get_sales_page_url();
}

if ( $m4is_dbkkvm60vrfe6dvcc56g3s->has_prerequisite( 'course' ) && ! $m4is_dbkkvm60vrfe6dvcc56g3s->is_prerequisite_complete( 'course' ) ){
$m4is_d60kn1d3yvprp62rs332['access'] = 0;
 
$m4is_d60kn1d3yvprp62rs332['status'] = 'locked';
return $m4is_d60kn1d3yvprp62rs332;
}

if ( $m4is_dbkkvm60vrfe6dvcc56g3s->has_prerequisite( 'course_track' ) && ! $m4is_dbkkvm60vrfe6dvcc56g3s->is_prerequisite_complete( 'course_track' ) ) {
$m4is_d60kn1d3yvprp62rs332['access'] = 0;
 
$m4is_d60kn1d3yvprp62rs332['status'] = 'locked';
return $m4is_d60kn1d3yvprp62rs332;
}
$m4is_d60kn1d3yvprp62rs332['progress'] = $m4is_dbkkvm60vrfe6dvcc56g3s->get_percent_complete( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

return $m4is_d60kn1d3yvprp62rs332;
}
function m4is_he385j8t91fkknaxec0qk($m4is_yhdk2h7srcr7n5mzjnw7m6b) {
return 'course';
}
function m4is_qhtcah9rdt69ka003dz830y7ysnjf0h($m4is_rwvhr14tkxcjnhnsrhab1n706cbq) {
return 'course_cat';

}
function m4is_hqkxp627k782j2f($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) {
return 'course_tag';
}

}