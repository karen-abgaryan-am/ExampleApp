<?php
namespace App\Repositories\Read\Category;

use App\Models\Category;
use App\Services\Category\DTO\IndexCategoryDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CategoryReadRepository implements CategoryReadRepositoryInterface
{
    private function query(): Builder
    {
        return Category::query();
    }

    public function index(IndexCategoryDTO $dto): LengthAwarePaginator
    {
        return $this->query()
            ->paginate(
                $dto->getPerPage(),
                ['*'],
                'page',
                $dto->getPage()
            );
    }

    public function find(int $id) : Collection
    {
        return collect($this->query()->findOrFail($id));
    }
}
