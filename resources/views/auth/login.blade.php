<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" class="grid grid-cols-1 gap-6" action="{{ route('login') }}">
        @csrf

         <!-- tittle -->
         <div class="grid justify-between grid-cols-2">
            <h1 class="text-2xl font-bold">Login Akun</h1>
            <a class="flex flex-row-reverse items-center" href="{{ route('register') }}">
                <div class="flex flex-row items-center justify-end">
                    <p class="text-base text-right">Daftar Akun</p>
                </div>
            </a>
         </div>

        <div class="grid grid-cols-1">
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="email@example.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <div class="relative">
                    <x-text-input id="password" class="block w-full mt-1"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password"
                                    placeholder="••••••••••••••••"
                                    />

                    <!-- Icon show/hide password -->
                    <span class="absolute cursor-pointer inset-y-[9px] right-4" onclick="togglePasswordVisibility()">
                        <i id="togglePasswordIcon" class="text-gray-600 fa fa-eye"></i> <!-- Use FontAwesome or your icon library -->
                    </span>
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>



        <div class="grid grid-cols-2 place-content-center">
            <!-- Remember Me -->
            <div class="flex items-center">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="text-[#3BBD9C] border-gray-300 rounded shadow-sm focus:ring-[#3BBD9C]" name="remember">
                    <span class="text-base text-gray-600 ms-2">{{ __('Remember me') }}</span>
                </label>
            </div>

            {{-- <div class="flex items-center justify-end">
                @if (Route::has('password.request'))
                    <a class="text-base text-gray-600 font-bold rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#3BBD9C]" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div> --}}
        </div>


        <x-primary-button class="w-full">
                {{ __('Masuk') }}
        </x-primary-button>
    </form>
</x-guest-layout>
