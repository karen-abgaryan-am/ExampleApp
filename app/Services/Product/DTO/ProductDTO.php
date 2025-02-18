<?php
namespace App\Services\Product\DTO;

use App\Http\Requests\ProductRequest;

class ProductDTO
{
    private readonly string $name;
    private readonly string $description;
    private readonly float $price;
    private readonly int $stock;

    public function __construct(ProductRequest $request)
    {
        $this->name = $request->getName();
        $this->description = $request->getDescription();
        $this->price = $request->getPrice();
        $this->stock = $request->getStock();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getStock(): int
    {
        return $this->stock;
    }
}
