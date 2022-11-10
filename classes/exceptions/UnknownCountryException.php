<?php

namespace app\classes\exceptions;

class UnknownCountryException extends \Exception
{
    public function __construct($message = "Неизвестная страна", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}