<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

//login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//user
Route::get('/', function () {
    return view('user/index');
});

Route::get('/',[UserController::class, 'open_home'])->name('Home');
Route::get('/service.html',[UserController::class,  'open_service'])->name('Service');
Route::get('/contact.html',[UserController::class, 'open_contact'])->name('Contact');