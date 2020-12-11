@extends('layouts.course')

@section('title')
    {{ $course->course_name }}
@endsection

@section('content')
<h1 class="text-4xl font-semibold mb-10">{{ $course->course_name }} | Sub Materi 1</h1>

<video width="100%" height="500"  src="{{ asset('videos/placeholder.mp4') }}" controls>
</video>

<div class="w-full mt-10">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam possimus expedita labore amet nemo delectus omnis veritatis repellat eveniet dignissimos, molestias, rem exercitationem error libero atque odio odit totam temporibus quibusdam nam maiores harum. Rerum illum aliquid nulla repudiandae nemo sunt, eveniet voluptatum reprehenderit voluptas ullam adipisci sequi culpa tenetur consequuntur assumenda magnam temporibus? Sunt nam beatae impedit corporis nihil a provident illum eius, enim, quod inventore quam velit quo esse ab consequuntur cupiditate ea ratione optio earum quae eos. Facilis, et labore quod ea at earum iste veritatis eum sit ad obcaecati ipsum, odio minus, possimus illum ut temporibus!</p>
</div>

<div class="w-full flex justify-between mt-12">
    <a href="#" class="bg-blue-500 py-2 text-white rounded-lg text-center font-semibold w-1/6 hover:bg-blue-600">Previous</a>
    <a href="{{ route('course.quiz', $course->id) }}" class="bg-blue-500 py-2 text-white rounded-lg text-center font-semibold w-1/6 hover:bg-blue-600">Next</a>
</div>
@endsection
