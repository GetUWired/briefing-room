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


final class m4is_9d027bygs12bxfbhjm50d {

public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
if ( ! class_exists( 'WP_E_Digital_Signature' ) ) {
error_log( 'Memberium: [error] WP E-Signature WP_E_Digital_Signature is missing. The WP E-Signature integration is disabled.' );

return;
}
if ( ! function_exists( 'WP_E_Sig' ) ) {
error_log( 'Memberium: [error] WP E-Signature WP_E_Sig function is missing. The WP E-Signature integration is disabled.' );

return;
}
$this->m4is_5eragr7sh2yyj356m();
if ( is_admin() ) {
if ( include_once( __DIR__ . '/admin.php' ) ) {
m4is_9m2w60f3s0rm0j4dxqc75s08a91::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
else {
error_log( 'Memberium: [error] Failed to include admin functionality for WP E-Signature integration.' );
}
}
}

private function m4is_5eragr7sh2yyj356m() : void {
add_action( 'esig_document_basic_closing',
 [$this, 'm4is_qq16z8ne9f4'], 10, 1 );
add_action( 'esig_signature_saved', [$this, 'm4is_qq16z8ne9f4'], 10, 1 );
}

public function m4is_pj0x41dmd40y87198nz9eh20() {
return WP_E_Sig();

}

public function m4is_qq16z8ne9f4( array $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn ) : void {
$m4is_cr1qsca669hb3j56wq12p = $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['sad_doc_id'] ?? 0;

if ( ! $m4is_cr1qsca669hb3j56wq12p ) {
return; 
}

$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = $this->m4is_pj0x41dmd40y87198nz9eh20()->meta->get( $m4is_cr1qsca669hb3j56wq12p,
 '_is4wp_esignature_tags' );
if ( empty( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj ) ) {
return;
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0;

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['recipient']->wp_user_id ?? 0;
if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
$m4is_15yq5r4y88kyvr67sd3yq3a4aw916s = $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['recipient']->user_email ?? '';

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_06a6ggsb0zg8pv1t4852qe( $m4is_15yq5r4y88kyvr67sd3yq3a4aw916s );

}
else {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

}
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}