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

final class m4is_easq6t3ghrf04v80xj94rg989sas {
static private $m4is_132xe588j;
static private $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp;

static private $m4is_wsme5a297xh0v6d5y;
static private $m4is_zz74kb50;
static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

self::$m4is_zz74kb50 = ! m4is_zrrt34b1nqxbv::m4is_ce25q6vkyewg80zh9rs8856r57zh3y();
self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = self::$m4is_132xe588j->m4is_1qbr5gs0jfsnf569vm930v();

self::$m4is_wsme5a297xh0v6d5y = self::$m4is_132xe588j->m4is_88v87aaprrq6m96d606cn1tvb5x180e4();
}



static function m4is_6hr90aecw( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_n7x0afpz = [
'capture' =>
 '',
'file_id' => 0,
'missing_text' => 'No such file.',
'text' => 'Click here to Download',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_gb01jqxh9ek2m = '';
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['file_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['file_id'];

if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['file_id'] > 0 ) {
$m4is_nm7q81zfgj7a42e = self::$m4is_wsme5a297xh0v6d5y->getDownloadUrl( (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['file_id'] );

}
if ( $m4is_nm7q81zfgj7a42e > '' && strpos( $m4is_nm7q81zfgj7a42e, 'http' ) !== false ) {
$m4is_gb01jqxh9ek2m = '<a href="' . $m4is_nm7q81zfgj7a42e . '">' . htmlspecialchars( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['text'] ) . '</a>';

}
else {
$m4is_gb01jqxh9ek2m = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['missing_text'];
}
if ( ! empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] ) ) {
$m4is_gb01jqxh9ek2m = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_r631mq3vpgnpxhcrsqr414rtx1x( $m4is_gb01jqxh9ek2m,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'] );
}
return $m4is_gb01jqxh9ek2m;
}
static function m4is_w4xkhb0s5tc29h4( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
if ( self::$m4is_zz74kb50 ) {
return '';
}
$m4is_n7x0afpz = [
'capture' =>
 '',
'htmlattr' => '',
'file_id' => 0,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['file_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['file_id'];
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['file_id'] > 0 ) {
$m4is_nm7q81zfgj7a42e = self::$m4is_wsme5a297xh0v6d5y->getDownloadUrl( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['file_id'] );

}
if ($m4is_nm7q81zfgj7a42e > '' && strpos($m4is_nm7q81zfgj7a42e, 'http') !== FALSE) {
$m4is_gb01jqxh9ek2m = $m4is_nm7q81zfgj7a42e;

}
else {
$m4is_gb01jqxh9ek2m = '';
}
return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_a4w7stzgwh6v96qa(false, $m4is_gb01jqxh9ek2m, '', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['capture'],
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['htmlattr'], '', '');
}
static function m4is_50gj0sczx( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 string $m4is_bsamg3fezf = '', string $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) : string {
if ( self::$m4is_zz74kb50 ) {
return '';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'contact_id' => self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,

'filter' => '',
];
if ( isset( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] ) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts' ) {
return implode( ',',
 array_keys( $m4is_n7x0afpz ) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] = (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'];
if ( empty( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'] ) ) {
return '';

}
$m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw = m4is_sgvby6tzxdj27z0k9vsngxtx::m4is_e7jjxzy2kbemn0t2wz6ckrv8h8( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'],
 false );
$m4is_gb01jqxh9ek2m = '';
foreach( $m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw as $m4is_j8j55t8dz79m7 => $m4is_n2ssfh8hh6rxvwe3 ) {
$m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw[$m4is_j8j55t8dz79m7] = array_change_key_case( $m4is_n2ssfh8hh6rxvwe3,
 CASE_LOWER );
}
if (! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['filter']) ) {
if (is_array($m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw) && ! empty($m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw) ) {
foreach ($m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw as $m4is_j8j55t8dz79m7 =>
 $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7) {
if (stripos($m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['filename'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['filter']) === false) {
unset($m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw[$m4is_j8j55t8dz79m7]);

}
}
}
}
unset($m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7);
$m4is_exy1j5683gyraa = count($m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw) > 0;
if ($m4is_exy1j5683gyraa && empty($m4is_bsamg3fezf) ) {
$m4is_bsamg3fezf = '<p>
			%%line%% - %%cycler%%<br />
			filesize: %%filebox.filesize%%<br />
			filebytes: %%filebox.filebytes%%<br />
			extension: %%filebox.extension%%<br />
			filename: %%filebox.filename%%<br />
			id: %%filebox.id%%<br/>
			public: %%filebox.public%%<br/>
			<a href="%%filebox.openlink%%">open</a><br/>
			<a href="%%filebox.downloadlink%%">Download</a><br/>
			</p>';

}
$m4is_bsamg3fezf = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_c032srz89d0v($m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, true,
 $m4is_exy1j5683gyraa);
$m4is_svv1jt6mc = 0;
if ($m4is_exy1j5683gyraa) {
foreach ($m4is_eh0tf70t2ztftj8cn0hwxa5jba1t7fw as $m4is_j8j55t8dz79m7 =>
 $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7) {
$m4is_svv1jt6mc++;
$m4is_e69027kt0b5v1edsd5s3gj1fc39 = $m4is_bsamg3fezf;
if ($m4is_svv1jt6mc % 2) {
$m4is_3mb2qvs8exjdhye4sqgb2t3 = 'odd';

}
else {
$m4is_3mb2qvs8exjdhye4sqgb2t3 = 'even';
}
$m4is_ez43008gj4rm39je = wp_nonce_url('?filebox_id=' . urlencode($m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['id']) . '&filename=' . urlencode($m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['filename']),
 'filebox_download::' . $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['id'], 'signature');
$m4is_0tk22k2g2mxt15ch = wp_nonce_url('?filebox_id=' . urlencode($m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['id']) . '&filename=' . urlencode($m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['filename']) . '&viewable=1',
 'filebox_download::' . $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['id'], 'signature');
$m4is_e69027kt0b5v1edsd5s3gj1fc39 = str_ireplace('%%line%%',
 $m4is_svv1jt6mc, $m4is_e69027kt0b5v1edsd5s3gj1fc39);
$m4is_e69027kt0b5v1edsd5s3gj1fc39 = str_ireplace('%%cycler%%', $m4is_3mb2qvs8exjdhye4sqgb2t3,
 $m4is_e69027kt0b5v1edsd5s3gj1fc39);
$m4is_e69027kt0b5v1edsd5s3gj1fc39 = str_ireplace('%%filebox.filesize%%', self::$m4is_132xe588j->m4is_ja1h3m98py05d6zech($m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['filesize'],
 0), $m4is_e69027kt0b5v1edsd5s3gj1fc39);
$m4is_e69027kt0b5v1edsd5s3gj1fc39 = str_ireplace('%%filebox.filebytes%%', $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['filesize'],
 $m4is_e69027kt0b5v1edsd5s3gj1fc39);
$m4is_e69027kt0b5v1edsd5s3gj1fc39 = str_ireplace('%%filebox.extension%%', $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['extension'],
 $m4is_e69027kt0b5v1edsd5s3gj1fc39);
$m4is_e69027kt0b5v1edsd5s3gj1fc39 = str_ireplace('%%filebox.filename%%', $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['filename'],
 $m4is_e69027kt0b5v1edsd5s3gj1fc39);
$m4is_e69027kt0b5v1edsd5s3gj1fc39 = str_ireplace('%%filebox.id%%', $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['id'],
 $m4is_e69027kt0b5v1edsd5s3gj1fc39);
$m4is_e69027kt0b5v1edsd5s3gj1fc39 = str_ireplace('%%filebox.public%%', $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['public'],
 $m4is_e69027kt0b5v1edsd5s3gj1fc39);
$m4is_e69027kt0b5v1edsd5s3gj1fc39 = str_ireplace('%%filebox.link%%', '?filebox_id=' . urlencode($m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['id']) . '&filename=' . urlencode($m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7['filename']),
 $m4is_e69027kt0b5v1edsd5s3gj1fc39);
$m4is_e69027kt0b5v1edsd5s3gj1fc39 = str_ireplace('%%filebox.openlink%%', $m4is_0tk22k2g2mxt15ch,
 $m4is_e69027kt0b5v1edsd5s3gj1fc39);
$m4is_e69027kt0b5v1edsd5s3gj1fc39 = str_ireplace('%%filebox.downloadlink%%', $m4is_ez43008gj4rm39je,
 $m4is_e69027kt0b5v1edsd5s3gj1fc39);
$m4is_gb01jqxh9ek2m .= do_shortcode($m4is_e69027kt0b5v1edsd5s3gj1fc39);
}
}
else {
$m4is_gb01jqxh9ek2m .= do_shortcode( $m4is_bsamg3fezf );

}
return $m4is_gb01jqxh9ek2m;
}
static function m4is_z36dwr5t50jrwbqwc11wvvrx( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_bsamg3fezf = null,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
if ( self::$m4is_zz74kb50 ) {
return '';
}
if (is_feed() ) {
return;
}
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return 'n/a';

}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_5tmqg45z37r82cfb67prh = '';
if (is_user_logged_in() ) {
$m4is_j8j55t8dz79m7 = 'memberium::file_upload_msg::' . self::$m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_5tmqg45z37r82cfb67prh = trim(get_transient($m4is_j8j55t8dz79m7) );
delete_transient($m4is_j8j55t8dz79m7);
}
if (empty($m4is_5tmqg45z37r82cfb67prh) ) {
$m4is_5tmqg45z37r82cfb67prh = m4is_ydtq2fsztd1eds9ced5y::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_5fs91nj3y60();

}
return $m4is_5tmqg45z37r82cfb67prh;
}

static function m4is_7bjvakchd8q9yxry7c($m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [], $m4is_bsamg3fezf = null,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
if ( self::$m4is_zz74kb50 ) {
return '';
}
static $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy = 1;

if (is_feed() ) {
return;
}
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_n7x0afpz = [
'button_text' => 'Upload',

'contact_id' => self::$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
'error_msg' => 'Your file upload failed.',
'failure_actionsets' => '',

'failure_goals' => '',
'failure_tags' => '',
'failure_url' => '',
'maxsize' => 10000000,
'multiple' => false,
'no_errors' => false,

'rename' => '',
'success_actionsets' => '',
'success_goals' => '',
'success_msg' => 'Your file upload completed.',
'success_tags' =>
 '',
'success_url' => '',
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['multiple'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['multiple'],
 false);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['no_errors'] = m4is_25550fsqsnd4pn7txw2vh7x6::m4is_ge1jbhre5jqxhc56t5nrbk($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['no_errors'],
 false);
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['maxsize'] = (int) wp_convert_hr_to_bytes($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['maxsize']);

$m4is_1e01yt71bb2zs7kq6qapwncnwham8 = '';
if (! $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id']) {
return;
}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['maxsize'] > 10000000 || $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['maxsize'] < 1) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['maxsize'] = 10000000;

}
if ($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['multiple']) {
$m4is_1e01yt71bb2zs7kq6qapwncnwham8 = ' multiple="multiple" ';
}
$m4is_r0jqv9bdw7qcsnb = base64_encode(serialize([
'contact_id' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['contact_id'],
'error_msg' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['error_msg'],
'failure_actionsets' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_actionsets'],
'failure_goals' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_goals'],

'failure_tags' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_tags'],
'failure_url' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['failure_url'],

'maxsize' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['maxsize'],
'no_errors' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['no_errors'],
'rename' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['rename'],
'success_actionsets' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_actionsets'],

'success_goals' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_goals'],
'success_msg' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_msg'],

'success_tags' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_tags'],
'success_url' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['success_url'],

] ) );
$m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn = self::$m4is_132xe588j->m4is_h7gapv9fzmbf($m4is_r0jqv9bdw7qcsnb);
$m4is_gb01jqxh9ek2m =
'<form id="upload_' . $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy . '" action="" method="POST" enctype="multipart/form-data">' .
'<input type="hidden" name="memb_form_type" value="memb_filebox_upload">' .
'<input type="hidden" name="params" value="' . $m4is_r0jqv9bdw7qcsnb . '">' .
'<input type="hidden" name="signature" value="' . $m4is_k6ty6awxtg0jdp4xsf82k2b9ndxhn . '">' .
'<fieldset>' .
'<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['maxsize'] . '" />' .
'<div>' .
'<label for="fileselect">Files to upload:</label>' .
'<input type="file" id="fileselect_' . $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy . '" name="uploadedfiles[]" ' . $m4is_1e01yt71bb2zs7kq6qapwncnwham8 . ' required="required"/>' .
'</div>' .
'<div id="submitbutton_' . $m4is_kr9qf0fw8n555erpba0ydc0mdgxgy . '">' .
'<button type="submit">' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['button_text'] . '</button>' .
'</div>' .
'</fieldset>'.
'</form>';

$m4is_kr9qf0fw8n555erpba0ydc0mdgxgy++;
return $m4is_gb01jqxh9ek2m;
}
}
