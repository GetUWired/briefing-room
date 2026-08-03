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


final class m4is_mhw7rfmw9hzhn0j09nnjhvz99e {

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {}

public function m4is_c7vzza0dseqrv8k98vz4() : void {
add_action( 'wpal/block/access/init',
 [$this, 'm4is_z6c3r724qhd'] );
}
function m4is_z6c3r724qhd(){
add_action( 'elementor/element/after_section_end', [$this, 'm4is_2ypx158wytpds'],
 10, 2 ); 
add_action( 'elementor/editor/before_enqueue_scripts', [$this, 'm4is_azjxph35trpc'] ); 

if ( is_admin() && ! wp_doing_ajax() ) {
return;

}
add_action( 'template_redirect', [ $this, 'm4is_ycbskxn9fg14apamvmxv20q' ], PHP_INT_MAX );
}



public function m4is_xpe0t3cfrjmnm2tyt7sve0dk() : m4is_4rgafzx06709hbz2zfhr9rjtmekrm3c {
static $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;

if( ! isset( $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w ) ) {
include_once __DIR__ . '/frontend.php';
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_4rgafzx06709hbz2zfhr9rjtmekrm3c::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
return $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;
}

public function m4is_ycbskxn9fg14apamvmxv20q(){
$m4is_xhc1st235sr2d7gzp3f2c9 = \Elementor\Plugin::instance();

if ( $m4is_xhc1st235sr2d7gzp3f2c9->editor->is_edit_mode() ) {
return;
}
if ( $m4is_xhc1st235sr2d7gzp3f2c9->preview->is_preview_mode() ) {
return;

}
if( !empty($_GET['action']) && $_GET['action'] === 'elementor' ){
return;
}

remove_action( 'elementor/element/after_section_end',
 [$this, 'm4is_2ypx158wytpds'], 10 );

$this->m4is_xpe0t3cfrjmnm2tyt7sve0dk();
}






public function m4is_p23fd116pvnjxr() {
static $m4is_g49xn8c0;

if( ! isset( $m4is_g49xn8c0 ) ) {
include_once __DIR__ . '/editor.php';
$m4is_g49xn8c0 = m4is_k7wrtrpby9szxfesw2::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
return $m4is_g49xn8c0;
}

public function m4is_2ypx158wytpds( $m4is_ze4gc5gdxe0vk8nf0zg7, $m4is_hfynswyf7h124tzpvgeex ) : void {
if ( 'section_advanced' === $m4is_hfynswyf7h124tzpvgeex || '_section_style' === $m4is_hfynswyf7h124tzpvgeex ) {
$this->m4is_p23fd116pvnjxr()->m4is_e9zx04v243yw1x794x3qc34dt1( $m4is_ze4gc5gdxe0vk8nf0zg7,
 $m4is_hfynswyf7h124tzpvgeex );
}
}

public function m4is_azjxph35trpc() : void {
$this->m4is_p23fd116pvnjxr()->m4is_yvapnth69qrm5r69xze3cm9rdg3n919();

}
}