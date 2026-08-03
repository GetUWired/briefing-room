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


class_exists( 'm4is_knfcbrvkjrz3n8k8y6gf' ) || die();

class m4is_x4a1eykmgp006vp9fe4 {
private static $m4is_132xe588j;
private static $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
private static $m4is_6mctr922hbmncpwfrp0x2k;

private static $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65;
private function __construct() {}

static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}

static function m4is_ranr89c2gngyncmfbwyag76f1rq( WP_User $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) {
if ( ! self::m4is_rdbqwsws7nxnjkh() ) {
return;

}
if ( self::m4is_qw6a6agny4skh7w4gnd4wprgn5t3ceh( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) ) {
return;
}
self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_q9jtbmp64yk13jzd( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email );

m4is_rw8p2dfy073ez::m4is_w2rgz1xtp( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID, self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65;

self::$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );

echo <<<HTMLBLOCK

			<hr>
			<h3>Memberium Membership System</h3>
		HTMLBLOCK;
if ( self::m4is_efdzckwd2cfq6edp763vqxr7mm6vsex() ) {
echo '<table class="form-table">';

self::m4is_wn8bzp5wpef();
self::m4is_mgdf8j1q7qk92nh8g7dz52trkqj96s();
self::m4is_67grfkcmq823mdvsaje7hbss6yh();
self::m4is_9wxbd10qv8cnyyphf2pmd();

self::m4is_d63p17ccnfnqcp82vpcsq();
self::m4is_v8d51garh();
self::m4is_1f7nb6999515x3yepy0();
self::m4is_mkkvfchwgnebs811wets7rnd3x();

do_action( 'memberium/admin/user_editor', $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 );
echo '</table>';
}
$m4is_tbbre4wmkxpg614pwywqa = self::m4is_4n56s8d3xb37f4n5vptdf0yf7();

echo <<<HTMLBLOCK

			<table class="form-table">
				{$m4is_tbbre4wmkxpg614pwywqa}
			</table>
		HTMLBLOCK;
}

static function m4is_qw6a6agny4skh7w4gnd4wprgn5t3ceh( WP_User $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) : bool {
if ( ! user_can( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'manage_options' ) ) {
return false;
}
echo <<<HTMLBLOCK

			<tr>
				<th>WARNING:</th>
				<td>
					<p style="font-weight:bold;color:red;">
						This user has the Admin / "manage_options" capability.
					</p>
					<p>
						Admin users cannnot be linked to Keap contacts.
					</p>
				</td>
			</tr>
		HTMLBLOCK;

return true;
}

static function m4is_rdbqwsws7nxnjkh() {
return current_user_can( 'manage_options' );
}
private static function m4is_efdzckwd2cfq6edp763vqxr7mm6vsex() {
return (bool) self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

}
private static function m4is_wn8bzp5wpef() {
self::m4is_9h8tpps8eaet4v();
self::m4is_dx77dyqd7v17pq0amkc2gzwbx();
self::m4is_nqfm1zt2z();

self::m4is_2hs681rfdhxw9qj16q39zzwegxf();
self::m4is_wsennz70();
self::m4is_axf4hmefgfe8nrq2();
}
private static function m4is_9h8tpps8eaet4v() {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

echo <<<HTMLBLOCK

			<tr>
				<th>
					<label for="infusionsoft_id">Keap Contact ID</label>
				</th>
				<td>
					<input name="infusionsoft_id" value="{$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}" disabled="disabled" size="10" style="text-align:right;">
				</td>
			</tr>
		HTMLBLOCK;

}
private static function m4is_dx77dyqd7v17pq0amkc2gzwbx() {
$m4is_j51c05d5xpexybh7dgm8twm7nr7rks = date( 'l, F j, Y @ g:i A', strtotime( self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_registered ) );

echo <<<HTMLBLOCK

			<tr>
				<th><label>User Creation Date</label></th>
				<td>{$m4is_j51c05d5xpexybh7dgm8twm7nr7rks}</td>
			</tr>
		HTMLBLOCK;

}
private static function m4is_nqfm1zt2z() {
$m4is_b6e0rj1fgyk = (int) get_user_meta( self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID,
 'memberium_private_comments', true );
$m4is_mtjbb6sywmpnaz3125h6ycckx = $m4is_b6e0rj1fgyk == 1 ? ' checked="checked" ' : ' ';
echo <<<HTMLBLOCK

			<tr>
			<th><label for="memberium_private_comments">Private Comments</label></th>
			<td>
			<input name="memberium_private_comments" type="hidden" value="0">
			<input name="memberium_private_comments" id="memberium_private_comments" {$m4is_mtjbb6sywmpnaz3125h6ycckx} type="checkbox" value="1"> Enable Private Comments<br />
			</td>
			</tr>
		HTMLBLOCK;

}
private static function m4is_2hs681rfdhxw9qj16q39zzwegxf() {
$m4is_zxwt8y3szyy1aenkh = strtolower( trim( self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email ) );

$m4is_mr4hnyh6fa0p9sm0m8wfs1 = strtolower( trim( self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_login ) );
$m4is_zr4jawg2f = $m4is_zxwt8y3szyy1aenkh === $m4is_mr4hnyh6fa0p9sm0m8wfs1 ? ' checked=checked ' : ' ';


echo '<tr>';
echo '<th><label for="new_emailaddress">Update Username</label></th>';
echo '<td>';
echo '<input name="memb_update_email_confirm" id="memb_update_email_confirm" ',
 $m4is_zr4jawg2f, ' type="checkbox" value="1"> Keep Username synced to email address<br />';
echo '</td>';
echo '</tr>';
}

private static function m4is_wsennz70() : void {
$m4is_8msjtr5p = empty( self::$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['theme'] ) ? '' : self::$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['theme'];

if ( $m4is_8msjtr5p ) {
echo <<<HTMLBLOCK

				<tr>
					<th>WARNING:</th>
					<td>
						<p style='font-weight:bold;color:red;'>
							This user's membership level is set to use the "$m4is_8msjtr5p" theme.
						</p>
					</td>
				</tr>
			HTMLBLOCK;

}
}
private static function m4is_axf4hmefgfe8nrq2() : void {
$m4is_s0hfpx2zktwa0hangkfqn3 = m4is_8cw98mp72zyj4wx2kqhny4bcv90::m4is_c4v0rz2xnh9fbnkgy82x32( self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );

$m4is_pxmjnk46cgqs1hxpqh9t2tj = add_query_arg('rss_user', $m4is_s0hfpx2zktwa0hangkfqn3, get_feed_link() );
echo '<tr>';
echo '<th valign="top"><label for="rss_user_id">RSS User ID</label></th>';

echo '<td>';
echo '<input disabled=disabled size="30" value="', $m4is_s0hfpx2zktwa0hangkfqn3, '"><br />';
echo '<input disabled=disabled size="60" value="',
 $m4is_pxmjnk46cgqs1hxpqh9t2tj, '"><br />';
echo '</td>';
echo '</tr>';
}
private static function m4is_mgdf8j1q7qk92nh8g7dz52trkqj96s() : void {
$m4is_7g9y793jjckyb = m4is_rw8p2dfy073ez::m4is_t6vaxcre5s2r6c( self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email );

if ( $m4is_7g9y793jjckyb === 1 ) {
return;
}
if ( $m4is_7g9y793jjckyb > 1 ) {
echo <<<HTMLBLOCK

				<tr>
					<th>WARNING:</th>
					<td>
						<p style="font-weight:bold;color:red;">MULTIPLE CONTACT RECORDS FOUND WITH THE SAME EMAIL ADDRESS</p>
					</td>
				</tr>
			HTMLBLOCK;

}
if ( $m4is_7g9y793jjckyb === 0 ) {
echo <<<HTMLBLOCK

				<tr>
					<th>WARNING:</th>
					<td>
						<p style="font-weight:bold;color:red;">NO CONTACT RECORD FOUND WITH THIS EMAIL ADDRESS</p>
					</td>
				</tr>
			HTMLBLOCK;

}
}

private static function m4is_67grfkcmq823mdvsaje7hbss6yh() {
$m4is_wte2qk9hdk1zj7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'password_field' );
$m4is_cyg7rcfhzagmm5v = m4is_rw8p2dfy073ez::m4is_8sj4tg8r26hzj327ejg53smcpwfvz1( self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

echo '<tr>';
echo '<th><label for="infusionsoft_fields">Keap Fields</label></th>';
echo '<td>';
if ( ! empty( $m4is_cyg7rcfhzagmm5v ) ) {
if ( ! empty( $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] ) ) {
echo "\n\n<!--\nToken: ",
 substr( base64_encode( $m4is_cyg7rcfhzagmm5v[$m4is_wte2qk9hdk1zj7] ), 0, -1), "\n -->\n\n";
}
foreach ( $m4is_cyg7rcfhzagmm5v as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( $m4is_j8j55t8dz79m7 != 'Groups' && $m4is_rqxytszfq5v6syth1csqqxvy5 <> 'null' && $m4is_rqxytszfq5v6syth1csqqxvy5 > '' && $m4is_j8j55t8dz79m7 != $m4is_wte2qk9hdk1zj7 ) {
echo "\n",
 '<input style="color:#000;width:200px;margin-right:25px;" disabled value="', $m4is_j8j55t8dz79m7, '"> <input name="', $m4is_j8j55t8dz79m7 ,
'" disabled style="color:#000;width:300px;" value="', $m4is_rqxytszfq5v6syth1csqqxvy5, '"><br>', "\n";
}
}
}
echo '</td>';
echo '</tr>';

}
private static function m4is_d63p17ccnfnqcp82vpcsq() {
$m4is_y7084n6v67jme9va8yz = empty( self::$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_names'] ) ? [] : explode(',',
 self::$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_names'] );
$m4is_pzeqetyttg644ahb8fb = empty( self::$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_level'] ) ? 0 : self::$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_level'];

echo '<tr>';
echo '<th valign="top"><label for="infusionsoft_memberships">Memberships</label></th>';
echo '<td>';
if ( empty( $m4is_y7084n6v67jme9va8yz ) ) {
echo '<em>(None)</em>';

}
else {
foreach( $m4is_y7084n6v67jme9va8yz as $m4is_h9g6e5cga ) {
echo '<input type=text disabled value="', $m4is_h9g6e5cga,'" size="',
 strlen( $m4is_h9g6e5cga ), '"> ';

}

}
echo '<br>';
echo 'Level: ', $m4is_pzeqetyttg644ahb8fb, '<br />';
echo '<br />';
echo '</td>';

echo '</tr>';
}
private static function m4is_v8d51garh() {
if ( isset( self::$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'] ) ) {
$m4is_jyrw9cvxqn1js0cx1j2dvxpesx4keh = self::$m4is_6mctr922hbmncpwfrp0x2k['memb_user']['login_page'];

$m4is_8w8m96cf6jxdf955krsjq2mra4qh = $m4is_jyrw9cvxqn1js0cx1j2dvxpesx4keh > 0 ? get_the_title($m4is_jyrw9cvxqn1js0cx1j2dvxpesx4keh) : '';

$m4is_8w8m96cf6jxdf955krsjq2mra4qh = $m4is_jyrw9cvxqn1js0cx1j2dvxpesx4keh == -1 ? 'Profile Page' : $m4is_8w8m96cf6jxdf955krsjq2mra4qh;

$m4is_bc2xzghcbnmpk7teavbf = self::$m4is_132xe588j->m4is_d68rw7tyk7kyxpks13fvs310yn7r98dd( self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );

echo '<tr>';
echo '<th><label for="membership_homepage">Homepage</label></th>';
echo '<td>';
echo "<a target='_blank' href='{$m4is_bc2xzghcbnmpk7teavbf}'>{$m4is_8w8m96cf6jxdf955krsjq2mra4qh}</a> ({$m4is_jyrw9cvxqn1js0cx1j2dvxpesx4keh})";

echo '</td>';
echo '</tr>';
}
}
private static function m4is_1f7nb6999515x3yepy0() {
remove_action( 'admin_footer', [m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef(),
 'm4is_e2f4xq95m09m10s6ehrhvz'] );
echo '<tr>';
echo '<th><label for="infusionsoft_tags">Keap Tags</label></th>';
echo '<td>';
$m4is_yfq3jqvfk8j = isset( self::$m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'] ) ? array_filter( explode( ',',
 self::$m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['groups'] ) ) : [];
$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( false,
 false )['mc'];
$m4is_ra7dnjjzebn9h3t6k7a2p36 = [];
foreach ( $m4is_yfq3jqvfk8j as $m4is_tyd8apfaejmha ) {
if ( isset( $m4is_06c8s5xs94f91335gnaey25[$m4is_tyd8apfaejmha] ) ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36[$m4is_tyd8apfaejmha] = $m4is_06c8s5xs94f91335gnaey25[$m4is_tyd8apfaejmha];

}
}
uasort( $m4is_ra7dnjjzebn9h3t6k7a2p36, function( $m4is_45hzwwj1e2hnxy6gfb76ctc, $m4is_zkt30gc3jww53nyp5ev357vxnp ) {
if ( $m4is_45hzwwj1e2hnxy6gfb76ctc == $m4is_zkt30gc3jww53nyp5ev357vxnp ) {
return 0;

}
return ( $m4is_45hzwwj1e2hnxy6gfb76ctc < $m4is_zkt30gc3jww53nyp5ev357vxnp ) ? -1 : 1;
});
echo "<select id='current_tags' multiple='multiple' disabled='disabled' class='disabledmultitaglist' style='width:600px !important;'>";

foreach ( $m4is_ra7dnjjzebn9h3t6k7a2p36 as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
echo '<option value="', $m4is_j8j55t8dz79m7,
 '" selected=selected>', $m4is_rqxytszfq5v6syth1csqqxvy5, ' (' . $m4is_j8j55t8dz79m7 . ')</option>';
}
echo '</select><br />';
$m4is_xyfzj0fnmp5g4 = [];

$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true )['mc'];
foreach ( $m4is_06c8s5xs94f91335gnaey25 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
if ( in_array( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_yfq3jqvfk8j ) ) {
$m4is_xyfzj0fnmp5g4[] = [
'id' =>
 '-' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' => 'Remove ' . $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 . ' (-' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ')'
];

}
else {
$m4is_xyfzj0fnmp5g4[] = [
'id' => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' => $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 . ' (' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ')'
];

}
}
echo '<script>';
echo 'var taglist = ', json_encode($m4is_xyfzj0fnmp5g4), ';';
echo '</script>';
echo '<br />';
echo '<span class="description">Add/Remove Tags:</span><br />';

echo '<input type="text" value="" id="updated_tags" name="updated_tags" class="multitaglist" style="width:600px !important;"><br>';

echo '</td>';
echo '</tr>';
}
private static function m4is_4n56s8d3xb37f4n5vptdf0yf7() : string {
return <<<HTMLBLOCK

			<table class="form-table">
				<tr>
					<th>
						<label for="infusionsoft_tags">Synchronize Keap Contact</label>
					</th>
					<td>
						<input type="submit" name="memberium_sync" value="Re-Synchronize Contact" class="button-secondary"><br />
						<span class="description">Synchronizing will delete any local cached contact data, and resync from Keap.</span>
					</td>
				</tr>
			</table>
		HTMLBLOCK;

}
private static function m4is_mkkvfchwgnebs811wets7rnd3x() : void {
$m4is_t607apyza5qdwnr = get_option( 'timezone_string' );
$m4is_4h1kyygsp = date_default_timezone_get();

if ( ! empty( $m4is_t607apyza5qdwnr ) ) {
date_default_timezone_set( $m4is_t607apyza5qdwnr );
}
$m4is_w2777yqawe8tf = get_user_meta( self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID,
 'last_login_time', true );
$m4is_h815aqwhaxmnff94jnv4g = get_user_meta( self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID, 'login_ip_address',
 true );
$m4is_jkdq6re79kryhf11jgfnx0qwv588 = (int) get_user_meta( self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID, 'login_count', true );

$m4is_w2777yqawe8tf = $m4is_w2777yqawe8tf > 1 ? date('Y-m-d h:i:s', $m4is_w2777yqawe8tf ) : 'None';
$m4is_h815aqwhaxmnff94jnv4g = $m4is_h815aqwhaxmnff94jnv4g > '' ? $m4is_h815aqwhaxmnff94jnv4g : 'None';

date_default_timezone_set( $m4is_4h1kyygsp );
echo <<<HTMLBLOCK

			<table class="form-table">
				<tr>
					<th>
						<label>Last Login:</label>
					</th>
					<td>
						Date: {$m4is_w2777yqawe8tf}<br />
						IP Address: {$m4is_h815aqwhaxmnff94jnv4g}<br>
						Total Logins: {$m4is_jkdq6re79kryhf11jgfnx0qwv588}<br>
					</td>
				</tr>
			</table>
		HTMLBLOCK;

}
private static function m4is_9wxbd10qv8cnyyphf2pmd() {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65;

if ( ! self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'allow_autologin' ) ) {
return;
}
if ( user_can( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65,
 'edit_others_posts' ) ) {
return;
}
$m4is_th384m7gvm775j7 = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'username_field' );
$m4is_f38cnrd2kwdprqn0bwaee6tn5 = array_filter( explode( ',', self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'autologin_authkeys' ) ) );
$m4is_av04b64fer3gep1 = isset( $m4is_f38cnrd2kwdprqn0bwaee6tn5[0] ) ? $m4is_f38cnrd2kwdprqn0bwaee6tn5[0] : '';

if ( empty( $m4is_av04b64fer3gep1 ) ) {
return;
}
$m4is_av04b64fer3gep1 = urlencode( $m4is_av04b64fer3gep1 );
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

$m4is_zxwt8y3szyy1aenkh = urlencode( self::$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email );
$m4is_4551516hthvkvk3mtsttt6g022z4 = get_site_url();

$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = $m4is_4551516hthvkvk3mtsttt6g022z4 . "/?memb_autologin=yes&auth_key=" . $m4is_av04b64fer3gep1 . "&Id=" . $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp . "&Email=" . $m4is_zxwt8y3szyy1aenkh;

echo '<tr>';
echo '<th valign="top"><label for="memberium_autologin_link">Autologin Link</label></th>';
echo '<td>';
echo "<input id='memberium_autologin_link' disabled='disabled' size='90' value='",
 $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq, "'>";
echo '&nbsp; <span class="memberium-copy-button">Copy</span>';
echo '</td>';
echo '</tr>';

echo '<style>
				.memberium-copy-button {
                padding: 5px 10px;
                background-color: #007bff;
                color: #fff;
                border: none;
                cursor: pointer;
            }
	        </style>';

}
}
