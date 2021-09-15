<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserPostController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::get('/users/{user:username}/post', [UserPostController::class,'index'])->name('users.post');

Route::post('/logout', [LogoutController::class,'store'])->name('logout');

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/post', [PostController::class,'index'])->name('post');
Route::get('/post/{post}', [PostController::class,'show'])->name('posts.show');
Route::post('/post', [PostController::class,'store']);
Route::delete('/post', [PostController::class,'destroy'])->name('post.destroy');

Route::post('/post/{post}/likes', [PostLikeController::class,'store'])->name('post.likes');
Route::delete('/post/{post}/likes', [PostLikeController::class,'destroy'])->name('post.likes');