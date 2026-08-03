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


final class m4is_7ks6k7f9w92jrf483gdz9qjf2jj {
static $m4is_132xe588j;
public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}

public static function m4is_ny4t6h1500( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0, int $m4is_h7zwy5f0w3y9gx3wm = 0 ) : int {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_wk4dh1rnd3wmwvsggq51nhn87 == 0 ? self::$m4is_132xe588j->m4is_vd3qpw0vkdm() : (int) $m4is_wk4dh1rnd3wmwvsggq51nhn87;

$m4is_h7zwy5f0w3y9gx3wm = (int) $m4is_h7zwy5f0w3y9gx3wm;
if ( function_exists( 'badgeos_get_users_points' ) ) {
$m4is_dwpnfs7m20z4fqd3s3y0da96j16dk = (int) badgeos_get_users_points( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

}
elseif (function_exists( 'gamipress_get_user_points' ) ) {
$m4is_dwpnfs7m20z4fqd3s3y0da96j16dk = (int) gamipress_get_user_points( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

}
else {
$m4is_j8j55t8dz79m7 = empty( $m4is_h7zwy5f0w3y9gx3wm ) ? '_memberium_points' : "_memberium_{$m4is_h7zwy5f0w3y9gx3wm}_points";

$m4is_dwpnfs7m20z4fqd3s3y0da96j16dk = (int) get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_j8j55t8dz79m7, true );
}
return $m4is_dwpnfs7m20z4fqd3s3y0da96j16dk;

}

public static function m4is_tzgz7hwsj80gjfvwed5(int $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0, int $m4is_twava9fkt6wtz73h6q3m93jctj53peht = 0,
 int $m4is_h7zwy5f0w3y9gx3wm = 0) : int {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_wk4dh1rnd3wmwvsggq51nhn87 == 0 ? self::$m4is_132xe588j->m4is_vd3qpw0vkdm() : $m4is_wk4dh1rnd3wmwvsggq51nhn87;

if ($m4is_wk4dh1rnd3wmwvsggq51nhn87 == 0) {
return 0;
}
$m4is_h7zwy5f0w3y9gx3wm = self::m4is_3b123qe3g6($m4is_h7zwy5f0w3y9gx3wm);
if (function_exists('badgeos_update_users_points') ) {
$m4is_v27wgj8t45h0q0 = badgeos_update_users_points($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_twava9fkt6wtz73h6q3m93jctj53peht);
badgeos_log_users_points($m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_twava9fkt6wtz73h6q3m93jctj53peht,
 $m4is_v27wgj8t45h0q0, 0, 0);
}
elseif (function_exists('gamipress_update_user_points') ) {
$m4is_v27wgj8t45h0q0 = gamipress_update_user_points($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_twava9fkt6wtz73h6q3m93jctj53peht);
gamipress_log_user_points($m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_twava9fkt6wtz73h6q3m93jctj53peht,
 $m4is_v27wgj8t45h0q0, 0, 0);
}
else {
$m4is_j8j55t8dz79m7 = empty($m4is_h7zwy5f0w3y9gx3wm) ? '_memberium_points' : "_memberium_{$m4is_h7zwy5f0w3y9gx3wm}_points";

$m4is_v27wgj8t45h0q0 = $m4is_twava9fkt6wtz73h6q3m93jctj53peht + self::m4is_ny4t6h1500($m4is_wk4dh1rnd3wmwvsggq51nhn87);
update_user_meta($m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_j8j55t8dz79m7, $m4is_v27wgj8t45h0q0);
}
return $m4is_v27wgj8t45h0q0;
}

public static function m4is_xvr491xk34c9ar( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') : string {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['user_id'] ) ? (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['user_id'] : self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_h7zwy5f0w3y9gx3wm = isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['type'] ) ? (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['type'] : '';

$m4is_dwpnfs7m20z4fqd3s3y0da96j16dk = self::m4is_ny4t6h1500($m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_h7zwy5f0w3y9gx3wm);
return (string) $m4is_dwpnfs7m20z4fqd3s3y0da96j16dk;

}




private static function m4is_3b123qe3g6($m4is_dc72vqz279p8grt7pk37nj5qfh5vm = null) : string {
if (empty($m4is_dc72vqz279p8grt7pk37nj5qfh5vm) ) {
return '';

}
if (function_exists('gamipress_update_user_points') ) {
$m4is_h7zwy5f0w3y9gx3wm = gamipress_get_points_type( $m4is_dc72vqz279p8grt7pk37nj5qfh5vm );

}
else {
$m4is_h7zwy5f0w3y9gx3wm = (string) $m4is_dc72vqz279p8grt7pk37nj5qfh5vm;
}
return $m4is_h7zwy5f0w3y9gx3wm;
}
}
