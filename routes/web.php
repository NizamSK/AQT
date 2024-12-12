<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\WebHomeController;
use App\Http\Controllers\Website\OTPController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebHomeController::class, 'home'])->name('website.home');
Route::get('/apply', [WebHomeController::class, 'apply'])->name('website.apply');
Route::get('/movies', [WebHomeController::class, 'movies'])->name('website.movies');
Route::get('/series', [WebHomeController::class, 'series'])->name('website.series');
Route::get('/about', [WebHomeController::class, 'about'])->name('website.about');
Route::get('/contact', [WebHomeController::class, 'contact'])->name('website.contact');
Route::get('/seven-encounters', [WebHomeController::class, 'sevenEncounters'])->name('website.sevenEncounters');
Route::post('/send-otp', [OTPController::class, 'sendOtp']);
Route::post('/verify-otp', [OTPController::class, 'verifyOtp']);
Route::post('/submit-form', [WebHomeController::class, 'submitForm'])->name('submit.form');