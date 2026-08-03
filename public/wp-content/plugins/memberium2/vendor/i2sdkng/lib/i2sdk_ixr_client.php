<?php

defined( 'ABSPATH' ) || die();

class m4is_vrvbvg106kntyvsh8hw7pqtck4d extends IXR_Client {

public $error;
public $scheme;
public $i2sdk_xml_request = '';

public $i2sdk_api_log = false;
private string $key = '';
private string $key_id = '';
private string $mode = '';

public function __construct( string $server,
 $path = false, $port = false, $timeout = 15 ) {
$this->useragent = 'The Incutio XML-RPC PHP Library';
$this->timeout = $timeout;
if ( $path ) {
$this->scheme = 'http';

$this->server = $server;
$this->path = $path;
$this->port = $port;
}
else {
$bits = parse_url( $server );
$this->scheme = $bits['scheme'];

$this->server = $bits['host'];
$this->port = isset( $bits['port'] ) ? $bits['port'] : $port;
$this->path = ! empty( $bits['path'] ) ? $bits['path'] : '/';


if ( ! $this->path ) {
$this->path = '/';
}
if ( ! empty( $bits['query'] ) ) {
$this->path .= '?' . $bits['query'];
}
}
}

public function do_i2sdk_xmlrpc_request( array $request ) {
$this->error = false;

if ( substr( $request[1], 0, 7 ) === 'KeapAK-' ) {
$this->headers['X-Keap-API-Key'] = $request[1];
}
if ( ! call_user_func_array( [$this,
 'query'], $request ) ) {
$errorCode = $this->getErrorCode();
$errorMessage = $this->getErrorMessage();
if ( is_object($this->message) ) {
if( 'fault' === $this->message->messageType && $this->message->faultCode !== $errorCode ) {
$errorCode = $this->message->faultCode;

$errorMessage = $this->message->faultCode;
}
}
return new WP_Error( $errorCode, $errorMessage );
}
else{
$decoded_response = $this->decodeResponse();

return $decoded_response;
}
}
public function set_api_key( string $key, string $mode ) {
$this->key = $key;
$this->key_id = sha1( $key );

$this->mode = $mode;
}

public function query( ...$args ) {

$this->i2sdk_xml_request = '';
$method = array_shift( $args );
$request = new IXR_Request( $method,
 $args );
$xml = $request->getXml();
$port = $this->port ? ":$this->port" : '';
$url = $this->scheme . '://' . $this->server . $port . $this->path;

$args = [
'headers' => [ 'Content-Type' => 'text/xml' ],
'user-agent' => $this->useragent,
'body' => $xml,
];

foreach ( $this->headers as $header =>
 $value ) {
$args['headers'][ $header ] = $value;
}

$args['headers'] = apply_filters( 'wp_http_ixr_client_headers', $args['headers'] );

if ( false !== $this->timeout ) {
$args['timeout'] = $this->timeout;
}
if ( $this->debug ) {
echo '<pre class="ixr_request">' . htmlspecialchars( $xml ) . "\n</pre>\n\n";

}
if( $this->i2sdk_api_log ){
$this->i2sdk_xml_request = $xml;
}

$response = wp_remote_post( $url, $args );
m4is_qtv8mhn05d::record_quota_throttle_metrics( $response,
 $this->key_id );
if ( is_wp_error( $response ) ) {
$errno = $response->get_error_code();
$errorstr = $response->get_error_message();

$this->error = new IXR_Error( $errno, $errorstr );
return false;
}
$response_code = wp_remote_retrieve_response_code( $response );

if ( 200 != $response_code ) {
$errno = 5;
$errorstr = "HTTP status code was not 200 ({$response_code})";

$message = wp_remote_retrieve_response_message( $response );

if( $message === 'Unauthorized' ){
$errno = 2;
$body = json_decode( wp_remote_retrieve_body( $response ) );
if( is_object($body) && isset($body->fault) ){
$errorstr = $body->fault->faultstring;

}
}
$this->error = new IXR_Error( $errno, $errorstr );

return false;
}
if ( $this->debug ) {
echo '<pre class="ixr_response">' . htmlspecialchars( wp_remote_retrieve_body( $response ) ) . "\n</pre>\n\n";

}

$this->message = new IXR_Message( wp_remote_retrieve_body( $response ) );

if ( ! $this->message->parse() ) {

$this->error = new IXR_Error( -32700,
 'parse error. not well formed' );
return false;
}


if ( 'fault' === $this->message->messageType ) {

$this->error = new IXR_Error( $this->message->faultCode,
 $this->message->faultString );
return false;
}

return true;
}
function decodeResponse(){
$result = $this->getResponse();
$can_encode = extension_loaded( 'mbstring' ) && function_exists( 'iconv' );

if( is_array( $result ) ) {
array_walk_recursive( $result, function( &$v, $k ) use ( $can_encode ) {
if( is_a( $v, 'IXR_Date' ) ){
$v = $v->getIso();

}
else if ( $can_encode && mb_detect_encoding( $v ) <> 'UTF-8' ) {
$v = m4is_mh9t97q4p4p87vkr5zxs6k99b::m4is_smqht7cx0cpbf1ps13w89x8c69z9n( 'ISO-8859-1',
 'UTF-8', $v );

}
});
}
else {
if ( is_a( $result, 'IXR_Date' ) ) {
$result = $result->getIso();
}
elseif ( $can_encode && is_string($result) && mb_detect_encoding( $result ) <> 'UTF-8' ){
$result = m4is_mh9t97q4p4p87vkr5zxs6k99b::m4is_smqht7cx0cpbf1ps13w89x8c69z9n( 'ISO-8859-1',
 'UTF-8', $result );

}
}
return $result;
}
function getXMLRequest(){
return $this->i2sdk_xml_request;
}
}
