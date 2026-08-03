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

final class m4is_8yphrwtx8jtggt7z1965hkcp1j1kj {
private $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'memberium';


$this->m4is_5eragr7sh2yyj356m();
}

private function m4is_5eragr7sh2yyj356m() {
add_action( 'admin_init', [$this, 'm4is_1d8w88aw552xz'] );

}

private function m4is_mja3043p() {
return [
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

private function m4is_bdwdyym4hzp2t2qvwakgs9qs1p() {
return [
'course',

'lesson',
];
}

function m4is_1d8w88aw552xz() {

$m4is_yhdk2h7srcr7n5mzjnw7m6b = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_6c1kj95ycpcym5c();


if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b, $this->m4is_bdwdyym4hzp2t2qvwakgs9qs1p() ) ) {
add_meta_box( 'is4wp-sensei-actions',
 'Sensei Memberium Integration', [$this, 'm4is_1sqfee3mqnvwzc9nz4xe0ejhv35n'], $m4is_yhdk2h7srcr7n5mzjnw7m6b, 'side' );
}

add_action( 'save_post',
 [$this, 'm4is_edz5s7yz30hymz5'], 10, 3 );
}

function m4is_1sqfee3mqnvwzc9nz4xe0ejhv35n() {
global $post;
$m4is_68tvgyg1hyvtys53r4dzn3nnj4asamr = $this->m4is_bdwdyym4hzp2t2qvwakgs9qs1p();

if ( in_array( $post->post_type, $m4is_68tvgyg1hyvtys53r4dzn3nnj4asamr ) ) {
$m4is_3rz9a3gxbvtyq2qwgzh5 = "memberium_sensei_actions_nonce_{$post->ID}";

$m4is_xq8a8kwspkheej40jh0sthk9zn2s = constant( 'MEMBERIUM_SKU' );
wp_nonce_field( $m4is_xq8a8kwspkheej40jh0sthk9zn2s, $m4is_3rz9a3gxbvtyq2qwgzh5 );

$m4is_7tfmxp78y3a3ydwn = get_post_meta( $post->ID );
$m4is_pk98f5nk = [];
$m4is_t7ss27sn8dc4ezemec9emt = $this->m4is_mja3043p();
$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = m4is_w3pp5rsxdc03bns3::m4is_gtce9f2cwfsscrw8tk81y5m();

foreach( $m4is_t7ss27sn8dc4ezemec9emt as $m4is_j8j55t8dz79m7 ) {
$m4is_pk98f5nk[$m4is_j8j55t8dz79m7] = isset( $m4is_7tfmxp78y3a3ydwn[$m4is_j8j55t8dz79m7][0]) ? $m4is_7tfmxp78y3a3ydwn[$m4is_j8j55t8dz79m7][0] : '';

}
if ( $post->post_type == 'course' ) {
$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = __( "AutoEnroll Tags", 'memberium' );
$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_pk98f5nk['_is4wp_learndash_autoenroll'] > '' ? $m4is_pk98f5nk['_is4wp_learndash_autoenroll'] : '';

echo <<<HTMLBLOCK

					<label for="_is4wp_learndash_autoenroll">{$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0}:</label>
					<input name="_is4wp_learndash_autoenroll" class="multitaglist" style="width:100%; max-width:100%" value="{$m4is_rqxytszfq5v6syth1csqqxvy5}"><br /><br />
				HTMLBLOCK;

}
$m4is_5jdhdj2k4ggs = $m4is_pk98f5nk['_is4wp_learndash_tags'] > '' ? $m4is_pk98f5nk['_is4wp_learndash_tags'] : '';
$m4is_b8ccdyvfg29cxdny5xgq4hyn64t = $m4is_pk98f5nk['_is4wp_learndash_goals'] > '' ? $m4is_pk98f5nk['_is4wp_learndash_goals'] : '';

$m4is_k4nt5hfj2g9mr30k4jhkwqr252 = __( "Apply these Tags", $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_x4qmxqr04pcam05cyzgt4m9pvhdmd786 = __( "Run this Actionsets",
 $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_gp6v711j9427fpr3z87xz8e3g2 = __( "Achieve these Goals", $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_r45ktvjak78dfep = '';
foreach ($m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p as $m4is_21cxfvnv9x394r98y6nareq1g1=>$m4is_vkcy59ff1frs03y02qy9qa1gr6939kz) {
$selected = $m4is_pk98f5nk['_is4wp_learndash_actions'] == $m4is_21cxfvnv9x394r98y6nareq1g1 ? ' selected="selected" ' : '';

$m4is_r45ktvjak78dfep .= "<option value='{$m4is_21cxfvnv9x394r98y6nareq1g1}'{$selected}>{$m4is_vkcy59ff1frs03y02qy9qa1gr6939kz}</option>";

}
echo <<<HTMLBLOCK

				<p>On completion of this section, execute the following actions:</p>

				<label for="_is4wp_learndash_tags">{$m4is_k4nt5hfj2g9mr30k4jhkwqr252}:</label>
				<input name="_is4wp_learndash_tags" class="multitaglist" style="width:100%; max-width:100%" value="{$m4is_5jdhdj2k4ggs}"><br /><br />

				<label for="_is4wp_learndash_actions">{$m4is_x4qmxqr04pcam05cyzgt4m9pvhdmd786}:</label>
				<select class="actionset-selector" name="_is4wp_learndash_actions" style="width:100%; max-width:100%">
				<option value="0">(No Actions)</option>
				{$m4is_r45ktvjak78dfep}
				</select>

				<label for="_is4wp_learndash_goals">{$m4is_gp6v711j9427fpr3z87xz8e3g2}:</label>
				<input name="_is4wp_learndash_goals" style="width:100%; max-width:100%" value="{$m4is_b8ccdyvfg29cxdny5xgq4hyn64t}"><br /><br />

				<hr />
			HTMLBLOCK;

$m4is_t7ss27sn8dc4ezemec9emt = ['' => '(None)'];
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'contact',
 true );
foreach( $m4is_7b2yfzk0054 as $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
$m4is_t7ss27sn8dc4ezemec9emt[$m4is_bbsta3mvjhhvh1x97vfpm9e] = $m4is_bbsta3mvjhhvh1x97vfpm9e;

}
$m4is_g61yzqs7ecta0xztr70d7v = [
'class' => 'actionset-selected',
'style' => 'width:250px;',
'echo' => false,
];
if ($post->post_type == 'course') {
$m4is_d5pm9xe0 = isset( $m4is_pk98f5nk['_is4wp_lms_start_date'] ) ? $m4is_pk98f5nk['_is4wp_lms_start_date'] : '';

$m4is_2p49x2nm2y = isset( $m4is_pk98f5nk['_is4wp_lms_complete_percent'] ) ? $m4is_pk98f5nk['_is4wp_lms_complete_percent'] : '';
$start_date_label = __( 'Start Date Field',
 $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$percent_complete_label = __( "Percent Complete", $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_za6w6k1btqewrnb03ty6x4dv = m4is_dv250ra9xbtaf::m4is_jjvmzpmqm0yn4t0790xc22wzd3g( '_is4wp_lms_start_date', $m4is_t7ss27sn8dc4ezemec9emt,
 $m4is_d5pm9xe0, $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_6ykyyk4msk2304fr8sq5f = m4is_dv250ra9xbtaf::m4is_jjvmzpmqm0yn4t0790xc22wzd3g( '_is4wp_lms_complete_percent',
 $m4is_t7ss27sn8dc4ezemec9emt, $m4is_2p49x2nm2y, $m4is_g61yzqs7ecta0xztr70d7v );
echo <<<HTMLBLOCK

					<label for="_is4wp_lms_start_date">{$start_date_label}:</label><br />
					{$m4is_za6w6k1btqewrnb03ty6x4dv}<br />
					<label for="_is4wp_lms_complete_percent">{$percent_complete_label}:</label><br />
					{$m4is_6ykyyk4msk2304fr8sq5f}<br />
				HTMLBLOCK;

}
if ($post->post_type == 'lesson') {
$m4is_s7kjz0w2 = isset( $m4is_pk98f5nk['_is4wp_lms_grade'] ) ? $m4is_pk98f5nk['_is4wp_lms_grade'] : '';

$m4is_wm83eszmq88nffsppjercq2h4 = isset($m4is_pk98f5nk['_is4wp_lms_completed']) ? $m4is_pk98f5nk['_is4wp_lms_completed'] : '';
$m4is_q497yx3g2jt = __( " Grade",
 $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_3mhr3bpd9am5xk66 = __( "Quiz Passed", $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_z0e85cf9mmb4 = m4is_dv250ra9xbtaf::m4is_jjvmzpmqm0yn4t0790xc22wzd3g( '_is4wp_lms_grade', $m4is_t7ss27sn8dc4ezemec9emt, $m4is_s7kjz0w2,
 $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_hmb2enk58we0d = m4is_dv250ra9xbtaf::m4is_jjvmzpmqm0yn4t0790xc22wzd3g( '_is4wp_lms_completed',
 $m4is_t7ss27sn8dc4ezemec9emt, $m4is_wm83eszmq88nffsppjercq2h4, $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_qc36n7jdf = <<<HTMLBLOCK

				<label for="_is4wp_lms_grade">{$m4is_q497yx3g2jt}:</label><br />
				{$m4is_z0e85cf9mmb4}
				<br>
				<label for="_is4wp_lms_completed">{$m4is_3mhr3bpd9am5xk66}:</label><br />
				{$m4is_hmb2enk58we0d}
				<br>
				HTMLBLOCK;

echo $m4is_qc36n7jdf; }
echo '<hr />';
}
}

function m4is_edz5s7yz30hymz5( $m4is_tz1rt7sbq40fade6e6rx, $m4is_z4ts5pa39jf1yhjb4, $m4is_nt48femkg6za9v5mn1sr23m62k ) {
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
return;

}
$m4is_3rz9a3gxbvtyq2qwgzh5 = "memberium_sensei_actions_nonce_{$m4is_tz1rt7sbq40fade6e6rx}";
$m4is_xq8a8kwspkheej40jh0sthk9zn2s = constant( 'MEMBERIUM_SKU' );

if ( empty( $_POST[$m4is_3rz9a3gxbvtyq2qwgzh5]) || ! wp_verify_nonce( $_POST[$m4is_3rz9a3gxbvtyq2qwgzh5], $m4is_xq8a8kwspkheej40jh0sthk9zn2s ) ) {
return;

}

if ( ! current_user_can( 'edit_posts', $m4is_tz1rt7sbq40fade6e6rx ) ) {
return;
}

$m4is_19x1c17et728k945 = $this->m4is_mja3043p();


foreach( $m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {

if ( isset( $_POST[$m4is_j8j55t8dz79m7] ) ) {

if ( empty( $_POST[$m4is_j8j55t8dz79m7] ) ) {
delete_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 $m4is_j8j55t8dz79m7);
}

else {
update_post_meta( $m4is_tz1rt7sbq40fade6e6rx, $m4is_j8j55t8dz79m7, $_POST[$m4is_j8j55t8dz79m7] );
}
}
}
}

}