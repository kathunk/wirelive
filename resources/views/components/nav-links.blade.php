@props([
    'fun' => false
])
@php
    $textClasses = $fun ? 'text-plum' : 'text-fossil';
    $buttonClasses = $fun ? 'bg-cobalt text-fossil' : 'bg-fossil text-night-rider';
    $linkClasses = $textClasses . ' text-sm font-medium hover:opacity-70 transition-opacity duration-200';
@endphp

<a href="#speakers" class="{{ $linkClasses }}">
    Speakers
</a>
<x-icons.svg.dashed-lines class="lg:hidden w-full h-4 {{ $textClasses }}" />
<a href="#schedule" class="{{ $linkClasses }}">
    Schedule
</a>
<x-icons.svg.dashed-lines class="lg:hidden w-full h-4 {{ $textClasses }}" />
<a href="#location" class="{{ $linkClasses }}">
    Location
</a>
<x-icons.svg.dashed-lines class="lg:hidden w-full h-4 {{ $textClasses }}" />
<a href="#sponsors" class="{{ $linkClasses }}">
    Sponsors
</a>
<x-icons.svg.dashed-lines class="lg:hidden w-full h-4 {{ $textClasses }}" />

<div class="button-wrapper">
    <div class="top-line"></div>
    <div class="bottom-line"></div>
    <div class="left-arrow-top"></div>
    <div class="left-arrow-bottom"></div>
    <div class="right-arrow-top"></div>
    <div class="right-arrow-bottom"></div>
    <a href="https://luma.com/bbpxn8k2" target="_blank" class="arrow-button {{ $buttonClasses }} text-sm font-medium px-6 py-2 hover:opacity-70 transition-opacity duration-200">
        BUY TICKETS NOW
    </a>
</div>
