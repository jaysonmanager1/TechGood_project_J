<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    // login page
    public function loginPage(){
        return view("auth.login");
    }
    
    // register page 
    public function registerPage() {
        return view("auth.register");
    }
}
