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

final class m4is_knfcbrvkjrz3n8k8y6gf {
private object $m4is_132xe588j;
private string $m4is_1n5r8f23byhh2xkx2t4pncj99ey858;
private string $m4is_v4beyw7zqhr3;

private array $m4is_7g459kxnbvxsyrtgwktx6mqw9v7d91ws = [];
private array $m4is_ywpr6y4a0j72383nm72cck6wv = [];
private int $m4is_dypyh7k7 = 0;


public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}

private function __construct() {
m4is_csmdzh4sncasvp1enyykf1bk::m4is_93g1spw7sp1wbdw8qrg( 'app_admin', $this );
$this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 = 'memberium';

$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$this->m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );

$this->m4is_dypyh7k7 = (int) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'preview_mode' );
$m4is_1cj0p20ywp1k5hqv62 = (string) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'version' );
$this->m4is_19ka9z5gq101z4();
add_action( 'admin_menu', [$this, 'm4is_symh1fmfbxesp4xd1dgp8p5rc'] );

if ( ! method_exists( $this->m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j(),
 'isVerified' ) || ! $this->m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->isVerified() ) {
return;
}
if ($m4is_1cj0p20ywp1k5hqv62 !== $this->m4is_132xe588j->m4is_5kywzj74m8ht8s0() ) {
m4is_xzw82zta23vanf8pzajwyvkv4::m4is_a6e0x2swh7tn3();

}
if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
m4is_zrrt34b1nqxbv::m4is_5qw71m3dzesr1mczt4k();
}
add_action('admin_enqueue_scripts',
 [$this, 'm4is_5f8xnbsqnrsv1a8s4f3kt50x5b0'], 1);
add_action('admin_init', [$this, 'm4is_cx47fb4z2wr4nfezxea4nrv0aqnhr8a'], 100);
add_action('admin_notices',
 [$this, 'm4is_76f97ym000rxztr'] );
add_action('admin_post_memberium_scan_users', [$this, 'm4is_r2v58x7x']);
add_action('wpmu_new_blog',
 [$this, 'm4is_exq8jz6p6d'], 10, 6);
add_filter('plugin_action_links', [$this, 'm4is_8y9d5xapavx2kf1mp3x49dt6ysxj2s'], 10, 2);
add_filter('plugin_action_links',
 [$this, 'm4is_vggd9hjt7mjsr2ee'], 10, 4);
if ( ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
return;
}
add_action( 'wp_loaded',
 [$this, 'm4is_8psyxksn91f6qgghdt07wn1j'], 1 );
add_action( 'admin_init', [$this, 'm4is_1d8w88aw552xz'] );
add_action( 'admin_print_scripts-edit.php',
 [$this, 'm4is_jnx8fecv4kdzv3ydkqv2p13j49'] );
add_action( 'edit_form_after_title', [$this, 'm4is_2sge7pztm'] );
add_action( 'init',
 [$this, 'm4is_jzbv2vxg37tnc3gdkp5'], 5 );
add_action( 'init', [$this, 'm4is_j1kx6w8mv'], 999999 );
add_action( 'save_post', [$this,
 'm4is_aqaqks798nqedseqden'], 1, 3 );


if ( m4is_zrrt34b1nqxbv::m4is_yb1kyacqc84h1zq0m17py(['unlimited' ] ) ) {
if ( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'fast_user_list' ) ) {
add_filter( 'manage_users_columns', [ $this, 'm4is_t0dhttts823h3ypj' ], PHP_INT_MAX );
}
}

add_post_type_support( 'page',
 'excerpt' );
if ( function_exists( 'wp_generate_password' ) ) {
if ( empty( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'random_seed' ) ) ) {
$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( wp_generate_password( 16, FALSE, FALSE), 'settings', 'random_seed' );

}
}
require_once ABSPATH . 'wp-admin/includes/plugin.php';



add_filter( 'bulk_actions-edit-post', [ $this, 'm4is_7haqvwbfn96yt6s3qbkckqv75pcnp'] );

add_filter( 'bulk_actions-edit-page', [ $this, 'm4is_7haqvwbfn96yt6s3qbkckqv75pcnp'] );
add_filter( 'handle_bulk_actions-edit-post',
 [ $this, 'm4is_d4acy4r96xxw963g7pqqz'], 10, 3 );
add_filter( 'handle_bulk_actions-edit-page', [ $this, 'm4is_d4acy4r96xxw963g7pqqz'],
 10, 3 );
add_filter( 'gutenberg_can_edit_post_type', [$this, 'm4is_903mpcfjm1bks59vknj'], PHP_INT_MAX, 2 );
add_action( 'user_new_form',
 [$this, 'm4is_eeva87w6'] );
if ( isset( $_GET['memberium_ignore_notice'] ) ) {
add_action( 'init', [$this, 'm4is_9535d6hv'] );
}
$this->m4is_5eragr7sh2yyj356m();


}

private function m4is_5eragr7sh2yyj356m(): void {
$this->m4is_r1yhv1n45v();
$this->m4is_x081h66q1ydst4w3t3brv7w();
add_action( 'admin_init',
 [$this, 'm4is_2z7pes0zrxgkp5e6jj9pr'], 10, 0 );
add_action( 'shutdown', [$this, 'm4is_g4cc042jm'], 0 );
add_filter( 'manage_users_columns',
 [$this, 'm4is_6x4tc58fbqr6tsdfsbb28ntdqn846'] );
add_filter( 'manage_users_custom_column', [$this, 'm4is_8jds0d61dvcsn3s9rgzk7c89240xeqfj'],
 10, 3 );
add_filter( 'random_password', [$this, 'm4is_9epqp0jjmkd26'], 30, 4 );
}
public function m4is_g4cc042jm() : void {
m4is_rw8p2dfy073ez::m4is_aschqmg4jvgew();

}

private function m4is_19ka9z5gq101z4() {
$classes = [
'm4is_84nxzhny047d5zf' => 'classes/ui/admin_banner',
'm4is_4801pvycyx2vfyx' =>
 'classes/access/admin-menu',
'm4is_7xqff3zw7sh9n98f8w' => 'classes/ui/admin-post-edit',
'm4is_8kt6jrvvp0dqqhkrjncfa2gc' => 'classes/ui/bulk-post-edit',

'm4is_htshtzd47fz1djssy3d38y1e3qg' => 'classes/ui/admin-tabs',
'm4is_bpxwq3b3pzcb4e217scq729fsqm' => 'classes/access/admin-taxonomy',

'm4is_dv250ra9xbtaf' => 'classes/ui/admin-ui',
'm4is_x4a1eykmgp006vp9fe4' => 'screens/user-edit',
'm4is_hc8af2j3geb67rsaxth6zmvcpnmee4g' =>
 'classes/access/admin-widgets',
'm4is_qz5b1djw3zw' => 'classes/diagnostics',
'm4is_9xkkn485565d5zj83k854r5t' => 'classes/post_sherpa',

];
$this->m4is_132xe588j->m4is_30j08k6rn5y4pz4w( $classes );
}




public function m4is_qgyt1w7cqvxv0j2dhp2a9pt79q0t06c() : bool {
return (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'show_advanced_options', 0 );
}
public function m4is_kwa1ey1fnr8718() : int {
$m4is_tz1rt7sbq40fade6e6rx = 0;
$m4is_tz1rt7sbq40fade6e6rx = empty( $_POST['post_ID'] ) ? $m4is_tz1rt7sbq40fade6e6rx : (int) $_POST['post_ID'];

$m4is_tz1rt7sbq40fade6e6rx = empty( $_GET['post'] ) ? $m4is_tz1rt7sbq40fade6e6rx : (int) $_GET['post'];
return $m4is_tz1rt7sbq40fade6e6rx;
 
}


function m4is_6c1kj95ycpcym5c() : string {
$m4is_h7zwy5f0w3y9gx3wm = isset( $_GET['post_type'] ) ? $_GET['post_type'] : '';
$m4is_h7zwy5f0w3y9gx3wm = empty( $m4is_h7zwy5f0w3y9gx3wm ) ? get_post_type( $this->m4is_kwa1ey1fnr8718() ) : $m4is_h7zwy5f0w3y9gx3wm;

$m4is_h7zwy5f0w3y9gx3wm = empty( $m4is_h7zwy5f0w3y9gx3wm ) ? 'post' : $m4is_h7zwy5f0w3y9gx3wm;
return $m4is_h7zwy5f0w3y9gx3wm;
}




public function m4is_6j5ywapypexcz3j158m8wsdkn0aav( int $m4is_tz1rt7sbq40fade6e6rx,
 string $m4is_apjp826fsgzggbrpaes6j, string $m4is_knxbec8fr3be1s2tkx0ydee0z, $m4is_mta1y5w3r = 'edit_posts' ) : bool {
if ( defined( 'DOING_AUTOSAVE') && DOING_AUTOSAVE) {
return false;

}
if ( empty( $_POST[$m4is_apjp826fsgzggbrpaes6j] ) ) {
return false;
}
if ( ! wp_verify_nonce( $_POST[$m4is_apjp826fsgzggbrpaes6j],
 $m4is_knxbec8fr3be1s2tkx0ydee0z ) ) {
error_log( sprintf( 'Memberium: [warning] Permission to save Post denied.  Invalid nonce in save request for Post ID %d.',
 $m4is_tz1rt7sbq40fade6e6rx ) );
return false;
}
$m4is_mta1y5w3r = is_array( $m4is_mta1y5w3r ) ? $m4is_mta1y5w3r : array_filter( explode( ',',
 $m4is_mta1y5w3r ) );
foreach( $m4is_mta1y5w3r as $m4is_h57f3gcgvjpvxfrymxxpdyr6r5 ) {
if ( current_user_can( $m4is_h57f3gcgvjpvxfrymxxpdyr6r5,
 $m4is_tz1rt7sbq40fade6e6rx ) ) {
return true;
}
}
error_log( sprintf( 'Memberium: [warning] Permission to save Post denied.  User %d does not have permissions to edit Post ID %d.',
 get_current_user_id(), $m4is_tz1rt7sbq40fade6e6rx ) );
return false;
}

public function m4is_tta1h0ffef83kbebp48hb6yhay(int $m4is_tz1rt7sbq40fade6e6rx,
 array $m4is_19x1c17et728k945, array $m4is_cegjvya4jj68mdszk): void {
foreach ( $m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
if ( isset( $m4is_cegjvya4jj68mdszk[$m4is_j8j55t8dz79m7] ) ) {
if ( empty( $m4is_cegjvya4jj68mdszk[$m4is_j8j55t8dz79m7] ) ) {
delete_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_j8j55t8dz79m7 );
}
else {
update_post_meta( $m4is_tz1rt7sbq40fade6e6rx, $m4is_j8j55t8dz79m7, $m4is_cegjvya4jj68mdszk[$m4is_j8j55t8dz79m7] );

}
}
}
}




function m4is_7haqvwbfn96yt6s3qbkckqv75pcnp( array $m4is_gh7agjsse ) : array {
$m4is_gh7agjsse['memberium-page-export'] = 'Page Export';

$m4is_gh7agjsse['memberium-remove-protection'] = 'Remove Protection';
return $m4is_gh7agjsse;
}
function m4is_d4acy4r96xxw963g7pqqz(string $m4is_qb5923051s91rbx9v,
 string $m4is_dqm1wmb1yd7, $m4is_wtt69zqx60txhy6926q5ank1ajb8) : string {
if ( $m4is_dqm1wmb1yd7 == 'memberium-page-export' ) {
$m4is_2wydzkpph0ydemvcpz9 = m4is_9xkkn485565d5zj83k854r5t::m4is_t68q5yvvzzw2611jwtaf7ag3d( $m4is_wtt69zqx60txhy6926q5ank1ajb8 );

return get_admin_url() . 'upload.php?item=' . (int) $m4is_2wydzkpph0ydemvcpz9;
return get_permalink($m4is_2wydzkpph0ydemvcpz9);
}
if ( $m4is_dqm1wmb1yd7 == 'memberium-remove-protection' ) {
return m4is_8kt6jrvvp0dqqhkrjncfa2gc::m4is_039cews2phfj1mfna9p0qeqn( $m4is_qb5923051s91rbx9v,
 $m4is_wtt69zqx60txhy6926q5ank1ajb8 );
}
return $m4is_qb5923051s91rbx9v;
}
function m4is_8y9d5xapavx2kf1mp3x49dt6ysxj2s( array $m4is_k61hwdyzxs9b65jx0pqzp0qx593whs,
 string $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 ) {
if ( stripos( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7, '/memberium2.php' ) === false ) {
return $m4is_k61hwdyzxs9b65jx0pqzp0qx593whs;

}
$m4is_x8gqmdx2zg8rbtf6c68cy9zsb = get_admin_url( null, 'admin.php?page=memberium-support&tab=support' );
$m4is_pw9zz5rshh = get_admin_url( null,
 'admin.php?page=memberium-support&tab=updates' );
$m4is_k61hwdyzxs9b65jx0pqzp0qx593whs['updates'] = sprintf( '<a href="%s"> %s </a>',
 $m4is_pw9zz5rshh, __( 'Check Updates', 'plugin_domain' ) );
$m4is_k61hwdyzxs9b65jx0pqzp0qx593whs['support'] = sprintf( '<a href="%s"> %s </a>',
 $m4is_x8gqmdx2zg8rbtf6c68cy9zsb, __( 'Support', 'plugin_domain' ) );

return $m4is_k61hwdyzxs9b65jx0pqzp0qx593whs;
}
function m4is_903mpcfjm1bks59vknj(bool $m4is_5dqmqdqk2p0zs35p2jzp,
 string $m4is_yhdk2h7srcr7n5mzjnw7m6b) : bool {
if ($m4is_5dqmqdqk2p0zs35p2jzp) {
$m4is_jkhkrtkfe5n2 = [
'memb_shortcodeblocks',
'partials',

];
$m4is_yhdk2h7srcr7n5mzjnw7m6b = strtolower($m4is_yhdk2h7srcr7n5mzjnw7m6b);
$m4is_5dqmqdqk2p0zs35p2jzp = ! in_array($m4is_yhdk2h7srcr7n5mzjnw7m6b,
 $m4is_jkhkrtkfe5n2);
}
return $m4is_5dqmqdqk2p0zs35p2jzp;
}
function m4is_vggd9hjt7mjsr2ee(array $m4is_gh7agjsse, string $m4is_zy8a70vtfm18z95pk,
 $m4is_93t3t3jcbm5kprmxy3rkg, $m4is_0k1mrqgxx6bb) : array {
if ($m4is_zy8a70vtfm18z95pk == 'i2sdk2/i2sdk2.php') {
$m4is_gh7agjsse['activate'] = '<em style="color:red;">No longer needed.  Please delete.</em>';

}
return $m4is_gh7agjsse;
}



function m4is_jzbv2vxg37tnc3gdkp5() {
add_action( 'personal_options_update', [$this, 'm4is_c1kcg4he4fs2axegrvrq89zw7'],
 1 );
add_action( 'edit_user_profile_update', [$this, 'm4is_c1kcg4he4fs2axegrvrq89zw7'], 1 );
add_filter( 'get_sample_permalink_html',
 [$this, 'm4is_fh0g13626pjx5763dfrqrxnkda7j'], 10, 5 );
if ( current_user_can( 'manage_options' ) ) {
add_action( 'delete_user', ['m4is_905gs7jtwy8pyf98mfy6n',
 'm4is_z7vp93qgzbew2tn'], 10, 3 );
add_action( 'load-users.php', [$this, 'm4is_r4pgn786kg'] );
add_action( 'edit_user_profile', [$this,
 'm4is_54mjc82vtf47mtyyvge'], PHP_INT_MIN );
add_action( 'show_user_profile', [$this, 'm4is_54mjc82vtf47mtyyvge'] );
}
if ( current_user_can( 'manage_options' ) ) {
$m4is_13qf0ayc1v2nrvbee9x1n1axjgb = defined( 'MEMBERIUM_BETA' ) && constant( 'MEMBERIUM_BETA' ) == 1;

if ( $m4is_13qf0ayc1v2nrvbee9x1n1axjgb ) {
add_action( 'admin_notices', [$this, 'm4is_46g7820qh22tt258ah2gc'] );
}
}
if ( is_plugin_active( 'memberium2-installer/memberium2-installer.php' ) ) {
deactivate_plugins( 'memberium2-installer/memberium2-installer.php' );

}
}
function m4is_fh0g13626pjx5763dfrqrxnkda7j( $m4is_hn5gx2w6k, $m4is_tz1rt7sbq40fade6e6rx, $m4is_yeggz3gdq8s1ezq, $new_slug, $m4is_z4ts5pa39jf1yhjb4 ) {
if ( property_exists( $m4is_z4ts5pa39jf1yhjb4,
 'post_type' ) ) {
if ( in_array( $m4is_z4ts5pa39jf1yhjb4->post_type, ['partials', 'memb_shortcodeblocks'] ) ) {
return null;
}
}
return $m4is_hn5gx2w6k;

}
function m4is_j1kx6w8mv() {
$this->m4is_7g459kxnbvxsyrtgwktx6mqw9v7d91ws = $this->m4is_132xe588j->m4is_6ajfaq6y206kje0pv8h7yg987kwk();

$m4is_yhdk2h7srcr7n5mzjnw7m6b = isset($_GET['post_type']) ? $_GET['post_type'] : 'post';
$m4is_7mdy9dwmaxm233t4vh58e2hyjet = ! in_array($m4is_yhdk2h7srcr7n5mzjnw7m6b,
 $this->m4is_7g459kxnbvxsyrtgwktx6mqw9v7d91ws);
$m4is_7mdy9dwmaxm233t4vh58e2hyjet = $m4is_7mdy9dwmaxm233t4vh58e2hyjet || in_array($m4is_yhdk2h7srcr7n5mzjnw7m6b,
 ['memb_shortcodeblocks']);
if ( $m4is_7mdy9dwmaxm233t4vh58e2hyjet ) {
add_action( 'manage_pages_custom_column', [$this, 'm4is_jtwnxb90wp'],
 10, 2 );
add_action( 'manage_posts_custom_column', [$this, 'm4is_jtwnxb90wp'], 10, 2 );


add_filter( 'manage_pages_columns', [$this,
 'm4is_34yhk5at0eercbsr28gyzbpb1pnq'] );
add_filter( 'manage_posts_columns', [$this, 'm4is_34yhk5at0eercbsr28gyzbpb1pnq'] );
}
}
function m4is_2sge7pztm() {
if ( isset( $_GET['post'] ) ) {
$m4is_z4ts5pa39jf1yhjb4 = get_post( $_GET['post'] );
 
if ( empty( $m4is_z4ts5pa39jf1yhjb4->post_name ) ) {
return;
}
}
else {
return;
}
$m4is_cwv4aa9zak1r37 = '';
if ( $m4is_z4ts5pa39jf1yhjb4->post_type == 'partials' ) {
$m4is_cwv4aa9zak1r37 = '[memb_include_partial id=' . $m4is_z4ts5pa39jf1yhjb4->ID . ']';

}
elseif ( $m4is_z4ts5pa39jf1yhjb4->post_type == 'memb_shortcodeblocks' ) {
$m4is_cwv4aa9zak1r37 = '[membc_' . $m4is_z4ts5pa39jf1yhjb4->post_name . ']';

}
if ( ! empty( $m4is_cwv4aa9zak1r37 ) ) {
echo '<h2>', $m4is_cwv4aa9zak1r37, '</h2>';
}
}



private function m4is_9vdvepyyxnjsd44t0h43h27k2kv4() {
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `{$wpdb->options}` WHERE `option_name` LIKE '%transient_memberium%' OR `option_name` LIKE '%transient_timeout_memberium%' ; ";

$wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
}
function m4is_5g9nyns0wmrsdnxhwwc6q() {
global $wpdb;
$this->m4is_9vdvepyyxnjsd44t0h43h27k2kv4();

$m4is_nxb5kndgx93yrn9j = m4is_amz58dmg8j7e898bj8r8b1::m4is_sk3aqw0kgpr5n3wwe9v61gzsh7msm2();
$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_nxb5kndgx93yrn9j,
 'settings', 'referral_partner_order' );
m4is_w3pp5rsxdc03bns3::m4is_7h358pwxvm3t8();
m4is_q28s00aabb2yd3d::m4is_rc7cpymf5b7xy32xqb50085d4m();

m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_erjfehtz389a6pbsrw();
m4is_0ddg4zyk7dn8eg0283::m4is_r929khbv823hsxjc0498q();
m4is_9kyahnxyzzazbe0qnby5s1qsx::m4is_ya6dm679h47p23g73pk0();

m4is_bbwjksaqsay3yt68xq9afn::m4is_vatx0jm7();
m4is_bbwjksaqsay3yt68xq9afn::m4is_vgzt7cz68yj8();
if (! empty( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'sync_ecommerce') ) ) {
m4is_bbwjksaqsay3yt68xq9afn::m4is_05djdppw();
}
$this->m4is_132xe588j->m4is_9tpv0wdkefwnhzj();
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Keap Synchronized',
 'update');
}
function m4is_t0q5jwvrez() {
global $wpdb;
$m4is_s3f7pws7md = get_option( 'memberium_tables', [] );
$m4is_hs8sf803prjv7zry = [];

$m4is_5rbenkpt1v7xby2cknbs7 = 'SHOW TABLES';
$m4is_fw5nrgymf8e8eykpzncmezdkwwz68ys0 = $wpdb->get_col( $m4is_5rbenkpt1v7xby2cknbs7 );

foreach( $m4is_s3f7pws7md as $m4is_k7p8pmxsbkqrje3y20 ) {
if ( ! in_array( $m4is_k7p8pmxsbkqrje3y20, $m4is_fw5nrgymf8e8eykpzncmezdkwwz68ys0 ) ) {
$m4is_hs8sf803prjv7zry[] = $m4is_k7p8pmxsbkqrje3y20;

}
}
return $m4is_hs8sf803prjv7zry;
}
function m4is_q3bmv4w07() {






}
function m4is_5f8xnbsqnrsv1a8s4f3kt50x5b0($m4is_sr96vk8tz2fjh0371e0hb8dc9z80) {


$m4is_33we84v139 = plugin_dir_url( MEMBERIUM_HOME );

$m4is_cjkxe4p2nw1w = false;
$m4is_dtx76emk0wbymt515wkbk0eac3bp0c = $this->m4is_132xe588j->m4is_5kywzj74m8ht8s0();
$m4is_cjkxe4p2nw1w = $m4is_cjkxe4p2nw1w || strpos($m4is_sr96vk8tz2fjh0371e0hb8dc9z80,
 'memberium') !== false;
$m4is_3g7faa0zhw70 = [
'edit.php',
'post-new.php',
'post.php',
'user-edit.php',
'users.php'
];
$m4is_3g7faa0zhw70 = apply_filters('memberium/enhanced_admin_scripts',
 $m4is_3g7faa0zhw70); 
$m4is_cjkxe4p2nw1w = $m4is_cjkxe4p2nw1w || in_array($m4is_sr96vk8tz2fjh0371e0hb8dc9z80, $m4is_3g7faa0zhw70);

if ( $m4is_cjkxe4p2nw1w ) {
wp_register_style('memberium_admin_css', $m4is_33we84v139 . 'css/admin.css', false, $m4is_dtx76emk0wbymt515wkbk0eac3bp0c,
 'all');
wp_enqueue_style('memberium_admin_css');
wp_register_script('memberium_adminsettings', $m4is_33we84v139 . 'js/admin-settings.js',
 false, $m4is_dtx76emk0wbymt515wkbk0eac3bp0c);
wp_enqueue_script('memberium_adminsettings');
}
wp_register_script('memberium_modal',
 $m4is_33we84v139 . 'js/admin-modal.js', false, $m4is_dtx76emk0wbymt515wkbk0eac3bp0c);
wp_enqueue_script('memberium_modal');
if ($m4is_cjkxe4p2nw1w) {
wp_register_style('wpal_s2css',
 $m4is_33we84v139 . 'css/wpal-select2.min.css', false, '4.0.3', 'all');
wp_register_script('wpal_s2js', $m4is_33we84v139 . 'js/wpal-select2.full.min.js',
 ['jquery'], '4.0.3', true);
wp_enqueue_style('wpal_s2css');
wp_enqueue_script('wpal_s2js');
wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.12.0/css/all.css',
 false, '5.12.0');
}
}
function m4is_cx47fb4z2wr4nfezxea4nrv0aqnhr8a() {

if (is_network_admin() || isset($_GET['activate-multi']) ) {
return;

}
if (is_admin() ) {
$m4is_j8j55t8dz79m7 = 'memberium/activation_timestamp';
$m4is_x0p8hd5j = (time() - get_option($m4is_j8j55t8dz79m7,
 time()) );
if ($m4is_x0p8hd5j < 5) {
update_option($m4is_j8j55t8dz79m7, time() ); 
wp_safe_redirect(add_query_arg(['page' => 'memberium'],
 admin_url('admin.php') ) );
exit;
}
}
}
function m4is_46g7820qh22tt258ah2gc() {
$m4is_h0n0e21dan1zcw2g33p27097pbmq6v = $_GET;
if (isset($m4is_h0n0e21dan1zcw2g33p27097pbmq6v['tab']) && $m4is_h0n0e21dan1zcw2g33p27097pbmq6v['tab'] == 'checklist' || ! current_user_can('manage_options') ) {
return;

}
if (! get_user_meta( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(), 'memberium_ignore_notice_checklist', true) ) {
$m4is_kntysdm8syx6p78qcvav33410b = $this->m4is_de4arh8pd0qye0arz128q3pr98(true);

if (! empty($m4is_kntysdm8syx6p78qcvav33410b['active']) ) {
$m4is_65aka8xf2h8j = m4is_dv250ra9xbtaf::m4is_cgv7f4tfx4f4589tjrhxk('checklist');

$m4is_53mq3k4adf3m0 = "updated";
$m4is_5tmqg45z37r82cfb67prh =
'<h3 style="margin-bottom:6px;">Memberium Setup CheckList</h3>' .
'<p>Your next setup checklist step is to ' . $m4is_kntysdm8syx6p78qcvav33410b['active'][0]['t'] . '</p><p><a href="admin.php?page=dashboard&tab=checklist"><strong>Click here</strong></a> to return to the setup checklist.</p>' .
'<div style="text-align:right;"><p><a href="'. $m4is_65aka8xf2h8j .'">Hide these Reminders</a></p></div>';

echo"<div class='{$m4is_53mq3k4adf3m0}'>{$m4is_5tmqg45z37r82cfb67prh}</div>";
}
}
}
function m4is_9535d6hv() {
$m4is_h0n0e21dan1zcw2g33p27097pbmq6v = $_GET;

$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();
$m4is_j8j55t8dz79m7 = isset($m4is_h0n0e21dan1zcw2g33p27097pbmq6v['memberium_ignore_notice']) ? sanitize_text_field($m4is_h0n0e21dan1zcw2g33p27097pbmq6v['memberium_ignore_notice']) : '';

if (! empty($m4is_j8j55t8dz79m7) ) {
update_option("memberium/notice/{$m4is_j8j55t8dz79m7}", 1);
if (wp_get_referer() ) {
wp_safe_redirect(wp_get_referer() );

} else {
wp_safe_redirect(site_url() );
}
}
}

public function m4is_76f97ym000rxztr(): void {
$m4is_65aka8xf2h8j = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(1226);

if (false && ! m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv() ) {
echo <<<HTML

				<div class="error">
					<p><strong style="font-size:150%;color:red;">Memberium License Missing / Expired{$m4is_65aka8xf2h8j}</strong></p>
					<p>For possible causes, <a target="_blank" href="https://memberium.com/?p=1226">click here</a>.</p>
					<p>If you have not yet purchased a license, please <a target="_blank" href="https://memberium.com/pricing/">purchase a license by clicking here</a></p>
					<p>If you already have a license please <a target="_blank" href="https://memberium.com/support/">contact support by clicking here</a>.</p>
				</div>
			HTML;

}
}
private function m4is_hvwka15hdbp1varh1v48wwqk3c1nm1g(): bool {
$m4is_k1x5xhjzpjha = false;
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_reqk4j37r56s6zn7zh4kq0ba0ndfx = array_filter( explode( ',', $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'allow_wpadmin_dashboard' ) ) );
if ( ! empty( $m4is_reqk4j37r56s6zn7zh4kq0ba0ndfx ) ) {
$m4is_k1x5xhjzpjha = true;
foreach ( $m4is_reqk4j37r56s6zn7zh4kq0ba0ndfx as $m4is_h57f3gcgvjpvxfrymxxpdyr6r5 ) {
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_h57f3gcgvjpvxfrymxxpdyr6r5 ) ) {
$m4is_k1x5xhjzpjha = false;
break;
}
}
}
else {
if ( ! $m4is_k1x5xhjzpjha ) {
$m4is_bf2pw24a0cskfb1g5k9 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'allow_wpadmin', false );
if ( $m4is_bf2pw24a0cskfb1g5k9 ) {
$m4is_k1x5xhjzpjha = false;
}
else {
$m4is_k1x5xhjzpjha = true;
}
}
}
return ! $m4is_k1x5xhjzpjha;

}

function m4is_8psyxksn91f6qgghdt07wn1j() {
static $m4is_618e73f6a10c32yq2w61r2ck86zktyp0 = false;
$m4is_618e73f6a10c32yq2w61r2ck86zktyp0 = $m4is_618e73f6a10c32yq2w61r2ck86zktyp0 || defined( 'DOING_AJAX' ) && DOING_AJAX;

$m4is_618e73f6a10c32yq2w61r2ck86zktyp0 = $m4is_618e73f6a10c32yq2w61r2ck86zktyp0 || function_exists( 'wp_doing_ajax' ) && wp_doing_ajax();

$m4is_618e73f6a10c32yq2w61r2ck86zktyp0 = $m4is_618e73f6a10c32yq2w61r2ck86zktyp0 || isset($_SERVER['SCRIPT_NAME']) && ( basename($_SERVER['SCRIPT_NAME']) == 'admin-post.php' );

$m4is_618e73f6a10c32yq2w61r2ck86zktyp0 = $m4is_618e73f6a10c32yq2w61r2ck86zktyp0 || $this->m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp();

$m4is_618e73f6a10c32yq2w61r2ck86zktyp0 = $m4is_618e73f6a10c32yq2w61r2ck86zktyp0 || $this->m4is_hvwka15hdbp1varh1v48wwqk3c1nm1g();
$m4is_618e73f6a10c32yq2w61r2ck86zktyp0 = apply_filters( 'memberium/wpadmin/allow',
 $m4is_618e73f6a10c32yq2w61r2ck86zktyp0 );
if ( $m4is_618e73f6a10c32yq2w61r2ck86zktyp0 ) {
return;
}



$m4is_pqecxfec342ksq5fzv1mg = wp_login_url($_SERVER['REQUEST_URI']);


if ( is_user_logged_in() ) {
$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $this->m4is_132xe588j->m4is_vd3qpw0vkdm() );

$m4is_ps46agx1v8d1xg57m = get_user_meta( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(), 'login_count', 0 );
if ( $m4is_ps46agx1v8d1xg57m == 1 ) {
$m4is_k2err6rjpaex2dctjk86xtb8ap = isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['first_login_page'] ) ? $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['first_login_page'] : 0;

}
else {
$m4is_k2err6rjpaex2dctjk86xtb8ap = isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'] ) ? $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'] : 0;

}
if ( $m4is_k2err6rjpaex2dctjk86xtb8ap === -1) {
if ( function_exists( 'bbp_get_user_profile_url' ) ) {
$m4is_pqecxfec342ksq5fzv1mg = bbp_get_user_profile_url( get_current_user_id() );

}
else {
$m4is_k2err6rjpaex2dctjk86xtb8ap = 0;
}
}
if ( $m4is_k2err6rjpaex2dctjk86xtb8ap > 0) {
$m4is_pqecxfec342ksq5fzv1mg = get_permalink( $m4is_k2err6rjpaex2dctjk86xtb8ap );

}
else {
$m4is_pqecxfec342ksq5fzv1mg = get_site_url();
}

$m4is_1m2ehbkkpe = function_exists( 'get_current_screen' ) ? get_current_screen() : false;

if ( $m4is_1m2ehbkkpe && $m4is_1m2ehbkkpe->id == 'user-edit' ) {
if ( function_exists('bp_loggedin_user_domain') ) {
$m4is_pqecxfec342ksq5fzv1mg = bp_loggedin_user_domain();

}
else {
$pages = get_option('memberium_pages', [] );
$m4is_pqecxfec342ksq5fzv1mg = isset( $pages['profile_page']) ? get_permalink($pages['profile_page']) : $m4is_pqecxfec342ksq5fzv1mg;

}
}
}
if ( ! $m4is_pqecxfec342ksq5fzv1mg ) {
$m4is_pqecxfec342ksq5fzv1mg = get_site_url();
}
wp_redirect( $m4is_pqecxfec342ksq5fzv1mg,
 302, 'Memberium Admin Dashboard Protection' );
exit;
}



function m4is_exq8jz6p6d( $m4is_vbew83xhsqmwkq, $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 $m4is_e8h8dhk83hxkj818w, $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1, $m4is_h7gvq7efjn, $m4is_pk98f5nk ) {
global $wpdb;
if (is_plugin_active_for_network('memberium2/memberium2.php') ) {
$m4is_0e750pb5bde6snj96ny55y84w882gw = $wpdb->blogid;

switch_to_blog($m4is_vbew83xhsqmwkq);
m4is_xzw82zta23vanf8pzajwyvkv4::m4is_w8vwxae663qt3hmcbv49q95xmfsyw( false );
switch_to_blog($m4is_0e750pb5bde6snj96ny55y84w882gw);

}
}



public function admin_menu_alert( $count = 0, $text = '' ) {
$count = (int) $count;
if ( ! $count ) {
return;
}
if ( empty( $text ) ) {
$text = $count;

}
return "<span class='update-plugins count-{$count}' title='{$text}'><span class='update-count'>{$text}</span></span>";
}

public function admin_menu_logcount(): int {
global $wpdb;

static $m4is_7g9y793jjckyb;
$m4is_bbh568ry1bkpfabek8kpvney = 'memberium/log_count';
$m4is_y8932443qmxht76g140xsenedgc = 3 * MINUTE_IN_SECONDS;

$m4is_7g9y793jjckyb = (int) get_transient( $m4is_bbh568ry1bkpfabek8kpvney );
if ( ! $m4is_7g9y793jjckyb ) {
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) FROM %i WHERE `appname` = %s";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, m4is_an0pxqdph6ax26586c::m4is_0sbrs1vk06py44g(), $this->m4is_v4beyw7zqhr3 );

$m4is_7g9y793jjckyb = (int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) FROM %i WHERE `appname` = %s";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, m4is_c2ry5jv8yz446k40191::m4is_2j5zjm5s0(), $this->m4is_v4beyw7zqhr3 );

$m4is_7g9y793jjckyb = $m4is_7g9y793jjckyb + (Int) $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
set_transient( $m4is_bbh568ry1bkpfabek8kpvney,
 $m4is_7g9y793jjckyb, $m4is_y8932443qmxht76g140xsenedgc );
}
return $m4is_7g9y793jjckyb;
}

private function m4is_grn49ctr718w25sabdrrjvecn19p9gbc() : int {
static $m4is_7g9y793jjckyb;

if ( $m4is_7g9y793jjckyb ) {
return $m4is_7g9y793jjckyb;
}
$m4is_dmhydt6d2gv1na7516p1dv37qpmd = $this->m4is_132xe588j->get_i2sdk_options();

$m4is_7g9y793jjckyb = $m4is_dmhydt6d2gv1na7516p1dv37qpmd['server_verified'] ? 0 : 1;
$m4is_7g9y793jjckyb = $m4is_7g9y793jjckyb + empty( $m4is_dmhydt6d2gv1na7516p1dv37qpmd['app_name'] ) ? 1 : 0;

$m4is_7g9y793jjckyb = $m4is_7g9y793jjckyb + empty( $m4is_dmhydt6d2gv1na7516p1dv37qpmd['api_key'] ) ? 1 : 0;
$m4is_7g9y793jjckyb = $m4is_7g9y793jjckyb + class_exists( 'm4is_a6kbph84cyre1t461' ) ? 0 : 1;

return $m4is_7g9y793jjckyb;
}
public function m4is_symh1fmfbxesp4xd1dgp8p5rc() {
$m4is_ep6rjata = 'manage_options';
if (! current_user_can($m4is_ep6rjata) ) {
return;

}
$m4is_12vrxdmdm9trvd1a = m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv();
$m4is_skj04gekxycwc5n8v7rx37wfhxz9p6 = 'dashicons-groups';
 
$m4is_dmhydt6d2gv1na7516p1dv37qpmd = $this->m4is_132xe588j->get_i2sdk_options();
$m4is_w0y3c6pa7wp01b = 'memberium';
$m4is_nab4fbybdg04ebj55s6 = $m4is_ep6rjata;

$m4is_rne42rb1669ez6kbhcbrxaj = 2;
$m4is_5vcwef7pymrfb3zawe = $this->m4is_grn49ctr718w25sabdrrjvecn19p9gbc();

if (! empty($m4is_5vcwef7pymrfb3zawe) ) {
add_menu_page('',
 'Memberium ' . $this->admin_menu_alert(1, 'Alert'), $m4is_ep6rjata, $m4is_w0y3c6pa7wp01b, [$this, 'm4is_dew73syv5h5ep5d0kwy'], $m4is_skj04gekxycwc5n8v7rx37wfhxz9p6,
 $m4is_rne42rb1669ez6kbhcbrxaj);
add_submenu_page($m4is_w0y3c6pa7wp01b, 'Memberium Support', 'Support', $m4is_nab4fbybdg04ebj55s6, 'memberium-support',
 [$this, 'm4is_87xfjsdk8hqz1g13p8k3sjnjy7pfy9ra']);
if (class_exists('m4is_a6kbph84cyre1t461') ) {
add_submenu_page($m4is_w0y3c6pa7wp01b,
 'Keap Connection', 'Keap Connection ' . $this->admin_menu_alert(1, 'Unconfigured'), $m4is_ep6rjata, 'i2sdk-admin', ['m4is_c4mzjpzve4q56yjyanxyvarke597vf',
 'display_i2sdk_admin_menu'] );
}
return;
}

if ( ! $m4is_12vrxdmdm9trvd1a) {
add_menu_page('Memberium', 'Memberium', $m4is_ep6rjata,
 $m4is_w0y3c6pa7wp01b, [$this, 'm4is_dew73syv5h5ep5d0kwy'], $m4is_skj04gekxycwc5n8v7rx37wfhxz9p6, $m4is_rne42rb1669ez6kbhcbrxaj);
add_submenu_page($m4is_w0y3c6pa7wp01b,
 'Memberium Support', 'Support', $m4is_nab4fbybdg04ebj55s6, 'memberium-support', [$this, 'm4is_87xfjsdk8hqz1g13p8k3sjnjy7pfy9ra']);

add_submenu_page($m4is_w0y3c6pa7wp01b, 'Keap Connection', 'Keap Connection', $m4is_ep6rjata, 'i2sdk-admin', ['m4is_c4mzjpzve4q56yjyanxyvarke597vf',
 'display_i2sdk_admin_menu']);
add_submenu_page($m4is_w0y3c6pa7wp01b, '', '', $m4is_ep6rjata, $m4is_w0y3c6pa7wp01b, [$this, 'm4is_n4dh27xk2aga6vy']);

return;
}

if (! class_exists('m4is_a6kbph84cyre1t461') || ! method_exists( $this->m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j(),
 'isVerified') || ! $this->m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->isVerified() ) {
add_menu_page('Memberium', 'Memberium',
 $m4is_ep6rjata, $m4is_w0y3c6pa7wp01b, [$this, 'm4is_dew73syv5h5ep5d0kwy'], $m4is_skj04gekxycwc5n8v7rx37wfhxz9p6, $m4is_rne42rb1669ez6kbhcbrxaj);

add_submenu_page($m4is_w0y3c6pa7wp01b, 'Memberium Support', 'Support', $m4is_nab4fbybdg04ebj55s6, 'memberium-support', [$this, 'm4is_87xfjsdk8hqz1g13p8k3sjnjy7pfy9ra']);

if (class_exists('m4is_a6kbph84cyre1t461') ) {
add_submenu_page($m4is_w0y3c6pa7wp01b, 'Keap Connection', 'Keap Connection', $m4is_ep6rjata,
 'i2sdk-admin', ['m4is_c4mzjpzve4q56yjyanxyvarke597vf', 'display_i2sdk_admin_menu']);
}
return;
}

add_menu_page( '', 'Memberium', $m4is_nab4fbybdg04ebj55s6,
 $m4is_w0y3c6pa7wp01b, '', $m4is_skj04gekxycwc5n8v7rx37wfhxz9p6, $m4is_rne42rb1669ez6kbhcbrxaj );
add_submenu_page( $m4is_w0y3c6pa7wp01b,
 'Start Here', 'Start Here', $m4is_nab4fbybdg04ebj55s6, $m4is_w0y3c6pa7wp01b, [$this, 'm4is_n4dh27xk2aga6vy']);
add_submenu_page( $m4is_w0y3c6pa7wp01b,
 'Memberium Support', 'Support', $m4is_nab4fbybdg04ebj55s6, 'memberium-support', [$this, 'm4is_87xfjsdk8hqz1g13p8k3sjnjy7pfy9ra']);

add_submenu_page( $m4is_w0y3c6pa7wp01b, 'Memberium Settings', 'Settings', $m4is_nab4fbybdg04ebj55s6, 'memberium-options', [$this, 'm4is_a928pmtp1']);

add_submenu_page( $m4is_w0y3c6pa7wp01b, 'Memberium Memberships', 'Memberships', $m4is_nab4fbybdg04ebj55s6, 'memberium-memberships',
 [$this, 'm4is_ayrdet7q1']);
add_submenu_page( $m4is_w0y3c6pa7wp01b, 'Memberium Partials', 'Partials', $m4is_nab4fbybdg04ebj55s6, 'edit.php?post_type=partials');

add_submenu_page( $m4is_w0y3c6pa7wp01b, 'Memberium Custom Shortcodes', 'Custom Shortcodes', $m4is_nab4fbybdg04ebj55s6, 'edit.php?post_type=memb_shortcodeblocks');

add_submenu_page( $m4is_w0y3c6pa7wp01b, 'Memberium eCommerce Integration', 'eCommerce', $m4is_nab4fbybdg04ebj55s6, 'memberium-ecommerce',
 [$this, 'm4is_vjwjdpaxsq526tn']);
add_submenu_page( $m4is_w0y3c6pa7wp01b, 'Memberium Remote Files Configuration', 'Remote Files', $m4is_nab4fbybdg04ebj55s6,
 'memberium-remote-files', [$this, 'm4is_cx9612w000ff6eac1s1zt']);
add_submenu_page( $m4is_w0y3c6pa7wp01b, 'Sync Options', 'Sync Options',
 $m4is_nab4fbybdg04ebj55s6, 'memberium-sync-options', [$this, 'm4is_rwhcc493tn3cm5av']);
do_action('memberium_admin_menu_addons', $m4is_w0y3c6pa7wp01b);

if (defined('WPSEO_FILE') || defined('GAWP_FILE') ) {
add_submenu_page($m4is_w0y3c6pa7wp01b, 'Memberium Google Analytics', 'Google Analytics',
 $m4is_ep6rjata, 'memberium-ga', [$this, 'm4is_6ak6745yftpr6tpctdz0dgcq4ewd2web']);
}
$m4is_5vcwef7pymrfb3zawe = $this->admin_menu_logcount();

add_submenu_page($m4is_w0y3c6pa7wp01b, 'Memberium Logs', 'Logs '. $this->admin_menu_alert($m4is_5vcwef7pymrfb3zawe), $m4is_ep6rjata,
 'memberium-logs', [$this, 'm4is_c1sh9f9665']);
add_submenu_page($m4is_w0y3c6pa7wp01b, 'Keap Connection', 'Keap Connection', $m4is_ep6rjata,
 'i2sdk-admin', ['m4is_c4mzjpzve4q56yjyanxyvarke597vf', 'display_i2sdk_admin_menu'] );

add_submenu_page( '', '', '', $m4is_nab4fbybdg04ebj55s6,
 'dashboard', [$this, 'm4is_n4dh27xk2aga6vy']);
add_submenu_page( '', '', '', $m4is_nab4fbybdg04ebj55s6, 'memberium-welcome-screen',
 [$this, 'm4is_n4dh27xk2aga6vy']);
}




function m4is_2z7pes0zrxgkp5e6jj9pr() : void {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;

}
if ( isset( $_POST['manual_upgrade'] ) && isset( $_POST['manual_upgrade_confirm'] ) ) {
$this->m4is_ahw7r9mjeh();
}
}

private function m4is_ahw7r9mjeh() : void {
if ( $_POST['manual_upgrade_confirm'] !== 'download' ) {
return;

}
$m4is_0q57s54p8pmsar = m4is_p6537fedxhj0dgtd67cpq7rdpxna::m4is_jyrjb22p6a1z90610pndnxg1rysr4j7b();
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = isset( $_POST['manual_upgrade'] ) ? (int) $_POST['manual_upgrade'] : 0;

if ( ! array_key_exists( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_0q57s54p8pmsar ) || empty( $m4is_0q57s54p8pmsar[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['url'] ) ) {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( '<p><strong>Memberium</strong>:  Unable to download update</p>',
 'error' );
return;
}
wp_redirect( $m4is_0q57s54p8pmsar[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['url'], 302, 'Memberium Update Download' );

exit;
}

function m4is_t840m5vqh05t7( $m4is_bgh043xn6rsy366fbkkec = 'memberium2' ) : string {
$m4is_0q57s54p8pmsar = m4is_p6537fedxhj0dgtd67cpq7rdpxna::m4is_jyrjb22p6a1z90610pndnxg1rysr4j7b();

$m4is_dk9wgfgampyrcvbjnjw6hhgkjn8knd8h = $this->m4is_132xe588j->m4is_5kywzj74m8ht8s0();
$m4is_4wrgmn9rbpn71sz1z = m4is_p6537fedxhj0dgtd67cpq7rdpxna::m4is_6h4kk370tjx4405rz0e9();

$m4is_8dc8vc04w9yydbm75wy914 = '';
$m4is_xv5wqwa1tkka6wrrnf08g1k5454 = '';
if ( is_array( $m4is_0q57s54p8pmsar ) ) {
foreach ( $m4is_0q57s54p8pmsar as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh=>
$m4is_nt48femkg6za9v5mn1sr23m62k ) {
$m4is_fe42r2djxgf1h7pt = $m4is_dk9wgfgampyrcvbjnjw6hhgkjn8knd8h == $m4is_nt48femkg6za9v5mn1sr23m62k['version'] ? ' selected="selected" ' : '';

$m4is_8dc8vc04w9yydbm75wy914 .= sprintf( '<option value="%d" %s>%s %s</option>', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_fe42r2djxgf1h7pt,
 $m4is_nt48femkg6za9v5mn1sr23m62k['name'], $m4is_nt48femkg6za9v5mn1sr23m62k['comments'] );
}
}
if ( $m4is_4wrgmn9rbpn71sz1z ) {
$m4is_xv5wqwa1tkka6wrrnf08g1k5454 = <<<HTMLBLOCK

				<option value="">Choose your option</option>
				<option value="download">Download</option>
				<option value="install">Install</option>
			HTMLBLOCK;

}
else {
$m4is_xv5wqwa1tkka6wrrnf08g1k5454 = <<<HTMLBLOCK

				<option value="">Choose your option</option>
				<option value="download">Download</option>
			HTMLBLOCK;

}
$output = <<<HTMLBLOCK

			<select name="manual_upgrade" style="width:500px !important; margin-bottom:6px;">
				{$m4is_8dc8vc04w9yydbm75wy914}
			</select><br>
			<select name="manual_upgrade_confirm" style="width:250px !important; margin-bottom:6px;">
				{$m4is_xv5wqwa1tkka6wrrnf08g1k5454}
			</select>
		HTMLBLOCK;

return $output;
}

function m4is_pdgxt6p0m5dk1w8n1xyr0j( int $m4is_810wvzajghq1j, string $m4is_bgh043xn6rsy366fbkkec ) {
if ( ! m4is_p6537fedxhj0dgtd67cpq7rdpxna::m4is_6h4kk370tjx4405rz0e9() ) {
return;

}
$m4is_0q57s54p8pmsar = m4is_p6537fedxhj0dgtd67cpq7rdpxna::m4is_jyrjb22p6a1z90610pndnxg1rysr4j7b();
if ( isset( $m4is_0q57s54p8pmsar[$m4is_810wvzajghq1j]['url'] ) ) {
$m4is_trbmvf3vtet8xa9444cradv = WP_PLUGIN_DIR;

$m4is_r5r2e04nv0m88wjf24s17pdfpzcq9avd = ABSPATH . '.maintenance';
$m4is_8k4jh1aq8dstt6wmwdfkxhwwtxkdw = 'PD9waHAgJHVwZ3JhZGluZyA9IHRpbWUoKTs=';
 
$m4is_j9m4kg3tkb8w121dbz0scewxaxab = $m4is_0q57s54p8pmsar[$m4is_810wvzajghq1j]['url'];

ignore_user_abort();

$m4is_24xp3tza9hzznsrkbmj = $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = download_url( $m4is_j9m4kg3tkb8w121dbz0scewxaxab,
 300 );
if ( is_wp_error( $m4is_24xp3tza9hzznsrkbmj ) ) {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( '<p><strong>Memberium</strong>:  Unable to download update</p>',
 'error' );
return;
}


if (file_exists($m4is_24xp3tza9hzznsrkbmj)) {


require_once ABSPATH .'/wp-admin/includes/file.php'; 
WP_Filesystem();

file_put_contents( $m4is_r5r2e04nv0m88wjf24s17pdfpzcq9avd, $m4is_8k4jh1aq8dstt6wmwdfkxhwwtxkdw );
if ( ! function_exists( 'disk_free_space' ) ) {
add_filter( 'wp_doing_cron',
 '__return_false', 10, 1 );
}
unzip_file($m4is_24xp3tza9hzznsrkbmj, $m4is_trbmvf3vtet8xa9444cradv);
remove_filter( 'wp_doing_cron',
 '__return_false', 10 );
unlink(ABSPATH . '.maintenance');
unlink($m4is_24xp3tza9hzznsrkbmj);
}
if ( function_exists( 'opcache_reset' ) ) {
opcache_reset();

}
echo '<p>Upgrade Process Completed.</p>';
echo '<p><a href="', admin_url(), 'admin.php?page=memberium">Continue</a></p>';
exit;
}
else {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('<p><strong>Memberium</strong>:  Unable to install update</p>',
 'error');
}
}




public function m4is_bsh7jwwmtdhvd238q8dz9ebn0qcm9( $m4is_gv7vjyv2c6g3nepw6 = [] ) : string {
global $wpdb;
$m4is_kgdwxx4f = 'memberium/posts';

$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = 'admin/list/json';
$m4is_yqbs57707b9pgq = 15;
$m4is_kezq8tet = wp_cache_get( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z,
 $m4is_kgdwxx4f, false, $m4is_6p2tyvq6paj43svrn7zqaykxzy );
if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
return $m4is_kezq8tet;
}
else {
$m4is_kezq8tet = [];

}
$m4is_14c9gc3ng0se54ah544a702g7 = defined( 'MEMBERIUM_IGNORE_POSTTYPE' ) ? constant( 'MEMBERIUM_IGNORE_POSTTYPE' ) : '';
$m4is_n7x0afpz = [
'exclude' =>
 'topic,reply' . empty( $m4is_14c9gc3ng0se54ah544a702g7 ) ? '' : ',' . $m4is_14c9gc3ng0se54ah544a702g7,
'entries' => [],
];
$m4is_gv7vjyv2c6g3nepw6 = wp_parse_args($m4is_gv7vjyv2c6g3nepw6,
 $m4is_n7x0afpz);
$m4is_gv7vjyv2c6g3nepw6['exclude'] = "'" . implode("','", explode(',', $m4is_gv7vjyv2c6g3nepw6['exclude']) ) . "'";

unset($m4is_n7x0afpz);
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `ID`, `post_title` FROM `{$wpdb->posts}` WHERE `post_status` = 'publish' AND `post_type` IN ('" . implode("','",
 m4is_dv250ra9xbtaf::m4is_6ejn23xcqf1wv93y2jkp4jzp5h01tf() ) . "') AND `post_type` NOT IN (" . $m4is_gv7vjyv2c6g3nepw6['exclude'] . ") ORDER BY `id` ASC;";

$m4is_3g7faa0zhw70 = (array) $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A);
$m4is_kezq8tet[] = [
'id' => 0,
'text' => '(Default / Homepage)'
];

foreach ($m4is_3g7faa0zhw70 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh=>$m4is_ek8adjz9yz7wvga34bby56) {
$m4is_kezq8tet[] = [
'id' =>
 $m4is_ek8adjz9yz7wvga34bby56['ID'],
'text' => "{$m4is_ek8adjz9yz7wvga34bby56['post_title']} ({$m4is_ek8adjz9yz7wvga34bby56['ID']})",

];
unset($m4is_3g7faa0zhw70[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]);
}
unset($m4is_ek8adjz9yz7wvga34bby56, $m4is_5rbenkpt1v7xby2cknbs7);

$m4is_kezq8tet = json_encode($m4is_kezq8tet, JSON_INVALID_UTF8_SUBSTITUTE);
wp_cache_set( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_kezq8tet,
 $m4is_kgdwxx4f, $m4is_yqbs57707b9pgq );
return $m4is_kezq8tet;
}


public function m4is_em263hzs53sqczbc25r8237pv9mm5vd($m4is_g61yzqs7ecta0xztr70d7v = [] ) : string {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'id',
 $this->m4is_132xe588j->m4is_vd3qpw0vkdm() );
if (! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 instanceof WP_User ) {
return json_encode([]);

}
$m4is_csjzz89h9mwt = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->allcaps;
$m4is_mta1y5w3r = [];
foreach( $m4is_csjzz89h9mwt as $m4is_6k84v5caq4k =>
 $m4is_bakq3rbxwr9zp9pc ) {
$m4is_mta1y5w3r[] = [
'id' => $m4is_6k84v5caq4k,
'text' => ucwords( strtr( $m4is_6k84v5caq4k, '_', ' ' ) )
];

}
return json_encode( $m4is_mta1y5w3r );
}



public function m4is_zc7q4nsws2sex5f05z4pk() : void {
$m4is_5tmqg45z37r82cfb67prh = '';

$m4is_ns4qcwvfp0kepxre = $this->m4is_132xe588j->m4is_sz0a0b9kd2wt3kf4z1cwj038j()->isVerified();
if ( $m4is_ns4qcwvfp0kepxre ) {
$m4is_h7btsrc9e7rpdsnwha966q3g9t16f6m8 = m4is_zrrt34b1nqxbv::m4is_4t3g6z5x3k98g3vvanfv();

if ( ! $m4is_h7btsrc9e7rpdsnwha966q3g9t16f6m8 ) {
$m4is_5tmqg45z37r82cfb67prh .= <<<HTMLBLOCK

					<p style="color:red;">
						<strong>License Missing</strong>
					</p>
					<p>
						This site is missing a valid license.   Please contact Memberium support with your domain name, and we will help you get your license activated.<br>
					</p>
					<hr />
				HTMLBLOCK;

}
}
$m4is_pcc1vqtq0z6c1c3qsbfhchcv4e = '7.4';
$m4is_2sc7jec92vnn3pkxmchhrqcsak5t2 = '8.2';
$m4is_qm158q37sdb3bsk0bh1 = phpversion();

$m4is_cbp3bhexdpkm = version_compare( PHP_VERSION, $m4is_pcc1vqtq0z6c1c3qsbfhchcv4e, '>=' );
if ( ! $m4is_cbp3bhexdpkm ) {
$m4is_5tmqg45z37r82cfb67prh .= <<<HTMLBLOCK

				<p>
					Your hosting service PHP install (v{$m4is_qm158q37sdb3bsk0bh1}) is out of date.  Your current version is missing features required by Memberium, and may cause crashes.<br>
					<strong>Please update to PHP v{$m4is_pcc1vqtq0z6c1c3qsbfhchcv4e} or later.  We recommend v{$m4is_pcc1vqtq0z6c1c3qsbfhchcv4e} - v{$m4is_2sc7jec92vnn3pkxmchhrqcsak5t2}.</strong><br>
					If you have questions, please contact Memberium Support.
				</p>
			HTMLBLOCK;

}
$m4is_pcc1vqtq0z6c1c3qsbfhchcv4e = '6.2';
$m4is_h5a91hgfm2n9at2dn89fsmepnva = $this->m4is_132xe588j->m4is_tfgcn7v2rx4cy4();
$m4is_rzzmj2y57rj3w0ntj60t5 = version_compare( $m4is_h5a91hgfm2n9at2dn89fsmepnva,
 $m4is_pcc1vqtq0z6c1c3qsbfhchcv4e, '>=' );
if ( ! $m4is_rzzmj2y57rj3w0ntj60t5 ) {
$m4is_5tmqg45z37r82cfb67prh .= <<<HTMLBLOCK

				<p>
				Your WordPress install (v{$m4is_h5a91hgfm2n9at2dn89fsmepnva}) is out of date.  Your old version is missing features used by Memberium.<br>
				<strong>Please update to WordPress v{$m4is_pcc1vqtq0z6c1c3qsbfhchcv4e} or later to ensure maximum reliability.</strong><br>
				If you have questions, please contact Memberium Support.
				</p>
			HTMLBLOCK;

}
if ( empty( $m4is_5tmqg45z37r82cfb67prh ) ) {
return;
}
echo <<<HTMLBLOCK

			<div id="memberium-custom-modal" class="memberium-custom-modal">
				<div class="memberium-custom-modal-content">
					<h3>Memberium System Health Alerts</h3>
					{$m4is_5tmqg45z37r82cfb67prh}
					<span class="memberium-custom-close">&times;</span>
				</div>
			</div>
		HTMLBLOCK;

}

public function m4is_1d8w88aw552xz() : void {
$m4is_yhdk2h7srcr7n5mzjnw7m6b = $this->m4is_6c1kj95ycpcym5c();
add_action( 'admin_footer',
 [$this, 'm4is_e2f4xq95m09m10s6ehrhvz']) ;
add_action( 'admin_footer', [$this, 'm4is_zc7q4nsws2sex5f05z4pk'] );
if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b,
 $this->m4is_7g459kxnbvxsyrtgwktx6mqw9v7d91ws ) ) {
return;
}
add_meta_box( 'is4wp-member-access' , 'Memberium Protection', [$this,
 'm4is_jphsgyv78k'], $m4is_yhdk2h7srcr7n5mzjnw7m6b, 'side' );
add_meta_box( 'is4wp-page-templates', 'Membership Templates', [$this,
 'm4is_cqgttcrkcs875xk1gacbd358gw'], $m4is_yhdk2h7srcr7n5mzjnw7m6b, 'normal' );
add_meta_box( 'is4wp-course-grid', 'Membership Course Grid',
 [$this, 'm4is_t55sp5h8yxs10yy7yyh47g1ggrc19ctx'], $m4is_yhdk2h7srcr7n5mzjnw7m6b, 'side' );
add_action( 'save_post', [$this, 'm4is_v7sr09sbvd7cj028c'] );

add_action( 'save_post', [$this, 'm4is_1sjmgwz7ap504883f00q22yskqn5'] );
add_action( 'save_post', [$this, 'm4is_dm5k4jwgzt'] );
if ( in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b,
 ['partials', 'memb_shortcodeblocks', 'elementor_library'] ) ) {
return;
}
if ( ! current_user_can( 'manage_options' ) ) {
return;
}
$m4is_ywpr6y4a0j72383nm72cck6wv = (array) m4is_dv250ra9xbtaf::m4is_6ejn23xcqf1wv93y2jkp4jzp5h01tf();

if ( ! in_array( $m4is_yhdk2h7srcr7n5mzjnw7m6b, $m4is_ywpr6y4a0j72383nm72cck6wv ) ) {
return;
}
add_meta_box( 'is4wp-custom-code',
 'Memberium Custom Page Code', [$this, 'm4is_r0r8vdmccxgk1pn8v3dz99'], $m4is_yhdk2h7srcr7n5mzjnw7m6b, 'normal' );
add_action( 'save_post',
 [$this, 'm4is_tr05gwk668tya0jez'] );
}

public function m4is_e2f4xq95m09m10s6ehrhvz() : void {
if ( ! method_exists( 'm4is_0ddg4zyk7dn8eg0283',
 'm4is_x73n0p7w' ) ) {
return;
}
echo '<!-- metabox footer -->';

$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true );

$m4is_06c8s5xs94f91335gnaey25 = $m4is_06c8s5xs94f91335gnaey25['mc'];
$m4is_xyfzj0fnmp5g4 = [];
$m4is_xyfzj0fnmp5g4[] = [
'id' => 0,

'text' => '(None)'
];
foreach ( (array) $m4is_06c8s5xs94f91335gnaey25 as $m4is_fds3y6na7va66dwa3pj7p74c => $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) {
$m4is_xyfzj0fnmp5g4[] = [
'id' =>
 $m4is_fds3y6na7va66dwa3pj7p74c,
'text' => "{$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0} ({$m4is_fds3y6na7va66dwa3pj7p74c})"
];
}
$m4is_ec49kkvtwvg36zqx = [];

$m4is_ec49kkvtwvg36zqx[] = [
'id' => 0,
'text' => '(None)'
];
foreach ( (array) $m4is_06c8s5xs94f91335gnaey25 as $m4is_fds3y6na7va66dwa3pj7p74c =>
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) {
$m4is_ec49kkvtwvg36zqx[] = [
'id' => $m4is_fds3y6na7va66dwa3pj7p74c,
'text' => "{$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0} ({$m4is_fds3y6na7va66dwa3pj7p74c})"
];

$m4is_ec49kkvtwvg36zqx[] = [
'id' => - $m4is_fds3y6na7va66dwa3pj7p74c,
'text' => "Not {$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0} (-{$m4is_fds3y6na7va66dwa3pj7p74c})"
];

}
$m4is_xyfzj0fnmp5g4 = json_encode( $m4is_xyfzj0fnmp5g4 );
$m4is_ec49kkvtwvg36zqx = json_encode( $m4is_ec49kkvtwvg36zqx );
unset( $m4is_06c8s5xs94f91335gnaey25,
 $m4is_fds3y6na7va66dwa3pj7p74c, $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 );
echo '<script>';
echo '	var taglist = ', $m4is_xyfzj0fnmp5g4,
 ';';
echo '	var taglist2 = ', $m4is_ec49kkvtwvg36zqx, ';';
echo '	var memb_coursegrid_i18n = '. json_encode([
'locked' => [
'title' =>
 __('Select Locked Course Thumbnail', 'memberium'),
'button' => __('Set Locked Course Thumbnail', 'memberium'),
'remove' => __('Remove Locked Course Thumbnail',
 'memberium'),
],
'unlocked' => [
'title' => __('Select Unlocked Course Thumbnail', 'memberium'),
'button' => __('Set Unlocked Course Thumbnail',
 'memberium'),
'remove' => __('Remove Unlocked Course Thumbnail', 'memberium'),
]
]) .';';
echo '</script>';
unset($actionsets, $m4is_06c8s5xs94f91335gnaey25);

$m4is_1cj0p20ywp1k5hqv62 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'version' );
wp_register_script('memberium_postmeta',
 plugin_dir_url( MEMBERIUM_HOME ) . 'js/postmetabox.js', [], $m4is_1cj0p20ywp1k5hqv62, true);
wp_enqueue_script('memberium_postmeta');

}

public function m4is_cqgttcrkcs875xk1gacbd358gw() : void {
$m4is_jgrm8x7qe3m7 = $this->m4is_h4xcw8dg053f1bbf29n320q20hv8tbf();
echo '<div class="memb_template_options">';

echo '<label for="_is4wp_page_template">' . _e("Install Page Template", 'memberium') . '</label> ';
echo '<select class="actionset-selector" name="_is4wp_page_template" style="width:100%; max-width:100%">';

echo '<option value="">(No Template)</option>';
if ( is_array( $m4is_jgrm8x7qe3m7 ) ) {
foreach( $m4is_jgrm8x7qe3m7 as $m4is_zq984c7s17ees36ba =>
 $m4is_r2g10s87x43pdk8y5cq9hw801g ) {
echo '<option value="', $m4is_zq984c7s17ees36ba + 1, '">', $m4is_r2g10s87x43pdk8y5cq9hw801g['name'],
 '</option>';
}
}
echo '</select>';
echo '</div>';
}

public function m4is_1sjmgwz7ap504883f00q22yskqn5() : void {
$m4is_z4ts5pa39jf1yhjb4 = $_POST;

if (! empty($m4is_z4ts5pa39jf1yhjb4['_is4wp_page_template']) ) {
$this->m4is_8drgtc2v4faemwts5( $m4is_z4ts5pa39jf1yhjb4['post_ID'],
 ( $m4is_z4ts5pa39jf1yhjb4['_is4wp_page_template'] - 1 ) );
}
}
function m4is_t55sp5h8yxs10yy7yyh47g1ggrc19ctx(){
global $post;
$m4is_pk98f5nk = get_post_meta( $post->ID,
 '_memberium/coursegrid/config', true );
$m4is_8b457gbk2wfw0dz6n0vhavam8rg = [
'unlocked' => __('Unlocked', 'memberium'),
'locked' =>
 __('Locked', 'memberium')
];
echo '<div class="memb_coursegrid_options">';
wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(),
 "memberium_coursegrid_nonce_{$post->ID}");
$m4is_7atnky6d45r5g9rc91c2j = '_memb_coursegrid';
foreach ($m4is_8b457gbk2wfw0dz6n0vhavam8rg as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0) {
$m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt = empty( $m4is_pk98f5nk[$m4is_bqhtspcavhb01spmfd3x] ) ? '' : $m4is_pk98f5nk[$m4is_bqhtspcavhb01spmfd3x];

$m4is_7e86anqymhkj14qajyegpahnj = empty( $m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt['url'] ) ? '' : esc_url( $m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt['url'] );

$m4is_68hfm5ngwwdjg727hfzg1gd = empty( $m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt['id'] ) ? 0 : (int) $m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt['id'];

echo "<div class=\"memb_coursegrid_thumbnail\" data-key=\"{$m4is_bqhtspcavhb01spmfd3x}\">";
if( ! empty( $m4is_7e86anqymhkj14qajyegpahnj ) ){
$m4is_4mzj88pt7pbtw = sprintf( __( 'Remove %s Course Thumbnail',
 'memberium' ), $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 );
echo "<a class=\"memb_coursegrid_thumbnail_remove\" href=\"#\" title=\"{$m4is_4mzj88pt7pbtw}\">";

echo "<span class=\"dashicons dashicons-dismiss\"></span>";
echo "</a>";
}
echo "<br><label for=\"{$m4is_bqhtspcavhb01spmfd3x}_url\">" . sprintf( __( '%s Thumbnail',
 'memberium' ), $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0) . "</label> ";
echo "<div class=\"memb_coursegrid_preview\">";
echo ! empty($m4is_7e86anqymhkj14qajyegpahnj) ? "<img src=\"{$m4is_7e86anqymhkj14qajyegpahnj}\"/>" : '';

echo "</div>";
echo "<div class=\"memb_coursegrid_input_button_wrap wp-clearfix\">";
echo "<input type=\"url\" class=\"large-text memb_coursegrid_thumbnail_url\" name=\"{$m4is_7atnky6d45r5g9rc91c2j}[{$m4is_bqhtspcavhb01spmfd3x}][url]\" id=\"{$m4is_bqhtspcavhb01spmfd3x}_url\" value=\"{$m4is_7e86anqymhkj14qajyegpahnj}\">";

echo "<button type=\"button\" class=\"button memb_coursegrid_thumbnail_upload\" id=\"{$m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt}_upload\">";

echo "<span class=\"dashicons dashicons-format-image\"></span>";
echo "<span class=\"screen-reader-text\">";
echo sprintf( __( 'Set %s Thumbnail',
 'memberium' ), $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 );
echo "</span>";
echo "</button>";
echo "</div>";
echo "<input type=\"hidden\" class=\"memb_coursegrid_thumbnail_id\" name=\"{$m4is_7atnky6d45r5g9rc91c2j}[{$m4is_bqhtspcavhb01spmfd3x}][id]\" id=\"{$m4is_bqhtspcavhb01spmfd3x}_id\" value=\"{$m4is_68hfm5ngwwdjg727hfzg1gd}\">";

echo "</div>";
}
$m4is_2756c5zgjyvram374p861y7ykr49 = empty( $m4is_pk98f5nk['locked_url'] ) ? '' : esc_url( $m4is_pk98f5nk['locked_url'] );
 
$m4is_mgh9afqafjbhhdvmsprw = empty( $m4is_pk98f5nk['excerpt'] ) ? '' : $m4is_pk98f5nk['excerpt']; 
$m4is_mqngqwpvn9gebshs3qkf54653qfdh9k = empty( $m4is_pk98f5nk['order'] ) ? 0 : $m4is_pk98f5nk['order'];
 
echo "<br><label for=\"memb_coursegrid_locked_url\">" . __( 'Locked Course URL', 'memberium' ) . "</label> ";
echo "<input name=\"{$m4is_7atnky6d45r5g9rc91c2j}[locked_url]\" type=\"text\" id=\"memb_coursegrid_locked_url\" value=\"{$m4is_2756c5zgjyvram374p861y7ykr49}\" class=\"widefat\">";

echo "<br><br><label for=\"memb_coursegrid_excerpt\">" . __( 'Course Excerpt', 'memberium' ) . "</label> ";
echo "<textarea id=\"memb_coursegrid_excerpt\" rows=\"4\" name=\"{$m4is_7atnky6d45r5g9rc91c2j}[excerpt]\" class=\"widefat\">{$m4is_mgh9afqafjbhhdvmsprw}</textarea>";

echo "<br><br><label for=\"memb_coursegrid_order\">" . __( 'Course Order', 'memberium' ) . "</label> ";
echo "<input name=\"{$m4is_7atnky6d45r5g9rc91c2j}[order]\" type=\"number\" max=\"9999\" id=\"memb_coursegrid_order\" value=\"{$m4is_mqngqwpvn9gebshs3qkf54653qfdh9k}\">";

echo '</div>';
}
function m4is_dm5k4jwgzt( $m4is_tz1rt7sbq40fade6e6rx ){

if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
return;

}
$m4is_167msnhv = $_POST;

if (empty($m4is_167msnhv["memberium_coursegrid_nonce_{$m4is_tz1rt7sbq40fade6e6rx}"]) || ! wp_verify_nonce($m4is_167msnhv["memberium_coursegrid_nonce_{$m4is_tz1rt7sbq40fade6e6rx}"],
 $this->m4is_132xe588j->m4is_54b9bwwsx7sym() ) ) {
return;
}

if (! empty($m4is_167msnhv['post_type']) && 'page' == $m4is_167msnhv['post_type']) {
if (! current_user_can('edit_pages',
 $m4is_tz1rt7sbq40fade6e6rx) ) {
return;
}
}
else {
if (! current_user_can('edit_posts', $m4is_tz1rt7sbq40fade6e6rx) ) {
return;
}
}

$m4is_d60kn1d3yvprp62rs332 = [];

if (! empty($m4is_167msnhv['_memb_coursegrid']) ) {
$m4is_vvb9r37gv16gt562b1vkk6n = $m4is_167msnhv['_memb_coursegrid'];

foreach (['unlocked',
 'locked'] as $m4is_bqhtspcavhb01spmfd3x) {
$m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt = !empty($m4is_vvb9r37gv16gt562b1vkk6n[$m4is_bqhtspcavhb01spmfd3x]) ? $m4is_vvb9r37gv16gt562b1vkk6n[$m4is_bqhtspcavhb01spmfd3x] : [];

$m4is_7e86anqymhkj14qajyegpahnj = !empty($m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt['url']) ? esc_url($m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt['url']) : '';

$m4is_68hfm5ngwwdjg727hfzg1gd = !empty($m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt['id']) ? (int)$m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt['id'] : 0;

if( !empty($m4is_7e86anqymhkj14qajyegpahnj) || !empty($m4is_68hfm5ngwwdjg727hfzg1gd) ){
$m4is_d60kn1d3yvprp62rs332[$m4is_bqhtspcavhb01spmfd3x] = [
'url' =>
 $m4is_7e86anqymhkj14qajyegpahnj,
'id' => $m4is_68hfm5ngwwdjg727hfzg1gd
];
}
}

if( !empty($m4is_vvb9r37gv16gt562b1vkk6n['locked_url']) ){
$m4is_2756c5zgjyvram374p861y7ykr49 = esc_url($m4is_vvb9r37gv16gt562b1vkk6n['locked_url']);

if( !empty($m4is_2756c5zgjyvram374p861y7ykr49) ){
$m4is_d60kn1d3yvprp62rs332['locked_url'] = $m4is_2756c5zgjyvram374p861y7ykr49;
}
}

if( !empty($m4is_vvb9r37gv16gt562b1vkk6n['excerpt']) ){
$m4is_mgh9afqafjbhhdvmsprw = sanitize_text_field( htmlentities(trim($m4is_vvb9r37gv16gt562b1vkk6n['excerpt'])) );

if( !empty($m4is_vvb9r37gv16gt562b1vkk6n['excerpt']) ){
$m4is_d60kn1d3yvprp62rs332['excerpt'] = $m4is_mgh9afqafjbhhdvmsprw;
}
}

$m4is_mqngqwpvn9gebshs3qkf54653qfdh9k = !empty($m4is_vvb9r37gv16gt562b1vkk6n['order']) ? (int)$m4is_vvb9r37gv16gt562b1vkk6n['order'] : 0;

if( !empty($m4is_d60kn1d3yvprp62rs332) || $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k > 0 ){
$m4is_d60kn1d3yvprp62rs332['order'] = $m4is_mqngqwpvn9gebshs3qkf54653qfdh9k;

}
}
$m4is_3ey0a4er2 = '_memberium/coursegrid/config';
$m4is_2sk3kjrabaecjw = get_post_meta($m4is_tz1rt7sbq40fade6e6rx, $m4is_3ey0a4er2,
 true);
if( empty($m4is_d60kn1d3yvprp62rs332) ){
if( $m4is_2sk3kjrabaecjw ){
delete_post_meta($m4is_tz1rt7sbq40fade6e6rx, $m4is_3ey0a4er2);

}
}
else{
$m4is_2sk3kjrabaecjw = !$m4is_2sk3kjrabaecjw ? [] : $m4is_2sk3kjrabaecjw;
if( ! empty(array_diff($m4is_d60kn1d3yvprp62rs332,
 $m4is_2sk3kjrabaecjw)) ){
update_post_meta($m4is_tz1rt7sbq40fade6e6rx, $m4is_3ey0a4er2, $m4is_d60kn1d3yvprp62rs332);
}
}
}
function m4is_r0r8vdmccxgk1pn8v3dz99() {
global $post;

$m4is_pk98f5nk = get_post_meta($post->ID, '_iswp_custom_code', true);
$defaults = [
'head' => '',
'css' => '',
'js' => '',
];
$m4is_pk98f5nk = wp_parse_args($m4is_pk98f5nk,
 $defaults);
wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(), 'memberium_customcode_nonce');
echo '<p>HTML Head Code</p>';

echo '<textarea id="is4wp_html_head" name="is4wp_html_head" placeholder="Head HTML Code" rows="3" cols="30" style="width:100%;">',
 $m4is_pk98f5nk['head'], '</textarea>';
echo '<p>CSS Code</p>';
echo '<textarea id="is4wp_css" name="is4wp_css" placeholder="Enter your custom CSS code here.  <style> tags are automatically included." rows="3" cols="30" style="width:100%;">',
 $m4is_pk98f5nk['css'], '</textarea>';
echo '<p>JavaScript Code</p>';
echo '<textarea id="is4wp_js" name="is4wp_js" rows=3 cols=30 placeholder="JavaScript Code.  <script> tags are automatically included." style="width:100%;">',
 $m4is_pk98f5nk['js'], '</textarea>';
$m4is_vryqz75bmh3x0y1qda5jt1fcc = get_current_screen();
$m4is_kkv47z7mm1c0cradwdf9nxdfxm = ($m4is_vryqz75bmh3x0y1qda5jt1fcc instanceof WP_Screen && method_exists($m4is_vryqz75bmh3x0y1qda5jt1fcc,
 'is_block_editor')) ? $m4is_vryqz75bmh3x0y1qda5jt1fcc->is_block_editor() : false;

if (! $m4is_kkv47z7mm1c0cradwdf9nxdfxm) {
echo '<style>
				.CodeMirror { height: auto !important; border: 1px solid #ddd; }
				.CodeMirror-scroll { min-height: 100px !important; max-height:300px !important; }
				</style>';


if (get_bloginfo('version') >= '4.9') {
$m4is_599pm6evy5hy9bjprrmy5fzgc09bccch = [
'is4wp_css' => 'text/css',
'is4wp_html_head' =>
 'text/html', 
'is4wp_js' => 'application/javascript',
];
foreach($m4is_599pm6evy5hy9bjprrmy5fzgc09bccch as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp) {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = wp_enqueue_code_editor(['type' => $m4is_az0vcshaw6kbbehq0c10w7mgch3rknzp]);

wp_add_inline_script('code-editor', sprintf('jQuery(function() { wp.codeEditor.initialize("' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . '", %s); });',
 wp_json_encode($m4is_8ew58cpxmftgpw93gdffm4s9bbwy) ) );
}
}
}
}
function m4is_tr05gwk668tya0jez($m4is_tz1rt7sbq40fade6e6rx) {
$m4is_z4ts5pa39jf1yhjb4 = $_POST;


if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
return;
}

if (empty($m4is_z4ts5pa39jf1yhjb4['memberium_customcode_nonce']) || ! wp_verify_nonce($m4is_z4ts5pa39jf1yhjb4['memberium_customcode_nonce'],
 $this->m4is_132xe588j->m4is_54b9bwwsx7sym()) ) {
return;
}

if (! empty($m4is_z4ts5pa39jf1yhjb4['post_type']) && 'page' == $m4is_z4ts5pa39jf1yhjb4['post_type']) {
if (! current_user_can('edit_pages',
 $m4is_tz1rt7sbq40fade6e6rx) ) {
return;
}
} else {
if (! current_user_can('edit_posts', $m4is_tz1rt7sbq40fade6e6rx) ) {
return;
}
}
$m4is_pk98f5nk = [
'head' =>
 isset($m4is_z4ts5pa39jf1yhjb4['is4wp_html_head']) ? trim($m4is_z4ts5pa39jf1yhjb4['is4wp_html_head']) : '',
'css' => isset($m4is_z4ts5pa39jf1yhjb4['is4wp_css']) ? trim($m4is_z4ts5pa39jf1yhjb4['is4wp_css']) : '',

'js' => isset($m4is_z4ts5pa39jf1yhjb4['is4wp_js']) ? trim($m4is_z4ts5pa39jf1yhjb4['is4wp_js']) : '',
];
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt($m4is_tz1rt7sbq40fade6e6rx,
 'custom_code', $m4is_pk98f5nk);
}
function m4is_jnx8fecv4kdzv3ydkqv2p13j49() {
wp_enqueue_script('memberium-admin-edit', plugins_url('js/quickedit.js',
 MEMBERIUM_HOME), ['jquery', 'inline-edit-post'], '', TRUE);
}






function m4is_34yhk5at0eercbsr28gyzbpb1pnq( $m4is_pyfe2h7z ) {
$m4is_yhdk2h7srcr7n5mzjnw7m6b = isset( $_GET['post_type'] ) ? $_GET['post_type'] : 'post';

$m4is_dmq77n3qhxjw6mjmw42ya3f7ck = m4is_dv250ra9xbtaf::m4is_6ejn23xcqf1wv93y2jkp4jzp5h01tf();
$m4is_9j3rdtjnctcn8tr0f = [];
$m4is_wnka2011y397v02my59rg941e = [];

if ( false ) {
$m4is_9j3rdtjnctcn8tr0f['memberships'] = __( 'Membership Levels');
$m4is_9j3rdtjnctcn8tr0f['tag_ids'] = __( "Tag ID's" );

$m4is_9j3rdtjnctcn8tr0f['contact_ids'] = __( "Contact ID's" );
$m4is_9j3rdtjnctcn8tr0f['prohibited_action'] = __( 'Prohibited Action' );

$m4is_9j3rdtjnctcn8tr0f['anonymous_only'] = __( 'Logged Out Only' );
$m4is_9j3rdtjnctcn8tr0f['facebook_crawler'] = __( 'Facebook crawler' );

$m4is_9j3rdtjnctcn8tr0f['google_1stclick'] = __( 'Google First Click Free' );
}
if ( $m4is_yhdk2h7srcr7n5mzjnw7m6b == 'memb_shortcodeblocks' ) {
$m4is_9j3rdtjnctcn8tr0f['memb_custom_shortcode'] = __( 'Shortcode' );

$m4is_wnka2011y397v02my59rg941e[] = 'categories';
$m4is_wnka2011y397v02my59rg941e[] = 'date';
}
else {
if ($m4is_yhdk2h7srcr7n5mzjnw7m6b == 'partials') {
$m4is_9j3rdtjnctcn8tr0f['memb_partial_shortcode'] = __('Shortcode');

unset($m4is_pyfe2h7z['categories'], $m4is_pyfe2h7z['date']);
}
$m4is_9j3rdtjnctcn8tr0f['memberships'] = __('Membership Levels');
$m4is_9j3rdtjnctcn8tr0f['tag_ids'] = __('Tag ID\'s');

$m4is_9j3rdtjnctcn8tr0f['prohibited_action'] = __('Prohibited Action');
if (! empty( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'show_post_columns') ) ) {
$m4is_9j3rdtjnctcn8tr0f['contact_ids'] = __('Contact ID\'s');
$m4is_9j3rdtjnctcn8tr0f['anonymous_only'] = __('Logged Out Only');

$m4is_9j3rdtjnctcn8tr0f['facebook_crawler'] = __('Facebook crawler');
$m4is_9j3rdtjnctcn8tr0f['google_1stclick'] = __('Google First Click Free');

}
}
foreach ( $m4is_wnka2011y397v02my59rg941e as $m4is_cccrqhsp9eme5eagm5wstbm ) {
unset( $m4is_pyfe2h7z[ $m4is_cccrqhsp9eme5eagm5wstbm ] );

}

$m4is_pyfe2h7z = array_merge(
$m4is_pyfe2h7z,
$m4is_9j3rdtjnctcn8tr0f
);
return $m4is_pyfe2h7z;
}
function m4is_jtwnxb90wp( $m4is_mx5stgy1nyzpj6eab39kheftpk,
 $m4is_tz1rt7sbq40fade6e6rx ) {
switch ($m4is_mx5stgy1nyzpj6eab39kheftpk) {
case 'memb_custom_shortcode':
$m4is_z4ts5pa39jf1yhjb4 = get_post($m4is_tz1rt7sbq40fade6e6rx);

$m4is_bm5p5bsdxanbqpvd21680p1p = $m4is_z4ts5pa39jf1yhjb4 instanceof WP_Post && ! empty($m4is_z4ts5pa39jf1yhjb4->post_name) ? $m4is_z4ts5pa39jf1yhjb4->post_name : '';

echo '<div style="white-space:nowrap;">', '[membc_', $m4is_bm5p5bsdxanbqpvd21680p1p, ']', '</div>';
break;
case 'memb_partial_shortcode':
echo '<div style="white-space:nowrap;">',
 '[memb_include_partial id=', $m4is_tz1rt7sbq40fade6e6rx, ']', '</div>';
break;
case 'anonymous_only':
$m4is_rqxytszfq5v6syth1csqqxvy5 = get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_anonymous_only', TRUE);
if ($m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_cwv4aa9zak1r37 = '<strong style="color:green;">Yes</strong>';

$m4is_bakq3rbxwr9zp9pc = 1;
} else {
$m4is_cwv4aa9zak1r37 = '<strong style="color:red;">No</strong>';
$m4is_bakq3rbxwr9zp9pc = 0;
}
echo '<div>',
 $m4is_cwv4aa9zak1r37, '</div>';

echo '<input type="hidden" id="memb-anonymousonly-', $m4is_tz1rt7sbq40fade6e6rx, '" value="', $m4is_bakq3rbxwr9zp9pc,
 '">';
break;
case 'contact_ids':
$m4is_rqxytszfq5v6syth1csqqxvy5 = get_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_is4wp_contact_ids',
 true);
echo '<div id="memb-contactids-' . $m4is_tz1rt7sbq40fade6e6rx . '">' . $m4is_rqxytszfq5v6syth1csqqxvy5 . '</div>';
break;
case 'facebook_crawler':
$m4is_rqxytszfq5v6syth1csqqxvy5 = get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_facebook_crawler', true);
if ($m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_cwv4aa9zak1r37 = '<strong style="color:green;">Yes</strong>';

$m4is_bakq3rbxwr9zp9pc = 1;
} else {
$m4is_cwv4aa9zak1r37 = '<strong style="color:red;">No</strong>';
$m4is_bakq3rbxwr9zp9pc = 0;
}
echo '<div>',
 $m4is_cwv4aa9zak1r37, '</div>';

echo '<input type="hidden" id="memb-facebookcrawler-', $m4is_tz1rt7sbq40fade6e6rx, '" value="', $m4is_bakq3rbxwr9zp9pc,
 '">';
break;
case 'google_1stclick':
$m4is_rqxytszfq5v6syth1csqqxvy5 = get_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_is4wp_google_1stclick',
 true);
if ($m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_cwv4aa9zak1r37 = '<strong style="color:green;">Yes</strong>';
$m4is_bakq3rbxwr9zp9pc = 1;

} else {
$m4is_cwv4aa9zak1r37 = '<strong style="color:red;">No</strong>';
$m4is_bakq3rbxwr9zp9pc = 0;
}
echo '<div>', $m4is_cwv4aa9zak1r37,
 '</div>';

echo '<input type="hidden" id="memb-google1stclick-', $m4is_tz1rt7sbq40fade6e6rx, '" value="', $m4is_bakq3rbxwr9zp9pc, '">';

break;
case 'memberships':
$m4is_y7084n6v67jme9va8yz = array_filter(explode(',', get_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_is4wp_membership_levels',
 true) ) );
$m4is_m54zy24rh = count($m4is_y7084n6v67jme9va8yz);
$m4is_xkbbqvj4ba7ahj44ctwzh80yr = [];
$m4is_kr9qf0fw8n555erpba0ydc0mdgxgy = 0;

$m4is_tgrhckfz8 = get_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_is4wp_any_loggedin_user', true);
$m4is_exrkyp0yg362fq91nmtwh21btm9 = get_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_any_membership', true);
$m4is_th45gxprkb2y2zz2ew8x = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('memberships');

if ($m4is_m54zy24rh > 0) {
foreach($m4is_y7084n6v67jme9va8yz as $m4is_j8j55t8dz79m7 => $m4is_h9g6e5cga) {
$m4is_xkbbqvj4ba7ahj44ctwzh80yr[] = $m4is_h9g6e5cga;

echo isset($m4is_th45gxprkb2y2zz2ew8x[$m4is_h9g6e5cga]['name']) ? $m4is_th45gxprkb2y2zz2ew8x[$m4is_h9g6e5cga]['name'] : '';
if (++$m4is_kr9qf0fw8n555erpba0ydc0mdgxgy < $m4is_m54zy24rh) {
echo ', ';

}
}
echo '<input type="hidden" id="memb-memberships-', $m4is_tz1rt7sbq40fade6e6rx, '" value="', implode(',', $m4is_xkbbqvj4ba7ahj44ctwzh80yr),
 '" >';
}
if ($m4is_tgrhckfz8) {
echo '<span style="white-space:nowrap;">(Any Logged In User)</span> ';
}
if ($m4is_exrkyp0yg362fq91nmtwh21btm9) {
echo '<span style="white-space:nowrap;">(Any Membership)</span> ';

}
break;
case 'prohibited_action':
$m4is_4nhns5sjtksyrr7fd2rr6y41v = get_post_meta( $m4is_tz1rt7sbq40fade6e6rx, '_is4wp_prohibited_action',
 true );
$m4is_pqecxfec342ksq5fzv1mg = trim( get_post_meta( $m4is_tz1rt7sbq40fade6e6rx, '_is4wp_redirect_url', true ) );


echo '<input type="hidden" id="memb-prohibitedaction-',
 $m4is_tz1rt7sbq40fade6e6rx, '" value="', $m4is_4nhns5sjtksyrr7fd2rr6y41v, '">';
echo '<input type="hidden" id="memb-redirecturl-',
 $m4is_tz1rt7sbq40fade6e6rx, '" value="', $m4is_pqecxfec342ksq5fzv1mg, '">';
echo ucwords($m4is_4nhns5sjtksyrr7fd2rr6y41v), '<br />';

echo $m4is_pqecxfec342ksq5fzv1mg, '<br />';
break;
case 'tag_ids':
$m4is_rqxytszfq5v6syth1csqqxvy5 = trim( get_post_meta( $m4is_tz1rt7sbq40fade6e6rx,
 '_is4wp_access_tags', true ), ',' );
$m4is_rqxytszfq5v6syth1csqqxvy5 = implode( ', ', array_filter( explode( ',', $m4is_rqxytszfq5v6syth1csqqxvy5 ) ) );

echo '<div id="memb-accesstagids-', $m4is_tz1rt7sbq40fade6e6rx, '">', $m4is_rqxytszfq5v6syth1csqqxvy5, '</div>';
break;
}
}
function m4is_aqaqks798nqedseqden( int $m4is_tz1rt7sbq40fade6e6rx,
 WP_Post $m4is_z4ts5pa39jf1yhjb4, bool $m4is_nt48femkg6za9v5mn1sr23m62k ) {
$m4is_n564s2a7ef6 = [
'memb_shortcodeblocks',
];
if ( isset( $m4is_z4ts5pa39jf1yhjb4->post_type ) && ! in_array( $m4is_z4ts5pa39jf1yhjb4->post_type,
 $m4is_n564s2a7ef6 ) ) {
return;
};
if ( ! current_user_can( 'edit_post', $m4is_tz1rt7sbq40fade6e6rx ) ) {
return;
}
m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_jnrfagq360n7e6wj7c8rqqpn( true );
 
}



function m4is_2pz04pk37qqy7ygqn4ftp3n0f1() {
if (!current_user_can('manage_options') ) {
wp_die(__('You do not have sufficient permissions to access this page.') );

}
}
function m4is_6ak6745yftpr6tpctdz0dgcq4ewd2web() {
require_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('googleanalytics.php');

}
function m4is_9b6xjxnhjfx8ywjswcexsak69q() {


}
function m4is_r6hfpvwd7ddqnj60mpbk9t( $m4is_ht973zb4hb59 ) {
if ( ! is_array( $m4is_ht973zb4hb59 ) || empty( $m4is_ht973zb4hb59 ) ) {
return false;

}
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `post_id`, `meta_value` FROM `{$wpdb->postmeta}` WHERE `meta_key` = '_is4wp_membership_levels' AND `meta_value` > '' ";

$m4is_pbe6ph2dd0rk = (array) $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
foreach ( $m4is_pbe6ph2dd0rk as $m4is_z4ts5pa39jf1yhjb4 ) {
$m4is_x9rzhcsw2474yxjk849zxqcy7hb = array_filter( explode( ',',
 $m4is_z4ts5pa39jf1yhjb4['meta_value'] ) );
$m4is_9xe423jwa8tt7dz6y0sd3cbv = implode( ',', array_diff( $m4is_x9rzhcsw2474yxjk849zxqcy7hb,
 $m4is_ht973zb4hb59) );
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt($m4is_z4ts5pa39jf1yhjb4['post_id'],
 'memberships', $m4is_9xe423jwa8tt7dz6y0sd3cbv);
}
$this->m4is_132xe588j->m4is_r4c836v754();
return true;
}
function m4is_cx9612w000ff6eac1s1zt() {
require_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('remotefiles.php');

}

function m4is_h4xcw8dg053f1bbf29n320q20hv8tbf() {
$m4is_r2d01p7w70wh2g5 = 'memberium::page_templates';
$m4is_g1hk4swz02tm5d5pv4m1a71f = 'https://licenseserver.webpowerandlight.com/updates/page-templates.php';
 
$m4is_d60kn1d3yvprp62rs332 = get_transient($m4is_r2d01p7w70wh2g5, false);
$m4is_hartbe843crydzh = [];
if (is_array($m4is_d60kn1d3yvprp62rs332) ) {
$m4is_hartbe843crydzh = $m4is_d60kn1d3yvprp62rs332;

}
else {
$m4is_gv7vjyv2c6g3nepw6 = [
'timeout' => 10,
];
$m4is_d60kn1d3yvprp62rs332 = wp_remote_get($m4is_g1hk4swz02tm5d5pv4m1a71f,
 $m4is_gv7vjyv2c6g3nepw6);
if (is_a($m4is_d60kn1d3yvprp62rs332, 'WP_Error') ) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = $m4is_d60kn1d3yvprp62rs332->get_error_message();

if (! empty($m4is_bbjejhszczf2b3wrxm849kpfyzb5) ) {
echo '<div class="notice notice-error"><h3>', print_r($m4is_bbjejhszczf2b3wrxm849kpfyzb5,
 true), '</h3></div>';
return;
}
}
if (is_array($m4is_d60kn1d3yvprp62rs332) ) {
$m4is_hartbe843crydzh = json_decode($m4is_d60kn1d3yvprp62rs332['body'],
 true);
if (is_array($m4is_hartbe843crydzh) ) {
set_transient($m4is_r2d01p7w70wh2g5, $m4is_hartbe843crydzh, 3600);
}
}
else {
$m4is_hartbe843crydzh = [];

}
}
return $m4is_hartbe843crydzh;
}
function m4is_exqtba6sefcy() {
$m4is_m1xpsqt8am3rkdps4943gb5hxs2jyy = 'https://licenseserver.webpowerandlight.com/updates/email-templates.php';

$m4is_gv7vjyv2c6g3nepw6 = [
'timeout' => 10,
];
$m4is_jgrm8x7qe3m7 = wp_remote_get($m4is_m1xpsqt8am3rkdps4943gb5hxs2jyy, $m4is_gv7vjyv2c6g3nepw6);

if (is_a($m4is_jgrm8x7qe3m7, 'WP_Error') ) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = $m4is_jgrm8x7qe3m7->get_error_message();
if (! empty($m4is_bbjejhszczf2b3wrxm849kpfyzb5) ) {
echo '<div class="notice notice-error"><h3>',
 print_r($m4is_bbjejhszczf2b3wrxm849kpfyzb5, true), '</h3></div>';
return;
}
}
$m4is_jgrm8x7qe3m7 = json_decode($m4is_jgrm8x7qe3m7['body'],
 true);
if (is_array($m4is_jgrm8x7qe3m7) ) {
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = [
'Id',
'PieceTitle'
];
$m4is_j34bmw9dcjexfj1qpz = [
'PieceTitle' =>
 'MEMBERIUM TEMPLATE - %'
];
$m4is_t4fx8t82wsgxg = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2( 'Template', 1000, 0, $m4is_j34bmw9dcjexfj1qpz,
 $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
$m4is_ns3cdh9w0jdapcnh = 0;
array_walk ($m4is_t4fx8t82wsgxg, function(&$m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_rqxytszfq5v6syth1csqqxvy5['PieceTitle'] = strtolower(trim($m4is_rqxytszfq5v6syth1csqqxvy5['PieceTitle']) );

});
foreach($m4is_jgrm8x7qe3m7 as $m4is_r2g10s87x43pdk8y5cq9hw801g) {
if (is_array($m4is_t4fx8t82wsgxg) ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;

foreach($m4is_t4fx8t82wsgxg as $m4is_zq984c7s17ees36ba) {
if (strtolower($m4is_zq984c7s17ees36ba['PieceTitle']) == strtolower($m4is_r2g10s87x43pdk8y5cq9hw801g['pieceTitle']) ) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = true;

}
}
if (! $m4is_6p2tyvq6paj43svrn7zqaykxzy) {

$id = $this->m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4()->addEmailTemplate(
$m4is_r2g10s87x43pdk8y5cq9hw801g['pieceTitle'],

$m4is_r2g10s87x43pdk8y5cq9hw801g['categories'],
$m4is_r2g10s87x43pdk8y5cq9hw801g['fromAddress'],
$m4is_r2g10s87x43pdk8y5cq9hw801g['toAddress'],

$m4is_r2g10s87x43pdk8y5cq9hw801g['ccAddress'],
$m4is_r2g10s87x43pdk8y5cq9hw801g['bccAddress'],
$m4is_r2g10s87x43pdk8y5cq9hw801g['subject'],

$m4is_r2g10s87x43pdk8y5cq9hw801g['textBody'],
$m4is_r2g10s87x43pdk8y5cq9hw801g['htmlBody'],
$m4is_r2g10s87x43pdk8y5cq9hw801g['contentType'],

$m4is_r2g10s87x43pdk8y5cq9hw801g['mergeContext']
);
$m4is_ns3cdh9w0jdapcnh++;
}
}
}
}
return $m4is_ns3cdh9w0jdapcnh;
}
function m4is_8drgtc2v4faemwts5( $m4is_tz1rt7sbq40fade6e6rx,
 $m4is_zq984c7s17ees36ba) {
if ($m4is_tz1rt7sbq40fade6e6rx === '') {
return;
}
$m4is_jgrm8x7qe3m7 = $this->m4is_h4xcw8dg053f1bbf29n320q20hv8tbf();

if (! isset($m4is_jgrm8x7qe3m7[$m4is_zq984c7s17ees36ba]) ) {
return;
}
$m4is_r2g10s87x43pdk8y5cq9hw801g = $m4is_jgrm8x7qe3m7[$m4is_zq984c7s17ees36ba];

unset($m4is_jgrm8x7qe3m7);
if ($m4is_tz1rt7sbq40fade6e6rx > 0) {
$m4is_vd8zs37z015aj3gyvkwv68k6 = get_post($m4is_tz1rt7sbq40fade6e6rx,
 'ARRAY_A');
}
else {
$m4is_vd8zs37z015aj3gyvkwv68k6 = [];
}
if (! empty($m4is_r2g10s87x43pdk8y5cq9hw801g['content_url']) ) {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = wp_remote_get($m4is_r2g10s87x43pdk8y5cq9hw801g['content_url']);

$m4is_7dwb6r0pw0v949nnp7wh3ja671jnj = [];
if (is_array($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz) ) {
$m4is_7dwb6r0pw0v949nnp7wh3ja671jnj = json_decode($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['body'],
 true);
$m4is_r2g10s87x43pdk8y5cq9hw801g['post']['post_content'] = $m4is_7dwb6r0pw0v949nnp7wh3ja671jnj['post']['post_content'];
$m4is_r2g10s87x43pdk8y5cq9hw801g['post']['post_excerpt'] = $m4is_7dwb6r0pw0v949nnp7wh3ja671jnj['post']['post_excerpt'];

}
}
$m4is_z4ts5pa39jf1yhjb4 = [];
$m4is_z4ts5pa39jf1yhjb4['ID'] = $m4is_tz1rt7sbq40fade6e6rx;
$m4is_z4ts5pa39jf1yhjb4['post_title'] = empty($m4is_vd8zs37z015aj3gyvkwv68k6['post_title']) ? $m4is_r2g10s87x43pdk8y5cq9hw801g['post']['post_title'] : $m4is_vd8zs37z015aj3gyvkwv68k6['post_title'];

$m4is_z4ts5pa39jf1yhjb4['post_content'] = $m4is_r2g10s87x43pdk8y5cq9hw801g['post']['post_content'];
$m4is_z4ts5pa39jf1yhjb4['post_type'] = empty($m4is_vd8zs37z015aj3gyvkwv68k6['post_type']) ? $m4is_r2g10s87x43pdk8y5cq9hw801g['post']['post_type'] : $m4is_vd8zs37z015aj3gyvkwv68k6['post_type'];

$m4is_z4ts5pa39jf1yhjb4['post_status'] = empty($m4is_vd8zs37z015aj3gyvkwv68k6['post_status']) ? 'draft' : $m4is_vd8zs37z015aj3gyvkwv68k6['post_status'];

$m4is_z4ts5pa39jf1yhjb4['meta_input'] = $m4is_r2g10s87x43pdk8y5cq9hw801g['meta'];
$_POST['post_content'] = $m4is_z4ts5pa39jf1yhjb4['post_content'];

$_POST['post_excerpt'] = $m4is_z4ts5pa39jf1yhjb4['post_excerpt'];
remove_action('save_post', [$this, 'm4is_1sjmgwz7ap504883f00q22yskqn5']);

$foo = wp_insert_post($m4is_z4ts5pa39jf1yhjb4, false);
foreach($m4is_r2g10s87x43pdk8y5cq9hw801g['meta'] as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
update_post_meta($m4is_tz1rt7sbq40fade6e6rx,
 $m4is_j8j55t8dz79m7, $m4is_rqxytszfq5v6syth1csqqxvy5);
}
add_action('save_post', [$this, 'm4is_1sjmgwz7ap504883f00q22yskqn5']);
}

function m4is_de4arh8pd0qye0arz128q3pr98($m4is_pwzj28m6 = false) {
$m4is_13qf0ayc1v2nrvbee9x1n1axjgb = defined( 'MEMBERIUM_BETA' ) && constant( 'MEMBERIUM_BETA' ) == 1;

$m4is_r2d01p7w70wh2g5 = 'memberium::setup::checklist';
if ( $m4is_13qf0ayc1v2nrvbee9x1n1axjgb ) {
delete_transient($m4is_r2d01p7w70wh2g5);

}
$m4is_52aka0q4se4j5c45twqb = get_transient($m4is_r2d01p7w70wh2g5, [] );
if (! $m4is_52aka0q4se4j5c45twqb) {
$m4is_d60kn1d3yvprp62rs332 = wp_remote_get('https://licenseserver.webpowerandlight.com/welcome/checklist.php');

if (! is_object($m4is_d60kn1d3yvprp62rs332) && ! empty($m4is_d60kn1d3yvprp62rs332['body']) ) {
$m4is_52aka0q4se4j5c45twqb = json_decode($m4is_d60kn1d3yvprp62rs332['body'],
 true);
set_transient($m4is_r2d01p7w70wh2g5, $m4is_52aka0q4se4j5c45twqb, 3600);
}
}
if (is_array($m4is_52aka0q4se4j5c45twqb) ) {
usort($m4is_52aka0q4se4j5c45twqb,
 function($a, $b) {
return $a['o'] - $b['o'];
});
}

$m4is_kxg5t360y5bsg8zzq4gep4h3 = (array) get_option('memberium_setup_completed');


$m4is_j466gbkgmqehxybjbtg3knm0b5 = get_option( $this->m4is_132xe588j->m4is_6avty6j42cedxh718s2q() );
$m4is_770tav7rspppydhq6whawje = m4is_zrrt34b1nqxbv::m4is_w8b86pqsw82qgftae($m4is_j466gbkgmqehxybjbtg3knm0b5);

if ($m4is_770tav7rspppydhq6whawje['valid']) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('get_license',
 $m4is_kxg5t360y5bsg8zzq4gep4h3);
}
unset($m4is_770tav7rspppydhq6whawje);

$m4is_dmhydt6d2gv1na7516p1dv37qpmd = $this->m4is_132xe588j->get_i2sdk_options();

if ($m4is_dmhydt6d2gv1na7516p1dv37qpmd['server_verified']) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('configure_i2sdk',
 $m4is_kxg5t360y5bsg8zzq4gep4h3);
}
unset($m4is_dmhydt6d2gv1na7516p1dv37qpmd);
if ( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'default_page_redirect') > '' ) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('set_default_redirect', $m4is_kxg5t360y5bsg8zzq4gep4h3);

}
if ( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'show_advanced_options') > '') {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('view_advanced',
 $m4is_kxg5t360y5bsg8zzq4gep4h3);
}
if (count( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('memberships') ) ) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('create_membership',
 $m4is_kxg5t360y5bsg8zzq4gep4h3);
}
if (! empty( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'global_excerpt') ) ) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('set_default_excerpt',
 $m4is_kxg5t360y5bsg8zzq4gep4h3);
}
global $wpdb;

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT count(*) FROM `{$wpdb->postmeta}` WHERE `meta_key` LIKE '_is4wp_%' AND `meta_value` > '0';";

$m4is_7g9y793jjckyb = $wpdb->get_col();

if ($m4is_7g9y793jjckyb > 0) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('protect_pages',
 $m4is_kxg5t360y5bsg8zzq4gep4h3);
}
unset($m4is_5rbenkpt1v7xby2cknbs7, $m4is_7g9y793jjckyb);

$m4is_7g9y793jjckyb = (int) m4is_zrrt34b1nqxbv::m4is_6jaw8csaa2dwx9gdbf6351mfj();

if ($m4is_7g9y793jjckyb > 0) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('1user', $m4is_kxg5t360y5bsg8zzq4gep4h3);

}
if ($m4is_7g9y793jjckyb > 9) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('10users', $m4is_kxg5t360y5bsg8zzq4gep4h3);

}
if ($m4is_7g9y793jjckyb > 24) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('25users', $m4is_kxg5t360y5bsg8zzq4gep4h3);

}
if ($m4is_7g9y793jjckyb > 99) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('100users', $m4is_kxg5t360y5bsg8zzq4gep4h3);

}
if ($m4is_7g9y793jjckyb > 499) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('500users', $m4is_kxg5t360y5bsg8zzq4gep4h3);

}
if ($m4is_7g9y793jjckyb > 999) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('1kusers', $m4is_kxg5t360y5bsg8zzq4gep4h3);

}
if ($m4is_7g9y793jjckyb > 2499) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('2500users', $m4is_kxg5t360y5bsg8zzq4gep4h3);

}
if ($m4is_7g9y793jjckyb > 9999) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('10kusers', $m4is_kxg5t360y5bsg8zzq4gep4h3);

}
if ($m4is_7g9y793jjckyb > 24999) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('25kusers', $m4is_kxg5t360y5bsg8zzq4gep4h3);

}
if ($m4is_7g9y793jjckyb > 49999) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('50kusers', $m4is_kxg5t360y5bsg8zzq4gep4h3);

}
if ($m4is_7g9y793jjckyb > 99999) {
$m4is_kxg5t360y5bsg8zzq4gep4h3 = $this->m4is_132xe588j->m4is_h9t0p5fc1('100kusers', $m4is_kxg5t360y5bsg8zzq4gep4h3);

}
unset($m4is_5rbenkpt1v7xby2cknbs7, $m4is_7g9y793jjckyb);
update_option('memberium_setup_completed', array_filter(array_unique($m4is_kxg5t360y5bsg8zzq4gep4h3) ) );

update_option('memberium_checklist', $m4is_52aka0q4se4j5c45twqb);

if ($m4is_pwzj28m6) {
foreach ($m4is_52aka0q4se4j5c45twqb as $m4is_j8j55t8dz79m7 =>
 $m4is_s8cs5mdq57e5bgpqzd) {
if (! isset($m4is_s8cs5mdq57e5bgpqzd['n']) || $m4is_s8cs5mdq57e5bgpqzd['n'] < 1) {
unset($m4is_52aka0q4se4j5c45twqb[$m4is_j8j55t8dz79m7]);

}
}
}

$m4is_pyfe2h7z = [];
$m4is_pyfe2h7z['active'] = [];
$m4is_pyfe2h7z['completed'] = [];
if (is_array($m4is_52aka0q4se4j5c45twqb) ) {
foreach ($m4is_52aka0q4se4j5c45twqb as $m4is_s8cs5mdq57e5bgpqzd) {
$m4is_ab7z810na2b2v1eb9f85rn = false;

$m4is_wnmcc72zz = false;

if (in_array($m4is_s8cs5mdq57e5bgpqzd['k'], $m4is_kxg5t360y5bsg8zzq4gep4h3) ) {
$m4is_ab7z810na2b2v1eb9f85rn = true;

}

$m4is_gj088kf1te01q8ajxz9yvhj8 = isset($m4is_s8cs5mdq57e5bgpqzd['p']) ? explode(',', $m4is_s8cs5mdq57e5bgpqzd['p']) : [];
if (empty($m4is_gj088kf1te01q8ajxz9yvhj8) ) {
$m4is_wnmcc72zz = true;

}
else {
$m4is_wnmcc72zz = (count(array_intersect($m4is_kxg5t360y5bsg8zzq4gep4h3, $m4is_gj088kf1te01q8ajxz9yvhj8) ) > 0);
}


$m4is_gj088kf1te01q8ajxz9yvhj8 = isset($m4is_s8cs5mdq57e5bgpqzd['r']) ? explode(',',
 $m4is_s8cs5mdq57e5bgpqzd['r']) : [];
if (empty($m4is_gj088kf1te01q8ajxz9yvhj8) ) {
$m4is_7111tabhz8am1j509mzq3synff = false;
}
else {
$m4is_7111tabhz8am1j509mzq3synff = (count(array_intersect($m4is_kxg5t360y5bsg8zzq4gep4h3,
 $m4is_gj088kf1te01q8ajxz9yvhj8) ) > 0);
}
if (! $m4is_ab7z810na2b2v1eb9f85rn) {
if ($m4is_wnmcc72zz) {
$m4is_pyfe2h7z['active'][] = $m4is_s8cs5mdq57e5bgpqzd;

}
}
else {
if (! $m4is_7111tabhz8am1j509mzq3synff) {
$m4is_pyfe2h7z['completed'][] = $m4is_s8cs5mdq57e5bgpqzd;
}
}
}
}
return $m4is_pyfe2h7z;

}
function m4is_skbph2x2hqr788fxy3fdhx8() {

$m4is_1qbted0196gj767p9 = $this->m4is_de4arh8pd0qye0arz128q3pr98();
$m4is_kxg5t360y5bsg8zzq4gep4h3 = (array) get_option('memberium_setup_completed');

$m4is_pyfe2h7z = [];
$m4is_pyfe2h7z['active'] = [];
$m4is_pyfe2h7z['completed'] = [];
foreach ($m4is_1qbted0196gj767p9 as $m4is_xzqvpve06zvy) {
$m4is_ab7z810na2b2v1eb9f85rn = false;

$m4is_wnmcc72zz = false;

if (in_array($m4is_xzqvpve06zvy['k'], $m4is_kxg5t360y5bsg8zzq4gep4h3) ) {
$m4is_ab7z810na2b2v1eb9f85rn = true;

}

$m4is_gj088kf1te01q8ajxz9yvhj8 = isset($m4is_xzqvpve06zvy['p']) ? explode(',', $m4is_xzqvpve06zvy['p']) : [];
if (empty($m4is_gj088kf1te01q8ajxz9yvhj8) ) {
$m4is_wnmcc72zz = true;

}
else {
$m4is_wnmcc72zz = (count(array_intersect($m4is_kxg5t360y5bsg8zzq4gep4h3, $m4is_gj088kf1te01q8ajxz9yvhj8) ) > 0);
}


$m4is_gj088kf1te01q8ajxz9yvhj8 = isset($m4is_xzqvpve06zvy['r']) ? explode(',',
 $m4is_xzqvpve06zvy['r']) : [];
if (empty($m4is_gj088kf1te01q8ajxz9yvhj8) ) {
$m4is_7111tabhz8am1j509mzq3synff = false;
}
else {
$m4is_7111tabhz8am1j509mzq3synff = (count(array_intersect($m4is_kxg5t360y5bsg8zzq4gep4h3,
 $m4is_gj088kf1te01q8ajxz9yvhj8) ) > 0);
}
if (! $m4is_ab7z810na2b2v1eb9f85rn) {
if ($m4is_wnmcc72zz) {
if ($m4is_xzqvpve06zvy['m'] == 'm') {
$m4is_cwv4aa9zak1r37 =
'<input type="hidden" value="0" name="' . $m4is_xzqvpve06zvy['k'] . '">' .
'<input name="' . $m4is_xzqvpve06zvy['k'] . '" id="' . $m4is_xzqvpve06zvy['k'] . '" value="1" type="checkbox"> ' . $m4is_xzqvpve06zvy['t'];

if ($m4is_xzqvpve06zvy['l'] > 0) {
$m4is_cwv4aa9zak1r37 .= ' - ' . m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5($m4is_xzqvpve06zvy['l']);
}
$m4is_pyfe2h7z['active'][] = $m4is_cwv4aa9zak1r37;

}
elseif ($m4is_xzqvpve06zvy['m'] == 'a') {
$m4is_pyfe2h7z['active'][] = '<input type="checkbox"> ' . $m4is_xzqvpve06zvy['t'];
}
}
}
else {
if (! $m4is_7111tabhz8am1j509mzq3synff) {
$m4is_pyfe2h7z['completed'][] = '<input type="checkbox" disabled="disabled" checked="checked"> ' . $m4is_xzqvpve06zvy['t'];

}
}
}
return $m4is_pyfe2h7z;
}
function m4is_zmyge6ndqhktfveqkqxzg() {
$m4is_kntysdm8syx6p78qcvav33410b = $this->m4is_de4arh8pd0qye0arz128q3pr98();

echo '<form method="post" style="margin-left:25px;">';
echo '<p>Complete the checklist below to launch your site, most settings are optional since you can just use the defaults we provide but click the steps below and follow the directions on each page.</p><p>It\'s easier than you think, and you\'ll be done in no time!</p>';

echo '<div style="float:left; width:400px;">';
echo '<h3>Upcoming Tasks and Goals</h3>';
if (! empty($m4is_kntysdm8syx6p78qcvav33410b['active']) ) {
foreach ($m4is_kntysdm8syx6p78qcvav33410b['active'] as $m4is_n6ywrh52) {
if ($m4is_n6ywrh52['m'] == 'm') {
echo '<p style="text-indent:-25px;margin-left:25px;"><input type="hidden" value="0" name="',
 $m4is_n6ywrh52['k'], '">';
echo '<input name="', $m4is_n6ywrh52['k'], '" id="', $m4is_n6ywrh52['k'], '" value="1" type="checkbox"> ',
 $m4is_n6ywrh52['t'];
if ($m4is_n6ywrh52['l'] > 0) {
echo ' ', m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5($m4is_n6ywrh52['l']);
}
'</p>';

}
elseif ($m4is_n6ywrh52['m'] == 'a') {
echo '<p style="text-indent:-25px;margin-left:25px;"><input type="checkbox" class="automatic"> <em>' . $m4is_n6ywrh52['t'],
 ' <strong>*</strong></em></p>';
}
}
}
else {
echo '<p>All goals have been achieved!</p>';
}
echo '</div>';
echo '<div style="float:left; width:400px; margin-left:80px;">';

echo '<h3>Completed Tasks and Goals</h3>';
if (! empty($m4is_kntysdm8syx6p78qcvav33410b['completed']) ) {
$m4is_kntysdm8syx6p78qcvav33410b['completed'] = array_reverse($m4is_kntysdm8syx6p78qcvav33410b['completed']);

foreach( $m4is_kntysdm8syx6p78qcvav33410b['completed'] as $m4is_n6ywrh52 ) {
echo '<p style="text-indent:-25px;margin-left:25px;"><strike>',
 $m4is_n6ywrh52['t'], '</strike></p>';
}
}
else {
echo <<<HTMLBLOCK

				<p>
					You have no completed tasks.
				</p>
			HTMLBLOCK;

}
echo <<<HTMLBLOCK

				</div>
				<div style="clear:both;"></div>
				<input type="submit" value="Mark Complete" class="button-primary"> &nbsp;&nbsp;
				<p>
					View <a href="https://memberium.com/documentation/" target="_blank">More Documentation Online</a>
				</p>
			</form>
			<p>
				<em><strong>*</strong> Automatically detected tasks and goals</em> cannot be manually checked.
			</p>
			<script>
				jQuery("input:checkbox.automatic").click(function() { return false; });
			</script>
		HTMLBLOCK;

}
function m4is_by8ykjgmd4r85x0j1egac69($m4is_gdh573rvrrd8ywqxv) {
$m4is_2vpbp88pq98nk2zgfbgmqd4b13ds43 = [];
$m4is_w32af4ygve4yysm1d = 'memberium::environment_signatures';

$m4is_2vpbp88pq98nk2zgfbgmqd4b13ds43 = get_transient( $m4is_w32af4ygve4yysm1d );
$m4is_2vpbp88pq98nk2zgfbgmqd4b13ds43 = false;
if ( ! is_array( $m4is_2vpbp88pq98nk2zgfbgmqd4b13ds43 ) ) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = 'https://licenseserver.webpowerandlight.com/memberium/environment-fingerprints.php';

$m4is_j21hwvfvya5b4cb = wp_remote_get( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq );
if ( is_array( $m4is_j21hwvfvya5b4cb ) && ! empty( $m4is_j21hwvfvya5b4cb['body'] ) ) {
$m4is_2vpbp88pq98nk2zgfbgmqd4b13ds43 = json_decode( $m4is_j21hwvfvya5b4cb['body'],
 true );

foreach( $m4is_2vpbp88pq98nk2zgfbgmqd4b13ds43 as $m4is_j8j55t8dz79m7 => $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn) {
if ( ! empty( $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['platforms'] ) ) {
if ( false === stripos( $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['platforms'],
 $m4is_gdh573rvrrd8ywqxv ) ) {
unset( $m4is_2vpbp88pq98nk2zgfbgmqd4b13ds43[$m4is_j8j55t8dz79m7] );
}
}
}
set_transient( $m4is_w32af4ygve4yysm1d,
 $m4is_2vpbp88pq98nk2zgfbgmqd4b13ds43, ( 12 * HOUR_IN_SECONDS ) );
}
}
return $m4is_2vpbp88pq98nk2zgfbgmqd4b13ds43;
}
function m4is_qa5sc27b67y2mhah5y76zv() {
$m4is_xxeepd3fj8te3wkzm7qne7f = [];

$m4is_gdh573rvrrd8ywqxv = 'm4is';
if ( defined('GD_VIP') && constant( 'GD_VIP' ) ) {
define( 'GD_MANAGED_HOSTING', 1 );
}


$m4is_2vpbp88pq98nk2zgfbgmqd4b13ds43 = $this->m4is_by8ykjgmd4r85x0j1egac69($m4is_gdh573rvrrd8ywqxv);

$m4is_yp3mw86aw7ykdzb0 = get_option('active_plugins');
$m4is_xn30eww9w9m = wp_get_theme();
$m4is_xn30eww9w9m = $m4is_xn30eww9w9m->parent() ? $m4is_xn30eww9w9m->parent() : $m4is_xn30eww9w9m;

foreach ($m4is_2vpbp88pq98nk2zgfbgmqd4b13ds43 as $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn) {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
if ($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['type'] == 'extension') {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = extension_loaded($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['fingerprint']);

}
elseif ($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['type'] == 'function') {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = function_exists($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['fingerprint']);

}
elseif ($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['type'] == 'class') {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = class_exists($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['fingerprint']);

}
elseif ($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['type'] == 'environment') {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = isset($_SERVER[$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['fingerprint']]);

}
elseif ($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['type'] == 'theme') {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = $m4is_xn30eww9w9m instanceof WP_Theme && $m4is_xn30eww9w9m->get_stylesheet() == $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['fingerprint'];

}
elseif ($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['type'] == 'plugin') {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = in_array($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['fingerprint'],
 $m4is_yp3mw86aw7ykdzb0);
}
elseif ($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['type'] == 'constant') {
$m4is_6p2tyvq6paj43svrn7zqaykxzy = defined($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['fingerprint']);

}
if ($m4is_6p2tyvq6paj43svrn7zqaykxzy) {
if ($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['class'] == 'good') {
$m4is_xxeepd3fj8te3wkzm7qne7f['detected'][] = $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn;

}
else {
$m4is_xxeepd3fj8te3wkzm7qne7f['problem'][] = $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn;
}
}
else {
if ($m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn['class'] == 'good') {
$m4is_xxeepd3fj8te3wkzm7qne7f['available'][] = $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn;

}
}
}
return $m4is_xxeepd3fj8te3wkzm7qne7f;
}



function m4is_dew73syv5h5ep5d0kwy() {
$m4is_5vcwef7pymrfb3zawe = $this->m4is_grn49ctr718w25sabdrrjvecn19p9gbc();

echo '<div class="wrap about-wrap">';

echo '<h3 style="font-size:225%">', __('Invalid License'), '</h3>';
echo '<p class="about-text" style="margin-bottom:-30px;padding-bottom:0px;">';

echo 'We are unable to license this site for one of the following reasons:';
echo '</p>';
echo '<ul style="margin-left:20px;">';
if (! empty($m4is_5vcwef7pymrfb3zawe) ) {
echo '<li>Your i2SDK setup is incomplete or missing.  <a href="admin.php?page=i2sdk-admin">Click here to configure it</a>.</li>';

}
else {
echo '<li>The domain you installed this on does not match the domain that the license was purchased for.</li>';
echo '<li>You purchased an unlimited license but used a different Keap app or sandbox to connect to.</li>';

echo '<li>Your webhost has outbound connections to our license server blocked.</li>';
}
echo '</ul>';
echo '<p>';
echo '&ndash; The Memberium Team<br />';

echo '<a href="https://memberium.com/support/" target="_blank">https://memberium.com/support/</a>';
echo '</p>';
echo '</div>';
}
function m4is_n4dh27xk2aga6vy() {
$this->m4is_132xe588j->m4is_tyd13qd09k14r();

$m4is_167msnhv = $_POST;
$m4is_3h0tmya2yqjrjv5zt18d7qwj5ct = $_SERVER;
$m4is_ta6xqxkcdz0c5g3pk = new m4is_htshtzd47fz1djssy3d38y1e3qg();



$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v( 'fa fa-tasks', 'Setup Checklist', 'checklist', [$this, 'm4is_zmyge6ndqhktfveqkqxzg'] );

$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v( 'fa fa-users', 'About Memberium', 'about', [$this, 'm4is_2tbsaws1gzg'] );

$m4is_ta6xqxkcdz0c5g3pk->m4is_e6mwmd099v8y0dwkf5awn863( $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby( 'header.php' ) );
$m4is_aq3n8kjvpsvryrrf9exmx = $m4is_ta6xqxkcdz0c5g3pk->m4is_mzxreakhktx8nkmez7();

if ($m4is_3h0tmya2yqjrjv5zt18d7qwj5ct['REQUEST_METHOD'] == 'POST') {
if ($m4is_aq3n8kjvpsvryrrf9exmx == 'checklist') {
if (is_array($m4is_167msnhv) ) {
foreach ($m4is_167msnhv as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5) {
if ($m4is_rqxytszfq5v6syth1csqqxvy5 == '1') {
$this->m4is_132xe588j->m4is_h9t0p5fc1($m4is_j8j55t8dz79m7);

}
}
}
}
elseif ($m4is_aq3n8kjvpsvryrrf9exmx == 'updates') {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Updates Options Updated');


$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = [
'autoupdate',
];
foreach($m4is_8ew58cpxmftgpw93gdffm4s9bbwy as $m4is_j8j55t8dz79m7) {
if (isset($m4is_167msnhv[$m4is_j8j55t8dz79m7]) ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = (int) (bool) trim($m4is_167msnhv[$m4is_j8j55t8dz79m7]);

$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej($m4is_rqxytszfq5v6syth1csqqxvy5, 'settings', $m4is_j8j55t8dz79m7);
}
}

if (! empty($m4is_167msnhv['manual_upgrade_confirm']) ) {
$this->m4is_pdgxt6p0m5dk1w8n1xyr0j($m4is_167msnhv['manual_upgrade'],
 'memberium2');
}
}
elseif ($m4is_aq3n8kjvpsvryrrf9exmx == 'debug' && isset($m4is_167msnhv['delete-debug']) && $m4is_167msnhv['delete-debug'] > '') {
unlink( constant( 'MEMBERIUM_DEBUGLOG' ) );

}
}
m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_0ev16xnbdp();
$m4is_ta6xqxkcdz0c5g3pk->m4is_25trdcpbs();

}
function m4is_87xfjsdk8hqz1g13p8k3sjnjy7pfy9ra() {
global $wpdb;
$this->m4is_132xe588j->m4is_tyd13qd09k14r();
$m4is_z9c079dmxr21y05mtj1z0qbs1b7 = $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby();

$m4is_ta6xqxkcdz0c5g3pk = new m4is_htshtzd47fz1djssy3d38y1e3qg();
$m4is_167msnhv = $_POST;
$m4is_3h0tmya2yqjrjv5zt18d7qwj5ct = $_SERVER;


$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-life-ring', 'Support', 'support', [$this, 'm4is_cgjydxczx']);

$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-tachometer-alt', 'Dashboard', 'dashboard', $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('starthere-dashboard-show.php') );

$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-cogs', 'Integrations', 'integrations', $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('starthere-integrations-show.php') );

$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-download', 'Updates', 'updates', $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('starthere-updates-show.php') );

$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-bug', 'Debug', 'debug', [$this, 'm4is_tvwp2c85fnemn26nx9qaedg3wnsav5h']);

$m4is_aq3n8kjvpsvryrrf9exmx = $m4is_ta6xqxkcdz0c5g3pk->m4is_mzxreakhktx8nkmez7();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($m4is_aq3n8kjvpsvryrrf9exmx == 'dashboard') {
if (isset($m4is_167msnhv['save']) && $m4is_167msnhv['save'] == 'Renew License') {
m4is_zrrt34b1nqxbv::m4is_5qw71m3dzesr1mczt4k( true );

m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('License Updated', 'update');
}
elseif (isset($m4is_167msnhv['save']) && $m4is_167msnhv['save'] == 'Re-Activate Plugin') {
m4is_xzw82zta23vanf8pzajwyvkv4::m4is_w8vwxae663qt3hmcbv49q95xmfsyw( false );

m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('System Activation Re-Run', 'update');
}
elseif (isset($m4is_167msnhv['save']) && $m4is_167msnhv['save'] == 'Synchronize Keap') {
$this->m4is_5g9nyns0wmrsdnxhwwc6q();

}
elseif (isset($_GET['purge-contacts']) ) {
$m4is_csnk3yn47 = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();
$m4is_5rbenkpt1v7xby2cknbs7 = "TRUNCATE `{$m4is_csnk3yn47}` ";

$m4is_599xde3j = $wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Local Contact Database Purged',
 'update');
}
}
elseif ($m4is_aq3n8kjvpsvryrrf9exmx == 'updates') {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Updates Options Updated');

$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = ['autoupdate',]; 
foreach($m4is_8ew58cpxmftgpw93gdffm4s9bbwy as $m4is_j8j55t8dz79m7) {
if (isset($m4is_167msnhv[$m4is_j8j55t8dz79m7]) ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = (int) (bool) trim($m4is_167msnhv[$m4is_j8j55t8dz79m7]);

$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej($m4is_rqxytszfq5v6syth1csqqxvy5, 'settings', $m4is_j8j55t8dz79m7);
}
}

if (! empty($m4is_167msnhv['manual_upgrade_confirm']) ) {
$this->m4is_pdgxt6p0m5dk1w8n1xyr0j($m4is_167msnhv['manual_upgrade'],
 'memberium2');
}
}
elseif ($m4is_aq3n8kjvpsvryrrf9exmx == 'debug' && isset($m4is_167msnhv['delete-debug']) && $m4is_167msnhv['delete-debug'] > '') {
unlink( constant( 'MEMBERIUM_DEBUGLOG' ) );

}
}
m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_0ev16xnbdp();
$m4is_ta6xqxkcdz0c5g3pk->m4is_25trdcpbs();

}
function m4is_a928pmtp1() {
$this->m4is_132xe588j->m4is_tyd13qd09k14r();
$m4is_z9c079dmxr21y05mtj1z0qbs1b7 = $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby();

$m4is_21443knzzqx7033gsnx7n7gz3xy2 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings', 'multi_language');
$m4is_ta6xqxkcdz0c5g3pk = new m4is_htshtzd47fz1djssy3d38y1e3qg();


$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-users', 'Logins', 'logins', $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('options-login-show.php') );

$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-file', 'Content Protection', 'content', $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('options-content-show.php') );

$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-unlock-alt', 'Page Handling', 'pagehandling', $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('options-pagehandling-show.php') );

if (! empty($m4is_21443knzzqx7033gsnx7n7gz3xy2) ) {
$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-language',
 'Language', 'language', $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('options-language-show.php') );
}
$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-sitemap',
 'Pages', 'pages', $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('options-pages-show.php') );
$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-shield-alt',
 'Security', 'security', $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('options-sitesecurity-show.php') );
$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-rocket',
 'Performance', 'performance', $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('options-performance-show.php') );
$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-plug',
 'Extensions', 'extensions', $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('options-extensions-show.php') );
$m4is_ta6xqxkcdz0c5g3pk->m4is_d10pve278t32ejnqzadw2k3v3qd89v('fa fa-exchange-alt',
 'HTTP Posts/Links', 'httppost', $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('options-httppost-show.php') );
$current_tab = $m4is_ta6xqxkcdz0c5g3pk->m4is_mzxreakhktx8nkmez7();

include $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('options.php');
$m4is_ta6xqxkcdz0c5g3pk->m4is_25trdcpbs();
}
function m4is_rwhcc493tn3cm5av() {
require_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby( 'sync.php' );

}
function m4is_ayrdet7q1() {
require_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('memberships.php');
}
function m4is_vjwjdpaxsq526tn() {
require_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby( 'ecommerce.php' );

}
function m4is_c1sh9f9665() {
require_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('logs.php');
}



function m4is_2tbsaws1gzg() {
echo m4is_dv250ra9xbtaf::m4is_w5ahc3c8k('credits');

}
function m4is_cgjydxczx() {
echo m4is_dv250ra9xbtaf::m4is_w5ahc3c8k('support');
}
function m4is_tvwp2c85fnemn26nx9qaedg3wnsav5h() {
require_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby('support-debug.php');

}



function m4is_6x4tc58fbqr6tsdfsbb28ntdqn846($m4is_pyfe2h7z) {
$m4is_9j3rdtjnctcn8tr0f = [];
foreach($m4is_pyfe2h7z as $m4is_j8j55t8dz79m7 =>
 $m4is_agrb04wvghmny2c4p8bwwf4) {
$m4is_9j3rdtjnctcn8tr0f[$m4is_j8j55t8dz79m7] = $m4is_agrb04wvghmny2c4p8bwwf4;
if ($m4is_j8j55t8dz79m7 == 'username') {
$m4is_9j3rdtjnctcn8tr0f['user_id_contact_id'] = 'User ID / Contact ID';

}
}
return $m4is_9j3rdtjnctcn8tr0f;
}
function m4is_8jds0d61dvcsn3s9rgzk7c89240xeqfj($m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_7wgwjna3mrxka8smb6e6446cjgwx,
 $m4is_wk4dh1rnd3wmwvsggq51nhn87) {
if ($m4is_7wgwjna3mrxka8smb6e6446cjgwx === 'user_id_contact_id') {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_wk4dh1rnd3wmwvsggq51nhn87);

$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_wk4dh1rnd3wmwvsggq51nhn87 . ' / ' . ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ? $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp : '(None)');

}
return $m4is_rqxytszfq5v6syth1csqqxvy5;
}
function m4is_eeva87w6() {
if ( $this->m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
$m4is_mtjbb6sywmpnaz3125h6ycckx = current_filter() == 'user_new_form' ? 'checked = "checked" ' : '';

?>
			<table class="form-table">
				<tr class="form-field">
					<th scope="row"><label for="keap">Keap</label></th>
					<td>
						<label for="mail_chimp">
							<input type="hidden" name="memberium_add_contact" value="off">
							<input style="width: auto;" type="checkbox" name="memberium_add_contact" id="memberium_add_contact" <?php echo $m4is_mtjbb6sywmpnaz3125h6ycckx;
 ?> /> Create a matching contact for this user
						</label>
					</td>
				</tr>
			</table>
			<?php
 }
}
function m4is_r4pgn786kg(){

}
function m4is_54mjc82vtf47mtyyvge($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65) {

m4is_x4a1eykmgp006vp9fe4::m4is_ranr89c2gngyncmfbwyag76f1rq($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65);


}
public function m4is_c1kcg4he4fs2axegrvrq89zw7( $m4is_wk4dh1rnd3wmwvsggq51nhn87 ) {
global $wpdb;
$m4is_167msnhv = $_POST;
if ( user_can( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'manage_options' ) ) {
return;
}
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = get_user_by( 'id', $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
if (! $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 instanceof WP_User ) {
return;

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $this->m4is_132xe588j->m4is_06a6ggsb0zg8pv1t4852qe( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email );

}
if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
}
$m4is_cyg7rcfhzagmm5v = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );

$m4is_1dj3pf3ftvx5z9jj = strtolower(trim($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->login) );
$m4is_h9hehmppbpsmhbwra = isset($m4is_167msnhv['new_emailaddress']) ? strtolower(trim($m4is_167msnhv['new_emailaddress']) ) : $m4is_1dj3pf3ftvx5z9jj;

$m4is_6255ctyf6qcjecpgrp6jcvc0c2thqb = strtolower(trim($m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email) );
$m4is_02r3njtk78rs4p1kb6cy = strtolower(trim($m4is_167msnhv['email']) );


$m4is_b6e0rj1fgyk = isset($m4is_167msnhv['memberium_private_comments']) ? (int) (bool) $m4is_167msnhv['memberium_private_comments'] : 0;


update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'memberium_private_comments', $m4is_b6e0rj1fgyk );

if ( ! empty( $m4is_167msnhv['updated_tags'] ) ) {
$this->m4is_132xe588j->m4is_ppmdm3jy0dzgsnx( $m4is_167msnhv['updated_tags'],
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
}


if ( ! empty( $m4is_02r3njtk78rs4p1kb6cy ) && ( $m4is_6255ctyf6qcjecpgrp6jcvc0c2thqb <> $m4is_02r3njtk78rs4p1kb6cy ) || ( $m4is_02r3njtk78rs4p1kb6cy <> $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login ) ) {
$m4is_7x1e2ag2m61048zyebzdqa = ! empty($m4is_167msnhv['memb_update_email_confirm']);

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
$this->m4is_132xe588j->m4is_eqvbvnvjx( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_02r3njtk78rs4p1kb6cy );


}
$m4is_167msnhv['email'] = $m4is_02r3njtk78rs4p1kb6cy;
}



if ( empty( $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'local_auth_only', false ) ) ) {
if ($m4is_167msnhv['pass1'] > '' && $m4is_167msnhv['pass1'] === $m4is_167msnhv['pass2']) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $this->m4is_132xe588j->m4is_06a6ggsb0zg8pv1t4852qe($m4is_167msnhv['email']);

if ($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp > 0) {
$m4is_46mk286a9b51zt4aweshvcbzah0m = [
$this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'password_field') => $m4is_167msnhv['pass1'],
];
m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_46mk286a9b51zt4aweshvcbzah0m, true);
}
}
}

if (! empty( $m4is_167msnhv['memberium_sync'] ) ) {
$m4is_pv5pf9v8q9wda7j86vm7tn83q = m4is_rw8p2dfy073ez::m4is_q9jtbmp64yk13jzd( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email );

m4is_rw8p2dfy073ez::m4is_w2rgz1xtp( $m4is_wk4dh1rnd3wmwvsggq51nhn87, $m4is_pv5pf9v8q9wda7j86vm7tn83q );


$m4is_v4beyw7zqhr3 = $this->m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );

$m4is_csnk3yn47 = m4is_rw8p2dfy073ez::m4is_kzjgr0n81gjjnd989vxkyea8cv3();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `id` FROM `{$m4is_csnk3yn47}` WHERE `appname` = %s AND `fieldname` = 'email' and `value` = %s AND `id` <> %d";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_v4beyw7zqhr3, $m4is_167msnhv['email'], $m4is_pv5pf9v8q9wda7j86vm7tn83q );

$m4is_tbdh9qb6r6z = (array) $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A);
$m4is_s25y1e2cxa = [];
foreach ($m4is_tbdh9qb6r6z as $row) {
$m4is_s25y1e2cxa[] = $row['id'];

}
if ( ! empty($m4is_s25y1e2cxa) ) {
$m4is_s25y1e2cxa = implode(',', $m4is_s25y1e2cxa);
$m4is_5rbenkpt1v7xby2cknbs7 = "DELETE FROM `{$m4is_csnk3yn47}` WHERE `appname` = %s AND `id` IN ({$m4is_s25y1e2cxa}) ";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $m4is_v4beyw7zqhr3);
$m4is_hartbe843crydzh = $wpdb->query($m4is_5rbenkpt1v7xby2cknbs7);

}
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $m4is_pv5pf9v8q9wda7j86vm7tn83q;
}
$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_tcvca707rcq9b( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
 
}

function m4is_npdvp242vm6v81qannyq0n4ttf2zyxc2( $m4is_hce1y1a4qd65zhnwsj = '', $m4is_ra7dnjjzebn9h3t6k7a2p36 = [], $m4is_cegjvya4jj68mdszk = '',
 $m4is_g61yzqs7ecta0xztr70d7v = [] ) {

if ( empty( $m4is_ra7dnjjzebn9h3t6k7a2p36 ) || empty( $m4is_hce1y1a4qd65zhnwsj ) ) {
return;

}
$m4is_cegjvya4jj68mdszk = $m4is_cegjvya4jj68mdszk ?? '';

if ( ! is_array( $m4is_cegjvya4jj68mdszk ) ) {
$m4is_cegjvya4jj68mdszk = explode( ',',
 $m4is_cegjvya4jj68mdszk );
}

$m4is_n7x0afpz = [
'autofocus' => false,
'case_sensitive' => false,
'class' => '',
'disabled' => false,

'echo' => true,
'form' => '',
'id' => $m4is_hce1y1a4qd65zhnwsj,
'multiple' => false,
'required' => false,
'size' => 1,
'style' => '',

];

$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args( $m4is_g61yzqs7ecta0xztr70d7v, $m4is_n7x0afpz );
$m4is_g61yzqs7ecta0xztr70d7v['size'] = (int) $m4is_g61yzqs7ecta0xztr70d7v['size'];

$m4is_r45ktvjak78dfep = '';
$m4is_0z04224vgzwj336d0hp2qy7wbc9d041t = '';
$m4is_0bmts2ba7nvzr850gmg1f4wga = [
'autofocus',
'disabled',

'multiple',
'required',
];
$m4is_4ject5mrhtjy9 = [
'class',
'form',
'id',
'size',
'style',
];

foreach ( $m4is_g61yzqs7ecta0xztr70d7v as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {

if ( in_array( $m4is_j8j55t8dz79m7, $m4is_0bmts2ba7nvzr850gmg1f4wga ) ) {
if ( $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_0z04224vgzwj336d0hp2qy7wbc9d041t .= " {$m4is_j8j55t8dz79m7}=\"{$m4is_j8j55t8dz79m7}\"";

}
}

}
foreach ( $m4is_4ject5mrhtjy9 as $m4is_j6b877vat ) {
if ( ! empty( $m4is_g61yzqs7ecta0xztr70d7v[$m4is_j6b877vat] ) ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_g61yzqs7ecta0xztr70d7v[$m4is_j6b877vat];


$m4is_0z04224vgzwj336d0hp2qy7wbc9d041t .= " {$m4is_j6b877vat}=\"{$m4is_rqxytszfq5v6syth1csqqxvy5}\" ";
}
}

foreach( $m4is_ra7dnjjzebn9h3t6k7a2p36 as $m4is_rqxytszfq5v6syth1csqqxvy5 =>
 $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 ) {
$m4is_fe42r2djxgf1h7pt = false;

foreach($m4is_cegjvya4jj68mdszk as $m4is_syqymyz40rx4xgtqp8475ffwzw) {

if ($m4is_g61yzqs7ecta0xztr70d7v['case_sensitive']) {

$m4is_fe42r2djxgf1h7pt = $m4is_fe42r2djxgf1h7pt || (bool) ($m4is_rqxytszfq5v6syth1csqqxvy5 == $m4is_syqymyz40rx4xgtqp8475ffwzw);

}
else {

$m4is_fe42r2djxgf1h7pt = $m4is_fe42r2djxgf1h7pt || (bool) (0 === strcasecmp($m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_syqymyz40rx4xgtqp8475ffwzw) );

}
}

$m4is_r45ktvjak78dfep .= '<option value="' . $m4is_rqxytszfq5v6syth1csqqxvy5 . '" ' . ($m4is_fe42r2djxgf1h7pt ? ' selected="selected" ' : '') . '>' . $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 . '</option>';

}

$m4is_gb01jqxh9ek2m = <<<HTMLBLOCK

			<input type="hidden" name="{$m4is_hce1y1a4qd65zhnwsj}" value="">
			<select name="{$m4is_hce1y1a4qd65zhnwsj}" {$m4is_0z04224vgzwj336d0hp2qy7wbc9d041t}>
			{$m4is_r45ktvjak78dfep}
			</select>
		HTMLBLOCK;


if ( $m4is_g61yzqs7ecta0xztr70d7v['disabled'] ) {
$m4is_cegjvya4jj68mdszk = implode( ',', $m4is_cegjvya4jj68mdszk );
$m4is_gb01jqxh9ek2m .= "<input type=\"hidden\" name=\"{$m4is_hce1y1a4qd65zhnwsj}\" value=\"{$m4is_cegjvya4jj68mdszk}\">";

}
$m4is_gb01jqxh9ek2m = "\n\n{$m4is_gb01jqxh9ek2m}\n\n";

if ( $m4is_g61yzqs7ecta0xztr70d7v['echo'] ) {
echo $m4is_gb01jqxh9ek2m;
}
else {
return $m4is_gb01jqxh9ek2m;

}
}

function m4is_a43ap2dr8wn8() : array {

global $wp_roles;

$m4is_mta1y5w3r = [];

foreach($wp_roles->roles as $role) {

foreach($role['capabilities'] as $k =>
 $v) {

$m4is_mta1y5w3r[] = $k;
}
}

$m4is_mta1y5w3r = array_unique($m4is_mta1y5w3r);

sort($m4is_mta1y5w3r);

return $m4is_mta1y5w3r;

}

private function m4is_e1drzkk1wv74k3sdx0rz( string $m4is_d60kn1d3yvprp62rs332 ) : string {
$m4is_d60kn1d3yvprp62rs332 = explode( ',',
 $m4is_d60kn1d3yvprp62rs332 );
$m4is_d60kn1d3yvprp62rs332 = array_filter( array_map( 'intval', $m4is_d60kn1d3yvprp62rs332 ), function( $m4is_rqxytszfq5v6syth1csqqxvy5 ) { return $m4is_rqxytszfq5v6syth1csqqxvy5 !== 0;
 } );
return implode(',', $m4is_d60kn1d3yvprp62rs332);
}

public function m4is_jphsgyv78k() : void {
global $post;
$m4is_mjvm0h7b6z2c3g9eydg6b4deg2hte = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'site_lock_enabled' );
$m4is_f88p0235v048rzn7 = (bool) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'page_inheritance' );

$m4is_vh8mdx8exn7 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'default_prohibited_action' );

$m4is_0kdm2zprhs5b1 = get_post_meta( $post->ID );


$m4is_7b2yfzk0054 = [
'_is4wp_commenter_action' => '_is4wp_commenter_action',
'_is4wp_commenter_goal' => '_is4wp_commenter_goal',

'_is4wp_commenter_tag' => '_is4wp_commenter_tag',
'_is4wp_hide_from_menu' => '_is4wp_hide_from_menu',
'_is4wp_private_comments' =>
 '_is4wp_private_comments',
'access_tags' => '_is4wp_access_tags',
'access_tags2' => '_is4wp_access_tags2',
'anonymous_only' => '_is4wp_anonymous_only',

'any_membership' => '_is4wp_any_membership',
'contact_ids' => '_is4wp_contact_ids',
'facebook_crawler' => '_is4wp_facebook_crawler',

'google_1stclick' => '_is4wp_google_1stclick',
'hide_completely' => '_is4wp_hide_completely',
'is4wp_can_comment' => '_is4wp_can_comment',

'is4wp_discourage_cache' => '_is4wp_discourage_cache',
'is4wp_force_public' => '_is4wp_force_public',
'logged_in' => '_is4wp_any_loggedin_user',

'membership_levels' => '_is4wp_membership_levels',
'prohibited_action' => '_is4wp_prohibited_action',
'redirect_url' => '_is4wp_redirect_url',

];
foreach ($m4is_7b2yfzk0054 as $m4is_ywv0dg1gk8mbrxjact61b7hx0dnp27r9 => $m4is_h4mwsqyh) {
if (isset($m4is_0kdm2zprhs5b1[$m4is_h4mwsqyh][0]) ) {
$m4is_pk98f5nk[$m4is_ywv0dg1gk8mbrxjact61b7hx0dnp27r9] = $m4is_0kdm2zprhs5b1[$m4is_h4mwsqyh][0];

} else {
$m4is_pk98f5nk[$m4is_ywv0dg1gk8mbrxjact61b7hx0dnp27r9] = '';
}
}
$m4is_pk98f5nk['access_tags'] = $this->m4is_e1drzkk1wv74k3sdx0rz( $m4is_pk98f5nk['access_tags'] );

$m4is_pk98f5nk['access_tags2'] = $this->m4is_e1drzkk1wv74k3sdx0rz( $m4is_pk98f5nk['access_tags2'] );
$m4is_pk98f5nk['membership_levels'] = $this->m4is_e1drzkk1wv74k3sdx0rz( $m4is_pk98f5nk['membership_levels'] );

$m4is_pk98f5nk['contact_ids'] = $this->m4is_e1drzkk1wv74k3sdx0rz( $m4is_pk98f5nk['contact_ids'] );

if ($m4is_pk98f5nk['hide_completely'] == 1) {
$m4is_pk98f5nk['prohibited_action'] = 'hide';

}
if ($m4is_pk98f5nk['prohibited_action'] == '') {
if (! empty($m4is_vh8mdx8exn7) ) {
$m4is_pk98f5nk['prohibited_action'] = $m4is_vh8mdx8exn7;

}
}
wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(), "memberium_membershipaccess_nonce_{$post->ID}" );
if ( $post->post_parent > 0 && $m4is_f88p0235v048rzn7 ) {
echo <<<HTMLBLOCK

				<p style="color:red;text-align:center;">
					<strong>Inherits Access from the
						<a href="post.php?post={$post->post_parent}&action=edit">Parent Page</a>
					</strong>
				</p>
			HTMLBLOCK;

}
$m4is_mtjbb6sywmpnaz3125h6ycckx = $m4is_pk98f5nk['any_membership'] == 1 ? ' checked="checked" ' : '';
$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = __( 'Any Membership Level',
 $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
echo <<<HTMLBLOCK

			<div class="memb_access_options">
			<input type="checkbox" name="is4wp_anymembership" id="is4wp_anymembership" value="1" {$m4is_mtjbb6sywmpnaz3125h6ycckx}>
			<label for="is4wp_anymembership">{$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0}</label><br />
		HTMLBLOCK;

$m4is_0w6daxj0d1 = array_filter( explode( ',', $m4is_pk98f5nk['membership_levels'] ) );
$m4is_y7084n6v67jme9va8yz = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' );

if ( is_array($m4is_y7084n6v67jme9va8yz) ) {
foreach ($m4is_y7084n6v67jme9va8yz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_h9g6e5cga) {
echo '<input type="checkbox" class="memberium_membership_checkbox" name="is4wp_membership_levels[' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ']" value="' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . '" id="is4wp_membership_' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . '" ' . (in_array($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_0w6daxj0d1) ? ' checked="checked" ' : '') . '>&nbsp;<label class="memberium_membership_checkbox" for="is4wp_membership_' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . '">' . stripslashes($m4is_h9g6e5cga['name']) . '&nbsp;(' . $m4is_h9g6e5cga['level'] . ')</label><br />';

}
}
echo <<<HTMLBLOCK

			</div>
			<hr />
		HTMLBLOCK;
if ( $m4is_mjvm0h7b6z2c3g9eydg6b4deg2hte ) {
$m4is_mtjbb6sywmpnaz3125h6ycckx = $m4is_pk98f5nk['is4wp_force_public'] == 1 ? ' checked="checked" ' : '';

$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = __( 'Force Public', 'memberium' );
echo <<<HTMLBLOCK

				<input type="checkbox" name="is4wp_force_public" id="is4wp_force_public" value="1"{$m4is_mtjbb6sywmpnaz3125h6ycckx}>
				<label for="is4wp_force_public">{$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0}</label><br />
			HTMLBLOCK;

}
$m4is_62s0dt9jyn6233zb617x = $m4is_pk98f5nk['logged_in'] == 1 ? ' checked="checked" ' : '';
$m4is_52w63dshgbf3 = $m4is_pk98f5nk['anonymous_only'] == 1 ? ' checked="checked" ' : '';

$m4is_3qwaf6xd03657aas = $m4is_pk98f5nk['contact_ids'] > '' ? $m4is_pk98f5nk['contact_ids'] : '';
$m4is_1s53ejc0jsqkq2rbpmw6j3w629 = $m4is_pk98f5nk['access_tags'] > '' ? $m4is_pk98f5nk['access_tags'] : '';

$m4is_trkvng7efj7t6vjdx8gv25tq5rw1ky = $m4is_pk98f5nk['access_tags2'] > '' ? $m4is_pk98f5nk['access_tags2'] : '';
$m4is_mdvmz4zsspc2z5v = $m4is_pk98f5nk['_is4wp_hide_from_menu'] == 1 ? ' checked="checked" ' : '';

$m4is_1p2h72wm8sj07b1yqpwhqs2szcgeza9 = $m4is_pk98f5nk['google_1stclick'] == 1 ? ' checked="checked" ' : '';
$m4is_0qjyz5d2h2b7gbf3hcf5694npzbp30j5 = $m4is_pk98f5nk['facebook_crawler'] == 1 ? ' checked="checked" ' : '';

$m4is_z7e6cfp21 = __( 'Any Logged In User', $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_9rtp5fwv0cc4s75bbqrgygj = __( 'Logged Out Only',
 $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_e1vwz6afsywsebnph = __( "Require Contact ID's", $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_92j2cc79q9g8cy13xj01a2pvabd52 = __( "Require Tag ID&#39;s", $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_z531chrzrbma81b3jhdrp5gh2fz2yc7 = __( "AND Require Tag ID&#39;s",
 $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_951nxqvmv9hzph8dy4 = __( 'Hide from Menus', $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_akse425xcjgky6f5qmm = __( 'Google 1st Click Free', $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_0hazener2yp52ndkar0pw0hke38w = __( 'Facebook Crawler Access',
 $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_cmr1g3qy5x55stk0a = __( 'When Prohibited', $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

echo <<<HTMLBLOCK

			<div class="memb_access_options">
			<input type="checkbox" name="is4wp_loggedin" id="is4wp_loggedin" value="1"{$m4is_62s0dt9jyn6233zb617x}> <label for="is4wp_loggedin">{$m4is_z7e6cfp21}</label><br />
			<input type="checkbox" name="is4wp_anonymous_only" id="is4wp_anonymous_only" value="1"{$m4is_52w63dshgbf3}> <label for="is4wp_anonymous_only">{$m4is_9rtp5fwv0cc4s75bbqrgygj}</label><br />
			<label for="is4wp_contact_ids">{$m4is_e1vwz6afsywsebnph}</label>
			<textarea name="is4wp_contact_ids" rows="1" style="width:100%; max-width:100%">{$m4is_3qwaf6xd03657aas}</textarea>
			<label for="is4wp_access_tags">{$m4is_92j2cc79q9g8cy13xj01a2pvabd52}</label>
			<input type="text" name="is4wp_access_tags" value="{$m4is_1s53ejc0jsqkq2rbpmw6j3w629}" class="multitaglist2" style="width:100%; max-width:100%">
			<label for="is4wp_access_tags2">{$m4is_z531chrzrbma81b3jhdrp5gh2fz2yc7}</label>
			<input type="text" name="is4wp_access_tags2" value="{$m4is_trkvng7efj7t6vjdx8gv25tq5rw1ky}" class="multitaglist2" style="width:100%; max-width:100%">
			</div>
			<hr />
			<input type="checkbox" name="is4wp_hide_from_menu" id="is4wp_hide_from_menu" value="1"{$m4is_mdvmz4zsspc2z5v}> <label for="is4wp_hide_from_menu">{$m4is_951nxqvmv9hzph8dy4}</label><br />
			<div class="memb_access_options">
			<input type="checkbox" name="is4wp_google_1stclick" id="is4wp_google_1stclick" value="1"{$m4is_1p2h72wm8sj07b1yqpwhqs2szcgeza9}> <label for="is4wp_google_1stclick">{$m4is_akse425xcjgky6f5qmm}</label><br />
			<input type="checkbox" name="is4wp_facebook_crawler" id="is4wp_facebook_crawler" value="1"{$m4is_0qjyz5d2h2b7gbf3hcf5694npzbp30j5}> <label for="is4wp_facebook_crawler">{$m4is_0hazener2yp52ndkar0pw0hke38w}</label><br />
			</div>
			<hr />
			<div class="memb_access_options">
			{$m4is_cmr1g3qy5x55stk0a}: <select id="is4wp_prohibited_action" name="is4wp_prohibited_action">
		HTMLBLOCK;

$m4is_3a74zd8ztxwh69eg891bssd3gc4 = [];
if ($m4is_vh8mdx8exn7 > '') {
$m4is_3a74zd8ztxwh69eg891bssd3gc4['default'] = 'Site Default (' . ucwords($m4is_vh8mdx8exn7) . ')';

}
$m4is_3a74zd8ztxwh69eg891bssd3gc4['hide'] = 'Hide Completely';
if (post_type_supports($post->post_type, 'excerpt') ) {
$m4is_3a74zd8ztxwh69eg891bssd3gc4['excerpt'] = 'Show Excerpt Only';

}
$m4is_3a74zd8ztxwh69eg891bssd3gc4['redirect'] = 'Redirect';
foreach ($m4is_3a74zd8ztxwh69eg891bssd3gc4 as $m4is_rqxytszfq5v6syth1csqqxvy5 =>
 $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0) {
$m4is_fe42r2djxgf1h7pt = $m4is_pk98f5nk['prohibited_action'] == $m4is_rqxytszfq5v6syth1csqqxvy5 ? 'selected="selected"' : '';

echo '<option value="' . $m4is_rqxytszfq5v6syth1csqqxvy5 . '" ' . $m4is_fe42r2djxgf1h7pt . '>' . $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 . '</option>';

}
echo '</select><br />';
echo '</div>';
$m4is_e13wbs370e6e2zh9qf = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'default_page_redirect');
$m4is_as5wwdkxam858k8rgqepb = ($m4is_e13wbs370e6e2zh9qf > '' ? 'Default Redirect to ' . $m4is_e13wbs370e6e2zh9qf : 'Leave blank for sitewide default');

$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = __('Redirect URL', 'memberium');
$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_pk98f5nk['redirect_url'];

$m4is_as5wwdkxam858k8rgqepb = $m4is_as5wwdkxam858k8rgqepb;
echo <<<HTMLBLOCK

			<div class="memb_redirect_options">
			<label for="is4wp_redirect_url">{$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0}</label>
			<input type="text" id="is4wp_redirect_url" name="is4wp_redirect_url" style="width:100%; max-width:100%" rows="1" value="{$m4is_rqxytszfq5v6syth1csqqxvy5}" placeholder="{$m4is_as5wwdkxam858k8rgqepb}">
			</div>
		HTMLBLOCK;

if ( post_type_supports( $post->post_type, 'comments' ) ) {
$m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p = m4is_w3pp5rsxdc03bns3::m4is_gtce9f2cwfsscrw8tk81y5m();

$m4is_7fjfbpk5r2ymkts7pt439kkhj = '';
if ( is_array( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p ) ) {
foreach ( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p as $m4is_21cxfvnv9x394r98y6nareq1g1 =>
 $m4is_vkcy59ff1frs03y02qy9qa1gr6939kz ) {
$selected = ( $m4is_pk98f5nk['_is4wp_commenter_action'] == $m4is_21cxfvnv9x394r98y6nareq1g1 ) ? ' selected="selected" ' : '';

$m4is_7fjfbpk5r2ymkts7pt439kkhj .= "<option value=\"{$m4is_21cxfvnv9x394r98y6nareq1g1}\"{$selected}>{$m4is_vkcy59ff1frs03y02qy9qa1gr6939kz}</option>";

}
}
$m4is_mtjbb6sywmpnaz3125h6ycckx = $m4is_pk98f5nk['_is4wp_private_comments'] == 1 ? ' checked="checked" ' : '';
$m4is_r7k2se8w = $m4is_pk98f5nk['is4wp_can_comment'] > '' ? $m4is_pk98f5nk['is4wp_can_comment'] : '';

$m4is_6whgz83jab8zg7dmzh9 = $m4is_pk98f5nk['_is4wp_commenter_tag'] > '' ? $m4is_pk98f5nk['_is4wp_commenter_tag'] : '';
$m4is_x81esfrzve = $m4is_pk98f5nk['_is4wp_commenter_goal'] > '' ? $m4is_pk98f5nk['_is4wp_commenter_goal'] : '';

$m4is_06540kb6bxq7c = __( 'Private Commenting', $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_t6ehmxvkmsxwtrsw6nkv2y02zs707q60 = __( 'Enable Comments if Tag Present',
 $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_tg9r5asv291ab = __( 'Apply Tags on Comment', $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );

$m4is_9602syxb = __( 'Achieve Goal on Comment', $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
$m4is_rr8b09t49b616aqkm3c4yvd = __( 'Run Actionset on Comment',
 $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
echo <<<HTMLBLOCK

				<p style="margin-top:20px;"><strong>Advanced Comment Functions</strong></p>

				<input type="hidden" name="_is4wp_private_comments" value="0">
				<input type="checkbox" name="_is4wp_private_comments" id="_is4wp_private_comments" value="1"{$m4is_mtjbb6sywmpnaz3125h6ycckx}>
				<label for="_is4wp_private_comments">{$m4is_06540kb6bxq7c}</label><br />

				<label for="is4wp_can_comment">{$m4is_t6ehmxvkmsxwtrsw6nkv2y02zs707q60}</label>
				<input type="text" name="is4wp_can_comment" value="{$m4is_r7k2se8w}" class="multitaglist" style="width:100%; max-width:100%">

				<label for="_is4wp_commenter_tag">{$m4is_tg9r5asv291ab}</label>
				<input type="text" name="_is4wp_commenter_tag" value="{$m4is_6whgz83jab8zg7dmzh9}" class="multitaglist" style="width:100%; max-width:100%">

				<label for="_is4wp_commenter_goal">{$m4is_9602syxb}</label>
				<input type="text" name="_is4wp_commenter_goal" style="width:100%; max-width:100%" value="{$m4is_x81esfrzve}">

				<label for="_is4wp_commenter_action">{$m4is_rr8b09t49b616aqkm3c4yvd}</label>
				<select class="actionset-selector" name="_is4wp_commenter_action" style="width:100%; max-width:100%">
				<option value="0">(No Actions)</option>
					{$m4is_7fjfbpk5r2ymkts7pt439kkhj}
				</select>
			HTMLBLOCK;

unset( $m4is_9j2yq64vqea8rbt5xp450jdhfgyg0p, $m4is_21cxfvnv9x394r98y6nareq1g1, $m4is_vkcy59ff1frs03y02qy9qa1gr6939kz, $m4is_7fjfbpk5r2ymkts7pt439kkhj );

}
$m4is_mtjbb6sywmpnaz3125h6ycckx = $m4is_pk98f5nk['is4wp_discourage_cache'] == 1 ? ' checked="checked" ' : '';
$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = __( 'Discourage Caching',
 $this->m4is_1n5r8f23byhh2xkx2t4pncj99ey858 );
echo <<<HTMLBLOCK

			<p>
			<input type="hidden" name="is4wp_discourage_cache" value="0">
			<input type="checkbox" name="is4wp_discourage_cache" id="is4wp_discourage_cache" value="1"{$m4is_mtjbb6sywmpnaz3125h6ycckx}>
			<label for="is4wp_discourage_cache">{$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0}</label><br />
			</p>
		HTMLBLOCK;

}

public function m4is_v7sr09sbvd7cj028c( $m4is_tz1rt7sbq40fade6e6rx ) : void {

if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
return;

}
$m4is_167msnhv = $_POST;

if ( empty( $m4is_167msnhv["memberium_membershipaccess_nonce_{$m4is_tz1rt7sbq40fade6e6rx}"] ) || ! wp_verify_nonce( $m4is_167msnhv["memberium_membershipaccess_nonce_{$m4is_tz1rt7sbq40fade6e6rx}"],
 $this->m4is_132xe588j->m4is_54b9bwwsx7sym() ) ) {
return;
}

if (! empty($m4is_167msnhv['post_type']) && 'page' == $m4is_167msnhv['post_type']) {
if (! current_user_can('edit_pages',
 $m4is_tz1rt7sbq40fade6e6rx) ) {
return;
}
}
else {
if (! current_user_can('edit_posts', $m4is_tz1rt7sbq40fade6e6rx) ) {
return;
}
}
$m4is_167msnhv['is4wp_access_tags'] = isset( $m4is_167msnhv['is4wp_access_tags'] ) ? $this->m4is_e1drzkk1wv74k3sdx0rz( $m4is_167msnhv['is4wp_access_tags'] ) : '';

$m4is_167msnhv['is4wp_access_tags2'] = isset( $m4is_167msnhv['is4wp_access_tags2'] ) ? $this->m4is_e1drzkk1wv74k3sdx0rz( $m4is_167msnhv['is4wp_access_tags2'] ) : '';

$m4is_167msnhv['is4wp_contact_ids'] = isset( $m4is_167msnhv['is4wp_contact_ids'] ) ? $this->m4is_e1drzkk1wv74k3sdx0rz( $m4is_167msnhv['is4wp_contact_ids'] ) : '';

$m4is_167msnhv['is4wp_discourage_cache'] = isset( $m4is_167msnhv['is4wp_discourage_cache'] ) ? $m4is_167msnhv['is4wp_discourage_cache'] : '';

$m4is_167msnhv['is4wp_anonymous_only'] = isset( $m4is_167msnhv['is4wp_anonymous_only'] ) ? $m4is_167msnhv['is4wp_anonymous_only'] : 0;

$m4is_167msnhv['is4wp_anymembership'] = isset( $m4is_167msnhv['is4wp_anymembership'] ) ? $m4is_167msnhv['is4wp_anymembership'] : 0;

$m4is_167msnhv['is4wp_facebook_crawler'] = isset( $m4is_167msnhv['is4wp_facebook_crawler'] ) ? $m4is_167msnhv['is4wp_facebook_crawler'] : 0;

$m4is_167msnhv['is4wp_force_public'] = isset( $m4is_167msnhv['is4wp_force_public'] ) ? $m4is_167msnhv['is4wp_force_public'] : '';
$m4is_167msnhv['is4wp_google_1stclick'] = isset( $m4is_167msnhv['is4wp_google_1stclick'] ) ? $m4is_167msnhv['is4wp_google_1stclick'] : 0;

$m4is_167msnhv['is4wp_hide_completely'] = isset( $m4is_167msnhv['is4wp_hide_completely'] ) ? $m4is_167msnhv['is4wp_hide_completely'] : 0;

$m4is_167msnhv['is4wp_hide_from_menu'] = isset( $m4is_167msnhv['is4wp_hide_from_menu'] ) ? $m4is_167msnhv['is4wp_hide_from_menu'] : '';

$m4is_167msnhv['is4wp_loggedin'] = isset( $m4is_167msnhv['is4wp_loggedin'] ) ? $m4is_167msnhv['is4wp_loggedin'] : 0;
$m4is_167msnhv['is4wp_prohibited_action'] = isset( $m4is_167msnhv['is4wp_prohibited_action'] ) ? $m4is_167msnhv['is4wp_prohibited_action'] : '';

$m4is_167msnhv['is4wp_redirect_url'] = isset( $m4is_167msnhv['is4wp_redirect_url'] ) ? trim($m4is_167msnhv['is4wp_redirect_url']) : '';

if ($m4is_167msnhv['is4wp_anymembership'] == 0) {
$m4is_167msnhv['is4wp_membership_levels'] = isset($m4is_167msnhv['is4wp_membership_levels']) ? $m4is_167msnhv['is4wp_membership_levels'] : [];

}
else {
$m4is_167msnhv['is4wp_membership_levels'] = [];
}
if (isset($m4is_167msnhv['_is4wp_private_comments']) ) {
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt($m4is_tz1rt7sbq40fade6e6rx,
 'private_comments', $m4is_167msnhv['_is4wp_private_comments']);
}
if (isset($m4is_167msnhv['is4wp_can_comment']) ) {
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt($m4is_tz1rt7sbq40fade6e6rx,
 'can_comment', $m4is_167msnhv['is4wp_can_comment']);
}
if (isset($m4is_167msnhv['_is4wp_commenter_tag']) ) {
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt($m4is_tz1rt7sbq40fade6e6rx,
 'commenter_tag', $m4is_167msnhv['_is4wp_commenter_tag']);
}
if (isset($m4is_167msnhv['_is4wp_commenter_action']) ) {
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt($m4is_tz1rt7sbq40fade6e6rx,
 'commenter_action', $m4is_167msnhv['_is4wp_commenter_action']);
}
if (isset($m4is_167msnhv['_is4wp_commenter_goal']) ) {
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt($m4is_tz1rt7sbq40fade6e6rx,
 'commenter_goal', $m4is_167msnhv['_is4wp_commenter_goal']);
}
if ( (int)$m4is_167msnhv['is4wp_anonymous_only'] == 1) {
$m4is_167msnhv['is4wp_membership_levels'] = '';

}
$m4is_0w6daxj0d1 = implode(',', (array) $m4is_167msnhv['is4wp_membership_levels']);
$m4is_nab4fbybdg04ebj55s6 = [
'access_tags' =>
 $m4is_167msnhv['is4wp_access_tags'],
'access_tags2' => $m4is_167msnhv['is4wp_access_tags2'],
'anonymous_only' => (int) $m4is_167msnhv['is4wp_anonymous_only'],

'any_loggedin_user' => (int) $m4is_167msnhv['is4wp_loggedin'],
'any_membership' => $m4is_167msnhv['is4wp_anymembership'],
'contact_ids' =>
 $m4is_167msnhv['is4wp_contact_ids'],
'discourage_cache' => (int) $m4is_167msnhv['is4wp_discourage_cache'],
'facebook_crawler' => (int) $m4is_167msnhv['is4wp_facebook_crawler'],

'force_public' => (int) $m4is_167msnhv['is4wp_force_public'],
'google_1st_click' => (int) $m4is_167msnhv['is4wp_google_1stclick'],

'hide_from_menu' => (int) $m4is_167msnhv['is4wp_hide_from_menu'],
'memberships' => $m4is_0w6daxj0d1,
'prohibited_action' => $m4is_167msnhv['is4wp_prohibited_action'],

'redirect_url' => $m4is_167msnhv['is4wp_redirect_url'],
];
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt($m4is_tz1rt7sbq40fade6e6rx,
 $m4is_nab4fbybdg04ebj55s6);
$this->m4is_132xe588j->m4is_r4c836v754();
delete_post_meta($m4is_tz1rt7sbq40fade6e6rx, '_is4wp_hide_completely');

return;
}

function m4is_r2v58x7x() {
return;
}

function m4is_t0dhttts823h3ypj($m4is_pyfe2h7z = []) {
static $m4is_b8e3ywe1tt2t7rv90ftkka3znqw1 = false;


if ( ! is_array( $m4is_b8e3ywe1tt2t7rv90ftkka3znqw1 ) ) {

$m4is_m9swqqf4sdm = [
'cb',
'email',
'name',
'username',
];

$m4is_m9swqqf4sdm = apply_filters( 'memberium/admin/user/columns',
 $m4is_m9swqqf4sdm, $m4is_pyfe2h7z );

foreach( $m4is_pyfe2h7z as $m4is_j8j55t8dz79m7 => $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 ) {

if ( ! in_array( $m4is_j8j55t8dz79m7,
 $m4is_m9swqqf4sdm) ) {
unset( $m4is_pyfe2h7z[$m4is_j8j55t8dz79m7] );
}
}

$m4is_b8e3ywe1tt2t7rv90ftkka3znqw1 = $m4is_pyfe2h7z;
}

return $m4is_b8e3ywe1tt2t7rv90ftkka3znqw1;

}

private function m4is_x081h66q1ydst4w3t3brv7w(): void {
add_action( 'bulk_edit_custom_box', ['m4is_8kt6jrvvp0dqqhkrjncfa2gc', 'm4is_tpdqpbn7'],
 10, 2 );
add_action( 'quick_edit_custom_box', ['m4is_8kt6jrvvp0dqqhkrjncfa2gc', 'm4is_138b6v5naby7paa7'], 10, 2 );
add_action( 'admin_print_scripts-edit.php',
 ['m4is_8kt6jrvvp0dqqhkrjncfa2gc', 'm4is_yvapnth69qrm5r69xze3cm9rdg3n919'] );
add_action( 'admin_notices', ['m4is_8kt6jrvvp0dqqhkrjncfa2gc',
 'm4is_461pz3hfb'] );
add_action( 'wp_ajax_memberium_bulk_copy', ['m4is_8kt6jrvvp0dqqhkrjncfa2gc', 'm4is_yr7vcx5sq45ngpy73xs63q'] );

}

private function m4is_r1yhv1n45v(): void {

add_action('admin_notices', ['m4is_84nxzhny047d5zf', 'm4is_g81m0gd3jpj19']);
}
public function m4is_0ev16xnbdp() : void {
include_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby() . '/hero-header.php';

}






public function m4is_9epqp0jjmkd26( string $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g, int $m4is_kw23kqxbesd8dvhkn = 0, string $m4is_f61qz7dd = '',
 string $m4is_m3wx1qtn4y = '' ) : string {
global $pagenow;
$m4is_8kct1nqe64sqf3531gh06t316c = in_array( $pagenow, [ 'user-new.php',
 'user-edit.php' ] );
if ( wp_doing_ajax() && $_POST['action'] ?? '' == 'generate-password' ) {
$m4is_8kct1nqe64sqf3531gh06t316c = true;

}
if ( ! $m4is_8kct1nqe64sqf3531gh06t316c ) {
return $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g;
}
$m4is_sch85z2tsmzm6kx4hx = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_strength' );
$m4is_wte2qk9hdk1zj7 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'password_field' );

if ( $m4is_sch85z2tsmzm6kx4hx < 5 || $m4is_wte2qk9hdk1zj7 == 'Password' ) {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = $this->m4is_132xe588j->m4is_d4hrfy3cjzb3y58yrjedq69fqd958dp();

}
else {
$m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g = $this->m4is_132xe588j->m4is_n6n5vqxxghgbk60nqz6dwds8p( $m4is_sch85z2tsmzm6kx4hx - 1 );

}
return $m4is_b25t4awpzgnyrmw6cf7pfmf1k2y6g;
}

}
