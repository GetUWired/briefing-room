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

final class m4is_zhj91gq6z4bp81wqkbnf3ngb4gf8wt {
private $m4is_132xe588j;
private $m4is_v4beyw7zqhr3;
private $m4is_mhqzty3k54fv;

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_y4dadnq96k34je2k8x();
}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
$this->m4is_mhqzty3k54fv = m4is_p2r78mkk9tdtwpmc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
private function m4is_yaah9jgck7bsmhaem08ps970t0001p() {
$m4is_df6td7d0e38wrtvw = $this->m4is_swc2jb7y();
foreach( $m4is_df6td7d0e38wrtvw as $m4is_k1eftjy4k5430qzqhjdtxyn7j ) {
$m4is_6zpsykaryhchw180 = $this->m4is_mhqzty3k54fv->m4is_z8612fdpa8cx7ymwgj8dbztyagsnagh( $m4is_k1eftjy4k5430qzqhjdtxyn7j );

if ( empty( $m4is_6zpsykaryhchw180 ) ) {
$m4is_khxvebq01f = $this->m4is_mhqzty3k54fv->m4is_ca6wzg366mv5j( $m4is_k1eftjy4k5430qzqhjdtxyn7j );

$this->m4is_mhqzty3k54fv->m4is_aha3xmfpn2gvcbaqanhqatejygqsh84( $m4is_k1eftjy4k5430qzqhjdtxyn7j, $m4is_khxvebq01f );
}
}
}
private function m4is_avnbvaakqmeegzv1ddqb0jer() {
}
private function m4is_swc2jb7y() : array {
global $wpdb;

$m4is_m8x3z0ehyggbsd = $this->m4is_mhqzty3k54fv->m4is_jvjswjxb6h();
$m4is_k7p8pmxsbkqrje3y20 = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `fieldname` = %s AND `value` LIKE 'prnt-%' AND `appname` = %s ORDER BY `id` ASC";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_m8x3z0ehyggbsd, $this->m4is_v4beyw7zqhr3 );
$m4is_3qwaf6xd03657aas = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );

$m4is_3qwaf6xd03657aas = is_array( $m4is_3qwaf6xd03657aas ) ? $m4is_3qwaf6xd03657aas : [];
$m4is_3aee554rea2tehwss3q8zgfn16 = [];
foreach( $m4is_3qwaf6xd03657aas as $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_3aee554rea2tehwss3q8zgfn16[] = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
return $m4is_3aee554rea2tehwss3q8zgfn16;
}

public function m4is_y4dadnq96k34je2k8x() : void {
global $wpdb;
$m4is_tyd8apfaejmha = $this->m4is_mhqzty3k54fv->m4is_qj4t29r2d91m8hm();

$m4is_k7p8pmxsbkqrje3y20 = m4is_bj0mt04ye7axtp644x64m::m4is_8dnas9z9md577n9p1bher();
if ( ! $m4is_tyd8apfaejmha ) {
return;
}

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `child_uid` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `active` = 1 AND `sync` = 0";

$m4is_1yzmh3jsg57 = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_1yzmh3jsg57 = is_array( $m4is_1yzmh3jsg57 ) ? $m4is_1yzmh3jsg57 : [];

if ( ! empty( $m4is_0mvqyg17tth402z6p8dcsccpyk3dva ) ) {
$m4is_9gn4ack6357j17t6g135 = [];
foreach( $m4is_1yzmh3jsg57 as $m4is_yan573ys3brnv39zsernk3xs ) {
$m4is_9gn4ack6357j17t6g135[] = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_yan573ys3brnv39zsernk3xs );

}
$m4is_9gn4ack6357j17t6g135 = array_filter( $m4is_9gn4ack6357j17t6g135 );
if ( $m4is_9gn4ack6357j17t6g135 ) {
$this->m4is_132xe588j->m4is_w2ajfcb36m38deypfekt2t1b8d( $m4is_9gn4ack6357j17t6g135,
 $m4is_tyd8apfaejmha );
}
$m4is_s5nrvcghm26v7b8pybs = implode( ',', $m4is_1yzmh3jsg57 );
$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE %i SET `sync` = 1 WHERE `child_uid` IN ( {$m4is_s5nrvcghm26v7b8pybs} )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20 );
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

}

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `child_uid` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `active` = 0 AND `sync` = 0";
$m4is_1yzmh3jsg57 = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );

$m4is_1yzmh3jsg57 = is_array( $m4is_1yzmh3jsg57 ) ? $m4is_1yzmh3jsg57 : [];
if ( ! empty( $m4is_0mvqyg17tth402z6p8dcsccpyk3dva ) ) {
$m4is_9gn4ack6357j17t6g135 = [];

foreach( $m4is_1yzmh3jsg57 as $m4is_yan573ys3brnv39zsernk3xs ) {
$m4is_9gn4ack6357j17t6g135[] = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_yan573ys3brnv39zsernk3xs );

}
$m4is_9gn4ack6357j17t6g135 = array_filter( $m4is_9gn4ack6357j17t6g135 );
if ( $m4is_9gn4ack6357j17t6g135 ) {
$this->m4is_132xe588j->m4is_w2ajfcb36m38deypfekt2t1b8d( $m4is_9gn4ack6357j17t6g135,
 $m4is_tyd8apfaejmha );
}
$m4is_s5nrvcghm26v7b8pybs = implode( ',', $m4is_1yzmh3jsg57 );
$m4is_5rbenkpt1v7xby2cknbs7 = "UPDATE %i SET `sync` = 1 WHERE `child_uid` IN ( {$m4is_s5nrvcghm26v7b8pybs} )";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $m4is_k7p8pmxsbkqrje3y20 );
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

}
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM %i WHERE `sync` = 1 AND `active` = 0";
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7,
 $m4is_k7p8pmxsbkqrje3y20 );
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
}
