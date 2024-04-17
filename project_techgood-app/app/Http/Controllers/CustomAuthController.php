<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    //login-link
    function login(){
        return view("auth.login");
    }
    
}
