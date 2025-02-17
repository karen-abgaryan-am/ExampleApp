<?php

namespace App\Repositories\Write\Product;

use App\Models\Product;
use App\Services\DTO\Product\ProductDTO;

interface ProductWriteRepositoryInterface
{
    public function store(ProductDTO $dto): Product;
}
