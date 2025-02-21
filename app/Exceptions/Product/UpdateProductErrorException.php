<?php

namespace App\Exceptions\Product;

use Exception;

class UpdateProductErrorException extends Exception
{
    private const ERROR_CODE = 422;
    private const ERROR_MESSAGE = "Error while updating product.";

    public function __construct(string $message = self::ERROR_MESSAGE, int $code = self::ERROR_CODE)
    {
        parent::__construct($message, $code);
    }

}
