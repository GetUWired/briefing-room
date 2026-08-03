<?php

namespace BTN\BriefingRoom\Actions;

use BTN\BriefingRoom\Manager;
use WP_User;

class CreateManager
{
    public function __invoke(WP_User $user, int $agencyId): Manager
    {
        return Manager::create([
            'firstName' => $user->first_name,
            'lastName' => $user->last_name,
            'emailAddress' => $user->user_email,
            'organizationId' => $agencyId,
            'userId' => $user->ID,
        ]);
    }
}
