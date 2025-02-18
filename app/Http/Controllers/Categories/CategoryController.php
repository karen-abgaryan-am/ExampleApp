<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Services\Category\Actions\CategoryStoreAction;
use App\Services\Category\DTO\CategoryDTO;

class CategoryController extends Controller
{
    public function store(CategoryRequest $request, CategoryStoreAction $action): CategoryResource
    {
        $dto = new CategoryDto($request);
        $category = $action->run($dto);

        return new CategoryResource($category);
    }
}
