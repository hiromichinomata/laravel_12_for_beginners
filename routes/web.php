<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

Route::view('article', 'article')->name('article');

Route::get('posts/{post}', [PostController::class, 'show'])
    ->name('post.show');
