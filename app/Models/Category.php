<?php

namespace App\Models;

use App\Services\DTO\Category\CategoryDTO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $created_at
 * @property string $updated_at
 */

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name", "slug"];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public static function create(CategoryDTO $dto): self
    {
        $entity = new self();
        $entity->name = $dto->name;
        $entity->slug = $dto->slug;

        return $entity;
    }
}
