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
m4is_p8e7hgzb0zak914n3mtjj6::m4is_de8n8qy4mmtnkq33p();

class m4is_p8e7hgzb0zak914n3mtjj6 {
private $m4is_an2nmmfnsmz9f60 = [];
private $m4is_3vc99myy5e3w587xb1t7z = [];
static function m4is_de8n8qy4mmtnkq33p() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_z6c3r724qhd();
$this->m4is_9adtaa67sa21q2c604j55azyzd();

$this->m4is_zhwfhyk3p();
$this->m4is_2ctdgg6p344h14jt();
}
private function m4is_z6c3r724qhd() {
$this->m4is_3vc99myy5e3w587xb1t7z = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact',
 true );
$this->m4is_an2nmmfnsmz9f60 = $this->m4is_r4p0ddsepskmagrf9vqw354n2g( get_option( 'memberium_xprofile_map', [] ) );
}

private function m4is_r4p0ddsepskmagrf9vqw354n2g( $m4is_4s4mmcg520b0y0tbbgnade ) {

$m4is_4s4mmcg520b0y0tbbgnade = array_filter( $m4is_4s4mmcg520b0y0tbbgnade );


foreach( $m4is_4s4mmcg520b0y0tbbgnade as $m4is_w19r4rv3f01613a4ypf => $m4is_r5562pxn2 ) {
if ( ! array_key_exists( $m4is_w19r4rv3f01613a4ypf,
 $m4is_4s4mmcg520b0y0tbbgnade ) ) {
unset( $m4is_4s4mmcg520b0y0tbbgnade[ $m4is_w19r4rv3f01613a4ypf ] );
}
}

foreach( $m4is_4s4mmcg520b0y0tbbgnade as $m4is_w19r4rv3f01613a4ypf =>
 $m4is_r5562pxn2 ) {
if ( ! in_array( $m4is_r5562pxn2, $m4is_4s4mmcg520b0y0tbbgnade ) ) {
unset( $m4is_4s4mmcg520b0y0tbbgnade[ $m4is_w19r4rv3f01613a4ypf ] );

}
}
foreach( $m4is_4s4mmcg520b0y0tbbgnade as $m4is_w19r4rv3f01613a4ypf => $m4is_r5562pxn2 ) {
if ( empty( $m4is_w19r4rv3f01613a4ypf ) || empty ($m4is_r5562pxn2 ) ) {
unset( $m4is_4s4mmcg520b0y0tbbgnade[$m4is_w19r4rv3f01613a4ypf] );

}
}
return $m4is_4s4mmcg520b0y0tbbgnade;
}
private function m4is_9adtaa67sa21q2c604j55azyzd() {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;

}
$m4is_k0fbmngffkq31z0 = isset( $_POST['xprofile_map_delete'] ) && is_array( $_POST['xprofile_map_delete'] ) ? $_POST['xprofile_map_delete'] : [];

$m4is_y4s3scdjyknheknmmm4w5 = isset( $_POST['new_keap_map'] ) ? $_POST['new_keap_map'] : '';
$m4is_bgmh9wh7xq82pec8gca1xan = (int) isset( $_POST['new_xprofile_map'] ) ? $_POST['new_xprofile_map'] : '';

foreach ( $m4is_k0fbmngffkq31z0 as $m4is_eq030837an => $m4is_r5562pxn2 ) {
unset( $this->m4is_an2nmmfnsmz9f60[$m4is_eq030837an] );

}
if ( $m4is_y4s3scdjyknheknmmm4w5 && $m4is_bgmh9wh7xq82pec8gca1xan ) {
$this->m4is_an2nmmfnsmz9f60[$m4is_y4s3scdjyknheknmmm4w5] = $m4is_bgmh9wh7xq82pec8gca1xan;

}
update_option( 'memberium_xprofile_map', $this->m4is_an2nmmfnsmz9f60 );
}
private function m4is_46kwwxcbfe502zghj3e3c() {
global $wpdb;

static $m4is_6x7mdw6acwzev46spxd5atxbnvbc2 = null;
if ( is_null( $m4is_6x7mdw6acwzev46spxd5atxbnvbc2 ) ) {

$m4is_6wdw2qgrj1dwsa1z = buddypress();

$m4is_6x7mdw6acwzev46spxd5atxbnvbc2 = [];
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id`, `name` FROM `{$m4is_6wdw2qgrj1dwsa1z->profile->table_name_fields}` WHERE 1 ";

$m4is_hartbe843crydzh = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
foreach ( $m4is_hartbe843crydzh as $m4is_bamv772v ) {
$m4is_6x7mdw6acwzev46spxd5atxbnvbc2[ $m4is_bamv772v['id'] ] = $m4is_bamv772v['name'];

}
}
return $m4is_6x7mdw6acwzev46spxd5atxbnvbc2;
}
private function m4is_28896yqgfbd() {
echo '</table>';
echo '<p><input type="submit" name="save" value="Save BuddyPress Field Sync" class="button-primary" /></p>';

echo '</form>';
echo '</div>';
}
private function m4is_r5xsxn67ce9ad() {
echo '<div class="wrap">';
echo '<form method="POST" action="">';

echo '<input type="hidden" name="formtype" value="', $_GET['tab'], '">';
wp_nonce_field(__FILE__);
echo '<table class="widefat">';

echo '<thead><tr></td><th>Keap Field</th><th>BuddyPress XProfile Field</th><th style="width:150px;"></th></tr></thead>';
}
private function m4is_zhwfhyk3p() {
$m4is_6x7mdw6acwzev46spxd5atxbnvbc2 = $this->m4is_46kwwxcbfe502zghj3e3c();

$this->m4is_r5xsxn67ce9ad();
foreach ($this->m4is_3vc99myy5e3w587xb1t7z as $m4is_wh0m980wk362m84cpbn5kd ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = empty( $this->m4is_an2nmmfnsmz9f60[$m4is_wh0m980wk362m84cpbn5kd] ) ? 0 : $this->m4is_an2nmmfnsmz9f60[$m4is_wh0m980wk362m84cpbn5kd];

if ( $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
echo '<tr>';
echo '<td style="width:300px;">', $m4is_wh0m980wk362m84cpbn5kd, '</td>';
echo '<td>';


echo '<input disabled type="text" value="', $m4is_6x7mdw6acwzev46spxd5atxbnvbc2[ $m4is_rqxytszfq5v6syth1csqqxvy5 ], '" style="width:300px;">';

echo '</td>';
echo '<td><input type=submit name="xprofile_map_delete[', $m4is_wh0m980wk362m84cpbn5kd, ']" value="Remove" class="submitdelete"></td>';

echo '</tr>';
}
}
$this->m4is_9fgq245rvxfc1mx631a9zt44j2xc();
$this->m4is_28896yqgfbd();
}
private function m4is_9fgq245rvxfc1mx631a9zt44j2xc() {
$m4is_sr85ntbb44j9tyt1vymj2xjd82h = '';

foreach( $this->m4is_3vc99myy5e3w587xb1t7z as $m4is_eq030837an ) {
if ( ! array_key_exists( $m4is_eq030837an, $this->m4is_an2nmmfnsmz9f60 ) ) {
$m4is_sr85ntbb44j9tyt1vymj2xjd82h .= '<option value="' . $m4is_eq030837an . '">' . $m4is_eq030837an . '</option>';

}
}
echo '<tr style="margin-top:20px;">';
echo '<td>';
echo '<select name="new_keap_map" class="basic-single" style="margin-right: 20px">',
 $m4is_sr85ntbb44j9tyt1vymj2xjd82h, '</select>';
echo '</td>';
echo '<td>';
echo '<select name="new_xprofile_map" class="requiredtaglistdropdown"></select>';

echo '</td>';
echo '<td></td>';
echo '</tr>';
}
private function m4is_2ctdgg6p344h14jt() {
$m4is_6x7mdw6acwzev46spxd5atxbnvbc2 = $this->m4is_46kwwxcbfe502zghj3e3c();

if (! empty($m4is_6x7mdw6acwzev46spxd5atxbnvbc2 ) ) {

$m4is_r9e6db932zpnwx454[] = [
'id' => 0,
'text' => '(Don\'t Sync)'
];
foreach ( (array) $m4is_6x7mdw6acwzev46spxd5atxbnvbc2 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) {
if ( ! in_array( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $this->m4is_an2nmmfnsmz9f60 ) ) {
$m4is_r9e6db932zpnwx454[] = [
'id' =>
 $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' => $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6
];
}
}
$m4is_r9e6db932zpnwx454 = json_encode($m4is_r9e6db932zpnwx454 );

unset($m4is_06c8s5xs94f91335gnaey25, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 );
echo '<script>';

echo 'var requiredtaglist      = ', $m4is_r9e6db932zpnwx454, ';';
echo '</script>';
unset($m4is_r9e6db932zpnwx454 );
}
}
}
