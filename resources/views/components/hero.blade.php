@props([
    'fun' => false
])
@php
    $textClasses = $fun ? 'text-plum' : 'text-fossil';
    $buttonClasses = $fun ? 'bg-cobalt text-fossil' : 'bg-fossil text-night-rider';
@endphp


 <section class="isolate relative w-full pt-16 pb-32 {{ $textClasses }}">
    <x-container>
        <x-hero-fun-bg fun="{{ $fun }}" />

        <div class="relative w-full xl:min-h-[532px] lg:min-h-[480px] md:min-h-[420px] sm:min-h-[300px] min-h-[200px]">
            <div class="relative z-20">
                <div class="flex items-center gap-12 pt-[10%]">
                    <x-sub-headline onDark fun="{{ $fun }}" text="Buffalo, NY" />
                    <x-sub-headline onDark fun="{{ $fun }}" text="October 28-29, 2025" />
                </div>
                <x-headline onDark fun="{{ $fun }}" first="A chill & AWESOME" second="Livewire community event" />
            </div>
        </div>

        <div class="flex flex-col md:justify-between lg:justify-start md:flex-row md:items-center xl:gap-x-60 lg:gap-11 md:gap-2 gap-8 xl:mt-20 lg:mt-12 md:mt-8 xs:mt-8 mt-2">
            <x-sub-headline onDark fun="{{ $fun }}" first="Let's hang out, and talk all things" second="Livewire, Flux, Alpine, and Filament" />

            <a href="https://luma.com/bbpxn8k2" target="_blank" class="{{ $buttonClasses }} px-8 py-4 hover:opacity-70 transition-opacity duration-200 grow-0">
                <x-sub-headline onLight fun="{{ $fun }}" text="BUY TICKETS NOW" />
            </a>
        </div>
    </x-container>
</section>
