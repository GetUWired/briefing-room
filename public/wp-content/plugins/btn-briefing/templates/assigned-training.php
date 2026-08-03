<?php


$html .="<div class=\"{$ns}-assigned-training-wrapper\">";
    $html .="<div class=\"{$ns}-assigned-training-item\">";
        $html .="<label>Choose Training Category</label>";
        $html .="<select name=\"{$ns}-assigned-selector-category\" class=\"{$ns}-assigned-selector {$ns}-assigned-selector-category\">";
        $html .="<option value=\"\" disabled selected>Select Training Category</option>";
        $terms = get_terms([
            'taxonomy' => $term_taxonomy,
            'orderby'  => 'meta_value_num',
            'meta_key' => 'menu_order',
            'order'    => 'ASC',
            'hide_empty' => false, // Optional: Include terms without posts
        ]);
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            foreach ( $terms as $term ) {
                $id = $term->term_id;
                $title = $term->name;
                $html .="<option data-type=\"category\" value=\"{$id}\">{$title}</option>";
            }
        }
        $html .="</select>";
    $html .="</div>";
	
	 $html .="<div class=\"{$ns}-assigned-training-item\">";
			$html .="<label>Select Block / All Blocks</label>";
			$html .="<select name=\"{$ns}-assigned-selector-block\" class=\"{$ns}-assigned-selector {$ns}-assigned-selector-block\" disabled>";
			$html .="<option value=\"\" disabled selected>Select one individual video from the category</option>";
			if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
						$id = get_the_ID();
						$title = get_the_title();
						$html .="<option data-type=\"block\" value=\"{$id}\">{$title}</option>";
					endwhile;
				wp_reset_postdata();
			}
			$html .="</select>";
		$html .="</div>";
    //User ID
    $html .="<div class=\"{$ns}-assigned-training-item\">";
        $html .="<label>Add Training to Agency / Station / User</label>";
        $html .="<select name=\"{$ns}-assigned-type\" class=\"{$ns}-assigned-type\">";
            $html .="<option value=\"\" disabled selected>Select a Agency / Station</option>";
            $agencies = btn_briefing()->assigned_training()->get_user_agency();
            if(!empty($agencies)){
                foreach ($agencies as $agency) {
                    $id = $agency['id'];
                    $title = $agency['name'];
                    $html .="<option data-type=\"agency\" value=\"{$id}\">{$title} - Assign to entire agency.</option>";
                }
            }
            $agencies = btn_briefing()->assigned_training()->get_user_station();
            $html .= "<optgroup label=\"Assign by Station\">";
            if(!empty($agencies)){
                foreach ($agencies as $agency) {
                    $id = $agency['id'];
                    $title = $agency['name'];
                    $html .="<option data-type=\"station\" value=\"{$id}\">{$title}</option>";
                }
            }
            $html .="</optgroup>";
		
				$agency_id = btn_briefing()->hidebriefing()->get_agency_id_by_user_id();
				$station_id = '';
				$user_ids =  btn_briefing()->assigned_training()->get_officers_by_agency($agency_id, $station_id,false,true);
				if(!empty($user_ids)){
					$html .= "<optgroup label=\"Assign by User\">";
						foreach ($user_ids as $user_id) {
							$user = get_userdata($user_id);
							$first_name = get_user_meta($user->ID, 'first_name', true);
							$last_name  = get_user_meta($user->ID, 'last_name', true);
							$email  = $user->user_email;
							$full_name  = trim("{$first_name} {$last_name} ({$email})");
							$html .="<option data-type=\"user\" value=\"{$user_id}\">{$full_name}</option>";
						}
					$html .="</optgroup>";
					}
					

				
        $html .="</select>";
    $html .="</div>";
	
    $html .="<div class=\"{$ns}-assigned-training-item-submit\">";
        $html .="<label></label>";
        $html .="<button class=\"btn-assign\">Assign Training</button>";
    $html .="</div>";
$html .="</div>";
?>