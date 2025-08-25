@props([
    'text' => null,
    'first' => null,
    'second' => null,
    'onDark' => false,
    'onLight' => false,
])

@php
    $textColor = match (true) {
        $onLight => 'text-night-rider',
        $onDark => 'text-fossil',
        default => 'text-fossil',
    }
@endphp

<span class="{{ $textColor }} text-2xl md:text-xl sm:text-lg text-base font-medium uppercase">
    @if($second)
        {{ $first }}<br />
        {{ $second }}
    @else
        {{ $text }}
    @endif
</span>
