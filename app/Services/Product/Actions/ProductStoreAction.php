<?php

namespace App\Services\Product\Actions;

use App\Repositories\Write\Product\ProductWriteRepositoryInterface;
use App\Services\Product\DTO\ProductDTO;
use Illuminate\Support\Collection;

class ProductStoreAction
{
    public function __construct(private readonly ProductWriteRepositoryInterface $productWriteRepository)
    {
    }

    public function run(ProductDTO $dto): Collection
    {
        return $this->productWriteRepository->create($dto);
    }
}
