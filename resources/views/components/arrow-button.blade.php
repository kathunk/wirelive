@props([
])

<div class="button-wrapper">
    <div class="top-line"></div>
    <div class="bottom-line"></div>
    <div class="left-arrow-top"></div>
    <div class="left-arrow-bottom"></div>
    <div class="right-arrow-top"></div>
    <div class="right-arrow-bottom"></div>
    <a {{ $attributes }} @class(['arrow-button'])>
        {{ $slot }}
    </a>
</div>
