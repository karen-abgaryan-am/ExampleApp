<?php

namespace App\Services\Product\Actions;

use App\Repositories\Write\Product\ProductWriteRepositoryInterface;
use App\Services\Product\DTO\CreateProductDTO;
use Illuminate\Support\Collection;

class CreateProductAction
{
    public function __construct(private readonly ProductWriteRepositoryInterface $productWriteRepository)
    {
    }

    public function run(CreateProductDTO $dto): Collection
    {
        return $this->productWriteRepository->create($dto);
    }
}
