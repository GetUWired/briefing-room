<?php
$user_id = get_current_user_id();
$complete = get_user_meta($user_id, 'btn-briefing-completed', true);
if ( $loop->have_posts() ) {
    $columns = 4;
    $html .= "<div class=\"{$ns}-inner-wrapper-playlist\">";
	    while ( $loop->have_posts() ) : $loop->the_post();
		    $id = get_the_ID();
		    $title = get_the_title();
		    $link = get_the_permalink();
			$image_url = get_the_post_thumbnail_url( $id, 'full' );
			if(empty($image_url)){
				$image_url = btn_briefing()->frontend()->default_image();
			}
			$completed_video = '';
			// if(!empty($complete)){
			// 	$completed_video = in_array($id, $complete)? "completed-video" : "";
			// }
			$html .="<div class=\"{$ns}-wrapper-item-list-playlist {$completed_video}\">";
                    $html .="<a href=\"{$link}\">";
                        $html .="<div class=\"{$ns}-column-left\">";
                            $html .="<img src=\"{$image_url}\"><i class='fa fa-play'></i>";
                        $html .="</div>";
                        $html .="<div class=\"{$ns}-column-right\">";
                            $html .="<h4>{$title}</h4>";
                        $html .="</div>";
                    $html .="</a>";
			$html .="</div>";
		    endwhile;
	    $html .="</div>";
}else{
	$html .= "<div class=\"{$ns}-wrapper\">";
		$html .="No Result Found";
	$html .="</div>";
}
wp_reset_postdata();