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

include_once 'components/list-table.html';
include_once 'components/list-table-pagination.html';

$startDate = !empty($_REQUEST['startDate']) ? date('Y-m-d', strtotime($_REQUEST['startDate'])) : null;
$endDate   = !empty($_REQUEST['endDate']) ? date('Y-m-d', strtotime($_REQUEST['endDate'])) : null;
$memb_agency_id = Memberium::getContactField('_AgencyID') ?: 1;

$search = $_REQUEST['search'] ?? '';
$sort = $_REQUEST['sort'] ?? '';
$stationId = $_REQUEST['stID'] ?? '';

// Pagination setup
$perPage = 25;
$currentPage = isset($_REQUEST['off_report_page']) ? max(1, (int)$_REQUEST['off_report_page']) : 1;
$offset = ($currentPage - 1) * $perPage;

/* -------------------------
 * Officers Query
 * ------------------------ */
$officerQuery = Officer::query()->where('stationAgencyId', $memb_agency_id);

if (!empty($stationId)) {
    $officerQuery->where('officer.stationId', $stationId, '=');
}

// JOIN STATION NAME
$officerQuery->join(function (JoinQueryBuilder $builder) {
    $stationQuery = Station::query()
        ->select(['id as station_id,name AS stationName, agencyId as stationAgencyId']);
    $builder->joinRaw("LEFT JOIN ({$stationQuery->getSQL()}) station ON officer.stationId = station_id");
});

// JOIN TRAINING SESSIONS
$officerQuery->join(function (JoinQueryBuilder $builder) use ($startDate, $endDate) {
    $whereClauses = [];
    if ($startDate) $whereClauses[] = "trainingsession.completedAt >= '" . esc_sql($startDate) . "'";
    if ($endDate) $whereClauses[] = "trainingsession.completedAt <= '" . esc_sql($endDate) . "'";
    $whereSql = $whereClauses ? 'WHERE ' . implode(' AND ', $whereClauses) : '';

    $subquery = "
        SELECT record.userId,
               SUM(duration) AS totalDuration,
               COUNT(*) AS trainingSessionCount
        FROM wp_btn_training_sessions AS trainingsession
        INNER JOIN wp_btn_training_records AS record
          ON trainingsession.id = record.sessionId
        {$whereSql}
        GROUP BY record.userId
    ";

    $builder->joinRaw("LEFT JOIN ({$subquery}) training ON officer.userId = training.userId");
});

// Search
if (!empty($search)) {
    $officerQuery->where(function($query) use ($search) {
        $query->whereLike('officer.firstName', $search)
              ->orWhereLike('officer.lastName', $search);
    });
}

// Sort
if (!empty($sort)) {
    [$sortColumn, $sortDirection] = explode(',', $sort);
    $allowedSortColumns = ['id', 'firstName'];
    $officerQuery->orderBy(
        in_array($sortColumn, $allowedSortColumns, true) ? $sortColumn : 'id',
        in_array($sortDirection, ['ASC','DESC'], true) ? $sortDirection : 'DESC'
    );
} else {
    $officerQuery->orderBy('id','ASC');
}

// Get total count for pagination
$officerTotal = clone $officerQuery;
$totalOfficers = count($officerTotal->getAll());

// Apply limit and offset
$officers = $officerQuery->limit($perPage)->offset($offset)->getAll();

$officerRows = array_map(function($officer) {
    $reportUrl = new \BTN\BriefingRoom\Reports\LinkBuilder('student', $officer->id);
    $reportUrl->tap(function($url) {
        if(!empty($_REQUEST['startDate'])) $url->addArg('startDate', $_REQUEST['startDate']);
        if(!empty($_REQUEST['endDate'])) $url->addArg('endDate', $_REQUEST['endDate']);
    });
    return [
        'id' => $officer->id,
        'sortId' => $officer->userId,
        'sortName' => $officer->lastName . ', ' . $officer->firstName,
        'officerName' => $officer->firstName . ' ' . $officer->lastName . '<br><span class="wrapper-station-row">'.$officer->stationName.'</span>',
        'duration' => TimeFormatter::minutesToHours($officer->totalDuration),
        'sessions' => $officer->trainingSessionCount,
        'action' => "<div class='wrapper-csv-pdf'>
                        <a href='{$reportUrl->getCsvUrl()}'>CSV</a>
                        <a href='{$reportUrl->getHtmlUrl()}' target='_blank' rel='noopener noreferrer'>PDF</a>
                     </div>"
    ];
}, $officers);


/* -------------------------
 * Sergeants Query
 * ------------------------ */
$sergeantQuery = Sergeant::query()->where('stationAgencyId', $memb_agency_id);

if (!empty($stationId)) {
    $sergeantQuery->where('sergeant.stationId', $stationId, '=');
}

// JOIN STATION NAME
$sergeantQuery->join(function (JoinQueryBuilder $builder) {
    $stationQuery = Station::query()
        ->select(['id as station_id,name AS stationName, agencyId as stationAgencyId']);
    $builder->joinRaw("LEFT JOIN ({$stationQuery->getSQL()}) station ON sergeant.stationId = station_id");
});

// JOIN TRAINING SESSIONS
$sergeantQuery->join(function (JoinQueryBuilder $builder) use ($startDate, $endDate) {
    $whereClauses = [];
    if ($startDate) $whereClauses[] = "trainingsession.completedAt >= '" . esc_sql($startDate) . "'";
    if ($endDate) $whereClauses[] = "trainingsession.completedAt <= '" . esc_sql($endDate) . "'";
    $whereSql = $whereClauses ? 'WHERE ' . implode(' AND ', $whereClauses) : '';

    $subquery = "
        SELECT record.userId,
               SUM(duration) AS totalDuration,
               COUNT(*) AS trainingSessionCount
        FROM wp_btn_training_sessions AS trainingsession
        INNER JOIN wp_btn_training_records AS record
          ON trainingsession.id = record.sessionId
        {$whereSql}
        GROUP BY record.userId
    ";

    $builder->joinRaw("LEFT JOIN ({$subquery}) training ON sergeant.userId = training.userId");
});

// Search
if (!empty($search)) {
    $sergeantQuery->where(function($query) use ($search) {
        $query->whereLike('sergeant.firstName', $search)
              ->orWhereLike('sergeant.lastName', $search);
    });
}

// Sort
if (!empty($sort)) {
    [$sortColumn, $sortDirection] = explode(',', $sort);
    $allowedSortColumns = ['id', 'firstName'];
    $sergeantQuery->orderBy(
        in_array($sortColumn, $allowedSortColumns, true) ? $sortColumn : 'id',
        in_array($sortDirection, ['ASC','DESC'], true) ? $sortDirection : 'DESC'
    );
} else {
    $sergeantQuery->orderBy('id','ASC');
}

// Get total count for pagination
$sergeantTotal = clone $sergeantQuery;
$totalSergeants = count($sergeantTotal->getAll());

// Apply limit and offset
$sergeants = $sergeantQuery->limit($perPage)->offset($offset)->getAll();

$sergeantRows = array_map(function($sergeant) {
    $reportUrl = new \BTN\BriefingRoom\Reports\LinkBuilder('sergeant_student', $sergeant->id);
    $reportUrl->tap(function($url) {
        if(!empty($_REQUEST['startDate'])) $url->addArg('startDate', $_REQUEST['startDate']);
        if(!empty($_REQUEST['endDate'])) $url->addArg('endDate', $_REQUEST['endDate']);
    });

    return [
        'id' => $sergeant->id,
        'sortId' => $sergeant->userId,
        'sortName' => $sergeant->lastName . ', ' . $sergeant->firstName,
        'officerName' => $sergeant->firstName . ' ' . $sergeant->lastName . '<br><span class="wrapper-station-row">'.$sergeant->stationName.'</span>',
        'duration' => TimeFormatter::minutesToHours($sergeant->totalDuration),
        'sessions' => $sergeant->trainingSessionCount,
        'action' => "<div class='wrapper-csv-pdf'>
                        <a href='{$reportUrl->getCsvUrl()}'>CSV</a>
                        <a href='{$reportUrl->getHtmlUrl()}' target='_blank' rel='noopener noreferrer'>PDF</a>
                     </div>"
    ];
}, $sergeants);


/* -------------------------
 * Combine Rows + Paginate
 * ------------------------ */
$rows = [...$officerRows, ...$sergeantRows];

if (!empty($sort)) {
    [$sortColumn, $sortDirection] = explode(',', $sort);
    if ($sortColumn === 'firstName') {
        usort($rows, fn($a,$b) => $sortDirection === 'ASC' ? strcmp($a['sortName'],$b['sortName']) : strcmp($b['sortName'],$a['sortName']));
    }
}

$totalCount = $totalOfficers + $totalSergeants;
$pageCount = max(1, ceil($totalCount / $perPage));
$rows = array_slice($rows, 0, $perPage); // already limited by queries

$stations = Station::query()->where('agencyId', $memb_agency_id)->getAll();
?>


<div class="btn-admin-sergeant-reporting">

    <form id="officerForm" method="GET">
        <input type="hidden" class="report_page" name="off_report_page" value="<?php echo $currentPage; ?>" />

        <div style="display: flex; flex-direction: row; gap: 20px;">
            <label for="search">
                <span class="screen-reader-text">Search</span>
                <input id="search" type="search" name="search" placeholder="Search By Student Name" value="<?php echo $search ?: ''; ?>" />
            </label>

            <label for="sort">
                <span class="screen-reader-text">Sort</span>
                <select id="sort" name="sort">
                    <option value="">Sort</option>disabled
                    <option value="firstName,ASC" <?php selected( $_REQUEST['sort'], 'firstName,ASC' ); ?>>Name ASC</option>
                    <option value="firstName,DESC" <?php selected( $_REQUEST['sort'], 'firstName,DESC' ); ?>>Name DESC</option>
                </select>
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


<div class="tablenav top">
    <list-table-pagination
        data-label="Students"
        data-page="<?php echo $currentPage; ?>"
        data-page-count="<?php echo $pageCount; ?>"
        data-row-count="<?php echo count($rows); ?>"
        data-total-count="<?php echo $totalCount; ?>"
        data-form="officerForm"
    ></list-table-pagination>
</div>
<list-table
    data-columns='[
				  {"id": "id","label": "ID"},
				  {"id": "officerName","label": "Student Name"},
				  {"id": "duration","label": "Training Time"},
				  {"id": "sessions","label": "Sessions Completed"},
				  {"id": "action","label": "Downloads"}]'
    data-rows='<?php  echo json_encode($rows, JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_APOS); ?>'
    data-actions='[]'
></list-table>

</div>



<style>
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

<script src="https://mottie.github.io/tablesorter/dist/js/jquery.tablesorter.min.js"></script>
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