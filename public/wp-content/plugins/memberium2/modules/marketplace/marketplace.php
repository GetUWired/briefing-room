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

if (! current_user_can('manage_options') ) {
wp_die(__('You do not have sufficient permissions to access this page.') );
}

if (! empty($m4is_kgdw36kdpg5wt2t33r) ) {
echo "<style type=\"text/css\">{$m4is_kgdw36kdpg5wt2t33r}</style>";

}
echo '<div class="wrap marketplace-wrap memberium">';

if( isset($m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp) && ( ! empty($m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp['title']) || ! empty($m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp['desc']) ) ){
echo '<div class="marketplace-description marketplace-description-header">';

echo ( ! empty($m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp['title']) ) ? '<h3>'.$m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp['title'].'</h3>' : '';

echo ( ! empty($m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp['desc']) ) ? '<p>'.$m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp['desc'].'</p>' : '';
echo '</div>';

}

echo '<div class="wrap">';
$m4is_ddqa38ppt6jsq2z7cdnxsjzm4bs5n8xn = false;

if($m4is_m2v15rtvdgct80e){
echo '<h4 class="nav-tab-wrapper">';

foreach( $m4is_v0bq50g2mpbf46px5ze4gmc1htwp as $m4is_rwvhr14tkxcjnhnsrhab1n706cbq ) {
$m4is_6k84v5caq4k = $m4is_rwvhr14tkxcjnhnsrhab1n706cbq['slug'];

if( $m4is_6k84v5caq4k > '' ){
if( $m4is_6k84v5caq4k === $m4is_7taqn5khadgmds8dhb3xbtmpc ){
$m4is_ddqa38ppt6jsq2z7cdnxsjzm4bs5n8xn = $m4is_rwvhr14tkxcjnhnsrhab1n706cbq;

echo '<span class="nav-tab nav-tab-active">';
echo $m4is_rwvhr14tkxcjnhnsrhab1n706cbq['title'];
echo '</span>';
}
else{
echo '<a class="nav-tab" href="'.$m4is_zexj6fxa8z4k14byndq1vmx.'&amp;tab='.$m4is_6k84v5caq4k.'">';

echo $m4is_rwvhr14tkxcjnhnsrhab1n706cbq['title'];
echo '</a>';
}
}
}

echo '</h4>';
}

if ( $m4is_ddqa38ppt6jsq2z7cdnxsjzm4bs5n8xn ){
echo '<br class="clear">';

if( ! empty($m4is_ddqa38ppt6jsq2z7cdnxsjzm4bs5n8xn['desc']) ){
echo '<p class="memberium-marketplace-desc">'.$m4is_ddqa38ppt6jsq2z7cdnxsjzm4bs5n8xn['desc'].'</p>';

}

echo '<div class="wp-list-table widefat">';
echo '<div id="the-list">';

$m4is_d4zqp2nn1jfwe = '<div class="memberium-marketplace-card %s %s"%s>';

$m4is_d4zqp2nn1jfwe .='<figure%s><img src="%s"/></figure>';
$m4is_d4zqp2nn1jfwe .='<div class="memberium-marketplace-content">';
$m4is_d4zqp2nn1jfwe .= '<h3> %s </h3>';

$m4is_d4zqp2nn1jfwe .='<p> %s </p>';
$m4is_d4zqp2nn1jfwe .='<div class="memberium-marketplace-buttons">';
$m4is_d4zqp2nn1jfwe .='<a class="button button-primary" href="%s" target="_blank">';

$m4is_d4zqp2nn1jfwe .= __('Learn More').'</a>';
$m4is_d4zqp2nn1jfwe .='</div>';
$m4is_d4zqp2nn1jfwe .='</div>';
$m4is_d4zqp2nn1jfwe .= '</div>';


foreach ($m4is_ddqa38ppt6jsq2z7cdnxsjzm4bs5n8xn['listings'] as $m4is_j8j55t8dz79m7 => $m4is_pa3dh7rnh8a4nzfz28wjm8bry3gjkhtm) {
$m4is_74t69akr89kbmhgf6b08jg5m0v73t = ( $m4is_pa3dh7rnh8a4nzfz28wjm8bry3gjkhtm['style'] > '' ) ? " style=\"{$m4is_pa3dh7rnh8a4nzfz28wjm8bry3gjkhtm['style']}\"" : "";
 
$m4is_c7qsw4b0wq7skg628az2f22 = ''; 
if( $m4is_pa3dh7rnh8a4nzfz28wjm8bry3gjkhtm['border'] > '' ){
$m4is_ck649ped2 = "border-color:{$m4is_pa3dh7rnh8a4nzfz28wjm8bry3gjkhtm['border']};";

if( $m4is_pa3dh7rnh8a4nzfz28wjm8bry3gjkhtm['border'] === 'transparent' ){
$m4is_ck649ped2 .= ' border:none;';
}
$m4is_c7qsw4b0wq7skg628az2f22 = ( $m4is_ck649ped2 > '' ) ? " style=\"{$m4is_ck649ped2}\"" : "";

}
echo sprintf( $m4is_d4zqp2nn1jfwe,
sanitize_title_with_dashes($m4is_pa3dh7rnh8a4nzfz28wjm8bry3gjkhtm['title']),
$m4is_pa3dh7rnh8a4nzfz28wjm8bry3gjkhtm['className'],

$m4is_74t69akr89kbmhgf6b08jg5m0v73t,
$m4is_c7qsw4b0wq7skg628az2f22,
$m4is_pa3dh7rnh8a4nzfz28wjm8bry3gjkhtm['logo'],
$m4is_pa3dh7rnh8a4nzfz28wjm8bry3gjkhtm['title'],

$m4is_pa3dh7rnh8a4nzfz28wjm8bry3gjkhtm['desc'],
$m4is_pa3dh7rnh8a4nzfz28wjm8bry3gjkhtm['link']
);
}

echo '</div>';

echo '</div>';

}

if( $m4is_c0tp21wz8gjz0504xz33r && ( (! empty($m4is_c0tp21wz8gjz0504xz33r['title'])) || (! empty($m4is_c0tp21wz8gjz0504xz33r['desc']) ) || ! empty($m4is_c0tp21wz8gjz0504xz33r['link']) ) ){
echo '<div class="marketplace-description marketplace-description-footer">';

echo ( ! empty($m4is_c0tp21wz8gjz0504xz33r['title']) ) ? '<h3>'.$m4is_c0tp21wz8gjz0504xz33r['title'].'</h3>' :'';
echo ( ! empty($m4is_c0tp21wz8gjz0504xz33r['desc']) ) ? '<p>'.$m4is_c0tp21wz8gjz0504xz33r['desc'].'</p>' :'';

if( ! empty($m4is_c0tp21wz8gjz0504xz33r['link']) ){
if( ! empty($m4is_c0tp21wz8gjz0504xz33r['link']['title']) && ! empty($m4is_c0tp21wz8gjz0504xz33r['link']['url']) ){
echo sprintf('<a href="%s">%s</a>',
$m4is_c0tp21wz8gjz0504xz33r['link']['url'],$m4is_c0tp21wz8gjz0504xz33r['link']['title']);
}
}
echo '</div>';
}

echo '</div>';

echo '</div>';

