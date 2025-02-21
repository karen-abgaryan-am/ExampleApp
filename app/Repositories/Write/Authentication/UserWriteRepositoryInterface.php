<?php

namespace App\Repositories\Write\Authentication;

use App\Services\Authentication\DTO\UserRegisterDTO;

interface UserWriteRepositoryInterface
{
    public function create(UserRegisterDTO $dto);
}
