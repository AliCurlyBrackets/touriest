<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        if(!Auth::check()){
            return view('Auth.login');
        }
        return redirect()->route('dashboard.index');
    }

    public function login(Request $request){

        $Credentional = [
            'email' => $request -> email,
            'password' => $request -> password,
        ];

        if(Auth::attempt($Credentional)){
            return redirect()->route('dashboard.index');
        }

        return redirect()->route('login.index')->with('error_login' , 'Login Failed');

    }
}
