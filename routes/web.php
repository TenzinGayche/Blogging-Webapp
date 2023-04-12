<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'post']);
Route::get('post/edit/{post:slug}', [PostController::class, 'edit'])->middleware("admin");
Route::patch('post/edit/{post:slug}', [PostController::class, 'update'])->middleware("admin");
Route::delete('post/edit/{post:slug}', [PostController::class, 'destroy'])->middleware("admin");
Route::get('categories/{category:slug}',[CategoryController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'post']);
Route::get('users/{user:name}', [UserController::class, 'index']);
Route::get('register', [RegisterController::class, 'create'])->middleware("guest");
Route::post('register', [RegisterController::class, 'store'])->middleware("guest");
Route::post('logout', [SessionController::class, 'destroy'])->middleware("auth");
Route::post('login', [SessionController::class, 'store'])->middleware("guest");
Route::post('post/{post:slug}/comment', [CommentController::class, 'store']);
Route::get('admin/posts/create', [PostController::class, 'create'])->middleware("admin");
Route::post('admin/posts/create', [PostController::class, 'store'])->middleware("admin");

