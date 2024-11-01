<?php

// routes/web.php

use App\Http\Controllers\DriverController;
Route::get('/home', [DriverController::class, 'home'])->name('home')->middleware('auth');
Route::get('/', [DriverController::class, 'index'])->name('index'); // Ou o nome que você preferir
Route::get('/car/register', [DriverController::class, 'showCarRegisterForm'])->name('car.register');
Route::post('/car/store', [DriverController::class, 'storeCar'])->name('car.store');
Route::get('/user/info', [DriverController::class, 'showUserInfo'])->name('user.info');


// routes/web.php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
