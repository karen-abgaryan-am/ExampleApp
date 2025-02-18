<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Services\Product\Actions\ProductStoreAction;
use App\Services\Product\DTO\ProductDTO;

class ProductController extends Controller
{
    public function store(ProductRequest $request, ProductStoreAction $action): ProductResource
    {
        $dto = new ProductDTO($request);
        $product = $action->run($dto);

        return new ProductResource($product);
    }
}
