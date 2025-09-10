@props([
    'name',
    'title' => null,
    'imageSrc',
    'imageFilter' => '',
    'textColor' => 'text-fossil',
    'imageClasses' => ''
])

@php
    $displayTitle = $title ?? strtoupper($name);
@endphp

<div class="flex flex-col gap-3">
    <div class="relative overflow-hidden">
        <img
            class="w-full h-[368px] object-cover {{ $imageClasses }} {{ $imageFilter }}"
            src="{{ $imageSrc }}"
            alt="{{ $name }}"
        />
    </div>
    <h3 class="text-2xl font-medium {{ $textColor }}">{{ $displayTitle }}</h3>
    <p class="text-base {{ $textColor }}">{{ $slot }}</p>
</div>
