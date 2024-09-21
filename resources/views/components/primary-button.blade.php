<button {{ $attributes->merge(['type' => 'submit', 'class' => ' items-center px-4 py-2 bg-[#3BBD9C] border border-transparent rounded-lg font-semibold text-sm lg:text-base text-white  hover:bg-[#1b5546] focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-[#1b5546] focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
