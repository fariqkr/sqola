<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function indexOngoing() {
        $courses = auth('student')
            ->user()
            ->courses()
            ->where('is_complete', false)
            ->get();

        return view('courses.ongoing', [
            'courses' => $courses
        ]);
    }

    public function indexComplete() {
        $courses = auth('student')
            ->user()
            ->courses()
            ->where('is_complete', true)
            ->get();

        return view('courses.complete', [
            'courses' => $courses
        ]);
    }
}
