<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('Auth.login');
    }

    public function login(Request $request){

        $Credentional = [
            'email' => $request -> email,
            'password' => $request -> password,
        ];

        if(Auth::attempt($Credentional)){
            return "Login Succeffuly";
        }

        return "Login Failed";

    }
}
