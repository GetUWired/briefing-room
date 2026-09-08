<?php

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Helpers\TimeFormatter;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\TrainingSession;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;

include 'components/list-table.html';

$query = Manager::query();

if (isset($_REQUEST['agency_id']) && $_REQUEST['agency_id']) {
    $query->where('organizationId', absint($_REQUEST['agency_id']));
}

if (isset($_REQUEST['s']) && $_REQUEST['s']) {
    $search = sanitize_text_field($_REQUEST['s']);
    $query->whereLike('firstName', $search)
        ->orWhereLike('lastName', $search); // Note: The "OR" condition should go last.
}

$rows = array_map(function ($data) {

    $manager = new Manager(get_object_vars($data));

    $actions = [];

    $user = get_user_by('ID', $manager->userId);
    $switchingUrl = $user && method_exists( 'user_switching', 'maybe_switch_url' )
        ? user_switching::maybe_switch_url($user)
        : false;
    if($switchingUrl) {
        $actions[] = sprintf(
            '<a href="%s" class="button">Switch to User</a>',
            add_query_arg('redirect_to', rawurlencode(site_url()), $switchingUrl)
        );
    }

    return [
		'checkbox' => "<input type='checkbox' class='db_ids' value='".$manager->id."' style='margin-left:8px' >",
        'id' => $manager->id,
        'name' => $manager->name(),
        'email' => $manager->emailAddress,
        'agency' => $manager->agencyName(),
        'actions' => implode(' ', $actions),
    ];
}, $query->getAll()); // Use array_filter and array_values to clean the result.

$agencies = Agency::all();
?>

<div class="wrap">
    <h1 class="wp-heading-inline">Managers</h1>
<!--    <button id="new" class="page-title-action">Add New</button>-->
    <hr class="wp-header-end">

    <!-- TODO: Add pagination -->


		<form method="get">
            <input type="hidden" name="page" value="briefing-room-managers.php">
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
                             selected( $_REQUEST['agency_id'], $agency->id ); ?> >
                                <?php
                                echo $agency->name; ?>
                            </option>
                        <?php
                        endforeach; ?>
                    </select>
                </label>
                <input type="submit" id="search-submit" class="button" value="Search/Filter">
            </p>
        </form>

    <list-table
        data-columns='[
            {"id": "id","label": "ID"},
            {"id": "name","label": "Name"},
            {"id": "email","label": "Email"},
            {"id": "agency","label": "Agency"},
            {"id": "actions","label": "Actions"}
        ]'
        data-rows='<?php
        echo json_encode($rows, JSON_HEX_APOS); ?>'
    ></list-table>

</div>
