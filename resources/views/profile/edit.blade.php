<x-app-layout>
    <div class="fixed top-0 left-0 right-0 px-4 py-4 lg:px-12 lg:py-6 border-b-[1px] border-slate-100 bg-white z-50">
        @include('layouts.navigasi')
    </div>

    <div class="px-4 pt-[72px] lg:pt-24 lg:px-10">
        <div class="grid grid-cols-1 gap-4 py-4">
            <div class="px-4 py-2 bg-white rounded-xl sm:p-4 sm:rounded-lg lg:mx-96">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{route('dashboard')}}" class="inline-flex items-center text-sm font-medium text-slate-400 hover:text-[#3CBC9C]">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                            </svg>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <div class="text-sm font-medium text-slate-300 ms-1 md:ms-2 ">Profile</div>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="p-4 bg-white border border-slate-100 rounded-xl sm:p-8 sm:rounded-lg lg:mx-96">
                <div class="w-full">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 bg-white border border-slate-100 rounded-xl sm:p-8 sm:rounded-lg lg:mx-96">
                <div class="w-full">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6">
        @include('layouts.footer')
    </div>
</x-app-layout>
