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


class_exists( 'm4is_2jmhz15g' ) || die();

final class m4is_2jmhz15g {
private $m4is_132xe588j;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_5eragr7sh2yyj356m();
$this->m4is_r8emp2zcmhv1twqx3qx8mv();
}



private function m4is_r8emp2zcmhv1twqx3qx8mv() {
if ( is_admin() ) {
include_once __DIR__ . '/admin.php';

m4is_wg3d7jdjd6w62g9h9ntprnke::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}
}



public function m4is_z7b82qz1kwx5hwrr() {
return [
'_memberium_access_tag',

'_memberium_canc_tag',
'_memberium_main_tag',
'_memberium_payf_tag',
'_memberium_trial_tag',
];
}
public function m4is_32rzh6s8fx9cespy($m4is_tz1rt7sbq40fade6e6rx) {
return [
'main' =>
 (string) get_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_memberium_access_tag', true),
'trial' => (string) get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_memberium_trial_tag', true),
'payf' => (string) get_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_memberium_payf_tag', true),
'canc' =>
 (string) get_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_memberium_canc_tag', true),
];
}
public function m4is_pb64hmcsq7yy( $m4is_nctf6sc4v5npxn5der7ve5gs,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 = 0 ) {
$m4is_cvmvsj84amka140xnjgkm5rrrfqch = [
'active',
'trialling',
'failing',
];
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = empty( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) ? $this->m4is_132xe588j->m4is_vd3qpw0vkdm() : $m4is_wk4dh1rnd3wmwvsggq51nhn87;


$m4is_phtp937rexv9e82p92drc20j4j1hwzt = new \EDD_Recurring_Subscriber( $m4is_wk4dh1rnd3wmwvsggq51nhn87, true );
$m4is_yggq5j195mnp46m3zfr = $m4is_phtp937rexv9e82p92drc20j4j1hwzt->get_subscriptions( $m4is_nctf6sc4v5npxn5der7ve5gs,
 $m4is_cvmvsj84amka140xnjgkm5rrrfqch );
return count($m4is_yggq5j195mnp46m3zfr) > 1;
}



function m4is_985csh610302y71retsz($m4is_3bbvqe7hvm8ccn1vj9pq5ja8y1d69) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0;

$m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z = edd_get_payment_meta($m4is_3bbvqe7hvm8ccn1vj9pq5ja8y1d69);
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = empty($m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z['user_info']['id']) ? 0 : $m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z['user_info']['id'];

$m4is_yg35t29c3vpjb8bfsfwzz = edd_get_payment_meta_cart_details($m4is_3bbvqe7hvm8ccn1vj9pq5ja8y1d69);

if (! $m4is_wk4dh1rnd3wmwvsggq51nhn87) {
$m4is_15yq5r4y88kyvr67sd3yq3a4aw916s = empty($m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z['user_info']['email']) ? '' : $m4is_x0ra8jsgpf7vz43j8rjy58rfhvn55z['user_info']['email'];

if ($m4is_15yq5r4y88kyvr67sd3yq3a4aw916s) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'email', $m4is_15yq5r4y88kyvr67sd3yq3a4aw916s);

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_User' ) ?$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID : 0;

}
}

if ($m4is_wk4dh1rnd3wmwvsggq51nhn87) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_wk4dh1rnd3wmwvsggq51nhn87);

if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = [];
foreach ($m4is_yg35t29c3vpjb8bfsfwzz as $m4is_mtqy9tfhpdqm) {
$m4is_3d8sa17p9gaqf5vecx0nae0gmq77 = empty($m4is_mtqy9tfhpdqm['id']) ? 0 : $m4is_mtqy9tfhpdqm['id'];

$m4is_gh7agjsse = $this->m4is_32rzh6s8fx9cespy($m4is_3d8sa17p9gaqf5vecx0nae0gmq77);
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = $m4is_gh7agjsse['main'];

$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = (0 - $m4is_gh7agjsse['canc']);
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = (0 - $m4is_gh7agjsse['payf']);

}
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = array_unique($m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj, SORT_NUMERIC);
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}
}
function m4is_r3rs4fa6pajn80ak3522e9nfam($m4is_1fq23brgs, $m4is_d60kn1d3yvprp62rs332) {
$m4is_5pc2b4asdb7axyckycnzk80bdj8wytk = empty($m4is_d60kn1d3yvprp62rs332['customer_id']) ? 0 : $m4is_d60kn1d3yvprp62rs332['customer_id'];

$m4is_yrsthh0s4s62mfk9 = empty($m4is_d60kn1d3yvprp62rs332['status']) ? '' : $m4is_d60kn1d3yvprp62rs332['status'];
$m4is_nctf6sc4v5npxn5der7ve5gs = empty($m4is_d60kn1d3yvprp62rs332['product_id']) ? 0 : $m4is_d60kn1d3yvprp62rs332['product_id'];

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = empty($m4is_d60kn1d3yvprp62rs332['user_id']) ? 0 : $m4is_d60kn1d3yvprp62rs332['user_id'];
if ($m4is_wk4dh1rnd3wmwvsggq51nhn87) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_wk4dh1rnd3wmwvsggq51nhn87);

if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$m4is_gh7agjsse = $this->m4is_32rzh6s8fx9cespy($m4is_nctf6sc4v5npxn5der7ve5gs);
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = [];

if ($m4is_yrsthh0s4s62mfk9 == 'trialling') {
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = $m4is_gh7agjsse['trial'];
}
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = array_unique($m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj,
 SORT_NUMERIC);
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}
}
function m4is_bbbr8fdjp( $m4is_x0xnrab26kk90734vqnvk, $m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv,
 $m4is_ch8hrhh6sba02hkj735k3 ) {
if ($m4is_x0xnrab26kk90734vqnvk !== $m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv) {
$m4is_5pc2b4asdb7axyckycnzk80bdj8wytk = $m4is_ch8hrhh6sba02hkj735k3->customer_id;

$m4is_kykq0jz8n0vsd5a3kyfh = new EDD_Customer($m4is_5pc2b4asdb7axyckycnzk80bdj8wytk);
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $m4is_kykq0jz8n0vsd5a3kyfh->user_id;

$m4is_nctf6sc4v5npxn5der7ve5gs = $m4is_ch8hrhh6sba02hkj735k3->product_id;
$m4is_59eh7khgnbwpmvm9ywxd = $self->m4is_pb64hmcsq7yy( $m4is_nctf6sc4v5npxn5der7ve5gs,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
if ($m4is_wk4dh1rnd3wmwvsggq51nhn87) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_wk4dh1rnd3wmwvsggq51nhn87);

if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj = [];
$m4is_gh7agjsse = $this->m4is_32rzh6s8fx9cespy($m4is_nctf6sc4v5npxn5der7ve5gs);

if ($m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv == 'active') {
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = $m4is_gh7agjsse['main'];
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = ( 0 - $m4is_gh7agjsse['trial'] );

$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = ( 0 - $m4is_gh7agjsse['canc'] );
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = ( 0 - $m4is_gh7agjsse['payf'] );

}
elseif ($m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv == 'cancelled') {
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = $m4is_gh7agjsse['canc'];

$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = ( 0 - $m4is_gh7agjsse['trial'] );
}
elseif ($m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv == 'expired') {
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = $m4is_gh7agjsse['payf'];

$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = ( 0 - $m4is_gh7agjsse['trial'] );
}
elseif ($m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv == 'completed') {
$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = ( 0 - $m4is_gh7agjsse['main'] );

$m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj[] = ( 0 - $m4is_gh7agjsse['trial'] );
}
elseif ($m4is_cxn112zve7r20ghxbznvqmt9mdx5j1dv == 'failing') {

}
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $m4is_v6kjh1r9fyhh16c2p3cdvbxg8eryyhsj,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}
}
}
}



private function m4is_5eragr7sh2yyj356m() {
add_action( 'edd_complete_purchase',
 [$this, 'm4is_985csh610302y71retsz'] );
add_action( 'edd_subscription_post_create', [$this, 'm4is_r3rs4fa6pajn80ak3522e9nfam'], 10,
 2);
add_action( 'edd_subscription_status_change', [$this, 'm4is_bbbr8fdjp'], 10, 3 );
}
}