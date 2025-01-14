<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;

Route::get('/customer/comments', [ReviewController::class,'customerComments'])->name('review.customerComment');
Route::get('/owner/comments', [ReviewController::class,'ownerComments'])->name('review.ownerComment');
Route::get('/review/create/customer/comments/{id}', [ReviewController::class,'create'])->name('review.createComment');
Route::get('/review/create/customer/comments', [ReviewController::class,'create'])->name('review.createCommentCust');
Route::post('/review/post/comment',[ReviewController::class,'store'])->name('review.store');
Route::get('/review/show/comment', [ReviewController::class,'show'])->name('review.index');
Route::get('/reviews/average', [ReviewController::class, 'average']);


Route::get('/signUp/create',[AuthController::class,'index'])->name('signUp.create');
Route::post('/signUp',[AuthController::class,'store'])->name('signUp.store');
Route::get('/', [AuthController::class, 'create'])->name('login.create');
Route::post('/signIn',[AuthController::class,'login'])->name('login.store');

Route::get('/event', function(){
    return view('event');
});

