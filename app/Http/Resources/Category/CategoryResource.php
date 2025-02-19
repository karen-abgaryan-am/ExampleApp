<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'         => $this->resource['id'] ?? null,
            'name'       => $this->resource['name'] ?? null,
            'slug'       => $this->resource['slug'] ?? null,
            'parent_id'  => $this->resource['parent_id'] ?? null,
            'created_at' => $this->resource['created_at'] ?? null,
            'updated_at' => $this->resource['updated_at'] ?? null,
        ];
    }
}
