<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function joinCourse(Request $request) {
        $course = Course::where('id', $request->id)->first();

        auth('student')->user()->courses()->attach($course);

        return redirect()->back();
    }
}
