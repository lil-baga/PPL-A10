<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

// Route Landing
Route::get('/', function () {
    return view('landingpage');
});

// Route Login
Route::get('/login', function () {
    return view('login');
});

Route::get('/loginPeternak', function () {
    return view('peternak.loginPeternak');
});
Route::post('/loginPeternak', [FarmerController::class, 'login']);
Route::get('/loginDinas', function () {
    return view('dinas.loginDinas');
});
Route::post('/loginDinas', [GovernmentController::class, 'login']);
Route::get('/loginAdmin', function () {
    return view('admin.loginAdmin');
});
Route::post('/loginAdmin', [AdminController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Route Sign Up
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signupPeternak', function () {
    return view('peternak.signupPeternak');
});
Route::post('/signupPeternak', [FarmerController::class, 'store']);
Route::get('/signupDinas', function () {
    return view('dinas.signupDinas');
});
Route::post('/signupDinas', [GovernmentController::class, 'store']);

// Route Masing-Masing Role
Route::middleware(['peternak'])->group(function () {
    Route::get('/subsidiPeternak', [FoodController::class, 'index']);
    Route::get('/detailSubsidiPeternak/{id}', [FoodController::class, 'detailSubsidiPeternak'])->name('detail.subsidiPeternak');
    Route::get('/addSubsidi', [FoodController::class, 'create']);
    Route::post('/addSubsidi', [FoodController::class, 'store']);
    Route::get('/editSubsidi/{id}', [FoodController::class, 'edit'])->name('subsidi.edit');
    Route::put('/editSubsidi/{id}', [FoodController::class, 'update'])->name('subsidi.update');
    Route::delete('/editSubsidi/{id}', [FoodController::class, 'destroy'])->name('subsidi.destroy');
    Route::get('/profilPeternak',  [FarmerController::class, 'index'])->name('view.profilPeternak');
    Route::get('/editprofilPeternak/{id}',  [FarmerController::class, 'edit'])->name('edit.profilPeternak');
    Route::put('/editprofilPeternak',  [FarmerController::class, 'update'])->name('update.profilPeternak');
});

Route::middleware(['dinas'])->group(function () {
    Route::get('/subsidiDinas',  [FoodController::class, 'indexDinas']);
    Route::get('/detailSubsidiDinas/{id}', [FoodController::class, 'detailSubsidiDinas'])->name('detail.subsidiDinas');
    Route::get('/validateSubsidi/{id}',  [FoodController::class, 'dinasValidate'])->name('view.validate');
    Route::put('/validateSubsidi/{id}', [FoodController::class, 'updateValidation'])->name('subsidi.validate');
    Route::get('/profilDinas',  [GovernmentController::class, 'index'])->name('view.profilDinas');
    Route::get('/editprofilDinas/{id}',  [GovernmentController::class, 'edit'])->name('edit.profilDinas');
    Route::put('/editprofilDinas',  [GovernmentController::class, 'update'])->name('update.profilDinas');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/subsidiAdmin', [FoodController::class, 'indexAdmin']);
    Route::get('/detailSubsidiAdmin/{id}', [FoodController::class, 'detailSubsidiAdmin'])->name('detail.subsidiAdmin');
    Route::get('/profilAdmin',  [AdminController::class, 'index'])->name('view.profilAdmin');
    Route::get('/editprofilAdmin/{id}',  [AdminController::class, 'edit'])->name('edit.profilAdmin');
    Route::put('/editprofilAdmin',  [AdminController::class, 'update'])->name('update.profilAdmin');
});
