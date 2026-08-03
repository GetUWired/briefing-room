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
m4is_hx6h7138b82enw81f6vca::m4is_de8n8qy4mmtnkq33p();

final class m4is_hx6h7138b82enw81f6vca {
private $m4is_132xe588j;
private $m4is_1090xawqcx3q9p;
private $m4is_1qb2qzkwh6c8xt7vm6;
public static function m4is_de8n8qy4mmtnkq33p() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self();
}
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_ranr89c2gngyncmfbwyag76f1rq();

}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_1090xawqcx3q9p = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$this->m4is_1qb2qzkwh6c8xt7vm6 = m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv();

}
private function m4is_ranr89c2gngyncmfbwyag76f1rq() {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings' );

$m4is_0pqexxw53a6h73czpah0w = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'autoupdate' );
$m4is_mn27asbd8wycxhfan0z0qh6w0zznqdc = m4is_p6537fedxhj0dgtd67cpq7rdpxna::m4is_6h4kk370tjx4405rz0e9();

$m4is_g8kjnx0f2 = wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(), 'memberium_options_nonce', true, false );
$m4is_qzec3sqqzcnsdqz246 = $this->m4is_t840m5vqh05t7();

$m4is_7vdc65w311rh47hp6jgrm3jwk5v6kvsc = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(9891);
echo <<<HTMLBLOCK

			<form method="POST" action="">
				{$m4is_g8kjnx0f2}
				<h2>Memberium Updates</h2>
				<ul>
		HTMLBLOCK;

if ( ! $m4is_mn27asbd8wycxhfan0z0qh6w0zznqdc ) {
echo <<<HTMLBLOCK

				<h3 style="color:red;">Warning</h3>
					<p>
						System updates disabled because the plugin folder cannot be written to.
					</p>
			HTMLBLOCK;

}
elseif ( $this->m4is_1qb2qzkwh6c8xt7vm6 ) {
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Auto-Update Plugin', 'autoupdate', 12523,
 $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['autoupdate'] );
}
echo <<<HTMLBLOCK

					<li>
						<label>Memberium Manual Updater</label>
						<div style="display:inline-block;">
						{$m4is_qzec3sqqzcnsdqz246}<br>
						{$m4is_7vdc65w311rh47hp6jgrm3jwk5v6kvsc}
						</div>
					</li>
				</ul>
				<p>
					<input type="submit" value="Update" class="button-primary">
				</p>
			</form>
		HTMLBLOCK;

}

function m4is_t840m5vqh05t7( $m4is_bgh043xn6rsy366fbkkec = 'memberium2' ) : string {
$m4is_0q57s54p8pmsar = m4is_p6537fedxhj0dgtd67cpq7rdpxna::m4is_jyrjb22p6a1z90610pndnxg1rysr4j7b();

$m4is_dk9wgfgampyrcvbjnjw6hhgkjn8knd8h = $this->m4is_132xe588j->m4is_5kywzj74m8ht8s0();
$m4is_4wrgmn9rbpn71sz1z = m4is_p6537fedxhj0dgtd67cpq7rdpxna::m4is_6h4kk370tjx4405rz0e9();

$m4is_8dc8vc04w9yydbm75wy914 = '';
$m4is_xv5wqwa1tkka6wrrnf08g1k5454 = '';
if ( is_array( $m4is_0q57s54p8pmsar ) ) {
foreach ( $m4is_0q57s54p8pmsar as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh=>
$m4is_nt48femkg6za9v5mn1sr23m62k ) {
$m4is_fe42r2djxgf1h7pt = $m4is_dk9wgfgampyrcvbjnjw6hhgkjn8knd8h == $m4is_nt48femkg6za9v5mn1sr23m62k['version'] ? ' selected="selected" ' : '';

$m4is_8dc8vc04w9yydbm75wy914 .= sprintf( '<option value="%d" %s>%s %s</option>', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_fe42r2djxgf1h7pt,
 $m4is_nt48femkg6za9v5mn1sr23m62k['name'], $m4is_nt48femkg6za9v5mn1sr23m62k['comments'] );
}
}
if ( $m4is_4wrgmn9rbpn71sz1z ) {
$m4is_xv5wqwa1tkka6wrrnf08g1k5454 = <<<HTMLBLOCK

				<option value="">Choose your option</option>
				<option value="download">Download</option>
				<option value="install">Install</option>
			HTMLBLOCK;

}
else {
$m4is_xv5wqwa1tkka6wrrnf08g1k5454 = <<<HTMLBLOCK

				<option value="">Choose your option</option>
				<option value="download">Download</option>
			HTMLBLOCK;

}
$output = <<<HTMLBLOCK

			<select name="manual_upgrade" style="width:500px !important; margin-bottom:6px;">
				{$m4is_8dc8vc04w9yydbm75wy914}
			</select><br>
			<select name="manual_upgrade_confirm" style="width:250px !important; margin-bottom:6px;">
				{$m4is_xv5wqwa1tkka6wrrnf08g1k5454}
			</select>
		HTMLBLOCK;

return $output;
}

}
