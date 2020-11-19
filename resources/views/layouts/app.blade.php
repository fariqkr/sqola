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
    <nav class="mx-auto py-6 bg-white flex justify-between border-b-4 border-gray-300">
        <ul class="flex items-center">
            <li>
                <a href="/" class="py-3 px-14"> Sqola </a>
            </li>
            <li>
                <a href="#home" class="p-3 text-gray-300 hover:text-black hover:underline"> Home </a>
            </li>
            <li>
                <a href="#" class="p-3 text-gray-300 hover:text-black hover:underline"> Categories </a>
            </li>
            <li>
                <a href="#" class="p-3 text-gray-300 hover:text-black hover:underline"> Testimonial </a>
            </li>
            <li>
                <a href="#" class="p-3 text-gray-300 hover:text-black hover:underline"> Contact Us </a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li>
                    <a href="" class="p-3"> Teacher Name </a>
                </li>
                <li>
                    <form action="#" method="post" class="inline p-3">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li>
                <a href="#" class="p-3"> Become a Teacher </a>
                </li>
                <li>
                    <a href="#" class="p-3"> Login / Signup </a>
                </li>
            @endguest
        </ul>
    </nav>

    {{-- Home --}}
    <section class="container pt-8 md:pt-8 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center" id="home">	
		<!--Left-->
		<div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
			<h1 class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left">Get Free Education</h1>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left">Get Free educational and high quality education system to help you advance in your study at highschool period.</p>
            <button class="p-4 bg-blue-800 text-white rounded-lg">
                <a href="#" >Sign Up Now</a>
            </button>
		</div>
		
		<!--Right-->
		<div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
			<img class="w-4/6 mx-auto lg:mr-0" src="http://www.pngall.com/wp-content/uploads/5/Learning-PNG-Free-Download.png">
		</div>	
    </section>

</body>

</html>