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

class m4is_zbm5j479wh72fyzzd31c {
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
add_filter( 'memberium/modules/active/names', [$this,
 'm4is_v9eeymdh30mk'], 10, 1 );
add_action( 'memberium_admin_menu_addons', [$this, 'm4is_symh1fmfbxesp4xd1dgp8p5rc'] );
}
function m4is_v9eeymdh30mk( $m4is_jq2e3019hp45103bhm95sxmccqd8 ) {
return array_merge( $m4is_jq2e3019hp45103bhm95sxmccqd8,
 [ 'Affiliate Leaderboards for Keap' ] );
}
function m4is_symh1fmfbxesp4xd1dgp8p5rc( $m4is_w0y3c6pa7wp01b ) {
add_submenu_page( $m4is_w0y3c6pa7wp01b,
 'Affiliates', 'Affiliates', 'manage_options', 'memberium-affiliate-leaderboards', [$this, 'm4is_fgzyb4tw9r601c'] );
}
function m4is_fgzyb4tw9r601c() {
require_once __DIR__ . '/screen.php';

}

}