<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum'])->prefix('admin')->group( function () {
    Route::get('dashboard',function (){
        return view('dashboard');
    })->name('dashboard');
    Route::resource('settings', SettingController::class, ['as'=>'admin']);
    Route::resource('faqs', FaqController::class, ['as'=>'admin']);
    Route::resource('carTypes', CarTypeController::class, ['as'=>'admin']);
    Route::resource('images', ImageController::class, ['as'=>'admin']);
    Route::resource('cars', CarController::class, ['as'=>'admin']);
    Route::resource('locations', LocationController::class, ['as'=>'admin']);
    Route::resource('drivers', DriverController::class, ['as'=>'admin']);
    Route::resource('customers', CustomerController::class, ['as'=>'admin']);
    Route::resource('bookings', BookingController::class, ['as'=>'admin']);
});
