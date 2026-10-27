<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HumanResourceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MessageController;

Route::apiResource('/messages', MessageController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/payroll', [HumanResourceController::class, 'payroll']);

Route::post('/EmployeePayroll', [HumanResourceController::class, 'EmployeePayroll']);

route::apiResource('/products', ProductController::class);

//php artisan make: miigration 9-15-2026_create_tblname  --model=mpdelname
// schema::table() add, modify, delete, rename
//shema::create() just to ccreate table
// droptable - to drop column to bring back add it to down
/*

*/