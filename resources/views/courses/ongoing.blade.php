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
    <a href="#" class="w-full bg-yellow-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6">
        <span class="col-span-1 text-yellow-500 font-bold text-3xl border-r-2 text-center border-gray-300">Fisika</span>
        <span class="col-span-2 text-gray-600 font-semibold italic text-2xl text-center">Listrik Statis I</span>
    </a>

    <a href="#" class="w-full bg-red-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6">
        <span class="col-span-1 text-red-500 font-bold text-3xl border-r-2 text-center border-gray-300">Matematika</span>
        <span class="col-span-2 text-gray-600 font-semibold italic text-2xl text-center">Persamaan Linear Kuadrat</span>
    </a>

    <a href="#" class="w-full bg-blue-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6">
        <span class="col-span-1 text-blue-500 font-bold text-3xl border-r-2 text-center border-gray-300">Fisika</span>
        <span class="col-span-2 text-gray-600 font-semibold italic text-2xl text-center">Listrik Statis I</span>
    </a>

    <a href="#" class="w-full bg-green-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6">
        <span class="col-span-1 text-green-500 font-bold text-3xl border-r-2 text-center border-gray-300">Biologi</span>
        <span class="col-span-2 text-gray-600 font-semibold italic text-2xl text-center">Sistem Reproduksi</span>
    </a>

    <a href="#" class="w-full bg-pink-200 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6">
        <span class="col-span-1 text-pink-500 font-bold text-3xl border-r-2 text-center border-gray-300">Indonesia</span>
        <span class="col-span-2 text-gray-600 font-semibold italic text-2xl text-center">Resensi Nilai Fiksi dan Non Fiksi</span>
    </a>

    <a href="#" class="w-full bg-purple-200 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6">
        <span class="col-span-1 text-purple-500 font-bold text-3xl border-r-2 text-center border-gray-300">Inggris</span>
        <span class="col-span-2 text-gray-600 font-semibold italic text-2xl text-center">Procedure Text</span>
    </a>
</div>
@endsection
