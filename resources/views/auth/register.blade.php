@extends('layouts.web')

@section('title')
Register
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
                    <a class="text-gray-600 font-extrabold text-center text-3xl inline mx-9" href="/login"> LOGIN </a>
                    <p class="text-black font-extrabold text-center text-3xl inline mx-9 "> | </p>
                    <a class="text-blck font-extrabold text-center text-3xl inline mx-9" href="/signup"> SIGN UP </a>
                </div>
                <div class="bg-white py-16 px-20">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" name="name" id="name" placeholder="Your name"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="nickname" class="sr-only">Name</label>
                            <input type="text" name="nickname" id="nickname" placeholder="Your nickname"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('nickname') border-red-500 @enderror" value="{{ old('nickname') }}">

                            @error('nickname')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

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

                        <div class="mb-4">
                            <label for="password_confirmation" class="sr-only">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">

                            @error('password_confirmation')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="bg-pink-600 text-white px-4 py-3 rounded font-medium w-full">Sign Up</button>
                        </div>
                        <div>
                            <p class="pt-12 text-gray-500">Have a skill to become a teacher? Come <a href="/teacher/register" class="underline text-black">join us</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
