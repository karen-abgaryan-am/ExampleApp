<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Http\Resources\Product\ProductResource;
use App\Services\Product\Actions\CreateProductAction;
use App\Services\Product\Actions\DeleteProductAction;
use App\Services\Product\Actions\GetAllProductsAction;
use App\Services\Product\Actions\GetProductByIdAction;
use App\Services\Product\Actions\UpdateProductAction;
use App\Services\Product\DTO\CreateProductDTO;
use App\Services\Product\DTO\UpdateProductDTO;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    public function index(GetAllProductsAction $action): Collection
    {
        return $action->run();
    }

    public function show(int $id, GetProductByIdAction $action): ProductResource
    {
        $product = $action->run($id);

        return new ProductResource($product);
    }

    public function store(CreateProductRequest $request, CreateProductAction $action): ProductResource
    {
        $dto = new CreateProductDTO($request);
        $product = $action->run($dto);

        return new ProductResource($product);
    }

    public function update(UpdateProductRequest $request, UpdateProductAction $action): ProductResource
    {
        $dto = new UpdateProductDTO($request);
        $product = $action->run($dto);

        return new ProductResource($product);
    }

    public function destroy(int $id, DeleteProductAction $action): JsonResponse
    {
        $success = $action->run($id);

        return response()->json([$success]);
    }
}
