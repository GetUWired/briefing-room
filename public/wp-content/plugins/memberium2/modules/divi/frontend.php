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

/**
 * Divi Frontend Access Control Class
 *
 * Handles access control for Divi modules on the frontend. This class intercepts the
 * rendering of Divi shortcodes and applies membership-based visibility rules based on
 * configuration set in the Divi editor. It supports both standard shortcodes and lazy-loaded
 * modules (Divi 4.10.0+), with special handling for elements that need pre-render checks
 * such as tab navigation items.
 *
 * @author     Curtis Krauter <curtis@businesstechninjas.com>
 * @copyright  2012-2026 David J Bullock
 * @license    Proprietary
 */


final class m4is_634t4b0g0k3g9s{
private $pre_render_tags = [];


static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}

private function __construct() {
$m4is_3kay1fcn3gb305mrvjx8fnxk = ['et_pb_tab'];
$this->pre_render_tags = (array) apply_filters( 'wpal/blocks/divi/pre_render_tags',
 $m4is_3kay1fcn3gb305mrvjx8fnxk );
}

public function m4is_z6c3r724qhd(): void {
add_filter( 'do_shortcode_tag', [$this, 'm4is_h1efbc9j727792sf8t11m968x35rnv'],
 PHP_INT_MAX, 3 );
add_action( 'et_builder_module_loaded', [$this, 'm4is_yeegtd6vt8ygrrjm4ft4sp1s'], PHP_INT_MAX, 2 );
$this->m4is_t4rycrzxvpw();

}

public function m4is_h1efbc9j727792sf8t11m968x35rnv( $m4is_gb01jqxh9ek2m, $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j ): string {
return $this->m4is_wdzg5gtrcz47n7y3g( (array) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j) ? $m4is_gb01jqxh9ek2m : '';

}

private function m4is_wdzg5gtrcz47n7y3g( array $m4is_44vca1rpez0e68fha3bm910f3ne2z ) : bool {
$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab = m4is_9db7hheseencedjdjv::PREFIX;

$m4is_y7084n6v67jme9va8yz = [];
if ( is_array( $m4is_44vca1rpez0e68fha3bm910f3ne2z ) ) {
foreach ( $m4is_44vca1rpez0e68fha3bm910f3ne2z as $m4is_hce1y1a4qd65zhnwsj =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( strpos( $m4is_hce1y1a4qd65zhnwsj, "{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_membership_levels" ) !== false && $m4is_rqxytszfq5v6syth1csqqxvy5 === 'on' ) {
$m4is_y7084n6v67jme9va8yz[] = (int) str_replace( "{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_membership_levels-",
 '', $m4is_hce1y1a4qd65zhnwsj );
}
}
}
$m4is_gv7vjyv2c6g3nepw6 = [
'memberships' => implode( ',', array_filter( $m4is_y7084n6v67jme9va8yz ) ),

'any_membership' => isset( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anymembership"] ) && $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anymembership"] === 'on' ? 1 : 0,

'logged_in_only' => isset( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_loggedin"] ) && $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_loggedin"] === 'on' ? 1 : 0,

'logged_out_only' => isset( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anonymous_only"] ) && $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anonymous_only"] === 'on' ? 1 : 0,

'invert_results' => isset( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_invert_results"] ) && $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_invert_results"] === 'on' ? 1 : 0,

'contact_ids' => empty( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_contact_ids"] ) ? '' : sanitize_text_field( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_contact_ids"] ),

'tags1' => empty( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags"] ) ? '' : $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags"],

'tags2' => empty( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags2"] ) ? '' : $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags2"],

'eval' => empty( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_eval"] ) ? '' : trim( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_eval"] ),

'asset_id' => empty( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_asset_id"] ) ? '' : sanitize_text_field( $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_asset_id"] ),

];
if ( ! empty( $m4is_gv7vjyv2c6g3nepw6['eval'] ) ) {
$m4is_gfjfgvn6sqctkzjaa = [
'%91' => '[',
'%93' => ']'
];
$m4is_gv7vjyv2c6g3nepw6['eval'] = strtr( $m4is_gv7vjyv2c6g3nepw6['eval'],
 $m4is_gfjfgvn6sqctkzjaa );
}
return m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_xpe0t3cfrjmnm2tyt7sve0dk()->m4is_5wz355nv6hgn5e9pt4gcezrrt2stqx9( $m4is_gv7vjyv2c6g3nepw6,
 'divi' );
}

private function m4is_t4rycrzxvpw(): void {
global $shortcode_tags;
$m4is_09egfvkpajy7 = [];
foreach ( $shortcode_tags as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_v6as5nsk6bzsgevdgk252erbytv0g ) {
if ( is_array( $m4is_v6as5nsk6bzsgevdgk252erbytv0g ) ) {
if ( $m4is_v6as5nsk6bzsgevdgk252erbytv0g[0] instanceof ET_Builder_Element || $m4is_v6as5nsk6bzsgevdgk252erbytv0g[0] instanceof ET_Builder_Module ) {
if( $this->m4is_6nj9dw9w6b07r3bxxajsw( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) ) {
$m4is_09egfvkpajy7[$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0] = $m4is_v6as5nsk6bzsgevdgk252erbytv0g;

remove_shortcode( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_v6as5nsk6bzsgevdgk252erbytv0g );
}
}
}
}
if ( ! empty( $m4is_09egfvkpajy7 ) ) {
foreach ($m4is_09egfvkpajy7 as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_v6as5nsk6bzsgevdgk252erbytv0g) {
$m4is_jz7ah0j3n2vk0qx9a4q95bt2dsgjec = $m4is_v6as5nsk6bzsgevdgk252erbytv0g[0];
$m4is_s37re1yymj = $m4is_v6as5nsk6bzsgevdgk252erbytv0g[1];

add_shortcode( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, function( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf, $m4is_g0y9c4fkx0yzgdqa390ht ) use ( $m4is_jz7ah0j3n2vk0qx9a4q95bt2dsgjec,
 $m4is_s37re1yymj ) {
$m4is_hartbe843crydzh = '';
if ( $this->m4is_wdzg5gtrcz47n7y3g( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j ) ) {
$m4is_hartbe843crydzh = $m4is_jz7ah0j3n2vk0qx9a4q95bt2dsgjec->$m4is_s37re1yymj($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf, $m4is_g0y9c4fkx0yzgdqa390ht);
}
return $m4is_hartbe843crydzh;

} );
}
}
}

public function m4is_yeegtd6vt8ygrrjm4ft4sp1s( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 $m4is_re955zqwq0c9x4hc18zgse846 ) {
if( $this->m4is_6nj9dw9w6b07r3bxxajsw( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) ) {
remove_shortcode( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 $m4is_re955zqwq0c9x4hc18zgse846 );
add_shortcode( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, function( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf, $m4is_g0y9c4fkx0yzgdqa390ht ) use ( $m4is_re955zqwq0c9x4hc18zgse846 ) {
$m4is_hartbe843crydzh = '';
if( $this->m4is_wdzg5gtrcz47n7y3g( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j ) ){
$m4is_hartbe843crydzh = $m4is_re955zqwq0c9x4hc18zgse846['instance']->_render( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf, $m4is_g0y9c4fkx0yzgdqa390ht );
}
return $m4is_hartbe843crydzh;
} );
}
}

private function m4is_6nj9dw9w6b07r3bxxajsw( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ): bool {
if( ! empty($this->pre_render_tags) && is_array($this->pre_render_tags) ){
return in_array($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 $this->pre_render_tags);
}
else {
return false;
}
}
}