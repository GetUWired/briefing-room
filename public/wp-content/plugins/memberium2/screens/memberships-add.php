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
$m4is_r5wa9d1wz39q5580cww9sr97wj44 = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 1222,
 'Click Here' );
$m4is_brgkabs7adsdtjfr0dg7vzbt8h7p = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000, 'Click Here' );
$m4is_79dkcv8k2qjg = m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Exclude from Personal Menus',
'dynamic_menus', 0, 0, false );
$m4is_mwg5khf6xs = '';
foreach ( $this->m4is_7kwstyma as $m4is_pe0qmemqt ) {
$m4is_mwg5khf6xs .= sprintf( '<option value="%d">%s</option>',
 $m4is_pe0qmemqt['id'], $m4is_pe0qmemqt['name'] );
}
echo <<<HTMLBLOCK

	<div class="wrap memberium">
		<p>Return to <a href="?page=memberium-memberships">Membership Screen</a></p>
		<form method="post" action="?page=memberium-memberships">
			<input name="action" value="add" type="hidden">

			<h1 style="margin-bottom:20px;">Create Membership Tags and Level</h1>
			<p style="margin-bottom:20px;">
				Looking for help to understand how to create a membership level or questions about what to input where? {$m4is_r5wa9d1wz39q5580cww9sr97wj44}
			</p>
				<label style="margin-left:0px;">Membership Name:</label>
				<input type="text" name="name" value="" placeholder="Enter Membership Name" required="required" size="25" tabindex="1" style="font-size:150%; margin-top:-10px;">
			<ul>
			<h3>Tags</h3>
			<li>
				<label><strong style="color:green;">Access Tag</strong> <strong>*</strong></label>
				<input value="" name="main_id" type="text" placeholder="This setting is required" class="requiredtaglistdropdown" required="required" style="width:350px;">
			</li>
			<li>
				<label><strong style="color:red;">Payment Failure (PAYF)</strong></label>
				<input value="0" name="payf_id" type="text" class="taglistdropdown" style="width:350px;">
			</li>
			<li>
				<label><strong style="color:red;">Cancellation (CANC)</strong></label>
				<input value="0" name="cancel_id" type="text" class="taglistdropdown" style="width:350px;">
			</li>
			<li>
				<label><strong style="color:red;">Suspension Tag (SUSP)</strong></label>
				<input value="0" name="suspend_id" type="text" class="taglistdropdown" style="width:350px;">
			</li>
			<hr>
			<h3>Level</h3>
			<li>
				<label>Level</label>
				<input type="number" value="0" name="level" min="0" max="999999" style="text-align:right; width: 80px;">
			</li>
			<hr>
			<h3>Special Pages</h3>
			<li>
				<label>First Login Page</label>
				<input value="0" name="first_login_page" type="text" class="pagelistdropdown" style="width:500px;">
			</li>
			<li>
				<label>Membership Home Page</label>
				<input value="0" name="login_page" type="text" class="pagelistdropdown" style="width:500px;">
			</li>
			<li>
				<label>Membership Logout Page</label>
				<input value="0" name="logout_page" type="text" class="pagelistdropdown" style="width:500px;">
			</li>
			<li>
				<label>PAYF Home Page</label>
				<input value="0" name="payf_homepage" type="text" class="pagelistdropdown" style="width:500px;">
			</li>
			<li>
				<label>SUSP Home Page</label>
				<input value="0" name="susp_homepage" type="text" class="pagelistdropdown" style="width:500px;">
			</li>
			<li>
				<label>CANC Home Page</label>
				<input value="0" name="canc_homepage" type="text" class="pagelistdropdown" style="width:500px;">
			</li>
			<li>
			<hr>
			<h3>Theme</h3>
			<li>
				<label>Theme</label>
				<input value="" name="theme" type="text" class="themelistdropdown" style="width:250px;">
			</li>
			{$m4is_79dkcv8k2qjg}
			<hr>
			<h3>Roles</h3>
			<li style="margin-bottom:10px;">
				<label>WordPress Roles</label>
				<input value="" name="roles[]" type="hidden">
				<select style="width:400px; height:1.6em;" class="roles-selector" name="roles[]" multiple="multiple" placeholder="Select WordPress roles to apply on login">
					<option value="">(None)</option>
					{$m4is_mwg5khf6xs}
				</select>
			</li>
			<hr>
HTMLBLOCK;

do_action( 'memberium/memberships/edit', [] );
echo <<<HTMLBLOCK

			</ul>
			<input type="submit" class="button-primary" value="Create Membership Level">
		</form>
		<p style="margin-bottom:20px;">
			Looking for help to understand how to create a membership level or questions about what to input where? {$m4is_brgkabs7adsdtjfr0dg7vzbt8h7p}
		</p>
	</div>
HTMLBLOCK;

$m4is_t27g2c70k89zj1zxpdkz833kr45hx = m4is_dv250ra9xbtaf::m4is_tfgtbqq1d25bqt5er88w13rd();
$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true )['mc'];
 
$m4is_t56es14q9tpecqca = [];
$m4is_ntwdtvd857wpp5qmp1edbfp92c3 = [];
$m4is_ntwdtvd857wpp5qmp1edbfp92c3[] = [
'id' => 0,
'text' =>
 '(None)'
];

$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy = [];
$m4is_y7084n6v67jme9va8yz = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('memberships');

foreach ($m4is_y7084n6v67jme9va8yz as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy[] = $m4is_j8j55t8dz79m7;

$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy[] = $m4is_rqxytszfq5v6syth1csqqxvy5['payf_id'];
$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy[] = $m4is_rqxytszfq5v6syth1csqqxvy5['cancel_id'];

$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy[] = $m4is_rqxytszfq5v6syth1csqqxvy5['suspend_id'];
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

'text' => "{$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0} ({$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh})"
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
