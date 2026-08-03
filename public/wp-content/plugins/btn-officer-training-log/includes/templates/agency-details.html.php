<?php

use BTN\BriefingRoom\Framework\Exceptions\NotFound;
use BTN\BriefingRoom\Helpers\StatesUS;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\Manager;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;

include 'components/list-table.html';
include 'components/list-table-pagination.html';
include 'components/add-new-dialog.html';
include 'components/import-dialog.html';

$agency = BTN\BriefingRoom\Agency::find(
    absint($_GET['agency_id'])
);

$managerData = array_map(function ($data) {

    $manager = new Manager(get_object_vars($data));

    $actions = [
        "<button id='edit_manager_{$manager->id}' class='button'>Edit</button>"
    ];

    $user = get_user_by('ID', $manager->userId);
    $switchingUrl = $user && method_exists( 'user_switching', 'maybe_switch_url' )
        ? user_switching::maybe_switch_url($user)
        : false;
    if($switchingUrl) {
        $actions[] = sprintf(
            '<a href="%s" class="button">Switch to User</a>',
            add_query_arg('redirect_to', rawurlencode(site_url('reports')), $switchingUrl)
        );
    }

    return [
        'id' => $manager->id,
        'name' => $manager->name(),
        'firstName' => $manager->firstName,
        'lastName' => $manager->lastName,
        'email' => $manager->emailAddress,
        'actions' => implode(' ', $actions),
    ];
}, $agency->managers()->getAll());

$stationCount = $agency->stations()->count();

$stations = $agency->stations()->select('id', 'name', 'agencyId', 'sergeantCount', 'officerCount');

// JOIN STATION SERGEANT COUNT
$stations->join(function(JoinQueryBuilder $builder) {
    $query = Sergeant::query()
        ->selectRaw('SELECT stationId, COUNT(id) as sergeantCount')
        ->groupBy('stationId');

    $builder
        ->joinRaw("LEFT JOIN ({$query->getSQL()}) sergeant ON  station.id = sergeant.stationId");
});

// JOIN STATION OFFICER COUNT
$stations->join(function(JoinQueryBuilder $builder) {
    $query = Officer::query()
        ->selectRaw('SELECT stationId, COUNT(id) as officerCount')
        ->groupBy('stationId');

    $builder
        ->joinRaw("LEFT JOIN ({$query->getSQL()}) officer ON  station.id = officer.stationId");
});

$stationOptions = array_map(function($data) {
    return [
        'id' => $data->id,
        'name' => $data->name,
    ];
}, $stations->getAll());

$stationData = array_map(function($data) {

    $actions = [
        "<a href='/wp-admin/admin.php?page=briefing-room-stations.php&station_id={$data->id}' class='button'>View</a>",
    ];

    if(!$data->sergeantCount && !$data->officerCount) {
        $deleteNonce = wp_create_nonce('delete_station-' . $data->id);
        $actions[] = <<<HTML
<form method="post" action="/wp-admin/admin-post.php" style="display: inline;">
    <input type="hidden" name="action" value="delete_station">
    <input type="hidden" name="_wpnonce" value="{$deleteNonce}">
    <input type="hidden" name="station_id" value="{$data->id}">
    <input type="hidden" name="redirect" value="/wp-admin/admin.php?page=briefing-room.php&agency_id={$data->agencyId}">
    <button class='button' style='color: #b32d2e; border-color: #b32d2e'>Delete</button>
</form>
HTML;
    }

    return [
        'id' => $data->id,
        'name' => $data->name . "<br /><small style='color:gray;'>ID: {$data->id}</small>",
        'sergeants' => $data->sergeantCount ?: 0,
        'officers' => $data->officerCount ?: 0,
        'actions' => implode(' ', $actions),
    ];
}, $stations->limit(10)->getAll());

$sergeantCount = $agency->sergeantCount();

$sergeantData = array_map(function($sergeant) use ($agency) {

    try {
        $station = Station::find($sergeant->stationId)->name;
    } catch (NotFound $e) {
        $station = '';
    }

    $actions = [
        "<button id='edit_sergeant_{$sergeant->id}' class='button'>Edit</button>",
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
    <input type="hidden" name="redirect" value="/wp-admin/admin.php?page=briefing-room.php&agency_id={$agency->id}">
    <button class='button' style='color: #b32d2e; border: 0; background-color: transparent;'>Delete</button>
</form>
HTML;

    return [
        'id' => $sergeant->id,
        'firstName' => $sergeant->firstName,
        'lastName' => $sergeant->lastName,
        'emailAddress' => $sergeant->emailAddress,
        'badgeId' => $sergeant->badgeId,
        'stateId' => $sergeant->stateId,
        'agencyId' => $sergeant->agencyId,
        'rank' => $sergeant->rank,
        'stationId' => $sergeant->stationId,
        'station' => $station,
        'actions' => implode(' ', $actions),
    ];
}, $agency->sergeants()->limit(10)->getAll());

$officerCount = $agency->officerCount();

$officerData = array_map(function($data) use ($agency) {

    $actions = [
        "<button id='edit_officer_{$data->id}' class='button'>Edit</button>",
        "<a href='/wp-admin/admin.php?page=briefing-room-officers.php&officer_id={$data->id}' class='button'>View</a>",
    ];

    $user = get_user_by('ID', $data->userId);
    $switchingUrl = $user && method_exists( 'user_switching', 'maybe_switch_url' )
        ? user_switching::maybe_switch_url($user)
        : false;
    if($switchingUrl) {
        $actions[] = sprintf(
            '<a href="%s" class="button">Switch to</a>',
            add_query_arg('redirect_to', rawurlencode(site_url()), $switchingUrl)
        );
    }

    $deleteNonce = wp_create_nonce('delete_officer-' . $data->id);
    $actions[] = <<<HTML
<form method="post" action="/wp-admin/admin-post.php" style="display: inline;">
    <input type="hidden" name="action" value="delete_officer">
    <input type="hidden" name="_wpnonce" value="{$deleteNonce}">
    <input type="hidden" name="officer_id" value="{$data->id}">
    <input type="hidden" name="redirect" value="/wp-admin/admin.php?page=briefing-room.php&agency_id={$agency->id}">
    <button class='button' style='color: #b32d2e; border: 0; background-color: transparent;'>Delete</button>
</form>
HTML;

    return [
        'id' => $data->id,
        'firstName' => $data->firstName,
        'lastName' => $data->lastName,
        'emailAddress' => $data->emailAddress,
        'badgeId' => $data->badgeId,
        'stateId' => $data->stateId,
        'agencyId' => $data->agencyId,
        'station' => $data->station,
        'stationId' => $data->stationId,
        'rank' => $data->rank,
        'actions' => implode(' ', $actions),
    ];
}, $agency->officers()->limit(10)->getAll());

?>

<style>
    body:has(dialog[open]) {
        overflow: hidden;
    }
</style>

<div class="wrap">
    <h1 class="wp-heading-inline">
        Agency: <?php echo $agency->name; ?>
        <?php if($agency->state): ?>
        <small>(<?php echo StatesUS::name($agency->state); ?>)</small>
        <?php endif; ?>
    </h1>
    <button id="edit" class="page-title-action">Edit</button>
<!--        <a class="page-title-action" href='--><?php //echo add_query_arg('agency_id', $agency->id, admin_url('admin.php?page=briefing-room.php&action=edit')); ?><!--'>Edit</a>-->
    <hr class="wp-header-end">

    <header style="display: flex; gap: 20px; margin-top: 10px;">

        <div class="postbox">
            <div class="postbox-header" style="padding-left: 20px;">
                <h2>Stations</h2>
            </div>
            <div class="inside" style="font-size: 1.5em; display: flex; justify-content: center;">
                <?php echo $stationCount; ?>
            </div>
        </div>

        <div class="postbox">
            <div class="postbox-header" style="padding-left: 20px;">
                <h2>Facilitators</h2>
            </div>
            <div class="inside" style="font-size: 1.5em; display: flex; justify-content: center;">
                <?php echo $sergeantCount; ?>
            </div>
        </div>

        <div class="postbox">
            <div class="postbox-header" style="padding-left: 20px;">
                <h2>Students</h2>
            </div>
            <div class="inside" style="font-size: 1.5em; display: flex; justify-content: center;">
                <?php echo $officerCount; ?>
            </div>
        </div>

    </header>

    <!--
MANAGERS
-->
    <header style="margin-top: 20px; display: flex; justify-content: space-between;">
        <div style="display: flex; gap: 10px; align-items: center;">
            <h2>Managers</h2>
        </div>
        <div  style="display: flex; gap: 10px; align-items: center;">
            <!-- This section intentionally left blank. -->
        </div>
    </header>

    <list-table
        data-columns='[
            {"id": "name", "label": "Name"},
            {"id": "email", "label": "Email"},
            {"id": "actions", "label": "Actions"}
        ]'
        data-rows='<?php echo json_encode($managerData, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>'
    ></list-table>

    <?php foreach($managerData as $manager): ?>
        <dialog
            is="add-new"
            target="edit_manager_<?php echo $manager['id']; ?>"
            data-title="Edit Manager"
            data-action="update_manager"
            data-fields='[
        {"id": "managerId","label": "ID", "value": "<?php echo $manager['id']; ?>", "disabled": true },
        {"id": "firstName","label": "First Name","value": "<?php echo $manager['firstName']; ?>"},
        {"id": "lastName","label": "Last Name","value": "<?php echo $manager['lastName']; ?>"},
        {"id": "emailAddress","label": "Email Address","value": "<?php echo $manager['email']; ?>"},
        {"id": "role","label": "Role", "required": "true", "value": "manager", "options": <?php echo json_encode([
            ['id' => 'student', 'name' => 'Student'],
            ['id' => 'facilitator', 'name' => 'Facilitator'],
            ['id' => 'manager', 'name' => 'Manager']
        ], JSON_HEX_APOS)?>},
        {"id": "stationId","label": "Station", "required": "true", "options": <?php echo Station::where('agencyId', $agency->id)->toJSON() ?>}
    ]'
            data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $agency->id); ?>"
        >
        </dialog>
    <?php endforeach; ?>

    <hr style="margin: 20px 0;" />

    <!--
    STATIONS
    -->
    <header style="margin-top: 20px; display: flex; justify-content: space-between;">
        <div style="display: flex; gap: 10px; align-items: center;">
            <h2>Stations</h2>
            <button id="add-station" class="button">Add</button>
        </div>
        <div  style="display: flex; gap: 10px; align-items: center;">
            <button id="station-import" class="button">Import</button>
            <form action="/wp-admin/admin-post.php" method="post">
                <input type="hidden" name="action" value="csv_stations_template">
                <button type="submit" class="button">Download Template</button>
            </form>
        </div>
    </header>

    <dialog
        is="add-new"
        target="add-station"
        data-action="add_station"
        data-title="Add Station"
        data-fields='[
            {"id": "agencyId","label": "Agency", "disabled": "true", "value": "<?php echo $agency->id; ?>" },
            {"id": "name","label": "Name"}
        ]'
        data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $agency->id); ?>"
    >
    </dialog>

    <dialog
        is="import-dialog"
        data-target="station-import"
        data-action="csv_add_stations"
        data-title="Import Stations"
        data-agency-id="<?php echo $agency->id; ?>"
        data-file-name="csv_stations"
        data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $agency->id); ?>"
    >
    </dialog>

    <list-table
        data-columns='[
            {"id": "name", "label": "Station Name"},
            {"id": "sergeants","label": "Facilitators"},
            {"id": "officers","label": "Students"},
            {"id": "actions", "label": "Actions"}
        ]'
        data-rows='<?php echo json_encode($stationData, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>'
    ></list-table>

    <footer style="margin-top: 10px; display: flex; justify-content: space-between;">
        Showing <?php echo count($stationData); ?> of <?php echo $stationCount; ?> stations for this agency
        <a href="<?php echo add_query_arg('agency_id', $agency->id, admin_url('admin.php?page=briefing-room-stations.php')); ?>">View all stations</a>
    </footer>

    <hr style="margin: 20px 0;" />

    <!--
    SERGEANTS
    -->
    <header style="margin-top: 20px; display: flex; justify-content: space-between;">
        <div style="display: flex; gap: 10px; align-items: center;">
            <h2>Facilitators</h2>
            <button id="add-sergeant" class="button">Add</button>
        </div>
        <div  style="display: flex; gap: 10px; align-items: center;">
            <button id="sergeant-import" class="button">Import</button>
            <form action="/wp-admin/admin-post.php" method="post">
                <input type="hidden" name="action" value="csv_sergeants_template">
                <button type="submit" class="button">Download Template</button>
            </form>
        </div>
    </header>

    <dialog
        is="add-new"
        target="add-sergeant"
        data-action="add_sergeant"
        data-title="Add Facilitator"
        data-fields='[
            {"id": "organizationId","label": "Agency", "disabled": "true", "value": "<?php echo $agency->id; ?>" },
            {"id": "stationId","label": "Station", "required": "true", "options": <?php echo json_encode($stationOptions, JSON_HEX_APOS)?>},
            {"id": "rank","label": "Rank", "required": "true", "options": <?php echo json_encode([
                ['id' => 'officer', 'name' => 'Officer'],
                ['id' => 'sergeant', 'name' => 'Sergeant'],
                ['id' => 'lieutenant', 'name' => 'Lieutenant'],
                ['id' => 'captain', 'name' => 'Captain'],
                ['id' => 'chief', 'name' => 'Chief']
            ], JSON_HEX_APOS)?>},
            {"id": "firstName","label": "First Name", "required": "true"},
            {"id": "lastName","label": "Last Name", "required": "true"},
            {"id": "emailAddress","label": "Email Address", "required": "true"},
            {"id": "badgeId","label": "Badge ID"},
            {"id": "stateId","label": "State ID"},
            {"id": "agencyId","label": "Agency ID"},
            {"id": "sendWelcomeEmail","label": "Send Welcome Email", "value": "0", "options": [{"id": "1", "name": "Yes"}, {"id": "0", "name": "No"}]}
        ]'
        data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $agency->id); ?>"
    >
    </dialog>

    <dialog
        is="import-dialog"
        data-target="sergeant-import"
        data-action="csv_add_sergeants"
        data-title="Import Facilitators"
        data-agency-id="<?php echo $agency->id; ?>"
        data-file-name="csv_sergeants"
        data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $agency->id); ?>"
    >
    </dialog>

    <list-table
        data-columns='[
            {"id": "firstName", "label": "First Name"},
            {"id": "lastName", "label": "Last Name"},
            {"id": "emailAddress","label": "Email Address"},
            {"id": "badgeId","label": "Badge ID"},
            {"id": "stateId","label": "State ID"},
            {"id": "agencyId","label": "Agency ID"},
            {"id": "station", "label": "Station"},
            {"id": "actions", "label": "Actions"}
        ]'
        data-rows='<?php echo json_encode($sergeantData, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>'
    ></list-table>

    <footer style="margin-top: 10px; display: flex; justify-content: space-between;">
        Showing <?php echo count($sergeantData); ?> of <?php echo $sergeantCount; ?> facilitators for this agency
        <a href="<?php echo add_query_arg('agency_id', $agency->id, admin_url('admin.php?page=briefing-room-sergeants.php')); ?>">View all facilitators</a>
    </footer>

    <?php foreach($sergeantData as $sergeant): ?>
        <dialog
            is="add-new"
            target="edit_sergeant_<?php echo $sergeant['id']; ?>"
            data-title="Edit Facilitator"
            data-action="update_sergeant"
            data-fields='[
        {"id": "sergeantId","label": "ID", "value": "<?php echo $sergeant['id']; ?>", "disabled": true },
        {"id": "firstName","label": "First Name","value": "<?php echo $sergeant['firstName']; ?>"},
        {"id": "lastName","label": "Last Name","value": "<?php echo $sergeant['lastName']; ?>"},
        {"id": "emailAddress","label": "Email Address","value": "<?php echo $sergeant['emailAddress']; ?>"},
        {"id": "rank","label": "Rank", "options": <?php echo json_encode([
                ['id' => 'officer', 'name' => 'Officer'],
                ['id' => 'sergeant', 'name' => 'Sergeant'],
                ['id' => 'lieutenant', 'name' => 'Lieutenant'],
                ['id' => 'captain', 'name' => 'Captain'],
                ['id' => 'chief', 'name' => 'Chief']
            ], JSON_HEX_APOS)?>, "value": "<?php echo $sergeant['rank']; ?>"},
        {"id": "stationId","label": "Station", "options": <?php echo Station::where('agencyId', $agency->id)->toJSON(); ?>, "value": "<?php echo $sergeant['stationId']; ?>"},
        {"id": "badgeId","label": "Badge ID","value": "<?php echo $sergeant['badgeId']; ?>"},
        {"id": "stateId","label": "State ID","value": "<?php echo $sergeant['stateId']; ?>"},
        {"id": "agencyId","label": "Agency ID","value": "<?php echo $sergeant['agencyId']; ?>"},
        {"id": "role","label": "Role", "required": "true", "value": "facilitator", "options": <?php echo json_encode([
                ['id' => 'student', 'name' => 'Student'],
                ['id' => 'facilitator', 'name' => 'Facilitator'],
                ['id' => 'manager', 'name' => 'Manager']
            ], JSON_HEX_APOS)?>}
    ]'
            data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $agency->id); ?>"
        >
        </dialog>
    <?php endforeach; ?>

    <hr style="margin: 20px 0;" />

    <!--
    OFFICERS
    -->

    <header style="margin-top: 20px; display: flex; justify-content: space-between;">
        <div style="display: flex; gap: 10px; align-items: center;">
            <h2>Students</h2>
            <button id="add-officer" class="button">Add</button>
        </div>
        <div  style="display: flex; gap: 10px; align-items: center;">
            <button id="officer-import" class="button">Import</button>
            <form action="/wp-admin/admin-post.php" method="post">
                <input type="hidden" name="action" value="csv_officers_template">
                <button type="submit" class="button">Download Template</button>
            </form>
        </div>
    </header>

    <dialog
        is="add-new"
        target="add-officer"
        data-action="add_officer"
        data-title="Add Student"
        data-fields='<?php echo json_encode(array_merge(
            [
                ['id' => 'organizationId', 'label' => 'Agency', 'disabled' => true, 'value' => $agency->id],
                ['id' => 'stationId', 'label' => 'Station', 'required' => true, 'options' => json_encode($stationOptions, JSON_HEX_APOS)],
            ],
            Officer::formFields(),
            [
                ['id' => 'sendWelcomeEmail', 'label' => 'Send Welcome Email', 'value' => '0', 'options' => json_encode([
                    ['id' => '1', 'name' => 'Yes'],
                    ['id' => '0', 'name' => 'No'],
                ])]
            ]
        ), JSON_HEX_APOS); ?>'
        data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $agency->id); ?>"
    >
    </dialog>

    <dialog
        is="import-dialog"
        data-target="officer-import"
        data-action="csv_add_officers"
        data-title="Import Students"
        data-agency-id="<?php echo $agency->id; ?>"
        data-file-name="csv_officers"
        data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $agency->id); ?>"
    >
    </dialog>

    <list-table
        data-columns='[
            {"id": "firstName","label": "First Name"},
            {"id": "lastName", "label": "Last Name"},
            {"id": "emailAddress","label": "Email Address"},
            {"id": "badgeId","label": "Badge ID"},
            {"id": "stateId","label": "State ID"},
            {"id": "agencyId","label": "Agency ID"},
            {"id": "station", "label": "Station"},
            {"id": "actions", "label": "Actions"}
        ]'
        data-rows='<?php echo json_encode($officerData, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>'
    ></list-table>

    <footer style="margin-top: 10px; display: flex; justify-content: space-between;">
        Showing <?php echo count($officerData); ?> of <?php echo $officerCount; ?> students for this agency
        <a href="<?php echo add_query_arg('agency_id', $agency->id, admin_url('admin.php?page=briefing-room-officers.php')); ?>">View all students</a>
    </footer>

    <?php foreach($officerData as $officer): ?>
        <dialog
            is="add-new"
            target="edit_officer_<?php echo $officer['id']; ?>"
            data-title="Edit Student"
            data-action="update_officer"
            data-fields='[
        {"id": "officerId","label": "ID", "value": "<?php echo $officer['id']; ?>", "disabled": true },
        {"id": "firstName","label": "First Name","value": "<?php echo $officer['firstName']; ?>"},
        {"id": "lastName","label": "Last Name","value": "<?php echo $officer['lastName']; ?>"},
        {"id": "emailAddress","label": "Email Address","value": "<?php echo $officer['emailAddress']; ?>"},
        {"id": "rank","label": "Rank", "options": <?php echo json_encode([
                ['id' => 'officer', 'name' => 'Officer'],
                ['id' => 'sergeant', 'name' => 'Sergeant'],
                ['id' => 'lieutenant', 'name' => 'Lieutenant'],
                ['id' => 'captain', 'name' => 'Captain'],
                ['id' => 'chief', 'name' => 'Chief']
            ],  JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP)?>, "value": "<?php echo $officer['rank']; ?>"},
        {"id": "stationId","label": "Station", "options": <?php echo Station::where('agencyId', $agency->id)->toJSON(); ?>, "value": "<?php echo $officer['stationId']; ?>"},
        {"id": "badgeId","label": "Badge ID","value": "<?php echo $officer['badgeId']; ?>"},
        {"id": "stateId","label": "State ID","value": "<?php echo $officer['stateId']; ?>"},
        {"id": "agencyId","label": "Agency ID","value": "<?php echo $officer['agencyId']; ?>"},
        {"id": "role","label": "Role", "required": "true", "value": "student", "options": <?php echo json_encode([
                ['id' => 'student', 'name' => 'Student'],
                ['id' => 'facilitator', 'name' => 'Facilitator'],
                ['id' => 'manager', 'name' => 'Manager']
            ],  JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP)?>}
    ]'
            data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $agency->id); ?>"
        >
        </dialog>
    <?php endforeach; ?>

    <dialog
        is="add-new"
        target="edit"
        data-action="update_agency"
        data-title="Edit Agency"
        data-nonce="<?php echo wp_create_nonce('update_agency-' . $agency->id); ?>"
        data-fields='<?php echo json_encode([
            ['id' => 'agency_id', 'label' => 'ID', 'value' => $agency->id, 'disabled' => true],
            ['id' => 'name', 'label' => 'Name', 'value' => $agency->name],
            ['id' => 'state', 'label' => 'State', 'value' => $agency->state, 'options' => json_encode(StatesUS::options())]
        ]); ?>'
        data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $agency->id); ?>"
    >
    </dialog>

</div>


