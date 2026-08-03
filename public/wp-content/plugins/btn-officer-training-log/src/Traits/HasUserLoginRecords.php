<?php

namespace BTN\BriefingRoom\Traits;

use BTN\BriefingRoom\UserLogin;

trait HasUserLoginRecords
{
    public $userId;

    public function logins()
    {
        return UserLogin::query()->where('userId', $this->userId);
    }

    public function lastLogin()
    {
        if($lastLogin = $this->logins()->orderBy('loginAt', 'desc')->limit(1)->get()) {
            return date('F j, Y', strtotime($lastLogin->loginAt));
        }

        return '-';
    }
}
