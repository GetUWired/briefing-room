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



final class m4is_ng2r3s7ssv4q4m74fys4db49a7es16 {
private const CACHE_GROUP = 'memberium/sessions';

private const CACHE_TTL = 3600;
private const RING_CACHE_SIZE = 5;
private const SESSION_TTL = HOUR_IN_SECONDS * 12;
private const USERMETA_KEY = 'memberium/session';

private const M4IS_CX6F06C1BYA8TX804QHWYJ81Y8P74 = 202407251615;
private const M4IS_E88ZJK4VRCEZXCB100A0V = 2 * MINUTE_IN_SECONDS;

private static $m4is_132xe588j;
private static $m4is_2nh9zt3nqsx;
private static $m4is_wv62bgave2h0vc9hv;


private function __construct() {

}

public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();


self::$m4is_2nh9zt3nqsx = null;
self::$m4is_wv62bgave2h0vc9hv = [];
}


public static function m4is_qwpwj640q( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : array {
$m4is_6mctr922hbmncpwfrp0x2k = self::m4is_qhdcdj80n8xrmrz7rr2dze934qg( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( self::m4is_cgbymn27sf8gh( $m4is_6mctr922hbmncpwfrp0x2k ) ) {
self::m4is_s8qn2pysr0jkbdn1k( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_6mctr922hbmncpwfrp0x2k = self::m4is_tcvca707rcq9b( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
return $m4is_6mctr922hbmncpwfrp0x2k;

}

public static function m4is_tcvca707rcq9b( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : array {
global $wpdb;
if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
self::m4is_s8qn2pysr0jkbdn1k( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

return [];
}
if ( ( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'id', $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) === false ) {
self::m4is_s8qn2pysr0jkbdn1k( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

return [];
}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

delete_option( 'um_cache_userdata_' . $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_6mctr922hbmncpwfrp0x2k = [];
$m4is_6mctr922hbmncpwfrp0x2k = self::m4is_vaxh9cy6gr1xbfc3h7badq103hcnh( $m4is_6mctr922hbmncpwfrp0x2k,
 $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );
if ( user_can( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'manage_options' ) ) {
self::m4is_a36wqzt5pv5tgs6eaag7f44c8( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_6mctr922hbmncpwfrp0x2k );
return $m4is_6mctr922hbmncpwfrp0x2k;
}
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) self::$m4is_132xe588j->m4is_3mtg6vbzen6kxzzc9q2gc4g3dw( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );

}
}
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
self::m4is_a36wqzt5pv5tgs6eaag7f44c8( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_6mctr922hbmncpwfrp0x2k );

return $m4is_6mctr922hbmncpwfrp0x2k;
}
self::$m4is_132xe588j->m4is_jz9ygsb79rajnhabv9( true );
self::$m4is_132xe588j->m4is_5vtbryfazyjf979ttdx0kp( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
self::$m4is_132xe588j->m4is_mz8ypkzzr4fxz8e42njma37v6ge02( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

$m4is_cyg7rcfhzagmm5v = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, false );
$m4is_06c8s5xs94f91335gnaey25 = empty( $m4is_cyg7rcfhzagmm5v['Groups'] ) ? [] : array_filter( explode( ',',
 $m4is_cyg7rcfhzagmm5v['Groups'] ) );
$m4is_6mctr922hbmncpwfrp0x2k = self::m4is_tnk7qsqsmvj53xd( $m4is_6mctr922hbmncpwfrp0x2k, $m4is_cyg7rcfhzagmm5v );

$m4is_6mctr922hbmncpwfrp0x2k = self::m4is_ysdhvbdh50( $m4is_6mctr922hbmncpwfrp0x2k, $m4is_cyg7rcfhzagmm5v );
$m4is_6mctr922hbmncpwfrp0x2k = self::m4is_zndr590m7g3ab1ra6kdjtaz( $m4is_6mctr922hbmncpwfrp0x2k,
 $m4is_06c8s5xs94f91335gnaey25 );
$m4is_6mctr922hbmncpwfrp0x2k = self::m4is_trds009f( $m4is_6mctr922hbmncpwfrp0x2k, $m4is_06c8s5xs94f91335gnaey25 );

$m4is_6mctr922hbmncpwfrp0x2k = self::$m4is_132xe588j->m4is_yftnaz8hf6kdysxjrkqdjdvs( $m4is_6mctr922hbmncpwfrp0x2k );
$m4is_6mctr922hbmncpwfrp0x2k = self::$m4is_132xe588j->m4is_34eadgcgvcr1zn( $m4is_6mctr922hbmncpwfrp0x2k );

$m4is_6mctr922hbmncpwfrp0x2k = apply_filters( 'memberium_session_filter', $m4is_6mctr922hbmncpwfrp0x2k );
$m4is_6mctr922hbmncpwfrp0x2k = apply_filters( 'memberium/session/filter',
 $m4is_6mctr922hbmncpwfrp0x2k );
self::m4is_70165bss8( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_cyg7rcfhzagmm5v );
if ( false ) {

$m4is_6mctr922hbmncpwfrp0x2k = self::$m4is_132xe588j->m4is_gjxp4j5x04k( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_6mctr922hbmncpwfrp0x2k );
}
if ( did_action( 'init' ) ) {
self::$m4is_132xe588j->m4is_f54f6mxb3zka1m( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
else {
}
self::$m4is_132xe588j->m4is_jz9ygsb79rajnhabv9( false );
ksort( $m4is_6mctr922hbmncpwfrp0x2k );
self::m4is_a36wqzt5pv5tgs6eaag7f44c8( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_6mctr922hbmncpwfrp0x2k );
do_action('memberium/session/updated', $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_6mctr922hbmncpwfrp0x2k);




if ( ! empty( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['roles'] ) ) {
self::$m4is_132xe588j->m4is_7q9wm5mc2x36( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['roles'],
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
do_action( 'memberium/session/created', $m4is_6mctr922hbmncpwfrp0x2k );
return $m4is_6mctr922hbmncpwfrp0x2k;

}

public static function m4is_prgfd97b8r9yz9( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, string $m4is_ze4gc5gdxe0vk8nf0zg7 = '', string $m4is_j8j55t8dz79m7 = '',
 $m4is_syqymyz40rx4xgtqp8475ffwzw = '' ) {
$m4is_6mctr922hbmncpwfrp0x2k = self::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_hartbe843crydzh = isset( $m4is_6mctr922hbmncpwfrp0x2k[$m4is_ze4gc5gdxe0vk8nf0zg7] ) ? $m4is_6mctr922hbmncpwfrp0x2k[$m4is_ze4gc5gdxe0vk8nf0zg7] : [];

if ( empty( $m4is_j8j55t8dz79m7 ) ) {
return empty( $m4is_hartbe843crydzh ) ? [] : $m4is_hartbe843crydzh;
}
return empty( $m4is_hartbe843crydzh[$m4is_j8j55t8dz79m7] ) ? $m4is_syqymyz40rx4xgtqp8475ffwzw : $m4is_hartbe843crydzh[$m4is_j8j55t8dz79m7];

}

public static function m4is_9t91sx0acvf1cc2h3qzmqer( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, string $m4is_ze4gc5gdxe0vk8nf0zg7 = '',
 string $m4is_j8j55t8dz79m7 = '', $m4is_syqymyz40rx4xgtqp8475ffwzw = '' ) {
$m4is_ze4gc5gdxe0vk8nf0zg7 = strtolower( $m4is_ze4gc5gdxe0vk8nf0zg7 );

$m4is_j8j55t8dz79m7 = strtolower( $m4is_j8j55t8dz79m7 );
$m4is_6mctr922hbmncpwfrp0x2k = self::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_hartbe843crydzh = isset( $m4is_6mctr922hbmncpwfrp0x2k['keap'][$m4is_ze4gc5gdxe0vk8nf0zg7] ) ? $m4is_6mctr922hbmncpwfrp0x2k['keap'][$m4is_ze4gc5gdxe0vk8nf0zg7] : [];

if ( empty( $m4is_j8j55t8dz79m7 ) ) {
return empty( $m4is_hartbe843crydzh ) ? [] : $m4is_hartbe843crydzh;
}
return empty( $m4is_hartbe843crydzh[$m4is_j8j55t8dz79m7] ) ? $m4is_syqymyz40rx4xgtqp8475ffwzw : $m4is_hartbe843crydzh[$m4is_j8j55t8dz79m7];

}

public static function m4is_pcb5ffn5nrn( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, string $m4is_ze4gc5gdxe0vk8nf0zg7, string $m4is_j8j55t8dz79m7,
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_ze4gc5gdxe0vk8nf0zg7 = strtolower( $m4is_ze4gc5gdxe0vk8nf0zg7 );
$m4is_j8j55t8dz79m7 = strtolower( $m4is_j8j55t8dz79m7 );

$m4is_6mctr922hbmncpwfrp0x2k = self::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_6mctr922hbmncpwfrp0x2k['keap'][$m4is_ze4gc5gdxe0vk8nf0zg7][$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

self::m4is_a36wqzt5pv5tgs6eaag7f44c8( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_6mctr922hbmncpwfrp0x2k );
}

public static function m4is_ydw6szs2ds84gg81jhydhxsy7e3r0( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : int {
return self::m4is_prgfd97b8r9yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memb_user', 'crm_id', 0 );
}


private static function m4is_cgbymn27sf8gh( array $m4is_6mctr922hbmncpwfrp0x2k ) : bool {
if ( empty( $m4is_6mctr922hbmncpwfrp0x2k ) ) {
return true;

}
if ( isset( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact'] ) && empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['id'] ) ) {
return true;

}
if ( empty( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['version'] ) || $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['version'] !== self::M4IS_CX6F06C1BYA8TX804QHWYJ81Y8P74 ) {
return true;

}
if ( isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['nextupdate'] ) && $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['nextupdate'] < time() ) {
return true;

}
if ( isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['revision'] ) && $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['revision'] < self::$m4is_132xe588j->m4is_8wk99jvy3awxmwjsc6jdnj() ) {
return true;

}
if ( isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['user_revision'] ) && $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['user_revision'] < self::m4is_sevyath1pyk0ay3yyc1rm01pv( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['user_id'] ) ) {
return true;

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['crm_id'];
$m4is_5p7m12egre5pbbk = self::$m4is_132xe588j->m4is_geq5g5mch3kkbpp21kh3crb915fkk( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_p2tfq9f0yppd2ya7k6an368 = isset( $m4is_6mctr922hbmncpwfrp0x2k['keap']['meta']['contact'] ) ? $m4is_6mctr922hbmncpwfrp0x2k['keap']['meta']['contact'] : 0;

if ( $m4is_5p7m12egre5pbbk > $m4is_p2tfq9f0yppd2ya7k6an368 ) {
return true;
}
return false;
}

public static function m4is_hr936s717w4jdp9fjkjap( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : float {
$m4is_qm78qahrsjrp9v9vf2phj31x = microtime( true );

update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memberium/revision', $m4is_qm78qahrsjrp9v9vf2phj31x );
return $m4is_qm78qahrsjrp9v9vf2phj31x;

}

public static function m4is_sevyath1pyk0ay3yyc1rm01pv( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : float {
$m4is_t9svq56t4ysv1rsgy1g61g = (float) get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'memberium/revision', true ) OR $m4is_t9svq56t4ysv1rsgy1g61g = self::m4is_hr936s717w4jdp9fjkjap( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

return $m4is_t9svq56t4ysv1rsgy1g61g;
}


private static function m4is_qhdcdj80n8xrmrz7rr2dze934qg( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : array {
$m4is_6mctr922hbmncpwfrp0x2k = self::m4is_c6zaeh63cdbzrb86kct3dwzjwpstb1nn( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_6mctr922hbmncpwfrp0x2k = $m4is_6mctr922hbmncpwfrp0x2k or self::m4is_gwjenw20rbaxe2b85brty1( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_6mctr922hbmncpwfrp0x2k = $m4is_6mctr922hbmncpwfrp0x2k or get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, self::USERMETA_KEY,
 true );
return is_array( $m4is_6mctr922hbmncpwfrp0x2k ) ? $m4is_6mctr922hbmncpwfrp0x2k : [];
}

private static function m4is_a36wqzt5pv5tgs6eaag7f44c8( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 array $m4is_6mctr922hbmncpwfrp0x2k ) : void {
self::m4is_9gkfzmts0hnaymhmtxsaarg0kex4yz9( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_6mctr922hbmncpwfrp0x2k );

self::m4is_f13pmnrt5r740mh18j( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_6mctr922hbmncpwfrp0x2k );
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 self::USERMETA_KEY, $m4is_6mctr922hbmncpwfrp0x2k );
}

private static function m4is_s8qn2pysr0jkbdn1k( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : void {
wp_cache_set( self::m4is_c5pt9ndaq6p( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ),
 null, self::CACHE_GROUP, 1 );
delete_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, self::USERMETA_KEY );
wp_cache_delete( self::m4is_c5pt9ndaq6p( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ),
 self::CACHE_GROUP );
self::m4is_vwcg97cdkedxw8v0kqp3ehh( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}


private static function m4is_vaxh9cy6gr1xbfc3h7badq103hcnh( array $m4is_6mctr922hbmncpwfrp0x2k,
 WP_User $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) : array {
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['user_id'] = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID;

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['email'] = strtolower( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email );
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['loginname'] = strtolower( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login );

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['crm_id'] = 0;
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['languages'] = m4is_eknm14gbx0wvrnh6::m4is_jhjmwpc72xsn();

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['revision'] = self::$m4is_132xe588j->m4is_8wk99jvy3awxmwjsc6jdnj();
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['source'] = 'local';

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['nextupdate'] = ( time() + self::SESSION_TTL );
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['version'] = self::M4IS_CX6F06C1BYA8TX804QHWYJ81Y8P74;

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['user_revision'] = self::m4is_sevyath1pyk0ay3yyc1rm01pv( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );

return $m4is_6mctr922hbmncpwfrp0x2k;
}

private static function m4is_tnk7qsqsmvj53xd( array $m4is_6mctr922hbmncpwfrp0x2k, array $m4is_cyg7rcfhzagmm5v ) : array {

$m4is_6mctr922hbmncpwfrp0x2k['keap']['contact'] = array_change_key_case( $m4is_cyg7rcfhzagmm5v,
 CASE_LOWER );
$m4is_6mctr922hbmncpwfrp0x2k['keap']['meta']['contact'] = isset( $m4is_cyg7rcfhzagmm5v['!LastUpdated'] ) ? (int) $m4is_cyg7rcfhzagmm5v['!LastUpdated'] : time();

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['crm_id'] = $m4is_cyg7rcfhzagmm5v['Id'] ?? 0;
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['source'] = 'keap';

return $m4is_6mctr922hbmncpwfrp0x2k;
}

private static function m4is_ysdhvbdh50( array $m4is_6mctr922hbmncpwfrp0x2k, array $m4is_cyg7rcfhzagmm5v ) : array {
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['canc_homepage'] = 0;

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'] = 0;
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_id'] = 0;
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_level'] = 0;

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_names'] = '';
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_tags'] = '';

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['payf_homepage'] = 0;
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['roles'] = '';
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['susp_homepage'] = 0;

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] = isset( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'] ) ? $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'] : '';

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['theme'] = '';
return $m4is_6mctr922hbmncpwfrp0x2k;
}

private static function m4is_zndr590m7g3ab1ra6kdjtaz( array $m4is_6mctr922hbmncpwfrp0x2k,
 array $m4is_06c8s5xs94f91335gnaey25 ) : array {
if ( empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'] ) ) {
return $m4is_6mctr922hbmncpwfrp0x2k;

}
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] = $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'];
$m4is_pd23d162jtwcpxw9zb = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w();

$m4is_pd23d162jtwcpxw9zb = isset( $m4is_pd23d162jtwcpxw9zb['mc'] ) ? $m4is_pd23d162jtwcpxw9zb['mc'] : [];
$m4is_kpcg6nzdp3rpsyj8vvz = [];

foreach ($m4is_06c8s5xs94f91335gnaey25 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh=>$tag) {
if (isset($m4is_pd23d162jtwcpxw9zb[$tag]) ) {
$m4is_kpcg6nzdp3rpsyj8vvz[] = $m4is_pd23d162jtwcpxw9zb[$tag];

}
}
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tag_names'] = empty( $m4is_kpcg6nzdp3rpsyj8vvz ) ? '' : implode( ',', $m4is_kpcg6nzdp3rpsyj8vvz );

return $m4is_6mctr922hbmncpwfrp0x2k;
}

private static function m4is_trds009f( array $m4is_6mctr922hbmncpwfrp0x2k, array $m4is_06c8s5xs94f91335gnaey25 ) : array {
static $m4is_y7084n6v67jme9va8yz;

if ( empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'] ) ) {
return $m4is_6mctr922hbmncpwfrp0x2k;
}
$m4is_y7084n6v67jme9va8yz ??= self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' );

if ( empty( $m4is_y7084n6v67jme9va8yz ) || ! is_array( $m4is_y7084n6v67jme9va8yz ) ) {
return $m4is_6mctr922hbmncpwfrp0x2k;
}
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['user_id'];

$m4is_ps46agx1v8d1xg57m = get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'login_count', true );

$m4is_pnqn8mxmejhkaa77kf = [];
$m4is_rqpq02yae24ca = [];

$m4is_7kwstyma = [];
$m4is_p7sv8kef3snay = -1;
$m4is_tdb0fwz6zpvkrr1n4 = -1;
foreach ( $m4is_y7084n6v67jme9va8yz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_h9g6e5cga ) {
$m4is_h9g6e5cga['susp_id'] = isset( $m4is_h9g6e5cga['susp_id'] ) ? $m4is_h9g6e5cga['susp_id'] : 0;
$m4is_h9g6e5cga['canc_id'] = isset( $m4is_h9g6e5cga['canc_id'] ) ? $m4is_h9g6e5cga['canc_id'] : 0;

$m4is_h9g6e5cga['payf_id'] = isset( $m4is_h9g6e5cga['payf_id'] ) ? $m4is_h9g6e5cga['payf_id'] : 0;
$m4is_h9g6e5cga['addltag_ids'] = isset( $m4is_h9g6e5cga['addltag_ids'] ) ? $m4is_h9g6e5cga['addltag_ids'] : '';

$has_primary_tag = in_array( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_06c8s5xs94f91335gnaey25 );
$has_alt_tags = (bool) count( array_intersect( $m4is_06c8s5xs94f91335gnaey25,
 array_filter( explode( ',', $m4is_h9g6e5cga['addltag_ids'] ) ) ) );
$has_payf_tag = (bool) in_array( $m4is_h9g6e5cga['payf_id'], $m4is_06c8s5xs94f91335gnaey25 );

$has_susp_tag = (bool) in_array( $m4is_h9g6e5cga['suspend_id'], $m4is_06c8s5xs94f91335gnaey25 );
$has_canc_tag = (bool) in_array( $m4is_h9g6e5cga['cancel_id'],
 $m4is_06c8s5xs94f91335gnaey25 );

if ($has_primary_tag || $has_alt_tags) {
if ($has_payf_tag || $has_canc_tag || $has_susp_tag) {
if (intval($m4is_h9g6e5cga['login_redirect_priority']) >= $m4is_p7sv8kef3snay) {
if (empty($m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page']) ) {
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'] = $has_payf_tag ? $m4is_h9g6e5cga['payf_homepage'] : $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'];

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'] = $has_susp_tag ? $m4is_h9g6e5cga['susp_homepage'] : $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'];

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'] = $has_canc_tag ? $m4is_h9g6e5cga['canc_homepage'] : $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'];

}
$m4is_p7sv8kef3snay = isset($m4is_h9g6e5cga['login_redirect_priority']) ? $m4is_h9g6e5cga['login_redirect_priority'] : 0;
}
}
else {
if ($m4is_h9g6e5cga['level'] >= $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_level']) {
if (is_array($m4is_h9g6e5cga['roles']) && ! empty($m4is_h9g6e5cga['roles']) ) {
$m4is_7kwstyma = array_merge( $m4is_7kwstyma,
 $m4is_h9g6e5cga['roles']);
}
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_id'] = $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['theme'] = isset($m4is_h9g6e5cga['theme']) ? $m4is_h9g6e5cga['theme'] : '';

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_level'] = $m4is_h9g6e5cga['level'];
$m4is_pnqn8mxmejhkaa77kf[] = $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;

$m4is_rqpq02yae24ca[] = $m4is_h9g6e5cga['name'];
}
if ( intval( $m4is_h9g6e5cga['login_redirect_priority'] ) >= $m4is_p7sv8kef3snay ) {
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'] = isset( $m4is_h9g6e5cga['login_page'] ) ? $m4is_h9g6e5cga['login_page'] : 0;

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['first_login_page'] = isset( $m4is_h9g6e5cga['first_login_page'] ) ? $m4is_h9g6e5cga['first_login_page'] : 0;

$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['logout_page'] = isset( $m4is_h9g6e5cga['logout_page']) ? $m4is_h9g6e5cga['logout_page'] : 0;

$m4is_p7sv8kef3snay = isset($m4is_h9g6e5cga['login_redirect_priority']) ? $m4is_h9g6e5cga['login_redirect_priority'] : 0;
if ( $m4is_ps46agx1v8d1xg57m < 2 ) {
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'] = $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['first_login_page'];

}
}
}
}
if (is_array($m4is_pnqn8mxmejhkaa77kf) && count($m4is_pnqn8mxmejhkaa77kf) > 0) {
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_tags'] = implode( ',',
 $m4is_pnqn8mxmejhkaa77kf );
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_names'] = implode( ',', $m4is_rqpq02yae24ca );
}
}
$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['roles'] = is_array( $m4is_7kwstyma ) ? implode(',',
 array_unique( $m4is_7kwstyma ) ) : '';
return $m4is_6mctr922hbmncpwfrp0x2k;
}

private static function m4is_70165bss8( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 array $m4is_cyg7rcfhzagmm5v ) : void {
if ( ! self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'sync_meta_updates',
 false ) ) {
return;
}
global $wpdb;
$m4is_k7p8pmxsbkqrje3y20 = $wpdb->usermeta;
$m4is_fsedke71q5qj768dkg6rqmhr = 'memb\_%';
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `meta_key`, `meta_value` FROM {$m4is_k7p8pmxsbkqrje3y20} WHERE `user_id` = {$m4is_wk4dh1rnd3wmwvsggq51nhn87} AND `meta_key` LIKE '{$m4is_fsedke71q5qj768dkg6rqmhr}' ";

$m4is_v2eet0262avzsmbcxmm33n0ma148x3sh = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K );
foreach ( $m4is_cyg7rcfhzagmm5v as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_m8tpd1x1wr2av4et3r6p46yd = "memb_{$m4is_j8j55t8dz79m7}";
if ( ! isset( $m4is_v2eet0262avzsmbcxmm33n0ma148x3sh[$m4is_m8tpd1x1wr2av4et3r6p46yd]->meta_value ) || $m4is_v2eet0262avzsmbcxmm33n0ma148x3sh[$m4is_m8tpd1x1wr2av4et3r6p46yd]->meta_value <> $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_m8tpd1x1wr2av4et3r6p46yd, $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
}
}


private static function m4is_9gkfzmts0hnaymhmtxsaarg0kex4yz9( int $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 array $m4is_6mctr922hbmncpwfrp0x2k ) : void {
wp_cache_set( self::m4is_c5pt9ndaq6p( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ), $m4is_6mctr922hbmncpwfrp0x2k,
 self::CACHE_GROUP, self::CACHE_TTL );
}

private static function m4is_c6zaeh63cdbzrb86kct3dwzjwpstb1nn( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : array {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;

$m4is_6mctr922hbmncpwfrp0x2k = wp_cache_get( self::m4is_c5pt9ndaq6p( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ), self::CACHE_GROUP, false, $m4is_6p2tyvq6paj43svrn7zqaykxzy );

if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy === false || ! is_array( $m4is_6mctr922hbmncpwfrp0x2k ) ) {
return [];
}
return $m4is_6mctr922hbmncpwfrp0x2k;

}

private static function m4is_c5pt9ndaq6p( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : string {
return 'session/' . $m4is_wk4dh1rnd3wmwvsggq51nhn87;

}


private static function m4is_gwjenw20rbaxe2b85brty1( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : array {
$m4is_j8j55t8dz79m7 = "id:{$m4is_wk4dh1rnd3wmwvsggq51nhn87}";

if ( ! array_key_exists( $m4is_j8j55t8dz79m7, self::$m4is_wv62bgave2h0vc9hv ) ) {
return [];
}
$m4is_6mctr922hbmncpwfrp0x2k = self::$m4is_wv62bgave2h0vc9hv[$m4is_j8j55t8dz79m7];



unset( self::$m4is_wv62bgave2h0vc9hv[$m4is_j8j55t8dz79m7] );
self::$m4is_wv62bgave2h0vc9hv[$m4is_j8j55t8dz79m7] = $m4is_6mctr922hbmncpwfrp0x2k;

return $m4is_6mctr922hbmncpwfrp0x2k;
}

private static function m4is_f13pmnrt5r740mh18j( int $m4is_wk4dh1rnd3wmwvsggq51nhn87, array $m4is_6mctr922hbmncpwfrp0x2k ) : void {
unset( self::$m4is_wv62bgave2h0vc9hv["id:{$m4is_wk4dh1rnd3wmwvsggq51nhn87}"] );

self::$m4is_wv62bgave2h0vc9hv["id:{$m4is_wk4dh1rnd3wmwvsggq51nhn87}"] = $m4is_6mctr922hbmncpwfrp0x2k;
if ( count( self::$m4is_wv62bgave2h0vc9hv ) > self::RING_CACHE_SIZE ) {
array_shift( self::$m4is_wv62bgave2h0vc9hv );

}
}

private static function m4is_vwcg97cdkedxw8v0kqp3ehh( int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : void {
unset( self::$m4is_wv62bgave2h0vc9hv["id:{$m4is_wk4dh1rnd3wmwvsggq51nhn87}"] );

}

public static function m4is_net3v5tkgy75( string $group, array $messages ) : void {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();

if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return;
}
$m4is_4qbnse1s0zvb3044afap1m = self::m4is_c69xwy250gzcgv6mj();
$m4is_4qbnse1s0zvb3044afap1m[$group] = $messages;

self::m4is_7vpqcha2xr5fkdj72zp8vapx98vf8k( $m4is_4qbnse1s0zvb3044afap1m, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
public static function m4is_8yjfadhed2cake47tfkfzyj( string $group,
 string $key, string $message ) : void {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();
if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return;

}
$m4is_4qbnse1s0zvb3044afap1m = self::m4is_c69xwy250gzcgv6mj();
if ( ! isset( $m4is_4qbnse1s0zvb3044afap1m[$group] ) || ! is_array( $m4is_4qbnse1s0zvb3044afap1m[$group] ) ) {
$m4is_4qbnse1s0zvb3044afap1m[$group] = [];

}
$m4is_4qbnse1s0zvb3044afap1m[$group][$key] = $message;
self::m4is_7vpqcha2xr5fkdj72zp8vapx98vf8k( $m4is_4qbnse1s0zvb3044afap1m, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

}
public static function m4is_5pj24bj9pdmwnkb4s91kvj( string $group ) : array {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();

if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return [];
}
$m4is_4qbnse1s0zvb3044afap1m = self::m4is_c69xwy250gzcgv6mj();
if ( ! isset( $m4is_4qbnse1s0zvb3044afap1m[$group] ) ) {
return [];

}
$m4is_91wggw8ph5y83j1 = $m4is_4qbnse1s0zvb3044afap1m[$group];
unset( $m4is_4qbnse1s0zvb3044afap1m[$group] );
self::m4is_7vpqcha2xr5fkdj72zp8vapx98vf8k( $m4is_4qbnse1s0zvb3044afap1m,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
return $m4is_91wggw8ph5y83j1;
}
public static function m4is_ggfhwhr9nd6zvxtntm5x( string $group,
 string $key ) : string {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();
if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return '';

}
$m4is_4qbnse1s0zvb3044afap1m = self::m4is_c69xwy250gzcgv6mj();
if ( ! isset( $m4is_4qbnse1s0zvb3044afap1m[$group][$key] ) ) {
return '';

}
$m4is_5tmqg45z37r82cfb67prh = (string) $m4is_4qbnse1s0zvb3044afap1m[$group][$key];
unset( $m4is_4qbnse1s0zvb3044afap1m[$group][$key] );

if ( empty( $m4is_4qbnse1s0zvb3044afap1m[$group] ) ) {
unset( $m4is_4qbnse1s0zvb3044afap1m[$group] );
}
self::m4is_7vpqcha2xr5fkdj72zp8vapx98vf8k( $m4is_4qbnse1s0zvb3044afap1m,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
return $m4is_5tmqg45z37r82cfb67prh;
}
public static function m4is_gt1dkwthf19atf( string $group,
 string $key = '' ) : void {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();
if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return;

}
$m4is_4qbnse1s0zvb3044afap1m = self::m4is_c69xwy250gzcgv6mj();
if ( $key !== '' ) {
unset( $m4is_4qbnse1s0zvb3044afap1m[$group][$key] );

if ( empty( $m4is_4qbnse1s0zvb3044afap1m[$group] ) ) {
unset( $m4is_4qbnse1s0zvb3044afap1m[$group] );
}
}
else {
unset( $m4is_4qbnse1s0zvb3044afap1m[$group] );

}
self::m4is_7vpqcha2xr5fkdj72zp8vapx98vf8k( $m4is_4qbnse1s0zvb3044afap1m, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
private static function m4is_c69xwy250gzcgv6mj() : array {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) get_current_user_id();

if ( empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
return [];
}
$m4is_r2d01p7w70wh2g5 = 'memberium/messages/' . $m4is_wk4dh1rnd3wmwvsggq51nhn87;

$m4is_4qbnse1s0zvb3044afap1m = get_transient( $m4is_r2d01p7w70wh2g5 );
return is_array( $m4is_4qbnse1s0zvb3044afap1m ) ? $m4is_4qbnse1s0zvb3044afap1m : [];

}
private static function m4is_7vpqcha2xr5fkdj72zp8vapx98vf8k( array $m4is_4qbnse1s0zvb3044afap1m, int $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) : void {
if ( empty( $m4is_4qbnse1s0zvb3044afap1m ) ) {
delete_transient( 'memberium/messages/' . $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

return;
}
set_transient( 'memberium/messages/' . $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_4qbnse1s0zvb3044afap1m, self::M4IS_E88ZJK4VRCEZXCB100A0V );

}
public static function m4is_81c2wat28fdqk775kc53nehxbqf( string $group, array $messages ) : string {
$m4is_s0hfpx2zktwa0hangkfqn3 = bin2hex( random_bytes( 16 ) );

$m4is_r2d01p7w70wh2g5 = 'memberium/amsg/' . $m4is_s0hfpx2zktwa0hangkfqn3;
$m4is_d60kn1d3yvprp62rs332 = [ $group => $messages ];
set_transient( $m4is_r2d01p7w70wh2g5,
 $m4is_d60kn1d3yvprp62rs332, self::M4IS_E88ZJK4VRCEZXCB100A0V );
return $m4is_s0hfpx2zktwa0hangkfqn3;
}
public static function m4is_bnseg5p8e7bedy9220a9kpw6nshyw9( string $token,
 string $group ) : array {
$m4is_s0hfpx2zktwa0hangkfqn3 = sanitize_text_field( $token );
if ( empty( $m4is_s0hfpx2zktwa0hangkfqn3 ) ) {
return [];

}
$m4is_r2d01p7w70wh2g5 = 'memberium/amsg/' . $m4is_s0hfpx2zktwa0hangkfqn3;
$m4is_d60kn1d3yvprp62rs332 = get_transient( $m4is_r2d01p7w70wh2g5 );

delete_transient( $m4is_r2d01p7w70wh2g5 );
if ( ! is_array( $m4is_d60kn1d3yvprp62rs332 ) || ! isset( $m4is_d60kn1d3yvprp62rs332[$group] ) ) {
return [];

}
return is_array( $m4is_d60kn1d3yvprp62rs332[$group] ) ? $m4is_d60kn1d3yvprp62rs332[$group] : [];
}
}