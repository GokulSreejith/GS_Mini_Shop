<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Admin;

class AdminController extends BaseController
{

    public function index()
    {
        // $admin = new Admin();
        // $data['admin'] = $admin->findAll();
        // return view("",$data);
        return view("admin/home_screen.php");
    }

    public function products()
    {
        // $admin = new Admin();
        // $data['admin'] = $admin->findAll();
        // return view("",$data);
        return view("admin/products_screen.php");
    }
}
