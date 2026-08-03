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
 * Handles Memberium's WooCommerce-related frontend functionality.
 *
 * This class integrates Memberium's custom logic with WooCommerce, providing shortcodes,
 * frontend actions, and filters that extend or modify the default WooCommerce behavior
 * for logged-in users, product visibility, and purchase handling.
 *
 * It implements a singleton pattern to ensure only one instance of the class is active during execution.
 *
 * @copyright  2012-2024 David J Bullock
 * @package    Memberium\WooCommerce
 * @subpackage Frontend
 * @since      1.0.0
 * @final
 */


final class m4is_mjfk4m2tths8y3ka76d34aangrca {

private m4is_6y9612z4hjd6fzpap4r5n853641m1jc $m4is_132xe588j;


public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}

private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_5eragr7sh2yyj356m();
}




private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}

private function m4is_5eragr7sh2yyj356m() : void {
add_action( 'init', [$this, 'm4is_jp0rgxf2ytap1chmfg'], 1 );
add_action( 'woocommerce_login_form',
 [$this, 'm4is_x10ezzjak5ej4crvwnwxdem'] );
add_action( 'template_redirect', [$this, 'm4is_ays2t11tnh078rm9'], 9, 0 );
add_action( 'wp_loaded',
 [$this, 'm4is_hdyg8e53r8'], 9, 0 );
add_filter( 'woocommerce_related_products', [$this, 'm4is_1tt1wdaa'], 20, 3 );
add_filter( 'woocommerce_checkout_fields',
 [$this, 'm4is_6jbbe5dapywvt'], 100, 1 );
}




function m4is_jp0rgxf2ytap1chmfg() {
$m4is_aqrkarnrnxpa = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_gbhb1ccq1jfbkkj5();

$m4is_06c8s5xs94f91335gnaey25['nested'] = [
'memb_has_in_cart' => [$m4is_aqrkarnrnxpa, 'm4is_47rr4nm6p9'],
'memb_has_purchased_product' =>
 [$m4is_aqrkarnrnxpa, 'm4is_3kqhpzqy95jvcbxppgpjrwaj'],
'memb_is_cart_empty' => [$m4is_aqrkarnrnxpa, 'm4is_n97tyr9c04a6skw1wjcz0q8wm4mm5'],

];

if ( false ) {
$m4is_06c8s5xs94f91335gnaey25['standard'] = [];
foreach( $m4is_06c8s5xs94f91335gnaey25['standard'] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab ) {
add_shortcode( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, [$this, $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab]);

}
}
foreach( $m4is_06c8s5xs94f91335gnaey25['nested'] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 => $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab ) {
add_shortcode( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 [$this, $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[1] ] );

for ( $i = 1; $i < (int) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[0]; $i++ ) {
add_shortcode( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 . $i,
 [$this, $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[1]]);
}
}
}

public function m4is_hdyg8e53r8() : void {
if ( empty( $_POST['woocommerce-login-nonce'] ) || empty( $_POST['password'] ) || empty( $_POST['username'] ) ) {
return;

}
$m4is_bafcwrfqad69dekc = (bool) m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'persistent_login', 0 );
if ( $m4is_bafcwrfqad69dekc ) {
$_POST['rememberme'] = 'forever';
}
}

public function m4is_6jbbe5dapywvt( $m4is_7b2yfzk0054 ) {
if ( ! is_user_logged_in() ) {
return $m4is_7b2yfzk0054;

}
if ( isset( $m4is_7b2yfzk0054['billing']['billing_email'] ) ) {
$m4is_7b2yfzk0054['billing']['billing_email']['required'] = 0;
}
if ( wp_doing_ajax() ) {
return $m4is_7b2yfzk0054;

}
if ( $this->m4is_132xe588j->m4is_8q8jhpzvpqzpbsbwarb30a4() ) {
return $m4is_7b2yfzk0054;
}
echo <<<HTMLBLOCK

			<style>
				#billing_email_field {visibility:hidden;}
				#billing_email_field label span {visibility:hidden;}
			</style>
		HTMLBLOCK;

return $m4is_7b2yfzk0054;
}

public function m4is_3kqhpzqy95jvcbxppgpjrwaj( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'product_id' =>
 '',
'txtfmt' => '',
'capture' => '',
];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j =shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_vfq75tmb0qbebr2kz44w3jxr0 = array_filter( explode( ',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_id'] ) );

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
foreach( $m4is_vfq75tmb0qbebr2kz44w3jxr0 as $m4is_nctf6sc4v5npxn5der7ve5gs ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_6p2tyvq6paj43svrn7zqaykxzy || wc_customer_bought_product(null,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_nctf6sc4v5npxn5der7ve5gs);
}
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v($m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_6p2tyvq6paj43svrn7zqaykxzy);
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}

public function m4is_47rr4nm6p9( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_n7x0afpz = [
'product_id' => '',
'txtfmt' => '',
'capture' => '',
];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
$m4is_vfq75tmb0qbebr2kz44w3jxr0 = explode(',',
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_id']);
$m4is_5a5j87afkdrp948 = WC()->cart->get_cart();
foreach( $m4is_5a5j87afkdrp948 as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_6p2tyvq6paj43svrn7zqaykxzy || in_array( $m4is_29gzevpx8rbkp['product_id'],
 $m4is_vfq75tmb0qbebr2kz44w3jxr0 );
}
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v($m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 true, $m4is_6p2tyvq6paj43svrn7zqaykxzy);
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}

public function m4is_n97tyr9c04a6skw1wjcz0q8wm4mm5( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_5a5j87afkdrp948 = WC()->cart->get_cart();
$m4is_6p2tyvq6paj43svrn7zqaykxzy = empty( $m4is_5a5j87afkdrp948 );
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_6p2tyvq6paj43svrn7zqaykxzy );
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_gb01jqxh9ek2m, '', '' );
}

public function m4is_1tt1wdaa( array $m4is_xfhbc3s74rczsy43wvd5n090cb10wdf9, int $m4is_nctf6sc4v5npxn5der7ve5gs,
 array $args ) : array {
$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
foreach( $m4is_xfhbc3s74rczsy43wvd5n090cb10wdf9 as $m4is_j8j55t8dz79m7 =>
 $m4is_tz1rt7sbq40fade6e6rx ) {
if ( ! is_int( $m4is_tz1rt7sbq40fade6e6rx ) ) {
continue;
}
if ( ! $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_krs2avqy019m3mx( $m4is_tz1rt7sbq40fade6e6rx ) ) {
unset( $m4is_xfhbc3s74rczsy43wvd5n090cb10wdf9[$m4is_j8j55t8dz79m7] );

}
}
return array_values( $m4is_xfhbc3s74rczsy43wvd5n090cb10wdf9 );
}




public function m4is_x10ezzjak5ej4crvwnwxdem() {
echo m4is_an0pxqdph6ax26586c::m4is_72p0jfds0x560rsnferejr43('',
 ['display' => true]);
}




public function m4is_ays2t11tnh078rm9() : void {
if ( ! is_wc_endpoint_url( 'order-received' ) ) {
return;

}
$m4is_z331qzpscyepmkg = absint( get_query_var( 'order-received' ) );
if ( ! $m4is_z331qzpscyepmkg ) {
return;
}
$m4is_mqngqwpvn9gebshs3qkf54653qfdh9k = wc_get_order( $m4is_z331qzpscyepmkg );

if ( ! $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k ) {
return;
}
$m4is_xnr85v7h4qmw = $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k->get_status();

$valid_states = apply_filters( 'memberium/woocommerce/checkout/redirect/status', ['completed', 'processing', 'on-hold'] );
if ( ! in_array( $m4is_xnr85v7h4qmw,
 $valid_states, true ) ) {
return;
}
foreach ( $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k->get_items() as $m4is_s8cs5mdq57e5bgpqzd ) {

$m4is_nctf6sc4v5npxn5der7ve5gs = $m4is_s8cs5mdq57e5bgpqzd->get_product_id();

$m4is_pqecxfec342ksq5fzv1mg = get_post_meta( $m4is_nctf6sc4v5npxn5der7ve5gs, m4is_fe9nkjefxy9e1dw27me4hsqr::M4IS_N41BMKAA686MKBD11AB,
 true );
if ( ! empty( $m4is_pqecxfec342ksq5fzv1mg ) && is_string( $m4is_pqecxfec342ksq5fzv1mg ) ) {
wp_safe_redirect( esc_url_raw( $m4is_pqecxfec342ksq5fzv1mg ),
 302, 'Memberium WooCommerce Purchase Redirect' );
exit;
}
}
}

}