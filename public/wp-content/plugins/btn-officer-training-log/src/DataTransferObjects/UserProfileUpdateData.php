<?php

namespace BTN\BriefingRoom\DataTransferObjects;

class UserProfileUpdateData
{
    public $id;
    public $role;
    public $firstName;
    public $lastName;
    public $emailAddress;

    public function __construct(array $userData)
    {
        $this->id = $userData['ID'];
        $this->role = $userData['role'];
        $this->firstName = $userData['first_name'];
        $this->lastName = $userData['last_name'];
        $this->emailAddress = $userData['user_email'];
    }
}
