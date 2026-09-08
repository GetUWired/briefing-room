<?php
$terms = get_terms([
    'taxonomy' => $term_taxonomy,
    'orderby'  => 'meta_value_num',
    'meta_key' => 'menu_order',
    'order'    => 'ASC',
    'hide_empty' => true, // Optional: Include terms without posts
]);
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    $html .="<div class=\"{$ns}-hide-categories-wrapper\">";
        $html .="<div class=\"{$ns}-hide-categories-title\">";
            $html .="Training Categories";
        $html .="</div>";
        $html .="<div class=\"{$ns}-hide-categories-inner\">";
            foreach ( $terms as $term ) {
                $title = $term->name;
                $id = $term->term_id;
                $thumbnail = get_field('image', $term->taxonomy . '_' . $id);
                $link = get_term_link($id);
                $action_check =  btn_briefing()->hidebriefing()->record_exists($agency_id, 'term', $id);
                $html .="<div class=\"{$ns}-hide-item-list\">";
                            $html .="<a href=\"{$link}\" target=\"_blank\"><h3>{$title}</h3></a>";
                            $html .="<div class=\"{$ns}-hide-action\">";
                                $data_action = ($action_check)? "unhide" : "hide";
                                $html .="<button class=\"{$ns}-hide-action btn-{$data_action}\" data-action=\"{$data_action}\" data-type=\"term\" data-value=\"{$id}\" data-agency-id=\"{$agency_id}\">{$data_action}</button>";
                            $html .="</div>";
                $html .="</div>";
            }
        $html .="</div>";
    $html .="</div>";
}

$briefing_ids = btn_briefing()->hidebriefing()->get_records_by_agency_and_term($agency_id,'post');
if(!empty($briefing_ids)){
    $html .="<div class=\"{$ns}-hide-post-wrapper\">";
        $html .="<div class=\"{$ns}-hide-post-title\">";
            $html .="Hidden Training Blocks";
        $html .="</div>";
        $html .="<div class=\"{$ns}-hide-post-inner\">";
            foreach ( $briefing_ids as $post_id ) {
                $title = get_the_title($post_id);
                $link = get_permalink($post_id);
                $action_check =  btn_briefing()->hidebriefing()->record_exists($agency_id, 'post', $post_id);
                $html .="<div class=\"{$ns}-hide-item-list\">";
                            $html .="<a href=\"{$link}\" target=\"_blank\"><h3>{$title}</h3></a>";
                            $html .="<div class=\"{$ns}-hide-action\">";
                                $data_action = ($action_check)? "unhide" : "hide";
                                $html .="<button class=\"{$ns}-hide-action btn-{$data_action}\" data-action=\"{$data_action}\" data-type=\"post\" data-value=\"{$post_id}\" data-agency-id=\"{$agency_id}\">{$data_action}</button>";
                            $html .="</div>";
                $html .="</div>";
            }
        $html .="</div>";
    $html .="</div>";
}
?>