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

final class m4is_0g26mbgex8v31ebk79y56tbc5w {
private $m4is_1090xawqcx3q9p;
private $m4is_132xe588j;
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

$this->m4is_1090xawqcx3q9p = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
private function m4is_5eragr7sh2yyj356m() {
add_action( 'admin_init',
 [$this, 'm4is_1d8w88aw552xz'] );
add_action( 'memberium_admin_menu_addons', [$this, 'm4is_symh1fmfbxesp4xd1dgp8p5rc'] );
add_filter( 'memberium/modules/active/names',
 [$this, 'm4is_v9eeymdh30mk'], 10, 1 );
}



public function m4is_symh1fmfbxesp4xd1dgp8p5rc() {
$m4is_ep6rjata = 'manage_options';
if ( ! current_user_can( $m4is_ep6rjata ) ) {
return;

}
$m4is_w0y3c6pa7wp01b = 'memberium';
$m4is_nab4fbybdg04ebj55s6 = $m4is_ep6rjata;
add_submenu_page( $m4is_w0y3c6pa7wp01b, 'Memberium WP Courseware',
 'WP Courseware', $m4is_ep6rjata, 'memberium-wpcw', [$this, 'm4is_xdz5nckg37ny6akj6wazceqxd1gz'] );
}
function m4is_xdz5nckg37ny6akj6wazceqxd1gz() {
require_once __DIR__ . '/screens/wpcourseware.php';

}
function m4is_v9eeymdh30mk( $m4is_jq2e3019hp45103bhm95sxmccqd8 ) {
return array_merge( $m4is_jq2e3019hp45103bhm95sxmccqd8, [
'WP-Courseware for Memberium Support'
]
);

}




public function m4is_1d8w88aw552xz() {
$m4is_yhdk2h7srcr7n5mzjnw7m6b = $this->m4is_1090xawqcx3q9p->m4is_6c1kj95ycpcym5c();
$m4is_g6ce4m9cm7qp1axa960e5xgm3yxthjb = [
'course_unit',

];
if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b, $m4is_g6ce4m9cm7qp1axa960e5xgm3yxthjb ) ) {
add_meta_box( 'is4wp-wpcw-actions', 'WP Courseware Memberium Integration',
 [$this, 'm4is_fahzkhg9a'], $m4is_yhdk2h7srcr7n5mzjnw7m6b, 'side' );
}
add_action( 'admin_footer', [$this->m4is_1090xawqcx3q9p, 'm4is_e2f4xq95m09m10s6ehrhvz']);

add_action( 'save_post', [$this, 'm4is_32b5b5dgcgajn81ytvzvxxzkefzw'] );
}

public function m4is_fahzkhg9a() {
global $post;

$m4is_0kdm2zprhs5b1 = get_post_meta( $post->ID );

$m4is_pk98f5nk = [];
$m4is_t7ss27sn8dc4ezemec9emt = [
'_is4wp_wpcw_completion_tag',
];
foreach($m4is_t7ss27sn8dc4ezemec9emt as $m4is_j8j55t8dz79m7) {
$m4is_pk98f5nk[$m4is_j8j55t8dz79m7] = isset($m4is_0kdm2zprhs5b1[$m4is_j8j55t8dz79m7][0]) ? $m4is_0kdm2zprhs5b1[$m4is_j8j55t8dz79m7][0] : '';

}
wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(), "memberium_membershipaccess_nonce_{$post->ID}");
if ( in_array( $post->post_type,
 ['course_unit'] ) ) {
$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = _e( 'Unit Completion Tag', 'memberium' );
$m4is_rqxytszfq5v6syth1csqqxvy5 = empty( $m4is_pk98f5nk['_is4wp_wpcw_completion_tag'] ) ? '' : $m4is_pk98f5nk['_is4wp_wpcw_completion_tag'];

echo <<<HTMLBLOCK

				<label for="_is4wp_wpcw_completion_tag">{$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0}:</label>
				<input name="_is4wp_wpcw_completion_tag" class="multitaglist" style="width:100%; max-width:100%" value="{$m4is_rqxytszfq5v6syth1csqqxvy5}"><br /><br />';
			HTMLBLOCK;

}
}
public function m4is_32b5b5dgcgajn81ytvzvxxzkefzw( $m4is_tz1rt7sbq40fade6e6rx ) {
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
return;

}
$m4is_167msnhv = $_POST;
if ( empty( $m4is_167msnhv["memberium_membershipaccess_nonce_{$m4is_tz1rt7sbq40fade6e6rx}"] ) || ! wp_verify_nonce( $m4is_167msnhv["memberium_membershipaccess_nonce_{$m4is_tz1rt7sbq40fade6e6rx}"],
 $this->m4is_132xe588j->m4is_54b9bwwsx7sym() ) ) {
return;
}
if ( ! current_user_can( 'edit_posts', $m4is_tz1rt7sbq40fade6e6rx ) ) {
return;

}
$fieldnames = [
'_is4wp_wpcw_completion_tag',
];
foreach( $fieldnames as $key ) {
$m4is_167msnhv[$key] = isset( $m4is_167msnhv[$key] ) ? $m4is_167msnhv[$key] : '';

add_post_meta( $m4is_tz1rt7sbq40fade6e6rx, $key, $m4is_167msnhv[$key], true ) or update_post_meta( $m4is_tz1rt7sbq40fade6e6rx, $key,
 $m4is_167msnhv[$key] );
}
}
}
