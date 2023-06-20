<?php

namespace App\Http\Controllers;
use App\Models\member;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    function register(){
        return view('register');
    }
    function create(Request $request){
        $validate = $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|string|min:8',
            'password' => 'required_with:confirm_password|min:8|same:confirm_password',
        ]);
        $validate['password']=bcrypt($request->password);
        member::create($validate);
        return redirect ('/');
    }
}
