<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('page', [FacebookController::class, 'index'])->name('login');
Route::get('login/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('login/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('login/google', [GoogleController::class, 'redirectTogoogle']);
Route::get('login/google/callback', [GoogleController::class, 'handlegoogleCallback']);
Route::get('/googlepage', [HomeController::class, 'google_page'])->name('googlepage');
