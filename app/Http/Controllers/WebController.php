<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function register()
    {
         return view("register");
    }
    public function login(){
        return view("login");
    }
    public function retrieve(){
        return view("retrieve");
    }
}
