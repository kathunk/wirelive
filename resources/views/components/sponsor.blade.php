@props([
    'name',
    'url',
    'tier' => 'community'
])

@php
    $svgPath = "/img/{$name}-logo.svg";

    $heightClasses = match($tier) {
        'platinum' => 'h-40',
        'gold' => 'h-32 xs:h-37.25 md:h-32',
        'community' => 'h-24',
        default => 'h-24'
    };
@endphp

<div class="bg-[#dad1c81a] p-6 flex items-center justify-center">
    <div class="text-center">
        <a href="{{ $url }}" target="_blank" rel="noopener noreferrer" class="group">
            <img src="{{ $svgPath }}" alt="{{ ucfirst($name) }}" class="{{ $heightClasses }} mx-auto transition-transform group-hover:scale-105" />
        </a>
    </div>
</div>
