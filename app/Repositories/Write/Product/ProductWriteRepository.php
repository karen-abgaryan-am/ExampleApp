<?php

namespace App\Repositories\Write\Product;

use App\Exceptions\SavingErrorException;
use App\Models\Product;
use App\Services\Product\DTO\CreateProductDTO;
use App\Services\Product\DTO\UpdateProductDTO;
use Illuminate\Support\Collection;

class ProductWriteRepository implements ProductWriteRepositoryInterface
{
    /**
     * @throws SavingErrorException
     */
    public function create(CreateProductDTO $dto): Collection
    {
        $entity = Product::create($dto);

        if (!$entity->save())
        {
            throw new SavingErrorException();
        }

        return collect($entity);
    }

    /**
     * @throws SavingErrorException
     */
    public function update(UpdateProductDTO $dto): Collection
    {
        $entity = Product::findOrFail($dto->getId());
        $entity->update($dto->toArray());

        if (!$entity->save())
        {
            throw new SavingErrorException();
        }

        return collect($entity);
    }

    public function delete(int $id): bool
    {
        $entity = Product::find($id);

        if (!$entity)
        {
            return false;
        }

        $entity->delete();

        return true;
    }
}
