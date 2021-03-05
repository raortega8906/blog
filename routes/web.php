<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/detail/{id}', [WebController::class, 'detail']);
Route::get('/post-category', [WebController::class, 'post_category']);
Route::get('/contact', [WebController::class, 'contact']);
Route::get('/categories', [WebController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::group(['prefix' => 'dashboard'], function () {
    Route::resource('post', PostController::class);
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::resource('category', CategoryController::class);
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::resource('user', UserController::class);
});
