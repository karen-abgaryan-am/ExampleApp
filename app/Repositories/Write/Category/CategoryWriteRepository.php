<?php
namespace App\Repositories\Write\Category;

use App\Models\Category;
use App\Services\DTO\Category\CategoryDTO;

class CategoryWriteRepository implements CategoryWriteRepositoryInterface
{
    public function store(CategoryDTO $dto): Category
    {
        $entity = Category::create($dto);
        $entity->save();

        return $entity;
    }
}
