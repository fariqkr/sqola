<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($grade, $subject) {
        $coursesTaken = auth('student')->user()->courses;

        $ids = [];
        foreach ($coursesTaken as $course) {
            $ids[] = $course->id;
        }

        $courses = Course::where([
            'grade' => $grade,
            'category' => $subject
        ])->whereNotIn('id', $ids)->get();

        return view('categories.index', [
            'courses' => $courses
        ]);
    }
}
