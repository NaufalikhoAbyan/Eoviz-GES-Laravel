<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\BloodTypesController;
use App\Http\Controllers\EmployeeTypeController;

Route::get('/', function () {
    return inertia('IndexView');
})->name('index');
Route::get('/about', function () {
    return inertia('AboutView');
})->name('about');

Route::resource('/blood-types', BloodTypesController::class);
Route::resource('/employee-types', EmployeeTypeController::class);
Route::resource('/religions', ReligionController::class);
