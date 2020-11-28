@extends('layouts.web')

@section('title')
Join as teacher
@endsection

@section('content')
<div class="bg-gradient-to-r from-pink-300 to-purple-400 h-full">
    <section class="pt-12 pb-16 md:pt-8 px-8 h-full" id="login">
        <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center px-10">
            <div class="w-full xl:w-7/12 py-6 overflow-y-hidden">
                <img class="w-5/6 lg:mr-0" src="{{ asset('img/teacher.png') }}">
            </div>
            <div class="flex flex-col w-full xl:w-5/12 justify-center overflow-y-hidden">
                <div class="bg-blue-500 px-4 py-8">
                    <h1 class="text-black font-extrabold text-center text-3xl mx-auto" href="#"> Join Us as a Teacher </h1>
                </div>
                <div class="bg-white py-8 px-20">
                    <p class="text-2xl">Send your CV to hr@sqola.co.id.</p>
                    <p class="text-2xl mb-12">We will inform you for further information</p>
                    <a href="/" class="text-5xl text-bold">&larr;</a>
                </div>
            </div>
        </div>	
    </section>
</div>
@endsection