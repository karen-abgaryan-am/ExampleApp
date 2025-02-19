<?php

namespace App\Services\Product\Actions;

use App\Repositories\Read\Product\ProductReadRepositoryInterface;
use Illuminate\Support\Collection;

class GetAllProductsAction
{
    public function __construct(private readonly ProductReadRepositoryInterface $productReadRepository)
    {
    }

    public function run(): Collection
    {
        return $this->productReadRepository->all();
    }
}
