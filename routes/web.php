<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

// Login routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// User routes
//Route::middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'open_home'])->name('home');
    Route::get('/service', [UserController::class, 'open_service'])->name('service');
    Route::get('/contact', [UserController::class, 'open_contact'])->name('contact');
    Route::get('/information', [UserController::class, 'open_info'])->name('info');
//});

//Admin routes
Route::get('/AdminHome',[UserController::class, 'open_adminhome'])->name('admin_home');