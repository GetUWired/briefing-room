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


class_exists('m4is_6y9612z4hjd6fzpap4r5n853641m1jc') || die();


final class m4is_n5x7c5jg956rcfh1kr02z8cw {

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_5eragr7sh2yyj356m();
}

private function m4is_5eragr7sh2yyj356m() {
add_action( 'admin_init',
 [$this, 'm4is_1d8w88aw552xz'] );
}
function m4is_1d8w88aw552xz() {
$m4is_yhdk2h7srcr7n5mzjnw7m6b = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_6c1kj95ycpcym5c();

if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b, $this->m4is_bdwdyym4hzp2t2qvwakgs9qs1p() ) ) {
add_meta_box( 'is4wp-learnpress-actions',
 'LearnPress Memberium Integration', [$this, 'm4is_5f2jkyk129v062wx5wtkh0hxy25a6x'], $m4is_yhdk2h7srcr7n5mzjnw7m6b, 'side' );
}
add_action( 'save_post',
 [$this, 'm4is_x2xzt116t'], 10, 3 );
}
function m4is_x2xzt116t( int $m4is_tz1rt7sbq40fade6e6rx, $m4is_z4ts5pa39jf1yhjb4, $m4is_nt48femkg6za9v5mn1sr23m62k ) {

if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
return;

}

$m4is_19x1c17et728k945 = $this->m4is_mja3043p();
$m4is_j8j55t8dz79m7 = "memberium_learnpress_actions_nonce_{$m4is_tz1rt7sbq40fade6e6rx}";


if ( empty( $_POST[ $m4is_j8j55t8dz79m7 ] ) || ! wp_verify_nonce( $_POST[ $m4is_j8j55t8dz79m7], constant( 'MEMBERIUM_SKU' ) ) ) {
return;

}
if ( ! current_user_can( 'edit_posts', $m4is_tz1rt7sbq40fade6e6rx ) ) {
return;
}
foreach( $m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
if ( isset( $_POST[$m4is_j8j55t8dz79m7] ) ) {
if ( empty( $_POST[$m4is_j8j55t8dz79m7] ) ) {
delete_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_j8j55t8dz79m7 );
}
else {
update_post_meta( $m4is_tz1rt7sbq40fade6e6rx, $m4is_j8j55t8dz79m7, $_POST[$m4is_j8j55t8dz79m7] );
}
}
}
}
function m4is_5f2jkyk129v062wx5wtkh0hxy25a6x( $m4is_z4ts5pa39jf1yhjb4,
 $m4is_64134frtew8 ) {
if ( ! is_a( $m4is_z4ts5pa39jf1yhjb4, 'WP_Post' ) ) {
return;
}

$m4is_pk98f5nk = [];
$m4is_t7ss27sn8dc4ezemec9emt = [];

$m4is_tz1rt7sbq40fade6e6rx = $m4is_z4ts5pa39jf1yhjb4->ID;
$m4is_yhdk2h7srcr7n5mzjnw7m6b = $m4is_z4ts5pa39jf1yhjb4->post_type;
$m4is_7tfmxp78y3a3ydwn = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx );

$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'contact', true );
$m4is_68tvgyg1hyvtys53r4dzn3nnj4asamr = $this->m4is_bdwdyym4hzp2t2qvwakgs9qs1p();

$m4is_etpap86m3a4rvpr7yg4ncvcx = $this->m4is_mja3043p();
foreach( $m4is_etpap86m3a4rvpr7yg4ncvcx as $m4is_8af8mpexqy2re72jx1m8cymhw1yencd ) {
$m4is_pk98f5nk[ $m4is_8af8mpexqy2re72jx1m8cymhw1yencd ] = isset( $m4is_7tfmxp78y3a3ydwn[ $m4is_8af8mpexqy2re72jx1m8cymhw1yencd ][0] ) ? $m4is_7tfmxp78y3a3ydwn[ $m4is_8af8mpexqy2re72jx1m8cymhw1yencd ][0] : '';

}

$m4is_t7ss27sn8dc4ezemec9emt = [
'' => '(None)'
];
foreach( $m4is_7b2yfzk0054 as $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
$m4is_t7ss27sn8dc4ezemec9emt[ $m4is_bbsta3mvjhhvh1x97vfpm9e ] = $m4is_bbsta3mvjhhvh1x97vfpm9e;

}
if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b, $m4is_68tvgyg1hyvtys53r4dzn3nnj4asamr ) ) {
wp_nonce_field( constant( 'MEMBERIUM_SKU' ),
 "memberium_learnpress_actions_nonce_{$m4is_tz1rt7sbq40fade6e6rx}" );
if ( in_array( $m4is_z4ts5pa39jf1yhjb4->post_type, ['lp_course'] ) ) {
$m4is_3et0qxr2hr01 = empty( $m4is_pk98f5nk['_is4wp_learndash_autoenroll'] ) ? '' : $m4is_pk98f5nk['_is4wp_learndash_autoenroll'];

echo '<label for="_is4wp_learndash_autoenroll">' . _e( "AutoEnroll Tags", 'memberium' ) . ':</label> ';
echo '<input value="', $m4is_3et0qxr2hr01,
 '" name="_is4wp_learndash_autoenroll" class="multitaglist" style="width:100%; max-width:100%"><br /><br />';
}
$m4is_5d3pz55yma = empty( $m4is_pk98f5nk['_is4wp_learndash_goals'] ) ? '' : $m4is_pk98f5nk['_is4wp_learndash_goals'];

$m4is_7kpxvc083drr28q8nryq08ehfjfd5ba = empty( $m4is_pk98f5nk['_is4wp_learndash_tags'] ) ? '' : $m4is_pk98f5nk['_is4wp_learndash_tags'];

$m4is_7fjfbpk5r2ymkts7pt439kkhj = $this->m4is_8cs6hfyvqcvr109sp( (int) $m4is_pk98f5nk['_is4wp_learndash_actions'] );
echo '<p>On completion of this section, execute the following actions:</p>';

echo '<label for="_is4wp_learndash_goals">' . _e( "Achieve these Goals", 'memberium' ) . ':</label> ';
echo '<input value="', $m4is_5d3pz55yma,
 '" name="_is4wp_learndash_goals" style="width:100%; max-width:100%"><br /><br />';
echo '<label for="_is4wp_learndash_tags">' . _e( "Apply these Tags",
 'memberium' ) . ':</label> ';
echo '<input value="', $m4is_7kpxvc083drr28q8nryq08ehfjfd5ba, '" name="_is4wp_learndash_tags" class="multitaglist" style="width:100%; max-width:100%"><br /><br />';

if ( ! empty( $m4is_7fjfbpk5r2ymkts7pt439kkhj ) ) {
echo '<label for="_is4wp_learndash_actions">' . _e( "Run this Actionset", 'memberium' ) . ':</label> ';

echo '<select class="actionset-selector" name="_is4wp_learndash_actions" style="width:100%; max-width:100%">';
echo $m4is_7fjfbpk5r2ymkts7pt439kkhj;

echo '</select>';
}
echo '<br /><br />';
if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b, ['lp_quiz'] ) ) {
$m4is_g61yzqs7ecta0xztr70d7v = [
'class' =>
 'actionset-selected',
'style' => 'width:250px;',
];
$m4is_a6cd9cpshz2nk7wg85npx = empty( $m4is_pk98f5nk['_is4wp_learndash_fail_goals'] ) ? '' : $m4is_pk98f5nk['_is4wp_learndash_fail_goals'];

$m4is_enjd8008gc6w613gaa00vscf = empty( $m4is_pk98f5nk['_is4wp_learndash_fail_tags'] ) ? '' : $m4is_pk98f5nk['_is4wp_learndash_fail_tags'];

$m4is_2w1ahqrp7e5xh4ej = $this->m4is_8cs6hfyvqcvr109sp( (int) $m4is_pk98f5nk['_is4wp_learndash_fail_actions'] );
$m4is_scy3ty68jb2bmq8dj = empty( $m4is_pk98f5nk['_is4wp_lms_start_date'] ) ? '' : $m4is_pk98f5nk['_is4wp_lms_start_date'];

$m4is_brnq1f4h0g38tnjp72b0mdwfby = empty( $m4is_pk98f5nk['_is4wp_lms_complete_percent'] ) ? '' : $m4is_pk98f5nk['_is4wp_lms_complete_percent'];

echo '<p>If the student <strong style="color:red;">fails</strong> this test, execute the following actions:</p>';
echo '<label for="_is4wp_learndash_fail_goals">' . _e("Achieve these Goals",
 'memberium') . ':</label> ';
echo '<input value="', $m4is_a6cd9cpshz2nk7wg85npx, '" name="_is4wp_learndash_fail_goals" style="width:100%; max-width:100%"><br /><br />';

echo '<label for="_is4wp_learndash_fail_tags">' . _e("Apply these Tags", 'memberium') . ':</label> ';
echo '<input value="', $m4is_enjd8008gc6w613gaa00vscf,
 '" name="_is4wp_learndash_fail_tags" class="multitaglist" style="width:100%; max-width:100%"><br /><br />';
echo '<label for="_is4wp_learndash_fail_actions">' . _e("Run this Actionset",
 'memberium') . ':</label> ';
echo '<select class="actionset-selector" name="is4wp_learndash_fail_actions" style="width:100%; max-width:100%">';

echo $m4is_2w1ahqrp7e5xh4ej;
echo '</select>';
echo '<label for="_is4wp_lms_start_date">' . _e("Start Date Field", 'memberium') . ':</label><br />';

m4is_dv250ra9xbtaf::m4is_jjvmzpmqm0yn4t0790xc22wzd3g('_is4wp_lms_start_date', $m4is_t7ss27sn8dc4ezemec9emt, $m4is_scy3ty68jb2bmq8dj,
 $m4is_g61yzqs7ecta0xztr70d7v);
echo '<br>';
echo '<label for="_is4wp_lms_complete_percent">' . _e("Percent Complete", 'memberium') . ':</label><br />';

m4is_dv250ra9xbtaf::m4is_jjvmzpmqm0yn4t0790xc22wzd3g('_is4wp_lms_complete_percent', $m4is_t7ss27sn8dc4ezemec9emt, $m4is_brnq1f4h0g38tnjp72b0mdwfby,
 $m4is_g61yzqs7ecta0xztr70d7v);
echo '<br>';
}
}
}
private function m4is_8cs6hfyvqcvr109sp( $m4is_g25bk222jddqz ) {
$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = m4is_w3pp5rsxdc03bns3::m4is_gtce9f2cwfsscrw8tk81y5m();

$m4is_ra7dnjjzebn9h3t6k7a2p36 = '';
if (! empty( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p ) ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36 = '<option value="0">(No Actions)</option>';

foreach ( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p as $m4is_21cxfvnv9x394r98y6nareq1g1 => $m4is_vkcy59ff1frs03y02qy9qa1gr6939kz ) {
$m4is_fe42r2djxgf1h7pt = $m4is_g25bk222jddqz == $m4is_21cxfvnv9x394r98y6nareq1g1 ? ' selected="selected" ' : '';

$m4is_ra7dnjjzebn9h3t6k7a2p36 .= "<option value='{$m4is_21cxfvnv9x394r98y6nareq1g1}' {$m4is_fe42r2djxgf1h7pt}>{$m4is_vkcy59ff1frs03y02qy9qa1gr6939kz}</option>";

}
}
return $m4is_ra7dnjjzebn9h3t6k7a2p36;
}
private function m4is_mja3043p() {
return [
'_is4wp_learndash_actions',
'_is4wp_learndash_autoenroll',

'_is4wp_learndash_fail_actions',
'_is4wp_learndash_fail_goals',
'_is4wp_learndash_fail_tags',
'_is4wp_learndash_goals',
'_is4wp_learndash_tags',

'_is4wp_lms_complete_percent',
'_is4wp_lms_start_date',
];
}
private function m4is_bdwdyym4hzp2t2qvwakgs9qs1p() {
return [
'lp_course',

'lp_lesson',
'lp_quiz'
];
}
}
