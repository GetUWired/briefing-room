<?php

use BTN\BriefingRoom\DataTransferObjects\UserProfileUpdateData;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;

add_action( 'profile_update', function( int $userId, \WP_User $old_user_data, array $userdata ) {

    $data = new UserProfileUpdateData($userdata);

    switch($userdata['role']) {
        case Sergeant::ROLE:
            Sergeant::syncUserData($data);
            break;
        case Officer::ROLE:
            Officer::syncUserData($data);
            break;
    }
}, 10, 3 );


