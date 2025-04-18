<?php
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceTypeController;
use App\Http\Controllers\Admin\FormatController;
use App\Http\Controllers\Admin\Service\ServiceBeautyController;
use App\Http\Controllers\Admin\Service\ServiceHealthController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\BookingCheckController;
use App\Http\Controllers\Admin\BookingFinalController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\Service\Service_BeautyController;
use App\Http\Controllers\User\Service\Service_HealthController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\BookingController;



// Login routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/register',[AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register',[AuthController::class, 'register']);

///////////////////////////////////////////////////////////////////////////////

// User routes
    Route::get('/', [UserController::class, 'open_home'])->name('home');
    Route::get('/service', [UserController::class, 'open_service'])->name('service');
    Route::get('/contact', [UserController::class, 'open_contact'])->name('contact');

    //Service_Beauty
    Route::get('/User_ServiceBeauty',[Service_BeautyController::class, 'index'])->name('user.servicebeauty.index');

    //Service_Health
    Route::get('/User_ServiceHealth',[Service_HealthController::class, 'index'])->name('user.servicehealth.index');

    //Profile
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');

    //Booking
    Route::get('/booking',[BookingController::class, 'index'])->name('user.booking.index');
    Route::post('/booking', [BookingController::class, 'store'])->name('user.booking.store');

/////////////////////////////////////////////////////////////////////

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

    //Customer
    Route::get('/Admin_Customer',[CustomerController::class, 'index'])->name('admin.customer.index');

    //Pet
    Route::get('/Admin_Pet',[PetController::class, 'index'])->name('admin.pet.index');
    Route::get('Admin_Pet/Create',[PetController::class, 'create'])->name('admin.pet.create');
    Route::post('/Admin_Pet/Store',[PetController::class, 'store'])->name('admin.pet.store');
    Route::get('/Admin_Pet/{id}/edit',[PetController::class,'edit'])->name('admin.pet.edit');
    Route::put('Admin_Pet/{id}',[PetController::class,'update'])->name('admin.pet.update');
    Route::delete('/Admin_Pet/{id}',[PetController::class, 'destroy'])->name('admin.pet.destroy');

    //Position
    Route::get('/Admin_Position',[PositionController::class, 'index'])->name('admin.position.index');
    Route::get('Admin_Position/Create',[PositionController::class, 'create'])->name('admin.position.create');
    Route::post('/Admin_Position/Store',[PositionController::class, 'store'])->name('admin.position.store');
    Route::get('/Admin_Position/{id}/edit',[PositionController::class,'edit'])->name('admin.position.edit');
    Route::put('Admin_Position/{id}',[PositionController::class,'update'])->name('admin.position.update');
    Route::delete('/Admin_Position/{id}',[PositionController::class, 'destroy'])->name('admin.position.destroy');

    //Employee
    Route::get('/Admin_Employee',[EmployeeController::class, 'index'])->name('admin.employee.index');
    Route::get('Admin_Employee/Create',[EmployeeController::class, 'create'])->name('admin.employee.create');
    Route::post('/Admin_Employee/Store',[EmployeeController::class, 'store'])->name('admin.employee.store');
    Route::get('/Admin_Employee/{id}/edit',[EmployeeController::class,'edit'])->name('admin.employee.edit');
    Route::put('Admin_Employee/{id}',[EmployeeController::class,'update'])->name('admin.employee.update');
    Route::delete('/Admin_Employee/{id}',[EmployeeController::class, 'destroy'])->name('admin.employee.destroy');

    //BookingCheck
    Route::get('/Admin_BookingCheckB',[BookingCheckController::class, 'indexB'])->name('admin.bookingCheckB.index');
    Route::get('/Admin_BookingCheckA',[BookingCheckController::class, 'indexA'])->name('admin.bookingCheckA.index');
    Route::put('/admin/booking-check/{id}/update-status', [BookingCheckController::class, 'updateStatus'])->name('admin.updateBookingStatus');

    //BookingFinal
    Route::get('/Admin_BookingFinalB',[BookingFinalController::class, 'indexB'])->name('admin.bookingFinalB.index');
    Route::get('/Admin_BookingFinalA',[BookingFinalController::class, 'indexA'])->name('admin.bookingFinalA.index');
