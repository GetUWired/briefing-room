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

final class m4is_q9d7srb6mmjgnc8fdk775qe {
private $metas;
private m4is_6y9612z4hjd6fzpap4r5n853641m1jc $m4is_132xe588j;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_5eragr7sh2yyj356m();

}
private function m4is_5eragr7sh2yyj356m() : void {
add_action( 'admin_init', [$this, 'm4is_sxwy05a6n9qrk9z379q2n4cmg44s3z71'] );

add_filter( 'memberium/modules/active/names', [$this, 'm4is_v9eeymdh30mk'], 10, 1 );
add_filter( 'woocommerce_helper_suppress_admin_notices',
 '__return_true' );
}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->metas = [
'_memberium_canc_tag',
'_memberium_main_tag',
'_memberium_payf_tag',
'_memberium_susp_tag',
m4is_fe9nkjefxy9e1dw27me4hsqr::M4IS_N41BMKAA686MKBD11AB,

];
}

private function m4is_0bb6xadbgxh8ns15zmyt() : array {
return $this->metas;
}

public function m4is_v9eeymdh30mk( array $m4is_jq2e3019hp45103bhm95sxmccqd8 ) : array {
return array_merge( $m4is_jq2e3019hp45103bhm95sxmccqd8,
 [
'WooCommerce for Memberium Support'
] );
}

public function m4is_sxwy05a6n9qrk9z379q2n4cmg44s3z71() : void {
add_meta_box( 'memberium\woocommerce\actions',
'Memberium WooCommerce', [$this, 'm4is_xpm9cpp8sn6yf0d29052n2xwsf984p5'], 'product', 'side' );
add_action( 'save_post_product', [$this,
 'm4is_h45s0j1x82yyawxyr7gmjm8a0c4s'] );
}

public function m4is_xpm9cpp8sn6yf0d29052n2xwsf984p5() : void {
global $post;
$m4is_01sn06zafrx7mhtnevkeh60 = (int) get_post_meta( $post->ID,
 '_memberium_main_tag', true );
$m4is_77c1f8wqfpxww1qzf5nmv4yz93nzc = (int) get_post_meta( $post->ID, '_memberium_canc_tag', true );

$m4is_tca8vs1qq7k3290p1xhtk81psc4wxnh = (int) get_post_meta( $post->ID, '_memberium_payf_tag', true );
$m4is_jwzdx6bdx2eah3ngymhtf9fy7r = (int) get_post_meta( $post->ID,
 '_memberium_susp_tag', true );
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = trim( (string) get_post_meta( $post->ID, '_memberium_checkout_redirect',
 true ) );
$m4is_tc2rvgx9g841bfr7a07tcjh = __('Checkout Redirect URL', 'memberium');
$m4is_t6pewt4w = 'Leave blank for WooCommerce checkout';

$m4is_t6pewt4w = ($m4is_tfecza742dzhrkkbv781dnbvf40m6 > '' ? 'Default Redirect to ' . $m4is_tfecza742dzhrkkbv781dnbvf40m6 : $m4is_t6pewt4w);

$m4is_8m1z8c8gc0g8p83bvvy = __( "Access Tag", 'memberium' );
$m4is_fjfbrez18repkbcxwbsst = __( "Cancel Tag", 'memberium' );
$m4is_wyt29n58hdq = __( "Payment Failure Tag",
 'memberium' );
$m4is_khv7st4absv3wwjz6ep4wkcxy2bz9cc = __( "Suspend/On-Hold Tag", 'memberium' );
echo <<<HTMLBLOCK

			<label for="_memberium_main_tag">{$m4is_8m1z8c8gc0g8p83bvvy}:</label>
			<input name="_memberium_main_tag" value="{$m4is_01sn06zafrx7mhtnevkeh60}" class="taglistdropdown" style="width:100%; max-width:100%"><br />
			<br />

			<label for="_memberium_canc_tag">{$m4is_fjfbrez18repkbcxwbsst}:</label>
			<input name="_memberium_canc_tag" value="{$m4is_77c1f8wqfpxww1qzf5nmv4yz93nzc}" class="taglistdropdown" style="width:100%; max-width:100%"><br />
			<br />

			<label for="_memberium_payf_tag">{$m4is_wyt29n58hdq}:</label>
			<input name="_memberium_payf_tag" value="{$m4is_tca8vs1qq7k3290p1xhtk81psc4wxnh}" class="taglistdropdown" style="width:100%; max-width:100%"><br />
			<br />

			<label for="_memberium_susp_tag">{$m4is_khv7st4absv3wwjz6ep4wkcxy2bz9cc}:</label>
			<input name="_memberium_susp_tag" value="{$m4is_jwzdx6bdx2eah3ngymhtf9fy7r}" class="taglistdropdown" style="width:100%; max-width:100%"><br />
			<br />

			<label for="_memberium_checkout_redirect">{$m4is_tc2rvgx9g841bfr7a07tcjh}</label>
			<input type="text" id="_memberium_checkout_redirect" name="_memberium_checkout_redirect" style="width:100%; max-width:100%" rows="1" value="{$m4is_tfecza742dzhrkkbv781dnbvf40m6}" placeholder="{$m4is_t6pewt4w}">
			<br />
		HTMLBLOCK;

}

public function m4is_h45s0j1x82yyawxyr7gmjm8a0c4s( int $m4is_tz1rt7sbq40fade6e6rx ) : void {

if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
return;

}
if ( ! current_user_can( 'edit_posts', $m4is_tz1rt7sbq40fade6e6rx ) ) {
return;
}
if ( ! $m4is_tz1rt7sbq40fade6e6rx ) {
return;
}
$m4is_tddvps3j2krmkw = $this->m4is_0bb6xadbgxh8ns15zmyt();

foreach( $m4is_tddvps3j2krmkw as $m4is_3ey0a4er2 ) {
if ( isset( $_POST[$m4is_3ey0a4er2] ) ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = trim( $_POST[$m4is_3ey0a4er2],
 ',' );
empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ? delete_post_meta( $m4is_tz1rt7sbq40fade6e6rx, $m4is_3ey0a4er2 ) : update_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_3ey0a4er2, $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
}
}
}
