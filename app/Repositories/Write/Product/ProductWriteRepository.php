<?php

namespace App\Repositories\Write\Product;

use App\Models\Product;
use App\Services\DTO\Product\ProductDTO;

class ProductWriteRepository implements ProductWriteRepositoryInterface
{
    public function store(ProductDTO $dto): Product
    {
        $entity = Product::create($dto);
        $entity->save();

        return $entity;
    }
}
