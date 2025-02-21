<?php

namespace App\Services\Authentication\Actions;

use Illuminate\Support\Collection;

class UserLogoutAction
{
    public function run(): Collection
    {
        auth()->user()->token()->revoke();

        return collect([
            'status' => 204,
            'message' => 'Logged out successfully'
        ]);
    }
}
