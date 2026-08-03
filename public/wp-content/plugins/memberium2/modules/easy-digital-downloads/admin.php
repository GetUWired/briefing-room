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


class_exists( 'm4is_2jmhz15g' ) || die();

final class m4is_wg3d7jdjd6w62g9h9ntprnke {
private $m4is_1090xawqcx3q9p;
private $m4is_92hgcnbwe;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
add_action( 'admin_init', [$this, 'm4is_cmdwra5kyw39gn1ptag2c7f2'] );

add_action( 'admin_init', [$this, 'm4is_z1900bx0bxyhm1'] );
}
function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_92hgcnbwe = m4is_2jmhz15g::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_1090xawqcx3q9p = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}



function m4is_z1900bx0bxyhm1() {
add_meta_box( 'memberium\edd\actions',
'Memberium for EDD', [$this, 'm4is_m4k01yw4b1414t8axa4sa6s8w3tw1'], 'download', 'side' );
add_action( 'save_post_download', [$this,
 'm4is_cygbmtqyf3nqpg2y'], 10, 3 );
}

function m4is_m4k01yw4b1414t8axa4sa6s8w3tw1( WP_Post $m4is_z4ts5pa39jf1yhjb4 ) {
$m4is_06c8s5xs94f91335gnaey25 = $this->m4is_92hgcnbwe->m4is_32rzh6s8fx9cespy( $m4is_z4ts5pa39jf1yhjb4->ID );

$m4is_8sj3c21s = __( 'Access Tag', 'memberium' );
$m4is_xrj5s67cyvwby1 = __( 'Cancel Tag', 'memberium' );
$m4is_5wkz55crt6jmzh10cm3symc0y = __( 'Payment Failure Tag',
 'memberium' );
$m4is_1r7dbveqtj0f161b = __( 'Trial Tag', 'memberium' );
$m4is_vmhtx2ecrnzjpy = wp_nonce_field( 'edd_download_actions',
 "memberium_edd_download_nonce_{$m4is_z4ts5pa39jf1yhjb4->ID}", true, false );
echo <<<HTMLBLOCK

			{$m4is_vmhtx2ecrnzjpy}
			<label for="_memberium_access_tag">
				{$m4is_8sj3c21s}:
			</label>
			<input name="_memberium_access_tag" class="taglistdropdown" style="width:100%; max-width:100%" value="{$m4is_06c8s5xs94f91335gnaey25['main']}">
			<br /><br />

			<label for="_memberium_payf_tag">
				{$m4is_5wkz55crt6jmzh10cm3symc0y}:
			</label>
			<input name="_memberium_payf_tag"  class="taglistdropdown" style="width:100%; max-width:100%" value="{$m4is_06c8s5xs94f91335gnaey25['payf']}">
			<br /><br />

			<label for="_memberium_trial_tag">
				{$m4is_1r7dbveqtj0f161b}:
			</label>
			<input name="_memberium_trial_tag" class="taglistdropdown" style="width:100%; max-width:100%" value="{$m4is_06c8s5xs94f91335gnaey25['trial']}">
			<br /><br />

			<label for="_memberium_canc_tag">
				{$m4is_xrj5s67cyvwby1}:
			</label>
			<input name="_memberium_canc_tag" class="taglistdropdown" style="width:100%; max-width:100%" value="{$m4is_06c8s5xs94f91335gnaey25['canc']}">
			<br /><br />
		HTMLBLOCK;

}
function m4is_cygbmtqyf3nqpg2y( int $m4is_tz1rt7sbq40fade6e6rx, WP_Post $m4is_z4ts5pa39jf1yhjb4, bool $m4is_nt48femkg6za9v5mn1sr23m62k) {
if ( ! $this->m4is_1090xawqcx3q9p->m4is_6j5ywapypexcz3j158m8wsdkn0aav( $m4is_tz1rt7sbq40fade6e6rx,
 "memberium_edd_download_nonce_{$m4is_tz1rt7sbq40fade6e6rx}", 'edd_download_actions', 'edit_posts' ) ) {
return;
}
$m4is_19x1c17et728k945 = [
'_memberium_access_tag',

'_memberium_canc_tag',
'_memberium_payf_tag',
'_memberium_trial_tag',
];
foreach ( $m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
if ( empty( $_POST[$m4is_j8j55t8dz79m7] ) ) {
delete_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_j8j55t8dz79m7 );
}
else {
update_post_meta( $m4is_tz1rt7sbq40fade6e6rx, $m4is_j8j55t8dz79m7, trim( $_POST[$m4is_j8j55t8dz79m7],
 ',' ) );
}
}
}

}

