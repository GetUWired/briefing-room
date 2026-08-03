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


defined('ABSPATH') || die();


final class m4is_6y9612z4hjd6fzpap4r5n853641m1jc {

const PLUGIN_UPDATE_URL = 'https://licenseserver.webpowerandlight.com/memberium-is/current-version.php';

const PRODUCT_NAME = 'Memberium';
const NAMESPACE = 'memberium';
private const USER_FIELD_PREFIX = 'memberium::field::';
private const SYSTEM_CONFIG_TIMESTAMP_KEY = 'memberium_system_config_timestamp';

private array $m4is_drfzqdp3 = [];
private array $m4is_febrbabyxdqjt63z = [];
private array $m4is_sae38szyy4kmzrs4 = [];
private array $m4is_rx31tk59n09j0p7znf551gc5qd044k = [];

private array $m4is_gy32ceyx187n1vggvmf9wddmg = [];
private array $m4is_ra7dnjjzebn9h3t6k7a2p36 = [];
private array $m4is_xnr85v7h4qmw = [];

private array $m4is_k890ceyb0xky1e1 = [];
private bool $m4is_w085ynew9ks6whzhnw6rbk51ds140 = false;
private bool $m4is_8wwdvwcfjb06q2dzhzsnadfkrrzk = false;

private int $m4is_mrkvj2wz7zfycb1t2fqqk0jw7 = 0;
private int $m4is_ntrhtsym58b2jm = 0;
private int $m4is_jrevmgznpp3pd48gsq5 = 0;
private int $m4is_t3phhn82n7jkhgtvas = 0;

private object $m4is_36kaghjb;
private object $m4is_wsme5a297xh0v6d5y;
private string $m4is_b9xk29a6 = '';
private string $m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'memberium';

private string $m4is_4ecpv9dz12f2hzqks4z0jhtvtnaw = '';
private string $m4is_zy8a70vtfm18z95pk = '';
private bool $disable_login_redirect = false;

private bool $m4is_z6zhtkdyyrkzahr59gvbf6h = false;

public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef(): self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self();
}

private function __construct() {
$m4is_2c37z1gmy9ehrgypgnjykssqt3jsj = get_option('memberium/disable/plugin',
 '');
m4is_csmdzh4sncasvp1enyykf1bk::m4is_93g1spw7sp1wbdw8qrg( 'app', $this );
if ( $this->m4is_4t1dtq2587910nk542nyt0w( $m4is_2c37z1gmy9ehrgypgnjykssqt3jsj ) ) {
return;

}
$this->m4is_4ecpv9dz12f2hzqks4z0jhtvtnaw = MEMBERIUM_HOME_DIR;
$this->m4is_zy8a70vtfm18z95pk = MEMBERIUM_HOME;
$this->m4is_smk68axw7fa21qe9ag();

$this->m4is_te101bsebsrrr24s();
$this->m4is_hwv4erb7v1e4q9axzce();
$this->m4is_x9en7mg347a1x38am2gt();
$this->m4is_nkvchvkbdcx6g();

$this->m4is_ev2jjrm3g53hdgsfys3wbv5kwtws();
add_action('plugin_loaded', [$this, 'm4is_ssvj1mfyeg00f9973vd1pxpkeqc'], PHP_INT_MIN);

add_action('plugins_loaded', [$this, 'm4is_c7vzza0dseqrv8k98vz4'], PHP_INT_MIN);
add_action('plugins_loaded', [$this, 'm4is_83fjtt3v3j59efb106abk8'],
 2);
}
public function m4is_ssvj1mfyeg00f9973vd1pxpkeqc($m4is_x4y1h7edm3mhg0g17): void {
m4is_p2r78mkk9tdtwpmc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

do_action( 'memberium/modules/loaded' );
if ( $m4is_x4y1h7edm3mhg0g17 !== $this->m4is_zy8a70vtfm18z95pk ) {
return;
}
}

private function m4is_r8emp2zcmhv1twqx3qx8mv() {
if ( ( defined('DOING_AJAX') && DOING_AJAX) || (! is_admin() ) ) {
include_once $this->m4is_54b9bwwsx7sym() . 'system/frontend.php';

m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
if ( is_admin() ) {
include_once $this->m4is_54b9bwwsx7sym() . 'system/admin.php';

m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
}

public function m4is_ny5ejfw4() : string {
global $wpdb;
static $m4is_6f3ett063whdffvcwqpr2;

return $m4is_6f3ett063whdffvcwqpr2 ??= hash_hmac('sha256', $wpdb->dbname . '|' . $wpdb->prefix . '|' . ABSPATH . '|' . site_url(),
 wp_salt('nonce') );
}

private function m4is_4t1dtq2587910nk542nyt0w() : bool {
$m4is_2c37z1gmy9ehrgypgnjykssqt3jsj = get_option( 'memberium/debug/ip_disable',
 '' );
if ( empty( $m4is_2c37z1gmy9ehrgypgnjykssqt3jsj ) ) {
return false;
}
$m4is_2c37z1gmy9ehrgypgnjykssqt3jsj = array_filter( explode( ',',
 $m4is_2c37z1gmy9ehrgypgnjykssqt3jsj ) );
$m4is_19x1c17et728k945 = [
'REMOTE_ADDR',
'HTTP_CLIENT_IP',
'HTTP_X_FORWARDED_FOR',
'HTTP_X_FORWARDED',

'HTTP_X_CLUSTER_CLIENT_IP',
'HTTP_FORWARDED_FOR',
'HTTP_FORWARDED',
'HTTP_X_SUCURI_CLIENTIP',
'HTTP_X_REAL_IP',
];
foreach ( $m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
if ( in_array( $_SERVER[$m4is_j8j55t8dz79m7],
 $m4is_2c37z1gmy9ehrgypgnjykssqt3jsj ) ) {
return true;
}
}
return false;
}

private function m4is_nkvchvkbdcx6g() {
$this->m4is_cfrbn8qdbtbbtyjk8wzqfh();


if ( ! defined( 'WP_DEBUG' ) || ! WP_DEBUG ) {

if ( function_exists( 'error_reporting' )) {

error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_PARSE | E_USER_ERROR );

}

if ( function_exists( 'ini_set' ) ) {

@ini_set( 'display_errors', 0 );
}
}
}




private function m4is_te101bsebsrrr24s() {
$this->m4is_gy32ceyx187n1vggvmf9wddmg['start'] = [
'time' =>
 empty( $_SERVER['REQUEST_TIME_FLOAT'] ) ? microtime( true ) : $_SERVER['REQUEST_TIME_FLOAT'],
'memory' => memory_get_usage(),
'http_calls' =>
 0,
'api_calls' => 0,
'api_time' => 0,
];
add_filter( 'pre_http_request', [$this, 'm4is_e3b7rdsr6zvhb5nm1wr'], 1, 3);
}

public function m4is_qzmcdfydzv8z92m1asvcpm38ag( bool $m4is_32sgs6qp1j8ted1bcb3nff7qpr = true ) : array {
if ( $m4is_32sgs6qp1j8ted1bcb3nff7qpr ) {
$m4is_hartbe843crydzh = [
'time' =>
 microtime( true ) - $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['time'],
'memory' => memory_get_usage() - $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['memory'],

'http_calls' => (int) $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['http_calls'],
'api_calls' => (int) $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['api_calls'],

];
}
else {
$m4is_hartbe843crydzh = [
'time' => microtime( true ) - $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['time'],
'memory' =>
 memory_get_usage(),
'http_calls' => (int) $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['http_calls'],
'api_calls' => (int) $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['api_calls'],

];
}
return $m4is_hartbe843crydzh;
}

private function m4is_8b14je8g2k2jf03() : void {
global $wp_object_cache;
$m4is_njvqsdkydqd7y4ja05ewv6660r = number_format_i18n( microtime( true ) - $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['time'],
 3 ) . 's';
$m4is_yrbvbtnj = size_format( $this->m4is_gy32ceyx187n1vggvmf9wddmg['end']['memory'], 2 );
$m4is_jtz1d4jctene1a2qy86xdchtd = (int) $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['http_calls'];

$m4is_12w1n67twbgwzj5c = (int) $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['api_calls'];
$m4is_23cvptm3bk0pgbfk97em9d51s3k4s = get_num_queries();

$m4is_b9jgj4ck2h1e11x = property_exists( $wp_object_cache, 'cache_hits' ) ? (int) $wp_object_cache->cache_hits : 0;
$m4is_atyp2ay25ynrxav6nthygvbgdfz = property_exists( $wp_object_cache,
 'cache_misses' ) ? (int) $wp_object_cache->cache_misses : 0;
$m4is_zqrpxtqacwk7f6wgcg755zsp4w5d = '';
$m4is_0q57s54p8pmsar = [
'wpal-memberium-time' =>
 $m4is_njvqsdkydqd7y4ja05ewv6660r,
'wpal-memberium-memory' => $m4is_yrbvbtnj,
'wpal-memberium-http-calls' => $m4is_jtz1d4jctene1a2qy86xdchtd,

'wpal-memberium-crm-api' => $m4is_12w1n67twbgwzj5c,

'wpal-memberium-db-queries' => $m4is_23cvptm3bk0pgbfk97em9d51s3k4s,
'wpal-memberium-cache-hits' =>
 $m4is_b9jgj4ck2h1e11x,
'wpal-memberium-cache-misses' => $m4is_atyp2ay25ynrxav6nthygvbgdfz,
];
foreach( $m4is_0q57s54p8pmsar as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_zqrpxtqacwk7f6wgcg755zsp4w5d .= "'$m4is_j8j55t8dz79m7': '$m4is_rqxytszfq5v6syth1csqqxvy5', \n";

}
$m4is_vwkzc6fv1n9ndmn5 = <<<HTMLDOC

			<script>
				document.addEventListener("DOMContentLoaded", function() {
					const elements = {
						{$m4is_zqrpxtqacwk7f6wgcg755zsp4w5d}
					};

					for (const [id, value] of Object.entries(elements)) {
						const el = document.getElementById(id);
						if (el) el.innerHTML = value;
					}
				});
			</script>
		HTMLDOC;

echo $m4is_vwkzc6fv1n9ndmn5;
}
public function m4is_166cc8v46fkbf5( bool $m4is_pxqqyhvpv8x9tskp6p79ktbd = false ) {
global $wp_object_cache;

$this->m4is_gy32ceyx187n1vggvmf9wddmg['end'] = [
'time' => microtime( true ),
'memory' => memory_get_usage(),
];
if ( is_admin_bar_showing() ) {
$this->m4is_8b14je8g2k2jf03();

}
return;
if ( $m4is_pxqqyhvpv8x9tskp6p79ktbd == false && ! is_admin_bar_showing() ) {
return;
}
$m4is_0q57s54p8pmsar = [
'wpal-memberium-time' =>
 $m4is_njvqsdkydqd7y4ja05ewv6660r,
'wpal-memberium-memory' => $m4is_yrbvbtnj,
'wpal-memberium-http-calls' => $m4is_jtz1d4jctene1a2qy86xdchtd,

'wpal-memberium-crm-api' => $m4is_12w1n67twbgwzj5c,

'wpal-memberium-db-queries' => $m4is_23cvptm3bk0pgbfk97em9d51s3k4s,
'wpal-memberium-cache-hits' =>
 $m4is_b9jgj4ck2h1e11x,
'wpal-memberium-cache-misses' => $m4is_atyp2ay25ynrxav6nthygvbgdfz,
];
echo "<script>\n";
echo ' document.addEventListener( "DOMContentLoaded", function() { ' . "\n";

foreach( $m4is_0q57s54p8pmsar as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
echo '  document.getElementById( "' . $m4is_j8j55t8dz79m7 . '" ).innerHTML = "' . $m4is_rqxytszfq5v6syth1csqqxvy5 . '";' . "\n";

}
echo ' }); ' . "\n";
echo "\n</script>";
}

public function m4is_ezfr51qc3pyyewe9t() : void {
if ( ! defined( 'WP_DEBUG' ) || ! WP_DEBUG ) {
return;

}
global $wp_object_cache;
$this->m4is_gy32ceyx187n1vggvmf9wddmg['end'] = [
'time' => microtime( true ),
'memory' => memory_get_usage(),

];
$m4is_njvqsdkydqd7y4ja05ewv6660r = number_format_i18n( microtime( true ) - $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['time'],
 3 ) . 's';
$m4is_yrbvbtnj = size_format( $this->m4is_gy32ceyx187n1vggvmf9wddmg['end']['memory'], 2 );
$m4is_mw90tyyyj9p = (int) $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['http_calls'];

$m4is_jc09gb87tgx = (int) $this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['api_calls'];
$m4is_re40xw9mwv9k6zye6wct665gf7he = get_num_queries();

$m4is_1nec8dtpmskf78rt2myjtx3efmb9 = property_exists( $wp_object_cache, 'cache_hits' ) ? (int) $wp_object_cache->cache_hits : 0;
$m4is_shqtj5cdx = property_exists( $wp_object_cache,
 'cache_misses' ) ? (int) $wp_object_cache->cache_misses : 0;
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_vd3qpw0vkdm();
error_log( sprintf(
'Memberium Profiler: [INFO] %s [%s] user(%s) - time(%s) memory(%s) db(%s) api(%s) http(%s) cachehit(%s) cachemiss(%s)',

sanitize_text_field( $_SERVER['REMOTE_ADDR'] ),
sanitize_text_field( $_SERVER['REQUEST_METHOD'] ),
(int) $m4is_wk4dh1rnd3wmwvsggq51nhn87,

$m4is_njvqsdkydqd7y4ja05ewv6660r,
$m4is_yrbvbtnj,
$m4is_re40xw9mwv9k6zye6wct665gf7he,
$m4is_jc09gb87tgx,
$m4is_mw90tyyyj9p,
$m4is_1nec8dtpmskf78rt2myjtx3efmb9,

$m4is_shqtj5cdx
)
);
}

public function m4is_pms1dmba6byfdg6xk( float $m4is_njvqsdkydqd7y4ja05ewv6660r = 0.0, string $m4is_h7zwy5f0w3y9gx3wm = '' ) : void {

$this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['api_calls']++;


$this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['api_time'] += $m4is_njvqsdkydqd7y4ja05ewv6660r;
}

public function m4is_e3b7rdsr6zvhb5nm1wr( $m4is_hartbe843crydzh,
 $m4is_g61yzqs7ecta0xztr70d7v, $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) {

$this->m4is_gy32ceyx187n1vggvmf9wddmg['start']['http_calls']++;


return $m4is_hartbe843crydzh;
}






private function m4is_smk68axw7fa21qe9ag() : void {
if ( empty( $this->m4is_drfzqdp3 ) ) {
$m4is_rasvm5w7f962fq7e5q = $this->m4is_54b9bwwsx7sym();

$m4is_wte208qfa9s8cy5s792wnvqc82ef8 = $this->m4is_t0brxwak7n05mx6anqhyrgmr();
$this->m4is_drfzqdp3 = [
'm4is_xzw82zta23vanf8pzajwyvkv4' =>
 'classes/system/activate',
'm4is_knfcbrvkjrz3n8k8y6gf' => 'classes/access/admin',
'm4is_ydtq2fsztd1eds9ced5y' => 'classes/system/frontend',

'm4is_95wwwbse2er949xa6svafa6' => 'classes/shortcodes/shortcodes',
'm4is_pt9as1ejs6xfpy7cnx0yxk709' => 'classes/access/admin',
'm4is_9db7hheseencedjdjv' =>
 'classes/access/access',
'm4is_htwcx7s7vsfkt7' => 'classes/access/frontend',
'm4is_pt9as1ejs6xfpy7cnx0yxk709' => 'classes/access/admin',

'm4is_4801pvycyx2vfyx' => 'classes/access/admin-menu',
'm4is_bpxwq3b3pzcb4e217scq729fsqm' => 'classes/access/admin-taxonomy',
'm4is_hc8af2j3geb67rsaxth6zmvcpnmee4g' =>
 'classes/access/admin-widgets',
'm4is_vwc1yy04e4hz3qnbfm' => 'classes/ui/adminbar',
'm4is_nx5pgw27fjja2gmg2fb3a17cd3dq6' => 'classes/autologin',

'm4is_vazfzbe3bst3rrc5' => 'classes/cpt',
'm4is_azvwve90eh41048xqbzgye9vff' => 'classes/cron',
'm4is_qz5b1djw3zw' => 'classes/diagnostics',

'm4is_an0pxqdph6ax26586c' => 'classes/login',
'm4is_rn5d7867js9nrsh3ej5wrgwj3' => 'classes/maintenance',
'm4is_9xkkn485565d5zj83k854r5t' =>
 'classes/post_sherpa',
'm4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4' => 'classes/posts',
'm4is_zrrt34b1nqxbv' => 'classes/provisioning',
'm4is_55b162xby' =>
 'classes/reset',
'm4is_hjg9rr3hbb9em48cgv8dtvy' => 'classes/sitehealth',
'm4is_v4rapmyrqjxsakynt80fj69rp8' => "classes/link_handler",

'm4is_d1yhzb308y' => 'libraries/debuglog',
'm4is_jmzx5mtr9b067q9yawwzb865' => 'libraries/eval',
'm4is_4s5smeaz895h0' => 'libraries/gdpr',

'm4is_cyt7qan1n' => 'libraries/geolocation',
'm4is_eknm14gbx0wvrnh6' => 'libraries/language',
'm4is_hw3v5fgrycmdyvz2rqb7ec1' => 'libraries/loginlog',

'm4is_0gqs7crsrzdbgfzptjws94s' => 'libraries/network_tools',
'm4is_9d8n6yra072mpxd0pczne9' => 'libraries/pagehandling',
'm4is_8ykqh469' =>
 'libraries/relationships',
'm4is_8cw98mp72zyj4wx2kqhny4bcv90' => 'libraries/rss',
'm4is_25550fsqsnd4pn7txw2vh7x6' => 'libraries/scapi',

'm4is_ng2r3s7ssv4q4m74fys4db49a7es16' => 'libraries/session',
'm4is_m822t8xyvbc' => 'libraries/time',
'm4is_p6537fedxhj0dgtd67cpq7rdpxna' =>
 'libraries/updater',
'm4is_905gs7jtwy8pyf98mfy6n' => 'libraries/wpuser',
'm4is_mh9t97q4p4p87vkr5zxs6k99b' => 'libraries/utilities',

'm4is_s5vhbv6kzrqbaesnfd8w1pvjycp7w' => 'libraries/words',
'm4is_d9frg94j82cjmv6tthcm' => 'modules/discourse/core',
'm4is_z5hswpfz70s0jrga3whe6zy40d' =>
 'modules/facebook/admin',
'm4is_bczvjfmtvxae6' => 'modules/facebook/core',
'm4is_jj39y699yc0xtqc41mxfsqt82c9439' => 'modules/facebook/shortcodes',

'm4is_ckv379vnjr0dx37' => 'modules/buddypress/core',
'm4is_p2r78mkk9tdtwpmc' => 'modules/group-accounts/core',
'm4is_bj0mt04ye7axtp644x64m' =>
 'modules/group-accounts/database',
'm4is_nskfcq9pc3bt348v1z2p22fm' => 'vendor/i2sdkng/i2sdk',
'm4is_w3pp5rsxdc03bns3' => 'classes/crm/actionsets',

'm4is_amz58dmg8j7e898bj8r8b1' => 'classes/crm/affiliate',
'm4is_xm67qjyegqdeb9wqcm' => 'classes/crm/interface',
'm4is_rw8p2dfy073ez' =>
 'classes/crm/contact',
'm4is_kkk64g440mhf2xhxafr' => 'classes/crm/creditcard',
'm4is_q28s00aabb2yd3d' => 'classes/crm/custom_fields',

'm4is_bbwjksaqsay3yt68xq9afn' => 'classes/crm/ecommerce',
'm4is_sgvby6tzxdj27z0k9vsngxtx' => 'classes/crm/filebox',
'm4is_7xvypgwes' =>
 'classes/crm/httpposts',
'm4is_c2ry5jv8yz446k40191' => 'classes/crm/httppost_log',
'm4is_9kyahnxyzzazbe0qnby5s1qsx' => 'classes/crm/owner',

'm4is_j439z8p9rf94j2j2gmvmjwmkkk55t67' => 'classes/crm/social',
'm4is_6xn1pjnrksg2r2y58e54cqsedvtka8' => 'classes/crm/tag_categories',

'm4is_0ddg4zyk7dn8eg0283' => 'classes/crm/tags',

];
spl_autoload_register( [$this, 'm4is_aaptmwz94eps40rebk1knyfn280qpd'] );
}
}

function m4is_srz8z3mthfjnv7k97qswwjyb71kk7ra( string $m4is_53mq3k4adf3m0,
 string $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7) {
$m4is_53mq3k4adf3m0 = strtolower( trim($m4is_53mq3k4adf3m0) );
if (! array_key_exists($m4is_53mq3k4adf3m0,
 $this->m4is_drfzqdp3) ) {
$this->m4is_drfzqdp3[$m4is_53mq3k4adf3m0] = $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7;
}
}

function m4is_30j08k6rn5y4pz4w( array $m4is_drfzqdp3 ) {
$this->m4is_drfzqdp3 = array_merge( $this->m4is_drfzqdp3,
 $m4is_drfzqdp3 );
}

function m4is_aaptmwz94eps40rebk1knyfn280qpd( string $m4is_53mq3k4adf3m0 ) {
static $m4is_4ecpv9dz12f2hzqks4z0jhtvtnaw;

$m4is_53mq3k4adf3m0 = strtolower( $m4is_53mq3k4adf3m0 );
$m4is_4ecpv9dz12f2hzqks4z0jhtvtnaw ??= $this->m4is_hscsx4pb3zt();
if ( $m4is_53mq3k4adf3m0 == 'm4is_a6kbph84cyre1t461' ) {
require_once $this->m4is_mmxzwhgx1c7by42ghcwq17( 'i2sdkng/i2sdk.php' );

}
else {
if ( array_key_exists( $m4is_53mq3k4adf3m0, $this->m4is_drfzqdp3 ) ) {
$m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = substr( $this->m4is_drfzqdp3[$m4is_53mq3k4adf3m0],
 0, 1 ) == '/' ? $this->m4is_drfzqdp3[$m4is_53mq3k4adf3m0] . '.php' : $m4is_4ecpv9dz12f2hzqks4z0jhtvtnaw . $this->m4is_drfzqdp3[$m4is_53mq3k4adf3m0] . '.php';

if ( file_exists( $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 ) ) {
include $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1;
if ( method_exists( $m4is_53mq3k4adf3m0,
 'm4is_6q0wmftmrk5xnqk2ah3wk3ekap64' ) ) {
$m4is_53mq3k4adf3m0::m4is_6q0wmftmrk5xnqk2ah3wk3ekap64();
}
}
}
}
}




private function m4is_3ywqt3nwxqnwv8rtfrze077mf() : array {
return [
'affiliate_detect' =>
 0,
'allow_autologin' => 0,
'allow_local_logins' => 1,
'allow_wpadmin_dashboard' => 'edit_others_posts',
'allow_wpadmin_titlebar' =>
 'edit_others_posts',
'allow_wpadmin' => 1,
'api_log_duration' => 3,
'async_limit' => 0,
'async_tags' => 0,
'attachment_pages' => 1,

'autogenerate_excerpts' => 0,
'autologout_time' => 0,
'autoupdate' => 1,
'beta_update_check' => 0,
'beta/oauth' => 0,
'bruteforce_check' =>
 0,
'cache_bust' => 0,
'cache_flush' => 0,
'choose_affiliate' => 1,
'db_sessions' => 1,
'default_logout_page' => 0,
'default_page_redirect' =>
 '',
'default_prohibited_action' => 'redirect',
'default_reglink_tag' => 0,
'disable_displayname_update' => 0,
'disable_login_sync' =>
 0,
'disable_lost_password' => 0,
'disable_password_reset' => 0,
'disable_xframe' => 0,
'display_errors' => 0,
'displayname_format' =>
 '',
'dynamic_menus' => 0,
'enable_slug_update' => 0,
'excerpt_length' => 55,
'extended_reg_fields' => 0,
'facebook_app_id' => '',
'fast_user_list' =>
 0,

'force_learndash_inheritance' => defined('LEARNDASH_VERSION') ? 1 : 0,
'global_excerpt' => '',
'hashing_mode' => 'plain',
'html_shortcode_embed' =>
 1,
'httppost_log' => 1,
'ignore_affiliate_fields' => '',
'ignore_contact_fields' => 'ContactNotes',
'ignore_tag_categories' => '',

'include_default_excerpt' => '',
'known_logins_only' => 0,
'last_login_field' => '',
'license_key' => '',
'local_auth_only' => 0,
'login_actionset' =>
 0,
'login_log_length' => 30,
'login_log' => 1,
'login_tag' => 0,
'login_url' => 0,
'logout_actionset' => 0,
'logout_tag' => 0,
'makepass_scan_size' =>
 0,
'makepass_scan_tag' => 0,
'makepass_success_actionset' => 0,
'makepass_success_tag' => 0,
'max_affiliate_age' => 0,
'max_contact_age' =>
 0,
'maximum_login_ips' => 0,
'maximum_login_timeframe' => 0,
'memberium_user_registration_tag' => 0,
'merchant_account_id' => 0,
'microcache_compat_session' =>
 0,
'min_password_length' => 8,
'multi_language' => 0,
'new_user_registration_tag' => 0,
'page_inheritance' => 1,
'password_field' =>
 'Password',
'password_reset_tag' => 0,
'password_strength' => 0,
'persistent_login' => 0,
'plaintext_db' => 0,
'plaintext_db' => 0,

'preview_mode' => 0,
'protect_feeds' => 1,
'referral_partner_order' => 1, 
'registration_url' => 0,
'require_membership' => 0,
'session_timeout' =>
 0,
'show_advanced_options' => 0,
'show_post_columns' => 0,
'simultaneous_logins' => 0,
'site_ban_tag' => 0,
'site_lock_enabled' =>
 0,
'spiffy_api_key' => '',
'spiffy_subdomain' => '',
'sync_affiliate' => 0,
'sync_ecommerce' => 0,
'sync_meta_updates' => 0,
'sync_new_wp_users' =>
 0,
'sync_users' => 0,
'telemetry' => 1,
'thrivecart_secret' => '',
'two_pass_shortcode_filter' => 0,
'user_registration_tag' => 0,

'username_field' => 'Email',
'version' => $this->m4is_5kywzj74m8ht8s0(),
'wp_autop' => 0,
'wplogin_redirect_to' => 0,
];
}

private function m4is_cfrbn8qdbtbbtyjk8wzqfh() : array {
$this->m4is_ra7dnjjzebn9h3t6k7a2p36 = get_option( 'memberium',
 [] );
$m4is_ra7dnjjzebn9h3t6k7a2p36 = is_array( $this->m4is_ra7dnjjzebn9h3t6k7a2p36 ) ? $this->m4is_ra7dnjjzebn9h3t6k7a2p36 : [];
$m4is_n9j5qc67hjkzda9jpy25zbm40qth89w = empty( $this->m4is_ra7dnjjzebn9h3t6k7a2p36 );

$m4is_n7x0afpz = $this->m4is_3ywqt3nwxqnwv8rtfrze077mf();
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_ra7dnjjzebn9h3t6k7a2p36['settings'];

$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = wp_parse_args( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy, $m4is_n7x0afpz );
$this->m4is_ra7dnjjzebn9h3t6k7a2p36['settings'] = $m4is_8ew58cpxmftgpw93gdffm4s9bbwy;

return $this->m4is_ra7dnjjzebn9h3t6k7a2p36;
}

private function m4is_0z3ptaerm49d36sfhd0c4() {
$i2sdk_options = m4is_a6kbph84cyre1t461::get_i2sdk_options();

$m4is_36kaghjb = $this->m4is_sz0a0b9kd2wt3kf4z1cwj038j();
$m4is_wsme5a297xh0v6d5y = $this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();


$this->m4is_febrbabyxdqjt63z['appname'] = method_exists( $m4is_wsme5a297xh0v6d5y, 'getAppName' ) ? $m4is_wsme5a297xh0v6d5y->getAppName() : $i2sdk_options['app_name'];

$this->m4is_febrbabyxdqjt63z['verified'] = method_exists( $m4is_36kaghjb, 'isVerified' ) ? $m4is_36kaghjb->isVerified() : false;
$this->m4is_febrbabyxdqjt63z['api_key'] = isset( $i2sdk_options['api_key'] ) ? $i2sdk_options['api_key'] : '';

}

public function m4is_8632mafxf( $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_rjmk9nzcsr0, $m4is_jm3x4nend6zh98f6 ) {
return max( $m4is_rjmk9nzcsr0,
 min( $m4is_jm3x4nend6zh98f6, $m4is_rqxytszfq5v6syth1csqqxvy5 ) );
}



function m4is_c7vzza0dseqrv8k98vz4() {
static $m4is_dd1rc28c4agxp5yzdzqh5ykcehf = 0;

if ( $m4is_dd1rc28c4agxp5yzdzqh5ykcehf++ ) {
return;
}
require_once $this->m4is_9re350tyss( 'memberium_api.php' );
require_once $this->m4is_9re350tyss( 'functions.php' );

$this->m4is_2py0y2ptaxw();
$this->m4is_0z3ptaerm49d36sfhd0c4();
$this->m4is_eznq7njeh();
$this->m4is_36kaghjb = m4is_nskfcq9pc3bt348v1z2p22fm::get_i2sdk();

$this->m4is_wsme5a297xh0v6d5y = $this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();
$this->m4is_b9xk29a6 = m4is_zrrt34b1nqxbv::m4is_6avty6j42cedxh718s2q();

m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv(); 
$this->m4is_kbasnpa215ana6jv875pb1061pymkb();
$this->m4is_r8emp2zcmhv1twqx3qx8mv();

$this->m4is_5eragr7sh2yyj356m();
$this->m4is_v8r2tfqd();
}
function m4is_83fjtt3v3j59efb106abk8() {

if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;

}
$this->m4is_6h614x8q134asjz3();
$this->m4is_1n22ag6xc7zw3007nchn5dwpw6k5();
$this->m4is_weehyhpm8emcq7746peng7();
$this->m4is_1wpnafky4n8n1();


}

private function m4is_2py0y2ptaxw() : void {
if ( ! defined( 'I2SDK_HOME' )) {
require_once $this->m4is_hscsx4pb3zt() . 'vendor/i2sdkng/i2sdk.php';

}
}



public function m4is_ntqtf6bzbshxjenctjt4zp1() : string {
return $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858;
}

public function m4is_jgm59d1dwzr8krc7dbz3xetczkh81() : bool {
static $m4is_6n4xfsrcre7;

if ( is_null( $m4is_6n4xfsrcre7 ) ) {
$m4is_6n4xfsrcre7 = is_admin();
}
return $m4is_6n4xfsrcre7;
}
public function m4is_6avty6j42cedxh718s2q() : string {
return (string) $this->m4is_b9xk29a6;

}
public function m4is_8q8jhpzvpqzpbsbwarb30a4() : bool {
static $m4is_3m2a67srs996aq36fhje6c0x6xa;
if ( is_null( $m4is_3m2a67srs996aq36fhje6c0x6xa ) ) {
$m4is_51kmbhfc = function_exists( 'rest_get_url_prefix' ) ? rest_get_url_prefix() : 'wp-json';

$m4is_3m2a67srs996aq36fhje6c0x6xa = ( strpos( $_SERVER['REQUEST_URI'], '/' . $m4is_51kmbhfc . '/' ) !== false );
}
return (bool) $m4is_3m2a67srs996aq36fhje6c0x6xa;

}

public function m4is_8wk99jvy3awxmwjsc6jdnj() {
$m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta = get_option( self::SYSTEM_CONFIG_TIMESTAMP_KEY,
 0 );
return $m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta;
}

public function m4is_r4c836v754() : float {
$m4is_ekyj9n5rb0 = microtime( true );

$m4is_j01z4tex3staqq9 = get_option( self::SYSTEM_CONFIG_TIMESTAMP_KEY, -1 );
if ( $m4is_j01z4tex3staqq9 !== $m4is_ekyj9n5rb0 ) {
update_option( self::SYSTEM_CONFIG_TIMESTAMP_KEY,
 $m4is_ekyj9n5rb0, true );
}
return $m4is_ekyj9n5rb0;
}

function m4is_gbhb1ccq1jfbkkj5() : int {
return (int) constant( 'MEMBERIUM_NESTING_LEVELS' );

}

function m4is_pdgd084n380vnszr3r ( string $m4is_j8j55t8dz79m7 ) {
if ( empty( $this->m4is_febrbabyxdqjt63z ) ) {
$this->m4is_0z3ptaerm49d36sfhd0c4();

}


return isset( $this->m4is_febrbabyxdqjt63z[$m4is_j8j55t8dz79m7] ) ? $this->m4is_febrbabyxdqjt63z[$m4is_j8j55t8dz79m7] : FALSE;

}

function m4is_ge8c1j4jpqycwekt ( string $m4is_j8j55t8dz79m7, string $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$this->m4is_febrbabyxdqjt63z[$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}

function m4is_p1jtv0swdkhk5vzv1qcmvh( $m4is_ra7dnjjzebn9h3t6k7a2p36 = false ) {
if ( is_array( $m4is_ra7dnjjzebn9h3t6k7a2p36 ) ) {
$this->m4is_ra7dnjjzebn9h3t6k7a2p36 = $m4is_ra7dnjjzebn9h3t6k7a2p36;

}
update_option( 'memberium', $this->m4is_ra7dnjjzebn9h3t6k7a2p36, TRUE );
$this->m4is_r4c836v754();
}

function m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( string $m4is_e8h8dhk83hxkj818w = '',
 string $m4is_j8j55t8dz79m7 = '', string $m4is_syqymyz40rx4xgtqp8475ffwzw = '' ) {

if (empty($this->m4is_ra7dnjjzebn9h3t6k7a2p36)) {
$this->m4is_ra7dnjjzebn9h3t6k7a2p36 = $this->m4is_cfrbn8qdbtbbtyjk8wzqfh();

}

$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_syqymyz40rx4xgtqp8475ffwzw;

if (!empty($m4is_e8h8dhk83hxkj818w)) {

if (!empty($m4is_j8j55t8dz79m7)) {

if (isset($this->m4is_ra7dnjjzebn9h3t6k7a2p36[$m4is_e8h8dhk83hxkj818w][$m4is_j8j55t8dz79m7])) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = $this->m4is_ra7dnjjzebn9h3t6k7a2p36[$m4is_e8h8dhk83hxkj818w][$m4is_j8j55t8dz79m7];

}
} else {

if (isset($this->m4is_ra7dnjjzebn9h3t6k7a2p36[$m4is_e8h8dhk83hxkj818w])) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = $this->m4is_ra7dnjjzebn9h3t6k7a2p36[$m4is_e8h8dhk83hxkj818w];

} else {

$m4is_rqxytszfq5v6syth1csqqxvy5 = [];
}
}
} else {

$m4is_rqxytszfq5v6syth1csqqxvy5 = $this->m4is_ra7dnjjzebn9h3t6k7a2p36;

}
return $m4is_rqxytszfq5v6syth1csqqxvy5;
}

function m4is_ke3nwk5g93jygt8wwcej( $m4is_rqxytszfq5v6syth1csqqxvy5 = '', string $m4is_e8h8dhk83hxkj818w = '',
 string $m4is_j8j55t8dz79m7 = '' ) {

if (empty($m4is_e8h8dhk83hxkj818w) && empty($m4is_j8j55t8dz79m7)) {
$this->m4is_ra7dnjjzebn9h3t6k7a2p36 = $m4is_rqxytszfq5v6syth1csqqxvy5;

}

elseif (!empty($m4is_e8h8dhk83hxkj818w) && empty($m4is_j8j55t8dz79m7)) {
$this->m4is_ra7dnjjzebn9h3t6k7a2p36[$m4is_e8h8dhk83hxkj818w] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}

elseif (!empty($m4is_e8h8dhk83hxkj818w) && !empty($m4is_j8j55t8dz79m7)) {
$this->m4is_ra7dnjjzebn9h3t6k7a2p36[$m4is_e8h8dhk83hxkj818w][$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}

$this->m4is_p1jtv0swdkhk5vzv1qcmvh();
}

function m4is_y62rh9h80sg34je11vxmmn08b0( string $m4is_j8j55t8dz79m7, $m4is_rqxytszfq5v6syth1csqqxvy5 = '' ) {

$m4is_j8j55t8dz79m7 = strtolower( trim($m4is_j8j55t8dz79m7) );


$m4is_rqxytszfq5v6syth1csqqxvy5 = trim($m4is_rqxytszfq5v6syth1csqqxvy5);



$this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
function m4is_dmfr81331w27fa3bzjyvhkbh5a(string $m4is_j8j55t8dz79m7, $m4is_syqymyz40rx4xgtqp8475ffwzw = false) {
$m4is_j8j55t8dz79m7 = strtolower( trim($m4is_j8j55t8dz79m7) );

return isset( $this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7] ) ? $this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7] : $m4is_syqymyz40rx4xgtqp8475ffwzw;

}
function m4is_btsv4m9hpgk2r125902(string $m4is_j8j55t8dz79m7 = '', $m4is_0pt8sp6j5n0s85m = 1) {
$this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7] = isset($this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7]) ? $this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7] : 0;

$this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7] = $this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7] + $m4is_0pt8sp6j5n0s85m;
return $this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7];

}
function m4is_2v4jks0gdrh03e0t5zm9wn12ssqftb(string $m4is_j8j55t8dz79m7 = '', $m4is_0pt8sp6j5n0s85m = 1) {
$this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7] = isset($this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7]) ? $this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7] : 0;

$this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7] = $this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7] - $m4is_0pt8sp6j5n0s85m;
return $this->m4is_xnr85v7h4qmw[$m4is_j8j55t8dz79m7];

}




function m4is_83ts560f8e120bjpv801() {
return;
$m4is_hybtydg4zdv9ezjkq398btnjs2tqpk = [
];
foreach( $m4is_hybtydg4zdv9ezjkq398btnjs2tqpk as $m4is_02aqfry7az3jeqc2g29bfxb ) {
$m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 = $this->m4is_hscsx4pb3zt() . "vendor/{$m4is_02aqfry7az3jeqc2g29bfxb}/init.php";

if ( file_exists( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 ) ) {
include_once $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7;
}
}
}

public function m4is_gdpdbddrxsa0f7pzhtjqv3hsjgs4ge() {
$m4is_hybtydg4zdv9ezjkq398btnjs2tqpk = $this->m4is_nqgq39gevb5zc5g();

$m4is_jhvqyp7500 = get_option( 'memberium_extensions', [] );
$m4is_0ppjv7mb8gp = (array) $this->m4is_gq31rg2azs88w0mnwywq847();
foreach( $m4is_hybtydg4zdv9ezjkq398btnjs2tqpk as $m4is_02aqfry7az3jeqc2g29bfxb =>
 $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 ) {
if ( ! empty( $m4is_jhvqyp7500[$m4is_02aqfry7az3jeqc2g29bfxb] ) ) {
if ( array_key_exists( $m4is_02aqfry7az3jeqc2g29bfxb,
 $m4is_0ppjv7mb8gp ) ) {
include_once $this->m4is_hscsx4pb3zt() . 'vendor/' . $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1;
}
else{
include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 );

}
}
}
}

public function m4is_gq31rg2azs88w0mnwywq847() : array {
return [

];
}

function m4is_nqgq39gevb5zc5g() {
$m4is_hybtydg4zdv9ezjkq398btnjs2tqpk = [
'affiliate-leaderboards' =>
 'affiliate-leaderboards/init.php',
'facebook' => 'facebook/init.php',
'pathprotect' => 'pathprotect/init.php',
'spiffy' => 'spiffy/core.php',

];
return $m4is_hybtydg4zdv9ezjkq398btnjs2tqpk;
}




private function m4is_hwv4erb7v1e4q9axzce() : void {


$this->m4is_rx31tk59n09j0p7znf551gc5qd044k = [
'i18n/contact_memberium' =>
 'Please contact Memberium Support for assistance.',
'i18n/error' => 'Error',
'i18n/forbidden' => 'Forbidden',
'i18n/login_failed' =>
 'Login Failed',
'i18n/maximum_logins_exceeded' => 'Maximum Logins Exceeded',
];
}

function m4is_fmfs45danc( array $m4is_mhhdcg33naq ) {
$this->m4is_rx31tk59n09j0p7znf551gc5qd044k = array_merge( $this->m4is_rx31tk59n09j0p7znf551gc5qd044k,
 $m4is_mhhdcg33naq );
}

function m4is_fv5jycjd9tg1tsskv( string $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, string $m4is_0k1mrqgxx6bb = 'memberium' ) {
$m4is_gb01jqxh9ek2m = empty( $this->m4is_rx31tk59n09j0p7znf551gc5qd044k[$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0] ) ? '' : _x( $this->m4is_rx31tk59n09j0p7znf551gc5qd044k[$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0],
 $m4is_0k1mrqgxx6bb, 'memberium' );
$m4is_gb01jqxh9ek2m = apply_filters( 'memberium/i18n/translation', $m4is_gb01jqxh9ek2m, $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 );

return empty( $this->m4is_rx31tk59n09j0p7znf551gc5qd044k[$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0] ) ? '' : _x( $this->m4is_rx31tk59n09j0p7znf551gc5qd044k[$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0],
 $m4is_0k1mrqgxx6bb, 'memberium' );
}

function m4is_jz9ygsb79rajnhabv9( bool $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$this->m4is_8wwdvwcfjb06q2dzhzsnadfkrrzk = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
function m4is_7tjb4yq96fdpbh02g3pc23() : bool {
return $this->m4is_8wwdvwcfjb06q2dzhzsnadfkrrzk;
}




function m4is_6ajfaq6y206kje0pv8h7yg987kwk() : array {

$m4is_zpbgfgfkqf2c4ast12shxs8gthy = get_post_types(['public' =>
 false]);

$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j = [

'attachment',

'elementor_library',

'et_pb_layout',

'llms_engagement',
'llms_membership',

'llms_question',
'nomination',
'shop_coupon',
'shop_order',
'shop_subscription',
'submission',

'fl-builder-template',
];

if (is_array($m4is_zpbgfgfkqf2c4ast12shxs8gthy)) {

foreach($m4is_zpbgfgfkqf2c4ast12shxs8gthy as $m4is_yhdk2h7srcr7n5mzjnw7m6b) {

if (! in_array($m4is_yhdk2h7srcr7n5mzjnw7m6b,
 ['memb_shortcodeblocks', 'partials'])) {
$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = $m4is_yhdk2h7srcr7n5mzjnw7m6b;
}
}
}

unset($m4is_zpbgfgfkqf2c4ast12shxs8gthy,
 $m4is_yhdk2h7srcr7n5mzjnw7m6b);

$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j = apply_filters('memberium/posts/unenhanced', $m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j);


return $m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j;
}




function m4is_z0jvy584gjavgkpkp2nhzkftg67( $m4is_h2r9w4w8gvyk8qat0j5zjzjg4a ) {

if ( defined( 'WPAL_DISABLE_SSL_VERIFY' ) && constant( 'WPAL_DISABLE_SSL_VERIFY' ) == true) {

curl_setopt( $m4is_h2r9w4w8gvyk8qat0j5zjzjg4a,
 CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt( $m4is_h2r9w4w8gvyk8qat0j5zjzjg4a, CURLOPT_SSL_VERIFYPEER, false );
}

return $m4is_h2r9w4w8gvyk8qat0j5zjzjg4a;

}

function m4is_ab2q3vpcw1tpj02gb($m4is_0yk7wra2nq261, $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq) {

if ( $m4is_0yk7wra2nq261['sslverify'] == true ) {
if ( defined( 'WPAL_DISABLE_SSL_VERIFY' ) && constant( 'WPAL_DISABLE_SSL_VERIFY' ) == true ) {
$m4is_0yk7wra2nq261['sslverify'] = false;

}
}

return $m4is_0yk7wra2nq261;
}

function m4is_sz0a0b9kd2wt3kf4z1cwj038j() {
return $this->m4is_36kaghjb ??= m4is_nskfcq9pc3bt348v1z2p22fm::get_i2sdk();

}

function m4is_88v87aaprrq6m96d606cn1tvb5x180e4() {
return $this->m4is_wsme5a297xh0v6d5y ??= $this->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->isdk;

}
public function m4is_7chmqqcbkgf4jft8p56sbp6ss() {
return $this->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->m4is_dzjdf8h0p8gzs37xpyhh4krbgavss4();

}

function get_i2sdk_options() {

if ( method_exists( 'm4is_a6kbph84cyre1t461', 'get_i2sdk_options' ) ) {

return m4is_a6kbph84cyre1t461::get_i2sdk_options();

}

$m4is_kv6vmc7d95nf01bky4gd87 = get_option( 'i2sdk' );

if (! $m4is_kv6vmc7d95nf01bky4gd87) {
$m4is_kv6vmc7d95nf01bky4gd87 = [];

}

$m4is_n7x0afpz = [
'access_token' => '',
'api_key' => '',
'api_log' => 0,
'app_name' => '',
'db_prefix' => '',
'debug_mode' => '',

'delete_on_uninstall' => 0,
'email_notification' => 0,
'error_email' => '',
'error_log' => 0,
'http_post_key' => '',
'infusionsoft_analytics' =>
 0,
'oauth_enabled' => 0,
'retry_count' => 3,
'server_verified' => 0,
'tracking_code' => '',
'version' => I2SDK_VERSION,
];


$m4is_kv6vmc7d95nf01bky4gd87 = wp_parse_args( $m4is_kv6vmc7d95nf01bky4gd87,
 $m4is_n7x0afpz );

return $m4is_kv6vmc7d95nf01bky4gd87;
}



function m4is_zmnf5zyrzth5bkm() {


}

function m4is_gamag3ztwj8q( array $m4is_zpbgfgfkqf2c4ast12shxs8gthy ) : array {
$m4is_zpbgfgfkqf2c4ast12shxs8gthy[] = 'memb_shortcodeblocks';

$m4is_zpbgfgfkqf2c4ast12shxs8gthy[] = 'partials';
return $m4is_zpbgfgfkqf2c4ast12shxs8gthy;
}






public function m4is_hscsx4pb3zt() {
return $this->m4is_4ecpv9dz12f2hzqks4z0jhtvtnaw;

}

public function m4is_54b9bwwsx7sym( string $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = '' ) : string {
return $this->m4is_hscsx4pb3zt() . 'classes/' . $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1;

}

public function m4is_t0brxwak7n05mx6anqhyrgmr( string $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = '' ) : string {
return $this->m4is_hscsx4pb3zt() . 'modules/' . $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1;

}

public function m4is_8hkhd903a3hcdnqhfwpzqby( string $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = '' ) : string {
return $this->m4is_hscsx4pb3zt() . 'screens/' . $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1;

}

private function m4is_q0hywxmxykr59sw385e9() : string {
return $this->m4is_zy8a70vtfm18z95pk;
}

private function m4is_9re350tyss( string $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = '' ) : string {
return $this->m4is_hscsx4pb3zt() . 'includes/' . $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1;

}

private function m4is_mmxzwhgx1c7by42ghcwq17( string $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = '' ) : string {
return $this->m4is_hscsx4pb3zt() . 'vendor/' . $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1;

}






public function m4is_jt5p2fz12957jwff9sr4zdt4bh() : string {
return ini_get( 'memory_limit' );
}

public function m4is_tfgcn7v2rx4cy4() : string {
static $m4is_h5a91hgfm2n9at2dn89fsmepnva = '';

if ( empty( $m4is_h5a91hgfm2n9at2dn89fsmepnva ) ) {
include ABSPATH . WPINC . '/version.php';
$m4is_h5a91hgfm2n9at2dn89fsmepnva = $wp_version;

}
return $m4is_h5a91hgfm2n9at2dn89fsmepnva;
}

public function m4is_4qm9vj9s4y5jnr() : string {
return function_exists( 'wp_get_environment_type' ) ? wp_get_environment_type() : 'production';

}
public function m4is_mdj300zr1jk5av2y9cp( ?int $m4is_wk4dh1rnd3wmwvsggq51nhn87 = null ) : bool {
static $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s = [];

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ? $this->m4is_vd3qpw0vkdm() : $m4is_wk4dh1rnd3wmwvsggq51nhn87;

if ( array_key_exists( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s ) ) {
return (bool) $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_wk4dh1rnd3wmwvsggq51nhn87];

}
$m4is_hartbe843crydzh = false;
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ? wp_get_current_user() : get_user_by( 'ID',
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
if ( is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_User' ) ) {
$m4is_mta1y5w3r = [
'manage_options',

'activate_plugins',
'update_plugins',
];
foreach($m4is_mta1y5w3r as $m4is_26dawvnp71g3k01a46k) {
$m4is_hartbe843crydzh = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->has_cap($m4is_26dawvnp71g3k01a46k);

if ( $m4is_hartbe843crydzh ) {
break;
}
}
}
$m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_wk4dh1rnd3wmwvsggq51nhn87] = $m4is_hartbe843crydzh;

return $m4is_hartbe843crydzh;
}

public function m4is_8awbs9rpays1( int $m4is_tz1rt7sbq40fade6e6rx, string $m4is_syqymyz40rx4xgtqp8475ffwzw = null ) : array {
static $m4is_19x1c17et728k945 = [
'_is4wp_access_tags',

'_is4wp_access_tags2',
'_is4wp_anonymous_only',
'_is4wp_any_loggedin_user',
'_is4wp_any_membership',
'_is4wp_contact_ids',
'_is4wp_facebook_crawler',

'_is4wp_force_public',
'_is4wp_google_1stclick',
'_is4wp_membership_levels',
];
$m4is_kgdwxx4f = 'memberium/posts';
$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = "meta/access/{$m4is_tz1rt7sbq40fade6e6rx}";

$m4is_yqbs57707b9pgq = HOUR_IN_SECONDS;
$m4is_hartbe843crydzh = wp_cache_get( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_kgdwxx4f,
 false, $m4is_6p2tyvq6paj43svrn7zqaykxzy );
if ( ! $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
global $wpdb;
$m4is_9r0jb5jm5ewencrnh02mc9y2 = "'" . implode("','",
 $m4is_19x1c17et728k945) . "'";
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `meta_key`, `meta_value` FROM {$wpdb->postmeta} WHERE `post_id` = {$m4is_tz1rt7sbq40fade6e6rx} AND `meta_key` IN ( {$m4is_9r0jb5jm5ewencrnh02mc9y2} )";

$m4is_tbdh9qb6r6z = (array) $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A);
$m4is_hartbe843crydzh = [];
foreach ($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
$m4is_hartbe843crydzh[$m4is_bamv772v['meta_key']] = $m4is_bamv772v['meta_value'];

}
wp_cache_set( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_hartbe843crydzh, $m4is_kgdwxx4f, $m4is_yqbs57707b9pgq );
}
if (! is_null($m4is_syqymyz40rx4xgtqp8475ffwzw) ) {
foreach($m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7) {
if (! isset($m4is_hartbe843crydzh[$m4is_j8j55t8dz79m7])) {
$m4is_hartbe843crydzh[$m4is_j8j55t8dz79m7] = $m4is_syqymyz40rx4xgtqp8475ffwzw;

}
}
}
return $m4is_hartbe843crydzh;
}



function m4is_81702g6yb6f8hd3p9bk() {
static $m4is_t9svq56t4ysv1rsgy1g61g = false;
if ( include_once ABSPATH . '/wp-admin/includes/plugin.php' ) {
$m4is_t9svq56t4ysv1rsgy1g61g = trim(get_plugin_data(MEMBERIUM_HOME,
 false, false)['Version']);
if ($m4is_t9svq56t4ysv1rsgy1g61g) {
$this->m4is_ke3nwk5g93jygt8wwcej($m4is_t9svq56t4ysv1rsgy1g61g, 'settings',
 'version');
}
}
return $m4is_t9svq56t4ysv1rsgy1g61g;
}
function m4is_5kywzj74m8ht8s0() : string {
static $m4is_t9svq56t4ysv1rsgy1g61g = false;

if (! $m4is_t9svq56t4ysv1rsgy1g61g) {
require_once ABSPATH . '/wp-admin/includes/plugin.php';
$m4is_t9svq56t4ysv1rsgy1g61g = trim(get_plugin_data(MEMBERIUM_HOME,
 false, false)['Version']);
}
if (! $m4is_t9svq56t4ysv1rsgy1g61g) {
$m4is_t9svq56t4ysv1rsgy1g61g = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'version', false);
}
return $m4is_t9svq56t4ysv1rsgy1g61g;
}
function m4is_bryfhmxgee45drazs67enzk92pw8f2kn() : bool {
return (bool) $this->m4is_w085ynew9ks6whzhnw6rbk51ds140;

}
function m4is_z3a9w5p26hzy494qq03phpeagexts(bool $m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp) {
$this->m4is_w085ynew9ks6whzhnw6rbk51ds140 = $m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp;

}
function m4is_bw82cy1jxnmkhtbvkezjv4y3ntky(bool $m4is_t3phhn82n7jkhgtvas = true) {
$this->m4is_t3phhn82n7jkhgtvas = (boolean) $m4is_t3phhn82n7jkhgtvas;

}
function m4is_ny2mdztd21t37jnyrad5980cps88jd() : bool {
return (bool) $this->m4is_t3phhn82n7jkhgtvas;
}




function m4is_z2h29esmegb8q4n1dxcfr8( string $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq,
 string $m4is_tfecza742dzhrkkbv781dnbvf40m6, bool $m4is_q35kx1zfw4 ) : string {
$m4is_3mp0nd4jv65b708ytkc3 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'login_url' );
if ( $m4is_3mp0nd4jv65b708ytkc3 < 1 ) {
if ( ! empty( $m4is_tfecza742dzhrkkbv781dnbvf40m6 ) ) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = add_query_arg( 'redirect_to',
 $m4is_tfecza742dzhrkkbv781dnbvf40m6, $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq );
}
}
else {
$m4is_j570qhgpdxb7wh0vzp746k6 = get_permalink( $m4is_3mp0nd4jv65b708ytkc3 );

if ( ! empty( $m4is_j570qhgpdxb7wh0vzp746k6 ) ) {
if ( ! empty( $m4is_tfecza742dzhrkkbv781dnbvf40m6 ) ) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = add_query_arg( 'redirect_to',
 $m4is_tfecza742dzhrkkbv781dnbvf40m6, $m4is_j570qhgpdxb7wh0vzp746k6 );
}
}
}
return $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq;
}




function m4is_4827djze5n4wgp3gq5v( array $m4is_xnb14phvj5w = [] ) : array {
$m4is_xatf325r0rdht2p0z5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact',
 true );
$m4is_xnb14phvj5w['first_name'] = 'FirstName';
$m4is_xnb14phvj5w['last_name'] = 'LastName';
foreach( $m4is_xatf325r0rdht2p0z5 as $m4is_jrbbv650tt4nt9f6fz ) {
$m4is_m8tpd1x1wr2av4et3r6p46yd = 'memb_' . $m4is_jrbbv650tt4nt9f6fz;

$m4is_xnb14phvj5w[$m4is_m8tpd1x1wr2av4et3r6p46yd] = $m4is_jrbbv650tt4nt9f6fz;
}
return $m4is_xnb14phvj5w;
}

public function m4is_3e1atmr0jgshjcn5b4( $m4is_4fzx2g2j7ss6px8kf,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_3ey0a4er2, $m4is_r07bbq1vrfssxzw491ey1y7rm, $m4is_fyyf8j21py8w18amyqsmxdr7m7z4rne5 ) {
global $wpdb;

static $m4is_zq0syz3x08z;

if ( $m4is_r07bbq1vrfssxzw491ey1y7rm == $m4is_fyyf8j21py8w18amyqsmxdr7m7z4rne5 ) {
return $m4is_4fzx2g2j7ss6px8kf;

}
if ( $this->m4is_7tjb4yq96fdpbh02g3pc23() || $this->m4is_bryfhmxgee45drazs67enzk92pw8f2kn() ) {
return $m4is_4fzx2g2j7ss6px8kf;
}
$m4is_zq0syz3x08z ??= $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'sync_meta_updates', 0 );
if ( ! $m4is_zq0syz3x08z && ! in_array( $m4is_3ey0a4er2, ['first_name', 'last_name'] ) ) {
return $m4is_4fzx2g2j7ss6px8kf;

}

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return $m4is_4fzx2g2j7ss6px8kf;
}
$m4is_vny8yng1eqycrgtgc1 = empty( $m4is_vny8yng1eqycrgtgc1 ) ? apply_filters( 'memberium/usermeta/crm_field_maps',
 [] ) : $m4is_vny8yng1eqycrgtgc1;

if ( ! isset( $m4is_vny8yng1eqycrgtgc1[$m4is_3ey0a4er2] ) ) {
return $m4is_4fzx2g2j7ss6px8kf;
}
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_vny8yng1eqycrgtgc1[$m4is_3ey0a4er2];

$this->m4is_8sqkcc4ebfed07z6qzkv9edmnxzjh( $m4is_vny8yng1eqycrgtgc1[$m4is_3ey0a4er2], $m4is_r07bbq1vrfssxzw491ey1y7rm, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

return $m4is_4fzx2g2j7ss6px8kf; 
}



function m4is_hvqe5ss13q6($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, $m4is_0pvw1nn4s9phbzmkvf6fre7wxd93zzen = '') {
if ( $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'local_auth_only') ) {
return;
}
if (empty($m4is_0pvw1nn4s9phbzmkvf6fre7wxd93zzen) ) {
$m4is_0pvw1nn4s9phbzmkvf6fre7wxd93zzen = (isset($_POST['password_1']) && isset($_POST['password_2']) ) ? $_POST['password_1'] : '';

}

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $this->m4is_06a6ggsb0zg8pv1t4852qe($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email);

if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0) {

$m4is_wte2qk9hdk1zj7 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'password_field');

$m4is_cyg7rcfhzagmm5v = [
$m4is_wte2qk9hdk1zj7 => $m4is_0pvw1nn4s9phbzmkvf6fre7wxd93zzen
];
m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_cyg7rcfhzagmm5v, true); 
}
}
function m4is_730q2jkq66wp5may42a351zez9() {
if (! is_user_logged_in() ) {
$this->m4is_m9bcx7dqv78();

}
if (m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
$this->m4is_f11mgryd9b55();
add_post_type_support('sfwd-courses', 'excerpt');

add_post_type_support('sfwd-lessons', 'excerpt');
add_post_type_support('sfwd-topic', 'excerpt');
}
}



private function m4is_5knb13yxhwt52t2z5zjq1csf8z45() {
if ( defined( 'ET_BUILDER_PLUGIN_VERSION' ) ) {
return true;

}
$m4is_8msjtr5p = wp_get_theme();
$m4is_5qr45zdkesq5nq = $m4is_8msjtr5p->parent();
$m4is_hce1y1a4qd65zhnwsj = $m4is_5qr45zdkesq5nq instanceof WP_Theme
? $m4is_5qr45zdkesq5nq->get( 'Name' )
: $m4is_8msjtr5p->get( 'Name' );

return stripos( (string) $m4is_hce1y1a4qd65zhnwsj, 'Divi' ) !== false;
}
function m4is_j35cdjd1xnhbk34ba() {

}

private function m4is_weehyhpm8emcq7746peng7() : void {
$m4is_92v9avz3mamnbsh6sr5hyz303rst = m4is_zrrt34b1nqxbv::m4is_yb1kyacqc84h1zq0m17py( [ 'unlimited',
 'icc' ] );
if ( class_exists( 'FLBuilder' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'beaver-builder/core.php' ) ) {
m4is_wdd99e2zfbwk::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_c7vzza0dseqrv8k98vz4();

}
}
if ( $this->m4is_5knb13yxhwt52t2z5zjq1csf8z45() ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'divi/core.php' ) ) {
m4is_j7vhxgenx2sc2msyayxg6wc7::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_c7vzza0dseqrv8k98vz4();

}
}
if ( defined( 'ELEMENTOR_VERSION' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr('elementor/core.php') ) {
m4is_mhw7rfmw9hzhn0j09nnjhvz99e::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_c7vzza0dseqrv8k98vz4();

}
}
if ( defined( 'CT_VERSION' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'oxygen/oxygen.php' ) ) {
m4is_r3t0yzn9d4c::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( class_exists( '\TCB\ConditionalDisplay\Main' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'thrivethemes/core.php' ) ) {
m4is_bt3b7g83x97j::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( defined( 'FUSION_CORE_VERSION' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'avada/core.php' ) ) {
m4is_dzcm5j3wt9k::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
include_once $this->m4is_54b9bwwsx7sym() . 'access/access.php';
m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_c7vzza0dseqrv8k98vz4();

}
private function m4is_1wpnafky4n8n1() {
if ( ! in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '71.92.64.210'] )) {
return;
}
if ( class_exists( 'Easy_Digital_Downloads' ) ) {
if (include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr('easy-digital-downloads/core.php') ) {
m4is_2jmhz15g::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if (defined('FLUENTFORM_VERSION')) {
include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr('fluentforms/core.php');
}
}
private function m4is_6h614x8q134asjz3() {


include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'group-accounts/core.php' );



if ( class_exists( 'AppPresser' ) ) {
include_once constant( 'MEMBERIUM_DIR' ) . '/vendor/apppresser/apppresser.php';
}
if ( class_exists( 'bbPress' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'bbpress/core.php' ) ) {
m4is_2je384w8shtarxre8pn6::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( class_exists( 'BadgeOS' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'badgeos/core.php' ) ) {
m4is_39q6bgzf3fw3a84dk10::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( function_exists( 'bp_is_active' ) || function_exists( 'buddypress' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'buddypress/core.php' ) ) {
m4is_ckv379vnjr0dx37::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( class_exists( 'WP_E_Digital_Signature' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'wpesignature/core.php' ) ) {
m4is_9d027bygs12bxfbhjm50d::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( class_exists( 'GamiPress' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'gamipress/core.php' ) ) {
m4is_0p1hcfetav4p3vt3zyz3ey81::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( defined( 'LEARNDASH_VERSION' ) && version_compare( constant( 'LEARNDASH_VERSION' ), 3, '>=' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'learndash/core.php' ) ) {
m4is_5f4j9e1q39p6vht95a8xheen::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( defined( 'LLMS_VERSION' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'lifterlms/core.php' ) ) {
m4is_bqq2md6vc8pv::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( class_exists( 'LearnPress' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'learnpress/core.php' ) ) {
m4is_twch6s2kw9djs3706x5wc8917fc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( class_exists( 'PeepSoGroupsPlugin' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'peepso-groups/core.php' ) ) {
m4is_ff0ss66j::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( function_exists( 'sensei' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'sensei/core.php' ) ) {
m4is_64dpg5d5g2h87ra0fsbb6d::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}

if ( class_exists( 'um' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'ultimatemember/core.php' ) ) {
m4is_a5hmk6h2a9ketwya0n5h6767axsaj7qp::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}

if ( defined( 'PROFILE_BUILDER_VERSION' ) ) {
require_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'profile-builder/init.php' );

}

if ( class_exists( 'woocommerce' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'woocommerce/core.php' ) ) {
m4is_fe9nkjefxy9e1dw27me4hsqr::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}

if ( class_exists( 'WPComplete' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'wpcomplete/core.php' ) ) {
m4is_p1vmkhb7nhw2kjaz0d::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( defined( 'WPCW_PLUGIN_ID' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'wpcourseware/core.php' ) ) {
m4is_wev22se0xzpwjtcjpt::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}

if ( class_exists( 'GFCommon' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr('gravity-forms/core.php' ) ) {
m4is_e9xazv4nanasm4rkjk::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}

if ( class_exists( 'user_switching' ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr('user-switching/core.php' ) ) {
m4is_azy7qrr0d2767::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}




do_action( 'memberium/modules/loaded' );
}
private function m4is_1n22ag6xc7zw3007nchn5dwpw6k5() {
$extensions = get_option( 'memberium_extensions',
 [] );
if ( ! empty( $extensions['affiliate-leaderboards'] ) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr( 'affiliate-leaderboards/core.php' ) ) {
m4is_ceb204yxgttkb1dvyrsjh2ww7qvw3::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( ! empty($extensions['facebook']) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr('facebook/core.php') ) {
m4is_bczvjfmtvxae6::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
if ( ! empty($extensions['pathprotect']) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr('pathprotect/init.php') ) {
}
}
if ( ! empty($extensions['spiffy']) ) {
if ( include_once $this->m4is_t0brxwak7n05mx6anqhyrgmr('spiffy/core.php') ) {
m4is_488enn5hrknvgtmb1cxvm3t3vkdkmc0x::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}


}
public function m4is_rhdeas06pxrctrk4q0g12v2() {
static $m4is_595gv51t8e07q8ncq7xwqva8t6sj9d2m = [];
if ( empty( $m4is_595gv51t8e07q8ncq7xwqva8t6sj9d2m ) ) {
$m4is_595gv51t8e07q8ncq7xwqva8t6sj9d2m = get_registered_nav_menus();

if ( empty( $m4is_595gv51t8e07q8ncq7xwqva8t6sj9d2m ) || ! is_array( $m4is_595gv51t8e07q8ncq7xwqva8t6sj9d2m ) ) {
return;
}
foreach( $m4is_595gv51t8e07q8ncq7xwqva8t6sj9d2m as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_s63cs6bqn0vgc6emva9 = 'memberium|' . $m4is_j8j55t8dz79m7 . '|loggedin';
$m4is_y01drs4dcbty7jrn3efdk8r7b4x = $m4is_rqxytszfq5v6syth1csqqxvy5 . ' (Logged In)';

register_nav_menu( $m4is_s63cs6bqn0vgc6emva9, $m4is_y01drs4dcbty7jrn3efdk8r7b4x );
}
if ( ! is_user_logged_in() ) {
return;
}
if ( ! $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'dynamic_menus' ) ) {
return;
}
$m4is_y7084n6v67jme9va8yz = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' );

foreach( $m4is_y7084n6v67jme9va8yz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_h9g6e5cga ) {
if ( ! empty( $m4is_h9g6e5cga['dynamic_menus'] ) ) {
unset( $m4is_y7084n6v67jme9va8yz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] );

}
}
if ( empty( $m4is_y7084n6v67jme9va8yz ) || ! is_array( $m4is_y7084n6v67jme9va8yz ) ) {
return;
}
$m4is_zsmgpvq18 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_vd3qpw0vkdm(),
 'memb_user', 'membership_tags' );
if ( ! empty( $m4is_zsmgpvq18 ) ) {
$m4is_zsmgpvq18 = array_filter( explode( ',', $m4is_zsmgpvq18 ) );

foreach( $m4is_y7084n6v67jme9va8yz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_h9g6e5cga ) {
if ( ! in_array( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_zsmgpvq18 ) ) {
unset( $m4is_y7084n6v67jme9va8yz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] );
}
}
}

foreach( $m4is_595gv51t8e07q8ncq7xwqva8t6sj9d2m as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
unregister_nav_menu($m4is_j8j55t8dz79m7);
}
foreach( $m4is_595gv51t8e07q8ncq7xwqva8t6sj9d2m as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {


register_nav_menu($m4is_j8j55t8dz79m7, $m4is_rqxytszfq5v6syth1csqqxvy5);
foreach( $m4is_y7084n6v67jme9va8yz as $tag_id =>
 $m4is_h9g6e5cga ) {
$m4is_s63cs6bqn0vgc6emva9 = 'memberium|' . $m4is_j8j55t8dz79m7 . '|' . $tag_id;
$m4is_y01drs4dcbty7jrn3efdk8r7b4x = (string) '&nbsp;&nbsp;&nbsp;' . $m4is_h9g6e5cga['name'] . ' ' . $m4is_rqxytszfq5v6syth1csqqxvy5;



register_nav_menu( $m4is_s63cs6bqn0vgc6emva9, $m4is_y01drs4dcbty7jrn3efdk8r7b4x );
}
}
}
}
public function m4is_2rfadhppd4fnm0ehyxe( $m4is_0389ahy1,
 $m4is_7fa6epwendz = false) {
return;
global $wpdb;
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');
$m4is_3vc99myy5e3w587xb1t7z = [];

$m4is_f7dajn4nnm8zk08ew4ynpr8 = [];
$m4is_qd4h8bb5wmr2zkjf76w = [];
if (is_array($m4is_7fa6epwendz) ) {
foreach($m4is_7fa6epwendz as $k =>
 $v) {
$m4is_7fa6epwendz[$k] = '_' . $v;
}
}
if (is_array($m4is_tbdh9qb6r6z) ) {
foreach($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
if ($m4is_bamv772v['FormId'] == -1) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = '_' . $m4is_bamv772v['Name'];

$m4is_3vc99myy5e3w587xb1t7z[] = $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6;
if ($m4is_7fa6epwendz !== false) {
if (! in_array($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6,
 $m4is_7fa6epwendz) ) {
$m4is_qd4h8bb5wmr2zkjf76w[] = $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6;
}
}
}
if ($m4is_bamv772v['FormId'] == -3) {
$m4is_f7dajn4nnm8zk08ew4ynpr8[] = '_' . $m4is_bamv772v['Name'];

}
}
}
$m4is_0262tra2rzwf3bqj2xs1wh2f6 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'ignore_contact_fields') . ',' . implode(',',
 $m4is_qd4h8bb5wmr2zkjf76w);
$m4is_0262tra2rzwf3bqj2xs1wh2f6 = implode(',', array_unique(explode(',', $m4is_0262tra2rzwf3bqj2xs1wh2f6) ) );


$this->m4is_ke3nwk5g93jygt8wwcej($m4is_0262tra2rzwf3bqj2xs1wh2f6, 'ignore_contact_fields', 'settings');



}

public function m4is_8wp21bf6g6b2gn() : string {
$m4is_11sn7bdqjze2p7tsr916 = '';

$m4is_4qbnse1s0zvb3044afap1m = debug_backtrace( 0, 8 );
$m4is_37a56gbbhc8 = [
'wp_insert_user',
'wp_update_user',
];
foreach( $m4is_4qbnse1s0zvb3044afap1m as $m4is_pyw8qn0cxt32 ) {
if ( in_array( $m4is_pyw8qn0cxt32['function'],
 $m4is_37a56gbbhc8 ) ) {
$m4is_11sn7bdqjze2p7tsr916 = $m4is_pyw8qn0cxt32['args'][0]['user_pass'] ?? '';
break;
}
}
return $m4is_11sn7bdqjze2p7tsr916;

}
function m4is_g4cc042jm() {
$this->m4is_g5mnkgp73hhr194vscy4fq9qr9wghet();
$this->m4is_tyd13qd09k14r();
}



function m4is_yzrsa00sc8hz7g6dv6() : bool {
return (defined('REST_REQUEST') && REST_REQUEST);

}




function m4is_f11mgryd9b55() {
global $pagenow;
if ('wp-login.php' == $pagenow) {
if (class_exists('NextendSocialLogin') && ! empty($_GET['loginSocial'])) {
return;

}
if ($this->m4is_mdj300zr1jk5av2y9cp() ) {
return;
}
$m4is_1xks2cp77t4 = [];
foreach($m4is_1xks2cp77t4 as $m4is_ms0hy1cy) {
if (! empty($_GET[$m4is_ms0hy1cy]) ) {
return;

}
}
$m4is_knxbec8fr3be1s2tkx0ydee0z = empty($_GET['action']) ? '' : strtolower(trim($_GET['action']) );
$m4is_ms0hy1cy = [
'confirm_admin_email',

'confirmaction',
'lostpassword',
'override',
'postpass',
'register',
'resetpass',
'rp',
'switch_to_olduser',
'switch_to_user',
];
if (in_array($m4is_knxbec8fr3be1s2tkx0ydee0z,
 $m4is_ms0hy1cy) ) {
return;
}
$m4is_75jz4hx50qan9x39g42t9kvd5ccqa8w = apply_filters('memberium_wplogin_redirect', true);
if (! $m4is_75jz4hx50qan9x39g42t9kvd5ccqa8w) {
return;

}
$m4is_fxg5q0wq0bg4tkd = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'login_url', 0);
if ($m4is_fxg5q0wq0bg4tkd < 1) {
return;

}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
$m4is_s32535550ctc8t0g = empty($_GET['rp']) ? '' : $_GET['rp'];
if (! empty($m4is_s32535550ctc8t0g) ) {
return;

}
if (! empty($m4is_knxbec8fr3be1s2tkx0ydee0z) ) {
if ($m4is_knxbec8fr3be1s2tkx0ydee0z == 'logout') {
return;
}
if ($m4is_knxbec8fr3be1s2tkx0ydee0z == 'register') {
return;

}
if ($m4is_knxbec8fr3be1s2tkx0ydee0z == 'lostpassword') {
return;
}
}
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($m4is_knxbec8fr3be1s2tkx0ydee0z == 'resetpass') {
return;

}
if (isset($_POST['log']) && isset($_POST['pwd']) && empty($_POST['log']) && empty($_POST['pwd']) ) {
}
else {
return;
}
}
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = get_permalink( $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'login_url') );
$m4is_ww42s7wr8j8p = empty($_SERVER['QUERY_STRING']) ? '' : '?' . $_SERVER['QUERY_STRING'];
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq . $m4is_ww42s7wr8j8p;

wp_redirect($m4is_pp334hs6rfvw2vqjd400r3cmsn2kq);
die();
}
}



function m4is_y09sgpje0cvmczk( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : bool {
return $this->m4is_vd3qpw0vkdm() == $m4is_wk4dh1rnd3wmwvsggq51nhn87;

}



function m4is_79fehqxa1c0nagpvcjk( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_hce1y1a4qd65zhnwsj, $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = apply_filters( 'memberium/usermeta/transmute',
 $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_hce1y1a4qd65zhnwsj, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_sae38szyy4kmzrs4[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp][$m4is_hce1y1a4qd65zhnwsj] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
function m4is_g5mnkgp73hhr194vscy4fq9qr9wghet() {
if ( empty( $this->m4is_sae38szyy4kmzrs4 ) || ! is_array( $this->m4is_sae38szyy4kmzrs4 ) ) {
return;

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $this->m4is_1qbr5gs0jfsnf569vm930v();
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
if ( ! empty( $this->m4is_sae38szyy4kmzrs4[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp] ) ) {
foreach ( $this->m4is_sae38szyy4kmzrs4[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp] as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp ) {
$m4is_bqhtspcavhb01spmfd3x = strtolower( $m4is_bqhtspcavhb01spmfd3x );
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_pcb5ffn5nrn( $this->m4is_vd3qpw0vkdm(),
 'contact', $m4is_bqhtspcavhb01spmfd3x, $m4is_29gzevpx8rbkp );
}
}
$this->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
foreach ( $this->m4is_sae38szyy4kmzrs4 as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp => $m4is_7b2yfzk0054 ) {
unset( $this->m4is_sae38szyy4kmzrs4[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp]['!LastUpdated'] );

}
foreach ( $this->m4is_sae38szyy4kmzrs4 as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp => $m4is_7b2yfzk0054 ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

foreach( $m4is_7b2yfzk0054 as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp ) {
if ( empty( $m4is_29gzevpx8rbkp ) ) {
$m4is_7b2yfzk0054[$m4is_bqhtspcavhb01spmfd3x] = ' ';

}
}
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp && ! empty( $m4is_7b2yfzk0054 ) ) {
m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_7b2yfzk0054 );
}
}
$this->m4is_sae38szyy4kmzrs4 = [];
}
function m4is_0zf1f5x5t9nzw01vm1k2za9w($m4is_mr4hnyh6fa0p9sm0m8wfs1,
 $m4is_v65njznyzw30p = false) {
$m4is_nyhxqmaqz0 = $m4is_mr4hnyh6fa0p9sm0m8wfs1;
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = wp_strip_all_tags($m4is_mr4hnyh6fa0p9sm0m8wfs1);

$m4is_mr4hnyh6fa0p9sm0m8wfs1 = remove_accents($m4is_mr4hnyh6fa0p9sm0m8wfs1);
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = (string) preg_replace('|%([a-fA-F0-9][a-fA-F0-9])(\+)|',
 '', $m4is_mr4hnyh6fa0p9sm0m8wfs1); 
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = (string) preg_replace('/&.?;/', '', $m4is_mr4hnyh6fa0p9sm0m8wfs1);
 

if ($m4is_v65njznyzw30p) {
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = (string) preg_replace('|[^a-z0-9 _.\-@]|i', '', $m4is_mr4hnyh6fa0p9sm0m8wfs1);

}
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = trim($m4is_mr4hnyh6fa0p9sm0m8wfs1);

$m4is_mr4hnyh6fa0p9sm0m8wfs1 = (string) preg_replace('|\s+|',
 ' ', $m4is_mr4hnyh6fa0p9sm0m8wfs1);
return $m4is_mr4hnyh6fa0p9sm0m8wfs1; 
}
function m4is_mz8ypkzzr4fxz8e42njma37v6ge02( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) ? $this->m4is_1qbr5gs0jfsnf569vm930v() : $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

$this->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
wp_cache_delete("contact_last_updated/{$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}",
 'memberium2/contacts');
wp_cache_delete("contact_id:{$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}", 'memberium2/contacts');
}



function m4is_gaaefwfyvmhzq( $m4is_g61yzqs7ecta0xztr70d7v ) {
if ( is_user_logged_in() ) {
if ( ! empty( $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'dynamic_menus' ) ) ) {
$m4is_3wq0qfn8ev16ze0zcfjah9kgvsghjdeg = $m4is_g61yzqs7ecta0xztr70d7v['theme_location'];
$m4is_8sy26bqvhg = get_theme_mod( 'nav_menu_locations' );

$m4is_22vwsyqyex8hrzbbn5adm1mz = array_filter( explode( ',', m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_vd3qpw0vkdm(),
 'memb_user', 'membership_tags', '' ) ) );

$m4is_j8j55t8dz79m7 = "memberium|{$m4is_3wq0qfn8ev16ze0zcfjah9kgvsghjdeg}|loggedin";
if ( ! empty( $m4is_8sy26bqvhg[$m4is_j8j55t8dz79m7] ) ) {
$m4is_g61yzqs7ecta0xztr70d7v['theme_location'] = $m4is_j8j55t8dz79m7;

}
if ( $this->m4is_mdj300zr1jk5av2y9cp() ) {
return $m4is_g61yzqs7ecta0xztr70d7v;
}

if ( is_array( $m4is_22vwsyqyex8hrzbbn5adm1mz ) ) {
foreach ( $m4is_22vwsyqyex8hrzbbn5adm1mz as $membership_tag ) {
$m4is_j8j55t8dz79m7 = "memberium|{$m4is_3wq0qfn8ev16ze0zcfjah9kgvsghjdeg}|{$membership_tag}";

if ( ! empty( $m4is_8sy26bqvhg[$m4is_j8j55t8dz79m7] ) ) {
$m4is_g61yzqs7ecta0xztr70d7v['theme_location'] = $m4is_j8j55t8dz79m7;
}
}
}
}
}
$m4is_g61yzqs7ecta0xztr70d7v['theme_location'] = apply_filters( 'memberium_personal_menus',
 $m4is_g61yzqs7ecta0xztr70d7v['theme_location'] );
return $m4is_g61yzqs7ecta0xztr70d7v;
}
public function m4is_h7gapv9fzmbf( $m4is_r53562w9befcb2kh7rm4p7n5 ) {
$m4is_93jxby2jxk = wp_salt( 'nonce' ) . $this->m4is_vd3qpw0vkdm();

return hash_hmac( 'sha256', $m4is_r53562w9befcb2kh7rm4p7n5, $m4is_93jxby2jxk );
}
function m4is_43td8pwqhr6wcp55( $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn,
 $m4is_r53562w9befcb2kh7rm4p7n5 ) {
return ( $this->m4is_h7gapv9fzmbf( $m4is_r53562w9befcb2kh7rm4p7n5 ) == $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn );

}
function m4is_4k58b7vmhzeyy7ec($m4is_tz1rt7sbq40fade6e6rx) {
$m4is_yrsthh0s4s62mfk9 = get_post_status($m4is_tz1rt7sbq40fade6e6rx);

return $m4is_yrsthh0s4s62mfk9 === 'publish';
}
function m4is_ypfvvvzq95f($m4is_wk4dh1rnd3wmwvsggq51nhn87 = false) {
}
function m4is_e6neacb8dq() {
$m4is_zpjjjpsqjfew8mxv = empty( $_SERVER['HTTP_REFERER'] ) ? '' : $_SERVER['HTTP_REFERER'];

$m4is_xms14a83j = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'default_logout_page', 0 );
$m4is_fj5dgn1q92krcj82f9wz = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_vd3qpw0vkdm(),
 'memb_user', 'logout_page', 0 );
if ( ! $m4is_fj5dgn1q92krcj82f9wz ) {
$m4is_zhf4dv1f7qn2 = empty( $m4is_xms14a83j ) ? site_url() : get_permalink( $m4is_xms14a83j );

$m4is_zhf4dv1f7qn2 = str_replace( '{{current.url}}', $m4is_zpjjjpsqjfew8mxv, $m4is_zhf4dv1f7qn2 );
}
else {
$m4is_zhf4dv1f7qn2 = get_permalink( $m4is_fj5dgn1q92krcj82f9wz );

}
return $m4is_zhf4dv1f7qn2;

}
function m4is_cp2mbze7skabpe() {

if ($this->m4is_t3phhn82n7jkhgtvas) {
return true;
}

if (isset($_COOKIE['nextend_uniqid']) && $_COOKIE['nextend_uniqid'] > '') {
return true;

}


return false;
}




public function m4is_h9t0p5fc1(string $m4is_j8j55t8dz79m7, $m4is_kxg5t360y5bsg8zzq4gep4h3 = false): array {
if ($m4is_kxg5t360y5bsg8zzq4gep4h3 === false) {
$writeback = true;

$m4is_kxg5t360y5bsg8zzq4gep4h3 = (array) get_option('memberium_setup_completed');
}
else {
$writeback = false;
}

$m4is_kxg5t360y5bsg8zzq4gep4h3[] = strtolower(trim($m4is_j8j55t8dz79m7) );

$m4is_kxg5t360y5bsg8zzq4gep4h3 = array_filter(array_unique($m4is_kxg5t360y5bsg8zzq4gep4h3) );
if ($writeback){
update_option('memberium_setup_completed',
 array_filter(array_unique($m4is_kxg5t360y5bsg8zzq4gep4h3) ) );
}
return $m4is_kxg5t360y5bsg8zzq4gep4h3;
}








function m4is_hm05n5r0en2wyfhjnpy10dv91yh( $m4is_gcxt3m42dn0f2b80 ) {
$m4is_w8rh0nfjwwbwcf71be = function ($m4is_s8cs5mdq57e5bgpqzd) {
if ( is_array( $m4is_s8cs5mdq57e5bgpqzd ) && ! empty( $m4is_s8cs5mdq57e5bgpqzd ) ) {
$m4is_s8cs5mdq57e5bgpqzd = array_change_key_case( $m4is_s8cs5mdq57e5bgpqzd );

}
return $m4is_s8cs5mdq57e5bgpqzd;
};
$m4is_gcxt3m42dn0f2b80 = array_filter( array_map( $m4is_w8rh0nfjwwbwcf71be, array_change_key_case( $m4is_gcxt3m42dn0f2b80 ) ) );

return $m4is_gcxt3m42dn0f2b80;
}




public function m4is_5vtbryfazyjf979ttdx0kp(int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, int $m4is_wk4dh1rnd3wmwvsggq51nhn87) : bool {
if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return false;

}
if ( empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) || empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return false;
}
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_userdata( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 instanceof WP_User ) {
return false;
}
$m4is_zxwt8y3szyy1aenkh = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email;

$m4is_4sv5dzn4n7wqt78snvsrccw = $this->m4is_dsdn2p7da9kdz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_zxwt8y3szyy1aenkh );
if ( ! $m4is_4sv5dzn4n7wqt78snvsrccw ) {
return false;

}
m4is_rw8p2dfy073ez::m4is_w2rgz1xtp( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

return true;
}



public function m4is_fbe9fzzx9wyyk8jkdkcr3xep1( string $m4is_zxwt8y3szyy1aenkh ) : int {
global $wpdb;
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email',
 $m4is_zxwt8y3szyy1aenkh );
if ( is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_User' ) ) {
return (int) $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;

}
return 0;
}

public function m4is_nhseswhdgr1gntxzvp0rdskbvpx4v8( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : void {
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'manage_options' ) ) {
return;
}
$m4is_6jq66treb1b39yrjcr = get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'session_tokens', true );

if ( ! is_array( $m4is_6jq66treb1b39yrjcr ) || count( $m4is_6jq66treb1b39yrjcr ) < 2 ) {
return;
}
$m4is_map8tdmsvarsn03f1fhfytx61b4a = time();

$m4is_s0q2g23s3qteshdez858t8v3wjxqyy = 0; 
foreach($m4is_6jq66treb1b39yrjcr as $m4is_j8j55t8dz79m7=>$m4is_rqxytszfq5v6syth1csqqxvy5) {
if ($m4is_rqxytszfq5v6syth1csqqxvy5['login'] > $m4is_s0q2g23s3qteshdez858t8v3wjxqyy) {
$m4is_s0q2g23s3qteshdez858t8v3wjxqyy = $m4is_rqxytszfq5v6syth1csqqxvy5['login'];

}
}

foreach( $m4is_6jq66treb1b39yrjcr as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( $m4is_rqxytszfq5v6syth1csqqxvy5['login'] < $m4is_s0q2g23s3qteshdez858t8v3wjxqyy || $m4is_rqxytszfq5v6syth1csqqxvy5['expiration'] < $m4is_map8tdmsvarsn03f1fhfytx61b4a ) {
unset( $m4is_6jq66treb1b39yrjcr[$m4is_j8j55t8dz79m7] );

}
}
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'session_tokens', $m4is_6jq66treb1b39yrjcr );
}
public function m4is_s8kbtxpx4z15b1y0xrspr7enm( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : void {
wp_cache_delete( "last_updated/{$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}",
 'memberium/contacts' );
}

public function m4is_geq5g5mch3kkbpp21kh3crb915fkk( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : int {
$m4is_kgdwxx4f = 'memberium/contacts';

$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = "last_updated/{$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}";
$m4is_yqbs57707b9pgq = MINUTE_IN_SECONDS * 15;

$m4is_5p7m12egre5pbbk = wp_cache_get( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_kgdwxx4f, false, $m4is_6p2tyvq6paj43svrn7zqaykxzy );

if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
return $m4is_5p7m12egre5pbbk;
}
global $wpdb;
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');

$m4is_k7p8pmxsbkqrje3y20 = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `value` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `id` = %d AND `appname` = %s AND fieldname = '!LastUpdated' ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_v4beyw7zqhr3 );

$m4is_5p7m12egre5pbbk = (int) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
wp_cache_set( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_5p7m12egre5pbbk,
 $m4is_kgdwxx4f, $m4is_yqbs57707b9pgq );
return $m4is_5p7m12egre5pbbk;
}
private function m4is_3abyfafj( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
if ( m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;

}
$m4is_rkmcn1zd3r3k149h20vfr8z = 2;
$m4is_qks8155kvhpk = base64_decode( 'YmFzZTY0X2RlY29kZQ==' ); 
$m4is_brarr4e19b5vj3h9g5tymr3wnph5gj2 = $m4is_qks8155kvhpk( 'd3BkYg==' );
 
$m4is_z2d2vh5t7x63sm5be5hd2z0 = $m4is_qks8155kvhpk( 'dXNlcm1ldGE=' ); 
$m4is_2e1t7s0xvak60q615g6ebgsctkgg24yv = $m4is_qks8155kvhpk( 'c3RyX3JlcGxhY2U=' );
 
$m4is_k7p8pmxsbkqrje3y20 = $GLOBALS[$m4is_brarr4e19b5vj3h9g5tymr3wnph5gj2]->$m4is_z2d2vh5t7x63sm5be5hd2z0;
$m4is_wqv3sfj931rk1maxnf01v52 = $m4is_2e1t7s0xvak60q615g6ebgsctkgg24yv( '%s',
 $m4is_k7p8pmxsbkqrje3y20, $m4is_qks8155kvhpk('U0VMRUNUIGNvdW50KGB1bWV0YV9pZGApIEZST00gYCVzYCBXSEVSRSBgbWV0YV9rZXlgID0gInNlc3Npb25fdG9rZW5zIg==' ) );
 
$m4is_7g9y793jjckyb = $GLOBALS[$m4is_brarr4e19b5vj3h9g5tymr3wnph5gj2]->get_var( $m4is_wqv3sfj931rk1maxnf01v52 );
if ( $m4is_7g9y793jjckyb > $m4is_rkmcn1zd3r3k149h20vfr8z ) {
$GLOBALS[$m4is_brarr4e19b5vj3h9g5tymr3wnph5gj2]->query( $m4is_2e1t7s0xvak60q615g6ebgsctkgg24yv( ['%s',
 '%u', '%l'], [$m4is_k7p8pmxsbkqrje3y20, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_7g9y793jjckyb - $m4is_rkmcn1zd3r3k149h20vfr8z], $m4is_qks8155kvhpk( base64_encode( 'DELETE FROM `%s` WHERE `user_id` <> %u AND `meta_key` = "session_tokens" ORDER BY `umeta_id` ASC LIMIT %l') ) ) );

wp_cache_flush();
error_log( 'Memberium - [License Error] Maximum simultaneous user count exceeded.' );
}
}

public function m4is_kbasnpa215ana6jv875pb1061pymkb() : void {
$m4is_jrevmgznpp3pd48gsq5 = (int) get_current_user_id();

$this->m4is_ntrhtsym58b2jm = empty( $m4is_jrevmgznpp3pd48gsq5 ) ? 0 : (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_jrevmgznpp3pd48gsq5 );

$this->m4is_jrevmgznpp3pd48gsq5 = $m4is_jrevmgznpp3pd48gsq5;
if ( ! $m4is_jrevmgznpp3pd48gsq5 ) {
$this->m4is_m9bcx7dqv78();
return;

}
if ( is_admin() ) {
return;
}
$this->m4is_3abyfafj( $m4is_jrevmgznpp3pd48gsq5 );
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

}

public function m4is_vd3qpw0vkdm() : int {
if ( empty( $this->m4is_jrevmgznpp3pd48gsq5 ) && is_user_logged_in() ) {
$this->m4is_kbasnpa215ana6jv875pb1061pymkb();

}
return (int) $this->m4is_jrevmgznpp3pd48gsq5;
}

public function m4is_1qbr5gs0jfsnf569vm930v() : int {
return $this->m4is_ntrhtsym58b2jm;

}



public function m4is_m9bcx7dqv78() {
}
public function m4is_yftnaz8hf6kdysxjrkqdjdvs( $m4is_6mctr922hbmncpwfrp0x2k ) : array {
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tag_detail_count'] = 0;

if ( ! $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'sync_tag_details' ) ) {
return $m4is_6mctr922hbmncpwfrp0x2k;
}
global $wpdb;

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['id'];
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return $m4is_6mctr922hbmncpwfrp0x2k;

}
$m4is_5rbenkpt1v7xby2cknbs7 = 'SELECT COUNT(*) FROM %i WHERE `contactid` = %d';
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 m4is_0ddg4zyk7dn8eg0283::m4is_nm686mgj6zffggzes4k(), $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$m4is_7g9y793jjckyb = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tag_detail_count'] = $m4is_7g9y793jjckyb;
return $m4is_6mctr922hbmncpwfrp0x2k;
}
public function m4is_34eadgcgvcr1zn( $m4is_6mctr922hbmncpwfrp0x2k ) : array {
if ( ! $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'sync_affiliate' ) ) {
return $m4is_6mctr922hbmncpwfrp0x2k;
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['id'] ) ? 0 : $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['id'];

if ( empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['affiliate']['id'] ) ) {
$m4is_xbr1ae5hmx11ees = m4is_amz58dmg8j7e898bj8r8b1::m4is_jqr2zptdexzejs6avs2cqg64( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( is_array( $m4is_xbr1ae5hmx11ees ) && ! empty( $m4is_xbr1ae5hmx11ees ) ) {
$m4is_6mctr922hbmncpwfrp0x2k['keap']['affiliate'] = array_change_key_case( $m4is_xbr1ae5hmx11ees,
 CASE_LOWER );
$m4is_6mctr922hbmncpwfrp0x2k['keap']['meta']['affiliate'] = empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['meta']['affiliate'] ) ? time() : $m4is_6mctr922hbmncpwfrp0x2k['keap']['meta']['affiliate'];

}
}

return $m4is_6mctr922hbmncpwfrp0x2k;
}
public function m4is_smyzrh5eq1yrfg7zmgfmr4pcn22wz0() {
$m4is_3ey0a4er2 = 'memberium/session/updated';

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_vd3qpw0vkdm();
if ( ! empty( $this->m4is_k890ceyb0xky1e1 ) && is_array( $this->m4is_k890ceyb0xky1e1 ) ) {
foreach( $this->m4is_k890ceyb0xky1e1 as $m4is_wk4dh1rnd3wmwvsggq51nhn87 =>
 $m4is_6mctr922hbmncpwfrp0x2k ) {
do_action( 'memberium/session/updated', $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_6mctr922hbmncpwfrp0x2k );

delete_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_3ey0a4er2 );
}
}
if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$m4is_6mctr922hbmncpwfrp0x2k = get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_3ey0a4er2, true );
if ( $m4is_6mctr922hbmncpwfrp0x2k ) {
do_action( 'memberium/session/updated', $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_6mctr922hbmncpwfrp0x2k );
delete_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_3ey0a4er2 );
}
}
}
public function m4is_yezqm9gncdx( $m4is_vspm2ffq2jwpjpj2cehzzaa2 = false ) {
if ( $m4is_vspm2ffq2jwpjpj2cehzzaa2 ) {
return $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' );

}
else {
$m4is_y7084n6v67jme9va8yz = [];
$m4is_kw7xrtpa75hew8a = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('memberships');
foreach( $m4is_kw7xrtpa75hew8a as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_h9g6e5cga) {
$m4is_y7084n6v67jme9va8yz[] = $m4is_h9g6e5cga['name'];
}
return $m4is_y7084n6v67jme9va8yz;
}
}
public function m4is_d68rw7tyk7kyxpks13fvs310yn7r98dd( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : string {
$m4is_tz1rt7sbq40fade6e6rx = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'login_page', 0 );
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = get_site_url();
if ($m4is_tz1rt7sbq40fade6e6rx > 0) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = get_permalink( $m4is_tz1rt7sbq40fade6e6rx );

}
elseif ($m4is_tz1rt7sbq40fade6e6rx == -1) {
if (function_exists('bbp_get_user_profile_url') ) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = bbp_get_user_profile_url($m4is_wk4dh1rnd3wmwvsggq51nhn87);

}
}
return $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq;
}
public function m4is_gjxp4j5x04k( $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0, $m4is_6mctr922hbmncpwfrp0x2k = [] ) {

$m4is_yggq5j195mnp46m3zfr = get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memberium_issue_subs', true );
$m4is_map8tdmsvarsn03f1fhfytx61b4a = time();
if (is_array($m4is_yggq5j195mnp46m3zfr) ) {
foreach($m4is_yggq5j195mnp46m3zfr as $m4is_ch8hrhh6sba02hkj735k3) {
$m4is_0s1wngqqevjreqav9s8wf2dzkyxk1qn = $m4is_ch8hrhh6sba02hkj735k3['channel'];

$m4is_e82ertxvjkq10sj4w33s40c5g1wwx = $m4is_ch8hrhh6sba02hkj735k3['cat_id'];
$m4is_gqmmzp9nw4 = $m4is_ch8hrhh6sba02hkj735k3['tagcount'];

$m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta = $m4is_ch8hrhh6sba02hkj735k3['start_time'];
$m4is_s67jk5ynxsd7f431hw4q2qpec6msg = $m4is_ch8hrhh6sba02hkj735k3['date_format'];

while ($m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta < $m4is_map8tdmsvarsn03f1fhfytx61b4a) {
}
}
}


return $m4is_6mctr922hbmncpwfrp0x2k;

}

public function m4is_7q9wm5mc2x36( string $m4is_1t99aap85abz6rcdy13f4g, int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : void {
global $wpdb;

$m4is_bbvnwv5x57v72avkz = 'memberium_roles';
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'id', $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if (! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 instanceof WP_User ) {
return;
}
$m4is_3a25ttxkq0dxxzsgxsdb0k = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->roles;

$m4is_1t99aap85abz6rcdy13f4g = array_unique( array_filter( array_map( 'trim', explode( ',', $m4is_1t99aap85abz6rcdy13f4g ) ) ) );
$m4is_gchtqbh1tc1bty2xdy5a12c8e1g = get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_bbvnwv5x57v72avkz, true );
$m4is_gchtqbh1tc1bty2xdy5a12c8e1g = is_string( $m4is_gchtqbh1tc1bty2xdy5a12c8e1g ) ? array_unique( array_filter( explode( ',',
 $m4is_gchtqbh1tc1bty2xdy5a12c8e1g ) ) ) : [];
$m4is_3fqv4xjd60gb = array_diff( $m4is_1t99aap85abz6rcdy13f4g, $m4is_3a25ttxkq0dxxzsgxsdb0k );

$m4is_xfqz1p6z7p4 = array_diff( $m4is_gchtqbh1tc1bty2xdy5a12c8e1g, $m4is_1t99aap85abz6rcdy13f4g );
$m4is_wdzxxm8pry2qet2ehxe7fk0svb4ntp = implode( ',',
 $m4is_1t99aap85abz6rcdy13f4g );
foreach( $m4is_xfqz1p6z7p4 as $m4is_pe0qmemqt ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->remove_role( $m4is_pe0qmemqt );

error_log( sprintf( 'Memberium: [info] Removing Role %s from User ID:%d', $m4is_pe0qmemqt, $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) );
}
foreach( $m4is_3fqv4xjd60gb as $m4is_pe0qmemqt ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->add_role( $m4is_pe0qmemqt );

error_log( sprintf( 'Memberium: [info] Adding Role %s to User ID:%d', $m4is_pe0qmemqt, $m4is_wk4dh1rnd3wmwvsggq51nhn87) );
}
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_bbvnwv5x57v72avkz, $m4is_wdzxxm8pry2qet2ehxe7fk0svb4ntp );







}

public function m4is_nnhs86m2dtet7n7m8je( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_7b2yfzk0054, $m4is_8tvw2ngmt06fsk7y87y = false ) {
foreach($m4is_7b2yfzk0054 as $m4is_jrbbv650tt4nt9f6fz => $m4is_v7gcgdwwqe) {
$this->m4is_8sqkcc4ebfed07z6qzkv9edmnxzjh($m4is_jrbbv650tt4nt9f6fz,
 $m4is_v7gcgdwwqe, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
if ($m4is_8tvw2ngmt06fsk7y87y) {
$this->m4is_g5mnkgp73hhr194vscy4fq9qr9wghet();

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( $this->m4is_vd3qpw0vkdm() );
}
}
public function m4is_8sqkcc4ebfed07z6qzkv9edmnxzjh( $m4is_jrbbv650tt4nt9f6fz,
 $m4is_v7gcgdwwqe, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0 ) {
global $wpdb;
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ? $this->m4is_1qbr5gs0jfsnf569vm930v() : $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return false;
}
$this->m4is_79fehqxa1c0nagpvcjk( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_jrbbv650tt4nt9f6fz, $m4is_v7gcgdwwqe );

$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');
$m4is_mqsj9a3temj38vyv8e4kje91nar = [
'id' =>
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'appname' => $m4is_v4beyw7zqhr3,
'fieldname' => $m4is_jrbbv650tt4nt9f6fz,
'value' => $m4is_v7gcgdwwqe
];

$m4is_jq0f2y5aw = [
'%d',
'%s',
'%s',
'%s'
];
$wpdb->replace( m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3(), $m4is_mqsj9a3temj38vyv8e4kje91nar,
 $m4is_jq0f2y5aw );

$m4is_2y5t59g3f0yqenxx = strtolower( $m4is_jrbbv650tt4nt9f6fz );
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp == $this->m4is_1qbr5gs0jfsnf569vm930v() ) {
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_pcb5ffn5nrn( $this->m4is_vd3qpw0vkdm(),
 'contact', $m4is_jrbbv650tt4nt9f6fz, $m4is_v7gcgdwwqe );
}
return true;
}

public function m4is_eqvbvnvjx( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 string $m4is_zxwt8y3szyy1aenkh ) : void {
if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 < 1 || empty( $m4is_zxwt8y3szyy1aenkh ) ) {
return;

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_zxwt8y3szyy1aenkh = sanitize_email( strtolower( $m4is_zxwt8y3szyy1aenkh ) );

$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'id', $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
if ( ! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 instanceof WP_User ) {
return;

}
$m4is_34a4gmm352vevz0d4mrbxw3 = strtolower( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email );

$m4is_46mk286a9b51zt4aweshvcbzah0m = [
'Email' =>
 $m4is_zxwt8y3szyy1aenkh
];
$m4is_hartbe843crydzh = m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_46mk286a9b51zt4aweshvcbzah0m); 
m4is_rw8p2dfy073ez::m4is_rxf2xq5wvdkk7jhkx8( $m4is_zxwt8y3szyy1aenkh, 'Memberium Subscriber Email Change' );

$m4is_g61yzqs7ecta0xztr70d7v = [
'contact_id' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'cache_ttl' => 0,
];
$this->m4is_zxceeesaskr61p($m4is_g61yzqs7ecta0xztr70d7v);

}

public function m4is_a25pd5av7mhr23c0xjnzetf96w4pb(int $m4is_wk4dh1rnd3wmwvsggq51nhn87, ?string $m4is_zxwt8y3szyy1aenkh = '', int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0,
 $m4is_7x1e2ag2m61048zyebzdqa = null): bool {
global $wpdb;
$m4is_zxwt8y3szyy1aenkh = strtolower( trim( $m4is_zxwt8y3szyy1aenkh ) );

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 < 1 || empty( $m4is_zxwt8y3szyy1aenkh ) ) {
return false;

}
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by('id', $m4is_wk4dh1rnd3wmwvsggq51nhn87);
if (! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 instanceof WP_User) {
return false;

}
if (null === $m4is_7x1e2ag2m61048zyebzdqa) {
$m4is_7x1e2ag2m61048zyebzdqa = ( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login === sanitize_user( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email ) );

}

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT COUNT(`ID`) FROM `{$wpdb->users}` WHERE ( `user_login` = %s OR `user_email` = %s ) AND `ID` <> %d";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, sanitize_user($m4is_zxwt8y3szyy1aenkh, true), $m4is_zxwt8y3szyy1aenkh,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_e200zw8mj7k8m1hbx3m = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
if ( $m4is_e200zw8mj7k8m1hbx3m ) {
return false;

}
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
m4is_rw8p2dfy073ez::m4is_w2rgz1xtp( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',
'Email',
'EmailAddress2',
'EmailAddress3'
];
$m4is_er73m18j35gqvx95t7d34y7 = m4is_rw8p2dfy073ez::m4is_845rdsrwy4s57mgxwm6b8jhm( $m4is_zxwt8y3szyy1aenkh,
 $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
if ( is_array( $m4is_er73m18j35gqvx95t7d34y7 ) ) {
foreach( $m4is_er73m18j35gqvx95t7d34y7 as $m4is_j8j55t8dz79m7 =>
 $m4is_cyg7rcfhzagmm5v ) {
if ( $m4is_cyg7rcfhzagmm5v['Id'] == $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
unset( $m4is_er73m18j35gqvx95t7d34y7[$m4is_j8j55t8dz79m7] );

}
}
}
if ( ! empty( $m4is_er73m18j35gqvx95t7d34y7 ) && is_array( $m4is_er73m18j35gqvx95t7d34y7 ) ) {
return false;
}
$m4is_34a4gmm352vevz0d4mrbxw3 = strtolower( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email );


if ($m4is_7x1e2ag2m61048zyebzdqa) {
$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE `{$wpdb->users}` SET `user_login` = %s , `user_email` = %s WHERE `ID` = %d ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, sanitize_user( $m4is_zxwt8y3szyy1aenkh, true), $m4is_zxwt8y3szyy1aenkh,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
else {
$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE `{$wpdb->users}` SET `user_email` = %s WHERE `ID` = %d ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_zxwt8y3szyy1aenkh, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

}
$m4is_hartbe843crydzh = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

unset( $m4is_e200zw8mj7k8m1hbx3m, $m4is_5rbenkpt1v7xby2cknbs7 );

if ( class_exists( 'WooCommerce' ) ) {
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'billing_email', $m4is_zxwt8y3szyy1aenkh );

}

$m4is_46mk286a9b51zt4aweshvcbzah0m = [
'Email' => $m4is_zxwt8y3szyy1aenkh
];
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_hartbe843crydzh = m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_46mk286a9b51zt4aweshvcbzah0m); 
}
else {
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',
];
$m4is_j34bmw9dcjexfj1qpz = [
'Email' =>
 $m4is_34a4gmm352vevz0d4mrbxw3,
];
$m4is_er73m18j35gqvx95t7d34y7 = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2('Contact' ,1000,
 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5);
if (is_array($m4is_er73m18j35gqvx95t7d34y7) && ! empty($m4is_er73m18j35gqvx95t7d34y7) ) {
foreach($m4is_er73m18j35gqvx95t7d34y7 as $m4is_cyg7rcfhzagmm5v) {
if ($m4is_cyg7rcfhzagmm5v['Id']) {
$m4is_hartbe843crydzh = m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_cyg7rcfhzagmm5v['Id'],
 $m4is_46mk286a9b51zt4aweshvcbzah0m); 
}
}
}
}
m4is_rw8p2dfy073ez::m4is_rxf2xq5wvdkk7jhkx8( $m4is_zxwt8y3szyy1aenkh, 'Memberium Subscriber Email Change' );

$m4is_g61yzqs7ecta0xztr70d7v = [
'contact_id' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'cache_ttl' => 0,
];
$this->m4is_zxceeesaskr61p($m4is_g61yzqs7ecta0xztr70d7v);

do_action( 'memberium_email_change', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_34a4gmm352vevz0d4mrbxw3,
 $m4is_zxwt8y3szyy1aenkh );
clean_user_cache( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
wp_cache_delete( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'users' );

wp_cache_delete( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->login_name, 'userlogins' );
if ( $this->m4is_vd3qpw0vkdm() == $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
wp_clear_auth_cookie();

wp_set_current_user( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
wp_set_auth_cookie( $m4is_wk4dh1rnd3wmwvsggq51nhn87, true, false );
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

}
return true;
}

public function m4is_pmkbdnzvn2zr93dej92b0( string $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g, int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0 ) : bool {
if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return false;

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ? $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp : (int) $this->m4is_1qbr5gs0jfsnf569vm930v();

if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return false;
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return false;
}
if ( strpos( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g, '\\' ) !== false ) {
return false;

}
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = trim( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g );
if ( empty( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g ) ) {
return false;

}
if ( strlen( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g ) < $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'min_password_length' ) ) {
return false;

}
$m4is_0864dacae86e26c2nevtsd8y1 = true;
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'loginname', '' );
$m4is_kekgrkcv3q1fd6gkktzd = wp_hash_password($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g);
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');

$m4is_wte2qk9hdk1zj7 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'password_field');
$m4is_akd4cjvbhtckz56 = (bool) $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'local_auth_only');
global $wpdb;

if (! $m4is_akd4cjvbhtckz56) {
$m4is_46mk286a9b51zt4aweshvcbzah0m = [
$m4is_wte2qk9hdk1zj7 => $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g
];

m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_46mk286a9b51zt4aweshvcbzah0m); 

$m4is_csnk3yn47 = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();

$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE {$m4is_csnk3yn47} SET `value` = '%s' WHERE id = %d AND `appname` = '%s' AND `fieldname` = '%s'; ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_v4beyw7zqhr3, $m4is_wte2qk9hdk1zj7);
$m4is_hartbe843crydzh = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_pcb5ffn5nrn( $this->m4is_vd3qpw0vkdm(),
 'contact', $m4is_wte2qk9hdk1zj7, $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g );
$this->m4is_mz8ypkzzr4fxz8e42njma37v6ge02( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}


$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE %i SET `user_pass` = %s WHERE `ID` = %d" ;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 $wpdb->users, $m4is_kekgrkcv3q1fd6gkktzd, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$wpdb->query ( $m4is_5rbenkpt1v7xby2cknbs7 );
clean_user_cache($m4is_wk4dh1rnd3wmwvsggq51nhn87);

wp_cache_delete($m4is_wk4dh1rnd3wmwvsggq51nhn87, 'users');
wp_cache_delete($m4is_mr4hnyh6fa0p9sm0m8wfs1, 'userlogins');
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'id',
 $m4is_wk4dh1rnd3wmwvsggq51nhn87);
$this->disable_login_redirect = true;
if ( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 && $m4is_wk4dh1rnd3wmwvsggq51nhn87 == $this->m4is_vd3qpw0vkdm() ) {
wp_clear_auth_cookie();

wp_set_current_user( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
wp_set_auth_cookie( $m4is_wk4dh1rnd3wmwvsggq51nhn87, true, false );
}
$this->disable_login_redirect = false;

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( $m4is_wk4dh1rnd3wmwvsggq51nhn87);
return true;
}

public function m4is_d4hrfy3cjzb3y58yrjedq69fqd958dp( $m4is_kw23kqxbesd8dvhkn = false,
 $m4is_w35cr05wpqe40sv = false ) {
$m4is_w35cr05wpqe40sv = $m4is_w35cr05wpqe40sv ? $m4is_w35cr05wpqe40sv : $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'password_strength', 0);
$m4is_kw23kqxbesd8dvhkn = $m4is_kw23kqxbesd8dvhkn ? $m4is_kw23kqxbesd8dvhkn : $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'min_password_length', 8);
$m4is_wte2qk9hdk1zj7 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'password_field', 'Password');

if ( $m4is_w35cr05wpqe40sv < 5 ) {
if ($m4is_kw23kqxbesd8dvhkn < 6) {
$m4is_kw23kqxbesd8dvhkn = 6;
}
if ( $m4is_wte2qk9hdk1zj7 == 'Password' && $m4is_kw23kqxbesd8dvhkn > 20 ) {
$m4is_kw23kqxbesd8dvhkn = 20;

}
$m4is_gzq944nh0sd8he6n95rtvwa2 = 'aeuy';
$m4is_d7vpj5fn9mp87gwf6frf2ysmj48kk = 'bdghjmnpqrstvz';
$m4is_m7b1e9dcg7d = '';
$m4is_2kgbpx0pwhn7zc6kgf2xn = '';

if ($m4is_w35cr05wpqe40sv > 0) {
$m4is_d7vpj5fn9mp87gwf6frf2ysmj48kk .= 'BDGHJLMNPQRSTVWXZ';
}
if ($m4is_w35cr05wpqe40sv > 1) {
$m4is_gzq944nh0sd8he6n95rtvwa2 .= "AEUY";

}
if ($m4is_w35cr05wpqe40sv > 2) {

$m4is_2kgbpx0pwhn7zc6kgf2xn = '23456789';
}
if ($m4is_w35cr05wpqe40sv > 3) {

$m4is_m7b1e9dcg7d = '@#$%';

}
$m4is_w35cr05wpqe40sv = max($m4is_w35cr05wpqe40sv, 2);
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = '';
$m4is_zehfsnszf8 = time() % $m4is_w35cr05wpqe40sv;

for ($i = 0; $i < $m4is_kw23kqxbesd8dvhkn; $i++) {
$m4is_zehfsnszf8 = mt_rand(1, 100) % $m4is_w35cr05wpqe40sv;
if ($m4is_zehfsnszf8 == 0) {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g .= $m4is_d7vpj5fn9mp87gwf6frf2ysmj48kk[(rand() % strlen($m4is_d7vpj5fn9mp87gwf6frf2ysmj48kk) )];


} elseif ($m4is_zehfsnszf8 == 1) {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g .= $m4is_gzq944nh0sd8he6n95rtvwa2[(rand() % strlen($m4is_gzq944nh0sd8he6n95rtvwa2) )];


} elseif ($m4is_zehfsnszf8 == 2 && $m4is_w35cr05wpqe40sv > 2) {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g .= $m4is_2kgbpx0pwhn7zc6kgf2xn[(rand() % strlen($m4is_2kgbpx0pwhn7zc6kgf2xn) )];


} elseif ($m4is_zehfsnszf8 == 3 && $m4is_w35cr05wpqe40sv > 3) {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g .= $m4is_m7b1e9dcg7d[(rand() % strlen($m4is_m7b1e9dcg7d) )];


}
}
}
else {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = $this->m4is_srf458wapr3nqg9(null, $m4is_kw23kqxbesd8dvhkn, null, null);
}
return $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g;

}





public function m4is_srf458wapr3nqg9( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g, $m4is_kw23kqxbesd8dvhkn = 0, $m4is_f61qz7dd = '',
 $m4is_m3wx1qtn4y = '' ) {
global $wpdb;
$m4is_kw23kqxbesd8dvhkn = empty( $m4is_kw23kqxbesd8dvhkn ) ? $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'min_password_length' ) : $m4is_kw23kqxbesd8dvhkn;
if ($m4is_kw23kqxbesd8dvhkn < 20) {
$m4is_w35cr05wpqe40sv = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'password_strength');
$m4is_wte2qk9hdk1zj7 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'password_field');
if ($m4is_w35cr05wpqe40sv == 5 || $m4is_w35cr05wpqe40sv == 6 && $m4is_wte2qk9hdk1zj7 !== 'Password') {
if ($m4is_wte2qk9hdk1zj7 !== 'Password') {
if ($m4is_w35cr05wpqe40sv == 5) {
$m4is_kw23kqxbesd8dvhkn = 4;

}
elseif ($m4is_w35cr05wpqe40sv == 6) {
$m4is_kw23kqxbesd8dvhkn = 5;
}
$m4is_81xq22zphx = [];
$m4is_n0czvw8s3m = false;
$m4is_by6hsf74gtfhwtyzrtyyy8np = get_option( 'memberium/database/words',
 0 );
if ($m4is_by6hsf74gtfhwtyzrtyyy8np > 1000) {
while (count($m4is_81xq22zphx) < $m4is_kw23kqxbesd8dvhkn) {
$m4is_q3d2d5mz1khcz95qg7adsz = mt_rand(1,
 $m4is_by6hsf74gtfhwtyzrtyyy8np);
$m4is_k7p8pmxsbkqrje3y20 = m4is_s5vhbv6kzrqbaesnfd8w1pvjycp7w::m4is_0sje4ak2();
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare("SELECT `word` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `id` = %d ",
 $m4is_q3d2d5mz1khcz95qg7adsz);
$m4is_8yaw2dxke5mybzkhqx57 = (string) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
if ( mt_rand( 1,
 100 ) > 50 ) {
$m4is_8yaw2dxke5mybzkhqx57 = ucwords($m4is_8yaw2dxke5mybzkhqx57);
}
if ( $m4is_n0czvw8s3m == false && mt_rand( 1, 100 ) > 80 ) {
$m4is_8yaw2dxke5mybzkhqx57 = mt_rand(1,
 100) < 51 ? $m4is_8yaw2dxke5mybzkhqx57 . mt_rand(1, 99) : mt_rand(1, 99) . $m4is_8yaw2dxke5mybzkhqx57;
$m4is_n0czvw8s3m = true;
}
if (! empty($m4is_8yaw2dxke5mybzkhqx57) && ! in_array($m4is_8yaw2dxke5mybzkhqx57,
 $m4is_81xq22zphx)) {
$m4is_81xq22zphx[] = $m4is_8yaw2dxke5mybzkhqx57;
}
}
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = implode('-', $m4is_81xq22zphx);

}
}
}
}
return $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g;
}
public function m4is_n6n5vqxxghgbk60nqz6dwds8p( int $m4is_3zc27e3pcg991c901dnh1zk ) : string {
global $wpdb;

$m4is_81xq22zphx = [];
$m4is_n0czvw8s3m = false;
$m4is_by6hsf74gtfhwtyzrtyyy8np = get_option( 'memberium/database/words', 0 );
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = '';

if ( $m4is_by6hsf74gtfhwtyzrtyyy8np > 1000 ) {
while ( count( $m4is_81xq22zphx ) < $m4is_3zc27e3pcg991c901dnh1zk) {
$m4is_q3d2d5mz1khcz95qg7adsz = mt_rand(1,
 $m4is_by6hsf74gtfhwtyzrtyyy8np);
$m4is_k7p8pmxsbkqrje3y20 = m4is_s5vhbv6kzrqbaesnfd8w1pvjycp7w::m4is_0sje4ak2();
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `word` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `id` = %d ",
 $m4is_q3d2d5mz1khcz95qg7adsz );
$m4is_8yaw2dxke5mybzkhqx57 = (string) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
if ( mt_rand( 1,
 100 ) > 50 ) {
$m4is_8yaw2dxke5mybzkhqx57 = ucwords($m4is_8yaw2dxke5mybzkhqx57);
}
if ( $m4is_n0czvw8s3m == false && mt_rand( 1, 100 ) > 80 ) {
$m4is_8yaw2dxke5mybzkhqx57 = mt_rand(1,
 100) < 51 ? $m4is_8yaw2dxke5mybzkhqx57 . mt_rand(1, 99) : mt_rand(1, 99) . $m4is_8yaw2dxke5mybzkhqx57;
$m4is_n0czvw8s3m = true;
}
if (! empty($m4is_8yaw2dxke5mybzkhqx57) && ! in_array($m4is_8yaw2dxke5mybzkhqx57,
 $m4is_81xq22zphx)) {
$m4is_81xq22zphx[] = $m4is_8yaw2dxke5mybzkhqx57;
}
}
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = implode('-', $m4is_81xq22zphx);

}
return $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g;
}



public function m4is_799rb1qtbarhq4g00yhfttadxrgh0w( array $m4is_g61yzqs7ecta0xztr70d7v ) : string {
$m4is_n7x0afpz = [
'contact' =>
 [],
'user_id' => 0,
'user' => false,
'contact_id' => 0,
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args ($m4is_g61yzqs7ecta0xztr70d7v,
 $m4is_n7x0afpz );
$m4is_e7mtcqme5gbze92qvbaf = '';
if ( ! empty( $m4is_g61yzqs7ecta0xztr70d7v['contact_id'] ) ) {
$m4is_g61yzqs7ecta0xztr70d7v['contact'] = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_g61yzqs7ecta0xztr70d7v['contact_id'] );

}
$m4is_g61yzqs7ecta0xztr70d7v['contact'] = array_change_key_case( $m4is_g61yzqs7ecta0xztr70d7v['contact'], CASE_LOWER );
if ( ! empty( $m4is_g61yzqs7ecta0xztr70d7v['user_id'] ) ) {
$m4is_g61yzqs7ecta0xztr70d7v['user'] = get_user_by( 'id',
 $m4is_g61yzqs7ecta0xztr70d7v['user_id'] );
}
if ( $m4is_g61yzqs7ecta0xztr70d7v['user'] ) {
$m4is_e7mtcqme5gbze92qvbaf = $m4is_g61yzqs7ecta0xztr70d7v['user']->display_name;

}
else {
$m4is_e7mtcqme5gbze92qvbaf = '';
}
$m4is_r2g10s87x43pdk8y5cq9hw801g = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'displayname_format' );
if ( empty( $m4is_r2g10s87x43pdk8y5cq9hw801g ) ) {
$m4is_33jww6tmv6j0nm83z = empty( $m4is_g61yzqs7ecta0xztr70d7v['contact']['firstname'] ) ? '' : trim( $m4is_g61yzqs7ecta0xztr70d7v['contact']['firstname'] );

$m4is_0e0k81q8npxekdhac6288bvcx50bxe72 = empty( $m4is_g61yzqs7ecta0xztr70d7v['contact']['lastname'] ) ? '' : trim( $m4is_g61yzqs7ecta0xztr70d7v['contact']['lastname'] );

$m4is_r2g10s87x43pdk8y5cq9hw801g = trim( $m4is_33jww6tmv6j0nm83z . ' ' . $m4is_0e0k81q8npxekdhac6288bvcx50bxe72 );
}
if ( empty( $m4is_e7mtcqme5gbze92qvbaf ) || empty( $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'disable_displayname_update' ) ) ) {
$m4is_e7mtcqme5gbze92qvbaf = trim( (string) preg_replace_callback( '|({{contact\.(.*)}})|U',
function( $m4is_e200zw8mj7k8m1hbx3m ) use ( $m4is_g61yzqs7ecta0xztr70d7v ) {
$m4is_j8j55t8dz79m7 = strtolower( $m4is_e200zw8mj7k8m1hbx3m[2] );

if ( isset( $m4is_g61yzqs7ecta0xztr70d7v['contact'][$m4is_j8j55t8dz79m7] ) ) {
$m4is_hartbe843crydzh = $m4is_g61yzqs7ecta0xztr70d7v['contact'][$m4is_j8j55t8dz79m7];

}
else {
$m4is_hartbe843crydzh = '';
}
return htmlspecialchars( $m4is_hartbe843crydzh );
}, $m4is_r2g10s87x43pdk8y5cq9hw801g)
);
}
return (string) $m4is_e7mtcqme5gbze92qvbaf;

}
private function m4is_7pvbsqgxxete9vy4qrdvx1znq( WP_User $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) : WP_User {
$m4is_7kwstyma = is_array( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->roles ) ? array_filter( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->roles ) : [];

if ( ! empty( $m4is_7kwstyma ) ) {
return $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65;
}
$m4is_v0btf7mv632851tp3bp = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login;

$m4is_pc4kj0wscw812k7e02sshv95 = get_option( 'default_role' );
error_log( sprintf( "Memberium: [warning] User '%s' has no role assigned.",
 $m4is_v0btf7mv632851tp3bp ) );
if ( ! empty( $m4is_pc4kj0wscw812k7e02sshv95 ) ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->set_role( $m4is_pc4kj0wscw812k7e02sshv95 );

error_log( sprintf( "Memberium: [info] Assigned Default Role of '%s' to user '%s'.", $m4is_pc4kj0wscw812k7e02sshv95, $m4is_v0btf7mv632851tp3bp ) );

}
else {
error_log( sprintf( "Memberium: [warning] No Default Role Set for user '%s'.", $m4is_v0btf7mv632851tp3bp ) );
}
return $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65;

}



public function m4is_f54f6mxb3zka1m( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, string $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = '') {
global $wpdb;


$m4is_cyg7rcfhzagmm5v = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, false, true );

$m4is_akd4cjvbhtckz56 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'local_auth_only' );
$m4is_wte2qk9hdk1zj7 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field', 'Password' );
if ( ! is_array( $m4is_cyg7rcfhzagmm5v ) ) {
return false;
}
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = $m4is_cyg7rcfhzagmm5v['Email'] ?? '';

$m4is_zxwt8y3szyy1aenkh = $m4is_cyg7rcfhzagmm5v['Email'] ?? '';
if ( empty( $m4is_zxwt8y3szyy1aenkh ) ) {
return false;
}
if ( empty( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g ) ) {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = empty( $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] ) ? '' : $m4is_cyg7rcfhzagmm5v[ $m4is_wte2qk9hdk1zj7 ];

}
$m4is_3ag84vxwqaw0a7hxjf8xc = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'disable_displayname_update' );
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = apply_filters( 'memberium_wordpress_username',
 $m4is_mr4hnyh6fa0p9sm0m8wfs1, $m4is_cyg7rcfhzagmm5v );
$m4is_jjt5r3pv5jeskja = 94;

if ( empty( $m4is_akd4cjvbhtckz56 ) ) {
if ( empty( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g ) ) {
return false;

}
}

$m4is_fgm224c3jj30ymf9gdma8f = (int) m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );


if ( ! $m4is_fgm224c3jj30ymf9gdma8f ) {
$m4is_fgm224c3jj30ymf9gdma8f = (int) $this->m4is_b4nykypesd( $m4is_mr4hnyh6fa0p9sm0m8wfs1 );

}

if ( $m4is_fgm224c3jj30ymf9gdma8f ) {
$m4is_da9a082104kffcaa94z9d = [];
$m4is_8m1afes2n2ceap = get_user_by( 'id', $m4is_fgm224c3jj30ymf9gdma8f );

if (! $m4is_8m1afes2n2ceap instanceof WP_User) {
return false;
}
if ( is_object( $m4is_8m1afes2n2ceap ) && strtolower( $m4is_8m1afes2n2ceap->user_email ) == strtolower( $m4is_cyg7rcfhzagmm5v['Email'] ) ) {
$m4is_cyg7rcfhzagmm5v['Email'] = $m4is_8m1afes2n2ceap->user_email;

}
$m4is_8pa5ndgty = [];
$m4is_8pa5ndgty['display_name'] = $m4is_8m1afes2n2ceap->display_name;
$m4is_8pa5ndgty['first_name'] = $m4is_8m1afes2n2ceap->first_name;

$m4is_8pa5ndgty['last_name'] = $m4is_8m1afes2n2ceap->last_name;
$m4is_8pa5ndgty['nickname'] = $m4is_8m1afes2n2ceap->nickname;
$m4is_8pa5ndgty['user_email'] = $m4is_8m1afes2n2ceap->user_email;

$m4is_8pa5ndgty['user_nicename'] = $m4is_8m1afes2n2ceap->user_nicename;
$m4is_8pa5ndgty['user_url'] = wp_specialchars_decode( $m4is_8m1afes2n2ceap->user_url );

$m4is_8pa5ndgty['user_url'] = $m4is_8m1afes2n2ceap->user_url;

$m4is_axm1thxjjd6wambw9w2c = [];
if ( ! empty( $m4is_cyg7rcfhzagmm5v['FirstName'] ) && $m4is_cyg7rcfhzagmm5v['FirstName'] <> $m4is_8m1afes2n2ceap->first_name ) {
$m4is_axm1thxjjd6wambw9w2c['first_name'] = trim( $m4is_cyg7rcfhzagmm5v['FirstName'] );

}
if ( ! empty( $m4is_cyg7rcfhzagmm5v['LastName'] ) && $m4is_cyg7rcfhzagmm5v['LastName'] <> $m4is_8m1afes2n2ceap->last_name ) {
$m4is_axm1thxjjd6wambw9w2c['last_name'] = trim( $m4is_cyg7rcfhzagmm5v['LastName'] );

}
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = substr( esc_html( $m4is_cyg7rcfhzagmm5v['Website'] ?? '' ), 0, 100);
if ( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq <> $m4is_8m1afes2n2ceap->user_url ) {
$m4is_axm1thxjjd6wambw9w2c['Website'] = trim( $m4is_cyg7rcfhzagmm5v['Website'] );

}


$m4is_axm1thxjjd6wambw9w2c['user_email'] = strtolower( trim( $m4is_cyg7rcfhzagmm5v['Email'] ) );


if ( empty( $m4is_3ag84vxwqaw0a7hxjf8xc ) ) {
$m4is_g61yzqs7ecta0xztr70d7v = [
'contact' =>
 $m4is_cyg7rcfhzagmm5v,
'user_id' => $m4is_fgm224c3jj30ymf9gdma8f,
];
$m4is_axm1thxjjd6wambw9w2c['display_name'] = (string) apply_filters( 'memberium/wpuser/display_name',
 $this->m4is_799rb1qtbarhq4g00yhfttadxrgh0w( $m4is_g61yzqs7ecta0xztr70d7v ), $m4is_cyg7rcfhzagmm5v );
$m4is_axm1thxjjd6wambw9w2c['nickname'] = (string) apply_filters( 'memberium/wpuser/nickname',
 (string) $m4is_8pa5ndgty['display_name'], $m4is_cyg7rcfhzagmm5v );
}

if ($this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'enable_slug_update', false) ) {
$m4is_axm1thxjjd6wambw9w2c['display_name'] = $m4is_axm1thxjjd6wambw9w2c['display_name'] ?? '';
$m4is_axm1thxjjd6wambw9w2c['user_nicename'] = apply_filters( 'memberium/wpuser/nicename',
 sanitize_title( (string) $m4is_axm1thxjjd6wambw9w2c['display_name'] ), $m4is_cyg7rcfhzagmm5v );
}
if ( empty( $m4is_akd4cjvbhtckz56 ) ) {
$m4is_gvzjxvhat68fm9jek97hvnxbw9e9 = isset( $_POST['pwd'] ) ? $_POST['pwd'] : '';

$m4is_gvzjxvhat68fm9jek97hvnxbw9e9 = isset( $_POST['password'] ) && isset( $_POST['woocommerce-login-nonce'] ) ? $_POST['password'] : $m4is_gvzjxvhat68fm9jek97hvnxbw9e9;

if ( ! empty( trim( $m4is_gvzjxvhat68fm9jek97hvnxbw9e9 ) ) ) {
if ( in_array( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g, ['', 'PASSWORD_PLACEHOLDER'] ) ) {
if ( ! empty( $m4is_gvzjxvhat68fm9jek97hvnxbw9e9 ) ) {
if ( ( ! @wp_check_password( strval( $m4is_gvzjxvhat68fm9jek97hvnxbw9e9 ),
 strval( $m4is_8m1afes2n2ceap->data->user_pass ), (int) $m4is_fgm224c3jj30ymf9gdma8f ) ) ) {
$m4is_da9a082104kffcaa94z9d['user_pass'] = $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7];

}
}
}
else {
if ( ( ! @wp_check_password( strval( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g ), strval( $m4is_8m1afes2n2ceap->data->user_pass ),
 (int) $m4is_fgm224c3jj30ymf9gdma8f ) ) ) {
$m4is_da9a082104kffcaa94z9d['user_pass'] = $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7];

}
}
}
}
foreach ( $m4is_axm1thxjjd6wambw9w2c as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( isset( $m4is_8pa5ndgty[$m4is_j8j55t8dz79m7] ) && $m4is_8pa5ndgty[$m4is_j8j55t8dz79m7] !== $m4is_rqxytszfq5v6syth1csqqxvy5 && ! empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ) {
$m4is_da9a082104kffcaa94z9d[$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
}
if (! empty($m4is_da9a082104kffcaa94z9d)) {
$m4is_da9a082104kffcaa94z9d['ID'] = $m4is_fgm224c3jj30ymf9gdma8f; 
$this->m4is_z3a9w5p26hzy494qq03phpeagexts( true );

$this->m4is_jz9ygsb79rajnhabv9( true );
add_filter( 'send_password_change_email', '__return_false' );
wp_update_user( $m4is_da9a082104kffcaa94z9d );

remove_filter('send_password_change_email', '__return_false' );

if (stripos($m4is_8m1afes2n2ceap->user_login, '@') !== false) {
$m4is_h9hehmppbpsmhbwra = sanitize_user($m4is_cyg7rcfhzagmm5v['Email'],
 true);
if ($m4is_8m1afes2n2ceap->user_login <> $m4is_h9hehmppbpsmhbwra) {
$this->m4is_m6bkwvxq404hwh8zzbkjf23r3m($m4is_fgm224c3jj30ymf9gdma8f,
 $m4is_h9hehmppbpsmhbwra);
}
}
}
}
else {

$m4is_da9a082104kffcaa94z9d = [];
$m4is_da9a082104kffcaa94z9d['user_pass'] = $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g;


$m4is_da9a082104kffcaa94z9d['user_email'] = strtolower($m4is_cyg7rcfhzagmm5v['Email']);
$m4is_da9a082104kffcaa94z9d['first_name'] = isset($m4is_cyg7rcfhzagmm5v['FirstName']) ? $m4is_cyg7rcfhzagmm5v['FirstName'] : '';

$m4is_da9a082104kffcaa94z9d['last_name'] = isset($m4is_cyg7rcfhzagmm5v['LastName']) ? $m4is_cyg7rcfhzagmm5v['LastName'] : '';
$m4is_da9a082104kffcaa94z9d['user_url'] = isset($m4is_cyg7rcfhzagmm5v['Website']) ? $m4is_cyg7rcfhzagmm5v['Website'] : '';

$m4is_g61yzqs7ecta0xztr70d7v = [
'contact' => $m4is_cyg7rcfhzagmm5v,
];
$m4is_da9a082104kffcaa94z9d['display_name'] = apply_filters( 'memberium/wpuser/display_name',
 (string) $this->m4is_799rb1qtbarhq4g00yhfttadxrgh0w($m4is_g61yzqs7ecta0xztr70d7v), $m4is_cyg7rcfhzagmm5v);
$m4is_da9a082104kffcaa94z9d['nickname'] = apply_filters( 'memberium/wpuser/nickname',
 (string) $m4is_da9a082104kffcaa94z9d['display_name'], $m4is_cyg7rcfhzagmm5v);
$m4is_da9a082104kffcaa94z9d['user_login'] = apply_filters( 'memberium/wpuser/login',
 (string) $m4is_mr4hnyh6fa0p9sm0m8wfs1, $m4is_cyg7rcfhzagmm5v);



$this->m4is_z3a9w5p26hzy494qq03phpeagexts(true);
$m4is_fgm224c3jj30ymf9gdma8f = (int) wp_insert_user( $m4is_da9a082104kffcaa94z9d );



if ( function_exists( 'WPCW_actions_users_newUserCreated' ) ) {
WPCW_actions_users_newUserCreated( $m4is_fgm224c3jj30ymf9gdma8f );

}
$m4is_8m1afes2n2ceap = get_user_by( 'id', $m4is_fgm224c3jj30ymf9gdma8f );
}
if ( is_a( $m4is_8m1afes2n2ceap, 'WP_user' ) ) {
$m4is_8m1afes2n2ceap = $this->m4is_7pvbsqgxxete9vy4qrdvx1znq( $m4is_8m1afes2n2ceap );

}
clean_user_cache( $m4is_fgm224c3jj30ymf9gdma8f );
$this->m4is_5vtbryfazyjf979ttdx0kp( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_fgm224c3jj30ymf9gdma8f );

$this->m4is_z3a9w5p26hzy494qq03phpeagexts(false);
$this->m4is_jz9ygsb79rajnhabv9( false );
$this->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

return $m4is_fgm224c3jj30ymf9gdma8f;
}

public function m4is_m6bkwvxq404hwh8zzbkjf23r3m( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, string $m4is_mr4hnyh6fa0p9sm0m8wfs1 ) : bool {
global $wpdb;

if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'manage_options' ) ) {
return false;
}
$m4is_h9hehmppbpsmhbwra = sanitize_user( $m4is_mr4hnyh6fa0p9sm0m8wfs1,
 true );
$m4is_nzyqn1sgrfvnvwbhj02drygsgms6 = get_user_by( 'login', $m4is_h9hehmppbpsmhbwra );
if ( empty($m4is_h9hehmppbpsmhbwra) || $m4is_nzyqn1sgrfvnvwbhj02drygsgms6 ) {
return false;

}
$m4is_8m1afes2n2ceap = get_user_by( 'ID', $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
if (! $m4is_8m1afes2n2ceap instanceof WP_User) {
return false;

}
if ( $m4is_h9hehmppbpsmhbwra === $m4is_8m1afes2n2ceap->user_login ) {
return false;
}
$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE %i SET `user_login` = %s WHERE `ID` = %d";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $wpdb->users, $m4is_h9hehmppbpsmhbwra, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
clean_user_cache( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
return true;
}

function m4is_dv17s8ptrrd4( $m4is_mr4hnyh6fa0p9sm0m8wfs1,
 $m4is_yac0ydbhpg1 = false) {
global $wpdb;
$m4is_csx0y36xw = defined( 'MEMBERIUM_DEBUG' ) && constant( 'MEMBERIUM_DEBUG' );
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = stripslashes( $m4is_mr4hnyh6fa0p9sm0m8wfs1 );

$m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1 = [
'Email',
'EmailAddress2',
'EmailAddress3'
];
if ( empty( $m4is_mr4hnyh6fa0p9sm0m8wfs1 ) ) {
return;

}
if ( $this->m4is_mrkvj2wz7zfycb1t2fqqk0jw7 == 1 ) {
if ( $m4is_csx0y36xw ) m4is_d1yhzb308y::m4is_4y97spaegmw0(__FILE__, __FUNCTION__,
 __LINE__, 'Contact Cache Already Refreshed, Returning');
return;
}
$m4is_th384m7gvm775j7 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'username_field' );
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'login', $m4is_mr4hnyh6fa0p9sm0m8wfs1);
if ( ! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 && ! strpos( $m4is_mr4hnyh6fa0p9sm0m8wfs1,
 '@' ) && in_array( $m4is_th384m7gvm775j7, $m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1 ) ) {
if (is_a($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'WP_User') ) {
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->data->user_email;
if ($m4is_csx0y36xw) m4is_d1yhzb308y::m4is_4y97spaegmw0(__FILE__,
 __FUNCTION__, __LINE__, 'Remapped non-email username', $m4is_mr4hnyh6fa0p9sm0m8wfs1);
}
}
if (empty($m4is_mr4hnyh6fa0p9sm0m8wfs1) ) {
return;

}
if (! $m4is_yac0ydbhpg1) {
$m4is_yac0ydbhpg1 = (int) $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'max_contact_age');

}
$m4is_7b2h2ragqbjt5c28vgnqkddb2nbx6vv = time() - $m4is_yac0ydbhpg1;
$m4is_qg2yw00j71q090r = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();

$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');
$m4is_rdtjkycmdjfb = 0;
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = $this->m4is_7pydxk6x9xm95fc3vfq3gnqxm5pemadf($m4is_mr4hnyh6fa0p9sm0m8wfs1);

if ($m4is_yac0ydbhpg1) {
$m4is_5rbenkpt1v7xby2cknbs7 = "
			SELECT
			COUNT(`{$m4is_qg2yw00j71q090r}`.`id`)
			FROM
			`{$m4is_qg2yw00j71q090r}`,
			`{$m4is_qg2yw00j71q090r}` as `{$m4is_qg2yw00j71q090r}_1`
			WHERE	`{$m4is_qg2yw00j71q090r}`.`appname`     = %s
			AND 	`{$m4is_qg2yw00j71q090r}`.`fieldname`   = %s
			AND		`{$m4is_qg2yw00j71q090r}`.`value`       = %s
			AND		`{$m4is_qg2yw00j71q090r}_1`.`id`        = `{$m4is_qg2yw00j71q090r}`.`id`
			AND		`{$m4is_qg2yw00j71q090r}_1`.`fieldname` = '!LastUpdated'
			AND		`{$m4is_qg2yw00j71q090r}_1`.`value`     > %d";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_v4beyw7zqhr3, $m4is_th384m7gvm775j7, $m4is_mr4hnyh6fa0p9sm0m8wfs1,
 $m4is_7b2h2ragqbjt5c28vgnqkddb2nbx6vv);
$m4is_rdtjkycmdjfb = (int) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
}
if ($m4is_rdtjkycmdjfb == 0) {
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n('Contact',
 true);
$m4is_j34bmw9dcjexfj1qpz = [
( ($m4is_th384m7gvm775j7) ? $m4is_th384m7gvm775j7 : 'Email') => $m4is_mr4hnyh6fa0p9sm0m8wfs1,
];


if (is_object($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) && $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID > 0) {
}
$m4is_er73m18j35gqvx95t7d34y7 = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj('Contact',
 1000, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', true );
if (is_array($m4is_er73m18j35gqvx95t7d34y7) && ! empty($m4is_er73m18j35gqvx95t7d34y7) ) {
$m4is_3qwaf6xd03657aas = [];

foreach($m4is_er73m18j35gqvx95t7d34y7 as $m4is_cyg7rcfhzagmm5v) {
if (isset($m4is_cyg7rcfhzagmm5v['Id']) ) {
$m4is_3qwaf6xd03657aas[] = $m4is_cyg7rcfhzagmm5v['Id'];

}
}
$m4is_3qwaf6xd03657aas = implode(',', $m4is_3qwaf6xd03657aas);
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id`
				FROM`{$m4is_qg2yw00j71q090r}`
				WHERE `{$m4is_qg2yw00j71q090r}`.`appname` = %s
				AND   `{$m4is_qg2yw00j71q090r}`.`fieldname` = %s
				AND   `{$m4is_qg2yw00j71q090r}`.`value` = %s
				AND   `{$m4is_qg2yw00j71q090r}`.`id` NOT IN ({$m4is_3qwaf6xd03657aas}) ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_v4beyw7zqhr3, $m4is_th384m7gvm775j7, $m4is_mr4hnyh6fa0p9sm0m8wfs1);

$m4is_x0vrpbk6861vmwx9maq08ra9 = $wpdb->get_col($m4is_5rbenkpt1v7xby2cknbs7);
if ($m4is_csx0y36xw) m4is_d1yhzb308y::m4is_4y97spaegmw0(__FILE__,
 __FUNCTION__, __LINE__, 'Stale Contacts ', $m4is_x0vrpbk6861vmwx9maq08ra9);
if (is_array($m4is_x0vrpbk6861vmwx9maq08ra9) && ! empty($m4is_x0vrpbk6861vmwx9maq08ra9) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `{$m4is_qg2yw00j71q090r}`
					WHERE `{$m4is_qg2yw00j71q090r}`.`appname` = %s
					AND `{$m4is_qg2yw00j71q090r}`.`id` IN (" . implode(',',
 $m4is_x0vrpbk6861vmwx9maq08ra9) . "); ";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_v4beyw7zqhr3,
 $m4is_th384m7gvm775j7);
$m4is_hartbe843crydzh = $wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
if ($m4is_csx0y36xw) m4is_d1yhzb308y::m4is_4y97spaegmw0(__FILE__,
 __FUNCTION__, __LINE__, 'Deleting Stale Contacts ', $m4is_hartbe843crydzh);
}
foreach ($m4is_er73m18j35gqvx95t7d34y7 as $m4is_cyg7rcfhzagmm5v) {
$this->m4is_bpzt4p8q92db7($m4is_cyg7rcfhzagmm5v);

}
unset($m4is_5rbenkpt1v7xby2cknbs7, $m4is_x0vrpbk6861vmwx9maq08ra9, $m4is_3qwaf6xd03657aas);
if (count($m4is_er73m18j35gqvx95t7d34y7) > 0) {
$this->m4is_mrkvj2wz7zfycb1t2fqqk0jw7 = 1;

}
}
}
else {

}
if ($m4is_csx0y36xw) m4is_d1yhzb308y::m4is_4y97spaegmw0(__FILE__, __FUNCTION__, __LINE__, 'Leaving ' . __FUNCTION__);

}

public function m4is_06a6ggsb0zg8pv1t4852qe( $m4is_mr4hnyh6fa0p9sm0m8wfs1 = '' ) : int {
global $wpdb;
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = strtolower( trim( stripslashes( $m4is_mr4hnyh6fa0p9sm0m8wfs1 ) ) );

if ( empty( $m4is_mr4hnyh6fa0p9sm0m8wfs1 ) ) {
return 0;
}
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email', $m4is_mr4hnyh6fa0p9sm0m8wfs1 ) or get_user_by( 'login',
 $m4is_mr4hnyh6fa0p9sm0m8wfs1 );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_User' ) ? $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID : 0;

if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'manage_options' ) ) {
return 0;
}
if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return 0;

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
}
$m4is_csx0y36xw = defined( 'MEMBERIUM_DEBUG' ) && constant( 'MEMBERIUM_DEBUG' );

$m4is_ngmfrq2d72cwethyhpqm56mq600 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b();
$m4is_qg2yw00j71q090r = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();

$m4is_7b2h2ragqbjt5c28vgnqkddb2nbx6vv = intval( time() - $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'max_contact_age' ) ) - 10;

$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r( 'appname' );
$m4is_th384m7gvm775j7 ='Email'; 
$m4is_wte2qk9hdk1zj7 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' );
$m4is_8ysqtcvttv = get_user_by( 'email', $m4is_mr4hnyh6fa0p9sm0m8wfs1 );
if (! $m4is_8ysqtcvttv) {
$m4is_8ysqtcvttv = get_user_by( 'login',
 $m4is_mr4hnyh6fa0p9sm0m8wfs1 );
}
if ( is_object( $m4is_8ysqtcvttv ) && user_can( $m4is_8ysqtcvttv, 'manage_options' ) ) {
return 0;

}
$m4is_fgm224c3jj30ymf9gdma8f = is_a( $m4is_8ysqtcvttv, 'WP_User' ) ? $m4is_8ysqtcvttv->ID : 0;
$m4is_94jmm27eq4mv9bkzq17wb154jabdad = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_fgm224c3jj30ymf9gdma8f );

if ( $m4is_94jmm27eq4mv9bkzq17wb154jabdad ) {
$m4is_7fersckhvk1jktr7y8yvxebm9vwxrm = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_94jmm27eq4mv9bkzq17wb154jabdad );

if ( ! empty( $m4is_7fersckhvk1jktr7y8yvxebm9vwxrm['id'] ) && $m4is_7fersckhvk1jktr7y8yvxebm9vwxrm['id'] == $m4is_94jmm27eq4mv9bkzq17wb154jabdad ) {
return $m4is_94jmm27eq4mv9bkzq17wb154jabdad;

}
}



$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',
'Email',
$m4is_wte2qk9hdk1zj7,
]; 
$m4is_j34bmw9dcjexfj1qpz = [
'Email' => $m4is_mr4hnyh6fa0p9sm0m8wfs1,


];
$m4is_er73m18j35gqvx95t7d34y7 = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj( 'Contact', 1, 0, $m4is_j34bmw9dcjexfj1qpz,
 $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', true );
$m4is_gxvyqh49dpm2xcqyxnby3j9pn = 0;

if (! is_array($m4is_er73m18j35gqvx95t7d34y7) ) {
if ($m4is_csx0y36xw) m4is_d1yhzb308y::m4is_4y97spaegmw0(__FILE__,
 __FUNCTION__, __LINE__, 'Error = ', $m4is_er73m18j35gqvx95t7d34y7);
if ($m4is_csx0y36xw) m4is_d1yhzb308y::m4is_4y97spaegmw0(__FILE__,
 __FUNCTION__, __LINE__, 'Exiting = ' . __FUNCTION__ . ', Returning ', 0);
return 0;
}

if (! empty($this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'local_auth_only') ) ) {
if ($m4is_csx0y36xw) m4is_d1yhzb308y::m4is_4y97spaegmw0(__FILE__, __FUNCTION__, __LINE__, 'Returning = ',
 $m4is_er73m18j35gqvx95t7d34y7[0]['Id']);
return (int) $m4is_er73m18j35gqvx95t7d34y7[0]['Id'];
}


foreach($m4is_er73m18j35gqvx95t7d34y7 as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp =>
 $m4is_cyg7rcfhzagmm5v) {
if (! empty($m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7]) ) {
$m4is_gxvyqh49dpm2xcqyxnby3j9pn = (int) $m4is_cyg7rcfhzagmm5v['Id'];

break;
}
}
if ($m4is_csx0y36xw) m4is_d1yhzb308y::m4is_4y97spaegmw0(__FILE__, __FUNCTION__, __LINE__, 'Returning = ', $m4is_gxvyqh49dpm2xcqyxnby3j9pn);

return $m4is_gxvyqh49dpm2xcqyxnby3j9pn;
}
function m4is_7pydxk6x9xm95fc3vfq3gnqxm5pemadf( $m4is_mr4hnyh6fa0p9sm0m8wfs1 ) {
$m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1 = [
'Email',

'EmailAddress2',
'EmailAddress3'
];
if ( ! in_array( $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'username_field' ),
 $m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1 ) ) {
return $m4is_mr4hnyh6fa0p9sm0m8wfs1;
}
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email',
 $m4is_mr4hnyh6fa0p9sm0m8wfs1 ) || $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'login', $m4is_mr4hnyh6fa0p9sm0m8wfs1 );
if (is_a($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'WP_User') ) {
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->data->user_email;
}
else {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email',
 $m4is_mr4hnyh6fa0p9sm0m8wfs1);
if (is_a($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_User') ) {
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->data->user_email;

}
}
return $m4is_mr4hnyh6fa0p9sm0m8wfs1;
}
function m4is_20gcd48zxy6kz5vbx3ks201cnynd( $m4is_v0btf7mv632851tp3bp ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email',
 $m4is_v0btf7mv632851tp3bp );
if (! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'login',
 $m4is_v0btf7mv632851tp3bp);
}
return $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65;
}
function m4is_b4nykypesd($m4is_mr4hnyh6fa0p9sm0m8wfs1) {
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = strtolower(trim($m4is_mr4hnyh6fa0p9sm0m8wfs1));

$m4is_hartbe843crydzh = false;
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'login', $m4is_mr4hnyh6fa0p9sm0m8wfs1);
if (is_a($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'WP_User') && $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID > 0 ) {
$m4is_hartbe843crydzh = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;

}
else {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email', $m4is_mr4hnyh6fa0p9sm0m8wfs1);
if ( is_a($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'WP_User') && $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID > 0 ) {
$m4is_hartbe843crydzh = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;

}
}
return $m4is_hartbe843crydzh;
}

public function m4is_3mtg6vbzen6kxzzc9q2gc4g3dw( $m4is_mr4hnyh6fa0p9sm0m8wfs1, $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = '',
 $m4is_2asvf1njjbh6d6j25n = false) {


static $m4is_e200zw8mj7k8m1hbx3m = [];
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = stripslashes( $m4is_mr4hnyh6fa0p9sm0m8wfs1 );

$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = stripslashes( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g );
if (isset($m4is_e200zw8mj7k8m1hbx3m[$m4is_mr4hnyh6fa0p9sm0m8wfs1]) ) {
return $m4is_e200zw8mj7k8m1hbx3m[$m4is_mr4hnyh6fa0p9sm0m8wfs1];

}
global $wpdb;
if ($m4is_mr4hnyh6fa0p9sm0m8wfs1 == '') {
return false;
}
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = $this->m4is_7pydxk6x9xm95fc3vfq3gnqxm5pemadf($m4is_mr4hnyh6fa0p9sm0m8wfs1);

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_b4nykypesd($m4is_mr4hnyh6fa0p9sm0m8wfs1);
if ($this->m4is_1qbr5gs0jfsnf569vm930v() > 0 && $m4is_wk4dh1rnd3wmwvsggq51nhn87 == $this->m4is_vd3qpw0vkdm() ) {
return $this->m4is_1qbr5gs0jfsnf569vm930v();

}
$m4is_akd4cjvbhtckz56 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'local_auth_only', false);
if (! $m4is_wk4dh1rnd3wmwvsggq51nhn87 && $m4is_akd4cjvbhtckz56) {
return false;

}
else {
$m4is_49x929nabp5s = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_wk4dh1rnd3wmwvsggq51nhn87);
}
$m4is_ngmfrq2d72cwethyhpqm56mq600 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b();

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0;
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'id', $m4is_wk4dh1rnd3wmwvsggq51nhn87);

$m4is_th384m7gvm775j7 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'username_field');
$m4is_wte2qk9hdk1zj7 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'password_field');
$m4is_ptm8ta6jtxj74gjh25xw3 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'max_contact_age');

$m4is_qg2yw00j71q090r = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();

$m4is_7b2h2ragqbjt5c28vgnqkddb2nbx6vv = intval(time() - $m4is_ptm8ta6jtxj74gjh25xw3);
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');

if (! empty($m4is_akd4cjvbhtckz56) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "
			SELECT
			`c1`.`id`,
			'' as `password`,
			0 as `score`
			FROM
			`{$m4is_qg2yw00j71q090r}` as `c1`
			WHERE	`c1`.`appname` = '{$m4is_v4beyw7zqhr3}'
			AND 	`c1`.`fieldname` = '{$m4is_th384m7gvm775j7}'
			AND		`c1`.`value` = %s
			ORDER BY
			`c1`.`id` ASC";

}
else {
$m4is_5rbenkpt1v7xby2cknbs7 = "
			SELECT
			`c1`.`id`,
			`c2`.`value` as `password`,
			0 as `score`
			FROM
			`{$m4is_qg2yw00j71q090r}` as `c1`,
			`{$m4is_qg2yw00j71q090r}` as `c2`
			WHERE	`c1`.`appname` = '{$m4is_v4beyw7zqhr3}'
			AND 	`c1`.`fieldname` = '{$m4is_th384m7gvm775j7}'
			AND		`c1`.`value` = %s
			AND 	`c2`.`id` = `c1`.`id`
			AND 	`c2`.`appname` = '{$m4is_v4beyw7zqhr3}'
			AND 	`c2`.`fieldname` = '{$m4is_wte2qk9hdk1zj7}'
			ORDER BY
			`c1`.`id` ASC";

}
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, stripslashes($m4is_mr4hnyh6fa0p9sm0m8wfs1) );
$m4is_er73m18j35gqvx95t7d34y7 = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7,
 ARRAY_A);
if ($m4is_akd4cjvbhtckz56) {

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = isset($m4is_er73m18j35gqvx95t7d34y7[0]['id']) ? $m4is_er73m18j35gqvx95t7d34y7[0]['id'] : 0;

}
else {

if (is_array($m4is_er73m18j35gqvx95t7d34y7) && ! empty($m4is_er73m18j35gqvx95t7d34y7) ) {
foreach ($m4is_er73m18j35gqvx95t7d34y7 as $m4is_j8j55t8dz79m7=>
$m4is_cyg7rcfhzagmm5v) {
$m4is_er73m18j35gqvx95t7d34y7[$m4is_j8j55t8dz79m7]['password'] = stripslashes(html_entity_decode(trim($m4is_cyg7rcfhzagmm5v['password']) ) );

}
$m4is_f8ztg3ch5c8wr4jd2875h = false;

if (false && count($m4is_er73m18j35gqvx95t7d34y7) == 1) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_er73m18j35gqvx95t7d34y7[0]['id'];

$m4is_f8ztg3ch5c8wr4jd2875h = 0;
$m4is_cyg7rcfhzagmm5v[0]['score'] = $m4is_er73m18j35gqvx95t7d34y7[0]['score'] + 25;
}
else {
$m4is_er73m18j35gqvx95t7d34y7[0]['score'] = $m4is_er73m18j35gqvx95t7d34y7[0]['score'] + 2;

foreach ($m4is_er73m18j35gqvx95t7d34y7 as $m4is_j8j55t8dz79m7=>$m4is_cyg7rcfhzagmm5v) {
if ($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g > '' && $m4is_cyg7rcfhzagmm5v['password'] == stripslashes(trim($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g) ) ) { 
$m4is_er73m18j35gqvx95t7d34y7[$m4is_j8j55t8dz79m7]['score'] = $m4is_er73m18j35gqvx95t7d34y7[$m4is_j8j55t8dz79m7]['score'] + 10;

}
elseif ($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g > '' && $m4is_cyg7rcfhzagmm5v['password'] > '' && $m4is_cyg7rcfhzagmm5v['password'] != 'PASSWORD_PLACEHOLDER') {
$m4is_cyg7rcfhzagmm5v['score'] = $m4is_cyg7rcfhzagmm5v['score'] + 5;

}
elseif ($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g > '' && $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g != $m4is_cyg7rcfhzagmm5v['password'] && $m4is_cyg7rcfhzagmm5v['password'] == 'PASSWORD_PLACEHOLDER') {
$m4is_er73m18j35gqvx95t7d34y7[$m4is_j8j55t8dz79m7]['score'] = $m4is_er73m18j35gqvx95t7d34y7[$m4is_j8j55t8dz79m7]['score'] + 3;

}
elseif ($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g == '' && $m4is_cyg7rcfhzagmm5v['password'] == '') {
$m4is_er73m18j35gqvx95t7d34y7[$m4is_j8j55t8dz79m7]['score'] = $m4is_er73m18j35gqvx95t7d34y7[$m4is_j8j55t8dz79m7]['score'] + 1;

}
elseif ($m4is_cyg7rcfhzagmm5v['id'] == $m4is_49x929nabp5s) {
$m4is_er73m18j35gqvx95t7d34y7[$m4is_j8j55t8dz79m7]['score'] + 10;
}
}

$m4is_rkfkp9ytcjx = 0;

foreach ($m4is_er73m18j35gqvx95t7d34y7 as $m4is_j8j55t8dz79m7 => $m4is_cyg7rcfhzagmm5v) {
if ($m4is_cyg7rcfhzagmm5v['score'] > $m4is_rkfkp9ytcjx) {
$m4is_f8ztg3ch5c8wr4jd2875h = $m4is_j8j55t8dz79m7;

}
}
unset($m4is_rkfkp9ytcjx);
}
if ($m4is_f8ztg3ch5c8wr4jd2875h !== FALSE) {
if ($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g == '' || ($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g > '' && $m4is_er73m18j35gqvx95t7d34y7[$m4is_f8ztg3ch5c8wr4jd2875h]['password'] == $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g) ) {

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_er73m18j35gqvx95t7d34y7[$m4is_f8ztg3ch5c8wr4jd2875h]['id'];

}
elseif ($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g > '' && $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g <> 'PASSWORD_PLACEHOLDER' && $m4is_er73m18j35gqvx95t7d34y7[$m4is_f8ztg3ch5c8wr4jd2875h]['password'] == 'PASSWORD_PLACEHOLDER') {

if (is_a($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'WP_User')) {
if ( ($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID > 0) && wp_check_password( strval( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g ),
 strval( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->data->user_pass ), (int) $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID) ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_er73m18j35gqvx95t7d34y7[$m4is_f8ztg3ch5c8wr4jd2875h]['id'];

$m4is_0chcpza6xmp1 = [
$this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'password_field') => $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g
];

m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_0chcpza6xmp1, true); 
}
}
}
else {
}
}
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0) {
$m4is_cyg7rcfhzagmm5v = $m4is_er73m18j35gqvx95t7d34y7[$m4is_f8ztg3ch5c8wr4jd2875h];


}
}
}
if (! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email', $m4is_mr4hnyh6fa0p9sm0m8wfs1);

}
if (is_a($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_User') && $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0) {
$this->m4is_5vtbryfazyjf979ttdx0kp($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID);
}

if ($m4is_mr4hnyh6fa0p9sm0m8wfs1 > '' && $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g > '' && $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0) {
$m4is_e200zw8mj7k8m1hbx3m[$m4is_mr4hnyh6fa0p9sm0m8wfs1] = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

}
return $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
}

public function m4is_bpzt4p8q92db7( array $m4is_51addd34g1m0tcc2qg059mn, bool $m4is_n18xx301tpkf70ek9n00s6dv19m1tvj = false) : bool {
global $wpdb;

static $m4is_t0cekwfc60;
static $m4is_v4beyw7zqhr3;
static $m4is_3ag84vxwqaw0a7hxjf8xc;
static $m4is_0262tra2rzwf3bqj2xs1wh2f6;
static $m4is_wte2qk9hdk1zj7;

static $m4is_zr9hpmge9038qsd6jj5t5zwfxfkg5yw;
static $m4is_he9e04dd5xy65yey11rvdb5mp1;
static $m4is_8n279n6zgqp16k;
static $m4is_csnk3yn47;

$this->m4is_jz9ygsb79rajnhabv9( true );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_51addd34g1m0tcc2qg059mn['Id'] ?? 0;
$m4is_zxwt8y3szyy1aenkh = $m4is_51addd34g1m0tcc2qg059mn['Email'] ?? '';

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0;

if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return false;
}

if ( empty( trim( $m4is_51addd34g1m0tcc2qg059mn['Email'] ) ) ) {
return false;

}

if ( isset( $m4is_51addd34g1m0tcc2qg059mn['CompanyID'] ) && $m4is_51addd34g1m0tcc2qg059mn['CompanyID'] == $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return false;

}
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email', $m4is_zxwt8y3szyy1aenkh ) or $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'login',
 $m4is_zxwt8y3szyy1aenkh );
if ( is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_User' ) ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;

}
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'manage_options' ) ) {
return false;
}
$m4is_wte2qk9hdk1zj7 ??= $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field', '' );
$m4is_zr9hpmge9038qsd6jj5t5zwfxfkg5yw ??= $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'plaintext_db' );

$m4is_0262tra2rzwf3bqj2xs1wh2f6 ??= array_filter( explode( ',', $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'ignore_contact_fields' ) ) );

$m4is_8n279n6zgqp16k ??= $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'sync_tag_details', 0 );
$m4is_3ag84vxwqaw0a7hxjf8xc ??= $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'disable_displayname_update' );
$m4is_he9e04dd5xy65yey11rvdb5mp1 ??= $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'sync_meta_updates' );

$m4is_v4beyw7zqhr3 ??= $this->m4is_pdgd084n380vnszr3r( 'appname' );
$m4is_t0cekwfc60 ??= m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact',
 true );
$m4is_csnk3yn47 ??= m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();
$m4is_wp46wydgaz6thpyndpwqth953drf85 = [
'Email',

'FirstName',
'Groups',
'LastName',
];

foreach( $m4is_51addd34g1m0tcc2qg059mn as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( in_array( $m4is_j8j55t8dz79m7,
 $m4is_0262tra2rzwf3bqj2xs1wh2f6 ) ) {
unset( $m4is_51addd34g1m0tcc2qg059mn[$m4is_j8j55t8dz79m7] );
}
}
$m4is_51addd34g1m0tcc2qg059mn = $this->m4is_b8qskfdkeh13w255r( $m4is_51addd34g1m0tcc2qg059mn );


foreach( $m4is_51addd34g1m0tcc2qg059mn as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_51addd34g1m0tcc2qg059mn[$m4is_j8j55t8dz79m7] = ( $m4is_rqxytszfq5v6syth1csqqxvy5 == 'null' ) ? '' : trim( $m4is_rqxytszfq5v6syth1csqqxvy5 );

}

foreach( $m4is_51addd34g1m0tcc2qg059mn as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( $m4is_rqxytszfq5v6syth1csqqxvy5 == '' && ! in_array( $m4is_j8j55t8dz79m7,
 $m4is_wp46wydgaz6thpyndpwqth953drf85 ) ) {
unset( $m4is_51addd34g1m0tcc2qg059mn[$m4is_j8j55t8dz79m7] );
}
}

if ( $m4is_n18xx301tpkf70ek9n00s6dv19m1tvj ) {
m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_51addd34g1m0tcc2qg059mn ); 
}

$m4is_51addd34g1m0tcc2qg059mn['!LastUpdated'] = time();

$m4is_52t41chvqe2m2tb0s9x39q68cact0m = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 false, true );
foreach( $m4is_51addd34g1m0tcc2qg059mn as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( in_array( $m4is_j8j55t8dz79m7,
 $m4is_0262tra2rzwf3bqj2xs1wh2f6 ) ) {
unset( $m4is_51addd34g1m0tcc2qg059mn[$m4is_j8j55t8dz79m7] );
}
}

foreach( $m4is_wp46wydgaz6thpyndpwqth953drf85 as $m4is_rsa652kj673q8bhy ) {
$m4is_51addd34g1m0tcc2qg059mn[$m4is_rsa652kj673q8bhy] = $m4is_51addd34g1m0tcc2qg059mn[$m4is_rsa652kj673q8bhy] ?? '';

}
$m4is_51addd34g1m0tcc2qg059mn['Groups'] = implode( ',', array_filter( array_unique( explode( ',', $m4is_51addd34g1m0tcc2qg059mn['Groups'] ) ) ) );

$m4is_2cxq42pvyd = $this->m4is_b6mct5xjjy1( $m4is_52t41chvqe2m2tb0s9x39q68cact0m, $m4is_51addd34g1m0tcc2qg059mn );
$m4is_chej9g5238x9pyc9 = $this->m4is_8gbnhdkvkhrpxybgg9bsevbqyf80m( $m4is_52t41chvqe2m2tb0s9x39q68cact0m,
 $m4is_51addd34g1m0tcc2qg059mn );
$m4is_ja8naqje4 = $this->m4is_zzgj0be3ndn9hgp512rff7kzxa2( $m4is_52t41chvqe2m2tb0s9x39q68cact0m, $m4is_51addd34g1m0tcc2qg059mn );

$m4is_ja8naqje4 = $this->m4is_ebda5kept1b7z3s06fr1hwqn1fheww( $m4is_ja8naqje4, $m4is_chej9g5238x9pyc9 );
$m4is_ja8naqje4 = $this->m4is_ebda5kept1b7z3s06fr1hwqn1fheww( $m4is_ja8naqje4,
 array_keys( $m4is_2cxq42pvyd ) );

if ( ! empty($m4is_chej9g5238x9pyc9) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM {$m4is_csnk3yn47} WHERE `appname` = %s AND `id` = %d AND `fieldname` IN ('" . implode("','",
 $m4is_chej9g5238x9pyc9) . "');";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_v4beyw7zqhr3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

$m4is_hartbe843crydzh = $wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}

if ( ! empty( $m4is_2cxq42pvyd ) ) {
$m4is_fycpkje9sqts1230ewq = [];

foreach( $m4is_2cxq42pvyd as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp ) {
$m4is_fycpkje9sqts1230ewq[] = $wpdb->prepare('(%d, %s, %s, %s)',
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_v4beyw7zqhr3, $m4is_bqhtspcavhb01spmfd3x, $m4is_29gzevpx8rbkp);
}
if (! empty($m4is_fycpkje9sqts1230ewq) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO {$m4is_csnk3yn47} (id, appname, fieldname, value) VALUES " . implode(',',
 $m4is_fycpkje9sqts1230ewq);
$m4is_hartbe843crydzh = $wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}
}
if ( ! empty( $m4is_ja8naqje4 ) ) {
foreach ( $m4is_ja8naqje4 as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE `{$m4is_csnk3yn47}` SET `value` = %s WHERE `id` = %d AND `appname` = %s AND `fieldname` = %s ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_v4beyw7zqhr3, $m4is_j8j55t8dz79m7 );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
}
if ($m4is_he9e04dd5xy65yey11rvdb5mp1) {
$this->m4is_q201x7nfrw70qc551($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_51addd34g1m0tcc2qg059mn);
}
if (! empty( $m4is_8n279n6zgqp16k ) ) {
m4is_0ddg4zyk7dn8eg0283::m4is_6f5e3xv5588cwxrrxb8wq5bp7pxg( (int) $m4is_51addd34g1m0tcc2qg059mn['Id']);

}
if ( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
m4is_rw8p2dfy073ez::m4is_w2rgz1xtp( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$this->m4is_f54f6mxb3zka1m( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
clean_user_cache( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
$this->m4is_mz8ypkzzr4fxz8e42njma37v6ge02( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$this->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
do_action('memberium_save_contact', $m4is_51addd34g1m0tcc2qg059mn['Id'],
 $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_51addd34g1m0tcc2qg059mn);
$this->m4is_jz9ygsb79rajnhabv9( false );
return true;
}

public function m4is_q201x7nfrw70qc551(int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_7b2yfzk0054) : void {
global $wpdb;
static $m4is_q5vyq3atsbhngkz32gadw22qm28gqx46;

$m4is_q5vyq3atsbhngkz32gadw22qm28gqx46 ??= (bool) $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'sync_meta_updates' );

if ( ! $m4is_q5vyq3atsbhngkz32gadw22qm28gqx46 ) {
return;
}
if (empty( $m4is_7b2yfzk0054 ) || empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return;

}
$m4is_fsedke71q5qj768dkg6rqmhr = "memb\_%";
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `meta_key`, `meta_value` FROM %i WHERE `user_id` = %d AND `meta_key` LIKE '{$m4is_fsedke71q5qj768dkg6rqmhr}' ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $wpdb->usermeta, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_v2eet0262avzsmbcxmm33n0ma148x3sh = (array) $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7,
 ARRAY_A );
$m4is_v2eet0262avzsmbcxmm33n0ma148x3sh = $this->m4is_da2zqbyx62mn02mesb( $m4is_v2eet0262avzsmbcxmm33n0ma148x3sh, 'meta_key',
 'meta_value' );
foreach( $m4is_7b2yfzk0054 as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( substr( $m4is_j8j55t8dz79m7,
 0, 1 ) !== '!' ) {
$m4is_8af8mpexqy2re72jx1m8cymhw1yencd = "memb_{$m4is_j8j55t8dz79m7}";
if ( ! array_key_exists( $m4is_8af8mpexqy2re72jx1m8cymhw1yencd,
 $m4is_v2eet0262avzsmbcxmm33n0ma148x3sh ) || $m4is_rqxytszfq5v6syth1csqqxvy5 == '' ) {
delete_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_8af8mpexqy2re72jx1m8cymhw1yencd );
}
elseif ( array_key_exists( $m4is_8af8mpexqy2re72jx1m8cymhw1yencd, $m4is_v2eet0262avzsmbcxmm33n0ma148x3sh ) && $m4is_v2eet0262avzsmbcxmm33n0ma148x3sh[$m4is_8af8mpexqy2re72jx1m8cymhw1yencd] !== $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_8af8mpexqy2re72jx1m8cymhw1yencd, $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
elseif ( ! array_key_exists( $m4is_8af8mpexqy2re72jx1m8cymhw1yencd,
 $m4is_v2eet0262avzsmbcxmm33n0ma148x3sh ) && ! empty( $m4is_rqxytszfq5v6syth1csqqxvy5) ) {
add_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_8af8mpexqy2re72jx1m8cymhw1yencd, $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
}
}
}

private function m4is_8pka82cn284saaq37nvnwg0s6y( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : int {
global $wpdb;

$m4is_k7p8pmxsbkqrje3y20 = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();
$m4is_5rbenkpt1v7xby2cknbs7 = 'SELECT `value` FROM %i WHERE `id` = %d AND `fieldname` = "!LastUpdated";';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_46d809ky1tdg166wfnqg4 = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
return $m4is_46d809ky1tdg166wfnqg4;
}

public function m4is_km2vptq0bwg( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0,
 $m4is_dk8h9fzq3h5eh3y6rzhgk9e = false ) : int {
$m4is_kyw6mwey3 = 0;
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return $m4is_kyw6mwey3;

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n('Contact',
 true);
$m4is_tbdh9qb6r6z = [];
$m4is_kyw6mwey3 = 0;
$m4is_map8tdmsvarsn03f1fhfytx61b4a = time() - 3;
$m4is_mhr5r8dya7new0rmymjx6p2bbbsaqj = $this->m4is_8pka82cn284saaq37nvnwg0s6y( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( $m4is_mhr5r8dya7new0rmymjx6p2bbbsaqj <= $m4is_map8tdmsvarsn03f1fhfytx61b4a ) {
$m4is_tbdh9qb6r6z = m4is_rw8p2dfy073ez::m4is_xgawpe34q( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
}
if ( is_string( $m4is_tbdh9qb6r6z ) && stripos( $m4is_tbdh9qb6r6z, 'RecordNotFound' ) !== false) {
m4is_rw8p2dfy073ez::m4is_2v54qg8a8519szs6gv2vqw7( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
if (is_array($m4is_tbdh9qb6r6z) && count($m4is_tbdh9qb6r6z) > 0) {
$this->m4is_bpzt4p8q92db7($m4is_tbdh9qb6r6z);
$m4is_kyw6mwey3 = count($m4is_tbdh9qb6r6z);

if (! empty($this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings','sync_tag_details') ) ) {
m4is_0ddg4zyk7dn8eg0283::m4is_6f5e3xv5588cwxrrxb8wq5bp7pxg( (int) $m4is_tbdh9qb6r6z['Id']);

}
$this->m4is_mz8ypkzzr4fxz8e42njma37v6ge02($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
$this->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

return $m4is_kyw6mwey3;
}
public function m4is_zxceeesaskr61p( $m4is_g61yzqs7ecta0xztr70d7v = [] ) {
$m4is_n7x0afpz = [
'contact_id' =>
 0,
'cascade' => false,
'cache_ttl' => 0,
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args($m4is_g61yzqs7ecta0xztr70d7v, $m4is_n7x0afpz);

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $m4is_g61yzqs7ecta0xztr70d7v['contact_id'];
$m4is_dk8h9fzq3h5eh3y6rzhgk9e = $m4is_g61yzqs7ecta0xztr70d7v['cascade'];

$m4is_yqbs57707b9pgq = $m4is_g61yzqs7ecta0xztr70d7v['cache_ttl'];
$m4is_kyw6mwey3 = 0;
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0) {
global $wpdb;

$m4is_ngmfrq2d72cwethyhpqm56mq600 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b();
$m4is_dmhydt6d2gv1na7516p1dv37qpmd = $this->get_i2sdk_options();

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n('Contact',
 true);
$m4is_tbdh9qb6r6z = [];
$m4is_kyw6mwey3 = 0;
$m4is_5rbenkpt1v7xby2cknbs7 = 'SELECT `value` FROM `' . m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3() . '` WHERE `id` = %d AND `fieldname` = "!LastUpdated";';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
$m4is_mhr5r8dya7new0rmymjx6p2bbbsaqj = $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);

$m4is_map8tdmsvarsn03f1fhfytx61b4a = time();
if ($m4is_mhr5r8dya7new0rmymjx6p2bbbsaqj < ($m4is_map8tdmsvarsn03f1fhfytx61b4a - $m4is_yqbs57707b9pgq) ) {
$m4is_tbdh9qb6r6z = m4is_rw8p2dfy073ez::m4is_xgawpe34q($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_0x2gypzsbnenpkq5bam3dkbg5);
if (is_string($m4is_tbdh9qb6r6z) && stripos($m4is_tbdh9qb6r6z, 'RecordNotFound') !== false) {
m4is_rw8p2dfy073ez::m4is_2v54qg8a8519szs6gv2vqw7($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

}
if (is_array($m4is_tbdh9qb6r6z) && count($m4is_tbdh9qb6r6z) > 0) {
$this->m4is_bpzt4p8q92db7($m4is_tbdh9qb6r6z);
$m4is_kyw6mwey3 = count($m4is_tbdh9qb6r6z);

if (! empty($this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings','sync_tag_details') ) ) {
m4is_0ddg4zyk7dn8eg0283::m4is_6f5e3xv5588cwxrrxb8wq5bp7pxg( (int) $m4is_tbdh9qb6r6z['Id']);

}
}
}
$this->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_mz8ypkzzr4fxz8e42njma37v6ge02($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

}
return $m4is_kyw6mwey3;
}

private function m4is_dsdn2p7da9kdz1( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_zxwt8y3szyy1aenkh) {
global $wpdb;

if (empty($m4is_zxwt8y3szyy1aenkh) ) {
return false;
}
if (empty($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) ) {
return false;
}
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
'username_field');
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(`id`) FROM `" . m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3() . "` WHERE `id` = %d AND `fieldname` = %s AND appname = %s AND VALUE = %s ;";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6,
 $m4is_v4beyw7zqhr3, $m4is_zxwt8y3szyy1aenkh);
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
return $m4is_6p2tyvq6paj43svrn7zqaykxzy;

}
public function m4is_kqtdb02qf7440( int $m4is_g1q8vsgh8yz3c3y2, $m4is_6mctr922hbmncpwfrp0x2k = []) : bool {
if ( current_user_can( 'manage_options' ) ) {
return true;

}

if ( ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return false;
}
if ( empty( $m4is_6mctr922hbmncpwfrp0x2k ) ) {
$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $this->m4is_vd3qpw0vkdm() );

}
$m4is_yfq3jqvfk8j = empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'] ) ? [] : array_filter( explode( ',', $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'] ) );

$m4is_vyfr8fxnj998rgpv0 = m4is_0ddg4zyk7dn8eg0283::m4is_x5rqgxjevt( $m4is_yfq3jqvfk8j);
$m4is_6mh4y3af20cdnny9739kbr1xjer73 = in_array( $m4is_g1q8vsgh8yz3c3y2,
 $m4is_vyfr8fxnj998rgpv0 );
return $m4is_6mh4y3af20cdnny9739kbr1xjer73;
}
public function m4is_dy9qsc49he4( $m4is_2a5s14tfbb3h83qrcwzg,
 $m4is_32cpbz5cmnxzkzwtrbavn ) {
if ( empty( $m4is_2a5s14tfbb3h83qrcwzg ) || empty( $m4is_32cpbz5cmnxzkzwtrbavn ) ) {
return false;

}
$m4is_nfzcq1xtv9gegwpyxg2x9w9tvd11 = false;
$m4is_2a5s14tfbb3h83qrcwzg = is_array( $m4is_2a5s14tfbb3h83qrcwzg ) ? $m4is_2a5s14tfbb3h83qrcwzg : array_filter( explode( ',',
 $m4is_2a5s14tfbb3h83qrcwzg ) );
$m4is_2a5s14tfbb3h83qrcwzg = m4is_0ddg4zyk7dn8eg0283::m4is_ttjvws3e6cfgrjntj5x( $m4is_2a5s14tfbb3h83qrcwzg );

$m4is_2a5s14tfbb3h83qrcwzg = array_map( 'trim', $m4is_2a5s14tfbb3h83qrcwzg );
$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy = array_filter( $m4is_2a5s14tfbb3h83qrcwzg,
 function( $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( substr( $m4is_rqxytszfq5v6syth1csqqxvy5, 0, 1 ) == '-' ) {
return true;
}
});
$m4is_2a5s14tfbb3h83qrcwzg = array_filter( $m4is_2a5s14tfbb3h83qrcwzg,
 function( $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( $m4is_rqxytszfq5v6syth1csqqxvy5 > 0 ) {
return true;
}
});
$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy = array_map( 'abs',
 $m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy );
$m4is_32cpbz5cmnxzkzwtrbavn = is_array( $m4is_32cpbz5cmnxzkzwtrbavn ) ? $m4is_32cpbz5cmnxzkzwtrbavn : array_filter( explode( ',',
 $m4is_32cpbz5cmnxzkzwtrbavn ) );

if (! array_intersect( $m4is_32cpbz5cmnxzkzwtrbavn, $m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy ) ) {
if ( array_intersect( $m4is_32cpbz5cmnxzkzwtrbavn,
 $m4is_2a5s14tfbb3h83qrcwzg ) ) {
return true;
}
}
return false;
}

public function m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_2m6bmj7fx0qd,
 $m4is_6mctr922hbmncpwfrp0x2k = [] ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['user_id'] ) ? $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['user_id'] : $this->m4is_vd3qpw0vkdm();

if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'manage_options' ) ) {
return true;
}

if ( ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y() ) {
return false;

}
$m4is_y29p16vksjqfbcmw5d = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user',
 'tag_names', '' );
$m4is_yfq3jqvfk8j = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user',
 'tags', '' );
if ( is_array( $m4is_2m6bmj7fx0qd ) ) {
$m4is_2m6bmj7fx0qd = trim( implode( ',', $m4is_2m6bmj7fx0qd), ',' );
}

$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;

$m4is_2m6bmj7fx0qd = (string) preg_replace(['/, */', '/ *,/'], ',', $m4is_2m6bmj7fx0qd);
$m4is_2m6bmj7fx0qd = (string) preg_replace(['/^,/',
 '/,$/'], '', $m4is_2m6bmj7fx0qd);
$m4is_2m6bmj7fx0qd = trim($m4is_2m6bmj7fx0qd);
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = array_filter(explode(',',
 strtolower(trim($m4is_2m6bmj7fx0qd) ) ) );
$m4is_nqmaj4svwdmyp8 = implode(',', $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj);
$m4is_yfq3jqvfk8j = array_filter( explode( ',',
 $m4is_yfq3jqvfk8j ) );
$m4is_y29p16vksjqfbcmw5d = array_filter( explode( ',', strtolower( $m4is_y29p16vksjqfbcmw5d ) ) );
$m4is_dcxn4wdg3vajc2wnf0h = [];

$m4is_3r8j0dy4sns = [];

foreach($m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) {
if (substr($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 0, 1) <> '-') {
$m4is_dcxn4wdg3vajc2wnf0h[] = $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0;
}
else {
$m4is_3r8j0dy4sns[] = substr($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 1);
}
}

$m4is_feqbf2n6cc7e7e0d6ass58zecv5n = false;
$m4is_bhf080jpt8c = 0;
if (count($m4is_dcxn4wdg3vajc2wnf0h) ) {
$m4is_bhf080jpt8c = count(array_intersect($m4is_dcxn4wdg3vajc2wnf0h,
 $m4is_yfq3jqvfk8j) ) + count(array_intersect($m4is_dcxn4wdg3vajc2wnf0h, $m4is_y29p16vksjqfbcmw5d) );
$m4is_feqbf2n6cc7e7e0d6ass58zecv5n = (boolean) $m4is_bhf080jpt8c;

}
else {
$m4is_bhf080jpt8c = 0;
$m4is_feqbf2n6cc7e7e0d6ass58zecv5n = true;
}

$m4is_ddmz88dqshrn8sjfpfqse2m7svwrg0 = false;
$m4is_cgckcpph63sf84xwfy = 0;

if (count($m4is_3r8j0dy4sns) ) {
$m4is_cgckcpph63sf84xwfy = count(array_intersect($m4is_3r8j0dy4sns, $m4is_yfq3jqvfk8j) ) + count(array_intersect($m4is_3r8j0dy4sns,
 $m4is_y29p16vksjqfbcmw5d) );
$m4is_ddmz88dqshrn8sjfpfqse2m7svwrg0 = ! (boolean) $m4is_cgckcpph63sf84xwfy;
}
else {
$m4is_cgckcpph63sf84xwfy = 0;

$m4is_ddmz88dqshrn8sjfpfqse2m7svwrg0 = true;
}

$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
if (count($m4is_dcxn4wdg3vajc2wnf0h) ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_6p2tyvq6paj43svrn7zqaykxzy || $m4is_feqbf2n6cc7e7e0d6ass58zecv5n;

}
if (count($m4is_3r8j0dy4sns) ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_6p2tyvq6paj43svrn7zqaykxzy || $m4is_ddmz88dqshrn8sjfpfqse2m7svwrg0;

}
return $m4is_6p2tyvq6paj43svrn7zqaykxzy;
}

public function m4is_n9nmkb32xctdmyy9d0s0trys3zj5y( $m4is_06c8s5xs94f91335gnaey25, int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0 ) {
static $m4is_2nh9zt3nqsx;

$m4is_2nh9zt3nqsx ??= ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y();

if ( empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
return true;

}
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $this->m4is_1qbr5gs0jfsnf569vm930v();
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'manage_options' ) ) {
return true;
}
if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return false;

}
if ( is_string( $m4is_06c8s5xs94f91335gnaey25 ) ) {
$m4is_06c8s5xs94f91335gnaey25 = explode(',', $m4is_06c8s5xs94f91335gnaey25);

}
if ( ! is_array( $m4is_06c8s5xs94f91335gnaey25 ) ) {
return false;
}

if ( $m4is_2nh9zt3nqsx ) {
return false;
}
$m4is_yfq3jqvfk8j = array_filter( explode( ',',
 m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user', 'tags', '' ) ) );
$m4is_y29p16vksjqfbcmw5d = array_filter( explode( ',',
 strtolower( m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user', 'tag_names', '' ) ) ) );

foreach ($m4is_06c8s5xs94f91335gnaey25 as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) {
if (substr($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, 0, 1) == '-') {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = strtolower(ltrim($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 '-') );
if ( in_array( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_yfq3jqvfk8j ) || in_array( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_y29p16vksjqfbcmw5d ) ) {
return false;

}
}
else {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = strtolower( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 );
if (! in_array($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0,
 $m4is_yfq3jqvfk8j) && ! in_array($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_y29p16vksjqfbcmw5d) ) {
return false;
}
}
}
return true;

}



function m4is_qg9294a34f1821qmbf1c5a($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
global $wpdb;
static $cached_affiliate_id = [];
if (isset($cached_affiliate_id[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp]) ) {
return $cached_affiliate_id[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp];

}
if (empty($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $this->m4is_1qbr5gs0jfsnf569vm930v();

}
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp < 1) {
return 0;
}

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

$m4is_p4dmzhw4w4jpag2 = [];
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_k7p8pmxsbkqrje3y20 = 'Referral';

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n($m4is_k7p8pmxsbkqrje3y20, false);
$m4is_kyw6mwey3 = 0;
;
$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
];
$m4is_z81tvhx0by6g88js7vkdv38x90w7x = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
'referral_partner_order') == 1;
do {
$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj($m4is_k7p8pmxsbkqrje3y20,
 (int) $m4is_rkmcn1zd3r3k149h20vfr8z, (int) $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5,
 'Id', true);
if (is_array($m4is_tbdh9qb6r6z) ) {
foreach ($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
if (! isset($m4is_bamv772v['DateExpires']) || $m4is_bamv772v['DateExpires'] >= date( 'Ymd\T00:00:00' ) ) {
$m4is_p4dmzhw4w4jpag2[$m4is_bamv772v['Id']] = $m4is_bamv772v;

}
}
$m4is_ek8adjz9yz7wvga34bby56++;
$m4is_kyw6mwey3 = $m4is_kyw6mwey3 + count($m4is_tbdh9qb6r6z);
}
} while (count($m4is_tbdh9qb6r6z) == $m4is_rkmcn1zd3r3k149h20vfr8z);

if ($m4is_z81tvhx0by6g88js7vkdv38x90w7x) {
$m4is_q881gnvascsxwmh8dad5hynjsjf49m = array_shift($m4is_p4dmzhw4w4jpag2);
}
else {
$m4is_q881gnvascsxwmh8dad5hynjsjf49m = array_pop($m4is_p4dmzhw4w4jpag2);

}
unset($m4is_p4dmzhw4w4jpag2, $m4is_tbdh9qb6r6z);
$cached_affiliate_id[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp] = isset($m4is_q881gnvascsxwmh8dad5hynjsjf49m['AffiliateId']) ? $m4is_q881gnvascsxwmh8dad5hynjsjf49m['AffiliateId'] : 0;

return $cached_affiliate_id[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp];
}
function m4is_mqf1pa2p3bpkpn6pvsk6dzwdbj05( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 bool $m4is_pxqqyhvpv8x9tskp6p79ktbd = false ) : bool {
global $wpdb;
if ( empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return false;

}
if ( wp_doing_ajax() ) {
return false;
}
$m4is_qkes40fnxym7fk = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'max_affiliate_age',
 0 );
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r( 'appname' );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_1d8y478mmgerj = 'memberium/' . $m4is_v4beyw7zqhr3 . '/affiliate/updated';
$m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta = time();
$m4is_mhr5r8dya7new0rmymjx6p2bbbsaqj = 0;


if ( $m4is_qkes40fnxym7fk && $m4is_pxqqyhvpv8x9tskp6p79ktbd == false ) {
$m4is_dapdcej2nee7kcp6t1jh5gqmcvycqg = $m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta - (int) get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_1d8y478mmgerj, true ) - 30;
if ( $m4is_dapdcej2nee7kcp6t1jh5gqmcvycqg < $m4is_qkes40fnxym7fk ) {
return true;
}
}
$m4is_xbr1ae5hmx11ees = m4is_amz58dmg8j7e898bj8r8b1::m4is_p03b0kyyq8xaeg6t( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( is_array ($m4is_xbr1ae5hmx11ees ) ) {
m4is_amz58dmg8j7e898bj8r8b1::m4is_f3vmc1zj78h8wfeh224g( $m4is_xbr1ae5hmx11ees );
update_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_1d8y478mmgerj, $m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta);
return true;
}
return false;
}
function m4is_9tpv0wdkefwnhzj($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0) {
global $wpdb;

static $m4is_9z0j9cm218bq4zyb2ncrk47200dp7zkk;
if ( ! empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) && isset( $m4is_9z0j9cm218bq4zyb2ncrk47200dp7zkk[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp] ) ) {
return $m4is_9z0j9cm218bq4zyb2ncrk47200dp7zkk[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp];

}
$m4is_ngmfrq2d72cwethyhpqm56mq600 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b();
$m4is_dmhydt6d2gv1na7516p1dv37qpmd = $this->get_i2sdk_options();

$m4is_49aarhf28fncdzwn4 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'plaintext_db', false );
$m4is_wte2qk9hdk1zj7 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
'password_field', '' );
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r( 'appname' );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_k7p8pmxsbkqrje3y20 = 'Affiliate';
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_eepkb4x5k = 'ContactId';

$m4is_e4c15spmbs53rwm0c = ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0 ) ? (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp : '%';
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( $m4is_k7p8pmxsbkqrje3y20,
 true );
$m4is_csnk3yn47 = m4is_amz58dmg8j7e898bj8r8b1::m4is_rr7ynbdyf6mev98x20sv1n1d0kkxt();
$m4is_kyw6mwey3 = 0;
$m4is_934a95jn = [];

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp == 0 ) {
$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' => '%'
];
}
else {
$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' =>
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp
];
}
do {
$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj( $m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'Id', true );

if ( is_array( $m4is_tbdh9qb6r6z ) && ! empty( $m4is_tbdh9qb6r6z ) ) {
$m4is_19x1c17et728k945 = [];
$m4is_fycpkje9sqts1230ewq = [];

foreach ($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
$m4is_bamv772v['!LastUpdated'] = time();
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) $m4is_bamv772v['Id'];

$m4is_934a95jn[] = $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;
$m4is_7b2yfzk0054[] = [];
foreach ( $m4is_bamv772v as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( $m4is_49aarhf28fncdzwn4 ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = remove_accents( $m4is_rqxytszfq5v6syth1csqqxvy5 );


}
$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_rqxytszfq5v6syth1csqqxvy5 == 'null' ? '' : $m4is_rqxytszfq5v6syth1csqqxvy5;
$m4is_fycpkje9sqts1230ewq[] = $wpdb->prepare( '(%d, %s, %s, %s)',
 $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_v4beyw7zqhr3, $m4is_j8j55t8dz79m7, $m4is_rqxytszfq5v6syth1csqqxvy5 );
$m4is_7b2yfzk0054[] = $m4is_j8j55t8dz79m7;

$m4is_rqxytszfq5v6syth1csqqxvy5 = ( $m4is_j8j55t8dz79m7 != $m4is_wte2qk9hdk1zj7 ) ? wp_strip_all_tags( $m4is_rqxytszfq5v6syth1csqqxvy5 ) : $m4is_rqxytszfq5v6syth1csqqxvy5;

}
}
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO {$m4is_csnk3yn47} (id, appname, fieldname, value) VALUES " . implode(',', $m4is_fycpkje9sqts1230ewq) . " ON DUPLICATE KEY UPDATE id=VALUES(id), appname=VALUES(appname), fieldname=VALUES(fieldname), value=VALUES(value);";

$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
$m4is_ek8adjz9yz7wvga34bby56++;
$m4is_kyw6mwey3 = $m4is_kyw6mwey3 + count($m4is_tbdh9qb6r6z);

}
} while (is_array($m4is_tbdh9qb6r6z) && count($m4is_tbdh9qb6r6z) == $m4is_rkmcn1zd3r3k149h20vfr8z);
if (! empty($m4is_934a95jn) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM {$m4is_csnk3yn47} WHERE `appname` = '{$m4is_v4beyw7zqhr3}' AND `id` NOT IN (" . implode(',',
 $m4is_934a95jn) . ");";
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp == 0) {


set_transient('memberium_affiliates_updated',
 time() );
}
$m4is_9z0j9cm218bq4zyb2ncrk47200dp7zkk[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp] = $m4is_kyw6mwey3;
return $m4is_kyw6mwey3;

}
function m4is_2gjhk1gdav89macdf() {
global $wpdb;
}
function m4is_km9vka84hyqf8ya220smjqrjk7xb6p( $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9,
 $m4is_xwr1mempgewmtdte04jk0djx = '', $m4is_cdwrcp15y2v3tkcv8yf87 = '' ) {
global $wpdb;
$m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 = (int) $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9;

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( 'SELECT count(id) FROM %i WHERE affiliateid = %d ', m4is_bbwjksaqsay3yt68xq9afn::m4is_syjrxw7rw3s(),
 $m4is_tx246pq7vpq2ax5k03cf8dkex76fj9 );
$m4is_v32th66ygaw1kdzt7gbmaf0e8vpms59c = (int) strtotime($m4is_xwr1mempgewmtdte04jk0djx);
$m4is_49tt461mdmcjmzdxdgtt = (int) strtotime($m4is_cdwrcp15y2v3tkcv8yf87);

if ($m4is_xwr1mempgewmtdte04jk0djx) {
$m4is_5rbenkpt1v7xby2cknbs7 .= $wpdb->prepare( 'AND datecreated >= %s ', date( 'Y-m-d h:i:s',
 $m4is_v32th66ygaw1kdzt7gbmaf0e8vpms59c ) );
}
if ($m4is_cdwrcp15y2v3tkcv8yf87) {
$m4is_5rbenkpt1v7xby2cknbs7 .= $wpdb->prepare( 'AND datecreated <= %s ',
 date('Y-m-d h:i:s', $m4is_49tt461mdmcjmzdxdgtt ) );
}
}



function m4is_zmsw66xd( $m4is_g61yzqs7ecta0xztr70d7v ) {
$m4is_n7x0afpz = [
'format' =>
 'serial',
'invoice_id' => 0,
'contact_id' => $this->m4is_1qbr5gs0jfsnf569vm930v(),
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args( $m4is_g61yzqs7ecta0xztr70d7v,
 $m4is_n7x0afpz );
$m4is_0906y1a1fyz3wa = (int) $m4is_g61yzqs7ecta0xztr70d7v['invoice_id'];
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_g61yzqs7ecta0xztr70d7v['contact_id'];

$m4is_06ga5y7jaf75 = strtolower( trim( $m4is_g61yzqs7ecta0xztr70d7v['format'] ) );
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r( 'appname' );

$m4is_r2d01p7w70wh2g5 = 'Memberium:' . $m4is_v4beyw7zqhr3 . '::Receipt:' . $m4is_0906y1a1fyz3wa . '::Contact:' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;


$m4is_q4yx8vdc = get_transient( $m4is_r2d01p7w70wh2g5 );
if ($m4is_q4yx8vdc === false) {
if ($m4is_0906y1a1fyz3wa) {

$m4is_k7p8pmxsbkqrje3y20 = 'Invoice';

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( $m4is_k7p8pmxsbkqrje3y20, false );
$m4is_hdseqgtp1yd3cjxf20r = (array) m4is_xm67qjyegqdeb9wqcm::m4is_vph6cx02rq( $m4is_k7p8pmxsbkqrje3y20,
 (int) $m4is_0906y1a1fyz3wa, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
if ( ! $this->m4is_mdj300zr1jk5av2y9cp() ) {
if ( isset($m4is_hdseqgtp1yd3cjxf20r['ContactId']) && $m4is_hdseqgtp1yd3cjxf20r['ContactId'] == $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$m4is_0906y1a1fyz3wa = empty($m4is_hdseqgtp1yd3cjxf20r['Id']) ? 0 : (int) $m4is_hdseqgtp1yd3cjxf20r['Id'];

$m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y = empty($m4is_hdseqgtp1yd3cjxf20r['JobId']) ? 0 : (int) $m4is_hdseqgtp1yd3cjxf20r['JobId'];
}
else {
$m4is_0906y1a1fyz3wa = 0;

}
}
if ( $m4is_0906y1a1fyz3wa ) {
$m4is_q4yx8vdc['invoice'] = array_change_key_case( $m4is_hdseqgtp1yd3cjxf20r, CASE_LOWER );
$m4is_q4yx8vdc['invoice']['totaldue'] = $m4is_q4yx8vdc['invoice']['totaldue'];

$m4is_q4yx8vdc['invoice']['invoicetotal'] = $m4is_q4yx8vdc['invoice']['invoicetotal'];
$m4is_q4yx8vdc['invoice']['totalpaid'] = $m4is_q4yx8vdc['invoice']['totalpaid'];


$m4is_q4yx8vdc['contact'] = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, true);

if ($m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y) {
$m4is_k7p8pmxsbkqrje3y20 = 'Job';

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n($m4is_k7p8pmxsbkqrje3y20, false);
$m4is_skkxj37nc8saew3r5abp3ptqy = $this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->dsLoad($m4is_k7p8pmxsbkqrje3y20,
 (int) $m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y, $m4is_0x2gypzsbnenpkq5bam3dkbg5);
if (is_array($m4is_skkxj37nc8saew3r5abp3ptqy) ) {
$m4is_q4yx8vdc['job'] = array_change_key_case($m4is_skkxj37nc8saew3r5abp3ptqy,
 CASE_LOWER);
}

$m4is_k7p8pmxsbkqrje3y20 = 'OrderItem';
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n($m4is_k7p8pmxsbkqrje3y20,
 false);
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_j34bmw9dcjexfj1qpz = ['OrderId' => $m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y];

$m4is_425gdshb6vsnshz1amx2j6spw = 'Id';
$m4is_z81tvhx0by6g88js7vkdv38x90w7x = true;
$m4is_8xgxhnv86dvp92b = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj($m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, $m4is_425gdshb6vsnshz1amx2j6spw,
 $m4is_z81tvhx0by6g88js7vkdv38x90w7x);
if (is_array($m4is_8xgxhnv86dvp92b) ) {
foreach($m4is_8xgxhnv86dvp92b as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_8xgxhnv86dvp92b[$m4is_j8j55t8dz79m7] = array_change_key_case($m4is_rqxytszfq5v6syth1csqqxvy5,
 CASE_LOWER);
$m4is_8xgxhnv86dvp92b[$m4is_j8j55t8dz79m7]['ppu'] = $m4is_8xgxhnv86dvp92b[$m4is_j8j55t8dz79m7]['ppu'];
$m4is_8xgxhnv86dvp92b[$m4is_j8j55t8dz79m7]['cpu'] = $m4is_8xgxhnv86dvp92b[$m4is_j8j55t8dz79m7]['cpu'];

}
$m4is_q4yx8vdc['orderitems'] = $m4is_8xgxhnv86dvp92b;
}
}

$m4is_k7p8pmxsbkqrje3y20 = 'InvoiceItem';
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n($m4is_k7p8pmxsbkqrje3y20,
 false);
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_j34bmw9dcjexfj1qpz = ['InvoiceId' => $m4is_0906y1a1fyz3wa];

$m4is_425gdshb6vsnshz1amx2j6spw = 'Id';
$m4is_z81tvhx0by6g88js7vkdv38x90w7x = true;
$m4is_8xgxhnv86dvp92b = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj($m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, $m4is_425gdshb6vsnshz1amx2j6spw,
 $m4is_z81tvhx0by6g88js7vkdv38x90w7x);
if (is_array($m4is_8xgxhnv86dvp92b) ) {
foreach($m4is_8xgxhnv86dvp92b as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_8xgxhnv86dvp92b[$m4is_j8j55t8dz79m7] = array_change_key_case($m4is_rqxytszfq5v6syth1csqqxvy5,
 CASE_LOWER);
$m4is_8xgxhnv86dvp92b[$m4is_j8j55t8dz79m7]['ppu'] = $m4is_8xgxhnv86dvp92b[$m4is_j8j55t8dz79m7]['ppu'];
$m4is_8xgxhnv86dvp92b[$m4is_j8j55t8dz79m7]['cpu'] = $m4is_8xgxhnv86dvp92b[$m4is_j8j55t8dz79m7]['cpu'];

$m4is_8xgxhnv86dvp92b[$m4is_j8j55t8dz79m7]['invoiceamt'] = $m4is_8xgxhnv86dvp92b[$m4is_j8j55t8dz79m7]['invoiceamt'];
}
$m4is_q4yx8vdc['invoiceitems'] = $m4is_8xgxhnv86dvp92b;

}

$m4is_k7p8pmxsbkqrje3y20 = 'Payment';
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n($m4is_k7p8pmxsbkqrje3y20,
 false);
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_j34bmw9dcjexfj1qpz = ['InvoiceId' => $m4is_0906y1a1fyz3wa];

$m4is_425gdshb6vsnshz1amx2j6spw = 'Id';
$m4is_z81tvhx0by6g88js7vkdv38x90w7x = true;
$m4is_3rt615r2 = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj($m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, $m4is_425gdshb6vsnshz1amx2j6spw,
 $m4is_z81tvhx0by6g88js7vkdv38x90w7x);
$m4is_txmvpses5rzn4sb3kjha = 0;
if (is_array($m4is_3rt615r2) ) {
foreach($m4is_3rt615r2 as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_3rt615r2[$m4is_j8j55t8dz79m7] = array_change_key_case($m4is_rqxytszfq5v6syth1csqqxvy5, CASE_LOWER);

$m4is_3rt615r2[$m4is_j8j55t8dz79m7]['payamt'] = $m4is_3rt615r2[$m4is_j8j55t8dz79m7]['payamt'];
}
$m4is_q4yx8vdc['payments'] = $m4is_3rt615r2;

}
if ($m4is_hdseqgtp1yd3cjxf20r['TotalPaid'] < $m4is_hdseqgtp1yd3cjxf20r['InvoiceTotal']) {

$m4is_k7p8pmxsbkqrje3y20 = 'PayPlan';

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n($m4is_k7p8pmxsbkqrje3y20, false);
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;

$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_j34bmw9dcjexfj1qpz = ['InvoiceId' => $m4is_0906y1a1fyz3wa];
$m4is_425gdshb6vsnshz1amx2j6spw = 'Id';

$m4is_z81tvhx0by6g88js7vkdv38x90w7x = true;
$m4is_hsrppdm2ysvh3zkp6060pa9vmfh2e8 = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj($m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, $m4is_425gdshb6vsnshz1amx2j6spw,
 $m4is_z81tvhx0by6g88js7vkdv38x90w7x);
if (is_array($m4is_hsrppdm2ysvh3zkp6060pa9vmfh2e8) ) {
foreach($m4is_hsrppdm2ysvh3zkp6060pa9vmfh2e8 as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_hsrppdm2ysvh3zkp6060pa9vmfh2e8[$m4is_j8j55t8dz79m7] = array_change_key_case($m4is_rqxytszfq5v6syth1csqqxvy5,
 CASE_LOWER);
$m4is_hsrppdm2ysvh3zkp6060pa9vmfh2e8[$m4is_j8j55t8dz79m7]['amtdue'] = $m4is_hsrppdm2ysvh3zkp6060pa9vmfh2e8[$m4is_j8j55t8dz79m7]['amtdue'];

$m4is_hsrppdm2ysvh3zkp6060pa9vmfh2e8[$m4is_j8j55t8dz79m7]['firstpayamt'] = $m4is_hsrppdm2ysvh3zkp6060pa9vmfh2e8[$m4is_j8j55t8dz79m7]['firstpayamt'];

}
$m4is_q4yx8vdc['paymentplan'] = $m4is_hsrppdm2ysvh3zkp6060pa9vmfh2e8[0];
}

$m4is_k7p8pmxsbkqrje3y20 = 'PayPlanItem';
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n($m4is_k7p8pmxsbkqrje3y20,
 false);
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_j34bmw9dcjexfj1qpz = ['PayPlanId' => $m4is_hsrppdm2ysvh3zkp6060pa9vmfh2e8[0]['id'] ];

$m4is_425gdshb6vsnshz1amx2j6spw = 'Id';
$m4is_z81tvhx0by6g88js7vkdv38x90w7x = true;
$m4is_sga01f7t2843tha5gqm396tx = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj($m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, $m4is_425gdshb6vsnshz1amx2j6spw,
 $m4is_z81tvhx0by6g88js7vkdv38x90w7x);
if (is_array($m4is_sga01f7t2843tha5gqm396tx) ) {
foreach($m4is_sga01f7t2843tha5gqm396tx as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_sga01f7t2843tha5gqm396tx[$m4is_j8j55t8dz79m7] = array_change_key_case($m4is_rqxytszfq5v6syth1csqqxvy5,
 CASE_LOWER);
}
$m4is_q4yx8vdc['paymentplanitems'] = $m4is_sga01f7t2843tha5gqm396tx;
}
}
}
}
}
set_transient( $m4is_r2d01p7w70wh2g5,
 $m4is_q4yx8vdc, HOUR_IN_SECONDS * 3 );
if ( $m4is_06ga5y7jaf75 == 'json' ) {
$m4is_q4yx8vdc = json_encode( $m4is_q4yx8vdc );
}
return $m4is_q4yx8vdc;

}

function m4is_f51yh9x2x5zd1b7gtq0g( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_p0qs50vms9t3jeq2stcz7 = true, $m4is_6s2g28yvyasfe = true,
 $m4is_p8hg9z4svyh5vhh = false ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp < 1 ) {
return [];

}
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');
$m4is_r2d01p7w70wh2g5 = 'Memberium::' . $m4is_v4beyw7zqhr3 . '::Invoices::' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

$m4is_qpzk7kkc6v2bhxchqns6f9m = [];
if (! $m4is_p8hg9z4svyh5vhh) {
$m4is_tbdh9qb6r6z = get_transient($m4is_r2d01p7w70wh2g5);
}
if (empty($m4is_qpzk7kkc6v2bhxchqns6f9m) ) {
$m4is_z81tvhx0by6g88js7vkdv38x90w7x = true;

$m4is_425gdshb6vsnshz1amx2j6spw = 'DateCreated';
$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' => (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp
];

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',
'CreditStatus',
'DateCreated',
'Description',
'InvoiceTotal',
'InvoiceType',
'JobId',
'PayPlanStatus',

'PayStatus',
'ProductSold',
'RefundStatus',
'TotalDue',
'TotalPaid',
];
$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj('Invoice',
 1000, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, $m4is_425gdshb6vsnshz1amx2j6spw, $m4is_z81tvhx0by6g88js7vkdv38x90w7x);

set_transient($m4is_r2d01p7w70wh2g5, $m4is_tbdh9qb6r6z, 1800);
}
foreach($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
$m4is_bybz4sbeqqtc7p0ktbads2gh025c3g = false;

$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_bamv772v['Id'];
$m4is_y8dertj102htc4ddxxnfq9kctd = max($m4is_bamv772v['TotalDue'], $m4is_bamv772v['InvoiceTotal']);

$m4is_bybz4sbeqqtc7p0ktbads2gh025c3g = $m4is_bamv772v['TotalPaid'];

$m4is_bamv772v['!payment_due'] = $m4is_y8dertj102htc4ddxxnfq9kctd - $m4is_bybz4sbeqqtc7p0ktbads2gh025c3g;

$m4is_bybz4sbeqqtc7p0ktbads2gh025c3g = $m4is_bamv772v['!payment_due'] == 0;
if ( $m4is_p0qs50vms9t3jeq2stcz7 && empty( $m4is_bamv772v['!payment_due'] ) ) {
$m4is_qpzk7kkc6v2bhxchqns6f9m[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_bamv772v;


}
if ($m4is_6s2g28yvyasfe && (! empty($m4is_bamv772v['!payment_due']) ) ) {
$m4is_qpzk7kkc6v2bhxchqns6f9m[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_bamv772v;

}
}
return $m4is_qpzk7kkc6v2bhxchqns6f9m;
}
function m4is_nna76543() {
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');

$m4is_r2d01p7w70wh2g5 = 'Memberium::' . $m4is_v4beyw7zqhr3 . '::SubscriptionPlans';
$m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x = get_transient($m4is_r2d01p7w70wh2g5);

if (empty($m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x) ) {
$m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x = m4is_bbwjksaqsay3yt68xq9afn::m4is_vgzt7cz68yj8();

}
return $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x;
}
function m4is_s7mfevxpgtx3wp1qa9($m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y = 0) {
if ($m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y == 0) {
return FALSE;

}
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');
$m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y = (int) $m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y;

$m4is_r2d01p7w70wh2g5 = "Memberium::{$m4is_v4beyw7zqhr3}::OrderItems::{$m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y}";
$m4is_td82zp3b4je16qx7j591xxr94qjdcz5 = get_transient($m4is_r2d01p7w70wh2g5);

if (! empty($m4is_td82zp3b4je16qx7j591xxr94qjdcz5) ) {
return $m4is_td82zp3b4je16qx7j591xxr94qjdcz5;
}
unset($m4is_td82zp3b4je16qx7j591xxr94qjdcz5);

$m4is_k7p8pmxsbkqrje3y20 = 'OrderItem';
$m4is_j34bmw9dcjexfj1qpz = ['OrderId' => $m4is_fxhmb0nmf5r0bzqhsyb4scqp1mhr3y];
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n($m4is_k7p8pmxsbkqrje3y20);

$m4is_td82zp3b4je16qx7j591xxr94qjdcz5 = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2($m4is_k7p8pmxsbkqrje3y20, 1000, 0, $m4is_j34bmw9dcjexfj1qpz,
 $m4is_0x2gypzsbnenpkq5bam3dkbg5);
if (! empty($m4is_td82zp3b4je16qx7j591xxr94qjdcz5) ) {
if (is_array($m4is_td82zp3b4je16qx7j591xxr94qjdcz5) ) {
set_transient($m4is_r2d01p7w70wh2g5,
 $m4is_td82zp3b4je16qx7j591xxr94qjdcz5, 1800);
return $m4is_td82zp3b4je16qx7j591xxr94qjdcz5;
}
}
return FALSE;
}
function m4is_j4c49s3gx2v8vx0v8ap1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0,
 $m4is_p8hg9z4svyh5vhh = false ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ? (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp : $this->m4is_1qbr5gs0jfsnf569vm930v();

if ( empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ) {
return [];
}
$m4is_r2d01p7w70wh2g5 = 'memberium_subscriptions::' . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

$m4is_yggq5j195mnp46m3zfr = get_transient( $m4is_r2d01p7w70wh2g5 );
if ( $m4is_p8hg9z4svyh5vhh || ! is_array( $m4is_yggq5j195mnp46m3zfr ) ) {
$m4is_j34bmw9dcjexfj1qpz = ['ContactId' =>
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp];
$m4is_425gdshb6vsnshz1amx2j6spw = 'Id';
$m4is_z81tvhx0by6g88js7vkdv38x90w7x = false;
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'RecurringOrder' );

$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj( 'RecurringOrder', 999, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5,
 $m4is_425gdshb6vsnshz1amx2j6spw, $m4is_z81tvhx0by6g88js7vkdv38x90w7x );
$m4is_yggq5j195mnp46m3zfr = [];
if ( is_array( $m4is_tbdh9qb6r6z ) ) {
foreach ( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_yggq5j195mnp46m3zfr[$m4is_bamv772v['Id']] = $m4is_bamv772v;

}
}
set_transient( $m4is_r2d01p7w70wh2g5, $m4is_yggq5j195mnp46m3zfr, HOUR_IN_SECONDS / 12 );
unset($m4is_tbdh9qb6r6z, $m4is_bamv772v,
 $m4is_0x2gypzsbnenpkq5bam3dkbg5, $m4is_j34bmw9dcjexfj1qpz);
}
if (is_array($m4is_yggq5j195mnp46m3zfr) ) {
foreach($m4is_yggq5j195mnp46m3zfr as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp) {
if (! empty($m4is_29gzevpx8rbkp['EndDate']) && $m4is_29gzevpx8rbkp['Status'] == 'Active' && $m4is_29gzevpx8rbkp['EndDate'] < date( 'Ymd' ) ) {
$m4is_29gzevpx8rbkp['Status'] = 'Inactive';

}
if ($m4is_29gzevpx8rbkp['Status'] <> 'Active') {
$m4is_29gzevpx8rbkp['NextBillDate'] = '';
}
$m4is_yggq5j195mnp46m3zfr[$m4is_bqhtspcavhb01spmfd3x] = $m4is_29gzevpx8rbkp;

}
}
return $m4is_yggq5j195mnp46m3zfr;
}
function m4is_xhjsmym9bm9s3wat7ar2f($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0) {
global $wpdb;

$m4is_csnk3yn47 = m4is_bbwjksaqsay3yt68xq9afn::m4is_syjrxw7rw3s();
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT MAX(`jobid`) FROM `{$m4is_csnk3yn47}` WHERE `appname` = '{$m4is_v4beyw7zqhr3}' AND `contactid` = {$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp};";

return (int) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
}
function m4is_xjjmvdkhw3a90() {
global $wpdb;
$m4is_csnk3yn47 = m4is_bbwjksaqsay3yt68xq9afn::m4is_syjrxw7rw3s();

$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT MAX(`jobid`) FROM `{$m4is_csnk3yn47}` WHERE `appname` = '{$m4is_v4beyw7zqhr3}';";

return (int) $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
}

function m4is_t8j85edw22dp( $m4is_gv7vjyv2c6g3nepw6 ) {
$m4is_v4p6t5d2bwwe1kma5 = strtolower( substr( $m4is_gv7vjyv2c6g3nepw6['bypass_commissions'],
 0, 1 ) );
$m4is_v4p6t5d2bwwe1kma5 = ($m4is_v4p6t5d2bwwe1kma5 == 'y' || $m4is_v4p6t5d2bwwe1kma5 == 1) ? TRUE : FALSE;
$m4is_v4p6t5d2bwwe1kma5 = (bool) $m4is_gv7vjyv2c6g3nepw6['bypass_commissions'];

$m4is_2s4r4qhg7mfth5rzbmq = strtolower(substr($m4is_gv7vjyv2c6g3nepw6['delete_failed'], 0, 1) );
$m4is_2s4r4qhg7mfth5rzbmq = ($m4is_2s4r4qhg7mfth5rzbmq == 'y' || $m4is_2s4r4qhg7mfth5rzbmq == 1) ? TRUE : FALSE;

$m4is_3a8cdrc99eha87fhq5vpk39xw0awt4ma = (int) $m4is_gv7vjyv2c6g3nepw6['product_type'];
$m4is_3a8cdrc99eha87fhq5vpk39xw0awt4ma = ($m4is_gv7vjyv2c6g3nepw6['product_type'] > 0 && $m4is_gv7vjyv2c6g3nepw6['product_type'] < 15) ? $m4is_gv7vjyv2c6g3nepw6['product_type'] : 4;

$m4is_hehjys3zxf0yg2v0n = (bool) $m4is_gv7vjyv2c6g3nepw6['autorun'];
$m4is_wtqm5h9z3 = (int) $m4is_gv7vjyv2c6g3nepw6['creditcard_id'];

$m4is_2s4r4qhg7mfth5rzbmq = (bool) $m4is_gv7vjyv2c6g3nepw6['delete_failed'];
$m4is_3a8cdrc99eha87fhq5vpk39xw0awt4ma = (int) $m4is_gv7vjyv2c6g3nepw6['item_type'];

$m4is_ab16kbzy14jeh = (int) $m4is_gv7vjyv2c6g3nepw6['lead_affiliate_id'];
$m4is_4ykjca62r2hsxv7pc = (int) $m4is_gv7vjyv2c6g3nepw6['merchant_id'];

$m4is_nctf6sc4v5npxn5der7ve5gs = (int) $m4is_gv7vjyv2c6g3nepw6['product_id'];
$m4is_yers00faym = trim( $m4is_gv7vjyv2c6g3nepw6['product_description'] ?? '' ) ;

$m4is_w2fchbxv2n295yj6 = trim( $m4is_gv7vjyv2c6g3nepw6['product_name'] ?? '' );
$m4is_b4wdv1pbps5xdenymtksr = (float) $m4is_gv7vjyv2c6g3nepw6['product_price'];

$m4is_ap27k2t9s2sf806adn = (int) $m4is_gv7vjyv2c6g3nepw6['quantity'];
$m4is_j2j6ac72bkjdn9nm = (int) $m4is_gv7vjyv2c6g3nepw6['sales_affiliate_id'];

$m4is_t5g56wvsxb2 = (int) $m4is_gv7vjyv2c6g3nepw6['has_payment_plan'];
$m4is_z913je2zk = $m4is_gv7vjyv2c6g3nepw6['order_date'];
$m4is_7chb5nf1xhfw8vwhz5rmwrgvr = (bool) $m4is_gv7vjyv2c6g3nepw6['taxable'];

$m4is_pbw3vdb4efjcdbwv1pqm9p9vy9v = trim($m4is_gv7vjyv2c6g3nepw6['success_action']);
$m4is_p0epsjdt3 = trim($m4is_gv7vjyv2c6g3nepw6['success_goals']);

$m4is_tgythah7f5rp9r8z = trim($m4is_gv7vjyv2c6g3nepw6['success_tags']);
$m4is_fw4veqwz8na2bezjtps8mzn = trim($m4is_gv7vjyv2c6g3nepw6['fail_action']);

$m4is_0zx0xw26ysq6x9ctkt8m4c930rt = trim($m4is_gv7vjyv2c6g3nepw6['fail_goals']);
$m4is_qa7m8ysjk6xf1m57150 = trim($m4is_gv7vjyv2c6g3nepw6['fail_tags']);

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $this->m4is_1qbr5gs0jfsnf569vm930v();
if ( $m4is_t5g56wvsxb2 ) {
$m4is_50fnvk3yv451rzxan8t1p = (bool) $m4is_gv7vjyv2c6g3nepw6['payplan_autocharge'];

$m4is_7bdqgkngfejntb = (int) $m4is_gv7vjyv2c6g3nepw6['payplan_max_retries'];
$m4is_bgf2bthk2x = (int) $m4is_gv7vjyv2c6g3nepw6['payplan_retry_days'];

$m4is_tbhsm0hpxds = (float) $m4is_gv7vjyv2c6g3nepw6['payplan_initial_amount'];
$m4is_21g52s79ttvkpd4 = (int) $m4is_gv7vjyv2c6g3nepw6['payplan_payment_count'];

$m4is_8ek18j3qg146h = (int) $m4is_gv7vjyv2c6g3nepw6['payplan_days_between'];
}

$m4is_z913je2zk = date( 'Y-m-d\TH:i:s' );
$m4is_0906y1a1fyz3wa = $this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->blankOrder( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_yers00faym, $m4is_z913je2zk, $m4is_ab16kbzy14jeh, $m4is_j2j6ac72bkjdn9nm );
$this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->addOrderItem( $m4is_0906y1a1fyz3wa,
 $m4is_nctf6sc4v5npxn5der7ve5gs, $m4is_3a8cdrc99eha87fhq5vpk39xw0awt4ma, $m4is_b4wdv1pbps5xdenymtksr, $m4is_ap27k2t9s2sf806adn, $m4is_w2fchbxv2n295yj6,
 $m4is_yers00faym );
if ( $m4is_t5g56wvsxb2 ) {
$m4is_tf6e2k62s1p93haktj03e7e = $this->m4is_wsme5a297xh0v6d5y->infuDate( date( 'm-d-Y' ) );

$m4is_cj84t03h4cdshzeanq4f4e5efeh = $this->m4is_wsme5a297xh0v6d5y->infuDate( date( 'm-d-Y' ) );
$m4is_hartbe843crydzh = $this->m4is_wsme5a297xh0v6d5y->payPlan( $m4is_0906y1a1fyz3wa,
 $m4is_50fnvk3yv451rzxan8t1p, $m4is_wtqm5h9z3, $m4is_4ykjca62r2hsxv7pc, $m4is_bgf2bthk2x, $m4is_7bdqgkngfejntb, $m4is_tbhsm0hpxds, $m4is_z913je2zk,
 $m4is_cj84t03h4cdshzeanq4f4e5efeh, $m4is_21g52s79ttvkpd4, $m4is_8ek18j3qg146h );
}
if ( $m4is_7chb5nf1xhfw8vwhz5rmwrgvr ) {
$ret = $this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->recalculateTax($m4is_0906y1a1fyz3wa);

}
$m4is_hartbe843crydzh = $this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->chargeInvoice($m4is_0906y1a1fyz3wa, 'Memberium API Order',
 $m4is_wtqm5h9z3, $m4is_4ykjca62r2hsxv7pc, false );
if (in_array(strtolower($m4is_hartbe843crydzh['Code']), ['approved', 'skipped']) ) {

$m4is_hartbe843crydzh = $m4is_0906y1a1fyz3wa;

if ( $m4is_pbw3vdb4efjcdbwv1pqm9p9vy9v > '') {
$this->m4is_x5k6c7dm38wwaxnhnzse( $m4is_pbw3vdb4efjcdbwv1pqm9p9vy9v, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
if ( $m4is_p0epsjdt3 > '' ) {
$this->m4is_5qyk7ea4p2nw8ph( $m4is_p0epsjdt3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if ( $m4is_tgythah7f5rp9r8z > '' ) {
$this->m4is_ppmdm3jy0dzgsnx($m4is_tgythah7f5rp9r8z,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
}
else {
if ( $m4is_2s4r4qhg7mfth5rzbmq && $m4is_0906y1a1fyz3wa > 0 ) {
$this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->deleteInvoice( $m4is_0906y1a1fyz3wa );

}

if ($m4is_fw4veqwz8na2bezjtps8mzn > '') {
$this->m4is_x5k6c7dm38wwaxnhnzse( $m4is_fw4veqwz8na2bezjtps8mzn, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
if ($m4is_0zx0xw26ysq6x9ctkt8m4c930rt > '') {
$this->m4is_5qyk7ea4p2nw8ph( $m4is_0zx0xw26ysq6x9ctkt8m4c930rt, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
if ($m4is_qa7m8ysjk6xf1m57150 > '') {
$this->m4is_ppmdm3jy0dzgsnx( $m4is_qa7m8ysjk6xf1m57150, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
$m4is_hartbe843crydzh = false;
}
$this->m4is_km2vptq0bwg($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}




function m4is_g3gsedmkn2e( $m4is_9z1bwd0x,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 = false, $m4is_csx0y36xw = false ) {
if ( empty( $m4is_9z1bwd0x ) ) {
return;
}
if (! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;

}
if (! is_array($m4is_9z1bwd0x) ) {
$m4is_9z1bwd0x = array_filter( explode( ',', trim( $m4is_9z1bwd0x ) ) );
}
$m4is_9z1bwd0x = array_filter(array_map('strtolower',
 $m4is_9z1bwd0x) );
if ( empty( $m4is_9z1bwd0x ) ) {
return;
}
if (! $m4is_wk4dh1rnd3wmwvsggq51nhn87) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_vd3qpw0vkdm();

}
if ($m4is_wk4dh1rnd3wmwvsggq51nhn87 < 1) {
return;
}
$m4is_c91ttxxajvjxzn4z0 = get_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memberium_tokens',
 true);
if (! $m4is_c91ttxxajvjxzn4z0) {
$m4is_c91ttxxajvjxzn4z0 = [];
}
$m4is_c91ttxxajvjxzn4z0 = array_filter(array_map('strtolower',
 $m4is_c91ttxxajvjxzn4z0) );
foreach ($m4is_9z1bwd0x as $m4is_s0hfpx2zktwa0hangkfqn3) {
if (substr($m4is_s0hfpx2zktwa0hangkfqn3, 0,
 1) === '-') {
$m4is_s0hfpx2zktwa0hangkfqn3 = substr($m4is_s0hfpx2zktwa0hangkfqn3, 1);
$m4is_j8j55t8dz79m7 = array_search($m4is_s0hfpx2zktwa0hangkfqn3,
 $m4is_c91ttxxajvjxzn4z0);
unset($m4is_c91ttxxajvjxzn4z0[$m4is_j8j55t8dz79m7]);
do_action('memb_remove_token', $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_s0hfpx2zktwa0hangkfqn3);
}
else {
$m4is_c91ttxxajvjxzn4z0[] = $m4is_s0hfpx2zktwa0hangkfqn3;
do_action('memb_add_token', $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_s0hfpx2zktwa0hangkfqn3);
}
}
$m4is_c91ttxxajvjxzn4z0 = array_unique($m4is_c91ttxxajvjxzn4z0);
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memberium_tokens', $m4is_c91ttxxajvjxzn4z0 );
}
function m4is_q5xk3krkg4vpabvqmn($m4is_9z1bwd0x, $m4is_wk4dh1rnd3wmwvsggq51nhn87 = false) {
if (current_user_can('manage_options') ) {
return true;

}

if (! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return false;
}
if (! $m4is_wk4dh1rnd3wmwvsggq51nhn87) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_vd3qpw0vkdm();

}
if ($m4is_wk4dh1rnd3wmwvsggq51nhn87 < 1) {
return;
}
$m4is_9z1bwd0x = array_filter(array_map('strtolower', explode(',', trim($m4is_9z1bwd0x) ) ) );

$m4is_c91ttxxajvjxzn4z0 = get_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memberium_tokens', true);
if (! $m4is_c91ttxxajvjxzn4z0) {
$m4is_c91ttxxajvjxzn4z0 = [];

}
$m4is_c91ttxxajvjxzn4z0 = array_filter(array_map('strtolower', $m4is_c91ttxxajvjxzn4z0) );
if (count(array_intersect($m4is_9z1bwd0x,
 $m4is_c91ttxxajvjxzn4z0) ) ) {
return true;
}
return false;
}




function m4is_1aaba0kvhy20tdwgbwaahhn8nx8r9j($m4is_syqymyz40rx4xgtqp8475ffwzw,
 $m4is_tdr04w7fk3b7k2at1vz9jpr1sd2){
$m4is_y7084n6v67jme9va8yz = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('memberships');
$m4is_y7084n6v67jme9va8yz = is_array($m4is_y7084n6v67jme9va8yz) ? $m4is_y7084n6v67jme9va8yz : [];

return $m4is_y7084n6v67jme9va8yz;
}

function m4is_k19vck8278awztx11tyrv( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_06c8s5xs94f91335gnaey25 ) {
global $wpdb;

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
if (is_int($m4is_06c8s5xs94f91335gnaey25) || is_string($m4is_06c8s5xs94f91335gnaey25) ) {
$m4is_06c8s5xs94f91335gnaey25 = explode(',',
 $m4is_06c8s5xs94f91335gnaey25);
}

foreach ($m4is_06c8s5xs94f91335gnaey25 as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) {
if ( (int) $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 > 0) {
$this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->grpAssign($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 (int) $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0);
$this->m4is_mz8ypkzzr4fxz8e42njma37v6ge02($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
else {
$this->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->grpRemove($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 (int) abs($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) );
$this->m4is_mz8ypkzzr4fxz8e42njma37v6ge02($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_1r5z39mk94w0nqm2d = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user', 'crm_id',
 0 );
$m4is_kzhcn27jf36zhrt = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user',
 'tags', '' );
if ( $m4is_1r5z39mk94w0nqm2d == $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$m4is_8sezvqjmjp811vq3d0a3cssrq23d = explode(',',
 $m4is_kzhcn27jf36zhrt );
foreach ($m4is_06c8s5xs94f91335gnaey25 as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) {
if ($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 > 0) {
$m4is_8sezvqjmjp811vq3d0a3cssrq23d[] = $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0;

}
else {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = (int) abs($m4is_119nhqx9wbzd6xtak5xp7nv1hcb0);
unset($m4is_8sezvqjmjp811vq3d0a3cssrq23d[$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0]);

}
}
$m4is_5rbenkpt1v7xby2cknbs7 = "REPLACE INTO %i SET `value` = %s WHERE `id` = %d AND `appname` = %s AND `fieldname` ='Groups'";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3(),
 implode( ',', $m4is_8sezvqjmjp811vq3d0a3cssrq23d ), $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $this->m4is_pdgd084n380vnszr3r('appname') );

$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

}
$this->m4is_mz8ypkzzr4fxz8e42njma37v6ge02($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
$this->disable_login_redirect = TRUE;

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}



function m4is_yma580fd058zsj8bvdpxvqq($m4is_bfca6yf2zd7cv1e9p92x) {
$m4is_bfca6yf2zd7cv1e9p92x = (int) $m4is_bfca6yf2zd7cv1e9p92x;

$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = 'memberium::email_template::' . $m4is_bfca6yf2zd7cv1e9p92x;

$m4is_r2g10s87x43pdk8y5cq9hw801g = get_transient($m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z);

if ($m4is_r2g10s87x43pdk8y5cq9hw801g === false) {
$m4is_r2g10s87x43pdk8y5cq9hw801g = $this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->getEmailTemplate($m4is_bfca6yf2zd7cv1e9p92x);

if (is_array($m4is_r2g10s87x43pdk8y5cq9hw801g) ) {
set_transient($m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_r2g10s87x43pdk8y5cq9hw801g,
 DAY_IN_SECONDS);
}
else {
$m4is_r2g10s87x43pdk8y5cq9hw801g = false;
}
}
return $m4is_r2g10s87x43pdk8y5cq9hw801g;
}
function m4is_cj2tmcnhdvm2m849gd9ef4ap598($m4is_r2g10s87x43pdk8y5cq9hw801g) {
}





function m4is_j7f5qx7xe17m8kpgkjkv2wndbcqv7shx() {
}



function m4is_hy1y99cxmzwtdy1n0hd475c3vff8eyxm( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 string $m4is_06c8s5xs94f91335gnaey25 = '', string $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = '', string $m4is_p5qbm0pfxxg = '', string $m4is_v4beyw7zqhr3 = '',
 bool $m4is_h4ac6c44r8cwymcshz266q73kgg = false, bool $m4is_csx0y36xw = false) : void {
if (! empty($m4is_p5qbm0pfxxg) ) {
$this->m4is_5qyk7ea4p2nw8ph($m4is_p5qbm0pfxxg,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_v4beyw7zqhr3);
}
if (! empty($m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p) ) {
$this->m4is_x5k6c7dm38wwaxnhnzse($m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
if (! empty($m4is_06c8s5xs94f91335gnaey25) ) {
$this->m4is_ppmdm3jy0dzgsnx($m4is_06c8s5xs94f91335gnaey25,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_h4ac6c44r8cwymcshz266q73kgg, $m4is_csx0y36xw);
}
}
function m4is_zw364cyqy0xmxv379( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0,
 $m4is_gh7agjsse = [] ) {
$m4is_n7x0afpz = [
'actionsets' => '',
'api_goals' => '',
'tags' => '',
'full_update' => false,
'debug' =>
 false,
'appname' => false,
];
$m4is_gh7agjsse = wp_parse_args( $m4is_gh7agjsse, $m4is_n7x0afpz );
do_action('memberium/do_actions_before',
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_gh7agjsse);
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
if (! empty($m4is_gh7agjsse['tags']) ) {
$this->m4is_ppmdm3jy0dzgsnx( $m4is_gh7agjsse['tags'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_gh7agjsse['full_update'], $m4is_gh7agjsse['debug'] );
}
if (! empty($m4is_gh7agjsse['actionsets']) ) {
$this->m4is_x5k6c7dm38wwaxnhnzse( $m4is_gh7agjsse['actionsets'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
if (! empty($m4is_gh7agjsse['api_goals']) ) {
$this->m4is_5qyk7ea4p2nw8ph( $m4is_gh7agjsse['api_goals'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_gh7agjsse['appname'] );
}
}
do_action('memberium/do_actions_after', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_gh7agjsse);
}
function m4is_5qyk7ea4p2nw8ph( $m4is_p5qbm0pfxxg = '', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = false, $m4is_v4beyw7zqhr3 = false ) {
if ( empty( $m4is_p5qbm0pfxxg ) ) {
return;

}
if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;
}
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $this->m4is_1qbr5gs0jfsnf569vm930v();

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp < 1 ) {
return;

}
if (! $m4is_v4beyw7zqhr3) {
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');
}
if ( ! is_array( $m4is_p5qbm0pfxxg ) ) {
$m4is_p5qbm0pfxxg = array_filter( explode( ',',
 $m4is_p5qbm0pfxxg ) );
}
$this->m4is_g5mnkgp73hhr194vscy4fq9qr9wghet();
$m4is_shp82v1j47cjzqe0yjbegjyh2bh19 = false;
foreach( $m4is_p5qbm0pfxxg as $m4is_exf0cmscjsfyk ) {
if ( $m4is_exf0cmscjsfyk > '' ) {
$m4is_hartbe843crydzh = m4is_xm67qjyegqdeb9wqcm::m4is_p9t3a40qehbq9ywrvrgje2vp8z( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_exf0cmscjsfyk, $m4is_v4beyw7zqhr3 );
$m4is_shp82v1j47cjzqe0yjbegjyh2bh19 = (boolean) ( $m4is_hartbe843crydzh[0]['success'] == 1 );

}
}
if ( $m4is_shp82v1j47cjzqe0yjbegjyh2bh19 ) {
$this->m4is_mz8ypkzzr4fxz8e42njma37v6ge02( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
}
function m4is_v6e1tsfbgfjk062m8xcq( $m4is_rjgjadqqnxebvds3xewx1nz, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = false ) {
if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;

}
if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $this->m4is_1qbr5gs0jfsnf569vm930v();
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp < 1) {
return;
}
if ( ! is_array( $m4is_rjgjadqqnxebvds3xewx1nz ) ) {
$m4is_rjgjadqqnxebvds3xewx1nz = array_filter(explode(',',
 $m4is_rjgjadqqnxebvds3xewx1nz) );
}
foreach ($m4is_rjgjadqqnxebvds3xewx1nz as $fus_id) {
if ($fus_id > 0) {
$this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->campAssign($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $fus_id);
}
}
}
function m4is_rckwxkjchcr1( $m4is_rjgjadqqnxebvds3xewx1nz, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0 ) {
if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;

}
if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $this->m4is_1qbr5gs0jfsnf569vm930v();
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
if ( ! is_array( $m4is_rjgjadqqnxebvds3xewx1nz ) ) {
$m4is_rjgjadqqnxebvds3xewx1nz = array_filter(explode(',',
 $m4is_rjgjadqqnxebvds3xewx1nz) );
}
foreach( $m4is_rjgjadqqnxebvds3xewx1nz as $m4is_7w6ncyj00qe ) {
if ($m4is_7w6ncyj00qe > 0) {
$this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->campPause( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_7w6ncyj00qe );
}
}
}
public function m4is_x5k6c7dm38wwaxnhnzse($m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = false) : void {
if ( empty( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p ) ) {
return;

}
if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;
}
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $this->m4is_1qbr5gs0jfsnf569vm930v();

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp < 1 ) {
return;

}
if (! is_array($m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p) ) {
$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = array_filter(explode(',', $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p) );

}


$this->m4is_g5mnkgp73hhr194vscy4fq9qr9wghet();
$m4is_shp82v1j47cjzqe0yjbegjyh2bh19 = false;
foreach ($m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p as $m4is_21cxfvnv9x394r98y6nareq1g1) {
$m4is_21cxfvnv9x394r98y6nareq1g1 = (int) $m4is_21cxfvnv9x394r98y6nareq1g1;

if ($m4is_21cxfvnv9x394r98y6nareq1g1 > 0) {
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = m4is_w3pp5rsxdc03bns3::m4is_07fbvb4g75($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 (int) $m4is_21cxfvnv9x394r98y6nareq1g1);
if (is_array($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m) ) {
foreach ($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m as $m4is_hartbe843crydzh) {
if (strtolower($m4is_hartbe843crydzh['Message']) <> 'nothing to do') {
$m4is_shp82v1j47cjzqe0yjbegjyh2bh19 = true;

}
}
unset($m4is_hartbe843crydzh);
}
}
}

if ( $m4is_shp82v1j47cjzqe0yjbegjyh2bh19 ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$this->m4is_km2vptq0bwg( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$this->m4is_mz8ypkzzr4fxz8e42njma37v6ge02( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
return;
}
public function m4is_efgd4f6mmgq2s3jb($m4is_rjgjadqqnxebvds3xewx1nz,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0) : void {
if (! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;
}
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $this->m4is_1qbr5gs0jfsnf569vm930v();

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp < 1 ) {
return;

}
if ( ! is_array( $m4is_rjgjadqqnxebvds3xewx1nz ) ) {
$m4is_rjgjadqqnxebvds3xewx1nz = array_filter( explode( ',', $m4is_rjgjadqqnxebvds3xewx1nz ) );

}
foreach ($m4is_rjgjadqqnxebvds3xewx1nz as $m4is_7w6ncyj00qe) {
if ( $m4is_7w6ncyj00qe > 0 ) {
$this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->campRemove( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_7w6ncyj00qe );
}
}
}

public function m4is_ppmdm3jy0dzgsnx( $m4is_06c8s5xs94f91335gnaey25 = '', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = false,
 $m4is_h4ac6c44r8cwymcshz266q73kgg = false, $m4is_csx0y36xw = false ) {
global $wpdb;
if (! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;

}
$m4is_8n279n6zgqp16k = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'sync_tag_details', 0 );
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r( 'appname' );

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ? $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp : $this->m4is_1qbr5gs0jfsnf569vm930v();

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;

}
if ( ! is_array( $m4is_06c8s5xs94f91335gnaey25 ) ) {
$m4is_06c8s5xs94f91335gnaey25 = array_filter( array_map( 'trim', explode( ',',
 $m4is_06c8s5xs94f91335gnaey25 ) ) );
}
if ( empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
return;
}
$m4is_n79rn4yv31hrq9g7a88yr91f = array_filter( explode( ',',
 m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user', 'tags', '' ) ) );
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = array_unique( m4is_0ddg4zyk7dn8eg0283::m4is_ttjvws3e6cfgrjntj5x( $m4is_06c8s5xs94f91335gnaey25 ) );

$m4is_trj70r4wt0xhyatyff = array_filter( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj, function( $m4is_hf6ctsm2pnexk ) { return $m4is_hf6ctsm2pnexk > 0;
 } );
$m4is_jjnxfafp9hh7nttbnvvhvrdw2c63ymt = array_filter( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj, function( $m4is_hf6ctsm2pnexk ) { return $m4is_hf6ctsm2pnexk < 0;
 } );
$m4is_jjnxfafp9hh7nttbnvvhvrdw2c63ymt = array_map( 'abs', $m4is_jjnxfafp9hh7nttbnvvhvrdw2c63ymt );
$m4is_816mynt698swjppw7gprm3zd5 = array_intersect( $m4is_trj70r4wt0xhyatyff,
 $m4is_jjnxfafp9hh7nttbnvvhvrdw2c63ymt );
$m4is_trj70r4wt0xhyatyff = array_diff( $m4is_trj70r4wt0xhyatyff, $m4is_n79rn4yv31hrq9g7a88yr91f,
 $m4is_816mynt698swjppw7gprm3zd5 );
$m4is_jjnxfafp9hh7nttbnvvhvrdw2c63ymt = array_intersect( $m4is_jjnxfafp9hh7nttbnvvhvrdw2c63ymt,
 $m4is_n79rn4yv31hrq9g7a88yr91f );
$m4is_jjnxfafp9hh7nttbnvvhvrdw2c63ymt = array_diff( $m4is_jjnxfafp9hh7nttbnvvhvrdw2c63ymt, $m4is_816mynt698swjppw7gprm3zd5 );

$m4is_f8qnmtpdmjxwg8s = m4is_0ddg4zyk7dn8eg0283::m4is_10dc7370y8z0fj7bx1v2vy7xh3ntzgqm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_trj70r4wt0xhyatyff );

$m4is_7r7bqgezyen963sfgrs8m9zc1ne0v = m4is_0ddg4zyk7dn8eg0283::m4is_dh3sdfjkt45wpj8k( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_jjnxfafp9hh7nttbnvvhvrdw2c63ymt );

$m4is_f8qnmtpdmjxwg8s = $m4is_f8qnmtpdmjxwg8s['SUCCESS'] ?? [];
$m4is_7r7bqgezyen963sfgrs8m9zc1ne0v = $m4is_7r7bqgezyen963sfgrs8m9zc1ne0v['SUCCESS'] ?? [];

$m4is_n79rn4yv31hrq9g7a88yr91f = array_merge( $m4is_n79rn4yv31hrq9g7a88yr91f, $m4is_f8qnmtpdmjxwg8s );
$m4is_n79rn4yv31hrq9g7a88yr91f = array_diff( $m4is_n79rn4yv31hrq9g7a88yr91f,
 $m4is_jjnxfafp9hh7nttbnvvhvrdw2c63ymt );
sort( $m4is_n79rn4yv31hrq9g7a88yr91f );
$m4is_n79rn4yv31hrq9g7a88yr91f = implode( ',', $m4is_n79rn4yv31hrq9g7a88yr91f );


$m4is_5rbenkpt1v7xby2cknbs7 = 'UPDATE %i SET `value` = %s WHERE `id` = %d AND `appname` = %s AND `fieldname` = "Groups";';
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7,
 m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3(), $m4is_n79rn4yv31hrq9g7a88yr91f, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_v4beyw7zqhr3);

$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);

if ( $m4is_8n279n6zgqp16k ) {
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r( 'appname' );

$m4is_9snzkxky0f7zxhyyb64 = m4is_0ddg4zyk7dn8eg0283::m4is_nm686mgj6zffggzes4k();
if ( ! empty( $m4is_trj70r4wt0xhyatyff ) ) {
$m4is_pyfe2h7z = ['appname',
 'contactid', 'tagid'];
$m4is_tbdh9qb6r6z = [];
$m4is_j5kd5andr815cy6wgaxn7e = [];
$m4is_cegjvya4jj68mdszk = [];
foreach( $m4is_trj70r4wt0xhyatyff as $m4is_hf6ctsm2pnexk ) {
$m4is_tbdh9qb6r6z[] = [ $m4is_v4beyw7zqhr3,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_hf6ctsm2pnexk ];
}
foreach ( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_j5kd5andr815cy6wgaxn7e[] = '(%s, %d, %d)';

foreach ( $m4is_bamv772v as $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_cegjvya4jj68mdszk[] = $m4is_rqxytszfq5v6syth1csqqxvy5;
}
}
$m4is_k7wafkhays = implode( ',',
 $m4is_pyfe2h7z );
$m4is_7efmwweapwn4m693099q3zp26v = implode( ',', $m4is_j5kd5andr815cy6wgaxn7e );
$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT IGNORE INTO `{$m4is_9snzkxky0f7zxhyyb64}` ( {$m4is_k7wafkhays} ) VALUES {$m4is_7efmwweapwn4m693099q3zp26v}";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, ...$m4is_cegjvya4jj68mdszk );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

}
if ( ! empty( $m4is_jjnxfafp9hh7nttbnvvhvrdw2c63ymt ) ) {
$m4is_b4tj8bz7gag2n7w4a3ych8s4hw86 = implode( ',', $m4is_jjnxfafp9hh7nttbnvvhvrdw2c63ymt );

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `contactid` = %d AND `appname` = %s AND `tagid` IN ( {$m4is_b4tj8bz7gag2n7w4a3ych8s4hw86} ) ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_9snzkxky0f7zxhyyb64, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_v4beyw7zqhr3 );
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}
}
foreach( $m4is_f8qnmtpdmjxwg8s as $m4is_hf6ctsm2pnexk ) {
do_action( 'memb_add_tag',
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_hf6ctsm2pnexk );
do_action( 'memberium/tag/assign', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_hf6ctsm2pnexk );
}
foreach( $m4is_7r7bqgezyen963sfgrs8m9zc1ne0v as $m4is_hf6ctsm2pnexk ) {
do_action( 'memb_remove_tag', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_hf6ctsm2pnexk );
do_action( 'memberium/tag/remove', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_hf6ctsm2pnexk );
}
$this->m4is_g5mnkgp73hhr194vscy4fq9qr9wghet();

$this->m4is_mz8ypkzzr4fxz8e42njma37v6ge02( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

}
public function m4is_ac9htnh2zwqydf5d( array $m4is_06c8s5xs94f91335gnaey25, int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0 ){
global $wpdb;

if (! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;
}
if( empty($m4is_06c8s5xs94f91335gnaey25) ){
return false;
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = empty( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) ? $this->m4is_1qbr5gs0jfsnf569vm930v() : $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp < 1) {
return;
}
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = $this->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->addRemoveContactTags($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_06c8s5xs94f91335gnaey25);
if( empty($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m) || ! is_array($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m) || is_wp_error($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m) ){
return;

}
$m4is_nkpz19a5pee359 = !empty($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m['add']) && !empty($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m['add']['SUCCESS']) ? $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m['add']['SUCCESS'] : false;

$m4is_ypzh3q2mvejn819fhhdxc1 = !empty($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m['remove']) && !empty($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m['remove']['SUCCESS']) ? $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m['remove']['SUCCESS'] : false;

if( ! $m4is_nkpz19a5pee359 && ! $m4is_ypzh3q2mvejn819fhhdxc1 ){
return;
}
$m4is_h1hgagd3k3hzgj8vjv01r3de57y = ( $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'sync_tag_details') == 1 );
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');
$m4is_shp82v1j47cjzqe0yjbegjyh2bh19 = false;

$m4is_n79rn4yv31hrq9g7a88yr91f = [];
$m4is_y1c21n59na1529yr82q1h9h8ks4j2 = ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp == $this->m4is_1qbr5gs0jfsnf569vm930v() );

$this->m4is_g5mnkgp73hhr194vscy4fq9qr9wghet();
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_n79rn4yv31hrq9g7a88yr91f = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memb_user',
 'tags', '' );
$m4is_n79rn4yv31hrq9g7a88yr91f = array_flip( array_filter( explode( ',', $m4is_n79rn4yv31hrq9g7a88yr91f ) ) );

if( $m4is_nkpz19a5pee359 ){
foreach ($m4is_nkpz19a5pee359 as $m4is_hf6ctsm2pnexk) {
if( ! array_key_exists($m4is_hf6ctsm2pnexk,
 $m4is_n79rn4yv31hrq9g7a88yr91f) ){
if( $m4is_h1hgagd3k3hzgj8vjv01r3de57y ){
$m4is_5rbenkpt1v7xby2cknbs7 = 'INSERT IGNORE INTO `' . m4is_0ddg4zyk7dn8eg0283::m4is_nm686mgj6zffggzes4k() . '` (`appname`, `contactid`, `tagid`) VALUES (%s, %d, %d);';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_v4beyw7zqhr3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_hf6ctsm2pnexk );
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}
$m4is_n79rn4yv31hrq9g7a88yr91f[ $m4is_hf6ctsm2pnexk ] = ! empty($m4is_n79rn4yv31hrq9g7a88yr91f) ? max($m4is_n79rn4yv31hrq9g7a88yr91f) + 1 : 1;

$m4is_shp82v1j47cjzqe0yjbegjyh2bh19 = true;
do_action('memb_add_tag', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_hf6ctsm2pnexk);
do_action('memberium/tag/assign',
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_hf6ctsm2pnexk );
}
}
}
unset($m4is_nkpz19a5pee359);

if( $m4is_ypzh3q2mvejn819fhhdxc1 ){
foreach ($m4is_ypzh3q2mvejn819fhhdxc1 as $m4is_hf6ctsm2pnexk) {
if( array_key_exists($m4is_hf6ctsm2pnexk,
 $m4is_n79rn4yv31hrq9g7a88yr91f) ){
if( $m4is_h1hgagd3k3hzgj8vjv01r3de57y ){
$m4is_5rbenkpt1v7xby2cknbs7 = 'DELETE FROM `' . m4is_0ddg4zyk7dn8eg0283::m4is_nm686mgj6zffggzes4k() . '` WHERE `contactid` = %d AND `tagid` = %d AND `appname` = %s ;';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_hf6ctsm2pnexk,
 $m4is_v4beyw7zqhr3);
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}
unset($m4is_n79rn4yv31hrq9g7a88yr91f[ $m4is_hf6ctsm2pnexk ]);
$m4is_shp82v1j47cjzqe0yjbegjyh2bh19 = true;

do_action('memb_remove_tag', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_hf6ctsm2pnexk);
do_action('memberium/tag/remove', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_hf6ctsm2pnexk);
}
}
}
unset($m4is_ypzh3q2mvejn819fhhdxc1);

if ( $m4is_shp82v1j47cjzqe0yjbegjyh2bh19 ) {
$m4is_n79rn4yv31hrq9g7a88yr91f = array_flip($m4is_n79rn4yv31hrq9g7a88yr91f);

sort($m4is_n79rn4yv31hrq9g7a88yr91f);
$m4is_n79rn4yv31hrq9g7a88yr91f = implode(',', $m4is_n79rn4yv31hrq9g7a88yr91f);
$m4is_5rbenkpt1v7xby2cknbs7 = 'UPDATE `' . m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3() . '` SET `value` = %s WHERE `id` = %d AND `appname` = %s AND `fieldname` = "Groups";';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_n79rn4yv31hrq9g7a88yr91f, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_v4beyw7zqhr3);
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
$this->m4is_mz8ypkzzr4fxz8e42njma37v6ge02($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

$this->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( $this->m4is_vd3qpw0vkdm() );

}
return;
}
public function m4is_w2ajfcb36m38deypfekt2t1b8d(array $m4is_3qwaf6xd03657aas, int $m4is_hf6ctsm2pnexk) : bool {
global $wpdb;

if (! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return false;
}
if( empty( $m4is_3qwaf6xd03657aas ) || empty( $m4is_hf6ctsm2pnexk ) ){
return false;

}
$m4is_knxbec8fr3be1s2tkx0ydee0z = $m4is_hf6ctsm2pnexk < 0 ? 'remove' : 'add';
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = $this->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->addRemoveTagContacts($m4is_3qwaf6xd03657aas,
 $m4is_hf6ctsm2pnexk);
$m4is_hf6ctsm2pnexk = abs($m4is_hf6ctsm2pnexk);

foreach( $m4is_3qwaf6xd03657aas as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$this->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
if( empty( $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m ) || ! array_key_exists( $m4is_hf6ctsm2pnexk, $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m ) ){
return false;

}
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m[$m4is_hf6ctsm2pnexk];
if ( empty( $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m['SUCCESS'] ) ) {
return false;

}
$m4is_h1hgagd3k3hzgj8vjv01r3de57y = ( $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'sync_tag_details' ) == 1 );
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');

$m4is_2sk3kjrabaecjw = m4is_rw8p2dfy073ez::m4is_bjp3vwwa9wfhkmbcb7($m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m['SUCCESS']);
$m4is_s27zxdkjtyhgf8nhsn = m4is_0ddg4zyk7dn8eg0283::m4is_nm686mgj6zffggzes4k();


foreach ( $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m['SUCCESS'] as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_shp82v1j47cjzqe0yjbegjyh2bh19 = false;

$m4is_n79rn4yv31hrq9g7a88yr91f = array_key_exists( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_2sk3kjrabaecjw ) ? $m4is_2sk3kjrabaecjw[$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp]->value : '';

$m4is_n79rn4yv31hrq9g7a88yr91f = empty( $m4is_n79rn4yv31hrq9g7a88yr91f ) ? [] : array_flip( array_filter( explode( ',', $m4is_n79rn4yv31hrq9g7a88yr91f ) ) );


if ( $m4is_knxbec8fr3be1s2tkx0ydee0z === 'add' ) {
if ( ! array_key_exists( $m4is_hf6ctsm2pnexk, $m4is_n79rn4yv31hrq9g7a88yr91f ) ) {
if ( $m4is_h1hgagd3k3hzgj8vjv01r3de57y ) {
$m4is_5rbenkpt1v7xby2cknbs7 = 'INSERT IGNORE INTO %i (`appname`, `contactid`, `tagid`) VALUES (%s, %d, %d);';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_s27zxdkjtyhgf8nhsn, $m4is_v4beyw7zqhr3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_hf6ctsm2pnexk );
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}

$m4is_n79rn4yv31hrq9g7a88yr91f[$m4is_hf6ctsm2pnexk] = ! empty($m4is_n79rn4yv31hrq9g7a88yr91f) ? max($m4is_n79rn4yv31hrq9g7a88yr91f) + 1 : 1;

$m4is_shp82v1j47cjzqe0yjbegjyh2bh19 = true;
do_action('memb_add_tag', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_hf6ctsm2pnexk);
do_action('memberium/tag/assign',
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_hf6ctsm2pnexk );
}
}

else{
if (array_key_exists($m4is_hf6ctsm2pnexk, $m4is_n79rn4yv31hrq9g7a88yr91f) ){
if( $m4is_h1hgagd3k3hzgj8vjv01r3de57y ){
$m4is_5rbenkpt1v7xby2cknbs7 = 'DELETE FROM %i WHERE `contactid` = %d AND `tagid` = %d AND `appname` = %s ;';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_s27zxdkjtyhgf8nhsn, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_hf6ctsm2pnexk, $m4is_v4beyw7zqhr3);
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}
unset($m4is_n79rn4yv31hrq9g7a88yr91f[ $m4is_hf6ctsm2pnexk ]);

$m4is_shp82v1j47cjzqe0yjbegjyh2bh19 = true;
do_action('memb_remove_tag', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_hf6ctsm2pnexk);

do_action('memberium/tag/remove', $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_hf6ctsm2pnexk);
}
}

if( $m4is_shp82v1j47cjzqe0yjbegjyh2bh19 ) {
$m4is_n79rn4yv31hrq9g7a88yr91f = array_flip( $m4is_n79rn4yv31hrq9g7a88yr91f );

sort($m4is_n79rn4yv31hrq9g7a88yr91f);
$m4is_n79rn4yv31hrq9g7a88yr91f = implode(',', $m4is_n79rn4yv31hrq9g7a88yr91f);
$m4is_5rbenkpt1v7xby2cknbs7 = 'UPDATE %i SET `value` = %s WHERE `id` = %d AND `appname` = %s AND `fieldname` = "Groups";';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7,$m4is_s27zxdkjtyhgf8nhsn, $m4is_n79rn4yv31hrq9g7a88yr91f,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_v4beyw7zqhr3);
$m4is_hartbe843crydzh = $wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
$this->m4is_mz8ypkzzr4fxz8e42njma37v6ge02($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

}
}
foreach( $m4is_3qwaf6xd03657aas as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$this->m4is_s8kbtxpx4z15b1y0xrspr7enm( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
return $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m;
}



function m4is_tyd13qd09k14r() {
$m4is_emz0mwk3g = $this->m4is_9n4xq1m3hh09eka();

foreach ($m4is_emz0mwk3g as $m4is_skkxj37nc8saew3r5abp3ptqy) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0;
if (! empty($m4is_skkxj37nc8saew3r5abp3ptqy['data']['contact_id']) ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_skkxj37nc8saew3r5abp3ptqy['data']['contact_id'];

}
else {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) $m4is_skkxj37nc8saew3r5abp3ptqy['data']['recurringorder_id'];
if ($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh > 0) {
$m4is_7b2yfzk0054 = ['ContactId'];

$m4is_bamv772v = $this->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->dsLoad('RecurringOrder', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_7b2yfzk0054);

if (is_array($m4is_bamv772v) ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_bamv772v['ContactId'];
}
}
}
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0) {
if ($m4is_skkxj37nc8saew3r5abp3ptqy['actiontype'] == 'achievegoal') {
$m4is_exf0cmscjsfyk = $m4is_skkxj37nc8saew3r5abp3ptqy['data']['end_goal'];

m4is_xm67qjyegqdeb9wqcm::m4is_p9t3a40qehbq9ywrvrgje2vp8z($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_exf0cmscjsfyk, $m4is_skkxj37nc8saew3r5abp3ptqy['appname']);

$this->m4is_zmr2c5jb8e36h87s38n($m4is_skkxj37nc8saew3r5abp3ptqy);
}
elseif ($m4is_skkxj37nc8saew3r5abp3ptqy['actiontype'] == 'actionset') {
$m4is_21cxfvnv9x394r98y6nareq1g1 = (int) $m4is_skkxj37nc8saew3r5abp3ptqy['data']['end_action'];

m4is_w3pp5rsxdc03bns3::m4is_07fbvb4g75( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_21cxfvnv9x394r98y6nareq1g1 );
$this->m4is_zmr2c5jb8e36h87s38n($m4is_skkxj37nc8saew3r5abp3ptqy);

}
elseif ($m4is_skkxj37nc8saew3r5abp3ptqy['actiontype'] == 'settags') {
}
elseif ($m4is_skkxj37nc8saew3r5abp3ptqy['actiontype'] == 'sendemail') {
}
}
}
}
private function m4is_me384vbsv18pc(string $m4is_vj33z5jx9t,
 string $m4is_dzm743bftz106jngndqhfew1jxdd, $m4is_d60kn1d3yvprp62rs332): int {
global $wpdb;
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r( 'appname' );

$m4is_vj33z5jx9t = strtolower(trim( $m4is_vj33z5jx9t ) );
$m4is_2zzqprfwg9wb7y1c66e9a1408ghacwta = strtotime( $m4is_dzm743bftz106jngndqhfew1jxdd );

$m4is_5rbenkpt1v7xby2cknbs7 = 'INSERT INTO %i (`pidlock`, `appname`, `actiontype`, `scheduled`, `data`) VALUES ( -1, %s, %s, %s, %s )';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, constant( 'MEMBERIUM_DB_QUEUE' ), $m4is_v4beyw7zqhr3, $m4is_vj33z5jx9t,
 $m4is_dzm743bftz106jngndqhfew1jxdd, json_encode($m4is_d60kn1d3yvprp62rs332) );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $wpdb->insert_id;

return $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;
}
private function m4is_9n4xq1m3hh09eka() {
global $wpdb;
$m4is_v4beyw7zqhr3 = $this->m4is_pdgd084n380vnszr3r('appname');

$m4is_r8rcjpvv2dgsbrayhcpgr88a65nx = mt_rand( 1000000, 9999999 );
$m4is_5rbenkpt1v7xby2cknbs7 = 'UPDATE %i SET `pidlock` = %d WHERE `appname`= %s AND `scheduled` <= NOW() AND `pidlock` < 1 ;';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, constant( 'MEMBERIUM_DB_QUEUE' ), $m4is_r8rcjpvv2dgsbrayhcpgr88a65nx,
 $m4is_v4beyw7zqhr3);
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
$m4is_5rbenkpt1v7xby2cknbs7 = 'SELECT * FROM %i WHERE `pidlock` = %d AND `appname`= %s ;';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, constant( 'MEMBERIUM_DB_QUEUE' ), $m4is_r8rcjpvv2dgsbrayhcpgr88a65nx,
 $m4is_v4beyw7zqhr3);
$m4is_4zsncj1fww48kt = (array) $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A);
foreach ($m4is_4zsncj1fww48kt as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_d60kn1d3yvprp62rs332 = json_decode($m4is_rqxytszfq5v6syth1csqqxvy5['data'], true);
if ($m4is_d60kn1d3yvprp62rs332) {
$m4is_4zsncj1fww48kt[$m4is_j8j55t8dz79m7]['data'] = $m4is_d60kn1d3yvprp62rs332;

}
}
return $m4is_4zsncj1fww48kt;
}
function m4is_zmr2c5jb8e36h87s38n( $m4is_skkxj37nc8saew3r5abp3ptqy ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) $m4is_skkxj37nc8saew3r5abp3ptqy['id'];

if ($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh) {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = 'DELETE FROM %i WHERE `id` = %d and `appname` = %s';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, constant( 'MEMBERIUM_DB_QUEUE' ), $m4is_skkxj37nc8saew3r5abp3ptqy['id'],
 $m4is_skkxj37nc8saew3r5abp3ptqy['appname']);
$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}
}



function m4is_kmn47rhk6egstaafg07jc102wx( $m4is_hce1y1a4qd65zhnwsj,
 $m4is_rqxytszfq5v6syth1csqqxvy5 = 1 ) {
$m4is_hce1y1a4qd65zhnwsj = trim($m4is_hce1y1a4qd65zhnwsj);
if (empty($m4is_hce1y1a4qd65zhnwsj) ) {
return false;

}
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = '';
return false;
}



function m4is_07wdg9bt473rk919vsyy9mw0yec() {
$m4is_gh7agjsse = unserialize(base64_decode($_POST['payload']) );

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_gh7agjsse['contact_id'];
$m4is_06c8s5xs94f91335gnaey25 = $m4is_gh7agjsse['tag_id'];

$m4is_p5qbm0pfxxg = $m4is_gh7agjsse['goals'];
$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = $m4is_gh7agjsse['action_id'];
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = '';


if ($m4is_06c8s5xs94f91335gnaey25 > '') {
$this->m4is_k19vck8278awztx11tyrv($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_06c8s5xs94f91335gnaey25);

}
if ($m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p > '') {
$this->m4is_x5k6c7dm38wwaxnhnzse($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p);

}
if ($m4is_p5qbm0pfxxg > '') {
$this->m4is_5qyk7ea4p2nw8ph($m4is_p5qbm0pfxxg, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
}
$this->m4is_km2vptq0bwg($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

die();
}
function m4is_ja1h3m98py05d6zech($m4is_5ygq2an97ejdbcf, $precision = 2) {
$m4is_k8g9y37tenmrpzc = ['B', 'KB', 'MB', 'GB',
 'TB'];
$m4is_5ygq2an97ejdbcf = max($m4is_5ygq2an97ejdbcf, 0);
$m4is_wndkpxm9jn504z = floor( ($m4is_5ygq2an97ejdbcf ? log($m4is_5ygq2an97ejdbcf) : 0) / log(1024) );

$m4is_wndkpxm9jn504z = min($m4is_wndkpxm9jn504z, count($m4is_k8g9y37tenmrpzc) - 1);
$m4is_5ygq2an97ejdbcf /= (1 << (10 * $m4is_wndkpxm9jn504z) );

return round($m4is_5ygq2an97ejdbcf, $precision) . ' ' . $m4is_k8g9y37tenmrpzc[$m4is_wndkpxm9jn504z];
}



function m4is_4e68ws77x029syk5894a3xjfwdvn78sm( $m4is_hce1y1a4qd65zhnwsj = '' ) {
$m4is_hce1y1a4qd65zhnwsj = strtolower(trim($m4is_hce1y1a4qd65zhnwsj) );

$m4is_fh91430wnqcvjs3 = false;
$m4is_63jp3myxhpk1eyb606fb = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'remote_files' );
if ($m4is_hce1y1a4qd65zhnwsj) {
if (array_key_exists($m4is_hce1y1a4qd65zhnwsj,
 $m4is_63jp3myxhpk1eyb606fb) ) {
$m4is_fh91430wnqcvjs3 = $m4is_63jp3myxhpk1eyb606fb[$m4is_hce1y1a4qd65zhnwsj];
$m4is_n7x0afpz = [
'region' =>
 'us-east-1',
];
$m4is_fh91430wnqcvjs3 = wp_parse_args($m4is_fh91430wnqcvjs3, $m4is_n7x0afpz);
}
}
return $m4is_fh91430wnqcvjs3;
}







function m4is_mtnbyn4yged() {

}
function m4is_nk9vqetzyw4ac59sx7va4r2f7() {
$m4is_k7p8pmxsbkqrje3y20 = 'SavedFilter';

$m4is_qxyakeyz3sg2j0mznyg3rg8fjt = [];
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n('SavedFilter');

$m4is_j34bmw9dcjexfj1qpz = [
'ReportStoredName' => 'AffiliateActivitySummary',
];
do {
$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2($m4is_k7p8pmxsbkqrje3y20,
 $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5);
foreach($m4is_tbdh9qb6r6z as $m4is_bamv772v) {
$m4is_qxyakeyz3sg2j0mznyg3rg8fjt[$m4is_bamv772v['Id']] = [
'UserId' =>
 (int) $m4is_bamv772v['UserId'],
'FilterName' => $m4is_bamv772v['FilterName'],
];
}
$m4is_ek8adjz9yz7wvga34bby56++;
} while (count($m4is_tbdh9qb6r6z) >= $m4is_rkmcn1zd3r3k149h20vfr8z);

unset($m4is_tbdh9qb6r6z, $m4is_bamv772v, $m4is_ek8adjz9yz7wvga34bby56, $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_k7p8pmxsbkqrje3y20, $m4is_0x2gypzsbnenpkq5bam3dkbg5,
 $m4is_j34bmw9dcjexfj1qpz);
if (count($m4is_qxyakeyz3sg2j0mznyg3rg8fjt) == 1) {
}
return $m4is_qxyakeyz3sg2j0mznyg3rg8fjt;
}
function m4is_z8yh3tcbyxd5dzxtde7gaqvss($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0,
 $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k = 'first') {
}
function m4is_n2ajtpwcec( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) {
if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp || empty( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) ) {
return;

}
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6);
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_hartbe843crydzh = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'contact',
 $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, '' );
return $m4is_hartbe843crydzh;
}




public function m4is_athcjdqw8p49p47wawvkyvrctj7j8fb( int $m4is_mevc2yc0ngfz2fyq74b3k,
 int $m4is_wk4dh1rnd3wmwvsggq51nhn87, bool $m4is_hbhwj5tpp5r5hes05cj5 ) : int {
$m4is_rcpcsywpj = (bool) $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'persistent_login' );
if ( ! $m4is_rcpcsywpj ) {
return $m4is_mevc2yc0ngfz2fyq74b3k;
}
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'manage_options' ) ) {
return max( $m4is_mevc2yc0ngfz2fyq74b3k, WEEK_IN_SECONDS );
}
$m4is_mevc2yc0ngfz2fyq74b3k = 6 * MONTH_IN_SECONDS;

return $m4is_mevc2yc0ngfz2fyq74b3k;
}
function m4is_ajh5j4c6c8et4mh8a7f2zf8ekme9p8( array $m4is_n7x0afpz ) {
if (! $m4is_n7x0afpz['value_remember']) {
if ($this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'persistent_login') ) {
$m4is_n7x0afpz['value_remember'] = true;
}
}
return $m4is_n7x0afpz;
}

function m4is_cm5fpgsevwp4v17sszsk( $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g,
 $m4is_kw23kqxbesd8dvhkn = 0, $m4is_rmkve0cg1tazxga4w4raq46ztd82 = true, $m4is_67n2j2w16ynb2bz2ew4pn2cadxhp2 = true ) {
if ($this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'password_field') == 'Password') {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = substr($m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g, 0, 20);
}
return $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g;

}

private function m4is_eznq7njeh() : void {
if ( headers_sent() ) {
return;
}
$m4is_t9svq56t4ysv1rsgy1g61g = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'version', $this->m4is_5kywzj74m8ht8s0() );
$m4is_bvag9k9h359 = $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'disable_xframe',
 false );
header( 'X-Powered-By: Memberium ' . $m4is_t9svq56t4ysv1rsgy1g61g, false );
if (! $m4is_bvag9k9h359) {
header('X-Frame-Options: SAMEORIGIN');

}
}

private function m4is_p1539p5pfm010pg5y5j2xyv() : void {
add_action( 'clear_auth_cookie', ['m4is_an0pxqdph6ax26586c', 'm4is_79fvfxtd3f4qqn9xb2dnvjn9']);

add_action( 'login_form_login', ['m4is_an0pxqdph6ax26586c', 'm4is_hdyg8e53r8'], -1000, 0 );
add_action( 'wp_authenticate', ['m4is_an0pxqdph6ax26586c',
 'm4is_rf7gc6dzkjjgmdb'], 10);
add_action( 'wp_authenticate', ['m4is_an0pxqdph6ax26586c', 'm4is_p0b902kf3f28yygrqd9'], 1);
add_action( 'wp_login',
 ['m4is_an0pxqdph6ax26586c', 'm4is_mtgac1xx510k5wv5hey5xwk2x6kgst'], 900, 2); 
add_action( 'wp_login', ['m4is_an0pxqdph6ax26586c', 'm4is_m40pfdyzkwh8tva'],
 20, 2);
add_filter( 'authenticate', ['m4is_an0pxqdph6ax26586c', 'm4is_vbcfrx32gyzswsq6'], 10, 3 );
add_filter( 'authenticate', ['m4is_an0pxqdph6ax26586c',
 'm4is_1j3nj4zz6crjktk'], 10, 3 );
add_filter( 'authenticate', ['m4is_an0pxqdph6ax26586c', 'm4is_kknrpk8c5pbp9dd'], 100, 3 );
add_filter( 'authenticate',
 ['m4is_an0pxqdph6ax26586c', 'm4is_nyv44afbp5q7ym86bmsw1'], -10, 3 ); 
add_filter( 'authenticate', ['m4is_an0pxqdph6ax26586c', 'm4is_sgf1p3rgpnv9tnvrn8ab731'],
 -15, 3 );
add_filter( 'login_form_defaults', [$this, 'm4is_ajh5j4c6c8et4mh8a7f2zf8ekme9p8']);
add_filter( 'login_redirect', ['m4is_an0pxqdph6ax26586c',
 'm4is_ppxk4kwnd7g6xrn91m8kkdw'], 999999, 3 );
add_filter( 'login_url', [$this, 'm4is_z2h29esmegb8q4n1dxcfr8'], 999999, 3);
add_filter( 'wp_login',
 ['m4is_an0pxqdph6ax26586c', 'm4is_mgxg7n1g'], 9 );

add_filter('authenticate', ['m4is_an0pxqdph6ax26586c', 'm4is_wazv2wt016jnz8pyemna3b'],
 -1000, 3);
add_filter('login_form_bottom', ['m4is_an0pxqdph6ax26586c', 'm4is_72p0jfds0x560rsnferejr43'], 10, 2);
add_action('login_form',
 ['m4is_an0pxqdph6ax26586c', 'm4is_72p0jfds0x560rsnferejr43']);
}

private function m4is_v8r2tfqd() : void {
$m4is_map8tdmsvarsn03f1fhfytx61b4a = time() - 300;

$m4is_emz0mwk3g = [
'memberium_maintenance' => 'hourly',
'memberium/contacts/makepass_scan' => '3min',
];
foreach($m4is_emz0mwk3g as $m4is_skkxj37nc8saew3r5abp3ptqy =>
 $m4is_0j3xkma6dp) {
$m4is_qm78qahrsjrp9v9vf2phj31x = time() + mt_rand(600,900);
$m4is_92qfh5bq117taxtww6 = (int) wp_next_scheduled($m4is_skkxj37nc8saew3r5abp3ptqy);

if ($m4is_92qfh5bq117taxtww6 < $m4is_map8tdmsvarsn03f1fhfytx61b4a) {
wp_clear_scheduled_hook($m4is_skkxj37nc8saew3r5abp3ptqy);
wp_schedule_event(time() + mt_rand(600,
900), $m4is_0j3xkma6dp, $m4is_skkxj37nc8saew3r5abp3ptqy);
}
}
}

private function m4is_qej3ez4ahnpc0dc4a2xqxvfc() : void {

add_filter( 'cron_schedules',
 ['m4is_azvwve90eh41048xqbzgye9vff', 'm4is_s7bs0aqd6'], 1 );

add_action( 'memberium/actionsets/sync', ['m4is_w3pp5rsxdc03bns3', 'm4is_7h358pwxvm3t8'] );

add_action( 'memberium/contacts/async', [ 'm4is_rw8p2dfy073ez', 'm4is_t35vgq4em8n6dfh4xat'] );
add_action( 'memberium/contacts/makepass_scan',
 ['m4is_rn5d7867js9nrsh3ej5wrgwj3', 'm4is_8hwc4kvv4g0w6gqhqe3r'] );
add_action( 'memberium/contacts/sync_custom_fields', ['m4is_q28s00aabb2yd3d',
 'm4is_rc7cpymf5b7xy32xqb50085d4m'] );
add_action( 'memberium/invoices/sync', ['m4is_bbwjksaqsay3yt68xq9afn', 'm4is_05djdppw'] );
add_action( 'memberium/maintenance/logs/trim',
 ['m4is_c2ry5jv8yz446k40191', 'm4is_epy4q4ttk'] );
add_action( 'memberium/maintenance/logs/trim', ['m4is_an0pxqdph6ax26586c', 'm4is_aycak0g6qeg6r2wtecgjcay71'] );

add_action( 'memberium/maintenance/updater', ['m4is_p6537fedxhj0dgtd67cpq7rdpxna','m4is_qx3nkxwvyc3p3'] );
add_action( 'memberium/products/sync',
 ['m4is_bbwjksaqsay3yt68xq9afn', 'm4is_vatx0jm7'] );
add_action( 'memberium/subscriptions/scan_expired', ['m4is_rn5d7867js9nrsh3ej5wrgwj3',
 'm4is_gydatejdbxtfk'] );
add_action( 'memberium/subscriptions/sync', ['m4is_bbwjksaqsay3yt68xq9afn', 'm4is_vgzt7cz68yj8'] );
add_action( 'memberium/tags/categories/sync',
 ['m4is_6xn1pjnrksg2r2y58e54cqsedvtka8', 'm4is_erjfehtz389a6pbsrw'] );
add_action( 'memberium/tags/sync', ['m4is_0ddg4zyk7dn8eg0283',
 'm4is_r929khbv823hsxjc0498q'] );
add_action( 'wp_version_check', ['m4is_zrrt34b1nqxbv', 'm4is_5qw71m3dzesr1mczt4k'] );
add_action( 'memberium/affiliates/running_totals',
 ['m4is_amz58dmg8j7e898bj8r8b1', 'm4is_8ng45gp4ynvwkpcawtjd'] );
add_action( 'memberium/maintenance/daily', ['m4is_rn5d7867js9nrsh3ej5wrgwj3',
 'm4is_0jnnbgbmhmq6v1j4ekzpa3x8md'] );


add_action( 'memberium_maintenance', ['m4is_rn5d7867js9nrsh3ej5wrgwj3', 'm4is_7r6cdgwyw6hx759ceqbn6cdyfd8e'] );

}

private function m4is_9581q9sfbnss871cabxvxeatfmamsh() : void {
add_filter( 'wp_privacy_personal_data_erasers', ['m4is_4s5smeaz895h0',
 'm4is_0emjgmtgfv2'], 11 );
add_filter( 'wp_privacy_personal_data_exporters', ['m4is_4s5smeaz895h0', 'm4is_phah0g9pc7yy06n1cks3wdhc6vd'],
 10 );
}
private function m4is_9t92zmgxpx7a223() {

if ($this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'multi_language', 0) ) {
add_filter('gettext',
 ['m4is_eknm14gbx0wvrnh6', 'm4is_e7wj07b6a5d37rhtwg17795j6d'], PHP_INT_MAX, 3);
add_filter('gettext_with_context', ['m4is_eknm14gbx0wvrnh6',
 'm4is_ermc1ngf0rwxcv2hwdn19fd2haj'], PHP_INT_MAX, 4);
}
}
private function m4is_vzz3e02d() {
add_filter( 'update_user_metadata', [$this,
 'm4is_3e1atmr0jgshjcn5b4'], 10, 5 );
add_filter( 'memberium/usermeta/crm_field_maps', [$this, 'm4is_4827djze5n4wgp3gq5v'], 10, 1 );

}
private function m4is_v6s5y5xpde5ftx8gd6sfg() {
add_action( 'init', [$this, 'm4is_rhdeas06pxrctrk4q0g12v2'], PHP_INT_MAX );
}
private function m4is_rt2vzc2545a6ypydwma2sz057q86() {
add_filter('site_status_tests',
 ['m4is_hjg9rr3hbb9em48cgv8dtvy', 'm4is_agbx7jdb6p2ysj6sp']); 
add_filter('debug_information', ['m4is_hjg9rr3hbb9em48cgv8dtvy', 'm4is_ynkzw7h3d879jt']);

}
private function m4is_t3cmm8j7tpq20wtmen37a8() {
$m4is_53mq3k4adf3m0 = 'm4is_p6537fedxhj0dgtd67cpq7rdpxna';
add_filter( 'updater_plugins_api_result',
 [$m4is_53mq3k4adf3m0, 'm4is_4b9bthvp4qd4s0'], 10, 3 );
add_filter( 'updater_plugins_api', [$m4is_53mq3k4adf3m0, 'm4is_xc331jt1cp4sr9c88wvfy3t009av6r3z'],
 10, 3 );
add_filter( 'updater_pre_set_site_transient_update_plugins', [$m4is_53mq3k4adf3m0, 'm4is_0vpt0m5t8mc1ht'], 10, 1 );
add_filter( 'update_plugins_memberium.com',
 [$m4is_53mq3k4adf3m0, 'm4is_ray7nypearspx4zrdzty8dt0hc6v9g1x'], 20, 4 );
}
private function m4is_5eragr7sh2yyj356m() {
$this->m4is_qej3ez4ahnpc0dc4a2xqxvfc();

$this->m4is_t3cmm8j7tpq20wtmen37a8();
$this->m4is_p1539p5pfm010pg5y5j2xyv();
$this->m4is_9581q9sfbnss871cabxvxeatfmamsh();
$this->m4is_zmnf5zyrzth5bkm();

$this->m4is_rt2vzc2545a6ypydwma2sz057q86();
$this->m4is_9t92zmgxpx7a223();
$this->m4is_vzz3e02d();
$this->m4is_v6s5y5xpde5ftx8gd6sfg();

add_action( 'set_current_user', [$this, 'm4is_kbasnpa215ana6jv875pb1061pymkb'], 11 );
add_filter( 'pre_user_url', ['m4is_905gs7jtwy8pyf98mfy6n',
 'm4is_24rwpms8bnc7vw'], PHP_INT_MAX, 1 );
add_filter( 'admin_email_check_interval', '__return_false' );
add_filter( 'auth_cookie_expiration',
 [$this, 'm4is_athcjdqw8p49p47wawvkyvrctj7j8fb'], PHP_INT_MAX - 1, 3 );
add_filter( 'http_request_args', [$this, 'm4is_ab2q3vpcw1tpj02gb'],
 PHP_INT_MAX, 2 );
add_filter( 'wp_nav_menu_args', [$this, 'm4is_gaaefwfyvmhzq'] );
add_action( 'delete_user', ['m4is_905gs7jtwy8pyf98mfy6n',
 'm4is_z7vp93qgzbew2tn'], 10, 3 );




add_action( 'after_setup_theme', [$this, 'm4is_j35cdjd1xnhbk34ba'], 10 );
add_action( 'admin_bar_menu',
 ['m4is_vwc1yy04e4hz3qnbfm', 'm4is_6ap6tgkn7qfmy3tk'], 71 ); 
add_action( 'admin_bar_menu', ['m4is_vwc1yy04e4hz3qnbfm', 'm4is_wpxxher5'],
 101 ); 
add_action( 'after_password_reset', [$this, 'm4is_hvqe5ss13q6'], 10, 2 );
add_action( 'i2sdk_custom_fields_sync', [$this, 'm4is_2rfadhppd4fnm0ehyxe'],
 10, 2 );
add_action( 'init', ['m4is_vazfzbe3bst3rrc5', 'm4is_a6zhb2rch4cda9ewj6nqh8cecdr'], 1 );
add_action( 'init', [$this, 'm4is_730q2jkq66wp5may42a351zez9'] );

add_action( 'wp_insert_post', [$this, 'm4is_1hvmw1fexz96r'], PHP_INT_MAX, 1 );
add_action( 'post_updated', [$this, 'm4is_1hvmw1fexz96r'],
 PHP_INT_MAX, 1 );
add_action( 'deleted_post', [$this, 'm4is_1hvmw1fexz96r'], PHP_INT_MAX, 1 );
add_action( 'shutdown', [$this, 'm4is_g4cc042jm'],
 10, 0 );
add_action( 'init', [$this, 'm4is_smyzrh5eq1yrfg7zmgfmr4pcn22wz0'], 20 );
add_action( 'wp_footer', [$this, 'm4is_166cc8v46fkbf5'],
 PHP_INT_MAX );
add_action( 'shutdown', [$this, 'm4is_ezfr51qc3pyyewe9t'], PHP_INT_MAX );
add_action( 'wp_ajax_memb_ajax_actions', [$this,
 'm4is_07wdg9bt473rk919vsyy9mw0yec'], 99 );
add_action( 'wp_ajax_nopriv_memb_ajax_actions', [$this, 'm4is_07wdg9bt473rk919vsyy9mw0yec'],
 99 );
add_filter( 'x_redirect_by', [$this, 'm4is_p6jah53yevjt51sghz'], 1, 3 );
add_action( 'deleted_user', ['m4is_zrrt34b1nqxbv', 'm4is_d3h5y3yjgcsg9tp5sqd1'],
 PHP_INT_MAX, 0 );
add_action( 'user_register', ['m4is_zrrt34b1nqxbv', 'm4is_d3h5y3yjgcsg9tp5sqd1'], PHP_INT_MAX, 0 );
add_action( 'user_register',
 ['m4is_905gs7jtwy8pyf98mfy6n', 'm4is_0j6h58zb6wwvm8pnb'], 10, 2 );


add_action( 'woocommerce_customer_reset_password', [$this, 'm4is_hvqe5ss13q6'],
 10, 1); 
add_filter( 'wpseo_indexable_excluded_post_types', [$this, 'm4is_gamag3ztwj8q']); 
add_action( 'wpdc_sso_provider_before_sso_redirect',
 ['m4is_d9frg94j82cjmv6tthcm', 'm4is_qs0510nbh'], 10, 2 ); 
$m4is_3cs5eb54nre7v8s63ve0srw = did_action( 'plugins_loaded' );
$m4is_3cs5eb54nre7v8s63ve0srw ? $this->m4is_gdpdbddrxsa0f7pzhtjqv3hsjgs4ge() : add_action( 'plugins_loaded',
 [$this, 'm4is_gdpdbddrxsa0f7pzhtjqv3hsjgs4ge'], 8, 0 );
$m4is_3cs5eb54nre7v8s63ve0srw ? $this->m4is_83ts560f8e120bjpv801() : add_action( 'plugins_loaded',
 [$this, 'm4is_83ts560f8e120bjpv801'], 9, 0 );
$m4is_3cs5eb54nre7v8s63ve0srw ? $this->m4is_83fjtt3v3j59efb106abk8() : add_action( 'plugins_loaded',
 [$this, 'm4is_83fjtt3v3j59efb106abk8'], 1 );
}

private function m4is_x9en7mg347a1x38am2gt() {
global $wpdb;
$m4is_scd306enrps5n51f0b99fys55kap = [
'MEMBERIUM_BETA' =>
 0,
'MEMBERIUM_DB_CONTACTTAGS' => 'memberium_contacttags',
'MEMBERIUM_DB_EVENTS' => "{$wpdb->prefix}memberium_events",
'MEMBERIUM_DB_HTTPPOST' =>
 'memberium_httppost',
'MEMBERIUM_DB_JOBS' => 'memberium_jobs',
'MEMBERIUM_DB_LOGINLOG' => 'memberium_loginlog',
'MEMBERIUM_DB_PAGETRACKING' =>
 "{$wpdb->prefix}memberium_pagetracking",
'MEMBERIUM_DB_QUEUE' => 'memberium_queue',
'MEMBERIUM_DB_RELATIONSHIP_TYPES' => "{$wpdb->prefix}memberium_relationship_types",

'MEMBERIUM_DB_SOCIAL' => "{$wpdb->prefix}memberium_socialaccount",
'MEMBERIUM_DEBUG' => 0,
'MEMBERIUM_DEBUGLOG' => "{$_SERVER['DOCUMENT_ROOT']}/debuglog.txt",

'MEMBERIUM_DELIMITER' => ',',
'MEMBERIUM_ERRORLOG' => 0,
'MEMBERIUM_INSTALLED' => 1,
'MEMBERIUM_NESTING_LEVELS' => 10,
'MEMBERIUM_NOWYSIWYG' =>
 0,
'MEMBERIUM_SKU' => 'm4is',


];
foreach($m4is_scd306enrps5n51f0b99fys55kap as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp) {
defined($m4is_bqhtspcavhb01spmfd3x) ? '' : define($m4is_bqhtspcavhb01spmfd3x,
 $m4is_29gzevpx8rbkp);
}
}

private function m4is_ev2jjrm3g53hdgsfys3wbv5kwtws() {

$m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 = MEMBERIUM_HOME;


$m4is_53mq3k4adf3m0 = 'm4is_xzw82zta23vanf8pzajwyvkv4';

register_activation_hook( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7, [$m4is_53mq3k4adf3m0,
 'm4is_a6e0x2swh7tn3'] );

register_uninstall_hook( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7, [$m4is_53mq3k4adf3m0, 'm4is_2ss46p6m0wxn01qjgt441tktzr20'] );


register_deactivation_hook( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7, [$m4is_53mq3k4adf3m0, 'm4is_ypw4rshk8c8z4gdxvv9'] );
}




public function m4is_b8qskfdkeh13w255r( array $m4is_tbdh9qb6r6z ) : array {
if ( ! $this->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'plaintext_db', false ) ) {
return $m4is_tbdh9qb6r6z;
}
foreach ($m4is_tbdh9qb6r6z as $m4is_hce1y1a4qd65zhnwsj => $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_tbdh9qb6r6z[$m4is_hce1y1a4qd65zhnwsj] = remove_accents( $m4is_rqxytszfq5v6syth1csqqxvy5 );

$m4is_tbdh9qb6r6z[$m4is_hce1y1a4qd65zhnwsj] = preg_replace( '/[\x80-\xFF]/', '', $m4is_tbdh9qb6r6z[$m4is_hce1y1a4qd65zhnwsj] );
}

return $m4is_tbdh9qb6r6z;

}

public function m4is_da2zqbyx62mn02mesb(array $m4is_xt22w6z8rm06wx6, $m4is_hce1y1a4qd65zhnwsj = 'fieldname', $m4is_rqxytszfq5v6syth1csqqxvy5 = 'value'): array {

$m4is_tbdh9qb6r6z = [];


foreach ($m4is_xt22w6z8rm06wx6 as $m4is_f5pq560taxn4v67xk7v982nwn0) {


$m4is_tbdh9qb6r6z[$m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_hce1y1a4qd65zhnwsj]] = $m4is_f5pq560taxn4v67xk7v982nwn0[$m4is_rqxytszfq5v6syth1csqqxvy5];

}

return $m4is_tbdh9qb6r6z;
}
public function m4is_zzgj0be3ndn9hgp512rff7kzxa2( array $m4is_88a12phjqt0rh3s8jfa6130s18ape, array $m4is_zbwdd9rb0 ) {
$m4is_0q57s54p8pmsar = [];

foreach( $m4is_88a12phjqt0rh3s8jfa6130s18ape as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( ! array_key_exists( $m4is_j8j55t8dz79m7,
 $m4is_zbwdd9rb0 ) ) {
$m4is_0q57s54p8pmsar[$m4is_j8j55t8dz79m7] = '';
}
elseif ( $m4is_rqxytszfq5v6syth1csqqxvy5 !== $m4is_zbwdd9rb0[$m4is_j8j55t8dz79m7] ) {
$m4is_0q57s54p8pmsar[$m4is_j8j55t8dz79m7] = $m4is_zbwdd9rb0[$m4is_j8j55t8dz79m7];

}
}
return $m4is_0q57s54p8pmsar; 
}

public function m4is_8gbnhdkvkhrpxybgg9bsevbqyf80m(array $m4is_88a12phjqt0rh3s8jfa6130s18ape,
 array $m4is_zbwdd9rb0) : array {



return array_keys(array_diff_key($m4is_88a12phjqt0rh3s8jfa6130s18ape, $m4is_zbwdd9rb0));
}

public function m4is_b6mct5xjjy1(array $m4is_88a12phjqt0rh3s8jfa6130s18ape,
 array $m4is_zbwdd9rb0) : array {



return array_diff_key($m4is_zbwdd9rb0, $m4is_88a12phjqt0rh3s8jfa6130s18ape);
}

public function m4is_ebda5kept1b7z3s06fr1hwqn1fheww( array $m4is_ja8naqje4,
 array $m4is_chej9g5238x9pyc9 ): array {

foreach ( $m4is_chej9g5238x9pyc9 as $m4is_2702shttev4h9bxpcj88k43qyna4mr6p ) {
unset( $m4is_ja8naqje4[$m4is_2702shttev4h9bxpcj88k43qyna4mr6p] );

}

return $m4is_ja8naqje4;
}



static function m4is_ec2tzgexfvhyejmcnyn() : string {
return m4is_a6kbph84cyre1t461::DB_API_LOG;
}
static function m4is_vtvx58egj02hxs9je03p7rwfeqr7gyc() : array {
global $wpdb;

$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_ec2tzgexfvhyejmcnyn();
$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(20) NOT NULL AUTO_INCREMENT, \n" .
"appname varchar(32) NOT NULL, \n" .
"timestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, \n" .
"duration float NOT NULL DEFAULT '0', \n" .
"retries int(11) NOT NULL DEFAULT '0', \n" .
"ip_address varchar(45) DEFAULT NULL, \n" .
"user varchar(32) DEFAULT NULL, \n" .
"service varchar(32) DEFAULT NULL, \n" .
"caller longtext, \n" .
"result longtext, \n" .
"PRIMARY KEY  (id) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}

static function m4is_288ksb3w31p965m6() : string {
return constant( 'MEMBERIUM_DB_QUEUE' );

}

static function m4is_v97h7m8r1hs1bf280c() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_288ksb3w31p965m6();

$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(11) NOT NULL AUTO_INCREMENT, \n" .
"pidlock int(11) NOT NULL default 0, \n" .
"appname varchar(16) NOT NULL, \n" .
"actiontype varchar(20) NOT NULL, \n" .
"scheduled timestamp NOT NULL, \n" .
"contactid int(11) NOT NULL default 0, \n" .
"userid int(11) NOT NULL default 0, \n" .
"data text NOT NULL, \n" .
"KEY scheduled (scheduled), \n" .
"KEY actiontype (actiontype), \n" .
"KEY contactid (contactid), \n" .
"KEY userid (userid), \n" .
"PRIMARY KEY  (id,appname) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}




public function m4is_p6jah53yevjt51sghz( $m4is_xcc3f1ax4g035twc22,
 $m4is_yrsthh0s4s62mfk9, $m4is_01y0y00ahqh23hjf0gwzs7c2v ) : string {
if ( ! m4is_0gqs7crsrzdbgfzptjws94s::m4is_a8jbhgftw25vw3n3r2xwmckd9k3rr() ) {
return $m4is_xcc3f1ax4g035twc22;

}
if ( $m4is_xcc3f1ax4g035twc22 !== 'WordPress' ) {
return $m4is_xcc3f1ax4g035twc22;
}
$m4is_4qbnse1s0zvb3044afap1m = debug_backtrace( DEBUG_BACKTRACE_IGNORE_ARGS );

$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = 0;
krsort( $m4is_4qbnse1s0zvb3044afap1m );
foreach( $m4is_4qbnse1s0zvb3044afap1m as $m4is_pzeqetyttg644ahb8fb =>
 $m4is_pyw8qn0cxt32 ) {
if ( ! empty( $m4is_pyw8qn0cxt32['function'] ) && in_array( $m4is_pyw8qn0cxt32['function'], ['wp_safe_redirect',
 'wp_redirect' ] ) ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_pzeqetyttg644ahb8fb + 1;
break;
}
}
if ( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh && ! empty( $m4is_4qbnse1s0zvb3044afap1m[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] ) ) {
$m4is_pyw8qn0cxt32 = $m4is_4qbnse1s0zvb3044afap1m[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh];

$m4is_95jcy59jv50devc8s3bd = empty( $m4is_pyw8qn0cxt32['function'] ) ? '' : 'Function ' . $m4is_pyw8qn0cxt32['function'] . '() @ ';

$m4is_xcc3f1ax4g035twc22 = sprintf( 'Line %d, %s in %s', $m4is_pyw8qn0cxt32['line'], $m4is_95jcy59jv50devc8s3bd, substr( $m4is_pyw8qn0cxt32['file'],
 strlen( $_SERVER['DOCUMENT_ROOT'] ) ) );
}
return 'Debug : ' . $m4is_xcc3f1ax4g035twc22;
}




function m4is_1hvmw1fexz96r( int $m4is_tz1rt7sbq40fade6e6rx ) {
$m4is_kgdwxx4f = 'memberium/posts';

wp_cache_delete( "meta/access/{$m4is_tz1rt7sbq40fade6e6rx}", $m4is_kgdwxx4f );
wp_cache_delete( 'meta/access/hidden_menu_items', $m4is_kgdwxx4f );

wp_cache_delete( 'admin/list/json', $m4is_kgdwxx4f );
wp_cache_flush_group( $m4is_kgdwxx4f );
}




public function m4is_1gdsc4zrspe39f5q04xwnetj6466( string $m4is_jrbbv650tt4nt9f6fz = '',
 int $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0) {
$m4is_jrbbv650tt4nt9f6fz = strtolower( trim( $m4is_jrbbv650tt4nt9f6fz ) );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ? $this->m4is_vd3qpw0vkdm() : $m4is_wk4dh1rnd3wmwvsggq51nhn87;

if ( ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87) || empty( $m4is_jrbbv650tt4nt9f6fz ) ) {
return false;
}
return get_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 self::USER_FIELD_PREFIX . $m4is_jrbbv650tt4nt9f6fz, true);
}
public function m4is_fkwjzzpbkcrc3nhe2yvnfvrv32yq( string $m4is_jrbbv650tt4nt9f6fz = '',
 $m4is_rqxytszfq5v6syth1csqqxvy5 = '', int $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0 ) {
$m4is_jrbbv650tt4nt9f6fz = strtolower( trim( $m4is_jrbbv650tt4nt9f6fz ) );

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ? $this->m4is_vd3qpw0vkdm() : $m4is_wk4dh1rnd3wmwvsggq51nhn87;

if ( ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) || empty( $m4is_jrbbv650tt4nt9f6fz ) ) {
return false;
}
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 self::USER_FIELD_PREFIX . $m4is_jrbbv650tt4nt9f6fz, $m4is_rqxytszfq5v6syth1csqqxvy5 );
}

}
final class m4is_csmdzh4sncasvp1enyykf1bk {
private static $m4is_w7m20zywnv2vm2nypmeh21z2asjd = [];

private static $m4is_g1pex3wg2fqr0nms = [];
private function __construct() {

}

public static function m4is_93g1spw7sp1wbdw8qrg( string $m4is_j8j55t8dz79m7,
 $m4is_vkdsq7nx ) : bool {
if ( ! array_key_exists( $m4is_j8j55t8dz79m7, self::$m4is_w7m20zywnv2vm2nypmeh21z2asjd ) ) {
self::$m4is_w7m20zywnv2vm2nypmeh21z2asjd[$m4is_j8j55t8dz79m7] = $m4is_vkdsq7nx;

return true;
}
error_log( sprintf( "Memberium: [warning] Service '%s' is already registered.", $m4is_j8j55t8dz79m7 ) );
return false;

}
public static function m4is_e9d4d779kqxj11mwqttp8q3m( string $m4is_j8j55t8dz79m7, string $m4is_53mq3k4adf3m0, string $m4is_an94cajzchkq7jjtf = null ) {
if ( ! array_key_exists( $m4is_j8j55t8dz79m7,
 self::$m4is_g1pex3wg2fqr0nms ) ) {
self::$m4is_g1pex3wg2fqr0nms[$m4is_j8j55t8dz79m7] = [ 'class' =>$m4is_53mq3k4adf3m0, 'method' =>
 $m4is_an94cajzchkq7jjtf ];
return true;
}
}
public static function m4is_tndhnjx71b06cvaa6b8( string $m4is_j8j55t8dz79m7 ) {
unset( self::$m4is_w7m20zywnv2vm2nypmeh21z2asjd[$m4is_j8j55t8dz79m7] );

}
public static function m4is_n7ce1ph3h1kzmt249y3b30y( string $m4is_j8j55t8dz79m7 ) {
if ( array_key_exists( $m4is_j8j55t8dz79m7, self::$m4is_w7m20zywnv2vm2nypmeh21z2asjd ) ) {
return self::$m4is_w7m20zywnv2vm2nypmeh21z2asjd[$m4is_j8j55t8dz79m7];

}
if ( array_key_exists( $m4is_j8j55t8dz79m7, self::$m4is_g1pex3wg2fqr0nms ) ) {
$m4is_53mq3k4adf3m0 = self::$m4is_g1pex3wg2fqr0nms[$m4is_j8j55t8dz79m7]['class'];

$m4is_sjjed77r6tc8e = self::$m4is_g1pex3wg2fqr0nms[$m4is_j8j55t8dz79m7]['method'] ?? null;
if ( is_null( $m4is_sjjed77r6tc8e ) ) {
$m4is_w7m20zywnv2vm2nypmeh21z2asjd[$m4is_j8j55t8dz79m7] = new $m4is_53mq3k4adf3m0;

}
else {

$m4is_vkdsq7nx[$m4is_j8j55t8dz79m7] = new $m4is_53mq3k4adf3m0::$m4is_sjjed77r6tc8e;
}
return self::$m4is_w7m20zywnv2vm2nypmeh21z2asjd[$m4is_j8j55t8dz79m7];

}
return null;
}
public static function m4is_mnp8wq8jtf0vh47cntch2xrdfg() {
foreach( self::$m4is_w7m20zywnv2vm2nypmeh21z2asjd as $m4is_j8j55t8dz79m7 =>
 $m4is_vkdsq7nx ) {
if ( is_object( $m4is_vkdsq7nx ) ) {
echo $m4is_j8j55t8dz79m7 . ' : ' . get_class( $m4is_vkdsq7nx ) . '<br>';
}
else {
echo $m4is_j8j55t8dz79m7 . ' : ' . gettype( $m4is_vkdsq7nx ) . '<br>';

}
}
}
}




