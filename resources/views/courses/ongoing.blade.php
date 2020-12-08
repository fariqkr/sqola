@extends('layouts.dashboard')

@section('title')
My Courses
@endsection

@section('content')
<h1 class="text-5xl px-5 font-bold text-gray-800 w-full mb-16">My Courses</h1>

<div class="px-20 flex justify-evenly w-full mb-10">
    <a href="#" class="text-lg text-blue-500 underline">Ongoing</a>
    <a href="{{ route('course.complete') }}" class="text-lg text-gray-500">Complete</a>
</div>

<div class="flex flex-col w-full">
    @foreach ($courses as $course)
        <a href="#" class="w-full
            @if ($course->category == 'fisika')
            bg-yellow-100
            @elseif ($course->category == 'matematika')
            bg-red-100
            @elseif ($course->category == 'kimia')
            bg-blue-100
            @elseif ($course->category == 'biologi')
            bg-green-100
            @elseif ($course->category == 'indonesia')
            bg-pink-100
            @elseif ($course->category == 'inggris')
            bg-purple-100
            @endif
            border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6">
            <span class="col-span-1
            @if ($course->category == 'fisika')
            text-yellow-500
            @elseif ($course->category == 'matematika')
            text-red-500
            @elseif ($course->category == 'kimia')
            text-blue-500
            @elseif ($course->category == 'biologi')
            text-green-500
            @elseif ($course->category == 'indonesia')
            text-pink-500
            @elseif ($course->category == 'inggris')
            text-purple-500
            @endif
            font-bold text-3xl border-r-2 text-center border-gray-300">{{ ucwords($course->category) }}</span>
            <span class="col-span-2 text-gray-600 font-semibold italic text-2xl text-center">{{ $course->course_name }}</span>
        </a>
    @endforeach
</div>
@endsection
