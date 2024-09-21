<x-guest-layout>
    <form method="POST" class="grid grid-cols-1 gap-6" action="{{ route('register') }}">
        @csrf

        <!-- tittle -->
         <div class="grid justify-between grid-cols-2">
            <h1 class="text-2xl font-bold">Daftar Akun</h1>
            <a class="flex flex-row-reverse items-center" href="{{ route('login') }}">
                <div class="flex flex-row items-center justify-end">
                    <p class="text-base text-right">Punya Akun? <span class="text-[#3CBC9C] font-semibold">Masuk<span/></p>
                </div>
            </a>
         </div>

        <div class="grid grid-cols-1">
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nama Lengkap" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="email@example.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <div class="relative">
                    <x-text-input id="password" class="block w-full mt-1"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password"
                                    placeholder="••••••••••••••••"
                                    />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <!-- Icon show/hide password -->
                    <span class="absolute cursor-pointer inset-y-[9px] right-4" onclick="togglePasswordVisibility()">
                        <i id="togglePasswordIcon" class="text-gray-600 fa fa-eye"></i> <!-- Use FontAwesome or your icon library -->
                    </span>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Ulangi Password')" />
                <x-text-input id="password_confirmation" class="block w-full mt-1"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="••••••••••••••••"
                                />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <x-primary-button class="w-full">
            {{ __('Register') }}
        </x-primary-button>

    </form>
</x-guest-layout>
