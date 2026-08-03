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

final class m4is_sgvby6tzxdj27z0k9vsngxtx {
private static $m4is_132xe588j;
private static $m4is_v4beyw7zqhr3;
private static $m4is_wsme5a297xh0v6d5y;

private static $m4is_fqmasms1x;
private static $m4is_97gr318gxfj566z;
private static $m4is_ak30nyyk0g6ax1qeac6fy38tk7;
private static $m4is_kw193k52gqp8vsnss7sy;

private static $m4is_ehaw3pp6024s854ptf;
private static $m4is_jrywvp5j2cm;

public static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
global $wpdb;

self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
self::$m4is_v4beyw7zqhr3 = self::$m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );

self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();
self::$m4is_97gr318gxfj566z = $wpdb->prefix . 'memberium_filebox';

self::$m4is_kw193k52gqp8vsnss7sy = 'FileBox';
self::$m4is_jrywvp5j2cm = 'memberium/filebox/lastupdate';
self::$m4is_ak30nyyk0g6ax1qeac6fy38tk7 = 1000;

self::$m4is_ehaw3pp6024s854ptf = 900;
m4is_9d8n6yra072mpxd0pczne9::m4is_67nqhgcsb0p43k96hkt933aagr1c7c6();
}



static function m4is_91exw8491r7trs5m4q7xpyt6() : string {
return self::$m4is_97gr318gxfj566z;

}
static function m4is_4sf9pk2qrfssq78rjea6() : array {
global $wpdb;
$m4is_djvaptt7 = $wpdb->get_charset_collate();
$m4is_k7p8pmxsbkqrje3y20 = self::m4is_91exw8491r7trs5m4q7xpyt6();

$m4is_5rbenkpt1v7xby2cknbs7 =
"CREATE TABLE {$m4is_k7p8pmxsbkqrje3y20} (\n" .
"id int(20) unsigned NOT NULL, \n" .
"contactid int(20) unsigned NOT NULL, \n" .
"appname varchar(32) NOT NULL, \n" .
"filename varchar(255) NOT NULL, \n" .
"extension varchar(255) NOT NULL, \n" .
"filesize int(20) unsigned NOT NULL, \n" .
"public tinyint(1) unsigned NOT NULL, \n" .
"KEY id (id), \n" .
"KEY contactid (contactid), \n" .
"KEY appname (appname), \n" .
"KEY filename (filename), \n" .
"PRIMARY KEY  (appname,id) \n" .
") ENGINE=InnoDB {$m4is_djvaptt7};";

return [
'table' => $m4is_k7p8pmxsbkqrje3y20,
'sql' => $m4is_5rbenkpt1v7xby2cknbs7
];
}



private static function m4is_vd1yrkc6611fgwh38nqshymkbksq3fm() : array {
if ( is_null( self::$m4is_fqmasms1x ) ) {
self::$m4is_fqmasms1x = [
'3gp' =>
 'video/3gpp',
'avi' => 'video/x-msvideo',
'css' => 'text/css',
'doc' => 'application/msword',
'docx' => 'application/msword',
'exe' =>
 'application/octet-stream',
'gif' => 'image/gif',
'htm' => 'text/html',
'html' => 'text/html',
'jpeg' => 'image/jpg',
'jpg' => 'image/jpg',

'js' => 'application/javascript',
'jsc' => 'application/javascript',
'mov' => 'video/quicktime',
'mp3' => 'audio/mpeg',
'mpe' => 'video/mpeg',

'mpeg' => 'video/mpeg',
'mpg' => 'video/mpeg',
'pdf' => 'application/pdf',
'php' => 'text/html',
'png' => 'image/png',
'ppt' => 'application/vnd.ms-powerpoint',

'wav' => 'audio/x-wav',
'xls' => 'application/vnd.ms-excel',
'zip' => 'application/zip',
];
}
return self::$m4is_fqmasms1x;
}

private static function m4is_qr00tpwcsenkg0( string $m4is_xdbm8d12cgvesv68qqt2cy93w6af ) : string {
$m4is_02aqfry7az3jeqc2g29bfxb = strtolower( end( explode( '.',
 $m4is_xdbm8d12cgvesv68qqt2cy93w6af ) ) );
return array_key_exists( $m4is_02aqfry7az3jeqc2g29bfxb, self::m4is_vd1yrkc6611fgwh38nqshymkbksq3fm() ) ? self::$m4is_fqmasms1x[$m4is_02aqfry7az3jeqc2g29bfxb] : 'application/octet-stream';

}




private static function m4is_0ccy3wg7x0a( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : array {
global $wpdb;
$m4is_j34bmw9dcjexfj1qpz = $wpdb->prepare( "SELECT id FROM %i WHERE contactid = %d",
 self::$m4is_97gr318gxfj566z, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
return $wpdb->get_col( $m4is_j34bmw9dcjexfj1qpz );
}

private static function m4is_7nc1zwjmz9edes8h5hkkd9( array $m4is_v362e2msbbp8bz1ety9jge25fxeeqqa,
 array $m4is_z0ba29ag1wh7g ) : void {
global $wpdb;
$m4is_934a95jn = array_filter( array_diff( $m4is_v362e2msbbp8bz1ety9jge25fxeeqqa,
 $m4is_z0ba29ag1wh7g ) );
$m4is_b4tj8bz7gag2n7w4a3ych8s4hw86 = implode( ',', $m4is_934a95jn );
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "DELETE FROM %i WHERE `appname` = %s AND `id` IN ( {$m4is_b4tj8bz7gag2n7w4a3ych8s4hw86} )",
 self::$m4is_v4beyw7zqhr3, self::$m4is_97gr318gxfj566z );
}
private static function m4is_ck6x36wwtkn44m( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : void {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

update_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, self::$m4is_jrywvp5j2cm, time() );
}
private static function m4is_fdnwfznqda9hk( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : bool {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_rw8p2dfy073ez::m4is_qwwvyvgzftm9yzzcjhs25e( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

$m4is_5p1kv9r3f9ermvn3k = (int) get_user_meta( $m4is_wk4dh1rnd3wmwvsggq51nhn87, self::$m4is_jrywvp5j2cm, true );
return ( time() > ( $m4is_5p1kv9r3f9ermvn3k + self::$m4is_ehaw3pp6024s854ptf ) );

}



public static function m4is_weh7mqdyx4edwesmanpnc13pn( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) : int {
global $wpdb;
$m4is_j34bmw9dcjexfj1qpz = $wpdb->prepare( "SELECT COUNT(`id`) FROM %i WHERE `appname` = %s and `contactid` = %d",
 self::$m4is_97gr318gxfj566z, self::$m4is_v4beyw7zqhr3, $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
return (int) $wpdb->get_var( $m4is_j34bmw9dcjexfj1qpz );

}

public static function m4is_c6zs6xnsj3qan38djcgd( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp, bool $m4is_59hdvf05xsxzhb8556d18jz = false ) : array {
global $wpdb;

$m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw = [];
$m4is_j34bmw9dcjexfj1qpz = $wpdb->prepare( "SELECT * FROM %i WHERE contactid = %d", self::$m4is_97gr318gxfj566z,
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );
$m4is_xt22w6z8rm06wx6 = $wpdb->get_results( $m4is_j34bmw9dcjexfj1qpz, ARRAY_A );
if ( ! is_array( $m4is_xt22w6z8rm06wx6 ) ) {
return [];

}
foreach( $m4is_xt22w6z8rm06wx6 as $m4is_f5pq560taxn4v67xk7v982nwn0 ) {
$m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw[$m4is_f5pq560taxn4v67xk7v982nwn0['id']] = [
'ContactId' =>
 $m4is_f5pq560taxn4v67xk7v982nwn0['contactid'],
'FileName' => $m4is_f5pq560taxn4v67xk7v982nwn0['filename'],
'Extension' => $m4is_f5pq560taxn4v67xk7v982nwn0['extension'],

'FileSize' => $m4is_f5pq560taxn4v67xk7v982nwn0['filesize'],
'Id' => $m4is_f5pq560taxn4v67xk7v982nwn0['id'],
'Public' => $m4is_f5pq560taxn4v67xk7v982nwn0['public']
];

}
$m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw = $m4is_59hdvf05xsxzhb8556d18jz ? array_change_key_case( $m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw,
 CASE_LOWER ) : $m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw;
return $m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw;
}

public static function m4is_e7jjxzy2kbemn0t2wz6ckrv8h8( int $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 bool $m4is_pxqqyhvpv8x9tskp6p79ktbd = false ) : array {
global $wpdb;
if ( ! $m4is_pxqqyhvpv8x9tskp6p79ktbd && ! self::m4is_fdnwfznqda9hk( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp )) {
$m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw = self::m4is_c6zs6xnsj3qan38djcgd( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

if ( ! empty( $m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw ) ) {
return self::m4is_c6zs6xnsj3qan38djcgd( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

}
}
$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( self::$m4is_kw193k52gqp8vsnss7sy, false );

$m4is_ek8adjz9yz7wvga34bby56 = 0;
$m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw = [];
$m4is_934a95jn = [];
$m4is_j34bmw9dcjexfj1qpz = [
'ContactId' =>
 $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp
];
$m4is_zmqh8m72jbmwzqjpv1t = self::m4is_0ccy3wg7x0a( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

do {
$m4is_2eg5afjxq8 = self::$m4is_wsme5a297xh0v6d5y->dsQuery( self::$m4is_kw193k52gqp8vsnss7sy, self::$m4is_ak30nyyk0g6ax1qeac6fy38tk7,
 $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
if ( is_string( $m4is_2eg5afjxq8 ) ) {
error_log( 'Memberium: [error] Filebox Sync API Error - ' . $m4is_2eg5afjxq8 );

break;
}
$m4is_jjbqr9rdzh686yf8ea18kq0tps57p04 = is_array( $m4is_2eg5afjxq8 ) ? count( $m4is_2eg5afjxq8) : 0;
if ( $m4is_jjbqr9rdzh686yf8ea18kq0tps57p04 ) {
foreach ( $m4is_2eg5afjxq8 as $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p ) {
if ( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p['FileSize'] == 0 ) {
continue;

}
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p['Id'];
$m4is_934a95jn[] = $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;

$m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p;
$m4is_f5pq560taxn4v67xk7v982nwn0 = [
'appname' =>
 self::$m4is_v4beyw7zqhr3,
'contactid' => $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'filename' => $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p['FileName'],

'extension' => $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p['Extension'],
'filesize' => $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p['FileSize'],
'id' =>
 $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'public' => $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p['Public']
];
if ( in_array( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_zmqh8m72jbmwzqjpv1t ) ) {
$wpdb->update( self::$m4is_97gr318gxfj566z, $m4is_f5pq560taxn4v67xk7v982nwn0, [ 'id' => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ] );

}
else {
$wpdb->insert( self::$m4is_97gr318gxfj566z, $m4is_f5pq560taxn4v67xk7v982nwn0 );
}
}
}
$m4is_ek8adjz9yz7wvga34bby56++;
}
while ( $m4is_jjbqr9rdzh686yf8ea18kq0tps57p04 == self::$m4is_ak30nyyk0g6ax1qeac6fy38tk7 );

self::m4is_7nc1zwjmz9edes8h5hkkd9( $m4is_zmqh8m72jbmwzqjpv1t, $m4is_934a95jn );
self::m4is_ck6x36wwtkn44m( $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp );

return $m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw;
}
public static function m4is_9er9syqv19dwmamyptwgpamyzztnwft( int $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 bool $m4is_59hdvf05xsxzhb8556d18jz = false ) : array {
global $wpdb;
$m4is_j34bmw9dcjexfj1qpz = $wpdb->prepare( "SELECT * FROM %i WHERE `appname` = %s AND `id` = %d",
 self::$m4is_97gr318gxfj566z, self::$m4is_v4beyw7zqhr3, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh );
$m4is_f5pq560taxn4v67xk7v982nwn0 = $wpdb->get_row( $m4is_j34bmw9dcjexfj1qpz,
 ARRAY_A );
if ( ! is_array( $m4is_f5pq560taxn4v67xk7v982nwn0 ) ) {
return [];
}
$m4is_km8tdfaeb6r06rnds92fmvq = [
'ContactId' => $m4is_f5pq560taxn4v67xk7v982nwn0['contactid'],

'Extension' => $m4is_f5pq560taxn4v67xk7v982nwn0['extension'],
'FileName' => $m4is_f5pq560taxn4v67xk7v982nwn0['filename'],
'FileSize' =>
 $m4is_f5pq560taxn4v67xk7v982nwn0['filesize'],
'Id' => $m4is_f5pq560taxn4v67xk7v982nwn0['id'],
'Public' => $m4is_f5pq560taxn4v67xk7v982nwn0['public']
];

$m4is_km8tdfaeb6r06rnds92fmvq = $m4is_59hdvf05xsxzhb8556d18jz ? array_change_key_case( $m4is_km8tdfaeb6r06rnds92fmvq, CASE_LOWER ) : $m4is_km8tdfaeb6r06rnds92fmvq;

return $m4is_km8tdfaeb6r06rnds92fmvq;
}

public static function m4is_txsy89dtn9xjayeqsg011enz2c( int $m4is_nep7sq2byaje, string $m4is_xdbm8d12cgvesv68qqt2cy93w6af,
 bool $m4is_3qe05aw2156cp0kmn2ppj0cj = false ) {
$m4is_xdbm8d12cgvesv68qqt2cy93w6af = trim( $m4is_xdbm8d12cgvesv68qqt2cy93w6af );
$m4is_3qe05aw2156cp0kmn2ppj0cj = (bool) $m4is_3qe05aw2156cp0kmn2ppj0cj;

$m4is_vmhtx2ecrnzjpy = $_REQUEST['signature'];
if ( ! wp_verify_nonce( $m4is_vmhtx2ecrnzjpy, 'filebox_download::' . $m4is_nep7sq2byaje ) ) {
wp_die( 'Invalid Filebox Download Link' );

exit;
}
if ( is_user_logged_in() && ( $m4is_nep7sq2byaje < 1 || empty( $m4is_xdbm8d12cgvesv68qqt2cy93w6af ) ) ) {
return;
}
$m4is_y79zm0k8ceam7r6ymhmnr5an = $m4is_3qe05aw2156cp0kmn2ppj0cj ? self::m4is_qr00tpwcsenkg0( $m4is_xdbm8d12cgvesv68qqt2cy93w6af ) : 'application/octet-stream';

header( 'Content-Type: ' . $m4is_y79zm0k8ceam7r6ymhmnr5an );
header( 'Content-Disposition: attachment; filename="' . $m4is_xdbm8d12cgvesv68qqt2cy93w6af . '"' );

echo base64_decode( self::$m4is_wsme5a297xh0v6d5y->getFile( (int) $_GET['filebox_id'] ) );
exit;
}



public static function m4is_hsjesd1h12qq77rv00hmdxrhme() {
$m4is_ek8adjz9yz7wvga34bby56 = (int) get_option( '',
 0 );
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( self::$m4is_kw193k52gqp8vsnss7sy, false );
$m4is_j34bmw9dcjexfj1qpz = [
'Id' =>
 '%',
];
$m4is_2eg5afjxq8 = self::$m4is_wsme5a297xh0v6d5y->dsQuery( self::$m4is_kw193k52gqp8vsnss7sy, self::$m4is_ak30nyyk0g6ax1qeac6fy38tk7,
 $m4is_ek8adjz9yz7wvga34bby56, $m4is_j34bmw9dcjexfj1qpz, $m4is_7b2yfzk0054 );

if ( is_array( $m4is_2eg5afjxq8 ) ) {
}
}
}
