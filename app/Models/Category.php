<?php

namespace App\Models;

use App\Services\Category\DTO\CreateCategoryDTO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int parent_id
 * @property string $created_at
 * @property string $updated_at
 */

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name", "slug", "parent_id"];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public static function create(CreateCategoryDTO $dto): self
    {
        $entity = new self();
        $entity->name = $dto->getName();
        $entity->slug = $dto->getSlug();
        $entity->parent_id = $dto->getParentId();

        return $entity;
    }
}
