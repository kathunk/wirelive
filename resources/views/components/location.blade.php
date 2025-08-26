@props([
    'fun' => false
])

@php
    $textColor = $fun ? 'text-plum' : 'text-fossil';
    $bgColor = $fun ? 'bg-cobalt' : 'bg-fossil';
    $contentTextColor = $fun ? 'text-fossil' : 'text-night-rider';
    $imageFilter = $fun ? 'invert' : '';
@endphp

<section class="py-16 mt-16" id="location">
    <x-container>
        <!-- Section Header -->
        <div class="text-left mb-12">
            <x-headline text="THE VENUE" fun="{{ $fun }}" />
        </div>

        <!-- Venue Content -->
        <div class="flex gap-x-6 h-full">
    <div class="grid grid-flow-col sm:grid-cols-5 grid-rows-3 sm:grid-rows-2 gap-4 w-full">
        <div class="relative col-span-5 sm:col-span-3 sm:row-span-2">
            <img
              src="/img/locations/buffalo-downtown.png"
              alt="Buffalo Downtown"
              class="w-full h-full object-cover {{ $imageFilter }}"
            />
            <div class="absolute bottom-0 left-0 sm:-bottom-5 sm:-left-5 {{ $bgColor }} px-4 py-2">
              <p class="text-sm font-medium {{ $contentTextColor }}">
                CALEB'S HOMETOWN AND HOME OF THE BUFFALO WINGS
              </p>
            </div>
        </div>
        <div class="relative col-span-5 sm:col-span-2">
            <img
              src="/img/locations/buffalo-art-gallery.png"
              alt="Buffalo Art Gallery"
              class="w-full h-full object-cover {{ $imageFilter }}"
            />
            <div class="absolute bottom-0 left-0 sm:-top-4 sm:bottom-auto sm:left-auto sm:-right-5 {{ $bgColor }} px-4 py-2">
              <p class="text-sm font-medium {{ $contentTextColor }}">
                I MEAN... LOOK AT THIS BUILDING
              </p>
            </div>
        </div>
        <div class="relative col-span-5 sm:col-span-2">
            <img
              src="/img/locations/niagra.png"
              alt="Niagara Falls"
              class="w-full h-full object-cover rounded-lg {{ $imageFilter }}"
            />
            <div class="absolute bottom-0 left-0 sm:-bottom-5 sm:left-auto sm:-right-5 {{ $bgColor }} px-4 py-2">
              <p class="text-sm font-medium {{ $contentTextColor }}">
                ONLY 20 MIN AWAY
              </p>
            </div>
        </div>
        <div>
        </div>
    </x-container>
</section>
