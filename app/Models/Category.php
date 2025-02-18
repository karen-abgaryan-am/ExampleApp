<?php

namespace App\Models;

use App\Services\Category\DTO\CategoryDTO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public static function create(CategoryDTO $dto): self
    {
        $entity = new self();
        $entity->name = $dto->getName();
        $entity->slug = $dto->getSlug();

        return $entity;
    }
}
