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

final class m4is_mgacwcqeza17zrbs5aa32xndqtjpm03 {
private $m4is_1090xawqcx3q9p;

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_1090xawqcx3q9p = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_5eragr7sh2yyj356m();
}

private function m4is_5eragr7sh2yyj356m() : void {
add_action( 'admin_init', [$this, 'm4is_wgqseya17632s23q4f1qb8pbr0jn'] );

add_filter( 'memberium/modules/active/names', [$this, 'm4is_v9eeymdh30mk'], 10, 1 );
}



public function m4is_v9eeymdh30mk( array $m4is_jq2e3019hp45103bhm95sxmccqd8 ) : array {
return array_merge( $m4is_jq2e3019hp45103bhm95sxmccqd8,
 [ 'BadgeOS for Memberium Integration' ] );
}



public function m4is_wgqseya17632s23q4f1qb8pbr0jn() : void {
$m4is_ze8gjbzgjtq5r7q = [
'badgeos_get_achievement_types_slugs',

'badgeos_get_rank_types_slugs',
];
foreach( $m4is_ze8gjbzgjtq5r7q as $m4is_95jcy59jv50devc8s3bd ) {
if ( ! function_exists( $m4is_95jcy59jv50devc8s3bd ) ) {
return;

}
}
$m4is_yhdk2h7srcr7n5mzjnw7m6b = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_6c1kj95ycpcym5c();
$m4is_k57y9s6w = badgeos_get_achievement_types_slugs();

$m4is_hbqkryw12y27sp1x = badgeos_get_rank_types_slugs();
$m4is_0zyktr9j2b3xr = apply_filters( 'memberium/lms/module_post_types', [] );

$m4is_avvmsjt3j7na4gyzwqay2drp61yr1qqd = apply_filters( 'memberium/lms/name', 'LMS' );
if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b,
 $m4is_k57y9s6w ) ) {
add_meta_box( 'memberium-badgeos-achievements', 'BadgeOS for Memberium', [$this, 'm4is_tqzhst9q1s6e'], $m4is_yhdk2h7srcr7n5mzjnw7m6b,
 'side' );
}
if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b, $m4is_hbqkryw12y27sp1x ) ) {
add_meta_box( 'memberium-badgeos-ranks', 'BadgeOS for Memberium',
 [$this, 'm4is_53adpj5s8mmnf6r0xt45'], $m4is_yhdk2h7srcr7n5mzjnw7m6b, 'side' );
}
if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b, $m4is_0zyktr9j2b3xr ) ) {
add_meta_box( 'memberium-lms-achievements',
 "BadgeOS for {$m4is_avvmsjt3j7na4gyzwqay2drp61yr1qqd}", [$this, 'm4is_bwddfs7fhhh1n4z94w7j0w6dzb1pvjb4'], $m4is_yhdk2h7srcr7n5mzjnw7m6b,
 'side' );
}
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
add_action( 'save_post', [$this, 'm4is_sysa7m0vg0brh425g4y84yf'], 10, 3 );

if ( isset( $_POST['post_type'] ) && in_array( $_POST['post_type'], $m4is_k57y9s6w ) ) {
add_action( 'save_post', [$this, 'm4is_5pf4xcbrthpv'],
 10, 3 );
}
if ( isset( $_POST['post_type'] ) && in_array( $_POST['post_type'], $m4is_hbqkryw12y27sp1x ) ) {
add_action( 'save_post',
 [$this, 'm4is_40en60wj9kdcwgh4eztqgbx3t'], 10, 3 );
}
}
}




public function m4is_53adpj5s8mmnf6r0xt45( WP_Post $m4is_z4ts5pa39jf1yhjb4 ) : void {
$m4is_xq8a8kwspkheej40jh0sthk9zn2s = defined( 'MEMBERIUM_SKU' ) ? constant( 'MEMBERIUM_SKU' ) : '';

$m4is_g8kjnx0f2 = wp_nonce_field( $m4is_xq8a8kwspkheej40jh0sthk9zn2s, "memberium/badgeos/tag_map/{$m4is_z4ts5pa39jf1yhjb4->ID}", true,
 false );
$m4is_evspxhex9h3et = get_post_meta( $m4is_z4ts5pa39jf1yhjb4->ID, '_memberium_badgeos_tag_add', true );
$m4is_evspxhex9h3et = empty( $m4is_evspxhex9h3et ) ? 0 : $m4is_evspxhex9h3et;

$m4is_fk65qj3rz3dgtha5hmmj = __( 'Add Tag if member has Badge', 'memberium' );

echo <<<HTMLBLOCK

			{$m4is_g8kjnx0f2}
			<label for  = "_memberium_badgeos_tag_add">{$m4is_fk65qj3rz3dgtha5hmmj}:</label>
			<input name = "_memberium_badgeos_tag_add" class = "taglistdropdown" style = "width:100%; max-width:100%" value = "{$m4is_evspxhex9h3et}"><br /><br />';
		HTMLBLOCK;

do_action( 'memberium/badgeos/rank_metabox' );
}

public function m4is_40en60wj9kdcwgh4eztqgbx3t( int $m4is_tz1rt7sbq40fade6e6rx, $m4is_z4ts5pa39jf1yhjb4,
 $m4is_nt48femkg6za9v5mn1sr23m62k ) : void {
$m4is_xq8a8kwspkheej40jh0sthk9zn2s = defined( 'MEMBERIUM_SKU' ) ? constant( 'MEMBERIUM_SKU' ) : '';

if ( ! $this->m4is_1090xawqcx3q9p->m4is_6j5ywapypexcz3j158m8wsdkn0aav( $m4is_tz1rt7sbq40fade6e6rx, "memberium/badgeos/tag_map/{$m4is_tz1rt7sbq40fade6e6rx}",
 $m4is_xq8a8kwspkheej40jh0sthk9zn2s ) ) {
return;
}
$m4is_19x1c17et728k945 = [
'_memberium_badgeos_rank_add',
'_memberium_badgeos_tag_add',

];
$this->m4is_1090xawqcx3q9p->m4is_tta1h0ffef83kbebp48hb6yhay( $m4is_tz1rt7sbq40fade6e6rx, $m4is_19x1c17et728k945, $_POST );

$this->m4is_zzggy66dh2();

}



public function m4is_tqzhst9q1s6e( WP_Post $m4is_z4ts5pa39jf1yhjb4 ) {
global $post;
$m4is_xq8a8kwspkheej40jh0sthk9zn2s = defined( 'MEMBERIUM_SKU' ) ? constant( 'MEMBERIUM_SKU' ) : '';

$m4is_vmhtx2ecrnzjpy = wp_nonce_field( $m4is_xq8a8kwspkheej40jh0sthk9zn2s, "memberium/badgeos/tag_map/{$m4is_z4ts5pa39jf1yhjb4->ID}",
 true, false );
$m4is_5ncsegxqbjhf2z88ajh0ekaxynvx = get_post_meta( $m4is_z4ts5pa39jf1yhjb4->ID, '_memberium_badgeos_badge_add', true );

$m4is_5ncsegxqbjhf2z88ajh0ekaxynvx = empty( $m4is_5ncsegxqbjhf2z88ajh0ekaxynvx ) ? 0 : $m4is_5ncsegxqbjhf2z88ajh0ekaxynvx;
$m4is_r7bd1543v6enxp46dsxa76kdt7 = __( 'Add Badge if Member has Tag',
 'memberium' );
$m4is_evspxhex9h3et = get_post_meta( $m4is_z4ts5pa39jf1yhjb4->ID, '_memberium_badgeos_tag_add', true );
$m4is_evspxhex9h3et = empty( $m4is_evspxhex9h3et ) ? 0 : $m4is_evspxhex9h3et;

$m4is_fk65qj3rz3dgtha5hmmj = __( 'Add Tag if Member has Badge', 'memberium' );
echo <<<HTMLDOCK

			{$m4is_vmhtx2ecrnzjpy}
			<label for="_memberium_badgeos_badge_add">{$m4is_r7bd1543v6enxp46dsxa76kdt7}:</label>
			<input name="_memberium_badgeos_badge_add" class="taglistdropdown" style="width:100%; max-width:100%" value="{$m4is_5ncsegxqbjhf2z88ajh0ekaxynvx}"><br /><br />

			<label for="_memberium_badgeos_tag_add">{$m4is_fk65qj3rz3dgtha5hmmj}:</label>
			<input name="_memberium_badgeos_tag_add" class="taglistdropdown" style="width:100%; max-width:100%" value="{$m4is_evspxhex9h3et}"><br /><br />
		HTMLDOCK;

do_action('memberium/badgeos/achievement_metabox');
}

public function m4is_5pf4xcbrthpv( int $m4is_tz1rt7sbq40fade6e6rx , $m4is_z4ts5pa39jf1yhjb4,
 $m4is_nt48femkg6za9v5mn1sr23m62k) : void {
$m4is_xq8a8kwspkheej40jh0sthk9zn2s = defined( 'MEMBERIUM_SKU' ) ? constant( 'MEMBERIUM_SKU' ) : '';

if ( ! $this->m4is_1090xawqcx3q9p->m4is_6j5ywapypexcz3j158m8wsdkn0aav( $m4is_tz1rt7sbq40fade6e6rx, "memberium/badgeos/tag_map/{$m4is_tz1rt7sbq40fade6e6rx}",
 $m4is_xq8a8kwspkheej40jh0sthk9zn2s ) ) {
return;
}
$m4is_19x1c17et728k945 = [
'_memberium_badgeos_badge_add',
'_memberium_badgeos_tag_add',

];
$this->m4is_1090xawqcx3q9p->m4is_tta1h0ffef83kbebp48hb6yhay( $m4is_tz1rt7sbq40fade6e6rx, $m4is_19x1c17et728k945, $_POST );

$this->m4is_95gwe4kpr27cdsfv4wqvwky6zmeqf();

}




public function m4is_bwddfs7fhhh1n4z94w7j0w6dzb1pvjb4( WP_Post $m4is_z4ts5pa39jf1yhjb4 ) : void {
global $post;
$m4is_j8j55t8dz79m7 = '_is4wp_learndash_achievement';

$m4is_xq8a8kwspkheej40jh0sthk9zn2s = defined( 'MEMBERIUM_SKU' ) ? constant( 'MEMBERIUM_SKU' ) : '';
$m4is_g8kjnx0f2 = wp_nonce_field( $m4is_xq8a8kwspkheej40jh0sthk9zn2s,
 "memberium_badgeos_lms_nonce_{$m4is_z4ts5pa39jf1yhjb4->ID}", true, false );
$m4is_pk98f5nk = get_post_meta( $m4is_z4ts5pa39jf1yhjb4->ID,
 $m4is_j8j55t8dz79m7, true );
$m4is_pk98f5nk = empty( $m4is_pk98f5nk ) ? 0 : $m4is_pk98f5nk;
$m4is_d6rswk942 = get_post_type_object( $m4is_z4ts5pa39jf1yhjb4->post_type )->labels->singular_name;

$m4is_r7bd1543v6enxp46dsxa76kdt7 = __('Add Badge on Completion of ', 'memberium');
$m4is_w4q3zxfbrt099 = $this->m4is_9wz8kkfage();

$m4is_y060qe8ff6mmm9j9jsgpt57ewmb53esa = '';
if ( is_array( $m4is_w4q3zxfbrt099 ) ) {
foreach ( $m4is_w4q3zxfbrt099 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_hce1y1a4qd65zhnwsj ) {
$m4is_fe42r2djxgf1h7pt = $m4is_pk98f5nk == $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ? ' selected="selected" ' : '';

$m4is_y060qe8ff6mmm9j9jsgpt57ewmb53esa .= "<option value='{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}' {$m4is_fe42r2djxgf1h7pt}>{$m4is_hce1y1a4qd65zhnwsj}</option>";

}
}
echo <<<HTMLBLOCK

			<label for='{$m4is_j8j55t8dz79m7}'>
				{$m4is_r7bd1543v6enxp46dsxa76kdt7} {$m4is_d6rswk942}:
			</label>
			<select class="actionset-selector" name="{$m4is_j8j55t8dz79m7}" style="width:100%; max-width:100%">
				<option value="0">(No Achievement)</option>
				{$m4is_y060qe8ff6mmm9j9jsgpt57ewmb53esa}
			</select>
			<br />
			<br />
		HTMLBLOCK;

do_action( 'memberium/badgeos/achievement_metabox' );
}

public function m4is_sysa7m0vg0brh425g4y84yf( int $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_z4ts5pa39jf1yhjb4, $m4is_nt48femkg6za9v5mn1sr23m62k ) {
$m4is_xq8a8kwspkheej40jh0sthk9zn2s = defined( 'MEMBERIUM_SKU' ) ? constant( 'MEMBERIUM_SKU' ) : '';

if ( ! $this->m4is_1090xawqcx3q9p->m4is_6j5ywapypexcz3j158m8wsdkn0aav( $m4is_tz1rt7sbq40fade6e6rx, "memberium_badgeos_lms_nonce_{$m4is_tz1rt7sbq40fade6e6rx}",
 $m4is_xq8a8kwspkheej40jh0sthk9zn2s ) ) {
return;
}
$m4is_19x1c17et728k945 = [
'_is4wp_learndash_achievement',
];
$this->m4is_1090xawqcx3q9p->m4is_tta1h0ffef83kbebp48hb6yhay( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_19x1c17et728k945, $_POST );
}




private function m4is_9wz8kkfage() : array {
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `ID` as `id`, `post_title` as `name` FROM %i WHERE `post_status` = 'publish' AND `post_type` IN ( SELECT `post_name` FROM %i WHERE `post_type` = 'achievement-type' AND `post_status` = 'publish' ) )",
 $wpdb->posts, $wpdb->posts );
$m4is_tbdh9qb6r6z = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
$m4is_w4q3zxfbrt099 = [];

foreach ( $m4is_tbdh9qb6r6z as $m4is_bamv772v ) {
$m4is_w4q3zxfbrt099[$m4is_bamv772v['id']] = $m4is_bamv772v['name'];
}
return $m4is_w4q3zxfbrt099;

}

private function m4is_95gwe4kpr27cdsfv4wqvwky6zmeqf() {
$m4is_m0tvc51fk8xxdp9sm0q26fkca73p = '_memberium_badgeos_badge_add';
$m4is_ag6hmt2m325qkb5qd0tyja = 'memberium/badgeos/assign_by_tag';

$m4is_6vxv1vrvwrs9j6ywa = 'memberium/badgeos/tag_by_badge';
$m4is_1fdw4jvx5kt4my = [];
$m4is_g61yzqs7ecta0xztr70d7v = [
'numberposts' =>
 -1,
'order' => 'ASC',
'orderby' => 'ID',
'post_status' => 'publish',
'post_type' => badgeos_get_achievement_types_slugs(),
'fields' =>
 'ids',
];
$m4is_wtt69zqx60txhy6926q5ank1ajb8 = get_posts( $m4is_g61yzqs7ecta0xztr70d7v );
foreach ( $m4is_wtt69zqx60txhy6926q5ank1ajb8 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = get_post_meta( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_m0tvc51fk8xxdp9sm0q26fkca73p, true );
if ( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_1fdw4jvx5kt4my[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0;

}
}
update_option( $m4is_ag6hmt2m325qkb5qd0tyja, $m4is_1fdw4jvx5kt4my );
$m4is_1fdw4jvx5kt4my = [];
foreach( $m4is_wtt69zqx60txhy6926q5ank1ajb8 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = get_post_meta( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_m0tvc51fk8xxdp9sm0q26fkca73p, true );
if ( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_1fdw4jvx5kt4my[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0;

}
}
update_option( $m4is_6vxv1vrvwrs9j6ywa, $m4is_1fdw4jvx5kt4my );
}

private function m4is_zzggy66dh2() {
$m4is_m0tvc51fk8xxdp9sm0q26fkca73p = '_memberium_badgeos_rank_add';


$m4is_ag6hmt2m325qkb5qd0tyja = 'memberium/badgeos/tag_by_rank';
$m4is_1fdw4jvx5kt4my = [];
$m4is_g61yzqs7ecta0xztr70d7v = [
'numberposts' =>
 -1,
'order' => 'ASC',
'orderby' => 'ID',
'post_status' => 'publish',
'post_type' => badgeos_get_rank_types_slugs(),
'fields' => 'ids',

];
$m4is_wtt69zqx60txhy6926q5ank1ajb8 = get_posts( $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_1fdw4jvx5kt4my = [];
foreach( $m4is_wtt69zqx60txhy6926q5ank1ajb8 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = get_post_meta( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_m0tvc51fk8xxdp9sm0q26fkca73p, true );
if ( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_1fdw4jvx5kt4my[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0;

}
}
update_option( $m4is_ag6hmt2m325qkb5qd0tyja, $m4is_1fdw4jvx5kt4my );

}

}