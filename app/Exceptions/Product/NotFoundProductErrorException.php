<?php

namespace App\Exceptions\Product;

use Exception;

class NotFoundProductErrorException extends Exception
{
    private const ERROR_CODE = 404;
    private const ERROR_MESSAGE = "Product not found";

    public function __construct(string $message = self::ERROR_MESSAGE, int $code = self::ERROR_CODE)
    {
        parent::__construct($message, $code);
    }
}
