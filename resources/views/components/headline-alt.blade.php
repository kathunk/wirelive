@props([
    'text' => null,
    'first' => null,
    'second' => null,
    'plum' => false
])
@php
    $textColor = $plum ? 'text-[#58003F]' : 'text-fossil';
@endphp

<h1 class="lg:text-headline text-9xl leading-none font-normal {{ $textColor }} tracking-normal font-display uppercase translate-y-[0.10em]">
    @if($second)
        {{ $first }}<br />
        {{ $second }}
    @else
        {{ $text }}
    @endif
</h1>
