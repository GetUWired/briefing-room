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


class m4is_z8qpvce7g2ybca {
private $api_key;
private $api_secret;
private $api_base = 'https://api.zoom.us/v2/';
private $api_count = 0;

function __construct( $m4is_j8j55t8dz79m7, $m4is_rx2cjhd9 ){
$this->api_key = $m4is_j8j55t8dz79m7;
$this->api_secret = $m4is_rx2cjhd9;

}

function m4is_n7ce1ph3h1kzmt249y3b30y($m4is_sjjed77r6tc8e, $m4is_g61yzqs7ecta0xztr70d7v = false) {
$m4is_gv7vjyv2c6g3nepw6 = ['headers' =>
 $this->m4is_j5chv8w43()];
if( is_array($m4is_g61yzqs7ecta0xztr70d7v) ){
$m4is_gv7vjyv2c6g3nepw6 = wp_parse_args($m4is_g61yzqs7ecta0xztr70d7v,
 $m4is_gv7vjyv2c6g3nepw6);
}
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = wp_remote_get($this->api_base.$m4is_sjjed77r6tc8e, $m4is_gv7vjyv2c6g3nepw6);

$this->api_count++;
return $this->m4is_vahmv9m1sx($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz);
}

function m4is_m3e7cxx64vz3($m4is_sjjed77r6tc8e,
 $m4is_5yckgb90tqkz5gmkgx = false){
return $this->m4is_r01ehv7hy4h2bhcwgcjq8gjnpxn237( $this->api_base.$m4is_sjjed77r6tc8e, 'POST',
 $m4is_5yckgb90tqkz5gmkgx );
}

function m4is_cafxb7chwta38ab5c69qkw9p120ht( $m4is_sjjed77r6tc8e, $m4is_5yckgb90tqkz5gmkgx = false ){
return $this->m4is_r01ehv7hy4h2bhcwgcjq8gjnpxn237( $this->api_base.$m4is_sjjed77r6tc8e,
 'PATCH', $m4is_5yckgb90tqkz5gmkgx );
}

function m4is_d73cgb1e1dj3kcxpr2s0f9( $m4is_sjjed77r6tc8e, $m4is_5yckgb90tqkz5gmkgx = false ){
return $this->m4is_r01ehv7hy4h2bhcwgcjq8gjnpxn237( $this->api_base.$m4is_sjjed77r6tc8e,
 'PUT', $m4is_5yckgb90tqkz5gmkgx );
}

function m4is_n0fnsxjtsy1cjbc8jtmwb8ftwn( $m4is_sjjed77r6tc8e, $m4is_5yckgb90tqkz5gmkgx = false ){
return $this->m4is_r01ehv7hy4h2bhcwgcjq8gjnpxn237( $this->api_base.$m4is_sjjed77r6tc8e,
 'DELETE', $m4is_5yckgb90tqkz5gmkgx );
}

function m4is_r01ehv7hy4h2bhcwgcjq8gjnpxn237( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, $m4is_sjjed77r6tc8e,
 $m4is_5yckgb90tqkz5gmkgx = false ){
$m4is_gv7vjyv2c6g3nepw6 = [
'method' => $m4is_sjjed77r6tc8e,
'headers' => $this->m4is_j5chv8w43()
];

if($m4is_5yckgb90tqkz5gmkgx){
$m4is_gv7vjyv2c6g3nepw6['body'] = ( is_array($m4is_5yckgb90tqkz5gmkgx) ) ? json_encode($m4is_5yckgb90tqkz5gmkgx) : $m4is_5yckgb90tqkz5gmkgx;

}
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = wp_remote_request($m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, $m4is_gv7vjyv2c6g3nepw6);
$this->api_count++;

return $this->m4is_vahmv9m1sx($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz);
}

function m4is_j5chv8w43() {
return [
'Authorization' => 'Bearer ' . $this->m4is_ea9gbhydzke95mq76fvh(),

'Content-Type' => 'application/json',
'Accept' => 'application/json',
];
}

function m4is_ea9gbhydzke95mq76fvh(){
$m4is_qm78qahrsjrp9v9vf2phj31x = time() * 1000 - 30000;

$m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp = json_encode(['typ' => 'JWT','alg' => 'HS256']);
$m4is_1p0m8z3y5xh4s3vstzny20xwx14n6jwh = $this->m4is_hc46tgxa3y3vbafv5njcw4qvhpx0($m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp);

$m4is_h3hcd46tpss4jb2xjq52pe = json_encode(['iss' => $this->api_key, 'exp' => $m4is_qm78qahrsjrp9v9vf2phj31x]);
$m4is_880jcbz89wn29931 = $this->m4is_hc46tgxa3y3vbafv5njcw4qvhpx0($m4is_h3hcd46tpss4jb2xjq52pe);

$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = hash_hmac('sha256', $m4is_1p0m8z3y5xh4s3vstzny20xwx14n6jwh . "." . $m4is_880jcbz89wn29931, $this->api_secret,
 true);
$m4is_1nctz89r97vmpph1vxw29w3sqz0gesg1 = $this->m4is_hc46tgxa3y3vbafv5njcw4qvhpx0($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn);
$m4is_1hn9yqxj13zps5m8hd6yhjqbvw2v3e2 = $m4is_1p0m8z3y5xh4s3vstzny20xwx14n6jwh . "." . $m4is_880jcbz89wn29931 . "." . $m4is_1nctz89r97vmpph1vxw29w3sqz0gesg1;

return $m4is_1hn9yqxj13zps5m8hd6yhjqbvw2v3e2;
}
function m4is_hc46tgxa3y3vbafv5njcw4qvhpx0($m4is_d60kn1d3yvprp62rs332){
$m4is_zq06n4mh55m5mmcqy7dgv89c9h = base64_encode($m4is_d60kn1d3yvprp62rs332);

if ($m4is_zq06n4mh55m5mmcqy7dgv89c9h === false) {
return false;
}
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = strtr($m4is_zq06n4mh55m5mmcqy7dgv89c9h,
 '+/', '-_');
return rtrim($m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, '=');
}

function m4is_f49xcgramzae08ga4yhhm8d08h( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_pe0qmemqt ){
$m4is_qm78qahrsjrp9v9vf2phj31x = time() * 1000 - 30000;
$m4is_d60kn1d3yvprp62rs332 = base64_encode($this->api_key.$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh.$m4is_qm78qahrsjrp9v9vf2phj31x.$m4is_pe0qmemqt);

$m4is_gvt2hckttpbz8zr7m1a5abrr = hash_hmac('sha256', $m4is_d60kn1d3yvprp62rs332, $this->api_secret, true);
$m4is_gvt2hckttpbz8zr7m1a5abrr = base64_encode($m4is_gvt2hckttpbz8zr7m1a5abrr);

$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = "{$this->api_key}.{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.{$m4is_qm78qahrsjrp9v9vf2phj31x}.{$m4is_pe0qmemqt}.{$m4is_gvt2hckttpbz8zr7m1a5abrr}";

return rtrim(strtr(base64_encode($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn), '+/', '-_'), '=');
}

function m4is_vahmv9m1sx( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ){
if ( is_wp_error($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz) ){
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;

}
else {
return json_decode(wp_remote_retrieve_body($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz));
}
}
}