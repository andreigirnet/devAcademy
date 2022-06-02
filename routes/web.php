<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.mainapp');
});
Route::get('/admin', function () {
    return view('layouts.app');
});



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index')->middleware('auth');
Route::get('/home/edit/{contact}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit')->middleware('auth');
Route::patch('/home/update/{contact}', [App\Http\Controllers\HomeController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/home/delete/{contact}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete')->middleware('auth');

Route::get('/course', [App\Http\Controllers\CourseController::class, 'index'])->name('course.index')->middleware('auth');
Route::get('/course/create', [App\Http\Controllers\CourseController::class, 'create'])->name('course.create')->middleware('auth');
Route::post('/course/store', [App\Http\Controllers\CourseController::class, 'store'])->name('course.store')->middleware('auth');
Route::get('/course/edit/{course}', [App\Http\Controllers\CourseController::class, 'edit'])->name('course.edit')->middleware('auth');
Route::patch('/course/update/{course}', [App\Http\Controllers\CourseController::class, 'update'])->name('course.update')->middleware('auth');
Route::delete('/course/delete/{course}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('course.delete')->middleware('auth');

Route::get('/group', [App\Http\Controllers\GroupController::class, 'index'])->name('group.index')->middleware('auth');
Route::get('/group/create', [App\Http\Controllers\GroupController::class, 'create'])->name('group.create')->middleware('auth');
Route::post('/group/store', [App\Http\Controllers\GroupController::class, 'store'])->name('group.store')->middleware('auth');
Route::get('/group/edit/{group}', [App\Http\Controllers\GroupController::class, 'edit'])->name('group.edit')->middleware('auth');
Route::get('/group/show/{group}', [App\Http\Controllers\GroupController::class, 'show'])->name('group.show')->middleware('auth');
Route::patch('/group/update/{group}', [App\Http\Controllers\GroupController::class, 'update'])->name('group.update')->middleware('auth');
Route::delete('/group/delete/{group}', [App\Http\Controllers\GroupController::class, 'destroy'])->name('group.delete')->middleware('auth');

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student.index')->middleware('auth');
Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create')->middleware('auth');
Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store')->middleware('auth');
Route::get('/student/edit/{student}', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit')->middleware('auth');
Route::get('/student/show/{student}', [App\Http\Controllers\StudentController::class, 'show'])->name('student.show')->middleware('auth');
Route::patch('/student/update/{student}', [App\Http\Controllers\StudentController::class, 'update'])->name('student.update')->middleware('auth');
Route::delete('/student/delete/{student}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('student.delete')->middleware('auth');

Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'index'])->name('teacher.index')->middleware('auth');
Route::get('/teacher/create', [App\Http\Controllers\TeacherController::class, 'create'])->name('teacher.create')->middleware('auth');
Route::post('/teacher/store', [App\Http\Controllers\TeacherController::class, 'store'])->name('teacher.store')->middleware('auth');
Route::get('/teacher/edit/{teacher}', [App\Http\Controllers\TeacherController::class, 'edit'])->name('teacher.edit')->middleware('auth');
Route::get('/teacher/show/{teacher}', [App\Http\Controllers\TeacherController::class, 'show'])->name('teacher.show')->middleware('auth');
Route::patch('/teacher/update/{teacher}', [App\Http\Controllers\TeacherController::class, 'update'])->name('teacher.update')->middleware('auth');
Route::delete('/teacher/delete/{teacher}', [App\Http\Controllers\TeacherController::class, 'destroy'])->name('teacher.delete')->middleware('auth');
