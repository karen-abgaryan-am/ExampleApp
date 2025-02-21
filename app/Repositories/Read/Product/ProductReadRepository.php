<?php
namespace App\Repositories\Read\Product;

use App\Models\Product;
use App\Services\Product\DTO\IndexProductDTO;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;

class ProductReadRepository implements ProductReadRepositoryInterface
{
    private function query(): Builder
    {
        return Product::query();
    }

    public function index(IndexProductDTO $dto): LengthAwarePaginator
    {
        return $this->query()
            ->paginate(
                $dto->getPerPage(),
                ['*'],
                'page',
                $dto->getPage()
            );
    }

    public function find(int $id): Collection
    {
        return collect($this->query()->findOrFail($id));
    }
}
