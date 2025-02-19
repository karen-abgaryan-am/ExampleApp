<?php

namespace App\Models;

use App\Services\Product\DTO\CreateProductDTO;
use App\Services\Product\DTO\UpdateProductDTO;
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
 * @property ?string image
 * @property ?string technical_characteristics
 * @property string $created_at
 * @property string $updated_at
 */

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'stock', 'image', 'technical_characteristics'];

    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public static function create(CreateProductDTO $dto): self
    {
        $entity = new self();
        $entity->name = $dto->getName();
        $entity->description = $dto->getDescription();
        $entity->price = $dto->getPrice();
        $entity->stock = $dto->getStock();
        $entity->image = $dto->getImage();
        $entity->technical_characteristics = $dto->getTechnicalCharacteristics();

        return $entity;
    }
}
