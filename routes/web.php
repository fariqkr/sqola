<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
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


// Course Page
Route::get('/courses/kelas/matpel/course-name', function () {
    return view('courses.course');
});

// Quiz Page
Route::get('/courses/kelas/matpel/course-name/quiz', function () {
    return view('courses.quiz');
});

Route::middleware('auth.student')->group(function () {
    // Student
    Route::post('/join', [StudentController::class, 'joinCourse'])->name('join');

    // Courses
    Route::get('/mycourse/ongoing', [CourseController::class, 'indexOngoing'])->name('course.ongoing');
    Route::get('/mycourse/complete', [CourseController::class, 'indexComplete'])->name('course.complete');

    Route::get('/courses/{course}/course', [CourseController::class, 'showCourse'])->name('course.course');
    Route::get('/courses/{course}/quiz', [CourseController::class, 'showQuiz'])->name('course.quiz');
    Route::post('/courses/{course}/quiz', [CourseController::class, 'submitQuiz']);

    // Categories
    Route::get('/categories/{grade}/{subject}', [CategoryController::class, 'index'])->name('category');
});


