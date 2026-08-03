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

m4is_dzdct4wk::m4is_z6c3r724qhd();
final class m4is_dzdct4wk {
static private $m4is_132xe588j;
static private $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;

static private $m4is_mhqzty3k54fv;

private function __construct() {}

static function m4is_z6c3r724qhd() : void {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'memberium';
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_mhqzty3k54fv = m4is_p2r78mkk9tdtwpmc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}

static function m4is_4yvx6mb5v4hsfvktpv() {
global $memb_messages;


$m4is_x59rxz203x1nf3hns8z = (int) $_POST['contact_id'];


if ( md5( wp_salt( 'nonce' ) . $m4is_x59rxz203x1nf3hns8z ) <> $_POST['signature'] ) {
return;

}

$m4is_7b2yfzk0054 = [
self::$m4is_mhqzty3k54fv->m4is_jvjswjxb6h() => '',
];

$m4is_hpcw9f63rfzrawvnj1b52c394 = (int) self::$m4is_mhqzty3k54fv->m4is_f3h1cgn6967wdgcz4xz9c1n();

$m4is_11ry3n5k0nt77cxk5wmbe033r3c = self::$m4is_mhqzty3k54fv->m4is_7h5hxgv0nzjyjr3y9g1sbpx();
$m4is_5ygx9ywzd4gfc1dwqb = get_current_user_id();

$m4is_yan573ys3brnv39zsernk3xs = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_x59rxz203x1nf3hns8z );
m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_x59rxz203x1nf3hns8z,
 $m4is_7b2yfzk0054 );
m4is_xm67qjyegqdeb9wqcm::m4is_p9t3a40qehbq9ywrvrgje2vp8z( $m4is_x59rxz203x1nf3hns8z, $m4is_11ry3n5k0nt77cxk5wmbe033r3c );

m4is_w3pp5rsxdc03bns3::m4is_07fbvb4g75( $m4is_x59rxz203x1nf3hns8z, $m4is_hpcw9f63rfzrawvnj1b52c394 );
self::$m4is_132xe588j->m4is_km2vptq0bwg($m4is_x59rxz203x1nf3hns8z);

self::$m4is_mhqzty3k54fv->m4is_n627ntey0gxnss6e11sxtw9ks8st4( $m4is_yan573ys3brnv39zsernk3xs, $m4is_5ygx9ywzd4gfc1dwqb );

$memb_messages['flash']['create_child_result'] = '<p style="color:green;font-weight:bold;">' . _x( 'Child Account removed.',
 'umbrella_list_children', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>';
}

static function m4is_kvpgz5dnnav8h91x7pb0gc38y0() {
global $memb_messages;


if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'memb_childenroll' ) ) {
wp_die( 'Security Check Failed - Nonce Validation Error' );
exit;

}

if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['digital_signature'], $_POST['params'] ) ) {
wp_die( 'Security Check Failed - Signature Validation Error');

exit;
}

$m4is_m8x3z0ehyggbsd = self::$m4is_mhqzty3k54fv->m4is_jvjswjxb6h();
$m4is_b2h21npfbxn8c982sh = self::$m4is_mhqzty3k54fv->m4is_jvjswjxb6h();

$m4is_hrfwhkq1p6sm1jah4xag1dn = (int) self::$m4is_mhqzty3k54fv->m4is_se0apr3xwyzdk8zcatzz('child_added_actionset');
$m4is_yjdp62med94jx = (int) self::$m4is_mhqzty3k54fv->m4is_se0apr3xwyzdk8zcatzz('parent_added_actionset');

$m4is_t2s22pg7h385kntw5fn = (string) self::$m4is_mhqzty3k54fv->m4is_se0apr3xwyzdk8zcatzz('child_added_goal');
$m4is_s6shb3twa6p = (string) self::$m4is_mhqzty3k54fv->m4is_se0apr3xwyzdk8zcatzz('parent_added_goal');

$m4is_gv7vjyv2c6g3nepw6 = unserialize( base64_decode( $_POST['params'] ) );
$m4is_m551tpzr3g9jfvb6v90 = strtolower( $m4is_m8x3z0ehyggbsd );

$m4is_1ga86sjphcssgm32pxkrtnrhv = (int) $m4is_gv7vjyv2c6g3nepw6['contact_id'];
$m4is_x59rxz203x1nf3hns8z = 0;
$m4is_m0vrgvfczwzajnwf0e = array_filter( explode( ',',
 $m4is_gv7vjyv2c6g3nepw6['allowed_actions'] ) );
$m4is_bjz60ks5hcewg7249rsf07w = isset( $_POST['actions'] ) ? (int) $_POST['actions'] : 0;

$m4is_bd10h6fdmzyw = isset( $_POST['goal'] ) ? trim( $_POST['goal'] ) : '';
$m4is_zxwt8y3szyy1aenkh = strtolower( trim( $_POST['Email'] ) );

$m4is_5ygx9ywzd4gfc1dwqb = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

if ( ! in_array( $m4is_bjz60ks5hcewg7249rsf07w, $m4is_m0vrgvfczwzajnwf0e ) ) {
$m4is_bjz60ks5hcewg7249rsf07w = 0;

}

if ( empty( $m4is_zxwt8y3szyy1aenkh ) ) {
$memb_messages['flash']['create_child_result'] = '<p style="color:red;font-weight:bold;">' . _x( 'Email is Required',
 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>';
return;
}

if ( empty( $_POST['FirstName'] ) ) {
$memb_messages['flash']['create_child_result'] = '<p style="color:red;font-weight:bold;">' . _x( 'First Name is Required',
 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>';
return;
}

$m4is_a4c30dzy3tv7ymex44wth8djn642nt = get_user_by( 'email',
 $m4is_zxwt8y3szyy1aenkh );

if ( $m4is_a4c30dzy3tv7ymex44wth8djn642nt && user_can( $m4is_a4c30dzy3tv7ymex44wth8djn642nt, 'edit_others_posts' ) ) {
$memb_messages['flash']['create_child_result'] = '<p style="color:red;font-weight:bold;">' . _x( 'You cannot add site staff members.',
 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>';
return;
}

$m4is_bvc7s7xd10t459ygrtp = strtolower( trim( m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'memb_user', 'email', '' ) ) );
if ( $m4is_zxwt8y3szyy1aenkh == $m4is_bvc7s7xd10t459ygrtp ) {

$memb_messages['flash']['create_child_result'] = '<p style="color:red;font-weight:bold;">' . _x( "You can't add yourself.",
 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>';
return;
}

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',
 
$m4is_m8x3z0ehyggbsd, 
$m4is_b2h21npfbxn8c982sh 
];


$m4is_vqstsdx15 = m4is_rw8p2dfy073ez::m4is_845rdsrwy4s57mgxwm6b8jhm( $m4is_zxwt8y3szyy1aenkh,
 $m4is_0x2gypzsbnenpkq5bam3dkbg5 );

foreach( $m4is_vqstsdx15 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $child_contact ) {

if (! empty($child_contact[$m4is_b2h21npfbxn8c982sh]) || ! empty($child_contact[$m4is_m8x3z0ehyggbsd]) ) {

$memb_messages['flash']['create_child_result'] = '<p style="color:red;font-weight:bold;">' . _x( "You can't add this account.",
 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>';
return;
}
$m4is_w71yntd8xcdtsx4hnr9qfc0 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', $m4is_m551tpzr3g9jfvb6v90, '' );
if ( isset( $child_contact[$m4is_b2h21npfbxn8c982sh] ) && $child_contact[$m4is_b2h21npfbxn8c982sh] == $m4is_w71yntd8xcdtsx4hnr9qfc0 ) {
$m4is_x59rxz203x1nf3hns8z = $child_contact['Id'];

}
if ( empty( $child_contact[$m4is_b2h21npfbxn8c982sh] ) ) {
$m4is_x59rxz203x1nf3hns8z = $child_contact['Id'];
}
}

$m4is_n5bx9prx9xqpwkgs7em6kcpja1rpg72 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact',
 false );
$m4is_7b2yfzk0054 = [];
if ( $m4is_x59rxz203x1nf3hns8z == 0 || $m4is_gv7vjyv2c6g3nepw6['overwrite'] == true ) {
$m4is_7b2yfzk0054 = self::m4is_8p3zz4srejh1az14vqzanjcx( $_POST );

}
$m4is_w71yntd8xcdtsx4hnr9qfc0 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $m4is_5ygx9ywzd4gfc1dwqb, 'contact',
 $m4is_m551tpzr3g9jfvb6v90, '' );
$m4is_7b2yfzk0054[$m4is_b2h21npfbxn8c982sh] = self::$m4is_mhqzty3k54fv->m4is_sq8ehy5ma7pbmrxnswe86hfz2p( $m4is_w71yntd8xcdtsx4hnr9qfc0,
 'child' );

if ( $m4is_x59rxz203x1nf3hns8z == 0 ) {
$m4is_x59rxz203x1nf3hns8z = m4is_rw8p2dfy073ez::m4is_fcp8rjzp5vm( $m4is_7b2yfzk0054 );

if ( $m4is_x59rxz203x1nf3hns8z > 0 ) {
$m4is_yan573ys3brnv39zsernk3xs = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_x59rxz203x1nf3hns8z );

m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_x59rxz203x1nf3hns8z, $m4is_7b2yfzk0054 );
self::$m4is_mhqzty3k54fv->m4is_210qcdmxy4335k6sm7ed2rxmx5hq( $m4is_yan573ys3brnv39zsernk3xs,
 $m4is_5ygx9ywzd4gfc1dwqb );
m4is_rw8p2dfy073ez::m4is_rxf2xq5wvdkk7jhkx8( $m4is_zxwt8y3szyy1aenkh, 'Added by Memberium Umbrella Account System' );

$memb_messages['flash']['create_child_result'] = '<p style="color:green;font-weight:bold;">' . _x( 'Child Account added.', 'umbrella_enroll_child',
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>';
self::m4is_7bw6jgp1pbzdk3x9rfpz9caad( $m4is_1ga86sjphcssgm32pxkrtnrhv, $m4is_x59rxz203x1nf3hns8z,
 $m4is_bjz60ks5hcewg7249rsf07w, $m4is_bd10h6fdmzyw );
}
else {
$memb_messages['flash']['create_child_result'] = '<p style="color:red;font-weight:bold;">' . _x( 'Error creating child account.',
 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>';
}
}
else {


if ( empty( $child_contact[$m4is_b2h21npfbxn8c982sh] ) ) {
$m4is_yan573ys3brnv39zsernk3xs = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_x59rxz203x1nf3hns8z );

$m4is_w71yntd8xcdtsx4hnr9qfc0 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', $m4is_m551tpzr3g9jfvb6v90, '' );
$m4is_7b2yfzk0054[$m4is_b2h21npfbxn8c982sh] = self::$m4is_mhqzty3k54fv->m4is_sq8ehy5ma7pbmrxnswe86hfz2p( $m4is_w71yntd8xcdtsx4hnr9qfc0,
 'child' );
self::$m4is_mhqzty3k54fv->m4is_210qcdmxy4335k6sm7ed2rxmx5hq( $m4is_yan573ys3brnv39zsernk3xs, $m4is_5ygx9ywzd4gfc1dwqb );

m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_x59rxz203x1nf3hns8z, $m4is_7b2yfzk0054 ); 
self::m4is_7bw6jgp1pbzdk3x9rfpz9caad( $m4is_1ga86sjphcssgm32pxkrtnrhv,
 $m4is_x59rxz203x1nf3hns8z, $m4is_bjz60ks5hcewg7249rsf07w, $m4is_bd10h6fdmzyw );
$memb_messages['flash']['create_child_result'] = '<p style="color:green;font-weight:bold;">' . _x( 'Child Account assigned.',
 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>';
}
else {

$memb_messages['flash']['create_child_result'] = '<p style="color:red;font-weight:bold;">' . _x( 'That account already assigned to a user.',
 'umbrella_enroll_child', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) . '</p>';
}
}

if ( $m4is_x59rxz203x1nf3hns8z ) {

sleep( 1 );


self::$m4is_132xe588j->m4is_km2vptq0bwg( $m4is_x59rxz203x1nf3hns8z );
}
do_action( 'memberium_umbrella_add_child', $m4is_x59rxz203x1nf3hns8z,
 $m4is_1ga86sjphcssgm32pxkrtnrhv );
do_action( 'memberium/umbrella/add_child', $m4is_x59rxz203x1nf3hns8z, $m4is_1ga86sjphcssgm32pxkrtnrhv );

return;
}

private static function m4is_8p3zz4srejh1az14vqzanjcx( array $m4is_pggw3mvpb1ffpt58rzx ) : array {
$m4is_n5bx9prx9xqpwkgs7em6kcpja1rpg72 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact',
 false );
$m4is_7b2yfzk0054 = [];
foreach ( $m4is_pggw3mvpb1ffpt58rzx as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( in_array( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6,
 $m4is_n5bx9prx9xqpwkgs7em6kcpja1rpg72 ) ) {
$m4is_7b2yfzk0054[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = stripslashes( $m4is_rqxytszfq5v6syth1csqqxvy5 );

}
}
return $m4is_7b2yfzk0054;
}

private static function m4is_7bw6jgp1pbzdk3x9rfpz9caad( int $m4is_1ga86sjphcssgm32pxkrtnrhv, int $m4is_x59rxz203x1nf3hns8z,
 $m4is_bjz60ks5hcewg7249rsf07w, $m4is_bd10h6fdmzyw ) : void {
$m4is_t2s22pg7h385kntw5fn = (string) self::$m4is_mhqzty3k54fv->m4is_se0apr3xwyzdk8zcatzz( 'child_added_goal' );

$m4is_s6shb3twa6p = (string) self::$m4is_mhqzty3k54fv->m4is_se0apr3xwyzdk8zcatzz( 'parent_added_goal' );
$m4is_hrfwhkq1p6sm1jah4xag1dn = (int) self::$m4is_mhqzty3k54fv->m4is_se0apr3xwyzdk8zcatzz( 'child_added_actionset' );

$m4is_yjdp62med94jx = (int) self::$m4is_mhqzty3k54fv->m4is_se0apr3xwyzdk8zcatzz( 'parent_added_actionset' );
m4is_xm67qjyegqdeb9wqcm::m4is_p9t3a40qehbq9ywrvrgje2vp8z( $m4is_x59rxz203x1nf3hns8z,
 $m4is_t2s22pg7h385kntw5fn );
m4is_xm67qjyegqdeb9wqcm::m4is_p9t3a40qehbq9ywrvrgje2vp8z( $m4is_x59rxz203x1nf3hns8z, $m4is_bd10h6fdmzyw );

m4is_xm67qjyegqdeb9wqcm::m4is_p9t3a40qehbq9ywrvrgje2vp8z( $m4is_1ga86sjphcssgm32pxkrtnrhv, $m4is_s6shb3twa6p );
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_hrfwhkq1p6sm1jah4xag1dn,
 $m4is_x59rxz203x1nf3hns8z );
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_yjdp62med94jx, $m4is_1ga86sjphcssgm32pxkrtnrhv );

self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse( $m4is_bjz60ks5hcewg7249rsf07w, $m4is_x59rxz203x1nf3hns8z );
}

public static function m4is_sy0dzfxsm5w0hnces4ctybds1fxbz2() : void {

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();


if (! wp_verify_nonce( $_POST['umbrella_transfer_points_wpnonce'], $_POST['signature'])) {
wp_die( 'Security Check Failed - Nonce Validation Error' );

exit;
}

$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = false;
$m4is_gv7vjyv2c6g3nepw6 = unserialize(base64_decode($_POST['signature']) );
$m4is_dwpnfs7m20z4fqd3s3y0da96j16dk = (int) $_POST['points'];

$m4is_vtze9vh8xd9mkqby2r3tm = sanitize_email($_POST['recipient']);
$m4is_bbsta3mvjhhvh1x97vfpm9e = $m4is_gv7vjyv2c6g3nepw6['field'];

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = new stdclass;
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->max_points = $m4is_gv7vjyv2c6g3nepw6['max_points'];

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->points = $m4is_dwpnfs7m20z4fqd3s3y0da96j16dk;
$parent_contact_id = $m4is_gv7vjyv2c6g3nepw6['pcid'];

$child_contact_id = self::$m4is_132xe588j->m4is_06a6ggsb0zg8pv1t4852qe($m4is_vtze9vh8xd9mkqby2r3tm);

if ($m4is_dwpnfs7m20z4fqd3s3y0da96j16dk == 0) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->error_type = 'no_points_transferred';
}

if ($m4is_dwpnfs7m20z4fqd3s3y0da96j16dk > $m4is_gv7vjyv2c6g3nepw6['max_points'] || $m4is_dwpnfs7m20z4fqd3s3y0da96j16dk < 1) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->error_type = 'invalid_points';
}

if (! $parent_contact_id || ! $child_contact_id) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = true;

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->error_type = 'invalid_users';
}

if ( ! $m4is_bbjejhszczf2b3wrxm849kpfyzb5) {
$m4is_04rg1snahag2gfy8 = self::$m4is_132xe588j->m4is_n2ajtpwcec($child_contact_id,
 $m4is_bbsta3mvjhhvh1x97vfpm9e);
$m4is_th59jkmx74rjf90st1nr = $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->max_points - $m4is_dwpnfs7m20z4fqd3s3y0da96j16dk;

$m4is_e7v14fsgx686v7rb8 = $m4is_04rg1snahag2gfy8 + $m4is_dwpnfs7m20z4fqd3s3y0da96j16dk;
self::$m4is_132xe588j->m4is_8sqkcc4ebfed07z6qzkv9edmnxzjh($m4is_bbsta3mvjhhvh1x97vfpm9e,
 $m4is_th59jkmx74rjf90st1nr, $parent_contact_id );
self::$m4is_132xe588j->m4is_8sqkcc4ebfed07z6qzkv9edmnxzjh($m4is_bbsta3mvjhhvh1x97vfpm9e,
 $m4is_e7v14fsgx686v7rb8, $child_contact_id );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->error_type = false;
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->points = $m4is_dwpnfs7m20z4fqd3s3y0da96j16dk;

}

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_8yjfadhed2cake47tfkfzyj(
'flash',
'umbrella_transfer_points',
m4is_25550fsqsnd4pn7txw2vh7x6::m4is_vbq3wn8s('umbrella_transfer_points_result',
 [], '', '', $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz)
);
}

public static function m4is_ftd0se47hre960r8znj7kqy2864aj() : void {

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();


$m4is_ey8h8t3xkngm1a3e2yg87sv6gm = [];
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_khxvebq01f = self::$m4is_mhqzty3k54fv->m4is_p2n2ray33y();

$m4is_gv7vjyv2c6g3nepw6 = isset( $_POST['params'] ) ? unserialize( base64_decode( $_POST['params'] ) ) :[];
$m4is_khxvebq01f = apply_filters('memberium/umbrella/download_csv',
 $m4is_khxvebq01f);
$m4is_khxvebq01f = apply_filters("memberium/umbrella/download_csv/{$m4is_gv7vjyv2c6g3nepw6['filter_name']}", $m4is_khxvebq01f);


foreach($m4is_khxvebq01f as $k => $v) {

}
}

public static function m4is_k7ss2w9hx03zavscc6() : void {

$m4is_erycayg8y6z0xw4 = (int) $_POST['team_id'] ?? 0;

$m4is_1yzmh3jsg57 = array_filter( array_map( 'trim', $_POST['child_uids'] ?? [] ) );
$m4is_z1k7nkdn = m4is_wv1rppa066tww11snkg8g06rv922xj::m4is_2v2jnc5z0e7s1gr7p3x9x( $m4is_erycayg8y6z0xw4 );

$m4is_fy09e846rzkkcbgtrhc = array_diff( $m4is_1yzmh3jsg57, $m4is_z1k7nkdn );
$m4is_p800c9ejy6rzwkf = array_diff( $m4is_z1k7nkdn, $m4is_1yzmh3jsg57 );

foreach( $m4is_p800c9ejy6rzwkf as $m4is_yan573ys3brnv39zsernk3xs ) {
m4is_wv1rppa066tww11snkg8g06rv922xj::m4is_jt6v0sx696epnpqb2g3ng2tqv4ea9( $m4is_yan573ys3brnv39zsernk3xs,
 $m4is_erycayg8y6z0xw4 );
}
foreach( $m4is_fy09e846rzkkcbgtrhc as $m4is_yan573ys3brnv39zsernk3xs ) {
m4is_wv1rppa066tww11snkg8g06rv922xj::m4is_q411yccq( $m4is_yan573ys3brnv39zsernk3xs,
 $m4is_erycayg8y6z0xw4 );
}
}
}
