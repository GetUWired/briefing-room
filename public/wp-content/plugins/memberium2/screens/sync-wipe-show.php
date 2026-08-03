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

current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
m4is_vx359xjhxpx4::m4is_de8n8qy4mmtnkq33p();

final class m4is_vx359xjhxpx4 {
static function m4is_de8n8qy4mmtnkq33p() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}
private function __construct() {
$this->m4is_dwf829mpfdvrx();
$this->m4is_dskss8nxbtfbke78();
}
private function m4is_dskss8nxbtfbke78() {
$m4is_g8kjnx0f2 = wp_nonce_field( 'memberium_sync_wipe',
 'memberium_sync_wipe_nonce', true, false );
echo <<<HTMLBLOCK

		<style>
			.red-warning {
				margin:50px;
				padding:50px;
				background-color:red;
				color:white;
				border-radius:25px;
				font-size:16px !important;
			}
			.warning-text {
				font-size:16px !important;
				font-weight: bold;
			}
		</style>
		<form method="post">
			{$m4is_g8kjnx0f2}
			<div class="red-warning">
			<p class="warning-text">
				Click the button below to delete all Memberium data from the database.
				This will remove all Memberium data from the database, including all settings, custom fields, and tags.
			</p>
			<p>
				<input type="text" placeholder="Type 'ETERNAL PAIN' to confirm" name="wipe_confirm" class="regular-text" />
			</p>
			<p class="warning-text">
				This action cannot be undone.
			</p>
			<p class="warning-text">
				<input type="submit" name="wipe" value="Wipe Memberium Data" class="button-primary" />
			</p>
			</div>
		</form>
		HTMLBLOCK;

}
private function m4is_dwf829mpfdvrx() {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;
}
$m4is_4ecpv9dz12f2hzqks4z0jhtvtnaw = defined( 'MEMBERIUM_HOME' ) ? constant( 'MEMBERIUM_HOME' ) : '';

deactivate_plugins( plugin_basename( $m4is_4ecpv9dz12f2hzqks4z0jhtvtnaw ) );
}
private function m4is_1mjdd0c8xxmqx3a7rfdnx() {
global $wpdb;

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();
file_put_contents( ABSPATH . '.maintenance', '<?php $upgrading = time();' );

$m4is_9m94cfc0n64g0tp52wxmxyc = [
'i2sdk%',
'memberium%',
];
foreach( $m4is_9m94cfc0n64g0tp52wxmxyc as $m4is_6fdcfh260c7q5 ) {
$m4is_dbsg65sy53gz = $wpdb->esc_like( $m4is_6fdcfh260c7q5 );

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `option_name` FROM %i WHERE `option_name` LIKE %s", $wpdb->options, $m4is_dbsg65sy53gz );

$m4is_m5rr33vj6kc = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
foreach( $m4is_m5rr33vj6kc as $m4is_6fdcfh260c7q5 ) {


}
}
$m4is_07bne2wbzjzev = [
'infusionsoft_user_id',

'memberium/contact_id/%',
'm4is%',
'memberium%',
];
foreach( $m4is_07bne2wbzjzev as $m4is_3ey0a4er2 ) {
$m4is_dbsg65sy53gz = $wpdb->esc_like( $m4is_3ey0a4er2 );

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `user_id`, `meta_key` FROM %i WHERE `meta_key` LIKE %s", $wpdb->usermeta, $m4is_dbsg65sy53gz );

$m4is_2aebxt55ch143hb3c4700agex = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_2aebxt55ch143hb3c4700agex = is_array( $m4is_2aebxt55ch143hb3c4700agex ) ? $m4is_2aebxt55ch143hb3c4700agex : [];

foreach( $m4is_2aebxt55ch143hb3c4700agex as $m4is_wk4dh1rnd3wmwvsggq51nhn87 => $m4is_3ey0a4er2 ) {
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_3ey0a4er2, '' );
delete_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_3ey0a4er2 );
}
}
$m4is_6acdvp1s3qb9c9bwky = [
'%is4wp%',

];
foreach( $m4is_6acdvp1s3qb9c9bwky as $m4is_3ey0a4er2 ) {
$m4is_dbsg65sy53gz = $wpdb->esc_like( $m4is_3ey0a4er2 );
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `post_id`, `meta_key` FROM %i WHERE `meta_key` LIKE %s",
 $wpdb->postmeta, $m4is_dbsg65sy53gz );
$m4is_2aebxt55ch143hb3c4700agex = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_2aebxt55ch143hb3c4700agex = is_array( $m4is_2aebxt55ch143hb3c4700agex ) ? $m4is_2aebxt55ch143hb3c4700agex : [];

foreach( $m4is_2aebxt55ch143hb3c4700agex as $m4is_wk4dh1rnd3wmwvsggq51nhn87 => $m4is_3ey0a4er2 ) {
update_post_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_3ey0a4er2, '' );
delete_post_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_3ey0a4er2 );
}
}
$m4is_hrtpth3knv43044ym8f = get_option( 'memberium_tables',
 [] );
foreach( $m4is_hrtpth3knv43044ym8f as $m4is_k7p8pmxsbkqrje3y20 ) {
$wpdb->query( "TRUNCATE TABLE {$m4is_k7p8pmxsbkqrje3y20}" );

}

if ( file_exists( ABSPATH . '.maintenance' ) ) {
unlink( ABSPATH . '.maintenance' );
}
}
}
