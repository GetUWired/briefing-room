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


final class m4is_rsd655f0v4rbchffkyve1396rzdn {
public $slug = 'beaver_builder'; 
public $container_els = ['section', 'column']; 
public $module_visibility = [];
 
public $container_visibility = []; 
public $widget_visibility = []; 

public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_z6c3r724qhd();
}

private function m4is_z6c3r724qhd() : void {

add_action( 'fl_builder_before_render_row',
 [$this, 'm4is_81z3sda5vjm30'], 10, 2 );
add_action( 'fl_builder_after_render_row', [$this, 'm4is_j44zyyk9a1m0nkza3qqt48stxh5cjp'],
 10, 2 );

add_action( 'fl_builder_before_render_column_group', [$this, 'm4is_2dhyzdn36a7'], 10, 2 );
add_action( 'fl_builder_after_render_column_group',
 [$this, 'm4is_bn3evxnkrzy3t6hc3w'], 10, 2 );

add_action( 'fl_builder_before_render_module', [$this, 'm4is_eg9r78psnxpkx2khj4p9g'],
 10, 1 );
add_action( 'fl_builder_after_render_module', [$this, 'm4is_gxgjgcj0zpn7qt5bwvnnw4'], 10, 1 );
}

public function m4is_81z3sda5vjm30( object $m4is_bamv772v ) : void {
if ( ! $this->m4is_6pbxjqevfjmjdkq1c( $m4is_bamv772v->settings ) ){
$this->container_visibility[ $m4is_bamv772v->node ] = $m4is_bamv772v->node;

add_filter('fl_builder_template_path', [$this, 'm4is_f9tb2hgyft79k6vcy3esfc6ybcnmbn4'], 10, 3 );
}
}

public function m4is_j44zyyk9a1m0nkza3qqt48stxh5cjp( object $m4is_bamv772v ) : void {
if ( isset( $this->container_visibility[ $m4is_bamv772v->node ] ) ){
remove_filter( 'fl_builder_template_path',
 [$this, 'm4is_f9tb2hgyft79k6vcy3esfc6ybcnmbn4'], 10 );
unset( $this->container_visibility[ $m4is_bamv772v->node ] );
}
}

public function m4is_f9tb2hgyft79k6vcy3esfc6ybcnmbn4() : bool {
return false;

}

public function m4is_m8z1pptpewmrn30mmsy5wz92nng0r() : bool {
return false;
}

public function m4is_2dhyzdn36a7( object $m4is_00bnnh6s4bp6xfnew4kmj,
 array $m4is_r2ysmpyk9jvs5420n ) {
$m4is_6bns4m4b6swgcrhg7yay3 = true;
$m4is_bnghkmgw4mp = [];
if ( $m4is_6bns4m4b6swgcrhg7yay3 ){
if ( is_array( $m4is_r2ysmpyk9jvs5420n ) ){
$m4is_nj05wm1rhwb2byp95h2s = count($m4is_r2ysmpyk9jvs5420n);

foreach ($m4is_r2ysmpyk9jvs5420n as $m4is_cwt5wqpkhj9w9bt415ek4m7m0cj => $m4is_5ntpw9sak1c8vv0ejmw1k6p59g4k6) {
if ( $m4is_5ntpw9sak1c8vv0ejmw1k6p59g4k6->type === 'column' && $m4is_5ntpw9sak1c8vv0ejmw1k6p59g4k6->settings > '' ){
if ( ! $this->m4is_6pbxjqevfjmjdkq1c( $m4is_5ntpw9sak1c8vv0ejmw1k6p59g4k6->settings ) ) {
$m4is_nj05wm1rhwb2byp95h2s --;

if ( ! isset( $m4is_bnghkmgw4mp[ $m4is_00bnnh6s4bp6xfnew4kmj->node ] ) ){
$m4is_bnghkmgw4mp[ $m4is_00bnnh6s4bp6xfnew4kmj->node ] = [];

}
$m4is_bnghkmgw4mp[$m4is_00bnnh6s4bp6xfnew4kmj->node][$m4is_5ntpw9sak1c8vv0ejmw1k6p59g4k6->node] = $m4is_5ntpw9sak1c8vv0ejmw1k6p59g4k6->node;

}
}
}

if ( $m4is_nj05wm1rhwb2byp95h2s > 0 ){
if ( ! empty($m4is_bnghkmgw4mp) ){
$this->container_visibility[$m4is_00bnnh6s4bp6xfnew4kmj->parent] = $m4is_bnghkmgw4mp;

}
}

else {
if ( ! isset($this->container_visibility[$m4is_00bnnh6s4bp6xfnew4kmj->parent]) ) {
$this->container_visibility[ $m4is_00bnnh6s4bp6xfnew4kmj->parent ] = [];

}
$this->container_visibility[ $m4is_00bnnh6s4bp6xfnew4kmj->parent ][ $m4is_00bnnh6s4bp6xfnew4kmj->node ] = true;
add_filter( 'fl_builder_template_path',
 [$this, 'm4is_m8z1pptpewmrn30mmsy5wz92nng0r'], 2 );
}
}
}
}

public function m4is_bn3evxnkrzy3t6hc3w( object $m4is_00bnnh6s4bp6xfnew4kmj,
 array $m4is_r2ysmpyk9jvs5420n ) {
$m4is_5qr45zdkesq5nq = $m4is_00bnnh6s4bp6xfnew4kmj->parent;
$m4is_6gxy7dwq7mfa3vt3yxkz7de = $m4is_00bnnh6s4bp6xfnew4kmj->node;


if ( isset($this->container_visibility[$m4is_5qr45zdkesq5nq]) ) {

if ( isset( $this->container_visibility[ $m4is_5qr45zdkesq5nq ][ $m4is_6gxy7dwq7mfa3vt3yxkz7de ] ) ){

if ( is_array( $this->container_visibility[ $m4is_5qr45zdkesq5nq ][ $m4is_6gxy7dwq7mfa3vt3yxkz7de ] ) ){

}
else {

remove_filter('fl_builder_template_path',
 [$this, 'm4is_m8z1pptpewmrn30mmsy5wz92nng0r'], 10 );
unset( $this->container_visibility[ $m4is_5qr45zdkesq5nq ][ $m4is_6gxy7dwq7mfa3vt3yxkz7de ] );

}
}

if ( empty( $this->container_visibility[ $m4is_5qr45zdkesq5nq ] ) ){
unset( $this->container_visibility[ $m4is_5qr45zdkesq5nq ] );

}
}
}

public function m4is_eg9r78psnxpkx2khj4p9g( object $m4is_re955zqwq0c9x4hc18zgse846 ) : void {
$m4is_zzkj3n3rrretcb = $this->m4is_6pbxjqevfjmjdkq1c( $m4is_re955zqwq0c9x4hc18zgse846->settings );

if ( $m4is_zzkj3n3rrretcb ) {

if ( is_array( $this->container_visibility ) && ! empty( $this->container_visibility ) ){
foreach ( $this->container_visibility as $m4is_cddz42dndq0yjaqpa0 =>
 $m4is_bamv772v ) {

if ( is_array( $m4is_bamv772v ) && ! empty( $m4is_bamv772v ) ) {
foreach ( $m4is_bamv772v as $m4is_xng0wwg0jggwdk =>
 $m4is_bwwafnams7y ) {

if ( is_array( $m4is_bwwafnams7y ) && !empty( $m4is_bwwafnams7y ) ){
foreach ($m4is_bwwafnams7y as $m4is_bq1c9wr1emt7yr3mn =>
 $m4is_pyfe2h7z) {
if ( $m4is_bq1c9wr1emt7yr3mn === $m4is_re955zqwq0c9x4hc18zgse846->parent ){
$m4is_zzkj3n3rrretcb = false;
}
}
}
}
}
}
}
}

if ( ! $m4is_zzkj3n3rrretcb ) {
$this->module_visibility[] = $m4is_re955zqwq0c9x4hc18zgse846->node;

add_filter( 'fl_builder_template_path', [$this, 'm4is_kpbtmpd1jvr'], 10, 3 );
}
}

public function m4is_gxgjgcj0zpn7qt5bwvnnw4( object $m4is_re955zqwq0c9x4hc18zgse846 ) {
$m4is_a4a9rx303 = array_search( $m4is_re955zqwq0c9x4hc18zgse846->node,
 $this->module_visibility );
if ( $m4is_a4a9rx303 !== false ) {
unset($this->module_visibility[$m4is_a4a9rx303]);

remove_filter( 'fl_builder_template_path',
 [$this, 'm4is_kpbtmpd1jvr'], 10 );
}
}

public function m4is_kpbtmpd1jvr( $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1, $m4is_j2epbkj6df0h31aymz,
 $m4is_6k84v5caq4k ) : bool {
return false;
}

public function m4is_6pbxjqevfjmjdkq1c( object $m4is_44vca1rpez0e68fha3bm910f3ne2z ) : bool {
$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab = m4is_9db7hheseencedjdjv::PREFIX;

$m4is_y7084n6v67jme9va8yz = []; 
foreach( $m4is_44vca1rpez0e68fha3bm910f3ne2z as $m4is_hce1y1a4qd65zhnwsj => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( strpos( $m4is_hce1y1a4qd65zhnwsj,
 "{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_membership_levels" ) !== false && $m4is_rqxytszfq5v6syth1csqqxvy5 === '1' ) {
$m4is_y7084n6v67jme9va8yz[] = (int) str_replace( "{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_membership_levels-",
 '', $m4is_hce1y1a4qd65zhnwsj );
}
}
$m4is_hcgws2d4jqv3 = isset($m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags"}) ? $m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags"} : '';

$m4is_hcgws2d4jqv3 = !empty($m4is_hcgws2d4jqv3) && is_array($m4is_hcgws2d4jqv3) ? implode(',', $m4is_hcgws2d4jqv3) : $m4is_hcgws2d4jqv3;

$m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3 = isset($m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags2"}) ? $m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags2"} : '';

$m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3 = !empty($m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3) && is_array($m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3) ? implode(',',
 $m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3) : $m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3;
$m4is_gv7vjyv2c6g3nepw6 = [
'memberships' => implode( ',',
 $m4is_y7084n6v67jme9va8yz ),
'any_membership' => isset($m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anymembership"}) && $m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anymembership"} === '1' ? 1 : 0,

'logged_in_only' => isset($m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_loggedin"}) && $m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_loggedin"} === '1' ? 1 : 0,

'logged_out_only' => isset($m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anonymous_only"}) && $m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anonymous_only"} === '1' ? 1 : 0,

'invert_results' => isset($m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_invert_results"}) && $m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_invert_results"} === '1' ? 1 : 0,

'contact_ids' => !empty($m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_contact_ids"}) ? sanitize_text_field($m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_contact_ids"}) : '',

'tags1' => !empty($m4is_hcgws2d4jqv3) ? trim($m4is_hcgws2d4jqv3, ',') : '',
'tags2' => !empty($m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3) ? trim($m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3,
 ',') : '',
'eval' => !empty($m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_eval"}) ? trim($m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_eval"}) : '',

'asset_id' => !empty($m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_asset_id"}) ? sanitize_text_field($m4is_44vca1rpez0e68fha3bm910f3ne2z->{"{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_asset_id"}) : ''
];

return m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_xpe0t3cfrjmnm2tyt7sve0dk()->m4is_5wz355nv6hgn5e9pt4gcezrrt2stqx9( $m4is_gv7vjyv2c6g3nepw6,
 $this->slug );
}
}