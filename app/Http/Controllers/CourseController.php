<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function indexOngoing() {
        return view('courses.ongoing');
    }

    public function indexComplete() {
        return view('courses.complete');
    }
}
