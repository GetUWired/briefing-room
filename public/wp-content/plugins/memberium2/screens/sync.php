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


class_exists( 'm4is_knfcbrvkjrz3n8k8y6gf' ) || die();

m4is_sstqr97m71w4k13ssa6gy7jdcbyg7tkb::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
final class m4is_sstqr97m71w4k13ssa6gy7jdcbyg7tkb {
private $m4is_132xe588j;

static public function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}
private function __construct() {
$this->m4is_rdbqwsws7nxnjkh();
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_b1061ach53dcnt9h5m();



$m4is_ta6xqxkcdz0c5g3pk = $this->m4is_kh8danqyhk();
$m4is_aq3n8kjvpsvryrrf9exmx = $this->m4is_mzxreakhktx8nkmez7( $m4is_ta6xqxkcdz0c5g3pk );

$this->m4is_7qckhfvqtzgbs2ftejrcr61jkmm74( $m4is_ta6xqxkcdz0c5g3pk, $m4is_aq3n8kjvpsvryrrf9exmx );
$this->m4is_179amejyky7ect4e( $m4is_aq3n8kjvpsvryrrf9exmx );

$this->m4is_whqr97gckakemy();
}
private function m4is_rdbqwsws7nxnjkh() : void {
current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_csmdzh4sncasvp1enyykf1bk::m4is_n7ce1ph3h1kzmt249y3b30y( 'app' );

}
private function m4is_kh8danqyhk() : array {
$m4is_yvgm5dx8ht8rs54xkpspzc4feg = [
'operations' => 'sync-operations-show.php',
'categories' =>
 'sync-categories-show.php',
'contactfields' => 'sync-contactfields-show.php',
'buddypress' => 'sync-buddypress-show.php',
'affiliatefields' =>
 'sync-affiliatefields-show.php',
'wipe' => 'sync-wipe-show.php',
];
$m4is_ta6xqxkcdz0c5g3pk = [
'operations' => '<i class="fa fa-plug"></i> Operations',

'categories' => '<i class="fa fa-tags"></i> Tag Categories',
'contactfields' => '<i class="fa fa-user"></i> Contact Fields',
];
if ( ! isset( $_GET['override'] ) ) {
$m4is_kv41a6966t2 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'makepass_scan_tag' );
$m4is_35n8szatg85m1q = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'makepass_success_actionset' );

$m4is_x42pe5ft8jnxjrx3cb4ekks1qd4nnt = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'makepass_success_tag' );

if ( ! $m4is_kv41a6966t2 || ! $m4is_35n8szatg85m1q || ! $m4is_x42pe5ft8jnxjrx3cb4ekks1qd4nnt ) {
unset( $m4is_ta6xqxkcdz0c5g3pk['operations'] );

}
}
$m4is_7dmh957r0xy8413hzt1taz9t = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'sync_affiliate', 0 );

if ( $m4is_7dmh957r0xy8413hzt1taz9t ) {
$m4is_ta6xqxkcdz0c5g3pk['affiliatefields'] = '<i class="fa fa-user-plus"></i> Affiliate Fields';

}
if ( function_exists( 'bp_is_active' ) && bp_is_active( 'xprofile' ) ) {
$m4is_ta6xqxkcdz0c5g3pk['buddypress'] = '<i class="fa fa-user-plus"></i> BuddyPress Fields';

}
return $m4is_ta6xqxkcdz0c5g3pk;
}
private function m4is_b1061ach53dcnt9h5m() : void {
m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_erjfehtz389a6pbsrw();

m4is_q28s00aabb2yd3d::m4is_rc7cpymf5b7xy32xqb50085d4m();
m4is_dv250ra9xbtaf::m4is_dagbw7aea4y90yradk9x7b();
}
private function m4is_mzxreakhktx8nkmez7( array $m4is_ta6xqxkcdz0c5g3pk ) : string {
$m4is_ga7k41nm95cn0s4wkjqanw7 = empty( $_GET['tab'] ) ? array_key_first( $m4is_ta6xqxkcdz0c5g3pk ) : strtolower( $_GET['tab'] );

$m4is_aq3n8kjvpsvryrrf9exmx = array_key_exists( $m4is_ga7k41nm95cn0s4wkjqanw7, $m4is_ta6xqxkcdz0c5g3pk ) ? $m4is_ga7k41nm95cn0s4wkjqanw7 : array_key_first( $m4is_ta6xqxkcdz0c5g3pk );

return $m4is_aq3n8kjvpsvryrrf9exmx;
}
private function m4is_7qckhfvqtzgbs2ftejrcr61jkmm74( array $m4is_ta6xqxkcdz0c5g3pk, string $m4is_aq3n8kjvpsvryrrf9exmx ) : void {
$m4is_ek8adjz9yz7wvga34bby56 = 'memberium-sync-options';

m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_0ev16xnbdp();
echo '<div class="wrap">';

echo '<h3 class="nav-tab-wrapper">';

foreach ($m4is_ta6xqxkcdz0c5g3pk as $m4is_ga7k41nm95cn0s4wkjqanw7 => $m4is_hce1y1a4qd65zhnwsj ) {
$class = ($m4is_ga7k41nm95cn0s4wkjqanw7 == $m4is_aq3n8kjvpsvryrrf9exmx ) ? ' nav-tab-active' : '';

if ($m4is_ga7k41nm95cn0s4wkjqanw7 == $m4is_aq3n8kjvpsvryrrf9exmx ) {
echo "<span class='nav-tab{$class}'>{$m4is_hce1y1a4qd65zhnwsj}</span>";

}
else {
echo "<a class='nav-tab{$class}' href='?page={$m4is_ek8adjz9yz7wvga34bby56}&tab={$m4is_ga7k41nm95cn0s4wkjqanw7}'>{$m4is_hce1y1a4qd65zhnwsj}</a>";

}
}
}
private function m4is_179amejyky7ect4e( $m4is_aq3n8kjvpsvryrrf9exmx ) {
$m4is_kj8j9tm4wndhe7varne7ex93sgzj8wj2 = 'memberium_sync_api';

echo '</h3>';
echo '<div class="memberium_tabcontent" style="margin-top:10px;">';
echo '<div class="wrap">';
echo '<form method="POST" action="">';

echo '<input type="hidden" name="formtype" value="', $m4is_aq3n8kjvpsvryrrf9exmx, '">';
wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(),
 $m4is_kj8j9tm4wndhe7varne7ex93sgzj8wj2 );
$m4is_yvgm5dx8ht8rs54xkpspzc4feg = [
'operations' => 'sync-operations-show.php',
'categories' =>
 'sync-categories-show.php',
'contactfields' => 'sync-contactfields-show.php',
'buddypress' => 'sync-buddypress-show.php',
'affiliatefields' =>
 'sync-affiliatefields-show.php',
'wipe' => 'sync-wipe-show.php',
];
if ( array_key_exists( $m4is_aq3n8kjvpsvryrrf9exmx, $m4is_yvgm5dx8ht8rs54xkpspzc4feg ) ) {
require_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby( $m4is_yvgm5dx8ht8rs54xkpspzc4feg[$m4is_aq3n8kjvpsvryrrf9exmx] );

}
else {
$this->m4is_132xe588j->m4is_h9t0p5fc1('easter_egg' );
echo wp_oembed_get('https://www.youtube.com/watch?v=zgvXtexdgAM', ['autoplay' =>
 '1']);
echo '<p>Klaatu Barada N... Necktie... Neckturn... Nickel...</p><p>It\'s an "N" word, it\'s definitely an "N" word!</p><p>Klaatu... Barada... N...</p>';

}
echo '</form>';
echo '</div>';
echo '</div>';
echo '</div>';
}
private function m4is_whqr97gckakemy() : void {
$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true );

$m4is_06c8s5xs94f91335gnaey25 = $m4is_06c8s5xs94f91335gnaey25['mc'];
$m4is_xyfzj0fnmp5g4 = [];
$m4is_xyfzj0fnmp5g4[] = [
'id' => 0,

'text' => '(None)'
];
foreach ( (array) $m4is_06c8s5xs94f91335gnaey25 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_xyfzj0fnmp5g4[] = [
'id' =>
 $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' => $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 . ' (' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ')'
];

}
$m4is_xyfzj0fnmp5g4 = json_encode($m4is_xyfzj0fnmp5g4 );
unset($m4is_06c8s5xs94f91335gnaey25, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 );
echo '<script>';
echo 'var actionsetlist = ', m4is_w3pp5rsxdc03bns3::m4is_jzv3mdxqzxth481vapvxqkn5k8h(),
 ";\n";
echo 'var taglist = ', $m4is_xyfzj0fnmp5g4, ";\n";
echo '</script>';
unset( $m4is_xyfzj0fnmp5g4 );
}
}
