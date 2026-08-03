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
m4is_t2vxa1mwpvb2pm4kny79::m4is_6q0wmftmrk5xnqk2ah3wk3ekap64();

final class m4is_t2vxa1mwpvb2pm4kny79 {
private $m4is_132xe588j;
private $m4is_v4beyw7zqhr3;
private $m4is_sq8wkcxv7czejqkkzzn6zspry2;

private $m4is_rkmcn1zd3r3k149h20vfr8z;
private $m4is_7m5t5wdmky4xv3cz2tvha;
private $m4is_mr4hnyh6fa0p9sm0m8wfs1;
static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_x2668w00gvc1xe4t7615cy4();

$this->m4is_w1rs7f9r26qnx04h0k04sn0();
$this->m4is_v12xgahnp4nzyg3cn5qddgzdf();
}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
$this->m4is_sq8wkcxv7czejqkkzzn6zspry2 = '';

$this->m4is_rkmcn1zd3r3k149h20vfr8z = 15;
$this->m4is_7m5t5wdmky4xv3cz2tvha = 0;
$this->m4is_mr4hnyh6fa0p9sm0m8wfs1 = '';
}
private function m4is_x2668w00gvc1xe4t7615cy4() {
$this->m4is_sq8wkcxv7czejqkkzzn6zspry2 = empty( $_GET['ip'] ) ? '' : trim( $_GET['ip'] );

$this->m4is_rkmcn1zd3r3k149h20vfr8z = empty( $_GET['limit'] ) ? 15 : (int) trim( $_GET['limit'] );
$this->m4is_7m5t5wdmky4xv3cz2tvha = empty( $_GET['start'] ) ? 0 : (int) trim( $_GET['start'] );

$this->m4is_mr4hnyh6fa0p9sm0m8wfs1 = empty( $_GET['name'] ) ? '' : strtolower( trim ( $_GET['name'] ) );
}
private function m4is_djq8qczs8rp34dt() {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `logintime`, `ipaddress`, `username` FROM %i WHERE `appname` = %s ";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 m4is_an0pxqdph6ax26586c::m4is_0sbrs1vk06py44g(), $this->m4is_v4beyw7zqhr3 );
if ( ! empty( $this->m4is_mr4hnyh6fa0p9sm0m8wfs1 ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 .= " AND `username` LIKE '%" . $wpdb->esc_like( $this->m4is_mr4hnyh6fa0p9sm0m8wfs1 ) . "%' ";
;
}
if ( ! empty( $this->m4is_sq8wkcxv7czejqkkzzn6zspry2 ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 .= " AND `ipaddress` LIKE '%" . $wpdb->esc_like( $this->m4is_sq8wkcxv7czejqkkzzn6zspry2 ) . "%' ";

}
$m4is_5rbenkpt1v7xby2cknbs7 .= $wpdb->prepare( " ORDER BY `id` DESC LIMIT %d, %d", $this->m4is_7m5t5wdmky4xv3cz2tvha, $this->m4is_rkmcn1zd3r3k149h20vfr8z );

$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
return $m4is_tbdh9qb6r6z;
}
private function m4is_w1rs7f9r26qnx04h0k04sn0() {
$m4is_tbdh9qb6r6z = $this->m4is_djq8qczs8rp34dt();

if ( is_array( $m4is_tbdh9qb6r6z ) && ! empty( $m4is_tbdh9qb6r6z ) ) {
$m4is_e94ggrj3af6x87w956sf3gdd581ey = [];
$m4is_t607apyza5qdwnr = get_option('timezone_string');

$m4is_4h1kyygsp = date_default_timezone_get();
if (! empty($m4is_t607apyza5qdwnr) ) {
date_default_timezone_set($m4is_t607apyza5qdwnr );

}
echo <<<HTMLBLOCK

				<table class="widefat">
					<tr>
						<td width="150">Login Time</td>
						<td width="125">IP Address</td>
						<td>Username</td>
						<td>Location</td>
					</tr>
			HTMLBLOCK;

foreach($m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz = $m4is_bamv772v['ipaddress'];
if (! isset($m4is_e94ggrj3af6x87w956sf3gdd581ey[$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz] ) ) {
$m4is_e94ggrj3af6x87w956sf3gdd581ey[$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz] = m4is_cyt7qan1n::m4is_2d2z2mc8jft2hg5scp0( $m4is_vmn8bp85fdtp4fqyh4rkwnhkxz );

}
$m4is_j51c05d5xpexybh7dgm8twm7nr7rks = date('Y-m-d H:i:s', $m4is_bamv772v['logintime'] );
$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz = $m4is_bamv772v['ipaddress'];

$m4is_mr4hnyh6fa0p9sm0m8wfs1 = $m4is_bamv772v['username'];
echo <<<HTMLBLOCK

					<tr>
						<td>{$m4is_j51c05d5xpexybh7dgm8twm7nr7rks}</td>
						<td><a href="https://geoiptool.com/en/?ip={$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz}" target="geoip">{$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz}</a></td>
						<td>{$m4is_mr4hnyh6fa0p9sm0m8wfs1}</td>
						<td>
				HTMLBLOCK;

if ( ! empty($m4is_e94ggrj3af6x87w956sf3gdd581ey[$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz]['latitude'] ) ) {
echo <<<HTMLBLOCK

						<a target="map" href="https://www.google.com/maps/@{$m4is_e94ggrj3af6x87w956sf3gdd581ey[$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz]['latitude']},{$m4is_e94ggrj3af6x87w956sf3gdd581ey[$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz]['longitude']},13z">
							<em class="fa fa-map-marker"></em>
						</a>&nbsp;
					HTMLBLOCK;

}
if (isset($m4is_e94ggrj3af6x87w956sf3gdd581ey[$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz] ) && is_array($m4is_e94ggrj3af6x87w956sf3gdd581ey[$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz] ) ) {
if (isset($m4is_e94ggrj3af6x87w956sf3gdd581ey[$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz]['city'] ) ) {
echo $m4is_e94ggrj3af6x87w956sf3gdd581ey[$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz]['city'],
 ', ', $m4is_e94ggrj3af6x87w956sf3gdd581ey[$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz]['region_name'], ' ', $m4is_e94ggrj3af6x87w956sf3gdd581ey[$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz]['country_name'];

}
}
else {
echo '<em>Unknown</em>';
}
echo <<<HTMLBLOCK

						</td>
					</tr>
				HTMLBLOCK;
}
date_default_timezone_set( $m4is_4h1kyygsp );

echo '</table>';
}
}
private function m4is_v12xgahnp4nzyg3cn5qddgzdf() {
$m4is_kh1m89k5t66qfmfbnd179zk1j3bn3 = m4is_an0pxqdph6ax26586c::m4is_b74y9h6k4hrt3kq();

echo <<<HTMLBLOCK

			<p>
				{$m4is_kh1m89k5t66qfmfbnd179zk1j3bn3} login entries found.
			</p>
			<form method="get" style="margin-top:12px;display:inline-block;">
				<input type="hidden" name="page" value="memberium-logs">
				Username: <input type='text' name='name' value='{$this->m4is_mr4hnyh6fa0p9sm0m8wfs1}' placeholder='Username'>"
				IP Address: <input type='text' name='ip' value='{$this->m4is_sq8wkcxv7czejqkkzzn6zspry2}' placeholder='IP Address'>
				Limit: <input type='text' name='limit' value='{$this->m4is_rkmcn1zd3r3k149h20vfr8z}' placeholder='# Results'>
				<input type="submit" value="Search" class="button-primary" style="margin-left:15px;">
			</form>

			<form method="post" style="margin-top:20px;">
				<input type="hidden" name="page" value="memberium-logs">
				<input type="hidden" name="tab" value="login">
				<input type="submit" name="trim_login_log"  value="Trim Log to Last 30 Days" class="submitdelete button" onClick="return confirmDelete()">
				<input type="submit" name="delete_login_log" value="Delete Log" class="submitdelete button" onClick="return confirmDelete()">
			</form>
			<style>
				.submitdelete {
					background-color: red  !important;
					color: white  !important;
				}
			</style>
			<script>
				function confirmDelete() {
					return confirm( 'Are you sure you want to delete entries in this log?  Your deleted log data cannnot be recovered.' );
				}
			</script>
		HTMLBLOCK;

}
}