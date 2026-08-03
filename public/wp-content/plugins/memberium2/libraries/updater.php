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

final class m4is_p6537fedxhj0dgtd67cpq7rdpxna {
const DEV_UPDATE_URL = 'https://licenseserver.webpowerandlight.com/memberium-is/current-version.php';

const PLUGIN_UPDATE_URL = 'https://licenseserver.webpowerandlight.com/memberium-is/current-version.php';
const PRODUCTION_UPDATE_URL = 'https://licenseserver.webpowerandlight.com/memberium-is/current-version.php';

const PLUGIN_FULLSLUG = 'memberium2/memberium2.php';
const PLUGIN_HOME = MEMBERIUM_HOME;
const PLUGIN_SLUG = 'memberium2';
const PLUGIN_URL = 'https://memberium.com/';

const UPDATE_ID = 31415926547;
static private $m4is_132xe588j;
static private $m4is_2tmbyvrg1zws8cn2sjdtq3ztt23mxzzh;
static private $m4is_2hwfmv5gk405fmzshhzepyfct;

static private $m4is_810wvzajghq1j;

static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_2tmbyvrg1zws8cn2sjdtq3ztt23mxzzh = 'memberium2/memberium2.php';
self::$m4is_810wvzajghq1j = 31415926547;
self::$m4is_2hwfmv5gk405fmzshhzepyfct = 'https://licenseserver.webpowerandlight.com/memberium-is/current-version.php';

}
private function __construct() {}

static function m4is_xznjy326f4mpjfrzteskf2() : string {
self::m4is_a423nefn6b88rpd12wd();
return get_option( 'memberium/updater/version',
 0 );
}

static function m4is_jh03w5r3f() : string {
$m4is_88j4ftq0w = function_exists('wp_get_environment_type') ? wp_get_environment_type() : 'production';
 
$m4is_4s4mmcg520b0y0tbbgnade = [
'local' => self::DEV_UPDATE_URL,
'development' => self::DEV_UPDATE_URL,
'staging' => self::PRODUCTION_UPDATE_URL,

'production' => self::PRODUCTION_UPDATE_URL,
];
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = isset($m4is_4s4mmcg520b0y0tbbgnade[$m4is_88j4ftq0w]) ? $m4is_4s4mmcg520b0y0tbbgnade[$m4is_88j4ftq0w] : self::PRODUCTION_UPDATE_URL;

$m4is_t9svq56t4ysv1rsgy1g61g = self::$m4is_132xe588j->m4is_5kywzj74m8ht8s0();
$m4is_7cgjy4597q787cfa9 = get_bloginfo('admin_email');

$m4is_5sbqr2xek9r45b6t8v1z = m4is_zrrt34b1nqxbv::m4is_6jaw8csaa2dwx9gdbf6351mfj();
$m4is_qm158q37sdb3bsk0bh1 = phpversion();
$m4is_e8h8dhk83hxkj818w = parse_url(get_bloginfo('url'),
 PHP_URL_HOST);
$m4is_h5a91hgfm2n9at2dn89fsmepnva = self::$m4is_132xe588j->m4is_tfgcn7v2rx4cy4();
$m4is_r53562w9befcb2kh7rm4p7n5 = [
'admin' =>
 rawurlencode($m4is_7cgjy4597q787cfa9),
'domain' => rawurlencode($m4is_e8h8dhk83hxkj818w),
'env' => rawurlencode($m4is_88j4ftq0w),
'm4ac' =>
 rawurlencode($m4is_t9svq56t4ysv1rsgy1g61g),
'php' => rawurlencode($m4is_qm158q37sdb3bsk0bh1),
'users' => rawurlencode($m4is_5sbqr2xek9r45b6t8v1z),

'wp' => rawurlencode($m4is_h5a91hgfm2n9at2dn89fsmepnva),
];
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = add_query_arg($m4is_r53562w9befcb2kh7rm4p7n5,
 $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq);
return $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq;
}
static function m4is_a423nefn6b88rpd12wd(bool $m4is_pxqqyhvpv8x9tskp6p79ktbd = false) {
if (! $m4is_pxqqyhvpv8x9tskp6p79ktbd) {
$m4is_vshhg0mgajt78 = time() - get_option('memberium/updater/timestamp',
 0);
if ($m4is_vshhg0mgajt78 > 0 && $m4is_vshhg0mgajt78 < 3600) {
return false;
}
}
$m4is_vcbyk32kse0haav6b8zawzm48eqw = [
'timeout' =>
 10,
];
$m4is_wfj46xet = self::$m4is_132xe588j->m4is_5kywzj74m8ht8s0();
$m4is_1neq7hg53n5xxwtmt8fwf6c = self::m4is_jh03w5r3f();
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = wp_remote_get($m4is_1neq7hg53n5xxwtmt8fwf6c,
 $m4is_vcbyk32kse0haav6b8zawzm48eqw);
if (! is_a($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz, 'WP_Error') && isset($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['body'])) {
$m4is_sa2066vg3abc07 = unserialize($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['body']);

if (isset($m4is_sa2066vg3abc07->version) ) {
update_option('memberium/updater/data', $m4is_sa2066vg3abc07, false);
update_option('memberium/updater/version',
 $m4is_sa2066vg3abc07->version, false);
update_option('memberium/updater/timestamp', time(), false);
}
else {
error_log('Memberium: [error] Plugin update check failed.  Cannot fetch current version information.  Please contact support@memberium.com');

return false;
}
}
return true;
}
static function m4is_xc331jt1cp4sr9c88wvfy3t009av6r3z($m4is_ma5wsfqf, $m4is_g61yzqs7ecta0xztr70d7v,
 $m4is_knxbec8fr3be1s2tkx0ydee0z) {
if (property_exists($m4is_knxbec8fr3be1s2tkx0ydee0z, 'slug') ) {
if ($m4is_knxbec8fr3be1s2tkx0ydee0z->slug == self::PLUGIN_SLUG) {
return true;

}
}
return false;
}
static function m4is_4b9bthvp4qd4s0($m4is_ma5wsfqf, $m4is_g61yzqs7ecta0xztr70d7v, $m4is_knxbec8fr3be1s2tkx0ydee0z) {
if (property_exists($m4is_knxbec8fr3be1s2tkx0ydee0z,
 'slug') ) {
if ($m4is_knxbec8fr3be1s2tkx0ydee0z->slug == self::PLUGIN_SLUG) {
$m4is_jpjhgyqzq5aqzeafwjq11xd4557 = unserialize(m4is_0gqs7crsrzdbgfzptjws94s::m4is_5qammca8yf8pswy3(self::PLUGIN_UPDATE_URL) );

if (is_object($m4is_jpjhgyqzq5aqzeafwjq11xd4557) ) {
return $m4is_jpjhgyqzq5aqzeafwjq11xd4557;
}
}
}
return $m4is_ma5wsfqf;
}
static function m4is_0vpt0m5t8mc1ht($m4is_n2ssfh8hh6rxvwe3) {
$m4is_ma5wsfqf = unserialize(m4is_0gqs7crsrzdbgfzptjws94s::m4is_5qammca8yf8pswy3(self::PLUGIN_UPDATE_URL) );

if (is_object($m4is_ma5wsfqf) ) {
if (! function_exists('get_plugin_data') ) {
require_once ABSPATH . 'wp-admin/includes/plugin.php';

}
$m4is_pcnj242mpvmw3 = get_plugin_data(self::PLUGIN_HOME, false, false);
$m4is_2tmbyvrg1zws8cn2sjdtq3ztt23mxzzh = self::PLUGIN_FULLSLUG;

$m4is_kke9k3nvfj766wg = $m4is_ma5wsfqf->version;
$m4is_3wenrd758ymdxyn2e3pbnse = $m4is_pcnj242mpvmw3['Version'];
$m4is_nt48femkg6za9v5mn1sr23m62k = new stdClass;

$m4is_nt48femkg6za9v5mn1sr23m62k->id = self::UPDATE_ID;
$m4is_nt48femkg6za9v5mn1sr23m62k->slug = self::PLUGIN_SLUG;
$m4is_nt48femkg6za9v5mn1sr23m62k->plugin = $m4is_2tmbyvrg1zws8cn2sjdtq3ztt23mxzzh;

$m4is_nt48femkg6za9v5mn1sr23m62k->new_version = $m4is_ma5wsfqf->version;
$m4is_nt48femkg6za9v5mn1sr23m62k->url = self::PLUGIN_URL;

$m4is_nt48femkg6za9v5mn1sr23m62k->package = $m4is_ma5wsfqf->download_link;
$m4is_nt48femkg6za9v5mn1sr23m62k->upgrade_notice = $m4is_ma5wsfqf->upgrade_notice;

$m4is_nt48femkg6za9v5mn1sr23m62k->tested = $m4is_ma5wsfqf->tested;
$m4is_nt48femkg6za9v5mn1sr23m62k->icons = $m4is_ma5wsfqf->icons;

if (version_compare($m4is_kke9k3nvfj766wg, $m4is_3wenrd758ymdxyn2e3pbnse, 'gt') ) {
$m4is_n2ssfh8hh6rxvwe3->response[$m4is_nt48femkg6za9v5mn1sr23m62k->plugin] = $m4is_nt48femkg6za9v5mn1sr23m62k;

}
elseif (! empty($m4is_n2ssfh8hh6rxvwe3->response) ) {
unset($m4is_n2ssfh8hh6rxvwe3->response[$m4is_2tmbyvrg1zws8cn2sjdtq3ztt23mxzzh]);

}
}
return $m4is_n2ssfh8hh6rxvwe3;
}

private static function m4is_sfaenx4q() : bool {
if ( ! self::m4is_6h4kk370tjx4405rz0e9() ) {
return false;

}
$m4is_zerr1h0771r4n0rkm799e5knf0rm3cb = strtolower( trim( self::$m4is_132xe588j->m4is_5kywzj74m8ht8s0() ) );
$m4is_vg9gmn2r9hpzvsrvy39jp9bcq5cs4 = (bool) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'autoupdate' );
$m4is_vg9gmn2r9hpzvsrvy39jp9bcq5cs4 = $m4is_vg9gmn2r9hpzvsrvy39jp9bcq5cs4 || ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv();

if ( ! $m4is_vg9gmn2r9hpzvsrvy39jp9bcq5cs4 ) {
$m4is_483rrer3385zy7x4156q6k068j2ns = ['dev', 'alpha', 'beta', 'rc', 'pl'];
foreach ( $m4is_483rrer3385zy7x4156q6k068j2ns as $m4is_bakq3rbxwr9zp9pc ) {
if ( ! $m4is_vg9gmn2r9hpzvsrvy39jp9bcq5cs4 ) {
$m4is_vg9gmn2r9hpzvsrvy39jp9bcq5cs4 = (bool) strpos( $m4is_zerr1h0771r4n0rkm799e5knf0rm3cb,
 $m4is_bakq3rbxwr9zp9pc );
}
}
}
return $m4is_vg9gmn2r9hpzvsrvy39jp9bcq5cs4;
}

static function m4is_qx3nkxwvyc3p3() {
if ( ! self::m4is_sfaenx4q() ) {
return;

}
if ( ! function_exists( 'get_plugin_data' ) ) {
require_once ABSPATH . 'wp-admin/includes/plugin.php';
}
$m4is_ma5wsfqf = wp_remote_get( self::PLUGIN_UPDATE_URL );

$m4is_ma5wsfqf = is_array( $m4is_ma5wsfqf ) ? $m4is_ma5wsfqf = unserialize( $m4is_ma5wsfqf['body'] ) : [];
$m4is_1we1qc8rdsrfq = false;

$m4is_hx73svk1dhp58kbastqxah8f1 = get_plugin_data( self::PLUGIN_HOME, false, false );
$m4is_kke9k3nvfj766wg = is_object( $m4is_ma5wsfqf ) && property_exists( $m4is_ma5wsfqf,
 'version' ) ? $m4is_ma5wsfqf->version : '';
$m4is_3wenrd758ymdxyn2e3pbnse = self::$m4is_132xe588j->m4is_5kywzj74m8ht8s0();
if ( version_compare( $m4is_kke9k3nvfj766wg,
 $m4is_3wenrd758ymdxyn2e3pbnse, 'gt' ) ) {

require_once ABSPATH .'/wp-admin/includes/file.php'; 
$m4is_trbmvf3vtet8xa9444cradv = WP_PLUGIN_DIR;

$m4is_24xp3tza9hzznsrkbmj = download_url( $m4is_ma5wsfqf->download_link, 300 );
if ( is_wp_error( $m4is_24xp3tza9hzznsrkbmj ) ) {
error_log( 'Memberium: [error] Plugin update failed.  Cannot download update file.  Please contact support.' );

return;
}

if ( file_exists( $m4is_24xp3tza9hzznsrkbmj ) ) {


require_once ABSPATH . '/wp-admin/includes/class-wp-filesystem-base.php';

require_once ABSPATH . '/wp-admin/includes/class-wp-filesystem-direct.php';
WP_Filesystem();
$m4is_5n1m7p3ymrfw = new wp_filesystem_direct(null);

$m4is_b5e8b863b2wd8ze = self::$m4is_132xe588j->m4is_hscsx4pb3zt();
ignore_user_abort(); 
file_put_contents( ABSPATH . '.maintenance',
 '<?php $upgrading = time();' );
$m4is_5n1m7p3ymrfw->delete( $m4is_b5e8b863b2wd8ze, true );
if ( ! function_exists( 'disk_free_space' ) ) {
add_filter( 'wp_doing_cron',
 '__return_false', 10, 1 );
}
unzip_file( $m4is_24xp3tza9hzznsrkbmj, $m4is_trbmvf3vtet8xa9444cradv );
remove_filter( 'wp_doing_cron',
 '__return_false', 10 );
if ( function_exists( 'opcache_reset' ) ) {
opcache_reset();
wp_cache_flush();
}
unlink( $m4is_24xp3tza9hzznsrkbmj );

if (file_exists(ABSPATH . '.maintenance') ) {
unlink(ABSPATH . '.maintenance');
}
$m4is_1we1qc8rdsrfq = true;
}
}
return $m4is_1we1qc8rdsrfq;

}

static function m4is_ray7nypearspx4zrdzty8dt0hc6v9g1x( $m4is_653vr0y862eq9kng1wy50z, $m4is_93t3t3jcbm5kprmxy3rkg, $m4is_zy8a70vtfm18z95pk,
 $m4is_rj7dpddyqzxrkd7j54x ) {
if ( $m4is_653vr0y862eq9kng1wy50z === false ) {
self::m4is_a423nefn6b88rpd12wd( false );
$m4is_8faf1rmnyh6x1dz = get_option( 'memberium/updater/data',
 [] );
$m4is_b05vx5ff6t0hcqzj5vkn = $m4is_93t3t3jcbm5kprmxy3rkg['Version'] ?? '0.0.0';
$m4is_kke9k3nvfj766wg = $m4is_8faf1rmnyh6x1dz->version;

$m4is_4nd9rnxz7d5zsz5khdq8avk3124b = version_compare( $m4is_b05vx5ff6t0hcqzj5vkn, $m4is_kke9k3nvfj766wg, '<' );
if ( $m4is_4nd9rnxz7d5zsz5khdq8avk3124b ) {
$m4is_653vr0y862eq9kng1wy50z = [
'id' =>
 $m4is_93t3t3jcbm5kprmxy3rkg['UpdateURI'],
'slug' => plugin_basename( MEMBERIUM_HOME ),
'version' => $m4is_kke9k3nvfj766wg,
'url' =>
 'https://memberium.com/activecampaign/',
'package' => $m4is_8faf1rmnyh6x1dz->download_link,
'tested' => $m4is_8faf1rmnyh6x1dz->tested,

'requires_php' => $m4is_8faf1rmnyh6x1dz->requires_php,
'autoupdate' => true,
];
}
}

return $m4is_653vr0y862eq9kng1wy50z;
}

static function m4is_6h4kk370tjx4405rz0e9() : bool {
return is_writable( MEMBERIUM_HOME ) && ! class_exists( base64_decode( 'bWVtYmVyaXVtX2NvcmVfY2xhc3M=' ) );

}

static function m4is_jyrjb22p6a1z90610pndnxg1rysr4j7b() {
$m4is_y8932443qmxht76g140xsenedgc = 600;
$m4is_r2d01p7w70wh2g5 = 'memberium/updates/available';

$m4is_az4fd9xr66tcxdaze = base64_decode( 'aHR0cHM6Ly9saWNlbnNlc2VydmVyLndlYnBvd2VyYW5kbGlnaHQuY29tL3VwZGF0ZXMvdXBkYXRlLWxpc3QucGhw' );
 
$m4is_d60kn1d3yvprp62rs332 = get_transient( $m4is_r2d01p7w70wh2g5 );
$m4is_wf028tjvm0jckvzy4ne = (int) self::$m4is_132xe588j->m4is_5kywzj74m8ht8s0();

if ( ! is_array( $m4is_d60kn1d3yvprp62rs332 ) ) {
$m4is_d60kn1d3yvprp62rs332 = wp_remote_get( $m4is_az4fd9xr66tcxdaze ); 
$m4is_d60kn1d3yvprp62rs332 = is_array( $m4is_d60kn1d3yvprp62rs332 ) ? $m4is_d60kn1d3yvprp62rs332 : [];

if ( ! empty( $m4is_d60kn1d3yvprp62rs332['body'] ) ) {
$m4is_d60kn1d3yvprp62rs332 = json_decode( $m4is_d60kn1d3yvprp62rs332['body'],
 true );
}
$m4is_d60kn1d3yvprp62rs332 = is_array( $m4is_d60kn1d3yvprp62rs332 ) ? $m4is_d60kn1d3yvprp62rs332 : [];
}
foreach( $m4is_d60kn1d3yvprp62rs332 as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( isset( $m4is_rqxytszfq5v6syth1csqqxvy5['version'] ) && $m4is_rqxytszfq5v6syth1csqqxvy5['version'] < $m4is_wf028tjvm0jckvzy4ne ) {
unset( $m4is_d60kn1d3yvprp62rs332[$m4is_j8j55t8dz79m7] );

}
}
set_transient( $m4is_r2d01p7w70wh2g5, $m4is_d60kn1d3yvprp62rs332, $m4is_y8932443qmxht76g140xsenedgc );
return $m4is_d60kn1d3yvprp62rs332;

}
}


