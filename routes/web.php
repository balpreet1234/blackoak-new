<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('home');
});


Route::get('about-us', [HomeController::class, 'about'])->name('about');
Route::get('contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('events', [HomeController::class, 'events'])->name('events');


Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');