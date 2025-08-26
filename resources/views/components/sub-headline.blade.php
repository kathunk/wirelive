@props([
    'text' => null,
    'first' => null,
    'second' => null,
    'fun' => false,
    'onDark' => false,
    'onLight' => false,
])

@php
    $textColor = match (true) {
        $onLight => $fun ? 'text-fossil' : 'text-night-rider',
        $onDark => $fun ? 'text-plum' : 'text-fossil',
        default => $fun ? 'text-night-rider' : 'text-fossil',
    }
@endphp

<span class="{{ $textColor }} lg:text-2xl md:text-xl sm:text-lg xs:text-base text-sm font-medium uppercase">
    @if($second)
        {{ $first }}<br />
        {{ $second }}
    @else
        {{ $text }}
    @endif
</span>
