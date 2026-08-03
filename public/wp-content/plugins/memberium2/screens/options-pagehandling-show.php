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
new m4is_b3s44n59t4gz4jc();

final class m4is_b3s44n59t4gz4jc {
private $m4is_132xe588j;
private $m4is_8ew58cpxmftgpw93gdffm4s9bbwy;
function __construct() {
$this->m4is_z6c3r724qhd();

$this->m4is_ranr89c2gngyncmfbwyag76f1rq();
}
private function m4is_z6c3r724qhd() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy = 'settings';
}
private function m4is_ranr89c2gngyncmfbwyag76f1rq() {
echo '<form method="POST" action="">';

echo '<ul>';
wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(), 'memberium_options_nonce' );
$this->m4is_femx7scq2xkw9w86gfj0a6kv4k5wf3rd();

echo '</ul>';
echo '<p><input type="submit" value="Update" class="button-primary"></p>';
echo '</form>';
}
private function m4is_femx7scq2xkw9w86gfj0a6kv4k5wf3rd() {
$m4is_zrxscpvhh7 = [
0 =>
 'No action',
1 => 'Disable Automatic Paragraphs',
2 => 'Delay Automatic Paragraphs',
];
$m4is_4k8qejpkk8yvp = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'dynamic_menus', 0 );
$m4is_v8t7xrkhkfjtxrfzdwa2kg5hk = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'two_pass_shortcode_filter', 0 );
$m4is_21443knzzqx7033gsnx7n7gz3xy2 = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'multi_language', 0 );
$m4is_79sx4pm7k5m0kwh8s3qg = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'cache_flush', 0 );
$m4is_5sbyfxrtt = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'cache_bust', 0 );
$m4is_mj5qevzr7xdq3yys4nj3yzzj5n1m4cc = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'wp_autop', 0 );

echo '<h3>Page Handling</h3>';
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Personal Menus', 'dynamic_menus',
 11934, $m4is_4k8qejpkk8yvp );
m4is_dv250ra9xbtaf::m4is_jt0y34knx7ws34fc4xjmj90gq( 'Automatic Paragraphs', 'wp_autop', $m4is_mj5qevzr7xdq3yys4nj3yzzj5n1m4cc,
 $m4is_zrxscpvhh7, [ 'help_id' => 21886 ] );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Two Pass Shortcode Handling', 'two_pass_shortcode_filter',
 8227, $m4is_v8t7xrkhkfjtxrfzdwa2kg5hk );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Multi-Language Support', 'multi_language',
 14684, $m4is_21443knzzqx7033gsnx7n7gz3xy2 );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Force Rewrite Cache Flush', 'cache_flush',
 9636, $m4is_79sx4pm7k5m0kwh8s3qg );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Discourage Browser Caching', 'cache_bust', 13292,
 $m4is_5sbyfxrtt );

}
}
