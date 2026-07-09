<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Caller\LoginController::class, 'index']);

Route::get('/login', [App\Http\Controllers\Caller\LoginController::class, 'index'])->name('login');

Route::post('/login', [App\Http\Controllers\Caller\LoginController::class, 'validateUser']);

Route::get('/login/{driver}/start', [App\Http\Controllers\Caller\LoginController::class, 'redirectToProvider']);

Route::any('/login/{driver}/callback', [App\Http\Controllers\Caller\LoginController::class, 'handleProviderCallback']);

Route::any('/logout', [App\Http\Controllers\Caller\LoginController::class, 'Logout']);

// 👇 Ye naya route add karo
Route::get('/html-page', function () {
    return view('calendar');
});