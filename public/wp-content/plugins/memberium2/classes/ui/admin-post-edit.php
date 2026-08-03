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


class_exists( 'm4is_knfcbrvkjrz3n8k8y6gf' ) || die();

final class m4is_7xqff3zw7sh9n98f8w {
private m4is_6y9612z4hjd6fzpap4r5n853641m1jc $m4is_132xe588j;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_5eragr7sh2yyj356m();
}
private function m4is_5eragr7sh2yyj356m() {
add_action( 'init', [$this, 'm4is_kvswbc191w257xsxv32n'],
 10 );
add_action( 'admin_print_scripts-edit.php', [$this, 'm4is_j5sjmjqyz2wm6kmdbpb4kx9'] );
add_action( 'wp_ajax_memberium_save_bulk_edit',
 [$this, 'm4is_mgpwp9q3hy080cr2vfksm2h']);
add_action( 'quick_edit_custom_box', [$this, 'm4is_rrgrd1cbgg09ftyy8q5vvqzex0h8q'], 10, 2 );

add_action( 'bulk_edit_custom_box', [$this, 'm4is_vdvh5gytfdsk7a9939e1hne7ebm7'], 10, 2 );
add_filter( 'bulk_actions-edit-post', [ $this,
 'm4is_7haqvwbfn96yt6s3qbkckqv75pcnp'] );
add_filter( 'bulk_actions-edit-page', [ $this, 'm4is_7haqvwbfn96yt6s3qbkckqv75pcnp'] );
add_filter( 'handle_bulk_actions-edit-post',
 [ $this, 'm4is_d4acy4r96xxw963g7pqqz'], 10, 3 );
add_filter( 'handle_bulk_actions-edit-page', [ $this, 'm4is_d4acy4r96xxw963g7pqqz'],
 10, 3 );
}



function m4is_kvswbc191w257xsxv32n() {
if ( ! isset( $_GET['memb_accesscontrol_bulkedit_nonce'] ) ) {
return;
}
if ( ! isset( $_GET['screen'] ) || $_GET['screen'] != 'edit-post' ) {
return;

}
if ( ! isset( $_GET['post'] ) || ! is_array( $_GET['post'] ) ) {
return;
}
if ( ! current_user_can('edit_posts') ) {
return;
}
$this->m4is_mgpwp9q3hy080cr2vfksm2h();

}
function m4is_vdvh5gytfdsk7a9939e1hne7ebm7( $m4is_7wgwjna3mrxka8smb6e6446cjgwx, $m4is_yhdk2h7srcr7n5mzjnw7m6b ) {
static $m4is_ah5fc8s9zsxwapqvtz4fkg = true;

if ($m4is_ah5fc8s9zsxwapqvtz4fkg) {
$m4is_ah5fc8s9zsxwapqvtz4fkg = false;
wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(),
 'memb_accesscontrol_bulkedit_nonce');
}
echo '<fieldset class="inline-edit-col-right inline-edit-', $m4is_7wgwjna3mrxka8smb6e6446cjgwx,
 '">';
echo '<div class="inline-edit-col column-', $m4is_7wgwjna3mrxka8smb6e6446cjgwx , '">';
echo '<label class="inline-edit-group">';

switch ($m4is_7wgwjna3mrxka8smb6e6446cjgwx) {
case 'memberships':
$m4is_y7084n6v67jme9va8yz = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' );

$m4is_x3wdqerc9wgrf50602y5h8ctrbbcdkp = [];
foreach ($m4is_y7084n6v67jme9va8yz as $m4is_j8j55t8dz79m7 => $m4is_f5pq560taxn4v67xk7v982nwn0) {
$m4is_x3wdqerc9wgrf50602y5h8ctrbbcdkp[] = $m4is_j8j55t8dz79m7;

}
$m4is_x3wdqerc9wgrf50602y5h8ctrbbcdkp = implode(',', $m4is_x3wdqerc9wgrf50602y5h8ctrbbcdkp);
echo '<input type="hidden" name="bulkedit-membershiplist" id="bulkedit-membershiplist" value="',
 $m4is_x3wdqerc9wgrf50602y5h8ctrbbcdkp, '">';

if (count($m4is_y7084n6v67jme9va8yz) > 0) {
echo '<ul class="cat-checklist category-checklist">';

echo '<em>Membership Access</em>';
echo '<label for="memb_useexisting"><input type="checkbox" name="memb_useexisting" value="1" id="memb_useexisting"> <em>Use Existing Memberships</em></label>';

foreach ($m4is_y7084n6v67jme9va8yz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_h9g6e5cga) {
echo "<label for='memb_membership_level_{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}'><input type='checkbox' name='memb_membership_level_{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}' value='{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}' id='memb_membership_level_{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}'> " . stripslashes($m4is_h9g6e5cga['name']) . '</label>';

}
}
echo '<label for="memb_anonymousonly"><input type="checkbox" name="memb_anonymousonly" value="1" id="memb_anonymousonly"> Logged Out Only</label>';

echo '<label for="memb_anyloggedinuser"><input type="checkbox" name="memb_anyloggedinuser" value="1" id="memb_anyloggedinuser"> Any Logged In User</label>';

echo '<label for="memb_google1stclick"><input type="checkbox" name="memb_google1stclick" value="1" id="memb_google1stclick"> Google 1st Click Free</label>';

echo '<label for="memb_facebookcrawler"><input type="checkbox" name="memb_facebookcrawler" value="1" id="memb_facebookcrawler"> Facebook Crawler Access</label>';

echo '</ul>';
echo '<hr />';
echo '<label for="memb_prohibitedaction"><span class="title" style="width:75px;">Prohibited</span><select name="memb_prohibitedaction" id="memb_prohibitedaction">';

echo '<option value="default">Default</option>';
echo '<option value="redirect">Redirect</option>';
echo '<option value="hide">Hide Completely</option>';

echo '<option value="excerpt">Show Excerpt Only</option>';
echo '</select></label>';
echo '<label><span class="title" style="width:75px;">Redirect URL  </span><input type="text" name="memb_redirecturl" value="" placeholder="" id="memb_redirecturl"></label>';

break;
}
echo '</label></div></fieldset>';
}
function m4is_j5sjmjqyz2wm6kmdbpb4kx9() {
$m4is_33we84v139 = plugins_url('memberium-ac');

wp_enqueue_script('memberium-admin-edit', $m4is_33we84v139 . '/js/quickedit.js', ['jquery', 'inline-edit-post'], '', true);
}
function m4is_rrx9s1bfks5zz($m4is_7wgwjna3mrxka8smb6e6446cjgwx,
 $m4is_yhdk2h7srcr7n5mzjnw7m6b) {
static $m4is_n9t683d9s84tk802 = true;
if ($m4is_7wgwjna3mrxka8smb6e6446cjgwx <> 'memberships') {
return;

}
if ($m4is_n9t683d9s84tk802) {
$m4is_n9t683d9s84tk802 = false;
wp_nonce_field( constant( 'MEMBERIUM_MODULES_DIR' ), 'memb_accesscontrol_quickedit_nonce');

}
echo '<div style="clear:both;"></div>';
switch ($m4is_7wgwjna3mrxka8smb6e6446cjgwx) {
case 'memberships':
$m4is_y7084n6v67jme9va8yz = $this->m4is_132xe588j->m4is_nd8j0cvdtzrh();

echo '<fieldset class="inline-edit-col-left inline-edit-', $m4is_7wgwjna3mrxka8smb6e6446cjgwx, '">';
echo '<div class="inline-edit-col column-',
 $m4is_7wgwjna3mrxka8smb6e6446cjgwx, '">';
echo '<label class="inline-edit-group">';
if (count($m4is_y7084n6v67jme9va8yz) > 0) {
echo '<em><strong>Membership Access</strong></em><br>';

echo '<ul>';
foreach ($m4is_y7084n6v67jme9va8yz as $id => $membership) {
echo '<label for="memb_membership_' . $id . '" style="float:left;margin-right:25px;"><input type="checkbox" name="memb_membership_levels[' . $id . ']" value="' . $id . '" id="memb_membership_' . $id . '"> ' . stripslashes($membership['name']) . '</label>';

}
unset($m4is_y7084n6v67jme9va8yz, $id, $membership);
echo '</ul>';
}
echo '</label></div></fieldset>';
echo '<fieldset class="inline-edit-col-right inline-edit-',
 $m4is_7wgwjna3mrxka8smb6e6446cjgwx, '">';
echo '<div class="inline-edit-col column-', $m4is_7wgwjna3mrxka8smb6e6446cjgwx, '">';
echo '<label class="inline-edit-group">';

echo '<em><strong>Other Access Controls</strong></em><br>';
echo '<label for="memb_anyloggedinuser"><input type="checkbox" name="memb_anyloggedinuser" value="1" id="memb_anyloggedinuser">Any Logged In User</label>';

echo '<label for="memb_anonymousonly"><input type="checkbox" name="memb_anonymousonly" value="1" id="memb_anonymousonly">Logged Out Only</label>';

echo '<label for="memb_google1stclick"><input type="checkbox" name="memb_google1stclick" value="1" id="memb_google1stclick">Google 1st Click Free</label>';

echo '<label><span class="title" style="width:75px;">Prohibited</span><select name="memb_prohibitedaction" id="memb_prohibitedaction">';

echo '<option value="default">Default</option>';
echo '<option value="redirect">Redirect</option>';
echo '<option value="hide">Hide Completely</option>';

echo '<option value="excerpt">Show Excerpt Only</option>';
echo '</select></label>';
echo '<label><span class="title" style="width:75px;">Redirect URL  </span><input type="text" name="memb_redirecturl" value="" placeholder="" id="memb_redirecturl"></label>';

echo '</label></div></fieldset>';
}
}
function m4is_f08vwxy2xc( int $m4is_tz1rt7sbq40fade6e6rx, WP_Post $m4is_z4ts5pa39jf1yhjb4, bool $m4is_nt48femkg6za9v5mn1sr23m62k ) {
$m4is_vmhtx2ecrnzjpy = 'memb_accesscontrol_quickedit_nonce';

if ( ! isset( $_POST[ $m4is_vmhtx2ecrnzjpy ] ) || !wp_verify_nonce( $_POST[ $m4is_vmhtx2ecrnzjpy ], constant( 'MEMBERIUM_MODULES_DIR' ) ) ) {
return;

}
if ( ! current_user_can( 'edit_post', $m4is_tz1rt7sbq40fade6e6rx ) ) {
return;
}

$_POST['memb_anonymousonly'] = isset( $_POST['memb_anonymousonly'] ) ? $_POST['memb_anonymousonly'] : 0;

$_POST['memb_google1stclick'] = isset( $_POST['memb_google1stclick'] ) ? $_POST['memb_google1stclick'] : 0;
$_POST['memb_loggedin'] = isset( $_POST['memb_loggedin'] ) ? $_POST['memb_loggedin'] : '';

$_POST['memb_membership_levels'] = isset( $_POST['memb_membership_levels'] ) ? $_POST['memb_membership_levels'] : '';
$_POST['memb_redirecturl'] = isset( $_POST['memb_redirecturl'] ) ? trim( $_POST['memb_redirecturl'] ) : '';


add_post_meta( $m4is_tz1rt7sbq40fade6e6rx, '_memberium_google_1stclick', (int) $_POST['memb_google1stclick'], true) or update_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_memberium_google_1stclick', $_POST['memb_google1stclick']);
add_post_meta( $m4is_tz1rt7sbq40fade6e6rx, '_memberium_anonymous_only',
 (int) $_POST['memb_anonymousonly'], true) or update_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_memberium_anonymous_only', $_POST['memb_anonymousonly']);

add_post_meta( $m4is_tz1rt7sbq40fade6e6rx, '_memberium_loggedin', (int) $_POST['memb_loggedin'], true) or update_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_memberium_loggedin', $_POST['memb_loggedin']);

if ( (int) $_POST['memb_anonymousonly'] == 1) {
$_POST['memb_membership_levels'] = '';

}
$m4is_0w6daxj0d1 = implode(',', (array)$_POST['memb_membership_levels']);
add_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_memberium_membership_levels',
 $m4is_0w6daxj0d1, true) or update_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_memberium_membership_levels', $m4is_0w6daxj0d1);

add_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_memberium_prohibited_action', $_POST['memb_prohibitedaction'], true) or update_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_memberium_prohibited_action',
 $_POST['memb_prohibitedaction']);
delete_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_memberium_hide_completely');
if ($_POST['memb_prohibitedaction'] != 'redirect') {
$_POST['memb_redirecturl'] = '';

}

add_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_memberium_redirect_url', $_POST['memb_redirecturl'], true) or update_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_memberium_redirect_url', $_POST['memb_redirecturl']);
}

function m4is_mgpwp9q3hy080cr2vfksm2h() {
if (! current_user_can('edit_posts') && ! current_user_can('edit_others_posts') ) {
return;

}
echo __LINE__, ' @ ', __METHOD__;
print_r( func_get_args(), true );
die();


$m4is_vj786rm654v1vpq55carr5j = empty($_POST['memb_anonymousonly']) ? 0 : (int) $_POST['memb_anonymousonly'];

$m4is_tgrhckfz8 = empty($_POST['memb_anyloggedinuser']) ? 0 : (int) $_POST['memb_anyloggedinuser'];
$m4is_dt1bqtzppkaqhy7fsb6gzg0 = empty($_POST['memb_facebookcrawler']) ? 0 : (int) $_POST['memb_facebookcrawler'];

$m4is_t3m3z65semb6rc0ms2ny8w6gdw = empty($_POST['memb_google1stclick']) ? 0 : (int) $_POST['memb_google1stclick'];
$m4is_wtt69zqx60txhy6926q5ank1ajb8 = empty($_POST['post_ids']) ? [] : $_POST['post_ids'];

$m4is_sa1zwmzw = empty($_POST['memb_prohibitedaction']) ? 'default' : $_POST['memb_prohibitedaction'];
$m4is_pqecxfec342ksq5fzv1mg = empty($_POST['memb_redirecturl']) ? '' : trim($_POST['memb_redirecturl']);

$m4is_fr5t60wjrtbzbnmbkypbnse = empty($_POST['memb_useexisting']) ? 0 : 1;
$m4is_0w6daxj0d1 = isset($_POST['memb_memberships']) && ! empty($_POST['memb_memberships']) ? $_POST['memb_memberships'] : '';

if ($m4is_vj786rm654v1vpq55carr5j == 1) {
$_POST['memb_memberships'] = '';
}
if (! empty($_POST['memb_memberships']) ) {
}
foreach ($m4is_wtt69zqx60txhy6926q5ank1ajb8 as $m4is_tz1rt7sbq40fade6e6rx) {
if (current_user_can('edit_post',
 $m4is_tz1rt7sbq40fade6e6rx) ) {
$m4is_nab4fbybdg04ebj55s6 = [
'prohibited_action' => $m4is_sa1zwmzw,
'redirect_url' => $m4is_pqecxfec342ksq5fzv1mg,

'facebook_crawler' => $m4is_dt1bqtzppkaqhy7fsb6gzg0,
'google_1st_click' => $m4is_t3m3z65semb6rc0ms2ny8w6gdw,
];
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt($m4is_tz1rt7sbq40fade6e6rx,
 $m4is_nab4fbybdg04ebj55s6);

if (! $m4is_fr5t60wjrtbzbnmbkypbnse) {
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt($m4is_tz1rt7sbq40fade6e6rx,
 'memberships', $m4is_0w6daxj0d1);

if (! empty($_POST['memb_memberships']) ) {
$m4is_nab4fbybdg04ebj55s6 = [
'anonymous_only' => $m4is_vj786rm654v1vpq55carr5j,

'any_loggedin_user' => $m4is_tgrhckfz8,
'any_membership' => '',
'memberships' => $m4is_0w6daxj0d1,
];
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt($m4is_tz1rt7sbq40fade6e6rx,
 $m4is_nab4fbybdg04ebj55s6);
}
else {
$m4is_nab4fbybdg04ebj55s6 = [
'anonymous_only' => $m4is_vj786rm654v1vpq55carr5j,
'any_loggedin_user' =>
 $m4is_tgrhckfz8,
'any_membership' => '',
];
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt($m4is_tz1rt7sbq40fade6e6rx,
 $m4is_nab4fbybdg04ebj55s6);
}
}
else {
}
}
else {
}
}
}
function m4is_rrgrd1cbgg09ftyy8q5vvqzex0h8q($m4is_7wgwjna3mrxka8smb6e6446cjgwx,
 $m4is_yhdk2h7srcr7n5mzjnw7m6b) {
static $m4is_n9t683d9s84tk802 = TRUE;
if ($m4is_n9t683d9s84tk802) {
$m4is_n9t683d9s84tk802 = FALSE;

wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(), 'memb_accesscontrol_quickedit_nonce');
}
echo '<fieldset class="inline-edit-col-right inline-edit-',
 $m4is_7wgwjna3mrxka8smb6e6446cjgwx, '">';
echo '<div class="inline-edit-col column-', $m4is_7wgwjna3mrxka8smb6e6446cjgwx, '">';
echo '<label class="inline-edit-group">';

switch ($m4is_7wgwjna3mrxka8smb6e6446cjgwx) {
case 'memberships':
$m4is_y7084n6v67jme9va8yz = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('memberships');

if (count($m4is_y7084n6v67jme9va8yz) > 0) {

echo '<ul>';
echo '<em>Membership Access</em>';
foreach ($m4is_y7084n6v67jme9va8yz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_h9g6e5cga) {
echo '<label for="memb_membership_' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . '"><input type="checkbox" name="memb_membership_levels[' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ']" value="' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . '" id="memb_membership_' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . '"> ' . stripslashes($m4is_h9g6e5cga['name']) . '</label>';

}
echo '<label for="memb_anonymousonly"><input type="checkbox" name="memb_anonymousonly" value="1" id="memb_anonymousonly">Logged Out Only</label>';

echo '<label for="memb_google1stclick"><input type="checkbox" name="memb_google1stclick" value="1" id="memb_google1stclick">Google 1st Click Free</label>';

echo '<label for="memb_facebookcrawler"><input type="checkbox" name="memb_facebookcrawler" value="1" id="memb_facebookcrawler">Facebook Crawler Access</label>';

echo '</ul>';
echo '<hr />';
echo '<label><span class="title" style="width:75px;">Prohibited</span><select name="memb_prohibitedaction" id="memb_prohibitedaction">';

echo '<option value="default">Default</option>';
echo '<option value="redirect">Redirect</option>';
echo '<option value="hide">Hide Completely</option>';

echo '<option value="excerpt">Show Excerpt Only</option>';
echo '</select></label>';
echo '<label><span class="title" style="width:75px;">Redirect URL  </span><input type="text" name="memb_redirecturl" value="" placeholder="" id="memb_redirecturl"></label>';

}
break;
}
echo '</label></div></fieldset>';
}

}