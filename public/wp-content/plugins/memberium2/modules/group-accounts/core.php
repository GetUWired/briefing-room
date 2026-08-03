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

final class m4is_p2r78mkk9tdtwpmc {
private const M4IS_CX6F06C1BYA8TX804QHWYJ81Y8P74 = '4.0';
private const M4IS_MA84N0XYQQ1E4WEW6Q = 'memberium/groups/max_children';

private const M4IS_P7JTE8A1JMZGQ4B539WG = 'memberium/groups/source';
private $m4is_132xe588j;
private $m4is_t8vjc2ec06gfv1gfwtfq5ch3;

private $m4is_v4beyw7zqhr3;
private $m4is_p0x9xxbjebk5qj5vkskzmb;
private $m4is_qerqgw72s;
private $m4is_fgzc60mceg6wcz6dj4;
private $m4is_8ew58cpxmftgpw93gdffm4s9bbwy;

private $m4is_c9hqwq6fezx33gwm9t;




static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
if ( ! $this->m4is_fgzc60mceg6wcz6dj4 ) {
return;

}
$this->m4is_19ka9z5gq101z4();
$this->m4is_5eragr7sh2yyj356m();
add_action( 'memberium/modules/loaded', [$this, 'm4is_r8emp2zcmhv1twqx3qx8mv'],
 10 );
}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_t8vjc2ec06gfv1gfwtfq5ch3 = $this->m4is_132xe588j->m4is_7chmqqcbkgf4jft8p56sbp6ss();
$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_nj54edhem2n65zh8981a9c0hhp5adr6();

$this->m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
$this->m4is_fgzc60mceg6wcz6dj4 = true || m4is_zrrt34b1nqxbv::m4is_yb1kyacqc84h1zq0m17py( ['unlimited',
 'umbrella'] );
$this->m4is_qerqgw72s = '';
$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_nj54edhem2n65zh8981a9c0hhp5adr6();

$this->m4is_p0x9xxbjebk5qj5vkskzmb = false;
$this->m4is_c9hqwq6fezx33gwm9t = [];
}

private function m4is_19ka9z5gq101z4() : void {
$this->m4is_132xe588j->m4is_30j08k6rn5y4pz4w( [
'm4is_zwdq114tmrvmaqs00' =>
 __DIR__ . '/cpt',
'm4is_bj0mt04ye7axtp644x64m' => __DIR__ . '/database',
'm4is_2exv33mh4h4k4' => __DIR__ . '/session',
'm4is_wv1rppa066tww11snkg8g06rv922xj' =>
 __DIR__ . '/team',
'm4is_cpb285vvk7nssq0pzqjx15h' => __DIR__ . '/admin/admin',
'm4is_dzdct4wk' => __DIR__ . '/catchers',
'm4is_pxpfacwwc3' =>
 __DIR__ . '/admin/screen',
'm4is_zhj91gq6z4bp81wqkbnf3ngb4gf8wt' => __DIR__ . '/cron',
'm4is_2ewmwzj14fjtgk1d850rew5cedfp6y0' => __DIR__ . '/frontend',

'm4is_h792nnyev6mbw6bxgrxawh48e' => __DIR__ . '/shortcodes',
] );
}

public function m4is_r8emp2zcmhv1twqx3qx8mv() {
if ( is_admin() ) {
m4is_cpb285vvk7nssq0pzqjx15h::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
else {
m4is_2ewmwzj14fjtgk1d850rew5cedfp6y0::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
if ( wp_doing_cron() ) {
m4is_zhj91gq6z4bp81wqkbnf3ngb4gf8wt::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
include_once __DIR__ . '/api.php';
}

private function m4is_5eragr7sh2yyj356m() {
add_action( 'init', [ 'm4is_zwdq114tmrvmaqs00',
 'm4is_a6zhb2rch4cda9ewj6nqh8cecdr'], 1 ); 
add_action( 'init', [$this, 'm4is_139e3b0g3cbdsk']); 
add_action( 'delete_post', ['m4is_wv1rppa066tww11snkg8g06rv922xj',
 'm4is_665tcbhdfpeqk3tepjq8'], 10, 2 );
add_action( 'delete_user', [$this, 'm4is_mtwwafq88nsk'], 10, 1 );
add_action( 'delete_user',
 ['m4is_wv1rppa066tww11snkg8g06rv922xj', 'm4is_9kaafnwch0brfqx1fbcdk4dayrh'], 10, 1 );
add_action( 'memberium_email_change', [$this,
 'm4is_w5r86n603h7fwsk4ths'], 10, 4 ); 
add_filter( 'memberium_contact_load', ['m4is_2exv33mh4h4k4', 'm4is_keg00g0jtnqd1aqc'], 10, 1 );
 
add_filter( 'memberium_contact_load', ['m4is_2exv33mh4h4k4', 'm4is_k6q5faqx0zgrnb'], 5, 1 );
add_filter( 'memberium_contact_load',
 ['m4is_2exv33mh4h4k4', 'm4is_gmaxtfhtwp3006kw'], 15, 1 );
add_action( 'memberium/session/updated', ['m4is_wv1rppa066tww11snkg8g06rv922xj',
 'm4is_m695vntep229s4zs38g3yj'], 10, 2 );
add_action( 'memberium/session/updated', ['m4is_2exv33mh4h4k4', 'm4is_avv764j8x3h92vg3qds13a19r03'],
 20, 2 );
add_filter( 'memberium/session/filter', ['m4is_2exv33mh4h4k4', 'm4is_2tg2zyxfjrefpqs9sej2fsard'], 10, 2 );

}






public function m4is_se0apr3xwyzdk8zcatzz( $m4is_j8j55t8dz79m7 = '' ) {

if ( empty( $m4is_j8j55t8dz79m7 ) ) {
return $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy;

}

return isset( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7] ) ? $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7] : null;

}

private function m4is_fprtm2vys9m1qg9zhynkw() : array {
return [
'add_child_actionset' => 0,
'child_added_goal' => '',
'child_cancel_goal' =>
 '',
'parent_added_goal' => '',
'child_cancel_actionset' => 0,
'ecommerce' => 1,
'inherited_fields' => '',
'ld_quiz_notify_parent' =>
 0,
'max_child_accounts' => 10,
'parent_added_actionset' => 0,
'parent_cache_ttl' => 86400,
'parent_field' => 'ReferralCode',
'parent_tags' =>
 '',
'tag_mask' => '',
'tag_mask_field' => '',
'tag_translation' => [],
];
}

public function m4is_nj54edhem2n65zh8981a9c0hhp5adr6() {
$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy = get_option( 'memberium_umbrella_settings',
 [] );
$m4is_n7x0afpz = $this->m4is_fprtm2vys9m1qg9zhynkw();
$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy = wp_parse_args($this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 $m4is_n7x0afpz);

return $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy;
}

public function m4is_kw4m24hf6( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy = false ) {

if ( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy === false ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy;

}

update_option( 'memberium_umbrella_settings', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy, 'yes' );
}






public function m4is_5kywzj74m8ht8s0() {
return self::M4IS_CX6F06C1BYA8TX804QHWYJ81Y8P74;

}

public function m4is_x15jjq2b1gzqjcebbs93pg1gxd8g4() : string {
return empty( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_tags'] ) ? '' : $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_tags'];

}
public function m4is_qj4t29r2d91m8hm() : int {
return (int) $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['active_child_tag'];
}

public function m4is_xmbh33yn80m3fcm5qtxn25() {
return $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_mask'];

}

public function m4is_65x5n8w42a3ejy46tjy2847y1() {
return $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_cache_ttl'];
}

public function m4is_wcp1r1y3() {
return $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_mask_field'];

}

public function m4is_jvjswjxb6h() {
return empty( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_field'] ) ? '' : $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_field'];

}

public function m4is_f3h1cgn6967wdgcz4xz9c1n() {
return $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_cancel_actionset'];
}

public function m4is_7h5hxgv0nzjyjr3y9g1sbpx() {
return $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_cancel_goal'];

}

public function m4is_s0xeh288ra4cd62vbhd0bbx() {


return $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['add_child_actionset'];
}
public function m4is_9vpbbtrxhzb() {
return $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['inherited_fields'];

}

private function m4is_pm0mffgjynmn3() {


return $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_added_actionset'];
}




public function m4is_fjm0p38edwjha5g0n1( $m4is_06c8s5xs94f91335gnaey25 = '' ) {
$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_mask'] = trim( $m4is_06c8s5xs94f91335gnaey25 );

}

public function m4is_n2bpmc7cey6f1jwmwyy4a3w58( int $m4is_5p1kv9r3f9ermvn3k = 86400 ) {
$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_cache_ttl'] = $m4is_5p1kv9r3f9ermvn3k;

}

public function m4is_dvdk7yph967y5e3rp( $m4is_j5x34aw3xkcgappyhhw5k1b8 = 0, $m4is_028qzd4vsvsfdjn40ankfpp9r8s = 0 ) {

if ( ! $m4is_j5x34aw3xkcgappyhhw5k1b8 && ! $m4is_028qzd4vsvsfdjn40ankfpp9r8s ) {
return;

}

if ( $m4is_028qzd4vsvsfdjn40ankfpp9r8s == 0 ) {
unset( $this->m4is_c9hqwq6fezx33gwm9t[$m4is_j5x34aw3xkcgappyhhw5k1b8] );
}

if ( $m4is_028qzd4vsvsfdjn40ankfpp9r8s > 0 ) {
$this->m4is_c9hqwq6fezx33gwm9t[$m4is_j5x34aw3xkcgappyhhw5k1b8] = $m4is_028qzd4vsvsfdjn40ankfpp9r8s;

}

$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_translation'] = $this->m4is_c9hqwq6fezx33gwm9t;
}

public function m4is_srzy1gg6yvdfr( $m4is_m8x3z0ehyggbsd = 'Email3' ) {
$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_field'] = $m4is_m8x3z0ehyggbsd;

}

public function m4is_4qwxjrgmqz9927vsmatyd1qx( int $m4is_c1s89abjcamg842fv8mw83 ) {
$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['add_child_actionset'] = $m4is_c1s89abjcamg842fv8mw83;

}

public function m4is_k94dk6v6( int $m4is_c1s89abjcamg842fv8mw83 ) {
$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_added_actionset'] = $m4is_c1s89abjcamg842fv8mw83;

}

public function m4is_9x9es2qt67p3pxwzvdc( int $m4is_c1s89abjcamg842fv8mw83 ) {
$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_cancel_actionset'] = $m4is_c1s89abjcamg842fv8mw83;

}

public function m4is_qe86crfzkq9avdbn64wgh8zs( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, $m4is_hr42c0g3 = true ) {

if ( $m4is_hr42c0g3 === null ) {
unset( $this->m4is_qerqgw72s[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] );

}

else {
$this->m4is_qerqgw72s[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = (boolean) $m4is_hr42c0g3;
}

$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['inherited_fields'] = $this->m4is_qerqgw72s;

}

public function m4is_06ctg5s8mcgdnketkadsntdbcqav2mj2( $m4is_hyyg7wwf = '' ) {
$this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_mask_field'] = $m4is_hyyg7wwf;

}
public function m4is_azzd5yeryvfy18pt34() : bool {
return $this->m4is_p0x9xxbjebk5qj5vkskzmb;
}




public function m4is_139e3b0g3cbdsk() : void {
if ( $_SERVER['REQUEST_METHOD'] <> 'POST' || empty( $_POST['formtype'] ) ) {
return;

}
$m4is_n2f73s2v8yb2tnafm20s05 = 'm4is_dzdct4wk';
$m4is_jkmbg7q978m9 = [
'childdisconnect' => [ $m4is_n2f73s2v8yb2tnafm20s05, 'm4is_4yvx6mb5v4hsfvktpv' ],

'childenroll' => [ $m4is_n2f73s2v8yb2tnafm20s05, 'm4is_kvpgz5dnnav8h91x7pb0gc38y0' ],
'umbrella_points_transfer' => [ $m4is_n2f73s2v8yb2tnafm20s05,
 'm4is_sy0dzfxsm5w0hnces4ctybds1fxbz2' ],
'umbrella_csv_download' => [ $m4is_n2f73s2v8yb2tnafm20s05, 'm4is_ftd0se47hre960r8znj7kqy2864aj' ],

'memberium/group-accounts/team/member/update' => [ $m4is_n2f73s2v8yb2tnafm20s05, 'm4is_k7ss2w9hx03zavscc6' ],
];
if ( ! array_key_exists( $_POST['formtype'],
 $m4is_jkmbg7q978m9 ) ) {
return;
}
$m4is_jkmbg7q978m9[$_POST['formtype']]();
return;
if ($_POST['formtype'] == 'childdisconnect') {
$m4is_n2f73s2v8yb2tnafm20s05::m4is_4yvx6mb5v4hsfvktpv();

}
elseif ($_POST['formtype'] == 'childenroll') {
$m4is_n2f73s2v8yb2tnafm20s05::m4is_kvpgz5dnnav8h91x7pb0gc38y0();
}
elseif ($_POST['formtype'] == 'umbrella_points_transfer') {
$m4is_n2f73s2v8yb2tnafm20s05::m4is_sy0dzfxsm5w0hnces4ctybds1fxbz2();

}
elseif ($_POST['formtype'] == 'umbrella_csv_download') {
$m4is_n2f73s2v8yb2tnafm20s05::m4is_ftd0se47hre960r8znj7kqy2864aj();
}
elseif ($_POST['formtype'] == 'umbrella_csv_download') {
$m4is_n2f73s2v8yb2tnafm20s05::m4is_ftd0se47hre960r8znj7kqy2864aj();

}
}










public function m4is_j2920q7hsvjcp1vwhx0c0cdayf95v() {
return ! in_array( $this->m4is_jvjswjxb6h(), ['Email', 'EmailAddress2',
 'EmailAddress3'] );
}

public function m4is_sdq8qbkm40nxnae43n96cfytznzgjng( $m4is_4358kaws2bdkkvd2txa6a9mdntts ) {

if ( ! current_user_can( 'manage_options' ) ) {

$m4is_khxvebq01f = $this->m4is_p2n2ray33y();


$m4is_4358kaws2bdkkvd2txa6a9mdntts = array_merge( $m4is_4358kaws2bdkkvd2txa6a9mdntts, $m4is_khxvebq01f );
}

return $m4is_4358kaws2bdkkvd2txa6a9mdntts;

}
public function m4is_0nf7egh7gg4p1m5t0ea( $m4is_wk4dh1rnd3wmwvsggq51nhn87 = null ) : bool {
static $m4is_fv9p5zzz6;
$m4is_fv9p5zzz6 ??= array_filter( explode( ',',
 $this->m4is_x15jjq2b1gzqjcebbs93pg1gxd8g4() ) );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 ??= self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_yfq3jqvfk8j = array_filter( explode( ',',
 m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user', 'tags', '' ) ) );
return (bool) array_intersect( $m4is_fv9p5zzz6,
 $m4is_yfq3jqvfk8j );
}

public function m4is_4cydeck40zt7a( $m4is_06c8s5xs94f91335gnaey25 ) : bool {
$m4is_fv9p5zzz6 = $this->m4is_x15jjq2b1gzqjcebbs93pg1gxd8g4();

if ( empty( $m4is_fv9p5zzz6 ) ) {
return false;
}
$m4is_fv9p5zzz6 = array_filter( explode( ',', $this->m4is_x15jjq2b1gzqjcebbs93pg1gxd8g4() ) );

$m4is_06c8s5xs94f91335gnaey25 = is_array( $m4is_06c8s5xs94f91335gnaey25 ) ? array_filter( $m4is_06c8s5xs94f91335gnaey25 ) : array_filter( explode( ',',
 $m4is_06c8s5xs94f91335gnaey25 ) );
return (bool) array_intersect( $m4is_fv9p5zzz6, $m4is_06c8s5xs94f91335gnaey25 );
}

public function m4is_w5r86n603h7fwsk4ths( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0, $m4is_34a4gmm352vevz0d4mrbxw3 = '', $m4is_zxwt8y3szyy1aenkh = '' ) {
$m4is_b2h21npfbxn8c982sh = $this->m4is_jvjswjxb6h();

$lparent_field = strtolower( $this->m4is_jvjswjxb6h() );
if ( ! in_array( $lparent_field, ['email', 'emailaddress2', 'emailaddress3']) ) {
return;

}
if ( empty( $m4is_34a4gmm352vevz0d4mrbxw3 ) || empty( $m4is_zxwt8y3szyy1aenkh ) ) {
return;
}
$m4is_g61yzqs7ecta0xztr70d7v = [
$m4is_b2h21npfbxn8c982sh =>
 $m4is_34a4gmm352vevz0d4mrbxw3
];
$m4is_3qwaf6xd03657aas = $this->m4is_g8j3ahbg0y001ryr( $m4is_g61yzqs7ecta0xztr70d7v );
if ( is_array( $m4is_3qwaf6xd03657aas ) && ! empty( $m4is_3qwaf6xd03657aas ) ) {
foreach( $m4is_3qwaf6xd03657aas as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_7b2yfzk0054 = [
$m4is_b2h21npfbxn8c982sh =>
 $m4is_zxwt8y3szyy1aenkh,
];
m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_7b2yfzk0054);
 
}
}
}



public function m4is_z8612fdpa8cx7ymwgj8dbztyagsnagh( int $m4is_k1eftjy4k5430qzqhjdtxyn7j ) : string {
$m4is_6zpsykaryhchw180 = get_user_meta( $m4is_k1eftjy4k5430qzqhjdtxyn7j,
 self::M4IS_P7JTE8A1JMZGQ4B539WG, true );
return $m4is_6zpsykaryhchw180 ? $m4is_6zpsykaryhchw180 : 'contact_table';
}

public function m4is_ca6wzg366mv5j( int $m4is_k1eftjy4k5430qzqhjdtxyn7j ) : array {
$m4is_k1eftjy4k5430qzqhjdtxyn7j = $m4is_k1eftjy4k5430qzqhjdtxyn7j ? $m4is_k1eftjy4k5430qzqhjdtxyn7j : self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_m84xz3qjd38 = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_k1eftjy4k5430qzqhjdtxyn7j );
$m4is_6zpsykaryhchw180 = get_user_meta( $m4is_k1eftjy4k5430qzqhjdtxyn7j,
 self::M4IS_P7JTE8A1JMZGQ4B539WG, true );
$m4is_khxvebq01f = [];
if ( $m4is_6zpsykaryhchw180 == 'relationship_table' ) {
$m4is_khxvebq01f = $this->m4is_ts1zpk6txeyr0jtnw3zm921( $m4is_k1eftjy4k5430qzqhjdtxyn7j );

}
else {
$m4is_khxvebq01f = $this->m4is_t8gakp1dxgwkm4( $m4is_k1eftjy4k5430qzqhjdtxyn7j );
$this->m4is_aha3xmfpn2gvcbaqanhqatejygqsh84( $m4is_k1eftjy4k5430qzqhjdtxyn7j,
 $m4is_khxvebq01f );
}
return $m4is_khxvebq01f;
}

private function m4is_aha3xmfpn2gvcbaqanhqatejygqsh84( int $m4is_k1eftjy4k5430qzqhjdtxyn7j,
 array $m4is_khxvebq01f ) : void {
global $wpdb;
$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_8dnas9z9md577n9p1bher();

foreach( $m4is_khxvebq01f as $m4is_xcg4je0en ) {
$m4is_d60kn1d3yvprp62rs332 = [
'parent_uid' => $m4is_k1eftjy4k5430qzqhjdtxyn7j,
'child_uid' =>
 $m4is_xcg4je0en
];
$wpdb->insert( $m4is_k7p8pmxsbkqrje3y20, $m4is_d60kn1d3yvprp62rs332 );
}
update_user_meta( $m4is_k1eftjy4k5430qzqhjdtxyn7j,
 self::M4IS_P7JTE8A1JMZGQ4B539WG, 'relationship_table' );
}

private function m4is_ts1zpk6txeyr0jtnw3zm921( int $m4is_k1eftjy4k5430qzqhjdtxyn7j ) : array {
global $wpdb;

$m4is_zz07fhw4pp9d36dw5rmfd7s08sfb39jr = $this->m4is_wavagxa5eyec7shckeq( $m4is_k1eftjy4k5430qzqhjdtxyn7j );
$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_8dnas9z9md577n9p1bher();

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `child_uid` FROM %i WHERE `parent_uid` = %d AND `child_uid` > 0 AND `child_uid` <> %d AND `active` = 1  ORDER BY `id` ASC";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_k1eftjy4k5430qzqhjdtxyn7j,
 $m4is_k1eftjy4k5430qzqhjdtxyn7j );
if ( $m4is_zz07fhw4pp9d36dw5rmfd7s08sfb39jr ) {
$m4is_5rbenkpt1v7xby2cknbs7 .= $wpdb->prepare( " LIMIT %d",
 $m4is_zz07fhw4pp9d36dw5rmfd7s08sfb39jr );
}
$m4is_khxvebq01f = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
return $m4is_khxvebq01f;

}

private function m4is_t8gakp1dxgwkm4( int $m4is_k1eftjy4k5430qzqhjdtxyn7j ) : array {
global $wpdb;
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_k1eftjy4k5430qzqhjdtxyn7j );

$m4is_vjjgrpe332nfas9g45145bj72eysy = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 false, true );
$m4is_m8x3z0ehyggbsd = $this->m4is_jvjswjxb6h();
$m4is_gxmpgn8mnpv2pbbyz88wjr6gtafb = empty( $m4is_vjjgrpe332nfas9g45145bj72eysy[$m4is_m8x3z0ehyggbsd] ) ? '' : $m4is_vjjgrpe332nfas9g45145bj72eysy[$m4is_m8x3z0ehyggbsd];

if ( substr( $m4is_gxmpgn8mnpv2pbbyz88wjr6gtafb, 0, 5 ) != 'prnt-' ) {
return [];
}
$m4is_awwhq20pxnhah5vqbdqs = $this->m4is_sq8ehy5ma7pbmrxnswe86hfz2p( $m4is_gxmpgn8mnpv2pbbyz88wjr6gtafb,
 'child' );
$m4is_zz07fhw4pp9d36dw5rmfd7s08sfb39jr = $this->m4is_wavagxa5eyec7shckeq( $m4is_k1eftjy4k5430qzqhjdtxyn7j );
if ( empty( $m4is_gxmpgn8mnpv2pbbyz88wjr6gtafb ) ) {
return [];

}
$m4is_k7p8pmxsbkqrje3y20 = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `fieldname` = %s AND `value` = %s AND `appname` = %s ORDER BY `id` ASC";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_m8x3z0ehyggbsd, $m4is_awwhq20pxnhah5vqbdqs, $this->m4is_v4beyw7zqhr3 );

$m4is_5rbenkpt1v7xby2cknbs7 = $m4is_zz07fhw4pp9d36dw5rmfd7s08sfb39jr ? $m4is_5rbenkpt1v7xby2cknbs7 . " LIMIT {$m4is_zz07fhw4pp9d36dw5rmfd7s08sfb39jr}" : $m4is_5rbenkpt1v7xby2cknbs7;

$m4is_9gn4ack6357j17t6g135 = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_khxvebq01f = is_array( $m4is_9gn4ack6357j17t6g135 ) ? array_filter( $m4is_9gn4ack6357j17t6g135 ) : [];

$m4is_1yzmh3jsg57 = []; 
foreach( $m4is_9gn4ack6357j17t6g135 as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_1yzmh3jsg57[] = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
$m4is_1yzmh3jsg57 = array_filter( $m4is_1yzmh3jsg57 );
return $m4is_1yzmh3jsg57;
}

public function m4is_szh0aq5rxmcf6q3a3redgg3tjcfx7( int $m4is_k1eftjy4k5430qzqhjdtxyn7j = 0 ) : int {
global $wpdb;

$m4is_k1eftjy4k5430qzqhjdtxyn7j = $m4is_k1eftjy4k5430qzqhjdtxyn7j ? $m4is_k1eftjy4k5430qzqhjdtxyn7j : self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_6zpsykaryhchw180 = get_user_meta( $m4is_k1eftjy4k5430qzqhjdtxyn7j, self::M4IS_P7JTE8A1JMZGQ4B539WG, true );
if ( $m4is_6zpsykaryhchw180 <> 'relationship_table' ) {
$m4is_khxvebq01f = $this->m4is_t8gakp1dxgwkm4( $m4is_k1eftjy4k5430qzqhjdtxyn7j );

$this->m4is_aha3xmfpn2gvcbaqanhqatejygqsh84( $m4is_k1eftjy4k5430qzqhjdtxyn7j, $m4is_khxvebq01f );
return count( $m4is_khxvebq01f );

}
$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_8dnas9z9md577n9p1bher();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT COUNT(*) FROM %i WHERE `parent_uid` = %d AND `child_uid` > 0 AND `child_uid` <> %d";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_k1eftjy4k5430qzqhjdtxyn7j,
 $m4is_k1eftjy4k5430qzqhjdtxyn7j);
$m4is_7g9y793jjckyb = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
return $m4is_7g9y793jjckyb;

}




public function m4is_9bqvxk6kpyczh( $m4is_g61yzqs7ecta0xztr70d7v = [] ) {

global $wpdb;

if ( empty( $m4is_g61yzqs7ecta0xztr70d7v['contact_id'] ) ) {
return false;

}

$m4is_cyg7rcfhzagmm5v = empty( $m4is_g61yzqs7ecta0xztr70d7v['contact'] ) ? [] : $m4is_g61yzqs7ecta0xztr70d7v['contact'];
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty( $m4is_g61yzqs7ecta0xztr70d7v['contact_id'] ) ? 0 : $m4is_g61yzqs7ecta0xztr70d7v['contact_id'];

$m4is_k1eftjy4k5430qzqhjdtxyn7j = empty( $m4is_g61yzqs7ecta0xztr70d7v['parent_id'] ) ? 0 : $m4is_g61yzqs7ecta0xztr70d7v['parent_id'];

$m4is_0pfsct6fnzyj9z = $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_field'];
$m4is_re2kj5q3n55gjcb13ta719an = array_filter( explode( ',',
 $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_tags'] ) );
$m4is_1ga86sjphcssgm32pxkrtnrhv = false;

if ( empty( $m4is_cyg7rcfhzagmm5v[$m4is_0pfsct6fnzyj9z] ) ) {
return false;

}

$m4is_n7x0afpz = [
'appname' => $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname'),
'contact_id' => isset( $m4is_cyg7rcfhzagmm5v['Id'] ) ? $m4is_cyg7rcfhzagmm5v['Id'] : 0,

'parent_field' => $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_field'],
'parent_id' => isset( $m4is_cyg7rcfhzagmm5v[$m4is_0pfsct6fnzyj9z] ) ? $m4is_cyg7rcfhzagmm5v[$m4is_0pfsct6fnzyj9z] : '',

];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args($m4is_g61yzqs7ecta0xztr70d7v, $m4is_n7x0afpz);
$m4is_g61yzqs7ecta0xztr70d7v['parent_id'] = $this->m4is_sq8ehy5ma7pbmrxnswe86hfz2p( $m4is_g61yzqs7ecta0xztr70d7v['parent_id'],
 'parent' );

$m4is_k7p8pmxsbkqrje3y20 = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `c1`.`id`, `c2`.`value` as `tags` FROM `{$m4is_k7p8pmxsbkqrje3y20}` AS `c1`, `{$m4is_k7p8pmxsbkqrje3y20}` AS `c2` WHERE `c1`.`appname` = %s AND `c1`.`fieldname` = %s AND `c1`.`value` = %s AND `c1`.`id` <> %d AND `c2`.`id` = `c1`.`id` AND `c2`.`fieldname` = 'Groups' ORDER BY `c1`.`id`; ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_g61yzqs7ecta0xztr70d7v['appname'], $m4is_g61yzqs7ecta0xztr70d7v['parent_field'],
 $m4is_g61yzqs7ecta0xztr70d7v['parent_id'], $m4is_g61yzqs7ecta0xztr70d7v['contact_id'] );
$m4is_vjjgrpe332nfas9g45145bj72eysy = $wpdb->get_row( $m4is_5rbenkpt1v7xby2cknbs7 );


$m4is_06c8s5xs94f91335gnaey25 = isset($m4is_vjjgrpe332nfas9g45145bj72eysy->tags) ? explode(',', $m4is_vjjgrpe332nfas9g45145bj72eysy->tags) : [];


if ( array_intersect( $m4is_re2kj5q3n55gjcb13ta719an, $m4is_06c8s5xs94f91335gnaey25 ) ) {
$m4is_1ga86sjphcssgm32pxkrtnrhv = $m4is_vjjgrpe332nfas9g45145bj72eysy->id;

}

return $m4is_1ga86sjphcssgm32pxkrtnrhv;
}

public function m4is_mp12at0vj16fhw9bf97jq6bkq0pjy( $m4is_g61yzqs7ecta0xztr70d7v = [] ) {

global $wpdb;


$m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');
$m4is_m8x3z0ehyggbsd = $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_field'];

$m4is_1r5z39mk94w0nqm2d = $this->m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();
$m4is_g97jdhm0fp1a4fr5x = strtolower( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_field'] );

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = isset( $m4is_g61yzqs7ecta0xztr70d7v['contact_id'] ) ? $m4is_g61yzqs7ecta0xztr70d7v['contact_id'] : $m4is_1r5z39mk94w0nqm2d;

$m4is_k1eftjy4k5430qzqhjdtxyn7j = $this->m4is_132xe588j->m4is_n2ajtpwcec( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_m8x3z0ehyggbsd );

$m4is_qg2yw00j71q090r = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();

$m4is_n7x0afpz = [
'appname' => $this->m4is_v4beyw7zqhr3,

'parent_field' => $m4is_m8x3z0ehyggbsd,
'contact_id' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'limit' => 0,
'offset' => 0,
'parent_id' =>
 $m4is_k1eftjy4k5430qzqhjdtxyn7j,
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args( $m4is_g61yzqs7ecta0xztr70d7v, $m4is_n7x0afpz );

if ( $m4is_g61yzqs7ecta0xztr70d7v['parent_id'] <> $this->m4is_sq8ehy5ma7pbmrxnswe86hfz2p( $m4is_g61yzqs7ecta0xztr70d7v['parent_id'],
 'parent' ) ) {
return 0;
}

$m4is_g61yzqs7ecta0xztr70d7v['parent_id'] = $this->m4is_sq8ehy5ma7pbmrxnswe86hfz2p( $m4is_g61yzqs7ecta0xztr70d7v['parent_id'],
 'child' );
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) FROM `{$m4is_qg2yw00j71q090r}` WHERE `appname` = %s AND `fieldname` = %s AND `value` = %s AND `id` <> %d ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_g61yzqs7ecta0xztr70d7v['appname'], $m4is_g61yzqs7ecta0xztr70d7v['parent_field'],
 $m4is_g61yzqs7ecta0xztr70d7v['parent_id'], $m4is_g61yzqs7ecta0xztr70d7v['contact_id'] );
$m4is_7g9y793jjckyb = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );


return $m4is_7g9y793jjckyb;
}

public function m4is_t1crrks8nxv9eanzea18fyr3( $m4is_g61yzqs7ecta0xztr70d7v = [] ) {


$m4is_n7x0afpz = [
'user_id' =>
 self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args( $m4is_g61yzqs7ecta0xztr70d7v, $m4is_n7x0afpz );


if ( $this->m4is_132xe588j->m4is_y09sgpje0cvmczk( $m4is_g61yzqs7ecta0xztr70d7v['user_id'] ) ) {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', '!parent_id', 0 );
}
}

public function m4is_g8j3ahbg0y001ryr( $m4is_g61yzqs7ecta0xztr70d7v = [] ) {

global $wpdb;

$m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );

$m4is_m8x3z0ehyggbsd = $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_field'];
$m4is_1r5z39mk94w0nqm2d = $this->m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_g97jdhm0fp1a4fr5x = strtolower( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_field'] );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = isset( $m4is_g61yzqs7ecta0xztr70d7v['contact_id'] ) ? $m4is_g61yzqs7ecta0xztr70d7v['contact_id'] : $m4is_1r5z39mk94w0nqm2d;

$m4is_k1eftjy4k5430qzqhjdtxyn7j = $this->m4is_132xe588j->m4is_n2ajtpwcec( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_m8x3z0ehyggbsd );

$m4is_qg2yw00j71q090r = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();

$m4is_n7x0afpz = [
'appname' => $this->m4is_v4beyw7zqhr3,

'parent_field' => $m4is_m8x3z0ehyggbsd,
'contact_id' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'limit' => 0,
'offset' => 0,
'parent_id' =>
 $m4is_k1eftjy4k5430qzqhjdtxyn7j,
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args( $m4is_g61yzqs7ecta0xztr70d7v, $m4is_n7x0afpz );

if ( empty( $m4is_g61yzqs7ecta0xztr70d7v['parent_id'] ) || $m4is_g61yzqs7ecta0xztr70d7v['parent_id'] <> $this->m4is_sq8ehy5ma7pbmrxnswe86hfz2p( $m4is_g61yzqs7ecta0xztr70d7v['parent_id'],
 'parent' ) ) {
return [];
}

$m4is_g61yzqs7ecta0xztr70d7v['parent_id'] = $this->m4is_sq8ehy5ma7pbmrxnswe86hfz2p( $m4is_g61yzqs7ecta0xztr70d7v['parent_id'],
 'child' );
$m4is_cjrjg8zk3g0aca508wymd5742txgd3 = ( $m4is_g61yzqs7ecta0xztr70d7v['limit'] > 0 ) ? " LIMIT {$m4is_g61yzqs7ecta0xztr70d7v['limit']} OFFSET {$m4is_g61yzqs7ecta0xztr70d7v['offset']} " : '';


$m4is_5rbenkpt1v7xby2cknbs7 = "
			SELECT `c1`.`id`
			FROM `{$m4is_qg2yw00j71q090r}` AS `c1`
			LEFT JOIN `{$m4is_qg2yw00j71q090r}` AS `c2`
			ON ( `c2`.`id` = `c1`.`id` AND `c2`.`appname` = %s AND `c2`.`fieldname` = 'LastName' )
			LEFT JOIN `{$m4is_qg2yw00j71q090r}` AS `c3`
			ON ( `c3`.`id` = `c1`.`id` AND `c3`.`appname` = %s AND `c3`.`fieldname` = 'FirstName' )
			WHERE `c1`.`appname` = %s
			AND `c1`.`fieldname` = %s
			AND `c1`.`value` = %s
			AND `c1`.`id` <> %d
			ORDER BY `c2`.`value`, `c3`.`value`, `c1`.`id` ASC
			{$m4is_cjrjg8zk3g0aca508wymd5742txgd3}
		";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_g61yzqs7ecta0xztr70d7v['appname'], $m4is_g61yzqs7ecta0xztr70d7v['appname'],
 $m4is_g61yzqs7ecta0xztr70d7v['appname'], $m4is_g61yzqs7ecta0xztr70d7v['parent_field'], $m4is_g61yzqs7ecta0xztr70d7v['parent_id'], $m4is_g61yzqs7ecta0xztr70d7v['contact_id'] );

$m4is_3qwaf6xd03657aas = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );

return $m4is_3qwaf6xd03657aas;
}

public function m4is_p2n2ray33y( $m4is_g61yzqs7ecta0xztr70d7v = [] ) {

$m4is_3qwaf6xd03657aas = $this->m4is_g8j3ahbg0y001ryr( $m4is_g61yzqs7ecta0xztr70d7v );


if ( empty( $m4is_3qwaf6xd03657aas ) ) {
return [];
}

$wp_user_ids = [];

foreach( $m4is_3qwaf6xd03657aas as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$wp_user_ids[] = $m4is_wk4dh1rnd3wmwvsggq51nhn87;
}
}

return $wp_user_ids;
}

public function m4is_erq5avevd4dj0hmqvh8zq() : int {

$m4is_3qwaf6xd03657aas = $this->m4is_g8j3ahbg0y001ryr();


return (int) count( $m4is_3qwaf6xd03657aas );
}

public function m4is_hx7dxbmvy( $m4is_g61yzqs7ecta0xztr70d7v = [] ) {

global $wpdb;


$m4is_n7x0afpz = [
'child_contact' => [],
'generate_password' => true,
'optin' => true,
'parent_contact_id' => 0,
'parent_contact' =>
 [],
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args( $m4is_g61yzqs7ecta0xztr70d7v, $m4is_n7x0afpz );


if ( $m4is_g61yzqs7ecta0xztr70d7v['parent_contact_id'] ) {
$m4is_g61yzqs7ecta0xztr70d7v['parent_contact'] = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_g61yzqs7ecta0xztr70d7v['parent_contact_id'] );

}

if ( $m4is_g61yzqs7ecta0xztr70d7v['child_contact_id'] ) {
$m4is_g61yzqs7ecta0xztr70d7v['child_contact'] = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_g61yzqs7ecta0xztr70d7v['child_contact_id'] );

}

if ( empty( $m4is_g61yzqs7ecta0xztr70d7v['child_contact'] ) || empty( $m4is_g61yzqs7ecta0xztr70d7v['parent_contact'] ) ) {
return -1;

}

$m4is_m8x3z0ehyggbsd = $this->m4is_jvjswjxb6h();
$m4is_gxmpgn8mnpv2pbbyz88wjr6gtafb = isset( $m4is_g61yzqs7ecta0xztr70d7v['parent_contact'][$m4is_m8x3z0ehyggbsd] ) ? $m4is_g61yzqs7ecta0xztr70d7v['parent_contact'][$m4is_m8x3z0ehyggbsd] : '';


if ( empty( $m4is_gxmpgn8mnpv2pbbyz88wjr6gtafb ) ) {
return -2;
}

$m4is_b2h21npfbxn8c982sh = $this->m4is_jvjswjxb6h();
if ( ! empty( $m4is_g61yzqs7ecta0xztr70d7v['child_contact'][$m4is_b2h21npfbxn8c982sh] ) ) {
return -3;

}

$m4is_ra7dnjjzebn9h3t6k7a2p36 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b();
$m4is_wte2qk9hdk1zj7 = isset( $m4is_ra7dnjjzebn9h3t6k7a2p36['settings']['password_field']) ? $m4is_ra7dnjjzebn9h3t6k7a2p36['settings']['password_field'] : '';


if ( $m4is_g61yzqs7ecta0xztr70d7v['m4is_d4hrfy3cjzb3y58yrjedq69fqd958dp'] && empty( $m4is_g61yzqs7ecta0xztr70d7v['child_contact'][$m4is_wte2qk9hdk1zj7] ) ) {
$m4is_g61yzqs7ecta0xztr70d7v['child_contact'][$m4is_wte2qk9hdk1zj7] = $this->m4is_132xe588j->m4is_d4hrfy3cjzb3y58yrjedq69fqd958dp();

}

$m4is_x59rxz203x1nf3hns8z = (int) $m4is_g61yzqs7ecta0xztr70d7v['child_contact']['Id'];
$m4is_1ga86sjphcssgm32pxkrtnrhv = (int) $m4is_g61yzqs7ecta0xztr70d7v['parent_contact_id']['Id'];


if ( empty( $m4is_g61yzqs7ecta0xztr70d7v['child_contact']['Id'] ) && ! empty( $m4is_g61yzqs7ecta0xztr70d7v['child_contact_id']['Email'] ) ) {

$m4is_7b2yfzk0054 = $m4is_g61yzqs7ecta0xztr70d7v['child_contact'];

$m4is_7b2yfzk0054[$m4is_b2h21npfbxn8c982sh] = $this->m4is_sq8ehy5ma7pbmrxnswe86hfz2p( $m4is_gxmpgn8mnpv2pbbyz88wjr6gtafb, 'child' );


$m4is_x59rxz203x1nf3hns8z = (int) m4is_rw8p2dfy073ez::m4is_fcp8rjzp5vm($m4is_7b2yfzk0054);

if ( $m4is_x59rxz203x1nf3hns8z ) {

$m4is_g61yzqs7ecta0xztr70d7v = [
'contact_id' =>
 $m4is_x59rxz203x1nf3hns8z,
'cache_ttl' => 0
];
$this->m4is_132xe588j->m4is_zxceeesaskr61p( $m4is_g61yzqs7ecta0xztr70d7v );

$m4is_g61yzqs7ecta0xztr70d7v['child_contact_id'] = $m4is_x59rxz203x1nf3hns8z;

$m4is_g61yzqs7ecta0xztr70d7v['child_contact']['Id'] = $m4is_x59rxz203x1nf3hns8z;
$m4is_g61yzqs7ecta0xztr70d7v['parent_contact_id'] = (int) $m4is_g61yzqs7ecta0xztr70d7v['parent_contact_id'];


if ( $m4is_g61yzqs7ecta0xztr70d7v['optin'] ) {
m4is_rw8p2dfy073ez::m4is_rxf2xq5wvdkk7jhkx8( $m4is_g61yzqs7ecta0xztr70d7v['child_contact']['Email'],
 'Added by Memberium Umbrella Account System' );
}

m4is_xm67qjyegqdeb9wqcm::m4is_p9t3a40qehbq9ywrvrgje2vp8z( $m4is_x59rxz203x1nf3hns8z,
 $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_added_goal'] );
m4is_xm67qjyegqdeb9wqcm::m4is_p9t3a40qehbq9ywrvrgje2vp8z( $m4is_1ga86sjphcssgm32pxkrtnrhv,
 $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_added_goal'] );
m4is_w3pp5rsxdc03bns3::m4is_07fbvb4g75( $m4is_x59rxz203x1nf3hns8z,
 (int) $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['add_child_actionset'] );
m4is_w3pp5rsxdc03bns3::m4is_07fbvb4g75( $m4is_1ga86sjphcssgm32pxkrtnrhv,
 (int) $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_added_actionset'] );
}
}

return $m4is_x59rxz203x1nf3hns8z;
}

public function m4is_sq8ehy5ma7pbmrxnswe86hfz2p( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '',
 $m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp = 'raw' ) {

if ( ! in_array( substr( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, 0, 5 ), ['chld-',
 'prnt-']) ) {
$m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp = 'raw';
}

$m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp = strtolower( trim( $m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp ) );


if ( $m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp == 'parent' ) {
return 'prnt-' . substr( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, 5 );
}

elseif ( $m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp == 'child' ) {
return 'chld-' . substr( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 5 );
}

else {
return $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4;
}
}

public function m4is_312k8wj7v1ctqs( $data ) {
return;
$quiz['id'] = $data['quiz']->ID;

$quiz['name'] = $data['quiz']->post_title;
$quiz['score'] = $data['score'];
$quiz['count'] = $data['count'];
$quiz['pass'] = $data['pass'];

$quiz['points'] = $data['points'];
$quiz['percentage'] = $data['percentage'];
$quiz['time'] = (int) $data['timespent'];
$clientlist[0] = $this->m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$email_template_id = get_post_meta( $quiz['id'], 'parent_email_notification', 0 );
$m4is_3pnan1s12dw = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'keap', 'contact' );

$full_name = ( $m4is_3pnan1s12dw['firstname'] ?? '' ) . ' ' . ( $m4is_3pnan1s12dw['lastname'] ?? '' );
$mail['subject'] = 'MMMastery Update: '. $full_name . '\'s Quiz Results for ' . $quiz['name'];

$mail['to'] = $m4is_3pnan1s12dw['email'] ?? '';
$mail['body'] = "\n";
$mail['body'] .= "Congratulations!\n";
$mail['body'] = "\n";

$mail['body'] .= "You've Just Passed the Quiz for {$quiz['name']} \n";
$mail['body'] = "\n";
$mail['body'] = "Your Percentage Correct:  {$quiz['percentage']}\n";

$mail['body'] = "Your Score:  {$quiz['score']}\n";
$mail['body'] = "Your Points:  {$quiz['points']}\n";
$mail['body'] = "Your Time:  {$quiz['time']}\n";

$mail['body'] = "\n";
$mail['body'] = "Please keep in mind that this isn't a certification but a retention assessment. Keep up the good work!\n";

$mail['body'] = "\n";
$mail['body'] = "Thanks again,\n";
$mail['body'] = "Micah Mitchell\n";
$mail['body'] = "MMMastery.com\n";

$mail['body'] = do_shortcode( $mail['body'] );

if ( ! empty( $m4is_3pnan1s12dw['!parent_id'] ) ) {
$clientlist[1] = $m4is_3pnan1s12dw['!parent_id'];
$mail['cc'] = $m4is_3pnan1s12dw['_ParentUsername'] ?? '';

}
$result = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->sendEmail(
$clientlist,

'noreply@fierceconnection.com',
'~Contact.Email~',
$mail['cc'],
'',
'Text',
$mail['subject'],
'',
$mail['body']
);
}


public function m4is_wavagxa5eyec7shckeq( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0 ) : int {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_wk4dh1rnd3wmwvsggq51nhn87 ?: (int) self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_fv9p5zzz6 = $this->m4is_x15jjq2b1gzqjcebbs93pg1gxd8g4();

if ( ! array_intersect( explode( ',', $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] ), explode( ',', $m4is_fv9p5zzz6 ) ) ) {
return 0;
 
}
if ( isset( $m4is_6mctr922hbmncpwfrp0x2k['umbrella']['max_child_accounts'] ) ) {
return $m4is_6mctr922hbmncpwfrp0x2k['umbrella']['max_child_accounts'];

}
if ( $m4is_zz07fhw4pp9d36dw5rmfd7s08sfb39jr = get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, self::M4IS_MA84N0XYQQ1E4WEW6Q, true ) ) {
return $m4is_zz07fhw4pp9d36dw5rmfd7s08sfb39jr;

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp == 0 ) {
return 0;
}
$m4is_cyg7rcfhzagmm5v = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 true, true );
$m4is_fv9p5zzz6 = empty( $m4is_cyg7rcfhzagmm5v['groups'] ) ? [] : explode( ',', $m4is_cyg7rcfhzagmm5v['groups'] );
if ( ! $this->m4is_4cydeck40zt7a( $m4is_fv9p5zzz6 ) ) {
return 0;

}
$m4is_7g9y793jjckyb = isset( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['max_child_accounts'] ) ? $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['max_child_accounts'] : 0;
 
$m4is_0qe53pk69xkq15qd933wv7 = isset( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_grants'] ) ? $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_grants'] : [];

$m4is_bbsta3mvjhhvh1x97vfpm9e = empty( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_count_add'] ) ? '' : strtolower( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_count_add'] );

$m4is_xty2fvxy57g6r15 = $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['ecommerce'];

if ( ! empty( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = isset( $m4is_cyg7rcfhzagmm5v[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] ) ? (int) $m4is_cyg7rcfhzagmm5v[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] : 0;

$m4is_7g9y793jjckyb = $m4is_7g9y793jjckyb + $m4is_rqxytszfq5v6syth1csqqxvy5;
}

if ( $m4is_0qe53pk69xkq15qd933wv7 ) {
foreach( $m4is_0qe53pk69xkq15qd933wv7 as $m4is_hf6ctsm2pnexk =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( in_array( $m4is_hf6ctsm2pnexk, $m4is_fv9p5zzz6 ) ) {
$m4is_7g9y793jjckyb = $m4is_7g9y793jjckyb + $m4is_rqxytszfq5v6syth1csqqxvy5;

}
}
}

if ( $m4is_xty2fvxy57g6r15 ) {
$m4is_yggq5j195mnp46m3zfr = $this->m4is_132xe588j->m4is_j4c49s3gx2v8vx0v8ap1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( ! empty( $m4is_yggq5j195mnp46m3zfr ) ) {
$m4is_541vnrmmz = date( 'Ymd' ) . 'T23:59:59';
foreach( $m4is_yggq5j195mnp46m3zfr as $m4is_ch8hrhh6sba02hkj735k3 ) {
$m4is_ch8hrhh6sba02hkj735k3['EndDate'] = isset( $m4is_ch8hrhh6sba02hkj735k3['EndDate'] ) ? $m4is_ch8hrhh6sba02hkj735k3['EndDate'] : '';

$m4is_ch8hrhh6sba02hkj735k3['Active'] = isset( $m4is_ch8hrhh6sba02hkj735k3['Active'] ) ? $m4is_ch8hrhh6sba02hkj735k3['Active'] : '';

if ( $m4is_ch8hrhh6sba02hkj735k3['Status'] == 'Active' || $m4is_ch8hrhh6sba02hkj735k3['EndDate'] > $m4is_541vnrmmz ) {
$m4is_06ganav1 = $m4is_ch8hrhh6sba02hkj735k3['SubscriptionPlanId'];

$m4is_7g9y793jjckyb = $m4is_7g9y793jjckyb + ( empty( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['subscriptions'][$m4is_06ganav1] ) ? 0 : ($this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['subscriptions'][$m4is_06ganav1] * $m4is_ch8hrhh6sba02hkj735k3['Qty']) );

}
}
}
}
$m4is_7g9y793jjckyb = apply_filters( 'memberium/groupaccount/childcount/override', $m4is_7g9y793jjckyb, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, self::M4IS_MA84N0XYQQ1E4WEW6Q, $m4is_7g9y793jjckyb );
return $m4is_7g9y793jjckyb;

}

public function m4is_9txhy23jsbmx3( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, array $m4is_cyg7rcfhzagmm5v ) : int {
$m4is_key2pbet8pw44y24bxs5htbkvy = 0;

if ( empty( $m4is_cyg7rcfhzagmm5v['id'] ) ) {
return $m4is_key2pbet8pw44y24bxs5htbkvy;
}
$m4is_fv9p5zzz6 = explode( ',', $this->m4is_x15jjq2b1gzqjcebbs93pg1gxd8g4() );

$m4is_eb74p0wje7yw151 = explode( ',', $m4is_cyg7rcfhzagmm5v['groups'] ?? '' );
if ( ! array_intersect( $m4is_eb74p0wje7yw151, $m4is_fv9p5zzz6) ) {
return $m4is_key2pbet8pw44y24bxs5htbkvy;

}

$m4is_key2pbet8pw44y24bxs5htbkvy = (int) $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['max_child_accounts']; 

$m4is_key2pbet8pw44y24bxs5htbkvy += $this->m4is_ecc32npe75ed5nkjj4hqgkxg0( $m4is_cyg7rcfhzagmm5v );

$m4is_key2pbet8pw44y24bxs5htbkvy += $this->m4is_9whbjdjt3d83cpx1cwm53c7yj7s( $m4is_eb74p0wje7yw151 );
$m4is_key2pbet8pw44y24bxs5htbkvy += $this->m4is_cqdyq8xfdanr1n8fm4hmwzgzdkmyx1b( $m4is_cyg7rcfhzagmm5v['id'] );

$m4is_key2pbet8pw44y24bxs5htbkvy = apply_filters( 'memberium/groupaccount/childcount/override', $m4is_key2pbet8pw44y24bxs5htbkvy, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_f1ybjazfjcrdvp8d67mwph315xe2z = get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, self::M4IS_MA84N0XYQQ1E4WEW6Q, true );
if ( $m4is_f1ybjazfjcrdvp8d67mwph315xe2z !== $m4is_key2pbet8pw44y24bxs5htbkvy ) {
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 self::M4IS_MA84N0XYQQ1E4WEW6Q, $m4is_key2pbet8pw44y24bxs5htbkvy );
}
return $m4is_key2pbet8pw44y24bxs5htbkvy;
}

private function m4is_9whbjdjt3d83cpx1cwm53c7yj7s( array $m4is_eb74p0wje7yw151 ) : int {
$m4is_key2pbet8pw44y24bxs5htbkvy = 0;

foreach( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_grants'] ?? [] as $m4is_hf6ctsm2pnexk => $m4is_snrka8rzen7q ) {
if ( in_array( $m4is_hf6ctsm2pnexk,
 $m4is_eb74p0wje7yw151 ) ) {
$m4is_key2pbet8pw44y24bxs5htbkvy += $m4is_snrka8rzen7q;
}
}
return $m4is_key2pbet8pw44y24bxs5htbkvy;
}

private function m4is_ecc32npe75ed5nkjj4hqgkxg0( array $m4is_cyg7rcfhzagmm5v ) : int {
$m4is_snrka8rzen7q = 0;

$m4is_gxqmhmerpqsdvfems7z0wjv = strtolower( $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_count_add'] ?? '' );
if ( empty( $m4is_gxqmhmerpqsdvfems7z0wjv ) || ! array_key_exists( $m4is_gxqmhmerpqsdvfems7z0wjv,
 $m4is_cyg7rcfhzagmm5v ) ) {
return $m4is_snrka8rzen7q;
}
$m4is_snrka8rzen7q =(int) ( $m4is_cyg7rcfhzagmm5v[$m4is_gxqmhmerpqsdvfems7z0wjv] ?? 0 );

return $m4is_snrka8rzen7q;
}

private function m4is_cqdyq8xfdanr1n8fm4hmwzgzdkmyx1b( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : int {
$m4is_key2pbet8pw44y24bxs5htbkvy = 0;

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp < 1 ) {
return $m4is_key2pbet8pw44y24bxs5htbkvy;
}
$m4is_xty2fvxy57g6r15 = $this->m4is_8ew58cpxmftgpw93gdffm4s9bbwy['subscriptions'] ?? [];

if ( empty( $m4is_xty2fvxy57g6r15 ) ) {
return $m4is_key2pbet8pw44y24bxs5htbkvy;
}
$m4is_yggq5j195mnp46m3zfr = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_j4c49s3gx2v8vx0v8ap1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( empty( $m4is_yggq5j195mnp46m3zfr ) || ! is_array( $m4is_yggq5j195mnp46m3zfr ) ) {
return $m4is_key2pbet8pw44y24bxs5htbkvy;
}
$m4is_541vnrmmz = date( 'Ymd' ) . 'T23:59:59';

$m4is_3djz4a6nkcq8tzh = '2099-12-31T23:59:59';
foreach( $m4is_yggq5j195mnp46m3zfr as $m4is_ch8hrhh6sba02hkj735k3 ) {
$m4is_yrsthh0s4s62mfk9 = $m4is_ch8hrhh6sba02hkj735k3['Status'] ?? 'Active';

if ( $m4is_yrsthh0s4s62mfk9 !== 'Active' ) {
continue;
}
$m4is_cdwrcp15y2v3tkcv8yf87 = $m4is_ch8hrhh6sba02hkj735k3['EndDate'] ?? $m4is_3djz4a6nkcq8tzh;

if ( ! empty( $m4is_cdwrcp15y2v3tkcv8yf87 ) && $m4is_cdwrcp15y2v3tkcv8yf87 < $m4is_541vnrmmz ) {
continue;
}
$m4is_06ganav1 = $m4is_ch8hrhh6sba02hkj735k3['SubscriptionPlanId'];

$m4is_cnzckac2h7bx80zbgcnxcx88cgd7g = empty( $m4is_xty2fvxy57g6r15[$m4is_06ganav1] ) ? 0 : $m4is_xty2fvxy57g6r15[$m4is_06ganav1];
$m4is_ap27k2t9s2sf806adn = $m4is_ch8hrhh6sba02hkj735k3['Qty'] ?? 1;

$m4is_key2pbet8pw44y24bxs5htbkvy += $m4is_cnzckac2h7bx80zbgcnxcx88cgd7g * $m4is_ap27k2t9s2sf806adn;
}
return $m4is_key2pbet8pw44y24bxs5htbkvy;

}

public function m4is_aehydx19f( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, int $m4is_xcg4je0en = 0 ) : int {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) FROM %i WHERE `parent_uid` = %d AND `active` = 1 AND `child_uid` > 0";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, m4is_bj0mt04ye7axtp644x64m::m4is_8dnas9z9md577n9p1bher(),
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
if ( $m4is_xcg4je0en ) {
$m4is_5rbenkpt1v7xby2cknbs7 .= " AND `child_uid` <> %d";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 $m4is_xcg4je0en );
}
$m4is_7g9y793jjckyb = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );


return (int) $m4is_7g9y793jjckyb;
}
public function m4is_gf782dws76yc9p03( int $m4is_mdk7rfndjat954rt2n0,
 int $m4is_hrpd1pwhn ) : bool {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) FROM %i WHERE `parent_uid` = %d and `child_uid` = %d";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, m4is_bj0mt04ye7axtp644x64m::m4is_8dnas9z9md577n9p1bher(),
 $m4is_mdk7rfndjat954rt2n0, $m4is_hrpd1pwhn );
$is_child = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
return (bool) $is_child;
}

public function m4is_dr8ff7hwsd6h5y( int $m4is_5ygx9ywzd4gfc1dwqb ) : array {
global $wpdb;

$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_8dnas9z9md577n9p1bher();
$m4is_zz07fhw4pp9d36dw5rmfd7s08sfb39jr = $this->m4is_wavagxa5eyec7shckeq( $m4is_5ygx9ywzd4gfc1dwqb );

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `child_uid` FROM %i WHERE `parent_uid` = %d AND `child_uid` > 0 AND `active` = 1 ORDER BY `id` ASC LIMIT %d";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_5ygx9ywzd4gfc1dwqb, $m4is_zz07fhw4pp9d36dw5rmfd7s08sfb39jr );

$m4is_1yzmh3jsg57 = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
if ( count( $m4is_1yzmh3jsg57 ) <= $m4is_zz07fhw4pp9d36dw5rmfd7s08sfb39jr ) {
return $m4is_1yzmh3jsg57;

}
if ( count( $m4is_1yzmh3jsg57 ) == $m4is_zz07fhw4pp9d36dw5rmfd7s08sfb39jr ) {
$m4is_tvq4vshf8pgm = implode( ',', $m4is_1yzmh3jsg57 );

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `child_uid` FROM %i WHERE `parent_uid` = %d AND `child_uid` NOT IN ( {$m4is_tvq4vshf8pgm} )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_5ygx9ywzd4gfc1dwqb );
$m4is_6ebddrshe9c8he = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );

if ( is_array( $m4is_6ebddrshe9c8he ) ) {
foreach( $m4is_6ebddrshe9c8he as $m4is_x56navz68xexnnndmk7 ) {
$this->m4is_n627ntey0gxnss6e11sxtw9ks8st4( $m4is_x56navz68xexnnndmk7,
 $m4is_5ygx9ywzd4gfc1dwqb );
}
}
}
return $m4is_1yzmh3jsg57;
}

public function m4is_39a51e7dpqe6bbee2h6( int $m4is_hrpd1pwhn ) {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `parent_uid` FROM %i WHERE `child_uid` = %d ORDER BY `id` ASC LIMIT 1";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 m4is_bj0mt04ye7axtp644x64m::m4is_8dnas9z9md577n9p1bher(), $m4is_hrpd1pwhn );
$m4is_mdk7rfndjat954rt2n0 = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

return (int) $m4is_mdk7rfndjat954rt2n0;
}

public function m4is_210qcdmxy4335k6sm7ed2rxmx5hq( int $m4is_yan573ys3brnv39zsernk3xs, int $m4is_5ygx9ywzd4gfc1dwqb ) : bool {
global $wpdb;

$m4is_z4t813pw9 = $this->m4is_aehydx19f( $m4is_5ygx9ywzd4gfc1dwqb, $m4is_yan573ys3brnv39zsernk3xs );
$m4is_ma90yykszqq4nbpvmwqcdw5nep5 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_5ygx9ywzd4gfc1dwqb,
 'umbrella', 'max_children', 0 );
if ( $m4is_ma90yykszqq4nbpvmwqcdw5nep5 <= $m4is_z4t813pw9 ) {
return false;
}
$m4is_t7fmxhrcpakr5d5fj = $this->m4is_d8a4vc22ej7nz2hyt3jjya0m5gj9tj71( $m4is_5ygx9ywzd4gfc1dwqb );

m4is_bj0mt04ye7axtp644x64m::m4is_tx3rs4mb6ecxsjzkk7ax8078w9fte( $m4is_yan573ys3brnv39zsernk3xs, $m4is_5ygx9ywzd4gfc1dwqb, $m4is_t7fmxhrcpakr5d5fj );

update_user_meta( $m4is_yan573ys3brnv39zsernk3xs, self::M4IS_P7JTE8A1JMZGQ4B539WG, 'relationship_table' );
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_hr936s717w4jdp9fjkjap( $m4is_yan573ys3brnv39zsernk3xs );


m4is_2exv33mh4h4k4::m4is_kk6ztx3jd7mbpf075prt4mnw11s();
return true;
}

private function m4is_d8a4vc22ej7nz2hyt3jjya0m5gj9tj71( $m4is_5ygx9ywzd4gfc1dwqb ) : bool {
$m4is_t7fmxhrcpakr5d5fj = ! empty( m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_5ygx9ywzd4gfc1dwqb,
 'memb_user', 'membership_tags', '' ) );
return $m4is_t7fmxhrcpakr5d5fj;
}

public function m4is_mtwwafq88nsk( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : void {
global $wpdb;

m4is_wv1rppa066tww11snkg8g06rv922xj::m4is_9kaafnwch0brfqx1fbcdk4dayrh( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_8dnas9z9md577n9p1bher();

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE parent_uid = %d OR `child_uid` > %d";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 $m4is_k7p8pmxsbkqrje3y20, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

}

public function m4is_n627ntey0gxnss6e11sxtw9ks8st4( int $m4is_yan573ys3brnv39zsernk3xs, int $m4is_5ygx9ywzd4gfc1dwqb ) : bool {
global $wpdb;

m4is_bj0mt04ye7axtp644x64m::m4is_tx3rs4mb6ecxsjzkk7ax8078w9fte( $m4is_yan573ys3brnv39zsernk3xs, $m4is_5ygx9ywzd4gfc1dwqb, false );

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_hr936s717w4jdp9fjkjap( $m4is_yan573ys3brnv39zsernk3xs );
m4is_2exv33mh4h4k4::m4is_kk6ztx3jd7mbpf075prt4mnw11s();

m4is_wv1rppa066tww11snkg8g06rv922xj::m4is_9kaafnwch0brfqx1fbcdk4dayrh( $m4is_yan573ys3brnv39zsernk3xs );
return true;
}








}