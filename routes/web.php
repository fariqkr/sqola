<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
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
    Route::get('/categories/10/fisika', function () {
        return view('categories.kelas10.fisika');
    });

    Route::get('/categories/10/matematika', function () {
        return view('categories.kelas10.matematika');
    });

    Route::get('/categories/10/kimia', function () {
        return view('categories.kelas10.kimia');
    });

    Route::get('/categories/10/biologi', function () {
        return view('categories.kelas10.biologi');
    });

    Route::get('/categories/10/indonesia', function () {
        return view('categories.kelas10.indonesia');
    });

    Route::get('/categories/10/inggris', function () {
        return view('categories.kelas10.inggris');
    });

    Route::get('/categories/11/fisika', function () {
        return view('categories.kelas11.fisika');
    });

    Route::get('/categories/11/matematika', function () {
        return view('categories.kelas11.matematika');
    });

    Route::get('/categories/11/kimia', function () {
        return view('categories.kelas11.kimia');
    });

    Route::get('/categories/11/biologi', function () {
        return view('categories.kelas11.biologi');
    });

    Route::get('/categories/11/indonesia', function () {
        return view('categories.kelas11.indonesia');
    });

    Route::get('/categories/11/inggris', function () {
        return view('categories.kelas11.inggris');
    });

    Route::get('/categories/12/fisika', function () {
        return view('categories.kelas12.fisika');
    });

    Route::get('/categories/12/matematika', function () {
        return view('categories.kelas12.matematika');
    });

    Route::get('/categories/12/kimia', function () {
        return view('categories.kelas12.kimia');
    });

    Route::get('/categories/12/biologi', function () {
        return view('categories.kelas12.biologi');
    });

    Route::get('/categories/12/indonesia', function () {
        return view('categories.kelas12.indonesia');
    });

    Route::get('/categories/12/inggris', function () {
        return view('categories.kelas12.inggris');
    });
});


