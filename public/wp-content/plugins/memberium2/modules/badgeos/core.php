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

final class m4is_39q6bgzf3fw3a84dk10 {
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




private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}

private function m4is_5eragr7sh2yyj356m() {
add_action( 'badgeos_award_achievement', [$this, 'm4is_cxswvsj0y79vkj6hmpe'], 10, 2 );

add_action( 'memberium/lms/completion', [$this, 'm4is_9cj17fjzr0m5x8'], 10, 2 );
add_filter( 'memberium/posts/unenhanced', [$this,
 'm4is_k884h95yzaeww1gd0r34tbfrkd3'], 10, 1 );
add_filter( 'memberium/session/updated', [$this, 'm4is_zm9nfwzq9bae5nkr1yqjj'], 10, 2 );

}

private function m4is_r8emp2zcmhv1twqx3qx8mv() : void {
if ( is_admin() ) {
require_once __DIR__ . '/admin.php';
m4is_mgacwcqeza17zrbs5aa32xndqtjpm03::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}




function m4is_k884h95yzaeww1gd0r34tbfrkd3( $m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j = [] ) {
$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'achievement-type';

$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'badgeos-log-entry';
$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'nomination';
$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'step';

$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'submission';
$m4is_w4q3zxfbrt099 = badgeos_get_achievement_types_slugs();
$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j = array_merge( $m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j,
 $m4is_w4q3zxfbrt099 );
return $m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j;
}

function m4is_cxswvsj0y79vkj6hmpe( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_h044sn965cer01edn41s ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_tw4aw7p97g8csa = get_option( 'memberium/badgeos/tag_by_badge', [] );

$m4is_tw4aw7p97g8csa = is_array( $m4is_tw4aw7p97g8csa ) ? array_filter( $m4is_tw4aw7p97g8csa ) : [];
if ( array_key_exists( $m4is_h044sn965cer01edn41s,
 $m4is_tw4aw7p97g8csa ) ) {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = $m4is_tw4aw7p97g8csa[$m4is_h044sn965cer01edn41s];
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}

function m4is_zm9nfwzq9bae5nkr1yqjj( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_6mctr922hbmncpwfrp0x2k ) {
$m4is_06c8s5xs94f91335gnaey25 = array_filter( explode( ',',
 $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'] ?? '' ) );
if ( empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
return;
}
$this->m4is_50p75t4r075kr3wt2yhbf9c( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_06c8s5xs94f91335gnaey25 );
}
function m4is_9cj17fjzr0m5x8( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_tz1rt7sbq40fade6e6rx ) {
if ( ! function_exists( 'badgeos_award_achievement_to_user' ) ) {
return;

}
$m4is_p9mahpm1qc9p1d = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx, '_is4wp_learndash_achievement', true );
if ( $m4is_p9mahpm1qc9p1d ) {
badgeos_award_achievement_to_user( $m4is_p9mahpm1qc9p1d,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
}

private function m4is_7j2f2gf04cz74ny( $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0 ) {
$m4is_g61yzqs7ecta0xztr70d7v = [
'user_id' =>
 $m4is_wk4dh1rnd3wmwvsggq51nhn87,
];
$m4is_w4q3zxfbrt099 = badgeos_get_user_achievements( $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_5268pcat914mv7ne7v8dq8xc = array_map( function( $m4is_1dn54f14cskh6y34 ) {
return $m4is_1dn54f14cskh6y34->ID;

}, $m4is_w4q3zxfbrt099 );
return $m4is_5268pcat914mv7ne7v8dq8xc;
}
private function m4is_50p75t4r075kr3wt2yhbf9c( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 array $m4is_06c8s5xs94f91335gnaey25 ) {
if ( ! function_exists( 'badgeos_award_achievement_to_user' ) ) {
return;
}
$m4is_tw4aw7p97g8csa = get_option( 'memberium/badgeos/assign_by_tag',
 [] );
$m4is_tw4aw7p97g8csa = is_array( $m4is_tw4aw7p97g8csa ) ? array_filter( $m4is_tw4aw7p97g8csa ) : [];
if ( empty( $m4is_tw4aw7p97g8csa) || empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
return;

}
$m4is_w4q3zxfbrt099 = $this->m4is_7j2f2gf04cz74ny( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
foreach( $m4is_tw4aw7p97g8csa as $m4is_h044sn965cer01edn41s =>
 $m4is_hf6ctsm2pnexk ) {
if ( ! empty( $m4is_hf6ctsm2pnexk ) ) {
if ( ! in_array( $m4is_h044sn965cer01edn41s, $m4is_w4q3zxfbrt099 ) ) {
if ( in_array( $m4is_hf6ctsm2pnexk,
 $m4is_06c8s5xs94f91335gnaey25 ) ) {
badgeos_award_achievement_to_user( $m4is_h044sn965cer01edn41s, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

}
}
}
}
}
}