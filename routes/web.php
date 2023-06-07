<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pwl',function(){
    return "hello student";
});

Route::redirect('/unaya','/pwl');

Route::fallback(function(){
    return "Users : 404";
});

Route::view('/user','hello', ['name' => 'yudra']);

Route::get('/user-again',function (){
    return view('hello',['name' => 'yudra']);
});

// mengambil file hello.blade yang ada di dalam folder admin
Route::view('/admin','admin.hello', ['name' => 'admin']);

Route::get('/admin-again', function (){
    return view('admin.hello', ['name' => 'admin']);
});

// memasukkan produk dan id di dalam url
Route::get('/products/{id}', function ($productsId){
    return "Products : " . $productsId;
});

Route::get('/products/{products}/items/{item}', function ($productsId,$itemsId){
    return "Products : " . $productsId . ", Items : " . $itemsId;
});

// paremeter optional di url
Route::get('/users/{id}', function (string $userId = '404'){
    return "Users : " . $userId;
});

// mengakses file di controller
Route::get('/controller/hello', [\App\Http\Controllers\HelloController::class, 'hello']);
