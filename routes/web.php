<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DashboardTransaksiController;

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
    return view('home',[
        "title"=> "Home"


    ]);
});
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);


Route::get('/register',[RegistrasiController::class,'index'])->middleware('guest');
Route::post('/register',[RegistrasiController::class,'store']);

Route::resource('/dashboard/transaksi',DashboardTransaksiController::class)->middleware('auth');


Route::get('/dashboard',[TransaksiController::class,'index'])->middleware('auth');
Route::get('/profile',[ProfileController::class,'index'])->middleware('auth');


Route::get('/dashboard/send',[TransaksiController::class,'send'])->middleware('auth');
Route::get('/dashboard/send_post',[TransaksiController::class,'send_post'])->middleware('auth');
Route::post('/dashboard/send_post',[TransaksiController::class,'pay_post'])->middleware('auth');

