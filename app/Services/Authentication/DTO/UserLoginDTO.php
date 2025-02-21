<?php

namespace App\Services\Authentication\DTO;

use App\Http\Requests\Authentication\UserLoginRequest;

class UserLoginDTO
{
    private readonly string $email;
    private readonly string $password;
    private string $token;

    public function __construct(UserLoginRequest $request)
    {
        $this->email = $request->getEmail();
        $this->password = $request->getPassword();
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): void
    {
        $this->token = $token;
    }
}
