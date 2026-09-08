<?php

add_menu_page(
    'Briefing Room',
    'Briefing Room',
    'manage_options',
    'briefing-room.php',
    null,
    'dashicons-id-alt',
    3 // After the "Dashboard" and before the first "Separator".
);

// Agencies
add_submenu_page(
    'briefing-room.php',
    'Agencies',
    'Agencies',
    'manage_options',
    'briefing-room.php',
    function () {
        include isset($_GET['agency_id'])
            ? 'templates/agency-details.html.php'
            : 'templates/agencies-list-table.html.php';
    }
);

// Managers
add_submenu_page(
    'briefing-room.php',
    'Managers',
    'Managers',
    'manage_options',
    'briefing-room-managers.php',
    function () {
        include 'templates/managers-list-table.html.php';
    }
);

// Stations
add_submenu_page(
    'briefing-room.php',
    'Stations',
    'Stations',
    'manage_options',
    'briefing-room-stations.php',
    function () {
        include isset($_GET['station_id'])
            ? 'templates/station-details.html.php'
            : 'templates/stations-list-table.html.php';
    }
);

// Sergeants
add_submenu_page(
    'briefing-room.php',
    'Facilitators',
    'Facilitators',
    'manage_options',
    'briefing-room-sergeants.php',
    function () {
        include isset($_GET['sergeant_id'])
            ? 'templates/sergeant-training-log.html.php'
            : 'templates/sergeants-list-table.html.php';
    }
);

// Officers
add_submenu_page(
    'briefing-room.php',
    'Students',
    'Students',
    'manage_options',
    'briefing-room-officers.php',
    function () {
        include isset($_GET['officer_id'])
            ? 'templates/officer-training-log.html.php'
            : 'templates/officers-list-table.html.php';
    }
);

add_submenu_page(
    'briefing-room.php',
    '3rd Party Training',
    '3rd Party Training',
    'manage_options',
    'edit.php?post_type=btnbf_training',
);
