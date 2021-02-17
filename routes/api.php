<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('post', PostController::class)->only([
    'index', 'show'
]);

Route::get('post/{category}/category', [PostController::class, 'category']);
Route::get('post/{url_clean}/url_clean', [PostController::class, 'url_clean']);

Route::get('category/all', [CategoryController::class, 'all']);
Route::get('category', [CategoryController::class, 'index']);