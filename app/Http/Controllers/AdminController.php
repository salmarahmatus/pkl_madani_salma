<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function hello(){
        return view('Admins.dashboard');
    }

    public function banner(){
        return view('Admins.banner');

    }

    public function produk(){
        return view('Admins.produk');
    }
    public function addbanner(){
        return view('Admins.addbanner');
    }
}

