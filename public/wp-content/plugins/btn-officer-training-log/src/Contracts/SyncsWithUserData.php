<?php

namespace BTN\BriefingRoom\Contracts;

use BTN\BriefingRoom\DataTransferObjects\UserProfileUpdateData;

interface SyncsWithUserData
{
    public static function syncUserData(UserProfileUpdateData $data);
}
