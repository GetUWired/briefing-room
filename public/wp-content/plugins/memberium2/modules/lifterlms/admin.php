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

final class m4is_c4447857jk3ha3 {
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

private function m4is_bdwdyym4hzp2t2qvwakgs9qs1p() {
return [
'course',
'lesson',
'llms_quiz',

];
}

private function m4is_mja3043p() {
return [
'_is4wp_learndash_achievement',
'_is4wp_learndash_actions',
'_is4wp_learndash_autoenroll',

'_is4wp_learndash_autojoin',
'_is4wp_learndash_goals',
'_is4wp_learndash_redirect',
'_is4wp_learndash_shortcodes',
'_is4wp_learndash_tags',

'_is4wp_lms_complete_percent',
'_is4wp_lms_completed',
'_is4wp_lms_grade',
'_is4wp_lms_start_date',
];
}

private function m4is_8cs6hfyvqcvr109sp( int $m4is_g25bk222jddqz ) : string {
$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = m4is_w3pp5rsxdc03bns3::m4is_gtce9f2cwfsscrw8tk81y5m();

$m4is_ra7dnjjzebn9h3t6k7a2p36 = '';
if ( ! empty( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p) ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36 = '<option value="0">(No Actions)</option>';
;
foreach ( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p as $m4is_21cxfvnv9x394r98y6nareq1g1 => $m4is_vkcy59ff1frs03y02qy9qa1gr6939kz ) {
$m4is_fe42r2djxgf1h7pt = $m4is_g25bk222jddqz == $m4is_21cxfvnv9x394r98y6nareq1g1 ? ' selected="selected" ' : '';

$m4is_ra7dnjjzebn9h3t6k7a2p36 .= '<option value="' . $m4is_21cxfvnv9x394r98y6nareq1g1 . '" ' . $m4is_fe42r2djxgf1h7pt . '>' . $m4is_vkcy59ff1frs03y02qy9qa1gr6939kz . '</option>';

}
}
return $m4is_ra7dnjjzebn9h3t6k7a2p36;
}

public function m4is_1d8w88aw552xz() {
$m4is_yhdk2h7srcr7n5mzjnw7m6b = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_6c1kj95ycpcym5c();

$m4is_9rvy64ewv3 = $this->m4is_bdwdyym4hzp2t2qvwakgs9qs1p();
if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b, $m4is_9rvy64ewv3 ) ) {
add_meta_box( 'is4wp-liferlms-actions',
 'LifterLMS Memberium Integration', [$this, 'm4is_4vq0cd0v'], $m4is_yhdk2h7srcr7n5mzjnw7m6b, 'side' );
}
add_action( 'save_post', [$this,
 'm4is_2cpy4tpw53dzaqbv'], 10, 3 );
}

public function m4is_4vq0cd0v( $m4is_z4ts5pa39jf1yhjb4, $m4is_64134frtew8 ) : void {
if ( ! is_a( $m4is_z4ts5pa39jf1yhjb4,
 'WP_Post' ) ) {
return;
}
$m4is_68tvgyg1hyvtys53r4dzn3nnj4asamr = $this->m4is_bdwdyym4hzp2t2qvwakgs9qs1p();
if ( ! in_array( $m4is_z4ts5pa39jf1yhjb4->post_type,
 $m4is_68tvgyg1hyvtys53r4dzn3nnj4asamr ) ) {
return;
}
$m4is_tz1rt7sbq40fade6e6rx = $m4is_z4ts5pa39jf1yhjb4->ID;
$m4is_yhdk2h7srcr7n5mzjnw7m6b = $m4is_z4ts5pa39jf1yhjb4->post_type;

$m4is_7tfmxp78y3a3ydwn = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx );
$m4is_pk98f5nk = [];
$m4is_t7ss27sn8dc4ezemec9emt = $this->m4is_mja3043p();

foreach($m4is_t7ss27sn8dc4ezemec9emt as $m4is_j8j55t8dz79m7) {
$m4is_pk98f5nk[$m4is_j8j55t8dz79m7] = isset( $m4is_7tfmxp78y3a3ydwn[$m4is_j8j55t8dz79m7][0] ) ? $m4is_7tfmxp78y3a3ydwn[$m4is_j8j55t8dz79m7][0] : '';

}
wp_nonce_field( __FILE__, "memberium_lifterlms_actions_nonce_{$m4is_tz1rt7sbq40fade6e6rx}");
$m4is_5d3pz55yma = empty( $m4is_pk98f5nk['_is4wp_learndash_goals'] ) ? '' : $m4is_pk98f5nk['_is4wp_learndash_goals'];

$m4is_7kpxvc083drr28q8nryq08ehfjfd5ba = empty( $m4is_pk98f5nk['_is4wp_learndash_tags'] ) ? '' : $m4is_pk98f5nk['_is4wp_learndash_tags'];

$m4is_3et0qxr2hr01 = empty( $m4is_pk98f5nk['_is4wp_learndash_autoenroll'] ) ? '' : $m4is_pk98f5nk['_is4wp_learndash_autoenroll'];
$m4is_7fjfbpk5r2ymkts7pt439kkhj = $this->m4is_8cs6hfyvqcvr109sp( (int) $m4is_pk98f5nk['_is4wp_learndash_actions'] );

if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b, [ 'course' ] ) ) {
echo '<label for="_is4wp_learndash_autoenroll">' . _e("AutoEnroll Tags",
 'memberium') . ':</label> ';
echo '<input value= "', $m4is_3et0qxr2hr01, '" name="_is4wp_learndash_autoenroll" class="multitaglist" style="width:100%; max-width:100%"><br /><br />';

}
echo '<p>On completion of this section, execute the following actions:</p>';
echo '<label for="_is4wp_learndash_goals">' . _e("Achieve this Goal",
 'memberium') . ':</label> ';
echo '<input value="', $m4is_5d3pz55yma, '" name="_is4wp_learndash_goals" style="width:100%; max-width:100%"><br /><br />';

echo '<label for="_is4wp_learndash_tags">' . _e("Apply these Tags", 'memberium') . ':</label> ';
echo '<input value="', $m4is_7kpxvc083drr28q8nryq08ehfjfd5ba,
 '" name="_is4wp_learndash_tags" class="multitaglist" style="width:100%; max-width:100%"><br /><br />';
if ( ! empty( $m4is_7fjfbpk5r2ymkts7pt439kkhj ) ) {
echo '<label for="_is4wp_learndash_actions">' . _e("Run this Actionset",
 'memberium') . ':</label> ';
echo '<select class="actionset-selector" name="_is4wp_learndash_actions" style="width:100%; max-width:100%">';

echo $m4is_7fjfbpk5r2ymkts7pt439kkhj;
echo '</select>';
}
}
public function m4is_2cpy4tpw53dzaqbv( int $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_z4ts5pa39jf1yhjb4, $m4is_nt48femkg6za9v5mn1sr23m62k ) : void {

if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
return;
}

$m4is_3rz9a3gxbvtyq2qwgzh5 = 'memberium_lifterlms_actions_nonce_' . $m4is_tz1rt7sbq40fade6e6rx;

if (empty($_POST[$m4is_3rz9a3gxbvtyq2qwgzh5]) || ! wp_verify_nonce($_POST[$m4is_3rz9a3gxbvtyq2qwgzh5], __FILE__) ) {
return;
}
if (! current_user_can('edit_posts',
 $m4is_tz1rt7sbq40fade6e6rx) ) {
return;
}
$m4is_19x1c17et728k945 = $this->m4is_mja3043p();
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
}
