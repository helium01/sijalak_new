<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\user;

class logincontrol extends Controller
{
    public function index(){
        return view('konten.login');
    } 
      
    public function indexpost(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
        return redirect('/');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('login');
    }
}
