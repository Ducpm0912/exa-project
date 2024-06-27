<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ThongTinSinhVienController;

// Route::get('/', function () {
//     return view('welcome');
// });
// method http : GET,POST,PUT,PACHT,DELETE
// base url : http://127.0.0.1:8000/
Route::get('/test', function () {
    echo "hello";
});
Route::get('/', function () {
    echo 'trang chu';
});
// list-product
Route::get('list-product', [ProductController::class, 'showProduct']);

// slug
//http://127.0.0.1:8000/list-product/1
Route::get('get-product/{id}', [ProductController::class, 'getProduct']);

// params
//http://127.0.0.1:8000/list-product/?id=1

Route::get('update-product', [ProductController::class, 'updateProduct']);
Route::get('thong-tin-sv',[ThongTinSinhVienController::class,'thongTinSV']);
