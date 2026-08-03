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


final class m4is_4rgafzx06709hbz2zfhr9rjtmekrm3c {
public $slug = 'elementor'; 
public $container_els = ['section', 'column']; 
public $container_visibility = [];
 
public $widget_visibility = []; 
public $ns = ''; 
private $m4is_132xe588j;
public static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

if ( is_null( $m4is_x83y9shwv134vk9r8c85 ) ) {
$m4is_x83y9shwv134vk9r8c85 = new self;
$m4is_x83y9shwv134vk9r8c85->ns = m4is_9db7hheseencedjdjv::NS;

$m4is_x83y9shwv134vk9r8c85->m4is_z6c3r724qhd();
}
return $m4is_x83y9shwv134vk9r8c85;
}
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();

}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->slug = 'elementor';
$this->container_els = ['section', 'column'];

$this->container_visibility = [];
$this->widget_visibility = [];
$this->ns = m4is_9db7hheseencedjdjv::NS;
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
public function m4is_z6c3r724qhd() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->container_els = apply_filters( 'memberium/elementor/editor/container_slugs', $this->container_els ); 
$this->m4is_5eragr7sh2yyj356m();

}
private function m4is_5eragr7sh2yyj356m() : void {
add_action( 'elementor/widgets/widgets_registered', [$this, 'm4is_yfpnrq8wbh7r6jq'],
 20 ); 
add_action( 'elementor/frontend/before_render', [$this, 'm4is_fbw3s2z5aqk5kgt'], 10, 1 ); 
add_action( 'elementor/frontend/after_render',
 [$this, 'm4is_jeknrvq21sk92k'], 10, 1 ); 
add_filter( 'elementor/frontend/section/should_render', [$this, 'm4is_zgb0s62fkp8db5v8tje7wdskk4jr'],
 1, 2 ); 
add_filter( 'elementor/frontend/column/should_render', [$this, 'm4is_zgb0s62fkp8db5v8tje7wdskk4jr'], 1, 2 );
add_filter( 'elementor/frontend/widget/should_render',
 [$this, 'm4is_zgb0s62fkp8db5v8tje7wdskk4jr'], 1, 2 );
add_filter( 'elementor/frontend/container/should_render', [$this, 'm4is_myvkxdb81sad39ty6385'] ,
 10, 2 );
add_filter( 'elementor/frontend/column/should_render', [$this, 'm4is_myvkxdb81sad39ty6385'] , 10, 2 );
}

public function m4is_myvkxdb81sad39ty6385( $m4is_gb12epbhmyrzzf7r,
 $m4is_xzq0ab9dgyer6ej7v1f ) : bool {
if ( ! $m4is_gb12epbhmyrzzf7r ) {
return $m4is_gb12epbhmyrzzf7r;
}
if ( empty( $m4is_xzq0ab9dgyer6ej7v1f ) || \Elementor\Plugin::$instance->editor->is_edit_mode() ) {
return $m4is_gb12epbhmyrzzf7r;

}
if ( current_user_can( 'manage_options') ) {
return $m4is_gb12epbhmyrzzf7r;
}
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $m4is_xzq0ab9dgyer6ej7v1f->get_settings_for_display();

$m4is_5ergmqt9 = explode( ',', m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_prgfd97b8r9yz9( $this->m4is_132xe588j->m4is_vd3qpw0vkdm(),
 'memb_user', 'membership_tags', '' ) );



$m4is_xc0wh8hch3 = isset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberium_login_status'] ) ? $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberium_login_status'] : '';

if ( $m4is_xc0wh8hch3 <> '' && $m4is_xc0wh8hch3 <> 'both' ) {
if ( $m4is_xc0wh8hch3 == 'loggedin' && ! is_user_logged_in() ) {
return false;

}
if ( $m4is_xc0wh8hch3 == 'anonymous' && is_user_logged_in() ) {
return false;
}
}
$m4is_xc0wh8hch3 = isset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberium_any_membership'] ) ? $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberium_any_membership'] : '';

if ( $m4is_xc0wh8hch3 == 'yes' ) {
if ( empty( $m4is_5ergmqt9 ) ) {
return false;
}
}
else {
$m4is_ra7dnjjzebn9h3t6k7a2p36 = isset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberium_memberships_section'] ) ? $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberium_memberships_section'] : [];

if ( ! empty( $m4is_ra7dnjjzebn9h3t6k7a2p36 ) ) {
if ( ! array_intersect( $m4is_ra7dnjjzebn9h3t6k7a2p36, $m4is_5ergmqt9 ) ) {
return false;

}
}
}
$m4is_xc0wh8hch3 = isset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberium_tags1_section'] ) ? implode( ',', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberium_tags1_section'] ) : '';

if ( ! empty( $m4is_xc0wh8hch3 ) ) {
if ( ! $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_xc0wh8hch3 ) ) {
return false;

}
}
$m4is_xc0wh8hch3 = isset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberium_tags2_section'] ) ? implode( ',', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberium_tags2_section'] ) : '';

if ( ! empty( $m4is_xc0wh8hch3 ) ) {
if ( ! $this->m4is_132xe588j->m4is_vjrrzthmdbwwgh0ndz7kwmtvp6hm59h( $m4is_xc0wh8hch3 ) ) {
return false;

}
}
$m4is_xc0wh8hch3 = isset( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberium_all_tags_section'] ) ? $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['memberium_all_tags_section'] : [];

if ( ! empty( $m4is_xc0wh8hch3 ) ) {
if ( ! $this->m4is_132xe588j->m4is_n9nmkb32xctdmyy9d0s0trys3zj5y( $m4is_xc0wh8hch3 ) ) {
return false;

}
}
return $m4is_gb12epbhmyrzzf7r;
}

function m4is_yfpnrq8wbh7r6jq( $m4is_fnt7cjap5y39660ger1ng5r6637e ) {
require_once __DIR__ . '/widget-shortcode.php';

$m4is_fnt7cjap5y39660ger1ng5r6637e->unregister_widget_type( 'shortcode' );
$m4is_fnt7cjap5y39660ger1ng5r6637e->register_widget_type( new m4is_j2wbeahxxw1h );

}

function m4is_fbw3s2z5aqk5kgt($m4is_ea7v3q48rkmv) {

if ( \Elementor\Plugin::$instance->editor->is_edit_mode() || empty($m4is_ea7v3q48rkmv) ) {
return;

}
$m4is_jw59n32radyz66t = $m4is_ea7v3q48rkmv->get_type();
$m4is_gjscjmy5v39a7k4tbr7kbbywd3696x = $m4is_ea7v3q48rkmv->get_id();
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $m4is_ea7v3q48rkmv->get_settings_for_display();

$m4is_4cmnqx4j = $this->m4is_5athppbzwq14qk19zb2tss4j8kzwcz($m4is_8ew58cpxmftgpw93gdffm4s9bbwy);
$m4is_vj7kkyhcxq31h5pb73r0k = in_array($m4is_jw59n32radyz66t,
 $this->container_els);

if ( $m4is_vj7kkyhcxq31h5pb73r0k ){

if (! $m4is_4cmnqx4j) {
$this->container_visibility[$m4is_gjscjmy5v39a7k4tbr7kbbywd3696x] = $this->m4is_50hwmry9fk6x($m4is_ea7v3q48rkmv);

}
}

else {
$m4is_jryzehz1y3k = $m4is_ea7v3q48rkmv->get_name();

if ( $m4is_4cmnqx4j ) {

$m4is_4cmnqx4j = $this->m4is_hwczzdvbp7723b63jzfnwf8vhgrs48g( $m4is_gjscjmy5v39a7k4tbr7kbbywd3696x,
 $m4is_4cmnqx4j );

if ( ! $m4is_4cmnqx4j ) {
$this->widget_visibility[] = $m4is_gjscjmy5v39a7k4tbr7kbbywd3696x;
}
}

else {
$this->widget_visibility[] = $m4is_gjscjmy5v39a7k4tbr7kbbywd3696x;

}

if ( ! $m4is_4cmnqx4j ) {
if ($m4is_jryzehz1y3k === 'text-editor') {
add_filter( 'widget_text', [$this, 'm4is_e4jy1yv933'], 1, 2 );

}
if ($m4is_jryzehz1y3k === 'shortcode') {
add_filter("{$this->ns}/{$this->slug}/widget/shortcode/render", [$this, 'm4is_e4jy1yv933'],
 1, 2 );
}
}
}
}

function m4is_jeknrvq21sk92k($m4is_ea7v3q48rkmv) {

if ( \Elementor\Plugin::$instance->editor->is_edit_mode() || empty( $m4is_ea7v3q48rkmv ) ) {
return;

}
$m4is_jw59n32radyz66t = $m4is_ea7v3q48rkmv->get_type();
$m4is_gjscjmy5v39a7k4tbr7kbbywd3696x = $m4is_ea7v3q48rkmv->get_id();
$m4is_vj7kkyhcxq31h5pb73r0k = in_array($m4is_jw59n32radyz66t,
 $this->container_els);

if ($m4is_vj7kkyhcxq31h5pb73r0k) {
}

else {
$m4is_jryzehz1y3k = $m4is_ea7v3q48rkmv->get_name();

if ( in_array( $m4is_gjscjmy5v39a7k4tbr7kbbywd3696x,
 $this->widget_visibility ) ){
if ( $m4is_jryzehz1y3k === 'text-editor' ){
remove_filter('widget_text', [$this, 'm4is_e4jy1yv933'],
 1 );
}
if ( $m4is_jryzehz1y3k === 'shortcode' ){
remove_filter("{$this->ns}/{$this->slug}/widget/shortcode/render", [$this, 'm4is_e4jy1yv933'],
 1, 2 );
}
}
}
}

function m4is_50hwmry9fk6x($m4is_ea7v3q48rkmv) {
$m4is_5q304z3vjtkggc7e8c = $m4is_ea7v3q48rkmv->get_data('elements');

$m4is_nk7m522gtdvjxst4bz74bh0hj24av64 = [];
if ( is_array( $m4is_5q304z3vjtkggc7e8c ) && !empty( $m4is_5q304z3vjtkggc7e8c ) ){
foreach ($m4is_5q304z3vjtkggc7e8c as $key =>
 $m4is_gve2kx3433gqsmk971hqdb53ty2gj) {
$m4is_nk7m522gtdvjxst4bz74bh0hj24av64 = $this->m4is_q5mk14y6hfryhht9fp69dys783m( $m4is_nk7m522gtdvjxst4bz74bh0hj24av64,
 $m4is_gve2kx3433gqsmk971hqdb53ty2gj );
$m4is_kv455h3g8ram2hfczj8sz = ( isset($m4is_gve2kx3433gqsmk971hqdb53ty2gj['elements']) && !empty($m4is_gve2kx3433gqsmk971hqdb53ty2gj['elements']) ) ? $m4is_gve2kx3433gqsmk971hqdb53ty2gj['elements'] : false;

if ( $m4is_kv455h3g8ram2hfczj8sz ){
foreach ($m4is_kv455h3g8ram2hfczj8sz as $m4is_ea7v3q48rkmv => $m4is_xzq0ab9dgyer6ej7v1f) {
$m4is_nk7m522gtdvjxst4bz74bh0hj24av64 = $this->m4is_q5mk14y6hfryhht9fp69dys783m( $m4is_nk7m522gtdvjxst4bz74bh0hj24av64,
 $m4is_xzq0ab9dgyer6ej7v1f );
$m4is_wwtaqxzx4vnaa8emkz = isset($m4is_xzq0ab9dgyer6ej7v1f['elements']) ? $m4is_xzq0ab9dgyer6ej7v1f['elements'] : false;

if ( $m4is_wwtaqxzx4vnaa8emkz ){
foreach ($m4is_wwtaqxzx4vnaa8emkz as $m4is_4thb5d0ak9 => $m4is_rqxytszfq5v6syth1csqqxvy5) {
$m4is_nk7m522gtdvjxst4bz74bh0hj24av64 = $this->m4is_q5mk14y6hfryhht9fp69dys783m( $m4is_nk7m522gtdvjxst4bz74bh0hj24av64,
 $m4is_rqxytszfq5v6syth1csqqxvy5 );
}
}
}
}
}
}
return $m4is_nk7m522gtdvjxst4bz74bh0hj24av64;
}

function m4is_q5mk14y6hfryhht9fp69dys783m($m4is_nk7m522gtdvjxst4bz74bh0hj24av64,
 $m4is_d60kn1d3yvprp62rs332) {
$m4is_h7zwy5f0w3y9gx3wm = !empty($m4is_d60kn1d3yvprp62rs332['elType']) ? $m4is_d60kn1d3yvprp62rs332['elType'] : false;

$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = !empty($m4is_d60kn1d3yvprp62rs332['id']) ? $m4is_d60kn1d3yvprp62rs332['id'] : false;
if ( $m4is_h7zwy5f0w3y9gx3wm === 'widget' && $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh) {
$m4is_nk7m522gtdvjxst4bz74bh0hj24av64[] = $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;

}
return $m4is_nk7m522gtdvjxst4bz74bh0hj24av64;
}

function m4is_hwczzdvbp7723b63jzfnwf8vhgrs48g($m4is_gjscjmy5v39a7k4tbr7kbbywd3696x,
 $m4is_4cmnqx4j) {

$m4is_a4y3ttcw5wxrxjc880b = false;
if ( !empty($this->container_visibility) ){
foreach ($this->container_visibility as $m4is_rbwb8zqsnk5srk295tggh3k8j4ett3ax =>
 $m4is_934a95jn) {
if ( is_array( $m4is_934a95jn ) ){
foreach ($m4is_934a95jn as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh) {
if ( $m4is_gjscjmy5v39a7k4tbr7kbbywd3696x === $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ){
$m4is_4cmnqx4j = false;

}
}
}
}
}
return $m4is_4cmnqx4j;
}

function m4is_zgb0s62fkp8db5v8tje7wdskk4jr($m4is_vy40d2d3defx4ebatmjx0c8h7k7, $m4is_ea7v3q48rkmv) {

if ( \Elementor\Plugin::$instance->editor->is_edit_mode() || empty( $m4is_ea7v3q48rkmv ) ) {
return $m4is_vy40d2d3defx4ebatmjx0c8h7k7;

}
$m4is_jw59n32radyz66t = $m4is_ea7v3q48rkmv->get_type();
$m4is_gjscjmy5v39a7k4tbr7kbbywd3696x = $m4is_ea7v3q48rkmv->get_id();
$m4is_vj7kkyhcxq31h5pb73r0k = in_array( $m4is_jw59n32radyz66t,
 $this->container_els );

if ( $m4is_vj7kkyhcxq31h5pb73r0k ){
if ( array_key_exists( $m4is_gjscjmy5v39a7k4tbr7kbbywd3696x, $this->container_visibility ) ){
if ( $m4is_jw59n32radyz66t === 'section' ){
$m4is_vy40d2d3defx4ebatmjx0c8h7k7 = false;

}
}
}

else {
if ( in_array($m4is_gjscjmy5v39a7k4tbr7kbbywd3696x, $this->widget_visibility) ){
$m4is_vy40d2d3defx4ebatmjx0c8h7k7 = false;

}
}
return $m4is_vy40d2d3defx4ebatmjx0c8h7k7;
}

function m4is_e4jy1yv933( $m4is_bsamg3fezf, $m4is_8ew58cpxmftgpw93gdffm4s9bbwy ) {
return ' ';

}

private function m4is_5athppbzwq14qk19zb2tss4j8kzwcz( array $m4is_44vca1rpez0e68fha3bm910f3ne2z = [] ) : bool {
$m4is_y7084n6v67jme9va8yz = [];
 
$m4is_axy0v6gyefw = m4is_9db7hheseencedjdjv::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab = $m4is_axy0v6gyefw::PREFIX;

foreach( $m4is_44vca1rpez0e68fha3bm910f3ne2z as $m4is_hce1y1a4qd65zhnwsj => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( strpos( $m4is_hce1y1a4qd65zhnwsj,
 "{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_membership_levels" ) !== false && $m4is_rqxytszfq5v6syth1csqqxvy5 === '1' ) {
$m4is_y7084n6v67jme9va8yz[] = (int) str_replace( "{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_membership_levels-",
 '', $m4is_hce1y1a4qd65zhnwsj);
}
}
$m4is_hcgws2d4jqv3 = isset($m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags"]) ? $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags"] : '';

$m4is_hcgws2d4jqv3 = !empty($m4is_hcgws2d4jqv3) && is_array($m4is_hcgws2d4jqv3) ? implode(',', $m4is_hcgws2d4jqv3) : $m4is_hcgws2d4jqv3;

$m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3 = isset($m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags2"]) ? $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_access_tags2"] : '';

$m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3 = !empty($m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3) && is_array($m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3) ? implode(',',
 $m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3) : $m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3;
$m4is_gv7vjyv2c6g3nepw6 = [
'memberships' => implode(',',
 $m4is_y7084n6v67jme9va8yz),
'any_membership' => isset($m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anymembership"]) && $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anymembership"] === '1' ? 1 : 0,

'logged_in_only' => isset($m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_loggedin"] ) && $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_loggedin"] === '1' ? 1 : 0,

'logged_out_only' => isset($m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anonymous_only"] ) && $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_anonymous_only"] === '1' ? 1 : 0,

'invert_results' => isset($m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_invert_results"] ) && $m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_invert_results"] === '1' ? 1 : 0,

'contact_ids' => isset($m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_contact_ids"]) ? sanitize_text_field($m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_contact_ids"]) : '',

'eval' => isset($m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_eval"]) ? trim($m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_eval"]) : '',

'asset_id' => isset($m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_asset_id"]) ? sanitize_text_field($m4is_44vca1rpez0e68fha3bm910f3ne2z["{$m4is_5c6ymb13fjd0bh3bwwhg9112n5s3ab}_asset_id"]) : '',

'tags1' => !empty($m4is_hcgws2d4jqv3) ? trim($m4is_hcgws2d4jqv3, ',') : '',
'tags2' => !empty($m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3) ? trim($m4is_byvd8xsd1m1ywhyeay7r34eadfwk2wn3,
 ',') : ''
];
return $m4is_axy0v6gyefw->m4is_xpe0t3cfrjmnm2tyt7sve0dk()->m4is_5wz355nv6hgn5e9pt4gcezrrt2stqx9( $m4is_gv7vjyv2c6g3nepw6,
 'elementor' );
}
}