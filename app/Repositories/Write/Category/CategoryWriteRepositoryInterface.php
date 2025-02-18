<?php
namespace App\Repositories\Write\Category;

use App\Services\Category\DTO\CategoryDTO;
use Illuminate\Support\Collection;

interface CategoryWriteRepositoryInterface
{
    public function create(CategoryDTO $dto): Collection;
}
