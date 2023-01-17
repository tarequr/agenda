<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
