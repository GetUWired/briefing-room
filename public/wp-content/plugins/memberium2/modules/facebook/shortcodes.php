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

final class m4is_jj39y699yc0xtqc41mxfsqt82c9439 {
private $app_id = '';
private function __construct() {
}
static private function m4is_7hnw1z1m615f2awsdr5k9m( $m4is_rqxytszfq5v6syth1csqqxvy5,
 $m4is_ra7dnjjzebn9h3t6k7a2p36, $m4is_syqymyz40rx4xgtqp8475ffwzw ) {
$m4is_rqxytszfq5v6syth1csqqxvy5 = strtolower( trim( $m4is_rqxytszfq5v6syth1csqqxvy5 ) );

$m4is_rqxytszfq5v6syth1csqqxvy5 = in_array( $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_ra7dnjjzebn9h3t6k7a2p36 ) ? $m4is_rqxytszfq5v6syth1csqqxvy5 : $m4is_syqymyz40rx4xgtqp8475ffwzw;

return $m4is_rqxytszfq5v6syth1csqqxvy5;
}

static function m4is_z4tsx9ex($m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = null,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
$m4is_n7x0afpz = [
'color' => 'light', 
'mobile' => '',
'order' => 'social',
'posts' =>
 10,
'url' => get_permalink(), 
'width' => 550,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_gb01jqxh9ek2m = '<div class="fb-comments" data-href="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'] . '" data-numposts="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['posts'] . '" data-colorscheme="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['color'] . '" data-order-by="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order'] . '" data-width="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] . '"></div>';

return $m4is_gb01jqxh9ek2m;
}

static function m4is_5exmhamp0p8gy6wkj1e1x2vatywpqc($m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = null,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
$m4is_n7x0afpz = [
'parent' => 'false',
'url' => '', 
'width' => 560,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_gb01jqxh9ek2m = '<div class="fb-comment-embed" data-href="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'] . '" data-width="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] . '" data-include-parent="' . $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['parent'] . '"></div>';

return $m4is_gb01jqxh9ek2m;
}

static function m4is_j72krzcg8fez28jvsxfk4pzbgn( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = null,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
$m4is_n7x0afpz = [
'color' => 'light',
'coppa' => 'false',
'faces' => 'false',
'layout' =>
 'standard',
'size' => 'small',
'url' => 'https://www.facebook.com/memberium/',
'width' => -1,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['color'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['color'],
 ['light', 'dark',], 'light' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['coppa'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['coppa'],
 ['true', 'false',], 'true' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'],
 ['standard', 'button_count', 'box_count'], 'standard' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['faces'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['faces'],
 ['true', 'false'], 'false' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'],
 ['large', 'small'], 'small' );
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'] == 'standard' ) {
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] == -1 ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] = 450;

}
$m4is_xbd794svwhfdr6w6bs0f = 225;
$m4is_vjk77pbm0abqv418x9htja4w8yrsvv = 35;
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['faces'] == 'true' ) {
$m4is_vjk77pbm0abqv418x9htja4w8yrsvv = 80;

}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] = max( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'], $m4is_xbd794svwhfdr6w6bs0f );

}
elseif ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'] == 'box_count' ) {
$m4is_vjk77pbm0abqv418x9htja4w8yrsvv = 65;
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] = 55;

}
elseif ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'] == 'button_count' ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] = 90;

$m4is_vjk77pbm0abqv418x9htja4w8yrsvv = 20;
}
$m4is_gv7vjyv2c6g3nepw6 = [
'data-colorscheme' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['color'],

'data-href' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'],
'data-kid-directed-site' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['coppa'],

'data-layout' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'],
'data-show-faces' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['faces'],

'data-size' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'],
'data-width' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'],
'data-height' =>
 $m4is_vjk77pbm0abqv418x9htja4w8yrsvv,
];
$m4is_wa9w0728e08dpm5r30 = '';
foreach( $m4is_gv7vjyv2c6g3nepw6 as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp ) {
if ( ! empty( $m4is_29gzevpx8rbkp ) ) {
$m4is_wa9w0728e08dpm5r30 .= $m4is_bqhtspcavhb01spmfd3x . '="' . $m4is_29gzevpx8rbkp .'"';

}
}
$m4is_gb01jqxh9ek2m = '<div class="fb-follow" ' . $m4is_wa9w0728e08dpm5r30 . ' ></div>';
return $m4is_gb01jqxh9ek2m;
}

static function m4is_xe34qrtqv1djtn5k( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
$m4is_n7x0afpz = [
'action' => 'like',
'color' => 'light',
'coppa' =>
 'false',
'faces' => 'false',
'layout' => 'standard',
'referral' => '',
'share' => 'false',
'size' => 'small',
'url' => get_permalink(),

'width' => 0,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['action'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['action'],
 ['like', 'recommend'], 'like' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['color'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['color'],
 ['light', 'dark'], 'light' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['coppa'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['coppa'],
 ['true', 'false'], 'false' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'],
 ['standard', 'button_count', 'button', 'box_count'], 'standard' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['share'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'],
 ['true', 'false'], 'false');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['faces'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['faces'],
 ['true', 'false'], 'false' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'],
 ['small', 'large'], 'small' );
if ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'] == 'standard' ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] = min( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'],
 225 );
}
elseif ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'] == 'box_count' ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] = min( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'],
 55 );
}
elseif ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'] == 'button_count' ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] = min( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'],
 90 );
}
elseif ( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'] == 'button' ) {
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] = min( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'],
 47 );
}
$m4is_gv7vjyv2c6g3nepw6 = [
'data-action' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['action'],
'data-colorscheme' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['color'],

'data-href' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'],
'data-kid-directed-site' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['coppa'],

'data-layout' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'],
'data-ref' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['referral'],
'data-share' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['share'],
'data-show-faces' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['faces'],
'data-size' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'],

'data-width' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'],
];
$m4is_wa9w0728e08dpm5r30 = '';
foreach( $m4is_gv7vjyv2c6g3nepw6 as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp ) {
if ( ! empty( $m4is_29gzevpx8rbkp ) ) {
$m4is_wa9w0728e08dpm5r30 .= $m4is_bqhtspcavhb01spmfd3x . '="' . $m4is_29gzevpx8rbkp .'"';

}
}
return '<div class="fb-like" ' . $m4is_wa9w0728e08dpm5r30 . ' ></div>';
}

static function m4is_cvd858b3bx9vxts( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
$m4is_n7x0afpz = [
'adapt' => 'true',
'faces' => 'true',
'height' =>
 500,
'hide_cover' => 'false',
'hide_cta' => 'false',
'small_header' => 'false',
'tabs' => 'timeline',
'url' => 'https://www.facebook.com/memberium/',

'width' => 340,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] = max( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'], 180 );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] = min( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'],
 500 );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['height'] = max( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['height'], 70 );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['hide_cover'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['hide_cover'],
 ['true', 'false'], 'false' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['faces'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['faces'],
 ['true', 'false'], 'true' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['hide_cta'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['hide_cta'],
 ['true', 'false'], 'false' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['small_header'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['small_header'],
 ['true', 'false'], 'false' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['adapt'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['adapt'],
 ['true', 'false'], 'true' );
$m4is_gv7vjyv2c6g3nepw6 = [
'data-href' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'],
'data-width' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'],
'data-height' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['height'],
'data-tabs' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['tabs'],

'data-hide-cover' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['hide_cover'],
'datadata-show-facepile' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['faces'],

'data-hide-cta' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['hide_cta'],
'data-small-header' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['small_header'],

'data-adapt-container-width' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['adapt'],
];
$m4is_wa9w0728e08dpm5r30 = '';
foreach( $m4is_gv7vjyv2c6g3nepw6 as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp ) {
if ( ! empty( $m4is_29gzevpx8rbkp ) ) {
$m4is_wa9w0728e08dpm5r30 .= $m4is_bqhtspcavhb01spmfd3x . '="' . $m4is_29gzevpx8rbkp .'"';

}
}
return '<div class="fb-like" ' . $m4is_wa9w0728e08dpm5r30 . ' ></div>';
}

static function m4is_mrk08z4y7w45nsh3e9dw3gyatm( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
$m4is_n7x0afpz = [
'size' => 'large',
'url' => get_permalink(),

];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'],
 ['small', 'large'], 'large' );
$m4is_gv7vjyv2c6g3nepw6 = [
'data-size' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'],
'data-uri' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'],
];
$m4is_wa9w0728e08dpm5r30 = '';
foreach( $m4is_gv7vjyv2c6g3nepw6 as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp ) {
if ( ! empty( $m4is_29gzevpx8rbkp ) ) {
$m4is_wa9w0728e08dpm5r30 .= $m4is_bqhtspcavhb01spmfd3x . '="' . $m4is_29gzevpx8rbkp .'"';

}
}
$m4is_gb01jqxh9ek2m = '<div class="fb-save" ' . $m4is_wa9w0728e08dpm5r30 . '></div>';
return $m4is_gb01jqxh9ek2m;
}

static function m4is_mtbd8vcpr7tpnb3nwgekxetcw0b9( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
$m4is_n7x0afpz = [
'color' => 'light',
'coppa' => 'false',
'referral' =>
 '',
'url' => get_permalink(),
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['color'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['color'],
 ['light', 'dark'], 'light' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['coppa'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['coppa'],
 ['true', 'false'], 'false' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'] = 'small';
$m4is_gv7vjyv2c6g3nepw6 = [
'data-colorscheme' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['color'],
'data-href' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'],
'data-kid-directed-site' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['coppa'],
'data-ref' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['referral'],
'data-size' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'],

];
$m4is_wa9w0728e08dpm5r30 = '';
foreach( $m4is_gv7vjyv2c6g3nepw6 as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp ) {
if ( ! empty( $m4is_29gzevpx8rbkp ) ) {
$m4is_wa9w0728e08dpm5r30 .= $m4is_bqhtspcavhb01spmfd3x . '="' . $m4is_29gzevpx8rbkp .'"';

}
}
$m4is_gb01jqxh9ek2m = '<div class="fb-send" ' . $m4is_wa9w0728e08dpm5r30 . ' ></div>';
return $m4is_gb01jqxh9ek2m;
}

static function m4is_0zcy6z16rxs22z8sbmypvrqxfxjz( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf = null, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
$m4is_n7x0afpz = [
'layout' => 'icon_link',
'mobile' => 'false',

'size' => 'small',
'url' => get_permalink(),
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts( $m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'],
 ['box_count', 'button_count', 'button', 'icon_link'], 'icon_link' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['mobile'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['mobile'],
 ['true', 'false'], 'false' );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'] = self::m4is_7hnw1z1m615f2awsdr5k9m( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'],
 ['small', 'large'], 'small' );
$m4is_gv7vjyv2c6g3nepw6 = [
'data-href' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'],
'data-layout' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['layout'],
'data-mobile_iframe' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['mobile'],
'data-size' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['size'],
];
$m4is_wa9w0728e08dpm5r30 = '';
foreach( $m4is_gv7vjyv2c6g3nepw6 as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp ) {
if ( ! empty( $m4is_29gzevpx8rbkp ) ) {
$m4is_wa9w0728e08dpm5r30 .= $m4is_bqhtspcavhb01spmfd3x . '="' . $m4is_29gzevpx8rbkp .'"';

}
}
$m4is_gb01jqxh9ek2m = '<div class="fb-share-button" ' . $m4is_wa9w0728e08dpm5r30 . ' >';
$m4is_gb01jqxh9ek2m .= '<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=' . urlencode( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'] ) . '">Share</a></div>';

return $m4is_gb01jqxh9ek2m;
}

static function m4is_p0329dx2xd3a7pb8eh3k2h6fev1f2yde( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_bsamg3fezf = null,
 $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '' ) {
$m4is_n7x0afpz = [
'post' => 'false',
'url' => '', 
'width' => 500,
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = shortcode_atts($m4is_n7x0afpz, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 'memberium');
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'] = max( $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'], 220 );
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['post'] = self::m4is_7hnw1z1m615f2awsdr5k9m($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['post'],
 ['true', 'false'], 'false');
$m4is_gv7vjyv2c6g3nepw6 = [
'data-href' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['url'],
'data-width' =>
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['width'],
'data-show-text' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['post'],
];
$m4is_wa9w0728e08dpm5r30 = '';

foreach( $m4is_gv7vjyv2c6g3nepw6 as $m4is_bqhtspcavhb01spmfd3x => $m4is_29gzevpx8rbkp ) {
if ( ! empty( $m4is_29gzevpx8rbkp ) ) {
$m4is_wa9w0728e08dpm5r30 .= $m4is_bqhtspcavhb01spmfd3x . '="' . $m4is_29gzevpx8rbkp .'"';

}
}
$m4is_gb01jqxh9ek2m = '<div class="fb-video" ' . $m4is_wa9w0728e08dpm5r30 . ' ><div class="fb-xfbml-parse-ignore"></div></div>';

return $m4is_gb01jqxh9ek2m;
}
}