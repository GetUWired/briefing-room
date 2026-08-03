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


defined( 'ABSPATH' ) || die();

final class m4is_31rjt9n7gdk1np {
const API_BASE_V1 = 'https://api.infusionsoft.com/crm/rest/v1/';
const API_BASE_V2 = 'https://api.infusionsoft.com/crm/rest/v2/';

const CONTACTS_PROPERTIES_KEY = 'memberum/keap/rest/contacts/properties';
const PAGE_SIZE = 1000;
const TAG_BATCH_SIZE = 101;


private $api_count = 0;

private $api_log = false;
private $api_version = 1;
private $appname;
private $max_retry = 3;
private $oauth_enabled = false;
private $sak_key = '';

private $key_id = '';
private $token;
public function __construct( array $configuration ) {
$this->appname = $configuration['app_name'] ?? '';

$this->token = $configuration['access_token'] ?? '';
$this->api_log = (bool) ( $configuration['api_log'] ?? false );
$this->oauth_enabled = (bool) ( $configuration['oauth_enabled'] ?? false );

$this->sak_key = empty( $configuration['sak'] ) ? '' : $configuration['sak'];
$this->key_id = empty( $this->sak_key ) ? '' : sha1( $this->sak_key );

}
public function set_sak_key( $sak_key ) {
$this->sak_key = $sak_key;
$this->key_id = sha1( $sak_key );
}
public function m4is_z4cxfpr19pfbbv3rxv8hpqx( $token ) {
$this->token = $token;

$this->key_id = 'oauth';
}






public function verify_api_connection() : bool {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1,
 'setting/application/enabled' );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

return ! is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );
}

public function m4is_wk2n3e5sazddxpe() {
$m4is_ra7dnjjzebn9h3t6k7a2p36 = [
'fields' =>
 "affiliate,appointment,contact,ecommerce,email,forms,fulfillment,invoice,note,opportunity,task,template"
];
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 2,
 'settings/applications:getConfiguration', $m4is_ra7dnjjzebn9h3t6k7a2p36 );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}






public function m4is_x39py13bx4as5hn() : object {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1,
 'affiliates/model' );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

if ( is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
error_log( 'Memberium: [error] Affiliate Model Retrieval REST API Error - ' . $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->get_error_message() );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}
if ( ! is_object( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) || ! isset( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) || ! is_array( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) ) {
error_log( 'Memberium: [error] Affiliate Model Retrieval REST API Error - Invalid response structure.' );

return new WP_Error( 'invalid_response', 'Invalid response structure from the API.' );
}
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;

}

public function m4is_bwb2xrfsx4m4168wt6f7yt() : object {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1,
 'appointments/model' );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

if ( is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
error_log( 'Memberium: [error] Appointment Model Retrieval REST API Error - ' . $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->get_error_message() );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}
if ( ! is_object( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) || ! isset( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) || ! is_array( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) ) {
error_log( 'Memberium: [error] Appointment Model Retrieval REST API Error - Invalid response structure.' );

return new WP_Error( 'invalid_response', 'Invalid response structure from the API.' );
}
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;

}

public function m4is_ghfxqyyd48vc24567hdzegd() : object {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1,
 'contacts/model' );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

if ( is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
error_log( 'Memberium: [error] Custom Field Sync REST API Error - ' . $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->get_error_message() );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}
if ( ! is_object( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) || ! isset( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) || ! is_array( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) ) {
error_log( 'Memberium: [error] Contact Custom Field Sync REST API Error - Invalid response structure.' );

return new WP_Error( 'invalid_response', 'Invalid response structure from the API.' );
}
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;

}

public function m4is_2rr1pgyrgmv() : object {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1, 'companies/model' );

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );
if ( is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
error_log( 'Memberium: [error] Company Model Retrieval REST API Error - ' . $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->get_error_message() );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}
if ( ! is_object( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) || ! isset( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) || ! is_array( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) ) {
error_log( 'Memberium: [error] Company Model Retrieval REST API Error - Invalid response structure.' );

return new WP_Error( 'invalid_response', 'Invalid response structure from the API.' );
}
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;

}

public function m4is_0byhe8ay6() : object {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1, 'notes/model' );

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );
if ( is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
error_log( 'Memberium: [error] Notes Model Retrieval REST API Error - ' . $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->get_error_message() );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}
if ( ! is_object( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) || ! isset( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) || ! is_array( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) ) {
error_log( 'Memberium: [error] Notes Model Retrieval REST API Error - Invalid response structure.' );

return new WP_Error( 'invalid_response', 'Invalid response structure from the API.' );
}
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;

}

public function m4is_9dbxwdfr1v2bpvr6twfr29q0s23p() : object {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1,
 'opportunities/model' );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

if ( is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
error_log( 'Memberium: [error] Opportunity Model Retrieval REST API Error - ' . $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->get_error_message() );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}
if ( ! is_object( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) || ! isset( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) || ! is_array( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) ) {
error_log( 'Memberium: [error] Opportunity Model Retrieval REST API Error - Invalid response structure.' );

return new WP_Error( 'invalid_response', 'Invalid response structure from the API.' );
}
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;

}

public function m4is_3fjbrhvf() : object {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1, 'orders/model' );

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );
if ( is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
error_log( 'Memberium: [error] Orders Model Retrieval REST API Error - ' . $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->get_error_message() );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}
if ( ! is_object( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) || ! isset( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) || ! is_array( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) ) {
error_log( 'Memberium: [error] Orders Model Retrieval REST API Error - Invalid response structure.' );

return new WP_Error( 'invalid_response', 'Invalid response structure from the API.' );
}
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;

}

public function m4is_pr200kqmgd2e32fs29hb99j() : object {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1,
 'subscriptions/model' );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

if ( is_wp_error( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) ) {
error_log( 'Memberium: [error] Subscription Model Retrieval REST API Error - ' . $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->get_error_message() );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}
if ( ! is_object( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) || ! isset( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) || ! is_array( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->custom_fields ) ) {
error_log( 'Memberium: [error] Subscription Model Retrieval REST API Error - Invalid response structure.' );

return new WP_Error( 'invalid_response', 'Invalid response structure from the API.' );
}
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;

}





public function m4is_0j58sye9mndtrktpa2c53d23s() {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 2,
 'contacts/model' );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

$m4is_fnjjh790q000jfxgcxf518hz3k6dxeg = isset( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->optional_properties ) ? implode( ',', array_filter( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->optional_properties ) ) : '';

if ( ! empty( $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg ) ) {
update_option( self::CONTACTS_PROPERTIES_KEY, $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg );

}
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}
public function m4is_3937cfb6fc() {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1,
 'subscriptions/model' );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}






public function m4is_jehbaqwnkk59kj4ch5cven8mrqa() {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1,
 'merchants' );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}
public function m4is_7tbccnpva01kd( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : string {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_m3e7cxx64vz3( 2,
 "paymentMethodConfigs", ['contact_id' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ] );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

$m4is_j8j55t8dz79m7 = property_exists( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz, 'session_key' ) ? $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->session_key : '';

return $m4is_j8j55t8dz79m7;
}



public function m4is_6p8s185mxtvw9b1b53kq( array $m4is_wfv34z8p = [], $m4is_ns7cayak3vne92c21vvb8en734g8 = 'id asc',
 int $m4is_ak30nyyk0g6ax1qeac6fy38tk7 = self::PAGE_SIZE, string $m4is_qcbb2xz4watqj7s4qx05s4n7cp = '', $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg = '' ) {
$m4is_fnjjh790q000jfxgcxf518hz3k6dxeg = empty( $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg ) ? $this->m4is_2x9mncjj() : $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg;

$m4is_fnjjh790q000jfxgcxf518hz3k6dxeg = is_array( $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg ) ? implode( ',', $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg ) : $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg;

$m4is_fnjjh790q000jfxgcxf518hz3k6dxeg = is_string( $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg ) ? $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg : '';

echo '<pre>', print_r( $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg, true ), '</pre>';
if ( empty( $m4is_wfv34z8p ) ) {
$m4is_wfv34z8p = '';

}
else {
$m4is_wfv34z8p = array_map( function( $key, $value ) {
return urlencode( $key . '==' . $value );
}, array_keys( $m4is_wfv34z8p ),
 $m4is_wfv34z8p );
$m4is_wfv34z8p = implode( ';', $m4is_wfv34z8p );
}
$m4is_ra7dnjjzebn9h3t6k7a2p36 = [
'fields' => $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg,

'filter' => $m4is_wfv34z8p,
'order_by' => urlencode( $m4is_ns7cayak3vne92c21vvb8en734g8 ),
'page_size' => $this->m4is_jmfzadhtrmqsamrrpscz4ssnggg( $m4is_ak30nyyk0g6ax1qeac6fy38tk7 ),

];
$m4is_ra7dnjjzebn9h3t6k7a2p36 = array_filter( $m4is_ra7dnjjzebn9h3t6k7a2p36 );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 2,
 'contacts', $m4is_ra7dnjjzebn9h3t6k7a2p36 );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}

public function m4is_bzewcp63vf5ybafbqe01ehg9ebp( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg = '' ) {
$m4is_fnjjh790q000jfxgcxf518hz3k6dxeg = empty( $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg ) ? $this->m4is_2x9mncjj() : $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg;

$m4is_fnjjh790q000jfxgcxf518hz3k6dxeg = is_array( $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg ) ? implode( ',', $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg ) : $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg;

$m4is_fnjjh790q000jfxgcxf518hz3k6dxeg = is_string( $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg ) ? $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg : '';

$m4is_ra7dnjjzebn9h3t6k7a2p36 = [
'fields' => $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg,
];
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 2,
 "contacts/{$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}", $m4is_ra7dnjjzebn9h3t6k7a2p36);
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}






public function m4is_znd8myfxtp0y5jrhxttf4jrpb9y( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : array {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1,
 "contacts/{$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}/creditCards" );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}
public function m4is_nnhvsd8nfbn52m73fmy9qzqef() {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1,
 'merchants' );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

return (array) $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}








public function m4is_zvwwvm9ygdhmttdsjj3xma4epc( string $m4is_s0hfpx2zktwa0hangkfqn3 = '',
 int $m4is_ak30nyyk0g6ax1qeac6fy38tk7 = self::PAGE_SIZE, string $m4is_ns7cayak3vne92c21vvb8en734g8 = 'id', string $m4is_wfv34z8p = '' ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36 = [
'filter' =>
 $m4is_wfv34z8p,
'order_by' => $m4is_ns7cayak3vne92c21vvb8en734g8, 
'page_size' => $m4is_ak30nyyk0g6ax1qeac6fy38tk7,
'page_token' =>
 $m4is_s0hfpx2zktwa0hangkfqn3,
];
$m4is_ra7dnjjzebn9h3t6k7a2p36 = array_filter( $m4is_ra7dnjjzebn9h3t6k7a2p36 );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 2,
 'tags', $m4is_ra7dnjjzebn9h3t6k7a2p36 );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}




public function m4is_v2272878mw( int $m4is_rkmcn1zd3r3k149h20vfr8z = self::PAGE_SIZE,
 int $m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq = 0, bool $m4is_dzf4s5t1nfcsk8t9 = true, bool $m4is_v27hm07zkhngkvkfrdp19yfdh71f5ak = true ) {
$m4is_ra7dnjjzebn9h3t6k7a2p36 = [
'include_inactive' =>
 $m4is_dzf4s5t1nfcsk8t9 ? 'TRUE' : 'FALSE',
'include_partners' => $m4is_v27hm07zkhngkvkfrdp19yfdh71f5ak ? 'TRUE' : 'FALSE',
'limit' =>
 $m4is_rkmcn1zd3r3k149h20vfr8z,
'offset' => $m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq, 
];
$m4is_ra7dnjjzebn9h3t6k7a2p36 = array_filter( $m4is_ra7dnjjzebn9h3t6k7a2p36 );

$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_n7ce1ph3h1kzmt249y3b30y( 1, 'users' );
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = $this->m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz );

return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;
}



public function m4is_xm1b7mjy9c7tdr8w8p0atpjq8ff( string $m4is_j51c05d5xpexybh7dgm8twm7nr7rks ) {
return date( 'Y-m-d\Th:i:s',
 strtotime( $m4is_j51c05d5xpexybh7dgm8twm7nr7rks ) ) . '.000Z';
}
public function m4is_2x9mncjj() {
static $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg;

if ( is_null( $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg ) ) {
$m4is_fnjjh790q000jfxgcxf518hz3k6dxeg = get_option( self::CONTACTS_PROPERTIES_KEY,
 '' );
if ( empty( $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg ) ) {
$this->m4is_0j58sye9mndtrktpa2c53d23s();
}
}
return $m4is_fnjjh790q000jfxgcxf518hz3k6dxeg;

}




public function m4is_t67av4647atzd( int $tag_id, array $contacts ) {
if ( empty( $tag_id ) || empty( $contacts ) ) {
return false;

}
$action = $tag_id < 0 ? 'remove' : 'add';

$results = [
'SUCCESS' => [],
'FAILURE' => []
];
$batches = $this->m4is_erpb4s7wam( $contacts );

$batched = count( $batches ) > 1;

foreach( $batches as $contact_ids ) {
if ( $action === 'add' ) {
$response = $this->m4is_m3e7cxx64vz3( 1,
 "tags/{$tag_id}/contacts", ['ids' => $contact_ids] );
if ( is_wp_error( $response ) || ! is_object( $response ) || ! empty( $response->message ) ) {
foreach ($contact_ids as $contact_id ) {
$results['FAILURE'][] = $contact_id;

}
}
elseif ( is_object( $response ) ) {
foreach( $response as $contact_id => $result ) {
$result = $result !== 'SUCCESS' ? 'FAILURE' : 'SUCCESS';

$results[$result][] = $contact_id;
}
}
}
elseif ( $action === 'remove' ) {
$tag_id = abs( $tag_id );
$contact_ids = implode( ',', $contact_ids );

$response = $this->m4is_n0fnsxjtsy1cjbc8jtmwb8ftwn( 1, "tags/{$tag_id}/contacts?ids={$contact_ids}" );
$result = is_wp_error( $response ) ? 'FAILURE' : 'SUCCESS';

foreach( $contacts as $contact_id ) {
$results[$result][] = $contact_id;
}
}
if ( $batched ) {
usleep( 500000 );
}
}
return empty( $results ) ? false : $results;

}

public function m4is_334xeeb70pgvnqd6wxpn2rrv409( int $contact_id, array $tag_ids ){
if ( empty( $contact_id ) || empty( $tag_ids ) ) {
return false;

}

$results = ['SUCCESS' => [], 'FAILURE' => []];
$batches = $this->m4is_erpb4s7wam( $tag_ids );
foreach( $batches as $tags ) {
$response = $this->m4is_m3e7cxx64vz3( 1,
 "contacts/{$contact_id}/tags", ['tagIds' => $tags] );
if ( is_wp_error( $response ) || ! is_object( $response ) || ! empty( $response->message ) ) {
foreach ( $tags as $tag_id ) {
$results['FAILURE'][] = $tag_id;

}
}
else{
foreach ($response as $tag_id => $result) {
$result = $result !== 'SUCCESS' ? 'FAILURE' : 'SUCCESS';
$results[$result][] = $tag_id;

}
}
}
return empty($results) ? false : $results;
}

public function m4is_t80vy427z5qdw6pdm6x( int $contact_id, array $tag_ids ){
if( empty( $contact_id ) || empty( $tag_ids ) ) {
return false;

}
$batches = $this->m4is_erpb4s7wam( $tag_ids );
$results = [
'SUCCESS' => [],
'FAILURE' => []
];
foreach ( $batches as $tags ) {
$tag_ids = implode( ',',
 $tags );
$delete = $this->m4is_n0fnsxjtsy1cjbc8jtmwb8ftwn( 1, "contacts/{$contact_id}/tags?ids={$tag_ids}" );
$result = is_wp_error($delete) ? 'FAILURE' : 'SUCCESS';

foreach ($tags as $tag_id) {
$results[$result][] = $tag_id;
}
}
return $results;
}





public function m4is_n7ce1ph3h1kzmt249y3b30y( int $version,
 string $method, $args = false ) {
$start_time = microtime( true );
$retry_count = 0;
$params = [
'access_token' => $this->token
];

if( is_array( $args ) ) {
$params = wp_parse_args( $args, $params );
}
if ( empty( $this->token ) ) {
unset( $params['access_token'] );

}
$url = add_query_arg( $params, $this->m4is_f4b3rpwq8h8631asnc96ra0jpa7d2sph( $version ) . $method );
$args = [];
if ( empty( $this->token ) ) {
if ( ! empty( $this->sak_key ) ) {
$args['headers'] = [
'X-Keap-API-Key' =>
 $this->sak_key
];
}
}
do {
usleep( 500000 * $retry_count );
$retry = false;
$response = wp_remote_get( $url, $args );
$m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = wp_remote_retrieve_response_code( $response );

$m4is_132xe588j = (string) wp_remote_retrieve_header( $response, 'x-keap-tenant-id' );
$m4is_132xe588j = strtolower( trim( substr( $m4is_132xe588j,
 0, strpos( $m4is_132xe588j, '.' ) ) ) );
if ( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 < 200 || $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 >= 300 ) {
$response = new WP_Error( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4,
 wp_remote_retrieve_response_message( $response ) );
}
if ( $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 >= 400 && $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 < 500 ) {
$retry = true;

}
if ( $m4is_132xe588j !== $this->appname ) {
$response = new WP_Error( 'invalid_app', sprintf( 'The application name "%s"does not match the expected value.',
 $m4is_132xe588j ) );
}
m4is_qtv8mhn05d::record_quota_throttle_metrics( $response, $this->key_id );
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_pms1dmba6byfdg6xk ( 0 );

if ( is_wp_error( $response ) ) {
$retry = $this->m4is_w52y53d7svth5ahzfbz89kg( $response );
}
$retry_count++;
} while ( $retry && $retry_count <= $this->max_retry );

$this->api_count++;
$result = is_wp_error( $response ) ? $response : json_decode( wp_remote_retrieve_body( $response ) );
if( $this->api_log ) {
$this->m4is_dem2t213zr69zta6g( [
'duration' =>
 ( microtime(true) - $start_time ),
'service' => 'rest/GET',
'caller' => str_replace( 'https://api.infusionsoft.com/crm/', '', $url ),

'result' => m4is_mh9t97q4p4p87vkr5zxs6k99b::m4is_smqht7cx0cpbf1ps13w89x8c69z9n( 'ISO-8859-1', 'UTF-8', (string) var_export( $result,
 true ) ), 
'retries' => $retry_count
] );
}
return $result;
}

public function m4is_m3e7cxx64vz3( int $version, string $method, $body = false ) {
return $this->m4is_r01ehv7hy4h2bhcwgcjq8gjnpxn237( $this->m4is_f4b3rpwq8h8631asnc96ra0jpa7d2sph( $version ) . $method,
 'POST', $body );
}

public function m4is_cafxb7chwta38ab5c69qkw9p120ht( int $version, string $method, $body = false ){
return $this->m4is_r01ehv7hy4h2bhcwgcjq8gjnpxn237( $this->m4is_f4b3rpwq8h8631asnc96ra0jpa7d2sph( $version ) . $method,
 'PATCH', $body );
}

public function m4is_d73cgb1e1dj3kcxpr2s0f9( int $version, string $method, $body = false ){
return $this->m4is_r01ehv7hy4h2bhcwgcjq8gjnpxn237( $this->m4is_f4b3rpwq8h8631asnc96ra0jpa7d2sph( $version ) . $method,
 'PUT', $body );
}

public function m4is_n0fnsxjtsy1cjbc8jtmwb8ftwn( int $version, string $method, $body = false ){
$code = (int) $this->m4is_r01ehv7hy4h2bhcwgcjq8gjnpxn237( $this->m4is_f4b3rpwq8h8631asnc96ra0jpa7d2sph( $version ) . $method,
 'DELETE', $body );
if ( $code != 204 ) {
$errors = [
0 => 'No Response',
401 => 'Unauthorized',
403 => 'Forbidden',
404 => 'Not Found'
];

$error = array_key_exists( $code, $errors ) ? $errors[$code] : "Response code {$code}";
return new WP_Error( $code, $errors[$code] );

}
else{
return 'success';
}
}

public function m4is_r01ehv7hy4h2bhcwgcjq8gjnpxn237( string $url, string $method, $body = false ) {
$start_time = microtime( true );

$retry_count = 0;
$params = [
'method' => $method,
'headers' => $this->m4is_j5chv8w43(),
'timeout' => 30,
];
if ( $body ) {
$params['body'] = ( is_array( $body ) ) ? json_encode( $body ) : $body;

}
do {
usleep( 500000 * $retry_count );
$retry = false;
$response = wp_remote_request( $url, $params );
if( $this->api_log ) {
$this->m4is_dem2t213zr69zta6g( [
'duration' =>
 ( microtime(true) - $start_time ),
'service' => 'rest/' . $method,
'caller' => str_replace( 'https://api.infusionsoft.com/crm/', '',
 $url ),
'result' => m4is_mh9t97q4p4p87vkr5zxs6k99b::m4is_smqht7cx0cpbf1ps13w89x8c69z9n( 'ISO-8859-1', 'UTF-8', (string) var_export( $response['body'],
 true ) ), 
'retries' => $retry_count
] );
}
m4is_qtv8mhn05d::record_quota_throttle_metrics( $response, $this->key_id );
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_pms1dmba6byfdg6xk( 0 );

if ( is_wp_error( $response ) ) {
$retry = $this->m4is_w52y53d7svth5ahzfbz89kg( $response );
}
$retry_count++;
} while ( $retry && $retry_count <= $this->max_retry );

$this->api_count++;
if( $method === 'DELETE' ) {
$result = is_wp_error( $response ) ? $response : wp_remote_retrieve_response_code( $response );

}
else{
$result = is_wp_error( $response ) ? $response : json_decode( wp_remote_retrieve_body( $response ) );
}
return $result;
}






public function m4is_d1bphf8x6ak8ymawwrmb8c( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) {
$m4is_xgh8n5dr3 = ! empty( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) && is_object( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz ) && isset( $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->fault ) ? $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->fault : false;

if ( $m4is_xgh8n5dr3 ) {
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = new WP_Error( $m4is_xgh8n5dr3->detail->errorcode, $m4is_xgh8n5dr3->faultstring );

if ( strpos( $m4is_xgh8n5dr3->detail->errorcode, 'InvalidAccessToken' ) !== false ){
global $i2sdk;
if ( $this->oauth_enabled ) {

}
}
}
return $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz;

}
public function m4is_jmfzadhtrmqsamrrpscz4ssnggg( int $m4is_rqxytszfq5v6syth1csqqxvy5, int $m4is_rjmk9nzcsr0 = 1, int $m4is_jm3x4nend6zh98f6 = self::PAGE_SIZE ) {
return max( $m4is_rjmk9nzcsr0,
 min( $m4is_jm3x4nend6zh98f6, $m4is_rqxytszfq5v6syth1csqqxvy5 ) );
}



private function m4is_w52y53d7svth5ahzfbz89kg( $error ) {
return false;

}
private function m4is_f4b3rpwq8h8631asnc96ra0jpa7d2sph( int $version = 1 ) {
$urls = [
1 => self::API_BASE_V1,
2 => self::API_BASE_V2
];

return array_key_exists( $version, $urls ) ? $urls[$version] : $urls[1];
}

private function m4is_j5chv8w43() {
$headers = [
'Content-Type' =>
 'application/json',
'Accept' => 'application/json',
];
if ( $this->oauth_enabled ) {
$headers['Authorization'] = 'Bearer ' . $this->token;

}
elseif ( ! empty( $this->sak_key ) ) {
$headers['X-Keap-API-Key'] = $this->sak_key;
}
return $headers;
}

public function m4is_erpb4s7wam( array $m4is_934a95jn,
 int $m4is_f6x04k8s = self::TAG_BATCH_SIZE ) {
$m4is_f6x04k8s = $this->m4is_jmfzadhtrmqsamrrpscz4ssnggg( $m4is_f6x04k8s, 1, 100 ); 
$m4is_fgzz0mqzfcx70d = [];

$m4is_934a95jn = array_values( $m4is_934a95jn );
if ( count( $m4is_934a95jn ) > $m4is_f6x04k8s ) {
$m4is_fgzz0mqzfcx70d = array_chunk( $m4is_934a95jn,
 $m4is_f6x04k8s );
}
else {
$m4is_fgzz0mqzfcx70d[] = $m4is_934a95jn;
}
return $m4is_fgzz0mqzfcx70d;
}
private function m4is_dem2t213zr69zta6g( $log ){
if( ! function_exists( 'wp_get_current_user' ) ){
include( ABSPATH . 'wp-includes/pluggable.php' );

}
$log['user'] = wp_get_current_user()->user_login;
m4is_nskfcq9pc3bt348v1z2p22fm::get_i2sdk()->write_api_log( $log );
}
public function m4is_8mfe8rwbqyk7d0gnn0fp5epafy20( $appname ) {
$this->appname = $appname;

}
}