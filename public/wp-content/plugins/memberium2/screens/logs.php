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
new m4is_aqarm1t6j81xeegb6();

class m4is_aqarm1t6j81xeegb6 {
private $m4is_132xe588j;
private $m4is_v4beyw7zqhr3;
private $m4is_aq3n8kjvpsvryrrf9exmx;
private $m4is_7a0qav6bf;

private $m4is_peh3bgmj;
private $m4is_ta6xqxkcdz0c5g3pk;
function __construct() {
$this->m4is_z6c3r724qhd();
$this->m4is_kvhvdc5kgxxxhy05gbc();

m4is_dv250ra9xbtaf::m4is_dagbw7aea4y90yradk9x7b();
$this->m4is_r5xsxn67ce9ad();
$this->m4is_9r7emy8g5bmye38df9wrqym9();
$this->m4is_28896yqgfbd();

}
private function m4is_z6c3r724qhd() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
$this->m4is_peh3bgmj = 'memberium/log_count';

$this->m4is_7a0qav6bf = 'login';
$this->m4is_ta6xqxkcdz0c5g3pk = [
'login' => '<i class="fa fa-history"></i> Logins',
'loginfail' =>
 '<i class="fa fa-ban"></i> Login Error',
'httppost' => '<i class="fa fa-paper-plane"></i> HTTP POST',
'autologin' => '<i class="fa fa-magic"></i> Autologin',

'cron' => '<i class="fa fa-clock"></i> Cron',
'phperror' => '<i class="fa fa-bug"></i> PHP Errors',

];
$this->m4is_aq3n8kjvpsvryrrf9exmx = $this->m4is_mzxreakhktx8nkmez7();

}
private function m4is_mzxreakhktx8nkmez7() {
$m4is_ga7k41nm95cn0s4wkjqanw7 = isset( $_GET['tab'] ) ? strtolower( $_GET['tab'] ) : '';

$m4is_ga7k41nm95cn0s4wkjqanw7 = array_key_exists( $m4is_ga7k41nm95cn0s4wkjqanw7, $this->m4is_ta6xqxkcdz0c5g3pk ) ? $m4is_ga7k41nm95cn0s4wkjqanw7 : $this->m4is_7a0qav6bf;

return $m4is_ga7k41nm95cn0s4wkjqanw7;
}
private function m4is_kvhvdc5kgxxxhy05gbc() {
global $wpdb;
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;

}
if ( $this->m4is_aq3n8kjvpsvryrrf9exmx == 'login' ) {
$m4is_k7p8pmxsbkqrje3y20 = m4is_an0pxqdph6ax26586c::m4is_0sbrs1vk06py44g();

if ( ! empty( $_POST['delete_login_log'] ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `appname` = %s";
$m4is_j34bmw9dcjexfj1qpz = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 $m4is_k7p8pmxsbkqrje3y20, $this->m4is_v4beyw7zqhr3 );
$wpdb->query( $m4is_j34bmw9dcjexfj1qpz );
delete_transient( $this->m4is_peh3bgmj );

}
if ( ! empty( $_POST['trim_login_log'] ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `appname` = %s AND `logintime` < UNIX_TIMESTAMP(DATE_SUB( NOW(), INTERVAL 30 DAY ) )";

$m4is_j34bmw9dcjexfj1qpz = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $this->m4is_v4beyw7zqhr3 );
$wpdb->query( $m4is_j34bmw9dcjexfj1qpz );

delete_transient( $this->m4is_peh3bgmj );
}
}
elseif ( $this->m4is_aq3n8kjvpsvryrrf9exmx == 'httppost' ) {
if ( ! empty( $_POST['delete_httppost'] ) ) {
m4is_c2ry5jv8yz446k40191::m4is_9hac43mphqpkrh();

}
}
elseif ( $this->m4is_aq3n8kjvpsvryrrf9exmx == 'autologin' ) {
if ( ! empty( $_POST['delete_autologin'] ) ) {
m4is_c2ry5jv8yz446k40191::m4is_ryqghdeab2t5y();

}
}
elseif ( $this->m4is_aq3n8kjvpsvryrrf9exmx == 'loginfail' ) {
if ( ! empty( $_POST['delete_loginerror_log'] ) ) {
m4is_c2ry5jv8yz446k40191::m4is_b12jw3z3kqhfpxmype();

}
}
}
private function m4is_pdq1rthqv3qjd() : void {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "TRUNCATE TABLE %i",
 m4is_an0pxqdph6ax26586c::m4is_0sbrs1vk06py44g() );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
delete_transient( $this->m4is_peh3bgmj );

}
private function m4is_r5xsxn67ce9ad() {
m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_0ev16xnbdp();
echo '<div class="wrap">';


echo '<h2 class="nav-tab-wrapper">';
foreach ( $this->m4is_ta6xqxkcdz0c5g3pk as $m4is_ga7k41nm95cn0s4wkjqanw7 => $m4is_hce1y1a4qd65zhnwsj ) {
$m4is_53mq3k4adf3m0 = ( $m4is_ga7k41nm95cn0s4wkjqanw7 == $this->m4is_aq3n8kjvpsvryrrf9exmx ) ? ' nav-tab-active' : '';

if ( $m4is_ga7k41nm95cn0s4wkjqanw7 == $this->m4is_aq3n8kjvpsvryrrf9exmx ) {
echo "<span class='nav-tab{$m4is_53mq3k4adf3m0}'>{$m4is_hce1y1a4qd65zhnwsj}</span>";

}
else {
echo "<a class='nav-tab{$m4is_53mq3k4adf3m0}' href='?page=", $_GET['page'], "&tab={$m4is_ga7k41nm95cn0s4wkjqanw7}'>{$m4is_hce1y1a4qd65zhnwsj}</a>";

}
}
echo '</h2>';
}
private function m4is_9r7emy8g5bmye38df9wrqym9() {
$m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby( "logs-{$this->m4is_aq3n8kjvpsvryrrf9exmx}-show.php" );

echo '<div class="memberium_tabcontent" style="margin-top:10px;">';
if ( file_exists( $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 ) ) {
require_once $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1;

}
else {
echo '<p>Screen Missing</p>';
}
echo '</div>';
}
private function m4is_28896yqgfbd() {
echo '</div>';
}
}