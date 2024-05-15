@extends('layouts.landing.landing')

@section('title', 'Sneaker')

@section('content')

    <section class="text-white body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto" id="sneakerContainer">
            <div class="lg:w-4/5 mx-auto flex flex-col lg:flex-row justify-between">
                <img id="sneakerImage" class="lg:w-1/2 w-full lg:h-auto h-64 object-contain object-center rounded" src="{{ asset($sneakers->sneaker_image) }}" alt="Sneaker Image">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 id="sneakerName" class="text-3xl title-font font-bold mb-1">{{ $sneakers->sneaker_name }}</h1>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                        <div class="flex items-center w-full justify-between">
                            <div class="flex items-center">
                                <span class="mr-3">Size</span>
                                <select id="sizeList" class="rounded border appearance-none py-2 focus:outline-none focus:ring-2 focus:ring-white text-black pl-3 pr-10">
                                    @foreach($sizes as $size)
                                        <option value="{{ $size->size->id }}" data-stock="{{ $size->stock }}">{{ $size->size->size_value }}</option>
                                    @endforeach  
                                </select>
                            </div>
                            <span id="sneakerStock" class="flex items-center">Stock: <span id="stockValue" class="ml-2">{{ $sizes->first()->stock }}</span></span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span id="sneakerPrice" class="title-font font-medium text-2xl">{{ $sneakers->sneaker_price }}</span>
                        <form id="cartForm" action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $sneakers->id }}">
                            <input type="hidden" name="size_id" value="{{ $sizes->first()->size->id }}" id="selectedSize">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" id="addToCart" class="bg-white font-semibold text-black px-4 py-2 rounded-md hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <p id="sneakerDescription" class="leading-relaxed mt-6">{{ $sneakers->sneaker_description }}</p>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const sizeList = document.getElementById('sizeList');
        const stockValue = document.getElementById('stockValue');
        const selectedSize = document.getElementById('selectedSize');

        sizeList.addEventListener('change', function () {
            const selectedOption = sizeList.options[sizeList.selectedIndex];
            const stock = selectedOption.getAttribute('data-stock');
            stockValue.textContent = stock;
            selectedSize.value = selectedOption.value;
        });
    });
    </script>

@endsection