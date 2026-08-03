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


final class m4is_9d8n6yra072mpxd0pczne9 {
private static $m4is_6ba2w5sfgx35tz = false;

private function __construct() {

}

public static function m4is_67nqhgcsb0p43k96hkt933aagr1c7c6() : void {
$m4is_af7jcqj9e7w = defined( 'MEMBERIUM_DISABLE_CACHING' ) && constant( 'MEMBERIUM_DISABLE_CACHING' ) == true;

if ( function_exists( 'is_user_logged_in' ) && ! is_user_logged_in() ) {
return;
}
self::m4is_aw0sf8w20mth5zmqt();
if ( ! headers_sent() ) {
header('X-Cache-Enabled: False');

header('Cache-Control: no-cache, max-age=0, must-revalidate, no-store');
header('Pragma: no-cache');
header('Expires: 0');
nocache_headers();

}
}

public static function m4is_3p1kx10eg3f0663c9q3() : void {
static $m4is_v6gcpd300na = false;
if ( $m4is_v6gcpd300na ) {
return;

}
if ( self::$m4is_6ba2w5sfgx35tz ) {
return;
}
self::$m4is_6ba2w5sfgx35tz = true;
$m4is_v6gcpd300na = true;
self::m4is_67nqhgcsb0p43k96hkt933aagr1c7c6();


if ( ! empty( $_SERVER['HTTP_X_VARNISH'] ) ) {
return;
}

}

public static function m4is_e7casgxk1m07jenspeks11v() {
return ! self::$m4is_6ba2w5sfgx35tz;

}

private static function m4is_aw0sf8w20mth5zmqt() : void {
static $m4is_xqwfcg8j5e77epwgmsby2v8c0 = false;
if (! $m4is_xqwfcg8j5e77epwgmsby2v8c0) {
$m4is_xqwfcg8j5e77epwgmsby2v8c0 = true;

if ( ! defined('LSCACHE_NO_CACHE') ) {
define('LSCACHE_NO_CACHE', true);
}
if (! defined('DONOTCACHEPAGE')) {
define('DONOTCACHEPAGE',
 true);
}
if ( ! headers_sent() ) {
header( 'X-Cache-Enabled: False' );

}
}
}

}
