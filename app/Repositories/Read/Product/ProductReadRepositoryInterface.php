<?php
namespace App\Repositories\Read\Product;

use Illuminate\Support\Collection;

interface ProductReadRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): Collection;
}
