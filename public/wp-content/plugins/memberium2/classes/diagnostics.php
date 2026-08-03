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

final class m4is_qz5b1djw3zw {
private static $m4is_132xe588j;
public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}



public static function m4is_78bb0wxdb60tbngk682581() : void {
self::m4is_bk62dtefcm8v82q3pj3bp4xwhj1b1jc();
self::m4is_5kq516874gwx8ewh98j7mfzehg2dma();

self::m4is_btcw9v2c();
self::m4is_3vxpv014hw();
self::m4is_ywrhv752wwnhy();
self::m4is_rf630kz1dq33bvytxr81nx598mwb();
self::m4is_eh9tn9k2bhaqtgd();

self::m4is_aj4tqkev();
self::m4is_n93m9ec9df91ym7h0ca3gp();
self::m4is_9ytck0sheaz530mgdtzp4h1fpc8th4m();
self::m4is_gjfwa1qxm48();

self::m4is_beg2pyex8pnjghba13();
self::m4is_7tdrty6g();
self::m4is_sn0k3wz5v1nmvwfqxp();
self::m4is_23a7ksr7c();
self::m4is_wyh8hgkt();

self::m4is_xecw3kh385p2b6med3fa5();
self::m4is_0wg1vqkh9pg();
self::m4is_fzs4ztcy4rpbrw6ptprgdh();
}

public static function m4is_xgfnsw470() : void {
global $wpdb;

$m4is_j466gbkgmqehxybjbtg3knm0b5 = get_option( m4is_zrrt34b1nqxbv::m4is_net7rnnwxcb3hw5() );
$m4is_770tav7rspppydhq6whawje = m4is_zrrt34b1nqxbv::m4is_w8b86pqsw82qgftae( $m4is_j466gbkgmqehxybjbtg3knm0b5 );

$m4is_t7fmxhrcpakr5d5fj = (boolean) $m4is_770tav7rspppydhq6whawje['active'];
$m4is_0864dacae86e26c2nevtsd8y1 = (boolean) $m4is_770tav7rspppydhq6whawje['valid'];

$m4is_zv79ckfa8d5hg10bd = (boolean) $m4is_770tav7rspppydhq6whawje['trial_mode'];
$m4is_3cmw42ec94x6yp0hnwa = '<strong style="color:green;">Yes</strong>';

$m4is_2d07yb9m84 = '<strong style="color:red;">No</strong>';
echo '<h3>License Status</h3>';
echo '<p class="indented">';
echo '<label>Valid</label>';

echo '<span>', ( $m4is_0864dacae86e26c2nevtsd8y1 ? $m4is_3cmw42ec94x6yp0hnwa : $m4is_2d07yb9m84 ), '</span><br />';
echo '<label>Active</label>';

echo '<span>', ( $m4is_t7fmxhrcpakr5d5fj ? $m4is_3cmw42ec94x6yp0hnwa : $m4is_2d07yb9m84 ), '</span><br />';
if ( $m4is_zv79ckfa8d5hg10bd ) {
echo '<label>Test Mode</label>';

echo '<span><strong style="color:red;">TEST LICENSE MODE</strong></span><br />';
}
echo '<label>Next Check</label>';
echo '<span>',
 date('F jS, Y @ h:i:s', $m4is_770tav7rspppydhq6whawje['next_check']), '</span><br />';
echo '<label>Renewal Date</label>';
echo '<span>',
 date('F jS, Y @ h:i:s', $m4is_770tav7rspppydhq6whawje['renewal_date']), '</span><br />';
echo '</p>';
echo '<hr />';
echo '<h3>License Detail</h3>';

echo '<textarea cols="100" rows="20">';
foreach ($m4is_770tav7rspppydhq6whawje as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp ) {
echo ucwords( str_replace( '_',
 ' ', $m4is_bqhtspcavhb01spmfd3x ) ), ':  ', $m4is_29gzevpx8rbkp, "\n";
}
echo '</textarea>';
echo '<p></p>';
}

public static function m4is_62tma4vc1h25pt29abjaayypqbdf() : void {
$m4is_y7084n6v67jme9va8yz = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' );

$m4is_1sgmbm0df6s0 = json_encode( $m4is_y7084n6v67jme9va8yz, JSON_PRETTY_PRINT );
echo <<<HTMLBLOCK

			<h3>Memberships</h3>
			<textarea cols="100" rows="20">{$m4is_1sgmbm0df6s0}</textarea>
		HTMLBLOCK;

}

public static function m4is_2syg2njv8nf() {
$m4is_12vrxdmdm9trvd1a = m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv();
echo '<label>License Status</label>';

echo '<span>', (int) $m4is_12vrxdmdm9trvd1a, '</span><br />';
self::m4is_tznwcv8wtndwtq04jf7h4a9tcsy();
}




private static function m4is_3vxpv014hw() {
echo '<h3>Object Caching</h3>';

echo '<div class="indented">';
if ( wp_using_ext_object_cache() ) {
$m4is_gwbpavyhctaz9rnm9dk440rm = $GLOBALS['wp_object_cache'];
$m4is_80xkfqnvmb2nhaeb8200fbmxb3 = [];

$m4is_nmydanfg4qthqhybedk3csxv7f9mrs = get_object_vars( $m4is_gwbpavyhctaz9rnm9dk440rm );
$m4is_80xkfqnvmb2nhaeb8200fbmxb3['misses'] = empty( $m4is_nmydanfg4qthqhybedk3csxv7f9mrs['cache_misses'] ) ? 0 : $m4is_nmydanfg4qthqhybedk3csxv7f9mrs['cache_misses'];

$m4is_80xkfqnvmb2nhaeb8200fbmxb3['hits'] = empty( $m4is_nmydanfg4qthqhybedk3csxv7f9mrs['cache_hits'] ) ? 0 : $m4is_nmydanfg4qthqhybedk3csxv7f9mrs['cache_hits'];

$m4is_80xkfqnvmb2nhaeb8200fbmxb3['client'] = empty( $m4is_nmydanfg4qthqhybedk3csxv7f9mrs['redis_client'] ) ? 'Unknown' : $m4is_nmydanfg4qthqhybedk3csxv7f9mrs['redis_client'];

if ( function_exists( 'wp_cache_get_stats' ) ) {
$m4is_nmydanfg4qthqhybedk3csxv7f9mrs = wp_cache_get_stats();
echo '<p>Alternate Object Cache Detected (wp_cache_get_stats)</p>';


}
elseif ( method_exists( $m4is_gwbpavyhctaz9rnm9dk440rm, 'getstats' ) ) {
$m4is_nmydanfg4qthqhybedk3csxv7f9mrs = $GLOBALS['wp_object_cache']->getStats();

echo '<p>Alternate Object Cache Detected (getStats)</p>';

}
echo '<p>';
echo "<strong>Object Cache Client:</strong>  {$m4is_80xkfqnvmb2nhaeb8200fbmxb3['client']}<br />";

echo "<strong>Object Cache Hits:</strong>  {$m4is_80xkfqnvmb2nhaeb8200fbmxb3['hits']}<br />";
echo "<strong>Object Cache Misses:</strong>  {$m4is_80xkfqnvmb2nhaeb8200fbmxb3['misses']}</p>";

echo '</p>';
}
else {
echo '<p style="color:red;font-weight:bold;">Disabled</p>';
}
echo '</div>';
}

private static function m4is_5kq516874gwx8ewh98j7mfzehg2dma() {
$m4is_fh92qqfpba2b796nrpt5 = [
'HTTP_CLIENT_IP',

'HTTP_X_FORWARDED_FOR',
'REMOTE_ADDR',
'CF-CONNECTING-IP',
];
echo '<h3>Remote IP Address</h3>';
echo '<div class="indented">';
foreach($m4is_fh92qqfpba2b796nrpt5 as $m4is_xzq0ab9dgyer6ej7v1f) {
if ( ! empty( $_SERVER[$m4is_xzq0ab9dgyer6ej7v1f] ) ) {
echo $m4is_xzq0ab9dgyer6ej7v1f,
 ' - ', $_SERVER[$m4is_xzq0ab9dgyer6ej7v1f], '<br />';
}
}
echo '</div>';
}

private static function m4is_eh9tn9k2bhaqtgd() {
global $wpdb;

$m4is_hrtpth3knv43044ym8f = get_option('memberium_tables', [] );
$m4is_hs8sf803prjv7zry = [];
if (is_array($m4is_hrtpth3knv43044ym8f)) {
foreach($m4is_hrtpth3knv43044ym8f as $m4is_y7c4vnt3grkk8tatprbvh4cp) {


$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT 1 FROM `{$m4is_y7c4vnt3grkk8tatprbvh4cp}` LIMIT 1;";

$wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
$m4is_yrsthh0s4s62mfk9 = $wpdb->last_error;
if ($m4is_yrsthh0s4s62mfk9) {
$m4is_hs8sf803prjv7zry[] = "Table '{$m4is_y7c4vnt3grkk8tatprbvh4cp}' : <span style='font-weight:bold;color:red;'>{$m4is_yrsthh0s4s62mfk9}</span><br />";

}
}
}
echo '<h3>Missing Database Tables</h3>';
echo '<div class="indented">';
if (! empty($m4is_hs8sf803prjv7zry)) {
foreach($m4is_hs8sf803prjv7zry as $m4is_qada7ggyzac) {
echo $m4is_qada7ggyzac,
 '<br>';
}
}
else {
echo '<p>None</p>';
}
echo '</div>';
}
private static function m4is_sn0k3wz5v1nmvwfqxp() : void {
echo '<h3>wp-admin php.ini</h3>';

if ( ! file_exists( get_home_path() . '/wp-admin/php.ini' ) ) {
echo '<p>Not Found</p>';
return;
}
echo '<textarea readonly=readonly cols="100" rows="10">',
 file_get_contents(get_home_path() . '/wp-admin/php.ini'), '</textarea>';
}
private static function m4is_xecw3kh385p2b6med3fa5() : void {
$m4is_91f37n0sem42wb7br5xwf0eehgcsf4n1 = get_defined_constants( true );

if ( ! is_array( $m4is_91f37n0sem42wb7br5xwf0eehgcsf4n1) || empty( $m4is_91f37n0sem42wb7br5xwf0eehgcsf4n1['user'] ) ) {
return;
}
echo '<h3>Constants</h3>';

echo '<table>';
ksort( $m4is_91f37n0sem42wb7br5xwf0eehgcsf4n1['user'] );
foreach( $m4is_91f37n0sem42wb7br5xwf0eehgcsf4n1['user'] as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp ) {
$m4is_29gzevpx8rbkp = is_string( $m4is_29gzevpx8rbkp ) ? $m4is_29gzevpx8rbkp : serialize( $m4is_29gzevpx8rbkp );

echo '<tr><td>', $m4is_bqhtspcavhb01spmfd3x, '</td><td>', $m4is_29gzevpx8rbkp, '</td></tr>';
}
echo '</table>';
}
private static function m4is_dm54wm79eyb4xzw6j4() : string {
$m4is_b2jend0v66nx68632mjepaeages9 = '<strong style="color:red;">Unknown</strong>';

$m4is_ns1rtf0ng3nw60zhqrc7z = '/proc/cpuinfo';
if ( ! @is_readable( $m4is_ns1rtf0ng3nw60zhqrc7z ) ) {
return $m4is_b2jend0v66nx68632mjepaeages9;

}
$m4is_jkeh1yp3t5t43ytgb = @file( $m4is_ns1rtf0ng3nw60zhqrc7z );
if ( ! is_array( $m4is_jkeh1yp3t5t43ytgb ) ) {
return $m4is_b2jend0v66nx68632mjepaeages9;

}
foreach( $m4is_jkeh1yp3t5t43ytgb as $m4is_1e44v06vtqjzg21vcnyxt6zeykry ) {
if ( substr( $m4is_1e44v06vtqjzg21vcnyxt6zeykry, 0, 9 ) == 'cpu cores' ) {
$m4is_b2jend0v66nx68632mjepaeages9 = intval( $m4is_b2jend0v66nx68632mjepaeages9 ) + (int) substr( $m4is_1e44v06vtqjzg21vcnyxt6zeykry,
 strpos( $m4is_1e44v06vtqjzg21vcnyxt6zeykry, ':' ) + 1 );
}
}
return $m4is_b2jend0v66nx68632mjepaeages9;
}
private static function m4is_wyh8hgkt() : void {
echo '<h3>Cron Jobs</h3>';

echo '<div class="indented">';
$m4is_zw2jjygjb96tcgjjhch2phhbf9b1ek = [];
$m4is_d6qts4k3czfkn = get_option('cron', [] );
if (count($m4is_d6qts4k3czfkn) ) {
foreach ($m4is_d6qts4k3czfkn as $m4is_mp1aps2s02qeabyqb5gpf1ssya2e1 =>
 $m4is_emz0mwk3g) {
if (is_array($m4is_emz0mwk3g) ) {
foreach ($m4is_emz0mwk3g as $jobname => $details) {
if (stripos($jobname, 'memberium') === 0) {
$m4is_zw2jjygjb96tcgjjhch2phhbf9b1ek[$jobname] = $m4is_mp1aps2s02qeabyqb5gpf1ssya2e1;

}
}
}
}
}
echo '<strong style="margin-left:20px;display:inline-block;width:250px;">Cron Job Name</strong><strong>Next Run Time</strong><br>';

if (! empty($m4is_zw2jjygjb96tcgjjhch2phhbf9b1ek) ) {
foreach ($m4is_zw2jjygjb96tcgjjhch2phhbf9b1ek as $m4is_hce1y1a4qd65zhnwsj =>
 $m4is_qm78qahrsjrp9v9vf2phj31x) {
echo '<span style="margin-left:20px;display:inline-block;width:250px;">', $m4is_hce1y1a4qd65zhnwsj,
 '</span>', date("Y-m-d h:i:s", $m4is_qm78qahrsjrp9v9vf2phj31x), '<br>';
}
}
echo '</div>';
}
private static function m4is_aj4tqkev() : void {
echo '<h3>CURL Library Support</h3>';

echo '<div class="indented">';
if (function_exists('curl_version') ) {
$m4is_4z9hc6ggtyhzrcgyfv = curl_version();
echo '<strong>Version</strong>: ',
 $m4is_4z9hc6ggtyhzrcgyfv['version'], '<br />';
echo '<strong>Version Number</strong>: ', $m4is_4z9hc6ggtyhzrcgyfv['version_number'],
 '<br />';
echo '<strong>SSL Version</strong>: ', $m4is_4z9hc6ggtyhzrcgyfv['ssl_version'], '<br />';
echo '<strong>LibZ Version</strong>: ',
 $m4is_4z9hc6ggtyhzrcgyfv['libz_version'], '<br />';
echo '<strong>Age</strong>: ', $m4is_4z9hc6ggtyhzrcgyfv['age'], '<br />';
}
else {
echo '<p style="color:red;font-weight:bold;">CURL Library Support Missing</p>';

}
echo '</div>';
}
private static function m4is_rf630kz1dq33bvytxr81nx598mwb() : void {
global $wpdb;
echo '<h3>MySQL Configuration</h3>';

echo '<div class="indented">';
echo '<h3>Database Storage Engines:</h3>';
$m4is_5rbenkpt1v7xby2cknbs7 = 'SHOW STORAGE ENGINES;';
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7,
 ARRAY_A);
echo '<table>';
echo '<tr>';
echo '<td>Engine Name</td>';
echo '<td>Support</td>';
echo '<td>Comments / Description</td>';

echo '</tr>';
foreach($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m as $m4is_hartbe843crydzh) {
echo '<tr>';
echo '<td>',$m4is_hartbe843crydzh['Engine'],
'</td>';
echo '<td>',$m4is_hartbe843crydzh['Support'],'</td>';
echo '<td>',$m4is_hartbe843crydzh['Comment'],'</td>';
echo '</tr>';
}
echo '</table>';

echo '<h3>Cache Configuration</h3>';
$m4is_5rbenkpt1v7xby2cknbs7 = "show variables like 'have_query_cache';";
$m4is_hartbe843crydzh = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7);

echo '<strong>', $m4is_hartbe843crydzh[0]->Variable_name, '</strong> = ', $m4is_hartbe843crydzh[0]->Value, '<br>';
$m4is_5rbenkpt1v7xby2cknbs7 = "show variables like '%query%';";

$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7);
foreach($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m as $m4is_hartbe843crydzh) {
echo '<strong>',
 $m4is_hartbe843crydzh->Variable_name, '</strong> = ', $m4is_hartbe843crydzh->Value, '<br>';
}
echo '</div>';
}
private static function m4is_0wg1vqkh9pg() {
$m4is_9zpv2r5d79 = defined( 'MEMBERIUM_DEBUGLOG' ) ? constant( 'MEMBERIUM_DEBUGLOG' ) : '';

echo '<h3>Debug Log:</h3>';
if ( file_exists( $m4is_9zpv2r5d79 ) ) {
$m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq = (0 - min(filesize( $m4is_9zpv2r5d79),
 MB_IN_BYTES) );
$m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq = $m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq < 0 ? 0 : $m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq;

echo '<form method="post" action=""><input type="submit" name="delete-debug" value="Delete Debug Log"></form>';
echo '<textarea readonly=readonly cols="100" rows="20">',
 file_get_contents( $m4is_9zpv2r5d79, false, null, $m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq), '</textarea>';
}
else {
echo '<p style="color:red;font-weight:bold;">No debug log found.</p>';

}
}
private static function m4is_fzs4ztcy4rpbrw6ptprgdh() {
$m4is_66vfp3wv6 = ini_get( 'error_log' );
if (! empty($m4is_66vfp3wv6) && file_exists($m4is_66vfp3wv6) ) {
$m4is_74n0m2zcpq = (int) filesize($m4is_66vfp3wv6);

$m4is_mt7yszd4sv9x993x7z5wznrbc = 10 * KB_IN_BYTES;

$m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq = 0 - $m4is_mt7yszd4sv9x993x7z5wznrbc;
$m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq = $m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq < 0 ? 0 : $m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq;

echo '<h3>PHP Error Log:</h3>';
if ( $m4is_66vfp3wv6 ) {
echo '<textarea readonly=readonly cols="100" rows="20">', file_get_contents( $m4is_66vfp3wv6,
 false, null, $m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq, $m4is_mt7yszd4sv9x993x7z5wznrbc + 1024 ), '</textarea>';
}
else {
echo '<p style="color:red;font-weight:bold;">No error log found.</p>';

}
}
}
private static function m4is_gjfwa1qxm48() {
echo '<h3>.htaccess</h3>';
if (file_exists(get_home_path() . '.htaccess') ) {
echo '<textarea readonly=readonly cols="100" rows="10">',
 file_get_contents(get_home_path() . '.htaccess'), '</textarea>';
}
}
private static function m4is_7tdrty6g() {
echo '<h3>Main php.ini</h3>';

if (file_exists(get_home_path() . 'php.ini') ) {
echo '<textarea readonly=readonly cols="100" rows="10">', file_get_contents(get_home_path() . 'php.ini'),
 '</textarea>';
}
else {
echo '<p>Not Found</p>';
}
}
private static function m4is_n93m9ec9df91ym7h0ca3gp() {
$m4is_sk7smqy67qmqtnnd = [
'licenseserver.webpowerandlight.com',

];
$m4is_qe1c42nqyq6 = false;
echo '<h3>Network</h3>';
echo '<div class="indented">';
echo '<h3>License Servers</h3>';
echo '<div class="indented">';

foreach ($m4is_sk7smqy67qmqtnnd as $m4is_ef2x3c9292j) {
$m4is_sq8wkcxv7czejqkkzzn6zspry2 = gethostbyname($m4is_ef2x3c9292j);
if ($m4is_ef2x3c9292j == $m4is_sq8wkcxv7czejqkkzzn6zspry2) {
$m4is_sq8wkcxv7czejqkkzzn6zspry2 ='<span style="color:red;">Failed To Resolve</span>';

$m4is_qe1c42nqyq6 = true;
}
else {
$m4is_sq8wkcxv7czejqkkzzn6zspry2 ='<span style="color:green;">' . $m4is_sq8wkcxv7czejqkkzzn6zspry2 . '</span>';

}
echo '<p>', $m4is_ef2x3c9292j, ' resolves to <strong>', $m4is_sq8wkcxv7czejqkkzzn6zspry2, '</strong></p>';
}
if ($m4is_qe1c42nqyq6) {
echo '<p style="color:red;">One or more hostnames failed to resolve due to DNS issues.</p>';

}
$m4is_qe1c42nqyq6 = false;
$m4is_c3b9b3we7yh8pe = [
'https://licenseserver.webpowerandlight.com/getlicense.php',
'https://licenseserver.webpowerandlight.com/memberium-is/current-version.php',

];
foreach ($m4is_c3b9b3we7yh8pe as $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq) {
$m4is_hartbe843crydzh = wp_remote_get( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq );

if (is_array($m4is_hartbe843crydzh) ) {
}
else {
echo '<p>', $m4is_hartbe843crydzh->errors['http_request_failed'][0], '</pre>';
$m4is_qe1c42nqyq6 = true;

}
}
if (! $m4is_qe1c42nqyq6) {
echo '<p><strong style="color:green;">Connection Successful</strong></p>';
}
echo '</div>';
}
static function m4is_beg2pyex8pnjghba13() {
$m4is_031dga69tt = ini_get_all();

if ( ! empty( $m4is_031dga69tt ) ) {
ksort( $m4is_031dga69tt );
echo '<h3>PHP .ini Settings</h3>';
echo '<table>';
foreach( $m4is_031dga69tt as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp ) {
$m4is_c9nryf13e43y9jensddce = isset( $m4is_29gzevpx8rbkp['local_value'] ) ? $m4is_29gzevpx8rbkp['local_value'] : $m4is_29gzevpx8rbkp['global_value'];

$m4is_c9nryf13e43y9jensddce = isset( $m4is_c9nryf13e43y9jensddce ) ? $m4is_c9nryf13e43y9jensddce : '';
if ( strpos( $m4is_c9nryf13e43y9jensddce,
 ',') !== false ) {
$m4is_c9nryf13e43y9jensddce = implode( ', ', array_filter( explode( ',', $m4is_c9nryf13e43y9jensddce ) ) );
}
if (! empty($m4is_29gzevpx8rbkp['local_value']) || ! empty($m4is_29gzevpx8rbkp['global_value']) ) {
echo '<tr><td>',
 $m4is_bqhtspcavhb01spmfd3x, '</td><td>', $m4is_c9nryf13e43y9jensddce, '</td></tr>';
}
}
echo '</table>';
}
}
private static function m4is_tznwcv8wtndwtq04jf7h4a9tcsy() {
$m4is_gde9yyy7tncfw582gxgeh2q3 = get_option('memberium/activation_log',
 '' );
echo '<h3>Activation Log</h3>';
echo '<textarea readonly=readonly cols="100" rows="10">', $m4is_gde9yyy7tncfw582gxgeh2q3, '</textarea>';

}
static function m4is_btcw9v2c() {
echo '<h3>PHP Modules Loaded</h3>';
echo '<div class="indented">';
echo '<div style="width:600px;">',
 implode(', ', get_loaded_extensions() ), '</div>';
echo '</div>';
}
static function m4is_62b0gg9fnp089nw0yk67ah() {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings');

echo '<h3>Settings</h3>';
echo '<textarea cols="100" rows="20">', json_encode($m4is_8ew58cpxmftgpw93gdffm4s9bbwy, JSON_PRETTY_PRINT),
 '</textarea>';
}
static function m4is_ywrhv752wwnhy() {
if (function_exists('sys_getloadavg') ) {
$m4is_tm5kmb1ayvzhr5 = sys_getloadavg();

if (is_array($m4is_tm5kmb1ayvzhr5) && ! empty($m4is_tm5kmb1ayvzhr5) ) {
echo '<h3>System Load</h3>';
echo '<div class="indented">';

echo '<strong>Last Minute</strong>:  ', $m4is_tm5kmb1ayvzhr5[0], '<br>';
echo '<strong>Last 5 Minutes</strong>:  ', $m4is_tm5kmb1ayvzhr5[1],
 '<br>';
echo '<strong>Last 15 Minutes</strong>:  ', $m4is_tm5kmb1ayvzhr5[2], '<br>';
}
else {
echo '<p style="font-weight:bold;color:red;">Operating System Load Average Report Empty.</p>';

}
}
else {
echo '<p style="font-weight:bold;color:red;">Operating System missing Load Average Reports.</p>';
}
echo '</div>';
echo '<p></p>';

}
static function m4is_bk62dtefcm8v82q3pj3bp4xwhj1b1jc() {
global $wpdb;
$m4is_396xgb5k39g0hzea7rarxxjcj04cd7p = self::$m4is_132xe588j->m4is_hscsx4pb3zt() . 'build_id.dat';

$m4is_4g181rhpz3jy2196177g6jcgsrkwqt = file_exists( $m4is_396xgb5k39g0hzea7rarxxjcj04cd7p ) ? file_get_contents( $m4is_396xgb5k39g0hzea7rarxxjcj04cd7p ) : 'Unknown';

$m4is_b2jend0v66nx68632mjepaeages9 = self::m4is_dm54wm79eyb4xzw6j4();
$m4is_mys7vr78vcp94wq718jayt7sz = php_uname('m');
$m4is_fc498yxkgxzh56mr = $wpdb->db_version();

$m4is_b44pax71efx41n2y1bdvckktq35bvfs4 = php_uname('n');
$m4is_40nss7bgpwnaw2qmpcre7a = php_uname('s');
$m4is_y57361b9rqw54g2n1yzrykc = php_uname('v');

$m4is_qm158q37sdb3bsk0bh1 = phpversion();
$m4is_8v8pdh2zsxmsst33fheay91qkfxbk = php_sapi_name();
$m4is_4wxc01rda = isset( $_SERVER['SERVER_SOFTWARE'] ) ? $_SERVER['SERVER_SOFTWARE'] : '<strong style="color:red;">Unknown</strong>';

$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = function_exists( 'get_current_user' ) ? get_current_user() : 'Unknown';
require ABSPATH . WPINC . '/version.php';

$m4is_ey5tyk73xnymm59zp3s7sr5as = $wp_version;
echo '<h3>Build Info</h3>';
echo '<div class="indented">';

echo "<strong>" . nl2br( $m4is_4g181rhpz3jy2196177g6jcgsrkwqt ) . "</strong><br>";

echo '</div>';
echo '<h3>System Info</h3>';
echo '<div class="indented">';
echo "<strong>Hostname</strong>:  {$m4is_b44pax71efx41n2y1bdvckktq35bvfs4}<br>";

echo "<strong>CPU Type</strong>:  {$m4is_mys7vr78vcp94wq718jayt7sz}<br>";
echo "<strong>CPU Cores</strong>:  {$m4is_b2jend0v66nx68632mjepaeages9}<br>";

echo "<strong>Operating System</strong>:  {$m4is_40nss7bgpwnaw2qmpcre7a}<br>";
echo "<strong>Web Server Type</strong>:  {$m4is_4wxc01rda}<br>";

echo "<strong>Username</strong>:  {$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65}<br>";
echo "<strong>SAPI</strong>:  {$m4is_8v8pdh2zsxmsst33fheay91qkfxbk}<br>";

echo "<strong>PHP Version</strong>:  {$m4is_qm158q37sdb3bsk0bh1}<br>";
echo "<strong>WordPress Version</strong>:  {$m4is_ey5tyk73xnymm59zp3s7sr5as}<br>";

echo "<strong>Database Version</strong>:  {$m4is_fc498yxkgxzh56mr}<br>";
echo '<p></p>';
echo '<strong>Home Path</strong>:  ', get_home_path(),
 '<br>';
echo '<strong>Install Point</strong>: ', dirname(MEMBERIUM_HOME), '<br>';
echo '<p></p>';
echo '<strong>Remote Address</strong>:  ',
 $_SERVER['REMOTE_ADDR'], '<br>';
if (isset($_SERVER['HTTP_X_REAL_IP']) ) {
echo '<strong>Real IP</strong>:  ', $_SERVER['HTTP_X_REAL_IP'],
 '<br>';
}
if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
echo '<strong>Forwarded For</strong>:  ', $_SERVER['HTTP_X_FORWARDED_FOR'],
 '<br>';
}
if (isset($_SERVER['HTTP_CF_CONNECTING_IP']) ) {
echo '<strong>Cloudflre Connecting IP</strong>:  ', $_SERVER['HTTP_CF_CONNECTING_IP'],
 '<br>';
}
if (isset($_SERVER['HTTP_X_SUCURI_CLIENTIP']) ) {
echo '<strong>Sucuri Client IP</strong>:  ', $_SERVER['HTTP_X_SUCURI_CLIENTIP'],
 '<br>';
}
echo '<p></p>';
echo '</div>';
}
static function m4is_9ytck0sheaz530mgdtzp4h1fpc8th4m() {
echo '</div>';

return;
echo '<h3>TLS Support</h3>';

echo '<div class="indented">';
echo '<h3>CURL SSL TLS 1.2 Test</h3>';
$m4is_h2r9w4w8gvyk8qat0j5zjzjg4a = curl_init('https://tlstest.paypal.com/');

curl_setopt($m4is_h2r9w4w8gvyk8qat0j5zjzjg4a, CURLOPT_RETURNTRANSFER, true);
curl_setopt($m4is_h2r9w4w8gvyk8qat0j5zjzjg4a, CURLOPT_CONNECTTIMEOUT,
 2);
$m4is_h2r9w4w8gvyk8qat0j5zjzjg4a = self::$m4is_132xe588j->m4is_z0jvy584gjavgkpkp2nhzkftg67($m4is_h2r9w4w8gvyk8qat0j5zjzjg4a);
$m4is_hartbe843crydzh = curl_exec($m4is_h2r9w4w8gvyk8qat0j5zjzjg4a);
 
echo '<strong>PayPal Test</strong><br />';
echo $m4is_hartbe843crydzh, '<br /><br />';
$m4is_h2r9w4w8gvyk8qat0j5zjzjg4a = curl_init('https://www.howsmyssl.com/a/check');

curl_setopt($m4is_h2r9w4w8gvyk8qat0j5zjzjg4a, CURLOPT_RETURNTRANSFER, true);
curl_setopt($m4is_h2r9w4w8gvyk8qat0j5zjzjg4a, CURLOPT_CONNECTTIMEOUT,
 2);
$m4is_h2r9w4w8gvyk8qat0j5zjzjg4a = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_z0jvy584gjavgkpkp2nhzkftg67($m4is_h2r9w4w8gvyk8qat0j5zjzjg4a);

$m4is_hartbe843crydzh = curl_exec($m4is_h2r9w4w8gvyk8qat0j5zjzjg4a); 
$m4is_hartbe843crydzh = json_decode($m4is_hartbe843crydzh);
if (is_object($m4is_hartbe843crydzh) ) {
echo '<strong>SSL Protocol Test</strong><br />';

echo '<strong>TLS Version</strong>: ', $m4is_hartbe843crydzh->tls_version, '<br />';
echo '<strong>TLS Compression</strong>: ', $m4is_hartbe843crydzh->tls_compression_supported ? 'Yes' : 'No',
 '<br />';
if (is_array($m4is_hartbe843crydzh->given_cipher_suites) ) {
echo '<strong>Cipher Suites</strong>: ', implode(', ', $m4is_hartbe843crydzh->given_cipher_suites),
 '<br>';
}
}
else {
echo '<p style="color:red;font-weight:bold;">SSL Protocol Test Failed</p>';
}
echo '</div>';
echo '</div>';
}
static function m4is_23a7ksr7c() {
echo '<h3>wp-config.php:</h3>';

if (file_exists(get_home_path() . 'wp-config.php') ) {
echo '<textarea readonly=readonly cols="100" rows="10">', file_get_contents(get_home_path() . 'wp-config.php'),
 '</textarea>';
}
}

}
