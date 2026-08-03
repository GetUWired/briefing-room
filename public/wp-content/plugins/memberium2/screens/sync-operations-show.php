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

m4is_j3gj616n7djcgr::m4is_de8n8qy4mmtnkq33p();
final class m4is_j3gj616n7djcgr {
private $m4is_132xe588j;
private $makepass_scheduled;

static function m4is_de8n8qy4mmtnkq33p() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}
private function __construct() {
$this->m4is_rdbqwsws7nxnjkh();
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_9adtaa67sa21q2c604j55azyzd();

$this->m4is_6w08a6nftsf73sazn7();
}
private function m4is_rdbqwsws7nxnjkh() {
current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->makepass_scheduled = false;
}
private function m4is_9adtaa67sa21q2c604j55azyzd() {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;

}
$m4is_xzmx2mdfb3b = isset( $_POST['makepass_scan_size'] ) ? (int) $_POST['makepass_scan_size'] : 0;
$m4is_kv41a6966t2 = isset( $_POST['makepass_scan_tag'] ) ? (int) $_POST['makepass_scan_tag'] : 0;

$m4is_35n8szatg85m1q = isset( $_POST['makepass_success_actionset'] ) ? (int) $_POST['makepass_success_actionset'] : 0;
$m4is_x42pe5ft8jnxjrx3cb4ekks1qd4nnt = isset( $_POST['makepass_success_tag'] ) ? (int) $_POST['makepass_success_tag'] : 0;

if ( $m4is_xzmx2mdfb3b < 0 || $m4is_xzmx2mdfb3b > 5 ) {
$m4is_xzmx2mdfb3b = 0;
}
$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_xzmx2mdfb3b,
 'settings', 'makepass_scan_size' );
$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_kv41a6966t2, 'settings', 'makepass_scan_tag' );

$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_35n8szatg85m1q, 'settings', 'makepass_success_actionset', );
$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_x42pe5ft8jnxjrx3cb4ekks1qd4nnt,
 'settings', 'makepass_success_tag', );
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('MakePass Scanner Options Updated.' );

}
function m4is_15dqqdensxxhdptc() : array {
$m4is_wfv34z8p = function( $m4is_29gzevpx8rbkp, $m4is_bqhtspcavhb01spmfd3x ) {
if ( $m4is_29gzevpx8rbkp > time() - 3600 ) {
foreach( $m4is_29gzevpx8rbkp as $k2 =>
 $v2 ) {
if ( $k2 == 'memberium/contacts/makepass_scan' ) {
return true;
}
}
}
return false;
};
$m4is_d6qts4k3czfkn = get_option('cron',
 [] );
return array_filter( $m4is_d6qts4k3czfkn, $m4is_wfv34z8p, ARRAY_FILTER_USE_BOTH );
}
function m4is_6w08a6nftsf73sazn7() {
$m4is_r2xawdj3yh1c38xxrd53seh7tfwn9 = 'm4is_dv250ra9xbtaf';

$m4is_d6qts4k3czfkn = $this->m4is_15dqqdensxxhdptc();
if ( empty( $m4is_d6qts4k3czfkn ) ) {
echo '<p><strong>Warning:</strong>  The MakePass Scanner process (WP CRON) is not running.  This service will reinstall each hour.</p>';

}
$m4is_xzmx2mdfb3b = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'makepass_scan_size' );
$m4is_kv41a6966t2 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'makepass_scan_tag' );
$m4is_35n8szatg85m1q = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'makepass_success_actionset' );

$m4is_x42pe5ft8jnxjrx3cb4ekks1qd4nnt = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'makepass_success_tag' );

echo '<h3>Password Generation Scanner</h3>';
echo '<p><strong style="color:red;">This tool is only recommended if you cannot reliably use HTTP POST to create users.</strong></p>';

echo '<p>This tool is slower, and uses a large number of API calls to operate.</p>';
echo '<ul>';
$m4is_r2xawdj3yh1c38xxrd53seh7tfwn9::m4is_p488tphrcjnwcmgtefr0jceb9ep(
'Makepass Start Tag',

'makepass_scan_tag',
$m4is_kv41a6966t2,
'taglistdropdown',
['help_id' => 12526]
);
$m4is_r2xawdj3yh1c38xxrd53seh7tfwn9::m4is_p488tphrcjnwcmgtefr0jceb9ep(
'Makepass Complete Tag',

'makepass_success_tag',
$m4is_x42pe5ft8jnxjrx3cb4ekks1qd4nnt,
'taglistdropdown',
['help_id' => 12526]
);
$m4is_r2xawdj3yh1c38xxrd53seh7tfwn9::m4is_p488tphrcjnwcmgtefr0jceb9ep(
'Makepass Complete Actionset',

'makepass_success_actionset',
$m4is_35n8szatg85m1q,
'actionsetdropdown',
['help_id' => 12526]
);
$m4is_r2xawdj3yh1c38xxrd53seh7tfwn9::m4is_1nj1ys2vvgakb6bgcgt6g(
'Contacts Per Scan',

'makepass_scan_size',
$m4is_xzmx2mdfb3b,
['min' => 1, 'max' => 5, 'help_id' => 12526, 'style' => 'text-align:right;width:80px;']
);

if ( $m4is_kv41a6966t2 && $m4is_xzmx2mdfb3b ) {
m4is_rn5d7867js9nrsh3ej5wrgwj3::m4is_8hwc4kvv4g0w6gqhqe3r();
}
echo '</ul>';
echo '<p><input type="submit" value="Update" class="button-primary"></p>';

}
}
