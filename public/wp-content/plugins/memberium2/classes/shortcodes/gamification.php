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

final class m4is_1twj3fqxg1b6mcv5297 {
static private object $m4is_132xe588j;
static private bool $m4is_zz74kb50;
static private int $m4is_wk4dh1rnd3wmwvsggq51nhn87;


static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) get_current_user_id();
self::$m4is_zz74kb50 = ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y();

}

static function m4is_jewgdz5ed2jrgt( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
if ( ! function_exists( 'badgeos_award_achievement_to_user' ) ) {
return '';
}
$m4is_n7x0afpz = [
'id' => 0, 
'uid' => self::$m4is_wk4dh1rnd3wmwvsggq51nhn87,
 
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
if ( ! class_exists( 'BadgeOS' ) ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'];

$m4is_p9mahpm1qc9p1d = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'];
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['uid'] );

if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 || ! $m4is_p9mahpm1qc9p1d ) {
return '';
}
$m4is_1xhb25reddw6zvvdpr5 = array_filter( explode( ',',
 get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memberium_achievement_uids', true) ) );

if ( in_array( $m4is_p9mahpm1qc9p1d, $m4is_1xhb25reddw6zvvdpr5 ) ) {
return '';

}
badgeos_award_achievement_to_user( $m4is_p9mahpm1qc9p1d, $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
$m4is_1xhb25reddw6zvvdpr5 = array_filter( explode( ',',
 get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memberium_achievement_uids', true) ) );
$m4is_1xhb25reddw6zvvdpr5[] = $m4is_p9mahpm1qc9p1d;

$m4is_1xhb25reddw6zvvdpr5 = array_unique( $m4is_1xhb25reddw6zvvdpr5 );
sort( $m4is_1xhb25reddw6zvvdpr5 );
$m4is_1xhb25reddw6zvvdpr5 = implode( ',',
 $m4is_1xhb25reddw6zvvdpr5 );
update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memberium_achievement_uids', $m4is_1xhb25reddw6zvvdpr5 );

return '';
}

static function m4is_qmy2a3dfea3xtnnxdkj5zv40b5( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], string $m4is_bsamg3fezf = '',
 string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';
}
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return 'n/a';

}
if (! class_exists('BadgeOS') ) {
return '';
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
if ( ! is_user_logged_in() ) {
return '';

}
$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '';
$m4is_vbew83xhsqmwkq = get_current_blog_id();
$m4is_w4q3zxfbrt099 = get_user_meta( self::$m4is_132xe588j->m4is_vd3qpw0vkdm(),
 '_badgeos_achievements', true);
if (empty($m4is_w4q3zxfbrt099) ) {
return '';
}
$m4is_w4q3zxfbrt099 = $m4is_w4q3zxfbrt099[$m4is_vbew83xhsqmwkq];

$m4is_1fdw4jvx5kt4my = [];
if (is_array($m4is_w4q3zxfbrt099) ) {
foreach ($m4is_w4q3zxfbrt099 as $achievement) {
@$m4is_1fdw4jvx5kt4my[$achievement->ID] = $achievement->ID;

}
}
unset($m4is_w4q3zxfbrt099);
$m4is_1fdw4jvx5kt4my = array_flip($m4is_1fdw4jvx5kt4my);
foreach ($m4is_1fdw4jvx5kt4my as $m4is_s8cs5mdq57e5bgpqzd) {
$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 .= '[badgeos_achievement id=' . $m4is_s8cs5mdq57e5bgpqzd . ']';

}
$m4is_gb01jqxh9ek2m = do_shortcode($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4);
return $m4is_gb01jqxh9ek2m;
}

static function m4is_xkcczg4dn6vzxt4d( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( ! class_exists( 'BadgeOS' ) ) {
return '';

}
if ( ! function_exists( 'badgeos_revoke_achievement_from_user' ) ) {
return '';
}
if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_n7x0afpz = [
'id' =>
 0, 
'uid' => self::$m4is_wk4dh1rnd3wmwvsggq51nhn87, 
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ', ',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['uid'];
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'];

if ( ! $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
return '';
}
if ( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) {
badgeos_revoke_achievement_from_user( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
if ( ! empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ) {
$m4is_h0ne1ev1a1jyjpk0a30y2n2xm7d7r0r4 = array_filter( explode( ',',
 get_user_meta( get_current_user_id(), 'memberium_achievement_uids', true ) ) );
if ( ( $m4is_j8j55t8dz79m7 = array_search( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_h0ne1ev1a1jyjpk0a30y2n2xm7d7r0r4 ) ) !== false ) {
unset( $m4is_h0ne1ev1a1jyjpk0a30y2n2xm7d7r0r4[$m4is_j8j55t8dz79m7] );
}
$m4is_h0ne1ev1a1jyjpk0a30y2n2xm7d7r0r4 = implode( ',',
 array_unique( $m4is_h0ne1ev1a1jyjpk0a30y2n2xm7d7r0r4 ) );
update_user_meta( get_current_user_id(), 'memberium_achievement_uids', $m4is_h0ne1ev1a1jyjpk0a30y2n2xm7d7r0r4 );

}
}
return '';
}
}
