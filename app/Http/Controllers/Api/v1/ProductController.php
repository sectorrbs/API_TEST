<?php

    namespace App\Http\Controllers\Api\v1;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\ProductCategoriesRequest;
    use App\Http\Requests\ProductRequest;
    use App\Http\Resources\ProductResource;
    use App\Models\Category;
    use App\Models\Product;
    use Illuminate\Http\Response;

    class ProductController extends Controller
    {
        public function getProducts()
        {
            return ProductResource::collection(Product::all());
        }

        public function createProduct(ProductRequest $request)
        {
            Product::create($request->validated());
            return response(null, Response::HTTP_NO_CONTENT);
        }

        public function addProductCategory(Product $product, ProductCategoriesRequest $request)
        {
            $data = $request->validated();
            $categories = Category::findOrFail($data['category_id']);
            $product->categories()->sync($categories);
            return response(null, Response::HTTP_NO_CONTENT);
        }

        public function deleteProductCategory(Product $product, ProductCategoriesRequest $request)
        {
            $data = $request->validated();
            $categories = Category::findOrFail($data['category_id']);
            $product->categories()->detach($categories);
            return response(null, Response::HTTP_NO_CONTENT);
        }

        public function deleteProduct(Product $product)
        {
            $product->delete();
            return response(null, Response::HTTP_NO_CONTENT);
        }
    }
