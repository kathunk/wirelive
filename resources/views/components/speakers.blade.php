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

        <!-- Speakers grid -->
        <div class="grid md:grid-cols-3 grid-cols-1 gap-8">
    <!-- Caleb Porzio -->
    <div class="flex flex-col gap-3">
      <div class="relative overflow-hidden">
        <img class="w-full h-[368px] object-cover {{ $imageFilter }}" src="/img/speakers/caleb.png" alt="Caleb Porzio" />
        <div class="absolute inset-0 bg-gradient-to-br from-red-500/20 to-orange-500/20 mix-blend-overlay"></div>
      </div>
      <h3 class="text-2xl font-medium {{ $textColor }}">CALEB PORZIO</h3>
      <p class="text-base {{ $textColor }}">Creator of Livewire</p>
    </div>

    <!-- Dan Harrin -->
    <div class="flex flex-col gap-3">
      <div class="relative overflow-hidden">
        <img class="w-full h-[368px] object-cover grayscale {{ $imageFilter }}" src="/img/speakers/caleb.png" alt="Dan Harrin" />
        <div class="absolute inset-0 bg-gradient-to-br from-gray-500/20 to-gray-700/20 mix-blend-overlay"></div>
      </div>
      <h3 class="text-2xl font-medium {{ $textColor }}">DAN HARRIN</h3>
      <p class="text-base {{ $textColor }}">Filament Core Team</p>
    </div>

    <!-- John Drexler -->
    <div class="flex flex-col gap-3">
      <div class="relative overflow-hidden">
        <img class="w-full h-[368px] object-cover grayscale {{ $imageFilter }}" src="/img/speakers/caleb.png" alt="John Drexler" />
        <div class="absolute inset-0 bg-gradient-to-br from-gray-500/20 to-gray-700/20 mix-blend-overlay"></div>
      </div>
      <h3 class="text-2xl font-medium {{ $textColor }}">JOHN DREXLER</h3>
      <p class="text-base {{ $textColor }}">Thunk Boi</p>
    </div>

    <!-- Kevin McKee -->
    <div class="flex flex-col gap-3">
      <div class="relative overflow-hidden">
        <img class="w-full h-[368px] object-cover grayscale {{ $imageFilter }}" src="/img/speakers/caleb.png" alt="Kevin McKee" />
        <div class="absolute inset-0 bg-gradient-to-br from-gray-500/20 to-gray-700/20 mix-blend-overlay"></div>
      </div>
      <h3 class="text-2xl font-medium {{ $textColor }}">KEVIN MCKEE</h3>
      <p class="text-base {{ $textColor }}">Someone from Somewhere</p>
    </div>

    <!-- Ryan Chandler -->
    <div class="flex flex-col gap-3">
      <div class="relative overflow-hidden">
        <img class="w-full h-[368px] object-cover grayscale {{ $imageFilter }}" src="/img/speakers/caleb.png" alt="Ryan Chandler" />
        <div class="absolute inset-0 bg-gradient-to-br from-gray-500/20 to-gray-700/20 mix-blend-overlay"></div>
      </div>
      <h3 class="text-2xl font-medium {{ $textColor }}">RYAN CHANDLER</h3>
      <p class="text-base {{ $textColor }}">Someone from Somewhere</p>
    </div>

    <!-- Patricio -->
    <div class="flex flex-col gap-3">
      <div class="relative overflow-hidden">
        <img class="w-full h-[368px] object-cover grayscale {{ $imageFilter }}" src="/img/speakers/caleb.png" alt="Patricio" />
        <div class="absolute inset-0 bg-gradient-to-br from-gray-500/20 to-gray-700/20 mix-blend-overlay"></div>
      </div>
      <h3 class="text-2xl font-medium {{ $textColor }}">PATRICIO</h3>
      <p class="text-base {{ $textColor }}">Someone from Somewhere</p>
    </div>
        </div>

        <!-- Call to action -->
        <div class="flex items-center gap-4 mt-36">
    <span class="text-base {{ $textColor }}">Interested in speaking?</span>
    <a href="#" class="relative text-base {{ $linkColor }} transition-colors">
      Apply to speak
      <img class="absolute bottom-0 left-0 w-full h-1 object-cover {{ $imageFilter }}" src="/img/fun-colors.png" alt="" />
    </a>
        </div>
    </x-container>
</section>
