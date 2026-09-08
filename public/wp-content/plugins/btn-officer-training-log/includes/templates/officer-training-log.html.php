<?php

use BTN\BriefingRoom\Station;

include 'components/add-new-dialog.html';
include 'components/list-table.html';
include 'components/list-table-pagination.html';

$officerId = absint($_GET['officer_id']);
$officer = BTN\BriefingRoom\Officer::find($officerId);

$sessionsQuery = \StellarWP\DB\DB::table('btn_training_sessions', 'sessions')
    ->join(function (\StellarWP\DB\QueryBuilder\JoinQueryBuilder $builder) {
        $builder
            ->leftJoin('btn_training_records', 'records')
            ->on('sessions.id', 'records.sessionId');
    })
    ->join(function (\StellarWP\DB\QueryBuilder\JoinQueryBuilder $builder) {
        $builder
            ->leftJoin('posts', 'training')
            ->on('sessions.trainingId', 'training.ID');
    })
	->where('records.userId', absint($officer->userId))
    ->Orwhere('sessions.officerId', $officer->id)
    ->Orwhere('records.officerId', $officer->id);

if(isset($_REQUEST['startDate']) && isset($_REQUEST['endDate'])) {
    $startDate = date('Y-m-d', strtotime($_REQUEST['startDate']));
    $endDate = date('Y-m-d', strtotime($_REQUEST['endDate']));
    $sessionsQuery->whereBetween('completedAt', $startDate, $endDate);
}

$total = (clone $sessionsQuery)->count();
$paged = isset($_GET['paged']) ? absint($_GET['paged']) : 1;
$nextPage = $paged + 1;
$perPage = 20;
$numPages = ceil($total / $perPage);
$previousPageUrl = add_query_arg('paged', $paged - 1);
$nextPageUrl = add_query_arg('paged', $nextPage);

$totalTrainingTime = (clone $sessionsQuery)->sum('duration');

$sessionsQuery->select('records.id as recordId', 'sessions.id as sessionId', 'duration', 'completedAt', 'training.post_title as trainingTitle');
$sessionsQuery->limit($perPage)->offset(($paged - 1) * $perPage)->getAll();

$columns = [
    ['id' => 'training', 'label' => 'Training'],
    ['id' => 'duration', 'label' => 'Duration'],
    ['id' => 'completed', 'label' => 'Date'],
];

if(current_user_can('administrator')) {
    $columns[] = ['id' => 'actions', 'label' => 'Actions'];
}

$rows = array_map(function($data) {
    $deleteNonce = wp_create_nonce('delete_training_log-' . $data->recordId);
    $actions[] = <<<HTML
<form method="post" action="/wp-admin/admin-post.php" style="display: inline;">
    <input type="hidden" name="action" value="delete_training_log">
    <input type="hidden" name="_wpnonce" value="{$deleteNonce}">
    <input type="hidden" name="record_log_id" value="{$data->recordId}">
    <input type="hidden" name="session_log_id" value="{$data->sessionId}">
    <button class='button' style='color: #b32d2e; border: 0; background-color: transparent;'>Delete</button>
</form>
HTML;

    $row = [
        'training' => $data->trainingTitle,
        'duration' => sprintf('%2d:%02d', floor($data->duration / 60), $data->duration % 60),
        'completed' => date_i18n(get_option('date_format'), strtotime($data->completedAt)),
    ];

    if(current_user_can('administrator')) {
        $row['actions'] = implode(' ', $actions);
    }

    return $row;
}, $sessionsQuery->getAll());

?>

<div class="wrap">
    <h1 class="wp-heading-inline">
        Officer <?php echo $officer->fullName(); ?>
    </h1>
    <button id="edit" class="page-title-action">Edit</button>
    <hr class="wp-header-end">

    <div style="display: flex; gap: 20px; margin-top: 10px;">

        <div class="postbox">
            <div class="postbox-header" style="padding-left: 20px;">
                <h2>Training Sessions</h2>
            </div>
            <div class="inside" style="font-size: 1.5em; display: flex; justify-content: center;">
                <?php echo $total; ?>
            </div>
        </div>

        <div class="postbox">
            <div class="postbox-header" style="padding-left: 20px;">
                <h2>Total Training Time</h2>
            </div>
            <div class="inside" style="font-size: 1.5em; display: flex; justify-content: center;">
                <?php echo sprintf('%2d:%02d', floor($totalTrainingTime/60), $totalTrainingTime%60); ?>
            </div>
        </div>

    </div>

    <form method="get">
        <input type="hidden" name="page" value="briefing-room-officers.php">
        <input type="hidden" name="officer_id" value="<?php echo $officerId; ?>">
        <p class="search-box" style="margin-bottom: 15px;">
            <label>
                <span class="screen-reader-text">Start Date: </span>
                <input type="date" name="startDate" value="<?php if(isset($_REQUEST['startDate'])) echo $_REQUEST['startDate']; ?>">
            </label>
            <label>
                <span class="screen-reader-text">End Date: </span>
                <input type="date" name="endDate" value="<?php if(isset($_REQUEST['endDate'])) echo $_REQUEST['endDate']; ?>">
            </label>
            <button type="submit" class="button">Filter</button>
            <?php if(isset($_REQUEST['startDate']) && isset($_REQUEST['endDate'])) : ?>
                <a style="color:#b32d2e;" href="<?php echo admin_url("admin.php?page=briefing-room-officers.php&officer_id=$officerId"); ?>">Clear</a>
            <?php endif; ?>
        </p>
    </form>

    <div class="tablenav top">
        <list-table-pagination
            data-label="session(s)"
            data-page="<?php echo $paged; ?>"
            data-page-count="<?php echo $numPages; ?>"
            data-row-count="<?php echo count($rows); ?>"
            data-total-count="<?php echo $total; ?>"
            data-previous-page-url="<?php echo $previousPageUrl; ?>"
            data-next-page-url="<?php echo $nextPageUrl; ?>"
        >
        </list-table-pagination>
    </div>

    <list-table
        data-columns='<?php echo json_encode($columns); ?>'
        data-rows='<?php
        echo json_encode($rows, JSON_HEX_APOS); ?>'
    ></list-table>

    <dialog
        is="add-new"
        target="edit"
        data-title="Edit Student"
        data-action="update_officer"
        data-fields='[
        {"id": "officerId","label": "ID", "value": "<?php echo $officer->id; ?>", "disabled": true },
        {"id": "firstName","label": "First Name","value": "<?php echo $officer->firstName; ?>"},
        {"id": "lastName","label": "Last Name","value": "<?php echo $officer->lastName; ?>"},
        {"id": "emailAddress","label": "Email Address","value": "<?php echo $officer->emailAddress; ?>"},
        {"id": "rank","label": "Rank", "options": <?php echo json_encode([
            ['id' => 'officer', 'name' => 'Officer'],
            ['id' => 'sergeant', 'name' => 'Sergeant'],
            ['id' => 'lieutenant', 'name' => 'Lieutenant'],
            ['id' => 'captain', 'name' => 'Captain'],
            ['id' => 'chief', 'name' => 'Chief']
        ], JSON_HEX_APOS)?>, "value": "<?php echo $officer->rank; ?>"},
        {"id": "stationId","label": "Station", "options": <?php echo Station::where('agencyId', $officer->agency()->id)->toJSON(); ?>, "value": "<?php echo $officer->stationId; ?>"},
        {"id": "badgeId","label": "Badge ID","value": "<?php echo $officer->badgeId; ?>"},
        {"id": "stateId","label": "State ID","value": "<?php echo $officer->stateId; ?>"},
        {"id": "agencyId","label": "Agency ID","value": "<?php echo $officer->agencyId; ?>"},
        {"id": "role","label": "Role", "required": "true", "value": "student", "options": <?php echo json_encode([
            ['id' => 'student', 'name' => 'Student'],
            ['id' => 'facilitator', 'name' => 'Facilitator'],
            ['id' => 'manager', 'name' => 'Manager']
        ], JSON_HEX_APOS)?>}
    ]'
        data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $officer->agency()->id); ?>"
    >
    </dialog>

</div>
