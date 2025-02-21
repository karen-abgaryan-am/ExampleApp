<?php

namespace App\Repositories\Write\Authentication;

use App\Models\User;
use App\Services\Authentication\DTO\UserRegisterDTO;
use Illuminate\Support\Collection;

class UserWriteRepository implements UserWriteRepositoryInterface
{
    /**
     * @throws \Exception
     */
    public function create(UserRegisterDTO $dto): Collection
    {
        $entity = User::create($dto);
        if (!$entity->save())
        {
            // TODO: change to custom exception
            throw new \Exception("Failed to create user");
        }

        return collect($entity);
    }
}
