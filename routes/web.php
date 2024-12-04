<?php

use App\Http\Controllers\Career\CareerController;
use App\Http\Controllers\Contact\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/career', function () {
    return view('career');
});

Route::get('/careerHome', function () {
    return view('careerHome');
});

Route::post('/career', [CareerController::class, 'create'])->name('register.store');

Route::post('/careerHome', [ContactController::class, 'create'])->name('email.store');
