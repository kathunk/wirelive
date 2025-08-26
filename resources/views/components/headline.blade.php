@props([
    'text' => null,
    'first' => null,
    'second' => null,
    'fun' => false,
    'onDark' => false,
    'onLight' => false,
    'compact' => false
])

@php
    $textColor = match (true) {
        $onLight => 'text-night-rider',
        $onDark => $fun ? 'text-plum' : 'text-fossil',
        default => $fun ? 'text-night-rider' : 'text-fossil',
    };
    $translateY = $compact ? 'translate-y-[0.10em]' : 'translate-y-[0.20em]';
@endphp

<h1 class="xl:text-headline lg:text-10xl md:text-9xl text-[18vw] leading-none font-normal {{ $textColor }} tracking-normal font-display uppercase {{ $translateY }} text-nowrap">
    @if($second)
        {{ $first }}<br />
        {{ $second }}
    @else
        {{ $text }}
    @endif
</h1>
