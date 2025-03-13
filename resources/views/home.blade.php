@extends('layouts.layout')

@section('title', 'Home')

@section('content')
<style>
    @keyframes glow {
        0% { box-shadow: 0 0 8px rgba(255, 215, 0, 0.3); }
        50% { box-shadow: 0 0 20px rgba(255, 215, 0, 0.6); }
        100% { box-shadow: 0 0 8px rgba(255, 215, 0, 0.3); }
    }
    .animate-glow {
        animation: glow 2s infinite alternate;
    }

    .section-slider {
        display: flex;
        align-items: center;
        justify-content: space-around;
        margin-top: 0px;
        }

        .image-slider {
        position: relative;
        width: 100%;
        height: 100px;
        }

        .slide {
        width: 100%;
        position: absolute;
        }

        .slide img {
        width: 100%;
        border-radius: 15px;
        }

        .slide-text {
        position: absolute;
        bottom: 50px;
        left: 30px;
        background-color: rgba(220, 220, 220, 0.609);
        padding: 15px;
        border-radius: 10px;
        }

        .slide-text h2 {
        font-size: 30px;
        padding: 0;
        margin: 0;
        }

        .slide-text p {
        font-size: 15px;
        padding: 0;
        margin: 0;
        }

        .slider-btn {
            background-color: rgb(151, 151, 151);
            width: 12px;
            height: 12px;
            border-radius: 50%;
            cursor: pointer;
            margin: 0 5px;
            }

            .slide {
            clip-path: circle(0% at 0 50%);
            }

            .slide.active {
            clip-path: circle(150% at 0 50%);
            transition: 2s;
            transition-property: clip-path;
            }

            .slider-btn.active {
            background-color: rgb(38, 70, 83);
            }

            .utama {
            width: 100%;
            overflow: hidden;
            }

            .isi {
            width: 1000px;
            height: 500px;
            margin: auto;
            overflow: hidden;
            }

            .isi_gambar {
            width: 25%;
            float: left;
            }

            .isi2 {
            width: 400%;

            }

            .utama img {
            width: 100%;
            float: left;
            margin-top: 0px;
            }

</style>

<section id="home" class="bg-gradient-to-r from-amber-400 to-yellow-300 text-white z-10">
    <div class="h-auto py-6 md:py-3 flex flex-col md:flex-row mx-auto items-center justify-center" id="home">
        <div class="px-6 py-16 flex flex-col items-center md:items-start">
            <h1 class="font-bold text-5xl text-center md:text-left">Han Home</h1>
            <p class="text-sm text-center md:text-left">The best Property Seller in Surabaya</p>
        </div>
        <div class="px-6 flex justify-center items-center">
            <img src="{{ asset('hanhome.jpg') }}" 
                 class="h-48 w-48 p-1 object-cover rounded-full border-2 border-blue-300 shadow-md">
        </div>
    </div>
</section>

<section id="slider" class="section-slider p-6">
    <div class="utama">
        <div class="isi">
            <div class="isi2" id="slide">
                <div class="isi_gambar">
                    <img id="slide" class="object-cover" src="{{ asset('rumah1.jpg') }}">
                </div>
                <div class="isi_gambar">
                    <img id="slide" class="object-cover" src="{{ asset('rumah2.jpg') }}">
                </div>
                <div class="isi_gambar">
                    <img id="slide" class="object-cover" src="{{ asset('rumah3.jpg') }}">
                </div>
                <div class="isi_gambar">
                    <img id="slide" class="object-cover" src="{{ asset('rumah4.jpg') }}">
                </div>
            </div>

        </div>

    </div>
</section>


<div class="relative bg-gradient-to-r from-white to-gray-100 text-yellow-300 text-center py-5 font-extrabold text-2xl rounded-lg shadow-lg mt-10 mx-4 border-2 border-yellow-500 animate-glow">
    <p class="tracking-wide uppercase drop-shadow-lg">
        ✨ Only at <span class="text-yellow-400">HanHome</span> ✨  
    </p>
    <p class="text-sm text-yellow-200 mt-2 italic">
        🏃‍♂️ Temukan rumah impian Anda hanya di Han Home – solusi properti terbaik untuk setiap kebutuhan Anda!
    </p>
</div>

<script>
    var a = -100;
    setInterval(function () {
        if (a != 0) {
            slide = document.getElementById('slide');
            slide.style = "margin-left:" + a + "%;transition: 1s ease-in;";
            if (a == -300) {
                a = 0;
            } else {
                a = a + -100;
            }
            return a;

        } else {
            slide = document.getElementById('slide');
            slide.style = "margin-left:" + a + "%;";
            if (a == -300) {
                a = 0;
            } else {
                a = a + -100;
            }
            return a;
        }

    }, 4000);
</script>

@endsection
