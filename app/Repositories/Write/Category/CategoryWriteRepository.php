<?php
namespace App\Repositories\Write\Category;

use App\Exceptions\SavingErrorException;
use App\Models\Category;
use App\Services\Category\DTO\CreateCategoryDTO;
use App\Services\Category\DTO\UpdateCategoryDTO;
use Illuminate\Support\Collection;

class CategoryWriteRepository implements CategoryWriteRepositoryInterface
{
    /**
     * @throws SavingErrorException
     */
    public function create(CreateCategoryDTO $dto): Collection
    {
        $entity = Category::create($dto);

        if (!$entity->save())
        {
            throw new SavingErrorException();
        }

        return collect($entity);
    }

    /**
     * @throws SavingErrorException
     */
    public function update(UpdateCategoryDTO $dto): Collection
    {
        $entity = Category::findOrFail($dto->getId());
        $entity->update($dto->toArray());

        if (!$entity->save())
        {
            throw new SavingErrorException();
        }

        return collect($entity);
    }

    public function delete(int $id): bool
    {
        $entity = Category::find($id);

        if (!$entity)
        {
            return false;
        }

        $entity->delete();

        return true;
    }
}
