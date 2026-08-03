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


final class m4is_9m2w60f3s0rm0j4dxqc75s08a91 {
private m4is_9d027bygs12bxfbhjm50d $m4is_mxppm70dg3mzdrnf4g83;
private object $m4is_25x658jabfdaj;


static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}

private function __construct() {


$this->m4is_5eragr7sh2yyj356m();
}

private function m4is_5eragr7sh2yyj356m() : void {


add_action( 'esig_display_right_sidebar',
 [$this, 'm4is_fgw47szjnbe1mhhfe2zw8f'], 10 );
add_action( 'esig_document_after_save', [$this, 'm4is_2g5cc3bgbbnfxdxejg95y'] );
add_filter( 'memberium/modules/active/names',
 [$this, 'm4is_y89x3aj8tzzpeak2z80p'], 10, 1 );
add_filter( 'memberium/enhanced_admin_scripts', [$this, 'm4is_cm21zv3d53m5xbvm10mrzz'] );

}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {

$this->m4is_25x658jabfdaj = $this->m4is_mxppm70dg3mzdrnf4g83->m4is_pj0x41dmd40y87198nz9eh20();

}
public function m4is_y89x3aj8tzzpeak2z80p( $m4is_jq2e3019hp45103bhm95sxmccqd8 = [] ) {
return array_merge( $m4is_jq2e3019hp45103bhm95sxmccqd8,
 ['WP E-Signature for Memberium'] );
}
public function m4is_rn4jw0s88rrjf8wj5bmaajgdzew76w() {
return [
'esign',
];
}
public function m4is_fgw47szjnbe1mhhfe2zw8f( $m4is_d60kn1d3yvprp62rs332 = '' ) {
$m4is_mxppm70dg3mzdrnf4g83 = m4is_9d027bygs12bxfbhjm50d::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$m4is_cr1qsca669hb3j56wq12p = isset( $_GET['document_id'] ) ? $_GET['document_id'] : 0;
$m4is_3rz9a3gxbvtyq2qwgzh5 = "memberium_esignature_nonce_{$m4is_cr1qsca669hb3j56wq12p}";

$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = $m4is_mxppm70dg3mzdrnf4g83->m4is_pj0x41dmd40y87198nz9eh20()->meta->get( $m4is_cr1qsca669hb3j56wq12p,
 '_is4wp_esignature_tags' );
$m4is_1090xawqcx3q9p = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$m4is_vmhtx2ecrnzjpy = wp_nonce_field( __FILE__,
 $m4is_3rz9a3gxbvtyq2qwgzh5, true, false);
$m4is_8885fxaz390nzn24abhfmw = $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj > '' ? $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj : '';

$m4is_gb01jqxh9ek2m = '';
$m4is_gb01jqxh9ek2m .= '<div class="postbox esign-form-panel">';
$m4is_gb01jqxh9ek2m .= '<h3 class="esig-section-title" style="padding-left:0">Memberium Integration</h3>';

$m4is_gb01jqxh9ek2m .= '<div class="esig-inside">';
$m4is_gb01jqxh9ek2m .= $m4is_vmhtx2ecrnzjpy;
$m4is_gb01jqxh9ek2m .= '<label for="_is4wp_esignature_tags">Add Tag when signed:</label>';

$m4is_gb01jqxh9ek2m .= '<input value="' . $m4is_8885fxaz390nzn24abhfmw . '" name="_is4wp_esignature_tags" class="multitaglist" style="width:95%; max-width:95%"><br /><br />';

$m4is_gb01jqxh9ek2m .= '</div>';
$m4is_gb01jqxh9ek2m .= '</div>';
add_action( 'admin_footer', [$m4is_1090xawqcx3q9p, 'm4is_e2f4xq95m09m10s6ehrhvz'] );

echo $m4is_gb01jqxh9ek2m;
return $m4is_d60kn1d3yvprp62rs332;
}

public function m4is_2g5cc3bgbbnfxdxejg95y( $m4is_zrjw3hsmj1fgphgx31j6d486mf46dvq4 ) {

if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
return;

}
$m4is_cr1qsca669hb3j56wq12p = isset($m4is_zrjw3hsmj1fgphgx31j6d486mf46dvq4['document']->document_id) ? $m4is_zrjw3hsmj1fgphgx31j6d486mf46dvq4['document']->document_id : 0;

$m4is_3rz9a3gxbvtyq2qwgzh5 = "memberium_esignature_nonce_{$m4is_cr1qsca669hb3j56wq12p}";
if ( empty( $_POST[$m4is_3rz9a3gxbvtyq2qwgzh5] ) || ! wp_verify_nonce( $_POST[$m4is_3rz9a3gxbvtyq2qwgzh5],
 __FILE__ ) ) {
return;
}

$m4is_t7ss27sn8dc4ezemec9emt = [
'_is4wp_esignature_tags',
];
$m4is_mxppm70dg3mzdrnf4g83 = m4is_9d027bygs12bxfbhjm50d::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$m4is_jyz6y70aeae03chqtts6pn0gb0kc8 = $m4is_mxppm70dg3mzdrnf4g83->m4is_pj0x41dmd40y87198nz9eh20();
foreach( $m4is_t7ss27sn8dc4ezemec9emt as $m4is_j8j55t8dz79m7 ) {
$_POST[$m4is_j8j55t8dz79m7] = isset( $_POST[$m4is_j8j55t8dz79m7] ) ? $_POST[$m4is_j8j55t8dz79m7] : '';

if (empty($_POST[$m4is_j8j55t8dz79m7])) {
$m4is_jyz6y70aeae03chqtts6pn0gb0kc8->m4is_25x658jabfdaj->meta->delete($m4is_cr1qsca669hb3j56wq12p,
$m4is_j8j55t8dz79m7);
}
else {
$m4is_jyz6y70aeae03chqtts6pn0gb0kc8->meta->add($m4is_cr1qsca669hb3j56wq12p, $m4is_j8j55t8dz79m7, $_POST[$m4is_j8j55t8dz79m7]) or $m4is_jyz6y70aeae03chqtts6pn0gb0kc8->meta->update($m4is_cr1qsca669hb3j56wq12p,
 $m4is_j8j55t8dz79m7, $_POST[$m4is_j8j55t8dz79m7]);
}
}
}

public function m4is_cm21zv3d53m5xbvm10mrzz( array $m4is_3g7faa0zhw70) : array {
$m4is_3g7faa0zhw70[] = 'admin_page_esign-edit-document';

return $m4is_3g7faa0zhw70;
}

}