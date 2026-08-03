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

new m4is_dfv09bpbm5x6knpcfe5jctxh();
class m4is_dfv09bpbm5x6knpcfe5jctxh {
private
$m4is_132xe588j,
$m4is_v4beyw7zqhr3,
$m4is_xd32d4bk2zxy98sj79ddcg4m,

$m4is_rkmcn1zd3r3k149h20vfr8z,
$m4is_xt22w6z8rm06wx6,
$m4is_fbgrk67bjbfx23tv0cy,
$m4is_7m5t5wdmky4xv3cz2tvha;
public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
return new m4is_dfv09bpbm5x6knpcfe5jctxh();

}
function __construct() {
$this->m4is_rdbqwsws7nxnjkh();
$this->m4is_z6c3r724qhd();
$this->m4is_f8y03xc5pkx75pgf();
$this->m4is_yeqf9fn41jv85h8();

$this->m4is_7k1ezjzfcpek6z0hzff28z();
}
private function m4is_z6c3r724qhd() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');
}
private function m4is_f8y03xc5pkx75pgf() : void {
$this->m4is_rkmcn1zd3r3k149h20vfr8z = empty( $_GET['limit'] ) ? 5 : (int) trim( $_GET['limit'] );

$this->m4is_7m5t5wdmky4xv3cz2tvha = empty( $_GET['start'] ) ? 0 : (int) trim( $_GET['start'] );
$this->m4is_fbgrk67bjbfx23tv0cy = empty( $_GET['search'] ) ? '' : trim( $_GET['search'] );

$this->m4is_xd32d4bk2zxy98sj79ddcg4m = empty( $_GET['ip'] ) ? '' : trim( $_GET['ip'] );
$this->m4is_xt22w6z8rm06wx6 = $this->m4is_y02jpax1jny9q1();

}
private function m4is_rdbqwsws7nxnjkh() : void {
current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

}
private function m4is_y02jpax1jny9q1() {
global $wpdb;
$m4is_k7p8pmxsbkqrje3y20 = m4is_c2ry5jv8yz446k40191::m4is_2j5zjm5s0();
$m4is_ydtn9n24a30xswh5xs7qfwe = [];

$m4is_es8j7eygjj62pw7z7g3caf7vy = '';
if ( ! empty( $this->m4is_xd32d4bk2zxy98sj79ddcg4m ) ) {
$m4is_ydtn9n24a30xswh5xs7qfwe[] = " `ipaddress` LIKE '%" . $wpdb->esc_like( $this->m4is_xd32d4bk2zxy98sj79ddcg4m ) . "%' ";

}
if ( ! empty( $this->m4is_fbgrk67bjbfx23tv0cy ) ) {
if ( is_numeric( $this->m4is_fbgrk67bjbfx23tv0cy ) ) {
$m4is_ydtn9n24a30xswh5xs7qfwe[] = " `contactid` = '" . $wpdb->esc_like( (int) $this->m4is_fbgrk67bjbfx23tv0cy ) . "' OR `log` LIKE '%" . $wpdb->esc_like( $this->m4is_fbgrk67bjbfx23tv0cy ) . "%' ";

}
else {
$m4is_ydtn9n24a30xswh5xs7qfwe[] = " `log` LIKE '%" . $wpdb->esc_like( $this->m4is_fbgrk67bjbfx23tv0cy ) . "%' ";
}
}
if ( ! empty( $m4is_ydtn9n24a30xswh5xs7qfwe ) ) {
$m4is_es8j7eygjj62pw7z7g3caf7vy .= ' AND (' . implode( ' AND ',
 $m4is_ydtn9n24a30xswh5xs7qfwe ) . ' )';
}
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT UNIX_TIMESTAMP(`time`) as `time`, `ipaddress`, `contactid`, `log` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `type` = 'loginfail' AND `appname` = '{$this->m4is_v4beyw7zqhr3}' {$m4is_es8j7eygjj62pw7z7g3caf7vy} ORDER BY `id` DESC LIMIT {$this->m4is_rkmcn1zd3r3k149h20vfr8z} ;";

$m4is_tbdh9qb6r6z = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
return $m4is_tbdh9qb6r6z;
}
private function m4is_yeqf9fn41jv85h8() {
$m4is_tbdh9qb6r6z = $this->m4is_xt22w6z8rm06wx6;

if ( ! is_array( $this->m4is_xt22w6z8rm06wx6 ) || empty( $this->m4is_xt22w6z8rm06wx6 ) ) {
if ( empty( $this->m4is_fbgrk67bjbfx23tv0cy ) && empty( $this->m4is_xd32d4bk2zxy98sj79ddcg4m ) ) {
echo '<p>The Login Failure log is empty.</p>';

}
else {
echo '<p>No login failure records were found matching your search.</p>';
}
}
else {
$m4is_t607apyza5qdwnr = get_option( 'timezone_string' );

$m4is_t607apyza5qdwnr = empty( $m4is_t607apyza5qdwnr ) ? 'UTC' : $m4is_t607apyza5qdwnr;
$m4is_4h1kyygsp = date_default_timezone_get();

date_default_timezone_set( $m4is_t607apyza5qdwnr );
echo '<table class="widefat">';
echo '<tr>';
echo '<td width="175">Login Time</td>';

echo '<td width="125">IP Address</td>';
echo '<td width="100">Contact Id</td>';
echo '<td>Log</td>';
echo '</tr>';
foreach ( $this->m4is_xt22w6z8rm06wx6 as $m4is_bamv772v ) {
echo '<tr>';

printf( '<td>%s</td>', date( 'Y-m-d H:i:s', $m4is_bamv772v['time'] ) );
printf( '<td>%s</td>', $m4is_bamv772v['ipaddress'] );
printf( '<td>%s</td>',
 $m4is_bamv772v['contactid'] );
printf( '<td>%s</td>', esc_html( $m4is_bamv772v['log'] ) );
echo '</tr>';
}
echo '</table>';
date_default_timezone_set( $m4is_4h1kyygsp );

}
}
private function m4is_7k1ezjzfcpek6z0hzff28z() {
echo <<<HTMLBLOCK

			<form method="get" style="margin-top:12px;display:inline-block;">
				<input type="hidden" name="page" value="memberium-logs">
				<input type="hidden" name="tab" value="loginfail">
				Search: <input type='text' name='search' value='{$this->m4is_fbgrk67bjbfx23tv0cy}' placeholder='Search'>
				IP Address: <input type='text' name='ip' value='{$this->m4is_xd32d4bk2zxy98sj79ddcg4m}' placeholder='IP Address'>
				Limit: <input type='text' name='limit' value='{$this->m4is_rkmcn1zd3r3k149h20vfr8z}' placeholder='# Results'>
				<input type="submit" value="Search" class="button-primary" style="margin-left:15px;">
			</form>

			<form method="post" style="margin-top:20px;">
				<input type="hidden" name="page" value="memberium-loginerrors">
				<input type="hidden" name="tab" value="loginerrors">
				<input type="submit" name="delete_loginerror_log" value="Delete Log" class="submitdelete button" onClick="return confirmDelete()">
			</form>

			<style>
				input[name="delete_loginerror_log"]{
					background-color: red  !important;
					color: white  !important;
				}
			</style>

			<script>
				function confirmDelete() {
					return confirm( 'Are you sure you want to delete all the entries in this log?  Your data cannnot be recovered.' );
				}
			</script>
		HTMLBLOCK;

}
}