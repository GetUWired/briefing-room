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

final class m4is_bpxwq3b3pzcb4e217scq729fsqm {
private static $m4is_x1tgnd49gp3e3jm; 
private static $m4is_hf6ctsm2pnexk; 
static function m4is_qevssvf28e1z46mev9g5qhbvjdwq8 () {
$m4is_x1tgnd49gp3e3jm = isset( $_REQUEST['taxonomy'] ) ? $_REQUEST['taxonomy'] : false;

if ( ! $m4is_x1tgnd49gp3e3jm ) {
return;
}


add_action( 'edited_term_taxonomy', [__CLASS__, 'm4is_39cxbpf5'], 10, 2 );
$m4is_bzfzm0g7yp88rct2 = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_dy768y1p8q20bhaaw4nnhyhncpxfpwmy();

if ( ! in_array( $m4is_x1tgnd49gp3e3jm, $m4is_bzfzm0g7yp88rct2 ) ) {
return;
}
self::$m4is_x1tgnd49gp3e3jm = $m4is_x1tgnd49gp3e3jm;

self::$m4is_hf6ctsm2pnexk = isset( $_REQUEST['tag_ID'] ) ? $_REQUEST['tag_ID'] : 0;
add_action( 'admin_enqueue_scripts', [__CLASS__,
 'm4is_sm1fc04prg42tm8e3gwtha5r5sr30'] );
add_action( "{$m4is_x1tgnd49gp3e3jm}_edit_form_fields", [__CLASS__, 'm4is_0q04y9dzy'], 10,
 2 );
}

static function m4is_sm1fc04prg42tm8e3gwtha5r5sr30() {
static $m4is_4xx0ja0w0d = false;
if ( ! $m4is_4xx0ja0w0d ) {
m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_n59hbwekrhr5t9c6gg4( 'taxonomy' );

$m4is_4xx0ja0w0d = true;
}
}

static function m4is_0q04y9dzy( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0, $m4is_x1tgnd49gp3e3jm ) {

static $m4is_qsy2g8p7fk4embpnaa700ncvj = false;

$m4is_qx43kpyr0vp913tw7n1ya3v1wh = $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0->term_id;
$m4is_7b2yfzk0054 = self::m4is_05cxb877k2wbgjq838n();

if( is_array( $m4is_7b2yfzk0054 ) && ! empty( $m4is_7b2yfzk0054 ) ) {
$m4is_pk98f5nk = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_tzj9w1g36574r9qq( $m4is_qx43kpyr0vp913tw7n1ya3v1wh );

$m4is_14q35vdhmvykfq0065qxntz31ccnme = '';
$m4is_sa1zwmzw = '';
foreach ( $m4is_7b2yfzk0054 as $m4is_5vcwef7pymrfb3zawe => $m4is_bbsta3mvjhhvh1x97vfpm9e ){
$m4is_hce1y1a4qd65zhnwsj = $m4is_bbsta3mvjhhvh1x97vfpm9e['name'];

$m4is_7b2yfzk0054[$m4is_5vcwef7pymrfb3zawe]['id'] = esc_attr( "{$m4is_hce1y1a4qd65zhnwsj}-{$m4is_qx43kpyr0vp913tw7n1ya3v1wh}" );
$m4is_7b2yfzk0054[$m4is_5vcwef7pymrfb3zawe]['field_name'] = "wpal_taxonomy[$m4is_hce1y1a4qd65zhnwsj]";

$m4is_7b2yfzk0054[$m4is_5vcwef7pymrfb3zawe]['value'] = isset( $m4is_pk98f5nk[$m4is_hce1y1a4qd65zhnwsj] ) ? $m4is_pk98f5nk[$m4is_hce1y1a4qd65zhnwsj] : '';

$m4is_14q35vdhmvykfq0065qxntz31ccnme = $m4is_hce1y1a4qd65zhnwsj === 'status' ? $m4is_7b2yfzk0054[$m4is_5vcwef7pymrfb3zawe]['value'] : $m4is_14q35vdhmvykfq0065qxntz31ccnme;

$m4is_sa1zwmzw = $m4is_hce1y1a4qd65zhnwsj === 'prohibited_action' ? $m4is_7b2yfzk0054[$m4is_5vcwef7pymrfb3zawe]['value'] : $m4is_sa1zwmzw;

}
if ( ! $m4is_qsy2g8p7fk4embpnaa700ncvj ) {
$m4is_vmhtx2ecrnzjpy = 'memberium/taxonomy/access';
$m4is_qsy2g8p7fk4embpnaa700ncvj = true;

wp_nonce_field( $m4is_vmhtx2ecrnzjpy, "_{$m4is_vmhtx2ecrnzjpy}_name" );
}

$m4is_zxa05fq9f81p8g = 'wpal-taxonomy-access';
$m4is_pzszy196ee = $m4is_qx43kpyr0vp913tw7n1ya3v1wh;

$m4is_1zyxgvcj7wjeqej9ya6ev80 = 'taxonomy';
echo "</tbody><tbody class=\"memberium-taxonomy-access-tbody\" data-prohibited-action=\"{$m4is_sa1zwmzw}\">";

echo "<tr><td colspan=\"2\">";
include m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_8hkhd903a3hcdnqhfwpzqby( 'core-wp-asset-access-meta.php' );

echo "</td></tr></tbody>";
}
}
static function m4is_39cxbpf5( $m4is_qx43kpyr0vp913tw7n1ya3v1wh, $m4is_6k0fmjcwdryaxc0f6qfh9zpk4g ) {
$m4is_pk98f5nk = [];

$m4is_fp67ya1tmpsh876ewrennxvhj2v = [];
$m4is_57gt5d8nadqkj = false;
$m4is_2hn07pkym65zhgnmbesmq1 = false;
$m4is_053gmvfrzkrk16w0b = self::m4is_05cxb877k2wbgjq838n();

if ( is_array( $m4is_053gmvfrzkrk16w0b ) && ! empty( $m4is_053gmvfrzkrk16w0b ) ) {
$m4is_npmzry37xr7zyn6 = isset( $_POST['wpal_taxonomy'] ) ? $_POST['wpal_taxonomy'] : [];

$m4is_fp67ya1tmpsh876ewrennxvhj2v = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_tzj9w1g36574r9qq( $m4is_qx43kpyr0vp913tw7n1ya3v1wh );

$m4is_57gt5d8nadqkj = ! empty( $m4is_fp67ya1tmpsh876ewrennxvhj2v );
$m4is_pk98f5nk = [];
$m4is_14q35vdhmvykfq0065qxntz31ccnme = 0;

$m4is_sa1zwmzw = '';

foreach ( $m4is_053gmvfrzkrk16w0b as $m4is_00e737nb57 => $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
$m4is_hce1y1a4qd65zhnwsj = $m4is_bbsta3mvjhhvh1x97vfpm9e['name'];

$m4is_rqxytszfq5v6syth1csqqxvy5 = isset( $m4is_npmzry37xr7zyn6[$m4is_hce1y1a4qd65zhnwsj] ) ? $m4is_npmzry37xr7zyn6[$m4is_hce1y1a4qd65zhnwsj] : [];

$m4is_t91n3g227m9eq2bk672hjzj7qnph9c = isset( $m4is_fp67ya1tmpsh876ewrennxvhj2v[$m4is_hce1y1a4qd65zhnwsj] ) ? $m4is_fp67ya1tmpsh876ewrennxvhj2v[$m4is_hce1y1a4qd65zhnwsj] : '';

if ( $m4is_bbsta3mvjhhvh1x97vfpm9e['type'] === 'select2' && ! empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ){
$m4is_rqxytszfq5v6syth1csqqxvy5 = trim( $m4is_rqxytszfq5v6syth1csqqxvy5,
 ',' );

if ( $m4is_hce1y1a4qd65zhnwsj === 'memberships' && ! empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ) {
$m4is_exrkyp0yg362fq91nmtwh21btm9 = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_hvv9kqe18w6gtnq40v7( $m4is_rqxytszfq5v6syth1csqqxvy5 );

$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_exrkyp0yg362fq91nmtwh21btm9 ? $m4is_exrkyp0yg362fq91nmtwh21btm9 : $m4is_rqxytszfq5v6syth1csqqxvy5;

$m4is_pk98f5nk['any_membership'] = $m4is_exrkyp0yg362fq91nmtwh21btm9 ? 1 : 0;
}
}
if ( $m4is_rqxytszfq5v6syth1csqqxvy5 != $m4is_t91n3g227m9eq2bk672hjzj7qnph9c ) {
$m4is_pk98f5nk[$m4is_hce1y1a4qd65zhnwsj] = esc_attr( $m4is_rqxytszfq5v6syth1csqqxvy5 );

$m4is_2hn07pkym65zhgnmbesmq1 = true;
}
else {
$m4is_pk98f5nk[$m4is_hce1y1a4qd65zhnwsj] = $m4is_t91n3g227m9eq2bk672hjzj7qnph9c;
}
if ( $m4is_hce1y1a4qd65zhnwsj === 'status' ) {
$m4is_14q35vdhmvykfq0065qxntz31ccnme = (int) $m4is_rqxytszfq5v6syth1csqqxvy5;

}
if ( $m4is_hce1y1a4qd65zhnwsj === 'prohibited_action' ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ? '' : $m4is_rqxytszfq5v6syth1csqqxvy5;

$m4is_sa1zwmzw = $m4is_pk98f5nk[$m4is_hce1y1a4qd65zhnwsj] = $m4is_rqxytszfq5v6syth1csqqxvy5;
}
if ( $m4is_hce1y1a4qd65zhnwsj === 'redirect_url' ) {

if ( esc_url_raw( $m4is_rqxytszfq5v6syth1csqqxvy5 ) != $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_pk98f5nk['prohibited_action'] = $m4is_sa1zwmzw = '';

}
}
}

if ( $m4is_14q35vdhmvykfq0065qxntz31ccnme === 1 ) {
$m4is_pk98f5nk['logged_in_only'] = 1;
$m4is_pk98f5nk['logged_out_only'] = 0;

}

elseif ( $m4is_14q35vdhmvykfq0065qxntz31ccnme === 2 ) {
$m4is_pk98f5nk['logged_in_only'] = 0;
$m4is_pk98f5nk['logged_out_only'] = 1;

$m4is_pk98f5nk = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_7p1q2p4wwa5yy1vq9m4azf128hz9( $m4is_pk98f5nk );

}

else {
$m4is_pk98f5nk['logged_in_only'] = 0;
$m4is_pk98f5nk['logged_out_only'] = 0;
$m4is_pk98f5nk = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_7p1q2p4wwa5yy1vq9m4azf128hz9( $m4is_pk98f5nk );

}

if ( (int) $m4is_sa1zwmzw === 0 ) {
unset( $m4is_pk98f5nk['redirect_url'] );
$m4is_2hn07pkym65zhgnmbesmq1 = true;
}
}
if ( $m4is_2hn07pkym65zhgnmbesmq1 ) {
$m4is_6k84v5caq4k = '_wpal/taxonomy/access';


if ( ! array_filter( $m4is_pk98f5nk ) ) {
if ( $m4is_57gt5d8nadqkj ) {
delete_term_meta( $m4is_qx43kpyr0vp913tw7n1ya3v1wh, $m4is_6k84v5caq4k );
 
}
}
else{
update_term_meta( $m4is_qx43kpyr0vp913tw7n1ya3v1wh, $m4is_6k84v5caq4k, $m4is_pk98f5nk ); 
}
}
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_r4c836v754();

}
static function m4is_05cxb877k2wbgjq838n() {
static $m4is_sxhw37gh1v3yanss2x7xmq09baw = false;
if ( $m4is_sxhw37gh1v3yanss2x7xmq09baw ) {
return $m4is_sxhw37gh1v3yanss2x7xmq09baw;

}
$m4is_sxhw37gh1v3yanss2x7xmq09baw = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_qrsm9adcwj7j( 'taxonomy' );

return apply_filters( 'memberium/taxonomy/access/fields', $m4is_sxhw37gh1v3yanss2x7xmq09baw );
}
} 
