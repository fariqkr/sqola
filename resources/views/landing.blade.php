@extends('layouts.web')

@section('title')
Home
@endsection

@section('content')

{{-- Home --}}
<section class="pt-8 pb-16 bg-pink-200 md:pt-8 px-8" id="home">
    <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center px-10">
    <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
        <h1 class="my-4 text-3xl md:text-5xl  font-bold leading-tight text-center md:text-left">Get Free Education</h1>
        <p class="text-base md:text-2xl mb-8 text-center md:text-left">Get Free educational and high quality education system to help you advance in your study at highschool period.</p>
        <a href="{{ route('register') }}">
            <button class="p-4 bg-blue-500 text-white rounded-lg hover:bg-blue-700">
                Sign Up Now
            </button>
        </a>
    </div>

    <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
        <img class="w-4/6 mx-auto lg:mr-0" src="http://www.pngall.com/wp-content/uploads/5/Learning-PNG-Free-Download.png">
    </div>
    </div>
</section>

{{-- Categories --}}
<section class="pt-8 pb-8 bg-white md:pt-8 px-8" id="categories">
    <div class="container mx-auto px-14" style="display: grid; grid-template-columns: 1fr repeat(3, 4fr); grid-template-rows: repeat(2, 4fr); grid-column-gap: 48px; grid-row-gap: 48px;">
        <div class="bg-blue-500 rounded-md" style="grid-area: 1 / 1 / 3 / 2;">
            <p class="text-center text-white mx-auto py-56 font-bold text-4xl" style="writing-mode: vertical-rl; margin-left: auto; margin-right: auto;"> Categories </p>
        </div>
        <div class="bg-yellow-100 hover:bg-yellow-200" style="grid-area: 1 / 2 / 2 / 3; padding: 120px 0px;">
            <p class=" font-extrabold text-center italic text-2xl"> FISIKA </p>
        </div>
        <div class="bg-red-100 hover:bg-red-200" style="grid-area: 1 / 3 / 2 / 4; padding: 120px 0px;">
            <p class=" font-extrabold text-center italic text-2xl"> MATEMATIKA </p>
        </div>
        <div class="bg-blue-100 hover:bg-blue-200" style="grid-area: 1 / 4 / 2 / 5; padding: 120px 0px;">
            <p class=" font-extrabold text-center italic text-2xl"> KIMIA </p>
        </div>
        <div class="bg-green-100 hover:bg-green-200" style="grid-area: 2 / 2 / 3 / 3; padding: 120px 0px;">
            <p class=" font-extrabold text-center italic text-2xl"> BIOLOGI </p>
        </div>
        <div class="bg-pink-100 hover:bg-pink-200" style="grid-area: 2 / 3 / 3 / 4; padding: 120px 0px;">
            <p class=" font-extrabold text-center italic text-2xl"> BAHASA INDONESIA </p>
        </div>
        <div class="bg-purple-100 hover:bg-purple-200" style="grid-area: 2 / 4 / 3 / 5; padding: 120px 0px;">
            <p class=" font-extrabold text-center italic text-2xl"> BAHASA INGGRIS </p>
        </div>
    </div>
</section>

{{-- Testimonial --}}
<section class="pt-12 pb-16 bg-white md:pt-8 px-8" id="testimonial">
    <div class="container mx-auto items-center">
        <h1 class="my-4 px-11 text-3xl md:text-5xl  font-bold leading-tight text-center md:text-left"> Testimony </h1>
    </div>
    <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center px-10">
    <div class="w-full xl:w-2/5 py-6 overflow-y-hidden">
        <img class="w-4/6 lg:mr-0" src="https://teamrrq.com/assets/member/Kq6Q6_for%20web%20-%20lemon.png">
    </div>
    <div class="flex flex-col w-full xl:w-3/5 justify-center lg:items-start overflow-y-hidden">
        <h1 class="my-4 text-3xl md:text-5xl  font-bold leading-tight text-center md:text-left text-yellow-500">Ikhsan Lemon</h1>
        <p class="text-base md:text-2xl mb-8 text-center md:text-left">Belajar materi vektor di <span style="text-decoration: underline; text-decoration-color: cornflowerblue; text-decoration-style:solid">Sqola</span> sangat mengasyikkan. Di tengah kesibukan tourney, aku masih sempat mengejar materi Fisika. Terimakasih <span style="text-decoration: underline; text-decoration-color: cornflowerblue; text-decoration-style:solid">Sqola</span>!</p>
        <p class="text-base md:text-base mb-8 text-center md:text-left">SMAN Rembang Rawa Quo - Kelas 10</p>
    </div>
    </div>
</section>

{{-- Footer --}}
<section class="pt-8 pb-8 bg-gray-800 md:pt-8 px-8" id="contact">
    <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center px-10">
        <div class="xl:w-2/5">
            <h1 class="my-4 px-11 text-base text-white font-bold leading-tight text-center md:text-left"> Contact </h1>
            <h6 class="my-1 px-11 text-tiny  text-white text-center md:text-left"> Phone Number: +62-888-8888-888 </h6>
            <h6 class="my-1 px-11 text-tiny  text-white text-center md:text-left"> Email: contact@sqola.id </h6>
            <h6 class="my-1 px-11 text-tiny  text-white text-center md:text-left"> Fax: Sqola.id </h6>
        </div>
        <div class="xl:w-3/5">
            <h1 class="my-0 px-11 text-base text-white font-bold leading-tight text-center md:text-left"> About Us </h1>
            <h1 class="my-4 px-11 text-tiny text-white leading-tight text-center md:text-left"> Sqola offers free high-school level courses on various topics. We strive to educate students all around the world through e-Learning platform and digitalization. We believe internet would play a major role on shaping our current education on years to come.</h1>
        </div>
    </div>
</section>

@endsection
