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

final class m4is_cyt7qan1n {
private const DEFAULT_PROVIDER = 'ipwhois';
private const PROVIDERS = [
'extreme' => [],
'geoip' => ['function' =>
 'geoip_detect2_get_info_from_ip'],
'ipapi' => ['api_key' => 'IPAPI_API_KEY'],
'ipinfodb' => ['api_key' => 'IPINFODB_API_KEY'],
'ipstack' =>
 ['api_key' => 'IPSTACK_API_KEY'],
'ipwhois' => [],
];
private function __construct() {}
public static function m4is_2d2z2mc8jft2hg5scp0( string $m4is_sq8wkcxv7czejqkkzzn6zspry2 = '',
 string $m4is_rv7grrr6m2qrz = '' ) : array {
$m4is_sq8wkcxv7czejqkkzzn6zspry2 = empty( $m4is_sq8wkcxv7czejqkkzzn6zspry2 ) ? m4is_0gqs7crsrzdbgfzptjws94s::m4is_996gr4907jjg639ag4b7v0z() : $m4is_sq8wkcxv7czejqkkzzn6zspry2;

if ( ! filter_var( $m4is_sq8wkcxv7czejqkkzzn6zspry2, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE ) ) {
return [];

}
$m4is_rv7grrr6m2qrz = empty( $m4is_rv7grrr6m2qrz ) ? self::DEFAULT_PROVIDER : $m4is_rv7grrr6m2qrz;
if ( ! self::m4is_rgvbbex9ynjgxc4mazhd42s6hm5qtrd( $m4is_rv7grrr6m2qrz ) ) {
$m4is_rv7grrr6m2qrz = self::DEFAULT_PROVIDER;

}
$m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z = self::m4is_c5pt9ndaq6p( $m4is_sq8wkcxv7czejqkkzzn6zspry2, $m4is_rv7grrr6m2qrz );
$m4is_e94ggrj3af6x87w956sf3gdd581ey = get_transient( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z );

if ( $m4is_e94ggrj3af6x87w956sf3gdd581ey ) {
return $m4is_e94ggrj3af6x87w956sf3gdd581ey;
}
$m4is_e94ggrj3af6x87w956sf3gdd581ey = match( $m4is_rv7grrr6m2qrz ) {
'extreme' =>
 self::m4is_qzcgaw2f6dk( $m4is_sq8wkcxv7czejqkkzzn6zspry2 ),
'geoip' => self::m4is_6sxnwafdsb1dryh6320jmyq9cxph5( $m4is_sq8wkcxv7czejqkkzzn6zspry2 ),

'ipapi' => self::m4is_srbpgg53tm5zs796v( $m4is_sq8wkcxv7czejqkkzzn6zspry2 ),
'ipinfodb' => self::m4is_n9hf5tm59( $m4is_sq8wkcxv7czejqkkzzn6zspry2 ),

'ipstack' => self::m4is_maazqhgs48fd13d3n23pvpzp6ha( $m4is_sq8wkcxv7czejqkkzzn6zspry2 ),
'ipwhois' => self::m4is_336cnjn0ka09tgywtby6wr5txp8( $m4is_sq8wkcxv7czejqkkzzn6zspry2 ),

default => [],
};
if ( ! empty( $m4is_e94ggrj3af6x87w956sf3gdd581ey ) ) {
set_transient( $m4is_ez15s06mgm4g1y42x3tw90c4mxmbj20z, $m4is_e94ggrj3af6x87w956sf3gdd581ey,
 MONTH_IN_SECONDS );
}
return $m4is_e94ggrj3af6x87w956sf3gdd581ey;
}
private static function m4is_rgvbbex9ynjgxc4mazhd42s6hm5qtrd( string $m4is_rv7grrr6m2qrz ) : bool {
if ( ! isset( self::PROVIDERS[ $m4is_rv7grrr6m2qrz ] ) ) {
return false;

}
$m4is_kyrqdd9qn08s3tbxx9ahv = self::PROVIDERS[ $m4is_rv7grrr6m2qrz ];
if ( isset( $m4is_kyrqdd9qn08s3tbxx9ahv['function'] ) && ! function_exists( $m4is_kyrqdd9qn08s3tbxx9ahv['function'] ) ) {
return false;

}
if ( isset( $m4is_kyrqdd9qn08s3tbxx9ahv['api_key'] ) && ( ! defined( $m4is_kyrqdd9qn08s3tbxx9ahv['api_key'] ) || ! constant( $m4is_kyrqdd9qn08s3tbxx9ahv['api_key'] ) ) ) {
return false;

}
return true;
}
private static function m4is_c5pt9ndaq6p( string $m4is_sq8wkcxv7czejqkkzzn6zspry2, string $m4is_rv7grrr6m2qrz ) : string {
return "memberium/geolocation/{$m4is_rv7grrr6m2qrz}/{$m4is_sq8wkcxv7czejqkkzzn6zspry2}";

}
private static function m4is_h9jg2qmesjc870t5c0ha1b34( string $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) : ?object {
$m4is_d60kn1d3yvprp62rs332 = json_decode( m4is_0gqs7crsrzdbgfzptjws94s::m4is_5qammca8yf8pswy3( $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq ) );

return is_object( $m4is_d60kn1d3yvprp62rs332 ) ? $m4is_d60kn1d3yvprp62rs332 : null;
}
private static function m4is_qzcgaw2f6dk( string $m4is_sq8wkcxv7czejqkkzzn6zspry2 = '' ) : array {
$m4is_e94ggrj3af6x87w956sf3gdd581ey = [];

$m4is_d60kn1d3yvprp62rs332 = self::m4is_h9jg2qmesjc870t5c0ha1b34( "https://extreme-ip-lookup.com/json/{$m4is_sq8wkcxv7czejqkkzzn6zspry2}" );

if ( $m4is_d60kn1d3yvprp62rs332 && isset( $m4is_d60kn1d3yvprp62rs332->status ) && $m4is_d60kn1d3yvprp62rs332->status == 'success' ) {
$m4is_e94ggrj3af6x87w956sf3gdd581ey['city'] = $m4is_d60kn1d3yvprp62rs332->city;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['continent'] = $m4is_d60kn1d3yvprp62rs332->continent;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['country_name'] = $m4is_d60kn1d3yvprp62rs332->country;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['countrycode'] = $m4is_d60kn1d3yvprp62rs332->countryCode;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['isp'] = $m4is_d60kn1d3yvprp62rs332->isp;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['latitude'] = $m4is_d60kn1d3yvprp62rs332->lat;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['longitude'] = $m4is_d60kn1d3yvprp62rs332->lon;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['region_name'] = $m4is_d60kn1d3yvprp62rs332->region;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['timezone'] = '';

$m4is_e94ggrj3af6x87w956sf3gdd581ey['postalcode'] = '';
}
return $m4is_e94ggrj3af6x87w956sf3gdd581ey;
}
private static function m4is_6sxnwafdsb1dryh6320jmyq9cxph5( string $m4is_sq8wkcxv7czejqkkzzn6zspry2 = '' ) : array {
$m4is_e94ggrj3af6x87w956sf3gdd581ey = [
'city' =>
 '',
'country_name' => '',
'countrycode' => '',
'isp' => '',
'latitude' => '',
'longitude' => '',
'postalcode' => '',
'region' => '',

'region_name' => '',
'timezone' => '',
];
$m4is_d60kn1d3yvprp62rs332 = geoip_detect2_get_info_from_ip( $m4is_sq8wkcxv7czejqkkzzn6zspry2 );

if ( is_object( $m4is_d60kn1d3yvprp62rs332 ) ) {
$m4is_e94ggrj3af6x87w956sf3gdd581ey['city'] = $m4is_d60kn1d3yvprp62rs332->city ?? '';

$m4is_e94ggrj3af6x87w956sf3gdd581ey['country_name'] = $m4is_d60kn1d3yvprp62rs332->country_name ?? '';
$m4is_e94ggrj3af6x87w956sf3gdd581ey['countrycode'] = $m4is_d60kn1d3yvprp62rs332->countryCode ?? '';

$m4is_e94ggrj3af6x87w956sf3gdd581ey['latitude'] = $m4is_d60kn1d3yvprp62rs332->latitude ?? '';
$m4is_e94ggrj3af6x87w956sf3gdd581ey['longitude'] = $m4is_d60kn1d3yvprp62rs332->longitude ?? '';

$m4is_e94ggrj3af6x87w956sf3gdd581ey['postalcode'] = $m4is_d60kn1d3yvprp62rs332->postal_code ?? '';
$m4is_e94ggrj3af6x87w956sf3gdd581ey['region'] = $m4is_d60kn1d3yvprp62rs332->region ?? '';

$m4is_e94ggrj3af6x87w956sf3gdd581ey['region_name'] = $m4is_d60kn1d3yvprp62rs332->region_name ?? '';
$m4is_e94ggrj3af6x87w956sf3gdd581ey['timezone'] = $m4is_d60kn1d3yvprp62rs332->timezone ?? '';

}
return $m4is_e94ggrj3af6x87w956sf3gdd581ey;
}
private static function m4is_srbpgg53tm5zs796v( string $m4is_sq8wkcxv7czejqkkzzn6zspry2 = '' ) : array {
$m4is_e94ggrj3af6x87w956sf3gdd581ey = [];

$m4is_k0ammcn9avnfhfsfp6 = "https://api.ipapi.com/{$m4is_sq8wkcxv7czejqkkzzn6zspry2}?access_key=" . constant( 'IPAPI_API_KEY' ) . "&format=1";

$m4is_d60kn1d3yvprp62rs332 = self::m4is_h9jg2qmesjc870t5c0ha1b34( $m4is_k0ammcn9avnfhfsfp6 );
if ( $m4is_d60kn1d3yvprp62rs332 && ! isset( $m4is_d60kn1d3yvprp62rs332->error ) ) {
$m4is_e94ggrj3af6x87w956sf3gdd581ey['city'] = $m4is_d60kn1d3yvprp62rs332->city;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['country_name'] = $m4is_d60kn1d3yvprp62rs332->country_name;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['countrycode'] = $m4is_d60kn1d3yvprp62rs332->country_code;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['isp'] = '';
$m4is_e94ggrj3af6x87w956sf3gdd581ey['latitude'] = $m4is_d60kn1d3yvprp62rs332->latitude;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['longitude'] = $m4is_d60kn1d3yvprp62rs332->longitude;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['postalcode'] = $m4is_d60kn1d3yvprp62rs332->zip;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['region'] = $m4is_d60kn1d3yvprp62rs332->region_code;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['region_name'] = $m4is_d60kn1d3yvprp62rs332->region_name;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['timezone'] = '';
}
return $m4is_e94ggrj3af6x87w956sf3gdd581ey;
}
private static function m4is_n9hf5tm59( string $m4is_sq8wkcxv7czejqkkzzn6zspry2 = '' ) : array {
$m4is_e94ggrj3af6x87w956sf3gdd581ey = [];

$m4is_k0ammcn9avnfhfsfp6 = "https://api.ipinfodb.com/v3/ip-city/?key=" . constant( 'IPINFODB_API_KEY' ) . "&ip={$m4is_sq8wkcxv7czejqkkzzn6zspry2}&format=json";

$m4is_d60kn1d3yvprp62rs332 = self::m4is_h9jg2qmesjc870t5c0ha1b34( $m4is_k0ammcn9avnfhfsfp6 );
if ( $m4is_d60kn1d3yvprp62rs332 && isset( $m4is_d60kn1d3yvprp62rs332->countryName ) ) {
$m4is_e94ggrj3af6x87w956sf3gdd581ey['city'] = $m4is_d60kn1d3yvprp62rs332->cityName;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['country_name'] = $m4is_d60kn1d3yvprp62rs332->countryName;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['countrycode'] = $m4is_d60kn1d3yvprp62rs332->countryCode;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['isp'] = '';
$m4is_e94ggrj3af6x87w956sf3gdd581ey['postalcode'] = $m4is_d60kn1d3yvprp62rs332->zipCode;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['region_name'] = $m4is_d60kn1d3yvprp62rs332->regionName;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['timezone'] = $m4is_d60kn1d3yvprp62rs332->timeZone;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['latitude'] = $m4is_d60kn1d3yvprp62rs332->latitude;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['longitude'] = $m4is_d60kn1d3yvprp62rs332->longitude;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['region'] = '';
}
return $m4is_e94ggrj3af6x87w956sf3gdd581ey;
}
private static function m4is_maazqhgs48fd13d3n23pvpzp6ha( string $m4is_sq8wkcxv7czejqkkzzn6zspry2 = '' ) : array {
$m4is_e94ggrj3af6x87w956sf3gdd581ey = [];

$m4is_k0ammcn9avnfhfsfp6 = "https://api.ipstack.com/{$m4is_sq8wkcxv7czejqkkzzn6zspry2}?access_key=" . constant( 'IPSTACK_API_KEY' ) . "&output=json";

$m4is_d60kn1d3yvprp62rs332 = self::m4is_h9jg2qmesjc870t5c0ha1b34( $m4is_k0ammcn9avnfhfsfp6 );
if ( $m4is_d60kn1d3yvprp62rs332 && ! isset( $m4is_d60kn1d3yvprp62rs332->error ) ) {
$m4is_e94ggrj3af6x87w956sf3gdd581ey['city'] = $m4is_d60kn1d3yvprp62rs332->city;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['country_name'] = $m4is_d60kn1d3yvprp62rs332->country_name;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['countrycode'] = $m4is_d60kn1d3yvprp62rs332->country_code;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['isp'] = '';
$m4is_e94ggrj3af6x87w956sf3gdd581ey['latitude'] = $m4is_d60kn1d3yvprp62rs332->latitude;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['longitude'] = $m4is_d60kn1d3yvprp62rs332->longitude;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['postalcode'] = $m4is_d60kn1d3yvprp62rs332->zip;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['region'] = $m4is_d60kn1d3yvprp62rs332->region_code;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['region_name'] = $m4is_d60kn1d3yvprp62rs332->region_name;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['timezone'] = '';
}
return $m4is_e94ggrj3af6x87w956sf3gdd581ey;
}
private static function m4is_336cnjn0ka09tgywtby6wr5txp8( string $m4is_sq8wkcxv7czejqkkzzn6zspry2 = '' ) : array {
$m4is_e94ggrj3af6x87w956sf3gdd581ey = [];

$m4is_d60kn1d3yvprp62rs332 = self::m4is_h9jg2qmesjc870t5c0ha1b34( "https://ipwho.is/{$m4is_sq8wkcxv7czejqkkzzn6zspry2}" );
if ( $m4is_d60kn1d3yvprp62rs332 && ! empty( $m4is_d60kn1d3yvprp62rs332->success ) ) {
$m4is_e94ggrj3af6x87w956sf3gdd581ey['city'] = $m4is_d60kn1d3yvprp62rs332->city;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['continent'] = $m4is_d60kn1d3yvprp62rs332->continent;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['country_name'] = $m4is_d60kn1d3yvprp62rs332->country;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['countrycode'] = $m4is_d60kn1d3yvprp62rs332->country_code;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['isp'] = isset( $m4is_d60kn1d3yvprp62rs332->connection->isp ) ? $m4is_d60kn1d3yvprp62rs332->connection->isp : '';

$m4is_e94ggrj3af6x87w956sf3gdd581ey['latitude'] = $m4is_d60kn1d3yvprp62rs332->latitude;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['longitude'] = $m4is_d60kn1d3yvprp62rs332->longitude;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['postalcode'] = $m4is_d60kn1d3yvprp62rs332->postal;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['region'] = $m4is_d60kn1d3yvprp62rs332->region_code;

$m4is_e94ggrj3af6x87w956sf3gdd581ey['region_name'] = $m4is_d60kn1d3yvprp62rs332->region;
$m4is_e94ggrj3af6x87w956sf3gdd581ey['timezone'] = isset( $m4is_d60kn1d3yvprp62rs332->timezone->id ) ? $m4is_d60kn1d3yvprp62rs332->timezone->id : '';

}
return $m4is_e94ggrj3af6x87w956sf3gdd581ey;
}

public static function m4is_jbj7g2twv8qztzkqxhhd3e399r() : array {
return [
'&Aring;land Islands' =>
 'AX',
'Afghanistan' => 'AF',
'Aland Islands' => 'AX',
'Albania' => 'AL',
'Algeria' => 'DZ',
'American Samoa' => 'AS',
'Andorra' =>
 'AD',
'Angola' => 'AO',
'Anguilla' => 'AI',
'Antarctica' => 'AQ',
'Antigua and Barbuda' => 'AG',
'Argentina' => 'AR',
'Armenia' =>
 'AM',
'Aruba' => 'AW',
'Australia' => 'AU',
'Austria' => 'AT',
'Azerbaijan' => 'AZ',
'Bahamas (the)' => 'BS',
'Bahrain' => 'BH',
'Bangladesh' =>
 'BD',
'Barbados' => 'BB',
'Belarus' => 'BY',
'Belgium' => 'BE',
'Belize' => 'BZ',
'Benin' => 'BJ',
'Bermuda' => 'BM',
'Bhutan' => 'BT',

'Bolivia (Plurinational State of)' => 'BO',
'Bonaire, Sint Eustatius and Saba' => 'BQ',
'Bosnia and Herzegovina' => 'BA',
'Botswana' =>
 'BW',
'Bouvet Island' => 'BV',
'Brazil' => 'BR',
'British Indian Ocean Territory (the)' => 'IO',
'Brunei Darussalam' => 'BN',
'Bulgaria' =>
 'BG',
'Burkina Faso' => 'BF',
'Burundi' => 'BI',
'Cabo Verde' => 'CV',
'Cambodia' => 'KH',
'Cameroon' => 'CM',
'Canada' => 'CA',
'Cayman Islands (the)' =>
 'KY',
'Central African Republic (the)' => 'CF',
'Chad' => 'TD',
'Chile' => 'CL',
'China' => 'CN',
'Christmas Island' => 'CX',
'Cocos (Keeling) Islands (the)' =>
 'CC',
'Colombia' => 'CO',
'Comoros (the)' => 'KM',
'Congo (the Democratic Republic of the)' => 'CD',
'Congo (the)' => 'CG',
'Cook Islands (the)' =>
 'CK',
'Costa Rica' => 'CR',
'Croatia' => 'HR',
'Cuba' => 'CU',
'Cura&ccedil;ao' => 'CW',
'Cyprus' => 'CY',
'Czech Republic (the)' =>
 'CZ',
'Denmark' => 'DK',
'Djibouti' => 'DJ',
'Dominica' => 'DM',
'Dominican Republic (the)' => 'DO',
'Ecuador' => 'EC',
'Egypt' =>
 'EG',
'El Salvador' => 'SV',
'Equatorial Guinea' => 'GQ',
'Eritrea' => 'ER',
'Estonia' => 'EE',
'Ethiopia' => 'ET',
'Falkland Islands (the) [Malvinas]' =>
 'FK',
'Faroe Islands (the)' => 'FO',
'Fiji' => 'FJ',
'Finland' => 'FI',
'France' => 'FR',
'French Guiana' => 'GF',
'French Polynesia' =>
 'PF',
'French Southern Territories (the)' => 'TF',
'Gabon' => 'GA',
'Gambia (the)' => 'GM',
'Georgia' => 'GE',
'Germany' => 'DE',
'Ghana' =>
 'GH',
'Gibraltar' => 'GI',
'Greece' => 'GR',
'Greenland' => 'GL',
'Grenada' => 'GD',
'Guadeloupe' => 'GP',
'Guam' => 'GU',
'Guatemala' =>
 'GT',
'Guernsey' => 'GG',
'Guinea-Bissau' => 'GW',
'Guinea' => 'GN',
'Guyana' => 'GY',
'Haiti' => 'HT',
'Heard Island and McDonald Islands' =>
 'HM',
'Holy See (the)' => 'VA',
'Honduras' => 'HN',
'Hong Kong' => 'HK',
'Hungary' => 'HU',
'Iceland' => 'IS',
'India' => 'IN',
'Indonesia' =>
 'ID',
'Iran (Islamic Republic of)' => 'IR',
'Iraq' => 'IQ',
'Ireland' => 'IE',
'Isle of Man' => 'IM',
'Israel' => 'IL',
'Italy' =>
 'IT',
'Jamaica' => 'JM',
'Japan' => 'JP',
'Jersey' => 'JE',
'Johnston Island' => 'JT',
'Jordan' => 'JO',
'Kazakhstan' => 'KZ',
'Kenya' =>
 'KE',
'Kiribati' => 'KI',
'Korea (the Republic of)' => 'KR',
'Kuwait' => 'KW',
'Kyrgyzstan' => 'KG',
'Laos' => 'LA',
'Latvia' => 'LV',

'Lebanon' => 'LB',
'Lesotho' => 'LS',
'Liberia' => 'LR',
'Libya' => 'LY',
'Liechtenstein' => 'LI',
'Lithuania' => 'LT',
'Luxembourg' =>
 'LU',
'Macao' => 'MO',
'Macedonia (the former Yugoslav Republic of)' => 'MK',
'Madagascar' => 'MG',
'Malawi' => 'MW',
'Malaysia' =>
 'MY',
'Maldives' => 'MV',
'Mali' => 'ML',
'Malta' => 'MT',
'Marshall Islands (the)' => 'MH',
'Martinique' => 'MQ',
'Mauritania' =>
 'MR',
'Mauritius' => 'MU',
'Mayotte' => 'YT',
'Mexico' => 'MX',
'Micronesia (Federated States of)' => 'FM',
'Midway Islands' => 'MI',

'Moldova (the Republic of)' => 'MD',
'Monaco' => 'MC',
'Mongolia' => 'MN',
'Montenegro' => 'ME',
'Montserrat' => 'MS',
'Morocco' =>
 'MA',
'Mozambique' => 'MZ',
'Myanmar' => 'MM',
'Namibia' => 'NA',
'Nauru' => 'NR',
'Nepal' => 'NP',
'Netherlands (the)' => 'NL',
'Netherlands Antilles' =>
 'AN',
'New Caledonia' => 'NC',
'New Zealand' => 'NZ',
'Nicaragua' => 'NI',
'Niger (the)' => 'NE',
'Nigeria' => 'NG',
'Niue' => 'NU',

'Norfolk Island' => 'NF',
'Northern Mariana Islands (the)' => 'MP',
'Norway' => 'NO',
'Oman' => 'OM',
'Pakistan' => 'PK',
'Palau' =>
 'PW',
'Palestine, State of' => 'PS',
'Panama' => 'PA',
'Papua New Guinea' => 'PG',
'Paraguay' => 'PY',
'Peru' => 'PE',
'Philippines (the)' =>
 'PH',
'Pitcairn' => 'PN',
'Poland' => 'PL',
'Portugal' => 'PT',
'Puerto Rico' => 'PR',
'Qatar' => 'QA',
'R&eacute;union' => 'RE',
'Romania' =>
 'RO',
'Russian Federation (the)' => 'RU',
'Rwanda' => 'RW',
'Saint Barth&eacute;lemy' => 'BL',
'Saint Helena, Ascension and Tristan da Cunha' =>
 'SH',
'Saint Kitts and Nevis' => 'KN',
'Saint Lucia' => 'LC',
'Saint Martin (French part)' => 'MF',
'Saint Pierre and Miquelon' =>
 'PM',
'Saint Vincent and the Grenadines' => 'VC',
'Samoa' => 'WS',
'San Marino' => 'SM',
'Sao Tome and Principe' => 'ST',
'Saudi Arabia' =>
 'SA',
'Senegal' => 'SN',
'Serbia' => 'RS',
'Seychelles' => 'SC',
'Sierra Leone' => 'SL',
'Singapore' => 'SG',
'Sint Maarten (Dutch part)' =>
 'SX',
'Slovakia' => 'SK',
'Slovenia' => 'SI',
'Solomon Islands' => 'SB',
'Somalia' => 'SO',
'South Africa' => 'ZA',
'South Georgia and the South Sandwich Islands' =>
 'GS',
'South Sudan' => 'SS',
'Southern Rhodesia' => 'RH',
'Spain' => 'ES',
'Sri Lanka' => 'LK',
'St. Barthelemy' => 'BL',
'Sudan (the)' =>
 'SD',
'Suriname' => 'SR',
'Svalbard and Jan Mayen' => 'SJ',
'Swaziland' => 'SZ',
'Sweden' => 'SE',
'Switzerland' => 'CH',
'Syrian Arab Republic' =>
 'SY',
'Taiwan (Province of China)' => 'TW',
'Tajikistan' => 'TJ',
'Tanzania, United Republic of' => 'TZ',
'Thailand' => 'TH',
'Timor-Leste' =>
 'TL',
'Togo' => 'TG',
'Tokelau' => 'TK',
'Tonga' => 'TO',
'Trinidad and Tobago' => 'TT',
'Tunisia' => 'TN',
'Turkey' => 'TR',
'Turkmenistan' =>
 'TM',
'Turks and Caicos Islands (the)' => 'TC',
'Tuvalu' => 'TV',
'Uganda' => 'UG',
'Ukraine' => 'UA',
'United Arab Emirates (the)' =>
 'AE',
'United Kingdom' => 'UK',
'United States Minor Outlying Islands (the)' => 'UM',
'United States' => 'US',
'Upper Volta' => 'HV',

'Uruguay' => 'UY',
'Uzbekistan' => 'UZ',
'Vanuatu' => 'VU',
'Venezuela (Bolivarian Republic of)' => 'VE',
'Viet Nam' => 'VN',
'Virgin Islands (British)' =>
 'VG',
'Virgin Islands (U.S.)' => 'VI',
'Wallis and Futuna' => 'WF',
'Western Sahara' => 'EH',
'Yemen' => 'YE',
'Zambia' => 'ZM',
'Zimbabwe' =>
 'ZW',
"C&ocirc;te d'Ivoire" => 'CI',
"Korea (the Democratic People's Republic of)" => 'KP',
"Lao People's Democratic Republic (the)" =>
 'LA',
];
}
public static function m4is_hy42y43b8kr2vk06af2h3hy5e( string $m4is_r8pkh6ej4q = '' ) : string {
if ( strlen( $m4is_r8pkh6ej4q ) == 2 ) {
return $m4is_r8pkh6ej4q;

}
$m4is_qsg7sa03mr474qkfw9mfcn029dqxy = strtolower( $m4is_r8pkh6ej4q );
$m4is_p1pcgyd796vjew6789m7c703d = self::m4is_jbj7g2twv8qztzkqxhhd3e399r();

foreach( $m4is_p1pcgyd796vjew6789m7c703d as $m4is_hce1y1a4qd65zhnwsj => $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 ) {
if ( $m4is_qsg7sa03mr474qkfw9mfcn029dqxy == $m4is_hce1y1a4qd65zhnwsj ) {
return $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4;

}
}
return $m4is_r8pkh6ej4q;
}
public static function m4is_b149z081( string $m4is_x174rqwvqkj4jztqtddcdbma73q9b = '' ) : string {
if ( strlen( $m4is_x174rqwvqkj4jztqtddcdbma73q9b ) > 2 ) {
return $m4is_x174rqwvqkj4jztqtddcdbma73q9b;

}
$m4is_p1pcgyd796vjew6789m7c703d = self::m4is_jbj7g2twv8qztzkqxhhd3e399r();
$m4is_x174rqwvqkj4jztqtddcdbma73q9b = strtoupper( $m4is_x174rqwvqkj4jztqtddcdbma73q9b );

foreach( $m4is_p1pcgyd796vjew6789m7c703d as $m4is_hce1y1a4qd65zhnwsj => $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 ) {
if ( $m4is_x174rqwvqkj4jztqtddcdbma73q9b == $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 ) {
return $m4is_hce1y1a4qd65zhnwsj;

}
}
return $m4is_x174rqwvqkj4jztqtddcdbma73q9b;
}
public static function m4is_jfdttzves4ph8dp27y0z5nsfp0vf( string $m4is_r8pkh6ej4q = '' ) : string {
if ( empty( $m4is_r8pkh6ej4q ) ) {
return '';

}
$m4is_p1pcgyd796vjew6789m7c703d = self::m4is_jbj7g2twv8qztzkqxhhd3e399r();
if ( strlen( $m4is_r8pkh6ej4q ) > 2 ) {
if ( isset( $m4is_p1pcgyd796vjew6789m7c703d[ $m4is_r8pkh6ej4q ] ) ) {
return $m4is_p1pcgyd796vjew6789m7c703d[ $m4is_r8pkh6ej4q ];

}
}
else {
$m4is_r8pkh6ej4q = strtoupper( $m4is_r8pkh6ej4q );
foreach ( $m4is_p1pcgyd796vjew6789m7c703d as $m4is_7pk5j8k87e => $country_code ) {
if ( $country_code == $m4is_r8pkh6ej4q ) {
return $m4is_7pk5j8k87e;

}
}
}
return '';
}
}
