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
$m4is_ycxkat5eez4a7jswr0b77s = count( $this->m4is_y7084n6v67jme9va8yz );

$m4is_x8y6kmrg0wk0tk8hfjjz = '';
$membership_help = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 1222 );
$m4is_22vwsyqyex8hrzbbn5adm1mz = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( false );

$m4is_22vwsyqyex8hrzbbn5adm1mz = is_array( $m4is_22vwsyqyex8hrzbbn5adm1mz['mc'] ) ? $m4is_22vwsyqyex8hrzbbn5adm1mz['mc'] : array();

if ( $m4is_ycxkat5eez4a7jswr0b77s == 0 ) {
$m4is_x8y6kmrg0wk0tk8hfjjz = '<tr><td colspan="99">You have no membership levels created.</td></tr>';

$m4is_xckn1phw09em0qkqe29sedhv09ek = '';
}
else {
$m4is_xckn1phw09em0qkqe29sedhv09ek = '<input type="submit" name="main_action" value="Update Membership Levels" class="button-primary" />';

foreach ($this->m4is_y7084n6v67jme9va8yz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_h9g6e5cga ) {
$m4is_8msjtr5p = wp_get_theme($m4is_h9g6e5cga['theme'] );

$m4is_6pyx9m8dy9tm3j7aq36p = ! empty($m4is_22vwsyqyex8hrzbbn5adm1mz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['name'] ) ? $m4is_22vwsyqyex8hrzbbn5adm1mz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['name'] . ' (' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ')' : '<em>Tag Missing</em>';

$m4is_6pyx9m8dy9tm3j7aq36p = ! empty($m4is_22vwsyqyex8hrzbbn5adm1mz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] ) ? $m4is_22vwsyqyex8hrzbbn5adm1mz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] . ' (' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ')' : '<em>Tag Missing</em>';

$m4is_h9g6e5cga['level'] = isset( $m4is_h9g6e5cga['level'] ) ? (int) $m4is_h9g6e5cga['level'] : 0;
$m4is_h9g6e5cga['login_redirect_priority'] = isset( $m4is_h9g6e5cga['login_redirect_priority'] ) ? (int) $m4is_h9g6e5cga['login_redirect_priority'] : 0;

$m4is_gaxy4hnerf72p05w59xec = empty( $_GET['page'] ) ? '' : (int) $_GET['page'];
$m4is_1b9h7td3nqy9scpx = empty( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) ? '' : (int) $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;

$m4is_9m6d05g0zgqk2am9yjj = get_submit_button( 'Delete', 'delete', 'main_action[' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ']', false );

$m4is_z4ts5pa39jf1yhjb4 = get_post( $m4is_h9g6e5cga['login_page'] );
if ( is_a( $m4is_z4ts5pa39jf1yhjb4, 'WP_Post' ) ) {
$m4is_3pewe93dwpn3w620k4bbdra3dfeg3n = empty($m4is_z4ts5pa39jf1yhjb4->post_title ) ? '(Default)' : $m4is_z4ts5pa39jf1yhjb4->post_title;

$m4is_eaget8v3z5k08849x = sprintf( '<a href="%s">%s (%d)</a>', get_permalink( $m4is_h9g6e5cga['login_page'] ), $m4is_3pewe93dwpn3w620k4bbdra3dfeg3n,
 $m4is_h9g6e5cga['login_page'] );
}
else {
$m4is_eaget8v3z5k08849x = '(Default)';
}
$m4is_x8y6kmrg0wk0tk8hfjjz .= <<<HTMLBLOCK

			<tr>
				<td>
					<a class="button-secondary" href="?page=memberium-memberships&action=edit&id={$m4is_1b9h7td3nqy9scpx}">Edit</a>
				</td>
				<td>
					<strong><a href="?page=memberium-memberships&action=edit&id={$m4is_1b9h7td3nqy9scpx}">{$m4is_h9g6e5cga['name']}</a></strong>
				</td>
				<td>
					{$m4is_6pyx9m8dy9tm3j7aq36p}
				</td>
				<td>
					<input type=number min=0 max=99999 maxlength=6 name="level[{$m4is_1b9h7td3nqy9scpx}]" value="{$m4is_h9g6e5cga['level']}" style="width:80px;">
				</td>
				<td>
					<input type=number min=0 max=99999 maxlength=6 name="login_redirect_priority[{$m4is_1b9h7td3nqy9scpx}]" value="{$m4is_h9g6e5cga['login_redirect_priority']}" style="width:80px;">
				</td>
				<td>
					{$m4is_eaget8v3z5k08849x}
				</td>
				<td>
					{$m4is_9m6d05g0zgqk2am9yjj}
				</td>
			</tr>
		HTMLBLOCK;

}
}
echo <<<HTMLBLOCK

<div class="wrap">
	<!-- h1>Memberium Membership Settings< -->
	<h3>Current Membership Levels {$membership_help}</h3>
	<div style="width:90%;">
		<p>
			These are the membership levels you have already set up, click the name of a membership level below to edit it or click the "Create New Membership Level" button to add a new membership level.
		</p>
		<hr />
		<form method="POST" action="">
			<input type="submit" name="main_action" value="Update Levels" style="position:absolute;left:-100%;" />
			<table class="widefat" style="white-space:nowrap;">
				<tr style="background-color:#eee">
				<th style="width:50px;"></th>
					<th style="width:250px;"><strong>Level&nbsp;Name</strong></th>
					<th><strong>Tag</strong></th>
					<th style="width:75px;"><strong>Level</strong></th>
					<th style="width:75px;"><strong>Login Priority</strong></th>
					<th><strong>Homepage</strong></th>
					<th></th>
				</tr>
				{$m4is_x8y6kmrg0wk0tk8hfjjz}
			</table>

		<p>
		<a href="?page=memberium-memberships&action=add" class="button-primary">Create New Membership Level</a> &nbsp;
		{$m4is_xckn1phw09em0qkqe29sedhv09ek}
	</form>
	<hr />
</div>
HTMLBLOCK;

