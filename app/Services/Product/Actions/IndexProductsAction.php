<?php

namespace App\Services\Product\Actions;

use App\Repositories\Read\Product\ProductReadRepositoryInterface;
use App\Services\Product\DTO\IndexProductDTO;
use Illuminate\Pagination\LengthAwarePaginator;

class IndexProductsAction
{
    public function __construct(private readonly ProductReadRepositoryInterface $productReadRepository)
    {
    }

    public function run(IndexProductDTO $dto): LengthAwarePaginator
    {
        return $this->productReadRepository->index($dto);
    }
}
