<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $data = ['user' => true];
        return view('home', ['data' => $data]);
    }

    public function register()
    {
        return view('auth.register');
    }
}
