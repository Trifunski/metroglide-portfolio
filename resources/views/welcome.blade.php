@extends('layouts.landing.landing')

@section('title', 'Home')

@section('content')

    <section class="sm:m-7">
        <div class="container mx-auto px-4">
            <div class="relative flex justify-center items-center my-10 lg:my-20">
                <img src="{{ asset('assets/images/banner-sneakers-1.webp') }}" alt="MetroGlide" class="rounded-lg w-full h-60 sm:h-80 lg:h-96 object-cover opacity-70">
                <span class="absolute text-white text-3xl sm:text-4xl lg:text-6xl font-bold text-center">
                    "Rule the Night, Glide the Light"
                </span>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center my-10 lg:my-20">
                <div class="w-full lg:w-4/5">
                    <h1 class="text-white text-3xl lg:text-4xl font-bold">New Arrivals</h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mt-5 cursor-pointer" id="sneakersContainer">
                        @foreach($sneakers as $sneaker)
                            <a href="{{ url('/sneaker/' . $sneaker->id) }}">
                                <div class="bg-white p-5 rounded-lg shadow-md">
                                    <img class="w-full h-60 object-contain" src="{{ asset($sneaker->sneaker_image) }}" alt="{{ $sneaker->sneaker_name }}">
                                    <h1 class="text-black text-lg font-bold mt-3">{{ $sneaker->sneaker_name }}</h1>
                                    <span class="text-black text-xl font-bold">€{{ $sneaker->sneaker_price }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <a href="/sneakers" class="flex justify-center mt-5">
                        <button class="bg-white font-semibold text-black rounded-sm px-4 py-2 hover:scale-105">View All</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-carousel />
@endsection