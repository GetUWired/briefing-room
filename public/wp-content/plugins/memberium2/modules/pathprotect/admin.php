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

final class m4is_26evfy5g7x {
private
$module_settings,
$settings;
function __construct() {
$this->module_settings = get_option('MemberiumPathProtect',
 [] );
unset( $this->module_settings['active'] );
add_action('init', [$this, 'm4is_z6fjm8tqms33kzew529v6aby'], 9 );
}
function m4is_z6fjm8tqms33kzew529v6aby() {
if ( ! defined( 'DOING_CRON' ) && current_user_can( 'manage_options' ) ) {
add_action('admin_menu',
 [$this, 'm4is_9c3fdhbqvpesb2721t']);
}
}
function m4is_9c3fdhbqvpesb2721t() {
if ( current_user_can( 'manage_options' ) ) {
add_options_page( __('WPaL Path Protect'),
 __('WPaL Path Protect'), 'manage_options', 'pathprotect', [$this, 'm4is_2mg2f1wvvzcg4']);
}
}
function m4is_2mg2f1wvvzcg4() {
if ( ! current_user_can( 'manage_options' ) ) {
wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

}
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_dht4qgn64s6fwggb();
$m4is_z4ts5pa39jf1yhjb4 = $_POST;
$m4is_4wxc01rda = $_SERVER;

if ( $m4is_4wxc01rda['REQUEST_METHOD'] == 'POST' ) {
if (! empty($m4is_z4ts5pa39jf1yhjb4['update_rules']) ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['rules'] = [];

if ( isset($_POST['rules']) && is_array( $_POST['rules'] ) ) {
foreach( $_POST['rules'] as $m4is_9eye7n6xxcymd1tt ) {
$m4is_9eye7n6xxcymd1tt['urls'] = trim( $m4is_9eye7n6xxcymd1tt['urls'] );

if ( $m4is_9eye7n6xxcymd1tt['anonymous_only'] ) {
$m4is_9eye7n6xxcymd1tt['logged_in'] = 0;
}
if ( $m4is_9eye7n6xxcymd1tt['logged_in'] ) {
$m4is_9eye7n6xxcymd1tt['anonymous_only'] = 0;

}
if ( ! $m4is_9eye7n6xxcymd1tt['anonymous_only'] && ! $m4is_9eye7n6xxcymd1tt['logged_in'] ) {
$m4is_9eye7n6xxcymd1tt['logged_in'] = 1;

}
if ( $m4is_9eye7n6xxcymd1tt['prohibited_action'] == 'redirect' && empty( $m4is_9eye7n6xxcymd1tt['redirect_url'] ) ) {
$m4is_9eye7n6xxcymd1tt['redirect_url'] = get_site_url();

}
if ( ! empty( $m4is_9eye7n6xxcymd1tt['urls'] ) && $m4is_9eye7n6xxcymd1tt['delete'] == 0 ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['rules'][] = $m4is_9eye7n6xxcymd1tt;

}
}
}
}
if (! empty($_POST['add_rules']) ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['rules'][] = [
'urls' => '',
'logged_in' => 0,
'anonymous_only' =>
 0,
'prohibited_action' => 'redirect',
];
}
$this->m4is_h2mh7xv9pgttw7zbpyy($m4is_8ew58cpxmftgpw93gdffm4s9bbwy);
}
$m4is_3a74zd8ztxwh69eg891bssd3gc4 = [];

$m4is_3a74zd8ztxwh69eg891bssd3gc4['hide'] = 'Hide Completely';
$m4is_3a74zd8ztxwh69eg891bssd3gc4['redirect'] = 'Redirect';
echo '<style>';

echo 'label { width:200px; display:inline-block; }';
echo '#htmlmessage { width:500px !important; }';
echo '</style>';
echo '<div class="wrap">';

echo '<h1>Path Protect for Membership Sites</h1>';
echo '<form method="POST" action="">';
echo '<ul>';
echo '</ul>';
echo '<h3>Current Rules</h3>';

echo '<div style="width:800px;">';
echo '<hr />';
echo '<table class="widefat" style="white-space:nowrap;">';
echo '<tr style="font-weight:bold;">';

echo '<th>Requirements</th>';
echo '<th>URLs</th>';
echo '<th>Prohibited Action</th>';
echo '<th>Delete?</th>';
echo '</tr>';
if (! empty($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['rules']) && is_array($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['rules']) ) {
foreach ( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['rules'] as $m4is_j8j55t8dz79m7 =>
 $m4is_9eye7n6xxcymd1tt ) {
$m4is_9eye7n6xxcymd1tt['logged_in'] = isset( $m4is_9eye7n6xxcymd1tt['logged_in'] ) ? $m4is_9eye7n6xxcymd1tt['logged_in'] : 0;

$m4is_9eye7n6xxcymd1tt['anonymous_only'] = isset( $m4is_9eye7n6xxcymd1tt['anonymous_only'] ) ? $m4is_9eye7n6xxcymd1tt['anonymous_only'] : 0;

$m4is_9eye7n6xxcymd1tt['urls'] = isset( $m4is_9eye7n6xxcymd1tt['urls'] ) ? $m4is_9eye7n6xxcymd1tt['urls'] : '';
$m4is_9eye7n6xxcymd1tt['redirect_url'] = isset( $m4is_9eye7n6xxcymd1tt['redirect_url'] ) ? $m4is_9eye7n6xxcymd1tt['redirect_url'] : '';

echo '<tr>';
echo '<td>';
echo '<input type="hidden" name="rules[', $m4is_j8j55t8dz79m7, '][logged_in]" value="0">';
echo '<input type="checkbox" value="1" name="rules[',
 $m4is_j8j55t8dz79m7, '][logged_in]"', $m4is_9eye7n6xxcymd1tt['logged_in'] == 1 ? ' checked="checked" ' : '', ' /> Logged In<br>';
echo '<input type="hidden" name="rules[',
 $m4is_j8j55t8dz79m7, '][anonymous_only]" value="0">';
echo '<input type="checkbox" value="1" name="rules[', $m4is_j8j55t8dz79m7, '][anonymous_only]"',
 $m4is_9eye7n6xxcymd1tt['anonymous_only'] == 1 ? ' checked="checked" ' : '', ' /> Anonymous Only<br>';
echo '</td>';
$m4is_sbagk0agc = count( array_filter( explode( "\n",
 $m4is_9eye7n6xxcymd1tt['urls'] ) ) );
echo '<td>';
echo '<textarea cols="80" rows="', $m4is_sbagk0agc + 1, '" name="rules[', $m4is_j8j55t8dz79m7,
 '][urls]">', $m4is_9eye7n6xxcymd1tt['urls'], '</textarea>';
echo '</td>';
echo '<td>';
echo '<select name="rules[', $m4is_j8j55t8dz79m7,
 '][prohibited_action]">';
foreach ( $m4is_3a74zd8ztxwh69eg891bssd3gc4 as $m4is_rqxytszfq5v6syth1csqqxvy5 => $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 ) {
$m4is_fe42r2djxgf1h7pt = $m4is_9eye7n6xxcymd1tt['prohibited_action'] == $m4is_rqxytszfq5v6syth1csqqxvy5 ? ' selected="selected" ' : '';

echo '<option value="' . $m4is_rqxytszfq5v6syth1csqqxvy5 . '" ' . $m4is_fe42r2djxgf1h7pt . '>' . $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 . '</option>';

}
echo '</select><br />';
echo 'Redirection URL<br>';
echo '<input type="text" name="rules[', $m4is_j8j55t8dz79m7, '][redirect_url]" value="',
 $m4is_9eye7n6xxcymd1tt['redirect_url'],'">';
echo '</td>';
echo '<td>';
echo '<input type="hidden" name="rules[', $m4is_j8j55t8dz79m7,
 '][delete]" value="0">';
echo '<input type="checkbox" name="rules[', $m4is_j8j55t8dz79m7, '][delete]" value="1">';
echo '</td>';
echo '</tr>';

}
}
else {
echo '<tr><td colspan="99">You have no rules created</td></tr>';
}
echo '</table>';
echo '&nbsp;<br>';
echo '<input type="submit" name="update_rules" value="Save Changes" class="button-primary" />';

echo '</form>';
echo '<form method="post">';
echo '&nbsp;<br>';
echo '<input type="submit" name="add_rules" value="Add Ruleset" class="button-primary" />';

echo '</form>';
echo '</div>';
echo '</div>';
}
private function m4is_dht4qgn64s6fwggb() {
$m4is_j8j55t8dz79m7 = 'WPAL/pathprotect/settings';

$m4is_f6tbys3ed3c1k2nwhfm1ayega9bpz4 = 'MemberiumPathProtect';
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = get_option($m4is_j8j55t8dz79m7,
 false);
if ($m4is_8ew58cpxmftgpw93gdffm4s9bbwy === false) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = get_option($m4is_f6tbys3ed3c1k2nwhfm1ayega9bpz4,
 '');
if (is_array($m4is_8ew58cpxmftgpw93gdffm4s9bbwy) ) {
update_option($m4is_j8j55t8dz79m7, $m4is_8ew58cpxmftgpw93gdffm4s9bbwy);
}
}
if (! is_array($m4is_8ew58cpxmftgpw93gdffm4s9bbwy) || empty($m4is_8ew58cpxmftgpw93gdffm4s9bbwy) ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = [
'rules' =>
 [],
];
}
return $m4is_8ew58cpxmftgpw93gdffm4s9bbwy;
}
private function m4is_h2mh7xv9pgttw7zbpyy($m4is_8ew58cpxmftgpw93gdffm4s9bbwy) {
$m4is_j8j55t8dz79m7 = 'WPAL/pathprotect/settings';

$m4is_f6tbys3ed3c1k2nwhfm1ayega9bpz4 = 'MemberiumPathProtect';
update_option($m4is_j8j55t8dz79m7, $m4is_8ew58cpxmftgpw93gdffm4s9bbwy);

delete_option($m4is_f6tbys3ed3c1k2nwhfm1ayega9bpz4);
}
}