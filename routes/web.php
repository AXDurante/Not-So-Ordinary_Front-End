<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home');
});

Route::get('/Collections', function () {
    return view('collections');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Signup2', function () {
    return view('Signup2');
});

Route::get('/Signup', function () {
    return view('Signup');
});

Route::get('/TermsC', function () {
    return view('TermsC');
});

Route::get('/changeProfile', function () {
    return view('changeProfile');
});

Route::get('/ForgotPassword', function () {
    return view('ForgotPassword');
});

Route::get('/ForgotChangePassword', function () {
    return view('ForgotChangePassword');
});
