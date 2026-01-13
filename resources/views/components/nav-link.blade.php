@props([
'active' => false,
'type' => 'a'
])

@php
$classes = ($active
? 'bg-gray-950/50 text-white'
: 'text-gray-300 hover:bg-white/5 hover:text-white'
) . ' rounded-md px-3 py-2 text-sm font-medium';
@endphp

@if ($type === 'button')
<button
    {{ $attributes }}
    class="{{ $classes }}"
    aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</button>
@else
<a
    {{ $attributes }}
    class="{{ $classes }}"
    aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>
@endif