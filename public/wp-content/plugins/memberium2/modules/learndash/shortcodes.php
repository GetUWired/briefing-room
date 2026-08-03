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


class_exists( 'm4is_5f4j9e1q39p6vht95a8xheen' ) || die();

final class m4is_syka57kayfck40f6hyzscy919 {
private static object $m4is_132xe588j;
private static object $m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w;

public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() : void {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}

public static function m4is_jd1x893846rdgc1m149wwtrjtjqxt( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( ! is_user_logged_in() ) {
return '';
}
$m4is_n7x0afpz = [
'id' =>
 0,
'not' => '',
];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium' );

if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] ) ) {
return '';
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'],
 false );
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = get_current_user_id();
$m4is_d728k3twcey071cb555xrg7pzx = get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 '_sfwd-course_progress', true );
$m4is_hc5apbs45jsbb = false;
if ( is_array( $m4is_d728k3twcey071cb555xrg7pzx ) ) {
foreach( $m4is_d728k3twcey071cb555xrg7pzx as $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew =>
 $m4is_dbkkvm60vrfe6dvcc56g3s ) {
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'] == $m4is_7an5k696qe2d7a3a0kb9mydmapnnzew && $m4is_dbkkvm60vrfe6dvcc56g3s['total'] == $m4is_dbkkvm60vrfe6dvcc56g3s['completed'] ) {
$m4is_hc5apbs45jsbb = true;

break;
}
if ( ! empty( $m4is_dbkkvm60vrfe6dvcc56g3s['lessons'][$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id']] ) ) {
$m4is_hc5apbs45jsbb = true;

break;
}
if ( ! empty($m4is_dbkkvm60vrfe6dvcc56g3s['topics'][$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id']] ) ) {
$m4is_hc5apbs45jsbb = true;

break;
}
}
}
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] ) {
$m4is_hc5apbs45jsbb = ! $m4is_hc5apbs45jsbb;
}
$m4is_brgegcjqya5nc1nb6 = '';

$m4is_m1w2rydpynnp3 = '';
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 true, $m4is_hc5apbs45jsbb );
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( true, $m4is_gb01jqxh9ek2m, $m4is_brgegcjqya5nc1nb6,
 $m4is_m1w2rydpynnp3 );
}

public static function m4is_67a38vjc8pc( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_bsamg3fezf = '',
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( ! is_user_logged_in() ) {
return '';
}
$m4is_n7x0afpz = [
'id' => 0,
'not' =>
 false,
'txtfmt' => '',
'capture' => '',
];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_1pjm0y9kp950ag02ey9j8n8xq7vm = ld_get_mycourses(get_current_user_id() );
$m4is_1we1qc8rdsrfq = ( $m4is_1pjm0y9kp950ag02ey9j8n8xq7vm ) && in_array( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['id'],
 $m4is_1pjm0y9kp950ag02ey9j8n8xq7vm );
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['not'] ) {
$m4is_1we1qc8rdsrfq = ! $m4is_1we1qc8rdsrfq;

}
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v( $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true,
 $m4is_1we1qc8rdsrfq );
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( true, $m4is_gb01jqxh9ek2m, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
}

public static function m4is_jrp495h386x1ta0c( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( ! is_singular() ) {
return '';
}
if ( ! is_user_logged_in() ) {
return '';

}
if ( ! function_exists( 'ld_update_course_access' ) ) {
return 'LearnDash not installed<br />';
}
$m4is_n7x0afpz = [
'course_id' =>
 0,
'user_id' => get_current_user_id(),
];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['course_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['course_id'];
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['course_id'] ) || empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['user_id'] ) ) {
return '';

}
if ( ! get_post_status( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['course_id'] ) ) {
return 'Invalid Course ID<br />';
}
$m4is_z0p04ece = (bool) ( strtolower( trim( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 ) ) == 'memb_learndash_course_unenroll' );

ld_update_course_access( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['user_id'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['course_id'], $m4is_z0p04ece );

}

public static function m4is_8hhk2q2v3j3( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( ! is_singular() ) {
return '';

}
if ( ! is_user_logged_in() ) {
return '';
}
$m4is_n7x0afpz = [
'admin_id' => 0,
'tag_id' => 0,
'button_text' => 'Clear Course History',

'warning' => 'Are you sure you want to clear your course history?',
'completion' => 'Your course history has been cleared.',
];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium' );
$m4is_zvgp1gdkvktsm = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['admin_id'];

$m4is_hf6ctsm2pnexk = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tag_id'];
$m4is_pqph9es3ez534nva3w2rqw = get_current_user_id();
$m4is_eam4px02j6ytpsfyyqbfv6tbkn1 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text'] );

$m4is_ef1egy2hgh6r0 = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['warning'] );
$m4is_fesdffkpq916gr = trim( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['completion'] );

if ( self::$m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
if ( ! $m4is_zvgp1gdkvktsm ) {
return '<p><strong>Error:</strong> No admin ID provided.</p>';

}
if ( ! user_can( $m4is_zvgp1gdkvktsm, 'edit_users' ) ) {
return '<p><strong>Error:</strong> Admin user provided does not have sufficient permissions to clear LearnDash course data.</p>';

}
return sprintf( '<p>The %s shortcode may cannot be used by administrators.</p>', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 );
}
$m4is_r53562w9befcb2kh7rm4p7n5 = base64_encode( serialize( [
'admin_id' =>
 $m4is_zvgp1gdkvktsm,
'completion' => $m4is_fesdffkpq916gr,
'tag_id' => $m4is_hf6ctsm2pnexk,
'user_id' => $m4is_pqph9es3ez534nva3w2rqw,

'warning' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['warning'],
] ) );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf( $m4is_r53562w9befcb2kh7rm4p7n5 );

$m4is_vmhtx2ecrnzjpy = wp_nonce_field( 'memberium/learndash/delete_history/' . $m4is_pqph9es3ez534nva3w2rqw, '_wpnonce', true, false);

$m4is_qc36n7jdf = '';
$m4is_2c32h6tka34z0 = self::$m4is_nmpnxf7tfh4cbdcqwhcd7gqnjh86w->m4is_24j1128ak8ghjk();
if ( ! empty( $m4is_2c32h6tka34z0 ) ) {
$m4is_qc36n7jdf .= sprintf( '<p class="memberium_learndash_clear_history_message">%s</p>',
 $m4is_2c32h6tka34z0 );
}
$m4is_qc36n7jdf .= <<<HTMLBLOCK

			<form method="post" class="memberium-learndash-delete-history" action="">
				{$m4is_vmhtx2ecrnzjpy}
				<input type="hidden" name="memb_form_type" value="memberium/learndash/delete_history">
				<input type="hidden" name="user_id" value="{$m4is_pqph9es3ez534nva3w2rqw}">
				<input type="hidden" name="parameters" value="{$m4is_r53562w9befcb2kh7rm4p7n5}">
				<input type="hidden" name="signature" value="{$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn}">
				<input type="submit" class="memberium_learndash_clear_history_button" value="{$m4is_eam4px02j6ytpsfyyqbfv6tbkn1}"  onClick="return confirmDelete()">
			</form>
			<script>
				function confirmDelete() {
					return confirm( '{$m4is_ef1egy2hgh6r0}' );
				}
			</script>
		HTMLBLOCK;

return $m4is_qc36n7jdf;
}
}