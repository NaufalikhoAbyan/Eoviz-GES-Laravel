<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\WorkHourController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\BloodTypesController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\EmployeeTypeController;
use App\Http\Controllers\EmployeeStatusController;

Route::get('/', function () {
    return inertia('IndexView');
})->name('index');
Route::get('/about', function () {
    return inertia('AboutView');
})->name('about');

Route::resources([
    'blood-types' => BloodTypesController::class,
    'employee-types' => EmployeeTypeController::class,
    'religions' => ReligionController::class,
    'employee-statuses' => EmployeeStatusController::class,
    'work-hours' => WorkHourController::class,
    'supervisors' => SupervisorController::class

]);

Route::get('references', ReferenceController::class)->name('references.index');
