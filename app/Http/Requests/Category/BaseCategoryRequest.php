<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class BaseCategoryRequest extends FormRequest
{
    private const NAME = 'name';
    private const SLUG = 'slug';
    private const PARENT_ID = 'parent_id';

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
            ],
            self::PARENT_ID => [
                // TODO: Add validation to check if raw with id=parent_id has parent_id=null
                'integer',
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

    public function getParentId(): ?int
    {
        return $this->get(self::PARENT_ID);
    }
}
