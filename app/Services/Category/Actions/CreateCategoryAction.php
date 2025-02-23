<?php

namespace App\Services\Category\Actions;

use App\Repositories\Write\Category\CategoryWriteRepositoryInterface;
use App\Services\Category\DTO\CreateCategoryDTO;
use Illuminate\Support\Collection;

class CreateCategoryAction
{
    public function __construct(private readonly CategoryWriteRepositoryInterface $categoryWriteRepository)
    {
    }

    public function run(CreateCategoryDTO $dto): Collection
    {
        return $this->categoryWriteRepository->create($dto);
    }
}
