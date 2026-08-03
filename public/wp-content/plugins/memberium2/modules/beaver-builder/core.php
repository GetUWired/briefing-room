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


final class m4is_wdd99e2zfbwk {
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {}
public function m4is_c7vzza0dseqrv8k98vz4() : void {
add_action( 'memberium/cpt/is_public',
 [$this, 'm4is_4js9pzfsfpk2v'], 10, 2 );
add_action( 'wpal/block/access/init', [$this, 'm4is_z6c3r724qhd'] );
}
public function m4is_z6c3r724qhd(){
if ( is_admin() ) {
return;

}
if ( isset( $_GET['fl_builder'] ) ){
$this->m4is_p23fd116pvnjxr();
}
else{
$this->m4is_xpe0t3cfrjmnm2tyt7sve0dk();
}
}
public function m4is_4js9pzfsfpk2v( bool $m4is_r7mxjxrgcx,
 string $m4is_yhdk2h7srcr7n5mzjnw7m6b ) : bool {
if ( current_user_can( 'edit_posts' ) && isset( $_GET['fl_builder'] ) ) {
return true;

}
return $m4is_r7mxjxrgcx;
}
function m4is_p23fd116pvnjxr(){
static $m4is_g49xn8c0;
if ( ! isset( $m4is_g49xn8c0 ) ) {
include_once __DIR__ . '/' . 'editor.php';

$m4is_g49xn8c0 = m4is_bh35sg6ssp6mhk0qchw7qtndt5g7::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
return $m4is_g49xn8c0;
}
function m4is_xpe0t3cfrjmnm2tyt7sve0dk(){
static $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;

if ( ! isset( $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w ) ) {
include_once __DIR__ . '/' . 'frontend.php';
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_rsd655f0v4rbchffkyve1396rzdn::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
return $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;
}
}