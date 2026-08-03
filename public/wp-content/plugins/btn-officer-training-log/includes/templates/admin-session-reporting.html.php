<?php

if(isset($_REQUEST['startDate']) && $_REQUEST['startDate']) $startDate = date('Y-m-d', strtotime($_REQUEST['startDate']));
if(isset($_REQUEST['endDate']) && $_REQUEST['endDate']) $endDate = date('Y-m-d', strtotime($_REQUEST['endDate']));

$search = $_REQUEST['search'] ?? null;
$sort = $_REQUEST['sort'] ?? null;

$currentPage = 1;

?>

<div class="btn-admin-session-reporting">

	<div class="week-select"><?php generateWeekSelect() ?></div>

    <form id="session_report_form" name="session_report_form" method="GET" class="report_form">
		<input type="hidden" name="action" value="get_sessions_report">
		<input type="hidden" name="sort" value="<?=$sort?>">

		<input id="report_page" class="report_page" type="hidden" name="report_page" value="<?php echo $currentPage ?>">
        <div style="display: flex; flex-direction: row; gap: 20px;">
            <label for="search">
                <span class="screen-reader-text">Search</span>
                <input id="search" type="search" name="search" placeholder="Search" value="<?php echo @$search ?: ''; ?>" />
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

	<div id="session_report_container">
	</div>

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
	}

	.tablenav.top {
		margin: 1rem auto 0;
	}


    .tablenav-pages a{
        cursor: pointer;
    }
		
	input[type="date"]{
    	background-color: #fff !important;
	}

	span.tableSort {
		position: relative;
		cursor: pointer;
	}
	span.tableSort::after {
		content: '⇅';
		position: relative;
		right: 0;
		font-size: 0.8em;
		color: gray;
		top: 0px;
		margin-left: 10px;
	}
</style>

<script>

	/*======================================================
	 * Download Report
	 *====================================================*/

	jQuery(document).ready(function($){
		// Initialize visibility
		$('.all-session-csv, .all-session-pdf').hide();

		// Handle select all checkbox change
		$(document).on('change', '.select_all_item_session', function() {
			const isChecked = $(this).is(':checked');
			$('input[name="select_all_item_session[]"]').prop('checked', isChecked).trigger('change');
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

			if (!selectedIds) {
				return;
			}

			const linkUrl = new URL($this.attr('href'), window.location.origin);
			const params = linkUrl.searchParams;
			params.set('session_id', selectedIds);

			const urlParams = new URLSearchParams(window.location.search);
			const startDate = urlParams.get('startDate');
			const endDate = urlParams.get('endDate');

			if (startDate) {
				params.set('startDate', startDate);
			} else {
				params.delete('startDate');
			}

			if (endDate) {
				params.set('endDate', endDate);
			} else {
				params.delete('endDate');
			}

			window.open(linkUrl.toString(), '_blank');
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
