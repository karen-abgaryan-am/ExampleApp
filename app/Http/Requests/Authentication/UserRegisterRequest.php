<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    private const NAME = 'name';
    private const PASSWORD = 'password';
    private const EMAIL = 'email';

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            self::NAME => [
                'required',
                'string',
            ],
            self::EMAIL => [
                'required',
                'string',
                'email',
                'unique:users',
            ],
            self::PASSWORD => [
                'required',
                'string',
                'confirmed'
            ]
        ];
    }

    public function getName(): string
    {
        return $this->get(self::NAME);
    }

    public function getPassword(): string
    {
        return $this->get(self::PASSWORD);
    }

    public function getEmail(): string
    {
        return $this->get(self::EMAIL);
    }
}
