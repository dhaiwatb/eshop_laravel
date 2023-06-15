<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;

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


Route::get('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout']);

Route::post('auth_login', [AuthController::class, 'authLogin']);
Route::post('store', [AuthController::class, 'store']);

Route::group(['prefix' => 'products'], function(){
// Route::group(['prefix' => 'products', 'middleware' => 'auth:web'], function(){

    Route::get('list', [ProductsController::class, 'listProducts']);
    Route::get('add', [ProductsController::class, 'addProduct']);

});