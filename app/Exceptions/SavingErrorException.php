<?php

namespace App\Exceptions;

use Exception;

class SavingErrorException extends Exception
{
    public function __construct(string $message = "Failed to save the product.", int $code =500)
    {
        parent::__construct($message, $code);
    }
}
