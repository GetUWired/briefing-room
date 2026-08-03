<?php
$terms = [];
$post_ids = [];
$user_id = get_current_user_id();
$briefing_ids = btn_briefing()->assigned_training()->get_user_assignments($user_id,'block');
$post_ids = $briefing_ids;
$complete_data = get_user_meta($user_id, 'btn-briefing-completed', true);
if($completed == 0){
    if (is_array($complete_data)) {
        // Remove completed post IDs from $post_ids
        $post_ids = array_diff($post_ids, $complete_data);
        // Reindex array if needed
        $post_ids = array_values($post_ids);
    }
}
else {
    if (is_array($complete_data)) {
        // Keep only post IDs that exist in both $post_ids and $complete_data
        $post_ids = array_intersect($post_ids, $complete_data);

        // Reindex array if needed
        $post_ids = array_values($post_ids);
    }
    else{
        $post_ids = [];
    }
}

if(!empty($post_ids)){
	$posts_per_page = 12;
    $completed_html_class = ($completed == 1)? 'wrapper-completed-block': "";
	$counts = 1;
	$args_post['post__in'] = $post_ids;
	$args_post['posts_per_page'] = $posts_per_page;
	$args_post['orderby'] = 'post__in';
	$pagination = 1;
	$loop = new WP_Query( $args_post );
	if ( $loop->have_posts() ) {
		$columns = 4;
		$html .= "<div class=\"{$ns}-inner-wrapper {$ns}-wrapper-column-{$columns}\">";
			while ( $loop->have_posts() ) : $loop->the_post();
				$id = get_the_ID();
				$title = get_the_title();
				$link = get_the_permalink();

				$current_date = date('Y-m-d H:i:s'); // Current date in MySQL format
				$four_weeks_ago = date('Y-m-d H:i:s', strtotime('-42 days', strtotime($current_date)));
				// Get the post date (replace this with your actual post date retrieval method)
				$post_date = get_the_date('Y-m-d H:i:s'); // Post date in MySQL format
				$banner = "";
				// Compare the post date with the date range
				if (strtotime($post_date) >= strtotime($four_weeks_ago) && strtotime($post_date) <= strtotime($current_date) && $completed !=1) {
					$banner = "<div class=\"new-badge\">NEW</div>";
				}
				if($completed){
					$banner = "<div class=\"new-badge\">Completed</div>";
				}
				$image_url = get_the_post_thumbnail_url( $id, 'large' );
				if(empty($image_url)){
					$image_url = btn_briefing()->frontend()->default_image();
				}
				$html .="<div class=\"{$ns}-wrapper-item-list\">";
						$html .="<a href=\"{$link}\">";
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
}
else{
	$html .= "<div class=\"{$ns}-wrapper\" style=\"text-align:center;\">";
	$html .="No Result Found";
	$html .="</div>";


}
?>