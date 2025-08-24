@props([
    'text' => null,
    'first' => null,
    'second' => null,
    'red' => false
])
@php
    $textColor = $red ? 'text-[#58003F]' : 'text-fossil';
@endphp

<h1 class="text-headline leading-none font-normal {{ $textColor }} tracking-normal font-display uppercase translate-y-[0.20em]">
    @if($second)
        {{ $first }}<br />
        {{ $second }}
    @else
        {{ $text }}
    @endif
</h1>
