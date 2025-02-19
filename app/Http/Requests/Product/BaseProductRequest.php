<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class BaseProductRequest extends FormRequest
{
    private const NAME = 'name';
    private const DESCRIPTION = 'description';
    private const PRICE = 'price';
    private const STOCK = 'stock';
    private const IMAGE = 'image';
    private const TECHNICAL_CHARACTERISTICS = 'technical_characteristics';

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            self::NAME => [
                'required',
                'string',
                'min:2',
                'max:64',
            ],
            self::DESCRIPTION => [
                'required',
                'string',
                'min:2',
                'max:2048',
            ],
            self::PRICE => [
                'required',
                'numeric',
                'min:0',
            ],
            self::STOCK => [
                'required',
                'numeric',
            ],
            self::IMAGE => [
                'string'
            ],
            self::TECHNICAL_CHARACTERISTICS => [
                'string',
            ]
        ];
    }

    public function getName(): string
    {
        return $this->get(self::NAME);
    }

    public function getDescription(): string
    {
        return $this->get(self::DESCRIPTION);
    }

    public function getPrice(): string
    {
        return $this->get(self::PRICE);
    }

    public function getStock(): string
    {
        return $this->get(self::STOCK);
    }

    public function getImage(): ?string
    {
        return $this->get(self::IMAGE);
    }

    public function getTechnicalCharacteristics(): ?string
    {
        return $this->get(self::TECHNICAL_CHARACTERISTICS);
    }
}
