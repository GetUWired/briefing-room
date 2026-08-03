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

final class m4is_mnrnn1v4d9zgwdk7r4s319q4 {
private
$m4is_132xe588j;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_132xe588j->m4is_srz8z3mthfjnv7k97qswwjyb71kk7ra( 'm4is_avrk98nvt32hmze4nejzcna11wh', __DIR__ . '/shortcodes' );
add_action('memberium/shortcodes/add',
 [$this, 'm4is_jp0rgxf2ytap1chmfg']);
$this->m4is_jp0rgxf2ytap1chmfg();
$this->m4is_5eragr7sh2yyj356m();
}
private function m4is_5eragr7sh2yyj356m() {
add_action( 'template_redirect',
 [$this, 'm4is_nhgz3ne9k6ns'], 11 );
}
public function m4is_nhgz3ne9k6ns() {
if ( ! is_buddypress() ) {
return;
}
$m4is_k7ce3r521ps4ecrf = bp_current_component();

if ( ! $m4is_k7ce3r521ps4ecrf ) {
return;
}
$m4is_k7ce3r521ps4ecrf = $m4is_k7ce3r521ps4ecrf == 'profile' ? 'members' : $m4is_k7ce3r521ps4ecrf;

$m4is_tz1rt7sbq40fade6e6rx = bp_core_get_directory_page_id( $m4is_k7ce3r521ps4ecrf );
if ( ! $m4is_tz1rt7sbq40fade6e6rx ) {
return;

}
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$m4is_r7mxjxrgcx = $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_krs2avqy019m3mx( $m4is_tz1rt7sbq40fade6e6rx );

if ( $m4is_r7mxjxrgcx ) {
return;
}
$m4is_knxbec8fr3be1s2tkx0ydee0z = $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_v75x9g18kvwf86vy5e0pgh6( $m4is_tz1rt7sbq40fade6e6rx );

if ( $m4is_knxbec8fr3be1s2tkx0ydee0z == 'hide' ) {
global $wp_query;
$wp_query->set_404();
status_header( 404 );
return;
}
elseif ( $m4is_knxbec8fr3be1s2tkx0ydee0z == 'redirect' ) {
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_04xfq1nph5g53725w9( $m4is_tz1rt7sbq40fade6e6rx );

}
}
public function m4is_jp0rgxf2ytap1chmfg() {
$m4is_53mq3k4adf3m0 = 'm4is_avrk98nvt32hmze4nejzcna11wh';
add_shortcode( 'memb_buddypressgroup_grid',
 [$m4is_53mq3k4adf3m0, 'm4is_pr3w8st48n3'] );
add_shortcode( 'memb_has_profile_type', [$m4is_53mq3k4adf3m0, 'm4is_15wfh83jxkpzg4k43fsx7f4m'] );

}
}