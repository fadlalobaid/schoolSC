<?php

use App\Http\Controllers\dashboard\ClassroomController;
use App\Http\Controllers\dashboard\StudentController;
use Illuminate\Support\Facades\Route;


Route::group([
    'middleware'=>['auth']
 ], function() {
 Route::resource('/dashboard/students', StudentController::class);
 Route::resource('/dashboard/classrooms', ClassroomController::class);
 });
