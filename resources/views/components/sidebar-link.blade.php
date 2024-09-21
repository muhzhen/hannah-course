@props(['active','href'])

@php
    $classes = $active ? 'bg-blue-500 text-white' : 'text-gray-800 hover:bg-gray-100 hover:text-gray-900';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => "block px-4 py-2 $classes"]) }}>
    {{ $slot }}
</a>
