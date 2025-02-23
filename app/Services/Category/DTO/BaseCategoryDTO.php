<?php

namespace App\Services\Category\DTO;

use App\Http\Requests\Category\BaseCategoryRequest;

class BaseCategoryDTO
{
    private readonly string $name;
    private readonly string $slug;
    private readonly ?int $parent_id;

    public function __construct(BaseCategoryRequest $request)
    {
        $this->name = $request->getName();
        $this->slug = $request->getSlug();
        $this->parent_id = $request->getParentId();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getParentId(): ?int
    {
        return $this->parent_id;
    }
}
