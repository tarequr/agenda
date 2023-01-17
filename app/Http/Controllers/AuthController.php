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

    public function balance()
    {
        return "20,000";
    }

    public function withdrawalForm()
    {
        return view('withdrawal_form');
    }

    public function checkoutBalance(Request $request)
    {
        if ($request->amount <= Session::get('balance')) {
            $current_ammount = Session::get('balance') - $request->amount;

            Session::put('balance', $current_ammount);
            return redirect()->route('after.checkout');
        }

        return redirect()->back()->with(['message' => 'Insufficient Balance']);
    }

    public function afterCheckout()
    {
        return view('after_checkout');
    }

    public function sessionDestroy()
    {
        Session::forget('isLogedIn');
        Session::forget('balance');
        return redirect()->route('user.login.form');
    }
}
