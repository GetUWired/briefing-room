<?php

namespace BTN\BriefingRoom\Actions;

use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;

class ChangeFacilitatorToManager
{
    public function __invoke(Sergeant $sergeant): Manager
    {
        $manager = Manager::create([
            'firstName' => $sergeant->firstName,
            'lastName' => $sergeant->lastName,
            'emailAddress' => $sergeant->emailAddress,
            'userId' => $sergeant->userId,
            'organizationId' => $sergeant->agency()->id,
        ]);

        $currentUserId = get_current_user_id();
        wp_set_current_user( $sergeant->userId );
//        Memberium::addTagById(160); // Officer/student
        Memberium::removeTagById(138); // Sergeant/facilitator
        wp_set_current_user( $currentUserId );

        $sergeant->delete();

        return $manager;
    }
}
