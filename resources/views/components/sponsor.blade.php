@props([
    'name',
    'url',
    'tier' => 'friend',
    'fun' => false,
    'png' => false,
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
    <a href="{{ $url }}" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-center w-full h-full">
        <div class="flex items-center justify-center {{ $heightClasses }} transition-transform group-hover:scale-105">
            @if($png)
                <img src="/img/sponsors/{{$name}}-logo.png" alt="{{ $name }}-logo" class="h-auto max-w-[360px] md:max-w-auto w-full object-contain {{ $imageFilter }}">
            @elseif (View::exists('components.' . $sponsor_component))
                <x-dynamic-component :component="$sponsor_component" :imageFilter="$imageFilter" />
            @else
                <div class="{{ $fun ? 'text-night-rider' : 'text-fossil' }} text-5xl">{{ ucfirst($name) }}</div>
            @endif
        </div>
    </a>
</div>
