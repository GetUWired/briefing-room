<?php

include 'components/list-table.html';
include 'components/add-new-dialog.html';

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Framework\Collection;
use BTN\BriefingRoom\Helpers\StatesUS;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\TrainingSession;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;

$query = Agency::query();

$query->select(
    'agency.*',
    ['stationCount'],
    ['sergeantCount'],
    ['officerCount'],
    ['manager.manager', 'manager'],
);

$query->join(function(JoinQueryBuilder $builder) {
    $mq = Manager::query()
        ->selectRaw("SELECT organizationId, GROUP_CONCAT(CONCAT(firstName, ' ', lastName, '<br/>', emailAddress) SEPARATOR ' | ') as manager")
        ->groupBy('organizationId');
    $builder->joinRaw("LEFT JOIN ({$mq->getSQL()}) manager ON agency.id = manager.organizationId");
});

// JOIN STATION COUNT
$query->join(function (JoinQueryBuilder $builder) {
    $query = Station::query()
        ->selectRaw('SELECT agencyId, COUNT(*) as stationCount')
        ->groupBy('agencyId');
    $builder->joinRaw("LEFT JOIN ({$query->getSQL()}) station ON agency.id = station.agencyId");
});

// JOIN SERGEANT COUNT
$query->join(function(JoinQueryBuilder $builder) {
    $query = Sergeant::query()
        ->selectRaw('SELECT station.agencyId, COUNT(*) as sergeantCount')
        ->join(function(JoinQueryBuilder $builder) {
            $builder->leftJoin(Station::getTable(), 'station')
                ->on('sergeant.stationId', 'station.id');
        })
        ->groupBy('agencyId');
    $builder->joinRaw("LEFT JOIN ({$query->getSQL()}) sergeant ON agency.id = sergeant.agencyId");
});

// JOIN OFFICER COUNT
$query->join(function(JoinQueryBuilder $builder) {
    $query = Officer::query()
        ->selectRaw('SELECT station.agencyId, COUNT(*) as officerCount')
        ->join(function(JoinQueryBuilder $builder) {
            $builder->leftJoin(Station::getTable(), 'station')
                ->on('officer.stationId', 'station.id');
        })
        ->groupBy('agencyId');
    $builder->joinRaw("LEFT JOIN ({$query->getSQL()}) officer ON agency.id = officer.agencyId");
});

// JOIN SERGEANT TRAINING TIME
$query->join(function(JoinQueryBuilder $builder) {
    $query = TrainingSession::query()
        ->selectRaw('SELECT station.agencyId, SUM(duration) as trainingTime')
        ->join(function(JoinQueryBuilder $builder) {
            $builder->leftJoin(Sergeant::getTable(), 'sergeant')
                ->on('trainingsession.sergeantId', 'sergeant.id');
        })
        ->join(function(JoinQueryBuilder $builder) {
            $builder->leftJoin(Station::getTable(), 'station')
                ->on('sergeant.stationId', 'station.id');
        })
        ->groupBy('agencyId');
    $builder->joinRaw("LEFT JOIN ({$query->getSQL()}) training ON agency.id = training.agencyId");
});

if(isset($_GET['search']) && $_GET['search']) {
    $search = sanitize_text_field($_GET['search']);
    $query->whereLike('name', $search);
}

if(isset($_GET['state']) && $_GET['state']) {
    $state = sanitize_text_field($_GET['state']);
    $query->where('state', $state);
}

if(isset($_REQUEST['sort']) && $_REQUEST['sort']) {
    [$sortColumn, $sortDirection] = explode(',', $_REQUEST['sort']);
    $query->orderBy(
        in_array($sortColumn, ['stationCount', 'sergeantCount', 'officerCount']) ? $sortColumn : 'id',
        'DESC'
    );
}

$rows = array_map(function($data) {

    $agency = new Agency(get_object_vars($data));

    $deleteForm = sprintf(
        "<form method='POST' action='%s' style='display: inline;' onsubmit='return confirm(\"Do you really want to delete this agency?\");'>
            <input type='hidden' name='redirect' value='%s'>
            <input type='hidden' name='_wpnonce' value='%s'>
            <input type='hidden' name='action' value='delete_agency'>
            <input type='hidden' name='agency_id' value='%d'>
            <button class='button' type='submit' style='color:#d63638;border:0;background-color:transparent;'>Delete</button>
        </form>",
        admin_url('admin-post.php'),
        admin_url('admin.php?page=briefing-room.php'),
        wp_create_nonce( 'delete_agency-' . $agency->id ),
        $agency->id
    );

    $actions = [
        "<a href='/wp-admin/admin.php?page=briefing-room.php&agency_id={$agency->id}' class='button'>View</a>",
        $deleteForm,
    ];

    $manager = $data->manager ?? '';

    return [
        'id' => $agency->id,
        'name' => $agency->name,
        'state' => $agency->state ? StatesUS::name($agency->state) : '',
        'stations' => $data->stationCount,
        'sergeants' => $data->sergeantCount,
        'officers' => $data->officerCount,
        'manager' => $manager ?? '',
        'trainingTime' => TimeFormatter::minutesToHours($data->trainingTime),
        'actions' => implode(" ", $actions),
    ];
}, $query->getAll());

$newAgencies = Collection::of(
    Agency::class,
    Agency::query()
        ->orderBy('created_at', 'DESC')
        ->limit(5)
        ->getAll()
);

$topAgencies = Collection::of(
    Agency::class,
    Agency::query()
        ->selectRaw('SELECT SUM(sergeantCount+officerCount) as personnelCount, agency.*')
        ->join(function(JoinQueryBuilder $builder) {
            $query = Sergeant::query()
                ->selectRaw('SELECT station.agencyId, COUNT(*) as sergeantCount')
                ->join(function(JoinQueryBuilder $builder) {
                    $builder->leftJoin(Station::getTable(), 'station')
                        ->on('sergeant.stationId', 'station.id');
                })
                ->groupBy('agencyId');
            $builder->joinRaw("LEFT JOIN ({$query->getSQL()}) sergeant ON agency.id = sergeant.agencyId");
        })
        ->join(function(JoinQueryBuilder $builder) {
            $query = Officer::query()
                ->selectRaw('SELECT station.agencyId, COUNT(*) as officerCount')
                ->join(function(JoinQueryBuilder $builder) {
                    $builder->leftJoin(Station::getTable(), 'station')
                        ->on('officer.stationId', 'station.id');
                })
                ->groupBy('agencyId');
            $builder->joinRaw("LEFT JOIN ({$query->getSQL()}) officer ON agency.id = officer.agencyId");
        })
        ->groupBy('agency.id') // Need to add a group by since we are mixing aggregate and non-aggregate columns
        ->orderBy('personnelCount', 'DESC')
        ->limit(5)
        ->getAll()
);

$stateOptions = StatesUS::map(function($id, $name) {
    return [
        'id' => $id,
        'name' => $name,
    ];
});

?>

<div class="wrap">
    <h1 class="wp-heading-inline">Agencies</h1>

    <hr class="wp-header-end">

    <div style="display: flex; gap: 20px; margin-top: 10px;">

        <div class="postbox">
            <div class="postbox-header" style="padding-left: 20px;">
                <h2>New Agencies</h2>
            </div>
            <div class="inside" style="display: flex;">
                <ul>
                    <?php foreach($newAgencies->models as $newAgency): ?>
                        <li style="margin-bottom: 10px;">
                            <a href="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $newAgency->id); ?>">
                                <?php echo $newAgency->name; ?>
                            </a>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>

        <div class="postbox">
            <div class="postbox-header" style="padding-left: 20px;">
                <h2>Top Agencies</h2>
            </div>
            <div class="inside" style="display: flex;">
                <ol>
                    <?php foreach($topAgencies->models as $topAgency): ?>
                        <li style="margin-bottom: 10px;">
                            <a href="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $topAgency->id); ?>">
                                <?php echo $topAgency->name; ?>
                            </a>
                        </li>
                    <?php endforeach;?>
                </ol>
            </div>
        </div>

    </div>

<!--     TODO: Add pagination-->

    <div>
        <form method="GET">
            <input type="hidden" name="page" value="briefing-room.php">
            <p class="search-box" style="margin-bottom: 15px;">
                <input type="search" name="search" placeholder="Search Agency Name" value="<?php echo isset($search) ? $search : ''; ?>"/>
                <select name="sort" id="sort">
                    <option value="">Sort By ID</option>
                    <option value="stationCount">Sort By Stations</option>
                    <option value="sergeantCount">Sort By Facilitators</option>
                    <option value="officerCount">Sort By Students</option>
                    <option value="trainingTime">Sort By Training Time</option>
                </select>
                <select name="state" id="state">
                    <option value="">Filter by State</option>
                    <?php foreach(StatesUS::STATES as $stateCode => $stateName): ?>
                        <option value="<?php echo $stateCode; ?>" <?php selected($stateCode, $state ?? ''); ?>>
                            <?php echo $stateName; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button class="button" type="submit">Search/Filter</button>
            </p>
        </form>
    </div>

    <list-table
        data-columns='[
            {"id": "name","label": "Agency Name"},
            {"id": "state","label": "State"},
            {"id": "stations","label": "Stations"},
            {"id": "sergeants","label": "Facilitators"},
            {"id": "officers","label": "Students"},
            {"id": "manager","label": "Manager"},
            {"id": "trainingTime","label": "Training Time"},
            {"id": "actions","label": "Actions"}
       ]'
        data-rows='<?php echo json_encode($rows, JSON_HEX_APOS); ?>'
    ></list-table>

</div>

<dialog
    is="add-new"
    target="new"
    data-action="add_agency"
    data-fields='[
        {"id": "name","label": "Name"},
        {"id": "state","label": "State", "options": <?php echo json_encode($stateOptions); ?>}
    ]'
    data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php'); ?>"
>
</dialog>
