@extends('layouts.dashboard')

@section('title')
My Courses
@endsection

@section('content')
<h1 class="text-5xl px-5 font-bold text-gray-800 w-full mb-16">My Courses</h1>

<div class="px-20 flex justify-evenly w-full mb-10">
    <a href="#" class="text-lg text-blue-500 underline">Ongoing</a>
    <a href="#" class="text-lg text-gray-500">Complete</a>
</div>


@endsection