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


class_exists( 'm4is_knfcbrvkjrz3n8k8y6gf' ) || die();

?>
<style>
	.columns {
		float:left;
		width:30%;
		display:inline-block;
		text-align:left;
		margin-right:25px;
		min-width:300px;
	}
</style>
<?php

m4is_q4t710869z93rw555m49p36g1p3243r::m4is_ranr89c2gngyncmfbwyag76f1rq();

final class m4is_q4t710869z93rw555m49p36g1p3243r {
private
$m4is_xxeepd3fj8te3wkzm7qne7f;
static function m4is_ranr89c2gngyncmfbwyag76f1rq() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_xxeepd3fj8te3wkzm7qne7f = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_qa5sc27b67y2mhah5y76zv();

m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_h9t0p5fc1('view_integrations' );
$this->m4is_9h2dvtt51gxyr3kv26dxvt1gt9kg0rb();

}
private function m4is_9h2dvtt51gxyr3kv26dxvt1gt9kg0rb() {
echo '<div style="width:100%;border-color:#000;">';
echo '<div class="columns">';

echo '<h3>Active Modules</h3>';
echo '<p class="indented">';
$this->m4is_52vxptt2vh1qrfw7xg2m5ammf();
echo '</p>';
echo '<h3>Activated Integrations</h3>';

echo '<p class="indented">';
$this->m4is_r31a1kjdtbzv();
echo '</p>';
echo '</div>';
echo '<div class="columns">';
echo '<h3>Potential conflicts</h3>';

echo '<p class="indented">';
$this->m4is_g9bzencztdca3gtsxd();
echo '</p>';

echo '</div>';
echo '</div>';
echo '<p></p>';
}
private function m4is_52vxptt2vh1qrfw7xg2m5ammf() {
$m4is_jq2e3019hp45103bhm95sxmccqd8 = apply_filters( 'memberium/modules/active/names',
 [] );
if ( ! empty( $m4is_jq2e3019hp45103bhm95sxmccqd8 ) ) {
sort( $m4is_jq2e3019hp45103bhm95sxmccqd8 );
foreach( $m4is_jq2e3019hp45103bhm95sxmccqd8 as $m4is_hce1y1a4qd65zhnwsj ) {
printf( '<strong class="goodplugin">%s</strong><br>',
 $m4is_hce1y1a4qd65zhnwsj );
}
}
}
private function m4is_r31a1kjdtbzv() {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = ! empty( $this->m4is_xxeepd3fj8te3wkzm7qne7f['detected'] ) && is_array( $this->m4is_xxeepd3fj8te3wkzm7qne7f['detected'] );

if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
foreach ( $this->m4is_xxeepd3fj8te3wkzm7qne7f['detected'] as $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf ) {
$m4is_b0agdj5923x5jcwm3tj2sc79417s9wyq = isset( $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf['help'] ) ? m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf['help'] ) : '';

printf( '<span class="%splugin">%s</span> %s<br />', $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf['class'], $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf['name'],
 $m4is_b0agdj5923x5jcwm3tj2sc79417s9wyq );
}
}
else {
echo '<span>None</span><br />';
}
}
private function m4is_g9bzencztdca3gtsxd() {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = ! empty( $this->m4is_xxeepd3fj8te3wkzm7qne7f['problem'] ) && is_array( $this->m4is_xxeepd3fj8te3wkzm7qne7f['problem'] );

if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
foreach ( $this->m4is_xxeepd3fj8te3wkzm7qne7f['problem'] as $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf ) {
$m4is_b0agdj5923x5jcwm3tj2sc79417s9wyq = empty( $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf['help'] ) ? '' : m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf['help'] );

printf( '<span class="badplugin %splugin">%s</span> %s<br />', $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf['class'], $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf['name'],
 $m4is_b0agdj5923x5jcwm3tj2sc79417s9wyq );
}
}
else {
echo 'No known conflicts detected.<br />';
}
}
private function m4is_p2ackqt4vzpgcny1erp0qg86ky() {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = ! empty( $this->m4is_xxeepd3fj8te3wkzm7qne7f['available'] ) && is_array( $this->m4is_xxeepd3fj8te3wkzm7qne7f['available'] );

if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
foreach ( $this->m4is_xxeepd3fj8te3wkzm7qne7f['available'] as $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf ) {
$m4is_b0agdj5923x5jcwm3tj2sc79417s9wyq = empty( $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf['help'] ) ? '' : m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf['help'] );

printf( '%s %s<br />', $m4is_6yxj8gszfw8fmkbpb68vp9s8d4v80adf['name'], $m4is_b0agdj5923x5jcwm3tj2sc79417s9wyq );
}
}
else {
echo 'No additional available integrations.<br>';

}
}
}
