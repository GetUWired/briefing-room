<?php
/**
 * Copyright (c) 2011-2024 David J Bullock
 * Web Power and Light, LLC
 * https://webpowerandlight.com
 * support@webpowerandlight.com
 *
 */


defined( 'ABSPATH' ) || die();


m4is_nskfcq9pc3bt348v1z2p22fm::init();
final class m4is_nskfcq9pc3bt348v1z2p22fm {
private static m4is_a6kbph84cyre1t461 $i2sdk;
private function __construct() {

}

public static function init(): void {
global $i2sdk;

require_once __DIR__ . '/lib/i2sdk_class.php';
self::i2sdk_define_constants();
self::get_i2sdk();
$GLOBALS['i2sdk'] = clone self::$i2sdk;

self::get_i2sdk()->initialize();
$GLOBALS['i2sdk']->initialize();
if ( is_admin() ) {
require_once I2SDK_DIR . 'admin/activate.php';


require_once I2SDK_DIR . 'admin/deactivate.php';
require_once I2SDK_DIR . 'admin/uninstall.php';
require_once I2SDK_DIR . 'admin/dashboard.php';

self::register_activation_hooks();
}
else {
$tracking_code = (string) self::get_i2sdk()->getConfigurationOption( 'tracking_code' );

$analytics_enabled = (bool) self::get_i2sdk()->getConfigurationOption( 'infusionsoft_analytics' );
if ( $tracking_code > '' && $analytics_enabled == 1 ) {
add_action( 'wp_footer',
 [ self::get_i2sdk(), 'show_infusionsoft_web_analytics'] );
}
}
do_action( 'i2sdk_init' );
}

private static function register_activation_hooks() : void {
register_activation_hook( __FILE__,
 'wpal_i2sdk_activate' );
register_deactivation_hook( __FILE__, 'wpal_i2sdk_deactivate' );
register_uninstall_hook( __FILE__, 'wpal_i2sdk_uninstall' );

}

private static function i2sdk_define_constants() : void {
define( 'I2SDK_HOME', __FILE__ );
define( 'I2SDK_VERSION', '6.2' );
define( 'I2SDK_DIR',
 __DIR__ . '/' );
}




public static function get_i2sdk() : m4is_a6kbph84cyre1t461 {
return self::$i2sdk ??= new m4is_a6kbph84cyre1t461();

}

}

