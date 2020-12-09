@extends('layouts.app')

@section('title')
    @yield('title')
@endsection

@section('layout')
<nav class="py-8 px-24 bg-white border-b-4 border-gray-300">
    <div class="container mx-auto flex justify-between">
    <ul class="flex items-center">
        <li>
            <a href="{{ route('course.ongoing') }}" class="py-3 hover:text-black hover:underline"> Back to Dashboard </a>
        </li>
    </ul>

    <ul class="flex items-center">
        <li>
            <p class="mr-12">{{ auth('student')->user()->fullname }}</p>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST" class="inline text-white bg-red-500 px-12 py-2 rounded-lg hover:bg-red-600">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </li>
    </ul>
    </div>
</nav>

<div class="px-24 py-12">
    <div class="w-full py-24 bg-yellow-200">
        <h1 class="font-bold text-6xl text-center">{{ $course->course_name }}</h1>
    </div>

    <div class="grid grid-cols-4 mt-8 bg-yellow-100">
        <div class="col-span-1 px-8 py-10 border-r-2 border-gray-300">
            <p class="bg-blue-500 py-2 px-8 text-white rounded-lg mb-4 text-center font-semibold mx-3">{{ $course->course_name }}</p>

            <!-- List Submateri -->
            <div class="grid grid-cols-4 gap-x-2 gap-y-1 auto-rows-fr">
                <!-- Submateri -->
                @if (Route::is('course.course'))
                    <p class="col-span-3 py-2 px-1 bg-gray-200 font-semibold text-sm">Sub Materi 1</p>
                    <p class="col-span-1 py-2 px-1 bg-gray-200 break-all text-red-500 text-xs text-center font-semibold">On Going</p>

                    <!-- Submateri -->
                    <p class="col-span-3 py-2 px-1 bg-gray-200 font-semibold text-sm">Quiz 1</p>
                    <p class="col-span-1 py-2 px-1 bg-gray-200 break-all text-red-500 text-xs text-center font-semibold">Not taken</p>
                @else
                    <p class="col-span-3 py-2 px-1 bg-gray-200 font-semibold text-sm">Sub Materi 1</p>
                    <p class="col-span-1 py-2 px-1 bg-gray-200 text-center"><i class="fas fa-check text-green-500"></i></p>

                    <!-- Submateri -->
                    <p class="col-span-3 py-2 px-1 bg-gray-200 font-semibold text-sm">Quiz 1</p>
                    <p class="col-span-1 py-2 px-1 bg-gray-200 break-all text-red-500 text-xs text-center font-semibold">On Going</p>

                @endif
            </div>
        </div>
        <div class="col-span-3 px-8 py-10">

            @yield('content')
        </div>
    </div>
</div>

@endsection
