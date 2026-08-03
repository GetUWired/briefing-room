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

final class m4is_vwc1yy04e4hz3qnbfm {
private function __construct() {
}
static function m4is_6ap6tgkn7qfmy3tk($m4is_4s0s0575by8) {
if ( m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_mdj300zr1jk5av2y9cp() ) {
$m4is_zxa05fq9f81p8g = 'wpal-memberium-';

$m4is_5qr45zdkesq5nq = 'new-content';
$m4is_3h2p59t1q80qzpcs = [
[
'group' => '',
'href' => get_admin_url( null, 'admin.php?page=memberium-memberships&action=add' ),

'id' => $m4is_zxa05fq9f81p8g . 'membership',
'meta' => [],
'parent' => $m4is_5qr45zdkesq5nq,
'title' => 'Membership',
],
[
'group' =>
 '',
'href' => get_admin_url( null, 'post-new.php?post_type=partials' ),
'id' => $m4is_zxa05fq9f81p8g . 'partial',
'meta' => [],
'parent' =>
 $m4is_5qr45zdkesq5nq,
'title' => 'Partial',
],
[
'group' => '',
'href' => get_admin_url( null, 'post-new.php?post_type=memb_shortcodeblocks' ),

'id' => $m4is_zxa05fq9f81p8g . 'customshortcode',
'meta' => [],
'parent' => $m4is_5qr45zdkesq5nq,
'title' => 'Custom Shortcode',
],

];
foreach ( $m4is_3h2p59t1q80qzpcs as $m4is_s8cs5mdq57e5bgpqzd ) {
$m4is_4s0s0575by8->add_node( $m4is_s8cs5mdq57e5bgpqzd );
}
$m4is_5qr45zdkesq5nq = 'wpal-memberium';

$m4is_3h2p59t1q80qzpcs = [
[
'id' => $m4is_5qr45zdkesq5nq,
'title' => 'Memberium',
'parent' => '',
'href' => '',
'group' => '',
'meta' =>
 [],
],
[
'id' => $m4is_zxa05fq9f81p8g . 'sync-tags',
'title' => 'Sync Tags',
'parent' => $m4is_5qr45zdkesq5nq,
'href' => get_admin_url( null,
 'admin.php?page=memberium-support&tab=dashboard&action=sync-tags' ),
'group' => '',
'meta' => [],
],
[
'id' => $m4is_zxa05fq9f81p8g . 'sync-fields',

'title' => 'Sync Custom Fields',
'parent' => $m4is_5qr45zdkesq5nq,
'href' => get_admin_url( null, 'admin.php?page=memberium-support&tab=dashboard&action=sync-fields' ),

'group' => '',
'meta' => [],
],
[
'id' => $m4is_zxa05fq9f81p8g . 'sync-actionsets',
'title' => 'Sync Actionsets',
'parent' => $m4is_5qr45zdkesq5nq,

'href' => get_admin_url( null, 'admin.php?page=memberium-support&tab=dashboard&action=sync-actionsets' ),
'group' => '',
'meta' =>
 [],
],
[
'id' => $m4is_zxa05fq9f81p8g . 'update-license',
'title' => 'Update License',
'parent' => $m4is_5qr45zdkesq5nq,
'href' =>
 get_admin_url( null, 'admin.php?page=memberium-support&tab=dashboard&action=update-license' ),
'group' => '',
'meta' => [],
],
[
'id' =>
 $m4is_zxa05fq9f81p8g . 'dashboard',
'title' => 'Dashboard',
'parent' => $m4is_5qr45zdkesq5nq,
'href' => get_admin_url( null, 'admin.php?page=memberium-support&tab=dashboard'),

'group' => '',
'meta' => [],
],
[
'id' => $m4is_zxa05fq9f81p8g . 'support',
'title' => 'Support',
'parent' => $m4is_5qr45zdkesq5nq,

'href' => get_admin_url( null, 'admin.php?page=memberium-support&tab=support' ),
'group' => '',
'meta' => [],
],
];
foreach($m4is_3h2p59t1q80qzpcs as $m4is_s8cs5mdq57e5bgpqzd) {
$m4is_4s0s0575by8->add_node($m4is_s8cs5mdq57e5bgpqzd);

}
}
}
static function m4is_wpxxher5( $m4is_4s0s0575by8 ) {
if ( defined( 'QM_VERSION' ) ) {
return;
}
if ( ! current_user_can( 'manage_options' ) ) {
return;

}
$m4is_gy32ceyx187n1vggvmf9wddmg = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_qzmcdfydzv8z92m1asvcpm38ag( false );

$m4is_6xwa9w9maee9 = wp_using_ext_object_cache();
$m4is_afcsa4ew9chh3 = ! empty( $_SERVER['HTTP_CF_RAY'] );
$m4is_3j1y1qm529vqae47jybvks13qjy = ! empty( $_SERVER['HTTP_X_SUCURI_CLIENTIP'] );

$m4is_h764vxmap7x7g = $m4is_afcsa4ew9chh3 || $m4is_3j1y1qm529vqae47jybvks13qjy;
$m4is_fyqqsgc9sza73ynh6q15vqdhe5b9 = is_admin() ? WP_MAX_MEMORY_LIMIT : ini_get( 'memory_limit' );

$m4is_nb1vd7bscp6j6v234cwsnbn0n = count( get_option( 'active_plugins', [] ) );
$m4is_5qr45zdkesq5nq = 'wpal-memberium-performance';

$m4is_3h2p59t1q80qzpcs = [
[
'id' => $m4is_5qr45zdkesq5nq,
'title' => 'Performance',
'parent' => '',
'href' => '',
'group' => '',
'meta' =>
 [],
],
[
'id' => 'wpal-memberium-time',
'title' => 'Time: <span style="color:white;" id="wpal-memberium-time">' . number_format_i18n( $m4is_gy32ceyx187n1vggvmf9wddmg['time'],
 3 ) . 's</span>',
'parent' => $m4is_5qr45zdkesq5nq,
'href' => '#',
'group' => '',
'meta' => [],
],
[
'id' => 'wpal-memberium-wpmemory',

'title' => 'Total Memory: <span style="color:white;">' . size_format( intval( $m4is_fyqqsgc9sza73ynh6q15vqdhe5b9 ) * 1024 * 1024) . '</span>',

'parent' => $m4is_5qr45zdkesq5nq,
'href' => '#',
'group' => '',
'meta' => [],
],
[
'id' => 'wpal-memberium-memory',
'title' => 'Used Memory: <span style="color:white;" id="wpal-memberium-memory">' . size_format( $m4is_gy32ceyx187n1vggvmf9wddmg['memory'],
 2 ) . '</span>',
'parent' => $m4is_5qr45zdkesq5nq,
'href' => '#',
'group' => '',
'meta' => [],
],
[
'id' => 'wpal-memberium-plugins',

'title' => 'Plugins: <span style="color:white;">' . number_format_i18n( $m4is_nb1vd7bscp6j6v234cwsnbn0n ). '</span>',
'parent' => $m4is_5qr45zdkesq5nq,

'href' => '#',
'group' => '',
'meta' => [],
],
[
'id' => 'wpal-memberium-queries',
'title' => 'SQL Queries: <span style="color:white;" id="wpal-memberium-db-queries">' . get_num_queries() . '</span>',

'parent' => $m4is_5qr45zdkesq5nq,
'href' => '#',
'group' => '',
'meta' => [],
],
[
'id' => 'wpal-memberium-http',
'title' => 'HTTP Calls: <span style="color:white;" id="wpal-memberium-http-calls">' . (int) $m4is_gy32ceyx187n1vggvmf9wddmg['http_calls'] . '</span>',

'parent' => $m4is_5qr45zdkesq5nq,
'href' => '#',
'group' => '',
'meta' => [],
],
[
'id' => 'wpal-memberium-crm-api',
'title' => 'API Calls: <span style="color:white;" id="wpal-memberium-crm-api">' . (int) $m4is_gy32ceyx187n1vggvmf9wddmg['api_calls'] . '</span>',

'parent' => $m4is_5qr45zdkesq5nq,
'href' => '#',
'group' => '',
'meta' => [],
],
];
if ( $m4is_6xwa9w9maee9 ) {
global $wp_object_cache;

$m4is_1nec8dtpmskf78rt2myjtx3efmb9 = property_exists( $wp_object_cache, 'cache_hits' ) ? $wp_object_cache->cache_hits : 0;
$m4is_shqtj5cdx = property_exists( $wp_object_cache,
 'cache_misses' ) ? $wp_object_cache->cache_misses : 0;
if ( true ) {
$m4is_3h2p59t1q80qzpcs[] = [
'id' => 'wpal-memberium-cache-divider',

'title' => '<hr />',
'parent' => 'wpal-memberium-performance',
'href' => '#',
'group' => '',
'meta' => [],
];
$m4is_3h2p59t1q80qzpcs[] = [
'id' =>
 'wpal-memberium-caching-label',
'title' => 'Object Caching',
'parent' => 'wpal-memberium-performance',
'href' => '#',
'group' => '',

'meta' => [],
];
$m4is_3h2p59t1q80qzpcs[] = [
'id' => 'wpal-memberium-cache-hits',
'title' => 'Cache Hits: <span style="color:white;" id="wpal-memberium-cache-hits">' . (int) $m4is_1nec8dtpmskf78rt2myjtx3efmb9 . '</span>',

'parent' => 'wpal-memberium-performance',
'href' => '#',
'group' => '',
'meta' => [],
];
$m4is_3h2p59t1q80qzpcs[] = [
'id' => 'wpal-memberium-cache-misses',

'title' => 'Cache Misses: <span style="color:white;" id="wpal-memberium-cache-misses">' . (int) $m4is_shqtj5cdx . '</span>',
'parent' =>
 'wpal-memberium-performance',
'href' => '#',
'group' => '',
'meta' => [],
];
}
}
else {
$m4is_3h2p59t1q80qzpcs[] = [
'id' => 'wpal-memberium-caching-label',

'title' => 'Object Cache:  <span style="color:white;">Not Found</span>',
'parent' => 'wpal-memberium-performance',
'href' => '#',
'group' =>
 '',
'meta' => [],
];
}
if ( $m4is_h764vxmap7x7g ) {
$m4is_5qr45zdkesq5nq = 'wpal-memberium-performance';
$m4is_3h2p59t1q80qzpcs[] = [
'id' =>
 'wpal-memberium-cache-divider',
'title' => '<hr />',
'parent' => $m4is_5qr45zdkesq5nq,
'href' => '#',
'group' => '',
'meta' => [],

];
$m4is_3h2p59t1q80qzpcs[] = [
'id' => 'wpal-memberium-cloudflare',
'title' => 'Cloudflare: <span style="color:white;">' . ( $m4is_afcsa4ew9chh3 ? 'Yes' : 'No' ) . '</span>',

'parent' => $m4is_5qr45zdkesq5nq,
'href' => '#',
'group' => '',
'meta' => [],
];
$m4is_3h2p59t1q80qzpcs[] = [
'id' => 'wpal-memberium-sucuri',

'title' => 'Sucuri: <span style="color:white;">' . ( $m4is_3j1y1qm529vqae47jybvks13qjy ? 'Yes' : 'No' ) . '</span>',
'parent' => $m4is_5qr45zdkesq5nq,

'href' => '#',
'group' => '',
'meta' => [],
];
}
foreach ( $m4is_3h2p59t1q80qzpcs as $m4is_s8cs5mdq57e5bgpqzd ) {
$m4is_4s0s0575by8->add_node( $m4is_s8cs5mdq57e5bgpqzd );

}
}
}