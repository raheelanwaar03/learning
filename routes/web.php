<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/','/login');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/loginReq',[AuthController::class,'loginReq'])->name('loginReq');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/registerReq',[AuthController::class,'registerReq'])->name('registerReq');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/index',[DashboardController::class,'index'])->name('index')->middleware('custom');