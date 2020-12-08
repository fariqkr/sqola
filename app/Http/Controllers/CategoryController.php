<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $grade;
    private $subject;

    public function index($grade, $subject) {
        $this->grade = $grade;
        $this->subject = $subject;

        $courses = $this->buildCourses();
        $styles = $this->buildStyle();

        return view('categories.index', [
            'courses' => $courses,
            'styles' => $styles,
            'grade' => $grade,
            'category' => $subject
        ]);
    }

    private function buildCourses() {
        $coursesTaken = auth('student')->user()->courses;

        $ids = [];
        foreach ($coursesTaken as $course) {
            $ids[] = $course->id;
        }

        $courses = Course::where([
            'grade' => $this->grade,
            'category' => $this->subject
        ])->whereNotIn('id', $ids)->get();

        return $courses;
    }

    private function buildStyle() {
        switch ($this->subject) {
            case 'fisika':
                return [
                    'w-full bg-yellow-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6',
                    'col-span-1 text-yellow-500 font-bold text-3xl border-r-2 text-center border-gray-300'
                ];
                break;

            case 'matematika':
                return [
                    'w-full bg-red-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6',
                    'col-span-1 text-red-500 font-bold text-3xl border-r-2 text-center border-gray-300'
                ];
                break;

            case 'kimia':
                return [
                    'w-full bg-blue-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6',
                    'col-span-1 text-blue-500 font-bold text-3xl border-r-2 text-center border-gray-300'
                ];
                break;

            case 'biologi':
                return [
                    'w-full bg-green-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6',
                    'col-span-1 text-green-500 font-bold text-3xl border-r-2 text-center border-gray-300'
                ];
                break;

            case 'indonesia':
                return [
                    'w-full bg-pink-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6',
                    'col-span-1 text-pink-500 font-bold text-3xl border-r-2 text-center border-gray-300'
                ];
                break;

            case 'inggris':
                return [
                    'w-full bg-purple-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6',
                    'col-span-1 text-purple-500 font-bold text-3xl border-r-2 text-center border-gray-300'
                ];
                break;

            default:
                # code...
                break;
        }
    }
}
