<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Hash;

class AuthController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect('admin/dashboard');
        }
        return view('auth.login');
    }

    public function AuthLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],true)){
            return redirect('admin/dashboard');
        }
        else{
            return redirect('/')->with('error', 'Email or Password is incorrect');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
