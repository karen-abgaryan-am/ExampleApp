<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Services\Actions\Category\CategoryStoreAction;
use App\Services\DTO\Category\CategoryDTO;

class CategoryController extends Controller
{
    public function store(CategoryRequest $request, CategoryStoreAction $action): CategoryResource
    {
        $dto = new CategoryDto($request);

        return $action->run($dto);
    }
}
