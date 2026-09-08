<?php

namespace BTN\BriefingRoom\Helpers;

class Memberium
{
    public static function getUserIdByContactId(string $contactId): int
    {
        return function_exists('memb_getUserIdByContactId')
            ? memb_getUserIdByContactId($contactId)
            : 0;
    }

    public static function getContactField(string $fieldname, bool $sanitize = false): string
    {
        return function_exists('memb_getContactField')
            ? memb_getContactField( $fieldname, $sanitize )
            : '';
    }

    public static function getContactFieldForUser(string $fieldname, int $userId, bool $sanitize = false): string
    {
        $currentUserId = get_current_user_id();
        wp_set_current_user( $userId );
        $value = self::getContactField($fieldname, $sanitize);
        wp_set_current_user( $currentUserId );
        return $value;
    }

    public static function setContactField(string $key, $value, int $contactId = 0): bool
    {
        return function_exists('memb_setContactField')
               && memb_setContactField($key, $value, $contactId);
    }

    public static function addTagById(int $tagId, int $contactId = 0, bool $force = false): bool
    {
        return self::setTags([$tagId], $contactId, $force);
    }

    public static function removeTagById(int $tagId, int $contactId = 0, bool $force = false): bool
    {
        return self::setTags([-$tagId], $contactId, $force);
    }

    public static function setTags(array $tags, int $contactId = 0, bool $force = false): bool
    {
        return function_exists('memb_setTags')
               && memb_setTags($tags, $contactId, $force);
    }
}
