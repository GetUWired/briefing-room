<?php
/**
 * Proprietary Software - All Rights Reserved
 *
 * This file is part of the Memberium plugin, which is proprietary software developed by Web Power and Light.
 * Unauthorized copying, distribution, or modification of this file, via any medium, is strictly prohibited.
 *
 * Copyright (c) 2012-2024 David J Bullock
 * Web Power and Light
 *
 * For licensing information, please contact Web Power and Light.
 */


class_exists( 'm4is_6y9612z4hjd6fzpap4r5n853641m1jc' ) || die();


final class m4is_c4mzjpzve4q56yjyanxyvarke597vf {
private static $i2sdk;
private function __construct() {

}

public static function display_i2sdk_admin_menu() : void {
global $wpdb;

self::m4is_r937g214vqe45m4e0z6hspd3();
self::$i2sdk = m4is_nskfcq9pc3bt348v1z2p22fm::get_i2sdk();
$i2sdk = self::$i2sdk;
$user_id = get_current_user_id();

$connection_failure = '';
$show_api_settings = false;
self::save_updates();
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
if ( ! empty( $_POST['save'] ) ) {
if ( $_POST['save'] == 'Sync Custom Fields' ) {

m4is_q28s00aabb2yd3d::m4is_rc7cpymf5b7xy32xqb50085d4m();

}
elseif ( $_POST['save'] == 'Purge API Log' ) {
$i2sdk->purgeAPILog();
}
elseif ( $_POST['save'] == 'Save API Configuration' ) {
}
}
}

m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_0ev16xnbdp();


$show_library_settings = true;
$show_api_settings = true;
$memberium_installed = false;
$server_verified = (boolean) self::$i2sdk->getConfigurationOption( 'server_verified' );

$token_object = self::$i2sdk->accessToken()->get_token_object();
if ( defined( 'HIDE_I2SDK_API' ) && constant( 'HIDE_I2SDK_API' ) == true ) {
$show_api_settings = false;

}
if ( self::$i2sdk->getConfigurationOption( 'app_name' ) == '' || self::$i2sdk->getConfigurationOption( 'api_key' ) == '' ) {
$show_api_settings = true;

}
if ( ! self::$i2sdk->getConfigurationOption( 'server_verified' ) ) {
$show_library_settings = false;
}
if ( ! self::$i2sdk->getConfigurationOption( 'server_verified' ) ) {
$show_api_settings = true;

}
if ( file_exists( WP_PLUGIN_DIR . '/memberium2/' ) ) {
$memberium_installed = true;
}
$nonce_html = wp_nonce_field( plugin_basename( __FILE__ ),
 'i2sdk_admin_api_nonce', true, false );
$i2sdk_version = self::$i2sdk->getVersion();
echo <<<STYLEBLOCK

			<style>
				form {
					margin-bottom: 10px;
				}
			</style>
		STYLEBLOCK;

echo <<<HTMLBLOCK

			<h2>Keap API Connection</h2>
			<div class="wrap">
				<div style="width:900px;">
		HTMLBLOCK;
echo <<<HTMLBLOCK

			<form method="POST" action="" autocomplete="off">
			{$nonce_html}
				<table class="widefat" style="white-space:nowrap;">
					<tr>
						<td style="width:250px;">Keap API Connection Version:</td>
						<td>{$i2sdk_version}</td>
					</tr>
		HTMLBLOCK;

self::show_app_name_input();
self::show_legacy_api_key();
self::show_sak_key();
self::show_oauth_connection();
self::show_api_status();

echo <<<HTMLBLOCK

			</table>
		HTMLBLOCK;



echo <<<HTMLBLOCK

			<h2>Optional Settings</h2>
			<table class="widefat" style="white-space:nowrap;">
		HTMLBLOCK;

self::show_web_analytics_option();
self::show_api_log_option();
self::show_api_log_retention_option();
self::show_api_retry_option();

echo <<<HTMLBLOCK

			</table>
		HTMLBLOCK;
self::m4is_4snk047w1pxmja3ecja1y309();







if ( false && $show_library_settings ) {
?>
				<h2>Keap Connection Optional API Settings</h2>
				<table class="widefat" style="white-space:nowrap;">
					<?php
 ?>
					<tr>
						<td style="width:250px;"><label for="i2sdk_email_notification"><?php _e( 'Email Error Notifications' );
 ?>:</label></td>
						<td>
							<select name="i2sdk_email_notification">
								<option value="0" <?php echo ( $i2sdk->getConfigurationOption( 'email_notification' ) == 0 ) ? 'selected="selected"' : '';
 ?>>Off</option>
								<option value="1" <?php echo ( $i2sdk->getConfigurationOption( 'email_notification' ) == 1 ) ? 'selected="selected"' : '';
 ?>>On</option>
							</select>
						</td>
					</tr>
					<tr>
						<td style="width:250px;"><label for=""><?php _e( 'Notification Email Address' );
 ?>:</label></td>
						<td><input maxlength="40" name="i2sdk_error_email" size="40" type="email" value="<?php echo $i2sdk->getConfigurationOption( 'error_email' ) ?>" placeholder="<?php echo get_option( 'admin_email' );
 ?>" ></td>
					</tr>
				</table>
				<?php
 }
?>
				<p>
					<input type="submit" name="save_configuration" value="Update Configuration" class="button-primary" />
					<input type="submit" name="save" value="Sync Custom Fields" class="button" />
					<!-- input type="submit" name="save" value="Purge API Log" class="button" --/>
				</p>
			</form>

			<hr />
			<!-- form method="POST" action="" enctype="multipart/form-data">
				<?php wp_nonce_field( plugin_basename( __FILE__ ),
 'i2sdk_admin_api_nonce' ); ?>
				<input type="file" name="backupfile" class="button" />
				<input type="submit" name="save" value="Restore Backup" class="button" />
			</form -->
	
			<hr />

	
		<?php

echo <<<HTMLBLOCK

				</div>
			</div>
			<p>
				Copyright &copy; 2025 David Bullock / Web, Power and Light
			</p>
		HTMLBLOCK;

self::emit_form_javascript();
}

private static function save_updates() : void {
if ( $_SERVER['REQUEST_METHOD'] <> 'POST' ) {
return;

}
self::check_nonce();



if ( ! empty( $_POST['is_disconnect_oauth'] ) && $_POST['is_disconnect_oauth'] == 'Disconnect OAuth' ) {
$admin = ! empty( $_POST['is_disconnect_admin'] ) ? $_POST['is_disconnect_admin'] : false;

if ( $admin ) {
self::$i2sdk->accessToken()->log['service'] = 'oauth_token';
self::$i2sdk->accessToken()->log['caller'] = '$_POST';

self::$i2sdk->accessToken()->disconnect( $admin );
self::$i2sdk->setConfigurationOption( 'oauth_enabled', 0 );
}
}



if ( ! empty( $_POST['save_configuration'] ) ) {
$original_api_key = self::$i2sdk->getConfigurationOption( 'api_key' );

$original_sak_key = self::$i2sdk->getConfigurationOption( 'sak' );
$original_appname = self::$i2sdk->getConfigurationOption( 'app_name' );

$api_key_connected = false;
$sak_connected = false;
$oauth_connected = false;
$oauth_enabled = (boolean) self::$i2sdk->getConfigurationOption( 'oauth_enabled' );

$sak_key = empty( $_POST['i2sdk_sak'] ) ? '' : trim( $_POST['i2sdk_sak'] );
$api_key = isset( $_POST['i2sdk_api_key'] ) ? trim( $_POST['i2sdk_api_key'] ) : '';

$appname = isset( $_POST['i2sdk_app_name'] ) ? strtolower( trim( $_POST['i2sdk_app_name'] ) ) : $original_appname;
if ( ! empty( $appname ) ) {



if ( $oauth_enabled ) {
$access_token = self::$i2sdk->getConfigurationOption( 'access_token' );

if ( $access_token ) {
if ( $appname !== $original_appname ) {
self::$i2sdk->accessToken()->disconnect( get_current_user_id() );
}
else{
self::$i2sdk->m4is_dzjdf8h0p8gzs37xpyhh4krbgavss4()->m4is_z4cxfpr19pfbbv3rxv8hpqx($access_token);

self::$i2sdk->m4is_dzjdf8h0p8gzs37xpyhh4krbgavss4()->m4is_8mfe8rwbqyk7d0gnn0fp5epafy20($appname);
$oauth_connected = self::$i2sdk->m4is_dzjdf8h0p8gzs37xpyhh4krbgavss4()->verify_api_connection();

}
}
}



if ( ! empty( $sak_key) ) {
if ( substr( $sak_key, 0, 7 ) === 'KeapAK-' ) {
$sak_keys = array_filter( array_map( 'trim', explode( ',',
 $sak_key ) ) );
$new_keys = [];
foreach( $sak_keys as $new_key ) {
if ( substr( $sak_key, 0, 7 ) === 'KeapAK-' ) {
$rest = self::$i2sdk->m4is_dzjdf8h0p8gzs37xpyhh4krbgavss4();

$rest->set_sak_key( $new_key );
$rest->m4is_8mfe8rwbqyk7d0gnn0fp5epafy20( $appname );
$valid_key = $rest->verify_api_connection();

$sak_connected = $sak_connected || $valid_key;
if ( $valid_key ) {
$new_keys[] = $new_key;
}
}
}
$sak_key = implode( ',', $new_keys );



if ( $sak_connected ) {
self::$i2sdk->setConfigurationOption( 'sak', $sak_key );
self::$i2sdk->setConfigurationOption( 'app_name',
 $appname );
}
}
}




if ( ! $oauth_connected && ! $sak_connected ) {
if ( ! empty( $api_key ) ) {
if ( ! $sak_connected ) {
if ( date( 'Ymd' ) < '20241001' ) {
self::$i2sdk->isdk->configureConnection( $appname,
 $api_key );
$api_key_connected = self::$i2sdk->isdk->verify_api_connection();
if ( $api_key_connected ) {
self::$i2sdk->setConfigurationOption( 'api_key',
 $api_key );
self::$i2sdk->setConfigurationOption( 'app_name', $appname );
}
}
}
}
}
}
else{
if( ! empty( $original_appname ) ) {
if( $oauth_enabled && self::$i2sdk->accessToken()->get_token_object() ){
self::$i2sdk->accessToken()->disconnect( get_current_user_id() );

}
}
}

$valid_connection = $oauth_connected || $sak_connected; 
self::$i2sdk->setConfigurationOption( 'server_verified', ( $valid_connection ? 1 : 0 ) );

if ( $valid_connection ) {


}
else{
if( ! empty($api_key) ){
$connection_failure = self::$i2sdk->isdk->get_ErrorMessage();
}
if( $oauth_enabled && is_wp_error($oauth_connected) ) {
$oauth_connection_failure = $oauth_connected->get_error_message();

}
}
if ( isset( $_POST['i2sdk_retry_count'] ) ) {
self::$i2sdk->setConfigurationOption( 'retry_count', (int) ( $_POST['i2sdk_retry_count'] > 0 ) ? (int) $_POST['i2sdk_retry_count'] : 3 );

}
if ( isset( $_POST['i2sdk_error_email'] ) ) {
self::$i2sdk->setConfigurationOption( 'error_email', strtolower( trim( $_POST['i2sdk_error_email'] ) ) );

}
if ( isset( $_POST['i2sdk_email_notification'] ) ) {
self::$i2sdk->setConfigurationOption( 'email_notification', ( in_array( (int) $_POST['i2sdk_email_notification'],
 [0, 1] ) ? (int) $_POST['i2sdk_email_notification'] : 0 ) );
}
if ( isset( $_POST['i2sdk_infusionsoft_analytics'] ) ) {
self::$i2sdk->setConfigurationOption( 'infusionsoft_analytics',
 ( in_array( (int) $_POST['i2sdk_infusionsoft_analytics'], [0, 1] ) ? (int) $_POST['i2sdk_infusionsoft_analytics'] : 0 ) );
}
if ( isset( $_POST['i2sdk_api_log'] ) ) {
self::$i2sdk->setConfigurationOption( 'api_log',
 ( in_array( (int) $_POST['i2sdk_api_log'], [0, 1] ) ? (int) $_POST['i2sdk_api_log'] : 0 ) );
}


$tracking_code = self::$i2sdk->isdk->m4is_e924pv3v();

if ( is_string( $tracking_code ) && ! empty( $tracking_code ) ) {
self::$i2sdk->setConfigurationOption( 'tracking_code', $tracking_code );

}
if ( ! empty( $_POST['i2sdk_http_post_key'] ) ) {
$post_keys = array_filter( explode( ',', $_POST['i2sdk_http_post_key'] ) );
foreach( $post_keys as &$post_key ) {
$post_key = trim( $post_key );

}
$_POST['i2sdk_http_post_key'] = implode( ',', $post_keys );
self::$i2sdk->setConfigurationOption( 'http_post_key', $_POST['i2sdk_http_post_key'] );

}
}
}

private static function emit_form_javascript() : void {
echo <<<HTMLBLOCK

			<script>
				jQuery("input[name=i2sdk_api_key],input[name=i2sdk_sak]").attr('type', 'password');
				jQuery("input[name=i2sdk_api_key],input[name=i2sdk_sak]").hover(
					function() {
						jQuery(this).attr('type', 'text');
					}, function() {
						jQuery(this).attr('type', 'password');
					}
				);
				jQuery("input[name=is_set_oauth_expiration]").click(function(e){
					if( jQuery(this).hasClass('memb_submitted') ){
						e.preventDefault();
						return false;
					}
					else{
						jQuery(this).addClass('memb_submitted')
						e.target.form.submit();
					}
				});
			</script>
		HTMLBLOCK;

}

private static function m4is_r937g214vqe45m4e0z6hspd3() : void {
if ( current_user_can( 'manage_options' ) ) {
return;
}
wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

}

private static function show_app_name_input() : void {
$server_verified = (boolean) self::$i2sdk->getConfigurationOption( 'server_verified' );

$app_name = self::$i2sdk->getConfigurationOption( 'app_name' );
$disabled_input = $app_name && $server_verified ? ' disabled="disabled" ' : '';

$input_length = empty( $app_name ) ? 32 : strlen( $app_name ) * 1.25;
echo <<<HTMLBLOCK

			<tr>
				<td style="width:250px;">Keap App Name:</td>
				<td>
					<input value="{$app_name}" placeholder="Keap App Name" id="i2sdk_app_name" autocomplete="off" type="text" maxlength="32" size="{$input_length}" name="i2sdk_app_name" {$disabled_input} style="text-align:right;" />.infusionsoft.com/<br />
					<!-- strong style="color:#8B0000">Once connected, you cannot change this app without causing data loss.</strong><br / -->
				</td>
			</tr>
		HTMLBLOCK;

}

private static function show_legacy_api_key() : void {
return;
if ( ! empty( self::$i2sdk->getConfigurationOption( 'sak' ) ) ) {
return;

}
if ( date('Ymd') > '20241001' ) {
return;
}
$legacy_api_key = self::$i2sdk->getConfigurationOption( 'api_key' );
echo <<<HTMLBLOCK

			<tr>
				<td>
					<label for="" style="font-weight:bold;color:#8B0000;">Keap Legacy API Key:</label>
				</td>
				<td>
					<input value="{$legacy_api_key}" placholder="Legacy API Key (Deprecated)" id="i2sdk_api_key" maxlength="255" autocomplete="off" name="i2sdk_api_key" size="80" type="text" style="font-color:#8B0000">
				</td>
			</tr>
		HTMLBLOCK;

}

private static function show_sak_key() : void {
$i2sdk_sak = self::$i2sdk->getConfigurationOption( 'sak' );
if ( strpos( $i2sdk_sak,
 ',' ) !== false ) {
$i2sdk_sak = str_replace( ',', ', ', $i2sdk_sak );
$html = "<textarea placeholder='KeapAK-' id='i2sdk_sak' autocomplete='off' name='i2sdk_sak' cols='60' rows='3' style='resize:none'>{$i2sdk_sak}</textarea>";

}
else {
$html = "<input value='{$i2sdk_sak}' placeholder='KeapAK-' id='i2sdk_sak' autocomplete='off' name='i2sdk_sak' size='60' maxlength='512' type='text'>";

}
echo <<<HTMLBLOCK

			<tr>
				<td>
					<label for="">Service Account Key (SAK):</label>
				</td>
				<td>
					{$html}
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<p><a href="https://help.keap.com/help/api-key" target="_blank" style="font-weight:bold">Click here</a> for help finding your Keap API key</p>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<input type="submit" name="save_configuration" value="Save SAK Key" class="button-primary" />
				</td>
			</tr>
		HTMLBLOCK;

}

private static function show_oauth_connection() : void {
$i2sdk_sak = self::$i2sdk->getConfigurationOption( 'sak' );
if ( empty( $i2sdk_sak ) ) {
return;

}
$token_object = self::$i2sdk->accessToken()->get_token_object();
$connect_url = self::$i2sdk->accessToken()->get_connect_url();
if ( ! $token_object ) {
echo <<<HTMLBLOCK

				<tr>
					<td style="width:250px;">OAuth Not Connected:</td>
					<td>
						<a href="{$connect_url}" class="button-primary" style="background-color:green;">Connect OAuth</a>
					</td>
				</tr>
			HTMLBLOCK;

return;
}
$user_id = get_current_user_id();
$end_of_life = wp_date( 'F j, Y @ g:i:s a', $token_object->endOfLife );
echo <<<HTMLBLOCK

			<tr>
				<td style="width:250px;">OAuth Connected:</td>
				<td>
					<input type="submit" name="is_disconnect_oauth" value="Disconnect OAuth" class="button-primary" style="background-color:red;"/>
					<input type="hidden" name="is_disconnect_admin" value="{$user_id}" />
				</td>
			</tr>
			<tr>
				<td style="width:250px;">Oauth Token Renews By:</td>
				<td>
					{$end_of_life}<br /><br />
					<input type="submit" name="is_set_oauth_expiration" value="Force Token Renewal" class="button-primary" style="" />
				</td>
			</tr>
		HTMLBLOCK;

}

private static function show_api_status() : void {
$verified = (bool) self::$i2sdk->getConfigurationOption( 'server_verified' );

$color = $verified ? 'green' : 'red';
$value = $verified ? __( 'Verified' ) : __( 'Not Verified' );
$label = __( 'Current API status' );

echo <<<HTMLBLOCK

			<tr>
				<td>
					<label for="">{$label}:</label>
				</td>
				<td>
					<b style="color:{$color};">{$value}</b>
				</td>
			</tr>
		HTMLBLOCK;

}

private static function show_http_post_auth_keys() : void {
$keys = self::$i2sdk->getConfigurationOption( 'http_post_key' );
echo <<<HTMLBLOCK

			<tr>
				<td>
					<label for="">HTTP POST Auth Keys:</label>
				</td>
				<td>
					<input maxlength="40" name="i2sdk_http_post_key" size="40" type="text" value="{$keys}" >
				</td>
			</tr>
		HTMLBLOCK;

}

private static function show_api_log_option() : void {
return;
$label = __( 'API Log' );
$api_log = self::$i2sdk->getConfigurationOption( 'api_log' );

$off_selected = $api_log == 0 ? 'selected="selected"' : '';
$on_selected = $api_log == 1 ? 'selected="selected"' : '';
echo <<<HTMLBLOCK

			<tr>
				<td style="width:250px;"><label for="">{$label}:</label></td>
				<td>
					<select name="i2sdk_api_log">
						<option value="0" {$off_selected}>Off</option>
						<option value="1" {$on_selected}>On</option>
					</select> <strong style="color:#880000">For debugging only, will impact performance</strong>
				</td>
			</tr>
		HTMLBLOCK;

}

private static function show_api_log_retention_option() : void {
return;
$label = __( 'API Log Retention (Hours)' );
$retention = (int) self::$i2sdk->getConfigurationOption( 'api_log_max_age' );

echo <<<HTMLBLOCK

			<tr>
				<td>
					<label for="">{$label}:</label>
				</td>
				<td>
					<input maxlength="2" size="10" min="0" max="96" name="i2sdk_log_retention" size="4" type="number" value="{$retention}" >
				</td>
			</tr>
		HTMLBLOCK;

}

private static function show_api_retry_option() : void {
$label = __( 'Transaction Retry Count' );
$retry_count = (int) self::$i2sdk->getConfigurationOption( 'retry_count' );

echo <<<HTMLBLOCK

			<tr>
				<td>
					<label for="">{$label}:</label>
				</td>
				<td>
					<input maxlength="1" min="0" max="9" name="i2sdk_retry_count" size="4" type="number" value="{$retry_count}" >
				</td>
			</tr>
		HTMLBLOCK;

}

private static function check_nonce() {
if ( empty( $_POST['i2sdk_admin_api_nonce'] ) ) {
wp_die( 'nonce missing' );
}
if ( wp_verify_nonce( $_POST['i2sdk_admin_api_nonce'],
 plugin_basename( __FILE__ ) ) ) {
return;
}
wp_die( 'nonce error' );
}

private static function m4is_4snk047w1pxmja3ecja1y309() {
$metrics = get_option( m4is_a6kbph84cyre1t461::API_METRICS_KEY,
 [] );
$metrics = is_array( $metrics ) ? $metrics : [];
$age = empty( $metrics['timestamp'] ) ? time() : time() - $metrics['timestamp'];


echo <<<HTMLBLOCK

			<h2>API Metrics</h2>
			<table class="widefat" style="white-space:nowrap;">
			<tr><td style="width:250px;"></td><td></td></tr>
		HTMLBLOCK;

$limit = isset( $metrics['product']['quota_limit'] ) ? $metrics['product']['quota_limit'] : 0;
$unit = isset( $metrics['product']['quota_time_unit'] ) ? $metrics['product']['quota_time_unit'] : '';

$value = number_format( $limit ) . ' / ' . $unit;
echo <<<HTMLBLOCK

			<tr>
				<td>Quota Limit</td>
				<td>{$value}</td>
			</tr>
		HTMLBLOCK;

$limit = isset( $metrics['product']['throttle_limit'] ) ? $metrics['product']['throttle_limit'] : 0;
$unit = isset( $metrics['product']['throttle_time_unit'] ) ? $metrics['product']['throttle_time_unit'] : '';

$value = number_format( $limit ) . ' / ' . $unit;
echo <<<HTMLBLOCK

			<tr>
				<td>Throttle Limit</td>
				<td>{$value}</td>
			</tr>
		HTMLBLOCK;

$value = isset( $metrics['product']['quota_available'] ) ? number_format( (int) $metrics['product']['quota_available'] ) : 'Unknown';

echo <<<HTMLBLOCK

			<tr>
				<td>Quota Available</td>
				<td>{$value}</td>
			</tr>
		HTMLBLOCK;
$value = isset( $metrics['product']['throttle_available'] ) ? number_format( (int) $metrics['product']['throttle_available'] ) : 'Unknown';

$value = $value . '  / ' . $metrics['product']['throttle_time_unit'];
echo <<<HTMLBLOCK

			<tr>
				<td>API Calls left before Throttling</td>
				<td>{$value}</td>
			</tr>
		HTMLBLOCK;

$value = empty( $metrics['product']['quota_expiry_time'] ) ? 0 : ( $metrics['product']['quota_expiry_time'] / 1000 ) ;
$value = empty( $value ) ? 'Unknown' : human_time_diff( $value );

echo <<<HTMLBLOCK

			<tr>
				<td>Time Until Quota Reset</td>
				<td>{$value}</td>
			</tr>
		HTMLBLOCK;
$value = human_time_diff( time() - $age ) ;

echo <<<HTMLBLOCK

			<tr>
				<td>Last API Call</td>
				<td>{$value} ago</td>
			</tr>
		HTMLBLOCK;
echo <<<HTMLBLOCK

			</table>
		HTMLBLOCK;

}

private static function show_web_analytics_option() {
if ( empty( self::$i2sdk->getConfigurationOption( 'tracking_code' ) ) ) {
return;

}
$label = __( 'Keap Web Analytics' );;
$analytics = self::$i2sdk->getConfigurationOption( 'infusionsoft_analytics' );
$option_off = $analytics == 0 ? 'selected="selected"' : '';

$option_on = $analytics == 1 ? 'selected="selected"' : '';
echo <<<HTMLBLOCK

			<tr>
				<td>
					<label for="">{$label}:</label>
				</td>
				<td>
					<select name="i2sdk_infusionsoft_analytics">
						<option value="0" {$option_off}>Off</option>
						<option value="1" {$option_on}>On</option>
					</select>
				</td>
			</tr>
		HTMLBLOCK;

}

}
