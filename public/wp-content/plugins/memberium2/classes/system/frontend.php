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


final class m4is_ydtq2fsztd1eds9ced5y {
public $post_type = 0;
private $m4is_jrx8xz0m7tz4grk;
private $m4is_mwb9jmz313g106ztk8kns82q7jg5yp;

private $m4is_132xe588j;
private $m4is_x8p1zrv5ppkgcp398qwyj;
private $m4is_x162y3qy0wwyx;
private $m4is_tz1rt7sbq40fade6e6rx;
private $m4is_t3phhn82n7jkhgtvas;

private $m4is_pqecxfec342ksq5fzv1mg;
private $m4is_emt957wf2ncff55ancf = [];
private $m4is_k3crfaaajvt6qndj;
private $can_cache = FALSE;

private $contact_count = 0;
private $contact_id = 0;
private $core;
private $disable_login_redirect = FALSE;
private $error_message = '';

private $flash = '';
private $footer_code;
private $footer_json = [];
private $forloop = 0;
private $found_posts;
private $i2sdk_options = [];

private $in_init = FALSE;
private $in_list = 0;
private $index = 0;
private $is_administrator = false;
private $license_status = false;

private $login_redirect_enabled = true;
private $login_redirect_url = '';
private $nested_shortcodes = [];
private $optimizepress_page = false;

private $options = [];
private $redirect_url;
private $shortcode_tags = [];
private $shortcodes = [];
private $shortcodes_registered = false;

private $signature = false;
private $successful_upload;
private $url_id = 0;
protected $httppost_service;




public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
m4is_csmdzh4sncasvp1enyykf1bk::m4is_93g1spw7sp1wbdw8qrg( 'app_frontend',
 $this );
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_19ka9z5gq101z4();
$this->m4is_nkvchvkbdcx6g();
$this->m4is_5eragr7sh2yyj356m();

m4is_9d8n6yra072mpxd0pczne9::m4is_67nqhgcsb0p43k96hkt933aagr1c7c6();
}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_x8p1zrv5ppkgcp398qwyj = 0;
$this->m4is_jrx8xz0m7tz4grk = [];
$this->m4is_mwb9jmz313g106ztk8kns82q7jg5yp = [];
$this->m4is_x162y3qy0wwyx = [];

$this->m4is_tz1rt7sbq40fade6e6rx = 0;
$this->m4is_t3phhn82n7jkhgtvas = false;
}




private function m4is_19ka9z5gq101z4() : void {

$m4is_drfzqdp3 = [
'm4is_2k67em2mm' =>
 'classes/shortcodes/access',
'm4is_70ymtzyq0gag122n7ja46kpx8ng' => 'classes/shortcodes/affiliates',
'm4is_z1481399d2k4jsb31vhdgs5ymeg3ve' =>
 'classes/shortcodes/aws',
'm4is_5tde1v290sv4c35sr942yw03wt9tgm1' => 'classes/shortcodes/browser',
'm4is_psemnn0tqcdmhffqg5jht' => 'classes/catchers/catchers',

'm4is_zmbczdhcq5h3fv' => 'classes/shortcodes/crm',
'memberium_debug_shortcodes_class' => 'classes/shortcodes/debug',
'm4is_rn5kybmh4hvmhaxg1x' =>
 'libraries/ecommerce',
'm4is_v9dtrdvnt' => 'classes/shortcodes/ecommerce',
'm4is_easq6t3ghrf04v80xj94rg989sas' => 'classes/shortcodes/filebox',

'm4is_1twj3fqxg1b6mcv5297' => 'classes/shortcodes/gamification',
'm4is_b9zpzxmgc4k1rwyed5' => 'classes/shortcodes/misc',
'm4is_9rspj2sq' =>
 'classes/shortcodes/postgrid',
'm4is_ewpwbmgpes2qvj404h69gzdjybx2' => 'classes/shortcodes/debug',
'm4is_8wgwe2paj3vpec' => 'classes/shortcodes/user',

'm4is_xfgyxrmgr0te9bj4ywb8w05cjq3fjyh8' => 'classes/shortcodes/wordpress',
];
$this->m4is_132xe588j->m4is_30j08k6rn5y4pz4w( $m4is_drfzqdp3 );

}

private function m4is_nkvchvkbdcx6g() : void {
global $wpdb;
m4is_95wwwbse2er949xa6svafa6::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

do_action( 'memberium/shortcodes/add' );

$this->options = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b();
if (!is_array($this->options)) {

}
$this->i2sdk_options = $this->m4is_132xe588j->get_i2sdk_options();

if (!is_array($this->i2sdk_options)) {

}
$this->m4is_jrx8xz0m7tz4grk = [];

if (is_array($_GET)) {
foreach ($_GET as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
if (substr($m4is_j8j55t8dz79m7, 0, 4) == 'amp;') {
$m4is_nea5bmbtq4nrkrccvmhd8rj = substr($m4is_j8j55t8dz79m7,
 4);
$_GET[$m4is_nea5bmbtq4nrkrccvmhd8rj] = $m4is_rqxytszfq5v6syth1csqqxvy5;
unset($_GET[$m4is_j8j55t8dz79m7]);
}
}
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
add_action('template_redirect',
 [$this, 'm4is_hmtxjadxnedft'], PHP_INT_MIN );
}
$this->m4is_ekhp9c03qcsdmvvq34h5re70n406zk4d();
$this->m4is_3sezz26q();
add_filter('shortcode_atts_memberium',
 ['m4is_25550fsqsnd4pn7txw2vh7x6', 'm4is_7pct4g598y46']);
if (class_exists('WooCommerce')) {
add_filter('woocommerce_login_redirect',
 [$this, 'm4is_3k16a34b6y90dyhqhmjx7q5yzy'], PHP_INT_MAX, 2);
}

if (m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y()) {
if (!empty($_GET['memb_autologin'])) {
$autologin_enabled = !empty($this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'allow_autologin'));
$autologin_enabled = $autologin_enabled || !empty($this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'thrivecart_secret'));
if ($autologin_enabled) {
add_action('init', ['m4is_nx5pgw27fjja2gmg2fb3a17cd3dq6', 'm4is_pa3zn90hch396jcxr0v070j'],
 999999);
}
}
if (!empty($_GET['memb_setcookie'])) {
add_action('send_headers', [$this, 'm4is_z2cx2h9kj0z4ygq0sx4vw6pj8hfqqynq'], 1);

}
if (isset($_GET['memb_s3link']) && isset($_GET['verification'])) {
add_action('init', ['m4is_z1481399d2k4jsb31vhdgs5ymeg3ve', 'm4is_2s8hr436brbwe2q348ehzn442hgqf']);

}
}
}

private function m4is_5eragr7sh2yyj356m() : void {
$this->m4is_p1539p5pfm010pg5y5j2xyv();
$this->m4is_4n8hjj02svw909sgtdkc32mfyddw4e8();

$this->m4is_5nve4rvgv7g1tb35ht4();
$this->m4is_zppqeky74nfc56y5nq7226c509zmcchm();
$this->m4is_9b19ym63kvz69d1r();
$this->m4is_72p19y5j();

$this->m4is_53jwzp5q2s9zr();
$this->m4is_dm27771rys04k4jm1j03s();
$this->m4is_hw4ytyk0();
$this->m4is_vngaatjcdg();
$this->m4is_8209v2g14bgaexj2mx10mqs1md();

add_action( 'memberium/shortcodes/add', [$this, 'm4is_jp0rgxf2ytap1chmfg'] );
add_action( 'password_reset', [$this, 'm4is_q3fstws88'],
 2 );
add_action( 'pre_get_posts', [$this, 'm4is_45cx22exvymkw09467ftx4bmcrpzv9s'], PHP_INT_MAX );
add_action( 'profile_update', [$this,
 'm4is_m9vrzb112a36vj1m4kaqw8pe74b'], 10, 3 );
add_action( 'register_form', [$this, 'm4is_8tsq1e414fnj0twrxqs'], 5 );
add_action( 'transition_comment_status',
 [$this, 'm4is_ser0vxw7xrnbkev38dx532a'], 99, 3 );
add_action( 'wp_enqueue_scripts', [$this, 'm4is_nxe5sc3j8e6pf7'] ); 
add_action( 'wp_footer',
 [$this, 'm4is_fn0j3xm5xjkaervzfz2zfqrs78q'], 100 );
add_action( 'wp_head', [$this, 'm4is_cmy6ztjz59ks3wynt2aqn3fe81zx'] );
add_action( 'wp_head',
 [$this, 'm4is_ccdebhbq33b1g737qdy15k2mf4'], PHP_INT_MAX );
add_action( 'wp_insert_comment', [$this, 'm4is_znwth792bwpc2bs'], 99, 2 );

add_filter( 'document_title_parts', [$this, 'm4is_tpfg7f3sr5q7wwxgqk48ggcnsypf'], PHP_INT_MAX, 1);
add_filter( 'memberium/hide_titlebar',
 [$this, 'm4is_syj8sbjcexzwj17agnba065cbz'], 10, 1 );
add_filter( 'register', [$this, 'm4is_71mcc122dd0621'], 10, 1 );
add_filter( 'wp_search_stopwords',
 [$this, 'm4is_bwzxxjmway'], 10, 1 );
add_filter( 'wp_title', [$this, 'm4is_4gpwcs6m0f2gq'], PHP_INT_MAX, 3);
add_filter( 'wpal/blocks/can_access_asset',
 [$this, 'm4is_7sg9f2ayr7phwk21e754en2t805d'], 10, 4 );
add_filter( 'wpal/menu/can_access_item', [$this, 'm4is_7sg9f2ayr7phwk21e754en2t805d'],
 10, 4 );
add_filter( 'wpal/taxonomy/can_access_term', [$this, 'm4is_7sg9f2ayr7phwk21e754en2t805d'], 10, 4 );

}
private function m4is_dm27771rys04k4jm1j03s() : void {
add_action( 'init',
 [$this, 'm4is_730q2jkq66wp5may42a351zez9'], 1000 );
add_action( 'plugins_loaded', [$this, 'm4is_r7sjbwsk70ch3645cz1byp'] );
add_action( 'plugins_loaded',
 [$this, 'm4is_jp0rgxf2ytap1chmfg'], 1000 );
}
private function m4is_72p19y5j() : void {
add_filter( 'gettext', function( $m4is_gmwqmyvmsm9p1361p3ws2j18b65gj08,
 $m4is_cwv4aa9zak1r37, $m4is_e8h8dhk83hxkj818w ) {
return $m4is_gmwqmyvmsm9p1361p3ws2j18b65gj08 == 'Meta' ? 'Login' : $m4is_gmwqmyvmsm9p1361p3ws2j18b65gj08;

}, 10, 3 );
}
private function m4is_9b19ym63kvz69d1r() : void {
add_filter( 'widget_meta_poweredby', function() { return ''; } );
add_filter( 'wpal/widget/can_access_asset',
 [$this, 'm4is_7sg9f2ayr7phwk21e754en2t805d'], 10, 4 );
}
private function m4is_hw4ytyk0() : void {
add_action( 'the_post', [$this,
 'm4is_k09pjj8qjfza'], 10 );
add_filter( 'the_posts', [$this, 'm4is_xx246xebnwsmxy7tbrptd2j'], 10, 2 );
add_filter( 'get_pages', [$this,
 'm4is_65b45h2rj6a588vw56w5yj5f2q'], 11, 2 );
add_filter( 'memberium_has_post_access', [$this, 'm4is_6sdf2k2pd7rzyy98yagav7e1xhfte'],
 10, 2 );
add_filter( 'found_posts', [$this, 'm4is_2zjwgb8p'], 10, 2 );
}

private function m4is_8209v2g14bgaexj2mx10mqs1md() : void {
$this->m4is_k3crfaaajvt6qndj = is_user_logged_in() ? m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( get_current_user_id(),
 'memb_user', 'theme', '' ) : '';
add_action( 'template_redirect', [$this, 'm4is_3nycms15yck5vqdn0m05tv3f'], 100 );
add_action( 'template_redirect',
 [$this, 'm4is_snxvtrasms4w10nrz'], 15 );
add_action( 'template_redirect', [$this, 'm4is_rqpnr2qfrrwd4'] );
add_action( 'template_redirect',
 [$this, 'm4is_xay30x417bzfc8xe6wq08r59jwt8'], 25 );
add_action( 'template_redirect', [$this, 'm4is_fsc8j25adm2x'], 15 );
add_filter( 'option_stylesheet',
 [$this, 'm4is_sd5jw4zqzp5y4j771pp98egqjqmq'] );
add_filter( 'option_template', [$this, 'm4is_sd5jw4zqzp5y4j771pp98egqjqmq'] );
add_filter( 'template',
 [$this, 'm4is_sd5jw4zqzp5y4j771pp98egqjqmq'] );
}

private function m4is_vngaatjcdg() : void {
add_filter( 'wp_nav_menu_objects', [$this,
 'm4is_xh5rcs5vz4y0pjx1g9y'] ); 
add_filter( 'wp_nav_menu_objects', [$this, 'm4is_kbebzqffdewstg'], 100, 2 );
add_filter( 'wp_get_nav_menu_items',
 [$this, 'm4is_jcc66z3e1sptng61a5xth3r0hx202'], 1, 3 );
}


function m4is_9xe81b6ybjcswdf0w96r84d7m() : int {
return $this->m4is_x8p1zrv5ppkgcp398qwyj;

static $m4is_tz1rt7sbq40fade6e6rx = null;
if ( is_null( $m4is_tz1rt7sbq40fade6e6rx ) ) {
if ( is_single() ) {
if ( ! empty( $GLOBALS['wp_the_query']->queried_object) && is_a( $GLOBALS['wp_the_query']->queried_object,
 'WP_Post' ) ) {
$m4is_tz1rt7sbq40fade6e6rx = $GLOBALS['wp_the_query']->queried_object->ID;
}
elseif (! empty($GLOBALS['wp_the_query']->posts[0]) && is_a($GLOBALS['wp_the_query']->posts[0],
 'WP_Post') ) {
$m4is_tz1rt7sbq40fade6e6rx = $GLOBALS['wp_the_query']->posts[0]->ID;
}
}
else {
$m4is_tz1rt7sbq40fade6e6rx = 0;
}
}
return (int) $m4is_tz1rt7sbq40fade6e6rx;

}

function m4is_28gnk2tzsbx() : string {

static $m4is_yhdk2h7srcr7n5mzjnw7m6b = null;

if ( is_null( $m4is_yhdk2h7srcr7n5mzjnw7m6b ) ) {

if ( is_singular() ) {

if (!empty($GLOBALS['wp_the_query']->queried_object) && is_a($GLOBALS['wp_the_query']->queried_object,
 'WP_Post')) {

$m4is_yhdk2h7srcr7n5mzjnw7m6b = $GLOBALS['wp_the_query']->queried_object->post_type;
}
} else {

$m4is_yhdk2h7srcr7n5mzjnw7m6b = '';

}
}

return (string) $m4is_yhdk2h7srcr7n5mzjnw7m6b;
}



function m4is_80q7y7n7( string $m4is_hce1y1a4qd65zhnwsj, array $m4is_r53562w9befcb2kh7rm4p7n5 ) : void {
$this->m4is_mwb9jmz313g106ztk8kns82q7jg5yp[ $m4is_hce1y1a4qd65zhnwsj ] = $m4is_r53562w9befcb2kh7rm4p7n5;

$_COOKIE[$m4is_hce1y1a4qd65zhnwsj] = $m4is_r53562w9befcb2kh7rm4p7n5['value'];
}

function m4is_5fs91nj3y60() {
return $this->error_message;

}

function m4is_7y73m86td53bf8re8( $m4is_7w9sx3x9v81jpa1n8mvrpcffnq ) {
$this->error_message = $m4is_7w9sx3x9v81jpa1n8mvrpcffnq;
}
function m4is_24j1128ak8ghjk(): string {
return $this->flash;

}
function m4is_jav8wf80kpnr24zg3dppaay8brq4z( $m4is_5tmqg45z37r82cfb67prh ): void {
$this->flash = $m4is_5tmqg45z37r82cfb67prh;
}
function m4is_tjsj82hvr2t0b0y57bd($m4is_j8j55t8dz79m7,
 $m4is_rqxytszfq5v6syth1csqqxvy5 = false) {
if ($m4is_rqxytszfq5v6syth1csqqxvy5) {
$this->footer_json[$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
else {
unset($this->footer_json[$m4is_j8j55t8dz79m7]);
}
}
function m4is_aqmztr1z() {
return $this->redirect_url;
}
function m4is_2zc273hkf5r( $m4is_pqecxfec342ksq5fzv1mg ) {
$this->m4is_pqecxfec342ksq5fzv1mg = $m4is_pqecxfec342ksq5fzv1mg;

}
function m4is_1er0w96y6r524afwj843gk3q() {
$this->login_redirect_enabled = false;
}

function m4is_2xstkbjk1xt07() {
$this->login_redirect_enabled = true;

}
function m4is_bw82cy1jxnmkhtbvkezjv4y3ntky($m4is_t3phhn82n7jkhgtvas = true) {
$this->m4is_132xe588j->m4is_bw82cy1jxnmkhtbvkezjv4y3ntky($m4is_t3phhn82n7jkhgtvas);

}
function m4is_ny2mdztd21t37jnyrad5980cps88jd() {
return (bool) $this->m4is_132xe588j->m4is_ny2mdztd21t37jnyrad5980cps88jd();
}
function m4is_ngzynabxs4340r3mmcgbyjd($caching) {
$this->can_cache = (boolean) $caching;

if (! $caching) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
}
}
function m4is_q9gn8j4b6axqq8wv3kx() {
return $this->can_cache;

}




function m4is_ekhp9c03qcsdmvvq34h5re70n406zk4d() {

global $allowedposttags;

$tagsAndAttributes = [
'a' => ['href'],
'iframe' =>
 ['src', 'srcdoc'],
'input' => ['name', 'placeholder', 'value'],
'option' => ['value'],
'progress' => ['max', 'value'],
'source' =>
 ['src'],
'textarea' => ['placeholder', 'value']
];

foreach ($tagsAndAttributes as $tag => $attributes) {

foreach ($attributes as $attribute) {

$allowedposttags[$tag][$attribute] = 1;

}
}
}



function m4is_r7sjbwsk70ch3645cz1byp() {

add_filter('op_check_page_availability', [$this, 'm4is_3atd7w8kdd0rv4g']);

if (class_exists('WooCommerce') ) {
add_action('woocommerce_customer_save_address',
 [$this, 'm4is_geefc7cdt4t'], 10, 2);
add_action('woocommerce_register_form_start', [$this, 'm4is_ja6d21mn']);
add_action('woocommerce_register_post',
 [$this, 'm4is_9ccc15qk'], 10, 3);
add_action('woocommerce_created_customer', [$this, 'm4is_rs03p3ww88dsn6jdtnjva'], 999999, 3);
}


}


public function m4is_vtq2e1nssv1v7a6g2d8xarhzby6j7g(): void {
return;

if (! isset($_SERVER['PHP_AUTH_USER']) ) {
header('WWW-Authenticate: Basic realm="RSS Feeds"');
header('HTTP/1.0 401 Unauthorized');

echo 'Feeds from this site are private';
exit;
} else {
if (is_wp_error(wp_authenticate($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) ) ) {
header('WWW-Authenticate: Basic realm="RSS Feeds"');

header('HTTP/1.0 401 Unauthorized');
echo 'Username and password were not correct';
exit;
}
}
}

public function m4is_yh60ejt3msxdcepqgrtnkz(array $m4is_8hphzjz7d): array {

$m4is_8hphzjz7d = array_merge($m4is_8hphzjz7d,
 ['memb_php', 'memb_raw']);
return $m4is_8hphzjz7d;
}

public function m4is_bwzxxjmway(array $m4is_sew3v638d46fh2byyeybpaxm94dp14): array {
$m4is_sew3v638d46fh2byyeybpaxm94dp14[] = 'memb_';

$m4is_sew3v638d46fh2byyeybpaxm94dp14[] = 'membc_';
return $m4is_sew3v638d46fh2byyeybpaxm94dp14;
}
public function m4is_2zjwgb8p(int $m4is_ykvk2xpxr7whvwr,
 WP_Query $m4is_j34bmw9dcjexfj1qpz): int {
if ($this->found_posts !== null) {
$m4is_j34bmw9dcjexfj1qpz->found_posts = $this->found_posts;

$this->found_posts = null;
return $m4is_j34bmw9dcjexfj1qpz->found_posts;
}
return $m4is_ykvk2xpxr7whvwr;
}


public function m4is_z2cx2h9kj0z4ygq0sx4vw6pj8hfqqynq(): void {
$m4is_hce1y1a4qd65zhnwsj = trim($_GET['memb_setcookie']);

$m4is_rpa6825s4fhmzmjjxpap05q92nf198x = isset($_GET['expiration']) ? strtotime($_GET['expiration']) : time() + YEAR_IN_SECONDS;
$m4is_rqxytszfq5v6syth1csqqxvy5 = isset($_GET['value']) ? $_GET['value'] : '';

$m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp = isset($_GET['mode']) ? strtolower($_GET['mode']) : 'replace';
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = isset($_GET['redir']) ? strtolower($_GET['redir']) : '/';

$m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = isset($_GET['path']) ? strtolower($_GET['path']) : '/';
$m4is_e8h8dhk83hxkj818w = isset($_GET['domain']) ? strtolower($_GET['domain']) : $_SERVER['HTTP_HOST'];


if ($m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp == 'append') {
$m4is_rqxytszfq5v6syth1csqqxvy5 = implode(',', array_unique(explode(',',
 $_COOKIE[$m4is_hce1y1a4qd65zhnwsj] . ',' . trim($m4is_rqxytszfq5v6syth1csqqxvy5) ) ) );
}
$m4is_hartbe843crydzh = setcookie($m4is_hce1y1a4qd65zhnwsj,
 $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_rpa6825s4fhmzmjjxpap05q92nf198x, $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1, $m4is_e8h8dhk83hxkj818w);

m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
wp_redirect($m4is_tfecza742dzhrkkbv781dnbvf40m6);
exit;
}
public function m4is_grrtgjn2mbhcsdx4(): void {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

if ( empty( $_GET['operation'] ) ) {
return;
}
m4is_7xvypgwes::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_132xe588j->m4is_30j08k6rn5y4pz4w( [
'm4is_f77p31ebhq6anxe5y3e79hnzyxz95m7' => 'classes/crm/http-posts/copy-fields',
'm4is_sm69jc471yfd5ayrhbvdxp48xm2s' =>
 'classes/crm/http-posts/delete-contact',
'm4is_emt3qp2dn0cg8env3z002vjj' => 'classes/crm/http-posts/makepass',
'm4is_brzazdage4pjwyb328b2k4' =>
 'classes/crm/http-posts/math',
'm4is_3b99gayewv4kqqpznn0p2h47w4' => 'classes/crm/http-posts/prettify',
'm4is_5n7rymgtd52j4rskb65wv138' =>
 'classes/crm/http-posts/set-date',
'm4is_brjhr971ms2m' => 'classes/crm/http-posts/get-post',
'm4is_0tdd1yqaenjpxgeed276v' => 'classes/crm/http-posts/update-contact',

'm4is_z2ar7bb9b4d7dw37j5djcd2pt31v' => 'classes/crm/http-posts/scan-subscriptions',
] );
$m4is_m5w0vdwym09 = [
'add-contact' => [$this,
 'm4is_s5djkyfcesk04fnj285wwtvjkr6bn'],
'add-event' => [$this, 'm4is_g0cvedm4k'],
'add-issue' => [$this, 'm4is_4e6pepbw93jxx74ffmhak53vgg682wa'],

'add-tags' => [$this, 'm4is_ajxkdj4gxdyp3y04k9c0a6xn6vkte12r'],
'add-user' => [$this, 'post_add_user'],
'copy-next-billing' => [$this,
 'm4is_g0hmq42edz016t'],
'expire-subs' => [$this, 'm4is_h4vvyf1hz'],
'foo' => [$this, 'm4is_b3t782xn292yve2z5'],
'gdpr-erase' => [$this,
 'httppost_gdpr_erase'],
'gdpr-export' => [$this, 'httppost_gdpr_export'],
'optin' => [$this, 'm4is_x6e9fh27y5z'],
'optout' => [$this,
 'm4is_mayckar84506njxjph6bt1d'],
'contact-delete' => ['m4is_sm69jc471yfd5ayrhbvdxp48xm2s', 'm4is_de8n8qy4mmtnkq33p'],
'contact-update' =>
 ['m4is_0tdd1yqaenjpxgeed276v', 'm4is_de8n8qy4mmtnkq33p'],
'copy-fields' => ['m4is_f77p31ebhq6anxe5y3e79hnzyxz95m7', 'm4is_de8n8qy4mmtnkq33p'],
 
'delete-contact' => ['m4is_sm69jc471yfd5ayrhbvdxp48xm2s', 'm4is_de8n8qy4mmtnkq33p'],
'get-post' => ['m4is_brjhr971ms2m', 'm4is_de8n8qy4mmtnkq33p'],
 
'makepass' => ['m4is_emt3qp2dn0cg8env3z002vjj', 'm4is_de8n8qy4mmtnkq33p'],
'math' => ['m4is_brzazdage4pjwyb328b2k4', 'm4is_de8n8qy4mmtnkq33p'],

'prettify-contact' => ['m4is_3b99gayewv4kqqpznn0p2h47w4', 'm4is_de8n8qy4mmtnkq33p'],
'set-date' => ['m4is_5n7rymgtd52j4rskb65wv138',
 'm4is_de8n8qy4mmtnkq33p'],
'update-contact' => ['m4is_0tdd1yqaenjpxgeed276v', 'm4is_de8n8qy4mmtnkq33p'], 
'scan-subscriptions' => ['m4is_z2ar7bb9b4d7dw37j5djcd2pt31v',
 'm4is_de8n8qy4mmtnkq33p'], 
];
$m4is_m5w0vdwym09 = apply_filters('memberium/httpppost_services/register', $m4is_m5w0vdwym09);
$m4is_5t4jycfd0a6 = strtolower( $_GET['operation'] );

if ( array_key_exists( $m4is_5t4jycfd0a6, $m4is_m5w0vdwym09 ) ) {
$m4is_95jcy59jv50devc8s3bd = $m4is_m5w0vdwym09[$m4is_5t4jycfd0a6];

$this->m4is_132xe588j->m4is_z3a9w5p26hzy494qq03phpeagexts( true );
add_action( 'i2sdk_http_post', $m4is_95jcy59jv50devc8s3bd, 10, 2 );

}
}

public function m4is_730q2jkq66wp5may42a351zez9(): void {
$this->is_administrator = current_user_can( 'manage_options' );
if ( class_exists( 'WooCommerce' ) ) {
$this->m4is_9m2xvp9dp4mmvca0few6ge();

}
add_action( 'wp_login_failed', ['m4is_an0pxqdph6ax26586c', 'm4is_dpvcj19am24b7ks'], -1, 2 ); 

$m4is_kwyyytym7h39 = array_filter( explode( ',',
 $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'allow_wpadmin_titlebar' ) ) );
$m4is_badvcxhyfk9gk12 = true;

if ( ! empty( $m4is_kwyyytym7h39 ) ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();
foreach( $m4is_kwyyytym7h39 as $m4is_h57f3gcgvjpvxfrymxxpdyr6r5 ) {
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_h57f3gcgvjpvxfrymxxpdyr6r5 ) ) {
$m4is_badvcxhyfk9gk12 = false;
}
}
}
$m4is_badvcxhyfk9gk12 = apply_filters( 'memberium/hide_titlebar',
 $m4is_badvcxhyfk9gk12 );
if ( $m4is_badvcxhyfk9gk12 ) {
add_filter( 'show_admin_bar', '__return_false', 999999 );
}
}

public function m4is_syj8sbjcexzwj17agnba065cbz(bool $m4is_badvcxhyfk9gk12 ): bool {
if ( $m4is_badvcxhyfk9gk12 ) {

$m4is_e8aekvppbj5ek7 = [
'impersonated_by_',

'wordpress_user_sw_olduser_',
'wordpress_user_sw_secure_',
];
foreach( $m4is_e8aekvppbj5ek7 as $m4is_zxa05fq9f81p8g ) {
if ( ! empty( $_COOKIE[$m4is_zxa05fq9f81p8g . COOKIEHASH] ) ) {
return false;

}
}
}
return $m4is_badvcxhyfk9gk12;
}


public function m4is_3nycms15yck5vqdn0m05tv3f(): void {
if ( is_404() && $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'cache_flush' ) ) {
flush_rewrite_rules();
}
}

public function m4is_xay30x417bzfc8xe6wq08r59jwt8(): void {
if ( is_user_logged_in() ) {
return;

}
$m4is_c2fgawhnzkr8b4ydnz48h70s = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'site_lock_enabled' );

if ( ! $m4is_c2fgawhnzkr8b4ydnz48h70s ) {
return;
}
$m4is_tz1rt7sbq40fade6e6rx = (int) $this->m4is_9xe81b6ybjcswdf0w96r84d7m();
$m4is_sv30znqwesr2mp2mktgyv23854nkc7v2 = (bool) apply_filters( 'memberium/sitelock/disable',
 false, $m4is_tz1rt7sbq40fade6e6rx ); 
if ( $m4is_sv30znqwesr2mp2mktgyv23854nkc7v2 ) {
return;
}
$m4is_3mp0nd4jv65b708ytkc3 = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'login_url' );
if ( $m4is_tz1rt7sbq40fade6e6rx ) {
if ( $m4is_tz1rt7sbq40fade6e6rx === $m4is_3mp0nd4jv65b708ytkc3) {
return;
}

$m4is_cfyqnkg97pfv87svx0r7fh21etg = (bool) get_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_force_public', true );
if ( $m4is_cfyqnkg97pfv87svx0r7fh21etg ) {
return;
}
}
if ( $m4is_3mp0nd4jv65b708ytkc3 ) {
$m4is_pqecxfec342ksq5fzv1mg = get_permalink( $m4is_3mp0nd4jv65b708ytkc3 );

$m4is_pqecxfec342ksq5fzv1mg = add_query_arg( 'redirect_to', $_SERVER['REQUEST_URI'], $m4is_pqecxfec342ksq5fzv1mg );
}
else {
$m4is_pqecxfec342ksq5fzv1mg = wp_login_url( $_SERVER['REQUEST_URI'] );

}
wp_redirect($m4is_pqecxfec342ksq5fzv1mg, 302, 'Memberium Sitelock');
exit;
}

public function m4is_333cmxt9be8s23b0krw03mvkywcqb4qa(): void {
return;

global $post, $wp_query;
if ( ! is_a( $post, 'WP_Post' ) ) {
return;
}
if ( current_user_can( 'manage_options' ) ) {
return;
}
$m4is_tz1rt7sbq40fade6e6rx = $post->ID;

$m4is_r7mxjxrgcx = $this->m4is_krs2avqy019m3mx( $m4is_tz1rt7sbq40fade6e6rx );
if ( ! $m4is_r7mxjxrgcx ) {
$m4is_sa1zwmzw = $this->m4is_v75x9g18kvwf86vy5e0pgh6( $m4is_tz1rt7sbq40fade6e6rx,
 false );
if ( $m4is_sa1zwmzw == 'redirect' ) {
$this->m4is_04xfq1nph5g53725w9( $m4is_tz1rt7sbq40fade6e6rx, 'General Redirect ' . __LINE__ );

}
elseif ( $m4is_sa1zwmzw == 'hide' ) {
global $wp_query;
$wp_query->set_404();
status_header( 404 );
get_template_part( 404 );
exit;

}
elseif ( $m4is_sa1zwmzw == 'excerpt' ) {
$post->post_excerpt = $this->m4is_qvnqbzg7cjmcq6p67xf87( $post );
}
}
return;
}

public function m4is_rqpnr2qfrrwd4(): void {
global $bp;

global $post;
$m4is_tz1rt7sbq40fade6e6rx = $this->m4is_9xe81b6ybjcswdf0w96r84d7m();
$this->post_type = $this->m4is_28gnk2tzsbx();
$_GET['viewable'] = isset( $_GET['viewable'] ) ? $_GET['viewable'] : '';


if ( $this->m4is_132xe588j->m4is_bryfhmxgee45drazs67enzk92pw8f2kn() ) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
return;

}
if ( isset( $_GET['action'] ) && $_GET['action'] == 'confirmregistration' ) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

m4is_v4rapmyrqjxsakynt80fj69rp8::m4is_7qpg3a9rm1();
}

if (! empty($_GET['filebox_id']) && $_GET['filebox_id'] > 0) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

m4is_sgvby6tzxdj27z0k9vsngxtx::m4is_txsy89dtn9xjayeqsg011enz2c( (int) $_GET['filebox_id'], $_GET['filename'], (bool) $_GET['viewable']);

exit;
}
if (! empty( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'cache_bust') ) ) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

}

if (! empty($bp) ) {
if (! empty($bp->groups->current_group->id) ) {
return;
}
}
if ( is_404() && substr($_SERVER['REQUEST_URI'],
 0, 7) == '/prtctd') {
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = str_ireplace( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'default_page_redirect'), '{{current.url}}', get_site_url() );
wp_redirect($m4is_tfecza742dzhrkkbv781dnbvf40m6, 302, 'Prtctd Redirect');

exit;
}
if (get_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_is4wp_discourage_cache', true) ) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

}
if ( is_singular() ) {
if ($m4is_tz1rt7sbq40fade6e6rx > 0 && ! $this->m4is_krs2avqy019m3mx($m4is_tz1rt7sbq40fade6e6rx) ) {
$m4is_sa1zwmzw = $this->m4is_v75x9g18kvwf86vy5e0pgh6($m4is_tz1rt7sbq40fade6e6rx,
 FALSE);
if ($m4is_sa1zwmzw == 'redirect') {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$this->m4is_04xfq1nph5g53725w9( $m4is_tz1rt7sbq40fade6e6rx,
 'General Redirect ' . __LINE__ );
}
}
}
wp_enqueue_script('jquery');
}
public function m4is_45cx22exvymkw09467ftx4bmcrpzv9s(): void {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;

}
if ( ! function_exists( 'is_user_logged_in' ) || ! function_exists( 'wp_set_current_user' ) ) {
return;
}

if ( strpos( 'wp-json/',
 $_SERVER['REQUEST_URI'] ) !== false ) {
return;
}
if ( is_user_logged_in() ) {
return;
}
if ( defined( 'COOKIEHASH' ) ) {
$m4is_zd1mnpszkt4f = 'wordpress_logged_in_' . COOKIEHASH;

$m4is_1brp7m41z = isset( $_COOKIE[$m4is_zd1mnpszkt4f] ) ? wp_parse_auth_cookie( $_COOKIE[$m4is_zd1mnpszkt4f] ) : false;
if ( ! empty( $m4is_1brp7m41z['username'] ) ) {
wp_set_current_user( null,
 $m4is_1brp7m41z['username'] );
return;
}
}
}


public function m4is_fsc8j25adm2x(): void {
if ( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'two_pass_shortcode_filter') ) {
$m4is_tz1rt7sbq40fade6e6rx = $this->m4is_9xe81b6ybjcswdf0w96r84d7m();
if (defined('OP_VERSION') ) {
$this->optimizepress_page = get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_optimizepress_pagebuilder', true) == 'Y';
if ($this->optimizepress_page) {
add_filter('comment_text', [$this, 'm4is_065r33wdst2hdngtx2r'],
 1, 1);
$this->m4is_qk0wmhnm();
}
}
else {
add_filter('the_content', [$this, 'm4is_c8gwpy7fw4tmmeqjehtefjc2kpygbndh'], 1, 1);
}
}
add_filter('no_texturize_shortcodes',
 [$this, 'm4is_yh60ejt3msxdcepqgrtnkz']);
}

function m4is_065r33wdst2hdngtx2r($m4is_bsamg3fezf) {
$m4is_bsamg3fezf = preg_replace('/\[(\w.*)\]/',
 '[[$1]]', $m4is_bsamg3fezf);
return $m4is_bsamg3fezf;
}

function m4is_3atd7w8kdd0rv4g( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 ) {
global $op_content_layout;

$this->m4is_jp0rgxf2ytap1chmfg();
$op_content_layout = do_shortcode( $op_content_layout );
return $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7;

}




function m4is_33p9c5xxywb() {
}

function m4is_8tsq1e414fnj0twrxqs() {
if ( ! $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'extended_reg_fields', false ) ) {
return;
}
$m4is_b73qrd73yttyc75 = apply_filters( 'memberium/registration_fields/custom', false );

if ( $m4is_b73qrd73yttyc75 ) {
return;
}
?>
		<script type="text/javascript" src="<?php echo site_url('/wp-includes/js/jquery/jquery.js');
 ?>"></script>
		<script>
		jQuery('#user_email').attr('type', 'email');
		jQuery('#user_reg_login').attr('type', 'email');

		jQuery('#registerform #user_login').parent().remove();
		jQuery('#user_reg_login').parent().remove();

		jQuery('#user_email').blur(function() {
			jQuery("#user_login2").val(jQuery("#user_email").val() );
		});
		jQuery('#user_reg_email').blur(function() {
			jQuery("#user_login2").val(jQuery("#user_reg_email").val() );
		});
		</script>
		<input type="hidden" id="user_login2" name="user_login" value="">
		<p>
		<label>
		First Name<br/>
		<input id="firstname" type="text" tabindex="30" size="25" value="" name="firstname" />
		</label>
		</p>
		<p>
		<label>
		Last Name<br/>
		<input id="lastname" type="text" tabindex="30" size="25" value="" name="lastname" />
		</label>
		</p>
		<?php
 }

function m4is_6e7zav5x0v18wdg99h( $m4is_cwv4aa9zak1r37 ) {
if ( $m4is_cwv4aa9zak1r37 == 'Lost your password?' ) {
$m4is_cwv4aa9zak1r37 = '';

}
return $m4is_cwv4aa9zak1r37;
}

function m4is_195d0sfmzsavm5txxx1t2p8dvc7() {
return FALSE;
}





public function m4is_sd5jw4zqzp5y4j771pp98egqjqmq( string $m4is_cjr2kby5c5pq94apvv7v746ax51850p ) : string {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();


if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return $m4is_cjr2kby5c5pq94apvv7v746ax51850p;
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_k3crfaaajvt6qndj = $this->m4is_k3crfaaajvt6qndj;
if ( empty( $this->m4is_k3crfaaajvt6qndj ) ) {
return $m4is_cjr2kby5c5pq94apvv7v746ax51850p;

}
$m4is_5cwxte5s0w98metxktf = wp_get_themes();
if ( ! array_key_exists( $this->m4is_k3crfaaajvt6qndj, $m4is_5cwxte5s0w98metxktf ) ) {
return $m4is_cjr2kby5c5pq94apvv7v746ax51850p;

}
$m4is_v1q5pgt7fa1tns = current_filter();
if ( $m4is_v1q5pgt7fa1tns == 'option_template' || $m4is_v1q5pgt7fa1tns == 'template' ) {
return $m4is_5cwxte5s0w98metxktf[$this->m4is_k3crfaaajvt6qndj]->Template;

}
return $this->m4is_k3crfaaajvt6qndj;
}




function m4is_z04fs8nwd0rqxzbyykada5veejkm( $m4is_75jz4hx50qan9x39g42t9kvd5ccqa8w = true ) {
if (! empty($_GET['action']) && $_GET['action'] == 'logout') {
$m4is_75jz4hx50qan9x39g42t9kvd5ccqa8w = true;

}

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $this->m4is_132xe588j->m4is_dmfr81331w27fa3bzjyvhkbh5a('logout/contact_id', 0);
if (! empty($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) ) {
$m4is_6v83jpcacc5t0q8fxk6p52prs = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'logout_actionset', 0);
$m4is_0jvy5ptr0vy = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'logout_tag',
 0);
$this->m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse($m4is_6v83jpcacc5t0q8fxk6p52prs, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx($m4is_0jvy5ptr0vy,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
if (empty($_GET['redirect_to']) ) {
$url = $this->m4is_132xe588j->m4is_e6neacb8dq();
}
else {
$url = $_GET['redirect_to'];

}
setcookie( 'nextend_uniqid', '', -1, '/');
$this->m4is_132xe588j->m4is_m9bcx7dqv78();
if ($m4is_75jz4hx50qan9x39g42t9kvd5ccqa8w) {
wp_redirect( $url );

exit;
}
}

function m4is_q3fstws88($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, $m4is_1farjt7yk7tdb = false) {
$m4is_akd4cjvbhtckz56 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'local_auth_only');
if (! $m4is_akd4cjvbhtckz56) {
if (! $m4is_1farjt7yk7tdb) {
if (isset($_POST['pass1']) && $_POST['pass1'] > '') {
$m4is_1farjt7yk7tdb = $_POST['pass1'];

}
elseif (isset($_POST['password_1']) && $_POST['password_1'] > '') {
$m4is_1farjt7yk7tdb = $_POST['password_1'];
}
}
if (empty($m4is_1farjt7yk7tdb) ) {
return;

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID);

if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
return;
}



$m4is_djqjd6pgpfd0ssabba8xa56r49rjk57h = [
$this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'password_field') => $m4is_1farjt7yk7tdb,
];
$m4is_hartbe843crydzh = m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_djqjd6pgpfd0ssabba8xa56r49rjk57h); 
}
}

public function m4is_m9vrzb112a36vj1m4kaqw8pe74b( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 ?WP_User $m4is_34sz9hn4s3deef8tw, array $m4is_qtbxvkfh3sg100sfw8q054dcrh ) : void {
if ( is_admin() ) {
return;
}
if ( $this->m4is_132xe588j->m4is_7tjb4yq96fdpbh02g3pc23() ) {
return;

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return;
}
$m4is_1xc5c9k80sc1yan71 = ( $m4is_qtbxvkfh3sg100sfw8q054dcrh['user_email'] !== $m4is_34sz9hn4s3deef8tw->user_email );




if ( $m4is_1xc5c9k80sc1yan71 ) {
if ( ! empty( $m4is_qtbxvkfh3sg100sfw8q054dcrh['user_email'] ) ) {
$this->m4is_132xe588j->m4is_eqvbvnvjx( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_qtbxvkfh3sg100sfw8q054dcrh['user_email'] );

}
}

$m4is_akd4cjvbhtckz56 = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'local_auth_only', false );
if ( $m4is_akd4cjvbhtckz56 ) {
return;
}
$m4is_wte2qk9hdk1zj7 = (string) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field', 'Password' );
if ( empty( $m4is_akd4cjvbhtckz56 ) ) {
$new_password = '';

if ( ! empty($_POST['pass1']) && ! empty($_POST['pass2']) && $_POST['pass1'] == $_POST['pass2']) {
$new_password = $_POST['pass2'];

}

if ( ! empty($_POST['password_1']) && ! empty($_POST['password_2']) && $_POST['password_1'] == $_POST['password_2']) {
$new_password = $_POST['password_1'];

}
if ( empty( $new_password ) ) {
return;
}
$updated_fields = [
$m4is_wte2qk9hdk1zj7 => $new_password,
];
if ( ! empty( $m4is_46mk286a9b51zt4aweshvcbzah0m )) {
$m4is_hartbe843crydzh = m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $updated_fields ); 
}





}
}

function m4is_cp2mbze7skabpe() {

if ($this->m4is_t3phhn82n7jkhgtvas) {
return TRUE;
}

if (isset($_COOKIE['nextend_uniqid']) && $_COOKIE['nextend_uniqid'] > '') {
return TRUE;

}


return FALSE;
}




function m4is_0048d4vjwg( $m4is_7g9y793jjckyb, $m4is_tz1rt7sbq40fade6e6rx = 0 ) : int {
if ( $m4is_7g9y793jjckyb == 0 ) {
return 0;

}
if ( isset( $this->m4is_x162y3qy0wwyx[$m4is_tz1rt7sbq40fade6e6rx] ) ) {
return $this->m4is_x162y3qy0wwyx[$m4is_tz1rt7sbq40fade6e6rx];

}
if ( current_user_can( 'manage_options' ) ) {
return $m4is_7g9y793jjckyb;
}
$m4is_tz1rt7sbq40fade6e6rx = empty( $m4is_tz1rt7sbq40fade6e6rx ) ? get_the_id() : $m4is_tz1rt7sbq40fade6e6rx;


$m4is_g61yzqs7ecta0xztr70d7v = [
'post_id' => $m4is_tz1rt7sbq40fade6e6rx,
];
$m4is_r19rs24st = get_comments($m4is_g61yzqs7ecta0xztr70d7v);

$m4is_r19rs24st = $this->m4is_qgaraj7myqvgz3kkn39eq0zb($m4is_r19rs24st);
$m4is_r19rs24st = $this->m4is_xxd10mvf8r7($m4is_r19rs24st);

return count( $m4is_r19rs24st );
}
function m4is_qgaraj7myqvgz3kkn39eq0zb( $m4is_r19rs24st ) {
if (empty($m4is_r19rs24st) ) {
return $m4is_r19rs24st;

}
if (current_user_can('manage_options')) {
return $m4is_r19rs24st;
};
$m4is_tphe5sww4xmznp1fmwjm = (int) get_the_author_meta('ID');

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();
if ($m4is_tphe5sww4xmznp1fmwjm === $m4is_wk4dh1rnd3wmwvsggq51nhn87) {
return $m4is_r19rs24st;

}
$m4is_tz1rt7sbq40fade6e6rx = get_the_id();
$m4is_dw2c0b29j2v31ycz5vnrh21mf1se = (bool) get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_private_comments', true);
if ($m4is_dw2c0b29j2v31ycz5vnrh21mf1se) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

if (! $m4is_wk4dh1rnd3wmwvsggq51nhn87) {
return [];
}
if ($m4is_wk4dh1rnd3wmwvsggq51nhn87 == $m4is_tphe5sww4xmznp1fmwjm) {
return $m4is_r19rs24st;

}
$m4is_7pwjmmnvhz1rd0g = [];
if (is_array($m4is_r19rs24st)) {
usort($m4is_r19rs24st, function($m4is_scd306enrps5n51f0b99fys55kap,
 $m4is_wjj9nqa5) {
return $m4is_scd306enrps5n51f0b99fys55kap->comment_ID > $m4is_wjj9nqa5->comment_ID;
});
foreach($m4is_r19rs24st as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_g4fz4h1295j) {
$m4is_4cmnqx4j = false;
$m4is_4cmnqx4j = $m4is_4cmnqx4j || ($m4is_wk4dh1rnd3wmwvsggq51nhn87 == $m4is_g4fz4h1295j->user_id);
 
$m4is_4cmnqx4j = $m4is_4cmnqx4j || ($m4is_g4fz4h1295j->user_id == $m4is_tphe5sww4xmznp1fmwjm); 
$m4is_4cmnqx4j = $m4is_4cmnqx4j || user_can($m4is_g4fz4h1295j->user_id,
 'manage_options'); 
if (! $m4is_4cmnqx4j) {
$m4is_7pwjmmnvhz1rd0g[] = $m4is_g4fz4h1295j->comment_ID;
}
}
}
if (! empty($m4is_7pwjmmnvhz1rd0g)) {
foreach($m4is_r19rs24st as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_g4fz4h1295j) {
if (in_array($m4is_g4fz4h1295j->comment_ID, $m4is_7pwjmmnvhz1rd0g) ) {
unset($m4is_r19rs24st[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]);

}
if (in_array($m4is_g4fz4h1295j->comment_parent, $m4is_7pwjmmnvhz1rd0g) ) {
$m4is_7pwjmmnvhz1rd0g[] = $m4is_g4fz4h1295j->comment_parent;

unset($m4is_r19rs24st[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]);
}
}
}
}
$this->m4is_x162y3qy0wwyx[$m4is_tz1rt7sbq40fade6e6rx] = count($m4is_r19rs24st);

return $m4is_r19rs24st;
}
function m4is_xxd10mvf8r7( $m4is_r19rs24st ) {
global $wpdb;
if (empty($m4is_r19rs24st) ) {
return $m4is_r19rs24st;

}
$m4is_tphe5sww4xmznp1fmwjm = (int) get_the_author_meta('ID');
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_e1rs9ghq898m3671hs3zbexcdn = [];
$m4is_tz1rt7sbq40fade6e6rx = (int) get_the_id();
foreach( $m4is_r19rs24st as $m4is_g4fz4h1295j ) {
$m4is_e1rs9ghq898m3671hs3zbexcdn[] = (int) $m4is_g4fz4h1295j->comment_ID;

}
if ( ! empty( $m4is_e1rs9ghq898m3671hs3zbexcdn ) ) {
$m4is_e1rs9ghq898m3671hs3zbexcdn = implode(',', $m4is_e1rs9ghq898m3671hs3zbexcdn);

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `comment_id` FROM `{$wpdb->prefix}commentmeta` WHERE `meta_key` = 'memb_private' AND `meta_value` = '1' AND `comment_id` IN ( {$m4is_e1rs9ghq898m3671hs3zbexcdn} )";

$m4is_rnepfvy1grqx19py4 = $wpdb->get_col($m4is_5rbenkpt1v7xby2cknbs7);
unset($m4is_5rbenkpt1v7xby2cknbs7);
}
if (! empty($m4is_rnepfvy1grqx19py4)) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_66ejj07bb4 = [];
$m4is_j6b9zgh1 = $m4is_wk4dh1rnd3wmwvsggq51nhn87 === $m4is_tphe5sww4xmznp1fmwjm;
$m4is_6n4xfsrcre7 = current_user_can('manage_options');

$m4is_khk426pyv0jtepy8zrmf8kjsa4a = $m4is_6n4xfsrcre7 || $m4is_j6b9zgh1;
$m4is_kgdwcmqprjtxejnf2xfz5zm8vkw1z3 = is_user_logged_in();


foreach ($m4is_r19rs24st as $m4is_j8j55t8dz79m7 => $m4is_g4fz4h1295j) {
$m4is_j81dhdzmgmeyn6n77c36jtz4 = $m4is_kgdwcmqprjtxejnf2xfz5zm8vkw1z3 && ($m4is_wk4dh1rnd3wmwvsggq51nhn87 == $m4is_g4fz4h1295j->user_id);

if (! $m4is_j81dhdzmgmeyn6n77c36jtz4) {
$m4is_dvn9g3j7558s9mc5e1 = in_array($m4is_g4fz4h1295j->comment_ID, $m4is_rnepfvy1grqx19py4);

if ($m4is_dvn9g3j7558s9mc5e1) {
if ($m4is_khk426pyv0jtepy8zrmf8kjsa4a) {
$m4is_g4fz4h1295j->comment_content = '<div class="memberium_private_comment"><strong>(' . __('MUTED') . ')</strong> ' . $m4is_g4fz4h1295j->comment_content . '</div>';

}
else {
$m4is_66ejj07bb4[] = $m4is_g4fz4h1295j->comment_ID;
unset($m4is_r19rs24st[$m4is_j8j55t8dz79m7]);
}
}
}
}

if (! empty($m4is_66ejj07bb4)) {
foreach ($m4is_r19rs24st as $m4is_j8j55t8dz79m7 =>
 $m4is_g4fz4h1295j) {
if (! empty($m4is_g4fz4h1295j->comment_parent)) {
if (in_array($m4is_g4fz4h1295j->comment_parent, $m4is_66ejj07bb4) ) {
$m4is_66ejj07bb4[] = $m4is_g4fz4h1295j->comment_ID;

unset($m4is_r19rs24st[$m4is_j8j55t8dz79m7]);
}
}
}
}
}
$this->m4is_x162y3qy0wwyx[$m4is_tz1rt7sbq40fade6e6rx] = count($m4is_r19rs24st);

return $m4is_r19rs24st;
}




public function m4is_6sdf2k2pd7rzyy98yagav7e1xhfte( $m4is_hartbe843crydzh, $m4is_tz1rt7sbq40fade6e6rx ) {
return $this->m4is_krs2avqy019m3mx( $m4is_tz1rt7sbq40fade6e6rx );

}

public function m4is_fxnebw69zvjh7345tzdmjaa5d( $m4is_z4ts5pa39jf1yhjb4 ) : bool {
$m4is_tz1rt7sbq40fade6e6rx = 0;
$m4is_0re2r8t699gsq9jzfnj7y6yx7ppszsa = 0;

if ( is_a( $m4is_z4ts5pa39jf1yhjb4, 'WP_Post' ) ) {
$m4is_tz1rt7sbq40fade6e6rx = $m4is_z4ts5pa39jf1yhjb4->ID;
$m4is_0re2r8t699gsq9jzfnj7y6yx7ppszsa = $m4is_z4ts5pa39jf1yhjb4->post_parent;

}
if ( is_int( $m4is_z4ts5pa39jf1yhjb4 ) ) {
$m4is_tz1rt7sbq40fade6e6rx = $m4is_z4ts5pa39jf1yhjb4;
$m4is_0re2r8t699gsq9jzfnj7y6yx7ppszsa = wp_get_post_parent_id( $m4is_tz1rt7sbq40fade6e6rx );

}
if ( ! empty( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'page_inheritance') ) ) {
if (! empty($m4is_0re2r8t699gsq9jzfnj7y6yx7ppszsa) ) {
$m4is_zxkzhjaascs750axgevxjmzs234 = $this->m4is_fxnebw69zvjh7345tzdmjaa5d($m4is_0re2r8t699gsq9jzfnj7y6yx7ppszsa);

if ($m4is_zxkzhjaascs750axgevxjmzs234) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
return true;
}
}
}
$m4is_0kdm2zprhs5b1 = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx );

$m4is_19x1c17et728k945 = [
'_is4wp_access_tags',
'_is4wp_access_tags2',
'_is4wp_anonymous_only',
'_is4wp_any_loggedin_user',
'_is4wp_any_membership',

'_is4wp_contact_ids',
'_is4wp_membership_levels',
];
foreach ($m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7) {
if (! empty($m4is_0kdm2zprhs5b1[$m4is_j8j55t8dz79m7][0]) ) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

return true;
}
}
return false;
}

public function m4is_7sg9f2ayr7phwk21e754en2t805d( $m4is_4cmnqx4j, $m4is_7at6ht5xya03bc = [], $m4is_tdr04w7fk3b7k2at1vz9jpr1sd2 = '',
 $m4is_pzszy196ee = '' ) {
if ( current_user_can( 'manage_options' ) ) {
return true;
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_dn21cv5ncdqnrgyzdaeggbx = is_user_logged_in();
$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_k1x5xhjzpjha = false;
$m4is_n7x0afpz = [
'any_membership' => 0,
'contact_ids' => '',
'eval' => '',
'logged_in_only' => 0,
'logged_out_only' =>
 0,
'memberships' => '',
'tags1' => '',
'tags2' => '',
];
$m4is_7at6ht5xya03bc = wp_parse_args( $m4is_7at6ht5xya03bc, $m4is_n7x0afpz );

foreach( $m4is_7at6ht5xya03bc as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( ! empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

break;
}
}


$m4is_z7e6cfp21 = ( empty( $m4is_7at6ht5xya03bc['logged_in_only'] ) ? 0 : (int) (bool) $m4is_7at6ht5xya03bc['logged_in_only'] );

if ( $m4is_z7e6cfp21 && ! $m4is_dn21cv5ncdqnrgyzdaeggbx ) {
return false;
}

$m4is_vj786rm654v1vpq55carr5j = ( empty( $m4is_7at6ht5xya03bc['logged_out_only'] ) ? 0 : (int) (bool) $m4is_7at6ht5xya03bc['logged_out_only'] );

if ( $m4is_vj786rm654v1vpq55carr5j && $m4is_dn21cv5ncdqnrgyzdaeggbx ) {
return false;
}

if ( ! empty( $m4is_7at6ht5xya03bc['any_membership'] ) ) {
if ( empty( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_tags'] ) ) {
return false;

}
}

if ( ! empty( $m4is_7at6ht5xya03bc['tags1'] ) ) {
if ( ! $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_7at6ht5xya03bc['tags1'] ) ) {
return false;

}
}
if ( ! empty( $m4is_7at6ht5xya03bc['tags2'] ) ) {
if ( ! $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_7at6ht5xya03bc['tags2'] ) ) {
return false;

}
}

if ( $m4is_7at6ht5xya03bc['contact_ids'] ) {
$m4is_7at6ht5xya03bc['contact_ids'] = trim( $m4is_7at6ht5xya03bc['contact_ids'],
 ', ' );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'crm_id', 0 );
$m4is_er73m18j35gqvx95t7d34y7 = array_filter( explode( ',', $m4is_7at6ht5xya03bc['contact_ids'] ) );
if ( ! in_array( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_er73m18j35gqvx95t7d34y7 ) ) {
return false;
}
}


if ( ! empty( $m4is_7at6ht5xya03bc['memberships'] ) ) {
$m4is_835ac1vbc3gsdtb36mbjkwr = array_filter( explode( ',',
 m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user', 'membership_tags', '' ) ) );

$m4is_bctvete0n32mzs8y766874cnd = array_filter( explode( ',', $m4is_7at6ht5xya03bc['memberships'] ) );
$m4is_x7n01dtxf9c5xrynw848ajh2zgbd1h8j = (bool) count( array_intersect( $m4is_835ac1vbc3gsdtb36mbjkwr,
 $m4is_bctvete0n32mzs8y766874cnd ) ); 

if ( ! $m4is_x7n01dtxf9c5xrynw848ajh2zgbd1h8j ) {
$m4is_e7ja4t2j1fq2krymef7ma92x21s11 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'membership_level', 0 );
$m4is_ffebkw863fcf2q5tx81b = 0;
$m4is_y7084n6v67jme9va8yz = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' );


foreach ($m4is_bctvete0n32mzs8y766874cnd as $id) {
if (isset($m4is_y7084n6v67jme9va8yz[$id]['level']) && $m4is_y7084n6v67jme9va8yz[$id]['level'] > 0) {
$m4is_ffebkw863fcf2q5tx81b = ($m4is_y7084n6v67jme9va8yz[$id]['level'] < $m4is_ffebkw863fcf2q5tx81b) ? $m4is_y7084n6v67jme9va8yz[$id]['level'] : $m4is_ffebkw863fcf2q5tx81b;

}
}
if ($m4is_ffebkw863fcf2q5tx81b) {
if ($m4is_e7ja4t2j1fq2krymef7ma92x21s11 >= $m4is_ffebkw863fcf2q5tx81b) {
$m4is_x7n01dtxf9c5xrynw848ajh2zgbd1h8j = true;

}
}
}
if (! $m4is_x7n01dtxf9c5xrynw848ajh2zgbd1h8j) {
return false;
}
}
if ( ! empty( $m4is_7at6ht5xya03bc['eval'] ) ) {
if ( ! class_exists( 'm4is_jmzx5mtr9b067q9yawwzb865' ) ) {
error_log( 'Memberium: [error] Eval Function Class file missing.' );

}
else {
$m4is_7at6ht5xya03bc['eval'] = 'return ' . trim(html_entity_decode($m4is_7at6ht5xya03bc['eval'], ENT_QUOTES || ENT_HTML401 || ENT_XML1 || ENT_XHTML || ENT_HTML5)) . ';';

$m4is_hartbe843crydzh = m4is_jmzx5mtr9b067q9yawwzb865::m4is_hhhencf1z4jyw21bn2($m4is_7at6ht5xya03bc['eval']);
if (! $m4is_hartbe843crydzh) {
return false;

}
}
}
return true;
}

public function m4is_65b45h2rj6a588vw56w5yj5f2q( $m4is_pbe6ph2dd0rk, $m4is_3c463rkgxa4th ) {
global $wp_query;

if (function_exists('wp_get_current_user') && current_user_can('manage_options') ) {
return $m4is_pbe6ph2dd0rk;
}
if (! is_array($m4is_pbe6ph2dd0rk) ) {
$m4is_pbe6ph2dd0rk = [$m4is_pbe6ph2dd0rk];

}
if (defined('DOING_AJAX') ) {
return $m4is_pbe6ph2dd0rk;
}
$m4is_gaxy4hnerf72p05w59xec = $this->m4is_9xe81b6ybjcswdf0w96r84d7m();

$m4is_ykvk2xpxr7whvwr = count($m4is_pbe6ph2dd0rk);
$m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0 = [];
$m4is_gg044y592tdv7b8p0ww2jm73c8z = is_singular();

$m4is_yw5bqwte0w8tg = ! $m4is_gg044y592tdv7b8p0ww2jm73c8z;
foreach ($m4is_pbe6ph2dd0rk as $m4is_z4ts5pa39jf1yhjb4) {
$m4is_tz1rt7sbq40fade6e6rx = $m4is_z4ts5pa39jf1yhjb4->ID;

$m4is_ez52a3pg8wpex7htxbt88te8kqh3rz15 = (int) $m4is_z4ts5pa39jf1yhjb4->post_parent;
$post_visible = $this->m4is_krs2avqy019m3mx($m4is_tz1rt7sbq40fade6e6rx);

$m4is_yw5bqwte0w8tg = $m4is_yw5bqwte0w8tg || ($m4is_gaxy4hnerf72p05w59xec <> $m4is_tz1rt7sbq40fade6e6rx);
if ($post_visible) {
$m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0[] = $m4is_z4ts5pa39jf1yhjb4;

}
else {
if ( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'default_page_redirect') > '') {
$m4is_rbntrma4yssqn262gtwqqxe4a83tv1s = FALSE;

}
else {
$m4is_rbntrma4yssqn262gtwqqxe4a83tv1s = $this->can_cache;
$m4is_rbntrma4yssqn262gtwqqxe4a83tv1s = FALSE;
}

$m4is_sa1zwmzw = $this->m4is_v75x9g18kvwf86vy5e0pgh6($m4is_tz1rt7sbq40fade6e6rx,
 false);
if ($m4is_sa1zwmzw == 'redirect') {
$m4is_sa1zwmzw = 'hide';
}




if ($m4is_sa1zwmzw == 'excerpt') {
if (trim($m4is_z4ts5pa39jf1yhjb4->post_excerpt) > '') {
$m4is_z4ts5pa39jf1yhjb4->post_content = $m4is_z4ts5pa39jf1yhjb4->post_excerpt;

}
else {
$m4is_z4ts5pa39jf1yhjb4->post_content = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'global_excerpt');

}
$m4is_z4ts5pa39jf1yhjb4->excerpt_only = 1;
$m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0[] = $m4is_z4ts5pa39jf1yhjb4;
}
if ($m4is_yw5bqwte0w8tg && $m4is_sa1zwmzw == 'redirect') {
$m4is_sa1zwmzw = 'hide';

}


if ( $m4is_gg044y592tdv7b8p0ww2jm73c8z ) {
if ($m4is_sa1zwmzw == 'hide') {
if ( isset($GLOBALS['the_wp_query']) && method_exists($GLOBALS['the_wp_query'],
 'set_404') && is_single($m4is_tz1rt7sbq40fade6e6rx) ) {
$GLOBALS['the_wp_query']->set_404();
}
}
if ( $m4is_sa1zwmzw == 'redirect' ) {
$this->m4is_04xfq1nph5g53725w9( $m4is_tz1rt7sbq40fade6e6rx,
 'Memberium Page Protection' );
}
}
}
}

return $m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0;
}

public function m4is_xx246xebnwsmxy7tbrptd2j( $m4is_pbe6ph2dd0rk,
 $m4is_j34bmw9dcjexfj1qpz ) {
global $wp_query;
if ( current_user_can( 'manage_options' ) ) {
return $m4is_pbe6ph2dd0rk;
}

if ( isset( $m4is_j34bmw9dcjexfj1qpz->query['post_type'] ) && $m4is_j34bmw9dcjexfj1qpz->query['post_type'] == 'wp_global_styles' ) {
return $m4is_pbe6ph2dd0rk;

}
if ( ! is_array( $m4is_pbe6ph2dd0rk ) && ! is_object( $m4is_pbe6ph2dd0rk ) ) {
return $m4is_pbe6ph2dd0rk;
}
if ( ! is_array($m4is_pbe6ph2dd0rk) ) {
$m4is_pbe6ph2dd0rk = [$m4is_pbe6ph2dd0rk];

}
if ( empty( $m4is_pbe6ph2dd0rk ) ) {
return $m4is_pbe6ph2dd0rk;
}
if ( empty( $this->m4is_x8p1zrv5ppkgcp398qwyj ) ) {
global $wp_the_query;

if ( ! empty( $wp_the_query->is_singular ) ) {
if ( isset( $m4is_j34bmw9dcjexfj1qpz->posts[0]->ID ) ) {
$this->m4is_x8p1zrv5ppkgcp398qwyj = $m4is_j34bmw9dcjexfj1qpz->posts[0]->ID;

}
}
}
static $m4is_cked9wrsrmatznmxr5np061 = 0;
$m4is_cked9wrsrmatznmxr5np061++;
$m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0 = [];
$m4is_ykvk2xpxr7whvwr = count($m4is_pbe6ph2dd0rk);

$m4is_rbntrma4yssqn262gtwqqxe4a83tv1s = false;
$m4is_66d34pv05cbvh = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'force_learndash_inheritance', 0 );
$m4is_e13wbs370e6e2zh9qf = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'default_page_redirect', 0 );
$m4is_z58f36vn45mphzpvw9h9jfvyf4g = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'global_excerpt', 0 );
$m4is_0e78erys8xn = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'autogenerate_excerpts',
 0 );
$m4is_14c9gc3ng0se54ah544a702g7 = apply_filters( 'memberium/ignored_post_types', ['elementor_library'] );

$m4is_x3z4yrq48d7np5z = [
'reply',

'topic',
];
foreach ( $m4is_pbe6ph2dd0rk as $m4is_z4ts5pa39jf1yhjb4 ) {
if ( in_array( $m4is_z4ts5pa39jf1yhjb4->post_type, $m4is_14c9gc3ng0se54ah544a702g7 ) ) {
$m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0[] = $m4is_z4ts5pa39jf1yhjb4;

break;
}
$m4is_yhdk2h7srcr7n5mzjnw7m6b = $m4is_z4ts5pa39jf1yhjb4->post_type;
$m4is_tz1rt7sbq40fade6e6rx = $m4is_z4ts5pa39jf1yhjb4->ID;

$m4is_ez52a3pg8wpex7htxbt88te8kqh3rz15 = (int) $m4is_z4ts5pa39jf1yhjb4->post_parent;
$m4is_h47ffrt71r = $this->m4is_krs2avqy019m3mx( $m4is_tz1rt7sbq40fade6e6rx );

if (empty($m4is_z4ts5pa39jf1yhjb4->post_excerpt) ) {
$m4is_z4ts5pa39jf1yhjb4->post_excerpt = $this->m4is_qvnqbzg7cjmcq6p67xf87($m4is_z4ts5pa39jf1yhjb4);

}
if (! empty($m4is_66d34pv05cbvh) ) {

$m4is_x3z4yrq48d7np5z = [
'sfwd-lessons',
'sfwd-quiz',
'sfwd-topic',
];
if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b,
 $m4is_x3z4yrq48d7np5z ) ) {
$m4is_fgq4xtdb8 = (int) get_post_meta( $m4is_z4ts5pa39jf1yhjb4->ID, 'course_id', true) ;
$m4is_86gkmtwpcpp = (int) get_post_meta( $m4is_z4ts5pa39jf1yhjb4->ID,
 'lesson_id', true) ;
if ($m4is_h47ffrt71r && $m4is_fgq4xtdb8) {
$m4is_h47ffrt71r = $this->m4is_krs2avqy019m3mx($m4is_fgq4xtdb8);
}
if ($m4is_h47ffrt71r && $m4is_86gkmtwpcpp) {
$m4is_h47ffrt71r = $this->m4is_krs2avqy019m3mx($m4is_86gkmtwpcpp);

}
}
}
if ($m4is_h47ffrt71r) {
$m4is_z4ts5pa39jf1yhjb4 = $this->m4is_c312z0x575w15n13kh87fqkp($m4is_z4ts5pa39jf1yhjb4);
$m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0[] = $m4is_z4ts5pa39jf1yhjb4;

}
elseif (in_array($m4is_yhdk2h7srcr7n5mzjnw7m6b, $this->m4is_jrx8xz0m7tz4grk) ) {
if (! empty($m4is_z4ts5pa39jf1yhjb4->post_excerpt) ) {
$m4is_z4ts5pa39jf1yhjb4->post_excerpt = $this->m4is_qvnqbzg7cjmcq6p67xf87($m4is_z4ts5pa39jf1yhjb4);

$m4is_z4ts5pa39jf1yhjb4->post_content = $m4is_z4ts5pa39jf1yhjb4->post_excerpt;
}
else {
$m4is_z4ts5pa39jf1yhjb4->post_content = $this->m4is_q05x2qpj2pg4vghmshj0t('',
 $m4is_z4ts5pa39jf1yhjb4);
}
$m4is_z4ts5pa39jf1yhjb4->post_excerpt = $this->m4is_qvnqbzg7cjmcq6p67xf87($m4is_z4ts5pa39jf1yhjb4);
$m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0[] = $m4is_z4ts5pa39jf1yhjb4;

}
else {
if ( ! empty( $m4is_e13wbs370e6e2zh9qf ) ) {
$m4is_rbntrma4yssqn262gtwqqxe4a83tv1s = false;
}
else {
$m4is_rbntrma4yssqn262gtwqqxe4a83tv1s = $this->can_cache;

$m4is_rbntrma4yssqn262gtwqqxe4a83tv1s = false;
}

$m4is_sa1zwmzw = $this->m4is_v75x9g18kvwf86vy5e0pgh6( $m4is_tz1rt7sbq40fade6e6rx,
 false );
if ( $m4is_sa1zwmzw == 'redirect' ) {
$m4is_srpj0604rjy6a97rmv6jc89hm9 = false;
$m4is_srpj0604rjy6a97rmv6jc89hm9 = apply_filters( 'memberium/post_protecting/override_redirect/pre',
 $m4is_srpj0604rjy6a97rmv6jc89hm9, $m4is_tz1rt7sbq40fade6e6rx );
if ( isset( $GLOBALS['post'] ) && is_a( $GLOBALS['post'], 'WP_Post' ) ) {
if ( $GLOBALS['post']->ID == 0) {
$m4is_srpj0604rjy6a97rmv6jc89hm9 = true;

}
}
$m4is_srpj0604rjy6a97rmv6jc89hm9 = $m4is_srpj0604rjy6a97rmv6jc89hm9 || (bool) did_action( 'get_header' );
$m4is_srpj0604rjy6a97rmv6jc89hm9 = $m4is_srpj0604rjy6a97rmv6jc89hm9 || $this->m4is_x8p1zrv5ppkgcp398qwyj !== $m4is_tz1rt7sbq40fade6e6rx;

$m4is_srpj0604rjy6a97rmv6jc89hm9 = $m4is_srpj0604rjy6a97rmv6jc89hm9 || headers_sent();
$m4is_srpj0604rjy6a97rmv6jc89hm9 = $m4is_srpj0604rjy6a97rmv6jc89hm9 || wp_doing_ajax();

$m4is_srpj0604rjy6a97rmv6jc89hm9 = $m4is_srpj0604rjy6a97rmv6jc89hm9 || $this->m4is_132xe588j->m4is_yzrsa00sc8hz7g6dv6();
$m4is_srpj0604rjy6a97rmv6jc89hm9 = apply_filters( 'memberium/post_protecting/override_redirect/post',
 $m4is_srpj0604rjy6a97rmv6jc89hm9, $m4is_tz1rt7sbq40fade6e6rx );
if ( $m4is_srpj0604rjy6a97rmv6jc89hm9 ) {
$m4is_sa1zwmzw = 'hide';

}
}




if ($m4is_sa1zwmzw == 'excerpt') {
if (trim($m4is_z4ts5pa39jf1yhjb4->post_excerpt) > '') {
$m4is_z4ts5pa39jf1yhjb4->post_content = $m4is_z4ts5pa39jf1yhjb4->post_excerpt;

}
else {
$m4is_z4ts5pa39jf1yhjb4->post_excerpt = $this->m4is_qvnqbzg7cjmcq6p67xf87($m4is_z4ts5pa39jf1yhjb4);
$m4is_z4ts5pa39jf1yhjb4->post_content = $m4is_z4ts5pa39jf1yhjb4->post_excerpt;

$m4is_z4ts5pa39jf1yhjb4->post_content .= $m4is_z58f36vn45mphzpvw9h9jfvyf4g;
}
$m4is_z4ts5pa39jf1yhjb4->excerpt_only = 1;
$m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0[] = $m4is_z4ts5pa39jf1yhjb4;

}
elseif ($m4is_sa1zwmzw == 'hide') {

if (method_exists($m4is_j34bmw9dcjexfj1qpz, 'set_404') && is_single() ) {
$m4is_j34bmw9dcjexfj1qpz->set_404();

}
}
elseif ( $m4is_sa1zwmzw == 'redirect' ) {
$this->m4is_04xfq1nph5g53725w9( $m4is_tz1rt7sbq40fade6e6rx, 'Memberium Post Protection' );

exit;
}
}
}
if ($m4is_0e78erys8xn && ! is_singular() ) {
foreach ($m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0 as &$new_post) {
$new_post->post_content = $new_post->post_excerpt;

}
}

$new_count = count($m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0);
if ($new_count <> count($m4is_j34bmw9dcjexfj1qpz->posts) ) {
$m4is_j34bmw9dcjexfj1qpz->posts = $m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0;

$m4is_j34bmw9dcjexfj1qpz->found_posts = ($m4is_j34bmw9dcjexfj1qpz->found_posts - ($m4is_ykvk2xpxr7whvwr - count($m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0) ) );

if ($m4is_j34bmw9dcjexfj1qpz->query_vars['posts_per_page']) {
$m4is_j34bmw9dcjexfj1qpz->max_num_pages = (int) ceil($m4is_j34bmw9dcjexfj1qpz->found_posts / $m4is_j34bmw9dcjexfj1qpz->query_vars['posts_per_page']);

}
}
return $m4is_eaqfx75fsffpymtkd9q5vksk0cbqm0;
}
private function m4is_zppqeky74nfc56y5nq7226c509zmcchm() {
if ( is_admin() ) {
return;

}
if ( ! $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'attachment_pages', 0 ) ) {
return;
}
add_filter( 'attachment_link',
 function( $m4is_65aka8xf2h8j ) {
return;
} );
add_filter( 'rewrite_rules_array', function( $m4is_jcd3edgn89qmjfec0zhcc5eqgaha ) {
foreach ( $m4is_jcd3edgn89qmjfec0zhcc5eqgaha as $m4is_phnm5j9c =>
 $m4is_j34bmw9dcjexfj1qpz ) {
if ( strpos( $m4is_phnm5j9c, 'attachment' ) || strpos( $m4is_j34bmw9dcjexfj1qpz, 'attachment' ) ) {
unset( $m4is_jcd3edgn89qmjfec0zhcc5eqgaha[$m4is_phnm5j9c] );

}
}
return $m4is_jcd3edgn89qmjfec0zhcc5eqgaha;
});
}
public function m4is_krs2avqy019m3mx( int $m4is_tz1rt7sbq40fade6e6rx, int $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0 ) : bool {
static $m4is_zm8prn4t = [];

static $m4is_y7084n6v67jme9va8yz;
static $login_post_id;
static $m4is_efdjs9x36r5mnjxxatnv6x1hbrres4pe;
static $m4is_y3t7c2t8f08xhj8tkb3n1kcrntxm7e3;

$m4is_3sh8b6wtp8y76znrx7pwqgdemn = $this->m4is_132xe588j->m4is_dmfr81331w27fa3bzjyvhkbh5a( 'prohibited_action_override' ); 
if ( in_array( $m4is_3sh8b6wtp8y76znrx7pwqgdemn,
 ['show', 'excerpt'] ) ) {
return true;
}
if ( empty( $m4is_tz1rt7sbq40fade6e6rx ) ) {
return false;
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_wk4dh1rnd3wmwvsggq51nhn87 ? $m4is_wk4dh1rnd3wmwvsggq51nhn87 : $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

if ( function_exists( 'get_userdata' ) && user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'manage_options' ) ) {
return true;
}
$m4is_y7084n6v67jme9va8yz ??= $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' );

$login_post_id ??= $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'login_url', 0 );
$m4is_efdjs9x36r5mnjxxatnv6x1hbrres4pe ??= $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'page_inheritance', 0 );
$m4is_y3t7c2t8f08xhj8tkb3n1kcrntxm7e3 ??= is_admin();

if ( function_exists( 'powerpress_is_custom_podcast_feed' ) && powerpress_is_custom_podcast_feed() ) {
return true;

}
if ( is_a( $m4is_tz1rt7sbq40fade6e6rx, 'WP_Post' ) ) {
$m4is_z4ts5pa39jf1yhjb4 = $m4is_tz1rt7sbq40fade6e6rx;
}
else {
$m4is_z4ts5pa39jf1yhjb4 = get_post( $m4is_tz1rt7sbq40fade6e6rx );

}
$m4is_tz1rt7sbq40fade6e6rx = $m4is_z4ts5pa39jf1yhjb4->ID;
if ( empty( $m4is_z4ts5pa39jf1yhjb4 ) ) {
return true;
}
$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_ydw6szs2ds84gg81jhydhxsy7e3r0( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_bm022kv8enx9hkngs0tg3 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_rbntrma4yssqn262gtwqqxe4a83tv1s = true; 
if ( isset( $m4is_zm8prn4t[$m4is_wk4dh1rnd3wmwvsggq51nhn87][$m4is_tz1rt7sbq40fade6e6rx] ) ) {
return ! $m4is_zm8prn4t[$m4is_wk4dh1rnd3wmwvsggq51nhn87][$m4is_tz1rt7sbq40fade6e6rx];

}

if ( ! $m4is_y3t7c2t8f08xhj8tkb3n1kcrntxm7e3 ) {
if ( $m4is_z4ts5pa39jf1yhjb4->post_type == 'attachment' ) {
if ( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'attachment_pages' ) ) {
$m4is_zm8prn4t[$m4is_wk4dh1rnd3wmwvsggq51nhn87][$m4is_tz1rt7sbq40fade6e6rx] = false;
return false;
}
}
}

$m4is_k1x5xhjzpjha = false;

$m4is_k2crp0jh19nhs5etqw = false;
$m4is_p4jmvrs77xj4j50b37kr3h0b = 0; 
$m4is_ykmp9fe4pkzcdnhyg51q5dy = 0;
$m4is_0kdm2zprhs5b1 = $this->m4is_132xe588j->m4is_8awbs9rpays1( $m4is_tz1rt7sbq40fade6e6rx,
 '' );
$m4is_y2p9gk2x89fknjmwhv36s9mjyeshmb = empty( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['crm_id'] ) ? 0 : $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['crm_id'];




if ( ! empty( $m4is_0kdm2zprhs5b1['_is4wp_force_public'] ) ) {
return true;
}

if ( function_exists( 'is_user_logged_in' ) && ! is_user_logged_in() ) {

if ( $m4is_0kdm2zprhs5b1['_is4wp_facebook_crawler'] ) {
if ( $this->m4is_sxqaa0hb() || $this->m4is_4e0gb2vrxeestdr94v() ) {
return true;

}
}


if ( $m4is_0kdm2zprhs5b1['_is4wp_google_1stclick'] ) {
if ( $this->m4is_6cwp33ph() || $this->m4is_v5xm5za55y8bey7r92bt94yvkxq5ft() ) {
return true;

}
if ( isset( $_SERVER['HTTP_REFERER'] ) && stristr( $_SERVER['HTTP_REFERER'], 'google.' ) !== FALSE ) {
return true;
}

if ( isset( $_SERVER['HTTP_REFERER'] ) && stripos( $_SERVER['HTTP_REFERER'],
 'https://www.facebook.com/' ) === 0 ) {
return true;
}
}
}
else {

if ( $m4is_0kdm2zprhs5b1['_is4wp_anonymous_only'] && function_exists( 'is_user_logged_in' ) && is_user_logged_in() ) {
return false;

}
}


if ( $login_post_id > 0 && $login_post_id == $m4is_tz1rt7sbq40fade6e6rx ) {
return true;
}

if ( $m4is_efdjs9x36r5mnjxxatnv6x1hbrres4pe ) {
if ( $m4is_z4ts5pa39jf1yhjb4->post_parent ) {
if ( ! $this->m4is_krs2avqy019m3mx( $m4is_z4ts5pa39jf1yhjb4->post_parent,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
$m4is_k1x5xhjzpjha = true;
}
}
}

if ( $m4is_0kdm2zprhs5b1['_is4wp_any_loggedin_user'] && function_exists( 'is_user_logged_in' ) && ! is_user_logged_in() ) {
$m4is_k1x5xhjzpjha = true;

}

if ( ! $m4is_k1x5xhjzpjha ) {
if ( ! empty( trim( $m4is_0kdm2zprhs5b1['_is4wp_contact_ids'] ) ) ) {
$m4is_er73m18j35gqvx95t7d34y7 = array_filter( explode( ',',
 $m4is_0kdm2zprhs5b1['_is4wp_contact_ids'] ) );
if ( ! in_array( $m4is_y2p9gk2x89fknjmwhv36s9mjyeshmb, $m4is_er73m18j35gqvx95t7d34y7 ) ) {
$m4is_k1x5xhjzpjha = TRUE;

}
}
}

if ( ! $m4is_k1x5xhjzpjha ) {
if ( $m4is_0kdm2zprhs5b1['_is4wp_any_membership'] && empty( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_tags'] ) ) {
$m4is_k1x5xhjzpjha = TRUE;

}
}

if ( ! $m4is_k1x5xhjzpjha ) {
if ( ! empty( $m4is_0kdm2zprhs5b1['_is4wp_membership_levels'] ) ) {
if ( empty( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_tags'] ) ) {
$m4is_k1x5xhjzpjha = true;

}
else {
$m4is_z8tga4tnfdfdwp = array_filter( explode( ',', $m4is_0kdm2zprhs5b1['_is4wp_membership_levels'] ) );
$m4is_58rhf7n4rpz6zfmfs76rjh2zc = array_filter( explode( ',',
 $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_tags'] ) );
$m4is_x1pfe2ttc2h17d = self::m4is_tn28ms22kg96( $m4is_58rhf7n4rpz6zfmfs76rjh2zc,
 $m4is_z8tga4tnfdfdwp );
if ( ! $m4is_x1pfe2ttc2h17d ) {
$m4is_ear9w0r8r = self::m4is_1bg7bzwf( $m4is_z8tga4tnfdfdwp, $m4is_y7084n6v67jme9va8yz );

if ( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_level'] <= $m4is_ear9w0r8r ) {
$m4is_k1x5xhjzpjha = true;
}
}
}
}
}

if ( $m4is_p4jmvrs77xj4j50b37kr3h0b < 1 && ! $m4is_k1x5xhjzpjha && ! empty( $m4is_0kdm2zprhs5b1['_is4wp_access_tags'] ) ) {
if ( ! $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_0kdm2zprhs5b1['_is4wp_access_tags'] ) ) {
$m4is_k1x5xhjzpjha = true;

}
if (! $m4is_k1x5xhjzpjha && ! empty($m4is_0kdm2zprhs5b1['_is4wp_access_tags2']) ) {
if (! $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h($m4is_0kdm2zprhs5b1['_is4wp_access_tags2']) ) {
$m4is_k1x5xhjzpjha = true;

}
}
}
if ( $m4is_rbntrma4yssqn262gtwqqxe4a83tv1s ) {
$m4is_zm8prn4t[$m4is_wk4dh1rnd3wmwvsggq51nhn87][$m4is_tz1rt7sbq40fade6e6rx] = (int) $m4is_k1x5xhjzpjha;

}
return ! $m4is_k1x5xhjzpjha;
}




private function m4is_tn28ms22kg96( $m4is_58rhf7n4rpz6zfmfs76rjh2zc, $m4is_z8tga4tnfdfdwp ) : bool {
if ( empty( $m4is_58rhf7n4rpz6zfmfs76rjh2zc ) ) {
return false;

}
return (bool) array_intersect( $m4is_58rhf7n4rpz6zfmfs76rjh2zc, $m4is_z8tga4tnfdfdwp );
}

private function m4is_1bg7bzwf( $m4is_z8tga4tnfdfdwp,
 $m4is_y7084n6v67jme9va8yz ) : int {
$m4is_ear9w0r8r = 0;
foreach( $m4is_z8tga4tnfdfdwp as $m4is_4r7k9zg9yq ) {
$m4is_psbczbfxwyb7byp1wejc = $m4is_y7084n6v67jme9va8yz[$m4is_4r7k9zg9yq]['level'] ? $m4is_y7084n6v67jme9va8yz[$m4is_4r7k9zg9yq]['level'] : 0;

$m4is_ear9w0r8r = max( $m4is_psbczbfxwyb7byp1wejc, $m4is_ear9w0r8r );
}
return $m4is_ear9w0r8r;
}

public function m4is_04xfq1nph5g53725w9( int $m4is_tz1rt7sbq40fade6e6rx,
 string $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = '' ) : void {
if ( headers_sent() ) {
return;
}
$m4is_pqecxfec342ksq5fzv1mg = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_redirect_url', true );
if ( empty( $m4is_pqecxfec342ksq5fzv1mg ) ) {
$m4is_pqecxfec342ksq5fzv1mg = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'default_page_redirect', '' );
}
if ( empty( $m4is_pqecxfec342ksq5fzv1mg ) ) {
$m4is_3mp0nd4jv65b708ytkc3 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'login_url', 0 );
if ( $m4is_3mp0nd4jv65b708ytkc3 < 1 ) {
$m4is_pqecxfec342ksq5fzv1mg = wp_login_url( site_url() );
}
else {
$m4is_pqecxfec342ksq5fzv1mg = get_permalink( $m4is_3mp0nd4jv65b708ytkc3 );

}
}
if ( strpos( $m4is_pqecxfec342ksq5fzv1mg, '{{' ) !== false ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_qp1fkjxb06h4ax1vm76qvje7jm5r7jx = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'login_page', 0 );
$m4is_dhacx76t7dg2zybhm35mma28rmrbj5r = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'logout_page', 0 );
$m4is_pqecxfec342ksq5fzv1mg = str_replace('{{current.url}}', $_SERVER['REQUEST_URI'], $m4is_pqecxfec342ksq5fzv1mg);

$m4is_pqecxfec342ksq5fzv1mg = str_replace('{{cachebuster}}', mt_rand( 1000000, 9999999 ), $m4is_pqecxfec342ksq5fzv1mg);
if ( ! empty( $m4is_qp1fkjxb06h4ax1vm76qvje7jm5r7jx ) ) {
$m4is_pqecxfec342ksq5fzv1mg = str_replace('{{member.homepage}}',
 get_permalink( $m4is_qp1fkjxb06h4ax1vm76qvje7jm5r7jx), $m4is_pqecxfec342ksq5fzv1mg);
}
else {
$m4is_pqecxfec342ksq5fzv1mg = str_replace('{{member.homepage}}',
 site_url(), $m4is_pqecxfec342ksq5fzv1mg);
}
if (! empty( $m4is_dhacx76t7dg2zybhm35mma28rmrbj5r ) ) {
$m4is_pqecxfec342ksq5fzv1mg = str_replace('{{member.logout}}',
 get_permalink( $m4is_dhacx76t7dg2zybhm35mma28rmrbj5r ), $m4is_pqecxfec342ksq5fzv1mg);
}
else {
$m4is_pqecxfec342ksq5fzv1mg = str_replace('{{member.logout}}',
 site_url(), $m4is_pqecxfec342ksq5fzv1mg);
}
if ( stripos( $m4is_pqecxfec342ksq5fzv1mg, '{{post.') !== FALSE ) {
$m4is_pqecxfec342ksq5fzv1mg = preg_replace_callback( '|({{post\.(.*)}})|U',

function( $m4is_e200zw8mj7k8m1hbx3m ) {
return get_permalink( $m4is_e200zw8mj7k8m1hbx3m[2] );
}, $m4is_pqecxfec342ksq5fzv1mg );
}
}
$m4is_pqecxfec342ksq5fzv1mg = trim( do_shortcode( $m4is_pqecxfec342ksq5fzv1mg ) );

$m4is_pqecxfec342ksq5fzv1mg = apply_filters( 'memberium_post_redirect_url', $m4is_pqecxfec342ksq5fzv1mg, $m4is_tz1rt7sbq40fade6e6rx );

if ( ! empty( $m4is_pqecxfec342ksq5fzv1mg ) ) {
$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 ? $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 : 'Memberium Post Protection';

wp_redirect( $m4is_pqecxfec342ksq5fzv1mg, 302, $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 );
exit;
}
}

public function m4is_v75x9g18kvwf86vy5e0pgh6( int $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_2x1x804npc326y9qj92xna = NULL ) : string {

if ( ! function_exists( 'wp_get_current_user' ) ) {
return 'granted';
}
if ( $this->m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return 'granted';

}
if ( ! get_post_status( $m4is_tz1rt7sbq40fade6e6rx ) ) {
return 'hide';
}
$m4is_3r7nwnt15h9k1 = true;
$m4is_h4fb6ck0s45b = [];



if ( $this->m4is_132xe588j->m4is_dmfr81331w27fa3bzjyvhkbh5a( 'prohibited_action_override' ) == '' ) {
$m4is_sa1zwmzw = strtolower( trim ( get_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_prohibited_action', true ) ) );
}
else {
$m4is_sa1zwmzw = $this->m4is_132xe588j->m4is_dmfr81331w27fa3bzjyvhkbh5a('prohibited_action_override');

$m4is_3r7nwnt15h9k1 = false;
$m4is_h4fb6ck0s45b[] = 'Prohibited Action Override';
}
if ($m4is_sa1zwmzw == 'show') {
$m4is_sa1zwmzw = 'granted';

$m4is_h4fb6ck0s45b[] = 'Prohibited Action  = Show';
}

if ($m4is_sa1zwmzw == 'default' || $m4is_sa1zwmzw == '') {
$m4is_sa1zwmzw = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'default_prohibited_action');
if ($m4is_sa1zwmzw == '') {
$m4is_sa1zwmzw = 'hide';
$m4is_h4fb6ck0s45b[] = 'Prohibited Action is empty ' . __LINE__;

}
}
if ($m4is_sa1zwmzw == '') {
$m4is_sa1zwmzw = 'hide';
$m4is_h4fb6ck0s45b[] = 'Prohibited Action is empty ' . __LINE__;
}
if ( $m4is_sa1zwmzw == 'excerpt' ) {
if ( strtolower( wp_get_theme() ) == 'optimizepress' ) {
$m4is_sa1zwmzw = 'redirect';

$m4is_h4fb6ck0s45b[] = 'OptimizePress Theme ' . __LINE__;
}
}
if ($m4is_sa1zwmzw == 'redirect') {
if ( headers_sent() ) {
$m4is_sa1zwmzw = 'hide';

}
elseif (( ! empty($post->ID) ) && $this->m4is_9xe81b6ybjcswdf0w96r84d7m() !== $m4is_tz1rt7sbq40fade6e6rx ) {
$m4is_sa1zwmzw = 'hide';

}
elseif ($this->in_list == 1) {
$m4is_sa1zwmzw = 'hide';
}
elseif (! is_singular() ) {
$m4is_sa1zwmzw = 'hide';
}
elseif (in_the_loop() ) {
$m4is_sa1zwmzw = 'hide';

}
elseif (is_search() ) {
$m4is_sa1zwmzw = 'hide';
}
elseif(is_archive() ) {
$m4is_sa1zwmzw = 'hide';
}
elseif(is_preview() ) {
$m4is_sa1zwmzw = 'hide';

}
elseif(is_feed() ) {
$m4is_sa1zwmzw = 'hide';
}
elseif(! is_main_query() ) {
$m4is_sa1zwmzw = 'hide';
}
}

if ($m4is_sa1zwmzw == 'redirect') {
}

if ($m4is_3r7nwnt15h9k1) {
$m4is_zm8prn4t[$m4is_tz1rt7sbq40fade6e6rx] = $m4is_sa1zwmzw;

}
return $m4is_sa1zwmzw;
}



function m4is_qvnqbzg7cjmcq6p67xf87( $m4is_z4ts5pa39jf1yhjb4 ) {
if (! is_a($m4is_z4ts5pa39jf1yhjb4,
 'WP_Post') ) {
return;
}
if (empty($m4is_z4ts5pa39jf1yhjb4->post_excerpt)) {
$m4is_0e78erys8xn = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'autogenerate_excerpts');
$m4is_8exr3my9nwm7zmz4r58twz = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'include_default_excerpt');

if ($m4is_0e78erys8xn) {
$m4is_z4ts5pa39jf1yhjb4->post_excerpt = trim($this->m4is_ttva1wzva8mfne7tsz06bbbr723y($m4is_z4ts5pa39jf1yhjb4->post_excerpt) );

$m4is_x0r7j58f68rer6hrp = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'excerpt_length', 55);
$m4is_z4ts5pa39jf1yhjb4->post_excerpt = wp_trim_words(strip_shortcodes($this->m4is_ttva1wzva8mfne7tsz06bbbr723y($m4is_z4ts5pa39jf1yhjb4->post_content) ),
 $m4is_x0r7j58f68rer6hrp);
}
if (! empty($m4is_8exr3my9nwm7zmz4r58twz) ) {
$m4is_z58f36vn45mphzpvw9h9jfvyf4g = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'global_excerpt');
if (! empty($m4is_z58f36vn45mphzpvw9h9jfvyf4g)) {
if ($m4is_8exr3my9nwm7zmz4r58twz == 'append') {
$m4is_z4ts5pa39jf1yhjb4->post_excerpt .= $m4is_z58f36vn45mphzpvw9h9jfvyf4g;

}
elseif ($m4is_8exr3my9nwm7zmz4r58twz == 'prepend') {
$m4is_z4ts5pa39jf1yhjb4->post_excerpt = $m4is_z58f36vn45mphzpvw9h9jfvyf4g . $m4is_z4ts5pa39jf1yhjb4->post_excerpt;

}
elseif ($m4is_8exr3my9nwm7zmz4r58twz == 'embed') {
$m4is_z4ts5pa39jf1yhjb4->post_excerpt = str_replace('{{excerpt}}', $m4is_z4ts5pa39jf1yhjb4->post_excerpt,
 $m4is_z58f36vn45mphzpvw9h9jfvyf4g);
}
}
}
}
$m4is_z4ts5pa39jf1yhjb4->post_excerpt = str_replace('{{excerpt}}', '', $m4is_z4ts5pa39jf1yhjb4->post_excerpt);

return $m4is_z4ts5pa39jf1yhjb4->post_excerpt;
}
function m4is_ttva1wzva8mfne7tsz06bbbr723y($m4is_bsamg3fezf) {
if (strpos($m4is_bsamg3fezf,
 '[vc_') !== false) {
$m4is_bsamg3fezf = preg_replace('/\[vc_.*\]/', '', $m4is_bsamg3fezf);
$m4is_bsamg3fezf = preg_replace('/\[\/vc_.*\]/',
 '', $m4is_bsamg3fezf);
$m4is_bsamg3fezf = preg_replace('/\[et_.*\]/', '', $m4is_bsamg3fezf);
$m4is_bsamg3fezf = preg_replace('/\[\/et_.*\]/',
 '', $m4is_bsamg3fezf);
}
return $m4is_bsamg3fezf;
}
function m4is_k09pjj8qjfza($m4is_z4ts5pa39jf1yhjb4) {
if (is_a($m4is_z4ts5pa39jf1yhjb4,
 'WP_Post') ) {
$m4is_z4ts5pa39jf1yhjb4->post_excerpt = $this->m4is_qvnqbzg7cjmcq6p67xf87($m4is_z4ts5pa39jf1yhjb4);
}
return $m4is_z4ts5pa39jf1yhjb4;

}

function m4is_87q8rj3y0ftsvcr8dgsxjr( $m4is_v65njznyzw30p = false, $m4is_zsfpw7bn6zgaqz0waafk71m = [] ) : bool {
if ( $this->is_administrator ) {
return false;

}
if ( $this->m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v() == 0) {
return false;
}

$m4is_sskbzdgrevc4x = [];
$m4is_06c8s5xs94f91335gnaey25 = array_filter( explode( ',',
 m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(), 'memb_user', 'tags', '' ) ) );

$m4is_y7084n6v67jme9va8yz = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' );

if (! is_array($m4is_zsfpw7bn6zgaqz0waafk71m) && $m4is_zsfpw7bn6zgaqz0waafk71m > '') {
$m4is_zsfpw7bn6zgaqz0waafk71m = explode(',',
 $m4is_zsfpw7bn6zgaqz0waafk71m);
}
if (is_array($m4is_zsfpw7bn6zgaqz0waafk71m) ) {
foreach ($m4is_zsfpw7bn6zgaqz0waafk71m as &$level) {
$level = strtolower(trim($level) );

}
}

if (is_array($m4is_y7084n6v67jme9va8yz) ) {
foreach ($m4is_y7084n6v67jme9va8yz as $m4is_h9g6e5cga) {
if (empty($m4is_zsfpw7bn6zgaqz0waafk71m) || in_array(trim(strtolower($m4is_h9g6e5cga['name']) ),
 $m4is_zsfpw7bn6zgaqz0waafk71m) ) {
$m4is_sskbzdgrevc4x[] = $m4is_h9g6e5cga['payf_id'];
if (! $m4is_v65njznyzw30p) {
$m4is_sskbzdgrevc4x[] = $m4is_h9g6e5cga['cancel_id'];

$m4is_sskbzdgrevc4x[] = $m4is_h9g6e5cga['suspend_id'];
}
}
}
}
return (boolean) count( array_intersect( $m4is_06c8s5xs94f91335gnaey25,
 $m4is_sskbzdgrevc4x ) );
}




function m4is_1zmzvjswxewkgsb1gt2k3x($m4is_47z4nr95k1qr73eg2fb3j7wd, $m4is_tz1rt7sbq40fade6e6rx) {
if (! $m4is_47z4nr95k1qr73eg2fb3j7wd) {
$m4is_5s617xt38gtaxwygn16t045xd = trim(get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_can_comment', true) );
if (! empty($m4is_5s617xt38gtaxwygn16t045xd) ) {
$m4is_47z4nr95k1qr73eg2fb3j7wd = (bool) $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h($m4is_5s617xt38gtaxwygn16t045xd);

}
}
return $m4is_47z4nr95k1qr73eg2fb3j7wd;
}
function m4is_c312z0x575w15n13kh87fqkp($m4is_z4ts5pa39jf1yhjb4) {
if (is_integer($m4is_z4ts5pa39jf1yhjb4) ) {
$m4is_z4ts5pa39jf1yhjb4 = get_post($m4is_z4ts5pa39jf1yhjb4);

}
if (is_a($m4is_z4ts5pa39jf1yhjb4, 'WP_Post') ) {
if ($m4is_z4ts5pa39jf1yhjb4->comment_status == 'open') {
return $m4is_z4ts5pa39jf1yhjb4;

}
$m4is_mw7gqg11rchfsxbj3wpz46wa = trim(get_post_meta($m4is_z4ts5pa39jf1yhjb4->ID, '_is4wp_can_comment', true) );
if (empty($m4is_mw7gqg11rchfsxbj3wpz46wa) ) {
return $m4is_z4ts5pa39jf1yhjb4;

}
else {
if ( $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h($m4is_mw7gqg11rchfsxbj3wpz46wa) ) {
$m4is_z4ts5pa39jf1yhjb4->comment_status = 'open';

return $m4is_z4ts5pa39jf1yhjb4;
}
}
}
return $m4is_z4ts5pa39jf1yhjb4;
}

function m4is_ser0vxw7xrnbkev38dx532a($m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv,
 $m4is_x0xnrab26kk90734vqnvk, $m4is_g4fz4h1295j) {
if ($m4is_x0xnrab26kk90734vqnvk != $m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv) {
if ($m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv == 'approved') {
$m4is_tz1rt7sbq40fade6e6rx = $m4is_g4fz4h1295j->comment_post_ID;

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $this->m4is_132xe588j->m4is_06a6ggsb0zg8pv1t4852qe($m4is_g4fz4h1295j->comment_author_email);

if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp || ! $m4is_tz1rt7sbq40fade6e6rx) {
return;
}
$m4is_06c8s5xs94f91335gnaey25 = get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_commenter_tag', true);
$m4is_gh7agjsse = get_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_is4wp_commenter_action', true);
$m4is_p5qbm0pfxxg = get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_commenter_goal', true);
if ($m4is_06c8s5xs94f91335gnaey25 > '') {
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx($m4is_06c8s5xs94f91335gnaey25,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ($m4is_gh7agjsse > '') {
$this->m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse($m4is_gh7agjsse,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
if ($m4is_p5qbm0pfxxg > '') {
$this->m4is_132xe588j->m4is_5qyk7ea4p2nw8ph($m4is_p5qbm0pfxxg,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
}
}
}

function m4is_znwth792bwpc2bs($m4is_6e9sxsc51qr2b62n28ywxb9w, $m4is_g4fz4h1295j) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_g4fz4h1295j->user_id;

$m4is_vn8j7eyqh5x86rtpqjk = (bool) get_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memberium_private_comments', true );
update_comment_meta($m4is_6e9sxsc51qr2b62n28ywxb9w,
 'memb_private', $m4is_vn8j7eyqh5x86rtpqjk);
if ($m4is_g4fz4h1295j->comment_approved == 1) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $this->m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_tz1rt7sbq40fade6e6rx = $m4is_g4fz4h1295j->comment_post_ID;
if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp || ! $m4is_tz1rt7sbq40fade6e6rx) {
return;

}
$m4is_06c8s5xs94f91335gnaey25 = get_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_is4wp_commenter_tag', true);
$m4is_gh7agjsse = get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_commenter_action', true);
$m4is_p5qbm0pfxxg = get_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_is4wp_commenter_goal', true);
if ($m4is_06c8s5xs94f91335gnaey25 > '') {
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx($m4is_06c8s5xs94f91335gnaey25,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ($m4is_gh7agjsse > '') {
$this->m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse($m4is_gh7agjsse,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
if ($m4is_p5qbm0pfxxg > '') {
$this->m4is_132xe588j->m4is_5qyk7ea4p2nw8ph($m4is_p5qbm0pfxxg,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
}
}

public function m4is_jcc66z3e1sptng61a5xth3r0hx202( array $m4is_3h2p59t1q80qzpcs, object $m4is_ej77qcz39xjz,
 array $m4is_g61yzqs7ecta0xztr70d7v ) : array {
$this->in_list = 1;
$m4is_c4bhwe9x6tb = [];
$m4is_6n4xfsrcre7 = current_user_can('manage_options');


if (is_array($m4is_3h2p59t1q80qzpcs) ) {
foreach ($m4is_3h2p59t1q80qzpcs as $m4is_j8j55t8dz79m7 => $m4is_s8cs5mdq57e5bgpqzd) {
$m4is_r7mxjxrgcx = true;

$m4is_tz1rt7sbq40fade6e6rx = (int) $m4is_s8cs5mdq57e5bgpqzd->ID;
$m4is_jnj3d142b45t7w52e = (int) $m4is_s8cs5mdq57e5bgpqzd->menu_item_parent;

$m4is_q9wzx80s8bg2akzvw3091t46p7yc = [
'{{' => '[',
'}}' => ']',
];
if (! $m4is_6n4xfsrcre7) {
if ($m4is_r7mxjxrgcx) {
if ($m4is_s8cs5mdq57e5bgpqzd->menu_item_parent > 0 && in_array($m4is_s8cs5mdq57e5bgpqzd->menu_item_parent,
 $m4is_c4bhwe9x6tb) ) {
$m4is_r7mxjxrgcx = false;
}
}
if ($m4is_r7mxjxrgcx) {
$m4is_r7mxjxrgcx = ! (boolean) get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_hide_from_menu', true);
}

if ($m4is_r7mxjxrgcx) {
if ($m4is_s8cs5mdq57e5bgpqzd->type == 'post_type' && ! $this->m4is_krs2avqy019m3mx($m4is_tz1rt7sbq40fade6e6rx) ) {
$m4is_sa1zwmzw = $this->m4is_v75x9g18kvwf86vy5e0pgh6($m4is_tz1rt7sbq40fade6e6rx);


if ($m4is_sa1zwmzw == 'hide' || $m4is_sa1zwmzw == 'redirect') {
$m4is_r7mxjxrgcx = false;
}
}
}
}
if ($m4is_r7mxjxrgcx) {
if (strpos($m4is_s8cs5mdq57e5bgpqzd->name,
 '[') !== false || strpos($m4is_s8cs5mdq57e5bgpqzd->name, '{{') !== false) {
$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = strtr($m4is_3h2p59t1q80qzpcs[$m4is_j8j55t8dz79m7]->name,
 $m4is_q9wzx80s8bg2akzvw3091t46p7yc);
$m4is_3h2p59t1q80qzpcs[$m4is_j8j55t8dz79m7]->name = do_shortcode($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4);

}
if (strpos($m4is_s8cs5mdq57e5bgpqzd->url, '[') !== false || strpos($m4is_s8cs5mdq57e5bgpqzd->url, '{{') !== false) {
$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = strtr($m4is_3h2p59t1q80qzpcs[$m4is_j8j55t8dz79m7]->url,
 $m4is_q9wzx80s8bg2akzvw3091t46p7yc);
$m4is_3h2p59t1q80qzpcs[$m4is_j8j55t8dz79m7]->url = do_shortcode(urldecode($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4) );

}
}
if (! $m4is_r7mxjxrgcx) {
$m4is_c4bhwe9x6tb[] = $m4is_tz1rt7sbq40fade6e6rx;
unset($m4is_3h2p59t1q80qzpcs[$m4is_j8j55t8dz79m7]);

}
}
}
$this->in_list = 0;
return $m4is_3h2p59t1q80qzpcs;
}

private function m4is_9t2r9f6g1rsmb6tk6sg9ptxxr4r0jyf0() : array {
static $m4is_wtt69zqx60txhy6926q5ank1ajb8;

if ( is_array( $m4is_wtt69zqx60txhy6926q5ank1ajb8 ) ) {
return $m4is_wtt69zqx60txhy6926q5ank1ajb8;
}
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;

$m4is_kgdwxx4f = 'memberium/posts';
$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = 'meta/access/hidden_menu_items';
$m4is_5p1kv9r3f9ermvn3k = MINUTE_IN_SECONDS;

$m4is_wtt69zqx60txhy6926q5ank1ajb8 = wp_cache_get( $m4is_kgdwxx4f, $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, false, $m4is_6p2tyvq6paj43svrn7zqaykxzy );

if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy === false || ! is_array( $m4is_wtt69zqx60txhy6926q5ank1ajb8 ) ) {
$m4is_r53562w9befcb2kh7rm4p7n5 = [
'meta_query' =>
 [
[
'key' => '_is4wp_hide_from_menu',
'compare' => '=',
'value' => 1,
],
],
'posts_per_page' => -1,
'post_type' => 'any', 
'fields' =>
 'ids', 
];
$m4is_wtt69zqx60txhy6926q5ank1ajb8 = get_posts( $m4is_r53562w9befcb2kh7rm4p7n5 );
$m4is_wtt69zqx60txhy6926q5ank1ajb8 = is_array( $m4is_wtt69zqx60txhy6926q5ank1ajb8 ) ? $m4is_wtt69zqx60txhy6926q5ank1ajb8 : [];

wp_cache_set( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_wtt69zqx60txhy6926q5ank1ajb8, $m4is_kgdwxx4f, $m4is_5p1kv9r3f9ermvn3k );

}
return $m4is_wtt69zqx60txhy6926q5ank1ajb8;
}

public function m4is_xh5rcs5vz4y0pjx1g9y( array $m4is_h3dj6qx5rxk7t88445hx7m3417 ) : array {

static $m4is_q0h9581xggqj0ehryqdw5j;

static $m4is_ze4vd3tybwes43s97ag54;
if ( empty( $m4is_h3dj6qx5rxk7t88445hx7m3417 ) ) {
return $m4is_h3dj6qx5rxk7t88445hx7m3417;
}
$m4is_ze4vd3tybwes43s97ag54 ??= $this->m4is_9t2r9f6g1rsmb6tk6sg9ptxxr4r0jyf0();

$m4is_6n4xfsrcre7 = current_user_can('manage_options');
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_my4v1bdvaxx6fbjdc71p7f7az3f = array_column( $m4is_h3dj6qx5rxk7t88445hx7m3417, 'ID' );
$m4is_dbahezknbqtbfar1fc = [];
$m4is_kgdwcmqprjtxejnf2xfz5zm8vkw1z3 = is_user_logged_in();

foreach( $m4is_h3dj6qx5rxk7t88445hx7m3417 as $m4is_j8j55t8dz79m7 => $m4is_svj2mbdqm125ygvymkqf2h9 ) {
if ( in_array( $m4is_svj2mbdqm125ygvymkqf2h9->object_id,
 $m4is_ze4vd3tybwes43s97ag54 ) ) {
$m4is_dbahezknbqtbfar1fc[] = $m4is_svj2mbdqm125ygvymkqf2h9->ID;
unset( $m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7] );

}
}

$m4is_q0h9581xggqj0ehryqdw5j ??= $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'login_url');
$this->in_list = 1;

$m4is_c4bhwe9x6tb = [];
$m4is_fj5dgn1q92krcj82f9wz = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'logout_page', 0 );
$m4is_pg5cvz9f606jrj0s8vffhgyvpm = empty( $m4is_fj5dgn1q92krcj82f9wz ) ? site_url( '/' ) : get_permalink( $m4is_fj5dgn1q92krcj82f9wz );

foreach ($m4is_h3dj6qx5rxk7t88445hx7m3417 as $m4is_j8j55t8dz79m7 => $m4is_svj2mbdqm125ygvymkqf2h9) {
$m4is_r7mxjxrgcx = true;
$m4is_s63cs6bqn0vgc6emva9 = (int) $m4is_svj2mbdqm125ygvymkqf2h9->ID;

$m4is_tz1rt7sbq40fade6e6rx = (int) $m4is_svj2mbdqm125ygvymkqf2h9->object_id;
$m4is_jnj3d142b45t7w52e = (int) $m4is_svj2mbdqm125ygvymkqf2h9->menu_item_parent;

if ( ! $m4is_6n4xfsrcre7 ) {

if ( $m4is_r7mxjxrgcx ) {
if ( $m4is_svj2mbdqm125ygvymkqf2h9->menu_item_parent > 0 && in_array( $m4is_svj2mbdqm125ygvymkqf2h9->menu_item_parent,
 $m4is_c4bhwe9x6tb ) ) {
$m4is_r7mxjxrgcx = false;
}
}
if ( $m4is_r7mxjxrgcx && $m4is_svj2mbdqm125ygvymkqf2h9->type == 'post_type' ) {
$m4is_r7mxjxrgcx = ! (boolean) get_post_meta( $m4is_svj2mbdqm125ygvymkqf2h9->object_id,
 '_is4wp_hide_from_menu', true );
}

if ( $m4is_r7mxjxrgcx ) {
if ( $m4is_svj2mbdqm125ygvymkqf2h9->type == 'post_type' && ! $this->m4is_krs2avqy019m3mx( $m4is_tz1rt7sbq40fade6e6rx ) ) {
$m4is_sa1zwmzw = $this->m4is_v75x9g18kvwf86vy5e0pgh6( $m4is_tz1rt7sbq40fade6e6rx );


if ($m4is_sa1zwmzw == 'hide' || $m4is_sa1zwmzw == 'redirect') {
$m4is_r7mxjxrgcx = false;
}
}
}
} 

if ( $m4is_r7mxjxrgcx ) {
if ( stripos( $m4is_svj2mbdqm125ygvymkqf2h9->url,
 '/memberium:' ) === 0 ) {

if ( stripos( $m4is_svj2mbdqm125ygvymkqf2h9->url, '/memberium:logout' ) !== false ) {
if ( $m4is_kgdwcmqprjtxejnf2xfz5zm8vkw1z3 ) {
$m4is_nkz26acytmdk5a8r93d4y4qkmct4gn = substr( $m4is_svj2mbdqm125ygvymkqf2h9->url,
 18 );
if ( $m4is_nkz26acytmdk5a8r93d4y4qkmct4gn == '' ) {
$m4is_nkz26acytmdk5a8r93d4y4qkmct4gn = $m4is_pg5cvz9f606jrj0s8vffhgyvpm;

}
$m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7]->url = wp_logout_url( $m4is_nkz26acytmdk5a8r93d4y4qkmct4gn );
}
else {
$m4is_r7mxjxrgcx = false;

}
}

if ( stripos( $m4is_svj2mbdqm125ygvymkqf2h9->url, '/memberium:loginlogout') !== false ) {
if ( $m4is_kgdwcmqprjtxejnf2xfz5zm8vkw1z3 ) {

$m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7]->url = wp_logout_url( site_url('/') );

}
else {

if (! empty($m4is_q0h9581xggqj0ehryqdw5j) ) {
$m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7]->url = get_permalink($m4is_q0h9581xggqj0ehryqdw5j);

}
else {
$m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7]->url = wp_login_url();
}
}
$m4is_nkz26acytmdk5a8r93d4y4qkmct4gn = substr( $m4is_svj2mbdqm125ygvymkqf2h9->url,
 18 );
if ( empty( $m4is_nkz26acytmdk5a8r93d4y4qkmct4gn ) ) {
$m4is_nkz26acytmdk5a8r93d4y4qkmct4gn = site_url( '/' );
}
}

if (stripos($m4is_svj2mbdqm125ygvymkqf2h9->url,
 '/memberium:autologin') !== FALSE) {


$parts = explode('|', $m4is_svj2mbdqm125ygvymkqf2h9->url);
}

$m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7]->title = do_shortcode($m4is_svj2mbdqm125ygvymkqf2h9->title);

}
}
if ( ! $m4is_r7mxjxrgcx ) {
$m4is_c4bhwe9x6tb[] = $m4is_svj2mbdqm125ygvymkqf2h9->ID;
unset( $m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7] );

}
}
$this->in_list = 0;
return $m4is_h3dj6qx5rxk7t88445hx7m3417;
}

public function m4is_kbebzqffdewstg( array $m4is_h3dj6qx5rxk7t88445hx7m3417 ) : array {
if ( empty( $m4is_h3dj6qx5rxk7t88445hx7m3417 ) ) {
return $m4is_h3dj6qx5rxk7t88445hx7m3417;

}
$m4is_6n4xfsrcre7 = current_user_can( 'manage_options' );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_fj5dgn1q92krcj82f9wz = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user',
 'logout_page', 0 );
$m4is_q0h9581xggqj0ehryqdw5j ??= $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'login_url' );

$m4is_pg5cvz9f606jrj0s8vffhgyvpm = empty( $m4is_fj5dgn1q92krcj82f9wz ) ? site_url( '/' ) : get_permalink( $m4is_fj5dgn1q92krcj82f9wz );

foreach ($m4is_h3dj6qx5rxk7t88445hx7m3417 as $m4is_j8j55t8dz79m7 => $m4is_svj2mbdqm125ygvymkqf2h9) {
$m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7]->title = do_shortcode($m4is_svj2mbdqm125ygvymkqf2h9->title);

if ( stripos( $m4is_svj2mbdqm125ygvymkqf2h9->url, '/memberium:logout' ) !== false ) {
if ( is_user_logged_in() ) {
$m4is_nkz26acytmdk5a8r93d4y4qkmct4gn = substr( $m4is_svj2mbdqm125ygvymkqf2h9->url,
 18 );
if ( $m4is_nkz26acytmdk5a8r93d4y4qkmct4gn == '' ) {
$m4is_nkz26acytmdk5a8r93d4y4qkmct4gn = $m4is_pg5cvz9f606jrj0s8vffhgyvpm;

}
$m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7]->url = wp_logout_url( $m4is_nkz26acytmdk5a8r93d4y4qkmct4gn );
}
else {
unset( $m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7] );

}
continue;
}

if ( stripos( $m4is_svj2mbdqm125ygvymkqf2h9->url, '/memberium:loginlogout') !== false ) {
if ( is_user_logged_in() ) {

$m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7]->url = wp_logout_url( site_url('/') );

}
else {

if (! empty($m4is_q0h9581xggqj0ehryqdw5j) ) {
$m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7]->url = get_permalink($m4is_q0h9581xggqj0ehryqdw5j);

}
else {
$m4is_h3dj6qx5rxk7t88445hx7m3417[$m4is_j8j55t8dz79m7]->url = wp_login_url();
}
}
$m4is_nkz26acytmdk5a8r93d4y4qkmct4gn = substr( $m4is_svj2mbdqm125ygvymkqf2h9->url,
 18 );
if ( empty($m4is_nkz26acytmdk5a8r93d4y4qkmct4gn) ) {
$m4is_nkz26acytmdk5a8r93d4y4qkmct4gn = site_url('/');
}
continue;
}

if (stripos($m4is_svj2mbdqm125ygvymkqf2h9->url,
 '/memberium:autologin') !== FALSE) {


$parts = explode('|', $m4is_svj2mbdqm125ygvymkqf2h9->url);
}
}
return $m4is_h3dj6qx5rxk7t88445hx7m3417;

}

function m4is_yg06va0zwnh6m0bs5327q() {
$m4is_g61yzqs7ecta0xztr70d7v = [
'response' => 403,
'code' => __('Public RSS Feed Unavailable'),

'exit' => true,
];
wp_die( __('No feed available, please visit our homepage.'), __('Access Denied'), $m4is_g61yzqs7ecta0xztr70d7v );

}

function m4is_z29keh1z($m4is_knxbec8fr3be1s2tkx0ydee0z) {
$m4is_knxbec8fr3be1s2tkx0ydee0z = strtolower(trim($m4is_knxbec8fr3be1s2tkx0ydee0z) );

$m4is_gh7agjsse = [
'default',
'excerpt',
'hide',
'redirect',
];
if ($m4is_knxbec8fr3be1s2tkx0ydee0z == '' || in_array($m4is_knxbec8fr3be1s2tkx0ydee0z,
 $m4is_gh7agjsse) ) {
$this->m4is_132xe588j->m4is_y62rh9h80sg34je11vxmmn08b0('prohibited_action_override', $m4is_knxbec8fr3be1s2tkx0ydee0z);

return true;
}
else {
return false;
}
}

function m4is_yvw2gz9jprtk6kkkbygfs3sf5rc($m4is_knxbec8fr3be1s2tkx0ydee0z) {
$m4is_knxbec8fr3be1s2tkx0ydee0z = strtolower(trim($m4is_knxbec8fr3be1s2tkx0ydee0z) );

$m4is_zf0m8daqg60gnyznep6s = [
'hide',
'show',
'excerpt',
'default' ,
'redirect'
];
if ( in_array( $m4is_knxbec8fr3be1s2tkx0ydee0z,
 $m4is_zf0m8daqg60gnyznep6s ) ) {
$this->m4is_132xe588j->m4is_y62rh9h80sg34je11vxmmn08b0( 'prohibited_action_override', $m4is_knxbec8fr3be1s2tkx0ydee0z );

return true;
}
return false;
}
function m4is_seg6qnhp435ngf6( $m4is_kw23kqxbesd8dvhkn ) : int {
$m4is_kw23kqxbesd8dvhkn = (int) $m4is_kw23kqxbesd8dvhkn;

$m4is_x0r7j58f68rer6hrp = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'excerpt_length' );
if ( $m4is_x0r7j58f68rer6hrp > 0) {
$m4is_kw23kqxbesd8dvhkn = $m4is_x0r7j58f68rer6hrp;

}
return $m4is_kw23kqxbesd8dvhkn;
}




function m4is_g88znmvmmr() : bool {
$i2sdk_options = $this->m4is_132xe588j->get_i2sdk_options();

return $i2sdk_options['server_verified'] == 1;
}

function m4is_tt2scetf905pm9txa45t( string $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, bool $m4is_13van2p1m1kk6h6h1 = true ) : string {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower( trim( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) );

$m4is_rqxytszfq5v6syth1csqqxvy5 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'affiliate', $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, '' );
if ( $m4is_13van2p1m1kk6h6h1 ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = htmlspecialchars( $m4is_rqxytszfq5v6syth1csqqxvy5 );

}
return $m4is_rqxytszfq5v6syth1csqqxvy5;
}

function m4is_n2ajtpwcec(string $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, bool $m4is_13van2p1m1kk6h6h1 = true) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower(trim($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) );

$m4is_rqxytszfq5v6syth1csqqxvy5 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) ?? '';
if ($m4is_13van2p1m1kk6h6h1) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = htmlspecialchars($m4is_rqxytszfq5v6syth1csqqxvy5);

}
return $m4is_rqxytszfq5v6syth1csqqxvy5;
}

function m4is_7fz7f6ggkn8ay2jys1188($m4is_1kxzqnq68yy04pkx47ay) {
static $m4is_yrsthh0s4s62mfk9;

$m4is_1kxzqnq68yy04pkx47ay = strtolower(trim($m4is_1kxzqnq68yy04pkx47ay) );
if ($m4is_1kxzqnq68yy04pkx47ay == '') {
return 0;
}
if (isset($m4is_yrsthh0s4s62mfk9[$m4is_1kxzqnq68yy04pkx47ay]) ) {
return $m4is_yrsthh0s4s62mfk9[$m4is_1kxzqnq68yy04pkx47ay];

}
$m4is_p6qq54zh0y05q4kabs87svdfbjg = 'memberium_emailstat_' .md5($m4is_1kxzqnq68yy04pkx47ay);
$m4is_ergk8xq5ycd1a4cjg8ya2 = get_transient($m4is_p6qq54zh0y05q4kabs87svdfbjg);

if ($m4is_ergk8xq5ycd1a4cjg8ya2) {
return $m4is_ergk8xq5ycd1a4cjg8ya2;
}
$m4is_yrsthh0s4s62mfk9[$m4is_1kxzqnq68yy04pkx47ay] = $this->m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->optstatus($m4is_1kxzqnq68yy04pkx47ay);

set_transient($m4is_p6qq54zh0y05q4kabs87svdfbjg, $m4is_yrsthh0s4s62mfk9[$m4is_1kxzqnq68yy04pkx47ay], 300);
return $m4is_yrsthh0s4s62mfk9[$m4is_1kxzqnq68yy04pkx47ay];

}

public function m4is_0hcmreffwn67caen9nr3( string $m4is_sq8wkcxv7czejqkkzzn6zspry2, string $m4is_vkdsq7nx = 'ec2' ) : bool {
$m4is_v2mqr4setarray10h87e94q66f0zy7 = m4is_0gqs7crsrzdbgfzptjws94s::m4is_pdwjcayq6rwe60k8pdne157cz();

$m4is_sq8wkcxv7czejqkkzzn6zspry2 = m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z();
if ( ! is_array( $m4is_v2mqr4setarray10h87e94q66f0zy7 ) ) {
return false;

}
foreach ($m4is_v2mqr4setarray10h87e94q66f0zy7 as $m4is_x8fc7rsakpdrpmcd66seg4m) {
if (strtolower($m4is_x8fc7rsakpdrpmcd66seg4m->service) == $m4is_vkdsq7nx) {
if ( m4is_0gqs7crsrzdbgfzptjws94s::m4is_97p3kd50vnx4jwtt8wvgrcxn0( $m4is_sq8wkcxv7czejqkkzzn6zspry2,
 $m4is_x8fc7rsakpdrpmcd66seg4m->ip_prefix ) ) {
return true;
}
}
}
return false;
}
function m4is_sxqaa0hb() : bool {
if (empty($_SERVER['HTTP_X_BUFFERBOT']) ) {
return false;

}
if ($this->m4is_0hcmreffwn67caen9nr3(m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z() ) ) {
return true;
}
return false;

}

function m4is_4e0gb2vrxeestdr94v() : bool {
$m4is_mcy9wwczh9f3xdrrxvp4d = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';

if (empty($m4is_mcy9wwczh9f3xdrrxvp4d) ) {
return false;
}
if (strpos($m4is_mcy9wwczh9f3xdrrxvp4d, 'facebookexternalhit') !== FALSE) {
$m4is_sq8wkcxv7czejqkkzzn6zspry2 = m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z();





$m4is_v2mqr4setarray10h87e94q66f0zy7 = [
'103.4.96.0/22',
'173.252.64.0/18',
'173.252.64.0/19',
'173.252.70.0/24',
'173.252.96.0/19',

'204.15.20.0/22',
'31.13.24.0/21',
'31.13.64.0/18',
'31.13.64.0/19',
'31.13.64.0/24',
'31.13.65.0/24',
'31.13.66.0/24',
'31.13.67.0/24',

'31.13.68.0/24',
'31.13.69.0/24',
'31.13.70.0/24',
'31.13.71.0/24',
'31.13.72.0/24',
'31.13.73.0/24',
'31.13.74.0/24',
'31.13.75.0/24',

'31.13.76.0/24',
'31.13.77.0/24',
'31.13.78.0/24',
'31.13.79.0/24',
'31.13.80.0/24',
'31.13.81.0/24',
'31.13.82.0/24',
'31.13.83.0/24',

'31.13.84.0/24',
'31.13.85.0/24',
'31.13.86.0/24',
'31.13.87.0/24',
'31.13.88.0/24',
'31.13.89.0/24',
'31.13.90.0/24',
'31.13.91.0/24',

'31.13.92.0/24',
'31.13.93.0/24',
'31.13.94.0/24',
'31.13.95.0/24',
'31.13.96.0/19',
'66.220.144.0/20',
'66.220.144.0/21',
'66.220.152.0/21',

'66.220.159.0/24',
'69.171.224.0/19',
'69.171.224.0/20',
'69.171.239.0/24',
'69.171.240.0/20',
'69.171.253.0/24',
'69.171.255.0/24',

'69.63.176.0/20',
'69.63.176.0/20',
'69.63.176.0/21',
'69.63.176.0/24',
'69.63.178.0/24',
'69.63.184.0/21',
'69.63.186.0/24',
'74.119.76.0/22',

];
foreach ($m4is_v2mqr4setarray10h87e94q66f0zy7 as $m4is_x8fc7rsakpdrpmcd66seg4m) {
if (m4is_0gqs7crsrzdbgfzptjws94s::m4is_97p3kd50vnx4jwtt8wvgrcxn0($m4is_sq8wkcxv7czejqkkzzn6zspry2,
 $m4is_x8fc7rsakpdrpmcd66seg4m) ) {
return true;
}
}
}
return false;
}
function m4is_v5xm5za55y8bey7r92bt94yvkxq5ft() : bool {
$m4is_mcy9wwczh9f3xdrrxvp4d = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';

if (empty($m4is_mcy9wwczh9f3xdrrxvp4d) ) {
return false;
}


if (stristr($m4is_mcy9wwczh9f3xdrrxvp4d, 'applebot') ) {
if (substr(m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z(),
 0, 3) == '17.') {
return true;
}
}
return false;
}
function m4is_h56e5bm2gznyd1a() : bool {
$m4is_mcy9wwczh9f3xdrrxvp4d = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';

if (empty($m4is_mcy9wwczh9f3xdrrxvp4d) ) {
return false;
}
return (stristr($m4is_mcy9wwczh9f3xdrrxvp4d, 'google.') !== false);
}
function m4is_6cwp33ph() : bool {
$m4is_mcy9wwczh9f3xdrrxvp4d = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';

if (empty($m4is_mcy9wwczh9f3xdrrxvp4d) ) {
return false;
}

if (stristr($m4is_mcy9wwczh9f3xdrrxvp4d, "googlebot") ) {
if (stristr(gethostbyaddr(m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z() ) ,
 "googlebot.com") ) {
return true;
}
}
return false;
}
function m4is_e4m1kkzt6t1sw() : bool {
return ! empty( m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'memb_user', 'membership_names', '' ) );
}

function m4is_rwhc04e22tz( $m4is_x77p9kpmjj ) : bool {
if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return false;

}
if ( $this->is_administrator ) {
return true;;
}
$m4is_x77p9kpmjj = (int) $m4is_x77p9kpmjj;
$m4is_dvt5qrx7tzdwzf6 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'memb_user', 'membership_level', 0 );
return ( $m4is_dvt5qrx7tzdwzf6 > $m4is_x77p9kpmjj );
}

function m4is_4krd94v1rk8gmvc6pt3qt( string $m4is_wy3bva5c54m8t8bfq1wvay2,
 int $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0 ) : bool {
if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return false;
}
$m4is_wy3bva5c54m8t8bfq1wvay2 = strtolower( trim( $m4is_wy3bva5c54m8t8bfq1wvay2 ) );

if ( empty( $m4is_wy3bva5c54m8t8bfq1wvay2 ) ) {
return false;
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_wk4dh1rnd3wmwvsggq51nhn87 ? $m4is_wk4dh1rnd3wmwvsggq51nhn87 : $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return false;
}
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'manage_options' ) ) {
return true;
 
}
$m4is_et65vqhntk = array_filter( explode( ',', strtolower( m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'membership_names', '' ) ) ) );
return in_array( $m4is_wy3bva5c54m8t8bfq1wvay2, $m4is_et65vqhntk );
}

function m4is_6w88fagm04r76erxncm12aww8gh( $m4is_zrj19crmqpbwed1srvv ) {
if (! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return FALSE;

}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();
if ($m4is_wk4dh1rnd3wmwvsggq51nhn87 == 0) {
return FALSE;

}
$m4is_zrj19crmqpbwed1srvv = strtolower(trim($m4is_zrj19crmqpbwed1srvv) );
if ($m4is_zrj19crmqpbwed1srvv == '') {
return FALSE;
}
$m4is_rqxytszfq5v6syth1csqqxvy5 = get_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memberium::field::' . $m4is_zrj19crmqpbwed1srvv, TRUE);
if ($m4is_rqxytszfq5v6syth1csqqxvy5 == '') {
$m4is_rqxytszfq5v6syth1csqqxvy5 = get_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memberium::counter::' . $m4is_zrj19crmqpbwed1srvv, TRUE);
if ($m4is_rqxytszfq5v6syth1csqqxvy5 > '') {
update_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memberium::field::' . $m4is_zrj19crmqpbwed1srvv, $m4is_rqxytszfq5v6syth1csqqxvy5);
delete_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memberium::counter::' . $m4is_zrj19crmqpbwed1srvv);
}
}
return (int) $m4is_rqxytszfq5v6syth1csqqxvy5;
}
function m4is_k7s0azvt1qkdy91q9v23xaar65mz($m4is_zrj19crmqpbwed1srvv,
 $m4is_axm1thxjjd6wambw9w2c, $m4is_wk4dh1rnd3wmwvsggq51nhn87 = null ) {
if (! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;

}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_wk4dh1rnd3wmwvsggq51nhn87 ?? $this->m4is_132xe588j->m4is_vd3qpw0vkdm();
if ($m4is_wk4dh1rnd3wmwvsggq51nhn87 == 0) {
return FALSE;

}
$m4is_zrj19crmqpbwed1srvv = strtolower( trim( $m4is_zrj19crmqpbwed1srvv ) );
if ( empty( $m4is_zrj19crmqpbwed1srvv ) ) {
return FALSE;

}
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memberium::field::' . $m4is_zrj19crmqpbwed1srvv, $m4is_axm1thxjjd6wambw9w2c );

}

function m4is_zf8kwjvagww2hjgq3t() : array {
if (! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return [];
}
return array_filter( explode( ',',
 m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(), 'memb_user', 'membership_names',
 '' ) ) );
}




function m4is_cmy6ztjz59ks3wynt2aqn3fe81zx() {
$m4is_qc36n7jdf = '<script type="text/javascript">';
$m4is_qc36n7jdf .= 'var ajaxurl = "' . admin_url('admin-ajax.php') . '"';

$m4is_qc36n7jdf .= '</script>';
echo $m4is_qc36n7jdf;
} 

function m4is_ccdebhbq33b1g737qdy15k2mf4() {
$m4is_t9svq56t4ysv1rsgy1g61g = $this->m4is_132xe588j->m4is_5kywzj74m8ht8s0();

$this->signature = true;
printf( "<meta name='generator' content='Memberium v%s for WordPress' />\n", $m4is_t9svq56t4ysv1rsgy1g61g );

if ( is_singular() ) {
global $post;
$m4is_tz1rt7sbq40fade6e6rx = $post->ID ?? 0;

if ( ! empty( $post->ID ) ) {
$m4is_0kdm2zprhs5b1 = get_post_meta( $post->ID,
 '_iswp_custom_code', true );
$m4is_n7x0afpz = [
'head' => '',
'css' => '',
'js' => '',
];
$m4is_0kdm2zprhs5b1 = wp_parse_args( $m4is_0kdm2zprhs5b1,
 $m4is_n7x0afpz );
echo ( ! empty( $m4is_0kdm2zprhs5b1['head'] ) ) ? do_shortcode( $m4is_0kdm2zprhs5b1['head'] ) . "\n" : '';
echo ( ! empty( $m4is_0kdm2zprhs5b1['css'] ) ) ? "\n<style>\n" . do_shortcode( $m4is_0kdm2zprhs5b1['css'] ) . "\n</style>\n" : '';

echo ( ! empty( $m4is_0kdm2zprhs5b1['js'] ) ) ? "\n<script>\n" . do_shortcode( $m4is_0kdm2zprhs5b1['js'] ) . "\n</script>\n" : '';

}
}

return true;
}

function m4is_fn0j3xm5xjkaervzfz2zfqrs78q() {

if ( ! $this->signature ) {
$this->m4is_ccdebhbq33b1g737qdy15k2mf4();

}
$this->m4is_a63c55rc6();

if ( ! empty( $this->footer_json ) ) {
$m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1 = $this->footer_json;

$m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1['home_url'] = ( ! isset( $m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1['home_url'] ) ) ? get_home_url() : $m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1['home_url'];

$m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1['ajax_url'] = ( ! isset( $m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1['ajax_url'] ) ) ? admin_url('admin-ajax.php') : $m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1['ajax_url'];

$m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1['contact_id'] = ( ! isset( $m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1['contact_id'] ) ) ? $this->m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v() : $m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1['contact_id'];

$json_data = json_encode( $m4is_5s0d6532f3hawn7qfgfay0mpnvn2b1, JSON_PRETTY_PRINT );

echo sprintf('<script>var %s=%s;</script>', 'memberium_data',
 $json_data);
}
}
private function m4is_a63c55rc6() : void {
if ( empty( $this->m4is_mwb9jmz313g106ztk8kns82q7jg5yp ) || ! is_array( $this->m4is_mwb9jmz313g106ztk8kns82q7jg5yp ) ) {
return;

}
echo "<script>\n\n";
foreach ( $this->m4is_mwb9jmz313g106ztk8kns82q7jg5yp as $m4is_gyng2nrczd ) {
$m4is_hce1y1a4qd65zhnwsj = rawurlencode( $m4is_gyng2nrczd['name'] );

$m4is_rqxytszfq5v6syth1csqqxvy5 = rawurlencode( $m4is_gyng2nrczd['value'] );
$m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = $m4is_gyng2nrczd['path'];


echo "   document.cookie = '{$m4is_hce1y1a4qd65zhnwsj}={$m4is_rqxytszfq5v6syth1csqqxvy5}; ";

if ( ! empty($m4is_gyng2nrczd['domain'])) {
echo "domain=",
 rawurlencode($m4is_gyng2nrczd['domain']), "; ";
}

if ( ! empty($m4is_gyng2nrczd['path'])) {
echo "path=", $m4is_gyng2nrczd['path'],
 "; ";
}

if ( ! empty($m4is_gyng2nrczd['expiration'] ) ) {
echo "expires=", gmdate('D, d M Y H:i:s \G\M\T', strtotime( $m4is_gyng2nrczd['expiration'] ) ),
 "; ";
}

if (!empty($m4is_gyng2nrczd['secure'])) {
echo "secure; ";
}

echo "';\n";
}
echo "\n</script>\n\n";
}

function m4is_pwjn3jb8zfr3xpxem($m4is_mcy9wwczh9f3xdrrxvp4d = null) {

$m4is_mcy9wwczh9f3xdrrxvp4d = $m4is_mcy9wwczh9f3xdrrxvp4d ? strtolower($m4is_mcy9wwczh9f3xdrrxvp4d) : strtolower($_SERVER['HTTP_USER_AGENT']);

static $m4is_dg1pmqqtwpf3gmh85nhthg3m;

$cache_key = md5($m4is_mcy9wwczh9f3xdrrxvp4d);

if (empty($m4is_dg1pmqqtwpf3gmh85nhthg3m[$cache_key])) {

$m4is_gdh573rvrrd8ywqxv = [
'os' =>
 'windows',
'type' => 'desktop',
'user' => 'browser',
'browser' => 'unknown'
];

$patterns = [
"/applebot|bufferbot|adsbot|feedfetcher-google|googlebot|msnbot|pingdom\.com|watchmouse|yahooseeker|yahoobot/" =>
 ['os' => 'bot', 'type' => 'bot', 'user' => 'bot'],
"/phone|symbian|htc_|htc-|opera mini|nokia|fennec|hiptop|kindle|mot |mot-|webos\/|samsung|sonyericsson|^sie-|mobile|pda;|avantgo|eudoraweb|minimo|netfront|brew|teleca|lg;|lge |wap;| wap /" =>
 ['os' => 'misc', 'type' => 'mobile', 'user' => 'browser'],
"/iemobile|windows ce/" => ['os' => 'bot', 'type' => 'bot', 'user' => 'bot'],

"/palmos/" => ['os' => 'palmos', 'type' => 'mobile', 'user' => 'browser'],
"/blackberry/" => ['os' => 'blackberry', 'type' => 'mobile',
 'user' => 'browser'],
"/iphone|itouch|ipad|ipod/" => ['os' => 'ios', 'type' => 'mobile', 'user' => 'browser'],
"/android/" => ['os' =>
 'android', 'type' => 'mobile', 'user' => 'browser'],
"/chrome/" => ['browser' => 'chrome', 'user' => 'browser'],
"/firefox/" => ['browser' =>
 'firefox', 'user' => 'browser'],
"/kindle/" => ['os' => 'kindle', 'type' => 'mobile', 'user' => 'browser'],
"/mac os/" => ['os' =>
 'mac', 'type' => 'desktop'],
"/msie/" => ['browser' => 'internetexplorer', 'type' => 'desktop'],
"/linux/" => ['os' => 'linux'],
"/lynx/" =>
 ['browser' => 'lynx', 'user' => 'browser'],
"/netscape/" => ['browser' => 'netscape'],
"/nintendo/" => ['browser' => 'nintendo', 'os' =>
 'nintendo', 'type' => 'mobile', 'user' => 'browser'],
"/opera|opr/" => ['browser' => 'opera'],
"/safari/" => ['browser' => 'safari'],

"/silk/" => ['browser' => 'silk', 'os' => 'android', 'type' => 'mobile', 'user' => 'browser'],
];

foreach ($patterns as $pattern =>
 $info) {
if (preg_match($pattern, $m4is_mcy9wwczh9f3xdrrxvp4d)) {
$m4is_gdh573rvrrd8ywqxv = array_merge($m4is_gdh573rvrrd8ywqxv, $info);

}
}

$m4is_dg1pmqqtwpf3gmh85nhthg3m[$cache_key] = $m4is_gdh573rvrrd8ywqxv;
}

return $m4is_dg1pmqqtwpf3gmh85nhthg3m[$cache_key];
}




function m4is_c8gwpy7fw4tmmeqjehtefjc2kpygbndh( $m4is_bsamg3fezf ) {
global $shortcode_tags;


$m4is_qx8e26xdpzbpfvb35czn = $shortcode_tags;

remove_all_shortcodes();

$this->shortcodes_registered = false;

do_action('memberium/shortcodes/add');


$m4is_bsamg3fezf = do_shortcode($m4is_bsamg3fezf);

$shortcode_tags = $m4is_qx8e26xdpzbpfvb35czn;

return $m4is_bsamg3fezf;
}

public function m4is_jnrfagq360n7e6wj7c8rqqpn( bool $m4is_pxqqyhvpv8x9tskp6p79ktbd = false ) {
global $wpdb;

$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = 'custom_shortcodes';
$m4is_kgdwxx4f = 'memberium/core';
$m4is_yqbs57707b9pgq = MINUTE_IN_SECONDS * 10;

$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
$m4is_pbe6ph2dd0rk = wp_cache_get( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_kgdwxx4f,
 false, $m4is_6p2tyvq6paj43svrn7zqaykxzy );
if ( $m4is_pxqqyhvpv8x9tskp6p79ktbd === true || $m4is_6p2tyvq6paj43svrn7zqaykxzy === false ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `post_name` FROM `{$wpdb->posts}` WHERE `post_type` = 'memb_shortcodeblocks' and `post_status` = 'publish' ";

$m4is_tbdh9qb6r6z = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_tbdh9qb6r6z = is_array( $m4is_tbdh9qb6r6z ) ? array_filter( $m4is_tbdh9qb6r6z ) : [];

$m4is_pbe6ph2dd0rk = [];
foreach ( $m4is_tbdh9qb6r6z as $m4is_6k84v5caq4k ) {
$m4is_pbe6ph2dd0rk[] = 'membc_' . $m4is_6k84v5caq4k;

}
wp_cache_set( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_pbe6ph2dd0rk, $m4is_kgdwxx4f, $m4is_yqbs57707b9pgq );
}

return $m4is_pbe6ph2dd0rk;

}

private function m4is_rgmrg00m8mpfjmfb(): array {
static $m4is_06c8s5xs94f91335gnaey25 = [];
if (empty($m4is_06c8s5xs94f91335gnaey25)) {
$m4is_aqrkarnrnxpa = $this->m4is_132xe588j->m4is_gbhb1ccq1jfbkkj5();

$m4is_06c8s5xs94f91335gnaey25['custom'] = $this->m4is_jnrfagq360n7e6wj7c8rqqpn();

$m4is_axy0v6gyefw = 'm4is_2k67em2mm';
$m4is_w8qqf4hpy3dhtdvh8 = 'm4is_70ymtzyq0gag122n7ja46kpx8ng';

$m4is_mmpxwhegztet7dvpagn5dqgasn = 'm4is_z1481399d2k4jsb31vhdgs5ymeg3ve';
$m4is_t3gd736x7esna7az5gh7b6 = 'm4is_5tde1v290sv4c35sr942yw03wt9tgm1';

$m4is_94bbv19sn = 'm4is_zmbczdhcq5h3fv';
$m4is_vwy3dzjwbnk9b6hrzmrsa8axfy90 = 'm4is_ewpwbmgpes2qvj404h69gzdjybx2';
$m4is_vz6zf9yq9am9wdqxw7 = 'm4is_v9dtrdvnt';

$m4is_4xpm1z5tzfcvyah08dhgeb8n91 = 'm4is_easq6t3ghrf04v80xj94rg989sas';
$m4is_wnnxqj6x87e3dxxe1y6bj6z9 = 'm4is_1twj3fqxg1b6mcv5297';

$m4is_xb7h3zhc8 = 'm4is_b9zpzxmgc4k1rwyed5';
$m4is_jvdehmb4m5gbe3zkcxc7hn7 = 'm4is_8wgwe2paj3vpec';
$m4is_3v5jyhgg2wg8ed49a47nya = 'm4is_xfgyxrmgr0te9bj4ywb8w05cjq3fjyh8';

$m4is_06c8s5xs94f91335gnaey25['nested'] = [
'memb_can_view_post' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_0a5vvftkv5x4nvhm1cwcecwa28tax7xb']],

'memb_compare' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_5fhxt348s91']],
'memb_has_all_roles' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw,
 'm4is_a39nxeh3vd1bnj8qd']],
'memb_has_all_tags' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_cxa305nps7grdtx10c434cecd']],
'memb_has_any_role' =>
 [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_rfq6aa768jppmfc1']],
'memb_has_any_tag' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw,
 'm4is_xkz266385x85']],
'memb_has_any_token' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_2rghwx0by9']],
'memb_has_membership' =>
 [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_52efqk48mxv9e9w943vz']],
'memb_has_payf' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw,
 'm4is_kcjdj5s2v93m2d1tqv36rhsev4']],
'memb_hide_from' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_0k4q3ej68p4fenz2dfq2njahnad9x3n']],

'memb_if_cookie' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_as1bkvwezg9z8jvyg6r66e0tt8m']],
'memb_if_get' => [$m4is_aqrkarnrnxpa,
 [$m4is_axy0v6gyefw, 'm4is_xh23r53h2v4v']],
'memb_if_post' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_mwnscyehcec6ae9evzce0f1pn5h1h6']],

'memb_if_request' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_j0xkyksxfs68gp29ds08w1ze']],
'memb_if_user_counter' => [$m4is_aqrkarnrnxpa,
 [$m4is_axy0v6gyefw, 'm4is_pqd86eag8ee8xz5myf4x08dc']],
'memb_if' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_5fhxt348s91']],

'memb_is_after_tag_date' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_c3p5eb11p47xghz634p']],
'memb_show_after' => [$m4is_aqrkarnrnxpa,
 [$m4is_axy0v6gyefw, 'm4is_rxv0farb6gnp1xmztyff0tvpm1a']],
'memb_show_between' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_cwrs6mk3ykqabx6s']],

'memb_show_until' => [$m4is_aqrkarnrnxpa, [$m4is_axy0v6gyefw, 'm4is_fyq9gf6qndp67hqvqbdg4b98']],
'memb_is_browser' => [5, [$m4is_axy0v6gyefw,
 'm4is_5djjxs8r']],
'memb_has_affiliate' => [1, [$m4is_w8qqf4hpy3dhtdvh8, 'm4is_jwb9617z1y6kcz4ym6c1c15jcjysz12']],
'memb_is_1x_optin' =>
 [3, [$m4is_94bbv19sn, 'm4is_4c9fygbgddvhyvm7xw2qq']],
'memb_is_2x_optin' => [3, [$m4is_94bbv19sn, 'm4is_4c9fygbgddvhyvm7xw2qq']],
'memb_is_no_optin' =>
 [3, [$m4is_94bbv19sn, 'm4is_4c9fygbgddvhyvm7xw2qq']],
];
$m4is_06c8s5xs94f91335gnaey25['standard'] = [
'memb_expires' => [$m4is_axy0v6gyefw,
 'm4is_atscv0qj7vte'],
'memb_fade' => [$m4is_axy0v6gyefw, 'm4is_6yse12awdehr0zx4h98bvm9'],
'memb_hide' => [$m4is_axy0v6gyefw, 'm4is_tt0xp5jj2jkf5sg0ptxg97xd'],

'memb_hidefrom_feed' => [$m4is_axy0v6gyefw, 'm4is_h4p426h5p'],
'memb_hidefrom' => [$m4is_axy0v6gyefw, 'm4is_0k4q3ej68p4fenz2dfq2njahnad9x3n'],

'memb_if_lang' => [$m4is_axy0v6gyefw, 'm4is_p9qddzhge8wfa2z40jw0zrwjmgn'],
'memb_is_admin' => [$m4is_axy0v6gyefw, 'm4is_12vye89qx98vjjfqs01663s'],

'memb_is_autologin' => [$m4is_axy0v6gyefw, 'm4is_vz0q2jqz409yw'],
'memb_is_excerpt_only' => [$m4is_axy0v6gyefw, 'm4is_yn3xs7t6qmd9rhb'],

'memb_is_first_login' => [$m4is_axy0v6gyefw, 'm4is_1027346y2yas'],
'memb_is_logged_in' => [$m4is_axy0v6gyefw, 'm4is_ay89fse45xv7040nd2m'],

'memb_is_not_admin' => [$m4is_axy0v6gyefw, 'm4is_12vye89qx98vjjfqs01663s'],
'memb_is_post_type' => [$m4is_axy0v6gyefw, 'm4is_637f8v0c0byvzp30br1f2x792yte9'],

'memb_is_single' => [$m4is_axy0v6gyefw, 'm4is_fn7r7vmfakyd44'],
'memb_is_trackable_link' => [$m4is_axy0v6gyefw, 'm4is_nw2r88pen30485vvqwgwmh5knepn'],

'memb_switch' => [$m4is_axy0v6gyefw, 'm4is_5xq3gm479jtt67vt7gzh49d1hhrzqns3'],
'memb_affiliate_login' => [$m4is_w8qqf4hpy3dhtdvh8,
 'm4is_hcwd359v'],
'memb_affiliate_running_totals' => [$m4is_w8qqf4hpy3dhtdvh8, 'm4is_y5zphzkzkne9q1h5pxez9txtxsbmy'],
'memb_affiliate' =>
 [$m4is_w8qqf4hpy3dhtdvh8, 'm4is_wfnqh4tspfy6xrjygatmk067wkrwz'],
'memb_detect_affiliate' => [$m4is_w8qqf4hpy3dhtdvh8, 'm4is_gqc2bsjhjgxtztdphxjt3c89e'],

'memb_is_affiliate' => [$m4is_w8qqf4hpy3dhtdvh8, 'm4is_6ea8hyd1edb4c9g3gbyc6cgt6'],
'memb_referral_contact' => [$m4is_w8qqf4hpy3dhtdvh8,
 'm4is_81d6q7xyy01t8eqd061ekdd62c'],
'memb_s3_link' => [$m4is_mmpxwhegztet7dvpagn5dqgasn, 'm4is_xp1pztywg0ngp0'],
'memb_secure_audio' =>
 [$m4is_mmpxwhegztet7dvpagn5dqgasn, 'm4is_1ppv3f4ese'],
'memb_secure_video' => [$m4is_mmpxwhegztet7dvpagn5dqgasn, 'm4is_a12838kjr8c7nax8dchq94'],


'memb_is_applebot' => [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_9a1vtrfz95h16xq358x'],
'memb_is_chrome' => [$m4is_t3gd736x7esna7az5gh7b6,
 'm4is_2rgm45xd7am0ywct3km86j9k'],
'memb_is_facebook_crawler' => [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_mzd30pnh963707668vh'],
'memb_is_feed' =>
 [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_zgday4668f4987j74538gey3'],
'memb_is_gecko' => [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_v3ejq4k0k6tqn93cxzzg0ydc'],

'memb_is_google1stclick' => [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_n6q9grz485qbs3b'],
'memb_is_googlebot' => [$m4is_t3gd736x7esna7az5gh7b6,
 'm4is_53d63td6tz3kek'],
'memb_is_ie' => [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_w4x04c3606txecrs2'],
'memb_is_ipad' => [$m4is_t3gd736x7esna7az5gh7b6,
 'm4is_fc4v1bz9b'],
'memb_is_iphone' => [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_sbs1xhv84rz0pgcr4dxsfpah'],
'memb_is_lynx' => [$m4is_t3gd736x7esna7az5gh7b6,
 'm4is_a2j72p3gm35jxkz9zq1p981zywten'],
'memb_is_macie' => [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_9vh7hsgqq21ps7c51'],
'memb_is_mobile' =>
 [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_6kfzy3kfdey9gqh'],
'memb_is_ns4' => [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_2m91mp8caem38tjpe49p'],

'memb_is_opera' => [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_684zgc1cf9dj0afwsq97mwrez'],
'memb_is_safari' => [$m4is_t3gd736x7esna7az5gh7b6,
 'm4is_wkc5rbn3wqvwmgv6'],
'memb_is_ssl' => [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_ymdrzcf1t5f7sfa7cb3cqa1wj5za'],
'memb_is_winie' =>
 [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_5p020qfht3a42xqw'],
'memb_useragent_match' => [$m4is_t3gd736x7esna7az5gh7b6, 'm4is_37j2fa53'],


'memb_achieve_goal' => [$m4is_94bbv19sn, 'm4is_k1a3q4719avy46g3rz'],
'memb_action_link' => [$m4is_94bbv19sn, 'm4is_fywktrx8ejkqx'],

'memb_actionset_button' => [$m4is_94bbv19sn, 'm4is_w8e73ghqkz9qq3z'],
'memb_add_fus' => [$m4is_94bbv19sn, 'm4is_tvf65khm9ev0'],
'memb_add_tag' =>
 [$m4is_94bbv19sn, 'm4is_tk7m59bk'],
'memb_appname' => [$m4is_94bbv19sn, 'm4is_ac7tcg0ym0mekjbzem8xrdgv39a1tg4q'],
'memb_appointments' =>
 [$m4is_94bbv19sn, 'm4is_fker5bthhctym9z2d2yv5jr1g0a6w'],
'memb_count_my_tags' => [$m4is_94bbv19sn, 'm4is_t5q4r8a0cd0b58vxrs4as11'],

'memb_count_tags' => [$m4is_94bbv19sn, 'm4is_ja1g0xrf3jq6fed'],
'memb_infusion_id' => [$m4is_94bbv19sn, 'm4is_bqhsw0pc64ah1m'],
'memb_link_contacts' =>
 [$m4is_94bbv19sn, 'm4is_16tg3fas1vd8n'],
'memb_list_linked_contacts' => [$m4is_94bbv19sn, 'm4is_qc1xxmcgrmw0405zw79mj7peyh'],
'memb_pause_fus' =>
 [$m4is_94bbv19sn, 'm4is_68qhgznj3g'],
'memb_remove_fus' => [$m4is_94bbv19sn, 'm4is_h5gcf81k01517djnkvj676sx0bh'],
'memb_remove_tag' =>
 [$m4is_94bbv19sn, 'm4is_ey9xa8ceej2hh984'],
'memb_run_actionset' => [$m4is_94bbv19sn, 'm4is_8t8hz8tm5smdr'],
'memb_set_tag' => [$m4is_94bbv19sn,
 'm4is_msjv0nhme2x2etexqd7fsfk'],
'memb_sync_contact' => [$m4is_94bbv19sn, 'm4is_wtqa9v3z'],
'memb_tag_date' => [$m4is_94bbv19sn, 'm4is_6gwk43q3pgvxyztf8xz8f33'],

'memb_tag_name' => [$m4is_94bbv19sn, 'm4is_3y1dj9dyb27q1gwyb2'],
'memb_unlink_contacts' => [$m4is_94bbv19sn, 'm4is_3zasv0p9f5w6'],

'memb_is_app_connected' => [$m4is_94bbv19sn, 'm4is_gape8bz18a1krtyxzexbdsqmw'],
'memb_is_appconnected' => [$m4is_94bbv19sn, 'm4is_gape8bz18a1krtyxzexbdsqmw'],

'memb_debug' => [$m4is_vwy3dzjwbnk9b6hrzmrsa8axfy90, 'm4is_z9sjgsr3yjxxz554r'],
'memb_list_shortcodes' => [$m4is_vwy3dzjwbnk9b6hrzmrsa8axfy90,
 'm4is_v9r890gdv2m3kbhtz4qrstpr94z1m'],
'memb_performance' => [$m4is_vwy3dzjwbnk9b6hrzmrsa8axfy90, 'm4is_zhy1dbegxjy2bd2tejb9g6cf2'],


'memb_1click_order_product' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_nqqxbs0d0d5gsq9eccbfm4ersd5'],
'memb_add_creditcard' => [$m4is_vz6zf9yq9am9wdqxw7,
 'm4is_n1j0fg1ffzrhwzn57rmvh0b9'],
'memb_add_paymentmethod' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_4ptt6h8f4mg8nmxve68xmj'],
'memb_client_login' =>
 [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_dzcmprkgfxq30xkccsj8wyc'],
'memb_creditcard_days_left' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_2ht4drck28gpw6wqckzha4ny8'],

'memb_creditcard_expires' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_hv6bkj0ncvqdjx8zjpyc2w1tzw5a'],
'memb_creditcard' => [$m4is_vz6zf9yq9am9wdqxw7,
 'm4is_6aj7y476'],
'memb_has_creditcard' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_0507nh835370xnqnsw'],
'memb_has_product' => [$m4is_vz6zf9yq9am9wdqxw7,
 'm4is_5cbgjf9rwssgx75fc2nxpxn8p'],
'memb_has_subscription' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_1xnn0daqctwzby0afvrb0d2'],
'memb_list_creditcards' =>
 [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_s8z91pgatt7jmc'],
'memb_list_invoices' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_e1bwsd83fjvqy'],
'memb_list_subscriptions' =>
 [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_jww3xbns876na'],
'memb_one_click_sale' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_apzsm4axfj7kr8ng6resr'],

'memb_order_info' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_tyzvzzm39ck96g13ec9'],
'memb_order_product' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_dp62gk2s8xvn3vx1'],

'memb_order_subscription' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_tb20dpe6ehez'],
'memb_orderform' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_a2g345weqgg4bskk7z0kkppbte'],

'memb_place_order' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_j91avkyxngkrnc8ga'],
'memb_product' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_x88xw10b3ak25rx'],

'memb_show_receipt' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_ksjdsasr7febdz5xhsx38cxn'],
'memb_subscriptionplan' => [$m4is_vz6zf9yq9am9wdqxw7,
 'm4is_qqngjbmd6nagb'],
'memb_total_lifetime_value' => [$m4is_vz6zf9yq9am9wdqxw7, 'm4is_fjz43xd0rdea3'],
'memb_filebox_link' => [$m4is_4xpm1z5tzfcvyah08dhgeb8n91,
 'm4is_6hr90aecw'],
'memb_filebox_url' => [$m4is_4xpm1z5tzfcvyah08dhgeb8n91, 'm4is_w4xkhb0s5tc29h4'],
'memb_list_filebox' => [$m4is_4xpm1z5tzfcvyah08dhgeb8n91,
 'm4is_50gj0sczx'],
'memb_upload_filebox' => [$m4is_4xpm1z5tzfcvyah08dhgeb8n91, 'm4is_7bjvakchd8q9yxry7c'],
'memb_upload_message_filebox' =>
 [$m4is_4xpm1z5tzfcvyah08dhgeb8n91, 'm4is_z36dwr5t50jrwbqwc11wvvrx'],
'memb_capture' => [$m4is_xb7h3zhc8, 'm4is_s4wg951gqm31gceq4tyrvw5r2wfe'],

'memb_country_dropdown' => [$m4is_xb7h3zhc8, 'm4is_t09pr7xmpa0vfh7c3eg1vvhs'],
'memb_customerhub_autologin' => [$m4is_xb7h3zhc8, 'm4is_d98wbexk5mmpz'],

'memb_days_difference' => [$m4is_xb7h3zhc8, 'm4is_5nz8ce6hvxjd3p2vxbhhbazn7rt'],
'memb_do_shortcode' => [$m4is_xb7h3zhc8, 'm4is_wf999we4fzs'],

'memb_e' => [$m4is_xb7h3zhc8, 'm4is_93187f1eemrww2ahtt09m0c8e'],
'memb_echo' => [$m4is_xb7h3zhc8, 'm4is_kpc94xx0f0r02'],
'memb_forloop' =>
 [$m4is_xb7h3zhc8, 'm4is_g78wg04fxptz2nsdkdnrm'],
'memb_geoip' => [$m4is_xb7h3zhc8, 'm4is_1mb7hy96vvxcv4r5bnb0x9p4wrsa3'],
'memb_http_post' =>
 [$m4is_xb7h3zhc8, 'm4is_8mvy8d2sgbmmcpjyj7nskw8ed'],
'memb_js_encode' => [$m4is_xb7h3zhc8, 'm4is_f5jj8ysa044az253z3mjz'],
'memb_language_dropdown' =>
 [$m4is_xb7h3zhc8, 'm4is_fx23v79yk2z47a8ty66f11fkq5v4'],
'memb_license_status' => [$m4is_xb7h3zhc8, 'm4is_2d30h9pvqcc9kjn1zaabm42'],

'memb_php' => [$m4is_xb7h3zhc8, 'm4is_fj04jxdefvy87ps9n'],
'memb_plusthis' => [$m4is_xb7h3zhc8, 'm4is_8mvy8d2sgbmmcpjyj7nskw8ed'],

'memb_qrcode' => [$m4is_xb7h3zhc8, 'm4is_8h63p9ycne5hswq0d00yvg4v9gvsg'],
'memb_quotd' => [$m4is_xb7h3zhc8, 'm4is_frvx92r33pvh'],
'memb_show_messages' =>
 [$m4is_xb7h3zhc8, 'm4is_7xsvns3pby2ekntvf4a'],
'memb_timezone_dropdown' => [$m4is_xb7h3zhc8, 'm4is_gmbk8jfr2em739x'],
'memb_version' =>
 [$m4is_xb7h3zhc8, 'm4is_y7v8mdrawza37ss71te'],
'memb_coursegrid' => ['m4is_9rspj2sq', 'm4is_4x853k5hb1tpbyyqewe'],
'memb_change_email' =>
 [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_j96jpbrgq6mr9spgg80'],
'memb_change_password' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_3a0jnedwz1h14ybzgnm3v9twvc2es'],

'memb_contact' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_gc52xebj3gm1bvf8xe5qvrdbs'],
'memb_feedurl' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7,
 'm4is_jmz0s8cb'],
'memb_generate_password' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_e59z7jpr3xvkbtfvkdwnehmnckwzp1s'],
'memb_getfield' =>
 [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_q3tpgqwr0axegwjn7jv2mh'],
'memb_gravatar' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_dk07hdev4a2mykk7d4psv6kzcdd0f1'],

'memb_json_session' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_03jqeraqx3k3cdebzxrh50mps7e'],
'memb_list_logins' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7,
 'm4is_dah5j1cr2c2c3hajaj'],
'memb_list_tags' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_z41sr1p7nxxbe7x3'],
'memb_lost_password' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7,
 'm4is_f2bxmx2jdrr0z3k'],
'memb_member_listing' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_4bgbt8p4f0'],
'memb_optin_status' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7,
 'm4is_qfpgr6ce1bv78zkv0g'],
'memb_owner' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_y3q9fe7ez32s8sjf8'],
'memb_persona' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7,
 'm4is_mr6bm5h7fa9jphv0'],
'memb_refresh_persona' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_qavj0enkg2xp9c9w8v1wf0p4xwp7'],
'memb_registration_form' =>
 [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_z0a5tw5nz'],
'memb_reset_feedurl' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_r35k07naaz9w85absf'],

'memb_reset_password' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_5866h555cdyjsyzkfak8zps7tawc2'],
'memb_send_password' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7,
 'm4is_m25tv6k3f0ahf6x9'],
'memb_set_token' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_cq0mwxktb87b'],
'memb_showfield' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7,
 'm4is_q3tpgqwr0axegwjn7jv2mh'],
'memb_update_contact' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_4fykmhs05bwhsjjk5wr4mhbt84'],
'memb_update_form' =>
 [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_pasf3qbvd88'],
'memb_user_counter' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_0w58sy4yfgpm620jc0gyt6qtz1'],

'memb_user_levels' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7, 'm4is_cc8ehpgg8kydp4c1ss1z2vzf4bvg952'],
'memb_wp_user' => [$m4is_jvdehmb4m5gbe3zkcxc7hn7,
 'm4is_mg0pr5bbyz77'],
'memb_cookie' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_9yentc9h97tme4rr'],
'memb_date' => [$m4is_3v5jyhgg2wg8ed49a47nya,
 'm4is_ghg692ysyj'],
'memb_get_permalink' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_z62ac22dzmkvj55zqewssc'],
'memb_get' => [$m4is_3v5jyhgg2wg8ed49a47nya,
 'm4is_9yentc9h97tme4rr'],
'memb_include_page' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_6t99ggt4zhmhqffd3yha'],
'memb_include_partial' =>
 [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_6t99ggt4zhmhqffd3yha'],
'memb_include_post' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_6t99ggt4zhmhqffd3yha'],

'memb_login_url' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_n8ysp1j3s4rspx2gvmhkc7727tbw58d'],
'memb_loginform' => [$m4is_3v5jyhgg2wg8ed49a47nya,
 'm4is_9smx6q5snfv0xddp4ge9vh1wnmg9rp9r'],
'memb_loginlogout' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_c9qtd45znsyja68regf'],
'memb_logout_link' =>
 [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_46j21fbp07m4962eas4exxpt2tk35jse'],
'memb_logout' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_x07xc9q6pptjda5b9hpwq8hh5g4zpp'],

'memb_php_include_once' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_0m3gxcsp4kppd7n43txvvt5'],
'memb_php_include' => [$m4is_3v5jyhgg2wg8ed49a47nya,
 'm4is_0m3gxcsp4kppd7n43txvvt5'],
'memb_post_meta' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_2gqbxcp7yepvpfx5csv8z5a43h'],
'memb_post' =>
 [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_9yentc9h97tme4rr'],
'memb_raw' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_b24xkyhzkj'],
'memb_redirect' =>
 [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_6hffch540btnkc7tdwm5'],
'memb_request' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_9yentc9h97tme4rr'],

'memb_server' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_9yentc9h97tme4rr'],
'memb_session' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_9yentc9h97tme4rr'],

'memb_set_cookie' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_rd3rm2s0ct2wv00dvtj5'],
'memb_default_excerpt' => [$m4is_3v5jyhgg2wg8ed49a47nya,
 'm4is_eeebh4zya7'],
'memb_registration_date' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_pee35qkzabhk1nckw026vb0'],
'memb_registration_url' =>
 [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_gzpd3h5nw8afykqh7za'],
'memb_remote_post_get' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_tzfnwpq6g691db2n1vmg2khpp9'],

'memb_system_link' => [$m4is_3v5jyhgg2wg8ed49a47nya, 'm4is_nwjeg5r8q9881wkstshnp'],
'memb_set_prohibited_action' => [$m4is_3v5jyhgg2wg8ed49a47nya,
 'm4is_jxf21dvmctvme5rrb5syxhn'],



'memb_award_achievement' => [$m4is_wnnxqj6x87e3dxxe1y6bj6z9, 'm4is_jewgdz5ed2jrgt'],
'memb_revoke_achievement' =>
 [$m4is_wnnxqj6x87e3dxxe1y6bj6z9, 'm4is_xkcczg4dn6vzxt4d'],
'memb_list_achievements' => [$m4is_wnnxqj6x87e3dxxe1y6bj6z9, 'm4is_qmy2a3dfea3xtnnxdkj5zv40b5'],

];
}
return $m4is_06c8s5xs94f91335gnaey25;
}

public function m4is_jp0rgxf2ytap1chmfg(string $m4is_bsamg3fezf = ''): string {

if (! $this->shortcodes_registered) {
$m4is_06c8s5xs94f91335gnaey25 = (array) $this->m4is_rgmrg00m8mpfjmfb();

$m4is_06c8s5xs94f91335gnaey25['custom'] ??= [];
$m4is_06c8s5xs94f91335gnaey25['standard'] ??= [];
$m4is_06c8s5xs94f91335gnaey25['nested'] ??= [];


foreach($m4is_06c8s5xs94f91335gnaey25['custom'] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) {

add_shortcode( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 [$this, 'm4is_whq29w0yr8hs8fmjed1'] );
}

foreach($m4is_06c8s5xs94f91335gnaey25['standard'] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab) {

$m4is_sjjed77r6tc8e = is_array($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab) ? $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab : [$this,
 $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab];

add_shortcode($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_sjjed77r6tc8e);
}

foreach($m4is_06c8s5xs94f91335gnaey25['nested'] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab) {

$m4is_sjjed77r6tc8e = is_array($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[1]) ? $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[1] : [$this,
 $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[1]];

add_shortcode($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_sjjed77r6tc8e);

for ($m4is_5vcwef7pymrfb3zawe = 1;
 $m4is_5vcwef7pymrfb3zawe < (int) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[0]; $m4is_5vcwef7pymrfb3zawe++) {
add_shortcode("{$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0}{$m4is_5vcwef7pymrfb3zawe}",
 $m4is_sjjed77r6tc8e);
}
}

$this->shortcodes_registered = true;
}

return $m4is_bsamg3fezf;
}

function m4is_qk0wmhnm( $m4is_bsamg3fezf = '' ) {

if ($this->shortcodes_registered) {
$m4is_06c8s5xs94f91335gnaey25 = $this->m4is_rgmrg00m8mpfjmfb();


$shortcode_types = ['custom', 'standard', 'nested'];

foreach ($shortcode_types as $type) {

if (isset($m4is_06c8s5xs94f91335gnaey25[$type]) && is_array($m4is_06c8s5xs94f91335gnaey25[$type])) {

foreach($m4is_06c8s5xs94f91335gnaey25[$type] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab) {
remove_shortcode($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0);

if ($type === 'nested') {
for ($m4is_5vcwef7pymrfb3zawe = 1;
 $m4is_5vcwef7pymrfb3zawe < (int) $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[0]; $m4is_5vcwef7pymrfb3zawe++) {
remove_shortcode($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 . $m4is_5vcwef7pymrfb3zawe);

}
}
}
}
}

do_action('memberium/shortcodes/remove');

$this->shortcodes_registered = false;
}

return $m4is_bsamg3fezf;
}
function m4is_nxe5sc3j8e6pf7() {
wp_register_style( 'memb_coursegrid_css',
 plugin_dir_url(MEMBERIUM_HOME) . "css/memb_coursegrid.css", false, $this->m4is_132xe588j->m4is_5kywzj74m8ht8s0(), 'all');
}




function m4is_21x1a42kdhb9vkcx2xjprxnbap($m4is_bsamg3fezf = '',
 $m4is_s0hfpx2zktwa0hangkfqn3 = '') {
if (empty($m4is_bsamg3fezf) ) {
return;
}
$m4is_gb01jqxh9ek2m = '';
$m4is_a65amc5ynkazjney8rtmsgph0 = false;

$m4is_cfxz2qf0mfpbab = false;
$m4is_fsedke71q5qj768dkg6rqmhr = '/(\[case.*\])|(\[else\])/U';
$m4is_r66789ak32zd2wzr7k0 = preg_split($m4is_fsedke71q5qj768dkg6rqmhr,
 $m4is_bsamg3fezf, 0, PREG_SPLIT_DELIM_CAPTURE);
foreach ($m4is_r66789ak32zd2wzr7k0 as $m4is_6gxy7dwq7mfa3vt3yxkz7de) {
$m4is_6gxy7dwq7mfa3vt3yxkz7de = trim($m4is_6gxy7dwq7mfa3vt3yxkz7de);

if (empty($m4is_6gxy7dwq7mfa3vt3yxkz7de) ) {
continue;
}
if (substr($m4is_6gxy7dwq7mfa3vt3yxkz7de, 0, 5) == '[case' || substr($m4is_6gxy7dwq7mfa3vt3yxkz7de,
 0, 5) == '[else') {
$m4is_cfxz2qf0mfpbab = false;
$m4is_gv7vjyv2c6g3nepw6 = shortcode_parse_atts(substr($m4is_6gxy7dwq7mfa3vt3yxkz7de,
 1, -1) );
if (! empty($m4is_gv7vjyv2c6g3nepw6[0]) && strtolower($m4is_gv7vjyv2c6g3nepw6[0]) == 'case') {
if (! empty($m4is_gv7vjyv2c6g3nepw6['any_tag']) ) {
$m4is_cfxz2qf0mfpbab = $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h(trim($m4is_gv7vjyv2c6g3nepw6['any_tag']) );

if ($m4is_cfxz2qf0mfpbab) {
$m4is_a65amc5ynkazjney8rtmsgph0 = true;
}
}
if (! empty($m4is_gv7vjyv2c6g3nepw6['all_tags']) ) {
$m4is_cfxz2qf0mfpbab = $this->m4is_132xe588j->m4is_n9nmkb32xctdmyy9d0s0trys3zj5y(trim($m4is_gv7vjyv2c6g3nepw6['all_tags']) );

if ($m4is_cfxz2qf0mfpbab) {
$m4is_a65amc5ynkazjney8rtmsgph0 = true;
}
}
if (! empty($m4is_gv7vjyv2c6g3nepw6['not_any_tagid']) ) {
$m4is_cfxz2qf0mfpbab = ! $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h(trim($m4is_gv7vjyv2c6g3nepw6['not_any_tagid']) );

if ($m4is_cfxz2qf0mfpbab) {
$m4is_a65amc5ynkazjney8rtmsgph0 = true;
}
}
if (! empty($m4is_gv7vjyv2c6g3nepw6['not_all_tagids']) ) {
$m4is_cfxz2qf0mfpbab = ! $this->m4is_132xe588j->m4is_n9nmkb32xctdmyy9d0s0trys3zj5y(trim($m4is_gv7vjyv2c6g3nepw6['not_all_tagids']) );

if ($m4is_cfxz2qf0mfpbab) {
$m4is_a65amc5ynkazjney8rtmsgph0 = true;
}
}
}
if (! empty($m4is_gv7vjyv2c6g3nepw6[0]) && strtolower($m4is_gv7vjyv2c6g3nepw6[0]) == 'else') {
if (! $m4is_a65amc5ynkazjney8rtmsgph0) {
$m4is_cfxz2qf0mfpbab = true;

}
}
}
else {
if ($m4is_cfxz2qf0mfpbab) {
$m4is_gb01jqxh9ek2m .= $m4is_6gxy7dwq7mfa3vt3yxkz7de;
}
$m4is_cfxz2qf0mfpbab = false;
}
}
return do_shortcode($m4is_gb01jqxh9ek2m);

}




function m4is_whq29w0yr8hs8fmjed1($m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = null, $tag = '') {
if (! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return;

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
static $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = [];
static $m4is_d82knarttjn5gjrregqn21s2x3zgv = [];

$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' => '',
'htmlattr' => '',
'txtfmt' => '',
];
if (is_array($m4is_ne6pfqrw74y135s9chxyerje8bgm0j) ) {
foreach($m4is_ne6pfqrw74y135s9chxyerje8bgm0j as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp) {
if (! isset($m4is_n7x0afpz[$m4is_bqhtspcavhb01spmfd3x]) ) {
$m4is_n7x0afpz[$m4is_bqhtspcavhb01spmfd3x] = $m4is_29gzevpx8rbkp;

}
}
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium');

$m4is_a5dxvcy6v1f0wnpt = substr($tag,
 6);

if (! isset($m4is_d82knarttjn5gjrregqn21s2x3zgv[$m4is_a5dxvcy6v1f0wnpt]) ) {
$m4is_d82knarttjn5gjrregqn21s2x3zgv[$m4is_a5dxvcy6v1f0wnpt] = 0;

}
$m4is_d82knarttjn5gjrregqn21s2x3zgv[$m4is_a5dxvcy6v1f0wnpt]++;
if ($m4is_d82knarttjn5gjrregqn21s2x3zgv[$m4is_a5dxvcy6v1f0wnpt] > 10) {
wp_die('Custom Shortcode Recursion Limit Exceeded.');

}
if (! isset($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4[$m4is_a5dxvcy6v1f0wnpt]) ) {
$m4is_g61yzqs7ecta0xztr70d7v = [
'name' => $m4is_a5dxvcy6v1f0wnpt,

'post_type' => 'memb_shortcodeblocks'
];
$m4is_pbe6ph2dd0rk = get_posts($m4is_g61yzqs7ecta0xztr70d7v);
$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4[$m4is_a5dxvcy6v1f0wnpt] = $m4is_pbe6ph2dd0rk[0]->post_content;

}
$m4is_gb01jqxh9ek2m = $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4[$m4is_a5dxvcy6v1f0wnpt];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_7pct4g598y46($m4is_ne6pfqrw74y135s9chxyerje8bgm0j);
 

if (is_array($m4is_ne6pfqrw74y135s9chxyerje8bgm0j) ) {
foreach ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j as $m4is_j8j55t8dz79m7=>$m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_j8j55t8dz79m7 = strtolower($m4is_j8j55t8dz79m7);

$m4is_s0hfpx2zktwa0hangkfqn3 = '{{atts:' . $m4is_j8j55t8dz79m7 . '}}';
$m4is_gb01jqxh9ek2m = str_replace($m4is_s0hfpx2zktwa0hangkfqn3,
 $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_gb01jqxh9ek2m);
$m4is_s0hfpx2zktwa0hangkfqn3 = '{{atts|' . $m4is_j8j55t8dz79m7 . '}}';
$m4is_gb01jqxh9ek2m = str_replace($m4is_s0hfpx2zktwa0hangkfqn3,
 $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_gb01jqxh9ek2m);
}
}
while (stripos($m4is_gb01jqxh9ek2m, '{{atts') !== false) {
$m4is_gb01jqxh9ek2m = preg_replace_callback('|({{atts\:(.*)}})|U',

function($m4is_e200zw8mj7k8m1hbx3m) {
return '';
}, $m4is_gb01jqxh9ek2m);
$m4is_gb01jqxh9ek2m = preg_replace_callback('|({{atts\|(.*)}})|U',

function($m4is_e200zw8mj7k8m1hbx3m) {
return '';
}, $m4is_gb01jqxh9ek2m);
}
$m4is_bsamg3fezf = $m4is_gb01jqxh9ek2m;
unset($m4is_gb01jqxh9ek2m);


global $wp_embed;
$m4is_bsamg3fezf = do_shortcode( $wp_embed->run_shortcode( $m4is_bsamg3fezf ) );
if (! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt']) ) {
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_r85ch2nyjadv4rt71w7ns($m4is_bsamg3fezf,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt']);
}
$m4is_bsamg3fezf = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'] . $m4is_bsamg3fezf . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'];

if (! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']) ) {
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_r631mq3vpgnpxhcrsqr414rtx1x($m4is_bsamg3fezf,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture']);
}
if (! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr']) ) {
$m4is_bsamg3fezf = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'] . '="' . $m4is_bsamg3fezf . '"';

}
$m4is_d82knarttjn5gjrregqn21s2x3zgv[$m4is_a5dxvcy6v1f0wnpt]--;
return $m4is_bsamg3fezf;
}



function m4is_g0cvedm4k(): void {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_bdm5zcwjc129tj3m4z153tsne2sn1p = isset($_GET['debug']) ? TRUE : FALSE;
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Debug Mode Enabled\n";
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - POST: ", print_r($_POST, true) , "\n";
$m4is_hce1y1a4qd65zhnwsj = empty($_GET['name']) ? '' : trim($_GET['name']);

$m4is_qm78qahrsjrp9v9vf2phj31x = time();
$this->m4is_132xe588j->m4is_kmn47rhk6egstaafg07jc102wx($m4is_hce1y1a4qd65zhnwsj);
echo 'Operation Completed';

return;
}

function m4is_4e6pepbw93jxx74ffmhak53vgg682wa(): never {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
global $wpdb;

$m4is_ed3vyyzsbe6syqttnwh68hps1 = [];
$m4is_h9qv28t503vc7wdyx1ajcxnk = [];
$m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');

$m4is_map8tdmsvarsn03f1fhfytx61b4a = date('Y-m-d h:i:s');
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $_POST['Id'];
$m4is_bdm5zcwjc129tj3m4z153tsne2sn1p = isset($_GET['debug']) ? true : false;

$m4is_0s1wngqqevjreqav9s8wf2dzkyxk1qn = empty($_GET['channel']) ? 'm' : preg_replace("/[^[:alnum:][:space:]]/u", '', $_GET['channel']);
;
$m4is_g1q8vsgh8yz3c3y2 = isset($_GET['cat_id']) && (int) $_GET['cat_id'] > 0 ? (int) $_GET['cat_id'] : 0;
$m4is_gqmmzp9nw4 = isset($_GET['tagcount']) && (int) $_GET['tagcount'] > 0 ? (int) $_GET['tagcount'] : 6;

$m4is_s67jk5ynxsd7f431hw4q2qpec6msg = isset($_GET['date_format']) && $_GET['date_format'] > '' ? $_GET['date_format'] : 'Ym';
$m4is_0j3xkma6dp = empty($_GET['interval']) ? '' : strtolower(trim($_GET['interval']) );

$m4is_1az86kynsvy8gepjsdfh3s5n2 = ['YM', 'Ym', 'M', 'm', 'F', 'n'];
if ($m4is_0j3xkma6dp == '') {
if ($m4is_s67jk5ynxsd7f431hw4q2qpec6msg == 'Yz') {
$m4is_0j3xkma6dp = 'days';

}
elseif ($m4is_s67jk5ynxsd7f431hw4q2qpec6msg == 'YW') {
$m4is_0j3xkma6dp = 'weeks';
}
elseif (in_array($m4is_s67jk5ynxsd7f431hw4q2qpec6msg,
 $m4is_1az86kynsvy8gepjsdfh3s5n2) ) {
$m4is_0j3xkma6dp = 'months';
}
elseif ($m4is_s67jk5ynxsd7f431hw4q2qpec6msg == 'Y') {
$m4is_0j3xkma6dp = 'years';

}
}
if (empty($m4is_0j3xkma6dp) ) {
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, "Premature End - Empty Interval\n";
exit;

}


if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) {
echo __LINE__, " - Channel: ", print_r($m4is_0s1wngqqevjreqav9s8wf2dzkyxk1qn, true) ,
 "\n";
echo __LINE__, " - Category ID: ", print_r($m4is_g1q8vsgh8yz3c3y2, true) , "\n";
echo __LINE__, " - Tag Count: ", print_r($m4is_gqmmzp9nw4,
 true) , "\n";
echo __LINE__, " - Date Format: ", print_r($m4is_s67jk5ynxsd7f431hw4q2qpec6msg, true) , "\n";
echo __LINE__, " - Interval: ",
 print_r($m4is_0j3xkma6dp, true) , "\n";
}

for ($m4is_5vcwef7pymrfb3zawe = 0; $m4is_5vcwef7pymrfb3zawe < $m4is_gqmmzp9nw4; $m4is_5vcwef7pymrfb3zawe++) {
$m4is_ed3vyyzsbe6syqttnwh68hps1[$m4is_5vcwef7pymrfb3zawe] = $m4is_0s1wngqqevjreqav9s8wf2dzkyxk1qn . date($m4is_s67jk5ynxsd7f431hw4q2qpec6msg,
 strtotime('now + ' . $m4is_5vcwef7pymrfb3zawe . ' ' . $m4is_0j3xkma6dp) );
$m4is_hf6ctsm2pnexk = m4is_0ddg4zyk7dn8eg0283::m4is_2ew8j6drj16( $m4is_ed3vyyzsbe6syqttnwh68hps1[$m4is_5vcwef7pymrfb3zawe] );

if (! $m4is_hf6ctsm2pnexk) {
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Missing Tag: ", $m4is_ed3vyyzsbe6syqttnwh68hps1[$m4is_5vcwef7pymrfb3zawe],
 "\n";
$m4is_h9qv28t503vc7wdyx1ajcxnk[$m4is_5vcwef7pymrfb3zawe] = $m4is_5vcwef7pymrfb3zawe;
}
else {
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Found Existing Tag: ", $m4is_ed3vyyzsbe6syqttnwh68hps1[$m4is_5vcwef7pymrfb3zawe], "\n";
}
}
if (is_array($m4is_h9qv28t503vc7wdyx1ajcxnk) && ! empty($m4is_h9qv28t503vc7wdyx1ajcxnk) ) {
m4is_0ddg4zyk7dn8eg0283::m4is_r929khbv823hsxjc0498q();

foreach ($m4is_h9qv28t503vc7wdyx1ajcxnk as $m4is_5vcwef7pymrfb3zawe) {
$m4is_ed3vyyzsbe6syqttnwh68hps1[$m4is_5vcwef7pymrfb3zawe] = $m4is_0s1wngqqevjreqav9s8wf2dzkyxk1qn . date($m4is_s67jk5ynxsd7f431hw4q2qpec6msg,
 strtotime('now + ' . $m4is_5vcwef7pymrfb3zawe . ' ' . $m4is_0j3xkma6dp) );
$m4is_hf6ctsm2pnexk = m4is_0ddg4zyk7dn8eg0283::m4is_2ew8j6drj16( $m4is_ed3vyyzsbe6syqttnwh68hps1[$m4is_5vcwef7pymrfb3zawe] );

if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Found Tag: ", $m4is_ed3vyyzsbe6syqttnwh68hps1[$m4is_5vcwef7pymrfb3zawe],
 "\n";
if ($m4is_hf6ctsm2pnexk) {
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Found Missing Tag: ", $m4is_ed3vyyzsbe6syqttnwh68hps1[$m4is_5vcwef7pymrfb3zawe],
 "\n";
unset($m4is_h9qv28t503vc7wdyx1ajcxnk[$m4is_5vcwef7pymrfb3zawe]);
}
}
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Still Missing Tags: ", print_r($m4is_h9qv28t503vc7wdyx1ajcxnk, true), "\n";
foreach ($m4is_h9qv28t503vc7wdyx1ajcxnk as $m4is_5vcwef7pymrfb3zawe) {
$m4is_hf6ctsm2pnexk = m4is_0ddg4zyk7dn8eg0283::m4is_9bbkcv7vn6spvqcjs($m4is_ed3vyyzsbe6syqttnwh68hps1[$m4is_5vcwef7pymrfb3zawe],
 (int) $m4is_g1q8vsgh8yz3c3y2, 'Magazine Issue Tag Auto-created by Memberium on ' . $m4is_map8tdmsvarsn03f1fhfytx61b4a);
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Created Tag : ", $m4is_ed3vyyzsbe6syqttnwh68hps1[$m4is_5vcwef7pymrfb3zawe], "\n";
}
}
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Setting Tag: ", $m4is_ed3vyyzsbe6syqttnwh68hps1[0] , "\n";
$m4is_hf6ctsm2pnexk = m4is_0ddg4zyk7dn8eg0283::m4is_2ew8j6drj16($m4is_ed3vyyzsbe6syqttnwh68hps1[0]);

$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_hf6ctsm2pnexk, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_132xe588j->m4is_h9t0p5fc1('send_http_post');

exit;
}
function m4is_s5djkyfcesk04fnj285wwtvjkr6bn(): void {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_bdm5zcwjc129tj3m4z153tsne2sn1p = isset($_GET['debug']) ? TRUE : FALSE;

if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Debug Mode Enabled\n";
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - POST: ", print_r($_POST, true) , "\n";
$this->m4is_132xe588j->m4is_bpzt4p8q92db7($_POST);
$this->m4is_132xe588j->m4is_h9t0p5fc1('send_http_post');

echo __LINE__, " - Saved Contact Record To Local Cache\n";
echo 'Operation Completed';
return;
}
function m4is_ajxkdj4gxdyp3y04k9c0a6xn6vkte12r(): void {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty($_POST['Id']) ? 0 : (int) $_POST['Id'];
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty($_POST['contactId']) ? $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp : (int) $_POST['contactId'];

$m4is_bdm5zcwjc129tj3m4z153tsne2sn1p = isset($_GET['debug']) ? true : false;
$m4is_17cb8stmp0 = isset($_GET['tagids']) && $_GET['tagids'] > '' ? array_unique(explode(',',
 $_GET['tagids']) ) : [];
$m4is_h1hgagd3k3hzgj8vjv01r3de57y = (boolean) strtolower($_GET['sync']) <> 'no';
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) {
echo __LINE__,
 " - Debug Mode Enabled\n";
echo __LINE__, " - _POST = ", print_r($_POST, true),"\n";
echo __LINE__, " - Tag ID's = ", print_r($m4is_17cb8stmp0,
 true),"\n";
echo __LINE__, " - Contact Id = ", $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, "\n";
}
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0) {
$m4is_cyg7rcfhzagmm5v = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 false);
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Contact Tags = ", $m4is_cyg7rcfhzagmm5v['Groups'], "\n";
if (is_array($m4is_cyg7rcfhzagmm5v) && (isset($m4is_cyg7rcfhzagmm5v['Groups']) ) ) {
$m4is_n79rn4yv31hrq9g7a88yr91f = array_unique(explode(',',
 $m4is_cyg7rcfhzagmm5v['Groups']) );
if (is_array($m4is_17cb8stmp0) && ! empty($m4is_17cb8stmp0) ) {
foreach($m4is_17cb8stmp0 as $m4is_n98a6swh10q0q11py4adghgfk9krk) {
$m4is_n98a6swh10q0q11py4adghgfk9krk = (int) $m4is_n98a6swh10q0q11py4adghgfk9krk;

if ($m4is_n98a6swh10q0q11py4adghgfk9krk > 0) {
$m4is_n79rn4yv31hrq9g7a88yr91f[] = $m4is_n98a6swh10q0q11py4adghgfk9krk;
}
if ($m4is_n98a6swh10q0q11py4adghgfk9krk < 0) {
$m4is_n98a6swh10q0q11py4adghgfk9krk = abs($m4is_n98a6swh10q0q11py4adghgfk9krk);

if ( ($m4is_j8j55t8dz79m7 = array_search($m4is_n98a6swh10q0q11py4adghgfk9krk, $m4is_n79rn4yv31hrq9g7a88yr91f) ) !== false) {
unset($m4is_n79rn4yv31hrq9g7a88yr91f[$m4is_j8j55t8dz79m7]);

}
}
}
$m4is_n79rn4yv31hrq9g7a88yr91f = array_unique($m4is_n79rn4yv31hrq9g7a88yr91f);
sort($m4is_n79rn4yv31hrq9g7a88yr91f);
$m4is_cyg7rcfhzagmm5v['Groups'] = implode(',',
 $m4is_n79rn4yv31hrq9g7a88yr91f);
$m4is_cyg7rcfhzagmm5v['!LastUpdated'] = time();
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) {
echo __LINE__,
 " - Final Groups = ", implode(',', $m4is_n79rn4yv31hrq9g7a88yr91f), "\n";
echo __LINE__, " - Final Contact = ", print_r($m4is_cyg7rcfhzagmm5v,
 true), "\n";
}
$this->m4is_132xe588j->m4is_bpzt4p8q92db7($m4is_cyg7rcfhzagmm5v);
}
else {
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - No Tag ID's passed\n";
}
}
else {
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Contact ID ", $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 " not found.\n";
}
}
}
public function m4is_x6e9fh27y5z(): void {
$m4is_bdm5zcwjc129tj3m4z153tsne2sn1p = isset($_GET['debug']) ? TRUE : FALSE;

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_fbe9fzzx9wyyk8jkdkcr3xep1( $_REQUEST['Email'] );
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Debug Mode Enabled\n";
if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 > 0 ) {
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memberium_optout',
 0 );
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - User ID ", $m4is_wk4dh1rnd3wmwvsggq51nhn87, " opted in\n";
}
else {
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - User ID ", $m4is_wk4dh1rnd3wmwvsggq51nhn87, " not found\n";
}
}
function m4is_mayckar84506njxjph6bt1d(): void {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_bdm5zcwjc129tj3m4z153tsne2sn1p = isset($_GET['debug']) ? TRUE : FALSE;
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_fbe9fzzx9wyyk8jkdkcr3xep1($_REQUEST['Email']);

if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Debug Mode Enabled\n";
if ($m4is_wk4dh1rnd3wmwvsggq51nhn87 > 0) {
update_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memberium_optout', 1);
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - User ID ", $m4is_wk4dh1rnd3wmwvsggq51nhn87, " opted out\n";

}
else {
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - User ID ", $m4is_wk4dh1rnd3wmwvsggq51nhn87, " not found\n";
}
}
function m4is_b3t782xn292yve2z5(): void {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

global $wpdb;
$m4is_bdm5zcwjc129tj3m4z153tsne2sn1p = isset($_GET['debug']) ? TRUE : FALSE;
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Debug Mode Enabled\n";
$m4is_th384m7gvm775j7 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('ga_customvars', 'username_field');

$m4is_mr4hnyh6fa0p9sm0m8wfs1 = $_POST[$m4is_th384m7gvm775j7];
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email', $m4is_mr4hnyh6fa0p9sm0m8wfs1);

$m4is_zrj19crmqpbwed1srvv = $_GET['countername'];
$m4is_knxbec8fr3be1s2tkx0ydee0z = strtolower($_GET['action']);
$m4is_rqxytszfq5v6syth1csqqxvy5 = $_GET['value'];

if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) {
echo __LINE__, " - Username Field:  {$m4is_th384m7gvm775j7}\n";
echo __LINE__, " - Username:  {$m4is_mr4hnyh6fa0p9sm0m8wfs1}\n";

echo __LINE__, " - User:  {$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65}\n";
echo __LINE__, " - Counter Name:  {$m4is_zrj19crmqpbwed1srvv}\n";

echo __LINE__, " - Action:  {$m4is_knxbec8fr3be1s2tkx0ydee0z}\n";
echo __LINE__, " - Value:  {$m4is_rqxytszfq5v6syth1csqqxvy5}\n";

}
if ($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Found User\n";
switch ($m4is_knxbec8fr3be1s2tkx0ydee0z) {
case 'set':
$this->m4is_132xe588j->m4is_fkwjzzpbkcrc3nhe2yvnfvrv32yq( $m4is_zrj19crmqpbwed1srvv,
 $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );
$this->m4is_132xe588j->m4is_mz8ypkzzr4fxz8e42njma37v6ge02();

if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Custom Counter Updated\n";
break;
}

}
else {
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Username {$m4is_mr4hnyh6fa0p9sm0m8wfs1} not found.\n";
}
echo 'Operation Completed';
$this->m4is_132xe588j->m4is_h9t0p5fc1('send_http_post');

}


public function m4is_g0hmq42edz016t() : void {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_bdm5zcwjc129tj3m4z153tsne2sn1p = isset( $_GET['debug'] );

if ( $m4is_bdm5zcwjc129tj3m4z153tsne2sn1p ) echo __LINE__, " - Debug Mode Enabled\n";
$m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = isset($_POST['Id']) ? (int) $_POST['Id'] : 0;
$m4is_cz64sx9rb84h1h8yw9xrbztn4x83k3r = isset($_GET['destfield']) ? trim($_GET['destfield']) : '';

$m4is_tsr365p5xr2s9gkwqaxjcvxn7meb = isset($_GET['subscriptionplans']) ? explode(',', $_GET['subscriptionplans']) : [];
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) {
echo __LINE__,
 " - Contact Id: ", $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, "\n";
echo __LINE__, " - Destination Field: ", $m4is_cz64sx9rb84h1h8yw9xrbztn4x83k3r,
 "\n";
echo __LINE__, " - Subscription Types: ", implode(', ', $m4is_tsr365p5xr2s9gkwqaxjcvxn7meb ), "\n";
}
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0 && $m4is_cz64sx9rb84h1h8yw9xrbztn4x83k3r > '') {
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',

'BillingCycle',
'Frequency',
'Status',
'contactId',
'EndDate',
'LastBillDate',
'NextBillDate',
'PaidThruDate',
'StartDate',
'SubscriptionPlanId'
];

$m4is_j34bmw9dcjexfj1qpz = [
'contactId' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'Status' => 'Active',
];
$m4is_b8kp39yep9qysj = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2( 'RecurringOrder',
 997, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
$m4is_vqjz4tpsq1x01rdrjcghdt83v = '99991231T12:59:59';
$m4is_egm0frk4dhxzgq5rzry34q5v79t2 = date('YmdTH:i:s');

if ( is_array( $m4is_b8kp39yep9qysj ) ) {
foreach ( $m4is_b8kp39yep9qysj as $m4is_z1w4e9gz8m3e9pg7yydpb2 ) {
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - RecurringOrders\n", print_r($m4is_z1w4e9gz8m3e9pg7yydpb2, true), "\n";
if (! empty($m4is_z1w4e9gz8m3e9pg7yydpb2['NextBillDate']) ) {
if ($m4is_z1w4e9gz8m3e9pg7yydpb2['NextBillDate'] < $m4is_vqjz4tpsq1x01rdrjcghdt83v) {
if ($m4is_z1w4e9gz8m3e9pg7yydpb2['NextBillDate'] >= $m4is_egm0frk4dhxzgq5rzry34q5v79t2) {
if ( empty( $m4is_tsr365p5xr2s9gkwqaxjcvxn7meb ) || in_array( $m4is_z1w4e9gz8m3e9pg7yydpb2['SubscriptionPlanId'],
 $m4is_tsr365p5xr2s9gkwqaxjcvxn7meb ) ) {
$m4is_vqjz4tpsq1x01rdrjcghdt83v = $m4is_z1w4e9gz8m3e9pg7yydpb2['NextBillDate'];
}
}
}
}
}
}
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Next Billing Date = ", $m4is_vqjz4tpsq1x01rdrjcghdt83v, "\n";
if ($m4is_vqjz4tpsq1x01rdrjcghdt83v <> '99991231T12:59:59') {
$this->m4is_132xe588j->m4is_8sqkcc4ebfed07z6qzkv9edmnxzjh($m4is_cz64sx9rb84h1h8yw9xrbztn4x83k3r,
 $m4is_vqjz4tpsq1x01rdrjcghdt83v, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Contact Updated (",
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, ")\n";
}
}
}

public function m4is_h4vvyf1hz(): void {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

$m4is_bdm5zcwjc129tj3m4z153tsne2sn1p = isset($_GET['debug']) ? true : false;
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Debug Mode Enabled\n";
$m4is_562x78yvcsqa2qz69njxhhm8c21 = m4is_c2ry5jv8yz446k40191::m4is_nx69e5png6y6v($_POST['Id'], 'httppost',
 'Expire Subscriptions');
date_default_timezone_set('America/New_York');
$m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r('appname');

$m4is_egm0frk4dhxzgq5rzry34q5v79t2 = date('Y-m-d');
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',
];
$m4is_j34bmw9dcjexfj1qpz = [
'Status' =>
 'Active',
'EndDate' => '~<=~' . $m4is_egm0frk4dhxzgq5rzry34q5v79t2,
];
$m4is_b8kp39yep9qysj = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2('RecurringOrder',
 995, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5);
$m4is_0chcpza6xmp1 = [
'Status' => 'Inactive'
];
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) {
echo '<pre>Query = ',
 print_r($m4is_j34bmw9dcjexfj1qpz, true), '</pre>';
echo '<pre>Recurring Orders = ', print_r( $m4is_b8kp39yep9qysj, true ), '</pre>';

}
foreach($m4is_b8kp39yep9qysj as $m4is_z1w4e9gz8m3e9pg7yydpb2) {
m4is_xm67qjyegqdeb9wqcm::m4is_5smzakqeahg0vdxh35zwmhx7kj01s8('RecurringOrder',
 (int) $m4is_z1w4e9gz8m3e9pg7yydpb2['Id'], $m4is_0chcpza6xmp1);
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( $m4is_562x78yvcsqa2qz69njxhhm8c21,
 "Deactivating Recurring Order #{$m4is_z1w4e9gz8m3e9pg7yydpb2['Id']}" );
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) {
echo 'Deactivating Recurring Order #',
 $m4is_z1w4e9gz8m3e9pg7yydpb2['Id'], '<br>';
}
sleep(1);
}
exit;
}



function m4is_q05x2qpj2pg4vghmshj0t($m4is_d1pparkqzk1wvcb8n2xq3tqj,
 $m4is_z4ts5pa39jf1yhjb4) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if (! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return $m4is_d1pparkqzk1wvcb8n2xq3tqj;

}
$m4is_1we1qc8rdsrfq = $this->m4is_krs2avqy019m3mx($m4is_z4ts5pa39jf1yhjb4->ID);
if (! $m4is_1we1qc8rdsrfq) {
return $m4is_z4ts5pa39jf1yhjb4->excerpt;

}
return null;
}




function m4is_geefc7cdt4t($m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_5psnvygrsk9vye6wxdqwqcpjcfmhvs) {
return;
if (! class_exists('WooCommerce') ) {
return;

}
global $woocommerce;
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_wk4dh1rnd3wmwvsggq51nhn87);

if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
return;
}
$m4is_r0k5agzeh2z = $this->m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();
$m4is_n4g02qq4jr4gbkv = ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp == $m4is_r0k5agzeh2z);

$m4is_sqf5s0jgtpxjckm96bh652q6v = apply_filters('memberium/usermeta/crm_field_maps', $m4is_sqf5s0jgtpxjckm96bh652q6v);
$m4is_vtr7w2x3ydqmbgaw9116t4jvr = get_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87);


$m4is_g8tsywp810 = [];
foreach ($m4is_sqf5s0jgtpxjckm96bh652q6v as $m4is_atb9hyje4mcfq43d9kwh6hznj => $isfield) {
$session_fieldname = strtolower($isfield);

if (isset($m4is_vtr7w2x3ydqmbgaw9116t4jvr[$m4is_atb9hyje4mcfq43d9kwh6hznj][0]) ) {
$m4is_3vq30396s47 = $m4is_vtr7w2x3ydqmbgaw9116t4jvr[$m4is_atb9hyje4mcfq43d9kwh6hznj][0];

if ($m4is_atb9hyje4mcfq43d9kwh6hznj == 'billing_country' || $m4is_atb9hyje4mcfq43d9kwh6hznj == 'shipping_country') {
$m4is_3vq30396s47 = m4is_cyt7qan1n::m4is_jfdttzves4ph8dp27y0z5nsfp0vf($m4is_3vq30396s47);

}

if ($m4is_n4g02qq4jr4gbkv) {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_pcb5ffn5nrn( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'contact',
 $session_fieldname, $m4is_3vq30396s47 );
}

$m4is_g8tsywp810[$isfield] = $m4is_3vq30396s47;
}
}
if (! empty($m4is_g8tsywp810) ) {

m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_g8tsywp810); 

$m4is_f5pq560taxn4v67xk7v982nwn0 = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

foreach ($m4is_g8tsywp810 as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6=>$m4is_xgtgw8c7w25hk72ec5z99vqy7a) {
$m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = $m4is_xgtgw8c7w25hk72ec5z99vqy7a;

}
$this->m4is_132xe588j->m4is_bpzt4p8q92db7($m4is_f5pq560taxn4v67xk7v982nwn0);
}
}
function m4is_ecwz13c1nvvm($m4is_f5pq560taxn4v67xk7v982nwn0,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0) {
return;
if (! class_exists('WooCommerce') ) {
return;
}
if (empty($m4is_wk4dh1rnd3wmwvsggq51nhn87) ) {
return;

}
$m4is_sqf5s0jgtpxjckm96bh652q6v = apply_filters('memberium/usermeta/crm_field_maps', []);
$m4is_th384m7gvm775j7 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'username_field');
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_wk4dh1rnd3wmwvsggq51nhn87 ? $m4is_wk4dh1rnd3wmwvsggq51nhn87 : $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

if ( (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87 == 0) {
$m4is_8ysqtcvttv = get_user_by( 'email', $m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_th384m7gvm775j7]);

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_8ysqtcvttv->ID;
}
if ( (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87 == 0) {
$m4is_8ysqtcvttv = get_user_by( 'login',
 $m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_th384m7gvm775j7]);
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_8ysqtcvttv->ID;
}
if ( (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87 > 0) {
foreach ($m4is_sqf5s0jgtpxjckm96bh652q6v as $woofield =>
 $isfield) {
if (isset($m4is_f5pq560taxn4v67xk7v982nwn0[$isfield]) ) {
$m4is_3vq30396s47 = trim($m4is_f5pq560taxn4v67xk7v982nwn0[$isfield]);

if ($woofield == 'billing_country' || $woofield == 'shipping_country') {
$m4is_3vq30396s47 = m4is_cyt7qan1n::m4is_jfdttzves4ph8dp27y0z5nsfp0vf($m4is_3vq30396s47);

}
update_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87, $woofield, $m4is_3vq30396s47);
}
}
}
}
function m4is_9m2xvp9dp4mmvca0few6ge($user = NULL) {
if (! class_exists('WooCommerce') ) {
return;

}

if (isset($_POST['password_1']) && isset($_POST['password_2']) && $_POST['password_1'] > '' && $_POST['password_1'] == $_POST['password_2']) {
$user = wp_get_current_user();

$this->m4is_q3fstws88($user);
}
}

function m4is_ja6d21mn() {
if (empty( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'extended_reg_fields') ) ) {
return;
}
?>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="reg_billing_first_name">First Name <span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" value="" />
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" style="margin-bottom:-1em;">
		<label for="reg_billing_last_name">Last Name <span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="" />
		</p>
			<?php
 }
function m4is_9ccc15qk($m4is_mr4hnyh6fa0p9sm0m8wfs1,
 $m4is_zxwt8y3szyy1aenkh, $m4is_p8atsygtc9dsrepe) {
if (empty( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'extended_reg_fields') ) ) {
return;
}
if (isset($_POST['billing_first_name']) && empty($_POST['billing_first_name']) ) {
$m4is_p8atsygtc9dsrepe->add('billing_first_name_error',
 __('<strong>Error</strong>: First name is required!', 'woocommerce') );
}
if (isset($_POST['billing_last_name']) && empty($_POST['billing_last_name']) ) {
$m4is_p8atsygtc9dsrepe->add('billing_last_name_error',
 __('<strong>Error</strong>: Last name is required!.', 'woocommerce') );
}
return $m4is_p8atsygtc9dsrepe;
}



function m4is_y1jkzc432arrrkwaqxk( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) {
if ( is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'WP_User' ) ) {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );
}
return $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65;

}

function m4is_7pydxk6x9xm95fc3vfq3gnqxm5pemadf( $m4is_mr4hnyh6fa0p9sm0m8wfs1 ) {
$m4is_th384m7gvm775j7 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'username_field');
if (! strpos($m4is_mr4hnyh6fa0p9sm0m8wfs1, '@') && ! in_array($m4is_th384m7gvm775j7, ['Email', 'EmailAddress2',
 'EmailAddress3'] ) ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'login', $m4is_mr4hnyh6fa0p9sm0m8wfs1);
if (is_a($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'WP_User') ) {
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->data->user_email;
}
}
return $m4is_mr4hnyh6fa0p9sm0m8wfs1;

}

public function m4is_a66btmgcp8r1t834n() : void {
if ( ! $this->m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v() ) {
return;
}
$m4is_ep0t3vddszzpnwk3czxm6dpn484 = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'autologout_time' );
if ( ! $m4is_ep0t3vddszzpnwk3czxm6dpn484 ) {
return;
}
$m4is_sevm6naftkjwcg2qz4kgfm = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'default_logout_page' );
$m4is_fj5dgn1q92krcj82f9wz = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'memb_user', 'logout_page', 0 );
if ( $m4is_fj5dgn1q92krcj82f9wz ) {
$m4is_zhf4dv1f7qn2 = wp_logout_url( get_permalink( $m4is_fj5dgn1q92krcj82f9wz ) );

}
elseif ( $m4is_sevm6naftkjwcg2qz4kgfm) {
$m4is_zhf4dv1f7qn2 = wp_logout_url( $m4is_sevm6naftkjwcg2qz4kgfm );
}
else {
$m4is_zhf4dv1f7qn2 = wp_logout_url( get_site_url() );

}
printf( '<meta http-equiv="refresh" content="%d;url=%s">', $m4is_ep0t3vddszzpnwk3czxm6dpn484, $m4is_zhf4dv1f7qn2 );
}
function m4is_6hv5e2rxv4xq1f5wns0ecdavb9a() {
return $this->login_redirect_enabled;

}
function m4is_ttajtwg9cm1ag($m4is_yrsthh0s4s62mfk9) {
$this->login_redirect_enabled = (bool) $m4is_yrsthh0s4s62mfk9;
}



function m4is_wszcbrp5em() {
$m4is_knxbec8fr3be1s2tkx0ydee0z = isset($_POST['memb_form_type']) ? trim(strtolower($_POST['memb_form_type']) ) : '';

if (! empty($m4is_knxbec8fr3be1s2tkx0ydee0z) ) {
$m4is_4y634fj5w1h7e = 'm4is_psemnn0tqcdmhffqg5jht';
$m4is_ww51hxmadk9fa1 = [
'memb_change_email' =>
 [$m4is_4y634fj5w1h7e, 'm4is_be31n5vyknq'],
'memb_change_password' => [$m4is_4y634fj5w1h7e, 'm4is_xqq9hd2awgcj4t6mppx69'],
];
$m4is_ww51hxmadk9fa1 = apply_filters('memberium/user_catchers/get',
 $m4is_ww51hxmadk9fa1);
if (! empty($m4is_ww51hxmadk9fa1[$m4is_knxbec8fr3be1s2tkx0ydee0z])) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

call_user_func($m4is_ww51hxmadk9fa1[$m4is_knxbec8fr3be1s2tkx0ydee0z]);
}
}
}
function m4is_f8t6jcztcpa06z9g9zpvypbteer() {
$m4is_knxbec8fr3be1s2tkx0ydee0z = isset($_POST['memb_form_type']) ? trim(strtolower($_POST['memb_form_type']) ) : '';

if (! empty($m4is_knxbec8fr3be1s2tkx0ydee0z) ) {
$m4is_4y634fj5w1h7e = 'm4is_psemnn0tqcdmhffqg5jht';
$m4is_ww51hxmadk9fa1 = [
'memb_add_payment_method' =>
 [$m4is_4y634fj5w1h7e, 'm4is_kdw5pp1a4ags'],
'memb_actionset_button' => [$m4is_4y634fj5w1h7e, 'm4is_ysvb6bmgf5mqbjqf6fyvdg7gqm9q0s'],

'memb_add_creditcard_button' => [$m4is_4y634fj5w1h7e, 'm4is_0kn6fd5havqmj'],
'memb_cancel_subscription' => [$m4is_4y634fj5w1h7e, 'm4is_5dr662sswtt'],

'memb_filebox_upload' => [$m4is_4y634fj5w1h7e, 'm4is_qcdnvpe498hxgzbttghm7wn10'],
'memb_pay_invoice' => [$m4is_4y634fj5w1h7e, 'm4is_qmhrw6j0x8hsmqdw38ef2gnr9g5mde'],

'memb_place_order' => [$m4is_4y634fj5w1h7e, 'm4is_z715mrrjcs843'],
'memb_placeorder_button' => [$m4is_4y634fj5w1h7e, 'm4is_bg9r7kxpbbd80nm542d07gmv34xg4'],

'memb_registration' => [$m4is_4y634fj5w1h7e, 'm4is_fdvsc18tr'],
'memb_resetfeedurl_button' => [$m4is_4y634fj5w1h7e, 'm4is_5nsqh0nq2xf6gsj911zargp8g1a5hhq'],

'memb_send_password' => [$m4is_4y634fj5w1h7e, 'm4is_2v1swkbkg562b1vjx9s'],
'memb_update_contact_form' => [$m4is_4y634fj5w1h7e, 'm4is_n2815tjbrqnsn2tj43yzpkbmwg7rm11y'],

'memb_lost_password' => [$m4is_4y634fj5w1h7e, 'm4is_z4mzpnzctf0pn1vb2'],
];
$m4is_ww51hxmadk9fa1 = apply_filters( 'memberium/catchers/get',
 $m4is_ww51hxmadk9fa1 );
if ( ! empty( $m4is_ww51hxmadk9fa1[$m4is_knxbec8fr3be1s2tkx0ydee0z] ) ) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

call_user_func( $m4is_ww51hxmadk9fa1[$m4is_knxbec8fr3be1s2tkx0ydee0z] );
}
}
}
function m4is_71mcc122dd0621($m4is_65aka8xf2h8j) {
if (is_user_logged_in() ) {
if ( $this->m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return $m4is_65aka8xf2h8j;

}
return '';
}
return $m4is_65aka8xf2h8j;
}
function m4is_4gpwcs6m0f2gq( $m4is_agrb04wvghmny2c4p8bwwf4 = '', $m4is_hawpvczh = '', $m4is_maaqmnest057v76ybs889xnpnvtv9x = '' ) {
return html_entity_decode( $m4is_agrb04wvghmny2c4p8bwwf4,
 ENT_NOQUOTES );
}
public function m4is_tpfg7f3sr5q7wwxgqk48ggcnsypf( array $m4is_63m0ahxp94 ) {
if ( ! empty( $m4is_63m0ahxp94['title'] ) ) {
$m4is_63m0ahxp94['title'] = html_entity_decode( $m4is_63m0ahxp94['title'],
 ENT_NOQUOTES );
}
return $m4is_63m0ahxp94;
}



private function m4is_p1539p5pfm010pg5y5j2xyv() {
add_action( 'login_head', [$this,
 'm4is_ccdebhbq33b1g737qdy15k2mf4'], PHP_INT_MAX );
add_action( 'wp_logout', [$this, 'm4is_z04fs8nwd0rqxzbyykada5veejkm'] ); 
add_filter( 'wp_authenticate_user',
 [$this, 'm4is_y1jkzc432arrrkwaqxk'], 1 );
}
private function m4is_4n8hjj02svw909sgtdkc32mfyddw4e8() {
add_filter('comments_array',
 [$this, 'm4is_qgaraj7myqvgz3kkn39eq0zb'], 5);
add_filter('comments_array', [$this, 'm4is_xxd10mvf8r7'], 7);
add_filter('comments_open',
 [$this, 'm4is_1zmzvjswxewkgsb1gt2k3x'], 100, 2);
add_filter('get_comments_number', [$this, 'm4is_0048d4vjwg'], 10, 2);
}

private function m4is_2p3pqhapmbe3qnx0tc1byjcpyg5cbfr() {
add_action( 'do_feed_atom_comments',
 [$this, 'm4is_yg06va0zwnh6m0bs5327q'], 1 );
add_action( 'do_feed_atom', [$this, 'm4is_yg06va0zwnh6m0bs5327q'], 1 );
add_action( 'do_feed_rdf',
 [$this, 'm4is_yg06va0zwnh6m0bs5327q'], 1 );
add_action( 'do_feed_rss', [$this, 'm4is_yg06va0zwnh6m0bs5327q'], 1 );
add_action( 'do_feed_rss2_comments',
 [$this, 'm4is_yg06va0zwnh6m0bs5327q'], 1 );
add_action( 'do_feed_rss2', [$this, 'm4is_yg06va0zwnh6m0bs5327q'], 1 );
add_action( 'do_feed',
 [$this, 'm4is_yg06va0zwnh6m0bs5327q'], 1 );
add_filter( 'feed_link', function() { return ''; } );
add_filter( 'gettext', function( $m4is_gmwqmyvmsm9p1361p3ws2j18b65gj08,
 $m4is_cwv4aa9zak1r37, $m4is_e8h8dhk83hxkj818w ) {
return in_array( $m4is_gmwqmyvmsm9p1361p3ws2j18b65gj08, ['Entries feed', 'Comments feed'] ) ? '' : $m4is_gmwqmyvmsm9p1361p3ws2j18b65gj08;

}, 10, 3 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp', 'bp_activity_action_favorites_feed',
 3 );
remove_action( 'wp', 'bp_activity_action_friends_feed', 3 );
remove_action( 'wp', 'bp_activity_action_mentions_feed', 3 );
remove_action( 'wp',
 'bp_activity_action_my_groups_feed', 3 );
remove_action( 'wp', 'bp_activity_action_personal_feed', 3 );
remove_action( 'wp', 'bp_activity_action_sitewide_feed',
 3 );
remove_action( 'wp', 'groups_action_group_feed', 3 );
}

private function m4is_20szbcp652rq6cgq7a0rp9bjcjmn() {
add_action('do_feed_atom',
 [$this, 'm4is_vtq2e1nssv1v7a6g2d8xarhzby6j7g'], 1);
add_action('do_feed_rdf', [$this, 'm4is_vtq2e1nssv1v7a6g2d8xarhzby6j7g'], 1);
add_action('do_feed_rss',
 [$this, 'm4is_vtq2e1nssv1v7a6g2d8xarhzby6j7g'], 1);
add_action('do_feed_rss2', [$this, 'm4is_vtq2e1nssv1v7a6g2d8xarhzby6j7g'], 1);

}

private function m4is_5nve4rvgv7g1tb35ht4() {
$m4is_6p3m6e69dktmd8ab84px = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'wp_autop');
if ($m4is_6p3m6e69dktmd8ab84px == 1) {
remove_filter('the_content', 'wpautop');
}
elseif ($m4is_6p3m6e69dktmd8ab84px == 2) {
$m4is_kaa5pga5jjz8asejzk = has_filter('the_content',
 'wpautop');
if ($m4is_kaa5pga5jjz8asejzk !== false && $m4is_kaa5pga5jjz8asejzk < 11) {
remove_filter('the_content', 'wpautop');
add_filter('the_content',
 'wpautop', 11);
}
}
}

private function m4is_3sezz26q() {
$m4is_ngk8zsjp8jngcep0kv = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'disable_lost_password' );
$m4is_99v75yh2d28m7p2r61fbyxyzwasdetbg = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'disable_password_reset' );
$m4is_v5n984r1t48n2gq8rzsv = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'autologout_time' );
$m4is_qgf4ybemtzkw744qe68sqx1g0vf = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'protect_feeds' );
if ( $m4is_ngk8zsjp8jngcep0kv ) {
add_filter('gettext', [$this, 'm4is_6e7zav5x0v18wdg99h']);
}
if ($m4is_99v75yh2d28m7p2r61fbyxyzwasdetbg) {
add_filter('allow_password_reset',
 [$this, 'm4is_195d0sfmzsavm5txxx1t2p8dvc7']);
}
if ( $m4is_v5n984r1t48n2gq8rzsv ) {
add_action('wp_head', [$this, 'm4is_a66btmgcp8r1t834n']);

}
if (! empty($_GET['rss_user']) ) {
add_filter('posts_pre_query', ['m4is_8cw98mp72zyj4wx2kqhny4bcv90', 'm4is_9q3xqeftztec1ydnvgdcem78r73crj31'],
 10, 2);
}
if ($m4is_qgf4ybemtzkw744qe68sqx1g0vf) {

$this->m4is_2p3pqhapmbe3qnx0tc1byjcpyg5cbfr();
}
else {
$this->m4is_20szbcp652rq6cgq7a0rp9bjcjmn();

}
if ( ! is_admin() ) {

add_filter('widget_text', 'do_shortcode');
add_filter('widget_title', 'do_shortcode');
add_filter('the_title',
 'do_shortcode');
add_filter('the_excerpt', 'do_shortcode');
add_filter('get_the_excerpt', 'do_shortcode', 10);
add_filter('get_the_author_description',
 'do_shortcode');
add_filter('excerpt_length', [$this, 'm4is_seg6qnhp435ngf6'], 999);
}
}

private function m4is_53jwzp5q2s9zr() {
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$m4is_fxchchth0bgg3k520w1ecmrqh24g3e = ! empty($_GET['operation']) && ! empty($_GET['auth_key']) || (! empty($_GET['i4w_genpass']) || (! empty($_GET['i4w_sync_user'])));

if ( $m4is_fxchchth0bgg3k520w1ecmrqh24g3e ) {
add_action( 'plugins_loaded', [$this, 'm4is_grrtgjn2mbhcsdx4'], 100 );
}
else {
add_action('template_redirect',
 [$this, 'm4is_wszcbrp5em'], 1);
add_action('init', [$this, 'm4is_f8t6jcztcpa06z9g9zpvypbteer'], 11);
}
}
}


function m4is_3k16a34b6y90dyhqhmjx7q5yzy($m4is_qb5923051s91rbx9v,
 $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
if ( ! empty( $_GET['redirect_to'] ) ) {
return $_GET['redirect_to'];
}
if ( $this->m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return get_dashboard_url();

}
if ( ! empty( $this->login_redirect_url ) ) {
return $this->login_redirect_url;
}
return $m4is_qb5923051s91rbx9v;
}


public function m4is_rs03p3ww88dsn6jdtnjva( $m4is_5pc2b4asdb7axyckycnzk80bdj8wytk,
 $m4is_xrfc1hjv3jft6h6q83drapfw66xa0azy, $m4is_jztgemx4sama94j ) {
if ( empty( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'sync_new_wp_users') ) ) {
return;
}
if ( empty( $m4is_xrfc1hjv3jft6h6q83drapfw66xa0azy['user_pass'] ) ) {
return;
}
$m4is_7b2yfzk0054 = apply_filters( 'memberium/usermeta/crm_field_maps',
 [] );
$m4is_cyg7rcfhzagmm5v = [];
$m4is_0kdm2zprhs5b1 = get_user_meta( $m4is_5pc2b4asdb7axyckycnzk80bdj8wytk );
foreach( $m4is_7b2yfzk0054 as $meta_name =>
 $crm_name ) {
if ( isset( $m4is_0kdm2zprhs5b1[$meta_name][0] ) ) {
$m4is_cyg7rcfhzagmm5v[$crm_name] = trim( $m4is_0kdm2zprhs5b1[$meta_name][0] );

}
}

if ( ! empty( $m4is_cyg7rcfhzagmm5v ) ) {
$m4is_cyg7rcfhzagmm5v['Email'] = $m4is_xrfc1hjv3jft6h6q83drapfw66xa0azy['user_email'];

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_fcp8rjzp5vm( $m4is_cyg7rcfhzagmm5v );
}
}





public function m4is_hmtxjadxnedft() : void {
if ( $_SERVER['REQUEST_METHOD'] !== 'GET' ) {
return;

}
if (defined('WPE_WHITELABEL')) {
return;
}
if (! $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'affiliate_detect')) {
return;

}
if (! (bool) apply_filters('memberium/affiliate_detect/bypass', true)) {
return;
}
if ( is_admin() || $this->m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return;

}
if (apply_filters('memberium/affiliate_detect/skip', false ) ) {
return;
}
$m4is_bg18z43bcmh7j55yr5ay6b8re5t87w = 'affiliate';
$m4is_k5bpw3v3 = 'infusionsoft_affiliate';

$m4is_sve114svyeqt2x3dh54bq3t = 'memberium/keap/affiliate/id';
$m4is_j6m7j5dv6eq7q8v64eg6aqy = time() + YEAR_IN_SECONDS;
$m4is_ey1f1pxr = time() + DAY_IN_SECONDS;

$m4is_e9b4x27a = remove_query_arg( [$m4is_bg18z43bcmh7j55yr5ay6b8re5t87w, 'cookieUUID', 'fbclid'] );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();

$m4is_ef2x3c9292j = $_SERVER['HTTP_HOST'] ?? '';

if ( isset( $_GET[$m4is_bg18z43bcmh7j55yr5ay6b8re5t87w] ) ) {
$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = (int) $_GET[$m4is_bg18z43bcmh7j55yr5ay6b8re5t87w];

$m4is_hrqbyfpy2sp3w7gmk5we = $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 > 0 ? $m4is_j6m7j5dv6eq7q8v64eg6aqy : $m4is_ey1f1pxr;
setcookie( $m4is_k5bpw3v3,
 $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9, $m4is_hrqbyfpy2sp3w7gmk5we, '/', $m4is_ef2x3c9292j );
$_COOKIE[$m4is_k5bpw3v3] = $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9;

if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
if ( $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 <> (int) get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_sve114svyeqt2x3dh54bq3t, true ) ) {
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_sve114svyeqt2x3dh54bq3t, $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 );

}
}
return;
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
wp_redirect( $m4is_e9b4x27a, 302, 'Memberium Affiliate Detect' );

exit;
}

if ( isset( $_COOKIE[$m4is_k5bpw3v3] ) ) {
if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$m4is_jbrnkh6459fgh5cjvk9xq = (int) $_COOKIE[$m4is_k5bpw3v3];

$m4is_6h7mden9rhcw11g = (int) get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_sve114svyeqt2x3dh54bq3t, true );
if ( $m4is_jbrnkh6459fgh5cjvk9xq && $m4is_jbrnkh6459fgh5cjvk9xq <> $m4is_6h7mden9rhcw11g ) {
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_sve114svyeqt2x3dh54bq3t, $m4is_jbrnkh6459fgh5cjvk9xq );
}
}
return;
}
if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 > 0 ) {
$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = (int) get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_sve114svyeqt2x3dh54bq3t, true );
if ( $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 > 0 ) {
$_COOKIE[$m4is_k5bpw3v3] = $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9;

$m4is_hrqbyfpy2sp3w7gmk5we = $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 > 0 ? $m4is_j6m7j5dv6eq7q8v64eg6aqy : $m4is_ey1f1pxr;
setcookie( $m4is_k5bpw3v3,
 $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9, $m4is_hrqbyfpy2sp3w7gmk5we, '/', $m4is_ef2x3c9292j );
return;
}
}

$m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );

$m4is_gpbn3yj801ant9xn = ( $_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://' ) . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$m4is_gpbn3yj801ant9xn = urlencode( $m4is_gpbn3yj801ant9xn );
$m4is_yqg76kcx7 = sprintf( 'https://%s.infusionsoft.com/aff.html?to=%s',
 $m4is_v4beyw7zqhr3, $m4is_gpbn3yj801ant9xn );
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
wp_redirect( $m4is_yqg76kcx7,
 302, 'Affiliate Autodetect' );
exit;
}
public function m4is_snxvtrasms4w10nrz() : void {
$m4is_1p52hx92 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'require_membership', 0 );
if ( $m4is_1p52hx92 && $this->m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v() > 0 ) {
$m4is_y7084n6v67jme9va8yz = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'memb_user', 'membership_tags' );
if ( empty( $m4is_y7084n6v67jme9va8yz ) ) {
wp_logout();
}
}
$m4is_afasb9qqmh8d8p54060yanpm57q4p59 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'site_ban_tag', 0 );
if ( $m4is_afasb9qqmh8d8p54060yanpm57q4p59 ) {
$m4is_06c8s5xs94f91335gnaey25 = explode( ',', m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'memb_user', 'tags', '' ) );
if ( in_array( $m4is_afasb9qqmh8d8p54060yanpm57q4p59, $m4is_06c8s5xs94f91335gnaey25 ) ) {
wp_logout();

}
}
}

}