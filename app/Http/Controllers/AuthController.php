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
            Session::put('balance', 50000);

            return redirect()->route('withdrawal.form');
        } else{
            Session::put('isLogedIn', false);
            return redirect()->route('user.login.form')->with(['message' => 'Invalid User']);
        }
    }

    public function withdrawalForm()
    {
        return view('withdrawal_form');
    }

    public function checkoutBalance(Request $request)
    {
        return redirect()->route('after.checkout');
    }

    public function afterCheckout()
    {
        return view('after_checkout');
    }

    public function sessionDestroy()
    {
        Auth::logout();
        return redirect()->route('user.login.form');
    }
}
