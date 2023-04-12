<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->with('category', 'user');
        try {
            if (request('search')) {
                $posts
                    ->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('body', 'like', '%' . request('search') . '%');
            }
        } catch (\Throwable $th) {
            return view('posts', [
                'posts' => 'not wo',
            ]);
            //throw $th;
        }

        return view('posts', [
            'posts' => $posts->paginate(6),
            'categories' => Category::all(),
        ]);
    }
    public function edit(Post $post)
    {
       
        return view('poste', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }
    public function post(Post $post)
    {
        return view('post', [
            'post' => $post->load(['category','user']),
        ]);
    }
    public function update(Post $post)
    {
       
        $attribute= request()->validate([
            'title'=>'required',
            'slug'=>['required',Rule::unique('posts','slug')->ignore($post)],
            'thumbnail'=>'required|image',
            'excerpt'=>'required',
            'category_id'=>['required',Rule::exists('categories','id')],
            'body'=>'required|min:10',

        ]);
       if(isset($attribute['thumbnail'])){
        $attribute['thumbnail']=request()->file('thumbnail')->store('thumbnail');}
        $post->update($attribute);
        $post->save();
        return redirect("/")->with('success','Post updated');
    }
    public function create(){
        return view('admin' , [
            'categories' => Category::all(),
        ]);
    }
    public function store(){
        

        $attribute= request()->validate([
            'title'=>'required',
            'slug'=>['required',Rule::unique('posts','slug')],
            'thumbnail'=>'image',
            'excerpt'=>'required',
            'category_id'=>['required',Rule::exists('categories','id')],
            'body'=>'required|min:10',

        ]);
        $attribute['user_id']=auth()->id();
        $attribute['thumbnail']=request()->file('thumbnail')->store('thumbnail');
        Post::create($attribute);
        return redirect("/")->with('success','New post created');
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect('/')->with('success','Post deleted');
        

    }
}
