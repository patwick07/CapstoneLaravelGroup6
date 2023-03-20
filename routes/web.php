<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', 
    [
        'title'=>"Dashboard"
    ]);
});

Route::get('/home', function () {
    return view('index',
    [
        'title'=>"Dashboard"
    ]);
});

Route::resource('courses', CourseController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('classes', ClassesController::class);
Route::resource('faculties', FacultyController::class);
Route::resource('students', StudentController::class);