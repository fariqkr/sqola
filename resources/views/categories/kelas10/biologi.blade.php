@extends('layouts.dashboard')

@section('title')
Categories
@endsection

@section('layout')
<div class="w-full flex">
    <!-- Sidebar -->
    <div class="w-2/12 h-screen flex flex-col items-center py-12 fixed top-0 left-0 z-10">
        <a href="/" class="px-3 mb-12"> 
            <img src="{{asset('img/logo.PNG')}}" alt="Sqola" style="height: 45px;" class="mx-8">
        </a>
        <a href="/" class="mx-3 px-10 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700 mb-10"> Join a Course </a>
        <a href="/courses/ongoing" class="my-2 py-2 w-full text-gray-400 hover:text-gray-800 hover:bg-gray-100 font-medium">
            <div class="mx-auto w-max">
                <i class="fas fa-book-reader mr-2"></i>
                <span>My Course</span>
            </div>
        </a>
        <a href="/categories/10/fisika" class="my-2 py-2 w-full border-r-4 border-blue-500 font-medium">
            <div class="mx-auto w-max">
                <i class="fas fa-th-large mr-2"></i>
                <span class="text-black">Categories</span>
            </div>
        </a>
    </div>

    <div class="w-7/12 flex flex-col items-center py-12 px-8 bg-gray-200" style="margin-left: 16.67%; margin-right: 25%">
        <h1 class="text-5xl px-5 font-bold text-gray-800 w-full mb-16">Categories</h1>

        <div class="px-5 flex justify-evenly w-1/2 mb-4">
            <a href="#" class="font-semibold underline">Kelas 10</a>
            <a href="/categories/11/fisika" class="font-semibold text-gray-500">Kelas 11</a>
            <a href="/categories/12/fisika" class="font-semibold text-gray-500">Kelas 12</a>
        </div>

        <div class="px-5 flex justify-evenly w-full mb-10">
            <a href="/categories/10/fisika" class="font-semibold text-gray-500">Fisika</a>
            <a href="/categories/10/matematika" class="font-semibold text-gray-500">Matematika</a>
            <a href="/categories/10/kimia" class="font-semibold text-gray-500">Kimia</a>
            <a href="/categories/10/biologi" class="font-semibold underline">Biologi</a>
            <a href="/categories/10/indonesia" class="font-semibold text-gray-500">B. Indonesia</a>
            <a href="/categories/10/inggris" class="font-semibold text-gray-500">B. Inggris</a>
        </div>

        <div class="flex flex-col w-full">
            <a href="#" class="w-full bg-green-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6">
                <span class="col-span-1 text-green-500 font-bold text-3xl border-r-2 text-center border-gray-300">Biologi</span>
                <span class="col-span-2 text-gray-600 font-semibold italic text-2xl text-center">Sistem Reproduksi</span>
            </a>

            <a href="#" class="w-full bg-green-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6">
                <span class="col-span-1 text-green-500 font-bold text-3xl border-r-2 text-center border-gray-300">Biologi</span>
                <span class="col-span-2 text-gray-600 font-semibold italic text-2xl text-center">Keanekaragaman Hayati</span>
            </a>

            <a href="#" class="w-full bg-green-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6">
                <span class="col-span-1 text-green-500 font-bold text-3xl border-r-2 text-center border-gray-300">Biologi</span>
                <span class="col-span-2 text-gray-600 font-semibold italic text-2xl text-center">Proses Daur Ulang</span>
            </a>

            <a href="#" class="w-full bg-green-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6">
                <span class="col-span-1 text-green-500 font-bold text-3xl border-r-2 text-center border-gray-300">Biologi</span>
                <span class="col-span-2 text-gray-600 font-semibold italic text-2xl text-center">Animalia</span>
            </a>

            <a href="#" class="w-full bg-green-100 border-2 border-gray-300 px-8 py-3 inline-grid grid-cols-3 justify-center items-center rounded-2xl mb-6">
                <span class="col-span-1 text-green-500 font-bold text-3xl border-r-2 text-center border-gray-300">Biologi</span>
                <span class="col-span-2 text-gray-600 font-semibold italic text-2xl text-center">Plantae</span>
            </a>
        </div>
    </div>

    <!-- Right Sidebar -->
    <div class="w-3/12 flex flex-col items-center py-12 fixed top-0 right-0 z-10">
        <h1 class="font-bold text-xl uppercase text-center mb-16">Nama User</h1>

        <!-- Courses in Progress -->
        <div class="w-full mb-10">
            <h1 class="text-lg font-semibold mb-4 px-8">Progress</h1>

            <!-- Courses List -->
            <div class="grid auto-rows-fr">
                <a href="#" class="py-2 px-8 grid grid-cols-6 items-center h-max hover:bg-gray-100">
                    <div class="bg-blue-100 flex justify-center items-center rounded-lg col-span-1" style="height: 45px; width: 45px;">
                        <i class="fas fa-pencil-alt text-blue-500"></i>
                    </div>
                    <div class="flex flex-col justify-center h-full col-span-3 mx-2">
                        <p class="font-semibold">Reaksi Redoks</p>
                        <p class="text-sm font-light text-gray-400">Kimia</p>
                    </div>
                    <div class="flex flex-col justify-center col-span-2">
                        <p class="text-sm font-light text-gray-400">x% to complete</p>
                        <div class="relative inline-block w-full bg-blue-100 h-2 rounded-xl">
                            <div class="absolute inline-block bg-blue-500 h-2 rounded-xl" style="width: 75%"></div>
                        </div>
                    </div>
                </a>

                <a href="#" class="py-2 px-8 grid grid-cols-6 items-center h-max hover:bg-gray-100">
                    <div class="bg-red-100 flex justify-center items-center rounded-lg col-span-1" style="height: 45px; width: 45px;">
                        <i class="fas fa-pencil-alt text-red-500"></i>
                    </div>
                    <div class="flex flex-col justify-center h-full col-span-3 mx-2">
                        <p class="font-semibold">Persamaan Linear Kuadrat</p>
                        <p class="text-sm font-light text-gray-400">Matematika</p>
                    </div>
                    <div class="flex flex-col justify-center col-span-2">
                        <p class="text-sm font-light text-gray-400">x% to complete</p>
                        <div class="relative inline-block w-full bg-red-100 h-2 rounded-xl">
                            <div class="absolute inline-block bg-red-500 h-2 rounded-xl" style="width: 25%"></div>
                        </div>
                    </div>
                </a>

                <a href="#" class="py-2 px-8 grid grid-cols-6 items-center h-max hover:bg-gray-100">
                    <div class="bg-green-100 flex justify-center items-center rounded-lg col-span-1" style="height: 45px; width: 45px;">
                        <i class="fas fa-pencil-alt text-green-500"></i>
                    </div>
                    <div class="flex flex-col justify-center h-full col-span-3 mx-2">
                        <p class="font-semibold">Sistem Reproduksi</p>
                        <p class="text-sm font-light text-gray-400">Biologi</p>
                    </div>
                    <div class="flex flex-col justify-center col-span-2">
                        <p class="text-sm font-light text-gray-400">x% to complete</p>
                        <div class="relative inline-block w-full bg-green-100 h-2 rounded-xl">
                            <div class="absolute inline-block bg-green-500 h-2 rounded-xl" style="width: 50%"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Last Question -->
        <div class="w-full mb-10">
            <h1 class="text-lg font-semibold mb-4 px-8">Last Question</h1>

            <!-- Questions List -->
            <div class="grid auto-rows-fr">
                <a href="#" class="py-2 px-8 grid grid-cols-6 items-center h-max hover:bg-gray-100">
                    <div class="bg-blue-100 flex justify-center items-center rounded-lg col-span-1" style="height: 45px; width: 45px;">
                        <i class="fas fa-pencil-alt text-blue-500"></i>
                    </div>
                    <div class="flex flex-col justify-center h-full col-span-5 ml-2">
                        <p class="font-semibold">Teori Atom</p>
                        <p class="text-sm font-light text-gray-400">27 Oct 2020, Tuesday</p>
                    </div>
                </a>

                <a href="#" class="py-2 px-8 grid grid-cols-6 items-center h-max hover:bg-gray-100">
                    <div class="bg-yellow-100 flex justify-center items-center rounded-lg col-span-1" style="height: 45px; width: 45px;">
                        <i class="fas fa-pencil-alt text-yellow-500"></i>
                    </div>
                    <div class="flex flex-col justify-center h-full col-span-5 ml-2">
                        <p class="font-semibold">GLBB</p>
                        <p class="text-sm font-light text-gray-400">27 Oct 2020, Tuesday</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection