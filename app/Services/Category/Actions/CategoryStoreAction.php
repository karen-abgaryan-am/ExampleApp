<?php

namespace App\Services\Category\Actions;

use App\Repositories\Write\Category\CategoryWriteRepositoryInterface;
use App\Services\Category\DTO\CategoryDTO;
use Illuminate\Support\Collection;

class CategoryStoreAction
{
    public function __construct(private readonly CategoryWriteRepositoryInterface $categoryWriteRepository)
    {
    }

    public function run(CategoryDTO $dto): Collection
    {
        return $this->categoryWriteRepository->create($dto);
    }
}
