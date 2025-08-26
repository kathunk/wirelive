@props([
    'name',
    'url',
    'tier' => 'community',
    'fun' => false
])

@php
    $svgPath = "/img/{$name}-logo.svg";

    $heightClasses = match($tier) {
        'platinum' => 'h-40',
        'gold' => 'h-32 xs:h-37.25 md:h-32',
        'community' => 'h-24',
        default => 'h-24'
    };

    $bgColor = $fun ? 'bg-cobalt/20' : 'bg-[#dad1c81a]';
    $imageFilter = $fun ? 'invert' : '';
@endphp

<div class="{{ $bgColor }} p-6 flex items-center justify-center">
    <div class="text-center">
        <a href="{{ $url }}" target="_blank" rel="noopener noreferrer" class="group">
            <img src="{{ $svgPath }}" alt="{{ ucfirst($name) }}" class="{{ $heightClasses }} mx-auto transition-transform group-hover:scale-105 {{ $imageFilter }}" />
        </a>
    </div>
</div>
