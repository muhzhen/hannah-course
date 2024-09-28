<div class="flex items-center justify-between">
    <a href="{{route('dashboard')}}">
        <img src="{{ asset('images/hannahLogo.png') }}" alt="hannahasalogo" class="h-[28px] md:h-[34px] lg:h-[34px]"/>
    </a>

    <div class="flex gap-2">

            <a href="{{route('profile.edit')}}">
                <div class="h-fit bg-slate-50 text-slate-500 hover:text-white hover:bg-[#2b9076] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 ">

                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                </svg>

                <span class="sr-only">Icon description</span>
            </div>
            </a>






        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class=" text-slate-500 hover:text-slate-50 bg-slate-50 hover:bg-[#2b9076]  focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                Logout
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                </svg>
            </button>
        </form>
    </div>
</div>
