<?php

namespace BTN\BriefingRoom\Actions;

use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;

class ChangeStudentToFacilitator
{
    public function __invoke(Officer $officer): Sergeant
    {
        $sergeant = Sergeant::create([
            'firstName' => $officer->firstName,
            'lastName' => $officer->lastName,
            'emailAddress' => $officer->emailAddress,
            'organizationId' => $officer->agency()?->id,
            'stationId' => $officer->stationId,
            'userId' => $officer->userId,
            'badgeId' => $officer->badgeId,
            'stateId' => $officer->stateId,
            'agencyId' => $officer->agencyId
        ]);

        $currentUserId = get_current_user_id();
        wp_set_current_user( $sergeant->userId );
        Memberium::addTagById(138); // Sergeant/facilitator
        Memberium::removeTagById(160); // Officer/student
        wp_set_current_user( $currentUserId );

        $officer->delete();

        return $sergeant;
    }
}
