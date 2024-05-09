<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    // login page
    public function loginPage()
    {
        return view("auth.login");
    }

    // register page
    public function registerPage()
    {
        return view("auth.register");
    }

    // list products page
    public function productsPage()
    {
        return view("auth.product_list");
    }

    // detail product page
    public function productDetailPage()
    {
        return view("auth.product_detail");
    }

    // cart product page
    public function productCartPage()
    {
        return view("auth.product_cart");
    }

    // abate(thanh toan) page
    public function thanhToanPage()
    {
        return view("auth.thanh_toan");
    }
}
