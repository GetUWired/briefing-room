<?php

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;

include 'components/list-table.html';
include 'components/add-new-dialog.html';

// $total = BTN\BriefingRoom\Station::count();

$filter = false;
$query = Station::query();

// FLAG POSSIBLE DUPLICATE STATIONS (same agency, same name ignoring case/whitespace)
$query->select('id', 'name', 'agencyId', 'dupeCount', 'sergeantCount', 'officerCount');
$query->join(function(JoinQueryBuilder $builder) {
    $duplicates = Station::query()
        ->selectRaw('SELECT agencyId as dupAgencyId, LOWER(TRIM(name)) as normalizedName, COUNT(id) as dupeCount')
        ->groupBy('agencyId')
        ->groupBy('normalizedName')
        ->having('dupeCount', '>', 1);

    $builder->joinRaw("LEFT JOIN ({$duplicates->getSQL()}) dup ON station.agencyId = dup.dupAgencyId AND LOWER(TRIM(station.name)) = dup.normalizedName");
});

// JOIN STATION SERGEANT COUNT
$query->join(function(JoinQueryBuilder $builder) {
    $sub = Sergeant::query()
        ->selectRaw('SELECT stationId, COUNT(id) as sergeantCount')
        ->groupBy('stationId');

    $builder->joinRaw("LEFT JOIN ({$sub->getSQL()}) sergeant ON station.id = sergeant.stationId");
});

// JOIN STATION OFFICER COUNT
$query->join(function(JoinQueryBuilder $builder) {
    $sub = Officer::query()
        ->selectRaw('SELECT stationId, COUNT(id) as officerCount')
        ->groupBy('stationId');

    $builder->joinRaw("LEFT JOIN ({$sub->getSQL()}) officer ON station.id = officer.stationId");
});

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

    $isDuplicate = !empty($station->dupeCount) && $station->dupeCount > 1;
    $sergeantCount = (int) ($station->sergeantCount ?? 0);
    $officerCount = (int) ($station->officerCount ?? 0);

	if (!$station instanceof Station) {
        $station = new Station((array) $station); // Ensure Officer instance
    }

    $actions = [
        "<a href='/wp-admin/admin.php?page=briefing-room-stations.php&station_id={$station->id}' class='button'>Details</a>",
    ];

    if (!$sergeantCount && !$officerCount) {
        $deleteNonce = wp_create_nonce('delete_station-' . $station->id);
        $actions[] = <<<HTML
<form method="post" action="/wp-admin/admin-post.php" style="display: inline;" onsubmit="return confirm('Delete this station? This cannot be undone.');">
    <input type="hidden" name="action" value="delete_station">
    <input type="hidden" name="_wpnonce" value="{$deleteNonce}">
    <input type="hidden" name="station_id" value="{$station->id}">
    <input type="hidden" name="redirect" value="/wp-admin/admin.php?page=briefing-room-stations.php">
    <button class='button' style='color: #b32d2e; border-color: #b32d2e'>Delete</button>
</form>
HTML;
    } else {
        // Station has students/facilitators attached — route through the guarded
        // merge flow on the station details page instead of a raw delete.
        $actions[] = "<a href='/wp-admin/admin.php?page=briefing-room-stations.php&station_id={$station->id}' class='button' style='color: #b32d2e; border-color: #b32d2e' onclick=\"return confirm('This station has students or facilitators assigned. You\\'ll be taken to its details page to merge them into another station before it can be removed. Continue?');\">Remove</a>";
    }

    $name = $station->name;
    if ($isDuplicate) {
        $name .= " <span style='background:#f0b849;color:#1d2327;border-radius:3px;padding:2px 6px;font-size:11px;'>Possible duplicate</span>";
    }

    return [
		'checkbox' => "<input type='checkbox' class='db_ids' value='".$station->id."' style='margin-left:8px' >",
        'id' => $station->id,
        'name' => $name,
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
