<?php

namespace App\Services\Authentication\Actions;

use App\Services\Authentication\DTO\UserLoginDTO;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class UserLoginAction
{
    public function run(UserLoginDTO $dto): Collection
    {
        $email = $dto->getEmail();
        $password = $dto->getPassword();

        if (Auth::attempt([
            'email' => $email,
            'password' => $password
        ]))
        {
            $user = Auth::user();

            $token = $user->createToken('Laravel Password Grant Client')->accessToken;

            return collect([
                'status' => 200,
                'email' => $email,
                'token' => $token,
            ]);
        }
        else
        {
            return collect([
                'status' => 422,
                'message' => 'Invalid email or password',
            ]);
        }
    }
}
