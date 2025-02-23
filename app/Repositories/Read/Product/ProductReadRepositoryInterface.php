<?php
namespace App\Repositories\Read\Product;

use App\Services\Product\DTO\IndexProductDTO;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface ProductReadRepositoryInterface
{
    public function index(IndexProductDTO $dto): LengthAwarePaginator;
    public function find(int $id): Collection;
}
