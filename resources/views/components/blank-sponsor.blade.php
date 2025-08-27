@props([
    'name',
    'url',
    'tier' => 'friend',
    'fun' => false
])

@php
    $sponsor_component = "sponsors.{$name}-logo";

    $heightClasses = match($tier) {
        'platinum' => 'h-40',
        'community' => 'h-32 xs:h-37.25 md:h-32',
        'friend' => 'h-24',
        default => 'h-24'
    };

    $bgColor = $fun ? 'bg-cobalt/20' : 'bg-[#dad1c81a]';
    $imageFilter = $fun ? 'invert' : '';
@endphp

<div class="{{ $bgColor }} p-6 flex items-center justify-center">
    <div class="group flex items-center justify-center w-full h-full">
        <div class="flex items-center justify-center {{ $heightClasses }} transition-transform group-hover:scale-105">
        </div>
    </div>
</div>
