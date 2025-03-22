<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontHomeController;

Route::get('/', [FrontHomeController::class, 'home'])->name('home');

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
