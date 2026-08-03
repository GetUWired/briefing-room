<?php

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Station;

include 'components/list-table.html';
include 'components/add-new-dialog.html';

// $total = BTN\BriefingRoom\Station::count();

$filter = false;
$query = Station::query();

// Apply filters based on request parameters
if (!empty($_REQUEST['agency_id'])) {
    $query->where('agencyId', absint($_REQUEST['agency_id']));
    $filter = true;
}

if (!empty($_REQUEST['s'])) {
    $search = sanitize_text_field($_REQUEST['s']);
    $query->whereLike('name', "%{$search}%");
    $filter = true;
}

// Fetch officers
if ($filter) {
    // If filters are applied, fetch filtered results
    $stations = $query->getAll();
	
} else {
	
	// Fetch paginated results when no filter is applied
    $total = Station::count();

    $paged = isset($_GET['paged']) ? absint($_GET['paged']) : 1;
    $perPage = 20;
    $offset = ($paged - 1) * $perPage;

    $query->limit($perPage)->offset($offset);
    $stations = $query->getAll();

}

$rows = array_map(function($station) {
	
	if (!$station instanceof Station) {
        $station = new Station((array) $station); // Ensure Officer instance
    }

    $actions = [
        "<a href='/wp-admin/admin.php?page=briefing-room-stations.php&station_id={$station->id}' class='button'>Details</a>",
    ];

    return [
		'checkbox' => "<input type='checkbox' class='db_ids' value='".$station->id."' style='margin-left:8px' >",
        'id' => $station->id,
        'name' => $station->name,
        'agency' => $station->agencyName(),
        'actions' => implode(" ", $actions),
    ];
}, $stations);


$agencies = Agency::all();
?>

<div class="wrap">
    <h1 class="wp-heading-inline">Stations</h1>

    <hr class="wp-header-end">

    
    <form method="get">
        <input type="hidden" name="page" value="briefing-room-stations.php">
        <p class="search-box" style="margin-bottom: 15px;">
            <label>
                <span class="screen-reader-text">Search: </span>
                <input type="search" name="s" value="<?php if(isset($_REQUEST['s'])) echo $_REQUEST['s']; ?>" placeholder="Search">
            </label>
			<label for="agency">
                    <span class="screen-reader-text">Agency: </span>
                    <select name="agency_id" id="agency">
                        <option value="">All Agencies</option>
                        <?php
                        foreach ($agencies->models as $agency): ?>
                            <option value="<?php
                            echo $agency->id; ?>" <?php
                            if (isset($_REQUEST['agency_id']) && $_REQUEST['agency_id'] == $agency->id) {
                                echo 'selected';
                            } ?>>
                                <?php
                                echo $agency->name; ?>
                            </option>
                        <?php
                        endforeach; ?>
                    </select>
                </label>
            <button type="submit" class="button">Search</button>
            <?php if(isset($_REQUEST['s'])) : ?>
                <a style="color:#b32d2e;" href="<?php echo admin_url('admin.php?page=briefing-room-stations.php'); ?>">Clear</a>
            <?php endif; ?>
        </p>
    </form>

    <div class="tablenav top">
        <?php if(!isset($_REQUEST['s'])){ ?>
        Showing <?php echo count($stations); ?> of <?php echo number_format($total); ?> stations
		<?php } ?>
        <?php if(isset($paged)): ?>
            <div class="tablenav-pages">
                <?php if($paged > 1): ?>
                    <a class="prev-page button" href="<?php echo admin_url('admin.php?page=briefing-room-stations.php&paged=' . ($paged-1)); ?>">
                        <span class="screen-reader-text">Next page</span><span aria-hidden="true">‹</span>
                    </a>
                <?php endif; ?>

                Page <?php echo $paged; ?> of <?php echo $numPages; ?>

                <?php if($paged < $numPages): ?>
                    <a class="next-page button" href="<?php echo admin_url('admin.php?page=briefing-room-stations.php&paged=' . ($paged+1)); ?>">
                        <span class="screen-reader-text">Next page</span><span aria-hidden="true">›</span>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

    <list-table
        data-columns='[
            {"id": "id","label": "ID"},
            {"id": "name","label": "Station"},
            {"id": "agency","label": "Agency"},
            {"id": "actions","label": "Actions"}
        ]'
        data-rows='<?php echo json_encode($rows, JSON_HEX_APOS); ?>'
        data-actions='[]'
    ></list-table>

</div>
