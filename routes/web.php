<?php
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceTypeController;
use App\Http\Controllers\Admin\FormatController;
use App\Http\Controllers\Admin\Service\ServiceBeautyController;
use App\Http\Controllers\Admin\Service\ServiceHealthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\Service\Service_BeautyController;
use App\Http\Controllers\User\Service\Service_HealthController;



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
    //Service_Beauty
    Route::get('/User_ServiceBeauty',[Service_BeautyController::class, 'index'])->name('user.servicebeauty.index');

    //Service_Health
    Route::get('/User_ServiceHealth',[Service_HealthController::class, 'index'])->name('user.servicehealth.index');



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
    //Service_Beauty
    Route::get('/Admin_ServiceA',[ServiceBeautyController::class, 'index'])->name('admin.serviceA.index');
    Route::get('/Admin_ServiceA/Create',[ServiceBeautyController::class, 'create'])->name('admin.serviceA.create');
    Route::post('Admin_ServiceA/Store',[ServiceBeautyController::class, 'store'])->name('admin.serviceA.store');
    Route::get('/Admin_ServiceA/{id}/edit', [ServiceBeautyController::class, 'edit'])->name('admin.serviceA.edit');
    Route::put('/Admin_ServiceA/{id}', [ServiceBeautyController::class, 'update'])->name('admin.serviceA.update');
    Route::delete('/Admin_ServiceA/{id}', [ServiceBeautyController::class, 'destroy'])->name('admin.serviceA.destroy');
    //Service_Health
    Route::get('/Admin_ServiceB',[ServiceHealthController::class, 'index'])->name('admin.serviceB.index');
    Route::get('/Admin_ServiceB/Create',[ServiceHealthController::class, 'create'])->name('admin.serviceB.create');
    Route::post('Admin_ServiceB/Store',[ServiceHealthController::class, 'store'])->name('admin.serviceB.store');
    Route::get('/Admin_ServiceB/{id}/edit', [ServiceHealthController::class, 'edit'])->name('admin.serviceB.edit');
    Route::put('/Admin_ServiceB/{id}', [ServiceHealthController::class, 'update'])->name('admin.serviceB.update');
    Route::delete('/Admin_ServiceB/{id}', [ServiceHealthController::class, 'destroy'])->name('admin.serviceB.destroy');
    //User_Customer
