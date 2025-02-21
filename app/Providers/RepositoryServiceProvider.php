<?php

namespace App\Providers;

use App\Repositories\Write\Authentication\UserWriteRepository;
use App\Repositories\Write\Authentication\UserWriteRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UserWriteRepositoryInterface::class, UserWriteRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
