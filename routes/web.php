<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('user.login.form');
});

Route::get('/user-login',[AuthController::class,'loginForm'])->name('user.login.form');
Route::post('/user-login',[AuthController::class,'login'])->name('user.login');
Route::get('/checkout',[AuthController::class,'withdrawalForm'])->middleware('authUser')->name('withdrawal.form');
Route::post('/checkout',[AuthController::class,'checkoutBalance'])->middleware(['authUser','balanceCheck'])->name('checkout.balance');
Route::get('/after-checkout',[AuthController::class,'afterCheckout'])->middleware('authUser')->name('after.checkout');
Route::get('/session-destroy',[AuthController::class,'sessionDestroy'])->middleware('authUser')->name('session.destroy');
