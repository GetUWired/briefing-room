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


class_exists('m4is_6y9612z4hjd6fzpap4r5n853641m1jc') || die();


class m4is_a2dwxe7nr5m5b93q5d67zvpwnbn {
private $key;
private $version;

function __construct( $m4is_j8j55t8dz79m7, $m4is_t9svq56t4ysv1rsgy1g61g ) {
$this->key = $m4is_j8j55t8dz79m7;

$this->version = $m4is_t9svq56t4ysv1rsgy1g61g;
add_filter('memberium/modules/active/names', [$this, 'm4is_v9eeymdh30mk'], 10, 1);
}
function m4is_v9eeymdh30mk($m4is_jq2e3019hp45103bhm95sxmccqd8) {
return array_merge($m4is_jq2e3019hp45103bhm95sxmccqd8,
 [
'Zoom for Memberium Support'
]);
}

function m4is_cm21zv3d53m5xbvm10mrzz() {
$m4is_29gzevpx8rbkp = $this->version;
$m4is_j2epbkj6df0h31aymz = WPAL_ZOOM_URL . 'assets/';

wp_enqueue_style("wpal-zoom-admin-css", "{$m4is_j2epbkj6df0h31aymz}wpal-zoom-admin.css", [], $m4is_29gzevpx8rbkp, 'all');
}

function m4is_3vvw8srjmsmzrn3c($m4is_ra7dnjjzebn9h3t6k7a2p36,
 $m4is_kyrqdd9qn08s3tbxx9ahv) {
$m4is_vmhtx2ecrnzjpy = $this->key;
$m4is_ek8adjz9yz7wvga34bby56 = $m4is_kyrqdd9qn08s3tbxx9ahv['menu_slug'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if( isset($_POST["{$m4is_ek8adjz9yz7wvga34bby56}-submit"]) ){

if ( isset($_POST["_{$m4is_vmhtx2ecrnzjpy}_name"]) ){
if( wp_verify_nonce($_POST["_{$m4is_vmhtx2ecrnzjpy}_name"],
 $m4is_vmhtx2ecrnzjpy) ){
$m4is_ra7dnjjzebn9h3t6k7a2p36 = $this->m4is_0s9tdz90q5jrc( $_POST, $m4is_ra7dnjjzebn9h3t6k7a2p36 );
}
}
}
}
$this->m4is_cm21zv3d53m5xbvm10mrzz();

$m4is_9ybr7472pbag66e = $m4is_kyrqdd9qn08s3tbxx9ahv['I18n'];
$m4is_j8j55t8dz79m7 = $m4is_ra7dnjjzebn9h3t6k7a2p36['api_key'];
$m4is_rx2cjhd9 = $m4is_ra7dnjjzebn9h3t6k7a2p36['api_secret'];

require_once WPAL_ZOOM_HOME_DIR . 'templates/auth-screen.php';
}
function m4is_0s9tdz90q5jrc($m4is_d60kn1d3yvprp62rs332, $m4is_ra7dnjjzebn9h3t6k7a2p36){
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = ['api_key',
 'api_secret'];
$m4is_2hn07pkym65zhgnmbesmq1 = false;
foreach ($m4is_8ew58cpxmftgpw93gdffm4s9bbwy as $m4is_hce1y1a4qd65zhnwsj) {
$m4is_fp67ya1tmpsh876ewrennxvhj2v = $m4is_ra7dnjjzebn9h3t6k7a2p36[$m4is_hce1y1a4qd65zhnwsj];

$m4is_xbpa7564tnr6vre6jt = isset($m4is_d60kn1d3yvprp62rs332[$m4is_hce1y1a4qd65zhnwsj]) ? esc_attr($m4is_d60kn1d3yvprp62rs332[$m4is_hce1y1a4qd65zhnwsj]) : '';

if( $m4is_xbpa7564tnr6vre6jt != $m4is_fp67ya1tmpsh876ewrennxvhj2v ){
$m4is_ra7dnjjzebn9h3t6k7a2p36[$m4is_hce1y1a4qd65zhnwsj] = $m4is_xbpa7564tnr6vre6jt;

$m4is_2hn07pkym65zhgnmbesmq1 = true;
}
}
if($m4is_2hn07pkym65zhgnmbesmq1){
update_option($this->key, $m4is_ra7dnjjzebn9h3t6k7a2p36);

}
return $m4is_ra7dnjjzebn9h3t6k7a2p36;
}
}
