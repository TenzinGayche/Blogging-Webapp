<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'post']);

Route::get('post/edit/{post:slug}', [PostController::class, 'poste']);
Route::get('categories/{category:slug}',[CategoryController::class, 'index']);

Route::get('users/{user:name}', function (User $user) {
    if (request('search')) {
        $posts
           ->where('user_id', $user->id)
            ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%')
            ->where('user_id', $user->id);
            return view('posts', [ 
                'posts' => $posts->get(),
                'categories' =>Category::all()
            ]);
    }
    return view('posts', [
        'posts' => Post::where('user_id', $user->id)
            ->with('category', 'user')
            ->paginate(),
        'categories' =>Category::all()   
    ]);
});

Route::get('register', [RegisterController::class, 'create'])->middleware("guest");
Route::post('register', [RegisterController::class, 'store'])->middleware("guest");
Route::post('logout', [SessionController::class, 'destroy'])->middleware("auth");
Route::post('login', [SessionController::class, 'store'])->middleware("guest");
