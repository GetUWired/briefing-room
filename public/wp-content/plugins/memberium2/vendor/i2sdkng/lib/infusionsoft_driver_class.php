<?php

defined( 'ABSPATH' ) || die();

final class m4is_qtv8mhn05d {
private $api_key;
private $api_log_table;
private $api_log;
private $app_host;

private $app_name;
private $auth_token;
private $client;
private $connection_timeout = 10;
private $crm_type;
private $dbOn;
private $debug;

private $email_notification;
private $email_to;
private $errno;
private $error_message;
private $host_url;
private $key_mode;
private $max_retries;

private $sak_key;
private $key_id;
private $valid_api;
var $key;
var $test_string;
function __construct() {
$this->api_key = '';
$this->api_log = 0;

$this->api_log_table = '';
$this->app_host = '';
$this->app_name = '';
$this->auth_token = '';
$this->client = NULL;
$this->crm_type = 'i';

$this->email_notification = 0;
$this->email_to = get_option( 'admin_email' );
$this->errno = NULL;
$this->error_message = '';
$this->host_url = '';

$this->key = '';
$this->key_id = '';
$this->key_mode = 'legacy';
$this->max_retries = 3;
$this->valid_api = 0;
}



public function m4is_368sz7dcn0f3vghcfdf() : string {
return $this->key_mode;

}
public function configureConnection( string $appname, string $key ) : bool {
$this->key = $key;
$is_token = $key === $this->auth_token;

$this->api_key = $key;
$is_sak = substr( $key, 0, 7 ) === 'KeapAK-';
if ( ! empty( $appname ) ) {
$this->app_host = sprintf( "%s.infusionsoft.com",
 $appname );
$this->app_name = $appname;
if ( $this->key_mode == '' && $is_token ) {
$this->key_mode = 'oauth';
}
if ( $is_token || $is_sak ) {
$this->host_url = sprintf( 'https://api.infusionsoft.com/crm/xmlrpc/v1/?access_token=%s',
 $this->key );
}
else {
$this->host_url = sprintf( 'https://%s.infusionsoft.com/api/xmlrpc', $appname );
}
}
if ( ! class_exists( 'WP_HTTP_IXR_Client' ) ) {
require_once ABSPATH . '/wp-includes/class-IXR.php';
 
}
require_once __DIR__ . '/i2sdk_ixr_client.php';
$this->client = new m4is_vrvbvg106kntyvsh8hw7pqtck4d( $this->host_url );
$this->client->i2sdk_api_log = (bool) $this->api_log;

if ( ! $is_token && ! $is_sak ) {
$this->key_mode = 'legacy';
$this->key_id = 'legacy';
$this->client->set_api_key( $this->key, $this->key_mode );

}
return true;
}



public function setAppName( string $appname ) {
$appname = defined( 'I2SDK_APP_NAME' ) ? strtolower( constant( 'I2SDK_APP_NAME' ) ) : strtolower( trim( $appname ) );

if ( $appname > '') {
$this->app_host = $appname;
$this->app_name = $appname;
$success = true;
}
if ( $this->app_name > '' && $this->key > '' ) {
return $this->configureConnection( $this->app_name,
 $this->key );
}
return $success;
}
public function getAppName() {
return $this->app_name;
}
public function set_sak_key( string $sak_key ) {
$sak_key = defined( 'I2SDK_SAK_KEY' ) ? trim( constant( 'I2SDK_SAK_KEY' ) ) : trim( $sak_key );

if ( $this->app_name > '' && $sak_key > '' ) {
$this->sak_key = $sak_key;
$this->key_mode = 'sak';
$this->key_id = sha1( $this->sak_key );

return $this->configureConnection( $this->app_name, $this->sak_key );
}
else {
return false;
}
}
public function set_legacy_api_key( string $api_key ) {
$api_key = defined( 'I2SDK_API_KEY' ) ? trim( constant( 'I2SDK_API_KEY' ) ) : trim( $api_key );

if ( empty( $epi_key ) || empty( $this->app_name ) ) {
return false;
}
$this->api_key = $api_key;
$this->key_mode = 'legacy';
$this->key_id = 'legacy';

return $this->configureConnection( $this->app_name, $this->api_key );
}
public function set_oauth_token( string $auth_token ) {
if ( empty( $this->app_name ) || empty( $auth_token ) ) {
return false;

}
$this->auth_token = $auth_token;
$this->key_mode = 'oauth';
$this->key_id = 'oauth';
return $this->configureConnection( $this->app_name,
 $this->auth_token );
}




public function enableLogging( $status ) : bool {
$this->api_log = false;
return false;
if ( is_integer( $status ) && $status == 1 || $status == 0) {
$status = (boolean) $status;

}
if ( is_bool( $status ) ) {
$this->api_log = $status;
return true;
}
return false;
}

public function setApiLogTable( string $api_log_table ) : void {
$api_log_table = trim( $api_log_table );

$this->api_log_table = $api_log_table;
}
function setEmailNotification($email_notification) {
$this->email_notification = (int) $email_notification;

}
public function setEmailTo( $email_to ) {
$this->email_to = trim($email_to);
}
public function setRetryCount( $retry_count ) {
$new_retry_count = (int) $retry_count;

if ($new_retry_count >= 0) {
$this->max_retries = (int) $retry_count;
}
}
public function getRetryCount() {
return $this->max_retries;

}



private function methodCaller( $service, $callArray ) {
if ( ! is_object( $this->client ) ) {
error_log( 'i2SDK: [error] XML-RPC Client not initialized' );

error_log( 'i2SDK Call Stack: ' . print_r( debug_backtrace(), true ) );
return 'i2SDK: [error] XML-RPC Client not initialized';
}
if ( ! method_exists( $this->client,
 'query' ) ) {
error_log( 'i2SDK: [error] XML-RPC Query method missing' );
error_log( 'i2SDK Call Stack: ' . print_r( debug_backtrace(),
 true ) );
return 'i2SDK: [error] XML-RPC Query method missing';
}
$retry = false;
$start_time = microtime( true );
$retry_count = 0;

$request = [ $service ];
if( ! empty( $callArray ) && is_array( $callArray ) ) {
foreach ($callArray as $arg) {
$request[] = $arg;

}
}
do {
$errorCode = false;
$retry_now = false;
$errorMessage = '';
$this->client->set_api_key( $this->api_key, $this->key_mode );

$result = $this->client->do_i2sdk_xmlrpc_request( $request );
sleep( $retry_count );
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_pms1dmba6byfdg6xk( 0 );

if ( is_wp_error( $result ) ) {
$errorCode = $result->get_error_code();
$errorMessage = $result->get_error_message( $errorCode );
}

if ( $errorCode === 2 && $errorMessage === 'Invalid Access Token' ) {

if( $this->key === $this->auth_token && !empty( $this->api_key ) ) {
$retry_now = $this->set_legacy_api_key( $this->api_key );

$key_index = array_search( $this->auth_token, $request ); 
if( $key_index !== false ){
$request[$key_index] = $this->api_key;
}


}
}

if ( $errorCode === 10 ) {

m4is_q28s00aabb2yd3d::m4is_rc7cpymf5b7xy32xqb50085d4m();

$retry_now = true;
}
if( $retry_now ){
sleep(1);
$result = $this->client->do_i2sdk_xmlrpc_request( $request );
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_pms1dmba6byfdg6xk( 0 );

if( is_wp_error($result) ){
$errorCode = $result->get_error_code();
$errorMessage = $result->get_error_message( $errorCode );
}
else{
$errorCode = false;

$errorMessage = false;
}
}
if ( $this->api_log ) {

$result_log = $errorMessage ? $errorMessage : $result;
m4is_nskfcq9pc3bt348v1z2p22fm::get_i2sdk()->write_api_log([
'duration' =>
 ( microtime(true) - $start_time ),
'service' => $service,
'user' => wp_get_current_user()->user_login,
'caller' => $this->client->getXMLRequest(),

'result' => m4is_mh9t97q4p4p87vkr5zxs6k99b::m4is_smqht7cx0cpbf1ps13w89x8c69z9n( 'ISO-8859-1', 'UTF-8', var_export( $result_log, true ) ),
 
'retries' => $retry_count
]);
}
if ( $this->email_notification ) {
$error_notice =
'Retry:        ' . $retry_count . "\n\n" .
'FaultCode:    ' . $errorCode . "\n\n" .
'FaultString:  ' . $errorMessage . "\n\n" .
'Service:      ' . $service . "\n\n" .
'CallArray:    ' . print_r( $callArray,
 true ) . "\n\n" .
'DocumentRoot: ' . $_SERVER["DOCUMENT_ROOT"] . "\n\n" .
'RequestURI:   ' . $_SERVER["REQUEST_URI"] . "\n\n" .
'User ID:      ' . get_current_user_id() . "\n\n" .
'';

}
if ( ! $errorCode ) {
if ( $retry_count && $this->email_notification ) {
wp_mail( $this->email_to, 'i2SDK Error Success on Retry',
 $error_notice );
}
return $result;
}
else {


switch ( $errorCode ) {
case -1: 
break;
case 2: 
return false;
break;
case 5: 
break;

case 6: 
break;
case 8: 
break;
case 12: 
$retry = false;
break;
case 500: 
$retry = true;
if( strpos( $errorMessage, 'IP access not allowed' ) !== false){
$retry = false;

}
break;

case -32600: 

case -32601: 
case -32602: 
case -32700: 
$retry = false;
break;
default:
$retry = true;
break;
}
if ($this->email_notification == 1) {
wp_mail( $this->email_to,
 'i2SDK Error', $error_notice );
}
if ($this->debug == 'kill') {
die( "ERROR: {$errorCode} - {$errorMessage}" );
}
elseif ($this->debug == 'on') {
return "ERROR: {$errorCode} - {$errorMessage}";

}
elseif ($this->debug == 'off') {

}
}
$retry_count++;
} while ( $retry_count < $this->max_retries && $retry == true );
if ( $this->debug == 'kill' ) {
die( "ERROR: {$errorCode} - {$errorMessage}" );

}
elseif ( $this->debug == 'on' ) {
return "ERROR: {$errorCode} - {$errorMessage}";
}
elseif ( $this->debug == 'off' ) {

return "ERROR: {$errorCode} - {$errorMessage}";

}
}
public static function record_quota_throttle_metrics( $response, $api_key_id = '' ) {
$headers = wp_remote_retrieve_headers( $response );

if ( empty( $headers['x-keap-tenant-id'] ) ) {
return;
}


$metrics = get_option( m4is_a6kbph84cyre1t461::API_METRICS_KEY, [] );
$metrics = is_array( $metrics ) ? $metrics : [];

$metrics['timestamp'] = time();
$map = [
'x-keap-tenant-id' => 'id',
'x-keap-tenant-throttle-limit' => 'throttle_limit',
'x-keap-tenant-throttle-time-unit' =>
 'throttle_time_unit',
'x-keap-tenant-throttle-interval' => 'throttle_interval',
'x-keap-tenant-throttle-available' => 'throttle_available',

'x-keap-tenant-throttle-used' => 'throttle_used',
];
foreach( $map as $header => $key ){
if ( isset( $headers[$header] ) ){
$metrics['tenant'][$key] = $headers[$header];

}
}
$map = [
'x-keap-product-spike-limit' => 'spike_limit',
'x-keap-product-throttle-limit' => 'throttle_limit',
'x-keap-product-throttle-time-unit' =>
 'throttle_time_unit',
'x-keap-product-throttle-interval' => 'throttle_interval',
'x-keap-product-throttle-available' => 'throttle_available',

'x-keap-product-throttle-used' => 'throttle_used',
'x-keap-product-quota-limit' => 'quota_limit',
'x-keap-product-quota-time-unit' =>
 'quota_time_unit',
'x-keap-product-quota-interval' => 'quota_interval',
'x-keap-product-quota-available' => 'quota_available',
'x-keap-product-quota-used' =>
 'quota_used',
'x-keap-product-quota-expiry-time' => 'quota_expiry_time',
];
foreach( $map as $header => $key ){
if ( isset( $headers[$header] ) ){
$metrics['product'][$key] = $headers[$header];

if ( $api_key_id ) {
$metrics[$api_key_id][$key] = $headers[$header];
}
}
}
update_option( m4is_a6kbph84cyre1t461::API_METRICS_KEY,
 $metrics, 'yes' );
}



private function php_xmlrpc_encode( $val, $options = [] ){

if( in_array( 'auto_dates', $options ) ){
$val = $this->m4is_v107svhtz1dr9y($val);

}

return $val;
}

private function m4is_v107svhtz1dr9y( $val ){
$type = gettype( $val );
if( $type === 'string' ){
if( DateTime::createFromFormat( 'Ymd\Th:i:s',
 $val ) !== false ){
$val = new IXR_Date($val);
}
}
else if( $type === 'object' && is_a($val, 'DateTime') ){
$val = new IXR_Date( $val->format('Ymd\Th:i:s') );

}
else if( $type === 'array' ){
array_walk_recursive($val, function(&$v, $k) {
$v = $this->m4is_v107svhtz1dr9y($v);
});
}
return $val;

}
public function get_ErrorMessage() {
return $this->error_message;
}
private function set_retry( int $retry_count ) : void {
if ( $retry_count >= 0 ) {
$this->max_retries = (int) $retry_count;

}
}



private function getFieldList( string $tablename ) {
$cache_group = 'i2sdk/tables';
$cache_ttl = 600;
$form_id = 0;
$tablename = strtolower(trim($tablename) );

$found = false;
$fields = wp_cache_get( $tablename, $cache_group, false, $found );
if ($found === false) {
switch ( $tablename ) {
case 'affiliate':
$fields = [
'AffCode',

'AffName',
'ContactId',
'DefCommissionType',
'Id',
'LeadAmt',
'LeadCookieFor',
'LeadPercent',
'NotifyLead',
'NotifySale',
'ParentId',

'Password',
'PayoutType',
'SaleAmt',
'SalePercent',
'Status',
];
break;
case 'actionsequence':
$fields = [
'Id',
'TemplateName',
];

break;
case 'contact':
$fields = [

'Address1Type',
'Address2Street1',
'Address2Street2',
'Address2Type',
'Address3Street1',
'Address3Street2',

'Address3Type',
'Anniversary',
'AssistantName',
'AssistantPhone',
'BillingInformation',
'Birthday',
'City',
'City2',
'City3',
'Company',

'CompanyID',
'ContactNotes',
'ContactType',
'Country',
'Country2',
'Country3',
'CreatedBy',
'DateCreated',
'Email',
'EmailAddress2',

'EmailAddress3',
'Fax1',
'Fax1Type',
'Fax2',
'Fax2Type',
'FirstName',
'Groups',
'Id',
'JobTitle',
'LastName',
'LastUpdated',
'LastUpdatedBy',

'Leadsource',
'LeadSourceId',
'MiddleName',
'Nickname',
'OwnerID',
'Password',
'Phone1',
'Phone1Ext',
'Phone1Type',
'Phone2',
'Phone2Ext',

'Phone2Type',
'Phone3',
'Phone3Ext',
'Phone3Type',
'Phone4',
'Phone4Ext',
'Phone4Type',
'Phone5',
'Phone5Ext',
'Phone5Type',
'PostalCode',

'PostalCode2',
'PostalCode3',
'ReferralCode',
'SpouseName',
'State',
'State2',
'State3',
'StreetAddress1',
'StreetAddress2',
'Suffix',

'Title',
'Username',
'Validated',
'Website',
'ZipFour1',
'ZipFour2',
'ZipFour3',
];
$form_id = -1;
break;
case 'contactgroup':
$fields = [
'Id',

'GroupName',
'GroupCategoryId',
'GroupDescription',
];
break;
case 'contactgroupassign':
$fields = [
'ContactGroup',
'ContactId',
'DateCreated',

'GroupId',
];
break;
case 'contactgroupcategory':
$fields = [
'Id',
'CategoryName',
'CategoryDescription',
];
break;
case 'creditcard':
$fields = [
'Id',

'ContactId',
'BillName',
'FirstName',
'LastName',
'PhoneNumber',
'Email',
'BillAddress1',
'BillAddress2',
'BillCity',
'BillState',

'BillZip',
'BillCountry',
'ShipFirstName',
'ShipMiddleName',
'ShipLastName',
'ShipCompanyName',
'ShipPhoneNumber',
'ShipAddress1',

'ShipAddress2',
'ShipCity',
'ShipState',
'ShipZip',
'ShipCountry',
'ShipName',
'NameOnCard',
'CardNumber',
'Last4',
'ExpirationMonth',

'ExpirationYear',
'CVV2',
'Status',
'CardType',
'StartDateMonth',
'StartDateYear',
'MaestroIssueNumber',
];
break;
case 'Job':
$fields = [
'Id',

'JobTitle',
'ContactId',
'StartDate',
'DueDate',
'JobNotes',
'ProductId',
'JobStatus',
'DateCreated',
'JobRecurringId',
'OrderType',

'OrderStatus',
'ShipFirstName',
'ShipMiddleName',
'ShipLastName',
'ShipCompany',
'ShipPhone',
'ShipStreet1',
'ShipStreet2',
'ShipCity',

'ShipState',
'ShipZip',
'ShipCountry',
];
break;
case 'referral':
$fields = [
'Id',
'ContactId',
'AffiliateId',
'DateSet',
'DateExpires',

'IPAddress',
'Source',
'Info',
'Type'
];
break;
default:
$fields = false;
break;
}
if ( $form_id <> 0 ) {
global $wpdb;
$sql = 'SELECT concat(\'_\', name) as name FROM `' . 'i2sdk_dataformfields' . '` WHERE `appname` = "' . $this->app_name . '" AND formid = ' . (int)$form_id;
 $data_form_fields = $wpdb->get_results( $sql, ARRAY_A );
foreach ( $data_form_fields as $id=>$row ) {
$fields[] = $row['name'];
}
unset( $data_form_fields );

}
}
wp_cache_set( $tablename, $fields, $cache_group, $cache_ttl );
return $fields;
}




public function verify_api_connection() : bool {
if ( ! is_object( $this->client ) ) {
return false;

}
$result = trim( $this->dsGetSetting( 'Application', 'api_passphrase' ) );
if ( strpos( $result, 'InvalidKey' ) == 12 || substr( $result,
 0, 6 ) == 'ERROR:' || empty( $result ) ) {
$this->error_message = 'Invalid API Key (' . __LINE__ . '): ' . $result;
return false;
}
else {
$this->error_message = NULL;

return true;
}
}







public function addCon( array $contact_map, string $optin_reason = '' ) : int {
$email_field = 'Email';
$parameters = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $contact_map, [ 'auto_dates' ] )
];
$contact_id = (int) $this->methodCaller( 'ContactService.add', $parameters );

$optin_reason = trim( $optin_reason );
if ( ! empty( $contact_map[$email_field] ) ) {
if ( $optin_reason ) {
$this->optIn( $contact_map[$email_field] );

}
else {
$this->optIn( $contact_map[$email_field], $optin_reason );
}
}
return $contact_id;
}

public function updateCon( $contact_id,
 array $fields ) {
$parameters = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $contact_id ),
$this->php_xmlrpc_encode( $fields,
 ['auto_dates'] )
];
return $this->methodCaller( 'ContactService.update', $parameters );
}

public function mergeCon( $contact_id, $duplicate_id ) {
$parameters = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $contact_id ),
$this->php_xmlrpc_encode( (int) $duplicate_id )
];
return $this->methodCaller( 'ContactService.merge',
 $parameters );
}

public function loadCon( $contact_id, array $return_fields ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $contact_id ),
$this->php_xmlrpc_encode( array_values( $return_fields ) )
];
return $this->methodCaller( 'ContactService.load',
 $carray );
}

public function findByEmail( string $email_address, array $return_fields ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $email_address ),
$this->php_xmlrpc_encode( array_values( $return_fields ) )
];
return $this->methodCaller( 'ContactService.findByEmail',
 $carray );
}




public function grpAssign( $contact_id, $tag_id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $contact_id ),

$this->php_xmlrpc_encode( (int) $tag_id )
];
return $this->methodCaller( 'ContactService.addToGroup', $carray );
}

public function grpRemove( $contact_id,
 $tag_id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $contact_id ),
$this->php_xmlrpc_encode( (int) $tag_id )
];

return $this->methodCaller( 'ContactService.removeFromGroup', $carray );
}




public function optStatus( string $email ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $email )
];
return $this->methodCaller( 'APIEmailService.getOptStatus', $carray );
}


public function optIn( string $email,
 string $reason = 'API Opt In' ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $email ),
$this->php_xmlrpc_encode( $reason )
];

return $this->methodCaller( 'APIEmailService.optIn', $carray );
}
public function optOut( string $email, string $reason = 'API Opt Out' ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $email ),
$this->php_xmlrpc_encode( $reason )
];
return $this->methodCaller( 'APIEmailService.optOut', $carray );

}




public function runAS( $contact_id, $actionset_id ) {
$parameters = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $contact_id ),

$this->php_xmlrpc_encode( (int) $actionset_id )
];
return $this->methodCaller( 'ContactService.runActionSequence', $parameters );
}




public function addCustomField( string $table_id,
 string $display_name, string $data_type_id, $group_id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $table_id ),

$this->php_xmlrpc_encode( $display_name ),
$this->php_xmlrpc_encode( $data_type_id ),
$this->php_xmlrpc_encode( (int) $group_id )
];

return $this->methodCaller( "DataService.addCustomField", $carray );
}




public function getFile( $file_id ) {
$parameters = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $file_id )
];
return $this->methodCaller( 'FileService.getFile', $parameters );
}

public function uploadFile( string $file_name,
 string $base64_encoded_data, $contact_id = 0 ) {
if ( $contact_id == 0 ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $file_name ),

$this->php_xmlrpc_encode( $base64_encoded_data )
];
}
else {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $contact_id ),

$this->php_xmlrpc_encode( $file_name ),
$this->php_xmlrpc_encode( $base64_encoded_data )
];
}
return $this->methodCaller( 'FileService.uploadFile',
 $carray );
}

public function replaceFile( $file_id, string $base64_encoded_data ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $file_id ),
$this->php_xmlrpc_encode( $base64_encoded_data )
];
return $this->methodCaller( 'FileService.replaceFile',
 $carray );
}

public function renameFile( $file_id, string $file_name ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $file_id ),

$this->php_xmlrpc_encode( (string) $file_name )
];
return $this->methodCaller( 'FileService.renameFile', $carray );
}

public function getDownloadUrl( $file_id ) {
$parameters = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $file_id )
];
return $this->methodCaller( 'FileService.getDownloadUrl', $parameters );
}




public function dsAdd( string $table_name,
 array $row_data ) {
$parameters = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $table_name ),
$this->php_xmlrpc_encode( $row_data,
 ['auto_dates'] )
];
return $this->methodCaller( 'DataService.add', $parameters );
}

public function dsUpdate( string $table_name,
 $record_id, array $row_data ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $table_name ),
$this->php_xmlrpc_encode( (int) $record_id ),

$this->php_xmlrpc_encode( $row_data, ['auto_dates'] )
];
return $this->methodCaller( 'DataService.update', $carray );
}

public function dsLoad( string $table_name,
 $record_id, array $return_fields ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $table_name ),
$this->php_xmlrpc_encode( (int) $record_id ),

$this->php_xmlrpc_encode( array_values( $return_fields ) )
];
return $this->methodCaller( 'DataService.load', $carray );
}

public function dsDelete( string $table_name,
 $record_id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $table_name ),
$this->php_xmlrpc_encode( (int) $record_id )
];

return $this->methodCaller( 'DataService.delete', $carray );
}

public function dsFind( string $table_name, $limit, $page, string $field,
 string $value, array $return_fields ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $table_name ),

$this->php_xmlrpc_encode( (int) $limit ),
$this->php_xmlrpc_encode( (int) $page ),
$this->php_xmlrpc_encode( $field ),
$this->php_xmlrpc_encode( $value ),

$this->php_xmlrpc_encode( array_values( $return_fields ) )
];
return $this->methodCaller( "DataService.findByField", $carray );
}

public function dsQueryOrderBy( string $table_name,
 $limit, $page, array $query, array $return_fields, string $order_by_field, $ascending = true ) {
$parameters = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $table_name ),
$this->php_xmlrpc_encode( (int) $limit ),
$this->php_xmlrpc_encode( (int) $page ),
$this->php_xmlrpc_encode( $query,
 [ 'auto_dates' ] ),
$this->php_xmlrpc_encode( array_values( $return_fields ) ),
$this->php_xmlrpc_encode( $order_by_field ),
$this->php_xmlrpc_encode( (bool) $ascending )
];

return $this->methodCaller( 'DataService.query', $parameters );
}

public function dsQuery( string $tName, $limit, $page, array $query,
 array $rFields ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (string) $tName ),
$this->php_xmlrpc_encode( (int) $limit ),

$this->php_xmlrpc_encode( (int) $page ),
$this->php_xmlrpc_encode( $query, [ 'auto_dates' ] ),
$this->php_xmlrpc_encode( array_values( $rFields ) )
];

return $this->methodCaller( 'DataService.query', $carray );
}

public function dsCount( string $table_name, array $query ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $table_name ),
$this->php_xmlrpc_encode( $query )
];
return $this->methodCaller( 'DataService.count', $carray );

}

public function dsAddWithImage( string $table_name, array $field_data ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $table_name ),

$this->php_xmlrpc_encode( $field_data, ['auto_dates', 'auto_base64'] )
];
return $this->methodCaller( 'DataService.add', $carray );

}
public function dsUpdateWithImage( string $table_name, $row_id, array $field_data ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $table_name ),
$this->php_xmlrpc_encode( (int) $row_id ),
$this->php_xmlrpc_encode( $field_data, ['auto_dates',
 'auto_base64'] )
];
return $this->methodCaller( 'DataService.update', $carray );
}




public function listLinkedContacts( $contact_id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $contact_id),
];
return $this->methodCaller( 'ContactService.listLinkedContacts', $carray );
}

public function LinkContacts( $contact1,
 $contact2, $link_type = 0) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $contact1 ),
$this->php_xmlrpc_encode( (int) $contact2 ),

$this->php_xmlrpc_encode( (int) $link_type ),
];
return $this->methodCaller( 'ContactService.linkContacts', $carray );
}

public function UnlinkContacts( $contact1,
 $contact2, $link_type = 0) {
$carray = [
$this->php_xmlrpc_encode($this->key),
$this->php_xmlrpc_encode( (int) $contact1 ),
$this->php_xmlrpc_encode( (int) $contact2 ),

$this->php_xmlrpc_encode( (int) $link_type ),
];
return $this->methodCaller( 'ContactService.unlinkContacts', $carray );
}




public function campAssign( $cid,
 $campId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $cid ),
$this->php_xmlrpc_encode( (int) $campId )
];

return $this->methodCaller( 'ContactService.addToCampaign', $carray );
}

public function getNextCampaignStep( $cid, $campId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $cid ),
$this->php_xmlrpc_encode( (int) $campId )
];
return $this->methodCaller( 'ContactService.getNextCampaignStep',
 $carray );
}

public function getCampaigneeStepDetails( $cid, $stepId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $cid ),

$this->php_xmlrpc_encode( (int) $stepId )
];
return $this->methodCaller( 'ContactService.getCampaigneeStepDetails', $carray );
}

public function rescheduleCampaignStep( $cidList,
 $campId ) {
$cidList = is_array( $cidList ) ? array_values( $cidList ) : [ $cidList ];
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $cidList ),
$this->php_xmlrpc_encode( (int) $campId )
];
return $this->methodCaller( 'ContactService.rescheduleCampaignStep',
 $carray );
}

public function campRemove( $cid, $campId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $cid ),

$this->php_xmlrpc_encode( (int) $campId )
];
return $this->methodCaller( 'ContactService.removeFromCampaign', $carray );
}

public function campPause( $cid,
 $campId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $cid ),
$this->php_xmlrpc_encode( (int) $campId )
];

return $this->methodCaller( 'ContactService.pauseCampaign', $carray );
}

public function applyActivityHistoryTemplate( $contactId,
 $historyId, $userId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $contactId ),
$this->php_xmlrpc_encode( (int) $historyId ),

$this->php_xmlrpc_encode( (int) $userId )
];
return $this->methodCaller( 'ContactService.applyActivityHistoryTemplate', $carray );

}

public function dsGetSetting( string $module, string $setting ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $module ),

$this->php_xmlrpc_encode( $setting )
];
return $this->methodCaller( 'DataService.getAppSetting', $carray );
}

public function authenticateUser( $userName,
 $password ) {
$password = strtolower( md5( $password ) );
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $userName ),

$this->php_xmlrpc_encode( $password )
];
return $this->methodCaller( 'DataService.authenticateUser', $carray );
}

public function updateCustomField( $fieldId,
 array $fieldValues ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $fieldId ),
$this->php_xmlrpc_encode( $fieldValues )
];

return $this->methodCaller( 'DataService.updateCustomField', $carray );
}
public function deleteInvoice( $Id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $Id )
];
return $this->methodCaller( 'InvoiceService.deleteInvoice', $carray );
}
public function deleteSubscription( $Id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $Id )
];
return $this->methodCaller( 'InvoiceService.deleteSubscription', $carray );
}


public function getPayments( $Id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $Id )
];
return $this->methodCaller( 'InvoiceService.getPayments', $carray );
}

public function setInvoiceSyncStatus( $Id,
 string $syncStatus ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $Id ),
$this->php_xmlrpc_encode( $syncStatus )
];

return $this->methodCaller( 'InvoiceService.setInvoiceSyncStatus', $carray );
}
public function setPaymentSyncStatus( $Id, $Status ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $Id ),
$this->php_xmlrpc_encode( $Status )
];
return $this->methodCaller( 'InvoiceService.setPaymentSyncStatus',
 $carray );
}
public function getPluginStatus( string $className ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $className )
];

return $this->methodCaller( 'InvoiceService.getPluginStatus', $carray );
}

public function getAllShippingOptions() {
$carray = [
$this->php_xmlrpc_encode( $this->key )
];

return $this->methodCaller( 'InvoiceService.getAllShippingOptions', $carray );
}
public function getAllPaymentOptions() {
$carray = [ $this->php_xmlrpc_encode( $this->key ) ];

return $this->methodCaller( "InvoiceService.getAllPaymentOptions", $carray );
}
public function manualPmt( $invId, $amt, string $payDate,
 string $payType, string $payDesc, $bypassComm ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $invId ),

$this->php_xmlrpc_encode( (double) $amt ),
$this->php_xmlrpc_encode( (string) $payDate, ['auto_dates'] ),
$this->php_xmlrpc_encode( (string) $payType ),

$this->php_xmlrpc_encode( (string) $payDesc ),
$this->php_xmlrpc_encode( (bool) $bypassComm )
];
return $this->methodCaller( 'InvoiceService.addManualPayment',
 $carray );
}

public function commOverride( $invId, $affId, $prodId, $percentage, $amt, $payType, string $desc, string $date ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $invId ),
$this->php_xmlrpc_encode( (int) $affId ),
$this->php_xmlrpc_encode( (int) $prodId ),
$this->php_xmlrpc_encode( (int) $percentage ),

$this->php_xmlrpc_encode( (double) $amt ),
$this->php_xmlrpc_encode( (int) $payType ),
$this->php_xmlrpc_encode( $desc ),
$this->php_xmlrpc_encode( $date,
 ['auto_dates'] )
];
return $this->methodCaller( 'InvoiceService.addOrderCommissionOverride', $carray );
}

public function addOrderItem( $ordId,
 $prodId, $type, $price, $qty, string $desc, string $notes ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $ordId ),

$this->php_xmlrpc_encode( (int) $prodId ),
$this->php_xmlrpc_encode( (int) $type ),
$this->php_xmlrpc_encode( (double) $price ),
$this->php_xmlrpc_encode( (int) $qty ),

$this->php_xmlrpc_encode( $desc ),
$this->php_xmlrpc_encode( $notes )
];
return $this->methodCaller( 'InvoiceService.addOrderItem',
 $carray );
}

public function payPlan( $ordId, $aCharge, $ccId, $merchId, $retry, $retryAmt, $initialPmt, string $initialPmtDate, string $planStartDate,
 $numPmts, $pmtDays ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $ordId ),
$this->php_xmlrpc_encode( (bool) $aCharge ),

$this->php_xmlrpc_encode( (int) $ccId ),
$this->php_xmlrpc_encode( (int) $merchId ),
$this->php_xmlrpc_encode( (int) $retry ),
$this->php_xmlrpc_encode( (int) $retryAmt ),

$this->php_xmlrpc_encode( (double) $initialPmt ),
$this->php_xmlrpc_encode( $initialPmtDate, [ 'auto_dates' ] ),
$this->php_xmlrpc_encode( $planStartDate,
 [ 'auto_dates' ] ),
$this->php_xmlrpc_encode( (int) $numPmts ),
$this->php_xmlrpc_encode( (int) $pmtDays )
];
return $this->methodCaller( 'InvoiceService.addPaymentPlan',
 $carray );
}

public function recurringCommOverride( $recId, $affId, $amt, $payType, string $desc ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $recId ),
$this->php_xmlrpc_encode( (int) $affId ),
$this->php_xmlrpc_encode( (double) $amt ),
$this->php_xmlrpc_encode( (int) $payType ),

$this->php_xmlrpc_encode( $desc )
];
return $this->methodCaller( 'InvoiceService.addRecurringCommissionOverride', $carray );
}

public function addRecurring( $cid,
 $allowDup, $progId, $merchId, $ccId, $affId, $daysToCharge ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $cid ),

$this->php_xmlrpc_encode( (bool) $allowDup ),
$this->php_xmlrpc_encode( (int) $progId ),
$this->php_xmlrpc_encode( (int) $merchId ),

$this->php_xmlrpc_encode( (int) $ccId ),
$this->php_xmlrpc_encode( (int) $affId ),
$this->php_xmlrpc_encode( (int) $daysToCharge )
];

return $this->methodCaller( 'InvoiceService.addRecurringOrder', $carray );
}

public function addRecurringAdv( $cid, $allowDup, $progId,
 $qty, $price, $allowTax, $merchId, $ccId, $affId, $daysToCharge ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $cid ),

$this->php_xmlrpc_encode( (bool) $allowDup ),
$this->php_xmlrpc_encode( (int) $progId ),
$this->php_xmlrpc_encode( (int) $qty ),
$this->php_xmlrpc_encode( (double) $price ),

$this->php_xmlrpc_encode( (bool) $allowTax ),
$this->php_xmlrpc_encode( (int) $merchId ),
$this->php_xmlrpc_encode( (int) $ccId ),

$this->php_xmlrpc_encode( (int) $affId ),
$this->php_xmlrpc_encode( (int) $daysToCharge )
];
return $this->methodCaller( 'InvoiceService.addRecurringOrder',
 $carray );
}

function amtOwed( $invId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $invId )
];

return $this->methodCaller( 'InvoiceService.calculateAmountOwed', $carray );
}

function getInvoiceId( $orderId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $orderId )
];
return $this->methodCaller( 'InvoiceService.getInvoiceId', $carray );
}

public function getOrderId( $invoiceId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $invoiceId )
];
return $this->methodCaller( 'InvoiceService.getOrderId', $carray );
}

public function chargeInvoice( $invoice_id,
 string $notes, $card_id, $merchant_id, $bypass_commissions ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $invoice_id ),

$this->php_xmlrpc_encode( $notes ),
$this->php_xmlrpc_encode( (int) $card_id ),
$this->php_xmlrpc_encode( (int) $merchant_id ),
$this->php_xmlrpc_encode( (bool) $bypass_commissions )
];

return $this->methodCaller( 'InvoiceService.chargeInvoice', $carray );
}

public function blankOrder( $conId, string $desc, string $oDate,
 $leadAff, $saleAff ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $conId ),
$this->php_xmlrpc_encode( $desc ),

$this->php_xmlrpc_encode( $oDate, ['auto_dates'] ),
$this->php_xmlrpc_encode( (int) $leadAff ),
$this->php_xmlrpc_encode( (int) $saleAff )
];

return $this->methodCaller( 'InvoiceService.createBlankOrder', $carray );
}

public function recurringInvoice( $rid ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $rid )
];
return $this->methodCaller( 'InvoiceService.createInvoiceForRecurring', $carray );
}

public function locateCard( $cid,
 string $last4 ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $cid ),
$this->php_xmlrpc_encode( $last4 )
];

return $this->methodCaller( 'InvoiceService.locateExistingCard', $carray );
}


public function validateCard( $creditCard ) {
$creditCard = is_array( $creditCard ) ? $creditCard : (int) $creditCard;

$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $creditCard )
];
return $this->methodCaller( 'InvoiceService.validateCreditCard',
 $carray );
}

public function updateSubscriptionNextBillDate( $subscriptionId, string $nextBillDate ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $subscriptionId ),
$this->php_xmlrpc_encode( $nextBillDate, ['auto_dates'] )
];
return $this->methodCaller( 'InvoiceService.updateJobRecurringNextBillDate' ,
 $carray );
}

public function attachEmail( $cId, string $fromName, string $fromAddress, string $toAddress, string $ccAddresses, string $bccAddresses,
 string $contentType, string $subject, string $htmlBody, string $txtBody, string $header, string $strRecvdDate, string $strSentDate,
 $emailSentType = 1 ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $cId ),
$this->php_xmlrpc_encode( $fromName ),

$this->php_xmlrpc_encode( $fromAddress ),
$this->php_xmlrpc_encode( $toAddress ),
$this->php_xmlrpc_encode( $ccAddresses ),
$this->php_xmlrpc_encode( $bccAddresses ),

$this->php_xmlrpc_encode( $contentType ),
$this->php_xmlrpc_encode( $subject ),
$this->php_xmlrpc_encode( $htmlBody ),
$this->php_xmlrpc_encode( $txtBody ),

$this->php_xmlrpc_encode( $header ),
$this->php_xmlrpc_encode( $strRecvdDate ),
$this->php_xmlrpc_encode( $strSentDate ),
$this->php_xmlrpc_encode( (int) $emailSentType )
];

return $this->methodCaller( 'APIEmailService.attachEmail', $carray );
}

public function getAvailableMergeFields( string $mergeContext ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $mergeContext )
];
return $this->methodCaller( 'APIEmailService.getAvailableMergeFields', $carray );
}

public function sendEmail( $conList,
 $fromAddress, $toAddress, $ccAddresses, $bccAddresses, $contentType, $subject, $htmlBody, $txtBody ) {
$conList = is_array( $conList ) ? array_values( $conList ) : [ (int) $conList ];

$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $conList ),
$this->php_xmlrpc_encode( $fromAddress ),

$this->php_xmlrpc_encode( $toAddress ),
$this->php_xmlrpc_encode( $ccAddresses ),
$this->php_xmlrpc_encode( $bccAddresses ),
$this->php_xmlrpc_encode( $contentType ),

$this->php_xmlrpc_encode( $subject ),
$this->php_xmlrpc_encode( $htmlBody ),
$this->php_xmlrpc_encode( $txtBody )
];
return $this->methodCaller( 'APIEmailService.sendEmail',
 $carray );
}

public function sendTemplate( $contact_ids, string $template_id ) {
$contact_ids = is_array( $contact_ids ) ? array_values( $contact_ids ) : [ (int) $contact_ids ];

$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $contact_ids ),
$this->php_xmlrpc_encode( $template_id )
];

return $this->methodCaller( 'APIEmailService.sendEmail', $carray );
}

public function createEmailTemplate( $title, $userID, $fromAddress,
 $toAddress, $ccAddresses, $bccAddresses, $contentType, $subject, $htmlBody, $txtBody ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $title ),
$this->php_xmlrpc_encode( (int)$userID ),
$this->php_xmlrpc_encode( $fromAddress ),
$this->php_xmlrpc_encode( $toAddress ),

$this->php_xmlrpc_encode( $ccAddresses ),
$this->php_xmlrpc_encode( $bccAddresses ),
$this->php_xmlrpc_encode( $contentType ),
$this->php_xmlrpc_encode( $subject ),

$this->php_xmlrpc_encode( $htmlBody ),
$this->php_xmlrpc_encode( $txtBody )
];
return $this->methodCaller( "APIEmailService.createEmailTemplate",
 $carray );
}
public function addEmailTemplate( string $title, string $category, string $fromAddress, string $toAddress, string $ccAddresses,
 string $bccAddresses, string $subject, string $txtBody, string $htmlBody, string $contentType, string $mergeContext ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $title ),
$this->php_xmlrpc_encode( $category ),
$this->php_xmlrpc_encode( $fromAddress ),
$this->php_xmlrpc_encode( $toAddress ),

$this->php_xmlrpc_encode( $ccAddresses ),
$this->php_xmlrpc_encode( $bccAddresses ),
$this->php_xmlrpc_encode( $subject ),
$this->php_xmlrpc_encode( $txtBody ),

$this->php_xmlrpc_encode( $htmlBody ),
$this->php_xmlrpc_encode( $contentType ),
$this->php_xmlrpc_encode( $mergeContext )
];
return $this->methodCaller( 'APIEmailService.addEmailTemplate',
 $carray );
}

public function getEmailTemplate( $templateId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $templateId )
];

return $this->methodCaller( 'APIEmailService.getEmailTemplate', $carray );
}


public function updateEmailTemplate( $templateID, string $title,
 string $categories, string $fromAddress, string $toAddress, string $ccAddress, string $bccAddress, string $subject, string $textBody,
 string $htmlBody, string $contentType, string $mergeContext ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $templateID ),

$this->php_xmlrpc_encode( $title ),
$this->php_xmlrpc_encode( $categories ),
$this->php_xmlrpc_encode( $fromAddress ),
$this->php_xmlrpc_encode( $toAddress ),

$this->php_xmlrpc_encode( $ccAddress ),
$this->php_xmlrpc_encode( $bccAddress ),
$this->php_xmlrpc_encode( $subject ),
$this->php_xmlrpc_encode( $textBody ),

$this->php_xmlrpc_encode( $htmlBody ),
$this->php_xmlrpc_encode( $contentType ),
$this->php_xmlrpc_encode( $mergeContext )
];
return $this->methodCaller( 'APIEmailService.updateEmailTemplate',
 $carray );
}

public function affClawbacks( $affId, string $startDate, string $endDate ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $affId ),
$this->php_xmlrpc_encode( $startDate, [ 'auto_dates' ] ),
$this->php_xmlrpc_encode( $endDate,
 [ 'auto_dates' ] )
];
return $this->methodCaller( 'APIAffiliateService.affClawbacks', $carray );
}

public function affCommissions( $affId,
 string $startDate, string $endDate ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $affId ),

$this->php_xmlrpc_encode( $startDate, [ 'auto_dates' ] ),
$this->php_xmlrpc_encode( $endDate, [ 'auto_dates' ] )
];
return $this->methodCaller( 'APIAffiliateService.affCommissions',
 $carray );
}

public function affPayouts( $affId, string $startDate, string $endDate ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $affId ),
$this->php_xmlrpc_encode( $startDate, [ 'auto_dates' ] ),
$this->php_xmlrpc_encode( $endDate,
 [ 'auto_dates' ] )
];
return $this->methodCaller( 'APIAffiliateService.affPayouts', $carray );
}

public function affRunningTotals( $affList ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( array_values( $affList ) )
];
return $this->methodCaller( 'APIAffiliateService.affRunningTotals', $carray );

}

public function affSummary( $affList, string $startDate, string $endDate ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( array_values( $affList ) ),
$this->php_xmlrpc_encode( $startDate, [ 'auto_dates' ] ),
$this->php_xmlrpc_encode( $endDate,
 [ 'auto_dates' ] )
];
return $this->methodCaller( 'APIAffiliateService.affSummary', $carray );
}

public function addMoveNotes( $ticketList,
 $moveNotes, $moveToStageId, $notifyIds ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $ticketList ),

$this->php_xmlrpc_encode( $moveNotes ),
$this->php_xmlrpc_encode( $moveToStageId ),
$this->php_xmlrpc_encode( $notifyIds )
];
return $this->methodCaller( "ServiceCallService.addMoveNotes",
 $carray );
}

public function moveTicketStage( $ticketID, $ticketStage, $moveNotes, $notifyIds ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int)$ticketID ),
$this->php_xmlrpc_encode( $ticketStage ),
$this->php_xmlrpc_encode( $moveNotes ),
$this->php_xmlrpc_encode( $notifyIds )
];

return $this->methodCaller( "ServiceCallService.moveTicketStage", $carray );
}

public function infuDate(string $dateStr ) {
$dArray = date_parse( $dateStr );

if ( $dArray['error_count'] < 1 ) {
$tStamp = mktime( $dArray['hour'], $dArray['minute'], $dArray['second'], $dArray['month'], $dArray['day'],
 $dArray['year'] );
return date( 'Ymd\TH:i:s', $tStamp );
}
else {
foreach ( $dArray['errors'] as $err ) {
echo 'ERROR: ' . $err . '<br />';

}
die( 'The above errors prevented the application from executing properly.' );
}
}

public function savedSearchAllFields( $savedSearchId,
 $userId, $page ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $savedSearchId ),
$this->php_xmlrpc_encode( (int) $userId ),

$this->php_xmlrpc_encode( (int) $page )
];
return $this->methodCaller( 'SearchService.getSavedSearchResultsAllFields', $carray );
}

public function savedSearch( $savedSearchId,
 $userId, $page, array $fields ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $savedSearchId ),

$this->php_xmlrpc_encode( (int) $userId ),
$this->php_xmlrpc_encode( (int) $page ),
$this->php_xmlrpc_encode( array_values( $fields ) )
];

return $this->methodCaller( 'SearchService.getSavedSearchResults', $carray );
}

public function getAvailableFields( $savedSearchId,
 $userId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $savedSearchId ),
$this->php_xmlrpc_encode( (int) $userId )
];

return $this->methodCaller( 'SearchService.getAllReportColumns', $carray );
}

public function getDefaultQuickSearch( $userId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $userId )
];
return $this->methodCaller( 'SearchService.getDefaultQuickSearch', $carray );
}

public function getQuickSearches( $userId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $userId )
];
return $this->methodCaller( 'SearchService.getAvailableQuickSearches', $carray );
}

public function quickSearch( $quickSearchType,
 $userId, string $filterData, $page, $limit ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $quickSearchType ),

$this->php_xmlrpc_encode( (int) $userId ),
$this->php_xmlrpc_encode( $filterData ),
$this->php_xmlrpc_encode( (int) $page ),
$this->php_xmlrpc_encode( (int) $limit )
];

return $this->methodCaller( 'SearchService.quickSearch', $carray );
}

public function addWithDupCheck( array $cMap, string $checkType ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $cMap, ['auto_dates'] ),
$this->php_xmlrpc_encode( $checkType )
];
return $this->methodCaller( 'ContactService.addWithDupCheck',
 $carray );
}

public function recalculateTax( $invoiceId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $invoiceId )
];

return $this->methodCaller( 'InvoiceService.recalculateTax', $carray );
}

public function getWebFormMap() {
$carray = [
$this->php_xmlrpc_encode( $this->key )
];

return $this->methodCaller( 'WebFormService.getMap', $carray );
}

public function getWebFormHtml( $webFormId = 0 ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $webFormId )
];
return $this->methodCaller( "WebFormService.getHTML", $carray );
}

public function getInventory( $productId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $productId )
];
return $this->methodCaller( 'ProductService.getInventory', $carray );
}

public function incrementInventory( $productId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $productId )
];
return $this->methodCaller( 'ProductService.incrementInventory', $carray );
}

public function decrementInventory( $productId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $productId )
];
return $this->methodCaller( 'ProductService.decrementInventory', $carray );
}

public function increaseInventory( $productId,
 $quantity ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $productId ),
$this->php_xmlrpc_encode( (int) $quantity )
];

return $this->methodCaller( 'ProductService.increaseInventory', $carray );
}

public function decreaseInventory( $productId, $quantity ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $productId ),
$this->php_xmlrpc_encode( (int) $quantity )
];
return $this->methodCaller( 'ProductService.decreaseInventory',
 $carray );
}

public function deactivateCreditCard( $creditCardId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $creditCardId )
];

return $this->methodCaller( 'ProductService.deactivateCreditCard', $carray );
}

public function getAllConfiguredShippingOptions() {
$carray = [
$this->php_xmlrpc_encode( $this->key )
];

return $this->methodCaller( 'ShippingService.getAllShippingOptions', $carray );
}

public function getFlatRateShippingOption( $optionId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $optionId )
];
return $this->methodCaller( 'ShippingService.getFlatRateShippingOption', $carray );

}

public function getOrderTotalShippingOption( $optionId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $optionId )
];

return $this->methodCaller( 'ShippingService.getOrderTotalShippingOption', $carray );
}

public function getOrderTotalShippingRanges( $optionId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $optionId )
];
return $this->methodCaller( 'ShippingService.getOrderTotalShippingRanges', $carray );

}

public function getProductBasedShippingOption( $optionId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $optionId )
];

return $this->methodCaller( 'ShippingService.getProductBasedShippingOption', $carray );
}

public function getProductShippingPricesForProductShippingOption( $optionId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $optionId )
];
return $this->methodCaller( 'ShippingService.getProductShippingPricesForProductShippingOption',
 $carray );
}

public function getOrderQuantityShippingOption( $optionId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $optionId )
];

return $this->methodCaller( 'ShippingService.getOrderQuantityShippingOption', $carray );
}

public function getWeightBasedShippingOption( $optionId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $optionId )
];
return $this->methodCaller( 'ShippingService.getWeightBasedShippingOption', $carray );

}

public function getWeightBasedShippingRanges( $optionId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $optionId )
];

return $this->methodCaller( 'ShippingService.getWeightBasedShippingRanges', $carray );
}

public function getUpsShippingOption( $optionId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $optionId )
];
return $this->methodCaller( 'ShippingService.getUpsShippingOption', $carray );
}

public function addFreeTrial( string $name,
 string $description, $freeTrialDays, $hidePrice, $subscriptionPlanId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $name ),

$this->php_xmlrpc_encode( $description ),
$this->php_xmlrpc_encode( (int) $freeTrialDays ),
$this->php_xmlrpc_encode( (int) $hidePrice ),

$this->php_xmlrpc_encode( (int) $subscriptionPlanId )
];
return $this->methodCaller( 'DiscountService.addFreeTrial', $carray );
}

public function getFreeTrial( $trialId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $trialId )
];
return $this->methodCaller( 'DiscountService.getFreeTrial', $carray );
}



public function addOrderTotalDiscount( string $name,
 string $description, $applyDiscountToCommission, $percentOrAmt, $amt, $payType ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( $name ),
$this->php_xmlrpc_encode( $description ),
$this->php_xmlrpc_encode( (int) $applyDiscountToCommission ),

$this->php_xmlrpc_encode( (int) $percentOrAmt ),
$this->php_xmlrpc_encode( (double) $amt ),
$this->php_xmlrpc_encode( (string) $payType )
];

return $this->methodCaller( 'DiscountService.addOrderTotalDiscount', $carray );
}

public function getOrderTotalDiscount( $id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $id )
];
return $this->methodCaller( 'DiscountService.getOrderTotalDiscount', $carray );
}

public function addCategoryDiscount( string $name,
 string $description, $applyDiscountToCommission, $amt ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $name ),

$this->php_xmlrpc_encode( $description ),
$this->php_xmlrpc_encode( (int) $applyDiscountToCommission ),
$this->php_xmlrpc_encode( (double) $amt )
];

return $this->methodCaller( 'DiscountService.addCategoryDiscount', $carray );
}

public function getCategoryDiscount( $id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $id )
];
return $this->methodCaller( 'DiscountService.getCategoryDiscount', $carray );
}

public function addCategoryAssignmentToCategoryDiscount( $categoryDiscountId,
 $productCategoryId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $categoryDiscountId ),
$this->php_xmlrpc_encode( (int) $productCategoryId )
];

return $this->methodCaller( 'DiscountService.addCategoryAssignmentToCategoryDiscount', $carray );
}

public function getCategoryAssignmentsForCategoryDiscount( $id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $id )
];
return $this->methodCaller( 'DiscountService.getCategoryAssignmentsForCategoryDiscount', $carray );

}


public function addProductTotalDiscount( string $name, string $description, $applyDiscountToCommission, $productId, $percentOrAmt,
 $amt ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $name ),
$this->php_xmlrpc_encode( $description ),

$this->php_xmlrpc_encode( (int) $applyDiscountToCommission ),
$this->php_xmlrpc_encode( (int) $productId ),
$this->php_xmlrpc_encode( (int) $percentOrAmt ),

$this->php_xmlrpc_encode( (double) $amt )
];
return $this->methodCaller( 'DiscountService.addProductTotalDiscount', $carray );
}

public function getProductTotalDiscount( $id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $id )
];
return $this->methodCaller( 'DiscountService.getProductTotalDiscount', $carray );
}


public function addShippingTotalDiscount( string $name,
 string $description, $applyDiscountToCommission, $percentOrAmt, $amt ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $name ),

$this->php_xmlrpc_encode( $description ),
$this->php_xmlrpc_encode( (int) $applyDiscountToCommission ),
$this->php_xmlrpc_encode( (int) $percentOrAmt ),

$this->php_xmlrpc_encode( (double) $amt )
];
return $this->methodCaller( 'DiscountService.addShippingTotalDiscount', $carray );
}

public function getShippingTotalDiscount( $id ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $id )
];
return $this->methodCaller( 'DiscountService.getShippingTotalDiscount', $carray );
}

public function placeOrder( $contactId,
 $creditCardId, $payPlanId, $productIds, $subscriptionIds, $processSpecials, $promoCodes, $leadAff = 0, $saleAff = 0 ) {
$productIds = is_array( $productIds ) ? array_values( $productIds ) : [ (int) $productIds ];

$subscriptionIds = is_array( $subscriptionIds ) ? array_values( $subscriptionIds ) : [ (int) $subscriptionIds ];
$promoCodes = is_array( $promoCodes ) ? array_values( $promoCodes ) : [ $promoCodes ];

$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $contactId ),
$this->php_xmlrpc_encode( (int) $creditCardId ),

$this->php_xmlrpc_encode( (int) $payPlanId ),
$this->php_xmlrpc_encode( $productIds ),
$this->php_xmlrpc_encode( $subscriptionIds ),

$this->php_xmlrpc_encode( (bool) $processSpecials ),
$this->php_xmlrpc_encode( $promoCodes ),
$this->php_xmlrpc_encode( (int) $leadAff ),

$this->php_xmlrpc_encode( (int) $saleAff )
];
return $this->methodCaller( 'OrderService.placeOrder', $carray );
}

public function requestCcSubmissionToken( $contactId,
 string $successUrl, string $failureUrl ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $contactId ),

$this->php_xmlrpc_encode( $successUrl ),
$this->php_xmlrpc_encode( $failureUrl )
];
return $this->methodCaller( 'CreditCardSubmissionService.requestSubmissionToken',
 $carray );
}

public function requestCreditCardId( string $token ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $token )
];

return $this->methodCaller( 'CreditCardSubmissionService.requestCreditCardId', $carray );
}

public function achieveGoal( string $integration,
 string $callName, $contactId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( $integration ),
$this->php_xmlrpc_encode( $callName ),

$this->php_xmlrpc_encode( (int) $contactId )
];
return $this->methodCaller( 'FunnelService.achieveGoal', $carray );
}
public function achieveWordPressGoal( $contactId,
 string $optinId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $contactId ),
$this->php_xmlrpc_encode( $optinId )
];

return $this->methodCaller( 'FunnelService.achieveWordPressGoal', $carray );
}

public function getAffiliatesByProgram( $programId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $programId)
];
return $this->methodCaller( 'AffiliateProgramService.getAffiliatesByProgram', $carray );

}

public function getProgramsForAffiliate( $affiliateId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),
$this->php_xmlrpc_encode( (int) $affiliateId )
];

return $this->methodCaller( 'AffiliateProgramService.getProgramsForAffiliate', $carray);
}

public function getAffiliatePrograms() {
$carray = [
$this->php_xmlrpc_encode( $this->key )
];

return $this->methodCaller( 'AffiliateProgramService.getAffiliatePrograms', $carray );
}

public function getResourcesForAffiliateProgram( $programId ) {
$carray = [
$this->php_xmlrpc_encode( $this->key ),

$this->php_xmlrpc_encode( (int) $programId )
];
return $this->methodCaller( 'AffiliateProgramService.getResourcesForAffiliateProgram',
 $carray );
}

public function m4is_e924pv3v() {
$m4is_r53562w9befcb2kh7rm4p7n5 = [
$this->php_xmlrpc_encode( $this->key ),
];
$m4is_hartbe843crydzh = $this->methodCaller( 'WebTrackingService.getWebTrackingScriptTag',
 $m4is_r53562w9befcb2kh7rm4p7n5 );
return $m4is_hartbe843crydzh;
}
}
