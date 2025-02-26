<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//user
Route::get('/', function () {
    return view('user/index');
});

Route::get('/',[UserController::class, 'open_home'])->name('Home');
Route::get('/service.html',[UserController::class,  'open_service'])->name('Service');
Route::get('/contact.html',[UserController::class, 'open_contact'])->name('Contact');