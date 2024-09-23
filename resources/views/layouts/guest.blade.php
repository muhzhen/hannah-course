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
    <body class="flex flex-col justify-between h-screen">


            <div class="w-full bg-white">
                <div class="pt-7 px-6 lg:px-[530px] lg:pt-[88px] lg:min-w-[1024px] h-full">
                    <div class="flex justify-center mb-7">
                        <a href="/">
                            <img class="w-36" src="{{ asset('images/hannahLogo.png') }}" alt="Logo">
                            {{-- <x-application-logo class="w-20 h-20 text-gray-500 fill-current" /> --}}
                        </a>
                    </div>
                    {{ $slot }}
                </div>
            </div>

        <div class="col-span-1">
            @include('layouts.footer')
        </div>
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
