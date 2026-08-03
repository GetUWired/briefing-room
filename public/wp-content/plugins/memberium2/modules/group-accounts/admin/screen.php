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

final class m4is_pxpfacwwc3 {
private object $m4is_132xe588j;
private object $m4is_pxqpc8vpph0tn5mv1ty4y4tvd;
private object $m4is_mhqzty3k54fv;

public function __construct() {
$this->m4is_rdbqwsws7nxnjkh();
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$_SERVER['REQUEST_METHOD'] == 'POST' && $this->m4is_kw4m24hf6();

$this->m4is_dxvr34x0x8rxxwy15d8fx0j();
}
private function m4is_rdbqwsws7nxnjkh() : void {
current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_pxqpc8vpph0tn5mv1ty4y4tvd = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$this->m4is_mhqzty3k54fv = m4is_p2r78mkk9tdtwpmc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
private function m4is_dxvr34x0x8rxxwy15d8fx0j() {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_mhqzty3k54fv->m4is_nj54edhem2n65zh8981a9c0hhp5adr6();


$m4is_n7x0afpz = [
'child_added_goal' => '', 
'child_cancel_goal' => '', 
'parent_added_goal' => '', 
'child_added_actionset' => 0,
 
'child_cancel_actionset' => 0, 
'parent_added_actionset' => 0, 
'whitelist_memberships' => false, 
'tag_whitelist' => '', 
];
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = wp_parse_args( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy,
 $m4is_n7x0afpz );

$m4is_ta6xqxkcdz0c5g3pk = [
'general' => '<i class="fa fa-umbrella"></i> General',
'tags' => '<i class="fa fa-tags"></i> Tags',

'subscriptions' => '<i class="fa fa-shopping-cart"></i> Subscriptions',
'teams' => '<i class="fa fa-users"></i> Teams',
];
$_GET['tab'] = isset( $_GET['tab'] ) && array_key_exists( $_GET['tab'],
 $m4is_ta6xqxkcdz0c5g3pk ) ? $_GET['tab'] : array_key_first( $m4is_ta6xqxkcdz0c5g3pk);
$m4is_aq3n8kjvpsvryrrf9exmx = $_GET['tab'];
m4is_dv250ra9xbtaf::m4is_dagbw7aea4y90yradk9x7b();

echo '<div class="wrap">';
echo '<h2>', __( 'Group Account Settings' ), '</h2>';
echo '<h2 class="nav-tab-wrapper">';

foreach ($m4is_ta6xqxkcdz0c5g3pk as $m4is_ga7k41nm95cn0s4wkjqanw7 =>
 $m4is_hce1y1a4qd65zhnwsj) {

$class = $m4is_ga7k41nm95cn0s4wkjqanw7 == $m4is_aq3n8kjvpsvryrrf9exmx ? ' nav-tab-active' : '';

if ($m4is_ga7k41nm95cn0s4wkjqanw7 == $m4is_aq3n8kjvpsvryrrf9exmx) {
echo "<span class='nav-tab{$class}'>{$m4is_hce1y1a4qd65zhnwsj}</span>";

}

else {
echo "<a class='nav-tab{$class}' href='?page=", $_GET['page'], "&tab={$m4is_ga7k41nm95cn0s4wkjqanw7}'>{$m4is_hce1y1a4qd65zhnwsj}</a>";

}
}

echo '</h2>';


echo '<div class="memberium_tabcontent" style="margin-top:10px;">';
if ( $m4is_aq3n8kjvpsvryrrf9exmx == 'general' ) {

$m4is_spt4st2ech5 = $this->m4is_fcm3n0cgx6fc8qhazxyax();

$m4is_axjs757jn2bghxr207pb = (bool) m4is_w3pp5rsxdc03bns3::m4is_fsammgw6kagh();
$m4is_gtvm4emg8t91he12qap = ! empty($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_added_actionset']) || ! empty($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_cancel_actionset']) || ! empty($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_added_actionset']);

echo '<form method="POST" action="">';
wp_nonce_field( m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_54b9bwwsx7sym(),
 'memberium_umbrella_account_nonce' );
echo '<ul>';
echo '<h3>Management Automations</h3>';
if (  $m4is_gtvm4emg8t91he12qap) {
echo '<h4>Legacy Actionsets</h4>';

if (empty($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_added_goal']) ) {
echo '<li><label>Child Added Actionset</label>';
echo '<input value="',
 $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_added_actionset'], '"  name="child_added_actionset" id="child_added_actionset" type="text" class="dropdown actionsetdropdown">';

echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ), '</li>';
}
if (empty($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_cancel_goal']) ) {
echo '<li><label>Child Cancel Actionset</label>';

echo '<input value="', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_cancel_actionset'], '"  name="child_cancel_actionset" id="child_cancel_actionset" type="text" class="dropdown actionsetdropdown">';

echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ), '</li>';
}
if (empty($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_added_goal']) ) {
echo '<li><label>Parent Added Actionset</label>';

echo '<input value="', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_added_actionset'], '"  name="parent_added_actionset" id="parent_added_actionset" type="text" class="dropdown actionsetdropdown">';

echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ), '</li>';
}
echo '<h4>Campaign Builder API Goals <em>(New / Replaces Actionsets)</em></h4>';

}
echo '<li><label>Child Added Goal</label>';
echo '<input value="', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_added_goal'] ?? '',
 '" name="child_added_goal" id="child_added_goal" type="text" style="width:400px;" maxlength="32">';
echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ),
 '</li>';
echo '<li><label>Child Cancel Goal</label>';
echo '<input value="', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_cancel_goal'] ?? '',
 '" name="child_cancel_goal" id="child_cancel_goal" type="text" style="width:400px;" maxlength="32">';
echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ),
 '</li>';
echo '<li><label>Parent Added Goal</label>';
echo '<input value="', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_added_goal'] ?? '',
 '" name="parent_added_goal" id="parent_added_goal" type="text" style="width:400px;" maxlength="32">';
echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ),
 '</li>';
echo '<hr>';
echo '<h3>Inheritance</h3>';
$m4is_g61yzqs7ecta0xztr70d7v = [
'id' => 'whitelist_memberships',
'label' => 'Automatically innher membership tags',

];
echo '<li><label>Automatically Inherit Membership Tags</label>';
m4is_dv250ra9xbtaf::m4is_hqy46nhxr7gxhmfvdx( 'whitelist_memberships',
 $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['whitelist_memberships'], $m4is_g61yzqs7ecta0xztr70d7v );
echo '<li><label>Inherit Individual Tags</label>';

echo '<input value="', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_whitelist'], '" type="text" class="multitaglist" id="tag_whitelist" name="tag_whitelist[]" style="width:500px;">';

echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ), '</li>';
$m4is_7b2yfzk0054 = $this->m4is_wakhezyhahmq6s42cn55arnke04();
$m4is_g61yzqs7ecta0xztr70d7v = [
'class' =>
 'basic-single',
'id' => 'inherited_fields',
'multiple' => true,
'size' => 2,
'style' => 'width:400px;',
];
echo '<li><label>Inherited Fields</label>';

echo $this->m4is_pxqpc8vpph0tn5mv1ty4y4tvd->m4is_npdvp242vm6v81qannyq0n4ttf2zyxc2('inherited_fields[]', $m4is_7b2yfzk0054, $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['inherited_fields'],
 $m4is_g61yzqs7ecta0xztr70d7v );
echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ), '</li>';
echo '<hr>';
echo '<h3>Child Accounts</h3>';

$m4is_g61yzqs7ecta0xztr70d7v = [
'id' => 'child_count_add',
'class' => 'basic-single',
'style' => 'width:400px;',
];
$this_fields = array_merge(['' =>
 '(None)'], $m4is_7b2yfzk0054);
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_count_add'] = isset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_count_add'] ) ? $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_count_add'] : '';

echo '<li><label>Active Child Tag</label>';
echo '<input value="', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['active_child_tag'] ?? 0, '" type="text" class="taglistdropdown" id="active_child_tag" name="active_child_tag" style="width:500px;">';

echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ), '</li>';
echo '<hr>';
echo '<h3>Parent Accounts</h3>';
echo '<li><label>Parent Tags</label>';

echo '<input value="', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_tags'], '" type="text" class="multitaglist" id="parent_tags" name="parent_tags[]" style="width:500px;">';

echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ), '</li>';
echo '<li><label>Minimum Child Accounts</label>';
echo '<input value="',
 $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['max_child_accounts'], '"  name="max_child_accounts" id="max_child_accounts" type="number" min="-1" max="999999" class="">';

echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ), '</li>';
echo '<li><label>Additional Children Field</label>';
echo $this->m4is_pxqpc8vpph0tn5mv1ty4y4tvd->m4is_npdvp242vm6v81qannyq0n4ttf2zyxc2( 'child_count_add',
 $this_fields, $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_count_add'], $m4is_g61yzqs7ecta0xztr70d7v );
echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ),
 '</li>';
$m4is_rqxytszfq5v6syth1csqqxvy5 = floor( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_cache_ttl'] / 3600 );
$m4is_5rpce41pg = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 );

echo <<<HTMLBLOCK

				<li>
					<label>Parent Cache TTL</label>
					<input value="{$m4is_rqxytszfq5v6syth1csqqxvy5}"  name="parent_cache_ttl" id="parent_cache_ttl" type="number" min="4" max="744" class=""> hours
					{$m4is_5rpce41pg}
				</li>
			HTMLBLOCK;

$m4is_g61yzqs7ecta0xztr70d7v = [
'class' => 'basic-single',
'disabled' => ! isset($_GET['safety-override']),
'id' => 'parent_field',

'style' => 'width:400px;',
];
echo '<li><label>Parent/Child Field Match Field:</label>';
echo $this->m4is_pxqpc8vpph0tn5mv1ty4y4tvd->m4is_npdvp242vm6v81qannyq0n4ttf2zyxc2('parent_field',
 $m4is_spt4st2ech5, $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['parent_field'], $m4is_g61yzqs7ecta0xztr70d7v);
echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 );

echo '</ul>';
echo '<p><input type="submit" value="Update" class="button-primary"></p>';
echo '</form>';
}
elseif ( $m4is_aq3n8kjvpsvryrrf9exmx == 'tags' ) {
$this->m4is_6fqhj53g8qkdagd7p5vh11jxtf0npr();

}
elseif ( $m4is_aq3n8kjvpsvryrrf9exmx == 'about' ) {
$this->m4is_94a87fsk44jkmb0b8ggngjtg34a2s();
}
elseif ( $m4is_aq3n8kjvpsvryrrf9exmx == 'subscriptions' ) {
$this->m4is_z3td6p48pka0smegmc();

}
elseif( $m4is_aq3n8kjvpsvryrrf9exmx == 'teams' ) {
$this->m4is_46q0pxkr9c65rpb2d4ts89w96j();
}
$this->m4is_6cqpa52z();
}



private function m4is_kw4m24hf6() : void {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_mhqzty3k54fv->m4is_nj54edhem2n65zh8981a9c0hhp5adr6();

$_POST['child_added_actionset'] = empty( $_POST['child_added_goal'] ) ? $_POST['child_added_actionset'] ?? '' : '';
$_POST['child_cancel_actionset'] = empty( $_POST['child_cancel_goal'] ) ? $_POST['child_cancel_actionset'] ?? '' : '';

$_POST['parent_added_actionset'] = empty( $_POST['parent_added_goal'] ) ? $_POST['parent_added_actionset'] ?? '' : '';

$m4is_19x1c17et728k945 = [
'whitelist_memberships',

];
foreach( $m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7] = isset($_POST[$m4is_j8j55t8dz79m7]) ? (int) (bool) $_POST[$m4is_j8j55t8dz79m7] : $m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7];

}
isset( $_POST['parent_cache_ttl'] ) && $_POST['parent_cache_ttl'] = $_POST['parent_cache_ttl'] * 3600;
$m4is_19x1c17et728k945 = [
'active_child_tag',

'max_child_accounts',
'parent_cache_ttl',
];
foreach( $m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7] = isset( $_POST[$m4is_j8j55t8dz79m7] ) ? (int) $_POST[$m4is_j8j55t8dz79m7] : $m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7];

}
$m4is_19x1c17et728k945 = [
'child_count_add',
'parent_field',
'child_added_goal',
'child_cancel_goal',
'parent_added_goal',
];
foreach( $m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7] = isset( $_POST[$m4is_j8j55t8dz79m7] ) ? trim( $_POST[$m4is_j8j55t8dz79m7] ) : $m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7];

}
$m4is_19x1c17et728k945 = [
'inherited_fields',
'parent_tags',
'tag_whitelist',
];
foreach( $m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7] = isset( $_POST[$m4is_j8j55t8dz79m7] ) ? trim( implode( ',',
 $_POST[$m4is_j8j55t8dz79m7] ) ) : $m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7];
}
$m4is_19x1c17et728k945 = [
'child_added_actionset',

'child_cancel_actionset',
'parent_added_actionset',
];
foreach( $m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7] = isset( $_POST[$m4is_j8j55t8dz79m7] ) ? trim( $_POST[$m4is_j8j55t8dz79m7] ) : $m4is_8ew58cpxmftgpw93gdffm4s9bbwy[$m4is_j8j55t8dz79m7];

}
unset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['child_field'] );
if ( ! empty( $_POST['subscription'] ) ) {
unset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['subscriptions'] );

$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['subscriptions'] = array_map( 'intval', $_POST['subscription'] );
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['ecommerce'] = (int) ( array_sum( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['subscriptions'] ) > 0 );

}
if ( isset( $_POST['add-tag-grant'] ) ) {


$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_grants'][$_POST['tag']] = (int) $_POST['seats'];

}
if ( isset( $_POST['update-tag-grants'] ) ) {

$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_grants'] = $_POST['tag_grants'];

foreach( $_POST['tag_grants'] as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 =>
 $m4is_7s7xsd1vvg ) {

if ( $m4is_7s7xsd1vvg == 0 ) {
unset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_grants'][$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0] );

}
}
}
if ( isset( $_POST['add-tag-translation'] ) ) {

if ( $_POST['oldtag'] <> $_POST['newtag'] ) {


$_POST['oldtag'] = (int) $_POST['oldtag'];

$_POST['newtag'] = (int) $_POST['newtag'];
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_translation'][$_POST['oldtag']] = $_POST['newtag'];

}

if ( ( $_POST['oldtag'] == $_POST['newtag'] ) || $_POST['newtag'] == 0 ) {
unset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_translation'][$_POST['oldtag']] );

}
}
if ( isset( $_POST['update-tag-translation'] ) ) {


}
if ( isset( $_POST['form_name'] ) && $_POST['form_name'] = 'memberium/teams/delete' ) {
if ( ! empty( $_POST['delete'] ) ) {
foreach( $_POST['delete'] as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['teams'][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['field_name'];

m4is_wv1rppa066tww11snkg8g06rv922xj::m4is_th40h21mk6qkny74wjr4zhb( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh );
unset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['teams'][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] );

}
}
}
}
if ( isset( $_POST['form_name'] ) && $_POST['form_name'] = 'memberium/teams/add' ) {
if ( ! empty( $_POST['team_team_name'] ) && ! empty( $_POST['field_name'] ) && ! empty( $_POST['tags'] ) ) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['teams'][$_POST['field_name']] = [
'team_name' =>
 $_POST['team_team_name'] ?? '',
'field_name' => $_POST['field_name'],
'tags' => $_POST['tags'] ?? '',
];
}
}
$this->m4is_mhqzty3k54fv->m4is_kw4m24hf6( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy );

$this->m4is_132xe588j->m4is_r4c836v754();
}

private function m4is_wakhezyhahmq6s42cn55arnke04() : array {

$m4is_gqsc4mq3nmh1sr5dknx6119v7 = [
'AccountId',

'CreatedBy',
'DateCreated',
'Email',
'FirstName',
'Groups',
'Id',
'LastName',
'LastUpdated',
'LastUpdatedBy',
'Password',
'Validated',

$this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'password_field'),
$this->m4is_mhqzty3k54fv->m4is_jvjswjxb6h()
];


$m4is_7b2yfzk0054 = [];

$m4is_bydkx5mv3q2y0 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact', true );

foreach($m4is_bydkx5mv3q2y0 as $m4is_bbsta3mvjhhvh1x97vfpm9e) {

if (! in_array($m4is_bbsta3mvjhhvh1x97vfpm9e,
 $m4is_gqsc4mq3nmh1sr5dknx6119v7)) {
$m4is_7b2yfzk0054[$m4is_bbsta3mvjhhvh1x97vfpm9e] = $m4is_bbsta3mvjhhvh1x97vfpm9e;
}
}

return $m4is_7b2yfzk0054;

}

private function m4is_fcm3n0cgx6fc8qhazxyax() {

$m4is_kxrtgx9vnh7ravmbqnqxsrzc9 = [
'Address3Street1',
'Address3Street2',
'Address3Type',

'AssistantName',
'City2',
'City3',
'Fax1Type',
'Fax2Type',
'Phone3Type',
'Phone4Type',
'Phone5Type',
'ReferralCode',
'SpouseName',

$this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'password_field' ),
$this->m4is_mhqzty3k54fv->m4is_jvjswjxb6h()
];


$m4is_7b2yfzk0054 = [];

$m4is_bydkx5mv3q2y0 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact', true );

foreach( $m4is_bydkx5mv3q2y0 as $m4is_bbsta3mvjhhvh1x97vfpm9e ) {

if (in_array($m4is_bbsta3mvjhhvh1x97vfpm9e,
 $m4is_kxrtgx9vnh7ravmbqnqxsrzc9) || substr($m4is_bbsta3mvjhhvh1x97vfpm9e, 0, 1) == '_') {
$m4is_7b2yfzk0054[$m4is_bbsta3mvjhhvh1x97vfpm9e] = $m4is_bbsta3mvjhhvh1x97vfpm9e;

}
}

return $m4is_7b2yfzk0054;
}

private function m4is_z3td6p48pka0smegmc() {
$m4is_wrhk25dv4a = $this->m4is_qtdevdr1j2yfstdy4e9stttpznxdegf();

$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_mhqzty3k54fv->m4is_nj54edhem2n65zh8981a9c0hhp5adr6();
$m4is_htz6jhd987mvxr5j6w = $this->m4is_132xe588j->m4is_nna76543();

$m4is_6xj2zq4143f49mqz9p79f7brf3mv = m4is_bbwjksaqsay3yt68xq9afn::m4is_gh12fb5596s29bycerd7thz1x9dspt();
if ( ! empty( $m4is_htz6jhd987mvxr5j6w ) ) {
echo '<form method="post">';

echo '<table class="widefat">';
echo '<tr style="font-weight:bold;">';
echo '<td style="width:150px;">Children/Active Sub</td>';
echo '<td>Subscription Plan Name</td>';

echo '<td>Charge</td>';
echo '<td>Frequency</td>';
echo '<td>Cycles</td>';
echo '</tr>';
foreach( $m4is_htz6jhd987mvxr5j6w as $m4is_w7r18wnaph7pfebzbxjsnaswe48cs ) {
if ( $m4is_w7r18wnaph7pfebzbxjsnaswe48cs['Active'] ) {
$m4is_w7r18wnaph7pfebzbxjsnaswe48cs['name'] = $m4is_6xj2zq4143f49mqz9p79f7brf3mv[$m4is_w7r18wnaph7pfebzbxjsnaswe48cs['ProductId']]['ProductName'];

$m4is_w7r18wnaph7pfebzbxjsnaswe48cs['period'] = $m4is_wrhk25dv4a[$m4is_w7r18wnaph7pfebzbxjsnaswe48cs['Cycle']];
$m4is_w7r18wnaph7pfebzbxjsnaswe48cs['NumberOfCycles'] = isset( $m4is_w7r18wnaph7pfebzbxjsnaswe48cs['NumberOfCycles'] ) ? $m4is_w7r18wnaph7pfebzbxjsnaswe48cs['NumberOfCycles'] : 0;

$m4is_rqxytszfq5v6syth1csqqxvy5 = ( empty( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['subscriptions'][$m4is_w7r18wnaph7pfebzbxjsnaswe48cs['Id']] ) ? 0 : $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['subscriptions'][$m4is_w7r18wnaph7pfebzbxjsnaswe48cs['Id']] );

echo '<tr>';
echo '<td><input min=0 step=1 type="number" name="subscription[',$m4is_w7r18wnaph7pfebzbxjsnaswe48cs['Id'],']" value="',
 $m4is_rqxytszfq5v6syth1csqqxvy5, '" style="width:70px; !important"></td>';
echo '<td>', $m4is_w7r18wnaph7pfebzbxjsnaswe48cs['name'],
 '</td>';
echo '<td>$', $m4is_w7r18wnaph7pfebzbxjsnaswe48cs['PlanPrice'], '</td>';
echo '<td>', $m4is_w7r18wnaph7pfebzbxjsnaswe48cs['Frequency'],
 ' ', $m4is_w7r18wnaph7pfebzbxjsnaswe48cs['period'], '</td>';
echo '<td>', $m4is_w7r18wnaph7pfebzbxjsnaswe48cs['NumberOfCycles'] > 0 ? $m4is_w7r18wnaph7pfebzbxjsnaswe48cs['NumberOfCycles'] : 'Unlimited',
 '</td>';
echo '</tr>';
}
}
echo '</table>';
echo '<p><input type="submit" class="button-primary"></p>';
echo '</form>';
}
}
private function m4is_542tpd5sh() : array {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_mhqzty3k54fv->m4is_nj54edhem2n65zh8981a9c0hhp5adr6();

$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['teams'] ??= [];
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'contact',
 true );
$m4is_gqsc4mq3nmh1sr5dknx6119v7 = [
'Email',
'FirstName',
'LastName',
$this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' ),
$this->m4is_mhqzty3k54fv->m4is_jvjswjxb6h()
];
foreach( $m4is_7b2yfzk0054 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
if ( substr( $m4is_bbsta3mvjhhvh1x97vfpm9e, 0, 1 ) <> '_' || in_array( $m4is_bbsta3mvjhhvh1x97vfpm9e,
 $m4is_gqsc4mq3nmh1sr5dknx6119v7 ) || array_key_exists( $m4is_bbsta3mvjhhvh1x97vfpm9e, $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['teams'] ) ) {
unset( $m4is_7b2yfzk0054[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] );

}
}
return $m4is_7b2yfzk0054;
}
private function m4is_46q0pxkr9c65rpb2d4ts89w96j() : void {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_mhqzty3k54fv->m4is_nj54edhem2n65zh8981a9c0hhp5adr6();

$m4is_7b2yfzk0054 = $this->m4is_542tpd5sh();
$m4is_64p9ht6xej = '';
foreach( $m4is_7b2yfzk0054 as $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
$m4is_64p9ht6xej .= '<option value="' . $m4is_bbsta3mvjhhvh1x97vfpm9e . '">' . $m4is_bbsta3mvjhhvh1x97vfpm9e . '</option>';

}
echo <<<HTMLBLOCK

			<form method="post">
				<input type="hidden" name="form_name" value="memberium/teams/add">
				<table class="widefat">
					<thead>
						<th>Template Team Name</th>
						<th>Field Name</th>
						<th>Tags Given</th>
					</thead>
					<tr>
						<td><input name="team_team_name" type="text" required="required"></td>
						<td><select name="field_name">{$m4is_64p9ht6xej}</select></td>
						<td><input name="tags" type="text" size="40" class="multitaglist" required="required"></td>
					</tr>
					<tr>
						<td>
							<input type="submit" class="button-primary" value="Create Team">
						</td>
					</tr>
				</table>
			</form>
		HTMLBLOCK;

echo <<<HTMLBLOCK

			<table class="widefat" style="margin-top:20px;">
				<form method="post">
					<input type="hidden" name="form_name" value="memberium/teams/delete">
					<thead>
						<th>Delete</th>
						<th>Template Team Name</th>
						<th>Field Name</th>
						<th>Tags Given</th>
					</thead>
		HTMLBLOCK;

if ( ! empty( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['teams'] ) ) {
$m4is_d55p2ngawahjz1e = '<input type="submit" class="button-primary" value="Delete">';

foreach( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['teams'] as $m4is_7m8xpn4ftkw78pwyjeqtbb0m ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_7m8xpn4ftkw78pwyjeqtbb0m['field_name'];

$m4is_06c8s5xs94f91335gnaey25 = array_filter( explode( ',', $m4is_7m8xpn4ftkw78pwyjeqtbb0m['tags'] ) );
$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_p2hqsh5b9r262wb4gyvj2a0p85ngnc0f( $m4is_06c8s5xs94f91335gnaey25,
 true );
$m4is_06c8s5xs94f91335gnaey25 = implode( ', ', $m4is_06c8s5xs94f91335gnaey25 );
echo <<<HTMLBLOCK

					<tr>
						<td style="width:50px;"><input type="checkbox" name="delete[{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}]" value="1"></td>
						<td>{$m4is_7m8xpn4ftkw78pwyjeqtbb0m['team_name']}</td>
						<td>{$m4is_7m8xpn4ftkw78pwyjeqtbb0m['field_name']}</td>
						<td>{$m4is_06c8s5xs94f91335gnaey25}</td>
					</tr>
				HTMLBLOCK;

}
}
else {
echo '<tr><td colspan="4">No Teams Defined</td></tr>';
$m4is_d55p2ngawahjz1e = '';
}
echo <<<HTMLBLOCK

					</tr>
					<tr>
						<td>
							{$m4is_d55p2ngawahjz1e}
						</td>
					</tr>
				</form>
			</table>
		HTMLBLOCK;

}

function build_json_field_list() : string {
$m4is_bydkx5mv3q2y0 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact',
 true );
$m4is_37kyw4fjeymhxppt = [
[
'id' => '',
'text' => '(None)'
]
];
foreach ( $m4is_bydkx5mv3q2y0 as $m4is_bbsta3mvjhhvh1x97vfpm9e ) {

$m4is_37kyw4fjeymhxppt[] = [
'id' =>
 $m4is_bbsta3mvjhhvh1x97vfpm9e,
'text' => $m4is_bbsta3mvjhhvh1x97vfpm9e
];
}
return json_encode( $m4is_37kyw4fjeymhxppt );
}

function build_json_tag_list() : string {


$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true );



$m4is_06c8s5xs94f91335gnaey25 = (array) $m4is_06c8s5xs94f91335gnaey25['mc'];

$m4is_xyfzj0fnmp5g4 = [
[
'id' => 0,
'text' => '(None)'
]
];


foreach ( $m4is_06c8s5xs94f91335gnaey25 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {

$m4is_xyfzj0fnmp5g4[] = [
'id' =>
 $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' => "{$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0} ({$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh})",

];
}

return json_encode( $m4is_xyfzj0fnmp5g4 );
}

function m4is_qtdevdr1j2yfstdy4e9stttpznxdegf() : array {
return [
6 => 'Days',

3 => 'Weeks',
2 => 'Months',
1 => 'Years',
];
}

function m4is_6cqpa52z() {
$m4is_xyfzj0fnmp5g4 = $this->build_json_tag_list();
$m4is_37kyw4fjeymhxppt = $this->build_json_field_list();

$m4is_aggb31vr = m4is_w3pp5rsxdc03bns3::m4is_jzv3mdxqzxth481vapvxqkn5k8h();
echo <<<HTMLBLOCK

					<script>
						var actionsetlist = {$m4is_aggb31vr};
						var fieldlist     = {$m4is_37kyw4fjeymhxppt};
						var taglist       = {$m4is_xyfzj0fnmp5g4};
					</script>
				</div>
			</div>

		HTMLBLOCK;

}
/**
 * Displays the about tab.
 *
 * This function retrieves the version of the Memberium Umbrella Account Extension for Keap,
 * then outputs an HTML block that displays the title of the extension, the version, the copyright notice,
 * and a link to the documentation.
 *
 * @return void
 */


function m4is_94a87fsk44jkmb0b8ggngjtg34a2s() {
$m4is_t9svq56t4ysv1rsgy1g61g = $this->m4is_mhqzty3k54fv->m4is_5kywzj74m8ht8s0();

echo <<<HTMLBLOCK

		<h2>
			Memberium Team Account Extension for Keap</h2>
			<p>
				Version {$m4is_t9svq56t4ysv1rsgy1g61g}
			</p>
			<p>
				Copyright &copy; 2015-2024 David Bullock
			</p>
		<p>
		For documentation on this extension, please <a href="https://memberium.com/?p=12000" target="_blank">view our help page</a>.
		</p>
	HTMLBLOCK;

}

function m4is_4rtxh351vz26z99jnxgk9twhx( $m4is_pxqpc8vpph0tn5mv1ty4y4tvd, array $m4is_06c8s5xs94f91335gnaey25 ) {

$m4is_g61yzqs7ecta0xztr70d7v = [
'class' =>
 'basic-single', 
'echo' => false,
'required' => true, 
'style' => 'width:250px;margin-right:30px;' 
];
$m4is_h04yqn71v = ['0' => '(None)'] + $m4is_06c8s5xs94f91335gnaey25;

$m4is_s88kvcmy4 = $this->m4is_pxqpc8vpph0tn5mv1ty4y4tvd->m4is_npdvp242vm6v81qannyq0n4ttf2zyxc2( 'oldtag', $m4is_06c8s5xs94f91335gnaey25,
 '', $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_hcepwth93jp1v = $this->m4is_pxqpc8vpph0tn5mv1ty4y4tvd->m4is_npdvp242vm6v81qannyq0n4ttf2zyxc2( 'newtag',
 $m4is_h04yqn71v, '', $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = __( 'Set Tag Translation', 'memberium' );


echo <<<HTMLBLOCK

		<form method="post">
			<p>
				<label>Create New Tag Translation</label>
				{$m4is_s88kvcmy4}
				{$m4is_hcepwth93jp1v}
				<input type="submit" class="button-primary" name="add-tag-translation" value="{$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0}">
			</p>
		</form>
	HTMLBLOCK;

}

function m4is_6fqhj53g8qkdagd7p5vh11jxtf0npr() {

$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();


$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true )['mc'];

$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_mhqzty3k54fv->m4is_nj54edhem2n65zh8981a9c0hhp5adr6();


$m4is_7w5fxrsy3cg85sagvh = $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_grants'] ?? [];

$m4is_mjebegxxwgrxv9td = count( $m4is_7w5fxrsy3cg85sagvh );


echo '<h3>Tag Grants</h3>';

if ( $m4is_mjebegxxwgrxv9td > 0 ) {
$this->m4is_qd095567rcredag3mcg0pg0n( $m4is_7w5fxrsy3cg85sagvh, $m4is_06c8s5xs94f91335gnaey25 );

} else {

echo '<p>You have no tags assigned to give child account slots.  Create a new tag grant below:</p>';
}

$this->m4is_849p3tc8etsnxap2sw33zc2h( $this->m4is_pxqpc8vpph0tn5mv1ty4y4tvd,
 $m4is_06c8s5xs94f91335gnaey25 );

echo '<hr>';
echo '<h3>Tag Translations</h3>';

if ( ! empty( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_translation'] ) ) {
$this->m4is_kb09a1exby4wr($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['tag_translation'],
 $m4is_06c8s5xs94f91335gnaey25);
} else {

echo '<p>You have no tag translations created.  Create a new tag translation below:</p>';

}

$this->m4is_4rtxh351vz26z99jnxgk9twhx( $this->m4is_pxqpc8vpph0tn5mv1ty4y4tvd, $m4is_06c8s5xs94f91335gnaey25 );
}

function m4is_qd095567rcredag3mcg0pg0n( array $m4is_7w5fxrsy3cg85sagvh,
 array $m4is_06c8s5xs94f91335gnaey25) {

$output = '<form method="post">
				<table class="widefat">
				<tr style="font-weight:bold;">
				<td style="width:150px;">Children/Tag</td>
				<td style="width:100px;">Tag Id</td>
				<td>Tag Name</td>
				</tr>';


foreach( $m4is_7w5fxrsy3cg85sagvh as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$output .= '<tr>
						<td><input min=0 step=1 type="number" name="tag_grants[' . $m4is_j8j55t8dz79m7 . ']" value="' . $m4is_rqxytszfq5v6syth1csqqxvy5 . '" style="width:70px; !important"></td>
						<td>' . $m4is_j8j55t8dz79m7 . '</td>
						<td>' . $m4is_06c8s5xs94f91335gnaey25[$m4is_j8j55t8dz79m7] . '</td>
						</tr>';

}

$output .= '</table>
					<p><input type="submit" class="button-primary" name="update-tag-grants" value="Update"></p>
					</form>';

echo $output;
}

function m4is_849p3tc8etsnxap2sw33zc2h( $m4is_pxqpc8vpph0tn5mv1ty4y4tvd, array $m4is_06c8s5xs94f91335gnaey25) {

$m4is_g61yzqs7ecta0xztr70d7v = [
'class' =>
 'basic-single',
'echo' => false,
'required' => true,
'style' => 'width:250px;margin-right:30px;',
];

$m4is_45a857vx58aez0 = $m4is_pxqpc8vpph0tn5mv1ty4y4tvd->m4is_npdvp242vm6v81qannyq0n4ttf2zyxc2('tag',
 $m4is_06c8s5xs94f91335gnaey25, '', $m4is_g61yzqs7ecta0xztr70d7v);

$output = <<<HTMLBLOCK

			<form method="post">
				<p>
					<label>Create New Tag Grant</label>
					$m4is_45a857vx58aez0
					Seats: <input name="seats" type="number" min="1" value="1" style="width:60px;margin-right:30px;">
					<input type="submit" class="button-primary" name="add-tag-grant" value="Add Tag Grant">
				</p>
			</form>
			HTMLBLOCK;


echo $output;
}

function m4is_kb09a1exby4wr( array $m4is_g68nz8p0, array $m4is_06c8s5xs94f91335gnaey25 ) {

$output = <<<HTMLBLOCK

			<form method="post">
				<table class="widefat">
					<tr style="font-weight:bold;">
						<td style="width:350px;">Original Tag</td>
						<td style="width:350px;">New Tag</td>
						<td></td>
					</tr>
		HTMLBLOCK;


foreach( $m4is_g68nz8p0 as $m4is_nykzytqpmvz4ajpwm => $m4is_6b1zv1sey ) {
$output .= <<<HTMLBLOCK

				<tr>
					<td>{$m4is_06c8s5xs94f91335gnaey25[$m4is_nykzytqpmvz4ajpwm]} ({$m4is_nykzytqpmvz4ajpwm})</td>
					<td>{$m4is_06c8s5xs94f91335gnaey25[$m4is_6b1zv1sey]} ({$m4is_6b1zv1sey})</td>
				</tr>
			HTMLBLOCK;

}

$output .= <<<HTMLBLOCK

				</table>
			</form>
		HTMLBLOCK;

echo $output;
}
}
