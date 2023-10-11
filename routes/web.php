<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\StudentsController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('teachers', TeachersController::class);

Route::resource('groups', GroupsController::class);

Route::resource('students', StudentsController::class);



