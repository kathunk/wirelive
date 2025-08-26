@props([
    'fun' => false
])

@php
    $textColor = $fun ? 'text-plum' : 'text-fossil';
@endphp

<div class="flex items-center gap-3">
    <x-icons.svg.pink-plus-sign class="w-4.5 h-4.75" />
    <span class="xl:text-2xl lg:text-lg md:text-lg sm:text-base {{ $textColor }} uppercase">{{ $slot }}</span>
</div>
