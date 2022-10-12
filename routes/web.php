<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/mahasiswa', [MahasiswaController::class,'index'])->middleware('auth');


Route::get('/mahasiswa/create', [MahasiswaController::class,'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class,'store']);

Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class,'edit']);
Route::post('/mahasiswa/update', [MahasiswaController::class,'update']);

Route::get('/mahasiswa/hapus/{id}', [MahasiswaController::class,'delete']);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/storeLogin', [LoginController::class,'store'])->name('storeLogin');

Route::post('/logout', [LoginController::class,'logout'])->name('logout');

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/storeRegister', [RegisterController::class,'store'])->name('storeRegister');

// Route::get('/register', [LoginController::class,'register'])->name('guest');
