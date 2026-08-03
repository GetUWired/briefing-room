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

final class m4is_ff0ss66j {
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}
private function __construct() {
$this->m4is_5eragr7sh2yyj356m();
}
private function m4is_5eragr7sh2yyj356m() {
add_action( 'memberium/session/updated',
 [$this, 'm4is_2ycycyk2xxsjjrg7sz7sgsd1j4'], 10, 2 );
if ( is_admin() ) {
add_filter( 'memberium/modules/active/names', [$this, 'm4is_y89x3aj8tzzpeak2z80p'],
 10, 1 );
}
}
function m4is_y89x3aj8tzzpeak2z80p($m4is_jq2e3019hp45103bhm95sxmccqd8 = []) {
return array_merge($m4is_jq2e3019hp45103bhm95sxmccqd8,
 ['Peepso Groups for Memberium']);
}
function m4is_2ycycyk2xxsjjrg7sz7sgsd1j4($m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_6mctr922hbmncpwfrp0x2k) {
global $wpdb;

if (! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return;
}
$m4is_06c8s5xs94f91335gnaey25 = isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] ) ? explode(',',
 $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags']) : [];
if ( empty( $m4is_06c8s5xs94f91335gnaey25 ) ) {
return;
}

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `gm_group_id` FROM `{$wpdb->prefix}peepso_group_members` WHERE `gm_user_id` = {$m4is_wk4dh1rnd3wmwvsggq51nhn87}";

$m4is_n79rn4yv31hrq9g7a88yr91f = implode( ',', array_keys($wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K ) ) );
if (! empty($m4is_n79rn4yv31hrq9g7a88yr91f) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `post_id`, `meta_value` FROM `{$wpdb->postmeta}` WHERE `post_id` IN ( {$m4is_n79rn4yv31hrq9g7a88yr91f} ) AND `meta_key` = 'autojoin' AND `meta_value` > ''";

$m4is_na5g20asc42rw0eze43ewgvhnm43494m = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K);
if (! empty($m4is_na5g20asc42rw0eze43ewgvhnm43494m) ) {
foreach($m4is_na5g20asc42rw0eze43ewgvhnm43494m as $m4is_1fcvn7dh2emr8qdtqak2x5) {
if (! in_array($m4is_1fcvn7dh2emr8qdtqak2x5->meta_value,
 $m4is_06c8s5xs94f91335gnaey25) ) {

$peepso = new PeepSoGroupUser($m4is_1fcvn7dh2emr8qdtqak2x5->post_id, $m4is_wk4dh1rnd3wmwvsggq51nhn87);

$peepso->member_leave();
}
}
}
}

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT distinct(`gm_group_id`) FROM `{$wpdb->prefix}peepso_group_members` WHERE `gm_user_id` <> {$m4is_wk4dh1rnd3wmwvsggq51nhn87}";

$m4is_n79rn4yv31hrq9g7a88yr91f = implode(',', array_keys($wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K) ) );
if (! empty($m4is_n79rn4yv31hrq9g7a88yr91f) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `post_id`, `meta_value` FROM `{$wpdb->postmeta}` WHERE `post_id` IN ( {$m4is_n79rn4yv31hrq9g7a88yr91f} ) AND `meta_key` = 'autojoin' AND `meta_value` > ''";

$m4is_na5g20asc42rw0eze43ewgvhnm43494m = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K);
if (! empty($m4is_na5g20asc42rw0eze43ewgvhnm43494m) ) {
foreach($m4is_na5g20asc42rw0eze43ewgvhnm43494m as $m4is_1fcvn7dh2emr8qdtqak2x5) {
if (in_array($m4is_1fcvn7dh2emr8qdtqak2x5->meta_value,
 $m4is_06c8s5xs94f91335gnaey25) ) {

$peepso = new \PeepSoGroupUser( $m4is_1fcvn7dh2emr8qdtqak2x5->post_id, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$peepso->member_join();
}
}
}
}
}
}