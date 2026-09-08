<?php

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\TrainingSession;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;

include 'components/list-table.html';

$sergeants = Sergeant::query();

if (isset($_REQUEST['station_id']) && $_REQUEST['station_id']) {
    $sergeants->where('stationId', absint($_REQUEST['station_id']));
}

if (isset($_REQUEST['agency_id']) && $_REQUEST['agency_id']) {
    $sergeants->join(function(JoinQueryBuilder $builder) {
        $builder->leftJoin(Station::getTable(), 'station')
            ->on('sergeant.stationId', 'station.id');
    });
    $sergeants->where('station.agencyId', absint($_REQUEST['agency_id']));
}

// JOIN SESSION TRAINING TIME
$sergeants->join(function(JoinQueryBuilder $builder) {
    $query = TrainingSession::query()
        ->selectRaw('SELECT sergeantId, SUM(duration) as trainingTime')
        ->join(function(JoinQueryBuilder $builder) {
            $builder->leftJoin(Sergeant::getTable(), 'sergeant')
                ->on('trainingsession.sergeantId', 'sergeant.id');
        })
        ->groupBy('sergeantId');

    if(isset($_REQUEST['timeframe']) && $_REQUEST['timeframe']) {
        $query->whereBetween(
            'completedAt',
            date('Y-m-d', strtotime("-{$_REQUEST['timeframe']} days")),
            date('Y-m-d')
        );
    }

    $builder->joinRaw("LEFT JOIN ({$query->getSQL()}) training ON sergeant.id = training.sergeantId");
});

if (isset($_REQUEST['s']) && $_REQUEST['s']) {
    $search = sanitize_text_field($_REQUEST['s']);
    $sergeants->whereLike('firstName', $search)
        ->orWhereLike('lastName', $search); // Note: The "OR" condition should go last.
}

$agencies = Agency::all();
$stations = isset($_REQUEST['agency_id'])
    ? Station::query()->where('agencyId', absint($_REQUEST['agency_id']))->getAll()
    : [];

// Ensure the Sergeant ID is the primary ID.
$sergeants->select('*', ['sergeant.id', 'id']);

$rows = array_map(function ($data) {

    $sergeant = new Sergeant(get_object_vars($data));

    $actions = [
        "<a href='/wp-admin/admin.php?page=briefing-room-sergeants.php&sergeant_id={$sergeant->id}' class='button'>View</a>",
    ];

    $user = get_user_by('ID', $sergeant->userId);
    $switchingUrl = $user && method_exists( 'user_switching', 'maybe_switch_url' )
        ? user_switching::maybe_switch_url($user)
        : false;
    if($switchingUrl) {
        $actions[] = sprintf(
            '<a href="%s" class="button">Switch to</a>',
            add_query_arg('redirect_to', rawurlencode(site_url()), $switchingUrl)
        );
    }

    $deleteNonce = wp_create_nonce('delete_sergeant-' . $sergeant->id);
    $actions[] = <<<HTML
<form method="post" action="/wp-admin/admin-post.php" style="display: inline;">
    <input type="hidden" name="action" value="delete_sergeant">
    <input type="hidden" name="_wpnonce" value="{$deleteNonce}">
    <input type="hidden" name="sergeant_id" value="{$sergeant->id}">
    <button class='button' style='color: #b32d2e; border: 0; background-color: transparent;'>Delete</button>
</form>
HTML;

    return [
        'id' => $sergeant->id,
        'name' => $sergeant->name(),
        'email' => $sergeant->emailAddress ?? '',
        'badgeId' => $sergeant->badgeId,
        'stateId' => $sergeant->stateId,
        'agencyId' => $sergeant->agencyId,
        'agency' => $sergeant->agencyName(),
        'station' => $sergeant->stationName(),
        'trainingTime' => TimeFormatter::minutesToHours($data->trainingTime),
        'lastLogin' => $sergeant->lastLogin(),
        'actions' => implode(' ', $actions),
    ];
}, $sergeants->getAll());
?>

<div class="wrap">
    <h1 class="wp-heading-inline">Facilitators</h1>

    <hr class="wp-header-end">

    <!-- TODO: Add pagination -->

    <div>
        <form method="get">
            <input type="hidden" name="page" value="briefing-room-sergeants.php">
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
                <label for="timeframe">
                    <span class="screen-reader-text">Timeframe: </span>
                    <select name="timeframe" id="date">
                        <option value="" selected="selected">All Time</option>
                        <option value="7" <?php selected($_REQUEST['timeframe'], 7); ?>>Past 7 days</option>
                        <option value="30" <?php selected($_REQUEST['timeframe'], 30); ?>>Past 30 days</option>
                        <option value="90" <?php selected($_REQUEST['timeframe'], 90); ?>>Past 90 days</option>
                    </select>
                </label>
                <input type="submit" id="search-submit" class="button" value="Search/Filter">
            </p>
        </form>
    </div>

    <list-table
        data-columns='[
            {"id": "id","label": "ID"},
            {"id": "name","label": "Name"},
            {"id": "email","label": "Email Address"},
            {"id": "badgeId","label": "Badge ID"},
            {"id": "stateId","label": "State ID"},
            {"id": "agencyId","label": "Agency ID"},
            {"id": "agency","label": "Agency"},
            {"id": "station","label": "Station"},
            {"id": "trainingTime","label": "Training Time"},
            {"id": "lastLogin","label": "Last Login"},
            {"id": "actions","label": "Actions"}
        ]'>
    <script type="application/json" class="data-rows">
        <?php echo json_encode($rows) ?>
    </script>
    </list-table>

</div>

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
