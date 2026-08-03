<?php

namespace BTN\BriefingRoom\Actions;

use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Station;

class ChangeManagerToStudent
{
    public function __invoke(Manager $manager, Station $station): Officer
    {
        $officer = Officer::create([
            'firstName' => $manager->firstName,
            'lastName' => $manager->lastName,
            'emailAddress' => $manager->emailAddress,
            'organizationId' => $manager->organizationId,
            'userId' => $manager->userId,
            'stationId' => $station->id,
            'badgeId' => '', // Not Null Columns
            'stateId' => '', // Not Null Columns
        ]);

        $currentUserId = get_current_user_id();
        wp_set_current_user( $manager->userId );
        Memberium::addTagById(160); // Officer/student
//        Memberium::removeTagById(160); // Officer/student
        wp_set_current_user( $currentUserId );

        $manager->delete();

        return $officer;
    }
}
