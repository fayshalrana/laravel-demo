<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

Route::get('/', [Controller::class, 'welcomePage'])->name('welcome-page');

// Route::group(['prefix' => 'ui'], function () {
//     // Page Specific Routes
//     Route::get('/home', [Controller::class, 'homeController'])->name('home');
//     Route::get('/about', [Controller::class, 'aboutController'])->name('about');
// });