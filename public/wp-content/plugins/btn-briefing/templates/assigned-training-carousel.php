<?php
if ( $loop->have_posts() ) {
	$html .= "<div class=\"{$ns}-carousel-wrapper\" data-visible=\"3\">";
		$html .= "<div class=\"{$ns}-carousel-track\">";
			while ( $loop->have_posts() ) : $loop->the_post();
				$id = get_the_ID();
				$title = get_the_title();
				$link = get_the_permalink();
				$image_url = get_the_post_thumbnail_url( $id, 'large' );
				if (empty($image_url)) {
					$image_url = btn_briefing()->frontend()->default_image();
				}
				$html .= "<div class=\"{$ns}-carousel-slide\">";
					$html .= "<a href=\"{$link}\">";
						$html .= "<div class=\"{$ns}-wrapper-item-list\">";
							$html .= "<img src=\"{$image_url}\">";
							$html .= "<div class=\"wrapper-content\">";
								$html .= "<h4>{$title}</h4>";
								$html .= "<button class=\"btn-access\">Access Now</button>";
							$html .= "</div>";
						$html .= "</div>";
					$html .= "</a>";
				$html .= "</div>";
			endwhile;
		$html .= "</div>";
		$html .= "<button type=\"button\" class=\"{$ns}-carousel-next\" aria-label=\"Next\">&#8250;</button>";
	$html .= "</div>";
	wp_reset_postdata();
} else {
	$html .= "<div class=\"{$ns}-wrapper\" style=\"text-align:center;\">";
		$html .= "No Result Found";
	$html .= "</div>";
}