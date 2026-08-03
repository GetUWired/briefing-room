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

current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
$m4is_1b9h7td3nqy9scpx = empty( $_GET['id'] ) ? 0 : (int) $_GET['id'];

if ( ! array_key_exists( $m4is_1b9h7td3nqy9scpx, $this->m4is_y7084n6v67jme9va8yz ) || ! is_array( $this->m4is_y7084n6v67jme9va8yz[$m4is_1b9h7td3nqy9scpx] ) ) {
echo '<p>Invalid Membership Id</p>';

return;
}
$m4is_h9g6e5cga = $this->m4is_y7084n6v67jme9va8yz[$m4is_1b9h7td3nqy9scpx];
$m4is_4k8qejpkk8yvp = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'dynamic_menus' );
if ( empty( $m4is_h9g6e5cga['main_id'] ) ) {
$m4is_h9g6e5cga['main_id'] = $m4is_1b9h7td3nqy9scpx;
}
if ( empty($m4is_h9g6e5cga['addltag_ids'] ) ) {
$m4is_h9g6e5cga['addltag_ids'] = '';

}
if ( empty( $m4is_h9g6e5cga['roles'] ) ) {
$m4is_h9g6e5cga['roles'] = [];
}
$m4is_mwg5khf6xs = '';
if (is_array($this->m4is_7kwstyma ) ) {
foreach ($this->m4is_7kwstyma as $m4is_pe0qmemqt ) {
$m4is_fe42r2djxgf1h7pt = in_array( $m4is_pe0qmemqt['id'],
 $m4is_h9g6e5cga['roles'] ) ? ' selected="selected" ' : '';
$m4is_mwg5khf6xs .= "<option value='{$m4is_pe0qmemqt['id']}' {$m4is_fe42r2djxgf1h7pt}>{$m4is_pe0qmemqt['name']}</option>";

}
}
$m4is_z4np8zw58hwrw = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 );
$m4is_t4x26qsaxt07kg7w = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 );

$m4is_2whn2bchkj4vah76 = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 );
$m4is_1fa4z638t43d9zs9 = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 );

$m4is_kkh9mcd3zycekz15eh5n = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 );
$m4is_wbpscb4j = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 );

echo <<<HTMLBLOCK


	<div class="wrap memberium">
		<p>Return to <a href="?page=memberium-memberships">Membership Screen</a></p>
		<form method="post">
			<input name="action" value="edit" type="hidden">
			<h1 style="margin-bottom:10px;">Membership Level Editor</h1><br />
			<label style="margin-left:0px;">Membership Name:</label>
			<input type="text" name="name" value="{$m4is_h9g6e5cga['name']}" required="required" style="font-size:180%; margin-top:-10px;">
			<ul>
				<h3>Tags</h3>
				<li>
					<label style="color:green;"><strong>Access Tag</strong></label>
					<input disabled="disabled" value="{$m4is_1b9h7td3nqy9scpx}" type="text" class="requiredtaglistdropdown" required="required" style="width:300px;"> {$m4is_z4np8zw58hwrw}
				</li>
				<li>
					<label style="color:green;"><strong>Add\'l Access Tags</strong></label>
					<input value="{$m4is_h9g6e5cga['addltag_ids']}" type="text" class="multitaglist" name="addltag_ids" style="width:500px;"> {$m4is_t4x26qsaxt07kg7w}
				</li>
				<li>
					<label style="color:red;"><strong>Payment Failure</strong></label>
					<input value="{$m4is_h9g6e5cga['payf_id']}" name="payf_id" type="text" class="taglistdropdown" style="width:350px;"> {$m4is_2whn2bchkj4vah76}
				</li>
				<li>
					<label style="color:red;"><strong>Cancellation</strong></label>
					<input value="{$m4is_h9g6e5cga['cancel_id']}" name="cancel_id" type="text" class="taglistdropdown" style="width:350px;"> {$m4is_1fa4z638t43d9zs9}
				</li>
				<li>
					<label style="color:red;"><strong>Suspension Tag</strong></label>
					<input value="{$m4is_h9g6e5cga['suspend_id']}" name="suspend_id" type="text" class="taglistdropdown" style="width:350px;">' {$m4is_kkh9mcd3zycekz15eh5n}
				</li>
				<hr>
				<h3>Level</h3>
				<li>
					<label>Level</label>
					<input type="number" value="{$m4is_h9g6e5cga['level']}" name="level" min="0" max="999999" required="required" style="text-align:right; width: 80px;"> {$m4is_wbpscb4j}
				</li>
				<hr>
				<h3>Special Pages</h3>
				<li>
					<label>Home Page Priority</label>
					<input type="number" value="{$m4is_h9g6e5cga['login_redirect_priority']}" name="login_redirect_priority" min="0" max="999999" required="required" style="text-align:right; width: 80px;">
				</li>
				<li>
					<label>First Login Page</label>
					<input value="{$m4is_h9g6e5cga['first_login_page']}" name="first_login_page" type="text" class="pagelistdropdown" style="width:500px;">
				</li>
				<li>
					<label>Membership Home Page</label>
					<input value="{$m4is_h9g6e5cga['login_page']}" name="login_page" type="text" class="pagelistdropdown" style="width:500px;">
				</li>
				<li>
					<label>Membership Logout Page</label>
					<input value="{$m4is_h9g6e5cga['logout_page']}" name="logout_page" type="text" class="pagelistdropdown" style="width:500px;">
				</li>
				<li>
					<label>PAYF Home Page</label>
					<input value="{$m4is_h9g6e5cga['payf_homepage']}" name="payf_homepage" type="text" class="pagelistdropdown" style="width:500px;">
				</li>
				<li>
				<li>
					<label>SUSP Home Page</label>
					<input value="{$m4is_h9g6e5cga['susp_homepage']}" name="susp_homepage" type="text" class="pagelistdropdown" style="width:500px;">
				</li>
				<li>
				<li>
					<label>CANC Home Page</label>
					<input value="{$m4is_h9g6e5cga['canc_homepage']}" name="canc_homepage" type="text" class="pagelistdropdown" style="width:500px;">
				</li>
				<li>
				<hr>
				<h3>Theme</h3>
				<li>
					<label>Theme</label>
					<input value="{$m4is_h9g6e5cga['theme']}" name="theme" type="text" class="themelistdropdown" style="width:250px;">
				</li>
HTMLBLOCK;

if ( $m4is_4k8qejpkk8yvp ) {
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Exclude from Personal Menus','dynamic_menus', 0, $m4is_h9g6e5cga['dynamic_menus'] );

}
else {
echo '<input type="hidden" value="' . $m4is_h9g6e5cga['dynamic_menus'] . '" name="dynamic_menus">';
}
echo <<<HTMLBLOCK

	<hr>
		<h3>Roles</h3>
		<li>
			<label>WordPress Roles</label>
			<input value="" name="roles[]" type="hidden">
			<select style="width:400px; height:1.6em;" class="roles-selector" name="roles[]" multiple="multiple" placeholder="Select WordPress roles to apply on login">
				<option value="">(None)</option>
				{$m4is_mwg5khf6xs}
			</select>
		</li>
		<br />
HTMLBLOCK;

do_action('memberium/memberships/edit', $m4is_h9g6e5cga);
echo <<<HTMLBLOCK

		<hr>
	</ul>
	<input type="submit" class="button-primary" value="Update Membership Level">
	</form>
</div>

HTMLBLOCK;


$m4is_5cwxte5s0w98metxktf = wp_get_themes();
$m4is_t27g2c70k89zj1zxpdkz833kr45hx = [];
$m4is_t27g2c70k89zj1zxpdkz833kr45hx[] = [
'id' =>
 '',
'text' => '(Default)'
];
foreach ($m4is_5cwxte5s0w98metxktf as $m4is_hce1y1a4qd65zhnwsj => $m4is_8msjtr5p ) {
$m4is_t27g2c70k89zj1zxpdkz833kr45hx[] = [
'id' =>
 $m4is_hce1y1a4qd65zhnwsj,
'text' => $m4is_8msjtr5p->Name
];
}
$m4is_t27g2c70k89zj1zxpdkz833kr45hx = json_encode($m4is_t27g2c70k89zj1zxpdkz833kr45hx );

unset($m4is_hce1y1a4qd65zhnwsj, $m4is_8msjtr5p, $m4is_5cwxte5s0w98metxktf );

$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true );

$m4is_06c8s5xs94f91335gnaey25 = $m4is_06c8s5xs94f91335gnaey25['mc'];
$m4is_ntwdtvd857wpp5qmp1edbfp92c3 = [];
$m4is_ntwdtvd857wpp5qmp1edbfp92c3[] = [
'id' =>
 0,
'text' => '(None)'
];

$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy = [];
$m4is_y7084n6v67jme9va8yz = (array) m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('memberships');

foreach ($m4is_y7084n6v67jme9va8yz as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ($m4is_j8j55t8dz79m7 <> $m4is_1b9h7td3nqy9scpx) {
$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy[] = $m4is_j8j55t8dz79m7;

$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy[] = $m4is_rqxytszfq5v6syth1csqqxvy5['payf_id'];
$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy[] = $m4is_rqxytszfq5v6syth1csqqxvy5['cancel_id'];

$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy[] = $m4is_rqxytszfq5v6syth1csqqxvy5['suspend_id'];
}
}
$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy = array_unique(array_filter($m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy ) );

foreach ( (array) $m4is_06c8s5xs94f91335gnaey25 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
if (! in_array($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy ) ) {
$m4is_ntwdtvd857wpp5qmp1edbfp92c3[] = [
'id' => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' =>
 "{$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0} ({$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh})"
];
$m4is_t56es14q9tpecqca[] = [
'id' => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,

'text' => "{$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0} ({$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh})",
];
}
}
$m4is_ntwdtvd857wpp5qmp1edbfp92c3 = json_encode($m4is_ntwdtvd857wpp5qmp1edbfp92c3 );

$m4is_t56es14q9tpecqca = json_encode($m4is_t56es14q9tpecqca );
unset($m4is_06c8s5xs94f91335gnaey25, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 );
$m4is_kezq8tet = m4is_dv250ra9xbtaf::m4is_dn7r9j7anh(); 
echo '<script>';
echo 'var themelist       = ',
 $m4is_t27g2c70k89zj1zxpdkz833kr45hx, ';';
echo 'var taglist         = ', $m4is_ntwdtvd857wpp5qmp1edbfp92c3, ';';
echo 'var requiredtaglist = ',
 $m4is_t56es14q9tpecqca, ';';
echo 'var pagelist        = ', $m4is_kezq8tet, ';';
echo '</script>';
