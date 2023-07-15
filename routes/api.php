<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;


Route::get('/login', [AuthorController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthorController::class, 'login']);
Route::post('/logout', [AuthorController::class, 'logout'])->name('logout');
Route::get('/register', [AuthorController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthorController::class, 'register']);



Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
