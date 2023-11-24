<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

Route::get('/', function () {return view('welcome');});

// EMPLOYEE
// Cambia esto
// Route::resource('/employees', 'App\Http\Controllers\EmployeesController');

// Por esto
Route::resource('/employees', EmployeesController::class);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
