<?php

class_exists('m4is_6y9612z4hjd6fzpap4r5n853641m1jc') || die();
final class m4is_q3f58ws0gqrcawrh2gd27r1sp {
function m4is_5eragr7sh2yyj356m() {
add_action('rest_api_init',
 [$this, 'add_api_fields']);
add_action('rest_api_init', [$this, 'appp_cors']); 
add_action('rest_api_init', [$this, 'register_routes']);

add_filter('wp_authenticate_user', [$this, 'check_app_unverified'], 10, 2); 
}
function add_api_fields() {

register_rest_field('post',

'featured_image_urls',
[
'get_callback' => [$this, 'image_sizes'],
'update_callback' => null,
'schema' => null,
]
);


$m4is_zpbgfgfkqf2c4ast12shxs8gthy = appp_get_setting('media_post_types');

if (!empty($m4is_zpbgfgfkqf2c4ast12shxs8gthy) ) {
foreach ($m4is_zpbgfgfkqf2c4ast12shxs8gthy as $m4is_h7zwy5f0w3y9gx3wm) {
register_rest_field($m4is_h7zwy5f0w3y9gx3wm,

'appp_media',
[
'get_callback' => [$this, 'get_media_url'],
'update_callback' => null,
'schema' => null,
]
);
}
}
}

function api_login($m4is_6hxv330csw89pyf97j9) {
$m4is_c7p9bw20z8fzx['user_login'] = ($_POST['username'] ? $_POST['username'] : $_SERVER['PHP_AUTH_USER']);

$m4is_c7p9bw20z8fzx['user_password'] = ($_POST['password'] ? $_POST['password'] : $_SERVER['PHP_AUTH_PW']);
$m4is_c7p9bw20z8fzx['remember'] = true;

if (empty($m4is_c7p9bw20z8fzx['user_login']) || empty($m4is_c7p9bw20z8fzx['user_password']) ) {
$m4is_6mrr8g437s26h71sq8zghxa1 = [
'success' =>
 false,
'data' => [
'message' => apply_filters('appp_login_error', __('Login missing required fields.', 'apppresser'), ''),
'success' =>
 false
]
];
return rest_ensure_response($m4is_6mrr8g437s26h71sq8zghxa1);
}
do_action('appp_before_signon', $m4is_c7p9bw20z8fzx);
$m4is_0bggg57j = wp_signon($m4is_c7p9bw20z8fzx,
 false);
do_action('appp_login_header');
if (is_wp_error($m4is_0bggg57j) ) {
$m4is_6mrr8g437s26h71sq8zghxa1 = [
'success' => false,

'data' => [
'message' => apply_filters('appp_login_error', __('The login you have entered is not valid.', 'apppresser'), $m4is_c7p9bw20z8fzx['user_login']),

'success' => false
]
];
return rest_ensure_response($m4is_6mrr8g437s26h71sq8zghxa1);
}
else {

$m4is_yd8v14twzgheg2s5m7ejvd65gpr6w = $this->do_cookie_auth($m4is_0bggg57j->ID);


$m4is_6mrr8g437s26h71sq8zghxa1 = [
'message' => apply_filters('appp_login_success', sprintf(__('Welcome back %s!', 'apppresser'),
 $m4is_0bggg57j->display_name), $m4is_0bggg57j->ID),
'username' => $m4is_c7p9bw20z8fzx['user_login'],
'avatar' => get_avatar_url($m4is_0bggg57j->ID),

'cookie_auth' => $m4is_yd8v14twzgheg2s5m7ejvd65gpr6w,
'login_redirect' => AppPresser_Ajax_Extras::get_login_redirect(), 
'success' =>
 true,
'user_id' => $m4is_0bggg57j->ID
];
}
$m4is_6mrr8g437s26h71sq8zghxa1 = apply_filters('appp_login_data', $m4is_6mrr8g437s26h71sq8zghxa1,
 $m4is_0bggg57j->ID);
$retval = rest_ensure_response($m4is_6mrr8g437s26h71sq8zghxa1);
return $retval;
}

function api_logout($m4is_6hxv330csw89pyf97j9) {
do_action('appp_logout_header');

if (! defined('DOING_AJAX') ) {
define('DOING_AJAX', true);
}
wp_logout();
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = [
'message' => __('Logout success.',
 'apppresser'),
'success' => true
];
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = $this->get_logout_redirect();
if ($m4is_tfecza742dzhrkkbv781dnbvf40m6) {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['logout_redirect'] = $m4is_tfecza742dzhrkkbv781dnbvf40m6;

}
$m4is_f609892kwe = rest_ensure_response($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz);
return $m4is_f609892kwe;
}

function appp_cors() {


if (appp_get_setting('ap3_enable_cors',
 false) ) {
add_filter('appp_allow_api_origin', function() {
return '*';
});
$this->app_cors_header();
} else {
add_filter('appp_allow_api_origin',
 function() {
return false;
});
}
}

function app_cors_header() {
$m4is_edbjxvfpak5965q36a83jv14psqqqk1 = apply_filters('appp_allow_api_origin',
 '*');
$m4is_0dykvqzw38whvz3979m6bwe = apply_filters('appp_allow_api_methods', 'GET,PUT,POST,DELETE,PATCH,OPTIONS');
if ( $m4is_edbjxvfpak5965q36a83jv14psqqqk1 ) {
header("Access-Control-Allow-Origin: {$m4is_edbjxvfpak5965q36a83jv14psqqqk1}");

header("Access-Control-Allow-Methods: {$m4is_0dykvqzw38whvz3979m6bwe}");
}
}

function check_app_unverified($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g) {
if (get_user_meta($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID, 'app_unverified', true) ) {
return new WP_Error('app_unverified_login',

__('You have not verified your account by email, please contact support.', 'apppresser'),
[
'status' => 404,
]
);
}
return $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65;

}

function do_cookie_auth($m4is_wk4dh1rnd3wmwvsggq51nhn87) {
if (function_exists('openssl_encrypt') ) {
$m4is_j8j55t8dz79m7 = substr(AUTH_KEY,
 2, 5);
$m4is_0y90vz8zfc = substr(AUTH_KEY, 0, 16);
$m4is_20pc2x9hy8fwjzyre = "AES-128-CBC";
$m4is_9qf9q01s9h0t = openssl_encrypt($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_20pc2x9hy8fwjzyre, $m4is_j8j55t8dz79m7, 0, $m4is_0y90vz8zfc);
} else {

$m4is_9qf9q01s9h0t = $m4is_wk4dh1rnd3wmwvsggq51nhn87;

}
update_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87, 'app_cookie_auth', $m4is_9qf9q01s9h0t);
return $m4is_9qf9q01s9h0t;
}

function get_logout_redirect() {
if ( ! has_filter( 'appp_logout_redirect' ) ) {
return '';

}
$m4is_qb5923051s91rbx9v = apply_filters( 'appp_logout_redirect', '' );

return AppPresser_Ajax_Extras::add_redirect_title( $m4is_qb5923051s91rbx9v );

}
function get_media_url($m4is_z4ts5pa39jf1yhjb4) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = get_post_meta($m4is_z4ts5pa39jf1yhjb4['id'],
 'appp_media_url', true);
$m4is_d60kn1d3yvprp62rs332 = [];
if (empty($m4is_rqxytszfq5v6syth1csqqxvy5)) {
return;
}
$m4is_d60kn1d3yvprp62rs332['media_url'] = $m4is_rqxytszfq5v6syth1csqqxvy5;

$m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt = get_post_meta($m4is_z4ts5pa39jf1yhjb4['id'], 'appp_media_image', true);
if (! empty($m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt) ) {
$m4is_d60kn1d3yvprp62rs332['media_image'] = $m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt;

}
return $m4is_d60kn1d3yvprp62rs332;
}

function get_password_reset_code($m4is_6hxv330csw89pyf97j9) {
$m4is_zxwt8y3szyy1aenkh = $m4is_6hxv330csw89pyf97j9['email'];

$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by('email', $m4is_zxwt8y3szyy1aenkh);
if ($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
$m4is_qm78qahrsjrp9v9vf2phj31x = current_time('mysql');

$m4is_gvt2hckttpbz8zr7m1a5abrr = $this->get_short_reset_code(); 
update_user_meta($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID, 'app_hash',
 $m4is_gvt2hckttpbz8zr7m1a5abrr);
$m4is_x215pkzdncmyfasv7 = __('App Password Reset', 'apppresser');
$m4is_x215pkzdncmyfasv7 = apply_filters('appp_pw_reset_email_subject',
 $m4is_x215pkzdncmyfasv7);
$m4is_5tmqg45z37r82cfb67prh = __('Enter the code into the app to reset your password. Code: ', 'apppresser') . $m4is_gvt2hckttpbz8zr7m1a5abrr;

$m4is_5tmqg45z37r82cfb67prh = apply_filters('appp_pw_reset_email', $m4is_5tmqg45z37r82cfb67prh, $m4is_gvt2hckttpbz8zr7m1a5abrr);
$mail = wp_mail($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email,
 $m4is_x215pkzdncmyfasv7, $m4is_5tmqg45z37r82cfb67prh);
$return = [
'success' => true,
'got_code' => true,
'message' => __('Please check your email for your verification code.',
 'apppresser')
];
} else {
$return = [
'success' => false,
'message' => __('The email you have entered is not valid.', 'apppresser')
];

}
return $return;
}
function get_short_reset_code() {
$m4is_2kgbpx0pwhn7zc6kgf2xn = str_split('1234567890');
$m4is_j55e6zb8me2k6njc7vbe = str_split('abcdefghijklmnopqrstuvwxyz');

shuffle($m4is_2kgbpx0pwhn7zc6kgf2xn);
shuffle($m4is_j55e6zb8me2k6njc7vbe);
$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = $m4is_2kgbpx0pwhn7zc6kgf2xn[1] . $m4is_j55e6zb8me2k6njc7vbe[1] . $m4is_j55e6zb8me2k6njc7vbe[2] . $m4is_2kgbpx0pwhn7zc6kgf2xn[3];

return $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4;
}
function image_sizes($m4is_z4ts5pa39jf1yhjb4) {
$m4is_cc6cejd8ks3xrwny1x21w562xmmp3q5 = get_post_thumbnail_id($m4is_z4ts5pa39jf1yhjb4['id']);

$m4is_q12pdy2em4mb072qbrgfb = wp_get_attachment_metadata($m4is_cc6cejd8ks3xrwny1x21w562xmmp3q5);
$m4is_dg3vff5q7r3j9qmhcy = new stdClass();

if (! empty($m4is_q12pdy2em4mb072qbrgfb['sizes']) ) {
foreach ($m4is_q12pdy2em4mb072qbrgfb['sizes'] as $key => $size) {

$image_src = wp_get_attachment_image_src($m4is_cc6cejd8ks3xrwny1x21w562xmmp3q5,
 $key);
if (! $image_src) {
continue;
}
$m4is_dg3vff5q7r3j9qmhcy->$key = $image_src[0];
}
}
return $m4is_dg3vff5q7r3j9qmhcy;
}

function register_routes() {

if (! class_exists('WP_REST_Controller') ) {
return;

}
$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'appp/v1';
$m4is_hhe08taea8 = 'methods';
$m4is_cwt5wqpkhj9w9bt415ek4m7m0cj = 'callback';
$m4is_xn8q0w31j7h = WP_REST_Server::CREATABLE;

$m4is_hy1awj0e8xgg7zmjeng0trrw4j0 = WP_REST_Server::READABLE;
register_rest_route($m4is_1n5r8f23byhh2xkx2t4pncj99ey858, '/login', [
[
$m4is_hhe08taea8 =>
 $m4is_xn8q0w31j7h,
$m4is_cwt5wqpkhj9w9bt415ek4m7m0cj => [$this, 'api_login']
],
]);
register_rest_route($m4is_1n5r8f23byhh2xkx2t4pncj99ey858,
 '/logout', [
[
$m4is_hhe08taea8 => $m4is_hy1awj0e8xgg7zmjeng0trrw4j0,
$m4is_cwt5wqpkhj9w9bt415ek4m7m0cj => [$this, 'api_logout']
],

]);
register_rest_route($m4is_1n5r8f23byhh2xkx2t4pncj99ey858, '/register', [
[
$m4is_hhe08taea8 => $m4is_xn8q0w31j7h,
$m4is_cwt5wqpkhj9w9bt415ek4m7m0cj =>
 [$this, 'register_user']
],
]);
register_rest_route($m4is_1n5r8f23byhh2xkx2t4pncj99ey858, '/verify', [
[
$m4is_hhe08taea8 => $m4is_xn8q0w31j7h,

$m4is_cwt5wqpkhj9w9bt415ek4m7m0cj => [$this, 'verify_user']
],
]);
register_rest_route($m4is_1n5r8f23byhh2xkx2t4pncj99ey858, '/verify-resend',
 [
[
$m4is_hhe08taea8 => $m4is_xn8q0w31j7h,
$m4is_cwt5wqpkhj9w9bt415ek4m7m0cj => [$this, 'send_verification_code']
],
]);
register_rest_route($m4is_1n5r8f23byhh2xkx2t4pncj99ey858,
 '/reset-password', [
[
$m4is_hhe08taea8 => $m4is_xn8q0w31j7h,
$m4is_cwt5wqpkhj9w9bt415ek4m7m0cj => [$this, 'reset_password']
],
]);

}

function register_user($m4is_6hxv330csw89pyf97j9) {
if (empty($m4is_6hxv330csw89pyf97j9['username']) || empty($m4is_6hxv330csw89pyf97j9['email']) ) {
return new WP_Error('rest_invalid_registration',

__('Missing required fields.', 'apppresser'),
[
'status' => 404,
]
);
}
if (email_exists($m4is_6hxv330csw89pyf97j9['email']) || username_exists($m4is_6hxv330csw89pyf97j9['username']) ) {
return new WP_Error('rest_invalid_registration',

__('Email or username already exists.', 'apppresser'),
[
'status' => 404,
]
);
}
if (empty($m4is_6hxv330csw89pyf97j9['password']) ) {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = wp_generate_password(8);
 
}
else {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = $m4is_6hxv330csw89pyf97j9['password'];
}
$m4is_avgtbn3dgps2ea6xnvvnq9 = [
'user_login' =>
 $m4is_6hxv330csw89pyf97j9['username'],
'user_pass' => $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g,
'user_email' => $m4is_6hxv330csw89pyf97j9['email'],

'first_name' => $m4is_6hxv330csw89pyf97j9['first_name'],
'last_name' => $m4is_6hxv330csw89pyf97j9['last_name']
];
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = wp_insert_user( $m4is_avgtbn3dgps2ea6xnvvnq9 );

if ( is_wp_error( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return new WP_Error('rest_invalid_registration',
__('Something went wrong with registration.',
 'apppresser'),
[
'status' => 404,
]
);
}
update_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87, 'app_unverified', true);
$m4is_ab0fskjzwms7p6ww9vvx38b1 = $this->send_verification_code($m4is_6hxv330csw89pyf97j9);
 
if (! $m4is_ab0fskjzwms7p6ww9vvx38b1) {
return new WP_Error('rest_invalid_registration',
__('We could not send your verification code by email, please contact support.',
 'apppresser'),
[
'status' => 404,
]
);
}
do_action('appp_register_unverified', $m4is_wk4dh1rnd3wmwvsggq51nhn87);
$m4is_1we1qc8rdsrfq = __("Your verification code has been sent, please check your email.",
 "apppresser");
$m4is_f609892kwe = rest_ensure_response($m4is_1we1qc8rdsrfq);
return $m4is_f609892kwe;
}

function reset_password($m4is_6hxv330csw89pyf97j9) {
$m4is_hn5gx2w6k = [
'success' =>
 false,
'message' => 'Missing required fields.'
];
if (isset($m4is_6hxv330csw89pyf97j9['code']) && isset($m4is_6hxv330csw89pyf97j9['password']) ) {
$m4is_hn5gx2w6k = $this->validate_reset_password($m4is_6hxv330csw89pyf97j9);

}
elseif (isset($m4is_6hxv330csw89pyf97j9['email']) ) {
$m4is_hn5gx2w6k = $this->get_password_reset_code($m4is_6hxv330csw89pyf97j9);

}
return $m4is_hn5gx2w6k;
}

function send_verification_code($m4is_6hxv330csw89pyf97j9) {
if (empty($m4is_6hxv330csw89pyf97j9['email']) || empty($m4is_6hxv330csw89pyf97j9['username']) ) {
return new WP_Error('rest_invalid_verification',

__('Missing required field.', 'apppresser'),
[
'status' => 404,
]
);
}
if (! email_exists($m4is_6hxv330csw89pyf97j9['email']) || ! username_exists($m4is_6hxv330csw89pyf97j9['username']) ) {
return new WP_Error('rest_invalid_verification',

__('Invalid username or email.', 'apppresser'),
[
'status' => 404,
]
);
}
$m4is_rjvx4d8a6a98xbc = hash('md5', $m4is_6hxv330csw89pyf97j9['username'] . $m4is_6hxv330csw89pyf97j9['email']);
 
$m4is_rjvx4d8a6a98xbc = substr($m4is_rjvx4d8a6a98xbc, 1, 4); 
$m4is_x215pkzdncmyfasv7 = __('Your Verification Code', 'apppresser');

$m4is_x215pkzdncmyfasv7 = apply_filters('appp_verification_email_subject', $m4is_x215pkzdncmyfasv7);
$m4is_bsamg3fezf = sprintf(__("Hi, thanks for registering! Here is your verification code: %s \n\nPlease enter this code in the app. \n\nThanks!",
 "apppresser"), $m4is_rjvx4d8a6a98xbc);
$m4is_bsamg3fezf = apply_filters('appp_verification_email', $m4is_bsamg3fezf, $m4is_rjvx4d8a6a98xbc);

$m4is_ab0fskjzwms7p6ww9vvx38b1 = wp_mail($m4is_6hxv330csw89pyf97j9["email"], $m4is_x215pkzdncmyfasv7, $m4is_bsamg3fezf);
return $m4is_ab0fskjzwms7p6ww9vvx38b1;

}

function validate_reset_password($m4is_6hxv330csw89pyf97j9) {
global $wpdb;
$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = $m4is_6hxv330csw89pyf97j9['code'];

$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = $m4is_6hxv330csw89pyf97j9['password'];
$m4is_g61yzqs7ecta0xztr70d7v = [
'meta_key' => 'app_hash',

'meta_value' => $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4
];
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_users($m4is_g61yzqs7ecta0xztr70d7v);

if ($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
$m4is_g61yzqs7ecta0xztr70d7v = [
'ID' => $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65[0]->data->ID,

'user_pass' => $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g
];
wp_update_user($m4is_g61yzqs7ecta0xztr70d7v) ;
delete_user_meta($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65[0]->data->ID,
 'app_hash'); 
$m4is_hn5gx2w6k = [
'message' => __('Your password has been changed, please login.', 'apppresser'),
'pw_changed' => true,

'success' => true
];
}
else {
$m4is_hn5gx2w6k = [
'success' => false,
'message' => __('The code you have entered is not valid.', 'apppresser')
];

}
return $m4is_hn5gx2w6k;
}

function verify_user($m4is_6hxv330csw89pyf97j9) {
if (empty($m4is_6hxv330csw89pyf97j9['email']) || empty($m4is_6hxv330csw89pyf97j9['verification']) ) {
return new WP_Error('rest_invalid_verification',

__('Missing required field.', 'apppresser'),
[
'status' => 404,
]
);
}
$m4is_rjvx4d8a6a98xbc = hash('md5', $m4is_6hxv330csw89pyf97j9['username'] . $m4is_6hxv330csw89pyf97j9['email']);

$m4is_rjvx4d8a6a98xbc = substr($m4is_rjvx4d8a6a98xbc, 1, 4);
if ($m4is_6hxv330csw89pyf97j9['verification'] != strval($m4is_rjvx4d8a6a98xbc) ) {

return new WP_Error('rest_invalid_verification',

__('The verification code does not match.', 'apppresser'),
[
'status' => 404,
]
);
}
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by('email',
 $m4is_6hxv330csw89pyf97j9['email']);
delete_user_meta($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID, 'app_unverified');

$info = [];
$info['user_login'] = $m4is_6hxv330csw89pyf97j9['username'];

$info['user_password'] = $m4is_6hxv330csw89pyf97j9['password'];
$info['remember'] = true;
$user_signon = wp_signon($info, false);
if (is_wp_error($user_signon) || !$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {
return new WP_Error('rest_invalid_verification',
 __('Verification succeeded, please login.', 'apppresser'), ['status' => 200,]);
}
$m4is_5tmqg45z37r82cfb67prh = [
'message' => apply_filters('appp_login_success',
 sprintf(__('Welcome back %s!', 'apppresser'), $user_signon->display_name), $user_signon->ID),
'username' => $info['user_login'],
'avatar' =>
 get_avatar_url($user_signon->ID), 
'success' => true,
'user_id' => $user_signon->ID
];

$m4is_5tmqg45z37r82cfb67prh = apply_filters('appp_login_data',
 $m4is_5tmqg45z37r82cfb67prh, $user_signon->ID);
do_action('appp_register_verified', $user_signon->ID);
$m4is_f609892kwe = rest_ensure_response($m4is_5tmqg45z37r82cfb67prh);

return $m4is_f609892kwe;
}

function __construct() {
$this->m4is_5eragr7sh2yyj356m();
}
}
