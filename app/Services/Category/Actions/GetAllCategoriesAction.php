<?php

namespace App\Services\Category\Actions;

use App\Repositories\Read\Category\CategoryReadRepositoryInterface;
use Illuminate\Support\Collection;

class GetAllCategoriesAction
{
    public function __construct(private readonly CategoryReadRepositoryInterface $categoryReadRepository)
    {
    }

    public function run(): Collection
    {
        return $this->categoryReadRepository->all();
    }
}
