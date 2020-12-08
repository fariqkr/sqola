<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

// Auth
Route::middleware('guest.custom')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::get('/teacher/register', [RegisterController::class, 'indexTeacher'])->name('register.teacher');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::middleware('auth.student')->group(function () {
    // Courses
    Route::get('/mycourse/ongoing', [CourseController::class, 'indexOngoing'])->name('course.ongoing');
    Route::get('/mycourse/complete', [CourseController::class, 'indexComplete'])->name('course.complete');

    // Categories
    Route::get('/categories/{grade}/{subject}', [CategoryController::class, 'index'])->name('category');
});


