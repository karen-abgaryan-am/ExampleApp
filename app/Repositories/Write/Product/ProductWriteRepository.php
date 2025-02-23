<?php

namespace App\Repositories\Write\Product;

use App\Exceptions\Product\CreateProductErrorException;
use App\Exceptions\Product\DeleteProductErrorException;
use App\Exceptions\Product\NotFoundProductErrorException;
use App\Exceptions\Product\UpdateProductErrorException;
use App\Models\Product;
use App\Services\Product\DTO\CreateProductDTO;
use App\Services\Product\DTO\UpdateProductDTO;
use Illuminate\Support\Collection;

class ProductWriteRepository implements ProductWriteRepositoryInterface
{
    /**
     * @throws CreateProductErrorException
     */
    public function create(CreateProductDTO $dto): Collection
    {
        $entity = Product::create($dto);

        if (!$entity->save())
        {
            throw new CreateProductErrorException();
        }

        return collect($entity);
    }

    /**
     * @throws UpdateProductErrorException
     */
    public function update(UpdateProductDTO $dto): Collection
    {
        $entity = Product::findOrFail($dto->getId());
        $entity->update($dto->toArray());

        if (!$entity->save())
        {
            throw new UpdateProductErrorException();
        }

        return collect($entity);
    }

    /**
     * @throws NotFoundProductErrorException
     * @throws DeleteProductErrorException
     */
    public function delete(int $id): bool
    {
        $entity = Product::find($id);

        if (!$entity)
        {
            throw new NotFoundProductErrorException();
        }

        if (!$entity->delete())
        {
            throw new DeleteProductErrorException();
        }

        return true;
    }
}
