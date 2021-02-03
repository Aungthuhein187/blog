<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Product\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/", [ArticleController::class, 'index']);
Route::get("/articles", [ArticleController::class, 'index']);
Route::get("/articles/{id}", [ArticleController::class, 'details']);

Route::get("/products", [ProductController::class, 'index']);
