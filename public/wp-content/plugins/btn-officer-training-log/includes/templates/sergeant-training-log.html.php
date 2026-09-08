<?php

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\TrainingSession;

include 'components/add-new-dialog.html';
include 'components/list-table.html';
include 'components/list-table-pagination.html';

$sergeantId = absint($_GET['sergeant_id']);
$sergeant = Sergeant::find($sergeantId);

$total = TrainingSession::countWhere('sergeantId', $sergeantId);
$paged = isset($_GET['paged']) ? absint($_GET['paged']) : 1;
$nextPage = $paged + 1;
$perPage = 20;
$numPages = ceil($total / $perPage);
$sessions = BTN\BriefingRoom\TrainingSession::paginateWhere('sergeantId', $sergeantId, $paged, $perPage);

$columns = [
    ['id' => 'session', 'label' => 'Session ID'],
    ['id' => 'training', 'label' => 'Training'],
    ['id' => 'duration', 'label' => 'Duration'],
    ['id' => 'completed', 'label' => 'Date'],
];

$rows = array_map(function($session) {
    return [
        'session' => $session->id,
        'training' => $session->training()->getTitle(),
        'duration' => $session->duration,
        'completed' => $session->completedAt,
    ];
}, $sessions->models);

?>

<div class="wrap">
    <h1 class="wp-heading-inline">
        Facilitator <?php echo $sergeant->name(); ?>
    </h1>
    <button id="edit" class="page-title-action">Edit</button>
    <a class="page-title-action" href='/wp-admin/admin-post.php?action=sergeant_report&sergeant_id=<?php echo $sergeant->id; ?>'>Download Report</a>
    <hr class="wp-header-end">

    <div class="tablenav top">
        <list-table-pagination
            data-label="session(s)"
            data-page="<?php echo $paged; ?>"
            data-page-count="<?php echo $numPages; ?>"
            data-row-count="<?php echo count($rows); ?>"
            data-total-count="<?php echo $total; ?>"
            data-previous-page-url="/wp-admin/admin.php?page=briefing-room-sergeants.php&sergeant_id=<?php echo $sergeant->id; ?>&paged=<?php echo $paged - 1; ?>"
            data-next-page-url="/wp-admin/admin.php?page=briefing-room-sergeants.php&sergeant_id=<?php echo $sergeant->id; ?>&paged=<?php echo $paged + 1; ?>"
        >
        </list-table-pagination>
    </div>

    <list-table
        data-columns='<?php echo json_encode($columns); ?>'
        data-rows='<?php echo json_encode($rows); ?>'
    ></list-table>

    <dialog
        is="add-new"
        target="edit"
        data-title="Edit Facilitator"
        data-action="update_sergeant"
        data-fields='[
        {"id": "sergeantId","label": "ID", "value": "<?php echo $sergeant->id; ?>", "disabled": true },
        {"id": "firstName","label": "First Name","value": "<?php echo $sergeant->firstName; ?>"},
        {"id": "lastName","label": "Last Name","value": "<?php echo $sergeant->lastName; ?>"},
        {"id": "emailAddress","label": "Email Address","value": "<?php echo $sergeant->emailAddress; ?>"},
        {"id": "rank","label": "Rank", "options": <?php echo json_encode([
            ['id' => 'officer', 'name' => 'Officer'],
            ['id' => 'sergeant', 'name' => 'Sergeant'],
            ['id' => 'lieutenant', 'name' => 'Lieutenant'],
            ['id' => 'captain', 'name' => 'Captain'],
            ['id' => 'chief', 'name' => 'Chief']
        ], JSON_HEX_APOS)?>, "value": "<?php echo $sergeant->rank; ?>"},
        {"id": "stationId","label": "Station", "options": <?php echo Station::where('agencyId', $sergeant->agency()->id)->toJSON(); ?>, "value": "<?php echo $sergeant->stationId; ?>"},
        {"id": "badgeId","label": "Badge ID","value": "<?php echo $sergeant->badgeId; ?>"},
        {"id": "stateId","label": "State ID","value": "<?php echo $sergeant->stateId; ?>"},
        {"id": "agencyId","label": "Agency ID","value": "<?php echo $sergeant->agencyId; ?>"},
        {"id": "role","label": "Role", "required": "true", "value": "facilitator", "options": <?php echo json_encode([
            ['id' => 'student', 'name' => 'Student'],
            ['id' => 'facilitator', 'name' => 'Facilitator'],
            ['id' => 'manager', 'name' => 'Manager']
        ], JSON_HEX_APOS)?>}
    ]'
        data-redirect="<?php echo admin_url('admin.php?page=briefing-room.php&agency_id=' . $sergeant->agency()->id); ?>"
    >
    </dialog>

</div>
