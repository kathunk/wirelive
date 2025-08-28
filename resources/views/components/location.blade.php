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

        <div class="font-mono text-xl mb-12 {{ $textColor }}">
            The event will be hosted at Forbes Theater in the Aloft Buffalo Downtown Hotel. The theater is a one hundred year old ballroom attached to the main hotel which includes 2 restaurants, a rooftop bar, a boutique bowling alley, pool and fitness center.
        </div>


        <!-- Venue Content -->
        <div class="grid sm:grid-cols-4 sm:grid-rows-5 grid-cols-2 grid-rows-4 gap-4 mb-12">
            <div class="col-span-2 sm:row-span-3">
                <img
                    src="/img/locations/ballroom.png"
                    alt="Ballroom"
                    class="w-full h-full object-cover {{ $imageFilter }}"
                />
            </div>
            <div class="col-span-2 sm:row-span-2 sm:col-start-3">
                <img
                    src="/img/locations/bowling.png"
                    alt="Bowling"
                    class="w-full h-full object-cover {{ $imageFilter }}"
                />
            </div>
            <div class="col-span-2 sm:row-span-2 sm:col-start-1 sm:row-start-4">
                <img
                    src="/img/locations/suite.png"
                    alt="Suite"
                    class="w-full h-full object-cover {{ $imageFilter }}"
                />
            </div>
            <div class="col-span-2 sm:row-span-3 sm:col-start-3 sm:row-start-3">
                <img
                    src="/img/locations/bar.png"
                    alt="Bar"
                    class="w-full h-full object-cover {{ $imageFilter }}"
                />
            </div>
        </div>

        <!-- Buffalo Content -->
        <div class="font-mono text-xl mb-12 {{ $textColor }}">
            The city of Buffalo is the home of the Buffalo Bills, buffalo wings, and Caleb, the creator of Livewire (hehe). It’s a fun city with lots to do and see, and is only a 25 minute drive from Niagra Falls.
        </div>

        <div class="flex gap-x-6 h-full">
            <div class="grid grid-flow-col sm:grid-cols-5 grid-rows-3 sm:grid-rows-2 gap-4 w-full">
                <div class="relative col-span-5 sm:col-span-2">
                    <img
                        src="/img/locations/buffalo-art-gallery.png"
                        alt="Buffalo Art Gallery"
                        class="w-full h-full object-cover {{ $imageFilter }}"
                    />
                    {{-- <div class="absolute bottom-0 left-0 sm:-top-4 sm:bottom-auto sm:left-auto sm:-right-5 {{ $bgColor }} px-4 py-2">
                        <p class="text-sm font-medium {{ $contentTextColor }}">
                            I MEAN... LOOK AT THIS BUILDING
                        </p>
                    </div> --}}
                </div>
                <div class="relative col-span-5 sm:col-span-2">
                    <img
                        src="/img/locations/niagra.png"
                        alt="Niagara Falls"
                        class="w-full h-full object-cover rounded-lg {{ $imageFilter }}"
                    />
                    {{-- <div class="absolute bottom-0 left-0 sm:-bottom-5 sm:left-auto sm:-right-5 {{ $bgColor }} px-4 py-2">
                        <p class="text-sm font-medium {{ $contentTextColor }}">
                            ONLY 20 MIN AWAY
                        </p>
                    </div> --}}
                </div>
                <div class="relative col-span-5 sm:col-span-3 sm:row-span-2">
                    <img
                        src="/img/locations/buffalo-downtown.png"
                        alt="Buffalo Downtown"
                        class="w-full h-full object-cover {{ $imageFilter }}"
                    />
                    {{-- <div class="absolute bottom-0 left-0 sm:-bottom-5 sm:-left-5 {{ $bgColor }} px-4 py-2">
                        <p class="text-sm font-medium {{ $contentTextColor }}">
                            CALEB'S HOMETOWN AND HOME OF THE BUFFALO WINGS
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
    </x-container>
</section>
