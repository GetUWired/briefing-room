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


function m4is_2813a7g88a8sfyxpff9tfp(){
return m4is_0nagc31yxq68fqaa9x::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}

class m4is_0nagc31yxq68fqaa9x {

protected $to_json = [];


protected $print_scripts = false;

private function __construct() {
}

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

function m4is_2xkdrr1weebvryk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = null,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'src' => '',
'time_tags' =>
 '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_nm59dwx00swyf2p07d0 = [];
$m4is_2dejcpc3d6tfkjzqnhk9e2m4keb0 = ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['time_tags'] > '' ) ? array_filter( explode( ',',
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['time_tags'] ) ) : [];
if (! empty($m4is_2dejcpc3d6tfkjzqnhk9e2m4keb0) && !empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['src']) ) {
foreach ($m4is_2dejcpc3d6tfkjzqnhk9e2m4keb0 as $m4is_9xm97x33gn7j75 =>
 $m4is_k480exmyw3wdm829yakg4qgr2mzegx7b) {
$time_tag_array = array_filter( explode( '|', $m4is_k480exmyw3wdm829yakg4qgr2mzegx7b ) );

$m4is_qm78qahrsjrp9v9vf2phj31x = ( isset( $time_tag_array[0] ) ) ? $time_tag_array[0] : false;
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = ( isset( $time_tag_array[1] ) ) ? $time_tag_array[1] : false;

if ( $m4is_qm78qahrsjrp9v9vf2phj31x && $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ){
$m4is_nm59dwx00swyf2p07d0[] = [
'time' => $this->m4is_9km7t6c57mkdm0j36nng5n117g($m4is_qm78qahrsjrp9v9vf2phj31x),

'tag_id' => $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0
];
}
}
$m4is_xd7vayb6yzskd7r6zc91s83wejq1xgzf = $this->m4is_kaxm3bntp7tyz0j8t1281q205($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['src']);

$this->to_json[] = [
'src' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['src'],
'time_tags' => $m4is_nm59dwx00swyf2p07d0,
'type' => $this->m4is_kaxm3bntp7tyz0j8t1281q205($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['src']),

];
if (! $this->print_scripts) {
wp_register_script( 'memberium-video-progress', plugin_dir_url( __FILE__ ) . 'js/video-progress.js',
 ['jquery'], m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_5kywzj74m8ht8s0(), true );
wp_enqueue_script( 'memberium-video-progress' );

add_action('wp_print_footer_scripts', [$this, 'm4is_q0e8966smfbn8e2wrqtyhtak'], 9999 );
$this->print_scripts = true;
}
}
}

function m4is_kaxm3bntp7tyz0j8t1281q205($m4is_bfeqyj37j7k1q9vzy5n) {
$m4is_txs4exaaj228cv2wexpc0b0e22tdh4 = $m4is_5mmhd28pkry84b5 = $is_wistia = $is_video = false;

$m4is_kq5pj64q0nz87gm0p2tdb92a1sf7he = '#^https?://(?:www\.)?(?:youtube\.com/watch|youtu\.be/)#';
$m4is_07ddq4pfjyfjy7rn = '#^https?://(.+\.)?vimeo\.com/.*#';

$m4is_txs4exaaj228cv2wexpc0b0e22tdh4 = ( preg_match( $m4is_07ddq4pfjyfjy7rn, $m4is_bfeqyj37j7k1q9vzy5n ) );
$m4is_5mmhd28pkry84b5 = ( preg_match( $m4is_kq5pj64q0nz87gm0p2tdb92a1sf7he,
 $m4is_bfeqyj37j7k1q9vzy5n ) );
$m4is_h7zwy5f0w3y9gx3wm = ($m4is_5mmhd28pkry84b5) ? 'youtube' : false;
$m4is_h7zwy5f0w3y9gx3wm = ($m4is_txs4exaaj228cv2wexpc0b0e22tdh4) ? 'vimeo' : $m4is_h7zwy5f0w3y9gx3wm;

return $m4is_h7zwy5f0w3y9gx3wm;
}

function m4is_q0e8966smfbn8e2wrqtyhtak() {
m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_tjsj82hvr2t0b0y57bd('mvp_params',
 $this->to_json);
}

function m4is_9km7t6c57mkdm0j36nng5n117g($m4is_qm78qahrsjrp9v9vf2phj31x){
$m4is_9hn10t6tx08fh8 = preg_replace("/^([\d]{1,2})\:([\d]{2})$/",
 "00:$1:$2", $m4is_qm78qahrsjrp9v9vf2phj31x);
sscanf($m4is_9hn10t6tx08fh8, "%d:%d:%d", $m4is_k30wygm1g19d8ek8hb2fn7jjmvm5k, $m4is_xh5hbtxjymagvs9e,
 $m4is_31rh1fzd5mw48crhtxa24tszetb74syg);
return ( $m4is_k30wygm1g19d8ek8hb2fn7jjmvm5k * 3600 + $m4is_xh5hbtxjymagvs9e * 60 + $m4is_31rh1fzd5mw48crhtxa24tszetb74syg );

}
}
