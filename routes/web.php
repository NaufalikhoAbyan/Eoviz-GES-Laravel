<?php

use App\Http\Controllers\MaritalCodeController;
use App\Http\Controllers\MaritalCodeTaxController;
use App\Http\Controllers\MaritalStatusController;
use App\Http\Controllers\GradeTypeController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\BloodTypesController;
use App\Http\Controllers\StructuralPositionTypeController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\EmployeeTypeController;
use App\Http\Controllers\EmployeeStatusController;
use App\Http\Controllers\WorkHourController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('IndexView');
})->name('index');
Route::get('/about', function () {
    return inertia('AboutView');
})->name('about');

Route::resources([
    'structural-position-types' => StructuralPositionTypeController::class,
    'marital-codes' => MaritalCodeController::class,
    'blood-types' => BloodTypesController::class,
    'employee-types' => EmployeeTypeController::class,
    'employee-statuses' => EmployeeStatusController::class,
    'grade-types' => GradeTypeController::class,
    'religions' => ReligionController::class,
    'supervisors' => SupervisorController::class,
    'marital-code-taxes' => MaritalCodeTaxController::class,
    'work-hours' => WorkHourController::class,
    'marital-statuses' => MaritalStatusController::class
]);

Route::get('references', ReferenceController::class)->name('references.index');
