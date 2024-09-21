<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Hannah Asa Indonesia') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


        <!-- Scripts -->
        @vite('resources/css/app.css')
    </head>
    <body class="grid h-screen grid-cols-1 font-sans text-gray-900 md:px-[150px] lg:px-0 lg:grid-cols-3">
        <div class="hidden col-span-1 md:block lg:block"></div>
        <div class="grid items-center bg-white">
            <div class="flex flex-col w-full gap-12 px-8 lg:px-8 h-fit">
                <div class="grid mb-6 place-content-center">
                    <a href="/">
                        <img class="w-36" src="{{ asset('images/hannahLogo.png') }}" alt="Logo">
                        {{-- <x-application-logo class="w-20 h-20 text-gray-500 fill-current" /> --}}
                    </a>
                </div>
                {{ $slot }}
            </div>
        </div>
        <div class="hidden col-span-1 md:block lg:block"></div>
    </body>

    <!-- JavaScript for toggling password visibility -->
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const togglePasswordIcon = document.getElementById('togglePasswordIcon');

            // Toggle the input type between password and text
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                togglePasswordIcon.classList.remove('fa-eye');
                togglePasswordIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                togglePasswordIcon.classList.remove('fa-eye-slash');
                togglePasswordIcon.classList.add('fa-eye');
            }
        }
    </script>
</html>
