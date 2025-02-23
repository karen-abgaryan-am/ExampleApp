<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ShowProductRequest extends FormRequest
{
    private const ID = 'id';

    public function getId(): int
    {
        return $this->route(self::ID);
    }
}
