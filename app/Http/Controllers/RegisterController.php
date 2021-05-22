<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Illuminate\Http\Request;
use Auth;

class RegisterController extends Controller
{
    public function register(){
        return view ('register');
    }

    public function checkRegister(Request $request){
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        return view ('login');
    }
}