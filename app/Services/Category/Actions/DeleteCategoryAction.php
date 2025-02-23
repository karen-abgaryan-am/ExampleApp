<?php

namespace App\Services\Category\Actions;

use App\Repositories\Write\Category\CategoryWriteRepositoryInterface;

class DeleteCategoryAction
{
    public function __construct(private readonly CategoryWriteRepositoryInterface $categoryWriteRepository)
    {
    }

    public function run(int $id): bool
    {
        return $this->categoryWriteRepository->delete($id);
    }
}
