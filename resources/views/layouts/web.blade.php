@extends('layouts.app')

@section('title')
    @yield('title')
@endsection

@section('layout')
{{-- Navigasi --}}
<nav class="py-6 bg-white border-b-4 border-gray-300">
    <div class="container mx-auto flex justify-between">
    <ul class="flex items-center">
        <li>
            <a href="/">
                <img src="{{asset('img/logo.PNG')}}" alt="Sqola" style="height: 45px;" class="mx-8">
            </a>
        </li>
        @if (Route::is('landing'))
            <li>
                <a href="#home" class="p-3 text-gray-500 hover:text-black hover:underline"> Home </a>
            </li>
            <li>
                <a href="#categories" class="p-3 text-gray-500 hover:text-black hover:underline"> Categories </a>
            </li>
            <li>
                <a href="#testimonial" class="p-3 text-gray-500 hover:text-black hover:underline"> Testimonial </a>
            </li>
            <li>
                <a href="#contact" class="p-3 text-gray-500 hover:text-black hover:underline"> Contact Us </a>
            </li>
        @endif
    </ul>

    <ul class="flex items-center">
        @if (auth('student')->check())
            <li>
                <a href="/" class="p-3 mx-1 text-blue-500 font-bold hover:text-blue-700">{{ auth('student')->user()->fullname }}</a>
            </li>
            <li>
                <form action="/" method="post" class="inline p-3 text-white bg-blue-500 rounded hover:bg-blue-700">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @else
            <li>
                <a href="{{ route('register.teacher') }}" class="p-3 mx-1 text-blue-500 font-bold hover:text-blue-700"> Become a Teacher </a>
            </li>
            @if (Route::is('landing'))
                <li>
                    <a href="{{ route('login') }}" class="p-3 text-white bg-blue-500 rounded hover:bg-blue-700 mr-3"> Login / Signup </a>
                </li>
            @elseif (Route::is('register.teacher'))
                <li>
                    <a href="{{ route('login') }}" class="p-3 text-white bg-blue-500 rounded hover:bg-blue-700 mr-3"> Login / Signup </a>
                </li>
            @endif
        @endif
    </ul>
    </div>
</nav>

@yield('content')
@endsection
