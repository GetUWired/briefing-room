<?php
/*
Plugin Name: Memberium for Keap
Description: Membership system for Keap and WordPress
Author URI: http://www.webpowerandlight.com/
Author: David Bullock
License: Copyright (c) 2012-2024 David Bullock, Web Power and Light
Plugin URI: http://www.memberium.com/
Requires at least: 6.2
Requires PHP: 7.4
Text Domain: memberium
Update URI: https://memberium.com/
Version: 4.1.1
*/
defined('ABSPATH') || die();
if (! function_exists('memberium_app')) {
if (include_once __DIR__ . '/classes/system/core.php') {
define('MEMBERIUM_HOME',
 __FILE__);
define('MEMBERIUM_HOME_DIR', __DIR__ . '/');
function memberium_app(): m4is_6y9612z4hjd6fzpap4r5n853641m1jc {
static $m4is_132xe588j;

return $m4is_132xe588j ??= m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
memberium_app();
}
}