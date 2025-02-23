<?php

namespace App\Exceptions\Category;

use Exception;

class NotFoundCategoryErrorException extends Exception
{
    private const ERROR_CODE = 404;
    private const ERROR_MESSAGE = "Category not found";

    public function __construct(string $message = self::ERROR_MESSAGE, int $code = self::ERROR_CODE)
    {
        parent::__construct($message, $code);
    }
}
