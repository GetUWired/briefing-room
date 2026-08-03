<?php

use BTN\BriefingRoom\Station;

include 'components/list-table.html';
include 'components/list-table-pagination.html';

$station = Station::find(
    absint($_GET['station_id'])
);

$sergeants = $station->sergeants()->getAll();

$sergeantData = array_map(function($data) {
    return [
        'id' => $data->id,
        'firstName' => $data->firstName,
        'lastName' => $data->lastName,
        'emailAddress' => $data->emailAddress,
        'badgeId' => $data->badgeId,
        'stateId' => $data->stateId,
        'agencyId' => $data->agencyId,
        'actions' => "<a href='/wp-admin/admin.php?page=briefing-room-sergeants.php&sergeant_id={$data->id}' class='button'>Details</a>"
    ];
}, $sergeants);

$officers = $station->officers()->getAll();

$officerData = array_map(function($data) {
    return [
        'id' => $data->id,
        'firstName' => $data->firstName,
        'lastName' => $data->lastName,
        'emailAddress' => $data->emailAddress,
        'badgeId' => $data->badgeId,
        'stateId' => $data->stateId,
        'agencyId' => $data->agencyId,
        'actions' => "<a href='/wp-admin/admin.php?page=briefing-room-officers.php&officer_id={$data->id}' class='button'>Details</a>"
    ];
}, $officers);

?>

<div class="wrap">
    <h1 class="wp-heading-inline">
        <?php echo $station->name; ?>
    </h1>
    <!--    <a class="page-title-action" href='/wp-admin/admin-post.php?action=officer_report&officer_id=--><?php //echo $officer->id; ?><!--'>Download Report</a>-->
    <hr class="wp-header-end">

    <header style="display: flex; gap: 20px; margin-top: 10px;">

        <div class="postbox">
            <div class="postbox-header" style="padding-left: 20px;">
                <h2>Facilitators</h2>
            </div>
            <div class="inside" style="font-size: 1.5em; display: flex; justify-content: center;">
                <?php echo count($sergeants); ?>
            </div>
        </div>

        <div class="postbox">
            <div class="postbox-header" style="padding-left: 20px;">
                <h2>Students</h2>
            </div>
            <div class="inside" style="font-size: 1.5em; display: flex; justify-content: center;">
                <?php echo count($officers); ?>
            </div>
        </div>

    </header>

    <h2>Facilitators</h2>

    <list-table
        data-columns='[
            {"id": "firstName", "label": "First Name"},
            {"id": "lastName", "label": "Last Name"},
            {"id": "emailAddress","label": "Email Address"},
            {"id": "badgeId","label": "Badge ID"},
            {"id": "stateId","label": "State ID"},
            {"id": "agencyId","label": "Agency ID"},
            {"id": "actions", "label": "Actions"}
        ]'
        data-rows='<?php echo json_encode($sergeantData, JSON_HEX_APOS); ?>'
    ></list-table>

    <h2>Students</h2>

    <list-table
        data-columns='[
            {"id": "firstName","label": "First Name"},
            {"id": "lastName", "label": "Last Name"},
            {"id": "emailAddress","label": "Email Address"},
            {"id": "badgeId","label": "Badge ID"},
            {"id": "stateId","label": "State ID"},
            {"id": "agencyId","label": "Agency ID"},
            {"id": "actions", "label": "Actions"}
        ]'
        data-rows='<?php echo json_encode($officerData, JSON_HEX_APOS); ?>'
    ></list-table>

</div>
