<?php

// routes/web.php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DriverController;

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Rota para a página de informações do usuário
Route::get('user/info', [DriverController::class, 'showUserInfo'])->name('user.info');


Route::get('/', [DriverController::class, 'index'])->name('home');

Route::get('login', [DriverController::class, 'showLoginForm'])->name('login');
Route::post('login', [DriverController::class, 'login']);

Route::get('register', [DriverController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [DriverController::class, 'register']);

Route::get('user/info', [DriverController::class, 'showUserInfo'])->name('user.info'); // Verifique se esta rota está aqui
