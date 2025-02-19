<?php
namespace App\Repositories\Read\Product;

use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;

class ProductReadRepository implements ProductReadRepositoryInterface
{
    private function query(): Builder
    {
        return Product::query();
    }

    public function all(): Collection
    {
        return collect(Product::all());
    }

    public function find(int $id): Collection
    {
        return collect($this->query()->findOrFail($id));
    }
}
