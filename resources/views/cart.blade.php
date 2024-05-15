@extends('layouts.landing.landing')

@section('title', 'Cart')

@section('content')

    <div id="cartContainer" class="container mx-auto shadow-lg my-8 p-6 rounded-lg flex flex-col items-center">
        @if(session('cart'))
            @php
                $total = 0;
                $sizes = App\Models\Size::all()->keyBy('id');
            @endphp
            <div class="grid grid-cols-1 gap-6 w-full lg:w-3/4">
                @foreach(session('cart') as $key => $details)
                    @php
                        $total += $details['price'] * $details['quantity'];
                        $sizeValue = isset($sizes[$details['size_id']]) ? $sizes[$details['size_id']]->size_value : 'N/A';
                    @endphp
                    <div class="flex items-center bg-black text-white p-4 border rounded-lg shadow-md">
                        <img src="{{ asset($details['image']) }}" alt="{{ $details['name'] }}" class="h-24 w-auto rounded-lg mr-4">
                        <div class="flex flex-col justify-between w-full">
                            <div class="flex justify-between items-center">
                                <h2 class="text-lg font-bold">{{ $details['name'] }}</h2>
                                <form action="{{ route('cart.remove', $key) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-white font-semibold text-black text-sm px-3 py-1 rounded-md hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2">Delete</button>
                                </form>
                            </div>
                            <div class="flex justify-between items-center mt-2">
                                <div class="flex items-center">
                                    <span class="mr-3">Size: {{ $sizeValue }}</span>
                                    <form action="{{ route('cart.update', $key) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="number" name="quantity" class="quantity-input rounded-md text-black text-center w-16 py-1 px-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-white transition duration-300" value="{{ $details['quantity'] }}" min="1" onchange="this.form.submit()">

                                    </form>
                                </div>
                                <span class="font-semibold text-sm">€{{ $details['price'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-end items-center mt-6 w-full lg:w-3/4">
                <span class="font-semibold text-white mr-2">Total:</span>
                <span class="text-white text-xl font-bold">€{{ $total }}</span>
                <a href="#" id="checkoutButton" class="bg-white font-semibold text-black text-sm px-4 py-2 rounded-md hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 ml-3">Checkout</a>
            </div>
        @else
            <p class="text-white text-center">Your cart is empty</p>
        @endif
    </div>

@endsection
