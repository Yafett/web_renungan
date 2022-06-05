<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('splash');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.dashboard');

Route::get('/user/renungan', function () {
    return view('user.renungan.anak');
})->name('user.renungan');

Route::get('/renungan/anak', [App\Http\Controllers\RenunganController::class, 'indexAnak'])->name('user.anak');
