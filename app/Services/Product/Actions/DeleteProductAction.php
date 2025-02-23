<?php

namespace App\Services\Product\Actions;

use App\Repositories\Write\Product\ProductWriteRepositoryInterface;

class DeleteProductAction
{
    public function __construct(private readonly ProductWriteRepositoryInterface $productWriteRepository)
    {
    }

    public function run(int $id): bool
    {
        return $this->productWriteRepository->delete($id);
    }

}
