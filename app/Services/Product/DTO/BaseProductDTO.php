<?php

namespace App\Services\Product\DTO;

use App\Http\Requests\Product\BaseProductRequest;

class BaseProductDTO
{
    private readonly string $name;
    private readonly string $description;
    private readonly float $price;
    private readonly int $stock;
    private readonly ?string $image;
    private readonly ?string $technical_characteristics;

    public function __construct(BaseProductRequest $request)
    {
        $this->name = $request->getName();
        $this->description = $request->getDescription();
        $this->price = $request->getPrice();
        $this->stock = $request->getStock();
        $this->image = $request->getImage();
        $this->technical_characteristics = $request->getTechnicalCharacteristics();
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function getTechnicalCharacteristics(): ?string
    {
        return $this->technical_characteristics;
    }
}
