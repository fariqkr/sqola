<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sqola | E-Learning Platform</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-white">

    {{-- Navigasi --}}
    <nav class="py-6 bg-white border-b-4 border-gray-300">
        <div class="container mx-auto flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="/"> 
                    <img src="{{asset('img/logo.PNG')}}" alt="Sqola" style="height: 45px;" class="mx-8">
                </a>
            </li>
            <li>
                <a href="#home" class="p-3 text-gray-300 hover:text-black hover:underline"> Home </a>
            </li>
            <li>
                <a href="#categories" class="p-3 text-gray-300 hover:text-black hover:underline"> Categories </a>
            </li>
            <li>
                <a href="#testimonial" class="p-3 text-gray-300 hover:text-black hover:underline"> Testimonial </a>
            </li>
            <li>
                <a href="#contact" class="p-3 text-gray-300 hover:text-black hover:underline"> Contact Us </a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li>
                    <a href="/" class="p-3 mx-1 text-blue-500 font-bold hover:text-blue-700"> Teacher Name </a>
                </li>
                <li>
                    <form action="/" method="post" class="inline p-3 text-white bg-blue-500 rounded hover:bg-blue-700">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li>
                <a href="/" class="p-3 mx-1 text-blue-500 font-bold hover:text-blue-700"> Become a Teacher </a>
                </li>
                <li>
                    <a href="/" class="p-3 text-white bg-blue-500 rounded hover:bg-blue-700"> Login / Signup </a>
                </li>
            @endguest
        </ul>
        </div>
    </nav>

    @yield('content')
</body>

</html>