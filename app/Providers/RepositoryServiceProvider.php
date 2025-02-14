<?php

namespace App\Providers;

use App\Repositories\Write\Product\ProductWriteRepository;
use App\Repositories\Write\Product\ProductWriteRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ProductWriteRepositoryInterface::class, ProductWriteRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
