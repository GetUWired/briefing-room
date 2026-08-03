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

final class m4is_9rspj2sq {



private static function m4is_v8m5kza8y5cvvt9fafq95cgdcasg() {
return apply_filters('memberium/lms/course_type',
 'page');
}
private static function m4is_dcf3sv2qkwv7sbjd9747pgf9qxrbacz() {
return apply_filters('memberium/lms/course_category', 'category');

}
private static function m4is_k0g2g41am2je2() {
return apply_filters('memberium/lms/course_tag', 'post_tag');
}



static function m4is_4x853k5hb1tpbyyqewe($m4is_ne6pfqrw74y135s9chxyerje8bgm0j = [],
 $m4is_bsamg3fezf = '', $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4 = '') {
self::$m4is_4w3fxbp6qnf1w5xhyfyda41r4bvxhtse = ++self::$m4is_4w3fxbp6qnf1w5xhyfyda41r4bvxhtse;

$m4is_r1gc0h5mpz3m66fg22z1a3e0n9h2 = self::m4is_v8m5kza8y5cvvt9fafq95cgdcasg();
$m4is_ghx8ej3ep5s7 = [
'container_template' => 'coursegrid_container',

'grid_template' => 'coursegrid_item'
];
$m4is_n7x0afpz = [
'container_template' => $m4is_ghx8ej3ep5s7['container_template'], 
'css_class' =>
 '', 
'css_id' => '', 
'grid_template' => $m4is_ghx8ej3ep5s7['grid_template'], 
'order' => 'asc', 
'sort' => 'course_order', 
'post_ids' =>
 '', 
'post_type' => $m4is_r1gc0h5mpz3m66fg22z1a3e0n9h2, 
'posts_per_page' => -1, 
'categories' => '', 
'tags' => '', 
'taxonomy_compare' =>
 'AND', 
'columns' => 3, 
'mobile_cols' => 1, 
'tablet_cols' => 2, 
'widescreen_cols' => 3, 
'no_breakpoints' => 0, 
'progress_bar' =>
 1, 
'no_css' => 0 
];
if (isset($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0]) && $m4is_ne6pfqrw74y135s9chxyerje8bgm0j[0] == 'showatts') {
return implode(',',
 array_keys($m4is_n7x0afpz) );
}
$m4is_ne6pfqrw74y135s9chxyerje8bgm0j = wp_parse_args($m4is_ne6pfqrw74y135s9chxyerje8bgm0j, $m4is_n7x0afpz);

$m4is_yhdk2h7srcr7n5mzjnw7m6b = $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['post_type'] = empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['post_type']) ? $m4is_r1gc0h5mpz3m66fg22z1a3e0n9h2 : $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['post_type'];

add_filter('memberium/lms/course/item/data', [__CLASS__, 'course_grid_item_data'], PHP_INT_MAX - 1, 2);

foreach ($m4is_ghx8ej3ep5s7 as $m4is_teh4ydaeb5eqg92k3xnjygnmx7 =>
 $m4is_syqymyz40rx4xgtqp8475ffwzw) {
$m4is_15nt2t5rw = empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[$m4is_teh4ydaeb5eqg92k3xnjygnmx7]) ? false : m4is_25550fsqsnd4pn7txw2vh7x6::m4is_7kz4jd4p10wdj($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[$m4is_teh4ydaeb5eqg92k3xnjygnmx7]);


if (! $m4is_15nt2t5rw) {
if (m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_mdj300zr1jk5av2y9cp()) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = __('Error : template missing for %s',
 'memberium');
return "<p>".sprintf($m4is_bbjejhszczf2b3wrxm849kpfyzb5, $m4is_teh4ydaeb5eqg92k3xnjygnmx7 )."</p>";
}
return '';
}
else{
if ($m4is_teh4ydaeb5eqg92k3xnjygnmx7 === 'grid_template') {
$m4is_psf4set0r8m1z9mdsb7wk5dv04q = $m4is_15nt2t5rw;

}
}
}

$m4is_qfte52rs3ntys46nymv7arbxgkw2bbes = [
'post_type' => $m4is_yhdk2h7srcr7n5mzjnw7m6b,
'posts_per_page' => $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['posts_per_page'],

];

$m4is_x76zsngn4rkq = self::m4is_n7ytdbzkcfy8b8xyht3ct59qg1r5vj6('post_ids', $m4is_ne6pfqrw74y135s9chxyerje8bgm0j);
if ($m4is_x76zsngn4rkq) {
$m4is_qfte52rs3ntys46nymv7arbxgkw2bbes['post__in'] = $m4is_x76zsngn4rkq;

}

$m4is_pp5m1cx4vgx959r2c2nj89d8g = self::m4is_vnayp62mm9w4jhfcs8kfm46wxh($m4is_ne6pfqrw74y135s9chxyerje8bgm0j);
if ($m4is_pp5m1cx4vgx959r2c2nj89d8g) {
$m4is_qfte52rs3ntys46nymv7arbxgkw2bbes['tax_query'] = $m4is_pp5m1cx4vgx959r2c2nj89d8g;

}


elseif ($m4is_yhdk2h7srcr7n5mzjnw7m6b == 'post' || $m4is_yhdk2h7srcr7n5mzjnw7m6b === 'page') {
if (m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_mdj300zr1jk5av2y9cp()) {
$m4is_bbjejhszczf2b3wrxm849kpfyzb5 = __('Error : memb_coursegrid shortcode for %ss requires a category or tag filter to display.',
 'memberium');
return "<p>" . sprintf($m4is_bbjejhszczf2b3wrxm849kpfyzb5, $m4is_yhdk2h7srcr7n5mzjnw7m6b) . "</p>";
}
return '';
}

$m4is_32rhpx9bf8jhrc3jr5xtxzsqsd = ! empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order']) ? strtolower($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['order']) : 'asc';

$m4is_32rhpx9bf8jhrc3jr5xtxzsqsd = ! in_array($m4is_32rhpx9bf8jhrc3jr5xtxzsqsd, ['asc','desc']) ? 'asc' : $m4is_32rhpx9bf8jhrc3jr5xtxzsqsd;

$m4is_44cdzgm778bexmhms83at29gpfz6py74 = !empty($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sort']) ? strtolower($m4is_ne6pfqrw74y135s9chxyerje8bgm0j['sort']) : 'course_order';

$m4is_y8v1dk79 = in_array($m4is_44cdzgm778bexmhms83at29gpfz6py74, ['title', 'date']);
if ($m4is_y8v1dk79) {
$m4is_qfte52rs3ntys46nymv7arbxgkw2bbes['orderby'] = $m4is_44cdzgm778bexmhms83at29gpfz6py74;

$m4is_qfte52rs3ntys46nymv7arbxgkw2bbes['order'] = $m4is_32rhpx9bf8jhrc3jr5xtxzsqsd;
}

$m4is_j34bmw9dcjexfj1qpz = self::m4is_b7xypgq8mf9f8pn9m($m4is_qfte52rs3ntys46nymv7arbxgkw2bbes,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j);
$m4is_1beb9j72n4sfnh7pz371e0dtkd78s1ve = $m4is_j34bmw9dcjexfj1qpz ? $m4is_j34bmw9dcjexfj1qpz->get_posts() : false;

$m4is_mzjfbdah8s6 = [];
if ($m4is_1beb9j72n4sfnh7pz371e0dtkd78s1ve) {
foreach ($m4is_1beb9j72n4sfnh7pz371e0dtkd78s1ve as $m4is_tz1rt7sbq40fade6e6rx) {
$m4is_mzjfbdah8s6[] = apply_filters("memberium/lms/course/item/data",
 [], $m4is_tz1rt7sbq40fade6e6rx);
}

if (! $m4is_y8v1dk79) {
if ($m4is_44cdzgm778bexmhms83at29gpfz6py74 === 'course_order') {
add_filter('memberium/course/grid/sort',
 [__CLASS__, 'course_grid_course_order_sort'], PHP_INT_MAX - 1, 2);
}
$m4is_mzjfbdah8s6 = apply_filters("memberium/course/grid/sort",
 $m4is_mzjfbdah8s6, $m4is_44cdzgm778bexmhms83at29gpfz6py74);
if (!empty($m4is_mzjfbdah8s6) && $m4is_32rhpx9bf8jhrc3jr5xtxzsqsd === 'desc') {
$m4is_mzjfbdah8s6 = array_reverse($m4is_mzjfbdah8s6);

}
}
}
$m4is_2x59qf5vvwx964hw004r6kcg8madh4 = ['css_class' => '', 'css_id' => '']; 
$m4is_pzt6khc4q09nwp = 'memberium-course-grid';
 
foreach ($m4is_2x59qf5vvwx964hw004r6kcg8madh4 as $m4is_11pbn70m5apmb4exbf0ye9j => $m4is_b6d6rdm0cnp2) {
if (!empty(esc_attr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[$m4is_11pbn70m5apmb4exbf0ye9j]) )) {
$m4is_2x59qf5vvwx964hw004r6kcg8madh4[$m4is_11pbn70m5apmb4exbf0ye9j] = esc_attr($m4is_ne6pfqrw74y135s9chxyerje8bgm0j[$m4is_11pbn70m5apmb4exbf0ye9j]);

}
}
if ((int)$m4is_ne6pfqrw74y135s9chxyerje8bgm0j['no_breakpoints'] > 0) {
$m4is_94t1xn2qbxt9bqj81q952 = '';
}
else{
$m4is_94t1xn2qbxt9bqj81q952 = self::m4is_cnmp908p5jvatm($m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_pzt6khc4q09nwp);
}
$m4is_pzt6khc4q09nwp .= empty($m4is_2x59qf5vvwx964hw004r6kcg8madh4['css_class']) ? "" : " {$m4is_2x59qf5vvwx964hw004r6kcg8madh4['css_class']}";

$m4is_gxw6z2pjrc6 = empty($m4is_2x59qf5vvwx964hw004r6kcg8madh4['css_id']) ? "" : " {$m4is_2x59qf5vvwx964hw004r6kcg8madh4['css_id']}";

$m4is_h0f71yfxy97atxhxbqemrj = [
'grid-number' => self::$m4is_4w3fxbp6qnf1w5xhyfyda41r4bvxhtse,
'grid-items' => $m4is_mzjfbdah8s6,

'grid-item-template' => $m4is_psf4set0r8m1z9mdsb7wk5dv04q,
'query_args' => $m4is_qfte52rs3ntys46nymv7arbxgkw2bbes,
'wrapper-id' =>
 $m4is_gxw6z2pjrc6,
'wrapper-class' => $m4is_pzt6khc4q09nwp,
'wrapper-col-styles' => $m4is_94t1xn2qbxt9bqj81q952
];

if ( (int) $m4is_ne6pfqrw74y135s9chxyerje8bgm0j['no_css'] < 1) {
wp_enqueue_style('memb_coursegrid_css');

}

return m4is_25550fsqsnd4pn7txw2vh7x6::m4is_vbq3wn8s($m4is_ghx8ej3ep5s7['container_template'], $m4is_ne6pfqrw74y135s9chxyerje8bgm0j,
 $m4is_bsamg3fezf, $m4is_sqhmv2gmkq6vg895hdc8dftxyp4p4, $m4is_h0f71yfxy97atxhxbqemrj);
}

static function m4is_b7xypgq8mf9f8pn9m($m4is_g61yzqs7ecta0xztr70d7v,
 $m4is_ne6pfqrw74y135s9chxyerje8bgm0j) {
$m4is_n7x0afpz = [
'post_type' => self::m4is_v8m5kza8y5cvvt9fafq95cgdcasg(),
'post_status' =>
 'publish',
'posts_per_page' => -1,
'orderby' => 'date',
'order' => 'ASC',
'fields' => 'ids'
];
$m4is_g61yzqs7ecta0xztr70d7v = wp_parse_args($m4is_g61yzqs7ecta0xztr70d7v,
 $m4is_n7x0afpz);
$m4is_yhdk2h7srcr7n5mzjnw7m6b = $m4is_g61yzqs7ecta0xztr70d7v['post_type'];
$m4is_g61yzqs7ecta0xztr70d7v = apply_filters('memberium/lms/query/args',
 $m4is_g61yzqs7ecta0xztr70d7v, $m4is_ne6pfqrw74y135s9chxyerje8bgm0j);
if (empty($m4is_g61yzqs7ecta0xztr70d7v)) {
return false;
}
$m4is_j34bmw9dcjexfj1qpz = new WP_Query($m4is_g61yzqs7ecta0xztr70d7v );

wp_reset_postdata();
return ($m4is_j34bmw9dcjexfj1qpz->have_posts() ) ? $m4is_j34bmw9dcjexfj1qpz : false;
}

static function m4is_vnayp62mm9w4jhfcs8kfm46wxh($m4is_gv7vjyv2c6g3nepw6) {
$m4is_pp5m1cx4vgx959r2c2nj89d8g = [];

$m4is_yhdk2h7srcr7n5mzjnw7m6b = $m4is_gv7vjyv2c6g3nepw6['post_type'];
$m4is_p9qykngzbnncwwxnqyr0 = ($m4is_yhdk2h7srcr7n5mzjnw7m6b === self::m4is_v8m5kza8y5cvvt9fafq95cgdcasg() );


$m4is_vyfr8fxnj998rgpv0 = self::m4is_n7ytdbzkcfy8b8xyht3ct59qg1r5vj6('categories', $m4is_gv7vjyv2c6g3nepw6);
if ($m4is_vyfr8fxnj998rgpv0) {
$m4is_pp5m1cx4vgx959r2c2nj89d8g[] = [
'taxonomy' =>
 $m4is_p9qykngzbnncwwxnqyr0 ? self::m4is_dcf3sv2qkwv7sbjd9747pgf9qxrbacz() : 'category',
'field' => 'term_id',
'terms' => $m4is_vyfr8fxnj998rgpv0,

'operator' => 'IN',
'include_children' => false,
];
}
$m4is_06c8s5xs94f91335gnaey25 = self::m4is_n7ytdbzkcfy8b8xyht3ct59qg1r5vj6('tags',
 $m4is_gv7vjyv2c6g3nepw6);
if ($m4is_06c8s5xs94f91335gnaey25) {
$m4is_pp5m1cx4vgx959r2c2nj89d8g[] = [
'taxonomy' => ($m4is_p9qykngzbnncwwxnqyr0) ? self::m4is_k0g2g41am2je2() : 'post_tag',

'field' => 'term_id',
'terms' => $m4is_06c8s5xs94f91335gnaey25,
'operator' => 'IN'
];
}
if (! empty($m4is_pp5m1cx4vgx959r2c2nj89d8g) && count($m4is_pp5m1cx4vgx959r2c2nj89d8g) > 1) {
$m4is_pnt5try0dkt3v2xggd = 'AND';

if (!empty($m4is_gv7vjyv2c6g3nepw6['tax_compare'])) {
$m4is_pnt5try0dkt3v2xggd = strtoupper(trim($m4is_gv7vjyv2c6g3nepw6['tax_compare']) );

if ($m4is_pnt5try0dkt3v2xggd !== 'OR' || $m4is_pnt5try0dkt3v2xggd !== 'AND') {
$m4is_pnt5try0dkt3v2xggd = 'AND';
}
}
$m4is_pp5m1cx4vgx959r2c2nj89d8g[] = [ 'relation' =>
 $m4is_pnt5try0dkt3v2xggd ];
}
return empty($m4is_pp5m1cx4vgx959r2c2nj89d8g) ? false : $m4is_pp5m1cx4vgx959r2c2nj89d8g;
}

static function course_grid_item_data(array $m4is_d60kn1d3yvprp62rs332,
 int $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh) {
$m4is_pk98f5nk = get_post_meta($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, '_memberium/coursegrid/config',
 true);
$m4is_pk98f5nk = $m4is_pk98f5nk ? $m4is_pk98f5nk : [];
$m4is_mgh9afqafjbhhdvmsprw = empty($m4is_pk98f5nk['excerpt']) ? '' : html_entity_decode(stripslashes($m4is_pk98f5nk['excerpt']) );


$m4is_jjjpe3tq1p = [
'ID' => $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'title' => get_the_title($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh),

'excerpt' => $m4is_mgh9afqafjbhhdvmsprw,
'url' => get_the_permalink($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh),
'status' => 'unlocked',

'progress' => 0,
'access' => 1,
'order' => empty($m4is_pk98f5nk['order']) ? 0 : (int)$m4is_pk98f5nk['order']
];
$m4is_d60kn1d3yvprp62rs332 = wp_parse_args($m4is_d60kn1d3yvprp62rs332,
 $m4is_jjjpe3tq1p);
$m4is_d60kn1d3yvprp62rs332['thumbnails'] = self::m4is_c2ftpq9q5w5dc($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_d60kn1d3yvprp62rs332,
 $m4is_pk98f5nk);

if (! (int)$m4is_d60kn1d3yvprp62rs332['access'] > 0) {
$m4is_d60kn1d3yvprp62rs332['status_text'] = _x('Not Enrolled',
 'course_grid_status', 'memberium');
$m4is_d60kn1d3yvprp62rs332['progress_text'] = _x('Locked', 'course_grid_progress', 'memberium');

$m4is_d60kn1d3yvprp62rs332['button_text'] = _x('Locked', 'course_grid_button', 'memberium');
$m4is_d60kn1d3yvprp62rs332['thumbnail'] = $m4is_d60kn1d3yvprp62rs332['thumbnails']['locked'];

$m4is_d60kn1d3yvprp62rs332['url'] = !empty($m4is_pk98f5nk['locked_url']) ? $m4is_pk98f5nk['locked_url'] : '';
}
else{
$m4is_d728k3twcey071cb555xrg7pzx = (int)$m4is_d60kn1d3yvprp62rs332['progress'];

$m4is_d60kn1d3yvprp62rs332['thumbnail'] = $m4is_d60kn1d3yvprp62rs332['thumbnails']['unlocked'];
$m4is_d60kn1d3yvprp62rs332['status_text'] = _x('Enrolled',
 'course_grid_status', 'memberium');

if ($m4is_d728k3twcey071cb555xrg7pzx > 0 && $m4is_d728k3twcey071cb555xrg7pzx < 100) {
$m4is_d60kn1d3yvprp62rs332['progress_text'] = sprintf(_x('%d%% Completed',
 'course_grid_progress', 'memberium') , $m4is_d728k3twcey071cb555xrg7pzx);
$m4is_d60kn1d3yvprp62rs332['button_text'] = _x("Continue",
 'course_grid_button', 'memberium');
}

else if ($m4is_d728k3twcey071cb555xrg7pzx >= 100) {
$m4is_d60kn1d3yvprp62rs332['status'] = 'completed';

$m4is_d60kn1d3yvprp62rs332['status_text'] = _x('Completed', 'course_grid_status', 'memberium');
$m4is_d60kn1d3yvprp62rs332['progress_text'] = _x('Completed',
 'course_grid_progress', 'memberium');
$m4is_d60kn1d3yvprp62rs332['button_text'] = _x('Completed', 'course_grid_button', 'memberium');

}

else{
if( $m4is_d60kn1d3yvprp62rs332['status'] === 'not_enrolled' ){
$m4is_d60kn1d3yvprp62rs332['status'] = 'unlocked';
$m4is_d60kn1d3yvprp62rs332['status_text'] = _x('Not Enrolled',
 'course_grid_status', 'memberium');
}
$m4is_d60kn1d3yvprp62rs332['progress_text'] = _x('Not Started', 'course_grid_progress', 'memberium');

$m4is_d60kn1d3yvprp62rs332['button_text'] = _x('Start', 'course_grid_button', 'memberium');
}
}
return $m4is_d60kn1d3yvprp62rs332;

}
static function m4is_c2ftpq9q5w5dc($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_d60kn1d3yvprp62rs332, $m4is_pk98f5nk) {
$m4is_xenx8p8esazs18xzte = get_post_thumbnail_id($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh);

$m4is_w2qnyn4rs8pkx6xrprjqezfyy1aht = get_the_post_thumbnail_url($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, 'medium');
$m4is_8b457gbk2wfw0dz6n0vhavam8rg = [];

$m4is_yrsthh0s4s62mfk9 = [
'unlocked',
'locked'
];
if (empty($m4is_w2qnyn4rs8pkx6xrprjqezfyy1aht)) {
$m4is_w2qnyn4rs8pkx6xrprjqezfyy1aht = plugin_dir_url(MEMBERIUM_HOME) . "css/memberium-default-course.svg";

}
foreach ($m4is_yrsthh0s4s62mfk9 as $m4is_29gzevpx8rbkp) {
$m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt = !empty($m4is_pk98f5nk[$m4is_29gzevpx8rbkp]) ? $m4is_pk98f5nk[$m4is_29gzevpx8rbkp] : [];

$m4is_7e86anqymhkj14qajyegpahnj = !empty($m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt['url']) ? esc_url($m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt['url']) : '';

$m4is_68hfm5ngwwdjg727hfzg1gd = !empty($m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt['id']) ? (int)$m4is_8xcxhz3daqc55qvtz38fp4prn6wb7gt['id'] : 0;

$m4is_71hw584zxas8 = !empty($m4is_68hfm5ngwwdjg727hfzg1gd) ? wp_get_attachment_image_srcset($m4is_68hfm5ngwwdjg727hfzg1gd) : '';
if (empty($m4is_7e86anqymhkj14qajyegpahnj)) {
$m4is_7e86anqymhkj14qajyegpahnj = $m4is_w2qnyn4rs8pkx6xrprjqezfyy1aht;

$m4is_68hfm5ngwwdjg727hfzg1gd = $m4is_xenx8p8esazs18xzte;
$m4is_71hw584zxas8 = $m4is_w2qnyn4rs8pkx6xrprjqezfyy1aht;
}

$m4is_8b457gbk2wfw0dz6n0vhavam8rg[$m4is_29gzevpx8rbkp] = [
'src' =>
 $m4is_7e86anqymhkj14qajyegpahnj,
'id' => $m4is_68hfm5ngwwdjg727hfzg1gd,
'srcset' => $m4is_71hw584zxas8
];
}
return $m4is_8b457gbk2wfw0dz6n0vhavam8rg;

}
static function m4is_cnmp908p5jvatm($m4is_gv7vjyv2c6g3nepw6, $m4is_pzt6khc4q09nwp) {
$m4is_94t1xn2qbxt9bqj81q952 = "<style>";
$m4is_qrd3whp9nsjv6jzc576fcf1 = [
'mobile_cols' =>
 [
'col' => 1
],
'tablet_cols' => [
'col' => 2,
'break' => 768
],
'columns' => [
'col' => 3,
'break' => 992
],
'widescreen_cols' =>
 [
'col' => 3,
'break' => 1312
]
];





foreach ($m4is_qrd3whp9nsjv6jzc576fcf1 as $m4is_qrd3whp9nsjv6jzc576fcf1 => $m4is_n7x0afpz) {
$m4is_5ntpw9sak1c8vv0ejmw1k6p59g4k6 = (int)esc_attr($m4is_gv7vjyv2c6g3nepw6[$m4is_qrd3whp9nsjv6jzc576fcf1]);

$m4is_5ntpw9sak1c8vv0ejmw1k6p59g4k6 = empty($m4is_5ntpw9sak1c8vv0ejmw1k6p59g4k6) ? $m4is_n7x0afpz['col'] : $m4is_5ntpw9sak1c8vv0ejmw1k6p59g4k6;


if ($m4is_qrd3whp9nsjv6jzc576fcf1 != 'mobile_cols') {
$m4is_7fb751frmdcnx = (int)esc_attr(apply_filters("memberium/lms/breakpoint/pixel/{$m4is_qrd3whp9nsjv6jzc576fcf1}",
 $m4is_n7x0afpz['break']) );
$m4is_7fb751frmdcnx = empty($m4is_7fb751frmdcnx) ? $m4is_n7x0afpz['break'] : $m4is_7fb751frmdcnx;
$m4is_94t1xn2qbxt9bqj81q952 .= "@media (min-width: {$m4is_7fb751frmdcnx}px) {";

}

$m4is_94t1xn2qbxt9bqj81q952 .= ".{$m4is_pzt6khc4q09nwp} {";
if ($m4is_qrd3whp9nsjv6jzc576fcf1 === 'mobile_cols') {
$m4is_94t1xn2qbxt9bqj81q952 .= "margin:0 auto;display:grid;grid-gap:2em;";

}
$m4is_94t1xn2qbxt9bqj81q952 .= "grid-template-columns: repeat({$m4is_5ntpw9sak1c8vv0ejmw1k6p59g4k6}, 1fr);";
$m4is_94t1xn2qbxt9bqj81q952 .= "}";
 
$m4is_94t1xn2qbxt9bqj81q952 .= ($m4is_qrd3whp9nsjv6jzc576fcf1 != 'mobile_cols' ) ? "}" : ""; 
}
$m4is_94t1xn2qbxt9bqj81q952 .= "</style>";

return $m4is_94t1xn2qbxt9bqj81q952;
}

static function m4is_n7ytdbzkcfy8b8xyht3ct59qg1r5vj6($m4is_j8j55t8dz79m7, $m4is_gv7vjyv2c6g3nepw6) {
if (is_array($m4is_gv7vjyv2c6g3nepw6) && is_string($m4is_j8j55t8dz79m7) && !empty($m4is_gv7vjyv2c6g3nepw6[$m4is_j8j55t8dz79m7])) {
$m4is_pt7z3n28xwxf1m8ffs2tsz5pythtx1 = $m4is_gv7vjyv2c6g3nepw6[$m4is_j8j55t8dz79m7];

$m4is_n2ssfh8hh6rxvwe3 = array_unique(explode(',', trim($m4is_pt7z3n28xwxf1m8ffs2tsz5pythtx1, ',') ));
$m4is_n2ssfh8hh6rxvwe3 = array_values(array_filter($m4is_n2ssfh8hh6rxvwe3,
 'is_numeric' ) );
return (!empty($m4is_n2ssfh8hh6rxvwe3) ) ? $m4is_n2ssfh8hh6rxvwe3 : false;
}
return false;
}

static function course_grid_course_order_sort($m4is_mzjfbdah8s6,
 $m4is_44cdzgm778bexmhms83at29gpfz6py74) {
if ($m4is_44cdzgm778bexmhms83at29gpfz6py74 !== 'course_order' || empty($m4is_mzjfbdah8s6)) {
return $m4is_mzjfbdah8s6;

}
$m4is_rxs4cxar3tfgfkmbbk = [
'unlocked' => 1,
'completed' => 2,
'locked' => 3
];
usort($m4is_mzjfbdah8s6, function ($m4is_scd306enrps5n51f0b99fys55kap,
 $m4is_wjj9nqa5) use($m4is_rxs4cxar3tfgfkmbbk) {

if ($m4is_scd306enrps5n51f0b99fys55kap['order'] === $m4is_wjj9nqa5['order']) {

if ($m4is_scd306enrps5n51f0b99fys55kap['status'] === $m4is_wjj9nqa5['status']) {

if ($m4is_scd306enrps5n51f0b99fys55kap['status'] === 'unlocked') {
return $m4is_scd306enrps5n51f0b99fys55kap['progress'] < $m4is_wjj9nqa5['progress'] ? 1 : -1;

}
else{
return 1;
}
}

else {
return $m4is_rxs4cxar3tfgfkmbbk[$m4is_scd306enrps5n51f0b99fys55kap['status']] > $m4is_rxs4cxar3tfgfkmbbk[$m4is_wjj9nqa5['status']] ? 1 : -1;

}
}

return $m4is_scd306enrps5n51f0b99fys55kap['order'] > $m4is_wjj9nqa5['order'] ? 1 : -1;
});
return $m4is_mzjfbdah8s6;
}
static $m4is_4w3fxbp6qnf1w5xhyfyda41r4bvxhtse = 0;

private function __construct() {
}
}
