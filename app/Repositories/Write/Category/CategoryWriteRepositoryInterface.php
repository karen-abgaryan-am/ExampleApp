<?php
namespace App\Repositories\Write\Category;

use App\Services\Category\DTO\CreateCategoryDTO;
use App\Services\Category\DTO\UpdateCategoryDTO;
use Illuminate\Support\Collection;

interface CategoryWriteRepositoryInterface
{
    public function create(CreateCategoryDTO $dto): Collection;
    public function update(UpdateCategoryDTO $dto): Collection;
    public function delete(int $id): bool;
}
