<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\MessageController;


Route::get('/user', function (Request $request) {
    return $request->user();
});

route::apiResource('/categories', CategoryController::class);
route::apiResource('/products', ProductController::class);

Route::get('/v1/products/queries', [ProductController::class, 'queries']);

Route::apiResource('/post', MessageController::class);
