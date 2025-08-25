@props([
    'text' => null,
    'first' => null,
    'second' => null,
    'plum' => false,
    'compact' => false
])
@php
    $textColor = $plum ? 'text-[#58003F]' : 'text-fossil';
    $translateY = $compact ? 'translate-y-[0.10em]' : 'translate-y-[0.20em]';
@endphp

<h1 class="xl:text-headline lg:text-10xl md:text-9xl sm:text-8xl xs:text-7xl text-5xl leading-none font-normal {{ $textColor }} tracking-normal font-display uppercase {{ $translateY }} text-nowrap">
    @if($second)
        {{ $first }}<br />
        {{ $second }}
    @else
        {{ $text }}
    @endif
</h1>
