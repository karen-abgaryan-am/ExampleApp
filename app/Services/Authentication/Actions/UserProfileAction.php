<?php

namespace App\Services\Authentication\Actions;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class UserProfileAction
{
    public function run(): Collection
    {
        return collect(Auth::user());
    }
}
