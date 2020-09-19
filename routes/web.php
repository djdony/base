<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum'])->prefix('admin')->group( function () {
    Route::get('/',function (){
        return view('dashboard');
    })->name('dashboard');
    Route::resource('settings', \App\Http\Controllers\SettingController::class, ['as'=>'admin']);
    Route::resource('faqs', \App\Http\Controllers\FaqController::class, ['as'=>'admin']);
    Route::resource('carTypes', \App\Http\Controllers\CarTypeController::class, ['as'=>'admin']);
    Route::resource('images', \App\Http\Controllers\ImageController::class, ['as'=>'admin']);
    Route::resource('cars', \App\Http\Controllers\CarController::class, ['as'=>'admin']);
    Route::resource('locations', \App\Http\Controllers\LocationController::class, ['as'=>'admin']);
    Route::resource('drivers', \App\Http\Controllers\DriverController::class, ['as'=>'admin']);
    Route::resource('customers', \App\Http\Controllers\CustomerController::class, ['as'=>'admin']);
    Route::resource('users', \App\Http\Controllers\UserController::class, ['as'=>'admin']);
    Route::resource('currencies', \App\Http\Controllers\CurrencyController::class, ['as'=>'admin']);
    Route::resource('bookings', \App\Http\Controllers\BookingController::class, ['as'=>'admin']);
});
