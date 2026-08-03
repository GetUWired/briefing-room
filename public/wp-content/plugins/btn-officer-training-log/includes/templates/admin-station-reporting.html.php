<?php
use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Station;
use StellarWP\DB\DB;

include_once 'components/list-table.html';

$agency_id = Memberium::getContactField('_AgencyID') ?: 1;
$startDate = !empty($_REQUEST['startDate']) ? date('Y-m-d', strtotime($_REQUEST['startDate'])) : null;
$endDate = !empty($_REQUEST['endDate']) ? date('Y-m-d', strtotime($_REQUEST['endDate'])) : null;
$search = !empty($_REQUEST['search']) ? $_REQUEST['search'] : null;
$sort = !empty($_REQUEST['sort']) ? explode(',', $_REQUEST['sort']) : ['totalDuration', 'DESC'];
$sortColumn = in_array($sort[0], ['id','name']) ? $sort[0] : 'totalDuration';
$sortDirection = in_array($sort[1] ?? 'ASC',['ASC','DESC']) ? $sort[1] : 'ASC';

// Build the SQL manually
$sql = "
WITH training AS (
    SELECT s.stationId, SUM(t.duration) AS totalDuration
    FROM wp_btn_training_sessions t
    INNER JOIN wp_btn_sergeants s ON t.userId = s.userId
    " . ($startDate ? "WHERE t.completedAt >= '{$startDate}'" : "") . "
    " . ($endDate ? ($startDate ? " AND " : "WHERE ") . "t.completedAt <= '{$endDate}'" : "") . "
    GROUP BY s.stationId
),
sergeants AS (
    SELECT stationId, COUNT(*) AS sergeantCount
    FROM wp_btn_sergeants
    GROUP BY stationId
),
officers AS (
    SELECT stationId, COUNT(*) AS officerCount
    FROM wp_btn_officers
    GROUP BY stationId
)
SELECT 
    station.id,
    station.name,
    training.totalDuration,
    sergeants.sergeantCount,
    officers.officerCount
FROM wp_btn_stations station
LEFT JOIN training ON station.id = training.stationId
LEFT JOIN sergeants ON station.id = sergeants.stationId
LEFT JOIN officers ON station.id = officers.stationId
WHERE station.agencyId = '{$agency_id}'
" . ($search ? " AND station.name LIKE '%" . DB::esc_like($search) . "%'" : "") . "
ORDER BY {$sortColumn} {$sortDirection}, station.id ASC
";

// Fetch results
$stationRows = array_map(function($data) {
    $station = new Station(get_object_vars($data));
    $reportUrl = new \BTN\BriefingRoom\Reports\LinkBuilder('station', $station->id);
    $reportUrl->tap(function($url) {
        if(!empty($_GET['startDate'])) $url->addArg('startDate', $_GET['startDate']);
        if(!empty($_GET['endDate'])) $url->addArg('endDate', $_GET['endDate']);
    });
    return [
        'select_all_item' => '<input type="checkbox" name="select_all_item[]" value="'.$station->id.'">',
        'id' => $station->id,
        'name' => $station->name,
        'trainingTime' => TimeFormatter::minutesToHours($data->totalDuration),
        'sergeants' => '<a href="?stID='.$station->id.'" class="serg-link" data-type="sergeant">'.$data->sergeantCount.'</a>',
        'officers' => '<a href="?stID='.$station->id.'" class="serg-link" data-type="officer">'.$data->officerCount.'</a>',
        'action' => implode(' ', [
            "<div class='wrapper-csv-pdf'>",
            "<a href='{$reportUrl->getCsvUrl()}'>CSV</a>",
            "<a href='{$reportUrl->getHtmlUrl()}' target='_blank' rel='noopener noreferrer'>PDF</a>",
            "</div>",
        ])
    ];
}, DB::get_results($sql));

?>

<div class="btn-admin-sergeant-reporting">

    <form method="GET">
        <div style="display: flex; flex-direction: row; gap: 20px;">
            <label for="search">
                <span class="screen-reader-text">Search</span>
                <input id="search" type="search" name="search" placeholder="Search" value="<?php echo @$search ?: ''; ?>" />
            </label>
            <label for="sort">
                <span class="screen-reader-text">Sort</span>
                <select id="sort" name="sort">
                    <option value="">Sort</option>disabled
                    <option value="name,ASC" <?php selected( @$_REQUEST['sort'], 'name,ASC' ); ?>>Name ASC</option>
                    <option value="name,DESC" <?php selected( @$_REQUEST['sort'], 'name,DESC' ); ?>>Name DESC</option>
                </select>
            </label>
            <label for="startDate">
                <span class="screen-reader-text">Start Date</span>
                <input id="startDate" name="startDate" type="date" placeholder="Start Date" value="<?php echo $startDate ?: ''; ?>" />
            </label>
            <label for="endDate">
                <span class="screen-reader-text">End Date</span>
                <input id="endDate" name="endDate" type="date" placeholder="End Date" value="<?php echo $endDate ?: ''; ?>" />
            </label>
            <button type="submit">Filter</button>
        </div>
    </form>
	<div class="generate_all">
		<a class="all-station-csv" href="/?btn_download_report=station&format=csv">Download Selected Stations (CSV)</a> 
		<a class="all-station-pdf" href="/?btn_download_report=station&format=html" target="_blank" rel="noopener noreferrer">Download Selected Stations (PDF)</a>
	</div>
    <list-table
        data-columns='[
					  {"id": "select_all_item","label":""},
                      {"id": "id","label": "ID"},
                      {"id": "name","label": "Station Name"},
                      {"id": "trainingTime","label": "Training Time"},
                      {"id": "sergeants","label": "Sergeants"},
                      {"id": "officers","label": "Students"},
                      {"id": "action","label": "Downloads"}
                      ]'
        data-rows='<?php  echo json_encode($stationRows, JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_APOS); ?>'
        data-actions='[]'
    ></list-table>

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



	th#select_all_item {
		width: 20px;
	}
	th#select_all_item .tablesorter-header-inner:after {
		display: none;
	}
	.tablesorter-header-inner input {
		margin-right: 10px;
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

	input[type="date"]{
    	background: #fff !important;
	}

</style>

<script src="https://mottie.github.io/tablesorter/dist/js/jquery.tablesorter.min.js"></script>

<script>

	/*======================================================
	 * Download Report
	 *====================================================*/

	jQuery(document).ready(function($){
		// Initialize visibility
		$('.all-station-csv, .all-station-pdf').hide();

		// Add select all checkbox
		$('#select_all_item').prepend('<input type="checkbox" name="select_all_items" id="select_all_items">');

		// Handle select all checkbox change
		$(document).on('change', '#select_all_items', function() {
			const isChecked = $(this).is(':checked');
			$('input[name="select_all_item[]"]').prop('checked', isChecked);
			toggleExportButtons(isChecked);
		});

		// Handle individual checkbox change
		$(document).on('change', 'input[name="select_all_item[]"]', function() {
			const anyChecked = $('input[name="select_all_item[]"]:checked').length > 0;
			toggleExportButtons(anyChecked);
		});

		// Handle export button clicks (CSV and PDF)
		$('.all-station-csv, .all-station-pdf').on('click', function(e) {
			e.preventDefault();
			const $this = $(this);
			const selectedIds = $('input[name="select_all_item[]"]:checked')
				.map(function() { return $(this).val(); })
				.get()
				.join(',');

			let url = $this.attr('href');
			const urlParams = new URLSearchParams(window.location.search);
			const startDate = urlParams.get('startDate');
			const endDate = urlParams.get('endDate');

			// Build URL with parameters
			url += `&station_id=${selectedIds}`;
			if (startDate) url += `&startDate=${startDate}`;
			if (endDate) url += `&endDate=${endDate}`;

			$this.attr('href', url);
			window.open(url, '_blank');
		});

		// Helper function to toggle export buttons visibility
		function toggleExportButtons(show) {
			$('.all-station-csv, .all-station-pdf').toggle(show);
		}

		
		jQuery(document).on('click','.download-station-report', function(e) {

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
						action: 'generate_station_csv_report',
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
// print_r($sql);
// echo '</pre>';
?>

