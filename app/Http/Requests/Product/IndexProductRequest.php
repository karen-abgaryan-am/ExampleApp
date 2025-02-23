<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class IndexProductRequest extends FormRequest
{
    private const PAGE = 'page';
    private const PER_PAGE = 'per_page';
    private const DEFAULT_PER_PAGE = 10;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            self::PER_PAGE => [
                'integer',
                'min:1',
            ],
        ];
    }

    public function getPerPage(): int
    {
        return $this->get(self::PER_PAGE) ?? self::DEFAULT_PER_PAGE;
    }

    public function getPage(): int
    {
        return $this->route(self::PAGE);
    }
}
