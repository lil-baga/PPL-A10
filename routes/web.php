<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_User;
use App\Http\Controllers\C_Login;
use App\Http\Controllers\C_SignUp;
use App\Http\Controllers\C_Subsidi;

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

// Route Landing
Route::get('/', function () {return view('V_halamanUtama');})->name('landing');

// Route Login
Route::get('/loginRole', function () {return view('loginRole');})->name('login.role');
Route::get('/loginPeternak', [C_Login::class, 'farmer']);
Route::get('/loginDinas', [C_Login::class, 'government']);
Route::get('/loginAdmin', [C_Login::class, 'admin']);
Route::get('/login', function () {return view('V_Login');})->name('view.login');
Route::post('/login', [C_Login::class, 'login']);
Route::get('/logout', [C_User::class, 'logout'])->name('logout');

// Route Sign Up
Route::get('/signupRole', function () {return view('signupRole');})->name('signup.role');
Route::get('/signupPeternak', [C_SignUp::class, 'farmer']);
Route::get('/signupDinas', [C_SignUp::class, 'government']);
Route::get('/signup', function () {return view('V_SignUp');})->name('view.signup');
Route::post('/signupPeternak', [C_SignUp::class, 'registerFarmer']);
Route::post('/signupDinas', [C_SignUp::class, 'registerGovernment']);
Route::post('/signup', [C_SignUp::class, 'signup']);

// Route Profil Akun
Route::get('/profilUser',  [C_User::class, 'index'])->name('view.profil');
Route::get('/editProfil/{id}',  [C_User::class, 'edit'])->name('edit.profil');
Route::put('/editProfil',  [C_User::class, 'update'])->name('update.profil');

// Route Fitur Subsidi Pakan (Global)
Route::get('/subsidiPakan', [C_Subsidi::class, 'index'])->name('view.subsidi');
Route::get('/detailSubsidi/{id}', [C_Subsidi::class, 'detail'])->name('detail.subsidi');

// Route Peternak
Route::middleware(['peternak'])->group(function () {
    Route::get('/addSubsidi', [C_Subsidi::class, 'create']);
    Route::post('/addSubsidi', [C_Subsidi::class, 'store']);
    Route::get('/editSubsidi/{id}', [C_Subsidi::class, 'edit'])->name('edit.subsidi');
    Route::put('/editSubsidi/{id}', [C_Subsidi::class, 'update'])->name('update.subsidi');
    Route::delete('/editSubsidi/{id}', [C_Subsidi::class, 'destroy'])->name('destroy.subsidi');
});

// Route Dinas
Route::middleware(['dinas'])->group(function () {
    Route::get('/validateSubsidi/{id}',  [C_Subsidi::class, 'dinasValidate'])->name('view.validate');
    Route::put('/validateSubsidi/{id}', [C_Subsidi::class, 'updateValidation'])->name('validate.subsidi');
});

// Route Admin
Route::middleware(['admin'])->group(function () {

});
