<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// crud = querybuilder
Route::group([
    'prefix' => 'users',
    'as' => 'users.'
], function () {
    // list user
    Route::get('list-user', [UserController::class, 'listUsers'])->name('listUsers');
    // add user
    Route::get('add-user', [UserController::class, 'addUsers'])->name('addUsers');
    Route::post('add-user', [UserController::class, 'addPostUsers'])->name('addPostUsers');
    route::get('delete-user/{userId}', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::get('update-user/{userId}', [UserController::class, 'updateUser'])->name('updateUser');
    route::post('update-user', [UserController::class, 'updatePostUser'])->name('updatePostUser');
});

Route::group([
    'prefix' => 'products',
    'as' => 'products.'
], function () {
    route::get('list-product', [ProductController::class, 'listProduct'])->name('listProduct');
    route::get('add-product', [ProductController::class, 'addProduct'])->name('addProduct');
    route::post('add-product', [ProductController::class, 'addPostProduct'])->name('addPostProduct');
    route::get('update-product/{proId}', [ProductController::class, 'updateProduct'])->name('updateProduct');
    route::post('update-product', [ProductController::class, 'updatePostProduct'])->name('updatePostProduct');
    route::get('delete-product/{proId}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
});

route::get('test',[UserController::class,'test']);