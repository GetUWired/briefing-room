<?php
$complete = get_user_meta($user_id, 'btn-briefing-completed', true);
if ( $loop->have_posts() ) {
    $html .= "<div class=\"{$ns}-inner-wrapper-category\">";
	    while ( $loop->have_posts() ) : $loop->the_post();
            $id = get_the_ID();
            $title = get_the_title();
            $link = get_the_permalink();
            $image_url = get_the_post_thumbnail_url( $id, 'full' );
			if(empty($image_url)){
				$image_url = btn_briefing()->frontend()->default_image();
			}
            $get_excerpt = get_field("description",$id);
            if(!empty($complete) && in_array($id, $complete)){
                $completed_class = "completed";
                $completed_html ='<div class="wrapper-complete"><i class="fa fas fa-check-circle"></i><span>You have completed this training block</span></div>';
            }
            else{
                $completed_class = "not-completed";
                $completed_html ='<i class="fa fas fa-play-circle"></i>';
            }

            $html .="<div class=\"{$ns}-item-post-category {$completed_class}\" id=\"post-wrapper-{$id}\">";
				$html .="<a href=\"{$link}\"><div  class=\"{$ns}-item-a-image\" style=\"background-image:url('{$image_url}')\"></div></a>";
                $html .="<a href=\"{$link}\" class=\"{$ns}-item-a\">";
                    $html .="<div class=\"{$ns}-item-post-category-inner-wrapper\">";
                        $html .="<div class=\"icon-wrapper {$completed_class}\">";
                            $html .= $completed_html;
                        $html .="</div>";
                        $html .="<div class=\"content-wrapper\">";
                            $html .="<h4>{$title}</h4>";
                            $html .="<div class=\"content-excerpt-inner\">";
                                $html .= "<div class=\"content-excerpt-description\">{$get_excerpt}</div>";
                            $html .="</div>";
                        $html .="</div>";
                    $html .="</div>";
                $html .="</a>";
            $html .="</div>";

        endwhile;
    $html .="</div>";
}
else{
	$html .= "<div class=\"{$ns}-wrapper\">";
		$html .="No Result Found";
	$html .="</div>";


}