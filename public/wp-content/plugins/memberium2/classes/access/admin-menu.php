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

final class m4is_4801pvycyx2vfyx {

public static function m4is_5eragr7sh2yyj356m() : void {
add_action( 'wp_nav_menu_item_custom_fields',
 [__CLASS__, 'm4is_6qkm0eqt'], 10, 4 );
add_action( 'wp_update_nav_menu_item', [__CLASS__, 'm4is_2b8darj6nry5w'], 10, 3 );
add_action( 'admin_enqueue_scripts',
 [__CLASS__, 'm4is_bgncvr9myg0m7tx6t49nqfxh91q'] );
add_filter( 'clean_url', [__CLASS__, 'm4is_t2p8jbc8e3sdfvp'], 99, 3 );
}

public static function m4is_bgncvr9myg0m7tx6t49nqfxh91q() : void {
static $m4is_apfwwy4tedt390mm700x6ehxgp0g = false;

if ( $m4is_apfwwy4tedt390mm700x6ehxgp0g ) {
return;
}
m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_n59hbwekrhr5t9c6gg4('menu');

$m4is_apfwwy4tedt390mm700x6ehxgp0g = true;
}

public static function m4is_6qkm0eqt( $m4is_86p36xtmcsb7bh6kvc6nr5eg0, $m4is_s8cs5mdq57e5bgpqzd,
 $m4is_aqrkarnrnxpa, $m4is_g61yzqs7ecta0xztr70d7v ) : void {
$m4is_7b2yfzk0054 = self::m4is_27m4jy5dcrymj7v98eca3cfefscr();
if (! empty($m4is_7b2yfzk0054) && is_array($m4is_7b2yfzk0054) ) {
$m4is_pk98f5nk = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_92pp067995jqck($m4is_86p36xtmcsb7bh6kvc6nr5eg0);

$m4is_14q35vdhmvykfq0065qxntz31ccnme = '';
foreach ($m4is_7b2yfzk0054 as $m4is_5vcwef7pymrfb3zawe => $m4is_bbsta3mvjhhvh1x97vfpm9e){
$m4is_hce1y1a4qd65zhnwsj = $m4is_bbsta3mvjhhvh1x97vfpm9e['name'];

$m4is_7b2yfzk0054[$m4is_5vcwef7pymrfb3zawe]['id'] = esc_attr("{$m4is_hce1y1a4qd65zhnwsj}-{$m4is_86p36xtmcsb7bh6kvc6nr5eg0}");
$m4is_7b2yfzk0054[$m4is_5vcwef7pymrfb3zawe]['field_name'] = "wpal_menu[{$m4is_hce1y1a4qd65zhnwsj}][{$m4is_86p36xtmcsb7bh6kvc6nr5eg0}]";

$m4is_7b2yfzk0054[$m4is_5vcwef7pymrfb3zawe]['value'] = isset($m4is_pk98f5nk[$m4is_hce1y1a4qd65zhnwsj]) ? $m4is_pk98f5nk[$m4is_hce1y1a4qd65zhnwsj] : '';

$m4is_14q35vdhmvykfq0065qxntz31ccnme = $m4is_hce1y1a4qd65zhnwsj === 'status' ? $m4is_7b2yfzk0054[$m4is_5vcwef7pymrfb3zawe]['value'] : $m4is_14q35vdhmvykfq0065qxntz31ccnme;

}

static $m4is_qsy2g8p7fk4embpnaa700ncvj = false;
if (! $m4is_qsy2g8p7fk4embpnaa700ncvj ) {
$m4is_vmhtx2ecrnzjpy = 'memberium/menu/access';

$m4is_qsy2g8p7fk4embpnaa700ncvj = true;
wp_nonce_field($m4is_vmhtx2ecrnzjpy, "_{$m4is_vmhtx2ecrnzjpy}_name");
}

$m4is_zxa05fq9f81p8g = 'wpal-menu-access';

$m4is_pzszy196ee = $m4is_86p36xtmcsb7bh6kvc6nr5eg0;
$m4is_1zyxgvcj7wjeqej9ya6ev80 = 'menu';
include m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_8hkhd903a3hcdnqhfwpzqby( 'core-wp-asset-access-meta.php' );

}
}

public static function m4is_2b8darj6nry5w( int $m4is_s63cs6bqn0vgc6emva9, int $m4is_86p36xtmcsb7bh6kvc6nr5eg0, array $m4is_g61yzqs7ecta0xztr70d7v ) {

$m4is_vmhtx2ecrnzjpy = 'memberium/menu/access';

if (! isset($_POST["_{$m4is_vmhtx2ecrnzjpy}_name"]) || ! wp_verify_nonce($_POST["_{$m4is_vmhtx2ecrnzjpy}_name"], $m4is_vmhtx2ecrnzjpy) ) {
return $m4is_s63cs6bqn0vgc6emva9;

}
$m4is_pk98f5nk = [];
$m4is_fp67ya1tmpsh876ewrennxvhj2v = [];
$m4is_57gt5d8nadqkj = false;
$m4is_2hn07pkym65zhgnmbesmq1 = false;
$m4is_053gmvfrzkrk16w0b = self::m4is_27m4jy5dcrymj7v98eca3cfefscr();

if (is_array($m4is_053gmvfrzkrk16w0b) && ! empty($m4is_053gmvfrzkrk16w0b) ) {
$m4is_npmzry37xr7zyn6 = isset($_POST['wpal_menu']) ? $_POST['wpal_menu'] : [];

$m4is_fp67ya1tmpsh876ewrennxvhj2v = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_92pp067995jqck($m4is_86p36xtmcsb7bh6kvc6nr5eg0);

$m4is_57gt5d8nadqkj = ! empty($m4is_fp67ya1tmpsh876ewrennxvhj2v);
$m4is_pk98f5nk = $m4is_fp67ya1tmpsh876ewrennxvhj2v;
$m4is_14q35vdhmvykfq0065qxntz31ccnme = 0;


foreach ($m4is_053gmvfrzkrk16w0b as $m4is_00e737nb57 => $m4is_bbsta3mvjhhvh1x97vfpm9e) {
$m4is_hce1y1a4qd65zhnwsj = $m4is_bbsta3mvjhhvh1x97vfpm9e['name'];

$m4is_c9nryf13e43y9jensddce = isset($m4is_npmzry37xr7zyn6[$m4is_hce1y1a4qd65zhnwsj]) ? $m4is_npmzry37xr7zyn6[$m4is_hce1y1a4qd65zhnwsj] : [];

$m4is_rqxytszfq5v6syth1csqqxvy5 = isset($m4is_c9nryf13e43y9jensddce[$m4is_86p36xtmcsb7bh6kvc6nr5eg0]) ? $m4is_c9nryf13e43y9jensddce[$m4is_86p36xtmcsb7bh6kvc6nr5eg0] : '';

$m4is_t91n3g227m9eq2bk672hjzj7qnph9c = isset($m4is_fp67ya1tmpsh876ewrennxvhj2v[$m4is_hce1y1a4qd65zhnwsj]) ? $m4is_fp67ya1tmpsh876ewrennxvhj2v[$m4is_hce1y1a4qd65zhnwsj] : '';

if ($m4is_bbsta3mvjhhvh1x97vfpm9e['type'] === 'select2' && $m4is_rqxytszfq5v6syth1csqqxvy5 > '' ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = trim($m4is_rqxytszfq5v6syth1csqqxvy5,
 ',');

if ($m4is_hce1y1a4qd65zhnwsj === 'memberships' && $m4is_rqxytszfq5v6syth1csqqxvy5 > '' ) {
$m4is_exrkyp0yg362fq91nmtwh21btm9 = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_hvv9kqe18w6gtnq40v7($m4is_rqxytszfq5v6syth1csqqxvy5);

$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_exrkyp0yg362fq91nmtwh21btm9 ? $m4is_exrkyp0yg362fq91nmtwh21btm9 : $m4is_rqxytszfq5v6syth1csqqxvy5;

$m4is_pk98f5nk['any_membership'] = $m4is_exrkyp0yg362fq91nmtwh21btm9 ? 1 : 0;
}
}
if ($m4is_rqxytszfq5v6syth1csqqxvy5 != $m4is_t91n3g227m9eq2bk672hjzj7qnph9c ) {
$m4is_pk98f5nk[$m4is_hce1y1a4qd65zhnwsj] = esc_attr($m4is_rqxytszfq5v6syth1csqqxvy5);

$m4is_2hn07pkym65zhgnmbesmq1 = true;
}
if ($m4is_hce1y1a4qd65zhnwsj === 'status' ) {
$m4is_14q35vdhmvykfq0065qxntz31ccnme = (int) $m4is_rqxytszfq5v6syth1csqqxvy5;

}
}

if ($m4is_14q35vdhmvykfq0065qxntz31ccnme === 1) {
$m4is_pk98f5nk['logged_in_only'] = 1;
$m4is_pk98f5nk['logged_out_only'] = 0;

}

elseif ($m4is_14q35vdhmvykfq0065qxntz31ccnme === 2) {
$m4is_pk98f5nk['logged_in_only'] = 0;
$m4is_pk98f5nk['logged_out_only'] = 1;

$m4is_pk98f5nk = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_7p1q2p4wwa5yy1vq9m4azf128hz9($m4is_pk98f5nk);

}

else{
$m4is_pk98f5nk['logged_in_only'] = 0;
$m4is_pk98f5nk['logged_out_only'] = 0;
$m4is_pk98f5nk = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_7p1q2p4wwa5yy1vq9m4azf128hz9($m4is_pk98f5nk);

}
}
if ($m4is_2hn07pkym65zhgnmbesmq1) {

if (! array_filter($m4is_pk98f5nk) ) {

if ($m4is_57gt5d8nadqkj) {
delete_post_meta($m4is_86p36xtmcsb7bh6kvc6nr5eg0,
 '_wpal/menu/access');
}
}

else{
update_post_meta($m4is_86p36xtmcsb7bh6kvc6nr5eg0, '_wpal/menu/access', $m4is_pk98f5nk);
}
}
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_r4c836v754();

}

static function m4is_t2p8jbc8e3sdfvp( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, $m4is_kc206aatedtz632hw3pajn1zkfv, $m4is_0k1mrqgxx6bb ) {
$m4is_g4bw9658bg8882yyrjv3wtzs5yx3 = false !== strpos( $m4is_kc206aatedtz632hw3pajn1zkfv,
 '[' );
$m4is_3hztz5m6874p4e3dpwzcn = false !== strpos( $m4is_kc206aatedtz632hw3pajn1zkfv, ']' );
return $m4is_g4bw9658bg8882yyrjv3wtzs5yx3 && $m4is_3hztz5m6874p4e3dpwzcn ? $m4is_kc206aatedtz632hw3pajn1zkfv : $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq;

}

public static function m4is_27m4jy5dcrymj7v98eca3cfefscr() : array {
static $m4is_nkw31yrqtpgw4c3hed2m0;
if ( ! is_null( $m4is_nkw31yrqtpgw4c3hed2m0 ) ) {
return $m4is_nkw31yrqtpgw4c3hed2m0;

}
$m4is_nkw31yrqtpgw4c3hed2m0 = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_qrsm9adcwj7j( 'menu' );

return apply_filters( 'memberium/menu/access/fields', $m4is_nkw31yrqtpgw4c3hed2m0 );
}
}