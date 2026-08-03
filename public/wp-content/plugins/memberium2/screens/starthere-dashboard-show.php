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
m4is_k3q1d5ts::m4is_de8n8qy4mmtnkq33p();

class m4is_k3q1d5ts {
private $m4is_132xe588j;
private $m4is_v4beyw7zqhr3;
private $m4is_py7kzkfvd8rh3y0s4ts;
private $m4is_8nwbcp7f;

private $m4is_jrqdhydea8tfkwz4n4g07t6ee;
public static function m4is_de8n8qy4mmtnkq33p() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_132xe588j->m4is_h9t0p5fc1('view_dashboard' );

$this->m4is_5eragr7sh2yyj356m();
$this->m4is_y66db8hr8mnbbfbyg81dpgrqwjehe();
$this->m4is_x6c7nk7x5();
$this->m4is_1kv4yhx46pcfpejvgsv39dtg();

$this->m4is_r8zwrbebb793naa9sp();
$this->m4is_4snk047w1pxmja3ecja1y309();
$this->m4is_aystqpv76nx1n();
$this->m4is_g6642qdypt3d5tbp7rg86xv0vwpxx8b();

$this->m4is_gz18tsmdqg0f8g0yx1zs1ns11bk();
}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
$this->m4is_py7kzkfvd8rh3y0s4ts = false;
$this->m4is_8nwbcp7f = false;

$this->m4is_jrqdhydea8tfkwz4n4g07t6ee = [];
}
private function m4is_5eragr7sh2yyj356m() {
add_filter( 'human_time_diff', [$this, 'm4is_6rdspsskbb8r'],
 10, 4 ); 
}
function m4is_6rdspsskbb8r( $m4is_0rvpdz595g2z9ecx, $m4is_6zmaqhn88e8b, $m4is_3qcccz0vcdbrnb53h66ywzya, $m4is_txq9r25dfxqkjt1 ) {
return ( $m4is_3qcccz0vcdbrnb53h66ywzya < 1325376000 || $m4is_6zmaqhn88e8b > (20 * YEAR_IN_SECONDS ) ) ? 'Never' : $m4is_0rvpdz595g2z9ecx;

}

private function m4is_y66db8hr8mnbbfbyg81dpgrqwjehe() {
$m4is_hs8sf803prjv7zry = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_t0q5jwvrez();

if ( count( $m4is_hs8sf803prjv7zry ) ) {
m4is_xzw82zta23vanf8pzajwyvkv4::m4is_w8vwxae663qt3hmcbv49q95xmfsyw( false );
}
}

function m4is_ce25q6vkyewg80zh9rs8856r57zh3y() {

if ( m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
$m4is_12vrxdmdm9trvd1a = '<strong class="membGood">Active</strong>';

$m4is_770tav7rspppydhq6whawje = m4is_zrrt34b1nqxbv::m4is_w8b86pqsw82qgftae( get_option( $this->m4is_132xe588j->m4is_6avty6j42cedxh718s2q(),
 '' ) );
if ( $m4is_770tav7rspppydhq6whawje['trial_mode'] ) {
$m4is_12vrxdmdm9trvd1a = '<strong class="membGood">Test Mode</strong> <strong class="membWarning">(Limited to ' . $m4is_770tav7rspppydhq6whawje['max_users'] . ' Users )</strong>';

}
}
else {
$m4is_12vrxdmdm9trvd1a = '<strong class="membWarning">Inactive</strong> ';
}
return $m4is_12vrxdmdm9trvd1a;
}

function m4is_rsb2n0bpxg2x349cpf916vse() {
$m4is_ag6hmt2m325qkb5qd0tyja = 'memberium_tables_updated';

$m4is_hhhr20maer2a = get_option( $m4is_ag6hmt2m325qkb5qd0tyja, [] );
$m4is_hhhr20maer2a = is_array( $m4is_hhhr20maer2a ) ? $m4is_hhhr20maer2a : [];

$m4is_hrtpth3knv43044ym8f = [
'actionsets',
'affiliates',
'i2sdk_customfields',
'invoices',
'products',
'social',
'tagcategories',

'tags',
];
foreach ( $m4is_hrtpth3knv43044ym8f as $m4is_k7p8pmxsbkqrje3y20 ) {
$m4is_hhhr20maer2a[$m4is_k7p8pmxsbkqrje3y20] = isset( $m4is_hhhr20maer2a[$m4is_k7p8pmxsbkqrje3y20] ) ? $m4is_hhhr20maer2a[$m4is_k7p8pmxsbkqrje3y20] : 0;

}
update_option( $m4is_ag6hmt2m325qkb5qd0tyja, $m4is_hhhr20maer2a );
return $m4is_hhhr20maer2a;
}
function m4is_wabaa9m65aebgpjeprjn98q0tbyr0c() {
global $wpdb;

$m4is_csnk3yn47 = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(`id`) from `{$m4is_csnk3yn47}` WHERE `fieldname` = 'Id' AND `appname` = '{$this->m4is_v4beyw7zqhr3}' ";

return (int) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7 );
}
function m4is_rq0w7g6a7q8() {
global $wpdb;
$m4is_csnk3yn47 = m4is_bbwjksaqsay3yt68xq9afn::m4is_13pkw2zwx02();

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(`id`) from `{$m4is_csnk3yn47}` WHERE `appname` = '{$this->m4is_v4beyw7zqhr3}' ";
return (int) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7 );

}
function m4is_hmpskjf328r4y() {
global $wpdb;
$m4is_csnk3yn47 = m4is_a6kbph84cyre1t461::DB_API_LOG;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) from {$m4is_csnk3yn47} WHERE `appname` = '{$this->m4is_v4beyw7zqhr3}' ";

return (int) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7 );
}
function m4is_k97thhct2mexa0sadkhwnvdm7m3() {
global $wpdb;
$m4is_csnk3yn47 = m4is_amz58dmg8j7e898bj8r8b1::m4is_rr7ynbdyf6mev98x20sv1n1d0kkxt();

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) from `{$m4is_csnk3yn47}` WHERE `fieldname` = 'Id' AND `appname` = '{$this->m4is_v4beyw7zqhr3}'";

return (int) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7 );
}
function m4is_p26nrkbn840qg8eghn4517wt3k() {
global $wpdb;
$m4is_csnk3yn47 = m4is_bbwjksaqsay3yt68xq9afn::m4is_syjrxw7rw3s();

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) from `{$m4is_csnk3yn47}` WHERE `appname` = '{$this->m4is_v4beyw7zqhr3}'";
return (int) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7 );

}
function m4is_v97cmyzy8k9mgc4() {
return 0;
}
function m4is_g6642qdypt3d5tbp7rg86xv0vwpxx8b() {
$m4is_13qf0ayc1v2nrvbee9x1n1axjgb = defined( 'MEMBERIUM_BETA' ) && constant( 'MEMBERIUM_BETA' );

$m4is_csx0y36xw = defined( 'MEMBERIUM_DEBUG' ) && constant( 'MEMBERIUM_DEBUG' );
$m4is_6be8e4gwjz5tfv52w0vftzabj36jk1 = defined( 'WP_DEBUG' ) && constant( 'WP_DEBUG' );

if ( $m4is_13qf0ayc1v2nrvbee9x1n1axjgb ) {
echo '<label>Beta Mode</label><span class="metric"><strong class="membWarning">Beta</strong></span><br />';

}
if ( $m4is_csx0y36xw ) {
echo '<label>Debug Mode</label><span class="metric"><strong class="membWarning">ON</strong></span><br />';

}
if ( $m4is_6be8e4gwjz5tfv52w0vftzabj36jk1 ) {
echo '<label>WordPress Debug Mode</label><span class="metric"><strong class="membWarning">ON</strong></span><br />';

}
}
function m4is_y2vtmqyvaa1ad() {
global $wpdb;
$m4is_csnk3yn47 = $wpdb->postmeta;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(DISTINCT `post_id` ) FROM `{$m4is_csnk3yn47}` WHERE meta_key IN ('_is4wp_membership_levels', '_is4wp_access_tags', '_is4wp_access_tags2', '_is4wp_any_membership', '_is4wp_hide_completely', '_is4wp_force_public') AND meta_value > '' ";

return (int)$wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7 );
}
function m4is_gz18tsmdqg0f8g0yx1zs1ns11bk() {
require ABSPATH . WPINC . '/version.php';

$m4is_xq8a8kwspkheej40jh0sthk9zn2s = defined( 'MEMBERIUM_SKU' ) ? constant( 'MEMBERIUM_SKU' ) : 'Unknown';
$m4is_r5a9z89abrfxr6b = defined( 'I2SDK_VERSION' ) ? constant( 'I2SDK_VERSION' ) : '';

$m4is_jthd6chmsvrwrzstem3fjdfx0 = 0;
$m4is_ykrsgbp0qbhrbn34ar = ini_get( 'memory_limit' );
$m4is_3mhpwkcpw5vppx0 = intval( WP_MAX_MEMORY_LIMIT );

$m4is_zx3zpy14q9s3p5t9gry8wanpbth1s = (int) $this->m4is_132xe588j->m4is_jt5p2fz12957jwff9sr4zdt4bh();
$m4is_r5a9z89abrfxr6b = empty( $m4is_r5a9z89abrfxr6b ) ? '<strong class="membWarning">None</strong>' : $m4is_r5a9z89abrfxr6b;

$m4is_40nss7bgpwnaw2qmpcre7a = php_uname('s') . ' ' . php_uname('m');
$m4is_qm158q37sdb3bsk0bh1 = phpversion();
$m4is_dpgtsxzyf1h1r2bgwg = ini_get('display_errors') ? '<strong class="membWarning">Yes' : '<strong class="membGood">No';

$m4is_xq8a8kwspkheej40jh0sthk9zn2s = strtoupper( $m4is_xq8a8kwspkheej40jh0sthk9zn2s );
$m4is_gc4rs6tx0zme59gza = count( get_plugin_updates() );

$m4is_gp0anm6kqq0yfymrn2ezrsx1jv = count( get_theme_updates() );
$m4is_ycxkat5eez4a7jswr0b77s = count( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' ) );

$m4is_d6qts4k3czfkn = count( get_option( 'cron', [] ) );
$m4is_4v8betb9y9zm6106zn = json_decode( get_transient( 'health-check-site-status-result' ),
 true);
$m4is_rwyhwwssa7dj6 = wp_using_ext_object_cache() ? '<strong style="color:green;">Enabled</strong>' : '<strong style="color:red;">Unavailable</strong>';

$m4is_nmjp3qqyctjwx86zr5re = get_core_updates();
$m4is_zerr1h0771r4n0rkm799e5knf0rm3cb = get_bloginfo( 'version' );
$m4is_r2913rsy8ebna837ce5 = esc_url( admin_url('site-health.php') );

$m4is_1yyyw6qjh9wmkrbrbf3bbfsb6rb9mf6 = is_ssl() ? '<strong style="color:green;">Yes</strong>' : '<strong style="color:red;">No</strong>';

$m4is_1dex0emarnm9 = is_multisite() ? 'Yes' : 'No';
$m4is_6n4xfsrcre7 = $this->m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ? '<strong class="membGood">Yes' : '<strong class="membWarning">No';

$m4is_pse783x7v09b1mxtfefzcmc1v75mpgag = ucwords( $this->m4is_132xe588j->m4is_4qm9vj9s4y5jnr() );
$m4is_dk9wgfgampyrcvbjnjw6hhgkjn8knd8h = $this->m4is_132xe588j->m4is_5kywzj74m8ht8s0();

$m4is_5sbqr2xek9r45b6t8v1z = m4is_zrrt34b1nqxbv::m4is_6jaw8csaa2dwx9gdbf6351mfj();
$m4is_0191jc3tw = m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z() <> $_SERVER['REMOTE_ADDR'];

$m4is_dnvxevxk0qd3xzya58 = $this->m4is_y2vtmqyvaa1ad();
$m4is_pmjj9x629dfkavy = $this->m4is_8dgrrqcg4xmfvsk23qrdh4qc();
$m4is_h5a91hgfm2n9at2dn89fsmepnva = $wp_version;

$m4is_epk3pzvh02gy7 = empty( $m4is_4v8betb9y9zm6106zn['recommended'] ) ? "None" : "<a href='{$m4is_r2913rsy8ebna837ce5}'><strong style='color:red;'>{$m4is_4v8betb9y9zm6106zn['recommended']}</strong></a>";

$m4is_5hz6fazwtkprvcrb3qkq15zkj2j = empty( $m4is_4v8betb9y9zm6106zn['critical'] ) ? "None" : "<a href='{$m4is_r2913rsy8ebna837ce5}'><strong style='color:red;'>{$m4is_4v8betb9y9zm6106zn['critical']}</strong></a>";

if ( is_array( $m4is_nmjp3qqyctjwx86zr5re ) ) {
foreach( $m4is_nmjp3qqyctjwx86zr5re as $m4is_nt48femkg6za9v5mn1sr23m62k ) {
$m4is_jthd6chmsvrwrzstem3fjdfx0 += (int) version_compare($m4is_nt48femkg6za9v5mn1sr23m62k->version,
 $m4is_zerr1h0771r4n0rkm799e5knf0rm3cb, '>' );
}
}
unset($m4is_nmjp3qqyctjwx86zr5re, $m4is_nt48femkg6za9v5mn1sr23m62k, $m4is_zerr1h0771r4n0rkm799e5knf0rm3cb );

echo '<hr>';
echo '<h3>System Metrics</h3>';
if ($m4is_jthd6chmsvrwrzstem3fjdfx0 || $m4is_gc4rs6tx0zme59gza || $m4is_gp0anm6kqq0yfymrn2ezrsx1jv ) {
echo '<label>Missing Core Updates</label><span class="metric membWarning">',
 $m4is_jthd6chmsvrwrzstem3fjdfx0, '</span><br />';
echo '<label>Missing Plugin Updates</label><span class="metric membWarning">', $m4is_gc4rs6tx0zme59gza,
 '</span><br />';
echo '<label>Missing Theme Updates</label><span class="metric membWarning">', $m4is_gp0anm6kqq0yfymrn2ezrsx1jv, '</span><br />';

echo '<hr>';
}
echo '<label>WordPress User Count</label><span class="metric">', $m4is_5sbqr2xek9r45b6t8v1z, '</span><br />';
echo '<label>Membership Levels</label><span class="metric">',
 $m4is_ycxkat5eez4a7jswr0b77s, '</span><br />';
echo '<label>Protected Pages/Posts</label><span class="metric">', $m4is_dnvxevxk0qd3xzya58,
 '</span><br />';
echo '<hr>';
echo '<label>WordPress Version</label><span class="metric">', $m4is_h5a91hgfm2n9at2dn89fsmepnva, '</span><br />';

echo '<label>WordPress Environment</label><span class="metric">', $m4is_pse783x7v09b1mxtfefzcmc1v75mpgag, '</span><br />';
echo '<label>WordPress Recommended Issues</label><span class="metric">',
 $m4is_epk3pzvh02gy7, '</span><br />';
echo '<label>WordPress Critical Issues</label><span class="metric">', $m4is_5hz6fazwtkprvcrb3qkq15zkj2j,
 '</span><br />';
echo '<label>WordPress SSL</label><span class="metric">', $m4is_1yyyw6qjh9wmkrbrbf3bbfsb6rb9mf6, '</span><br />';

echo '<label>Wordpress Multisite</label><span class="metric"><strong>', $m4is_1dex0emarnm9, '</strong></span><br />';
echo '<label>Wordpress Super Admin</label><span class="metric">',
 $m4is_6n4xfsrcre7, '</strong></span><br />';
echo '<label>WordPress Cron Jobs</label><span class="metric">', $m4is_d6qts4k3czfkn, '</span><br />';

echo '<label>Wordpress Object Caching</label><span class="metric">', $m4is_rwyhwwssa7dj6, '</strong></span><br />';
echo '<hr>';
echo '<label>PHP Memory Allocated</label><span class="metric">',
 $m4is_ykrsgbp0qbhrbn34ar, 'B</span><br />';
echo '<label>WordPress Memory Limit</label><span class="metric">', $m4is_zx3zpy14q9s3p5t9gry8wanpbth1s,
 'MB</span><br />';
echo '<label>Admin Dashboard Memory Limit</label><span class="metric">', $m4is_3mhpwkcpw5vppx0, 'MB</span><br />';

echo '<hr>';
echo '<label>Memberium SKU</label><span class="metric">', $m4is_xq8a8kwspkheej40jh0sthk9zn2s, '</span><br />';
echo '<label>i2SDK Version</label><span class="metric">',
 $m4is_r5a9z89abrfxr6b, '</span><br />';
echo '<label>XML RPC Library Version</label><span class="metric">', $m4is_pmjj9x629dfkavy,
 '</span><br />';
echo '<label>PHP Version</label><span class="metric">', $m4is_qm158q37sdb3bsk0bh1, '</span><br />';
echo '<label>Operating System</label><span class="metric">',
 $m4is_40nss7bgpwnaw2qmpcre7a, '</span><br />';
echo '<label>Display Errors</label><span class="metric">', $m4is_dpgtsxzyf1h1r2bgwg,
 '</strong></span><br />';
echo '<label>Load Balancer / Proxy</label><span class="metric">', $m4is_0191jc3tw ? '<strong class="membGood">Yes</strong>' : 'No' ,
 '</span><br />';
echo '</form>';
}
function m4is_8dgrrqcg4xmfvsk23qrdh4qc() : string {
$m4is_t9svq56t4ysv1rsgy1g61g = 'Uknonwn';
if ( class_exists( 'm4is_vrvbvg106kntyvsh8hw7pqtck4d' ) ) {
$m4is_t9svq56t4ysv1rsgy1g61g = '<strong style="color:green;">i2sdk-IXR</strong>';

}

return $m4is_t9svq56t4ysv1rsgy1g61g;
}
function m4is_t800wqbv25yhxmwrqf() {
$m4is_hhhr20maer2a = $this->m4is_rsb2n0bpxg2x349cpf916vse();

$m4is_hhhr20maer2a['tagcategories'] = time();
$m4is_hhhr20maer2a['tags'] = time();
$this->m4is_py7kzkfvd8rh3y0s4ts = true;
m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_erjfehtz389a6pbsrw();

m4is_0ddg4zyk7dn8eg0283::m4is_r929khbv823hsxjc0498q();
update_option( 'memberium_tables_updated', $m4is_hhhr20maer2a, false );
}
function m4is_x6c7nk7x5() {
if ( isset( $_GET['action'] ) ) {
if ( $_GET['action'] == 'sync-tags' ) {
$this->m4is_t800wqbv25yhxmwrqf();

}
elseif ($_GET['action'] == 'sync-actionsets') {
m4is_w3pp5rsxdc03bns3::m4is_7h358pwxvm3t8();
}
elseif ($_GET['action'] == 'sync-fields') {
m4is_q28s00aabb2yd3d::m4is_rc7cpymf5b7xy32xqb50085d4m();

}
elseif($_GET['action'] == 'update-license') {
m4is_zrrt34b1nqxbv::m4is_5qw71m3dzesr1mczt4k( true );
}
}
}
function m4is_1kv4yhx46pcfpejvgsv39dtg() {
if (! isset( $_GET['nosync'] ) ) {
return;

}
if ( $this->m4is_py7kzkfvd8rh3y0s4ts ) {
return;
}
$m4is_hhhr20maer2a = $this->m4is_rsb2n0bpxg2x349cpf916vse();
if ( ( ! $this->m4is_py7kzkfvd8rh3y0s4ts ) && ( time() - $m4is_hhhr20maer2a['tags'] > 300 ) ) {
m4is_0ddg4zyk7dn8eg0283::m4is_r929khbv823hsxjc0498q();

$this->m4is_py7kzkfvd8rh3y0s4ts = true;
}
if ( ( ! $this->m4is_py7kzkfvd8rh3y0s4ts ) && ( time() - $m4is_hhhr20maer2a['tagcategories'] > 300 ) ) {
m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_erjfehtz389a6pbsrw();

$this->m4is_py7kzkfvd8rh3y0s4ts = true;
}
if ( ( ! $this->m4is_py7kzkfvd8rh3y0s4ts ) && ( time() - $m4is_hhhr20maer2a['actionsets'] > 300 ) ) {
m4is_w3pp5rsxdc03bns3::m4is_7h358pwxvm3t8();

$this->m4is_py7kzkfvd8rh3y0s4ts = true;
}
if ( ( ! $this->m4is_py7kzkfvd8rh3y0s4ts ) && ( time() - $m4is_hhhr20maer2a['i2sdk_customfields'] > 300 ) ) {
m4is_q28s00aabb2yd3d::m4is_rc7cpymf5b7xy32xqb50085d4m();

$this->m4is_py7kzkfvd8rh3y0s4ts = true;
}
if ( ( ! $this->m4is_py7kzkfvd8rh3y0s4ts ) && ( time() - $m4is_hhhr20maer2a['products'] > 300 ) ) {
m4is_bbwjksaqsay3yt68xq9afn::m4is_vatx0jm7();

$this->m4is_py7kzkfvd8rh3y0s4ts = true;
}
if ( ( ! $this->m4is_py7kzkfvd8rh3y0s4ts ) && ( time() - $m4is_hhhr20maer2a['invoices'] > 300 ) ) {
m4is_bbwjksaqsay3yt68xq9afn::m4is_05djdppw();

$this->m4is_py7kzkfvd8rh3y0s4ts = true;
}
}
function m4is_r8zwrbebb793naa9sp() {
$m4is_v4beyw7zqhr3 = strtoupper( $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' ) );

$m4is_v4beyw7zqhr3 = empty( $m4is_v4beyw7zqhr3 ) ? '<span class="membWarning">Missing</span>' : $m4is_v4beyw7zqhr3;
$m4is_9vh1gebjn0dzxe4b8hjpzdcsdqfc = (bool) $this->m4is_132xe588j->get_i2sdk_options()['server_verified'];

$m4is_9vh1gebjn0dzxe4b8hjpzdcsdqfc = $m4is_9vh1gebjn0dzxe4b8hjpzdcsdqfc ? '<strong class="membGood">Connected</strong>' : '<strong class="membWarning">Not Connected</strong>';

$m4is_12vrxdmdm9trvd1a = $this->m4is_ce25q6vkyewg80zh9rs8856r57zh3y();
echo '<h3>Keap Connection</h3>';
echo '<form method="post" action="">';

echo '<label>App Name</label><strong>', $m4is_v4beyw7zqhr3, '</strong><br />';
echo '<label>API Status</label>', $m4is_9vh1gebjn0dzxe4b8hjpzdcsdqfc,
 '<br />';
echo '<label>License Status</label>', $m4is_12vrxdmdm9trvd1a, '<br />';
echo '<p>';
echo '<input type="submit" name="save" value="Renew License" class="button-primary" style="margin-right:20px;">';

echo '<input type="submit" name="save" value="Re-Activate Plugin" class="button-primary">';
echo '</p>';
}

private function m4is_4snk047w1pxmja3ecja1y309() {
echo '<h3>Keap API Metrics</h3>';

$m4is_80xkfqnvmb2nhaeb8200fbmxb3 = get_option( m4is_a6kbph84cyre1t461::API_METRICS_KEY, [] );
$m4is_80xkfqnvmb2nhaeb8200fbmxb3 = is_array( $m4is_80xkfqnvmb2nhaeb8200fbmxb3 ) ? $m4is_80xkfqnvmb2nhaeb8200fbmxb3 : [];

$m4is_dapdcej2nee7kcp6t1jh5gqmcvycqg = isset( $m4is_80xkfqnvmb2nhaeb8200fbmxb3['timestamp'] ) ? time() - $m4is_80xkfqnvmb2nhaeb8200fbmxb3['timestamp'] : time();

if ( $m4is_dapdcej2nee7kcp6t1jh5gqmcvycqg > 3600 ) {
echo '<P>No Current API Metrics Available</p>';
return;
}
$m4is_rkmcn1zd3r3k149h20vfr8z = isset( $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['quota_limit'] ) ? $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['quota_limit'] : 0;

$m4is_wh50wwnwcav4vpxer8e9hypw3p = isset( $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['quota_time_unit'] ) ? $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['quota_time_unit'] : '';

$m4is_rqxytszfq5v6syth1csqqxvy5 = number_format( $m4is_rkmcn1zd3r3k149h20vfr8z ) . ' / ' . $m4is_wh50wwnwcav4vpxer8e9hypw3p;
echo '<label>Quota Limit</label><span class="metric">',
 $m4is_rqxytszfq5v6syth1csqqxvy5, '</span><br />';
$m4is_rkmcn1zd3r3k149h20vfr8z = isset( $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['throttle_limit'] ) ? $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['throttle_limit'] : 0;

$m4is_wh50wwnwcav4vpxer8e9hypw3p = isset( $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['throttle_time_unit'] ) ? $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['throttle_time_unit'] : '';

$m4is_rqxytszfq5v6syth1csqqxvy5 = number_format( $m4is_rkmcn1zd3r3k149h20vfr8z ) . ' / ' . $m4is_wh50wwnwcav4vpxer8e9hypw3p;
echo '<label>Throttle Limit</label><span class="metric">',
 $m4is_rqxytszfq5v6syth1csqqxvy5, '</span><br />';
$m4is_rqxytszfq5v6syth1csqqxvy5 = isset( $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['quota_available'] ) ? number_format( (int) $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['quota_available'] ) : 'Unknown';

echo '<label>Quota Available</label><span class="metric">', $m4is_rqxytszfq5v6syth1csqqxvy5, '</span><br />';
$m4is_rqxytszfq5v6syth1csqqxvy5 = isset( $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['throttle_available'] ) ? number_format( (int) $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['throttle_available'] ) : 'Unknown';

$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_rqxytszfq5v6syth1csqqxvy5 . '  / ' . $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['throttle_time_unit'];

echo '<label>API Calls left before Throttling</label><span class="metric">', $m4is_rqxytszfq5v6syth1csqqxvy5, '</span><br />';
$m4is_rqxytszfq5v6syth1csqqxvy5 = empty( $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['quota_expiry_time'] ) ? 0 : ( $m4is_80xkfqnvmb2nhaeb8200fbmxb3['product']['quota_expiry_time'] / 1000 ) ;

$m4is_rqxytszfq5v6syth1csqqxvy5 = empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ? 'Unknown' : human_time_diff( $m4is_rqxytszfq5v6syth1csqqxvy5 );

echo '<label>Time Until Quota Reset</label><span class="metric">', $m4is_rqxytszfq5v6syth1csqqxvy5, '</span><br />';
}
private function m4is_aystqpv76nx1n() {
$m4is_jrqdhydea8tfkwz4n4g07t6ee = $this->m4is_rsb2n0bpxg2x349cpf916vse();

$m4is_r9470v24tca = m4is_w3pp5rsxdc03bns3::m4is_fsammgw6kagh();
$m4is_4xtaqvt8k6ed6s = $this->m4is_hmpskjf328r4y();
$m4is_xgrvhvvaqfd56nmetbym9nzqc31bk = m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_aekc9p2t46yq3v();

$m4is_599xde3j = $this->m4is_wabaa9m65aebgpjeprjn98q0tbyr0c();
$m4is_2j2yxtbq0 = m4is_q28s00aabb2yd3d::m4is_k47rqs4tnrwgp1d34dgxbj();

$m4is_trazhv6f4fj = $this->m4is_rq0w7g6a7q8();
$m4is_gqmmzp9nw4 = m4is_0ddg4zyk7dn8eg0283::m4is_9dg3g1ypj6c2tb764cere8();
$m4is_pjrv7gz9x610bnbygckaeez26rtqk = $this->m4is_k97thhct2mexa0sadkhwnvdm7m3();

$m4is_jrrk79nfysd0mvn35rja5x0b = $this->m4is_p26nrkbn840qg8eghn4517wt3k();
$m4is_t0s16w3s73w3pq = $this->m4is_v97cmyzy8k9mgc4();
$m4is_2s286vyj8ztr53qbg3j698sf4a = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'ignore_tag_categories' );
$m4is_pj7b9hf9hqrhq = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'ignore_contact_fields' );

$m4is_sk9hzqc6my4mtervyv = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'db_sessions' );
$m4is_ak9y2vv8h2v82zb32xmhpzyjcv5 = count( array_filter( explode( ',',
 trim( $m4is_2s286vyj8ztr53qbg3j698sf4a, ',' ) ) ) );
$m4is_pj7b9hf9hqrhq = count( array_filter( explode( ',', trim( $m4is_pj7b9hf9hqrhq ) ) ) );

$m4is_ebetghv05dnmc68wq58 = count( m4is_bbwjksaqsay3yt68xq9afn::m4is_vgzt7cz68yj8() );
if ( $m4is_4xtaqvt8k6ed6s ) {
$m4is_4xtaqvt8k6ed6s = "<strong style='color:red;''>{$m4is_4xtaqvt8k6ed6s}</strong>";

}
echo '<h3>Keap Cache Metrics</h3>';
echo '<label>Synced Actionsets</label><span class="metric">', $m4is_r9470v24tca, '</span> (',
 human_time_diff($m4is_jrqdhydea8tfkwz4n4g07t6ee['actionsets'] ), ')<br />';
echo '<label>Synced Custom Fields</label><span class="metric">',
 $m4is_2j2yxtbq0, '</span> (', human_time_diff($m4is_jrqdhydea8tfkwz4n4g07t6ee['i2sdk_customfields'] ), ')<br />';
echo '<label>Synced Tag Categories</label><span class="metric">',
 $m4is_xgrvhvvaqfd56nmetbym9nzqc31bk, '</span> (', human_time_diff($m4is_jrqdhydea8tfkwz4n4g07t6ee['tagcategories'] ), ')<br />';
echo '<label>Synced Tags</label><span class="metric">',
 $m4is_gqmmzp9nw4, '</span> (', human_time_diff($m4is_jrqdhydea8tfkwz4n4g07t6ee['tags'] ), ')<br />';
echo '<label>Synced Products</label><span class="metric">',
 m4is_bbwjksaqsay3yt68xq9afn::m4is_garkc0cjkwp8mttetq(), '</span> (', human_time_diff($m4is_jrqdhydea8tfkwz4n4g07t6ee['products'] ),
 ')<br />';
echo '<label>Synced Subscription Plans</label><span class="metric">', $m4is_ebetghv05dnmc68wq58, '</span><br />';
echo '<label>Synced Invoices</label><span class="metric">',
 $m4is_jrrk79nfysd0mvn35rja5x0b, '</span> (', human_time_diff($m4is_jrqdhydea8tfkwz4n4g07t6ee['invoices'] ), ')<br />';
echo '<br />';

echo '<label>Cached Affiliates</label><span class="metric">', $m4is_pjrv7gz9x610bnbygckaeez26rtqk, '</span><br />';
echo '<label>Cached Contacts</label><span class="metric">',
 $m4is_599xde3j, '</span><br />';

echo '<label>Blocked Fields</label><span class="metric">', (empty($m4is_pj7b9hf9hqrhq ) ? "<strong class='membWarning'>0</strong>" : $m4is_pj7b9hf9hqrhq ),
 '</span><br />';
echo '<label>Blocked Tag Categories</label><span class="metric">', (empty($m4is_ak9y2vv8h2v82zb32xmhpzyjcv5 ) ? 0 : '<strong class="membWarning">' . $m4is_ak9y2vv8h2v82zb32xmhpzyjcv5 .'</strong>' ),
 '</span><br />';

echo '<p>';
echo '<input type="submit" name="save" value="Synchronize Keap" class="button-primary"> ', m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(8470 );

echo '</p>';
}
}
?>
<style>
	.membWarning {
		font-weight:bold;
		color:red;
	}
	.membGood {
		font-weight:bold;
		color:green;
	}
</style>
<?php

