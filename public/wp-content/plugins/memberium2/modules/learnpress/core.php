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


final class m4is_twch6s2kw9djs3706x5wc8917fc {
private $m4is_132xe588j;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_5eragr7sh2yyj356m();

if ( is_admin() ) {
require __DIR__ . '/admin.php';
m4is_n5x7c5jg956rcfh1kr02z8cw::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
private function m4is_5eragr7sh2yyj356m() {
add_action( 'learn-press/user-completed-lesson', [$this, 'm4is_pwfxw3qq8fv7jkv8tz0c'],
 10, 3 ); 
add_action( 'learn-press/user-course-finished', [$this, 'm4is_hth257rfh5p1d29r1'], 10, 3 ); 
add_action( 'learn-press/user/quiz-finished',
 [$this, 'm4is_s841sqb1jg7tt1q97'], 10, 3 ); 
add_action( 'memberium/session/created', [$this, 'm4is_x6g78ssjbpw6s6259cmsm3n604vasmq'],
 10, 1 );
add_filter( 'learn-press/has-enrolled-course', [$this, 'm4is_tv3qwxs2x3psfb'], 10, 3 );
add_filter( 'memberium/posts/unenhanced',
 [$this, 'm4is_9c3cqhs2dx95rq29h4gzye2tc'], 10, 1 );
add_filter( 'memberium/lms/module_post_types', [$this, 'm4is_wn6jwf2ctp1e0'] );

add_filter( 'memberium/lms/name', [$this, 'm4is_2xj965hgg0crp4kyxkfvwg7n1g3p2adx'] );
}
private function m4is_eh8jp8jrkjqrf0jg4q3h3rn8() : array {
static $m4is_pbe6ph2dd0rk = [];

if ( empty( $m4is_pbe6ph2dd0rk ) ) {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `ID`, `meta_value` FROM %i, %i WHERE `post_status` = 'publish' AND `post_type` = 'lp_course' AND `post_id` = `ID` AND `meta_key` = '_is4wp_learndash_autoenroll' AND `meta_value` > '' ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $wpdb->posts, $wpdb->postmeta );
$m4is_pbe6ph2dd0rk = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7,
 ARRAY_A );
}
return $m4is_pbe6ph2dd0rk;
}

private function m4is_a4m16kpnza4( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return [];

}
if ( ! method_exists( 'lp_user', 'get_orders') ) {
error_log('Memberium: [error] LearnPress  LP_User get_orders() method missing.');

return [];
}
$m4is_mx0ektkg0rq36pek = new lp_user( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_g11djae1nr2effr3szk2hjen19f = $m4is_mx0ektkg0rq36pek->get_orders();

$m4is_mzjfbdah8s6 = [];
foreach ( $m4is_g11djae1nr2effr3szk2hjen19f as $m4is_fgq4xtdb8 => $m4is_z331qzpscyepmkg ) {
$m4is_mzjfbdah8s6[] = $m4is_fgq4xtdb8;

}
return $m4is_mzjfbdah8s6;
}

public function m4is_9c3cqhs2dx95rq29h4gzye2tc( array $m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j ) : array {
$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'lp_order';

return $m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j;
}
public function m4is_x6g78ssjbpw6s6259cmsm3n604vasmq( $m4is_6mctr922hbmncpwfrp0x2k = false ) : void {
if ( empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'] ) ) {
return;

}
global $wpdb;
static $m4is_z87ge9y9xmfgzj01b4f221ets = [];
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['user_id'] ) ? $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['user_id'] : 0;

$m4is_pbe6ph2dd0rk = $this->m4is_eh8jp8jrkjqrf0jg4q3h3rn8();
if (empty($m4is_pbe6ph2dd0rk) ) {
return;
}
$m4is_1pjm0y9kp950ag02ey9j8n8xq7vm = $this->m4is_a4m16kpnza4( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

foreach ( $m4is_pbe6ph2dd0rk as $m4is_z4ts5pa39jf1yhjb4 ) {
$m4is_tz1rt7sbq40fade6e6rx = $m4is_z4ts5pa39jf1yhjb4['ID'];
$m4is_zvat1r7vz9bt8v15jntpjy = in_array($m4is_tz1rt7sbq40fade6e6rx,
 $m4is_1pjm0y9kp950ag02ey9j8n8xq7vm) || in_array($m4is_tz1rt7sbq40fade6e6rx, $m4is_z87ge9y9xmfgzj01b4f221ets);
$m4is_jw2rnb6q = trim($m4is_z4ts5pa39jf1yhjb4['meta_value'],
 ',');
if ( ! $m4is_zvat1r7vz9bt8v15jntpjy ) {
if ( m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h($m4is_jw2rnb6q,
 $m4is_6mctr922hbmncpwfrp0x2k) ) {

if ( class_exists( 'LearnPress\Models\UserItems\UserCourseModel' ) ) {
$m4is_ej4jw6f8vvm79jxg46svk = new LearnPress\Models\UserItems\UserCourseModel;

$m4is_ej4jw6f8vvm79jxg46svk->user_id = $m4is_wk4dh1rnd3wmwvsggq51nhn87;
$m4is_ej4jw6f8vvm79jxg46svk->item_id = $m4is_tz1rt7sbq40fade6e6rx;

$m4is_ej4jw6f8vvm79jxg46svk->item_type = LP_COURSE_CPT;
$m4is_ej4jw6f8vvm79jxg46svk->ref_type = '';
$m4is_ej4jw6f8vvm79jxg46svk->status = LP_COURSE_ENROLLED;

$m4is_ej4jw6f8vvm79jxg46svk->graduation = LP_COURSE_GRADUATION_IN_PROGRESS;
$m4is_ej4jw6f8vvm79jxg46svk->start_time = gmdate( LP_Datetime::$format,
 time() );
$m4is_ej4jw6f8vvm79jxg46svk->save();
$m4is_z87ge9y9xmfgzj01b4f221ets[] = $m4is_tz1rt7sbq40fade6e6rx;
}
else {
error_log( 'Memberium: [error] LearnPress has broken their own API for a third time.  LearnPress\Models\UserItems\UserCourseModel not found.' );

}
}
}
}
}

public function m4is_tv3qwxs2x3psfb( $m4is_yzx66y98nxdsbsx7rk, int $m4is_wk4dh1rnd3wmwvsggq51nhn87, int $m4is_fgq4xtdb8 ) {
$m4is_jw2rnb6q = get_post_meta( $m4is_fgq4xtdb8,
 '_is4wp_learndash_autoenroll', true );
if ( empty( $m4is_jw2rnb6q ) ) {
return $m4is_yzx66y98nxdsbsx7rk;
}
$m4is_cyg7rcfhzagmm5v = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'keap', 'contact', [] );
if ( ! empty( $m4is_cyg7rcfhzagmm5v['id'] ) ) {
$m4is_yzx66y98nxdsbsx7rk = $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_jw2rnb6q,
 $m4is_cyg7rcfhzagmm5v );
}
return $m4is_yzx66y98nxdsbsx7rk;
}

public function m4is_pwfxw3qq8fv7jkv8tz0c( int $m4is_86gkmtwpcpp, $m4is_hartbe843crydzh,
 int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp || ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return;
}
$m4is_pk98f5nk = get_post_meta( $m4is_86gkmtwpcpp );

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
do_action( 'memberium/lms/completion', (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87, (int) $m4is_86gkmtwpcpp );

}

public function m4is_s841sqb1jg7tt1q97( int $m4is_ge9dqmhegbghxx0fp44tezh5sefx, int $m4is_fgq4xtdb8, int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp && $m4is_ge9dqmhegbghxx0fp44tezh5sefx ) {
if ( ! class_exists( 'LP_Abstract_User' ) || ! method_exists( 'LP_Abstract_User',
 'get_quiz_results' ) ) {
return;
}
$m4is_mx0ektkg0rq36pek = learn_press_get_user( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_2y1y93krvhbnn2mp58080g46 = $m4is_mx0ektkg0rq36pek->get_quiz_results( $m4is_ge9dqmhegbghxx0fp44tezh5sefx,
 $m4is_fgq4xtdb8, '' );
if ( ! is_object( $m4is_2y1y93krvhbnn2mp58080g46 ) ) {
return;
}
$m4is_gnqsz7p4krd07eb = is_object( $m4is_2y1y93krvhbnn2mp58080g46 ) && method_exists( $m4is_2y1y93krvhbnn2mp58080g46,
 'get' )
&& $m4is_2y1y93krvhbnn2mp58080g46->get( 'graduation' ) === 'passed';
$m4is_pk98f5nk = get_post_meta( $m4is_ge9dqmhegbghxx0fp44tezh5sefx );

if ( $m4is_gnqsz7p4krd07eb ) {
if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_goals'][0] ) ) {
$this->m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_pk98f5nk['_is4wp_learndash_goals'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_tags'][0] ) ) {
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_pk98f5nk['_is4wp_learndash_tags'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_actions'][0] ) ) {
$this->m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_pk98f5nk['_is4wp_learndash_actions'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
do_action( 'memberium/lms/completion', (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87, (int) $m4is_ge9dqmhegbghxx0fp44tezh5sefx );

}
else {
if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_fail_goals'][0] ) ) {
$this->m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_pk98f5nk['_is4wp_learndash_fail_goals'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_fail_tags'][0] ) ) {
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_pk98f5nk['_is4wp_learndash_fail_tags'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_fail_actions'][0] ) ) {
$this->m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_pk98f5nk['_is4wp_learndash_fail_actions'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}
}

}

public function m4is_hth257rfh5p1d29r1( int $m4is_fgq4xtdb8, int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 int $m4is_68c0fkx8z1ersg2xez9s28t1ggq0m ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp || ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return;
}
$m4is_pk98f5nk = get_post_meta( $m4is_fgq4xtdb8 );

if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_goals'][0] ) ) {
$this->m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_pk98f5nk['_is4wp_learndash_goals'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_tags'][0] ) ) {
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_pk98f5nk['_is4wp_learndash_tags'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( ! empty( $m4is_pk98f5nk['_is4wp_learndash_actions'][0] ) ) {
$this->m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_pk98f5nk['_is4wp_learndash_actions'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
do_action( 'memberium/lms/completion', (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87, (int) $m4is_fgq4xtdb8 );

}
public function m4is_wn6jwf2ctp1e0( $m4is_zpbgfgfkqf2c4ast12shxs8gthy = [] ) {
return array_merge($m4is_zpbgfgfkqf2c4ast12shxs8gthy,
 [
'lp_course',
'lp_lesson',
'lp_quiz',
]);
}
public function m4is_2xj965hgg0crp4kyxkfvwg7n1g3p2adx( $m4is_hce1y1a4qd65zhnwsj ) : string {
return 'LearnPress';

}



private function m4is_xcfmh1sdcsq17( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_fgq4xtdb8 ) {
if ( empty($m4is_fgq4xtdb8) || empty($m4is_wk4dh1rnd3wmwvsggq51nhn87) ) {
return false;

}
$m4is_ze8gjbzgjtq5r7q = [
'learn_press_create_order',
'learn_press_add_order_item',
'learn_press_update_order_status',
];
foreach ( $m4is_ze8gjbzgjtq5r7q as $m4is_95jcy59jv50devc8s3bd ) {
if ( ! function_exists( $m4is_95jcy59jv50devc8s3bd ) ) {
error_log( sprintf( 'Memberium: [error] LearnPress %s function missing.',
 $m4is_95jcy59jv50devc8s3bd ) );
return false;
}
}
if ( ! class_exists( 'lp_user' ) ) {
error_log('Memberium: [error] LearnPress lp_user class missing.');

return false;
}
$m4is_mx0ektkg0rq36pek = new lp_user($m4is_wk4dh1rnd3wmwvsggq51nhn87);

$m4is_mqngqwpvn9gebshs3qkf54653qfdh9k = learn_press_create_order( null );

$m4is_z331qzpscyepmkg = $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k->get_id();
$m4is_mqngqwpvn9gebshs3qkf54653qfdh9k->set_user_id($m4is_wk4dh1rnd3wmwvsggq51nhn87);

$m4is_mqngqwpvn9gebshs3qkf54653qfdh9k->save();

learn_press_add_order_item( $m4is_z331qzpscyepmkg, $m4is_fgq4xtdb8 );
learn_press_update_order_status( $m4is_z331qzpscyepmkg,
 'lp-completed' );

return $m4is_z331qzpscyepmkg;
}

}
