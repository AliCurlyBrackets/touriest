<?php

namespace App\Http\Controllers\Admin_Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
       if(!Auth::check()){
           return redirect()->route('login.index');
       }
        return view('Admin_Dashboard.index');
    }



    public function Logout(){
        Auth::logout();
        return redirect()->route('login.index');
    }
}
