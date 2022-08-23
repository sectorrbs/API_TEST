<?php

    use App\Http\Controllers\Api\v1\CategoryController;
    use App\Http\Controllers\Api\v1\ProductController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */

    Route::get('/categories', [CategoryController::class, 'getCategories']);
    Route::get('/products', [ProductController::class, 'getProducts']);

    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::post('/categories/create', [CategoryController::class, 'createCategory']);
        Route::post('/categories/{category}/update', [CategoryController::class, 'updateCategory']);
        Route::delete('/categories/{category}/delete', [CategoryController::class, 'deleteCategory']);
        Route::get('/categories/{category}/products', [CategoryController::class, 'getCategoryProducts']);
        Route::post('/products/create', [ProductController::class, 'createProduct']);
        Route::post('/products/{product}/update', [ProductController::class, 'updateProduct']);
        Route::delete('/products/{product}/delete', [ProductController::class, 'deleteProduct']);
        Route::post('/products/{product}/add_category', [ProductController::class, 'addProductCategory']);
        Route::post('/products/{product}/delete_category', [ProductController::class, 'deleteProductCategory']);
    });
