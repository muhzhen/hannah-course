@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>Kredensial yang diberikan tidak dapat ditemukan.</li>
        @endforeach
    </ul>
@endif
