<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        return view("users/home_screen");
    }
    public function cart()
    {
        return view("users/cart_screen");
    }
    public function account()
    {
        return view("users/account_screen");
    }
    public function product()
    {
        return view("users/product_screen");
    }
    public function signup()
    {
        return view("users/signup_screen");
    }
}
