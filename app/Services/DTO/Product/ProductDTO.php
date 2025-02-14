<?php
namespace App\Services\DTO\Product;

use App\Http\Requests\ProductRequest;

class ProductDTO
{
    public string $name;
    public string $description;
    public float $price;
    public int $stock;

    public function __construct(ProductRequest $request)
    {
        $this->name = $request->getName();
        $this->description = $request->getDescription();
        $this->price = $request->getPrice();
        $this->stock = $request->getStock();
    }
}
