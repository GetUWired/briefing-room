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
m4is_p3vcn3vj22xp7f::m4is_de8n8qy4mmtnkq33p();

final class m4is_p3vcn3vj22xp7f {
static function m4is_de8n8qy4mmtnkq33p() {

$m4is_3g72bes0yrrrz9bgydb7eme20g6 = m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_t13d80yjczb01vd0wejdnnjskxb9q( true );

$m4is_af9g0qkgzayxs21sg388 = '';
foreach ($m4is_3g72bes0yrrrz9bgydb7eme20g6 as $tag_category ) {
$m4is_af9g0qkgzayxs21sg388 .= '<option value="' . $tag_category['id'] . '">' . $tag_category['name'] . '</option>';

}
$create_membership_help = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 8853 );
$create_tag_help = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 8852 );

$create_drip_help = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 8856 );
$create_category_help = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 8858 );

echo <<<HTMLBLOCK

			<h3>Tag Builder Pro</h3>
			<table class="widefat">
				<form method="POST" action="">
					<tr>
						<td>Create Membership Level:</td>
						<td>
							<input name="tag_name" type="text" size="20" /> &nbsp;
							<select name="category_id" class="basic-single" style="width:200px;">{$m4is_af9g0qkgzayxs21sg388}</select> &nbsp;
							<input type=checkbox name="create_set" value=all /> Include SUSP/CANC &nbsp;
							<input type="submit" name="create-membership" value="Create" class="button-primary" /> &nbsp; {$create_membership_help}
						</td>
					</tr>
				</form>

				<form method="POST" action="">
					<tr>
						<td>Create New Tag:</td>
						<td>
						<input name=tag_name type=text size=20 required=required /> &nbsp;
						<select name=category_id class=basic-single required=required style="width:200px;">{$m4is_af9g0qkgzayxs21sg388}</select> &nbsp;
						<input type="submit" name="create-tag" value="Create" class="button-primary" /> &nbsp; {$create_tag_help}
					</td>
				</tr>
				</form>

				<form method="POST" action="">
					<tr>
						<td>Create Drip Tags:</td>
						<td>
							<input name="tag_name" type="text" size="20" required=required /> &nbsp;
							Start: <input name=start type=number min=1 value=1 max=300 size=3 required=required /> &nbsp;
							End: <input name=end type=number min=1 value=1 max=300 size=3 required=required/> &nbsp;
							<select name="category_id" class="basic-single" style="width:200px;">{$m4is_af9g0qkgzayxs21sg388}</select> &nbsp;
							<input type="submit" name="create-tags" value="Create All" class="button-primary" /> &nbsp;
							{$create_drip_help}
						'</td>
					</tr>
				</form>

				<form method="POST" action="">
					<tr>
						<td>Create New Category:</td>
						<td>
							<input name=category_name type=text size=20 required=required /> &nbsp;
							<input type="submit" name="create-category" value="Create" class="button-primary" /> &nbsp;
							{$create_category_help}
						</td>
					</tr>
				</form>
			</table>
			&nbsp;<br />
		HTMLBLOCK;

}
}