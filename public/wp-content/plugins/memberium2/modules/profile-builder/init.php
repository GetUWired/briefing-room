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

if ( ! defined( 'PROFILE_BUILDER_VERSION' ) ) {
return;
}

add_action( 'wppb_password_reset', 'm4is_cjx5k66cpw6jhvfyfcp', 10, 2 );


function m4is_cjx5k66cpw6jhvfyfcp( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g ) {

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = abs( intval( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) );


$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );


$m4is_jrbbv650tt4nt9f6fz = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' );

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp < 1 || empty( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g ) || empty( $m4is_jrbbv650tt4nt9f6fz ) ) {
return;

}

m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_8sqkcc4ebfed07z6qzkv9edmnxzjh( $m4is_jrbbv650tt4nt9f6fz,
 $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
add_filter( 'memberium/modules/active/names', function( $m4is_jq2e3019hp45103bhm95sxmccqd8 ) {
return array_merge( $m4is_jq2e3019hp45103bhm95sxmccqd8,
 ['Profile Builder for Memberium'] );
});
