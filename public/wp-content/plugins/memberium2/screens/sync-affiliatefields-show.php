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

current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
?>
<style>
	p.checkbox { margin-bottom: 6px; display: inline-block; width: 200px; white-space: nowrap; overflow:hidden; }
	div.indented {margin-left: 15px;}
	label.field_selected { font-weight:bold; color:red; }
</style>
<?php

m4is_gppvfgt428ve3dhfcyy2w::m4is_de8n8qy4mmtnkq33p();

class m4is_gppvfgt428ve3dhfcyy2w {
private
$m4is_132xe588j,
$m4is_7b2yfzk0054 = [],
$m4is_9n99a0wfjv3p = [],
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = [];

static function m4is_de8n8qy4mmtnkq33p() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}
function __construct() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$this->m4is_9adtaa67sa21q2c604j55azyzd();

$this->m4is_z6c3r724qhd();
$this->m4is_6w08a6nftsf73sazn7();
}
private function m4is_z6c3r724qhd() {
$this->m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Affiliate',
 false ); 
$this->m4is_9n99a0wfjv3p = $this->m4is_sns4tr2ntty();
$this->m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = $this->m4is_4ety3436znb70t2();

}
private function m4is_jn1fj0bpdmfnpc56086jjmeh4() {
global $wpdb;
if ( ! empty( $m4is_9mrqqnm13bx ) ) {
$m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');

$m4is_5rbenkpt1v7xby2cknbs7 = 'DELETE FROM `' . m4is_amz58dmg8j7e898bj8r8b1::m4is_rr7ynbdyf6mev98x20sv1n1d0kkxt() . '` WHERE fieldname in (\'' . $m4is_9mrqqnm13bx . '\') AND `appname` = "' . $m4is_v4beyw7zqhr3 . '" ';

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
}
private function m4is_9adtaa67sa21q2c604j55azyzd() {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;

}
$m4is_9n99a0wfjv3p = isset( $_POST['ignore_affiliate_fields'] ) && is_array( $_POST['ignore_affiliate_fields'] ) ? implode( ',',
 $_POST['ignore_affiliate_fields'] ) : '';
$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej($m4is_9n99a0wfjv3p, 'settings', 'ignore_affiliate_fields');

m4is_q28s00aabb2yd3d::m4is_rc7cpymf5b7xy32xqb50085d4m();
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Affiliate Fields Ignore List Updated.');

}
private function m4is_6w08a6nftsf73sazn7() {
echo '<p>Please read our online help BEFORE changing these options.</p>';

echo '<p>Affiliate fields marked in <strong style="color:red;">BOLD RED</strong> are not synced. ';

echo 'We recommend blocking as many fields as possible to speed up performance, and reduce database usage. ';
echo 'Be careful not to block fields you use.</p>';

echo '<p>Please contact support@memberium.com if you have questions about this function.</p>';

$this->m4is_h1dffkq3r7y2pvkmvzf5352p51x();

echo '<p><input type="submit" name="save" value="Save Affiliate Field Sync" class="button-primary" /></p>';
}
private function m4is_h1dffkq3r7y2pvkmvzf5352p51x() {
$m4is_f7dajn4nnm8zk08ew4ynpr8 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Affiliate',
 false );
$m4is_9n99a0wfjv3p = $this->m4is_sns4tr2ntty();
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = $this->m4is_4ety3436znb70t2();
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = array_flip( $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb );

sort( $m4is_f7dajn4nnm8zk08ew4ynpr8 );
echo '<div class="indented">';
foreach ( $m4is_f7dajn4nnm8zk08ew4ynpr8 as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) {
$m4is_mtjbb6sywmpnaz3125h6ycckx = '';

$m4is_53mq3k4adf3m0 = '';
$m4is_1v8nc7q0w5tjvwe1xr = '';
$m4is_9yw8e8h1m49k2m1g64g = 'ignore_affiliate_fields_' . $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6;

if ( in_array( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, $m4is_9n99a0wfjv3p ) ) {
$m4is_mtjbb6sywmpnaz3125h6ycckx = ' checked="checked" ';

$m4is_1v8nc7q0w5tjvwe1xr = ' field_selected ';
}
if ( ! in_array($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb ) ) {
printf( '<p class="checkbox"><input value="%s" %s type="checkbox" id="%s" name="ignore_affiliate_fields[]">',
 $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, $m4is_mtjbb6sywmpnaz3125h6ycckx, $m4is_9yw8e8h1m49k2m1g64g );
printf( '<label for="%s" class="%s">%s</label></p>',
 $m4is_9yw8e8h1m49k2m1g64g, $m4is_1v8nc7q0w5tjvwe1xr, $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 );
}
}
echo '</div>';
}
private function m4is_v5tjn97ve8xysakj5xbrx9k809r2kc1f() {
echo '<select multiple="multiple" id="ignore_affiliate_fields" name="ignore_affiliate_fields[]" size="20" style="width:200px;">';

foreach ($this->m4is_7b2yfzk0054 as $m4is_bbsta3mvjhhvh1x97vfpm9e) {
if ( ! array_key_exists( $m4is_bbsta3mvjhhvh1x97vfpm9e, $this->m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb ) ) {
$m4is_fe42r2djxgf1h7pt = in_array( $m4is_bbsta3mvjhhvh1x97vfpm9e,
 $this->m4is_9n99a0wfjv3p ) ? ' selected="selected" ' : '';
printf( '<option value="%s" %s>%s</option>', $m4is_bbsta3mvjhhvh1x97vfpm9e,
 $m4is_fe42r2djxgf1h7pt, $m4is_bbsta3mvjhhvh1x97vfpm9e );
}
}
echo '</select>';
}
private function m4is_sns4tr2ntty() : array {
return array_filter( explode( ',',
 $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'ignore_affiliate_fields', '' ) ) );
}
private function m4is_4ety3436znb70t2() : array {
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = [];

$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb[] = 'AffCode';
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb[] = 'AffName';
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb[] = 'ContactId';

$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb[] = 'Id';
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb[] = 'ParentId';
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb[] = 'Password';

$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb[] = 'Status';
return array_flip( $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb );
}
}