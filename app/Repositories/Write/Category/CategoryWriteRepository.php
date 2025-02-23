<?php
namespace App\Repositories\Write\Category;

use App\Exceptions\Category\CreateCategoryErrorException;
use App\Exceptions\Category\DeleteCategoryErrorException;
use App\Exceptions\Category\NotFoundCategoryErrorException;
use App\Exceptions\Category\UpdateCategoryErrorException;
use App\Models\Category;
use App\Services\Category\DTO\CreateCategoryDTO;
use App\Services\Category\DTO\UpdateCategoryDTO;
use Illuminate\Support\Collection;

class CategoryWriteRepository implements CategoryWriteRepositoryInterface
{
    /**
     * @throws CreateCategoryErrorException
     */
    public function create(CreateCategoryDTO $dto): Collection
    {
        $entity = Category::create($dto);

        if (!$entity->save())
        {
            throw new CreateCategoryErrorException();
        }

        return collect($entity);
    }

    /**
     * @throws UpdateCategoryErrorException
     */
    public function update(UpdateCategoryDTO $dto): Collection
    {
        $entity = Category::findOrFail($dto->getId());
        $entity->update($dto->toArray());

        if (!$entity->save())
        {
            throw new UpdateCategoryErrorException();
        }

        return collect($entity);
    }

    /**
     * @throws NotFoundCategoryErrorException
     * @throws DeleteCategoryErrorException
     */
    public function delete(int $id): bool
    {
        $entity = Category::find($id);

        if (!$entity)
        {
            throw new NotFoundCategoryErrorException();
        }

        if (!$entity->delete())
        {
            throw new DeleteCategoryErrorException();
        }

        return true;
    }
}
