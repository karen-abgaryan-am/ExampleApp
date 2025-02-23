<?php

namespace App\Services\Product\Actions;

use App\Repositories\Write\Product\ProductWriteRepositoryInterface;
use App\Services\Product\DTO\UpdateProductDTO;
use Illuminate\Support\Collection;

class UpdateProductAction
{
    public function __construct(private readonly ProductWriteRepositoryInterface $productWriteRepository)
    {
    }

    public function run(UpdateProductDTO $dto): Collection
    {
        return $this->productWriteRepository->update($dto);
    }
}
