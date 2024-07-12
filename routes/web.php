<?php

use App\Http\Controllers\EmployeeStatusController;
use App\Http\Controllers\EmployeeTypeController;
use App\Http\Controllers\GradeTypeController;
use App\Http\Controllers\ReferenceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\BloodTypesController;

Route::get('/', function () {
    return inertia('IndexView');
})->name('index');
Route::get('/about', function () {
    return inertia('AboutView');
})->name('about');

Route::resources([
    'blood-types' => BloodTypesController::class,
    'employee-types' => EmployeeTypeController::class,
    'employee-statuses' => EmployeeStatusController::class,
    'grade-types' => GradeTypeController::class,
    'religions' => ReligionController::class,
]);

Route::get('references', ReferenceController::class)->name('references.index');
