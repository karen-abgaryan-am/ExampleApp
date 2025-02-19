<?php

namespace App\Services\Product\Actions;

use App\Repositories\Read\Product\ProductReadRepositoryInterface;
use Illuminate\Support\Collection;

class GetProductsByIdAction
{
    public function __construct(private readonly ProductReadRepositoryInterface $productReadRepository)
    {
    }

    public function run(int $id): Collection
    {
        return $this->productReadRepository->find($id);
    }
}
