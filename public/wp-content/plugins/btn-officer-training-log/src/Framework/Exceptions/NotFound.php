<?php

namespace BTN\BriefingRoom\Framework\Exceptions;

class NotFound extends \Exception
{
    public function __construct($message = 'Not Found', $code = 404, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
