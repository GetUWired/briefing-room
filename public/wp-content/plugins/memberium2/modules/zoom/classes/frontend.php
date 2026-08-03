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


class m4is_6hp7k6kfq8pqa4prwe03prv94cxj2 {
private $version;
private $to_json = [];

function __construct($m4is_t9svq56t4ysv1rsgy1g61g) {
$this->version = $m4is_t9svq56t4ysv1rsgy1g61g;

}

function frontend_scripts() {
$m4is_29gzevpx8rbkp = $this->version;
$m4is_j2epbkj6df0h31aymz = WPAL_ZOOM_URL . 'assets/';
wp_register_script("wpal-zoom-js",
 "{$m4is_j2epbkj6df0h31aymz}wpal-zoom.js", [], $m4is_29gzevpx8rbkp);
wp_register_style("wpal-zoom-css", "{$m4is_j2epbkj6df0h31aymz}wpal-zoom.css",
 [], $m4is_29gzevpx8rbkp, 'all');
add_action("wp_footer", [$this, "frontend_footer"]);
}

function zoom_event_func( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf, $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ){
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts([
'className' =>
 '',
'id' => 0,
'password' => '',
'host' => 0
], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j );

$m4is_x7eqgfqb7ykcm61axa9j = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['className'] > "" ? esc_attr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['className']) : "";

$m4is_x7eqgfqb7ykcm61axa9j = $m4is_x7eqgfqb7ykcm61axa9j > '' ? " {$m4is_x7eqgfqb7ykcm61axa9j}" : "";
$m4is_9yw8e8h1m49k2m1g64g = 'wpal-zoom-meetings';

$m4is_x7eqgfqb7ykcm61axa9j .= $m4is_x7eqgfqb7ykcm61axa9j > '' ? " {$m4is_9yw8e8h1m49k2m1g64g}" : $m4is_9yw8e8h1m49k2m1g64g;

$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = esc_attr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id']);

$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh > '' ? (int)str_replace(' ', '', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh) : 0;

$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = esc_attr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['password']);
$m4is_ef2x3c9292j = (int)esc_attr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['host']);

$m4is_pe0qmemqt = 0;

$m4is_d3q45j0657z07f7z0j971 = m4is_rw6961ens4ystt385wbswb2vfaa()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('api_key');

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();
if( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh < 1 ) {
return $this->display_error(__('Zoom event ID is required.',
 'wpal-zoom'));
}
else if( empty($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g) ){
return $this->display_error(__('Zoom event password is required.',
 'wpal-zoom'));
}
else if( empty($m4is_d3q45j0657z07f7z0j971) ){
return $this->display_error(__('Zoom api key is missing.', 'wpal-zoom'));

}

if( (int)$m4is_wk4dh1rnd3wmwvsggq51nhn87 < 1 ){
return $this->display_error(__('You must be logged in to join this event.', 'wpal-zoom'));

}
else {
$m4is_avgtbn3dgps2ea6xnvvnq9 = get_userdata( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ); 
$m4is_2j4fd1xcbq37fvwk9prbv8v9qn2rq1 = trim("{$m4is_avgtbn3dgps2ea6xnvvnq9->first_name} {$m4is_avgtbn3dgps2ea6xnvvnq9->last_name}");

$m4is_15yq5r4y88kyvr67sd3yq3a4aw916s = strtolower($m4is_avgtbn3dgps2ea6xnvvnq9->user_email);
$m4is_pe0qmemqt = ( $m4is_ef2x3c9292j > 0 && $m4is_ef2x3c9292j === $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ? 1 : 0;

}

$m4is_0mrfq9gqyppvkp9c4jkghsm6rv = 'wpal-zoom-iframe';
$m4is_4k3zyd9z1reghwnv8ff8j = WPAL_ZOOM_URL . 'templates/zoom-frame.html';


$m4is_qc36n7jdf = "<div id=\"{$m4is_9yw8e8h1m49k2m1g64g}\" class=\"{$m4is_x7eqgfqb7ykcm61axa9j}\">";
$m4is_qc36n7jdf .= "<iframe id=\"{$m4is_0mrfq9gqyppvkp9c4jkghsm6rv}\" data-src=\"{$m4is_4k3zyd9z1reghwnv8ff8j}\" allowfullscreen></iframe>";

$m4is_qc36n7jdf .= "</div>";

$this->set_to_json('zoom_meeting', [
'frameId' => $m4is_0mrfq9gqyppvkp9c4jkghsm6rv,
'buttonId' => 'wpal-start-event',

'eventID' => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'leaveUrl' => $m4is_4k3zyd9z1reghwnv8ff8j,
'passWord' => $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g,

'apiKey' => $m4is_d3q45j0657z07f7z0j971,
'userName' => $m4is_2j4fd1xcbq37fvwk9prbv8v9qn2rq1,
'userEmail' => $m4is_15yq5r4y88kyvr67sd3yq3a4aw916s,

'role' => $m4is_pe0qmemqt,
'signature' => m4is_rw6961ens4ystt385wbswb2vfaa()->api()->m4is_f49xcgramzae08ga4yhhm8d08h($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_pe0qmemqt)
]);
return $m4is_qc36n7jdf;
}

function display_error($m4is_bbjejhszczf2b3wrxm849kpfyzb5){
$m4is_qc36n7jdf = "<div class=\"wpal-zoom-error\">";

$m4is_qc36n7jdf .= "<p>{$m4is_bbjejhszczf2b3wrxm849kpfyzb5}</p>";
$m4is_qc36n7jdf .= "</div>";
return $m4is_qc36n7jdf;
}

function frontend_footer() {
$m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1 = $this->get_to_json();

if( !empty($m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1) ){
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();
$m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1['user_id'] = $m4is_wk4dh1rnd3wmwvsggq51nhn87;

if( isset($m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1['zoom_meeting']) ){
wp_enqueue_style('wpal-zoom-css');
wp_enqueue_script('wpal-zoom-js');

wp_localize_script('wpal-zoom-js', 'wpal_zoom_data', $m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1);
}
}
}

function set_to_json($m4is_j8j55t8dz79m7,
 $m4is_rqxytszfq5v6syth1csqqxvy5 = false) {
if ($m4is_rqxytszfq5v6syth1csqqxvy5) {
$this->to_json[$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
else {
unset($this->to_json[$m4is_j8j55t8dz79m7]);
}
}

function get_to_json($m4is_j8j55t8dz79m7 = false) {
if ($m4is_j8j55t8dz79m7) {
return (isset($this->to_json[$m4is_j8j55t8dz79m7])) ? $this->to_json[$m4is_j8j55t8dz79m7] : null;

}
else {
return $this->to_json;
}
}
}