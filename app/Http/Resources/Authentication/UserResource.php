<?php

namespace App\Http\Resources\Authentication;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'        => $this->resource['id'] ?? null,
            'name'      => $this->resource['name'] ?? null,
            'email'     => $this->resource['email'] ?? null,
        ];
    }
}
