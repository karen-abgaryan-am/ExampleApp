<?php
namespace App\Repositories\Write\Category;

use App\Exceptions\SavingErrorException;
use App\Models\Category;
use App\Services\Category\DTO\CategoryDTO;
use Illuminate\Support\Collection;

class CategoryWriteRepository implements CategoryWriteRepositoryInterface
{
    /**
     * @throws SavingErrorException
     */
    public function create(CategoryDTO $dto): Collection
    {
        $entity = Category::create($dto);

        if (!$entity->save())
        {
            throw new SavingErrorException();
        }

        return collect($entity);
    }
}
