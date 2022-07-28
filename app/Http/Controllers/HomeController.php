<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getIndex(){

        return view('home');
    }

    public function getDetail(){

        return view('detail');
    }

    public function getCategory(){

        return view('categories');
    }

    public function login(){

        return view('login');
    }

    public function register(){

        return view('register');
    }
}
