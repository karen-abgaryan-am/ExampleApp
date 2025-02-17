<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Services\Actions\Product\ProductStoreAction;
use App\Services\DTO\Product\ProductDTO;

class ProductController extends Controller
{
    public function store(ProductRequest $request, ProductStoreAction $action): ProductResource
    {
        $dto = new ProductDTO($request);

        return $action->run($dto);
    }
}
