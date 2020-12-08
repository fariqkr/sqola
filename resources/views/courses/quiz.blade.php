@extends('layouts.course')

@section('title')
    Course Name Quiz
@endsection

@section('content')
<h1 class="text-4xl font-semibold mb-10">Quiz Sub-materi</h1>

<!-- Questions -->
<form action="#" class="px-10 pb-8 bg-gray-200 w-full">
    <div class="pt-8">
        <p class="mb-2">1. Question 1</p>
        <div class="w-full bg-red-400 mb-1 px-2">
            <input type="radio" id="opt1" name="1" value="opt1" class="cursor-pointer">
            <label for="opt1" class="ml-1 cursor-pointer">answer A</label><br>
        </div>
        <div class="w-full bg-red-400 mb-1 px-2">
            <input type="radio" id="opt2" name="1" value="opt2" class="cursor-pointer">
            <label for="opt2" class="ml-1 cursor-pointer">answer B</label><br>
        </div>
        <div class="w-full bg-red-400 mb-1 px-2">
            <input type="radio" id="opt3" name="1" value="opt3" class="cursor-pointer">
            <label for="opt3" class="ml-1 cursor-pointer">answer C</label>
        </div>
    </div>

    <div class="pt-8">
        <p class="mb-2">2. Question 2</p>
        <div class="w-full bg-red-400 mb-1 px-2">
            <input type="radio" id="opt1" name="2" value="opt1" class="cursor-pointer">
            <label for="opt1" class="ml-1 cursor-pointer">answer A</label><br>
        </div>
        <div class="w-full bg-red-400 mb-1 px-2">
            <input type="radio" id="opt2" name="2" value="opt2" class="cursor-pointer">
            <label for="opt2" class="ml-1 cursor-pointer">answer B</label><br>
        </div>
        <div class="w-full bg-red-400 mb-1 px-2">
            <input type="radio" id="opt3" name="2" value="opt3" class="cursor-pointer">
            <label for="opt3" class="ml-1 cursor-pointer">answer C</label>
        </div>
    </div>

    <div class="flex justify-center">
        <input type="submit" value="Finish quiz" class="bg-green-500 py-2 text-white rounded-lg text-center font-semibold w-1/6 mt-12 mx-auto cursor-pointer hover:bg-green-600">
    </div>
</form>

<div class="w-full flex justify-between mt-12">
    <a href="#" class="bg-blue-500 py-2 text-white rounded-lg text-center font-semibold w-1/6 hover:bg-blue-600">Previous</a>
    <a href="#" class="bg-blue-500 py-2 text-white rounded-lg text-center font-semibold w-1/6 hover:bg-blue-600">Next</a>
</div>
@endsection