<?php
namespace App\Repositories\Read\Category;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class CategoryReadRepository implements CategoryReadRepositoryInterface
{
    private function query(): Builder
    {
        return Category::query();
    }

    public function all(): Collection
    {
        return collect(Category::all());
    }

    public function find(int $id) : Collection
    {
        return collect($this->query()->findOrFail($id));
    }
}
