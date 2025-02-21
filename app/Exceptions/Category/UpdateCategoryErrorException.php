<?php

namespace App\Exceptions\Category;

use Exception;

class UpdateCategoryErrorException extends Exception
{
    private const ERROR_CODE = 422;
    private const ERROR_MESSAGE = "Error while updating category.";

    public function __construct(string $message = self::ERROR_MESSAGE, int $code = self::ERROR_CODE)
    {
        parent::__construct($message, $code);
    }

}
