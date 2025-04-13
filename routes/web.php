<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\ServiceTypeController;
use App\Http\Controllers\Admin\FormatController;
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

    //Service Type
    Route::get('/Admin_ServiceType',[ServiceTypeController::class, 'index'])->name('admin.servicetype.index');
    Route::get('/Admin_ServiceType/Create',[ServiceTypeController::class, 'create'])->name('admin.servicetype.create');
    Route::post('Admin_ServiceType/Store',[ServiceTypeController::class, 'store'])->name('admin.servicetype.store');
    Route::get('/Admin_ServiceType/{id}/edit', [ServiceTypeController::class, 'edit'])->name('admin.servicetype.edit');
    Route::put('/Admin_ServiceType/{id}', [ServiceTypeController::class, 'update'])->name('admin.servicetype.update');
    Route::delete('/Admin_ServiceType/{id}', [ServiceTypeController::class, 'destroy'])->name('admin.servicetype.destroy');
    //Format
    Route::get('Admin_Format',[FormatController::class, 'index'])->name('admin.format.index');
    Route::get('Admin_Format/Create',[FormatController::class, 'create'])->name('admin.format.create');
    Route::post('/Admin_Format/Store',[FormatController::class, 'store'])->name('admin.format.store');
    Route::get('/Admin_Format/{id}/edit',[FormatController::class,'edit'])->name('admin.format.edit');
    Route::put('Admin_Format/{id}',[FormatController::class,'update'])->name('admin.format.update');
    Route::delete('/Admin_Format/{id}',[FormatController::class, 'destroy'])->name('admin.format.destroy');
