<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Http\Resources\Category\CategoryCollection;
use App\Http\Resources\Category\CategoryResource;
use App\Services\Category\Actions\CreateCategoryAction;
use App\Services\Category\Actions\DeleteCategoryAction;
use App\Services\Category\Actions\GetAllCategoriesAction;
use App\Services\Category\Actions\GetCategoryByIdAction;
use App\Services\Category\Actions\UpdateCategoryAction;
use App\Services\Category\DTO\CreateCategoryDTO;
use App\Services\Category\DTO\UpdateCategoryDTO;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    public function index(GetAllCategoriesAction $action): CategoryCollection
    {
        $categories = $action->run();

        return new CategoryCollection($categories);
    }

    public function show(int $id, GetCategoryByIdAction $action): CategoryResource
    {
        $category = $action->run($id);

        return new CategoryResource($category);
    }

    public function store(CreateCategoryRequest $request, CreateCategoryAction $action): CategoryResource
    {
        $dto = new CreateCategoryDTO($request);
        $category = $action->run($dto);

        return new CategoryResource($category);
    }

    public function update(UpdateCategoryRequest $request, UpdateCategoryAction $action): CategoryResource
    {
        $dto = new UpdateCategoryDTO($request);
        $category = $action->run($dto);

        return new CategoryResource($category);
    }

    public function destroy(int $id, DeleteCategoryAction $action): JsonResponse
    {
        $success = $action->run($id);
        $statusCode = $success ? 200 : 500;

        return response()->json([
            'success' => $success,
            'message' => $success ? 'Category was deleted.' : 'Category was not deleted. Please try again.'
        ], $statusCode);
    }
}
