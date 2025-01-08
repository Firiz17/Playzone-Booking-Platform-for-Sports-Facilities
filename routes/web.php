<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;

Route::get('/', [ReviewController::class,'create'])->name('review.index');
Route::get('/review/create', [ReviewController::class,'create'])->name('review.create');
Route::get('/review',[ReviewController::class,'create'])->name('review.create');
Route::post('/review',[ReviewController::class,'store'])->name('review.store');
