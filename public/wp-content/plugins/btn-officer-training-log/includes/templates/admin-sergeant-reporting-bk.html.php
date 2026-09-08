<?php

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\TrainingSession;
use BTN\BriefingRoom\TrainingRecord;
use BTN\BriefingRoom\UserLogin;
use StellarWP\DB\DB;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;
use StellarWP\DB\QueryBuilder\QueryBuilder;

include_once 'components/list-table.html';

if(isset($_REQUEST['startDate']) && $_REQUEST['startDate']) $startDate = date('Y-m-d', strtotime($_REQUEST['startDate']));
if(isset($_REQUEST['endDate']) && $_REQUEST['endDate']) $endDate = date('Y-m-d', strtotime($_REQUEST['endDate']));

$agencyId = Memberium::getContactField('_AgencyID') ?: 1;

$query = Sergeant::query();

// Filter by Agency
$query->where('agency.id', $agencyId);

$query->select(
    'sergeant.*',
    'trainingSession.sessionCount',
    'trainingSession.trainingTime',
    'login.lastLogin',
    ['agency.name', 'agencyName']
);

if( isset($_REQUEST['stID']) && $_REQUEST['stID'] != null){

	$query->where('sergeant.stationId', $_GET['stID'], '=');

}

$perPage = 25;
$currentPage = isset($_REQUEST['serg_report_page']) ? max(1, (int)$_REQUEST['serg_report_page']) : 1;
$offset = ($currentPage - 1) * $perPage;

$query->join(function(JoinQueryBuilder $builder) {
    $builder->leftJoin(Station::getTable(), 'station')
        ->on('sergeant.stationId', 'station.id');
    $builder->leftJoin(Agency::getTable(), 'agency')
        ->on('station.agencyId', 'agency.id');
});

$query = Sergeant::withLastLogin($query);
$query = Sergeant::withTrainingTime($query, function(QueryBuilder $query) use ($startDate, $endDate) {
    if(isset($startDate) && isset($endDate)) {
        $query->whereBetween('completedAt', $startDate, $endDate);
    } elseif(isset($startDate)) {
        $query->where('completedAt', $startDate, '>=');
    } elseif(isset($endDate)) {
        $query->where('completedAt', $endDate, '<');
    }
});

// SORT
if(isset($_REQUEST['sort']) && $_REQUEST['sort']) {
    [$sortColumn, $sortDirection] = explode(',', $_REQUEST['sort']);
    $query->orderBy(
        in_array($sortColumn, ['sessionCount', 'trainingTime', 'lastLogin']) ? $sortColumn : 'id',
        in_array($sortDirection, ['ASC', 'DESC']) ? $sortDirection : 'DESC'
    );
}

// SEARCH
if(isset($_REQUEST['search']) && $_REQUEST['search']) {
    $search = DB::esc_like($_REQUEST['search']);
    $query->whereLike('firstName', $search)
        ->orWhereLike('lastName', $search);
}

$rows = array_map(function($data) {

    $sergeant = new Sergeant(get_object_vars($data));
	$station = Station::find($data->stationId);

    $reportUrl = add_query_arg([
        'btn_download_report' => 'facilitator',
        'facilitator_id' => $sergeant->id,
    ], site_url());

    $reportUrl = new \BTN\BriefingRoom\Reports\LinkBuilder('facilitator', $sergeant->id);
    $reportUrl->tap(function($url) {
        if(!empty($_GET['startDate'])) $url->addArg('startDate', $_GET['startDate']);
        if(!empty($_GET['endDate'])) $url->addArg('endDate', $_GET['endDate']);
    });

    return [
        'id' => $sergeant->id,
        'name' => '<b class="name-wrapper">'.$sergeant->name().'</b><br><span class="wrapper-station-row">'.$station->name.'</span>',
//         'agency' => $data->agencyName,
		//'stationName' => $station->name,
        'sessionCount' => $data->sessionCount ?? 0,
        'trainingTime' => TimeFormatter::minutesToHours($data->trainingTime),
        'lastLogin' => $data->lastLogin ? date('F j, Y', strtotime($data->lastLogin)) : '-',
        'action' => implode(' ', [
			"<div class='wrapper-csv-pdf'>",
            "<a href='{$reportUrl->getCsvUrl()}'>CSV</a>",
            "<a href='{$reportUrl->getHtmlUrl()}' target='_blank' rel='noopener noreferrer'>PDF</a>",
			"</div>",
        ])
    ];
}, $query->getAll());

// Inject Manager as Facilitator.
$managerQuery = Manager::query()
    ->select(
        'manager.*',
        'trainingSession.sessionCount',
        'trainingSession.trainingTime',
        'login.lastLogin',
    )
    ->where('organizationId', $agencyId)
    ->join(function (JoinQueryBuilder $builder) {
        $query = UserLogin::query()->selectRaw('SELECT userId, MAX(loginAt) as lastLogin')->groupBy('userId');
        $builder->joinRaw("LEFT JOIN ({$query->getSQL()}) login ON manager.userId = login.userId");
    })
    ->join(function (JoinQueryBuilder $builder) use ($startDate, $endDate) {
        $query = TrainingSession::query()->selectRaw('SELECT userId, COUNT(*) as sessionCount, SUM(duration) as trainingTime')->groupBy('userId');
        if(isset($startDate)) $query->where('completedAt', $startDate, '>=');
        if(isset($endDate)) $query->where('completedAt', $endDate, '<');
        $builder->joinRaw("LEFT JOIN ({$query->getSQL()}) trainingSession ON manager.userId = trainingSession.userId");
    })
;

$managerRows = array_map(function($data) {
    $manager = new Manager(get_object_vars($data));

    $reportUrl = new \BTN\BriefingRoom\Reports\LinkBuilder('manager', $manager->id);
    $reportUrl->tap(function($url) {
        if(!empty($_GET['startDate'])) $url->addArg('startDate', $_GET['startDate']);
        if(!empty($_GET['endDate'])) $url->addArg('endDate', $_GET['endDate']);
    });

    return [
        'id' => $manager->id,
        'name' => '<b class="name-wrapper">'.$manager->name().'</b>',
        //'stationName' => '-',
        'sessionCount' => $data->sessionCount ?? 0,
        'trainingTime' => TimeFormatter::minutesToHours($data->trainingTime),
        'lastLogin' => $data->lastLogin ? date('F j, Y', strtotime($data->lastLogin)) : '-',
        'action' => implode(' ', [
			"<div class='wrapper-csv-pdf'>",
            	"<a href='{$reportUrl->getCsvUrl()}'>CSV</a>",
            	"<a href='{$reportUrl->getHtmlUrl()}' target='_blank' rel='noopener noreferrer'>PDF</a>",
			"</div>",
        ])
    ];
}, $managerQuery->getAll());

$rows = [
    ...$managerRows,
    ...$rows,
];

$totalCount = count($rows);
$pageCount = max(1, ceil($totalCount / $perPage));
$rows = array_slice($rows, $offset, $perPage);

$stations = Station::query()->where('agencyId',$agencyId)->getAll();

?>

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
    }
	.wrapper-csv-pdf a {
		margin-right: 5px;
	}
	.wrapper-csv-pdf {
		display: flex;
	}
	.name-wrapper{
		color:#000;
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
    	background: #fff !important;
	}

</style>

<div class="btn-admin-sergeant-reporting">

    <form method="GET" id="facilitatorForm">
        <input type="hidden" class="report_page" name="serg_report_page" value="<?php echo $currentPage; ?>" />
        <div style="display: flex; flex-direction: row; gap: 20px;">
            <label for="search">
                <span class="screen-reader-text">Search</span>
                <input id="search" type="search" name="search" placeholder="Search" value="<?php echo $search ?: ''; ?>" />
            </label>
            <label for="sort">
                <span class="screen-reader-text">Sort</span>
                <select id="sort" name="sort">
                    <option value="">Sort</option>disabled
                    <option value="sessionCount,ASC" <?php selected( $_REQUEST['sort'], 'sessionCount,ASC' ); ?>>Session Count ASC</option>
                    <option value="sessionCount,DESC" <?php selected( $_REQUEST['sort'], 'sessionCount,DESC' ); ?>>Session Count DESC</option>
                    <option value="trainingTime,ASC" <?php selected( $_REQUEST['sort'], 'trainingTime,ASC' ); ?>>Training Time ASC</option>
                    <option value="trainingTime,DESC" <?php selected( $_REQUEST['sort'], 'trainingTime,DESC' ); ?>>Training Time DESC</option>
                    <option value="lastLogin,ASC" <?php selected( $_REQUEST['sort'], 'lastLogin,ASC' ); ?>>Last Login ASC</option>
                    <option value="lastLogin,DESC" <?php selected( $_REQUEST['sort'], 'lastLogin,DESC' ); ?>>Last Login DESC</option>
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
            data-label="Facilitators"
            data-page="<?php echo $currentPage; ?>"
            data-page-count="<?php echo $pageCount; ?>"
            data-row-count="<?php echo count($rows); ?>"
            data-total-count="<?php echo $totalCount; ?>"
            data-form="facilitatorForm"
        ></list-table-pagination>
    </div>

    <list-table
        data-columns='[
            {"id": "name","label": "Name"},
            {"id": "sessionCount", "label": "Sessions Taught"},
            {"id": "trainingTime","label": "Training Time"},
            {"id": "lastLogin","label": "Last Login"},
            {"id": "action","label": "Downloads"}
        ]'
        data-rows='<?php echo json_encode($rows, JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_APOS); ?>'
        data-actions='[]'
    ></list-table>

</div>

<style>
	select#station{
		min-width:150px;
	}
</style>

<script>

	/*======================================================
	 * Download Report
	 *====================================================*/

	jQuery(document).ready(function($){

		jQuery(document).on('click','.download-serg-report', function(e) {

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
						action: 'generate_sergeant_csv_report',
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

</script>


<?php

// echo '<pre>';
// 	print_r($query->getSQL());
// echo '</pre>';

?>