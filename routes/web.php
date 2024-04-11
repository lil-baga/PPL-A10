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
    return view('landingpage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/loginPeternak', function () {
    return view('peternak.loginPeternak');
});

Route::get('/loginDinas', function () {
    return view('dinas.loginDinas');
});

Route::get('/loginAdmin', function () {
    return view('admin.loginAdmin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signupPeternak', function () {
    return view('peternak.signupPeternak');
});

Route::get('/signupDinas', function () {
    return view('dinas.signupDinas');
});

Route::get('/subsidiPeternak', function () {
    return view('peternak.subsidiPeternak');
});

Route::get('/subsidiDinas', function () {
    return view('dinas.subsidiDinas');
});

Route::get('/subsidiAdmin', function () {
    return view('admin.subsidiAdmin');
});

