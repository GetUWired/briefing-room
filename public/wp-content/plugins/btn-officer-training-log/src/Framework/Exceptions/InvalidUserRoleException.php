<?php

namespace BTN\BriefingRoom\Framework\Exceptions;

class InvalidUserRoleException extends \Exception
{
    public function __construct($message = 'Invalid User Role', $code = 403, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
