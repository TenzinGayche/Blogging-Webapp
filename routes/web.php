<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

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
    $posts = Post::latest()
        ->with('category', 'user');
        try {
           if(request('search')){
            $posts->where('title','like','%'.request('search').'%')
            ->orWhere('body','like','%'.request('search').'%');
        }
        } catch (\Throwable $th) {
            //throw $th;
        }
       
       

    return view('posts', [
        'posts' => $posts->paginate(6),
        'categories'=>Category::all()
       
    ]);
});
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post->load(['category','user']),
    ]);
});
Route::get('post/edit/{post:slug}', function (Post $post) {
    return view('poste', [
        'post' => $post->load(['category','user']),
    ]);
});
Route::get('categories/{category:slug}', function (Category $category) {

    return view('posts', [
        'posts' => Post::where('category_id', $category->id)->with('category', 'user')->paginate(1),
    ]);
});
Route::get('users/{user:name}', function (User $user) {
    return view('posts', [
        'posts' => $user->posts->load(['category','user']),
    ]);
});