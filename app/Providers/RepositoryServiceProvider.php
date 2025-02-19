<?php

namespace App\Providers;

use App\Repositories\Read\Category\CategoryReadRepository;
use App\Repositories\Read\Category\CategoryReadRepositoryInterface;
use App\Repositories\Read\Product\ProductReadRepositoryInterface;
use App\Repositories\Read\Product\ProductReadRepository;
use App\Repositories\Write\Category\CategoryWriteRepository;
use App\Repositories\Write\Category\CategoryWriteRepositoryInterface;
use App\Repositories\Write\Product\ProductWriteRepository;
use App\Repositories\Write\Product\ProductWriteRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ProductWriteRepositoryInterface::class, ProductWriteRepository::class);
        $this->app->bind(ProductReadRepositoryInterface::class, ProductReadRepository::class);
        $this->app->bind(CategoryWriteRepositoryInterface::class, CategoryWriteRepository::class);
        $this->app->bind(CategoryReadRepositoryInterface::class, CategoryReadRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
