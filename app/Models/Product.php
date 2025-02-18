<?php

namespace App\Models;

use App\Services\Product\DTO\ProductDTO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float price
 * @property int stock
 * @property string $created_at
 * @property string $updated_at
 */

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description", "price", "stock"];

    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public static function create(ProductDTO $dto): self
    {
        $entity = new self();
        $entity->name = $dto->getName();
        $entity->description = $dto->getDescription();
        $entity->price = $dto->getPrice();
        $entity->stock = $dto->getStock();

        return $entity;
    }
}
