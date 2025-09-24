<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\IndexCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(IndexCategoryRequest $request)
    {
        return CategoryResource::collection(
            Category::query()
                ->orderBy('created_at', $request->get('sort', 'desc'))
                ->paginate($request->get('per_page', 10))
        );
    }
    public function show(Category $category)
    {
        return CategoryResource::make($category);
    }
}
