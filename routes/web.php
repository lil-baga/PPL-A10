<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\GovernmentController;
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

Route::get('/', function () {return view('landingpage');});

// Route Login
Route::get('/login', function () {return view('login');});

Route::get('/loginPeternak', function () {return view('peternak.loginPeternak');});
Route::post('/loginPeternak', [FarmerController::class, 'authlogin']);
Route::get('/loginDinas', function () {return view('dinas.loginDinas');});
Route::get('/loginAdmin', function () {return view('admin.loginAdmin');});

// Route Sign Up
Route::get('/signup', function () {return view('signup');});

Route::get('/signupPeternak', function () {return view('peternak.signupPeternak');});
Route::post('/signupPeternak', [FarmerController::class, 'store']);
Route::get('/signupDinas', function () {return view('dinas.signupDinas');});
Route::post('/signupDinas', [GovernmentController::class, 'store']);

// Route Subsidi Pakan
Route::get('/subsidiPeternak', [FoodController::class, 'index']);
Route::get('/addSubsidi', [FoodController::class, 'create']);
Route::post('/addSubsidi', [FoodController::class, 'store']);
Route::get('/editSubsidi/{id}', [FoodController::class, 'edit'])->name('subsidi.edit');
Route::put('/editSubsidi/{id}', [FoodController::class, 'update'])->name('subsidi.update');
Route::delete('/editSubsidi/{id}', [FoodController::class, 'destroy'])->name('subsidi.destroy');
Route::get('/subsidiDinas',  [FoodController::class, 'dinas_idx']);
Route::get('/validateSubsidi', function () {return view('dinas.validateSubsidi');});
Route::get('/subsidiAdmin', [FoodController::class, 'admin_idx']);

// Route Profil
Route::get('/profilPeternak', function () {return view('peternak.profilPeternak');});
Route::get('/editprofilPeternak', function () {return view('peternak.editprofilPeternak');});
Route::get('/profilDinas', function () {return view('dinas.profilDinas');});
Route::get('/editprofilDinas', function () {return view('dinas.editprofilDinas');});
Route::get('/profilAdmin', function () {return view('admin.profilAdmin');});
Route::get('/editprofilAdmin', function () {return view('admin.editprofilAdmin');});



