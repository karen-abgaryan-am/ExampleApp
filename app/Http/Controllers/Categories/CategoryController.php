<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\IndexCategoryRequest;
use App\Http\Requests\Category\ShowCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Services\Category\Actions\CreateCategoryAction;
use App\Services\Category\Actions\DeleteCategoryAction;
use App\Services\Category\Actions\IndexCategoriesAction;
use App\Services\Category\Actions\GetCategoryByIdAction;
use App\Services\Category\Actions\UpdateCategoryAction;
use App\Services\Category\DTO\CreateCategoryDTO;
use App\Services\Category\DTO\IndexCategoryDTO;
use App\Services\Category\DTO\UpdateCategoryDTO;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CategoryController extends Controller
{
    public function index(IndexCategoryRequest $request, IndexCategoriesAction $action): AnonymousResourceCollection
    {
        $dto = new IndexCategoryDTO($request);
        $paginator = $action->run($dto);

        return CategoryResource::collection($paginator);
    }

    public function show(ShowCategoryRequest $request, GetCategoryByIdAction $action): CategoryResource
    {
        $category = $action->run($request->getId());

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

        return response()->json($success);
    }
}
