<?php

namespace App\Exceptions\Product;

use Exception;

class CreateProductErrorException extends Exception
{
    private const ERROR_CODE = 409;
    private const ERROR_MESSAGE = "Error while creating product";

    public function __construct(string $message = self::ERROR_MESSAGE, int $code = self::ERROR_CODE)
    {
        parent::__construct($message, $code);
    }
}
