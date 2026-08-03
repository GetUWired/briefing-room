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

m4is_gk51gv1v5ct1nk::m4is_de8n8qy4mmtnkq33p();

final class m4is_gk51gv1v5ct1nk {
private $m4is_132xe588j;
static function m4is_de8n8qy4mmtnkq33p() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_9adtaa67sa21q2c604j55azyzd();
$this->m4is_zhwfhyk3p();
}
private function m4is_9adtaa67sa21q2c604j55azyzd() {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;

}
if ( ! isset( $_POST['formtype'] ) || $_POST['formtype'] !== 'contactfields' ) {
return;
}
$m4is_gqsc4mq3nmh1sr5dknx6119v7 = isset( $_POST['is4wp_ignore_contact_fields'] ) ? array_filter( $_POST['is4wp_ignore_contact_fields'] ) : [];

$m4is_m7jxpmmdnr4p2nkaa68s8pr6x = is_array( $m4is_gqsc4mq3nmh1sr5dknx6119v7 ) ? implode( ',', $m4is_gqsc4mq3nmh1sr5dknx6119v7 ) : '';

$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_m7jxpmmdnr4p2nkaa68s8pr6x, 'settings', 'ignore_contact_fields' );
m4is_q28s00aabb2yd3d::m4is_rc7cpymf5b7xy32xqb50085d4m();

m4is_rw8p2dfy073ez::m4is_jbqjtz0djt9d3qtjk5cept4();
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Contact Fields Ignore List Updated.' );

}
function m4is_zhwfhyk3p() {
echo '<p>Please read our online help BEFORE changing these options.</p>';

echo '<p>Contact fields marked in <strong style="color:red;">BOLD RED</strong> are not synced. ';

echo 'We recommend blocking as many fields as possible to speed up performance, and reduce database usage. ';
echo 'Be careful not to block fields you use.</p>';

echo '<p>Please contact support@memberium.com if you have questions about this function.</p>';

$this->m4is_y64p21nghw();
echo '<p><input type="submit" name="save" value="Save Contact Field Sync" class="button-primary" /></p>';

}
private function m4is_y64p21nghw() {
$m4is_3vc99myy5e3w587xb1t7z = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n('Contact',
 false );
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = array_filter( explode( ',', $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'sync',
 'required_fields')['Contact'] ) );
$m4is_qbgzdwct0 = array_filter( explode( ',', $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'ignore_contact_fields' ) ) );
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb[] = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'username_field');
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb[] = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field');
array_flip( $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb );
sort($m4is_3vc99myy5e3w587xb1t7z);
echo '<div class="indented">';

foreach ( $m4is_3vc99myy5e3w587xb1t7z as $m4is_wh0m980wk362m84cpbn5kd ) {
$m4is_mtjbb6sywmpnaz3125h6ycckx = '';
$m4is_53mq3k4adf3m0 = '';

$m4is_1v8nc7q0w5tjvwe1xr = '';
$m4is_9yw8e8h1m49k2m1g64g = 'is4wp_ignore_contact_fields_' . $m4is_wh0m980wk362m84cpbn5kd;
if ( in_array( $m4is_wh0m980wk362m84cpbn5kd,
 $m4is_qbgzdwct0 ) ) {
$m4is_mtjbb6sywmpnaz3125h6ycckx = ' checked="checked" ';
$m4is_1v8nc7q0w5tjvwe1xr = ' field_selected ';
}
if ( ! in_array($m4is_wh0m980wk362m84cpbn5kd,
 $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb ) ) {
printf( '<p class="checkbox"><input value="%s" %s type="checkbox" id="%s" name="is4wp_ignore_contact_fields[]">',
 $m4is_wh0m980wk362m84cpbn5kd, $m4is_mtjbb6sywmpnaz3125h6ycckx, $m4is_9yw8e8h1m49k2m1g64g );
printf( '<label for="%s" class="%s">%s</label></p>',
 $m4is_9yw8e8h1m49k2m1g64g, $m4is_1v8nc7q0w5tjvwe1xr, $m4is_wh0m980wk362m84cpbn5kd );
}
}
echo '</div>';
}
private function m4is_dbd55mte() {
$m4is_y3krb2ad07x212n = '';

$m4is_3vc99myy5e3w587xb1t7z = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact', false );
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = array_filter( explode( ',',
 $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'sync', 'required_fields')['Contact'] ) );
$m4is_0262tra2rzwf3bqj2xs1wh2f6 = array_filter( explode( ',',
 $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'ignore_contact_fields' ) ) );
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb[] = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'username_field' );
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb[] = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' );
array_flip( (array) $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb );
echo '<select multiple="multiple" id="is4wp_ignore_contact_fields" name="is4wp_ignore_contact_fields[]" size="20" style="width:200px;">>';

foreach ( $m4is_3vc99myy5e3w587xb1t7z as $m4is_wh0m980wk362m84cpbn5kd ) {
$m4is_fe42r2djxgf1h7pt = in_array( $m4is_wh0m980wk362m84cpbn5kd,
 $m4is_0262tra2rzwf3bqj2xs1wh2f6 ) ? ' selected="selected" ' : '' ;
if ( ! in_array($m4is_wh0m980wk362m84cpbn5kd, $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb ) ) {
printf( '<option value="%s" %s>%s</option>',
 $m4is_wh0m980wk362m84cpbn5kd, $m4is_fe42r2djxgf1h7pt, $m4is_wh0m980wk362m84cpbn5kd );
}
}
echo '</select>';
}
}
