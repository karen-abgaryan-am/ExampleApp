<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class ShowCategoryRequest extends FormRequest
{
    private const ID = 'id';

    public function getId(): int
    {
        return $this->route(self::ID);
    }
}
