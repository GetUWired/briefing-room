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

final class m4is_hc8af2j3geb67rsaxth6zmvcpnmee4g {

public static function m4is_s4mjgqgb( $m4is_sdah424gxbbc9c04tjehc790cr2n, $m4is_hn5gx2w6k,
 $m4is_x83y9shwv134vk9r8c85 ) {
$m4is_7b2yfzk0054 = self::m4is_vs6kkmmx96700();
foreach ($m4is_7b2yfzk0054 as $m4is_5vcwef7pymrfb3zawe =>
 $m4is_bbsta3mvjhhvh1x97vfpm9e){
$m4is_7b2yfzk0054[$m4is_5vcwef7pymrfb3zawe]['id'] = $m4is_sdah424gxbbc9c04tjehc790cr2n->get_field_id( $m4is_bbsta3mvjhhvh1x97vfpm9e['name'] );

$m4is_7b2yfzk0054[$m4is_5vcwef7pymrfb3zawe]['field_name'] = $m4is_sdah424gxbbc9c04tjehc790cr2n->get_field_name( $m4is_bbsta3mvjhhvh1x97vfpm9e['name'] );

$m4is_7b2yfzk0054[$m4is_5vcwef7pymrfb3zawe]['value'] = isset( $m4is_x83y9shwv134vk9r8c85[$m4is_bbsta3mvjhhvh1x97vfpm9e['name']] ) ? $m4is_x83y9shwv134vk9r8c85[$m4is_bbsta3mvjhhvh1x97vfpm9e['name']] : '';

}
$m4is_zxa05fq9f81p8g = 'wpal-widget-access';
$m4is_pzszy196ee = $m4is_sdah424gxbbc9c04tjehc790cr2n->id;
$m4is_1zyxgvcj7wjeqej9ya6ev80 = 'widget';

$m4is_14q35vdhmvykfq0065qxntz31ccnme = isset( $m4is_x83y9shwv134vk9r8c85['status'] ) ? $m4is_x83y9shwv134vk9r8c85['status'] : '';
$m4is_dx9r3dywzb6c2h7cw04fqp1jyvr = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_emqeqeaf4();

include m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_8hkhd903a3hcdnqhfwpzqby('core-wp-asset-access-meta.php');

return;
}
static function m4is_er6y2a605v2h7fgeh( $m4is_x83y9shwv134vk9r8c85, $m4is_pyzw7kc1ge577zy6a38 ){
$m4is_7b2yfzk0054 = self::m4is_vs6kkmmx96700();

if( is_array($m4is_7b2yfzk0054) && ! empty($m4is_7b2yfzk0054) ){
$m4is_14q35vdhmvykfq0065qxntz31ccnme = 0;

foreach ($m4is_7b2yfzk0054 as $m4is_bbsta3mvjhhvh1x97vfpm9e) {
$m4is_hce1y1a4qd65zhnwsj = $m4is_bbsta3mvjhhvh1x97vfpm9e['name'];

$m4is_rqxytszfq5v6syth1csqqxvy5 = '';
if( isset($m4is_pyzw7kc1ge577zy6a38[$m4is_hce1y1a4qd65zhnwsj]) ){
$m4is_h7zwy5f0w3y9gx3wm = $m4is_bbsta3mvjhhvh1x97vfpm9e['type'];

$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_pyzw7kc1ge577zy6a38[$m4is_hce1y1a4qd65zhnwsj];

if( $m4is_h7zwy5f0w3y9gx3wm === 'select2' && !empty($m4is_rqxytszfq5v6syth1csqqxvy5) ){
$m4is_rqxytszfq5v6syth1csqqxvy5 = trim($m4is_rqxytszfq5v6syth1csqqxvy5,
 ',');

if( $m4is_hce1y1a4qd65zhnwsj === 'memberships' && !empty($m4is_rqxytszfq5v6syth1csqqxvy5) ){
$m4is_exrkyp0yg362fq91nmtwh21btm9 = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_hvv9kqe18w6gtnq40v7($m4is_rqxytszfq5v6syth1csqqxvy5);

$m4is_rqxytszfq5v6syth1csqqxvy5 = $m4is_exrkyp0yg362fq91nmtwh21btm9 ? $m4is_exrkyp0yg362fq91nmtwh21btm9 : $m4is_rqxytszfq5v6syth1csqqxvy5;

$m4is_x83y9shwv134vk9r8c85['any_membership'] = $m4is_exrkyp0yg362fq91nmtwh21btm9 ? 1 : 0;
}
}
if( $m4is_hce1y1a4qd65zhnwsj === 'status' ){
$m4is_14q35vdhmvykfq0065qxntz31ccnme = (int)$m4is_rqxytszfq5v6syth1csqqxvy5;

}
$m4is_x83y9shwv134vk9r8c85[$m4is_hce1y1a4qd65zhnwsj] = $m4is_rqxytszfq5v6syth1csqqxvy5;
}
}

if( $m4is_14q35vdhmvykfq0065qxntz31ccnme === 1 ){
$m4is_x83y9shwv134vk9r8c85['logged_in_only'] = 1;

$m4is_x83y9shwv134vk9r8c85['logged_out_only'] = 0;
}

else if( $m4is_14q35vdhmvykfq0065qxntz31ccnme === 2 ){
$m4is_x83y9shwv134vk9r8c85['logged_in_only'] = 0;

$m4is_x83y9shwv134vk9r8c85['logged_out_only'] = 1;
$m4is_x83y9shwv134vk9r8c85 = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_7p1q2p4wwa5yy1vq9m4azf128hz9($m4is_x83y9shwv134vk9r8c85);

}

else{
$m4is_x83y9shwv134vk9r8c85['logged_in_only'] = 0;
$m4is_x83y9shwv134vk9r8c85['logged_out_only'] = 0;
$m4is_x83y9shwv134vk9r8c85 = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_7p1q2p4wwa5yy1vq9m4azf128hz9($m4is_x83y9shwv134vk9r8c85);

}
}
m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_r4c836v754();
return $m4is_x83y9shwv134vk9r8c85;

}
static function m4is_xz2vh1pzpdqd9fjz2jtr8kacjr(){
static $m4is_xree1vkdcjhxsd1c117f54zhk35pd4d = false;
if ($m4is_xree1vkdcjhxsd1c117f54zhk35pd4d){
return;

}
m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_n59hbwekrhr5t9c6gg4('widget');
$m4is_xree1vkdcjhxsd1c117f54zhk35pd4d = true;

}

static function m4is_vs6kkmmx96700(){
static $m4is_aa7rehb3a85h4786xvkmq71f1ybr4 = false;
if( $m4is_aa7rehb3a85h4786xvkmq71f1ybr4 ){
return $m4is_aa7rehb3a85h4786xvkmq71f1ybr4;

}
$m4is_aa7rehb3a85h4786xvkmq71f1ybr4 = m4is_pt9as1ejs6xfpy7cnx0yxk709::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_qrsm9adcwj7j('widget');

return apply_filters( 'memberium/widget/fields', $m4is_aa7rehb3a85h4786xvkmq71f1ybr4 );
}
}
