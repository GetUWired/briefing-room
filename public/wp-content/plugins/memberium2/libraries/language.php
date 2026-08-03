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


final class m4is_eknm14gbx0wvrnh6 {
static private $m4is_7yaq0kttm;
static private $m4is_gyph5966twyqf2d00p;
static private $m4is_5gewc3ch8dv0aa14gx1c9spzvnexd;

private const CACHE_TTL = 5 * MINUTE_IN_SECONDS;

static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
global $wpdb;
$_SERVER['HTTP_ACCEPT_LANGUAGE'] = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';

self::$m4is_7yaq0kttm = $wpdb->prefix . 'memberium_lang';
self::$m4is_gyph5966twyqf2d00p = 'memberium';
self::$m4is_5gewc3ch8dv0aa14gx1c9spzvnexd = explode( ',',
 $_SERVER['HTTP_ACCEPT_LANGUAGE'] );
}



public static function m4is_tszcc97d8wxzsgpkyvzhvegpz0() : string {
return self::$m4is_7yaq0kttm;

}
public static function m4is_259fhrvdqr5da8eeyrxc2agz() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::$m4is_7yaq0kttm;

$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(11) NOT NULL AUTO_INCREMENT, \n" .
"language varchar(10) NOT NULL, \n" .
"context varchar(160) NOT NULL, \n" .
"name varchar(40) NOT NULL, \n" .
"origtext text NOT NULL, \n" .
"value text NOT NULL, \n" .
"KEY language (language), \n" .
"KEY context (context), \n" .
"KEY name (name), \n" .
"KEY origtext (origtext(255) ), \n" .
"PRIMARY KEY  (id) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}




public static function m4is_e7wj07b6a5d37rhtwg17795j6d( $m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p,
 $m4is_cwv4aa9zak1r37, $m4is_e8h8dhk83hxkj818w ) {
if ( $m4is_e8h8dhk83hxkj818w <> 'memberium' ) {
return $m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p;

}
global $wpdb;
static $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s = [];
static $m4is_y1qf2vysasyv4bw69ddd0520txb4w;
$m4is_y1qf2vysasyv4bw69ddd0520txb4w ??= self::m4is_vc1e9esznyr9f1dxv7sqz1hq();

$m4is_kgdwxx4f = 'memberium/gettext';
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `value` FROM %i WHERE `language` IN ( {$m4is_y1qf2vysasyv4bw69ddd0520txb4w} ) AND `origtext` = %s ORDER BY id LIMIT 1";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_7yaq0kttm, $m4is_cwv4aa9zak1r37 );
$m4is_gvt2hckttpbz8zr7m1a5abrr = sha1( $m4is_5rbenkpt1v7xby2cknbs7 );

$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
$m4is_rqxytszfq5v6syth1csqqxvy5 = wp_cache_get( $m4is_gvt2hckttpbz8zr7m1a5abrr, $m4is_kgdwxx4f,
 false, $m4is_6p2tyvq6paj43svrn7zqaykxzy );
if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
return $m4is_rqxytszfq5v6syth1csqqxvy5;
}
if ( array_key_exists( $m4is_gvt2hckttpbz8zr7m1a5abrr,
 $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s ) ) {
return $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_gvt2hckttpbz8zr7m1a5abrr];
}
$m4is_rqxytszfq5v6syth1csqqxvy5 = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );

if ( ! empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ) {
$m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p = $m4is_rqxytszfq5v6syth1csqqxvy5;
}
$m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p = empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ? $m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p : $m4is_rqxytszfq5v6syth1csqqxvy5;

$m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_gvt2hckttpbz8zr7m1a5abrr] = $m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p;
wp_cache_set( $m4is_gvt2hckttpbz8zr7m1a5abrr,
 $m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p, $m4is_kgdwxx4f, self::CACHE_TTL );
return $m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p;
}

public static function m4is_ermc1ngf0rwxcv2hwdn19fd2haj( string $m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p,
 $m4is_cwv4aa9zak1r37, $m4is_0k1mrqgxx6bb, $m4is_e8h8dhk83hxkj818w ) : string {
if ( $m4is_e8h8dhk83hxkj818w <> 'memberium' ) {
return $m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p;

}
global $wpdb;
static $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s = [];
static $m4is_y1qf2vysasyv4bw69ddd0520txb4w;
$m4is_kgdwxx4f = 'memberium/gettext/context';

$m4is_y1qf2vysasyv4bw69ddd0520txb4w ??= self::m4is_vc1e9esznyr9f1dxv7sqz1hq();
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `value` FROM %i WHERE `language` IN ( {$m4is_y1qf2vysasyv4bw69ddd0520txb4w} ) AND `context` = %s AND `origtext` = %s ORDER BY `language` DESC, `id` ASC LIMIT 1";

$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( $m4is_5rbenkpt1v7xby2cknbs7, self::$m4is_7yaq0kttm, $m4is_0k1mrqgxx6bb, $m4is_cwv4aa9zak1r37 );

$m4is_gvt2hckttpbz8zr7m1a5abrr = sha1( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_6p2tyvq6paj43svrn7zqaykxzy = false;
$m4is_rqxytszfq5v6syth1csqqxvy5 = wp_cache_get( $m4is_gvt2hckttpbz8zr7m1a5abrr,
 $m4is_kgdwxx4f, false, $m4is_6p2tyvq6paj43svrn7zqaykxzy );
if ( $m4is_6p2tyvq6paj43svrn7zqaykxzy ) {
return $m4is_rqxytszfq5v6syth1csqqxvy5;

}
else {
if ( array_key_exists( $m4is_gvt2hckttpbz8zr7m1a5abrr, $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s ) ) {
return $m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_gvt2hckttpbz8zr7m1a5abrr];

}
}
$m4is_rqxytszfq5v6syth1csqqxvy5 = $wpdb->get_var( $m4is_5rbenkpt1v7xby2cknbs7 );
$m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p = empty( $m4is_rqxytszfq5v6syth1csqqxvy5 ) ? $m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p : $m4is_rqxytszfq5v6syth1csqqxvy5;

wp_cache_set( $m4is_gvt2hckttpbz8zr7m1a5abrr, $m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p, $m4is_kgdwxx4f, self::CACHE_TTL );
$m4is_bgbv0pvy1y0ybpq0ycrs1bx7s[$m4is_gvt2hckttpbz8zr7m1a5abrr] = $m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p;

return $m4is_1kk1mnt71e3cs7nyzjtcfk63rbekm4p;
}

public static function m4is_txw9d3053zt0ybaj1geekj3b122e() : void {
load_plugin_textdomain( 'memberium',
 FALSE, basename( __DIR__ . '/lang/' ) );
}




public static function m4is_jhjmwpc72xsn() : array {
static $m4is_y1qf2vysasyv4bw69ddd0520txb4w = [];

if ( empty( $m4is_y1qf2vysasyv4bw69ddd0520txb4w ) ) {
$m4is_g1pfvjpjwcbctyrdrn9qd2mk3 = self::$m4is_5gewc3ch8dv0aa14gx1c9spzvnexd;

foreach( self::$m4is_5gewc3ch8dv0aa14gx1c9spzvnexd as $m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp) {
$m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp = explode( ';q=',
 $m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp );
$m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp[0] = strtolower( $m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp[0] );

$m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp[1] = isset( $m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp[1]) ? $m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp[1] : 1;

$m4is_y1qf2vysasyv4bw69ddd0520txb4w[$m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp[0]] = $m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp[1];
}
foreach( $m4is_y1qf2vysasyv4bw69ddd0520txb4w as $m4is_rckjt7j1pfr4x77x =>
 $m4is_kaa5pga5jjz8asejzk ) {
$m4is_a2bp9z499g2xbyca5z = substr( $m4is_rckjt7j1pfr4x77x, 0, strpos( $m4is_rckjt7j1pfr4x77x, '-' ) );

if ( ! empty( $m4is_a2bp9z499g2xbyca5z ) ) {
if (! isset( $m4is_y1qf2vysasyv4bw69ddd0520txb4w[$m4is_a2bp9z499g2xbyca5z] ) ) {
$m4is_y1qf2vysasyv4bw69ddd0520txb4w[$m4is_a2bp9z499g2xbyca5z] = $m4is_kaa5pga5jjz8asejzk - .01;

}
}
}
arsort( $m4is_y1qf2vysasyv4bw69ddd0520txb4w, SORT_NUMERIC );
}
return $m4is_y1qf2vysasyv4bw69ddd0520txb4w;
}



private static function m4is_vc1e9esznyr9f1dxv7sqz1hq() : string {
static $m4is_b4tj8bz7gag2n7w4a3ych8s4hw86;

if ( $m4is_b4tj8bz7gag2n7w4a3ych8s4hw86 ) {
return $m4is_b4tj8bz7gag2n7w4a3ych8s4hw86;
}
$m4is_y1qf2vysasyv4bw69ddd0520txb4w = [];

$m4is_y1qf2vysasyv4bw69ddd0520txb4w[] = '';
$m4is_y1qf2vysasyv4bw69ddd0520txb4w[] = trim( get_option( 'WPLANG', 'en_us' ) );
$m4is_19x1c17et728k945 = self::$m4is_5gewc3ch8dv0aa14gx1c9spzvnexd;

$m4is_19x1c17et728k945 = explode( ',', strtr( $m4is_19x1c17et728k945[0], '-', '_' ) );
if ( ! empty( $m4is_19x1c17et728k945 ) ) {
foreach( $m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7 ) {
$m4is_y1qf2vysasyv4bw69ddd0520txb4w[] = $m4is_j8j55t8dz79m7;

if ( strlen( $m4is_j8j55t8dz79m7 ) > 2) {
$m4is_y1qf2vysasyv4bw69ddd0520txb4w[] = substr( $m4is_j8j55t8dz79m7, 0, 2 );
}
}
}
$m4is_y1qf2vysasyv4bw69ddd0520txb4w = array_unique( $m4is_y1qf2vysasyv4bw69ddd0520txb4w );

$m4is_b4tj8bz7gag2n7w4a3ych8s4hw86 = "'" . implode( "','", $m4is_y1qf2vysasyv4bw69ddd0520txb4w ) . "'";
return $m4is_b4tj8bz7gag2n7w4a3ych8s4hw86;

}




static function m4is_4jyf8beswt97b8ggy1zpa() : array {
return [
'ar' => 'Arabic',
'ar-AE' => 'Arabic (United Arab Emirates)',

'ar-BH' => 'Arabic (Bahrain)',
'ar-DZ' => 'Arabic (Algeria)',
'ar-EG' => 'Arabic (Egypt)',
'ar-IQ' => 'Arabic (Iraq)',
'ar-JO' => 'Arabic (Jordan)',

'ar-KW' => 'Arabic (Kuwait)',
'ar-LB' => 'Arabic (Lebanon)',
'ar-LY' => 'Arabic (Libya)',
'ar-MA' => 'Arabic (Morocco)',
'ar-OM' =>
 'Arabic (Oman)',
'ar-QA' => 'Arabic (Qatar)',
'ar-SA' => 'Arabic (Saudi Arabia)',
'ar-SD' => 'Arabic (Sudan)',
'ar-SY' => 'Arabic (Syria)',

'ar-TN' => 'Arabic (Tunisia)',
'ar-YE' => 'Arabic (Yemen)',
'be' => 'Belarusian',
'be-BY' => 'Belarusian (Belarus)',
'bg' => 'Bulgarian',

'bg-BG' => 'Bulgarian (Bulgaria)',
'ca' => 'Catalan',
'ca-ES' => 'Catalan (Spain)',
'cs' => 'Czech',
'cs-CZ' => 'Czech (Czech Republic)',

'da' => 'Danish',
'da-DK' => 'Danish (Denmark)',
'de' => 'German',
'de-AT' => 'German (Austria)',
'de-CH' => 'German (Switzerland)',

'de-DE' => 'German (Germany)',
'de-GR' => 'German (Greece)',
'de-LU' => 'German (Luxembourg)',
'el' => 'Greek',
'el-CY' => 'Greek (Cyprus)',

'el-GR' => 'Greek (Greece)',
'en' => 'English',
'en-AU' => 'English (Australia)',
'en-CA' => 'English (Canada)',
'en-GB' => 'English (United Kingdom)',

'en-IE' => 'English (Ireland)',
'en-IN' => 'English (India)',
'en-MT' => 'English (Malta)',
'en-NZ' => 'English (New Zealand)',
'en-PH' =>
 'English (Philippines)',
'en-SG' => 'English (Singapore)',
'en-US' => 'English (United States)',
'en-ZA' => 'English (South Africa)',

'es' => 'Spanish',
'es-AR' => 'Spanish (Argentina)',
'es-BO' => 'Spanish (Bolivia)',
'es-CL' => 'Spanish (Chile)',
'es-CO' => 'Spanish (Colombia)',

'es-CR' => 'Spanish (Costa Rica)',
'es-CU' => 'Spanish (Cuba)',
'es-DO' => 'Spanish (Dominican Republic)',
'es-EC' => 'Spanish (Ecuador)',

'es-ES' => 'Spanish (Spain)',
'es-GT' => 'Spanish (Guatemala)',
'es-HN' => 'Spanish (Honduras)',
'es-MX' => 'Spanish (Mexico)',
'es-NI' =>
 'Spanish (Nicaragua)',
'es-PA' => 'Spanish (Panama)',
'es-PE' => 'Spanish (Peru)',
'es-PR' => 'Spanish (Puerto Rico)',
'es-PY' => 'Spanish (Paraguay)',

'es-SV' => 'Spanish (El Salvador)',
'es-US' => 'Spanish (United States)',
'es-UY' => 'Spanish (Uruguay)',
'es-VE' => 'Spanish (Venezuela)',

'et' => 'Estonian',
'et-EE' => 'Estonian (Estonia)',
'fi' => 'Finnish',
'fi-FI' => 'Finnish (Finland)',
'fr' => 'French',
'fr-BE' =>
 'French (Belgium)',
'fr-CA' => 'French (Canada)',
'fr-CH' => 'French (Switzerland)',
'fr-FR' => 'French (France)',
'fr-LU' => 'French (Luxembourg)',

'ga' => 'Irish',
'ga-IE' => 'Irish (Ireland)',
'he' => 'Hebrew',
'he-IL' => 'Hebrew (Israel)',
'hi' => 'Hindi',
'hi-IN' => 'Hindi (India)',

'hr' => 'Croatian',
'hr-HR' => 'Croatian (Croatia)',
'hu' => 'Hungarian',
'hu-HU' => 'Hungarian (Hungary)',
'id' => 'Indonesian',
'id-ID' =>
 'Indonesian (Indonesia)',
'is' => 'Icelandic',
'is-IS' => 'Icelandic (Iceland)',
'it' => 'Italian',
'it-CH' => 'Italian (Switzerland)',

'it-IT' => 'Italian (Italy)',
'ja' => 'Japanese',
'ja-JP' => 'Japanese (Japan)',
'ko' => 'Korean',
'ko-KR' => 'Korean (South Korea)',

'lt' => 'Lithuanian',
'lt-LT' => 'Lithuanian (Lithuania)',
'lv' => 'Latvian',
'lv-LV' => 'Latvian (Latvia)',
'mk' => 'Macedonian',

'mk-MK' => 'Macedonian (Macedonia)',
'ms' => 'Malay',
'ms-MY' => 'Malay (Malaysia)',
'mt' => 'Maltese',
'mt-MT' => 'Maltese (Malta)',

'nl' => 'Dutch',
'nl-BE' => 'Dutch (Belgium)',
'nl-NL' => 'Dutch (Netherlands)',
'nn-NO' => 'Norwegian (Norway, Nynorsk)',
'no' =>
 'Norwegian',
'no-NO' => 'Norwegian (Norway)',
'pl' => 'Polish',
'pl-PL' => 'Polish (Poland)',
'pt' => 'Portuguese',
'pt-BR' => 'Portuguese (Brazil)',

'pt-PT' => 'Portuguese (Portugal)',
'ro' => 'Romanian',
'ro-RO' => 'Romanian (Romania)',
'ru' => 'Russian',
'ru-RU' => 'Russian (Russia)',

'sk' => 'Slovak',
'sk-SK' => 'Slovak (Slovakia)',
'sl' => 'Slovenian',
'sl-SI' => 'Slovenian (Slovenia)',
'sq' => 'Albanian',
'sq-AL' =>
 'Albanian (Albania)',
'sr' => 'Serbian',
'sr-BA' => 'Serbian (Bosnia and Herzegovina)',
'sr-CS' => 'Serbian (Serbia and Montenegro)',

'sr-Latn' => 'Serbian (Latin)',
'sr-Latn-BA' => 'Serbian (Latin, Bosnia and Herzegovina)',
'sr-Latn-ME' => 'Serbian (Latin, Montenegro)',

'sr-Latn-RS' => 'Serbian (Latin, Serbia)',
'sr-ME' => 'Serbian (Montenegro)',
'sr-RS' => 'Serbian (Serbia)',
'sv' => 'Swedish',
'sv-SE' =>
 'Swedish (Sweden)',
'th' => 'Thai',
'th-TH' => 'Thai (Thailand)',
'tr' => 'Turkish',
'tr-TR' => 'Turkish (Turkey)',
'uk' => 'Ukrainian',

'uk-UA' => 'Ukrainian (Ukraine)',
'vi' => 'Vietnamese',
'vi-VN' => 'Vietnamese (Vietnam)',
'zh' => 'Chinese',
'zh-CN' => 'Chinese (China)',

'zh-HK' => 'Chinese (Hong Kong)',
'zh-SG' => 'Chinese (Singapore)',
'zh-TW' => 'Chinese (Taiwan)',
];
}

}
