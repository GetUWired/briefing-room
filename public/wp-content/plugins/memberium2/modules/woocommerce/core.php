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


final class m4is_fe9nkjefxy9e1dw27me4hsqr {
private array $m4is_g37kyama0pwkpf2bnxexy29;
private array $m4is_zdw3brjm9ka3p3d7p6g7g1;

private array $m4is_0grjrj6gh3tvbe0hrpb1x;
private array $m4is_7tf88pa2p0127r8;
private m4is_6y9612z4hjd6fzpap4r5n853641m1jc $m4is_132xe588j;

public const M4IS_N41BMKAA686MKBD11AB = '_memberium_checkout_redirect';

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_19ka9z5gq101z4();

$this->m4is_r8emp2zcmhv1twqx3qx8mv();
$this->m4is_5eragr7sh2yyj356m();
}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_g37kyama0pwkpf2bnxexy29 = [
'active',
'completed',
'pending-cancel',
'processing',
];
$this->m4is_g37kyama0pwkpf2bnxexy29 = wc_get_is_paid_statuses();

$this->m4is_zdw3brjm9ka3p3d7p6g7g1 = [
'cancelled',
'expired',

];
$this->m4is_0grjrj6gh3tvbe0hrpb1x = [
'pending',
'on-hold',
];
$this->m4is_7tf88pa2p0127r8 = [
'account_first_name' =>
 'FirstName',
'account_last_name' => 'LastName',
'first_name' => 'FirstName',
'last_name' => 'LastName',
'billing_address_1' => 'StreetAddress1',

'billing_address_2' => 'StreetAddress2',
'billing_city' => 'City',
'billing_company' => 'Company',
'billing_country' => 'Country',

'billing_email' => 'Email',
'billing_phone' => 'Phone1',
'billing_postcode' => 'PostalCode',
'billing_state' => 'State',
'shipping_address_1' =>
 'Address2Street1',
'shipping_address_2' => 'Address2Street2',
'shipping_city' => 'City2',
'shipping_country' => 'Country2',
'shipping_email' =>
 'Email2',
'shipping_phone' => 'Phone2',
'shipping_postcode' => 'PostalCode2',
'shipping_state' => 'State2',
];
}

private function m4is_19ka9z5gq101z4() : void {
$m4is_drfzqdp3 = [
'm4is_q9d7srb6mmjgnc8fdk775qe' =>
 __DIR__ . '/admin',
'm4is_mjfk4m2tths8y3ka76d34aangrca' => __DIR__ . '/frontend',
'm4is_cme6s60kg' => __DIR__ . '/shortcodes',
];
$this->m4is_132xe588j->m4is_30j08k6rn5y4pz4w( $m4is_drfzqdp3 );

}

private function m4is_5eragr7sh2yyj356m() : void {
add_action( 'woocommerce_order_status_changed', [$this, 'm4is_7v0n63yd3dwk9d'],
 10, 3 );
add_action( 'woocommerce_subscription_status_updated', [$this, 'm4is_tcnmrb4xxx8hb80nfvsnzt4ch57v3'], 10, 3 );
add_filter( 'memberium/registration/field_map',
 [$this, 'm4is_edaqg5seyf34j1j9'], 10, 1 );
add_filter( 'memberium/usermeta/crm_field_maps', [$this, 'm4is_edaqg5seyf34j1j9'], 10, 1 );

add_filter( 'memberium/usermeta/transmute', [$this, 'm4is_e715twzqdpaxaz4kzh9eb8m3v'], 10, 3 );
add_filter( 'woocommerce_new_customer_data',
 [$this, 'm4is_xhzdrb76hgshtxywts'], 10 );
}

private function m4is_r8emp2zcmhv1twqx3qx8mv() : void {
if ( is_admin() ) {
require_once __DIR__ . '/admin.php';

m4is_q9d7srb6mmjgnc8fdk775qe::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
else {
require_once __DIR__ . '/frontend.php';
m4is_mjfk4m2tths8y3ka76d34aangrca::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}

public function m4is_7v0n63yd3dwk9d( $m4is_z331qzpscyepmkg, $m4is_x0xnrab26kk90734vqnvk, $m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv ) : void {
$m4is_mqngqwpvn9gebshs3qkf54653qfdh9k = wc_get_order( $m4is_z331qzpscyepmkg );

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k->get_user_id();
if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return;

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_3h2p59t1q80qzpcs = $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k->get_items();

if ( is_array( $m4is_3h2p59t1q80qzpcs ) && ! empty( $m4is_3h2p59t1q80qzpcs ) ) {
foreach ($m4is_3h2p59t1q80qzpcs as $item_key => $m4is_s8cs5mdq57e5bgpqzd ) {

$m4is_nctf6sc4v5npxn5der7ve5gs = $m4is_s8cs5mdq57e5bgpqzd->get_product_id();

$this->m4is_662x52mc1srjeay74cq( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_nctf6sc4v5npxn5der7ve5gs,
 $m4is_z331qzpscyepmkg, $m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv, $m4is_x0xnrab26kk90734vqnvk );
}
}
}

private function m4is_g9vy7rd8ktqn1hkqk761q45cs0kn2( $m4is_tz1rt7sbq40fade6e6rx = 0,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0, $m4is_cwv4aa9zak1r37 = '' ) : void {
$m4is_tz1rt7sbq40fade6e6rx = (int) $m4is_tz1rt7sbq40fade6e6rx;

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87;
if ( empty( $m4is_tz1rt7sbq40fade6e6rx ) || empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) || empty( $m4is_cwv4aa9zak1r37 ) ) {
return;

}
if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'id', $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;
$m4is_aczehtt06z8n2h = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login;

$m4is_15yq5r4y88kyvr67sd3yq3a4aw916s = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email;
}
else {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0;

$m4is_aczehtt06z8n2h = 'Memberium';
$m4is_15yq5r4y88kyvr67sd3yq3a4aw916s = '';
}
$m4is_g4fz4h1295j = [
'comment_agent' => 'Memberium',

'comment_approved' => 1,
'comment_author_email' => $m4is_15yq5r4y88kyvr67sd3yq3a4aw916s,
'comment_author_IP' => '',
'comment_author_url' =>
 '',
'comment_author' => $m4is_aczehtt06z8n2h,
'comment_content' => trim( $m4is_cwv4aa9zak1r37 ),
'comment_date' => current_time( 'mysql' ),

'comment_parent' => 0,
'comment_post_ID' => (int) $m4is_tz1rt7sbq40fade6e6rx,
'comment_type' => 'order_note',
'user_id' => $m4is_wk4dh1rnd3wmwvsggq51nhn87,

];
wp_insert_comment( $m4is_g4fz4h1295j );
}

private function m4is_662x52mc1srjeay74cq( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 int $m4is_wk4dh1rnd3wmwvsggq51nhn87, int $m4is_nctf6sc4v5npxn5der7ve5gs, int $m4is_z331qzpscyepmkg, string $m4is_yrsthh0s4s62mfk9,
 string $m4is_x0xnrab26kk90734vqnvk ) : void {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87;

$m4is_nctf6sc4v5npxn5der7ve5gs = (int) $m4is_nctf6sc4v5npxn5der7ve5gs;
$m4is_z331qzpscyepmkg = (int) $m4is_z331qzpscyepmkg;
$m4is_yrsthh0s4s62mfk9 = (string) $m4is_yrsthh0s4s62mfk9;

$m4is_x0xnrab26kk90734vqnvk = (string) $m4is_x0xnrab26kk90734vqnvk;
if ( $m4is_yrsthh0s4s62mfk9 <> $m4is_x0xnrab26kk90734vqnvk ) {
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp && $m4is_nctf6sc4v5npxn5der7ve5gs) {
$m4is_06c8s5xs94f91335gnaey25 = $this->m4is_cdah0wdmmfxs05nt7cmm($m4is_nctf6sc4v5npxn5der7ve5gs);

$m4is_5nchy67b47m6tj4qv3px = '';
$m4is_zxa05fq9f81p8g = 'Memberium ';
$m4is_7dam7950d2nhpx94vbxdv8v2575yx63h = in_array($m4is_x0xnrab26kk90734vqnvk,
 $this->m4is_g37kyama0pwkpf2bnxexy29);
if ( in_array( $m4is_yrsthh0s4s62mfk9, $this->m4is_g37kyama0pwkpf2bnxexy29 ) ) {
if ($m4is_06c8s5xs94f91335gnaey25['main']) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx($m4is_06c8s5xs94f91335gnaey25['main'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
$m4is_5nchy67b47m6tj4qv3px .= "{$m4is_zxa05fq9f81p8g} added tag {$m4is_06c8s5xs94f91335gnaey25['main']}<br>";

}

if ($m4is_06c8s5xs94f91335gnaey25['canc']) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx(-abs($m4is_06c8s5xs94f91335gnaey25['canc']),
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
$m4is_5nchy67b47m6tj4qv3px .= "{$m4is_zxa05fq9f81p8g} removed tag {$m4is_06c8s5xs94f91335gnaey25['canc']}<br>";

}
if ($m4is_06c8s5xs94f91335gnaey25['payf']) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx(-abs($m4is_06c8s5xs94f91335gnaey25['payf']),
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
$m4is_5nchy67b47m6tj4qv3px .= "{$m4is_zxa05fq9f81p8g} removed tag {$m4is_06c8s5xs94f91335gnaey25['payf']}<br>";

}

if ($m4is_06c8s5xs94f91335gnaey25['susp']) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx(-abs($m4is_06c8s5xs94f91335gnaey25['susp']),
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
$m4is_5nchy67b47m6tj4qv3px .= "{$m4is_zxa05fq9f81p8g} removed tag {$m4is_06c8s5xs94f91335gnaey25['susp']}<br>";

}
}
elseif ($m4is_yrsthh0s4s62mfk9 == 'failed') {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx($m4is_06c8s5xs94f91335gnaey25['payf'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
if ($m4is_06c8s5xs94f91335gnaey25['main']) $m4is_5nchy67b47m6tj4qv3px .= "{$m4is_zxa05fq9f81p8g} added tag {$m4is_06c8s5xs94f91335gnaey25['payf']}<br>";

}
elseif ( in_array($m4is_yrsthh0s4s62mfk9, $this->m4is_zdw3brjm9ka3p3d7p6g7g1) ) {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx($m4is_06c8s5xs94f91335gnaey25['canc'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
if ($m4is_06c8s5xs94f91335gnaey25['main']) $m4is_5nchy67b47m6tj4qv3px .= "{$m4is_zxa05fq9f81p8g} added tag {$m4is_06c8s5xs94f91335gnaey25['canc']}<br>";

}
elseif ($m4is_yrsthh0s4s62mfk9 == 'expired') {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx(0 - $m4is_06c8s5xs94f91335gnaey25['main'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
if ($m4is_06c8s5xs94f91335gnaey25['main']) $m4is_5nchy67b47m6tj4qv3px .= "{$m4is_zxa05fq9f81p8g} removed tag {$m4is_06c8s5xs94f91335gnaey25['main']}<br>";

}
elseif ($m4is_yrsthh0s4s62mfk9 == 'on-hold') {
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx($m4is_06c8s5xs94f91335gnaey25['susp'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
if ($m4is_06c8s5xs94f91335gnaey25['main']) $m4is_5nchy67b47m6tj4qv3px .= "{$m4is_zxa05fq9f81p8g} added tag {$m4is_06c8s5xs94f91335gnaey25['susp']}<br>";

}
$this->m4is_g9vy7rd8ktqn1hkqk761q45cs0kn2($m4is_z331qzpscyepmkg, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_5nchy67b47m6tj4qv3px);
}
}
}

private function m4is_qm7516702rn( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 int $m4is_nctf6sc4v5npxn5der7ve5gs, int $m4is_9g6mvzp2qxpcp0fvgh ) : bool {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87;

$m4is_nctf6sc4v5npxn5der7ve5gs = (int) $m4is_nctf6sc4v5npxn5der7ve5gs;
$m4is_9g6mvzp2qxpcp0fvgh = (int) $m4is_9g6mvzp2qxpcp0fvgh;
$m4is_g61yzqs7ecta0xztr70d7v = [
'subscriptions_per_page' =>
 -1,
'customer_id' => $m4is_wk4dh1rnd3wmwvsggq51nhn87,
'product_id' => $m4is_nctf6sc4v5npxn5der7ve5gs,
'subscription_status' => $this->m4is_g37kyama0pwkpf2bnxexy29,

];
$m4is_yggq5j195mnp46m3zfr = wcs_get_subscriptions( $m4is_g61yzqs7ecta0xztr70d7v );
unset( $m4is_yggq5j195mnp46m3zfr[$m4is_9g6mvzp2qxpcp0fvgh] );

return (bool) count( $m4is_yggq5j195mnp46m3zfr );
}

private function m4is_ea7b5z0n5t5d4vmh0fnkexzvqfr( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 int $m4is_nctf6sc4v5npxn5der7ve5gs, int $m4is_5njnyh1gff2b8nfc2 ) : bool {
$m4is_g61yzqs7ecta0xztr70d7v = [
'customer_id' => $m4is_wk4dh1rnd3wmwvsggq51nhn87,

'return' => 'ids',
'status' => $this->m4is_g37kyama0pwkpf2bnxexy29,
'product_id' => $m4is_nctf6sc4v5npxn5der7ve5gs,
];
$m4is_q4d1ydvd = wc_get_orders( $m4is_g61yzqs7ecta0xztr70d7v );
 
$m4is_q4d1ydvd = array_diff( $m4is_q4d1ydvd, [ $m4is_5njnyh1gff2b8nfc2 ]);
foreach( $m4is_q4d1ydvd as $m4is_z331qzpscyepmkg ) {
$m4is_mqngqwpvn9gebshs3qkf54653qfdh9k = wc_get_order( $m4is_z331qzpscyepmkg );

$m4is_3h2p59t1q80qzpcs = $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k->get_items();
foreach( $m4is_3h2p59t1q80qzpcs as $m4is_s8cs5mdq57e5bgpqzd ) {

if ( $m4is_s8cs5mdq57e5bgpqzd->get_product_id() == $m4is_nctf6sc4v5npxn5der7ve5gs ) {
return true;

}
}
}
return false;
}






private function m4is_dcgmcqq2dsqaywxkjz974vyhhchv7t() : array {
static $m4is_x6ene2x9jhsy7f9kmaz9xr2rd5nf;

return $m4is_x6ene2x9jhsy7f9kmaz9xr2rd5nf ??= $m4is_x6ene2x9jhsy7f9kmaz9xr2rd5nf ?? [
'canc' => '_memberium_canc_tag',
'main' => '_memberium_main_tag',

'payf' => '_memberium_payf_tag',
'susp' => '_memberium_susp_tag',
];
}

private function m4is_cdah0wdmmfxs05nt7cmm( int $m4is_nctf6sc4v5npxn5der7ve5gs ) : array {
$m4is_06c8s5xs94f91335gnaey25 = [];

if ( empty( $m4is_nctf6sc4v5npxn5der7ve5gs ) ) {
return $m4is_06c8s5xs94f91335gnaey25;
}
$m4is_0kdm2zprhs5b1 = get_post_meta( $m4is_nctf6sc4v5npxn5der7ve5gs );

if ( ! is_array( $m4is_0kdm2zprhs5b1 ) ) {
return $m4is_06c8s5xs94f91335gnaey25;
}
foreach( $this->m4is_dcgmcqq2dsqaywxkjz974vyhhchv7t() as $m4is_hce1y1a4qd65zhnwsj =>
 $m4is_j8j55t8dz79m7 ) {
$m4is_06c8s5xs94f91335gnaey25[$m4is_hce1y1a4qd65zhnwsj] = empty( $m4is_0kdm2zprhs5b1[$m4is_j8j55t8dz79m7][0] ) ? 0 : (int) $m4is_0kdm2zprhs5b1[$m4is_j8j55t8dz79m7][0];

}
return $m4is_06c8s5xs94f91335gnaey25;
}

public function m4is_xhzdrb76hgshtxywts( array $m4is_rr1ka92w7mhc6vd610sj2q80jaj12t ) : array {
if ( empty( $m4is_rr1ka92w7mhc6vd610sj2q80jaj12t['user_pass'] ) ) {
$m4is_rr1ka92w7mhc6vd610sj2q80jaj12t['user_pass'] = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_d4hrfy3cjzb3y58yrjedq69fqd958dp();

}
if ( isset( $_POST['account_first_name'] ) && ! empty( $_POST['account_first_name'] ) ) {
$m4is_rr1ka92w7mhc6vd610sj2q80jaj12t['first_name'] = trim( $_POST['account_first_name'] );

}
if ( isset( $_POST['account_last_name'] ) && ! empty( $_POST['account_last_name'] ) ) {
$m4is_rr1ka92w7mhc6vd610sj2q80jaj12t['last_name'] = trim($_POST['account_last_name']);

}
if ( get_option( 'woocommerce_registration_generate_username' ) !== 'no' ) {
if ( ! username_exists($m4is_rr1ka92w7mhc6vd610sj2q80jaj12t['user_email']) ) {
$m4is_rr1ka92w7mhc6vd610sj2q80jaj12t['user_login'] = $m4is_rr1ka92w7mhc6vd610sj2q80jaj12t['user_email'];

}
}
return $m4is_rr1ka92w7mhc6vd610sj2q80jaj12t;
}

public function m4is_tcnmrb4xxx8hb80nfvsnzt4ch57v3( WC_Subscription $m4is_ch8hrhh6sba02hkj735k3,
 string $m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv, string $m4is_x0xnrab26kk90734vqnvk ) : void {
$m4is_1fq23brgs = $m4is_ch8hrhh6sba02hkj735k3->get_id();

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_ch8hrhh6sba02hkj735k3->get_user_id();
if (! $m4is_wk4dh1rnd3wmwvsggq51nhn87) {
$this->m4is_g9vy7rd8ktqn1hkqk761q45cs0kn2( $m4is_1fq23brgs,
 0, 'Memberium skipped applying tags due to no assigned WordPress user.' );
return;
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$this->m4is_g9vy7rd8ktqn1hkqk761q45cs0kn2( $m4is_1fq23brgs, $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'Memberium skipped applying tags due to no assigned CRM contact.' );
return;
}
$m4is_3h2p59t1q80qzpcs = $m4is_ch8hrhh6sba02hkj735k3->get_items();

if ( empty( $m4is_3h2p59t1q80qzpcs ) || ! is_array( $m4is_3h2p59t1q80qzpcs ) ) {
return;
}
foreach( $m4is_3h2p59t1q80qzpcs as $m4is_b2hen6ryvt3pxka614bjmdrhw0z8 =>
 $m4is_s8cs5mdq57e5bgpqzd ) {

$m4is_nctf6sc4v5npxn5der7ve5gs = $m4is_s8cs5mdq57e5bgpqzd->get_product_id();
if ( ! $m4is_nctf6sc4v5npxn5der7ve5gs ) {
continue;

}
if ( ! in_array( $m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv, $this->m4is_g37kyama0pwkpf2bnxexy29 ) ) {
$m4is_8yv929kt2n4az6gdrvgs4zg27q2hqg8b = $this->m4is_qm7516702rn( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_nctf6sc4v5npxn5der7ve5gs, $m4is_1fq23brgs );
if ( $m4is_8yv929kt2n4az6gdrvgs4zg27q2hqg8b ) {
$this->m4is_g9vy7rd8ktqn1hkqk761q45cs0kn2( $m4is_1fq23brgs,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'Memberium skipped applying deactivation tag due to other active subscriptions.' );
continue;
}
}
$this->m4is_662x52mc1srjeay74cq($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_nctf6sc4v5npxn5der7ve5gs, $m4is_1fq23brgs, $m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv, $m4is_x0xnrab26kk90734vqnvk);

}
}

public function m4is_edaqg5seyf34j1j9( array $m4is_vny8yng1eqycrgtgc1 ) : array {
return array_merge( $m4is_vny8yng1eqycrgtgc1,
 $this->m4is_7tf88pa2p0127r8 );
}

private function m4is_22r5wk7w2prjqkfwg9vccg6nz0( $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0 ) {
return $m4is_rqxytszfq5v6syth1csqqxvy5;
}

public function m4is_e715twzqdpaxaz4kzh9eb8m3v( $m4is_rqxytszfq5v6syth1csqqxvy5,
 $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0 ) {
if (in_array($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, ['Country',
 'Country2', 'Country3'])) {
if (strlen($m4is_rqxytszfq5v6syth1csqqxvy5) < 4) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = m4is_cyt7qan1n::m4is_b149z081($m4is_rqxytszfq5v6syth1csqqxvy5);

}
}
elseif (in_array($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, ['PostalCode', 'PostalCode2', 'PostalCode3'])) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = strtoupper($m4is_rqxytszfq5v6syth1csqqxvy5);

}
return trim($m4is_rqxytszfq5v6syth1csqqxvy5);
}


}








