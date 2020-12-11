@extends('layouts.web')

@section('title')
Log In
@endsection

@section('content')
<div class="bg-gradient-to-r from-pink-300 to-purple-400 h-full">
    <section class="pt-12 pb-16 md:pt-8 px-8 h-full" id="login">
        <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center px-10">
            <div class="w-full xl:w-7/12 py-6 overflow-y-hidden">
                <img class="w-5/6 lg:mr-0" src="http://www.pngall.com/wp-content/uploads/5/Learning-PNG-Free-Download.png">
            </div>
            <div class="flex flex-col w-full xl:w-5/12 justify-center overflow-y-hidden">
                <div class="bg-blue-500 px-4 py-8">
                    <a class="text-black font-extrabold text-center text-3xl inline mx-9" href="/login"> LOGIN </a>
                    <p class="text-black font-extrabold text-center text-3xl inline mx-9 "> | </p>
                    <a class="text-gray-600 font-extrabold text-center text-3xl inline mx-9" href="/register"> SIGN UP </a>
                </div>
                <div class="bg-white py-16 px-20">
                    @if (session('status'))
                        <div class="bg-red-400 p-4 rounded-lg mb-6 text-white text-center">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" name="email" id="email" placeholder="Email"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                            @error('email')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                            @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="bg-pink-600 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                        </div>
                        <div>
                            <p class="pt-12 text-gray-500">Have a skill to become a teacher? Come <a href="teacher/register" class="underline text-black">join us</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
