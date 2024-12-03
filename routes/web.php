<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\WebHomeController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebHomeController::class, 'home'])->name('website.home');
Route::get('/apply', [WebHomeController::class, 'apply'])->name('website.apply');
