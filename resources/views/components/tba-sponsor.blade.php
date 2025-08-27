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

    $textSize = match($tier) {
        'platinum', 'community' => 'text-xl',
        'friend' => 'text-base',
        default => 'text-base'
    };

    $bgColor = $fun ? 'bg-cobalt/20' : 'bg-[#dad1c81a]';
    $imageFilter = $fun ? 'invert' : '';
@endphp

<div class="{{ $bgColor }} p-6 flex items-center justify-center">
    <a href="mailto:events@wireable.dev" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-center w-full h-full">
        <div class="flex flex-col gap-3 items-center justify-center {{ $heightClasses }} transition-transform group-hover:scale-105">
            <span class="font-mono text-fossil text-center {{ $textSize }}">
                Interested in supporting?
            </span>
            <div class="text-nowrap px-4 py-1 relative bg-[url(/img/fun-colors.png)] bg-center bg-cover">
                <span class="font-mono text-base text-fossil mix-blend-difference">Become a sponsor</span>
            </div>
        </div>
    </a>
</div>
