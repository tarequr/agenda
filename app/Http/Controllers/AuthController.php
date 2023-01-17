<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login_form');
    }

    public function login(Request $request)
    {
        $validUser = Auth::attempt($request->phone,$request->password);

        if ($validUser == 1) {
            Session::put('isLogedIn', true);
            // return Session::get('isLogedIn');
            return redirect()->route('get.balance');
        } else{
            Session::put('isLogedIn', false);
            return redirect()->route('user.login.form')->with(['message' => 'Invalid User']);
        }
    }

    public function balance()
    {
        return "20,000";
    }

    public function withdrawalForm()
    {
        return view('login_form');
    }
}
