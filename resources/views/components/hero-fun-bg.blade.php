@props([
    'fun' => false
])

@if($fun)
    <div class="absolute inset-0 z-[-1]">
        <img src="{{ Vite::asset('resources/images/fun-colors.png') }}" aria-hidden="true" class="w-full h-full object-cover absolute top-0 left-0">
        <img src="{{ Vite::asset('resources/images/fun-wires.png') }}" aria-hidden="true" class="w-full h-full object-cover absolute top-0 left-0 mix-blend-exclusion">
    </div>
    <div class="absolute bottom-2.5 inset-x-0 flex flex-col gap-2.5">
        <div class="w-full h-1.5 bg-fossil"></div>
        <div class="w-full h-1.5 bg-fossil"></div>
        <div class="w-full h-1.5 bg-fossil"></div>
    </div>
@endif
