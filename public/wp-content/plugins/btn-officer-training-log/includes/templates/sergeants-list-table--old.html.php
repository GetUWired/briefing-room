<?php

$total = count_users()['avail_roles']['btn_briefing_room_sergeant'];

if(isset($_REQUEST['s'])) {
    $sergeants = BTN\BriefingRoom\Sergeant::search(esc_attr($_REQUEST['s']));
} else {
    $paged = isset($_GET['paged']) ? absint($_GET['paged']) : 1;
    $nextPage = $paged + 1;
    $perPage = 20;
    $numPages = ceil($total / $perPage);
    $sergeants = BTN\BriefingRoom\Sergeant::query([
        'number' => $perPage,
        'paged' => $paged,
    ]);
}

$columns = [
    ['id' => 'display_name', 'label' => 'Name'],
    ['id' => 'station_id', 'label' => 'Station ID'],
    ['id' => 'sessions_taught', 'label' => 'Sessions Taught'],
    ['id' => 'training_time', 'label' => 'Training Time'],
    ['id' => 'last_login', 'label' => 'Last Login'],
    ['id' => 'actions', 'label' => 'Actions'],
];

$rows = array_map(function($sergeant) {
    return [
        'display_name' => $sergeant->user()->display_name,
        'station_id' => $sergeant->stationId(),
        'sessions_taught' => $sergeant->sessions()->count(),
        'training_time' => $sergeant->trainingTime(),
        'last_login' => $sergeant->lastLogin(),
        'actions' => "
            <a href='/wp-admin/admin.php?page=briefing-room-sergeants.php&sergeant_id={$sergeant->id}' class='button'>View Report</a>
            <a href='/wp-admin/admin-post.php?action=sergeant_report&sergeant_id={$sergeant->id}' class='button'>Download Report</a>
        ",
    ];
}, $sergeants->models);
?>

<style></style>

<div class="wrap">
    <h1 class="wp-heading-inline">Facilitators</h1>
<!--    <button id="new-transfer" class="page-title-action">Add New</button>-->
    <!--    <button id="new-transfer" class="page-title-action">Import</button>-->
    <hr class="wp-header-end">

    <h2 class="screen-reader-text">Filter list table</h2>

    <form method="get">
        <input type="hidden" name="page" value="btn/briefing-room-sergeants.php">
        <p class="search-box" style="margin-bottom: 15px;">
            <label>
                <span class="screen-reader-text">Search: </span>
                <input type="search" name="s" value="<?php if(isset($_REQUEST['s'])) echo $_REQUEST['s']; ?>">
            </label>
            <button type="submit" class="button">Search</button>
            <?php if(isset($_REQUEST['s'])) : ?>
                <a style="color:#b32d2e;" href="<?php echo admin_url('admin.php?page=btn/briefing-room-sergeants.php'); ?>">Clear</a>
            <?php endif; ?>
        </p>
    </form>

    <div class="tablenav top">
        Showing <?php echo count($rows); ?> of <?php echo number_format($total); ?> facilitators
        <?php if(isset($paged)): ?>
            <div class="tablenav-pages">
                <?php if($paged > 1): ?>
                    <a class="prev-page button" href="<?php echo admin_url('?page=btn/briefing-room-sergeants.php&paged=' . ($paged-1)); ?>">
                        <span class="screen-reader-text">Next page</span><span aria-hidden="true">‹</span>
                    </a>
                <?php endif; ?>

                Page <?php echo $paged; ?> of <?php echo $numPages; ?>

                <?php if($paged < $numPages): ?>
                    <a class="next-page button" href="<?php echo admin_url('?page=btn/briefing-room-sergeants.php&paged=' . ($paged+1)); ?>">
                        <span class="screen-reader-text">Next page</span><span aria-hidden="true">›</span>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

    <list-table
        data-columns='<?php echo json_encode($columns); ?>'
        data-rows='<?php echo json_encode($rows, JSON_HEX_APOS); ?>'
        data-actions='[]'
    ></list-table>

</div>

<script>
    class ListTable extends HTMLElement {

        constructor() {
            super()

            this.template = document.getElementById('list-table');
            this.columns = JSON.parse(this.getAttribute('data-columns'))
            this.rows = JSON.parse(this.getAttribute('data-rows'))
        }

        connectedCallback() {
            const node = document.importNode(this.template.content, true);
            this.appendChild(node);

            this.columns = JSON.parse(this.getAttribute('data-columns'))
            Object.values(this.columns).forEach(this.appendColumnCallback())

            if(this.rows.length) {
                this.rows.forEach(this.appendRowCallback())
            } else {
                const emptyRow = document.createElement('tr')
                const emptyCell = document.createElement('td')
                emptyCell.colSpan = columns.length
                emptyCell.textContent = 'No records found'
                emptyRow.appendChild(emptyCell)
                this.querySelector('tbody').appendChild(emptyRow)
            }
        }

        appendColumnCallback() {
            return ({id, label}) => {
                const node = document.createElement('th')
                node.id = id
                node.textContent = label
                node.scope = 'col'
                node.className = 'manage-column column-columnname'
                this.querySelector('thead tr').appendChild(node.cloneNode(true));
                this.querySelector('tfoot tr').appendChild(node.cloneNode(true));
            }
        }

        appendRowCallback() {
            return (columns, index) => {
                const node = document.createElement('tr')
                node.className = index % 2 ? '' : 'alternate'
                node.valign = 'top'
                this.querySelector('tbody').appendChild(node);

                Object.values(columns).forEach(this.appendRowColumnCallback(node))
            }
        }

        appendRowColumnCallback(rowColumnNode) {
            return (content, index) => {
                const node = document.createElement('td')
                node.className = 'column-columnname'
                node.innerHTML = content

                const actions = JSON.parse(this.getAttribute('data-actions'))
                index === 0 && actions?.forEach(this.appendRowColumnAction(node, content))

                rowColumnNode.appendChild(node);
            }
        }

        appendRowColumnAction(rowColumnNode, content) {
            const rowActionsNode = document.createElement('div')
            rowActionsNode.className = 'row-actions'
            rowColumnNode.appendChild(rowActionsNode)
            return (action) => {
                const anchor = document.createElement('a')
                const slug = action.toLowerCase().replace(' ', '-')
                anchor.id = `${slug}-${content}`
                anchor.textContent = action
                anchor.href = '#'
                const actionNode = document.createElement('span')
                actionNode.appendChild(anchor)
                rowActionsNode.appendChild(actionNode)
                return anchor
            }
        }
    }

    class AddNewDialog extends HTMLDialogElement {

        connectedCallback() {

            const template = document.getElementById('add-new');
            this.innerHTML = template.innerHTML + this.innerHTML

            const fields = JSON.parse(this.getAttribute('data-fields'))
            fields.forEach(this.appendFieldCallback())

            const target = document.getElementById(this.getAttribute('target'))
            target.addEventListener('click', this.showModal.bind(this))
        }

        appendFieldCallback() {
            return ({id, label}) => {
                const node = document.createElement('tr')
                node.innerHTML = `<th scope="row"><label for="${id}">${label}</label></th><td><input name="${id}" type="text" id="${id}" value="" class="regular-text"></td>`
                this.querySelector('.form-table tbody').appendChild(node);
            }
        }
    }

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
        customElements.define('list-table', ListTable)
        customElements.define('add-new', AddNewDialog, {extends: 'dialog'})
        customElements.define('officer-log-dialog', OfficerTrainingLogDialog, {extends: 'dialog'})
    });
</script>

<template id="list-table">
    <table class="widefat fixed" cellspacing="0">
        <thead>
        <tr>
            <!--            <th id="cb" class="manage-column column-cb check-column" scope="col"></th>-->
        </tr>
        </thead>

        <tfoot>
        <tr>
            <!--            <th class="manage-column column-cb check-column" scope="col"></th>-->
        </tr>
        </tfoot>

        <tbody>
        </tbody>
    </table>
</template>

<template id="add-new">

    <h2>Add New</h2>

    <form method="dialog" style="position: absolute; top: 15px; right: 15px;">
        <button style="cursor: pointer; border: 0; background: 0 0;">Close</button>
    </form>

    <form action="admin-post.php" method="post">

        <input type="hidden" name="action" value="add_officer">
        <input type="hidden" name="redirect" value="<?php echo esc_attr(admin_url('admin.php?page=briefing-room-officers.php')); ?>">

        <table class="form-table" role="presentation">
            <tbody>
            </tbody>
        </table>

        <div class="submit" style="display: flex; justify-content: space-between;">
            <button type="submit" class="button button-primary">Save</button>
        </div>

    </form>

</template>

<template id="officer-training-log">

    <h2>Training Log</h2>

    <form method="dialog" style="position: absolute; top: 15px; right: 15px;">
        <button style="cursor: pointer; border: 0; background: 0 0;">Close</button>
    </form>

</template>
