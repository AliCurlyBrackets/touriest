<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('Auth.register');
    }

    public function register(Request $request){

        $User = User::create([
            'first_name' => $request -> first_name,
            'last_name' => $request -> last_name,
            'email' => $request -> email,
            'password' => $request -> password,
            'phone' => $request -> phone,
            'nationality' => $request -> nationality,
        ]);

        return redirect()->route('register.index')->with('success_register' , 'Register Succeffuly');
    }


}
