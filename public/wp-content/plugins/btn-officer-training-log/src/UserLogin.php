<?php

namespace BTN\BriefingRoom;

class UserLogin extends Framework\Model
{
    use Framework\ORM;
    use Framework\Queryable;

    public $id;
    public $userId;
    public $loginAt;

    public static function getTable(): string
    {
        return 'btn_user_login';
    }
}
