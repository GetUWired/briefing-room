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

final class m4is_0p1hcfetav4p3vt3zyz3ey81 {
private $m4is_jbay7tk10g7ajn7na32d180dz3erdyn = [];
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
private function m4is_r8emp2zcmhv1twqx3qx8mv() : void {
if ( is_admin() ) {
require_once __DIR__ . '/admin.php';
m4is_ktywfwzy61368wgem23n9027mc5::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
private function m4is_5eragr7sh2yyj356m() : void {
add_filter( 'memberium/posts/unenhanced', [$this, 'm4is_k884h95yzaeww1gd0r34tbfrkd3'],
 10, 1 );
add_filter( 'memberium/session/updated', [$this, 'm4is_rxez7at5cn4vvwdsstyqj4353ghye'], 10, 2 );
add_action( 'memberium/lms/completion',
 [$this, 'm4is_9cj17fjzr0m5x8'], 10, 2 );

add_action( 'gamipress_award_achievement', [$this, 'm4is_cxswvsj0y79vkj6hmpe'], 10, 2 );

add_action( 'gamipress_update_user_rank', [$this, 'm4is_11sq6agx6vdx14yv1dyv1w9vmz91'], 10, 5 );
add_action( 'gamipress_award_rank_to_user',
 [$this, 'm4is_jbjre92nbfqjf68px0qqnaq80frpah'], 10, 3 );




}

private function m4is_7j2f2gf04cz74ny( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0 ) : array {
$m4is_g61yzqs7ecta0xztr70d7v = [
'user_id' =>
 $m4is_wk4dh1rnd3wmwvsggq51nhn87,
];
$m4is_w4q3zxfbrt099 = gamipress_get_user_achievements( $m4is_g61yzqs7ecta0xztr70d7v );
return array_filter( array_map( function( $m4is_1dn54f14cskh6y34 ){
return $m4is_1dn54f14cskh6y34->ID;

}, $m4is_w4q3zxfbrt099) );
}

private function m4is_bjbmjtyngawd0( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$m4is_g61yzqs7ecta0xztr70d7v = [
'user_id' =>
 $m4is_wk4dh1rnd3wmwvsggq51nhn87,
];
$m4is_daa9rqxjw65egenb4srr = gamipress_get_user_achievements( $m4is_g61yzqs7ecta0xztr70d7v );
return array_map( function( $m4is_1f637petr7p9e ){
return $m4is_1f637petr7p9e->ID;

}, $m4is_daa9rqxjw65egenb4srr );
}
public function m4is_rxez7at5cn4vvwdsstyqj4353ghye( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, array $m4is_6mctr922hbmncpwfrp0x2k ) {
$m4is_06c8s5xs94f91335gnaey25 = empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'] ) ? [] : array_filter( explode( ',',
 $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'] ) );
if ( empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
return;
}
$this->m4is_50p75t4r075kr3wt2yhbf9c( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_06c8s5xs94f91335gnaey25 );
$this->m4is_8343nn68awejdq( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_06c8s5xs94f91335gnaey25 );
}
function m4is_50p75t4r075kr3wt2yhbf9c( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 array $m4is_06c8s5xs94f91335gnaey25 ) {
if ( ! function_exists( 'gamipress_award_achievement_to_user' ) ) {
return;
}
$m4is_tw4aw7p97g8csa = get_option( 'memberium/gamipress/assign_by_tag',
 [] );
$m4is_tw4aw7p97g8csa = is_array( $m4is_tw4aw7p97g8csa ) ? $m4is_tw4aw7p97g8csa : [];
if ( empty( $m4is_tw4aw7p97g8csa ) ) {
return;

}
$m4is_w4q3zxfbrt099 = $this->m4is_7j2f2gf04cz74ny( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
foreach( $m4is_tw4aw7p97g8csa as $m4is_h044sn965cer01edn41s =>
 $m4is_hf6ctsm2pnexk ) {
if ( ! in_array( $m4is_h044sn965cer01edn41s, $m4is_w4q3zxfbrt099 ) ) {
if ( in_array( $m4is_hf6ctsm2pnexk,
 $m4is_06c8s5xs94f91335gnaey25 ) ) {
gamipress_award_achievement_to_user( $m4is_h044sn965cer01edn41s, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

}
}
}
}



function m4is_8343nn68awejdq( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, array $m4is_06c8s5xs94f91335gnaey25 ) {
if ( ! function_exists( 'gamipress_award_rank_to_user' ) ) {
return;

}
$m4is_tw4aw7p97g8csa = get_option( 'memberium/gamipress/rank/rank_by_tag', [] );
$m4is_tw4aw7p97g8csa = is_array( $m4is_tw4aw7p97g8csa ) ? $m4is_tw4aw7p97g8csa : [];

if ( empty( $m4is_tw4aw7p97g8csa ) ) {
return;
}

$m4is_ty972pfrb = $this->m4is_bjbmjtyngawd0( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
foreach( $m4is_ty972pfrb as $m4is_2nr0ynagwreptbtsbwma6kvna ) {
unset( $m4is_tw4aw7p97g8csa[$m4is_2nr0ynagwreptbtsbwma6kvna] );

}

foreach ( $m4is_tw4aw7p97g8csa as $m4is_bs4095ym8fzt1tyjr7j90zry5 => $m4is_hf6ctsm2pnexk ) {
if ( in_array( $m4is_hf6ctsm2pnexk,
 $m4is_06c8s5xs94f91335gnaey25 ) ) {
gamipress_award_rank_to_user( $m4is_bs4095ym8fzt1tyjr7j90zry5, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

}
}
}
function m4is_cxswvsj0y79vkj6hmpe( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, int $m4is_h044sn965cer01edn41s ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_tw4aw7p97g8csa = get_option( 'memberium/gamipress/tag_by_badge', [] );

if ( empty( $m4is_tw4aw7p97g8csa ) || ! is_array( $m4is_tw4aw7p97g8csa ) ) {
return;
}
if ( array_key_exists( $m4is_h044sn965cer01edn41s,
 $m4is_tw4aw7p97g8csa ) ) {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = $m4is_tw4aw7p97g8csa[$m4is_h044sn965cer01edn41s];
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}
function m4is_11sq6agx6vdx14yv1dyv1w9vmz91( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_9grvbmy38w,
 $old_rank, $admin_id, $achievement_id ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_bs4095ym8fzt1tyjr7j90zry5 = $m4is_9grvbmy38w->ID;
$m4is_tw4aw7p97g8csa = get_option( 'memberium/gamipress/rank/tag_by_rank',
 [] );
if ( empty( $m4is_tw4aw7p97g8csa ) ) {
return;
}
if ( array_key_exists( $m4is_bs4095ym8fzt1tyjr7j90zry5, $m4is_tw4aw7p97g8csa ) ) {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = $m4is_tw4aw7p97g8csa[$m4is_bs4095ym8fzt1tyjr7j90zry5];

$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}
function m4is_jbjre92nbfqjf68px0qqnaq80frpah( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 int $m4is_bs4095ym8fzt1tyjr7j90zry5, $m4is_g61yzqs7ecta0xztr70d7v ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_tw4aw7p97g8csa = get_option( 'memberium/gamipress/rank/tag_by_rank',
 [] );
if ( empty( $m4is_tw4aw7p97g8csa ) ) {
return;
}
if ( array_key_exists( $m4is_bs4095ym8fzt1tyjr7j90zry5, $m4is_tw4aw7p97g8csa ) ) {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = $m4is_tw4aw7p97g8csa[$m4is_bs4095ym8fzt1tyjr7j90zry5];

$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}



function m4is_9cj17fjzr0m5x8( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 int $m4is_tz1rt7sbq40fade6e6rx ) {
if (! function_exists('gamipress_maybe_award_achievement_to_user') ) {
return;
}
$m4is_p9mahpm1qc9p1d = get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_learndash_achievement', true);
if ($m4is_p9mahpm1qc9p1d) {
gamipress_award_achievement_to_user($m4is_p9mahpm1qc9p1d, $m4is_wk4dh1rnd3wmwvsggq51nhn87);

}
}
function m4is_k884h95yzaeww1gd0r34tbfrkd3(array $m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j = [] ) : array {
$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'achievement-type';

$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'nomination';
$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'step';
$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'submission';

$achievements = gamipress_get_achievement_types_slugs();
$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j = array_merge($m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j,
 $achievements);
return $m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j;
}
}