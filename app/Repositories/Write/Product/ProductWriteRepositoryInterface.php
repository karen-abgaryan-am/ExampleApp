<?php

namespace App\Repositories\Write\Product;

use App\Services\Product\DTO\ProductDTO;
use Illuminate\Support\Collection;

interface ProductWriteRepositoryInterface
{
    public function create(ProductDTO $dto): Collection;
}
