<?php
use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\TrainingSession;
use BTN\BriefingRoom\TrainingRecord;
use StellarWP\DB\DB;
use StellarWP\DB\QueryBuilder\QueryBuilder;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;
use StellarWP\DB\QueryBuilder\WhereQueryBuilder;

include_once 'components/list-table.html';
include_once 'components/list-table-pagination.html';

if(isset($_REQUEST['startDate']) && $_REQUEST['startDate']) $startDate = date('Y-m-d', strtotime($_REQUEST['startDate']));
if(isset($_REQUEST['endDate']) && $_REQUEST['endDate']) $endDate = date('Y-m-d', strtotime($_REQUEST['endDate']));
$agency_id = Memberium::getContactField('_AgencyID'); 

if( ! $agency_id ) exit;

$query = TrainingSession::query();

$currentPage = ( isset($_REQUEST['sess_report_page']) && $_REQUEST['sess_report_page'] != '' ) ? absint($_REQUEST['sess_report_page']) : 1;
$nextPage = $currentPage + 1;
$perPage = 25;



// Subquery for user IDs
$query->joinRaw( "INNER JOIN (SELECT userId FROM wp_btn_managers WHERE organizationId = {$agency_id}
UNION
SELECT facilitator.userId 
FROM wp_btn_sergeants facilitator
JOIN wp_btn_stations station ON facilitator.stationId = station.id
WHERE station.agencyId =  {$agency_id}
UNION
SELECT student.userId 
FROM wp_btn_officers student
JOIN wp_btn_stations station ON student.stationId = station.id
WHERE station.agencyId = {$agency_id}) as user_ids ON user_ids.userId=trainingsession.userId" );


$query->leftJoin('posts', 'trainingsession.trainingId', 'training.ID', 'training')
      ->leftJoin(Sergeant::getTable(), 'facilitator.userId', 'trainingsession.userId', 'facilitator')
      ->leftJoin(Manager::getTable(), 'manager.userId', 'trainingsession.userId', 'manager')
      ->leftJoin(Officer::getTable(), 'student.userId', 'trainingsession.userId', 'student');

// Date filter
if (isset($_GET['startDate']) && $_GET['startDate'] != null) {
    $query->where('trainingsession.completedAt', $_GET['startDate'], '>=');
}

if (isset($_GET['endDate']) && $_GET['endDate'] != null) {
    $query->where('trainingsession.completedAt', $_GET['endDate'], '<=');
}
 
// SEARCH BY  NAME
if (!empty($_REQUEST['search'])) {
    $search = DB::esc_like($_REQUEST['search']);
    $query->whereLike('post_title', $search);
}



$countQuery = clone $query;
$dataQuery = clone $query;

$countResult = $countQuery->selectRaw('SELECT COUNT(DISTINCT trainingsession.id) as total')
                          ->getAll();

$dataQuery->selectRaw('SELECT trainingsession.*,
    training.post_title, 
    facilitator.firstName as facilitator_fname, facilitator.lastName as facilitator_lname,
    manager.firstName as manager_fname, manager.lastName as manager_lname,
    student.firstName as student_fname, student.lastName as student_lname');

$dataQuery->groupBy('trainingsession.id');
$total = $countResult[0]->total ?? 0;

// SORT BY ID OR NAME
if (!empty($_REQUEST['sort'])) {
    [$sortColumn, $sortDirection] = explode(',', $_REQUEST['sort']);
    $allowedSortColumns = ['trainingsession.id', 'post_title'];
    $dataQuery->orderBy(
        in_array($sortColumn, $allowedSortColumns, true) ? $sortColumn : 'trainingsession.id',
        in_array($sortDirection, ['ASC', 'DESC'], true) ? $sortDirection : 'DESC'
    );
} else {
	 $dataQuery->orderBy( 'trainingsession.id','ASC' );
}
 

$dataQuery->orderBy( 'trainingsession.id','ASC' );

// echo $dataQuery->getSQL();
 
$numPages = ceil($total / $perPage);

// Fetch and process results

$sessions = $dataQuery->limit($perPage)->offset(($currentPage - 1) * $perPage)->getAll();

$sessionRows = [];
$loadedSessionIds = [];

if( !empty( $sessions ) ) {
	foreach( $sessions as $data ) {
		$loadedSessionIds[] = $data->id;
	}

	$countQuery = TrainingSession::query()->selectRaw('SELECT trainingsession.id, count(*) as cnt')
					->innerJoin( TrainingRecord::getTable(), 'trainingrecord.sessionId', 'trainingsession.id', 'trainingrecord' )
					->whereIn('trainingsession.id', $loadedSessionIds )
					->where('trainingrecord.userId', 0, '>')
					->groupBy('trainingsession.id');

					echo '<hr>';
			// echo $countQuery->getSQL();
 		



	$studentCountRows =  $countQuery->getAll();
	$sessionCounts = [];
	if( ! empty( $studentCountRows ) ) {
		foreach( $studentCountRows as $row ) {
			$sessionCounts[ $row->id ] = $row->cnt;
		}
	}

	foreach( $sessions as $data ) {
		
		$session = new TrainingSession(get_object_vars($data));

		$reportUrl = new \BTN\BriefingRoom\Reports\LinkBuilder('session', $session->id);
		$reportUrl->tap(function($url) {
			if(!empty($_GET['startDate'])) $url->addArg('startDate', $_GET['startDate']);
			if(!empty($_GET['endDate'])) $url->addArg('endDate', $_GET['endDate']);
		}); 
	
		$sessionRows[] = [
			'select_all_item_session' => '<input type="checkbox" name="select_all_item_session[]" value="'.$session->id.'">',
			'id' => $session->id,
			'date' => date('m/d/Y', strtotime( $session->completedAt ) ),
			'name' => $data->post_title,
			'facilitator' => getFacilitatorName( $data ),
			'trainingTime' => TimeFormatter::minutesToHours($session->duration()),
			'officers' => isset( $sessionCounts[$data->id] ) ? $sessionCounts[$data->id] : 0,
			'action' => implode(' ', [
				"<a href='{$reportUrl->getCsvUrl()}'>CSV</a>",
				"<a href='{$reportUrl->getHtmlUrl()}' target='_blank' rel='noopener noreferrer'>PDF</a>",
			])
		]; 
	}
}


// Facilitator can be user role facilitator (sergeant), manager, or student (officer) - only one will have the name fileds filled in
function getFacilitatorName( $data ) {
	if( $data->facilitator_fname != '' ) {
		return $data->facilitator_fname . ' ' . $data->facilitator_lname;
	} elseif( $data->manager_fname != '' ) {
		return $data->manager_fname . ' ' . $data->manager_lname;
	} elseif( $data->student_fname != '' ) {
		return $data->student_fname . ' ' . $data->student_lname;
	} else return '';
}
 

function generateWeekSelect($id = 'weekSelect') {
    $today = new DateTime();
    
    // Find start of this week (Monday)
    $weekStart = clone $today;
    $weekStart->modify('monday this week');

    echo "<select id=\"$id\">\n";
    echo "<option value=\"\">Select Week</option>\n";

    for ($i = 0; $i < 12; $i++) {
        $start = clone $weekStart;
        $start->modify("-{$i} week");
        $end = clone $start;
        $end->modify('+6 days');

        $value = $start->format('Y-m-d') . ',' . $end->format('Y-m-d');
        $label = $start->format('m/d/y') . ' - ' . $end->format('m/d/y');

        echo "<option value=\"$value\">$label</option>\n";
    }

    echo '</select><button type="button" onclick="weekReport()">Weekly CSV Report</button>';
}

?>

<div class="btn-admin-session-reporting">

	<div class="week-select"><?php generateWeekSelect() ?></div>

    <form name="session_report_form" method="GET">
		<input id="report_page" class="report_page" type="hidden" name="sess_report_page" value="<?php echo $currentPage ?>">
        <div style="display: flex; flex-direction: row; gap: 20px;">
            <label for="search">
                <span class="screen-reader-text">Search</span>
                <input id="search" type="search" name="search" placeholder="Search" value="<?php echo @$search ?: ''; ?>" />
            </label>
            <label for="sort">
                <span class="screen-reader-text">Sort</span>
                <select id="sort" name="sort">
                    <option value="">Sort</option>
                    <option value="post_title,ASC" <?php selected( @$_REQUEST['sort'], 'post_title,ASC' ); ?>>Name ASC</option>
                    <option value="post_title,DESC" <?php selected( @$_REQUEST['sort'], 'post_title,DESC' ); ?>>Name DESC</option>
                </select>
            </label>
            <label for="startDate">
                <span class="screen-reader-text">Start Date</span>
                <input id="startDate" name="startDate" type="date" placeholder="Start Date" value="<?php echo $startDate ?: ''; ?>" />
            </label>
            <label for="endDate">
                <span class="screen-reader-text">End Date</span>
                <input id="endDate" name="endDate" type="date" placeholder="Start Date" value="<?php echo $endDate ?: ''; ?>" />
            </label>
            <button id="session_report_submit" type="submit">Filter</button>
        </div>
    </form>

	<div class="generate_all">
		<a class="all-session-csv" href="/?btn_download_report=session&format=csv">Download Selected Sessions (CSV)</a> 
		<a class="all-session-pdf" href="/?btn_download_report=session&format=html" target="_blank" rel="noopener noreferrer">Download Selected Sessions (PDF)</a>
	</div>

	<div class="tablenav top">
        <list-table-pagination
            data-label="session(s)"
            data-page="<?php echo $currentPage; ?>"
            data-page-count="<?php echo $numPages; ?>"
            data-row-count="<?php echo count($sessionRows); ?>"
            data-total-count="<?php echo $total; ?>"
            data-form="session_report_form"
        >
        </list-table-pagination>
    </div>


    <list-table
        data-columns='[
					  {"id": "select_all_item_session","label":""},
                      {"id": "id","label": "ID"},
					  {"id": "date","label": "Date"},
                      {"id": "name","label": "Session Name"},
					  {"id": "facilitator","label": "Facilitator Name"},
                      {"id": "trainingTime","label": "Duration"},
                      {"id": "officers","label": "Students"},
                      {"id": "action","label": "Downloads"}
                      ]'
        data-rows='<?php  echo json_encode($sessionRows, JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_APOS); ?>'
        data-actions='[]'
    ></list-table>

</div>

<style>
	th#select_all_item_session {
		width: 20px;
	}
	th#select_all_item_session .tablesorter-header-inner:after {
		display: none;
	}
	.tablesorter-header-inner input {
		margin-right: 10px;
	}
    .btn-admin-session-reporting button {
        padding: 0 20px;
    }

    .btn-admin-session-reporting table {
        margin-top: 20px;
    }

    .btn-admin-session-reporting table tfoot {
        display: none;
    }

    .btn-admin-session-reporting table thead {
        color: black;
        background-color: #d0d8e3;
    }

    .btn-admin-session-reporting table,
    .btn-admin-session-reporting table thead,
    .btn-admin-session-reporting table tfoot,
    .btn-admin-session-reporting table th,
    .btn-admin-session-reporting table tr,
    .btn-admin-session-reporting table td {
        border: 0;
    }

	.btn-admin-session-reporting table tr > th {
		text-align:left;
	}

	.btn-admin-session-reporting table tr > th:nth-child(4) {
		width: 30%;
	}
    .btn-admin-session-reporting table tr > td {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .btn-admin-session-reporting table tr {
        padding-bottom: 1em;
        border-top: 1px solid #dde0e2;
        box-shadow: 0 2px 5px #dde0e2;
    }

    .btn-admin-session-reporting table tr > td:nth-child(2) {
        color: #3e252a;
        font-weight: bold;
    }

    .btn-admin-session-reporting table a {
        color: #004da9;
        padding: 5px 15px;
        border: 1px solid #004da9;
    }
	.serg-link {
		border: none !important;
		color: #838f98 !important;
	}
	.serg-link:hover{
		color:#004da9 !important;
	}
	.generate_all {
		margin-top: 20px;
	}
	.generate_all a {
		background: #004da9;
		color: #fff;
		padding: 10px 25px;
		margin: 5px;
	}
	.generate_all a:hover{
		background:#091e4b;
	}
	
	.generate_all {
		display: flex;
		justify-content: center;
	}

	.tablenav-pages {
		float: right;
	}

	a.prev-page, a.next-page {
		padding: 10px 20px;
	}

	a.prev-page {
		margin-right: 10px;

	}

	 a.next-page {
		margin-left: 10px;
	 }

	.week-select {
		margin: 20px 0;
		padding: 0 0 20px;
		border-bottom: 1px solid #ccc;
	}

	.week-select select {
		width: auto;
		margin-right: 20px;
	}

	.week-select button {
		height: 40px;
	}
	.generate_all {
		display: flex;
		justify-content: center;
		display: none;
	}

	.tablenav.top {
		margin: 1rem auto 0;
	}
		
	input[type="date"]{
    	background-color: #fff !important;
	}
</style>



<script>

	/*======================================================
	 * Download Report
	 *====================================================*/

	jQuery(document).ready(function($){
		// Initialize visibility
		$('.all-session-csv, .all-session-pdf').hide();

		// Add select all checkbox
		$('#select_all_item_session').prepend('<input type="checkbox" name="select_all_item_sessions" id="select_all_item_sessions">');

		// Handle select all checkbox change
		$(document).on('change', '#select_all_item_sessions', function() {
			const isChecked = $(this).is(':checked');
			$('input[name="select_all_item_session[]"]').prop('checked', isChecked);
			toggleExportButtons(isChecked);
		});

		// Handle individual checkbox change
		$(document).on('change', 'input[name="select_all_item_session[]"]', function() {
			const anyChecked = $('input[name="select_all_item_session[]"]:checked').length > 0;
			toggleExportButtons(anyChecked);
		});

		// Handle export button clicks (CSV and PDF)
		$('.all-session-csv, .all-session-pdf').on('click', function(e) {
			e.preventDefault();
			const $this = $(this);
			const selectedIds = $('input[name="select_all_item_session[]"]:checked')
				.map(function() { return $(this).val(); })
				.get()
				.join(',');

			let url = $this.attr('href');
			const urlParams = new URLSearchParams(window.location.search);
			const startDate = urlParams.get('startDate');
			const endDate = urlParams.get('endDate');

			// Build URL with parameters
			url += `&session_id=${selectedIds}`;
			if (startDate) url += `&startDate=${startDate}`;
			if (endDate) url += `&endDate=${endDate}`;

			$this.attr('href', url);
			window.open(url, '_blank');
		});

		// Helper function to toggle export buttons visibility
		function toggleExportButtons(show) {
			$('.all-session-csv, .all-session-pdf').toggle(show);
		}

		
		jQuery(document).on('click','.download-session-report', function(e) {

			var link = $(this).attr('href');

			if(link == ''){

			e.preventDefault();

			var id= $(this).data('id');
			var startDate = $('#startDate').val();
			var endDate   = $('#endDate').val();

			var thi = $(this);
			thi.text('Generating...').prop('disabled', true);

				jQuery.ajax({
					type: 'POST',
					url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
					data: {
						_ajax_nonce: '<?php echo wp_create_nonce( '_ajax_nonce' ); ?>',
						action: 'generate_session_csv_report',
						'id' : id,
						'startDate' : startDate,
						'endDate' : endDate
					},
					success: (res) => {

						console.log(res);

						if (res.success) {

							const fileUrl = res.data.file_url;
							thi.text('Download Report').prop('disabled', false);

							const a = document.createElement('a');
							a.href = fileUrl;
							a.download = ''; // Optional: Set a specific filename
							document.body.appendChild(a);
							a.click(); // Programmatically click the anchor
							document.body.removeChild(a);


						} else {
							alert(res.data);
							thi.text('Download Report').prop('disabled', false);
						}
					}
				});

			}
		});

	});


	function weekReport() {
		const select = document.getElementById('weekSelect');
		const val = select.value;

		if (!val) {
			// Set custom validation message and trigger native browser UI
			select.setCustomValidity('Please select a week first.');
			select.reportValidity();

			// Listen once to clear the message when the user changes the selection
			select.addEventListener('change', function handleChange() {
				select.setCustomValidity('');
				select.removeEventListener('change', handleChange);
			});

			return;
		}

		// Clear previous validation in case it was set earlier
		select.setCustomValidity('');

		const [start, end] = val.split(',');

		let url = '/?btn_download_report=session&format=csv';
		const urlParams = new URLSearchParams(window.location.search);

		url += `&session_id=all`;
		if (start) url += `&startDate=${start}`;
		if (end) url += `&endDate=${end}`;

		window.open(url, '_blank');
	}


</script>
