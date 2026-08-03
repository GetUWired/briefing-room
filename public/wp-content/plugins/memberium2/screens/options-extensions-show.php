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

m4is_9a1fffscdj15y70hh73wa8rvsnhr815e::m4is_de8n8qy4mmtnkq33p();
class m4is_9a1fffscdj15y70hh73wa8rvsnhr815e {
static private $m4is_132xe588j;

static private $m4is_jhvqyp7500;
static private $m4is_hybtydg4zdv9ezjkq398btnjs2tqpk;
static private $m4is_8ew58cpxmftgpw93gdffm4s9bbwy;

static private array $m4is_hhc1skqcd4d0e7qyfzww71mdb47;
static private array $m4is_qsq10a81b;
static function m4is_de8n8qy4mmtnkq33p() {
self::m4is_cmdwra5kyw39gn1ptag2c7f2();

self::m4is_rdbqwsws7nxnjkh();
self::m4is_ranr89c2gngyncmfbwyag76f1rq();
self::m4is_a176d873qyfp();
}
private function __construct() {}
private static function m4is_cmdwra5kyw39gn1ptag2c7f2() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_hhc1skqcd4d0e7qyfzww71mdb47 = self::$m4is_132xe588j->m4is_nqgq39gevb5zc5g();
self::$m4is_qsq10a81b = self::$m4is_132xe588j->m4is_gq31rg2azs88w0mnwywq847();

self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = self::$m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings' );
self::$m4is_jhvqyp7500 = get_option( 'memberium_extensions',
 [] );
self::$m4is_hybtydg4zdv9ezjkq398btnjs2tqpk = [];

foreach( self::$m4is_jhvqyp7500 as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp ) {
if ( ! array_key_exists( $m4is_bqhtspcavhb01spmfd3x,
 self::$m4is_hhc1skqcd4d0e7qyfzww71mdb47 ) ) {
unset( self::$m4is_jhvqyp7500[$m4is_bqhtspcavhb01spmfd3x] );
}
}
ksort( self::$m4is_jhvqyp7500 );

foreach( self::$m4is_hhc1skqcd4d0e7qyfzww71mdb47 as $m4is_s8cs5mdq57e5bgpqzd => $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 ) {
if( array_key_exists( $m4is_s8cs5mdq57e5bgpqzd,
 self::$m4is_qsq10a81b ) ){
$m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 = dirname( self::$m4is_132xe588j->m4is_hscsx4pb3zt() . 'vendor/' . $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 ) . '/info.txt';

}
else{
$m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 = dirname( self::$m4is_132xe588j->m4is_t0brxwak7n05mx6anqhyrgmr( $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 ) ) . '/info.txt';

}
if ( file_exists( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 ) ) {
self::$m4is_hybtydg4zdv9ezjkq398btnjs2tqpk[] = $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7;

}
}
}
private static function m4is_rdbqwsws7nxnjkh() {
current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

}
private static function m4is_g005b1ksr3m91h6() {
foreach ( self::$m4is_hybtydg4zdv9ezjkq398btnjs2tqpk as $m4is_02aqfry7az3jeqc2g29bfxb =>
 $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 ) {
$m4is_9rk4kadzc7f4wgspm0rpthxhsc2777k = dirname( $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 ) . '/info.txt';

$m4is_d60kn1d3yvprp62rs332 = get_plugin_data( $m4is_9rk4kadzc7f4wgspm0rpthxhsc2777k, false, false );
$m4is_6k84v5caq4k = basename( dirname( $m4is_cp7zsezwfczkv9s3hd3y63gtcnx1m1 ) );

$m4is_p8dh1wr8wzz3gq80 = isset( self::$m4is_jhvqyp7500[$m4is_6k84v5caq4k] ) ? self::$m4is_jhvqyp7500[$m4is_6k84v5caq4k] : 1;
if (! empty($m4is_d60kn1d3yvprp62rs332['Name'] ) ) {
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( $m4is_d60kn1d3yvprp62rs332['Name'],
 "extensions[{$m4is_6k84v5caq4k}]", $m4is_d60kn1d3yvprp62rs332['AuthorURI'], (bool) $m4is_p8dh1wr8wzz3gq80 );
}
}
}
private static function m4is_a176d873qyfp() {
echo <<<HTMLBLOCK



			<script>
		HTMLBLOCK;

if ( empty( self::$m4is_jhvqyp7500['facebook'] ) ) {
echo <<<HTMLBLOCK

				jQuery('#facebook_app_id').attr('disabled', 'disabled');
				jQuery('#facebook_app_id').val('');
				jQuery('#facebook_app_id').attr('placeholder', 'Activate the Facebook extension to use this.');
			HTMLBLOCK;

}
if ( empty( self::$m4is_jhvqyp7500['spiffy'] ) ) {
echo <<<HTMLBLOCK

				jQuery('#spiffy_api_key,#spiffy_subdomain').attr('disabled', 'disabled');
				jQuery('#spiffy_api_key,#spiffy_subdomain').val('');
				jQuery('#spiffy_api_key,#spiffy_subdomain').attr('placeholder', 'Activate the Spiffy extension to use this.');
			HTMLBLOCK;

}
echo <<<HTMLBLOCK

			</script>


		HTMLBLOCK;
}
private static function m4is_ranr89c2gngyncmfbwyag76f1rq() {
echo '<form method="POST" action="">';

wp_nonce_field( self::$m4is_132xe588j->m4is_54b9bwwsx7sym(), 'memberium_options_nonce' );
echo '<ul>';
echo '<h3>Optional Extensions</h3>';

self::m4is_g005b1ksr3m91h6();
echo '</ul>';
echo '<ul>';
echo '<h3>Optional Settings</h3>';
m4is_dv250ra9xbtaf::m4is_f8vws9aeenhp( 'Facebook App ID',
 'facebook_app_id', self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['facebook_app_id'], ['help_id' => 2571, 'style' => 'text-align:left;width:100px;']);

echo '<br />';
m4is_dv250ra9xbtaf::m4is_f8vws9aeenhp(
'Spiffy Subdomain',
'spiffy_subdomain',
self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['spiffy_subdomain'],

[
'help_id' => 19699,
'pattern' => '[A-Za-z0-9][A-Za-z0-9\-]+',
'style' => 'text-align:left;width:100px;',
'placeholder' => 'Enter your Spiffy Subdomain here',

]
);
m4is_dv250ra9xbtaf::m4is_f8vws9aeenhp(
'Spiffy API Key',
'spiffy_api_key',
self::$m4is_8ew58cpxmftgpw93gdffm4s9bbwy['spiffy_api_key'],

[
'help_id' => 0,
'pattern' => '[A-Za-z0-9][A-Za-z0-9\-]+',
'style' => 'text-align:left;width:100px;',
'placeholder' => 'Enter your Spiffy API Key here',

]
);
if ( ! empty( self::$m4is_jhvqyp7500['spiffy'] ) ) {
}
echo '</ul>';
echo '<p><input type="submit" value="Update" class="button-primary"></p>';

echo '</form>';
}
}