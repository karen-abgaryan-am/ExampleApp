<?php
namespace App\Repositories\Write\Category;

use App\Models\Category;
use App\Services\DTO\Category\CategoryDTO;

interface CategoryWriteRepositoryInterface
{
    public function store(CategoryDTO $dto): Category;
}
