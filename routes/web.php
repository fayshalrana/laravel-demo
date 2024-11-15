<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

Route::get('/', [Controller::class, 'welcomePage'])->name('welcome');

// Route::group(['prefix' => 'ui'], function () {
//     // 
//     // Route::get('/home', [UiController::class, 'homeController'])->name('home');
//     // Route::get('/about', [UiController::class, 'aboutController'])->name('about');
// });