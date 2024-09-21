<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Hannah Asa Indonesia') }}</title>

         <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
  /* Hilangkan scrollbar pada Chrome, Safari, dan Edge */
  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }

  /* Hilangkan scrollbar pada Firefox */
  .no-scrollbar {
    scrollbar-width: none;
  }
</style>
<body>
   <!-- Navigasi tetap berada di posisi saat di-scroll -->
    <div class="fixed top-0 left-0 right-0 px-4 py-4 lg:px-12 lg:py-6 border-b-[1px] border-slate-100 bg-white z-50">
        @include('layouts.navigasi')
    </div>

    <div class="grid grid-cols-1">
        <div class="col-span-1 h-fit">
            <div class="pt-8 px-4 md:px-0 lg:px-0 lg:pt-[calc(4rem+1px)] mt-8 lg:grid lg:h-full lg:gap-10 lg:grid-cols-12">
                <!-- Video Course Section -->
                <div class="w-full h-full py-8 lg:relative lg:col-span-7 lg:pl-12">
                    @include('layouts.videoCourse')
                </div>

                <!-- Sidebar User Section -->
                <div class="w-full lg:py-8 lg:col-span-5">
                    <div class="w-full lg:pr-[50px]">
                        <div class="w-full p-4 border h-fit lg:overflow-y-scroll lg:p-8 lg:h-screen border-slate-100 rounded-2xl lg:no-scrollbar">
                            @include('layouts.sidebarUser')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-1">
            @include('layouts.footer')
        </div>
    </div>

</body>
</html>
