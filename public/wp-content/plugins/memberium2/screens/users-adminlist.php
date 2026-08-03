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

class m4is_5qw2hevk04wcztn5js {
private function __construct() {}
static function init() {
$m4is_13qf0ayc1v2nrvbee9x1n1axjgb = defined( 'MEMBERIUM_BETA' ) && constant( 'MEMBERIUM_BETA' );

if ( $m4is_13qf0ayc1v2nrvbee9x1n1axjgb ) {
add_action( 'admin_footer-users.php', [ __CLASS__, 'm4is_txzydgcg95nd2rkd5s042'] );
add_action( 'admin_notices',
 [ __CLASS__, 'm4is_rt4r49sr5tpbv960mfw7ey95q0z'] );
add_action( 'admin_print_styles-users.php', [ __CLASS__, 'm4is_ba0whbph35nd5yybbadjwwnr92g4jvf2'] );

add_filter( 'bulk_actions-users', [ __CLASS__, 'm4is_5w23b0nfrnz455rppn'] );
add_filter( 'handle_bulk_actions-users', [ __CLASS__,
 'm4is_k3ye55trcsq'], 10, 3 );
add_action( 'restrict_manage_users', [ __CLASS__, 'm4is_cf2jfgqej9mtctmbb2kmp'] );
}
}
static function m4is_5w23b0nfrnz455rppn( $m4is_y6gg9e8kvssd1pyy0b ) {
$m4is_y6gg9e8kvssd1pyy0b['memb_bulk_tag'] = __( 'Bulk Add/Remove CRM Tag',
 'memberium' );
return $m4is_y6gg9e8kvssd1pyy0b;
}
static function m4is_k3ye55trcsq( $m4is_tfecza742dzhrkkbv781dnbvf40m6, $m4is_knxbec8fr3be1s2tkx0ydee0z,
 $m4is_20knw42ksh3kk8tw9rbs ) {
$m4is_g61yzqs7ecta0xztr70d7v = [
'memb_bulk_tag_error',
'memb_bulk_tag_no_contact',
'memb_bulk_tag_success',

];
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = remove_query_arg( $m4is_g61yzqs7ecta0xztr70d7v, $m4is_tfecza742dzhrkkbv781dnbvf40m6 ); 
$m4is_20knw42ksh3kk8tw9rbs = array_filter( $m4is_20knw42ksh3kk8tw9rbs );

$m4is_hf6ctsm2pnexk = isset( $_GET['memb_bulk_update_tag'] ) ? (int) $_GET['memb_bulk_update_tag'] : 0;
if ( $m4is_knxbec8fr3be1s2tkx0ydee0z == 'memb_bulk_tag' ) {
$m4is_hf6ctsm2pnexk = empty( $_REQUEST['memb_bulk_update_tag'] ) ? 0 : (int) $_REQUEST['memb_bulk_update_tag'];


if( empty( $m4is_hf6ctsm2pnexk ) ){
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = add_query_arg( 'memb_bulk_tag_error', 'tag', $m4is_tfecza742dzhrkkbv781dnbvf40m6 );

return $m4is_tfecza742dzhrkkbv781dnbvf40m6;
}

$m4is_exek5n5r0ptvcjzvpm7m9v47gs = $m4is_hf6ctsm2pnexk < 0 ? 'remove' : 'add';
$m4is_3qwaf6xd03657aas = [];

$m4is_qv2fhtnar0y09e0z29v7hahrz5n = 0;
foreach ($m4is_20knw42ksh3kk8tw9rbs as $m4is_wk4dh1rnd3wmwvsggq51nhn87) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_6n9667dzk5a0sffgn3xnsv6eskmrrcdy($m4is_wk4dh1rnd3wmwvsggq51nhn87);

if( !empty($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) ){
$m4is_3qwaf6xd03657aas[] = $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;
}
else{
++$m4is_qv2fhtnar0y09e0z29v7hahrz5n;

}
}

if( empty($m4is_3qwaf6xd03657aas) ){
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = add_query_arg('memb_bulk_tag_no_contact','all',$m4is_tfecza742dzhrkkbv781dnbvf40m6 );

return $m4is_tfecza742dzhrkkbv781dnbvf40m6;
}
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_w2ajfcb36m38deypfekt2t1b8d($m4is_3qwaf6xd03657aas,
 $m4is_hf6ctsm2pnexk);
$m4is_g61yzqs7ecta0xztr70d7v = [];
if( is_array($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz) ){
$m4is_1we1qc8rdsrfq = !empty($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['SUCCESS']) ? count($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['SUCCESS']) : false;

$m4is_7j9b2gnsqk1kjwa47c = !empty($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['FAILURE']) ? count($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['FAILURE']) : false;

if( $m4is_1we1qc8rdsrfq ){
$m4is_g61yzqs7ecta0xztr70d7v['memb_bulk_tag_success'] = $m4is_1we1qc8rdsrfq;
}
if($m4is_7j9b2gnsqk1kjwa47c){
$m4is_g61yzqs7ecta0xztr70d7v['memb_bulk_tag_error'] = $m4is_7j9b2gnsqk1kjwa47c;

}
}
else{
$m4is_g61yzqs7ecta0xztr70d7v['memb_bulk_tag_error'] = count($m4is_3qwaf6xd03657aas);
}
if( !empty($m4is_qv2fhtnar0y09e0z29v7hahrz5n) ){
$m4is_g61yzqs7ecta0xztr70d7v['memb_bulk_tag_no_contact'] = (int) $m4is_qv2fhtnar0y09e0z29v7hahrz5n;

}
if( !empty($m4is_g61yzqs7ecta0xztr70d7v) ){
$m4is_tfecza742dzhrkkbv781dnbvf40m6 = add_query_arg($m4is_g61yzqs7ecta0xztr70d7v, $m4is_tfecza742dzhrkkbv781dnbvf40m6);

}
}
return $m4is_tfecza742dzhrkkbv781dnbvf40m6;
}
static function m4is_cf2jfgqej9mtctmbb2kmp() {
$m4is_as5wwdkxam858k8rgqepb = __( 'Select CRM Tag',
 'memberium' );

echo "<div class='memb_bulk_update_tag_wrap'>", "\n";

echo '<select id="memb_bulk_update_tag" name="memb_bulk_update_tag" class="memb_bulk_update_tag" placeholder="' . $m4is_as5wwdkxam858k8rgqepb . '">',
 "\n";
echo '<option value="0">none</option>', "\n";
echo '<option value="1">foo</option>', "\n";
echo '<option value="2">bar</option>',
 "\n";
echo '<option value="3">baz</option>', "\n";
echo '</select>', "\n";
echo "</div>", "\n";
}
static function m4is_rt4r49sr5tpbv960mfw7ey95q0z() {
$m4is_7atnky6d45r5g9rc91c2j = 'memb_bulk_tag_';

$m4is_bxmys7tbj69n8y14ag34r7y = $m4is_7atnky6d45r5g9rc91c2j . 'success';
$m4is_v4aedvv9jtvd57r = $m4is_7atnky6d45r5g9rc91c2j . 'error';

$m4is_xc2vkcvp6resv6vwzrk = $m4is_7atnky6d45r5g9rc91c2j . 'no_contact';
$m4is_5tmqg45z37r82cfb67prh = '';
$m4is_h7zwy5f0w3y9gx3wm = '';

if( empty( $_REQUEST[$m4is_bxmys7tbj69n8y14ag34r7y] ) && empty( $_REQUEST[$m4is_v4aedvv9jtvd57r] ) && empty( $_REQUEST[$m4is_xc2vkcvp6resv6vwzrk] ) ){
return;

}
$m4is_1we1qc8rdsrfq = empty( $_REQUEST[$m4is_bxmys7tbj69n8y14ag34r7y] ) ? false : $_REQUEST[$m4is_bxmys7tbj69n8y14ag34r7y]; 
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = empty( $_REQUEST[$m4is_v4aedvv9jtvd57r] ) ? false : $_REQUEST[$m4is_v4aedvv9jtvd57r];

$m4is_qv2fhtnar0y09e0z29v7hahrz5n = empty( $_REQUEST[$m4is_xc2vkcvp6resv6vwzrk] ) ? false : $_REQUEST[$m4is_xc2vkcvp6resv6vwzrk];
if( $m4is_1we1qc8rdsrfq ) {
$m4is_h7zwy5f0w3y9gx3wm = 'success';

if( (int) $m4is_1we1qc8rdsrfq > 1 ){
$m4is_5tmqg45z37r82cfb67prh .= sprintf( __( '%s contacts have been updated.', 'memberium' ), $m4is_1we1qc8rdsrfq );

}
else{
$m4is_5tmqg45z37r82cfb67prh .= __( '1 contact has been updated.', 'memberium' );
}
}
if($m4is_bbjejhszczf2b3wrxm849kpfyzb5){
$m4is_h7zwy5f0w3y9gx3wm = empty($m4is_h7zwy5f0w3y9gx3wm) ? 'error' : $m4is_h7zwy5f0w3y9gx3wm;

$m4is_5tmqg45z37r82cfb67prh .= !empty($m4is_5tmqg45z37r82cfb67prh) ? "<br>" : "";
if( $m4is_bbjejhszczf2b3wrxm849kpfyzb5 === 'tag' ){
$m4is_5tmqg45z37r82cfb67prh .= __( 'No Tag selected.',
 'memberium' );
}
else{
if( (int)$m4is_bbjejhszczf2b3wrxm849kpfyzb5 > 1 ){
$m4is_5tmqg45z37r82cfb67prh .= sprintf(__( '%s contacts not updated.',
 'memberium' ), $m4is_bbjejhszczf2b3wrxm849kpfyzb5);
}
else{
$m4is_5tmqg45z37r82cfb67prh .= __( '1 contact not updated.', 'memberium' );

}
}
}

if( $m4is_qv2fhtnar0y09e0z29v7hahrz5n ){
$m4is_h7zwy5f0w3y9gx3wm = empty( $m4is_h7zwy5f0w3y9gx3wm ) ? 'error' : $m4is_h7zwy5f0w3y9gx3wm;

$m4is_5tmqg45z37r82cfb67prh .= empty( $m4is_5tmqg45z37r82cfb67prh ) ? '' : '<br>';
if( $m4is_qv2fhtnar0y09e0z29v7hahrz5n === 'all' ){
$m4is_5tmqg45z37r82cfb67prh .= __( 'None of the selected users have an Infusionst Contact ID.',
 'memberium' );
}
else if( (int) $m4is_qv2fhtnar0y09e0z29v7hahrz5n > 1 ){
$m4is_5tmqg45z37r82cfb67prh .= sprintf( __( '%s selected users do not have a contact ID.',
 'memberium' ), $m4is_qv2fhtnar0y09e0z29v7hahrz5n );
}
else{
$m4is_5tmqg45z37r82cfb67prh .= __( '1 selected User does not have a contact ID.',
 'memberium' );
}
}
if( ! empty( $m4is_5tmqg45z37r82cfb67prh ) ) {
echo "<div class=\"notice notice-{$m4is_h7zwy5f0w3y9gx3wm} is-dismissible\">";

echo "<h2>Memberium " . __( 'Bulk Tag Contacts', 'memberium' ) . "</h2>";
echo "<p>{$m4is_5tmqg45z37r82cfb67prh}</p>";
echo "</div>";

}
return;
}
static function m4is_ba0whbph35nd5yybbadjwwnr92g4jvf2() {
?>
		<style id="memb_bulk_contact_tags_style">
			/*
			.memb_hidden { display:none; }
			*/
			.memb_bulk_update_tag { width:200px; }
			.memb_bulk_update_tag_wrap { float:left; margin-right:6px; max-width:12.5rem; };
		</style>
		<?php
 }
static function m4is_txzydgcg95nd2rkd5s042() {
$m4is_xyfzj0fnmp5g4 = [];

$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true )['mc'];
foreach ($m4is_06c8s5xs94f91335gnaey25 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_xyfzj0fnmp5g4[] = [
'id' => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' => 'Add ' . $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 . ' (' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ')'
];

$m4is_xyfzj0fnmp5g4[] = [
'id' => '-' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' => 'Remove ' . $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 . ' (-' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ')'
];

}
?>
		<script id="memb_bulk_contact_tags_script">
		(function( $ ) {
			$( document ).ready( function() {
				var bulktaglist = <?php echo json_encode($m4is_xyfzj0fnmp5g4) ?>,
					$changedMembSel = null;
				// Move Inputs Position
				$('.memb_bulk_update_tag_wrap').each(function(i, $wrap) {
					var $parent  = $($wrap).closest(".tablenav"),
						$input   = $('input', $wrap),
						selector = $parent.hasClass('top') ? '#bulk-action-selector-top' : '#bulk-action-selector-bottom';
						$($wrap).insertAfter( $(selector) );
						$($input).wpalSelect2({
						data        : bulktaglist,
						placeholder : $($input).attr("placeholder")
					}).on('change', function(e) {
						if( $changedMembSel !== e.target ){
							membBulkUpdateTagChange(e.target, e.val);
						}
					});
				});

				// Action Select Changes
				$('select[name="action"], select[name="action2"]').on('change', function(e) {
					if( this.value === 'memb_bulk_tag' ){
						$('.memb_bulk_update_tag_wrap').removeClass('memb_hidden');
					}
					else{
						$('.memb_bulk_update_tag_wrap').addClass('memb_hidden');
					}
				});

				var membBulkUpdateTagChange = function ( $el, val ){
					$('.memb_bulk_update_tag').each(function(i, $input) {
						if( $input !== $el ){
							if( $input.value !== undefined && val !== $input.value ){
								$input.value = val;
								$($input).trigger('change');
							}
						}
						else {
							$changedMembSel = $el;
						}
					});
				};
			});
		})( jQuery );
		</script>
		<?php
 }
}
