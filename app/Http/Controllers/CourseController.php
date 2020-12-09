<?php

namespace App\Http\Controllers;

use App\Models\Course;
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

    public function showCourse(Course $course) {
        return view('courses.course', [
            'course' => $course
        ]);
    }

    public function showQuiz(Course $course) {
        return view('courses.quiz', [
            'course' => $course
        ]);
    }

    public function submitQuiz(Request $request, Course $course) {
        $user = auth('student')->user();
        $course_id = $course->id;

        $user->courses()->updateExistingPivot($course_id, [
            'is_complete' => true
        ]);

        return redirect()->route('course.ongoing');
    }
}
