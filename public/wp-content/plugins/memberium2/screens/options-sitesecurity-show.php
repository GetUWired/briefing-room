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
m4is_gq832wb7naysjz48q793rc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

final class m4is_gq832wb7naysjz48q793rc {
private $m4is_132xe588j;
private $m4is_8ew58cpxmftgpw93gdffm4s9bbwy;
public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_ranr89c2gngyncmfbwyag76f1rq();

}
function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy = 'settings';
}
private function m4is_ranr89c2gngyncmfbwyag76f1rq() {
echo <<<HTMLBLOCK

			<form method="POST" action="">
		HTMLBLOCK;

wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(), 'memberium_options_nonce' );
$this->m4is_36e8nyj512xq2hy6a5cbazffqdy();

$this->m4is_femx7scq2xkw9w86gfj0a6kv4k5wf3rd();
$this->m4is_axy0jy9vm76gf5x597tn9w1a();
$this->m4is_m93jw5zs3fse();
$this->m4is_2ctvjyxd();

echo <<<HTMLBLOCK

			<p><input type="submit" value="Update" class="button-primary"></p>
			</form>
		HTMLBLOCK;
$this->m4is_d1f8816wvd2myca7a2dsb0qt3();

}
private function m4is_36e8nyj512xq2hy6a5cbazffqdy() {
$m4is_jyr1xs77dpj8ecdv5jkbp2mbp = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'allow_wpadmin', 'manage_options' );
$m4is_t5bbrrg99s75gqvr823zf = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'attachment_pages', 0 );
$m4is_qgf4ybemtzkw744qe68sqx1g0vf = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'protect_feeds', 0 );
$m4is_bvag9k9h359 = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'disable_xframe', 0 );
$m4is_reqk4j37r56s6zn7zh4kq0ba0ndfx = (string) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'allow_wpadmin_dashboard', 'manage_options' );
$m4is_kwyyytym7h39 = (string) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'allow_wpadmin_titlebar', 'manage_options' );
echo '<h3>Site Restrictions</h3>';
echo '<ul>';
if ( empty( $m4is_reqk4j37r56s6zn7zh4kq0ba0ndfx ) ) {
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Allow Access to WP Dashboard',
 'allow_wpadmin', 1192, $m4is_jyr1xs77dpj8ecdv5jkbp2mbp );
}
m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep( 'Allow WP Admin Dashboard',
 'allow_wpadmin_dashboard', $m4is_reqk4j37r56s6zn7zh4kq0ba0ndfx, 'capabilitylistdropdown', ['style' => 'width:400px !important;', 'multiple' =>
 'multiple', 'help_id' => 1192] );
m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep( 'Show Titlebar', 'allow_wpadmin_titlebar',
 $m4is_kwyyytym7h39, 'capabilitylistdropdown', ['style' => 'width:400px !important;', 'multiple' => 'multiple', 'help_id' => 21894]);

m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Disable Attachment Pages', 'attachment_pages', 17276, $m4is_t5bbrrg99s75gqvr823zf );

m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Disable RSS Feeds', 'protect_feeds', 1214, $m4is_qgf4ybemtzkw744qe68sqx1g0vf );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Disable Clickjacking Protection',
 'disable_xframe', 26493, $m4is_bvag9k9h359 );
echo '</ul>';
echo '<hr>';
}
private function m4is_femx7scq2xkw9w86gfj0a6kv4k5wf3rd() {
$m4is_g8w9az6z243n8wkyqn = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'show_post_columns', true );
echo '<h3>Page Handling</h3>';
echo '<ul>';
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Show All Columns in Post List',
 'show_post_columns', 13294, $m4is_g8w9az6z243n8wkyqn );
echo '</ul>';
echo '<hr>';
}
private function m4is_axy0jy9vm76gf5x597tn9w1a() {
$m4is_x88b0n1d4450zeh78 = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'registration_url', 0 );
$m4is_378nbgfmpk0ek = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'new_user_registration_tag', 0 );
$m4is_6ky94hj316q14f6fj0p7kny78f41 = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'sync_new_wp_users', 0 );
$m4is_d3c1gzgh444ky4hbrr0t = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'extended_reg_fields', 0 );
echo '<h3>New User Registration</h3>';
echo '<ul>';
m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep('Registration Page',
 'registration_url', $m4is_x88b0n1d4450zeh78, 'pagelistdropdown', ['help_id' => 1211, 'style' => 'width:400px !important;'] );
m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep('New User Registration Tag',
 'new_user_registration_tag', $m4is_378nbgfmpk0ek, 'taglistdropdown', ['help_id' => 1181, 'style' => 'width:400px !important;'] );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww('Sync New Registrations to Keap',
 'sync_new_wp_users', 21903, $m4is_6ky94hj316q14f6fj0p7kny78f41 );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww('Extended Registration Fields',
 'extended_reg_fields', 21908, $m4is_d3c1gzgh444ky4hbrr0t );
echo '</ul>';
}
private function m4is_d1f8816wvd2myca7a2dsb0qt3() {
$m4is_ks8vtymq5mnfdva8ery634gen675sz = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_em263hzs53sqczbc25r8237pv9mm5vd();

echo '<script>';
echo 'var capabilitylist = ', $m4is_ks8vtymq5mnfdva8ery634gen675sz, ';';
echo '</script>';
}
private function m4is_m93jw5zs3fse() {
$m4is_bb2g76pd7h2yb = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'recaptcha_v2', 0 );
$m4is_0696nzazbsvakqqeyz11yebeb0t4m = (string) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'recaptcha_v2_site_key', '' );
$m4is_j80tzmc51kv5wg3brw3wetmn3 = (string) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 'recaptcha_v2_secret_key', '' );
echo '<hr />';
echo '<h3>reCAPTCHA v2</h3>';
echo '<ul>';
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Enable reCAPTCHA v2',
 'recaptcha_v2', 0, $m4is_bb2g76pd7h2yb );
m4is_dv250ra9xbtaf::m4is_f8vws9aeenhp( 'Site Key', 'recaptcha_v2_site_key', $m4is_0696nzazbsvakqqeyz11yebeb0t4m,
 [ 'help_id' => 0, 'style' => 'text-align:left;width:400px !important' ] );
m4is_dv250ra9xbtaf::m4is_f8vws9aeenhp( 'Secret Key', 'recaptcha_v2_secret_key',
 $m4is_j80tzmc51kv5wg3brw3wetmn3, [ 'help_id' => 0, 'style' => 'text-align:left;width:400px !important;' ] );
echo '</ul>';
}
private function m4is_2ctvjyxd() {
echo '<hr>';

echo '<h3>Secure Debug</h3>';
$m4is_g61yzqs7ecta0xztr70d7v = [
'label' => 'Debug IP Addresses',
'value' => (string) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'debug_ip', '' ),
'style' => 'width:375px;',
'help_id' => 0000,
'placeholder' => 'Comma separated list of IP addresses',
'help_text' =>
 null,

];
m4is_dv250ra9xbtaf::m4is_fnyrytswd4ra0cj8g9fka3e9( 'debug_ip', $m4is_g61yzqs7ecta0xztr70d7v ) ;
echo '<p style="margin-left: 300px;">Current IP:  ',
 m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z(), '</p>';
}
}
