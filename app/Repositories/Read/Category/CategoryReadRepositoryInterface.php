<?php
namespace App\Repositories\Read\Category;

use App\Services\Category\DTO\IndexCategoryDTO;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface CategoryReadRepositoryInterface
{
    public function index(IndexCategoryDTO $dto): LengthAwarePaginator;
    public function find(int $id): Collection;
}
