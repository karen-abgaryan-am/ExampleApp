<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    private const EMAIL = 'email';
    private const PASSWORD = 'password';

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            self::EMAIL => [
                'required',
                'email',
            ],
            self::PASSWORD => [
                'required',
                'string',
            ]
        ];
    }

    public function getEmail(): string
    {
        return $this->input(self::EMAIL);
    }

    public function getPassword(): string
    {
        return $this->input(self::PASSWORD);
    }
}
