<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class RegisterController extends Controller

{
    public function create(){
        return view('register');

    }
    public function store(){
        
       $attribute= request()->validate([
            'name'=>'required',
            'username'=>'required|max:20',
            'email'=>'required',
            'password'=>'required|min:7',

        ]);
     
        User::create($attribute);
       
        
        return redirect('/')->with ('success','Your account has been created');
    }
    
    //
}
