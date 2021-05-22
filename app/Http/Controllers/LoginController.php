<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(){
        return view ('login');
    }

    public function checkLogin(Request $request){
        $credentials = $request->only('email', 'password');
        //dd($credentials);

        if (Auth::attempt($credentials)) {
            //return redirect()->intended('index');
            return Redirect::to('index');
        }
        else{
            return Redirect::to('dangnhap');
        }
    }

    public function index(){
        return view ('index');
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('dangnhap');
    }

    public function doimatkhau(){
        return view ('doimatkhau');

    }

    public function checkDoiMatKhau(Request $request){
        Auth::user()->password =bcrypt($request->passwordnew);
        Auth::user()->save();
        return Redirect::to('/userIndex');
    }
}
