<?php

use App\Http\Controllers\EmployeeTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('IndexView');
})->name('index');
Route::get('/about', function () {
    return inertia('AboutView');
})->name('about');

Route::resource('/employee-types', EmployeeTypeController::class)->only(['index']);

