<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Auth extends Controller
{
    public static function attempt($phone_number, $password)
    {
        if ($phone_number == '01835163868' && $password == '123456') {
            return 1;
        } else {
            return 0;
        }
    }

    public static function logout()
    {
        Session::forget('isLogedIn');
        Session::forget('balance');
    }
}
