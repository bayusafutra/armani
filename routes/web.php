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
    return view('home');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signup2', function () {
    return view('signup_2');
});

Route::get('/Home', function () {
    return view('home2');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/About', function () {
    return view('about2');
});

Route::get('/forgotpassword', function () {
    return view('forgotpass');
});


Route::get('/forgotpass', function () {
    return view('forgotpass2');
});

Route::get('/provinsi', function () {
    return view('provinsi');
});

Route::get('/makanankhas', function () {
    return view('makanankhas');
});

Route::get('/pakaianadat', function () {
    return view('pakaianadat');
});

Route::get('/rumahadat', function () {
    return view('rumahadat');
});

Route::get('/senjatadaerah', function () {
    return view('senjatadaerah');
});

Route::get('/sukuadat', function () {
    return view('sukuadat');
});

Route::get('/tarianadat', function () {
    return view('tarianadat');
});

Route::get('/nyoba', function () {
    return view('nyoba');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});