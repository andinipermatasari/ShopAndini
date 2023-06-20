<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\member;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }
    function login_admin(){
        return view('login_admin');
    }
    function auth(Request $request){
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        if (Auth::guard('members')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('beranda');
        }
        if (Auth::guard('web')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('dashboard');
        }
        return redirect('/');
        // if (Auth::guard('member')->attempt($credentials)){
        //     $req->session()->regenerate();
        //     return redirect('beranda');
        // }
        // if (Auth::guard('web')->attempt($credentials)){
        //     $req->session()->regenerate();
        //     return redirect('dashboard');
        // }
        // return redirect('/');
    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }
    function logout_admin(){
        Auth::logout();
        return redirect('login/admin');
    }
}
