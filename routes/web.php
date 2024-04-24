<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FoodController;

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
Route::get('/', function () {return view('landingpage');})->name('landing');

// Route Login
Route::get('/loginRole', function () {return view('loginRole');})->name('login.role');
Route::get('/loginPeternak', [LoginController::class, 'farmer']);
Route::get('/loginDinas', [LoginController::class, 'government']);
Route::get('/loginAdmin', [LoginController::class, 'admin']);
Route::get('/login', function () {return view('login');})->name('view.login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Route Sign Up
Route::get('/signupRole', function () {return view('signupRole');})->name('signup.role');
Route::get('/signupPeternak', [RegisterController::class, 'farmer']);
Route::get('/signupDinas', [RegisterController::class, 'government']);
Route::get('/signup', function () {return view('signup');})->name('view.signup');
Route::post('/signupPeternak', [RegisterController::class, 'registerFarmer']);
Route::post('/signupDinas', [RegisterController::class, 'registerGovernment']);
Route::post('/signup', [RegisterController::class, 'signup']);

// Route Profil Akun
Route::get('/profilUser',  [UserController::class, 'index'])->name('view.profil');
Route::get('/editProfil/{id}',  [UserController::class, 'edit'])->name('edit.profil');
Route::put('/editProfil',  [UserController::class, 'update'])->name('update.profil');

// Route Fitur Subsidi Pakan (Global)
Route::get('/subsidiPakan', [FoodController::class, 'index'])->name('view.subsidi');
Route::get('/detailSubsidi/{id}', [FoodController::class, 'detail'])->name('detail.subsidi');

// Route Peternak
Route::middleware(['peternak'])->group(function () {
    Route::get('/addSubsidi', [FoodController::class, 'create']);
    Route::post('/addSubsidi', [FoodController::class, 'store']);
    Route::get('/editSubsidi/{id}', [FoodController::class, 'edit'])->name('edit.subsidi');
    Route::put('/editSubsidi/{id}', [FoodController::class, 'update'])->name('update.subsidi');
    Route::delete('/editSubsidi/{id}', [FoodController::class, 'destroy'])->name('destroy.subsidi');
});

// Route Dinas
Route::middleware(['dinas'])->group(function () {
    Route::get('/validateSubsidi/{id}',  [FoodController::class, 'dinasValidate'])->name('view.validate');
    Route::put('/validateSubsidi/{id}', [FoodController::class, 'updateValidation'])->name('validate.subsidi');
});

// Route Admin
Route::middleware(['admin'])->group(function () {

});
