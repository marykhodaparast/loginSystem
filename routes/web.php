<?php

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
    return view('welcome');
//    if(Auth::check()){
//        return "The user is logged in";
//    }
//    $email = "sjlfjdlkf@gmail.com";
//    $password = "1323jkj343434";
//    if(Auth::attempt(['email' => $email, 'password' => $password])){
//        return redirect()->intended('/admin');
//    }

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
