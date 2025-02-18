<?php

namespace App\Repositories\Write\Product;

use App\Exceptions\SavingErrorException;
use App\Models\Product;
use App\Services\Product\DTO\ProductDTO;
use Illuminate\Support\Collection;

class ProductWriteRepository implements ProductWriteRepositoryInterface
{
    /**
     * @throws SavingErrorException
     */
    public function create(ProductDTO $dto): Collection
    {
        $entity = Product::create($dto);

        if (!$entity->save())
        {
            throw new SavingErrorException();
        }

        return collect($entity);
    }
}
