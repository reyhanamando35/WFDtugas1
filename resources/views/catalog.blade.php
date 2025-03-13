@extends('layouts.layout')

@section('title', 'Catalog')

@section('content')
<div class="p-10">
    <div class="p-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="max-h-md bg-white border border-gray-200 rounded-lg shadow ">
                <a href="#">
                    <img class="rounded-t-lg w-full h-80 object-cover" src="rumah1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Rumah Ngagel Jaya</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">
                            Rumah keren dengan sangat
                        </p>
                    <p class="mb-3 font-bold text-gray-700 ">
                        Rp 1.600.000.000
                    </p>
                </div>
            </div>
            <div class="max-h-md bg-white border border-gray-200 rounded-lg shadow ">
                <a href="#">
                    <img class="rounded-t-lg w-full h-80 object-cover" src="rumah2.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Rumah Royal Residence</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">
                        Rumah guedhe soro
                    </p>
                    <p class="mb-3 font-bold text-gray-700 ">
                        Rp 2.000.000.000
                    </p>
                </div>
            </div>   
            <div class="max-h-md bg-white border border-gray-200 rounded-lg shadow ">
                <a href="#">
                    <img class="rounded-t-lg w-full h-80 object-cover" src="rumah3.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Rumah Royal Residence</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">
                        Rumah besar dan luas
                    </p>
                    <p class="mb-3 font-bold text-gray-700 ">
                        Rp 1.000.000.000
                    </p>
                </div>
            </div>  
            <div class="max-h-md bg-white border border-gray-200 rounded-lg shadow ">
                <a href="#">
                    <img class="rounded-t-lg w-full h-80 object-cover" src="rumah4.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Rumah Royal Residence</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">
                        Rumah cukup besar 
                    </p>
                    <p class="mb-3 font-bold text-gray-700 ">
                        Rp 4.000.000.000
                    </p>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection