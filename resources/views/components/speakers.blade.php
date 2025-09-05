@props([
    'fun' => false
])

@php
    $textColor = $fun ? 'text-plum' : 'text-fossil';
    $linkColor = $fun ? 'text-cobalt hover:text-plum' : 'text-fossil hover:opacity-90';
    $imageFilter = $fun ? 'invert' : '';
@endphp

<section class="py-16 mt-16" id="speakers">
    <x-container>
        <!-- Section header -->
        <div class="text-left flex flex-col xl:flex-row xl:items-end justify-between mb-16 w-full gap-y-8 gap-x-16">
            <div class="xl:self-end">
                <x-headline text="The Speakers" fun="{{ $fun }}" />
            </div>
            <div class="flex flex-col justify-between gap-4 w-full xl:self-end">
                <span class="text-2xl {{ $textColor }}">MEMBERS OF THE COMMUNITY YOU KNOW AND LOVE</span>
                <div class="flex items-center gap-4 w-full">
                    <img class="min-w-0 flex-1 h-14 object-cover {{ $imageFilter }}" src="/img/group-1-2.png" alt="line" />
                    <img class="w-14 h-14 flex-shrink-0 {{ $imageFilter }}" src="/svg/arrow-down-left.svg" alt="checkmark" />
                </div>
            </div>
        </div>

        <div class="font-mono text-xl mb-16 {{ $textColor }}">
            We want everybody to leave with a fresh heap of Livewire knowledge and enthusiasm. We’ll have  10 minute “hot&#8209;tip” talks, full conference talks, and a keynote from Caleb Porzio where he will give a tour of Livewire 4 and tag a beta release live on-stage. You don’t want to miss it.
        </div>

        <!-- Speakers grid -->
        <div class="grid md:grid-cols-3 grid-cols-1 gap-8">
            <!-- Caleb Porzio -->
            <div class="flex flex-col gap-3">
                <div class="relative overflow-hidden">
                    <img class="w-full h-[368px] object-cover {{ $imageFilter }}" src="/img/speakers/caleb.png" alt="Caleb Porzio" />
                    {{-- <div class="absolute inset-0 bg-gradient-to-br from-red-500/20 to-orange-500/20 mix-blend-overlay"></div> --}}
                </div>
                <h3 class="text-2xl font-medium {{ $textColor }}">CALEB PORZIO</h3>
                <p class="text-base {{ $textColor }}">Creator of <a href="https://livewire.laravel.com" target="_blank">Livewire</a></p>
            </div>

            <!-- Daniel Coulbourne -->
            <div class="flex flex-col gap-3">
                <div class="relative overflow-hidden">
                    <img class="w-full h-[368px] object-cover {{ $imageFilter }}" src="/img/speakers/daniel.jpg" alt="Daniel Coulbourne" />
                    {{-- <div class="absolute inset-0 bg-gradient-to-br from-gray-500/20 to-gray-700/20 mix-blend-overlay"></div> --}}
                </div>
                <h3 class="text-2xl font-medium {{ $textColor }}">DANIEL COULBOURNE</h3>
                <p class="text-base {{ $textColor }}">Partner / Dev at Thunk</p>
            </div>

            <!-- John Drexler -->
            <div class="flex flex-col gap-3">
                <div class="relative overflow-hidden">
                    <img class="w-full h-[368px] object-cover {{ $imageFilter }}" src="/img/speakers/john.jpg" alt="John Drexler" />
                </div>
                <h3 class="text-2xl font-medium {{ $textColor }}">JOHN DREXLER</h3>
                <p class="text-base {{ $textColor }}">Partner / Product Manager at <a href="https://thunk.dev" target="_blank">Thunk</a></p>
            </div>

            <!-- Matt Stauffer -->
            <div class="flex flex-col gap-3">
                <div class="relative overflow-hidden">
                    <img class="w-full h-[368px] object-cover brightness-88 {{ $imageFilter }}" src="/img/speakers/matt.png" alt="Matt Stauffer" />
                </div>
                <h3 class="text-2xl font-medium {{ $textColor }}">Matt Stauffer</h3>
                <p class="text-base {{ $textColor }}">CEO at <a href="https://tighten.com" target="_blank">Tighten</a></p>
            </div>

            <!-- Dan Harrin -->
            <div class="flex flex-col gap-3">
                <div class="relative overflow-hidden">
                    <img class="w-full h-[368px] object-cover {{ $imageFilter }}" src="/img/speakers/dan.jpg" alt="Dan Harrin" />
                </div>
                <h3 class="text-2xl font-medium {{ $textColor }}">DAN HARRIN</h3>
                <p class="text-base {{ $textColor }}">Software Engineer at <a href="https://canyongbs.com" target="_blank">Canyon GBS,</a><br class="hidden lg:inline-block"> Co-creator of <a href="https://filamentphp.com" target="_blank">Filament</a></p>
            </div>

            <!-- Josh Cirre -->
            <div class="flex flex-col gap-3">
                <div class="relative overflow-hidden">
                    <img class="w-full h-[368px] object-cover {{ $imageFilter }}" src="/img/speakers/josh.jpg" alt="Josh Cirre" />
                </div>
                <h3 class="text-2xl font-medium {{ $textColor }}">JOSH CIRRE</h3>
                <p class="text-base {{ $textColor }}">Developer Relations Engineer at <a href="laravel.com">Laravel</a></p>
            </div>

            <!-- TBA Speaker -->
            {{-- <div class="flex flex-col gap-3">
                <div class="relative overflow-hidden">
                    <img class="w-full h-[368px] object-cover {{ $imageFilter }}" src="/img/speakers/tba.png" alt="TBA" />
                </div>
                <h3 class="text-2xl font-medium {{ $textColor }}">SOMEONE DOPE</h3>
                <p class="text-base {{ $textColor }}">Who Does Things </p>
            </div> --}}
        </div>

        <div class="lg:text-7xl md:text-5xl sm:text-5xl text-2xl uppercase {{ $textColor }} text-center mt-18 mb-16">
            More speakers dropping soon
        </div>

        <!-- Call to action -->
        {{-- <div class="flex items-center gap-4 mt-14 justify-center">
            <span class="text-base {{ $textColor }}">Interested in speaking?</span>
            <a href="#" class="relative text-base {{ $linkColor }} transition-colors">
                Apply to speak
                <img class="absolute bottom-0 left-0 w-full h-1 object-cover {{ $imageFilter }}" src="/img/fun-colors.png" alt="" />
            </a>
        </div> --}}
    </x-container>
</section>
