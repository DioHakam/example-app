<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
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
    return view('home',['page'=>'home']);
});

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{category:slug}', [CategoryController::class, 'show']);
