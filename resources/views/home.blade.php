@extends('layout')

@section('title', 'Home')

@section('content')
{{-- <style>
    @keyframes glow {
        0% { box-shadow: 0 0 8px rgba(255, 215, 0, 0.3); }
        50% { box-shadow: 0 0 20px rgba(255, 215, 0, 0.6); }
        100% { box-shadow: 0 0 8px rgba(255, 215, 0, 0.3); }
    }
    .animate-glow {
        animation: glow 2s infinite alternate;
    }
</style> --}}

<div class="w-full h-[500px] flex flex-col items-center justify-center bg-gradient-to-r from-gray-900 to-gray-700 text-white text-center px-4">
    <h1 class="text-5xl font-extrabold">Selamat Datang di <span class="text-yellow-400">LinMotors</span></h1>
    <p class="mt-3 text-lg text-gray-300 max-w-2xl">
        Jelajahi koleksi motor terbaik untuk meningkatkan gaya dan performa Anda.
        Temukan model terbaru dengan harga terbaik hanya di LinMotors!
    </p>
    <a href="/catalog" class="mt-6 inline-block bg-yellow-500 text-black font-semibold py-3 px-8 rounded-lg shadow-lg hover:bg-yellow-400 transition">
        Jelajahi Katalog
    </a>
</div>

<div x-data="{ current: 0, slides: ['Vario-160.png', 'XSR-155.png','Kawasaki-ninja-h2r.png'] }" class="relative w-full max-w-5xl mx-auto mt-10">
    <div class="overflow-hidden rounded-lg shadow-xl w-full h-72 relative flex justify-center items-center bg-white">
        <template x-for="(slide, index) in slides" :key="index">
            <img :src="'{{ asset('images') }}/' + slide" 
                class="absolute inset-0 w-full h-full object-contain transition-opacity duration-700"
                :class="{ 'opacity-0': current !== index, 'opacity-100': current === index }">
        </template>
    </div>

    <button @click="current = (current + slides.length - 1) % slides.length"
        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-900 text-white p-3 rounded-full hover:bg-gray-700 transition">
        &#10094;
    </button>
    <button @click="current = (current + 1) % slides.length"
        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-900 text-white p-3 rounded-full hover:bg-gray-700 transition">
        &#10095;
    </button>
</div>


<div class="relative bg-gradient-to-r from-gray-900 to-black text-yellow-300 text-center py-5 font-extrabold text-2xl rounded-lg shadow-lg mt-10 mx-4 border-2 border-yellow-500 animate-glow">
    <p class="tracking-wide uppercase drop-shadow-lg">
        ✨ Only at <span class="text-yellow-400">LinMotors</span> ✨  
    </p>
    <p class="text-sm text-yellow-200 mt-2 italic">
        🏃‍♂️ Hanya sampai akhir bulan! Buruan sebelum kehabisan!  
    </p>
</div>


@endsection
