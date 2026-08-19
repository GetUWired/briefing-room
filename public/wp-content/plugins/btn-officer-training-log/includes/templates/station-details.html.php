<?php

use BTN\BriefingRoom\Station;

include 'components/list-table.html';
include 'components/list-table-pagination.html';

$station = Station::find(
    absint($_GET['station_id'])
);

global $wpdb;
$assignedTrainingCount = (int) $wpdb->get_var($wpdb->prepare(
    "SELECT COUNT(*) FROM {$wpdb->prefix}assigned_training_items WHERE assigned_type = 'station' AND assigned_to = %d",
    $station->id
));

$otherStations = Station::where('agencyId', $station->agencyId)->models;
$otherStations = array_filter($otherStations, fn($s) => $s->id != $station->id);

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

$totalMergeableRecords = count($sergeants) + count($officers) + $assignedTrainingCount;

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

        <div class="postbox">
            <div class="postbox-header" style="padding-left: 20px;">
                <h2>Training Assignments</h2>
            </div>
            <div class="inside" style="font-size: 1.5em; display: flex; justify-content: center;">
                <?php echo $assignedTrainingCount; ?>
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

    <hr style="margin: 20px 0;" />

    <h2>Remove Station</h2>

    <?php if (empty($otherStations)): ?>
        <p>This is the only station for this agency, so there's no other station to move students, facilitators, or training assignments to. Add another station first if you need to remove this one.</p>
    <?php else: ?>
        <div class="postbox" style="padding: 15px; max-width: 640px;">
            <p>
                This station has <strong><?php echo count($officers); ?></strong> student(s),
                <strong><?php echo count($sergeants); ?></strong> facilitator(s), and
                <strong><?php echo $assignedTrainingCount; ?></strong> training assignment(s).
                Removing it will move all of them to the station you choose below, then delete this
                now-empty station. Training history is unaffected &mdash; it's tied to each person, not to their station.
            </p>
            <form
                method="post"
                action="/wp-admin/admin-post.php"
                onsubmit="return confirm('Move <?php echo (int) $totalMergeableRecords; ?> record(s) to \'' + this.target_station_id.selectedOptions[0].text + '\' and delete this station? This cannot be undone.');"
            >
                <input type="hidden" name="action" value="merge_station">
                <input type="hidden" name="_wpnonce" value="<?php echo wp_create_nonce('merge_station-' . $station->id); ?>">
                <input type="hidden" name="station_id" value="<?php echo $station->id; ?>">
                <input type="hidden" name="redirect" value="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $station->agencyId); ?>">
                <label for="target_station_id">Merge into</label>
                <select name="target_station_id" id="target_station_id" required>
                    <?php foreach ($otherStations as $otherStation): ?>
                        <option value="<?php echo $otherStation->id; ?>"><?php echo esc_html($otherStation->name); ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" class="button" style="color:#b32d2e;border-color:#b32d2e;">Remove Station</button>
            </form>
        </div>
    <?php endif; ?>

</div>
