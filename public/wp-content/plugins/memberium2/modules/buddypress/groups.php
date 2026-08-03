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


class_exists('m4is_ckv379vnjr0dx37') || die();

final class m4is_xqpbrrxv8msngb extends BP_Group_Extension {
function __construct() {
add_filter('memberium/enhanced_admin_scripts',
 [$this, 'm4is_1edr6tmrjfp3kdm04320'], 10, 1);
$m4is_g61yzqs7ecta0xztr70d7v = [
'access' => 'noone',
'name' => 'BuddyPress Groups for Memberium',

'slug' => 'bp-groups-for-memberium',
];
parent::init( $m4is_g61yzqs7ecta0xztr70d7v );
}
function m4is_1edr6tmrjfp3kdm04320($m4is_78sagkn3zj76vt37tnxx1f8p) {
$m4is_78sagkn3zj76vt37tnxx1f8p[] = 'toplevel_page_bp-groups';
 
$m4is_78sagkn3zj76vt37tnxx1f8p[] = 'buddyboss_page_bp-groups'; 
return $m4is_78sagkn3zj76vt37tnxx1f8p;
}
function display( $m4is_4dd6m7vsabfbpdkyh783ct657ecx = null ) {
$m4is_4dd6m7vsabfbpdkyh783ct657ecx = bp_get_group_id();

}
function settings_screen($m4is_4dd6m7vsabfbpdkyh783ct657ecx = null) {
if ( empty($m4is_4dd6m7vsabfbpdkyh783ct657ecx) ) {
return;

}
$m4is_c9nryf13e43y9jensddce = groups_get_groupmeta($m4is_4dd6m7vsabfbpdkyh783ct657ecx, '_is4wp_autojoin');
$m4is_c9nryf13e43y9jensddce = empty( $m4is_c9nryf13e43y9jensddce ) ? [] : $m4is_c9nryf13e43y9jensddce;

$m4is_c9nryf13e43y9jensddce['autojoin_admin'] = isset( $m4is_c9nryf13e43y9jensddce['autojoin_admin'] ) ? $m4is_c9nryf13e43y9jensddce['autojoin_admin'] : '';

$m4is_c9nryf13e43y9jensddce['autojoin_moderator'] = isset( $m4is_c9nryf13e43y9jensddce['autojoin_moderator'] ) ? $m4is_c9nryf13e43y9jensddce['autojoin_moderator'] : '';

$m4is_c9nryf13e43y9jensddce['autojoin_member'] = isset( $m4is_c9nryf13e43y9jensddce['autojoin_member'] ) ? $m4is_c9nryf13e43y9jensddce['autojoin_member'] : '';

$m4is_c9nryf13e43y9jensddce['autoban'] = isset( $m4is_c9nryf13e43y9jensddce['autoban'] ) ? $m4is_c9nryf13e43y9jensddce['autoban'] : '';

echo '<style>';
echo ' .memberium_label { display:inline-block; width:175px; margin-right: 20px; }';
echo ' .multitaglist .tag-selector { margin-bottom:6px; }';

echo '</style>';
echo '<label class="memberium_label">Autojoin as Admin:</label>';
echo '<input type="text" id="is4wp_autojoin_admin" name="is4wp_autojoin_admin" value="',
 $m4is_c9nryf13e43y9jensddce['autojoin_admin'], '" class="multitaglist" style="width:500px;">';
echo '<br>';
echo '<label class="memberium_label">Autojoin as Moderator:</label>';

echo '<input type="text" id="is4wp_autojoin_moderator"  name="is4wp_autojoin_moderator" value="', $m4is_c9nryf13e43y9jensddce['autojoin_moderator'],
 '" class="multitaglist" style="width:500px;">';
echo '<br>';
echo '<label class="memberium_label">Autojoin as Member:</label>';
echo '<input type="text" name="is4wp_autojoin_member" value="',
 ( $m4is_c9nryf13e43y9jensddce['autojoin_member'] > '' ? $m4is_c9nryf13e43y9jensddce['autojoin_member'] : '' ), '" class="multitaglist" style="width:500px;">';

echo '<br>';
echo '<label class="memberium_label">Auto-Ban:</label>';
echo '<input type="text" name="is4wp_autoban" value="', ( $m4is_c9nryf13e43y9jensddce['autoban'] > '' ? $m4is_c9nryf13e43y9jensddce['autoban'] : '' ),
 '" class="multitaglist" style="width:500px;">';
echo '<br>';
return;
$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true );

$m4is_06c8s5xs94f91335gnaey25 = $m4is_06c8s5xs94f91335gnaey25['mc'];
$m4is_xyfzj0fnmp5g4 = [];
foreach ( (array) $m4is_06c8s5xs94f91335gnaey25 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_xyfzj0fnmp5g4[] = [
'id' => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' => $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 . ' (' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ')'
];

}
$m4is_xyfzj0fnmp5g4 = json_encode( $m4is_xyfzj0fnmp5g4 );
unset( $m4is_06c8s5xs94f91335gnaey25, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 );
echo '<script>';
echo '	var taglist = ', $m4is_xyfzj0fnmp5g4, ';';
echo '</script>';
unset( $m4is_06c8s5xs94f91335gnaey25,
 $m4is_xyfzj0fnmp5g4 );
echo '<script> ';
echo '	jQuery(document).ready( function() { ';
echo '		jQuery(".multitaglist").wpalSelect2({ ';

echo '			placeholder: "Select the tags for this role.", ';
echo '			tags: taglist ';
echo '		}); ';
echo '}); ';
echo '</script>';

}
function settings_screen_save( $m4is_4dd6m7vsabfbpdkyh783ct657ecx = NULL ) {
$m4is_c9nryf13e43y9jensddce = [];
$m4is_c9nryf13e43y9jensddce['autojoin_admin'] = isset( $_POST['is4wp_autojoin_admin'] ) ? $_POST['is4wp_autojoin_admin'] : '';

$m4is_c9nryf13e43y9jensddce['autojoin_moderator'] = isset( $_POST['is4wp_autojoin_moderator'] ) ? $_POST['is4wp_autojoin_moderator'] : '';

$m4is_c9nryf13e43y9jensddce['autojoin_member'] = isset( $_POST['is4wp_autojoin_member'] ) ? $_POST['is4wp_autojoin_member'] : '';
$m4is_c9nryf13e43y9jensddce['autoban'] = isset( $_POST['is4wp_autoban'] ) ? $_POST['is4wp_autoban'] : '';

groups_update_groupmeta( $m4is_4dd6m7vsabfbpdkyh783ct657ecx, '_is4wp_autojoin', $m4is_c9nryf13e43y9jensddce );
}
}
final class m4is_ecph5pfad09cf24t6yp9nd2skvzgrp {
private $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0;

public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}
private function __construct() {
if ( ( ! class_exists( 'BP_Groups_Group' ) ) || ( ! class_exists( 'BP_Group_Extension' ) ) ) {
return;

}
if ( function_exists( 'bp_register_group_extension' ) ) {
if ( is_admin() ) {
bp_register_group_extension( 'm4is_xqpbrrxv8msngb' );

}
}
$this->m4is_5eragr7sh2yyj356m();
}
private function m4is_5eragr7sh2yyj356m() {
add_action( 'memberium/session/updated', [$this,
 'm4is_7m28fm68'], 20, 2 );
}
private function m4is_dxtvz1zznwx3qa3p1herab737mk5( $m4is_n79rn4yv31hrq9g7a88yr91f ) {
$m4is_934a95jn = [];

if ( is_array( $m4is_n79rn4yv31hrq9g7a88yr91f ) ) {
foreach( $m4is_n79rn4yv31hrq9g7a88yr91f as $m4is_00bnnh6s4bp6xfnew4kmj ) {
$m4is_934a95jn[] = $m4is_00bnnh6s4bp6xfnew4kmj->id;

}
}
return $m4is_934a95jn;
}
function m4is_r027d2rhcn( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
$this->m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_wk4dh1rnd3wmwvsggq51nhn87;

}
function m4is_8avs0d9n1parvbb0x7fgnetqe6z8n( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) {
return empty( $this->m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ? $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh : $this->m4is_wk4dh1rnd3wmwvsggq51nhn87;

}


public function m4is_7m28fm68( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_6mctr922hbmncpwfrp0x2k ) : void {
if ( apply_filters( 'memberium/buddypress/groups/autojoin',
 false, $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return;
}
if ( ! function_exists( 'groups_get_groups' ) || ! class_exists( 'bp_groups_group' ) ) {
return;

}
if ( ! defined( 'BP_GROUPS_SLUG' ) ) {
return;
}
if ( defined( 'WPAL_DISABLE_BUDDYPRESS_AUTOJOIN' ) && constant( 'WPAL_DISABLE_BUDDYPRESS_AUTOJOIN' ) ) {
return;

}
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'manage_options' ) ) {
return;
}
$m4is_g61yzqs7ecta0xztr70d7v = [
'show_hidden' =>
 true,
'per_page' => 0,
'page' => 0,
];
$m4is_n79rn4yv31hrq9g7a88yr91f = groups_get_groups( $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_n79rn4yv31hrq9g7a88yr91f = isset( $m4is_n79rn4yv31hrq9g7a88yr91f['groups'] ) ? $m4is_n79rn4yv31hrq9g7a88yr91f['groups'] : [];

$m4is_06c8s5xs94f91335gnaey25 = isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] ) ? array_filter( explode( ',', $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] ) ) : [];

if ( is_array( $m4is_n79rn4yv31hrq9g7a88yr91f ) ) {
$this->m4is_r027d2rhcn( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
add_filter( 'bp_loggedin_user_id',
 [$this, 'm4is_8avs0d9n1parvbb0x7fgnetqe6z8n'], PHP_INT_MAX, 1 );
$m4is_j88qn9sj2ge6jrrkxvs40 = BP_Groups_Member::get_group_ids( $m4is_wk4dh1rnd3wmwvsggq51nhn87 )['groups'];

$m4is_25b0ry45gj01f3da123p2k2w86w = $this->m4is_dxtvz1zznwx3qa3p1herab737mk5( BP_Groups_Member::get_is_banned_of( $m4is_wk4dh1rnd3wmwvsggq51nhn87 )['groups'] );

$m4is_defygvfht53szv4y4n0aznwq0nt8a6fc = $this->m4is_dxtvz1zznwx3qa3p1herab737mk5( BP_Groups_Member::get_is_admin_of( $m4is_wk4dh1rnd3wmwvsggq51nhn87 )['groups'] );

$m4is_dzjzr4xeg92 = $this->m4is_dxtvz1zznwx3qa3p1herab737mk5( BP_Groups_Member::get_is_mod_of( $m4is_wk4dh1rnd3wmwvsggq51nhn87 )['groups'] );

remove_filter( 'bp_loggedin_user_id', [$this, 'm4is_8avs0d9n1parvbb0x7fgnetqe6z8n'] );
$this->m4is_r027d2rhcn( 0 );
foreach ( $m4is_n79rn4yv31hrq9g7a88yr91f as $m4is_00bnnh6s4bp6xfnew4kmj ) {
$m4is_a5sqbrfwmd9p72d6j84jgsre5gwsek = new BP_Groups_Member( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_00bnnh6s4bp6xfnew4kmj->id );
$m4is_c9nryf13e43y9jensddce = groups_get_groupmeta( $m4is_00bnnh6s4bp6xfnew4kmj->id, '_is4wp_autojoin' );

$m4is_c9nryf13e43y9jensddce = is_array( $m4is_c9nryf13e43y9jensddce ) ? $m4is_c9nryf13e43y9jensddce : [];
if ( ! empty( $m4is_c9nryf13e43y9jensddce ) ) {
$m4is_c9nryf13e43y9jensddce['autoban'] = isset( $m4is_c9nryf13e43y9jensddce['autoban'] ) ? array_filter( explode( ',',
 $m4is_c9nryf13e43y9jensddce['autoban'] ) ) : [];
$m4is_c9nryf13e43y9jensddce['autojoin_admin'] = isset( $m4is_c9nryf13e43y9jensddce['autojoin_admin'] ) ? array_filter( explode( ',',
 $m4is_c9nryf13e43y9jensddce['autojoin_admin'] ) ) : [];
$m4is_c9nryf13e43y9jensddce['autojoin_moderator'] = isset( $m4is_c9nryf13e43y9jensddce['autojoin_moderator'] ) ? array_filter( explode( ',',
 $m4is_c9nryf13e43y9jensddce['autojoin_moderator'] ) ) : [];
$m4is_c9nryf13e43y9jensddce['autojoin_member'] = isset( $m4is_c9nryf13e43y9jensddce['autojoin_member'] ) ? array_filter( explode( ',',
 $m4is_c9nryf13e43y9jensddce['autojoin_member'] ) ) : [];
$m4is_30s7kpjj9dhmej = ! empty( $m4is_c9nryf13e43y9jensddce['autoban'] );

$m4is_qm9y1tj4xnwwy2 = ! empty( $m4is_c9nryf13e43y9jensddce['autojoin_moderator'] );
$m4is_dgj38jnf5dk62kt = ! empty( $m4is_c9nryf13e43y9jensddce['autojoin_admin'] );

$m4is_bdmpyjd05y2ft89jnwpnnhed0 = $m4is_dgj38jnf5dk62kt || $m4is_qm9y1tj4xnwwy2 || ( ! empty($m4is_c9nryf13e43y9jensddce['autojoin_member'] ) );

$m4is_e655824y23gx1jv5ze3 = in_array( $m4is_00bnnh6s4bp6xfnew4kmj->id, $m4is_25b0ry45gj01f3da123p2k2w86w );
$m4is_8w9vjmzaq0 = in_array( $m4is_00bnnh6s4bp6xfnew4kmj->id,
 $m4is_dzjzr4xeg92 );
$m4is_6n4xfsrcre7 = in_array( $m4is_00bnnh6s4bp6xfnew4kmj->id, $m4is_defygvfht53szv4y4n0aznwq0nt8a6fc );
$m4is_rhpyx5e00xf5j426z7k9j8a3z90be = $m4is_6n4xfsrcre7 || $m4is_8w9vjmzaq0 || in_array( $m4is_00bnnh6s4bp6xfnew4kmj->id,
 $m4is_j88qn9sj2ge6jrrkxvs40 );
$m4is_md66xxmg8qyp7hac20stg39wn = ! empty( array_intersect( $m4is_c9nryf13e43y9jensddce['autoban'],
 $m4is_06c8s5xs94f91335gnaey25 ) );
$m4is_n02gnsm487vxm6mnp = ! empty( array_intersect( $m4is_c9nryf13e43y9jensddce['autojoin_moderator'],
 $m4is_06c8s5xs94f91335gnaey25 ) );
$m4is_w5hsr44d8ewkzkjq3 = ! empty( array_intersect( $m4is_c9nryf13e43y9jensddce['autojoin_admin'],
 $m4is_06c8s5xs94f91335gnaey25 ) );
$m4is_wjn28wkq7s7d450ncvzs8rtz425rwkx9 = $m4is_n02gnsm487vxm6mnp || $m4is_w5hsr44d8ewkzkjq3 || ( ! empty( array_intersect( $m4is_c9nryf13e43y9jensddce['autojoin_member'],
 $m4is_06c8s5xs94f91335gnaey25 ) ) );

if ( $m4is_30s7kpjj9dhmej ) {
if ( $m4is_md66xxmg8qyp7hac20stg39wn && ! $m4is_e655824y23gx1jv5ze3 ) {
$m4is_a5sqbrfwmd9p72d6j84jgsre5gwsek->demote();

$m4is_a5sqbrfwmd9p72d6j84jgsre5gwsek->ban();
$m4is_e655824y23gx1jv5ze3 = true;
}
if ( ( ! $m4is_md66xxmg8qyp7hac20stg39wn ) && $m4is_e655824y23gx1jv5ze3 ) {
$m4is_a5sqbrfwmd9p72d6j84jgsre5gwsek->unban();

$m4is_e655824y23gx1jv5ze3 = false;
}
}
if ( ! $m4is_e655824y23gx1jv5ze3 ) {
if ( $m4is_bdmpyjd05y2ft89jnwpnnhed0 ) {
if ( ( ! $m4is_rhpyx5e00xf5j426z7k9j8a3z90be ) && $m4is_wjn28wkq7s7d450ncvzs8rtz425rwkx9 ) {
groups_join_group( $m4is_00bnnh6s4bp6xfnew4kmj->id,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_rhpyx5e00xf5j426z7k9j8a3z90be = true;
}
elseif ( $m4is_rhpyx5e00xf5j426z7k9j8a3z90be && ( ! $m4is_wjn28wkq7s7d450ncvzs8rtz425rwkx9 ) ) {
$m4is_a5sqbrfwmd9p72d6j84jgsre5gwsek->remove();

$m4is_rhpyx5e00xf5j426z7k9j8a3z90be = false;
}
}
}
if ((! $m4is_e655824y23gx1jv5ze3) && $m4is_bdmpyjd05y2ft89jnwpnnhed0) {
if ($m4is_qm9y1tj4xnwwy2) {
if ($m4is_n02gnsm487vxm6mnp && (! $m4is_w5hsr44d8ewkzkjq3) ) {
$m4is_a5sqbrfwmd9p72d6j84jgsre5gwsek->promote('mod');

}
elseif ($m4is_8w9vjmzaq0 && ! $m4is_n02gnsm487vxm6mnp && ! $m4is_w5hsr44d8ewkzkjq3) {
$m4is_a5sqbrfwmd9p72d6j84jgsre5gwsek->demote('mod');

}
}
if ($m4is_dgj38jnf5dk62kt) {
if (! $m4is_6n4xfsrcre7 && $m4is_w5hsr44d8ewkzkjq3) {
$m4is_a5sqbrfwmd9p72d6j84jgsre5gwsek->promote('admin');

}
elseif ($m4is_6n4xfsrcre7 && ! $m4is_w5hsr44d8ewkzkjq3) {
$m4is_a5sqbrfwmd9p72d6j84jgsre5gwsek->demote('admin');
}
}
}
}
}
}
}

}
