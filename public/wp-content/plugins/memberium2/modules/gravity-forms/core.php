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


final class m4is_e9xazv4nanasm4rkjk {
private $m4is_132xe588j;

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_r8emp2zcmhv1twqx3qx8mv();

$this->m4is_5eragr7sh2yyj356m();
$this->m4is_jp0rgxf2ytap1chmfg();
}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
private function m4is_r8emp2zcmhv1twqx3qx8mv() : void {
if ( is_admin() && include_once __DIR__ . '/admin.php' ) {
m4is_z9tgs870pz64pwx::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

} 
}
private function m4is_5eragr7sh2yyj356m() {
add_filter('gform_pre_render', [$this, 'm4is_ersx2b4zrmved2ahq'], 1, 3);
add_filter('gform_after_submission',
 [$this, 'm4is_fr7fqmtf903gkxv'], 10, 2);
add_filter('gform_field_value_memb_city', [$this, 'm4is_wab4nk572w']);
add_filter('gform_field_value_memb_country',
 [$this, 'm4is_dpj7b2b3344s70422v3zkvvda81pj4']);
add_filter('gform_field_value_memb_email', [$this, 'm4is_9t2qfhgs84f1b1fr1gzy']);

add_filter('gform_field_value_memb_firstname', [$this, 'm4is_9z3zwwccxb3ztckges11']);
add_filter('gform_field_value_memb_firstname',
 [$this, 'm4is_dp0cjnwmsn4w24sj938jvzjr3']);
add_filter('gform_field_value_memb_lastname', [$this, 'm4is_mr4tb3z09mqq3e9b97ng6e2']);

add_filter('gform_field_value_memb_phone', [$this, 'm4is_nj3d3cvrpwm2js4j']);
add_filter('gform_field_value_memb_postalcode', [$this,
 'm4is_7a4vmc31d4sdx8s82sqqsae3q3r81e']);
add_filter('gform_field_value_memb_state', [$this, 'm4is_ygn5d2ms7ty']);
add_filter('gform_field_value_memb_streetaddress1',
 [$this, 'm4is_t1r0cez8']);
add_filter('gform_field_value_memb_streetaddress2', [$this, 'm4is_f0e0vekx3ypc2zq6bqxhqhftfmk61b2k']);
add_action( 'gform_editor_js',
 [$this, 'm4is_ynjc0brpekz0vfrk5az'] );
add_action( 'gform_field_advanced_settings', [$this, 'm4is_sv51vpe3d0ymegyykrc'], 10, 2 );
add_action( 'gform_post_payment',
 [$this, 'm4is_r2ms1975naq6'], 10, 2 );
add_filter( 'gform_form_settings', [$this, 'm4is_37pn0txtf'], 10, 2 );
add_filter( 'gform_pre_form_settings_save',
 [$this, 'm4is_xbva26nc54xwe23p2vbvh3b2qgy7h9'], 10, 2 );
}
function m4is_xbva26nc54xwe23p2vbvh3b2qgy7h9( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv ) {
$m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['memberiumformtag'] = rgpost( 'memberiumformtag' );

return $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv;
}

function m4is_r2ms1975naq6( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p, $m4is_knxbec8fr3be1s2tkx0ydee0z ) {

}
function m4is_sv51vpe3d0ymegyykrc( $m4is_vz966j777af7nrzx3dfyfff,
 $m4is_pae00hv11 ) {
static $seen = [];
if ( ! empty( $seen[$m4is_pae00hv11][$m4is_vz966j777af7nrzx3dfyfff] ) ) {
return;
}
if ( $m4is_vz966j777af7nrzx3dfyfff == 50 ) {
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n('Contact');

$m4is_c6ngcxmr2jp0wf27rv5nhk06g51241b3 = [
$this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'password_field'),

];
foreach($m4is_7b2yfzk0054 as $m4is_j8j55t8dz79m7 => $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6) {
if ( in_array( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6,
 $m4is_c6ngcxmr2jp0wf27rv5nhk06g51241b3 ) ) {
unset( $m4is_7b2yfzk0054[$m4is_j8j55t8dz79m7] );
}
}
unset( $m4is_j8j55t8dz79m7, $m4is_c6ngcxmr2jp0wf27rv5nhk06g51241b3 );

?>
			<!-- li class="default_value_setting admin_label_setting field_setting" -->
			<li class="admin_label_setting field_setting">
			<label for="field_admin_label" class="section_label">
			Memberium Sync
			<?php ?>

			</label>
			<select id="memberiumfieldsync" onchange="SetFieldProperty('memberiumfieldsync', this.value);" >
			<option value="">(None)</option>
			<?php
 if ( is_array( $m4is_7b2yfzk0054 ) ) {
foreach( $m4is_7b2yfzk0054 as $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
printf( '<option value="%s">%s</option>',
 $m4is_bbsta3mvjhhvh1x97vfpm9e, $m4is_bbsta3mvjhhvh1x97vfpm9e );
}
}
?>
			</select>
			</li>
			<?php
 }
$seen[$m4is_pae00hv11][$m4is_vz966j777af7nrzx3dfyfff] = 1;

}
function m4is_37pn0txtf( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy, $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv ) {
$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w();

$m4is_rqxytszfq5v6syth1csqqxvy5 = rgar( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv, 'memberiumformtag' ); 
$m4is_45a857vx58aez0 = '<option value="">(None)</option>';

foreach( $m4is_06c8s5xs94f91335gnaey25['mc'] as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp ) {
$m4is_fe42r2djxgf1h7pt = $m4is_rqxytszfq5v6syth1csqqxvy5== $m4is_bqhtspcavhb01spmfd3x ? ' selected=selected ' : '';

$m4is_45a857vx58aez0 .= sprintf( '<option value="%s" %s >%s</option>', $m4is_bqhtspcavhb01spmfd3x, $m4is_fe42r2djxgf1h7pt, $m4is_29gzevpx8rbkp );

}
unset( $m4is_06c8s5xs94f91335gnaey25, $m4is_rqxytszfq5v6syth1csqqxvy5 );
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['Form Options']['memberiumformtag'] = '
		<tr>
		<th><label for="memberiumformtag">Memberium Form Tag</label></th>
		<td><select name="memberiumformtag">' . $m4is_45a857vx58aez0 . '</select></td>
		</tr>';

return $m4is_8ew58cpxmftgpw93gdffm4s9bbwy;
}
function m4is_ynjc0brpekz0vfrk5az() {
?>
		<script type='text/javascript'>
		//adding setting to fields of type "text"
		fieldSettings.text += ", .memberiumfieldsync";

		//binding to the load field settings event to initialize the checkbox
		jQuery(document).bind("gform_load_field_settings", function(event, field, form){
			jQuery("#memberiumfieldsync").val(field["memberiumfieldsync"]);
		});
		</script>
		<?php
 }
function m4is_jp0rgxf2ytap1chmfg() {
add_shortcode( 'memb_gravityform_field',
 [$this, 'm4is_5ydr72wjm0v3zc9gt6hqtkvtskty']);
}
function m4is_rn7xyw4tm3z50fr0k3($m4is_nte5x18w680at = '', $m4is_syqymyz40rx4xgtqp8475ffwzw = '') {
$m4is_rqxytszfq5v6syth1csqqxvy5 = '';

if ( ! empty( $m4is_nte5x18w680at ) ) {
if ( substr( $m4is_nte5x18w680at, 0, 13 ) == 'memb.contact.' ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower( substr( $m4is_nte5x18w680at,
 13 ) );
$m4is_rqxytszfq5v6syth1csqqxvy5 = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, '' );
}
}
if ( empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) && ! empty( $m4is_syqymyz40rx4xgtqp8475ffwzw ) ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_syqymyz40rx4xgtqp8475ffwzw;

}
return do_shortcode( $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
function m4is_fr7fqmtf903gkxv( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p, $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv ) {
if ( is_array( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['fields'] ) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1 = [];

foreach( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['fields'] as $m4is_g576xw711bbeeccc96xsnz2td1 => $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
$m4is_dxj5dts7r1 = empty($m4is_bbsta3mvjhhvh1x97vfpm9e->memberiumfieldsync) ? '' : $m4is_bbsta3mvjhhvh1x97vfpm9e->memberiumfieldsync;

if (! empty($m4is_dxj5dts7r1) ) {
if ($m4is_bbsta3mvjhhvh1x97vfpm9e->type == 'address') {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_bbsta3mvjhhvh1x97vfpm9e->id;

$m4is_t7ss27sn8dc4ezemec9emt = [];
if ($m4is_dxj5dts7r1 == 'StreetAddress1') {
$m4is_t7ss27sn8dc4ezemec9emt = [
'street1' => 'StreetAddress1',

'street2' => 'StreetAddress2',
'city' => 'City',
'state' => 'State',
'postalcode' => 'PostalCode',
'country' => 'Country',
];
}
elseif ($m4is_dxj5dts7r1 == 'Address2Street1') {
$m4is_t7ss27sn8dc4ezemec9emt = [
'street1' =>
 'Address2Street1',
'street2' => 'Address2Street2',
'city' => 'City2',
'state' => 'State2',
'postalcode' => 'PostalCode2',
'country' =>
 'Country2',
];
}
elseif ($m4is_dxj5dts7r1 == 'Address3Street1') {
$m4is_t7ss27sn8dc4ezemec9emt = [
'street1' => 'Address3Street1',

'street2' => 'Address3Street2',
'city' => 'City3',
'state' => 'State3',
'postalcode' => 'PostalCode3',
'country' => 'Country3',
];

}
if (! empty($m4is_t7ss27sn8dc4ezemec9emt) ) {
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.1";
if (isset( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7]) ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_t7ss27sn8dc4ezemec9emt['street1'];

if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = trim($m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7]);

}
}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.2";
if (isset( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7]) ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_t7ss27sn8dc4ezemec9emt['street2'];

if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = trim($m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7]);

}
}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.3";
if (isset($m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7]) ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_t7ss27sn8dc4ezemec9emt['street2'];

if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = trim($m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7]);

}
}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.4";
if (isset($m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7]) ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_t7ss27sn8dc4ezemec9emt['state'];

if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = trim($m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7]);

}
}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.5";
if ( isset( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] ) ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_t7ss27sn8dc4ezemec9emt['postalcode'];

if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = trim($m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7]);

}
}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.6";
if (isset( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7]) ) {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = $m4is_t7ss27sn8dc4ezemec9emt['country'];

if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6]) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6] = trim( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] );

}
}
}
}
elseif ($m4is_bbsta3mvjhhvh1x97vfpm9e->type == 'name') {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_bbsta3mvjhhvh1x97vfpm9e->id;

if ($m4is_dxj5dts7r1 == 'FirstName') {
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.2";
if (isset( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] ) ) {
if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['Title']) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['Title'] = trim( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] );

}
}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.3";
if ( isset( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] ) ) {
if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['FirstName']) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['FirstName'] = trim( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] );

}
}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.4";
if ( isset( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] ) ) {
if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['MiddleName']) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['MiddleName'] = trim( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh.'.4'] );

}
}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.6";
if ( isset( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] ) ) {
if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['LastName']) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['LastName'] = trim( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] );

}
}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.8";
if ( isset( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] ) ) {
if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['Suffix']) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['Suffix'] = trim( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] );

}
}
}
else {
$m4is_cegjvya4jj68mdszk = [];
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.2";
if ( ! empty($m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] ) ) {
$m4is_cegjvya4jj68mdszk[] = $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7];

}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.3";
if ( ! empty( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] ) ) {
$m4is_cegjvya4jj68mdszk[] = $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7];

}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.4";
if ( ! empty( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] ) ) {
$m4is_cegjvya4jj68mdszk[] = $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7];

}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.6";
if ( ! empty( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] ) ) {
$m4is_cegjvya4jj68mdszk[] = $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7];

}
$m4is_j8j55t8dz79m7 = "{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}.8";
if ( ! empty( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7] ) ) {
$m4is_cegjvya4jj68mdszk[] = $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_j8j55t8dz79m7];

}
if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_dxj5dts7r1]) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_dxj5dts7r1] = trim(implode(' ',
 $m4is_cegjvya4jj68mdszk) );
}
}
}
elseif ($m4is_bbsta3mvjhhvh1x97vfpm9e->type == 'list') {



}
elseif ( $m4is_bbsta3mvjhhvh1x97vfpm9e->type == 'date' ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = trim( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_bbsta3mvjhhvh1x97vfpm9e->id] );

if (! empty($m4is_rqxytszfq5v6syth1csqqxvy5) ) {
if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_dxj5dts7r1]) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_dxj5dts7r1] = date( 'Ymd\TH:i:s',
 strtotime($m4is_rqxytszfq5v6syth1csqqxvy5) );
}
}
}
elseif ($m4is_bbsta3mvjhhvh1x97vfpm9e->type == 'number') {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_dxj5dts7r1] = (string) trim($m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_bbsta3mvjhhvh1x97vfpm9e->id] );

}
elseif ( in_array( $m4is_bbsta3mvjhhvh1x97vfpm9e->type, ['checkbox'] ) ) {
$m4is_cegjvya4jj68mdszk = [];
foreach ($m4is_bbsta3mvjhhvh1x97vfpm9e->inputs as $input_id =>
 $input) {
$m4is_kbajj66dh6x92y1gn = $input['id'];
if ( ! empty( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_kbajj66dh6x92y1gn] ) ) {
$m4is_cegjvya4jj68mdszk[] = $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_kbajj66dh6x92y1gn];

}
}
if ( substr( $m4is_cegjvya4jj68mdszk, 0, 2 ) == '["' ) {
$m4is_cegjvya4jj68mdszk = json_decode( $m4is_cegjvya4jj68mdszk );
}
else {
$m4is_cegjvya4jj68mdszk = implode( ',',
 $m4is_cegjvya4jj68mdszk );
}
if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_dxj5dts7r1]) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_dxj5dts7r1] = $m4is_cegjvya4jj68mdszk;

}
}
elseif (in_array($m4is_bbsta3mvjhhvh1x97vfpm9e->type, ['multiselect']) ) {
$m4is_cegjvya4jj68mdszk = $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_bbsta3mvjhhvh1x97vfpm9e->id];

if (substr($m4is_cegjvya4jj68mdszk, 0, 2) == '["') {
$m4is_cegjvya4jj68mdszk = implode(',', json_decode($m4is_cegjvya4jj68mdszk) );

}
if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_dxj5dts7r1]) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_dxj5dts7r1] = $m4is_cegjvya4jj68mdszk;

}
}
else {
if (empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_dxj5dts7r1]) ) {
$m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_dxj5dts7r1] = trim( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[$m4is_bbsta3mvjhhvh1x97vfpm9e->id] );

}
}
}
}
if (! empty($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1) ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_th384m7gvm775j7 = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'username_field');
$m4is_wte2qk9hdk1zj7 = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'password_field');
$m4is_dn21cv5ncdqnrgyzdaeggbx = is_user_logged_in();
$m4is_jcst2tv4cvpawg3jzc0yar = strtolower( m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $m4is_wk4dh1rnd3wmwvsggq51nhn87,
 'contact', 'email', '' ) );
$m4is_fx702t885xf3efc5tpmycr = isset( $m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['Email'] ) ? strtolower( trim( $m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['Email'] ) ) : '';

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = 0;
$m4is_hf6ctsm2pnexk = isset( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['memberiumformtag'] ) ? (int) $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['memberiumformtag'] : 0;

if ( empty($m4is_fx702t885xf3efc5tpmycr) && is_user_logged_in() ) {
$m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 = wp_get_current_user();

$m4is_fx702t885xf3efc5tpmycr = is_a( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65, 'WP_User' ) ? $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->user_email : '';

}

unset( $m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_wte2qk9hdk1zj7] );

if ( is_user_logged_in() ) {
if ( empty( $m4is_fx702t885xf3efc5tpmycr ) || $m4is_fx702t885xf3efc5tpmycr == $m4is_jcst2tv4cvpawg3jzc0yar ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $this->m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

}
}
if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
unset( $m4is_mxx6gby58xewc8sdqgkkxwa2fhq1[$m4is_th384m7gvm775j7] );
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $m4is_hf6ctsm2pnexk,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, $m4is_mxx6gby58xewc8sdqgkkxwa2fhq1);

m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_km2vptq0bwg( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_f54f6mxb3zka1m( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_wk4dh1rnd3wmwvsggq51nhn87 );
}
else {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_fcp8rjzp5vm($m4is_mxx6gby58xewc8sdqgkkxwa2fhq1);

m4is_rw8p2dfy073ez::m4is_rxf2xq5wvdkk7jhkx8( $m4is_mxx6gby58xewc8sdqgkkxwa2fhq1['Email'], "GravityForms Enrollment - Form '{$m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['title']}'\nIP Address ' . {$m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p['ip']}" );

m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ppmdm3jy0dzgsnx( $m4is_hf6ctsm2pnexk, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}

if ( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {

$m4is_g61yzqs7ecta0xztr70d7v = [
'table' => -1,
'type' => 19,
];
$m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1 = m4is_q28s00aabb2yd3d::m4is_d2ce9k4j3( m4is_q28s00aabb2yd3d::CONTACT_FIELDS,
 m4is_q28s00aabb2yd3d::EMAIL_TYPE);
$m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1[] = 'Email';
$m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1[] = 'EmailAddress2';

$m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1[] = 'EmailAddress3';
$m4is_a70jgs7y5y97876kqw16m0wxz8 = [];
foreach( $m4is_mxx6gby58xewc8sdqgkkxwa2fhq1 as $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 =>
 $m4is_xgtgw8c7w25hk72ec5z99vqy7a ) {
if ( in_array( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6, $m4is_s3e4qhtvmvjgbsgg1pzbp6a86cnxb1 ) ) {
if ( ! empty( $m4is_xgtgw8c7w25hk72ec5z99vqy7a ) ) {
$m4is_a70jgs7y5y97876kqw16m0wxz8[] = strtolower( trim( $m4is_xgtgw8c7w25hk72ec5z99vqy7a ) );

}
}
}
$m4is_a70jgs7y5y97876kqw16m0wxz8 = array_unique( $m4is_a70jgs7y5y97876kqw16m0wxz8 );
foreach( $m4is_a70jgs7y5y97876kqw16m0wxz8 as $m4is_zxwt8y3szyy1aenkh ) {
if ( ! empty( $m4is_zxwt8y3szyy1aenkh ) ) {
m4is_rw8p2dfy073ez::m4is_rxf2xq5wvdkk7jhkx8( $m4is_zxwt8y3szyy1aenkh,
 'Memberium Gravity Form Submission' );
}
}
}
}
}
}

function m4is_ersx2b4zrmved2ahq($m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv, $m4is_hcqn4grh014pytrf,
 $m4is_bcvv60jyjf72xmha) {
if ( is_array( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv ) ) {
foreach ( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['fields'] as &$m4is_bbsta3mvjhhvh1x97vfpm9e ) {
$m4is_6m8raeet14zjyazcjb931mry2a55jfy = property_exists( $m4is_bbsta3mvjhhvh1x97vfpm9e,
 'type' ) ? $m4is_bbsta3mvjhhvh1x97vfpm9e->type : '';
$m4is_rqxytszfq5v6syth1csqqxvy5 = '';
$m4is_nte5x18w680at = property_exists( $m4is_bbsta3mvjhhvh1x97vfpm9e,
 'inputName' ) ? $m4is_bbsta3mvjhhvh1x97vfpm9e->inputName : '';
$m4is_syqymyz40rx4xgtqp8475ffwzw = property_exists( $m4is_bbsta3mvjhhvh1x97vfpm9e,
 'defaultValue' ) ? $m4is_bbsta3mvjhhvh1x97vfpm9e->defaultValue : '';
$m4is_rqxytszfq5v6syth1csqqxvy5 = $this->m4is_rn7xyw4tm3z50fr0k3( $m4is_nte5x18w680at,
 $m4is_syqymyz40rx4xgtqp8475ffwzw );
if ( property_exists( $m4is_bbsta3mvjhhvh1x97vfpm9e, 'defaultValue' ) ) {
$m4is_bbsta3mvjhhvh1x97vfpm9e->defaultValue = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
if ( $m4is_6m8raeet14zjyazcjb931mry2a55jfy == 'date' ) {
if ( ! empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ) {
$m4is_hrcn65xk86bmf = strtotime( $m4is_rqxytszfq5v6syth1csqqxvy5 );

if ( $m4is_bbsta3mvjhhvh1x97vfpm9e->dateType == 'datepicker') {
$m4is_bbsta3mvjhhvh1x97vfpm9e->defaultValue = date( 'm\/d\/Y', $m4is_hrcn65xk86bmf );

}
elseif ( $m4is_bbsta3mvjhhvh1x97vfpm9e->dateType == 'datefield' ) {
$m4is_bbsta3mvjhhvh1x97vfpm9e->inputs[0]['defaultValue'] = date( 'n',
 $m4is_hrcn65xk86bmf );
$m4is_bbsta3mvjhhvh1x97vfpm9e->inputs[1]['defaultValue'] = date( 'j', $m4is_hrcn65xk86bmf );
$m4is_bbsta3mvjhhvh1x97vfpm9e->inputs[2]['defaultValue'] = date( 'Y',
 $m4is_hrcn65xk86bmf );
}
elseif ( $m4is_bbsta3mvjhhvh1x97vfpm9e->dateType == 'datedropdown' ) {
$m4is_bbsta3mvjhhvh1x97vfpm9e->inputs[0]['defaultValue'] = date( 'n',
 $m4is_hrcn65xk86bmf );
$m4is_bbsta3mvjhhvh1x97vfpm9e->inputs[1]['defaultValue'] = date( 'j', $m4is_hrcn65xk86bmf );
$m4is_bbsta3mvjhhvh1x97vfpm9e->inputs[2]['defaultValue'] = date( 'Y',
 $m4is_hrcn65xk86bmf );
}
}
}
elseif ( $m4is_6m8raeet14zjyazcjb931mry2a55jfy == 'name' ) {
foreach( $m4is_bbsta3mvjhhvh1x97vfpm9e->inputs as $m4is_j8j55t8dz79m7 =>
 $m4is_wyk9y573rfnnpx3r ) {
$m4is_nte5x18w680at = isset( $m4is_wyk9y573rfnnpx3r['name'] ) ? $m4is_wyk9y573rfnnpx3r['name'] : '';
$m4is_syqymyz40rx4xgtqp8475ffwzw = isset( $m4is_wyk9y573rfnnpx3r['defaultValue'] ) ? $m4is_wyk9y573rfnnpx3r['defaultValue'] : '';

$m4is_bbsta3mvjhhvh1x97vfpm9e->inputs[$m4is_j8j55t8dz79m7]['defaultValue'] = $this->m4is_rn7xyw4tm3z50fr0k3( $m4is_nte5x18w680at, $m4is_syqymyz40rx4xgtqp8475ffwzw );

}
}
elseif ( $m4is_6m8raeet14zjyazcjb931mry2a55jfy == 'address' ) {
foreach( $m4is_bbsta3mvjhhvh1x97vfpm9e->inputs as $m4is_j8j55t8dz79m7 =>
 $m4is_wyk9y573rfnnpx3r ) {
$m4is_nte5x18w680at = isset( $m4is_wyk9y573rfnnpx3r['name'] ) ? $m4is_wyk9y573rfnnpx3r['name'] : '';
$m4is_syqymyz40rx4xgtqp8475ffwzw = isset( $m4is_wyk9y573rfnnpx3r['defaultValue'] ) ? $m4is_wyk9y573rfnnpx3r['defaultValue'] : '';

$m4is_bbsta3mvjhhvh1x97vfpm9e->inputs[$m4is_j8j55t8dz79m7]['defaultValue'] = $this->m4is_rn7xyw4tm3z50fr0k3( $m4is_nte5x18w680at, $m4is_syqymyz40rx4xgtqp8475ffwzw );

}
}
elseif ( $m4is_6m8raeet14zjyazcjb931mry2a55jfy == 'checkbox' ) {
$selections = [];
if ( property_exists( $m4is_bbsta3mvjhhvh1x97vfpm9e,
 'defaultValue' ) ) {
$selections = strtolower( $m4is_bbsta3mvjhhvh1x97vfpm9e->defaultValue );
$selections = array_filter( explode( ',',
 $selections ) );

}
foreach( $m4is_bbsta3mvjhhvh1x97vfpm9e->choices as $choice_id => $choice ) {
if ( in_array( strtolower( $choice['value'] ),
 $selections ) ) {
$m4is_bbsta3mvjhhvh1x97vfpm9e->choices[$choice_id]['isSelected'] = 1;
}
}
}
else {
if ( is_array( $m4is_bbsta3mvjhhvh1x97vfpm9e->inputs ) ) {
foreach( $m4is_bbsta3mvjhhvh1x97vfpm9e->inputs as $m4is_j8j55t8dz79m7 =>
 $m4is_wyk9y573rfnnpx3r ) {
$m4is_nte5x18w680at = isset( $m4is_wyk9y573rfnnpx3r['name'] ) ? $m4is_wyk9y573rfnnpx3r['name'] : '';
$m4is_syqymyz40rx4xgtqp8475ffwzw = isset( $m4is_wyk9y573rfnnpx3r['defaultValue'] ) ? $m4is_wyk9y573rfnnpx3r['defaultValue'] : '';

$m4is_bbsta3mvjhhvh1x97vfpm9e->inputs[$m4is_j8j55t8dz79m7]['defaultValue'] = $this->m4is_rn7xyw4tm3z50fr0k3( $m4is_nte5x18w680at, $m4is_syqymyz40rx4xgtqp8475ffwzw );

}
}
}
}
}
return $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv;
}
function m4is_t2xce5j0r7xs29k8asg712pce8bzv($m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv,
 $m4is_hcqn4grh014pytrf, $m4is_bcvv60jyjf72xmha) {
}
function m4is_5ydr72wjm0v3zc9gt6hqtkvtskty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
$m4is_n7x0afpz = [
'after' => '',
'before' => '',
'capture' =>
 '',
'debug' => 0,
'default' => '',
'field' => '',
'form_id' => 0,
'htmlattr' => '',
'input' => '',
'offset' => 0,
'order' => 'DESC',

'page_size' => 1,
'status' => 'active',
'txtfmt' => '',
'user_id' => $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] = strtolower( trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field']) );

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['input'] = strtolower( trim($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['input']) );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'];

$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page_size'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page_size'];
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['offset'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['offset'];

$m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv = GFAPI::get_form($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id']);
$m4is_g576xw711bbeeccc96xsnz2td1 = 0;

if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] ) ) {
if ( m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_mdj300zr1jk5av2y9cp() ) return '<p>Error:  No Fieldname Provided.</pre>';

return;
}
if ( empty( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv ) ) {
if ( m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_mdj300zr1jk5av2y9cp() ) return '<p>Error:  Invalid Form Id.</p>';

return;
}
if ( empty( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['fields'] ) ) {
if ( m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_mdj300zr1jk5av2y9cp() ) return '<p>Error:  This form has no fields.</p>';

return;
}
$m4is_x5f2t517kwy43wze0bq9e = [];
$m4is_x5f2t517kwy43wze0bq9e['status'] = 'active';
$m4is_vesgm7q7a9b9td78xrwggj6k136y54aa = 1;

$m4is_9cf435ntkx7f9rvnrvx0q18wxzxa8p = [
'direction' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order'],
'is_numeric' => true
];
$m4is_jxh6xvcwpee7gkcrq6qk6h6tycmy = [
'offset' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['offset'],
'page_size' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['page_size']
];
$m4is_x5f2t517kwy43wze0bq9e['field_filters'][] = [
'key' =>
 'created_by',
'value' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['user_id']
];
$m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p = GFAPI::get_entries($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['form_id'],
 $m4is_x5f2t517kwy43wze0bq9e, $m4is_9cf435ntkx7f9rvnrvx0q18wxzxa8p, $m4is_jxh6xvcwpee7gkcrq6qk6h6tycmy, $m4is_vesgm7q7a9b9td78xrwggj6k136y54aa);

if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['debug'] ) {
return print_r( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p, true );
}

foreach( $m4is_9tr44smnckmwx2b63wm8h8nkhtbptkv['fields'] as $m4is_7b2yfzk0054 ) {
$m4is_2hbz903tzgvnen2k0wa = ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] == strtolower( $m4is_7b2yfzk0054->memberiumfieldsync ) );

$m4is_2hbz903tzgvnen2k0wa = $m4is_2hbz903tzgvnen2k0wa || ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] == strtolower( $m4is_7b2yfzk0054->adminLabel ) );

$m4is_2hbz903tzgvnen2k0wa = $m4is_2hbz903tzgvnen2k0wa || ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] == strtolower( $m4is_7b2yfzk0054->label ) );

if ( $m4is_2hbz903tzgvnen2k0wa ) {
if ( ! is_array( $m4is_7b2yfzk0054->inputs ) ) {
$m4is_g576xw711bbeeccc96xsnz2td1 = $m4is_7b2yfzk0054->id;

}
else {
foreach ( $m4is_7b2yfzk0054->inputs as $m4is_gj1m1bd0009x0rmfcgj8c7a0m ) {
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['input'] == strtolower( $m4is_gj1m1bd0009x0rmfcgj8c7a0m['label'] ) || $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['input'] == strtolower( $m4is_gj1m1bd0009x0rmfcgj8c7a0m['name'] ) ) {
$m4is_g576xw711bbeeccc96xsnz2td1 = $m4is_gj1m1bd0009x0rmfcgj8c7a0m['id'];

}
}
}
}
}
unset( $m4is_9cf435ntkx7f9rvnrvx0q18wxzxa8p, $m4is_x5f2t517kwy43wze0bq9e, $m4is_jxh6xvcwpee7gkcrq6qk6h6tycmy, $m4is_vesgm7q7a9b9td78xrwggj6k136y54aa,
 $m4is_1thmcectpx9kpg );
$m4is_g576xw711bbeeccc96xsnz2td1 = empty( $m4is_g576xw711bbeeccc96xsnz2td1 ) ? $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['field'] : $m4is_g576xw711bbeeccc96xsnz2td1;

if ( $m4is_g576xw711bbeeccc96xsnz2td1 ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = isset( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[0][$m4is_g576xw711bbeeccc96xsnz2td1] ) ? $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p[0][$m4is_g576xw711bbeeccc96xsnz2td1] : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['default'];

$m4is_1thmcectpx9kpg = json_decode( $m4is_rqxytszfq5v6syth1csqqxvy5 );
$m4is_rqxytszfq5v6syth1csqqxvy5 = empty( $m4is_1thmcectpx9kpg ) ? $m4is_rqxytszfq5v6syth1csqqxvy5 : $m4is_1thmcectpx9kpg;

}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa( false, $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['txtfmt'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['before'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['after'] );
}



function m4is_9z3zwwccxb3ztckges11( $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'memb_user', 'crm_id', 0 );
}
function m4is_dp0cjnwmsn4w24sj938jvzjr3($m4is_rqxytszfq5v6syth1csqqxvy5) {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'firstname', '' );
}
function m4is_mr4tb3z09mqq3e9b97ng6e2($m4is_rqxytszfq5v6syth1csqqxvy5) {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'lastname', '' );
}
function m4is_9t2qfhgs84f1b1fr1gzy($m4is_rqxytszfq5v6syth1csqqxvy5) {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'email', '' );
}
function m4is_nj3d3cvrpwm2js4j($m4is_rqxytszfq5v6syth1csqqxvy5) {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'phone1', '' );
}
function m4is_t1r0cez8($m4is_rqxytszfq5v6syth1csqqxvy5) {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'streetaddress1', '' );
}
function m4is_f0e0vekx3ypc2zq6bqxhqhftfmk61b2k($m4is_rqxytszfq5v6syth1csqqxvy5) {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'streetaddress2', '' );
}
function m4is_wab4nk572w($m4is_rqxytszfq5v6syth1csqqxvy5) {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'city', '' );
}
function m4is_ygn5d2ms7ty($m4is_rqxytszfq5v6syth1csqqxvy5) {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'state', '' );
}
function m4is_7a4vmc31d4sdx8s82sqqsae3q3r81e($m4is_rqxytszfq5v6syth1csqqxvy5) {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'postalcode', '' );
}
function m4is_dpj7b2b3344s70422v3zkvvda81pj4($m4is_rqxytszfq5v6syth1csqqxvy5) {
return m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'contact', 'country', '' );
}
function __call($m4is_sjjed77r6tc8e, $m4is_g61yzqs7ecta0xztr70d7v) {
}
}