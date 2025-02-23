<?php

namespace App\Exceptions\Category;

use Exception;

class CreateCategoryErrorException extends Exception
{
    private const ERROR_CODE = 409;
    private const ERROR_MESSAGE = "Error while creating category";

    public function __construct(string $message = self::ERROR_MESSAGE, int $code = self::ERROR_CODE)
    {
        parent::__construct($message, $code);
    }
}
