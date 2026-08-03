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

final class m4is_2je384w8shtarxre8pn6 {
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_5eragr7sh2yyj356m();
}
private function m4is_5eragr7sh2yyj356m() {
add_filter( 'bbp_get_topic_subscribers',
 [$this, 'm4is_yjme4as4ej'] );
}
function m4is_yjme4as4ej( $m4is_ey8h8t3xkngm1a3e2yg87sv6gm ) {
if ( ! empty( $m4is_ey8h8t3xkngm1a3e2yg87sv6gm ) && is_array( $m4is_ey8h8t3xkngm1a3e2yg87sv6gm ) ) {
global $wpdb;

$m4is_h9112qaetdsej94cf3xpc9n3htce = implode( ',', $m4is_ey8h8t3xkngm1a3e2yg87sv6gm );
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT user_id FROM {$wpdb->usermeta} WHERE user_id IN (" . $m4is_h9112qaetdsej94cf3xpc9n3htce . ") AND `meta_key` = 'memberium_optout' AND `meta_value` = 1";

$m4is_5mdy77n481grk = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_ey8h8t3xkngm1a3e2yg87sv6gm = array_diff( $m4is_ey8h8t3xkngm1a3e2yg87sv6gm,
 $m4is_5mdy77n481grk );
}
return $m4is_ey8h8t3xkngm1a3e2yg87sv6gm;
}
}