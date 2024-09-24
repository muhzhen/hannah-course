<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <!-- Toastify JS -->
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script type="module" crossorigin src="bundle.js"></script>

        <!-- Custom script to handle toasts -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Function to show toast
                function showToast(message, type = 'success') {
                    const toast = document.getElementById('divToast');
                    const toastMessage = toast.querySelector('.text-sm.font-normal');
                    const toastBackgroundColor = type === 'success' ? '' : '#e74c3c';

                    toastMessage.textContent = message;
                    toast.style.backgroundColor = toastBackgroundColor;

                    toast.classList.remove('hidden');
                    setTimeout(() => toast.classList.add('hidden'), 5000); // Hide after 5 seconds
                }

                // Show toast if there's a session status message
                @if(session('status'))
                    showToast("{{ session('status') }}");
                @endif

                // Add event listener to close button
                document.querySelectorAll('[data-dismiss-target]').forEach(button => {
                    button.addEventListener('click', function() {
                        const targetSelector = this.getAttribute('data-dismiss-target');
                        const target = document.querySelector(targetSelector);
                        if (target) {
                            target.classList.add('hidden');
                        }
                    });
                });
            });
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

    </body>
</html>
