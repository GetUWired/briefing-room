<?php

namespace BTN\BriefingRoom\Actions;

use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;

class ChangeManagerToFacilitator
{
    public function __invoke(Manager $manager, Station $station): Sergeant
    {
        $sergeant = Sergeant::create([
            'firstName' => $manager->firstName,
            'lastName' => $manager->lastName,
            'emailAddress' => $manager->emailAddress,
            'organizationId' => $manager->organizationId,
            'userId' => $manager->userId,
            'stationId' => $station->id,
        ]);

        $currentUserId = get_current_user_id();
        wp_set_current_user( $sergeant->userId );
        Memberium::addTagById(138); // Sergeant/facilitator
//        Memberium::removeTagById(160); // Officer/student
        wp_set_current_user( $currentUserId );

        $manager->delete();

        return $sergeant;
    }
}
