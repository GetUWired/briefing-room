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

final class m4is_rn5d7867js9nrsh3ej5wrgwj3 {
private static object $m4is_132xe588j;
private static string $m4is_v4beyw7zqhr3;
static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
}
static function m4is_7r6cdgwyw6hx759ceqbn6cdyfd8e() {
m4is_zrrt34b1nqxbv::m4is_d3h5y3yjgcsg9tp5sqd1();

self::m4is_tv4esry3m8xmfa5g6g3m63xp8dexwegy();
self::$m4is_132xe588j->m4is_tyd13qd09k14r();
}
static function m4is_tv4esry3m8xmfa5g6g3m63xp8dexwegy() {
if ( ! self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'sync_ecommerce', false ) ) {
return;
}
m4is_bbwjksaqsay3yt68xq9afn::m4is_05djdppw();
}

static function m4is_gydatejdbxtfk() {
$m4is_kw193k52gqp8vsnss7sy = 'RecurringOrder';

$m4is_ak30nyyk0g6ax1qeac6fy38tk7 = 1000;
$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3;
$m4is_562x78yvcsqa2qz69njxhhm8c21 = m4is_c2ry5jv8yz446k40191::m4is_nx69e5png6y6v( 0,
 'cron', 'Expiring Subscriptions' );
date_default_timezone_set( 'America/New_York' );
$m4is_egm0frk4dhxzgq5rzry34q5v79t2 = date('Y-m-d');

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',
];
$m4is_j34bmw9dcjexfj1qpz = [
'Status' => 'Active',
'EndDate' => '~<=~' . $m4is_egm0frk4dhxzgq5rzry34q5v79t2,

];
$m4is_b8kp39yep9qysj = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2( $m4is_kw193k52gqp8vsnss7sy, $m4is_ak30nyyk0g6ax1qeac6fy38tk7,
 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
if ( is_array( $m4is_b8kp39yep9qysj ) ) {
$m4is_0chcpza6xmp1 = ['Status' =>
 'Inactive'];
if ( empty( $m4is_w5ga224cdt0w75c38kx ) ) {
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( $m4is_562x78yvcsqa2qz69njxhhm8c21,
 "No active expired recurring orders found.\n" );
}
else {
foreach( $m4is_b8kp39yep9qysj as $m4is_z1w4e9gz8m3e9pg7yydpb2 ) {
m4is_xm67qjyegqdeb9wqcm::m4is_5smzakqeahg0vdxh35zwmhx7kj01s8( $m4is_kw193k52gqp8vsnss7sy,
 (int) $m4is_z1w4e9gz8m3e9pg7yydpb2['Id'], $m4is_0chcpza6xmp1);
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f( $m4is_562x78yvcsqa2qz69njxhhm8c21,
 "Deactivating Recurring Order #{$m4is_z1w4e9gz8m3e9pg7yydpb2['Id']}\n" );
usleep( 250000 );
}
}
}
}

static function m4is_8hwc4kvv4g0w6gqhqe3r() {
$m4is_y0jv847gpa2fthefgyfy = (int) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'makepass_scan_tag', 0 );
$m4is_0ddgwy9f87vp71cafd3rp7d = (int) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'makepass_success_tag', 0 );
$m4is_qpk69n3k0vqd6g = (int) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'makepass_success_actionset', 0 );
$m4is_x1xgeh83mtg4f6 = (int) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'makepass_scan_size', 0 );
$m4is_th384m7gvm775j7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'username_field',
 'Email' );
$m4is_wte2qk9hdk1zj7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'password_field', 'Password' );

if ( $m4is_x1xgeh83mtg4f6 < 1 || $m4is_x1xgeh83mtg4f6 > 5 ) {
return;
}
if ( ( ! $m4is_y0jv847gpa2fthefgyfy ) || ( ! $m4is_0ddgwy9f87vp71cafd3rp7d && ! $m4is_qpk69n3k0vqd6g ) ) {
return;

}
$m4is_562x78yvcsqa2qz69njxhhm8c21 = m4is_c2ry5jv8yz446k40191::m4is_nx69e5png6y6v( 0, 'cron', 'scanMakePass Started' );

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( 'Contact',
 true );
$m4is_j34bmw9dcjexfj1qpz = [
'Groups' => $m4is_y0jv847gpa2fthefgyfy,
];
$m4is_er73m18j35gqvx95t7d34y7 = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj('Contact',
 $m4is_x1xgeh83mtg4f6, 0, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5, 'LastUpdated', false);
if (is_array($m4is_er73m18j35gqvx95t7d34y7) ) {
foreach($m4is_er73m18j35gqvx95t7d34y7 as $m4is_cyg7rcfhzagmm5v) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = isset($m4is_cyg7rcfhzagmm5v['Id']) ? (int) $m4is_cyg7rcfhzagmm5v['Id'] : 0;

$m4is_brqpn8fkzntmz = isset($m4is_cyg7rcfhzagmm5v[$m4is_th384m7gvm775j7]) ? strtolower(trim($m4is_cyg7rcfhzagmm5v[$m4is_th384m7gvm775j7]) ) : '';

$m4is_wv6y6wn6n8jqdwcyyzm45tnzxph4t3j = isset($m4is_cyg7rcfhzagmm5v['Email']) ? strtolower(trim($m4is_cyg7rcfhzagmm5v['Email']) ) : '';

$m4is_q5q2m24b4v3scxz6py0b4s73z0 = isset($m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7]) ? $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] : '';

$m4is_8sezvqjmjp811vq3d0a3cssrq23d = $m4is_cyg7rcfhzagmm5v['Groups'];
$m4is_2kzry2h1hxh9jvx = false;
$m4is_w68jmn4nevt72c89t6k5w = false;

$m4is_46mk286a9b51zt4aweshvcbzah0m = [];
m4is_c2ry5jv8yz446k40191::m4is_7zqnbebmdnh9njhs69f($m4is_562x78yvcsqa2qz69njxhhm8c21, "Contact ID = {$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}, Username = {$m4is_brqpn8fkzntmz}");

if (empty($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) ) {
break;
}
if (empty($m4is_brqpn8fkzntmz) ) {
$m4is_46mk286a9b51zt4aweshvcbzah0m[$m4is_th384m7gvm775j7] = $m4is_wv6y6wn6n8jqdwcyyzm45tnzxph4t3j;

$m4is_cyg7rcfhzagmm5v[$m4is_th384m7gvm775j7] = $m4is_wv6y6wn6n8jqdwcyyzm45tnzxph4t3j;
$m4is_mr4hnyh6fa0p9sm0m8wfs1 = $m4is_wv6y6wn6n8jqdwcyyzm45tnzxph4t3j;

}

if (username_exists($m4is_mr4hnyh6fa0p9sm0m8wfs1) || email_exists($m4is_mr4hnyh6fa0p9sm0m8wfs1) ) {
$m4is_hartbe843crydzh = m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_46mk286a9b51zt4aweshvcbzah0m); 
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx("-{$m4is_y0jv847gpa2fthefgyfy}", $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx("{$m4is_0ddgwy9f87vp71cafd3rp7d}", $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
break;
}
if (empty($m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7]) ) {
$m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] = self::$m4is_132xe588j->m4is_d4hrfy3cjzb3y58yrjedq69fqd958dp();

$m4is_46mk286a9b51zt4aweshvcbzah0m[$m4is_wte2qk9hdk1zj7] = $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7];
$m4is_hartbe843crydzh = m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_46mk286a9b51zt4aweshvcbzah0m); 
}
self::$m4is_132xe588j->m4is_bpzt4p8q92db7($m4is_cyg7rcfhzagmm5v);

$m4is_da9a082104kffcaa94z9d = [];

$m4is_da9a082104kffcaa94z9d['user_login'] = $m4is_cyg7rcfhzagmm5v[$m4is_th384m7gvm775j7];
$m4is_da9a082104kffcaa94z9d['user_pass'] = $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7];

$m4is_da9a082104kffcaa94z9d['first_name'] = isset($m4is_cyg7rcfhzagmm5v['FirstName']) ? trim($m4is_cyg7rcfhzagmm5v['FirstName']) : '';

$m4is_da9a082104kffcaa94z9d['last_name'] = isset($m4is_cyg7rcfhzagmm5v['LastName']) ? trim($m4is_cyg7rcfhzagmm5v['LastName']) : '';

$m4is_da9a082104kffcaa94z9d['user_url'] = isset($m4is_cyg7rcfhzagmm5v['Website']) ? trim($m4is_cyg7rcfhzagmm5v['Website']) : '';
$m4is_da9a082104kffcaa94z9d['user_email'] = isset($m4is_cyg7rcfhzagmm5v['Email']) ? strtolower(trim($m4is_cyg7rcfhzagmm5v['Email']) ) : '';

$m4is_g61yzqs7ecta0xztr70d7v = [
'contact' => $m4is_cyg7rcfhzagmm5v
];
$_POST['pass1'] = $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7];

$m4is_da9a082104kffcaa94z9d['display_name'] = apply_filters( 'memberium/wpuser/display_name', self::$m4is_132xe588j->m4is_799rb1qtbarhq4g00yhfttadxrgh0w( $m4is_g61yzqs7ecta0xztr70d7v ),
 $m4is_cyg7rcfhzagmm5v );
$m4is_da9a082104kffcaa94z9d['nickname'] = apply_filters( 'memberium/wpuser/nickname', $m4is_da9a082104kffcaa94z9d['display_name'],
 $m4is_cyg7rcfhzagmm5v);
$m4is_da9a082104kffcaa94z9d['user_nicename'] = apply_filters( 'memberium/wpuser/nicename', sanitize_title( $m4is_da9a082104kffcaa94z9d['nickname'],
 $m4is_da9a082104kffcaa94z9d['display_name'] ), $m4is_cyg7rcfhzagmm5v );
$m4is_e0p4v3hbgbam06hvmsb = self::$m4is_132xe588j->m4is_f54f6mxb3zka1m($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

if (is_int($m4is_e0p4v3hbgbam06hvmsb) && $m4is_e0p4v3hbgbam06hvmsb > 0) {
self::$m4is_132xe588j->m4is_5vtbryfazyjf979ttdx0kp($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_e0p4v3hbgbam06hvmsb);
do_action('user_register', $m4is_e0p4v3hbgbam06hvmsb);
if (is_multisite() && ! is_user_member_of_blog($m4is_e0p4v3hbgbam06hvmsb) ) {
$m4is_vbew83xhsqmwkq = get_current_blog_id();

$m4is_pc4kj0wscw812k7e02sshv95 = get_blog_option( $m4is_vbew83xhsqmwkq, 'default_role', 'subscriber' );
add_user_to_blog( $m4is_vbew83xhsqmwkq,
 $m4is_e0p4v3hbgbam06hvmsb, $m4is_pc4kj0wscw812k7e02sshv95 );
}
if (function_exists('WPCW_actions_users_newUserCreated') ) {
WPCW_actions_users_newUserCreated($m4is_e0p4v3hbgbam06hvmsb);

}
}
if (! empty($m4is_y0jv847gpa2fthefgyfy) ) {
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx("-{$m4is_y0jv847gpa2fthefgyfy}", $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

}
if (! empty($m4is_0ddgwy9f87vp71cafd3rp7d) ) {
self::$m4is_132xe588j->m4is_ppmdm3jy0dzgsnx($m4is_0ddgwy9f87vp71cafd3rp7d, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

}
if (! empty($m4is_qpk69n3k0vqd6g) ) {
self::$m4is_132xe588j->m4is_x5k6c7dm38wwaxnhnzse($m4is_qpk69n3k0vqd6g, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);

}
usleep( 250000 );

}
}
}



private static function m4is_s8zvk31qa3xma9yyma3me7f() {
global $wpdb;
$m4is_k7p8pmxsbkqrje3y20 = constant( 'MEMBERIUM_DB_QUEUE' );

$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `appname` = '{$m4is_v4beyw7zqhr3}' AND `actiontype` = 'contactupdate'";

return $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
}
private static function m4is_knnpkpba211kx8() {
global $wpdb;
$m4is_sh6trpzy09ys4jh9 = 0;

if (self::m4is_s8zvk31qa3xma9yyma3me7f() ) {
$m4is_k7p8pmxsbkqrje3y20 = constant( 'MEMBERIUM_DB_QUEUE' );
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id`, `data` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `actiontype` = 'contactupdate' ORDER BY `id` ASC ";

$m4is_tbdh9qb6r6z = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, OBJECT_K);
if (is_array($m4is_tbdh9qb6r6z)) {
foreach($m4is_tbdh9qb6r6z as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_bamv772v) {
$m4is_sh6trpzy09ys4jh9++;
}
}
}
return $m4is_sh6trpzy09ys4jh9;
}
private static function m4is_2dj4wxp7gtktp5br($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
global $wpdb;

$m4is_v4beyw7zqhr3 = self::$m4is_v4beyw7zqhr3;
$m4is_k7p8pmxsbkqrje3y20 = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `value` FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `id` = {$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp} AND `appname` = '{$m4is_v4beyw7zqhr3}' AND `fieldname` = 'LastUpdated'";

return $wpdb->get_var($m4is_5rbenkpt1v7xby2cknbs7);
}
private static function m4is_v7s28gpbx8d8syqkfhm($m4is_cyg7rcfhzagmm5v) {
global $wpdb;

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = isset($m4is_cyg7rcfhzagmm5v['Id']) ? $m4is_cyg7rcfhzagmm5v['Id'] : 0;
if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
$m4is_k7p8pmxsbkqrje3y20 = constant( 'MEMBERIUM_DB_QUEUE' );

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `contactid` = {$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp} AND `action` = 'contactupdate';";

$m4is_5rbenkpt1v7xby2cknbs7 = "INSERT INTO `{$m4is_k7p8pmxsbkqrje3y20}` () VALUES ()";
}
}
private static function m4is_y9s2wkcjafe8gg613at3bp() {
global $wpdb;

$m4is_hfk64wpnmxzg = get_option('memberium/contact/scan', '2000-01-01T00:00:00');
$m4is_k7p8pmxsbkqrje3y20 = 'Contact';
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n($m4is_k7p8pmxsbkqrje3y20,
 true);
$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_ns7cayak3vne92c21vvb8en734g8 = 'LastUpdated';

$m4is_z81tvhx0by6g88js7vkdv38x90w7x = 1;
$m4is_j34bmw9dcjexfj1qpz = [
'Groups' => '%',
'LastUpdated' => "~>=~ {$m4is_hfk64wpnmxzg}",
 
];
$m4is_er73m18j35gqvx95t7d34y7 = m4is_xm67qjyegqdeb9wqcm::m4is_d8s3zgnjg44vfw98h7t49kpspj($m4is_k7p8pmxsbkqrje3y20, $m4is_rkmcn1zd3r3k149h20vfr8z,
 $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_7b2yfzk0054, $m4is_ns7cayak3vne92c21vvb8en734g8, $m4is_z81tvhx0by6g88js7vkdv38x90w7x);

if (is_array($m4is_er73m18j35gqvx95t7d34y7)) {
foreach($m4is_er73m18j35gqvx95t7d34y7 as $m4is_cyg7rcfhzagmm5v) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $m4is_cyg7rcfhzagmm5v['Id'];

$m4is_mhr5r8dya7new0rmymjx6p2bbbsaqj = $m4is_cyg7rcfhzagmm5v['LastUpdated'];
}
}
echo '<Pre>', count($m4is_er73m18j35gqvx95t7d34y7),
 '</Pre>';
echo '<Pre>', print_r($m4is_er73m18j35gqvx95t7d34y7, true), '</Pre>';
echo '<Pre>', print_r($m4is_7b2yfzk0054, true), '</Pre>';

}
private static function m4is_az4xq83aqxbrncazsz1() {
self::m4is_knnpkpba211kx8();
self::m4is_y9s2wkcjafe8gg613at3bp();
}

public static function m4is_0jnnbgbmhmq6v1j4ekzpa3x8md() : void {
global $wpdb;

$m4is_syqymyz40rx4xgtqp8475ffwzw = 3;
$m4is_njvqsdkydqd7y4ja05ewv6660r = (int) self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'api_log_duration', $m4is_syqymyz40rx4xgtqp8475ffwzw );
$m4is_njvqsdkydqd7y4ja05ewv6660r = max( 1, min( 7, $m4is_njvqsdkydqd7y4ja05ewv6660r ) );

$m4is_k7p8pmxsbkqrje3y20 = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_ec2tzgexfvhyejmcnyn();
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "DELETE FROM `{$m4is_k7p8pmxsbkqrje3y20}` WHERE `appname` = %s AND `timestamp` < DATE_SUB( NOW(), INTERVAL %d DAY )",
 self::$m4is_v4beyw7zqhr3, $m4is_njvqsdkydqd7y4ja05ewv6660r );
$m4is_hartbe843crydzh = $wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

delete_transient( m4is_an0pxqdph6ax26586c::m4is_27xhnyzghwnf() );
if ( $m4is_hartbe843crydzh ) {
$m4is_5tmqg45z37r82cfb67prh = sprintf( 'API Log trimmed to last %d day(s). %d rows deleted.',
 $m4is_njvqsdkydqd7y4ja05ewv6660r, $m4is_hartbe843crydzh );
m4is_c2ry5jv8yz446k40191::m4is_nx69e5png6y6v( 0, 'cron', $m4is_5tmqg45z37r82cfb67prh );

}
}
}