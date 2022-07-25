<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy(){
        
       
        auth()->logout();
        return redirect('/')->with ('success','User has succesfully loged out!');

    }
    public function create(){


    }
    public function store(){
       $user= request()->validate([
            'email'=>'required',
            'password'=>'required'
       ]);
       
       if(auth()->attempt($user)){
        session()->regenerate();
        return redirect('/')->with ('success','        Welcome Back!           ');

       
       
       

        //throw $th;
       
       }
       else{
        return back()->withErrors(['password'=>'Your provided credintials could not be veriified']);
       }

       
    
}}
