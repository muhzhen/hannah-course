@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>Ada yang salah, Periksa Kembali Inputan Anda</li>
        @endforeach
    </ul>
@endif
