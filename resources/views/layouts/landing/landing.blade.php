<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metroglide - @yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
  </head>
  <body class="bg-black">

    <nav class="bg-black pt-4 sm:m-5" id="up">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a href="/">
                    <img src="{{ asset('assets/logo/logo.png') }}" alt="logo" class="w-20 h-20 sm:w-24 sm:h-24">
                </a>
            </div>
            <ul class="flex items-center space-x-4 border border-y-white border-x-black">
                <li class="p-5 text-decoration-red"><a href="/" class="text-white">Home</a></li>
                <li class="p-5 text-decoration-red"><a href="/sneakers" class="text-white">Sneakers</a></li>
            </ul>
            <div class="flex gap-3 items-center">

                @if (Auth::check())
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="bg-white font-semibold text-black px-4 py-2 rounded-md hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2">Logout</button>
                    </form>
                @else
                    <a href="/login"><button class="bg-white font-semibold text-black px-4 py-2 rounded-md hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2">Login</button></a>
                @endif

                <a href="/cart">
                    <div class="relative" style="display: inline-block;">
                        <x-heroicon-o-shopping-bag id="cart-icon" class="w-6 h-6 cursor-pointer text-white hover:scale-110"></x-heroicon-o-shopping-bag>
                        @if(session('cart'))
                            @php
                                $cartCount = array_sum(array_column(session('cart'), 'quantity'));
                            @endphp
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white rounded-full text-xs w-4 h-4 flex items-center justify-center">{{ $cartCount }}</span>
                        @endif
                    </div>
                </a>

            </div>
        </div>
    </nav>
    
    @yield('content')

    <footer class="sm:m-10">
        <div class="bg-black text-white py-8">
            <div class="container mx-auto px-4">
                <div class="flex flex-col sm:flex-row justify-between">
                    <div class="mb-6 sm:mb-0">
                        <h1 class="text-2xl font-bold pb-3">MetroGlide</h1>
                        <p class="text-sm">© 2024 MetroGlide. <br>All rights reserved.</p>
                    </div>
                    <div class="mb-6 sm:mb-0">
                        <h1 class="text-2xl font-bold pb-3">Contact Us</h1>
                        <p class="text-sm">
                            <span>Phone: +34 555 55 55 55</span><br>
                            <span>Email: trifunski@example.com </span>
                        </p>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold pb-3">Follow Us</h1>
                        <div class="flex gap-3">
                            <a href="" class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M41,4h-32c-2.76,0 -5,2.24 -5,5v32c0,2.76 2.24,5 5,5h32c2.76,0 5,-2.24 5,-5v-32c0,-2.76 -2.24,-5 -5,-5zM37,19h-2c-2.14,0 -3,0.5 -3,2v3h5l-1,5h-4v15h-5v-15h-4v-5h4v-3c0,-4 2,-7 6,-7c2.9,0 4,1 4,1z"></path></g></g>
                                </svg>
                            </a>
                            <a href="" class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M11,4c-3.866,0 -7,3.134 -7,7v28c0,3.866 3.134,7 7,7h28c3.866,0 7,-3.134 7,-7v-28c0,-3.866 -3.134,-7 -7,-7zM13.08594,13h7.9375l5.63672,8.00977l6.83984,-8.00977h2.5l-8.21094,9.61328l10.125,14.38672h-7.93555l-6.54102,-9.29297l-7.9375,9.29297h-2.5l9.30859,-10.89648zM16.91406,15l14.10742,20h3.06445l-14.10742,-20z"></path></g></g>
                                </svg>
                            </a>
                            <a href="" class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(4,4)"><path d="M21.58008,7c-8.039,0 -14.58008,6.54494 -14.58008,14.58594v20.83203c0,8.04 6.54494,14.58203 14.58594,14.58203h20.83203c8.04,0 14.58203,-6.54494 14.58203,-14.58594v-20.83398c0,-8.039 -6.54494,-14.58008 -14.58594,-14.58008zM47,15c1.104,0 2,0.896 2,2c0,1.104 -0.896,2 -2,2c-1.104,0 -2,-0.896 -2,-2c0,-1.104 0.896,-2 2,-2zM32,19c7.17,0 13,5.83 13,13c0,7.17 -5.831,13 -13,13c-7.17,0 -13,-5.831 -13,-13c0,-7.169 5.83,-13 13,-13zM32,23c-4.971,0 -9,4.029 -9,9c0,4.971 4.029,9 9,9c4.971,0 9,-4.029 9,-9c0,-4.971 -4.029,-9 -9,-9z"></path></g></g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

  </body>
</html>