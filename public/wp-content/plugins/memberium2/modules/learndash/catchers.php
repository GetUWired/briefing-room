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


class_exists( 'm4is_5f4j9e1q39p6vht95a8xheen' ) || die();

final class m4is_465bq4tc9zr7fwj6f5171reej {
private static object $m4is_132xe588j;
private static object $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;

private static string $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;
private function __construct() {

}
public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'memberium';

}




public static function m4is_f8kyp1k5endaedfe6w2t7s8y30exq() : void {
if ( ! self::$m4is_132xe588j->m4is_43td8pwqhr6wcp55( $_POST['signature'],
 $_POST['parameters'] ) ) {
wp_die( _x( 'Security Check Failed - Signature Validation Error', self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858,
 self::$m4is_1n5r8f23byhh2xkx2t4pncj99ey858 ) );
exit;
}
if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'memberium/learndash/delete_history/' . (int) $_POST['user_id'] ) ) {
wp_die( 'Security Check Failed - Nonce Validation Error' );

}
$m4is_r53562w9befcb2kh7rm4p7n5 = unserialize( base64_decode( $_POST['parameters'] ) );
wp_set_current_user( $m4is_r53562w9befcb2kh7rm4p7n5['admin_id'] );

learndash_delete_user_data( $m4is_r53562w9befcb2kh7rm4p7n5['user_id'] );
wp_set_current_user( $m4is_r53562w9befcb2kh7rm4p7n5['user_id'] );

self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_jav8wf80kpnr24zg3dppaay8brq4z( $m4is_r53562w9befcb2kh7rm4p7n5['completion'] );
}
}