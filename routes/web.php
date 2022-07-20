<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\PostController;

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

Route::get('post/edit/{post:slug}', [PostController::class, 'poste']);
Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => Post::where('category_id', $category->id)
            ->with('category', 'user')
            ->paginate(),
    ]);
});
Route::get('users/{user:name}', function (User $user) {
    return view('posts', [
        'posts' => Post::where('user_id', $user->id)
            ->with('category', 'user')
            ->paginate(),
    ]);
});

Route::get('/register', function () {
    return view('register');
});
