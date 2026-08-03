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

m4is_tq370t35p3ysckb77e15jtr22stzsh::m4is_de8n8qy4mmtnkq33p();

final class m4is_tq370t35p3ysckb77e15jtr22stzsh {
private array $m4is_ta6xqxkcdz0c5g3pk;

private object $m4is_132xe588j;
private string $m4is_7a0qav6bf;
private string $m4is_ga7k41nm95cn0s4wkjqanw7;

public static function m4is_de8n8qy4mmtnkq33p(): self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_rdbqwsws7nxnjkh();
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();

$this->m4is_mzxreakhktx8nkmez7();
$this->m4is_9adtaa67sa21q2c604j55azyzd();
$this->m4is_06dyzdf0y8h9jes2980w4vcfcwy6k0();
$this->m4is_t2kqkzrfa();

$this->m4is_hh7fn2bn();
$this->m4is_54drtzh6ftsz33fkwqcwf859fp();
}

private function m4is_rdbqwsws7nxnjkh() {
current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_ta6xqxkcdz0c5g3pk = [];
$this->m4is_ga7k41nm95cn0s4wkjqanw7 = '';

$this->m4is_7a0qav6bf = 'general';
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}

private function m4is_0aqddkk99vc6tc0f52ap65hz1bj7(): array {
$this->m4is_ta6xqxkcdz0c5g3pk = [
'general' => '<i class="fas fa-shopping-cart"></i> General',

'subscriptions' => '<i class="fas fa-sync-alt fa-spin"></i> Subscriptions',
'invoices' => '<i class="fas fa-file-invoice-dollar"></i> Invoices',

];
return $this->m4is_ta6xqxkcdz0c5g3pk;
}

private function m4is_mzxreakhktx8nkmez7(): string {
if ( empty( $this->m4is_ga7k41nm95cn0s4wkjqanw7 ) ) {
$this->m4is_ga7k41nm95cn0s4wkjqanw7 = isset( $_GET['tab'] ) ? strtolower( trim( $_GET['tab'] ) ) : $this->m4is_7a0qav6bf;

$this->m4is_ga7k41nm95cn0s4wkjqanw7 = array_key_exists( $this->m4is_ga7k41nm95cn0s4wkjqanw7, $this->m4is_0aqddkk99vc6tc0f52ap65hz1bj7() ) ? $this->m4is_ga7k41nm95cn0s4wkjqanw7 : $this->m4is_ga7k41nm95cn0s4wkjqanw7;

}
return $this->m4is_ga7k41nm95cn0s4wkjqanw7;
}

private function m4is_9adtaa67sa21q2c604j55azyzd(): void {
$m4is_sjjed77r6tc8e = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$m4is_knxbec8fr3be1s2tkx0ydee0z = $this->m4is_132xe588j->m4is_54b9bwwsx7sym();
$m4is_vmhtx2ecrnzjpy = $_POST['memberium_ecommerce_nonce'] ?? '';

if ( $m4is_sjjed77r6tc8e <> 'POST') {
return;
}
if ( ! wp_verify_nonce( $m4is_vmhtx2ecrnzjpy, $m4is_knxbec8fr3be1s2tkx0ydee0z) ) {
wp_die( 'nonce error' );

return;
}
$m4is_aq3n8kjvpsvryrrf9exmx = $this->m4is_mzxreakhktx8nkmez7();
if ( $m4is_aq3n8kjvpsvryrrf9exmx == 'general' ) {
$this->m4is_rf8n4qqwc2rccw();

}
elseif ( $m4is_aq3n8kjvpsvryrrf9exmx == 'subscriptions' ) {
$this->m4is_t6y5zvx0k2s();
}
elseif ( $m4is_aq3n8kjvpsvryrrf9exmx == 'invoices' ) {
$this->m4is_jjj8vxjkbgzv4nf();

}
}

private function m4is_rf8n4qqwc2rccw() {
$m4is_sg9ds23ftz7t5e87bavx6ps80yey = isset( $_POST['affiliate_detect'] ) ? (int) $_POST['affiliate_detect'] : $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'affiliate_detect' );
$m4is_xbzd51d1k5y = isset( $_POST['merchant_account_id'] ) ? (int) $_POST['merchant_account_id'] : $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'merchant_account_id' );
$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_sg9ds23ftz7t5e87bavx6ps80yey, 'settings', 'affiliate_detect' );

$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_xbzd51d1k5y, 'settings', 'merchant_account_id' );
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'General eCommerce Options Updated' );

}

private function m4is_t6y5zvx0k2s() : void {
$m4is_gh7agjsse = [];
foreach( $_POST as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( is_array( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ) {
$m4is_gh7agjsse[$m4is_j8j55t8dz79m7] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $m4is_gh7agjsse, 'ecommerce', 'actions' );
}
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Subscription Management Options Updated' );

}

private function m4is_jjj8vxjkbgzv4nf(): void {
$m4is_r2g10s87x43pdk8y5cq9hw801g = get_option( 'memberium_invoice_template', false );

$m4is_r2g10s87x43pdk8y5cq9hw801g['header'] = isset($_POST['invoice_header'] ) ? trim( stripslashes($_POST['invoice_header'] ) ) : '';

$m4is_r2g10s87x43pdk8y5cq9hw801g['items'] = isset($_POST['invoice_items'] ) ? trim( stripslashes($_POST['invoice_items'] ) ) : '';

$m4is_r2g10s87x43pdk8y5cq9hw801g['pre_payments'] = isset($_POST['invoice_pre_payments'] ) ? trim( stripslashes($_POST['invoice_pre_payments'] ) ) : '';

$m4is_r2g10s87x43pdk8y5cq9hw801g['payments'] = isset($_POST['invoice_payments'] ) ? trim( stripslashes($_POST['invoice_payments'] ) ) : '';

$m4is_r2g10s87x43pdk8y5cq9hw801g['pre_scheduled'] = isset($_POST['invoice_pre_scheduled'] ) ? trim( stripslashes($_POST['invoice_pre_scheduled'] ) ) : '';

$m4is_r2g10s87x43pdk8y5cq9hw801g['scheduled'] = isset($_POST['invoice_scheduled'] ) ? trim( stripslashes($_POST['invoice_scheduled'] ) ) : '';

$m4is_r2g10s87x43pdk8y5cq9hw801g['footer'] = isset($_POST['invoice_footer'] ) ? trim( stripslashes($_POST['invoice_footer'] ) ) : '';

$m4is_r2g10s87x43pdk8y5cq9hw801g = update_option( 'memberium_invoice_template', $m4is_r2g10s87x43pdk8y5cq9hw801g );
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Invoice Display Options Updated' );

}

private function m4is_06dyzdf0y8h9jes2980w4vcfcwy6k0(): void {
m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_0ev16xnbdp();

m4is_dv250ra9xbtaf::m4is_dagbw7aea4y90yradk9x7b();
echo <<<HTMLBLOCK

			<div class="wrap">
				<!-- h1>eCommerce Settings</!-->
				<h2 class="nav-tab-wrapper">
		HTMLBLOCK;

foreach ($this->m4is_ta6xqxkcdz0c5g3pk as $m4is_ga7k41nm95cn0s4wkjqanw7 => $m4is_hce1y1a4qd65zhnwsj ) {
$class = ($m4is_ga7k41nm95cn0s4wkjqanw7 == $this->m4is_ga7k41nm95cn0s4wkjqanw7 ) ? ' nav-tab-active' : '';

if ( $m4is_ga7k41nm95cn0s4wkjqanw7 == $this->m4is_ga7k41nm95cn0s4wkjqanw7 ) {
echo "<span class='nav-tab$class'>$m4is_hce1y1a4qd65zhnwsj</span>";

}
else {
echo "<a class='nav-tab{$class}' href='?page=", $_GET['page'], "&tab={$m4is_ga7k41nm95cn0s4wkjqanw7}'>{$m4is_hce1y1a4qd65zhnwsj}</a>";

}
}
echo '</h2>';
echo '<div class="memberium_tabcontent" style="margin-top:10px;">';
echo '<form method="POST" action="">';
}

private function m4is_hh7fn2bn (): void {
echo '</form>';

echo '</div>';
echo '</div>';
}

private function m4is_t2kqkzrfa(): void {
if ( $this->m4is_ga7k41nm95cn0s4wkjqanw7 == 'general' ) {
$this->m4is_fz0ggjh4687s();

}
elseif ( $this->m4is_ga7k41nm95cn0s4wkjqanw7 == 'subscriptions' ) {
$this->m4is_z3td6p48pka0smegmc();
}
elseif ( $this->m4is_ga7k41nm95cn0s4wkjqanw7 == 'invoices' ) {
$this->m4is_rh0p984k3f0n4h9fbbaswmb();

}
}

private function m4is_z3td6p48pka0smegmc(): void {
wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(), 'memberium_ecommerce_nonce' );

$m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x = $this->m4is_132xe588j->m4is_nna76543();
$m4is_6xj2zq4143f49mqz9p79f7brf3mv = m4is_bbwjksaqsay3yt68xq9afn::m4is_gh12fb5596s29bycerd7thz1x9dspt();

$m4is_gh7agjsse = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('ecommerce', 'actions');
$m4is_7e7dnf52v3 = isset( $_POST['find'] ) ? sanitize_text_field( trim( $_POST['find'] ) ) : '';

$m4is_bss2344eykgb96f = [];
$m4is_sxyhvggcwt501jgxf75xfsmbs = is_array( $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x ) ? count( $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x ) : 0;

if ( ! empty( $m4is_7e7dnf52v3 ) ) {
foreach( $m4is_6xj2zq4143f49mqz9p79f7brf3mv as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_m3h9r6vhs5rt8w41pn284phf ) {
if ( stripos( $m4is_m3h9r6vhs5rt8w41pn284phf['ProductName'],
 $m4is_7e7dnf52v3 ) === false ) {
$m4is_bss2344eykgb96f[] = $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;
unset( $m4is_6xj2zq4143f49mqz9p79f7brf3mv[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] );

}
}
if ( ! empty( $m4is_bss2344eykgb96f ) ) {
foreach( $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_anqnbx2n51zxydg998hpa3jnmr ) {
if ( in_array( $m4is_anqnbx2n51zxydg998hpa3jnmr['ProductId'], $m4is_bss2344eykgb96f ) ) {
unset( $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] );

}
}
}
}
else {
if ( $m4is_sxyhvggcwt501jgxf75xfsmbs > 100 ) {
$m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x = array_slice( $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x,
 $m4is_sxyhvggcwt501jgxf75xfsmbs - 100, 100 );
}
}
echo '<P>Search: <input name="find" type="text" value="', $m4is_7e7dnf52v3, '"></P>';

echo '<p><input type="submit" value="Update" class="button-primary"></p>';
echo '<table class="widefat" style="white-space:nowrap;">';

echo '<tr>';
echo '<th>Subscription</th><th>Payment Action</th><th>Payment Goal</th><th>Cancel Action</th><th>Cancel Goal</th><th>End Date Action</th><th>End Date Goal</th>';

echo '</tr>';
if ( is_array( $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x ) ) {
foreach ( $m4is_8nt7ha569atzwkj0fjgrb9hkrxv1t1x as $m4is_bamv772v ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_bamv772v['Id'];

$m4is_nctf6sc4v5npxn5der7ve5gs = $m4is_bamv772v['ProductId'];
if ($m4is_bamv772v['Active'] ) {
$cancel_action = empty( $m4is_gh7agjsse[ $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ]['cancel_action'] ) ? 0 : $m4is_gh7agjsse[ $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ]['cancel_action'];

$cancel_goal = empty( $m4is_gh7agjsse[ $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ]['cancel_goal'] ) ? '' : $m4is_gh7agjsse[ $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ]['cancel_goal'];

$end_action = empty( $m4is_gh7agjsse[ $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ]['end_action'] ) ? 0 : $m4is_gh7agjsse[ $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ]['end_action'];

$end_goal = empty( $m4is_gh7agjsse[ $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ]['end_goal'] ) ? '' : $m4is_gh7agjsse[ $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ]['end_goal'];

$pay_action = empty( $m4is_gh7agjsse[ $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ]['pay_action'] ) ? 0 : $m4is_gh7agjsse[ $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ]['pay_action'];

$pay_goal = empty( $m4is_gh7agjsse[ $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ]['pay_goal'] ) ? '' : $m4is_gh7agjsse[ $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ]['pay_goal'];

echo '<tr>';
echo '<td>', $m4is_6xj2zq4143f49mqz9p79f7brf3mv[ $m4is_nctf6sc4v5npxn5der7ve5gs ]['ProductName'], ' - $', sprintf('%01.2f',
 $m4is_bamv772v['PlanPrice'] ), ' / ', $m4is_bamv772v['FrequencyWord'], '</td>';
echo '<td><input class="actionsetdropdown" type="text" value="',
 $pay_action, '" name="', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, '[pay_action]"></td>';
echo '<td><input type="text" value="', $pay_goal,
 '" name="', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, '[pay_goal]"></td>';
echo '<td><input class="actionsetdropdown" type="number" min="0" max="99999" size="3" value="',
 (int) $cancel_action, '" name="', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, '[cancel_action]"></td>';
echo '<td><input type="text" value="',
 $cancel_goal, '" name="', $m4is_bamv772v['Id'], '[cancel_goal]"></td>';
echo '<td><input class="actionsetdropdown" type="number" min="0" max="99999" size="5" value="',
 (int) $end_action, '" name="', $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, '[end_action]"></td>';
echo '<td><input type="text" value="',
 $end_goal, '" name="', $m4is_bamv772v['Id'], '[end_goal]"></td>';
echo '</tr>';
}
}
}
echo '</table>';
echo '<p><input type="submit" value="Update" class="button-primary"></p>';

}

private function m4is_fz0ggjh4687s(): void {
$m4is_vdnkp62wsx8zgrrzwc = m4is_bbwjksaqsay3yt68xq9afn::m4is_zxv55m2ynfvf5txfpxe38gt50f();

$m4is_fh6gm6mhwajtya12ykwa654rq22ysq = (int) $m4is_vdnkp62wsx8zgrrzwc['default_merchant_account'];
$m4is_zfht9r0wr669qgc = [];
foreach( $m4is_vdnkp62wsx8zgrrzwc['merchant_accounts'] as $m4is_t2d48hr4r5qzeykhm6pj32n8j ) {
$m4is_zfht9r0wr669qgc[$m4is_t2d48hr4r5qzeykhm6pj32n8j->id] = sprintf('%s %s (%d)',
 $m4is_t2d48hr4r5qzeykhm6pj32n8j->account_name, $m4is_t2d48hr4r5qzeykhm6pj32n8j->type, $m4is_t2d48hr4r5qzeykhm6pj32n8j->id );
}
$m4is_sg9ds23ftz7t5e87bavx6ps80yey = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'affiliate_detect', 0 );
$m4is_01eq1bzcg10a6d = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'password_reset_tag',
 0);
$m4is_4ykjca62r2hsxv7pc = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'merchant_account_id', 0 );

$m4is_r2xawdj3yh1c38xxrd53seh7tfwn9 = 'm4is_dv250ra9xbtaf';
wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(), 'memberium_ecommerce_nonce' );

echo '<ul>';
$m4is_r2xawdj3yh1c38xxrd53seh7tfwn9::m4is_0ba0x0q69hk5ww2sn2ww(
'Affiliate AutoDetect',
'affiliate_detect',
9124,
$m4is_sg9ds23ftz7t5e87bavx6ps80yey
);

m4is_dv250ra9xbtaf::m4is_jt0y34knx7ws34fc4xjmj90gq(
'Default Merchant Account:',
'merchant_account_id',
$m4is_4ykjca62r2hsxv7pc,
$m4is_zfht9r0wr669qgc,

[
'style' => 'width:250px;',
'help_id' => 21852,
]
);

m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep(
'Password Reset Tag',

'password_reset_tag',
$m4is_01eq1bzcg10a6d,
'taglistdropdown',
['help_id' => 1183]
);
echo '</ul>';
echo '<p><input type="submit" value="Update" class="button-primary"></p>';

}

private function m4is_rh0p984k3f0n4h9fbbaswmb(): void {
wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(), 'memberium_ecommerce_nonce' );

echo '<ul>';
echo '<h2>Invoice Display Styler</h2>';
$m4is_2cd8c9pt9 = get_option('memberium_invoice_template', false);

echo '<style> textarea { background-color: antiquewhite; } </style>';

echo '<li><label style="vertical-align:top;">Header ', m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(0000 ), '</label>';
echo '<textarea name="invoice_header" cols=80 rows=3>',
 isset($m4is_2cd8c9pt9['header'] ) ? $m4is_2cd8c9pt9['header'] : '', '</textarea>';
echo '</li>';

echo '<li><label style="vertical-align:top;">Line Items ',
 m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(0000 ), '</label>';
echo '<textarea name="invoice_items" cols=80 rows=3>',isset($m4is_2cd8c9pt9['items'] ) ? $m4is_2cd8c9pt9['items'] : '',
 '</textarea>';
echo '</li>';

echo '<li><label style="vertical-align:top;">Payments Header', m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(0000 ),
 '</label>';
echo '<textarea name="invoice_pre_payments" cols=80 rows=3>',isset($m4is_2cd8c9pt9['pre_payments'] ) ? $m4is_2cd8c9pt9['pre_payments'] : '',
 '</textarea>';
echo '</li>';

echo '<li><label style="vertical-align:top;">Payments ', m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(0 ), '</label>';

echo '<textarea name="invoice_payments" cols=80 rows=3>',isset($m4is_2cd8c9pt9['payments'] ) ? $m4is_2cd8c9pt9['payments'] : '', '</textarea>';

echo '</li>';

echo '<li><label style="vertical-align:top;">Scheduled Payments Header ', m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(0000 ),
 '</label>';
echo '<textarea name="invoice_pre_scheduled" cols=80 rows=3>',isset($m4is_2cd8c9pt9['pre_scheduled'] ) ? $m4is_2cd8c9pt9['pre_scheduled'] : '',
 '</textarea>';
echo '</li>';

echo '<li><label style="vertical-align:top;">Scheduled Payments ', m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(0000 ),
 '</label>';
echo '<textarea name="invoice_scheduled" cols=80 rows=3>',isset($m4is_2cd8c9pt9['scheduled'] ) ? $m4is_2cd8c9pt9['scheduled'] : '',
 '</textarea>';
echo '</li>';

echo '<li><label style="vertical-align:top;">Footer ', m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(0000 ), '</label>';

echo '<textarea name="invoice_footer" cols=80 rows=3>',isset($m4is_2cd8c9pt9['footer'] ) ? $m4is_2cd8c9pt9['footer'] : '', '</textarea>';

echo '</li>';
echo '<p><input type="submit" value="Update" class="button-primary"></p>';
echo '</form>';
echo '<li><label style="vertical-align:top;">%% Codes</label>';

echo '<div style="display:inline-block;width:600px;">';
$m4is_hrtpth3knv43044ym8f = [
'invoice',
['job', 'order'],
'contact',
'payplan',

'payment',
['payplanitem', 'scheduled'],
['orderitem', 'item'],
];
foreach ($m4is_hrtpth3knv43044ym8f as $m4is_k7p8pmxsbkqrje3y20 ) {
if (is_array ($m4is_k7p8pmxsbkqrje3y20 ) ) {
$prefix = $m4is_k7p8pmxsbkqrje3y20[1];

$m4is_k7p8pmxsbkqrje3y20 = $m4is_k7p8pmxsbkqrje3y20[0];
}
else {
$prefix = $m4is_k7p8pmxsbkqrje3y20;
}
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n($m4is_k7p8pmxsbkqrje3y20,
 false );
sort($m4is_7b2yfzk0054 );
echo '<strong>', ucwords($prefix ), '</strong><br />';
if (is_array($m4is_7b2yfzk0054 ) ) {
foreach($m4is_7b2yfzk0054 as $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '%%' . $prefix . '.' . strtolower($m4is_bbsta3mvjhhvh1x97vfpm9e ) . '%%';

echo '<input type="text" size="', strlen($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 ) + 2, '" value="', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 '" readonly style="text-align:center;"> ';
}
echo '<br><br>';
}
}
echo '<strong>Custom Codes</strong><br />';
$m4is_7b2yfzk0054 = [
'subtotal'
];

foreach($m4is_7b2yfzk0054 as $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '%%receipt.' . strtolower($m4is_bbsta3mvjhhvh1x97vfpm9e ) . '%%';

echo '<input type="text" size="', strlen($m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 ) + 2, '" value="', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 '" readonly style="text-align:center;"> ';
}
echo '</div></li>';
echo '</ul>';
}

private function m4is_54drtzh6ftsz33fkwqcwf859fp(): void {
global $wpdb;


$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true );
$m4is_06c8s5xs94f91335gnaey25 = $m4is_06c8s5xs94f91335gnaey25['mc'];

$m4is_xyfzj0fnmp5g4 = [];
$m4is_xyfzj0fnmp5g4[] = [
'id' => 0,
'text' => '(None)'
];
foreach ( (array) $m4is_06c8s5xs94f91335gnaey25 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_xyfzj0fnmp5g4[] = [
'id' => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' => "{$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0} ({$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh})",

];
}
$m4is_xyfzj0fnmp5g4 = json_encode($m4is_xyfzj0fnmp5g4 );
unset($m4is_06c8s5xs94f91335gnaey25, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 );
echo '<script>';
echo 'var actionsetlist = ', m4is_w3pp5rsxdc03bns3::m4is_jzv3mdxqzxth481vapvxqkn5k8h(),
 ';';
echo 'var taglist       = ', $m4is_xyfzj0fnmp5g4, ';';
echo '</script>';
unset($m4is_aggb31vr, $m4is_xyfzj0fnmp5g4 );
}
}
