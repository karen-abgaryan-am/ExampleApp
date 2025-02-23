<?php

namespace App\Exceptions\Product;

use Exception;

class DeleteProductErrorException extends Exception
{
    private const ERROR_CODE = 409;
    private const ERROR_MESSAGE = "The product could not be deleted";

    public function __construct(string $message = self::ERROR_MESSAGE, int $code = self::ERROR_CODE)
    {
        parent::__construct($message, $code);
    }
}
