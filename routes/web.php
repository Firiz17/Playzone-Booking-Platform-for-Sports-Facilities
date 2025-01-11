<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;

//Route::get('/', [ReviewController::class,'index'])->name('review.index');
Route::get('/review/create', [ReviewController::class,'create'])->name('review.create');
Route::post('/review',[ReviewController::class,'store'])->name('review.store');

Route::get('/',[AuthController::class,'index'])->name('signUp.create');
Route::post('/signUp',[AuthController::class,'store'])->name('signUp.store');
Route::get('/login', [AuthController::class, 'create'])->name('login.create');
Route::post('/signIn',[AuthController::class,'login'])->name('login.store');
