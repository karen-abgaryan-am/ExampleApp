<?php

namespace App\Services\Actions\Product;

use App\Http\Resources\ProductResource;
use App\Repositories\Write\Product\ProductWriteRepositoryInterface;
use App\Services\DTO\Product\ProductDTO;

class ProductStoreAction
{
    public function __construct(public ProductWriteRepositoryInterface $productWriteRepository)
    {

    }

    public function run(ProductDTO $dto): ProductResource
    {
        $product = $this->productWriteRepository->store($dto);

        return new ProductResource($product);
    }
}
