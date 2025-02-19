<?php
namespace App\Repositories\Read\Category;

use Illuminate\Support\Collection;

interface CategoryReadRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): Collection;
}
