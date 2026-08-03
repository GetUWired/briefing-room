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

final class m4is_488enn5hrknvgtmb1cxvm3t3vkdkmc0x {
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_z6c3r724qhd();
}
function m4is_z6c3r724qhd() {
if ( ! is_admin() ) {
require_once __DIR__ . '/frontend.php';

new m4is_c7665dztd9tk();
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
require_once __DIR__ . '/webhooks.php';
m4is_6wd41gv9t9cpazmha1r::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
}
else {
add_filter( 'memberium/modules/active/names', function( $m4is_jq2e3019hp45103bhm95sxmccqd8 ) {
return array_merge( $m4is_jq2e3019hp45103bhm95sxmccqd8,
 ['Spiffy for Memberium'] );
});
}
}
}