<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(){
        $attributes= request()->validate([
            'name' => ['required','string'],
            'email'=> ['required','email'],
            'password'=> ['required'],
        ]);
        $user = User::create($attributes);
        //login
        Auth::login($user);
    return redirect('/movies');
    }


}
