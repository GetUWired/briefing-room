<?php
$user_id = get_current_user_id();
$post_ids = btn_briefing()->assigned_training()->get_admin_assignments($user_id,'block');
$officers = btn_briefing()->assigned_training()->get_user_list($user_id, $start_date, $end_date);
$total_training = 0;
if(!empty($officers)){
	$total_training = count($officers);
}
$html .='<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
    <thead style="background-color: #f0f4f8;">
      <tr>
        <th class="wrapper-assigned">Assigned</th>
        <th>Completed</th>
        <th>Not Completed</th>
        <th>Completed %</th>
		<th>Assigned To</th>
		<th>Status</th>
      </tr>
    </thead>';
    $html .='<tbody>';
	if(!empty($post_ids)){
        $fully_completed_users = [];
        foreach($post_ids as $post){
			$station_id = '';
			$agency_id = '';
			$training_id = $post['training_id'];
			$title = get_the_title($training_id);
			$link = get_permalink($training_id);	
			$assigned_name = $post['assigned_name']; 
			$assigned_type = $post['assigned_type'];
			$assigned_to = $post['assigned_to'];
			$item_status = $post['status'];
			$agency_id = '';
			$user_ids = '';
			if($assigned_type == "agency"){
				$agency_id =  $assigned_to;
				
			}
			if($assigned_type == "station"){
				$station_id =  $assigned_to;
			}
			if($assigned_type != "user"){
				$total_training =  btn_briefing()->assigned_training()->get_officers_by_agency($agency_id, $station_id);
				$user_ids =  btn_briefing()->assigned_training()->get_officers_by_agency($agency_id, $station_id,false,true);
				$total_completed = btn_briefing()->assigned_training()->get_total_completed_trainings($training_id,$start_date, $end_date,false,$user_ids);
			}
			else{
				$total_training =  btn_briefing()->assigned_training()->get_officers_by_agency($agency_id, $station_id,false, false, false,false,$assigned_type,$assigned_to);
				$user_ids =  btn_briefing()->assigned_training()->get_officers_by_agency($agency_id, $station_id,false,true,false,false,$assigned_type,$assigned_to);
				$total_completed = btn_briefing()->assigned_training()->get_total_completed_trainings($training_id,$start_date, $end_date,false,false,$assigned_type,$assigned_to);
			}
			
            
			$total_training = (int) $total_training;
			$total_completed = (int) $total_completed;
			$not_completed = $total_training - $total_completed;
			$percentage_completed = ($total_training > 0) ? round(($total_completed / $total_training) * 100) : 0;
			$completed_users = "<a class=\"btn-briefing-completed-training-user\" data-action=\"completed\" data-agency-id = \"{$agency_id}\" data-station-id = \"{$station_id}\" data-training-id=\"{$training_id}\">{$total_completed}</a>";
			$not_completed_users = "<a class=\"btn-briefing-completed-training-user\" data-agency-id = \"{$agency_id}\" data-station-id = \"{$station_id}\" data-action=\"not-completed\" data-type=\"{$assigned_type}\" data-assigned-to=\"{$assigned_to}\" data-training-id=\"{$training_id}\">{$not_completed}</a>";
			$class_status = $item_status == 'inactive'? "inactive-tr-btn" : "active-tr-btn";
			$class = $item_status == 'inactive'? "inactive-tr" : "active-tr";
			$item_status_text = 	$item_status == 'inactive'? "Inactive" : "Active";
			
			
            if ($total_completed > 0 && $total_training === $total_completed && $status == "completed") {
                $html .='<tr class="'.$class.'">
                            <td>'.$title.'</td>
                            <td>'.$completed_users.'</td>
                            <td>'.$not_completed_users.'</td>
                            <td>'.$percentage_completed.'%</td>
							<td>'.$assigned_name.'</td>
							<td><span class="'.$class_status.'" >'.$item_status_text.'</span></td>
                        </tr>';
                $fully_completed_users[] = $post;
            }
            else if($total_completed > 0 && $total_completed < $total_training && $status == "some"){
               $html .='<tr class="'.$class.'">
                           <td>'.$title.'</td>
                            <td>'.$completed_users.'</td>
                            <td>'.$not_completed_users.'</td>
                            <td>'.$percentage_completed.'%</td>
							<td>'.$assigned_name.'</td>
							<td><span class="'.$class_status.'" >'.$item_status_text.'</span></td>
                        </tr>';
                        $fully_completed_users[] = $post;
            }
            else if($total_completed <= 0  && $status == "none"){
                $html .='<tr class="'.$class.'">
                            <td>'.$title.'</td>
                            <td>'.$completed_users.'</td>
                            <td>'.$not_completed_users.'</td>
                            <td>'.$percentage_completed.'%</td>
							<td>'.$assigned_name.'</td>
							<td><span class="'.$class_status.'" >'.$item_status_text.'</span></td>
                        </tr>';
                        $fully_completed_users[] = $post;
            }
            else if($status == "timeframe" && $total_completed > 0){
                $html .='<tr class="'.$class.'">
                            <td>'.$title.'</td>
                            <td>'.$completed_users.'</td>
                            <td>'.$not_completed_users.'</td>
                            <td>'.$percentage_completed.'%</td>
							<td>'.$assigned_name.'</td>
							<td><span class="'.$class_status.'" >'.$item_status_text.'</span></td>
                        </tr>';
                        $fully_completed_users[] = $post;
            }
            else if($status == "all"){
              $html .='<tr class="'.$class.'">
                             <td>'.$title.'</td>
                            <td>'.$completed_users.'</td>
                            <td>'.$not_completed_users.'</td>
                            <td>'.$percentage_completed.'%</td>
							<td>'.$assigned_name.'</td>
							<td><span class="'.$class_status.'" >'.$item_status_text.'</span></td>
							
                        </tr>';
                        $fully_completed_users[] = $post;
            }
			else if($status == "inactive" && $item_status == 'inactive'){
                $html .='<tr class="'.$class.'">
                             <td>'.$title.'</td>
                            <td>'.$completed_users.'</td>
                            <td>'.$not_completed_users.'</td>
                            <td>'.$percentage_completed.'%</td>
							<td>'.$assigned_name.'</td>
							<td><span class="'.$class_status.'" >'.$item_status_text.'</span></td>
							
                        </tr>';
                        $fully_completed_users[] = $post;
            }
			else if($status == "active" && $item_status != 'inactive'){
				 $html .='<tr class="'.$class.'">
                             <td>'.$title.'</td>
                            <td>'.$completed_users.'</td>
                            <td>'.$not_completed_users.'</td>
                            <td>'.$percentage_completed.'%</td>
							<td>'.$assigned_name.'</td>
							<td><span class="'.$class_status.'" >'.$item_status_text.'</span></td>

                        </tr>';
				$fully_completed_users[] = $post;
			}
        }
    }
    $html .='</tbody>';
$html .='</table>';
$html .=' <!-- Pager controls -->
		  <div class="pagers">
			<button class="first">⇤</button>
			<button class="prev">←</button>
			<span class="pagedisplay"></span>
			<button class="next">→</button>
			<button class="last">⇥</button>
			<select class="pagesize">
			  <option selected="selected" value="5">5</option>
			  <option value="10">10</option>
			    <option value="50">50</option>
			  <option value="100">100</option>
			</select>
		  </div>';
$html .='<div class="modal micromodal-slide" id="btn-training-assigned-popup" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" >
          <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <header class="modal__header">
                <button aria-label="Close modal" class="notice-dismiss modal__close" data-micromodal-close></button>
            </header>
            <div class="modal__content" id="modal-1-content">
                <div class="btn-briefing-modal-container"></div>
            </div>
          </div>
        </div>
</div>';

if(empty($fully_completed_users)){
    $html .="<p style=\"text-align:center;\">No result found</p>";
}
?>