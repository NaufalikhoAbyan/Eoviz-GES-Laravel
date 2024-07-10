<?php

use App\Http\Controllers\EmployeeTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodTypesController;

Route::get('/', function () {
    return inertia('IndexView');
})->name('index');
Route::get('/about', function () {
    return inertia('AboutView');
})->name('about');

Route::resource('/blood-types', BloodTypesController::class);
Route::resource('/employee-types', EmployeeTypeController::class);
