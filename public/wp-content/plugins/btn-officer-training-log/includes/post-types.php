<?php

/**
 * Training Post Type
 */
$cpt = register_post_type('btnbf_training',
    [
        'labels'      => [
            'name'          => 'Training',
            'singular_name' => 'Training',
        ],
        'public'      => false,
        'has_archive' => true,
        'supports'    => ['title'],
        'show_in_rest' => true,
        'show_in_menu' => false,
        'show_ui'      => true,
    ]
);
