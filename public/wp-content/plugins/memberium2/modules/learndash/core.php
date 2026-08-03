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

final class m4is_5f4j9e1q39p6vht95a8xheen {
private const AUTOENROLL_CACHE_KEY = 'memberium/learndash/autoenroll';
private const AUTOJOIN_CACHE_KEY = 'memberium/learndash/autojoin';

private const GROUP_ADD = false;
private const GROUP_REMOVE = true;
private const COURSE_ENROLL = false;
private const COURSE_UNENROLL = true;

private $m4is_132xe588j;




public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_19ka9z5gq101z4();

$this->m4is_5eragr7sh2yyj356m();
$this->m4is_r8emp2zcmhv1twqx3qx8mv();
}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}

private function m4is_19ka9z5gq101z4() : void {
$m4is_drfzqdp3 = [
'm4is_4qa3cq01r' => __DIR__ . '/admin',
'm4is_465bq4tc9zr7fwj6f5171reej' =>
 __DIR__ . '/catchers',
'm4is_9krdjk4ngkkt70wy5cnhhby39xtt6' => __DIR__ . '/frontend',
'm4is_syka57kayfck40f6hyzscy919' => __DIR__ . '/shortcodes',

];
$this->m4is_132xe588j->m4is_30j08k6rn5y4pz4w( $m4is_drfzqdp3 );
}
private function m4is_r8emp2zcmhv1twqx3qx8mv() {
if ( is_admin() ) {

m4is_4qa3cq01r::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
else {

m4is_9krdjk4ngkkt70wy5cnhhby39xtt6::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
}

private function m4is_5eragr7sh2yyj356m() {
add_action( 'learndash_assignment_approved',
 [$this, 'm4is_b73k4rxryabxpmmy1bd'], 10, 1 );
add_action( 'learndash_assignment_uploaded', [$this, 'm4is_4vqtmtxzkqrcz'], 10, 2 );

add_action( 'learndash_course_completed', [$this, 'm4is_24301gshrv5qd04j'], 5, 1 );
add_action( 'learndash_lesson_completed',[$this,
 'm4is_90zwfg7zjzq3sc54h83kkgn'], 5, 1 );
add_action( 'learndash_quiz_submitted', [$this, 'm4is_7cwz6m4jm6x8r'], 5, 2 );
add_action( 'learndash_topic_completed',
 [$this, 'm4is_vv1703v8'], 5, 1 );
add_action( 'template_redirect', [$this, 'm4is_fsc8j25adm2x'], 901 );

add_filter( 'learndash_certificate_pdf_page_formats',
 [$this, 'm4is_26sch69mgj7xx98pqeqpjpz67g3mf2'], 10 );
add_filter( 'memberium/lms/course_category', [$this, 'm4is_qhtcah9rdt69ka003dz830y7ysnjf0h']);

add_filter( 'memberium/lms/course_tag', [$this, 'm4is_hqkxp627k782j2f']);
add_filter( 'memberium/lms/course_type', [$this, 'm4is_he385j8t91fkknaxec0qk']);

add_filter( 'memberium/lms/module_post_types', [$this, 'm4is_wn6jwf2ctp1e0']);
add_filter( 'memberium/lms/name', [$this, 'm4is_2xj965hgg0crp4kyxkfvwg7n1g3p2adx']);

add_filter( 'memberium/posts/unenhanced', [$this, 'm4is_k884h95yzaeww1gd0r34tbfrkd3'], 10, 1);

remove_action( 'wp_login_failed', 'learndash_login_failed' );

add_action( 'wp_login_failed', 'learndash_login_failed', 100, 1 );
if ( ! defined( 'DISABLE_LEARNDASH_ENROLL' ) ) {
add_action( 'memberium/session/updated',
 [$this,'m4is_7m28fm68'], 10, 2 );
add_action( 'memberium/session/updated', [$this,'m4is_nkrn6vp1jcch6crbs6q'], 11, 2 );
}
}







function m4is_k884h95yzaeww1gd0r34tbfrkd3($m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j =[] ) {
$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'sfwd-essays';

return $m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j;
}

function m4is_he385j8t91fkknaxec0qk($m4is_yhdk2h7srcr7n5mzjnw7m6b) {
return 'sfwd-courses';

}

function m4is_qhtcah9rdt69ka003dz830y7ysnjf0h($m4is_rwvhr14tkxcjnhnsrhab1n706cbq) {
return 'ld_course_category';
}

function m4is_hqkxp627k782j2f($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) {
return 'ld_course_tag';

}

function m4is_2xj965hgg0crp4kyxkfvwg7n1g3p2adx($m4is_hce1y1a4qd65zhnwsj) {
return 'LearnDash';
}
function m4is_wn6jwf2ctp1e0($m4is_zpbgfgfkqf2c4ast12shxs8gthy = []) {
return array_merge($m4is_zpbgfgfkqf2c4ast12shxs8gthy,
 [
'sfwd-courses',
'sfwd-lessons',
'sfwd-topic',
'sfwd-quiz',
]);
}




public function m4is_7m28fm68( $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0,
 ?array $m4is_6mctr922hbmncpwfrp0x2k = [] ) {
if ( ! function_exists( 'ld_update_group_access' ) ) {
error_log( 'Memberium: [error] Learndash function ld_update_group_access() not found.' );

return;
}
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'manage_options' ) ) {
return;
}
$m4is_3a8vwjrwcs0bp1yk3 = $this->m4is_z4w2jcetxkybranzhpmj();

if ( empty( $m4is_3a8vwjrwcs0bp1yk3 ) ) {
return;
}
$m4is_vm1ftc858fbztb2q4tfefjt511v27 = learndash_get_users_group_ids( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_yfq3jqvfk8j = isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] ) ? array_filter( explode( ',', $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] ) ) : [];

$m4is_vf7jf6wbjf7ha1dg0ghd08a2hvpdm = [];

foreach ( $m4is_vm1ftc858fbztb2q4tfefjt511v27 as $m4is_4dd6m7vsabfbpdkyh783ct657ecx ) {

if ( ! array_key_exists( $m4is_4dd6m7vsabfbpdkyh783ct657ecx,
 $m4is_3a8vwjrwcs0bp1yk3 ) ) {
continue;
}
$m4is_2h14jwfzg9dmtfeqrwys2d5b = $m4is_3a8vwjrwcs0bp1yk3[$m4is_4dd6m7vsabfbpdkyh783ct657ecx];


if ( (bool) array_intersect( $m4is_2h14jwfzg9dmtfeqrwys2d5b, $m4is_yfq3jqvfk8j ) ) {
continue;
}
ld_update_group_access( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_4dd6m7vsabfbpdkyh783ct657ecx, self::GROUP_REMOVE );
unset( $m4is_vm1ftc858fbztb2q4tfefjt511v27[$m4is_4dd6m7vsabfbpdkyh783ct657ecx] );

unset( $m4is_3a8vwjrwcs0bp1yk3[$m4is_4dd6m7vsabfbpdkyh783ct657ecx] );
$m4is_vf7jf6wbjf7ha1dg0ghd08a2hvpdm[$m4is_4dd6m7vsabfbpdkyh783ct657ecx] = $m4is_4dd6m7vsabfbpdkyh783ct657ecx;

}

foreach( $m4is_3a8vwjrwcs0bp1yk3 as $m4is_4dd6m7vsabfbpdkyh783ct657ecx => $m4is_06c8s5xs94f91335gnaey25 ) {

if ( in_array( $m4is_4dd6m7vsabfbpdkyh783ct657ecx,
 $m4is_vm1ftc858fbztb2q4tfefjt511v27 ) ) {
continue;
}

if ( in_array( $m4is_4dd6m7vsabfbpdkyh783ct657ecx, $m4is_vf7jf6wbjf7ha1dg0ghd08a2hvpdm ) ) {
continue;

}
if ( ! (bool) array_intersect( $m4is_3a8vwjrwcs0bp1yk3[$m4is_4dd6m7vsabfbpdkyh783ct657ecx], $m4is_yfq3jqvfk8j ) ) {
continue;
}
ld_update_group_access( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_4dd6m7vsabfbpdkyh783ct657ecx, self::GROUP_ADD );
}
}

public function m4is_nkrn6vp1jcch6crbs6q( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0,
 ?array $m4is_6mctr922hbmncpwfrp0x2k = [] ) : void {
if ( ! function_exists( 'ld_update_course_access' ) ) {
error_log( 'Memberium: [error] Learndash function ld_update_course_access not found.' );

return;
}
if ( ! function_exists( 'learndash_user_get_enrolled_courses' ) ) {
error_log( 'Memberium: [error] Learndash function learndash_user_get_enrolled_courses not found.' );

return;
}
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'manage_options' ) ) {
return;
}

$m4is_s0z41k8fby = $this->m4is_xragr39bd6jfxy8knb8x();

if ( empty( $m4is_s0z41k8fby ) ) {
return;
}
$m4is_eb74p0wje7yw151 = isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] ) ? array_filter( explode( ',',
 $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] ) ) : [];
$m4is_1pjm0y9kp950ag02ey9j8n8xq7vm = learndash_user_get_enrolled_courses( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_4y55ct6pv0measa8f33fzgb57at1m6b7 = [];

foreach( $m4is_1pjm0y9kp950ag02ey9j8n8xq7vm as $m4is_fgq4xtdb8 ) {

if ( ! array_key_exists( $m4is_fgq4xtdb8,
 $m4is_s0z41k8fby ) ) {
continue;
}

if ( (bool) array_intersect( $m4is_s0z41k8fby[$m4is_fgq4xtdb8], $m4is_eb74p0wje7yw151 ) ) {
continue;

}
ld_update_course_access( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_fgq4xtdb8, self::COURSE_UNENROLL ); 
$m4is_4y55ct6pv0measa8f33fzgb57at1m6b7[$m4is_fgq4xtdb8] = $m4is_fgq4xtdb8;

unset( $m4is_1pjm0y9kp950ag02ey9j8n8xq7vm[$m4is_fgq4xtdb8], $m4is_s0z41k8fby[$m4is_fgq4xtdb8] );
}

foreach( $m4is_s0z41k8fby as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_b0eqk52r6m ) {

if ( in_array( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_1pjm0y9kp950ag02ey9j8n8xq7vm ) ) {
continue;
}

if ( array_key_exists( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_4y55ct6pv0measa8f33fzgb57at1m6b7 ) ) {
continue;
}

if ( (bool) array_intersect( $m4is_b0eqk52r6m, $m4is_eb74p0wje7yw151 ) ) {
ld_update_course_access( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, self::COURSE_ENROLL ); 
}
}
}



public function m4is_24301gshrv5qd04j( $m4is_d60kn1d3yvprp62rs332 ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = isset($m4is_d60kn1d3yvprp62rs332['user']->ID) ? (int) $m4is_d60kn1d3yvprp62rs332['user']->ID : $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_tz1rt7sbq40fade6e6rx = isset( $m4is_d60kn1d3yvprp62rs332['course']->ID ) ? (int) $m4is_d60kn1d3yvprp62rs332['course']->ID : 0;

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_tz1rt7sbq40fade6e6rx ) {
return;
}
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_0kdm2zprhs5b1 = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx );

$m4is_p5qbm0pfxxg = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_goals'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_goals'][0];

$m4is_06c8s5xs94f91335gnaey25 = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_tags'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_tags'][0];

$m4is_gh7agjsse = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_actions'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_actions'][0];

$this->m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_p5qbm0pfxxg, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_06c8s5xs94f91335gnaey25,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_gh7agjsse, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

do_action( 'memberium/lms/completion', $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_tz1rt7sbq40fade6e6rx );
}
public function m4is_90zwfg7zjzq3sc54h83kkgn( $m4is_d60kn1d3yvprp62rs332 ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = isset( $m4is_d60kn1d3yvprp62rs332['user']->ID ) ? (int) $m4is_d60kn1d3yvprp62rs332['user']->ID : $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_tz1rt7sbq40fade6e6rx = isset( $m4is_d60kn1d3yvprp62rs332['lesson']->ID ) ? (int) $m4is_d60kn1d3yvprp62rs332['lesson']->ID : 0;

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_tz1rt7sbq40fade6e6rx ) {
return;
}
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_0kdm2zprhs5b1 = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx );

$m4is_p5qbm0pfxxg = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_goals'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_goals'][0];

$m4is_06c8s5xs94f91335gnaey25 = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_tags'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_tags'][0];

$m4is_gh7agjsse = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_actions'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_actions'][0];

$this->m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_p5qbm0pfxxg, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_06c8s5xs94f91335gnaey25,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_gh7agjsse, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
public function m4is_vv1703v8( $m4is_d60kn1d3yvprp62rs332 ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = isset( $m4is_d60kn1d3yvprp62rs332['user']->ID ) ? (int) $m4is_d60kn1d3yvprp62rs332['user']->ID : $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_tz1rt7sbq40fade6e6rx = isset( $m4is_d60kn1d3yvprp62rs332['topic']->ID ) ? (int) $m4is_d60kn1d3yvprp62rs332['topic']->ID : 0;

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_wk4dh1rnd3wmwvsggq51nhn87);

if ( ! $m4is_tz1rt7sbq40fade6e6rx ) {
return;
}
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_0kdm2zprhs5b1 = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx );

$m4is_p5qbm0pfxxg = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_goals'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_goals'][0];

$m4is_06c8s5xs94f91335gnaey25 = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_tags'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_tags'][0];

$m4is_gh7agjsse = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_actions'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_actions'][0];

$this->m4is_132xe588j->m4is_5qyk7ea4p2nw8ph($m4is_p5qbm0pfxxg, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx($m4is_06c8s5xs94f91335gnaey25,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse($m4is_gh7agjsse, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

do_action( 'memberium/lms/completion', $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_tz1rt7sbq40fade6e6rx );
}

public function m4is_7cwz6m4jm6x8r( $m4is_d60kn1d3yvprp62rs332,
 $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = isset( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID ) ? $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID : $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_tz1rt7sbq40fade6e6rx = isset( $m4is_d60kn1d3yvprp62rs332['quiz'] ) ? (int) $m4is_d60kn1d3yvprp62rs332['quiz'] : 0;

if ( ! $m4is_tz1rt7sbq40fade6e6rx ) {
error_log( 'Memberium: [error] No Post ID found for LearnDash Quiz Completion Data ' . print_r( $m4is_d60kn1d3yvprp62rs332['quiz'],
 true ) );
return;
}
$m4is_0kdm2zprhs5b1 = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx );
$m4is_p5qbm0pfxxg = '';
$m4is_06c8s5xs94f91335gnaey25 = '';

$m4is_gh7agjsse = '';
if ( $m4is_d60kn1d3yvprp62rs332['pass'] ) {
$m4is_p5qbm0pfxxg = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_goals'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_goals'][0];

$m4is_06c8s5xs94f91335gnaey25 = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_tags'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_tags'][0];

$m4is_gh7agjsse = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_actions'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_actions'][0];

}
else {
$m4is_p5qbm0pfxxg = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_fail_goals'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_fail_goals'][0];

$m4is_06c8s5xs94f91335gnaey25 = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_fail_tags'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_fail_tags'][0];

$m4is_gh7agjsse = empty( $m4is_0kdm2zprhs5b1['_is4wp_learndash_fail_actions'][0] ) ? '' : $m4is_0kdm2zprhs5b1['_is4wp_learndash_fail_actions'][0];

}
$this->m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_p5qbm0pfxxg, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_06c8s5xs94f91335gnaey25,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_gh7agjsse, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

do_action( 'memberium/lms/completion', $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_tz1rt7sbq40fade6e6rx );
}
public function m4is_vmhgd66djfcxaf3dgzxv( $m4is_1ag17kp7bt33h3797m,
 $m4is_z4ts5pa39jf1yhjb4, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) {
if ( ! $m4is_1ag17kp7bt33h3797m ) {
return;
}
if ( ! is_a( $m4is_z4ts5pa39jf1yhjb4,
 'WP_Post' ) ) {
return;
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_tz1rt7sbq40fade6e6rx = (int) $m4is_z4ts5pa39jf1yhjb4->ID;
$m4is_wa2rper62qy9rn34p = get_post( $m4is_tz1rt7sbq40fade6e6rx,
 'ARRAY_A' );
$m4is_pgjemcrbf = get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, '_sfwd-quizzes', true );
foreach( $m4is_pgjemcrbf as $m4is_e11n37gxszq0 ) {
if ( $m4is_e11n37gxszq0['quiz'] == $m4is_tz1rt7sbq40fade6e6rx ) {
$m4is_0vxk0aes09 = false;

}
}
do_action( 'memberium/lms/completion', $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_tz1rt7sbq40fade6e6rx );

}




public function m4is_4vqtmtxzkqrcz( int $m4is_01meagbt65w71x22hj8nyydbm2920z = 0,
 $m4is_8d283ggv1kjyeakw = [] ) : void {
if ( ! $m4is_01meagbt65w71x22hj8nyydbm2920z ) {
return;
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = isset( $m4is_8d283ggv1kjyeakw['user_id'] ) ? $m4is_8d283ggv1kjyeakw['user_id'] : 0;

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_tz1rt7sbq40fade6e6rx = isset( $m4is_8d283ggv1kjyeakw['lesson_id'] ) ? $m4is_8d283ggv1kjyeakw['lesson_id'] : 0;

if ( ! $m4is_tz1rt7sbq40fade6e6rx ) {
return;
}
$m4is_pk98f5nk = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx );
if ( ! empty( $m4is_pk98f5nk['_memberium_lms_assignment_upload_tag'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $m4is_pk98f5nk['_memberium_lms_assignment_upload_tag'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}
public function m4is_b73k4rxryabxpmmy1bd( int $m4is_0bgdnjwbvz97d2p = 0 ) : void {
$m4is_0bgdnjwbvz97d2p = (int) $m4is_0bgdnjwbvz97d2p;

if ( ! $m4is_0bgdnjwbvz97d2p ) {
return;
}
$m4is_8d283ggv1kjyeakw = get_post_meta( $m4is_0bgdnjwbvz97d2p );
$m4is_tz1rt7sbq40fade6e6rx = isset( $m4is_8d283ggv1kjyeakw['lesson_id'][0] ) ? $m4is_8d283ggv1kjyeakw['lesson_id'][0] : 0;

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = isset( $m4is_8d283ggv1kjyeakw['user_id'][0] ) ? $m4is_8d283ggv1kjyeakw['user_id'][0] : 0;
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_pk98f5nk = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx );
if ( ! empty( $m4is_pk98f5nk['_memberium_lms_assignment_approval_tag'][0] ) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $m4is_pk98f5nk['_memberium_lms_assignment_approval_tag'][0],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}



public function m4is_fsc8j25adm2x() {
if ( m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->post_type == 'sfwd-quiz' ) {


}
}

public function m4is_26sch69mgj7xx98pqeqpjpz67g3mf2( $m4is_ra7dnjjzebn9h3t6k7a2p36 ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36['A4_EXTRA'] = 'A4 Extra';

$m4is_ra7dnjjzebn9h3t6k7a2p36['A4_LONG'] = 'A4 Long';
$m4is_ra7dnjjzebn9h3t6k7a2p36['A4_SUPER'] = 'A4 Super';
$m4is_ra7dnjjzebn9h3t6k7a2p36['COMPACT'] = 'Compact';

$m4is_ra7dnjjzebn9h3t6k7a2p36['FOOLSCAP'] = 'Foolscap';
$m4is_ra7dnjjzebn9h3t6k7a2p36['GLETTER'] = 'Government Letter';
$m4is_ra7dnjjzebn9h3t6k7a2p36['GOVERNMENTLEGAL'] = 'Government Legal';

$m4is_ra7dnjjzebn9h3t6k7a2p36['JLEGAL'] = 'Junior Legal';
$m4is_ra7dnjjzebn9h3t6k7a2p36['LEDGER'] = 'Ledger';
$m4is_ra7dnjjzebn9h3t6k7a2p36['LEGAL'] = 'Legal';

$m4is_ra7dnjjzebn9h3t6k7a2p36['TABLOID'] = 'Tabloid';
return $m4is_ra7dnjjzebn9h3t6k7a2p36;
}




public function m4is_vx4pw9brzr55m5mjd3zx31csrpk( $m4is_1eem3qk9j69jqn60yz0adrjj1,
 $m4is_hce1y1a4qd65zhnwsj = '', $m4is_g61yzqs7ecta0xztr70d7v = [] ) {
$m4is_1eem3qk9j69jqn60yz0adrjj1 = empty( $m4is_1eem3qk9j69jqn60yz0adrjj1 ) ? $this->m4is_132xe588j->m4is_vd3qpw0vkdm() : $m4is_1eem3qk9j69jqn60yz0adrjj1;

$m4is_n7x0afpz = [
'description' => '',
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args( $m4is_g61yzqs7ecta0xztr70d7v, $m4is_n7x0afpz );

$m4is_xgm8x5p7mnwc8mvjechjgat7nxyx6 = [
'post_author' => $m4is_1eem3qk9j69jqn60yz0adrjj1,
'post_title' => $m4is_hce1y1a4qd65zhnwsj,

'post_content' => $m4is_g61yzqs7ecta0xztr70d7v['description'],
];
$m4is_tz1rt7sbq40fade6e6rx = wp_insert_post( $m4is_xgm8x5p7mnwc8mvjechjgat7nxyx6 );

if ( ! is_a( $m4is_tz1rt7sbq40fade6e6rx, 'WP_Error' ) ) {
learndash_set_groups_administrators( $m4is_tz1rt7sbq40fade6e6rx, [$m4is_1eem3qk9j69jqn60yz0adrjj1] );

}
}




public function m4is_zbcmtydfe7whvawtrnz031xb() : array {
$m4is_4s4mmcg520b0y0tbbgnade = [];
$m4is_mzjfbdah8s6 = $this->m4is_7dkqz3dtjzm909sxyxk05brq8vy();

foreach( $m4is_mzjfbdah8s6 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_dbkkvm60vrfe6dvcc56g3s ) {
$m4is_06c8s5xs94f91335gnaey25 = array_filter( explode( ',',
 $m4is_dbkkvm60vrfe6dvcc56g3s->meta_value ) );
if ( ! empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
$m4is_4s4mmcg520b0y0tbbgnade[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_06c8s5xs94f91335gnaey25;

}
}
update_option( self::AUTOENROLL_CACHE_KEY, $m4is_4s4mmcg520b0y0tbbgnade, false );
return $m4is_4s4mmcg520b0y0tbbgnade;
}

public function m4is_v27vk3xp1twx() : array {
$m4is_4s4mmcg520b0y0tbbgnade = [];

$m4is_n79rn4yv31hrq9g7a88yr91f = $this->m4is_0t1tz870y6bj6nppkmws88();
foreach( $m4is_n79rn4yv31hrq9g7a88yr91f as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_00bnnh6s4bp6xfnew4kmj ) {
$m4is_06c8s5xs94f91335gnaey25 = array_filter( explode( ',', $m4is_00bnnh6s4bp6xfnew4kmj->meta_value ) );

if ( ! empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
$m4is_4s4mmcg520b0y0tbbgnade[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_06c8s5xs94f91335gnaey25;

}
}
update_option( self::AUTOJOIN_CACHE_KEY, $m4is_4s4mmcg520b0y0tbbgnade, false );
return $m4is_4s4mmcg520b0y0tbbgnade;
}

public function m4is_xragr39bd6jfxy8knb8x() : array {
$m4is_4s4mmcg520b0y0tbbgnade = get_option( self::AUTOENROLL_CACHE_KEY,
 false );
if ( ! is_array( $m4is_4s4mmcg520b0y0tbbgnade ) ) {
$m4is_4s4mmcg520b0y0tbbgnade = $this->m4is_zbcmtydfe7whvawtrnz031xb();

}
return $m4is_4s4mmcg520b0y0tbbgnade;
}

public function m4is_z4w2jcetxkybranzhpmj() : array {
$m4is_4s4mmcg520b0y0tbbgnade = get_option( self::AUTOJOIN_CACHE_KEY,
 false );
if ( ! is_array( $m4is_4s4mmcg520b0y0tbbgnade ) ) {
$m4is_4s4mmcg520b0y0tbbgnade = $this->m4is_v27vk3xp1twx();
}
return $m4is_4s4mmcg520b0y0tbbgnade;

}




private function m4is_7dkqz3dtjzm909sxyxk05brq8vy() : array {
static $m4is_f3h8rhfbxpa34gfeyv2hr4b2aq;
if ( is_null( $m4is_f3h8rhfbxpa34gfeyv2hr4b2aq ) ) {
global $wpdb;

$m4is_28fpsej8qnj = learndash_get_open_courses();
$m4is_yw71yps02fm17cve1ej7187r13we2g3 = $wpdb->posts;
$m4is_ave8cgyd7rb48 = $wpdb->postmeta;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `ID`, `meta_value` FROM `{$m4is_yw71yps02fm17cve1ej7187r13we2g3}`, `{$m4is_ave8cgyd7rb48}` WHERE `post_status` = 'publish' AND `post_type` = 'sfwd-courses' AND `post_id` = `ID` AND `meta_key` = '_is4wp_learndash_autoenroll' AND `meta_value` > '' ";

if ( ! empty( $m4is_28fpsej8qnj ) ) {
$m4is_28fpsej8qnj = implode( ',', $m4is_28fpsej8qnj );
$m4is_5rbenkpt1v7xby2cknbs7 .= " AND `ID` NOT IN ( {$m4is_28fpsej8qnj} ) ";

}
$m4is_f3h8rhfbxpa34gfeyv2hr4b2aq = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K );
$m4is_f3h8rhfbxpa34gfeyv2hr4b2aq = is_array( $m4is_f3h8rhfbxpa34gfeyv2hr4b2aq ) ? $m4is_f3h8rhfbxpa34gfeyv2hr4b2aq : [];

}
return apply_filters( 'memberium/lms/courses/autoenroll', $m4is_f3h8rhfbxpa34gfeyv2hr4b2aq );
}

private function m4is_0t1tz870y6bj6nppkmws88() : array {
static $m4is_18gf9rgqt26qd0srdfm7v427c59x;

if ( is_null( $m4is_18gf9rgqt26qd0srdfm7v427c59x ) ) {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = <<<SQLBLOCK

                SELECT
                    ID,
                    meta_value
                FROM
                    {$wpdb->posts},
                    {$wpdb->postmeta}
                WHERE post_status = 'publish'
                    AND post_type = 'groups'
                    AND post_id = ID
                    AND meta_key = '_is4wp_learndash_autojoin'
                    AND meta_value > ''
            SQLBLOCK;

$m4is_18gf9rgqt26qd0srdfm7v427c59x = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K );
$m4is_18gf9rgqt26qd0srdfm7v427c59x = is_array( $m4is_18gf9rgqt26qd0srdfm7v427c59x ) ? $m4is_18gf9rgqt26qd0srdfm7v427c59x : [];

}
return apply_filters( 'memberium/lms/groups/autojoin', $m4is_18gf9rgqt26qd0srdfm7v427c59x );
}

}
