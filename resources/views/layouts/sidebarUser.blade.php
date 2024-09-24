<nav class="grid w-full grid-cols-1 gap-4 cursor-pointer">
    @php
        $counter = 1;
        $totalCourses = count($courses);
        $currentUrl = request()->route('url'); // Ambil parameter dari route
    @endphp

    <div class="flex items-center justify-between">
        <h1 class="text-lg font-bold lg:text-xl">Playlist Video</h1>
        <p class="text-sm text-[#94A3B8]">Total Video {{$totalCourses}}</p>
    </div>

    @foreach ($courses as $course )
        @php
            $isActive = ($course->url === $currentUrl); // Cek apakah URL saat ini sama dengan URL dari database
        @endphp
        <a href="{{ url('/dashboard/' . $course->url) }}">
            <div class="flex w-full gap-5 p-4 border rounded-2xl md:rounded-xl lg:rounded-3xl items-start
                        {{ $isActive ? 'bg-[#3ABF9C]' : 'border-slate-200' }}
                        {{ $isActive ? 'text-white' : 'hover:bg-[#2b9076]' }}
                        group">

                <div class="py-2">
                    <div class="w-10 h-10 lg:h-10 lg:w-10 flex justify-center rounded-full
                            {{ $isActive ? 'border-white border-2' : 'bg-[#3ABF9C]' }}">
                        <svg width="60%" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 3.00021V15.0002C4.49996 15.1337 4.53553 15.2647 4.60304 15.3798C4.67054 15.4949 4.76754 15.5899 4.88402 15.6551C5.0005 15.7202 5.13225 15.753 5.26566 15.7503C5.39908 15.7475 5.52934 15.7091 5.643 15.6392L15.393 9.63921C15.5022 9.57211 15.5924 9.47814 15.6549 9.36628C15.7175 9.25441 15.7503 9.12838 15.7503 9.00021C15.7503 8.87204 15.7175 8.74601 15.6549 8.63415C15.5924 8.52228 15.5022 8.42831 15.393 8.36121L5.643 2.36121C5.52934 2.29128 5.39908 2.25295 5.26566 2.25016C5.13225 2.24738 5.0005 2.28024 4.88402 2.34536C4.76754 2.41048 4.67054 2.50549 4.60304 2.62061C4.53553 2.73572 4.49996 2.86676 4.5 3.00021Z"
                        fill="{{ $isActive ? 'white' : 'white' }}"/>
                        </svg>
                    </div>
                </div>


                <div class="w-3/4">
                    <p class="text-xs lg:text-sm  group-hover:text-white {{ $isActive ? 'text-white' : 'text-[#94A3B8]' }}">
                        Pertemuan {{$counter}}
                    </p>
                    <h1 class="text-base font-semibold lg:text-lg group-hover:text-white">
                        {{ $course->judul }}
                    </h1>
                </div>
            </div>
        </a>

        @php $counter++; @endphp
    @endforeach
</nav>
