@extends('layouts.landing.landing')

@section('title', 'Sneakers')

@section('content')
    
    <section class="bg-black py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row justify-between items-start">
                <!-- Inicio del contenedor del formulario de filtros -->
                <form id="filterForm" class="w-full lg:w-1/4 bg-black border-y p-5 rounded-lg mb-10 lg:mb-0" action="{{ route('sneakers') }}" method="GET">
                    <h2 class="text-white text-lg font-semibold mb-4">Filters</h2>

                    <!-- Controles de marca -->
                    <div class="mb-4">
                        <div id="accordion-flush-brands" data-accordion="collapse" data-active-classes="text-gray-100" data-inactive-classes="text-gray-100">
                            <h2 id="accordion-flush-heading-1">
                                <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-white border-b gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                                    <span>Brands</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                                <div id="containerBrands" class="py-5 border-b">
                                    <!-- Marcas se cargarán aquí -->
                                    @foreach($brands as $brand)
                                        <label class="block text-gray-300 mb-2">
                                            <input type="checkbox" class="mr-2" name="brands[]" value="{{ $brand->id }}" {{ in_array($brand->id, request()->brands ?? []) ? 'checked' : '' }}>
                                            {{ $brand->brand_name }}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controles de tamaño -->
                    <div class="mb-4">
                        <div id="accordion-flush-size" data-accordion="collapse" data-active-classes="text-gray-100" data-inactive-classes="text-gray-100">
                            <h2 id="accordion-flush-heading-2">
                                <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-white border-b gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="true" aria-controls="accordion-flush-body-2">
                                    <span>Sizes</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                                <div id="containerSizes" class="flex flex-wrap py-5 border-b">
                                    <!-- Tamaños se cargarán aquí -->
                                    @foreach($sizes as $size)
                                        <div class="w-1/2 sm:w-1/4 lg:w-1/3 mb-2">
                                            <label class="block text-gray-300">
                                                <input type="checkbox" class="mr-2" name="sizes[]" value="{{ $size->id }}" {{ in_array($size->id, request()->sizes ?? []) ? 'checked' : '' }}>
                                                {{ $size->size_value }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Botón para aplicar los filtros -->
                    <button id="filterButton" type="submit" class="bg-white font-semibold text-black mt-2 px-4 py-2 rounded-md hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2">Apply Filters</button>
                </form>

                <!-- Contenedor principal para mostrar sneakers -->
                <div class="w-full lg:w-3/4 lg:pl-5">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 cursor-pointer" id="sneakersContainer">
                        <!-- Sneakers se cargarán aquí -->
                        @foreach($sneakers as $sneaker)
                            <div class="m-2 bg-white rounded-lg overflow-hidden shadow-lg hover:scale-105">
                                <a href="{{ url('/sneaker/' . $sneaker->id) }}" class="block w-full h-full">
                                    <img src="{{ asset($sneaker->sneaker_image) }}" class="w-full h-48 object-contain p-2" fetchpriority="high" loading="lazy" alt="${sneaker.Sneaker_Model}">
                                    <div class="p-4">
                                        <h5 class="text-xl font-bold text-gray-900">{{ $sneaker->sneaker_name }}</h5>
                                    </div>
                                    <div class="px-4 pb-2">
                                        <p class="text-gray-700 text-base">{{ $sneaker->brand->brand_name }}</p>
                                        <p class="text-gray-900 font-semibold">€{{ $sneaker->sneaker_price }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection