<?php 
if(!empty($post_ids)){
    $html .="<div class=\"{$ns}-assign-post-wrapper  table-sorting-wrapper\">";
		
		$html .='<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;" class="tablesorter">
		<thead style="background-color: #f0f4f8;">
		  <tr>
			<th class="wrapper-assigned">Assigned</th>
			<th>Assigned To</th>
			<th>Status</th>
			<th>Action</th>
		  </tr>
		</thead>';
		$html .='<tbody>';
		if(!empty($post_ids)){
			  foreach ( $post_ids as $post ) {
				$id = $post['id'];
				$post_id = $post['training_id'];
				$assigned_name = $post['assigned_name']; 
                $title = get_the_title($post_id);
				$item_status = $post['status'];
                $link = get_permalink($post_id);
				$status = 	$item_status == 'inactive'? "Inactive" : "Active";
				$class = ($status =='inactive') ? "inactive-wrapper" : "";
				  $html .='<tr class="'.$ns.'-hide-item-list-table '.$class.'">
                            <td class="table-td-wrap"><a href="'.$link.'" target="_blank">'.$title.'</a></td>
                            <td>'.$assigned_name.'</td>
                            <td class="btn-view-status">'.$status.'</td>
							<td>';
							  $html .="<div class=\"{$ns}-assign-action\">";
								  $html .="<a class=\"btn-view-link\" target=\"_blank\" href=\"{$link}\">View Block</a>";
								  if($item_status !='inactive'){
									  $html .="<a class=\"btn-view-link-remove\" data-id=\"{$id}\">Remove</a>";
									  
								  }
								  else{
									  $html .="<a class=\"btn-view-link-active\" data-id=\"{$id}\">Make it Active</a>";
									
								  }
							$html .="</div>";
							$html .='</td>
                        </tr>';
			  }
		}
			$html .='</tbody>';
		$html .='</table>';
		$html .=' <!-- Pager controls -->
		  <div class="pager">
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
	     $html .="</div>";
    $html .="</div>";
}
?>