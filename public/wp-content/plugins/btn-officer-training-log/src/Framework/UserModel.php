<?php

namespace BTN\BriefingRoom\Framework;

use BTN\BriefingRoom\Framework\Exceptions\InvalidUserRoleException;
use ReflectionClass;

abstract class UserModel
{
    public $id;

    protected $_user;

    protected static $meta = [];

    public function __construct($id, $user = null)
    {
        $this->id = $id;

        if($user) {
            $this->_user = $user;
        }
    }

    public function name()
    {
        return $this->user()->display_name;
    }

    public function user()
    {
        return $this->_user ?? $this->_user = get_user_by('id', $this->id);
    }

    public static function query($args = [])
    {
        return new Collection(array_map(function($user) {
            return new static($user->ID, $user);
        }, get_users(wp_parse_args($args, ['role' => static::ROLE]))));
    }

    public static function search($search)
    {
        return self::query([
            'role' => static::ROLE,
            'number' => -1,
            'search' => "*{$search}*",
        ]);
    }

    public static function where($key, $value)
    {
        $users = get_users([
            'role' => static::ROLE,
            'meta_key' => static::$meta[$key] ?? $key,
            'meta_value' => $value
        ]);

        return new Collection(array_map(function($user) {
            return new static($user->ID, $user);
        }, $users));
    }

    public static function fromCurrentUser()
    {
        $user = wp_get_current_user();
        if (in_array(static::ROLE, (array) $user->roles)) {
            return new static($user->ID, $user);
        }
        $reflect = new ReflectionClass(static::class);
        throw new InvalidUserRoleException("Invalid user role for {$reflect->getShortName()}.");
    }

    public static function hasRole($user = null)
    {
        $user = $user ?: wp_get_current_user();
        return in_array(static::ROLE, (array) $user->roles);
    }
}
