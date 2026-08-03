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

final class m4is_9xkkn485565d5zj83k854r5t {
static function m4is_9e2kqz9zeww2pjcrty039vmzhwmc6aj(string $m4is_ga29mcmc6xagge6z6gxpkszayg = '',
 string $m4is_ahjdsqxb1prfd5a = '') {
$m4is_ahjdsqxb1prfd5a = empty($m4is_ahjdsqxb1prfd5a) ? get_temp_dir() : $m4is_ahjdsqxb1prfd5a;

$m4is_ga29mcmc6xagge6z6gxpkszayg = empty($m4is_ga29mcmc6xagge6z6gxpkszayg) ? uniqid() : $m4is_ga29mcmc6xagge6z6gxpkszayg;
$m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = $m4is_ahjdsqxb1prfd5a . $m4is_ga29mcmc6xagge6z6gxpkszayg;

mkdir( $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 );
$m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 = realpath( $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 );

return $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 . '/';
}
static function m4is_f55n0pvdy063q2vk0bpf66pwxyzzbxs( WP_Post $m4is_z4ts5pa39jf1yhjb4 ) {
$m4is_tz1rt7sbq40fade6e6rx = $m4is_z4ts5pa39jf1yhjb4->ID;

$m4is_0kdm2zprhs5b1 = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx );
$m4is_19x1c17et728k945 = [
'_elementor_css',
'_elementor_data',

'_elementor_edit_mode',
'_elementor_page_settings',
'_elementor_template_type',
'_elementor_version',
'_et_builder_version',
'_et_pb_custom_css',

'_et_pb_enable_shortcode_tracking',
'_et_pb_old_content',
'_et_pb_page_layout',
'_et_pb_post_hide_nav',
'_et_pb_side_nav',
'_et_pb_use_builder',

'_fl_builder_data_settings',
'_fl_builder_data',
'_fl_builder_draft_settings',
'_fl_builder_draft',
'_fl_builder_enabled',
'_is4wp_anonymous_only',

'_is4wp_any_loggedin_user',
'_is4wp_any_membership',
'_is4wp_can_comment',
'_is4wp_discourage_cache',
'_is4wp_force_public',
'_is4wp_hide_from_menu',

'_is4wp_private_comments',
'_is4wp_prohibited_action',
'_is4wp_redirect_url',
'_iswp_custom_code',
'_optimizepress_color_scheme_advanced',

'_optimizepress_color_scheme_template',
'_optimizepress_exit_redirect',
'_optimizepress_fb_share',
'_optimizepress_feature_area',
'_optimizepress_feature_title',

'_optimizepress_footer_area',
'_optimizepress_header_layout',
'_optimizepress_launch_funnel',
'_optimizepress_launch_gateway',
'_optimizepress_lightbox',

'_optimizepress_membership',
'_optimizepress_mobile_redirect',
'_optimizepress_page_thumbnail_preset',
'_optimizepress_page_thumbnail',

'_optimizepress_pagebuilder',
'_optimizepress_scripts',
'_optimizepress_seo',
'_optimizepress_theme',
'_optimizepress_typography',

'_wp_page_template',
];
$m4is_3tjqncgfxsfqvfktk80x9nbd = [
'signature' => 'Web Power and Light Post Sherpa',
'version' => 1,
'title' =>
 isset($m4is_0kdm2zprhs5b1['_template_title'][0]) ? $m4is_0kdm2zprhs5b1['_template_title'][0] : $m4is_z4ts5pa39jf1yhjb4->post_title,

'post' => [
'post_content' => $m4is_z4ts5pa39jf1yhjb4->post_content,
'post_title' => $m4is_z4ts5pa39jf1yhjb4->post_title,
'post_excerpt' =>
 $m4is_z4ts5pa39jf1yhjb4->post_excerpt,
'comment_status' => $m4is_z4ts5pa39jf1yhjb4->comment_status,
'ping_status' => $m4is_z4ts5pa39jf1yhjb4->ping_status,

'post_type' => $m4is_z4ts5pa39jf1yhjb4->post_type,
],
'meta' => [],
];
foreach($m4is_19x1c17et728k945 as $m4is_bqhtspcavhb01spmfd3x) {
if (isset($m4is_0kdm2zprhs5b1[$m4is_bqhtspcavhb01spmfd3x][0]) ) {
$m4is_3tjqncgfxsfqvfktk80x9nbd['meta'][$m4is_bqhtspcavhb01spmfd3x] = base64_encode($m4is_0kdm2zprhs5b1[$m4is_bqhtspcavhb01spmfd3x][0]);

}
}
$m4is_3tjqncgfxsfqvfktk80x9nbd = json_encode($m4is_3tjqncgfxsfqvfktk80x9nbd);
return $m4is_3tjqncgfxsfqvfktk80x9nbd;
}
static function m4is_t68q5yvvzzw2611jwtaf7ag3d( array $m4is_wtt69zqx60txhy6926q5ank1ajb8 = [] ) {
if ( ! count( $m4is_wtt69zqx60txhy6926q5ank1ajb8 ) ) {
return;

}
require_once ABSPATH .'/wp-admin/includes/file.php';
$m4is_r3z0bgat0v00hj7jbtd2m7pc3 = wp_upload_dir();
$m4is_09p80gwrbnt1c7w98w1vdwnmwx6x1y5 = $m4is_r3z0bgat0v00hj7jbtd2m7pc3['path'] . '/';

$m4is_hy0v7kh80rh6r3t9sdy9z = $m4is_09p80gwrbnt1c7w98w1vdwnmwx6x1y5 . 'page-export-' . time() . '-' . count($m4is_wtt69zqx60txhy6926q5ank1ajb8) . '.zip';

$m4is_g4fz4h1295j = "\n\nPost Sherpa Export\n" . 'Copyright (c) ' . date('Y') . " Web, Power and Light LLC\n\n";
$m4is_txrxg6ddes71k68pg9tekj = new ziparchive;

$m4is_txrxg6ddes71k68pg9tekj->open( $m4is_hy0v7kh80rh6r3t9sdy9z, ziparchive::CREATE || ziparchive::OVERWRITE );
$m4is_txrxg6ddes71k68pg9tekj->setArchiveComment( $m4is_g4fz4h1295j );


$m4is_433nbhkpnjwcq = [];
foreach($m4is_wtt69zqx60txhy6926q5ank1ajb8 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh) {
$m4is_z4ts5pa39jf1yhjb4 = get_post( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh );

$m4is_d60kn1d3yvprp62rs332 = self::m4is_f55n0pvdy063q2vk0bpf66pwxyzzbxs( $m4is_z4ts5pa39jf1yhjb4 );
$m4is_ga29mcmc6xagge6z6gxpkszayg = 'memberium-page-export-' . $m4is_z4ts5pa39jf1yhjb4->post_name . '.json';

$m4is_txrxg6ddes71k68pg9tekj->addfromstring($m4is_ga29mcmc6xagge6z6gxpkszayg, $m4is_d60kn1d3yvprp62rs332);
}
$m4is_txrxg6ddes71k68pg9tekj->close();


if (! function_exists('media_handle_upload') ) {
require_once(ABSPATH . 'wp-admin/includes/image.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');

require_once(ABSPATH . 'wp-admin/includes/media.php');
}
$m4is_91gd4zkkks9r0tg97q69m5ta4tgn78 = [];
$m4is_91gd4zkkks9r0tg97q69m5ta4tgn78['name'] = basename($m4is_hy0v7kh80rh6r3t9sdy9z);

$m4is_91gd4zkkks9r0tg97q69m5ta4tgn78['tmp_name'] = $m4is_hy0v7kh80rh6r3t9sdy9z;
$m4is_2wydzkpph0ydemvcpz9 = media_handle_sideload($m4is_91gd4zkkks9r0tg97q69m5ta4tgn78,
 0, 'Memberium Page Export Created on ' . date('Y-m-d') );
return $m4is_2wydzkpph0ydemvcpz9;
}
static function m4is_g2kmzzvrhvcshvmh2qp626hdqkr9pbv(string $m4is_ga29mcmc6xagge6z6gxpkszayg) {
if ( ! class_exists( 'ZipArchive' ) ) {
return false;

}
$m4is_7a27exq80y2rg7b3b8tac99rakwctscw = new ZipArchive;
}
static function m4is_f4fmzddrb6pyex940h39(string $m4is_ngx7gwmb73qzj056pw2 = '',
 int $m4is_tz1rt7sbq40fade6e6rx = 0) {
$m4is_ngx7gwmb73qzj056pw2 = json_decode($m4is_ngx7gwmb73qzj056pw2, true);
if ($m4is_ngx7gwmb73qzj056pw2['signature'] == 'Web Power and Light Post Sherpa') {
$m4is_z4ts5pa39jf1yhjb4 = [
'ID' =>
 $m4is_tz1rt7sbq40fade6e6rx,
'post_title' => $m4is_ngx7gwmb73qzj056pw2['post']['post_title'],
'post_content' => $m4is_ngx7gwmb73qzj056pw2['post']['post_content'],

'post_excerpt' => $m4is_ngx7gwmb73qzj056pw2['post']['post_excerpt'],
'post_author' => m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_vd3qpw0vkdm(),

'comment_status' => $m4is_ngx7gwmb73qzj056pw2['post']['comment_status'],
'ping_status' => $m4is_ngx7gwmb73qzj056pw2['post']['ping_status'],

'post_type' => $m4is_ngx7gwmb73qzj056pw2['post']['post_type'],
];
$m4is_tz1rt7sbq40fade6e6rx = wp_insert_post($m4is_z4ts5pa39jf1yhjb4,
 false);
foreach ( $m4is_ngx7gwmb73qzj056pw2['meta'] as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp ) {
$m4is_29gzevpx8rbkp = base64_decode($m4is_29gzevpx8rbkp);

$m4is_29gzevpx8rbkp = maybe_unserialize($m4is_29gzevpx8rbkp);
if (is_string($m4is_29gzevpx8rbkp) ) {
$m4is_29gzevpx8rbkp = addslashes($m4is_29gzevpx8rbkp);

}
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = add_post_meta($m4is_tz1rt7sbq40fade6e6rx, $m4is_bqhtspcavhb01spmfd3x, $m4is_29gzevpx8rbkp,
 false);
}
echo 'post id = ', $m4is_tz1rt7sbq40fade6e6rx, "<br>";
$m4is_garkwrr8cykdaftyj = get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_elementor_data', true);
echo "\n\n\n", $m4is_garkwrr8cykdaftyj, "\n\n\n";
die();
}
die();
}
}