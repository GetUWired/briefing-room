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

final class m4is_a5hmk6h2a9ketwya0n5h6767axsaj7qp {

public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {


$this->m4is_5eragr7sh2yyj356m();
$this->m4is_f7h20k6rc();

}

private function m4is_5eragr7sh2yyj356m() {
add_filter( 'memberium/posts/unenhanced', [$this, 'm4is_k884h95yzaeww1gd0r34tbfrkd3'],
 10, 1 );
add_filter( 'um_login_allow_nonce_verification', [$this, 'm4is_ym4hx0yre1fw1tstw'], 1, 1 );
add_filter( 'init', [$this, 'm4is_f7h20k6rc'],
 1, 0 );

}
public function m4is_f7h20k6rc() {
remove_filter( 'init', 'um_login_allow_nonce_verification', 'um_login_nonce_safety',
 99 );
}

public function m4is_k884h95yzaeww1gd0r34tbfrkd3( array $m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j = [] ) : array {
$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'um_directory';

$m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j[] = 'um_form';
return $m4is_3gjcj4fycn6r4tq4ye18vhwj6vv040j;
}

public function m4is_ym4hx0yre1fw1tstw( $m4is_bakq3rbxwr9zp9pc ) {
wp_set_current_user( 0 );

return $m4is_bakq3rbxwr9zp9pc;
}

}