<?php

namespace BTN\BriefingRoom\Actions;

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Helpers\Memberium;

class GetAgencyManagerContactFields
{
    protected Agency $agency;

    public function __construct(Agency $agency)
    {
        $this->agency = $agency;
    }

    public function getContactFields(...$fields): array
    {
        $managerData = $this->agency->managers()->get();

        if(!$managerData || !$managerData->userId) {
            return array_fill_keys($fields, null);
        }

        $currentUserId = get_current_user_id();
        wp_set_current_user( $managerData->userId );
        $values = array_map([Memberium::class, 'getContactField'], $fields);
        wp_set_current_user( $currentUserId );

        return $values;
    }
}
