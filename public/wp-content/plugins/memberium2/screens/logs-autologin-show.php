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
new m4is_63ebp92md2pn5nmy5qjg2g4ce5();

final class m4is_63ebp92md2pn5nmy5qjg2g4ce5 {
private $m4is_132xe588j;
private $m4is_v4beyw7zqhr3;
private $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

private $m4is_7yaq0kttm;
private $m4is_rkmcn1zd3r3k149h20vfr8z;
private $m4is_fbgrk67bjbfx23tv0cy;
private $m4is_7m5t5wdmky4xv3cz2tvha;

function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_6w08a6nftsf73sazn7();
$this->m4is_v12xgahnp4nzyg3cn5qddgzdf();

}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
$this->m4is_7yaq0kttm = m4is_c2ry5jv8yz446k40191::m4is_2j5zjm5s0();

$this->m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty( $_GET['contact_id'] ) ? 0 : (int) $_GET['contact_id'];
$this->m4is_rkmcn1zd3r3k149h20vfr8z = empty( $_GET['limit'] ) ? 10 : (int) $_GET['limit'];

$this->m4is_fbgrk67bjbfx23tv0cy = empty( $_GET['search'] ) ? '' : trim($_GET['search'] );
$this->m4is_7m5t5wdmky4xv3cz2tvha = empty( $_GET['start'] ) ? 0 : (int) $_GET['start'];

}
private function m4is_6w08a6nftsf73sazn7() {
$m4is_tbdh9qb6r6z = $this->m4is_djq8qczs8rp34dt();
if ( ! is_array($m4is_tbdh9qb6r6z ) || empty($m4is_tbdh9qb6r6z ) ) {
echo '<p>The Autologin log is empty.</p>';

}
else {
$m4is_t607apyza5qdwnr = get_option( 'timezone_string' );
$m4is_t607apyza5qdwnr = empty( $m4is_t607apyza5qdwnr ) ? 'UTC' : $m4is_t607apyza5qdwnr;

$m4is_4h1kyygsp = date_default_timezone_get();
date_default_timezone_set( $m4is_t607apyza5qdwnr );
echo <<<HTMLBLOCK

				<table class="widefat" style="table-layout:fixed">
				<tr>
				<td width="150">Time</td>
				<td width="100">Contact ID</td>
				<td>Results</td>
				</tr>
			HTMLBLOCK;

foreach($m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
echo '<tr>';
echo '<td>', date('Y-m-d H:i:s', $m4is_bamv772v['time'] ), '</td>';
echo '<td>',
 $m4is_bamv772v['contactid'], '</td>';
echo '<td style="word-wrap: break-word;">', nl2br($m4is_bamv772v['log'] ), '</td>';
echo '</tr>';

}
echo '</table>';
date_default_timezone_set($m4is_4h1kyygsp );
}
}

private function m4is_djq8qczs8rp34dt() {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `id`, UNIX_TIMESTAMP(`time`) AS `time`, `contactid`, `log` FROM %i WHERE `type` = 'autologin' AND `appname` = %s ",
 $this->m4is_7yaq0kttm, $this->m4is_v4beyw7zqhr3 );
if ( $this->m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_5rbenkpt1v7xby2cknbs7 .= $wpdb->prepare( " AND `contactid` = %d ",
 $this->m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( $this->m4is_fbgrk67bjbfx23tv0cy ) {
$m4is_5rbenkpt1v7xby2cknbs7 .= " AND `log` LIKE '%" . $wpdb->esc_like( $this->m4is_fbgrk67bjbfx23tv0cy ) . "%' ";

}
$m4is_5rbenkpt1v7xby2cknbs7 .= $wpdb->prepare( " ORDER BY `id` DESC LIMIT %d", $this->m4is_rkmcn1zd3r3k149h20vfr8z );
$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7,
 ARRAY_A );
return $m4is_tbdh9qb6r6z;
}
private function m4is_v12xgahnp4nzyg3cn5qddgzdf() {
echo <<<HTMLBLOCK

			<form method="get" style="margin-top:12px;">
			<input type="hidden" name="page" value="memberium-logs">
			<input type="hidden" name="tab" value="autologin">
			Contact ID: <input type='text' name='contact_id' value='{$this->m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}' placeholder='Contact ID'>
			Search: <input type='text' name='search' value='{$this->m4is_fbgrk67bjbfx23tv0cy}' placeholder='Search'>
			Limit: <input type='text' name='limit' value='{$this->m4is_rkmcn1zd3r3k149h20vfr8z}' placeholder='# Results'>
			<input type="submit" value="Search" class="button-primary" style="margin-left:15px;">
			</form>

			<form method="post">
			<input type="hidden" name="page" value="memberium-logs">
			<input type="hidden" name="tab" value="autologin">
			<p><input type="submit" name="delete_autologin" value="Delete Log" class="button delete"></p>
			</form>
		HTMLBLOCK;

}
}
