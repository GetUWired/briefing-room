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

if(isset($_REQUEST['startDate']) && $_REQUEST['startDate']) $startDate = date('Y-m-d', strtotime($_REQUEST['startDate']));
if(isset($_REQUEST['endDate']) && $_REQUEST['endDate']) $endDate = date('Y-m-d', strtotime($_REQUEST['endDate']));

$search = $_REQUEST['search'] ?? null;
$sort = $_REQUEST['sort'] ?? null;

$currentPage = 1;

$agencyId = Memberium::getContactField('_AgencyID') ?: 1;

$stations = Station::query()->where('agencyId',$agencyId)->getAll();

?>

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
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }
    .generate_all a {
        background: #004da9;
        color: #fff;
        padding: 10px 25px;
        margin: 5px;
    }
    .generate_all a:hover {
        background: #091e4b;
    }

    .tablenav.top {
        margin: 1rem auto 0;
    }


    .tablenav-pages a{
        cursor: pointer;
    }

    	
	input[type="date"]{
    	background: #fff !important;
	}

</style>

<div class="btn-admin-sergeant-reporting">

    <form method="GET" id="facilitatorForm" name="facilitatorForm">
        <input type="hidden" class="report_page" name="report_page" value="<?php echo $currentPage; ?>" />   <input type="hidden" name="action" value="get_facilitators_report">
        <input type="hidden" name="sort" value="">
        <div style="display: flex; flex-direction: row; gap: 20px;">
            <label for="search">
                <span class="screen-reader-text">Search</span>
                <input id="search" type="search" name="search" placeholder="Search" value="<?php echo $search ?: ''; ?>" />
            </label>
            <!-- <label for="sort">
                <span class="screen-reader-text">Sort</span>
                <select id="sort" name="sort">
                    <option value="">Sort</option>disabled
                    <option value="sessionCount,ASC" <?php // selected( $_REQUEST['sort'], 'sessionCount,ASC' ); ?>>Session Count ASC</option>
                    <option value="sessionCount,DESC" <?php // selected( $_REQUEST['sort'], 'sessionCount,DESC' ); ?>>Session Count DESC</option>
                    <option value="trainingTime,ASC" <?php // selected( $_REQUEST['sort'], 'trainingTime,ASC' ); ?>>Training Time ASC</option>
                    <option value="trainingTime,DESC" <?php // selected( $_REQUEST['sort'], 'trainingTime,DESC' ); ?>>Training Time DESC</option>
                    <option value="lastLogin,ASC" <?php // selected( $_REQUEST['sort'], 'lastLogin,ASC' ); ?>>Last Login ASC</option>
                    <option value="lastLogin,DESC" <?php // selected( $_REQUEST['sort'], 'lastLogin,DESC' ); ?>>Last Login DESC</option>
                </select>
            </label> -->

			<label for="station">
                <span class="screen-reader-text">Station</span>
                <select id="station" name="stID">
                    <option value="" disabled>Choose Station</option>
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

    <div class="generate_all">
        <a class="all-facilitator-csv" href="/?btn_download_report=facilitators&format=csv">Download Selected Facilitators (CSV)</a>
        <a class="all-facilitator-pdf" href="/?btn_download_report=facilitators&format=html" target="_blank" rel="noopener noreferrer">Download Selected Facilitators (PDF)</a>
    </div>

    <div id="facilitators_report_container"></div>


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

		/*======================================================
		 * Download Selected Facilitators (CSV / PDF)
		 *====================================================*/

		// Hidden until at least one row (or "select all") is checked.
		$('.all-facilitator-csv, .all-facilitator-pdf').hide();

		function toggleFacilitatorExportButtons(show) {
			$('.all-facilitator-csv, .all-facilitator-pdf').toggle(show);
		}

		// "Select all" header checkbox: mirror state onto every row checkbox and
		// flag the export links to pull the whole agency roster.
		$(document).on('change', '.select_all_item_facilitator', function() {
			const isChecked = $(this).is(':checked');
			$('input[name="select_item_facilitator[]"]').prop('checked', isChecked);

			$('.all-facilitator-csv, .all-facilitator-pdf').each(function() {
				const linkUrl = new URL($(this).attr('href'), window.location.origin);
				if (isChecked) {
					linkUrl.searchParams.set('facilitator_ids', 'all');
				} else {
					linkUrl.searchParams.delete('facilitator_ids');
				}
				$(this).attr('href', linkUrl.toString());
			});

			toggleFacilitatorExportButtons(isChecked || $('input[name="select_item_facilitator[]"]:checked').length > 0);
		});

		// Individual row checkbox.
		$(document).on('change', 'input[name="select_item_facilitator[]"]', function() {
			toggleFacilitatorExportButtons($('input[name="select_item_facilitator[]"]:checked').length > 0);
		});

		$('.all-facilitator-csv, .all-facilitator-pdf').on('click', function(e) {
			e.preventDefault();

			const linkUrl = new URL($(this).attr('href'), window.location.origin);
			const params = linkUrl.searchParams;

			// facilitator_ids=all is set by the select-all handler; don't overwrite it.
			if (params.get('facilitator_ids') !== 'all') {
				const selectedIds = $('input[name="select_item_facilitator[]"]:checked')
					.map(function() { return $(this).val(); })
					.get()
					.filter(Boolean)
					.join(',');

				if (!selectedIds) {
					return;
				}

				params.set('facilitator_ids', selectedIds);
			}

			const startDate = $('#startDate').val();
			const endDate = $('#endDate').val();

			if (startDate) { params.set('startDate', startDate); } else { params.delete('startDate'); }
			if (endDate) { params.set('endDate', endDate); } else { params.delete('endDate'); }

			window.open(linkUrl.toString(), '_blank');
		});

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