<?php

namespace App\Services\Category\Actions;

use App\Repositories\Read\Category\CategoryReadRepositoryInterface;
use App\Services\Category\DTO\IndexCategoryDTO;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class IndexCategoriesAction
{
    public function __construct(private readonly CategoryReadRepositoryInterface $categoryReadRepository)
    {
    }

    public function run(IndexCategoryDTO $dto): LengthAwarePaginator
    {
        return $this->categoryReadRepository->index($dto);
    }
}
