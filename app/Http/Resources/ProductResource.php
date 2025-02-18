<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->resource['id'] ?? null,
            'name'        => $this->resource['name'] ?? null,
            'price'       => $this->resource['price'] ?? null,
            'stock'       => $this->resource['stock'] ?? null,
            'description' => $this->resource['description'] ?? null,
            'created_at'  => $this->resource['created_at'] ?? null,
            'updated_at'  => $this->resource['updated_at'] ?? null,
        ];
    }
}
