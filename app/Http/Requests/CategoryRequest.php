<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    private const NAME = 'name';
    private const SLUG = 'slug';

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
            self::SLUG => [
                'required',
                'string',
                'min:2',
                'max:16',
            ]
        ];
    }

    public function getName(): string
    {
        return $this->get(self::NAME);
    }

    public function getSlug(): string
    {
        return $this->get(self::SLUG);
    }
}
