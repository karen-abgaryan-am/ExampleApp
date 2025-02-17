<?php
namespace App\Services\DTO\Category;

use App\Http\Requests\CategoryRequest;

class CategoryDTO
{
    public string $name;
    public string $slug;

    public function __construct(CategoryRequest $request)
    {
        $this->name = $request->getName();
        $this->slug = $request->getSlug();
    }
}
