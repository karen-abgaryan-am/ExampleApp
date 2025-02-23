<?php

namespace App\Exceptions\Category;

use Exception;

class DeleteCategoryErrorException extends Exception
{
    private const ERROR_CODE = 409;
    private const ERROR_MESSAGE = "The category could not be deleted";

    public function __construct(string $message = self::ERROR_MESSAGE, int $code = self::ERROR_CODE)
    {
        parent::__construct($message, $code);
    }
}
