<?php

namespace App\Services\Product\DTO;

use App\Http\Requests\Product\UpdateProductRequest;

class UpdateProductDTO extends BaseProductDTO
{
    private readonly int $id;

    public function __construct(UpdateProductRequest $request)
    {
        parent::__construct($request);

        $this->id = $request->getId();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function toArray(): array
    {
        return [
            'id'                        => $this->getId(),
            'name'                      => $this->getName(),
            'description'               => $this->getDescription(),
            'price'                     => $this->getPrice(),
            'stock'                     => $this->getStock(),
            'image'                     => $this->getImage(),
            'technical_characteristics' => $this->getTechnicalCharacteristics(),
        ];
    }
}
