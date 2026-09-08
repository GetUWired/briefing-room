<?php

/**
 * Sergeant
 */
add_role(
    'btn_briefing_room_sergeant',
    'Facilitator',
    get_role( 'author' )->capabilities
);

/**
 * Officer
 */
add_role(
    'btn_briefing_room_officer',
    'Student',
     array_merge(
        get_role('subscriber')->capabilities,
        [
            'edit_posts' => true,
            'publish_posts' => true,
            'delete_posts' => true,
            'read' => true,
        ]
    )
);

/**
 * Sergeant
 */
add_role(
    'memberium_sergeant',
    'Facilitator',
    get_role( 'author' )->capabilities
);