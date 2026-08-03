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

final class m4is_wev22se0xzpwjtcjpt {
private $m4is_132xe588j;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_5eragr7sh2yyj356m();

$this->m4is_r8emp2zcmhv1twqx3qx8mv();
}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}

private function m4is_5eragr7sh2yyj356m() : void {

add_action('wpcw_user_completed_unit', [$this, 'm4is_kz328bn54vzjqn'], 10, 3);

add_action('wpcw_user_completed_module', [$this, 'm4is_4rt51wqcjn2fyd6'], 10, 3);
add_action('wpcw_user_completed_course', [$this,
 'm4is_rq1vsdm7v4y6cdt7939b8t'], 10, 3);

add_action( 'memberium/session/updated', [$this, 'm4is_zq4ms0y17w'], 10, 2 );

add_filter('memberium/lms/module_post_types',
 [$this, 'm4is_wn6jwf2ctp1e0']);

add_filter('memberium/lms/name', [$this, 'm4is_2xj965hgg0crp4kyxkfvwg7n1g3p2adx']);
}

private function m4is_r8emp2zcmhv1twqx3qx8mv() : void {
if ( is_admin() ) {
include __DIR__ . '/admin.php';

m4is_0g26mbgex8v31ebk79y56tbc5w::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
}




function m4is_2xj965hgg0crp4kyxkfvwg7n1g3p2adx( $m4is_hce1y1a4qd65zhnwsj ) : string {
return 'WP-Courseware';

}

function m4is_wn6jwf2ctp1e0( $m4is_zpbgfgfkqf2c4ast12shxs8gthy = [] ) : array {
return array_merge( $m4is_zpbgfgfkqf2c4ast12shxs8gthy,
 [
'course_unit',
]);
}




function m4is_4rt51wqcjn2fyd6( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_x9ry8haxmf9gb1ekfdykh1jfcyvz6n, $m4is_h5y844yt83gc96as49d71 ) : void {
$m4is_83c6n7vrn = $m4is_h5y844yt83gc96as49d71->module_id;

$m4is_xsks7wpccs1qz6m6a16dm1t = get_option( 'memberium_wpcw', [] );
if ( isset( $m4is_xsks7wpccs1qz6m6a16dm1t['modules']['completion_tag'][$m4is_83c6n7vrn] ) ) {
$m4is_06c8s5xs94f91335gnaey25 = $m4is_xsks7wpccs1qz6m6a16dm1t['modules']['completion_tag'][$m4is_83c6n7vrn];

if ( ! empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx($m4is_06c8s5xs94f91335gnaey25);
}
}
do_action( 'memberium/lms/completion',
 $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_x9ry8haxmf9gb1ekfdykh1jfcyvz6n );
}

function m4is_kz328bn54vzjqn( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_x9ry8haxmf9gb1ekfdykh1jfcyvz6n, $m4is_h5y844yt83gc96as49d71 ) {
$m4is_06c8s5xs94f91335gnaey25 = get_post_meta( $m4is_x9ry8haxmf9gb1ekfdykh1jfcyvz6n,
 '_is4wp_wpcw_completion_tag', true );
if ( $m4is_06c8s5xs94f91335gnaey25 ) {
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_06c8s5xs94f91335gnaey25 );

}
do_action( 'memberium/lms/completion', $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_x9ry8haxmf9gb1ekfdykh1jfcyvz6n );
}

function m4is_rq1vsdm7v4y6cdt7939b8t( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_x9ry8haxmf9gb1ekfdykh1jfcyvz6n, $m4is_h5y844yt83gc96as49d71 ) {
$m4is_fgq4xtdb8 = $m4is_h5y844yt83gc96as49d71->course_id;
$m4is_xsks7wpccs1qz6m6a16dm1t = get_option( 'memberium_wpcw',
 [] );
if ( isset( $m4is_xsks7wpccs1qz6m6a16dm1t['courses']['completion_tag'][$m4is_fgq4xtdb8] ) ) {
$m4is_06c8s5xs94f91335gnaey25 = $m4is_xsks7wpccs1qz6m6a16dm1t['courses']['completion_tag'][$m4is_fgq4xtdb8];

if ( ! empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_06c8s5xs94f91335gnaey25 );
}
}
do_action( 'memberium/lms/completion',
 $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_x9ry8haxmf9gb1ekfdykh1jfcyvz6n );
}

function m4is_zq4ms0y17w( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_6mctr922hbmncpwfrp0x2k ) {
if ( ! function_exists( 'WPCW_courses_syncUserAccess' ) ) {
return;
}
$m4is_2rad9ypmg657y = get_option( 'memberium_wpcw',
 [] );
$m4is_2rad9ypmg657y = isset( $m4is_2rad9ypmg657y['courses']['access_tags'] ) ? $m4is_2rad9ypmg657y['courses']['access_tags'] : [];

$m4is_01b3sh3md6 = WPCW_users_getUserCourseList( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_7h4n65bnc9afhbv0x7svq9 = [];

foreach( $m4is_01b3sh3md6 as $m4is_dbkkvm60vrfe6dvcc56g3s ) {
$m4is_fgq4xtdb8 = $m4is_dbkkvm60vrfe6dvcc56g3s->course_id;

$m4is_1s53ejc0jsqkq2rbpmw6j3w629 = isset( $m4is_2rad9ypmg657y[$m4is_fgq4xtdb8] ) ? $m4is_2rad9ypmg657y[$m4is_fgq4xtdb8] : '';
if ( $m4is_dbkkvm60vrfe6dvcc56g3s->course_opt_user_access == 'default_show' ) {
$m4is_7h4n65bnc9afhbv0x7svq9[] = $m4is_fgq4xtdb8;

}
elseif ( ! empty( $m4is_1s53ejc0jsqkq2rbpmw6j3w629 ) ) {
if ( $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_1s53ejc0jsqkq2rbpmw6j3w629,
 $m4is_6mctr922hbmncpwfrp0x2k ) ) {
$m4is_7h4n65bnc9afhbv0x7svq9[] = $m4is_fgq4xtdb8;
}
}
}
foreach( $m4is_2rad9ypmg657y as $m4is_fgq4xtdb8 =>
 $m4is_1s53ejc0jsqkq2rbpmw6j3w629 ) {
if ( $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_1s53ejc0jsqkq2rbpmw6j3w629,
 $m4is_6mctr922hbmncpwfrp0x2k ) ) {
$m4is_7h4n65bnc9afhbv0x7svq9[] = $m4is_fgq4xtdb8;
}
}

$m4is_7h4n65bnc9afhbv0x7svq9 = array_unique( $m4is_7h4n65bnc9afhbv0x7svq9 );

WPCW_courses_syncUserAccess( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_7h4n65bnc9afhbv0x7svq9, 'sync' );
}

}