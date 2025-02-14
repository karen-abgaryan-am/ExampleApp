<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    private const NAME = 'name';
    private const DESCRIPTION = 'description';
    private const PRICE = 'price';
    private const STOCK = 'stock';

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
}
