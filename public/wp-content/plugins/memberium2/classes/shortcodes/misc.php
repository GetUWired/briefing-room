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

final class m4is_b9zpzxmgc4k1rwyed5 {
const FIELD_ALIASES = [
'country' => 'country_name',
'province' => 'region_name',
'region' =>
 'region_name',
'region_code' => 'region',
'state' => 'region_name',
];
static private $m4is_132xe588j;
static private $m4is_v4beyw7zqhr3;

static private $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
static private $m4is_zz74kb50;
static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');
self::$m4is_zz74kb50 = ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y();

self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();
}

static function m4is_8mvy8d2sgbmmcpjyj7nskw8ed( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {

if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'url' => '',
'background' => 0,
'resync' => 0,
'display' =>
 false,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
if ( ! self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
if ( ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'] ) ) {
$m4is_r53562w9befcb2kh7rm4p7n5 = [
'contactId' =>
 self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'Email' => m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'email', '' ),
];
$m4is_hartbe843crydzh = wp_remote_post( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'], ['body' => $m4is_r53562w9befcb2kh7rm4p7n5] );

}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['display'] ) {
return isset( $m4is_hartbe843crydzh['body'] ) ? $m4is_hartbe843crydzh['body'] : '';

}
return '';
}

static function m4is_d98wbexk5mmpz( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
static $m4is_gjscjmy5v39a7k4tbr7kbbywd3696x = 0;
if (is_feed() ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_gjscjmy5v39a7k4tbr7kbbywd3696x++;
$m4is_n7x0afpz = [
'style' => 'link',
'appname' => self::$m4is_v4beyw7zqhr3,
'url' => '/',

'css_id' => $m4is_gjscjmy5v39a7k4tbr7kbbywd3696x,
'button_text' => 'Login',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = self::$m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_gb01jqxh9ek2m = '';
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'contact', 'email', '' );
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'contact', 'password', '' );
$m4is_d60kn1d3yvprp62rs332 = new stdClass;
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['style'] == 'button' ) {
$m4is_d60kn1d3yvprp62rs332->action = "https://{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['appname']}.customerhub.net/web_services/auto_login";

$m4is_d60kn1d3yvprp62rs332->appname = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['appname'];
$m4is_d60kn1d3yvprp62rs332->username = $m4is_mr4hnyh6fa0p9sm0m8wfs1;

$m4is_d60kn1d3yvprp62rs332->password = $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g;
$m4is_d60kn1d3yvprp62rs332->button_text = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text'];

$m4is_d60kn1d3yvprp62rs332->css_id = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['css_id'];
$m4is_d60kn1d3yvprp62rs332->url = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'];

$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_vbq3wn8s( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_d60kn1d3yvprp62rs332 );
}
else {
$m4is_gb01jqxh9ek2m = 'https://' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['appname'] . '.customerhub.net/web_services/auto_login?email='. urlencode($m4is_mr4hnyh6fa0p9sm0m8wfs1) . '&password='. urlencode($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g) . '&to=' . urlencode($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url']);

}
return $m4is_gb01jqxh9ek2m;
}
static function m4is_y7v8mdrawza37ss71te( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'htmlattr' => '',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_13qf0ayc1v2nrvbee9x1n1axjgb = defined( 'MEMBERIUM_BETA' ) ? (bool) constant( 'MEMBERIUM_BETA' ) : false;
$m4is_gb01jqxh9ek2m = self::$m4is_132xe588j->m4is_5kywzj74m8ht8s0() . ( $m4is_13qf0ayc1v2nrvbee9x1n1axjgb ? 'beta' : '' );

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}
static function m4is_2d30h9pvqcc9kjn1zaabm42( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'htmlattr' => '',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_gb01jqxh9ek2m = m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ? _x('Valid', 'memb_license_status',
 'memberium') : _x('Invalid', 'memb_license_status', 'memberium');
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}
static function m4is_8h63p9ycne5hswq0d00yvg4v9gvsg( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if (is_feed() ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();



static $m4is_95dnkbqxkxsryj4 = 0;
$m4is_n7x0afpz = [
'id' =>
 '',
'size' => 256,
'data' => trim($m4is_bsamg3fezf),
'style' => '',
'class' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['data']) ) {
return '';
}
$m4is_95dnkbqxkxsryj4++;
$m4is_9yw8e8h1m49k2m1g64g = empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id']) ? 'qrcode_' . $m4is_95dnkbqxkxsryj4 : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['style'] = "width:{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size']}px;height:{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size']}px; display:block; {$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['style']}";

wp_enqueue_script('jquery-qrcode', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js', null, self::$m4is_132xe588j->m4is_5kywzj74m8ht8s0(),
 true);
$m4is_gb01jqxh9ek2m = "<p><div id=\"{$m4is_9yw8e8h1m49k2m1g64g}\" style=\"{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['style']}\" class=\"{$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['class']}\"></div></p>";

$m4is_gb01jqxh9ek2m .= '
			<script>
			jQuery(document).ready(function() {
				jQuery("#' . $m4is_9yw8e8h1m49k2m1g64g . '").qrcode({
					text : "' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['data'] . '",
					height : "' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'] . '",
					width : "' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'] . '"
				});
			});
			</script>';

return $m4is_gb01jqxh9ek2m;
}

static function m4is_frvx92r33pvh( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();




$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'feedurl' => 'http://feeds.feedburner.com/brainyquote/QUOTEBR',

'htmlattr' => '',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_gb01jqxh9ek2m = '';
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['feedurl'] > '') {

$m4is_0n3bgp3gb = fetch_feed($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['feedurl']);

if (! is_a($m4is_0n3bgp3gb, 'WP_Error')) {

$m4is_xcfxrz8cjr = $m4is_0n3bgp3gb->get_item_quantity(1);
$m4is_tvbymjevh6b41jfk8vg8ak = $m4is_0n3bgp3gb->get_items(0,
 $m4is_xcfxrz8cjr);
$m4is_gb01jqxh9ek2m =
'<span class="memberium_quotd_quote">' . $m4is_tvbymjevh6b41jfk8vg8ak[0]->get_description() . '<span> ' .
'<span class="memberium_quotd_attribution">' . $m4is_tvbymjevh6b41jfk8vg8ak[0]->get_title() . '<span>';

}
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}
static function m4is_fj04jxdefvy87ps9n( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if ( is_feed() ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'capture' => '',
'txtfmt' =>
 '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
ob_start();
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_bsamg3fezf = trim( $m4is_bsamg3fezf );
$m4is_sfhw7ra834vt12a2afzg7ngvv8bqj3a = self::$m4is_132xe588j->m4is_hscsx4pb3zt() . 'libraries/eval.php';

if ( ! class_exists( 'm4is_jmzx5mtr9b067q9yawwzb865' ) ) {
error_log("Memberium: [error] Eval Function Class file missing {$m4is_sfhw7ra834vt12a2afzg7ngvv8bqj3a}");

if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return "<p>ERROR: Eval Function Class file missing {$m4is_sfhw7ra834vt12a2afzg7ngvv8bqj3a}</p>";

}
}
else {
$m4is_hartbe843crydzh = m4is_jmzx5mtr9b067q9yawwzb865::m4is_hhhencf1z4jyw21bn2( $m4is_bsamg3fezf, function( $m4is_4thb5d0ak9,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 ) {
if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
global $post;
$m4is_7w9sx3x9v81jpa1n8mvrpcffnq = $m4is_4thb5d0ak9->getMessage();

$m4is_cy5neqy610rmwm15weavvc8fknvpdncf = $m4is_4thb5d0ak9->getLine();
$m4is_tz1rt7sbq40fade6e6rx = $post->ID;
$m4is_5tmqg45z37r82cfb67prh = "Error in shortcode contents: {$m4is_7w9sx3x9v81jpa1n8mvrpcffnq} at line {$m4is_cy5neqy610rmwm15weavvc8fknvpdncf} in post ID {$m4is_tz1rt7sbq40fade6e6rx}";

$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = htmlspecialchars($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4);
error_log($m4is_5tmqg45z37r82cfb67prh);

echo "<p><span style='color:red;font-weight:bold;'>Script Error:  </span>{$m4is_5tmqg45z37r82cfb67prh} / {$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4}</p>";

}
});
}
unset($m4is_bsamg3fezf);
$m4is_gb01jqxh9ek2m = ob_get_clean();

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], '', '', '');

}
static function m4is_fx23v79yk2z47a8ty66f11fkq5v4( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if (is_feed() ) {
return '';
}
$m4is_n7x0afpz = [
'field' => 'language',
'default' => '',
'only' => '',
'except' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] = strtolower($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field']);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only'] = array_map('strtolower',
 array_filter(array_map('trim', explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only']) ) ) );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except'] = array_map('strtolower',
 array_filter(array_map('trim', explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except']) ) ) );
$m4is_mkrn8k1ansywpg96grcdwxzvey910n3f = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'] );
$m4is_y1qf2vysasyv4bw69ddd0520txb4w = m4is_eknm14gbx0wvrnh6::m4is_4jyf8beswt97b8ggy1zpa();

$m4is_5k7ztpvcnta9n73fjty = (boolean) count($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only']);
$m4is_475kjqkke8st5a712 = (boolean) count($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except']);

$m4is_y1qf2vysasyv4bw69ddd0520txb4w = apply_filters('memberium_language_class_list', $m4is_y1qf2vysasyv4bw69ddd0520txb4w);

if (empty($m4is_mkrn8k1ansywpg96grcdwxzvey910n3f) ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'] = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'languages', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'] );
}
if ($m4is_5k7ztpvcnta9n73fjty || $m4is_475kjqkke8st5a712) {
foreach($m4is_y1qf2vysasyv4bw69ddd0520txb4w as $m4is_j8j55t8dz79m7 =>
 $m4is_rckjt7j1pfr4x77x) {
$m4is_rckjt7j1pfr4x77x = strtolower($m4is_rckjt7j1pfr4x77x);
if ($m4is_mkrn8k1ansywpg96grcdwxzvey910n3f <> $m4is_rckjt7j1pfr4x77x) {
if ($m4is_5k7ztpvcnta9n73fjty && ! in_array($m4is_rckjt7j1pfr4x77x,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only']) ) {
unset($m4is_y1qf2vysasyv4bw69ddd0520txb4w[$m4is_j8j55t8dz79m7]);
}
if ($m4is_rckjt7j1pfr4x77x <> $m4is_475kjqkke8st5a712 && in_array($m4is_rckjt7j1pfr4x77x,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except']) ) {
unset($m4is_y1qf2vysasyv4bw69ddd0520txb4w[$m4is_j8j55t8dz79m7]);
}
}
}
}
unset($m4is_rckjt7j1pfr4x77x,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only'], $m4is_475kjqkke8st5a712, $m4is_5k7ztpvcnta9n73fjty);

$m4is_gb01jqxh9ek2m = '';
foreach ($m4is_y1qf2vysasyv4bw69ddd0520txb4w as $m4is_6txb839c94e6vfdqf9 => $m4is_4t8f2da45cabh0je2pt27zcc9sn) {
$m4is_gb01jqxh9ek2m .= '<option value="' . $m4is_6txb839c94e6vfdqf9 . '" ' . ( ($m4is_mkrn8k1ansywpg96grcdwxzvey910n3f == strtolower($m4is_6txb839c94e6vfdqf9) ) ? ' selected ' : ' ') . '>' . $m4is_4t8f2da45cabh0je2pt27zcc9sn . '</option>';

}
unset($m4is_6txb839c94e6vfdqf9, $m4is_4t8f2da45cabh0je2pt27zcc9sn);
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
return $m4is_gb01jqxh9ek2m;

}
static function m4is_gmbk8jfr2em739x( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) :string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if (is_feed() ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'default' => 'America/Los_Angeles',

'except' => '',
'field' => 'timezone',
'only' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] = strtolower($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field']);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only'] = array_map('strtolower',
 array_filter(array_map('trim', explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only']) ) ) );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except'] = array_map('strtolower',
 array_filter(array_map('trim', explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except']) ) ) );
$m4is_05t3qkhxxmt7kxjcxznfpw1vs0 = strtolower( trim( m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'] ) ) );
if (empty($m4is_05t3qkhxxmt7kxjcxznfpw1vs0) ) {


}
$m4is_ycnpzqy2es4q93hja9z361e930 = m4is_m822t8xyvbc::m4is_wfhqbdkz3e4fq();

$m4is_5k7ztpvcnta9n73fjty = (boolean) count($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only']);
$m4is_475kjqkke8st5a712 = (boolean) count($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except']);

$m4is_ycnpzqy2es4q93hja9z361e930 = apply_filters('memberium_time_classzone_list', $m4is_ycnpzqy2es4q93hja9z361e930);
$m4is_gb01jqxh9ek2m = '';

if ($m4is_5k7ztpvcnta9n73fjty || $m4is_475kjqkke8st5a712) {
foreach($m4is_ycnpzqy2es4q93hja9z361e930 as $m4is_j8j55t8dz79m7 => $m4is_y9vxf7bvkrv9t7dbfarba4j) {
$m4is_y9vxf7bvkrv9t7dbfarba4j = strtolower($m4is_y9vxf7bvkrv9t7dbfarba4j);

if ($m4is_05t3qkhxxmt7kxjcxznfpw1vs0 <> $m4is_y9vxf7bvkrv9t7dbfarba4j) {
if ($m4is_5k7ztpvcnta9n73fjty && ! in_array($m4is_y9vxf7bvkrv9t7dbfarba4j,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only']) ) {
unset($m4is_ycnpzqy2es4q93hja9z361e930[$m4is_j8j55t8dz79m7]);
}
if ($m4is_y9vxf7bvkrv9t7dbfarba4j <> $m4is_475kjqkke8st5a712 && in_array($m4is_y9vxf7bvkrv9t7dbfarba4j,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except']) ) {
unset($m4is_ycnpzqy2es4q93hja9z361e930[$m4is_j8j55t8dz79m7]);
}
}
}
}
unset($m4is_y9vxf7bvkrv9t7dbfarba4j,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only'], $m4is_475kjqkke8st5a712, $m4is_5k7ztpvcnta9n73fjty);

foreach ($m4is_ycnpzqy2es4q93hja9z361e930 as $m4is_0ss5qgyk05j46nm45b => $m4is_f6zw8drx3a6nxrg1c97nyskfwxmhz) {
$m4is_gb01jqxh9ek2m .= '<option value="' . $m4is_0ss5qgyk05j46nm45b . '" ' . ( ($m4is_05t3qkhxxmt7kxjcxznfpw1vs0 == strtolower($m4is_0ss5qgyk05j46nm45b) ) ? ' selected ' : ' ') . '>' . $m4is_f6zw8drx3a6nxrg1c97nyskfwxmhz . '</option>';

}
unset($m4is_0ss5qgyk05j46nm45b, $m4is_f6zw8drx3a6nxrg1c97nyskfwxmhz);
return $m4is_gb01jqxh9ek2m;
}
static function m4is_1mb7hy96vvxcv4r5bnb0x9p4wrsa3( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if (is_feed() ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();


$m4is_n7x0afpz = [
'after' => '',
'before' =>
 '',
'capture' => '',
'default' => '',
'field' => 'country_name',
'htmlattr' => '',
'ip_address' => m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z(),

'provider' => '',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['provider'] = strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['provider']) );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] = strtolower(trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field']) );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['ip_address'] = empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['ip_address']) ? m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z() : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['ip_address'];

$m4is_e94ggrj3af6x87w956sf3gdd581ey = m4is_cyt7qan1n::m4is_2d2z2mc8jft2hg5scp0($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['ip_address'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['provider']);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] = self::FIELD_ALIASES[ $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] ] ?? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'];

$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_e94ggrj3af6x87w956sf3gdd581ey[ $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] ] ?? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'];

$m4is_gb01jqxh9ek2m = esc_html( $m4is_rqxytszfq5v6syth1csqqxvy5 );
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);
}
static function m4is_wf999we4fzs( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return 'n/a';

}
global $wp_embed;
return do_shortcode( $wp_embed->run_shortcode( $m4is_bsamg3fezf ) );
}
static function m4is_f5jj8ysa044az253z3mjz( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if (! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return '';
}
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return 'n/a';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
global $wp_embed;
$m4is_bsamg3fezf = do_shortcode( $wp_embed->run_shortcode( $m4is_bsamg3fezf ) );

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_q8dbdhqpz373mgzjcny29pte6mth7jz( $m4is_bsamg3fezf );
}

static function m4is_s4wg951gqm31gceq4tyrvw5r2wfe( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'capture' => '',
'txtfmt' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_gb01jqxh9ek2m = do_shortcode( m4is_25550fsqsnd4pn7txw2vh7x6::m4is_m85qr6zg( $m4is_bsamg3fezf ) );
if ( ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'] ) ) {
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_r85ch2nyjadv4rt71w7ns( $m4is_gb01jqxh9ek2m,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'] );
}
if ( ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] ) ) {
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_r631mq3vpgnpxhcrsqr414rtx1x( $m4is_gb01jqxh9ek2m,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
}
return $m4is_gb01jqxh9ek2m;
}
static function m4is_t09pr7xmpa0vfh7c3eg1vvhs( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'default' => 'United States',
'except' => '',
'field' =>
 'country',
'only' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] = strtolower($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field']);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only'] = array_map('strtolower',
 array_filter(array_map('trim', explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only']) ) ) );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except'] = array_map('strtolower',
 array_filter(array_map('trim', explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except']) ) ) );
$m4is_52an9j04kqjrw6s106bdzexqdd90tb = strtolower( trim( m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'] ) ) );
$m4is_5k7ztpvcnta9n73fjty = (boolean) count($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only']);

$m4is_475kjqkke8st5a712 = (boolean) count($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except']);
$m4is_8kwsvja4pgfgf0rgaadpc3 = apply_filters( 'memberium/country_list',
 self::$m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->getCountries() );
if ($m4is_5k7ztpvcnta9n73fjty || $m4is_475kjqkke8st5a712) {
foreach($m4is_8kwsvja4pgfgf0rgaadpc3 as $m4is_j8j55t8dz79m7 =>
 $m4is_r8pkh6ej4q) {
$m4is_r8pkh6ej4q = strtolower($m4is_r8pkh6ej4q);
if ($m4is_52an9j04kqjrw6s106bdzexqdd90tb <> $m4is_r8pkh6ej4q) {
if ($m4is_5k7ztpvcnta9n73fjty && ! in_array($m4is_r8pkh6ej4q,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['only']) ) {
unset($m4is_8kwsvja4pgfgf0rgaadpc3[$m4is_j8j55t8dz79m7]);
}
if ($m4is_r8pkh6ej4q <> $m4is_475kjqkke8st5a712 && in_array($m4is_r8pkh6ej4q,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['except']) ) {
unset($m4is_8kwsvja4pgfgf0rgaadpc3[$m4is_j8j55t8dz79m7]);
}
}
}
}
unset($m4is_r8pkh6ej4q,
 $m4is_475kjqkke8st5a712, $m4is_5k7ztpvcnta9n73fjty);
$m4is_gb01jqxh9ek2m = '';
foreach ($m4is_8kwsvja4pgfgf0rgaadpc3 as $m4is_r8pkh6ej4q) {
$m4is_gb01jqxh9ek2m .= '<option value="' . $m4is_r8pkh6ej4q . '" ' . ( ($m4is_52an9j04kqjrw6s106bdzexqdd90tb == strtolower($m4is_r8pkh6ej4q) ) ? ' selected ' : ' ') . '>' . $m4is_r8pkh6ej4q . '</option>';

}
return $m4is_gb01jqxh9ek2m;
}
static function m4is_5nz8ce6hvxjd3p2vxbhhbazn7rt( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'date' => '',
'htmlattr' => '',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_gb01jqxh9ek2m = '';
$m4is_tk817g6s424rams3865p2c2 = 0;
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date'] > '') {
$m4is_tk817g6s424rams3865p2c2 = (int) m4is_m822t8xyvbc::m4is_yqqz5bfrwv2vy5hnwg7nj4xgqravc8ac($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['date']);

}
if ($m4is_tk817g6s424rams3865p2c2 < 0) {
$m4is_gb01jqxh9ek2m = abs( $m4is_tk817g6s424rams3865p2c2 ) . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'];

}
elseif ($m4is_tk817g6s424rams3865p2c2 > 0) {
$m4is_gb01jqxh9ek2m = abs( $m4is_tk817g6s424rams3865p2c2 ) . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'];

}
else {
$m4is_gb01jqxh9ek2m = 0;
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], '', '');
}
static function m4is_7xsvns3pby2ekntvf4a( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
static $m4is_9yw8e8h1m49k2m1g64g = 0;
if (! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return '';
}
if (is_feed() ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'class' =>
 'memberium_message',
'names' => '',
'style' => '',
'txtfmt' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_9yw8e8h1m49k2m1g64g++;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['names'] = array_filter(array_map('trim',
 explode(',', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['names']) ) );
$m4is_91wggw8ph5y83j1 = [];
$m4is_zxyafjwhygrvg7a8yasscncwey4za0 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_5pj24bj9pdmwnkb4s91kvj('flash');

if (! empty($m4is_zxyafjwhygrvg7a8yasscncwey4za0) ) {
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['names']) ) {
foreach($m4is_zxyafjwhygrvg7a8yasscncwey4za0 as $m4is_5tmqg45z37r82cfb67prh) {
$m4is_91wggw8ph5y83j1[] = $m4is_5tmqg45z37r82cfb67prh;

}
}
else {
foreach($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['names'] as $name) {
if (isset($m4is_zxyafjwhygrvg7a8yasscncwey4za0[$name]) && $m4is_zxyafjwhygrvg7a8yasscncwey4za0[$name] !== '') {
$m4is_91wggw8ph5y83j1[] = $m4is_zxyafjwhygrvg7a8yasscncwey4za0[$name];

}
}
}
}
$m4is_gb01jqxh9ek2m = '';
foreach($m4is_91wggw8ph5y83j1 as $m4is_5tmqg45z37r82cfb67prh) {
if (empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before']) && empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']) ) {
$m4is_gb01jqxh9ek2m .= '<div class="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['class'] . '" style="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['style'] . '">' . $m4is_5tmqg45z37r82cfb67prh . '</div>';

}
else {
$m4is_gb01jqxh9ek2m .= $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'] . $m4is_5tmqg45z37r82cfb67prh . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'];

}
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}
static function m4is_93187f1eemrww2ahtt09m0c8e( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return 'n/a';

}
return do_shortcode(do_shortcode(m4is_25550fsqsnd4pn7txw2vh7x6::m4is_m85qr6zg($m4is_bsamg3fezf) ) );
}
static function m4is_kpc94xx0f0r02( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'htmlattr' => '',
'value' =>
 '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_gb01jqxh9ek2m = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['value'];
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false,
 $m4is_gb01jqxh9ek2m, '', '', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after']);

}
static function m4is_g78wg04fxptz2nsdkdnrm( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'end' => 1,
'start' => 0,
'step' => 1,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_gb01jqxh9ek2m = '';

return $m4is_gb01jqxh9ek2m;
}
}