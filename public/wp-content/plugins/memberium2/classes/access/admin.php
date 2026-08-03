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

final class m4is_pt9as1ejs6xfpy7cnx0yxk709 {
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {}
function m4is_5en09w94a(){
$m4is_0k1mrqgxx6bb = 'gutenberg';

$m4is_kyrqdd9qn08s3tbxx9ahv = $this->m4is_1yvkk2dkcyz1rpt9pw( $m4is_0k1mrqgxx6bb );
if( empty( $m4is_kyrqdd9qn08s3tbxx9ahv ) ){
return;

}

$m4is_9ybr7472pbag66e = $this->m4is_fv5jycjd9tg1tsskv();
$m4is_zxa05fq9f81p8g = m4is_9db7hheseencedjdjv::PREFIX;
$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = m4is_9db7hheseencedjdjv::NS;

$m4is_d60kn1d3yvprp62rs332 = [
'WPAL_BLOCKS_PREFIX' => $m4is_zxa05fq9f81p8g,
'WPAL_BLOCKS_SETTINGS_TITLE' => $m4is_9ybr7472pbag66e['settings_title'],

'WPAL_BLOCKS_KEYS_REMOVED_TEXT' => $m4is_9ybr7472pbag66e['keys_removed_text'],
'debug' => defined('WPAL_BLOCKS_DEBUG') ? constant( 'WPAL_BLOCKS_DEBUG' ) : 0,

'notices' => []
];

$m4is_06c8s5xs94f91335gnaey25 = $this->m4is_x73n0p7w();
if ( ! empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
$m4is_d60kn1d3yvprp62rs332['tags'] = array_map( function($m4is_29gzevpx8rbkp) {
return [
'value' =>
 $m4is_29gzevpx8rbkp['id'],
'label' => $m4is_29gzevpx8rbkp['text']
];
}, $m4is_06c8s5xs94f91335gnaey25 );
}

$m4is_j3afa3thyq8jqpe73x4h7q = [
'type' =>
 'string',
'default' => ''
];
$m4is_d60kn1d3yvprp62rs332['attributes'] = [ "{$m4is_zxa05fq9f81p8g}_memberships" => $m4is_j3afa3thyq8jqpe73x4h7q ];

foreach ($m4is_kyrqdd9qn08s3tbxx9ahv as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp) {
$m4is_h7zwy5f0w3y9gx3wm = isset($m4is_29gzevpx8rbkp['type']) && $m4is_29gzevpx8rbkp['type'] > '' ? $m4is_29gzevpx8rbkp['type'] : false;

if ( isset($m4is_29gzevpx8rbkp['level']) ) {
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_bqhtspcavhb01spmfd3x]['label'] = str_replace("&nbsp;",
 " ", $m4is_29gzevpx8rbkp['label']);
}
else {
$m4is_d60kn1d3yvprp62rs332['attributes'][$m4is_29gzevpx8rbkp['name']] = $m4is_j3afa3thyq8jqpe73x4h7q;

}
}
$m4is_d60kn1d3yvprp62rs332['controls'] = $m4is_kyrqdd9qn08s3tbxx9ahv;

$m4is_d60kn1d3yvprp62rs332['omitted_blocks'] = apply_filters("{$m4is_1n5r8f23byhh2xkx2t4pncj99ey858}/{$m4is_0k1mrqgxx6bb}/settings/omitted_blocks",
 [
'core/freeform',
'divi/placeholder',
'fl-builder/layout'
] );

$m4is_jf3dhdme = 'wpal-blocks-gutenberg-editor';
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = plugin_dir_url(MEMBERIUM_HOME);

$m4is_9ddpq9qqmypcam86 = "{$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq}js/gutenberg-editor-access.js";
$m4is_14bv363wq5wxz0 = "{$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq}css/gutenberg-editor-access.css";

$m4is_vwse408sw = [
'react',
'react-dom',
'wp-block-editor',
'wp-blocks',
'wp-components',
'wp-data',
'wp-element',
'wp-hooks',
'wp-i18n',

'wp-polyfill'
];
wp_enqueue_script($m4is_jf3dhdme, $m4is_9ddpq9qqmypcam86, $m4is_vwse408sw, '1.2.0', false);
wp_enqueue_style("{$m4is_jf3dhdme}-css",
 $m4is_14bv363wq5wxz0, [], '1.2.0', 'all');
wp_localize_script($m4is_jf3dhdme, 'wpal_blocks_params', $m4is_d60kn1d3yvprp62rs332);
}
function m4is_cc12s8k89( $m4is_14ksh55r = false,
 string $m4is_jf3dhdme = '' ) : string {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = plugin_dir_url(MEMBERIUM_HOME);
$m4is_t9svq56t4ysv1rsgy1g61g = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_5kywzj74m8ht8s0();

wp_register_style("{$m4is_jf3dhdme}_s2css", "{$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq}css/wpal-select2.min.css", false, '4.0.3', 'all');

wp_register_script("{$m4is_jf3dhdme}_s2js", "{$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq}js/wpal-select2.full.min.js", ['jquery'], '4.0.3',
 true);
if( $m4is_14ksh55r ){
wp_enqueue_style("{$m4is_jf3dhdme}_s2css");
wp_enqueue_script("{$m4is_jf3dhdme}_s2js");
}
return 'wpalSelect2';

}

function m4is_nkg09esvr78whcksc4s0sq6na( string $m4is_0k1mrqgxx6bb ) : array {
$m4is_af7jcqj9e7w = [
'asset_id' => 0,
'invert_results' =>
 0
];
$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = m4is_9db7hheseencedjdjv::NS;
$m4is_af7jcqj9e7w = apply_filters("{$m4is_1n5r8f23byhh2xkx2t4pncj99ey858}/{$m4is_0k1mrqgxx6bb}/disabled/controls",
 $m4is_af7jcqj9e7w);
return is_array($m4is_af7jcqj9e7w) ? $m4is_af7jcqj9e7w : [];
}

function m4is_1yvkk2dkcyz1rpt9pw( string $m4is_0k1mrqgxx6bb ) : array {
$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = m4is_9db7hheseencedjdjv::NS;

$m4is_zxa05fq9f81p8g = m4is_9db7hheseencedjdjv::PREFIX;
$m4is_9ybr7472pbag66e = $this->m4is_fv5jycjd9tg1tsskv();
$m4is_5vcwef7pymrfb3zawe = 0;

$m4is_kyrqdd9qn08s3tbxx9ahv = [];
$m4is_kaa5pga5jjz8asejzk = 0;
$m4is_5wpjgy19pe0k = 10;
$m4is_af7jcqj9e7w = $this->m4is_nkg09esvr78whcksc4s0sq6na($m4is_0k1mrqgxx6bb);

$m4is_0x6jvn98xhq9hyyvwgwbar0b = [
'type' => 'checkbox',
'default' => '0',
'label_on' => _x('On', "{$m4is_1n5r8f23byhh2xkx2t4pncj99ey858}/access/checkbox",
 $m4is_1n5r8f23byhh2xkx2t4pncj99ey858),
'label_off' => _x('Off', "{$m4is_1n5r8f23byhh2xkx2t4pncj99ey858}/access/checkbox", $m4is_1n5r8f23byhh2xkx2t4pncj99ey858),

'return_value' => '1'
];

if (! array_key_exists( 'any_membership', $m4is_af7jcqj9e7w ) ){
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe] = $m4is_0x6jvn98xhq9hyyvwgwbar0b;

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['name'] = "{$m4is_zxa05fq9f81p8g}_anymembership";
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['label'] = sprintf( _x('Any %s',
 "{$m4is_1n5r8f23byhh2xkx2t4pncj99ey858}/access/membership/level", $m4is_1n5r8f23byhh2xkx2t4pncj99ey858), $m4is_9ybr7472pbag66e['membership_levels']);

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['priority'] = $m4is_kaa5pga5jjz8asejzk + $m4is_5wpjgy19pe0k;
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['toggles'] = [
'off' =>
 false,
'on' => [
"{$m4is_zxa05fq9f81p8g}_membership_levels" => true,
"{$m4is_zxa05fq9f81p8g}_anonymous_only" => false,
"{$m4is_zxa05fq9f81p8g}_loggedin" =>
 false,
]
];
$m4is_5vcwef7pymrfb3zawe ++;
}

$m4is_y7084n6v67jme9va8yz = $this->m4is_yezqm9gncdx();
$m4is_y7084n6v67jme9va8yz = isset( $m4is_y7084n6v67jme9va8yz ) && is_array( $m4is_y7084n6v67jme9va8yz ) ? $m4is_y7084n6v67jme9va8yz : false;

$m4is_1n39k61wjgx5ce9z9kenh = ! array_key_exists( 'memberships', $m4is_af7jcqj9e7w );
if ( $m4is_y7084n6v67jme9va8yz && $m4is_1n39k61wjgx5ce9z9kenh ) {
foreach ( $m4is_y7084n6v67jme9va8yz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_h9g6e5cga ) {
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe] = $m4is_0x6jvn98xhq9hyyvwgwbar0b;
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['name'] = "{$m4is_zxa05fq9f81p8g}_membership_levels-{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}";

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['label'] = stripslashes( $m4is_h9g6e5cga['name'] ) . "&nbsp;({$m4is_h9g6e5cga['level']})";

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['priority'] = $m4is_kaa5pga5jjz8asejzk + $m4is_5wpjgy19pe0k;
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['level'] = $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['toggles'] = [
'on' => [
"{$m4is_zxa05fq9f81p8g}_anonymous_only" => false,
"{$m4is_zxa05fq9f81p8g}_loggedin" =>
 false
],
'off' => [
"{$m4is_zxa05fq9f81p8g}_anymembership" => false
]
];
$m4is_5vcwef7pymrfb3zawe ++;
}
}

if ( ! array_key_exists( 'logged_in_only',
 $m4is_af7jcqj9e7w ) ){
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe] = $m4is_0x6jvn98xhq9hyyvwgwbar0b;
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['name'] = "{$m4is_zxa05fq9f81p8g}_loggedin";

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['label'] = $m4is_9ybr7472pbag66e['any_logged_in'];
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['priority'] = $m4is_kaa5pga5jjz8asejzk + $m4is_5wpjgy19pe0k;

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['toggles'] = [
'on' => [
"{$m4is_zxa05fq9f81p8g}_membership_levels" => false,

"{$m4is_zxa05fq9f81p8g}_anymembership" => false,
"{$m4is_zxa05fq9f81p8g}_anonymous_only" => false
],
'off' => false,
];
$m4is_5vcwef7pymrfb3zawe ++;

}

if ( ! array_key_exists('logged_out_only', $m4is_af7jcqj9e7w ) ) {
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe] = $m4is_0x6jvn98xhq9hyyvwgwbar0b;

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['name'] = "{$m4is_zxa05fq9f81p8g}_anonymous_only";
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['label'] = $m4is_9ybr7472pbag66e['logged_out_only'];

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['priority'] = $m4is_kaa5pga5jjz8asejzk + $m4is_5wpjgy19pe0k;
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['toggles'] = [
'off' =>
 false,
'on' => [
"{$m4is_zxa05fq9f81p8g}_membership_levels" => false,
"{$m4is_zxa05fq9f81p8g}_anymembership" => false,
"{$m4is_zxa05fq9f81p8g}_loggedin" =>
 false
]
];
$m4is_5vcwef7pymrfb3zawe ++;
}

if (! array_key_exists('invert_results', $m4is_af7jcqj9e7w) ) {
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe] = $m4is_0x6jvn98xhq9hyyvwgwbar0b;

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['name'] = "{$m4is_zxa05fq9f81p8g}_invert_results";
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['label'] = $m4is_9ybr7472pbag66e['invert'];

$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['priority'] = $m4is_kaa5pga5jjz8asejzk + $m4is_5wpjgy19pe0k;
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe]['description'] = $m4is_9ybr7472pbag66e['invert_desc'];

$m4is_5vcwef7pymrfb3zawe ++;
}

$m4is_6s1zp6q9937hd1e4rtvhd146frfrhp = [];
if ( ! array_key_exists( 'tags1', $m4is_af7jcqj9e7w ) ){
$m4is_6s1zp6q9937hd1e4rtvhd146frfrhp["{$m4is_zxa05fq9f81p8g}_access_tags"] = $m4is_9ybr7472pbag66e['require_key'];

}
if ( ! array_key_exists( 'tags2', $m4is_af7jcqj9e7w ) ){
$m4is_6s1zp6q9937hd1e4rtvhd146frfrhp["{$m4is_zxa05fq9f81p8g}_access_tags2"] = $m4is_9ybr7472pbag66e['and_require_key'];

}
if (! empty($m4is_6s1zp6q9937hd1e4rtvhd146frfrhp) ){
foreach ($m4is_6s1zp6q9937hd1e4rtvhd146frfrhp as $name => $label) {
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe] = [
'name' =>
 $name,
'type' => 'SELECT2',
'label' => $label,
'priority' => $m4is_kaa5pga5jjz8asejzk + $m4is_5wpjgy19pe0k
];
$m4is_5vcwef7pymrfb3zawe ++;

}
}

if (! array_key_exists('contact_ids', $m4is_af7jcqj9e7w) ) {
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe] = [
'name' =>
 "{$m4is_zxa05fq9f81p8g}_contact_ids",
'type' => 'textarea',
'label' => $m4is_9ybr7472pbag66e['user_ids'],
'priority' => $m4is_kaa5pga5jjz8asejzk + $m4is_5wpjgy19pe0k,

'rows' => 1,
'description' => $m4is_9ybr7472pbag66e['user_ids_desc'],
'sanitize' => 'number-csv'
];
$m4is_5vcwef7pymrfb3zawe ++;
}

if (! array_key_exists('eval',
 $m4is_af7jcqj9e7w) ){
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe] = [
'name' => "{$m4is_zxa05fq9f81p8g}_eval",
'type' =>
 'textarea',
'label' => $m4is_9ybr7472pbag66e['eval'],
'priority' => $m4is_kaa5pga5jjz8asejzk + $m4is_5wpjgy19pe0k,
'rows' => 1,
'description' =>
 $m4is_9ybr7472pbag66e['eval_desc']
];
$m4is_5vcwef7pymrfb3zawe ++;
}

if (! array_key_exists( 'asset_id', $m4is_af7jcqj9e7w) ){
$m4is_kyrqdd9qn08s3tbxx9ahv[$m4is_5vcwef7pymrfb3zawe] = [
'name' =>
 "{$m4is_zxa05fq9f81p8g}_asset_id",
'type' => 'text',
'label' => $m4is_9ybr7472pbag66e['asset_id'],
'priority' => $m4is_kaa5pga5jjz8asejzk + $m4is_5wpjgy19pe0k,

'description' => $m4is_9ybr7472pbag66e['asset_id_desc'],
'sanitize' => 'slugify'
];
}
return apply_filters( "{$m4is_1n5r8f23byhh2xkx2t4pncj99ey858}/{$m4is_0k1mrqgxx6bb}/control/config",
 $m4is_kyrqdd9qn08s3tbxx9ahv );
}

function m4is_yezqm9gncdx(){
$m4is_y7084n6v67jme9va8yz = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('memberships');

return is_array($m4is_y7084n6v67jme9va8yz) ? $m4is_y7084n6v67jme9va8yz : [];
}

function m4is_fv5jycjd9tg1tsskv( $m4is_j8j55t8dz79m7 = false,
 $m4is_0k1mrqgxx6bb = '' ) {
$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = m4is_9db7hheseencedjdjv::NS;
$m4is_0k1mrqgxx6bb = ! empty( $m4is_0k1mrqgxx6bb ) ? "{$m4is_1n5r8f23byhh2xkx2t4pncj99ey858}/access" : '';


$m4is_9ybr7472pbag66e = [
'all_visitors' => 'All Visitors',
'and_key_desc' => 'The contact must have both the 1st Tag ID(s) AND this Tag ID(s) in order to view this item and these settings are only available for logged in users.',

'and_key_name' => 'AND Tag ID(s)',
'and_require_key' => 'AND Require Tag ID(s)',
'any_logged_in' => 'Any Logged In User',
'any_membership' =>
 'Any Membership Level',
'asset_id_desc' => 'Enter an admin ID to be used for filters. Non-leading _ and alpha / numerical characters only.',

'asset_id' => 'Asset ID',
'eval_desc' => 'Enter a boolean expression which evaluates to true to show or false to hide this element.',

'eval' => 'PHP Boolean Expression',
'hide' => 'Hide Completely',
'key_name' => 'Tag ID(s)',
'keys_removed_text' => 'Notice : The following Tag ID(s) have been removed',

'logged_in_msg' => 'settings are only available for logged in users.',
'logged_in_only' => 'Logged In Users Only',
'logged_out_only' =>
 'Logged Out Only',
'logged_out_user' => 'Logged Out Visitors Only',
'membership_levels' => 'Membership Levels',
'memberships' => 'Memberships',

'prohibited_action' => 'When Prohibited :',
'redirect_url' => 'Redirect URL',
'redirect' => 'Redirect',
'require_key' => 'Require Tag ID(s)',

'settings_title' => 'Memberium',
'user_ids_desc' => 'Comma Seperated values. Example : 123,456,789',
'user_ids' => 'Require User IDs',

'user_status' => 'User Status',
];
if( is_string( $m4is_j8j55t8dz79m7 ) ){
return ! empty( $m4is_9ybr7472pbag66e[$m4is_j8j55t8dz79m7] ) ? _x( $m4is_9ybr7472pbag66e[$m4is_j8j55t8dz79m7],
 $m4is_0k1mrqgxx6bb, $m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) : '';
}
else{
return $m4is_9ybr7472pbag66e;
}
}



function m4is_qrsm9adcwj7j( string $m4is_h7zwy5f0w3y9gx3wm ) : array {
$m4is_9ybr7472pbag66e = $this->m4is_fv5jycjd9tg1tsskv();

$m4is_kyrqdd9qn08s3tbxx9ahv = [
[
'name' => 'status',
'label' => $m4is_9ybr7472pbag66e['user_status'],
'type' => 'select2',
'data' =>
 'status',
'disable-search' => true,
'change' => "statusToggle",
'priority' => 100
],
[
'name' => 'memberships',
'label' => $m4is_9ybr7472pbag66e['memberships'],

'info' => "{$m4is_9ybr7472pbag66e['memberships']} {$m4is_9ybr7472pbag66e['logged_in_msg']}",
'type' => 'select2',
'data' => 'levels',

'change' => "contactToggle",
'multiple' => 1,
'priority' => 200
],
[
'name' => 'tags1',
'label' => $m4is_9ybr7472pbag66e['key_name'],

'info' => "{$m4is_9ybr7472pbag66e['key_name']} {$m4is_9ybr7472pbag66e['logged_in_msg']}",
'type' => 'select2',
'data' => 'keys',
'change' =>
 "contactToggle",
'multiple' => 1,
'priority' => 300
],
[
'name' => 'tags2',
'label' => $m4is_9ybr7472pbag66e['and_key_name'],
'info' =>
 $m4is_9ybr7472pbag66e['and_key_desc'],
'type' => 'select2',
'data' => 'keys',
'change' => "contactToggle",
'multiple' => 1,
'priority' =>
 400
],
[
'name' => 'eval',
'label' => $m4is_9ybr7472pbag66e['eval'],
'type' => 'textarea',
'desc' => $m4is_9ybr7472pbag66e['eval_desc'],

'priority' => 500
],
];
if( $m4is_h7zwy5f0w3y9gx3wm === 'taxonomy' ){
$m4is_kyrqdd9qn08s3tbxx9ahv[] = [
'name' => 'prohibited_action',

'label' => $m4is_9ybr7472pbag66e['prohibited_action'],
'type' => 'select2',
'data' => 'prohibited_actions',
'change' => 'prohibitedActionToggle',

'disable-search' => true,
'priority' => 600
];
$m4is_kyrqdd9qn08s3tbxx9ahv[] = [
'name' => 'redirect_url',
'label' => $m4is_9ybr7472pbag66e['redirect_url'],

'type' => 'text',
'priority' => 700
];
}
return $m4is_kyrqdd9qn08s3tbxx9ahv;
}
function m4is_emqeqeaf4() {
return apply_filters('memberium/access/logged_in_only/fields',
 ['memberships', 'tags1', 'tags2'] );
}
function m4is_7p1q2p4wwa5yy1vq9m4azf128hz9( array $m4is_d60kn1d3yvprp62rs332 ) : array {
$m4is_54c1eqz40xmx06hy1b = apply_filters( 'memberium/access/logged_in_settings',
 [
'any_membership' => 1,
'memberships' => 1,
'tags1' => 1,
'tags2' => 1
]);
if ( is_array( $m4is_54c1eqz40xmx06hy1b ) && ! empty( $m4is_54c1eqz40xmx06hy1b ) ) {
foreach ( $m4is_54c1eqz40xmx06hy1b as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( array_key_exists( $m4is_j8j55t8dz79m7, $m4is_d60kn1d3yvprp62rs332 ) ) {
unset( $m4is_d60kn1d3yvprp62rs332[$m4is_j8j55t8dz79m7] );

}
}
}
return $m4is_d60kn1d3yvprp62rs332;
}
function m4is_hvv9kqe18w6gtnq40v7( $m4is_b4tj8bz7gag2n7w4a3ych8s4hw86 ) {
$m4is_y7084n6v67jme9va8yz = empty($m4is_b4tj8bz7gag2n7w4a3ych8s4hw86) ? [] : array_filter( explode(',',
 $m4is_b4tj8bz7gag2n7w4a3ych8s4hw86) );
return in_array('any_membership', $m4is_y7084n6v67jme9va8yz) ? 'any_membership' : $m4is_b4tj8bz7gag2n7w4a3ych8s4hw86;

}
function m4is_n59hbwekrhr5t9c6gg4( string $type ){
$m4is_33we84v139 = plugin_dir_url(MEMBERIUM_HOME);
$m4is_9ddpq9qqmypcam86 = "{$m4is_33we84v139}js/core-wp-asset-access.js";

$m4is_t9svq56t4ysv1rsgy1g61g = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_5kywzj74m8ht8s0();

$m4is_jf3dhdme = "memb-core-wp-asset-access-js";

$this->m4is_cc12s8k89( true );
wp_register_style('memberium_admin_css', $m4is_33we84v139 . 'css/admin.css',
 false, $m4is_t9svq56t4ysv1rsgy1g61g, 'all');
wp_enqueue_style('memberium_admin_css');

$m4is_d60kn1d3yvprp62rs332 = [
'type' => $type,

'select2Data' => [
'levels' => $this->m4is_jk5y1teg2qwwnbb5nkkvq06(),
'keys' => $this->m4is_x73n0p7w(),
'status' => $this->m4is_33v6bx8cg207rz4f7xbft7xxqg4(),

'prohibited_actions' => $this->m4is_4gkytvkvsvg814j4ecc5qrz9y1p7()
],
'I18n' => [
'ids_removed' => $this->m4is_fv5jycjd9tg1tsskv('keys_removed_text')
],

'loggedInOnlyKeys' => $this->m4is_emqeqeaf4()
];

wp_enqueue_script($m4is_jf3dhdme, $m4is_9ddpq9qqmypcam86, ['jquery'], $m4is_t9svq56t4ysv1rsgy1g61g,
 true);
wp_localize_script($m4is_jf3dhdme, "membCoreAssetsAccessData", $m4is_d60kn1d3yvprp62rs332);
unset($m4is_33we84v139, $m4is_9ddpq9qqmypcam86,
 $m4is_t9svq56t4ysv1rsgy1g61g, $m4is_jf3dhdme, $m4is_d60kn1d3yvprp62rs332);
}



function m4is_jk5y1teg2qwwnbb5nkkvq06() : array {
static $m4is_sh9qstpzv34tkt = [];

if ( empty( $m4is_sh9qstpzv34tkt ) ) {
$m4is_y7084n6v67jme9va8yz = $this->m4is_yezqm9gncdx();
$m4is_sh9qstpzv34tkt = [
[
'id' => 'any_membership',

'text' => $this->m4is_fv5jycjd9tg1tsskv( 'any_membership' )
]
];
if( ! empty( $m4is_y7084n6v67jme9va8yz ) ) {
foreach ( $m4is_y7084n6v67jme9va8yz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_pzeqetyttg644ahb8fb ) {
$m4is_sh9qstpzv34tkt[] = [
'id' => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' => stripslashes( $m4is_pzeqetyttg644ahb8fb['name'] ) . " ({$m4is_pzeqetyttg644ahb8fb['level']})"
];

}
}
}
return $m4is_sh9qstpzv34tkt;
}
function m4is_x73n0p7w() : array {
static $m4is_19x1c17et728k945 = [];
if( empty( $m4is_19x1c17et728k945 ) ) {
$m4is_4s4mmcg520b0y0tbbgnade = m4is_0ddg4zyk7dn8eg0283::m4is_6aqw2cq1ybep7vgra5hh7zr( [],
 '' );
if( ! empty( $m4is_4s4mmcg520b0y0tbbgnade ) ) {
$m4is_19x1c17et728k945 = array_map( function( $m4is_bqhtspcavhb01spmfd3x, $m4is_29gzevpx8rbkp ) {
return [
'id' =>
 $m4is_bqhtspcavhb01spmfd3x,
'text' => $m4is_29gzevpx8rbkp
];
}, array_keys( $m4is_4s4mmcg520b0y0tbbgnade ), $m4is_4s4mmcg520b0y0tbbgnade );

}
}
return $m4is_19x1c17et728k945;
}
function m4is_33v6bx8cg207rz4f7xbft7xxqg4() : array {
$m4is_9ybr7472pbag66e = $this->m4is_fv5jycjd9tg1tsskv();

return [
[
'id' => '',
'text' => $m4is_9ybr7472pbag66e['all_visitors']
],
[
'id' => '1',
'text' => $m4is_9ybr7472pbag66e['logged_in_only']
],

[
'id' => '2',
'text' => $m4is_9ybr7472pbag66e['logged_out_user']
]
];
}
function m4is_4gkytvkvsvg814j4ecc5qrz9y1p7() : array {
$m4is_9ybr7472pbag66e = $this->m4is_fv5jycjd9tg1tsskv();

return [
[
'id' => '',
'text' => $m4is_9ybr7472pbag66e['hide']
],
[
'id' => '1',
'text' => $m4is_9ybr7472pbag66e['redirect']
]
];
}
}
