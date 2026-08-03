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


class_exists( 'm4is_5f4j9e1q39p6vht95a8xheen' ) || die();

final class m4is_4qa3cq01r {
private $m4is_132xe588j;
private $m4is_pxqpc8vpph0tn5mv1ty4y4tvd;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_5eragr7sh2yyj356m();

}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_pxqpc8vpph0tn5mv1ty4y4tvd = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}

private function m4is_5eragr7sh2yyj356m() {
add_action( 'admin_init',
 [$this, 'm4is_dn3enfqnmypw44'] );
add_action( 'manage_posts_custom_column', [$this, 'm4is_d0nyvvhxhpt4htnxkqtd'], 10, 2 );
add_filter( 'manage_posts_columns',
 [$this, 'm4is_34yhk5at0eercbsr28gyzbpb1pnq'] );
add_filter( 'memberium/modules/active/names', [$this, 'm4is_y89x3aj8tzzpeak2z80p'],
 10, 1 );
add_filter( 'memberium/wpadmin/allow', [$this, 'm4is_h771fjf6dc1an5'] );

}




public function m4is_dn3enfqnmypw44() {
$m4is_yhdk2h7srcr7n5mzjnw7m6b = $this->m4is_pxqpc8vpph0tn5mv1ty4y4tvd->m4is_6c1kj95ycpcym5c();

$m4is_bq1xjwtrjeax4kvw2f5z = $this->m4is_rn4jw0s88rrjf8wj5bmaajgdzew76w();
if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b, $m4is_bq1xjwtrjeax4kvw2f5z ) || substr( $m4is_yhdk2h7srcr7n5mzjnw7m6b,
 0, 5 ) == 'sfwd-' ) {
add_meta_box( 'is4wp-learndash-actions', 'LearnDash Memberium Integration', [$this, 'm4is_wqy7a99z9a'], $m4is_yhdk2h7srcr7n5mzjnw7m6b,
 'side' );
add_action( 'save_post', [$this, 'm4is_8mr88mwhyp9r7hgg7erv0a7f'] );
}
}




public function m4is_wqy7a99z9a() {
global $post;

$m4is_pk98f5nk = [];
$m4is_7tfmxp78y3a3ydwn = get_post_meta( $post->ID );
$m4is_t7ss27sn8dc4ezemec9emt = [

'_is4wp_learndash_actions',

'_is4wp_learndash_assignment_approved_actions',
'_is4wp_learndash_assignment_approved_tags',
'_is4wp_learndash_assignment_upload_actions',

'_is4wp_learndash_assignment_upload_tags',
'_is4wp_learndash_autoenroll',
'_is4wp_learndash_autojoin',
'_is4wp_learndash_badges',
'_is4wp_learndash_fail_actions',

'_is4wp_learndash_fail_goals',
'_is4wp_learndash_fail_tags',
'_is4wp_learndash_goals',
'_is4wp_learndash_orientation',
'_is4wp_learndash_pdfformat',

'_is4wp_learndash_redirect',
'_is4wp_learndash_shortcodes',
'_is4wp_learndash_tags',
'_is4wp_learndash_drip_feed_override',
];
foreach( $m4is_t7ss27sn8dc4ezemec9emt as $m4is_j8j55t8dz79m7 ) {
if ( isset( $m4is_7tfmxp78y3a3ydwn[$m4is_j8j55t8dz79m7][0] ) ) {
$m4is_pk98f5nk[$m4is_j8j55t8dz79m7] = $m4is_7tfmxp78y3a3ydwn[$m4is_j8j55t8dz79m7][0];

} else {
$m4is_pk98f5nk[$m4is_j8j55t8dz79m7] = '';
}
}
unset( $metas, $m4is_t7ss27sn8dc4ezemec9emt, $m4is_j8j55t8dz79m7 );
wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(),
 "memberium_membershipaccess_nonce_{$post->ID}");
if ( $post->post_type == 'sfwd-certificates' ) {
echo '<p>Certificate PDF Format</p>';

echo '<label for="_is4wp_learndash_pdfformat">' . _e( "Page Size", 'memberium' ) . ':</label> ';
echo '<select name="_is4wp_learndash_pdfformat" id="_is4wp_learndash_pdfformat">';

$m4is_jnth9yyna6kzxhm9zyc = [
'' => 'Default',
'A4_EXTRA' => 'A4 Extra',
'A4_LONG' => 'A4 Long',
'A4_SUPER' => 'A4 Super',
'A4' =>
 'A4',
'GOVERNMENTLETTER' => 'Government Letter',
'LETTER' => 'US Letter',
'PA4' => 'PA4',
'RA4' => 'RA4',
'SRA4' => 'SRA4',
'SUPER_A4' =>
 'Super A4',
];
foreach( $m4is_jnth9yyna6kzxhm9zyc as $m4is_r23jcfsnde99b0bvcqhwwf2d51m0 => $m4is_hce1y1a4qd65zhnwsj ) {
echo '<option value="',
 $m4is_r23jcfsnde99b0bvcqhwwf2d51m0, '" ', ( $m4is_pk98f5nk['learndash_pdfformat'] == $m4is_r23jcfsnde99b0bvcqhwwf2d51m0 ? ' selected="selected" ' : '' ) ,
 '>', $m4is_hce1y1a4qd65zhnwsj, '</option>';
}
unset( $m4is_r23jcfsnde99b0bvcqhwwf2d51m0, $m4is_hce1y1a4qd65zhnwsj );
echo '</select><br /><br />';

echo '<label for="_is4wp_learndash_orientation">' . _e( "Page Orientation", 'memberium' ) . ':</label> ';
echo '<select name="_is4wp_learndash_orientation" id="_is4wp_learndash_orientation">';

$m4is_jnth9yyna6kzxhm9zyc = [
'' => 'Automatic',
'L' => 'Landscape',
'P' => 'Portrait',
];
foreach( $m4is_jnth9yyna6kzxhm9zyc as $m4is_r23jcfsnde99b0bvcqhwwf2d51m0 =>
 $m4is_hce1y1a4qd65zhnwsj ) {
echo '<option value="', $m4is_r23jcfsnde99b0bvcqhwwf2d51m0, '" ', ( $m4is_pk98f5nk['learndash_orientation'] == $m4is_r23jcfsnde99b0bvcqhwwf2d51m0 ? ' selected="selected" ' : '' ) ,
 '>', $m4is_hce1y1a4qd65zhnwsj, '</option>';
}
echo '</select><br /><br />';
}
$m4is_68tvgyg1hyvtys53r4dzn3nnj4asamr = [
'sfwd-courses',

'sfwd-lessons',
'sfwd-quiz',
'sfwd-topic',
];
if ( in_array( $post->post_type, $m4is_68tvgyg1hyvtys53r4dzn3nnj4asamr ) ) {

if ( in_array( $post->post_type,
 ['sfwd-courses']) ) {
echo '<label for="_is4wp_learndash_autoenroll">', _e( "AutoEnroll Tags", 'memberium' ), ':</label> ';
echo '<input name="_is4wp_learndash_autoenroll" class="multitaglist " style="width:100%; max-width:100%" value="',
 ( $m4is_pk98f5nk['_is4wp_learndash_autoenroll'] > '' ? $m4is_pk98f5nk['_is4wp_learndash_autoenroll'] : '' ), '"><br /><br />';
}

echo '<p>On completion of this section, execute the following actions:</p>';

echo '<label for="_is4wp_learndash_goals">' . _e( "Achieve these Goals", 'memberium' ) . ':</label> ';
echo '<input name="_is4wp_learndash_goals" style="width:100%; max-width:100%" value="',
 ( $m4is_pk98f5nk['_is4wp_learndash_goals'] > '' ? $m4is_pk98f5nk['_is4wp_learndash_goals'] : '' ), '"><br /><br />';
echo '<label for="_is4wp_learndash_tags">' . _e( "Apply these Tags",
 'memberium' ) . ':</label> ';
echo '<input name="_is4wp_learndash_tags" class="multitaglist " style="width:100%; max-width:100%" value="',
 ( $m4is_pk98f5nk['_is4wp_learndash_tags'] > '' ? $m4is_pk98f5nk['_is4wp_learndash_tags'] : '' ), '"><br /><br />';
echo '<label for="_is4wp_learndash_actions">' . _e( "Run this Actionset",
 'memberium' ) . ':</label> ';
echo '<select class="actionset-selector" name="_is4wp_learndash_actions" style="width:100%; max-width:100%">';

echo '<option value="0">(No Actions)</option>';
$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = m4is_w3pp5rsxdc03bns3::m4is_gtce9f2cwfsscrw8tk81y5m();

foreach ( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p as $m4is_21cxfvnv9x394r98y6nareq1g1=>$m4is_vkcy59ff1frs03y02qy9qa1gr6939kz ) {
echo '<option value="',
 $m4is_21cxfvnv9x394r98y6nareq1g1, '" ', ( $m4is_pk98f5nk['_is4wp_learndash_actions'] == $m4is_21cxfvnv9x394r98y6nareq1g1 ? ' selected="selected" ' : '' ) ,
 '>', $m4is_vkcy59ff1frs03y02qy9qa1gr6939kz, '</option>';
}
unset( $m4is_21cxfvnv9x394r98y6nareq1g1, $m4is_vkcy59ff1frs03y02qy9qa1gr6939kz );

echo '</select>';
echo '<br /><br />';
if ( $post->post_type == 'sfwd-quiz' ) {
echo '<p>If the student <strong style="color:red;">fails</strong> this test, execute the following actions:</p>';

echo '<label for="_is4wp_learndash_fail_goals">' . _e( "Achieve these Goals", 'memberium' ) . ':</label> ';
echo '<input name="_is4wp_learndash_fail_goals" style="width:100%; max-width:100%" value="',
 ( $m4is_pk98f5nk['_is4wp_learndash_fail_goals'] > '' ? $m4is_pk98f5nk['_is4wp_learndash_fail_goals'] : '' ), '"><br /><br />';
echo '<label for="_is4wp_learndash_fail_tags">' . _e( "Apply these Tags",
 'memberium' ) . ':</label> ';
echo '<input name="_is4wp_learndash_fail_tags" class="multitaglist" style="width:100%; max-width:100%" value="',
 ( $m4is_pk98f5nk['_is4wp_learndash_fail_tags'] > '' ? $m4is_pk98f5nk['_is4wp_learndash_fail_tags'] : '' ), '"><br /><br />';
echo '<label for="_is4wp_learndash_fail_actions">' . _e( "Run this Actionset",
 'memberium' ) . ':</label> ';
echo '<select class="actionset-selector" name="_is4wp_learndash_fail_actions" style="width:100%; max-width:100%">';

echo '<option value="0">(No Actions)</option>';
foreach ( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p as $m4is_21cxfvnv9x394r98y6nareq1g1=>
$m4is_vkcy59ff1frs03y02qy9qa1gr6939kz ) {
echo '<option value="', $m4is_21cxfvnv9x394r98y6nareq1g1, '" ', ( $m4is_pk98f5nk['_is4wp_learndash_fail_actions'] == $m4is_21cxfvnv9x394r98y6nareq1g1 ? ' selected="selected" ' : '' ) ,
 '>', $m4is_vkcy59ff1frs03y02qy9qa1gr6939kz, '</option>';
}
echo '</select>';
}
unset( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p, $m4is_21cxfvnv9x394r98y6nareq1g1,
 $m4is_vkcy59ff1frs03y02qy9qa1gr6939kz );

if ( in_array( $post->post_type, ['sfwd-courses']) ) {
echo '<label for="_is4wp_learndash_drip_feed_override">',
 _e( "Drip Feed override", 'memberium' ), ':</label> ';
echo '<input name="_is4wp_learndash_drip_feed_override" class="have-not-have-tag-selector" style="width:100%; max-width:100%" value="',
 ( $m4is_pk98f5nk['_is4wp_learndash_drip_feed_override'] > '' ? $m4is_pk98f5nk['_is4wp_learndash_drip_feed_override'] : '' ), '"><br /><br />';

echo '<p>Tag access check will override the Lesson Release Schedule settings for Enrollment Days or Specific Date on all Lessons in this course.</p>';

}

if ( in_array( $post->post_type, ['sfwd-courses']) ) {
echo '<label for="_is4wp_learndash_redirect">' . _e( "Redirect to", 'memberium' ) . ':</label> ';

echo '<input name="_is4wp_learndash_redirect" style="width:100%; max-width:100%" value="', ( $m4is_pk98f5nk['_is4wp_learndash_redirect'] > '' ? $m4is_pk98f5nk['_is4wp_learndash_redirect'] : '' ),
 '"><br /><br />';
}
}
if ( $post->post_type == 'groups' ) {
$m4is_4m0qx28rr6zwdfxnnr91v4ng = empty( $m4is_pk98f5nk['_is4wp_learndash_autojoin'] )? '' : trim( $m4is_pk98f5nk['_is4wp_learndash_autojoin'],
 ', ');
echo '<label for="_is4wp_learndash_autojoin">' . _e( "Group Auto-Join Tags", 'memberium' ) . ':</label> ';
echo '<input name="_is4wp_learndash_autojoin" class="multitaglist" style="width:100%; max-width:100%" value="',
 $m4is_4m0qx28rr6zwdfxnnr91v4ng, '"><br /><br />';
}
add_action( 'admin_footer', [ m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef(),
 'm4is_e2f4xq95m09m10s6ehrhvz'] );
}

public function m4is_8mr88mwhyp9r7hgg7erv0a7f( $m4is_tz1rt7sbq40fade6e6rx ) {

if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
return;

}
if ( ! in_array( get_post_type( $m4is_tz1rt7sbq40fade6e6rx ), $this->m4is_rn4jw0s88rrjf8wj5bmaajgdzew76w() ) ) {
return;
}
$m4is_g8kjnx0f2 = $_POST["memberium_membershipaccess_nonce_{$m4is_tz1rt7sbq40fade6e6rx}"] ?? '';


if ( empty( $m4is_g8kjnx0f2 ) || ! wp_verify_nonce( $m4is_g8kjnx0f2, $this->m4is_132xe588j->m4is_54b9bwwsx7sym() ) ) {
return;
}
if ( ! current_user_can( 'edit_posts',
 $m4is_tz1rt7sbq40fade6e6rx ) ) {
return;
}
$m4is_t7ss27sn8dc4ezemec9emt = [
'_is4wp_learndash_achievement',
'_is4wp_learndash_actions',

'_is4wp_learndash_assignment_approved_actions',
'_is4wp_learndash_assignment_approved_tags',
'_is4wp_learndash_assignment_upload_actions',

'_is4wp_learndash_assignment_upload_tags',
'_is4wp_learndash_autoenroll',
'_is4wp_learndash_autojoin',
'_is4wp_learndash_badges',
'_is4wp_learndash_fail_actions',

'_is4wp_learndash_fail_goals',
'_is4wp_learndash_fail_tags',
'_is4wp_learndash_goals',
'_is4wp_learndash_orientation',
'_is4wp_learndash_pdfformat',

'_is4wp_learndash_redirect',
'_is4wp_learndash_shortcodes',
'_is4wp_learndash_tags',
'_is4wp_learndash_drip_feed_override',
'_is4wp_lms_complete_percent',

'_is4wp_lms_completed',
'_is4wp_lms_grade',
'_is4wp_lms_start_date',
];
$m4is_4fbz2e9k7gaabgs0fe5eyw = m4is_5f4j9e1q39p6vht95a8xheen::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

foreach( $m4is_t7ss27sn8dc4ezemec9emt as $m4is_j8j55t8dz79m7 ) {
$_POST[$m4is_j8j55t8dz79m7] = isset( $_POST[$m4is_j8j55t8dz79m7] ) ? $_POST[$m4is_j8j55t8dz79m7] : '';

if ( empty( $_POST[$m4is_j8j55t8dz79m7] ) ) {
delete_post_meta($m4is_tz1rt7sbq40fade6e6rx, $m4is_j8j55t8dz79m7);
}
else {
add_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_j8j55t8dz79m7, $_POST[$m4is_j8j55t8dz79m7], true ) or update_post_meta( $m4is_tz1rt7sbq40fade6e6rx, $m4is_j8j55t8dz79m7, $_POST[$m4is_j8j55t8dz79m7] );

}
}
$m4is_4fbz2e9k7gaabgs0fe5eyw->m4is_zbcmtydfe7whvawtrnz031xb();
$m4is_4fbz2e9k7gaabgs0fe5eyw->m4is_v27vk3xp1twx();
}



public function m4is_34yhk5at0eercbsr28gyzbpb1pnq( $m4is_pyfe2h7z ) {
$m4is_yhdk2h7srcr7n5mzjnw7m6b = isset( $_GET['post_type'] ) ? $_GET['post_type'] : 'post';

$m4is_9j3rdtjnctcn8tr0f = [];
$m4is_wnka2011y397v02my59rg941e = [];
if ( $m4is_yhdk2h7srcr7n5mzjnw7m6b == 'groups' ) {
$m4is_9j3rdtjnctcn8tr0f['autojoin'] = 'AutoJoin Tag';

}
elseif ( $m4is_yhdk2h7srcr7n5mzjnw7m6b == 'sfwd-courses' ) {
$m4is_9j3rdtjnctcn8tr0f['autoenroll'] = 'AutoEnroll Tag';
}
elseif ( $m4is_yhdk2h7srcr7n5mzjnw7m6b == 'sfwd-lessons' ) {
}
elseif ( $m4is_yhdk2h7srcr7n5mzjnw7m6b == 'sfwd-quiz' ) {
}
elseif ( $m4is_yhdk2h7srcr7n5mzjnw7m6b == 'sfwd-topic' ) {
}
$m4is_pyfe2h7z = array_merge( $m4is_pyfe2h7z,
 $m4is_9j3rdtjnctcn8tr0f );
foreach ( $m4is_wnka2011y397v02my59rg941e as $m4is_j8j55t8dz79m7 ) {
unset( $m4is_pyfe2h7z[$m4is_j8j55t8dz79m7] );

}
return $m4is_pyfe2h7z;
}
public function m4is_d0nyvvhxhpt4htnxkqtd( $m4is_mx5stgy1nyzpj6eab39kheftpk, $m4is_tz1rt7sbq40fade6e6rx ) {
if ( $m4is_mx5stgy1nyzpj6eab39kheftpk == 'autojoin' ) {
$m4is_d60kn1d3yvprp62rs332 = array_filter( explode( ',',
 trim( get_post_meta( $m4is_tz1rt7sbq40fade6e6rx, '_is4wp_learndash_autojoin', true ), ', ' ) ) );
echo implode( ', ', $m4is_d60kn1d3yvprp62rs332 );

}
elseif ( $m4is_mx5stgy1nyzpj6eab39kheftpk == 'autoenroll' ) {
$m4is_d60kn1d3yvprp62rs332 = array_filter( explode( ',', trim( get_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_learndash_autoenroll', true ), ', ' ) ) );
echo implode( ', ', $m4is_d60kn1d3yvprp62rs332 );
}
}

public function m4is_y89x3aj8tzzpeak2z80p($m4is_jq2e3019hp45103bhm95sxmccqd8 = []) {
return array_merge($m4is_jq2e3019hp45103bhm95sxmccqd8,
 ['LearnDash for Memberium']);
}

private function m4is_rn4jw0s88rrjf8wj5bmaajgdzew76w() : array {
return [
'groups',
'sfwd-courses',

'sfwd-lessons',
'sfwd-topic',
'sfwd-quiz',
'sfwd-certificates',
];
}

public function m4is_a1h0wv8t0gds63jcjybtrcy3() {
}

public function m4is_957m46aevgkvvtxg3fvmw7hc9rbahj8( $m4is_z4ts5pa39jf1yhjb4 ) {
if ( empty( $m4is_z4ts5pa39jf1yhjb4->post_type ) || $m4is_z4ts5pa39jf1yhjb4->post_type !== 'sfwd-courses' ) {
return;

}
if ('open' !== learndash_get_course_meta_setting($m4is_z4ts5pa39jf1yhjb4->ID, 'course_price_type') ) {
return;
};
$m4is_65aka8xf2h8j = '<a target="_blank" href="https://memberium.com/?p=7948">Click here</a> for more information.';

echo '<div style="background-color:white;border-radius:10px;border-style:solid;border-color:darkred;padding:10px;">';
echo '<p><strong>Warning:</strong></p>';

echo '<p>Because your course is marked as "open", all site members will be enrolled in it regardless of tags or memberships.</p>';

echo '<p>We recommend setting your course as "closed".</p>';
echo "<p>{$m4is_65aka8xf2h8j}</p>";
echo '</div>';
}




public function m4is_h771fjf6dc1an5( $m4is_618e73f6a10c32yq2w61r2ck86zktyp0 ) {
if (! $m4is_618e73f6a10c32yq2w61r2ck86zktyp0) {
$m4is_fyjtxs2t = [
'learndash_propanel_template',

'ld-report-download',
];
foreach($m4is_fyjtxs2t as $m4is_5d7c091v43bdg52dcdrfkszh88s6yk2) {
$m4is_618e73f6a10c32yq2w61r2ck86zktyp0 = array_key_exists($m4is_5d7c091v43bdg52dcdrfkszh88s6yk2,
 $_GET);
if ($m4is_618e73f6a10c32yq2w61r2ck86zktyp0) {
break;
}
}
}
return $m4is_618e73f6a10c32yq2w61r2ck86zktyp0;
}
}