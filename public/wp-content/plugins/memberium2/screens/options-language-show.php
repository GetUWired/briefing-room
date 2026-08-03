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

current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
new m4is_sr5a9vncq776hcjx76p();

final class m4is_sr5a9vncq776hcjx76p {
private $m4is_132xe588j;
private $m4is_7yaq0kttm;
function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();

$this->m4is_9adtaa67sa21q2c604j55azyzd();
$this->m4is_ranr89c2gngyncmfbwyag76f1rq();
}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_7yaq0kttm = m4is_eknm14gbx0wvrnh6::m4is_tszcc97d8wxzsgpkyvzhvegpz0();
}

private function m4is_9adtaa67sa21q2c604j55azyzd() : void {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;

}
global $wpdb;
if ( ! empty( $_POST['add_translation'] ) ) {
$m4is_0k1mrqgxx6bb = strtolower( trim( $_POST['context'] ?? '' ) );
$m4is_hce1y1a4qd65zhnwsj = strtolower( trim( $_POST['name'] ?? '' ) );

$m4is_rckjt7j1pfr4x77x = strtolower( trim( $_POST['language'] ?? '' ) );
$m4is_egv78af43d0vtmjt6tf79erzt = trim( stripslashes( $_POST['origtext'] ?? '' ) );

$m4is_rqxytszfq5v6syth1csqqxvy5 = trim( stripslashes( $_POST['value'] ?? '' ) );
$m4is_5rbenkpt1v7xby2cknbs7 = 'DELETE FROM %i WHERE `context` = %s AND `name` = %s AND origtext = %s';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $this->m4is_7yaq0kttm, $m4is_0k1mrqgxx6bb, $m4is_hce1y1a4qd65zhnwsj,
 $m4is_egv78af43d0vtmjt6tf79erzt );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
if ( ! empty( $_POST['value'] ) ) {
$m4is_5rbenkpt1v7xby2cknbs7 = 'INSERT INTO %i (`context`, `language`, `name`, `origtext`, `value` ) VALUES (%s, %s, %s, %s, %s )';

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare($m4is_5rbenkpt1v7xby2cknbs7, $this->m4is_7yaq0kttm, $m4is_0k1mrqgxx6bb, $m4is_rckjt7j1pfr4x77x,
 $m4is_hce1y1a4qd65zhnwsj, $m4is_egv78af43d0vtmjt6tf79erzt, $m4is_rqxytszfq5v6syth1csqqxvy5 );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );

}
}
if ( ! empty( $_POST['update_translations'] ) ) {
$m4is_cegjvya4jj68mdszk = $_POST['value'] ?? [];
foreach( $m4is_cegjvya4jj68mdszk as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = intval( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh );
$m4is_rqxytszfq5v6syth1csqqxvy5 = trim( stripslashes( $m4is_rqxytszfq5v6syth1csqqxvy5 ) );

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( 'UPDATE %i SET `value` = %s WHERE `id` = %d', $this->m4is_7yaq0kttm, $m4is_rqxytszfq5v6syth1csqqxvy5,
 $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
if ( ! empty( $_POST['id'] ) && is_array( $_POST['id'] ) ) {
$m4is_934a95jn = array_filter( array_map( 'intval',
 $_POST['id'] ) );
$m4is_934a95jn = implode( ',', $m4is_934a95jn );
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "DELETE FROM %i WHERE `id` IN ( {$m4is_934a95jn} )",
 $this->m4is_7yaq0kttm );
$wpdb->query( $m4is_5rbenkpt1v7xby2cknbs7 );
}
}
}
private function m4is_ranr89c2gngyncmfbwyag76f1rq() {
global $wpdb;

$m4is_7vdc65w311rh47hp6jgrm3jwk5v6kvsc = m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 14684, 'Click to Learn More' );
$m4is_g8kjnx0f2 = wp_nonce_field( __FILE__,
 'memberium_language_translations_nonce', true, false );
$m4is_5jfg94nm = trim( $_GET['search'] ?? '' );
$m4is_cdyf61rtsqq95d = esc_html( $m4is_5jfg94nm );

$m4is_z9dkjdhc371tr53e = $this->m4is_kejjkd2j2cj01yc0mz43e();
$m4is_p8df7fzdmg6r67hcveb4dmny96 = $this->m4is_tyy5e2wde9efj3( $m4is_5jfg94nm );


echo <<<HTMLBLOCK

			<h3>Multi-Language Support</h3>
			<p>
				Enter the name of the shortcode (without the brackets) in “Context”.<br />
				Leave Name and Language fields to the default.<br />
				Enter “Original text” (from which you want to translate) and then the “New text" you want displayed instead.<br />
			<p>
				{$m4is_7vdc65w311rh47hp6jgrm3jwk5v6kvsc}
			</p>
			<hr />
		HTMLBLOCK;


echo <<<HTMLBLOCK

			<form method=post style="margin-bottom:24px;">
				{$m4is_g8kjnx0f2}
				<ul>
					<label>Context:</label>
					<input required="required" type="text" name="context" value="" size="30">
				</ul>
				<ul>
					<label>Name:</label>
					<select name="name">
						<option value="memberium">Memberium</option>
						<option value="">Generic</option>
					</select>
				</ul>
				<ul>
					<label>Language:</label>
					{$m4is_z9dkjdhc371tr53e}
				</ul>
				<ul>
					<label>Original Text:</label>
					<input required="required" type="text" name="origtext" value="" size="80">
				</ul>
				<ul>
					<label>New Text:</label>
					<input type="text" name="value" value="" size="80">
				</ul>

				<input required="required" type="submit" name="add_translation" value="Add/Update" class="button-primary">
			</form>
			<hr />
		HTMLBLOCK;


echo <<<HTMLBLOCK

			<form method="get">
				{$m4is_g8kjnx0f2}
				<input type="hidden" name="page" value="memberium-options">
				<input type="hidden" name="tab" value="language">
				<p>
					<input type="text" name="search" value="{$m4is_cdyf61rtsqq95d}" placeholder="Search for translations" style="width:250px;"> &nbsp;
					<input type="submit" name="submit" value="Search" class="button-primary">
				</p>
			</form>
		HTMLBLOCK;

$m4is_9pgkxwvy9q1vp9ayg = $this->m4is_9zvdwvx55yzj863pxcrra5s2h6rktyq( $m4is_p8df7fzdmg6r67hcveb4dmny96 );
if ( empty( $m4is_9pgkxwvy9q1vp9ayg ) ) {
echo '<p>No translations found.</p>';

return;
}

echo <<<HTMLBLOCK

			<style>
				.memberium_search_results {

				}
				.memberium_search_results td {
					padding: 5px;
				}
				.memberium_search_results tr:nth-child(odd) {
					background-color: #f9f9f9;
				}
				.memberium_search_results td.memberium_delete {
					width: 50px;
				}
				.memberium_search_results td.memberium_id {
					width: 50px;
				}
				.memberium_search_results td.memberium_language {
					width: 125px;
				}
				.memberium_search_results td.memberium_context {
					width: 125px;
				}
				.memberium_search_results td.memberium_original {
					word-wrap: break-word;
					word-break: break-all;
					width: 350px;
				}
				.memberium_search_results td.memberium_new {
					word-wrap: break-word;
					word-break: break-all;
				}
				.memberium_search_results td textarea {
					height: 90%;
					overflow-y: hidden;
					width: 90%;
				}
			</style>
			<form method="post">
				<table class="widefat memberium_search_results">
					<tr>
						<td class="memberium_delete">Delete</td>
						<td class="memberium_id">ID</td>
						<td class="memberium_language">Language</td>
						<td class="memberium_context">Context</td>
						<td class="memberium_original">Original Text</td>
						<td class="memberium_new">Translated Text</td>
					</tr>
					{$m4is_9pgkxwvy9q1vp9ayg}
				</table>
				<p>
				<input type="submit" name="update_translations" value="Update">
				</p>
			</form>
			<script>
				function wpal_resize_all_textareas() {
					jQuery('textarea').each(function () {
						this.style.height = 'auto';
						this.style.height = (this.scrollHeight) + 'px';
					});
				}

				jQuery(window).resize( function() { wpal_resize_all_textareas(); } );
				jQuery(document).ready( function() { wpal_resize_all_textareas(); } );
				jQuery('textarea').on( 'input', function () { wpal_resize_all_textareas(); } );
			</script>
		HTMLBLOCK;

}

private function m4is_kejjkd2j2cj01yc0mz43e() : string {
$m4is_y1qf2vysasyv4bw69ddd0520txb4w = $this->m4is_bxz3jaeds();
$m4is_qc36n7jdf = '<select name="language">';

foreach( $m4is_y1qf2vysasyv4bw69ddd0520txb4w as $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 => $m4is_hce1y1a4qd65zhnwsj ) {
$m4is_qc36n7jdf .= sprintf( '<option value="%s">%s</option>',
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_hce1y1a4qd65zhnwsj );
}
$m4is_qc36n7jdf .= '</select>';
return $m4is_qc36n7jdf;
}

private function m4is_bxz3jaeds() : array {
return [
'' =>
 'Default',
'en' => 'English',
'ar' => 'Arabic',
'cy' => 'Welsh',
'de' => 'German',
'es' => 'Spanish',
'fr' => 'French',
'he' => 'Hebrew',

'hi' => 'Hindu',
'it' => 'Italian',
'ja' => 'Japanese',
'ji' => 'Yiddish',
'ko' => 'Korean',
'po' => 'Polish',
'pt' => 'Portuguese',

'ru' => 'Russian',
'sv' => 'Swedish',
'vi' => 'Vietnamese',
'zh' => 'Chinese',
];
}

private function m4is_tyy5e2wde9efj3( $m4is_5jfg94nm ) : array {
global $wpdb;

$m4is_gj8xtc69nca5yvwt3 = 5;
$m4is_rkmcn1zd3r3k149h20vfr8z = empty( $m4is_5jfg94nm ) ? "LIMIT {$m4is_gj8xtc69nca5yvwt3}" : '';
$m4is_4yqtc4qkdmwmb2wv4qcnwe0bck6ff8mt = '%' . $wpdb->esc_like( $m4is_5jfg94nm ) . '%';

$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT * FROM %i WHERE `context` LIKE %s OR `origtext` LIKE %s OR `value` LIKE %s ORDER BY id DESC {$m4is_rkmcn1zd3r3k149h20vfr8z}";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, $this->m4is_7yaq0kttm, $m4is_4yqtc4qkdmwmb2wv4qcnwe0bck6ff8mt,
 $m4is_4yqtc4qkdmwmb2wv4qcnwe0bck6ff8mt, $m4is_4yqtc4qkdmwmb2wv4qcnwe0bck6ff8mt );
$m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7,
 ARRAY_A );
return is_array( $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m ) ? $m4is_7p1vny750r00xc6kyzqkp8bjcpfvbm8m : [];
}

private function m4is_9zvdwvx55yzj863pxcrra5s2h6rktyq( array $m4is_p8df7fzdmg6r67hcveb4dmny96 ) : string {
$m4is_qc36n7jdf = '';

foreach( $m4is_p8df7fzdmg6r67hcveb4dmny96 as $m4is_bamv772v ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = esc_html( $m4is_bamv772v['id'] );

$m4is_0k1mrqgxx6bb = esc_html( $m4is_bamv772v['context'] );
$m4is_egv78af43d0vtmjt6tf79erzt = esc_html( $m4is_bamv772v['origtext'] );

$m4is_rqxytszfq5v6syth1csqqxvy5 = esc_html( $m4is_bamv772v['value'] );
$m4is_rckjt7j1pfr4x77x = empty( $m4is_bamv772v['language'] ) ? '(Unknown)' : $m4is_bamv772v['language'];

$m4is_qc36n7jdf .= <<<HTMLBLOCK

				<tr>
					<td class="memberium_delete">
						<input type="checkbox" name="id[]" value="{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}">
					</td>
					<td class="memberium_id">
						{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}
					</td>
					<td class="memberium_language">
						{$m4is_rckjt7j1pfr4x77x}
					</td>
					<td class="memberium_context">
						{$m4is_0k1mrqgxx6bb}
					</td>
					<td class="memberium_original">
						{$m4is_egv78af43d0vtmjt6tf79erzt}
					</td>
					<td class="memberium_new">
						<textarea name="value[{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}]">{$m4is_rqxytszfq5v6syth1csqqxvy5}</textarea>
					</td>
				</tr>
			HTMLBLOCK;

}
return $m4is_qc36n7jdf;
}

}
