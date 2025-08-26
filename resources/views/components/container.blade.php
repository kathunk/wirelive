@props([
    'class' => ''
])

<div class="max-w-[94.5rem] mx-auto px-4 md:px-6 lg:px-20 {{ $class }}">
    {{ $slot }}
</div>
