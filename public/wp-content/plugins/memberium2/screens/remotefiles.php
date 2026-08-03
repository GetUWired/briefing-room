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

current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
m4is_vwwd0fbj0dbx91va::m4is_de8n8qy4mmtnkq33p();

class m4is_vwwd0fbj0dbx91va {
private static $m4is_8ew58cpxmftgpw93gdffm4s9bbwy = [];
static function m4is_de8n8qy4mmtnkq33p() {
self::m4is_z6c3r724qhd();

m4is_dv250ra9xbtaf::m4is_dagbw7aea4y90yradk9x7b();
self::m4is_szq3396m76s3cx7r9w3a4wzf();
self::m4is_r5xsxn67ce9ad();
self::m4is_md4n3w4jjd5();

self::m4is_dpjg5637cxwc6s6csn345pkp();
self::m4is_28896yqgfbd();
}
private static function m4is_dpjg5637cxwc6s6csn345pkp() {
$m4is_bt047g87sp1xz8522wjps = m4is_0gqs7crsrzdbgfzptjws94s::m4is_yy9b2902mtv0();

echo '<h3>Add New S3 Profile</h3>';
echo '<div style="width:800px;">';
echo '<form method="POST" action="">';
echo '<table class="widefat">';

echo '<input type="hidden" name="type" value="s3">';
echo '<tr>';
echo '<th nowrap="nowrap">Profile Name</th>';
echo '<th nowrap="nowrap">Profile Type</th>';

echo '<th nowrap="nowrap">Default Host</th>';
echo '<th nowrap="nowrap">Default Bucket</th>';
echo '<th nowrap="nowrap">Region</th>';

echo '<th nowrap="nowrap">Access Key</th>';
echo '<th nowrap="nowrap">S3 Secret Key</th>';
echo '<th nowrap="nowrap">Expiration</th>';

echo '</tr>';
echo '<tr>';
echo '<td><input name="profile_name" type="text" size="10" autocomplete="off"/></td>';
echo '<td><select name="profile_type"><option value="s3">Amazon S3</option></select></td>';

echo '<td><input name="default_host" type="text" size="20" placeholder="s3.amazonaws.com" autocomplete="off"/></td>';
echo '<td><input name="default_bucket" type="text" size="20" autocomplete="off"/></td>';

echo '<td><select name="region"/>';
foreach($m4is_bt047g87sp1xz8522wjps as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp) {
echo "<option value='{$m4is_29gzevpx8rbkp}' ".($m4is_29gzevpx8rbkp == 'us-east-1' ? ' selected ' : '') . ">{$m4is_bqhtspcavhb01spmfd3x}</option>";

}
echo '</select></td>';
echo '<td><input name="s3_access_key" type="text" size="20" autocomplete="off"/></td>';
echo '<td><input name="s3_secret_key" type="text" size="20" autocomplete="off"/></td>';

echo '<td><input name="expiration" type="text" size="4" autocomplete="off"/></td>';
echo '</tr>';
echo '</table>';
echo '&nbsp;<br />';

echo '<input type="submit" name="add-profile" value="Add Remote Profile" class="button-primary" />';
echo '<hr />';
echo '</form>';

}
private static function m4is_md4n3w4jjd5() {
$m4is_9mztpyk9m3e = ! empty(self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['remote_files'] ) ? self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['remote_files'] : [];

$m4is_wc68yv9z6x71p95 = count($m4is_9mztpyk9m3e );
echo '<form method="POST" action="" autocomplete="off">';
echo '<table class="widefat" style="white-space:nowrap;">';

echo '<tr>';
echo '<th nowrap="nowrap">Profile Name</th>';
echo '<th nowrap="nowrap">Default Host</th>';
echo '<th nowrap="nowrap">Default Bucket</th>';

echo '<th nowrap="nowrap">Region</th>';
echo '<th nowrap="nowrap">S3 Access Key</th>';
echo '<th nowrap="nowrap">S3 Secret Key</th>';

echo '<th nowrap="nowrap">Expiration</th>';
echo '<th>Delete?</th>';
echo '</tr>';
if (empty($m4is_9mztpyk9m3e) ) {
echo '<tr><td colspan="99">You have no remote storage defined.</td></tr>';

} else {
foreach ($m4is_9mztpyk9m3e as $m4is_1b9h7td3nqy9scpx => $m4is_fh91430wnqcvjs3 ) {
if ($m4is_fh91430wnqcvjs3['type'] == 's3' ) {
echo '<tr>';

echo '<td><i class="fab fa-aws"></i> ', $m4is_fh91430wnqcvjs3['name'], '</td>';
echo '<td>', $m4is_fh91430wnqcvjs3['host'], '</td>';

echo '<td>', $m4is_fh91430wnqcvjs3['bucket'], '</td>';
echo '<td>', isset($m4is_fh91430wnqcvjs3['region']) ? $m4is_fh91430wnqcvjs3['region'] : 'Default',
 '</td>';
echo '<td>', $m4is_fh91430wnqcvjs3['access_key'], '</td>';
echo '<td>', substr($m4is_fh91430wnqcvjs3['secret_key'], 0, 8 ),
 '********</td>';
echo '<td>', (int)$m4is_fh91430wnqcvjs3['expiration'], '</td>';
echo '<td>';
echo '<input type="checkbox" name="delete[' . $m4is_1b9h7td3nqy9scpx . ']">';

echo '</td>';
echo '</tr>';
}
}
}
echo '</table>';
echo '&nbsp;<br />';
if ($m4is_wc68yv9z6x71p95 > 0 ) {
echo '<input type="submit" name="delete-profiles" value="Delete Profiles" class="button-secondary" />';

}
echo '</form>';
echo '</div>';
}
private static function m4is_r5xsxn67ce9ad() {
m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_0ev16xnbdp();


echo '<div class="wrap">';
echo '<hr />';
}
private static function m4is_28896yqgfbd() {
echo '</div>';
}
private static function m4is_szq3396m76s3cx7r9w3a4wzf() {
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
if (isset($_POST['delete'] ) ) {
foreach ($_POST['delete'] as $m4is_yhk2ms73gdy0zt =>
 $m4is_yrsthh0s4s62mfk9 ) {
if ($m4is_yrsthh0s4s62mfk9 == 'on' ) {
unset(self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['remote_files'][$m4is_yhk2ms73gdy0zt] );

m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Remote Storage Profile Deleted', 'error' );
}
}
}
if (isset($_POST['add-profile'] ) && trim($_POST['profile_name'] ) > '' ) {
$m4is_yhk2ms73gdy0zt = strtolower(trim($_POST['profile_name'] ) );

$m4is_z94vm9wh9006rp = [];
$m4is_z94vm9wh9006rp['name'] = trim($_POST['profile_name'] );
$m4is_z94vm9wh9006rp['type'] = 's3';
$m4is_z94vm9wh9006rp['access_key'] = trim($_POST['s3_access_key'] );

$m4is_z94vm9wh9006rp['expiration'] = (int) $_POST['expiration'] > 0 ? (int)$_POST['expiration'] : 300;
$m4is_z94vm9wh9006rp['secret_key'] = trim($_POST['s3_secret_key'] );

$m4is_z94vm9wh9006rp['host'] = trim($_POST['default_host'] ) > '' ? trim($_POST['default_host'] ) : 's3.amazonaws.com';
$m4is_z94vm9wh9006rp['bucket'] = trim($_POST['default_bucket'] );

$m4is_z94vm9wh9006rp['region'] = isset($_POST['region']) ? trim($_POST['region'] ) : 'us-east-1';
self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['remote_files'][$m4is_yhk2ms73gdy0zt] = $m4is_z94vm9wh9006rp;

}
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_p1jtv0swdkhk5vzv1qcmvh( self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy );

}
}
private static function m4is_z6c3r724qhd() {
self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b();

}
}