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

?><fieldset data-asset-id="<?= $m4is_pzszy196ee; ?>" data-asset-type="<?= $m4is_1zyxgvcj7wjeqej9ya6ev80; ?>" data-user-status="<?= $m4is_14q35vdhmvykfq0065qxntz31ccnme;
 ?>" class="memb-asset-access-fieldset">

    <legend class="memb-asset-access-legend">Memberium</legend>

    <?php foreach ($m4is_7b2yfzk0054 as $m4is_bbsta3mvjhhvh1x97vfpm9e){
$m4is_hce1y1a4qd65zhnwsj = $m4is_bbsta3mvjhhvh1x97vfpm9e['name'];

$m4is_h7zwy5f0w3y9gx3wm = $m4is_bbsta3mvjhhvh1x97vfpm9e['type'];
$m4is_g576xw711bbeeccc96xsnz2td1 = $m4is_bbsta3mvjhhvh1x97vfpm9e['id'];

$m4is_jrbbv650tt4nt9f6fz = $m4is_bbsta3mvjhhvh1x97vfpm9e['field_name'];
$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_bbsta3mvjhhvh1x97vfpm9e['value'];

$m4is_c7p9bw20z8fzx = !empty($m4is_bbsta3mvjhhvh1x97vfpm9e['info']) ? $m4is_bbsta3mvjhhvh1x97vfpm9e['info'] : false;

echo "<div class=\"memb-asset-access-field-control\" data-setting=\"{$m4is_hce1y1a4qd65zhnwsj}\">";

$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = $m4is_bbsta3mvjhhvh1x97vfpm9e['label'];
if( $m4is_c7p9bw20z8fzx ){
$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 .= "<div class=\"memb-asset-access-tooltip\"><span class=\"dashicons dashicons-info\"></span>";

$m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 .= "<span class=\"memb-asset-access-tooltiptext\">{$m4is_c7p9bw20z8fzx}</span></div>";
}
echo sprintf('<label for="%s" class="memb-asset-access-field-label">%s</label>',
 $m4is_g576xw711bbeeccc96xsnz2td1, $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0);
if( $m4is_h7zwy5f0w3y9gx3wm === 'text' ){
echo sprintf('<input type="%s" name="%s" id="%s" value="%s" class="widefat %s-field-input"/>',

$m4is_h7zwy5f0w3y9gx3wm, $m4is_jrbbv650tt4nt9f6fz, $m4is_g576xw711bbeeccc96xsnz2td1, esc_attr($m4is_rqxytszfq5v6syth1csqqxvy5), $m4is_zxa05fq9f81p8g
);

}
else if ($m4is_h7zwy5f0w3y9gx3wm === 'select2') {
$m4is_d60kn1d3yvprp62rs332 = isset($m4is_bbsta3mvjhhvh1x97vfpm9e['data']) ? $m4is_bbsta3mvjhhvh1x97vfpm9e['data'] : 0;

$m4is_ffgk9t8wkkt1x2pw = isset($m4is_bbsta3mvjhhvh1x97vfpm9e['multiple']) ? (int)$m4is_bbsta3mvjhhvh1x97vfpm9e['multiple'] : 0;
$m4is_02qt7prjsrbrmn349687 = $m4is_ffgk9t8wkkt1x2pw > 0 ? " data-multiple=\"1\"" : "";

$m4is_xbg48ncxrhw6ff1hh1cpa7gzh = isset($m4is_bbsta3mvjhhvh1x97vfpm9e['change']) ? $m4is_bbsta3mvjhhvh1x97vfpm9e['change'] : false;

$m4is_vbwnhcyhebp = !empty($m4is_xbg48ncxrhw6ff1hh1cpa7gzh) ? " data-change=\"{$m4is_xbg48ncxrhw6ff1hh1cpa7gzh}\"" : "";
$m4is_vbwnhcyhebp .= isset($m4is_bbsta3mvjhhvh1x97vfpm9e['disable-search']) ? " data-disable-search=\"1\"" : "";

echo sprintf('<input type="text" name="%s" id="%s" value="%s" class="widefat %s-field-input" data-memb-asset-select2="%s"%s%s/>',
$m4is_jrbbv650tt4nt9f6fz,
 $m4is_g576xw711bbeeccc96xsnz2td1, esc_attr($m4is_rqxytszfq5v6syth1csqqxvy5), $m4is_zxa05fq9f81p8g, $m4is_d60kn1d3yvprp62rs332, $m4is_02qt7prjsrbrmn349687,
 $m4is_vbwnhcyhebp
);
}
else if($m4is_h7zwy5f0w3y9gx3wm === 'textarea') {
$m4is_tbdh9qb6r6z = isset($m4is_bbsta3mvjhhvh1x97vfpm9e['rows']) ? (int)$m4is_bbsta3mvjhhvh1x97vfpm9e['rows'] : 1;

echo sprintf('<textarea name="%s" id="%s" class="widefat %s-field-textarea" rows="%s">%s</textarea>',
$m4is_jrbbv650tt4nt9f6fz, $m4is_g576xw711bbeeccc96xsnz2td1,
 $m4is_zxa05fq9f81p8g, $m4is_tbdh9qb6r6z, $m4is_rqxytszfq5v6syth1csqqxvy5
);
}
if( isset($m4is_bbsta3mvjhhvh1x97vfpm9e['desc']) && $m4is_bbsta3mvjhhvh1x97vfpm9e['desc'] > '' ){
echo sprintf('<p class="memb-asset-access-description description">%s</p>',
 $m4is_bbsta3mvjhhvh1x97vfpm9e['desc']);
}
echo '</div>';
} ?>

</fieldset>