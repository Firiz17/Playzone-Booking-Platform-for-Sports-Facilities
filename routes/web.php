<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\JoinEventController;
use Illuminate\Http\Request;

// Set homepage as default
Route::get('/', function () {
    return view('homepage');
})->name('home');

// Auth routes
Route::get('/signin', [AuthController::class, 'create'])->name('login.create');
Route::post('/signin', [AuthController::class, 'login'])->name('login.store');
Route::get('/signup', [AuthController::class, 'index'])->name('signUp.create');
Route::post('/signup', [AuthController::class, 'store'])->name('signUp.store');

// Event routes
Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');
Route::get('/event/{id}/join', [EventController::class, 'joinEvent'])->name('event.join');
Route::post('/event/register', [EventController::class, 'storeRegistration'])->name('event.register');

// Facility routes
Route::resource('facilities', FacilityController::class);

// Review routes
Route::get('/customer/comments', [ReviewController::class,'customerComments'])->name('review.customerComment');
Route::get('/owner/comments', [ReviewController::class,'ownerComments'])->name('review.ownerComment');
Route::get('/review/create/customer/comments/{id}', [ReviewController::class,'create'])->name('review.createComment');
Route::get('/review/create/customer/comments', [ReviewController::class,'create'])->name('review.createCommentCust');
Route::post('/review/post/comment',[ReviewController::class,'store'])->name('review.store');
Route::get('/review/show/comment', [ReviewController::class,'show'])->name('review.index');
Route::get('/reviews/average', [ReviewController::class, 'average']);

// Join Event routes
Route::get('/joinevent/{id}', [JoinEventController::class, 'index'])->name('joinevent.index');
Route::post('/joinevent/register', [JoinEventController::class, 'store'])->name('joinevent.store');

