<?php
$counts = 1;
if(empty($user_id)){
	$user_id = get_current_user_id();
}
$complete = get_user_meta($user_id, 'btn-briefing-completed', true);
if ( $loop->have_posts() ) {
    $columns = 4;
    $html .= "<div class=\"{$ns}-inner-wrapper {$ns}-wrapper-column-{$columns}\">";
	    while ( $loop->have_posts() ) : $loop->the_post();



		    $id = get_the_ID();

			// if(!memb_hasPostTermAccess($id)){
			// 	continue;
			// }

		    $title = get_the_title();
		    $link = get_the_permalink();

            $current_date = date('Y-m-d H:i:s'); // Current date in MySQL format
            $four_weeks_ago = date('Y-m-d H:i:s', strtotime('-42 days', strtotime($current_date)));
            // Get the post date (replace this with your actual post date retrieval method)
            $post_date = get_the_date('Y-m-d H:i:s'); // Post date in MySQL format
            $banner = "";
            // Compare the post date with the date range
            if (strtotime($post_date) >= strtotime($four_weeks_ago) && strtotime($post_date) <= strtotime($current_date)) {
                $banner = "<div class=\"new-badge\">NEW</div>";
            }
			$image_url = get_the_post_thumbnail_url( $id, 'full' );
			if(empty($image_url)){
				$image_url = btn_briefing()->frontend()->default_image();
			}
			if(!empty($complete) && in_array($id, $complete)){
				$completed_class = "completed";
				$completed_html ='<div class="wrapper-complete"><i class="fa fas fa-check-circle"></i><span>You have completed this training block</span></div>';
				$banner = '';
			}
			else{
				$completed_class = "not-completed";
				$completed_html ='';
				
			}
			$html .="<div class=\"{$ns}-wrapper-item-list {$completed_class}\">";
                    $html .="<a href=\"{$link}\">";
						 $html .="<div class=\"icon-wrapper {$completed_class}\">";
                            $html .= $completed_html;
                        $html .="</div>";
						
                        $html .= $banner;
                        $html .="<img src=\"{$image_url}\">";
						$html .="<div class=\"wrapper-content\" >";
							$html .="<h4>{$title}</h4>";
                            $html .="<button class=\"btn-access\">Access Now</button>";
						$html .="</div>";
                    $html .="</a>";
			$html .="</div>";
		    endwhile;
	    $html .="</div>";
    $total_rows = max( 0, $loop->found_posts  );
	$total_pages = ceil( $total_rows / $posts_per_page );
    if ($total_pages > 1 && $pagination == 1){
        $current_page = max(1, $paged);
        $html .="<div class=\"{$ns}-pagination-wrapper\">";
			$html .= paginate_links(array(
				'base' => $page_url. '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('«'),
				'next_text'    => __('»'),
			));
        $html .="</div>";
    }
}else{
	$html .= "<div class=\"{$ns}-wrapper\" style=\"text-align:center;\">";
		$html .="No Result Found";
	$html .="</div>";


}
wp_reset_postdata();
?>
