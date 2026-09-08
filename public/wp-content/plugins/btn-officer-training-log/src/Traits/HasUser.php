<?php

namespace BTN\BriefingRoom\Traits;

use BTN\BriefingRoom\Framework\Exceptions\NotFound;
use WP_User;

trait HasUser
{
    public $userId;

    public function user(): WP_User
    {
        return new WP_User($this->userId);
    }

    public static function findByUserId($userId)
    {
        $model = static::query()->where('userId', $userId)->get();
        if(!$model) {
            throw new NotFound(sprintf("Model (%s) not found for user (ID %d)", static::class, $userId));
        }
        return static::find($model->id);
    }
}
