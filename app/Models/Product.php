<?php

namespace App\Models;

use App\Services\DTO\Product\ProductDTO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public static function create(ProductDTO $dto): self
    {
        $entity = new self();
        $entity->name = $dto->name;
        $entity->description = $dto->description;
        $entity->price = $dto->price;
        $entity->stock = $dto->stock;

        return $entity;
    }
}
