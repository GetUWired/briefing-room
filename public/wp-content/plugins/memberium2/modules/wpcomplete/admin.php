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


class_exists( 'm4is_p1vmkhb7nhw2kjaz0d' ) || die();

final class m4is_m2k2nybzntskhsdwkzzck {
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_zsjehbs1ezts();
$this->m4is_5eragr7sh2yyj356m();

}
private function m4is_5eragr7sh2yyj356m() {
add_action('admin_init', [$this, 'm4is_dn3enfqnmypw44']);
}
private function m4is_zsjehbs1ezts() {
if ( ! defined( 'WPCOMPLETE_IS_ACTIVATED' ) ) {
return;

}
$m4is_5nsj3zb5jae5ag3w = constant( 'WPCOMPLETE_IS_ACTIVATED' );
if ( $m4is_5nsj3zb5jae5ag3w == false ) {
$m4is_n564s2a7ef6 = array_filter(explode(',',
 get_option('wpcomplete_post_type', '') ) );
$m4is_eg4jxwyx5c = get_post_types();
$m4is_jvx2c5pvbs6sa1ne9sdm82eyzj7m4f = ['attachment'];

foreach($m4is_eg4jxwyx5c as $m4is_8db3p40m84ryzr6ckqe) {
if (! in_array($m4is_8db3p40m84ryzr6ckqe, $m4is_jvx2c5pvbs6sa1ne9sdm82eyzj7m4f) ) {
if (! in_array($m4is_8db3p40m84ryzr6ckqe,
 $m4is_n564s2a7ef6) ) {
$m4is_rcaa921tgxwvr37dc97d2 = get_post_type_object($m4is_8db3p40m84ryzr6ckqe);
if ($m4is_rcaa921tgxwvr37dc97d2->public) {
$m4is_n564s2a7ef6[] = $m4is_8db3p40m84ryzr6ckqe;

}
}
}
}
if (! empty($m4is_n564s2a7ef6) ) {
$m4is_n564s2a7ef6 = implode(',', $m4is_n564s2a7ef6);
update_option('wpcomplete_post_type',
 $m4is_n564s2a7ef6, false);
}
}
}
function m4is_fgw47szjnbe1mhhfe2zw8f() {
global $post;
$m4is_pk98f5nk = [];
$m4is_7tfmxp78y3a3ydwn = get_post_meta($post->ID);

$m4is_t7ss27sn8dc4ezemec9emt = [
'_is4wp_wpcomplete_tags',
'_is4wp_wpcomplete_badges',
];
foreach( $m4is_t7ss27sn8dc4ezemec9emt as $m4is_j8j55t8dz79m7 ) {
if ( isset( $m4is_7tfmxp78y3a3ydwn[$m4is_j8j55t8dz79m7][0] ) ) {
$m4is_pk98f5nk[$m4is_j8j55t8dz79m7] = $m4is_7tfmxp78y3a3ydwn[$m4is_j8j55t8dz79m7][0];

} else {
$m4is_pk98f5nk[$m4is_j8j55t8dz79m7] = '';
}
}
unset($metas, $m4is_t7ss27sn8dc4ezemec9emt, $m4is_j8j55t8dz79m7);
wp_nonce_field( m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_54b9bwwsx7sym(),
 "memberium_wpcomplete_nonce_{$post->ID}");
echo '<label for="_is4wp_wpcomplete_tags">' . _e( "Apply these Tags", 'memberium' ) . ':</label> ';

echo '<input name="_is4wp_wpcomplete_tags" class="multitaglist" style="width:100%; max-width:100%" value="', ( $m4is_pk98f5nk['_is4wp_wpcomplete_tags'] > '' ? $m4is_pk98f5nk['_is4wp_wpcomplete_tags'] : '' ),
 '"><br /><br />';
}
function m4is_8bbw2g2ahmr8xb8gxb30s1kchf5vy($m4is_tz1rt7sbq40fade6e6rx) {

if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
return;

}

if ( empty( $_POST["memberium_wpcomplete_nonce_{$m4is_tz1rt7sbq40fade6e6rx}"] ) || ! wp_verify_nonce( $_POST["memberium_wpcomplete_nonce_{$m4is_tz1rt7sbq40fade6e6rx}"],
 m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_54b9bwwsx7sym() ) ) {
return;
}
if ( ! current_user_can('edit_posts',
 $m4is_tz1rt7sbq40fade6e6rx) ) {
return;
}
$m4is_t7ss27sn8dc4ezemec9emt = [
'_is4wp_wpcomplete_tags',
];
foreach( $m4is_t7ss27sn8dc4ezemec9emt as $m4is_j8j55t8dz79m7 ) {
$_POST[$m4is_j8j55t8dz79m7] = isset( $_POST[$m4is_j8j55t8dz79m7] ) ? $_POST[$m4is_j8j55t8dz79m7] : '';

if (empty($_POST[$m4is_j8j55t8dz79m7])) {
delete_post_meta($m4is_tz1rt7sbq40fade6e6rx, $m4is_j8j55t8dz79m7);
}
else {
add_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_j8j55t8dz79m7, $_POST[$m4is_j8j55t8dz79m7], true ) or update_post_meta( $m4is_tz1rt7sbq40fade6e6rx, $m4is_j8j55t8dz79m7, $_POST[$m4is_j8j55t8dz79m7] );

}
}
}
function m4is_5052r1bsyvjx3cw2x($m4is_tz1rt7sbq40fade6e6rx) {
return ! empty(get_post_meta($m4is_tz1rt7sbq40fade6e6rx, 'wpcomplete',
 true) );
}
function m4is_dn3enfqnmypw44() {
$m4is_yhdk2h7srcr7n5mzjnw7m6b = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_6c1kj95ycpcym5c();

add_meta_box('is4wp-wpcomplete-actions', 'WPComplete Memberium Integration', [$this, 'm4is_fgw47szjnbe1mhhfe2zw8f'], $m4is_yhdk2h7srcr7n5mzjnw7m6b,
 'side');
add_action('save_post', [$this, 'm4is_8bbw2g2ahmr8xb8gxb30s1kchf5vy']);
}
}