<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

// Auth
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

// Students
Route::get('/courses/ongoing', function () {
    return view('student.courses-ongoing');
});

// Teacher
Route::get('/teacher/register', function () {
    return view('teacher.register');
});

