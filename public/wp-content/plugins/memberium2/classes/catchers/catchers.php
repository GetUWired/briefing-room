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


final class m4is_psemnn0tqcdmhffqg5jht {

private static m4is_6y9612z4hjd6fzpap4r5n853641m1jc $m4is_132xe588j;
private static string $m4is_v4beyw7zqhr3;

private static object $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;
private static object $m4is_wsme5a297xh0v6d5y;
private static bool $m4is_v8etech3dypxytdan798jd;

private static string $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;

public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();
self::$m4is_v8etech3dypxytdan798jd = ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y();

self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'memberium';
m4is_9d8n6yra072mpxd0pczne9::m4is_67nqhgcsb0p43k96hkt933aagr1c7c6();
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

}

public static function m4is_z715mrrjcs843() {
if ( self::$m4is_v8etech3dypxytdan798jd) {
return;
}
if ( ! wp_verify_nonce( $_POST['_wpnonce'],
 'place_order_button-' . $_POST['form_id'] ) ) {
wp_die( 'Security Check Failed - Nonce Validation Error' );
}
if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['digital_signature'],
 $_POST['order_settings'] ) ) {
wp_die( 'Security Check Failed - Signature Validation Error' );
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_pae00hv11 = (int) $_POST['form_id'];
$m4is_q8ssasmrszmhk = unserialize( base64_decode( $_POST['order_settings'] ) );
$m4is_0906y1a1fyz3wa = self::$m4is_132xe588j->m4is_t8j85edw22dp( $m4is_q8ssasmrszmhk );

if ( $m4is_0906y1a1fyz3wa ) {
if ( $m4is_q8ssasmrszmhk['success_url'] > '' ) {
$m4is_pqecxfec342ksq5fzv1mg = $m4is_q8ssasmrszmhk['success_url'];

}
}
else {
if ( $m4is_q8ssasmrszmhk['fail_url'] > '' ) {
$m4is_pqecxfec342ksq5fzv1mg = $m4is_q8ssasmrszmhk['fail_url'];
}
}
self::$m4is_132xe588j->m4is_km2vptq0bwg( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

self::$m4is_132xe588j->m4is_mz8ypkzzr4fxz8e42njma37v6ge02( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
if ( $m4is_pqecxfec342ksq5fzv1mg > '' ) {
wp_redirect( $m4is_pqecxfec342ksq5fzv1mg,
 302, 'Memberium - Order Catcher' );
exit;
}
}

public static function m4is_ysvb6bmgf5mqbjqf6fyvdg7gqm9q0s() {
if ( self::$m4is_v8etech3dypxytdan798jd) {
return;

}
if ( ! self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v() ) {
return;
}
$m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y = 'memb_actionset_button';

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'memb_actionset_' . $_POST['form_id'] ) ) {
wp_die( _x( 'Security Check Failed - Nonce Validation Error',
 $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
}
if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['signature'],
 $_POST['action'] ) ) {
wp_die( _x( 'Security Check Failed - Signature Validation Error', $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );

}
$m4is_knxbec8fr3be1s2tkx0ydee0z = unserialize( base64_decode( $_POST['action'] ) );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = isset( $m4is_knxbec8fr3be1s2tkx0ydee0z['contact_id'] ) ? $m4is_knxbec8fr3be1s2tkx0ydee0z['contact_id'] : self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_pae00hv11 = isset( $_POST['form_id'] ) ? (int) $_POST['form_id'] : 0;
$m4is_z331qzpscyepmkg = isset( $_POST['order_id'] ) ? (int) $_POST['order_id'] : 0;

$m4is_pqecxfec342ksq5fzv1mg = isset( $m4is_knxbec8fr3be1s2tkx0ydee0z['redirect'] ) ? $m4is_knxbec8fr3be1s2tkx0ydee0z['redirect'] : '';

if ( empty( $m4is_pqecxfec342ksq5fzv1mg ) ) {
$m4is_pqecxfec342ksq5fzv1mg = isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : $_SERVER['REQUEST_URI'];

}
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0 ) {
self::$m4is_132xe588j->m4is_g3gsedmkn2e( $m4is_knxbec8fr3be1s2tkx0ydee0z['tokens'] );

self::$m4is_132xe588j->m4is_v6e1tsfbgfjk062m8xcq( $m4is_knxbec8fr3be1s2tkx0ydee0z['fus'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_knxbec8fr3be1s2tkx0ydee0z['goals'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_knxbec8fr3be1s2tkx0ydee0z['tags'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_knxbec8fr3be1s2tkx0ydee0z['action_id'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) ;

}
$m4is_g61yzqs7ecta0xztr70d7v = [
'action_id' => $m4is_knxbec8fr3be1s2tkx0ydee0z['action_id'],
'contact_id' => $m4is_knxbec8fr3be1s2tkx0ydee0z['contact_id'],

'fus' => $m4is_knxbec8fr3be1s2tkx0ydee0z['fus'],
'goals' => $m4is_knxbec8fr3be1s2tkx0ydee0z['goals'],
'tags' => $m4is_knxbec8fr3be1s2tkx0ydee0z['tags'],

'redirect' => $m4is_pqecxfec342ksq5fzv1mg,
];
do_action( 'memberium/actionset_button/clicked', $m4is_g61yzqs7ecta0xztr70d7v );
if ( $m4is_knxbec8fr3be1s2tkx0ydee0z['debug'] ) {
echo '<pre>';

echo __LINE__, " - Set ActionSet = {$m4is_knxbec8fr3be1s2tkx0ydee0z['action_id']}<br />";
echo __LINE__, " - Set ContactId = {$m4is_knxbec8fr3be1s2tkx0ydee0z['contact_id']}<br />";

echo __LINE__, " - Set FUS       = {$m4is_knxbec8fr3be1s2tkx0ydee0z['fus']}<br />";
echo __LINE__, " - Set Goals     = {$m4is_knxbec8fr3be1s2tkx0ydee0z['goals']}<br />";

echo __LINE__, " - Set Tags      = {$m4is_knxbec8fr3be1s2tkx0ydee0z['tags']}<br />";
echo __LINE__, " - Set Tokens    = {$m4is_knxbec8fr3be1s2tkx0ydee0z['tokens']}<br />";

echo __LINE__, " - Set Redirect  = {$m4is_pqecxfec342ksq5fzv1mg}<br />";
echo '</pre>';
echo '<a href="', $m4is_pqecxfec342ksq5fzv1mg,
 '">', _x('Continue...', $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ), '</a>';
exit;
}
if ( $m4is_pqecxfec342ksq5fzv1mg > '' ) {
wp_redirect( $m4is_pqecxfec342ksq5fzv1mg,
 302, 'Memberium Actionset Button' );
exit;
}
}

public static function m4is_qcdnvpe498hxgzbttghm7wn10() {
if ( empty( $_FILES['uploadedfiles'] ) ) {
return;

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y = 'memb_filebox_upload';
$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['signature'], $_POST['params'] ) ) {
wp_die( _x( 'Security Check Failed - Signature Validation Error',
 $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
exit;
}
$m4is_gv7vjyv2c6g3nepw6 = unserialize( base64_decode( $_POST['params'] ) );

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_gv7vjyv2c6g3nepw6['contact_id'];
$m4is_bmza14zbkhxzx48 = $m4is_gv7vjyv2c6g3nepw6['rename'];

$m4is_rrem37aqgssmz58vyyey4depdkt = count( $_FILES['uploadedfiles']['name'] );
$m4is_jnk53ndy026p0btc06g9zr78 = 0;
$m4is_g23zdgyesjvbtwqf = '';

$m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw = [];
for ( $m4is_5vcwef7pymrfb3zawe = 0; $m4is_5vcwef7pymrfb3zawe < $m4is_rrem37aqgssmz58vyyey4depdkt;
 $m4is_5vcwef7pymrfb3zawe++ ) {
$m4is_hce1y1a4qd65zhnwsj = $_FILES['uploadedfiles']['name'][$m4is_5vcwef7pymrfb3zawe];
$m4is_h7zwy5f0w3y9gx3wm = $_FILES['uploadedfiles']['type'][$m4is_5vcwef7pymrfb3zawe];

$m4is_jyzcvmas12pvrjf7v48ej = $_FILES['uploadedfiles']['tmp_name'][$m4is_5vcwef7pymrfb3zawe];
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = $_FILES['uploadedfiles']['error'][$m4is_5vcwef7pymrfb3zawe];

$m4is_jtce9x8yjvr96 = $_FILES['uploadedfiles']['size'][$m4is_5vcwef7pymrfb3zawe];
if ( $m4is_jtce9x8yjvr96 > $m4is_gv7vjyv2c6g3nepw6['maxsize'] || $m4is_bbjejhszczf2b3wrxm849kpfyzb5 == 2 ) {
$m4is_jnk53ndy026p0btc06g9zr78++;

$m4is_g23zdgyesjvbtwqf .= sprintf( '<p class="filebox_upload_error">File size of "%s" exceeded the %s limit.</p>', $m4is_hce1y1a4qd65zhnwsj,
 size_format( $m4is_gv7vjyv2c6g3nepw6['maxsize'] ) );
continue;
}
if (! empty($m4is_bbjejhszczf2b3wrxm849kpfyzb5) ) {
$m4is_jnk53ndy026p0btc06g9zr78++;

$m4is_g23zdgyesjvbtwqf .= sprintf( '<p class="filebox_upload_error">Upload of %s failed (%s).</p>', $m4is_hce1y1a4qd65zhnwsj, $m4is_bbjejhszczf2b3wrxm849kpfyzb5 );

continue;
}
$m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw[] = [
'name' => $m4is_hce1y1a4qd65zhnwsj,
'type' => $m4is_h7zwy5f0w3y9gx3wm,
'size' =>
 $m4is_jtce9x8yjvr96,
'error' => $m4is_bbjejhszczf2b3wrxm849kpfyzb5,
'tmp_name' => $m4is_jyzcvmas12pvrjf7v48ej,
];
}
if ($m4is_gv7vjyv2c6g3nepw6['no_errors'] && $m4is_jnk53ndy026p0btc06g9zr78) {
$m4is_g23zdgyesjvbtwqf .= '<p class="filebox_upload_error">Some uploads failed.  No files saved.</p>';

$m4is_jnk53ndy026p0btc06g9zr78++;
}
else {
foreach($m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw as $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7) {

if (! empty($m4is_bmza14zbkhxzx48) ) {
$m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['name'] = $m4is_bmza14zbkhxzx48 . '.' . pathinfo( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['name'],
 PATHINFO_EXTENSION );
}

$m4is_4ws74658at6j0fwjd45ae6ee7nvmyyw = base64_encode( file_get_contents( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['tmp_name'] ) );

$m4is_hartbe843crydzh = self::$m4is_wsme5a297xh0v6d5y->uploadFile( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['name'], $m4is_4ws74658at6j0fwjd45ae6ee7nvmyyw,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
if ( $m4is_hartbe843crydzh < 1 ) {
$m4is_g23zdgyesjvbtwqf .= substr( $m4is_hartbe843crydzh,
 strpos($m4is_hartbe843crydzh, ']') + 1, -1 ) . ' for ' . $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['name'];
}
unset($m4is_4ws74658at6j0fwjd45ae6ee7nvmyyw);

unlink($m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['tmp_name']);
if (! (int) $m4is_hartbe843crydzh) {
$m4is_jnk53ndy026p0btc06g9zr78++;
}
}
m4is_sgvby6tzxdj27z0k9vsngxtx::m4is_e7jjxzy2kbemn0t2wz6ckrv8h8( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 true );
}
$m4is_j8j55t8dz79m7 = 'memberium::file_upload_msg::' . self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
if ( $m4is_jnk53ndy026p0btc06g9zr78 ) {


$m4is_hartbe843crydzh = set_transient( $m4is_j8j55t8dz79m7,
 $m4is_g23zdgyesjvbtwqf, 3600 );
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_7y73m86td53bf8re8( $m4is_g23zdgyesjvbtwqf );
self::$m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_gv7vjyv2c6g3nepw6['failure_goals'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_gv7vjyv2c6g3nepw6['failure_actionsets'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_gv7vjyv2c6g3nepw6['failure_tags'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( ! empty( $m4is_gv7vjyv2c6g3nepw6['failure_url'] ) ) {
wp_redirect( $m4is_gv7vjyv2c6g3nepw6['failure_url'], 302 );
die();
}
}
else {


$m4is_hartbe843crydzh = set_transient( $m4is_j8j55t8dz79m7,
 $m4is_gv7vjyv2c6g3nepw6['success_msg'], 3600 );
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_7y73m86td53bf8re8( $m4is_gv7vjyv2c6g3nepw6['success_msg'] );

self::$m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_gv7vjyv2c6g3nepw6['success_goals'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_gv7vjyv2c6g3nepw6['success_actionsets'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_gv7vjyv2c6g3nepw6['success_tags'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( ! empty( $m4is_gv7vjyv2c6g3nepw6['success_url'] ) ) {
wp_redirect( $m4is_gv7vjyv2c6g3nepw6['success_url'], 302 );
die();
}
}
}

public static function m4is_bg9r7kxpbbd80nm542d07gmv34xg4() {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_pae00hv11 = $_POST['form_id'];
if (! wp_verify_nonce($_POST['_wpnonce'], 'memb_placeorder_' . $m4is_pae00hv11) ) {
wp_die( 'Security Check Failed - Nonce Validation Error' );

}
if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['digital_signature'], $_POST['params'] ) ) {
wp_die( 'Security Check Failed - Signature Validation Error' );

}
$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab = unserialize( base64_decode( $_POST['params'] ) );
if ( empty( $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['lead_affiliate_id'] ) || empty( $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['sale_affiliate_id'] ) ) {

$m4is_k7p8pmxsbkqrje3y20 = 'Invoice';

$m4is_7b2yfzk0054 = [ 'AffiliateId', 'LeadAffiliateId' ];
$m4is_j34bmw9dcjexfj1qpz = [ 'ContactId' => (int) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['contact_id'] ];

$m4is_ns7cayak3vne92c21vvb8en734g8 = 'Id';
$m4is_z81tvhx0by6g88js7vkdv38x90w7x = false;
$m4is_qpzk7kkc6v2bhxchqns6f9m = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj( $m4is_k7p8pmxsbkqrje3y20,
 1, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_7b2yfzk0054, $m4is_ns7cayak3vne92c21vvb8en734g8, $m4is_z81tvhx0by6g88js7vkdv38x90w7x );
if ( count( $m4is_qpzk7kkc6v2bhxchqns6f9m ) ) {
if ( empty( $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['lead_affiliate_id'] ) ) {
$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['lead_affiliate_id'] = isset( $invoice[0]['LeadAffiliateId'] ) ? $invoice[0]['LeadAffiliateId'] : 0;

}
if (empty($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['sale_affiliate_id']) ) {
$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['sale_affiliate_id'] = isset( $invoice[0]['AffiliateId'] ) ? $invoice[0]['AffiliateId'] : 0;

}
}
}
$m4is_mqngqwpvn9gebshs3qkf54653qfdh9k = self::$m4is_wsme5a297xh0v6d5y->placeOrder(
(int) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['contact_id'],

(int) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['creditcard_id'],
(int) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['payplan_id'],
(array) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['product_ids'],

(array) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['subscription_ids'],
(bool) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['process_specials'],

(array) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['promo_codes'],
(int) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['lead_affiliate_id'],
(int) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['sale_affiliate_id']
);


$m4is_0906y1a1fyz3wa = (int) $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k['InvoiceId'];
$m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y = (int) $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k['OrderId'];

if ( $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k['Successful'] == 'true' ) {
$m4is_vne43m6mgyja5fm0k1sj99yry8g = $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['success_actionset'];

$m4is_exf0cmscjsfyk = $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['success_goal'];
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['success_tag'];

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['success_url'];
if ( ! empty( $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['order_title'] ) ) {
m4is_xm67qjyegqdeb9wqcm::m4is_5smzakqeahg0vdxh35zwmhx7kj01s8( 'Job',
 $m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y, ['JobTitle' => $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['order_title']] );
}
}
else {
$m4is_vne43m6mgyja5fm0k1sj99yry8g = $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['failure_actionset'];

$m4is_exf0cmscjsfyk = $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['failure_goal'];
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['failure_tag'];

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['failure_url'];
if ( $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['delete_failed'] ) {
self::$m4is_wsme5a297xh0v6d5y->deleteInvoice( $m4is_0906y1a1fyz3wa );

if ( ! empty( $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['subscription_ids'] ) ) {
m4is_bbwjksaqsay3yt68xq9afn::m4is_bh0t5n9vbqap5vhzh5rg7k3rpj62e( $m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y );

}
}
}
self::$m4is_132xe588j->m4is_hy1y99cxmzwtdy1n0hd475c3vff8eyxm( $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['contact_id'], $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 $m4is_vne43m6mgyja5fm0k1sj99yry8g, $m4is_exf0cmscjsfyk );
if ( ! empty( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) ) {
$m4is_gv7vjyv2c6g3nepw6 = [
'orderId' =>
 rawurlencode( $m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y ),
'invoiceId' => rawurlencode( $m4is_0906y1a1fyz3wa ),
];
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = add_query_arg( $m4is_gv7vjyv2c6g3nepw6,
 $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq );
wp_redirect( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, 302 );
exit;
}
}

public static function m4is_5nsqh0nq2xf6gsj911zargp8g1a5hhq() { 
$m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y = 'memb_resetfeedurl_button';

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'memb_resetfeedurl_' . $_POST['form_id'] ) ) {
wp_die( _x('Security Check Failed - Nonce Validation Error',
 $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
exit;
}
m4is_8cw98mp72zyj4wx2kqhny4bcv90::m4is_wns62xcz9jrsegbsf67();

return;
}

public static function m4is_5dr662sswtt() {
if ( self::$m4is_v8etech3dypxytdan798jd) {
return;
}
if (! self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v() ) {
return;

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y = 'memb_list_subscriptions';
$m4is_r53562w9befcb2kh7rm4p7n5 = unserialize( base64_decode( $_POST['parameters'] ) );

if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'memb_cancelsubscription_' . $m4is_r53562w9befcb2kh7rm4p7n5['recurringorder_id'] ) ) {
wp_die( _x( 'Security Check Failed - Nonce Validation Error',
 $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
exit;
}
if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['signature'],
 $_POST['parameters'] ) ) {
wp_die( _x( 'Security Check Failed - Signature Validation Error', $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
exit;
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_ra7dnjjzebn9h3t6k7a2p36 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b();
$m4is_k5t0hnq2beh69ydfyp8pmm = (int) $m4is_r53562w9befcb2kh7rm4p7n5['recurringorder_id'];

$m4is_0p7ektqzzahnfbmha3jhj23sz46xm = (int) $m4is_r53562w9befcb2kh7rm4p7n5['subscriptionplan_id'];
$m4is_gxyv72199ztnbg1vcg194mf9qep0 = (bool) $m4is_r53562w9befcb2kh7rm4p7n5['immediate'];

$m4is_0cbycp2btw200n0sj = $m4is_r53562w9befcb2kh7rm4p7n5['cancel_text'];
$m4is_gh7agjsse = isset( $m4is_ra7dnjjzebn9h3t6k7a2p36['ecommerce']['actions'][$m4is_0p7ektqzzahnfbmha3jhj23sz46xm] ) ? $m4is_ra7dnjjzebn9h3t6k7a2p36['ecommerce']['actions'][$m4is_0p7ektqzzahnfbmha3jhj23sz46xm] : [];

$m4is_x0976ja4s2 = isset( $m4is_gh7agjsse['cancel_action'] ) ? $m4is_gh7agjsse['cancel_action'] : 0;
$m4is_11ry3n5k0nt77cxk5wmbe033r3c = isset( $m4is_gh7agjsse['cancel_goal'] ) ? $m4is_gh7agjsse['cancel_goal'] : '';

$m4is_ddab40da = isset( $m4is_gh7agjsse['end_action'] ) ? $m4is_gh7agjsse['end_action'] : 0;
$m4is_k14m4p6hr57yh2e0ah1v = isset( $m4is_gh7agjsse['end_goal'] ) ? $m4is_gh7agjsse['end_goal'] : '';

$m4is_egm0frk4dhxzgq5rzry34q5v79t2 = date( 'Ymd' );
$m4is_27f13pwnzr = date( 'Ymd', strtotime( $m4is_r53562w9befcb2kh7rm4p7n5['next_bill_date'] . ' - 1 day' ) );

$m4is_aph6q9w16bxp5y8g2nm = $m4is_gxyv72199ztnbg1vcg194mf9qep0 ? $m4is_egm0frk4dhxzgq5rzry34q5v79t2 : $m4is_27f13pwnzr;

$m4is_46mk286a9b51zt4aweshvcbzah0m = [
'AutoCharge' =>
 0,
'ReasonStopped' => sprintf( _x( 'Cancelled through Memberium on %s.  Old End Date: %s, New End Date: %s', $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ), date( 'Y-m-d' ), $m4is_27f13pwnzr, $m4is_aph6q9w16bxp5y8g2nm ),
'EndDate' => $m4is_aph6q9w16bxp5y8g2nm . 'T23:59:59',

];
if ( $m4is_aph6q9w16bxp5y8g2nm <= $m4is_egm0frk4dhxzgq5rzry34q5v79t2 ) {
$m4is_46mk286a9b51zt4aweshvcbzah0m['Status'] = 'Inactive';

}
$m4is_hartbe843crydzh = m4is_xm67qjyegqdeb9wqcm::m4is_5smzakqeahg0vdxh35zwmhx7kj01s8( 'RecurringOrder', $m4is_k5t0hnq2beh69ydfyp8pmm,
 $m4is_46mk286a9b51zt4aweshvcbzah0m );

if ( $m4is_x0976ja4s2 > 0 ) {
m4is_w3pp5rsxdc03bns3::m4is_07fbvb4g75( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 (int) $m4is_x0976ja4s2 );
}
if ( $m4is_11ry3n5k0nt77cxk5wmbe033r3c > '' ) {
m4is_xm67qjyegqdeb9wqcm::m4is_p9t3a40qehbq9ywrvrgje2vp8z( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_11ry3n5k0nt77cxk5wmbe033r3c, self::$m4is_v4beyw7zqhr3 );
}

if ( $m4is_ddab40da > 0 || $m4is_k14m4p6hr57yh2e0ah1v > '' ) {
$m4is_d60kn1d3yvprp62rs332 = [
'recurringorder_id' =>
 $m4is_k5t0hnq2beh69ydfyp8pmm,
'end_action' => $m4is_ddab40da,
'end_goal' => $m4is_k14m4p6hr57yh2e0ah1v,
];
if ( $m4is_ddab40da > 0 ) {
self::$m4is_132xe588j->m4is_me384vbsv18pc( 'actionset',
 $m4is_27f13pwnzr, $m4is_d60kn1d3yvprp62rs332 );
}
if ( $m4is_k14m4p6hr57yh2e0ah1v > '' ) {
self::$m4is_132xe588j->m4is_me384vbsv18pc( 'achievegoal',
 $m4is_27f13pwnzr, $m4is_d60kn1d3yvprp62rs332 );
}
}

self::$m4is_132xe588j->m4is_f51yh9x2x5zd1b7gtq0g( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_yggq5j195mnp46m3zfr = self::$m4is_132xe588j->m4is_j4c49s3gx2v8vx0v8ap1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, true );
$m4is_yq89f5vm4ma7qd9ms4f6bcr5dr60rgr = [
'action' =>
 'Cancel',
'subscription_id' => $m4is_k5t0hnq2beh69ydfyp8pmm,
'end_date' => date( 'Y-m-d', strtotime( $m4is_27f13pwnzr ) ),
'future_expiry' =>
 date( 'Ymd' ) <= $m4is_aph6q9w16bxp5y8g2nm ? 0 : 1,
];
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = add_query_arg( $m4is_yq89f5vm4ma7qd9ms4f6bcr5dr60rgr,
 $_SERVER['REQUEST_URI'] );
wp_redirect( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq );
exit;
}

public static function m4is_0kn6fd5havqmj() {
if ( self::$m4is_v8etech3dypxytdan798jd) {
return;

}
if ( ! self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v() ) {
return;
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y = 'memb_add_creditcard';

if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'creditcard_add_' . $_POST['form_id'] ) ) {
wp_die( _x( 'Security Check Failed - Nonce Validation Error',
 $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
}
if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['signature'],
 $_POST['parameters'] ) ) {
wp_die( _x( 'Security Check Failed - Signature Validation Error', $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
}
$m4is_0864dacae86e26c2nevtsd8y1 = true;
$m4is_fq53kf4wtvn3460swjxqr784a546 = false;

$m4is_pae00hv11 = (int) $_POST['form_id'];
$m4is_r53562w9befcb2kh7rm4p7n5 = unserialize( base64_decode( $_POST['parameters'] ) );
$m4is_7q2ef6en0 = (bool) $m4is_r53562w9befcb2kh7rm4p7n5['backcharge'];

$m4is_wtqm5h9z3 = (int) $m4is_r53562w9befcb2kh7rm4p7n5['creditcard_id'];
$m4is_ez88kg12as2x4fyqdq = array_filter( explode( ',', $m4is_r53562w9befcb2kh7rm4p7n5['plan_ids'] ) );

$m4is_99dbvn2f6553 = (bool) $m4is_r53562w9befcb2kh7rm4p7n5['set_default'];
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_r53562w9befcb2kh7rm4p7n5['contact_id'];
 
$m4is_fgjrqrs72nc6b = trim( $m4is_r53562w9befcb2kh7rm4p7n5['successurl'] );
$m4is_874bdfbk43f5640ths5a2bbnbhkmqme = trim( $m4is_r53562w9befcb2kh7rm4p7n5['failureurl'] );

$m4is_pqecxfec342ksq5fzv1mg = $m4is_874bdfbk43f5640ths5a2bbnbhkmqme;
$m4is_csx0y36xw = (bool) $m4is_r53562w9befcb2kh7rm4p7n5['debug'];

$m4is_vx16q168vgkd3kx75wpdj2x94mzy2ws = $m4is_r53562w9befcb2kh7rm4p7n5['debug_ip'] === m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z();

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp < 1 ) {
$m4is_0864dacae86e26c2nevtsd8y1 = false;
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('flash',
 'add_creditcard', _x( 'Invalid User ID', $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ));
}
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('flash',
 'add_creditcard', $m4is_r53562w9befcb2kh7rm4p7n5['success_msg']);

if ( empty( $_POST['cardtype']) && ! empty( $_POST['cc-number'] ) ) {
$_POST['cardtype'] = m4is_rn5kybmh4hvmhaxg1x::m4is_6d3qf121ngd3z( $_POST['cc-number'] );

}

$m4is_7b2yfzk0054 = [
'city',
'country',
'firstname',
'lastname',
'nameoncard',
'state',
'streetaddress1',
'streetaddress2',
];

foreach($_POST as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
$_POST[$m4is_j8j55t8dz79m7] = stripslashes( $m4is_rqxytszfq5v6syth1csqqxvy5 );

}


if ( ! $m4is_wtqm5h9z3 ) {
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = [
'cardtype',
'cc-number',
'city',
'country',
'cvv2',
'expirationmonth',

'expirationyear',
'nameoncard',
'phonenumber',
'streetaddress1',
];
}
else {
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = [
'city',
'country',

'cvv2',
'expirationmonth',
'expirationyear',
'nameoncard',
'phonenumber',
'streetaddress1',
];
}
if ( is_array( $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb ) ) {
foreach ($m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb as $m4is_bbsta3mvjhhvh1x97vfpm9e) {
if ( empty( $_POST[$m4is_bbsta3mvjhhvh1x97vfpm9e] ) || trim( $_POST[$m4is_bbsta3mvjhhvh1x97vfpm9e] ) == '') {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('flash',
 'add_creditcard', _x( 'You need to fill out all required fields.', $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ));

$m4is_0864dacae86e26c2nevtsd8y1 = false;
break;
}
}
}

if ( $m4is_0864dacae86e26c2nevtsd8y1 ) {
if ( ( date( 'Ym' ) > ( $_POST['expirationyear'] . $_POST['expirationmonth'] ) ) ) {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('flash',
 'add_creditcard', _x( 'The credit card is expired.', $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ));

$m4is_0864dacae86e26c2nevtsd8y1 = false;
}
}

if ( $m4is_wtqm5h9z3 == 0 ) {
if ( $m4is_0864dacae86e26c2nevtsd8y1 ) {
if ( ! m4is_rn5kybmh4hvmhaxg1x::m4is_h8kx0xsv8jft14jc( $_POST['cc-number'] ) ){
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('flash',
 'add_creditcard', _x( 'The credit card number is invalid.', 'memb_add_creditcard', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ));
$m4is_0864dacae86e26c2nevtsd8y1 = false;

}
}
}

if ( isset( $_POST['cc-number'] ) && $m4is_0864dacae86e26c2nevtsd8y1 ) {
$m4is_q5455q0ems5qfr4fs9a = substr( $_POST['cc-number'],
 -4 );
$alt_card_id = self::$m4is_wsme5a297xh0v6d5y->locateCard( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_q5455q0ems5qfr4fs9a );

if ( $alt_card_id > 0 ) {
$m4is_nry9m3t8shyfb80ja = m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( isset( $m4is_nry9m3t8shyfb80ja[$alt_card_id] ) ) {
$m4is_wtqm5h9z3 = (int) $alt_card_id;
}
}
}
if ( $m4is_0864dacae86e26c2nevtsd8y1 ) {
$m4is_3vc99myy5e3w587xb1t7z = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact' );
if ( $m4is_wtqm5h9z3 == 0 ) {
$m4is_gjezmfrxfpdchk5ge0gybbxygam2trz = [
'ContactId' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,

'BillName' => wp_strip_all_tags( $_POST['nameoncard'] ?? ''),
'BillAddress1' => wp_strip_all_tags( $_POST['streetaddress1'] ?? ''),

'BillAddress2' => wp_strip_all_tags( $_POST['streetaddress2'] ?? ''),
'BillCity' => wp_strip_all_tags( $_POST['city'] ?? ''),
'BillCountry' =>
 wp_strip_all_tags( $_POST['country'] ?? ''),
'BillState' => wp_strip_all_tags( $_POST['state'] ?? '' ),
'BillZip' => wp_strip_all_tags( $_POST['postalcode'] ?? '' ),

'CardNumber' => wp_strip_all_tags( $_POST['cc-number'] ?? '' ),
'CardType' => wp_strip_all_tags( $_POST['cardtype'] ?? '' ),
'CVV2' =>
 (string) $_POST['cvv2'] ?? '', 
'FirstName' => $m4is_3vc99myy5e3w587xb1t7z['firstname'] ?? '',
'LastName' => $m4is_3vc99myy5e3w587xb1t7z['lastname'] ?? '',

'ExpirationMonth' => wp_strip_all_tags( $_POST['expirationmonth'] ),
'ExpirationYear' => wp_strip_all_tags( $_POST['expirationyear'] ),

'NameOnCard' => wp_strip_all_tags( $_POST['nameoncard'] ),
'Email' => strtolower( $m4is_3vc99myy5e3w587xb1t7z['email'] ?? '' ),
'PhoneNumber' =>
 wp_strip_all_tags( $_POST['phonenumber'] ?? '' ),
'ShipAddress1' => $m4is_3vc99myy5e3w587xb1t7z['address2street1'] ?? '',
'ShipAddress2' =>
 $m4is_3vc99myy5e3w587xb1t7z['address2street2'] ?? '',
'ShipCity' => $m4is_3vc99myy5e3w587xb1t7z['city2'] ?? '',
'ShipCompanyName' =>
 $m4is_3vc99myy5e3w587xb1t7z['company'] ?? '',
'ShipCountry' => $m4is_3vc99myy5e3w587xb1t7z['country2'] ?? '',
'ShipFirstName' => $m4is_3vc99myy5e3w587xb1t7z['firstname'] ?? '',

'ShipLastName' => $m4is_3vc99myy5e3w587xb1t7z['lastname'] ?? '',
'ShipMiddleName' => '',
'ShipName' => wp_strip_all_tags( $_POST['nameoncard'] ?? '' ),

'ShipPhoneNumber' => wp_strip_all_tags( $_POST['phonenumber'] ?? '' ),
'ShipState' => $m4is_3vc99myy5e3w587xb1t7z['state2'] ?? '',

'ShipZip' => $m4is_3vc99myy5e3w587xb1t7z['postalcode2'] ?? '',
];
$m4is_wtqm5h9z3 = m4is_xm67qjyegqdeb9wqcm::m4is_pqqt3t5np2bwsv9022ghw8hcxr5kj( 'CreditCard',
 $m4is_gjezmfrxfpdchk5ge0gybbxygam2trz );
if ( $m4is_wtqm5h9z3 > 0 ) {
$m4is_fq53kf4wtvn3460swjxqr784a546 = true;
}
}
else {
$m4is_0chcpza6xmp1 = [
'BillName' =>
 wp_strip_all_tags( $_POST['nameoncard']),
'BillAddress1' => wp_strip_all_tags( $_POST['streetaddress1']),
'BillAddress2' => wp_strip_all_tags( $_POST['streetaddress2']),

'BillCity' => wp_strip_all_tags( $_POST['city']),
'BillCountry' => wp_strip_all_tags( $_POST['country']),
'BillState' => wp_strip_all_tags( $_POST['state'] ),

'BillZip' => wp_strip_all_tags( $_POST['postalcode'] ),
'ExpirationMonth' => wp_strip_all_tags( $_POST['expirationmonth'] ),
'ExpirationYear' =>
 wp_strip_all_tags( $_POST['expirationyear'] ),
'NameOnCard' => wp_strip_all_tags( $_POST['nameoncard'] ),
'PhoneNumber' => wp_strip_all_tags( $_POST['phonenumber'] ),

'ShipName' => wp_strip_all_tags( $_POST['nameoncard'] ),
'ShipPhoneNumber' => wp_strip_all_tags( $_POST['phonenumber'] ),
'CVV2' =>
 (string) trim( $_POST['cvv2'] ),
'Email' => strtolower( $m4is_3vc99myy5e3w587xb1t7z['email'] ?? '' ),
'FirstName' => $m4is_3vc99myy5e3w587xb1t7z['firstname'] ?? '',

'LastName' => $m4is_3vc99myy5e3w587xb1t7z['lastname'] ?? '',
'ShipAddress1' => $m4is_3vc99myy5e3w587xb1t7z['address2street1'] ?? '',

'ShipAddress2' => $m4is_3vc99myy5e3w587xb1t7z['address2street2'] ?? '',
'ShipCity' => $m4is_3vc99myy5e3w587xb1t7z['city2'] ?? '',
'ShipCompanyName' =>
 $m4is_3vc99myy5e3w587xb1t7z['company'] ?? '',
'ShipCountry' => $m4is_3vc99myy5e3w587xb1t7z['country2'] ?? '',
'ShipFirstName' => $m4is_3vc99myy5e3w587xb1t7z['firstname'] ?? '',

'ShipLastName' => $m4is_3vc99myy5e3w587xb1t7z['lastname'] ?? '',
'ShipState' => $m4is_3vc99myy5e3w587xb1t7z['state2'] ?? '',
'ShipZip' =>
 $m4is_3vc99myy5e3w587xb1t7z['postalcode2'] ?? '',
'MaestroIssueNumber' => '',
'ShipMiddleName' => '',
];
$m4is_wtqm5h9z3 = (int) m4is_xm67qjyegqdeb9wqcm::m4is_5smzakqeahg0vdxh35zwmhx7kj01s8( 'CreditCard',
 (int) $m4is_wtqm5h9z3, $m4is_0chcpza6xmp1 );
$m4is_fq53kf4wtvn3460swjxqr784a546 = (bool) ( $m4is_wtqm5h9z3 > 0 );
}
if ( $m4is_wtqm5h9z3 > 0 ) {
self::$m4is_wsme5a297xh0v6d5y->validateCard( (int) $m4is_wtqm5h9z3);

}
delete_transient( m4is_kkk64g440mhf2xhxafr::m4is_apt7yd3e52jec90qacr( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) );
if ( $m4is_wtqm5h9z3 ) {

if ( $m4is_99dbvn2f6553 ) {
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'AutoCharge',

'CC1',
'ContactId',
'Id',
'MerchantAccountId',
'OriginatingOrderId',
'Status',
'SubscriptionPlanId',
];
$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' =>
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,


];
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj( 'RecurringOrder',
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', false );

$m4is_n10zfg6gv5y820ftz44 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'merchant_account_id' );
foreach( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
if ( empty( $m4is_ez88kg12as2x4fyqdq ) || in_array( $m4is_bamv772v['SubscriptionPlanId'],
 $m4is_ez88kg12as2x4fyqdq ) ) {
$m4is_b8kp39yep9qysj[$m4is_bamv772v['Id']] = [
'CC1' => isset( $m4is_bamv772v['CC1'] ) ? $m4is_bamv772v['CC1'] : 0,

'Id' => isset( $m4is_bamv772v['Id'] ) ? $m4is_bamv772v['Id'] : 0,
'MerchantAccountId' => empty( $m4is_bamv772v['MerchantAccountId'] ) ? $m4is_n10zfg6gv5y820ftz44 : $m4is_bamv772v['MerchantAccountId'],

'OriginatingOrderId' => isset( $m4is_bamv772v['OriginatingOrderId'] ) ? $m4is_bamv772v['OriginatingOrderId'] : 0,
'Status' => isset( $m4is_bamv772v['Status'] ) ? $m4is_bamv772v['Status'] : 0,

'ContactId' => isset( $m4is_bamv772v['ContactId'] ) ? $m4is_bamv772v['ContactId'] : 0,
'AutoCharge' => isset( $m4is_bamv772v['AutoCharge'] ) ? $m4is_bamv772v['AutoCharge'] : 0,

];
}
}
unset($m4is_tbdh9qb6r6z, $m4is_bamv772v);

if ( is_array( $m4is_b8kp39yep9qysj ) ) {
foreach ( $m4is_b8kp39yep9qysj as $m4is_j8j55t8dz79m7 =>
 $m4is_z1w4e9gz8m3e9pg7yydpb2 ) {
$m4is_b73qrd73yttyc75 = false;
$m4is_b73qrd73yttyc75 = $m4is_b73qrd73yttyc75 || $m4is_z1w4e9gz8m3e9pg7yydpb2['Status'] !== 'Active';

$m4is_b73qrd73yttyc75 = $m4is_b73qrd73yttyc75 || $m4is_z1w4e9gz8m3e9pg7yydpb2['CC1'] == $m4is_wtqm5h9z3;
if ( ! $m4is_b73qrd73yttyc75 ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) $m4is_z1w4e9gz8m3e9pg7yydpb2['Id'];

$m4is_46mk286a9b51zt4aweshvcbzah0m = [
'CC1' => (int) $m4is_wtqm5h9z3,
'MerchantAccountId' => (int) $m4is_z1w4e9gz8m3e9pg7yydpb2['MerchantAccountId'],
 
'AutoCharge' => 1,
];
m4is_xm67qjyegqdeb9wqcm::m4is_5smzakqeahg0vdxh35zwmhx7kj01s8( 'RecurringOrder', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_46mk286a9b51zt4aweshvcbzah0m );
}
}
}
unset($m4is_z1w4e9gz8m3e9pg7yydpb2, $m4is_46mk286a9b51zt4aweshvcbzah0m, $m4is_0x2gypzsbnenpkq5bam3dkbg5,
 $m4is_j34bmw9dcjexfj1qpz, $m4is_j8j55t8dz79m7);
}


if ( $m4is_7q2ef6en0 ) {
if ( $m4is_vx16q168vgkd3kx75wpdj2x94mzy2ws ) echo 'Starting Backcharge<br>';

$m4is_n10zfg6gv5y820ftz44 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'merchant_account_id' );
$m4is_qpzk7kkc6v2bhxchqns6f9m = self::$m4is_132xe588j->m4is_f51yh9x2x5zd1b7gtq0g( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 false, true, true ); 
$m4is_jrrk79nfysd0mvn35rja5x0b = is_array( $m4is_qpzk7kkc6v2bhxchqns6f9m ) ? count( $m4is_qpzk7kkc6v2bhxchqns6f9m ) : 0;


$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',
'JobRecurringId',
];
$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' => (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,

];
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2( 'Job',
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
$m4is_emz0mwk3g = [];

if ( $m4is_csx0y36xw ) {
error_log( 'Memberium: [info] Credit Card Update - found ' . count( $m4is_qpzk7kkc6v2bhxchqns6f9m ) . ' orders' );

}
foreach( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_emz0mwk3g[$m4is_bamv772v['Id']] = isset( $m4is_bamv772v['JobRecurringId'] ) ? $m4is_bamv772v['JobRecurringId'] : 0;

}
unset($m4is_tbdh9qb6r6z, $m4is_bamv772v);
$m4is_3h2p59t1q80qzpcs = [];
$m4is_mev7vkvsh57ps83zazbetrc1j3ghrj = count( $m4is_emz0mwk3g );

if ( $m4is_vx16q168vgkd3kx75wpdj2x94mzy2ws ) {
echo "Parameters: <pre>", print_r( $m4is_r53562w9befcb2kh7rm4p7n5, true ), "</pre>";

echo "Default Merchant ID: {$m4is_n10zfg6gv5y820ftz44}<br>";
echo "Unpaid Invoices Found: {$m4is_jrrk79nfysd0mvn35rja5x0b}<br>";
echo "Unpaid Jobs Found: {$m4is_mev7vkvsh57ps83zazbetrc1j3ghrj}<br>";

echo "Invoices: <pre>", print_r( $m4is_qpzk7kkc6v2bhxchqns6f9m, true ), "</pre>";
echo "Jobs: <pre>", print_r( $m4is_emz0mwk3g, true ),
 "</pre>";
}
if ( $m4is_jrrk79nfysd0mvn35rja5x0b ) {
foreach( $m4is_qpzk7kkc6v2bhxchqns6f9m as $m4is_hdseqgtp1yd3cjxf20r ) {
if ( ( $m4is_hdseqgtp1yd3cjxf20r['TotalPaid'] < $m4is_hdseqgtp1yd3cjxf20r['TotalDue'] ) and ( $m4is_hdseqgtp1yd3cjxf20r['PayStatus'] == '0' ) and ( $m4is_hdseqgtp1yd3cjxf20r['TotalDue'] > 0 ) ) {
$m4is_5yed0nks1a6dg6en = $m4is_hdseqgtp1yd3cjxf20r['Id'];

$m4is_91gfr7je = $m4is_hdseqgtp1yd3cjxf20r['JobId'];
if ( isset( $m4is_emz0mwk3g[$m4is_91gfr7je] ) ) {
$m4is_83k4y8679hs6y5rvg8r0g5bpcw = $m4is_emz0mwk3g[$m4is_91gfr7je];

if ( ! empty( $m4is_b8kp39yep9qysj[$m4is_83k4y8679hs6y5rvg8r0g5bpcw] ) && $m4is_b8kp39yep9qysj[$m4is_83k4y8679hs6y5rvg8r0g5bpcw]['Status'] == 'Active' ) {
$m4is_3h2p59t1q80qzpcs[$m4is_5yed0nks1a6dg6en] = [
'invoice_id' =>
 (int) $m4is_5yed0nks1a6dg6en,
'recurringorder_id' => (int) $m4is_83k4y8679hs6y5rvg8r0g5bpcw,
'merchant_id' => $m4is_b8kp39yep9qysj[$m4is_83k4y8679hs6y5rvg8r0g5bpcw]['MerchantAccountId'] ? (int) $m4is_b8kp39yep9qysj[$m4is_83k4y8679hs6y5rvg8r0g5bpcw]['MerchantAccountId'] : 0,

'total_due' => $m4is_hdseqgtp1yd3cjxf20r['TotalDue'],
];
}
elseif ( isset( $m4is_emz0mwk3g[$m4is_91gfr7je] ) && $m4is_emz0mwk3g[$m4is_91gfr7je] == 0) {
$m4is_3h2p59t1q80qzpcs[$m4is_5yed0nks1a6dg6en] = [
'invoice_id' =>
 (int) $m4is_5yed0nks1a6dg6en,
'recurringorder_id' => 0,
'merchant_id' => $m4is_n10zfg6gv5y820ftz44,
'total_due' => $m4is_hdseqgtp1yd3cjxf20r['TotalDue'],

];
}
}
}
}
}

usort($m4is_3h2p59t1q80qzpcs, function($a, $b) {
if ( $a['total_due'] > $b['total_due'] ) return -1;
if ( $a['total_due'] < $b['total_due'] ) return 1;

if ( $a['invoice_id'] < $b['invoice_id'] ) return -1;
if ( $a['invoice_id'] > $b['invoice_id'] ) return 1;
return 0;
});
if ( $m4is_vx16q168vgkd3kx75wpdj2x94mzy2ws ) {
echo "Invoices: <pre>",
 print_r( $m4is_qpzk7kkc6v2bhxchqns6f9m, true ), "</pre>";
echo "Items: <pre>", print_r( $m4is_3h2p59t1q80qzpcs, true ), "</pre>";
}

foreach( $m4is_3h2p59t1q80qzpcs as $m4is_s8cs5mdq57e5bgpqzd ) {
if ( $m4is_s8cs5mdq57e5bgpqzd['merchant_id'] ) {
$m4is_hartbe843crydzh = self::$m4is_wsme5a297xh0v6d5y->chargeInvoice( $m4is_s8cs5mdq57e5bgpqzd['invoice_id'],
 'Updated Credit Card Back Charge', (int) $m4is_wtqm5h9z3, $m4is_s8cs5mdq57e5bgpqzd['merchant_id'], false );
if ( is_string( $m4is_hartbe843crydzh ) ) {
error_log( "Memberium (" . __LINE__ . ' ' . __FUNCTION__ . "): [Warning] Error Charging Invoice ID {$m4is_s8cs5mdq57e5bgpqzd['invoice_id']} - {$m4is_hartbe843crydzh}" );

}
}
else {
error_log( "Memberium (" . __LINE__ . ' ' . __FUNCTION__ . "): [Warning] Error Charging Invoice ID {$m4is_s8cs5mdq57e5bgpqzd['invoice_id']} - No Merchant ID" );

}
}
}

}
}
if ($m4is_fq53kf4wtvn3460swjxqr784a546) {
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_r53562w9befcb2kh7rm4p7n5['action_ids'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_r53562w9befcb2kh7rm4p7n5['goals'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_r53562w9befcb2kh7rm4p7n5['tag_ids'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_132xe588j->m4is_mz8ypkzzr4fxz8e42njma37v6ge02( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

self::$m4is_132xe588j->m4is_km2vptq0bwg( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
m4is_kkk64g440mhf2xhxafr::m4is_y7mprhvnc2n81f5y03ejk1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_pqecxfec342ksq5fzv1mg = $m4is_fgjrqrs72nc6b;
}
else {
$m4is_pqecxfec342ksq5fzv1mg = $m4is_874bdfbk43f5640ths5a2bbnbhkmqme;
}
if (! empty( $m4is_pqecxfec342ksq5fzv1mg ) ) {
wp_redirect( $m4is_pqecxfec342ksq5fzv1mg );

exit;
}
}

public static function m4is_2v1swkbkg562b1vjx9s() {
if ( ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return;

}
$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();

$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$m4is_hf6ctsm2pnexk = base64_decode( $_POST['tag_id'] );

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['signature'],
 $_POST['template_id'] . $m4is_hf6ctsm2pnexk ) ) {
wp_die( _x( 'Security Check Failed - Signature Validation Error', 'memb_send_password',
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
exit;
}
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z( 'There was an error Looking up that account.' );

$m4is_0864dacae86e26c2nevtsd8y1 = true;
$m4is_pae00hv11 = (int) $_POST['form_id'];
$m4is_zq984c7s17ees36ba = (int) $_POST['template_id'];

$m4is_zxwt8y3szyy1aenkh = strtolower(trim($_POST['email']) );
$m4is_1kgtp108hmp = base64_decode($_POST['successurl']);
$m4is_41dg194jqye = base64_decode($_POST['failureurl']);

$m4is_hf6ctsm2pnexk = base64_decode($_POST['tag_id']);
$m4is_1we1qc8rdsrfq = false;
$m4is_76c49jr0d2swzen4v53q0hv13456g = false;
$m4is_wte2qk9hdk1zj7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' );
$m4is_akd4cjvbhtckz56 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'local_auth_only' );

if ( trim( $_POST['email'] ) == '' ) {
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z('You must submit an email address.');

return;
}
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email', $m4is_zxwt8y3szyy1aenkh);
if ($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID);

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_q9jtbmp64yk13jzd( $m4is_zxwt8y3szyy1aenkh );

}
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$m4is_cyg7rcfhzagmm5v = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
}
if ( empty( $m4is_cyg7rcfhzagmm5v ) ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_q9jtbmp64yk13jzd($m4is_zxwt8y3szyy1aenkh);

}
if ( empty( $m4is_akd4cjvbhtckz56 ) ) {
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0) {
if ( isset( $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] ) && $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] == 'PASSWORD_PLACEHOLDER') {
$m4is_1farjt7yk7tdb = self::$m4is_132xe588j->m4is_d4hrfy3cjzb3y58yrjedq69fqd958dp();

$m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] = $m4is_1farjt7yk7tdb;
self::$m4is_132xe588j->m4is_bpzt4p8q92db7($m4is_cyg7rcfhzagmm5v);

m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, [$m4is_wte2qk9hdk1zj7 => $m4is_1farjt7yk7tdb]);

self::$m4is_132xe588j->m4is_f54f6mxb3zka1m( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}
}
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0 ) {
if ( $m4is_hf6ctsm2pnexk > 0 ) {
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_hf6ctsm2pnexk,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$m4is_1we1qc8rdsrfq = true;
$m4is_76c49jr0d2swzen4v53q0hv13456g = true;
}
}
if ($m4is_zq984c7s17ees36ba) {
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0) {
$m4is_c36amf34ym3qc33wbfsv = [$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp];

}
if ( ! empty( $m4is_c36amf34ym3qc33wbfsv) ) {
$m4is_yrsthh0s4s62mfk9 = $m4is_wsme5a297xh0v6d5y->sendTemplate( $m4is_c36amf34ym3qc33wbfsv,
 $m4is_zq984c7s17ees36ba );
$m4is_1we1qc8rdsrfq = true;
}
}
else {
if ( ! $m4is_76c49jr0d2swzen4v53q0hv13456g ) {
if (! empty( $m4is_cyg7rcfhzagmm5v ) ) {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = empty( $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] ) ? '' : $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7];

$m4is_agsjda7vv3vhz4tdj9t5x = empty( $m4is_cyg7rcfhzagmm5v['FirstName'] ) ? '' : $m4is_cyg7rcfhzagmm5v['FirstName'];
$m4is_3qcccz0vcdbrnb53h66ywzya = get_bloginfo( 'admin_email' );

$m4is_txq9r25dfxqkjt1 = $m4is_zxwt8y3szyy1aenkh;
$m4is_x215pkzdncmyfasv7 = sprintf( _x( 'Your Password for %s', 'memb_send_password',
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ), get_bloginfo( 'name' ) );
$m4is_5tmqg45z37r82cfb67prh = sprintf( _x( "<html><body><p>Dear %s</p>\n\n<p>Your password is: %s\n\n</p><p>- %s\n</p></body></html>",
 'memb_send_password', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ), $m4is_agsjda7vv3vhz4tdj9t5x, $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g,
 get_bloginfo('name') );
$m4is_x215pkzdncmyfasv7 = apply_filters( 'memberium/email/send_password/subject', $m4is_x215pkzdncmyfasv7,
 $m4is_cyg7rcfhzagmm5v, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );
$m4is_5tmqg45z37r82cfb67prh = apply_filters( 'memberium/email/send_password/message',
 $m4is_5tmqg45z37r82cfb67prh, $m4is_cyg7rcfhzagmm5v, $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );
$m4is_txq9r25dfxqkjt1 = apply_filters( 'memberium/email/send_password/to',
 $m4is_txq9r25dfxqkjt1 );
$m4is_3qcccz0vcdbrnb53h66ywzya = apply_filters( 'memberium/email/send_password/from', $m4is_3qcccz0vcdbrnb53h66ywzya );

$m4is_1we1qc8rdsrfq = true;
$m4is_yz7yf6v6gfkzhbfcn81jd578ffb = function() {
return 'text/html';
};
add_filter( 'wp_mail_content_type',
 $m4is_yz7yf6v6gfkzhbfcn81jd578ffb );
wp_mail( $m4is_txq9r25dfxqkjt1, $m4is_x215pkzdncmyfasv7, $m4is_5tmqg45z37r82cfb67prh );
remove_filter( 'wp_mail_content_type',
 $m4is_yz7yf6v6gfkzhbfcn81jd578ffb );
}
else {
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z('Account not found.');

}
}
}
if ($m4is_1we1qc8rdsrfq) {
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z(_x('Your password has been emailed to you.  Please be sure to check your spam folder.',
 'memb_send_password', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
if (! empty($m4is_1kgtp108hmp) ) {
wp_redirect($m4is_1kgtp108hmp);

exit;
}
}
if ( ! $m4is_1we1qc8rdsrfq ) {
if ( ! empty( $m4is_41dg194jqye ) ) {
wp_redirect( $m4is_41dg194jqye );
exit;
}
}
self::$m4is_132xe588j->m4is_mz8ypkzzr4fxz8e42njma37v6ge02();

}

public static function m4is_n2815tjbrqnsn2tj43yzpkbmwg7rm11y() : void {
global $wpdb;
$m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y = 'memb_update_form';

if ( ! wp_verify_nonce( $_POST['_wpnonce'], $_POST['params'] ) ) {
wp_die( 'Invalid Update Form Submission' );
}
if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['signature'],
 $_POST['params'] ) ) {
wp_die( 'Security Check Failed - Signature Validation Error' );
exit;
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();


$m4is_z4ts5pa39jf1yhjb4 = $_POST;
$m4is_7w9sx3x9v81jpa1n8mvrpcffnq = [];
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = false;
$m4is_h3w9vf6qk5y1d9es1930as = false;

$m4is_5wdcjzj1bch66jxbbczj6k61 = true;
$m4is_1we1qc8rdsrfq = false;
$m4is_wte2qk9hdk1zj7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' );
$m4is_th384m7gvm775j7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'username_field' );

$m4is_gv7vjyv2c6g3nepw6 = unserialize( base64_decode( $m4is_z4ts5pa39jf1yhjb4['params'] ) );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_gv7vjyv2c6g3nepw6['contact_id'];

$m4is_xnp7kwvwaqarv0rfb86fap7b = m4is_xm67qjyegqdeb9wqcm::m4is_xgteqem3f5qjq5ev0hjxskwr4( -1 );
if ( self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v() <> $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
wp_die( 'Security Check Failed - Signature Validation Error' );

exit;
}

foreach( $m4is_xnp7kwvwaqarv0rfb86fap7b as $m4is_jrbbv650tt4nt9f6fz => $m4is_g06nwpj71b4a8mjceh64y0nxz ) {
if ( isset( $m4is_z4ts5pa39jf1yhjb4[$m4is_jrbbv650tt4nt9f6fz] ) ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_z4ts5pa39jf1yhjb4[$m4is_jrbbv650tt4nt9f6fz];

if ( $m4is_g06nwpj71b4a8mjceh64y0nxz == 5 ) { 
if ( strlen( $m4is_rqxytszfq5v6syth1csqqxvy5 ) < 4 ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = strtoupper( $m4is_rqxytszfq5v6syth1csqqxvy5 );

}
}
elseif ( $m4is_g06nwpj71b4a8mjceh64y0nxz == 13 || $m4is_g06nwpj71b4a8mjceh64y0nxz == 14 ) { 
$m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta = strtotime( $m4is_rqxytszfq5v6syth1csqqxvy5 );

if ( $m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta > 0 ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = date( 'Ymd\TH:i:s', strtotime( $m4is_rqxytszfq5v6syth1csqqxvy5 ) );

}
else {
unset( $m4is_z4ts5pa39jf1yhjb4[$m4is_jrbbv650tt4nt9f6fz] );
}
}
elseif ( $m4is_g06nwpj71b4a8mjceh64y0nxz == 17 || $m4is_g06nwpj71b4a8mjceh64y0nxz == 20 || $m4is_g06nwpj71b4a8mjceh64y0nxz == 23 ) { 
if ( is_array( $m4is_rqxytszfq5v6syth1csqqxvy5) ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = implode( ',',
 $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
}
elseif ( $m4is_g06nwpj71b4a8mjceh64y0nxz == 19 ) { 
if ( strpos( $m4is_rqxytszfq5v6syth1csqqxvy5,
 '@' ) !== false ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = strtolower( trim( $m4is_rqxytszfq5v6syth1csqqxvy5 ) );
}
else {
$m4is_rqxytszfq5v6syth1csqqxvy5 = '';

}
}
$m4is_z4ts5pa39jf1yhjb4[$m4is_jrbbv650tt4nt9f6fz] = $m4is_rqxytszfq5v6syth1csqqxvy5;
}
}

if ( ! empty( $m4is_gv7vjyv2c6g3nepw6['required_fields'] ) ) {
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = array_filter( explode( ',',
 $m4is_gv7vjyv2c6g3nepw6['required_fields'] ) );
if ( is_array( $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb ) ) {
foreach ( $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb as $m4is_paffdpphadpryhxj1m ) {
if ( ! isset( $m4is_z4ts5pa39jf1yhjb4[$m4is_paffdpphadpryhxj1m] ) ) {
$m4is_5wdcjzj1bch66jxbbczj6k61 = false;

$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;
$m4is_7w9sx3x9v81jpa1n8mvrpcffnq[] = 'You are missing required fields.';
}
}
}
}

foreach ($m4is_z4ts5pa39jf1yhjb4 as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
if ( isset( $m4is_z4ts5pa39jf1yhjb4[$m4is_j8j55t8dz79m7 . '_confirmation']) && $m4is_z4ts5pa39jf1yhjb4[$m4is_j8j55t8dz79m7] <> $m4is_z4ts5pa39jf1yhjb4[$m4is_j8j55t8dz79m7 . '_confirmation']) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;

$m4is_7w9sx3x9v81jpa1n8mvrpcffnq[] = 'Your confirmed fields do not match.';
}
}

if ( ! empty( $m4is_gv7vjyv2c6g3nepw6['date_fields'] ) ) {
$m4is_v1b5gnta3q76krxczza781gh4789rxb = explode(',',
 $m4is_gv7vjyv2c6g3nepw6['date_fields']);
if ( is_array( $m4is_v1b5gnta3q76krxczza781gh4789rxb ) ) {
foreach( $m4is_v1b5gnta3q76krxczza781gh4789rxb as $m4is_xdby7ann ) {
if ( isset( $m4is_z4ts5pa39jf1yhjb4[$m4is_xdby7ann] ) ) {
$m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta = strtotime( $m4is_z4ts5pa39jf1yhjb4[$m4is_xdby7ann]);

$m4is_z4ts5pa39jf1yhjb4[$m4is_xdby7ann] = date('Ymd\TH:i:s', $m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta);
}
}
}
}

if (! $m4is_bbjejhszczf2b3wrxm849kpfyzb5) {
$m4is_n5bx9prx9xqpwkgs7em6kcpja1rpg72 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n('Contact');

$m4is_cyg7rcfhzagmm5v = [];
foreach( $m4is_z4ts5pa39jf1yhjb4 as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( in_array( $m4is_j8j55t8dz79m7,
 $m4is_n5bx9prx9xqpwkgs7em6kcpja1rpg72 ) ) {
$m4is_cyg7rcfhzagmm5v[$m4is_j8j55t8dz79m7] = stripslashes( $m4is_rqxytszfq5v6syth1csqqxvy5 );

}
}
if (! empty($m4is_cyg7rcfhzagmm5v) ) {
m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_cyg7rcfhzagmm5v ); 
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0) {
if (! empty($m4is_gv7vjyv2c6g3nepw6['goal']) ) {
self::$m4is_132xe588j->m4is_5qyk7ea4p2nw8ph($m4is_gv7vjyv2c6g3nepw6['goal'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
if (! empty($m4is_gv7vjyv2c6g3nepw6['tagids']) ) {
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx($m4is_gv7vjyv2c6g3nepw6['tagids'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
self::$m4is_132xe588j->m4is_km2vptq0bwg($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( self::$m4is_132xe588j->m4is_vd3qpw0vkdm() );



$m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1 = m4is_q28s00aabb2yd3d::m4is_d2ce9k4j3( m4is_q28s00aabb2yd3d::CONTACT_FIELDS, m4is_q28s00aabb2yd3d::EMAIL_TYPE);

$m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1[] = 'Email';
$m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1[] = 'EmailAddress2';
$m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1[] = 'EmailAddress3';

$m4is_a70jgs7y5y97876kqw16m0wxz8 = [];
foreach($m4is_cyg7rcfhzagmm5v as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 => $m4is_xgtgw8c7w25hk72ec5z99vqy7a) {
if (in_array($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6,
 $m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1) ) {
if (! empty($m4is_xgtgw8c7w25hk72ec5z99vqy7a) ) {
$m4is_a70jgs7y5y97876kqw16m0wxz8[] = strtolower(trim($m4is_xgtgw8c7w25hk72ec5z99vqy7a) );

}
}
}
$m4is_a70jgs7y5y97876kqw16m0wxz8 = array_unique($m4is_a70jgs7y5y97876kqw16m0wxz8);
foreach($m4is_a70jgs7y5y97876kqw16m0wxz8 as $m4is_zxwt8y3szyy1aenkh) {
m4is_rw8p2dfy073ez::m4is_rxf2xq5wvdkk7jhkx8($m4is_zxwt8y3szyy1aenkh,
 'Memberium Update Form');
}
}
else {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;
}
}
}

if ($m4is_bbjejhszczf2b3wrxm849kpfyzb5 || $m4is_h3w9vf6qk5y1d9es1930as) {
$m4is_pqecxfec342ksq5fzv1mg = $m4is_gv7vjyv2c6g3nepw6['failure_url'];

}
else {
$m4is_pqecxfec342ksq5fzv1mg = $m4is_gv7vjyv2c6g3nepw6['success_url'];
}


if (! empty($m4is_cyg7rcfhzagmm5v) && $m4is_gv7vjyv2c6g3nepw6['pass_fields']) {
$m4is_qz686kx2bwe9k3s72rt = (strpos($m4is_pqecxfec342ksq5fzv1mg,
 '?') === false) ? '?' : '&';
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0) {
$m4is_qz686kx2bwe9k3s72rt .= 'id=' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp . '&';

}
foreach ($m4is_cyg7rcfhzagmm5v as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
if ($m4is_j8j55t8dz79m7 <> $m4is_wte2qk9hdk1zj7 || $m4is_gv7vjyv2c6g3nepw6['pass_password'] == true) {
$m4is_qz686kx2bwe9k3s72rt .= $m4is_j8j55t8dz79m7 . '=' . urlencode($m4is_rqxytszfq5v6syth1csqqxvy5) . '&';

}
}
}
$m4is_pqecxfec342ksq5fzv1mg = trim($m4is_pqecxfec342ksq5fzv1mg . $m4is_qz686kx2bwe9k3s72rt, '&');

if (! empty($m4is_7w9sx3x9v81jpa1n8mvrpcffnq) ) {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_net3v5tkgy75('error_message',
 $m4is_7w9sx3x9v81jpa1n8mvrpcffnq);
}
if (! empty($m4is_pqecxfec342ksq5fzv1mg) ) {
wp_redirect( $m4is_pqecxfec342ksq5fzv1mg, 302, 'Memberium Update Form Redirect' );

exit;
}
}

public static function m4is_qmhrw6j0x8hsmqdw38ef2gnr9g5mde() {
$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();
if (! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return;

}
if ( ! self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v()) {
return;
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55($_POST['signature'], $_POST['parameters']) ) {
wp_die(_x('Security Check Failed - Signature Validation Error',
 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
exit;
}
$m4is_r53562w9befcb2kh7rm4p7n5 = unserialize(base64_decode($_POST['parameters']) );

$m4is_0906y1a1fyz3wa = (int) $m4is_r53562w9befcb2kh7rm4p7n5['invoice_id'];
if (! wp_verify_nonce($_POST['_wpnonce'], 'memb_payinvoice_' . $m4is_0906y1a1fyz3wa) ) {
wp_die(_x('Security Check Failed - Nonce Validation Error',
 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
exit;
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_wtqm5h9z3 = (int) $_POST['creditcard_id'];
$m4is_0906y1a1fyz3wa = (int) $m4is_r53562w9befcb2kh7rm4p7n5['invoice_id'];
$m4is_4ykjca62r2hsxv7pc = (int) $m4is_r53562w9befcb2kh7rm4p7n5['merchant_id'];

$m4is_hf6ctsm2pnexk = $m4is_r53562w9befcb2kh7rm4p7n5['tag_id'];
$m4is_exf0cmscjsfyk = $m4is_r53562w9befcb2kh7rm4p7n5['goal'];
$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = '';

$m4is_qpzk7kkc6v2bhxchqns6f9m = self::$m4is_132xe588j->m4is_f51yh9x2x5zd1b7gtq0g($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, false, true);

$m4is_hdseqgtp1yd3cjxf20r = isset($m4is_qpzk7kkc6v2bhxchqns6f9m[$m4is_0906y1a1fyz3wa]) ? $m4is_qpzk7kkc6v2bhxchqns6f9m[$m4is_0906y1a1fyz3wa] : [];

$m4is_52nymxfwnh3gkexbdkd88f1r953w8j = [
'pay_action' => '',
'pay_goal' => '',
];
$m4is_hartbe843crydzh = $m4is_wsme5a297xh0v6d5y->chargeInvoice( $m4is_0906y1a1fyz3wa,
 _x('Memberium Customer Care', 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ), $m4is_wtqm5h9z3, $m4is_4ykjca62r2hsxv7pc,
 false);
if (isset($m4is_hartbe843crydzh['Successful']) && $m4is_hartbe843crydzh['Successful']) {
$m4is_yg35t29c3vpjb8bfsfwzz = self::$m4is_132xe588j->m4is_s7mfevxpgtx3wp1qa9( (int) $m4is_hdseqgtp1yd3cjxf20r['JobId']);

$m4is_gfkdmczpsskadtdpskk433e = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('ecommerce', 'actions');
foreach($m4is_yg35t29c3vpjb8bfsfwzz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_mtqy9tfhpdqm) {
$m4is_gh7agjsse = isset($m4is_gfkdmczpsskadtdpskk433e[$m4is_mtqy9tfhpdqm['SubscriptionPlanId']]) ? $m4is_gfkdmczpsskadtdpskk433e[$m4is_mtqy9tfhpdqm['SubscriptionPlanId']] : false;

if ($m4is_gh7agjsse) {
$m4is_52nymxfwnh3gkexbdkd88f1r953w8j['pay_action'] .= empty($m4is_gh7agjsse['pay_action']) ? '' : ',' . $m4is_gh7agjsse['pay_action'];

$m4is_52nymxfwnh3gkexbdkd88f1r953w8j['pay_goal'] .= empty($m4is_gh7agjsse['pay_goal']) ? '' : ',' . $m4is_gh7agjsse['pay_goal'];
}
}
foreach($m4is_52nymxfwnh3gkexbdkd88f1r953w8j as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp) {
$m4is_52nymxfwnh3gkexbdkd88f1r953w8j[$m4is_bqhtspcavhb01spmfd3x] = trim($m4is_52nymxfwnh3gkexbdkd88f1r953w8j[$m4is_bqhtspcavhb01spmfd3x],
 ',');
}
$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = trim($m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p . ',' . $m4is_52nymxfwnh3gkexbdkd88f1r953w8j['pay_action'],
 ',');
$m4is_exf0cmscjsfyk = trim($m4is_exf0cmscjsfyk . ',' . $m4is_52nymxfwnh3gkexbdkd88f1r953w8j['pay_goal'], ',');
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx($m4is_hf6ctsm2pnexk,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse($m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

self::$m4is_132xe588j->m4is_5qyk7ea4p2nw8ph($m4is_exf0cmscjsfyk, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('flash',
 'invoice_payment', $m4is_r53562w9befcb2kh7rm4p7n5['success_msg']);

delete_transient('Memberium::' . self::$m4is_v4beyw7zqhr3 . '::Invoices::' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

delete_transient('Memberium::' . self::$m4is_v4beyw7zqhr3 . '::PayPlans::' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
delete_transient('Memberium::' . self::$m4is_v4beyw7zqhr3 . '::PayPlanItems::' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

wp_redirect($m4is_r53562w9befcb2kh7rm4p7n5['redirect_url']);
exit;
}
else {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('flash',
 'invoice_payment', _x('Payment failed.', 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ));
}
}

public static function m4is_h4xpzd750dxs5bnyjcjhx6() {
if (! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return;

}
if (! wp_verify_nonce($_POST['_wpnonce'], 'oneclick_sale_' . $_POST['form_id']) ) {
wp_die(_x('Security Check Failed - Nonce Validation Error',
 'memb_one_click_sale', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
exit;
}
if (! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55($_POST['digital_signature'],
 $_POST['parameters']) ) {
wp_die(_x('Security Check Failed - Signature Validation Error', 'memb_one_click_sale', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );

exit;
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_r53562w9befcb2kh7rm4p7n5 = unserialize(base64_decode($_POST['parameters']) );

$m4is_c1s89abjcamg842fv8mw83 = $m4is_r53562w9befcb2kh7rm4p7n5['action_id'];
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_z331qzpscyepmkg = (int) $m4is_r53562w9befcb2kh7rm4p7n5['order_id'];
if ($m4is_c1s89abjcamg842fv8mw83 > '') {
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse($m4is_c1s89abjcamg842fv8mw83,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
}

public static function m4is_be31n5vyknq() {
$m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y = 'memb_change_email';

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
if (! wp_verify_nonce( $_POST['_wpnonce'], 'memb_email_change_' . $_POST['form_id'] ) ) {
wp_die( _x( 'Security Check Failed - Nonce Validation Error',
 $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
exit;
}
if (! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55($_POST['signature'],
 $_POST['actions']) ) {
wp_die(_x('Security Check Failed - Signature Validation Error', $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );

exit;
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if ($_POST['email1'] <> $_POST['email2']) {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('memb_flash',
 'email_change_message', '<p>' . _x( "Your new email addresses don't match.", 'memb_change_email', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>');

return;
}
if ( $_POST['email1'] == m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'contact', 'email' ) ) {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('memb_flash', 'email_change_message', '<p>' . _x('Your email address is already ',
 'memb_change_email', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . $_POST['email1'] . '</p>');
return;
}
$_POST['email1'] = stripslashes($_POST['email1']);

$m4is_gh7agjsse = unserialize(base64_decode($_POST['actions']) );
$m4is_nzyqn1sgrfvnvwbhj02drygsgms6 = get_user_by( 'email', $_POST['email1']);

if ($m4is_nzyqn1sgrfvnvwbhj02drygsgms6) {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('memb_flash', 'email_change_message',
 '<p>' . _x('That email address is already used on another member.', 'memb_change_email', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>');

return;
}

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_q9jtbmp64yk13jzd( $_POST['email1'] );
if ( ! empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('memb_flash',
 'email_change_message', '<p>' . _x('That email address is already on our list.', 'memb_change_email', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>');

return;
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_hartbe843crydzh = false;
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_hartbe843crydzh = self::$m4is_132xe588j->m4is_a25pd5av7mhr23c0xjnzetf96w4pb( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $_POST['email1'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ); 
}
if ($m4is_hartbe843crydzh) {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('memb_flash',
 'email_change_message', '<p>' . _x('Your email address has been changed to', 'memb_change_email', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . ' ' . $_POST['email1'] . '</p>');


if ( ! empty( $m4is_gh7agjsse['actionset_id'] ) ) {
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_gh7agjsse['actionset_id'] );

}
if (! empty($m4is_gh7agjsse['goal']) ) {
self::$m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_gh7agjsse['goal'] );
}
self::$m4is_132xe588j->m4is_m9bcx7dqv78();

wp_clear_auth_cookie();
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
wp_set_current_user( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

wp_set_auth_cookie($m4is_wk4dh1rnd3wmwvsggq51nhn87, true, false);
if (! empty($m4is_gh7agjsse['success_url']) ){
wp_redirect($m4is_gh7agjsse['success_url']);

exit;
}
if ( ! empty($_SERVER['REQUEST_URI']) ) {
wp_redirect( $_SERVER['REQUEST_URI'] );
exit;
}
return;
}
else {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj('memb_flash',
 'email_change_message', '<p>Your email address could not be changed to ' . $_POST['email1'] . '</p>');
if (! empty($m4is_gh7agjsse['failure_url']) ){
wp_redirect($m4is_gh7agjsse['failure_url']);

exit;
}
}
}

public static function m4is_xqq9hd2awgcj4t6mppx69() {
if ( self::$m4is_v8etech3dypxytdan798jd) {
return;
}
if ( ! is_user_logged_in() ) {
return;

}
if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'password_change_' . $_POST['form_id'] . $_POST['parameters'] ) ) {
wp_die( _x( 'Security Check Failed - Nonce Validation Error',
 'memb_change_password', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
exit;
}
if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['signature'],
 $_POST['parameters'] ) ) {
wp_die( _x( 'Security Check Failed - Signature Validation Error', 'memb_change_password', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );

exit;
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_b92kngdmpta6vyvkpg8 = 'memb_change_password';
$m4is_0864dacae86e26c2nevtsd8y1 = true;

$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$m4is_tbvjesm6ge = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'min_password_length' );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_r53562w9befcb2kh7rm4p7n5 = unserialize( base64_decode( $_POST['parameters'] ) );

$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = stripslashes( $_POST['password1'] );
$m4is_pae00hv11 = isset( $_POST['form_id'] ) ? (int) $_POST['form_id'] : 0;

$m4is_exf0cmscjsfyk = isset( $m4is_r53562w9befcb2kh7rm4p7n5['goal'] ) ? $m4is_r53562w9befcb2kh7rm4p7n5['goal'] : '';
$m4is_17cb8stmp0 = isset( $m4is_r53562w9befcb2kh7rm4p7n5['tagids'] ) ? $m4is_r53562w9befcb2kh7rm4p7n5['tagids'] : '';

$m4is_21cxfvnv9x394r98y6nareq1g1 = isset( $m4is_r53562w9befcb2kh7rm4p7n5['actionset_id'] ) ? $m4is_r53562w9befcb2kh7rm4p7n5['actionset_id'] : '';

$m4is_pqecxfec342ksq5fzv1mg = isset( $m4is_r53562w9befcb2kh7rm4p7n5['redirect_url'] ) ? $m4is_r53562w9befcb2kh7rm4p7n5['redirect_url'] : '';

$m4is_z9vcf0ww686qys48k3h9yfth = isset( $m4is_r53562w9befcb2kh7rm4p7n5['confirm_template_id'] ) ? (int) $m4is_r53562w9befcb2kh7rm4p7n5['confirm_template_id'] : 0;

$m4is_1kgtp108hmp = isset( $m4is_r53562w9befcb2kh7rm4p7n5['successurl'] ) ? $m4is_r53562w9befcb2kh7rm4p7n5['successurl'] : '';
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_r53562w9befcb2kh7rm4p7n5['contact_id']) {
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z( _x( 'You are not an Keap User.',
 $m4is_b92kngdmpta6vyvkpg8, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
return;
}
if ( empty( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g ) ) {
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z( _x('You cannot set your password to an Empty Password.',
 $m4is_b92kngdmpta6vyvkpg8, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
return;
}
if ( strpos( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g,
 '\\' ) !== false ) {
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z( _x( 'The backslash character may not be used in passwords.',
 $m4is_b92kngdmpta6vyvkpg8, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
return;
}
if (strlen($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g) < $m4is_tbvjesm6ge) {
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z( sprintf( _x( 'Your password must be at least %d characters long.',
 $m4is_b92kngdmpta6vyvkpg8, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ), $m4is_tbvjesm6ge) );
return;
}
if ( ! empty( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g ) && $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g != $_POST['password2'] ) {
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z( _x('The passwords entered do not match.',
 $m4is_b92kngdmpta6vyvkpg8, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
return;
}
$m4is_pqecxfec342ksq5fzv1mg = empty( $m4is_pqecxfec342ksq5fzv1mg ) ? $_SERVER['REQUEST_URI'] : $m4is_pqecxfec342ksq5fzv1mg;

$m4is_1we1qc8rdsrfq = self::$m4is_132xe588j->m4is_pmkbdnzvn2zr93dej92b0( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g );
if ( $m4is_1we1qc8rdsrfq ) {
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z( _x( 'Password Changed Successfully.',
 $m4is_b92kngdmpta6vyvkpg8, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_17cb8stmp0 );

self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_21cxfvnv9x394r98y6nareq1g1 );
self::$m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_exf0cmscjsfyk );

$m4is_pqecxfec342ksq5fzv1mg = empty( $m4is_1kgtp108hmp ) ? $m4is_pqecxfec342ksq5fzv1mg : $m4is_1kgtp108hmp;
$m4is_pqecxfec342ksq5fzv1mg = remove_query_arg( ['passwordchange'],
 $m4is_pqecxfec342ksq5fzv1mg );
$m4is_pqecxfec342ksq5fzv1mg = add_query_arg( ['passwordchange' => 'success'], $m4is_pqecxfec342ksq5fzv1mg );

if ( $m4is_z9vcf0ww686qys48k3h9yfth > 0 ) {
self::$m4is_wsme5a297xh0v6d5y->sendTemplate( [$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp], $m4is_z9vcf0ww686qys48k3h9yfth );

}
if ( ! empty( $m4is_pqecxfec342ksq5fzv1mg ) ) {
wp_redirect( $m4is_pqecxfec342ksq5fzv1mg, 302, 'Memberium Password Change Redirect' );

exit;
}
}
else {
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z( _x( 'Password Change Failed.', $m4is_b92kngdmpta6vyvkpg8,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
$m4is_pqecxfec342ksq5fzv1mg = add_query_arg( ['passwordchange' => 'failed'], $m4is_pqecxfec342ksq5fzv1mg );

}
nocache_headers();
if ( ! empty( $m4is_pqecxfec342ksq5fzv1mg ) ) {
wp_redirect( $m4is_pqecxfec342ksq5fzv1mg, 302, 'Memberium Password Change Redirect' );

exit;
}
}

public static function m4is_z4mzpnzctf0pn1vb2() {
if ( self::$m4is_v8etech3dypxytdan798jd ) {
return;
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

if ( is_user_logged_in() ) {
return;
}
$m4is_zxwt8y3szyy1aenkh = sanitize_email( trim( wp_unslash( $_POST['user_login'] ) ) );
if ( empty( $m4is_zxwt8y3szyy1aenkh ) ) {
return;

}
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = self::$m4is_132xe588j->m4is_20gcd48zxy6kz5vbx3ks201cnynd( $m4is_zxwt8y3szyy1aenkh );
if ( ! is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'WP_User' ) ) {
return;
}
$m4is_j8j55t8dz79m7 = get_password_reset_key( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );
$m4is_v0btf7mv632851tp3bp = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login;

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = site_url( 'wp-login.php?action=rp&key=' . rawurlencode( $m4is_j8j55t8dz79m7 ) . '&login=' . rawurlencode( $m4is_v0btf7mv632851tp3bp ) );

$m4is_m43hfew4atag = is_multisite() ? get_network()->site_name : wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );
$m4is_agrb04wvghmny2c4p8bwwf4 = sprintf( __( 'Password Reset for %s' ),
 $m4is_m43hfew4atag );
$m4is_5tmqg45z37r82cfb67prh = __( 'Someone has requested a password reset for the following account:' ) . "\r\n\r\n";

$m4is_5tmqg45z37r82cfb67prh .= sprintf( __( 'Site Name: %s' ), $m4is_m43hfew4atag ) . "\r\n\r\n";
$m4is_5tmqg45z37r82cfb67prh .= sprintf( __( 'Username: %s' ),
 $m4is_zxwt8y3szyy1aenkh ) . "\r\n\r\n";
$m4is_5tmqg45z37r82cfb67prh .= __( 'If you did not request a new password, just ignore this email and nothing will happen.' ) . "\r\n\r\n";

$m4is_5tmqg45z37r82cfb67prh .= __( 'To reset your password, please click the link below:') . "\r\n\r\n";
$m4is_5tmqg45z37r82cfb67prh .= $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq . "\r\n";

$m4is_agrb04wvghmny2c4p8bwwf4 = apply_filters( 'retrieve_password_title', $m4is_agrb04wvghmny2c4p8bwwf4, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login,
 $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );
$m4is_5tmqg45z37r82cfb67prh = apply_filters( 'retrieve_password_message', $m4is_5tmqg45z37r82cfb67prh,
 $m4is_j8j55t8dz79m7, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );
if ( $m4is_5tmqg45z37r82cfb67prh && ! wp_mail( $m4is_zxwt8y3szyy1aenkh,
 wp_specialchars_decode( $m4is_agrb04wvghmny2c4p8bwwf4), $m4is_5tmqg45z37r82cfb67prh ) ) {
wp_die( __( 'The lost password email could not be sent.' ) . "<br />\n" );

}
}

public static function m4is_fdvsc18tr() : void {
$m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y = 'memb_registration_form';
if ( ! wp_verify_nonce( $_POST['_wpnonce'],
 $_POST['params'] ) ) {
wp_die( _x( 'Invalid Registration Submission', $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );

}
if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['signature'], $_POST['params'] ) ) {
wp_die( _x( 'Security Check Failed - Signature Validation Error',
 $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

global $wpdb;

$m4is_gqsc4mq3nmh1sr5dknx6119v7 = [
'_wp_http_referer',
'_wpnonce',
'memb_form_type',
'params',
'signature'
];
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = false;

$m4is_7w9sx3x9v81jpa1n8mvrpcffnq = [];
$m4is_h3w9vf6qk5y1d9es1930as = false;
$m4is_5wdcjzj1bch66jxbbczj6k61 = true;
$m4is_1we1qc8rdsrfq = false;

$m4is_ytfbm0fkye = [];
$m4is_0wwdakz24 = false;
$m4is_wte2qk9hdk1zj7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' );
$m4is_tbvjesm6ge = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'min_password_length' );

$m4is_th384m7gvm775j7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'username_field' );
$m4is_akd4cjvbhtckz56 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'local_auth_only' );
$m4is_mwtvm04a3mhtaavdh0cc5npc71 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'recaptcha_v2' );

$m4is_5jc5cmdf11evygttp7nv3 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'recaptcha_v2_secret_key',
 '' );
$m4is_z4ts5pa39jf1yhjb4 = apply_filters( 'memberium/registration_form/post/pre', $_POST );
$m4is_gv7vjyv2c6g3nepw6 = unserialize( base64_decode( $m4is_z4ts5pa39jf1yhjb4['params'] ) );

$m4is_v1b5gnta3q76krxczza781gh4789rxb = array_filter( explode( ',', $m4is_gv7vjyv2c6g3nepw6['date_fields'] ) );
$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = array_filter( explode( ',',
 $m4is_gv7vjyv2c6g3nepw6['required_fields'] ) );
$m4is_hazedkhv3ssxy0etnpwa39z58e8jjg7 = ! $m4is_akd4cjvbhtckz56;
$m4is_zetry4gx1mnpj14q417bcdw469sxrbfw = $m4is_wte2qk9hdk1zj7 . '_confirmation';


if ( $m4is_gv7vjyv2c6g3nepw6['remove_accents'] ) {
foreach( $m4is_z4ts5pa39jf1yhjb4 as $m4is_bqhtspcavhb01spmfd3x=>$m4is_29gzevpx8rbkp ) {
$m4is_z4ts5pa39jf1yhjb4[$m4is_bqhtspcavhb01spmfd3x] = trim( remove_accents( $m4is_29gzevpx8rbkp ) );

}
}

if ( $m4is_gv7vjyv2c6g3nepw6['recaptcha'] && isset( $m4is_z4ts5pa39jf1yhjb4['g-recaptcha-response'] ) && $m4is_mwtvm04a3mhtaavdh0cc5npc71 ) {
$m4is_rwnsk0ya4t9ygr5 = $m4is_z4ts5pa39jf1yhjb4['g-recaptcha-response'];

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = sprintf( 'https://www.google.com/recaptcha/api/siteverify?secret=%s&response=%s', $m4is_5jc5cmdf11evygttp7nv3,
 $m4is_rwnsk0ya4t9ygr5 );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = wp_remote_get( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = wp_remote_retrieve_body( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

$m4is_xcx7fvh5mx = json_decode( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );
if ( ! $m4is_xcx7fvh5mx->success ) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;

$m4is_7w9sx3x9v81jpa1n8mvrpcffnq[] = _x( 'You need to successfully pass the CAPTCHA Test to register.', 'memb_registration_form', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

}
}

if ( ! isset( $m4is_z4ts5pa39jf1yhjb4[$m4is_wte2qk9hdk1zj7] ) && ! isset( $m4is_z4ts5pa39jf1yhjb4[$m4is_zetry4gx1mnpj14q417bcdw469sxrbfw] ) ) {
$m4is_z4ts5pa39jf1yhjb4[$m4is_zetry4gx1mnpj14q417bcdw469sxrbfw] = $m4is_z4ts5pa39jf1yhjb4[$m4is_wte2qk9hdk1zj7] = self::$m4is_132xe588j->m4is_d4hrfy3cjzb3y58yrjedq69fqd958dp();

$m4is_hazedkhv3ssxy0etnpwa39z58e8jjg7 = true;
$m4is_0wwdakz24 = true;
}

if ( is_array( $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb ) ) {
foreach ( $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb as $m4is_paffdpphadpryhxj1m ) {
if ( ! isset( $m4is_z4ts5pa39jf1yhjb4[$m4is_paffdpphadpryhxj1m] ) ) {
$m4is_5wdcjzj1bch66jxbbczj6k61 = false;

$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;
$m4is_7w9sx3x9v81jpa1n8mvrpcffnq[] = _x( 'You are missing required fields.', 'memb_registration_form',
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
}
}
}

if ( ! empty( $m4is_z4ts5pa39jf1yhjb4[$m4is_wte2qk9hdk1zj7] ) && strlen( $m4is_z4ts5pa39jf1yhjb4[$m4is_wte2qk9hdk1zj7]) < $m4is_tbvjesm6ge ) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;

$m4is_7w9sx3x9v81jpa1n8mvrpcffnq[] = sprintf( _x( 'Your password must be at least %d characters long.', 'memb_registration_form', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
 $m4is_tbvjesm6ge );
}

if ( strpos( $m4is_z4ts5pa39jf1yhjb4[$m4is_wte2qk9hdk1zj7], '\\' ) !== false ) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;

$m4is_7w9sx3x9v81jpa1n8mvrpcffnq[] = _x( 'You may not use the backslash (\\) character in passwords.', 'memb_registration_form', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

}

if ( is_array( $m4is_z4ts5pa39jf1yhjb4 ) ) {
foreach ( $m4is_z4ts5pa39jf1yhjb4 as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_aey05vmphwh = $m4is_j8j55t8dz79m7 . '_confirmation';

if ( isset( $m4is_z4ts5pa39jf1yhjb4[$m4is_aey05vmphwh] ) && $m4is_z4ts5pa39jf1yhjb4[$m4is_j8j55t8dz79m7] <> $m4is_z4ts5pa39jf1yhjb4[$m4is_aey05vmphwh] ) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;

$m4is_7w9sx3x9v81jpa1n8mvrpcffnq[] = _x( 'Your confirmed fields do not match.', 'memb_registration_form', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

}
}
unset( $m4is_j8j55t8dz79m7, $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_rq1ekzh1zxr );
}
$m4is_z4ts5pa39jf1yhjb4[$m4is_th384m7gvm775j7] = stripslashes( $m4is_z4ts5pa39jf1yhjb4[$m4is_th384m7gvm775j7] );

$m4is_h3w9vf6qk5y1d9es1930as = self::m4is_6qwp5a8df6ey4nakcbh( $m4is_z4ts5pa39jf1yhjb4[$m4is_th384m7gvm775j7] );

if ( ! $m4is_h3w9vf6qk5y1d9es1930as ) {
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
$m4is_wte2qk9hdk1zj7,

'Groups'
];
$m4is_j34bmw9dcjexfj1qpz = [
$m4is_th384m7gvm775j7 => $m4is_z4ts5pa39jf1yhjb4[$m4is_th384m7gvm775j7]
];
$m4is_vhssdx8pjq8k0mjxv1jdc5vjpc = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2( 'Contact',
 1000, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
if ( is_array( $m4is_vhssdx8pjq8k0mjxv1jdc5vjpc ) ) {
foreach ( $m4is_vhssdx8pjq8k0mjxv1jdc5vjpc as $m4is_cyg7rcfhzagmm5v ) {
if ( ! empty( $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] ) ) {
$m4is_h3w9vf6qk5y1d9es1930as = true;

}
}
}
}

if ( ! $m4is_h3w9vf6qk5y1d9es1930as && $m4is_th384m7gvm775j7 <> 'Email' && isset( $m4is_z4ts5pa39jf1yhjb4['Email'] ) ) {
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
$m4is_wte2qk9hdk1zj7,

'Groups',
'Id',
'Email'
];
$m4is_j34bmw9dcjexfj1qpz = [
'Email' => $m4is_z4ts5pa39jf1yhjb4[$m4is_th384m7gvm775j7]
];
$m4is_vhssdx8pjq8k0mjxv1jdc5vjpc = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2( 'Contact',
 1000, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
if ( is_array( $m4is_vhssdx8pjq8k0mjxv1jdc5vjpc ) ) {
foreach ( $m4is_vhssdx8pjq8k0mjxv1jdc5vjpc as $m4is_cyg7rcfhzagmm5v ) {
if ( $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] > '' ) {
$m4is_h3w9vf6qk5y1d9es1930as = true;

}
}

}
}

if ( $m4is_h3w9vf6qk5y1d9es1930as ) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;
$m4is_7w9sx3x9v81jpa1n8mvrpcffnq[] = _x( 'That username is not available.',
 'memb_registration_form', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
}

if ( ! $m4is_bbjejhszczf2b3wrxm849kpfyzb5 && ! $m4is_h3w9vf6qk5y1d9es1930as ) {
if ( empty( $m4is_z4ts5pa39jf1yhjb4[$m4is_wte2qk9hdk1zj7] ) ) {
$m4is_z4ts5pa39jf1yhjb4[$m4is_wte2qk9hdk1zj7] = self::$m4is_132xe588j->m4is_d4hrfy3cjzb3y58yrjedq69fqd958dp();

$m4is_0wwdakz24 = true;
$m4is_hazedkhv3ssxy0etnpwa39z58e8jjg7 = true;
}
$m4is_n5bx9prx9xqpwkgs7em6kcpja1rpg72 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n('Contact',
 true);
$m4is_cyg7rcfhzagmm5v = [];
foreach ( $m4is_z4ts5pa39jf1yhjb4 as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( in_array( $m4is_j8j55t8dz79m7,
 $m4is_v1b5gnta3q76krxczza781gh4789rxb ) ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = date( 'Ymd\Th:i:s', strtotime( $m4is_rqxytszfq5v6syth1csqqxvy5 ) );

}
if ( in_array( $m4is_j8j55t8dz79m7, $m4is_n5bx9prx9xqpwkgs7em6kcpja1rpg72 ) ) {
$m4is_cyg7rcfhzagmm5v[$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
}

if ( $m4is_akd4cjvbhtckz56 == true && $m4is_hazedkhv3ssxy0etnpwa39z58e8jjg7 == false ) {
unset( $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] );

}
if ( $m4is_gv7vjyv2c6g3nepw6['pass_password'] == false ) {
$m4is_gqsc4mq3nmh1sr5dknx6119v7[] = $m4is_wte2qk9hdk1zj7;
$m4is_gqsc4mq3nmh1sr5dknx6119v7[] = $m4is_zetry4gx1mnpj14q417bcdw469sxrbfw;

}

if ( is_array( $m4is_cyg7rcfhzagmm5v ) && ! empty( $m4is_cyg7rcfhzagmm5v ) && $m4is_gv7vjyv2c6g3nepw6['pass_fields'] ) {
foreach ( $m4is_cyg7rcfhzagmm5v as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( ! in_array( $m4is_j8j55t8dz79m7, $m4is_gqsc4mq3nmh1sr5dknx6119v7 ) ) {
$m4is_zxa05fq9f81p8g = '';

if ( $m4is_gv7vjyv2c6g3nepw6['inf_fields'] ) {
$m4is_j8j55t8dz79m7 = substr( $m4is_j8j55t8dz79m7, 0, 1 ) == '_' ? 'inf_custom' . $m4is_j8j55t8dz79m7 : 'inf_field_' . $m4is_j8j55t8dz79m7;

}
$m4is_ytfbm0fkye[$m4is_j8j55t8dz79m7] = urlencode( $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
}
foreach ( $m4is_z4ts5pa39jf1yhjb4 as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( ! isset( $m4is_cyg7rcfhzagmm5v[$m4is_j8j55t8dz79m7] ) ) {
if ( ! in_array( $m4is_j8j55t8dz79m7,
 $m4is_gqsc4mq3nmh1sr5dknx6119v7 ) ) {
$m4is_ytfbm0fkye[$m4is_j8j55t8dz79m7] = urlencode( $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
}
}
}

if ( ! empty( $m4is_cyg7rcfhzagmm5v ) ) {

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_fcp8rjzp5vm( $m4is_cyg7rcfhzagmm5v );

$m4is_k9bxa399ebag2fr7vjh534wavtcp = _x( 'Membership Signup New User', 'memb_registration_form', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_cyg7rcfhzagmm5v );
$m4is_5xv4bmszckmyy08tge4b3z = ['Email',
 'EmailAddress2', 'EmailAddress3'];
foreach( $m4is_5xv4bmszckmyy08tge4b3z as $m4is_vv7rgg23s17bgwbqc97 ) {
if ( ! empty( $m4is_cyg7rcfhzagmm5v[$m4is_vv7rgg23s17bgwbqc97] ) ) {
$m4is_cyg7rcfhzagmm5v[$m4is_vv7rgg23s17bgwbqc97] = sanitize_email( $m4is_cyg7rcfhzagmm5v[$m4is_vv7rgg23s17bgwbqc97] );

m4is_rw8p2dfy073ez::m4is_rxf2xq5wvdkk7jhkx8( $m4is_cyg7rcfhzagmm5v[$m4is_vv7rgg23s17bgwbqc97], $m4is_k9bxa399ebag2fr7vjh534wavtcp );

}
}
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
self::$m4is_132xe588j->m4is_5qyk7ea4p2nw8ph( $m4is_gv7vjyv2c6g3nepw6['goal'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_gv7vjyv2c6g3nepw6['tagids'], $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_gv7vjyv2c6g3nepw6['action_id'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$rows = self::$m4is_132xe588j->m4is_km2vptq0bwg( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$user_id = self::$m4is_132xe588j->m4is_f54f6mxb3zka1m( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_z4ts5pa39jf1yhjb4[$m4is_wte2qk9hdk1zj7] );

if ( $m4is_gv7vjyv2c6g3nepw6['autologin'] ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'id',
 $user_id );
$m4is_aczehtt06z8n2h = $m4is_cyg7rcfhzagmm5v[$m4is_th384m7gvm775j7];
if ( ! empty( $m4is_gv7vjyv2c6g3nepw6['success_url'] ) ) {
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_2zc273hkf5r( add_query_arg( $m4is_ytfbm0fkye,
 $m4is_gv7vjyv2c6g3nepw6['success_url'] ) );
}
wp_set_auth_cookie( $user_id );
wp_set_current_user( $user_id );
m4is_an0pxqdph6ax26586c::m4is_rf7gc6dzkjjgmdb( $m4is_aczehtt06z8n2h );

do_action( 'wp_login', $m4is_aczehtt06z8n2h, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );
self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_ecwz13c1nvvm( $m4is_cyg7rcfhzagmm5v,
 $user_id );
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $user_id );
}
}
else {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;

}
}
}

if ( $m4is_bbjejhszczf2b3wrxm849kpfyzb5 || $m4is_h3w9vf6qk5y1d9es1930as ) {
$m4is_pqecxfec342ksq5fzv1mg = $m4is_gv7vjyv2c6g3nepw6['failure_url'];

}
else {
$m4is_pqecxfec342ksq5fzv1mg = $m4is_gv7vjyv2c6g3nepw6['success_url'];
}
if ( ! empty( $m4is_7w9sx3x9v81jpa1n8mvrpcffnq ) ) {
$m4is_ytfbm0fkye['memb_msg'] = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_81c2wat28fdqk775kc53nehxbqf( 'error_message',
 $m4is_7w9sx3x9v81jpa1n8mvrpcffnq );
}
if ( ! empty( $m4is_pqecxfec342ksq5fzv1mg ) ) {
$m4is_pqecxfec342ksq5fzv1mg = add_query_arg( $m4is_ytfbm0fkye,
 $m4is_pqecxfec342ksq5fzv1mg ) ;
wp_redirect( $m4is_pqecxfec342ksq5fzv1mg );
exit;
}
}

public static function m4is_kdw5pp1a4ags() : void {
if ( self::$m4is_v8etech3dypxytdan798jd) {
return;

}
if ( ! self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v() ) {
return;
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_r53562w9befcb2kh7rm4p7n5 = unserialize( base64_decode( $_POST['parameters'] ) );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_r53562w9befcb2kh7rm4p7n5['contact_id'] ?? 0;

$m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y = 'memb_add_paymentmethod_' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

if ( ! wp_verify_nonce( $_POST['_wpnonce'],
 'add_paymentmethod_' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
wp_die( _x( 'Security Check Failed - Nonce Validation Error', $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
}
if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['signature'], $_POST['parameters'] ) ) {
wp_die( _x( 'Security Check Failed - Signature Validation Error',
 $m4is_be39p19g8xhq5ja8xk7ck1tsdp9f5y, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
}
$m4is_22txjjt01m3he21xzz = (int) $_POST['payment_method_id'] ?? 0;

$m4is_stq69mb5t3yhyzxjadp9bgmhd517vpx = (int) $_POST['creditcard_id'] ?? 0;
$m4is_7q2ef6en0 = (bool) $m4is_r53562w9befcb2kh7rm4p7n5['backcharge'];

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = json_decode( stripslashes( trim( $_POST['payment_response'] ?? '' ) ) );
$m4is_w6h09pynxacxqvqwbgnynx6h = (bool) $m4is_r53562w9befcb2kh7rm4p7n5['logging'];

$m4is_csx0y36xw = (bool) $m4is_r53562w9befcb2kh7rm4p7n5['debug'];
$m4is_syqymyz40rx4xgtqp8475ffwzw = (bool) $m4is_r53562w9befcb2kh7rm4p7n5['default'];

$m4is_56rczps6vpadratcpyedfcz8tzfz3 = sanitize_text_field( $_POST['payment_message'] ?? '' );
$m4is_hf6ctsm2pnexk = (int) $m4is_r53562w9befcb2kh7rm4p7n5['tag_id'];

$m4is_ez88kg12as2x4fyqdq = array_filter( explode( ',', $m4is_r53562w9befcb2kh7rm4p7n5['plan_ids'] ) );
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = trim( $m4is_r53562w9befcb2kh7rm4p7n5['redirect'] ?? '' );

$m4is_qe1c42nqyq6 = trim( $m4is_r53562w9befcb2kh7rm4p7n5['failure'] ?? '' );
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = $m4is_tfecza742dzhrkkbv781dnbvf40m6 ?: $_SERVER['HTTP_REFERER'];

$m4is_qe1c42nqyq6 = $m4is_qe1c42nqyq6 ?: $_SERVER['HTTP_REFERER'];

if ( $m4is_csx0y36xw ) {
echo '<p>Add Payment Method Debug</p>';

echo '<p><strong>Shortcode Settings:</strong></p>';
echo '<p>Backcharge:  ', (int) $m4is_7q2ef6en0, '</p>';
echo '<p>Debug:  ', (int) $m4is_csx0y36xw,
 '</p>';
echo '<p>Default:  ', (int) $m4is_syqymyz40rx4xgtqp8475ffwzw, '</p>';
echo '<p>Tag ID:  ', esc_html( $m4is_hf6ctsm2pnexk ),
 '</p>';
echo '<p>Plan IDs:  ', esc_html( implode( ', ', $m4is_ez88kg12as2x4fyqdq ) ), '</p>';
echo '<p>Success Redirect:  ', esc_html( $m4is_tfecza742dzhrkkbv781dnbvf40m6 ),
 '</p>';
echo '<p>Failure Redirect:  ', esc_html( $m4is_qe1c42nqyq6 ), '</p>';
echo '<p><strong>New Card Results from Keap:</strong></p>';

echo '<p>Payment Method ID:  ', (int) $m4is_22txjjt01m3he21xzz, '</p>';
echo '<p>New Card ID:  ', (int) $m4is_stq69mb5t3yhyzxjadp9bgmhd517vpx,
 '</p>';
echo '<p>New Card Message:  ', esc_html( $m4is_56rczps6vpadratcpyedfcz8tzfz3 ), '</p>';
echo '<p>Success:  ', print_r( esc_html( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->success ?? 0 ),
 true ), '</p>';
echo '<p><strong>Raw Data:</strong></p>';
echo '<pre>Form Response:  ', print_r( $_POST, true ), '</pre>';
echo '<p>Raw Keap Response:  ',
 print_r( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz, true ), '</p>';
}
if ( ! $m4is_stq69mb5t3yhyzxjadp9bgmhd517vpx ) {
if ( $m4is_csx0y36xw ) {
echo '<p>No Credit Card Added.</p>';

die();
}
if ( ! headers_sent() ) {
$m4is_qe1c42nqyq6 = add_query_arg( ['error' => 'CARD_NOT_ADDED'], $m4is_qe1c42nqyq6 );
wp_redirect( $m4is_qe1c42nqyq6,
 302, 'Add Payment Method failed.  Card not added.' );
exit;
}
return;
}

m4is_kkk64g440mhf2xhxafr::m4is_tkz54xmd9vkw5j8rt1w0a( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );


if ( $m4is_stq69mb5t3yhyzxjadp9bgmhd517vpx ) {
$m4is_x5xzg0v4t = self::m4is_80pzf3rapfjrkzkgvzk6ztsc58( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_ez88kg12as2x4fyqdq );
self::m4is_fw2amnpr3ehekpd9( $m4is_x5xzg0v4t, $m4is_stq69mb5t3yhyzxjadp9bgmhd517vpx );
if ( $m4is_7q2ef6en0 ) {
$m4is_x5xzg0v4t = self::m4is_80pzf3rapfjrkzkgvzk6ztsc58( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_ez88kg12as2x4fyqdq );
self::m4is_vr7brxtk( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_stq69mb5t3yhyzxjadp9bgmhd517vpx, $m4is_x5xzg0v4t,
 $m4is_w6h09pynxacxqvqwbgnynx6h, $m4is_csx0y36xw );
}
}

if ( $m4is_hf6ctsm2pnexk ) {
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_hf6ctsm2pnexk,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
self::$m4is_132xe588j->m4is_mz8ypkzzr4fxz8e42njma37v6ge02( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

self::$m4is_132xe588j->m4is_km2vptq0bwg( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
if ( $m4is_csx0y36xw ) {
echo '<p>Finished processing.</p>';

die();
}
if ( ! headers_sent() ) {
wp_redirect( $m4is_tfecza742dzhrkkbv781dnbvf40m6, 302, 'Add Payment Method Redirect' );
exit;
}
}




private static function m4is_6qwp5a8df6ey4nakcbh( string $m4is_zxwt8y3szyy1aenkh ) : bool {
global $wpdb;

$m4is_zxwt8y3szyy1aenkh = sanitize_email( $m4is_zxwt8y3szyy1aenkh );
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT COUNT(*) FROM `{$wpdb->users}` WHERE `user_login` = %s OR `user_email` = %s";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_zxwt8y3szyy1aenkh, $m4is_zxwt8y3szyy1aenkh );
$m4is_7g9y793jjckyb = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7,
 0 );
return (boolean) array_shift( $m4is_7g9y793jjckyb );
}

private static function m4is_80pzf3rapfjrkzkgvzk6ztsc58( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 array $m4is_ez88kg12as2x4fyqdq = [] ) : array {
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'AutoCharge',
'CC1',
'ContactId',
'Id',
'MerchantAccountId',

'OriginatingOrderId',
'Status',
'SubscriptionPlanId',
];
$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,

'AutoCharge' => '1',
'Status' => '%', 
];
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_b8kp39yep9qysj = [];

$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj( 'RecurringOrder', $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56,
 $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', false );
$m4is_n10zfg6gv5y820ftz44 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'merchant_account_id' );
foreach( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
if ( empty( $m4is_ez88kg12as2x4fyqdq ) || in_array( $m4is_bamv772v['SubscriptionPlanId'],
 $m4is_ez88kg12as2x4fyqdq ) ) {
$m4is_b8kp39yep9qysj[$m4is_bamv772v['Id']] = [
'CC1' => isset( $m4is_bamv772v['CC1'] ) ? $m4is_bamv772v['CC1'] : 0,

'Id' => isset( $m4is_bamv772v['Id'] ) ? $m4is_bamv772v['Id'] : 0,
'MerchantAccountId' => empty( $m4is_bamv772v['MerchantAccountId'] ) ? $m4is_n10zfg6gv5y820ftz44 : $m4is_bamv772v['MerchantAccountId'],

'OriginatingOrderId' => isset( $m4is_bamv772v['OriginatingOrderId'] ) ? $m4is_bamv772v['OriginatingOrderId'] : 0,
'Status' => isset( $m4is_bamv772v['Status'] ) ? $m4is_bamv772v['Status'] : 0,

'ContactId' => isset( $m4is_bamv772v['ContactId'] ) ? $m4is_bamv772v['ContactId'] : 0,
'AutoCharge' => isset( $m4is_bamv772v['AutoCharge'] ) ? $m4is_bamv772v['AutoCharge'] : 0,

];
}
}
return $m4is_b8kp39yep9qysj;
}

private static function m4is_fw2amnpr3ehekpd9( array $m4is_b8kp39yep9qysj, int $m4is_wtqm5h9z3 ) {
if ( empty( $m4is_b8kp39yep9qysj ) ) {
return;

}
foreach ( $m4is_b8kp39yep9qysj as $m4is_j8j55t8dz79m7 => $m4is_z1w4e9gz8m3e9pg7yydpb2 ) {
if ( $m4is_z1w4e9gz8m3e9pg7yydpb2['Status'] !== 'Active' ) {
continue;

}
if ( $m4is_z1w4e9gz8m3e9pg7yydpb2['CC1'] == $m4is_wtqm5h9z3 ) {
continue;
}
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) $m4is_z1w4e9gz8m3e9pg7yydpb2['Id'];

$m4is_46mk286a9b51zt4aweshvcbzah0m = [
'CC1' => (int) $m4is_wtqm5h9z3,
'MerchantAccountId' => (int) $m4is_z1w4e9gz8m3e9pg7yydpb2['MerchantAccountId'],
 
'AutoCharge' => 1,
];
m4is_xm67qjyegqdeb9wqcm::m4is_5smzakqeahg0vdxh35zwmhx7kj01s8( 'RecurringOrder', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_46mk286a9b51zt4aweshvcbzah0m );
}
}

private static function m4is_vr7brxtk( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, int $m4is_wtqm5h9z3,
 array $m4is_b8kp39yep9qysj, bool $m4is_w6h09pynxacxqvqwbgnynx6h = false, bool $m4is_vx16q168vgkd3kx75wpdj2x94mzy2ws = false ) : void {
if ( $m4is_vx16q168vgkd3kx75wpdj2x94mzy2ws ) echo '<pre>Starting Backcharge</pre>';

$m4is_n10zfg6gv5y820ftz44 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'merchant_account_id' );
if ( ! $m4is_n10zfg6gv5y820ftz44 ) {
if ( $m4is_vx16q168vgkd3kx75wpdj2x94mzy2ws ) {
echo '<pre>[Warning] Default merchant ID not set.  Invoice backcharge aborted.</pre>';

}
error_log( "Memberium (" . __LINE__ . ' ' . __FUNCTION__ . "): [Warning] Default merchant ID not set.  Invoice backcharge aborted." );

return;
}
$m4is_qpzk7kkc6v2bhxchqns6f9m = self::$m4is_132xe588j->m4is_f51yh9x2x5zd1b7gtq0g( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, false,
 true, true ); 
$m4is_jrrk79nfysd0mvn35rja5x0b = is_array( $m4is_qpzk7kkc6v2bhxchqns6f9m ) ? count( $m4is_qpzk7kkc6v2bhxchqns6f9m ) : 0;

if ( $m4is_jrrk79nfysd0mvn35rja5x0b === 0 ) {
if ( $m4is_vx16q168vgkd3kx75wpdj2x94mzy2ws ) {
echo '<pre>No invoices found to backcharge.</pre>';

}
return;
}

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',
'JobRecurringId',
];
$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,

];
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_emz0mwk3g = [];
$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2( 'Job',
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
foreach( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_emz0mwk3g[$m4is_bamv772v['Id']] = isset( $m4is_bamv772v['JobRecurringId'] ) ? $m4is_bamv772v['JobRecurringId'] : 0;

}
unset($m4is_tbdh9qb6r6z, $m4is_bamv772v);
$m4is_3h2p59t1q80qzpcs = [];
$m4is_mev7vkvsh57ps83zazbetrc1j3ghrj = count( $m4is_emz0mwk3g );

if ( $m4is_vx16q168vgkd3kx75wpdj2x94mzy2ws ) {
echo "Default Merchant ID: {$m4is_n10zfg6gv5y820ftz44}<br>";
echo "Unpaid Invoices Found: {$m4is_jrrk79nfysd0mvn35rja5x0b}<br>";

echo "Unpaid Jobs Found: {$m4is_mev7vkvsh57ps83zazbetrc1j3ghrj}<br>";
echo "Invoices: <pre>", print_r( $m4is_qpzk7kkc6v2bhxchqns6f9m,
 true ), "</pre>";
echo "Jobs: <pre>", print_r( $m4is_emz0mwk3g, true ), "</pre>";
}
if ( $m4is_jrrk79nfysd0mvn35rja5x0b ) {
foreach( $m4is_qpzk7kkc6v2bhxchqns6f9m as $m4is_hdseqgtp1yd3cjxf20r ) {
if ( ( $m4is_hdseqgtp1yd3cjxf20r['TotalPaid'] < $m4is_hdseqgtp1yd3cjxf20r['TotalDue'] ) and ( $m4is_hdseqgtp1yd3cjxf20r['PayStatus'] == '0' ) and ( $m4is_hdseqgtp1yd3cjxf20r['TotalDue'] > 0 ) ) {
$m4is_5yed0nks1a6dg6en = $m4is_hdseqgtp1yd3cjxf20r['Id'];

$m4is_91gfr7je = $m4is_hdseqgtp1yd3cjxf20r['JobId'];
if ( isset( $m4is_emz0mwk3g[$m4is_91gfr7je] ) ) {
$m4is_83k4y8679hs6y5rvg8r0g5bpcw = $m4is_emz0mwk3g[$m4is_91gfr7je];

if ( ! empty( $m4is_b8kp39yep9qysj[$m4is_83k4y8679hs6y5rvg8r0g5bpcw] ) && $m4is_b8kp39yep9qysj[$m4is_83k4y8679hs6y5rvg8r0g5bpcw]['Status'] == 'Active' ) {
$m4is_3h2p59t1q80qzpcs[$m4is_5yed0nks1a6dg6en] = [
'invoice_id' =>
 (int) $m4is_5yed0nks1a6dg6en,
'recurringorder_id' => (int) $m4is_83k4y8679hs6y5rvg8r0g5bpcw,
'merchant_id' => $m4is_b8kp39yep9qysj[$m4is_83k4y8679hs6y5rvg8r0g5bpcw]['MerchantAccountId'] ? (int) $m4is_b8kp39yep9qysj[$m4is_83k4y8679hs6y5rvg8r0g5bpcw]['MerchantAccountId'] : 0,

'total_due' => $m4is_hdseqgtp1yd3cjxf20r['TotalDue'],
];
}
elseif ( isset( $m4is_emz0mwk3g[$m4is_91gfr7je] ) && $m4is_emz0mwk3g[$m4is_91gfr7je] == 0) {
$m4is_3h2p59t1q80qzpcs[$m4is_5yed0nks1a6dg6en] = [
'invoice_id' =>
 (int) $m4is_5yed0nks1a6dg6en,
'recurringorder_id' => 0,
'merchant_id' => $m4is_n10zfg6gv5y820ftz44,
'total_due' => $m4is_hdseqgtp1yd3cjxf20r['TotalDue'],

];
}
}
}
}
}
if ( $m4is_vx16q168vgkd3kx75wpdj2x94mzy2ws ) {
echo "Invoices: <pre>", print_r( $m4is_qpzk7kkc6v2bhxchqns6f9m, true ),
 "</pre>";
echo "Invoices to Backcharge: <pre>", print_r( $m4is_3h2p59t1q80qzpcs, true ), "</pre>";
}

usort( $m4is_3h2p59t1q80qzpcs,
 function( $a, $b ) {
if ( $a['total_due'] > $b['total_due'] ) return -1;
if ( $a['total_due'] < $b['total_due'] ) return 1;
if ( $a['invoice_id'] < $b['invoice_id'] ) return -1;

if ( $a['invoice_id'] > $b['invoice_id'] ) return 1;
return 0;
});

foreach( $m4is_3h2p59t1q80qzpcs as $m4is_s8cs5mdq57e5bgpqzd ) {
if ( $m4is_s8cs5mdq57e5bgpqzd['merchant_id'] ) {
$m4is_hartbe843crydzh = self::$m4is_wsme5a297xh0v6d5y->chargeInvoice( $m4is_s8cs5mdq57e5bgpqzd['invoice_id'],
 'Updated Credit Card Back Charge', (int) $m4is_wtqm5h9z3, $m4is_s8cs5mdq57e5bgpqzd['merchant_id'], false );
if ( $m4is_vx16q168vgkd3kx75wpdj2x94mzy2ws ) {
echo '<pre>Contact ID:  ',
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, '</pre>';
echo '<pre>Credit Card ID:  ', $m4is_wtqm5h9z3, '</pre>';
echo '<pre>Merchant ID:  ',
 $m4is_s8cs5mdq57e5bgpqzd['merchant_id'], '</pre>';
echo '<pre>Invoice ID:  ', $m4is_s8cs5mdq57e5bgpqzd['invoice_id'], '</pre>';
if ( ! empty( $m4is_hartbe843crydzh['Message'] ) ) echo '<pre>Keap Response:  ',
 $m4is_hartbe843crydzh['Message'], '</pre>';
}
if ( $m4is_w6h09pynxacxqvqwbgnynx6h ) {
error_log( '[Memberium] Backcharging - Contact ID:     ' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

error_log( '[Memberium] Backcharging - Credit Card ID: ' . $m4is_wtqm5h9z3 );
error_log( '[Memberium] Backcharging - Merchant ID:    ' . $m4is_s8cs5mdq57e5bgpqzd['merchant_id'] );

error_log( '[Memberium] Backcharging - Invoice ID:     ' . $m4is_s8cs5mdq57e5bgpqzd['invoice_id'] );
error_log( '[Memberium] Backcharging - API Result:     ' . $m4is_hartbe843crydzh['Message'] );

}
if ( is_string( $m4is_hartbe843crydzh ) ) {
error_log( "Memberium (" . __LINE__ . ' ' . __FUNCTION__ . "): [Warning] Error Charging Invoice ID {$m4is_s8cs5mdq57e5bgpqzd['invoice_id']} - {$m4is_hartbe843crydzh}" );

}
}
else {
error_log( "Memberium (" . __LINE__ . ' ' . __FUNCTION__ . "): [Warning] Error Charging Invoice ID {$m4is_s8cs5mdq57e5bgpqzd['invoice_id']} - No Merchant ID" );

}
}
}
}