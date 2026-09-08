<?php

namespace BTN\BriefingRoom\Actions;

use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;

class ChangeFacilitatorToStudent
{
    public function __invoke(Sergeant $sergeant): Officer
    {
        $officer = Officer::create([
            'firstName' => $sergeant->firstName,
            'lastName' => $sergeant->lastName,
            'emailAddress' => $sergeant->emailAddress,
            'stationId' => $sergeant->stationId,
            'userId' => $sergeant->userId,
            'badgeId' => $sergeant->badgeId,
            'stateId' => $sergeant->stateId,
            'agencyId' => $sergeant->agencyId
        ]);

        $currentUserId = get_current_user_id();
        wp_set_current_user( $sergeant->userId );
        Memberium::addTagById(160); // Officer/student
        Memberium::removeTagById(138); // Sergeant/facilitator
        wp_set_current_user( $currentUserId );

        $sergeant->delete();

        return $officer;
    }
}
