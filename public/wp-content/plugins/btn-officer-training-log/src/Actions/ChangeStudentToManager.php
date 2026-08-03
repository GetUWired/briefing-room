<?php

namespace BTN\BriefingRoom\Actions;

use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;

class ChangeStudentToManager
{
    public function __invoke(Officer $officer): Manager
    {
        $manager = Manager::create([
            'firstName' => $officer->firstName,
            'lastName' => $officer->lastName,
            'emailAddress' => $officer->emailAddress,
            'userId' => $officer->userId,
            'organizationId' => $officer->agency()->id,
        ]);

        $currentUserId = get_current_user_id();
        wp_set_current_user( $officer->userId );
//        Memberium::addTagById(138); // Sergeant/facilitator
        Memberium::removeTagById(160); // Officer/student
        wp_set_current_user( $currentUserId );

        $officer->delete();

        return $manager;
    }
}
