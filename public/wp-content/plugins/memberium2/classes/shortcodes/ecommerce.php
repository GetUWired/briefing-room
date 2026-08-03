<?php
/**
 * Proprietary Software - All Rights Reserved
 *
 * This file is part of the Memberium plugin, which is proprietary software developed by Web Power and Light.
 * Unauthorized copying, distribution, or modification of this file, via any medium, is strictly prohibited.
 *
 * Copyright (c) 2012-2024 David J Bullock
 * Web Power and Light
 *
 * For licensing information, please contact Web Power and Light.
 */


class_exists( 'm4is_6y9612z4hjd6fzpap4r5n853641m1jc' ) || die();


final class m4is_v9dtrdvnt {





private static $m4is_132xe588j;
private static $m4is_v4beyw7zqhr3;
private static $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

private static $m4is_wsme5a297xh0v6d5y;
private static $m4is_zz74kb50;
private static $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;

public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');
self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();
self::$m4is_zz74kb50 = ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y();

self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'memberium';
m4is_9d8n6yra072mpxd0pczne9::m4is_67nqhgcsb0p43k96hkt933aagr1c7c6();
}

public static function m4is_4ptt6h8f4mg8nmxve68xmj( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
static $m4is_v6617bzgzgm = false;
$m4is_n7x0afpz = [
'backcharge' => 'yes',
'button_id' => 'memberium-add-payment-method-submit',

'button_style' => '',
'button_text' => 'Add Card',
'debug' => 'no',
'default' => 'yes',
'logging' => 'no',
'plan_ids' => '',
'redirect' =>
 $_SERVER['REQUEST_URI'],
'failure' => $_SERVER['REQUEST_URI'],
'tag_id' => 0,
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_csx0y36xw = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'],
 false );
if ( $m4is_v6617bzgzgm ) {
if ( $m4is_csx0y36xw ) {
return '<p><strong style="color:red">Debug Notice:</strong>  This shortcode can only be used once per page.</p>';

}
return '';
}
$m4is_v6617bzgzgm = true;
if ( ! self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
if ( current_user_can( 'manage_options' ) ) {
return '<p><strong style="color:red">Admin Notice:</strong>  This shortcode does not work for admins.  Please login as a site member.</p>';

}
if ( $m4is_csx0y36xw ) {
return '<p><strong style="color:red">Debug Notice:</strong>  This shortcode requires the current user to be linked to a Keap contact.</p>';

}
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_eam4px02j6ytpsfyyqbfv6tbkn1 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text'] );
$m4is_9sayev0ehq7xweqyww3h = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_id'];

$m4is_cxdx7x8re4k5q0cm = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_style'];
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();
$m4is_gv7vjyv2c6g3nepw6 = base64_encode( serialize( [
'contact_id' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,

'backcharge' => m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['backcharge'], true ),

'default' => m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'], true ),
'logging' =>
 m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['logging'], false ),
'debug' => m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'],
 false ),
'plan_ids' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['plan_ids'],
'redirect' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['redirect'],

'failure' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure'],
'tag_id' => (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id'],
] ) );

$m4is_h5wkmjw3927vvx1fsrxccrsn = m4is_kkk64g440mhf2xhxafr::m4is_p98shwjcpf( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf( $m4is_gv7vjyv2c6g3nepw6 );

$m4is_vmhtx2ecrnzjpy = wp_nonce_field( 'add_paymentmethod_' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, '_wpnonce', true, false);
$m4is_etkj58qbr8aemc5p6xkgx51v70bjbm = esc_attr( $m4is_9sayev0ehq7xweqyww3h );

$m4is_bx6ke7417k92 = esc_html( $m4is_eam4px02j6ytpsfyyqbfv6tbkn1 );
$m4is_gb01jqxh9ek2m = <<<HTMLCODE

			<div>
				<keap-payment-method id="keap-payment-method" key="{$m4is_h5wkmjw3927vvx1fsrxccrsn}"></keap-payment-method>
			</div>
			<form id="memb_update_creditcard" name="memb_update_creditcard" action="" method="POST">
				<input type="hidden" name="payment_method_id" id="paymentMethodId" value="0">
				<input type="hidden" name="creditcard_id" id="creditCardId" value="0">
				<input type="hidden" name="payment_message" id="paymentMessage" value="">
				<input type="hidden" name="payment_response" id="paymentResponse" value="">
				<input type="hidden" name="memb_form_type" value="memb_add_payment_method">
				<input type="hidden" name="parameters" value="{$m4is_gv7vjyv2c6g3nepw6}">
				<input type="hidden" name="signature" value="{$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn}">
				{$m4is_vmhtx2ecrnzjpy}
			</form>
			<button id="{$m4is_9sayev0ehq7xweqyww3h}" style="{$m4is_cxdx7x8re4k5q0cm}" onclick="submitKeapForm()">{$m4is_eam4px02j6ytpsfyyqbfv6tbkn1}</button>

			<script src="https://payments.keap.page/lib/payment-method-embed.js"></script>
			<script>
				function submitKeapForm() {
					document.querySelector("#keap-payment-method").submit();
				}

				window.addEventListener('message', ({ data }) => {
					if (data.success) {
						if (typeof data.paymentMethodId !== 'undefined') {
							document.getElementById('paymentMethodId').value = data.paymentMethodId;
						}
						if (typeof data.creditCardId !== 'undefined') {
							document.getElementById('creditCardId').value = data.creditCardId;
						}
						if (typeof data.message !== 'undefined') {
							document.getElementById('paymentMessage').value = data.message;
						}

						document.getElementById('paymentResponse').value = JSON.stringify(data, null, 2);
						document.getElementById('memb_update_creditcard').submit();


					} else {
						// Handle error
					}
				});
			</script>
		HTMLCODE;

return $m4is_gb01jqxh9ek2m;
}
public static function m4is_2ht4drck28gpw6wqckzha4ny8( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_n7x0afpz = [
'capture' =>
 '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
if ( ! self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_sns6r4z7z662q6ct9aqvw81ch29 = m4is_kkk64g440mhf2xhxafr::m4is_s7ym6t350bwzqesq3cmwmntrn7( $m4is_yfwwtft0q94j35s0f4a7acqhb );
$m4is_sackcdn2r19cv = 0;

if ( is_array( $m4is_sns6r4z7z662q6ct9aqvw81ch29 ) && count( $m4is_sns6r4z7z662q6ct9aqvw81ch29 ) > 0) {
$m4is_egm0frk4dhxzgq5rzry34q5v79t2 = strtotime( date( 'Y-m-d' ) );

$m4is_rpa6825s4fhmzmjjxpap05q92nf198x = strtotime( date( $m4is_sns6r4z7z662q6ct9aqvw81ch29['ExpirationYear'] . '-' . ($m4is_sns6r4z7z662q6ct9aqvw81ch29['ExpirationMonth'] + 1) . '-01' ) );

$m4is_sackcdn2r19cv = (int) ( ( $m4is_rpa6825s4fhmzmjjxpap05q92nf198x - $m4is_egm0frk4dhxzgq5rzry34q5v79t2 ) / 86400 );
$m4is_sackcdn2r19cv = $m4is_sackcdn2r19cv < 0 ? 0 : $m4is_sackcdn2r19cv;

}
$m4is_gb01jqxh9ek2m = $m4is_sackcdn2r19cv;
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_gb01jqxh9ek2m,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
}

public static function m4is_0507nh835370xnqnsw( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'txtfmt' => '',
'not' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] = ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] );

if (stripos($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, '_no_') ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] = true;
}
$m4is_6p2tyvq6paj43svrn7zqaykxzy = (bool) count( m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) );

if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = ! $m4is_6p2tyvq6paj43svrn7zqaykxzy;
}
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v($m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_6p2tyvq6paj43svrn7zqaykxzy);
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}
public static function m4is_6aj7y476( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'date_format' => '',
'default' => '',
'fields' => '',
'txtfmt' => '',
'separator' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if (! self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');

$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_sns6r4z7z662q6ct9aqvw81ch29 = m4is_kkk64g440mhf2xhxafr::m4is_s7ym6t350bwzqesq3cmwmntrn7( $m4is_yfwwtft0q94j35s0f4a7acqhb );
$m4is_sns6r4z7z662q6ct9aqvw81ch29 = array_change_key_case( $m4is_sns6r4z7z662q6ct9aqvw81ch29,
 CASE_LOWER);
$m4is_51addd34g1m0tcc2qg059mn = array_filter(array_map('strtolower', explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields']) ) );

$m4is_sb1cff4xx6ax7c = is_array( $m4is_51addd34g1m0tcc2qg059mn ) ? count( $m4is_51addd34g1m0tcc2qg059mn ) : 0;
$m4is_dpjeyyj7c259yxqtcmvm6 = 0;

$m4is_gb01jqxh9ek2m = '';
unset($m4is_yfwwtft0q94j35s0f4a7acqhb);

foreach ($m4is_51addd34g1m0tcc2qg059mn as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower(trim($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) );

if (isset($m4is_sns6r4z7z662q6ct9aqvw81ch29[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ) {
$m4is_map8tdmsvarsn03f1fhfytx61b4a = strtotime($m4is_sns6r4z7z662q6ct9aqvw81ch29[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]);

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'] == '' || $m4is_map8tdmsvarsn03f1fhfytx61b4a == 0) {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = $m4is_sns6r4z7z662q6ct9aqvw81ch29[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6];

}
else {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = date($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'], strtotime($m4is_sns6r4z7z662q6ct9aqvw81ch29[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) );

}
}
else {
$m4is_xgtgw8c7w25hk72ec5z99vqy7a = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'];
}
$m4is_gb01jqxh9ek2m .= $m4is_xgtgw8c7w25hk72ec5z99vqy7a;

if ($m4is_sb1cff4xx6ax7c > 1) {
$m4is_gb01jqxh9ek2m .= $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator'];
}
}
if ($m4is_sb1cff4xx6ax7c > 1 && strlen($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator']) > 0) {
$m4is_gb01jqxh9ek2m = substr($m4is_gb01jqxh9ek2m,
 0, -strlen($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator']) );
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}
public static function m4is_hv6bkj0ncvqdjx8zjpyc2w1tzw5a( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'days' => 0,
'debug' => false,
'subscription_ids' => '',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if (! self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['days'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['days'];
$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_sns6r4z7z662q6ct9aqvw81ch29 = m4is_kkk64g440mhf2xhxafr::m4is_s7ym6t350bwzqesq3cmwmntrn7( $m4is_yfwwtft0q94j35s0f4a7acqhb );
if (! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['subscription_ids']) ) {
}
else {
unset($m4is_yfwwtft0q94j35s0f4a7acqhb);

$m4is_sackcdn2r19cv = 0;
if ( is_array( $m4is_sns6r4z7z662q6ct9aqvw81ch29 ) && count( $m4is_sns6r4z7z662q6ct9aqvw81ch29 ) > 0 ) {
$m4is_egm0frk4dhxzgq5rzry34q5v79t2 = strtotime(date('Y-m-d') );

$m4is_rpa6825s4fhmzmjjxpap05q92nf198x = strtotime(date($m4is_sns6r4z7z662q6ct9aqvw81ch29['ExpirationYear'] . '-' . $m4is_sns6r4z7z662q6ct9aqvw81ch29['ExpirationMonth'] . '-28') );

$m4is_sackcdn2r19cv = (int) ( ($m4is_rpa6825s4fhmzmjjxpap05q92nf198x - $m4is_egm0frk4dhxzgq5rzry34q5v79t2) / 86400);
if ($m4is_sackcdn2r19cv < 0) {
$m4is_sackcdn2r19cv = 0;

}
}
$m4is_1we1qc8rdsrfq = (boolean) ($m4is_sackcdn2r19cv < $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['days']);
}
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v($m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true, $m4is_1we1qc8rdsrfq);
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'] > '') {
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_r85ch2nyjadv4rt71w7ns($m4is_gb01jqxh9ek2m,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt']);
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] > '') {
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_r631mq3vpgnpxhcrsqr414rtx1x($m4is_gb01jqxh9ek2m,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}

foreach($m4is_sns6r4z7z662q6ct9aqvw81ch29 as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_gb01jqxh9ek2m = str_ireplace('%%' . $m4is_j8j55t8dz79m7 . '%%',
 $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_gb01jqxh9ek2m);
}
$m4is_gb01jqxh9ek2m = str_ireplace('%%days_left%%', $m4is_sackcdn2r19cv, $m4is_gb01jqxh9ek2m);

return do_shortcode($m4is_gb01jqxh9ek2m);
}
public static function m4is_s8z91pgatt7jmc( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'button_text' => 'Pay Now',
'date_format' => 'M d, Y',
'active' => TRUE,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if (! self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

$m4is_svv1jt6mc = 0;
$m4is_gb01jqxh9ek2m = '';
$m4is_qc36n7jdf = '';
if (trim($m4is_bsamg3fezf) == '') {
$m4is_bsamg3fezf .= '<tr>';

$m4is_bsamg3fezf .= '<td>%%card.type%%</td>';
$m4is_bsamg3fezf .= '<td>xxxxxxxxxxxx%%card.last4%%</td>';
$m4is_bsamg3fezf .= '<td>%%card.month.dropdown%% / ';

$m4is_bsamg3fezf .= '%%card.year.dropdown%%</td>';

$m4is_bsamg3fezf .= '</tr>';
}
if (is_array($m4is_yfwwtft0q94j35s0f4a7acqhb) ) {
foreach ($m4is_yfwwtft0q94j35s0f4a7acqhb as $m4is_sns6r4z7z662q6ct9aqvw81ch29) {
$m4is_r53562w9befcb2kh7rm4p7n5 = base64_encode(serialize(['creditcard_id' =>
 (int) $m4is_sns6r4z7z662q6ct9aqvw81ch29['Id'],] ) );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_r53562w9befcb2kh7rm4p7n5);

$m4is_svv1jt6mc++;
$m4is_gb01jqxh9ek2m .= '<form method="post" action="">';
$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"memb_form_type\" value=\"memb_list_creditcards_form\">";

$m4is_gb01jqxh9ek2m .= '<input type="hidden" name="parameters" value="' . $m4is_r53562w9befcb2kh7rm4p7n5 . '">';
$m4is_gb01jqxh9ek2m .= '<input type="hidden" name="signature" value="' . $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn . '">';

$m4is_gb01jqxh9ek2m .= '<input type="hidden" name="Id" value="' . $m4is_sns6r4z7z662q6ct9aqvw81ch29['Id'] . '">';
if ($m4is_svv1jt6mc % 2) {
$m4is_3mb2qvs8exjdhye4sqgb2t3 = 'odd';

}
else {
$m4is_3mb2qvs8exjdhye4sqgb2t3 = 'even';
}
$m4is_fw0mh47mk65jyz9 = '<select name="ExpirationMonth">';
for ($m4is_5vcwef7pymrfb3zawe = 1;
 $m4is_5vcwef7pymrfb3zawe < 13; $m4is_5vcwef7pymrfb3zawe++ ) {
$m4is_x79qvw6jk415stxeg5shqb = str_pad($m4is_5vcwef7pymrfb3zawe, 2, '0',
 STR_PAD_LEFT);
$m4is_fw0mh47mk65jyz9 .= '<option value ="' . $m4is_x79qvw6jk415stxeg5shqb . '" ' . ($m4is_x79qvw6jk415stxeg5shqb == $m4is_sns6r4z7z662q6ct9aqvw81ch29['ExpirationMonth'] ? ' selected="selected" ' : '') . '>' . $m4is_x79qvw6jk415stxeg5shqb . '</option>';

}
$m4is_fw0mh47mk65jyz9 .= '</select>';
$m4is_yxt5tmb8mrshqdx4k9yc = '<select name="ExpirationYear">';
for ($m4is_5vcwef7pymrfb3zawe = date('Y');
 $m4is_5vcwef7pymrfb3zawe < (date('Y') + 10); $m4is_5vcwef7pymrfb3zawe++ ) {
$m4is_yxt5tmb8mrshqdx4k9yc .= '<option value ="' . $m4is_5vcwef7pymrfb3zawe . '" ' . ($m4is_5vcwef7pymrfb3zawe == $m4is_sns6r4z7z662q6ct9aqvw81ch29['ExpirationYear'] ? ' selected="selected" ' : '') . '>' . $m4is_5vcwef7pymrfb3zawe . '</option>';

}
$m4is_yxt5tmb8mrshqdx4k9yc .= '</select>';
$m4is_9m6d05g0zgqk2am9yjj = '<input type="submit" value="Delete" class="deletebutton">';

$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%card.id%%', $m4is_sns6r4z7z662q6ct9aqvw81ch29['Id'], $m4is_bsamg3fezf);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%card.type%%',
 $m4is_sns6r4z7z662q6ct9aqvw81ch29['CardType'], $m4is_bsamg3fezf);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%card.last4%%',
 $m4is_sns6r4z7z662q6ct9aqvw81ch29['Last4'], $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%card.year%%',
 $m4is_sns6r4z7z662q6ct9aqvw81ch29['ExpirationYear'], $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%card.month%%',
 $m4is_sns6r4z7z662q6ct9aqvw81ch29['ExpirationMonth'], $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%card.month.dropdown%%',
 $m4is_fw0mh47mk65jyz9, $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%card.year.dropdown%%',
 $m4is_yxt5tmb8mrshqdx4k9yc, $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%card.id%%', $m4is_sns6r4z7z662q6ct9aqvw81ch29['Id'],
 $m4is_r2g10s87x43pdk8y5cq9hw801g);

$m4is_gb01jqxh9ek2m .= $m4is_r2g10s87x43pdk8y5cq9hw801g;
$m4is_gb01jqxh9ek2m .= '</form>';
}
}
return $m4is_gb01jqxh9ek2m;

}

public static function m4is_n1j0fg1ffzrhwzn57rmvh0b9( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
static $m4is_pae00hv11 = 0;
$m4is_pae00hv11++;
$m4is_n7x0afpz = [
'action_ids' => '',
'addonly' => 'no',
'backcharge' => 'no',
'cardtypes' =>
 'American Express,Discover,MasterCard,Visa',
'debug' => false,
'debug_ip' => '',
'failureurl' => $_SERVER['REQUEST_URI'],
'goals' =>
 '',
'ignoressl' => 'no',
'plan_ids' => '',
'set_default' => 'yes',
'success_msg' => 'Your credit card was successfully updated.',
'successurl' =>
 $_SERVER['REQUEST_URI'],
'tag_ids' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if (! is_ssl() ) {
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return '<p>Credit Card Update Form Disabled Due to Missing SSL.</p>';

}
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['addonly'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['addonly'],
 false);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['backcharge'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['backcharge'],
 true);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'],
 false);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['ignoressl'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['ignoressl'],
 false);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['set_default'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['set_default'],
 true);
if (! self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
if ( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp == 0) {
return '';

}
if ( (! is_ssl() ) && (! $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['ignoressl']) ) {
return '';
}
}
$m4is_7znqjnkvvbzyjs = 'memb_addupdate_creditcard-' . $m4is_pae00hv11;

$m4is_eam4px02j6ytpsfyyqbfv6tbkn1 = 'Add Card';
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['cardtypes'] = array_filter(explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['cardtypes']) );

$m4is_sns6r4z7z662q6ct9aqvw81ch29['Id'] = 0;
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['addonly'] == false) {

$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_sns6r4z7z662q6ct9aqvw81ch29 = end( $m4is_yfwwtft0q94j35s0f4a7acqhb );
$m4is_sns6r4z7z662q6ct9aqvw81ch29 = is_array( $m4is_sns6r4z7z662q6ct9aqvw81ch29 ) ? $m4is_sns6r4z7z662q6ct9aqvw81ch29 : [];

$m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb = [
'BillAddress1',
'BillAddress2',
'BillCity',
'BillCountry',
'BillState',
'BillZip',
'CardType',

'ExpirationMonth',
'ExpirationYear',
'FirstName',
'Id',
'Last4',
'LastName',
'NameOnCard',
'PhoneNumber',
];
foreach ( $m4is_8fs526z47cpkkwaagzy9b0x1gwxqfyxb as $m4is_j8j55t8dz79m7 ) {
if ( empty( $m4is_sns6r4z7z662q6ct9aqvw81ch29[$m4is_j8j55t8dz79m7] ) ) {
$m4is_sns6r4z7z662q6ct9aqvw81ch29[$m4is_j8j55t8dz79m7] = '';

}
}
}
$m4is_3pnan1s12dw = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(), 'keap',
 'contact' );
if ($m4is_sns6r4z7z662q6ct9aqvw81ch29['Id'] > 0) {

$m4is_wtqm5h9z3 = $m4is_sns6r4z7z662q6ct9aqvw81ch29['Id'];
$m4is_agsjda7vv3vhz4tdj9t5x = $m4is_sns6r4z7z662q6ct9aqvw81ch29['FirstName'];

$m4is_m3dfb1j8q10r3d88ydma6 = $m4is_sns6r4z7z662q6ct9aqvw81ch29['LastName'];
$m4is_r2qw9hg065hrwf890zx6rr3tg2zbrft = '************' . $m4is_sns6r4z7z662q6ct9aqvw81ch29['Last4'];

$m4is_yqqpbpa1t25m9wgepmxf8w78 = $m4is_sns6r4z7z662q6ct9aqvw81ch29['CardType'];
$m4is_fd984zfcf5qxhh57mc7sehvjve4 = $m4is_sns6r4z7z662q6ct9aqvw81ch29['ExpirationMonth'];

$m4is_aeq74vwhxt43418e0byfk8fthmbh = $m4is_sns6r4z7z662q6ct9aqvw81ch29['ExpirationYear'];
$m4is_ac2ams1gng1gjmp3jak8erjshx1kp = trim($m4is_sns6r4z7z662q6ct9aqvw81ch29['NameOnCard']);

$m4is_6kfrayws = $m4is_sns6r4z7z662q6ct9aqvw81ch29['PhoneNumber'];
$m4is_dv1p3e66f1n1rx59g = $m4is_sns6r4z7z662q6ct9aqvw81ch29['BillAddress1'];

$m4is_cat9sz1q4y = $m4is_sns6r4z7z662q6ct9aqvw81ch29['BillAddress2'];
$m4is_sw13230cmwvsq0 = $m4is_sns6r4z7z662q6ct9aqvw81ch29['BillCity'];

$m4is_xnr85v7h4qmw = $m4is_sns6r4z7z662q6ct9aqvw81ch29['BillState'];
$m4is_r8pkh6ej4q = $m4is_sns6r4z7z662q6ct9aqvw81ch29['BillCountry'];

$m4is_ke7er68rkrw7zz6krgkwy8 = $m4is_sns6r4z7z662q6ct9aqvw81ch29['BillZip'];
$m4is_r57cybksh3k7f7qx07qzq = isset($m4is_sns6r4z7z662q6ct9aqvw81ch29['CVV2']) ? (string) $m4is_sns6r4z7z662q6ct9aqvw81ch29['CVV2'] : '';

$m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp = 'update';
$m4is_af7jcqj9e7w = ' disabled ';
}
else {

$m4is_wtqm5h9z3 = 0;
$m4is_agsjda7vv3vhz4tdj9t5x = $m4is_3pnan1s12dw['firstname'] ?? '';

$m4is_m3dfb1j8q10r3d88ydma6 = $m4is_3pnan1s12dw['lastname'] ?? '';
$m4is_r2qw9hg065hrwf890zx6rr3tg2zbrft = '';
$m4is_yqqpbpa1t25m9wgepmxf8w78 = '';

$m4is_fd984zfcf5qxhh57mc7sehvjve4 = '';
$m4is_aeq74vwhxt43418e0byfk8fthmbh = '';
$m4is_ac2ams1gng1gjmp3jak8erjshx1kp = trim( $m4is_agsjda7vv3vhz4tdj9t5x . ' ' . $m4is_m3dfb1j8q10r3d88ydma6 );

$m4is_6kfrayws = $m4is_3pnan1s12dw['phone1'] ?? '';
$m4is_dv1p3e66f1n1rx59g = $m4is_3pnan1s12dw['streetaddress1'] ?? '';
$m4is_cat9sz1q4y = $m4is_3pnan1s12dw['streetaddress2'] ?? '';

$m4is_sw13230cmwvsq0 = $m4is_3pnan1s12dw['city'] ?? '';
$m4is_xnr85v7h4qmw = $m4is_3pnan1s12dw['state'] ?? '';
$m4is_r8pkh6ej4q = $m4is_3pnan1s12dw['country'] ?? '';

$m4is_ke7er68rkrw7zz6krgkwy8 = $m4is_3pnan1s12dw['postalcode'] ?? '';
$m4is_r57cybksh3k7f7qx07qzq = '';
$m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp = 'add';

$m4is_af7jcqj9e7w = ' ';
}
if (empty($m4is_sns6r4z7z662q6ct9aqvw81ch29['NameOnCard']) ) {
$m4is_sns6r4z7z662q6ct9aqvw81ch29['NameOnCard'] = $m4is_agsjda7vv3vhz4tdj9t5x . ' ' . $m4is_m3dfb1j8q10r3d88ydma6;

$m4is_ac2ams1gng1gjmp3jak8erjshx1kp = trim($m4is_sns6r4z7z662q6ct9aqvw81ch29['NameOnCard' ]);
}
$m4is_r53562w9befcb2kh7rm4p7n5 = base64_encode(serialize([
'action_ids' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['action_ids'],
'backcharge' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['backcharge'],
'contact_id' =>
 self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'creditcard_id' => $m4is_wtqm5h9z3,
'debug' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'],

'debug_ip' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug_ip'],
'failureurl' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failureurl'],

'goals' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['goals'],
'plan_ids' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['plan_ids'],
'set_default' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['set_default'],
'success_msg' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_msg'],
'successurl' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['successurl'],
'tag_ids' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_ids'],
]) );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_r53562w9befcb2kh7rm4p7n5);

$m4is_d60kn1d3yvprp62rs332 = new stdClass;
$m4is_d60kn1d3yvprp62rs332->form_name = $m4is_7znqjnkvvbzyjs;
$m4is_d60kn1d3yvprp62rs332->form_id = $m4is_pae00hv11;

$m4is_d60kn1d3yvprp62rs332->parameters = $m4is_r53562w9befcb2kh7rm4p7n5;
$m4is_d60kn1d3yvprp62rs332->signature = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_r53562w9befcb2kh7rm4p7n5);

$m4is_d60kn1d3yvprp62rs332->nonce = wp_nonce_field('creditcard_add_' . $m4is_pae00hv11, '_wpnonce', true, false);
$m4is_d60kn1d3yvprp62rs332->card_types = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['cardtypes'];

$m4is_d60kn1d3yvprp62rs332->creditcard_type = $m4is_yqqpbpa1t25m9wgepmxf8w78;
$m4is_d60kn1d3yvprp62rs332->card_number = $m4is_r2qw9hg065hrwf890zx6rr3tg2zbrft;

$m4is_d60kn1d3yvprp62rs332->disabled = $m4is_af7jcqj9e7w;
$m4is_d60kn1d3yvprp62rs332->expiration_month = $m4is_fd984zfcf5qxhh57mc7sehvjve4;

$m4is_d60kn1d3yvprp62rs332->expiration_year = $m4is_aeq74vwhxt43418e0byfk8fthmbh;
$m4is_d60kn1d3yvprp62rs332->name_on_card = $m4is_ac2ams1gng1gjmp3jak8erjshx1kp;

$m4is_d60kn1d3yvprp62rs332->phone1 = $m4is_6kfrayws;
$m4is_d60kn1d3yvprp62rs332->address1 = $m4is_dv1p3e66f1n1rx59g;
$m4is_d60kn1d3yvprp62rs332->address2 = $m4is_cat9sz1q4y;

$m4is_d60kn1d3yvprp62rs332->city = $m4is_sw13230cmwvsq0;
$m4is_d60kn1d3yvprp62rs332->postalcode = $m4is_ke7er68rkrw7zz6krgkwy8;
$m4is_d60kn1d3yvprp62rs332->state = $m4is_xnr85v7h4qmw;

$m4is_d60kn1d3yvprp62rs332->country = $m4is_r8pkh6ej4q;
$m4is_d60kn1d3yvprp62rs332->country_options_html = self::$m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->getCountryOptions( $m4is_d60kn1d3yvprp62rs332->country );

$m4is_d60kn1d3yvprp62rs332->country_options = [];
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_vbq3wn8s( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_d60kn1d3yvprp62rs332 );
}



public static function m4is_x88xw10b3ak25rx( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_n7x0afpz = [
'after' =>
 '',
'before' => '',
'capture' => '',
'default' => '',
'fields' => '',
'htmlattr' => '',
'id' => 0,
'separator' => ' ',
'txtfmt' =>
 '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'];
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields']) || $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] < 1) {
return '';

}
$m4is_51addd34g1m0tcc2qg059mn = array_filter(explode(',', strtolower($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields']) ) );
$m4is_sb1cff4xx6ax7c = is_array( $m4is_51addd34g1m0tcc2qg059mn ) ? count( $m4is_51addd34g1m0tcc2qg059mn ) : 0;

$m4is_m3h9r6vhs5rt8w41pn284phf = m4is_bbwjksaqsay3yt68xq9afn::m4is_tyze2y8y8kr62pn3hny9($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'],
 true);
$m4is_gb01jqxh9ek2m = '';
foreach ($m4is_51addd34g1m0tcc2qg059mn as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = trim($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6);

$fieldvalue = isset($m4is_m3h9r6vhs5rt8w41pn284phf[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ? $m4is_m3h9r6vhs5rt8w41pn284phf[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'];

if ($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 == 'productprice') {
$fieldvalue = number_format( (double) $fieldvalue, 2);
}
elseif ($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 == 'image.url') {
$fieldvalue = 'https://' . self::$m4is_v4beyw7zqhr3 . '.infusionsoft.com/cart/pimg.jsp?i=5&t=p&s=x&date=' . time();

}
$m4is_gb01jqxh9ek2m .= $fieldvalue;
if ($m4is_sb1cff4xx6ax7c > 1) {
$m4is_gb01jqxh9ek2m .= $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator'];

}
}
if ($m4is_sb1cff4xx6ax7c > 1 && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator']) {
$m4is_gb01jqxh9ek2m = substr($m4is_gb01jqxh9ek2m,
 0, -strlen($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator']) );
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}
public static function m4is_qqngjbmd6nagb( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_n7x0afpz = [
'capture' =>
 '',
'default' => '',
'fields' => '',
'id' => 0,
'separator' => ' ',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys($m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'];
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields'] = '' || $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] < 1) {
return '';

}
$m4is_51addd34g1m0tcc2qg059mn = array_filter(explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fields']) );
$m4is_sb1cff4xx6ax7c = is_array( $m4is_51addd34g1m0tcc2qg059mn ) ? count($m4is_51addd34g1m0tcc2qg059mn) : 0;

$subscriptionplan = self::$m4is_132xe588j->m4is_nna76543($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'], TRUE);
$m4is_gb01jqxh9ek2m = '';

foreach ($m4is_51addd34g1m0tcc2qg059mn as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower(trim($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) );

$fieldvalue = isset($subscriptionplan[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ? $subscriptionplan[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'];

if (in_array($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, ['planprice', 'preauthorizeamount']) ) {
$fieldvalue = number_format( (double) $fieldvalue,
 2);
}
$m4is_gb01jqxh9ek2m .= $fieldvalue;
if ($m4is_sb1cff4xx6ax7c > 1) {
$m4is_gb01jqxh9ek2m .= $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator'];

}
}
$m4is_gb01jqxh9ek2m = substr($m4is_gb01jqxh9ek2m, 0, -strlen($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['separator']) );
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}



public static function m4is_ksjdsasr7febdz5xhsx38cxn($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
if ( self::$m4is_zz74kb50 ) {
return '';
}



$m4is_n7x0afpz = [
'invoice_id' =>
 isset($_GET['invoice_id']) ? (int) $_GET['invoice_id'] : 0,
'contact_id' => self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v(),
'date_format' =>
 'F j, Y',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_gb01jqxh9ek2m = '';
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_g61yzqs7ecta0xztr70d7v = [
'invoice_id' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['invoice_id'],
'contact_id' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'],
];
$m4is_q4yx8vdc = self::$m4is_132xe588j->m4is_zmsw66xd( $m4is_g61yzqs7ecta0xztr70d7v );

if (is_array($m4is_q4yx8vdc) ) {
$m4is_2cd8c9pt9 = get_option('memberium_invoice_template', false);
$m4is_gb01jqxh9ek2m .= '<div class="memberium-order-receipt">';

if (! empty($m4is_2cd8c9pt9['header']) ) {
$m4is_gb01jqxh9ek2m .= $m4is_2cd8c9pt9['header'];
}
if (isset($m4is_q4yx8vdc['orderitems']) && is_array($m4is_q4yx8vdc['orderitems']) ) {
foreach($m4is_q4yx8vdc['orderitems'] as $m4is_s8cs5mdq57e5bgpqzd) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = $m4is_2cd8c9pt9['items'];

$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%item.cpu%%', number_format($m4is_s8cs5mdq57e5bgpqzd['cpu'], 2), $m4is_r2g10s87x43pdk8y5cq9hw801g);

$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%item.ppu%%', number_format($m4is_s8cs5mdq57e5bgpqzd['ppu'], 2), $m4is_r2g10s87x43pdk8y5cq9hw801g);

foreach($m4is_s8cs5mdq57e5bgpqzd as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%item.' . $m4is_j8j55t8dz79m7 . '%%',
 $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_r2g10s87x43pdk8y5cq9hw801g);
}
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%receipt.subtotal%%',
 number_format($m4is_s8cs5mdq57e5bgpqzd['ppu'] * $m4is_s8cs5mdq57e5bgpqzd['qty'], 2), $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_gb01jqxh9ek2m .= $m4is_r2g10s87x43pdk8y5cq9hw801g;

}
}
$m4is_gb01jqxh9ek2m .= $m4is_2cd8c9pt9['pre_payments'];
foreach($m4is_q4yx8vdc['payments'] as $m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = $m4is_2cd8c9pt9['payments'];

$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%payment.paydate%%', date($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'], strtotime($m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z['paydate']) ),
 $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%payment.payamt%%', number_format($m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z['payamt'],
 2), $m4is_r2g10s87x43pdk8y5cq9hw801g);
foreach($m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%payment.' . $m4is_j8j55t8dz79m7 . '%%',
 $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_r2g10s87x43pdk8y5cq9hw801g);
}
$m4is_gb01jqxh9ek2m .= $m4is_r2g10s87x43pdk8y5cq9hw801g;
}
$m4is_gb01jqxh9ek2m .= $m4is_2cd8c9pt9['pre_scheduled'];


foreach($m4is_q4yx8vdc['paymentplanitems'] as $m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = $m4is_2cd8c9pt9['scheduled'];

$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%scheduled.datedue%%', date($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'],
 strtotime($m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z['datedue']) ), $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%scheduled.amtdue%%',
 number_format($m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z['amtdue'], 2), $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%scheduled.amtpaid%%',
 number_format($m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z['amtpaid'], 2), $m4is_r2g10s87x43pdk8y5cq9hw801g);
foreach($m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%scheduled.' . $m4is_j8j55t8dz79m7 . '%%', $m4is_rqxytszfq5v6syth1csqqxvy5,
 $m4is_r2g10s87x43pdk8y5cq9hw801g);
}
$m4is_gb01jqxh9ek2m .= $m4is_r2g10s87x43pdk8y5cq9hw801g;
}
$m4is_gb01jqxh9ek2m .= $m4is_2cd8c9pt9['footer'];

$m4is_gb01jqxh9ek2m .= '</div>';
if (! empty($m4is_q4yx8vdc['job']) ) {
$m4is_gb01jqxh9ek2m = str_ireplace('%%order.datecreated%%',
 date($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'], strtotime($m4is_q4yx8vdc['job']['datecreated']) ), $m4is_gb01jqxh9ek2m);

$m4is_gb01jqxh9ek2m = str_ireplace('%%order.duedate%%', date($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'], strtotime($m4is_q4yx8vdc['job']['duedate']) ),
 $m4is_gb01jqxh9ek2m);
}
if (! empty($m4is_q4yx8vdc['invoice']) ) {
$m4is_gb01jqxh9ek2m = str_ireplace('%%invoice.datecreated%%', date($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'],
 strtotime($m4is_q4yx8vdc['invoice']['datecreated']) ), $m4is_gb01jqxh9ek2m);
$m4is_gb01jqxh9ek2m = str_ireplace('%%invoice.overdue%%',
 number_format($m4is_q4yx8vdc['invoice']['totaldue'] - $m4is_q4yx8vdc['invoice']['totalpaid'], 2), $m4is_gb01jqxh9ek2m);
$m4is_gb01jqxh9ek2m = str_ireplace('%%invoice.invoicetotal%%',
 number_format($m4is_q4yx8vdc['invoice']['invoicetotal'], 2), $m4is_gb01jqxh9ek2m);
$m4is_gb01jqxh9ek2m = str_ireplace('%%invoice.totalpaid%%',
 number_format($m4is_q4yx8vdc['invoice']['totalpaid'], 2), $m4is_gb01jqxh9ek2m);
}
if (is_array($m4is_q4yx8vdc['invoice']) ) {
foreach($m4is_q4yx8vdc['invoice'] as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_gb01jqxh9ek2m = str_ireplace('%%invoice.' . $m4is_j8j55t8dz79m7 . '%%', $m4is_rqxytszfq5v6syth1csqqxvy5,
 $m4is_gb01jqxh9ek2m);
}
}
if (is_array($m4is_q4yx8vdc['contact']) ) {
foreach($m4is_q4yx8vdc['contact'] as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_gb01jqxh9ek2m = str_ireplace('%%contact.' . $m4is_j8j55t8dz79m7 . '%%',
 $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_gb01jqxh9ek2m);
}
}
if (isset($m4is_q4yx8vdc['job']) && is_array($m4is_q4yx8vdc['job']) ) {
foreach($m4is_q4yx8vdc['job'] as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_gb01jqxh9ek2m = str_ireplace('%%order.' . $m4is_j8j55t8dz79m7 . '%%', $m4is_rqxytszfq5v6syth1csqqxvy5,
 $m4is_gb01jqxh9ek2m);
}
}
$m4is_gb01jqxh9ek2m = apply_filters('memberium_show_receipt', $m4is_gb01jqxh9ek2m, $m4is_q4yx8vdc);

$m4is_gb01jqxh9ek2m = preg_replace('/(%%\S+%%)/',
 '', $m4is_gb01jqxh9ek2m);
}
return do_shortcode($m4is_gb01jqxh9ek2m);
}



public static function m4is_fjz43xd0rdea3( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
if ( self::$m4is_zz74kb50 ) {
return '';
}
global $wpdb;
$m4is_n7x0afpz = [
'after' =>
 '',
'before' => '',
'capture' => false,
'contact_id' => self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'days' => 0,
'htmlattr' => '',

'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_vzw2863wcxj06yqbv0 = '0.00';
if (! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'])) {
$m4is_5rbenkpt1v7xby2cknbs7 = 'SELECT sum(`totalpaid`) FROM %i WHERE `appname` = %s `contactid` = %d AND `payplanstatus` = 1 AND `paystatus` = 1; ';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, m4is_bbwjksaqsay3yt68xq9afn::m4is_syjrxw7rw3s(), self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname'),
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id']);
$m4is_vzw2863wcxj06yqbv0 = $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false,
 $m4is_vzw2863wcxj06yqbv0, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}

public static function m4is_e1bwsd83fjvqy(?array $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'button_text' => 'Pay Now',
'contact_id' => self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'date_format' => 'M d, Y',

'form_class' => 'invoiceline',
'goal' => '',
'limit' => 0,
'merchant_id' => self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'merchant_account_id' ),
'nocost' => true,
'only_prodids' => '',
'paid' => true,
'post' => '',
'pre' => '',
'redirect_url' => $_SERVER['REQUEST_URI'],

'reverse' => false,
'success_msg' => 'Your payment was successfully processed.',
'tag_id' => '',
'unpaid' => true,

];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
if ( is_feed() || ! is_singular() ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
if ( ! $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] ) {
return '';

}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['nocost'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['nocost'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['paid'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['paid'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['reverse'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['reverse'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['unpaid'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['unpaid'],
 false );
if (trim($m4is_bsamg3fezf) == '') {
$m4is_bsamg3fezf .= '<div><span>%%invoice.id%%</span>';
$m4is_bsamg3fezf .= '<span>%%description%%</span>';

$m4is_bsamg3fezf .= '<span>$%%invoice.total%%</span>';
$m4is_bsamg3fezf .= '<span>$%%total.paid%%</span>';
$m4is_bsamg3fezf .= '<span>$%%refund.status%%</span>';

$m4is_bsamg3fezf .= '<span>$%%amount.due%%</span>';
$m4is_bsamg3fezf .= '<span>%%date.due%%</span>';
$m4is_bsamg3fezf .= '<span>%%creditcard.dropdown%%</span>';

$m4is_bsamg3fezf .= '<span>%%submit%%</span></div>';
}
$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3;
$m4is_6xj2zq4143f49mqz9p79f7brf3mv = m4is_bbwjksaqsay3yt68xq9afn::m4is_gh12fb5596s29bycerd7thz1x9dspt();

$m4is_qpzk7kkc6v2bhxchqns6f9m = self::$m4is_132xe588j->m4is_f51yh9x2x5zd1b7gtq0g( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['paid'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['unpaid'] );
$m4is_qpzk7kkc6v2bhxchqns6f9m = apply_filters( 'memberium/shortcodes/list_invoices/invoices',
 $m4is_qpzk7kkc6v2bhxchqns6f9m );
if (is_array($m4is_qpzk7kkc6v2bhxchqns6f9m) && ! $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['nocost']) {
foreach($m4is_qpzk7kkc6v2bhxchqns6f9m as $m4is_j8j55t8dz79m7 =>
 $m4is_hdseqgtp1yd3cjxf20r) {
if ($m4is_hdseqgtp1yd3cjxf20r['InvoiceTotal'] == 0) {
unset($m4is_qpzk7kkc6v2bhxchqns6f9m[$m4is_j8j55t8dz79m7]);

}
}
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['reverse']) {
$m4is_qpzk7kkc6v2bhxchqns6f9m = array_reverse($m4is_qpzk7kkc6v2bhxchqns6f9m,
 true);
}
$m4is_yfwwtft0q94j35s0f4a7acqhb = [];
$jobs = [];
if (! empty($m4is_qpzk7kkc6v2bhxchqns6f9m) ) {
$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id']);

}

if (empty($m4is_yfwwtft0q94j35s0f4a7acqhb) ) {
$m4is_ktk7t6gc2gjanyvytj5av0g61y5tsba = '';
}
else {
$m4is_ktk7t6gc2gjanyvytj5av0g61y5tsba = '<select name="creditcard_id">';

if (is_array($m4is_yfwwtft0q94j35s0f4a7acqhb) ) {
foreach ($m4is_yfwwtft0q94j35s0f4a7acqhb as $m4is_sns6r4z7z662q6ct9aqvw81ch29) {
$m4is_yrsthh0s4s62mfk9 = isset($m4is_sns6r4z7z662q6ct9aqvw81ch29['Status']) ? $m4is_sns6r4z7z662q6ct9aqvw81ch29['Status'] : 0;

if (in_array($m4is_sns6r4z7z662q6ct9aqvw81ch29['Status'], [1,3,4]) ) {
$m4is_dc7133bz2gdrxrqn0dv7wc6vfed6djbf = isset($m4is_sns6r4z7z662q6ct9aqvw81ch29['CardType']) ? $m4is_sns6r4z7z662q6ct9aqvw81ch29['CardType'] : 'Unknown';

$m4is_q5455q0ems5qfr4fs9a = isset($m4is_sns6r4z7z662q6ct9aqvw81ch29['Last4']) ? $m4is_sns6r4z7z662q6ct9aqvw81ch29['Last4'] : '';
$m4is_ktk7t6gc2gjanyvytj5av0g61y5tsba .= '<option value="'. $m4is_sns6r4z7z662q6ct9aqvw81ch29['Id'] . '">' . $m4is_dc7133bz2gdrxrqn0dv7wc6vfed6djbf . ' ' . $m4is_q5455q0ems5qfr4fs9a . '</option>';

}
}
}
$m4is_ktk7t6gc2gjanyvytj5av0g61y5tsba .= '</select>';
}
$m4is_enqksf9fj474g = [
0 => _x('No Credit', 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

1 => _x('Partial Credit Applied', 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
2 => _x('Full Credit Applied',
 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
];
$m4is_7w5s1q2fdhy2fna30eccbhc6x4m36f2g = [
0 => _x('Not Paid',
 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
1 => _x('Paid', 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

];
$m4is_tjzy6ajprpj65ctjtxdat = [
0 => _x('No Refund', 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
1 => _x('Partial Refund',
 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
2 => _x('Full Refund', 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),

3 => _x('Full Write-Off', 'memb_list_invoices', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
4 => _x('Partial Write-Off', 'memb_list_invoices',
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ),
];
$m4is_svv1jt6mc = 0;
$m4is_gb01jqxh9ek2m = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['pre'];

if ( is_array( $m4is_qpzk7kkc6v2bhxchqns6f9m ) ) {
if ( count( $m4is_qpzk7kkc6v2bhxchqns6f9m ) > $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['limit'] ) {
}
foreach ( $m4is_qpzk7kkc6v2bhxchqns6f9m as $m4is_hdseqgtp1yd3cjxf20r ) {

if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only_prodids'] > '' ) {
}
$m4is_3h2p59t1q80qzpcs = array_filter( explode( ',',
 $m4is_hdseqgtp1yd3cjxf20r['ProductSold'] ) );
$m4is_kfzk39gzwsqa963 = is_array( $m4is_3h2p59t1q80qzpcs) ? count( $m4is_3h2p59t1q80qzpcs ) : 0;

$m4is_8nwpdp06e4m5kp52z5r6xq81nsm = array_shift( $m4is_3h2p59t1q80qzpcs );
$m4is_mhqer64e8andnz6xera7n0j8 = $m4is_enqksf9fj474g[$m4is_hdseqgtp1yd3cjxf20r['CreditStatus']];

$m4is_vxqqg6q9qs4awtkh83dzds = $m4is_7w5s1q2fdhy2fna30eccbhc6x4m36f2g[$m4is_hdseqgtp1yd3cjxf20r['PayStatus']];
$m4is_vzpr3309v = $m4is_tjzy6ajprpj65ctjtxdat[$m4is_hdseqgtp1yd3cjxf20r['RefundStatus']];

$m4is_n7x0afpz = [
'goal' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['goal'],
'invoice_id' => (int) $m4is_hdseqgtp1yd3cjxf20r['Id'],
'merchant_id' =>
 (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['merchant_id'],
'redirect_url' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['redirect_url'],

'success_msg' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_msg'],
'tag_id' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id'],
];

$m4is_r53562w9befcb2kh7rm4p7n5 = base64_encode( serialize( $m4is_n7x0afpz ) );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf( $m4is_r53562w9befcb2kh7rm4p7n5 );


$m4is_svv1jt6mc++;
if ( $m4is_svv1jt6mc % 2 ) {
$m4is_3mb2qvs8exjdhye4sqgb2t3 = 'odd';
}
else {
$m4is_3mb2qvs8exjdhye4sqgb2t3 = 'even';

}

if ( in_array( trim( $m4is_hdseqgtp1yd3cjxf20r['Description']), ['One-time:', 'Order Form', 'API Order'] ) ) {
if ( isset( $m4is_6xj2zq4143f49mqz9p79f7brf3mv[$m4is_8nwpdp06e4m5kp52z5r6xq81nsm]['ProductName'] ) ) {
$m4is_hdseqgtp1yd3cjxf20r['Description'] = $m4is_6xj2zq4143f49mqz9p79f7brf3mv[$m4is_8nwpdp06e4m5kp52z5r6xq81nsm]['ProductName'];

if ( $m4is_kfzk39gzwsqa963 > 1 ) {
$m4is_hdseqgtp1yd3cjxf20r['Description'] .= sprintf( _x(', and %d other items.', 'memb_list_invoices',
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ), ( $m4is_kfzk39gzwsqa963 - 1 ) );
}
}
}
$m4is_r2g10s87x43pdk8y5cq9hw801g = '<form method="post" action="">';

$m4is_r2g10s87x43pdk8y5cq9hw801g .= wp_nonce_field( 'memb_payinvoice_' . $m4is_hdseqgtp1yd3cjxf20r['Id'], '_wpnonce', true, false );

$m4is_r2g10s87x43pdk8y5cq9hw801g .= '<input type="hidden" name="memb_form_type" value="memb_pay_invoice">';
$m4is_r2g10s87x43pdk8y5cq9hw801g .= '<input type="hidden" name="parameters" value="' . $m4is_r53562w9befcb2kh7rm4p7n5 . '">';

$m4is_r2g10s87x43pdk8y5cq9hw801g .= '<input type="hidden" name="signature" value="' . $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn . '">';
$m4is_r2g10s87x43pdk8y5cq9hw801g .= $m4is_bsamg3fezf;

$m4is_r2g10s87x43pdk8y5cq9hw801g .= '</form>';
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%credit.status%%', $m4is_mhqer64e8andnz6xera7n0j8,
 $m4is_r2g10s87x43pdk8y5cq9hw801g );
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%cycler%%', $m4is_3mb2qvs8exjdhye4sqgb2t3, $m4is_r2g10s87x43pdk8y5cq9hw801g );

$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%description%%', $m4is_hdseqgtp1yd3cjxf20r['Description'], $m4is_r2g10s87x43pdk8y5cq9hw801g );

$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%invoice.id%%', $m4is_hdseqgtp1yd3cjxf20r['Id'], $m4is_r2g10s87x43pdk8y5cq9hw801g );

$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%invoice.total%%', sprintf('%0.2f', $m4is_hdseqgtp1yd3cjxf20r['InvoiceTotal']),
 $m4is_r2g10s87x43pdk8y5cq9hw801g );
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%line%%', $m4is_svv1jt6mc, $m4is_r2g10s87x43pdk8y5cq9hw801g );

$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%pay.status%%', $m4is_vxqqg6q9qs4awtkh83dzds, $m4is_r2g10s87x43pdk8y5cq9hw801g );

$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%refund.status%%', $m4is_vzpr3309v, $m4is_r2g10s87x43pdk8y5cq9hw801g );
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%total.paid%%',
 sprintf('%0.2f', $m4is_hdseqgtp1yd3cjxf20r['TotalPaid']), $m4is_r2g10s87x43pdk8y5cq9hw801g );
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%date.created%%',
 date($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'], strtotime($m4is_hdseqgtp1yd3cjxf20r['DateCreated']) ), $m4is_r2g10s87x43pdk8y5cq9hw801g );

if ( ! empty( $m4is_hdseqgtp1yd3cjxf20r['!payment_due'] ) ) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%amount.due%%', sprintf( '%0.2f',
 $m4is_hdseqgtp1yd3cjxf20r['!payment_due'] ), $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%date.due%%',
 'Past Due', $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%creditcard.dropdown%%', $m4is_ktk7t6gc2gjanyvytj5av0g61y5tsba,
 $m4is_r2g10s87x43pdk8y5cq9hw801g);
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['merchant_id'] > 0 && ( ! empty( $m4is_yfwwtft0q94j35s0f4a7acqhb ) ) ) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace( '%%submit%%',
 '<input type="submit" class="memb_invoice_payment_button" value="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text'] . '">', $m4is_r2g10s87x43pdk8y5cq9hw801g);

}
else {
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%submit%%', '', $m4is_r2g10s87x43pdk8y5cq9hw801g);
}
}
else {
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%amount.due%%',
 '0.00', $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%date.due%%', date($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'],
 strtotime($m4is_hdseqgtp1yd3cjxf20r['DateCreated']) ), $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%creditcard.dropdown%%',
 '', $m4is_r2g10s87x43pdk8y5cq9hw801g);
$m4is_r2g10s87x43pdk8y5cq9hw801g = str_ireplace('%%submit%%', '', $m4is_r2g10s87x43pdk8y5cq9hw801g);

}
$m4is_gb01jqxh9ek2m .= $m4is_r2g10s87x43pdk8y5cq9hw801g;
}
}
$m4is_gb01jqxh9ek2m .= $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['post'];

return do_shortcode( $m4is_gb01jqxh9ek2m );
}
public static function m4is_jww3xbns876na($m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
if ( self::$m4is_zz74kb50 ) {
return '';
}
static $m4is_yfwwtft0q94j35s0f4a7acqhb = false;

static $m4is_yggq5j195mnp46m3zfr = false;
$m4is_n7x0afpz = [
'cancel_text' => 'Cancel',
'confirm_button' => 'Yes, Stop Subscription',

'confirm_cancel' => 'Keep Subscription',
'confirm_title' => 'Cancel Subscription?',
'confirm' => 0,
'date_format' => 'M d, Y',
'immediate' =>
 false, 
'jqueryui' => 1,
'onlyids' => '',
'orderby' => 'StartDate',
'sort' => 'a', 
'status' => 'all', 
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if (! self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['confirm'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['confirm'],
 true);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['immediate'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['immediate'],
 false);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['jqueryui'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['jqueryui'],
 true);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['status'] = ucwords(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['status']) );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sort'] = substr(strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sort']) ),
 0, 1);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['orderby'] = trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['orderby']);
$m4is_z81tvhx0by6g88js7vkdv38x90w7x = ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sort'] == 'a');

$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_6xj2zq4143f49mqz9p79f7brf3mv = m4is_bbwjksaqsay3yt68xq9afn::m4is_haq6awv5zvemdwf5cnhd9g4c();
$m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x = m4is_bbwjksaqsay3yt68xq9afn::m4is_vgzt7cz68yj8();

$m4is_yggq5j195mnp46m3zfr = self::$m4is_132xe588j->m4is_j4c49s3gx2v8vx0v8ap1( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
if (is_array($m4is_yggq5j195mnp46m3zfr) ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['onlyids'] = array_filter(explode(',',
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['onlyids']) );
foreach ($m4is_yggq5j195mnp46m3zfr as $m4is_j8j55t8dz79m7=>$m4is_ch8hrhh6sba02hkj735k3) {
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['status'] <> 'All') {
if (strtolower($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['status']) <> strtolower($m4is_ch8hrhh6sba02hkj735k3['Status']) ) {
unset($m4is_yggq5j195mnp46m3zfr[$m4is_j8j55t8dz79m7]);

}
}
}
if (! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['onlyids']) ) {
foreach($m4is_yggq5j195mnp46m3zfr as $m4is_j8j55t8dz79m7 =>
 $m4is_f5pq560taxn4v67xk7v982nwn0) {
if (! in_array($m4is_f5pq560taxn4v67xk7v982nwn0['ProgramId'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['onlyids']) ) {
if (! in_array($m4is_f5pq560taxn4v67xk7v982nwn0['SubscriptionPlanId'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['onlyids']) ) {
unset($m4is_yggq5j195mnp46m3zfr[$m4is_j8j55t8dz79m7]);
}
}
}
}
usort($m4is_yggq5j195mnp46m3zfr,
 function($a, $b) use ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_z81tvhx0by6g88js7vkdv38x90w7x) {
$orderby = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['orderby'];

if ($a[$orderby] == $b[$orderby]) {
$order = 0;
}
if ($m4is_z81tvhx0by6g88js7vkdv38x90w7x) {
$order = $a[$orderby] < $b[$orderby] ? -1 : 1;

}
else {
$order = $a[$orderby] > $b[$orderby] ? -1 : 1;
}
return $order;
});
}
$m4is_kgtydegztfspg5sg6s = ( is_array( $m4is_yggq5j195mnp46m3zfr ) && ! empty( $m4is_yggq5j195mnp46m3zfr ) );

$m4is_svv1jt6mc = 0;
$m4is_gb01jqxh9ek2m = '';
if ( $m4is_kgtydegztfspg5sg6s && trim( $m4is_bsamg3fezf ) == '' ) {
$m4is_bsamg3fezf = '<p>
			%%line%% - %%cycler%% -
			Subscription Name: %%subscription.name%%<br />
			Subscription Status:  %%subscription.status%%<br />
			Subscription Price: %%subscription.price%%<br />
			Subscription Billing Cycle:  %%subscription.billingcycle%%<br />
			Credit Card:  %%creditcard.last4%%<br />
			Card Type: %%creditcard.type%%<br />
			Card Expiration: %%creditcard.expmonth%% / %%creditcard.expyear%%<br />
			Subscription Start Date: %%subscription.startdate%%<br />
			Subscription Paid Through Date: %%subscription.paidthrough%%<br />
			Subscription Next Billing Date: %%subscription.nextbilling%%<br />
			Subscription Status: %%subscription.status%%<br />
			Keywords: %%subscription._keywords%%<br />
			%%cancel.button%%
			</p>';

}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true,
 $m4is_kgtydegztfspg5sg6s );
if ($m4is_kgtydegztfspg5sg6s) {
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n('RecurringOrder');

foreach ( $m4is_yggq5j195mnp46m3zfr as $m4is_j8j55t8dz79m7=>$m4is_ch8hrhh6sba02hkj735k3) {
$m4is_svv1jt6mc++;
$m4is_y7jg7yt7azs3ynrty7swzyjg0wgc = false;

$m4is_yrsthh0s4s62mfk9 = _x( $m4is_ch8hrhh6sba02hkj735k3['Status'], 'memb_list_subscriptions', 'memberium' );
switch ($m4is_ch8hrhh6sba02hkj735k3['BillingCycle']) {
case 6:
$m4is_ch8hrhh6sba02hkj735k3['BillingCycleWord1'] = _x('Daily',
 'memb_list_subscriptions', 'memberium');
$m4is_ch8hrhh6sba02hkj735k3['BillingCycleWord2'] = _x('Days', 'memb_list_subscriptions', 'memberium');

break;
case 3:
$m4is_ch8hrhh6sba02hkj735k3['BillingCycleWord1'] = _x('Weekly', 'memb_list_subscriptions', 'memberium');
$m4is_ch8hrhh6sba02hkj735k3['BillingCycleWord2'] = _x('Weeks',
 'memb_list_subscriptions', 'memberium');
break;
case 2:
$m4is_ch8hrhh6sba02hkj735k3['BillingCycleWord1'] = _x('Monthly', 'memb_list_subscriptions',
 'memberium');
$m4is_ch8hrhh6sba02hkj735k3['BillingCycleWord2'] = _x('Months', 'memb_list_subscriptions', 'memberium');
break;
case 1:
$m4is_ch8hrhh6sba02hkj735k3['BillingCycleWord1'] = _x('Annually',
 'memb_list_subscriptions', 'memberium');
$m4is_ch8hrhh6sba02hkj735k3['BillingCycleWord2'] = _x('Years', 'memb_list_subscriptions',
 'memberium');
break;
}
if (empty($m4is_ch8hrhh6sba02hkj735k3['PaidThruDate']) ) {
$m4is_ch8hrhh6sba02hkj735k3['PaidThruDate'] = $m4is_ch8hrhh6sba02hkj735k3['StartDate'];

}
$m4is_r53562w9befcb2kh7rm4p7n5 = base64_encode(serialize([
'cancel_text' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['cancel_text'],

'immediate' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['immediate'],
'next_bill_date' => $m4is_ch8hrhh6sba02hkj735k3['NextBillDate'],

'paid_through_date' => $m4is_ch8hrhh6sba02hkj735k3['PaidThruDate'],
'recurringorder_id' => (int) $m4is_ch8hrhh6sba02hkj735k3['Id'],

'subscriptionplan_id' => (int) $m4is_ch8hrhh6sba02hkj735k3['SubscriptionPlanId'],
]) );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_r53562w9befcb2kh7rm4p7n5);

$m4is_wqrt24fsqwsss2g8svdt02d = '<form method="post" class="memberium-subscription-list" action="">';
$m4is_wqrt24fsqwsss2g8svdt02d .= wp_nonce_field('memb_cancelsubscription_' . $m4is_ch8hrhh6sba02hkj735k3['Id'],
 '_wpnonce', true, false);
$m4is_wqrt24fsqwsss2g8svdt02d .= '<input type="hidden" name="memb_form_type" value="memb_cancel_subscription">';

$m4is_wqrt24fsqwsss2g8svdt02d .= '<input type="hidden" name="parameters" value="' . $m4is_r53562w9befcb2kh7rm4p7n5 . '">';
$m4is_wqrt24fsqwsss2g8svdt02d .= '<input type="hidden" name="signature" value="' . $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn . '">';

$m4is_wqrt24fsqwsss2g8svdt02d .= $m4is_bsamg3fezf;
if ($m4is_ch8hrhh6sba02hkj735k3['Frequency'] > 1) {
$m4is_vker2jakq51b = 'Every ' . $m4is_ch8hrhh6sba02hkj735k3['Frequency'] . ' ' . $m4is_ch8hrhh6sba02hkj735k3['BillingCycleWord2'];

}
else {
$m4is_vker2jakq51b = $m4is_ch8hrhh6sba02hkj735k3['BillingCycleWord1'];
}
if ($m4is_svv1jt6mc % 2) {
$m4is_3mb2qvs8exjdhye4sqgb2t3 = 'odd';

}
else {
$m4is_3mb2qvs8exjdhye4sqgb2t3 = 'even';
}
$m4is_g9xvh57zgkb4rqte771b3adctcpt5bx = empty( $m4is_ch8hrhh6sba02hkj735k3['StartDate'] ) ? __('None') : date( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'],
 strtotime($m4is_ch8hrhh6sba02hkj735k3['StartDate'] ) );
$m4is_d126trdfnwjzqc9hf5 = empty( $m4is_ch8hrhh6sba02hkj735k3['NextBillDate'] ) ? __('None') : date( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'],
 strtotime($m4is_ch8hrhh6sba02hkj735k3['NextBillDate'] ) );
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%creditcard.expmonth%%',
 isset( $m4is_yfwwtft0q94j35s0f4a7acqhb[$m4is_ch8hrhh6sba02hkj735k3['CC1']]['ExpirationMonth']) ? $m4is_yfwwtft0q94j35s0f4a7acqhb[$m4is_ch8hrhh6sba02hkj735k3['CC1']]['ExpirationMonth'] : '',
 $m4is_wqrt24fsqwsss2g8svdt02d);
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%creditcard.expyear%%', isset( $m4is_yfwwtft0q94j35s0f4a7acqhb[$m4is_ch8hrhh6sba02hkj735k3['CC1']]['ExpirationYear']) ? $m4is_yfwwtft0q94j35s0f4a7acqhb[$m4is_ch8hrhh6sba02hkj735k3['CC1']]['ExpirationYear'] : '',
 $m4is_wqrt24fsqwsss2g8svdt02d);
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%creditcard.id%%', (isset( $m4is_yfwwtft0q94j35s0f4a7acqhb['Id']) ? $m4is_yfwwtft0q94j35s0f4a7acqhb['Id'] : ''),
 $m4is_wqrt24fsqwsss2g8svdt02d);
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%creditcard.last4%%', isset( $m4is_yfwwtft0q94j35s0f4a7acqhb[$m4is_ch8hrhh6sba02hkj735k3['CC1'] ]['Last4']) ? 'XXXX-' . $m4is_yfwwtft0q94j35s0f4a7acqhb[$m4is_ch8hrhh6sba02hkj735k3['CC1'] ]['Last4'] : '',
 $m4is_wqrt24fsqwsss2g8svdt02d);
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%creditcard.type%%', isset( $m4is_yfwwtft0q94j35s0f4a7acqhb[ $m4is_ch8hrhh6sba02hkj735k3['CC1'] ]['CardType']) ? $m4is_yfwwtft0q94j35s0f4a7acqhb[ $m4is_ch8hrhh6sba02hkj735k3['CC1'] ]['CardType'] : '',
 $m4is_wqrt24fsqwsss2g8svdt02d);
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%cycler%%', $m4is_3mb2qvs8exjdhye4sqgb2t3, $m4is_wqrt24fsqwsss2g8svdt02d);

$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%line%%', $m4is_svv1jt6mc, $m4is_wqrt24fsqwsss2g8svdt02d);
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%subscription.billingcycle%%',
 $m4is_vker2jakq51b, $m4is_wqrt24fsqwsss2g8svdt02d);
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%subscription.id%%', $m4is_ch8hrhh6sba02hkj735k3['Id'],
 $m4is_wqrt24fsqwsss2g8svdt02d);
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%subscription.name%%', $m4is_6xj2zq4143f49mqz9p79f7brf3mv[ $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x[ $m4is_ch8hrhh6sba02hkj735k3['SubscriptionPlanId'] ]['ProductId'] ]['ProductName'],
 $m4is_wqrt24fsqwsss2g8svdt02d);
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%subscription.nextbilling%%', $m4is_d126trdfnwjzqc9hf5,
 $m4is_wqrt24fsqwsss2g8svdt02d);
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%subscription.paidthrough%%', date( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'],
 strtotime( $m4is_ch8hrhh6sba02hkj735k3['PaidThruDate'] ) ), $m4is_wqrt24fsqwsss2g8svdt02d );
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%subscription.price%%',
 number_format( $m4is_ch8hrhh6sba02hkj735k3['BillingAmt'], 2 ), $m4is_wqrt24fsqwsss2g8svdt02d );
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%subscription.startdate%%',
 $m4is_g9xvh57zgkb4rqte771b3adctcpt5bx, $m4is_wqrt24fsqwsss2g8svdt02d );
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace( '%%subscription.status%%',
 $m4is_yrsthh0s4s62mfk9, $m4is_wqrt24fsqwsss2g8svdt02d );
foreach($m4is_7b2yfzk0054 as $m4is_bbsta3mvjhhvh1x97vfpm9e) {
if ($m4is_bbsta3mvjhhvh1x97vfpm9e[0] == '_' && isset($m4is_ch8hrhh6sba02hkj735k3[$m4is_bbsta3mvjhhvh1x97vfpm9e]) ) {;

$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace('%%subscription.' . $m4is_bbsta3mvjhhvh1x97vfpm9e . '%%', $m4is_ch8hrhh6sba02hkj735k3[$m4is_bbsta3mvjhhvh1x97vfpm9e],
 $m4is_wqrt24fsqwsss2g8svdt02d);
}
}
if (! empty($m4is_ch8hrhh6sba02hkj735k3['EndDate']) ) {
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace('%%subscription.enddate%%',
 date($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date_format'], strtotime($m4is_ch8hrhh6sba02hkj735k3['EndDate']) ), $m4is_wqrt24fsqwsss2g8svdt02d);

}
else {
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace('%%subscription.enddate%%', '', $m4is_wqrt24fsqwsss2g8svdt02d);
}
if (strtolower($m4is_ch8hrhh6sba02hkj735k3['Status']) == 'active' && empty($m4is_ch8hrhh6sba02hkj735k3['EndDate']) ) {
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace('%%cancel.button%%',
 '<input type="submit" class="memb_subscription_cancel_button" value="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['cancel_text'] . '">',
 $m4is_wqrt24fsqwsss2g8svdt02d);
}
elseif (! empty($m4is_ch8hrhh6sba02hkj735k3['EndDate']) ){
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace('%%cancel.button%%',
 __('Cancelled', 'memberium'), $m4is_wqrt24fsqwsss2g8svdt02d);
}
else {
$m4is_wqrt24fsqwsss2g8svdt02d = str_ireplace('%%cancel.button%%',
 '', $m4is_wqrt24fsqwsss2g8svdt02d);
}
$m4is_wqrt24fsqwsss2g8svdt02d .= '</form>';
$m4is_gb01jqxh9ek2m .= do_shortcode($m4is_wqrt24fsqwsss2g8svdt02d);

}
unset($m4is_vker2jakq51b);
}
else {
$m4is_gb01jqxh9ek2m .= $m4is_bsamg3fezf;
}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['confirm'] ) {
$params = [
'confirmTitle' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['confirm_title'],
'confirmButton' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['confirm_button'],
'confirmCancel' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['confirm_cancel'],
];
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['jqueryui'] ) {
$m4is_h5a91hgfm2n9at2dn89fsmepnva = get_bloginfo( 'version' );

if ( version_compare( $m4is_h5a91hgfm2n9at2dn89fsmepnva, '5.6', 'ge' ) ) {
wp_enqueue_script( 'jqueryui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js' );

wp_enqueue_style( 'jqueryuitheme', '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css' );
}
else {
wp_enqueue_script( 'jqueryui',
 '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/jquery-ui.min.js' );
wp_enqueue_style( 'jqueryuitheme', '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/themes/smoothness/jquery-ui.css' );

}
}
wp_enqueue_script( 'memberium-cancellation-confirmation', plugins_url( 'js/cancellation-confirm.js', MEMBERIUM_HOME ) );
wp_localize_script( 'memberium-cancellation-confirmation',
 'subscriptionCancelText', $params );
}

$m4is_gb01jqxh9ek2m = preg_replace('/(%%\S+%%)/', '', $m4is_gb01jqxh9ek2m);
return do_shortcode($m4is_gb01jqxh9ek2m);

}
public static function m4is_5cbgjf9rwssgx75fc2nxpxn8p($m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
if ( self::$m4is_zz74kb50 ) {
return '';

}
$m4is_n7x0afpz = [
'capture' => '',
'contact_id' => 0,
'invoice_id' => isset($_GET['invoice_id']) ? (int) $_GET['invoice_id'] : 0,

'product_ids' => '',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if (is_feed() || ! is_singular() ) {
return '';
}
$m4is_gb01jqxh9ek2m = '';
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] : self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_ids'] = array_filter(explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_ids']) );

if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id']) || empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_ids']) ) {
return '';

}
$m4is_qpzk7kkc6v2bhxchqns6f9m = self::$m4is_132xe588j->m4is_f51yh9x2x5zd1b7gtq0g($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id']);

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['invoice_id']) {
$m4is_0906y1a1fyz3wa = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['invoice_id'];

$m4is_qpzk7kkc6v2bhxchqns6f9m = isset($m4is_qpzk7kkc6v2bhxchqns6f9m[$m4is_0906y1a1fyz3wa]) ? [$m4is_0906y1a1fyz3wa => $m4is_qpzk7kkc6v2bhxchqns6f9m[$m4is_0906y1a1fyz3wa] ] : [];

}
foreach($m4is_qpzk7kkc6v2bhxchqns6f9m as $m4is_hdseqgtp1yd3cjxf20r) {
$m4is_6xj2zq4143f49mqz9p79f7brf3mv = isset($m4is_hdseqgtp1yd3cjxf20r['ProductSold']) ? explode(',',
 $m4is_hdseqgtp1yd3cjxf20r['ProductSold']) : [];
if (! empty( array_intersect($m4is_6xj2zq4143f49mqz9p79f7brf3mv, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_ids']) ) ) {
$m4is_5eeea8pxn = true;

break;
}
}
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v($m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 TRUE, $m4is_5eeea8pxn);
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}
public static function m4is_1xnn0daqctwzby0afvrb0d2($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_n7x0afpz = [
'capture' =>
 '',
'contact_id' => 0,
'invoice_id' => isset($_GET['invoice_id']) ? (int) $_GET['invoice_id'] : 0,
'status' => 'Active',
'subscription_ids' =>
 '',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if (is_feed() || ! is_singular() ) {
return '';
}
$m4is_gb01jqxh9ek2m = '';
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] : self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['subscription_ids'] = array_filter(explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['subscription_ids']) );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['status'] = strtolower($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['status']);
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id']) || empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['subscription_ids']) ) {
return '';

}
$m4is_yggq5j195mnp46m3zfr = self::$m4is_132xe588j->m4is_j4c49s3gx2v8vx0v8ap1($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id']);

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['invoice_id']) {
$m4is_0906y1a1fyz3wa = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['invoice_id'];

$m4is_yggq5j195mnp46m3zfr = isset($m4is_yggq5j195mnp46m3zfr[$m4is_0906y1a1fyz3wa]) ? [$m4is_0906y1a1fyz3wa => $m4is_yggq5j195mnp46m3zfr[$m4is_0906y1a1fyz3wa] ] : [];

}
if (! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['status'])) {
foreach($m4is_yggq5j195mnp46m3zfr as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_ch8hrhh6sba02hkj735k3) {
if (strtolower($m4is_ch8hrhh6sba02hkj735k3['Status']) <> $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['status']) {
unset($m4is_yggq5j195mnp46m3zfr[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]);

}
}
}
foreach($m4is_yggq5j195mnp46m3zfr as $m4is_ch8hrhh6sba02hkj735k3) {
if (in_array($m4is_ch8hrhh6sba02hkj735k3['SubscriptionPlanId'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['subscription_ids']) ) {
$m4is_afk4ddgenbgnf2tdyk43 = true;
break;
}
}
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v($m4is_bsamg3fezf,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, TRUE, $m4is_afk4ddgenbgnf2tdyk43);
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}




public static function m4is_a2g345weqgg4bskk7z0kkppbte($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
if ( self::$m4is_zz74kb50 ) {
return '';
}
if (is_feed() ) {
return '';

}
if (empty($_SERVER['HTTPS']) ) {
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return '<p>Order Form Disabled Due to Missing SSL</p>';

}
return '';
}
$m4is_n7x0afpz = [
'autofill' => 'n',
'branding' => 'n',
'button_url' => '',
'cache' => HOUR_IN_SECONDS * 24,
'capture' =>
 '',
'form_id' => '',
'form_url' => '',
'remove_styles' => 'y',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
if (false !== strpos($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_url'], '.infusionsoft.com/saleform/') ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_url'] = str_ireplace('.infusionsoft.com/',
 '.infusionsoft.app/', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_url']);
}
if (false === strpos($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_url'],
 '.infusionsoft.app/saleform/') ) {
return _x('Invalid Form Embed', 'memb_orderform', 'memberium');
}
if (false === stripos($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_url'],
 '?cookieSearchStarted=true&cookieStopSearch=true') ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_url'] .= '?cookieSearchStarted=true&cookieStopSearch=true';

}
$m4is_a1j7rtet2ryksvqa212cj = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['cache'];
$m4is_djmfed7g3sy9y8c5q68epgx6xr = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_url'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['branding'] = strtolower(substr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['branding'], 0, 1) );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autofill'] = strtolower(substr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autofill'],
 0, 1) );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['remove_styles'] = strtolower(substr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['remove_styles'],
 0, 1) );
$m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr = false;
$m4is_4s8vwhbq6pw2 = 'memberium_orderform_' . md5($m4is_djmfed7g3sy9y8c5q68epgx6xr);

if ($m4is_a1j7rtet2ryksvqa212cj > 0) {
$m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr = get_transient($m4is_4s8vwhbq6pw2);
}

if ($m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr == false) {
$m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv = wp_remote_get($m4is_djmfed7g3sy9y8c5q68epgx6xr);
 
if (is_array($m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv) ) {
preg_match('/<body>(.*)<\/body>/sm', $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['body'],
 $m4is_hartbe843crydzh);
if (isset($m4is_hartbe843crydzh[1]) ) {
$m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr = $m4is_hartbe843crydzh[1];
set_transient($m4is_4s8vwhbq6pw2,
 $m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr, $m4is_a1j7rtet2ryksvqa212cj);
}
}
else {
return $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv->errors['http_request_failed'][0];

}
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['remove_styles'] == 'y') {
$m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr = preg_replace('/<style>(.*)<\/style>/imU',
 '', $m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr);
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'] > '') {
$m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr = str_replace('id="orderForm"',
 'id="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'] . '"  ', $m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr);
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autofill'] == 'y') {
foreach ($_GET as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr = str_replace('name=\'' . $m4is_j8j55t8dz79m7 . '\' value=\'\'',
 'name="' . $m4is_j8j55t8dz79m7 . '" value="' . $m4is_rqxytszfq5v6syth1csqqxvy5 . '"', $m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr);
}
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_url'] > '') {
$m4is_tbbre4wmkxpg614pwywqa = '<input type="image" value="Order" id="Order" class="default-input sale-orderbutton np inf-button" name="Order" src="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_url'] . '" style="width:auto;overflow:visible;"/>';

$m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr = preg_replace('/<input(.*)id="Order"(.*)>/iU', $m4is_tbbre4wmkxpg614pwywqa, $m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr);

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['branding'] == 'n') {
$m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr = str_replace('Powered By Keap',
 '', $m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr);
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] > '') {
$m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_r631mq3vpgnpxhcrsqr414rtx1x($m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}
return $m4is_1h0q8cd8r4s6zsmtga8c9r0bqcgr;
}
public static function m4is_nqqxbs0d0d5gsq9eccbfm4ersd5($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_n7x0afpz = [
'autorun' =>
 'no',
'button_name' => 'order_button',
'button_text' => '',
'bypass_commissions' => 'no',
'css_class' => '',
'delete_failed' => 'yes',

'fail_action' => '',
'fail_goals' => '',
'fail_tags' => '',
'fail_url' => '',
'lead_affiliate_id' => 0,
'merchant_id' => (int) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'merchant_account_id' ),
'prod_description' => '',
'prod_id' => 0,
'prod_name' => '',
'prod_price' => '',
'prod_type' => 4,
'qty' =>
 1,
'sales_affiliate_id' => 0,
'success_action' => '',
'success_goals' => '',
'success_tags' => '',
'success_url' => '',
'taxable' =>
 'no',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if (! self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return '';
}
static $m4is_pae00hv11 = 0;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autorun'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autorun'],
 false);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['bypass_commissions'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['bypass_commissions'],
 false);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delete_failed'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delete_failed'],
 true);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['taxable'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['taxable'],
 false);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text'] = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text'] > '' ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text'] : 'Buy Now ' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['prod_price'];


$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if (is_array($m4is_yfwwtft0q94j35s0f4a7acqhb) && count($m4is_yfwwtft0q94j35s0f4a7acqhb) > 0) {
$m4is_sns6r4z7z662q6ct9aqvw81ch29 = end($m4is_yfwwtft0q94j35s0f4a7acqhb);

$m4is_wtqm5h9z3 = (int) $m4is_sns6r4z7z662q6ct9aqvw81ch29['Id'];
unset($m4is_sns6r4z7z662q6ct9aqvw81ch29, $m4is_yfwwtft0q94j35s0f4a7acqhb);

}
else {
return '';
}
foreach($m4is_n7x0afpz as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j[$m4is_j8j55t8dz79m7] = trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[$m4is_j8j55t8dz79m7]);

}
$m4is_q8ssasmrszmhk = [
'has_payment_plan' => false,
'autorun' => (bool) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autorun'],
'bypass_commissions' =>
 (bool) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['bypass_commissions'],
'delete_failed' => (bool) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delete_failed'],

'taxable' => (bool) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['taxable'],
'product_price' => (float) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['prod_price'],

'creditcard_id' => (int) $m4is_wtqm5h9z3,
'lead_affiliate_id' => (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['lead_affiliate_id'],
'merchant_id' =>
 (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['merchant_id'],
'product_id' => (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['prod_id'],
'product_type' =>
 (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['prod_type'],
'quantity' => (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['qty'],
'sales_affiliate_id' =>
 (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sales_affiliate_id'],
'fail_action' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fail_action'],

'fail_goals' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fail_goals'],
'fail_tags' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fail_tags'],

'fail_url' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fail_url'],
'product_description' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['prod_description'],

'product_name' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['prod_name'],
'success_action' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_action'],

'success_goals' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_goals'],
'success_tags' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_tags'],

'success_url' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_url'],
];
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autorun']) {
$m4is_0906y1a1fyz3wa = (int) self::$m4is_132xe588j->m4is_t8j85edw22dp( $m4is_q8ssasmrszmhk );

if ($m4is_0906y1a1fyz3wa) {
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_url'] > '') {
$m4is_pqecxfec342ksq5fzv1mg = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_url'];

}
}
else {
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fail_url'] > '') {
$m4is_pqecxfec342ksq5fzv1mg = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['fail_url'];

}
}
self::$m4is_132xe588j->m4is_mz8ypkzzr4fxz8e42njma37v6ge02( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
wp_redirect($m4is_pqecxfec342ksq5fzv1mg,
 302);
exit;
}
else {
$m4is_pae00hv11++;
$m4is_q8ssasmrszmhk = base64_encode(serialize($m4is_q8ssasmrszmhk) );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_q8ssasmrszmhk);

$form_name = 'place_order_button-' . $m4is_pae00hv11;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_name'] = 'place_order_button_' . $m4is_pae00hv11;

$m4is_ck8ek2dka = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_url'];
$m4is_1v8nc7q0w5tjvwe1xr = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_class'];

$m4is_qc36n7jdf = '';
$m4is_qc36n7jdf .= "<form name=\"{$form_name}\" id=\"{$form_name}\" method=\"post\">";
$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"memb_form_type\" value=\"memb_place_order\">";

$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"form_id\" value=\"{$m4is_pae00hv11}\">";
$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"order_settings\" value=\"{$m4is_q8ssasmrszmhk}\">";

$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"digital_signature\" value=\"{$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn}\">";
$m4is_qc36n7jdf .= wp_nonce_field('place_order_button-' . $m4is_pae00hv11,
 '_wpnonce', true, false);
if ( $m4is_ck8ek2dka == '') {
$m4is_qc36n7jdf .= "<input type=\"submit\" class=\"{$m4is_1v8nc7q0w5tjvwe1xr}\" id=\"{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_name']}\" value=\"{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text']}\">";

} else {
$m4is_qc36n7jdf .= "<input type=\"image\" src=\"{$m4is_ck8ek2dka}\" class=\"{$m4is_1v8nc7q0w5tjvwe1xr}\" id=\"{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_name']}\" >";

}
$m4is_qc36n7jdf .= "</form>";
return $m4is_qc36n7jdf;
}
}


public static function m4is_apzsm4axfj7kr8ng6resr( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {


if ( self::$m4is_zz74kb50 ) {
return '';

}
global $wpdb;
$m4is_n7x0afpz = [
'action_id' => 0,
'button_url' => 0,
'css_class' => '',
'error_url' => '',
'success_url' => '',

];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if (! self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return '';
}
static $m4is_pae00hv11 = 1001;
$m4is_eam4px02j6ytpsfyyqbfv6tbkn1 = _x('Submit',
 'memb_one_click_sale', 'memberium');
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['unavailable_text']) ) {
$m4is_ah2jzm996 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['unavailable_text'];

}
else {
$m4is_ah2jzm996 = _x('This offer is only available with a qualifying purchase.', 'memb_one_click_sale', 'memberium');
}
return $m4is_ah2jzm996;


if ($m4is_pae00hv11 == 0) {
$m4is_pae00hv11 = 1001;
}
$m4is_c1s89abjcamg842fv8mw83 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['action_id'];

$m4is_ck8ek2dka = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_url'];
$m4is_pqecxfec342ksq5fzv1mg = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_url'];

$m4is_b7t0s12pem9nzqsef1ewwey06vb0xqv = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['error_url'];
$m4is_1v8nc7q0w5tjvwe1xr = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_class'];

$m4is_ah2jzm996 = '<span class="is4wp_client_error">' . $m4is_ah2jzm996 . '</span>';
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text']) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text' > '']) $m4is_eam4px02j6ytpsfyyqbfv6tbkn1 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text'];

if ( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp == 0 || $m4is_c1s89abjcamg842fv8mw83 == 0 || $m4is_z331qzpscyepmkg == 0 || ! isset($_GET['infusion_xid']) || ! isset($_GET['infusion_type']) || ! ($_GET['infusion_type'] == 'CustomFormSale') ) {
return $m4is_ah2jzm996;

}

$m4is_7b2yfzk0054 = [
'Id'
];
$m4is_j34bmw9dcjexfj1qpz = [
'Id' => $m4is_z331qzpscyepmkg,
'ContactId' => self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,

];
$m4is_skkxj37nc8saew3r5abp3ptqy = self::$m4is_wsme5a297xh0v6d5y->dsLoad('Job', intval($m4is_z331qzpscyepmkg), $m4is_7b2yfzk0054);

if ($m4is_skkxj37nc8saew3r5abp3ptqy['Id'] <> $m4is_z331qzpscyepmkg) {
return $m4is_ah2jzm996;
}
$m4is_7b2yfzk0054 = [
'Id',
'Last4',

'CardType',
'Status',
'ContactId'
];
$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
];
$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' =>
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'CardType' => $_GET['CreditCard0CardType'],
'ExpirationYear' => $_GET['CreditCard0ExpirationYear'],

'ExpirationMonth' => $_GET['CreditCard0ExpirationMonth'],
];
$m4is_jzp68x11jqs450 = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2('CreditCard',
 1, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_7b2yfzk0054);
if ( is_array( $m4is_jzp68x11jqs450 ) && count( $m4is_jzp68x11jqs450 ) == 0) {
return $m4is_ah2jzm996;

}

$m4is_pae00hv11++;
$m4is_7znqjnkvvbzyjs = 'is4wp_oneclick_sale_form_' . $m4is_pae00hv11;
$m4is_d07drbz79j6ytbbf = 'is4wp_oneclick_sale_button_' . $m4is_pae00hv11;

$m4is_r53562w9befcb2kh7rm4p7n5 = base64_encode(serialize([
'action_id' => $m4is_c1s89abjcamg842fv8mw83,
'Contact0Email' => $_GET['Contact0Email'],

'contact_id' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'order_id' => $m4is_z331qzpscyepmkg,
'redirect_url' => $m4is_pqecxfec342ksq5fzv1mg,

]) );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_r53562w9befcb2kh7rm4p7n5);
$m4is_qc36n7jdf = '';

$m4is_qc36n7jdf .= "<form name=\"{$m4is_7znqjnkvvbzyjs}\" id=\"{$m4is_7znqjnkvvbzyjs}\" method=\"post\">";
$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"is4wp_form_type\" value=\"is4wp_oneclick_sale\">";

$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"form_id\" value=\"{$m4is_pae00hv11}\">";
$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"parameters\" value=\"{$m4is_r53562w9befcb2kh7rm4p7n5}\">";

$m4is_qc36n7jdf .= "<input type=\"hidden\" name=\"digital_signature\" value=\"{$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn}\">";
$m4is_qc36n7jdf .= wp_nonce_field('oneclick_sale_' . $m4is_pae00hv11,
 '_wpnonce', true, false);
if ($m4is_ck8ek2dka == '') {
$m4is_qc36n7jdf .= "<input type=\"submit\" class=\"{$m4is_1v8nc7q0w5tjvwe1xr}\" id=\"{$m4is_d07drbz79j6ytbbf}\" value=\"{$m4is_eam4px02j6ytpsfyyqbfv6tbkn1}\">";

} else {
$m4is_qc36n7jdf .= "<input type=\"image\" src=\"{$m4is_ck8ek2dka}\" class=\"{$m4is_1v8nc7q0w5tjvwe1xr}\" id=\"{$m4is_d07drbz79j6ytbbf}\" >";

}
$m4is_qc36n7jdf .= "</form>";
return $m4is_qc36n7jdf;
}
public static function m4is_dp62gk2s8xvn3vx1($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = (int) get_user_meta( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(), 'infusionsoft_affiliate', true );
 
$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 or m4is_amz58dmg8j7e898bj8r8b1::m4is_qk9eqwy5wj( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_n7x0afpz = [
'autorun' => 'y', 
'bypass_commissions' => 'n',
'debug' => 'n', 
'description' => '', 
'has_all_tags' => '', 
'has_any_tag' =>
 '', 
'failure_action' => '',
'failure_goal' => '',
'failure_tag' => '',
'failure_url' => '',
'id' => 0, 
'keep_failed' => 'n', 
'lead_affiliate_id' =>
 $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9,
'merchant_id' => self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'merchant_account_id'),
 
'name' => '', 
'order_title' => '',
'payment_description' => 'Memberium Online Purchase',
'plan_autocharge' => 'n', 
'plan_initial_payment' =>
 -1, 
'plan_max_retries' => 3, 
'plan_payment_count' => 1, 
'plan_payment_interval' => 30, 
'plan_retry_days' => 2, 
'plan_start_date' =>
 'now', 
'price' => -1, 
'quantity' => 1,
'sale_affiliate_id' => $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9,
'success_action' => '',
'success_goal' =>
 '',
'success_tag' => '',
'success_url' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autorun'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autorun'],
 true);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['bypass_commissions'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['bypass_commissions'],
 false);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['keep_failed'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['keep_failed'],
 false);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['lead_affiliate_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['lead_affiliate_id'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['merchant_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['merchant_id'];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name'] = trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name']);

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['price'] = (double) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['price'];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['quantity'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['quantity'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sale_affiliate_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sale_affiliate_id'];
if (! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['m4is_dy9qsc49he4']) ) {
if (! self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['has_any_tag']) ) {
return '';

}
}
if (! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['m4is_n9nmkb32xctdmyy9d0s0trys3zj5y']) ) {
if (! self::$m4is_132xe588j->m4is_n9nmkb32xctdmyy9d0s0trys3zj5y($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['has_all_tags']) ) {
return '';

}
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
$m4is_wtqm5h9z3 = 0;
$m4is_z331qzpscyepmkg = 0;

$m4is_6xj2zq4143f49mqz9p79f7brf3mv = m4is_bbwjksaqsay3yt68xq9afn::m4is_gh12fb5596s29bycerd7thz1x9dspt();
$m4is_0864dacae86e26c2nevtsd8y1 = true;


$m4is_knxbec8fr3be1s2tkx0ydee0z = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_action'];
$m4is_exf0cmscjsfyk = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_goal'];

$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_tag'];
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_url'];

if (isset($m4is_6xj2zq4143f49mqz9p79f7brf3mv[$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id']]) ) {
$m4is_m3h9r6vhs5rt8w41pn284phf = $m4is_6xj2zq4143f49mqz9p79f7brf3mv[$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id']];

}
elseif ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name'] > '') {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] = 0;
foreach($m4is_6xj2zq4143f49mqz9p79f7brf3mv as $m4is_m3h9r6vhs5rt8w41pn284phf) {
if (0 === strcasecmp ($m4is_m3h9r6vhs5rt8w41pn284phf['ProductName'] ,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['name']) && $m4is_m3h9r6vhs5rt8w41pn284phf['Status'] == 1) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] = (int) $m4is_m3h9r6vhs5rt8w41pn284phf['Id'];

break;
}
}
}
unset($m4is_6xj2zq4143f49mqz9p79f7brf3mv);

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] < 1) {
$m4is_0864dacae86e26c2nevtsd8y1 = false;

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['quantity'] < 1) {
$m4is_0864dacae86e26c2nevtsd8y1 = false;
}
if ($m4is_0864dacae86e26c2nevtsd8y1 && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['merchant_id'] < 0) {
$m4is_0864dacae86e26c2nevtsd8y1 = false;

}
if ($m4is_0864dacae86e26c2nevtsd8y1 && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['price'] < 0) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['price'] = (double) $m4is_m3h9r6vhs5rt8w41pn284phf['ProductPrice'];

}


if ($m4is_0864dacae86e26c2nevtsd8y1) {
if (! ( (int) $m4is_wtqm5h9z3) ) {
$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_s7ym6t350bwzqesq3cmwmntrn7( $m4is_yfwwtft0q94j35s0f4a7acqhb );
$m4is_wtqm5h9z3 = (int) $m4is_yfwwtft0q94j35s0f4a7acqhb['Id'];

}
}

if ($m4is_0864dacae86e26c2nevtsd8y1) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_title'] = empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_title']) ? $m4is_m3h9r6vhs5rt8w41pn284phf['ProductName'] : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_title'];

$m4is_y9vxf7bvkrv9t7dbfarba4j = date_default_timezone_get();
date_default_timezone_set ('America/New_York');
$m4is_egm0frk4dhxzgq5rzry34q5v79t2 = date('Ymd\TH:i:s');

$m4is_0906y1a1fyz3wa = self::$m4is_wsme5a297xh0v6d5y->blankOrder($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_title'],
 $m4is_egm0frk4dhxzgq5rzry34q5v79t2, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['lead_affiliate_id'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sale_affiliate_id']);

if ($m4is_0906y1a1fyz3wa > 0) {
$m4is_0906y1a1fyz3wa = (int) $m4is_0906y1a1fyz3wa;
$m4is_hartbe843crydzh = self::$m4is_wsme5a297xh0v6d5y->addOrderItem($m4is_0906y1a1fyz3wa,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'], 4, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['price'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['quantity'],
 $m4is_m3h9r6vhs5rt8w41pn284phf['ProductName'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['description']);
if ($m4is_m3h9r6vhs5rt8w41pn284phf['Taxable'] || $m4is_m3h9r6vhs5rt8w41pn284phf['CountryTaxable'] || $m4is_m3h9r6vhs5rt8w41pn284phf['StateTaxable'] || $m4is_m3h9r6vhs5rt8w41pn284phf['CityTaxable']) {
self::$m4is_wsme5a297xh0v6d5y->recalculateTax($m4is_0906y1a1fyz3wa);

}
$m4is_d0gr5eb3q0f3s8e6k9 = self::$m4is_wsme5a297xh0v6d5y->chargeInvoice($m4is_0906y1a1fyz3wa, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['payment_description'],
 $m4is_wtqm5h9z3, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['merchant_id'], (bool) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['bypass_commissions']);

if (! in_array(strtolower($m4is_d0gr5eb3q0f3s8e6k9['Code']), ['declined', 'error'] ) ) {

$m4is_knxbec8fr3be1s2tkx0ydee0z = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_action'];

$m4is_exf0cmscjsfyk = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_goal'];
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_tag'];

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_url'];
}
else {

if (! $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['keep_failed']) {
self::$m4is_wsme5a297xh0v6d5y->deleteInvoice($m4is_0906y1a1fyz3wa);

}
}
}
date_default_timezone_set ($m4is_y9vxf7bvkrv9t7dbfarba4j);
}
if (! empty($m4is_knxbec8fr3be1s2tkx0ydee0z) ) {
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse($m4is_knxbec8fr3be1s2tkx0ydee0z,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
if (! empty($m4is_exf0cmscjsfyk) ) {
self::$m4is_132xe588j->m4is_5qyk7ea4p2nw8ph($m4is_exf0cmscjsfyk,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
if (! empty($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) ) {
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
self::$m4is_132xe588j->m4is_km2vptq0bwg($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
if (! empty($m4is_pp334hs6rfvw2vqjd400r3cmsn2kq) ) {

echo '<script type="text/javascript"> window.location.replace("',
 $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, '"); </script>';
exit;
}
}
public static function m4is_tb20dpe6ehez($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
if ( self::$m4is_zz74kb50 ) {
return '';
}
static $m4is_rvm1d8cdzaf577wtttxcgawnzq = false;

$m4is_n7x0afpz = [
'affiliate_id' => 0,
'allow_dupe' => 'n',
'autorun' => 'y', 
'debug' => 'n',
'delay_days' => 0,
'dupe_action' =>
 '',
'dupe_goal' => '',
'dupe_tag' => '',
'dupe_url' => '',
'failure_action' => '',
'failure_goal' => '',
'failure_tag' => '',
'failure_url' =>
 '',
'first_only' => 'y',
'm4is_n9nmkb32xctdmyy9d0s0trys3zj5y' => '',
'm4is_dy9qsc49he4' => '',
'id' => 0,
'keep_failed' => 'n',
'merchant_id' =>
 self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'merchant_account_id' ),
'price' => -1,
'quantity' => 1,

'success_action' => '',
'success_goal' => '',
'success_tag' => '',
'success_url' => '',
'taxable' => 'n',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['m4is_dy9qsc49he4'] = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['m4is_dy9qsc49he4'] );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['m4is_n9nmkb32xctdmyy9d0s0trys3zj5y'] = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['m4is_n9nmkb32xctdmyy9d0s0trys3zj5y'] );

if ( ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['m4is_dy9qsc49he4'] ) ) {
if ( ! self::$m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['m4is_dy9qsc49he4'] ) ) {
return '';

}
}
if ( ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['m4is_n9nmkb32xctdmyy9d0s0trys3zj5y'] ) ) {
if ( ! self::$m4is_132xe588j->m4is_n9nmkb32xctdmyy9d0s0trys3zj5y($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['m4is_n9nmkb32xctdmyy9d0s0trys3zj5y'] ) ) {
return '';

}
}
$m4is_wtqm5h9z3 = 0;
$m4is_1fq23brgs = 0;
$m4is_0864dacae86e26c2nevtsd8y1 = true;
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

$m4is_yggq5j195mnp46m3zfr = self::$m4is_132xe588j->m4is_nna76543();
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['allow_dupe'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['allow_dupe'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autorun'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['autorun'],
 true );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'],
 true );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['first_only'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['first_only'],
 true );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['keep_failed'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['keep_failed'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['taxable'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['taxable'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delay_days'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delay_days'];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['merchant_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['merchant_id'];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['quantity'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['quantity'];

if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['affiliate_id'] ) ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['affiliate_id'] = self::$m4is_132xe588j->m4is_qg9294a34f1821qmbf1c5a( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['first_only'] && $m4is_rvm1d8cdzaf577wtttxcgawnzq ) {
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'] ) echo 'Already Executed.  Stopping.<br>';

return '';
}
$m4is_rvm1d8cdzaf577wtttxcgawnzq = true;

if (! isset($m4is_yggq5j195mnp46m3zfr[$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id']]) || $m4is_yggq5j195mnp46m3zfr[$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id']]['Active'] == 0) {
$m4is_0864dacae86e26c2nevtsd8y1 = false;

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delay_days'] < 0) {
$m4is_0864dacae86e26c2nevtsd8y1 = false;
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] < 0) {
$m4is_0864dacae86e26c2nevtsd8y1 = false;

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['merchant_id'] < 0) {
$m4is_0864dacae86e26c2nevtsd8y1 = false;
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['price'] < 0) {
if (isset($m4is_yggq5j195mnp46m3zfr[$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id']]['PlanPrice']) ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['price'] = (double) $m4is_yggq5j195mnp46m3zfr[$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id']]['PlanPrice'];

}
else {
$m4is_0864dacae86e26c2nevtsd8y1 = false;
}
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['price'] = (double) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['price'];

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['quantity'] < 1) {
$m4is_0864dacae86e26c2nevtsd8y1 = false;
}
if ($m4is_0864dacae86e26c2nevtsd8y1) {

if (! ( (int) $m4is_wtqm5h9z3) ) {
$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_s7ym6t350bwzqesq3cmwmntrn7( $m4is_yfwwtft0q94j35s0f4a7acqhb );
$m4is_wtqm5h9z3 = (int) $m4is_yfwwtft0q94j35s0f4a7acqhb['Id'];

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug']) echo 'Credit Card ID = ', $m4is_wtqm5h9z3, '<br>';
}
}
if ( ! $m4is_wtqm5h9z3 ) {
$m4is_0864dacae86e26c2nevtsd8y1 = false;

}
$m4is_knxbec8fr3be1s2tkx0ydee0z = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_action'];
$m4is_exf0cmscjsfyk = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_goal'];

$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_tag'];
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_url'];

if ($m4is_0864dacae86e26c2nevtsd8y1) {
$m4is_rvm1d8cdzaf577wtttxcgawnzq = true;
$m4is_1fq23brgs = self::$m4is_wsme5a297xh0v6d5y->addRecurringAdv($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['allow_dupe'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['quantity'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['price'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['taxable'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['merchant_id'],
 $m4is_wtqm5h9z3, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['affiliate_id'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delay_days']);
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug']) echo 'Subscription ID  = ',
 $m4is_1fq23brgs, '<br>';
if ( (int) $m4is_1fq23brgs > 0) {
$m4is_0906y1a1fyz3wa = self::$m4is_wsme5a297xh0v6d5y->recurringInvoice($m4is_1fq23brgs);

$m4is_hartbe843crydzh = self::$m4is_wsme5a297xh0v6d5y->chargeInvoice($m4is_0906y1a1fyz3wa, _x('Memberium Subscription Purchase', 'memb_order_subscription',
 'memberium'), $m4is_wtqm5h9z3, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['merchant_id'], false);
if (! in_array($m4is_hartbe843crydzh['Code'],
 ['Declined', 'Error']) ) {
$m4is_knxbec8fr3be1s2tkx0ydee0z = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_action'];
$m4is_exf0cmscjsfyk = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_goal'];

$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_tag'];
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_url'];

}
else {
if (! $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['keep_failed']) {
self::$m4is_wsme5a297xh0v6d5y->deleteSubscription($m4is_1fq23brgs);

}
}
}
else {
if (stripos($m4is_1fq23brgs, 'Duplicate order') ) {
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug']) echo 'Duplicate Order Detected<br>';

$m4is_knxbec8fr3be1s2tkx0ydee0z = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['dupe_action'];
$m4is_exf0cmscjsfyk = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['dupe_goal'];

$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['dupe_tag'];
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['dupe_url'];

}
}
}
if (! empty($m4is_knxbec8fr3be1s2tkx0ydee0z) ) {
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug']) echo 'Running Actionsets = ',
 $m4is_knxbec8fr3be1s2tkx0ydee0z, '<br>';
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse($m4is_knxbec8fr3be1s2tkx0ydee0z, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

}
if (! empty($m4is_exf0cmscjsfyk) ) {
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug']) echo 'Running Goals = ', $m4is_exf0cmscjsfyk,
 '<br>';
self::$m4is_132xe588j->m4is_5qyk7ea4p2nw8ph($m4is_exf0cmscjsfyk, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
if (! empty($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) ) {
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug']) echo 'Adding/Removing Tags = ',
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, '<br>';
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug']) echo 'Syncing Contact = ', $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, '<br>';
self::$m4is_132xe588j->m4is_km2vptq0bwg($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug']) echo 'Redirect URL = ', $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, '<br>';
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug']) return '';

if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['first_only'] && ! empty($m4is_pp334hs6rfvw2vqjd400r3cmsn2kq) ) {
echo '<script type="text/javascript"> window.location.replace("',
 $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, '"); </script>';
exit;
}
}

public static function m4is_j91avkyxngkrnc8ga( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
static $m4is_pae00hv11 = 1;
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'autorun' => 0,
'button_text' =>
 'Buy Now',
'button_url' => '',
'clicked_button_text' => 'Processing Order',
'contact_id' => self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,

'creditcard_id' => 0,
'css_class' => '',
'debug' => 0,
'delete_failed' => 1,
'failure_actionset' => 0,
'failure_goal' => '',
'failure_tag' =>
 0,
'failure_url' => '',
'lead_affiliate_id' => 0,
'nojs' => 0,
'order_title' => 'Memberium 1 Click Order',
'plan_id' => 0,
'process_specials' =>
 true,
'product_ids' => '',
'promo_codes' => '',
'sale_affiliate_id' => 0,
'subscription_ids' => '',
'success_actionset' => 0,
'success_goal' =>
 '',
'success_tag' => 0,
'success_url' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['nojs'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['nojs'],
 false );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'],
 false );
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] < 1) {
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug']) {
echo '<p style="font-weight:bold;color:red">No contact specified.</p>';

}
return '';
}
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_ids']) ) {
$m4is_xnz2kndjgr447 = 0;
}
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_ids'] ) && empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['subscription_ids'] ) ) {
return '';

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['creditcard_id'] == 0) {
$m4is_yfwwtft0q94j35s0f4a7acqhb = m4is_kkk64g440mhf2xhxafr::m4is_crk55yxpgg3rab77w8a($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id']);

if (is_array($m4is_yfwwtft0q94j35s0f4a7acqhb) && ! empty($m4is_yfwwtft0q94j35s0f4a7acqhb)) {
$m4is_sns6r4z7z662q6ct9aqvw81ch29 = m4is_kkk64g440mhf2xhxafr::m4is_s7ym6t350bwzqesq3cmwmntrn7( $m4is_yfwwtft0q94j35s0f4a7acqhb );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['creditcard_id'] = $m4is_sns6r4z7z662q6ct9aqvw81ch29['Id'];
}
else {
return '';
}
}
if ( ! empty( $_COOKIE['infusionsoft_affiliate'] ) ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sale_affiliate_id'] = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sale_affiliate_id'] ) ? (int) $_COOKIE['infusionsoft_affiliate'] : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sale_affiliate_id'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['lead_affiliate_id'] = empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['lead_affiliate_id'] ) ? (int) $_COOKIE['infusionsoft_affiliate'] : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['lead_affiliate_id'];

}
$m4is_xnz2kndjgr447 = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['plan_id'];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['process_specials'] = (boolean) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['process_specials'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_ids'] = array_filter(array_map('trim', explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_ids']) ) );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_ids'] = array_filter(array_map('intval', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_ids']) );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['promo_codes'] = array_filter(array_map('trim', explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['promo_codes']) ) );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['subscription_ids'] = array_filter(array_map('trim', explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['subscription_ids']) ) );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['subscription_ids'] = array_filter(array_map('intval', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['subscription_ids']) );

$m4is_gv7vjyv2c6g3nepw6 = [
'contact_id' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'],
'creditcard_id' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['creditcard_id'],

'debug' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'],
'delete_failed' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['delete_failed'],

'failure_actionset' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_actionset'],
'failure_goal' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_goal'],

'failure_tag' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_tag'],
'failure_url' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_url'],

'lead_affiliate_id' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['lead_affiliate_id'],
'order_title' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_title'],

'payplan_id' => $m4is_xnz2kndjgr447,
'process_specials' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['process_specials'],
'product_ids' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['product_ids'],
'promo_codes' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['promo_codes'],
'sale_affiliate_id' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sale_affiliate_id'],
'subscription_ids' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['subscription_ids'],

'success_actionset' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_actionset'],
'success_goal' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_goal'],

'success_tag' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_tag'],
'success_url' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_url'],

];
$m4is_gv7vjyv2c6g3nepw6 = base64_encode(serialize($m4is_gv7vjyv2c6g3nepw6) );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_gv7vjyv2c6g3nepw6);

$m4is_7znqjnkvvbzyjs = 'memb_placeorder_form-' . $m4is_pae00hv11;
$m4is_d07drbz79j6ytbbf = 'memb_placeorder_button_' . $m4is_pae00hv11;
 
$m4is_qc36n7jdf = '';
$m4is_qc36n7jdf .= "<form name='{$m4is_7znqjnkvvbzyjs}' id='{$m4is_7znqjnkvvbzyjs}' method='post'>";
$m4is_qc36n7jdf .= "<input type='hidden' name='memb_form_type' value='memb_placeorder_button'>";

$m4is_qc36n7jdf .= "<input type='hidden' name='params' value='{$m4is_gv7vjyv2c6g3nepw6}'>";
$m4is_qc36n7jdf .= "<input type='hidden' name='form_id' value='{$m4is_pae00hv11}'>";

$m4is_qc36n7jdf .= "<input type='hidden' name='digital_signature' value='{$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn}'>";
$m4is_qc36n7jdf .= wp_nonce_field('memb_placeorder_' . $m4is_pae00hv11,
 '_wpnonce', true, false);
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_url']) ) {
$m4is_qc36n7jdf .= "<input type='submit' class='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_class']}' id='{$m4is_d07drbz79j6ytbbf}' value='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text']}'>";

}
else {
$m4is_qc36n7jdf .= "<input type='image' src='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_url']}' class='{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_class']}' id='{$m4is_d07drbz79j6ytbbf}'>";

}
$m4is_qc36n7jdf .= "</form>";
if (! $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['nojs']) {
$m4is_qc36n7jdf .= "
			<script>
			jQuery(document).ready(function() {
				jQuery('#{$m4is_d07drbz79j6ytbbf}').on('click', function() {
					jQuery('#{$m4is_d07drbz79j6ytbbf}').prop('value', '{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['clicked_button_text']}');
					jQuery('#{$m4is_d07drbz79j6ytbbf}').attr('disabled', 'disabled');
					jQuery('#{$m4is_7znqjnkvvbzyjs}').submit();
					return true;
				});
			});
			</script>
			";

}
$m4is_pae00hv11++;
return $m4is_qc36n7jdf;
}

public static function m4is_tyzvzzm39ck96g13ec9( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if (is_feed() ) {
return '';
}

$m4is_n7x0afpz = [
'field' => 'invoicetotal',
'order_id' => isset($_GET['orderId']) ? $_GET['orderId'] : 0,

'refresh' => false,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['refresh'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['refresh'],
 false);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] = strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field']) );

if (! $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['refresh']) {
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_id']) ) {
return '';

}
}

$m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1 = [
'Contact0Email',
'inf_field_Email',
];
foreach($m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1 as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) {
if (empty($m4is_zxwt8y3szyy1aenkh) ) {
$m4is_zxwt8y3szyy1aenkh = empty($_GET[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ? '' : $_GET[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6];

}
}
if ( empty( $m4is_zxwt8y3szyy1aenkh ) ) {
$m4is_zxwt8y3szyy1aenkh = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'memb_user', 'email', '' );
}
if ( empty( $m4is_zxwt8y3szyy1aenkh ) ) {
return '';
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_132xe588j->m4is_06a6ggsb0zg8pv1t4852qe($m4is_zxwt8y3szyy1aenkh);

if (empty($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) ) {
return '';
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['refresh']) {
if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
return '';

}
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['refresh'] || ( self::$m4is_132xe588j->m4is_xjjmvdkhw3a90() < $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_id']) ) {
m4is_bbwjksaqsay3yt68xq9afn::m4is_05djdppw();

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['refresh']) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_id'] = self::$m4is_132xe588j->m4is_xhjsmym9bm9s3wat7ar2f($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

}
$m4is_qpzk7kkc6v2bhxchqns6f9m = self::$m4is_132xe588j->m4is_f51yh9x2x5zd1b7gtq0g($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
$m4is_0gc8ph0aqh6nsn6 = [
'invoicetotal' =>
 0,
'totaldue' => 0,
'totalpaid' => 0,
];
if (is_array($m4is_qpzk7kkc6v2bhxchqns6f9m) ) {
foreach($m4is_qpzk7kkc6v2bhxchqns6f9m as $m4is_hdseqgtp1yd3cjxf20r) {
if ($m4is_hdseqgtp1yd3cjxf20r['JobId'] == $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order_id']) {
$m4is_0gc8ph0aqh6nsn6['invoicetotal'] = $m4is_0gc8ph0aqh6nsn6['invoicetotal'] + $m4is_hdseqgtp1yd3cjxf20r['InvoiceTotal'];

$m4is_0gc8ph0aqh6nsn6['totaldue'] = $m4is_0gc8ph0aqh6nsn6['totaldue'] + $m4is_hdseqgtp1yd3cjxf20r['TotalDue'];
$m4is_0gc8ph0aqh6nsn6['totalpaid'] = $m4is_0gc8ph0aqh6nsn6['totalpaid'] + $m4is_hdseqgtp1yd3cjxf20r['TotalPaid'];

}
}
}
return isset($m4is_0gc8ph0aqh6nsn6[$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field']]) ? $m4is_0gc8ph0aqh6nsn6[$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field']] : 0;

}

public static function m4is_dzcmprkgfxq30xkccsj8wyc( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if (! is_user_logged_in() ) {
return '';
}
if (is_feed() ) {
return '';
}
$m4is_zxwt8y3szyy1aenkh = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'email', '' );
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'password', '' );
$m4is_n7x0afpz = [
'css_id' => '',
'height' => 720,
'mode' => 'url', 
'width' => 540,
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
if (empty($m4is_zxwt8y3szyy1aenkh) || empty($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g) ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['mode'] = strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['mode']));


$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3;
$m4is_vjk77pbm0abqv418x9htja4w8yrsvv = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['height'];

$m4is_mcc0fckfph89thgsyftgndwgxk045 = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'];
$m4is_zxwt8y3szyy1aenkh = urlencode($m4is_zxwt8y3szyy1aenkh);

$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = urlencode($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g);
$m4is_gb01jqxh9ek2m = '';
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['mode'] == 'iframe') {
$m4is_gb01jqxh9ek2m = '<iframe src="https://' . $m4is_v4beyw7zqhr3 . '.infusionsoft.com/ClientLogin/loginProcess.jsp?email=' . $m4is_zxwt8y3szyy1aenkh . '&amp;password=' . $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g . '&amp;Login=Login" width="720" height="540" frameborder="0" scrolling="auto"></iframe>';

}
elseif ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['mode'] == 'url') {
$m4is_gb01jqxh9ek2m = 'https://' . $m4is_v4beyw7zqhr3 . '.infusionsoft.com/ClientLogin/loginProcess.jsp?email=' . $m4is_zxwt8y3szyy1aenkh . '&password=' . $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g . '&Login=Login';

}
elseif ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['mode'] == 'link') {
$m4is_gb01jqxh9ek2m = '<a target="clientlogin" href="https://' . $m4is_v4beyw7zqhr3 . '.infusionsoft.com/ClientLogin/loginProcess.jsp?email=' . $m4is_zxwt8y3szyy1aenkh . '&password=' . $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g . '&Login=Login">Click Me</a>';

}
elseif ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['mode'] == 'redirect') {
}
return $m4is_gb01jqxh9ek2m;
}



}
