<?php

namespace App\Http\Requests\Category;

class UpdateCategoryRequest extends BaseCategoryRequest
{
    private const ID = 'id';

    public function getId(): int
    {
        return $this->route(self::ID);
    }
}
