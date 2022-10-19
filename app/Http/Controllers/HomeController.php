<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public function login(){
        if(Session::get('token')){
            return redirect('/');
        };
        return view('Api_Auth.login');
    }
    public function register(){
        if(Session::get('token')){
            return redirect('/');
        };
        return view('Api_Auth.register');
    }

    public function logout(){
        Session::forget('token');
        Session::forget('username');

        return redirect('/');
    }
}
