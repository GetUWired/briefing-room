<?php

use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Station;

include 'components/list-table.html';
include 'components/add-new-dialog.html';

// Initialize filter and query
$filter = false;
$query = Officer::query();
$query->select('officer.*');

// Apply filters based on request parameters
if (!empty($_REQUEST['station_id'])) {
    $query->where('stationId', absint($_REQUEST['station_id']));
    $filter = true;
}

if (!empty($_REQUEST['agency_id'])) {
    $query->leftJoin(Station::getTable(), 'officer.stationId', 'station.id', 'station');
    $query->where('station.agencyId', absint($_REQUEST['agency_id']));
    $filter = true;
}

if (!empty($_REQUEST['s'])) {
    $search = sanitize_text_field($_REQUEST['s']);
    $query->whereLike('firstName', "%{$search}%")
          ->orWhereLike('lastName', "%{$search}%");
    $filter = true;
}

// Fetch officers
if ($filter) {
    // If filters are applied, fetch filtered results
    $officers = $query->getAll();
} else {
    // Fetch paginated results when no filter is applied
    $total = Officer::count();

    $paged = isset($_GET['paged']) ? absint($_GET['paged']) : 1;
    $perPage = 20;
    $offset = ($paged - 1) * $perPage;

    $query->limit($perPage)->offset($offset);
    $officers = $query->getAll();

    // Pagination details
    $numPages = ceil($total / $perPage);
    $nextPage = $paged + 1;
}

// Map officers data to rows
$rows = array_map(function ($officer) {
    if (!$officer instanceof Officer) {
        $officer = new Officer((array) $officer); // Ensure Officer instance
    }

    $actions = [
        "<a href='/wp-admin/admin.php?page=briefing-room-officers.php&officer_id={$officer->id}' class='button'>Details</a>",
    ];

    if ($officer->userId) {
        $actions[] = "<a href='/wp-admin/user-edit.php?user_id={$officer->userId}' class='button'>User</a>";
    }

	$user = get_user_by('ID', $officer->userId);
    $switchingUrl = $user && method_exists( 'user_switching', 'maybe_switch_url' )
        ? user_switching::maybe_switch_url($user)
        : false;
    if($switchingUrl) {
        $actions[] = sprintf(
            '<a href="%s" class="button">Switch to User</a>',
            add_query_arg('redirect_to', rawurlencode(site_url()), $switchingUrl)
        );
    }

    $deleteNonce = wp_create_nonce('delete_officer-' . $officer->id);
    $actions[] = <<<HTML
<form method="post" action="/wp-admin/admin-post.php" style="display: inline;">
    <input type="hidden" name="action" value="delete_officer">
    <input type="hidden" name="_wpnonce" value="{$deleteNonce}">
    <input type="hidden" name="officer_id" value="{$officer->id}">
    <button class='button' style='color: #b32d2e; border: 0; background-color: transparent;'>Delete</button>
</form>
HTML;

    return [
		'checkbox' => "<input type='checkbox' class='db_ids' value='".$officer->id."' style='margin-left:8px' >",
        'id' => $officer->id,
        'rank' => ucwords($officer->rank),
        'firstName' => $officer->firstName,
        'lastName' => $officer->lastName,
        'emailAddress' => $officer->emailAddress,
        'badgeId' => $officer->badgeId,
        'stateId' => $officer->stateId,
        'agencyId' => $officer->agencyId,
        'agency' => $officer->agencyName(),
        'station' => $officer->stationName(),
        'actions' => implode(" ", $actions),
    ];
}, $officers);

// Output or return $rows for further use


$agencies = Agency::all();
$stations = isset($_REQUEST['agency_id'])
	? Station::query()->where('agencyId', absint($_REQUEST['agency_id']))->getAll()
	: [];


?>

<style></style>

<div class="wrap">
    <h1 class="wp-heading-inline">Students</h1>

    <hr class="wp-header-end">

    <h2 class="screen-reader-text">Filter list table</h2>

    <form method="get">
            <input type="hidden" name="page" value="briefing-room-officers.php">
            <p class="search-box" style="margin-bottom: 15px;">
                <label>
                    <span class="screen-reader-text">Search: </span>
                    <input type="search" name="s" placeholder="Search" value="<?php
                    if (isset($_REQUEST['s'])) {
                        echo $_REQUEST['s'];
                    } ?>">
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
                <label for="station">
                    <span class="screen-reader-text">Station: </span>
                    <select name="station_id" id="station" <?php echo disabled(!isset($_REQUEST['agency_id'])); ?>>
                        <option value="">All Stations</option>
                        <?php foreach ($stations as $station): ?>
                            <option value="<?php echo $station->id; ?>" <?php selected(@$_REQUEST['station_id'], $station->id) ?>>
                                <?php
                                echo $station->name; ?>
                            </option>
                        <?php
                        endforeach; ?>
                    </select>
                </label>
                <input type="submit" id="search-submit" class="button" value="Search/Filter">
            </p>
        </form>

<!--    <ul class="subsubsub">-->
        <!--        <li class="all"><a href="edit.php?post_type=page" class="current" aria-current="page">All <span class="count">(7)</span></a> |</li>-->
        <!--        <li class="publish"><a href="edit.php?post_status=publish&amp;post_type=page">Published <span class="count">(6)</span></a> |</li>-->
        <!--        <li class="draft"><a href="edit.php?post_status=draft&amp;post_type=page">Draft <span class="count">(1)</span></a></li>-->
<!--    </ul>-->

    <div class="tablenav top">
        <?php if(!isset($_REQUEST['s'])){ ?>
        Showing <?php echo count($officers); ?> of <?php echo number_format($total); ?> officers
		<?php } ?>
        <?php if(isset($paged)): ?>
        <div class="tablenav-pages">
            <?php if($paged > 1): ?>
            <a class="prev-page button" href="<?php echo admin_url('admin.php?page=briefing-room-officers.php&paged=' . ($paged-1)); ?>">
                <span class="screen-reader-text">Next page</span><span aria-hidden="true">‹</span>
            </a>
            <?php endif; ?>

            Page <?php echo $paged; ?> of <?php echo $numPages; ?>

            <?php if($paged < $numPages): ?>
            <a class="next-page button" href="<?php echo admin_url('admin.php?page=briefing-room-officers.php&paged=' . ($paged+1)); ?>">
                <span class="screen-reader-text">Next page</span><span aria-hidden="true">›</span>
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>

    <list-table
        data-columns='[
            {"id": "id","label": "ID"},
            {"id": "rank","label": "Rank"},
            {"id": "firstName","label": "First Name"},
            {"id": "lastName","label": "Last Name"},
            {"id": "emailAddress","label": "Email Address"},
            {"id": "badgeId","label": "Badge ID"},
            {"id": "stateId","label": "State ID"},
            {"id": "agencyId","label": "Agency ID"},
            {"id": "agency","label": "Agency"},
            {"id": "station","label": "Station"},
            {"id": "actions","label": "Actions"}
        ]'
        data-rows='<?php echo json_encode($rows, JSON_HEX_APOS); ?>'
        data-actions='[]'
    ></list-table>
</div>

<script>
    class OfficerTrainingLogDialog extends HTMLDialogElement {
        connectedCallback() {

            const template = document.getElementById('officer-training-log');
            const node = document.importNode(template.content, true);
            this.prepend(node)

            const target = document.getElementById(this.getAttribute('target'))
            target.addEventListener('click', this.showModal.bind(this))
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        // customElements.define('add-new', AddNewDialog, {extends: 'dialog'})
        customElements.define('officer-log-dialog', OfficerTrainingLogDialog, {extends: 'dialog'})
    });
</script>

<template id="officer-training-log">

    <h2>Training Log</h2>

    <form method="dialog" style="position: absolute; top: 15px; right: 15px;">
        <button style="cursor: pointer; border: 0; background: 0 0;">Close</button>
    </form>

</template>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const agencySelect = document.getElementById('agency');
        const stationSelect = document.getElementById('station');

        agencySelect.addEventListener('change', async function() {
            const agencyId = this.value;

            stationSelect.disabled = true;
            const response = await fetch(`/wp-json/btn/briefing-room/stations?agency=${agencyId}`, {
                headers: {
                    'X-WP-Nonce': '<?php echo wp_create_nonce( 'wp_rest' ); ?>',
                }
            })

            const stations = await response.json();
            console.log(stations)

            stationSelect.innerHTML = '<option value="">All Stations</option>';
            stations.forEach(station => {
                const option = document.createElement('option');
                option.value = station.id;
                option.textContent = station.name;
                stationSelect.appendChild(option);
            });
            stationSelect.disabled = false;
        });
    });
</script>
