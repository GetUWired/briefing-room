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
m4is_yccg8ev36reygg7s7npd7ypq16jectz::m4is_de8n8qy4mmtnkq33p();

final class m4is_yccg8ev36reygg7s7npd7ypq16jectz {
private $m4is_132xe588j;

static function m4is_de8n8qy4mmtnkq33p() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->process_updates();

$this->m4is_zhwfhyk3p();
}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}

private function process_updates() {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;
}
$this->m4is_v1nhvqzg73xcw();
}
private function m4is_v1nhvqzg73xcw() {
if ( ! isset( $_POST['is4wp_ignore_tag_categories'] ) || ! is_array( $_POST['is4wp_ignore_tag_categories'] ) ) {
return;

}
$m4is_vty99jhpajbadtpd4dgsr = $_POST['is4wp_ignore_tag_categories'];
$m4is_3de1m4f08qsj = m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_j4da8vwvgrkyjqjjjhy0( false,
 true );
$m4is_wpha6z2hn3f08c2xj77bp1 = implode( ',', array_diff( $m4is_3de1m4f08qsj, $m4is_vty99jhpajbadtpd4dgsr ) );
$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_wpha6z2hn3f08c2xj77bp1,
 'settings', 'ignore_tag_categories' );
m4is_0ddg4zyk7dn8eg0283::m4is_r929khbv823hsxjc0498q();
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Tag Categories Ignore List Updated.' );

}

function m4is_zhwfhyk3p() {
$this->m4is_940xb27gd9py83m26c29cdmeey9();
echo '<p>Select which tag categories <strong>are</strong> synchronized.</p>';

echo '<p><strong>For best performance, sync either ALL categories, or only ONE category.</strong></p>';
echo '<p>Tags in the <strong style="color:red;">BOLD RED</strong> categories are not synced.</p>';

$this->m4is_r44nydrmzmtzc1jm3kxv6ewgs7wt0pk();
echo '<p><input type="submit" name="save" value="Save Category Sync" class="button-primary" /></p>';

}

private function m4is_r44nydrmzmtzc1jm3kxv6ewgs7wt0pk() {
$m4is_wpha6z2hn3f08c2xj77bp1 = m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_vwnpg6405pkz320gaykg9k9xp();

$m4is_3g72bes0yrrrz9bgydb7eme20g6 = m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_t13d80yjczb01vd0wejdnnjskxb9q( false );
echo '<div class="indented">';

foreach( $m4is_3g72bes0yrrrz9bgydb7eme20g6 as $m4is_46gc4cxv8f0da89fr6fmdp2 ) {
$m4is_mtjbb6sywmpnaz3125h6ycckx = '';
$m4is_1v8nc7q0w5tjvwe1xr = ' field_selected ';

if ( ! in_array( $m4is_46gc4cxv8f0da89fr6fmdp2['id'], $m4is_wpha6z2hn3f08c2xj77bp1 ) ) {
$m4is_mtjbb6sywmpnaz3125h6ycckx = ' checked="checked" ';

$m4is_1v8nc7q0w5tjvwe1xr = '';
}
$m4is_mtjbb6sywmpnaz3125h6ycckx = ! in_array( $m4is_46gc4cxv8f0da89fr6fmdp2['id'], $m4is_wpha6z2hn3f08c2xj77bp1 ) ? ' checked="checked" ' : '';

$m4is_9yw8e8h1m49k2m1g64g = 'is4wp_category_' . $m4is_46gc4cxv8f0da89fr6fmdp2['id'];
printf( '<p class="checkbox"><input value=%s %s type="checkbox" id="%s" name="is4wp_ignore_tag_categories[]">',
 $m4is_46gc4cxv8f0da89fr6fmdp2['id'], $m4is_mtjbb6sywmpnaz3125h6ycckx, $m4is_9yw8e8h1m49k2m1g64g );
printf( '<label class="%s" for="%s" >%s</label></p>',
 $m4is_1v8nc7q0w5tjvwe1xr, $m4is_9yw8e8h1m49k2m1g64g, $m4is_46gc4cxv8f0da89fr6fmdp2['name'] );
}
echo '</div>';
}
private function m4is_940xb27gd9py83m26c29cdmeey9() {
echo <<<CSSBLOCK

		<style>
			p.checkbox { margin-bottom: 6px; display: inline-block; width: 250px; white-space: nowrap; overflow:hidden; }
			div.indented {margin-left: 15px;}
			label.field_selected { font-weight:bold; color:red; }
		</style>
		CSSBLOCK;

}
}