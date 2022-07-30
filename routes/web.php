<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardAdmin;


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


 
Route::get('/',[DashboardController::class, 'index'])->name('home');
Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/aksi-register',[RegisterController::class, 'insert'])->name('proses-register');
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/proses-login',[LoginController::class, 'proseslogin'])->name('proses-login');



Route::get('/dashboardadmin',[DashboardAdmin::class,'index'])->name('Dashboard-Admin')->middleware('auth');
Route::get('/logout',[DashboardAdmin::class,'logout'])->name('logout')->middleware('auth');
