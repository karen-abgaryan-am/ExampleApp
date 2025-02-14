<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use Illuminate\Http\JsonResponse;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(ProductRequest $request) : ProductResource
    {
        $product = Product::create([
            "name" => $request->get('name'),
            "price" => $request->get('price'),
            "stock" => $request->get('stock'),
        ]);

        return new ProductResource($product);
    }
}
