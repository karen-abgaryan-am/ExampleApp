<?php
namespace App\Services\Actions\Category;

use App\Http\Resources\CategoryResource;
use App\Repositories\Write\Category\CategoryWriteRepositoryInterface;
use App\Services\DTO\Category\CategoryDTO;

class CategoryStoreAction
{
    public function __construct(public CategoryWriteRepositoryInterface $categoryWriteRepository)
    {

    }

    public function run(CategoryDTO $dto): CategoryResource
    {
        $category = $this->categoryWriteRepository->store($dto);

        return new CategoryResource($category);
    }
}
