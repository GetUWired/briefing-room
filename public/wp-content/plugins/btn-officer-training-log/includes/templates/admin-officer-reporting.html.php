<?php

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\TrainingSession;
use BTN\BriefingRoom\TrainingRecord;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;
use StellarWP\DB\QueryBuilder\QueryBuilder;


$startDate = !empty($_REQUEST['startDate']) ? date('Y-m-d', strtotime($_REQUEST['startDate'])) : null;
$endDate   = !empty($_REQUEST['endDate']) ? date('Y-m-d', strtotime($_REQUEST['endDate'])) : null;
$memb_agency_id = Memberium::getContactField('_AgencyID') ?: 1;

$search = $_REQUEST['search'] ?? '';
$sort = $_REQUEST['sort'] ?? '';

$currentPage = 1;

$stationId = $_REQUEST['stID'] ?? '';

// Pagination setup
$perPage = 25;
$currentPage = isset($_REQUEST['off_report_page']) ? max(1, (int)$_REQUEST['off_report_page']) : 1;
$offset = ($currentPage - 1) * $perPage;


// if (!empty($sort)) {
//     [$sortColumn, $sortDirection] = explode(',', $sort);
//     if ($sortColumn === 'firstName') {
//         usort($rows, fn($a,$b) => $sortDirection === 'ASC' ? strcmp($a['sortName'],$b['sortName']) : strcmp($b['sortName'],$a['sortName']));
//     }
// }


// $student_data = get_student_report_data($memb_agency_id, $startDate, $endDate, $currentPage, $search, $sort );

// $rows = $student_data['students'];
// $totalCount = $student_data['total'];
// $pageCount = $student_data['numPages'];


$stations = Station::query()->where('agencyId', $memb_agency_id)->getAll();
?>


<div class="btn-admin-sergeant-reporting">

    <form id="officerForm" method="GET" name="student_report_form">
        <input type="hidden" class="report_page" name="off_report_page" value="<?php echo $currentPage; ?>" />

        <input type="hidden" name="action" value="get_students_report">
		<input type="hidden" name="sort" value="<?=$sort?>">

        <div style="display: flex; flex-direction: row; gap: 20px;">
            <label for="search">
                <span class="screen-reader-text">Search</span>
                <input id="search" type="search" name="search" placeholder="Search By Student Name" value="<?php echo $search ?: ''; ?>" />
            </label>
			<label for="station">
                <span class="screen-reader-text">Station</span>
                <select id="station" name="stID">
                    <option value="">Choose Station</option>disabled
					<?php if($stations != null){
							foreach($stations as $station){ ?>
                    <option value="<?php echo $station->id; ?>" <?php selected( $_REQUEST['stID'], $station->id ); ?>><?php echo $station->name; ?></option>
					<?php } } ?>
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
            <button type="submit">Filter</button>
        </div>
    </form>

    <div id="students_report_container"></div>

</div>



<style>

    .skeleton-cell {
        height: 20px; /* cell height */
        background-color: #e0e0e0;
        border-radius: 4px;
        animation: skeletonPulse 1.2s infinite ease-in-out;
    }

    @keyframes skeletonPulse {
        0% { opacity: 1; }
        50% { opacity: 0.4; }
        100% { opacity: 1; }
    }

    /* Optional: match zebra stripe effect */
    .wp-list-table.striped tbody tr.alternate td {
        background-color: #f9f9f9;
    }


    .btn-admin-sergeant-reporting button {
        padding: 0 20px;
    }

    .btn-admin-sergeant-reporting table {
        margin-top: 20px;
    }

    .btn-admin-sergeant-reporting table tfoot {
        display: none;
    }

    .btn-admin-sergeant-reporting table thead {
        color: black;
        background-color: #d0d8e3;
    }

    .btn-admin-sergeant-reporting table,
    .btn-admin-sergeant-reporting table thead,
    .btn-admin-sergeant-reporting table tfoot,
    .btn-admin-sergeant-reporting table th,
    .btn-admin-sergeant-reporting table tr,
    .btn-admin-sergeant-reporting table td {
        border: 0;
    }

	.btn-admin-sergeant-reporting table tr > th {
		text-align:left;
	}
    .btn-admin-sergeant-reporting table tr > td {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .btn-admin-sergeant-reporting table tr {
        padding-bottom: 1em;
        border-top: 1px solid #dde0e2;
        box-shadow: 0 2px 5px #dde0e2;
    }

    .btn-admin-sergeant-reporting table tr > td:nth-child(2) {
        color: #3e252a;
        font-weight: bold;
    }

    .btn-admin-sergeant-reporting table a {
        color: #004da9;
        padding: 5px 15px;
        border: 1px solid #004da9;
		white-space:nowrap;
    }

	select#station{
		min-width:150px;
	}
	.wrapper-csv-pdf a {
		margin-right: 5px;
	}
	.wrapper-csv-pdf {
		display: flex;
	}
	span.wrapper-station-row {
		font-size: 14px;
		text-transform: uppercase;
		color: #838f98;
		line-height: 1.1em;
	}

    .tablenav-pages {
		float: right;
	}

    .tablenav-pages a{
        cursor: pointer;
    }

	a.prev-page, a.next-page {
		padding: 10px 20px;
	}


	/* General styling for the table */
	table.tablesorter th {
		position: relative;
		cursor: pointer;
		padding-right: 20px; /* Space for the icon */
	}

	/* Remove default tablesorter icons (optional) */
	table.tablesorter th.tablesorter-header {
		background-image: none !important;
		background: none !important;
	}

	/* Add custom icons for unsorted columns */
	table.tablesorter th.tablesorter-headerUnSorted .tablesorter-header-inner::after {
		content: '⇅';
		position: relative;
		right: 0;
		font-size: 0.8em;
		color: gray;
		top: 0px;
		margin-left: 10px;
	}

	/* Add custom icon for ascending sort */
	table.tablesorter th.tablesorter-headerAsc .tablesorter-header-inner::after {
		content: '⬆️';
		color: green;
		margin-left: 10px;
	}
	
	/* Add custom icon for descending sort */
	table.tablesorter th.tablesorter-headerDesc .tablesorter-header-inner::after {
		content: '⬇️'; /* Custom icon for descending */
		color: red;
		margin-left: 10px;
	}
	.tablesorter-header-inner {
		position: relative;
	}
	th#id .tablesorter-header-inner::after,
	th#action .tablesorter-header-inner::after{
		display:none;
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

<!-- <script src="https://mottie.github.io/tablesorter/dist/js/jquery.tablesorter.min.js"></script> -->
<script>


	/*======================================================
	 * Download Report
	 *====================================================*/

	jQuery(document).ready(function($){
		$(document).ready(function() {
			$("table").tablesorter();
		});
		jQuery(document).on('click','.download-report', function(e) {

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
						action: 'generate_officer_csv_report',
						'id' : id,
						'startDate' : startDate,
						'endDate' : endDate
					},
					success: (res) => {
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
	
	

</script>

<?php

// echo '<pre>';
// 	print_r($officerQuery->getSQL());
// echo '</pre>';

?>