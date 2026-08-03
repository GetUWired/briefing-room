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


class_exists( 'm4is_ckv379vnjr0dx37' ) || die();


final class m4is_xjap5emdxf7e30t89kgrm05ev0ben0 {

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_5eragr7sh2yyj356m();
}

private function m4is_5eragr7sh2yyj356m() {
add_action( 'admin_head',
 [ $this, 'm4is_9hw4hbew4a1pct5hpc148' ] );



$this->m4is_cyf9gczv3h3hf0hf6qyhp47p();
}
public function m4is_9hw4hbew4a1pct5hpc148() : void {
echo <<<HTMLBLOCK

		<style>
			#bb_redirection,
			#bp-member-type-redirection {
			display: none !important;
			}
			</style>
		HTMLBLOCK;

}

private function m4is_cyf9gczv3h3hf0hf6qyhp47p() {
if ( ! class_exists( 'BP_Core_Members_Switching' ) ) {
return;
}
return;

$m4is_abykqxm5dwnr8nf = BP_Core_Members_Switching::get_instance();

remove_action( 'personal_options', [$m4is_abykqxm5dwnr8nf, 'action_personal_options'] );
remove_filter( 'ms_user_row_actions', [$m4is_abykqxm5dwnr8nf,
 'filter_user_row_actions'] );
remove_filter( 'user_row_actions', [$m4is_abykqxm5dwnr8nf, 'filter_user_row_actions'] );
}


function m4is_c4a22gs7abca( array $m4is_h9g6e5cga ) : void {
if ( ! function_exists( 'bp_get_member_types' ) ) {
return;

}
$m4is_63jp3myxhpk1eyb606fb = bp_get_member_types( [], '' );
if ( empty( $m4is_63jp3myxhpk1eyb606fb ) || ! is_array( $m4is_63jp3myxhpk1eyb606fb ) ) {
return;

}
echo <<<HTMLBLOCK

			<h3>BuddyPress</h3>
			<li>
			<label>Profile Type</label>
			<input value="" name="buddypress_profile_type" type="hidden">
			<select style="width:400px; height:1.6em;" class="roles-selector" name="buddypress_profile_type" placeholder="Select the BuddyPress profile type to apply on login">
			<option value="">(None)</option>
		HTMLBLOCK;

$m4is_h9g6e5cga['buddypress_profile_type'] = empty( $m4is_h9g6e5cga['buddypress_profile_type'] ) ? '' : $m4is_h9g6e5cga['buddypress_profile_type'];

foreach( $m4is_63jp3myxhpk1eyb606fb as $m4is_j8j55t8dz79m7 => $m4is_fh91430wnqcvjs3 ) {
$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = empty( $m4is_fh91430wnqcvjs3->labels['name'] ) ? ucwords( $m4is_j8j55t8dz79m7 ) : $m4is_fh91430wnqcvjs3->labels['name'];

if ( ! empty( $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 ) ) {
$m4is_fe42r2djxgf1h7pt = $m4is_h9g6e5cga['buddypress_profile_type'] == $m4is_j8j55t8dz79m7 ? ' selected ' : '';

printf( '<option value="%s" %s>%s</option>', $m4is_j8j55t8dz79m7, $m4is_fe42r2djxgf1h7pt, $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 );

}
}
$m4is_7vdc65w311rh47hp6jgrm3jwk5v6kvsc = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 );
echo <<<HTMLBLOCK

			</select>{$m4is_7vdc65w311rh47hp6jgrm3jwk5v6kvsc}
			</li><br />
		HTMLBLOCK;

}

function m4is_4rr4d1cpgz95n9twams9hz3syjtzr( array $m4is_y7084n6v67jme9va8yz, int $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, array $m4is_z4ts5pa39jf1yhjb4 ) : array {
$m4is_j8j55t8dz79m7 = 'buddypress_profile_type';

$m4is_y7084n6v67jme9va8yz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh][$m4is_j8j55t8dz79m7] = empty( $m4is_y7084n6v67jme9va8yz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh][$m4is_j8j55t8dz79m7] ) ? '' : $m4is_y7084n6v67jme9va8yz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh][$m4is_j8j55t8dz79m7];

if ( isset( $m4is_z4ts5pa39jf1yhjb4['buddypress_profile_type'] ) ) {
$m4is_y7084n6v67jme9va8yz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh][$m4is_j8j55t8dz79m7] = $m4is_z4ts5pa39jf1yhjb4[$m4is_j8j55t8dz79m7];

}
return $m4is_y7084n6v67jme9va8yz;
}
}

