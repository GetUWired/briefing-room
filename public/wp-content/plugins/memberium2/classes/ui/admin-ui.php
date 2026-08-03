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


class_exists('m4is_knfcbrvkjrz3n8k8y6gf') || die();

final class m4is_dv250ra9xbtaf {
static $m4is_zzx6ah72mtj4nkb01hrq;
static $m4is_1ypt2dzwfm;
static function m4is_6q0wmftmrk5xnqk2ah3wk3ekap64() {
self::$m4is_1ypt2dzwfm = 'https://keap.memberium.com/';

self::$m4is_zzx6ah72mtj4nkb01hrq = [];
}

static function m4is_s93t5xqe7a5( int $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, string $m4is_cwv4aa9zak1r37 = 'Read More...' ) : string {
$m4is_65aka8xf2h8j = '';

if ( empty( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) ) {
return '';
}
return sprintf( ' (<strong><a href="%s?page_id=%d" target="_blank">%s</a></strong>) ',
 self::$m4is_1ypt2dzwfm, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_cwv4aa9zak1r37 );
}




static function m4is_atwps00cdt9a5bc0srjtfz75wh4c( string $m4is_5tmqg45z37r82cfb67prh,
 string $m4is_h7zwy5f0w3y9gx3wm = 'update' ) {
self::$m4is_zzx6ah72mtj4nkb01hrq[] = [
'type' => $m4is_h7zwy5f0w3y9gx3wm,
'message' =>
 $m4is_5tmqg45z37r82cfb67prh
];
}

static function m4is_dagbw7aea4y90yradk9x7b() {
if ( ! empty( self::$m4is_zzx6ah72mtj4nkb01hrq ) ) {
foreach ( self::$m4is_zzx6ah72mtj4nkb01hrq as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_mj7yctqp9kbc12ajjpjcrgqez9wz ) {
if ( $m4is_mj7yctqp9kbc12ajjpjcrgqez9wz['type'] == 'update' ) {
$m4is_qnaeqxzj2va = 'updated';

}
elseif ( $m4is_mj7yctqp9kbc12ajjpjcrgqez9wz['type'] == 'error' ) {
$m4is_qnaeqxzj2va = 'error';
}
printf( '<div class="%s"><p>%s</p></div>',
 $m4is_qnaeqxzj2va, $m4is_mj7yctqp9kbc12ajjpjcrgqez9wz['message'] );
unset( self::$m4is_zzx6ah72mtj4nkb01hrq[$m4is_bqhtspcavhb01spmfd3x] );

}
}
}




static function m4is_6ejn23xcqf1wv93y2jkp4jzp5h01tf() : array {
$m4is_ywpr6y4a0j72383nm72cck6wv = [];
$m4is_zpbgfgfkqf2c4ast12shxs8gthy = get_post_types(['public' =>
 true]);
if (is_array($m4is_zpbgfgfkqf2c4ast12shxs8gthy) ) {
foreach($m4is_zpbgfgfkqf2c4ast12shxs8gthy as $m4is_yhdk2h7srcr7n5mzjnw7m6b) {
$m4is_ywpr6y4a0j72383nm72cck6wv[] = $m4is_yhdk2h7srcr7n5mzjnw7m6b;

}
}
return $m4is_ywpr6y4a0j72383nm72cck6wv;
}




static function m4is_1nj1ys2vvgakb6bgcgt6g( string $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = '',
 string $m4is_hce1y1a4qd65zhnwsj = '', int $m4is_rqxytszfq5v6syth1csqqxvy5 = 0, array $m4is_g61yzqs7ecta0xztr70d7v = [] ) {
$m4is_n7x0afpz = [
'class' =>
 '',
'disabled' => '',
'help_id' => 0,
'id' => $m4is_hce1y1a4qd65zhnwsj,
'max' => 999999,
'min' => 0,
'size' => 8,
'step' => 1,
'style' =>
 '',
'units' => '',
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args($m4is_g61yzqs7ecta0xztr70d7v, $m4is_n7x0afpz);
$m4is_g61yzqs7ecta0xztr70d7v['size'] -= (int) $m4is_g61yzqs7ecta0xztr70d7v['size'];

$m4is_g61yzqs7ecta0xztr70d7v['step'] -= (int) $m4is_g61yzqs7ecta0xztr70d7v['step'];
$m4is_qc36n7jdf = '';
$m4is_qc36n7jdf .= empty($m4is_g61yzqs7ecta0xztr70d7v['disabled']) ? '' : ' disabled="disabled" ';

$m4is_g61yzqs7ecta0xztr70d7v = [
$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0,
$m4is_qc36n7jdf,
$m4is_g61yzqs7ecta0xztr70d7v['id'],
$m4is_hce1y1a4qd65zhnwsj,

$m4is_g61yzqs7ecta0xztr70d7v['min'],
$m4is_g61yzqs7ecta0xztr70d7v['max'],
$m4is_g61yzqs7ecta0xztr70d7v['size'],
$m4is_g61yzqs7ecta0xztr70d7v['step'],

$m4is_rqxytszfq5v6syth1csqqxvy5,
$m4is_g61yzqs7ecta0xztr70d7v['class'],
$m4is_g61yzqs7ecta0xztr70d7v['style'],
$m4is_g61yzqs7ecta0xztr70d7v['units'],

self::m4is_s93t5xqe7a5( $m4is_g61yzqs7ecta0xztr70d7v['help_id'] ),
];
vprintf( "<li><label>%s</label><input type=number %s id='%s' name='%s' min=%s max=%s size=%s step=%s value='%s' class='%s' style='%s' > %s %s</li>\n\n",
 $m4is_g61yzqs7ecta0xztr70d7v );
}

static function m4is_0ba0x0q69hk5ww2sn2ww( string $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0, string $m4is_hce1y1a4qd65zhnwsj,
 int $m4is_w7pk6jr4r = 0, bool $m4is_c9nryf13e43y9jensddce = false, $m4is_gb01jqxh9ek2m = true ) {
$m4is_mtjbb6sywmpnaz3125h6ycckx = $m4is_c9nryf13e43y9jensddce ? 'checked=checked' : '';

$m4is_g61yzqs7ecta0xztr70d7v = [
$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0,
$m4is_hce1y1a4qd65zhnwsj,
$m4is_hce1y1a4qd65zhnwsj,
$m4is_mtjbb6sywmpnaz3125h6ycckx,

self::m4is_s93t5xqe7a5( $m4is_w7pk6jr4r ),
];
$m4is_qc36n7jdf = vsprintf( "<li><label>%s</label><input type=hidden value=0 name='%s'><label style='width:75px;'><input type=checkbox value=1 class=ios-switch name='%s' %s /><div class=switch></div></label>%s</li>\n\n",
 $m4is_g61yzqs7ecta0xztr70d7v );
if ( $m4is_gb01jqxh9ek2m ) {
echo $m4is_qc36n7jdf;
}
return $m4is_qc36n7jdf;
}

static function m4is_hqy46nhxr7gxhmfvdx(string $m4is_hce1y1a4qd65zhnwsj = '',
 bool $m4is_rqxytszfq5v6syth1csqqxvy5 = false, array $m4is_g61yzqs7ecta0xztr70d7v = [] ) {
if (empty($m4is_hce1y1a4qd65zhnwsj) ) {
return;

}
$m4is_n7x0afpz = [
'label' => '',
'echo' => true,
'id' => $m4is_hce1y1a4qd65zhnwsj,
'helpid' => 0,
'autofocus' => false,
'class' =>
 '',
'disabled' => false,
'form' => '',
'required' => false,
'style' => '',
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args($m4is_g61yzqs7ecta0xztr70d7v,
 $m4is_n7x0afpz);
$output = '';
$output .= '<input type="hidden" value="0" name="' . $m4is_hce1y1a4qd65zhnwsj . '">';
$output .= '<label style="width:75px;"><input type="checkbox" value="1" class="ios-switch" name="' . $m4is_hce1y1a4qd65zhnwsj . '" ' . ($m4is_rqxytszfq5v6syth1csqqxvy5 == 1 ? ' checked="checked" ' : '') . ' ';

$output .= '/><div class="switch"></div></label>';
$output .= m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5($m4is_g61yzqs7ecta0xztr70d7v['helpid']) . "</li>\n\n";

if ($m4is_g61yzqs7ecta0xztr70d7v['echo']) {
echo $output;
}
return $output;
}

static function m4is_jjvmzpmqm0yn4t0790xc22wzd3g(string $m4is_hce1y1a4qd65zhnwsj = '',
 array $m4is_ra7dnjjzebn9h3t6k7a2p36 = [], $m4is_cegjvya4jj68mdszk = '', array $m4is_g61yzqs7ecta0xztr70d7v = [] ) {
if (empty($m4is_ra7dnjjzebn9h3t6k7a2p36) || empty($m4is_hce1y1a4qd65zhnwsj) ) {
return;

}
if (! is_array($m4is_cegjvya4jj68mdszk) ) {
$m4is_cegjvya4jj68mdszk = explode(',', $m4is_cegjvya4jj68mdszk);
}
$m4is_n7x0afpz = [
'autofocus' =>
 false,
'class' => '',
'disabled' => false,
'case_sensitive' => false,
'echo' => true,
'form' => '',
'id' => $m4is_hce1y1a4qd65zhnwsj,

'multiple' => false,
'required' => false,
'size' => 1,
'style' => '',
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args($m4is_g61yzqs7ecta0xztr70d7v,
 $m4is_n7x0afpz);
$m4is_gb01jqxh9ek2m = '<select name="' . $m4is_hce1y1a4qd65zhnwsj . '" ';
if ($m4is_g61yzqs7ecta0xztr70d7v['autofocus']) { $m4is_gb01jqxh9ek2m .= ' autofocus="autofocus"';
 }
if ($m4is_g61yzqs7ecta0xztr70d7v['disabled']) { $m4is_gb01jqxh9ek2m .= ' disabled="disabled"'; }
if ($m4is_g61yzqs7ecta0xztr70d7v['multiple']) { $m4is_gb01jqxh9ek2m .= ' multiple="multiple"';
 }
if ($m4is_g61yzqs7ecta0xztr70d7v['required']) { $m4is_gb01jqxh9ek2m .= ' required="required"'; }
if ($m4is_g61yzqs7ecta0xztr70d7v['size']) { $m4is_gb01jqxh9ek2m .= ' size="' . (int) $m4is_g61yzqs7ecta0xztr70d7v['size'] . '"';
 }
if (! empty($m4is_g61yzqs7ecta0xztr70d7v['class']) ) { $m4is_gb01jqxh9ek2m .= ' class="' . $m4is_g61yzqs7ecta0xztr70d7v['class'] . '"';
 }
if (! empty($m4is_g61yzqs7ecta0xztr70d7v['style']) ) { $m4is_gb01jqxh9ek2m .= ' style="' . $m4is_g61yzqs7ecta0xztr70d7v['style'] . '"';
 }
if (! empty($m4is_g61yzqs7ecta0xztr70d7v['form']) ) { $m4is_gb01jqxh9ek2m .= ' form="' . $m4is_g61yzqs7ecta0xztr70d7v['form'] . '"';
 }
if (! empty($m4is_g61yzqs7ecta0xztr70d7v['id']) ) { $m4is_gb01jqxh9ek2m .= ' id="' . $m4is_g61yzqs7ecta0xztr70d7v['id'] . '"'; }
$m4is_gb01jqxh9ek2m .= ' size="' . $m4is_g61yzqs7ecta0xztr70d7v['size'] . '">';

foreach($m4is_ra7dnjjzebn9h3t6k7a2p36 as $m4is_rqxytszfq5v6syth1csqqxvy5 => $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0) {
$m4is_fe42r2djxgf1h7pt = false;

foreach($m4is_cegjvya4jj68mdszk as $m4is_syqymyz40rx4xgtqp8475ffwzw) {
if ($m4is_g61yzqs7ecta0xztr70d7v['case_sensitive']) {
$m4is_fe42r2djxgf1h7pt = $m4is_fe42r2djxgf1h7pt || (bool) ($m4is_rqxytszfq5v6syth1csqqxvy5 == $m4is_syqymyz40rx4xgtqp8475ffwzw);

}
else {
$m4is_fe42r2djxgf1h7pt = $m4is_fe42r2djxgf1h7pt || (bool) (0 === strcasecmp($m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_syqymyz40rx4xgtqp8475ffwzw) );

}
}
$m4is_gb01jqxh9ek2m .= '<option value="' . $m4is_rqxytszfq5v6syth1csqqxvy5 . '" ' . ($m4is_fe42r2djxgf1h7pt ? ' selected="selected" ' : '') . '>' . $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 . '</option>';

}
$m4is_gb01jqxh9ek2m .= '</select>';
if ($m4is_g61yzqs7ecta0xztr70d7v['disabled']) {
foreach($m4is_cegjvya4jj68mdszk as $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_gb01jqxh9ek2m = "<input type='hidden' name='{$m4is_hce1y1a4qd65zhnwsj}[]' value='{$m4is_rqxytszfq5v6syth1csqqxvy5}' />";

}
}
if ($m4is_g61yzqs7ecta0xztr70d7v['echo']) {
echo "\n\n", $m4is_gb01jqxh9ek2m, "\n\n";
}
else {
return "\n\n" . $m4is_gb01jqxh9ek2m . "\n\n";

}
}

static function m4is_fnyrytswd4ra0cj8g9fka3e9(string $m4is_hce1y1a4qd65zhnwsj, array $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab = [] ) {
$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['help_text'] = isset($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['help_text']) ? $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['help_text'] : false;

$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['help_id'] = isset($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['help_id']) ? $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['help_id'] : 0;

$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['type'] = ! empty($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['type']) ? $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['type'] : 'text';

$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['id'] = ! empty($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['id']) ? $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['id'] : $m4is_hce1y1a4qd65zhnwsj;

$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['name'] = ! empty($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['name']) ? $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['name'] : $m4is_hce1y1a4qd65zhnwsj;

$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['required'] = ! empty($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['required']) ? true : false;
$m4is_19x1c17et728k945 = [
'placeholder',
 'size', 'style', 'class', 'value', 'label', 'type', 'name',
'wrapper_class', 'help_id', 'min', 'max', 'step'
];
foreach($m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7) {
$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[$m4is_j8j55t8dz79m7] = isset($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[$m4is_j8j55t8dz79m7]) ? $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[$m4is_j8j55t8dz79m7] : '';

}
$m4is_19x1c17et728k945 = ['custom'];
foreach($m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7) {
$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[$m4is_j8j55t8dz79m7] = isset($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[$m4is_j8j55t8dz79m7]) ? $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[$m4is_j8j55t8dz79m7] : [];

}
if (! empty($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['custom']) ) {
foreach ($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['custom'] as $m4is_bqhtspcavhb01spmfd3x =>
 $m4is_29gzevpx8rbkp){
$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['custom'][$m4is_bqhtspcavhb01spmfd3x] = esc_attr($m4is_bqhtspcavhb01spmfd3x) . '="' . esc_attr($m4is_29gzevpx8rbkp) . '" ';

}
}
if ($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['label']) {
echo '<p class="', $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['wrapper_class'],
 '">';
echo '<label for="', esc_attr($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['id']), '">', wp_kses_post($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['label']),
 '</label>', "\n";
}
echo '<input ';
$m4is_19x1c17et728k945 = ['placeholder', 'size', 'style', 'class', 'value', 'label', 'type', 'name',
 'min', 'max', 'step'];
echo $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['required'] ? ' required=required ' : '';
foreach($m4is_19x1c17et728k945 as $m4is_j8j55t8dz79m7) {
echo ( ($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[$m4is_j8j55t8dz79m7] <> '') ? $m4is_j8j55t8dz79m7 . '="'. esc_attr($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab[$m4is_j8j55t8dz79m7]) . '" ' : '');

}
foreach($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['custom'] as $m4is_j8j55t8dz79m7) {
echo $m4is_j8j55t8dz79m7;
}
echo '/>', "\n";
echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['help_id'],
 $m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['help_text']);
if ($m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab['label']) {
echo '</p>';
}
}

static function m4is_p488tphrcjnwcmgtefr0jceb9ep(string $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = '',
 string $m4is_hce1y1a4qd65zhnwsj = '', string $m4is_rqxytszfq5v6syth1csqqxvy5 = '', string $m4is_p37d32jsv3gabvxw15yzf = '', array $m4is_g61yzqs7ecta0xztr70d7v = [] ) {
$m4is_n7x0afpz = [
'help_id' =>
 0,
'style' => '',
'class' => '',
'naked' => false,
'id' => $m4is_hce1y1a4qd65zhnwsj,
'multiple' => '',
'units' => '',
'disabled' =>
 '',
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args($m4is_g61yzqs7ecta0xztr70d7v, $m4is_n7x0afpz);
$m4is_g61yzqs7ecta0xztr70d7v['multiple'] = empty($m4is_g61yzqs7ecta0xztr70d7v['multiple']) ? '' : 'multiple';

$m4is_qc36n7jdf = '';
$m4is_qc36n7jdf .= empty($m4is_g61yzqs7ecta0xztr70d7v['disabled']) ? '' : ' disabled="disabled" ';
if (! $m4is_g61yzqs7ecta0xztr70d7v['naked']) {
echo '<li>';

}
echo "<label for='{$m4is_hce1y1a4qd65zhnwsj}'>{$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0}</label>",
"<input {$m4is_qc36n7jdf} value='{$m4is_rqxytszfq5v6syth1csqqxvy5}' type=hidden id='{$m4is_g61yzqs7ecta0xztr70d7v['id']}' name='{$m4is_hce1y1a4qd65zhnwsj}' {$m4is_g61yzqs7ecta0xztr70d7v['multiple']} class='dropdown {$m4is_p37d32jsv3gabvxw15yzf} {$m4is_g61yzqs7ecta0xztr70d7v['class']}' style='{$m4is_g61yzqs7ecta0xztr70d7v['style']}' /> {$m4is_g61yzqs7ecta0xztr70d7v['units']} ",

m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5($m4is_g61yzqs7ecta0xztr70d7v['help_id']);
if (! $m4is_g61yzqs7ecta0xztr70d7v['naked']) {
echo '</li>';

}
}

static function m4is_jt0y34knx7ws34fc4xjmj90gq(string $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = '', string $m4is_hce1y1a4qd65zhnwsj = '',
 string $m4is_rqxytszfq5v6syth1csqqxvy5 = '', array $m4is_ra7dnjjzebn9h3t6k7a2p36 = [], array $m4is_g61yzqs7ecta0xztr70d7v = [] ) {
$m4is_n7x0afpz = [
'class' =>
 'basic-single',
'help_id' => 0,
'id' => $m4is_hce1y1a4qd65zhnwsj,
'style' => '',
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args($m4is_g61yzqs7ecta0xztr70d7v,
 $m4is_n7x0afpz);
echo "<li><label>{$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0}</label>",
"<select id='{$m4is_g61yzqs7ecta0xztr70d7v['id']}' class='basic-single {$m4is_g61yzqs7ecta0xztr70d7v['class']}' name='{$m4is_hce1y1a4qd65zhnwsj}' style='width:250px;'>";

foreach ($m4is_ra7dnjjzebn9h3t6k7a2p36 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_xc0wh8hch3) {
$selected = ($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh == $m4is_rqxytszfq5v6syth1csqqxvy5) ? 'selected=selected' : '';

echo "<option value='{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}' {$selected}>{$m4is_xc0wh8hch3}</option>";
}
echo '</select>', m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5($m4is_g61yzqs7ecta0xztr70d7v['help_id']),
 "</li>\n\n";
}

static function m4is_f8vws9aeenhp(string $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = '', string $m4is_hce1y1a4qd65zhnwsj = '',
 string $m4is_rqxytszfq5v6syth1csqqxvy5 = '', array $m4is_g61yzqs7ecta0xztr70d7v = [] ) {
$m4is_n7x0afpz = [
'class' => '',
'disabled' =>
 false,
'help_id' => 0,
'id' => $m4is_hce1y1a4qd65zhnwsj,
'pattern' => '',
'placeholder' => '',
'size' => 40,
'style' => '',
'type' =>
 'text',
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args($m4is_g61yzqs7ecta0xztr70d7v, $m4is_n7x0afpz);
$m4is_g61yzqs7ecta0xztr70d7v['size'] = (int) $m4is_g61yzqs7ecta0xztr70d7v['size'];

$m4is_g61yzqs7ecta0xztr70d7v['disabled'] = $m4is_g61yzqs7ecta0xztr70d7v['disabled'] ? ' disabled=disabled ' : '';
$m4is_g61yzqs7ecta0xztr70d7v['pattern'] = $m4is_g61yzqs7ecta0xztr70d7v['pattern'] ? " pattern='{$m4is_g61yzqs7ecta0xztr70d7v['pattern']}' " : '';

echo "<li><label>{$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0}</label>",
"<input type='{$m4is_g61yzqs7ecta0xztr70d7v['type']}' id='{$m4is_g61yzqs7ecta0xztr70d7v['id']}' {$m4is_g61yzqs7ecta0xztr70d7v['pattern']} name='{$m4is_hce1y1a4qd65zhnwsj}' placeholder='{$m4is_g61yzqs7ecta0xztr70d7v['placeholder']}' size='{$m4is_g61yzqs7ecta0xztr70d7v['size']}' value='{$m4is_rqxytszfq5v6syth1csqqxvy5}' {$m4is_g61yzqs7ecta0xztr70d7v['disabled']}>",

self::m4is_s93t5xqe7a5($m4is_g61yzqs7ecta0xztr70d7v['help_id']), "</li>\n\n";
}

static function m4is_3s8wyjy7yt8tfncpa7w(int $m4is_rqxytszfq5v6syth1csqqxvy5 = 0,
 int $m4is_jm3x4nend6zh98f6 = 0, int $m4is_rjmk9nzcsr0 = 0, array $m4is_g61yzqs7ecta0xztr70d7v = [] ) : string {
$m4is_n7x0afpz = [
'good' =>
 'font-weight:bold;color:green;',
'ok' => 'font-weight:bold;color:gold;',
'bad' => 'font-weight:bold;color:red;'
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args($m4is_g61yzqs7ecta0xztr70d7v,
 $m4is_n7x0afpz);
$m4is_xnr85v7h4qmw = 'good';
if ($m4is_rqxytszfq5v6syth1csqqxvy5 < $m4is_rjmk9nzcsr0) {
$m4is_xnr85v7h4qmw = 'ok';

}
elseif ($m4is_rqxytszfq5v6syth1csqqxvy5 > $m4is_jm3x4nend6zh98f6) {
$m4is_xnr85v7h4qmw = 'bad';
}
return "<span style='{$m4is_g61yzqs7ecta0xztr70d7v[$m4is_xnr85v7h4qmw]}'>{$m4is_rqxytszfq5v6syth1csqqxvy5}</span>";

}

static function m4is_cgv7f4tfx4f4589tjrhxk(string $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh) : string {
if (strpos($_SERVER['REQUEST_URI'],
 '?') === false) {
$m4is_txw5cpax2gpn3mr3m1p1g2tr4g9sw = '?';
}
else {
$m4is_txw5cpax2gpn3mr3m1p1g2tr4g9sw = '&';
}
return $_SERVER['REQUEST_URI'] . $m4is_txw5cpax2gpn3mr3m1p1g2tr4g9sw . 'memberium_ignore_notice=' . urlencode($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh);

}


static function m4is_w5ahc3c8k(string $m4is_j8j55t8dz79m7, string $m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = '') : string {
$m4is_j8j55t8dz79m7 = strtolower(trim($m4is_j8j55t8dz79m7) );

$m4is_r2d01p7w70wh2g5 = 'memberium::welcomecontent::' . $m4is_j8j55t8dz79m7;
if ( defined( 'MEMBERIUM_BETA' ) && constant( 'MEMBERIUM_BETA' ) ) {
delete_transient($m4is_r2d01p7w70wh2g5);

}
$m4is_bsamg3fezf = get_transient($m4is_j8j55t8dz79m7);
if (! $m4is_bsamg3fezf) {
$m4is_h2pzseyrz59an20zkgtagebsnp9m8w2 = urlencode($m4is_j8j55t8dz79m7);

$m4is_t9svq56t4ysv1rsgy1g61g = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_5kywzj74m8ht8s0();

if (empty($m4is_pp334hs6rfvw2vqjd400r3cmsn2kq) ) {
$m4is_pp334hs6rfvw2vqjd400r3cmsn2kq = "https://licenseserver.webpowerandlight.com/welcome/index.php?tab={$m4is_h2pzseyrz59an20zkgtagebsnp9m8w2}&version={$m4is_t9svq56t4ysv1rsgy1g61g}";

}
$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz = wp_remote_get($m4is_pp334hs6rfvw2vqjd400r3cmsn2kq);
if (is_a($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz,
 'WP_Error') ) {
if (isset($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->errors['http_request_failed'][0]) ) {
$m4is_bsamg3fezf = "<p>Loading Remote Page Content Failed:  {$m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz->errors['http_request_failed'][0]}</p>";

}
else {
$m4is_bsamg3fezf = '<p>Loading Remote Page Content Failed</p>';
}
}
else {
$m4is_bsamg3fezf = isset($m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['body']) ? $m4is_6dsv58afp8reaqgy86vy9ykngxsp2sz['body'] : '<p>No Content Available</p>';

if ($m4is_bsamg3fezf > '') {
set_transient($m4is_r2d01p7w70wh2g5, $m4is_bsamg3fezf, 3600);
}
else {
$m4is_bsamg3fezf = '<p>Page content temporarily unavailable.</p>';

}
}
}
return $m4is_bsamg3fezf;
}

static function m4is_tfgtbqq1d25bqt5er88w13rd() {

$m4is_5cwxte5s0w98metxktf = wp_get_themes();
$m4is_t27g2c70k89zj1zxpdkz833kr45hx = [];

$m4is_t27g2c70k89zj1zxpdkz833kr45hx[] = [
'id' => '',
'text' => '(Default)'
];
foreach ( $m4is_5cwxte5s0w98metxktf as $m4is_hce1y1a4qd65zhnwsj =>
 $m4is_8msjtr5p ) {
$m4is_t27g2c70k89zj1zxpdkz833kr45hx[] = [
'id' => $m4is_hce1y1a4qd65zhnwsj,
'text' => $m4is_8msjtr5p->Name
];
}
return json_encode( $m4is_t27g2c70k89zj1zxpdkz833kr45hx );

}

public static function m4is_9mae5sykmd575z97mssmcpdtn5rz() : array {
global $wp_roles;
$m4is_scw26rr1c3sxntaajy0c6sz08e2qxnd3 = $wp_roles->roles;

$m4is_7kwstyma = [];
$m4is_p4jmvrs77xj4j50b37kr3h0b = [
'activate_plugins',
'create_user',
'delete_plugins',
'delete_themes',
'delete_users',

'edit_plugins',
'edit_themes',
'edit_users',
'install_plugins',
'install_themes',
'manage_options',
'switch_themes',
'update_core',

'update_plugins',
'update_themes',
];
foreach ( $m4is_scw26rr1c3sxntaajy0c6sz08e2qxnd3 as $m4is_w855v7fcvq5s1phhtj779a25x3zd1p => $m4is_j2463zv6tbn ) {
$m4is_hce1y1a4qd65zhnwsj = $m4is_j2463zv6tbn['name'];

$m4is_mta1y5w3r = $m4is_j2463zv6tbn['capabilities'];
foreach( $m4is_p4jmvrs77xj4j50b37kr3h0b as $m4is_j8j55t8dz79m7 ) {
if ( array_key_exists( $m4is_j8j55t8dz79m7,
 $m4is_mta1y5w3r ) ) {
continue 2;
}
}
$m4is_7kwstyma[] = [
'id' => $m4is_w855v7fcvq5s1phhtj779a25x3zd1p,
'name' => $m4is_j2463zv6tbn['name']
];

}
return $m4is_7kwstyma;
}

static function m4is_dn7r9j7anh() {
global $wpdb;
$m4is_b4tj8bz7gag2n7w4a3ych8s4hw86 = implode( "','",
 m4is_dv250ra9xbtaf::m4is_6ejn23xcqf1wv93y2jkp4jzp5h01tf() );
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `ID`, `post_title` FROM `{$wpdb->posts}` WHERE `post_status` = 'publish' AND `post_type` IN ( '" . $m4is_b4tj8bz7gag2n7w4a3ych8s4hw86 . "' ) ORDER BY `id` ASC;";

$m4is_3g7faa0zhw70 = $wpdb->get_results($m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
$m4is_kezq8tet[] = [
'id' => 0,
'text' => '(Default)'
];

$m4is_kezq8tet[] = [
'id' => -1,
'text' => '(User Profile Page)'
];
foreach ($m4is_3g7faa0zhw70 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh=>
$page ) {
$m4is_kezq8tet[] = [
'id' => $page['ID'],
'text' => "{$page['post_title']} ({$page['ID']})"
];
}
return json_encode($m4is_kezq8tet );

}

}