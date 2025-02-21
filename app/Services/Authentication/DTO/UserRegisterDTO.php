<?php

namespace App\Services\Authentication\DTO;

use App\Http\Requests\Authentication\UserRegisterRequest;

class UserRegisterDTO
{
    private readonly string $name;
    private readonly string $email;
    private readonly string $password;

    public function __construct(UserRegisterRequest $request)
    {
        $this->name = $request->getName();
        $this->email = $request->getEmail();
        $this->password = $request->getPassword();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
