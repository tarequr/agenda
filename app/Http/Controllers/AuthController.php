<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login_form');
    }

    public function login()
    {
        # code...
    }
}
