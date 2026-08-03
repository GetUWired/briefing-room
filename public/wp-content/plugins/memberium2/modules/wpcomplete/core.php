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

final class m4is_p1vmkhb7nhw2kjaz0d {
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
private function m4is_5eragr7sh2yyj356m() : void {
add_action( 'wpcomplete_page_completed',
 [$this, 'm4is_2smtff4vxe9j2p7ycx95cf89xana2s'] );
add_action( 'wpcomplete_course_completed', [$this, 'm4is_2smtff4vxe9j2p7ycx95cf89xana2s'] );

}
private function m4is_r8emp2zcmhv1twqx3qx8mv() : void {
if ( is_admin() ) {
if ( include_once( __DIR__ . '/admin.php' ) ) {
m4is_m2k2nybzntskhsdwkzzck::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
}
public function m4is_2smtff4vxe9j2p7ycx95cf89xana2s( $m4is_d60kn1d3yvprp62rs332 = [] ) : void {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = isset($m4is_d60kn1d3yvprp62rs332['user_id']) ? $m4is_d60kn1d3yvprp62rs332['user_id'] : $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_tz1rt7sbq40fade6e6rx = isset($m4is_d60kn1d3yvprp62rs332['post_id']) ? $m4is_d60kn1d3yvprp62rs332['post_id'] : 0;
$m4is_9sayev0ehq7xweqyww3h = isset($m4is_d60kn1d3yvprp62rs332['button_id']) ? $m4is_d60kn1d3yvprp62rs332['button_id'] : 0;

$m4is_fgq4xtdb8 = isset($m4is_d60kn1d3yvprp62rs332['course']) ? $m4is_d60kn1d3yvprp62rs332['course'] : 0;
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( empty( $m4is_1wvxap4nar95h98 ) ) {
return;
}
$m4is_06c8s5xs94f91335gnaey25 = get_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_is4wp_wpcomplete_tags',
 true);
if ( empty( $m4is_06c8s5xs94f91335gnaey25) ) {
return;
}
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_06c8s5xs94f91335gnaey25,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}
