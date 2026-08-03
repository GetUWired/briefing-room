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

final class m4is_ceb204yxgttkb1dvyrsjh2ww7qvw3 {
const VERSION = '1.0';
private $m4is_132xe588j;
private $m4is_1090xawqcx3q9p = false;

private $m4is_j6mp1xp1bf6 = false;
private $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = false;
private $m4is_63jp3myxhpk1eyb606fb = [];

public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;

}
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$this->m4is_z6c3r724qhd();
}

private function m4is_z6c3r724qhd() : void {
$this->m4is_132xe588j->m4is_30j08k6rn5y4pz4w( [
'm4is_0jwc22e11j9k0y54c5' =>
 __DIR__ . '/cron',
'm4is_v5ev659gsvnwc4' => __DIR__ . '/shortcodes',
] );
$this->m4is_aht1br9fec4css4grr9gyx();
if ( is_admin() ) {
require_once __DIR__ . '/admin.php';

m4is_zbm5j479wh72fyzzd31c::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
else {
$this->m4is_jp0rgxf2ytap1chmfg();
}
}

private function m4is_aht1br9fec4css4grr9gyx() : void {
$m4is_1xxrf32201y4yx6tdw931ek42psjghv = time();

$m4is_r3k9d88yfys3hpk2k3jcb9dc = [
'memberium/affiliates/scan_stale_leaderboards' => [ 'i' => 'twicedaily', 'o' => 0 ],
];
foreach( $m4is_r3k9d88yfys3hpk2k3jcb9dc as $m4is_2wf7nssy06p =>
 $m4is_d60kn1d3yvprp62rs332 ) {
$m4is_d2m7dka019zn1w9j = $m4is_d60kn1d3yvprp62rs332['o'] == 0 ? $m4is_1xxrf32201y4yx6tdw931ek42psjghv : $m4is_1xxrf32201y4yx6tdw931ek42psjghv + rand( 0,
 30 );
wp_next_scheduled( $m4is_2wf7nssy06p ) || wp_schedule_event( $m4is_d2m7dka019zn1w9j, $m4is_d60kn1d3yvprp62rs332['i'], $m4is_2wf7nssy06p );

}
add_action( 'memberium/affiliates/scan_stale_leaderboards', ['m4is_0jwc22e11j9k0y54c5', 'm4is_rxm0fnk9thg7j'] );
}

public function m4is_5kywzj74m8ht8s0() : string {
return self::VERSION;

}

public function m4is_eb4a3nfe63889q1ndrs() : array {
$m4is_63jp3myxhpk1eyb606fb = get_option( 'memberium_leaderboard_profiles',
 [] );
$m4is_63jp3myxhpk1eyb606fb = is_array( $m4is_63jp3myxhpk1eyb606fb ) ? $m4is_63jp3myxhpk1eyb606fb : [];
return $m4is_63jp3myxhpk1eyb606fb;

}

public function m4is_9eb007p5xr35apr5dw1wex6t7tbdg1a( array $m4is_63jp3myxhpk1eyb606fb ): void {
update_option( 'memberium_leaderboard_profiles',
 $m4is_63jp3myxhpk1eyb606fb );
$this->m4is_63jp3myxhpk1eyb606fb = $m4is_63jp3myxhpk1eyb606fb;
}

function m4is_vbxst07x3wyhm7ja( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) : array {
$this->m4is_63jp3myxhpk1eyb606fb = $this->m4is_eb4a3nfe63889q1ndrs();

foreach( $this->m4is_63jp3myxhpk1eyb606fb as $m4is_j8j55t8dz79m7 => $m4is_fh91430wnqcvjs3 ) {
if ( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh === $m4is_j8j55t8dz79m7 || 0 === strcasecmp( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_fh91430wnqcvjs3['name'] ) ) {
return $m4is_fh91430wnqcvjs3;
}
}
return [];
}

function m4is_jp0rgxf2ytap1chmfg() : void {
add_action( 'memberium/shortcodes/add',
 [$this, 'm4is_jp0rgxf2ytap1chmfg'] );
add_shortcode( 'memb_show_leaderboard', ['m4is_v5ev659gsvnwc4', 'm4is_s067f8mmzfm1jt1'] );
}

}