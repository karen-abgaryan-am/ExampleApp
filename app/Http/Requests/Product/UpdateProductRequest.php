<?php

namespace App\Http\Requests\Product;

class UpdateProductRequest extends BaseProductRequest
{
    private const ID = 'id';

    public function getId(): int
    {
        return $this->route(self::ID);
    }
}
