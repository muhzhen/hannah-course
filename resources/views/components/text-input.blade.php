@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#3BBD9C] focus:ring-[#3BBD9C] rounded-md shadow-sm placeholder-gray-300']) !!}>
