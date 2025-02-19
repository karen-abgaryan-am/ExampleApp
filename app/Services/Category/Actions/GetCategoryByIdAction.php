<?php

namespace App\Services\Category\Actions;

use App\Repositories\Read\Category\CategoryReadRepositoryInterface;
use Illuminate\Support\Collection;

class GetCategoryByIdAction
{
    public function __construct(private readonly CategoryReadRepositoryInterface $categoryReadRepository)
    {
    }

    public function run(int $id): Collection
    {
        return $this->categoryReadRepository->find($id);
    }
}
