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

/**
 * Divi Integration Core Class
 *
 * Manages the integration between Memberium and the Divi theme builder, providing
 * access control and functionality in both the Divi visual builder and frontend rendering.
 * This class follows the singleton pattern and acts as a facade for the editor and
 * frontend integration components.
 *
 * The integration works by hooking into Divi's module loading system and initializing
 * either the editor or frontend components depending on the current context (visual
 * builder vs. regular page rendering).
 *
 * @package    modules/divi
 * @author     Curtis Krauter <curtis@businesstechninjas.com>
 * @copyright  2012-2026 David J Bullock
 * @license    Proprietary
 */


final class m4is_j7vhxgenx2sc2msyayxg6wc7 {

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {}

public function m4is_c7vzza0dseqrv8k98vz4(): void {
add_action( 'wpal/block/access/init',
 [$this, 'm4is_z6c3r724qhd'] );
}

public function m4is_z6c3r724qhd(): void{
add_action('et_builder_modules_loaded', [$this, 'm4is_rk3dn5bgpjc1qe554'],
 PHP_INT_MAX);
add_action('admin_enqueue_scripts', [$this, 'm4is_423p8ssb']);
}

public function m4is_rk3dn5bgpjc1qe554(): void {
if( is_admin() || isset( $_GET['et_fb'] ) ) {
$m4is_batctech52pjtkswvzfysywrbr2n = isset( $_GET['page'] ) && $_GET['page'] == 'et_theme_builder';

$m4is_batctech52pjtkswvzfysywrbr2n = $m4is_batctech52pjtkswvzfysywrbr2n || isset( $_GET['et_tb'] );
if ( $m4is_batctech52pjtkswvzfysywrbr2n <> 'et_theme_builder' && $m4is_batctech52pjtkswvzfysywrbr2n == false ) {
$this->m4is_p23fd116pvnjxr()->m4is_z6c3r724qhd();

}
}
else{
$this->m4is_xpe0t3cfrjmnm2tyt7sve0dk()->m4is_z6c3r724qhd();
}
}

public function m4is_423p8ssb( $m4is_sr96vk8tz2fjh0371e0hb8dc9z80 ): void {
$m4is_78sagkn3zj76vt37tnxx1f8p = ['edit.php',
 'post-new.php', 'post.php'];
if ( in_array( $m4is_sr96vk8tz2fjh0371e0hb8dc9z80, $m4is_78sagkn3zj76vt37tnxx1f8p ) ) {
wp_enqueue_style( 'select2css_divi',
 plugin_dir_url(__FILE__) . 'select2_divi.css', false, '1.0.5', 'all' );
}
}

public function m4is_p23fd116pvnjxr(): m4is_hcv65y6pqrn {
static $m4is_g49xn8c0 = null;

if ( is_null( $m4is_g49xn8c0 ) ) {
include_once __DIR__ . '/' . 'editor.php';
$m4is_g49xn8c0 = m4is_hcv65y6pqrn::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
return $m4is_g49xn8c0;
}

public function m4is_xpe0t3cfrjmnm2tyt7sve0dk(): m4is_634t4b0g0k3g9s {
static $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = null;

if( is_null( $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w ) ) {
include_once __DIR__ . '/' . 'frontend.php';
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_634t4b0g0k3g9s::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
return $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;
}
}