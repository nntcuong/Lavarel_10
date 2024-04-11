<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(){
        return view('login');
    }

    public function handleLogin(LoginRequest $request){

    //     $request->validate(,[
    //         'name.required'=>'The user name field is required',
    //         'name.alpha'=>'The user name field is',
    //         'email.email'=>'The user email field is required',
    //     ]
    // );
        return $request;
    }
}
