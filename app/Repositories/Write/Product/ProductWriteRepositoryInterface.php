<?php

namespace App\Repositories\Write\Product;

use App\Services\Product\DTO\CreateProductDTO;
use App\Services\Product\DTO\UpdateProductDTO;
use Illuminate\Support\Collection;

interface ProductWriteRepositoryInterface
{
    public function create(CreateProductDTO $dto): Collection;
    public function update(UpdateProductDTO $dto): Collection;
    public function delete(int $id): bool;
}
