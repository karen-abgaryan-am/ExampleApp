<?php

namespace App\Services\Authentication\Actions;


use App\Repositories\Write\Authentication\UserWriteRepositoryInterface;
use App\Services\Authentication\DTO\UserRegisterDTO;
use Illuminate\Support\Collection;

class UserRegisterAction
{
    public function __construct(private readonly UserWriteRepositoryInterface $userWriteRepository)
    {
    }

    public function run(UserRegisterDTO $dto): Collection
    {
        return $this->userWriteRepository->create($dto);
    }

}
