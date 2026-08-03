<?php

// TODO: Update to exclude categories if all post are locked by memberium settings



//$terms = get_terms($term_taxonomy);
$terms = get_terms([
    'taxonomy' => $term_taxonomy,
    'orderby'  => 'meta_value_num',
    'meta_key' => 'menu_order',
    'order'    => 'ASC',
    'hide_empty' => false, // Optional: Include terms without posts
]);

if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    $selected_all = (empty($category_id)) ? "selected" : "";
    $html .="<div class=\"{$ns}-selector-wrapper\">";
    foreach ( $terms as $term ) {

        if(!memb_hasTermAccess($term->term_id, $term_taxonomy)){
            continue;
        }

        $title = $term->name;
        $id = $term->term_id;
        $thumbnail = get_field('image', $term->taxonomy . '_' . $id);
        $link = get_term_link($id);

        $html .="<div class=\"{$ns}-wrapper-item-list\">";
                $html .="<a href=\"{$link}\">";
                    $html .="<img src=\"{$thumbnail}\">";
                    $html .="<div class=\"wrapper-bg\" >";
                        $html .="<h3>{$title}</h3>";
                    $html .="</div>";
                $html .="</a>";
        $html .="</div>";
    }
    $html .="</div>";
}

?>