<?php

namespace App\Services\Category\DTO;

use App\Http\Requests\Category\IndexCategoryRequest;

class IndexCategoryDTO
{
    private readonly int $page;
    private readonly int $perPage;

    public function __construct(IndexCategoryRequest $request)
    {
        $this->page = $request->getPage();
        $this->perPage = $request->getPerPage();
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getPerPage(): int
    {
        return $this->perPage;
    }
}
