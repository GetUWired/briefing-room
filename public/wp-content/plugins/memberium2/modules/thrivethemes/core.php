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


class_exists( 'm4is_6y9612z4hjd6fzpap4r5n853641m1jc') || die();

final class m4is_bt3b7g83x97j {
private $m4is_132xe588j;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_nkvchvkbdcx6g();
}
private function m4is_nkvchvkbdcx6g() {
$m4is_drfzqdp3 = [
'm4is_qk80zy1waye8' => __DIR__ . '/entities/memberium',

'm4is_5j8r6bvs1hewaa6arz431nv1p12065' => __DIR__ . '/fields/tags',
'm4is_yfqx67wb' => __DIR__ . '/fields/memberships',
];
$this->m4is_132xe588j->m4is_30j08k6rn5y4pz4w( $m4is_drfzqdp3 );

add_action( 'init', [ $this, 'm4is_30j08k6rn5y4pz4w' ] );
add_filter( 'memberium/modules/active/names', [$this, 'm4is_v9eeymdh30mk'],
 10, 1 );
$this->m4is_nd8j0cvdtzrh();
}
function m4is_v9eeymdh30mk( array $m4is_jq2e3019hp45103bhm95sxmccqd8 ) : array {
return array_merge( $m4is_jq2e3019hp45103bhm95sxmccqd8,
 [ 'ThriveThemes Integration' ] );
}
function m4is_30j08k6rn5y4pz4w() {
tve_register_condition_entity( 'm4is_qk80zy1waye8' );
tve_register_condition_field( 'm4is_5j8r6bvs1hewaa6arz431nv1p12065' );

tve_register_condition_field( 'm4is_yfqx67wb' );
}
function m4is_nd8j0cvdtzrh( ?string $m4is_dr4qwcqmrv13r6nes32pap215w4j = '') : array {
$m4is_3h2p59t1q80qzpcs = (array) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' );

$m4is_y7084n6v67jme9va8yz = [];
foreach ($m4is_3h2p59t1q80qzpcs as $m4is_j8j55t8dz79m7 => $m4is_h9g6e5cga ) {
if ( empty( $m4is_dr4qwcqmrv13r6nes32pap215w4j ) || stripos( $m4is_h9g6e5cga['name'],
 $m4is_dr4qwcqmrv13r6nes32pap215w4j ) !== false ) {
$m4is_y7084n6v67jme9va8yz[$m4is_j8j55t8dz79m7] = $m4is_h9g6e5cga['name'];
}
}
return $m4is_y7084n6v67jme9va8yz;

}
}






