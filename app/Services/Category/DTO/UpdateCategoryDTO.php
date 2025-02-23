<?php

namespace App\Services\Category\DTO;

use App\Http\Requests\Category\UpdateCategoryRequest;

class UpdateCategoryDTO extends BaseCategoryDTO
{
    private readonly int $id;

    public function __construct(UpdateCategoryRequest $request)
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
            'id'   => $this->getId(),
            'name' => $this->getName(),
            'slug' => $this->getSlug(),
            'parent_id' => $this->getParentId(),
        ];
    }
}
