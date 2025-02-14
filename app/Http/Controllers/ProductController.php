<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request) : JsonResponse
    {
        $product_array = [
            "name" => $request->header('name'),
            "price" => $request->header('price'),
            "stock" => $request->header('stock'),
        ];

        $product = Product::create($product_array);

        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product
        ], 201);
    }
}
