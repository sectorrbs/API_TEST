<?php

    namespace App\Http\Controllers\Api\v1;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\CategoryRequest;
    use App\Http\Resources\CategoryResource;
    use App\Http\Resources\ProductResource;
    use App\Models\Category;
    use Illuminate\Http\Response;

    class CategoryController extends Controller
    {
        public function getCategories()
        {
            return CategoryResource::collection(Category::all());
        }

        public function getCategoryProducts(Category $category)
        {
            return ProductResource::collection($category->products);
        }

        public function createCategory(CategoryRequest $request)
        {
            Category::create($request->validated());
            return response(null, Response::HTTP_NO_CONTENT);
        }

        public function updateCategory(Category $category, CategoryRequest $request)
        {
            $category->update($request->validated());
            return response(null, Response::HTTP_NO_CONTENT);
        }

        public function deleteCategory(Category $category)
        {
            $category->delete();
            return response(null, Response::HTTP_NO_CONTENT);
        }

    }
