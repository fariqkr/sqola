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


// Courses
Route::get('/courses/ongoing', function () {
    return view('courses.ongoing');
});

Route::get('/courses/complete', function () {
    return view('courses.complete');
});


// Teacher
Route::get('/teacher/register', function () {
    return view('teacher.register');
});

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

