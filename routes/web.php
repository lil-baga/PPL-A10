<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_User;
use App\Http\Controllers\C_Login;
use App\Http\Controllers\C_SignUp;
use App\Http\Controllers\C_Subsidi;
use App\Http\Controllers\C_Penyuluhan;
use App\Http\Controllers\C_Berita;

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
Route::get('/logout', [C_Login::class, 'logout'])->name('logout');

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

// Route Fitur Penyuluhan Ternak (Global)
Route::get('/penyuluhanTernak', [C_Penyuluhan::class, 'index'])->name('view.penyuluhan');
Route::get('/detailPenyuluhan/{id}', [C_Penyuluhan::class, 'detail'])->name('detail.penyuluhan');

// Route Fitur Berita (Global)
Route::get('/broadcastBerita',  [C_Berita::class, 'index'])->name('view.berita');
Route::get('/detailBerita/{id}',  [C_Berita::class, 'detail'])->name('detail.berita');

// Route Peternak
Route::middleware(['peternak'])->group(function () {
    Route::get('/tambahSubsidi', [C_Subsidi::class, 'create']);
    Route::post('/tambahSubsidi', [C_Subsidi::class, 'store']);
    Route::get('/editSubsidi/{id}', [C_Subsidi::class, 'edit'])->name('edit.subsidi');
    Route::put('/editSubsidi/{id}', [C_Subsidi::class, 'update'])->name('update.subsidi');
    Route::delete('/editSubsidi/{id}', [C_Subsidi::class, 'destroy'])->name('destroy.subsidi');
    Route::get('/tambahPenyuluhan', [C_Penyuluhan::class, 'create']);
    Route::post('/tambahPenyuluhan', [C_Penyuluhan::class, 'store']);
    Route::get('/editPenyuluhan/{id}', [C_Penyuluhan::class, 'edit'])->name('edit.penyuluhan');
    Route::put('/editPenyuluhan/{id}', [C_Penyuluhan::class, 'update'])->name('update.penyuluhan');
    Route::delete('/editPenyuluhan/{id}', [C_Penyuluhan::class, 'destroy'])->name('destroy.penyuluhan');
});

// Route Dinas
Route::middleware(['dinas'])->group(function () {
    Route::get('/validasiSubsidi/{id}',  [C_Subsidi::class, 'dinasValidasi'])->name('view.validsubsidi');
    Route::put('/validasiSubsidi/{id}', [C_Subsidi::class, 'updateValidasi'])->name('validasi.subsidi');
    Route::get('/validasiPenyuluhan/{id}',  [C_Penyuluhan::class, 'dinasValidasi'])->name('view.validpenyuluhan');
    Route::put('/validasiPenyuluhan/{id}', [C_Penyuluhan::class, 'updateValidasi'])->name('validasi.penyuluhan');
    Route::get('/tambahBerita', [C_Berita::class, 'create']);
    Route::post('/tambahBerita', [C_Berita::class, 'store']);
    Route::get('/editBerita/{id}', [C_Berita::class, 'edit'])->name('edit.berita');
    Route::put('/editBerita/{id}', [C_Berita::class, 'update'])->name('update.berita');
    Route::delete('/editBerita/{id}', [C_Berita::class, 'destroy'])->name('destroy.berita');
});

// Route Admin
Route::middleware(['admin'])->group(function () {

});
