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
m4is_caaryn06j3c11wnmhtchwtwxvn16924::m4is_de8n8qy4mmtnkq33p();

final class m4is_caaryn06j3c11wnmhtchwtwxvn16924 {
private $m4is_132xe588j;
private $m4is_v4beyw7zqhr3;
private $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0;

private $m4is_rkmcn1zd3r3k149h20vfr8z = 10;
private $m4is_fbgrk67bjbfx23tv0cy = '';
private $m4is_7m5t5wdmky4xv3cz2tvha = 0;
static function m4is_de8n8qy4mmtnkq33p() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_x2668w00gvc1xe4t7615cy4();

$this->m4is_6w08a6nftsf73sazn7();
$this->m4is_v12xgahnp4nzyg3cn5qddgzdf();
}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
}
private function m4is_x2668w00gvc1xe4t7615cy4() {
$this->m4is_rkmcn1zd3r3k149h20vfr8z = empty( $_GET['limit'] ) ? 10 : (int) $_GET['limit'];

$this->m4is_7m5t5wdmky4xv3cz2tvha = empty( $_GET['start'] ) ? 0 : (int) $_GET['start'];
$this->m4is_fbgrk67bjbfx23tv0cy = empty( $_GET['search'] ) ? '' : trim($_GET['search']);

$this->m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty( $_GET['contact_id'] ) ? 0 : (int) $_GET['contact_id'];
}
private function m4is_ndnntvcvnmm8ra3vdtzx8531wky8eq() {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `id`, UNIX_TIMESTAMP(`time`) as `time`, `log` FROM %i WHERE `type` = 'cron' AND `appname` = %s ",
 m4is_c2ry5jv8yz446k40191::m4is_2j5zjm5s0(), $this->m4is_v4beyw7zqhr3 );
if ( ! empty( $this->m4is_fbgrk67bjbfx23tv0cy ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 .= " AND `log` LIKE '%" . $wpdb->esc_like( $this->m4is_fbgrk67bjbfx23tv0cy ) . "%' ";

}
$m4is_5rbenkpt1v7xby2cknbs7 .= $wpdb->prepare( " ORDER BY `id` DESC LIMIT %d", $this->m4is_rkmcn1zd3r3k149h20vfr8z );
$m4is_tbdh9qb6r6z = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7,
 ARRAY_A);
return $m4is_tbdh9qb6r6z;
}
private function m4is_6w08a6nftsf73sazn7() {
$m4is_tbdh9qb6r6z = $this->m4is_ndnntvcvnmm8ra3vdtzx8531wky8eq();

if (! is_array($m4is_tbdh9qb6r6z) || empty($m4is_tbdh9qb6r6z) ) {
echo '<p>The Cron log is empty.</p>';
}
else {
$m4is_4h1kyygsp = date_default_timezone_get();

$m4is_t607apyza5qdwnr = get_option( 'timezone_string' );
$m4is_t607apyza5qdwnr = empty( $m4is_t607apyza5qdwnr ) ? 'UTC' : $m4is_t607apyza5qdwnr;

date_default_timezone_set( $m4is_t607apyza5qdwnr );
echo '<table class="widefat">';
echo '<tr><td width="150">Time</td><td>Results</td></tr>';

foreach( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
echo '<tr>';
echo '<td>', date( 'Y-m-d H:i:s', $m4is_bamv772v['time'] ), '</td>';

echo '<td>', $m4is_bamv772v['log'], '</td>';
echo '</tr>';
}
echo '</table>';
date_default_timezone_set( $m4is_4h1kyygsp );
}
}
private function m4is_v12xgahnp4nzyg3cn5qddgzdf() {
echo <<<HTMLBLOCK

			<form method="get" style="margin-top:12px;">
				<input type="hidden" name="page" value="memberium-logs">
				<input type="hidden" name="tab" value="cron">
				Search: <input type='text' name='search' value='{$this->m4is_fbgrk67bjbfx23tv0cy}' placeholder='Search Results'>
				Limit: <input type='text' name='limit' value='{$this->m4is_rkmcn1zd3r3k149h20vfr8z}' placeholder='# Results'>
				<input type="submit" value="Search" class="button-primary" style="margin-left:15px;">
			</form>
		HTMLBLOCK;

}
}