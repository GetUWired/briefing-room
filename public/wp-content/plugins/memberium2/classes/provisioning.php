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





final class m4is_zrrt34b1nqxbv {

const LICENSE_SERVER_URL = 'https://licenseserver.webpowerandlight.com/getlicense.php';
private static m4is_6y9612z4hjd6fzpap4r5n853641m1jc $m4is_132xe588j;

private static $m4is_wn32emz9ttxzcx9rb04gk;
private static $m4is_12vrxdmdm9trvd1a;
private static $m4is_zv79ckfa8d5hg10bd;
private static $m4is_s9xsbec5yt76bbd8c8jt6;


private function __construct() {
}

public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_wn32emz9ttxzcx9rb04gk = 'wpal/census';
self::$m4is_s9xsbec5yt76bbd8c8jt6 = 'memberium/licenseserver/updated';
self::$m4is_12vrxdmdm9trvd1a = false;

self::$m4is_zv79ckfa8d5hg10bd = false;
}

public static function m4is_d3h5y3yjgcsg9tp5sqd1() : int {
global $wpdb;
$m4is_5sbqr2xek9r45b6t8v1z = (int) $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM %i",
 $wpdb->users ) );
update_option( self::$m4is_wn32emz9ttxzcx9rb04gk, base_convert( $m4is_5sbqr2xek9r45b6t8v1z, 10, 36 ), true );
return $m4is_5sbqr2xek9r45b6t8v1z;

}

public static function m4is_6jaw8csaa2dwx9gdbf6351mfj() {
$m4is_5sbqr2xek9r45b6t8v1z = base_convert( get_option( self::$m4is_wn32emz9ttxzcx9rb04gk,
 0 ), 36, 10 );
if ( ! $m4is_5sbqr2xek9r45b6t8v1z ) {
$m4is_5sbqr2xek9r45b6t8v1z = self::m4is_d3h5y3yjgcsg9tp5sqd1();
}
return $m4is_5sbqr2xek9r45b6t8v1z;

}

public static function m4is_ce25q6vkyewg80zh9rs8856r57zh3y() {
return self::$m4is_12vrxdmdm9trvd1a;
}

public static function m4is_s3p9agjhjgh8vf62fet9m7() : array {
$m4is_j466gbkgmqehxybjbtg3knm0b5 = self::m4is_w8b86pqsw82qgftae();

$m4is_06c8s5xs94f91335gnaey25 = isset( $m4is_j466gbkgmqehxybjbtg3knm0b5['tags'] ) ? $m4is_j466gbkgmqehxybjbtg3knm0b5['tags'] : '';

$m4is_06c8s5xs94f91335gnaey25 = array_filter( explode( ',', strtolower( $m4is_06c8s5xs94f91335gnaey25 ) ) );
return $m4is_06c8s5xs94f91335gnaey25;

}

public static function m4is_n9vtfbtbfsdnyf8vzsrb522pak078vcf() : bool {
return (boolean) self::$m4is_zv79ckfa8d5hg10bd;
}

public static function m4is_w8b86pqsw82qgftae( string $m4is_9pq5wr1ftr = '' ) : array {
$m4is_b9xk29a6 = self::m4is_6avty6j42cedxh718s2q();

$m4is_bhmhtczfk9zzd = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'random_seed' );
if ( empty( $m4is_9pq5wr1ftr ) ) {
$m4is_9pq5wr1ftr = self::m4is_net7rnnwxcb3hw5();

}
$m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp = 3;
$m4is_j97zgm2cs2 = 32;
$m4is_hartbe843crydzh['valid'] = 0;
$m4is_hartbe843crydzh['trial_mode'] = 0;

$m4is_b44pax71efx41n2y1bdvckktq35bvfs4 = self::m4is_ddvrpm6kewsx76gm();
$m4is_93jxby2jxk = strtolower( trim( $m4is_bhmhtczfk9zzd . $m4is_b44pax71efx41n2y1bdvckktq35bvfs4 ) );

$m4is_0cx6tq67x2gs9hqev5bwsj4kb4t15 = $m4is_bhmhtczfk9zzd;
if ( $m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp == 3 ) {
$m4is_492r1ffmm1crr0ra6yf = unserialize( base64_decode( substr( $m4is_9pq5wr1ftr,
 32 ) ) );
$m4is_y5xhrtx1aw6qtpt5jtwxs8d19h8 = substr( $m4is_9pq5wr1ftr, 0, 32 );
$m4is_bnkzeza2bxby = md5( serialize( $m4is_492r1ffmm1crr0ra6yf ) . strtolower( $m4is_0cx6tq67x2gs9hqev5bwsj4kb4t15 ) . strtolower( $m4is_b44pax71efx41n2y1bdvckktq35bvfs4 ) );

$m4is_hartbe843crydzh = $m4is_492r1ffmm1crr0ra6yf;
$m4is_hartbe843crydzh = is_array( $m4is_hartbe843crydzh ) ? $m4is_hartbe843crydzh : [];

if ($m4is_bnkzeza2bxby == $m4is_y5xhrtx1aw6qtpt5jtwxs8d19h8) {
$m4is_hartbe843crydzh['valid'] = 1;
}
else {
$m4is_hartbe843crydzh['valid'] = 0;

}
$m4is_hartbe843crydzh['active'] = isset( $m4is_492r1ffmm1crr0ra6yf['active'] ) ? $m4is_492r1ffmm1crr0ra6yf['active'] : 0;
$m4is_hartbe843crydzh['kill'] = isset( $m4is_492r1ffmm1crr0ra6yf['kill'] ) ? $m4is_492r1ffmm1crr0ra6yf['kill'] : 0;

$m4is_hartbe843crydzh['max_users'] = isset( $m4is_492r1ffmm1crr0ra6yf['max_users'] ) ? $m4is_492r1ffmm1crr0ra6yf['max_users'] : 999999999;

$m4is_hartbe843crydzh['max_version'] = isset( $m4is_492r1ffmm1crr0ra6yf['max_version'] ) ? $m4is_492r1ffmm1crr0ra6yf['max_version'] : 0;

$m4is_hartbe843crydzh['min_version'] = isset( $m4is_492r1ffmm1crr0ra6yf['min_version'] ) ? $m4is_492r1ffmm1crr0ra6yf['min_version'] : 0;

$m4is_hartbe843crydzh['next_check'] = isset( $m4is_492r1ffmm1crr0ra6yf['next_check'] ) ? $m4is_492r1ffmm1crr0ra6yf['next_check'] : 0;

$m4is_hartbe843crydzh['renewal_date'] = isset( $m4is_492r1ffmm1crr0ra6yf['renewal_date'] ) ? $m4is_492r1ffmm1crr0ra6yf['renewal_date'] : 0;

$m4is_hartbe843crydzh['tags'] = isset( $m4is_492r1ffmm1crr0ra6yf['tags'] ) ? $m4is_492r1ffmm1crr0ra6yf['tags'] : '';
$m4is_hartbe843crydzh['trial_mode'] = isset( $m4is_492r1ffmm1crr0ra6yf['trial_mode'] ) ? $m4is_492r1ffmm1crr0ra6yf['trial_mode'] : 0;

$m4is_hartbe843crydzh['version'] = isset( $m4is_492r1ffmm1crr0ra6yf['version'] ) ? $m4is_492r1ffmm1crr0ra6yf['version'] : 0;
$m4is_hartbe843crydzh['now'] = time();

$m4is_hartbe843crydzh['check_ttl'] = $m4is_hartbe843crydzh['next_check'] - time();
$m4is_hartbe843crydzh['expiration_ttl'] = $m4is_hartbe843crydzh['renewal_date'] - time();

if ( ! empty( $m4is_hartbe843crydzh['kill'] ) ) {
if (! function_exists('deactivate_plugins') ) {
require_once ABSPATH . '/wp-admin/includes/plugin.php';

}
$m4is_hartbe843crydzh['active'] = 0;
$m4is_zy8a70vtfm18z95pk = plugin_basename( MEMBERIUM_HOME );
deactivate_plugins( $m4is_zy8a70vtfm18z95pk,
 true, false );
deactivate_plugins( $m4is_zy8a70vtfm18z95pk, true, true );
wp_cache_flush();
if ( ! headers_sent() ) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = is_admin() ? admin_url() : get_home_url();

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = esc_url_raw( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq );
header( "Location: {$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq}" );

}
exit;
}
}

if ( $m4is_hartbe843crydzh['expiration_ttl'] < 1 ) {
$m4is_hartbe843crydzh['active'] = 0;
}
if ( $m4is_hartbe843crydzh['max_users'] < self::m4is_6jaw8csaa2dwx9gdbf6351mfj() ) {
$m4is_hartbe843crydzh['active'] = 0;

}
self::$m4is_zv79ckfa8d5hg10bd = (int) $m4is_hartbe843crydzh['trial_mode'];
return $m4is_hartbe843crydzh;
}

public static function m4is_6avty6j42cedxh718s2q() : string {
static $m4is_j8j55t8dz79m7 = '';

if ( empty( $m4is_j8j55t8dz79m7 ) ) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = self::m4is_ddvrpm6kewsx76gm(); 
$m4is_j8j55t8dz79m7 = 'memberium/license/' . strtolower( soundex( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) . metaphone( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq,
 16 ) ) . '_' . abs( crc32( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) );
}
return $m4is_j8j55t8dz79m7;
}

public static function m4is_net7rnnwxcb3hw5() : string {
return get_option( m4is_zrrt34b1nqxbv::m4is_6avty6j42cedxh718s2q() );

}

private static function m4is_ddvrpm6kewsx76gm() : string {
static $m4is_kb9c4mynpagmg7s40qf9 = '';
if ( empty( $m4is_kb9c4mynpagmg7s40qf9 ) ) {
$m4is_kb9c4mynpagmg7s40qf9 = preg_replace( '/^www\./',
 '', strtolower( parse_url( get_option( 'home' ), PHP_URL_HOST ) ) );
}
return $m4is_kb9c4mynpagmg7s40qf9;
}

public static function m4is_5qw71m3dzesr1mczt4k( bool $m4is_pxqqyhvpv8x9tskp6p79ktbd = false ) {
$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');

if ( empty( $m4is_v4beyw7zqhr3 ) ) {
return false;
}
if ( $m4is_pxqqyhvpv8x9tskp6p79ktbd === false ) {
$m4is_jmba4p3znm1w7m1yhmrx8mwj2w8v = time() - (int) get_option( self::$m4is_s9xsbec5yt76bbd8c8jt6,
 0 );
$m4is_32p1nr89r43g68acf6 = function_exists( 'is_admin' ) && is_admin() ? 300 : HOUR_IN_SECONDS;
if ( $m4is_jmba4p3znm1w7m1yhmrx8mwj2w8v < $m4is_32p1nr89r43g68acf6 ) {
return self::m4is_net7rnnwxcb3hw5();

}
}
$m4is_bhmhtczfk9zzd = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'random_seed');
$m4is_b9xk29a6 = self::m4is_6avty6j42cedxh718s2q();

$m4is_88j4ftq0w = function_exists('wp_get_environment_type') ? wp_get_environment_type() : 'production';
$m4is_fqgvj5fayrpmr349dy65f = 'None';

$m4is_j466gbkgmqehxybjbtg3knm0b5 = '';
$m4is_kyrqdd9qn08s3tbxx9ahv = [
'method' => 'POST',
'timeout' => 10,
'redirection' => 5,
'httpversion' =>
 '1.0',
'blocking' => true,
'headers' => [],
'cookies' => [],
'body' => [
'admin_email' => get_bloginfo('admin_email'),
'appname' =>
 $m4is_v4beyw7zqhr3,
'environment' => $m4is_88j4ftq0w,
'checksum' => $m4is_bhmhtczfk9zzd,
'hostname' => self::m4is_ddvrpm6kewsx76gm(),

'interval' => 32,
'ioncube_version' => $m4is_fqgvj5fayrpmr349dy65f,
'ip_address' => $_SERVER['SERVER_ADDR'] ?? '0.0.0.0',
'license_key' =>
 '',
'php_version' => phpversion(),
'protocol_version' => 3,
'sku' => 'M4IS',
'url' => get_bloginfo('url'),
'user_count' => self::m4is_6jaw8csaa2dwx9gdbf6351mfj(),

'version' => self::$m4is_132xe588j->m4is_5kywzj74m8ht8s0(),
],
];
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = wp_remote_post( self::LICENSE_SERVER_URL,
 $m4is_kyrqdd9qn08s3tbxx9ahv );
if ( is_array( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
$m4is_j466gbkgmqehxybjbtg3knm0b5 = $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['body'];

$m4is_770tav7rspppydhq6whawje = self::m4is_w8b86pqsw82qgftae( $m4is_j466gbkgmqehxybjbtg3knm0b5 );
update_option( 'memberium/licenseserver/status',
 'pass', true );
if ( $m4is_770tav7rspppydhq6whawje['valid'] == 1 ) {
update_option( $m4is_b9xk29a6, $m4is_j466gbkgmqehxybjbtg3knm0b5 );

}
else {
$m4is_j466gbkgmqehxybjbtg3knm0b5 = self::m4is_net7rnnwxcb3hw5();
}
}
elseif ( is_a( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz,
 'WP_ERROR' ) ) {
update_option('memberium/licenseserver/status', 'fail', true);
}
update_option( self::$m4is_s9xsbec5yt76bbd8c8jt6,
 time(), 'yes');
return $m4is_j466gbkgmqehxybjbtg3knm0b5;
}

static function m4is_4t3g6z5x3k98g3vvanfv() : bool {
static $m4is_12vrxdmdm9trvd1a = -1;


if ( is_bool( $m4is_12vrxdmdm9trvd1a ) ) {
return (boolean) $m4is_12vrxdmdm9trvd1a;
}
$m4is_j466gbkgmqehxybjbtg3knm0b5 = self::m4is_net7rnnwxcb3hw5();

$m4is_770tav7rspppydhq6whawje = self::m4is_w8b86pqsw82qgftae( $m4is_j466gbkgmqehxybjbtg3knm0b5 );
$m4is_67nbpn904a94e1xe97 = false;

if ( ! $m4is_770tav7rspppydhq6whawje['active'] ) {
$m4is_67nbpn904a94e1xe97 = true;
}
if ( ! $m4is_770tav7rspppydhq6whawje['valid'] ) {
$m4is_67nbpn904a94e1xe97 = true;

}
if ( $m4is_770tav7rspppydhq6whawje['check_ttl'] < 10800 ) {
$m4is_67nbpn904a94e1xe97 = true;
}
if ( false && $m4is_67nbpn904a94e1xe97 ) {
$m4is_j466gbkgmqehxybjbtg3knm0b5 = self::m4is_5qw71m3dzesr1mczt4k();

$m4is_770tav7rspppydhq6whawje = self::m4is_w8b86pqsw82qgftae( $m4is_j466gbkgmqehxybjbtg3knm0b5 );
}

$m4is_12vrxdmdm9trvd1a = isset( $m4is_770tav7rspppydhq6whawje['active'] ) ? (int) $m4is_770tav7rspppydhq6whawje['active'] : 0;


if ( $m4is_12vrxdmdm9trvd1a && isset( $m4is_770tav7rspppydhq6whawje['max_users'] ) ) {
if ($m4is_770tav7rspppydhq6whawje['max_users'] < self::m4is_6jaw8csaa2dwx9gdbf6351mfj() ) {
$m4is_12vrxdmdm9trvd1a = 0;

}
}
if ($m4is_12vrxdmdm9trvd1a && isset($m4is_770tav7rspppydhq6whawje['max_version']) ) {
if (version_compare($m4is_770tav7rspppydhq6whawje['max_version'],
 self::$m4is_132xe588j->m4is_5kywzj74m8ht8s0() ) <= 0) {
$m4is_12vrxdmdm9trvd1a = 0;
}
}
self::$m4is_12vrxdmdm9trvd1a = (bool) $m4is_12vrxdmdm9trvd1a;

return self::$m4is_12vrxdmdm9trvd1a;
}

static function m4is_yb1kyacqc84h1zq0m17py( array $m4is_tvnheyx87eg177es43p81y = [] ) : bool {
$m4is_dsyywa0agx51p6vcpym = self::m4is_s3p9agjhjgh8vf62fet9m7();

foreach( $m4is_tvnheyx87eg177es43p81y as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
if ( in_array( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 $m4is_dsyywa0agx51p6vcpym ) ) {
return true;
}
}
return false;
}
}