<?php

namespace App\Services\Product\DTO;

use App\Http\Requests\Product\IndexProductRequest;

class IndexProductDTO
{
    private readonly int $page;
    private readonly int $perPage;

    public function __construct(IndexProductRequest $request)
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
