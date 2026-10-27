<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllerProject; 
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

//            URI                controller                 name ng method
Route::get('/variable-scope', [UserControllerProject::class, 'index']);
Route::get('/greet/{name}', [UserControllerProject::class, 'greet']);
Route::get('/read', [UserControllerProject::class, 'read']);
// Route::get('/index/categories', [CategoryController::class, 'index']);
/*

http method

get - pag may kukunin na data
post - pag maglalagay ng data
delete
put
patch

user-laravel get the requesst
server - give the response 

08/20/26
-mf = migrate fuctory
model- without model you cant make database
to create table - use migration
to create databse - use 
*/

