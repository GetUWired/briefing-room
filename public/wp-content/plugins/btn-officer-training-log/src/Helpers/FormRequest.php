<?php

namespace BTN\BriefingRoom\Helpers;

class FormRequest
{
    public static function getEnum(string $key, array $values, $default = null) {
        return isset($_REQUEST[$key]) && in_array($_REQUEST[$key], $values)
            ? $_REQUEST[$key]
            : $default;
    }
}
