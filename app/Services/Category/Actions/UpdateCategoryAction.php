<?php

namespace App\Services\Category\Actions;

use App\Repositories\Write\Category\CategoryWriteRepositoryInterface;
use App\Services\Category\DTO\UpdateCategoryDTO;
use Illuminate\Support\Collection;

class UpdateCategoryAction
{
    public function __construct(private readonly CategoryWriteRepositoryInterface $categoryWriteRepository)
    {
    }

    public function run(UpdateCategoryDTO $dto): Collection
    {
        return $this->categoryWriteRepository->update($dto);
    }
}
