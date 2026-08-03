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

final class m4is_d1yhzb308y {
public const M4IS_KKTKMDB3TC53V2FWJJY17SB7QZACKK3 = 1;
public const M4IS_MZFK0XGMY77AX1YB3HZ = 2;
public const M4IS_F8YNNE10 = 3;

public const M4IS_1GY8E121C7PWQVD2AJB1 = 4;
private static int $m4is_9qdvfav7y;
private static array $m4is_zsfpw7bn6zgaqz0waafk71m;

private function __construct() {

}

public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_9qdvfav7y = 0;

self::$m4is_zsfpw7bn6zgaqz0waafk71m = [
self::M4IS_KKTKMDB3TC53V2FWJJY17SB7QZACKK3 => 'ERROR',
self::M4IS_MZFK0XGMY77AX1YB3HZ => 'WARNING',

self::M4IS_F8YNNE10 => 'INFO',
self::M4IS_1GY8E121C7PWQVD2AJB1 => 'DEBUG',
];
}

public static function m4is_maqnmt1fpvm2jfscrawnzhcegavpk( int $m4is_pzeqetyttg644ahb8fb ) : void {
self::$m4is_9qdvfav7y = $m4is_pzeqetyttg644ahb8fb;

}

public static function m4is_dbhzxqsvnnx8sj7dbm3yj9cpywa( int $m4is_pzeqetyttg644ahb8fb, string $m4is_5tmqg45z37r82cfb67prh ) : void {
if ( self::$m4is_9qdvfav7y < $m4is_pzeqetyttg644ahb8fb ) {
return;

}
$m4is_kg8cewng9 = self::$m4is_zsfpw7bn6zgaqz0waafk71m[ $m4is_pzeqetyttg644ahb8fb ] ?? (string) $m4is_pzeqetyttg644ahb8fb;
error_log( sprintf( 'Memberium: [%s] %s',
 $m4is_kg8cewng9, $m4is_5tmqg45z37r82cfb67prh ) );
}

public static function m4is_4y97spaegmw0( string $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 = '',
 string $m4is_95jcy59jv50devc8s3bd = '', int $m4is_1e44v06vtqjzg21vcnyxt6zeykry = 0, string $m4is_a6btn376p23vccn8a = '', $m4is_d60kn1d3yvprp62rs332 = '' ) : void {
if (wp_doing_cron()) {
return;

}
if (is_admin()) {
return;
}
$m4is_qm78qahrsjrp9v9vf2phj31x = $_SERVER['REQUEST_TIME_FLOAT'] ?? microtime(true);
$m4is_vmn8bp85fdtp4fqyh4rkwnhkxz = m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z();

$m4is_v9txc27f0cfyb34req = $m4is_vmn8bp85fdtp4fqyh4rkwnhkxz . '::' . $m4is_qm78qahrsjrp9v9vf2phj31x;
$m4is_gb01jqxh9ek2m = $m4is_v9txc27f0cfyb34req . ' :: ' . microtime(true);

$m4is_gb01jqxh9ek2m .= ' :: ' . (function_exists('get_current_user_id') ? get_current_user_id() : 0);
if (function_exists('current_filter') ) {
$m4is_gb01jqxh9ek2m .= ' :: ' . current_filter();

}
$m4is_gb01jqxh9ek2m .= ' :: ';
$m4is_gb01jqxh9ek2m .= basename($m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7) . ' -> ' . $m4is_95jcy59jv50devc8s3bd . ' -> ' . $m4is_1e44v06vtqjzg21vcnyxt6zeykry . " :: ";

if (! empty($m4is_d60kn1d3yvprp62rs332) ) {
$m4is_gb01jqxh9ek2m .= $m4is_a6btn376p23vccn8a . ' = ';
if (is_array($m4is_d60kn1d3yvprp62rs332) || is_object($m4is_d60kn1d3yvprp62rs332) ) {
$m4is_gb01jqxh9ek2m .= print_r($m4is_d60kn1d3yvprp62rs332,
 true);
}
elseif (is_bool($m4is_d60kn1d3yvprp62rs332) ) {
$m4is_gb01jqxh9ek2m .= $m4is_d60kn1d3yvprp62rs332 ? 'True' : 'False';
}
else {
$m4is_gb01jqxh9ek2m .= $m4is_d60kn1d3yvprp62rs332;

}
}
else {
$m4is_gb01jqxh9ek2m .= $m4is_a6btn376p23vccn8a;
}
$m4is_gb01jqxh9ek2m .= "\n";
$m4is_n5gga2mkt5yxfn22b228m58wjwyedk5k = defined( 'MEMBERIUM_DEBUGLOG' ) ? constant( 'MEMBERIUM_DEBUGLOG' ) : '';

if ( $m4is_n5gga2mkt5yxfn22b228m58wjwyedk5k === 'error_log:' ) {
error_log( $m4is_gb01jqxh9ek2m );
}
elseif ( $m4is_n5gga2mkt5yxfn22b228m58wjwyedk5k !== '' ) {
file_put_contents( $m4is_n5gga2mkt5yxfn22b228m58wjwyedk5k,
 $m4is_gb01jqxh9ek2m, FILE_APPEND | LOCK_EX );
}
}
}
