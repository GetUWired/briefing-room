<?php

return;
defined( 'ABSPATH' ) || die();
add_action('admin_menu', 'i2sdk_plugin_menu', 0, 1000 );
function i2sdk_plugin_menu() {
require_once I2SDK_DIR . 'admin/dashboard.php';

if (! m4is_nskfcq9pc3bt348v1z2p22fm::get_i2sdk()->getConfigurationOption('server_verified') || ! is_plugin_active('memberium2/memberium2.php') ) {
add_menu_page('i2SDK Configuration',
 'i2SDK', 'manage_options', 'i2sdk-admin', 'i2sdk_admin_menu');
}
}
