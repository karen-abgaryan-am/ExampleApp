<?php
namespace App\Services\Category\DTO;

use App\Http\Requests\CategoryRequest;

class CategoryDTO
{
    private readonly string $name;
    private readonly string $slug;

    public function __construct(CategoryRequest $request)
    {
        $this->name = $request->getName();
        $this->slug = $request->getSlug();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }
}
