<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <title>Metroglide - Login</title>
    </head>
    <body class="bg-black text-white">

        <a href="/"><button class="fixed top-4 right-4 bg-white font-semibold text-black px-4 py-2 rounded-md hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2">Volver</button></a>

        <section class="bg-black text-white flex min-h-screen flex-col items-center pt-16 sm:justify-center sm:pt-0">
            <a href="#">
                <div class="text-foreground font-semibold text-2xl tracking-tighter mx-auto flex items-center gap-2">
                    Metroglide
                </div>
            </a>
            <div class="relative mt-12 w-full max-w-lg sm:mt-10">
                <div class="mx-5 border dark:border-b-white/50 dark:border-t-white/50 border-b-white/20 sm:border-t-white/20 rounded-lg border-white/20 border-l-white/20 border-r-white/20 sm:shadow-sm lg:rounded-xl lg:shadow-none">
                    <div class="flex flex-col p-6">
                        <h3 class="text-xl font-semibold leading-6 tracking-tighter">Login</h3>
                        <p class="mt-1.5 text-sm font-medium text-white/50">Welcome back, enter your credentials to continue.
                        </p>
                    </div>
                    <div class="p-6 pt-0">
                        <form id="loginForm" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                                <div class="flex justify-between">
                                    <label for="email" class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Email</label>
                                </div>
                                <input type="email" id="email" name="email" autocomplete="off" class="block w-full border-0 bg-transparent p-1 text-sm file:my-1 file:rounded-full file:border-0 file:bg-accent file:px-4 file:py-2 file:font-medium placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 sm:leading-7">
                            </div>
                            <div class="mt-4">
                                <div>
                                    <div class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                                        <div class="flex justify-between">
                                            <label for="password" class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Password</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="password" id="password" name="password" class="block w-full border-0 bg-transparent p-1 text-sm file:my-1 placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 focus:ring-teal-500 sm:leading-7 text-foreground">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 flex items-center justify-end gap-x-2">
                                <button class="font-semibold hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 inline-flex items-center justify-center rounded-md text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2" type="submit">Log in</button>
                            </div>

                            <div class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300 dark:before:border-neutral-500 dark:after:border-neutral-500">
                                <p class="mx-4 mb-0 text-center font-semibold dark:text-white">
                                    Or
                                </p>
                            </div>

                            <div class="mt-4">
                                <a href="/google-auth/redirect" class="w-full bg-black border border-white text-white font-semibold py-2 px-4 rounded-md text-center transition duration-300 ease-in-out transform hover:scale-105 flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="#4285F4" d="M23.494 12.275c0-.828-.074-1.616-.209-2.375H12v4.505h6.477c-.273 1.473-1.071 2.719-2.274 3.553v2.939h3.671c2.149-1.976 3.394-4.884 3.394-8.622z"/>
                                        <path fill="#34A853" d="M12 24c3.243 0 5.956-1.078 7.941-2.916l-3.671-2.939c-1.024.694-2.32 1.109-3.77 1.109-2.898 0-5.354-1.96-6.232-4.588H2.461v2.878C4.437 21.776 7.964 24 12 24z"/>
                                        <path fill="#FBBC05" d="M5.768 14.666C5.553 13.972 5.428 13.229 5.428 12.467s.125-1.505.34-2.199V7.39H2.461C1.779 8.838 1.42 10.57 1.42 12.467c0 1.897.358 3.629 1.041 5.077l3.307-2.878z"/>
                                        <path fill="#EA4335" d="M12 4.755c1.764 0 3.341.608 4.586 1.798l3.431-3.431C17.955.89 15.242 0 12 0 7.964 0 4.437 2.224 2.461 5.589l3.647 3.648C6.646 6.714 9.102 4.755 12 4.755z"/>
                                    </svg>
                                    Sign in with Google
                                </a>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </section>

        @if ($errors->any())
            <div id="error" class="fixed bottom-4 right-4 bg-red-500 text-white px-4 py-2 rounded-md transition duration-300">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <script>
                setTimeout(function() {
                    document.querySelector('#error').remove();
                }, 5000); // Remove the error message after 5 seconds
            </script>
        @endif
        
    </body>
</html>